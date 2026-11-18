<?php
$currentYear = date('Y');
$pageTitle = "FHA Loan Calculator ({$currentYear}) – 3.5% Down & MIP Estimator";
$metaDescription = "Free FHA loan calculator for {$currentYear}. Estimate monthly mortgage payments with 3.5% down, calculate Upfront and Annual MIP, and check 2026 FHA county loan limits.";
$metaKeywords = "fha loan calculator, fha mortgage calculator, fha mip calculator, 3.5 down payment calculator, fha monthly payment, fha loan limits {$currentYear}";

$schemaData = json_decode(<<<'EOD'
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://americacalculator.com/loan-calculators/fha-loan-calculator",
      "url": "https://americacalculator.com/loan-calculators/fha-loan-calculator",
      "name": "FHA Loan Calculator (2026) – 3.5% Down & MIP Estimator",
      "description": "Calculate monthly FHA payments, 1.75% upfront MIP, annual mortgage insurance premiums (MIP), and compare FHA vs conventional loan costs.",
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
            "name": "FHA Loan Calculator",
            "item": "https://americacalculator.com/loan-calculators/fha-loan-calculator"
          }
        ]
      }
    },
    {
      "@type": "WebApplication",
      "name": "FHA Loan Calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "All",
      "url": "https://americacalculator.com/loan-calculators/fha-loan-calculator",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "featureList": [
        "3.5% minimum down payment modeling (580+ FICO)",
        "1.75% Upfront Mortgage Insurance Premium (UFMIP) financing",
        "Annual MIP calculation (0.15% to 0.75% tiered by LTV and term)",
        "11-year vs life-of-loan MIP cancellation duration breakdown",
        "Complete monthly PITI + MIP payment estimation",
        "FHA vs Conventional side-by-side cost comparison"
      ]
    },
    {
      "@type": "HowTo",
      "name": "How to Calculate Monthly FHA Loan Payments and MIP",
      "description": "Step-by-step instructions to calculate your total monthly FHA mortgage payment including upfront and monthly mortgage insurance premiums.",
      "step": [
        {
          "@type": "HowToStep",
          "name": "Enter Purchase Price",
          "text": "Input the contract purchase price of the home you plan to finance through the FHA program."
        },
        {
          "@type": "HowToStep",
          "name": "Set Down Payment (Minimum 3.5%)",
          "text": "Choose your down payment percentage. FHA allows 3.5% down for credit scores 580 and above, or 10% down for scores between 500 and 579."
        },
        {
          "@type": "HowToStep",
          "name": "Choose Loan Term and Interest Rate",
          "text": "Select either a 30-year or 15-year fixed loan term and input the prevailing FHA interest rate."
        },
        {
          "@type": "HowToStep",
          "name": "Factor Upfront and Annual MIP",
          "text": "The calculator automatically adds the mandatory 1.75% Upfront MIP to your base principal and calculates your monthly annual MIP."
        },
        {
          "@type": "HowToStep",
          "name": "Evaluate Total Monthly Housing Outlay",
          "text": "Review your all-in monthly payment comprising principal, interest, taxes, insurance, and monthly MIP."
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the minimum down payment for an FHA loan in 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The minimum down payment for an FHA loan is 3.5% for borrowers with a credit score of 580 or higher. For borrowers with credit scores between 500 and 579, a 10% down payment is required."
          }
        },
        {
          "@type": "Question",
          "name": "How much is the FHA Upfront Mortgage Insurance Premium (UFMIP)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The FHA Upfront Mortgage Insurance Premium is a flat 1.75% of the base loan amount. On a $350,000 base loan, the UFMIP is $6,125. Most borrowers finance this directly into their total mortgage balance."
          }
        },
        {
          "@type": "Question",
          "name": "What is the annual FHA MIP rate for 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For a standard 30-year FHA loan with a 3.5% down payment (LTV > 95%), the annual MIP rate is 0.55% of the outstanding loan balance, divided into 12 monthly installments. On 15-year loans or down payments of 10%+, the rate ranges from 0.15% to 0.50%."
          }
        },
        {
          "@type": "Question",
          "name": "Can FHA mortgage insurance (MIP) ever be removed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If you put down 10% or more at closing, FHA annual MIP automatically cancels after 11 years. If you put down less than 10% (such as the standard 3.5% down), MIP remains for the entire life of the loan unless you refinance into a conventional mortgage."
          }
        },
        {
          "@type": "Question",
          "name": "What are the 2026 FHA county loan limits?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For 2026, the national baseline FHA loan limit (the 'floor') for a single-family home is $498,257 in low-cost areas, reaching up to the 'ceiling' of $1,149,825 in designated high-cost metropolitan counties."
          }
        },
        {
          "@type": "Question",
          "name": "What is the minimum credit score required for an FHA loan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The official FHA minimum credit score is 580 for 3.5% down financing and 500 for 10% down financing. Individual lenders may set slightly higher overlays (often 620)."
          }
        },
        {
          "@type": "Question",
          "name": "Can seller concessions cover closing costs on an FHA loan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. The FHA allows sellers to contribute up to 6.0% of the sales price toward the buyer's closing costs, discount points, prepaid escrows, and title fees."
          }
        },
        {
          "@type": "Question",
          "name": "Can I buy a multi-family duplex or fourplex with an FHA loan?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. FHA loans permit purchasing 1-to-4 unit residential properties with only 3.5% down, provided the borrower occupies one of the units as their primary residence for at least one full year."
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

<main id="main-content" class="container">
  <div class="calculator-header">
    <h1>FHA Loan Calculator (<?php echo $currentYear; ?>)</h1>
    <p class="lead-description">
      Estimate your total monthly FHA payment with just <strong>3.5% down</strong>. Calculates mandatory 1.75% Upfront MIP, monthly annual MIP schedules, property taxes, and complete 30-year amortization costs.
    </p>
  </div>

  <div class="calculator-layout">
    <!-- LEFT INPUT PANEL -->
    <div class="calculator-panel">
      <h2 class="panel-title">FHA Mortgage Inputs</h2>

      <div class="form-group">
        <label for="fhaHomePrice">Home Purchase Price ($):</label>
        <input type="number" id="fhaHomePrice" class="form-control" value="380000" min="10000" step="5000">
        <span class="field-hint">Median starter home benchmark.</span>
      </div>

      <div class="form-group">
        <label for="fhaDownPct">Down Payment (%):</label>
        <select id="fhaDownPct" class="form-control">
          <option value="3.5" selected>3.5% Down (Minimum for 580+ FICO)</option>
          <option value="5">5.0% Down Payment</option>
          <option value="10">10.0% Down (MIP Cancels in 11 Years)</option>
          <option value="15">15.0% Down Payment</option>
          <option value="20">20.0% Down Payment</option>
        </select>
        <span class="field-hint">10%+ down cancels annual MIP after 11 years.</span>
      </div>

      <div class="form-group">
        <label for="fhaFinanceUfmip">Finance 1.75% Upfront MIP?</label>
        <select id="fhaFinanceUfmip" class="form-control">
          <option value="yes" selected>Yes &ndash; Add 1.75% to Loan Principal</option>
          <option value="no">No &ndash; Pay Upfront in Cash at Close</option>
        </select>
      </div>

      <div class="form-group">
        <label for="fhaLoanTerm">Loan Term:</label>
        <select id="fhaLoanTerm" class="form-control">
          <option value="30" selected>30-Year Fixed</option>
          <option value="15">15-Year Fixed</option>
        </select>
      </div>

      <div class="form-group">
        <label for="fhaInterestRate">Interest Rate (% APR):</label>
        <input type="number" id="fhaInterestRate" class="form-control" value="6.45" min="1.0" max="15.0" step="0.05">
        <span class="field-hint">Current 2026 prevailing 30-year FHA benchmark rate.</span>
      </div>

      <div class="form-group">
        <label for="fhaPropertyTax">Annual Property Tax Rate (%):</label>
        <input type="number" id="fhaPropertyTax" class="form-control" value="1.20" min="0" max="4.0" step="0.05">
      </div>

      <div class="form-group">
        <label for="fhaHomeInsurance">Annual Homeowners Insurance ($):</label>
        <input type="number" id="fhaHomeInsurance" class="form-control" value="1450" min="0" step="50">
      </div>

      <div class="form-group">
        <label for="fhaHoaDues">Monthly HOA / Condo Dues ($):</label>
        <input type="number" id="fhaHoaDues" class="form-control" value="0" min="0" step="25">
      </div>
    </div>

    <!-- RIGHT RESULTS PANEL -->
    <div class="calculator-panel results-panel">
      <h2 class="panel-title">Total Estimated Monthly FHA Payment</h2>

      <div class="highlight-metric">
        <div class="metric-label">Total Monthly Housing Payment (PITI + MIP)</div>
        <div class="metric-value primary-value" id="resFhaTotalMonthly">$0</div>
        <div class="metric-sub" id="resFhaPrincipalInterest">P&amp;I: $0 / mo</div>
      </div>

      <div class="results-grid">
        <div class="result-card">
          <div class="result-title">Monthly FHA MIP</div>
          <div class="result-number" id="resFhaMonthlyMip">$0 / mo</div>
          <div class="result-desc" id="resFhaMipDuration">Duration: Life of Loan</div>
        </div>

        <div class="result-card">
          <div class="result-title">Upfront MIP (1.75%)</div>
          <div class="result-number" id="resFhaUfmip">$0</div>
          <div class="result-desc" id="resFhaTotalFinanced">Financed Principal: $0</div>
        </div>

        <div class="result-card">
          <div class="result-title">Down Payment Required</div>
          <div class="result-number" id="resFhaDownPayment">$0</div>
          <div class="result-desc" id="resFhaBaseLoan">Base Loan: $0</div>
        </div>

        <div class="result-card">
          <div class="result-title">Monthly Escrow (Taxes &amp; Ins)</div>
          <div class="result-number" id="resFhaEscrow">$0 / mo</div>
          <div class="result-desc">Taxes: <span id="resFhaTax">$0</span> | Ins: <span id="resFhaIns">$0</span></div>
        </div>
      </div>

      <div class="summary-breakdown">
        <h3>FHA Loan Cost Summary</h3>
        <table class="summary-table">
          <tr><td>Home Purchase Price:</td><td id="resSumPrice">$0</td></tr>
          <tr><td>Down Payment (Cash at Close):</td><td id="resSumDown">$0</td></tr>
          <tr><td>Upfront MIP (1.75%):</td><td id="resSumUfmip">$0</td></tr>
          <tr><td>Total Financed Loan Balance:</td><td id="resSumTotalBalance">$0</td></tr>
          <tr><td>Total Lifetime Interest Paid:</td><td id="resSumTotalInterest">$0</td></tr>
          <tr><td>Total Lifetime Monthly MIP Paid:</td><td id="resSumTotalMip">$0</td></tr>
          <tr><td><strong>Total 30-Year Loan Outlay:</strong></td><td id="resSumGrandTotal"><strong>$0</strong></td></tr>
        </table>
      </div>
    </div>
  </div>

  <!-- CONTENT & GUIDES -->
  <div class="calculator-content-body">
    <div class="quick-answer-card">
      <h2>Understanding FHA Loans in <?php echo $currentYear; ?></h2>
      <p>
        An <strong>FHA loan</strong> is a government-backed mortgage insured by the Federal Housing Administration (FHA), a branch of HUD. Designed specifically to make homeownership accessible for first-time buyers and those with moderate credit scores, FHA financing requires only <strong>3.5% down payment</strong> with credit scores as low as 580, and allows debt-to-income (DTI) ratios up to 50%.
      </p>
    </div>

    <h2>2026 FHA Mortgage Insurance Premium (MIP) Rate Schedule</h2>
    <p>Every FHA loan incurs two separate mortgage insurance components: an <strong>Upfront MIP (UFMIP)</strong> and an <strong>Annual MIP</strong> paid monthly:</p>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>Loan Term</th>
            <th>Base Loan Amount</th>
            <th>Down Payment (LTV)</th>
            <th>Annual MIP Rate</th>
            <th>MIP Duration</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>30-Year Fixed</strong></td>
            <td>&le; $726,200</td>
            <td>3.5% Down (LTV &gt; 95%)</td>
            <td><strong>0.55%</strong> ($171/mo on $373k)</td>
            <td><strong>Life of the Loan</strong></td>
          </tr>
          <tr>
            <td><strong>30-Year Fixed</strong></td>
            <td>&le; $726,200</td>
            <td>10%+ Down (LTV &le; 90%)</td>
            <td><strong>0.50%</strong> ($145/mo on $348k)</td>
            <td class="text-success"><strong>11 Years Only</strong></td>
          </tr>
          <tr>
            <td><strong>15-Year Fixed</strong></td>
            <td>&le; $726,200</td>
            <td>3.5% Down (LTV &gt; 90%)</td>
            <td><strong>0.40%</strong></td>
            <td>Life of the Loan</td>
          </tr>
          <tr>
            <td><strong>15-Year Fixed</strong></td>
            <td>&le; $726,200</td>
            <td>10%+ Down (LTV &le; 90%)</td>
            <td><strong>0.15%</strong></td>
            <td class="text-success"><strong>11 Years Only</strong></td>
          </tr>
        </tbody>
      </table>
    </div>

    <h2>FHA vs. Conventional Mortgage: Which Is Better for You?</h2>
    <p>Choosing between an FHA loan and a conventional loan comes down to your credit score, down payment capital, and long-term plans:</p>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th>FHA Loan</th>
            <th>Conventional Loan</th>
            <th>Winner / Advantage</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Minimum Credit Score</strong></td>
            <td>580 (3.5% down) / 500 (10% down)</td>
            <td>620 minimum (680+ recommended)</td>
            <td class="text-success"><strong>FHA (More Lenient)</strong></td>
          </tr>
          <tr>
            <td><strong>Minimum Down Payment</strong></td>
            <td>3.5%</td>
            <td>3.0% (HomeReady/HomePossible)</td>
            <td>Tie (Slight conventional edge)</td>
          </tr>
          <tr>
            <td><strong>Mortgage Insurance Removal</strong></td>
            <td>Permanent (if &lt;10% down)</td>
            <td>Automatically cancels at 78% LTV</td>
            <td class="text-success"><strong>Conventional (Saves $ long-term)</strong></td>
          </tr>
          <tr>
            <td><strong>Upfront Insurance Fee</strong></td>
            <td>1.75% of loan balance</td>
            <td>$0 (None)</td>
            <td class="text-success"><strong>Conventional ($0 upfront)</strong></td>
          </tr>
          <tr>
            <td><strong>Max Debt-to-Income (DTI)</strong></td>
            <td>Up to 50% &ndash; 57% with AUS approve</td>
            <td>Strict 43% &ndash; 45% standard</td>
            <td class="text-success"><strong>FHA (Higher purchasing power)</strong></td>
          </tr>
          <tr>
            <td><strong>Bankruptcy / Foreclosure Wait</strong></td>
            <td>2 yrs (Ch 7) / 3 yrs (Foreclosure)</td>
            <td>4 yrs (Ch 7) / 7 yrs (Foreclosure)</td>
            <td class="text-success"><strong>FHA (Faster credit rebound)</strong></td>
          </tr>
        </tbody>
      </table>
    </div>

    <h2>2026 FHA County Loan Limit Tiers</h2>
    <p>FHA enforces maximum lending limits based on median housing prices across US counties:</p>
    <ul>
      <li><strong>FHA Low-Cost Floor:</strong> <strong>$498,257</strong> across non-metropolitan and rural counties in the Midwest and South.</li>
      <li><strong>FHA High-Cost Ceiling:</strong> <strong>$1,149,825</strong> in high-cost metro markets including Los Angeles, New York City, San Francisco, Washington D.C., and Seattle.</li>
      <li><strong>Multi-Family Limits:</strong> Duplex limits reach $637,950 to $1,472,250; 4-unit fourplex limits reach $958,350 to $2,211,600 in high-cost areas.</li>
    </ul>

        <h2>FHA 203(k) Renovation Loans &amp; Streamline Refinance Programs</h2>
    <p>The FHA umbrella extends well beyond standard home purchases with two highly popular specialty programs:</p>
    <ul>
      <li><strong>FHA 203(k) Rehab Loan:</strong> Allows homebuyers to finance both the property purchase price and up to $35,000+ in home repair or modernization costs into a single 3.5% down mortgage. Ideal for purchasing fixer-uppers or foreclosures requiring cosmetic or structural remediation.</li>
      <li><strong>FHA Streamline Refinance:</strong> Enables existing FHA borrowers to lower their interest rate and monthly payments with <strong>no new appraisal, no income verification, and minimal documentation</strong>, provided the refinance provides a clear Net Tangible Benefit (typically at least a 0.50% interest rate reduction).</li>
    </ul>

    <h2>FHA Appraisal Requirements &amp; Property Standards (HUD 4000.1)</h2>
    <p>Unlike conventional appraisals that focus solely on market value, an FHA appraiser also conducts a basic safety and soundness inspection under HUD guidelines:</p>
    <ul>
      <li><strong>Safety Hazards:</strong> Peeling lead-based paint (homes built before 1978), missing handrails on stairs, or exposed electrical wiring must be repaired by the seller before closing.</li>
      <li><strong>Structural Integrity:</strong> Roof must have at least 2 to 3 years of remaining economic life, and the foundation must be structurally sound with no severe water intrusion.</li>
      <li><strong>Operable Mechanical Systems:</strong> HVAC, plumbing, water heaters, and electrical panels must be fully functional and code-compliant.</li>
    </ul>

<h2>Frequently Asked Questions (FAQ)</h2>
    <div class="faq-item">
      <h4>What is the minimum down payment for an FHA loan in 2026?</h4>
      <p>The minimum down payment for an FHA loan is 3.5% for borrowers with a credit score of 580 or higher. For borrowers with credit scores between 500 and 579, a 10% down payment is required.</p>
    </div>
    <div class="faq-item">
      <h4>How much is the FHA Upfront Mortgage Insurance Premium (UFMIP)?</h4>
      <p>The FHA Upfront Mortgage Insurance Premium is a flat 1.75% of the base loan amount. On a $350,000 base loan, the UFMIP is $6,125. Most borrowers finance this directly into their total mortgage balance.</p>
    </div>
    <div class="faq-item">
      <h4>What is the annual FHA MIP rate for 2026?</h4>
      <p>For a standard 30-year FHA loan with a 3.5% down payment (LTV > 95%), the annual MIP rate is 0.55% of the outstanding loan balance, divided into 12 monthly installments. On 15-year loans or down payments of 10%+, the rate ranges from 0.15% to 0.50%.</p>
    </div>
    <div class="faq-item">
      <h4>Can FHA mortgage insurance (MIP) ever be removed?</h4>
      <p>If you put down 10% or more at closing, FHA annual MIP automatically cancels after 11 years. If you put down less than 10% (such as the standard 3.5% down), MIP remains for the entire life of the loan unless you refinance into a conventional mortgage.</p>
    </div>
    <div class="faq-item">
      <h4>What are the 2026 FHA county loan limits?</h4>
      <p>For 2026, the national baseline FHA loan limit (the 'floor') for a single-family home is $498,257 in low-cost areas, reaching up to the 'ceiling' of $1,149,825 in designated high-cost metropolitan counties.</p>
    </div>
    <div class="faq-item">
      <h4>What is the minimum credit score required for an FHA loan?</h4>
      <p>The official FHA minimum credit score is 580 for 3.5% down financing and 500 for 10% down financing. Individual lenders may set slightly higher overlays (often 620).</p>
    </div>
    <div class="faq-item">
      <h4>Can seller concessions cover closing costs on an FHA loan?</h4>
      <p>Yes. The FHA allows sellers to contribute up to 6.0% of the sales price toward the buyer's closing costs, discount points, prepaid escrows, and title fees.</p>
    </div>
    <div class="faq-item">
      <h4>Can I buy a multi-family duplex or fourplex with an FHA loan?</h4>
      <p>Yes. FHA loans permit purchasing 1-to-4 unit residential properties with only 3.5% down, provided the borrower occupies one of the units as their primary residence for at least one full year.</p>
    </div>

    <h2>Explore Related Mortgage Calculators</h2>
    <ul>
      <li><a href="/loan-calculators/va-loan-calculator">VA Loan Calculator</a> &mdash; Estimate 0% down military mortgage payments and fee waivers.</li>
      <li><a href="/loan-calculators/jumbo-loan-calculator">Jumbo Loan Calculator</a> &mdash; Calculate luxury home financing above conforming limits.</li>
      <li><a href="/loan-calculators/debt-to-income-calculator">Debt-to-Income (DTI) Calculator</a> &mdash; Verify your FHA front-end and back-end qualification ratios.</li>
      <li><a href="/real-estate/mortgage-refinance-calculator">Mortgage Refinance Calculator</a> &mdash; Calculate when to refinance from FHA to Conventional to drop MIP.</li>
    </ul>
  </div>
</main>

<script>
function calculateFhaLoan() {
  var price = parseFloat(document.getElementById('fhaHomePrice').value) || 0;
  var downPct = (parseFloat(document.getElementById('fhaDownPct').value) || 3.5) / 100;
  var financeUfmip = document.getElementById('fhaFinanceUfmip').value === 'yes';
  var years = parseInt(document.getElementById('fhaLoanTerm').value) || 30;
  var rate = (parseFloat(document.getElementById('fhaInterestRate').value) || 6.45) / 100;
  var taxRate = (parseFloat(document.getElementById('fhaPropertyTax').value) || 1.20) / 100;
  var annualIns = parseFloat(document.getElementById('fhaHomeInsurance').value) || 1450;
  var monthlyHoa = parseFloat(document.getElementById('fhaHoaDues').value) || 0;

  var downPayment = price * downPct;
  var baseLoan = Math.max(0, price - downPayment);
  var ufmip = baseLoan * 0.0175;
  var totalPrincipal = baseLoan + (financeUfmip ? ufmip : 0);

  // Annual MIP Rate (0.55% for 30-yr LTV > 95%, 0.50% for LTV <= 90%)
  var annualMipRate = 0.0055;
  if (years === 15) {
    annualMipRate = (downPct >= 0.10) ? 0.0015 : 0.0040;
  } else {
    annualMipRate = (downPct >= 0.10) ? 0.0050 : 0.0055;
  }

  var monthlyMip = (baseLoan * annualMipRate) / 12;

  // Principal & Interest
  var r = rate / 12;
  var n = years * 12;
  var monthlyPI = 0;
  if (r > 0 && n > 0 && totalPrincipal > 0) {
    monthlyPI = totalPrincipal * (r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);
  }

  var monthlyTax = (price * taxRate) / 12;
  var monthlyIns = annualIns / 12;
  var totalMonthly = monthlyPI + monthlyMip + monthlyTax + monthlyIns + monthlyHoa;

  var mipYears = (downPct >= 0.10) ? 11 : years;
  var totalMipPaid = monthlyMip * 12 * mipYears;
  var totalInterest = (monthlyPI * n) - totalPrincipal;
  var grandTotal = downPayment + (!financeUfmip ? ufmip : 0) + (monthlyPI * n) + totalMipPaid + (price * taxRate * years) + (annualIns * years);

  document.getElementById('resFhaTotalMonthly').textContent = '$' + Math.round(totalMonthly).toLocaleString() + ' / mo';
  document.getElementById('resFhaPrincipalInterest').textContent = 'P&I: $' + Math.round(monthlyPI).toLocaleString() + ' / mo';
  document.getElementById('resFhaMonthlyMip').textContent = '$' + Math.round(monthlyMip).toLocaleString() + ' / mo';
  document.getElementById('resFhaMipDuration').textContent = (downPct >= 0.10) ? 'Duration: 11 Years (10%+ Down)' : 'Duration: Life of Loan';
  document.getElementById('resFhaUfmip').textContent = '$' + Math.round(ufmip).toLocaleString();
  document.getElementById('resFhaTotalFinanced').textContent = 'Financed: $' + Math.round(totalPrincipal).toLocaleString();
  document.getElementById('resFhaDownPayment').textContent = '$' + Math.round(downPayment).toLocaleString() + ' (' + (downPct * 100).toFixed(1) + '%)';
  document.getElementById('resFhaBaseLoan').textContent = 'Base Loan: $' + Math.round(baseLoan).toLocaleString();
  document.getElementById('resFhaEscrow').textContent = '$' + Math.round(monthlyTax + monthlyIns).toLocaleString() + ' / mo';
  document.getElementById('resFhaTax').textContent = '$' + Math.round(monthlyTax).toLocaleString();
  document.getElementById('resFhaIns').textContent = '$' + Math.round(monthlyIns).toLocaleString();

  document.getElementById('resSumPrice').textContent = '$' + Math.round(price).toLocaleString();
  document.getElementById('resSumDown').textContent = '$' + Math.round(downPayment).toLocaleString();
  document.getElementById('resSumUfmip').textContent = '$' + Math.round(ufmip).toLocaleString() + (financeUfmip ? ' (Financed)' : ' (Cash)');
  document.getElementById('resSumTotalBalance').textContent = '$' + Math.round(totalPrincipal).toLocaleString();
  document.getElementById('resSumTotalInterest').textContent = '$' + Math.round(totalInterest).toLocaleString();
  document.getElementById('resSumTotalMip').textContent = '$' + Math.round(totalMipPaid).toLocaleString() + ' (' + mipYears + ' yrs)';
  document.getElementById('resSumGrandTotal').textContent = '$' + Math.round(grandTotal).toLocaleString();
}

document.querySelectorAll('#fhaHomePrice, #fhaDownPct, #fhaFinanceUfmip, #fhaLoanTerm, #fhaInterestRate, #fhaPropertyTax, #fhaHomeInsurance, #fhaHoaDues').forEach(function(el) {
  el.addEventListener('input', calculateFhaLoan);
  el.addEventListener('change', calculateFhaLoan);
});

calculateFhaLoan();
</script>

<?php require_once '../includes/footer.php'; ?>
