<?php
$currentYear = date('Y');
$pageTitle       = "Pennsylvania Paycheck Calculator ($currentYear) — Net Pay";
$metaDescription = "Free Pennsylvania paycheck calculator for $currentYear. Calculate take-home pay with PA flat 3.07% state tax, local EIT, federal withholding, and FICA.";
$metaKeywords    = 'Pennsylvania paycheck calculator, PA paycheck calculator 2026, Pennsylvania take home pay, PA salary calculator, Pennsylvania tax calculator';
$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'WebApplication','name'=>'Pennsylvania Paycheck Calculator',
   'url'=>'https://americacalculator.com/pennsylvania/paycheck-calculator',
   'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All',
   'description'=>'Calculate take-home pay for Pennsylvania employees with flat 3.07% state tax, local EIT, federal withholding, and FICA deductions.',
   'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Pennsylvania','item'=>'https://americacalculator.com/pennsylvania/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'PA Paycheck Calculator','item'=>'https://americacalculator.com/pennsylvania/paycheck-calculator'],
  ]],
  ['@type'=>'HowTo','name'=>'How to Calculate Your Pennsylvania Take-Home Pay','totalTime'=>'PT2M','step'=>[
    ['@type'=>'HowToStep','position'=>1,'name'=>'Enter income','text'=>'Input your gross annual salary or hourly rate.'],
    ['@type'=>'HowToStep','position'=>2,'name'=>'Select pay frequency','text'=>'Choose bi-weekly, weekly, semi-monthly, or monthly.'],
    ['@type'=>'HowToStep','position'=>3,'name'=>'Enter local EIT rate','text'=>'Pennsylvania has local Earned Income Tax rates varying by municipality (0.5% to 3.9%). Enter your local rate or use the default 1%.'],
    ['@type'=>'HowToStep','position'=>4,'name'=>'Review breakdown','text'=>'See your net paycheck with itemized federal, PA state, local EIT, Social Security, and Medicare deductions.'],
  ]],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'What is the Pennsylvania state income tax rate?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Pennsylvania has a flat state income tax rate of 3.07%. Unlike most states with progressive brackets, PA charges the same 3.07% on all earned income regardless of amount. This makes PA\'s state tax relatively simple but also means lower earners pay the same rate as higher earners. PA does not allow a standard deduction against state income tax.']],
    ['@type'=>'Question','name'=>'What is the PA local Earned Income Tax (EIT)?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Pennsylvania municipalities levy a local Earned Income Tax (EIT) on wages, typically split between your resident municipality and school district. Rates range from 0.5% to 3.9810% (Philadelphia). The most common rates outside Philadelphia are 1% to 2%. This is in addition to the 3.07% PA state tax. Your employer withholds this based on your home address.']],
    ['@type'=>'Question','name'=>'How much take-home on $75K in Pennsylvania?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'On $75,000 gross (single, bi-weekly, 1% local EIT, no pre-tax deductions): federal tax ~$8,028, PA state tax ~$2,303, local EIT ~$750, Social Security ~$4,650, Medicare ~$1,088. Estimated net: ~$58,181/year or ~$2,238 per bi-weekly paycheck.']],
    ['@type'=>'Question','name'=>'Does Pennsylvania tax 401(k) contributions?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Pennsylvania does NOT allow 401(k) contributions to reduce state taxable income. Unlike federal taxes, PA taxes your gross wages before pre-tax retirement contributions. This is one of PA\'s unique and often frustrating features — your 401(k) saves federal taxes but not PA state tax. However, 401(k) distributions in retirement are NOT taxed by PA.']],
    ['@type'=>'Question','name'=>'Does PA tax retirement income?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'No. Pennsylvania does not tax Social Security, pensions, 401(k) distributions, IRA withdrawals, or other retirement income. This makes PA one of the most tax-friendly states for retirees, despite its 3.07% flat tax on earned wages. The retirement income exclusion is a constitutional provision.']],
    ['@type'=>'Question','name'=>'What is the Philadelphia wage tax?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Philadelphia charges a Wage Tax of 3.75% for residents and 3.44% for non-residents who work in Philadelphia (rates for fiscal year 2025-2026). This replaces the standard local EIT. Combined with PA\'s 3.07% state tax, Philadelphia residents pay 6.82% in state + local income tax before federal taxes.']],
    ['@type'=>'Question','name'=>'What are PA SUI and local services taxes?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'PA employers withhold SUI (State Unemployment Insurance) at 0.06% from employee wages. Some municipalities also levy a Local Services Tax (LST) of up to $52/year ($1/week), deducted from wages of those earning over $12,000/year. These are small but add to total withholdings.']],
    ['@type'=>'Question','name'=>'How does PA compare to neighboring states?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'PA\'s flat 3.07% is lower than New York (4-10.9%), New Jersey (1.4-10.75%), and Maryland (2-5.75% + local). However, PA\'s local EIT adds 1-4% depending on municipality. Delaware has no sales tax but higher income tax rates (2.2-6.6%). PA has a 6% sales tax (7% in Philadelphia, 8% in Allegheny County).']],
  ]],
]];
require_once __DIR__ . '/../includes/header.php';
?>
<style>
:root{--primary:#b45309;--primary-hover:#92400e;--primary-light:#fffbeb;--slate-900:#0f172a;--slate-800:#1e293b;--slate-700:#334155;--slate-600:#475569;--slate-200:#e2e8f0;--slate-100:#f1f5f9;--slate-50:#f8fafc;--white:#fff;--shadow-xl:0 20px 25px -5px rgb(0 0 0/.1);--radius:16px;}
body{background:var(--slate-50);color:var(--slate-800);line-height:1.6;}
.main-wrapper{max-width:1100px;margin:2rem auto;padding:0 1.5rem;}
.page-title-area{text-align:center;margin-bottom:2.5rem;}
.page-title-area h1{font-size:2.1rem;font-weight:800;color:var(--slate-900);margin-bottom:.75rem;line-height:1.25;}
.page-title-area p{color:var(--slate-600);font-size:1.02rem;max-width:760px;margin:0 auto;line-height:1.72;}
.rc-badges{display:flex;flex-wrap:wrap;gap:.5rem;justify-content:center;margin-bottom:1.5rem;}
.rc-badge{display:inline-flex;align-items:center;gap:.35rem;padding:5px 12px;border-radius:20px;font-size:.73rem;font-weight:700;}
.rc-badge-amber{background:#fef3c7;color:#92400e;border:1px solid #fde68a;}
.rc-badge-green{background:#dcfce7;color:#166534;border:1px solid #86efac;}
.rc-badge-blue{background:#dbeafe;color:#1e40af;border:1px solid #93c5fd;}

.calculator-container{display:grid;grid-template-columns:1.2fr 1fr;gap:0;background:var(--white);border-radius:var(--radius);box-shadow:var(--shadow-xl);border:1px solid var(--slate-200);overflow:hidden;margin-bottom:2rem;}
.form-panel{padding:2.25rem;}
.results-panel{background:linear-gradient(135deg,#78350f 0%,#1e293b 100%);color:var(--white);padding:2.25rem;display:flex;flex-direction:column;justify-content:space-between;}
.section-subtitle{font-size:.8rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:var(--primary);margin-bottom:1rem;border-bottom:1px solid #fef3c7;padding-bottom:.4rem;}
.input-group{margin-bottom:1.15rem;}
.input-group label{display:block;font-size:.88rem;font-weight:600;color:var(--slate-700);margin-bottom:.35rem;}
.input-wrapper{position:relative;display:flex;align-items:center;}
.input-prefix{position:absolute;left:1rem;color:var(--slate-600);font-weight:600;pointer-events:none;}
.input-wrapper input,.input-wrapper select{width:100%;padding:.7rem 1rem .7rem 2.1rem;border:1.5px solid var(--slate-200);border-radius:8px;font-size:.95rem;font-weight:600;color:var(--slate-900);background:var(--white);outline:none;transition:border-color .2s,box-shadow .2s;}
.input-wrapper select{padding-left:1rem;}
.input-wrapper input:focus,.input-wrapper select:focus{border-color:var(--primary);box-shadow:0 0 0 3px rgba(180,83,9,.1);}
.grid-2-col{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.hint{font-size:.72rem;color:#94a3b8;margin-top:.2rem;}

.hero-paycheck{background:rgba(251,191,36,.12);border:1px solid rgba(251,191,36,.25);border-radius:14px;padding:1.75rem;text-align:center;margin-bottom:1.5rem;}
.hero-paycheck .label{font-size:.82rem;color:#fde68a;font-weight:700;text-transform:uppercase;letter-spacing:.04em;}
.hero-paycheck .val-main{font-size:2.75rem;font-weight:800;color:#fbbf24;margin:.25rem 0;}
.hero-paycheck .val-sub{font-size:.9rem;color:#cbd5e1;}

.breakdown-row{display:flex;justify-content:space-between;font-size:.92rem;padding:.45rem 0;border-bottom:1px solid rgba(255,255,255,.07);}
.breakdown-row:last-child{border-bottom:none;}
.breakdown-row span:first-child{color:#cbd5e1;}
.deduction{color:#fca5a5!important;font-weight:700;}
.neutral{color:#38bdf8!important;font-weight:700;}

.state-highlight{background:#fffbeb;padding:1rem;border-radius:8px;border:1px solid #fde68a;display:flex;align-items:center;gap:.75rem;margin-top:.5rem;}
.state-highlight .icon{font-size:1.25rem;}
.state-highlight .text{font-size:.84rem;color:#92400e;}
.state-highlight .text strong{display:block;}

.actions-row{display:flex;gap:.5rem;margin-top:1rem;}
.actions-row button{flex:1;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.15);color:#e2e8f0;padding:8px;border-radius:8px;font-size:.78rem;font-weight:600;cursor:pointer;transition:background .2s;}
.actions-row button:hover{background:rgba(255,255,255,.2);}

.calculator-content-body{margin-top:2rem;background:#fff;border-radius:16px;border:1px solid #e2e8f0;padding:2.5rem;box-shadow:0 4px 20px rgba(0,0,0,.04);}
.calculator-content-body h2{font-size:1.5rem;color:#0f172a;margin:2rem 0 1rem;border-bottom:2px solid #fef3c7;padding-bottom:.5rem;}
.calculator-content-body h2:first-child{margin-top:0;}
.calculator-content-body h3{font-size:1.15rem;color:#1e293b;margin:1.5rem 0 .75rem;}
.calculator-content-body p{color:#475569;font-size:.98rem;line-height:1.75;margin-bottom:1.25rem;}
.calculator-content-body ul,.calculator-content-body ol{margin-left:1.5rem;margin-bottom:1.5rem;color:#475569;line-height:1.75;}
.calculator-content-body li{margin-bottom:.5rem;}
.calculator-content-body a{color:#b45309;font-weight:600;text-decoration:none;}
.calculator-content-body a:hover{text-decoration:underline;}
.table-responsive{overflow-x:auto;margin:1.5rem 0;}
.data-table{width:100%;border-collapse:collapse;border:1px solid #e2e8f0;border-radius:8px;overflow:hidden;}
.data-table th{background:#78350f;color:#fff;padding:10px 14px;text-align:left;font-size:.85rem;}
.data-table td{padding:10px 14px;border-bottom:1px solid #f1f5f9;color:#334155;font-size:.9rem;}
.data-table tr:nth-child(even) td{background:#f8fafc;}
.data-table tr:last-child td{border-bottom:none;}

.rc-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}.rc-faq-item:last-child{border-bottom:none;}
.rc-faq-q{font-size:.94rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;user-select:none;}
.rc-faq-q::after{content:'+';color:#b45309;font-size:1.2rem;flex-shrink:0;}
.rc-faq-item.open .rc-faq-q::after{content:'−';}
.rc-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.rc-faq-item.open .rc-faq-a{display:block;}
.rc-related{display:grid;grid-template-columns:repeat(auto-fit,minmax(175px,1fr));gap:.75rem;margin-top:.75rem;}
.rc-rel-link{display:block;background:#fffbeb;border:1.5px solid #fde68a;border-radius:8px;padding:.75rem 1rem;font-size:.85rem;font-weight:600;color:#b45309;text-decoration:none;text-align:center;transition:background .15s;}
.rc-rel-link:hover{background:#fef3c7;}

.privacy-notice{display:flex;align-items:center;gap:.5rem;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:8px;padding:.75rem 1rem;font-size:.78rem;color:#166534;margin-bottom:2rem;}
@media(max-width:860px){.calculator-container{grid-template-columns:1fr;}.grid-2-col{grid-template-columns:1fr;}.page-title-area h1{font-size:1.5rem;}}
@media print{.site-header,.site-footer,.actions-row,.rc-badges,.privacy-notice{display:none!important;}.calculator-container{box-shadow:none;border:1px solid #ccc;}}
</style>

<main class="main-wrapper">
<div style="font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;"><a href="/" style="color:#64748b;text-decoration:none;">Home</a> › <a href="/pennsylvania/" style="color:#64748b;text-decoration:none;">Pennsylvania</a> › Paycheck Calculator</div>

<div class="page-title-area">
  <h1>Pennsylvania Paycheck Calculator (<?php echo $currentYear; ?>)</h1>
  <p>Calculate your take-home pay in Pennsylvania with the flat 3.07% state income tax, local Earned Income Tax (EIT), federal brackets, Social Security, and Medicare. Pennsylvania is unique: its <strong>flat-rate state tax is simple, but local EIT rates vary dramatically</strong> by municipality — from 0.5% in some suburbs to 3.98% in Philadelphia. Enter your local EIT rate below for an accurate per-paycheck estimate.</p>
</div>

<div class="rc-badges">
  <span class="rc-badge rc-badge-amber">🔔 PA Flat State Tax: 3.07%</span>
  <span class="rc-badge rc-badge-blue">🏘️ Local EIT: 0.5% – 3.98%</span>
  <span class="rc-badge rc-badge-green">🔒 No Data Stored</span>
</div>

<div class="calculator-container">
  <div class="form-panel">
    <div class="section-subtitle">1. Income &amp; Pay Schedule</div>
    <div class="grid-2-col">
      <div class="input-group"><label for="payType">Pay Type</label><div class="input-wrapper"><select id="payType" style="padding-left:1rem;"><option value="salary" selected>Annual Salary</option><option value="hourly">Hourly Rate</option></select></div></div>
      <div class="input-group"><label for="payFrequency">Pay Frequency</label><div class="input-wrapper"><select id="payFrequency" style="padding-left:1rem;"><option value="26" selected>Bi-Weekly (26/Yr)</option><option value="52">Weekly (52/Yr)</option><option value="24">Semi-Monthly (24/Yr)</option><option value="12">Monthly (12/Yr)</option></select></div></div>
    </div>
    <div id="salaryInput"><div class="input-group"><label for="grossSalary">Gross Annual Salary</label><div class="input-wrapper"><span class="input-prefix">$</span><input type="number" id="grossSalary" value="70000" step="1000" min="0"></div></div></div>
    <div id="hourlyInput" style="display:none;"><div class="grid-2-col"><div class="input-group"><label for="hourlyRate">Hourly Rate</label><div class="input-wrapper"><span class="input-prefix">$</span><input type="number" id="hourlyRate" value="33" step=".50" min="0"></div></div><div class="input-group"><label for="hoursPerWeek">Hours / Week</label><div class="input-wrapper"><span class="input-prefix">#</span><input type="number" id="hoursPerWeek" value="40" step="1" min="1" max="80"></div></div></div></div>

    <div class="section-subtitle" style="margin-top:1.5rem;">2. Filing Status &amp; Local Tax</div>
    <div class="grid-2-col">
      <div class="input-group"><label for="filingStatus">Filing Status</label><div class="input-wrapper"><select id="filingStatus" style="padding-left:1rem;"><option value="single" selected>Single Filer</option><option value="married">Married Filing Jointly</option></select></div></div>
      <div class="input-group"><label for="localEIT">Local EIT Rate (%)</label><div class="input-wrapper"><span class="input-prefix">%</span><input type="number" id="localEIT" value="1.0" step="0.1" min="0" max="4"></div><div class="hint">Philadelphia: 3.75% | Pittsburgh: 3% | Suburbs: 1–2%</div></div>
    </div>

    <div class="section-subtitle" style="margin-top:1.5rem;">3. Pre-Tax Deductions (Optional)</div>
    <div class="grid-2-col">
      <div class="input-group"><label for="retirement">401(k) per Year</label><div class="input-wrapper"><span class="input-prefix">$</span><input type="number" id="retirement" value="0" step="500" min="0"></div><div class="hint">⚠️ Not deductible for PA state tax</div></div>
      <div class="input-group"><label for="hsa">HSA per Year</label><div class="input-wrapper"><span class="input-prefix">$</span><input type="number" id="hsa" value="0" step="250" min="0"></div><div class="hint">Deductible for federal, not PA state</div></div>
    </div>

    <div class="state-highlight">
      <span class="icon">🔔</span>
      <div class="text"><strong>PA Tax Quirk: 401(k) &amp; HSA NOT deductible at state level</strong>Pennsylvania taxes gross wages — pre-tax retirement contributions do not reduce PA state tax. However, PA does NOT tax retirement distributions (401k, pension, Social Security).</div>
    </div>
  </div>

  <div class="results-panel">
    <div>
      <h3 style="font-size:1.2rem;font-weight:800;margin-bottom:1.25rem;">Take-Home Paycheck</h3>
      <div class="hero-paycheck">
        <div class="label">Net Pay Per Paycheck</div>
        <div class="val-main" id="netPaycheckDisplay">$0</div>
        <div class="val-sub" id="netAnnualDisplay">$0 / year net take-home</div>
      </div>
      <div style="background:rgba(255,255,255,.05);border-radius:12px;padding:1.15rem;">
        <div class="breakdown-row"><span>Gross Paycheck:</span><span class="neutral" id="grossCheckDisplay">$0</span></div>
        <div class="breakdown-row"><span>Federal Income Tax:</span><span class="deduction" id="fedTaxDisplay">−$0</span></div>
        <div class="breakdown-row"><span>PA State Tax (3.07%):</span><span class="deduction" id="stateTaxDisplay">−$0</span></div>
        <div class="breakdown-row"><span>Local EIT:</span><span class="deduction" id="localTaxDisplay">−$0</span></div>
        <div class="breakdown-row"><span>Social Security (6.2%):</span><span class="deduction" id="ssTaxDisplay">−$0</span></div>
        <div class="breakdown-row"><span>Medicare (1.45%):</span><span class="deduction" id="medTaxDisplay">−$0</span></div>
        <div class="breakdown-row" id="retirementRow" style="display:none;"><span>401(k) Contribution:</span><span class="deduction" id="retDisplay">−$0</span></div>
      </div>
    </div>
    <div style="text-align:center;border-top:1px solid rgba(255,255,255,.1);padding-top:1rem;margin-top:1rem;">
      <div style="font-size:.82rem;color:#94a3b8;">Total Effective Deduction Rate:</div>
      <div style="font-size:1.3rem;font-weight:800;color:#fbbf24;" id="effectiveTaxRate">0% Withheld</div>
    </div>
    <div class="actions-row"><button onclick="window.print()">🖨️ Print</button><button onclick="downloadPA()">⬇️ CSV</button></div>
  </div>
</div>

<div class="privacy-notice"><span>🔒</span><span>All calculations run locally in your browser. No personal or financial data is stored, transmitted, or shared.</span></div>

<article class="calculator-content-body">
  <h2>Pennsylvania Paycheck Taxes Explained (<?php echo $currentYear; ?>)</h2>
  <p>Pennsylvania uses a <strong>flat state income tax of 3.07%</strong> on all earned income — one of the simplest state tax systems in the US. However, PA is unique in several critical ways that affect your take-home pay:</p>
  <ul>
    <li><strong>No standard deduction at the state level:</strong> PA taxes your gross wages without any standard deduction or personal exemption reduction.</li>
    <li><strong>401(k) contributions are NOT deductible:</strong> Unlike federal and most state systems, PA taxes your gross wages before pre-tax retirement contributions. Your 401(k) saves federal taxes but not PA state tax.</li>
    <li><strong>Local Earned Income Tax (EIT):</strong> Nearly every PA municipality levies a local EIT on top of the 3.07% state rate. Rates range from 0.5% to 3.98% (Philadelphia).</li>
    <li><strong>No tax on retirement distributions:</strong> The trade-off — PA does not tax Social Security, pensions, 401(k)/IRA withdrawals, or other retirement income.</li>
  </ul>

  <h2>Common Local EIT Rates in Pennsylvania</h2>
  <div class="table-responsive">
    <table class="data-table">
      <thead><tr><th>Location</th><th>Local EIT Rate</th><th>Combined (State + Local)</th></tr></thead>
      <tbody>
        <tr><td><strong>Philadelphia</strong></td><td>3.75% (wage tax)</td><td>6.82%</td></tr>
        <tr><td><strong>Pittsburgh</strong></td><td>3.00%</td><td>6.07%</td></tr>
        <tr><td>Scranton</td><td>3.40%</td><td>6.47%</td></tr>
        <tr><td>Reading</td><td>3.60%</td><td>6.67%</td></tr>
        <tr><td>Allentown suburbs</td><td>1.0% – 1.5%</td><td>4.07% – 4.57%</td></tr>
        <tr><td>Chester County suburbs</td><td>1.0%</td><td>4.07%</td></tr>
        <tr><td>Lancaster County</td><td>1.0% – 1.5%</td><td>4.07% – 4.57%</td></tr>
        <tr><td>Rural PA municipalities</td><td>0.5% – 1.0%</td><td>3.57% – 4.07%</td></tr>
      </tbody>
    </table>
  </div>

  <h2>PA vs. Neighboring States: Take-Home Comparison ($75K Single)</h2>
  <div class="table-responsive">
    <table class="data-table">
      <thead><tr><th>State</th><th>State Tax</th><th>Local Tax</th><th>Est. Annual Net</th></tr></thead>
      <tbody>
        <tr><td><strong>PA (1% local)</strong></td><td>~$2,303 (3.07%)</td><td>~$750</td><td><strong>~$58,200</strong></td></tr>
        <tr><td><strong>PA (Philadelphia)</strong></td><td>~$2,303</td><td>~$2,813</td><td><strong>~$56,100</strong></td></tr>
        <tr><td>New York (non-NYC)</td><td>~$3,620</td><td>$0</td><td>~$57,600</td></tr>
        <tr><td>New Jersey</td><td>~$2,400</td><td>$0</td><td>~$58,800</td></tr>
        <tr><td>Ohio</td><td>~$1,780</td><td>~$1,125 (local)</td><td>~$58,300</td></tr>
        <tr><td>Delaware</td><td>~$3,100</td><td>$0 (Wilmington: ~$750)</td><td>~$58,100</td></tr>
      </tbody>
    </table>
  </div>

  <h2>Tips to Optimize Your PA Take-Home Pay</h2>
  <ul>
    <li><strong>401(k) still saves federal taxes:</strong> Even though PA doesn't recognize 401(k) deductions, your federal savings at 22%+ marginal rate far outweigh the PA non-deductibility.</li>
    <li><strong>Plan for retirement in PA:</strong> PA's exemption of retirement income makes it attractive for retirement — you pay state tax on contributions now but no state tax on distributions later.</li>
    <li><strong>Check your local EIT rate:</strong> Moving even one municipality over can change your EIT by 0.5–1%. Use the PA DCED <a href="https://munstats.pa.gov/Reports/ReportInformation2.aspx?report=EITCollRate">municipal tax rate finder</a> to verify your exact rate.</li>
    <li><strong>Review W-4 and PA REV-419:</strong> Ensure both federal and PA state withholding forms reflect your filing status to avoid over-withholding.</li>
  </ul>

  <h2>Frequently Asked Questions</h2>
  <?php $faqs=[
    ['What is the Pennsylvania state income tax rate?','Pennsylvania has a flat state income tax of 3.07% on all earned income. No brackets, no standard deduction. Every dollar of gross wages is taxed at 3.07% at the state level.'],
    ['What is the PA local Earned Income Tax (EIT)?','A local tax on earned income ranging from 0.5% to 3.98% depending on your municipality. Philadelphia charges 3.75% (wage tax). Most suburban communities charge 1–2%. This is in addition to the 3.07% state tax.'],
    ['How much take-home on $75K in PA?','With 1% local EIT (single, bi-weekly, no pre-tax deductions): federal ~$8,028, PA state ~$2,303, local ~$750, SS ~$4,650, Medicare ~$1,088. Net: ~$58,181/year (~$2,238/bi-weekly paycheck).'],
    ['Does PA tax 401(k) contributions?','PA taxes gross wages — 401(k) contributions do NOT reduce PA state taxable income. However, PA does not tax 401(k) distributions in retirement, which is a significant long-term benefit.'],
    ['Does PA tax retirement income?','No. PA does not tax Social Security, pensions, 401(k)/IRA withdrawals, or annuities. This makes PA one of the most tax-friendly states for retirees.'],
    ['What is the Philadelphia wage tax?','Philadelphia charges 3.75% for residents and 3.44% for non-residents working in the city. Combined with 3.07% state tax, Philadelphia residents pay 6.82% in state + local income tax.'],
    ['What is the PA SUI employee deduction?','PA withholds 0.06% from employee wages for State Unemployment Insurance (SUI). On $70,000 this is about $42/year — a very small deduction.'],
    ['How does PA compare to neighboring states?','PA\'s flat 3.07% + local EIT is generally competitive. NJ has no local income tax but higher state rates. NY has much higher state rates + NYC local tax. Delaware has no sales tax but higher income tax rates.'],
  ];
  foreach($faqs as $f):?><div class="rc-faq-item"><div class="rc-faq-q"><?php echo $f[0];?></div><div class="rc-faq-a"><?php echo $f[1];?></div></div><?php endforeach;?>

  <h2 style="margin-top:2.5rem;">Related Paycheck &amp; Tax Calculators</h2>
  <div class="rc-related">
    <a href="/new-york/paycheck-calculator" class="rc-rel-link">🗽 New York Paycheck</a>
    <a href="/ohio/paycheck-calculator" class="rc-rel-link">🏈 Ohio Paycheck</a>
    <a href="/california/paycheck-calculator" class="rc-rel-link">☀️ California Paycheck</a>
    <a href="/texas/paycheck-calculator" class="rc-rel-link">🤠 Texas Paycheck</a>
    <a href="/florida/paycheck-calculator" class="rc-rel-link">🌴 Florida Paycheck</a>
    <a href="/loan-calculators/debt-to-income-calculator" class="rc-rel-link">📊 Debt-to-Income</a>
  </div>
</article>
</main>

<script>
(function(){
  var PA_RATE=0.0307;
  var FED_S=[{min:0,max:11600,rate:.10},{min:11600,max:47150,rate:.12},{min:47150,max:100525,rate:.22},{min:100525,max:191950,rate:.24},{min:191950,max:243725,rate:.32},{min:243725,max:609350,rate:.35},{min:609350,max:Infinity,rate:.37}];
  var FED_M=[{min:0,max:23200,rate:.10},{min:23200,max:94300,rate:.12},{min:94300,max:201050,rate:.22},{min:201050,max:383900,rate:.24},{min:383900,max:487450,rate:.32},{min:487450,max:731200,rate:.35},{min:731200,max:Infinity,rate:.37}];
  var FED_STD_S=15000,FED_STD_M=30000,SS_BASE=174900,SS_R=.062,MED_R=.0145,MED_ADD=.009;

  function cb(t,b){var x=0;for(var i=0;i<b.length;i++){if(t<=b[i].min)break;x+=(Math.min(t,b[i].max)-b[i].min)*b[i].rate;}return x;}

  function calc(){
    var pt=document.getElementById('payType').value,gross;
    if(pt==='hourly'){gross=(parseFloat(document.getElementById('hourlyRate').value)||0)*(parseFloat(document.getElementById('hoursPerWeek').value)||40)*52;}
    else{gross=parseFloat(document.getElementById('grossSalary').value)||0;}
    var freq=parseFloat(document.getElementById('payFrequency').value)||26;
    var f=document.getElementById('filingStatus').value;
    var localRate=(parseFloat(document.getElementById('localEIT').value)||0)/100;
    var ret=parseFloat(document.getElementById('retirement').value)||0;
    var hsa=parseFloat(document.getElementById('hsa').value)||0;

    // Federal (401k and HSA deductible)
    var fedTaxable=Math.max(0,gross-ret-hsa-(f==='single'?FED_STD_S:FED_STD_M));
    var fedTax=cb(fedTaxable,f==='single'?FED_S:FED_M);

    // PA state (flat 3.07% on gross - 401k NOT deductible in PA)
    var paTax=gross*PA_RATE;

    // Local EIT (on gross wages)
    var localTax=gross*localRate;

    // FICA
    var ss=Math.min(gross,SS_BASE)*SS_R;
    var med=gross*MED_R;
    if(gross>(f==='single'?200000:250000)) med+=(gross-(f==='single'?200000:250000))*MED_ADD;

    var totalD=fedTax+paTax+localTax+ss+med+ret;
    var netA=gross-totalD,netC=netA/freq,gpc=gross/freq;
    var eff=gross>0?((gross-netA)/gross*100):0;

    document.getElementById('netPaycheckDisplay').innerText='$'+Math.round(netC).toLocaleString();
    document.getElementById('netAnnualDisplay').innerText='$'+Math.round(netA).toLocaleString()+' / year net take-home';
    document.getElementById('grossCheckDisplay').innerText='$'+Math.round(gpc).toLocaleString();
    document.getElementById('fedTaxDisplay').innerText='−$'+Math.round(fedTax/freq).toLocaleString();
    document.getElementById('stateTaxDisplay').innerText='−$'+Math.round(paTax/freq).toLocaleString();
    document.getElementById('localTaxDisplay').innerText='−$'+Math.round(localTax/freq).toLocaleString();
    document.getElementById('ssTaxDisplay').innerText='−$'+Math.round(ss/freq).toLocaleString();
    document.getElementById('medTaxDisplay').innerText='−$'+Math.round(med/freq).toLocaleString();
    document.getElementById('effectiveTaxRate').innerText=eff.toFixed(1)+'% Withheld';
    var rr=document.getElementById('retirementRow');
    if(ret>0){rr.style.display='flex';document.getElementById('retDisplay').innerText='−$'+Math.round(ret/freq).toLocaleString();}else{rr.style.display='none';}
  }
  document.getElementById('payType').addEventListener('change',function(){document.getElementById('salaryInput').style.display=this.value==='salary'?'block':'none';document.getElementById('hourlyInput').style.display=this.value==='hourly'?'block':'none';calc();});
  document.querySelectorAll('#grossSalary,#hourlyRate,#hoursPerWeek,#payFrequency,#filingStatus,#localEIT,#retirement,#hsa,#payType').forEach(function(el){el.addEventListener('input',calc);el.addEventListener('change',calc);});
  document.querySelectorAll('.rc-faq-q').forEach(function(q){q.addEventListener('click',function(){var i=this.closest('.rc-faq-item'),w=i.classList.contains('open');document.querySelectorAll('.rc-faq-item').forEach(function(x){x.classList.remove('open');});if(!w)i.classList.add('open');});});
  window.downloadPA=function(){
    var csv='Pennsylvania Paycheck Calculator - AmericaCalculator.com\nGenerated,'+new Date().toLocaleDateString()+'\n\n';
    csv+='Net/Paycheck,'+document.getElementById('netPaycheckDisplay').innerText+'\n';
    csv+='Net Annual,'+document.getElementById('netAnnualDisplay').innerText+'\n';
    csv+='Federal Tax,'+document.getElementById('fedTaxDisplay').innerText+'\n';
    csv+='PA State Tax,'+document.getElementById('stateTaxDisplay').innerText+'\n';
    csv+='Local EIT,'+document.getElementById('localTaxDisplay').innerText+'\n';
    csv+='Social Security,'+document.getElementById('ssTaxDisplay').innerText+'\n';
    csv+='Medicare,'+document.getElementById('medTaxDisplay').innerText+'\n';
    csv+='Effective Rate,'+document.getElementById('effectiveTaxRate').innerText+'\n';
    var b=new Blob([csv],{type:'text/csv'});var a=document.createElement('a');a.href=URL.createObjectURL(b);a.download='pennsylvania-paycheck-results.csv';a.click();URL.revokeObjectURL(a.href);
  };
  calc();
})();
</script>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
