<?php
$currentYear = date('Y');
$pageTitle = "Jumbo Loan Calculator ({$currentYear}) – Luxury Mortgage & Conforming Limit Tool";
$metaDescription = "Free Jumbo loan calculator for {$currentYear}. Estimate monthly luxury mortgage payments above FHFA limits ($766,550+), calculate asset reserve requirements, and model 80-10-10 piggyback loans.";
$metaKeywords = "jumbo loan calculator, jumbo mortgage calculator, conforming limit calculator, non-conforming loan calculator, luxury mortgage payments, jumbo interest rate {$currentYear}";

$schemaData = json_decode(<<<'EOD'
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://americacalculator.com/loan-calculators/jumbo-loan-calculator",
      "url": "https://americacalculator.com/loan-calculators/jumbo-loan-calculator",
      "name": "Jumbo Loan Calculator (2026) – Luxury Mortgage & Conforming Limit Tool",
      "description": "Calculate monthly jumbo mortgage payments, compare standalone jumbo loans vs 80-10-10 piggyback structures, and verify post-closing cash reserve requirements.",
      "inLanguage": "en-US",
      "breadcrumb": {
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
            "name": "Jumbo Loan Calculator",
            "item": "https://americacalculator.com/loan-calculators/jumbo-loan-calculator"
          }
        ]
      }
    },
    {
      "@type": "WebApplication",
      "name": "Jumbo Loan Calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "All",
      "url": "https://americacalculator.com/loan-calculators/jumbo-loan-calculator",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "featureList": [
        "Automatic FHFA conforming limit detection ($766,550 baseline / $1,149,825 ceiling)",
        "Standalone Jumbo vs 80-10-10 Piggyback combo loan modeling",
        "Post-closing liquid asset reserve estimator (6 to 12 months PITI)",
        "Strict 43% DTI benchmark qualification guidance",
        "Comprehensive PITI monthly payment breakdown",
        "Interest rate spread analysis between conforming and jumbo debt"
      ]
    },
    {
      "@type": "HowTo",
      "name": "How to Calculate Jumbo Mortgage Payments and Reserve Requirements",
      "description": "Step-by-step instructions for estimating jumbo loan monthly payments and post-closing asset reserves.",
      "step": [
        {
          "@type": "HowToStep",
          "name": "Enter Purchase Price",
          "text": "Input the luxury home purchase price to determine if the financed amount exceeds your county conforming loan limit."
        },
        {
          "@type": "HowToStep",
          "name": "Set Down Payment Capital",
          "text": "Select your down payment amount (10%, 15%, 20%, or 25%). Jumbo loans typically require a minimum of 10% to 20% down."
        },
        {
          "@type": "HowToStep",
          "name": "Select Financing Structure",
          "text": "Choose between a Standalone Jumbo mortgage or an 80-10-10 Piggyback loan structure."
        },
        {
          "@type": "HowToStep",
          "name": "Input Interest Rate and Term",
          "text": "Specify the jumbo loan APR and choose a 30-year or 15-year fixed repayment amortization."
        },
        {
          "@type": "HowToStep",
          "name": "Review Liquid Asset Reserves",
          "text": "Review your estimated monthly payment alongside the required 6 to 12 months of post-closing liquid PITI reserves."
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the 2026 conforming loan limit threshold for a jumbo loan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For 2026, the baseline conforming loan limit is $766,550 across most US counties. Any single-family mortgage exceeding this amount is classified as a non-conforming jumbo loan. In designated high-cost counties, the conforming limit rises up to $1,149,825."
          }
        },
        {
          "@type": "Question",
          "name": "How much down payment is required for a jumbo mortgage?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most lenders require a 10% to 20% down payment on jumbo loans up to $1.5 million. For super-jumbo loans exceeding $2 million to $3 million, lenders typically require 20% to 30% down."
          }
        },
        {
          "@type": "Question",
          "name": "What are post-closing cash reserve requirements for jumbo loans?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Jumbo underwriters require borrowers to hold between 6 and 12 months of total housing expenses (PITI: Principal, Interest, Taxes, Insurance) in verified liquid or semi-liquid assets (checking, savings, money market, or vested brokerage/retirement accounts) after paying closing costs."
          }
        },
        {
          "@type": "Question",
          "name": "What credit score is needed to qualify for a jumbo loan in 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Borrowers typically need a minimum credit score of 700 to qualify for a jumbo loan with 20% down. For lower down payments (10% to 15%) or loan amounts over $1.5 million, lenders typically require a 720 to 740+ FICO score."
          }
        },
        {
          "@type": "Question",
          "name": "What is an 80-10-10 piggyback loan and how does it avoid jumbo rates?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "An 80-10-10 structure breaks financing into an 80% primary conforming first mortgage, a 10% second mortgage (HELOC or fixed home equity loan), and a 10% cash down payment. This avoids private mortgage insurance (PMI) and keeps the first mortgage within conforming interest rate guidelines."
          }
        },
        {
          "@type": "Question",
          "name": "What is the maximum debt-to-income (DTI) ratio for a jumbo loan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most jumbo lenders cap the back-end debt-to-income ratio at 43%, though borrowers with excellent credit (760+) and substantial reserves (18+ months PITI) may receive exceptions up to 45%."
          }
        },
        {
          "@type": "Question",
          "name": "Are jumbo mortgage interest rates higher than conforming rates?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Historically, jumbo rates were 0.25% to 0.50% higher than conforming loans. In modern market conditions, jumbo rates are often equal to or slightly lower than conforming rates because lenders compete aggressively for affluent, high-deposit wealth management clients."
          }
        },
        {
          "@type": "Question",
          "name": "Can you use gift funds for a jumbo loan down payment?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, but many lenders require that at least 5% to 10% of the purchase price come from the borrower's own documented personal funds before gift funds can be applied toward the balance of the down payment or closing costs."
          }
        }
      ]
    }
  ]
}
EOD
, true);

