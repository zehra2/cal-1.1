<?php
$currentYear = date('Y');
$pageTitle       = "Solar ROI Calculator ($currentYear) | Solar Panel Payback Period";
$metaDescription = "Solar ROI Calculator $currentYear USA — calculate solar panel payback period, net cost after the 30% federal tax credit (ITC), annual electricity savings, and 25-year lifetime return. Instant, real-time results.";
$metaKeywords    = 'solar roi calculator, solar panel roi calculator, solar return on investment calculator, solar payback calculator, how to calculate solar roi, solar power roi calculator, solar panels roi calculator, federal solar tax credit 2026';
$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'HowTo','name'=>'How to Calculate Residential Solar Panel ROI','step'=>[
    ['@type'=>'HowToStep','name'=>'Enter system size and cost per watt','text'=>'Input your estimated system size in kilowatts (kW) and average cost per watt ($/W) installed.'],
    ['@type'=>'HowToStep','name'=>'Apply 30% Federal Solar Tax Credit (ITC)','text'=>'Calculate the 30% Residential Clean Energy Credit under Section 25D of the Internal Revenue Code.'],
    ['@type'=>'HowToStep','name'=>'Deduct state and utility cash rebates','text'=>'Subtract local utility rebates, SREC revenue, or state clean energy grants.'],
    ['@type'=>'HowToStep','name'=>'Input current monthly electricity bill','text'=>'Enter average monthly power expense offset by rooftop solar generation.'],
    ['@type'=>'HowToStep','name'=>'Review payback period & 25-year lifetime ROI','text'=>'Analyze break-even timeline in years, annualized return rate, and cumulative net savings.']
  ]],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Business','item'=>'https://americacalculator.com/business/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'ROI Calculator','item'=>'https://americacalculator.com/business/roi-calculator'],
    ['@type'=>'ListItem','position'=>4,'name'=>'Solar ROI Calculator','item'=>'https://americacalculator.com/business/solar-roi-calculator'],
  ]],
  ['@type'=>'SoftwareApplication','name'=>'Solar ROI Calculator 2026','applicationCategory'=>'UtilityApplication','operatingSystem'=>'All','url'=>'https://americacalculator.com/business/solar-roi-calculator','offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'How do you calculate solar panel ROI?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Solar ROI = ((Total 25-Year Energy Savings − Net System Cost) ÷ Net System Cost) × 100. Net system cost is calculated as gross installation cost minus the 30% federal ITC tax credit minus any state or utility rebates. For example, a $24,000 system with a $7,200 ITC has a net cost of $16,800. If it saves $2,160 in Year 1 with a 3% utility escalation rate, total 25-year savings exceed $78,000, yielding an ROI over 360% and a payback under 7.5 years.']],
    ['@type'=>'Question','name'=>'What is the federal solar tax credit in 2026?','acceptedAnswer'=>['@type'=>'Answer','text'=>'The federal Residential Clean Energy Credit (Section 25D) provides a 30% tax credit on the full gross installation cost of solar photovoltaic systems and battery storage through 2032. The credit is uncapped and directly reduces federal income taxes owed dollar-for-dollar.']],
    ['@type'=>'Question','name'=>'How long is the payback period for residential solar panels?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Across the United States, solar payback periods average 6 to 9 years. In states with elevated utility rates like California and New York, payback periods are typically 5 to 7 years. In lower-cost states like Texas and Florida, payback averages 7 to 9 years. Once the system breaks even, it generates virtually free power for the remaining 15 to 20+ years of its warranted life.']],
    ['@type'=>'Question','name'=>'Does installing solar panels increase home equity?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. Extensive real estate research, including studies from Zillow and the National Renewable Energy Laboratory (NREL), shows homes equipped with owned solar systems sell for an average of 4.1% more than comparable non-solar properties. In addition, 38 states offer statutory property tax exemptions, meaning your home value increases without triggering higher property taxes.']],
    ['@type'=>'Question','name'=>'What is the difference between gross cost and net solar cost?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Gross solar cost is the total invoice price charged by your installer before any tax incentives. Net solar cost is your actual out-of-pocket investment after subtracting the 30% federal tax credit and state or local utility rebates. ROI and payback period are always modeled using net cost.']],
    ['@type'=>'Question','name'=>'How does utility rate escalation affect solar savings?','acceptedAnswer'=>['@type'=>'Answer','text'=>'US retail electricity rates historically increase by 2.5% to 4.5% annually due to grid infrastructure investments, transmission costs, and fuel price volatility. Every increase in utility rates expands your solar savings, accelerating your break-even point and maximizing 25-year lifetime cash return.']],
    ['@type'=>'Question','name'=>'How do battery storage and NEM 3.0 impact solar ROI?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Under net billing frameworks like California NEM 3.0, daytime export credits to the grid are reduced by 70% to 80%. Pairing solar with lithium battery storage allows homeowners to store cheap daytime solar generation and power their homes during expensive peak evening hours (4 PM to 9 PM), preserving strong 6-to-8 year payback periods.']],
    ['@type'=>'Question','name'=>'Is buying solar panels with cash better than a solar lease or PPA?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Purchasing solar panels with cash or a standard home equity loan yields the highest financial return (250% to 400% 25-year ROI) because the homeowner claims the 30% federal tax credit directly and incurs zero financing markups. With a solar lease or Power Purchase Agreement (PPA), the third-party financier keeps the tax credit and the homeowner only saves 10% to 25% on utility rates.']],
    ['@type'=>'Question','name'=>'What happens to solar panels after 25 years?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Tier-1 monocrystalline solar panels do not stop working after 25 years. Most panels come with a 25-year linear power warranty guaranteeing at least 85% to 88% of original rated efficiency in Year 25. High-quality systems routinely continue generating usable electricity for 30 to 35+ years.']]
  ]],
]];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>

