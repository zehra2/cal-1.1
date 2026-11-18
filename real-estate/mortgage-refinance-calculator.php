<?php
$currentYear = date('Y');
$pageTitle = "Mortgage Refinance Calculator ($currentYear) | Break-Even & Rate Savings";
$metaDescription = "Calculate your mortgage refinance break-even point in months. Compare current vs. new monthly payments, closing costs, and total 15 vs. 30-year interest savings.";
$schemaData = json_decode(<<<'EOD'
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "HowTo",
      "name": "How to Calculate Mortgage Refinance Savings and Break-Even",
      "step": [
        {
          "@type": "HowToStep",
          "name": "Enter current loan balance and rate",
          "text": "Input your remaining mortgage balance, current interest rate, and existing monthly payment."
        },
        {
          "@type": "HowToStep",
          "name": "Input new refinance loan terms",
          "text": "Enter the proposed new interest rate, new term length, and closing costs."
        },
        {
          "@type": "HowToStep",
          "name": "Calculate monthly payment difference",
          "text": "See how much your monthly principal and interest payment will decrease."
        },
        {
          "@type": "HowToStep",
          "name": "Determine break-even timeline",
          "text": "Divide total refinance closing costs by monthly savings to find exact break-even months."
        },
        {
          "@type": "HowToStep",
          "name": "Compare lifetime interest saved",
          "text": "Review total interest savings over the remaining life of the new loan."
        }
      ]
    },
    {
      "@type": "WebApplication",
      "@id": "https://americacalculator.com/real-estate/mortgage-refinance-calculator#app",
      "name": "Mortgage Refinance Break-Even Calculator",
      "url": "https://americacalculator.com/real-estate/mortgage-refinance-calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "All",
      "offer": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "description": "Calculate your mortgage refinance break-even timeline, monthly payment reduction, and net interest savings across 15, 20, and 30-year terms."
    },
    {
      "@type": "FAQPage",
      "@id": "https://americacalculator.com/real-estate/mortgage-refinance-calculator#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do you calculate the break-even point on a mortgage refinance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The refinance break-even point is calculated by dividing your total out-of-pocket refinance closing costs by your monthly payment savings: Break-Even (Months) = Total Refinance Closing Costs / Monthly Savings. For example, if refinancing costs $4,000 and saves you $200 per month, your break-even point is 20 months."
          }
        },
        {
          "@type": "Question",
          "name": "Is it worth refinancing for a 0.5% or 0.75% lower interest rate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, on loan balances over $300,000, lowering your interest rate by 0.50% to 0.75% can save $120 to $200 per month. If you plan to remain in the home longer than your break-even timeline (typically 18 to 36 months), refinancing is financially beneficial."
          }
        },
        {
          "@type": "Question",
          "name": "What is the danger of resetting the 30-year mortgage clock?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If you have already paid into a 30-year mortgage for 5 to 7 years, refinancing into a new 30-year loan resets your amortization schedule back to Year 1. Even with a lower monthly payment, you may pay substantially more total interest over the life of the loan unless you refinance into a shorter term (such as 20 or 15 years) or make extra principal payments."
          }
        },
        {
          "@type": "Question",
          "name": "What are typical closing costs to refinance a mortgage in 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Mortgage refinance closing costs typically total 2% to 4% of the loan amount ($3,500 to $8,000 on a $300,000 mortgage). Costs include lender origination fees ($1,000-$1,800), appraisal ($450-$700), title search and lender title insurance ($800-$1,500), and county recording fees ($150-$350)."
          }
        },
        {
          "@type": "Question",
          "name": "What is a 'no-closing-cost' refinance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A no-closing-cost refinance does not eliminate closing costs; instead, the lender either rolls the closing costs directly into your new loan principal balance or covers them in exchange for charging a slightly higher interest rate (typically 0.25% to 0.50% higher APR)."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between a rate-and-term refinance and a cash-out refinance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A rate-and-term refinance only changes your interest rate, loan duration, or loan program with no change to the principal balance beyond rolling in closing costs. A cash-out refinance replaces your existing loan with a larger mortgage, paying you the difference in liquid cash based on your accumulated home equity."
          }
        },
        {
          "@type": "Question",
          "name": "Can you remove PMI with a mortgage refinance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. If your property value has increased or you have paid down your loan such that your current loan balance is 80% or less of your home's current market value, refinancing into a conventional mortgage completely eliminates Private Mortgage Insurance (PMI) or FHA annual MIP, saving an additional $100 to $300+ per month."
          }
        },
        {
          "@type": "Question",
          "name": "How soon can you refinance after buying a home?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For a conventional rate-and-term refinance, there is technically no mandatory federal waiting period, though many lenders have a 6-month seasoning requirement before you can use a new appraisal. Cash-out refinances typically require a minimum 6- to 12-month seasoning period under Fannie Mae and Freddie Mac guidelines."
          }
        }
      ]
    }
  ]
}
EOD
, true);
require_once __DIR__ . '/../includes/header.php';
?>
<style>
:root {
  --primary: #0284c7;
  --primary-hover: #0369a1;
  --primary-light: #f0f9ff;
  --success: #10b981;
  --slate-900: #0f172a;
  --slate-800: #1e293b;
  --slate-700: #334155;
  --slate-600: #475569;
  --slate-200: #e2e8f0;
  --slate-100: #f1f5f9;
  --slate-50: #f8fafc;
  --white: #ffffff;
  --radius: 16px;
}
* { box-sizing: border-box; margin: 0; padding: 0; }
body { background-color: var(--slate-50); color: var(--slate-800); line-height: 1.6; }
.main-wrapper { max-width: 1100px; margin: 0 auto; padding: 2rem 1.25rem 5rem; }
.page-title-area { margin-bottom: 2rem; }
.page-title-area h1 { font-size: 2.1rem; color: var(--slate-900); margin-bottom: 0.5rem; }
.page-title-area p { color: var(--slate-600); font-size: 1.05rem; }
.calculator-container { display: grid; grid-template-columns: 1.15fr 1fr; gap: 2rem; margin-bottom: 3rem; }
.form-panel { background: var(--white); border-radius: var(--radius); padding: 2rem; border: 1px solid var(--slate-200); box-shadow: 0 4px 15px rgba(0,0,0,0.03); }
.results-panel { background: #075985; color: #ffffff; border-radius: var(--radius); padding: 2rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 25px rgba(7,89,133,0.25); }
.section-subtitle { font-size: 0.78rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; color: var(--slate-600); margin-bottom: 0.85rem; }
.input-group { margin-bottom: 1.25rem; }
.input-group label { display: block; font-size: 0.88rem; font-weight: 600; color: var(--slate-700); margin-bottom: 0.4rem; }
.input-wrapper { position: relative; display: flex; align-items: center; }
.input-prefix { position: absolute; left: 1rem; color: var(--slate-600); font-weight: 600; }
.input-suffix { position: absolute; right: 1rem; color: var(--slate-600); font-weight: 600; }
.input-wrapper input, .input-wrapper select {
  width: 100%;
  padding: 0.75rem 1rem 0.75rem 2.25rem;
  border: 1.5px solid var(--slate-200);
  border-radius: 10px;
  font-size: 1rem;
  font-weight: 600;
  outline: none;
  background: #fff;
  transition: border-color 0.2s;
}
.input-wrapper input:focus, .input-wrapper select:focus { border-color: var(--primary); box-shadow: 0 0 0 4px rgba(2,132,199,0.1); }
.grid-2-col { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
.refi-hero-card {
  background: rgba(56, 189, 248, 0.15);
  border: 1px solid rgba(56, 189, 248, 0.3);
  border-radius: 14px;
  padding: 1.5rem;
  text-align: center;
  margin-bottom: 1.5rem;
}
.refi-hero-card .label { font-size: 0.82rem; color: #bae6fd; font-weight: 700; text-transform: uppercase; }
.refi-hero-card .val-main { font-size: 2.5rem; font-weight: 800; color: #38bdf8; margin: 0.25rem 0; line-height: 1; }
.refi-hero-card .val-sub { font-size: 0.88rem; color: #e0f2fe; }
.breakdown-row { display: flex; justify-content: space-between; font-size: 0.95rem; padding: 0.55rem 0; border-bottom: 1px solid rgba(255, 255, 255, 0.08); }
.breakdown-row:last-child { border-bottom: none; }
.breakdown-row span:first-child { color: #bae6fd; }
.breakdown-row span:last-child { font-weight: 700; color: #ffffff; }
.calculator-content-body { margin-top: 2.5rem; background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; padding: 2.5rem; box-shadow: 0 4px 20px rgba(0,0,0,0.04); }
.calculator-content-body h2 { font-size: 1.65rem; color: #0f172a; margin: 2rem 0 1rem; border-bottom: 2px solid #f1f5f9; padding-bottom: 0.5rem; }
.calculator-content-body h3 { font-size: 1.25rem; color: #1e293b; margin: 1.5rem 0 0.75rem; }
.calculator-content-body p { color: #475569; font-size: 1.02rem; line-height: 1.75; margin-bottom: 1.25rem; }
.calculator-content-body ul, .calculator-content-body ol { margin-left: 1.5rem; margin-bottom: 1.5rem; color: #475569; line-height: 1.75; }
.calculator-content-body li { margin-bottom: 0.5rem; }
.table-responsive { overflow-x: auto; margin: 1.5rem 0; }
.data-table { width: 100%; border-collapse: collapse; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; }
.data-table th { background: #1e293b; color: #ffffff; padding: 12px 16px; text-align: left; font-size: 0.9rem; }
.data-table td { padding: 12px 16px; border-bottom: 1px solid #f1f5f9; color: #334155; font-size: 0.92rem; }
.data-table tr:nth-child(even) td { background: #f8fafc; }
.quick-answer-card { background: #f0f9ff; border-left: 4px solid #0284c7; padding: 1.5rem; border-radius: 0 8px 8px 0; margin-bottom: 2rem; }
.quick-answer-card h2 { font-size: 1.35rem; color: #0369a1; margin: 0 0 0.5rem; border: none; padding: 0; }
.quick-answer-card p { color: #075985; margin: 0; }
.faq-item { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 1.25rem 1.5rem; margin-bottom: 1rem; }
.faq-item h4 { margin: 0 0 0.4rem; color: #0f172a; font-size: 1.05rem; }
.faq-item p { margin: 0; color: #475569; font-size: 0.95rem; line-height: 1.6; }
@media (max-width: 860px) {
  .calculator-container { grid-template-columns: 1fr; }
  .grid-2-col { grid-template-columns: 1fr; }
}
</style>

<main class="main-wrapper">
  <div class="page-title-area">
    <h1>Mortgage Refinance Break-Even Calculator (<?php echo $currentYear; ?>)</h1>
    <p>Calculate your monthly mortgage savings, exact break-even timeline in months, and lifetime interest savings when refinancing your home loan.</p>
  </div>

  <div class="calculator-container">
    <div class="form-panel">
      <div class="section-subtitle">1. Current Mortgage Details</div>
      
      <div class="grid-2-col">
        <div class="input-group">
          <label for="currentBalance">Current Loan Balance ($)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="currentBalance" value="340000" step="5000">
          </div>
        </div>
        <div class="input-group">
          <label for="currentRate">Current Interest Rate (%)</label>
          <div class="input-wrapper">
            <input type="number" id="currentRate" value="7.25" step="0.125" style="padding-left: 1rem;">
            <span class="input-suffix">%</span>
          </div>
        </div>
      </div>

      <div class="grid-2-col">
        <div class="input-group">
          <label for="currentTermRemaining">Remaining Term (Years)</label>
          <div class="input-wrapper" style="padding-left: 0;">
            <select id="currentTermRemaining" style="padding-left: 1rem;">
              <option value="30">30 Years</option>
              <option value="27" selected>27 Years (3 Yrs Paid)</option>
              <option value="25">25 Years (5 Yrs Paid)</option>
              <option value="20">20 Years</option>
              <option value="15">15 Years</option>
            </select>
          </div>
        </div>
        <div class="input-group">
          <label for="currentMonthlyPi">Current Monthly P&amp;I ($)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="currentMonthlyPi" value="2376" step="25">
          </div>
        </div>
      </div>

      <div class="section-subtitle" style="margin-top: 1.75rem;">2. New Refinance Terms</div>

      <div class="grid-2-col">
        <div class="input-group">
          <label for="newRate">New Interest Rate (%)</label>
          <div class="input-wrapper">
            <input type="number" id="newRate" value="6.125" step="0.125" style="padding-left: 1rem;">
            <span class="input-suffix">%</span>
          </div>
        </div>
        <div class="input-group">
          <label for="newTerm">New Loan Term</label>
          <div class="input-wrapper" style="padding-left: 0;">
            <select id="newTerm" style="padding-left: 1rem;">
              <option value="30" selected>30 Years Fixed</option>
              <option value="20">20 Years Fixed</option>
              <option value="15">15 Years Fixed</option>
            </select>
          </div>
        </div>
      </div>

      <div class="grid-2-col">
        <div class="input-group">
          <label for="closingCosts">Refinance Closing Costs ($)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="closingCosts" value="4800" step="250">
          </div>
        </div>
        <div class="input-group">
          <label for="rollCosts">Roll Costs into Loan?</label>
          <div class="input-wrapper" style="padding-left: 0;">
            <select id="rollCosts" style="padding-left: 1rem;">
              <option value="no" selected>No (Pay Cash at Close)</option>
              <option value="yes">Yes (Add to Loan Balance)</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="results-panel">
      <div>
        <div class="refi-hero-card">
          <div class="label">Monthly Payment Savings</div>
          <div class="val-main" id="resMonthlySavings">$309 / mo</div>
          <div class="val-sub" id="resNewPi">New Payment: $2,067 / mo</div>
        </div>

        <div class="breakdown-row"><span>Exact Break-Even Timeline:</span><span id="resBreakEvenMonths" style="color:#38bdf8;">16 Months (1.3 Yrs)</span></div>
        <div class="breakdown-row"><span>5-Year Net Cash Saved:</span><span id="res5YrSavings" style="color:#34d399;">$13,740</span></div>
        <div class="breakdown-row"><span>Total Lifetime Interest Saved:</span><span id="resLifetimeInterest" style="color:#fbbf24;">$44,820</span></div>
        <div class="breakdown-row"><span>Current Lifetime Interest Left:</span><span id="resCurrentTotalInterest">$429,456</span></div>
        <div class="breakdown-row"><span>New Lifetime Interest:</span><span id="resNewTotalInterest">$404,120</span></div>
      </div>

      <div style="border-top: 1px solid rgba(255,255,255,0.15); padding-top: 1rem; text-align: center;">
        <div style="font-size: 0.8rem; color: #bae6fd;">Refinance Verdict:</div>
        <div style="font-size: 1.25rem; font-weight: 800; color: #34d399;" id="resVerdict">Highly Recommended &mdash; Fast Payback</div>
      </div>
    </div>
  </div>

  <div class="calculator-content-body">
    <div class="quick-answer-card">
      <h2>How to Determine If Refinancing Makes Sense in <?php echo $currentYear; ?></h2>
      <p>Refinancing is financially worthwhile if you plan to live in the property longer than your <strong>Break-Even Timeline</strong> (Total Closing Costs / Monthly Savings). If closing costs are <strong>$4,800</strong> and your monthly payment drops by <strong>$309/month</strong>, you break even in <strong>16 months</strong>, pocketing pure monthly savings thereafter.</p>
    </div>

    <h2>Interest Rate Drop vs. Monthly Savings Benchmark Table</h2>
    <p>The table below models monthly payment reductions and break-even timelines for a $350,000 mortgage starting from a 7.25% interest rate, assuming $4,500 in closing costs:</p>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>New Interest Rate</th>
            <th>Rate Reduction</th>
            <th>New Monthly P&amp;I</th>
            <th>Monthly Savings</th>
            <th>Break-Even Point</th>
          </tr>
        </thead>
        <tbody>
          <tr><td><strong>6.750%</strong></td><td>-0.500%</td><td>$2,270 / mo</td><td>-$119 / mo</td><td>38 Months (3.2 Yrs)</td></tr>
          <tr><td><strong>6.500%</strong></td><td>-0.750%</td><td>$2,212 / mo</td><td>-$177 / mo</td><td>25 Months (2.1 Yrs)</td></tr>
          <tr><td><strong>6.250%</strong></td><td>-1.000%</td><td>$2,155 / mo</td><td>-$234 / mo</td><td>19 Months (1.6 Yrs)</td></tr>
          <tr><td><strong>6.000%</strong></td><td>-1.250%</td><td>$2,098 / mo</td><td>-$291 / mo</td><td>15 Months (1.3 Yrs)</td></tr>
          <tr><td><strong>5.750%</strong></td><td>-1.500%</td><td>$2,042 / mo</td><td>-$347 / mo</td><td>13 Months (1.1 Yrs)</td></tr>
          <tr><td><strong>5.500%</strong></td><td>-1.750%</td><td>$1,987 / mo</td><td>-$402 / mo</td><td>11 Months (0.9 Yrs)</td></tr>
        </tbody>
      </table>
    </div>

    <h2>The Amortization Reset Trap: 30-Year vs. 15-Year Refinance</h2>
    <p>One major pitfall in mortgage refinancing is <strong>resetting the 30-year amortization clock</strong>. If you are 5 years into a 30-year loan, you have already paid off a portion of principal. Refinancing into a new 30-year loan stretches your debt over 35 total years, which can increase lifetime interest even with a lower monthly payment.</p>
    
    <h3>How to Avoid the Amortization Reset:</h3>
    <ul>
      <li><strong>Refinance into a 20-Year or 15-Year Loan:</strong> 15-year fixed loans offer interest rates 0.50% to 0.75% lower than 30-year loans, building equity exponentially faster.</li>
      <li><strong>Apply Monthly Savings to Principal:</strong> Take the $200-$300/month saved on your new loan and set up an automatic extra monthly principal payment to maintain your original payoff target date.</li>
    </ul>

    <h2>Frequently Asked Questions (FAQ)</h2>
    <div class="faq-item">
      <h4>How do you calculate the break-even point on a mortgage refinance?</h4>
      <p>Divide your total refinance closing costs by your monthly payment savings: Break-Even (Months) = Total Refinance Closing Costs / Monthly Savings. If refinancing costs $4,000 and saves $200/month, break-even is 20 months.</p>
    </div>
    <div class="faq-item">
      <h4>Is it worth refinancing for a 0.5% or 0.75% lower interest rate?</h4>
      <p>Yes, on loan balances over $300,000, lowering your interest rate by 0.50% to 0.75% saves $120 to $200+ per month, making refinancing worthwhile if you stay past your break-even period.</p>
    </div>
    <div class="faq-item">
      <h4>What is the danger of resetting the 30-year mortgage clock?</h4>
      <p>Refinancing into a new 30-year loan resets your amortization schedule back to Year 1, potentially increasing total lifetime interest paid unless you choose a 15-year/20-year term or make extra principal payments.</p>
    </div>
    <div class="faq-item">
      <h4>What are typical closing costs to refinance a mortgage in 2026?</h4>
      <p>Refinance closing costs typically range from 2% to 4% of the loan balance ($3,500 to $8,000 on a $300,000 loan) covering lender fees, appraisal, title search, and recording charges.</p>
    </div>
    <div class="faq-item">
      <h4>What is a 'no-closing-cost' refinance?</h4>
      <p>In a no-closing-cost refinance, closing costs are either added into your loan principal balance or absorbed by the lender in exchange for a slightly higher interest rate (0.25% to 0.50% higher APR).</p>
    </div>
    <div class="faq-item">
      <h4>What is the difference between a rate-and-term refinance and a cash-out refinance?</h4>
      <p>A rate-and-term refinance only adjusts interest rate or loan duration. A cash-out refinance borrows against your accumulated equity, paying you liquid cash at closing.</p>
    </div>
    <div class="faq-item">
      <h4>Can you remove PMI with a mortgage refinance?</h4>
      <p>Yes. If your current loan balance is 80% or less of your property market value, refinancing into a conventional mortgage eliminates monthly Private Mortgage Insurance (PMI) or FHA MIP.</p>
    </div>
    <div class="faq-item">
      <h4>How soon can you refinance after buying a home?</h4>
      <p>Rate-and-term refinances often have no federal waiting period (though lenders may require 6 months seasoning for new appraisals). Cash-out refinances typically require 6 to 12 months ownership.</p>
    </div>

    <h2>Explore Related Refinance &amp; Amortization Tools</h2>
    <ul>
      <li><a href="/loan-calculators/refinance-break-even-calculator">Refinance Break-Even Calculator</a> &mdash; Specialized tool modeling break-even timelines and rate thresholds.</li>
      <li><a href="/loan-calculators/amortization-calculator">Amortization Calculator</a> &mdash; Month-by-month payment schedule with extra payment savings.</li>
      <li><a href="/loan-calculators/heloc-calculator">HELOC Calculator</a> &mdash; Compare taking a Home Equity Line of Credit vs refinancing.</li>
      <li><a href="/real-estate/mortgage-calculator">Mortgage Payment Calculator</a> &mdash; Calculate full PITI housing payments and amortization.</li>
    </ul>
  </div>
</main>

<script>
function calculateRefi() {
  var balance = parseFloat(document.getElementById('currentBalance').value) || 0;
  var curRate = (parseFloat(document.getElementById('currentRate').value) || 7.25) / 100;
  var curRemYears = parseInt(document.getElementById('currentTermRemaining').value) || 27;
  var curPi = parseFloat(document.getElementById('currentMonthlyPi').value) || 0;

  var newRate = (parseFloat(document.getElementById('newRate').value) || 6.125) / 100;
  var newYears = parseInt(document.getElementById('newTerm').value) || 30;
  var closingCosts = parseFloat(document.getElementById('closingCosts').value) || 4800;
  var roll = document.getElementById('rollCosts').value;

  var newLoanAmt = roll === 'yes' ? (balance + closingCosts) : balance;
  var effectiveCosts = roll === 'yes' ? closingCosts : closingCosts;

  var r = newRate / 12;
  var n = newYears * 12;
  var newPi = 0;
  var newTotalInterest = 0;

  if (r > 0 && n > 0 && newLoanAmt > 0) {
    newPi = newLoanAmt * (r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);
    newTotalInterest = (newPi * n) - newLoanAmt;
  }

  var monthlySavings = curPi - newPi;
  var breakEvenMonths = monthlySavings > 0 ? Math.ceil(effectiveCosts / monthlySavings) : 0;
  var fiveYearSavings = (monthlySavings * 60) - effectiveCosts;

  var curTotalRemainingPayments = curPi * (curRemYears * 12);
  var curTotalInterest = Math.max(0, curTotalRemainingPayments - balance);
  var lifetimeInterestSaved = curTotalInterest - newTotalInterest;

  document.getElementById('resMonthlySavings').textContent = monthlySavings > 0 ? ('$' + Math.round(monthlySavings).toLocaleString() + ' / mo') : '-$' + Math.round(Math.abs(monthlySavings)).toLocaleString() + ' / mo';
  document.getElementById('resNewPi').textContent = 'New Payment: $' + Math.round(newPi).toLocaleString() + ' / mo';
  
  if (monthlySavings > 0) {
    var beYears = (breakEvenMonths / 12).toFixed(1);
    document.getElementById('resBreakEvenMonths').textContent = breakEvenMonths + ' Months (' + beYears + ' Yrs)';
    document.getElementById('resVerdict').textContent = breakEvenMonths <= 24 ? 'Highly Recommended — Fast Payback' : 'Moderate Benefit — Longer Horizon';
    document.getElementById('resVerdict').style.color = '#34d399';
  } else {
    document.getElementById('resBreakEvenMonths').textContent = 'No Break-Even (Payment Increases)';
    document.getElementById('resVerdict').textContent = 'Not Recommended — Higher Monthly Payment';
    document.getElementById('resVerdict').style.color = '#f87171';
  }

  document.getElementById('res5YrSavings').textContent = fiveYearSavings > 0 ? ('+$' + Math.round(fiveYearSavings).toLocaleString()) : '-$' + Math.round(Math.abs(fiveYearSavings)).toLocaleString();
  document.getElementById('resLifetimeInterest').textContent = lifetimeInterestSaved > 0 ? ('+$' + Math.round(lifetimeInterestSaved).toLocaleString()) : '-$' + Math.round(Math.abs(lifetimeInterestSaved)).toLocaleString();
  document.getElementById('resCurrentTotalInterest').textContent = '$' + Math.round(curTotalInterest).toLocaleString();
  document.getElementById('resNewTotalInterest').textContent = '$' + Math.round(newTotalInterest).toLocaleString();
}

document.querySelectorAll('#currentBalance, #currentRate, #currentTermRemaining, #currentMonthlyPi, #newRate, #newTerm, #closingCosts, #rollCosts').forEach(function(el) {
  el.addEventListener('input', calculateRefi);
  el.addEventListener('change', calculateRefi);
});
calculateRefi();
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
