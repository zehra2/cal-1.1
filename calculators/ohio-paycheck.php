<?php
$currentYear = date('Y');
$pageTitle       = "Ohio Paycheck Calculator ($currentYear) | Net Pay";
$metaDescription = "Free $currentYear Ohio Paycheck Calculator. Estimate take-home pay after federal tax, Ohio state income tax, Social Security, Medicare, and local taxes. Hourly and salary.";
$metaKeywords    = 'ohio paycheck calculator, paycheck calculator ohio, ohio paycheck tax calculator, ohio tax calculator paycheck, ohio hourly paycheck calculator, ohio salary paycheck calculator, paycheck calculator ohio weekly, ohio paycheck calculator bi weekly, calculate paycheck after taxes ohio, calculate my paycheck ohio, ohio weekly paycheck calculator, paycheck calculator ohio salary, ohio paycheck calculator hourly, ohio state paycheck calculator, tax calculator for paycheck ohio';
$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'               => 'WebApplication',
      'name'                => 'Ohio Paycheck Calculator',
      'url'                 => 'https://americacalculator.com/calculators/ohio-paycheck',
      'description'         => "Free $currentYear Ohio Paycheck Calculator. Estimate take-home pay after federal, Ohio state, Social Security, and Medicare taxes for hourly and salaried employees.",
      'applicationCategory' => 'FinanceApplication',
      'operatingSystem'     => 'All',
      'offers'              => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD'],
    ],
    [
      '@type'     => 'HowTo',
      'name'      => 'How to Use the Ohio Paycheck Calculator',
      'totalTime' => 'PT1M',
      'step'      => [
        ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Enter Your Gross Pay',      'text' => 'Enter your gross pay — the amount you earn before any taxes or deductions are taken out.'],
        ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Select Your Pay Frequency', 'text' => 'Choose weekly, biweekly, semi-monthly, monthly, or annual. Pay frequency affects how withholding is calculated.'],
        ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Choose Filing Status',      'text' => 'Select Single or Married Filing Jointly. Filing status influences federal income tax withholding amounts.'],
        ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Calculate Net Pay',         'text' => 'Click Calculate Paycheck to instantly see your estimated gross pay, federal tax, Ohio state tax, FICA deductions, and take-home pay.'],
      ],
    ],
    [
      '@type'      => 'FAQPage',
      'mainEntity' => [
        ['@type' => 'Question', 'name' => 'Is this Ohio Paycheck Calculator free?',
         'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. You can use this calculator as often as you like without creating an account or paying any fees.']],
        ['@type' => 'Question', 'name' => 'Does this calculator include Ohio state income tax?',
         'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. The calculator estimates Ohio state income tax along with federal withholding, Social Security, and Medicare. Actual withholding may vary depending on your employer and individual tax situation.']],
        ['@type' => 'Question', 'name' => 'Does Ohio have local income taxes?',
         'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. More than 600 Ohio municipalities levy local income taxes. Rates vary by city and may affect your take-home pay if your employer withholds municipal taxes.']],
        ['@type' => 'Question', 'name' => 'Can I calculate hourly wages with this calculator?',
         'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Absolutely. Enter your gross earnings for the selected pay period. Whether you are paid hourly or receive a salary, the calculator estimates your net paycheck after common payroll deductions.']],
        ['@type' => 'Question', 'name' => 'Can I calculate a salary paycheck?',
         'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. Salaried employees can estimate weekly, biweekly, semi-monthly, monthly, or annual take-home pay by selecting the appropriate pay frequency.']],
        ['@type' => 'Question', 'name' => 'Why is my paycheck lower than expected?',
         'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Several factors reduce your paycheck including federal income tax, Ohio state income tax, municipal income tax, Social Security (6.2%), Medicare (1.45%), retirement contributions, health insurance premiums, and other voluntary deductions.']],
        ['@type' => 'Question', 'name' => 'What is the Ohio state income tax rate for 2026?',
         'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Ohio uses a progressive income tax system. The highest current marginal rate is approximately 3.5% depending on income level. Lower-income taxpayers pay lower effective rates. Ohio periodically adjusts its brackets.']],
        ['@type' => 'Question', 'name' => 'What is FICA tax?',
         'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'FICA stands for Federal Insurance Contributions Act. It combines Social Security (6.2%) and Medicare (1.45%) taxes. Employers match these contributions. Unlike income tax, FICA rates are fixed percentages not based on filing status.']],
      ],
    ],
  ],
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f5f7fa;}
.op-wrap{max-width:1320px;margin:0 auto;padding:2rem 1.5rem 4rem;display:grid;grid-template-columns:220px 1fr 260px;gap:2rem;align-items:start;}
/* ── TOC ── */
.op-toc{position:sticky;top:6rem;background:#fff;border-radius:12px;border:1px solid #e8edf5;box-shadow:0 2px 12px rgba(0,0,0,.04);overflow:hidden;}
.op-toc-head{background:linear-gradient(135deg,#1d4ed8 0%,#1e40af 100%);color:#fff;padding:1rem 1.25rem;font-weight:700;font-size:.85rem;text-transform:uppercase;letter-spacing:.8px;}
.op-toc-list{list-style:none;padding:.75rem 0;margin:0;}
.op-toc-list li a{display:block;padding:.5rem 1.25rem;font-size:.84rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .18s;line-height:1.4;}
.op-toc-list li a:hover,.op-toc-list li a.op-active{color:#1d4ed8;background:#eff6ff;border-left-color:#1d4ed8;}
.op-toc-div{height:1px;background:#f1f5f9;margin:.5rem 0;}
.op-toc-rlbl{padding:.5rem 1.25rem;font-size:.78rem;font-weight:700;color:#94a3b8;text-transform:uppercase;letter-spacing:.5px;}
.op-toc-rlist{list-style:none;padding:0;margin:0 0 .75rem;}
.op-toc-rlist li a{display:block;padding:.4rem 1.25rem;font-size:.82rem;color:#64748b;text-decoration:none;transition:color .15s;}
.op-toc-rlist li a:hover{color:#1d4ed8;}
/* ── MAIN ── */
.op-main{min-width:0;}
.op-hero{margin-bottom:2rem;}
.op-hero h1{font-size:2.1rem;color:#0f172a;margin:0 0 .6rem;line-height:1.25;}
.op-desc{font-size:1.05rem;color:#64748b;line-height:1.65;margin:0 0 .75rem;border-left:4px solid #1d4ed8;padding-left:1rem;}
.op-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}
.op-bc a{color:#64748b;text-decoration:none;}
/* ── CALCULATOR CARD ── */
.op-card{background:#fff;border-radius:14px;box-shadow:0 4px 24px rgba(0,0,0,.05);border:1px solid #eef2f7;margin-bottom:2.5rem;overflow:hidden;}
.op-inner{display:grid;grid-template-columns:1fr 1fr;}
.op-form-col{padding:2rem;border-right:1px solid #f0f4fa;}
.op-res-col{padding:2rem;background:linear-gradient(160deg,#eff6ff 0%,#dbeafe 100%);}
.op-field{margin-bottom:1.2rem;}
.op-field label{display:block;font-weight:600;font-size:.9rem;color:#1e293b;margin-bottom:.4rem;}
.op-field input,.op-field select{width:100%;padding:12px 15px;border:1.5px solid #d1dae8;border-radius:8px;font-size:1rem;color:#0f172a;outline:none;transition:border-color .2s,box-shadow .2s;box-sizing:border-box;background:#fff;}
.op-field input:focus,.op-field select:focus{border-color:#1d4ed8;box-shadow:0 0 0 3px rgba(29,78,216,.12);}
.op-field .op-hint{font-size:.76rem;color:#94a3b8;margin-top:.3rem;line-height:1.4;}
.op-row2{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.op-btn{width:100%;background:linear-gradient(135deg,#1d4ed8 0%,#1e40af 100%);color:#fff;padding:15px;border:none;border-radius:9px;font-size:1rem;font-weight:700;cursor:pointer;margin-top:.75rem;transition:opacity .2s,transform .15s;}
.op-btn:hover{opacity:.92;transform:translateY(-1px);}
/* ── RESULTS ── */
.op-res-head{font-size:1.15rem;font-weight:700;color:#0f172a;margin:0 0 .25rem;}
.op-res-sub{font-size:.84rem;color:#64748b;margin:0 0 1.25rem;}
.op-primary{background:linear-gradient(135deg,#1d4ed8,#1e40af);border-radius:10px;padding:1.35rem 1rem;text-align:center;box-shadow:0 6px 18px rgba(29,78,216,.22);margin-bottom:.75rem;}
.op-primary-val{display:block;font-size:2.4rem;font-weight:800;color:#fff;line-height:1;margin-bottom:.2rem;}
.op-primary-lbl{font-size:.88rem;color:rgba(255,255,255,.8);}
.op-boxes{display:grid;grid-template-columns:1fr 1fr;gap:.7rem;margin-bottom:.85rem;}
.op-box{background:#fff;border:1.5px solid #dbeafe;border-radius:10px;padding:.85rem .75rem;text-align:center;}
.op-box-val{display:block;font-size:1.15rem;font-weight:800;color:#1d4ed8;margin-bottom:.15rem;}
.op-box-lbl{font-size:.72rem;color:#64748b;font-weight:600;line-height:1.3;}
.op-breakdown{background:#fff;border:1px solid #dbeafe;border-radius:10px;padding:.9rem 1rem;margin-bottom:.75rem;}
.op-breakdown-title{font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:#94a3b8;margin-bottom:.5rem;}
.op-breakdown-row{display:flex;justify-content:space-between;align-items:center;padding:.28rem 0;border-bottom:1px solid #f8fafc;font-size:.84rem;}
.op-breakdown-row:last-child{border-bottom:none;}
.op-breakdown-lbl{color:#64748b;}
.op-breakdown-val{font-weight:700;color:#1e293b;}
.op-breakdown-row.total{border-top:2px solid #dbeafe;padding-top:.5rem;margin-top:.25rem;}
.op-breakdown-row.total .op-breakdown-lbl{font-weight:700;color:#0f172a;}
.op-breakdown-row.total .op-breakdown-val{color:#1d4ed8;font-size:1rem;}
/* ── CONTENT SECTIONS ── */
.op-section{background:#fff;border-radius:14px;border:1px solid #eef2f7;box-shadow:0 2px 12px rgba(0,0,0,.03);padding:2.25rem;margin-bottom:2rem;scroll-margin-top:6rem;}
.op-section h2{font-size:1.65rem;color:#0f172a;margin:0 0 1.25rem;padding-bottom:.75rem;border-bottom:2px solid #eff6ff;}
.op-section h3{font-size:1.18rem;color:#1e293b;margin:1.75rem 0 .7rem;}
.op-section p{color:#475569;line-height:1.75;margin-bottom:1.25rem;font-size:1rem;}
.op-section ul,.op-section ol{color:#475569;line-height:1.75;padding-left:1.5rem;margin-bottom:1.25rem;}
.op-section li{margin-bottom:.5rem;}
.op-section strong{color:#1e293b;}
.op-section a{color:#1d4ed8;font-weight:600;}
.op-table{width:100%;border-collapse:collapse;border-radius:10px;overflow:hidden;border:1px solid #e8edf5;margin-bottom:1.5rem;}
.op-table th{background:#1d4ed8;color:#fff;padding:13px 16px;text-align:left;font-size:.88rem;font-weight:600;}
.op-table td{padding:11px 16px;border-bottom:1px solid #f1f5f9;font-size:.9rem;color:#334155;}
.op-table tr:last-child td{border-bottom:none;}
.op-table tr:nth-child(even) td{background:#f8fafc;}
.op-info{background:#eff6ff;border-left:4px solid #1d4ed8;border-radius:0 8px 8px 0;padding:1rem 1.25rem;margin:1.25rem 0;font-size:.95rem;color:#1e3a8a;line-height:1.6;}
.op-tip{background:#f0fdf4;border-left:4px solid #16a34a;border-radius:0 8px 8px 0;padding:1rem 1.25rem;margin:1.25rem 0;font-size:.95rem;color:#166534;line-height:1.6;}
/* ── FAQ ── */
.op-faq-item{border-bottom:1px solid #f0f4fa;padding-bottom:1.25rem;margin-bottom:1.25rem;}
.op-faq-item:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0;}
.op-faq-q{font-size:1.02rem;font-weight:700;color:#0f172a;margin-bottom:.6rem;cursor:pointer;display:flex;justify-content:space-between;align-items:flex-start;gap:1rem;}
.op-faq-q::after{content:'+';font-size:1.3rem;color:#1d4ed8;flex-shrink:0;}
.op-faq-item.open .op-faq-q::after{content:'−';}
.op-faq-a{color:#475569;line-height:1.7;font-size:.97rem;display:none;}
.op-faq-item.open .op-faq-a{display:block;}
/* ── SIDEBAR ── */
.op-sidebar{position:sticky;top:6rem;display:flex;flex-direction:column;gap:1.25rem;}
.op-widget{background:#fff;border-radius:12px;border:1px solid #e8edf5;box-shadow:0 4px 18px rgba(0,0,0,.05);overflow:hidden;}
.op-widget-head{background:linear-gradient(135deg,#1d4ed8,#1e40af);color:#fff;padding:1rem 1.25rem;}
.op-widget-title{font-size:1rem;font-weight:700;}
.op-widget-sub{font-size:.8rem;color:rgba(255,255,255,.75);}
.op-widget-upd{font-size:.72rem;color:rgba(255,255,255,.6);margin-top:.35rem;}
.op-widget-rows{padding:.4rem 0;}
.op-widget-row{display:flex;justify-content:space-between;align-items:center;padding:.6rem 1.25rem;border-bottom:1px solid #f8fafc;transition:background .15s;}
.op-widget-row:last-child{border-bottom:none;}
.op-widget-row:hover{background:#eff6ff;}
.op-wl{font-size:.82rem;font-weight:600;color:#334155;}
.op-ws{font-size:.72rem;color:#94a3b8;}
.op-wv{font-size:.95rem;font-weight:800;color:#1d4ed8;text-align:right;}
.op-widget-foot{padding:.85rem 1.25rem;border-top:1px solid #f0f4fa;background:#f8fafc;}
.op-widget-foot p{font-size:.75rem;color:#64748b;margin:0 0 .5rem;line-height:1.3;}
.op-widget-foot a{font-size:.83rem;font-weight:700;color:#1d4ed8;text-decoration:none;display:flex;align-items:center;gap:.35rem;}
.op-widget-foot a:hover{text-decoration:underline;}
.op-quick-widget{background:#fff;border-radius:12px;border:1px solid #e8edf5;box-shadow:0 2px 12px rgba(0,0,0,.04);overflow:hidden;}
.op-quick-head{padding:.9rem 1.25rem;background:#f8fafc;border-bottom:1px solid #f0f4fa;font-size:.83rem;font-weight:700;color:#1d4ed8;text-transform:uppercase;letter-spacing:.5px;}
.op-quick-links{list-style:none;padding:.5rem 0;margin:0;}
.op-quick-links li a{display:flex;align-items:center;gap:.5rem;padding:.65rem 1.25rem;font-size:.85rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .15s;font-weight:500;}
.op-quick-links li a:hover,.op-quick-links li a.active{color:#1d4ed8;background:#eff6ff;border-left-color:#1d4ed8;}
/* ── RESPONSIVE ── */
@media(max-width:1200px){.op-wrap{grid-template-columns:200px 1fr 240px;}}
@media(max-width:1024px){.op-wrap{grid-template-columns:1fr;}.op-toc,.op-sidebar{position:static;}.op-sidebar{display:grid;grid-template-columns:1fr 1fr;}}
@media(max-width:768px){.op-wrap{padding:1rem 1rem 3rem;}.op-inner{grid-template-columns:1fr;}.op-form-col{border-right:none;border-bottom:1px solid #f0f4fa;}.op-sidebar{grid-template-columns:1fr;}.op-row2{grid-template-columns:1fr;}}
</style>

<main id="main-content">
<div class="op-wrap">

  <!-- ══ LEFT TOC ══ -->
  <aside class="op-toc">
    <div class="op-toc-head">📋 In This Article</div>
    <ul class="op-toc-list">
      <li><a href="#calculator" class="op-active">Ohio Paycheck Calculator</a></li>
      <li><a href="#how-to-use">How to Use</a></li>
      <li><a href="#how-calculated">How Paychecks Are Calculated</a></li>
      <li><a href="#ohio-tax-rate"><?php echo $currentYear; ?> Ohio Tax Rates</a></li>
      <li><a href="#pay-frequency">Pay Frequency Explained</a></li>
      <li><a href="#salary-vs-hourly">Salary vs Hourly</a></li>
      <li><a href="#deduction">Payroll Deductions</a></li>
      <li><a href="#example">Example Calculations</a></li>
      <li><a href="#why-change">Why Your Paycheck Changes</a></li>
      <li><a href="#tip">Ohio Payroll Tax Tips</a></li>
      <li><a href="#faq">FAQ</a></li>
      <li><a href="#conclusion">Conclusion</a></li>
    </ul>
    <div class="op-toc-div"></div>
    <div class="op-toc-rlbl">Related Calculators</div>
    <ul class="op-toc-rlist">
      <li><a href="<?php echo $baseUrl; ?>/ohio/overtime-calculator">Overtime Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/loan-calculators/">Loan Calculators</a></li>
      <li><a href="<?php echo $baseUrl; ?>/business/profit-margin-calculator.php">Profit Margin</a></li>
      <li><a href="<?php echo $baseUrl; ?>/business/freelance-rate-calculator.php">Freelance Rate</a></li>
    </ul>
  </aside>

  <!-- ══ MAIN ══ -->
  <div class="op-main">

    <div class="op-hero">
      <div class="op-bc">
        <a href="<?php echo $baseUrl; ?>/index.php">Home</a> ›
        <a href="<?php echo $baseUrl; ?>/calculators/">Calculators</a> ›
        Ohio Paycheck Calculator
      </div>
      <h1>Ohio Paycheck Calculator (<?php echo $currentYear; ?>)</h1>
      <p class="op-desc">
        Estimate your <strong>Ohio take-home pay</strong> after federal income tax, Ohio state income tax,
        Social Security, Medicare, and local taxes — for hourly workers and salaried employees.
        Updated for <?php echo $currentYear; ?>.
      </p>
    </div>

    <!-- ══ CALCULATOR CARD ══ -->
    <div class="op-card" id="calculator">
      <div class="op-inner">
        <div class="op-form-col">
          <h2 style="font-size:1.25rem;color:#0f172a;margin:0 0 1.5rem;font-weight:700;">Ohio Paycheck Calculator</h2>

          <div class="op-field">
            <label for="op_gros">Gross Pay ($)</label>
            <input type="number" id="op_gros" value="1500" min="1" step="0.01">
            <div class="op-hint">Your earnings before any taxes or deductions</div>
          </div>

          <div class="op-row2">
            <div class="op-field">
              <label for="op_freq">Pay Frequency</label>
              <select id="op_freq">
                <option value="weekly">Weekly (52×/yr)</option>
                <option value="biweekly" selected>Biweekly (26×/yr)</option>
                <option value="semimonthly">Semi-Monthly (24×/yr)</option>
                <option value="monthly">Monthly (12×/yr)</option>
                <option value="annual">Annual</option>
              </select>
            </div>
            <div class="op-field">
              <label for="op_statu">Filing Status</label>
              <select id="op_statu">
                <option value="single" selected>Single</option>
                <option value="married">Married Filing Jointly</option>
              </select>
            </div>
          </div>

          <div class="op-field">
            <label for="op_local">Local / Municipal Tax Rate (%)</label>
            <input type="number" id="op_local" value="2.0" min="0" max="10" step="0.1">
            <div class="op-hint">Columbus 2.5% · Cleveland 2.0% · Cincinnati 1.8% · Enter 0 if none</div>
          </div>

          <div class="op-field">
            <label for="op_pretax">Pre-Tax Deductions (401k, HSA, etc. $)</label>
            <input type="number" id="op_pretax" value="0" min="0" step="1">
            <div class="op-hint">Per-paycheck retirement / benefit deductions (reduces taxable income)</div>
          </div>

          <button class="op-btn" id="op-calc-btn">⚡ Calculate My Ohio Paycheck</button>
        </div>

        <!-- RESULTS -->
        <div class="op-res-col">
          <h3 class="op-res-head">Your Estimated Paycheck</h3>
          <p class="op-res-sub" id="op-res-sub">Adjust inputs and click Calculate</p>

          <div class="op-primary">
            <span class="op-primary-val" id="op-net">$0.00</span>
            <span class="op-primary-lbl">Estimated Take-Home Pay</span>
          </div>

          <div class="op-boxe">
            <div class="op-box"><span class="op-box-val" id="op-gross-out">$0.00</span><span class="op-box-lbl">Gross Pay</span></div>
            <div class="op-box"><span class="op-box-val" id="op-total-ded">$0.00</span><span class="op-box-lbl">Total Deductions</span></div>
            <div class="op-box"><span class="op-box-val" id="op-eff-rate">0%</span><span class="op-box-lbl">Effective Tax Rate</span></div>
            <div class="op-box"><span class="op-box-val" id="op-annual-net">$0</span><span class="op-box-lbl">Est. Annual Net</span></div>
          </div>

          <div class="op-breakdown">
            <div class="op-breakdown-title">Deduction Breakdown</div>
            <div class="op-breakdown-row"><span class="op-breakdown-lbl">Federal Income Tax</span><span class="op-breakdown-val" id="op-fed">$0.00</span></div>
            <div class="op-breakdown-row"><span class="op-breakdown-lbl">Ohio State Tax</span><span class="op-breakdown-val" id="op-state">$0.00</span></div>
            <div class="op-breakdown-row"><span class="op-breakdown-lbl">Municipal / Local Tax</span><span class="op-breakdown-val" id="op-local-out">$0.00</span></div>
            <div class="op-breakdown-row"><span class="op-breakdown-lbl">Social Security (6.2%)</span><span class="op-breakdown-val" id="op-s">$0.00</span></div>
            <div class="op-breakdown-row"><span class="op-breakdown-lbl">Medicare (1.45%)</span><span class="op-breakdown-val" id="op-med">$0.00</span></div>
            <div class="op-breakdown-row"><span class="op-breakdown-lbl">Pre-Tax Deductions</span><span class="op-breakdown-val" id="op-pretax-out">$0.00</span></div>
            <div class="op-breakdown-row total"><span class="op-breakdown-lbl">Estimated Take-Home Pay</span><span class="op-breakdown-val" id="op-net2">$0.00</span></div>
          </div>

          <p style="font-size:.74rem;color:#64748b;margin-top:.5rem;">*Estimate only. Actual withholding depends on W-4 elections, employer payroll settings, exact brackets, and additional deductions. Consult a tax professional for precise figures.</p>
        </div>
      </div>
    </div><!-- /op-card -->

    <!-- ══ HOW TO USE ══ -->
    <section class="op-section" id="how-to-use">
      <h2>How to Use This Calculator</h2>
      <p>Using this calculator is simple and takes less than a minute. Understanding your inputs ensures the most accurate estimate of your Ohio take-home pay.</p>

      <h3>Enter Your Gross Pay</h3>
      <p>Start by entering your <strong>gross pay</strong> — your earnings before any taxes or deductions are taken out. This can be your hourly wages multiplied by hours worked, your salary for a specific pay period, or another form of taxable compensation. Accurate gross pay is the foundation of a reliable paycheck estimate, so enter the correct amount before moving on.</p>

      <h3>Select Your Pay Frequency</h3>
      <p>Choose how often you are paid: <strong>weekly, biweekly, semi-monthly, monthly, or annual</strong>. Your pay frequency affects how taxes are withheld because payroll systems calculate withholding differently depending on how often you're paid. Choosing the correct schedule ensures your estimated deductions closely match your actual paycheck.</p>

      <h3>Choose Filing Status</h3>
      <p>Select your <strong>federal filing status</strong> — Single or Married Filing Jointly. Your filing status influences federal income tax withholding and can significantly impact your net pay. Married filers generally have lower withholding than single filers at the same income level.</p>

      <h3>Calculate Net Pay</h3>
      <p>Once all required information is entered, click <strong>Calculate My Ohio Paycheck</strong> to instantly view your estimated gross pay, federal tax, Ohio state tax, local tax, Social Security, Medicare, and estimated take-home pay. The results provide a clear breakdown of each deduction, making it easy to understand exactly how your paycheck is calculated.</p>

      <div class="op-info">
        💡 <strong>Optional inputs:</strong> Enter your local municipal tax rate (Columbus is 2.5%, Cleveland 2.0%) and any per-paycheck pre-tax deductions like 401(k) contributions or HSA deposits. These reduce your taxable income and increase your take-home pay estimate accuracy.
      </div>
    </section>

    <!-- ══ HOW CALCULATED ══ -->
    <section class="op-section" id="how-calculated">
      <h2>How Ohio Paychecks Are Calculated</h2>
      <p>When you receive your paycheck in Ohio, the amount deposited into your bank account is almost always lower than your gross earnings. Employers are legally required to withhold several federal, state, and local taxes before issuing payment. The final amount — your <strong>net pay</strong> or <strong>take-home pay</strong> — depends on your earnings, filing status, pay frequency, retirement contributions, pre-tax benefits, and where you live within Ohio.</p>
      <p>The calculator estimates take-home pay by calculating the most common payroll deductions that apply to Ohio employees. It begins with gross wages, then subtracts federal income tax, Ohio state income tax, Social Security tax, Medicare tax, and any local municipal income taxes. If your employer also deducts health insurance premiums, retirement contributions, HSA contributions, or FSA deductions, your actual paycheck may differ slightly.</p>

      <h3>Federal Income Tax</h3>
      <p>Federal income tax is one of the largest deductions from most Ohio paychecks. Unlike Social Security and Medicare taxes, federal income tax is <strong>progressive</strong> — the percentage increases as your taxable income rises. Employers determine how much to withhold using IRS tax tables, your Form W-4 information, filing status, and paycheck frequency.</p>
      <p>When you complete a W-4, you provide information about your filing status, dependents, and any additional withholding preferences. This allows your employer to estimate your annual tax liability and spread withholdings evenly across each paycheck. If too much is withheld, you may receive a refund. If too little is withheld, you could owe taxes at year end.</p>

      <h3>Ohio State Income Tax</h3>
      <p>Ohio has a <strong>progressive state income tax system</strong>, meaning higher taxable incomes are subject to higher rates. Unlike states with a flat income tax, Ohio applies different tax brackets depending on taxable income. Your employer calculates Ohio withholding using state tax tables and the information you provide on your Ohio withholding certificate.</p>
      <p>For most employees, Ohio state income tax represents a smaller portion of payroll deductions than federal income tax or FICA taxes. However, it still has a noticeable effect on take-home pay, particularly for higher-income earners.</p>

      <h3>Ohio Local Taxes</h3>
      <p>One feature that makes Ohio different from many other states is its extensive system of <strong>municipal income taxes</strong>. More than <strong>600 cities and villages</strong> across Ohio impose local income taxes on wages earned by residents or by individuals working within those municipalities. These taxes are separate from state income tax and are generally withheld directly from employee paychecks.</p>
      <p>Local tax rates vary significantly. Some municipalities charge nothing; others exceed two percent. In many cases, residents receive credits if they work in another municipality that also levies a local income tax.</p>

      <h3>Social Security Tax</h3>
      <p>Social Security tax helps fund retirement, disability, and survivor benefits. The employee rate is <strong>6.2%</strong> of eligible wages, with employers contributing a matching <strong>6.2%</strong> — totaling 12.4% combined. An annual wage base limit caps the earnings subject to Social Security withholding each year.</p>

      <h3>Medicare Tax</h3>
      <p>Medicare tax finances the federal health insurance program for individuals aged 65 and older. The employee rate is <strong>1.45%</strong> of all eligible wages, with employers contributing another 1.45%. Unlike Social Security, Medicare has no annual wage cap. Higher-income earners may also face an Additional Medicare Tax of 0.9% under federal law once certain income thresholds are exceeded.</p>

      <table class="op-table">
        <thead><tr><th>Deduction</th><th>Applies To</th><th>Employee Rate</th><th>Purpose</th></tr></thead>
        <tbody>
          <tr><td><strong>Federal Income Tax</strong></td><td>Most Employees</td><td>Varies (progressive)</td><td>Federal Government</td></tr>
          <tr><td><strong>Ohio State Income Tax</strong></td><td>Ohio Employees</td><td>Progressive (~0–3.5%)</td><td>State Government</td></tr>
          <tr><td><strong>Municipal Income Tax</strong></td><td>Some Cities</td><td>Varies (0–3%+)</td><td>Local Government</td></tr>
          <tr><td><strong>Social Security</strong></td><td>Most Employees</td><td>6.2%</td><td>Retirement &amp; Disability</td></tr>
          <tr><td><strong>Medicare</strong></td><td>Most Employees</td><td>1.45%</td><td>Federal Healthcare</td></tr>
        </tbody>
      </table>
    </section>

    <!-- ══ OHIO TAX RATES ══ -->
    <section class="op-section" id="ohio-tax-rate">
      <h2>Ohio Income Tax Rates (<?php echo $currentYear; ?>)</h2>
      <p>One of the biggest questions employees have when calculating their paycheck is: <em>"How much Ohio state income tax will be deducted?"</em> Unlike states that use a flat tax, Ohio applies a <strong>progressive income tax structure</strong>. As your income increases, portions of your earnings fall into higher brackets, while lower portions continue to be taxed at lower rates.</p>
      <p>Your employer doesn't simply deduct the top rate from every paycheck. Payroll systems use state withholding tables to estimate your annual tax liability based on wages, filing status, and payroll frequency. That's why your paycheck deductions may not perfectly match your final tax return — credits, deductions, retirement contributions, and other adjustments can shift your actual liability at year end.</p>

      <table class="op-table">
        <thead><tr><th>Tax Component</th><th>Details</th></tr></thead>
        <tbody>
          <tr><td><strong>State Tax System</strong></td><td>Progressive</td></tr>
          <tr><td><strong>Lowest Rate</strong></td><td>0% (lower income brackets)</td></tr>
          <tr><td><strong>Highest Current Rate</strong></td><td>~3.5% (higher income brackets)</td></tr>
          <tr><td><strong>Local Municipal Tax</strong></td><td>May apply depending on city</td></tr>
          <tr><td><strong>Statewide Flat Tax</strong></td><td>No</td></tr>
          <tr><td><strong>Payroll Withholding</strong></td><td>Required for most employees</td></tr>
        </tbody>
      </table>

      <div class="op-tip">
        🏙️ <strong>Tip:</strong> If you live or work in cities such as <strong>Columbus (2.5%), Cleveland (2.0%), Cincinnati (1.8%), Toledo (2.25%), Akron (2.5%), or Dayton (2.25%)</strong>, your paycheck will also include municipal income tax deductions on top of Ohio state income tax.
      </div>
    </section>

    <!-- ══ PAY FREQUENCY ══ -->
    <section class="op-section" id="pay-frequency">
      <h2>Pay Frequency Explained</h2>
      <p>Your pay frequency determines how often you receive a paycheck and directly affects how payroll taxes are calculated. The same annual salary produces different per-paycheck withholding depending on whether you're paid weekly, biweekly, semi-monthly, or monthly.</p>

      <h3>Weekly Paycheck Calculator</h3>
      <p>Many hourly employees, healthcare workers, retail staff, and contractors in Ohio are paid <strong>weekly</strong>. Weekly payroll provides more frequent income but results in smaller individual paychecks. Each weekly check includes federal withholding, Ohio state tax, Social Security, Medicare, and any applicable local taxes. Employees paid weekly often use this calculator to determine how much they can allocate toward bills or savings before payday.</p>

      <h3>Biweekly Paycheck Calculator</h3>
      <p>The <strong>biweekly pay schedule</strong> is the most common payroll frequency in the United States. Employees are paid every two weeks, resulting in <strong>26 paychecks each year</strong>. Many people prefer biweekly pay because it occasionally produces <strong>three paychecks in certain months</strong>, making it easier to pay down debt, increase retirement contributions, or build emergency savings.</p>

      <h3>Semi-Monthly Paycheck Calculator</h3>
      <p>Employees paid semi-monthly receive <strong>24 paychecks per year</strong>, usually on fixed calendar dates such as the 15th and last day of each month. Because the number of annual pay periods differs from biweekly, each semi-monthly paycheck is slightly larger. Tax withholding is also calculated differently, which is why it's important to select the correct frequency when estimating your pay.</p>

      <h3>Monthly Paycheck Calculator</h3>
      <p>Some executives, consultants, nonprofit employees, and small businesses issue payroll only <strong>once each month</strong>. Monthly paychecks are larger because they include a full month's wages in a single payment, so withholding amounts may appear significantly higher than weekly or biweekly checks. Understanding monthly payroll deductions helps with planning rent, mortgage payments, and recurring household expenses.</p>

      <table class="op-table">
        <thead><tr><th>Pay Frequency</th><th>Paychecks/Year</th><th>Best For</th></tr></thead>
        <tbody>
          <tr><td><strong>Weekly</strong></td><td>52</td><td>Hourly workers, retail, healthcare</td></tr>
          <tr><td><strong>Biweekly</strong></td><td>26</td><td>Most common — corporate, government</td></tr>
          <tr><td><strong>Semi-Monthly</strong></td><td>24</td><td>Office workers, salaried professionals</td></tr>
          <tr><td><strong>Monthly</strong></td><td>12</td><td>Executives, consultants, nonprofits</td></tr>
        </tbody>
      </table>
    </section>

    <!-- ══ SALARY VS HOURLY ══ -->
    <section class="op-section" id="salary-vs-hourly">
      <h2>Salary vs Hourly Calculator</h2>
      <p>Whether you're paid an <strong>hourly wage</strong> or a <strong>fixed annual salary</strong>, your take-home pay is still subject to the same payroll tax structure. The key difference is how gross pay is determined before deductions are calculated.</p>
      <p>If you earn <strong>$22 per hour</strong> and work <strong>40 hours per week</strong>, your gross weekly earnings are <strong>$880</strong>. Before you receive your paycheck, federal income tax, Ohio state income tax, Social Security, Medicare, and any municipal taxes are deducted. Your final take-home will be lower than your gross wages.</p>
      <p>Salaried employees receive a fixed annual compensation. A <strong>Salary Paycheck Calculator for Ohio</strong> converts your annual salary into weekly, biweekly, semi-monthly, or monthly gross pay, then estimates taxes and deductions. This makes it easy to compare job offers or evaluate the net impact of a raise before accepting a new position.</p>

      <table class="op-table">
        <thead><tr><th>Factor</th><th>Hourly Employee</th><th>Salaried Employee</th></tr></thead>
        <tbody>
          <tr><td><strong>Pay Basis</strong></td><td>Based on hours worked</td><td>Fixed annual salary</td></tr>
          <tr><td><strong>Overtime</strong></td><td>Eligible (when applicable)</td><td>Often exempt from OT rules</td></tr>
          <tr><td><strong>Income Stability</strong></td><td>May vary week to week</td><td>Generally consistent</td></tr>
          <tr><td><strong>Best Calculator Mode</strong></td><td>Enter weekly/biweekly gross</td><td>Divide annual salary by periods</td></tr>
        </tbody>
      </table>
    </section>

    <!-- ══ DEDUCTIONS ══ -->
    <section class="op-section" id="deduction">
      <h2>Payroll Deductions</h2>
      <p>Your gross salary is only the starting point. Before your employer deposits your earnings, several mandatory and voluntary deductions may be withheld. Understanding these helps you estimate your actual take-home pay and avoid confusion when reviewing your pay stub.</p>
      <p><strong>Mandatory deductions</strong> include Federal Income Tax, Ohio State Income Tax, Social Security, Medicare, and in many cases, Ohio municipal income taxes. These are required by law and automatically calculated through your employer's payroll system.</p>
      <p><strong>Voluntary deductions</strong> can further reduce your taxable income and include:</p>
      <ul>
        <li>401(k), 403(b), or 457 retirement plan contributions</li>
        <li>Health, dental, and vision insurance premiums</li>
        <li>Health Savings Accounts (HSA)</li>
        <li>Flexible Spending Accounts (FSA)</li>
        <li>Life insurance premiums</li>
        <li>Commuter benefits</li>
        <li>Union dues</li>
        <li>Wage garnishments (post-tax)</li>
      </ul>
      <p>Because many voluntary deductions are made <strong>before taxes are calculated</strong>, they reduce your taxable income and effectively increase your take-home pay compared to receiving the same amount as taxable wages.</p>

      <div class="op-info">
        💡 <strong>Pre-tax vs post-tax:</strong> Traditional 401(k) contributions and health insurance premiums are typically pre-tax, reducing your taxable income. Roth 401(k) contributions are post-tax — they don't reduce withholding now, but qualified withdrawals in retirement are tax-free.
      </div>

      <h3>How to Increase Your Ohio Take-Home Pay</h3>
      <p>While taxes are unavoidable, several legal strategies may help increase what you bring home each payday. Reviewing your <strong>Form W-4</strong> is one of the simplest steps — if your withholding is significantly higher than necessary, updating it may reduce the amount withheld. Be careful not to reduce it too much, as under-withholding can result in a tax bill at year end.</p>
      <p>Contributing to employer-sponsored retirement plans such as a <strong>401(k)</strong> or <strong>403(b)</strong> can reduce taxable income. HSA and FSA contributions provide additional tax advantages while helping you save for medical expenses. If you live in one Ohio city but work in another, reviewing how municipal tax credits apply to your situation may also reduce your local tax burden.</p>
    </section>

    <!-- ══ EXAMPLES ══ -->
    <section class="op-section" id="example">
      <h2>Example Ohio Paycheck Calculations</h2>
      <p>The examples below illustrate how different salaries produce different take-home pay estimates. These are approximate figures based on standard withholding assumptions for a single filer with no additional deductions.</p>

      <table class="op-table">
        <thead><tr><th>Gross Annual Salary</th><th>Biweekly Gross</th><th>Est. Biweekly Net*</th><th>Est. Annual Net*</th></tr></thead>
        <tbody>
          <tr><td>$35,000</td><td>$1,346</td><td>~$1,030–$1,075</td><td>~$26,800–$27,950</td></tr>
          <tr><td>$50,000</td><td>$1,923</td><td>~$1,430–$1,500</td><td>~$37,200–$38,900</td></tr>
          <tr><td>$75,000</td><td>$2,885</td><td>~$2,075–$2,175</td><td>~$53,900–$56,500</td></tr>
          <tr><td>$100,000</td><td>$3,846</td><td>~$2,680–$2,820</td><td>~$69,700–$73,300</td></tr>
          <tr><td>$150,000</td><td>$5,769</td><td>~$3,850–$4,050</td><td>~$100,100–$105,300</td></tr>
        </tbody>
      </table>
      <p style="font-size:.85rem;color:#64748b;">*Estimates for a single filer with no pre-tax deductions and 2% local tax. Actual amounts vary based on filing status, W-4 elections, local tax rate, retirement contributions, insurance, and other payroll factors.</p>

      <div class="op-info">
        📌 <strong>Example paycheck breakdown:</strong> An employee earning <strong>$1,500 biweekly</strong> (single filer, 2% local tax, no pre-tax deductions) would typically see approximately $135–$145 in federal tax, $45–$50 in Ohio state tax, $30 in local tax, $93 in Social Security, and $21.75 in Medicare — leaving an estimated <strong>$1,155–$1,175 take-home pay</strong> per paycheck.
      </div>
    </section>

    <!-- ══ WHY CHANGES ══ -->
    <section class="op-section" id="why-change">
      <h2>Why Your Paycheck Changes</h2>
      <p>Many employees compare paychecks with coworkers and wonder why amounts differ despite similar salaries. The answer usually lies in individual payroll elections and benefit choices rather than differences in tax rates alone.</p>
      <p>Several factors influence your final paycheck amount:</p>
      <ul>
        <li>Federal filing status and W-4 withholding elections</li>
        <li>Retirement contributions (401(k), 403(b), 457, etc.)</li>
        <li>Health, dental, and vision insurance premiums</li>
        <li>Health Savings Account (HSA) contributions</li>
        <li>Flexible Spending Account (FSA) deductions</li>
        <li>Municipal income tax rate (varies by Ohio city)</li>
        <li>Overtime earnings, bonuses, and commissions</li>
        <li>Additional Medicare Tax for higher earners</li>
        <li>Social Security wage base limit (stops applying above ~$168,600)</li>
        <li>Post-tax deductions (Roth contributions, garnishments)</li>
      </ul>
      <p>Even employees working for the same employer may receive different take-home pay because of these individual payroll choices. A coworker contributing 10% to their 401(k) and paying for a family health plan will take home noticeably less than a single employee making no retirement contributions — even at identical gross salaries.</p>
    </section>

    <!-- ══ TIPS ══ -->
    <section class="op-section" id="tip">
      <h2>Ohio Payroll Tax Tips</h2>

      <h3>Review Your W-4 Annually</h3>
      <p>The IRS recommends reviewing your Form W-4 whenever a major life event occurs — marriage, divorce, a new dependent, a significant raise, or a second job. Outdated withholding elections are one of the most common reasons employees either owe taxes or receive unexpectedly large refunds at year end. A tax professional or the IRS withholding estimator can help you dial in the right amount.</p>

      <h3>Understand Your Ohio Municipal Tax Obligations</h3>
      <p>If you live in one Ohio city and work in another, you may owe taxes to both municipalities. Many Ohio cities provide a credit for taxes paid to another city, but the rules vary. Check with your employer's payroll department and review your municipality's tax rules to avoid surprises. Some remote workers may owe municipal tax to their employer's city even if they work from home.</p>

      <h3>Maximize Pre-Tax Benefits</h3>
      <p>Every dollar you contribute to a traditional 401(k), 403(b), or HSA before taxes reduces your taxable income, lowering both federal and Ohio state income tax withholding. At a 22% federal tax bracket, a $200/month 401(k) contribution effectively costs you only $156 in take-home pay while saving $200 in retirement. Pre-tax health insurance premiums work the same way.</p>

      <h3>Track Overtime and Bonus Withholding</h3>
      <p>Overtime pay and bonuses are taxed as ordinary income, but payroll software often applies a higher withholding rate to supplemental wages like bonuses. If your bonus paycheck looks heavily taxed, it doesn't necessarily mean you owe more tax overall — you may receive a refund when you file if total withholding for the year exceeds your actual liability.</p>

      <h3>Use This Calculator Year-Round</h3>
      <p>Revisiting your paycheck estimate after any income change, new benefit election, or tax law update helps you stay on top of your finances. Consistent use of a paycheck calculator ensures that withholding surprises at tax time are rare rather than routine.</p>
    </section>

    <!-- ══ FAQ ══ -->
    <section class="op-section" id="faq">
      <h2>Frequently Asked Questions</h2>

      <div class="op-faq-item open">
        <div class="op-faq-q">Is this Ohio Paycheck Calculator free?</div>
        <div class="op-faq-a">Yes. You can use this calculator as often as you like without creating an account or paying any fees. No login is required.</div>
      </div>

      <div class="op-faq-item">
        <div class="op-faq-q">Does this calculator include Ohio state income tax?</div>
        <div class="op-faq-a">Yes. The calculator estimates Ohio state income tax along with federal withholding, Social Security, and Medicare. Actual withholding may vary depending on your employer's payroll system and your individual tax situation.</div>
      </div>

      <div class="op-faq-item">
        <div class="op-faq-q">Does Ohio have local income taxes?</div>
        <div class="op-faq-a">Yes. More than 600 Ohio municipalities levy local income taxes. Rates vary significantly by city — Columbus charges 2.5%, Cleveland 2.0%, Cincinnati 1.8%, Akron 2.5%, and Toledo 2.25%. Enter your city's rate in the Local Tax Rate field to get an accurate estimate. Some areas charge 0%.</div>
      </div>

      <div class="op-faq-item">
        <div class="op-faq-q">Can I calculate hourly wages with this calculator?</div>
        <div class="op-faq-a">Absolutely. Simply multiply your hourly rate by your hours per pay period to get gross pay, then enter that amount. For example, $22/hour × 80 hours biweekly = $1,760 gross. Enter $1,760 and select Biweekly to see your estimated net pay.</div>
      </div>

      <div class="op-faq-item">
        <div class="op-faq-q">Can I calculate a salary paycheck?</div>
        <div class="op-faq-a">Yes. Salaried employees can estimate weekly, biweekly, semi-monthly, monthly, or annual take-home pay. Divide your annual salary by the number of pay periods (26 for biweekly), enter that as gross pay, and select the matching pay frequency.</div>
      </div>

      <div class="op-faq-item">
        <div class="op-faq-q">Why is my paycheck lower than expected?</div>
        <div class="op-faq-a">Multiple deductions reduce your gross pay: federal income tax, Ohio state income tax, local municipal income tax, Social Security (6.2%), Medicare (1.45%), and any voluntary deductions like retirement contributions or health insurance premiums. Together these can reduce gross pay by 20–35% or more depending on income and elections.</div>
      </div>

      <div class="op-faq-item">
        <div class="op-faq-q">What is FICA and how does it affect my Ohio paycheck?</div>
        <div class="op-faq-a">FICA (Federal Insurance Contributions Act) combines Social Security (6.2%) and Medicare (1.45%) taxes — totaling 7.65% of your gross wages. Your employer pays a matching 7.65%. These are separate from income taxes and apply regardless of filing status. For a $2,000 biweekly paycheck, FICA alone deducts $153.</div>
      </div>

      <div class="op-faq-item">
        <div class="op-faq-q">Is this calculator suitable for employers and HR professionals?</div>
        <div class="op-faq-a">Yes. Employers, payroll administrators, and HR professionals can use it as a quick estimate before processing payroll. However, official payroll software (ADP, Paychex, Gusto, QuickBooks Payroll) should always be used for final legally required calculations.</div>
      </div>
    </section>

    <!-- ══ CONCLUSION ══ -->
    <section class="op-section" id="conclusion">
      <h2>Conclusion</h2>
      <p>Understanding your paycheck is one of the most important parts of managing your personal finances. Whether you're paid weekly, biweekly, semi-monthly, monthly, or annually, knowing how federal taxes, Ohio state income tax, municipal taxes, Social Security, and Medicare affect your earnings allows you to budget more accurately and plan for future expenses.</p>
      <p>Our <strong>Ohio Paycheck Calculator</strong> is designed to make that process simple. Instead of manually calculating payroll deductions or navigating complex tax tables, you can quickly estimate your take-home pay in just a few steps. From hourly workers and salaried professionals to employers and payroll managers, this calculator provides a fast, user-friendly way to understand payroll deductions and estimate net income with confidence.</p>
      <p>As tax laws and withholding rules evolve, using an up-to-date paycheck calculator helps ensure your estimates remain as accurate as possible. Whether you're evaluating a new job offer, estimating overtime, planning your monthly budget, or simply checking your paycheck, this tool offers a practical starting point for making informed financial decisions.</p>

      <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:1rem;margin-top:1.5rem;">
        <a href="<?php echo $baseUrl; ?>/ohio/overtime-calculator" style="display:block;background:#eff6ff;border:1.5px solid #bfdbfe;border-radius:10px;padding:1rem;text-decoration:none;color:#1e3a8a;font-weight:600;font-size:.9rem;text-align:center;">⏱️ Overtime Pay Calculator</a>
        <a href="<?php echo $baseUrl; ?>/loan-calculators/" style="display:block;background:#eff6ff;border:1.5px solid #bfdbfe;border-radius:10px;padding:1rem;text-decoration:none;color:#1e3a8a;font-weight:600;font-size:.9rem;text-align:center;">🏦 Loan Calculators</a>
        <a href="<?php echo $baseUrl; ?>/business/profit-margin-calculator.php" style="display:block;background:#eff6ff;border:1.5px solid #bfdbfe;border-radius:10px;padding:1rem;text-decoration:none;color:#1e3a8a;font-weight:600;font-size:.9rem;text-align:center;">📈 Profit Margin Calculator</a>
        <a href="<?php echo $baseUrl; ?>/business/freelance-rate-calculator.php" style="display:block;background:#eff6ff;border:1.5px solid #bfdbfe;border-radius:10px;padding:1rem;text-decoration:none;color:#1e3a8a;font-weight:600;font-size:.9rem;text-align:center;">💼 Freelance Rate Calculator</a>
      </div>
    </section>

  </div><!-- /op-main -->

  <!-- ══ RIGHT SIDEBAR ══ -->
  <aside class="op-sidebar">
    <div class="op-widget">
      <div class="op-widget-head">
        <div style="display:flex;align-items:center;gap:.5rem;margin-bottom:.25rem;">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          <span class="op-widget-title"><?php echo $currentYear; ?> Ohio Tax Rates</span>
        </div>
        <div class="op-widget-sub">Key payroll deduction rates</div>
        <div class="op-widget-upd">Updated: <?php echo date('M j, Y'); ?></div>
      </div>
      <div class="op-widget-row">
        <div class="op-widget-row"><div><div class="op-wl">Social Security</div><div class="op-w">Employee portion (FICA)</div></div><div class="op-wv">6.20%</div></div>
        <div class="op-widget-row"><div><div class="op-wl">Medicare</div><div class="op-w">Employee portion (FICA)</div></div><div class="op-wv">1.45%</div></div>
        <div class="op-widget-row" style="background:#eff6ff;"><div><div class="op-wl">Ohio State Tax</div><div class="op-w">Progressive (highest bracket)</div></div><div class="op-wv">~3.5%</div></div>
        <div class="op-widget-row"><div><div class="op-wl">Columbus Local Tax</div><div class="op-w">Municipal income tax</div></div><div class="op-wv">2.50%</div></div>
        <div class="op-widget-row"><div><div class="op-wl">Cleveland Local Tax</div><div class="op-w">Municipal income tax</div></div><div class="op-wv">2.00%</div></div>
        <div class="op-widget-row"><div><div class="op-wl">Cincinnati Local Tax</div><div class="op-w">Municipal income tax</div></div><div class="op-wv">1.80%</div></div>
        <div class="op-widget-row"><div><div class="op-wl">Akron / Toledo Local</div><div class="op-w">Municipal income tax</div></div><div class="op-wv">2.25%</div></div>
      </div>
      <div class="op-widget-foot">
        <p>Rates may change. Always verify current rates with the Ohio Department of Taxation and your city's tax office.</p>
        <a href="https://tax.ohio.gov" target="_blank" rel="noopener noreferrer">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
          Ohio Dept. of Taxation →
        </a>
      </div>
    </div>

    <div class="op-quick-widget">
      <div class="op-quick-head">💰 Finance Calculators</div>
      <ul class="op-quick-link">
        <li><a href="<?php echo $baseUrl; ?>/calculators/ohio-paycheck.php" class="active">💵 Ohio Paycheck Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/ohio/overtime-calculator">⏱️ Overtime Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/loan-calculators/">🏦 Loan Calculators</a></li>
        <li><a href="<?php echo $baseUrl; ?>/loan-calculators/auto-loan-calculator.php">🚗 Auto Loan Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/loan-calculators/personal-loan-calculator.php">👤 Personal Loan Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/business/profit-margin-calculator.php">📈 Profit Margin Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/business/markup-calculator.php">🏷️ Markup Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/business/freelance-rate-calculator.php">💼 Freelance Rate Calculator</a></li>
      </ul>
    </div>
  </aside>

</div><!-- /op-wrap -->
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {

  const $ = id => document.getElementById(id);
  const fmtD  = v => '$' + v.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
  const fmtI  = v => '$' + Math.round(v).toLocaleString('en-US');
  const fmtPct= v => v.toFixed(1) + '%';

  // ── Federal tax tables (2026 approximate, per-period annualised) ──
  // We annualise gross, compute annual tax, then divide back to per-period.
  function federalTax(annualTaxable, status) {
    // 2026 brackets (approximate; IRS adjusts annually for inflation)
    const brackets = status === 'married'
      ? [[0,23200,0.10],[23200,94300,0.12],[94300,201050,0.22],[201050,383900,0.24],[383900,487450,0.32],[487450,731200,0.35],[731200,Infinity,0.37]]
      : [[0,11600,0.10],[11600,47150,0.12],[47150,100525,0.22],[100525,191950,0.24],[191950,243725,0.32],[243725,609350,0.35],[609350,Infinity,0.37]];
    let tax = 0;
    for (const [low, high, rate] of brackets) {
      if (annualTaxable <= low) break;
      tax += (Math.min(annualTaxable, high) - low) * rate;
    }
    return tax;
  }

  // ── Ohio state tax (2026 brackets, approximate) ──
  function ohioTax(annualTaxable) {
    // Ohio periodically revises; these reflect recent rates
    if (annualTaxable <= 26050)  return 0;
    if (annualTaxable <= 46100)  return (annualTaxable - 26050) * 0.02765;
    if (annualTaxable <= 92150)  return 554.28 + (annualTaxable - 46100) * 0.03226;
    if (annualTaxable <= 115300) return 2040.90 + (annualTaxable - 92150) * 0.03688;
    return 2895.12 + (annualTaxable - 115300) * 0.03990;
  }

  function periodsPerYear(freq) {
    return {weekly:52,biweekly:26,semimonthly:24,monthly:12,annual:1}[freq] || 26;
  }

  function calculate() {
    const gross    = parseFloat($('op_gross').value)   || 0;
    const freq     = $('op_freq').value;
    const status   = $('op_status').value;
    const localPct = parseFloat($('op_local').value)   || 0;
    const pretax   = parseFloat($('op_pretax').value)  || 0;
    if (gross <= 0) return;

    const periods      = periodsPerYear(freq);
    const annualGross  = gross * periods;
    const annualPretax = pretax * periods;
    const annualTaxable= Math.max(0, annualGross - annualPretax);

    // FICA — Social Security wage base ~$168,600 for 2026
    const SS_WAGE_BASE = 168600;
    const annualSS  = Math.min(annualGross, SS_WAGE_BASE) * 0.062;
    const annualMed = annualGross * 0.0145;

    const annualFed    = federalTax(annualTaxable, status);
    const annualState  = ohioTax(annualTaxable);
    const annualLocal  = annualGross * (localPct / 100);

    const annualTotalDed = annualFed + annualState + annualLocal + annualSS + annualMed + annualPretax;
    const annualNet      = annualGross - annualTotalDed;

    // Per-period
    const perFed    = annualFed    / periods;
    const perState  = annualState  / periods;
    const perLocal  = annualLocal  / periods;
    const perSS     = annualSS     / periods;
    const perMed    = annualMed    / periods;
    const perPretax = pretax;
    const perTotalDed = perFed + perState + perLocal + perSS + perMed + perPretax;
    const perNet    = gross - perTotalDed;

    const effRate   = annualGross > 0 ? ((annualFed + annualState + annualLocal + annualSS + annualMed) / annualGross) * 100 : 0;

    // Update DOM
    $('op-net').textContent       = fmtD(perNet);
    $('op-net2').textContent      = fmtD(perNet);
    $('op-gross-out').textContent = fmtD(gross);
    $('op-total-ded').textContent = fmtD(perTotalDed);
    $('op-eff-rate').textContent  = fmtPct(effRate);
    $('op-annual-net').textContent= fmtI(annualNet);
    $('op-fed').textContent       = fmtD(perFed);
    $('op-state').textContent     = fmtD(perState);
    $('op-local-out').textContent = fmtD(perLocal);
    $('op-ss').textContent        = fmtD(perSS);
    $('op-med').textContent       = fmtD(perMed);
    $('op-pretax-out').textContent= fmtD(perPretax);

    const freqLabel = {'weekly':'Weekly','biweekly':'Biweekly','semimonthly':'Semi-Monthly','monthly':'Monthly','annual':'Annual'}[freq];
    $('op-res-sub').textContent = freqLabel + ' gross ' + fmtD(gross) + ' · ' + periods + ' periods/yr';
  }

  // Auto-calculate on input
  ['op_gross','op_freq','op_status','op_local','op_pretax'].forEach(id => {
    const el = $(id);
    if (el) { el.addEventListener('input', calculate); el.addEventListener('change', calculate); }
  });
  $('op-calc-btn').addEventListener('click', calculate);
  calculate(); // initial

  // ── TOC scroll spy ──
  const tocLinks = document.querySelectorAll('.op-toc-list a');
  const sections = [];
  tocLinks.forEach(link => {
    const id = link.getAttribute('href').replace('#','');
    const sec = document.getElementById(id);
    if (sec) sections.push({ link, sec });
  });
  function updateTOC() {
    const y = window.scrollY + 130;
    let active = sections[0];
    sections.forEach(s => { if(s.sec && s.sec.getBoundingClientRect().top + window.scrollY <= y) active = s; });
    tocLinks.forEach(l => l.classList.remove('op-active'));
    if (active) active.link.classList.add('op-active');
  }
  window.addEventListener('scroll', updateTOC, {passive:true});
  updateTOC();

  // ── FAQ accordion ──
  document.querySelectorAll('.op-faq-q').forEach(q => {
    q.addEventListener('click', function () {
      const item    = this.closest('.op-faq-item');
      const wasOpen = item.classList.contains('open');
      document.querySelectorAll('.op-faq-item').forEach(i => i.classList.remove('open'));
      if (!wasOpen) item.classList.add('open');
    });
  });
});
</script>

<?php require_once '../includes/footer.php'; ?>
