<?php
$currentYear = date('Y');
$pageTitle = "Debt-to-Income Calculator (2026) &mdash; Calculate Front & Back DTI";
$metaDescription = "Calculate your front-end and back-end debt-to-income (DTI) ratio. Compare your numbers against Fannie Mae, FHA, VA, and conventional mortgage approval limits.";
$schemaData = json_decode(<<<'EOD'
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "HowTo",
      "name": "How to Calculate Your Debt-to-Income (DTI) Ratio",
      "step": [
            {
                  "@type": "HowToStep",
                  "name": "Enter gross monthly income",
                  "text": "Input your total pre-tax monthly income from all employment, business, and investment sources."
            },
            {
                  "@type": "HowToStep",
                  "name": "Add recurring monthly debts",
                  "text": "Enter monthly minimum payments for credit cards, auto loans, student loans, and personal loans."
            },
            {
                  "@type": "HowToStep",
                  "name": "Enter proposed housing payment",
                  "text": "Input your estimated principal, interest, taxes, and insurance (PITI) or current rent."
            },
            {
                  "@type": "HowToStep",
                  "name": "Calculate front-end and back-end DTI",
                  "text": "View your front-end housing ratio and back-end total debt ratio."
            },
            {
                  "@type": "HowToStep",
                  "name": "Compare with loan guidelines",
                  "text": "Check if your DTI ratio meets Conventional (36%-45%), FHA (43%-50%), or VA (41%) thresholds."
            }
      ]
},
    {
      "@type": "WebApplication",
      "@id": "https://americacalculator.com/loan-calculators/debt-to-income-calculator#app",
      "name": "Debt-to-Income (DTI) Calculator",
      "url": "https://americacalculator.com/loan-calculators/debt-to-income-calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "All",
      "offer": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "description": "Calculate front-end and back-end DTI ratios and evaluate mortgage qualification thresholds across Conventional, FHA, VA, and USDA loan programs."
    },
    {
      "@type": "FAQPage",
      "@id": "https://americacalculator.com/loan-calculators/debt-to-income-calculator#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is a good debt-to-income ratio to buy a house in 2026,
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A DTI ratio of 36% or lower is considered ideal by most mortgage underwriters, with no more than 28% dedicated to housing expenses. However, Fannie Mae and Freddie Mac approve conventional loans up to 45% to 50% with strong compensating factors (high credit score or cash reserves), and FHA loans permit back-end DTI ratios up to 46.9% to 56.9% through automated underwriting systems."
          }
        },
        {
          "@type": "Question",
          "name": "Do you calculate DTI using gross income or net take-home pay,
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Lenders calculate DTI using gross monthly income&mdash;your earnings before federal, state, and local taxes, health insurance premiums, and retirement contributions are deducted. For W-2 employees, this is your base salary or hourly pay before withholding."
          }
        },
        {
          "@type": "Question",
          "name": "Do groceries, utilities, and auto insurance count toward DTI,
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Living expenses such as groceries, cell phone plans, electricity, water, health insurance, and car insurance do not appear on credit reports and are not included in your debt-to-income calculation. Only legal debt obligations&mdash;such as auto loans, minimum credit card payments, student loans, personal loans, and child support&mdash;are factored in."
          }
        },
        {
          "@type": "Question",
          "name": "How do deferred or income-driven student loans affect DTI,
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If you are on an income-driven repayment (IDR) plan and your documented monthly payment is $0, Fannie Mae and Freddie Mac accept the $0 payment if backed by official servicer documentation. If the loan is in forbearance or deferment without a documented payment, lenders typically calculate 0.5% to 1.0% of the total loan balance as your imputed monthly payment."
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
      --primary: #2563eb;
      --primary-hover: #1d4ed8;
      --primary-light: #eff6ff;
      --success: #10b981;
      --warning: #f59e0b;
      --danger: #ef4444;
      --slate-900: #0f172a;
      --slate-800: #1e293b;
      --slate-700: #334155;
      --slate-600: #475569;
      --slate-200: #e2e8f0;
      --slate-100: #f1f5f9;
      --slate-50: #f8fafc;
      --white: #ffffff;
      --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
      --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
      --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
      --radius: 16px;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Plus Jakarta Sans', sans-serif; }
    body { background-color: var(--slate-50); color: var(--slate-800); line-height: 1.6; }
    
    header { background: var(--white); border-bottom: 1px solid var(--slate-200); padding: 1rem 2rem; }
    .nav-container { max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; }
    .logo { font-size: 1.25rem; font-weight: 800; color: var(--slate-900); text-decoration: none; display: flex; align-items: center; gap: 0.5rem; }
    .logo span { color: var(--primary); }

    .main-wrapper { max-width: 1100px; margin: 2rem auto; padding: 0 1.5rem; }
    
    .page-title-area { text-align: center; margin-bottom: 2.5rem; }
    .page-title-area h1 { font-size: 2.25rem; font-weight: 800; color: var(--slate-900); margin-bottom: 0.75rem; letter-spacing: -0.02em; }
    .page-title-area p { color: var(--slate-600); font-size: 1.1rem; max-width: 720px; margin: 0 auto; }

    /* Calculator Layout Grid */
    .calculator-container {
      display: grid;
      grid-template-columns: 1.2fr 1fr;
      gap: 2rem;
      background: var(--white);
      border-radius: var(--radius);
      box-shadow: var(--shadow-xl);
      border: 1px solid var(--slate-200);
      overflow: hidden;
      margin-bottom: 3rem;
    }

    .form-panel { padding: 2.25rem; }
    .results-panel {
      background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
      color: var(--white);
      padding: 2.25rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .section-subtitle {
      font-size: 0.875rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: var(--primary);
      margin-bottom: 1.25rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .input-group { margin-bottom: 1.25rem; }
    .input-group label { display: block; font-size: 0.9rem; font-weight: 600; color: var(--slate-700); margin-bottom: 0.4rem; }
    .input-wrapper { position: relative; display: flex; align-items: center; }
    .input-prefix { position: absolute; left: 1rem; color: var(--slate-600); font-weight: 600; font-size: 1rem; }
    .input-wrapper input {
      width: 100%;
      padding: 0.75rem 1rem 0.75rem 2.25rem;
      border: 1.5px solid var(--slate-200);
      border-radius: 10px;
      font-size: 1rem;
      font-weight: 600;
      color: var(--slate-900);
      transition: all 0.2s;
    }
    .input-wrapper input:focus { outline: none; border-color: var(--primary); box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1); }

    .grid-2-col { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }

    /* Results Card */
    .metric-card-group { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem; }
    .metric-card {
      background: rgba(255, 255, 255, 0.07);
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: 12px;
      padding: 1.25rem;
      text-align: center;
    }
    .metric-card .metric-label { font-size: 0.8rem; color: #94a3b8; font-weight: 600; text-transform: uppercase; margin-bottom: 0.35rem; }
    .metric-card .metric-value { font-size: 2rem; font-weight: 800; color: var(--white); }
    .metric-card.good .metric-value { color: #34d399; }
    .metric-card.warning .metric-value { color: #fbbf24; }
    .metric-card.danger .metric-value { color: #f87171; }

    .status-badge {
      display: inline-block;
      padding: 0.4rem 1rem;
      border-radius: 9999px;
      font-size: 0.85rem;
      font-weight: 700;
      margin-top: 0.5rem;
    }
    .status-badge.pass { background: rgba(16, 185, 129, 0.2); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.3); }
    .status-badge.caution { background: rgba(245, 158, 11, 0.2); color: #fbbf24; border: 1px solid rgba(245, 158, 11, 0.3); }
    .status-badge.fail { background: rgba(239, 68, 68, 0.2); color: #f87171; border: 1px solid rgba(239, 68, 68, 0.3); }

    /* Qualification Progress Bar */
    .qualification-checklist {
      background: rgba(255, 255, 255, 0.05);
      border-radius: 12px;
      padding: 1.25rem;
      margin-bottom: 1.5rem;
    }
    .checklist-item { display: flex; justify-content: space-between; font-size: 0.9rem; padding: 0.4rem 0; border-bottom: 1px solid rgba(255, 255, 255, 0.08); }
    .checklist-item:last-child { border-bottom: none; }
    .checklist-item span:first-child { color: #cbd5e1; }
    .checklist-item span:last-child { font-weight: 700; }

    .btn-calc {
      width: 100%;
      background: var(--primary);
      color: var(--white);
      border: none;
      padding: 1rem;
      border-radius: 10px;
      font-size: 1rem;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.2s;
    }
    .btn-calc:hover { background: var(--primary-hover); transform: translateY(-1px); }

    /* Educational Content Section */
    .content-article { background: var(--white); border-radius: var(--radius); padding: 2.5rem; border: 1px solid var(--slate-200); box-shadow: var(--shadow-sm); }
    .quick-summary-box { background: var(--primary-light); border-left: 4px solid var(--primary); padding: 1.25rem 1.5rem; border-radius: 8px; margin-bottom: 2rem; }
    .quick-summary-box h3 { color: var(--primary-hover); font-size: 1.1rem; margin-bottom: 0.4rem; }
    .quick-summary-box p { color: var(--slate-700); font-size: 0.95rem; line-height: 1.6; }

    .content-article h2 { font-size: 1.5rem; font-weight: 800; color: var(--slate-900); margin: 2rem 0 1rem; }
    .content-article p { color: var(--slate-600); margin-bottom: 1rem; font-size: 1rem; }

    .data-table { width: 100%; border-collapse: collapse; margin: 1.5rem 0; font-size: 0.95rem; }
    .data-table th { background: var(--slate-100); text-align: left; padding: 0.75rem 1rem; font-weight: 700; color: var(--slate-800); border-bottom: 2px solid var(--slate-200); }
    .data-table td { padding: 0.75rem 1rem; border-bottom: 1px solid var(--slate-200); color: var(--slate-700); }
    .data-table tr:hover { background: var(--slate-50); }

    @media (max-width: 860px) {
      .calculator-container { grid-template-columns: 1fr; }
      .grid-2-col { grid-template-columns: 1fr; }
    }
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
.quick-answer-card { background: #f0fdf4; border-left: 4px solid #10b981; padding: 1.5rem; border-radius: 0 8px 8px 0; margin-bottom: 2rem; }
.quick-answer-card h2 { font-size: 1.35rem; color: #065f46; margin: 0 0 0.5rem; border: none; padding: 0; }
.quick-answer-card p { color: #047857; margin: 0; }
</style>

<main class="main-wrapper">
<div class="page-title-area">
      <h1>Debt-to-Income (DTI) Calculator</h1>
      <p>Calculate your front-end and back-end DTI ratios instantly. Compare your numbers against 2026 mortgage approval limits for Conventional, FHA, and VA loans.</p>
    </div>

    <!-- CALCULATOR WIDGET -->
    <div class="calculator-container">
      
      <!-- Input Form -->
      <div class="form-panel">
        <div class="section-subtitle">1. Gross Monthly Income</div>
        <div class="input-group">
          <label for="grossIncome">Monthly Pre-Tax Income (Salary, Hourly, Business)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="grossIncome" value="7500" min="0" step="100">
          </div>
        </div>

        <div class="section-subtitle" style="margin-top: 1.75rem;">2. Monthly Housing Expenses</div>
        <div class="grid-2-col">
          <div class="input-group">
            <label for="mortgagePITI">Mortgage PITI / Rent</label>
            <div class="input-wrapper">
              <span class="input-prefix">$</span>
              <input type="number" id="mortgagePITI" value="1950" min="0" step="50">
            </div>
          </div>
          <div class="input-group">
            <label for="hoaFee">HOA / Condo Dues</label>
            <div class="input-wrapper">
              <span class="input-prefix">$</span>
              <input type="number" id="hoaFee" value="150" min="0" step="25">
            </div>
          </div>
        </div>

        <div class="section-subtitle" style="margin-top: 1.75rem;">3. Monthly Debt Payments (Minimums Only)</div>
        <div class="grid-2-col">
          <div class="input-group">
            <label for="autoLoan">Car Loans / Leases</label>
            <div class="input-wrapper">
              <span class="input-prefix">$</span>
              <input type="number" id="autoLoan" value="420" min="0" step="25">
            </div>
          </div>
          <div class="input-group">
            <label for="studentLoan">Student Loans</label>
            <div class="input-wrapper">
              <span class="input-prefix">$</span>
              <input type="number" id="studentLoan" value="180" min="0" step="25">
            </div>
          </div>
        </div>

        <div class="grid-2-col">
          <div class="input-group">
            <label for="creditCard">Credit Cards (Min. Payment)</label>
            <div class="input-wrapper">
              <span class="input-prefix">$</span>
              <input type="number" id="creditCard" value="95" min="0" step="10">
            </div>
          </div>
          <div class="input-group">
            <label for="otherDebt">Personal Loans / Alimony</label>
            <div class="input-wrapper">
              <span class="input-prefix">$</span>
              <input type="number" id="otherDebt" value="0" min="0" step="25">
            </div>
          </div>
        </div>

        <button class="btn-calc" onclick="calculateDTI()">Recalculate DTI Ratio</button>
      </div>

      <!-- Live Dynamic Results Panel -->
      <div class="results-panel">
        <div>
          <h3 style="font-size: 1.25rem; font-weight: 800; margin-bottom: 1.25rem;">Your DTI Analysis</h3>

          <div class="metric-card-group">
            <div class="metric-card" id="frontEndCard">
              <div class="metric-label">Front-End DTI</div>
              <div class="metric-value" id="frontEndVal">28.0%</div>
              <div style="font-size: 0.75rem; color: #94a3b8; margin-top: 0.25rem;">Housing Only</div>
            </div>
            <div class="metric-card" id="backEndCard">
              <div class="metric-label">Back-End DTI</div>
              <div class="metric-value" id="backEndVal">37.3%</div>
              <div style="font-size: 0.75rem; color: #94a3b8; margin-top: 0.25rem;">Total Monthly Debt</div>
            </div>
          </div>

          <div class="qualification-checklist">
            <h4 style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em; color: #94a3b8; margin-bottom: 0.75rem;">Mortgage Program Qualification</h4>
            <div class="checklist-item">
              <span>Conventional (28/36 Rule):</span>
              <span id="conventionalStatu" style="color: #34d399;">Qualifies</span>
            </div>
            <div class="checklist-item">
              <span>Conventional Max (Up to 45%):</span>
              <span id="convMaxStatu" style="color: #34d399;">Strong Approval</span>
            </div>
            <div class="checklist-item">
              <span>FHA Loan (Up to 56.9% max):</span>
              <span id="fhaStatu" style="color: #34d399;">Approved</span>
            </div>
            <div class="checklist-item">
              <span>VA Loan (Benchmark 41%):</span>
              <span id="vaStatu" style="color: #34d399;">Eligible</span>
            </div>
          </div>
        </div>

        <div style="text-align: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
          <div style="font-size: 0.85rem; color: #94a3b8;">Total Monthly Debt Obligations:</div>
          <div style="font-size: 1.5rem; font-weight: 800; color: #38bdf8;" id="totalDebtDisplay">$2,795 / mo</div>
        </div>

      </div>

    </div>

    <!-- Surrounding Authority Content -->
    

<article class="calculator-content-body">

  <!-- AEO Direct Answer Snippet -->
  <section class="quick-answer-card">
    <div class="card-inner">
      <span class="badge">AEO Direct Answer</span>
      <h2>What is Debt-to-Income (DTI) Ratio and How is it Calculated?</h2>
      <p>
        Your <strong>debt-to-income (DTI) ratio</strong> is the percentage of your gross monthly income that goes toward paying recurring monthly debts. 
        It is calculated using the formula: <strong>Total Monthly Debt Payments / Gross Monthly Income × 100</strong>. 
        Lenders evaluate two metrics: <strong>Front-End DTI</strong> (housing expenses including principal, interest, taxes, insurance, and HOA dues) 
        and <strong>Back-End DTI</strong> (housing costs plus all other debt payments such as auto loans, student loans, and credit card minimums).
      </p>
    </div>
  </section>

  <!-- Section 1: Mortgage Program DTI Limits Matrix -->
  <section>
    <h2>Maximum DTI Limits by Mortgage Loan Program (2026 Guidelines)</h2>
    <p>
      Different mortgage programs enforce distinct DTI benchmark ratios. While 28/36 remains the textbook standard, modern automated underwriting systems (Fannie Mae Desktop Underwriter and Freddie Mac Loan Product Advisor) permit significantly higher ratios when compensating factors are present:
    </p>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>Loan Program</th>
            <th>Standard Front-End DTI</th>
            <th>Standard Back-End DTI</th>
            <th>Maximum Allowable DTI (with Automated Approval)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Conventional (Fannie Mae / Freddie Mac)</strong></td>
            <td>28%</td>
            <td>36%</td>
            <td>Up to 45% &ndash; 50% with FICO ≥ 700 & 6+ months cash reserves</td>
          </tr>
          <tr>
            <td><strong>FHA Loan (Federal Housing Admin)</strong></td>
            <td>31%</td>
            <td>43%</td>
            <td>Up to 46.9% front-end / 56.9% back-end via AUS approve/eligible</td>
          </tr>
          <tr>
            <td><strong>VA Loan (Veterans Affairs)</strong></td>
            <td>No hard limit</td>
            <td>41% benchmark</td>
            <td>50%+ permitted if meeting regional VA Residual Income guidelines</td>
          </tr>
          <tr>
            <td><strong>USDA Rural Housing Loan</strong></td>
            <td>29%</td>
            <td>41%</td>
            <td>Up to 44% with strong credit score (680+) and compensating factors</td>
          </tr>
          <tr>
            <td><strong>Non-QM / Bank Statement Loans</strong></td>
            <td>35% &ndash; 40%</td>
            <td>45% &ndash; 50%</td>
            <td>Up to 55% for self-employed borrowers with high equity deposits</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- Section 2: What Counts vs What Does Not Count -->
  <section>
    <h2>What Debts Are Included in Your DTI Ratio? (Checklist)</h2>
    <p>
      A frequent source of confusion among prospective borrowers is misunderstanding which monthly outflows underwriters include in the calculation:
    </p>

    <div class="comparison-grid">
      <div class="grid-card included">
        <h3>✅ Included in DTI (Credit Report Liabilities)</h3>
        <ul>
          <li><strong>Projected Housing Payment (PITI):</strong> Principal, interest, property taxes, homeowners hazard insurance.</li>
          <li><strong>HOA & Condo Dues:</strong> Mandatory monthly or quarterly homeowners association fees.</li>
          <li><strong>Credit Card Debt:</strong> The <em>minimum required monthly payment</em> listed on credit bureaus, NOT your total outstanding balance.</li>
          <li><strong>Auto Loans & Leases:</strong> Monthly installment payment regardless of remaining months (unless ≤ 10 months remain on purchase loan).</li>
          <li><strong>Student Loans:</strong> Documented income-driven monthly payment, or 0.5%&ndash;1% imputed balance for loans in deferment.</li>
          <li><strong>Personal Loans & Lines of Credit:</strong> Fixed installment payments.</li>
          <li><strong>Court-Ordered Obligations:</strong> Child support, alimony, or separate maintenance payments.</li>
        </ul>
      </div>

      <div class="grid-card excluded">
        <h3>❌ NOT Included in DTI (Everyday Living Expenses)</h3>
        <ul>
          <li><strong>Groceries and Household Supplies</strong></li>
          <li><strong>Utilities:</strong> Electricity, gas, heating oil, water, sewer, and trash collection.</li>
          <li><strong>Insurances:</strong> Health insurance, life insurance, and personal auto insurance premiums.</li>
          <li><strong>Subscriptions:</strong> Cell phone plans, internet, streaming services (Netflix, Spotify), gym memberships.</li>
          <li><strong>Voluntary Payroll Deductions:</strong> 401(k) contributions, FSA/HSA allocations.</li>
          <li><strong>Income Taxes:</strong> Federal, state, and local payroll taxes (already accounted for via gross income baseline).</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Section 3: Step-by-Step Practical Calculation Example -->
  <section>
    <h2>Step-by-Step DTI Calculation Example</h2>
    <p>Consider a buyer earning an annual salary of <strong>$84,000</strong> ($7,000 gross monthly income) seeking to buy a home:</p>
    <ul>
      <li><strong>Projected Mortgage Payment (PITI + HOA):</strong> $1,960 / month</li>
      <li><strong>Car Loan Payment:</strong> $380 / month</li>
      <li><strong>Student Loan (IDR payment):</strong> $150 / month</li>
      <li><strong>Credit Cards (Minimum Payments Combined):</strong> $90 / month</li>
      <li><strong>Total Monthly Debt Obligations:</strong> $1,960 + $380 + $150 + $90 = <strong>$2,580</strong></li>
    </ul>
    <div class="calculation-breakdown">
      <p><strong>Front-End DTI:</strong> $1,960 / $7,000 = <strong>28.0%</strong> (Passes standard conventional benchmark!)</p>
      <p><strong>Back-End DTI:</strong> $2,580 / $7,000 = <strong>36.86%</strong> (Easily qualifies under Fannie Mae and FHA guidelines!)</p>
    </div>
  </section>

  <!-- Section 4: Interlinking to Real Estate & Loan Hub -->
  <section class="related-calculators-section">
    <h2>Interlinked Mortgage & Financing Tools</h2>
    <ul class="related-tools-list">
      <li><a href="/real-estate/mortgage-calculator">Mortgage Payment Calculator</a> &mdash; Estimate monthly principal, interest, and taxes.</li>
      <li><a href="/real-estate/closing-cost-calculator">Closing Cost Calculator</a> &mdash; Calculate upfront cash requirements for settlement.</li>
      <li><a href="/real-estate/hoa-fee-calculator">HOA Fee Impact Calculator</a> &mdash; See how condo dues directly lower your maximum borrowing power.</li>
      <li><a href="/loan-calculators/sba-loan-calculator">SBA Loan Calculator</a> &mdash; For small business owners evaluating commercial DSCR limits.</li>
    </ul>
  </section>

  <!-- E-E-A-T Footnote -->
  <footer class="editorial-byline-card">
    <div class="byline-content">
      <p><strong>Underwriting Disclosure:</strong> Guidelines benchmarked against 2026 lending standards published in the <a href="https://selling-guide.fanniemae.com/" rel="noopener" target="_blank">Fannie Mae Selling Guide (B3-6-02)</a> and <a href="https://www.hud.gov/program_offices/housing/sfh/handbook_4000-1" rel="noopener" target="_blank">HUD FHA Single Family Housing Policy Handbook 4000.1</a>.</p>
      <p><em>Last Reviewed: October 2026</em></p>
    </div>
  </footer>

</article>
</main>

<script>
function calculateDTI() {
      const income = parseFloat(document.getElementById('grossIncome').value) || 1;
      const mortgage = parseFloat(document.getElementById('mortgagePITI').value) || 0;
      const hoa = parseFloat(document.getElementById('hoaFees').value) || 0;
      const auto = parseFloat(document.getElementById('autoLoans').value) || 0;
      const student = parseFloat(document.getElementById('studentLoans').value) || 0;
      const cards = parseFloat(document.getElementById('creditCards').value) || 0;
      const other = parseFloat(document.getElementById('otherDebts').value) || 0;

      const housingTotal = mortgage + hoa;
      const nonHousingDebts = auto + student + cards + other;
      const totalDebts = housingTotal + nonHousingDebts;

      const frontEnd = (housingTotal / income) * 100;
      const backEnd = (totalDebts / income) * 100;

      // Update values
      document.getElementById('frontEndVal').innerText = frontEnd.toFixed(1) + '%';
      document.getElementById('backEndVal').innerText = backEnd.toFixed(1) + '%';
      document.getElementById('totalDebtDisplay').innerText = '$' + Math.round(totalDebts).toLocaleString() + ' / mo';

      // Update Colors
      const frontCard = document.getElementById('frontEndCard');
      const backCard = document.getElementById('backEndCard');
      
      frontCard.className = 'metric-card ' + (frontEnd <= 28 ? 'good' : (frontEnd <= 36 ? 'warning' : 'danger'));
      backCard.className = 'metric-card ' + (backEnd <= 36 ? 'good' : (backEnd <= 45 ? 'warning' : 'danger'));

      // Check qualifications
      document.getElementById('conventionalStatus').innerText = (frontEnd <= 28 && backEnd <= 36) ? 'Qualifies (Standard)' : (backEnd <= 45 ? 'Requires Strong Credit' : 'High DTI');
      document.getElementById('conventionalStatus').style.color = (backEnd <= 45) ? '#34d399' : '#f87171';

      document.getElementById('convMaxStatus').innerText = backEnd <= 45 ? 'Approved (FICO ≥ 700)' : (backEnd <= 50 ? 'Requires Reserves' : 'Exceeds 50% Limit');
      document.getElementById('convMaxStatus').style.color = backEnd <= 50 ? '#34d399' : '#f87171';

      document.getElementById('fhaStatus').innerText = backEnd <= 56.9 ? 'Eligible via AUS' : 'Exceeds FHA Cap';
      document.getElementById('fhaStatus').style.color = backEnd <= 56.9 ? '#34d399' : '#f87171';

      document.getElementById('vaStatus').innerText = backEnd <= 41 ? 'Meets 41% Guideline' : 'Approved if Residual Met';
      document.getElementById('vaStatus').style.color = '#34d399';
    }

    // Auto-calculate on input changes
    const inputs = document.querySelectorAll('input');
    inputs.forEach(input => input.addEventListener('input', calculateDTI));
    calculateDTI();
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
