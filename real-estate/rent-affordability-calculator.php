<?php
$currentYear = date('Y');
$pageTitle = "Rent Affordability Calculator ($currentYear) | How Much Rent Can I Afford?";
$metaDescription = "Calculate how much rent you can afford based on your salary. Compare the 30% rule, the 40x rent landlord qualification rule, and the 50/30/20 budget framework.";
$schemaData = json_decode(<<<'EOD'
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "HowTo",
      "name": "How to Calculate How Much Rent You Can Afford",
      "step": [
        {
          "@type": "HowToStep",
          "name": "Enter gross annual or monthly income",
          "text": "Input your total pre-tax salary, hourly wages, or combined household income."
        },
        {
          "@type": "HowToStep",
          "name": "Select budgeting rule",
          "text": "Choose between the 30% gross income rule, 40x rent rule, or 50/30/20 balanced budget."
        },
        {
          "@type": "HowToStep",
          "name": "Enter recurring monthly debts",
          "text": "Deduct student loans, car notes, and minimum credit card payments for a debt-adjusted budget."
        },
        {
          "@type": "HowToStep",
          "name": "View recommended maximum rent",
          "text": "See safe, moderate, and stretch monthly rent targets tailored to your cash flow."
        },
        {
          "@type": "HowToStep",
          "name": "Compare across US metro benchmarks",
          "text": "Check average apartment rental costs across major US cities against your budget."
        }
      ]
    },
    {
      "@type": "WebApplication",
      "@id": "https://americacalculator.com/real-estate/rent-affordability-calculator#app",
      "name": "Rent Affordability Calculator",
      "url": "https://americacalculator.com/real-estate/rent-affordability-calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "All",
      "offer": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "description": "Calculate maximum sustainable rent using the 30% gross income rule, 40x landlord income rule, and monthly debt deductions."
    },
    {
      "@type": "FAQPage",
      "@id": "https://americacalculator.com/real-estate/rent-affordability-calculator#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the 40x rent rule used by landlords?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The 40x rent rule states that your annual gross income must be at least 40 times your monthly rent. To calculate maximum allowable rent, divide your annual gross salary by 40 (e.g., an $80,000 salary / 40 = $2,000 maximum monthly rent). This ensures your rent consumes no more than 30% of your gross annual earnings."
          }
        },
        {
          "@type": "Question",
          "name": "What is the 30% rule of rent affordability?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The 30% rule recommends that your monthly rent should not exceed 30% of your gross monthly income before taxes. If your monthly gross income is $6,000, your target rent should be $1,800 or less."
          }
        },
        {
          "@type": "Question",
          "name": "Should rent be calculated from gross or net pay?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Landlords and property managers screen applications using gross income (before taxes) for approval. However, for personal budgeting, financial experts recommend budgeting rent against your net take-home pay, keeping total housing costs below 30% to 35% of take-home earnings."
          }
        },
        {
          "@type": "Question",
          "name": "How do monthly debt payments affect rent affordability?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "High recurring consumer debts (student loans, car payments, minimum credit card payments) reduce your discretionary cash flow. Under a debt-adjusted budgeting model, total debt payments plus rent should not exceed 43% to 45% of your gross income."
          }
        },
        {
          "@type": "Question",
          "name": "What is the 50/30/20 budgeting rule for rent?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The 50/30/20 rule allocates 50% of your net take-home pay to essential needs (rent, utilities, groceries, transportation), 30% to discretionary wants (dining out, entertainment), and 20% to savings and debt reduction. Rent should ideally make up no more than 60% of your needs bucket (approx. 30% of take-home pay)."
          }
        },
        {
          "@type": "Question",
          "name": "What credit score is required to rent an apartment in 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most institutional property management companies look for a minimum FICO credit score of 620 to 650. Competitive metropolitan markets (NYC, San Francisco, Boston) often expect 700+. Scores below 620 usually require a guarantor, co-signer, or higher security deposit."
          }
        },
        {
          "@type": "Question",
          "name": "How much should you have saved in emergency funds before renting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Financial advisors recommend having 3 to 6 months of total living expenses (rent, utilities, food, debts) in an accessible high-yield savings account before signing a new lease, in addition to upfront move-in cash."
          }
        },
        {
          "@type": "Question",
          "name": "What upfront move-in costs are required when signing a lease?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard upfront move-in expenses typically include first month rent, a security deposit (equal to 1 to 2 months rent), application/screening fees ($35-$75 per applicant), and in broker-dominated markets (like NYC), a broker fee (typically 10% to 15% of annual rent)."
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
  --primary: #8b5cf6;
  --primary-hover: #7c3aed;
  --primary-light: #f5f3ff;
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
.results-panel { background: #4c1d95; color: #ffffff; border-radius: var(--radius); padding: 2rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 25px rgba(76,29,149,0.25); }
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
.input-wrapper input:focus, .input-wrapper select:focus { border-color: var(--primary); box-shadow: 0 0 0 4px rgba(139,92,246,0.1); }
.grid-2-col { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
.rent-hero {
  background: rgba(167, 139, 250, 0.15);
  border: 1px solid rgba(167, 139, 250, 0.3);
  border-radius: 14px;
  padding: 1.75rem;
  text-align: center;
  margin-bottom: 1.5rem;
}
.rent-hero .label { font-size: 0.85rem; color: #ddd6fe; font-weight: 700; text-transform: uppercase; }
.rent-hero .val-main { font-size: 2.75rem; font-weight: 800; color: #c4b5fd; margin: 0.25rem 0; line-height: 1; }
.rent-hero .val-sub { font-size: 0.92rem; color: #e9d5ff; }
.breakdown-row { display: flex; justify-content: space-between; font-size: 0.95rem; padding: 0.55rem 0; border-bottom: 1px solid rgba(255, 255, 255, 0.08); }
.breakdown-row:last-child { border-bottom: none; }
.breakdown-row span:first-child { color: #ddd6fe; }
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
.quick-answer-card { background: #f5f3ff; border-left: 4px solid #8b5cf6; padding: 1.5rem; border-radius: 0 8px 8px 0; margin-bottom: 2rem; }
.quick-answer-card h2 { font-size: 1.35rem; color: #5b21b6; margin: 0 0 0.5rem; border: none; padding: 0; }
.quick-answer-card p { color: #6d28d9; margin: 0; }
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
    <h1>Rent Affordability Calculator (<?php echo $currentYear; ?>)</h1>
    <p>Calculate how much rent you can safely afford based on your annual or monthly salary. Compare the 30% gross rule, the landlord 40x rule, and debt-adjusted budgeting.</p>
  </div>

  <div class="calculator-container">
    <div class="form-panel">
      <div class="section-subtitle">1. Income &amp; Salary Settings</div>
      
      <div class="grid-2-col">
        <div class="input-group">
          <label for="grossAnnual">Annual Gross Salary ($)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="grossAnnual" value="85000" step="2500">
          </div>
        </div>
        <div class="input-group">
          <label for="grossMonthly">Or Gross Monthly Pay ($)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="grossMonthly" value="7083" step="250">
          </div>
        </div>
      </div>

      <div class="section-subtitle" style="margin-top: 1.75rem;">2. Monthly Debt Obligations</div>

      <div class="grid-2-col">
        <div class="input-group">
          <label for="studentLoans">Student Loans / Car Notes ($)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="studentLoans" value="450" step="50">
          </div>
        </div>
        <div class="input-group">
          <label for="creditCards">Credit Cards &amp; Other Debt ($)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="creditCards" value="150" step="25">
          </div>
        </div>
      </div>

      <div class="section-subtitle" style="margin-top: 1.75rem;">3. Budgeting Preference</div>
      <div class="grid-2-col">
        <div class="input-group">
          <label for="targetRule">Budgeting Framework</label>
          <div class="input-wrapper" style="padding-left: 0;">
            <select id="targetRule" style="padding-left: 1rem;">
              <option value="30" selected>30% Gross Income Rule</option>
              <option value="40x">40x Landlord Income Rule</option>
              <option value="debt">Debt-Adjusted Rule (Max 43% DTI)</option>
              <option value="503020">50/30/20 Net Pay Budget (28%)</option>
            </select>
          </div>
        </div>
        <div class="input-group">
          <label for="taxRate">Estimated Effective Tax Rate (%)</label>
          <div class="input-wrapper">
            <input type="number" id="taxRate" value="22.0" step="1.0" style="padding-left: 1rem;">
            <span class="input-suffix">%</span>
          </div>
        </div>
      </div>
    </div>

    <div class="results-panel">
      <div>
        <div class="rent-hero">
          <div class="label">Recommended Max Monthly Rent</div>
          <div class="val-main" id="resMaxRent">$2,125</div>
          <div class="val-sub" id="resRuleLabel">Based on 30% of Gross Monthly Income</div>
        </div>

        <div class="breakdown-row"><span>Safe Rent Target (25% Gross):</span><span id="resSafeRent">$1,771 / mo</span></div>
        <div class="breakdown-row"><span>Max Landlord Qualified (40x):</span><span id="resLandlord40x">$2,125 / mo</span></div>
        <div class="breakdown-row"><span>Estimated Net Take-Home Pay:</span><span id="resNetTakeHome">$5,525 / mo</span></div>
        <div class="breakdown-row"><span>Total Monthly Debt Obligations:</span><span id="resTotalDebt" style="color:#fca5a5;">$600 / mo</span></div>
        <div class="breakdown-row"><span>Discretionary Cash Remaining:</span><span id="resRemainingCash" style="color:#34d399;">$2,800 / mo</span></div>
      </div>

      <div style="border-top: 1px solid rgba(255,255,255,0.15); padding-top: 1rem; text-align: center;">
        <div style="font-size: 0.8rem; color: #ddd6fe;">Recommended Upfront Move-In Savings (3x Rent):</div>
        <div style="font-size: 1.35rem; font-weight: 800; color: #c4b5fd;" id="resMoveInCash">$6,375</div>
      </div>
    </div>
  </div>

  <div class="calculator-content-body">
    <div class="quick-answer-card">
      <h2>How Much Rent Can You Afford in <?php echo $currentYear; ?>?</h2>
      <p>The standard guideline is the <strong>30% Rule</strong> (spend no more than 30% of your gross monthly pay on rent) and the landlord <strong>40x Rule</strong> (your annual salary must be at least 40 times the monthly rent). On an <strong>$85,000 annual salary</strong>, your maximum recommended rent is <strong>$2,125 per month</strong>.</p>
    </div>

    <h2>25 Major US Cities: Median Rent vs. Required Salary Table</h2>
    <p>Rental rates differ drastically across US metropolitan areas. The table below outlines median 1-bedroom and 2-bedroom rental costs alongside the minimum annual gross salary needed to qualify under the 40x rule:</p>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>Metropolitan Area</th>
            <th>Median 1-Bed Rent</th>
            <th>Salary Needed (1-Bed)</th>
            <th>Median 2-Bed Rent</th>
            <th>Salary Needed (2-Bed)</th>
          </tr>
        </thead>
        <tbody>
          <tr><td><strong>New York City, NY</strong></td><td>$3,850 / mo</td><td>$154,000 / yr</td><td>$4,600 / mo</td><td>$184,000 / yr</td></tr>
          <tr><td><strong>San Francisco, CA</strong></td><td>$2,950 / mo</td><td>$118,000 / yr</td><td>$3,800 / mo</td><td>$152,000 / yr</td></tr>
          <tr><td><strong>Boston, MA</strong></td><td>$2,800 / mo</td><td>$112,000 / yr</td><td>$3,400 / mo</td><td>$136,000 / yr</td></tr>
          <tr><td><strong>Miami, FL</strong></td><td>$2,500 / mo</td><td>$100,000 / yr</td><td>$3,300 / mo</td><td>$132,000 / yr</td></tr>
          <tr><td><strong>Los Angeles, CA</strong></td><td>$2,400 / mo</td><td>$96,000 / yr</td><td>$3,200 / mo</td><td>$128,000 / yr</td></tr>
          <tr><td><strong>Seattle, WA</strong></td><td>$2,150 / mo</td><td>$86,000 / yr</td><td>$2,850 / mo</td><td>$114,000 / yr</td></tr>
          <tr><td><strong>Washington, DC</strong></td><td>$2,200 / mo</td><td>$88,000 / yr</td><td>$2,900 / mo</td><td>$116,000 / yr</td></tr>
          <tr><td><strong>Denver, CO</strong></td><td>$1,850 / mo</td><td>$74,000 / yr</td><td>$2,450 / mo</td><td>$98,000 / yr</td></tr>
          <tr><td><strong>Austin, TX</strong></td><td>$1,650 / mo</td><td>$66,000 / yr</td><td>$2,150 / mo</td><td>$86,000 / yr</td></tr>
          <tr><td><strong>Atlanta, GA</strong></td><td>$1,650 / mo</td><td>$66,000 / yr</td><td>$2,100 / mo</td><td>$84,000 / yr</td></tr>
          <tr><td><strong>Chicago, IL</strong></td><td>$1,900 / mo</td><td>$76,000 / yr</td><td>$2,500 / mo</td><td>$100,000 / yr</td></tr>
          <tr><td><strong>Dallas, TX</strong></td><td>$1,550 / mo</td><td>$62,000 / yr</td><td>$1,950 / mo</td><td>$78,000 / yr</td></tr>
          <tr><td><strong>Phoenix, AZ</strong></td><td>$1,450 / mo</td><td>$58,000 / yr</td><td>$1,800 / mo</td><td>$72,000 / yr</td></tr>
          <tr><td><strong>Charlotte, NC</strong></td><td>$1,500 / mo</td><td>$60,000 / yr</td><td>$1,850 / mo</td><td>$74,000 / yr</td></tr>
          <tr><td><strong>Columbus, OH</strong></td><td>$1,250 / mo</td><td>$50,000 / yr</td><td>$1,550 / mo</td><td>$62,000 / yr</td></tr>
        </tbody>
      </table>
    </div>

    <h2>40x Rule vs. 30% Rule vs. 50/30/20 Budgeting Rule</h2>
    <p>Financial planners and landlords utilize different metrics to determine rent affordability:</p>
    <ul>
      <li><strong>The 40x Income Rule (Landlord Standard):</strong> Landlords multiply the monthly rent by 40 to determine the minimum gross annual earnings. For instance, a $2,000/month apartment requires $2,000 &times; 40 = $80,000 annual income.</li>
      <li><strong>The 30% Gross Income Rule (Standard Benchmark):</strong> Divide your gross monthly salary by 3.33 (or multiply by 0.30). At $6,000/month pre-tax pay, maximum rent is $1,800.</li>
      <li><strong>The 50/30/20 Take-Home Pay Rule (Conservative):</strong> Allocate 50% of your net post-tax earnings to total 'needs' (rent, utilities, groceries, insurance). Rent should occupy roughly 28% to 32% of take-home pay to leave adequate cash for savings and debt reduction.</li>
    </ul>

    <h2>Upfront Move-In Cost Breakdown: Cash You Need Upfront</h2>
    <p>Before moving into a new apartment, ensure you have sufficient liquid cash reserves to cover the initial lease execution expenses:</p>
    <ul>
      <li><strong>First Month Rent:</strong> 100% of the first monthly installment paid at lease signing.</li>
      <li><strong>Security Deposit:</strong> Typically equal to 1 to 2 months rent (held in escrow against property damage).</li>
      <li><strong>Application &amp; Credit Screening Fees:</strong> $35 to $75 per adult applicant.</li>
      <li><strong>Pet Deposits &amp; Monthly Pet Rent:</strong> $250 to $500 one-time deposit plus $25 to $75/month pet fee.</li>
      <li><strong>Broker Fee (NYC &amp; Boston):</strong> 10% to 15% of total first-year lease value paid by the tenant.</li>
    </ul>

    <h2>Frequently Asked Questions (FAQ)</h2>
    <div class="faq-item">
      <h4>What is the 40x rent rule used by landlords?</h4>
      <p>The 40x rent rule states that your annual gross income must be at least 40 times your monthly rent. To calculate maximum allowable rent, divide your annual gross salary by 40 (e.g., an $80,000 salary / 40 = $2,000 maximum monthly rent). This ensures your rent consumes no more than 30% of your gross annual earnings.</p>
    </div>
    <div class="faq-item">
      <h4>What is the 30% rule of rent affordability?</h4>
      <p>The 30% rule recommends that your monthly rent should not exceed 30% of your gross monthly income before taxes. If your monthly gross income is $6,000, your target rent should be $1,800 or less.</p>
    </div>
    <div class="faq-item">
      <h4>Should rent be calculated from gross or net pay?</h4>
      <p>Landlords and property managers screen applications using gross income (before taxes) for approval. However, for personal budgeting, financial experts recommend budgeting rent against your net take-home pay, keeping total housing costs below 30% to 35% of take-home earnings.</p>
    </div>
    <div class="faq-item">
      <h4>How do monthly debt payments affect rent affordability?</h4>
      <p>High recurring consumer debts (student loans, car payments, minimum credit card payments) reduce your discretionary cash flow. Under a debt-adjusted budgeting model, total debt payments plus rent should not exceed 43% to 45% of your gross income.</p>
    </div>
    <div class="faq-item">
      <h4>What is the 50/30/20 budgeting rule for rent?</h4>
      <p>The 50/30/20 rule allocates 50% of your net take-home pay to essential needs (rent, utilities, groceries, transportation), 30% to discretionary wants, and 20% to savings and debt reduction. Rent should make up no more than 60% of your needs bucket.</p>
    </div>
    <div class="faq-item">
      <h4>What credit score is required to rent an apartment in 2026?</h4>
      <p>Most institutional property management companies look for a minimum FICO credit score of 620 to 650. Competitive metropolitan markets (NYC, San Francisco, Boston) often expect 700+. Scores below 620 usually require a guarantor or co-signer.</p>
    </div>
    <div class="faq-item">
      <h4>How much should you have saved in emergency funds before renting?</h4>
      <p>Financial advisors recommend having 3 to 6 months of total living expenses in an accessible high-yield savings account before signing a new lease, in addition to upfront move-in cash.</p>
    </div>
    <div class="faq-item">
      <h4>What upfront move-in costs are required when signing a lease?</h4>
      <p>Standard upfront move-in expenses typically include first month rent, a security deposit (equal to 1 to 2 months rent), application/screening fees ($35-$75 per applicant), and in broker-dominated markets, a broker fee (10% to 15% of annual rent).</p>
    </div>

    <h2>Explore Related Rent &amp; Housing Calculators</h2>
    <ul>
      <li><a href="/real-estate/rent-vs-buy-calculator">Rent vs. Buy Calculator</a> &mdash; Compare long-term wealth creation between renting and purchasing a home.</li>
      <li><a href="/loan-calculators/debt-to-income-calculator">Debt-to-Income (DTI) Calculator</a> &mdash; Check your overall front-end and back-end debt ratios.</li>
      <li><a href="/real-estate/down-payment-calculator">Down Payment Calculator</a> &mdash; Plan how much to save each month to transition from renting to owning.</li>
      <li><a href="/real-estate/mortgage-calculator">Mortgage Payment Calculator</a> &mdash; Calculate equivalent monthly homeownership mortgage payments.</li>
    </ul>
  </div>
</main>

<script>
function syncSalary(source) {
  if (source === 'annual') {
    var a = parseFloat(document.getElementById('grossAnnual').value) || 0;
    document.getElementById('grossMonthly').value = Math.round(a / 12);
  } else {
    var m = parseFloat(document.getElementById('grossMonthly').value) || 0;
    document.getElementById('grossAnnual').value = Math.round(m * 12);
  }
  calculateRent();
}

function calculateRent() {
  var grossAnnual = parseFloat(document.getElementById('grossAnnual').value) || 0;
  var grossMonthly = grossAnnual / 12;
  var debts = (parseFloat(document.getElementById('studentLoans').value) || 0) + (parseFloat(document.getElementById('creditCards').value) || 0);
  var taxRate = (parseFloat(document.getElementById('taxRate').value) || 22) / 100;
  var rule = document.getElementById('targetRule').value;

  var netMonthly = grossMonthly * (1 - taxRate);

  var maxRent = 0;
  var ruleLabel = 'Based on 30% of Gross Monthly Income';

  if (rule === '30') {
    maxRent = grossMonthly * 0.30;
    ruleLabel = 'Based on 30% of Gross Monthly Income';
  } else if (rule === '40x') {
    maxRent = grossAnnual / 40;
    ruleLabel = 'Based on Landlord 40x Annual Income Rule';
  } else if (rule === 'debt') {
    maxRent = Math.max(0, (grossMonthly * 0.43) - debts);
    ruleLabel = 'Based on Max 43% DTI Minus Monthly Debts';
  } else if (rule === '503020') {
    maxRent = netMonthly * 0.28;
    ruleLabel = 'Based on 28% of Net Take-Home Pay (50/30/20 Rule)';
  }

  var safeRent = grossMonthly * 0.25;
  var landlord40x = grossAnnual / 40;
  var remainingCash = Math.max(0, netMonthly - debts - maxRent);
  var moveInSavings = maxRent * 3;

  document.getElementById('resMaxRent').textContent = '$' + Math.round(maxRent).toLocaleString();
  document.getElementById('resRuleLabel').textContent = ruleLabel;
  document.getElementById('resSafeRent').textContent = '$' + Math.round(safeRent).toLocaleString() + ' / mo';
  document.getElementById('resLandlord40x').textContent = '$' + Math.round(landlord40x).toLocaleString() + ' / mo';
  document.getElementById('resNetTakeHome').textContent = '$' + Math.round(netMonthly).toLocaleString() + ' / mo';
  document.getElementById('resTotalDebt').textContent = '$' + Math.round(debts).toLocaleString() + ' / mo';
  document.getElementById('resRemainingCash').textContent = '$' + Math.round(remainingCash).toLocaleString() + ' / mo';
  document.getElementById('resMoveInCash').textContent = '$' + Math.round(moveInSavings).toLocaleString();
}

document.getElementById('grossAnnual').addEventListener('input', function() { syncSalary('annual'); });
document.getElementById('grossMonthly').addEventListener('input', function() { syncSalary('monthly'); });

document.querySelectorAll('#studentLoans, #creditCards, #targetRule, #taxRate').forEach(function(el) {
  el.addEventListener('input', calculateRent);
  el.addEventListener('change', calculateRent);
});
calculateRent();
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
