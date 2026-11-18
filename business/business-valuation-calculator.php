<?php
$currentYear = date('Y');
$pageTitle = "Business Valuation Calculator ($currentYear) | SDE, EBITDA & Revenue Multiples";
$metaDescription = "Free business valuation calculator $currentYear. Calculate small business value using SDE multiples, EBITDA multiples by industry, revenue rules of thumb, and DCF.";
$metaKeywords = 'business valuation calculator, how much is my business worth, sde multiple calculator, ebitda multiple calculator, small business valuation, business appraisal calculator';
$schemaData = json_decode(<<<'EOD'
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "HowTo",
      "name": "How to Calculate the Value of a Business",
      "step": [
        {
          "@type": "HowToStep",
          "name": "Enter annual gross revenue and net profit",
          "text": "Input your company total annual revenue and reported pre-tax net income."
        },
        {
          "@type": "HowToStep",
          "name": "Calculate Seller's Discretionary Earnings (SDE)",
          "text": "Add back owner compensation, personal benefits, non-operating expenses, and depreciation to determine true discretionary cash flow."
        },
        {
          "@type": "HowToStep",
          "name": "Select industry category and earnings multiple",
          "text": "Choose your industry (SaaS, E-Commerce, Healthcare, Construction, Retail) to apply benchmark valuation multiples."
        },
        {
          "@type": "HowToStep",
          "name": "Account for growth rate and risk premiums",
          "text": "Adjust multiples based on year-over-year revenue growth, customer concentration, and management team independence."
        },
        {
          "@type": "HowToStep",
          "name": "Review estimated business enterprise value",
          "text": "Analyze estimated valuation ranges across SDE, EBITDA, Revenue Rule of Thumb, and Discounted Cash Flow models."
        }
      ]
    },
    {
      "@type": "WebApplication",
      "@id": "https://americacalculator.com/business/business-valuation-calculator#app",
      "name": "Business Valuation Calculator",
      "url": "https://americacalculator.com/business/business-valuation-calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "All",
      "offer": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "description": "Estimate small and middle-market business valuation using SDE multiples, EBITDA multiples by industry, and cash flow normalization."
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
          "name": "Business Calculators",
          "item": "https://americacalculator.com/business/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Business Valuation Calculator",
          "item": "https://americacalculator.com/business/business-valuation-calculator"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://americacalculator.com/business/business-valuation-calculator#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the difference between SDE and EBITDA in business valuation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Seller's Discretionary Earnings (SDE) is used for small businesses (under $5M revenue) where the owner operates the business daily; SDE includes net profit plus one full-time owner's salary, health insurance, and personal perks. EBITDA (Earnings Before Interest, Taxes, Depreciation, and Amortization) is used for larger mid-market companies ($5M+ revenue) where management is fully salaried and independent of ownership."
          }
        },
        {
          "@type": "Question",
          "name": "What is a typical SDE multiple for a small business in 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Across standard main-street US small businesses, SDE multiples typically range from 2.0x to 3.5x. Highly automated, growing online or service businesses can trade for 3.5x to 4.5x SDE, while owner-dependent restaurants, dry cleaners, or single-client consultancies trade between 1.5x and 2.2x SDE."
          }
        },
        {
          "@type": "Question",
          "name": "What are common add-backs in a business valuation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Legitimate add-backs include: owner's total salary and bonus, owner health and life insurance, personal vehicle use, one-time legal/consulting fees, non-operating charitable donations, depreciation, amortization, and one-off facility repairs that will not recur for the new buyer."
          }
        },
        {
          "@type": "Question",
          "name": "What industry multiples apply to SaaS and software businesses?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Software-as-a-Service (SaaS) businesses command premium multiples due to high recurring revenue (ARR) and gross margins (80%+). Profitable SaaS companies typically trade at 4.5x to 8.0x EBITDA (or 3.0x to 6.0x Annual Recurring Revenue) depending on net revenue retention and churn rate."
          }
        },
        {
          "@type": "Question",
          "name": "How does customer concentration affect business value?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If any single customer represents more than 15% to 20% of your total annual revenue (or top 3 clients represent 50%+), buyers and SBA lenders perceive severe cash flow risk, which can reduce your valuation multiple by 0.5x to 1.5x."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between an Asset Sale and a Stock Sale?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "In an Asset Sale (preferred by buyers), the buyer purchases only the business assets, equipment, goodwill, and customer lists, leaving unknown historical liabilities and debts with the seller. In a Stock Sale (preferred by sellers for capital gains treatment), the buyer acquires the entire legal entity, including all past liabilities."
          }
        },
        {
          "@type": "Question",
          "name": "What is a Rule of Thumb revenue multiple?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A revenue multiple estimates business value as a percentage of gross annual sales (e.g., 0.5x to 1.0x revenue for retail/contracting, 1.5x to 3.0x for medical/dental practices). While useful as a high-level sanity check, revenue multiples ignore underlying profit margins and should always be paired with SDE/EBITDA models."
          }
        },
        {
          "@type": "Question",
          "name": "How long does a formal business valuation or sale take?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A professional third-party business appraisal typically takes 2 to 4 weeks. Selling a small-to-midsize business on the open market (from listing to letter of intent, SBA underwriting, due diligence, and closing) takes an average of 6 to 9 months."
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
.results-panel { background: #0369a1; color: #ffffff; border-radius: var(--radius); padding: 2rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 10px 25px rgba(3,105,161,0.25); }
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
.val-hero-card {
  background: rgba(56, 189, 248, 0.2);
  border: 1px solid rgba(56, 189, 248, 0.4);
  border-radius: 14px;
  padding: 1.5rem;
  text-align: center;
  margin-bottom: 1.5rem;
}
.val-hero-card .label { font-size: 0.82rem; color: #bae6fd; font-weight: 700; text-transform: uppercase; }
.val-hero-card .val-main { font-size: 2.5rem; font-weight: 800; color: #f0f9ff; margin: 0.25rem 0; line-height: 1; }
.val-hero-card .val-sub { font-size: 0.88rem; color: #bae6fd; }
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
    <h1>Business Valuation Calculator (<?php echo $currentYear; ?>)</h1>
    <p>Calculate small and mid-market business valuation. Compare Seller's Discretionary Earnings (SDE), EBITDA multiples across industries, and revenue rules of thumb.</p>
  </div>

  <div class="calculator-container">
    <div class="form-panel">
      <div class="section-subtitle">1. Company Financials</div>
      
      <div class="grid-2-col">
        <div class="input-group">
          <label for="valRevenue">Annual Gross Revenue ($)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="valRevenue" value="1250000" step="25000">
          </div>
        </div>
        <div class="input-group">
          <label for="valNetProfit">Reported Pre-Tax Profit ($)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="valNetProfit" value="185000" step="5000">
          </div>
        </div>
      </div>

      <div class="section-subtitle" style="margin-top: 1.75rem;">2. Owner Compensation &amp; Add-Backs</div>

      <div class="grid-2-col">
        <div class="input-group">
          <label for="valOwnerSalary">Owner Salary &amp; Perks ($)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="valOwnerSalary" value="120000" step="5000">
          </div>
        </div>
        <div class="input-group">
          <label for="valAddBacks">One-Time &amp; Non-Recurring ($)</label>
          <div class="input-wrapper">
            <span class="input-prefix">$</span>
            <input type="number" id="valAddBacks" value="35000" step="2500">
          </div>
        </div>
      </div>

      <div class="section-subtitle" style="margin-top: 1.75rem;">3. Industry &amp; Valuation Model</div>

      <div class="grid-2-col">
        <div class="input-group">
          <label for="valIndustry">Industry Category</label>
          <div class="input-wrapper" style="padding-left: 0;">
            <select id="valIndustry" style="padding-left: 1rem;">
              <option value="contracting" selected>Construction / Trades (2.75x SDE)</option>
              <option value="ecommerce">E-Commerce / Direct-to-Consumer (3.25x SDE)</option>
              <option value="saas">SaaS / Software (5.50x EBITDA)</option>
              <option value="healthcare">Medical / Dental Practice (3.75x SDE)</option>
              <option value="professional">Accounting / Legal / Agency (2.50x SDE)</option>
              <option value="retail">Retail / Restaurant (2.00x SDE)</option>
              <option value="manufacturing">Manufacturing / Distribution (4.25x EBITDA)</option>
            </select>
          </div>
        </div>
        <div class="input-group">
          <label for="valMultiple">Custom Valuation Multiple</label>
          <div class="input-wrapper">
            <input type="number" id="valMultiple" value="2.75" step="0.25" style="padding-left: 1rem;">
            <span class="input-suffix">x</span>
          </div>
        </div>
      </div>
    </div>

    <div class="results-panel">
      <div>
        <div class="val-hero-card">
          <div class="label">Estimated Business Value</div>
          <div class="val-main" id="resValuation">$935,000</div>
          <div class="val-sub" id="resMultipleLabel">Based on 2.75x SDE Multiple</div>
        </div>

        <div class="breakdown-row"><span>Seller's Discretionary Earnings (SDE):</span><span id="resSde" style="color:#38bdf8;">$340,000</span></div>
        <div class="breakdown-row"><span>Adjusted EBITDA:</span><span id="resEbitda">$220,000</span></div>
        <div class="breakdown-row"><span>Valuation Range (Conservative - Aggressive):</span><span id="resValRange">$765k - $1.10M</span></div>
        <div class="breakdown-row"><span>Revenue Multiple Equivalent:</span><span id="resRevMult">0.75x Revenue</span></div>
        <div class="breakdown-row"><span>SBA 7(a) Max Loan Capacity (85% LTV):</span><span id="resSbaCap" style="color:#34d399;">$794,750</span></div>
      </div>

      <div style="border-top: 1px solid rgba(255,255,255,0.15); padding-top: 1rem; text-align: center;">
        <div style="font-size: 0.8rem; color: #bae6fd;">Normalized SDE Profit Margin:</div>
        <div style="font-size: 1.35rem; font-weight: 800; color: #38bdf8;" id="resSdeMargin">27.2% of Revenue</div>
      </div>
    </div>
  </div>

  <div class="calculator-content-body">
    <div class="quick-answer-card">
      <h2>How Small Business Valuation Works in <?php echo $currentYear; ?></h2>
      <p>Small businesses generating under $5M in revenue are valued on a multiple of <strong>Seller's Discretionary Earnings (SDE)</strong>, which adds back owner compensation, non-essential perks, and one-off expenses to reported profit. Main-street businesses trade for <strong>2.0x to 3.5x SDE</strong>, while larger mid-market companies ($5M+) trade for <strong>4.0x to 8.0x EBITDA</strong>.</p>
    </div>

    <h2>2026 Industry Valuation Multiples Benchmark Table</h2>
    <p>Valuation multiples vary significantly based on industry capital intensity, customer retention, and gross margins:</p>

    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>Industry Sector</th>
            <th>Typical SDE Multiple</th>
            <th>Typical EBITDA Multiple</th>
            <th>Rule of Thumb Revenue Multiple</th>
            <th>Primary Value Drivers</th>
          </tr>
        </thead>
        <tbody>
          <tr><td><strong>SaaS / Software</strong></td><td>4.0x - 6.0x</td><td>5.0x - 9.0x</td><td>2.5x - 6.0x ARR</td><td>Net revenue retention (110%+), low churn (&lt;5%), gross margins 80%+</td></tr>
          <tr><td><strong>Medical / Dental Practice</strong></td><td>3.0x - 4.5x</td><td>4.5x - 6.5x</td><td>0.8x - 1.3x Rev</td><td>Commercial insurance mix, recurring patient base, associate retention</td></tr>
          <tr><td><strong>Manufacturing &amp; Distribution</strong></td><td>3.0x - 4.25x</td><td>4.0x - 6.5x</td><td>0.7x - 1.2x Rev</td><td>Proprietary tooling, B2B repeat contracts, low customer concentration</td></tr>
          <tr><td><strong>E-Commerce / DTC Brands</strong></td><td>2.5x - 3.75x</td><td>3.5x - 5.5x</td><td>0.6x - 1.2x Rev</td><td>Organic traffic %, SKU diversification, Amazon account health rating</td></tr>
          <tr><td><strong>HVAC / Plumbing / Electrical</strong></td><td>2.5x - 3.5x</td><td>3.5x - 5.0x</td><td>0.6x - 1.0x Rev</td><td>Maintenance service contracts, licensed tech team, fleet condition</td></tr>
          <tr><td><strong>Accounting &amp; Law Firms</strong></td><td>2.25x - 3.25x</td><td>3.0x - 4.5x</td><td>0.8x - 1.2x Rev</td><td>Recurring client retainers, staff autonomy from founder</td></tr>
          <tr><td><strong>Restaurants &amp; Retail</strong></td><td>1.75x - 2.5x</td><td>2.5x - 3.5x</td><td>0.3x - 0.5x Rev</td><td>Prime lease terms, staff stability, high food margin management</td></tr>
        </tbody>
      </table>
    </div>

    <h2>SDE vs. EBITDA: Which Valuation Metric to Use?</h2>
    <p>Choosing between SDE and EBITDA depends on company scale and management structure:</p>
    <ul>
      <li><strong>Seller's Discretionary Earnings (SDE):</strong> <code>SDE = Net Profit + One Owner's Salary + Depreciation + Amortization + Discretionary Personal Perks + One-Time Expenses</code>. Ideal for owner-operated businesses under $5M revenue where a buyer will replace the owner.</li>
      <li><strong>EBITDA (Earnings Before Interest, Taxes, Depreciation, Amortization):</strong> <code>EBITDA = Net Operating Income + Depreciation + Amortization</code>. Used when the company has professional executive management and the buyer is an institutional private equity fund or corporate acquirer.</li>
    </ul>

    <h2>5 Key Levers to Increase Your Business Multiple Before Selling</h2>
    <p>Buyers pay top-of-market multiples for companies with de-risked operations:</p>
    <ul>
      <li><strong>Reduce Owner Dependency:</strong> Implement standard operating procedures (SOPs) and train a capable general manager so the business runs without daily founder intervention.</li>
      <li><strong>Diversify Customer Concentration:</strong> Ensure no single customer represents more than 10% to 15% of annual revenue.</li>
      <li><strong>Build Recurring Revenue:</strong> Transition one-time project sales into recurring monthly retainer contracts or subscriptions.</li>
      <li><strong>Clean Financial Books:</strong> Maintain accrual-basis accounting with verified 3-year profit &amp; loss statements and filed tax returns.</li>
      <li><strong>Strengthen Gross Margins:</strong> Protect pricing power through proprietary intellectual property, vendor contracts, or unique brand moats.</li>
    </ul>

    <h2>The Three Core Business Valuation Approaches</h2>
    <p>Certified business appraisers (CBVs / ASAs) utilize three primary methodologies during formal appraisals:</p>
    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr><th>Approach</th><th>Methodology</th><th>When It Applies</th></tr>
        </thead>
        <tbody>
          <tr><td><strong>Market Approach (Multiples)</strong></td><td>Benchmarks historical closed transactions (BizBuySell, DealStats) using SDE, EBITDA, or revenue multiples.</td><td>Most main-street businesses, franchises, and established B2B firms.</td></tr>
          <tr><td><strong>Income Approach (DCF)</strong></td><td>Forecasts 5-year free cash flows discounted back to present value using WACC (Weighted Average Cost of Capital).</td><td>High-growth software companies, scalable startups, and predictable contract firms.</td></tr>
          <tr><td><strong>Asset-Based Approach</strong></td><td>Calculates Adjusted Net Asset Value (Fair Market Value of tangible assets minus all liabilities).</td><td>Asset-heavy manufacturing, holding companies, or distressed liquidations.</td></tr>
        </tbody>
      </table>
    </div>

    <h2>Deal Structuring: Cash at Close vs. Seller Financing vs. Earn-Outs</h2>
    <p>Headline valuation is only half the battle; <em>how the purchase is funded</em> determines your net payout after taxes and risk:</p>
    <ul>
      <li><strong>Cash at Close (60%–80%):</strong> Funded via SBA 7(a) acquisition loans or buyer equity.</li>
      <li><strong>Seller Note / Financing (10%–25%):</strong> A promissory note where the buyer pays the seller principal and interest over 3 to 7 years (typically at 7% to 10% interest).</li>
      <li><strong>Earn-Outs (10%–20%):</strong> Contingent future payments tied to the company hitting specific post-close EBITDA or revenue benchmarks over 12 to 24 months.</li>
    </ul>

    <h2>Preparing for Buyer Due Diligence &amp; Quality of Earnings (QofE)</h2>
    <p>Before an M&amp;A transaction closes, sophisticated acquirers and SBA lenders commission an independent <strong>Quality of Earnings (QofE) audit</strong> to verify revenue sustainability, inspect working capital cycles, and challenge proposed add-backs. Having clean, reconcilable bookkeeping ahead of time protects your negotiated multiple and prevents costly re-trading at the closing table.</p>

    <h2>Frequently Asked Questions (FAQ)</h2>
    <div class="faq-item">
      <h4>What is the difference between SDE and EBITDA in business valuation?</h4>
      <p>SDE is used for owner-operated small businesses (under $5M revenue) and includes one owner's salary and perks. EBITDA is used for larger mid-market companies where management is fully salaried and separate from ownership.</p>
    </div>
    <div class="faq-item">
      <h4>What is a typical SDE multiple for a small business in 2026?</h4>
      <p>SDE multiples typically range from 2.0x to 3.5x for standard small businesses. Automated, high-growth companies trade for 3.5x to 4.5x SDE, while owner-dependent businesses trade between 1.5x and 2.2x.</p>
    </div>
    <div class="faq-item">
      <h4>What are common add-backs in a business valuation?</h4>
      <p>Legitimate add-backs include: owner's total salary and bonus, health insurance, personal vehicle use, one-time legal/consulting fees, non-operating donations, depreciation, and non-recurring facility repairs.</p>
    </div>
    <div class="faq-item">
      <h4>What industry multiples apply to SaaS and software businesses?</h4>
      <p>Profitable SaaS companies trade at 4.5x to 8.0x EBITDA (or 3.0x to 6.0x ARR) driven by high recurring subscription revenue, low churn (&lt;5%), and high gross margins (80%+).</p>
    </div>
    <div class="faq-item">
      <h4>How does customer concentration affect business value?</h4>
      <p>If any single customer represents more than 15% to 20% of revenue, buyers and lenders perceive high risk, which can discount your valuation multiple by 0.5x to 1.5x.</p>
    </div>
    <div class="faq-item">
      <h4>What is the difference between an Asset Sale and a Stock Sale?</h4>
      <p>In an Asset Sale, the buyer purchases assets, equipment, and goodwill, leaving liabilities with the seller. In a Stock Sale, the buyer purchases the legal entity, assuming all past liabilities.</p>
    </div>
    <div class="faq-item">
      <h4>What is a Rule of Thumb revenue multiple?</h4>
      <p>A revenue multiple estimates value as a percentage of gross sales (e.g., 0.5x to 1.0x revenue for retail, 1.0x to 2.0x for medical). It should always be cross-referenced with SDE/EBITDA cash flow.</p>
    </div>
    <div class="faq-item">
      <h4>How long does a formal business valuation or sale take?</h4>
      <p>A third-party business appraisal takes 2 to 4 weeks. Selling a small business on the market (from listing to due diligence and SBA closing) takes an average of 6 to 9 months.</p>
    </div>

    <h2>Explore Related Business &amp; Loan Calculators</h2>
    <ul>
      <li><a href="/loan-calculators/sba-loan-calculator">SBA 7(a) Loan Calculator</a> &mdash; Calculate acquisition financing for business buyers.</li>
      <li><a href="/business/profit-margin-calculator">Profit Margin Calculator</a> &mdash; Analyze gross, operating, and net profit margins.</li>
      <li><a href="/business/markup-calculator">Markup Calculator</a> &mdash; Optimize product and service pricing strategies.</li>
      <li><a href="/business/roi-calculator">Business ROI Calculator</a> &mdash; Calculate return on invested equity and capital expenditures.</li>
    </ul>
  </div>
</main>

<script>
function calculateValuation() {
  var rev = parseFloat(document.getElementById('valRevenue').value) || 0;
  var netProfit = parseFloat(document.getElementById('valNetProfit').value) || 0;
  var ownerSalary = parseFloat(document.getElementById('valOwnerSalary').value) || 0;
  var addBacks = parseFloat(document.getElementById('valAddBacks').value) || 0;
  var mult = parseFloat(document.getElementById('valMultiple').value) || 2.75;
  var ind = document.getElementById('valIndustry').value;

  var sde = netProfit + ownerSalary + addBacks;
  var ebitda = netProfit + addBacks; // EBITDA replaces owner with market manager
  var valuation = 0;

  if (ind === 'saas' || ind === 'manufacturing') {
    valuation = ebitda * mult;
  } else {
    valuation = sde * mult;
  }

  var lowVal = valuation * 0.85;
  var highVal = valuation * 1.15;
  var revMult = rev > 0 ? (valuation / rev) : 0;
  var sdeMargin = rev > 0 ? (sde / rev) * 100 : 0;
  var sbaCap = valuation * 0.85;

  document.getElementById('resValuation').textContent = '$' + Math.round(valuation).toLocaleString();
  document.getElementById('resMultipleLabel').textContent = 'Based on ' + mult.toFixed(2) + 'x ' + (ind === 'saas' || ind === 'manufacturing' ? 'EBITDA' : 'SDE') + ' Multiple';
  document.getElementById('resSde').textContent = '$' + Math.round(sde).toLocaleString();
  document.getElementById('resEbitda').textContent = '$' + Math.round(ebitda).toLocaleString();
  document.getElementById('resValRange').textContent = '$' + Math.round(lowVal / 1000) + 'k - $' + (highVal >= 1000000 ? (highVal / 1000000).toFixed(2) + 'M' : Math.round(highVal / 1000) + 'k');
  document.getElementById('resRevMult').textContent = revMult.toFixed(2) + 'x Revenue';
  document.getElementById('resSbaCap').textContent = '$' + Math.round(sbaCap).toLocaleString();
  document.getElementById('resSdeMargin').textContent = sdeMargin.toFixed(1) + '% of Revenue';
}

document.getElementById('valIndustry').addEventListener('change', function() {
  var ind = this.value;
  var m = 2.75;
  if (ind === 'contracting') m = 2.75;
  else if (ind === 'ecommerce') m = 3.25;
  else if (ind === 'saas') m = 5.50;
  else if (ind === 'healthcare') m = 3.75;
  else if (ind === 'professional') m = 2.50;
  else if (ind === 'retail') m = 2.00;
  else if (ind === 'manufacturing') m = 4.25;
  document.getElementById('valMultiple').value = m;
  calculateValuation();
});

document.querySelectorAll('#valRevenue, #valNetProfit, #valOwnerSalary, #valAddBacks, #valMultiple').forEach(function(el) {
  el.addEventListener('input', calculateValuation);
  el.addEventListener('change', calculateValuation);
});
calculateValuation();
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
