<?php
// ─── SEO Meta ───────────────────────────────────────────────────────────────
$pageTitle       = 'Home Inspection Cost Calculator 2026 | Prices by Sq Ft & State';
$metaDescription = 'Free home inspection cost calculator for 2026. Estimate inspection costs by home square footage, age, and location. Add radon, sewer scope, and mold tests.';
$metaKeywords    = 'home inspection cost calculator, how much is a home inspection, home inspection cost, average cost of home inspection, home inspection price estimator, radon inspection cost, sewer scope cost';

// ─── Structured Data (JSON-LD) ───────────────────────────────────────────────
$schemaData = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'               => 'WebApplication',
            'name'                => 'Home Inspection Cost Calculator',
            'url'                 => 'https://americacalculator.com/real-estate/home-inspection-cost-calculator',
            'description'         => 'Calculate estimated home inspection costs by property square footage, age, region, and optional specialty tests like radon, sewer scope, mold, termite, and chimney inspections.',
            'applicationCategory' => 'RealEstateApplication',
            'operatingSystem'     => 'All',
            'offers'              => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD'],
        ],
        [
            '@type'     => 'HowTo',
            'name'      => 'How to Estimate Home Inspection Costs',
            'totalTime' => 'PT1M',
            'step'      => [
                ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Enter home square footage', 'text' => 'Enter the total finished square footage of the property. Inspectors base baseline pricing on size tiers.'],
                ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Select home age & foundation type', 'text' => 'Homes older than 30–50 years or homes with crawlspaces/basements often carry a small surcharge due to inspection complexity.'],
                ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Choose your US region or state tier', 'text' => 'Select your regional cost tier (standard, high-cost metro, or lower-cost rural area).'],
                ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Select specialty add-on tests', 'text' => 'Check any additional inspections needed: radon gas testing, sewer scope camera, mold air sampling, termite/WDO, or pool inspection.'],
                ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Review itemized cost estimate', 'text' => 'View total cost range, standard inspection breakdown, and add-on inspection fees.'],
            ],
        ],
        [
            '@type'      => 'FAQPage',
            'mainEntity' => [
                ['@type' => 'Question', 'name' => 'How much does a standard home inspection cost in 2026?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A standard home inspection in 2026 costs between $300 and $550 for an average 1,500 to 2,500 square foot single-family home. Small condos (under 1,000 sq ft) cost around $250 to $350, while larger homes (over 3,500 sq ft) can run $600 to $900 or more.']],
                ['@type' => 'Question', 'name' => 'Who pays for the home inspection — buyer or seller?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'The buyer almost always pays for the home inspection during the purchase process. This ensures the inspector is loyal to the buyer\'s interests and provides an impartial assessment. Sellers occasionally pay for a pre-listing inspection to discover issues before putting a property on the market.']],
                ['@type' => 'Question', 'name' => 'Is a sewer scope inspection worth the money?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes, a sewer scope inspection ($150–$300) is highly recommended, especially for homes older than 20 years or properties with mature trees nearby. Repairing or replacing a collapsed sewer line costs between $4,000 and $25,000, which is not covered by standard homeowners insurance.']],
                ['@type' => 'Question', 'name' => 'How much does radon testing cost?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Continuous radon monitor testing costs $125 to $250 when bundled with a standard home inspection, or $200 to $350 as a standalone test. Radon is an odorless radioactive gas and the second leading cause of lung cancer in the US. The EPA recommends mitigating any home with radon levels at or above 4.0 pCi/L.']],
                ['@type' => 'Question', 'name' => 'What is included in a standard home inspection?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A certified InterNACHI or ASHI home inspection covers: roof and flashing, attic and insulation, exterior siding and drainage, foundation and structure, electrical panel and wiring, plumbing systems and water heater, HVAC heating and cooling systems, doors, windows, and interior safety features.']],
                ['@type' => 'Question', 'name' => 'What is NOT covered in a home inspection?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Standard home inspections do not cover concealed walls, internal plumbing lines behind drywall, underground sewer lines, septic tanks, wells, swimming pools, chimneys (internal flue), radon, mold, asbestos, lead paint, or pest/termite damage unless specifically added as separate services.']],
                ['@type' => 'Question', 'name' => 'How long does a home inspection take?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A typical home inspection for a 2,000 square foot home takes 2.5 to 3.5 hours on-site. Larger homes (3,500+ sq ft) or older historic properties can take 4 to 6 hours. Buyers receive a comprehensive digital report with photos and severity ratings within 24 to 48 hours.']],
                ['@type' => 'Question', 'name' => 'Can a home fail a home inspection?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'No. A home inspection is not a pass/fail test, and inspectors do not issue grades. The inspection report simply details the property\'s current condition, safety hazards, and needed repairs. Buyers use the findings to negotiate repair credits, price reductions, or walk away under their inspection contingency clause.']],
                ['@type' => 'Question', 'name' => 'Are home inspection fees tax deductible?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'For a primary residence, home inspection fees are generally not directly tax deductible. However, they are added to your property\'s cost basis, which helps reduce capital gains tax when you sell the home in the future. For rental and investment properties, inspection fees are deductible as an ordinary business expense.']],
            ],
        ],
    ],
    ['@type' => 'BreadcrumbList', 'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Real Estate', 'item' => 'https://americacalculator.com/real-estate/'],
      ['@type' => 'ListItem', 'position' => 3, 'name' => 'Home Inspection Cost Calculator', 'item' => 'https://americacalculator.com/real-estate/home-inspection-cost-calculator'],
    ]],

];

