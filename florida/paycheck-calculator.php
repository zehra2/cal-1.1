<?php
$currentYear = date('Y');
$pageTitle       = "Florida Paycheck Calculator ($currentYear) — Net Pay";
$metaDescription = "Free Florida paycheck calculator for $currentYear. Calculate take-home pay with 0% FL state income tax, federal brackets, Social Security & Medicare withholding.";
$metaKeywords    = 'Florida paycheck calculator, Florida take home pay, FL paycheck calculator 2026, Florida salary calculator, Florida tax calculator';
$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'WebApplication','name'=>'Florida Paycheck Calculator',
   'url'=>'https://americacalculator.com/florida/paycheck-calculator',
   'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All',
   'description'=>'Calculate take-home pay for Florida employees with 0% state income tax, federal withholding, and FICA deductions.',
   'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Florida','item'=>'https://americacalculator.com/florida/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'Florida Paycheck Calculator','item'=>'https://americacalculator.com/florida/paycheck-calculator'],
  ]],
  ['@type'=>'HowTo','name'=>'How to Calculate Your Florida Take-Home Pay','totalTime'=>'PT2M','step'=>[
    ['@type'=>'HowToStep','position'=>1,'name'=>'Enter gross salary or hourly rate','text'=>'Input your annual salary or hourly rate. If hourly, also enter hours worked per week.'],
    ['@type'=>'HowToStep','position'=>2,'name'=>'Select pay frequency and filing status','text'=>'Choose your pay schedule (bi-weekly, weekly, etc.) and federal filing status (single or married).'],
    ['@type'=>'HowToStep','position'=>3,'name'=>'Add pre-tax deductions','text'=>'Enter any 401(k) or HSA contributions to see their tax-saving impact on your take-home pay.'],
    ['@type'=>'HowToStep','position'=>4,'name'=>'Review net pay breakdown','text'=>'See your per-paycheck and annual take-home pay with itemized deductions. Florida has zero state income tax.'],
  ]],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'Does Florida have state income tax?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'No. Florida is one of nine US states with no personal state income tax. Your paycheck deductions consist only of federal income tax, Social Security (6.2%), and Medicare (1.45%). This makes Florida one of the most tax-friendly states for W-2 employees and salaried professionals.']],
    ['@type'=>'Question','name'=>'How much will I take home on a $75,000 salary in Florida?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'On $75,000 gross (single, bi-weekly, no pre-tax deductions): federal income tax ~$8,028, Social Security ~$4,650, Medicare ~$1,088. Estimated net annual take-home: ~$61,234, or ~$2,355 per bi-weekly paycheck. With 0% state tax, Florida workers keep significantly more than workers in high-tax states like California or New York.']],
    ['@type'=>'Question','name'=>'How does Florida compare to California for take-home pay?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'On an $85,000 salary (single filer), a Florida worker takes home approximately $68,700/year while a California worker takes home about $63,500/year — a difference of roughly $5,200 annually or $200 per bi-weekly paycheck. California employees pay an additional 4-6% state income tax plus 1.1% SDI that Florida workers do not.']],
    ['@type'=>'Question','name'=>'What taxes does Florida charge instead of income tax?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Florida generates revenue primarily through: sales tax (6% state + up to 2.5% county = 6-8.5% total), property taxes (average effective rate ~0.86%), corporate income tax (5.5% on businesses), documentary stamp tax on real estate transactions, and tourism taxes. There is no personal income tax, estate tax, or inheritance tax.']],
    ['@type'=>'Question','name'=>'Is Florida a good state for retirees tax-wise?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. Florida has no state income tax, no estate tax, no inheritance tax, and does not tax Social Security, pension, 401(k), or IRA distributions. Combined with a moderate property tax rate and homestead exemption ($50,000 off assessed value), Florida is consistently ranked as one of the most tax-friendly states for retirees.']],
    ['@type'=>'Question','name'=>'Does Florida have any payroll taxes?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Florida has no personal payroll taxes beyond federal requirements. Employers pay Florida Reemployment Tax (state unemployment) at rates from 0.10% to 5.40% on the first $7,000 of each employee\'s wages. This is an employer-only cost and does not affect your paycheck.']],
    ['@type'=>'Question','name'=>'Will Florida ever get a state income tax?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Very unlikely in the foreseeable future. Article VII, Section 5 of the Florida Constitution explicitly prohibits a personal income tax. Changing this would require a constitutional amendment passed by 60% of Florida voters in a statewide ballot measure. This is one of the strongest tax protections of any US state.']],
    ['@type'=>'Question','name'=>'What is the Florida minimum wage in '.$currentYear.'?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Florida\'s minimum wage has been increasing $1 per year since 2021 under Amendment 2, reaching $15.00/hour in September 2026. This is significantly higher than the federal minimum wage of $7.25/hour. Florida\'s tipped minimum wage is $11.98/hour (as of September 2026).']],
  ]],
]];
require_once __DIR__ . '/../includes/header.php';
?>
<style>
:root {
  --primary: #0d9488;
  --primary-hover: #0f766e;
  --primary-light: #f0fdfa;
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
.rc-badge-teal{background:#ccfbf1;color:#115e59;border:1px solid #5eead4;}
.rc-badge-green{background:#dcfce7;color:#166534;border:1px solid #86efac;}

.calculator-container { display:grid;grid-template-columns:1.2fr 1fr;gap:0;background:var(--white);border-radius:var(--radius);box-shadow:var(--shadow-xl);border:1px solid var(--slate-200);overflow:hidden;margin-bottom:2rem; }
.form-panel { padding: 2.25rem; }
.results-panel { background: linear-gradient(135deg, #134e4a 0%, #0f172a 100%); color: var(--white); padding: 2.25rem; display: flex; flex-direction: column; justify-content: space-between; }

.section-subtitle { font-size:.8rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:var(--primary);margin-bottom:1rem;border-bottom:1px solid #ccfbf1;padding-bottom:.4rem; }
.input-group { margin-bottom: 1.15rem; }
.input-group label { display: block; font-size: 0.88rem; font-weight: 600; color: var(--slate-700); margin-bottom: 0.35rem; }
.input-wrapper { position: relative; display: flex; align-items: center; }
.input-prefix { position: absolute; left: 1rem; color: var(--slate-600); font-weight: 600; pointer-events: none; }
.input-wrapper input, .input-wrapper select { width:100%;padding:.7rem 1rem .7rem 2.1rem;border:1.5px solid var(--slate-200);border-radius:8px;font-size:.95rem;font-weight:600;color:var(--slate-900);background:var(--white);outline:none;transition:border-color .2s,box-shadow .2s; }
.input-wrapper select { padding-left: 1rem; }
.input-wrapper input:focus, .input-wrapper select:focus { border-color: var(--primary); box-shadow: 0 0 0 3px rgba(13,148,136,0.1); }
.grid-2-col { display:grid;grid-template-columns:1fr 1fr;gap:1rem; }
.hint{font-size:.72rem;color:#94a3b8;margin-top:.2rem;}

.hero-paycheck { background:rgba(16,185,129,0.12);border:1px solid rgba(16,185,129,0.25);border-radius:14px;padding:1.75rem;text-align:center;margin-bottom:1.5rem; }
.hero-paycheck .label { font-size:.82rem;color:#a7f3d0;font-weight:700;text-transform:uppercase;letter-spacing:.04em; }
.hero-paycheck .val-main { font-size:2.75rem;font-weight:800;color:#34d399;margin:.25rem 0; }
.hero-paycheck .val-sub { font-size:.9rem;color:#cbd5e1; }

.breakdown-row { display:flex;justify-content:space-between;font-size:.92rem;padding:.45rem 0;border-bottom:1px solid rgba(255,255,255,0.07); }
.breakdown-row:last-child { border-bottom:none; }
.breakdown-row span:first-child { color:#cbd5e1; }
.deduction { color:#fca5a5 !important; font-weight:700; }
.neutral { color:#38bdf8 !important; font-weight:700; }
.zero-tax { color:#34d399 !important; font-weight:700; }

.state-highlight { background:#f0fdfa;padding:1rem;border-radius:8px;border:1px solid #99f6e4;display:flex;align-items:center;gap:.75rem;margin-top:.5rem; }
.state-highlight .icon { font-size:1.25rem; }
.state-highlight .text { font-size:.84rem;color:#115e59; }
.state-highlight .text strong { display:block; }

.actions-row{display:flex;gap:.5rem;margin-top:1rem;}
.actions-row button{flex:1;background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.15);color:#e2e8f0;padding:8px;border-radius:8px;font-size:.78rem;font-weight:600;cursor:pointer;transition:background .2s;}
.actions-row button:hover{background:rgba(255,255,255,.2);}

.calculator-content-body { margin-top:2rem;background:#fff;border-radius:16px;border:1px solid #e2e8f0;padding:2.5rem;box-shadow:0 4px 20px rgba(0,0,0,0.04); }
.calculator-content-body h2 { font-size:1.5rem;color:#0f172a;margin:2rem 0 1rem;border-bottom:2px solid #ccfbf1;padding-bottom:.5rem; }
.calculator-content-body h2:first-child { margin-top:0; }
.calculator-content-body h3 { font-size:1.15rem;color:#1e293b;margin:1.5rem 0 .75rem; }
.calculator-content-body p { color:#475569;font-size:.98rem;line-height:1.75;margin-bottom:1.25rem; }
.calculator-content-body ul,.calculator-content-body ol { margin-left:1.5rem;margin-bottom:1.5rem;color:#475569;line-height:1.75; }
.calculator-content-body li { margin-bottom:.5rem; }
.calculator-content-body a{color:#0d9488;font-weight:600;text-decoration:none;}
.calculator-content-body a:hover{text-decoration:underline;}
.table-responsive { overflow-x:auto;margin:1.5rem 0; }
.data-table { width:100%;border-collapse:collapse;border:1px solid #e2e8f0;border-radius:8px;overflow:hidden; }
.data-table th { background:#134e4a;color:#fff;padding:10px 14px;text-align:left;font-size:.85rem; }
.data-table td { padding:10px 14px;border-bottom:1px solid #f1f5f9;color:#334155;font-size:.9rem; }
.data-table tr:nth-child(even) td { background:#f8fafc; }
.data-table tr:last-child td{border-bottom:none;}

.rc-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}.rc-faq-item:last-child{border-bottom:none;}
.rc-faq-q{font-size:.94rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;user-select:none;}
.rc-faq-q::after{content:'+';color:#0d9488;font-size:1.2rem;flex-shrink:0;}
.rc-faq-item.open .rc-faq-q::after{content:'−';}
.rc-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.rc-faq-item.open .rc-faq-a{display:block;}
.rc-related{display:grid;grid-template-columns:repeat(auto-fit,minmax(175px,1fr));gap:.75rem;margin-top:.75rem;}
.rc-rel-link{display:block;background:#f0fdfa;border:1.5px solid #99f6e4;border-radius:8px;padding:.75rem 1rem;font-size:.85rem;font-weight:600;color:#0d9488;text-decoration:none;text-align:center;transition:background .15s;}
.rc-rel-link:hover{background:#ccfbf1;}

.privacy-notice{display:flex;align-items:center;gap:.5rem;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:8px;padding:.75rem 1rem;font-size:.78rem;color:#166534;margin-bottom:2rem;}

@media(max-width:860px){ .calculator-container{grid-template-columns:1fr;} .grid-2-col{grid-template-columns:1fr;} .page-title-area h1{font-size:1.5rem;} }
@media print{.site-header,.site-footer,.actions-row,.rc-badges,.privacy-notice{display:none!important;}.calculator-container{box-shadow:none;border:1px solid #ccc;}}
</style>

<main class="main-wrapper">
<div style="font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;"><a href="/" style="color:#64748b;text-decoration:none;">Home</a> › <a href="/florida/" style="color:#64748b;text-decoration:none;">Florida</a> › Paycheck Calculator</div>

<div class="page-title-area">
  <h1>Florida Paycheck Calculator (<?php echo $currentYear; ?>)</h1>
  <p>Calculate your exact take-home pay in the Sunshine State. Florida is one of nine US states with <strong>zero personal state income tax</strong>, which means your deductions are limited to federal income tax, Social Security (6.2%), and Medicare (1.45%). This calculator uses <?php echo $currentYear; ?> federal tax brackets and FICA rates to show your net pay per paycheck after all withholdings. Factor in 401(k) and HSA contributions to see how pre-tax savings reduce your overall tax burden.</p>
</div>

<div class="rc-badges">
  <span class="rc-badge rc-badge-teal">🌴 Florida: 0% State Income Tax</span>
  <span class="rc-badge rc-badge-green">🔒 100% Client-Side — No Data Stored</span>
</div>

<div class="calculator-container">
  <div class="form-panel">
    <div class="section-subtitle">1. Income &amp; Pay Schedule</div>
    <div class="grid-2-col">
      <div class="input-group">
        <label for="payType">Pay Type</label>
        <div class="input-wrapper"><select id="payType" style="padding-left:1rem;"><option value="salary" selected>Annual Salary</option><option value="hourly">Hourly Rate</option></select></div>
      </div>
      <div class="input-group">
        <label for="payFrequency">Pay Frequency</label>
        <div class="input-wrapper"><select id="payFrequency" style="padding-left:1rem;">
          <option value="26" selected>Bi-Weekly (26/Yr)</option><option value="52">Weekly (52/Yr)</option><option value="24">Semi-Monthly (24/Yr)</option><option value="12">Monthly (12/Yr)</option>
        </select></div>
      </div>
    </div>
    <div id="salaryInput">
      <div class="input-group"><label for="grossSalary">Gross Annual Salary</label>
        <div class="input-wrapper"><span class="input-prefix">$</span><input type="number" id="grossSalary" value="75000" step="1000" min="0"></div>
      </div>
    </div>
    <div id="hourlyInput" style="display:none;">
      <div class="grid-2-col">
        <div class="input-group"><label for="hourlyRate">Hourly Rate</label><div class="input-wrapper"><span class="input-prefix">$</span><input type="number" id="hourlyRate" value="35" step=".50" min="0"></div></div>
        <div class="input-group"><label for="hoursPerWeek">Hours / Week</label><div class="input-wrapper"><span class="input-prefix">#</span><input type="number" id="hoursPerWeek" value="40" step="1" min="1" max="80"></div></div>
      </div>
    </div>

    <div class="section-subtitle" style="margin-top:1.5rem;">2. Filing Status</div>
    <div class="input-group"><label for="filingStatus">Federal Filing Status</label>
      <div class="input-wrapper"><select id="filingStatus" style="padding-left:1rem;"><option value="single" selected>Single Filer</option><option value="married">Married Filing Jointly</option></select></div>
    </div>

    <div class="section-subtitle" style="margin-top:1.5rem;">3. Pre-Tax Deductions (Optional)</div>
    <div class="grid-2-col">
      <div class="input-group"><label for="retirement">401(k) / 403(b) per Year</label><div class="input-wrapper"><span class="input-prefix">$</span><input type="number" id="retirement" value="0" step="500" min="0"></div><div class="hint">Max $23,500 ($31,000 if 50+)</div></div>
      <div class="input-group"><label for="hsa">HSA per Year</label><div class="input-wrapper"><span class="input-prefix">$</span><input type="number" id="hsa" value="0" step="250" min="0"></div><div class="hint">Max $4,300 self / $8,550 family</div></div>
    </div>

    <div class="state-highlight">
      <span class="icon">🌴</span>
      <div class="text"><strong>Florida State Income Tax: 0.00%</strong>Florida does not withhold any state or municipal income taxes from your wages. Protected by the Florida Constitution.</div>
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
        <div class="breakdown-row"><span>Social Security (6.2%):</span><span class="deduction" id="ssTaxDisplay">−$0</span></div>
        <div class="breakdown-row"><span>Medicare (1.45%):</span><span class="deduction" id="medTaxDisplay">−$0</span></div>
        <div class="breakdown-row"><span>Florida State Income Tax:</span><span class="zero-tax">$0.00 (0%)</span></div>
        <div class="breakdown-row" id="retirementRow" style="display:none;"><span>401(k) Contribution:</span><span class="deduction" id="retDisplay">−$0</span></div>
      </div>
    </div>
    <div style="text-align:center;border-top:1px solid rgba(255,255,255,0.1);padding-top:1rem;margin-top:1rem;">
      <div style="font-size:.82rem;color:#94a3b8;">Total Effective Deduction Rate:</div>
      <div style="font-size:1.3rem;font-weight:800;color:#38bdf8;" id="effectiveTaxRate">0% Withheld</div>
    </div>
    <div class="actions-row"><button onclick="window.print()">🖨️ Print</button><button onclick="downloadFL()">⬇️ CSV</button></div>
  </div>
</div>

<div class="privacy-notice"><span>🔒</span><span>All calculations run locally in your browser. No personal or financial data is stored, transmitted, or shared.</span></div>

<article class="calculator-content-body">
  <h2>Florida Take-Home Pay Explained (0% State Tax)</h2>
  <p>Florida has <strong>no personal state income tax</strong> — a protection enshrined in the state constitution (Article VII, Section 5). This means your only paycheck deductions are federal: income tax withholding, Social Security (6.2% on wages up to $<?php echo number_format(174900); ?>), and Medicare (1.45% + 0.9% additional on income over $200K/$250K married). Compared to high-tax states like California (up to 13.3%) or New York (up to 10.9%), Florida employees keep significantly more of their gross earnings.</p>
  <p>This calculator uses accurate <?php echo $currentYear; ?> federal tax brackets and standard deductions to compute your per-paycheck take-home amount. Pre-tax deductions like 401(k) and HSA contributions reduce your federal taxable income, providing additional savings.</p>

  <h2>Florida vs. Other States: Take-Home Pay Comparison</h2>
  <div class="table-responsive">
    <table class="data-table">
      <thead><tr><th>State</th><th>Gross Salary</th><th>State Tax</th><th>Other State</th><th>Est. Net Annual</th></tr></thead>
      <tbody>
        <tr><td><strong>Florida</strong></td><td>$75,000</td><td><strong>$0 (0%)</strong></td><td>$0</td><td><strong>~$61,200</strong></td></tr>
        <tr><td>Texas (0%)</td><td>$75,000</td><td>$0</td><td>$0</td><td>~$61,200</td></tr>
        <tr><td>Ohio</td><td>$75,000</td><td>~$1,780</td><td>Local possible</td><td>~$59,400</td></tr>
        <tr><td>California</td><td>$75,000</td><td>~$3,440</td><td>~$825 SDI</td><td>~$56,900</td></tr>
        <tr><td>New York</td><td>$75,000</td><td>~$3,850</td><td>NYC local 3%+</td><td>~$55,100*</td></tr>
      </tbody>
    </table>
  </div>
  <p><em>*NYC residents face an additional 3–3.9% city income tax. Figures based on single filer, no pre-tax deductions.</em></p>

  <h2>Why Florida Has No Income Tax — And How the State Funds Itself</h2>
  <p>Florida generates revenue primarily through:</p>
  <ul>
    <li><strong>Sales tax:</strong> 6% state + up to 2.5% county surcharge = 6–8.5% total. This is the state's largest revenue source.</li>
    <li><strong>Property taxes:</strong> Average effective rate ~0.86%. The $50,000 homestead exemption reduces the assessed value for primary residences.</li>
    <li><strong>Tourism taxes:</strong> Tourist Development Tax on short-term rentals (varies by county, typically 5–6%).</li>
    <li><strong>Corporate income tax:</strong> 5.5% on corporate net income (does not apply to sole proprietorships, partnerships, or S-corps).</li>
    <li><strong>Documentary stamp tax:</strong> $0.70 per $100 on real estate transactions (deeds).</li>
  </ul>

  <h2>Maximize Your Florida Take-Home Pay</h2>
  <ul>
    <li><strong>Max your 401(k):</strong> At $75K salary, a $23,500 contribution reduces federal taxes by ~$2,820 — and there's no state tax to worry about.</li>
    <li><strong>Contribute to an HSA:</strong> Unlike California, Florida (with 0% state tax) means HSA savings are purely federal — but still triple-tax advantaged for medical expenses.</li>
    <li><strong>Optimize your W-4:</strong> Ensure federal withholding matches your actual tax liability. Over-withholding means you're giving the IRS an interest-free loan.</li>
    <li><strong>Consider Roth contributions:</strong> With no state tax, Roth 401(k) contributions cost less in "tax pain" compared to high-tax states — excellent for younger workers expecting future income growth.</li>
  </ul>

  <h2>Frequently Asked Questions</h2>
  <?php $faqs=[
    ['Does Florida have state income tax?','No. Florida is one of nine US states with zero personal state income tax. This is constitutionally protected under Article VII, Section 5. Your paycheck deductions are federal only: income tax, Social Security (6.2%), and Medicare (1.45%).'],
    ['How much will I take home on $75K in Florida?','On $75,000 gross (single, bi-weekly, no pre-tax deductions): federal income tax ~$8,028, Social Security ~$4,650, Medicare ~$1,088. Estimated net: ~$61,234/year, or ~$2,355 per bi-weekly paycheck.'],
    ['How does Florida compare to California for take-home pay?','On $85K (single), Florida nets ~$68,700 vs. California ~$63,500 — about $5,200 more per year in Florida. California has state income tax up to 13.3% plus 1.1% SDI.'],
    ['What taxes does Florida charge instead of income tax?','Sales tax (6% + county surcharge), property tax (~0.86% effective), corporate tax (5.5%), tourism taxes, and documentary stamp tax on real estate transfers.'],
    ['Is Florida good for retirees?','Excellent. No state income tax, no estate tax, no inheritance tax. Social Security, pensions, 401(k), and IRA distributions are all tax-free at the state level. Plus the $50K homestead exemption reduces property taxes.'],
    ['Does Florida have any payroll taxes?','No personal payroll taxes. Employers pay Florida Reemployment Tax (0.10%–5.40%) on the first $7,000 of each employee\'s wages. This is employer-only and does not affect your paycheck.'],
    ['What is the Florida minimum wage in '.$currentYear.'?','Florida\'s minimum wage is $15.00/hour as of September 2026 under Amendment 2. Tipped minimum wage is $11.98/hour. Both are significantly above the federal minimum of $7.25.'],
    ['Can Florida ever impose an income tax?','Only through a constitutional amendment requiring 60% voter approval in a statewide ballot measure. This is extremely unlikely given Florida\'s political and demographic trajectory.'],
  ];
  foreach($faqs as $f):?><div class="rc-faq-item"><div class="rc-faq-q"><?php echo $f[0];?></div><div class="rc-faq-a"><?php echo $f[1];?></div></div><?php endforeach;?>

  <h2 style="margin-top:2.5rem;">Related Paycheck &amp; Tax Calculators</h2>
  <div class="rc-related">
    <a href="/texas/paycheck-calculator" class="rc-rel-link">🤠 Texas Paycheck</a>
    <a href="/california/paycheck-calculator" class="rc-rel-link">☀️ California Paycheck</a>
    <a href="/new-york/paycheck-calculator" class="rc-rel-link">🗽 New York Paycheck</a>
    <a href="/pennsylvania/paycheck-calculator" class="rc-rel-link">🔔 Pennsylvania Paycheck</a>
    <a href="/ohio/paycheck-calculator" class="rc-rel-link">🏈 Ohio Paycheck</a>
    <a href="/loan-calculators/debt-to-income-calculator" class="rc-rel-link">📊 Debt-to-Income</a>
  </div>
</article>
</main>

<script>
(function(){
  var FED_SINGLE = [
    {min:0,max:11600,rate:0.10},{min:11600,max:47150,rate:0.12},{min:47150,max:100525,rate:0.22},
    {min:100525,max:191950,rate:0.24},{min:191950,max:243725,rate:0.32},{min:243725,max:609350,rate:0.35},{min:609350,max:Infinity,rate:0.37}
  ];
  var FED_MARRIED = [
    {min:0,max:23200,rate:0.10},{min:23200,max:94300,rate:0.12},{min:94300,max:201050,rate:0.22},
    {min:201050,max:383900,rate:0.24},{min:383900,max:487450,rate:0.32},{min:487450,max:731200,rate:0.35},{min:731200,max:Infinity,rate:0.37}
  ];
  var FED_STD_S=15000, FED_STD_M=30000, SS_BASE=174900, SS_R=0.062, MED_R=0.0145, MED_ADD=0.009;

  function calcBracket(t,b){var tax=0;for(var i=0;i<b.length;i++){if(t<=b[i].min)break;tax+=(Math.min(t,b[i].max)-b[i].min)*b[i].rate;}return tax;}

  function calculate(){
    var pt=document.getElementById('payType').value, gross;
    if(pt==='hourly'){gross=(parseFloat(document.getElementById('hourlyRate').value)||0)*(parseFloat(document.getElementById('hoursPerWeek').value)||40)*52;}
    else{gross=parseFloat(document.getElementById('grossSalary').value)||0;}
    var freq=parseFloat(document.getElementById('payFrequency').value)||26;
    var filing=document.getElementById('filingStatus').value;
    var ret=parseFloat(document.getElementById('retirement').value)||0;
    var hsa=parseFloat(document.getElementById('hsa').value)||0;
    var fedTaxable=Math.max(0,gross-ret-hsa-(filing==='single'?FED_STD_S:FED_STD_M));
    var fedTax=calcBracket(fedTaxable,filing==='single'?FED_SINGLE:FED_MARRIED);
    var ss=Math.min(gross,SS_BASE)*SS_R;
    var med=gross*MED_R;
    var medThresh=filing==='single'?200000:250000;
    if(gross>medThresh) med+=(gross-medThresh)*MED_ADD;
    var gpc=gross/freq, fpc=fedTax/freq, spc=ss/freq, mpc=med/freq, rpc=ret/freq;
    var totalD=fedTax+ss+med+ret;
    var netA=gross-totalD, netC=netA/freq;
    var eff=gross>0?((gross-netA)/gross*100):0;
    document.getElementById('netPaycheckDisplay').innerText='$'+Math.round(netC).toLocaleString();
    document.getElementById('netAnnualDisplay').innerText='$'+Math.round(netA).toLocaleString()+' / year net take-home';
    document.getElementById('grossCheckDisplay').innerText='$'+Math.round(gpc).toLocaleString();
    document.getElementById('fedTaxDisplay').innerText='−$'+Math.round(fpc).toLocaleString();
    document.getElementById('ssTaxDisplay').innerText='−$'+Math.round(spc).toLocaleString();
    document.getElementById('medTaxDisplay').innerText='−$'+Math.round(mpc).toLocaleString();
    document.getElementById('effectiveTaxRate').innerText=eff.toFixed(1)+'% Withheld';
    var rr=document.getElementById('retirementRow');
    if(ret>0){rr.style.display='flex';document.getElementById('retDisplay').innerText='−$'+Math.round(rpc).toLocaleString();}else{rr.style.display='none';}
  }
  document.getElementById('payType').addEventListener('change',function(){
    document.getElementById('salaryInput').style.display=this.value==='salary'?'block':'none';
    document.getElementById('hourlyInput').style.display=this.value==='hourly'?'block':'none';calculate();
  });
  document.querySelectorAll('#grossSalary,#hourlyRate,#hoursPerWeek,#payFrequency,#filingStatus,#retirement,#hsa,#payType').forEach(function(el){el.addEventListener('input',calculate);el.addEventListener('change',calculate);});
  document.querySelectorAll('.rc-faq-q').forEach(function(q){q.addEventListener('click',function(){var i=this.closest('.rc-faq-item'),w=i.classList.contains('open');document.querySelectorAll('.rc-faq-item').forEach(function(x){x.classList.remove('open');});if(!w)i.classList.add('open');});});
  window.downloadFL=function(){
    var csv='Florida Paycheck Calculator - AmericaCalculator.com\nGenerated,'+new Date().toLocaleDateString()+'\n\n';
    csv+='Net/Paycheck,'+document.getElementById('netPaycheckDisplay').innerText+'\n';
    csv+='Net Annual,'+document.getElementById('netAnnualDisplay').innerText+'\n';
    csv+='Gross/Paycheck,'+document.getElementById('grossCheckDisplay').innerText+'\n';
    csv+='Federal Tax,'+document.getElementById('fedTaxDisplay').innerText+'\n';
    csv+='Social Security,'+document.getElementById('ssTaxDisplay').innerText+'\n';
    csv+='Medicare,'+document.getElementById('medTaxDisplay').innerText+'\n';
    csv+='FL State Tax,$0 (0%)\n';
    csv+='Effective Rate,'+document.getElementById('effectiveTaxRate').innerText+'\n';
    var b=new Blob([csv],{type:'text/csv'});var a=document.createElement('a');a.href=URL.createObjectURL(b);a.download='florida-paycheck-results.csv';a.click();URL.revokeObjectURL(a.href);
  };
  calculate();
})();
</script>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