<style>
/* Page-Specific Layout & Executive Styling */
.calc-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 1.5rem 1rem 3rem;
}
.calc-breadcrumbs {
  font-size: 0.82rem;
  color: #64748b;
  margin-bottom: 1rem;
}
.calc-breadcrumbs a {
  color: #d97706;
  text-decoration: none;
}
.calc-breadcrumbs a:hover {
  text-decoration: underline;
}
.calculator-header {
  margin-bottom: 1.75rem;
}
.calculator-header h1 {
  font-size: 2rem;
  font-weight: 800;
  color: #0f172a;
  line-height: 1.25;
  margin: 0 0 0.5rem;
}
.calculator-header .lead-description {
  font-size: 1rem;
  color: #475569;
  line-height: 1.6;
  margin: 0;
  max-width: 950px;
  border-left: 4px solid #d97706;
  padding-left: 1rem;
}

/* 2-Column Side-by-Side Layout (Above the Fold) */
.calculator-layout {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1.75rem;
  background: #ffffff;
  border-radius: 14px;
  box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
  border: 1px solid #e2e8f0;
  margin-bottom: 2.5rem;
  overflow: visible;
}
.calculator-panel {
  padding: 1.75rem;
}
.calculator-panel:first-child {
  border-right: 1px solid #f1f5f9;
}
.results-panel {
  background: linear-gradient(165deg, #fffbeb 0%, #fef3c7 100%);
  border-radius: 0 14px 14px 0;
  position: sticky;
  top: 90px;
  align-self: start;
}
.panel-title {
  font-size: 1.15rem;
  font-weight: 700;
  color: #0f172a;
  margin: 0 0 1.25rem;
  padding-bottom: 0.65rem;
  border-bottom: 2px solid #e2e8f0;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

/* Form Controls */
.form-group {
  margin-bottom: 1rem;
}
.form-group label {
  display: block;
  font-weight: 600;
  font-size: 0.85rem;
  color: #1e293b;
  margin-bottom: 0.35rem;
}
.form-control {
  width: 100%;
  padding: 10px 13px;
  border: 1.5px solid #cbd5e1;
  border-radius: 8px;
  font-size: 0.95rem;
  color: #0f172a;
  outline: none;
  background: #ffffff;
  box-sizing: border-box;
  transition: border-color 0.2s, box-shadow 0.2s;
}
.form-control:focus {
  border-color: #d97706;
  box-shadow: 0 0 0 3px rgba(217, 119, 6, 0.15);
}
.field-hint {
  font-size: 0.74rem;
  color: #64748b;
  margin-top: 0.25rem;
  display: block;
  line-height: 1.35;
}
.form-row-2 {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0.75rem;
}

/* Primary Highlight Metric */
.highlight-metric {
  background: linear-gradient(135deg, #d97706, #b45309);
  border-radius: 12px;
  padding: 1.25rem 1.25rem;
  margin-bottom: 1.2rem;
  text-align: center;
  box-shadow: 0 6px 18px rgba(217, 119, 6, 0.25);
}
.metric-label {
  font-size: 0.78rem;
  font-weight: 700;
  color: rgba(255, 255, 255, 0.9);
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: 0.3rem;
}
.metric-value {
  font-size: 2.35rem;
  font-weight: 900;
  color: #ffffff;
  line-height: 1.1;
  letter-spacing: -0.02em;
}
.metric-sub {
  font-size: 0.82rem;
  color: #fef3c7;
  margin-top: 0.4rem;
  font-weight: 600;
}

/* 4-Card Performance Grid */
.results-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0.65rem;
  margin-bottom: 1.2rem;
}
.result-card {
  background: #ffffff;
  border: 1.5px solid #fde68a;
  border-radius: 9px;
  padding: 0.85rem 0.95rem;
  transition: transform 0.15s, box-shadow 0.15s;
}
.result-card:hover {
  box-shadow: 0 4px 12px rgba(217, 119, 6, 0.1);
}
.result-title {
  font-size: 0.72rem;
  font-weight: 700;
  color: #64748b;
  text-transform: uppercase;
  letter-spacing: 0.03em;
  margin-bottom: 0.25rem;
}
.result-number {
  font-size: 1.25rem;
  font-weight: 800;
  color: #d97706;
  line-height: 1.15;
  margin-bottom: 0.2rem;
}
.result-desc {
  font-size: 0.72rem;
  color: #64748b;
  line-height: 1.35;
}
.success-card {
  border-color: #bbf7d0;
  background: #f0fdf4;
}
.text-success { color: #16a34a !important; }
.text-danger  { color: #dc2626 !important; }
.text-amber   { color: #d97706 !important; }

/* Financial Breakdown Table */
.summary-breakdown {
  background: #ffffff;
  border: 1.5px solid #fde68a;
  border-radius: 10px;
  padding: 1rem 1.15rem;
}
.summary-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 0.83rem;
}
.summary-table td {
  padding: 0.42rem 0;
  border-bottom: 1px solid #fef3c7;
  color: #475569;
}
.summary-table tr:last-child td {
  border-bottom: none;
}
.summary-table td:last-child {
  text-align: right;
  font-weight: 600;
  color: #0f172a;
}
.highlight-row td {
  background: #f0fdf4;
  color: #166534 !important;
  font-weight: 700;
  padding-left: 0.35rem;
  padding-right: 0.35rem;
}

/* Action Buttons */
.btn-calc {
  flex: 1;
  background: linear-gradient(135deg, #d97706, #b45309);
  color: #ffffff;
  border: none;
  padding: 11px 16px;
  border-radius: 8px;
  font-weight: 700;
  font-size: 0.92rem;
  cursor: pointer;
  transition: opacity 0.15s, transform 0.15s;
}
.btn-calc:hover {
  opacity: 0.95;
  transform: translateY(-1px);
}
.btn-reset {
  background: #f8fafc;
  border: 1.5px solid #cbd5e1;
  color: #475569;
  padding: 11px 16px;
  border-radius: 8px;
  font-weight: 600;
  font-size: 0.92rem;
  cursor: pointer;
}
.btn-reset:hover {
  background: #f1f5f9;
}

/* Editorial & Content */
.content-card {
  background: #ffffff;
  border-radius: 14px;
  border: 1px solid #e2e8f0;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
  padding: 2rem;
  margin-bottom: 1.75rem;
}
.content-card h2 {
  font-size: 1.45rem;
  font-weight: 800;
  color: #0f172a;
  margin: 0 0 1rem;
  padding-bottom: 0.65rem;
  border-bottom: 2px solid #f1f5f9;
}
.content-card h3 {
  font-size: 1.15rem;
  font-weight: 700;
  color: #1e293b;
  margin: 1.35rem 0 0.5rem;
}
.content-card p {
  color: #475569;
  line-height: 1.72;
  font-size: 0.95rem;
  margin-bottom: 1rem;
}
.content-card p:last-child {
  margin-bottom: 0;
}
.content-card strong {
  color: #0f172a;
}
.content-card a {
  color: #d97706;
  font-weight: 600;
  text-decoration: none;
}
.content-card a:hover {
  text-decoration: underline;
}

/* Callout */
.formula-callout {
  background: #fffbeb;
  border: 1.5px solid #fde68a;
  border-left: 5px solid #d97706;
  border-radius: 0 10px 10px 0;
  padding: 1.25rem 1.5rem;
  margin: 1.25rem 0;
}
.formula-callout h3 {
  margin: 0 0 0.5rem;
  color: #92400e;
  font-size: 1.1rem;
}
.formula-callout code {
  display: block;
  background: #ffffff;
  border: 1px solid #fed7aa;
  padding: 0.6rem 0.9rem;
  border-radius: 6px;
  font-family: Consolas, Monaco, monospace;
  font-size: 0.92rem;
  color: #0f172a;
  margin-top: 0.5rem;
}

/* Tables */
.responsive-table {
  overflow-x: auto;
  margin: 1.25rem 0;
}
.benchmark-table {
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #e2e8f0;
  border-radius: 10px;
  overflow: hidden;
  font-size: 0.88rem;
}
.benchmark-table th {
  background: #78350f;
  color: #ffffff;
  padding: 10px 14px;
  font-weight: 700;
  text-align: left;
}
.benchmark-table td {
  padding: 10px 14px;
  border-bottom: 1px solid #f1f5f9;
  color: #334155;
}
.benchmark-table tr:last-child td {
  border-bottom: none;
}
.benchmark-table tr:nth-child(even) td {
  background: #f8fafc;
}

/* FAQ Accordion */
.faq-box {
  border-bottom: 1px solid #e2e8f0;
  padding: 0.9rem 0;
}
.faq-box:last-child {
  border-bottom: none;
}
.faq-question {
  font-size: 0.98rem;
  font-weight: 700;
  color: #0f172a;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 0.75rem;
  user-select: none;
}
.faq-question::after {
  content: '+';
  font-size: 1.3rem;
  color: #d97706;
  font-weight: 700;
  flex-shrink: 0;
}
.faq-box.open .faq-question::after {
  content: '−';
}
.faq-answer {
  display: none;
  color: #475569;
  font-size: 0.92rem;
  line-height: 1.68;
  padding-top: 0.55rem;
}
.faq-box.open .faq-answer {
  display: block;
}

/* Internal Hub Links */
.tools-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 1rem;
  margin-top: 1.25rem;
}
.tool-link-card {
  display: block;
  background: #f8fafc;
  border: 1.5px solid #e2e8f0;
  border-radius: 9px;
  padding: 1rem 1.15rem;
  text-decoration: none;
  transition: all 0.2s;
}
.tool-link-card:hover {
  border-color: #d97706;
  background: #fffbeb;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(217, 119, 6, 0.08);
}
.tool-link-card .tool-title {
  font-size: 0.95rem;
  font-weight: 700;
  color: #0f172a;
  margin-bottom: 0.25rem;
  display: flex;
  align-items: center;
  gap: 0.4rem;
}
.tool-link-card .tool-desc {
  font-size: 0.78rem;
  color: #64748b;
  line-height: 1.4;
}

/* Responsiveness */
@media (max-width: 900px) {
  .calculator-layout {
    grid-template-columns: 1fr;
  }
  .calculator-panel:first-child {
    border-right: none;
    border-bottom: 1px solid #e2e8f0;
  }
  .results-panel {
    border-radius: 0 0 14px 14px;
    position: static;
  }
}
@media (max-width: 580px) {
  .calculator-header h1 {
    font-size: 1.55rem;
  }
  .form-row-2 {
    grid-template-columns: 1fr;
  }
  .results-grid {
    grid-template-columns: 1fr;
  }
  .calculator-panel {
    padding: 1.25rem;
  }
  .content-card {
    padding: 1.25rem;
  }
}
</style>

<main id="main-content">
<div class="calc-container">
  <!-- Breadcrumbs -->
  <div class="calc-breadcrumbs">
    <a href="/">Home</a> › <a href="/business/">Business</a> › <a href="/business/roi-calculator">ROI Calculator</a> › Solar ROI Calculator
  </div>

  <!-- Hero Header -->
  <div class="calculator-header">
    <h1>Solar ROI Calculator (<?php echo $currentYear; ?>)</h1>
    <p class="lead-description">
      Calculate your <strong>Solar Payback Period (Years)</strong>, <strong>25-Year Lifetime ROI (%)</strong>, <strong>Net Out-of-Pocket Cost</strong> after the 30% federal tax credit (ITC), and cumulative electricity savings with real-time live results.
    </p>
  </div>

  <!-- 2-COLUMN SIDE-BY-SIDE CALCULATOR (ABOVE THE FOLD — NO NEED TO SCROLL DOWN) -->
  <div class="calculator-layout">
    <!-- LEFT INPUT PANEL -->
    <div class="calculator-panel">
      <h2 class="panel-title"><span>☀️</span> Solar System &amp; Utility Inputs</h2>

      <div class="form-group">
        <label for="s-preset">State / Regional Profile Preset</label>
        <select id="s-preset" class="form-control">
          <option value="national" data-kw="8.0" data-cpw="2.90" data-itc="30" data-state="0" data-bill="180" data-offset="90" data-util="3.5">National Average (8 kW System • $180/mo Bill)</option>
          <option value="california" data-kw="7.5" data-cpw="3.15" data-itc="30" data-state="500" data-bill="260" data-offset="85" data-util="4.5">California (High Rates • NEM 3.0 • Fast Payback)</option>
          <option value="texas" data-kw="9.5" data-cpw="2.75" data-itc="30" data-state="0" data-bill="210" data-offset="95" data-util="3.0">Texas (High AC Load • Property Tax Exempt)</option>
          <option value="florida" data-kw="8.5" data-cpw="2.70" data-itc="30" data-state="0" data-bill="195" data-offset="90" data-util="3.5">Florida (High Solar Radiance • Sales Tax Exempt)</option>
          <option value="arizona" data-kw="8.0" data-cpw="2.80" data-itc="30" data-state="1000" data-bill="220" data-offset="90" data-util="3.0">Arizona (State Tax Credit • Peak Sun Hours)</option>
          <option value="newyork" data-kw="7.0" data-cpw="3.25" data-itc="30" data-state="2500" data-bill="230" data-offset="85" data-util="4.0">New York (NY-Sun Grant • 25% State Credit)</option>
          <option value="custom">Custom Solar Configuration</option>
        </select>
        <span class="field-hint">Choose a regional profile to auto-populate local costs and electricity bills.</span>
      </div>

      <div class="form-row-2">
        <div class="form-group">
          <label for="s-kw">System Size (kW)</label>
          <input type="number" id="s-kw" class="form-control" value="8.0" min="1" max="100" step="0.5">
          <span class="field-hint">Typical home: 6 to 10 kW</span>
        </div>
        <div class="form-group">
          <label for="s-cpw">Cost Per Watt ($/W)</label>
          <input type="number" id="s-cpw" class="form-control" value="2.90" min="1.0" max="6.0" step="0.05">
          <span class="field-hint">US average: $2.60–$3.30/W</span>
        </div>
      </div>

      <div class="form-row-2">
        <div class="form-group">
          <label for="s-itc">Federal Tax Credit (%)</label>
          <input type="number" id="s-itc" class="form-control" value="30" min="0" max="50" step="1">
          <span class="field-hint">Section 25D: 30% through 2032</span>
        </div>
        <div class="form-group">
          <label for="s-state">State / Utility Rebates ($)</label>
          <input type="number" id="s-state" class="form-control" value="0" min="0" step="100">
          <span class="field-hint">Local grants or SREC credits</span>
        </div>
      </div>

      <div class="form-row-2">
        <div class="form-group">
          <label for="s-bill">Current Monthly Electric Bill ($)</label>
          <input type="number" id="s-bill" class="form-control" value="180" min="0" step="10">
          <span class="field-hint">Pre-solar monthly utility bill</span>
        </div>
        <div class="form-group">
          <label for="s-offset">Solar Electric Offset (%)</label>
          <input type="number" id="s-offset" class="form-control" value="90" min="10" max="110" step="5">
          <span class="field-hint">% of electric bill eliminated</span>
        </div>
      </div>

      <div class="form-row-2">
        <div class="form-group">
          <label for="s-util">Annual Utility Rate Hike (%)</label>
          <input type="number" id="s-util" class="form-control" value="3.5" min="0" max="12" step="0.5">
          <span class="field-hint">Historical inflation: 3%–5%/yr</span>
        </div>
        <div class="form-group">
          <label for="s-life">System Lifespan (Years)</label>
          <input type="number" id="s-life" class="form-control" value="25" min="10" max="35" step="1">
          <span class="field-hint">Panel warranty standard: 25 yrs</span>
        </div>
      </div>

      <div style="display:flex;gap:10px;margin-top:0.75rem;">
        <button type="button" class="btn-calc" onclick="calcSolar()">⚡ Calculate Solar Payback &amp; ROI</button>
        <button type="button" class="btn-reset" onclick="resetDefaults()">Reset</button>
      </div>
    </div>

    <!-- RIGHT RESULTS PANEL (PINNED STICKY ALONGSIDE INPUTS) -->
    <div class="calculator-panel results-panel" id="s-results-panel">
      <h2 class="panel-title"><span>📈</span> Solar Investment Scorecard</h2>

      <div class="highlight-metric">
        <div class="metric-label">Estimated Solar Payback Period</div>
        <div class="metric-value" id="s-payback">8.3 Years</div>
        <div class="metric-sub" id="s-payback-badge">Excellent Payback • High 25-Year Profit</div>
      </div>

      <div class="results-grid">
        <div class="result-card">
          <div class="result-title">25-Year Lifetime ROI</div>
          <div class="result-number text-amber" id="s-roi">+386.5%</div>
          <div class="result-desc" id="s-ann-roi-desc">Annualized Return: 6.6%/yr</div>
        </div>

        <div class="result-card">
          <div class="result-title">Net System Cost (After ITC)</div>
          <div class="result-number" id="s-net-cost">$16,240</div>
          <div class="result-desc" id="s-itc-desc">Saved $6,960 via 30% ITC</div>
        </div>

        <div class="result-card">
          <div class="result-title">Year 1 Electricity Savings</div>
          <div class="result-number text-success" id="s-yr1-save">$1,944 / yr</div>
          <div class="result-desc">~$162/mo bill reduction</div>
        </div>

        <div class="result-card success-card">
          <div class="result-title">Net 25-Year Lifetime Profit</div>
          <div class="result-number text-success" id="s-lifetime-profit">$62,773</div>
          <div class="result-desc">Total Savings − Net Cost</div>
        </div>
      </div>

      <div class="summary-breakdown">
        <h3 style="font-size:0.86rem;font-weight:700;color:#0f172a;margin:0 0 0.65rem;text-transform:uppercase;letter-spacing:0.04em;">25-Year Financial Breakdown</h3>
        <table class="summary-table">
          <tr><td>Gross Solar Installation Cost:</td><td id="sl-gross">$23,200</td></tr>
          <tr><td>30% Federal Tax Credit (ITC):</td><td id="sl-itc" class="text-success">−$6,960</td></tr>
          <tr><td>State Incentives &amp; Rebates:</td><td id="sl-state">$0</td></tr>
          <tr class="highlight-row"><td><strong>Net Solar Out-of-Pocket Investment:</strong></td><td><strong id="sl-net-inv">$16,240</strong></td></tr>
          <tr><td>First-Year Electricity Savings:</td><td id="sl-yr1" class="text-success">$1,944 / yr</td></tr>
          <tr><td>Payback Period:</td><td><strong id="sl-payback-table">8.3 Years</strong></td></tr>
          <tr><td>Total 25-Year Utility Bill Offset:</td><td id="sl-total" class="text-success">$79,013</td></tr>
          <tr class="highlight-row"><td><strong>Net 25-Year Cash Savings (Profit):</strong></td><td><strong id="sl-profit" class="text-success">$62,773</strong></td></tr>
          <tr><td>25-Year Cumulative ROI:</td><td><strong id="sl-roi-table" class="text-amber">+386.5%</strong></td></tr>
          <tr><td>Estimated Home Value Increase:</td><td id="sl-home-val" class="text-success">+$32,000</td></tr>
        </table>
      </div>
    </div>
  </div>

  <!-- SECTION 1: STATE BENCHMARKS TABLE -->
  <div class="content-card">
    <h2>Solar ROI &amp; Payback Benchmarks by US State (<?php echo $currentYear; ?>)</h2>
    <p>Residential solar financial performance varies by local retail electricity prices, solar insolation, and state net billing structures:</p>
    <div class="responsive-table">
      <table class="benchmark-table">
        <thead>
          <tr>
            <th>State</th>
            <th>Avg Electric Rate</th>
            <th>Payback Period</th>
            <th>25-Year Net ROI</th>
            <th>Key Statutory Incentives</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>California</strong></td>
            <td>$0.28–$0.34/kWh</td>
            <td>5.5–7.5 yrs</td>
            <td>280%–380%</td>
            <td>NEM 3.0 net billing; SGIP battery incentive; 100% property tax exempt.</td>
          </tr>
          <tr>
            <td><strong>New York</strong></td>
            <td>$0.22–$0.26/kWh</td>
            <td>5.0–7.5 yrs</td>
            <td>240%–340%</td>
            <td>NY-Sun Megawatt Block rebate; 25% state tax credit (up to $5,000).</td>
          </tr>
          <tr>
            <td><strong>Texas</strong></td>
            <td>$0.13–$0.16/kWh</td>
            <td>7.5–9.5 yrs</td>
            <td>160%–250%</td>
            <td>100% statutory property tax exemption; competitive retail solar buyback.</td>
          </tr>
          <tr>
            <td><strong>Florida</strong></td>
            <td>$0.14–$0.16/kWh</td>
            <td>6.5–8.5 yrs</td>
            <td>180%–260%</td>
            <td>100% property tax and 6% state sales tax exemption on solar equipment.</td>
          </tr>
          <tr>
            <td><strong>Arizona</strong></td>
            <td>$0.13–$0.15/kWh</td>
            <td>6.0–8.0 yrs</td>
            <td>190%–270%</td>
            <td>25% state residential tax credit (up to $1,000); high peak sun hours.</td>
          </tr>
          <tr>
            <td><strong>North Carolina</strong></td>
            <td>$0.12–$0.14/kWh</td>
            <td>7.5–10.0 yrs</td>
            <td>150%–220%</td>
            <td>Duke Energy Time-of-Use net metering; 80% property tax abatement.</td>
          </tr>
          <tr>
            <td><strong>Ohio &amp; Midwest</strong></td>
            <td>$0.13–$0.15/kWh</td>
            <td>8.5–11.0 yrs</td>
            <td>130%–190%</td>
            <td>SREC market monetization; utility interconnection standard net metering.</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="formula-callout">
      <h3>Core Solar ROI &amp; Payback Formulas</h3>
      <p>Standard financial equations for residential and commercial solar arrays:</p>
      <code>Gross Solar Installation Cost = System Size (kW) × 1,000 Watts × Cost Per Watt ($/W)</code>
      <code>Net Solar System Investment = Gross Cost − 30% Federal ITC − State &amp; Utility Rebates</code>
      <code>Year 1 Energy Savings = Monthly Electric Bill × (Solar Offset % ÷ 100) × 12 Months</code>
      <code>Simple Payback Period (Years) = Net System Investment ÷ Year 1 Energy Savings</code>
      <code>Lifetime 25-Year ROI (%) = ((Cumulative 25-Year Savings − Net Investment) ÷ Net Investment) × 100</code>
    </div>
  </div>

  <!-- SECTION 2: FEDERAL INCENTIVES & TECHNICAL LIFESPAN -->
  <div class="content-card">
    <h2>Federal Tax Credit Details &amp; Equipment Longevity</h2>
    <p>A rigorous 25-year solar financial model must account for the statutory federal framework, inverter replacements, and realistic panel degradation schedules:</p>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin:1.25rem 0;">
      <div style="background:#f8fafc;padding:1.15rem;border-radius:8px;border-left:4px solid #d97706;">
        <strong style="color:#0f172a;display:block;margin-bottom:0.35rem;">Section 25D Federal ITC (30%)</strong>
        <span style="font-size:0.88rem;color:#475569;line-height:1.55;display:block;">The Inflation Reduction Act guarantees an uncapped 30% residential clean energy tax credit through 2032. Eligible expenditures include solar photovoltaic panels, racking, wiring, electrical service panel upgrades required for interconnection, and home battery storage systems (3 kWh minimum).</span>
      </div>
      <div style="background:#f8fafc;padding:1.15rem;border-radius:8px;border-left:4px solid #10b981;">
        <strong style="color:#0f172a;display:block;margin-bottom:0.35rem;">Panel Degradation Rate (0.5%/yr)</strong>
        <span style="font-size:0.88rem;color:#475569;line-height:1.55;display:block;">Tier-1 monocrystalline silicon panels undergo approximately 0.5% annual efficiency loss. A system generating 10,000 kWh in Year 1 will reliably produce ~8,800 kWh annually in Year 25, protected by 25-year manufacturer linear power performance warranties.</span>
      </div>
      <div style="background:#f8fafc;padding:1.15rem;border-radius:8px;border-left:4px solid #2563eb;">
        <strong style="color:#0f172a;display:block;margin-bottom:0.35rem;">Home Equity Appreciation (~4.1%)</strong>
        <span style="font-size:0.88rem;color:#475569;line-height:1.55;display:block;">Research by Zillow and Lawrence Berkeley National Laboratory demonstrates that solar-equipped homes sell for ~4.1% more, translating to $20,000 to $35,000 in added equity for an 8 kW system without increasing property taxes in most states.</span>
      </div>
    </div>

    <h3>Battery Storage (NEM 3.0) &amp; Time-of-Use Peak Shaving</h3>
    <p>In states operating under updated net billing frameworks like California's NEM 3.0, exporting excess solar electricity to the utility during midday hours yields drastically lower grid credits (down ~75%). Pairing rooftop solar with a lithium battery storage system (such as Tesla Powerwall, Enphase 5P, or FranklinWH) allows homeowners to store daytime surplus and discharge power during expensive evening peak-demand hours ($0.45 to $0.65/kWh), protecting a rapid 6-to-8 year payback timeline.</p>

    <h3>Inverter Replacement: String Inverters vs. Microinverters</h3>
    <p>While photovoltaic modules routinely function for 30+ years, central string inverters undergo intense thermal cycles and typically require one replacement between Year 10 and 15 (budgeting $1,500 to $2,500). In contrast, module-level power electronics (such as Enphase microinverters or SolarEdge power optimizers) feature standard 25-year manufacturer warranties that mirror panel longevity.</p>
  </div>

  <!-- SECTION 3: FREQUENTLY ASKED QUESTIONS -->
  <div class="content-card">
    <h2>Frequently Asked Questions</h2>
    <?php
    $faqs = [
      ['How do you calculate solar panel ROI?','Solar ROI = ((Cumulative Energy Savings over System Lifespan − Net System Cost) ÷ Net System Cost) × 100. Net system cost is calculated as gross cost minus the 30% federal ITC minus any state incentives. For an 8 kW array costing $23,200 ($16,240 net after ITC) that saves $1,944 in Year 1 with 3.5% utility escalation, 25-year savings exceed $79,000, delivering a net cash profit of $62,773 and an ROI of +386%.'],
      ['What is the federal solar tax credit in 2026?','The federal Residential Clean Energy Credit (Section 25D) provides an uncapped 30% credit for residential and commercial solar installations placed in service through 2032. A $25,000 system qualifies for a $7,500 tax credit, directly reducing your federal income tax liability dollar-for-dollar.'],
      ['How long is the typical solar panel payback period in the US?','US residential payback periods average 6 to 9 years. High-rate states like California, New York, and Massachusetts see paybacks of 5 to 7.5 years. Moderate-rate states like Texas, Florida, and North Carolina average 7 to 9.5 years. Once paid off, the system provides essentially free power for 15 to 20+ more years.'],
      ['Does installing solar increase home resale value?','Yes. A landmark Zillow analysis revealed that homes with owned solar panels sell for 4.1% more on average than comparable non-solar properties. In addition, 38 US states provide statutory property tax exemptions, preventing your local tax assessor from raising property taxes due to solar addition.'],
      ['What happens if my federal tax liability is lower than my 30% solar credit?','The Section 25D solar tax credit is non-refundable, but it features an indefinite carry-forward provision. If your tax bill in the year of installation is less than the total credit amount, the remaining credit rolls over to offset federal income taxes in future tax years until fully exhausted.'],
      ['Is buying solar panels with cash better than a solar loan or lease?','Cash purchases deliver the highest overall lifetime ROI (250% to 400%) because you avoid financing fees and loan origination charges (which often add 15% to 25% to solar loans). Solar leases and PPAs provide $0 down but reduce your financial savings by 60% to 75% since the leasing company claims the federal tax credit.'],
      ['How does net metering work with solar ROI?','Net Energy Metering (NEM) credits homeowners for surplus solar electricity sent back to the utility grid. Under full 1:1 net metering (NEM 1.0/2.0), your meter spins backward at full retail rates. Under newer net billing frameworks (NEM 3.0), export credits are lower, making battery storage advantageous for maximizing ROI.'],
      ['Do solar panels still produce electricity on cloudy days?','Yes. Modern Tier-1 monocrystalline panels produce 15% to 30% of their rated capacity on overcast and rainy days by capturing ambient diffuse solar irradiance. Annualized ROI models account for seasonal weather variations across all 50 states.'],
      ['How much do solar panels degrade over 25 years?','Industry-standard monocrystalline panels degrade at an average rate of 0.5% per year. After 25 years of service, panels are warrantied to operate at 85% to 88% of their original nameplate output, continuing to deliver significant utility savings for years to come.']
    ];
    foreach($faqs as $f): ?>
    <div class="faq-box">
      <div class="faq-question"><?php echo htmlspecialchars($f[0]); ?></div>
      <div class="faq-answer"><?php echo htmlspecialchars($f[1]); ?></div>
    </div>
    <?php endforeach; ?>
  </div>

  <!-- SECTION 4: RELATED BUSINESS CALCULATORS -->
  <div class="content-card">
    <h2>Related Investment &amp; Business Calculators</h2>
    <p>Explore our complete suite of financial and capital investment calculators:</p>
    <div class="tools-grid">
      <a href="/business/roi-calculator" class="tool-link-card">
        <div class="tool-title">📊 Full ROI Calculator</div>
        <div class="tool-desc">Calculate annualized ROI, capital expenditures, and investment payback schedules.</div>
      </a>
      <a href="/business/marketing-roi-calculator" class="tool-link-card">
        <div class="tool-title">📣 Marketing ROI Calculator</div>
        <div class="tool-desc">Calculate ROAS, Customer Acquisition Cost (CAC), and paid campaign return.</div>
      </a>
      <a href="/business/ltv-cac-calculator" class="tool-link-card">
        <div class="tool-title">📈 LTV:CAC Calculator</div>
        <div class="tool-desc">Evaluate unit economics, churn rate, and CAC payback period in months.</div>
      </a>
      <a href="/business/break-even-calculator" class="tool-link-card">
        <div class="tool-title">⚖️ Break-Even Calculator</div>
        <div class="tool-desc">Determine unit sales volume and revenue required to cover fixed and variable costs.</div>
      </a>
      <a href="/business/profit-margin-calculator" class="tool-link-card">
        <div class="tool-title">💰 Profit Margin Calculator</div>
        <div class="tool-desc">Calculate gross profit margin, net margin, and operational markups.</div>
      </a>
      <a href="/business/freelance-rate-calculator" class="tool-link-card">
        <div class="tool-title">💼 Freelance Rate Calculator</div>
        <div class="tool-desc">Calculate hourly billing rates that cover overhead, taxes, and profit goals.</div>
      </a>
    </div>
  </div>
</div>
</main>

<script>
function fmtC(val) {
  var sign = val < 0 ? '−$' : '$';
  return sign + Math.abs(Math.round(val)).toLocaleString('en-US');
}

function fmtP(val) {
  var sign = val < 0 ? '−' : '+';
  return sign + Math.abs(val).toFixed(1) + '%';
}

function calcSolar() {
  var kw       = parseFloat(document.getElementById('s-kw').value) || 0;
  var cpw      = parseFloat(document.getElementById('s-cpw').value) || 0;
  var itcPct   = parseFloat(document.getElementById('s-itc').value) || 30;
  var stateInc = parseFloat(document.getElementById('s-state').value) || 0;
  var bill     = parseFloat(document.getElementById('s-bill').value) || 0;
  var offset   = parseFloat(document.getElementById('s-offset').value) || 90;
  var utilInc  = parseFloat(document.getElementById('s-util').value) || 3.5;
  var life     = parseInt(document.getElementById('s-life').value, 10) || 25;

  // Cost calculations
  var grossCost = kw * 1000 * cpw;
  var itcVal    = grossCost * (itcPct / 100);
  var netInv    = grossCost - itcVal - stateInc;
  if (netInv < 0) netInv = 0;

  // Savings calculations
  var yr1Save = bill * (offset / 100) * 12;
  var totalSave = 0;
  var annualCompoundedSave = yr1Save;

  for (var i = 0; i < life; i++) {
    totalSave += annualCompoundedSave;
    annualCompoundedSave *= (1 + (utilInc / 100));
  }

  var lifetimeProfit = totalSave - netInv;
  var roiTotal       = netInv > 0 ? (lifetimeProfit / netInv) * 100 : 0;
  var paybackYears   = yr1Save > 0 ? (netInv / yr1Save) : 0;
  var annRoi         = (life > 0 && netInv > 0 && totalSave > 0) ? ((Math.pow(totalSave / netInv, 1 / life) - 1) * 100) : 0;
  var homeEquityVal  = kw * 1000 * 4.0; // ~$4.00/W typical home value increase

  // Update Hero Metric (Payback Period)
  var paybackEl = document.getElementById('s-payback');
  if (paybackEl) {
    if (paybackYears > 0 && paybackYears <= life) {
      paybackEl.textContent = paybackYears.toFixed(1) + ' Years';
    } else if (paybackYears > life) {
      paybackEl.textContent = '> ' + life + ' Years';
    } else {
      paybackEl.textContent = 'Immediate';
    }
  }

  // Update Status Badge
  var badgeEl = document.getElementById('s-payback-badge');
  if (badgeEl) {
    if (paybackYears > 0 && paybackYears <= 6.5) {
      badgeEl.textContent = 'Exceptional Payback • High 25-Year Profit';
    } else if (paybackYears <= 8.5) {
      badgeEl.textContent = 'Excellent Payback • Strong Lifetime Wealth';
    } else if (paybackYears <= 11.0) {
      badgeEl.textContent = 'Standard US Payback • Substantial Long-Term Return';
    } else {
      badgeEl.textContent = 'Extended Payback • Consider Battery Storage / Efficiency';
    }
  }

  // Update 4 Cards
  var roiEl = document.getElementById('s-roi');
  if (roiEl) roiEl.textContent = fmtP(roiTotal);

  var annDescEl = document.getElementById('s-ann-roi-desc');
  if (annDescEl) annDescEl.textContent = 'Annualized Return: ' + annRoi.toFixed(1) + '%/yr';

  var netCostEl = document.getElementById('s-net-cost');
  if (netCostEl) netCostEl.textContent = fmtC(netInv);

  var itcDescEl = document.getElementById('s-itc-desc');
  if (itcDescEl) itcDescEl.textContent = 'Saved ' + fmtC(itcVal) + ' via ' + itcPct + '% ITC';

  var yr1SaveEl = document.getElementById('s-yr1-save');
  if (yr1SaveEl) yr1SaveEl.textContent = fmtC(yr1Save) + ' / yr';

  var profitEl = document.getElementById('s-lifetime-profit');
  if (profitEl) {
    profitEl.textContent = fmtC(lifetimeProfit);
    profitEl.className = lifetimeProfit >= 0 ? 'result-number text-success' : 'result-number text-danger';
  }

  // Update Breakdown Table
  var setTxt = function(id, txt) {
    var el = document.getElementById(id);
    if (el) el.textContent = txt;
  };

  setTxt('sl-gross', fmtC(grossCost));
  setTxt('sl-itc', '−' + fmtC(itcVal));
  setTxt('sl-state', stateInc > 0 ? '−' + fmtC(stateInc) : '$0');
  setTxt('sl-net-inv', fmtC(netInv));
  setTxt('sl-yr1', fmtC(yr1Save) + ' / yr');
  setTxt('sl-payback-table', (paybackYears > 0 ? paybackYears.toFixed(1) + ' Years' : '—'));
  setTxt('sl-total', fmtC(totalSave));
  setTxt('sl-profit', fmtC(lifetimeProfit));
  setTxt('sl-roi-table', fmtP(roiTotal));
  setTxt('sl-home-val', '+' + fmtC(homeEquityVal));
}

// Preset Handler
var presetSelect = document.getElementById('s-preset');
if (presetSelect) {
  presetSelect.addEventListener('change', function() {
    var opt = this.options[this.selectedIndex];
    if (opt && opt.value !== 'custom') {
      if (opt.dataset.kw) document.getElementById('s-kw').value = opt.dataset.kw;
      if (opt.dataset.cpw) document.getElementById('s-cpw').value = opt.dataset.cpw;
      if (opt.dataset.itc) document.getElementById('s-itc').value = opt.dataset.itc;
      if (opt.dataset.state) document.getElementById('s-state').value = opt.dataset.state;
      if (opt.dataset.bill) document.getElementById('s-bill').value = opt.dataset.bill;
      if (opt.dataset.offset) document.getElementById('s-offset').value = opt.dataset.offset;
      if (opt.dataset.util) document.getElementById('s-util').value = opt.dataset.util;
    }
    calcSolar();
  });
}

function resetDefaults() {
  document.getElementById('s-preset').value = 'national';
  document.getElementById('s-kw').value = 8.0;
  document.getElementById('s-cpw').value = 2.90;
  document.getElementById('s-itc').value = 30;
  document.getElementById('s-state').value = 0;
  document.getElementById('s-bill').value = 180;
  document.getElementById('s-offset').value = 90;
  document.getElementById('s-util').value = 3.5;
  document.getElementById('s-life').value = 25;
  calcSolar();
}

// Bind live event listeners on all inputs
document.querySelectorAll('#s-kw, #s-cpw, #s-itc, #s-state, #s-bill, #s-offset, #s-util, #s-life').forEach(function(input) {
  input.addEventListener('input', calcSolar);
  input.addEventListener('change', calcSolar);
});

// Calculate immediately on page load
calcSolar();

// FAQ Accordion
document.querySelectorAll('.faq-question').forEach(function(btn) {
  btn.addEventListener('click', function() {
    var box = this.closest('.faq-box');
    var isOpen = box.classList.contains('open');
    document.querySelectorAll('.faq-box').forEach(function(b) { b.classList.remove('open'); });
    if (!isOpen) {
      box.classList.add('open');
    }
  });
});
</script>

<?php require_once '../includes/footer.php'; ?>