require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body { background: #f5f7fa; }
.hic-page-wrap {
  max-width: 1320px;
  margin: 0 auto;
  padding: 2rem 1.5rem 4rem;
  display: grid;
  grid-template-columns: 220px 1fr 260px;
  gap: 2rem;
  align-items: start;
}

/* Sidebar TOC */
.toc-sidebar {
  position: sticky;
  top: 6rem;
  background: #fff;
  border-radius: 12px;
  border: 1px solid #e8edf5;
  box-shadow: 0 2px 12px rgba(0,0,0,0.04);
  overflow: hidden;
}
.toc-sidebar-header {
  background: linear-gradient(135deg, #0e7490 0%, #0284c7 100%);
  color: #fff;
  padding: 1rem 1.25rem;
  font-weight: 700;
  font-size: 0.85rem;
  text-transform: uppercase;
  letter-spacing: 0.8px;
}
.toc-list { list-style: none; padding: 0.75rem 0; margin: 0; }
.toc-list li a {
  display: block;
  padding: 0.5rem 1.25rem;
  font-size: 0.85rem;
  color: #475569;
  text-decoration: none;
  border-left: 3px solid transparent;
  transition: all 0.2s;
  line-height: 1.4;
}
.toc-list li a:hover, .toc-list li a.toc-active {
  color: #0284c7;
  background: #f0f9ff;
  border-left-color: #0284c7;
}
.toc-divider { height: 1px; background: #f1f5f9; margin: 0.5rem 0; }
.toc-related-label {
  padding: 0.5rem 1.25rem;
  font-size: 0.78rem;
  font-weight: 700;
  color: #94a3b8;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}
.toc-related-list { list-style: none; padding: 0; margin: 0 0 0.75rem; }
.toc-related-list li a {
  display: block;
  padding: 0.4rem 1.25rem;
  font-size: 0.82rem;
  color: #64748b;
  text-decoration: none;
  transition: color 0.15s;
}
.toc-related-list li a:hover { color: #0284c7; }

/* Main Content */
.main-content { min-width: 0; }
.page-hero { margin-bottom: 2rem; }
.page-hero h1 { font-size: 2.1rem; color: #0f172a; margin: 0 0 0.6rem; line-height: 1.2; }
.page-hero .hero-desc { font-size: 1.05rem; color: #64748b; line-height: 1.65; margin: 0 0 0.75rem; border-left: 4px solid #bae6fd; padding-left: 1rem; }
.page-hero .breadcrumb { font-size: 0.8rem; color: #94a3b8; margin-bottom: 0.75rem; }
.page-hero .breadcrumb a { color: #64748b; text-decoration: none; }
.page-hero .breadcrumb a:hover { color: #0284c7; }

/* Calculator Card */
.calc-card {
  background: #fff;
  border-radius: 14px;
  box-shadow: 0 4px 24px rgba(0,0,0,0.05);
  border: 1px solid #eef2f7;
  margin-bottom: 2.5rem;
  overflow: hidden;
}
.calc-inner {
  display: grid;
  grid-template-columns: 1.15fr 1fr;
  gap: 0;
}
.calc-form-panel {
  padding: 2rem;
  border-right: 1px solid #f0f4fa;
}
.calc-results-panel {
  padding: 2rem;
  background: linear-gradient(160deg, #f0f9ff 0%, #e0f2fe 100%);
}

/* Form Styles */
.form-field { margin-bottom: 1.25rem; }
.form-field label {
  display: block;
  font-weight: 600;
  font-size: 0.9rem;
  color: #1e293b;
  margin-bottom: 0.45rem;
}
.form-field input, .form-field select {
  width: 100%;
  padding: 12px 14px;
  border: 1.5px solid #d1dae8;
  border-radius: 8px;
  font-size: 0.98rem;
  color: #0f172a;
  outline: none;
  transition: border-color 0.2s, box-shadow 0.2s;
  box-sizing: border-box;
  background: #fff;
}
.form-field input:focus, .form-field select:focus {
  border-color: #0284c7;
  box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.12);
}
.form-field .field-hint { font-size: 0.78rem; color: #94a3b8; margin-top: 0.35rem; line-height: 1.4; }

.form-grid-2 {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
}

.addons-header {
  font-size: 0.88rem;
  font-weight: 700;
  color: #0f172a;
  margin: 1.25rem 0 0.6rem;
  padding-bottom: 0.35rem;
  border-bottom: 1px solid #f1f5f9;
}
.checkbox-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0.5rem;
  margin-bottom: 1.25rem;
}
.checkbox-item {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  background: #f8fafc;
  padding: 8px 10px;
  border-radius: 6px;
  border: 1px solid #e2e8f0;
  font-size: 0.84rem;
  color: #334155;
  cursor: pointer;
  user-select: none;
}
.checkbox-item input {
  accent-color: #0284c7;
  width: 16px;
  height: 16px;
}
.checkbox-item:hover {
  background: #f0f9ff;
  border-color: #bae6fd;
}

.btn-calc {
  width: 100%;
  background: linear-gradient(135deg, #0e7490 0%, #0284c7 100%);
  color: #fff;
  padding: 15px;
  border: none;
  border-radius: 9px;
  font-size: 1rem;
  font-weight: 700;
  cursor: pointer;
  margin-top: 0.5rem;
  transition: opacity 0.2s, transform 0.15s;
  letter-spacing: 0.3px;
}
.btn-calc:hover { opacity: 0.93; transform: translateY(-1px); }

/* Results */
.results-heading { font-size: 1.15rem; font-weight: 700; color: #0f172a; margin: 0 0 0.25rem; }
.results-sub { font-size: 0.85rem; color: #64748b; margin: 0 0 1.25rem; }
.result-boxes { display: grid; grid-template-columns: 1fr; gap: 0.75rem; margin-bottom: 1.25rem; }
.res-box {
  background: #fff;
  border: 1.5px solid #e8edf5;
  border-radius: 10px;
  padding: 1.25rem 1rem;
  transition: box-shadow 0.2s;
}
.res-box:hover { box-shadow: 0 4px 12px rgba(0,0,0,0.07); }
.res-box.primary {
  background: linear-gradient(135deg, #0e7490, #0284c7);
  border-color: transparent;
  box-shadow: 0 6px 18px rgba(2, 132, 199, 0.25);
}
.res-val {
  display: block;
  font-size: 1.55rem;
  font-weight: 800;
  color: #0284c7;
  margin-bottom: 0.25rem;
  line-height: 1;
}
.res-box.primary .res-val { color: #fff; font-size: 1.85rem; }
.res-lbl { font-size: 0.8rem; color: #64748b; font-weight: 600; }
.res-box.primary .res-lbl { color: rgba(255,255,255,0.85); }
.res-breakdown {
  display: flex;
  justify-content: space-between;
  padding: 0.5rem 0;
  border-bottom: 1px solid #e2e8f0;
  font-size: 0.85rem;
  color: #475569;
}
.res-breakdown:last-child { border-bottom: none; }
.res-breakdown strong { color: #0f172a; }

/* Content */
.content-section {
  background: #fff;
  border-radius: 14px;
  border: 1px solid #eef2f7;
  box-shadow: 0 2px 12px rgba(0,0,0,0.03);
  padding: 2.25rem;
  margin-bottom: 2rem;
  scroll-margin-top: 6rem;
}
.content-section h2 {
  font-size: 1.65rem;
  color: #0f172a;
  margin: 0 0 1.25rem;
  padding-bottom: 0.75rem;
  border-bottom: 2px solid #f0f4fa;
}
.content-section h3 {
  font-size: 1.2rem;
  color: #1e293b;
  margin: 1.75rem 0 0.75rem;
}
.content-section p {
  color: #475569;
  line-height: 1.75;
  margin-bottom: 1.25rem;
  font-size: 1rem;
}
.content-section ul, .content-section ol {
  color: #475569;
  line-height: 1.75;
  padding-left: 1.5rem;
  margin-bottom: 1.25rem;
}
.content-section li { margin-bottom: 0.5rem; }
.content-section strong { color: #1e293b; }

.cost-table {
  width: 100%;
  border-collapse: collapse;
  border-radius: 10px;
  overflow: hidden;
  border: 1px solid #e8edf5;
  margin-bottom: 1.5rem;
}
.cost-table th {
  background: #0e7490;
  color: #fff;
  padding: 13px 16px;
  text-align: left;
  font-size: 0.88rem;
  font-weight: 600;
}
.cost-table td {
  padding: 12px 16px;
  border-bottom: 1px solid #f1f5f9;
  font-size: 0.9rem;
  color: #334155;
}
.cost-table tr:last-child td { border-bottom: none; }
.cost-table tr:nth-child(even) td { background: #f8fafc; }
.cost-table .val { color: #0284c7; font-weight: 700; }
.cost-table .val-high { color: #b91c1c; font-weight: 700; }

.howto-list {
  list-style: none;
  padding: 0;
  margin: 1.25rem 0 0;
  counter-reset: howto-counter;
}
.howto-list li {
  position: relative;
  padding-left: 3.5rem;
  margin-bottom: 1.75rem;
  counter-increment: howto-counter;
}
.howto-list li::before {
  content: counter(howto-counter);
  position: absolute;
  left: 0; top: 0;
  width: 34px; height: 34px;
  background: linear-gradient(135deg, #0e7490, #0284c7);
  color: #fff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  font-size: 0.95rem;
}
.howto-list li strong { color: #0f172a; display: block; margin-bottom: 0.25rem; font-size: 1rem; }
.howto-list li span { color: #475569; line-height: 1.65; font-size: 0.97rem; }

.info-box {
  background: #f0f9ff;
  border-left: 4px solid #0284c7;
  border-radius: 0 8px 8px 0;
  padding: 1rem 1.25rem;
  margin: 1.25rem 0;
  font-size: 0.95rem;
  color: #0c4a6e;
  line-height: 1.6;
}
.warning-box {
  background: #fefce8;
  border-left: 4px solid #ca8a04;
  border-radius: 0 8px 8px 0;
  padding: 1rem 1.25rem;
  margin: 1.25rem 0;
  font-size: 0.95rem;
  color: #713f12;
  line-height: 1.6;
}

/* FAQ */
.faq-item { border-bottom: 1px solid #f0f4fa; padding-bottom: 1.25rem; margin-bottom: 1.25rem; }
.faq-item:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
.faq-q { font-size: 1.02rem; font-weight: 700; color: #0f172a; margin-bottom: 0.6rem; cursor: pointer; display: flex; justify-content: space-between; align-items: flex-start; gap: 1rem; }
.faq-q::after { content: '+'; font-size: 1.3rem; color: #0284c7; flex-shrink: 0; }
.faq-item.open .faq-q::after { content: '−'; }
.faq-a { color: #475569; line-height: 1.7; font-size: 0.97rem; display: none; }
.faq-item.open .faq-a { display: block; }

/* Right Sidebar */
.right-sidebar {
  position: sticky;
  top: 6rem;
  display: flex;
  flex-direction: column;
  gap: 1.25rem;
}
.sidebar-widget {
  background: #fff;
  border-radius: 12px;
  border: 1px solid #e8edf5;
  box-shadow: 0 4px 18px rgba(0,0,0,0.05);
  overflow: hidden;
}
.widget-header-cyan {
  background: linear-gradient(135deg, #0e7490, #0284c7);
  color: #fff;
  padding: 1rem 1.25rem;
}
.widget-header-cyan .widget-title { font-size: 1rem; font-weight: 700; }
.widget-header-cyan .widget-sub { font-size: 0.8rem; color: rgba(255,255,255,0.75); margin-top: 0.2rem; }
.widget-body { padding: 0.75rem 0; }
.widget-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.65rem 1.25rem;
  border-bottom: 1px solid #f8fafc;
}
.widget-row:last-child { border-bottom: none; }
.widget-row:hover { background: #f0f9ff; }
.widget-label { font-size: 0.82rem; font-weight: 600; color: #334155; }
.widget-sublabel { font-size: 0.72rem; color: #94a3b8; }
.widget-value { font-size: 0.92rem; font-weight: 800; color: #0284c7; text-align: right; }

.quick-access-widget {
  background: #fff;
  border-radius: 12px;
  border: 1px solid #e8edf5;
  box-shadow: 0 2px 12px rgba(0,0,0,0.04);
  overflow: hidden;
}
.widget-head {
  padding: 0.9rem 1.25rem;
  background: #f8fafc;
  border-bottom: 1px solid #f0f4fa;
  font-size: 0.83rem;
  font-weight: 700;
  color: #475569;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}
.widget-links { list-style: none; padding: 0.5rem 0; margin: 0; }
.widget-links li a {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.65rem 1.25rem;
  font-size: 0.85rem;
  color: #475569;
  text-decoration: none;
  border-left: 3px solid transparent;
  transition: all 0.15s;
  font-weight: 500;
}
.widget-links li a:hover { color: #0284c7; background: #f0f9ff; border-left-color: #0284c7; }

@media (max-width: 1200px) { .hic-page-wrap { grid-template-columns: 200px 1fr 240px; } }
@media (max-width: 1024px) { .hic-page-wrap { grid-template-columns: 1fr; } .toc-sidebar, .right-sidebar { position: static; } .right-sidebar { display: grid; grid-template-columns: 1fr 1fr; } }
@media (max-width: 768px) {
  .hic-page-wrap { padding: 1rem 1rem 3rem; }
  .calc-inner { grid-template-columns: 1fr; }
  .calc-form-panel { border-right: none; border-bottom: 1px solid #f0f4fa; }
  .form-grid-2, .checkbox-grid { grid-template-columns: 1fr; }
  .right-sidebar { grid-template-columns: 1fr; }
  .page-hero h1 { font-size: 1.6rem; }
}
</style>

<main id="main-content">
<div class="hic-page-wrap">

  <!-- LEFT TOC -->
  <aside class="toc-sidebar">
    <div class="toc-sidebar-header">🔍 In This Article</div>
    <ul class="toc-list">
      <li><a href="#calculator" class="toc-active">Cost Calculator</a></li>
      <li><a href="#average-cost">Average Costs by Size</a></li>
      <li><a href="#addon">Add-On Inspection Fees</a></li>
      <li><a href="#costs-by-state">State-by-State Pricing</a></li>
      <li><a href="#whats-included">What's Included vs Excluded</a></li>
      <li><a href="#red-flag">Top Inspection Red Flags</a></li>
      <li><a href="#how-to-hire">How to Choose an Inspector</a></li>
      <li><a href="#faq">Frequently Asked Questions</a></li>
    </ul>
    <div class="toc-divider"></div>
    <div class="toc-related-label">Related Calculators</div>
    <ul class="toc-related-list">
      <li><a href="<?php echo $baseUrl; ?>/real-estate/closing-cost-calculator">Closing Cost Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/real-estate/mortgage-calculator">Mortgage Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/real-estate/down-payment-calculator">Down Payment</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/home-addition-cost-calculator">Home Addition Cost</a></li>
      <li><a href="<?php echo $baseUrl; ?>/real-estate/cap-rate-calculator">Cap Rate Calculator</a></li>
    </ul>
  </aside>

  <!-- MAIN CONTENT -->
  <div class="main-content">

    <div class="page-hero">
      <div class="breadcrumb">
        <a href="<?php echo $baseUrl; ?>/index.php">Home</a> º
        <a href="<?php echo $baseUrl; ?>/real-estate/">Real Estate</a> º
        Home Inspection Cost Calculator
      </div>
      <h1>Home Inspection Cost Calculator 2026 | Average Prices by Square Feet & State</h1>
      <div style="display:flex;align-items:center;flex-wrap:wrap;gap:10px;margin-bottom:.75rem;">
        <span style="font-size:.82rem;color:#64748b;">Reviewed by the <strong style="color:#1e293b;">AmericaCalculator.com editorial team</strong></span>
        <span style="background:#e0f2fe;color:#0369a1;font-size:.75rem;font-weight:700;padding:3px 10px;border-radius:20px;border:1px solid #bae6fd;">🕐 Last Updated: August 2026</span>
      </div>
      <p class="hero-desc">
        Calculate your total <strong>home inspection cost</strong> for any single-family home, condo, townhouse, or multi-family property.
        Includes base square footage tiers, property age surcharges, regional cost adjustments, and optional specialized tests
        like <strong>radon gas, sewer scope cameras, mold testing, termite/WDO, and chimney flues</strong>.
      </p>
    </div>

    <!-- CALCULATOR -->
    <div class="calc-card" id="calculator">
      <div class="calc-inner">
        <div class="calc-form-panel">
          <div class="form-grid-2">
            <div class="form-field">
              <label for="sqft">Home Size (Square Feet)</label>
              <input type="number" id="sqft" value="2200" min="400" max="15000" step="50" autocomplete="off">
              <div class="field-hint">Total interior finished area</div>
            </div>
            <div class="form-field">
              <label for="property_type">Property Type</label>
              <select id="property_type">
                <option value="single_family" selected>Single-Family Home</option>
                <option value="condo">Condo / Apartment (Interior only)</option>
                <option value="townhouse">Townhouse / Rowhouse</option>
                <option value="multi_family">Multi-Family (Duplex/Triplex)</option>
              </select>
            </div>
          </div>

          <div class="form-grid-2">
            <div class="form-field">
              <label for="home_age">Home Age</label>
              <select id="home_age">
                <option value="new">New Construction (< 5 yrs)</option>
                <option value="standard" selected>Standard (5–30 yrs)</option>
                <option value="older">Older (30–60 yrs, +$50)</option>
                <option value="historic">Historic (60+ yrs, +$100)</option>
              </select>
            </div>
            <div class="form-field">
              <label for="location_tier">Location Cost Tier</label>
              <select id="location_tier">
                <option value="rural">Rural / Low-Cost Area (-15%)</option>
                <option value="suburban" selected>Suburban / Mid-Size Metro (Average)</option>
                <option value="metro">High-Cost Metro (NYC, LA, SF, Seattle, +25%)</option>
              </select>
            </div>
          </div>

          <div class="addons-header">🧪 Select Add-On Specialty Inspections</div>
          <div class="checkbox-grid">
            <label class="checkbox-item">
              <input type="checkbox" id="add_radon" checked>
              <span>Radon Gas Test (+$150)</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" id="add_sewer" checked>
              <span>Sewer Scope Camera (+$225)</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" id="add_termite">
              <span>Termite / WDO (+$100)</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" id="add_mold">
              <span>Mold Air Quality (+$250)</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" id="add_pool">
              <span>Pool & Spa (+$175)</span>
            </label>
            <label class="checkbox-item">
              <input type="checkbox" id="add_chimney">
              <span>Chimney / Level 2 (+$150)</span>
            </label>
          </div>

          <button type="button" class="btn-calc" id="hic-calc-btn">🔍 Calculate Inspection Estimate</button>
        </div>

        <div class="calc-results-panel">
          <h3 class="results-heading">Your Inspection Cost Estimate</h3>
          <p class="results-sub" id="results-desc">2,200 sq ft Single-Family, Suburban Area</p>

          <div class="result-boxe">
            <div class="res-box primary">
              <span class="res-val" id="res_total">$775 “ $925</span>
              <span class="res-lbl">Estimated Total Inspection Package</span>
            </div>
          </div>

          <div style="background:#fff;border-radius:10px;padding:1.2rem;border:1.5px solid #e8edf5;">
            <div style="font-weight:700;font-size:0.88rem;color:#0f172a;margin-bottom:0.75rem;">📋 Cost Itemization</div>
            <div class="res-breakdown"><span>Baseline Inspection:</span><strong id="res_base">$400 “ $475</strong></div>
            <div class="res-breakdown"><span>Age / Complexity Fee:</span><strong id="res_age_fee">$0</strong></div>
            <div class="res-breakdown"><span>Selected Add-On Tests:</span><strong id="res_addons_fee">$375 “ $450</strong></div>
            <div class="res-breakdown"><span>Estimated Time On-Site:</span><strong id="res_time">3.0 “ 3.5 hours</strong></div>
          </div>

          <div class="info-box" style="margin-top:1rem;margin-bottom:0;">
            💡 <strong>Money-Saving Tip:</strong> Bundling specialty tests (radon + sewer scope + termite) with your primary inspector usually saves $100–$200 versus ordering each test separately from individual contractors.
          </div>
        </div>
      </div>
    </div>

    <!-- AVERAGE COSTS BY SIZE -->
    <section class="content-section" id="average-cost">
      <h2>Average Home Inspection Cost by Home Size (2026)</h2>
      <p>
        The square footage of a home is the primary factor home inspectors use to set their baseline price.
        Larger homes require more inspection time, more electrical circuits to test, larger roof areas, and often multiple HVAC systems.
      </p>
      <table class="cost-table">
        <thead>
          <tr>
            <th>Home Size (Sq Ft)</th>
            <th>Property Type Example</th>
            <th>Typical Price Range</th>
            <th>Estimated On-Site Time</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Under 1,000 sq ft</strong></td>
            <td>Studio / 1-2 Bedroom Condo</td>
            <td class="val">$250 “ $350</td>
            <td>1.5 “ 2.0 hours</td>
          </tr>
          <tr>
            <td><strong>1,000 “ 1,999 sq ft</strong></td>
            <td>Starter Single-Family / Townhouse</td>
            <td class="val">$350 “ $450</td>
            <td>2.0 “ 3.0 hours</td>
          </tr>
          <tr>
            <td><strong>2,000 “ 2,999 sq ft</strong></td>
            <td>Average US Single-Family Home</td>
            <td class="val">$425 “ $550</td>
            <td>2.5 “ 3.5 hours</td>
          </tr>
          <tr>
            <td><strong>3,000 “ 3,999 sq ft</strong></td>
            <td>Large Executive Home</td>
            <td class="val">$525 “ $700</td>
            <td>3.5 “ 4.5 hours</td>
          </tr>
          <tr>
            <td><strong>4,000 “ 4,999 sq ft</strong></td>
            <td>Luxury Home (multiple HVAC units)</td>
            <td class="val">$650 “ $875</td>
            <td>4.0 “ 5.5 hours</td>
          </tr>
          <tr>
            <td><strong>5,000+ sq ft</strong></td>
            <td>Custom Estate / Historic Mansion</td>
            <td class="val-high">$900 “ $1,500+</td>
            <td>5.0 “ 7.0+ hours</td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- ADDONS -->
    <section class="content-section" id="addon">
      <h2>Add-On Inspection Costs & Recommended Tests</h2>
      <p>
        A standard home inspection is visual and non-invasive. Specialty inspections require specialized diagnostic equipment
        (cameras, continuous monitors, laboratory air analysis) and carry additional fees:
      </p>
      <table class="cost-table">
        <thead>
          <tr>
            <th>Specialty Inspection</th>
            <th>Standalone Cost</th>
            <th>Bundled Cost</th>
            <th>When It's Recommended</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Sewer Scope Inspection</strong></td>
            <td>$250 “ $375</td>
            <td class="val">$175 “ $250</td>
            <td>Homes older than 20 years, clay/cast iron pipes, or homes with large yard trees.</td>
          </tr>
          <tr>
            <td><strong>Radon Gas Testing</strong></td>
            <td>$200 “ $325</td>
            <td class="val">$125 “ $175</td>
            <td>Recommended in all EPA Zone 1 and Zone 2 high-radon regions nationwide.</td>
          </tr>
          <tr>
            <td><strong>Termite / WDO Inspection</strong></td>
            <td>$125 “ $200</td>
            <td class="val">$75 “ $125</td>
            <td>Required by VA and FHA loans in designated termite-risk states.</td>
          </tr>
          <tr>
            <td><strong>Mold Air Sampling (2-3 samples)</strong></td>
            <td>$350 “ $550</td>
            <td class="val">$200 “ $300</td>
            <td>If musty odors, past basement leaks, or visible staining exist.</td>
          </tr>
          <tr>
            <td><strong>Swimming Pool & Spa</strong></td>
            <td>$225 “ $350</td>
            <td class="val">$150 “ $225</td>
            <td>Any in-ground or above-ground pool, pump, heater, and safety barrier.</td>
          </tr>
          <tr>
            <td><strong>Chimney Inspection (Level 2)</strong></td>
            <td>$250 “ $450</td>
            <td class="val">$150 “ $250</td>
            <td>Wood-burning fireplaces and chimneys in homes over 15 years old.</td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- STATE BY STATE PRICING -->
    <section class="content-section" id="costs-by-state">
      <h2>Average Home Inspection Cost by US State (2026)</h2>
      <p>
        Home inspector rates mirror local labor costs, insurance requirements, and licensing standards.
        Here is what buyers typically pay for an average 2,000 sq ft home across major states:
      </p>
      <table class="cost-table">
        <thead>
          <tr>
            <th>State</th>
            <th>Average General Inspection</th>
            <th>Typical Full Package (with Radon + Sewer)</th>
            <th>Cost Tier</th>
          </tr>
        </thead>
        <tbody>
          <tr><td><strong>California (LA / Bay Area)</strong></td><td>$475 “ $650</td><td>$900 “ $1,250</td><td class="val-high">High</td></tr>
          <tr><td><strong>New York (NYC / Long Island)</strong></td><td>$500 “ $700</td><td>$950 “ $1,300</td><td class="val-high">High</td></tr>
          <tr><td><strong>Washington (Seattle Metro)</strong></td><td>$450 “ $600</td><td>$850 “ $1,150</td><td class="val-high">High</td></tr>
          <tr><td><strong>Florida (Miami / Orlando / Tampa)</strong></td><td>$375 “ $500</td><td>$650 “ $900</td><td>Average</td></tr>
          <tr><td><strong>Texas (Dallas / Houston / Austin)</strong></td><td>$380 “ $520</td><td>$675 “ $925</td><td>Average</td></tr>
          <tr><td><strong>Illinois (Chicago Metro)</strong></td><td>$400 “ $550</td><td>$750 “ $1,050</td><td>Average</td></tr>
          <tr><td><strong>Ohio (Columbus / Cleveland)</strong></td><td>$340 “ $450</td><td>$600 “ $800</td><td class="val">Affordable</td></tr>
          <tr><td><strong>North Carolina (Charlotte / Raleigh)</strong></td><td>$360 “ $480</td><td>$625 “ $850</td><td class="val">Affordable</td></tr>
          <tr><td><strong>Georgia (Atlanta Metro)</strong></td><td>$350 “ $475</td><td>$620 “ $840</td><td class="val">Affordable</td></tr>
        </tbody>
      </table>
    </section>

    <!-- WHAT'S INCLUDED VS EXCLUDED -->
    <section class="content-section" id="whats-included">
      <h2>What a Home Inspection Covers vs. What Is Excluded</h2>

      <h3>✅ Standard Inclusions (ASHI / InterNACHI Standards)</h3>
      <ul>
        <li><strong>Roof & Exterior:</strong> Shingles, flashing, gutters, downspouts, soffits, eaves, siding, decks, porches, and grading away from the foundation.</li>
        <li><strong>Structural Components:</strong> Foundation walls, basement floors, crawlspace joists, load-bearing posts, and attic roof framing.</li>
        <li><strong>Electrical System:</strong> Service drop, main electrical panel, circuit breakers, grounding, branch wiring, GFCI/AFCI outlets, and fixture operation.</li>
        <li><strong>Plumbing System:</strong> Main water shutoff valve, supply piping, drain/waste/vent lines, water pressure, water heater condition, faucets, toilets, and sinks.</li>
        <li><strong>HVAC Systems:</strong> Furnace, boiler, heat pump, central AC compressor, ductwork, thermostat controls, and basic air filter condition.</li>
        <li><strong>Interior Elements:</strong> Windows, interior doors, drywall, ceiling staining, stairs, handrails, smoke alarms, and built-in appliances (oven, dishwasher).</li>
      </ul>

      <h3>❌ Standard Exclusions (Requires Specialty Contractor)</h3>
      <ul>
        <li>Internal condition of underground sewer lines and septic tanks.</li>
        <li>Concealed electrical wiring or plumbing leaks hidden inside finished walls.</li>
        <li>Environmental hazards: airborne mold spores, radon gas, lead paint, and asbestos insulation.</li>
        <li>Lawn sprinkler irrigation systems and private water well water quality testing.</li>
        <li>Structural engineering load calculations or soil stability geotechnical reports.</li>
      </ul>
    </section>

    <!-- RED FLAGS -->
    <section class="content-section" id="red-flag">
      <h2>Top Home Inspection Red Flags & Repair Costs</h2>
      <p>
        If your inspection report identifies any of the following critical defects, use the findings to request seller credits,
        require licensed contractor repairs prior to closing, or exercise your inspection contingency clause:
      </p>
      <table class="cost-table">
        <thead>
          <tr>
            <th>Defect / Safety Issue</th>
            <th>Potential Hazard</th>
            <th>Average Repair / Replacement Cost</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Failing or Aging Roof</strong></td>
            <td>Active interior water damage & mold</td>
            <td class="val-high">$8,000 “ $22,000</td>
          </tr>
          <tr>
            <td><strong>Collapsed Sewer Line / Roots</strong></td>
            <td>Raw sewage backup into home</td>
            <td class="val-high">$4,500 “ $20,000</td>
          </tr>
          <tr>
            <td><strong>Foundation Settling & Major Cracks</strong></td>
            <td>Structural collapse / wall movement</td>
            <td class="val-high">$5,000 “ $25,000+</td>
          </tr>
          <tr>
            <td><strong>Outdated Electrical (Knob & Tube / Federal Pacific)</strong></td>
            <td>Severe fire hazard / uninsurable</td>
            <td class="val-high">$3,500 “ $12,000</td>
          </tr>
          <tr>
            <td><strong>Defective HVAC System</strong></td>
            <td>No heating/cooling / carbon monoxide risk</td>
            <td>$4,500 “ $11,000</td>
          </tr>
          <tr>
            <td><strong>Elevated Radon (>4.0 pCi/L)</strong></td>
            <td>Radioactive gas / lung cancer risk</td>
            <td>$1,100 “ $2,200 (Mitigation System)</td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- HOW TO HIRE -->
    <section class="content-section" id="how-to-hire">
      <h2>How to Choose a Qualified Home Inspector</h2>
      <ul class="howto-list">
        <li>
          <strong>Verify Professional Certification</strong>
          <span>Look for inspectors certified by either <strong>ASHI (American Society of Home Inspectors)</strong> or <strong>InterNACHI (International Association of Certified Home Inspectors)</strong>. These organizations require strict continuing education and rigorous testing.</span>
        </li>
        <li>
          <strong>Check Errors & Omissions (E&O) Insurance</strong>
          <span>Ensure your inspector carries both General Liability and E&O insurance. This protects you in the rare event a major defect is overlooked.</span>
        </li>
        <li>
          <strong>Ask for a Sample Report</strong>
          <span>Modern inspectors provide digital PDF reports with clear high-resolution photos, infrared thermal imaging, and categorized repair priorities (Immediate Safety Hazard vs. Maintenance Item).</span>
        </li>
        <li>
          <strong>Attend the Inspection in Person</strong>
          <span>Always attend at least the final hour of the inspection walkthrough. A good inspector will walk you through the property, point out water shutoff valves, and explain routine maintenance requirements.</span>
        </li>
      </ul>
    </section>

    <!-- FAQ -->
    <section class="content-section" id="faq">
      <h2>Frequently Asked Questions — Home Inspection Costs</h2>
      <div class="faq-item open">
        <div class="faq-q">How much does a standard home inspection cost in 2026?</div>
        <div class="faq-a">A standard home inspection in 2026 costs between <strong>$300 and $550</strong> for an average 1,500 to 2,500 square foot single-family home. Smaller condos cost $250–$350, while larger homes (over 3,500 sq ft) cost $600–$900+.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Who pays for the home inspection — buyer or seller?</div>
        <div class="faq-a">The <strong>buyer</strong> almost always pays for the inspection. This ensures the inspector is working exclusively in the buyer's financial and safety interests.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Is a sewer scope inspection worth the money?</div>
        <div class="faq-a"><strong>Yes.</strong> A $175–$250 sewer scope can uncover collapsed clay pipes, tree root intrusion, or belly dips that cost $4,000–$25,000 to dig up and replace. Standard homeowners insurance policies do NOT cover exterior sewer line replacements.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">How much does radon testing cost?</div>
        <div class="faq-a">Radon testing typically adds <strong>$125 to $175</strong> when bundled with your home inspection ($200–$325 if ordered separately). An electronic continuous monitor tests indoor air levels over a 48-hour period.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">What is included in a standard home inspection?</div>
        <div class="faq-a">A certified inspection covers the roof, attic insulation, exterior drainage, foundation, electrical panels, plumbing fixtures, water heater, HVAC systems, windows, doors, and major appliances.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">What is NOT covered in a home inspection?</div>
        <div class="faq-a">Standard inspections exclude inside finished walls, underground sewer lines, swimming pools, septic tanks, wells, asbestos, radon, lead paint, and mold unless ordered as specific specialty add-ons.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">How long does a home inspection take?</div>
        <div class="faq-a">An average home inspection takes <strong>2.5 to 3.5 hours</strong> on-site. Large or historic properties can take 4 to 6 hours. Reports are usually delivered within 24 hours.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Can a home fail a home inspection?</div>
        <div class="faq-a">No. Inspections are not pass/fail. The report provides an objective assessment that buyers use to negotiate seller repairs, price credits, or cancel the contract under the inspection contingency.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Are home inspection fees tax deductible?</div>
        <div class="faq-a">For primary residences, inspection fees are added to your cost basis (lowering future capital gains tax when selling). For rental investment properties, they are deductible as an ordinary business expense.</div>
      </div>
    </section>

  </div><!-- /main-content -->

  <!-- RIGHT SIDEBAR -->
  <aside class="right-sidebar">

    <div class="sidebar-widget">
      <div class="widget-header-cyan">
        <div class="widget-title">🔍 Typical Add-On Costs</div>
        <div class="widget-sub">Bundled average pricing</div>
      </div>
      <div class="widget-body">
        <div class="widget-row"><div><div class="widget-label">Sewer Scope</div><div class="widget-sublabel">HD camera pipe inspection</div></div><div class="widget-value">$175–$250</div></div>
        <div class="widget-row"><div><div class="widget-label">Radon Gas</div><div class="widget-sublabel">48-hr continuous monitor</div></div><div class="widget-value">$125–$175</div></div>
        <div class="widget-row"><div><div class="widget-label">Termite / WDO</div><div class="widget-sublabel">Wood-destroying organisms</div></div><div class="widget-value">$75–$125</div></div>
        <div class="widget-row"><div><div class="widget-label">Mold Air Test</div><div class="widget-sublabel">Lab analysis (2-3 samples)</div></div><div class="widget-value">$200–$300</div></div>
        <div class="widget-row"><div><div class="widget-label">Pool & Spa</div><div class="widget-sublabel">Pump, filters, heater</div></div><div class="widget-value">$150–$225</div></div>
      </div>
    </div>

    <div class="quick-access-widget">
      <div class="widget-head">🔗 Real Estate Tools</div>
      <ul class="widget-link">
        <li><a href="<?php echo $baseUrl; ?>/real-estate/closing-cost-calculator">🏡 Closing Cost Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/real-estate/mortgage-calculator">📊 Mortgage Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/real-estate/down-payment-calculator">💵 Down Payment Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/real-estate/cap-rate-calculator">📈 Cap Rate Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/loan-calculators/personal-loan-calculator">💳 Personal Loan Calculator</a></li>
      </ul>
    </div>

  </aside>

</div><!-- /hic-page-wrap -->
</main>

<script>
(function () {
  function fmtDollar(v) {
    return '$' + Math.round(v).toLocaleString('en-US');
  }

  function calculate() {
    var sqft = parseFloat(document.getElementById('sqft').value) || 2000;
    var propType = document.getElementById('property_type').value;
    var age = document.getElementById('home_age').value;
    var loc = document.getElementById('location_tier').value;

    // Base square footage calculation
    var baseLow = 325;
    var baseHigh = 400;

    if (sqft <= 1000) {
      baseLow = 250; baseHigh = 325;
    } else if (sqft <= 1800) {
      baseLow = 325; baseHigh = 425;
    } else if (sqft <= 2600) {
      baseLow = 400; baseHigh = 500;
    } else if (sqft <= 3500) {
      baseLow = 480; baseHigh = 620;
    } else if (sqft <= 5000) {
      baseLow = 620; baseHigh = 800;
    } else {
      var extra = (sqft - 5000) * 0.12;
      baseLow = 800 + extra;
      baseHigh = 1050 + (extra * 1.25);
    }

    // Property Type adjustment
    if (propType === 'condo') {
      baseLow *= 0.80;
      baseHigh *= 0.80;
    } else if (propType === 'townhouse') {
      baseLow *= 0.90;
      baseHigh *= 0.90;
    } else if (propType === 'multi_family') {
      baseLow *= 1.35;
      baseHigh *= 1.40;
    }

    // Location modifier
    var locMult = 1.0;
    if (loc === 'rural') locMult = 0.85;
    if (loc === 'metro') locMult = 1.25;

    baseLow *= locMult;
    baseHigh *= locMult;

    // Age surcharge
    var ageFee = 0;
    if (age === 'older') ageFee = 50 * locMult;
    if (age === 'historic') ageFee = 100 * locMult;

    // Addons
    var addonLow = 0;
    var addonHigh = 0;
    if (document.getElementById('add_radon').checked) { addonLow += 125 * locMult; addonHigh += 175 * locMult; }
    if (document.getElementById('add_sewer').checked) { addonLow += 175 * locMult; addonHigh += 250 * locMult; }
    if (document.getElementById('add_termite').checked) { addonLow += 75 * locMult; addonHigh += 125 * locMult; }
    if (document.getElementById('add_mold').checked) { addonLow += 200 * locMult; addonHigh += 300 * locMult; }
    if (document.getElementById('add_pool').checked) { addonLow += 150 * locMult; addonHigh += 225 * locMult; }
    if (document.getElementById('add_chimney').checked) { addonLow += 150 * locMult; addonHigh += 225 * locMult; }

    var totalLow = baseLow + ageFee + addonLow;
    var totalHigh = baseHigh + ageFee + addonHigh;

    // Time estimate
    var timeHours = 2.0 + (sqft / 1400);
    if (propType === 'condo') timeHours *= 0.75;
    if (age === 'historic') timeHours += 1.0;

    document.getElementById('res_total').textContent = fmtDollar(totalLow) + ' “ ' + fmtDollar(totalHigh);
    document.getElementById('res_base').textContent = fmtDollar(baseLow) + ' “ ' + fmtDollar(baseHigh);
    document.getElementById('res_age_fee').textContent = ageFee > 0 ? fmtDollar(ageFee) : '$0';
    document.getElementById('res_addons_fee').textContent = (addonLow + addonHigh) > 0 ? fmtDollar(addonLow) + ' “ ' + fmtDollar(addonHigh) : '$0';
    document.getElementById('res_time').textContent = timeHours.toFixed(1) + ' “ ' + (timeHours + 0.75).toFixed(1) + ' hours';

    var typeNames = { single_family: 'Single-Family Home', condo: 'Condo', townhouse: 'Townhouse', multi_family: 'Multi-Family Unit' };
    document.getElementById('results-desc').textContent = sqft.toLocaleString() + ' sq ft ' + typeNames[propType] + ', ' + loc + ' area';
  }

  // Event Listeners
  ['sqft'].forEach(function(id) {
    var el = document.getElementById(id);
    if (el) { el.addEventListener('input', calculate); }
  });
  ['property_type', 'home_age', 'location_tier', 'add_radon', 'add_sewer', 'add_termite', 'add_mold', 'add_pool', 'add_chimney'].forEach(function(id) {
    var el = document.getElementById(id);
    if (el) { el.addEventListener('change', calculate); }
  });
  document.getElementById('hic-calc-btn').addEventListener('click', calculate);

  // FAQ Accordion
  document.querySelectorAll('.faq-q').forEach(function (q) {
    q.addEventListener('click', function () {
      var item = q.parentElement;
      var wasOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(function (o) { o.classList.remove('open'); });
      if (!wasOpen) item.classList.add('open');
    });
  });

  calculate();
})();
</script>

<?php require_once '../includes/footer.php'; ?>
