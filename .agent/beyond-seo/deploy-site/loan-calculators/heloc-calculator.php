<?php
$currentYear = date('Y');
$pageTitle = "HELOC Calculator (2026) — Draw & Repayment Payment Shock";
$metaDescription = "Calculate monthly HELOC payments during the 10-year interest-only draw period and 20-year repayment phase. Model CLTV equity limits and interest rate resets.";
$schemaData = json_decode(<<<'EOD'
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebApplication",
      "@id": "https://americacalculator.com/loan-calculators/heloc-calculator#app",
      "name": "HELOC Payment Calculator",
      "url": "https://americacalculator.com/loan-calculators/heloc-calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "All",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "description": "Calculate interest-only draw period payments and fully amortized principal-and-interest repayment payments on home equity lines of credit."
    },
    {
      "@type": "FAQPage",
      "@id": "https://americacalculator.com/loan-calculators/heloc-calculator#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is HELOC payment shock?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "HELOC payment shock occurs when the initial 10-year draw period ends and the loan enters the 10- or 20-year repayment phase. During the draw period, borrowers typically make small interest-only payments. Once the repayment phase begins, the monthly payment jumps significantly because you must pay down both principal and interest over a compressed timeline."
          }
        },
        {
          "@type": "Question",
          "name": "How is the maximum HELOC borrowing amount calculated?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Lenders calculate your borrowing limit using your Combined Loan-to-Value (CLTV) ratio, typically capping total debt at 80% to 85% of your home's appraised value: Max Line = (Home Value × Max CLTV %) – Current Mortgage Balance. For example, on a $500,000 home with an 85% CLTV ($425,000) and a $300,000 first mortgage, your maximum HELOC limit is $125,000."
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
      --primary: #d97706;
      --primary-hover: #b45309;
      --primary-light: #fffbeb;
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
      background: linear-gradient(135deg, #451a03 0%, #0f172a 100%);
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
    .input-wrapper input {
      width: 100%;
      padding: 0.75rem 1rem 0.75rem 2.25rem;
      border: 1.5px solid var(--slate-200);
      border-radius: 10px;
      font-size: 1rem;
      font-weight: 600;
    }
    .input-wrapper input:focus { outline: none; border-color: var(--primary); box-shadow: 0 0 0 4px rgba(217, 119, 6, 0.1); }
    .grid-2-col { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }

    .shock-card {
      background: rgba(245, 158, 11, 0.15);
      border: 1px solid rgba(245, 158, 11, 0.3);
      border-radius: 14px;
      padding: 1.5rem;
      text-align: center;
      margin-bottom: 1.5rem;
    }
    .shock-card .label { font-size: 0.85rem; color: #fde68a; font-weight: 700; text-transform: uppercase; }
    .shock-card .val-main { font-size: 2.25rem; font-weight: 800; color: #fef3c7; margin: 0.25rem 0; }
    .shock-card .val-sub { font-size: 0.85rem; color: #fde68a; }

    .breakdown-row { display: flex; justify-content: space-between; font-size: 0.95rem; padding: 0.5rem 0; border-bottom: 1px solid rgba(255, 255, 255, 0.08); }
    .breakdown-row:last-child { border-bottom: none; }
    .breakdown-row span:first-child { color: #cbd5e1; }
    .breakdown-row span:last-child { font-weight: 700; color: #38bdf8; }

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
      <h1>Home Equity Line of Credit (HELOC) Calculator</h1>
      <p>Calculate your available borrowing capacity and compare interest-only draw payments against the principal-and-interest repayment phase.</p>
    </div>

    <div class="calculator-container">
      <div class="form-panel">
        <div class="section-subtitle">🏡 1. Property Equity & CLTV</div>
        
        <div class="grid-2-col">
          <div class="input-group">
            <label for="homeVal">Estimated Home Value</label>
            <div class="input-wrapper">
              <span class="input-prefix">$</span>
              <input type="number" id="homeVal" value="475000" step="5000">
            </div>
          </div>
          <div class="input-group">
            <label for="firstMortgage">1st Mortgage Balance</label>
            <div class="input-wrapper">
              <span class="input-prefix">$</span>
              <input type="number" id="firstMortgage" value="280000" step="5000">
            </div>
          </div>
        </div>

        <div class="section-subtitle" style="margin-top: 1.75rem;">💳 2. HELOC Loan Parameters</div>

        <div class="grid-2-col">
          <div class="input-group">
            <label for="helocDrawn">÷mount Drawn on Line</label>
            <div class="input-wrapper">
              <span class="input-prefix">$</span>
              <input type="number" id="helocDrawn" value="75000" step="2500">
            </div>
          </div>
          <div class="input-group">
            <label for="helocRate">Variable Interest Rate</label>
            <div class="input-wrapper">
              <input type="number" id="helocRate" value="8.50" step="0.125" style="padding-left: 1rem;">
              <span class="input-suffix">%</span>
            </div>
          </div>
        </div>
      </div>

      <div class="results-panel">
        <div>
          <h3 style="font-size: 1.25rem; font-weight: 800; margin-bottom: 1.25rem;">Payment Shock ÷nalysis</h3>

          <div class="shock-card">
            <div class="label">Repayment Phase Payment Shock</div>
            <div class="val-main" id="repayPmtDisplay">$651 / mo</div>
            <div class="val-sub" id="shockIncreaseDisplay">+$120 / month (+23% increase)</div>
          </div>

          <div style="background: rgba(255,255,255,0.05); border-radius: 12px; padding: 1.25rem;">
            <div class="breakdown-row">
              <span>Max ÷llowable Credit Line (85% CLTV):</span>
              <span id="maxLineDisplay" style="color: #34d399;">$123,750</span>
            </div>
            <div class="breakdown-row">
              <span>Draw Phase Payment (10 Yrs, Interest-Only):</span>
              <span id="drawPmtDisplay">$531 / mo</span>
            </div>
            <div class="breakdown-row">
              <span>Repayment Phase (20 Yrs, ÷mortized):</span>
              <span id="repayPmtDetailDisplay">$651 / mo</span>
            </div>
            <div class="breakdown-row">
              <span>Total Interest Paid Over 30 Yrs:</span>
              <span id="totalInterestDisplay">$119,970</span>
            </div>
          </div>
        </div>

        <div style="text-align: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
          <div style="font-size: 0.85rem; color: #94a3b8;">Current Combined Loan-to-Value:</div>
          <div style="font-size: 1.35rem; font-weight: 800; color: #38bdf8;" id="cltvDisplay">74.7% CLTV</div>
        </div>
      </div>
    </div>

    

<article class="calculator-content-body">

  <!-- ÷EO Direct ÷nswer Snippet -->
  <section class="quick-answer-card">
    <div class="card-inner">
      <span class="badge">÷EO Direct ÷nswer</span>
      <h2>How HELOC Payments Work: Draw vs. Repayment Period</h2>
      <p>
        ÷ <strong>Home Equity Line of Credit (HELOC)</strong> is a revolving credit line secured by your home✓s equity. 
        It operates in two distinct phases: a <strong>10-year Draw Period</strong> where you can borrow funds and make low 
        <strong>interest-only monthly payments</strong>, followed by a <strong>10- to 20-year Repayment Period</strong> 
        where the credit line closes and you must pay amortized <strong>principal plus interest</strong>, often doubling or tripling your monthly payment.
      </p>
    </div>
  </section>

  <!-- Section 1: Draw vs Repayment Payment Shock Table -->
  <section>
    <h2>HELOC Payment Shock Comparison Table ($50,000 vs $100,000 Balance)</h2>
    <p>
      Notice the substantial payment increase when transitioning from the 10-year interest-only draw period into the 20-year amortized principal-and-interest repayment phase (assuming an 8.50% variable rate):
    </p>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>Outstanding HELOC Balance</th>
            <th>Interest-Only Draw Payment (10 Yrs)</th>
            <th>Repayment Phase Payment (20 Yrs)</th>
            <th>Monthly Payment Shock Increase</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>$25,000</strong></td>
            <td>$177 / month</td>
            <td>$217 / month</td>
            <td>+$40 / month (+22%)</td>
          </tr>
          <tr>
            <td><strong>$50,000</strong></td>
            <td>$354 / month</td>
            <td>$434 / month</td>
            <td>+$80 / month (+22%)</td>
          </tr>
          <tr>
            <td><strong>$75,000</strong></td>
            <td>$531 / month</td>
            <td>$651 / month</td>
            <td>+$120 / month (+22%)</td>
          </tr>
          <tr>
            <td><strong>$100,000</strong></td>
            <td>$708 / month</td>
            <td>$868 / month</td>
            <td>+$160 / month (+22%)</td>
          </tr>
          <tr>
            <td><strong>$150,000</strong></td>
            <td>$1,062 / month</td>
            <td>$1,302 / month</td>
            <td>+$240 / month (+22%)</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- Section 2: Fixed-Rate Home Equity Loan vs. Variable HELOC -->
  <section>
    <h2>HELOC vs. Home Equity Loan: Which is Better—</h2>
    <div class="comparison-grid">
      <div class="grid-card">
        <h3>Variable-Rate HELOC</h3>
        <ul>
          <li>Revolving line of credit (draw and repay repeatedly).</li>
          <li>Pay interest only on the money you actively use.</li>
          <li>Variable ÷PR pegged to WSJ Prime Rate (can increase).</li>
          <li>Best for multi-stage renovations or ongoing project funding.</li>
        </ul>
      </div>

      <div class="grid-card">
        <h3>Fixed-Rate Home Equity Loan</h3>
        <ul>
          <li>Lump-sum disbursement upfront.</li>
          <li>Fixed monthly payment and fixed interest rate for life of loan.</li>
          <li>Predictable amortization schedule without payment surprises.</li>
          <li>Best for debt consolidation or one-time known large expenses.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Interlinking Section -->
  <section class="related-calculators-section">
    <h2>Related Home Equity & Debt Tools</h2>
    <ul class="related-tools-list">
      <li><a href="/real-estate/home-equity-loan-calculator">Home Equity Loan Calculator</a> — Fixed-rate second mortgage payment calculator.</li>
      <li><a href="/real-estate/mortgage-refinance-calculator">Mortgage Refinance Calculator</a> — Compare cash-out refinancing vs. a HELOC.</li>
      <li><a href="/loan-calculators/debt-to-income-calculator">Debt-to-Income (DTI) Calculator</a> — Verify CLTV and debt eligibility limits.</li>
    </ul>
  </section>

  <footer class="editorial-byline-card">
    <div class="byline-content">
      <p><strong>Regulatory Compliance:</strong> Underwriting formulas follow disclosure guidelines from the <a href="https://www.federalreserve.gov/" rel="noopener" target="_blank">Federal Reserve Board</a> and CFPB Regulation Z (Truth in Lending ÷ct).</p>
      <p><em>Last Fact-Checked & Updated: October 2026</em></p>
    </div>
  </footer>

</article>
</main>

<script>
function calculateHELOC() {
      const homeVal = parseFloat(document.getElementById('homeVal').value) || 0;
      const firstMortgage = parseFloat(document.getElementById('firstMortgage').value) || 0;
      const drawn = parseFloat(document.getElementById('helocDrawn').value) || 0;
      const rate = (parseFloat(document.getElementById('helocRate').value) || 0) / 100;

      // Max line at 85% CLTV
      const maxLine = Math.max(0, (homeVal * 0.85) - firstMortgage);
      const cltv = homeVal > 0 ? ((firstMortgage + drawn) / homeVal) * 100 : 0;

      // Draw payment = Interest only = (Drawn * Rate) / 12
      const drawPmt = (drawn * rate) / 12;

      // Repayment phase = Amortized 20 years (240 months)
      const monthlyRate = rate / 12;
      const nRepayMonths = 240;
      let repayPmt = 0;
      if (monthlyRate > 0) {
        repayPmt = (drawn * (monthlyRate * Math.pow(1 + monthlyRate, nRepayMonths))) / (Math.pow(1 + monthlyRate, nRepayMonths) - 1);
      } else {
        repayPmt = drawn / nRepayMonths;
      }

      const diff = repayPmt - drawPmt;
      const pctIncrease = drawPmt > 0 ? (diff / drawPmt) * 100 : 0;
      const totalInterest = (drawPmt * 120) + (repayPmt * 240) - drawn;

      document.getElementById('maxLineDisplay').innerText = '$' + Math.round(maxLine).toLocaleString();
      document.getElementById('cltvDisplay').innerText = cltv.toFixed(1) + '% CLTV';
      document.getElementById('drawPmtDisplay').innerText = '$' + Math.round(drawPmt).toLocaleString() + ' / mo';
      document.getElementById('repayPmtDisplay').innerText = '$' + Math.round(repayPmt).toLocaleString() + ' / mo';
      document.getElementById('repayPmtDetailDisplay').innerText = '$' + Math.round(repayPmt).toLocaleString() + ' / mo';
      document.getElementById('shockIncreaseDisplay').innerText = '+$' + Math.round(diff).toLocaleString() + ' / month (+' + pctIncrease.toFixed(0) + '%)';
      document.getElementById('totalInterestDisplay').innerText = '$' + Math.round(totalInterest).toLocaleString();
    }

    document.querySelectorAll('input').forEach(el => el.addEventListener('input', calculateHELOC));
    calculateHELOC();
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
