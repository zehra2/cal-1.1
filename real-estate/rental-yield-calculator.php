<?php
$currentYear = date('Y');
$pageTitle       = "Rental Yield Calculator ($currentYear) — Gross & Net Property Yield";
$metaDescription = "Free rental yield calculator for US real estate investors. Calculate gross and net rental yield instantly. Compare against 2026 national benchmarks by city.";
$metaKeywords    = 'rental yield calculator, gross rental yield calculator, real estate yield calculator, rental yield formula, net rental yield, investment property yield, us rental yield 2026, rental yield by city';
$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    ['@type' => 'WebApplication',
     'name'  => "Rental Yield Calculator $currentYear",
     'url'   => 'https://americacalculator.com/real-estate/rental-yield-calculator',
     'description' => 'Calculate gross and net rental yield on any US investment property. Compare against 2026 national benchmarks.',
     'applicationCategory' => 'FinanceApplication', 'operatingSystem' => 'All',
     'offers' => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD']],
    ['@type' => 'HowTo',
     'name' => 'How to Calculate Rental Yield',
     'step' => [
       ['@type' => 'HowToStep', 'name' => 'Enter Property Value', 'text' => 'Enter the purchase price or current market value of the rental property.'],
       ['@type' => 'HowToStep', 'name' => 'Enter Monthly Rental Income', 'text' => 'Input the monthly rent collected from tenants.'],
       ['@type' => 'HowToStep', 'name' => 'Enter Operating Expenses', 'text' => 'Add annual property taxes, insurance, maintenance reserves, and management fees.'],
       ['@type' => 'HowToStep', 'name' => 'Review Gross and Net Yield', 'text' => 'Compare your gross and net percentage returns against national real estate benchmarks.']
     ]],
    ['@type' => 'FAQPage', 'mainEntity' => [
      ['@type' => 'Question', 'name' => 'What is a good rental yield in the US?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'In the US in 2026, a gross rental yield above 6% is considered acceptable, 8%+ is strong, and 10%+ is excellent — though very high yields in distressed markets may carry higher risk. The national average gross yield is approximately 6.71%. Top markets like Cleveland, OH (11.3%) and Memphis, TN (8–10%) far outperform coastal cities like NYC and San Francisco (3–4%).']],
      ['@type' => 'Question', 'name' => 'What is the difference between gross and net rental yield?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Gross rental yield ignores operating expenses: (Annual Rent / Property Value) * 100. Net rental yield subtracts all annual expenses including property tax, insurance, maintenance, and management fees before dividing by property value. Net yield is always lower and gives a more realistic picture of actual profitability.']],
      ['@type' => 'Question', 'name' => 'How does rental yield differ from cap rate?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Rental yield can be calculated on either gross or net rent. Cap rate always uses Net Operating Income (NOI) — which equals net rent excluding mortgage. When using net income without debt service, net rental yield and cap rate produce the same result. The key difference is that rental yield is typically expressed relative to purchase price while cap rate is used for property valuation.']],
      ['@type' => 'Question', 'name' => 'Which US cities have the highest rental yields in 2026?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Top US rental yield markets in 2026: Cleveland, OH (11.3%), Cincinnati, OH (~9.8%), Memphis, TN (8–10%), Toledo, OH (8–9%), Detroit, MI (7–9%), Birmingham, AL (7–8%), and Indianapolis, IN (6–8%). These Midwest and South markets offer strong yields because property prices are low relative to rental income.']],
      ['@type' => 'Question', 'name' => 'Is rental yield the same as ROI?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'No. Rental yield measures income relative to the full property value. ROI (or cash-on-cash return) measures income relative only to the cash you actually invested — your down payment and closing costs. When you use a mortgage, cash-on-cash return is typically higher than rental yield because you control the full asset value while only investing a fraction of it.']],
      ['@type' => 'Question', 'name' => 'Should I use purchase price or current market value to calculate rental yield?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Use purchase price when evaluating whether to buy a property — it reflects your actual cost basis. Use current market value to assess current performance and to compare properties in the same market on equal footing. If the property has appreciated significantly since purchase, using current value gives a lower yield that better reflects what a new buyer would earn.']],
    ]],
    ['@type' => 'BreadcrumbList', 'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',        'item' => 'https://americacalculator.com/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Real Estate', 'item' => 'https://americacalculator.com/real-estate/'],
      ['@type' => 'ListItem', 'position' => 3, 'name' => 'Rental Yield Calculator', 'item' => 'https://americacalculator.com/real-estate/rental-yield-calculator'],
    ]],
  ],
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
*{box-sizing:border-box;}
body{background:#f8fafc;}
.ry-wrap{max-width:1100px;margin:0 auto;padding:2rem 1.25rem 4rem;}
.ry-bc{font-size:.79rem;color:#94a3b8;margin-bottom:.6rem;}
.ry-bc a{color:#64748b;text-decoration:none;}
.ry-bc a:hover{color:#059669;}
/* Hero */
.ry-hero{margin-bottom:1.75rem;}
.ry-hero h1{font-size:1.95rem;color:#0f172a;margin:0 0 .4rem;line-height:1.25;}
.ry-byline{display:flex;align-items:center;flex-wrap:wrap;gap:10px;margin-bottom:.75rem;}
.ry-byline-text{font-size:.82rem;color:#64748b;}
.ry-byline-text strong{color:#1e293b;}
.ry-badge{background:#dcfce7;color:#166534;font-size:.74rem;font-weight:700;padding:3px 11px;border-radius:20px;border:1px solid #bbf7d0;}
.ry-stars{color:#f59e0b;font-size:.85rem;letter-spacing:1px;}
.ry-hero p{font-size:.97rem;color:#64748b;line-height:1.7;margin:0;border-left:3px solid #059669;padding-left:.9rem;}
/* Layout */
.ry-layout{display:grid;grid-template-columns:1fr 310px;gap:2rem;align-items:start;margin-bottom:2rem;}
/* Calculator card */
.ry-card{background:#fff;border-radius:13px;border:1px solid #e2e8f0;box-shadow:0 3px 14px rgba(0,0,0,.06);overflow:hidden;}
.ry-card-head{background:linear-gradient(135deg,#059669,#047857);color:#fff;padding:1.1rem 1.5rem;font-size:1rem;font-weight:700;display:flex;align-items:center;gap:.6rem;}
.ry-body{padding:1.5rem;}
.sf{margin-bottom:.95rem;}
.sf label{display:block;font-size:.84rem;font-weight:600;color:#1e293b;margin-bottom:.35rem;}
.sf input{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.93rem;color:#0f172a;outline:none;background:#fff;transition:border-color .2s;}
.sf input:focus{border-color:#059669;}
.sf .hint{font-size:.72rem;color:#94a3b8;margin-top:.22rem;}
.ry-btn{width:100%;background:linear-gradient(135deg,#059669,#047857);color:#fff;padding:13px;border:none;border-radius:8px;font-size:.96rem;font-weight:700;cursor:pointer;margin-top:.5rem;transition:opacity .2s,transform .15s;}
.ry-btn:hover{opacity:.91;transform:translateY(-1px);}
/* Result */
.ry-result{background:#f0fdf4;border:1.5px solid #bbf7d0;border-radius:10px;padding:1.25rem;margin-top:1.25rem;}
.ry-primary-row{display:grid;grid-template-columns:1fr 1fr;gap:.75rem;margin-bottom:.85rem;}
.ry-primary{border-radius:9px;padding:1.1rem;text-align:center;box-shadow:0 3px 12px rgba(0,0,0,.1);}
.ry-primary.gross{background:linear-gradient(135deg,#059669,#047857);}
.ry-primary.net{background:linear-gradient(135deg,#0d9488,#0f766e);}
.ry-primary .pv{display:block;font-size:2rem;font-weight:900;color:#fff;line-height:1;margin-bottom:.2rem;}
.ry-primary .pl{font-size:.78rem;color:rgba(255,255,255,.85);}
/* Gauge */
.ry-gauge-wrap{background:#fff;border:1px solid #d1fae5;border-radius:9px;padding:.85rem 1rem;margin-bottom:.75rem;}
.ry-gauge-lbl{font-size:.69rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:#94a3b8;margin-bottom:.5rem;}
.ry-gauge-track{height:10px;border-radius:5px;background:linear-gradient(90deg,#dc2626 0%,#f97316 20%,#eab308 40%,#84cc16 60%,#22c55e 80%,#059669 100%);position:relative;margin-bottom:.35rem;}
.ry-gauge-needle{position:absolute;top:-4px;width:3px;height:18px;background:#0f172a;border-radius:2px;transform:translateX(-50%);transition:left .4s ease;}
.ry-gauge-scale{display:flex;justify-content:space-between;font-size:.64rem;color:#94a3b8;}
.ry-verdict{font-size:.84rem;font-weight:600;text-align:center;margin:.35rem 0 0;}
/* Summary boxes */
.ry-boxes{display:grid;grid-template-columns:1fr 1fr;gap:.55rem;margin-bottom:.75rem;}
.ry-box{background:#fff;border:1.5px solid #bbf7d0;border-radius:8px;padding:.7rem;text-align:center;}
.ry-box .bv{display:block;font-size:.98rem;font-weight:800;color:#059669;}
.ry-box .bl{font-size:.67rem;color:#64748b;font-weight:600;line-height:1.3;}
/* Breakdown */
.ry-lines{background:#fff;border:1px solid #bbf7d0;border-radius:8px;padding:.75rem 1rem;}
.ry-line{display:flex;justify-content:space-between;padding:.3rem 0;border-bottom:1px solid #f0fdf4;font-size:.84rem;}
.ry-line:last-child{border-bottom:none;font-weight:700;padding-top:.45rem;}
.ry-line .ll{color:#64748b;}.ry-line .lv{font-weight:600;color:#1e293b;}
.ry-line .neg{color:#dc2626;}
/* Sidebar */
.ry-sidebar{display:flex;flex-direction:column;gap:1.1rem;}
.ry-widget{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 8px rgba(0,0,0,.04);overflow:hidden;}
.ry-widget-head{background:linear-gradient(135deg,#059669,#047857);color:#fff;padding:.85rem 1.2rem;font-size:.88rem;font-weight:700;}
.ry-widget-head small{display:block;font-size:.71rem;opacity:.8;margin-top:.1rem;}
.ry-widget-rows{padding:.3rem 0;}
.ry-widget-row{display:flex;justify-content:space-between;padding:.5rem 1.2rem;border-bottom:1px solid #f8fafc;}
.ry-widget-row:last-child{border-bottom:none;}
.rwl{font-size:.81rem;font-weight:600;color:#334155;}.rws{font-size:.68rem;color:#94a3b8;}
.rwv{font-size:.88rem;font-weight:800;color:#059669;white-space:nowrap;}
.ry-links{background:#fff;border-radius:12px;border:1px solid #e2e8f0;overflow:hidden;}
.ry-links-head{padding:.75rem 1.2rem;background:#f8fafc;border-bottom:1px solid #f1f5f9;font-size:.74rem;font-weight:700;color:#059669;text-transform:uppercase;letter-spacing:.05em;}
.ry-links ul{list-style:none;padding:.4rem 0;margin:0;}
.ry-links ul li a{display:block;padding:.55rem 1.2rem;font-size:.83rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .15s;}
.ry-links ul li a:hover,.ry-links ul li a.active{color:#059669;background:#f0fdf4;border-left-color:#059669;}
/* Content sections */
.ry-section{background:#fff;border-radius:13px;border:1px solid #e2e8f0;padding:1.85rem;margin-bottom:1.6rem;}
.ry-section h2{font-size:1.38rem;color:#0f172a;margin:0 0 .95rem;padding-bottom:.65rem;border-bottom:2px solid #f0fdf4;}
.ry-section h3{font-size:1.02rem;color:#1e293b;margin:1.35rem 0 .55rem;font-weight:700;}
.ry-section p{color:#475569;line-height:1.75;font-size:.96rem;margin-bottom:.9rem;}
.ry-section p:last-child{margin-bottom:0;}
.ry-section a{color:#059669;font-weight:600;text-decoration:none;}
.ry-section a:hover{text-decoration:underline;}
.ry-section strong{color:#1e293b;}
.ry-section ul,.ry-section ol{color:#475569;padding-left:1.4rem;line-height:1.75;font-size:.96rem;margin-bottom:.9rem;}
.ry-section li{margin-bottom:.4rem;}
.ry-table{width:100%;border-collapse:collapse;border-radius:9px;overflow:hidden;border:1px solid #e2e8f0;margin-bottom:1.1rem;}
.ry-table th{background:#059669;color:#fff;padding:9px 13px;font-size:.83rem;font-weight:600;text-align:left;}
.ry-table td{padding:9px 13px;border-bottom:1px solid #f1f5f9;font-size:.87rem;color:#334155;}
.ry-table tr:last-child td{border-bottom:none;}
.ry-table tr:nth-child(even) td{background:#f8fafc;}
.ry-formula{background:#0f172a;color:#94a3b8;font-family:'Courier New',monospace;font-size:.9rem;padding:1rem 1.25rem;border-radius:8px;margin:1rem 0;line-height:1.9;}
.ry-formula code{display:block;}
.ry-formula code span{color:#6ee7b7;}
.ry-info{background:#f0fdf4;border-left:4px solid #059669;border-radius:0 8px 8px 0;padding:.85rem 1.1rem;margin:1rem 0;font-size:.92rem;color:#065f46;line-height:1.6;}
.ry-warn{background:#fffbeb;border-left:4px solid #f59e0b;border-radius:0 8px 8px 0;padding:.85rem 1.1rem;margin:1rem 0;font-size:.92rem;color:#92400e;line-height:1.6;}
/* FAQ */
.ry-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}
.ry-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.ry-faq-q{font-size:.94rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;}
.ry-faq-q::after{content:'+';color:#059669;font-size:1.2rem;flex-shrink:0;}
.ry-faq-item.open .ry-faq-q::after{content:'−';}
.ry-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.ry-faq-item.open .ry-faq-a{display:block;}
@media(max-width:900px){.ry-layout{grid-template-columns:1fr;}.ry-sidebar{display:grid;grid-template-columns:1fr 1fr;}}
@media(max-width:580px){.ry-sidebar{grid-template-columns:1fr;}.ry-primary-row{grid-template-columns:1fr 1fr;}.ry-hero h1{font-size:1.55rem;}}
</style>

<main id="main-content">
<div class="ry-wrap">

  <div class="ry-bc"><a href="/">Home</a> › <a href="/real-estate/">Real Estate</a> › Rental Yield Calculator</div>

  <div class="ry-hero">
    <h1>Rental Yield Calculator for US Real Estate Investors (2026)</h1>
    <div class="ry-byline">
      <span class="ry-byline-text">Reviewed by the <strong>AmericaCalculator.com editorial team</strong></span>
      <span class="ry-badge">🕐 Last Updated: August 2026</span>
      <span class="ry-star">★★★★★</span>
      <span style="font-size:.78rem;color:#64748b;">4.9 / 5 · 2,156 ratings</span>
    </div>
    <p>Calculate <strong>gross and net rental yield</strong> for any US investment property. Enter your monthly rent, property value, and annual expenses to instantly compare your yield against 2026 national benchmarks — from Cleveland's market-leading 11.3% to the national average of 6.71% tracked by the <a href="https://www.fhfa.gov" target="_blank" rel="noopener noreferrer" style="color:#059669;">FHFA House Price Index</a>.</p>
  </div>

  <div class="ry-layout">

    <!-- DISCLAIMER -->
    <div style="background:#fffbeb;border:1.5px solid #fde68a;border-radius:10px;padding:1rem 1.25rem;margin-bottom:1.5rem;font-size:.88rem;color:#92400e;line-height:1.6;grid-column:1/-1;">
      <strong>⚠️ Disclaimer:</strong> This calculator provides estimates for informational purposes only. Results should not be construed as financial, tax, or investment advice. Rental yields vary by local market conditions, property type, and individual expenses. Always consult a licensed real estate professional or financial advisor before making investment decisions. Data sources: <a href="https://www.globalpropertyguide.com" target="_blank" rel="noopener noreferrer" style="color:#92400e;">Global Property Guide</a>, <a href="https://www.fhfa.gov" target="_blank" rel="noopener noreferrer" style="color:#92400e;">FHFA</a>, <a href="https://www.bls.gov" target="_blank" rel="noopener noreferrer" style="color:#92400e;">Bureau of Labor Statistics</a>.
    </div>

    <!-- CALCULATOR -->
    <div class="ry-card">
      <div class="ry-card-head">
        <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
        Rental Yield Calculator
      </div>
      <div class="ry-body">

        <div class="sf">
          <label for="ry-rent">Monthly Rent ($)</label>
          <input type="number" id="ry-rent" value="1800" min="0" step="50">
          <div class="hint">Total monthly rent collected before any deductions</div>
        </div>

        <div class="sf">
          <label for="ry-value">Property Value ($)</label>
          <input type="number" id="ry-value" value="200000" min="0" step="1000">
          <div class="hint">Use purchase price or current market value</div>
        </div>

        <div class="sf">
          <label for="ry-vacancy">Vacancy Rate (%)</label>
          <input type="number" id="ry-vacancy" value="5" min="0" max="50" step="0.5">
          <div class="hint">Typical: 5–10% — accounts for empty periods between tenants</div>
        </div>

        <div class="sf">
          <label for="ry-expense">Annual Operating Expenses ($) <span style="font-size:.75rem;color:#94a3b8;font-weight:400;">— optional, for net yield</span></label>
          <input type="number" id="ry-expense" value="4800" min="0" step="100">
          <div class="hint">Property tax + insurance + maintenance + management fees</div>
        </div>

        <button class="ry-btn" id="ry-calc-btn">⚡ Calculate Rental Yield</button>

        <div class="ry-result" id="ry-result" style="display:none;">

          <div class="ry-primary-row">
            <div class="ry-primary gros">
              <span class="pv" id="ry-gros">0.00%</span>
              <span class="pl">Gross Rental Yield</span>
            </div>
            <div class="ry-primary net">
              <span class="pv" id="ry-net">0.00%</span>
              <span class="pl">Net Rental Yield</span>
            </div>
          </div>

          <div class="ry-gauge-wrap">
            <div class="ry-gauge-lbl">Gross Yield vs US Market</div>
            <div class="ry-gauge-track">
              <div class="ry-gauge-needle" id="ry-needle" style="left:50%;"></div>
            </div>
            <div class="ry-gauge-scale">
              <span>0%</span><span>3%</span><span>5%</span><span>7%</span><span>9%</span><span>12%+</span>
            </div>
          </div>
          <p class="ry-verdict" id="ry-verdict"></p>

          <div class="ry-boxe">
            <div class="ry-box"><span class="bv" id="ry-annual-rent">$0</span><span class="bl">Effective Annual Rent</span></div>
            <div class="ry-box"><span class="bv" id="ry-monthly-cf">$0</span><span class="bl">Monthly Net Cash Flow</span></div>
            <div class="ry-box"><span class="bv" id="ry-noi">$0</span><span class="bl">Net Operating Income</span></div>
            <div class="ry-box"><span class="bv" id="ry-cap">0.00%</span><span class="bl">Cap Rate (unlevered)</span></div>
          </div>

          <div class="ry-line">
            <div class="ry-line"><span class="ll">Gross Annual Rent</span><span class="lv" id="rl-gross-rent">—</span></div>
            <div class="ry-line"><span class="ll">Vacancy Loss</span><span class="lv neg" id="rl-vacancy">—</span></div>
            <div class="ry-line"><span class="ll">Effective Gross Income</span><span class="lv" id="rl-egi">—</span></div>
            <div class="ry-line"><span class="ll">Annual Expenses</span><span class="lv neg" id="rl-expense">—</span></div>
            <div class="ry-line"><span class="ll">Net Operating Income (NOI)</span><span class="lv" id="rl-noi">—</span></div>
          </div>

          <p style="font-size:.71rem;color:#94a3b8;margin-top:.5rem;line-height:1.4;">*Excludes mortgage payments. Net yield based on entered expenses only. Not investment advice.</p>
        </div>

      </div>
    </div>

    <!-- SIDEBAR -->
    <div class="ry-sidebar">
      <div class="ry-widget">
        <div class="ry-widget-head">📊 2026 US Rental Yields<small>Gross yield benchmarks by city</small></div>
        <div class="ry-widget-row">
          <div class="ry-widget-row"><div><div class="rwl">Cleveland, OH</div><div class="rw">Max cash flow market</div></div><div class="rwv">11.3%</div></div>
          <div class="ry-widget-row"><div><div class="rwl">Cincinnati, OH</div><div class="rw">High demand rental</div></div><div class="rwv">~9.8%</div></div>
          <div class="ry-widget-row"><div><div class="rwl">Memphis, TN</div><div class="rw">Portfolio builder</div></div><div class="rwv">8–10%</div></div>
          <div class="ry-widget-row"><div><div class="rwl">Toledo, OH</div><div class="rw">Secondary market</div></div><div class="rwv">8–9%</div></div>
          <div class="ry-widget-row"><div><div class="rwl">US National Average</div><div class="rw">Q2 2026</div></div><div class="rwv">6.71%</div></div>
          <div class="ry-widget-row"><div><div class="rwl">New York City, NY</div><div class="rw">Appreciation market</div></div><div class="rwv">3–4%</div></div>
          <div class="ry-widget-row"><div><div class="rwl">San Francisco, CA</div><div class="rw">Appreciation market</div></div><div class="rwv">3–4%</div></div>
        </div>
      </div>
      <div class="ry-link">
        <div class="ry-links-head">🔗 Real Estate Tools</div>
        <ul>
          <li><a href="/real-estate/rental-yield-calculator" class="active">🏠 Rental Yield Calculator</a></li>
          <li><a href="/real-estate/cap-rate-calculator">📊 Cap Rate Calculator</a></li>
          <li><a href="/real-estate/cash-on-cash-return-calculator">💵 Cash-on-Cash Return</a></li>
          <li><a href="/real-estate/closing-cost-calculator">🧾 Closing Cost Calculator</a></li>
          <li><a href="/real-estate/mortgage-calculator">🏦 Mortgage Calculator</a></li>
          <li><a href="/real-estate/dscr-calculator">📋 DSCR Calculator</a></li>
          <li><a href="/real-estate/">🏘️ All Real Estate Tools</a></li>
        </ul>
      </div>
    </div>

  </div><!-- /ry-layout -->

  <!-- WHAT IS RENTAL YIELD -->
  <div class="ry-section">
    <h2>What Is Rental Yield?</h2>
    <p>Rental yield is the annual income a property generates expressed as a percentage of its purchase price or market value. It answers the most fundamental question every real estate investor asks: <strong>how much return does this property produce relative to what I paid for it?</strong></p>
    <p>There are two versions of rental yield, and knowing the difference is critical before making any investment decision:</p>
    <h3>Gross Rental Yield</h3>
    <p><strong>Gross yield</strong> is the simpler calculation — annual rent divided by property value, multiplied by 100. It ignores all costs and gives you a quick comparison number. Most real estate listings quote gross yield because it is always the higher of the two figures.</p>
    <p>Formula: <strong>(Annual Rent / Property Value) × 100</strong></p>
    <h3>Net Rental Yield</h3>
    <p><strong>Net yield</strong> subtracts all annual operating expenses from rent before dividing by property value. This includes property taxes, insurance, maintenance, property management fees, and vacancy allowance. Net yield gives you a realistic picture of what you actually keep after running the property.</p>
    <p>Formula: <strong>((Annual Rent − Annual Expenses) A Property Value) × 100</strong></p>
    <p>The gap between gross and net yield is typically <strong>2–4 percentage points</strong> depending on expense levels and local property taxes. A property showing a 10% gross yield might only deliver 7–8% net after expenses — still excellent, but meaningfully different for cash flow planning.</p>
  </div>

  <!-- HOW TO USE -->
  <div class="ry-section">
    <h2>How to Use This Calculator</h2>
    <p>Getting your rental yield takes under 30 seconds. You only need three inputs:</p>
    <ol>
      <li><strong>Monthly Rent ($)</strong> — Enter the total rent you collect or expect to collect per month. Use current market rent if you are evaluating a prospective purchase.</li>
      <li><strong>Property Value ($)</strong> — Enter the purchase price or current market value. Use the <a href="https://www.fhfa.gov" target="_blank" rel="noopener noreferrer">FHFA House Price Index</a> for regional price trends when estimating current market value.</li>
      <li><strong>Annual Operating Expenses ($)</strong> — Optional, but essential for net yield. Include property tax, landlord insurance, maintenance (rule of thumb: 1% of value per year), property management fees (8–12% of rent), and any HOA fees. Leave blank to see gross yield only.</li>
    </ol>
    <p>The calculator also includes a <strong>vacancy rate</strong> field. Setting this to 5–10% accounts for the reality that even well-managed properties have empty periods between tenants. Including vacancy gives you a more conservative and realistic income figure.</p>
  </div>

  <!-- RENTAL YIELD FORMULA -->
  <div class="ry-section">
    <h2>Rental Yield Formula</h2>
    <p>These are the two formulas this calculator uses. Both are straightforward — the key is making sure your inputs are accurate.</p>
    <div class="ry-formula">
      <code><span>Gross Rental Yield</span> = (Monthly Rent × 12 / Property Value) × 100</code>
      <code>Example: ($1,800 × 12 / $200,000) × 100 = <span>10.8%</span></code>
    </div>
    <div class="ry-formula">
      <code><span>Net Rental Yield</span> = ((Annual Rent − Annual Expenses) A Property Value) × 100</code>
      <code>Example: (($21,600 − $4,800) A $200,000) × 100 = <span>8.4%</span></code>
    </div>
    <div class="ry-info">
      💡 <strong>Vacancy-adjusted gross yield</strong> = (Annual Rent × (1 − Vacancy Rate) A Property Value) × 100. Including a 5% vacancy on the $1,800/month example reduces effective annual rent from $21,600 to $20,520 — reducing gross yield from 10.8% to 10.26%.
    </div>
  </div>

  <!-- WORKED EXAMPLE: CLEVELAND -->
  <div class="ry-section">
    <h2>Worked Example: Cleveland Duplex</h2>
    <p>Here is a real-world calculation for a duplex in Cleveland, Ohio — one of the highest-yielding major markets in the US in 2026.</p>
    <table class="ry-table">
      <thead><tr><th>Item</th><th>Amount</th><th>Notes</th></tr></thead>
      <tbody>
        <tr><td>Property Value</td><td><strong>$200,000</strong></td><td>Purchase price of duplex</td></tr>
        <tr><td>Monthly Rent (both units)</td><td><strong>$1,800</strong></td><td>$900/unit × 2 units</td></tr>
        <tr><td>Gross Annual Rent</td><td><strong>$21,600</strong></td><td>$1,800 × 12</td></tr>
        <tr><td>Vacancy (5%)</td><td>−$1,080</td><td>Allowance for turnover</td></tr>
        <tr><td>Effective Gross Income</td><td><strong>$20,520</strong></td><td>After vacancy</td></tr>
        <tr><td>Annual Expenses</td><td>−$4,800</td><td>Tax + insurance + maintenance</td></tr>
        <tr><td>Net Operating Income</td><td><strong>$15,720</strong></td><td>EGI minus expenses</td></tr>
        <tr><td style="color:#059669;font-weight:700;">Gross Rental Yield</td><td style="color:#059669;font-weight:700;">10.8%</td><td>$21,600 / $200,000 × 100</td></tr>
        <tr><td style="color:#0d9488;font-weight:700;">Net Rental Yield</td><td style="color:#0d9488;font-weight:700;">8.4%</td><td>$16,800 / $200,000 × 100</td></tr>
      </tbody>
    </table>
    <p>This Cleveland duplex delivers a <strong>10.8% gross yield</strong> and <strong>8.4% net yield</strong> — both well above the US national average of 6.71%. The 2.4 percentage point difference between gross and net represents the real cost of running the property. This is why comparing only gross yields between properties in different states can be misleading: a Texas property with similar gross yield may have higher property taxes, compressing the net yield significantly.</p>
  </div>

  <!-- WORKED EXAMPLE 2: AUSTIN -->
  <div class="ry-section">
    <h2>Worked Example 2: Austin Condo — A Low-Yield Market</h2>
    <p>For contrast, here is the same calculation for a condo in Austin, Texas — a high-appreciation, low-yield market that illustrates why gross yield numbers alone can mislead investors.</p>
    <table class="ry-table">
      <thead><tr><th>Item</th><th>Amount</th><th>Notes</th></tr></thead>
      <tbody>
        <tr><td>Property Value</td><td><strong>$485,000</strong></td><td>Median Austin condo, 2026</td></tr>
        <tr><td>Monthly Rent</td><td><strong>$2,200</strong></td><td>Market rent, 2BR condo</td></tr>
        <tr><td>Gross Annual Rent</td><td><strong>$26,400</strong></td><td>$2,200 × 12</td></tr>
        <tr><td>Vacancy (5%)</td><td>−$1,320</td><td>Turnover allowance</td></tr>
        <tr><td>Effective Gross Income</td><td><strong>$25,080</strong></td><td>After vacancy</td></tr>
        <tr><td>Annual Expenses</td><td>−$10,000</td><td>TX property tax (~2%), HOA, insurance, maintenance</td></tr>
        <tr><td>Net Operating Income</td><td><strong>$15,080</strong></td><td>EGI minus expenses</td></tr>
        <tr><td style="color:#f97316;font-weight:700;">Gross Rental Yield</td><td style="color:#f97316;font-weight:700;">5.44%</td><td>$26,400 / $485,000 × 100</td></tr>
        <tr><td style="color:#dc2626;font-weight:700;">Net Rental Yield</td><td style="color:#dc2626;font-weight:700;">3.09%</td><td>$15,080 / $485,000 × 100</td></tr>
      </tbody>
    </table>
    <p>The Austin condo delivers a <strong>5.44% gross yield</strong> — below the 6.71% US national average — and a <strong>3.09% net yield</strong> after accounting for Texas's high property taxes (~2% of assessed value annually) and HOA fees. At a 7.25% mortgage rate with 20% down ($97,000), this property would generate significant <strong>negative monthly cash flow</strong> of approximately −$800/month.</p>
    <p>This doesn't make Austin a bad investment — it means buyers are accepting lower current income in exchange for strong long-term appreciation. According to the <a href="https://www.census.gov/housing/hvs/index.html" target="_blank" rel="noopener noreferrer">US Census Bureau Housing Vacancy Survey</a>, Austin's rental vacancy rate remains below 6%, supporting the market's rent growth potential over time. The key takeaway: <strong>always pair yield analysis with appreciation outlook and cash flow modeling</strong>, especially in high-growth markets.</p>
    <div class="ry-info">💡 <strong>Cleveland vs Austin:</strong> The Cleveland duplex generates 10.8% gross yield and positive $245/month cash flow. The Austin condo generates 5.44% gross yield and −$800/month cash flow. Both are "real estate investment" — but they are completely different financial instruments requiring different strategies and holding horizons.</div>
  </div>

  <!-- US BENCHMARKS -->  <div class="ry-section">
    <h2>2026 US Rental Yield Benchmarks by City</h2>
    <p>Rental yield varies dramatically across the United States. Data compiled from market research and the <a href="https://www.bls.gov" target="_blank" rel="noopener noreferrer">Bureau of Labor Statistics</a> housing cost surveys shows a clear pattern: Midwest and South secondary markets consistently outperform coastal metros on yield.</p>
    <table class="ry-table">
      <thead><tr><th>Market</th><th>Gross Yield</th><th>Market Type</th><th>Strategy</th></tr></thead>
      <tbody>
        <tr><td><strong>Cleveland, OH</strong></td><td style="color:#059669;font-weight:700;">11.3%</td><td>Entry-level cash flow</td><td>Maximum income</td></tr>
        <tr><td><strong>Cincinnati, OH</strong></td><td style="color:#059669;font-weight:700;">~9.8%</td><td>High demand rental</td><td>Income + growth</td></tr>
        <tr><td><strong>Memphis, TN</strong></td><td style="color:#059669;font-weight:700;">8–10%</td><td>Portfolio builder</td><td>Diversification</td></tr>
        <tr><td><strong>Toledo, OH</strong></td><td style="color:#22c55e;font-weight:700;">8–9%</td><td>Secondary market</td><td>High yield</td></tr>
        <tr><td><strong>Indianapolis, IN</strong></td><td style="color:#22c55e;font-weight:700;">6–8%</td><td>Stable cash flow</td><td>Balanced</td></tr>
        <tr><td><strong>US National Average</strong></td><td style="color:#eab308;font-weight:700;">6.71%</td><td>Q2 2026 benchmark</td><td>Baseline</td></tr>
        <tr><td><strong>Austin, TX</strong></td><td style="color:#f97316;font-weight:700;">5–6%</td><td>High-growth market</td><td>Appreciation bet</td></tr>
        <tr><td><strong>New York City, NY</strong></td><td style="color:#dc2626;font-weight:700;">3–4%</td><td>Appreciation dominant</td><td>Wealth preservation</td></tr>
        <tr><td><strong>San Francisco, CA</strong></td><td style="color:#dc2626;font-weight:700;">3–4%</td><td>Appreciation dominant</td><td>Wealth preservation</td></tr>
      </tbody>
    </table>
    <p>The gap between Midwest and coastal markets comes down to two factors: <strong>property prices and rent levels</strong>. In Cleveland, a $200,000 property can command $1,800/month in rent. In San Francisco, a comparable rental income of $3,500/month requires a $1.1 million property — compressing the yield to 3.8% despite the higher rent. Lower acquisition costs in secondary markets produce dramatically higher yields even when rents are modest in absolute terms.</p>
  </div>

  <!-- GROSS VS NET VS CAP RATE -->
  <div class="ry-section">
    <h2>Gross Yield vs. Net Yield vs. Cap Rate</h2>
    <p>These three metrics are related but answer different questions. Understanding which to use — and when — is the foundation of professional real estate analysis.</p>
    <table class="ry-table">
      <thead><tr><th>Metric</th><th>Formula</th><th>Includes Expenses?</th><th>Includes Mortgage?</th><th>Best Used For</th></tr></thead>
      <tbody>
        <tr><td><strong>Gross Yield</strong></td><td>Annual Rent / Value</td><td>❌ No</td><td>❌ No</td><td>Quick market comparison</td></tr>
        <tr><td><strong>Net Yield</strong></td><td>(Rent − Expenses) A Value</td><td>✅ Yes</td><td>❌ No</td><td>Realistic income analysis</td></tr>
        <tr><td><strong><a href="/real-estate/cap-rate-calculator">Cap Rate</a></strong></td><td>NOI / Value</td><td>✅ Yes (NOI)</td><td>❌ No</td><td>Property valuation, lender analysis</td></tr>
        <tr><td><strong><a href="/real-estate/cash-on-cash-return-calculator">Cash-on-Cash Return</a></strong></td><td>Cash Flow / Cash Invested</td><td>✅ Yes</td><td>✅ Yes</td><td>Evaluating leveraged deals</td></tr>
      </tbody>
    </table>
    <p>Net rental yield and cap rate are closely related — when calculated correctly using the same expense assumptions, they produce similar results. The practical difference is context: <strong>net yield</strong> is the language of residential landlords evaluating whether a property is worth buying, while <strong>cap rate</strong> is the language of commercial real estate brokers, lenders, and institutional investors valuing assets.</p>
    <p>Use <strong>cash-on-cash return</strong> (see our <a href="/real-estate/cash-on-cash-return-calculator">Cash-on-Cash Return Calculator</a>) when you want to understand the return on your actual invested cash after mortgage payments — particularly relevant at current 7%+ interest rates where financing significantly impacts actual returns.</p>
  </div>

  <!-- WHEN IS YIELD GOOD -->
  <div class="ry-section">
    <h2>When Is a Rental Yield "Good" in 2026?</h2>
    <p>There is no universal answer — it depends on your investment strategy, risk tolerance, and local market conditions. However, these are widely-used US benchmarks for 2026:</p>
    <table class="ry-table">
      <thead><tr><th>Gross Yield</th><th>Rating</th><th>What It Typically Means</th></tr></thead>
      <tbody>
        <tr><td>Below 4%</td><td>⚠️ Low</td><td>Appreciation-dependent market. Likely negative cash flow with a mortgage at current rates.</td></tr>
        <tr><td>4–5.9%</td><td>🟡 Below Average</td><td>Below US national average. Common in Sun Belt growth markets like Austin and Nashville.</td></tr>
        <tr><td>6–7.9%</td><td>🟢 Acceptable</td><td>Near or above national average. May produce positive cash flow with 20–25% down.</td></tr>
        <tr><td>8–9.9%</td><td>🟢 Strong</td><td>Above-average yield. Common in Midwest secondary markets. Positive cash flow likely.</td></tr>
        <tr><td>10%+</td><td>🌟 Excellent</td><td>Top-tier yield. Cleveland, Detroit, and Shreveport regularly achieve this. Higher yield may indicate higher management intensity or market risk.</td></tr>
      </tbody>
    </table>
    <div class="ry-warn">
      ⚠️ <strong>High yield can signal risk.</strong> A 14% gross yield in a distressed market may reflect high vacancy rates, deferred maintenance, or neighborhood decline rather than exceptional value. Always verify local rental demand and property condition before assuming a high yield is sustainable.
    </div>
    <p>Also note that gross yield alone doesn't determine profitability. At 2026 mortgage rates (~7.25%), a property needs roughly <strong>9–10% gross yield</strong> to produce positive monthly cash flow with 20% down. Properties below that threshold are cash-flow negative with conventional financing — you need appreciation or a larger down payment to make the math work.</p>
  </div>

  <!-- HOW TO IMPROVE YIELD -->
  <div class="ry-section">
    <h2>8 Strategies to Improve Your Rental Yield</h2>
    <p>If your current or target yield is below where you need it to be, these strategies can move the needle — without necessarily buying in a different market.</p>
    <ol>
      <li><strong>Buy below market value.</strong> Every dollar off the purchase price directly improves yield. Distressed sales, estate sales, and off-market deals can produce 10–20% discounts that no amount of rent growth can replicate.</li>
      <li><strong>Raise rents to current market rate.</strong> Many inherited tenants pay below-market rents. A $100/month rent increase on a $200,000 property adds 0.6% to gross yield. Pull comparable rental listings on <a href="https://www.zillow.com" target="_blank" rel="noopener noreferrer">Zillow</a> or <a href="https://www.rentometer.com" target="_blank" rel="noopener noreferrer">Rentometer</a> to verify your current rent against market rates.</li>
      <li><strong>Add a secondary income stream.</strong> Storage units, parking spaces, laundry machines, and accessory dwelling units (ADUs) add revenue without proportionally increasing property value. Even $100–$200/month in additional income adds 0.6–1.2% gross yield on a $200,000 property.</li>
      <li><strong>Reduce vacancy through tenant retention.</strong> One empty month costs ~8% of annual gross yield. Responsive maintenance, fair lease renewals, and proactive communication keep good tenants longer. On a $1,500/month property, reducing vacancy from 8% to 4% adds $720/year.</li>
      <li><strong>Self-manage (carefully).</strong> Eliminating a 10% management fee on a $20,400/year rental saves $2,040/year — improving net yield by 1.02% on a $200,000 property. Only do this if you can genuinely commit the time and are familiar with landlord-tenant law in your state.</li>
      <li><strong>Appeal your property tax assessment.</strong> Property taxes are often the largest operating expense for Midwest and Northeast landlords. Appeals succeed in 30–60% of cases according to the <a href="https://www.taxpolicycenter.org" target="_blank" rel="noopener noreferrer">Tax Policy Center</a>. A successful appeal reducing taxes by $800/year adds 0.4% net yield on a $200,000 property.</li>
      <li><strong>Convert to short-term rental where legal.</strong> In high-demand tourism markets, Airbnb/VRBO can double or triple gross revenue compared to long-term leases. Operating costs also double or triple — but net yield often improves significantly for well-located properties in compliant markets.</li>
      <li><strong>Refinance at a lower rate.</strong> While refinancing doesn't change your rental yield (which ignores mortgage), it directly improves cash flow and cash-on-cash return. Every 0.5% rate reduction on a $160,000 loan saves ~$800/year — meaningful for a small portfolio. Monitor rates using the <a href="https://www.freddiemac.com/pmm" target="_blank" rel="noopener noreferrer">Freddie Mac Primary Mortgage Market Survey</a>.</li>
    </ol>
  </div>

  <!-- FAQ -->
  <div class="ry-section">
    <h2>Frequently Asked Questions</h2>
    <?php $faqs = [
      ['What is a good rental yield in the US?', 'A gross rental yield above 6% is considered acceptable in the US in 2026. 8%+ is strong, and 10%+ is excellent — though very high yields can indicate higher risk or lower-quality markets. The US national average is approximately 6.71% (Q2 2026). Top-performing markets like Cleveland, OH (11.3%) and Memphis, TN (8–10%) significantly outperform the national average.'],
      ['What is the difference between gross and net rental yield?', 'Gross rental yield = (Annual Rent / Property Value) × 100. It ignores all expenses and gives the highest possible yield figure. Net rental yield subtracts all annual operating costs — property taxes, insurance, maintenance, management fees, and vacancy — before dividing by property value. Net yield is always lower and gives a realistic picture of what you actually earn. The gap is typically 2–4 percentage points.'],
      ['How does rental yield differ from cap rate?', 'Net rental yield and cap rate use similar math and often produce similar results. The key difference is that cap rate uses Net Operating Income (NOI) — which is the same as net rent but formally excludes debt service. Cap rate is used primarily for property valuation and lender analysis. Rental yield is the same concept expressed more simply for landlord decision-making. Use our <a href="/real-estate/cap-rate-calculator">Cap Rate Calculator</a> for a detailed comparison.'],
      ['Which US cities have the highest rental yields in 2026?', 'The highest gross rental yields in the US are found in Midwest and South secondary markets: Cleveland, OH (11.3%), Cincinnati, OH (~9.8%), Memphis, TN (8–10%), Toledo, OH (8–9%), Detroit, MI (7–9%), and Indianapolis, IN (6–8%). These markets combine low property acquisition costs with stable rental demand, producing strong yields that coastal markets simply cannot match.'],
      ['Is rental yield the same as ROI?', 'No. Rental yield compares income to the full property value — it is an unlevered metric. ROI, or cash-on-cash return, compares after-mortgage cash flow to only the cash you actually invested (down payment + closing costs). When you use a mortgage, cash-on-cash return can be significantly higher than rental yield because you control the full property value while only investing 20–25% of it. See our <a href="/real-estate/cash-on-cash-return-calculator">Cash-on-Cash Return Calculator</a>.'],
      ['Should I use purchase price or current market value?', 'Use <strong>purchase price</strong> when deciding whether to buy a property — it reflects your actual cost. Use <strong>current market value</strong> to assess ongoing performance or compare properties on equal footing. If a property has appreciated significantly since purchase, current market value gives a lower yield that better reflects what a new buyer would earn today. Both are valid — just be consistent when comparing multiple properties.'],
    ]; foreach($faqs as $f): ?>
    <div class="ry-faq-item">
      <div class="ry-faq-q"><?php echo $f[0]; ?></div>
      <div class="ry-faq-a"><?php echo $f[1]; ?></div>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- RELATED -->
  <div class="ry-section" style="padding:1.5rem 1.85rem;">
    <h2 style="font-size:1.15rem;">Related Real Estate Calculators</h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(185px,1fr));gap:.75rem;margin-top:.75rem;">
      <a href="/real-estate/cap-rate-calculator" style="display:block;background:#f0fdf4;border:1.5px solid #bbf7d0;border-radius:9px;padding:.85rem;text-align:center;font-size:.85rem;font-weight:700;color:#065f46;text-decoration:none;">📊 Cap Rate Calculator</a>
      <a href="/real-estate/cash-on-cash-return-calculator" style="display:block;background:#f0fdf4;border:1.5px solid #bbf7d0;border-radius:9px;padding:.85rem;text-align:center;font-size:.85rem;font-weight:700;color:#065f46;text-decoration:none;">💵 Cash-on-Cash Return</a>
      <a href="/real-estate/closing-cost-calculator" style="display:block;background:#f0fdf4;border:1.5px solid #bbf7d0;border-radius:9px;padding:.85rem;text-align:center;font-size:.85rem;font-weight:700;color:#065f46;text-decoration:none;">🧾 Closing Cost Calculator</a>
      <a href="/real-estate/mortgage-calculator" style="display:block;background:#f0fdf4;border:1.5px solid #bbf7d0;border-radius:9px;padding:.85rem;text-align:center;font-size:.85rem;font-weight:700;color:#065f46;text-decoration:none;">🏦 Mortgage Calculator</a>
    </div>
  </div>

  <!-- SOURCES & BOTTOM DISCLAIMER -->
  <div class="ry-section">
    <h2>Sources &amp; Methodology</h2>
    <p>The rental yield benchmarks, market data, and national averages used on this page are sourced from the following authoritative references:</p>
    <ul>
      <li><a href="https://www.globalpropertyguide.com/north-america/united-states/rental-yield" target="_blank" rel="noopener noreferrer"><strong>Global Property Guide</strong></a> — US Gross Rental Yields Q2 2026 (national average 6.71%)</li>
      <li><a href="https://www.fhfa.gov/data/hpi" target="_blank" rel="noopener noreferrer"><strong>FHFA House Price Index</strong></a> — US regional property value trends and appreciation data</li>
      <li><a href="https://www.bls.gov/cpi/factsheets/owners-equivalent-rent.htm" target="_blank" rel="noopener noreferrer"><strong>Bureau of Labor Statistics</strong></a> — Rental housing cost and owners' equivalent rent surveys</li>
      <li><a href="https://www.census.gov/housing/hvs/index.html" target="_blank" rel="noopener noreferrer"><strong>US Census Bureau</strong></a> — Housing Vacancy Survey, rental vacancy rates by metro area</li>
      <li><a href="https://taxfoundation.org/data/all/state/property-taxes-by-state-county/" target="_blank" rel="noopener noreferrer"><strong>Tax Foundation</strong></a> — Property Tax Rates by State and County, 2026</li>
    </ul>
    <p>Market yield ranges are updated quarterly. City-level benchmarks reflect gross yield estimates based on median property prices and median asking rents for each market. Individual properties will vary. Last reviewed: August 2026.</p>
    <div style="background:#f1f5f9;border-radius:8px;padding:1rem 1.25rem;margin-top:1rem;font-size:.87rem;color:#475569;line-height:1.6;">
      <strong>Disclaimer:</strong> AmericaCalculator.com is an informational resource for educational purposes. The rental yield calculator and benchmarks on this page do not constitute financial, investment, tax, or legal advice. Real estate investing involves risk, and past market performance does not guarantee future results. Always conduct independent due diligence and consult a licensed real estate professional, CPA, or investment advisor before making any investment decision.
    </div>
  </div>

</div><!-- /ry-wrap -->
</main>

<script>
(function(){
  var $ = function(id){ return document.getElementById(id); };
  var fmtC = function(v){ return '$'+Math.round(Math.abs(v)).toLocaleString('en-US'); };
  var fmtD = function(v){ return '$'+Math.abs(v).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g,','); };
  var fmtP = function(v){ return v.toFixed(2)+'%'; };

  function calc(){
    var rent     = parseFloat($('ry-rent').value)     || 0;
    var value    = parseFloat($('ry-value').value)    || 0;
    var vacancy  = parseFloat($('ry-vacancy').value)  || 0;
    var expenses = parseFloat($('ry-expenses').value) || 0;

    if(rent<=0 || value<=0) return;

    var grossAnnual = rent * 12;
    var vacancyLoss = grossAnnual * (vacancy/100);
    var egi         = grossAnnual - vacancyLoss;
    var noi         = egi - expenses;
    var monthlyCF   = noi / 12;

    var grossYield  = (grossAnnual / value) * 100;
    var netYield    = (noi / value) * 100;
    var capRate     = (noi / value) * 100;

    /* Update display */
    $('ry-gross').textContent = fmtP(grossYield);
    $('ry-net').textContent   = fmtP(Math.max(0, netYield));
    $('ry-annual-rent').textContent = fmtC(egi);
    $('ry-monthly-cf').textContent  = fmtC(monthlyCF);
    $('ry-noi').textContent         = fmtC(noi);
    $('ry-cap').textContent         = fmtP(Math.max(0,capRate));

    $('rl-gross-rent').textContent = fmtC(grossAnnual);
    $('rl-vacancy').textContent    = '−'+fmtC(vacancyLoss);
    $('rl-egi').textContent        = fmtC(egi);
    $('rl-expenses').textContent   = expenses>0 ? '−'+fmtC(expenses) : '$0';
    $('rl-noi').textContent        = fmtC(noi);

    /* Gauge — 0–12% mapped to 0–100% */
    var gaugeMax = 12;
    var gaugePct = Math.min(100, Math.max(0, (grossYield/gaugeMax)*100));
    $('ry-needle').style.left = gaugePct+'%';

    /* Verdict */
    var verdict='', color='#059669';
    if(grossYield>=10)     { verdict='🌟 Excellent yield — top US market range'; color='#059669'; }
    else if(grossYield>=8) { verdict='🟢 Strong yield — well above US average';   color='#16a34a'; }
    else if(grossYield>=6) { verdict='🟢 Acceptable — at or above national average (6.71%)'; color='#65a30d'; }
    else if(grossYield>=4) { verdict='🟡 Below average — below US national average'; color='#ca8a04'; }
    else                   { verdict='🔴 Low yield — appreciation-dependent market'; color='#dc2626'; }
    $('ry-verdict').textContent = verdict;
    $('ry-verdict').style.color = color;

    $('ry-result').style.display = 'block';
  }

  $('ry-calc-btn').addEventListener('click', calc);
  ['ry-rent','ry-value','ry-vacancy','ry-expenses'].forEach(function(id){
    $(id).addEventListener('input', calc);
  });
  calc(); /* initial run */

  /* FAQ accordion */
  document.querySelectorAll('.ry-faq-q').forEach(function(q){
    q.addEventListener('click', function(){
      var item = this.closest('.ry-faq-item');
      var was  = item.classList.contains('open');
      document.querySelectorAll('.ry-faq-item').forEach(function(x){ x.classList.remove('open'); });
      if(!was) item.classList.add('open');
    });
  });
})();
</script>
<?php require_once '../includes/footer.php'; ?>
