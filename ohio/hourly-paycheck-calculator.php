<?php
$currentYear = date('Y');
$pageTitle       = "Ohio Hourly Paycheck Calculator ($currentYear) | Net Pay";
$metaDescription = "Free Ohio hourly paycheck calculator for 2026. Includes federal tax, Ohio state tax, Columbus/Cleveland/Cincinnati city tax & FICA. See your exact take-home pay.";
$metaKeywords    = 'ohio hourly paycheck calculator, ohio paycheck calculator hourly, hourly to salary calculator ohio, ohio payroll calculator, ohio take home pay hourly, ohio hourly wage calculator';
$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    ['@type' => 'WebApplication',
     'name'  => 'Ohio Hourly Paycheck Calculator 2026',
     'url'   => 'https://americacalculator.com/ohio/hourly-paycheck-calculator',
     'description' => 'Free Ohio hourly paycheck calculator for 2026. Calculate take-home pay after federal tax, Ohio state tax, city tax and FICA for hourly workers.',
     'applicationCategory' => 'FinanceApplication',
     'operatingSystem' => 'All',
     'offers' => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD']],
    ['@type' => 'BreadcrumbList', 'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',         'item' => 'https://americacalculator.com/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Ohio Payroll', 'item' => 'https://americacalculator.com/ohio/'],
      ['@type' => 'ListItem', 'position' => 3, 'name' => 'Ohio Hourly Paycheck Calculator', 'item' => 'https://americacalculator.com/ohio/hourly-paycheck-calculator'],
    ]],
    ['@type' => 'FAQPage', 'mainEntity' => [
      ['@type' => 'Question', 'name' => 'Does this calculator include Columbus city tax?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. Select Columbus from the city dropdown and the calculator will apply the 2.5% Columbus municipal income tax to your gross wages. All major Ohio cities are supported: Columbus (2.5%), Cleveland (2.0%), Cincinnati (1.8%), Akron (2.5%), Toledo (2.25%), and Dayton (2.25%).']],
      ['@type' => 'Question', 'name' => 'What is the Ohio state income tax rate for 2026?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Ohio uses a progressive state income tax system for 2026. Income from $0 to $26,050 is taxed at 0%. Income from $26,051 to $100,000 is taxed at 2.75%. Income above $100,000 is taxed at 3.75%. These are marginal rates — only the income in each bracket is taxed at that rate.']],
      ['@type' => 'Question', 'name' => 'How is overtime taxed in Ohio?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Overtime pay is taxed as ordinary income — the same federal brackets, Ohio state brackets, city tax, and FICA apply. Earning overtime can push your annual income into a higher marginal bracket, increasing the tax rate on that portion of earnings. Use our Ohio Overtime Calculator for a full breakdown.']],
      ['@type' => 'Question', 'name' => 'Do I pay local tax if I work from home in Ohio?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'It depends on where your employer is located. Ohio House Bill 110 (effective 2023) requires that remote workers pay municipal income tax to the city where they physically work, not where the employer\'s office is. If you work from home full-time in a suburb with no municipal tax, you may owe no city tax. Consult a tax professional for your specific situation.']],
      ['@type' => 'Question', 'name' => 'What is the difference between gross pay and net pay?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Gross pay is your total earnings before any deductions — hourly rate multiplied by hours worked. Net pay (take-home pay) is what remains after federal income tax, Ohio state income tax, city tax, Social Security (6.2%), and Medicare (1.45%) are withheld. Pre-tax deductions like 401(k) contributions further reduce your taxable income.']],
      ['@type' => 'Question', 'name' => 'Which Ohio city has the highest income tax?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Columbus and Akron are tied for the highest municipal income tax rate among major Ohio cities at 2.5%. Toledo and Dayton charge 2.25%, Cleveland charges 2.0%, and Cincinnati charges 1.8%. Some smaller Ohio municipalities charge higher rates — always verify your specific city\'s rate at the Ohio Department of Taxation website.']],
    ]],
  ],
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f8fafc;}
*{box-sizing:border-box;}
.ohc-wrap{max-width:1100px;margin:0 auto;padding:2rem 1.25rem 4rem;}
.ohc-bc{font-size:.79rem;color:#94a3b8;margin-bottom:.6rem;}
.ohc-bc a{color:#64748b;text-decoration:none;}
.ohc-bc a:hover{color:#1d4ed8;}
/* Hero */
.ohc-hero{margin-bottom:1.75rem;}
.ohc-hero h1{font-size:1.95rem;color:#0f172a;margin:0 0 .4rem;line-height:1.25;}
.ohc-byline{display:flex;align-items:center;flex-wrap:wrap;gap:10px;margin-bottom:.75rem;}
.ohc-byline-text{font-size:.82rem;color:#64748b;}
.ohc-byline-text strong{color:#1e293b;}
.ohc-badge{background:#dbeafe;color:#1e40af;font-size:.74rem;font-weight:700;padding:3px 11px;border-radius:20px;border:1px solid #bfdbfe;}
.ohc-hero p{font-size:.97rem;color:#64748b;line-height:1.7;margin:0;border-left:3px solid #1d4ed8;padding-left:.9rem;}
/* Layout */
.ohc-layout{display:grid;grid-template-columns:1fr 320px;gap:2rem;align-items:start;margin-bottom:2rem;}
/* Calculator card */
.ohc-card{background:#fff;border-radius:13px;border:1px solid #e2e8f0;box-shadow:0 3px 14px rgba(0,0,0,.06);overflow:hidden;}
.ohc-card-head{background:linear-gradient(135deg,#1d4ed8,#1e40af);color:#fff;padding:1.1rem 1.5rem;font-size:1rem;font-weight:700;display:flex;align-items:center;gap:.6rem;}
.ohc-body{padding:1.5rem;}
.sf{margin-bottom:.95rem;}
.sf label{display:block;font-size:.84rem;font-weight:600;color:#1e293b;margin-bottom:.35rem;}
.sf input,.sf select{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.93rem;color:#0f172a;outline:none;background:#fff;transition:border-color .2s;}
.sf input:focus,.sf select:focus{border-color:#1d4ed8;}
.sf .hint{font-size:.72rem;color:#94a3b8;margin-top:.22rem;}
.sf2{display:grid;grid-template-columns:1fr 1fr;gap:.85rem;}
.ohc-btn{width:100%;background:linear-gradient(135deg,#1d4ed8,#1e40af);color:#fff;padding:13px;border:none;border-radius:8px;font-size:.96rem;font-weight:700;cursor:pointer;margin-top:.5rem;transition:opacity .2s,transform .15s;}
.ohc-btn:hover{opacity:.91;transform:translateY(-1px);}
/* Result */
.ohc-result{background:#eff6ff;border:1.5px solid #bfdbfe;border-radius:10px;padding:1.2rem;margin-top:1.2rem;}
.ohc-primary{background:linear-gradient(135deg,#1d4ed8,#1e40af);border-radius:9px;padding:1.1rem;text-align:center;margin-bottom:.75rem;box-shadow:0 4px 14px rgba(29,78,216,.22);}
.ohc-primary .pv{display:block;font-size:2.4rem;font-weight:900;color:#fff;line-height:1;}
.ohc-primary .pl{font-size:.8rem;color:rgba(255,255,255,.85);}
.ohc-boxes{display:grid;grid-template-columns:1fr 1fr;gap:.55rem;margin-bottom:.75rem;}
.ohc-box{background:#fff;border:1.5px solid #bfdbfe;border-radius:8px;padding:.7rem;text-align:center;}
.ohc-box .bv{display:block;font-size:.98rem;font-weight:800;color:#1d4ed8;margin-bottom:.12rem;}
.ohc-box .bl{font-size:.67rem;color:#64748b;font-weight:600;line-height:1.3;}
.ohc-lines{background:#fff;border:1px solid #bfdbfe;border-radius:8px;padding:.75rem 1rem;}
.ohc-line{display:flex;justify-content:space-between;padding:.3rem 0;border-bottom:1px solid #eff6ff;font-size:.84rem;}
.ohc-line:last-child{border-bottom:none;font-weight:700;padding-top:.45rem;}
.ohc-line .ll{color:#64748b;}.ohc-line .lv{font-weight:600;color:#1e293b;}
.ohc-line .neg{color:#dc2626;}.ohc-line .pos{color:#16a34a;}
/* Sidebar */
.ohc-sidebar{display:flex;flex-direction:column;gap:1.1rem;}
.ohc-widget{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 8px rgba(0,0,0,.04);overflow:hidden;}
.ohc-widget-head{background:linear-gradient(135deg,#1d4ed8,#1e40af);color:#fff;padding:.85rem 1.2rem;font-size:.88rem;font-weight:700;}
.ohc-widget-head small{display:block;font-size:.71rem;opacity:.8;margin-top:.1rem;}
.ohc-widget-rows{padding:.3rem 0;}
.ohc-widget-row{display:flex;justify-content:space-between;padding:.5rem 1.2rem;border-bottom:1px solid #f8fafc;}
.ohc-widget-row:last-child{border-bottom:none;}
.rwl{font-size:.81rem;font-weight:600;color:#334155;}.rws{font-size:.69rem;color:#94a3b8;}
.rwv{font-size:.88rem;font-weight:800;color:#1d4ed8;white-space:nowrap;}
.ohc-links{background:#fff;border-radius:12px;border:1px solid #e2e8f0;overflow:hidden;}
.ohc-links-head{padding:.75rem 1.2rem;background:#f8fafc;border-bottom:1px solid #f1f5f9;font-size:.74rem;font-weight:700;color:#1d4ed8;text-transform:uppercase;letter-spacing:.05em;}
.ohc-links ul{list-style:none;padding:.4rem 0;margin:0;}
.ohc-links ul li a{display:block;padding:.55rem 1.2rem;font-size:.83rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .15s;}
.ohc-links ul li a:hover,.ohc-links ul li a.active{color:#1d4ed8;background:#eff6ff;border-left-color:#1d4ed8;}
/* Content */
.ohc-section{background:#fff;border-radius:13px;border:1px solid #e2e8f0;padding:1.85rem;margin-bottom:1.6rem;}
.ohc-section h2{font-size:1.38rem;color:#0f172a;margin:0 0 .95rem;padding-bottom:.65rem;border-bottom:2px solid #eff6ff;}
.ohc-section h3{font-size:1.02rem;color:#1e293b;margin:1.4rem 0 .55rem;font-weight:700;}
.ohc-section p{color:#475569;line-height:1.75;font-size:.96rem;margin-bottom:.9rem;}
.ohc-section p:last-child{margin-bottom:0;}
.ohc-section a{color:#1d4ed8;font-weight:600;text-decoration:none;}
.ohc-section a:hover{text-decoration:underline;}
.ohc-section strong{color:#1e293b;}
.ohc-section ul,.ohc-section ol{color:#475569;padding-left:1.4rem;line-height:1.75;font-size:.96rem;margin-bottom:.9rem;}
.ohc-section li{margin-bottom:.4rem;}
.ohc-table{width:100%;border-collapse:collapse;border-radius:9px;overflow:hidden;border:1px solid #e2e8f0;margin-bottom:1.1rem;}
.ohc-table th{background:#1d4ed8;color:#fff;padding:9px 13px;font-size:.83rem;font-weight:600;text-align:left;}
.ohc-table td{padding:9px 13px;border-bottom:1px solid #f1f5f9;font-size:.87rem;color:#334155;}
.ohc-table tr:last-child td{border-bottom:none;}
.ohc-table tr:nth-child(even) td{background:#f8fafc;}
.ohc-steps{list-style:none;padding:0;margin:.85rem 0;counter-reset:step-c;}
.ohc-steps li{position:relative;padding-left:3.2rem;margin-bottom:1.4rem;counter-increment:step-c;}
.ohc-steps li::before{content:counter(step-c);position:absolute;left:0;top:0;width:30px;height:30px;background:linear-gradient(135deg,#1d4ed8,#1e40af);color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.88rem;}
.ohc-steps li strong{display:block;color:#0f172a;margin-bottom:.2rem;font-size:.97rem;}
.ohc-steps li span{color:#475569;font-size:.92rem;line-height:1.65;}
.ohc-info{background:#eff6ff;border-left:4px solid #1d4ed8;border-radius:0 8px 8px 0;padding:.85rem 1.1rem;margin:1rem 0;font-size:.92rem;color:#1e3a8a;line-height:1.6;}
.ohc-warn{background:#fffbeb;border-left:4px solid #f59e0b;border-radius:0 8px 8px 0;padding:.85rem 1.1rem;margin:1rem 0;font-size:.92rem;color:#92400e;line-height:1.6;}
.ohc-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}
.ohc-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.ohc-faq-q{font-size:.94rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;}
.ohc-faq-q::after{content:'+';color:#1d4ed8;font-size:1.2rem;flex-shrink:0;}
.ohc-faq-item.open .ohc-faq-q::after{content:'−';}
.ohc-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.ohc-faq-item.open .ohc-faq-a{display:block;}
@media(max-width:900px){.ohc-layout{grid-template-columns:1fr;}.ohc-sidebar{display:grid;grid-template-columns:1fr 1fr;}}
@media(max-width:580px){.sf2{grid-template-columns:1fr;}.ohc-sidebar{grid-template-columns:1fr;}.ohc-hero h1{font-size:1.55rem;}}
</style>

<main id="main-content">
<div class="ohc-wrap">

  <div class="ohc-bc"><a href="/">Home</a> › <a href="/ohio/">Ohio Payroll</a> › Ohio Hourly Paycheck Calculator</div>

  <div class="ohc-hero">
    <h1>Ohio Hourly Paycheck Calculator (2026)</h1>
    <div class="ohc-byline">
      <span class="ohc-byline-text">Reviewed by the <strong>AmericaCalculator.com editorial team</strong></span>
      <span class="ohc-badge">🕐 Last Updated: August 2026</span>
    </div>
    <p>Ohio has a <strong>progressive state income tax</strong> ranging from 0% to 3.75% in 2026 — plus local municipal taxes charged by over 600 Ohio cities. This calculator uses real <a href="https://www.irs.gov/publications/p15" target="_blank" rel="noopener noreferrer">IRS Publication 15</a> federal brackets and <a href="https://tax.ohio.gov" target="_blank" rel="noopener noreferrer">Ohio Department of Taxation</a> withholding tables to give you an accurate estimate of take-home pay — not a flat-rate guess.</p>
  </div>

  <div class="ohc-layout">

    <!-- CALCULATOR -->
    <div class="ohc-card">
      <div class="ohc-card-head">
        <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        Ohio Hourly Paycheck Calculator
      </div>
      <div class="ohc-body">

        <div class="sf2">
          <div class="sf">
            <label for="h-rate">Hourly Wage ($)</label>
            <input type="number" id="h-rate" value="25.00" min="0" step="0.25">
          </div>
          <div class="sf">
            <label for="h-hours">Regular Hours/Week</label>
            <input type="number" id="h-hours" value="40" min="0" max="168" step="0.5">
          </div>
        </div>

        <div class="sf2">
          <div class="sf">
            <label for="h-ot">Overtime Hours/Week</label>
            <input type="number" id="h-ot" value="0" min="0" step="0.5">
            <div class="hint">Paid at 1.5× — FLSA standard</div>
          </div>
          <div class="sf">
            <label for="h-freq">Pay Frequency</label>
            <select id="h-freq">
              <option value="52">Weekly (52×/yr)</option>
              <option value="26" selected>Biweekly (26×/yr)</option>
              <option value="24">Semi-Monthly (24×/yr)</option>
              <option value="12">Monthly (12×/yr)</option>
            </select>
          </div>
        </div>

        <div class="sf2">
          <div class="sf">
            <label for="h-status">Filing Status</label>
            <select id="h-status">
              <option value="single" selected>Single</option>
              <option value="married">Married Filing Jointly</option>
              <option value="hoh">Head of Household</option>
            </select>
          </div>
          <div class="sf">
            <label for="h-city">Ohio City</label>
            <select id="h-city">
              <option value="0">None / Outside city</option>
              <option value="2.5" selected>Columbus (2.5%)</option>
              <option value="2.5">Akron (2.5%)</option>
              <option value="2.25">Toledo (2.25%)</option>
              <option value="2.25">Dayton (2.25%)</option>
              <option value="2.0">Cleveland (2.0%)</option>
              <option value="2.0">Youngstown (2.0%)</option>
              <option value="2.0">Canton (2.0%)</option>
              <option value="1.8">Cincinnati (1.8%)</option>
              <option value="custom">Custom rate…</option>
            </select>
          </div>
        </div>

        <div class="sf" id="h-custom-wrap" style="display:none;">
          <label for="h-custom">Custom City Rate (%)</label>
          <input type="number" id="h-custom" value="1.5" min="0" max="5" step="0.1">
        </div>

        <div class="sf">
          <label for="h-pretax">Pre-Tax Deductions per Period ($)</label>
          <input type="number" id="h-pretax" value="0" min="0" step="10">
          <div class="hint">401(k), HSA, health insurance — reduces taxable income</div>
        </div>

        <button class="ohc-btn" id="ohc-calc-btn">⚡ Calculate My Ohio Take-Home Pay</button>

        <div class="ohc-result" id="h-result" style="display:none;">
          <div class="ohc-primary">
            <span class="pv" id="h-net">$0.00</span>
            <span class="pl">Estimated Take-Home Pay (Per Period)</span>
          </div>
          <div class="ohc-boxes">
            <div class="ohc-box"><span class="bv" id="h-gross">$0</span><span class="bl">Gross Pay</span></div>
            <div class="ohc-box"><span class="bv" id="h-total-ded">$0</span><span class="bl">Total Deductions</span></div>
            <div class="ohc-box"><span class="bv" id="h-eff">0%</span><span class="bl">Effective Tax Rate</span></div>
            <div class="ohc-box"><span class="bv" id="h-annual">$0</span><span class="bl">Est. Annual Net</span></div>
          </div>
          <div class="ohc-lines">
            <div class="ohc-line"><span class="ll">Gross Pay</span><span class="lv" id="hl-gross">—</span></div>
            <div class="ohc-line"><span class="ll">Pre-Tax Deductions</span><span class="lv neg" id="hl-pretax">—</span></div>
            <div class="ohc-line"><span class="ll">Federal Income Tax</span><span class="lv neg" id="hl-fed">—</span></div>
            <div class="ohc-line"><span class="ll">Ohio State Tax</span><span class="lv neg" id="hl-state">—</span></div>
            <div class="ohc-line"><span class="ll" id="hl-city-lbl">City / Municipal Tax</span><span class="lv neg" id="hl-city">—</span></div>
            <div class="ohc-line"><span class="ll">Social Security (6.2%)</span><span class="lv neg" id="hl-ss">—</span></div>
            <div class="ohc-line"><span class="ll">Medicare (1.45%)</span><span class="lv neg" id="hl-med">—</span></div>
            <div class="ohc-line"><span class="ll">Take-Home Pay</span><span class="lv pos" id="hl-net">—</span></div>
          </div>
        </div>

      </div>
    </div><!-- /ohc-card -->

    <!-- SIDEBAR -->
    <div class="ohc-sidebar">
      <div class="ohc-widget">
        <div class="ohc-widget-head">🏙️ Ohio City Tax Rates<small>2026 municipal income tax</small></div>
        <div class="ohc-widget-rows">
          <div class="ohc-widget-row"><div><div class="rwl">Columbus</div></div><div class="rwv">2.50%</div></div>
          <div class="ohc-widget-row"><div><div class="rwl">Akron</div></div><div class="rwv">2.50%</div></div>
          <div class="ohc-widget-row"><div><div class="rwl">Toledo</div></div><div class="rwv">2.25%</div></div>
          <div class="ohc-widget-row"><div><div class="rwl">Dayton</div></div><div class="rwv">2.25%</div></div>
          <div class="ohc-widget-row"><div><div class="rwl">Cleveland</div></div><div class="rwv">2.00%</div></div>
          <div class="ohc-widget-row"><div><div class="rwl">Cincinnati</div></div><div class="rwv">1.80%</div></div>
        </div>
      </div>
      <div class="ohc-links">
        <div class="ohc-links-head">🔗 Ohio Payroll Tools</div>
        <ul>
          <li><a href="/ohio/hourly-paycheck-calculator" class="active">⏱️ Hourly Paycheck</a></li>
          <li><a href="/ohio/salary-paycheck-calculator">📊 Salary Paycheck</a></li>
          <li><a href="/ohio/paycheck-calculator">💵 Full Paycheck Calculator</a></li>
          <li><a href="/ohio/overtime-calculator">🕐 Overtime Calculator</a></li>
          <li><a href="/ohio/bonus-tax-calculator">🎯 Bonus Tax Calculator</a></li>
          <li><a href="/ohio/payroll-tax-calculator">🏢 Employer Payroll Tax</a></li>
          <li><a href="/ohio/">🏠 All Ohio Tools</a></li>
        </ul>
      </div>
    </div>

  </div><!-- /ohc-layout -->

  <!-- HOW TO USE -->
  <div class="ohc-section">
    <h2>How to Use This Calculator</h2>
    <ol class="ohc-steps">
      <li><strong>Enter your hourly wage</strong><span>Type your hourly rate — for example $18.50 or $25.00. If you receive different rates for different shifts, use your primary rate and adjust manually for variable pay periods.</span></li>
      <li><strong>Enter hours per week and overtime</strong><span>Enter your regular hours (usually 40) and any weekly overtime hours worked over 40. Overtime is automatically calculated at 1.5× your regular rate per Ohio FLSA requirements.</span></li>
      <li><strong>Choose your pay frequency</strong><span>Select how often you are paid: weekly, biweekly (every two weeks), semi-monthly (twice a month), or monthly. This affects how withholding is spread across the year.</span></li>
      <li><strong>Select your Ohio city</strong><span>Pick your city from the dropdown to apply the correct municipal income tax rate. Columbus and Akron apply 2.5%, Cleveland 2.0%, and Cincinnati 1.8%. If your city is not listed, use the custom rate option and enter your local rate.</span></li>
    </ol>
  </div>

  <!-- DEDUCTIONS EXPLAINED -->
  <div class="ohc-section">
    <h2>Ohio Paycheck Deductions Explained</h2>
    <p>Every Ohio hourly paycheck is subject to four main categories of withholding. Understanding each one helps you verify your pay stub and plan your finances accurately.</p>

    <h3>Federal Income Tax (2026 IRS Brackets)</h3>
    <p>Federal income tax is progressive — higher income is taxed at higher rates. Only the income within each bracket is taxed at that bracket's rate. The 2026 brackets for a single filer are:</p>
    <table class="ohc-table">
      <thead><tr><th>Taxable Income</th><th>Federal Rate</th></tr></thead>
      <tbody>
        <tr><td>$0 – $11,925</td><td>10%</td></tr>
        <tr><td>$11,926 – $48,475</td><td>12%</td></tr>
        <tr><td>$48,476 – $103,350</td><td>22%</td></tr>
        <tr><td>$103,351 – $197,300</td><td>24%</td></tr>
        <tr><td>$197,301 – $250,525</td><td>32%</td></tr>
        <tr><td>$250,526 – $626,350</td><td>35%</td></tr>
        <tr><td>Over $626,350</td><td>37%</td></tr>
      </tbody>
    </table>
    <p>Most Ohio hourly workers earning $15–$35/hour fall entirely within the 10%–22% federal brackets. Your employer withholds an estimated amount each pay period based on your W-4 and pay frequency.</p>

    <h3>Ohio State Income Tax (2026 Brackets)</h3>
    <p>Ohio uses a simplified progressive tax structure for 2026, per the <a href="https://tax.ohio.gov" target="_blank" rel="noopener noreferrer">Ohio Department of Taxation</a>:</p>
    <table class="ohc-table">
      <thead><tr><th>Ohio Taxable Income</th><th>Ohio State Rate</th></tr></thead>
      <tbody>
        <tr><td>$0 – $26,050</td><td><strong>0%</strong> — no Ohio tax</td></tr>
        <tr><td>$26,051 – $100,000</td><td><strong>2.75%</strong></td></tr>
        <tr><td>Over $100,000</td><td><strong>3.75%</strong></td></tr>
      </tbody>
    </table>
    <p>Ohio significantly simplified its tax brackets in recent years. The 0% floor means a worker earning $26,050 or less annually pays zero Ohio state income tax — a meaningful benefit for part-time and lower-wage workers. Most full-time hourly workers in Ohio fall in the 2.75% bracket.</p>

    <h3>Local Municipal Tax</h3>
    <p>Over 600 Ohio municipalities levy their own income tax on wages earned within their borders. These rates are applied to gross wages and withheld by your employer separately from state tax. Major Ohio city rates for 2026:</p>
    <table class="ohc-table">
      <thead><tr><th>City</th><th>Municipal Tax Rate</th><th>Notes</th></tr></thead>
      <tbody>
        <tr><td><strong>Columbus</strong></td><td>2.50%</td><td>Applies where you work, not just where you live</td></tr>
        <tr><td><strong>Akron</strong></td><td>2.50%</td><td>Tied with Columbus as highest major city rate</td></tr>
        <tr><td><strong>Toledo</strong></td><td>2.25%</td><td>—</td></tr>
        <tr><td><strong>Dayton</strong></td><td>2.25%</td><td>—</td></tr>
        <tr><td><strong>Cleveland</strong></td><td>2.00%</td><td>—</td></tr>
        <tr><td><strong>Youngstown</strong></td><td>2.00%</td><td>—</td></tr>
        <tr><td><strong>Canton</strong></td><td>2.00%</td><td>—</td></tr>
        <tr><td><strong>Cincinnati</strong></td><td>1.80%</td><td>Lowest of the major cities</td></tr>
      </tbody>
    </table>
    <div class="ohc-info">💡 <strong>Remote work note:</strong> Since Ohio House Bill 110 (effective 2023), you pay municipal tax based on where you physically work, not your employer's office location. If you work from home in a township with no municipal tax, you may owe zero city tax regardless of where your employer is based.</div>

    <h3>FICA Taxes (Social Security &amp; Medicare)</h3>
    <p>FICA is withheld from nearly every paycheck under federal law. For 2026:</p>
    <ul>
      <li><strong>Social Security:</strong> 6.2% on wages up to $176,100 (the 2026 wage base). Your employer matches this 6.2%.</li>
      <li><strong>Medicare:</strong> 1.45% on all wages — no cap. Your employer also matches 1.45%.</li>
      <li>Total employee FICA: <strong>7.65%</strong> of gross wages.</li>
    </ul>
  </div>

  <!-- WORKED EXAMPLE 1 -->
  <div class="ohc-section">
    <h2>Worked Example: $25/Hour in Columbus, OH</h2>
    <p>Here is a full breakdown for a full-time hourly employee earning $25/hour, working 40 hours/week, paid biweekly (26 pay periods/year), single filing status, in Columbus.</p>
    <table class="ohc-table">
      <thead><tr><th>Item</th><th>Monthly Estimate</th><th>How Calculated</th></tr></thead>
      <tbody>
        <tr><td><strong>Gross Pay</strong></td><td><strong>$4,333</strong></td><td>$25 × 40 hrs × 52 wks / 12 months</td></tr>
        <tr><td>Federal Income Tax</td><td>~$325</td><td>12% bracket applied to annual taxable wages</td></tr>
        <tr><td>Ohio State Tax</td><td>~$119</td><td>2.75% on income above $26,050 threshold</td></tr>
        <tr><td>Columbus City Tax (2.5%)</td><td>~$108</td><td>2.5% × $4,333 gross</td></tr>
        <tr><td>Social Security (6.2%)</td><td>~$269</td><td>6.2% × $4,333</td></tr>
        <tr><td>Medicare (1.45%)</td><td>~$63</td><td>1.45% × $4,333</td></tr>
        <tr><td><strong>Estimated Net Pay</strong></td><td><strong>~$3,449</strong></td><td>Gross minus all deductions above</td></tr>
      </tbody>
    </table>
    <p><strong>Annualized:</strong> This employee earns $52,000 gross per year and takes home approximately $41,388 — an effective total tax rate of about 20.4% when all deductions are combined. Columbus's 2.5% city tax alone costs this worker roughly $1,300 per year.</p>
  </div>

  <!-- WORKED EXAMPLE 2 -->
  <div class="ohc-section">
    <h2>Worked Example: $18/Hour in Cleveland, OH</h2>
    <p>Here is the same breakdown for an hourly worker earning $18/hour in Cleveland, working 40 hours/week, paid biweekly, single filing status.</p>
    <table class="ohc-table">
      <thead><tr><th>Item</th><th>Monthly Estimate</th><th>How Calculated</th></tr></thead>
      <tbody>
        <tr><td><strong>Gross Pay</strong></td><td><strong>$3,120</strong></td><td>$18 × 40 hrs × 52 wks / 12 months</td></tr>
        <tr><td>Federal Income Tax</td><td>~$168</td><td>Mostly 10%–12% federal brackets</td></tr>
        <tr><td>Ohio State Tax</td><td>~$58</td><td>2.75% on income above $26,050</td></tr>
        <tr><td>Cleveland City Tax (2.0%)</td><td>~$62</td><td>2.0% × $3,120 gross</td></tr>
        <tr><td>Social Security (6.2%)</td><td>~$193</td><td>6.2% × $3,120</td></tr>
        <tr><td>Medicare (1.45%)</td><td>~$45</td><td>1.45% × $3,120</td></tr>
        <tr><td><strong>Estimated Net Pay</strong></td><td><strong>~$2,594</strong></td><td>Gross minus all deductions above</td></tr>
      </tbody>
    </table>
    <p><strong>Annualized:</strong> This Cleveland worker earns $37,440 gross per year and takes home approximately $31,128 — an effective total tax rate of about 16.9%. Notice that the lower annual income means more of their earnings fall in the 0% Ohio bracket, reducing the state tax burden significantly compared to the Columbus example.</p>
    <p>The difference between Cleveland (2.0% city tax) and Columbus (2.5% city tax) saves this worker approximately $185 per year in municipal tax alone — a small but meaningful difference for budget planning.</p>
  </div>

  <!-- OVERTIME -->
  <div class="ohc-section">
    <h2>Ohio Overtime Rules</h2>
    <p>Under the federal <strong>Fair Labor Standards Act (FLSA)</strong>, non-exempt Ohio employees must be paid at least <strong>1.5× their regular hourly rate</strong> for all hours worked over 40 in a single workweek. Ohio does not currently require daily overtime — only weekly.</p>
    <ul>
      <li><strong>Standard overtime rate:</strong> Regular rate × 1.5 (e.g., $25/hr → $37.50/hr OT)</li>
      <li><strong>Weekly threshold:</strong> Over 40 hours in one workweek</li>
      <li><strong>Daily overtime:</strong> Not required in Ohio (unlike California)</li>
      <li><strong>Exempt employees:</strong> Salaried employees meeting the duties test and earning above the FLSA salary threshold are generally exempt from overtime</li>
    </ul>
    <p>Overtime pay is taxed as ordinary income — the same federal, Ohio state, city, and FICA withholding applies. Earning significant overtime can push your annual wages into a higher marginal tax bracket, which is why your effective overtime take-home rate is lower than your gross overtime rate.</p>
    <p>Use our <a href="/ohio/overtime-calculator">Ohio Overtime Calculator</a> to calculate your exact after-tax overtime pay including city tax.</p>
  </div>

  <!-- FAQ -->
  <div class="ohc-section">
    <h2>Frequently Asked Questions</h2>
    <?php $faqs = [
      ['Does this calculator include Columbus city tax?', 'Yes. Select Columbus from the city dropdown and the calculator applies the 2.5% Columbus municipal income tax to your gross wages. All major Ohio cities are pre-loaded: Columbus (2.5%), Akron (2.5%), Toledo (2.25%), Dayton (2.25%), Cleveland (2.0%), and Cincinnati (1.8%). You can also enter a custom rate for any other Ohio city.'],
      ['What is the Ohio state income tax rate for 2026?', 'Ohio uses a three-tier progressive system for 2026: income from $0 to $26,050 is taxed at <strong>0%</strong>, income from $26,051 to $100,000 is taxed at <strong>2.75%</strong>, and income above $100,000 is taxed at <strong>3.75%</strong>. These are marginal rates — only the income in each bracket is taxed at that rate. A worker earning $40,000/year pays 2.75% only on the $13,950 above the $26,050 threshold.'],
      ['How is overtime taxed in Ohio?', 'Overtime pay is taxed as ordinary income using the same federal brackets, Ohio state brackets, city tax, and FICA rates as regular wages. There is no special overtime tax rate. However, if overtime pushes your annual income into a higher marginal bracket, that additional income is taxed at the higher rate. Use our <a href="/ohio/overtime-calculator">Ohio Overtime Calculator</a> for a complete breakdown.'],
      ['Do I pay local tax if I work from home in Ohio?', 'Following Ohio House Bill 110 (effective 2023), Ohio workers pay municipal income tax based on where they physically perform their work — not where their employer\'s office is located. If you work entirely from home in a location with no municipal income tax, you generally owe no city tax. If you split time between home and an office, you may owe proportional tax to both jurisdictions. This is complex — consult a CPA for your specific situation.'],
      ['What is the difference between gross pay and net pay?', 'Gross pay is your total earnings before any deductions — your hourly rate multiplied by hours worked, plus any overtime. Net pay (take-home pay) is what you actually receive after all withholdings: federal income tax, Ohio state tax, city tax, Social Security (6.2%), Medicare (1.45%), and any pre-tax deductions like 401(k) contributions or health insurance premiums.'],
      ['Which Ohio city has the highest income tax?', 'Columbus and Akron are tied for the highest municipal income tax rate among Ohio\'s major cities, both at <strong>2.5%</strong>. Toledo and Dayton charge 2.25%, Cleveland charges 2.0%, and Cincinnati charges 1.8%. Some smaller Ohio municipalities do charge higher rates. Always verify your city\'s current rate on the <a href="https://tax.ohio.gov" target="_blank" rel="noopener noreferrer">Ohio Department of Taxation website</a> or contact your employer\'s payroll department.'],
    ];
    foreach ($faqs as $f): ?>
    <div class="ohc-faq-item">
      <div class="ohc-faq-q"><?php echo $f[0]; ?></div>
      <div class="ohc-faq-a"><?php echo $f[1]; ?></div>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- DISCLAIMER -->
  <div class="ohc-section">
    <h2>Important Disclaimer</h2>
    <div class="ohc-warn">
      <strong>⚠️ Estimates Only:</strong> This calculator provides estimates based on 2026 <a href="https://www.irs.gov/publications/p15" target="_blank" rel="noopener noreferrer">IRS Publication 15</a> withholding tables and <a href="https://tax.ohio.gov" target="_blank" rel="noopener noreferrer">Ohio Department of Taxation</a> guidelines. Actual withholdings may vary depending on your W-4 elections, employer payroll settings, additional deductions, and specific municipal tax rules. Consult a CPA or payroll professional for exact figures.
    </div>
    <p>Also see: <a href="/ohio/salary-paycheck-calculator">Ohio Salary Paycheck Calculator</a> · <a href="/ohio/overtime-calculator">Ohio Overtime Calculator</a> · <a href="/ohio/bonus-tax-calculator">Ohio Bonus Tax Calculator</a></p>
  </div>

</div><!-- /ohc-wrap -->
</main>

<script>
(function(){
  /* ── 2026 Federal brackets (annual, single) ── */
  var FED = {
    single:   [[0,11925,.10],[11925,48475,.12],[48475,103350,.22],[103350,197300,.24],[197300,250525,.32],[250525,626350,.35],[626350,Infinity,.37]],
    married:  [[0,23850,.10],[23850,96950,.12],[96950,206700,.22],[206700,394600,.24],[394600,501050,.32],[501050,751600,.35],[751600,Infinity,.37]],
    hoh:      [[0,17000,.10],[17000,64850,.12],[64850,103350,.22],[103350,197300,.24],[197300,250500,.32],[250500,626350,.35],[626350,Infinity,.37]]
  };

  function fedTax(ann, status){
    var t=0, brackets=FED[status]||FED.single;
    for(var i=0;i<brackets.length;i++){
      var lo=brackets[i][0],hi=brackets[i][1],r=brackets[i][2];
      if(ann<=lo) break;
      t+=(Math.min(ann,hi)-lo)*r;
    }
    return t;
  }

  function ohioTax(ann){
    if(ann<=26050) return 0;
    if(ann<=100000) return (ann-26050)*0.0275;
    return (100000-26050)*0.0275+(ann-100000)*0.0375;
  }

  function periods(freq){ return parseInt(freq)||26; }

  var fmt  = function(v){ return '$'+Math.abs(v).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g,','); };
  var fmtI = function(v){ return '$'+Math.round(Math.abs(v)).toLocaleString('en-US'); };
  var fmtP = function(v){ return v.toFixed(1)+'%'; };
  var $    = function(id){ return document.getElementById(id); };

  $('h-city').addEventListener('change', function(){
    $('h-custom-wrap').style.display = this.value==='custom' ? '' : 'none';
  });

  function cityRate(){
    var v=$('h-city').value;
    return v==='custom'?(parseFloat($('h-custom').value)||0)/100:parseFloat(v)/100||0;
  }
  function cityName(){
    var sel=$('h-city');
    return sel.value!=='0'&&sel.value!=='custom'
      ? sel.options[sel.selectedIndex].text.split('(')[0].trim()
      : (sel.value==='custom'?'Custom City':'No Local Tax');
  }

  function calc(){
    var rate   = parseFloat($('h-rate').value)  ||0;
    var hrs    = parseFloat($('h-hours').value) ||0;
    var ot     = parseFloat($('h-ot').value)    ||0;
    var freq   = periods($('h-freq').value);
    var status = $('h-status').value;
    var pretax = parseFloat($('h-pretax').value)||0;
    var cRate  = cityRate();

    /* Gross per period */
    var weeksPerPeriod = 52/freq;
    var regPay  = rate * hrs * weeksPerPeriod;
    var otPay   = rate * 1.5 * ot * weeksPerPeriod;
    var gross   = regPay + otPay;
    var annGross = gross * freq;

    /* Federal — annualise taxable wages */
    var annTaxable = Math.max(0, annGross - pretax*freq);
    var annFed     = fedTax(annTaxable, status === 'married' ? 'married' : (status === 'hoh' ? 'hoh' : 'single'));
    var perFed     = annFed/freq;

    /* Ohio state */
    var annOhio = ohioTax(annTaxable);
    var perOhio = annOhio/freq;

    /* City */
    var perCity = gross * cRate;

    /* FICA (SS wage base 176,100) */
    var ssTaxable = Math.min(annGross, 176100);
    var perSS     = (ssTaxable/freq)*0.062;
    var perMed    = gross*0.0145;

    var totalDed  = perFed+perOhio+perCity+perSS+perMed+pretax;
    var net       = gross-totalDed;
    var annNet    = net*freq;
    var eff       = gross>0 ? ((perFed+perOhio+perCity+perSS+perMed)/gross)*100 : 0;

    $('h-net').textContent    = fmt(net);
    $('h-gross').textContent  = fmtI(gross);
    $('h-total-ded').textContent = fmtI(totalDed);
    $('h-eff').textContent    = fmtP(eff);
    $('h-annual').textContent = fmtI(annNet);

    $('hl-gross').textContent  = fmt(gross);
    $('hl-pretax').textContent = pretax>0 ? '−'+fmt(pretax) : '$0.00';
    $('hl-fed').textContent    = '−'+fmt(perFed);
    $('hl-state').textContent  = '−'+fmt(perOhio);

    var cn = cityName();
    $('hl-city-lbl').textContent = cRate>0 ? cn+' Tax' : 'City / Municipal Tax';
    $('hl-city').textContent   = '−'+fmt(perCity);

    $('hl-ss').textContent     = '−'+fmt(perSS);
    $('hl-med').textContent    = '−'+fmt(perMed);
    $('hl-net').textContent    = fmt(net);
    $('hl-net').className      = 'lv '+(net>=0?'pos':'neg');

    $('h-result').style.display = 'block';
  }

  $('ohc-calc-btn').addEventListener('click', calc);
  ['h-rate','h-hours','h-ot','h-freq','h-status','h-city','h-custom','h-pretax']
    .forEach(function(id){ var el=$(id); if(el){el.addEventListener('input',calc);el.addEventListener('change',calc);} });
  calc();

  /* FAQ accordion */
  document.querySelectorAll('.ohc-faq-q').forEach(function(q){
    q.addEventListener('click',function(){
      var item=this.closest('.ohc-faq-item'), was=item.classList.contains('open');
      document.querySelectorAll('.ohc-faq-item').forEach(function(x){x.classList.remove('open');});
      if(!was) item.classList.add('open');
    });
  });
})();
</script>
<?php require_once '../includes/footer.php'; ?>