require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>

<style>
/* ============================================================
   JUMBO LOAN CALCULATOR — PREMIUM DESIGN SYSTEM
   ============================================================ */
body { background: #f5f7fa; }

/* Page Wrapper */
.container {
  max-width: 1100px;
  margin: 0 auto;
  padding: 2rem 1.5rem 4rem;
}

/* Hero */
.calculator-header { margin-bottom: 2rem; }
.calculator-header h1 {
  font-size: 2.1rem;
  color: #0f172a;
  margin: 0 0 0.6rem;
  line-height: 1.2;
  font-weight: 800;
}
.lead-description {
  font-size: 1.05rem;
  color: #64748b;
  line-height: 1.65;
  margin: 0;
  border-left: 4px solid #1d4ed8;
  padding-left: 1rem;
}

/* Calculator Card */
.calculator-layout {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0;
  background: #fff;
  border-radius: 14px;
  box-shadow: 0 4px 24px rgba(0,0,0,0.05);
  border: 1px solid #eef2f7;
  margin-bottom: 2.5rem;
  overflow: hidden;
}
.calculator-panel {
  padding: 2rem;
}
.calculator-panel:first-child {
  border-right: 1px solid #f0f4fa;
}
.results-panel {
  background: linear-gradient(160deg, #f8fbff 0%, #eef5ff 100%);
}
.panel-title {
  font-size: 1.15rem;
  font-weight: 700;
  color: #0f172a;
  margin: 0 0 1.5rem;
  padding-bottom: 0.75rem;
  border-bottom: 2px solid #eef2f7;
}

/* Form */
.form-group {
  margin-bottom: 1.35rem;
}
.form-group label {
  display: block;
  font-weight: 600;
  font-size: 0.9rem;
  color: #1e293b;
  margin-bottom: 0.45rem;
}
.form-control {
  width: 100%;
  padding: 13px 15px;
  border: 1.5px solid #d1dae8;
  border-radius: 8px;
  font-size: 1rem;
  color: #0f172a;
  outline: none;
  transition: border-color 0.2s, box-shadow 0.2s;
  box-sizing: border-box;
  background: #fff;
  appearance: none;
  -webkit-appearance: none;
}
select.form-control {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='%236b7280'%3E%3Cpath fill-rule='evenodd' d='M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 1.25em;
  padding-right: 2.5rem;
}
.form-control:focus {
  border-color: #1d4ed8;
  box-shadow: 0 0 0 3px rgba(29, 78, 216, 0.12);
}
.field-hint {
  font-size: 0.78rem;
  color: #94a3b8;
  margin-top: 0.35rem;
  line-height: 1.4;
  display: block;
}

/* Results */
.highlight-metric {
  background: linear-gradient(135deg, #1d4ed8, #0f5fa8);
  border-radius: 12px;
  padding: 1.5rem;
  margin-bottom: 1.5rem;
  text-align: center;
  box-shadow: 0 6px 20px rgba(29, 78, 216, 0.2);
}
.metric-label {
  font-size: 0.78rem;
  font-weight: 600;
  color: rgba(255,255,255,0.8);
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: 0.3rem;
}
.metric-value {
  font-size: 2.2rem;
  font-weight: 900;
  color: #fff;
  line-height: 1;
}
.metric-sub {
  font-size: 0.85rem;
  color: rgba(255,255,255,0.7);
  margin-top: 0.5rem;
}

.results-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 0.75rem;
  margin-bottom: 1.5rem;
}
.result-card {
  background: #fff;
  border: 1.5px solid #e8edf5;
  border-radius: 10px;
  padding: 1rem;
  transition: box-shadow 0.2s;
}
.result-card:hover {
  box-shadow: 0 4px 12px rgba(0,0,0,0.07);
}
.result-title {
  font-size: 0.75rem;
  font-weight: 600;
  color: #64748b;
  text-transform: uppercase;
  letter-spacing: 0.04em;
  margin-bottom: 0.3rem;
}
.result-number {
  font-size: 1.25rem;
  font-weight: 800;
  color: #1d4ed8;
  line-height: 1;
  margin-bottom: 0.25rem;
}
.result-desc {
  font-size: 0.78rem;
  color: #94a3b8;
  line-height: 1.4;
}
.success-card {
  border-color: #bbf7d0;
  background: #f0fdf4;
}
.warning-card {
  border-color: #fde68a;
  background: #fffbeb;
}
.text-success { color: #16a34a !important; }
.text-warning { color: #ca8a04 !important; }

/* Summary Table */
.summary-breakdown {
  background: #fff;
  border: 1.5px solid #e8edf5;
  border-radius: 10px;
  padding: 1.25rem;
  margin-top: 1rem;
}
.summary-breakdown h3 {
  font-size: 0.9rem;
  font-weight: 700;
  color: #0f172a;
  margin: 0 0 0.75rem;
  text-transform: uppercase;
  letter-spacing: 0.04em;
}
.summary-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 0.88rem;
}
.summary-table td {
  padding: 0.5rem 0;
  border-bottom: 1px solid #f1f5f9;
  color: #475569;
}
.summary-table tr:last-child td { border-bottom: none; }
.summary-table td:last-child {
  text-align: right;
  font-weight: 600;
  color: #1e293b;
}
.highlight-row td {
  background: #f0fdf4;
  color: #065f46 !important;
}
.highlight-row td:last-child { color: #065f46 !important; }

/* Content Body */
.calculator-content-body {
  background: #fff;
  border-radius: 14px;
  border: 1px solid #eef2f7;
  box-shadow: 0 2px 12px rgba(0,0,0,0.03);
  padding: 2.25rem;
  margin-bottom: 2rem;
}
.calculator-content-body h2 {
  font-size: 1.5rem;
  color: #0f172a;
  margin: 2rem 0 1rem;
  padding-bottom: 0.75rem;
  border-bottom: 2px solid #f0f4fa;
}
.calculator-content-body h2:first-child,
.quick-answer-card + h2 { margin-top: 0; }
.calculator-content-body h4 {
  font-size: 1.05rem;
  color: #1e293b;
  margin: 0 0 0.5rem;
}
.calculator-content-body p {
  color: #475569;
  line-height: 1.75;
  margin-bottom: 1.25rem;
  font-size: 1rem;
}
.calculator-content-body ul, .calculator-content-body ol {
  color: #475569;
  line-height: 1.75;
  padding-left: 1.5rem;
  margin-bottom: 1.25rem;
}
.calculator-content-body li { margin-bottom: 0.5rem; }
.calculator-content-body strong { color: #1e293b; }
.calculator-content-body a { color: #1d4ed8; text-decoration: none; font-weight: 600; }
.calculator-content-body a:hover { text-decoration: underline; }

/* Quick Answer Card */
.quick-answer-card {
  background: #eff6ff;
  border: 1.5px solid #bfdbfe;
  border-left: 5px solid #1d4ed8;
  border-radius: 0 12px 12px 0;
  padding: 1.5rem 1.75rem;
  margin-bottom: 2rem;
}
.quick-answer-card h2 {
  border-bottom: none !important;
  padding-bottom: 0 !important;
  margin: 0 0 0.75rem !important;
  font-size: 1.3rem !important;
  color: #1e40af !important;
}
.quick-answer-card p { margin-bottom: 0; }

/* Data Tables */
.table-responsive { overflow-x: auto; margin-bottom: 1.5rem; }
.data-table {
  width: 100%;
  border-collapse: collapse;
  border-radius: 10px;
  overflow: hidden;
  border: 1px solid #e8edf5;
}
.data-table th {
  background: #1e3a5f;
  color: #fff;
  padding: 13px 16px;
  text-align: left;
  font-size: 0.88rem;
  font-weight: 600;
}
.data-table td {
  padding: 12px 16px;
  border-bottom: 1px solid #f1f5f9;
  font-size: 0.9rem;
  color: #334155;
}
.data-table tr:last-child td { border-bottom: none; }
.data-table tr:nth-child(even) td { background: #f8fafc; }

/* FAQ */
.faq-item {
  border-bottom: 1px solid #f0f4fa;
  padding: 1.25rem 0;
}
.faq-item:last-child { border-bottom: none; }
.faq-item h4 {
  font-size: 1.02rem;
  font-weight: 700;
  color: #0f172a;
  margin: 0 0 0.5rem;
}
.faq-item p {
  color: #475569;
  line-height: 1.7;
  font-size: 0.97rem;
  margin: 0;
}

/* Responsive */
@media (max-width: 768px) {
  .calculator-layout { grid-template-columns: 1fr; }
  .calculator-panel:first-child { border-right: none; border-bottom: 1px solid #f0f4fa; }
  .results-grid { grid-template-columns: 1fr; }
  .calculator-header h1 { font-size: 1.6rem; }
  .container { padding: 1rem 1rem 3rem; }
  .calculator-content-body { padding: 1.5rem; }
}
</style>

<main id="main-content" class="container">
  <div class="calculator-header">
    <h1>Jumbo Loan Calculator (<?php echo $currentYear; ?>)</h1>
    <p class="lead-description">
      Calculate monthly payments on non-conforming luxury mortgages exceeding <strong>$766,550</strong>. Model Standalone Jumbo vs. 80-10-10 Piggyback financing, analyze required liquid asset reserves, and verify underwriting qualification thresholds.
    </p>
  </div>

  <div class="calculator-layout">
    <!-- LEFT INPUT PANEL -->
    <div class="calculator-panel">
      <h2 class="panel-title">Jumbo Loan Inputs</h2>

      <div class="form-group">
        <label for="jumboPrice">Home Purchase Price ($):</label>
        <input type="number" id="jumboPrice" class="form-control" value="1250000" min="200000" step="25000">
        <span class="field-hint">Luxury &amp; high-cost real estate purchase price.</span>
      </div>

      <div class="form-group">
        <label for="jumboDownPct">Down Payment (%):</label>
        <select id="jumboDownPct" class="form-control">
          <option value="10">10% Down Payment (Min 720 FICO)</option>
          <option value="15">15% Down Payment</option>
          <option value="20" selected>20% Down Payment (Standard Jumbo)</option>
          <option value="25">25% Down Payment</option>
          <option value="30">30% Down Payment</option>
        </select>
      </div>

      <div class="form-group">
        <label for="jumboStructure">Financing Structure:</label>
        <select id="jumboStructure" class="form-control">
          <option value="standalone" selected>Single Jumbo First Mortgage</option>
          <option value="piggyback">80-10-10 Piggyback Loan (80% 1st + 10% 2nd + 10% Down)</option>
        </select>
        <span class="field-hint">Piggyback keeps 1st mortgage conforming to avoid jumbo overlays.</span>
      </div>

      <div class="form-group">
        <label for="jumboTerm">Loan Term:</label>
        <select id="jumboTerm" class="form-control">
          <option value="30" selected>30-Year Fixed</option>
          <option value="15">15-Year Fixed</option>
        </select>
      </div>

      <div class="form-group">
        <label for="jumboRate">Jumbo Interest Rate (% APR):</label>
        <input type="number" id="jumboRate" class="form-control" value="6.75" min="1.0" max="15.0" step="0.05">
        <span class="field-hint">Current 2026 prevailing 30-year Jumbo benchmark rate.</span>
      </div>

      <div class="form-group" id="groupSecondRate" style="display:none;">
        <label for="secondRate">Second Mortgage Rate (% APR):</label>
        <input type="number" id="secondRate" class="form-control" value="8.50" min="1.0" max="18.0" step="0.10">
        <span class="field-hint">HELOC / 2nd lien rate for 80-10-10 combo structure.</span>
      </div>

      <div class="form-group">
        <label for="jumboTaxRate">Annual Property Tax Rate (%):</label>
        <input type="number" id="jumboTaxRate" class="form-control" value="1.25" min="0" max="4.0" step="0.05">
      </div>

      <div class="form-group">
        <label for="jumboInsurance">Annual Homeowners Insurance ($):</label>
        <input type="number" id="jumboInsurance" class="form-control" value="3200" min="0" step="100">
      </div>

      <div class="form-group">
        <label for="jumboHoa">Monthly HOA / Condo Fees ($):</label>
        <input type="number" id="jumboHoa" class="form-control" value="0" min="0" step="50">
      </div>
    </div>

    <!-- RIGHT RESULTS PANEL -->
    <div class="calculator-panel results-panel">
      <h2 class="panel-title">Your Estimated Jumbo Payment</h2>

      <div class="highlight-metric">
        <div class="metric-label">Total Monthly Housing Payment (PITI)</div>
        <div class="metric-value primary-value" id="resJumboTotalMonthly">$0</div>
        <div class="metric-sub" id="resJumboPIBreakdown">Principal &amp; Interest: $0 / mo</div>
      </div>

      <div class="results-grid">
        <div class="result-card">
          <div class="result-title">Total Loan Principal</div>
          <div class="result-number" id="resJumboPrincipal">$0</div>
          <div class="result-desc" id="resJumboConformingStatus">Exceeds $766,550 Baseline Limit</div>
        </div>

        <div class="result-card">
          <div class="result-title">Down Payment Required</div>
          <div class="result-number" id="resJumboDownAmt">$0</div>
          <div class="result-desc" id="resJumboDownPctLabel">20% Down Payment</div>
        </div>

        <div class="result-card">
          <div class="result-title">Monthly Escrow (Tax + Ins)</div>
          <div class="result-number" id="resJumboEscrow">$0 / mo</div>
          <div class="result-desc">Taxes: <span id="resJumboTax">$0</span> | Ins: <span id="resJumboIns">$0</span></div>
        </div>

        <div class="result-card warning-card">
          <div class="result-title">Required Liquid Reserves</div>
          <div class="result-number text-warning" id="resJumboReserves">$0</div>
          <div class="result-desc">6 Months PITI Post-Close Buffer</div>
        </div>
      </div>

      <div class="summary-breakdown">
        <h3>Jumbo Mortgage Financing Summary</h3>
        <table class="summary-table">
          <tr><td>Home Purchase Price:</td><td id="resSumJumboPrice">$0</td></tr>
          <tr><td>Down Payment (Cash at Settlement):</td><td id="resSumJumboDown">$0</td></tr>
          <tr><td>First Mortgage Principal:</td><td id="resSumJumboFirstLoan">$0</td></tr>
          <tr id="rowPiggybackSecond" style="display:none;"><td>Second Mortgage Principal (10%):</td><td id="resSumJumboSecondLoan">$0</td></tr>
          <tr><td>Total Lifetime Interest Paid:</td><td id="resSumJumboInterest">$0</td></tr>
          <tr><td><strong>Total 30-Year Financing Outlay:</strong></td><td id="resSumJumboTotalOutlay"><strong>$0</strong></td></tr>
          <tr class="highlight-row"><td><strong>Recommended 12-Month Reserve Asset Cushion:</strong></td><td><strong id="resSumJumboReserves12">$0</strong></td></tr>
        </table>
      </div>
    </div>
  </div>

  <!-- CONTENT & GUIDES -->
  <div class="calculator-content-body">
    <div class="quick-answer-card">
      <h2>What Makes a Mortgage a "Jumbo Loan" in <?php echo $currentYear; ?>?</h2>
      <p>
        A <strong>jumbo mortgage</strong> (non-conforming loan) is any residential loan amount that exceeds the baseline conforming loan limits established annually by the Federal Housing Finance Agency (FHFA). In 2026, the national conforming baseline limit is <strong>$766,550</strong> across standard US counties and up to <strong>$1,149,825</strong> in designated high-cost markets (such as Orange County, CA, Manhattan, NY, or King County, WA).
      </p>
    </div>

    <h2>2026 Conforming vs. Jumbo Underwriting Guidelines</h2>
    <p>Because jumbo loans cannot be purchased or guaranteed by Fannie Mae or Freddie Mac, lenders assume all default risk, enforcing stricter underwriting standards:</p>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>Underwriting Factor</th>
            <th>Conforming Loan (&le; $766,550)</th>
            <th>Jumbo Loan (&gt; $766,550)</th>
            <th>Impact on Borrower</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Minimum Credit Score</strong></td>
            <td>620 (Conventional)</td>
            <td><strong>700 &ndash; 740+</strong></td>
            <td>Requires excellent credit history and zero recent late payments.</td>
          </tr>
          <tr>
            <td><strong>Down Payment</strong></td>
            <td>3% to 5%</td>
            <td><strong>10% to 20%+</strong></td>
            <td>Greater cash equity required at settlement table.</td>
          </tr>
          <tr>
            <td><strong>Liquid Asset Reserves</strong></td>
            <td>0 to 2 months PITI</td>
            <td><strong>6 to 12 months PITI</strong></td>
            <td>Must prove liquid assets remain after closing costs and down payment.</td>
          </tr>
          <tr>
            <td><strong>Max Debt-to-Income (DTI)</strong></td>
            <td>Up to 45% &ndash; 50%</td>
            <td><strong>43% Strict Cap</strong></td>
            <td>Limits overall monthly debt obligations relative to gross income.</td>
          </tr>
          <tr>
            <td><strong>Property Appraisals</strong></td>
            <td>1 standard appraisal (or waiver)</td>
            <td><strong>2 independent appraisals</strong></td>
            <td>Common on purchase prices over $1.5M to $2M to confirm market value.</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h2>Standalone Jumbo vs. 80-10-10 Piggyback Loan Comparison</h2>
    <p>High-net-worth buyers frequently evaluate whether to take a single large jumbo loan or structure the transaction as an <strong>80-10-10 piggyback combo</strong>:</p>
    <ul>
      <li><strong>Standalone Jumbo:</strong> One large mortgage (e.g., $1,000,000 on a $1,250,000 home with 20% down). Simpler transaction with a single monthly payment and one set of closing fees.</li>
      <li><strong>80-10-10 Combo Loan:</strong> An 80% first mortgage ($1,000,000), a 10% second mortgage HELOC ($125,000), and a 10% down payment ($125,000). Keeps the buyer's down payment at only 10% while completely bypassing expensive Private Mortgage Insurance (PMI).</li>
    </ul>

    <h2>Liquid Asset Reserves: What Counts?</h2>
    <p>Jumbo lenders require <strong>6 to 12 months of post-closing PITI reserves</strong> to ensure you can service the debt during financial volatility. Qualifying reserve asset classes include:</p>
    <ul>
      <li><strong>100% Value Counted:</strong> Liquid checking accounts, high-yield savings accounts, money market funds, and certificates of deposit (CDs).</li>
      <li><strong>70% to 80% Value Counted:</strong> Non-retirement taxable brokerage accounts (stocks, bonds, mutual funds) discounted for market volatility.</li>
      <li><strong>60% to 70% Value Counted:</strong> Vested retirement accounts (401(k), Traditional IRA, Roth IRA) discounted for early withdrawal penalties and taxes.</li>
    </ul>

        <h2>Asset Depletion &amp; Cross-Collateralization in Jumbo Underwriting</h2>
    <p>High-net-worth individuals, business owners, and retirees with substantial liquid assets but modest W-2 taxable income can utilize specialized jumbo qualification methods:</p>
    <ul>
      <li><strong>Asset Depletion / Asset Utilization:</strong> Lenders calculate qualifying monthly income by dividing total verified liquid assets (e.g. $3,000,000 in brokerage accounts) by a set amortization period (typically 240 to 360 months), adding thousands in qualifying income to lower the borrower's debt-to-income (DTI) ratio without requiring actual asset liquidation.</li>
      <li><strong>Cross-Collateralization (Pledge of Assets):</strong> Instead of putting down 20% to 30% cash, affluent borrowers can pledge marketable securities (stocks, municipal bonds) held with the lender's private banking division as additional collateral, securing 100% financing on luxury estates with zero down payment.</li>
    </ul>

<h2>Frequently Asked Questions (FAQ)</h2>
    <div class="faq-item">
      <h4>What is the 2026 conforming loan limit threshold for a jumbo loan?</h4>
      <p>For 2026, the baseline conforming loan limit is $766,550 across most US counties. Any single-family mortgage exceeding this amount is classified as a non-conforming jumbo loan. In designated high-cost counties, the conforming limit rises up to $1,149,825.</p>
    </div>
    <div class="faq-item">
      <h4>How much down payment is required for a jumbo mortgage?</h4>
      <p>Most lenders require a 10% to 20% down payment on jumbo loans up to $1.5 million. For super-jumbo loans exceeding $2 million to $3 million, lenders typically require 20% to 30% down.</p>
    </div>
    <div class="faq-item">
      <h4>What are post-closing cash reserve requirements for jumbo loans?</h4>
      <p>Jumbo underwriters require borrowers to hold between 6 and 12 months of total housing expenses (PITI: Principal, Interest, Taxes, Insurance) in verified liquid or semi-liquid assets (checking, savings, money market, or vested brokerage/retirement accounts) after paying closing costs.</p>
    </div>
    <div class="faq-item">
      <h4>What credit score is needed to qualify for a jumbo loan in 2026?</h4>
      <p>Borrowers typically need a minimum credit score of 700 to qualify for a jumbo loan with 20% down. For lower down payments (10% to 15%) or loan amounts over $1.5 million, lenders typically require a 720 to 740+ FICO score.</p>
    </div>
    <div class="faq-item">
      <h4>What is an 80-10-10 piggyback loan and how does it avoid jumbo rates?</h4>
      <p>An 80-10-10 structure breaks financing into an 80% primary conforming first mortgage, a 10% second mortgage (HELOC or fixed home equity loan), and a 10% cash down payment. This avoids private mortgage insurance (PMI) and keeps the first mortgage within conforming interest rate guidelines.</p>
    </div>
    <div class="faq-item">
      <h4>What is the maximum debt-to-income (DTI) ratio for a jumbo loan?</h4>
      <p>Most jumbo lenders cap the back-end debt-to-income ratio at 43%, though borrowers with excellent credit (760+) and substantial reserves (18+ months PITI) may receive exceptions up to 45%.</p>
    </div>
    <div class="faq-item">
      <h4>Are jumbo mortgage interest rates higher than conforming rates?</h4>
      <p>Historically, jumbo rates were 0.25% to 0.50% higher than conforming loans. In modern market conditions, jumbo rates are often equal to or slightly lower than conforming rates because lenders compete aggressively for affluent, high-deposit wealth management clients.</p>
    </div>
    <div class="faq-item">
      <h4>Can you use gift funds for a jumbo loan down payment?</h4>
      <p>Yes, but many lenders require that at least 5% to 10% of the purchase price come from the borrower's own documented personal funds before gift funds can be applied toward the balance of the down payment or closing costs.</p>
    </div>

    <h2>Explore Related Mortgage &amp; Loan Tools</h2>
    <ul>
      <li><a href="/loan-calculators/va-loan-calculator">VA Loan Calculator</a> &mdash; Calculate 0% down loans with no loan limits for eligible military borrowers.</li>
      <li><a href="/loan-calculators/fha-loan-calculator">FHA Loan Calculator</a> &mdash; Model 3.5% down financing and county limits.</li>
      <li><a href="/loan-calculators/interest-only-loan-calculator">Interest-Only Loan Calculator</a> &mdash; Model interest-only structures popular among jumbo borrowers.</li>
      <li><a href="/real-estate/closing-cost-calculator-california">California Closing Cost Calculator</a> &mdash; Calculate luxury transfer taxes and escrow costs in CA.</li>
    </ul>
  </div>
</main>

<script>
function calculateJumboLoan() {
  var price = parseFloat(document.getElementById('jumboPrice').value) || 0;
  var downPct = (parseFloat(document.getElementById('jumboDownPct').value) || 20) / 100;
  var structure = document.getElementById('jumboStructure').value;
  var years = parseInt(document.getElementById('jumboTerm').value) || 30;
  var rate = (parseFloat(document.getElementById('jumboRate').value) || 6.75) / 100;
  var secondRate = (parseFloat(document.getElementById('secondRate').value) || 8.50) / 100;
  var taxRate = (parseFloat(document.getElementById('jumboTaxRate').value) || 1.25) / 100;
  var annualIns = parseFloat(document.getElementById('jumboInsurance').value) || 3200;
  var monthlyHoa = parseFloat(document.getElementById('jumboHoa').value) || 0;

  var isPiggyback = (structure === 'piggyback');
  document.getElementById('groupSecondRate').style.display = isPiggyback ? 'block' : 'none';
  document.getElementById('rowPiggybackSecond').style.display = isPiggyback ? 'table-row' : 'none';

  var downPayment = price * (isPiggyback ? 0.10 : downPct);
  var firstLoan = 0;
  var secondLoan = 0;

  if (isPiggyback) {
    firstLoan = price * 0.80;
    secondLoan = price * 0.10;
  } else {
    firstLoan = Math.max(0, price - downPayment);
  }

  var totalPrincipal = firstLoan + secondLoan;

  // Monthly P&I First Mortgage
  var r1 = rate / 12;
  var n = years * 12;
  var monthlyPI1 = 0;
  if (r1 > 0 && n > 0 && firstLoan > 0) {
    monthlyPI1 = firstLoan * (r1 * Math.pow(1 + r1, n)) / (Math.pow(1 + r1, n) - 1);
  }

  // Monthly P&I Second Mortgage (if piggyback, 20-year am standard)
  var monthlyPI2 = 0;
  if (isPiggyback && secondLoan > 0) {
    var r2 = secondRate / 12;
    var n2 = 240; // 20 years
    monthlyPI2 = secondLoan * (r2 * Math.pow(1 + r2, n2)) / (Math.pow(1 + r2, n2) - 1);
  }

  var totalPI = monthlyPI1 + monthlyPI2;
  var monthlyTax = (price * taxRate) / 12;
  var monthlyIns = annualIns / 12;
  var totalMonthly = totalPI + monthlyTax + monthlyIns + monthlyHoa;

  var reserves6Mo = totalMonthly * 6;
  var reserves12Mo = totalMonthly * 12;

  var totalInterest = (monthlyPI1 * n) - firstLoan;
  if (isPiggyback) {
    totalInterest += ((monthlyPI2 * 240) - secondLoan);
  }

  var totalOutlay = downPayment + (monthlyPI1 * n) + (isPiggyback ? (monthlyPI2 * 240) : 0) + (price * taxRate * years) + (annualIns * years);

  // Update UI
  document.getElementById('resJumboTotalMonthly').textContent = '$' + Math.round(totalMonthly).toLocaleString() + ' / mo';
  document.getElementById('resJumboPIBreakdown').textContent = isPiggyback 
    ? '1st P&I: $' + Math.round(monthlyPI1).toLocaleString() + ' | 2nd: $' + Math.round(monthlyPI2).toLocaleString()
    : 'Principal & Interest: $' + Math.round(monthlyPI1).toLocaleString() + ' / mo';

  document.getElementById('resJumboPrincipal').textContent = '$' + Math.round(totalPrincipal).toLocaleString();
  document.getElementById('resJumboConformingStatus').textContent = (firstLoan > 766550) 
    ? 'Exceeds $766,550 Baseline (Jumbo Tier)' 
    : 'Within Conforming Limits ($' + Math.round(firstLoan).toLocaleString() + ')';

  document.getElementById('resJumboDownAmt').textContent = '$' + Math.round(downPayment).toLocaleString();
  document.getElementById('resJumboDownPctLabel').textContent = (isPiggyback ? '10%' : (downPct * 100).toFixed(0) + '%') + ' Cash Down Payment';
  document.getElementById('resJumboEscrow').textContent = '$' + Math.round(monthlyTax + monthlyIns).toLocaleString() + ' / mo';
  document.getElementById('resJumboTax').textContent = '$' + Math.round(monthlyTax).toLocaleString();
  document.getElementById('resJumboIns').textContent = '$' + Math.round(monthlyIns).toLocaleString();
  document.getElementById('resJumboReserves').textContent = '$' + Math.round(reserves6Mo).toLocaleString();

  document.getElementById('resSumJumboPrice').textContent = '$' + Math.round(price).toLocaleString();
  document.getElementById('resSumJumboDown').textContent = '$' + Math.round(downPayment).toLocaleString();
  document.getElementById('resSumJumboFirstLoan').textContent = '$' + Math.round(firstLoan).toLocaleString() + (isPiggyback ? ' (80% 1st)' : '');
  if (isPiggyback) {
    document.getElementById('resSumJumboSecondLoan').textContent = '$' + Math.round(secondLoan).toLocaleString();
  }
  document.getElementById('resSumJumboInterest').textContent = '$' + Math.round(totalInterest).toLocaleString();
  document.getElementById('resSumJumboTotalOutlay').textContent = '$' + Math.round(totalOutlay).toLocaleString();
  document.getElementById('resSumJumboReserves12').textContent = '$' + Math.round(reserves12Mo).toLocaleString() + ' (12 Mo Reserve Cushion)';
}

document.querySelectorAll('#jumboPrice, #jumboDownPct, #jumboStructure, #jumboTerm, #jumboRate, #secondRate, #jumboTaxRate, #jumboInsurance, #jumboHoa').forEach(function(el) {
  el.addEventListener('input', calculateJumboLoan);
  el.addEventListener('change', calculateJumboLoan);
});

calculateJumboLoan();
</script>

<?php require_once '../includes/footer.php'; ?>
