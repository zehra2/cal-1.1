<?php
$currentYear = date('Y');
$pageTitle       = "California Paycheck Calculator ($currentYear) — Net Pay";
$metaDescription = "Free California paycheck calculator for $currentYear. Calculate take-home pay with CA state tax brackets, SDI, federal withholding, Social Security & Medicare.";
$metaKeywords    = 'California paycheck calculator, California take home pay, CA paycheck calculator 2026, California salary calculator, California tax calculator';
$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'WebApplication','name'=>'California Paycheck Calculator',
   'url'=>'https://americacalculator.com/california/paycheck-calculator',
   'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All',
   'description'=>'Calculate take-home pay for California employees with state income tax brackets, SDI, federal tax withholding, and FICA deductions.',
   'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'State Payroll','item'=>'https://americacalculator.com/california/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'California Paycheck Calculator','item'=>'https://americacalculator.com/california/paycheck-calculator'],
  ]],
  ['@type'=>'HowTo','name'=>'How to Calculate Your California Take-Home Pay','totalTime'=>'PT2M','step'=>[
    ['@type'=>'HowToStep','position'=>1,'name'=>'Enter gross annual salary','text'=>'Input your gross annual salary or hourly rate with hours per week. The calculator converts to annual pay automatically.'],
    ['@type'=>'HowToStep','position'=>2,'name'=>'Select pay frequency','text'=>'Choose bi-weekly, weekly, semi-monthly, or monthly pay schedule to see your per-paycheck take-home amount.'],
    ['@type'=>'HowToStep','position'=>3,'name'=>'Choose filing status','text'=>'Select Single or Married Filing Jointly. This affects both federal and California state tax bracket calculations.'],
    ['@type'=>'HowToStep','position'=>4,'name'=>'Enter pre-tax deductions','text'=>'Add any 401(k), HSA, or other pre-tax contributions that reduce your taxable income before federal and state taxes are calculated.'],
    ['@type'=>'HowToStep','position'=>5,'name'=>'Review take-home pay breakdown','text'=>'See your net paycheck with itemized deductions for federal tax, CA state tax, SDI, Social Security, and Medicare.'],
  ]],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'What is the California state income tax rate?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'California has a progressive income tax with 9 brackets ranging from 1% to 13.3% (the highest state rate in the US). For 2026 single filers: 1% on the first $10,412, 2% on $10,413–$24,684, 4% on $24,685–$38,959, 6% on $38,960–$54,081, 8% on $54,082–$68,350, 9.3% on $68,351–$349,137, 10.3% on $349,138–$418,961, 11.3% on $418,962–$698,271, and 12.3% on income over $698,271. An additional 1% Mental Health Services Tax applies to income over $1 million.']],
    ['@type'=>'Question','name'=>'What is California SDI?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'California State Disability Insurance (SDI) is a mandatory payroll deduction of 1.1% on all wages with no taxable wage ceiling as of 2024 (previously capped). SDI funds short-term disability benefits and Paid Family Leave (PFL). This is a California-specific deduction not found in most other states.']],
    ['@type'=>'Question','name'=>'How much will I take home on a $100,000 salary in California?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'On a $100,000 gross salary in California (single filer, bi-weekly pay, no pre-tax deductions): federal income tax is approximately $13,142, CA state income tax approximately $5,286, SDI approximately $1,100, Social Security approximately $6,200, and Medicare approximately $1,450. Estimated net annual take-home pay: approximately $72,822, or about $2,801 per bi-weekly paycheck.']],
    ['@type'=>'Question','name'=>'Does California tax Social Security benefits?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'No. California does not tax Social Security benefits. This is one area where California is actually more favorable than some other states. However, California does tax most other forms of retirement income including 401(k) and IRA withdrawals, pensions, and capital gains at full state income tax rates.']],
    ['@type'=>'Question','name'=>'Is California the highest taxed state?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'California has the highest top marginal state income tax rate at 13.3% (12.3% + 1% Mental Health Services Tax on income over $1 million). However, for moderate incomes ($50K-$100K), California effective rates (5-7%) are comparable to many states. States like New York and New Jersey also have high combined state + local tax burdens. California has no local income taxes, unlike NYC which adds 3-4% on top of state taxes.']],
    ['@type'=>'Question','name'=>'What pre-tax deductions reduce California state taxes?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Traditional 401(k), 403(b), and 457(b) contributions reduce both federal AND California state taxable income. HSA contributions reduce federal taxes but are NOT deductible for California state tax purposes — California is one of two states (along with New Jersey) that does not recognize HSA tax benefits at the state level. This is a commonly missed detail that affects take-home pay calculations.']],
    ['@type'=>'Question','name'=>'What is the California standard deduction?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'The California standard deduction for 2026 is approximately $5,540 for single filers and $11,080 for married filing jointly. These amounts are significantly lower than the federal standard deduction ($15,000 single / $30,000 married), which means more of your income is subject to California state tax. California also has a personal exemption credit of approximately $144 per exemption.']],
    ['@type'=>'Question','name'=>'How does California compare to Texas for take-home pay?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Texas has zero state income tax. On a $100,000 salary, a California worker takes home roughly $72,800 while a Texas worker takes home roughly $78,100 — a difference of about $5,300 per year or $204 per bi-weekly paycheck. However, this comparison does not account for differences in cost of living, property taxes (Texas has higher property tax rates), sales tax, or state-provided benefits like California SDI and Paid Family Leave.']],
  ]],
]];
require_once __DIR__ . '/../includes/header.php';
?>
<style>
:root {
  --primary: #1d4ed8;
  --primary-hover: #1e40af;
  --primary-light: #eff6ff;
  --accent: #f59e0b;
  --slate-900: #0f172a;
  --slate-800: #1e293b;
  --slate-700: #334155;
  --slate-600: #475569;
  --slate-200: #e2e8f0;
  --slate-100: #f1f5f9;
  --slate-50: #f8fafc;
  --white: #ffffff;
  --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1);
  --radius: 16px;
}
body { background-color: var(--slate-50); color: var(--slate-800); line-height: 1.6; }
.main-wrapper { max-width: 1100px; margin: 2rem auto; padding: 0 1.5rem; }
.page-title-area { text-align: center; margin-bottom: 2.5rem; }
.page-title-area h1 { font-size: 2.1rem; font-weight: 800; color: var(--slate-900); margin-bottom: 0.75rem; line-height: 1.25; }
.page-title-area p { color: var(--slate-600); font-size: 1.02rem; max-width: 760px; margin: 0 auto; line-height: 1.72; }
.rc-badges{display:flex;flex-wrap:wrap;gap:.5rem;justify-content:center;margin-bottom:1.5rem;}
.rc-badge{display:inline-flex;align-items:center;gap:.35rem;padding:5px 12px;border-radius:20px;font-size:.73rem;font-weight:700;}
.rc-badge-blue{background:#dbeafe;color:#1e40af;border:1px solid #93c5fd;}
.rc-badge-green{background:#dcfce7;color:#166534;border:1px solid #86efac;}
.rc-badge-amber{background:#fef3c7;color:#92400e;border:1px solid #fde68a;}

.calculator-container {
  display: grid;
  grid-template-columns: 1.2fr 1fr;
  gap: 0;
  background: var(--white);
  border-radius: var(--radius);
  box-shadow: var(--shadow-xl);
  border: 1px solid var(--slate-200);
  overflow: hidden;
  margin-bottom: 2rem;
}
.form-panel { padding: 2.25rem; }
.results-panel {
  background: linear-gradient(135deg, #1e3a8a 0%, #1e293b 100%);
  color: var(--white);
  padding: 2.25rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.section-subtitle {
  font-size: 0.8rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: var(--primary);
  margin-bottom: 1rem;
  border-bottom: 1px solid #dbeafe;
  padding-bottom: .4rem;
}

.input-group { margin-bottom: 1.15rem; }
.input-group label { display: block; font-size: 0.88rem; font-weight: 600; color: var(--slate-700); margin-bottom: 0.35rem; }
.input-wrapper { position: relative; display: flex; align-items: center; }
.input-prefix { position: absolute; left: 1rem; color: var(--slate-600); font-weight: 600; pointer-events: none; }
.input-wrapper input, .input-wrapper select {
  width: 100%;
  padding: 0.7rem 1rem 0.7rem 2.1rem;
  border: 1.5px solid var(--slate-200);
  border-radius: 8px;
  font-size: 0.95rem;
  font-weight: 600;
  color: var(--slate-900);
  background: var(--white);
  outline: none;
  transition: border-color .2s, box-shadow .2s;
}
.input-wrapper select { padding-left: 1rem; }
.input-wrapper input:focus, .input-wrapper select:focus { border-color: var(--primary); box-shadow: 0 0 0 3px rgba(29, 78, 216, 0.1); }
.grid-2-col { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
.hint{font-size:.72rem;color:#94a3b8;margin-top:.2rem;}

.hero-paycheck {
  background: rgba(16, 185, 129, 0.12);
  border: 1px solid rgba(16, 185, 129, 0.25);
  border-radius: 14px;
  padding: 1.75rem;
  text-align: center;
  margin-bottom: 1.5rem;
}
.hero-paycheck .label { font-size: 0.82rem; color: #a7f3d0; font-weight: 700; text-transform: uppercase; letter-spacing: .04em; }
.hero-paycheck .val-main { font-size: 2.75rem; font-weight: 800; color: #34d399; margin: 0.25rem 0; }
.hero-paycheck .val-sub { font-size: 0.9rem; color: #cbd5e1; }

.breakdown-row { display: flex; justify-content: space-between; font-size: 0.92rem; padding: 0.45rem 0; border-bottom: 1px solid rgba(255, 255, 255, 0.07); }
.breakdown-row:last-child { border-bottom: none; }
.breakdown-row span:first-child { color: #cbd5e1; }
.breakdown-row span:last-child { font-weight: 700; }
.deduction { color: #fca5a5 !important; }
.neutral { color: #38bdf8 !important; }

.state-highlight {
  background: #eff6ff;
  padding: 1rem;
  border-radius: 8px;
  border: 1px solid #bfdbfe;
  display: flex;
  align-items: center;
  gap: 0.75rem;
  margin-top: 0.5rem;
}
.state-highlight .icon { font-size: 1.25rem; }
.state-highlight .text { font-size: 0.84rem; color: #1e40af; }
.state-highlight .text strong { display: block; }

.actions-row{display:flex;gap:.5rem;margin-top:1rem;}
.actions-row button{flex:1;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.15);color:#e2e8f0;padding:8px;border-radius:8px;font-size:.78rem;font-weight:600;cursor:pointer;transition:background .2s;}
.actions-row button:hover{background:rgba(255,255,255,.2);}

/* Content body */
.calculator-content-body { margin-top: 2rem; background: #fff; border-radius: 16px; border: 1px solid #e2e8f0; padding: 2.5rem; box-shadow: 0 4px 20px rgba(0,0,0,0.04); }
.calculator-content-body h2 { font-size: 1.5rem; color: #0f172a; margin: 2rem 0 1rem; border-bottom: 2px solid #dbeafe; padding-bottom: 0.5rem; }
.calculator-content-body h2:first-child { margin-top: 0; }
.calculator-content-body h3 { font-size: 1.15rem; color: #1e293b; margin: 1.5rem 0 0.75rem; }
.calculator-content-body p { color: #475569; font-size: 0.98rem; line-height: 1.75; margin-bottom: 1.25rem; }
.calculator-content-body ul, .calculator-content-body ol { margin-left: 1.5rem; margin-bottom: 1.5rem; color: #475569; line-height: 1.75; }
.calculator-content-body li { margin-bottom: 0.5rem; }
.calculator-content-body a{color:#1d4ed8;font-weight:600;text-decoration:none;}
.calculator-content-body a:hover{text-decoration:underline;}
.table-responsive { overflow-x: auto; margin: 1.5rem 0; }
.data-table { width: 100%; border-collapse: collapse; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; }
.data-table th { background: #1e3a8a; color: #ffffff; padding: 10px 14px; text-align: left; font-size: 0.85rem; }
.data-table td { padding: 10px 14px; border-bottom: 1px solid #f1f5f9; color: #334155; font-size: 0.9rem; }
.data-table tr:nth-child(even) td { background: #f8fafc; }
.data-table tr:last-child td{border-bottom:none;}

.rc-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}
.rc-faq-item:last-child{border-bottom:none;}
.rc-faq-q{font-size:.94rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;user-select:none;}
.rc-faq-q::after{content:'+';color:#1d4ed8;font-size:1.2rem;flex-shrink:0;}
.rc-faq-item.open .rc-faq-q::after{content:'−';}
.rc-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.rc-faq-item.open .rc-faq-a{display:block;}

.rc-related{display:grid;grid-template-columns:repeat(auto-fit,minmax(175px,1fr));gap:.75rem;margin-top:.75rem;}
.rc-rel-link{display:block;background:#eff6ff;border:1.5px solid #bfdbfe;border-radius:8px;padding:.75rem 1rem;font-size:.85rem;font-weight:600;color:#1d4ed8;text-decoration:none;text-align:center;transition:background .15s;}
.rc-rel-link:hover{background:#dbeafe;}

.privacy-notice{display:flex;align-items:center;gap:.5rem;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:8px;padding:.75rem 1rem;font-size:.78rem;color:#166534;margin-bottom:2rem;}

@media (max-width: 860px) {
  .calculator-container { grid-template-columns: 1fr; }
  .grid-2-col { grid-template-columns: 1fr; }
  .page-title-area h1 { font-size: 1.5rem; }
}
@media print{.site-header,.site-footer,.actions-row,.rc-badges,.privacy-notice{display:none!important;}.calculator-container{box-shadow:none;border:1px solid #ccc;}}
</style>

<main class="main-wrapper">
<div style="font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;"><a href="/" style="color:#64748b;text-decoration:none;">Home</a> › <a href="/california/" style="color:#64748b;text-decoration:none;">California</a> › Paycheck Calculator</div>

<div class="page-title-area">
  <h1>California Paycheck Calculator (<?php echo $currentYear; ?>)</h1>
  <p>Calculate your net take-home pay in California with accurate <?php echo $currentYear; ?> federal and CA state income tax brackets, SDI (State Disability Insurance), Social Security, and Medicare withholding. Factor in pre-tax deductions like 401(k) to see exactly how much lands in your bank account each pay period.</p>
</div>

<div class="rc-badges">
  <span class="rc-badge rc-badge-blue">✓ <?php echo $currentYear; ?> CA Tax Brackets</span>
  <span class="rc-badge rc-badge-amber">⚡ California SDI: 1.1% (No Cap)</span>
  <span class="rc-badge rc-badge-green">🔒 100% Client-Side — No Data Stored</span>
</div>

<div class="calculator-container">
  <div class="form-panel">
    <div class="section-subtitle">1. Income &amp; Pay Schedule</div>

    <div class="grid-2-col">
      <div class="input-group">
        <label for="payType">Pay Type</label>
        <div class="input-wrapper">
          <select id="payType" style="padding-left:1rem;">
            <option value="salary" selected>Annual Salary</option>
            <option value="hourly">Hourly Rate</option>
          </select>
        </div>
      </div>
      <div class="input-group">
        <label for="payFrequency">Pay Frequency</label>
        <div class="input-wrapper">
          <select id="payFrequency" style="padding-left:1rem;">
            <option value="26" selected>Bi-Weekly (26/Yr)</option>
            <option value="52">Weekly (52/Yr)</option>
            <option value="24">Semi-Monthly (24/Yr)</option>
            <option value="12">Monthly (12/Yr)</option>
          </select>
        </div>
      </div>
    </div>

    <div id="salaryInput">
      <div class="input-group">
        <label for="grossSalary">Gross Annual Salary</label>
        <div class="input-wrapper">
          <span class="input-prefix">$</span>
          <input type="number" id="grossSalary" value="85000" step="1000" min="0" aria-label="Gross annual salary">
        </div>
      </div>
    </div>

    <div id="hourlyInput" style="display:none;">
      <div class="grid-2-col">
        <div class="input-group">
          <label for="hourlyRate">Hourly Rate</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="hourlyRate" value="40" step="0.50" min="0" aria-label="Hourly rate">
          </div>
        </div>
        <div class="input-group">
          <label for="hoursPerWeek">Hours / Week</label>
          <div class="input-wrapper">
            <span class="input-prefix">#</span>
            <input type="number" id="hoursPerWeek" value="40" step="1" min="1" max="80" aria-label="Hours per week">
          </div>
        </div>
      </div>
    </div>

    <div class="section-subtitle" style="margin-top:1.5rem;">2. Filing Status</div>

    <div class="input-group">
      <label for="filingStatus">Federal Filing Status</label>
      <div class="input-wrapper">
        <select id="filingStatus" style="padding-left:1rem;">
          <option value="single" selected>Single Filer</option>
          <option value="married">Married Filing Jointly</option>
        </select>
      </div>
    </div>

    <div class="section-subtitle" style="margin-top:1.5rem;">3. Pre-Tax Deductions (Optional)</div>

    <div class="grid-2-col">
      <div class="input-group">
        <label for="retirement">401(k) / 403(b) per Year</label>
        <div class="input-wrapper">
          <span class="input-prefix">$</span>
          <input type="number" id="retirement" value="0" step="500" min="0" aria-label="Annual 401k contribution">
        </div>
        <div class="hint">Max $23,500 ($31,000 if age 50+)</div>
      </div>
      <div class="input-group">
        <label for="hsa">HSA per Year</label>
        <div class="input-wrapper">
          <span class="input-prefix">$</span>
          <input type="number" id="hsa" value="0" step="250" min="0" aria-label="Annual HSA contribution">
        </div>
        <div class="hint">⚠️ Not deductible for CA state tax</div>
      </div>
    </div>

    <div class="state-highlight">
      <span class="icon">🏛️</span>
      <div class="text">
        <strong>California State Income Tax: 1% – 13.3%</strong>
        Progressive 9-bracket system. SDI at 1.1% on all wages (no cap since 2024). HSA contributions are NOT deductible at the state level.
      </div>
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

      <div style="background:rgba(255,255,255,0.05);border-radius:12px;padding:1.15rem;">
        <div class="breakdown-row"><span>Gross Paycheck:</span><span class="neutral" id="grossCheckDisplay">$0</span></div>
        <div class="breakdown-row"><span>Federal Income Tax:</span><span class="deduction" id="fedTaxDisplay">−$0</span></div>
        <div class="breakdown-row"><span>CA State Income Tax:</span><span class="deduction" id="stateTaxDisplay">−$0</span></div>
        <div class="breakdown-row"><span>CA SDI (1.1%):</span><span class="deduction" id="sdiDisplay">−$0</span></div>
        <div class="breakdown-row"><span>Social Security (6.2%):</span><span class="deduction" id="ssTaxDisplay">−$0</span></div>
        <div class="breakdown-row"><span>Medicare (1.45%):</span><span class="deduction" id="medTaxDisplay">−$0</span></div>
        <div class="breakdown-row" id="retirementRow" style="display:none;"><span>401(k) Contribution:</span><span class="deduction" id="retDisplay">−$0</span></div>
      </div>
    </div>

    <div style="text-align:center;border-top:1px solid rgba(255,255,255,0.1);padding-top:1rem;margin-top:1rem;">
      <div style="font-size:0.82rem;color:#94a3b8;">Total Effective Tax + Deduction Rate:</div>
      <div style="font-size:1.3rem;font-weight:800;color:#38bdf8;" id="effectiveTaxRate">0% Withheld</div>
    </div>

    <div class="actions-row">
      <button onclick="window.print()">🖨️ Print</button>
      <button onclick="downloadCA()">⬇️ CSV</button>
    </div>
  </div>
</div>

<div class="privacy-notice">
  <span>🔒</span>
  <span>All calculations run locally in your browser. No personal or financial data is stored, transmitted, or shared.</span>
</div>

<article class="calculator-content-body">

  <h2>California Paycheck Tax Breakdown for <?php echo $currentYear; ?></h2>
  <p>California has the <strong>highest state income tax rate in the nation at 13.3%</strong> (12.3% plus a 1% Mental Health Services Tax on income over $1 million). The state uses a progressive 9-bracket system, meaning your effective rate is much lower than the top marginal rate for most earners. Combined with federal taxes, FICA, and California SDI, a typical California employee sees 28–38% of their gross pay withheld, depending on income level and filing status.</p>
  <p>This calculator uses <?php echo $currentYear; ?> federal tax brackets and California's inflation-adjusted state brackets to provide an accurate per-paycheck estimate. Unlike many online calculators, it correctly handles California's unique SDI rules (no wage cap since 2024) and the fact that <strong>HSA contributions are not deductible for California state taxes</strong>.</p>

  <h2><?php echo $currentYear; ?> California State Income Tax Brackets (Single Filer)</h2>
  <div class="table-responsive">
    <table class="data-table">
      <thead><tr><th>Taxable Income</th><th>Rate</th><th>Tax on Bracket</th></tr></thead>
      <tbody>
        <tr><td>$0 – $10,412</td><td>1.00%</td><td>$104.12</td></tr>
        <tr><td>$10,413 – $24,684</td><td>2.00%</td><td>$285.44</td></tr>
        <tr><td>$24,685 – $38,959</td><td>4.00%</td><td>$571.00</td></tr>
        <tr><td>$38,960 – $54,081</td><td>6.00%</td><td>$907.26</td></tr>
        <tr><td>$54,082 – $68,350</td><td>8.00%</td><td>$1,141.44</td></tr>
        <tr><td>$68,351 – $349,137</td><td>9.30%</td><td>$26,113.19</td></tr>
        <tr><td>$349,138 – $418,961</td><td>10.30%</td><td>$7,191.77</td></tr>
        <tr><td>$418,962 – $698,271</td><td>11.30%</td><td>$31,561.99</td></tr>
        <tr><td>$698,272+</td><td>12.30%</td><td>varies</td></tr>
        <tr><td style="background:#fef2f2;">$1,000,000+</td><td style="background:#fef2f2;">+1.00% (Mental Health)</td><td style="background:#fef2f2;">Additional</td></tr>
      </tbody>
    </table>
  </div>
  <p><em>California married filing jointly brackets are generally double the single filer amounts. The Mental Health Services Tax of 1% applies to taxable income over $1 million regardless of filing status.</em></p>

  <h2>California vs. No-Tax States: Take-Home Pay Comparison</h2>
  <p>How much more would you take home in a zero-income-tax state? Here's a side-by-side on an $85,000 gross salary (single filer):</p>
  <div class="table-responsive">
    <table class="data-table">
      <thead><tr><th>State</th><th>Gross Salary</th><th>State Tax Paid</th><th>SDI / Other</th><th>Est. Annual Net Pay</th></tr></thead>
      <tbody>
        <tr><td><strong>California</strong></td><td>$85,000</td><td>~$4,280</td><td>~$935 SDI</td><td><strong>~$63,500</strong></td></tr>
        <tr><td>Texas (0% tax)</td><td>$85,000</td><td>$0</td><td>$0</td><td><strong>~$68,700</strong></td></tr>
        <tr><td>Florida (0% tax)</td><td>$85,000</td><td>$0</td><td>$0</td><td><strong>~$68,700</strong></td></tr>
        <tr><td>New York</td><td>$85,000</td><td>~$4,100</td><td>$0</td><td><strong>~$64,600</strong></td></tr>
        <tr><td>Ohio</td><td>$85,000</td><td>~$2,100</td><td>$0</td><td><strong>~$66,600</strong></td></tr>
      </tbody>
    </table>
  </div>
  <p><em>Note: This comparison does not account for property taxes (Texas has significantly higher rates), sales taxes, or cost-of-living differences. California SDI also provides Paid Family Leave benefits not available in Texas or Florida.</em></p>

  <h2>Tips to Maximize Your California Take-Home Pay</h2>
  <ul>
    <li><strong>Max your 401(k):</strong> Contributions reduce both federal AND California state taxable income. At a combined marginal rate of 30%+, every $1,000 contributed saves $300+ in taxes.</li>
    <li><strong>Be strategic with HSA:</strong> HSA contributions save federal taxes but NOT California state taxes. Still worth it for the federal savings and triple-tax advantage on medical expenses.</li>
    <li><strong>Optimize W-4 withholding:</strong> Ensure your federal W-4 and California DE 4 reflect your actual filing status and dependents to avoid over-withholding.</li>
    <li><strong>Consider Roth conversions carefully:</strong> In California's high-tax environment, Roth contributions (after-tax) make sense if you expect to retire in a lower-tax state.</li>
    <li><strong>Track itemizable deductions:</strong> California's state standard deduction is low (~$5,540 single). If you have mortgage interest, state taxes, or charitable donations, itemizing may reduce your CA state tax.</li>
  </ul>

  <h2>Frequently Asked Questions</h2>
  <?php $faqs=[
    ['What is the California state income tax rate?','California has a progressive 9-bracket system from 1% to 13.3%. The top 13.3% rate includes a 1% Mental Health Services Tax on income over $1 million. For most earners ($50K-$100K), the effective CA state tax rate is approximately 4-7%.'],
    ['What is California SDI?','California State Disability Insurance (SDI) is a mandatory 1.1% payroll deduction on all wages with no taxable wage ceiling (the cap was removed in 2024). SDI funds short-term disability benefits and Paid Family Leave (PFL). This is a California-specific deduction not found in most other states.'],
    ['How much will I take home on $100K in California?','On $100,000 gross (single, bi-weekly, no pre-tax deductions): federal tax ~$13,142, CA state tax ~$5,286, SDI ~$1,100, Social Security ~$6,200, Medicare ~$1,450. Estimated annual net: ~$72,822, or ~$2,801 per bi-weekly paycheck.'],
    ['Does California tax Social Security benefits?','No. California does not tax Social Security benefits. However, California does tax most other retirement income including 401(k)/IRA withdrawals, pensions, and capital gains at full state income tax rates.'],
    ['Are HSA contributions deductible in California?','No. California is one of only two states (along with New Jersey) that does not recognize HSA tax benefits at the state level. HSA contributions still reduce your federal taxable income but not your California state taxable income.'],
    ['What is the California standard deduction?','For '.$currentYear.', the CA standard deduction is approximately $5,540 (single) and $11,080 (married filing jointly). These are significantly lower than federal standard deductions.'],
    ['How does California compare to Texas for take-home pay?','On an $85,000 salary, a California worker nets ~$63,500 while a Texas worker nets ~$68,700 — about $5,200 more per year. However, Texas has higher property taxes and no SDI/PFL benefits.'],
    ['What is the California Mental Health Services Tax?','A 1% additional tax on taxable income over $1,000,000. This brings the top marginal CA rate to 13.3% — the highest state income tax rate in the US. It was enacted by Proposition 63 in 2004.'],
  ];
  foreach($faqs as $f):?><div class="rc-faq-item"><div class="rc-faq-q"><?php echo $f[0];?></div><div class="rc-faq-a"><?php echo $f[1];?></div></div><?php endforeach;?>

  <h2 style="margin-top:2.5rem;">Related Paycheck &amp; Tax Calculators</h2>
  <div class="rc-related">
    <a href="/texas/paycheck-calculator" class="rc-rel-link">🤠 Texas Paycheck</a>
    <a href="/ohio/paycheck-calculator" class="rc-rel-link">🏈 Ohio Paycheck</a>
    <a href="/florida/paycheck-calculator" class="rc-rel-link">🌴 Florida Paycheck</a>
    <a href="/new-york/paycheck-calculator" class="rc-rel-link">🗽 New York Paycheck</a>
    <a href="/pennsylvania/paycheck-calculator" class="rc-rel-link">🔔 Pennsylvania Paycheck</a>
    <a href="/loan-calculators/debt-to-income-calculator" class="rc-rel-link">📊 Debt-to-Income</a>
  </div>
</article>

</main>

<script>
(function(){
  // ── California 2026 State Tax Brackets (inflation-adjusted estimates) ──
  var CA_SINGLE = [
    {min:0,max:10412,rate:0.01},
    {min:10412,max:24684,rate:0.02},
    {min:24684,max:38959,rate:0.04},
    {min:38959,max:54081,rate:0.06},
    {min:54081,max:68350,rate:0.08},
    {min:68350,max:349137,rate:0.093},
    {min:349137,max:418961,rate:0.103},
    {min:418961,max:698271,rate:0.113},
    {min:698271,max:Infinity,rate:0.123}
  ];
  var CA_MARRIED = [
    {min:0,max:20824,rate:0.01},
    {min:20824,max:49368,rate:0.02},
    {min:49368,max:77918,rate:0.04},
    {min:77918,max:108162,rate:0.06},
    {min:108162,max:136700,rate:0.08},
    {min:136700,max:698274,rate:0.093},
    {min:698274,max:837922,rate:0.103},
    {min:837922,max:1000000,rate:0.113},
    {min:1000000,max:Infinity,rate:0.123}
  ];

  // CA standard deduction
  var CA_STD_SINGLE = 5540;
  var CA_STD_MARRIED = 11080;

  // ── Federal 2026 Tax Brackets ──
  var FED_SINGLE = [
    {min:0,max:11600,rate:0.10},
    {min:11600,max:47150,rate:0.12},
    {min:47150,max:100525,rate:0.22},
    {min:100525,max:191950,rate:0.24},
    {min:191950,max:243725,rate:0.32},
    {min:243725,max:609350,rate:0.35},
    {min:609350,max:Infinity,rate:0.37}
  ];
  var FED_MARRIED = [
    {min:0,max:23200,rate:0.10},
    {min:23200,max:94300,rate:0.12},
    {min:94300,max:201050,rate:0.22},
    {min:201050,max:383900,rate:0.24},
    {min:383900,max:487450,rate:0.32},
    {min:487450,max:731200,rate:0.35},
    {min:731200,max:Infinity,rate:0.37}
  ];

  var FED_STD_SINGLE = 15000;
  var FED_STD_MARRIED = 30000;

  // SS wage base 2026 estimate
  var SS_WAGE_BASE = 174900;
  var SS_RATE = 0.062;
  var MED_RATE = 0.0145;
  var MED_ADDITIONAL_RATE = 0.009; // additional Medicare on >$200K single / $250K married
  var MED_ADDITIONAL_THRESHOLD_SINGLE = 200000;
  var MED_ADDITIONAL_THRESHOLD_MARRIED = 250000;
  var SDI_RATE = 0.011; // CA SDI - no wage cap since 2024

  function calcBracket(taxable, brackets){
    var tax = 0;
    for(var i=0;i<brackets.length;i++){
      var b = brackets[i];
      if(taxable <= b.min) break;
      var amt = Math.min(taxable, b.max) - b.min;
      tax += amt * b.rate;
    }
    return tax;
  }

  function calculate(){
    var payType = document.getElementById('payType').value;
    var gross;
    if(payType === 'hourly'){
      var rate = parseFloat(document.getElementById('hourlyRate').value)||0;
      var hrs = parseFloat(document.getElementById('hoursPerWeek').value)||40;
      gross = rate * hrs * 52;
    } else {
      gross = parseFloat(document.getElementById('grossSalary').value)||0;
    }

    var freq = parseFloat(document.getElementById('payFrequency').value)||26;
    var filing = document.getElementById('filingStatus').value;
    var retirement = parseFloat(document.getElementById('retirement').value)||0;
    var hsa = parseFloat(document.getElementById('hsa').value)||0;

    // Pre-tax deductions from federal taxable
    var fedTaxable = Math.max(0, gross - retirement - hsa - (filing==='single'?FED_STD_SINGLE:FED_STD_MARRIED));
    // CA: 401k deductible, HSA NOT deductible
    var caTaxable = Math.max(0, gross - retirement - (filing==='single'?CA_STD_SINGLE:CA_STD_MARRIED));

    // Federal income tax
    var fedBrackets = filing==='single' ? FED_SINGLE : FED_MARRIED;
    var fedTax = calcBracket(fedTaxable, fedBrackets);

    // CA state tax
    var caBrackets = filing==='single' ? CA_SINGLE : CA_MARRIED;
    var caTax = calcBracket(caTaxable, caBrackets);
    // Mental Health Services Tax: 1% on income over $1M
    if(caTaxable > 1000000) caTax += (caTaxable - 1000000) * 0.01;

    // SDI (on gross - no cap)
    var sdi = gross * SDI_RATE;

    // Social Security (6.2% up to wage base)
    var ssWages = Math.min(gross, SS_WAGE_BASE);
    var ss = ssWages * SS_RATE;

    // Medicare (1.45% + 0.9% additional)
    var med = gross * MED_RATE;
    var medThreshold = filing==='single' ? MED_ADDITIONAL_THRESHOLD_SINGLE : MED_ADDITIONAL_THRESHOLD_MARRIED;
    if(gross > medThreshold) med += (gross - medThreshold) * MED_ADDITIONAL_RATE;

    // Per paycheck
    var grossPerCheck = gross / freq;
    var fedPerCheck = fedTax / freq;
    var statePerCheck = caTax / freq;
    var sdiPerCheck = sdi / freq;
    var ssPerCheck = ss / freq;
    var medPerCheck = med / freq;
    var retPerCheck = retirement / freq;

    var totalDeductions = fedTax + caTax + sdi + ss + med + retirement;
    var netAnnual = gross - totalDeductions;
    var netCheck = netAnnual / freq;
    var effRate = gross > 0 ? ((gross - netAnnual) / gross * 100) : 0;

    // Update display
    document.getElementById('netPaycheckDisplay').innerText = '$' + Math.round(netCheck).toLocaleString();
    document.getElementById('netAnnualDisplay').innerText = '$' + Math.round(netAnnual).toLocaleString() + ' / year net take-home';
    document.getElementById('grossCheckDisplay').innerText = '$' + Math.round(grossPerCheck).toLocaleString();
    document.getElementById('fedTaxDisplay').innerText = '−$' + Math.round(fedPerCheck).toLocaleString();
    document.getElementById('stateTaxDisplay').innerText = '−$' + Math.round(statePerCheck).toLocaleString();
    document.getElementById('sdiDisplay').innerText = '−$' + Math.round(sdiPerCheck).toLocaleString();
    document.getElementById('ssTaxDisplay').innerText = '−$' + Math.round(ssPerCheck).toLocaleString();
    document.getElementById('medTaxDisplay').innerText = '−$' + Math.round(medPerCheck).toLocaleString();
    document.getElementById('effectiveTaxRate').innerText = effRate.toFixed(1) + '% Withheld';

    // Show/hide retirement row
    var retRow = document.getElementById('retirementRow');
    if(retirement > 0){
      retRow.style.display = 'flex';
      document.getElementById('retDisplay').innerText = '−$' + Math.round(retPerCheck).toLocaleString();
    } else {
      retRow.style.display = 'none';
    }
  }

  // Pay type toggle
  document.getElementById('payType').addEventListener('change', function(){
    document.getElementById('salaryInput').style.display = this.value==='salary'?'block':'none';
    document.getElementById('hourlyInput').style.display = this.value==='hourly'?'block':'none';
    calculate();
  });

  // Auto-calc on any input change
  document.querySelectorAll('#grossSalary,#hourlyRate,#hoursPerWeek,#payFrequency,#filingStatus,#retirement,#hsa,#payType').forEach(function(el){
    el.addEventListener('input', calculate);
    el.addEventListener('change', calculate);
  });

  // FAQ accordion
  document.querySelectorAll('.rc-faq-q').forEach(function(q){
    q.addEventListener('click',function(){
      var i=this.closest('.rc-faq-item'), w=i.classList.contains('open');
      document.querySelectorAll('.rc-faq-item').forEach(function(x){x.classList.remove('open');});
      if(!w) i.classList.add('open');
    });
  });

  // Download CSV
  window.downloadCA = function(){
    var csv = 'California Paycheck Calculator Results - AmericaCalculator.com\n';
    csv += 'Generated,'+ new Date().toLocaleDateString() +'\n\n';
    csv += 'Net Per Paycheck,'+ document.getElementById('netPaycheckDisplay').innerText +'\n';
    csv += 'Net Annual,'+ document.getElementById('netAnnualDisplay').innerText +'\n';
    csv += 'Gross Per Paycheck,'+ document.getElementById('grossCheckDisplay').innerText +'\n';
    csv += 'Federal Tax/Check,'+ document.getElementById('fedTaxDisplay').innerText +'\n';
    csv += 'CA State Tax/Check,'+ document.getElementById('stateTaxDisplay').innerText +'\n';
    csv += 'CA SDI/Check,'+ document.getElementById('sdiDisplay').innerText +'\n';
    csv += 'Social Security/Check,'+ document.getElementById('ssTaxDisplay').innerText +'\n';
    csv += 'Medicare/Check,'+ document.getElementById('medTaxDisplay').innerText +'\n';
    csv += 'Effective Rate,'+ document.getElementById('effectiveTaxRate').innerText +'\n';
    var blob = new Blob([csv], {type:'text/csv'});
    var a = document.createElement('a');
    a.href = URL.createObjectURL(blob);
    a.download = 'california-paycheck-results.csv';
    a.click();
    URL.revokeObjectURL(a.href);
  };

  // Initial calc
  calculate();
})();
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
