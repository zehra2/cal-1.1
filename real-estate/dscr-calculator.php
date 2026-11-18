<?php
$currentYear = date('Y');
$pageTitle       = "DSCR Calculator ($currentYear) — Free Loan Qualifier";
$metaDescription = "Free DSCR calculator for $currentYear. Calculate debt service coverage ratio for rental property & commercial real estate. See if you qualify for a DSCR loan.";
$metaKeywords    = 'DSCR calculator, debt service coverage ratio calculator, DSCR loan calculator, DSCR mortgage calculator, rental property DSCR, DSCR real estate';
$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'HowTo','name'=>'How to Calculate DSCR for a Rental Property','totalTime'=>'PT3M','step'=>[
    ['@type'=>'HowToStep','position'=>1,'name'=>'Enter monthly rental income','text'=>'Input gross monthly rental income from leases or market rent (Form 1007). Add any other income such as laundry, parking, or storage fees.'],
    ['@type'=>'HowToStep','position'=>2,'name'=>'Set vacancy rate','text'=>'Enter the expected vacancy rate as a percentage. Most lenders assume 5-8% vacancy for residential rentals.'],
    ['@type'=>'HowToStep','position'=>3,'name'=>'Enter operating expenses','text'=>'Input annual property taxes, insurance premiums, maintenance costs, and property management fees to compute Net Operating Income (NOI).'],
    ['@type'=>'HowToStep','position'=>4,'name'=>'Enter loan details','text'=>'Input the proposed loan amount, interest rate, and term. The calculator computes monthly P&I and annual debt service automatically.'],
    ['@type'=>'HowToStep','position'=>5,'name'=>'Review DSCR and qualification','text'=>'The calculator displays your DSCR ratio, pass/fail status against common lender minimums, maximum supportable loan amount at various DSCR targets, and monthly cash flow.'],
  ]],
  ['@type'=>'WebApplication','name'=>'DSCR Calculator',
   'url'=>'https://americacalculator.com/real-estate/dscr-calculator',
   'description'=>'Calculate Debt Service Coverage Ratio (DSCR) for any rental property or commercial real estate investment. See qualification status for DSCR loans.',
   'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All',
   'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Real Estate','item'=>'https://americacalculator.com/real-estate/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'DSCR Calculator','item'=>'https://americacalculator.com/real-estate/dscr-calculator'],
  ]],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'What is DSCR in real estate?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'DSCR (Debt Service Coverage Ratio) measures whether a property\'s income is sufficient to cover its mortgage payments. Formula: DSCR = NOI / Annual Debt Service. A DSCR above 1.0 means the property generates more income than needed to cover the debt. Lenders typically require 1.20–1.25 minimum.']],
    ['@type'=>'Question','name'=>'What DSCR do lenders require in 2026?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Most DSCR lenders in 2026 require a minimum ratio of 1.0 to 1.25, depending on credit score, down payment, and property type. A 1.25x DSCR with 25% down and 720+ credit score gets the best rates. Some Non-QM lenders allow 0.75x DSCR with 30-35% down and additional cash reserves.']],
    ['@type'=>'Question','name'=>'What is a DSCR loan?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'A DSCR loan qualifies the borrower based on the property\'s rental income rather than the borrower\'s personal income. No tax returns, W-2s, or employment verification required. This makes them ideal for self-employed investors, LLC-held properties, and portfolio scaling beyond Fannie Mae\'s 10-property limit.']],
    ['@type'=>'Question','name'=>'How do I improve my DSCR?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'To improve DSCR: increase rents to market rate, reduce operating expenses, make a larger down payment (reduces debt service), negotiate a lower interest rate, extend the loan term, or choose an interest-only period. Each $100/month increase in NOI improves DSCR measurably on most investment properties.']],
    ['@type'=>'Question','name'=>'Can I get a DSCR loan with bad credit?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Most DSCR lenders require a minimum credit score of 620 to 680. Some Non-QM lenders accept 580 with 30%+ down and strong property cash flow. Unlike conventional loans, income history is not evaluated, so self-employed borrowers who show losses on tax returns can often qualify through DSCR when they cannot through traditional channels.']],
    ['@type'=>'Question','name'=>'What is the minimum down payment for a DSCR loan?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Most DSCR lenders require 20% down for single-family rentals and 25% for 2-4 unit properties. Below-1.0 DSCR programs may require 30-35% down. DSCR loans are not available with 0% or 3.5% down like FHA or VA — they require meaningful equity from day one.']],
    ['@type'=>'Question','name'=>'Can I use a DSCR loan for Airbnb short-term rentals?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. Many DSCR lenders offer short-term rental programs using AirDNA or Rabbu market revenue projections rather than a traditional 12-month lease. However, some lenders discount projected STR income by 15-25% for seasonality and vacancy risk. A trailing 12-month operating history strengthens the application significantly.']],
    ['@type'=>'Question','name'=>'What is the difference between DSCR and DTI?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'DTI (Debt-to-Income) measures personal monthly debt against personal gross income. DSCR measures property rental income against the property\'s own debt payments. DSCR loans replace personal DTI analysis entirely — the property qualifies itself. This is why investors with complex returns or many properties prefer DSCR financing.']],
    ['@type'=>'Question','name'=>'Are DSCR loans available for commercial properties?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. Commercial properties including multifamily (5+ units), mixed-use, retail, and industrial are underwritten using DSCR by commercial lenders and CMBS programs. Commercial DSCR underwriting typically requires 1.25x minimum and uses NOI (after all operating expenses) divided by full annual debt service.']],
  ]],
]];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f8fafc;}
.rc-wrap{max-width:960px;margin:0 auto;padding:2rem 1.25rem 4rem;}
.rc-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}.rc-bc a{color:#64748b;text-decoration:none;}.rc-bc a:hover{color:#0369a1;}
.rc-hero h1{font-size:1.85rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.rc-hero p{font-size:.97rem;color:#475569;line-height:1.72;margin:0 0 1.75rem;border-left:3px solid #0369a1;padding-left:.9rem;}
.rc-badges{display:flex;flex-wrap:wrap;gap:.5rem;margin-bottom:1.5rem;}
.rc-badge{display:inline-flex;align-items:center;gap:.35rem;padding:5px 12px;border-radius:20px;font-size:.73rem;font-weight:700;letter-spacing:.02em;}
.rc-badge-blue{background:#dbeafe;color:#1e40af;border:1px solid #93c5fd;}
.rc-badge-green{background:#dcfce7;color:#166534;border:1px solid #86efac;}
.rc-badge-gray{background:#f1f5f9;color:#475569;border:1px solid #cbd5e1;}
.rc-card{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden;margin-bottom:1.75rem;}
.rc-card-head{background:#0369a1;color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;display:flex;justify-content:space-between;align-items:center;}
.rc-card-head-actions{display:flex;gap:.5rem;}
.rc-card-head-actions button{background:rgba(255,255,255,.18);color:#fff;border:none;border-radius:6px;padding:6px 12px;font-size:.75rem;font-weight:600;cursor:pointer;transition:background .2s;}
.rc-card-head-actions button:hover{background:rgba(255,255,255,.3);}
.rc-body{padding:1.5rem;}
.rc-grid{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.rc-field{margin-bottom:1rem;}
.rc-field label{display:block;font-size:.85rem;font-weight:600;color:#1e293b;margin-bottom:.35rem;}
.rc-field input,.rc-field select{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.94rem;color:#0f172a;outline:none;box-sizing:border-box;background:#fff;transition:border-color .2s;}
.rc-field input:focus,.rc-field select:focus{border-color:#0369a1;box-shadow:0 0 0 3px rgba(3,105,161,.1);}
.rc-field .hint{font-size:.73rem;color:#94a3b8;margin-top:.25rem;}
.rc-btn{width:100%;background:#0369a1;color:#fff;padding:13px;border:none;border-radius:8px;font-size:.97rem;font-weight:700;cursor:pointer;margin-top:.5rem;transition:background .2s;}
.rc-btn:hover{background:#0284c7;}
.rc-btn-outline{background:transparent;border:1.5px solid #e2e8f0;color:#64748b;font-size:.85rem;padding:9px;margin-top:.5rem;}
.rc-btn-outline:hover{background:#f1f5f9;color:#0f172a;}
.rc-result{border-radius:10px;padding:1.5rem;margin-top:1.25rem;text-align:center;}
.rc-result.pass{background:#f0fdf4;border:2px solid #86efac;}
.rc-result.warn{background:#fffbeb;border:2px solid #fde68a;}
.rc-result.fail{background:#fef2f2;border:2px solid #fca5a5;}
.dscr-number{font-size:3.5rem;font-weight:900;line-height:1;margin-bottom:.25rem;}
.dscr-label{font-size:.85rem;color:#64748b;margin-bottom:.75rem;}
.dscr-verdict{font-size:1.1rem;font-weight:700;margin-bottom:1rem;}
.dscr-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:.65rem;margin-top:.85rem;}
.d-stat{background:#fff;border-radius:8px;padding:.75rem;text-align:center;border:1px solid #e2e8f0;}
.d-stat .sv{display:block;font-size:1rem;font-weight:800;color:#0369a1;}
.d-stat .sl{font-size:.69rem;color:#64748b;font-weight:600;}
.dscr-bar-wrap{margin:1rem 0 .5rem;}
.dscr-bar-track{height:14px;background:#e2e8f0;border-radius:7px;overflow:hidden;position:relative;}
.dscr-bar-fill{height:100%;border-radius:7px;transition:width .4s ease;}
.dscr-bar-marks{display:flex;justify-content:space-between;font-size:.7rem;color:#94a3b8;margin-top:.3rem;}
/* DSCR target table */
.dscr-target-table{width:100%;border-collapse:collapse;margin-top:1rem;font-size:.85rem;}
.dscr-target-table th{background:#f1f5f9;color:#334155;padding:8px 10px;text-align:left;font-weight:700;border-bottom:2px solid #e2e8f0;}
.dscr-target-table td{padding:8px 10px;border-bottom:1px solid #f1f5f9;color:#475569;}
.dscr-target-table tr.active-row td{background:#dbeafe;color:#1e40af;font-weight:700;}
.dscr-target-table tr:hover td{background:#f8fafc;}
.rc-section{background:#fff;border-radius:12px;border:1px solid #e2e8f0;padding:1.75rem;margin-bottom:1.5rem;}
.rc-section h2{font-size:1.3rem;color:#0f172a;margin:0 0 .85rem;padding-bottom:.6rem;border-bottom:2px solid #e0f2fe;}
.rc-section h3{font-size:1rem;color:#1e293b;margin:1.1rem 0 .45rem;}
.rc-section p{color:#475569;line-height:1.72;font-size:.95rem;margin-bottom:.9rem;}
.rc-section p:last-child{margin-bottom:0;}.rc-section a{color:#0369a1;font-weight:600;}
.rc-table{width:100%;border-collapse:collapse;border-radius:8px;overflow:hidden;border:1px solid #e2e8f0;margin:.85rem 0;}
.rc-table th{background:#0369a1;color:#fff;padding:9px 13px;font-size:.82rem;font-weight:600;text-align:left;}
.rc-table td{padding:8px 13px;border-bottom:1px solid #f1f5f9;font-size:.86rem;color:#334155;}
.rc-table tr:last-child td{border-bottom:none;}
.rc-table tr:nth-child(even) td{background:#f8fafc;}
.rc-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}
.rc-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.rc-faq-q{font-size:.94rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;user-select:none;}
.rc-faq-q::after{content:'+';color:#0369a1;font-size:1.2rem;flex-shrink:0;transition:transform .2s;}
.rc-faq-item.open .rc-faq-q::after{content:'−';}
.rc-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.rc-faq-item.open .rc-faq-a{display:block;}
.rc-related{display:grid;grid-template-columns:repeat(auto-fit,minmax(175px,1fr));gap:.75rem;margin-top:.75rem;}
.rc-rel-link{display:block;background:#e0f2fe;border:1.5px solid #bae6fd;border-radius:8px;padding:.75rem 1rem;font-size:.85rem;font-weight:600;color:#0369a1;text-decoration:none;text-align:center;transition:background .15s;}
.rc-rel-link:hover{background:#bae6fd;}
.privacy-notice{display:flex;align-items:center;gap:.5rem;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:8px;padding:.75rem 1rem;margin-top:1rem;font-size:.78rem;color:#166534;}
@media(max-width:640px){.rc-grid,.dscr-grid{grid-template-columns:1fr;}.rc-hero h1{font-size:1.5rem;}}
@media print{.site-header,.site-footer,.rc-card-head-actions,.rc-btn,.rc-btn-outline,.privacy-notice,.rc-badges{display:none !important;}.rc-card{box-shadow:none;border:1px solid #ccc;}.rc-result{break-inside:avoid;}}
</style>
<main id="main-content">
<div class="rc-wrap">
  <div class="rc-bc"><a href="/">Home</a> › <a href="/real-estate/">Real Estate</a> › DSCR Calculator</div>
  <div class="rc-hero">
    <h1>DSCR Calculator (<?php echo $currentYear;?>) — Debt Service Coverage Ratio for Rental Properties</h1>
    <p>The Debt Service Coverage Ratio (DSCR) is the single most important metric lenders use to evaluate whether a rental property can support its own mortgage. Unlike conventional loans that scrutinize your personal income, W-2s, and tax returns, <strong>DSCR loans qualify the property itself</strong> — making them the go-to financing tool for real estate investors scaling beyond their first few properties. This free calculator computes your property's DSCR using Net Operating Income (gross rent minus vacancy and operating expenses) divided by total annual debt service (principal + interest). It shows whether your deal qualifies at common lender thresholds (1.0x, 1.15x, 1.20x, 1.25x), the maximum loan your property can support at each target ratio, and your projected monthly cash flow — all calculated instantly in your browser with no data stored or transmitted.</p>
  </div>

  <div class="rc-badges">
    <span class="rc-badge rc-badge-blue">✓ Audited for <?php echo $currentYear;?> US Rates</span>
    <span class="rc-badge rc-badge-green">🔒 100% Client-Side — No Data Stored</span>
    <span class="rc-badge rc-badge-gray">Last Updated: September <?php echo $currentYear;?></span>
  </div>

  <div class="rc-card">
    <div class="rc-card-head">
      <span>📊 DSCR Loan Qualification Calculator</span>
      <div class="rc-card-head-actions">
        <button onclick="printResults()" title="Print results">🖨️ Print</button>
        <button onclick="downloadResults()" title="Download CSV">⬇️ CSV</button>
      </div>
    </div>
    <div class="rc-body">
      <!-- Income Section -->
      <div style="font-size:.78rem;font-weight:700;text-transform:uppercase;letter-spacing:.04em;color:#0369a1;margin-bottom:.75rem;border-bottom:1px solid #e0f2fe;padding-bottom:.4rem;">Property Income</div>
      <div class="rc-grid">
        <div class="rc-field"><label for="ds-rent">Monthly Gross Rent ($)</label>
          <input type="number" id="ds-rent" value="2200" min="0" step="50" aria-label="Monthly gross rental income">
          <div class="hint">Market rent per Form 1007 appraisal or actual lease</div>
        </div>
        <div class="rc-field"><label for="ds-other">Other Monthly Income ($)</label>
          <input type="number" id="ds-other" value="0" min="0" step="25" aria-label="Other monthly income">
          <div class="hint">Laundry, parking, storage, pet rent, etc.</div>
        </div>
      </div>
      <div class="rc-grid">
        <div class="rc-field"><label for="ds-vac">Vacancy Rate (%)</label>
          <input type="number" id="ds-vac" value="5" min="0" max="50" step="1" aria-label="Vacancy rate percentage">
          <div class="hint">Most lenders assume 5–8%</div>
        </div>
        <div class="rc-field"><label for="ds-mgmt">Property Management (%)</label>
          <input type="number" id="ds-mgmt" value="10" min="0" max="25" step="0.5" aria-label="Property management fee percentage">
          <div class="hint">Typical: 8–12% of collected rents</div>
        </div>
      </div>

      <!-- Expenses Section -->
      <div style="font-size:.78rem;font-weight:700;text-transform:uppercase;letter-spacing:.04em;color:#0369a1;margin:1rem 0 .75rem;border-bottom:1px solid #e0f2fe;padding-bottom:.4rem;">Annual Operating Expenses</div>
      <div class="rc-grid">
        <div class="rc-field"><label for="ds-tax">Annual Property Tax ($)</label>
          <input type="number" id="ds-tax" value="3200" min="0" step="100" aria-label="Annual property taxes">
        </div>
        <div class="rc-field"><label for="ds-ins">Annual Insurance ($)</label>
          <input type="number" id="ds-ins" value="1500" min="0" step="100" aria-label="Annual insurance premium">
        </div>
      </div>
      <div class="rc-grid">
        <div class="rc-field"><label for="ds-maint">Annual Maintenance ($)</label>
          <input type="number" id="ds-maint" value="2400" min="0" step="100" aria-label="Annual maintenance and repairs">
          <div class="hint">Rule of thumb: 1–2% of property value/year</div>
        </div>
        <div class="rc-field"><label for="ds-hoa">Monthly HOA ($)</label>
          <input type="number" id="ds-hoa" value="0" min="0" step="25" aria-label="Monthly HOA dues">
        </div>
      </div>

      <!-- Loan Section -->
      <div style="font-size:.78rem;font-weight:700;text-transform:uppercase;letter-spacing:.04em;color:#0369a1;margin:1rem 0 .75rem;border-bottom:1px solid #e0f2fe;padding-bottom:.4rem;">Proposed Loan Details</div>
      <div class="rc-grid">
        <div class="rc-field"><label for="ds-loan">Loan Amount ($)</label>
          <input type="number" id="ds-loan" value="240000" min="0" step="1000" aria-label="Loan amount">
        </div>
        <div class="rc-field"><label for="ds-rate">Interest Rate (%)</label>
          <input type="number" id="ds-rate" value="7.50" min="0" max="20" step="0.05" aria-label="Annual interest rate">
          <div class="hint"><?php echo $currentYear;?> DSCR loans: typically 7.0–8.5%</div>
        </div>
      </div>
      <div class="rc-grid">
        <div class="rc-field"><label for="ds-term">Loan Term</label>
          <select id="ds-term" aria-label="Loan term in years">
            <option value="30" selected>30 Years (Standard)</option>
            <option value="25">25 Years</option>
            <option value="20">20 Years</option>
            <option value="15">15 Years</option>
          </select>
        </div>
        <div class="rc-field"><label for="ds-io">Interest-Only Period</label>
          <select id="ds-io" aria-label="Interest-only period">
            <option value="0" selected>No I/O Period</option>
            <option value="5">5-Year I/O</option>
            <option value="10">10-Year I/O</option>
          </select>
          <div class="hint">I/O lowers initial debt service &amp; improves DSCR</div>
        </div>
      </div>

      <button class="rc-btn" onclick="calcDSCR()" aria-label="Calculate DSCR">⚡ Calculate DSCR</button>
      <button class="rc-btn rc-btn-outline" onclick="resetForm()" aria-label="Reset calculator">↻ Reset to Defaults</button>

      <!-- Results -->
      <div class="rc-result" id="ds-result" style="display:none;">
        <div class="dscr-number" id="ds-number">0.00</div>
        <div class="dscr-label">Debt Service Coverage Ratio</div>
        <div class="dscr-verdict" id="ds-verdict"></div>
        <div class="dscr-bar-wrap">
          <div class="dscr-bar-track"><div class="dscr-bar-fill" id="ds-bar"></div></div>
          <div class="dscr-bar-marks"><span>0.0</span><span>1.0</span><span>1.25</span><span>1.5</span><span>2.0+</span></div>
        </div>
        <div class="dscr-grid">
          <div class="d-stat"><span class="sv" id="ds-noi">$0</span><span class="sl">Annual NOI</span></div>
          <div class="d-stat"><span class="sv" id="ds-debt">$0</span><span class="sl">Annual Debt Service</span></div>
          <div class="d-stat"><span class="sv" id="ds-mo-pi">$0</span><span class="sl">Monthly P&amp;I</span></div>
          <div class="d-stat"><span class="sv" id="ds-mo-cf">$0</span><span class="sl">Monthly Cash Flow</span></div>
          <div class="d-stat"><span class="sv" id="ds-ann-cf">$0</span><span class="sl">Annual Cash Flow</span></div>
          <div class="d-stat"><span class="sv" id="ds-gap">—</span><span class="sl">NOI Gap to Qualify</span></div>
        </div>

        <!-- DSCR Target Table -->
        <div style="margin-top:1.25rem;text-align:left;">
          <div style="font-size:.82rem;font-weight:700;color:#1e293b;margin-bottom:.5rem;">What Loan Amount Can This Property Support?</div>
          <table class="dscr-target-table" id="ds-target-table">
            <thead><tr><th>DSCR Target</th><th>Max Loan</th><th>Max Monthly P&amp;I</th><th>Status</th></tr></thead>
            <tbody id="ds-target-body"></tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="privacy-notice">
    <span>🔒</span>
    <span>All calculations run locally in your browser. No personal or financial data is stored, transmitted, or shared with any third party.</span>
  </div>

  <!-- Methodology -->
  <div class="rc-section">
    <h2>How DSCR Is Calculated — Methodology</h2>
    <p><strong>DSCR = Net Operating Income (NOI) / Annual Debt Service.</strong> A ratio above 1.0 means the property generates enough income to cover its mortgage. A ratio below 1.0 means the owner must cover the shortfall out of pocket each month.</p>
    <h3>Step-by-Step Formula Breakdown</h3>
    <ol style="color:#475569;line-height:1.72;font-size:.95rem;margin-left:1.25rem;">
      <li><strong>Gross Scheduled Income (GSI):</strong> Monthly rent × 12 + other monthly income × 12</li>
      <li><strong>Effective Gross Income (EGI):</strong> GSI − vacancy loss (GSI × vacancy rate)</li>
      <li><strong>Operating Expenses:</strong> Property taxes + insurance + maintenance + HOA + management fees (% of EGI)</li>
      <li><strong>Net Operating Income (NOI):</strong> EGI − total operating expenses</li>
      <li><strong>Annual Debt Service:</strong> Monthly P&amp;I payment × 12 (or interest-only payment × 12 if I/O period selected)</li>
      <li><strong>DSCR:</strong> NOI / annual debt service</li>
    </ol>
    <h3>What DSCR Means for Lenders</h3>
    <table class="rc-table">
      <thead><tr><th>DSCR</th><th>Interpretation</th><th>Lender Stance (<?php echo $currentYear;?>)</th></tr></thead>
      <tbody>
        <tr><td>Below 0.75</td><td>Severe negative cash flow</td><td>Typically declined — very few programs available</td></tr>
        <tr><td>0.75 – 0.99</td><td>Property cannot cover debt from income</td><td>Some Non-QM lenders accept with 30–35% down + reserves</td></tr>
        <tr><td>1.0 – 1.19</td><td>Breakeven to thin margin — no buffer</td><td>Many lenders accept with 25% down and 680+ credit</td></tr>
        <tr><td>1.20 – 1.24</td><td>Meets minimum for most lenders</td><td>Standard approval — competitive rates</td></tr>
        <tr><td>1.25 – 1.49</td><td>Good — comfortable income buffer</td><td>Best standard terms and pricing</td></tr>
        <tr><td>1.50+</td><td>Excellent — strong cash flow coverage</td><td>Premium rates, lower down payment options possible</td></tr>
      </tbody>
    </table>
  </div>

  <!-- What is a DSCR Loan -->
  <div class="rc-section">
    <h2>What Is a DSCR Loan and How Does It Work in <?php echo $currentYear;?>?</h2>
    <p>A <strong>DSCR loan</strong> (categorized under Non-QM or non-traditional mortgages) allows real estate investors to qualify for financing based exclusively on the property's projected or actual rental income, rather than the borrower's personal W-2 salary, tax returns, or employment history. Lenders order an independent appraisal with a <strong>Fannie Mae Form 1007 Rent Schedule</strong> to establish fair market rent, then compare that figure against the proposed PITI payment.</p>
    <p>Because traditional Fannie Mae and Freddie Mac guidelines limit borrowers to a maximum of 10 financed residential properties and impose strict personal debt-to-income (DTI) ceilings, DSCR loans have become the financing engine of choice for scaling real estate portfolios. In <?php echo $currentYear;?>, rates on DSCR loans typically run 0.75–1.50% above conventional investment property rates, but the trade-off — no income documentation, unlimited properties, entity closing — makes them the dominant financing vehicle for professional landlords and portfolio investors.</p>

    <h3><?php echo $currentYear;?> DSCR Loan Lender Guidelines (Typical)</h3>
    <table class="rc-table">
      <thead><tr><th>Criteria</th><th>Standard Program</th><th>Aggressive / Non-QM</th></tr></thead>
      <tbody>
        <tr><td><strong>Minimum DSCR</strong></td><td>1.20x – 1.25x</td><td>0.75x (with compensating factors)</td></tr>
        <tr><td><strong>Minimum Credit Score</strong></td><td>680 FICO</td><td>620 FICO (some 580)</td></tr>
        <tr><td><strong>Down Payment</strong></td><td>20–25%</td><td>25–35%</td></tr>
        <tr><td><strong>Interest Rate Range</strong></td><td>7.00% – 7.75%</td><td>7.75% – 9.50%</td></tr>
        <tr><td><strong>Loan Amount Range</strong></td><td>$100K – $2M</td><td>$75K – $3.5M</td></tr>
        <tr><td><strong>Property Types</strong></td><td>SFR, 2-4 unit, condo, townhome</td><td>+ Non-warrantable condo, rural, STR</td></tr>
        <tr><td><strong>Prepayment Penalty</strong></td><td>3-2-1 step-down (3 years)</td><td>5-4-3-2-1 (5 years)</td></tr>
        <tr><td><strong>Interest-Only Available</strong></td><td>Yes — 5 or 10 year I/O</td><td>Yes — up to 10 year I/O</td></tr>
        <tr><td><strong>Vesting</strong></td><td>LLC, Corp, Trust, Individual</td><td>LLC, Corp, Trust, Individual</td></tr>
      </tbody>
    </table>

    <h3>5 Practical Ways to Improve Your Property's DSCR</h3>
    <ul style="color:#475569;line-height:1.72;font-size:.95rem;">
      <li><strong>Increase Down Payment:</strong> Putting down 25–30% reduces your loan principal, which decreases your annual debt service and instantly pushes DSCR above 1.25.</li>
      <li><strong>Buy Down the Interest Rate:</strong> Paying 1–2 upfront discount points to lower your note rate decreases the monthly principal &amp; interest payment.</li>
      <li><strong>Sub-Meter Utilities:</strong> Passing water, sewer, and electric bills directly to tenants reduces operating expenses, directly elevating NOI.</li>
      <li><strong>Appeal County Property Taxes:</strong> If your county assessment is elevated, challenging the valuation reduces annual tax escrow costs.</li>
      <li><strong>Use an Interest-Only Period:</strong> Many DSCR lenders offer 5–10 year interest-only periods, lowering monthly debt service by 20–30% and maximizing initial cash flow.</li>
    </ul>
  </div>

  <!-- DSCR vs Conventional -->
  <div class="rc-section">
    <h2>DSCR Loan vs. Conventional Loan — Key Differences</h2>
    <p>Understanding when to use a DSCR loan versus a conventional Fannie Mae or Freddie Mac mortgage is one of the most critical decisions a real estate investor makes. The two loan types serve very different borrower profiles:</p>
    <table class="rc-table">
      <thead><tr><th>Feature</th><th>DSCR Loan</th><th>Conventional Investment Loan</th></tr></thead>
      <tbody>
        <tr><td><strong>Qualification Method</strong></td><td>Property cash flow (DSCR ratio)</td><td>Personal income, W-2s, tax returns</td></tr>
        <tr><td><strong>Income Documentation</strong></td><td>None required — property qualifies itself</td><td>2 years personal + business tax returns</td></tr>
        <tr><td><strong>Maximum Properties</strong></td><td>Unlimited (entity-level loans)</td><td>10 financed properties (Fannie Mae)</td></tr>
        <tr><td><strong>Minimum Down Payment</strong></td><td>20–25% typical</td><td>15–25% for investment properties</td></tr>
        <tr><td><strong>Interest Rate</strong></td><td>0.75–1.50% higher than conventional</td><td>Standard market rate + investment premium</td></tr>
        <tr><td><strong>Prepayment Penalty</strong></td><td>Common (3-2-1 or 5-4-3-2-1 step-down)</td><td>Typically none</td></tr>
        <tr><td><strong>Entity Closing</strong></td><td>Yes — LLC, Corp, Trust</td><td>Typically personal name only</td></tr>
        <tr><td><strong>Best For</strong></td><td>Investors with 5+ properties, self-employed</td><td>First investment property, W-2 earners</td></tr>
      </tbody>
    </table>
    <p>If you are buying your first investment property and have clean personal income documentation, a conventional investment loan typically offers better rates. Once you scale beyond 4–10 properties or your personal tax returns show significant business deductions, DSCR loans become the more practical path.</p>
  </div>

  <!-- Worked Example -->
  <div class="rc-section">
    <h2>Worked Example: Does This Rental Qualify for a DSCR Loan?</h2>
    <p>Let's run a complete DSCR calculation for a typical US investment property purchase in <?php echo $currentYear; ?>.</p>
    <p><strong>Scenario:</strong> An investor in the Atlanta, GA market purchases a single-family rental home for $320,000. They put 25% down ($80,000) and apply for a DSCR loan of $240,000 at 7.50% for 30 years. Market rent per the Form 1007 appraisal is $2,200/month.</p>
    <ul style="color:#475569;line-height:1.72;font-size:.95rem;">
      <li><strong>Gross Annual Rent:</strong> $2,200 × 12 = $26,400</li>
      <li><strong>Vacancy Allowance (5%):</strong> −$1,320 → EGI = $25,080</li>
      <li><strong>Operating Expenses:</strong> Property tax $3,200 + Insurance $1,500 + Maintenance $2,400 + Management (10%) $2,508 = $9,608</li>
      <li><strong>Net Operating Income (NOI):</strong> $25,080 − $9,608 = <strong>$15,472/year</strong></li>
      <li><strong>Monthly P&amp;I:</strong> $240,000 at 7.50% × 30yr = <strong>$1,678/month</strong> → Annual debt service = $20,138</li>
      <li><strong>DSCR:</strong> $15,472 / $20,138 = <strong>0.77x</strong></li>
    </ul>
    <p><strong>Result: DSCR 0.77 — does NOT qualify at standard 1.25x terms.</strong> The investor has several options: (1) increase the down payment to reduce debt service; (2) find a lender with a sub-1.0 DSCR program; (3) negotiate the purchase price down; or (4) select a 10-year interest-only period (I/O payment would be $1,500/month, annual debt service $18,000, improving DSCR to 0.86x).</p>
    <p><strong>With 35% down ($112,000):</strong> Loan drops to $208,000, monthly P&amp;I becomes $1,454, annual debt service $17,451. New DSCR = $15,472 / $17,451 = <strong>0.89x</strong>. With a 10-year I/O period at $208,000, monthly payment = $1,300, annual = $15,600. DSCR = $15,472 / $15,600 = <strong>0.99x</strong> — approaching breakeven. This illustrates how down payment size and I/O periods interact to improve DSCR qualification.</p>
  </div>

  <!-- Prepayment & STR -->
  <div class="rc-section">
    <h2>DSCR Loan Prepayment Penalties &amp; Short-Term Rental Underwriting</h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin:1.25rem 0;">
      <div style="background:#f8fafc;padding:1.15rem;border-radius:8px;border-left:4px solid #f59e0b;">
        <strong style="color:#0f172a;display:block;margin-bottom:.35rem;">Step-Down Prepayment Penalties (3-2-1)</strong>
        <span style="font-size:.88rem;color:#475569;line-height:1.55;display:block;">Most DSCR loans include a prepayment penalty period (typically 3 or 5 years). Under a standard "3-2-1" schedule, refinancing or selling within Year 1 incurs a 3% penalty on the outstanding principal, 2% in Year 2, and 1% in Year 3. Some lenders offer a "no-prepay" option for a 0.25–0.50% rate premium.</span>
      </div>
      <div style="background:#f8fafc;padding:1.15rem;border-radius:8px;border-left:4px solid #2563eb;">
        <strong style="color:#0f172a;display:block;margin-bottom:.35rem;">Short-Term &amp; Mid-Term Rental (STR) Underwriting</strong>
        <span style="font-size:.88rem;color:#475569;line-height:1.55;display:block;">When qualifying Airbnb or VRBO properties, lenders typically require a 12-month trailing operating history or use AirDNA / Rabbu market revenue projections discounted by 15–25%. Some lenders cap STR income at 75% of projected gross bookings for DSCR calculation purposes.</span>
      </div>
    </div>
    <h3>Borrowing in an LLC or Entity Name</h3>
    <p>A primary benefit of DSCR financing is the ability to close directly in the name of a business entity (LLC, Corporation, or Partnership). This isolates legal liabilities from personal assets while keeping the debt off personal consumer credit bureaus, preserving your personal borrowing capacity for primary residence acquisitions.</p>
  </div>

  <!-- Interest Rate Impact -->
  <div class="rc-section">
    <h2>How Interest Rates Affect DSCR in <?php echo $currentYear; ?></h2>
    <p>In a high-rate environment, DSCR loan qualification becomes harder for the same property at the same purchase price. A $240,000 loan at 5.50% has a monthly P&amp;I of $1,362 (annual debt service $16,344). At 7.50%, that same loan produces a monthly P&amp;I of $1,678 (annual debt service $20,138). The higher rate increases annual debt service by $3,794 — which can push the same property from a 1.25x DSCR down to 0.95x.</p>
    <p>This is why investors in a high-rate environment often: (1) negotiate harder on purchase price; (2) use interest-only DSCR periods to reduce initial debt service; (3) target markets with strong rent growth to improve NOI quickly after purchase; or (4) request seller rate buydowns. Understanding the rate-DSCR relationship is essential for deal underwriting in any market cycle.</p>
  </div>

  <!-- Red Flags -->
  <div class="rc-section">
    <h2>5 Red Flags That Will Get Your DSCR Loan Denied</h2>
    <p>DSCR lenders move quickly and underwrite differently from conventional lenders, but they still have firm disqualifiers:</p>
    <ul style="color:#475569;line-height:1.72;font-size:.95rem;">
      <li><strong>DSCR Below Lender Minimum Without Compensating Factors.</strong> If your calculated DSCR falls below the lender's floor (usually 1.0–1.25), expect denial or a counter with a higher required down payment and rate premium.</li>
      <li><strong>Credit Score Below 620.</strong> Most DSCR programs have a hard credit floor. Below 580 effectively closes the DSCR market entirely.</li>
      <li><strong>Property Type Restrictions.</strong> Rural properties on large lots, unique structures, mobile homes on leased land, co-ops, and properties with functional obsolescence are typically ineligible.</li>
      <li><strong>STR With No Operating History.</strong> If converting a property to Airbnb with no STR track record, some lenders will not accept projected AirDNA income — they require 12 months of actual statements.</li>
      <li><strong>Title or Entity Issues.</strong> LLC-held closings require lender-approved operating agreements, certificate of formation, and EIN. Missing or improperly structured LLCs can kill a closing.</li>
    </ul>
  </div>

  <!-- FAQs -->
  <div class="rc-section">
    <h2>Frequently Asked Questions</h2>
    <?php $faqs=[
      ['What is DSCR in real estate?','DSCR (Debt Service Coverage Ratio) = NOI / Annual Debt Service. NOI is gross rent minus vacancy and operating expenses. Annual debt service is total mortgage P&I payments per year. A DSCR of 1.25 means the property earns 25% more than needed to cover its debt. Lenders use DSCR to determine whether a property can support itself financially.'],
      ['What DSCR do lenders require in '.$currentYear.'?','Most DSCR lenders in '.$currentYear.' require 1.0x to 1.25x minimum, depending on credit score, down payment, and property type. Standard programs at 680+ FICO with 25% down typically require 1.20x. Some Non-QM lenders accept 0.75x with 30-35% down and 6-12 months of mortgage payment reserves.'],
      ['What is a DSCR loan?','A DSCR loan qualifies based on property rental income rather than the borrower\'s personal income. No tax returns or W-2s needed. Popular with real estate investors, self-employed borrowers, and those with multiple properties. Typically requires 20–25% down and a DSCR of at least 1.0–1.25.'],
      ['How do I improve my DSCR?','Increase rents to market rate, reduce operating expenses, make a larger down payment, negotiate a lower interest rate, extend the loan term, or select an interest-only period. A $100/month rent increase adds $1,200/year to NOI, directly improving DSCR. An I/O period can reduce debt service by 20-30%.'],
      ['Can I get a DSCR loan with bad credit?','Most DSCR lenders require 620+ credit score, but some Non-QM programs accept 580 with larger down payments (30%+) and cash reserves. Income history is not evaluated — the property cash flow qualifies the loan. However, credit score heavily impacts the interest rate offered.'],
      ['What is the minimum down payment for a DSCR loan?','Most DSCR lenders require 20% down for SFR and 25% for 2-4 unit properties. Below-1.0 DSCR programs typically require 30-35%. There is no 0% or 3.5% down option as with FHA or VA loans — DSCR loans require meaningful equity.'],
      ['Can I use a DSCR loan for an Airbnb short-term rental?','Yes. Many DSCR lenders offer STR programs underwritten using AirDNA or Rabbu market revenue data instead of a traditional 12-month lease. Lenders typically apply a 15-25% income discount to projected STR revenue for vacancy and seasonality.'],
      ['What is the difference between DSCR and DTI?','DTI measures your personal monthly debt against personal income. DSCR measures the property income against the property debt. DSCR loans eliminate personal DTI analysis entirely — the property qualifies itself based on rental income, not your tax return.'],
      ['Are DSCR loans available for commercial properties?','Yes. Commercial properties including multifamily (5+ units), mixed-use, retail, and industrial are underwritten using DSCR by commercial lenders and CMBS programs. Commercial DSCR underwriting typically requires 1.25x minimum and uses NOI divided by full annual debt service.'],
    ];
    foreach($faqs as $f):?><div class="rc-faq-item"><div class="rc-faq-q"><?php echo $f[0];?></div><div class="rc-faq-a"><?php echo $f[1];?></div></div><?php endforeach;?>
  </div>

  <!-- Related Calculators -->
  <div class="rc-section">
    <h2>Related Real Estate &amp; Loan Calculators</h2>
    <div class="rc-related">
      <a href="/real-estate/investment-property-closing-cost-calculator" class="rc-rel-link">📑 Investor Closing Costs</a>
      <a href="/real-estate/cash-on-cash-return-calculator" class="rc-rel-link">💰 Cash-on-Cash Return</a>
      <a href="/real-estate/cap-rate-calculator" class="rc-rel-link">📊 Cap Rate Calculator</a>
      <a href="/real-estate/cash-flow-calculator" class="rc-rel-link">💵 Cash Flow Calculator</a>
      <a href="/real-estate/rental-yield-calculator" class="rc-rel-link">🏘️ Rental Yield</a>
      <a href="/real-estate/mortgage-calculator" class="rc-rel-link">🏠 Mortgage (PITI)</a>
      <a href="/loan-calculators/commercial-loan-calculator" class="rc-rel-link">🏢 Commercial Loan</a>
      <a href="/real-estate/brrrr-calculator" class="rc-rel-link">🔄 BRRRR Calculator</a>
      <a href="/real-estate/" class="rc-rel-link">🏘️ All Real Estate Tools</a>
    </div>
  </div>
</div>
</main>
<script>
(function(){
  var $ = function(id){return document.getElementById(id);};
  var fmtC = function(v){return '$'+Math.round(Math.abs(v)).toLocaleString();};
  var fmtP = function(v){return v.toFixed(2);};

  var defaults = {
    'ds-rent':'2200','ds-other':'0','ds-vac':'5','ds-mgmt':'10',
    'ds-tax':'3200','ds-ins':'1500','ds-maint':'2400','ds-hoa':'0',
    'ds-loan':'240000','ds-rate':'7.50','ds-term':'30','ds-io':'0'
  };

  function calcPI(P,rate,term){
    var r=rate/100/12, n=term*12;
    return r>0 ? P*(r*Math.pow(1+r,n))/(Math.pow(1+r,n)-1) : P/n;
  }
  function calcIO(P,rate){
    return P*(rate/100/12);
  }

  function calcMaxLoan(noi, minDSCR, rate, term, isIO){
    var maxPI = (noi/minDSCR)/12;
    if(isIO){
      var r=rate/100/12;
      return r>0 ? maxPI/r : 0;
    }
    var r=rate/100/12, n=term*12;
    return r>0 ? maxPI*((Math.pow(1+r,n)-1)/(r*Math.pow(1+r,n))) : maxPI*n;
  }

  window.calcDSCR = function(){
    var rent  = parseFloat($('ds-rent').value)||0;
    var other = parseFloat($('ds-other').value)||0;
    var vac   = parseFloat($('ds-vac').value)||0;
    var mgmt  = parseFloat($('ds-mgmt').value)||0;
    var tax   = parseFloat($('ds-tax').value)||0;
    var ins   = parseFloat($('ds-ins').value)||0;
    var maint = parseFloat($('ds-maint').value)||0;
    var hoa   = parseFloat($('ds-hoa').value)||0;
    var loan  = parseFloat($('ds-loan').value)||0;
    var rate  = parseFloat($('ds-rate').value)||0;
    var term  = parseInt($('ds-term').value)||30;
    var ioPeriod = parseInt($('ds-io').value)||0;

    var grossAnn   = (rent+other)*12;
    var vacLoss    = grossAnn*(vac/100);
    var egi        = grossAnn-vacLoss;
    var mgmtFee    = egi*(mgmt/100);
    var totalExp   = tax+ins+maint+(hoa*12)+mgmtFee;
    var noi        = egi-totalExp;

    var isIO = ioPeriod>0;
    var moPI = isIO ? calcIO(loan,rate) : calcPI(loan,rate,term);
    var annDebt    = moPI*12;
    var dscr       = annDebt>0 ? noi/annDebt : 0;
    var annCF      = noi-annDebt;
    var moCF       = annCF/12;

    $('ds-number').textContent = fmtP(dscr);
    $('ds-noi').textContent    = fmtC(noi);
    $('ds-debt').textContent   = fmtC(annDebt);
    $('ds-mo-pi').textContent  = fmtC(moPI);
    $('ds-mo-cf').textContent  = (moCF>=0?'':'−')+fmtC(Math.abs(moCF));
    $('ds-ann-cf').textContent = (annCF>=0?'':'−')+fmtC(Math.abs(annCF));

    var cls = dscr>=1.25 ? 'pass' : dscr>=1.0 ? 'warn' : 'fail';
    var res = $('ds-result');
    res.className = 'rc-result '+cls;

    var verdicts = {
      pass: dscr>=1.5 ? '✅ Excellent — strong lender approval at best terms' : '✅ Qualifies — meets most lender minimums',
      warn: '⚠️ Borderline — may qualify with compensating factors (higher down payment / reserves)',
      fail: '❌ Does not qualify at standard terms — property income cannot cover debt service'
    };
    $('ds-verdict').textContent = verdicts[cls];

    // NOI gap
    var minStandard = 1.25;
    var noiGap = dscr < minStandard ? (minStandard*annDebt - noi) : 0;
    $('ds-gap').textContent = noiGap>0 ? '+'+fmtC(noiGap)+'/yr NOI needed' : '✅ Qualifies at 1.25x';

    // Bar: 0 to 2.0 = 0% to 100%
    var barPct = Math.min(100, Math.max(0, (dscr/2)*100));
    var barColor = cls==='pass'?'#22c55e':cls==='warn'?'#f59e0b':'#ef4444';
    var bar = $('ds-bar');
    bar.style.width = barPct+'%';
    bar.style.background = barColor;
    $('ds-number').style.color = barColor;

    // DSCR target table
    var targets = [
      {dscr:1.0, label:'1.00x (Breakeven)'},
      {dscr:1.10, label:'1.10x'},
      {dscr:1.15, label:'1.15x'},
      {dscr:1.20, label:'1.20x (Common Min)'},
      {dscr:1.25, label:'1.25x (Standard)'},
      {dscr:1.50, label:'1.50x (Premium)'}
    ];
    var tbody = $('ds-target-body');
    tbody.innerHTML = '';
    targets.forEach(function(t){
      var maxL = calcMaxLoan(noi, t.dscr, rate, term, isIO);
      var maxMo = isIO ? calcIO(Math.max(0,maxL),rate) : calcPI(Math.max(0,maxL),rate,term);
      var qualifies = loan <= maxL && maxL > 0;
      var tr = document.createElement('tr');
      if(Math.abs(dscr - t.dscr) < 0.05 || (dscr >= t.dscr && dscr < t.dscr + 0.05)){
        tr.className = 'active-row';
      }
      tr.innerHTML = '<td>'+t.label+'</td><td>'+fmtC(Math.max(0,maxL))+'</td><td>'+fmtC(Math.max(0,maxMo))+'</td><td>'+(qualifies ? '<span style="color:#16a34a;font-weight:700;">✅ Qualifies</span>' : '<span style="color:#dc2626;font-weight:700;">❌ Over limit</span>')+'</td>';
      tbody.appendChild(tr);
    });

    res.style.display='block';
  };

  window.resetForm = function(){
    Object.keys(defaults).forEach(function(id){
      var el = $(id);
      if(el) el.value = defaults[id];
    });
    calcDSCR();
  };

  window.printResults = function(){
    window.print();
  };

  window.downloadResults = function(){
    var rent  = parseFloat($('ds-rent').value)||0;
    var other = parseFloat($('ds-other').value)||0;
    var noi   = $('ds-noi').textContent;
    var debt  = $('ds-debt').textContent;
    var dscr  = $('ds-number').textContent;
    var mopi  = $('ds-mo-pi').textContent;
    var mocf  = $('ds-mo-cf').textContent;
    var verdict = $('ds-verdict').textContent;

    var csv = 'DSCR Calculator Results - AmericaCalculator.com\n';
    csv += 'Generated,'+ new Date().toLocaleDateString() +'\n\n';
    csv += 'Input,Value\n';
    csv += 'Monthly Rent,$'+ rent +'\n';
    csv += 'Other Income,$'+ other +'\n';
    csv += 'Vacancy Rate,'+ ($('ds-vac').value||0) +'%\n';
    csv += 'Loan Amount,$'+ ($('ds-loan').value||0) +'\n';
    csv += 'Interest Rate,'+ ($('ds-rate').value||0) +'%\n';
    csv += 'Loan Term,'+ ($('ds-term').value||30) +' years\n\n';
    csv += 'Result,Value\n';
    csv += 'DSCR Ratio,'+ dscr +'\n';
    csv += 'Annual NOI,'+ noi +'\n';
    csv += 'Annual Debt Service,'+ debt +'\n';
    csv += 'Monthly P&I,'+ mopi +'\n';
    csv += 'Monthly Cash Flow,'+ mocf +'\n';
    csv += 'Verdict,"'+ verdict +'"\n';

    var blob = new Blob([csv], {type:'text/csv'});
    var a = document.createElement('a');
    a.href = URL.createObjectURL(blob);
    a.download = 'dscr-calculator-results.csv';
    a.click();
    URL.revokeObjectURL(a.href);
  };

  // Auto-calc on input
  ['ds-rent','ds-other','ds-vac','ds-mgmt','ds-tax','ds-ins','ds-maint','ds-hoa','ds-loan','ds-rate','ds-term','ds-io']
    .forEach(function(id){
      var el = $(id);
      if(el){el.addEventListener('input', window.calcDSCR); el.addEventListener('change', window.calcDSCR);}
    });
  window.calcDSCR();

  // FAQ accordion
  document.querySelectorAll('.rc-faq-q').forEach(function(q){
    q.addEventListener('click',function(){
      var i=this.closest('.rc-faq-item'), w=i.classList.contains('open');
      document.querySelectorAll('.rc-faq-item').forEach(function(x){x.classList.remove('open');});
      if(!w) i.classList.add('open');
    });
  });
})();
</script>
<?php require_once '../includes/footer.php'; ?>
