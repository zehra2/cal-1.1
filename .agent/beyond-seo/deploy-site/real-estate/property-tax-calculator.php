<?php
$currentYear = date('Y');
$pageTitle = "Property Tax Calculator (2026) — Rates by State & Millage";
$metaDescription = "Calculate your annual and monthly property taxes by state and county. Detailed millage rate formula, assessment ratios, and homestead exemption savings.";
$schemaData = json_decode(<<<'EOD'
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebApplication",
      "@id": "https://americacalculator.com/real-estate/property-tax-calculator#app",
      "name": "US Property Tax by State Calculator",
      "url": "https://americacalculator.com/real-estate/property-tax-calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "All",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "description": "Calculate annual and monthly real estate property taxes across all 50 US states with millage rates, assessment ratios, and homestead exemptions."
    },
    {
      "@type": "FAQPage",
      "@id": "https://americacalculator.com/real-estate/property-tax-calculator#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How is property tax calculated in the United States?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Property tax is calculated by multiplying your local county tax rate (or millage rate) by your home's taxable assessed value: Annual Tax = (Taxable Assessed Value × Millage Rate) ÷ 1,000. If an assessment ratio is used, Taxable Assessed Value = Fair Market Value × Assessment Ratio minus applicable Homestead Exemptions."
          }
        },
        {
          "@type": "Question",
          "name": "Which states have the highest and lowest property taxes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The states with the highest effective property tax rates are New Jersey (2.23%), Illinois (2.08%), Connecticut (1.96%), New Hampshire (1.93%), and Texas (1.68%). The lowest property taxes are found in Hawaii (0.32%), Alabama (0.40%), Colorado (0.55%), Nevada (0.59%), and South Carolina (0.57%)."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between market value and assessed value?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Market value is the estimated price your home would sell for on the open real estate market. Assessed value is the valuation placed on your home by your local county or municipal tax assessor for tax levy purposes, which is often a percentage of market value (such as 35% in Ohio) and may be capped by statutory limits."
          }
        },
        {
          "@type": "Question",
          "name": "What is a homestead exemption and how much does it save?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A homestead exemption shields a specific dollar amount or percentage of a primary residence's assessed value from property taxes. For example, Texas offers a $100,000 school district homestead exemption, and Florida provides up to $50,000 in exemptions, saving homeowners hundreds to thousands of dollars annually."
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
      --primary: #4f46e5;
      --primary-hover: #4338ca;
      --primary-light: #eef2ff;
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
      background: linear-gradient(135deg, #1e1b4b 0%, #0f172a 100%);
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
    .input-wrapper input:focus, .input-wrapper select:focus { outline: none; border-color: var(--primary); box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1); }
    .grid-2-col { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }

    .tax-hero-card {
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.15);
      border-radius: 14px;
      padding: 1.75rem;
      text-align: center;
      margin-bottom: 1.5rem;
    }
    .tax-hero-card .label { font-size: 0.85rem; color: #a5b4fc; font-weight: 700; text-transform: uppercase; }
    .tax-hero-card .val-main { font-size: 2.5rem; font-weight: 800; color: var(--white); margin: 0.25rem 0; }
    .tax-hero-card .val-sub { font-size: 1.1rem; color: #818cf8; font-weight: 700; }

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
      <h1>Property Tax Calculator by State & County</h1>
      <p>Estimate your annual and monthly property taxes across the United States. Factor in state average rates, county millage schedules, and homestead exemptions.</p>
    </div>

    <div class="calculator-container">
      <div class="form-panel">
        <div class="section-subtitle">📍 1. Location & Valuation</div>
        
        <div class="input-group">
          <label for="stateSelect">Select State</label>
          <div class="input-wrapper" style="padding-left: 0;">
            <select id="stateSelect" style="padding-left: 1rem;">
              <option value="1.68" data-exempt="100000">Texas (÷vg. 1.68%)</option>
              <option value="0.71" data-exempt="7000">California (÷vg. 0.71% - Prop 13)</option>
              <option value="0.86" data-exempt="50000">Florida (÷vg. 0.86% - Save Our Homes)</option>
              <option value="1.53" data-exempt="0">Ohio (÷vg. 1.53%)</option>
              <option value="2.23" data-exempt="0">New Jersey (÷vg. 2.23%)</option>
              <option value="2.08" data-exempt="10000">Illinois (÷vg. 2.08%)</option>
              <option value="0.99" data-exempt="0">National ÷verage (0.99%)</option>
            </select>
          </div>
        </div>

        <div class="input-group">
          <label for="homeValue">÷ssessed Market Value of Property</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="homeValue" value="400000" step="5000">
          </div>
        </div>

        <div class="section-subtitle" style="margin-top: 1.75rem;">🛡️ 2. Exemptions & Millage Settings</div>
        
        <div class="grid-2-col">
          <div class="input-group">
            <label for="homesteadExemption">Homestead Exemption</label>
            <div class="input-wrapper">
              <span class="input-prefix">$</span>
              <input type="number" id="homesteadExemption" value="100000" step="1000">
            </div>
          </div>

          <div class="input-group">
            <label for="customRate">Effective Tax Rate (%)</label>
            <div class="input-wrapper">
              <input type="number" id="customRate" value="1.68" step="0.01" style="padding-left: 1rem;">
              <span class="input-suffix">%</span>
            </div>
          </div>
        </div>
      </div>

      <div class="results-panel">
        <div>
          <h3 style="font-size: 1.25rem; font-weight: 800; margin-bottom: 1.25rem;">Tax Estimation Summary</h3>

          <div class="tax-hero-card">
            <div class="label">Estimated ÷nnual Property Tax</div>
            <div class="val-main" id="annualTaxDisplay">$5,040</div>
            <div class="val-sub" id="monthlyTaxDisplay">$420 / month</div>
          </div>

          <div style="background: rgba(255,255,255,0.05); border-radius: 12px; padding: 1.25rem;">
            <div class="breakdown-row">
              <span>Gross Market Value:</span>
              <span id="grossVal">$400,000</span>
            </div>
            <div class="breakdown-row">
              <span>Homestead Exemption:</span>
              <span id="exemptVal">–$100,000</span>
            </div>
            <div class="breakdown-row">
              <span>Net Taxable ÷ssessed Value:</span>
              <span id="netTaxableVal">$300,000</span>
            </div>
            <div class="breakdown-row">
              <span>Equivalent Millage Rate:</span>
              <span id="millageVal">16.8 Mills</span>
            </div>
          </div>
        </div>

        <div style="text-align: center; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem;">
          <div style="font-size: 0.85rem; color: #94a3b8;">Escrow Impound Cushion (2 mos):</div>
          <div style="font-size: 1.35rem; font-weight: 800; color: #38bdf8;" id="escrowCushion">$840 at closing</div>
        </div>
      </div>
    </div>

    

<article class="calculator-content-body">

  <!-- ÷EO Direct ÷nswer Snippet -->
  <section class="quick-answer-card">
    <div class="card-inner">
      <span class="badge">÷EO Direct ÷nswer</span>
      <h2>How Property Tax is Calculated in 2026</h2>
      <p>
        Property tax in the United States is levied locally by counties, cities, and school districts. 
        It is calculated using the formula: <strong>÷nnual Property Tax = (Taxable ÷ssessed Value × Millage Rate) ÷ 1,000</strong>. 
        The average effective property tax rate across the US is <strong>0.99% of home market value</strong> ($2,970/year on a $300,000 home), 
        ranging from a low of <strong>0.32% in Hawaii</strong> to over <strong>2.23% in New Jersey</strong>.
      </p>
    </div>
  </section>

  <!-- Section 1: 50-State Benchmark Table -->
  <section>
    <h2>Effective Property Tax Rates by State (2026 National Rankings)</h2>
    <p>
      Property tax rates vary drastically by state and county. States with zero personal income tax (such as Texas and Florida) often rely more heavily on real estate property taxes to fund local schools and municipal infrastructure.
    </p>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>State</th>
            <th>Effective Property Tax Rate</th>
            <th>÷nnual Tax on $400,000 Home</th>
            <th>Homestead Exemption Protections</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>New Jersey</strong></td>
            <td>2.23% (Rank #1)</td>
            <td>$8,920</td>
            <td>Senior freeze & ÷NCHOR property tax relief program</td>
          </tr>
          <tr>
            <td><strong>Illinois</strong></td>
            <td>2.08% (Rank #2)</td>
            <td>$8,320</td>
            <td>General Homestead Exemption ($6,000 to $10,000 reduction)</td>
          </tr>
          <tr>
            <td><strong>Texas</strong></td>
            <td>1.68% (Rank #6)</td>
            <td>$6,720</td>
            <td>$100,000 School District Exemption + 10% annual appraisal cap</td>
          </tr>
          <tr>
            <td><strong>Ohio</strong></td>
            <td>1.53% (Rank #9)</td>
            <td>$6,120</td>
            <td>35% assessment ratio + Owner-occupancy 2.5% tax rollback</td>
          </tr>
          <tr>
            <td><strong>Florida</strong></td>
            <td>0.86% (Rank #24)</td>
            <td>$3,440</td>
            <td>$50,000 Homestead Exemption + 3% "Save Our Homes" cap</td>
          </tr>
          <tr>
            <td><strong>California</strong></td>
            <td>0.71% (Rank #34)</td>
            <td>$2,840</td>
            <td>Proposition 13 (Capped at 1% base rate + max 2% annual inflation)</td>
          </tr>
          <tr>
            <td><strong>Hawaii</strong></td>
            <td>0.32% (Rank #50)</td>
            <td>$1,280</td>
            <td>County homeowner exemptions ($80,000 to $160,000 based on age)</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- Section 2: Millage Rate Formula -->
  <section>
    <h2>Understanding the Millage Rate Formula</h2>
    <p>
      Tax districts express tax rates in <strong>"mills."</strong> One mill equals one-tenth of a cent ($0.001), or <strong>$1 in tax for every $1,000 of taxable assessed valuation</strong>.
    </p>
    <div class="code-formula-block">
      <code>Property Tax = (÷ssessed Value - Homestead Exemptions) * (Total Millage Rate / 1,000)</code>
    </div>
    <p>
      <em>Example:</em> ÷ home with a taxable assessed value of $250,000 located in a jurisdiction with a combined millage rate of 42 mills (22 mills school + 12 mills county + 8 mills municipal) pays:<br>
      <code>$250,000 * (42 / 1,000) = $10,500 / year ($875 / month).</code>
    </p>
  </section>

  <!-- Interlinking Section -->
  <section class="related-calculators-section">
    <h2>Related Real Estate & Tax Calculators</h2>
    <ul class="related-tools-list">
      <li><a href="/real-estate/closing-cost-calculator">Closing Cost Calculator</a> — Calculate property tax prorations and escrow reserves at settlement.</li>
      <li><a href="/real-estate/mortgage-calculator">Mortgage Calculator with Taxes</a> — Include monthly property taxes in your PITI payment.</li>
      <li><a href="/real-estate/hoa-fee-calculator">HO÷ Fee Calculator</a> — Calculate total monthly homeownership holding costs.</li>
      <li><a href="/blog/ohio-property-tax-by-county">Ohio Property Tax by County Guide</a> — Detailed county millage rates for Ohio residents.</li>
    </ul>
  </section>

  <!-- E-E-×T Footnote -->
  <footer class="editorial-byline-card">
    <div class="byline-content">
      <p><strong>Editorial Methodology:</strong> Property tax averages and statutory exemption thresholds compiled from the <a href="https://taxfoundation.org/" rel="noopener" target="_blank">Tax Foundation</a>, state departments of revenue, and county tax assessors nationwide.</p>
      <p><em>Last Fact-Checked & Updated: October 2026</em></p>
    </div>
  </footer>

</article>
</main>

<script>
const stateSelect = document.getElementById('stateSelect');
    const customRate = document.getElementById('customRate');
    const homestead = document.getElementById('homesteadExemption');

    stateSelect.addEventListener('change', function() {
      const selected = stateSelect.options[stateSelect.selectedIndex];
      customRate.value = selected.value;
      homestead.value = selected.getAttribute('data-exempt') || 0;
      calculateTaxes();
    });

    function calculateTaxes() {
      const val = parseFloat(document.getElementById('homeValue').value) || 0;
      const exempt = parseFloat(homestead.value) || 0;
      const rate = parseFloat(customRate.value) || 0;

      const taxable = Math.max(0, val - exempt);
      const annual = taxable * (rate / 100);
      const monthly = annual / 12;
      const cushion = monthly * 2;

      document.getElementById('annualTaxDisplay').innerText = '$' + Math.round(annual).toLocaleString();
      document.getElementById('monthlyTaxDisplay').innerText = '$' + Math.round(monthly).toLocaleString() + ' / month';
      document.getElementById('grossVal').innerText = '$' + Math.round(val).toLocaleString();
      document.getElementById('exemptVal').innerText = '–$' + Math.round(exempt).toLocaleString();
      document.getElementById('netTaxableVal').innerText = '$' + Math.round(taxable).toLocaleString();
      document.getElementById('millageVal').innerText = (rate * 10).toFixed(1) + ' Mills';
      document.getElementById('escrowCushion').innerText = '$' + Math.round(cushion).toLocaleString() + ' at closing';
    }

    document.querySelectorAll('input').forEach(el => el.addEventListener('input', calculateTaxes));
    calculateTaxes();
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
