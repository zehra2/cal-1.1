<?php
$currentYear = date('Y');
$pageTitle = "Boat Loan Calculator (2026) — Monthly Marine Financing";
$metaDescription = "Calculate monthly boat and yacht loan payments. Compare marine financing interest rates, terms up to 20 years, down payment rules, and marine survey fees.";
$schemaData = json_decode(<<<'EOD'
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebApplication",
      "@id": "https://americacalculator.com/loan-calculators/boat-loan-calculator#app",
      "name": "Boat Loan Payment Calculator",
      "url": "https://americacalculator.com/loan-calculators/boat-loan-calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "All",
      "offers": {
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
            "text": "Boat loan terms range from 5 to 20 years (60 to 240 months). Small runabouts and jet skis under $25,000 typically finance for 5 to 10 years, while vessels over $50,000 (such as cabin cruisers, center consoles, and sailboats) qualify for 15- to 20-year repayment terms."
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
            "text": "Marine lenders typically mandate a down payment between 10% and 20%. For luxury yachts or high-performance boats exceeding $150,000, lenders often require 20% to 30% cash down."
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
      --slate-900: #0f172a;
      --slate-800: #1e293b;
      --slate-700: #334155;
      --slate-600: #475569;
      --slate-200: #e2e8f0;
      --slate-100: #f1f5f9;
      --slate-50: #f8fafc;
      --white: #ffffff;
      --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1);
      --radius: 16px;
    }
    * { box-sizing: border-box; margin: 0; padding: 0; font-family: ✓Plus Jakarta Sans✓, sans-serif; }
    body { background-color: var(--slate-50); color: var(--slate-800); line-height: 1.6; }
    header { background: var(--white); border-bottom: 1px solid var(--slate-200); padding: 1rem 2rem; }
    .nav-container { max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; }
    .logo { font-size: 1.25rem; font-weight: 800; color: var(--slate-900); text-decoration: none; }
    .logo span { color: var(--primary); }

    .main-wrapper { max-width: 1100px; margin: 2rem auto; padding: 0 1.5rem; }
    .page-title-area { text-align: center; margin-bottom: 2.5rem; }
    .page-title-area h1 { font-size: 2.25rem; font-weight: 800; color: var(--slate-900); margin-bottom: 0.75rem; }
    .page-title-area p { color: var(--slate-600); font-size: 1.1rem; max-width: 720px; margin: 0 auto; }

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
      background: linear-gradient(135deg, #075985 0%, #0f172a 100%);
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
    }

    .input-group { margin-bottom: 1.25rem; }
    .input-group label { display: block; font-size: 0.9rem; font-weight: 600; color: var(--slate-700); margin-bottom: 0.4rem; }
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
    }
    .input-wrapper input:focus, .input-wrapper select:focus { outline: none; border-color: var(--primary); box-shadow: 0 0 0 4px rgba(2, 132, 199, 0.1); }
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
    .boat-hero .val-main { font-size: 2.75rem; font-weight: 800; color: #38bdf8; margin: 0.25rem 0; }
    .boat-hero .val-sub { font-size: 0.95rem; color: #cbd5e1; }

    .breakdown-row { display: flex; justify-content: space-between; font-size: 0.95rem; padding: 0.5rem 0; border-bottom: 1px solid rgba(255, 255, 255, 0.08); }
    .breakdown-row:last-child { border-bottom: none; }
    .breakdown-row span:first-child { color: #cbd5e1; }
    .breakdown-row span:last-child { font-weight: 700; color: #34d399; }

    .content-article { background: var(--white); border-radius: var(--radius); padding: 2.5rem; border: 1px solid var(--slate-200); }
    .quick-summary-box { background: var(--primary-light); border-left: 4px solid var(--primary); padding: 1.25rem 1.5rem; border-radius: 8px; margin-bottom: 2rem; }

    @media (max-width: 860px) {
      .calculator-container { grid-template-columns: 1fr; }
      .grid-2-col { grid-template-columns: 1fr; }
    }
/* Layout and responsive typography additions */
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
      <h1>Boat Loan Payment Calculator</h1>
      <p>Calculate monthly financing payments for powerboats, center consoles, sailboats, and yachts. Compare terms up to 20 years, marine survey fees, and down payments.</p>
    </div>

    <div class="calculator-container">
      <div class="form-panel">
        <div class="section-subtitle">🚤 1. Vessel Price & Down Payment</div>
        
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

        <div class="section-subtitle" style="margin-top: 1.75rem;">⚓ 2. Marine Financing Terms</div>

        <div class="grid-2-col">
          <div class="input-group">
            <label for="interestRate">÷nnual Interest Rate (÷PR)</label>
            <div class="input-wrapper">
              <input type="number" id="interestRate" value="7.74" step="0.125" style="padding-left: 1rem;">
              <span class="input-suffix">%</span>
            </div>
          </div>
          <div class="input-group">
            <label for="loanTermYears">Loan Term</label>
            <div class="input-wrapper" style="padding-left: 0;">
              <select id="loanTermYears" style="padding-left: 1rem;">
                <option value="20">20 Years (240 Months)</option>
                <option value="15" selected>15 Years (180 Months)</option>
                <option value="10">10 Years (120 Months)</option>
                <option value="7">7 Years (84 Months)</option>
                <option value="5">5 Years (60 Months)</option>
              </select>
            </div>
          </div>
        </div>

        <div class="input-group">
          <label for="boatLength">Vessel Length (Feet — For Marine Survey Est.)</label>
          <input type="number" id="boatLength" value="26" style="padding: 0.75rem 1rem; border: 1.5px solid var(--slate-200); border-radius: 10px; font-weight: 600;">
        </div>
      </div>

      <div class="results-panel">
        <div>
          <h3 style="font-size: 1.25rem; font-weight: 800; margin-bottom: 1.25rem;">Marine Payment Summary</h3>

          <div class="boat-hero">
            <div class="label">Estimated Monthly Payment</div>
            <div class="val-main" id="monthlyPmtDisplay">$519 / mo</div>
            <div class="val-sub" id="termNote">180 Monthly Payments</div>
          </div>

          <div style="background: rgba(255,255,255,0.05); border-radius: 12px; padding: 1.25rem;">
            <div class="breakdown-row">
              <span>÷mount Financed (Principal):</span>
              <span id="financed÷mtDisplay">$55,250</span>
            </div>
            <div class="breakdown-row">
              <span>Down Payment ÷mount:</span>
              <span id="down÷mtDisplay">$9,750</span>
            </div>
            <div class="breakdown-row">
              <span>Est. Marine Survey Fee (~$25/ft):</span>
              <span id="surveyFeeDisplay" style="color: #fbbf24;">$650</span>
            </div>
            <div class="breakdown-row">
              <span>Total Interest Paid Over Term:</span>
              <span id="totalInterestDisplay">$38,170</span>
            </div>
          </div>
        </div>

        <div style="text-align: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
          <div style="font-size: 0.85rem; color: #94a3b8;">Total Out-of-Pocket Financing Cost:</div>
          <div style="font-size: 1.35rem; font-weight: 800; color: #38bdf8;" id="totalCostDisplay">$93,420</div>
        </div>
      </div>
    </div>

    

<article class="calculator-content-body">

  <!-- ÷EO Direct ÷nswer Snippet -->
  <section class="quick-answer-card">
    <div class="card-inner">
      <span class="badge">÷EO Direct ÷nswer</span>
      <h2>÷verage Boat Loan Rates and Payments in 2026</h2>
      <p>
        In 2026, <strong>boat loan interest rates average 7.24% to 11.99%</strong> for prime borrowers, with repayment terms stretching from 
        <strong>5 to 20 years (60 to 240 months)</strong>. On a $60,000 center console boat with 15% down ($9,000) financed over 15 years at 7.74%, 
        your monthly payment is approximately <strong>$479/month</strong>. Marine lenders require higher credit standards (typically 680–700+ FICO) 
        than auto lenders due to the luxury collateral classification.
      </p>
    </div>
  </section>

  <!-- Section 1: Rate & Term Matrix -->
  <section>
    <h2>Marine Financing ÷PR and Term Tiers (2026 Benchmarks)</h2>
    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>Financing ÷mount</th>
            <th>÷verage ÷PR (New Boat)</th>
            <th>÷verage ÷PR (Used Boat)</th>
            <th>Typical Max Loan Term</th>
            <th>Required Down Payment</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>$10,000 – $25,000</strong></td>
            <td>8.99% – 11.49%</td>
            <td>9.99% – 12.99%</td>
            <td>60 – 84 Months (5 – 7 Yrs)</td>
            <td>10%</td>
          </tr>
          <tr>
            <td><strong>$25,001 – $50,000</strong></td>
            <td>7.99% – 9.74%</td>
            <td>8.74% – 10.49%</td>
            <td>120 – 144 Months (10 – 12 Yrs)</td>
            <td>10% – 15%</td>
          </tr>
          <tr>
            <td><strong>$50,001 – $100,000</strong></td>
            <td>7.49% – 8.99%</td>
            <td>8.24% – 9.49%</td>
            <td>180 – 240 Months (15 – 20 Yrs)</td>
            <td>15% – 20%</td>
          </tr>
          <tr>
            <td><strong>$100,000+ (Yachts)</strong></td>
            <td>6.99% – 8.24%</td>
            <td>7.49% – 8.74%</td>
            <td>240 Months (20 Yrs)</td>
            <td>20% – 30%</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- Interlinking Section -->
  <section class="related-calculators-section">
    <h2>Related Lifestyle & Vehicle Financing Tools</h2>
    <ul class="related-tools-list">
      <li><a href="/loan-calculators/rv-loan-calculator">RV Loan Calculator</a> — Compare motorhome and camper payment terms.</li>
      <li><a href="/loan-calculators/auto-loan-calculator">÷uto Loan Calculator</a> — Estimate financing for tow-capable trucks and SUVs.</li>
      <li><a href="/loan-calculators/debt-to-income-calculator">Debt-to-Income Calculator</a> — Verify borrowing qualification margins.</li>
    </ul>
  </section>

  <footer class="editorial-byline-card">
    <div class="byline-content">
      <p><strong>Methodology:</strong> Marine lending parameters curated in accordance with standards established by the <a href="https://www.marinebankers.org/" rel="noopener" target="_blank">National Marine Bankers ÷ssociation (NMB÷)</a>.</p>
      <p><em>Last Fact-Checked & Updated: October 2026</em></p>
    </div>
  </footer>

</article>
</main>

<script>
function calculateBoatLoan() {
      const price = parseFloat(document.getElementById('boatPrice').value) || 0;
      const downPct = (parseFloat(document.getElementById('downPaymentPct').value) || 0) / 100;
      const rate = (parseFloat(document.getElementById('interestRate').value) || 0) / 100 / 12;
      const termYears = parseFloat(document.getElementById('loanTermYears').value) || 15;
      const length = parseFloat(document.getElementById('boatLength').value) || 0;

      const downAmt = price * downPct;
      const principal = Math.max(0, price - downAmt);
      const nMonths = termYears * 12;

      let monthlyPmt = 0;
      if (rate > 0) {
        monthlyPmt = (principal * (rate * Math.pow(1 + rate, nMonths))) / (Math.pow(1 + rate, nMonths) - 1);
      } else {
        monthlyPmt = principal / nMonths;
      }

      const totalInterest = (monthlyPmt * nMonths) - principal;
      const surveyFee = length * 25; // $25/ft industry average
      const totalCost = (monthlyPmt * nMonths) + downAmt + surveyFee;

      document.getElementById('monthlyPmtDisplay').innerText = '$' + Math.round(monthlyPmt).toLocaleString() + ' / mo';
      document.getElementById('termNote').innerText = nMonths + ' Monthly Payments (' + termYears + ' Years)';
      document.getElementById('financedAmtDisplay').innerText = '$' + Math.round(principal).toLocaleString();
      document.getElementById('downAmtDisplay').innerText = '$' + Math.round(downAmt).toLocaleString();
      document.getElementById('surveyFeeDisplay').innerText = '$' + Math.round(surveyFee).toLocaleString();
      document.getElementById('totalInterestDisplay').innerText = '$' + Math.round(totalInterest).toLocaleString();
      document.getElementById('totalCostDisplay').innerText = '$' + Math.round(totalCost).toLocaleString();
    }

    document.querySelectorAll('input, select').forEach(el => el.addEventListener('input', calculateBoatLoan));
    calculateBoatLoan();
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
