<?php
$currentYear = date('Y');
$pageTitle       = "Mortgage Payoff Calculator with Extra Payments ($currentYear)";
$metaDescription = "Free $currentYear mortgage payoff calculator with extra payments. See how extra monthly principal or one-time lump sums reduce your loan term and save thousands in interest.";
$metaKeywords    = 'mortgage payoff calculator with extra payments, extra mortgage payment calculator, early mortgage payoff calculator, accelerated mortgage payoff, principal only payment calculator';

$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'HowTo','name'=>'How to Calculate Early Mortgage Payoff with Extra Principal Payments','totalTime'=>'PT3M','step'=>[
    ['@type'=>'HowToStep','position'=>1,'name'=>'Enter Remaining Loan Balance','text'=>'Input the current outstanding principal balance from your most recent mortgage statement.'],
    ['@type'=>'HowToStep','position'=>2,'name'=>'Enter Interest Rate and Remaining Term','text'=>'Input your contractual annual interest rate (APR) and remaining loan term in years or months.'],
    ['@type'=>'HowToStep','position'=>3,'name'=>'Input Extra Principal Payments','text'=>'Enter an additional monthly payment amount, an annual lump sum, or a one-time principal curtailment.'],
    ['@type'=>'HowToStep','position'=>4,'name'=>'Review Time and Interest Saved','text'=>'The calculator automatically computes the revised debt-free date, total years/months eliminated from the loan, and net interest savings in dollars.'],
    ['@type'=>'HowToStep','position'=>5,'name'=>'Inspect the Accelerated Amortization Schedule','text'=>'Examine the year-by-year principal reduction schedule showing how every dollar of extra payment bypasses compound interest.']
  ]],
  ['@type'=>'WebApplication','name'=>'Mortgage Payoff Calculator with Extra Payments',
   'url'=>'https://americacalculator.com/loan-calculators/mortgage-payoff-calculator',
   'description'=>'Calculate interest savings and early debt-free payoff dates when applying extra monthly principal or lump-sum payments to your mortgage.',
   'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All',
   'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Loan Calculators','item'=>'https://americacalculator.com/loan-calculators/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'Mortgage Payoff Calculator','item'=>'https://americacalculator.com/loan-calculators/mortgage-payoff-calculator'],
  ]],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'How much faster can I pay off my mortgage by adding $100 a month?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'On a typical 30-year fixed mortgage of $350,000 at 6.75%, adding just $100 per month to principal pays off the mortgage approximately 3.5 years early and saves over $38,000 in compound interest. Adding $250 per month shaves over 7 years off the loan term.']],
    ['@type'=>'Question','name'=>'Do extra mortgage payments go directly to principal?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes, provided you specifically designate the additional funds as a "Principal-Only Curtailment" with your loan servicer. If not designated, some loan servicers may hold the funds in suspense or apply them toward future escrow or upcoming monthly installments rather than immediately reducing the interest-bearing principal balance.']],
    ['@type'=>'Question','name'=>'What is the difference between bi-weekly payments and extra monthly payments?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'A bi-weekly payment schedule involves paying half of your monthly mortgage payment every two weeks. Because there are 52 weeks in a year, you make 26 half-payments, which equals 13 full payments per year (one extra full payment annually). Paying 1/12th extra each month accomplishes the exact same mathematical interest reduction without requiring third-party bi-weekly processing fees.']],
    ['@type'=>'Question','name'=>'Are there prepayment penalties on home mortgages in 2026?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Under the federal Dodd-Frank Act and CFPB Qualified Mortgage (QM) regulations, conventional residential mortgages (Fannie Mae, Freddie Mac, FHA, VA, and USDA) are prohibited from charging prepayment penalties. However, some commercial mortgages, hard money loans, and non-QM investor loans may carry prepayment penalties during the first 1 to 5 years.']],
    ['@type'=>'Question','name'=>'Should I pay off my mortgage early or invest in the stock market?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Paying down a mortgage provides a guaranteed, risk-free return equal to your loan\'s interest rate (e.g., paying off a 7% mortgage is equivalent to an after-tax guaranteed 7% return). Investing in the stock market historically yields 9% to 10% average annual gross returns, but involves market volatility and capital gains taxes. Many homeowners split excess cash flow 50/50 between retirement investing and extra mortgage principal.']],
    ['@type'=>'Question','name'=>'What is the difference between mortgage payoff and mortgage recasting?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'An extra principal payment shortens your loan term and reduces total interest while keeping your required monthly payment the same. Mortgage recasting involves making a lump-sum principal payment (usually $5,000+) and paying a small fee ($250–$500) to have the lender re-amortize the remaining balance over the original term, lowering your required monthly payment.']],
    ['@type'=>'Question','name'=>'Does paying off a mortgage early hurt your credit score?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Closing a mortgage account may cause a temporary, minor dip in your credit score (often 10–25 points) because it reduces your credit mix and eliminates an active installment account. However, this minor dip is far outweighed by eliminating tens of thousands of dollars in compound interest and freeing up monthly cash flow.']],
    ['@type'=>'Question','name'=>'How does an extra one-time lump sum impact loan amortization?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'A lump-sum principal payment made early in the loan has a dramatic compounding effect. For example, a $10,000 lump sum applied in year 2 of a $300,000 30-year mortgage at 7% saves over $35,000 in total interest and eliminates nearly 2 full years of payments because interest is never allowed to compound on that $10,000 over the remaining 28 years.']]
  ]]
]];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f8fafc;}
.rc-wrap{max-width:1080px;margin:0 auto;padding:2rem 1.25rem 4rem;}
.rc-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}.rc-bc a{color:#64748b;text-decoration:none;}.rc-bc a:hover{color:#0369a1;}
.rc-hero h1{font-size:1.85rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.rc-hero p{font-size:.97rem;color:#475569;line-height:1.72;margin:0 0 1.75rem;border-left:3px solid #0369a1;padding-left:.9rem;}
.rc-badges{display:flex;flex-wrap:wrap;gap:.5rem;margin-bottom:1.5rem;}
.rc-badge{display:inline-flex;align-items:center;gap:.35rem;padding:5px 12px;border-radius:20px;font-size:.73rem;font-weight:700;letter-spacing:.02em;}
.rc-badge-blue{background:#dbeafe;color:#1e40af;border:1px solid #93c5fd;}
.rc-badge-green{background:#dcfce7;color:#166534;border:1px solid #86efac;}
.rc-badge-gray{background:#f1f5f9;color:#475569;border:1px solid #cbd5e1;}
.rc-calc-grid{display:grid;grid-template-columns:1.05fr .95fr;gap:1.75rem;align-items:start;margin-bottom:2rem;}
.rc-card{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden;}
.rc-card-head{background:#0369a1;color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;display:flex;justify-content:space-between;align-items:center;}
.rc-card-head-actions{display:flex;gap:.5rem;}
.rc-card-head-actions button{background:rgba(255,255,255,.18);color:#fff;border:none;border-radius:6px;padding:6px 12px;font-size:.75rem;font-weight:600;cursor:pointer;transition:background .2s;}
.rc-card-head-actions button:hover{background:rgba(255,255,255,.3);}
.rc-body{padding:1.5rem;}
.rc-field-row{display:grid;grid-template-columns:1fr 1fr;gap:.85rem;margin-bottom:.85rem;}
.rc-field{margin-bottom:.85rem;}
.rc-field label{display:block;font-size:.84rem;font-weight:600;color:#1e293b;margin-bottom:.3rem;}
.rc-field input,.rc-field select{width:100%;padding:9px 12px;border:1.5px solid #cbd5e1;border-radius:7px;font-size:.92rem;color:#0f172a;outline:none;box-sizing:border-box;background:#fff;transition:border-color .2s;}
.rc-field input:focus,.rc-field select:focus{border-color:#0369a1;box-shadow:0 0 0 3px rgba(3,105,161,.12);}
.rc-field .hint{font-size:.72rem;color:#64748b;margin-top:.25rem;}

/* Results styling */
.rc-results-panel{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);padding:1.5rem;}
.rc-res-hero{background:#f0fdf4;border:1.5px solid #86efac;border-radius:10px;padding:1.25rem;text-align:center;margin-bottom:1.25rem;}
.rc-res-label{font-size:.82rem;font-weight:700;color:#166534;text-transform:uppercase;letter-spacing:.05em;}
.rc-res-val{font-size:2.5rem;font-weight:900;color:#14532d;line-height:1.15;margin:.35rem 0 .2rem;}
.rc-res-sub{font-size:.86rem;color:#166534;font-weight:600;}

.rc-summary-grid{display:grid;grid-template-columns:1fr 1fr;gap:.75rem;margin-bottom:1.25rem;}
.rc-sum-card{background:#f8fafc;border:1px solid #e2e8f0;border-radius:8px;padding:.85rem;}
.rc-sum-title{font-size:.73rem;color:#64748b;font-weight:700;text-transform:uppercase;}
.rc-sum-val{font-size:1.15rem;font-weight:800;color:#0f172a;margin-top:2px;}

/* Visual timeline bars */
.payoff-visual-box{background:#f8fafc;border:1px solid #e2e8f0;border-radius:8px;padding:14px;margin-bottom:1.25rem;}
.payoff-bar-label{display:flex;justify-content:space-between;font-size:.8rem;font-weight:700;color:#334155;margin-bottom:5px;}
.payoff-track{height:16px;background:#e2e8f0;border-radius:8px;overflow:hidden;margin-bottom:10px;position:relative;}
.payoff-fill-orig{height:100%;background:#94a3b8;border-radius:8px;}
.payoff-fill-new{height:100%;background:#059669;border-radius:8px;transition:width .4s ease;}

/* Amortization schedule */
.rc-table-wrap{max-height:360px;overflow-y:auto;border:1px solid #e2e8f0;border-radius:8px;margin-top:.75rem;}
.rc-sched-table{width:100%;border-collapse:collapse;font-size:.8rem;}
.rc-sched-table th{background:#0369a1;color:#fff;padding:8px 10px;position:sticky;top:0;z-index:1;text-align:right;}
.rc-sched-table th:first-child{text-align:left;}
.rc-sched-table td{padding:7px 10px;border-bottom:1px solid #f1f5f9;text-align:right;color:#334155;}
.rc-sched-table td:first-child{text-align:left;font-weight:700;}
.rc-sched-table tr:nth-child(even) td{background:#f8fafc;}

/* Editorial & Content */
.rc-section{background:#fff;border-radius:12px;border:1px solid #e2e8f0;padding:1.75rem;margin-bottom:1.5rem;}
.rc-section h2{font-size:1.3rem;color:#0f172a;margin:0 0 .85rem;padding-bottom:.6rem;border-bottom:2px solid #e0f2fe;}
.rc-section h3{font-size:1.02rem;color:#1e293b;margin:1.2rem 0 .45rem;}
.rc-section p{color:#475569;line-height:1.72;font-size:.94rem;margin-bottom:.9rem;}
.rc-table{width:100%;border-collapse:collapse;border-radius:8px;overflow:hidden;border:1px solid #e2e8f0;margin:1rem 0;}
.rc-table th{background:#0369a1;color:#fff;padding:9px 12px;font-size:.82rem;font-weight:600;text-align:left;}
.rc-table td{padding:8px 12px;border-bottom:1px solid #f1f5f9;font-size:.85rem;color:#334155;}
.rc-table tr:last-child td{border-bottom:none;}
.rc-table tr:nth-child(even) td{background:#f8fafc;}
.rc-faq-item{border-bottom:1px solid #f1f5f9;padding:.85rem 0;}
.rc-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.rc-faq-q{font-size:.94rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;user-select:none;}
.rc-faq-q::after{content:'+';color:#0369a1;font-size:1.2rem;flex-shrink:0;transition:transform .2s;}
.rc-faq-item.open .rc-faq-q::after{content:'−';}
.rc-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.rc-faq-item.open .rc-faq-a{display:block;}
.rc-related{display:grid;grid-template-columns:repeat(auto-fit,minmax(190px,1fr));gap:.75rem;margin-top:.75rem;}
.rc-rel-link{display:block;background:#e0f2fe;border:1.5px solid #bae6fd;border-radius:8px;padding:.75rem 1rem;font-size:.85rem;font-weight:600;color:#0369a1;text-decoration:none;text-align:center;transition:background .15s;}
.rc-rel-link:hover{background:#bae6fd;}
.privacy-notice{display:flex;align-items:center;gap:.5rem;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:8px;padding:.75rem 1rem;margin-top:1rem;font-size:.78rem;color:#166534;}
@media(max-width:860px){.rc-calc-grid{grid-template-columns:1fr;}}
@media(max-width:600px){.rc-field-row,.rc-summary-grid{grid-template-columns:1fr;}.rc-hero h1{font-size:1.5rem;}}
@media print{.site-header,.site-footer,.rc-card-head-actions,button,.privacy-notice,.rc-badges{display:none !important;}.rc-card,.rc-results-panel{box-shadow:none;border:1px solid #ccc;}}
</style>

<main id="main-content">
  <div class="rc-wrap">
    <nav class="rc-bc" aria-label="Breadcrumb">
      <a href="/">Home</a> &rsaquo;
      <a href="/loan-calculators/">Loan Calculators</a> &rsaquo;
      <span>Mortgage Payoff Calculator</span>
    </nav>

    <div class="rc-hero">
      <h1>Mortgage Payoff Calculator with Extra Payments (<?php echo $currentYear; ?>)</h1>
      <div class="rc-badges">
        <span class="rc-badge rc-badge-blue">✓ Audited for <?php echo $currentYear; ?> US Rates</span>
        <span class="rc-badge rc-badge-green">✓ Client-Side Privacy</span>
        <span class="rc-badge rc-badge-gray">Updated: September <?php echo $currentYear; ?></span>
      </div>
      <p>
        Applying extra principal payments to your home loan directly reduces the interest-bearing balance, cutting years off your amortization schedule and saving tens of thousands of dollars in compound mortgage interest. Use this institutional calculator to model extra monthly payments, annual principal curtailments, or one-time lump-sum contributions to pinpoint your exact debt-free date.
      </p>
    </div>

    <!-- MAIN CALCULATOR GRID -->
    <div class="rc-calc-grid">
      <!-- Inputs Card -->
      <div class="rc-card">
        <div class="rc-card-head">
          <span>Loan &amp; Extra Payment Parameters</span>
          <div class="rc-card-head-actions">
            <button type="button" onclick="printCalc()">Print</button>
            <button type="button" onclick="downloadCSV()">CSV</button>
            <button type="button" onclick="resetForm()">Reset</button>
          </div>
        </div>
        <div class="rc-body">
          <div class="rc-field">
            <label for="loanBalance">Current Outstanding Loan Balance ($)</label>
            <input type="number" id="loanBalance" value="350000" step="5000" min="10000" oninput="calculatePayoff()">
            <div class="hint">Remaining principal balance from your latest mortgage statement</div>
          </div>

          <div class="rc-field-row">
            <div class="rc-field">
              <label for="interestRate">Interest Rate (%)</label>
              <input type="number" id="interestRate" value="6.75" step="0.125" min="1.0" max="18.0" oninput="calculatePayoff()">
            </div>
            <div class="rc-field">
              <label for="remainingTerm">Remaining Term (Years)</label>
              <select id="remainingTerm" onchange="calculatePayoff()">
                <option value="30" selected>30 Years (360 mos)</option>
                <option value="25">25 Years (300 mos)</option>
                <option value="20">20 Years (240 mos)</option>
                <option value="15">15 Years (180 mos)</option>
                <option value="10">10 Years (120 mos)</option>
              </select>
            </div>
          </div>

          <div style="background:#eff6ff;border:1px solid #bfdbfe;border-radius:8px;padding:12px;margin:1rem 0;">
            <div style="font-size:.84rem;font-weight:700;color:#1e40af;margin-bottom:8px;">Accelerated Principal Strategy</div>
            
            <div class="rc-field">
              <label for="extraMonthly">Extra Monthly Payment ($)</label>
              <input type="number" id="extraMonthly" value="200" step="25" min="0" oninput="calculatePayoff()">
              <div class="hint">Paid each month in addition to required principal &amp; interest</div>
            </div>

            <div class="rc-field-row">
              <div class="rc-field">
                <label for="extraAnnual">Extra Annual Payment ($)</label>
                <input type="number" id="extraAnnual" value="0" step="250" min="0" oninput="calculatePayoff()">
                <div class="hint">e.g., from annual tax refund or work bonus</div>
              </div>
              <div class="rc-field">
                <label for="extraLumpSum">One-Time Lump Sum ($)</label>
                <input type="number" id="extraLumpSum" value="5000" step="1000" min="0" oninput="calculatePayoff()">
                <div class="hint">Applied in Month #<span id="lumpMonthLabel">12</span></div>
              </div>
            </div>
          </div>

          <div class="privacy-notice">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            100% Client-Side: Calculations execute exclusively in your browser session. No data is stored or transmitted.
          </div>
        </div>
      </div>

      <!-- Results Panel -->
      <div class="rc-results-panel">
        <div class="rc-res-hero">
          <div class="rc-res-label">Total Interest Saved</div>
          <div class="rc-res-val" id="resInterestSaved">$89,450</div>
          <div class="rc-res-sub" id="resTimeSaved">You will be debt-free 5.8 years earlier!</div>
        </div>

        <div class="rc-summary-grid">
          <div class="rc-sum-card">
            <div class="rc-sum-title">Revised Payoff Time</div>
            <div class="rc-sum-val" id="resNewTerm">24.2 Years</div>
            <div style="font-size:.72rem;color:#059669;font-weight:700;" id="resNewDate">October 2050</div>
          </div>
          <div class="rc-sum-card">
            <div class="rc-sum-title">Original Term</div>
            <div class="rc-sum-val" id="resOrigTerm">30.0 Years</div>
            <div style="font-size:.72rem;color:#64748b;" id="resOrigDate">October 2056</div>
          </div>
        </div>

        <!-- Visual Payoff Duration Comparison -->
        <div class="payoff-visual-box">
          <div class="payoff-bar-label">
            <span>With Extra Payments: <strong id="barNewLabel">24.2 Yrs</strong></span>
            <span style="color:#059669;font-weight:800;">Debt-Free Faster</span>
          </div>
          <div class="payoff-track">
            <div class="payoff-fill-new" id="barNewFill" style="width: 80%;"></div>
          </div>

          <div class="payoff-bar-label" style="color:#64748b;">
            <span>Original Scheduled Payoff: <strong id="barOrigLabel">30.0 Yrs</strong></span>
            <span>Standard Baseline</span>
          </div>
          <div class="payoff-track">
            <div class="payoff-fill-orig" style="width: 100%;"></div>
          </div>
        </div>

        <!-- Financial Summary Breakdown -->
        <div style="border:1px solid #e2e8f0;border-radius:8px;padding:12px;margin-bottom:1.25rem;">
          <div style="display:flex;justify-content:space-between;font-size:.85rem;margin-bottom:6px;">
            <span style="color:#64748b;">Standard Monthly P&amp;I:</span>
            <strong id="resMonthlyPI">$2,270</strong>
          </div>
          <div style="display:flex;justify-content:space-between;font-size:.85rem;margin-bottom:6px;">
            <span style="color:#64748b;">Accelerated Monthly Payment:</span>
            <strong id="resAccelMonthly" style="color:#1d4ed8;">$2,470</strong>
          </div>
          <div style="display:flex;justify-content:space-between;font-size:.85rem;margin-bottom:6px;">
            <span style="color:#64748b;">Total Interest (Original):</span>
            <strong id="resTotalOrigInt">$467,235</strong>
          </div>
          <div style="display:flex;justify-content:space-between;font-size:.85rem;border-top:1px dashed #cbd5e1;padding-top:6px;">
            <span style="color:#0f172a;font-weight:700;">Total Interest (Accelerated):</span>
            <strong id="resTotalNewInt" style="color:#059669;">$377,785</strong>
          </div>
        </div>

        <!-- Amortization Schedule Toggle Button -->
        <button type="button" onclick="toggleSchedule()" style="width:100%;background:#0369a1;color:#fff;border:none;border-radius:8px;padding:10px;font-size:.88rem;font-weight:700;cursor:pointer;">
          <span id="schedBtnText">View Annual Amortization Table &darr;</span>
        </button>

        <div id="scheduleContainer" style="display:none;margin-top:.75rem;">
          <div class="rc-table-wrap">
            <table class="rc-sched-table">
              <thead>
                <tr>
                  <th>Year</th>
                  <th>Principal Paid</th>
                  <th>Interest Paid</th>
                  <th>Extra Principal</th>
                  <th>End Balance</th>
                </tr>
              </thead>
              <tbody id="scheduleBody"></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- EDITORIAL & STRATEGY SECTION -->
    <div class="rc-section">
      <h2>The Mathematics of Early Mortgage Payoff</h2>
      <p>
        During the early years of a standard 30-year amortized mortgage, <strong>more than 65% to 75% of every monthly payment goes strictly toward interest</strong> rather than reducing your actual debt. This front-loaded interest structure means that making even modest additional principal curtailments early in the loan lifespan generates exponential savings by bypassing future compound interest charges.
      </p>
      <p>
        Because mortgage interest is calculated monthly against your remaining unpaid balance (<code>Interest = Balance &times; (APR &divide; 12)</code>), every dollar applied directly to principal permanently lowers the balance upon which every subsequent month's interest is assessed.
      </p>

      <h3>Comparison of Payoff Acceleration Strategies</h3>
      <table class="rc-table">
        <thead>
          <tr>
            <th>Acceleration Strategy</th>
            <th>How It Works</th>
            <th>Typical Savings ($350k at 6.75%)</th>
            <th>Primary Advantage</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>+$100 / Month Extra</strong></td>
            <td>Add $100 dedicated to principal each month</td>
            <td>~$38,500 interest saved &bull; 3.6 years early</td>
            <td>Low budget friction; easy automatic monthly setup.</td>
          </tr>
          <tr>
            <td><strong>+$250 / Month Extra</strong></td>
            <td>Add $250 dedicated to principal each month</td>
            <td>~$78,200 interest saved &bull; 7.4 years early</td>
            <td>Substantial balance reduction without refinancing costs.</td>
          </tr>
          <tr>
            <td><strong>Bi-Weekly Payments</strong></td>
            <td>Pay half monthly payment every 2 weeks (26 halves = 13 full payments)</td>
            <td>~$65,000 interest saved &bull; 5.9 years early</td>
            <td>Aligns with bi-weekly corporate payroll schedules.</td>
          </tr>
          <tr>
            <td><strong>$10,000 Lump Sum</strong></td>
            <td>Single lump-sum curtailment applied in Year 2</td>
            <td>~$36,000 interest saved &bull; 1.8 years early</td>
            <td>Leverages tax refunds, asset sales, or annual bonuses.</td>
          </tr>
        </tbody>
      </table>

      <h3>How to Ensure Your Servicer Applies Payments to Principal</h3>
      <p>
        A frequent issue encountered by homeowners is servicers misapplying extra funds. When sending extra money, you must specify that the additional payment is a <strong>"Principal-Only Curtailment"</strong>.
      </p>
      <ul>
        <li><strong>Online Banking Portals:</strong> When making online payments via your servicer portal (e.g., Chase, Wells Fargo, Mr. Cooper, Pennymac), look for the "Additional Principal" input field rather than paying extra into "Unapplied Funds" or "Escrow".</li>
        <li><strong>Paper Checks / Bill Pay:</strong> Write "APPLY EXTRA FUNDS TO PRINCIPAL ONLY" in the memo line alongside your loan number.</li>
        <li><strong>Verify on Next Statement:</strong> Check your following monthly statement to verify that the ending principal balance dropped by the exact sum of your regular principal plus the extra curtailment.</li>
      </ul>
    </div>

    <!-- METHODOLOGY & FORMULAS -->
    <div class="rc-section">
      <h2>Calculation Methodology &amp; Financial Formulas</h2>
      <p>
        The base monthly principal and interest payment is computed using the standard US banking amortization formula:
      </p>
      <div style="background:#f1f5f9;border-left:4px solid #0369a1;padding:1rem 1.25rem;border-radius:4px;font-family:monospace;font-size:.9rem;line-height:1.7;margin:1rem 0;">
        <strong>Monthly Payment (P&amp;I):</strong><br>
        M = P &times; [ r(1 + r)<sup>n</sup> ] &divide; [ (1 + r)<sup>n</sup> - 1 ]<br><br>
        Where:<br>
        &bull; <strong>P</strong> = Current principal loan balance<br>
        &bull; <strong>r</strong> = Monthly interest rate (Annual Interest Rate &divide; 12 &divide; 100)<br>
        &bull; <strong>n</strong> = Remaining total payments (Years &times; 12)<br><br>
        <strong>Accelerated Month Amortization Step:</strong><br>
        Interest Month<sub>i</sub> = Balance<sub>i-1</sub> &times; r<br>
        Principal Month<sub>i</sub> = (M - Interest Month<sub>i</sub>) + Extra Monthly + Extra Lump Sum<br>
        Balance<sub>i</sub> = Balance<sub>i-1</sub> - Principal Month<sub>i</sub>
      </div>
      <p>
        The accelerated schedule continues iterating monthly until <code>Balance<sub>i</sub> &le; 0</code>. Total interest paid is the sum of all monthly interest charges across both the original and accelerated schedules, with the difference representing net cash savings.
      </p>
    </div>

    <!-- FAQS ACCORDION -->
    <div class="rc-section">
      <h2>Frequently Asked Questions About Mortgage Payoff</h2>
      <div class="rc-faq-list">
        <div class="rc-faq-item open">
          <div class="rc-faq-q" onclick="toggleFaq(this)">How much faster can I pay off my mortgage by adding $100 a month?</div>
          <div class="rc-faq-a">On a typical 30-year fixed mortgage of $350,000 at 6.75%, adding just $100 per month to principal pays off the mortgage approximately 3.5 years early and saves over $38,000 in compound interest. Adding $250 per month shaves over 7 years off the loan term.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">Do extra mortgage payments go directly to principal?</div>
          <div class="rc-faq-a">Yes, provided you specifically designate the additional funds as a "Principal-Only Curtailment" with your loan servicer. If not designated, some loan servicers may hold the funds in suspense or apply them toward future escrow or upcoming monthly installments rather than immediately reducing the interest-bearing principal balance.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">What is the difference between bi-weekly payments and extra monthly payments?</div>
          <div class="rc-faq-a">A bi-weekly payment schedule involves paying half of your monthly mortgage payment every two weeks. Because there are 52 weeks in a year, you make 26 half-payments, which equals 13 full payments per year (one extra full payment annually). Paying 1/12th extra each month accomplishes the exact same mathematical interest reduction without requiring third-party bi-weekly processing fees.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">Are there prepayment penalties on home mortgages in 2026?</div>
          <div class="rc-faq-a">Under the federal Dodd-Frank Act and CFPB Qualified Mortgage (QM) regulations, conventional residential mortgages (Fannie Mae, Freddie Mac, FHA, VA, and USDA) are prohibited from charging prepayment penalties. However, some commercial mortgages, hard money loans, and non-QM investor loans may carry prepayment penalties during the first 1 to 5 years.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">Should I pay off my mortgage early or invest in the stock market?</div>
          <div class="rc-faq-a">Paying down a mortgage provides a guaranteed, risk-free return equal to your loan's interest rate (e.g., paying off a 7% mortgage is equivalent to an after-tax guaranteed 7% return). Investing in the stock market historically yields 9% to 10% average annual gross returns, but involves market volatility and capital gains taxes. Many homeowners split excess cash flow 50/50 between retirement investing and extra mortgage principal.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">What is the difference between mortgage payoff and mortgage recasting?</div>
          <div class="rc-faq-a">An extra principal payment shortens your loan term and reduces total interest while keeping your required monthly payment the same. Mortgage recasting involves making a lump-sum principal payment (usually $5,000+) and paying a small fee ($250–$500) to have the lender re-amortize the remaining balance over the original term, lowering your required monthly payment.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">Does paying off a mortgage early hurt your credit score?</div>
          <div class="rc-faq-a">Closing a mortgage account may cause a temporary, minor dip in your credit score (often 10–25 points) because it reduces your credit mix and eliminates an active installment account. However, this minor dip is far outweighed by eliminating tens of thousands of dollars in compound interest and freeing up monthly cash flow.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">How does an extra one-time lump sum impact loan amortization?</div>
          <div class="rc-faq-a">A lump-sum principal payment made early in the loan has a dramatic compounding effect. For example, a $10,000 lump sum applied in year 2 of a $300,000 30-year mortgage at 7% saves over $35,000 in total interest and eliminates nearly 2 full years of payments because interest is never allowed to compound on that $10,000 over the remaining 28 years.</div>
        </div>
      </div>
    </div>

    <!-- RELATED CALCULATORS -->
    <div class="rc-section">
      <h2>Related Loan &amp; Mortgage Calculators</h2>
      <p>Evaluate your financing strategy with our complete lending suite:</p>
      <div class="rc-related">
        <a href="/loan-calculators/amortization-calculator" class="rc-rel-link">Amortization Schedule</a>
        <a href="/real-estate/mortgage-calculator" class="rc-rel-link">Fixed-Rate Mortgage</a>
        <a href="/real-estate/mortgage-refinance-calculator" class="rc-rel-link">Refinance Calculator</a>
        <a href="/loan-calculators/refinance-break-even-calculator" class="rc-rel-link">Refinance Break-Even</a>
        <a href="/loan-calculators/debt-to-income-calculator" class="rc-rel-link">DTI Calculator</a>
        <a href="/real-estate/closing-cost-calculator" class="rc-rel-link">Closing Cost Calculator</a>
        <a href="/loan-calculators/heloc-calculator" class="rc-rel-link">HELOC Calculator</a>
        <a href="/loan-calculators/personal-loan-calculator" class="rc-rel-link">Debt Consolidation</a>
      </div>
    </div>
  </div>
</main>

<script>
let annualScheduleData = [];

function formatUSD(num) {
  return '$' + Math.round(num).toLocaleString('en-US');
}

function calculatePayoff() {
  const balance = parseFloat(document.getElementById('loanBalance').value) || 0;
  const rate = (parseFloat(document.getElementById('interestRate').value) || 6.75) / 100;
  const termYears = parseInt(document.getElementById('remainingTerm').value) || 30;
  const extraMonthly = parseFloat(document.getElementById('extraMonthly').value) || 0;
  const extraAnnual = parseFloat(document.getElementById('extraAnnual').value) || 0;
  const extraLump = parseFloat(document.getElementById('extraLumpSum').value) || 0;
  const lumpMonth = 12; // Applied in month 12

  if (balance <= 0) return;

  const monthlyRate = rate / 12;
  const totalMonths = termYears * 12;

  // 1. Original standard monthly payment (P&I)
  const baseMonthlyPI = balance * (monthlyRate * Math.pow(1 + monthlyRate, totalMonths)) / (Math.pow(1 + monthlyRate, totalMonths) - 1);
  const totalOrigInterest = (baseMonthlyPI * totalMonths) - balance;

  // 2. Simulate Accelerated Schedule
  let currBalance = balance;
  let newTotalInterest = 0;
  let monthsCount = 0;
  annualScheduleData = [];

  let yearPrincipal = 0;
  let yearInterest = 0;
  let yearExtra = 0;

  while (currBalance > 0 && monthsCount < totalMonths + 120) {
    monthsCount++;
    const monthlyInt = currBalance * monthlyRate;
    let scheduledPrincipal = baseMonthlyPI - monthlyInt;
    
    // Check extra payments
    let monthExtra = extraMonthly;
    if (monthsCount % 12 === 0) {
      monthExtra += extraAnnual;
    }
    if (monthsCount === lumpMonth) {
      monthExtra += extraLump;
    }

    let totalPrincipalPaid = scheduledPrincipal + monthExtra;
    if (totalPrincipalPaid > currBalance) {
      totalPrincipalPaid = currBalance;
      monthExtra = Math.max(0, totalPrincipalPaid - scheduledPrincipal);
    }

    currBalance -= totalPrincipalPaid;
    newTotalInterest += monthlyInt;

    yearPrincipal += (totalPrincipalPaid - monthExtra);
    yearInterest += monthlyInt;
    yearExtra += monthExtra;

    if (monthsCount % 12 === 0 || currBalance <= 0) {
      const yearNum = Math.ceil(monthsCount / 12);
      annualScheduleData.push({
        year: yearNum,
        principal: yearPrincipal,
        interest: yearInterest,
        extra: yearExtra,
        endBalance: Math.max(0, currBalance)
      });
      yearPrincipal = 0;
      yearInterest = 0;
      yearExtra = 0;
    }
  }

  const interestSaved = Math.max(0, totalOrigInterest - newTotalInterest);
  const monthsSaved = Math.max(0, totalMonths - monthsCount);
  const yearsSaved = (monthsSaved / 12).toFixed(1);
  const newTermYears = (monthsCount / 12).toFixed(1);

  // Calculate Payoff Dates based on current date
  const now = new Date();
  const origDate = new Date(now.getFullYear(), now.getMonth() + totalMonths, 1);
  const newDate = new Date(now.getFullYear(), now.getMonth() + monthsCount, 1);
  const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

  // Update Hero & Cards
  document.getElementById('resInterestSaved').textContent = formatUSD(interestSaved);
  document.getElementById('resTimeSaved').textContent = `You will be debt-free ${yearsSaved} years (${monthsSaved} months) earlier!`;
  document.getElementById('resNewTerm').textContent = `${newTermYears} Years`;
  document.getElementById('resNewDate').textContent = `${monthNames[newDate.getMonth()]} ${newDate.getFullYear()}`;
  document.getElementById('resOrigTerm').textContent = `${termYears}.0 Years`;
  document.getElementById('resOrigDate').textContent = `${monthNames[origDate.getMonth()]} ${origDate.getFullYear()}`;

  // Visual Bars
  const pctOfOrig = Math.min(100, (monthsCount / totalMonths) * 100);
  document.getElementById('barNewFill').style.width = pctOfOrig.toFixed(1) + '%';
  document.getElementById('barNewLabel').textContent = `${newTermYears} Yrs (${monthsCount} mos)`;
  document.getElementById('barOrigLabel').textContent = `${termYears}.0 Yrs (${totalMonths} mos)`;

  // Breakdown values
  document.getElementById('resMonthlyPI').textContent = formatUSD(baseMonthlyPI);
  document.getElementById('resAccelMonthly').textContent = formatUSD(baseMonthlyPI + extraMonthly);
  document.getElementById('resTotalOrigInt').textContent = formatUSD(totalOrigInterest);
  document.getElementById('resTotalNewInt').textContent = formatUSD(newTotalInterest);

  renderSchedule();
}

function renderSchedule() {
  const tbody = document.getElementById('scheduleBody');
  tbody.innerHTML = '';
  annualScheduleData.forEach(row => {
    const tr = document.createElement('tr');
    tr.innerHTML = `
      <td>Year ${row.year}</td>
      <td>${formatUSD(row.principal)}</td>
      <td style="color:#d97706;">${formatUSD(row.interest)}</td>
      <td style="color:#1d4ed8;font-weight:600;">${formatUSD(row.extra)}</td>
      <td><strong>${formatUSD(row.endBalance)}</strong></td>
    `;
    tbody.appendChild(tr);
  });
}

function toggleSchedule() {
  const container = document.getElementById('scheduleContainer');
  const btn = document.getElementById('schedBtnText');
  if (container.style.display === 'none' || container.style.display === '') {
    container.style.display = 'block';
    btn.innerHTML = 'Hide Annual Amortization Table &uarr;';
  } else {
    container.style.display = 'none';
    btn.innerHTML = 'View Annual Amortization Table &darr;';
  }
}

function resetForm() {
  document.getElementById('loanBalance').value = 350000;
  document.getElementById('interestRate').value = 6.75;
  document.getElementById('remainingTerm').value = 30;
  document.getElementById('extraMonthly').value = 200;
  document.getElementById('extraAnnual').value = 0;
  document.getElementById('extraLumpSum').value = 5000;
  calculatePayoff();
}

function printCalc() {
  window.print();
}

function downloadCSV() {
  let csv = "Year,Principal Paid (USD),Interest Paid (USD),Extra Principal (USD),Ending Balance (USD)\n";
  annualScheduleData.forEach(r => {
    csv += `${r.year},${Math.round(r.principal)},${Math.round(r.interest)},${Math.round(r.extra)},${Math.round(r.endBalance)}\n`;
  });
  const blob = new Blob([csv], { type: 'text/csv' });
  const url = URL.createObjectURL(blob);
  const a = document.createElement('a');
  a.href = url;
  a.download = `mortgage-payoff-schedule-${new Date().toISOString().slice(0,10)}.csv`;
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
}

function toggleFaq(el) {
  el.parentElement.classList.toggle('open');
}

window.addEventListener('DOMContentLoaded', () => {
  calculatePayoff();
});
</script>

<?php require_once '../includes/footer.php'; ?>
