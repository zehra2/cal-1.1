<?php
$currentYear = date('Y');
$pageTitle = "Boat Loan Payment Calculator ($currentYear) | Monthly Marine Financing";
$metaDescription = "Calculate monthly boat and yacht loan payments. Compare marine financing interest rates, terms up to 20 years, down payment rules, and marine survey fees.";
$schemaData = json_decode(<<<'EOD'
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "HowTo",
      "name": "How to Calculate Monthly Boat Loan Payments",
      "step": [
        {
          "@type": "HowToStep",
          "name": "Enter boat purchase price",
          "text": "Input the purchase price for the new or used boat, yacht, or personal watercraft."
        },
        {
          "@type": "HowToStep",
          "name": "Specify down payment",
          "text": "Enter your cash down payment or trade-in value (customarily 10% to 20% for marine financing)."
        },
        {
          "@type": "HowToStep",
          "name": "Choose loan term",
          "text": "Select a loan repayment duration from 5 to 20 years (60 to 240 months)."
        },
        {
          "@type": "HowToStep",
          "name": "Enter interest rate (APR)",
          "text": "Input the quoted annual percentage rate based on your credit score and boat class."
        },
        {
          "@type": "HowToStep",
          "name": "Calculate payment & total interest",
          "text": "Review your estimated monthly payment, total interest charges, and loan amortization."
        }
      ]
    },
    {
      "@type": "WebApplication",
      "@id": "https://americacalculator.com/loan-calculators/boat-loan-calculator#app",
      "name": "Boat Loan Payment Calculator",
      "url": "https://americacalculator.com/loan-calculators/boat-loan-calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "All",
      "offer": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "description": "Calculate monthly boat financing payments, marine survey expenses, loan terms from 5 to 20 years, and interest rates by credit score."
    },
    {
      "@type": "FAQPage",
      "@id": "https://americacalculator.com/loan-calculators/boat-loan-calculator#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How long can you finance a boat in 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Boat loan terms range from 5 to 20 years (60 to 240 months). Small runabouts and personal watercraft under $25,000 typically finance for 5 to 10 years, while vessels over $50,000 to $100,000+ (such as cabin cruisers, center consoles, and luxury yachts) qualify for 15- to 20-year repayment terms."
          }
        },
        {
          "@type": "Question",
          "name": "What credit score is needed to finance a boat?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most marine lenders look for a minimum credit score of 680 to 700. For premier boat loan APRs (currently 7.24% to 8.49%) and loans exceeding $100,000, lenders generally require a FICO score of 720 to 750+."
          }
        },
        {
          "@type": "Question",
          "name": "How much down payment is required for a boat loan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard marine lender down payment requirements range from 10% to 20% of the contracted purchase price. For loans exceeding $100,000 or for older pre-owned vessels (over 10 years old), lenders frequently require a 20% to 25% cash down payment."
          }
        },
        {
          "@type": "Question",
          "name": "When is a marine survey required for financing?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Marine lenders almost universally require a comprehensive Condition and Valuation (C&V) survey by an accredited surveyor (SAMS or NAMS certified) for used boats over 25-30 feet or valued at $50,000+. Surveys cost roughly $20 to $30 per foot plus haul-out yard fees."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between USCG documentation and state registration?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "State registration is handled by your local DMV/wildlife department with state hull decals. US Coast Guard (USCG) Documentation is a federal national registration required by most lenders for loans over $100,000 to record a Preferred Ship's Mortgage, providing clear global title."
          }
        },
        {
          "@type": "Question",
          "name": "How do boat loan interest rates compare to auto and RV loans?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Boat loan interest rates are typically 0.5% to 1.5% higher than new auto loan rates due to higher collateral depreciation risk, longer repayment terms (up to 20 years), and specialized repossession logistics."
          }
        },
        {
          "@type": "Question",
          "name": "Is boat loan interest tax deductible as a second home?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, if the boat has sleeping berths, a galley (cooking facility), and a built-in marine head (toilet), IRS regulations allow you to treat the vessel as a qualified second home and deduct mortgage interest on Schedule A."
          }
        },
        {
          "@type": "Question",
          "name": "What is the 10% rule for boat ownership costs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The 10% rule of marine ownership states that annual operational maintenance, slip mooring or dry storage, marine insurance, winterization, and fuel will average approximately 10% of the vessel original purchase price every single year."
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
  --primary-light: #e0f2fe;
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
.results-panel { background: #0c4a6e; color: #ffffff; border-radius: var(--radius); padding: 2rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 25px rgba(12,74,110,0.25); }
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
  transition: border-color 0.2s;
  background: #fff;
}
.input-wrapper input:focus, .input-wrapper select:focus { border-color: var(--primary); box-shadow: 0 0 0 4px rgba(2, 132, 199, 0.1); }
.grid-2-col { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
.boat-hero {
  background: rgba(56, 189, 248, 0.15);
  border: 1px solid rgba(56, 189, 248, 0.3);
  border-radius: 14px;
  padding: 1.75rem;
  text-align: center;
  margin-bottom: 1.5rem;
}
.boat-hero .label { font-size: 0.85rem; color: #bae6fd; font-weight: 700; text-transform: uppercase; }
.boat-hero .val-main { font-size: 2.75rem; font-weight: 800; color: #38bdf8; margin: 0.25rem 0; line-height: 1; }
.boat-hero .val-sub { font-size: 0.92rem; color: #cbd5e1; }
.breakdown-row { display: flex; justify-content: space-between; font-size: 0.95rem; padding: 0.55rem 0; border-bottom: 1px solid rgba(255, 255, 255, 0.08); }
.breakdown-row:last-child { border-bottom: none; }
.breakdown-row span:first-child { color: #cbd5e1; }
.breakdown-row span:last-child { font-weight: 700; color: #34d399; }
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
    <h1>Boat Loan Payment Calculator (<?php echo $currentYear; ?>)</h1>
    <p>Calculate monthly financing payments for powerboats, center consoles, pontoon vessels, sailboats, and yachts. Compare terms up to 20 years, marine survey fees, and down payments.</p>
  </div>

  <div class="calculator-container">
    <div class="form-panel">
      <div class="section-subtitle">1. Vessel Price &amp; Down Payment</div>
      
      <div class="grid-2-col">
        <div class="input-group">
          <label for="boatPrice">Boat Purchase Price</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="boatPrice" value="65000" step="2500">
          </div>
        </div>
        <div class="input-group">
          <label for="downPaymentPct">Down Payment (%)</label>
          <div class="input-wrapper">
            <input type="number" id="downPaymentPct" value="15" min="0" max="80" step="1" style="padding-left: 1rem;">
            <span class="input-suffix">%</span>
          </div>
        </div>
      </div>

      <div class="section-subtitle" style="margin-top: 1.75rem;">2. Marine Financing Terms</div>

      <div class="grid-2-col">
        <div class="input-group">
          <label for="interestRate">Annual Interest Rate (APR)</label>
          <div class="input-wrapper">
            <input type="number" id="interestRate" value="7.74" step="0.125" style="padding-left: 1rem;">
            <span class="input-suffix">%</span>
          </div>
        </div>
        <div class="input-group">
          <label for="loanTermYear">Loan Term</label>
          <div class="input-wrapper" style="padding-left: 0;">
            <select id="loanTermYear" style="padding-left: 1rem;">
              <option value="20">20 Years (240 Months)</option>
              <option value="15" selected>15 Years (180 Months)</option>
              <option value="10">10 Years (120 Months)</option>
              <option value="7">7 Years (84 Months)</option>
              <option value="5">5 Years (60 Months)</option>
            </select>
          </div>
        </div>
      </div>

      <div class="section-subtitle" style="margin-top: 1.75rem;">3. Taxes &amp; Marine Closing Fees</div>
      <div class="grid-2-col">
        <div class="input-group">
          <label for="salesTaxRate">State Sales / Watercraft Tax (%)</label>
          <div class="input-wrapper">
            <input type="number" id="salesTaxRate" value="6.0" step="0.25" style="padding-left: 1rem;">
            <span class="input-suffix">%</span>
          </div>
        </div>
        <div class="input-group">
          <label for="surveyDocs">Marine Survey &amp; Doc Fees ($)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="surveyDocs" value="1200" step="100">
          </div>
        </div>
      </div>
    </div>

    <div class="results-panel">
      <div>
        <div class="boat-hero">
          <div class="label">Estimated Monthly Payment</div>
          <div class="val-main" id="resMonthlyPayment">$519</div>
          <div class="val-sub" id="resLoanAmount">Loan Principal: $55,250</div>
        </div>

        <div class="breakdown-row"><span>Required Cash Down Payment:</span><span id="resDownPayment">$9,750</span></div>
        <div class="breakdown-row"><span>State Sales / Title Tax:</span><span id="resSalesTax">$3,900</span></div>
        <div class="breakdown-row"><span>Marine Survey &amp; Titling:</span><span id="resSurveyDocs">$1,200</span></div>
        <div class="breakdown-row"><span>Total Upfront Cash to Close:</span><span id="resTotalCash">$14,850</span></div>
        <div class="breakdown-row"><span>Lifetime Total Interest Paid:</span><span id="resTotalInterest" style="color:#fbbf24;">$38,187</span></div>
      </div>

      <div style="border-top: 1px solid rgba(255,255,255,0.15); padding-top: 1rem; text-align: center;">
        <div style="font-size: 0.8rem; color: #bae6fd;">Total Vessel Cost (P+I + Down + Fees):</div>
        <div style="font-size: 1.35rem; font-weight: 800; color: #38bdf8;" id="resTotalCost">$108,287</div>
      </div>
    </div>
  </div>

  <div class="calculator-content-body">
    <div class="quick-answer-card">
      <h2>Quick Summary: How Marine Financing Works in <?php echo $currentYear; ?></h2>
      <p>Boat loans function similarly to auto loans but offer extended repayment terms ranging from <strong>5 to 20 years</strong>. Because marine vessels are specialized luxury assets, lenders require <strong>10% to 20% down payments</strong>, FICO credit scores of <strong>680+</strong>, and mandatory Condition &amp; Valuation (C&amp;V) marine surveys on used vessels valued over $50,000.</p>
    </div>

    <h2>2026 Marine Loan Interest Rates by Credit Tier &amp; Loan Amount</h2>
    <p>Marine lending interest rates depend heavily on your credit score, the vessel age, and the financed loan balance. Lenders reward higher loan amounts ($100k+) with lower APRs because fixed underwriting costs are spread across a larger balance.</p>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>FICO Credit Tier</th>
            <th>Credit Score</th>
            <th>Loans $25k - $49k</th>
            <th>Loans $50k - $99k</th>
            <th>Loans $100k+ (Yachts)</th>
          </tr>
        </thead>
        <tbody>
          <tr><td><strong>Super Prime</strong></td><td>760+</td><td>7.49% - 8.24%</td><td>6.99% - 7.74%</td><td>6.49% - 7.24%</td></tr>
          <tr><td><strong>Prime</strong></td><td>720 - 759</td><td>7.99% - 8.99%</td><td>7.49% - 8.49%</td><td>6.99% - 7.99%</td></tr>
          <tr><td><strong>Near Prime</strong></td><td>680 - 719</td><td>8.99% - 10.49%</td><td>8.49% - 9.99%</td><td>7.99% - 9.49%</td></tr>
          <tr><td><strong>Subprime</strong></td><td>640 - 679</td><td>10.99% - 13.99%</td><td>10.49% - 12.99%</td><td>9.99% - 11.99%</td></tr>
        </tbody>
      </table>
    </div>

    <h2>Marine Survey Costs &amp; Professional Requirements</h2>
    <p>When purchasing a pre-owned vessel, marine underwriters and insurance carriers require a full <strong>Condition and Valuation (C&amp;V) marine survey</strong> conducted by a certified marine surveyor. Surveyors must be accredited by either the <strong>Society of Accredited Marine Surveyors (SAMS)</strong> or the <strong>National Association of Marine Surveyors (NAMS)</strong>.</p>
    
    <h3>What a Marine Survey Inspects:</h3>
    <ul>
      <li><strong>Hull &amp; Stringer Structural Integrity:</strong> Ultrasound moisture testing on fiberglass laminates, transom core soundings, and osmosis blister checks.</li>
      <li><strong>Propulsion &amp; Fuel Delivery Systems:</strong> Engine compression testing, heat exchanger inspection, exhaust risers, and ABYC compliance on fuel lines.</li>
      <li><strong>Marine Electrical Grid:</strong> 12V DC battery banks, 120V/240V AC shore power isolation, bonding and zinc sacrificial anode corrosion protection.</li>
      <li><strong>Safety &amp; USCG Compliance:</strong> Bilge pumps, float switches, marine sanitation devices (MSD Type I/II/III), flares, and life-saving equipment.</li>
    </ul>

    <h2>US Coast Guard Documentation vs. State Registration</h2>
    <p>One of the key distinctions in marine lending is whether your boat will be registered with your state DMV or documented with the federal government:</p>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th>State Titling / DMV Registration</th>
            <th>US Coast Guard (USCG) Documentation</th>
          </tr>
        </thead>
        <tbody>
          <tr><td><strong>Jurisdiction</strong></td><td>Individual State Wildlife / DMV agency</td><td>National Vessel Documentation Center (NVDC)</td></tr>
          <tr><td><strong>Vessel Qualification</strong></td><td>All motorized vessels &amp; sailboats</td><td>5 Net Tons or larger (approx. 26+ feet)</td></tr>
          <tr><td><strong>Lender Requirement</strong></td><td>Standard for loans under $75,000 - $100,000</td><td>Mandatory for marine loans over $100,000</td></tr>
          <tr><td><strong>Lien Recording</strong></td><td>State title lien notation</td><td>Preferred Ship's Mortgage (Federal Maritime Lien)</td></tr>
          <tr><td><strong>International Travel</strong></td><td>Requires state registration papers &amp; customs clear</td><td>Provides recognized US flag protection abroad</td></tr>
        </tbody>
      </table>
    </div>

    <h2>The True Cost of Boat Ownership: The 10% Rule</h2>
    <p>Purchasing the vessel is only the initial financial commitment. Experienced mariners adhere to the <strong>10% Annual Ownership Rule</strong>: budgeting approximately 10% of the vessel's original purchase price every single year for operational upkeep:</p>
    <ul>
      <li><strong>Slip Mooring or Dry Marina Storage:</strong> $2,500 to $12,000/year depending on location (coastal Florida vs. inland lakes).</li>
      <li><strong>Marine Comprehensive Insurance:</strong> $800 to $3,500/year covering hull damage, salvage liability, hurricane haul-out, and fuel spill remediation.</li>
      <li><strong>Annual Engine &amp; Drive Service:</strong> $600 to $2,500/year for impeller replacements, gear oil changes, fuel filters, and spark plugs.</li>
      <li><strong>Winterization &amp; Shrink-Wrapping:</strong> $500 to $1,500/year in northern climates.</li>
    </ul>

    <h2>Frequently Asked Questions (FAQ)</h2>
    <div class="faq-item">
      <h4>How long can you finance a boat in 2026?</h4>
      <p>Boat loan terms range from 5 to 20 years (60 to 240 months). Small runabouts and personal watercraft under $25,000 typically finance for 5 to 10 years, while vessels over $50,000 to $100,000+ (such as cabin cruisers, center consoles, and luxury yachts) qualify for 15- to 20-year repayment terms.</p>
    </div>
    <div class="faq-item">
      <h4>What credit score is needed to finance a boat?</h4>
      <p>Most marine lenders look for a minimum credit score of 680 to 700. For premier boat loan APRs (currently 7.24% to 8.49%) and loans exceeding $100,000, lenders generally require a FICO score of 720 to 750+.</p>
    </div>
    <div class="faq-item">
      <h4>How much down payment is required for a boat loan?</h4>
      <p>Standard marine lender down payment requirements range from 10% to 20% of the contracted purchase price. For loans exceeding $100,000 or for older pre-owned vessels, lenders frequently require a 20% to 25% cash down payment.</p>
    </div>
    <div class="faq-item">
      <h4>When is a marine survey required for financing?</h4>
      <p>Marine lenders almost universally require a comprehensive Condition and Valuation (C&V) survey by an accredited surveyor (SAMS or NAMS certified) for used boats over 25-30 feet or valued at $50,000+. Surveys cost roughly $20 to $30 per foot plus haul-out yard fees.</p>
    </div>
    <div class="faq-item">
      <h4>What is the difference between USCG documentation and state registration?</h4>
      <p>State registration is handled by your local DMV/wildlife department with state hull decals. US Coast Guard (USCG) Documentation is a federal national registration required by most lenders for loans over $100,000 to record a Preferred Ship's Mortgage, providing clear global title.</p>
    </div>
    <div class="faq-item">
      <h4>How do boat loan interest rates compare to auto and RV loans?</h4>
      <p>Boat loan interest rates are typically 0.5% to 1.5% higher than new auto loan rates due to higher collateral depreciation risk, longer repayment terms (up to 20 years), and specialized repossession logistics.</p>
    </div>
    <div class="faq-item">
      <h4>Is boat loan interest tax deductible as a second home?</h4>
      <p>Yes, if the boat has sleeping berths, a galley (cooking facility), and a built-in marine head (toilet), IRS regulations allow you to treat the vessel as a qualified second home and deduct mortgage interest on Schedule A.</p>
    </div>
    <div class="faq-item">
      <h4>What is the 10% rule for boat ownership costs?</h4>
      <p>The 10% rule of marine ownership states that annual operational maintenance, slip mooring or dry storage, marine insurance, winterization, and fuel will average approximately 10% of the vessel original purchase price every single year.</p>
    </div>

    <h2>Explore Related Vehicle &amp; Loan Calculators</h2>
    <ul>
      <li><a href="/loan-calculators/rv-loan-calculator">RV Loan Calculator</a> &mdash; Calculate monthly recreational vehicle financing terms up to 20 years.</li>
      <li><a href="/loan-calculators/auto-loan-calculator">Auto Loan Calculator</a> &mdash; Compare 48, 60, and 72-month car payments and interest amortization.</li>
      <li><a href="/loan-calculators/personal-loan-calculator">Personal Loan Calculator</a> &mdash; Unsecured financing options for boat repowering and marine electronics.</li>
      <li><a href="/loan-calculators/debt-to-income-calculator">Debt-to-Income (DTI) Calculator</a> &mdash; Check if adding a boat note keeps your DTI under 43%.</li>
    </ul>
  </div>
</main>

<script>
function calculateBoatLoan() {
  var price = parseFloat(document.getElementById('boatPrice').value) || 0;
  var downPct = (parseFloat(document.getElementById('downPaymentPct').value) || 0) / 100;
  var rate = (parseFloat(document.getElementById('interestRate').value) || 0) / 100 / 12;
  var years = parseInt(document.getElementById('loanTermYear').value) || 15;
  var months = years * 12;
  var taxRate = (parseFloat(document.getElementById('salesTaxRate').value) || 0) / 100;
  var surveyDocs = parseFloat(document.getElementById('surveyDocs').value) || 0;

  var downPayment = price * downPct;
  var principal = Math.max(0, price - downPayment);
  var salesTax = price * taxRate;
  var totalCash = downPayment + salesTax + surveyDocs;

  var monthlyPayment = 0;
  var totalInterest = 0;

  if (rate > 0 && months > 0 && principal > 0) {
    monthlyPayment = principal * (rate * Math.pow(1 + rate, months)) / (Math.pow(1 + rate, months) - 1);
    totalInterest = (monthlyPayment * months) - principal;
  } else if (months > 0 && principal > 0) {
    monthlyPayment = principal / months;
    totalInterest = 0;
  }

  var totalCost = totalCash + (monthlyPayment * months);

  document.getElementById('resMonthlyPayment').textContent = '$' + Math.round(monthlyPayment).toLocaleString();
  document.getElementById('resLoanAmount').textContent = 'Loan Principal: $' + Math.round(principal).toLocaleString();
  document.getElementById('resDownPayment').textContent = '$' + Math.round(downPayment).toLocaleString();
  document.getElementById('resSalesTax').textContent = '$' + Math.round(salesTax).toLocaleString();
  document.getElementById('resSurveyDocs').textContent = '$' + Math.round(surveyDocs).toLocaleString();
  document.getElementById('resTotalCash').textContent = '$' + Math.round(totalCash).toLocaleString();
  document.getElementById('resTotalInterest').textContent = '$' + Math.round(totalInterest).toLocaleString();
  document.getElementById('resTotalCost').textContent = '$' + Math.round(totalCost).toLocaleString();
}

document.querySelectorAll('#boatPrice, #downPaymentPct, #interestRate, #loanTermYear, #salesTaxRate, #surveyDocs').forEach(function(el) {
  el.addEventListener('input', calculateBoatLoan);
  el.addEventListener('change', calculateBoatLoan);
});
calculateBoatLoan();
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
