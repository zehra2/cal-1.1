<?php
$currentYear = date('Y');
$pageTitle       = "Ohio Bonus Tax Calculator ($currentYear) | Net Pay";
$metaDescription = "Free Ohio Bonus Tax Calculator for $currentYear. See how much federal tax (22% flat or aggregate method), Ohio state tax, and local taxes are withheld from your bonus.";
$metaKeywords    = 'ohio bonus tax calculator, ohio bonus after taxes, how much tax on bonus ohio, ohio bonus withholding calculator, bonus tax calculator ohio, supplemental wage ohio';
$schemaData = [
  '@context'=>'https://schema.org','@graph'=>[
    ['@type'=>'WebApplication','name'=>'Ohio Bonus Tax Calculator',
     'url'=>'https://americacalculator.com/ohio/bonus-tax-calculator',
     'description'=>"Calculate Ohio bonus tax withholding using the flat 22% method or aggregate method. See net bonus after federal, Ohio state, and local taxes.",
     'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All',
     'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
    ['@type'=>'BreadcrumbList','itemListElement'=>[
      ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
      ['@type'=>'ListItem','position'=>2,'name'=>'Ohio Payroll','item'=>'https://americacalculator.com/ohio/'],
      ['@type'=>'ListItem','position'=>3,'name'=>'Ohio Bonus Tax Calculator','item'=>'https://americacalculator.com/ohio/bonus-tax-calculator'],
    ]],
    ['@type'=>'FAQPage','mainEntity'=>[
      ['@type'=>'Question','name'=>'How are bonuses taxed in Ohio?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Bonuses are classified as supplemental wages. Federal withholding is typically 22% flat (for bonuses under $1M). Ohio state tax is withheld at progressive rates. Municipal taxes apply in cities like Columbus (2.5%), Cleveland (2.0%), and Cincinnati (1.8%). FICA taxes also apply.']],
      ['@type'=>'Question','name'=>'What is the aggregate method for bonus withholding?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'The aggregate method combines the bonus with your most recent regular paycheck, applies withholding tables to the combined amount, then subtracts the withholding already taken from the regular paycheck. This typically results in higher withholding for lower earners and lower withholding for high earners compared to the flat 22% method.']],
      ['@type'=>'Question','name'=>'Will I get money back from my bonus withholding?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Possibly. If your total annual income keeps you in a marginal federal bracket below 22% (income under approximately $48,475 for single filers), you will likely receive some bonus withholding back as a refund when you file your tax return. If your marginal rate is above 22%, you may owe additional tax.']],
      ['@type'=>'Question','name'=>'Are bonuses over $1 million taxed differently?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. The portion of supplemental wages exceeding $1 million in a calendar year is withheld at the 37% federal flat rate. This calculator handles standard bonuses under $1 million.']],
      ['@type'=>'Question','name'=>'Which Ohio cities charge local income tax on bonuses?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'More than 600 Ohio municipalities levy local income taxes that apply to bonuses just as they do to regular wages. Major city rates: Columbus 2.5%, Akron 2.5%, Toledo 2.25%, Dayton 2.25%, Cleveland 2.0%, Cincinnati 1.8%. If your employer is in a city with a local tax, that tax will typically be withheld from your bonus.']],
      ['@type'=>'Question','name'=>'Does my employer choose the withholding method?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. Employers select the withholding method. Most use the flat 22% method because it is simpler. Some employers use the aggregate method. You cannot choose the method yourself, but you can adjust your W-4 allowances to account for the difference when you file your annual return.']],
      ['@type'=>'Question','name'=>'Are FICA taxes (Social Security and Medicare) withheld from bonuses?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. Bonuses are subject to Social Security (6.2% up to the annual wage base of $176,100) and Medicare (1.45% with no cap). If your regular wages have already reached the Social Security wage base, your bonus will not be subject to additional Social Security withholding.']],
      ['@type'=>'Question','name'=>'What is the Ohio state income tax rate on bonuses?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Ohio does not have a separate bonus tax rate. Bonuses are taxed at the same progressive state rates: 0% on income up to $26,050, 2.765% on $26,051 to $46,100, 3.226% on $46,101 to $92,150, 3.688% on $92,151 to $115,300, and 3.990% above $115,300.']],
      ['@type'=>'Question','name'=>'What is the flat 22% method?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'The flat percentage method withholds exactly 22% federal income tax from supplemental wages under $1 million, regardless of your regular income or filing status. It is the simplest method and the most common. Your actual federal marginal rate may be higher or lower, which is reconciled when you file your tax return.']],
      ['@type'=>'Question','name'=>'Can I reduce the tax withheld from my bonus?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'You cannot directly instruct your employer to withhold less than the standard supplemental wage rate on your bonus. However, contributing the bonus to a pre-tax 401(k) (if your plan allows mid-year elections) can reduce your taxable bonus. Otherwise, any excess withholding is recovered as a refund when you file your annual federal and Ohio tax returns.']],
    ]],
  ],
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f0f4ff;}
.obt-wrap{max-width:1100px;margin:0 auto;padding:2rem 1.5rem 4rem;}
.obt-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}
.obt-bc a{color:#64748b;text-decoration:none;}
.obt-hero h1{font-size:2rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.obt-hero p{font-size:1rem;color:#64748b;line-height:1.65;border-left:4px solid #1d4ed8;padding-left:1rem;margin:0 0 1.75rem;}
.obt-layout{display:grid;grid-template-columns:1fr 360px;gap:2rem;align-items:start;margin-bottom:2.5rem;}
.obt-card,.obt-res{background:#fff;border-radius:14px;border:1px solid #e8edf5;box-shadow:0 4px 20px rgba(0,0,0,.05);overflow:hidden;}
.obt-card-head{background:linear-gradient(135deg,#1d4ed8,#1e40af);color:#fff;padding:1.2rem 1.75rem;display:flex;align-items:center;gap:.7rem;}
.obt-card-head h2{font-size:1.1rem;font-weight:700;margin:0;}
.obt-body{padding:1.75rem;}
.obt-lbl{font-size:.7rem;font-weight:800;text-transform:uppercase;letter-spacing:.08em;color:#94a3b8;margin:1.4rem 0 .8rem;padding-bottom:.35rem;border-bottom:1px solid #f1f5f9;}
.obt-lbl:first-child{margin-top:0;}
.obt-row2{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.obt-field{margin-bottom:.9rem;}
.obt-field label{display:block;font-size:.86rem;font-weight:600;color:#1e293b;margin-bottom:.38rem;}
.obt-field input,.obt-field select{width:100%;padding:11px 13px;border:1.5px solid #d1dae8;border-radius:8px;font-size:.94rem;color:#0f172a;outline:none;transition:border-color .2s;box-sizing:border-box;background:#fff;}
.obt-field input:focus,.obt-field select:focus{border-color:#1d4ed8;box-shadow:0 0 0 3px rgba(29,78,216,.1);}
.obt-field .hint{font-size:.73rem;color:#94a3b8;margin-top:.28rem;}
.obt-method-toggle{display:grid;grid-template-columns:1fr 1fr;border:1.5px solid #d1dae8;border-radius:8px;overflow:hidden;margin-bottom:1rem;}
.obt-mtbtn{padding:10px;text-align:center;font-size:.87rem;font-weight:600;color:#64748b;cursor:pointer;border:none;background:#fff;transition:all .2s;}
.obt-mtbtn.active{background:#1d4ed8;color:#fff;}
.obt-btn{width:100%;background:linear-gradient(135deg,#1d4ed8,#1e40af);color:#fff;padding:14px;border:none;border-radius:9px;font-size:1rem;font-weight:700;cursor:pointer;margin-top:1.1rem;transition:opacity .2s,transform .15s;}
.obt-btn:hover{opacity:.92;transform:translateY(-1px);}
.obt-res{position:sticky;top:5rem;}
.obt-res-head{background:linear-gradient(135deg,#1d4ed8,#1e40af);padding:1.2rem 1.5rem;}
.obt-res-head h3{color:#fff;font-size:1rem;font-weight:700;margin:0 0 .1rem;}
.obt-res-sub{color:rgba(255,255,255,.75);font-size:.78rem;}
.obt-primary{text-align:center;padding:1.4rem 1rem;border-bottom:1px solid #f0f4fa;}
.obt-pval{display:block;font-size:2.4rem;font-weight:800;color:#1d4ed8;line-height:1;margin-bottom:.25rem;}
.obt-plbl{font-size:.8rem;color:#64748b;}
.obt-boxes{display:grid;grid-template-columns:1fr 1fr;gap:.5rem;padding:.9rem 1.1rem;border-bottom:1px solid #f0f4fa;}
.obt-box{background:#f8fafc;border-radius:8px;padding:.65rem .7rem;text-align:center;}
.obt-box-v{display:block;font-size:1rem;font-weight:800;color:#0f172a;margin-bottom:.12rem;}
.obt-box-l{font-size:.68rem;color:#64748b;font-weight:600;line-height:1.3;}
.obt-lines{padding:.9rem 1.1rem;}
.obt-line{display:flex;justify-content:space-between;padding:.4rem 0;border-bottom:1px solid #f8fafc;font-size:.87rem;}
.obt-line:last-child{border-bottom:none;}
.obt-line-l{color:#475569;}
.obt-line-v{font-weight:700;color:#1e293b;}
.obt-line.ded .obt-line-v{color:#dc2626;}
.obt-line.ttl{border-top:2px solid #dbeafe;margin-top:.3rem;padding-top:.6rem;}
.obt-line.ttl .obt-line-l{font-weight:700;color:#0f172a;font-size:.9rem;}
.obt-line.ttl .obt-line-v{color:#1d4ed8;font-size:.97rem;}
.obt-disc{padding:.7rem 1.1rem;font-size:.71rem;color:#94a3b8;line-height:1.4;border-top:1px solid #f0f4fa;background:#f8fafc;}
.obt-section{background:#fff;border-radius:14px;border:1px solid #eef2f7;padding:2rem;margin-bottom:1.75rem;}
.obt-section h2{font-size:1.45rem;color:#0f172a;margin:0 0 1rem;padding-bottom:.7rem;border-bottom:2px solid #eff6ff;}
.obt-section h3{font-size:1.05rem;color:#1e293b;margin:1.4rem 0 .55rem;}
.obt-section p{color:#475569;line-height:1.75;margin-bottom:1rem;font-size:.96rem;}
.obt-section strong{color:#1e293b;}
.obt-section a{color:#1d4ed8;font-weight:600;}
.obt-table{width:100%;border-collapse:collapse;border-radius:10px;overflow:hidden;border:1px solid #e8edf5;margin-bottom:1.2rem;}
.obt-table th{background:#1d4ed8;color:#fff;padding:10px 13px;text-align:left;font-size:.84rem;font-weight:600;}
.obt-table td{padding:9px 13px;border-bottom:1px solid #f1f5f9;font-size:.87rem;color:#334155;}
.obt-table tr:last-child td{border-bottom:none;}
.obt-table tr:nth-child(even) td{background:#f8fafc;}
.obt-info{background:#eff6ff;border-left:4px solid #1d4ed8;border-radius:0 8px 8px 0;padding:.85rem 1rem;margin:1rem 0;font-size:.91rem;color:#1e3a8a;line-height:1.6;}
.obt-faq-item{border-bottom:1px solid #f0f4fa;padding:.8rem 0;}
.obt-faq-item:last-child{border-bottom:none;}
.obt-faq-q{font-size:.96rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;margin-bottom:.45rem;}
.obt-faq-q::after{content:'+';font-size:1.2rem;color:#1d4ed8;flex-shrink:0;}
.obt-faq-item.open .obt-faq-q::after{content:'−';}
.obt-faq-a{color:#475569;font-size:.91rem;line-height:1.68;display:none;}
.obt-faq-item.open .obt-faq-a{display:block;}
.obt-related{display:grid;grid-template-columns:repeat(3,1fr);gap:.9rem;}
.obt-rel{background:#f8fafc;border:1.5px solid #e8edf5;border-radius:10px;padding:.9rem;text-decoration:none;text-align:center;transition:border-color .2s,background .2s;}
.obt-rel:hover{border-color:#1d4ed8;background:#eff6ff;}
.obt-rel span{display:block;font-size:1.3rem;margin-bottom:.35rem;}
.obt-rel strong{display:block;font-size:.85rem;color:#0f172a;font-weight:700;}
.obt-rel em{font-size:.76rem;color:#64748b;font-style:normal;}
@media(max-width:900px){.obt-layout{grid-template-columns:1fr;}.obt-res{position:static;}}
@media(max-width:600px){.obt-row2{grid-template-columns:1fr;}.obt-related{grid-template-columns:1fr 1fr;}}
</style>
<main id="main-content">
<div class="obt-wrap">
  <div class="obt-bc"><a href="<?php echo $baseUrl;?>/index.php">Home</a> › <a href="<?php echo $baseUrl;?>/ohio/">Ohio Payroll</a> › Ohio Bonus Tax Calculator</div>
  <div class="obt-hero">
    <h1>Ohio Bonus Tax Calculator (<?php echo $currentYear;?>)</h1>
    <p>Bonuses are taxed differently from regular wages. See exactly how much of your <strong>Ohio bonus</strong> you'll keep after the federal flat 22% rate (or aggregate method), Ohio state tax, municipal tax, Social Security, and Medicare.</p>
  </div>
  <div class="obt-layout">
    <div class="obt-card">
      <div class="obt-card-head"><span style="font-size:1.3rem;">🎯</span><h2>Ohio Bonus Tax Calculator</h2></div>
      <div class="obt-body">
        <div class="obt-lbl">Withholding Method</div>
        <div class="obt-method-toggle">
          <button class="obt-mtbtn active" id="btn-flat" onclick="setMethod('flat')">📊 Flat 22% (Recommended)</button>
          <button class="obt-mtbtn" id="btn-agg" onclick="setMethod('aggregate')">📋 Aggregate Method</button>
        </div>
        <div id="agg-note" style="display:none;background:#eff6ff;border-left:3px solid #1d4ed8;padding:.7rem 1rem;font-size:.83rem;color:#1e3a8a;border-radius:0 6px 6px 0;margin-bottom:.9rem;">Aggregate method combines your bonus with your last regular paycheck. Enter your regular gross pay per period below.</div>
        <div class="obt-lbl">Bonus Information</div>
        <div class="obt-row2">
          <div class="obt-field"><label for="b-amount">Bonus Amount ($)</label><input type="number" id="b-amount" value="5000" min="0" step="100"></div>
          <div class="obt-field"><label for="b-freq">Pay Frequency</label><select id="b-freq"><option value="weekly">Weekly</option><option value="biweekly" selected>Biweekly</option><option value="semimonthly">Semi-Monthly</option><option value="monthly">Monthly</option></select></div>
        </div>
        <div class="obt-field" id="b-reg-wrap" style="display:none;"><label for="b-reg-gross">Regular Gross Pay (last period, $)</label><input type="number" id="b-reg-gross" value="2308" min="0" step="100"><div class="hint">Used for aggregate method only</div></div>
        <div class="obt-lbl">Tax Settings</div>
        <div class="obt-row2">
          <div class="obt-field"><label for="b-status">Filing Status</label><select id="b-status"><option value="single" selected>Single</option><option value="married_jointly">Married Filing Jointly</option><option value="married_separately">Married Filing Separately</option><option value="head_household">Head of Household</option><option value="qualifying_widow">Qualifying Surviving Spouse</option></select></div>
          <div class="obt-field"><label for="b-muni">Ohio Municipality</label><select id="b-muni"><option value="0">None</option><option value="2.5">Columbus (2.5%)</option><option value="2.5">Akron (2.5%)</option><option value="2.25">Toledo (2.25%)</option><option value="2.25">Dayton (2.25%)</option><option value="2.0">Cleveland (2.0%)</option><option value="1.8">Cincinnati (1.8%)</option><option value="custom">Custom...</option></select></div>
        </div>
        <div class="obt-field" id="b-custom-wrap" style="display:none;"><label for="b-custom">Custom Local Rate (%)</label><input type="number" id="b-custom" value="1.5" min="0" max="5" step="0.1"></div>
        <button class="obt-btn" id="obt-btn">⚡ Calculate Bonus Tax</button>
      </div>
    </div>
    <div class="obt-res">
      <div class="obt-res-head"><h3>Your Bonus After Taxes</h3><div class="obt-res-sub" id="b-res-sub">Enter your bonus amount above</div></div>
      <div class="obt-primary"><span class="obt-pval" id="b-net">$0.00</span><span class="obt-plbl">Bonus Take-Home Pay</span></div>
      <div class="obt-boxes">
        <div class="obt-box"><span class="obt-box-v" id="b-gross-disp">$0</span><span class="obt-box-l">Gross Bonus</span></div>
        <div class="obt-box"><span class="obt-box-v" id="b-total-tax">$0</span><span class="obt-box-l">Total Tax Withheld</span></div>
        <div class="obt-box"><span class="obt-box-v" id="b-eff">0%</span><span class="obt-box-l">Effective Rate</span></div>
        <div class="obt-box"><span class="obt-box-v" id="b-method-disp">Flat 22%</span><span class="obt-box-l">Method Used</span></div>
      </div>
      <div class="obt-lines">
        <div class="obt-line"><span class="obt-line-l">Gross Bonus</span><span class="obt-line-v" id="b-ln-gross">—</span></div>
        <div class="obt-line ded"><span class="obt-line-l" id="b-fed-lbl">Federal Tax (22% flat)</span><span class="obt-line-v" id="b-ln-fed">—</span></div>
        <div class="obt-line ded"><span class="obt-line-l">Ohio State Tax</span><span class="obt-line-v" id="b-ln-state">—</span></div>
        <div class="obt-line ded"><span class="obt-line-l" id="b-local-lbl">Municipal Tax</span><span class="obt-line-v" id="b-ln-local">—</span></div>
        <div class="obt-line ded"><span class="obt-line-l">Social Security (6.2%)</span><span class="obt-line-v" id="b-ln-ss">—</span></div>
        <div class="obt-line ded"><span class="obt-line-l">Medicare (1.45%)</span><span class="obt-line-v" id="b-ln-med">—</span></div>
        <div class="obt-line ttl"><span class="obt-line-l">Bonus Take-Home Pay</span><span class="obt-line-v" id="b-ln-net">—</span></div>
      </div>
      <div class="obt-disc">*Estimate only. Actual withholding varies by employer and W-4 elections. Not tax advice.</div>
    </div>
  </div>

  <section class="obt-section">
    <h2>How Bonus Tax Withholding Works in Ohio</h2>
    <p>Bonuses are classified as <strong>supplemental wages</strong> by the IRS and Ohio Department of Taxation. They're taxed separately from your regular paycheck using one of two methods:</p>
    <table class="obt-table">
      <thead><tr><th>Method</th><th>How It Works</th><th>Best For</th></tr></thead>
      <tbody>
        <tr><td><strong>Flat 22% (Percentage Method)</strong></td><td>Federal withholds exactly 22% on bonuses under $1M. Simple and predictable.</td><td>Most employees — default employer choice</td></tr>
        <tr><td><strong>Aggregate Method</strong></td><td>Bonus is added to last regular paycheck, combined withholding calculated, then regular withholding subtracted.</td><td>Employees whose marginal rate differs significantly from 22%</td></tr>
        <tr><td><strong>Over $1 Million</strong></td><td>37% flat federal rate applies to the amount over $1M.</td><td>High-compensation executives</td></tr>
      </tbody>
    </table>
    <div class="obt-info">💡 <strong>Will you get a refund?</strong> If your actual federal marginal rate is lower than 22% (common for employees earning under ~$48,475 single), you may receive some bonus withholding back when you file your tax return. If your rate is higher than 22%, you may owe additional tax.</div>
    <h3>Ohio State Bonus Withholding</h3>
    <p>Ohio uses its standard progressive brackets for bonus withholding, applied to the annualised bonus amount. This calculator annualises your bonus based on pay frequency to estimate the correct Ohio bracket rate.</p>
    <h3>Bonus Tax Examples — Ohio, Single Filer, Columbus</h3>
    <table class="obt-table">
      <thead><tr><th>Bonus Amount</th><th>Federal (22%)</th><th>Ohio State (~)</th><th>Columbus (2.5%)</th><th>FICA (~7.65%)</th><th>Net Bonus</th></tr></thead>
      <tbody>
        <tr><td>$1,000</td><td>$220</td><td>~$27</td><td>$25</td><td>$77</td><td><strong>~$651</strong></td></tr>
        <tr><td>$3,000</td><td>$660</td><td>~$81</td><td>$75</td><td>$230</td><td><strong>~$1,954</strong></td></tr>
        <tr><td>$5,000</td><td>$1,100</td><td>~$135</td><td>$125</td><td>$383</td><td><strong>~$3,257</strong></td></tr>
        <tr><td>$10,000</td><td>$2,200</td><td>~$270</td><td>$250</td><td>$765</td><td><strong>~$6,515</strong></td></tr>
        <tr><td>$25,000</td><td>$5,500</td><td>~$675</td><td>$625</td><td>$1,653*</td><td><strong>~$16,547</strong></td></tr>
      </tbody>
    </table>
    <p style="font-size:.82rem;color:#64748b;">*SS wage base limits may reduce FICA at higher annual incomes. Estimates only.</p>
  </section>
  <section class="obt-section">
    <h2>Frequently Asked Questions</h2>
    <?php $faqs=[
      ["How are bonuses taxed in Ohio?","Bonuses are supplemental wages. Federal withholding is typically 22% flat (for bonuses under \$1M). Ohio state tax is withheld at progressive rates. Municipal taxes apply in cities like Columbus (2.5%), Cleveland (2.0%), and Cincinnati (1.8%). FICA taxes also apply."],
      ["What is the aggregate method for bonus withholding?","The aggregate method adds your bonus to your most recent regular paycheck, calculates withholding on the combined amount using standard tables, then subtracts the regular-period withholding. This can result in higher or lower withholding than 22% depending on your total income level."],
      ["Will I get money back from my bonus withholding?","Possibly. If your annual marginal rate is below 22% (income under ~\$48,475 for single filers), you may receive a refund when you file. If your rate exceeds 22%, you may owe additional tax. Withholding is just an estimate reconciled at filing."],
      ["Are bonuses over \$1 million taxed differently?","Yes. The portion of supplemental wages exceeding \$1 million in a calendar year is withheld at the 37% federal flat rate. This calculator handles standard bonuses under \$1 million."],
      ["Which Ohio cities charge local income tax on bonuses?","More than 600 Ohio municipalities levy local income taxes that apply to bonuses. Major rates: Columbus 2.5%, Akron 2.5%, Toledo 2.25%, Dayton 2.25%, Cleveland 2.0%, Cincinnati 1.8%."],
      ["Does my employer choose the withholding method?","Yes. Employers select the withholding method — most use the flat 22% for simplicity. You cannot choose the method yourself, but you can adjust your W-4 to compensate for differences at filing."],
      ["Are FICA taxes withheld from bonuses?","Yes. Social Security (6.2% up to the \$176,100 annual wage base) and Medicare (1.45% with no cap) both apply to bonuses. If your regular wages already hit the SS wage base, no additional Social Security is withheld from your bonus."],
      ["What is Ohio's state income tax rate on bonuses?","Ohio has no separate bonus rate. Standard progressive rates apply: 0% up to \$26,050 · 2.765% on \$26,051–\$46,100 · 3.226% on \$46,101–\$92,150 · 3.688% on \$92,151–\$115,300 · 3.990% above \$115,300."],
      ["Can I reduce the tax withheld from my bonus?","You cannot instruct your employer to withhold less than the standard supplemental rate. Contributing the bonus to a pre-tax 401(k) (if your plan allows it) reduces taxable income. Otherwise, excess withholding is recovered as a refund when you file."],
      ["Does contributing to a 401(k) reduce bonus withholding?","It depends on your plan. Some 401(k) plans allow contributions from supplemental wages including bonuses. If your plan permits it, pre-tax contributions reduce your taxable bonus amount and therefore the federal and Ohio state income tax withheld."],
    ]; foreach($faqs as $f): ?>
    <div class="obt-faq-item"><div class="obt-faq-q"><?php echo $f[0];?></div><div class="obt-faq-a"><?php echo $f[1];?></div></div>
    <?php endforeach; ?>
  </section>

  <section class="obt-section">
    <h2>Worked Example: \$7,500 Bonus — Single Filer, Columbus</h2>
    <p>You earn <strong>\$65,000 per year</strong> (biweekly) as a single filer in Columbus. You receive a <strong>\$7,500 performance bonus</strong>. Here is how withholding is estimated using the flat 22% method.</p>
    <table class="obt-table">
      <thead><tr><th>Deduction</th><th>Calculation</th><th>Amount</th></tr></thead>
      <tbody>
        <tr><td>Gross Bonus</td><td>—</td><td><strong>\$7,500.00</strong></td></tr>
        <tr><td>Federal Income Tax (22% flat)</td><td>\$7,500 &times; 22%</td><td>&minus;\$1,650.00</td></tr>
        <tr><td>Ohio State Tax (~2.9% effective)</td><td>Annualised bracket estimate</td><td>&minus;\$~217.50</td></tr>
        <tr><td>Columbus Municipal Tax (2.5%)</td><td>\$7,500 &times; 2.5%</td><td>&minus;\$187.50</td></tr>
        <tr><td>Social Security (6.2%)</td><td>\$7,500 &times; 6.2%</td><td>&minus;\$465.00</td></tr>
        <tr><td>Medicare (1.45%)</td><td>\$7,500 &times; 1.45%</td><td>&minus;\$108.75</td></tr>
        <tr><td><strong>Estimated Net Bonus</strong></td><td></td><td><strong>~\$4,871</strong></td></tr>
      </tbody>
    </table>
    <div class="obt-info">💡 This employee is in the 22% federal bracket, so no extra federal tax will be owed at filing. If they were in the 12% bracket (income under ~\$48,475), they would receive approximately <strong>\$750 back</strong> in their refund from bonus over-withholding.</div>

    <h3>Ohio State Income Tax Brackets (<?php echo $currentYear;?>)</h3>
    <table class="obt-table">
      <thead><tr><th>Taxable Income</th><th>Ohio Rate</th></tr></thead>
      <tbody>
        <tr><td>\$0 – \$26,050</td><td>0%</td></tr>
        <tr><td>\$26,051 – \$46,100</td><td>2.765%</td></tr>
        <tr><td>\$46,101 – \$92,150</td><td>3.226%</td></tr>
        <tr><td>\$92,151 – \$115,300</td><td>3.688%</td></tr>
        <tr><td>Over \$115,300</td><td>3.990%</td></tr>
      </tbody>
    </table>
    <h3>Federal Brackets (<?php echo $currentYear;?>) — Single Filers</h3>
    <table class="obt-table">
      <thead><tr><th>Taxable Income</th><th>Federal Rate</th><th>Flat 22% Over/Under-Withholds?</th></tr></thead>
      <tbody>
        <tr><td>\$0 – \$11,925</td><td>10%</td><td>Over-withholds ~12% (refund likely)</td></tr>
        <tr><td>\$11,926 – \$48,475</td><td>12%</td><td>Over-withholds 10% (refund likely)</td></tr>
        <tr><td>\$48,476 – \$103,350</td><td>22%</td><td>Exactly right</td></tr>
        <tr><td>\$103,351 – \$197,300</td><td>24%</td><td>Under-withholds 2% (may owe)</td></tr>
        <tr><td>\$197,301 – \$250,525</td><td>32%</td><td>Under-withholds 10% (may owe)</td></tr>
        <tr><td>Over \$250,525</td><td>35–37%</td><td>Under-withholds significantly</td></tr>
      </tbody>
    </table>
  </section>

  <section class="obt-section">
    <h2>Ohio Municipal Bonus Tax Rates</h2>
    <p>Ohio has over 600 municipalities that can levy a local income tax. This tax applies to all wages including bonuses, and is withheld by your employer based on the city where your employer is located or where you work.</p>
    <table class="obt-table">
      <thead><tr><th>Ohio City</th><th>Municipal Tax Rate</th><th>Tax on \$5,000 Bonus</th><th>Tax on \$10,000 Bonus</th></tr></thead>
      <tbody>
        <tr><td>Columbus</td><td>2.5%</td><td>\$125</td><td>\$250</td></tr>
        <tr><td>Akron</td><td>2.5%</td><td>\$125</td><td>\$250</td></tr>
        <tr><td>Toledo</td><td>2.25%</td><td>\$112.50</td><td>\$225</td></tr>
        <tr><td>Dayton</td><td>2.25%</td><td>\$112.50</td><td>\$225</td></tr>
        <tr><td>Cleveland</td><td>2.0%</td><td>\$100</td><td>\$200</td></tr>
        <tr><td>Cincinnati</td><td>1.8%</td><td>\$90</td><td>\$180</td></tr>
        <tr><td>No Municipality</td><td>0%</td><td>\$0</td><td>\$0</td></tr>
      </tbody>
    </table>
    <p>Some cities offer a tax credit if you pay local tax in both the city where you work and the city where you live. The rules vary — check with your local municipality or a tax professional if you split time between cities.</p>
    <p>Related: <a href="<?php echo $baseUrl;?>/ohio/paycheck-calculator">Ohio Paycheck Calculator</a> — includes all Ohio municipal rates for regular payroll · <a href="<?php echo $baseUrl;?>/blog/ohio-state-income-tax">Ohio State Income Tax Guide <?php echo $currentYear;?></a></p>
  </section>
  </section>
  <section class="obt-section">
    <h2>Related Ohio Payroll Calculators</h2>
    <div class="obt-related">
      <a href="<?php echo $baseUrl;?>/ohio/paycheck-calculator" class="obt-rel"><span>💵</span><strong>Full Paycheck</strong><em>Salary + bonus</em></a>
      <a href="<?php echo $baseUrl;?>/ohio/hourly-paycheck-calculator" class="obt-rel"><span>⏱️</span><strong>Hourly Paycheck</strong><em>Rate + hours</em></a>
      <a href="<?php echo $baseUrl;?>/ohio/salary-paycheck-calculator" class="obt-rel"><span>📊</span><strong>Salary Paycheck</strong><em>Annual to net</em></a>
      <a href="<?php echo $baseUrl;?>/ohio/overtime-calculator" class="obt-rel"><span>🕐</span><strong>Overtime</strong><em>FLSA 1.5×</em></a>
      <a href="<?php echo $baseUrl;?>/ohio/payroll-tax-calculator" class="obt-rel"><span>🏢</span><strong>Payroll Tax</strong><em>Employer costs</em></a>
      <a href="<?php echo $baseUrl;?>/ohio/" class="obt-rel"><span>🏠</span><strong>All Ohio Tools</strong><em>Full suite</em></a>
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
  const fmtP=v=>v.toFixed(1)+'%';
  const $=id=>document.getElementById(id);
  let method='flat';
  window.setMethod=function(m){
    method=m;
    $('btn-flat').classList.toggle('active',m==='flat');
    $('btn-agg').classList.toggle('active',m==='aggregate');
    $('agg-note').style.display=m==='aggregate'?'':'none';
    $('b-reg-wrap').style.display=m==='aggregate'?'':'none';
    calc();
  };
  $('b-muni').addEventListener('change',()=>{$('b-custom-wrap').style.display=$('b-muni').value==='custom'?'':'none';calc();});
  function getLocal(){const m=$('b-muni').value;return m==='custom'?(parseFloat($('b-custom').value)||0)/100:parseFloat(m)/100||0;}
  function calc(){
    const bonus=parseFloat($('b-amount').value)||0;
    const freq=$('b-freq').value;
    const status=$('b-status').value;
    const localRate=getLocal();
    const p=ppy(freq);
    let fedTaxAmt=0;
    if(method==='flat'){
      fedTaxAmt=bonus*0.22;
      $('b-fed-lbl').textContent='Federal Tax (22% flat)';
      $('b-method-disp').textContent='Flat 22%';
    } else {
      const regGross=parseFloat($('b-reg-gross').value)||0;
      const combined=(regGross+bonus)*p;
      const regAnn=regGross*p;
      const combinedFed=fedTax(combined,status);
      const regFed=fedTax(regAnn,status);
      fedTaxAmt=Math.max(0,(combinedFed-regFed)/p);
      $('b-fed-lbl').textContent='Federal Tax (aggregate)';
      $('b-method-disp').textContent='Aggregate';
    }
    // Ohio: annualise bonus for bracket
    const annBonus=bonus*p;
    const ohioOnBonus=ohioTax(annBonus)/p;
    const localTax=bonus*localRate;
    const ssTax=Math.min(bonus,176100/p)*0.062;
    const medTax=bonus*0.0145;
    const totalTax=fedTaxAmt+ohioOnBonus+localTax+ssTax+medTax;
    const net=bonus-totalTax;
    const eff=bonus>0?(totalTax/bonus)*100:0;
    $('b-net').textContent=fmt(net);
    $('b-gross-disp').textContent=fmtI(bonus);
    $('b-total-tax').textContent=fmtI(totalTax);
    $('b-eff').textContent=fmtP(eff);
    $('b-ln-gross').textContent=fmt(bonus);
    $('b-ln-fed').textContent='−'+fmt(fedTaxAmt);
    $('b-ln-state').textContent='−'+fmt(ohioOnBonus);
    $('b-ln-local').textContent='−'+fmt(localTax);
    $('b-ln-ss').textContent='−'+fmt(ssTax);
    $('b-ln-med').textContent='−'+fmt(medTax);
    $('b-ln-net').textContent=fmt(net);
    const mSel=$('b-muni');
    $('b-local-lbl').textContent=mSel.value!=='0'?mSel.options[mSel.selectedIndex].text.split('(')[0].trim()+' Tax':'Municipal Tax';
    $('b-res-sub').textContent='$'+bonus.toLocaleString()+' bonus · '+method==='flat'?'flat 22%':'aggregate method';
  }
  document.querySelectorAll('.obt-body input,.obt-body select').forEach(e=>{e.addEventListener('input',calc);e.addEventListener('change',calc);});
  $('obt-btn').addEventListener('click',calc);
  document.querySelectorAll('.obt-faq-q').forEach(q=>{q.addEventListener('click',function(){const i=this.closest('.obt-faq-item'),w=i.classList.contains('open');document.querySelectorAll('.obt-faq-item').forEach(x=>x.classList.remove('open'));if(!w)i.classList.add('open');});});
  calc();
})();
</script>
<?php require_once '../includes/footer.php'; ?>
