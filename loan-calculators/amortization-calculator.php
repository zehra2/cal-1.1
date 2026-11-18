<?php
$currentYear = date('Y');
$pageTitle       = "Amortization Calculator ($currentYear) | Full Payment Schedule + Extra Payment Savings";
$metaDescription = "Free amortization calculator $currentYear. See full month-by-month payment schedule, total interest paid, and how extra payments cut years off your loan and save thousands in interest.";
$metaKeywords    = 'amortization calculator, loan amortization schedule, mortgage amortization, extra payment calculator, payoff calculator, amortization table';
$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'WebApplication',
   'name'=>'Amortization Calculator',
   'url'=>'https://americacalculator.com/loan-calculators/amortization-calculator',
   'description'=>'Calculate your full loan amortization schedule with month-by-month principal and interest breakdown. See how extra payments reduce your payoff date and total interest paid.',
   'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All',
   'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Loan Calculators','item'=>'https://americacalculator.com/loan-calculators/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'Amortization Calculator','item'=>'https://americacalculator.com/loan-calculators/amortization-calculator'],
  ]],
  ['@type'=>'HowTo',
   'name'=>'How to Use the Amortization Calculator',
   'description'=>'Generate your full loan amortization schedule in 4 steps.',
   'totalTime'=>'PT2M',
   'step'=>[
     ['@type'=>'HowToStep','position'=>1,'name'=>'Enter loan amount','text'=>'Enter the loan amount (principal). For a mortgage, this is the purchase price minus your down payment. For a refinance, use the current payoff balance.'],
     ['@type'=>'HowToStep','position'=>2,'name'=>'Enter interest rate and loan term','text'=>'Enter the annual interest rate (APR) and loan term in years. The calculator works for any loan type: mortgage, auto, personal, SBA, or HELOC.'],
     ['@type'=>'HowToStep','position'=>3,'name'=>'Add extra monthly payment (optional)','text'=>'Enter any extra monthly principal payment to see how it accelerates your payoff. Even $100/month extra on a 30-year mortgage can save $30,000+ in interest and cut 3-5 years off the loan.'],
     ['@type'=>'HowToStep','position'=>4,'name'=>'Review your full amortization schedule','text'=>'Click Calculate to see your monthly payment, total interest over the life of the loan, payoff date, and a complete month-by-month breakdown of principal vs interest for every payment.'],
   ]],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'What is amortization?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Amortization is the process of paying off a loan through scheduled, equal payments over time. Each payment covers both interest (calculated on the remaining balance) and principal (the actual loan reduction). Early in the loan, most of each payment goes to interest. Later, most goes to principal. This shifting ratio is called the amortization schedule.']],
    ['@type'=>'Question','name'=>'How much interest do you pay on a 30-year mortgage?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'On a $400,000 mortgage at 7.25% (30-year fixed), you will pay approximately $550,000 in total interest over the life of the loan — more than the original principal borrowed. This is why early payoff and extra payments have such dramatic effects: every extra dollar paid early reduces the balance on which future interest compounds.']],
    ['@type'=>'Question','name'=>'How much do extra payments save?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Extra payments have an outsized impact because they reduce principal, which reduces future interest calculations. On a $400,000 mortgage at 7.25% (30-year), paying an extra $200/month saves approximately $67,000 in interest and cuts 4 years and 8 months off the loan. Paying an extra $500/month saves approximately $130,000 and cuts nearly 9 years.']],
    ['@type'=>'Question','name'=>'What is the difference between amortization and principal payment?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Your total monthly mortgage payment (PITI) includes Principal, Interest, Taxes, and Insurance. The amortization schedule covers only the P+I portion — principal and interest paid to the lender. Taxes (property tax) and insurance (homeowners insurance) are separate escrow payments. Only the principal portion reduces your loan balance.']],
    ['@type'=>'Question','name'=>'Is it better to make biweekly payments?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. Making biweekly payments (half your monthly payment every two weeks) results in 26 half-payments per year — equivalent to 13 full monthly payments instead of 12. That one extra payment per year reduces a 30-year mortgage by approximately 4-5 years and saves $40,000-$60,000 in interest on a typical $350,000 loan at 7%. Check that your lender applies biweekly payments immediately to principal, not just holds them.']],
    ['@type'=>'Question','name'=>'What happens if I pay an extra lump sum on my mortgage?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Any extra lump sum payment applied to your principal immediately reduces your outstanding balance and all future interest calculations. A $10,000 lump sum payment on a $400,000 mortgage at 7.25% in year 1 saves approximately $23,000 in lifetime interest and cuts about 2 years off the loan term. Mark lump sum checks as Apply to Principal to ensure proper application.']],
    ['@type'=>'Question','name'=>'Does amortization apply to all loans?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Most installment loans amortize: mortgages, auto loans, personal loans, SBA loans, and student loans. Interest-only loans do not amortize during the interest-only period — you pay only interest, your balance does not decrease. Adjustable-rate mortgages (ARMs) amortize, but the payment amount changes when the rate adjusts. Credit cards do not amortize in the traditional sense.']],
    ['@type'=>'Question','name'=>'What is negative amortization?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Negative amortization occurs when your monthly payment is less than the interest owed, causing the unpaid interest to be added to your principal balance rather than reducing it. This is common in some payment option ARMs and older HELOC structures. It means your loan balance grows even as you make payments — a dangerous situation that can lead to being deeply underwater on your mortgage.']],
  ]],
]];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f8fafc;}
.am-wrap{max-width:1100px;margin:0 auto;padding:2rem 1.25rem 5rem;}
.am-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}.am-bc a{color:#64748b;text-decoration:none;}
.am-hero h1{font-size:1.85rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.am-hero p{font-size:.97rem;color:#64748b;line-height:1.65;margin:0 0 .5rem;border-left:3px solid #0891b2;padding-left:.9rem;}
.am-meta{font-size:.78rem;color:#94a3b8;margin-bottom:1.75rem;}
.am-card{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden;margin-bottom:1.75rem;}
.am-card-head{background:#0e7490;color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;}
.am-body{padding:1.5rem;}
.am-field{margin-bottom:1rem;}
.am-field label{display:block;font-size:.85rem;font-weight:600;color:#1e293b;margin-bottom:.35rem;}
.am-field input{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.94rem;color:#0f172a;outline:none;background:#fff;transition:border-color .2s;box-sizing:border-box;}
.am-field input:focus{border-color:#0891b2;}
.am-field .hint{font-size:.73rem;color:#94a3b8;margin-top:.25rem;}
.am-grid{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.am-grid3{display:grid;grid-template-columns:1fr 1fr 1fr;gap:1rem;}
.am-btn{width:100%;background:#0e7490;color:#fff;padding:13px;border:none;border-radius:8px;font-size:.97rem;font-weight:700;cursor:pointer;margin-top:.5rem;transition:background .2s;}
.am-btn:hover{background:#0891b2;}
.am-summary{display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));gap:.75rem;margin:1.25rem 0;}
.am-sum-box{background:#ecfeff;border:1.5px solid #a5f3fc;border-radius:9px;padding:.85rem 1rem;text-align:center;}
.am-sum-box .sv{display:block;font-size:1.2rem;font-weight:800;color:#0e7490;}
.am-sum-box .sl{font-size:.73rem;color:#64748b;font-weight:600;}
.am-sum-box.save{background:#f0fdf4;border-color:#86efac;}
.am-sum-box.save .sv{color:#059669;}
.am-section{background:#fff;border-radius:12px;border:1px solid #e2e8f0;padding:1.75rem;margin-bottom:1.5rem;}
.am-section h2{font-size:1.3rem;color:#0f172a;margin:0 0 .85rem;padding-bottom:.6rem;border-bottom:2px solid #ecfeff;}
.am-section h3{font-size:1.05rem;color:#0f172a;margin:1.25rem 0 .55rem;}
.am-section p{color:#475569;line-height:1.72;font-size:.95rem;margin-bottom:.9rem;}
.am-section a{color:#0891b2;font-weight:600;text-decoration:none;}
.am-section a:hover{text-decoration:underline;}
.am-table-wrap{max-height:420px;overflow-y:auto;border:1px solid #e2e8f0;border-radius:9px;}
.am-tbl{width:100%;border-collapse:collapse;font-size:.84rem;}
.am-tbl thead th{background:#0e7490;color:#fff;padding:9px 12px;font-weight:600;text-align:right;position:sticky;top:0;}
.am-tbl thead th:first-child{text-align:left;}
.am-tbl td{padding:7px 12px;border-bottom:1px solid #f1f5f9;text-align:right;color:#334155;}
.am-tbl td:first-child{text-align:left;font-weight:600;}
.am-tbl tr:nth-child(even) td{background:#f8fafc;}
.am-tbl tr.yr-row td{background:#ecfeff;font-weight:700;color:#0e7490;}
.am-info{background:#ecfeff;border-left:4px solid #0891b2;border-radius:0 8px 8px 0;padding:.9rem 1.1rem;margin:1rem 0;font-size:.9rem;color:#164e63;line-height:1.65;}
.am-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}
.am-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.am-faq-q{font-size:.95rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;}
.am-faq-q::after{content:'+';color:#0891b2;font-size:1.2rem;flex-shrink:0;}
.am-faq-item.open .am-faq-q::after{content:'-';}
.am-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.am-faq-item.open .am-faq-a{display:block;}
.am-related{display:grid;grid-template-columns:repeat(auto-fill,minmax(175px,1fr));gap:.75rem;margin-top:.75rem;}
.am-rel{display:block;background:#ecfeff;border:1.5px solid #a5f3fc;border-radius:8px;padding:.75rem 1rem;font-size:.85rem;font-weight:600;color:#0e7490;text-decoration:none;text-align:center;transition:background .15s;}
.am-rel:hover{background:#cffafe;}
@media(max-width:760px){.am-grid{grid-template-columns:1fr;}.am-grid3{grid-template-columns:1fr;}.am-hero h1{font-size:1.5rem;}}
</style>

<main id="main-content">
<div class="am-wrap">
  <div class="am-bc">
    <a href="/">Home</a> &rsaquo;
    <a href="/loan-calculators/">Loan Calculators</a> &rsaquo;
    Amortization Calculator
  </div>

  <div class="am-hero">
    <h1>Amortization Calculator (<?php echo $currentYear;?>)</h1>
    <p>Generate your full loan amortization schedule. See every month's principal vs interest breakdown, total interest paid, and how extra payments slash your payoff date and save thousands.</p>
    <div class="am-meta">&#9999; By AmericaCalculator Finance Team | Updated <?php echo date('F Y');?> | Works for mortgage, auto, personal, SBA, and HELOC loans</div>
  </div>

  <!-- Calculator -->
  <div class="am-card">
    <div class="am-card-head">&#128200; Loan Amortization Calculator</div>
    <div class="am-body">
      <div class="am-grid3">
        <div class="am-field"><label>Loan Amount ($)</label><input type="number" id="am-principal" value="400000" min="1000" step="1000"></div>
        <div class="am-field"><label>Annual Interest Rate (%)</label><input type="number" id="am-rate" value="7.25" min="0.1" max="30" step="0.05"></div>
        <div class="am-field"><label>Loan Term (Years)</label><input type="number" id="am-term" value="30" min="1" max="50" step="1"></div>
      </div>
      <div class="am-grid">
        <div class="am-field"><label>Extra Monthly Payment ($) <span style="font-size:.75rem;font-weight:400;color:#94a3b8;">— Optional</span></label><input type="number" id="am-extra" value="0" min="0" step="25"><div class="hint">Additional principal payment each month — see how much you save</div></div>
        <div class="am-field"><label>Start Date</label><input type="month" id="am-start" value="<?php echo date('Y-m');?>"><div class="hint">Used to show month-by-month payment dates in the schedule</div></div>
      </div>
      <button class="am-btn" onclick="calcAm()">&#9889; Generate Amortization Schedule</button>

      <div id="am-results" style="display:none;">
        <div class="am-summary" id="am-sum"></div>
        <div id="am-extra-savings" style="display:none;">
          <div class="am-info" id="am-savings-note"></div>
        </div>
        <h3 style="font-size:1rem;color:#0f172a;margin:1.5rem 0 .75rem;">Full Amortization Schedule</h3>
        <div class="am-table-wrap">
          <table class="am-tbl">
            <thead><tr><th>#</th><th>Date</th><th>Payment</th><th>Principal</th><th>Interest</th><th>Balance</th></tr></thead>
            <tbody id="am-tbody"></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Sections -->
  <div class="am-section">
    <h2>How Loan Amortization Works</h2>
    <p>When you take out an amortizing loan, your lender calculates a fixed monthly payment that will pay off the entire loan balance over the specified term. This payment consists of two components:</p>
    <ul style="color:#475569;padding-left:1.4rem;line-height:1.8;font-size:.95rem;">
      <li><strong>Interest portion:</strong> Calculated as (Annual Rate &divide; 12) &times; Remaining Balance. In month 1, nearly all your payment goes to interest.</li>
      <li><strong>Principal portion:</strong> Payment minus Interest. This reduces your balance and increases each month as the balance falls.</li>
    </ul>
    <p>On a $400,000 mortgage at 7.25% (30-year), your monthly P+I payment is $2,729. In month 1, $2,417 goes to interest and only $313 to principal. By month 360, almost the entire payment goes to principal. This is why the early years of a mortgage are so interest-heavy and why paying down principal early has such a dramatic effect.</p>

    <div class="am-info">&#128161; <strong>The Amortization Formula:</strong> Monthly Payment = P &times; [r(1+r)^n] &divide; [(1+r)^n &minus; 1] where P = principal, r = monthly rate (annual/12), n = total number of payments.</div>

    <h2>How Extra Payments Accelerate Payoff</h2>
    <p>Extra principal payments have a compounding positive effect because they reduce the balance on which future interest is calculated. Here is how different extra payment amounts affect a $400,000 mortgage at 7.25% (30-year):</p>
    <table style="width:100%;border-collapse:collapse;border:1px solid #e2e8f0;border-radius:9px;overflow:hidden;margin:1rem 0;">
      <thead><tr style="background:#0e7490;color:#fff;"><th style="padding:9px 13px;text-align:left;font-size:.84rem;">Extra Monthly Payment</th><th style="padding:9px 13px;text-align:right;font-size:.84rem;">Time Saved</th><th style="padding:9px 13px;text-align:right;font-size:.84rem;">Interest Saved</th><th style="padding:9px 13px;text-align:right;font-size:.84rem;">New Payoff</th></tr></thead>
      <tbody>
        <tr style="background:#f8fafc;"><td style="padding:9px 13px;font-weight:600;">$0 (baseline)</td><td style="padding:9px 13px;text-align:right;">—</td><td style="padding:9px 13px;text-align:right;">—</td><td style="padding:9px 13px;text-align:right;">30 years</td></tr>
        <tr><td style="padding:9px 13px;font-weight:600;">$100/month</td><td style="padding:9px 13px;text-align:right;color:#059669;">&#8722;2 yr 11 mo</td><td style="padding:9px 13px;text-align:right;color:#059669;">$44,000 saved</td><td style="padding:9px 13px;text-align:right;">27 yr 1 mo</td></tr>
        <tr style="background:#f8fafc;"><td style="padding:9px 13px;font-weight:600;">$200/month</td><td style="padding:9px 13px;text-align:right;color:#059669;">&#8722;4 yr 8 mo</td><td style="padding:9px 13px;text-align:right;color:#059669;">$78,000 saved</td><td style="padding:9px 13px;text-align:right;">25 yr 4 mo</td></tr>
        <tr><td style="padding:9px 13px;font-weight:600;">$500/month</td><td style="padding:9px 13px;text-align:right;color:#059669;">&#8722;9 yr 2 mo</td><td style="padding:9px 13px;text-align:right;color:#059669;">$148,000 saved</td><td style="padding:9px 13px;text-align:right;">20 yr 10 mo</td></tr>
        <tr style="background:#f8fafc;"><td style="padding:9px 13px;font-weight:600;">$1,000/month</td><td style="padding:9px 13px;text-align:right;color:#059669;">&#8722;14 yr 5 mo</td><td style="padding:9px 13px;text-align:right;color:#059669;">$216,000 saved</td><td style="padding:9px 13px;text-align:right;">15 yr 7 mo</td></tr>
      </tbody>
    </table>

    <h2>Biweekly Payments: The Simple Payoff Hack</h2>
    <p>Making biweekly payments instead of monthly is one of the simplest ways to accelerate payoff with no extra burden. Here is how it works:</p>
    <ul style="color:#475569;padding-left:1.4rem;line-height:1.8;font-size:.95rem;">
      <li>Instead of 12 full monthly payments per year, make 26 half-payments (biweekly)</li>
      <li>26 &times; (half-payment) = 13 full payments per year &mdash; one extra payment annually</li>
      <li>On a $350,000 mortgage at 7.25%, this cuts the term by approximately 4&ndash;5 years</li>
      <li>Total interest savings: approximately $50,000&ndash;$60,000 over the life of the loan</li>
      <li><strong>Check with your lender:</strong> Ensure they apply biweekly payments immediately to reduce principal, rather than holding them until month-end</li>
    </ul>
  </div>

  <!-- FAQ -->
  <div class="am-section" id="faq">
    <h2>Frequently Asked Questions</h2>
    <div class="am-faq-item"><div class="am-faq-q" onclick="this.parentElement.classList.toggle('open')">What is amortization?</div><div class="am-faq-a">Amortization is the process of paying off a loan through scheduled, equal payments over time. Each payment covers both interest (calculated on the remaining balance) and principal (the actual loan reduction). Early in the loan, most of each payment goes to interest. Later, most goes to principal.</div></div>
    <div class="am-faq-item"><div class="am-faq-q" onclick="this.parentElement.classList.toggle('open')">How much interest do you pay on a 30-year mortgage?</div><div class="am-faq-a">On a $400,000 mortgage at 7.25% (30-year fixed), you will pay approximately $583,000 in total interest over the life of the loan &mdash; more than the original principal. This is why early payoff and extra payments have such dramatic effects.</div></div>
    <div class="am-faq-item"><div class="am-faq-q" onclick="this.parentElement.classList.toggle('open')">How much do extra payments save?</div><div class="am-faq-a">On a $400,000 mortgage at 7.25% (30-year), paying an extra $200/month saves approximately $78,000 in interest and cuts 4 years and 8 months off the loan. Paying an extra $500/month saves approximately $148,000 and cuts nearly 9 years.</div></div>
    <div class="am-faq-item"><div class="am-faq-q" onclick="this.parentElement.classList.toggle('open')">Is biweekly better than monthly payments?</div><div class="am-faq-a">Yes. Making biweekly payments results in 26 half-payments per year, equivalent to 13 full monthly payments instead of 12. That one extra payment per year reduces a 30-year mortgage by approximately 4&ndash;5 years and saves $40,000&ndash;$60,000 in interest on a typical $350,000 loan at 7%.</div></div>
    <div class="am-faq-item"><div class="am-faq-q" onclick="this.parentElement.classList.toggle('open')">What is negative amortization?</div><div class="am-faq-a">Negative amortization occurs when your monthly payment is less than the interest owed, causing unpaid interest to be added to your principal balance rather than reducing it. Your loan balance grows even as you make payments. This is common in some payment option ARMs and can lead to being deeply underwater on your mortgage.</div></div>
    <div class="am-faq-item"><div class="am-faq-q" onclick="this.parentElement.classList.toggle('open')">Does amortization apply to all loans?</div><div class="am-faq-a">Most installment loans amortize: mortgages, auto loans, personal loans, SBA loans, and student loans. Interest-only loans do not amortize during the interest-only period. Credit cards do not amortize in the traditional sense &mdash; only the minimum payment is required, not a fixed payoff schedule.</div></div>
  </div>

  <!-- Related -->
  <div class="am-section">
    <h2>Related Loan Calculators</h2>
    <div class="am-related">
      <a href="/loan-calculators/sba-loan-calculator" class="am-rel">&#127968; SBA Loan Calculator</a>
      <a href="/loan-calculators/mortgage-payoff-calculator" class="am-rel">&#9889; Mortgage Payoff Calculator</a>
      <a href="/loan-calculators/auto-loan-calculator" class="am-rel">&#128663; Auto Loan Calculator</a>
      <a href="/loan-calculators/personal-loan-calculator" class="am-rel">&#128181; Personal Loan Calculator</a>
      <a href="/loan-calculators/heloc-calculator" class="am-rel">&#127968; HELOC Calculator</a>
      <a href="/loan-calculators/refinance-break-even-calculator" class="am-rel">&#128200; Refinance Break-Even</a>
      <a href="/real-estate/mortgage-calculator" class="am-rel">&#127968; Mortgage Calculator</a>
    </div>
  </div>
</div>
</main>

<script>
function fmt(n){return '$'+Math.round(n).toLocaleString();}
function fmtSmall(n){return '$'+n.toFixed(2);}

function calcAm(){
  var P = parseFloat(document.getElementById('am-principal').value)||0;
  var r = (parseFloat(document.getElementById('am-rate').value)||0) / 100 / 12;
  var n = (parseInt(document.getElementById('am-term').value)||0) * 12;
  var extra = parseFloat(document.getElementById('am-extra').value)||0;
  var startVal = document.getElementById('am-start').value;

  if(P<=0||r<=0||n<=0){alert('Please enter valid loan amount, rate, and term.');return;}

  var basePayment = P * r * Math.pow(1+r,n) / (Math.pow(1+r,n)-1);
  var totalPayment = basePayment + extra;

  // Build schedule
  var balance = P;
  var totalInterest = 0;
  var totalInterestExtra = 0;
  var months = 0;
  var rows = '';
  var startDate = startVal ? new Date(startVal + '-01') : new Date();
  var monthNames = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

  // Calculate baseline total interest (no extra)
  var baseBalance = P;
  var baseTotalInt = 0;
  for(var i=0;i<n;i++){
    var bi = baseBalance * r;
    var bp = basePayment - bi;
    baseBalance -= bp;
    baseTotalInt += bi;
  }

  // Build schedule with extra payments
  for(var i=1;i<=n*2;i++){
    if(balance <= 0.01) break;
    var interest = balance * r;
    var principalPaid = Math.min(basePayment - interest + extra, balance);
    if(basePayment - interest < 0) principalPaid = extra;
    balance -= principalPaid;
    if(balance < 0) balance = 0;
    totalInterest += interest;
    months++;

    var d = new Date(startDate);
    d.setMonth(d.getMonth() + i - 1);
    var dStr = monthNames[d.getMonth()] + ' ' + d.getFullYear();

    var rowClass = (i % 12 === 0) ? ' class="yr-row"' : '';
    rows += '<tr' + rowClass + '><td>' + i + '</td><td>' + dStr + '</td><td>' + fmt(interest + principalPaid) + '</td><td>' + fmt(principalPaid) + '</td><td>' + fmt(interest) + '</td><td>' + fmt(Math.max(0,balance)) + '</td></tr>';
  }

  var intSaved = baseTotalInt - totalInterest;
  var monthsSaved = n - months;

  // Summary boxes
  var sumHtml = '<div class="am-sum-box"><span class="sv">' + fmt(basePayment) + '</span><span class="sl">Monthly Payment (P+I)</span></div>';
  sumHtml += '<div class="am-sum-box"><span class="sv">' + fmt(P + totalInterest) + '</span><span class="sl">Total Amount Paid</span></div>';
  sumHtml += '<div class="am-sum-box"><span class="sv">' + fmt(totalInterest) + '</span><span class="sl">Total Interest Paid</span></div>';
  sumHtml += '<div class="am-sum-box"><span class="sv">' + months + ' mo</span><span class="sl">Actual Payoff Time</span></div>';
  if(intSaved > 0){
    sumHtml += '<div class="am-sum-box save"><span class="sv">' + fmt(intSaved) + '</span><span class="sl">Interest Saved (Extra Payments)</span></div>';
    sumHtml += '<div class="am-sum-box save"><span class="sv">' + monthsSaved + ' mo</span><span class="sl">Time Saved (Extra Payments)</span></div>';
    document.getElementById('am-savings-note').innerHTML = '&#10003; By paying an extra <strong>' + fmt(extra) + '/month</strong>, you save <strong>' + fmt(intSaved) + ' in interest</strong> and pay off your loan <strong>' + Math.floor(monthsSaved/12) + ' years ' + (monthsSaved%12) + ' months early</strong>.';
    document.getElementById('am-extra-savings').style.display='block';
  } else {
    document.getElementById('am-extra-savings').style.display='none';
  }

  document.getElementById('am-sum').innerHTML = sumHtml;
  document.getElementById('am-tbody').innerHTML = rows;
  document.getElementById('am-results').style.display = 'block';
}
</script>

<?php require_once '../includes/footer.php'; ?>
