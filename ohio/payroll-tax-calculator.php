<?php
$currentYear = date('Y');
$pageTitle       = "Ohio Payroll Tax Calculator ($currentYear) | Employer";
$metaDescription = "Free Ohio Payroll Tax Calculator for $currentYear. Calculate total employer payroll tax cost per employee: FICA match, FUTA, Ohio SUI, workers' comp, and total labor cost.";
$metaKeywords    = 'ohio payroll tax calculator, ohio employer payroll taxes, ohio payroll cost calculator, ohio SUI rate, ohio FUTA calculator, employer payroll tax ohio, total labor cost ohio';
$schemaData = [
  '@context'=>'https://schema.org','@graph'=>[
    ['@type'=>'WebApplication','name'=>'Ohio Payroll Tax Calculator',
     'url'=>'https://americacalculator.com/ohio/payroll-tax-calculator',
     'description'=>"Calculate total Ohio employer payroll tax costs per employee including FICA match, FUTA, Ohio SUI, and total annual labor cost.",
     'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All',
     'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
    ['@type'=>'BreadcrumbList','itemListElement'=>[
      ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
      ['@type'=>'ListItem','position'=>2,'name'=>'Ohio Payroll','item'=>'https://americacalculator.com/ohio/'],
      ['@type'=>'ListItem','position'=>3,'name'=>'Ohio Payroll Tax Calculator','item'=>'https://americacalculator.com/ohio/payroll-tax-calculator'],
    ]],
    ['@type'=>'FAQPage','mainEntity'=>[
      ['@type'=>'Question','name'=>'What payroll taxes do Ohio employers pay?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Ohio employers pay: FICA match (6.2% Social Security + 1.45% Medicare = 7.65%), FUTA (federal unemployment, 0.6% net after credit on first $7,000 wages), Ohio SUI (state unemployment insurance, rate varies by employer experience, typically 0.3%–9.2% on first $9,000), and optionally workers\' compensation premiums.']],
      ['@type'=>'Question','name'=>'What is the Ohio SUI rate?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Ohio State Unemployment Insurance (SUI) rates vary by employer experience rating. New employers typically pay 2.7% on the first $9,000 of each employee\'s wages. Experienced employers may pay anywhere from 0.3% to 9.2%. The Ohio Department of Job and Family Services assigns rates annually.']],
      ['@type'=>'Question','name'=>'What is FUTA tax?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'FUTA (Federal Unemployment Tax Act) is a federal employer-only tax of 6.0% on the first $7,000 of each employee\'s wages. Ohio employers receive a 5.4% state tax credit, reducing the effective federal rate to 0.6% — costing $42 per employee per year at most.']],
      ['@type'=>'Question','name'=>'How much does an employee actually cost in Ohio?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Beyond base salary, Ohio employers typically pay 8–15% more in mandatory taxes and benefits. A $50,000 salary employee costs approximately $53,850–$57,500 in total compensation when including FICA match, FUTA, Ohio SUI, and workers\' comp — before any voluntary benefits like health insurance or retirement matching.']],
    ]],
  ],
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f0f4ff;}
.opt-wrap{max-width:1100px;margin:0 auto;padding:2rem 1.5rem 4rem;}
.opt-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}
.opt-bc a{color:#64748b;text-decoration:none;}
.opt-hero h1{font-size:2rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.opt-hero p{font-size:1rem;color:#64748b;line-height:1.65;border-left:4px solid #1d4ed8;padding-left:1rem;margin:0 0 1.75rem;}
.opt-layout{display:grid;grid-template-columns:1fr 360px;gap:2rem;align-items:start;margin-bottom:2.5rem;}
.opt-card,.opt-res{background:#fff;border-radius:14px;border:1px solid #e8edf5;box-shadow:0 4px 20px rgba(0,0,0,.05);overflow:hidden;}
.opt-card-head{background:linear-gradient(135deg,#1d4ed8,#1e40af);color:#fff;padding:1.2rem 1.75rem;display:flex;align-items:center;gap:.7rem;}
.opt-card-head h2{font-size:1.1rem;font-weight:700;margin:0;}
.opt-body{padding:1.75rem;}
.opt-lbl{font-size:.7rem;font-weight:800;text-transform:uppercase;letter-spacing:.08em;color:#94a3b8;margin:1.4rem 0 .8rem;padding-bottom:.35rem;border-bottom:1px solid #f1f5f9;}
.opt-lbl:first-child{margin-top:0;}
.opt-row2{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.opt-row3{display:grid;grid-template-columns:1fr 1fr 1fr;gap:1rem;}
.opt-field{margin-bottom:.9rem;}
.opt-field label{display:block;font-size:.86rem;font-weight:600;color:#1e293b;margin-bottom:.38rem;}
.opt-field input,.opt-field select{width:100%;padding:11px 13px;border:1.5px solid #d1dae8;border-radius:8px;font-size:.94rem;color:#0f172a;outline:none;transition:border-color .2s;box-sizing:border-box;background:#fff;}
.opt-field input:focus,.opt-field select:focus{border-color:#1d4ed8;box-shadow:0 0 0 3px rgba(29,78,216,.1);}
.opt-field .hint{font-size:.73rem;color:#94a3b8;margin-top:.28rem;}
.opt-btn{width:100%;background:linear-gradient(135deg,#1d4ed8,#1e40af);color:#fff;padding:14px;border:none;border-radius:9px;font-size:1rem;font-weight:700;cursor:pointer;margin-top:1.1rem;transition:opacity .2s,transform .15s;}
.opt-btn:hover{opacity:.92;transform:translateY(-1px);}
.opt-res{position:sticky;top:5rem;}
.opt-res-head{background:linear-gradient(135deg,#1d4ed8,#1e40af);padding:1.2rem 1.5rem;}
.opt-res-head h3{color:#fff;font-size:1rem;font-weight:700;margin:0 0 .1rem;}
.opt-res-sub{color:rgba(255,255,255,.75);font-size:.78rem;}
.opt-primary{text-align:center;padding:1.4rem 1rem;border-bottom:1px solid #f0f4fa;}
.opt-pval{display:block;font-size:2.4rem;font-weight:800;color:#1d4ed8;line-height:1;margin-bottom:.25rem;}
.opt-plbl{font-size:.8rem;color:#64748b;}
.opt-boxes{display:grid;grid-template-columns:1fr 1fr;gap:.5rem;padding:.9rem 1.1rem;border-bottom:1px solid #f0f4fa;}
.opt-box{background:#f8fafc;border-radius:8px;padding:.65rem .7rem;text-align:center;}
.opt-box-v{display:block;font-size:.97rem;font-weight:800;color:#0f172a;margin-bottom:.12rem;}
.opt-box-l{font-size:.67rem;color:#64748b;font-weight:600;line-height:1.3;}
.opt-lines{padding:.9rem 1.1rem;}
.opt-line{display:flex;justify-content:space-between;padding:.4rem 0;border-bottom:1px solid #f8fafc;font-size:.87rem;}
.opt-line:last-child{border-bottom:none;}
.opt-line-l{color:#475569;}
.opt-line-v{font-weight:700;color:#1e293b;}
.opt-line.cost .opt-line-v{color:#dc2626;}
.opt-line.ttl{border-top:2px solid #dbeafe;margin-top:.3rem;padding-top:.6rem;}
.opt-line.ttl .opt-line-l{font-weight:700;color:#0f172a;font-size:.9rem;}
.opt-line.ttl .opt-line-v{color:#1d4ed8;font-size:.97rem;}
.opt-disc{padding:.7rem 1.1rem;font-size:.71rem;color:#94a3b8;line-height:1.4;border-top:1px solid #f0f4fa;background:#f8fafc;}
.opt-section{background:#fff;border-radius:14px;border:1px solid #eef2f7;padding:2rem;margin-bottom:1.75rem;}
.opt-section h2{font-size:1.45rem;color:#0f172a;margin:0 0 1rem;padding-bottom:.7rem;border-bottom:2px solid #eff6ff;}
.opt-section h3{font-size:1.05rem;color:#1e293b;margin:1.4rem 0 .55rem;}
.opt-section p{color:#475569;line-height:1.75;margin-bottom:1rem;font-size:.96rem;}
.opt-section strong{color:#1e293b;}
.opt-section a{color:#1d4ed8;font-weight:600;}
.opt-table{width:100%;border-collapse:collapse;border-radius:10px;overflow:hidden;border:1px solid #e8edf5;margin-bottom:1.2rem;}
.opt-table th{background:#1d4ed8;color:#fff;padding:10px 13px;text-align:left;font-size:.84rem;font-weight:600;}
.opt-table td{padding:9px 13px;border-bottom:1px solid #f1f5f9;font-size:.87rem;color:#334155;}
.opt-table tr:last-child td{border-bottom:none;}
.opt-table tr:nth-child(even) td{background:#f8fafc;}
.opt-faq-item{border-bottom:1px solid #f0f4fa;padding:.8rem 0;}
.opt-faq-item:last-child{border-bottom:none;}
.opt-faq-q{font-size:.96rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;margin-bottom:.45rem;}
.opt-faq-q::after{content:'+';font-size:1.2rem;color:#1d4ed8;flex-shrink:0;}
.opt-faq-item.open .opt-faq-q::after{content:'−';}
.opt-faq-a{color:#475569;font-size:.91rem;line-height:1.68;display:none;}
.opt-faq-item.open .opt-faq-a{display:block;}
.opt-related{display:grid;grid-template-columns:repeat(3,1fr);gap:.9rem;}
.opt-rel{background:#f8fafc;border:1.5px solid #e8edf5;border-radius:10px;padding:.9rem;text-decoration:none;text-align:center;transition:border-color .2s,background .2s;}
.opt-rel:hover{border-color:#1d4ed8;background:#eff6ff;}
.opt-rel span{display:block;font-size:1.3rem;margin-bottom:.35rem;}
.opt-rel strong{display:block;font-size:.85rem;color:#0f172a;font-weight:700;}
.opt-rel em{font-size:.76rem;color:#64748b;font-style:normal;}
@media(max-width:900px){.opt-layout{grid-template-columns:1fr;}.opt-res{position:static;}}
@media(max-width:600px){.opt-row2,.opt-row3{grid-template-columns:1fr;}.opt-related{grid-template-columns:1fr 1fr;}}
</style>
<main id="main-content">
<div class="opt-wrap">
  <div class="opt-bc"><a href="<?php echo $baseUrl;?>/index.php">Home</a> › <a href="<?php echo $baseUrl;?>/ohio/">Ohio Payroll</a> › Ohio Payroll Tax Calculator</div>
  <div class="opt-hero">
    <h1>Ohio Payroll Tax Calculator (<?php echo $currentYear;?>)</h1>
    <p>For <strong>employers, business owners, and HR professionals</strong>. Calculate total employer payroll tax costs per employee — FICA match, FUTA, Ohio SUI, workers' comp, and true annual labor cost beyond base salary.</p>
  </div>
  <div class="opt-layout">
    <div class="opt-card">
      <div class="opt-card-head"><span style="font-size:1.3rem;">🏢</span><h2>Ohio Employer Payroll Tax Calculator</h2></div>
      <div class="opt-body">
        <div class="opt-lbl">Employee Pay Information</div>
        <div class="opt-row2">
          <div class="opt-field"><label for="p-salary">Annual Salary / Wages ($)</label><input type="number" id="p-salary" value="60000" min="0" step="1000"></div>
          <div class="opt-field"><label for="p-freq">Pay Frequency</label><select id="p-freq"><option value="weekly">Weekly</option><option value="biweekly" selected>Biweekly</option><option value="semimonthly">Semi-Monthly</option><option value="monthly">Monthly</option></select></div>
        </div>
        <div class="opt-lbl">Employer Tax Rates</div>
        <div class="opt-row2">
          <div class="opt-field"><label for="p-sui">Ohio SUI Rate (%)</label><input type="number" id="p-sui" value="2.7" min="0" max="15" step="0.1"><div class="hint">New employer: 2.7% · Range: 0.3%–9.2%</div></div>
          <div class="opt-field"><label for="p-wc">Workers' Comp Rate (%)</label><input type="number" id="p-wc" value="1.5" min="0" max="20" step="0.1"><div class="hint">Ohio BWC rate varies by industry</div></div>
        </div>
        <div class="opt-row3">
          <div class="opt-field"><label for="p-futa-rate">FUTA Rate (%)</label><input type="number" id="p-futa-rate" value="0.6" min="0" max="6" step="0.1"><div class="hint">Net after 5.4% credit</div></div>
          <div class="opt-field"><label for="p-futa-base">FUTA Wage Base ($)</label><input type="number" id="p-futa-base" value="7000" min="0" step="500"></div>
          <div class="opt-field"><label for="p-sui-base">SUI Wage Base ($)</label><input type="number" id="p-sui-base" value="9000" min="0" step="500"><div class="hint">Ohio: first $9,000</div></div>
        </div>
        <div class="opt-lbl">Optional Employer Benefits</div>
        <div class="opt-row2">
          <div class="opt-field"><label for="p-health">Health Insurance ($/mo)</label><input type="number" id="p-health" value="0" min="0" step="50"><div class="hint">Employer contribution only</div></div>
          <div class="opt-field"><label for="p-retirement">Retirement Match ($/yr)</label><input type="number" id="p-retirement" value="0" min="0" step="100"><div class="hint">Annual employer 401k match</div></div>
        </div>
        <button class="opt-btn" id="opt-btn">⚡ Calculate Employer Payroll Cost</button>
      </div>
    </div>
    <div class="opt-res">
      <div class="opt-res-head"><h3>Total Employer Cost</h3><div class="opt-res-sub" id="p-res-sub">Fill in details above</div></div>
      <div class="opt-primary"><span class="opt-pval" id="p-total-cost">$0</span><span class="opt-plbl">Total Annual Labor Cost</span></div>
      <div class="opt-boxes">
        <div class="opt-box"><span class="opt-box-v" id="p-base">$0</span><span class="opt-box-l">Base Salary</span></div>
        <div class="opt-box"><span class="opt-box-v" id="p-tax-cost">$0</span><span class="opt-box-l">Total Tax Cost</span></div>
        <div class="opt-box"><span class="opt-box-v" id="p-per-pay">$0</span><span class="opt-box-l">Cost Per Paycheck</span></div>
        <div class="opt-box"><span class="opt-box-v" id="p-overhead-pct">0%</span><span class="opt-box-l">Overhead Above Salary</span></div>
      </div>
      <div class="opt-lines">
        <div class="opt-line"><span class="opt-line-l">Base Annual Salary</span><span class="opt-line-v" id="p-ln-salary">—</span></div>
        <div class="opt-line cost"><span class="opt-line-l">FICA Match (SS 6.2%)</span><span class="opt-line-v" id="p-ln-ss">—</span></div>
        <div class="opt-line cost"><span class="opt-line-l">FICA Match (Medicare 1.45%)</span><span class="opt-line-v" id="p-ln-med">—</span></div>
        <div class="opt-line cost"><span class="opt-line-l">FUTA (fed unemployment)</span><span class="opt-line-v" id="p-ln-futa">—</span></div>
        <div class="opt-line cost"><span class="opt-line-l">Ohio SUI (state unemployment)</span><span class="opt-line-v" id="p-ln-sui">—</span></div>
        <div class="opt-line cost"><span class="opt-line-l">Workers' Compensation</span><span class="opt-line-v" id="p-ln-wc">—</span></div>
        <div class="opt-line cost" id="p-health-row" style="display:none;"><span class="opt-line-l">Health Insurance (annual)</span><span class="opt-line-v" id="p-ln-health">—</span></div>
        <div class="opt-line cost" id="p-ret-row" style="display:none;"><span class="opt-line-l">Retirement Match</span><span class="opt-line-v" id="p-ln-ret">—</span></div>
        <div class="opt-line ttl"><span class="opt-line-l">Total Annual Labor Cost</span><span class="opt-line-v" id="p-ln-total">—</span></div>
      </div>
      <div class="opt-disc">*Estimates only. SUI and WC rates vary by employer experience and industry. Not tax/legal advice.</div>
    </div>
  </div>

  <section class="opt-section">
    <h2>Ohio Employer Payroll Tax Overview (<?php echo $currentYear;?>)</h2>
    <p>Beyond paying an employee's salary, Ohio employers are responsible for several mandatory payroll taxes and contributions. Understanding the true cost of an employee helps with budgeting, hiring decisions, and pricing your products or services.</p>
    <table class="opt-table">
      <thead><tr><th>Tax / Contribution</th><th>Rate</th><th>Wage Base</th><th>Who Pays</th></tr></thead>
      <tbody>
        <tr><td><strong>Social Security (FICA)</strong></td><td>6.2%</td><td>First $176,100 (2026)</td><td>Employer matches employee 6.2%</td></tr>
        <tr><td><strong>Medicare (FICA)</strong></td><td>1.45%</td><td>No cap</td><td>Employer matches employee 1.45%</td></tr>
        <tr><td><strong>FUTA</strong></td><td>0.6% (net)</td><td>First $7,000</td><td>Employer only</td></tr>
        <tr><td><strong>Ohio SUI</strong></td><td>0.3% – 9.2%</td><td>First $9,000</td><td>Employer only</td></tr>
        <tr><td><strong>Workers' Comp (BWC)</strong></td><td>Varies by industry</td><td>All wages</td><td>Employer only</td></tr>
      </tbody>
    </table>
    <h3>Total Labor Cost Examples</h3>
    <table class="opt-table">
      <thead><tr><th>Annual Salary</th><th>FICA Match</th><th>FUTA</th><th>Ohio SUI (2.7%)</th><th>WC (1.5%)</th><th>Total Employer Cost</th></tr></thead>
      <tbody>
        <tr><td>$35,000</td><td>$2,678</td><td>$42</td><td>$243</td><td>$525</td><td><strong>~$38,488</strong></td></tr>
        <tr><td>$50,000</td><td>$3,825</td><td>$42</td><td>$243</td><td>$750</td><td><strong>~$54,860</strong></td></tr>
        <tr><td>$75,000</td><td>$5,738</td><td>$42</td><td>$243</td><td>$1,125</td><td><strong>~$82,148</strong></td></tr>
        <tr><td>$100,000</td><td>$7,650</td><td>$42</td><td>$243</td><td>$1,500</td><td><strong>~$109,435</strong></td></tr>
        <tr><td>$150,000</td><td>$11,475*</td><td>$42</td><td>$243</td><td>$2,250</td><td><strong>~$164,010</strong></td></tr>
      </tbody>
    </table>
    <p style="font-size:.82rem;color:#64748b;">*SS capped at $176,100 wage base. Estimates exclude health insurance, retirement match, and other voluntary benefits.</p>
  </section>
  <section class="opt-section">
    <h2>Ohio Employer Payroll Taxes: Complete Statutory Guide</h2>
    <p>Hiring employees in Ohio requires employers to budget for four mandatory employer-paid statutory burdens that cannot be withheld from employee wages:</p>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin:1.25rem 0;">
      <div style="background:#f8fafc;padding:1.15rem;border-radius:8px;border-left:4px solid #2563eb;">
        <strong style="color:#0f172a;display:block;margin-bottom:0.35rem;">1. Employer FICA Matching</strong>
        <span style="font-size:0.88rem;color:#475569;line-height:1.55;display:block;">Employers must dollar-for-dollar match employee FICA contributions: 6.20% for Social Security (applied up to the federal wage base limit) and 1.45% for Medicare (uncapped across all wages).</span>
      </div>
      <div style="background:#f8fafc;padding:1.15rem;border-radius:8px;border-left:4px solid #10b981;">
        <strong style="color:#0f172a;display:block;margin-bottom:0.35rem;">2. Federal Unemployment (FUTA)</strong>
        <span style="font-size:0.88rem;color:#475569;line-height:1.55;display:block;">The nominal 6.0% FUTA tax is reduced to an effective 0.60% net rate on the first $7,000 of wages per employee per year ($42.00 maximum annual cost) via the 5.4% Title XII state credit.</span>
      </div>
      <div style="background:#f8fafc;padding:1.15rem;border-radius:8px;border-left:4px solid #f59e0b;">
        <strong style="color:#0f172a;display:block;margin-bottom:0.35rem;">3. Ohio SUTA Unemployment</strong>
        <span style="font-size:0.88rem;color:#475569;line-height:1.55;display:block;">Administered by ODJFS on a $9,000 taxable wage base. Standard new non-construction employers pay 2.70%, while experienced employers range from 0.3% to 9.8% based on historical unemployment claims.</span>
      </div>
      <div style="background:#f8fafc;padding:1.15rem;border-radius:8px;border-left:4px solid #8b5cf6;">
        <strong style="color:#0f172a;display:block;margin-bottom:0.35rem;">4. Ohio Monopolistic BWC</strong>
        <span style="font-size:0.88rem;color:#475569;line-height:1.55;display:block;">Ohio is one of only four states operating an exclusive, state-run workers' compensation fund (Ohio BWC). Commercial insurance carriers cannot write workers' comp in Ohio; premiums are remitted directly to the state.</span>
      </div>
    </div>

    <h3>Understanding the Employee "Labor Burden Rate"</h3>
    <p>A frequent error made by emerging Ohio small business owners and startup founders is budgeting solely for raw wage compensation. When factoring mandatory statutory payroll taxes (8%–12%), Ohio BWC coverage (0.4%–7.5% depending on risk classification), paid time off, health insurance premiums, and retirement matching, the true fully loaded labor burden typically ranges from <strong>1.25× to 1.40×</strong> of an employee's nominal base salary.</p>
  </section>

  <section class="opt-section">
    <h2>Frequently Asked Questions</h2>
    <?php $faqs=[
      ["What payroll taxes do Ohio employers pay?","Ohio employers pay: FICA match (6.2% SS + 1.45% Medicare = 7.65%), FUTA (0.6% net on first \$7,000), Ohio SUI (0.3%–9.2% on first \$9,000), and workers' compensation premiums through the Ohio Bureau of Workers' Compensation (BWC)."],
      ["What is the Ohio SUI rate?","Ohio SUI rates vary by employer experience rating. New employers typically pay 2.7% on the first \$9,000. Experienced employers may pay between 0.3% and 9.2%. Rates are assigned annually by the Ohio Department of Job and Family Services."],
      ["What is FUTA tax?","FUTA (Federal Unemployment Tax Act) is employer-only at 6.0% on the first \$7,000, but Ohio employers receive a 5.4% state tax credit, reducing the effective rate to 0.6% — a maximum of \$42 per employee per year."],
      ["How much does an employee actually cost in Ohio?","Beyond salary, Ohio employers typically spend 8–15% more in mandatory taxes. A \$60,000 salary employee costs roughly \$64,800–\$69,000 in total compensation from mandatory employer-side taxes alone — before health insurance, retirement matching, or other benefits."],
      ["Can an Ohio business buy private workers' compensation insurance?","No. Ohio is a monopolistic state fund jurisdiction. All employers with one or more employees must establish an account with the Ohio Bureau of Workers' Compensation (BWC) and pay semiannual premium assessments directly to the state fund."],
      ["What is the filing deadline for Ohio employer withholding returns?","Ohio employers file state Form IT-501 (quarterly or monthly depending on withholding volume) and Form IT-941 (annual reconciliation due January 31). Local municipal withholding returns (such as RITA Form 11 or CCA Form W-1) follow similar quarterly deadlines."],
    ]; foreach($faqs as $f): ?>
    <div class="opt-faq-item"><div class="opt-faq-q"><?php echo $f[0];?></div><div class="opt-faq-a"><?php echo $f[1];?></div></div>
    <?php endforeach; ?>
  </section>
  <section class="opt-section">
    <h2>Related Ohio Payroll Calculators</h2>
    <div class="opt-related">
      <a href="<?php echo $baseUrl;?>/ohio/paycheck-calculator" class="opt-rel"><span>💵</span><strong>Full Paycheck</strong><em>Employee view</em></a>
      <a href="<?php echo $baseUrl;?>/ohio/hourly-paycheck-calculator" class="opt-rel"><span>⏱️</span><strong>Hourly Paycheck</strong><em>Rate + hours</em></a>
      <a href="<?php echo $baseUrl;?>/ohio/salary-paycheck-calculator" class="opt-rel"><span>📊</span><strong>Salary Paycheck</strong><em>Annual to net</em></a>
      <a href="<?php echo $baseUrl;?>/ohio/overtime-calculator" class="opt-rel"><span>🕐</span><strong>Overtime</strong><em>FLSA 1.5×</em></a>
      <a href="<?php echo $baseUrl;?>/ohio/bonus-tax-calculator" class="opt-rel"><span>🎯</span><strong>Bonus Tax</strong><em>Supplemental wages</em></a>
      <a href="<?php echo $baseUrl;?>/ohio/" class="opt-rel"><span>🏠</span><strong>All Ohio Tools</strong><em>Full suite</em></a>
    </div>
  </section>
</div>
</main>
<script>
(function(){
  function ppy(f){return{weekly:52,biweekly:26,semimonthly:24,monthly:12}[f]||26;}
  const fmt=v=>'$'+Math.abs(v).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g,',');
  const fmtI=v=>'$'+Math.round(Math.abs(v)).toLocaleString();
  const fmtP=v=>v.toFixed(1)+'%';
  const $=id=>document.getElementById(id);
  function calc(){
    const salary=parseFloat($('p-salary').value)||0;
    const freq=$('p-freq').value;
    const suiRate=(parseFloat($('p-sui').value)||0)/100;
    const wcRate=(parseFloat($('p-wc').value)||0)/100;
    const futaRate=(parseFloat($('p-futa-rate').value)||0)/100;
    const futaBase=parseFloat($('p-futa-base').value)||7000;
    const suiBase=parseFloat($('p-sui-base').value)||9000;
    const healthMo=parseFloat($('p-health').value)||0;
    const retirementAnn=parseFloat($('p-retirement').value)||0;
    const p=ppy(freq);

    const ssWageBase=176100;
    const ssTaxable=Math.min(salary,ssWageBase);
    const ssMatch=ssTaxable*0.062;
    const medMatch=salary*0.0145;
    const futaTax=Math.min(salary,futaBase)*futaRate;
    const suiTax=Math.min(salary,suiBase)*suiRate;
    const wcTax=salary*wcRate;
    const healthAnn=healthMo*12;
    const mandatoryTax=ssMatch+medMatch+futaTax+suiTax+wcTax;
    const totalCost=salary+mandatoryTax+healthAnn+retirementAnn;
    const overheadPct=salary>0?((totalCost-salary)/salary)*100:0;
    const perPay=totalCost/p;

    $('p-total-cost').textContent=fmtI(totalCost);
    $('p-base').textContent=fmtI(salary);
    $('p-tax-cost').textContent=fmtI(mandatoryTax+healthAnn+retirementAnn);
    $('p-per-pay').textContent=fmtI(perPay);
    $('p-overhead-pct').textContent=fmtP(overheadPct);
    $('p-ln-salary').textContent=fmtI(salary);
    $('p-ln-ss').textContent='+'+fmtI(ssMatch);
    $('p-ln-med').textContent='+'+fmtI(medMatch);
    $('p-ln-futa').textContent='+'+fmtI(futaTax);
    $('p-ln-sui').textContent='+'+fmtI(suiTax);
    $('p-ln-wc').textContent='+'+fmtI(wcTax);
    $('p-ln-total').textContent=fmtI(totalCost);
    const showHealth=healthMo>0;
    $('p-health-row').style.display=showHealth?'':'none';
    if(showHealth)$('p-ln-health').textContent='+'+fmtI(healthAnn);
    const showRet=retirementAnn>0;
    $('p-ret-row').style.display=showRet?'':'none';
    if(showRet)$('p-ln-ret').textContent='+'+fmtI(retirementAnn);
    const freqL={weekly:'Weekly',biweekly:'Biweekly',semimonthly:'Semi-Monthly',monthly:'Monthly'};
    $('p-res-sub').textContent='$'+salary.toLocaleString()+'/yr salary · '+freqL[freq];
  }
  document.querySelectorAll('.opt-body input,.opt-body select').forEach(e=>{e.addEventListener('input',calc);e.addEventListener('change',calc);});
  $('opt-btn').addEventListener('click',calc);
  document.querySelectorAll('.opt-faq-q').forEach(q=>{q.addEventListener('click',function(){const i=this.closest('.opt-faq-item'),w=i.classList.contains('open');document.querySelectorAll('.opt-faq-item').forEach(x=>x.classList.remove('open'));if(!w)i.classList.add('open');});});
  calc();
})();
</script>
<?php require_once '../includes/footer.php'; ?>
