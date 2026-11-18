<?php
$currentYear = date('Y');
$pageTitle       = "Ohio Overtime Calculator ($currentYear) | FLSA Pay";
$metaDescription = "Free Ohio Overtime Calculator for $currentYear. Calculate FLSA overtime pay at 1.5× your regular rate, see gross overtime earnings, Ohio taxes, and actual take-home pay for overtime hours.";
$metaKeywords    = 'ohio overtime calculator, ohio overtime pay calculator, ohio overtime after taxes, overtime pay ohio, ohio overtime tax calculator, calculate overtime ohio, ohio FLSA overtime';
$schemaData = [
  '@context'=>'https://schema.org','@graph'=>[
    ['@type'=>'WebApplication','name'=>'Ohio Overtime Calculator',
     'url'=>'https://americacalculator.com/ohio/overtime-calculator',
     'description'=>"Calculate Ohio overtime pay under FLSA rules. See 1.5× overtime rate, gross earnings, and take-home pay after all $currentYear taxes.",
     'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All',
     'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
    ['@type'=>'BreadcrumbList','itemListElement'=>[
      ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
      ['@type'=>'ListItem','position'=>2,'name'=>'Ohio Payroll','item'=>'https://americacalculator.com/ohio/'],
      ['@type'=>'ListItem','position'=>3,'name'=>'Ohio Overtime Calculator','item'=>'https://americacalculator.com/ohio/overtime-calculator'],
    ]],
    ['@type'=>'FAQPage','mainEntity'=>[
      ['@type'=>'Question','name'=>'How is overtime calculated in Ohio?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Ohio follows the federal FLSA. Non-exempt employees receive at least 1.5 times their regular rate for all hours worked over 40 in a single workweek. Ohio does not require daily overtime or double-time unlike some other states.']],
      ['@type'=>'Question','name'=>'How is overtime taxed in Ohio?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Overtime is taxed as ordinary income — federal brackets, Ohio state brackets, FICA (Social Security 6.2% and Medicare 1.45%), and municipal taxes all apply. Overtime income can push annual wages into a higher marginal bracket, but only the income above the bracket threshold is taxed at the higher rate.']],
      ['@type'=>'Question','name'=>'What is the FLSA overtime threshold?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Hours worked over 40 in a single workweek trigger overtime. The threshold is weekly — not daily or monthly. Each workweek is calculated independently, and employers cannot average hours across two weeks to avoid overtime.']],
      ['@type'=>'Question','name'=>'Are salaried employees entitled to overtime in Ohio?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Non-exempt salaried employees earning below the FLSA salary threshold ($684/week or $35,568/year) are entitled to overtime. Employees classified as exempt under executive, administrative, or professional duties tests are generally not entitled to overtime.']],
      ['@type'=>'Question','name'=>'What is a regular rate of pay for overtime purposes?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'The regular rate is the weighted average of all compensation paid to an employee in a workweek, excluding overtime premiums. For simple hourly workers it equals the hourly rate. For employees earning shift differentials, commissions, or non-discretionary bonuses, those amounts must be included in the regular rate calculation.']],
      ['@type'=>'Question','name'=>'Does Ohio require double time?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'No. Ohio follows FLSA and requires only 1.5 times the regular rate for overtime hours. There is no state law requiring double time (2.0x) for any situation. Some employers offer double time as a benefit, but it is not legally required in Ohio.']],
      ['@type'=>'Question','name'=>'Can employers require overtime in Ohio?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. Ohio and federal law allow employers to require overtime from non-exempt employees. An employee who refuses required overtime can be disciplined, up to and including termination, unless a collective bargaining agreement or employment contract provides otherwise.']],
      ['@type'=>'Question','name'=>'Can comp time replace overtime pay in Ohio?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Private sector employers in Ohio cannot substitute comp time for overtime pay. Compensatory time in lieu of overtime pay is only permitted for state and local government employees under FLSA Section 7(o). Private employers must pay overtime in cash.']],
      ['@type'=>'Question','name'=>'What is the Ohio minimum wage for overtime calculation?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'The Ohio minimum wage in 2026 is $10.45 per hour for most employees. The minimum overtime rate is therefore $15.68 per hour (1.5 × $10.45). Tipped employees have a lower base wage but overtime is calculated from the full minimum wage, not the reduced tipped rate.']],
      ['@type'=>'Question','name'=>'How does overtime affect Ohio municipal tax?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Overtime pay is subject to the same municipal income tax as regular wages. If you work in Columbus (2.5%), all overtime earnings are taxed at 2.5% by Columbus in addition to Ohio state tax and federal tax. Some cities may provide credits if you live and work in different municipalities.']],
    ]],
  ],
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f0f4ff;}
.oot-wrap{max-width:1100px;margin:0 auto;padding:2rem 1.5rem 4rem;}
.oot-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}
.oot-bc a{color:#64748b;text-decoration:none;}
.oot-hero h1{font-size:2rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.oot-hero p{font-size:1rem;color:#64748b;line-height:1.65;border-left:4px solid #1d4ed8;padding-left:1rem;margin:0 0 1.75rem;}
.oot-layout{display:grid;grid-template-columns:1fr 360px;gap:2rem;align-items:start;margin-bottom:2.5rem;}
.oot-card,.oot-res{background:#fff;border-radius:14px;border:1px solid #e8edf5;box-shadow:0 4px 20px rgba(0,0,0,.05);overflow:hidden;}
.oot-card-head{background:linear-gradient(135deg,#1d4ed8,#1e40af);color:#fff;padding:1.2rem 1.75rem;display:flex;align-items:center;gap:.7rem;}
.oot-card-head h2{font-size:1.1rem;font-weight:700;margin:0;}
.oot-body{padding:1.75rem;}
.oot-lbl{font-size:.7rem;font-weight:800;text-transform:uppercase;letter-spacing:.08em;color:#94a3b8;margin:1.4rem 0 .8rem;padding-bottom:.35rem;border-bottom:1px solid #f1f5f9;}
.oot-lbl:first-child{margin-top:0;}
.oot-row2{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.oot-row3{display:grid;grid-template-columns:1fr 1fr 1fr;gap:1rem;}
.oot-field{margin-bottom:.9rem;}
.oot-field label{display:block;font-size:.86rem;font-weight:600;color:#1e293b;margin-bottom:.38rem;}
.oot-field input,.oot-field select{width:100%;padding:11px 13px;border:1.5px solid #d1dae8;border-radius:8px;font-size:.94rem;color:#0f172a;outline:none;transition:border-color .2s;box-sizing:border-box;background:#fff;}
.oot-field input:focus,.oot-field select:focus{border-color:#1d4ed8;box-shadow:0 0 0 3px rgba(29,78,216,.1);}
.oot-field .hint{font-size:.73rem;color:#94a3b8;margin-top:.28rem;}
.oot-btn{width:100%;background:linear-gradient(135deg,#1d4ed8,#1e40af);color:#fff;padding:14px;border:none;border-radius:9px;font-size:1rem;font-weight:700;cursor:pointer;margin-top:1.1rem;transition:opacity .2s,transform .15s;}
.oot-btn:hover{opacity:.92;transform:translateY(-1px);}
.oot-res{position:sticky;top:5rem;}
.oot-res-head{background:linear-gradient(135deg,#1d4ed8,#1e40af);padding:1.2rem 1.5rem;}
.oot-res-head h3{color:#fff;font-size:1rem;font-weight:700;margin:0 0 .1rem;}
.oot-res-sub{color:rgba(255,255,255,.75);font-size:.78rem;}
.oot-primary{text-align:center;padding:1.4rem 1rem;border-bottom:1px solid #f0f4fa;}
.oot-pval{display:block;font-size:2.4rem;font-weight:800;color:#1d4ed8;line-height:1;margin-bottom:.25rem;}
.oot-plbl{font-size:.8rem;color:#64748b;}
.oot-boxes{display:grid;grid-template-columns:1fr 1fr;gap:.5rem;padding:.9rem 1.1rem;border-bottom:1px solid #f0f4fa;}
.oot-box{background:#f8fafc;border-radius:8px;padding:.65rem .7rem;text-align:center;}
.oot-box-v{display:block;font-size:1rem;font-weight:800;color:#0f172a;margin-bottom:.12rem;}
.oot-box-l{font-size:.68rem;color:#64748b;font-weight:600;line-height:1.3;}
.oot-lines{padding:.9rem 1.1rem;}
.oot-line{display:flex;justify-content:space-between;padding:.4rem 0;border-bottom:1px solid #f8fafc;font-size:.87rem;}
.oot-line:last-child{border-bottom:none;}
.oot-line-l{color:#475569;}
.oot-line-v{font-weight:700;color:#1e293b;}
.oot-line.ded .oot-line-v{color:#dc2626;}
.oot-line.ttl{border-top:2px solid #dbeafe;margin-top:.3rem;padding-top:.6rem;}
.oot-line.ttl .oot-line-l{font-weight:700;color:#0f172a;font-size:.9rem;}
.oot-line.ttl .oot-line-v{color:#1d4ed8;font-size:.97rem;}
.oot-disc{padding:.7rem 1.1rem;font-size:.71rem;color:#94a3b8;line-height:1.4;border-top:1px solid #f0f4fa;background:#f8fafc;}
.oot-section{background:#fff;border-radius:14px;border:1px solid #eef2f7;padding:2rem;margin-bottom:1.75rem;}
.oot-section h2{font-size:1.45rem;color:#0f172a;margin:0 0 1rem;padding-bottom:.7rem;border-bottom:2px solid #eff6ff;}
.oot-section h3{font-size:1.05rem;color:#1e293b;margin:1.4rem 0 .55rem;}
.oot-section p{color:#475569;line-height:1.75;margin-bottom:1rem;font-size:.96rem;}
.oot-section strong{color:#1e293b;}
.oot-section a{color:#1d4ed8;font-weight:600;}
.oot-section ul{color:#475569;padding-left:1.5rem;margin-bottom:1rem;line-height:1.75;}
.oot-section li{margin-bottom:.4rem;}
.oot-table{width:100%;border-collapse:collapse;border-radius:10px;overflow:hidden;border:1px solid #e8edf5;margin-bottom:1.2rem;}
.oot-table th{background:#1d4ed8;color:#fff;padding:10px 13px;text-align:left;font-size:.84rem;font-weight:600;}
.oot-table td{padding:9px 13px;border-bottom:1px solid #f1f5f9;font-size:.87rem;color:#334155;}
.oot-table tr:last-child td{border-bottom:none;}
.oot-table tr:nth-child(even) td{background:#f8fafc;}
.oot-info{background:#eff6ff;border-left:4px solid #1d4ed8;border-radius:0 8px 8px 0;padding:.85rem 1rem;margin:1rem 0;font-size:.91rem;color:#1e3a8a;line-height:1.6;}
.oot-faq-item{border-bottom:1px solid #f0f4fa;padding:.8rem 0;}
.oot-faq-item:last-child{border-bottom:none;}
.oot-faq-q{font-size:.96rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;margin-bottom:.45rem;}
.oot-faq-q::after{content:'+';font-size:1.2rem;color:#1d4ed8;flex-shrink:0;}
.oot-faq-item.open .oot-faq-q::after{content:'−';}
.oot-faq-a{color:#475569;font-size:.91rem;line-height:1.68;display:none;}
.oot-faq-item.open .oot-faq-a{display:block;}
.oot-related{display:grid;grid-template-columns:repeat(3,1fr);gap:.9rem;}
.oot-rel{background:#f8fafc;border:1.5px solid #e8edf5;border-radius:10px;padding:.9rem;text-decoration:none;text-align:center;transition:border-color .2s,background .2s;}
.oot-rel:hover{border-color:#1d4ed8;background:#eff6ff;}
.oot-rel span{display:block;font-size:1.3rem;margin-bottom:.35rem;}
.oot-rel strong{display:block;font-size:.85rem;color:#0f172a;font-weight:700;}
.oot-rel em{font-size:.76rem;color:#64748b;font-style:normal;}
@media(max-width:900px){.oot-layout{grid-template-columns:1fr;}.oot-res{position:static;}}
@media(max-width:600px){.oot-row2,.oot-row3{grid-template-columns:1fr;}.oot-related{grid-template-columns:1fr 1fr;}}
</style>
<main id="main-content">
<div class="oot-wrap">
  <div class="oot-bc"><a href="<?php echo $baseUrl;?>/index.php">Home</a> › <a href="<?php echo $baseUrl;?>/ohio/">Ohio Payroll</a> › Ohio Overtime Calculator</div>
  <div class="oot-hero">
    <h1>Ohio Overtime Calculator (<?php echo $currentYear;?>)</h1>
    <p>Calculate your <strong>FLSA overtime pay</strong> at 1.5× your regular rate, see total gross earnings for the week, and estimate take-home pay after all Ohio taxes including federal, state, municipal, Social Security, and Medicare.</p>
  </div>
  <div class="oot-layout">
    <div class="oot-card">
      <div class="oot-card-head"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg><h2>Ohio Overtime Pay Calculator</h2></div>
      <div class="oot-body">
        <div class="oot-lbl">Pay Information</div>
        <div class="oot-row2">
          <div class="oot-field"><label for="ot-rate">Hourly Rate ($)</label><input type="number" id="ot-rate" value="20.00" min="0" step="0.25"></div>
          <div class="oot-field"><label for="ot-freq">Pay Frequency</label><select id="ot-freq"><option value="weekly">Weekly</option><option value="biweekly" selected>Biweekly</option><option value="semimonthly">Semi-Monthly</option><option value="monthly">Monthly</option></select></div>
        </div>
        <div class="oot-row3">
          <div class="oot-field"><label for="ot-reg-hrs">Regular Hours</label><input type="number" id="ot-reg-hrs" value="40" min="0" max="80" step="0.5"><div class="hint">Per pay period</div></div>
          <div class="oot-field"><label for="ot-ot-hrs">Overtime Hours</label><input type="number" id="ot-ot-hrs" value="8" min="0" max="80" step="0.5"><div class="hint">Hours over 40/wk</div></div>
          <div class="oot-field"><label for="ot-mult">OT Rate</label><select id="ot-mult"><option value="1.5" selected>1.5× (FLSA)</option><option value="2.0">2.0× (Double)</option><option value="1.25">1.25× (Time+Quarter)</option></select></div>
        </div>
        <div class="oot-lbl">Tax Settings</div>
        <div class="oot-row2">
          <div class="oot-field"><label for="ot-status">Filing Status</label><select id="ot-status"><option value="single" selected>Single</option><option value="married_jointly">Married Filing Jointly</option><option value="married_separately">Married Filing Separately</option><option value="head_household">Head of Household</option><option value="qualifying_widow">Qualifying Surviving Spouse</option></select></div>
          <div class="oot-field"><label for="ot-muni">Ohio Municipality</label><select id="ot-muni"><option value="0">None</option><option value="2.5">Columbus (2.5%)</option><option value="2.5">Akron (2.5%)</option><option value="2.25">Toledo (2.25%)</option><option value="2.25">Dayton (2.25%)</option><option value="2.0">Cleveland (2.0%)</option><option value="1.8">Cincinnati (1.8%)</option><option value="custom">Custom...</option></select></div>
        </div>
        <div class="oot-field" id="ot-custom-wrap" style="display:none;"><label for="ot-custom">Custom Local Rate (%)</label><input type="number" id="ot-custom" value="1.5" min="0" max="5" step="0.1"></div>
        <button class="oot-btn" id="oot-btn">⚡ Calculate Overtime Pay</button>
      </div>
    </div>
    <div class="oot-res">
      <div class="oot-res-head"><h3>Your Overtime Paycheck</h3><div class="oot-res-sub" id="ot-res-sub">Fill in your details above</div></div>
      <div class="oot-primary"><span class="oot-pval" id="ot-net">$0.00</span><span class="oot-plbl">Estimated Take-Home Pay</span></div>
      <div class="oot-boxes">
        <div class="oot-box"><span class="oot-box-v" id="ot-reg-pay">$0</span><span class="oot-box-l">Regular Pay</span></div>
        <div class="oot-box"><span class="oot-box-v" id="ot-ot-pay">$0</span><span class="oot-box-l">Overtime Pay</span></div>
        <div class="oot-box"><span class="oot-box-v" id="ot-gross">$0</span><span class="oot-box-l">Total Gross</span></div>
        <div class="oot-box"><span class="oot-box-v" id="ot-rate-disp">$0/hr</span><span class="oot-box-l">OT Rate</span></div>
      </div>
      <div class="oot-lines">
        <div class="oot-line"><span class="oot-line-l">Regular Pay</span><span class="oot-line-v" id="ot-ln-reg">—</span></div>
        <div class="oot-line"><span class="oot-line-l">Overtime Pay</span><span class="oot-line-v" id="ot-ln-ot">—</span></div>
        <div class="oot-line"><span class="oot-line-l">Total Gross Pay</span><span class="oot-line-v" id="ot-ln-gross">—</span></div>
        <div class="oot-line ded"><span class="oot-line-l">Federal Income Tax</span><span class="oot-line-v" id="ot-ln-fed">—</span></div>
        <div class="oot-line ded"><span class="oot-line-l">Ohio State Tax</span><span class="oot-line-v" id="ot-ln-state">—</span></div>
        <div class="oot-line ded"><span class="oot-line-l" id="ot-local-lbl">Municipal Tax</span><span class="oot-line-v" id="ot-ln-local">—</span></div>
        <div class="oot-line ded"><span class="oot-line-l">Social Security (6.2%)</span><span class="oot-line-v" id="ot-ln-ss">—</span></div>
        <div class="oot-line ded"><span class="oot-line-l">Medicare (1.45%)</span><span class="oot-line-v" id="ot-ln-med">—</span></div>
        <div class="oot-line ttl"><span class="oot-line-l">Estimated Take-Home Pay</span><span class="oot-line-v" id="ot-ln-net">—</span></div>
      </div>
      <div class="oot-disc">*FLSA 1.5× standard. Not legal or tax advice.</div>
    </div>
  </div>

  <section class="oot-section">
    <h2>Ohio Overtime Laws & FLSA Rules</h2>
    <p>Ohio employees are protected by the <strong>Fair Labor Standards Act (FLSA)</strong>, which requires non-exempt employees to receive at least <strong>1.5 times their regular rate of pay</strong> for all hours worked over 40 in a single workweek.</p>
    <h3>Key FLSA Overtime Rules for Ohio</h3>
    <table class="oot-table">
      <thead><tr><th>Rule</th><th>Detail</th></tr></thead>
      <tbody>
        <tr><td>Overtime threshold</td><td>Over 40 hours in a single workweek</td></tr>
        <tr><td>Minimum OT rate</td><td>1.5× regular rate of pay</td></tr>
        <tr><td>Daily overtime</td><td>Not required in Ohio (unlike California)</td></tr>
        <tr><td>Exempt employees</td><td>Executive, administrative, professional roles above salary threshold generally exempt</td></tr>
        <tr><td>2024 FLSA salary threshold</td><td>$684/week ($35,568/year) — below this, most employees are non-exempt</td></tr>
        <tr><td>Comp time (private sector)</td><td>Not permitted in place of overtime pay for private employers</td></tr>
      </tbody>
    </table>
    <div class="oot-info">⚠️ <strong>Exemption note:</strong> Salaried employees earning above the FLSA salary threshold AND performing executive, administrative, or professional duties may be classified as exempt from overtime. Misclassification is common — if you believe you're being denied overtime you're entitled to, contact the U.S. Department of Labor or an employment attorney.</div>
    <h3>Overtime Pay Reference Table</h3>
    <table class="oot-table">
      <thead><tr><th>Regular Rate</th><th>OT Rate (1.5×)</th><th>8 OT Hours Gross</th><th>10 OT Hours Gross</th></tr></thead>
      <tbody>
        <tr><td>$15.00/hr</td><td>$22.50/hr</td><td>$180</td><td>$225</td></tr>
        <tr><td>$18.00/hr</td><td>$27.00/hr</td><td>$216</td><td>$270</td></tr>
        <tr><td>$20.00/hr</td><td>$30.00/hr</td><td>$240</td><td>$300</td></tr>
        <tr><td>$25.00/hr</td><td>$37.50/hr</td><td>$300</td><td>$375</td></tr>
        <tr><td>$30.00/hr</td><td>$45.00/hr</td><td>$360</td><td>$450</td></tr>
        <tr><td>$35.00/hr</td><td>$52.50/hr</td><td>$420</td><td>$525</td></tr>
        <tr><td>$40.00/hr</td><td>$60.00/hr</td><td>$480</td><td>$600</td></tr>
      </tbody>
    </table>
  </section>
  <section class="oot-section">
    <h2>Frequently Asked Questions</h2>
    <?php $faqs=[
      ["How is overtime calculated in Ohio?","Ohio follows FLSA — non-exempt employees receive 1.5× their regular rate for hours over 40 in a workweek. Ohio does not require daily overtime. Each workweek is calculated independently."],
      ["How is overtime taxed in Ohio?","Overtime is taxed as ordinary income using the same federal brackets, Ohio state brackets, FICA, and municipal taxes as regular wages. There is no special overtime tax rate, but additional OT income may push annual wages into a higher marginal bracket."],
      ["What is the FLSA overtime threshold?","Hours over 40 in a single workweek. The workweek is defined by the employer (e.g., Sunday–Saturday). Each week stands alone — you cannot average hours across two weeks."],
      ["Are salaried employees entitled to overtime in Ohio?","Non-exempt salaried employees earning below the FLSA salary threshold (\$684/week) are entitled to overtime. Employees meeting both the salary level test and duties test for executive, administrative, or professional exemptions are generally not entitled to overtime."],
      ["What is a regular rate of pay for overtime purposes?","The regular rate is the weighted average of all compensation in the workweek excluding overtime premiums. For simple hourly workers it equals the hourly rate. Shift differentials, commissions, and non-discretionary bonuses must be included."],
      ["Does Ohio require double time?","No. Ohio follows FLSA and only requires 1.5× for overtime hours. There is no state law mandating double time (2.0×). Some employers offer it as a benefit but it is not legally required."],
      ["Can employers require overtime in Ohio?","Yes. Ohio allows employers to require overtime from non-exempt employees. Refusing required overtime can result in discipline up to termination unless a collective bargaining agreement provides otherwise."],
      ["Can comp time replace overtime pay in Ohio?","Not in the private sector. Compensatory time in lieu of overtime pay is only permitted for state and local government employees under FLSA Section 7(o). Private employers must pay overtime in cash."],
      ["What is the Ohio minimum wage overtime rate for 2026?","The Ohio minimum wage is \$10.45/hour in 2026. The minimum overtime rate is therefore \$15.68/hour (1.5 × \$10.45). Tipped employees have a lower base but overtime is calculated from the full minimum wage."],
      ["How does overtime affect Ohio municipal tax?","Overtime pay is subject to the same municipal income tax as regular wages. If you work in Columbus (2.5%), all overtime earnings are taxed at that 2.5% local rate in addition to Ohio state and federal tax."],
    ]; foreach($faqs as $f): ?>
    <div class="oot-faq-item"><div class="oot-faq-q"><?php echo $f[0];?></div><div class="oot-faq-a"><?php echo $f[1];?></div></div>
    <?php endforeach; ?>
  </section>

  <section class="oot-section">
    <h2>Overtime Pay Worked Example — Ohio, 2026</h2>
    <p>You earn <strong>$20.00 per hour</strong> as a single filer in Cleveland. During a biweekly pay period you work <strong>40 regular hours and 10 overtime hours</strong> in each week.</p>
    <h3>Step 1: Calculate Gross Pay</h3>
    <table class="oot-table">
      <thead><tr><th></th><th>Hours</th><th>Rate</th><th>Gross</th></tr></thead>
      <tbody>
        <tr><td>Regular pay</td><td>80 hrs (40+40)</td><td>$20.00/hr</td><td>$1,600.00</td></tr>
        <tr><td>Overtime pay</td><td>20 hrs (10+10)</td><td>$30.00/hr (1.5×)</td><td>$600.00</td></tr>
        <tr><td><strong>Total Gross</strong></td><td>100 hrs</td><td>—</td><td><strong>$2,200.00</strong></td></tr>
      </tbody>
    </table>
    <h3>Step 2: Estimate Taxes (Single, Cleveland 2.0%)</h3>
    <table class="oot-table">
      <thead><tr><th>Tax</th><th>Calculation</th><th>Amount</th></tr></thead>
      <tbody>
        <tr><td>Federal income tax (annualised)</td><td>~12% bracket</td><td>~$187</td></tr>
        <tr><td>Ohio state tax</td><td>~2.9% effective</td><td>~$42</td></tr>
        <tr><td>Cleveland municipal (2.0%)</td><td>$2,200 × 2%</td><td>$44</td></tr>
        <tr><td>Social Security (6.2%)</td><td>$2,200 × 6.2%</td><td>$136.40</td></tr>
        <tr><td>Medicare (1.45%)</td><td>$2,200 × 1.45%</td><td>$31.90</td></tr>
        <tr><td><strong>Estimated Net Paycheck</strong></td><td></td><td><strong>~$1,758</strong></td></tr>
      </tbody>
    </table>
    <div class="oot-info">💡 The <strong>overtime premium</strong> ($600) adds approximately <strong>$450 after all taxes</strong> — about 75 cents on the dollar. Higher earners in upper brackets keep less of each overtime dollar.</div>

    <h3>Ohio Overtime Earnings at a Glance (Biweekly, 10 OT Hours)</h3>
    <table class="oot-table">
      <thead><tr><th>Hourly Rate</th><th>OT Rate (1.5×)</th><th>OT Gross (10 hrs)</th><th>Approx. Net OT*</th></tr></thead>
      <tbody>
        <tr><td>$15/hr</td><td>$22.50/hr</td><td>$225</td><td>~$168</td></tr>
        <tr><td>$18/hr</td><td>$27.00/hr</td><td>$270</td><td>~$202</td></tr>
        <tr><td>$20/hr</td><td>$30.00/hr</td><td>$300</td><td>~$225</td></tr>
        <tr><td>$25/hr</td><td>$37.50/hr</td><td>$375</td><td>~$275</td></tr>
        <tr><td>$30/hr</td><td>$45.00/hr</td><td>$450</td><td>~$325</td></tr>
        <tr><td>$40/hr</td><td>$60.00/hr</td><td>$600</td><td>~$420</td></tr>
      </tbody>
    </table>
    <p style="font-size:.82rem;color:#64748b;">*Approximate after 22% federal, ~2.9% Ohio, 2.0% Cleveland municipal, and 7.65% FICA. Actual amounts vary by income level.</p>
  </section>

  <section class="oot-section">
    <h2>Who Is Exempt from Overtime in Ohio?</h2>
    <p>Not every employee is entitled to overtime under FLSA. Common exemptions that apply to Ohio workers:</p>
    <table class="oot-table">
      <thead><tr><th>Exemption</th><th>Criteria</th></tr></thead>
      <tbody>
        <tr><td><strong>Executive</strong></td><td>Manages 2+ employees, primary duty is management, salary ≥$684/week</td></tr>
        <tr><td><strong>Administrative</strong></td><td>Office/non-manual work related to management, exercises discretion, salary ≥$684/week</td></tr>
        <tr><td><strong>Professional</strong></td><td>Requires advanced knowledge in a field of science or learning, salary ≥$684/week</td></tr>
        <tr><td><strong>Computer employees</strong></td><td>Systems analysts, programmers, software engineers earning ≥$27.63/hour or $684/week</td></tr>
        <tr><td><strong>Outside sales</strong></td><td>Primary duty is making sales away from the employer's place of business</td></tr>
        <tr><td><strong>Highly compensated</strong></td><td>Total annual compensation ≥$107,432 and performs exempt duties</td></tr>
      </tbody>
    </table>
    <div class="oot-info">⚠️ <strong>Misclassification warning:</strong> Being salaried does not automatically mean exempt. Many salaried employees are entitled to overtime if they do not meet both the salary level test and the duties test. The U.S. Department of Labor enforces these rules and allows employees to file complaints for unpaid overtime.</div>
    <p>See also: <a href="<?php echo $baseUrl;?>/ohio/salary-paycheck-calculator">Ohio Salary Paycheck Calculator</a> · <a href="<?php echo $baseUrl;?>/ohio/paycheck-calculator">Ohio Paycheck Calculator</a> · <a href="<?php echo $baseUrl;?>/ohio/bonus-tax-calculator">Ohio Bonus Tax Calculator</a></p>
  </section>

  <section class="oot-section">
    <h2>Related Ohio Payroll Calculators</h2>
    <div class="oot-related">
      <a href="<?php echo $baseUrl;?>/ohio/paycheck-calculator" class="oot-rel"><span>💵</span><strong>Full Paycheck</strong><em>All inputs</em></a>
      <a href="<?php echo $baseUrl;?>/ohio/hourly-paycheck-calculator" class="oot-rel"><span>⏱️</span><strong>Hourly Paycheck</strong><em>Rate + hours</em></a>
      <a href="<?php echo $baseUrl;?>/ohio/salary-paycheck-calculator" class="oot-rel"><span>📊</span><strong>Salary Paycheck</strong><em>Annual to net</em></a>
      <a href="<?php echo $baseUrl;?>/ohio/bonus-tax-calculator" class="oot-rel"><span>🎯</span><strong>Bonus Tax</strong><em>Supplemental wages</em></a>
      <a href="<?php echo $baseUrl;?>/ohio/payroll-tax-calculator" class="oot-rel"><span>🏢</span><strong>Payroll Tax</strong><em>Employer costs</em></a>
      <a href="<?php echo $baseUrl;?>/ohio/" class="oot-rel"><span>🏠</span><strong>All Ohio Tools</strong><em>Full suite</em></a>
    </div>
  </section>
</div>
</main>
<script>
(function(){
  const FED={single:[[0,11925,.10],[11925,48475,.12],[48475,103350,.22],[103350,197300,.24],[197300,250525,.32],[250525,626350,.35],[626350,Infinity,.37]],married_jointly:[[0,23850,.10],[23850,96950,.12],[96950,206700,.22],[206700,394600,.24],[394600,501050,.32],[501050,751600,.35],[751600,Infinity,.37]],married_separately:[[0,11925,.10],[11925,48475,.12],[48475,103350,.22],[103350,197300,.24],[197300,250525,.32],[250525,375800,.35],[375800,Infinity,.37]],head_household:[[0,17000,.10],[17000,64850,.12],[64850,103350,.22],[103350,197300,.24],[197300,250500,.32],[250500,626350,.35],[626350,Infinity,.37]],qualifying_widow:[[0,23850,.10],[23850,96950,.12],[96950,206700,.22],[206700,394600,.24],[394600,501050,.32],[501050,751600,.35],[751600,Infinity,.37]]};
  function fedTax(inc,st){let t=0;for(const[lo,hi,r]of(FED[st]||FED.single)){if(inc<=lo)break;t+=(Math.min(inc,hi)-lo)*r;}return t;}
  function ohioTax(inc){if(inc<=26050)return 0;if(inc<=46100)return(inc-26050)*.02765;if(inc<=92150)return 554.28+(inc-46100)*.03226;if(inc<=115300)return 2040.90+(inc-92150)*.03688;return 2895.12+(inc-115300)*.03990;}
  function ppy(f){return{weekly:52,biweekly:26,semimonthly:24,monthly:12}[f]||26;}
  const fmt=v=>'$'+Math.abs(v).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g,',');
  const fmtI=v=>'$'+Math.round(Math.abs(v)).toLocaleString();
  const $=id=>document.getElementById(id);
  $('ot-muni').addEventListener('change',()=>{$('ot-custom-wrap').style.display=$('ot-muni').value==='custom'?'':'none';calc();});
  function getLocal(){const m=$('ot-muni').value;return m==='custom'?(parseFloat($('ot-custom').value)||0)/100:parseFloat(m)/100||0;}
  function calc(){
    const rate=parseFloat($('ot-rate').value)||0;
    const regHrs=parseFloat($('ot-reg-hrs').value)||0;
    const otHrs=parseFloat($('ot-ot-hrs').value)||0;
    const mult=parseFloat($('ot-mult').value)||1.5;
    const freq=$('ot-freq').value;
    const status=$('ot-status').value;
    const localRate=getLocal();
    const p=ppy(freq);
    const otRate=rate*mult;
    const regPay=rate*regHrs, otPay=otRate*otHrs, gross=regPay+otPay;
    const annGross=gross*p;
    const perFed=fedTax(annGross,status)/p;
    const perState=ohioTax(annGross)/p;
    const perLocal=gross*localRate;
    const perSS=Math.min(gross,176100/p)*0.062;
    const perMed=gross*0.0145;
    const net=gross-(perFed+perState+perLocal+perSS+perMed);
    $('ot-net').textContent=fmt(net);
    $('ot-reg-pay').textContent=fmtI(regPay);
    $('ot-ot-pay').textContent=fmtI(otPay);
    $('ot-gross').textContent=fmtI(gross);
    $('ot-rate-disp').textContent='$'+otRate.toFixed(2)+'/hr';
    $('ot-ln-reg').textContent=fmt(regPay);
    $('ot-ln-ot').textContent=fmt(otPay);
    $('ot-ln-gross').textContent=fmt(gross);
    $('ot-ln-fed').textContent='−'+fmt(perFed);
    $('ot-ln-state').textContent='−'+fmt(perState);
    $('ot-ln-local').textContent='−'+fmt(perLocal);
    $('ot-ln-ss').textContent='−'+fmt(perSS);
    $('ot-ln-med').textContent='−'+fmt(perMed);
    $('ot-ln-net').textContent=fmt(net);
    const mSel=$('ot-muni');
    $('ot-local-lbl').textContent=mSel.value!=='0'?mSel.options[mSel.selectedIndex].text.split('(')[0].trim()+' Tax':'Municipal Tax';
    $('ot-res-sub').textContent=regHrs+'h reg + '+otHrs+'h OT @ $'+rate.toFixed(2)+'/hr';
  }
  document.querySelectorAll('.oot-body input,.oot-body select').forEach(e=>{e.addEventListener('input',calc);e.addEventListener('change',calc);});
  $('oot-btn').addEventListener('click',calc);
  document.querySelectorAll('.oot-faq-q').forEach(q=>{q.addEventListener('click',function(){const i=this.closest('.oot-faq-item'),w=i.classList.contains('open');document.querySelectorAll('.oot-faq-item').forEach(x=>x.classList.remove('open'));if(!w)i.classList.add('open');});});
  calc();
})();
</script>
<?php require_once '../includes/footer.php'; ?>
