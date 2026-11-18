<?php
$currentYear = date('Y');
$pageTitle = "Hard Money Loan Calculator ($currentYear) | Fix & Flip Rates, Points & Profit";
$metaDescription = "Free hard money loan calculator $currentYear. Calculate origination points, rehab draw schedules, Dutch interest, holding costs, and net fix-and-flip ROI.";
$metaKeywords = 'hard money loan calculator, fix and flip calculator, hard money interest rate, rehab loan calculator, private money loan, arv loan calculator, hard money points';
$schemaData = json_decode(<<<'EOD'
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "HowTo",
      "name": "How to Calculate Hard Money Loan Costs and Fix-and-Flip Profit",
      "step": [
        {
          "@type": "HowToStep",
          "name": "Enter purchase price and After Repair Value (ARV)",
          "text": "Input the acquisition purchase price and projected post-renovation After Repair Value (ARV)."
        },
        {
          "@type": "HowToStep",
          "name": "Input renovation budget and financing percentage",
          "text": "Provide total rehab construction costs and select Loan-to-Cost (LTC) or Loan-to-ARV financing caps."
        },
        {
          "@type": "HowToStep",
          "name": "Set interest rate, loan points, and holding period",
          "text": "Enter the hard money interest rate (10%-14%), lender origination points (1-3 pts), and planned holding horizon in months."
        },
        {
          "@type": "HowToStep",
          "name": "Configure interest calculation method",
          "text": "Choose between Dutch interest (charged on total facility) or As-Drawn interest (charged only on disbursed funds)."
        },
        {
          "@type": "HowToStep",
          "name": "Review total financing costs and net profit ROI",
          "text": "Analyze upfront points, total holding costs, net cash required, project profit, and annualized ROI."
        }
      ]
    },
    {
      "@type": "WebApplication",
      "@id": "https://americacalculator.com/loan-calculators/hard-money-loan-calculator#app",
      "name": "Hard Money Loan Calculator",
      "url": "https://americacalculator.com/loan-calculators/hard-money-loan-calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "All",
      "offer": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "description": "Calculate hard money interest, origination points, rehab draw schedules, holding costs, and fix-and-flip investor ROI."
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://americacalculator.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Loan Calculators",
          "item": "https://americacalculator.com/loan-calculators/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Hard Money Loan Calculator",
          "item": "https://americacalculator.com/loan-calculators/hard-money-loan-calculator"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://americacalculator.com/loan-calculators/hard-money-loan-calculator#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What are typical hard money loan interest rates and points in 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Hard money interest rates currently range from 9.99% to 13.50% depending on borrower experience (number of verified completed flips) and project leverage. Lenders also charge 1.0 to 3.0 origination points (1 point = 1% of the total loan amount) payable at closing, with terms typically spanning 6 to 18 months."
          }
        },
        {
          "@type": "Question",
          "name": "What is Dutch interest in hard money lending?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Dutch interest is a hard money lending practice where interest is charged on the entire loan commitment (purchase loan plus 100% of the undisbursed rehab escrow holdback) from day one. In contrast, 'As-Drawn' interest only charges you interest on the funds actually disbursed into your bank account as renovation milestones are completed."
          }
        },
        {
          "@type": "Question",
          "name": "What is the 70% rule in house flipping?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The 70% rule states that an investor should pay no more than 70% of the estimated After Repair Value (ARV) minus the total renovation cost: Max Purchase Price = (ARV × 0.70) - Rehab Budget. This formula guarantees a 30% margin to cover hard money interest, closing costs, realtor commissions, and profit."
          }
        },
        {
          "@type": "Question",
          "name": "How do hard money rehab draw schedules work?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Hard money lenders hold the renovation budget in an escrow account. The investor completes work out of pocket or using credit, and requests a draw reimbursement. The lender dispatches a third-party inspector ($150-$350 inspection fee per draw) to verify completed work before releasing funds via wire within 24 to 48 hours."
          }
        },
        {
          "@type": "Question",
          "name": "How quickly can a hard money loan close?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Hard money loans can close in as little as 5 to 10 business days. Because approval is asset-based (evaluating property ARV and equity margin rather than tax returns and employment verification), the underwriting and desktop valuation process is significantly faster than conventional mortgages."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Loan-to-Cost (LTC) and Loan-to-ARV?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Loan-to-Cost (LTC) measures the loan amount against the total acquisition plus renovation budget (typically capped at 85% to 90% LTC). Loan-to-ARV caps the maximum loan relative to the projected future value (typically capped at 65% to 75% ARV). Lenders approve the lesser of the two calculations."
          }
        },
        {
          "@type": "Question",
          "name": "What credit score do you need for a hard money loan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Hard money lenders typically look for a minimum credit score of 620 to 660. However, experience is valued more heavily than credit: an investor with 5+ successful flips in the past 24 months will receive prime rates and higher leverage even with moderate credit."
          }
        },
        {
          "@type": "Question",
          "name": "How do real estate investors exit a hard money loan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "There are two primary exit strategies: (1) Fix & Flip: Sell the renovated property on the MLS, paying off the hard money principal and pocketing the net profit; or (2) BRRRR Strategy: Refinance the hard money loan into a long-term 30-year DSCR rental loan based on the new appraised value, keeping the property as a cash-flowing asset."
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
  --primary: #c2410c;
  --primary-hover: #9a3412;
  --primary-light: #ffedd5;
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
.results-panel { background: #7c2d12; color: #ffffff; border-radius: var(--radius); padding: 2rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 25px rgba(124,45,18,0.25); }
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
.input-wrapper input:focus, .input-wrapper select:focus { border-color: var(--primary); box-shadow: 0 0 0 4px rgba(194,65,12,0.1); }
.grid-2-col { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
.hard-hero-card {
  background: rgba(251, 146, 60, 0.2);
  border: 1px solid rgba(251, 146, 60, 0.4);
  border-radius: 14px;
  padding: 1.5rem;
  text-align: center;
  margin-bottom: 1.5rem;
}
.hard-hero-card .label { font-size: 0.82rem; color: #fed7aa; font-weight: 700; text-transform: uppercase; }
.hard-hero-card .val-main { font-size: 2.5rem; font-weight: 800; color: #ffedd5; margin: 0.25rem 0; line-height: 1; }
.hard-hero-card .val-sub { font-size: 0.88rem; color: #fed7aa; }
.breakdown-row { display: flex; justify-content: space-between; font-size: 0.95rem; padding: 0.55rem 0; border-bottom: 1px solid rgba(255, 255, 255, 0.08); }
.breakdown-row:last-child { border-bottom: none; }
.breakdown-row span:first-child { color: #fed7aa; }
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
.quick-answer-card { background: #fff7ed; border-left: 4px solid #ea580c; padding: 1.5rem; border-radius: 0 8px 8px 0; margin-bottom: 2rem; }
.quick-answer-card h2 { font-size: 1.35rem; color: #9a3412; margin: 0 0 0.5rem; border: none; padding: 0; }
.quick-answer-card p { color: #c2410c; margin: 0; }
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
    <h1>Hard Money Loan Calculator (<?php echo $currentYear; ?>)</h1>
    <p>Calculate hard money loan interest, origination points, rehab draw holdbacks, holding costs, and net fix-and-flip investor profit and ROI.</p>
  </div>

  <div class="calculator-container">
    <div class="form-panel">
      <div class="section-subtitle">1. Property Acquisition &amp; ARV</div>
      
      <div class="grid-2-col">
        <div class="input-group">
          <label for="hmPurchase">Purchase Price ($)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="hmPurchase" value="280000" step="5000">
          </div>
        </div>
        <div class="input-group">
          <label for="hmArv">After Repair Value (ARV) ($)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="hmArv" value="440000" step="5000">
          </div>
        </div>
      </div>

      <div class="grid-2-col">
        <div class="input-group">
          <label for="hmRehab">Renovation Budget ($)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="hmRehab" value="60000" step="2500">
          </div>
        </div>
        <div class="input-group">
          <label for="hmLtc">Lender Loan-to-Cost (LTC %)</label>
          <div class="input-wrapper">
            <input type="number" id="hmLtc" value="85" min="50" max="95" step="5" style="padding-left: 1rem;">
            <span class="input-suffix">%</span>
          </div>
        </div>
      </div>

      <div class="section-subtitle" style="margin-top: 1.75rem;">2. Hard Money Loan Terms</div>

      <div class="grid-2-col">
        <div class="input-group">
          <label for="hmRate">Interest Rate (APR %)</label>
          <div class="input-wrapper">
            <input type="number" id="hmRate" value="11.5" step="0.25" style="padding-left: 1rem;">
            <span class="input-suffix">%</span>
          </div>
        </div>
        <div class="input-group">
          <label for="hmPoints">Origination Points (%)</label>
          <div class="input-wrapper">
            <input type="number" id="hmPoints" value="2.0" step="0.5" style="padding-left: 1rem;">
            <span class="input-suffix">pts</span>
          </div>
        </div>
      </div>

      <div class="grid-2-col">
        <div class="input-group">
          <label for="hmHoldMonths">Project Holding Period</label>
          <div class="input-wrapper" style="padding-left: 0;">
            <select id="hmHoldMonths" style="padding-left: 1rem;">
              <option value="4">4 Months (Fast Flip)</option>
              <option value="6" selected>6 Months (Standard Rehab)</option>
              <option value="9">9 Months (Extensive Remodel)</option>
              <option value="12">12 Months (Major Addition / Gut)</option>
            </select>
          </div>
        </div>
        <div class="input-group">
          <label for="hmInterestType">Interest Method</label>
          <div class="input-wrapper" style="padding-left: 0;">
            <select id="hmInterestType" style="padding-left: 1rem;">
              <option value="drawn" selected>As-Drawn (50% Avg Rehab Drawn)</option>
              <option value="dutch">Dutch Interest (Charged on 100% Day 1)</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="results-panel">
      <div>
        <div class="hard-hero-card">
          <div class="label">Projected Net Fix &amp; Flip Profit</div>
          <div class="val-main" id="resNetProfit">$48,460</div>
          <div class="val-sub" id="resRoiPct">Total ROI: 71.3% | Annualized ROI: 142.5%</div>
        </div>

        <div class="breakdown-row"><span>Total Loan Commitment:</span><span id="resLoanAmt" style="color:#ffedd5;">$289,000</span></div>
        <div class="breakdown-row"><span>Monthly Interest Payment:</span><span id="resMonthlyInterest">$2,492 / mo</span></div>
        <div class="breakdown-row"><span>Lender Points &amp; Doc Fees:</span><span id="resPointsFee">$7,280</span></div>
        <div class="breakdown-row"><span>Cumulative Holding Interest:</span><span id="resTotalInterest">$14,950</span></div>
        <div class="breakdown-row"><span>Total Out-of-Pocket Cash Required:</span><span id="resCashRequired" style="color:#fed7aa;">$68,000</span></div>
      </div>

      <div style="border-top: 1px solid rgba(255,255,255,0.15); padding-top: 1rem; text-align: center;">
        <div style="font-size: 0.8rem; color: #fed7aa;">Maximum Loan-to-ARV Ratio:</div>
        <div style="font-size: 1.35rem; font-weight: 800; color: #ffedd5;" id="resLtArv">65.7% (Safe Buffer)</div>
      </div>
    </div>
  </div>

  <div class="calculator-content-body">
    <div class="quick-answer-card">
      <h2>Hard Money Lending Architecture for Real Estate Investors (<?php echo $currentYear; ?>)</h2>
      <p>Hard money loans are short-term (6 to 18 months), asset-based loans used by real estate investors to acquire and renovate distressed residential properties. Lenders charge <strong>10% to 14% interest</strong> and <strong>1 to 3 points</strong> upfront, funding up to <strong>85%–90% of total project cost (LTC)</strong> and up to <strong>70%–75% of After Repair Value (ARV)</strong>.</p>
    </div>

    <h2>Hard Money vs. Private Money vs. DSCR Long-Term Financing</h2>
    <p>Understanding which capital source fits each phase of your investment strategy is critical for maximizing returns and minimizing capital costs:</p>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>Loan Type</th>
            <th>Interest Rates</th>
            <th>Origination Points</th>
            <th>Speed to Close</th>
            <th>Primary Underwriting Focus</th>
          </tr>
        </thead>
        <tbody>
          <tr><td><strong>Hard Money Loan</strong></td><td>10.0% - 13.5%</td><td>1.5 - 3.0 pts</td><td>5 - 10 Days</td><td>Asset ARV, Equity Spread, Track Record</td></tr>
          <tr><td><strong>Private Money (Individual)</strong></td><td>8.0% - 12.0%</td><td>0.0 - 2.0 pts</td><td>2 - 7 Days</td><td>Personal Relationship, Trust, Deal Margin</td></tr>
          <tr><td><strong>DSCR Rental Loan</strong></td><td>6.75% - 8.25%</td><td>0.5 - 1.5 pts</td><td>21 - 30 Days</td><td>Stabilized Rental Cash Flow (1.20x+ DSCR)</td></tr>
          <tr><td><strong>Conventional Bank Mortgage</strong></td><td>6.25% - 7.50%</td><td>0.0 - 1.0 pts</td><td>30 - 45 Days</td><td>W-2 Income, Tax Returns, DTI Ratios</td></tr>
        </tbody>
      </table>
    </div>

    <h2>The 70% Rule in House Flipping Explained</h2>
    <p>Professional fix-and-flip investors rely on the <strong>70% Rule of Real Estate</strong> to screen wholesale and MLS deals rapidly before making offers:</p>
    <p><code>Maximum Allowable Offer (MAO) = (After Repair Value &times; 0.70) - Renovation Budget</code></p>
    <ul>
      <li><strong>Example:</strong> If a distressed home has a realistic post-renovation ARV of $400,000 and requires $50,000 in kitchen, bathroom, and roof updates: <code>MAO = ($400,000 &times; 0.70) - $50,000 = $230,000</code>.</li>
      <li><strong>Where does the 30% margin go?</strong> Hard money financing costs (~5%), buying &amp; selling realtor commissions (~6%), transfer taxes &amp; title insurance (~3%), holding utilities &amp; insurance (~2%), and investor net profit (~14%).</li>
    </ul>

    <h2>Dutch Interest vs. As-Drawn Interest: How to Avoid Overpaying</h2>
    <p>When reviewing hard money term sheets, pay close attention to how interest is calculated on your <strong>rehab escrow holdback</strong>:</p>
    <ul>
      <li><strong>As-Drawn Interest (Investor Friendly):</strong> You only pay monthly interest on the funds actually in your possession. On a $60,000 rehab budget released across 4 draws over 6 months, you only pay interest on an average of ~$30,000.</li>
      <li><strong>Dutch Interest (Lender Friendly):</strong> The lender charges interest on the entire $60,000 rehab facility from day one, regardless of whether you have drawn it. On an 11.5% loan over 6 months, Dutch interest costs an extra <strong>$1,725 in phantom interest</strong>.</li>
    </ul>

    <h2>Frequently Asked Questions (FAQ)</h2>
    <div class="faq-item">
      <h4>What are typical hard money loan interest rates and points in 2026?</h4>
      <p>Hard money rates range from 9.99% to 13.50% depending on experience and leverage. Lenders charge 1.0 to 3.0 origination points (1 point = 1% of loan amount) payable at closing, with terms spanning 6 to 18 months.</p>
    </div>
    <div class="faq-item">
      <h4>What is Dutch interest in hard money lending?</h4>
      <p>Dutch interest is where interest is charged on the entire loan facility (including undisbursed rehab funds) from day one. In contrast, As-Drawn interest only charges you on funds actually disbursed.</p>
    </div>
    <div class="faq-item">
      <h4>What is the 70% rule in house flipping?</h4>
      <p>The 70% rule states an investor should pay no more than 70% of estimated ARV minus rehab costs: Max Purchase Price = (ARV × 0.70) - Rehab Budget, guaranteeing a buffer for financing, closing, and profit.</p>
    </div>
    <div class="faq-item">
      <h4>How do hard money rehab draw schedules work?</h4>
      <p>The lender holds the rehab budget in escrow. The investor completes a milestone, requests a draw, and the lender dispatches an inspector to verify work before wiring funds within 24 to 48 hours.</p>
    </div>
    <div class="faq-item">
      <h4>How quickly can a hard money loan close?</h4>
      <p>Hard money loans can close in 5 to 10 business days. Approval is asset-based (evaluating ARV and equity spread rather than personal tax returns), allowing rapid closing.</p>
    </div>
    <div class="faq-item">
      <h4>What is the difference between Loan-to-Cost (LTC) and Loan-to-ARV?</h4>
      <p>LTC measures the loan against total acquisition plus renovation costs (up to 85%-90% LTC). Loan-to-ARV caps the loan relative to post-renovation value (up to 65%-75% ARV). Lenders approve the lesser of the two.</p>
    </div>
    <div class="faq-item">
      <h4>What credit score do you need for a hard money loan?</h4>
      <p>Lenders look for a minimum credit score of 620 to 660, but borrower flipping experience is weighted more heavily than personal credit scores.</p>
    </div>
    <div class="faq-item">
      <h4>How do real estate investors exit a hard money loan?</h4>
      <p>Two primary exits: (1) Fix & Flip: Sell the property on the MLS, pay off the loan, and collect net profit; or (2) BRRRR Strategy: Refinance into a long-term 30-year DSCR rental loan based on the new appraised value.</p>
    </div>

    <h2>Explore Related Real Estate &amp; Loan Calculators</h2>
    <ul>
      <li><a href="/real-estate/dscr-calculator">DSCR Loan Calculator</a> &mdash; Plan your long-term rental refinance exit strategy.</li>
      <li><a href="/loan-calculators/commercial-loan-calculator">Commercial Loan Calculator</a> &mdash; Model balloon maturities and debt yield on multi-unit commercial assets.</li>
      <li><a href="/real-estate/closing-cost-calculator">Closing Cost Calculator</a> &mdash; Estimate acquisition closing costs across all 50 states.</li>
      <li><a href="/real-estate/roi-calculator">Real Estate ROI Calculator</a> &mdash; Analyze annualized returns, cash flow, and equity growth.</li>
    </ul>
  </div>
</main>

<script>
function calculateHardMoney() {
  var purchase = parseFloat(document.getElementById('hmPurchase').value) || 0;
  var arv = parseFloat(document.getElementById('hmArv').value) || 0;
  var rehab = parseFloat(document.getElementById('hmRehab').value) || 0;
  var ltcPct = (parseFloat(document.getElementById('hmLtc').value) || 85) / 100;
  var rate = (parseFloat(document.getElementById('hmRate').value) || 11.5) / 100;
  var points = (parseFloat(document.getElementById('hmPoints').value) || 2.0) / 100;
  var months = parseInt(document.getElementById('hmHoldMonths').value) || 6;
  var intType = document.getElementById('hmInterestType').value;

  var totalCostBasis = purchase + rehab;
  var loanAmount = totalCostBasis * ltcPct;
  var maxArvCap = arv * 0.75;
  loanAmount = Math.min(loanAmount, maxArvCap);

  var pointsFee = (loanAmount * points) + 1500; // points + doc/admin fee

  // Interest calculation
  var monthlyInterest = 0;
  var totalHoldingInterest = 0;

  if (intType === 'dutch') {
    monthlyInterest = (loanAmount * rate) / 12;
    totalHoldingInterest = monthlyInterest * months;
  } else {
    // As-drawn: assume purchase funded 100%, rehab average 50% drawn
    var purchaseFunded = Math.min(loanAmount, purchase * ltcPct);
    var rehabFunded = loanAmount - purchaseFunded;
    var avgDrawnLoan = purchaseFunded + (rehabFunded * 0.5);
    monthlyInterest = (avgDrawnLoan * rate) / 12;
    totalHoldingInterest = monthlyInterest * months;
  }

  var sellingCosts = arv * 0.06; // 5% agent + 1% transfer/title at exit
  var buyerClosingCosts = purchase * 0.03; // 3% title/escrow at acquisition
  var holdingUtilities = months * 450; // $450/mo taxes/insurance/utilities

  var cashRequired = (totalCostBasis - loanAmount) + pointsFee + buyerClosingCosts;
  var totalExpenses = totalCostBasis + pointsFee + totalHoldingInterest + sellingCosts + buyerClosingCosts + holdingUtilities;
  var netProfit = arv - totalExpenses;
  var totalRoi = cashRequired > 0 ? (netProfit / cashRequired) * 100 : 0;
  var annualizedRoi = months > 0 ? (totalRoi * (12 / months)) : 0;
  var ltArv = arv > 0 ? (loanAmount / arv) * 100 : 0;

  document.getElementById('resNetProfit').textContent = '$' + Math.round(netProfit).toLocaleString();
  document.getElementById('resRoiPct').textContent = 'Total ROI: ' + totalRoi.toFixed(1) + '% | Annualized ROI: ' + annualizedRoi.toFixed(1) + '%';
  document.getElementById('resLoanAmt').textContent = '$' + Math.round(loanAmount).toLocaleString();
  document.getElementById('resMonthlyInterest').textContent = '$' + Math.round(monthlyInterest).toLocaleString() + ' / mo';
  document.getElementById('resPointsFee').textContent = '$' + Math.round(pointsFee).toLocaleString();
  document.getElementById('resTotalInterest').textContent = '$' + Math.round(totalHoldingInterest).toLocaleString();
  document.getElementById('resCashRequired').textContent = '$' + Math.round(cashRequired).toLocaleString();
  document.getElementById('resLtArv').textContent = ltArv.toFixed(1) + '% (' + (ltArv <= 70 ? 'Safe Buffer' : 'High Leverage') + ')';
}

document.querySelectorAll('#hmPurchase, #hmArv, #hmRehab, #hmLtc, #hmRate, #hmPoints, #hmHoldMonths, #hmInterestType').forEach(function(el) {
  el.addEventListener('input', calculateHardMoney);
  el.addEventListener('change', calculateHardMoney);
});
calculateHardMoney();
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
