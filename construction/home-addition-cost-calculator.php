<?php
$currentYear = date('Y');

$pageTitle       = "Home Addition Cost Calculator ($currentYear) — Room & Square Foot Costs | AmericaCalculator";
$metaDescription = "Calculate total costs to add a room, master suite, second story, bathroom, or kitchen extension in $currentYear. Itemized labor, trade breakdown, permits, and ROI.";
$metaKeywords    = 'home addition cost calculator, home addition cost estimator calculator, room addition cost calculator, estimate home addition cost, cost of home addition calculator, home addition cost per square foot calculator, second story addition cost calculator, 2026 home addition costs';

$schemaData = [
  '@context' => 'https://schema.org',
  '@graph' => [
    [
      '@type' => 'WebApplication',
      '@id' => 'https://americacalculator.com/construction/home-addition-cost-calculator#app',
      'name' => 'Home Addition Cost Estimator',
      'url' => 'https://americacalculator.com/construction/home-addition-cost-calculator',
      'applicationCategory' => 'ConstructionApplication',
      'operatingSystem' => 'All',
      'offers' => [
        '@type' => 'Offer',
        'price' => '0',
        'priceCurrency' => 'USD'
      ],
      'description' => "Calculate residential home addition costs, per-square-foot building estimates, room bump-outs, and second-story expansion costs."
    ],
    [
      '@type' => 'HowTo',
      '@id' => 'https://americacalculator.com/construction/home-addition-cost-calculator#howto',
      'name' => 'How to Estimate Home Addition Costs',
      'step' => [
        ['@type' => 'HowToStep', 'name' => 'Select Addition Type', 'text' => 'Choose your project type: master suite, standard bedroom, second-story addition, kitchen bump-out, or bathroom expansion.'],
        ['@type' => 'HowToStep', 'name' => 'Enter Dimensions or Square Footage', 'text' => 'Enter the planned addition width and length in feet or total square footage directly using the slider.'],
        ['@type' => 'HowToStep', 'name' => 'Select Finish Quality Tier', 'text' => 'Choose economy, standard, premium, or luxury custom finishes to calculate material and labor allowances.'],
        ['@type' => 'HowToStep', 'name' => 'Review Itemized Cost Breakdown', 'text' => 'View estimated foundation, framing, roofing, plumbing, electrical, HVAC, permit fees, and total contractor pricing in real time.']
      ]
    ],
    [
      '@type' => 'FAQPage',
      '@id' => 'https://americacalculator.com/construction/home-addition-cost-calculator#faq',
      'mainEntity' => [
        [
          '@type' => 'Question',
          'name' => "How much does a home addition cost in $currentYear?",
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => "In $currentYear, a standard ground-floor room addition costs between $100 and $200 per square foot, with total project costs ranging from $20,000 to $150,000+ depending on size and room type. The national average for a 400 sq ft standard room addition is approximately $46,000 to $55,000. Bathroom and kitchen additions average $175 to $300+ per square foot due to intensive plumbing and electrical rough-in."
          ]
        ],
        [
          '@type' => 'Question',
          'name' => 'What is the cheapest type of home addition?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'A basic ground-floor room addition (bedroom or living room) without plumbing is typically the least expensive at $80 to $130 per sq ft. A bump-out extension (pushing an exterior wall out 2 to 6 feet) can cost as little as $5,000 to $15,000 because it often utilizes cantilevered joists rather than full foundation excavation. Attached garages are also economical at $50 to $100 per sq ft.'
          ]
        ],
        [
          '@type' => 'Question',
          'name' => 'Do I need a building permit for a home addition?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'Yes. Virtually every municipality across the United States requires plan review and building permits for residential additions. Permit fees typically range from $500 to $3,000 based on projected construction valuation. Unpermitted additions can void homeowner insurance, fail municipal sales inspections, and incur costly teardown orders.'
          ]
        ],
        [
          '@type' => 'Question',
          'name' => 'Does a home addition increase property value?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'Yes. Adding legal livable square footage directly increases appraised home value. National remodeling data indicates additions recoup 50% to 77% of their project cost at resale, with secondary bathrooms and primary master suites delivering the highest ROI.'
          ]
        ],
        [
          '@type' => 'Question',
          'name' => 'How long does it take to construct a home addition?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'A standard ground-floor addition (200 to 400 sq ft) takes approximately 3 to 5 months from excavation to final sign-off. Larger additions or second-story projects typically require 6 to 12 months. Pre-construction architectural drafting and municipal permit processing often require an additional 1 to 3 months.'
          ]
        ],
        [
          '@type' => 'Question',
          'name' => 'Is it cheaper to build out (ground level) or build up (second story)?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'Building out is generally 15% to 25% cheaper per square foot ($100–$200/sqft vs $150–$300/sqft). Building up preserves yard space but requires structural engineering, foundation reinforcement, temporary roof tear-off, and staircase construction.'
          ]
        ],
        [
          '@type' => 'Question',
          'name' => 'What is the most expensive part of a home addition?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'For dry rooms (bedrooms, dens), framing and foundation work represent 30% to 40% of the total budget. For bathrooms and kitchens, plumbing rough-in, electrical upgrades, and custom cabinetry dominate the budget. Finish quality is the single most elastic variable, where luxury materials can double overall costs.'
          ]
        ],
        [
          '@type' => 'Question',
          'name' => 'How do I finance a residential home addition?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'Common financing mechanisms include: (1) Home Equity Loans with fixed monthly payments, (2) HELOCs (Home Equity Lines of Credit) with flexible draw periods, (3) Cash-out mortgage refinances, (4) Construction-to-permanent loans for large multi-story expansions, and (5) Unsecured personal renovation loans for projects under $40,000.'
          ]
        ]
      ]
    ],
    [
      '@type' => 'BreadcrumbList',
      'itemListElement' => [
        [
          '@type' => 'ListItem',
          'position' => 1,
          'name' => 'Home',
          'item' => 'https://americacalculator.com/'
        ],
        [
          '@type' => 'ListItem',
          'position' => 2,
          'name' => 'Construction Calculators',
          'item' => 'https://americacalculator.com/construction/'
        ],
        [
          '@type' => 'ListItem',
          'position' => 3,
          'name' => 'Home Addition Cost Calculator',
          'item' => 'https://americacalculator.com/construction/home-addition-cost-calculator'
        ]
      ]
    ]
  ]
];

require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>

<style>
/* ==========================================================================
   EXECUTIVE INSTITUTIONAL DESIGN — HOME ADDITION COST CALCULATOR
   ========================================================================== */
body {
  background-color: #f8fafc;
  color: #1e293b;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Inter", Helvetica, Arial, sans-serif;
  line-height: 1.6;
}

.hac-container {
  max-width: 1320px;
  margin: 0 auto;
  padding: 2rem 1.25rem 4rem;
}

/* Breadcrumbs & Hero */
.hac-hero {
  margin-bottom: 2rem;
}
.hac-breadcrumb {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 0.82rem;
  color: #64748b;
  margin-bottom: 0.75rem;
}
.hac-breadcrumb a {
  color: #64748b;
  text-decoration: none;
  transition: color 0.15s;
}
.hac-breadcrumb a:hover {
  color: #b45309;
}
.hac-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: #fef3c7;
  border: 1px solid #fde68a;
  color: #92400e;
  font-size: 0.78rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  padding: 4px 10px;
  border-radius: 9999px;
  margin-bottom: 0.75rem;
}
.hac-hero h1 {
  font-size: 2.35rem;
  font-weight: 850;
  color: #0f172a;
  line-height: 1.2;
  letter-spacing: -0.025em;
  margin: 0 0 0.75rem;
}
.hac-hero-desc {
  font-size: 1.05rem;
  color: #475569;
  line-height: 1.65;
  max-width: 960px;
  margin: 0;
  border-left: 4px solid #f59e0b;
  padding-left: 1rem;
}

/* ==========================================================================
   INTERACTIVE TWO-COLUMN CALCULATOR CARD
   ========================================================================== */
.hac-calc-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 16px;
  box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.08), 0 4px 12px -2px rgba(15, 23, 42, 0.04);
  margin-bottom: 3.5rem;
  overflow: hidden;
}
.hac-calc-layout {
  display: grid;
  grid-template-columns: 1.15fr 1fr;
  align-items: start;
}

/* Left Form Controls */
.hac-form-panel {
  padding: 2.25rem 2rem;
  border-right: 1px solid #e2e8f0;
}
.hac-panel-title {
  font-size: 1.15rem;
  font-weight: 800;
  color: #0f172a;
  margin: 0 0 1.5rem;
  display: flex;
  align-items: center;
  gap: 8px;
}
.hac-section-label {
  font-size: 0.76rem;
  font-weight: 800;
  color: #94a3b8;
  text-transform: uppercase;
  letter-spacing: 0.07em;
  margin-bottom: 0.75rem;
  display: block;
}

/* Addition Type Card Grid */
.hac-type-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px;
  margin-bottom: 1.75rem;
}
.hac-type-btn {
  background: #f8fafc;
  border: 1.5px solid #e2e8f0;
  border-radius: 10px;
  padding: 12px 14px;
  cursor: pointer;
  text-align: left;
  transition: all 0.2s ease;
  display: flex;
  align-items: flex-start;
  gap: 10px;
  user-select: none;
}
.hac-type-btn:hover {
  border-color: #cbd5e1;
  background: #ffffff;
  transform: translateY(-1px);
}
.hac-type-btn.active {
  border-color: #b45309;
  background: #fef9f0;
  box-shadow: 0 0 0 1px #b45309;
}
.hac-type-icon {
  font-size: 1.25rem;
  line-height: 1;
  flex-shrink: 0;
  margin-top: 2px;
}
.hac-type-name {
  font-size: 0.88rem;
  font-weight: 750;
  color: #1e293b;
  display: block;
  line-height: 1.3;
}
.hac-type-btn.active .hac-type-name {
  color: #92400e;
}
.hac-type-cost {
  font-size: 0.74rem;
  color: #64748b;
  display: block;
  margin-top: 2px;
}

/* Dimension Controls */
.hac-dim-wrap {
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  padding: 16px;
  margin-bottom: 1.75rem;
}
.hac-dim-grid {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 12px;
  margin-bottom: 14px;
}
.hac-dim-box label {
  display: block;
  font-size: 0.78rem;
  font-weight: 700;
  color: #475569;
  margin-bottom: 4px;
}
.hac-input-affix {
  position: relative;
  display: flex;
  align-items: center;
}
.hac-input-affix input {
  width: 100%;
  padding: 10px 12px;
  font-size: 0.95rem;
  font-weight: 700;
  color: #0f172a;
  background: #ffffff;
  border: 1.5px solid #cbd5e1;
  border-radius: 8px;
  outline: none;
  transition: border-color 0.15s;
}
.hac-input-affix input:focus {
  border-color: #b45309;
  box-shadow: 0 0 0 3px rgba(180, 83, 9, 0.12);
}
.hac-affix-right {
  position: absolute;
  right: 10px;
  font-size: 0.76rem;
  font-weight: 600;
  color: #94a3b8;
  pointer-events: none;
}
.hac-slider-wrap {
  margin-top: 8px;
}
.hac-slider {
  width: 100%;
  height: 6px;
  border-radius: 9999px;
  background: #e2e8f0;
  outline: none;
  cursor: pointer;
  accent-color: #b45309;
}
.hac-presets {
  display: flex;
  flex-wrap: wrap;
  gap: 6px;
  margin-top: 10px;
}
.hac-preset-chip {
  font-size: 0.75rem;
  font-weight: 700;
  color: #475569;
  background: #ffffff;
  border: 1px solid #cbd5e1;
  padding: 4px 10px;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.15s;
}
.hac-preset-chip:hover {
  background: #1e293b;
  color: #ffffff;
  border-color: #1e293b;
}

/* Finish Quality Tier Pills */
.hac-quality-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 8px;
  margin-bottom: 0.5rem;
}
.hac-quality-card {
  background: #f8fafc;
  border: 1.5px solid #e2e8f0;
  border-radius: 10px;
  padding: 10px 8px;
  text-align: center;
  cursor: pointer;
  transition: all 0.2s;
  user-select: none;
}
.hac-quality-card:hover {
  border-color: #cbd5e1;
  background: #ffffff;
}
.hac-quality-card.active {
  border-color: #b45309;
  background: #b45309;
  color: #ffffff;
}
.hac-q-tier {
  font-size: 0.82rem;
  font-weight: 800;
  display: block;
}
.hac-q-mult {
  font-size: 0.72rem;
  font-weight: 600;
  opacity: 0.8;
  display: block;
  margin-top: 2px;
}
.hac-quality-card.active .hac-q-mult {
  color: #fef3c7;
}
.hac-quality-desc {
  font-size: 0.8rem;
  color: #64748b;
  margin: 0 0 1.75rem;
  font-style: italic;
}

/* Region & Scope Selects */
.hac-field-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 14px;
  margin-bottom: 1.5rem;
}
.hac-field-group label {
  display: block;
  font-size: 0.8rem;
  font-weight: 700;
  color: #334155;
  margin-bottom: 6px;
}
.hac-select {
  width: 100%;
  padding: 10px 12px;
  font-size: 0.92rem;
  font-weight: 600;
  color: #0f172a;
  background: #ffffff;
  border: 1.5px solid #cbd5e1;
  border-radius: 8px;
  outline: none;
  cursor: pointer;
  transition: border-color 0.15s;
}
.hac-select:focus {
  border-color: #b45309;
  box-shadow: 0 0 0 3px rgba(180, 83, 9, 0.12);
}

/* Contingency Slider Row */
.hac-contingency-box {
  background: #fffbeb;
  border: 1px solid #fde68a;
  border-radius: 10px;
  padding: 12px 14px;
  margin-bottom: 1rem;
}
.hac-cont-head {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 0.82rem;
  font-weight: 750;
  color: #92400e;
  margin-bottom: 6px;
}

/* ==========================================================================
   RIGHT COLUMN: STICKY ANSWER & LIVE RESULTS PANEL
   ========================================================================== */
.hac-results-panel {
  background: linear-gradient(165deg, #ffffff 0%, #fcfbf9 100%);
  padding: 2.25rem 2rem;
  position: sticky;
  top: 1.5rem;
}

/* Primary Answer Hero */
.hac-ans-hero {
  background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
  color: #ffffff;
  border-radius: 14px;
  padding: 1.75rem 1.5rem;
  text-align: center;
  box-shadow: 0 10px 25px -4px rgba(15, 23, 42, 0.18);
  margin-bottom: 1.25rem;
  position: relative;
  overflow: hidden;
}
.hac-ans-hero::after {
  content: '';
  position: absolute;
  top: -50%;
  right: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(245, 158, 11, 0.15) 0%, transparent 60%);
  pointer-events: none;
}
.hac-ans-eyebrow {
  font-size: 0.74rem;
  font-weight: 750;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  color: #fbbf24;
  margin-bottom: 4px;
  display: block;
}
.hac-ans-total {
  font-size: 2.85rem;
  font-weight: 850;
  line-height: 1.1;
  color: #ffffff;
  letter-spacing: -0.03em;
  margin: 4px 0 6px;
}
.hac-ans-range {
  font-size: 0.88rem;
  color: #cbd5e1;
  display: block;
}

/* Key Metrics 4-Grid */
.hac-metrics-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 10px;
  margin-bottom: 1.25rem;
}
.hac-metric-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 10px;
  padding: 12px 14px;
  box-shadow: 0 1px 2px rgba(0,0,0,0.03);
}
.hac-m-label {
  font-size: 0.72rem;
  font-weight: 700;
  color: #64748b;
  text-transform: uppercase;
  letter-spacing: 0.04em;
  display: block;
  margin-bottom: 2px;
}
.hac-m-val {
  font-size: 1.15rem;
  font-weight: 800;
  color: #0f172a;
  line-height: 1.2;
}
.hac-m-val.amber { color: #b45309; }
.hac-m-val.green { color: #059669; }

/* Visual Benchmark Bar */
.hac-gauge-wrap {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 10px;
  padding: 14px;
  margin-bottom: 1.25rem;
}
.hac-gauge-title {
  display: flex;
  justify-content: space-between;
  font-size: 0.74rem;
  font-weight: 700;
  color: #64748b;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: 8px;
}
.hac-gauge-track {
  height: 8px;
  background: #e2e8f0;
  border-radius: 9999px;
  position: relative;
  overflow: hidden;
  margin-bottom: 6px;
}
.hac-gauge-fill {
  height: 100%;
  background: linear-gradient(90deg, #10b981 0%, #f59e0b 50%, #ef4444 100%);
  border-radius: 9999px;
  transition: width 0.3s ease;
}
.hac-gauge-ticks {
  display: flex;
  justify-content: space-between;
  font-size: 0.7rem;
  font-weight: 600;
  color: #94a3b8;
}
.hac-gauge-verdict {
  font-size: 0.8rem;
  color: #475569;
  margin-top: 8px;
  line-height: 1.45;
}

/* Itemized Cost Breakdown */
.hac-breakdown-box {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 1.25rem;
}
.hac-bkd-header {
  padding: 10px 14px;
  background: #f8fafc;
  border-bottom: 1px solid #e2e8f0;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 0.75rem;
  font-weight: 750;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: #475569;
}
.hac-bkd-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 0.82rem;
}
.hac-bkd-table td {
  padding: 7px 14px;
  border-bottom: 1px solid #f8fafc;
}
.hac-bkd-table tr:last-child td {
  border-bottom: none;
  font-weight: 800;
  background: #fef9f0;
  color: #92400e;
  border-top: 1.5px solid #fde68a;
}
.hac-td-val {
  text-align: right;
  font-weight: 700;
  color: #1e293b;
  font-variant-numeric: tabular-nums;
}

/* Action Button Row */
.hac-actions-row {
  display: flex;
  gap: 10px;
}
.hac-action-btn {
  flex: 1;
  padding: 10px;
  border-radius: 8px;
  font-size: 0.82rem;
  font-weight: 700;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  transition: all 0.15s ease;
  text-decoration: none;
  border: none;
}
.hac-btn-primary {
  background: #0f172a;
  color: #ffffff;
}
.hac-btn-primary:hover {
  background: #1e293b;
}
.hac-btn-secondary {
  background: #f1f5f9;
  color: #475569;
  border: 1px solid #cbd5e1;
}
.hac-btn-secondary:hover {
  background: #e2e8f0;
  color: #0f172a;
}

/* ==========================================================================
   SUPPORTING ARTICLE CONTENT & SIDEBAR GRID
   ========================================================================== */
.hac-content-wrap {
  display: grid;
  grid-template-columns: 1fr 280px;
  gap: 2.5rem;
  align-items: start;
}
.hac-article-body {
  min-width: 0;
}

.hac-section {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 14px;
  padding: 2.25rem 2rem;
  margin-bottom: 2rem;
  box-shadow: 0 1px 3px rgba(0,0,0,0.02);
  scroll-margin-top: 6rem;
}
.hac-section h2 {
  font-size: 1.6rem;
  font-weight: 850;
  color: #0f172a;
  letter-spacing: -0.02em;
  margin: 0 0 1.25rem;
  padding-bottom: 0.75rem;
  border-bottom: 2px solid #f1f5f9;
}
.hac-section h3 {
  font-size: 1.15rem;
  font-weight: 750;
  color: #1e293b;
  margin: 1.75rem 0 0.6rem;
}
.hac-section p {
  font-size: 0.96rem;
  color: #475569;
  line-height: 1.75;
  margin: 0 0 1.25rem;
}
.hac-section ul, .hac-section ol {
  color: #475569;
  line-height: 1.75;
  padding-left: 1.35rem;
  margin: 0 0 1.25rem;
}
.hac-section li {
  margin-bottom: 0.45rem;
}
.hac-section strong {
  color: #0f172a;
}
.hac-section a {
  color: #b45309;
  font-weight: 600;
  text-decoration: underline;
}

/* Tables */
.hac-table-wrap {
  overflow-x: auto;
  margin: 1.25rem 0 1.5rem;
}
.hac-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 0.88rem;
  border: 1px solid #e2e8f0;
  border-radius: 10px;
  overflow: hidden;
}
.hac-table th {
  background: #f8fafc;
  color: #0f172a;
  padding: 12px 14px;
  text-align: left;
  font-weight: 750;
  border-bottom: 2px solid #e2e8f0;
}
.hac-table td {
  padding: 11px 14px;
  border-bottom: 1px solid #f1f5f9;
  color: #334155;
}
.hac-table tr:last-child td {
  border-bottom: none;
}
.hac-table tr:nth-child(even) td {
  background: #fbfcfe;
}

/* Callout Boxes */
.hac-info-callout {
  background: #fef9f0;
  border-left: 4px solid #b45309;
  border-radius: 0 8px 8px 0;
  padding: 1.1rem 1.3rem;
  margin: 1.5rem 0;
  color: #92400e;
  font-size: 0.92rem;
  line-height: 1.65;
}
.hac-warn-callout {
  background: #fffbeb;
  border-left: 4px solid #f59e0b;
  border-radius: 0 8px 8px 0;
  padding: 1.1rem 1.3rem;
  margin: 1.5rem 0;
  color: #92400e;
  font-size: 0.92rem;
  line-height: 1.65;
}

/* FAQ Accordion */
.hac-faq-list {
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.hac-faq-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 10px;
  overflow: hidden;
  transition: border-color 0.2s;
}
.hac-faq-card.open {
  border-color: #fde68a;
}
.hac-faq-q {
  width: 100%;
  text-align: left;
  background: none;
  border: none;
  padding: 16px 18px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
  font-size: 0.98rem;
  font-weight: 750;
  color: #0f172a;
}
.hac-faq-q:hover {
  background: #f8fafc;
}
.hac-faq-q::after {
  content: '+';
  font-size: 1.35rem;
  font-weight: 600;
  color: #b45309;
  flex-shrink: 0;
  margin-left: 12px;
}
.hac-faq-card.open .hac-faq-q::after {
  content: '−';
}
.hac-faq-a {
  display: none;
  padding: 0 18px 16px;
  font-size: 0.92rem;
  color: #475569;
  line-height: 1.7;
}
.hac-faq-card.open .hac-faq-a {
  display: block;
}

/* Supporting Sidebar */
.hac-sidebar {
  position: sticky;
  top: 1.5rem;
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}
.hac-side-widget {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 1px 3px rgba(0,0,0,0.03);
}
.hac-side-head {
  background: #0f172a;
  color: #ffffff;
  padding: 14px 16px;
  font-size: 0.85rem;
  font-weight: 750;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}
.hac-side-rows {
  padding: 8px 0;
}
.hac-side-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 9px 16px;
  border-bottom: 1px solid #f1f5f9;
  font-size: 0.84rem;
}
.hac-side-row:last-child {
  border-bottom: none;
}
.hac-side-lbl {
  font-weight: 600;
  color: #334155;
}
.hac-side-val {
  font-weight: 800;
  color: #b45309;
}
.hac-side-links {
  list-style: none;
  padding: 8px 0;
  margin: 0;
}
.hac-side-links li a {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 9px 16px;
  font-size: 0.85rem;
  font-weight: 600;
  color: #475569;
  text-decoration: none;
  border-left: 3px solid transparent;
  transition: all 0.15s;
}
.hac-side-links li a:hover, .hac-side-links li a.active {
  color: #b45309;
  background: #fef9f0;
  border-left-color: #b45309;
}

/* Print Styles */
@media print {
  header, footer, .hac-sidebar, .hac-breadcrumb, .hac-actions-row, .hac-presets, .hac-slider-wrap {
    display: none !important;
  }
  .hac-container { padding: 0; max-width: 100%; }
  .hac-calc-layout { grid-template-columns: 1fr; }
  .hac-form-panel { display: none; }
  .hac-results-panel { position: static; padding: 0; }
  .hac-calc-card { border: none; box-shadow: none; }
}

/* Responsive */
@media (max-width: 1080px) {
  .hac-calc-layout {
    grid-template-columns: 1fr;
  }
  .hac-form-panel {
    border-right: none;
    border-bottom: 1px solid #e2e8f0;
  }
  .hac-results-panel {
    position: static;
  }
  .hac-content-wrap {
    grid-template-columns: 1fr;
  }
  .hac-sidebar {
    position: static;
    display: grid;
    grid-template-columns: 1fr 1fr;
  }
}
@media (max-width: 768px) {
  .hac-hero h1 { font-size: 1.85rem; }
  .hac-form-panel, .hac-results-panel { padding: 1.5rem 1.25rem; }
  .hac-type-grid { grid-template-columns: 1fr; }
  .hac-dim-grid { grid-template-columns: 1fr; }
  .hac-quality-grid { grid-template-columns: repeat(2, 1fr); }
  .hac-field-row { grid-template-columns: 1fr; }
  .hac-metrics-grid { grid-template-columns: 1fr; }
  .hac-sidebar { grid-template-columns: 1fr; }
  .hac-section { padding: 1.5rem 1.25rem; }
}
</style>

<main id="main-content">
<div class="hac-container">

  <!-- ========================================================================
       PAGE HERO & BREADCRUMBS
       ======================================================================== -->
  <header class="hac-hero">
    <nav class="hac-breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo $baseUrl; ?>/">Home</a>
      <span>/</span>
      <a href="<?php echo $baseUrl; ?>/construction/">Construction</a>
      <span>/</span>
      <span>Home Addition Cost</span>
    </nav>
    <div class="hac-badge">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg>
      Audited for <?php echo $currentYear; ?> US Labor &amp; Material Costs
    </div>
    <h1>Home Addition Cost Calculator (<?php echo $currentYear; ?>)</h1>
    <p class="hac-hero-desc">
      Estimate the true cost of your home addition project by square footage, room type, finish tier, and US region. Features real-time itemized labor estimates, permit costs, and trade-by-trade cost breakdowns.
    </p>
  </header>

  <!-- ========================================================================
       TWO-COLUMN INTERACTIVE CALCULATOR CARD
       ======================================================================== -->
  <section class="hac-calc-card" id="calculator" aria-label="Home Addition Cost Calculator Engine">
    <div class="hac-calc-layout">

      <!-- LEFT COLUMN: INPUT CONTROLS -->
      <div class="hac-form-panel">
        <div class="hac-panel-title">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#b45309" stroke-width="2.2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          1. Project Specifications
        </div>

        <!-- Addition Type Grid -->
        <span class="hac-section-label">Select Room / Addition Type</span>
        <div class="hac-type-grid" role="radiogroup" aria-label="Addition Type">
          <button type="button" class="hac-type-btn active" data-type="basic_room" onclick="hacSelectType('basic_room', this)">
            <span class="hac-type-icon">🛏️</span>
            <div>
              <span class="hac-type-name">Basic Bedroom / Den</span>
              <span class="hac-type-cost">~$115 / sq ft baseline</span>
            </div>
          </button>

          <button type="button" class="hac-type-btn" data-type="master_suite" onclick="hacSelectType('master_suite', this)">
            <span class="hac-type-icon">👑</span>
            <div>
              <span class="hac-type-name">Primary Master Suite</span>
              <span class="hac-type-cost">~$175 / sq ft with bath</span>
            </div>
          </button>

          <button type="button" class="hac-type-btn" data-type="bathroom" onclick="hacSelectType('bathroom', this)">
            <span class="hac-type-icon">🚿</span>
            <div>
              <span class="hac-type-name">Full Bathroom Addition</span>
              <span class="hac-type-cost">~$230 / sq ft plumbing</span>
            </div>
          </button>

          <button type="button" class="hac-type-btn" data-type="kitchen" onclick="hacSelectType('kitchen', this)">
            <span class="hac-type-icon">🍳</span>
            <div>
              <span class="hac-type-name">Kitchen Extension</span>
              <span class="hac-type-cost">~$260 / sq ft plumbing/elec</span>
            </div>
          </button>

          <button type="button" class="hac-type-btn" data-type="second_story" onclick="hacSelectType('second_story', this)">
            <span class="hac-type-icon">🏢</span>
            <div>
              <span class="hac-type-name">Second Story Addition</span>
              <span class="hac-type-cost">~$200 / sq ft structural</span>
            </div>
          </button>

          <button type="button" class="hac-type-btn" data-type="garage" onclick="hacSelectType('garage', this)">
            <span class="hac-type-icon">🚗</span>
            <div>
              <span class="hac-type-name">Attached Garage</span>
              <span class="hac-type-cost">~$70 / sq ft unfinished</span>
            </div>
          </button>

          <button type="button" class="hac-type-btn" data-type="sunroom" onclick="hacSelectType('sunroom', this)">
            <span class="hac-type-icon">☀️</span>
            <div>
              <span class="hac-type-name">Sunroom / 3-Season</span>
              <span class="hac-type-cost">~$130 / sq ft glazing</span>
            </div>
          </button>

          <button type="button" class="hac-type-btn" data-type="bumpout" onclick="hacSelectType('bumpout', this)">
            <span class="hac-type-icon">📐</span>
            <div>
              <span class="hac-type-name">Bump-Out Extension</span>
              <span class="hac-type-cost">~$130 / sq ft cantilever</span>
            </div>
          </button>
        </div>
        <input type="hidden" id="hac_type" value="basic_room">

        <!-- Dimensions & Square Footage Controls -->
        <span class="hac-section-label">Dimensions &amp; Total Square Footage</span>
        <div class="hac-dim-wrap">
          <div class="hac-dim-grid">
            <div class="hac-dim-box">
              <label for="hac_width">Width (ft)</label>
              <div class="hac-input-affix">
                <input type="number" id="hac_width" value="20" min="5" max="100" step="1" oninput="hacUpdateFromDimensions()">
                <span class="hac-affix-right">ft</span>
              </div>
            </div>

            <div class="hac-dim-box">
              <label for="hac_length">Length (ft)</label>
              <div class="hac-input-affix">
                <input type="number" id="hac_length" value="20" min="5" max="100" step="1" oninput="hacUpdateFromDimensions()">
                <span class="hac-affix-right">ft</span>
              </div>
            </div>

            <div class="hac-dim-box">
              <label for="hac_sqft">Total Area</label>
              <div class="hac-input-affix">
                <input type="number" id="hac_sqft" value="400" min="50" max="3000" step="10" oninput="hacUpdateFromSqft()">
                <span class="hac-affix-right">sq ft</span>
              </div>
            </div>
          </div>

          <div class="hac-slider-wrap">
            <input type="range" id="hac_slider" class="hac-slider" min="50" max="2500" step="25" value="400" oninput="hacUpdateFromSlider(this.value)" aria-label="Square Footage Slider">
          </div>

          <div class="hac-presets">
            <span style="font-size:0.72rem;font-weight:700;color:#94a3b8;align-self:center;">Quick Presets:</span>
            <button type="button" class="hac-preset-chip" onclick="hacSetPreset(150, 10, 15)">150 sq ft (Bath/Bump)</button>
            <button type="button" class="hac-preset-chip" onclick="hacSetPreset(300, 15, 20)">300 sq ft (Bedroom)</button>
            <button type="button" class="hac-preset-chip" onclick="hacSetPreset(400, 20, 20)">400 sq ft (Suite)</button>
            <button type="button" class="hac-preset-chip" onclick="hacSetPreset(800, 20, 40)">800 sq ft (Large/2-Story)</button>
          </div>
        </div>

        <!-- Finish Quality Level -->
        <span class="hac-section-label">Material &amp; Finish Quality Tier</span>
        <div class="hac-quality-grid" role="radiogroup" aria-label="Quality Tier">
          <div class="hac-quality-card" data-q="basic" onclick="hacSelectQuality('basic', this)">
            <span class="hac-q-tier">Economy</span>
            <span class="hac-q-mult">0.80&times; Base</span>
          </div>
          <div class="hac-quality-card active" data-q="standard" onclick="hacSelectQuality('standard', this)">
            <span class="hac-q-tier">Standard</span>
            <span class="hac-q-mult">1.00&times; Base</span>
          </div>
          <div class="hac-quality-card" data-q="premium" onclick="hacSelectQuality('premium', this)">
            <span class="hac-q-tier">Premium</span>
            <span class="hac-q-mult">1.35&times; Base</span>
          </div>
          <div class="hac-quality-card" data-q="luxury" onclick="hacSelectQuality('luxury', this)">
            <span class="hac-q-tier">Luxury</span>
            <span class="hac-q-mult">1.80&times; Base</span>
          </div>
        </div>
        <p class="hac-quality-desc" id="hac_quality_desc">Mid-grade materials, semi-custom cabinets, standard fixtures, typical builder finishes.</p>
        <input type="hidden" id="hac_quality" value="standard">

        <!-- Regional Pricing & Building Direction -->
        <div class="hac-field-row">
          <div class="hac-field-group">
            <label for="hac_region">US Labor Region</label>
            <select id="hac_region" class="hac-select" onchange="hacCalculate()">
              <option value="midwest" selected>Midwest (IL, OH, MI, IN, WI) — 1.00&times;</option>
              <option value="northeast">Northeast (NY, NJ, MA, CT, PA) — 1.48&times;</option>
              <option value="westcoast">West Coast (CA, WA, OR) — 1.42&times;</option>
              <option value="mountain">Mountain West (CO, AZ, UT, NV) — 1.18&times;</option>
              <option value="south">South (TX, FL, GA, NC, TN) — 0.90&times;</option>
            </select>
          </div>

          <div class="hac-field-group">
            <label for="hac_direction">Building Direction</label>
            <select id="hac_direction" class="hac-select" onchange="hacCalculate()">
              <option value="out" selected>Build Out (Ground Floor)</option>
              <option value="up">Build Up (Second Story Addition)</option>
            </select>
          </div>
        </div>

        <!-- Contingency Buffer -->
        <div class="hac-contingency-box">
          <div class="hac-cont-head">
            <span>Contingency Reserve Buffer</span>
            <span id="hac_cont_val">10% Recommended</span>
          </div>
          <input type="range" id="hac_cont_slider" class="hac-slider" min="5" max="20" step="1" value="10" oninput="hacUpdateContingency(this.value)" aria-label="Contingency Percentage">
        </div>

      </div>

      <!-- RIGHT COLUMN: STICKY ANSWER & LIVE RESULTS PANEL -->
      <div class="hac-results-panel" id="results-panel">
        <div class="hac-panel-title">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2.2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          2. Estimated Cost Summary
        </div>

        <!-- Primary Answer Hero -->
        <div class="hac-ans-hero">
          <span class="hac-ans-eyebrow">Estimated Total Project Cost</span>
          <div class="hac-ans-total" id="hac_res_total">$50,600</div>
          <span class="hac-ans-range" id="hac_res_range">Estimated Range: $43,010 &ndash; $58,190</span>
        </div>

        <!-- 4-Metrics Snapshot Grid -->
        <div class="hac-metrics-grid">
          <div class="hac-metric-card">
            <span class="hac-m-label">Cost / Square Foot</span>
            <div class="hac-m-val amber" id="hac_res_sqft">$115<span style="font-size:0.8rem;color:#64748b;font-weight:600;"> / sqft</span></div>
          </div>

          <div class="hac-metric-card">
            <span class="hac-m-label">Est. Building Permits</span>
            <div class="hac-m-val" id="hac_res_permits">$1,150</div>
          </div>

          <div class="hac-metric-card">
            <span class="hac-m-label">Subtotal Materials &amp; Labor</span>
            <div class="hac-m-val" id="hac_res_subtotal">$46,000</div>
          </div>

          <div class="hac-metric-card">
            <span class="hac-m-label">Contingency Reserve</span>
            <div class="hac-m-val green" id="hac_res_contingency">$4,600</div>
          </div>
        </div>

        <!-- National Cost Gauge -->
        <div class="hac-gauge-wrap">
          <div class="hac-gauge-title">
            <span>National Cost Index</span>
            <span id="hac_gauge_pct" style="color:#b45309;">Mid-Range</span>
          </div>
          <div class="hac-gauge-track">
            <div class="hac-gauge-fill" id="hac_gauge_fill" style="width: 35%;"></div>
          </div>
          <div class="hac-gauge-ticks">
            <span>$80/sqft (Basic)</span>
            <span>$180/sqft (Avg)</span>
            <span>$350+/sqft (Luxury)</span>
          </div>
          <div class="hac-gauge-verdict" id="hac_gauge_verdict">
            <strong>Typical mid-range bedroom addition</strong> in standard US suburban markets with mid-grade drywall, flooring, and electrical.
          </div>
        </div>

        <!-- Itemized Trade Breakdown Table -->
        <div class="hac-breakdown-box">
          <div class="hac-bkd-header">
            <span>Trade Allocation Breakdown</span>
            <span>Est. Amount</span>
          </div>
          <table class="hac-bkd-table">
            <tbody>
              <tr><td>Foundation &amp; Excavation</td><td class="hac-td-val" id="t-foundation">$5,520</td></tr>
              <tr><td>Framing &amp; Structural Shell</td><td class="hac-td-val" id="t-framing">$9,200</td></tr>
              <tr><td>Roofing &amp; Flashing</td><td class="hac-td-val" id="t-roofing">$4,600</td></tr>
              <tr><td>Electrical &amp; Lighting</td><td class="hac-td-val" id="t-electrical">$3,680</td></tr>
              <tr><td>Plumbing Rough-in &amp; Fixtures</td><td class="hac-td-val" id="t-plumbing">$920</td></tr>
              <tr><td>HVAC Ducting &amp; Extension</td><td class="hac-td-val" id="t-hvac">$3,220</td></tr>
              <tr><td>Insulation &amp; Drywall</td><td class="hac-td-val" id="t-drywall">$5,520</td></tr>
              <tr><td>Flooring Installation</td><td class="hac-td-val" id="t-flooring">$5,520</td></tr>
              <tr><td>Windows &amp; Exterior Doors</td><td class="hac-td-val" id="t-windows">$3,680</td></tr>
              <tr><td>Interior Paint &amp; Trim Finish</td><td class="hac-td-val" id="t-finishing">$4,140</td></tr>
              <tr><td>Permits &amp; Plan Review</td><td class="hac-td-val" id="t-permits">$1,150</td></tr>
              <tr><td>Contingency Buffer (10%)</td><td class="hac-td-val" id="t-contingency">$4,600</td></tr>
              <tr><td>Total Estimated Investment</td><td class="hac-td-val" id="t-total">$50,600</td></tr>
            </tbody>
          </table>
        </div>

        <!-- Action Buttons -->
        <div class="hac-actions-row">
          <button type="button" class="hac-action-btn hac-btn-primary" onclick="window.print()">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
            Print / Save Estimate
          </button>
          <button type="button" class="hac-action-btn hac-btn-secondary" onclick="hacResetDefaults()">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2.5 2v6h6M21.5 22v-6h-6"/><path d="M22 11.5A10 10 0 0 0 3.2 7.2M2 12.5a10 10 0 0 0 18.8 4.3"/></svg>
            Reset
          </button>
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================================================
       ARTICLE CONTENT & COMPARISON GUIDES
       ======================================================================== -->
  <div class="hac-content-wrap">

    <article class="hac-article-body">

      <!-- How to Use Section -->
      <section class="hac-section" id="how-to-use">
        <h2>How to Use This Home Addition Cost Calculator</h2>
        <p>
          This calculator provides an institutional-grade preliminary estimate for home additions in the United States, calibrated directly to current-year material pricing and regional labor indices. Follow these steps to tailor your projection:
        </p>
        <ol>
          <li><strong>Select Addition Type:</strong> Plumbing and structural complexity represent the largest source of cost variance. Basic bedrooms require only electrical and insulation ($100–$150/sqft), while master suites and bathrooms require complex sewer hookups, venting, and moisture barriers ($175–$300+/sqft).</li>
          <li><strong>Define Dimensions:</strong> Enter Length &amp; Width or use the slider for total square footage. Due to general contractor mobilization, smaller additions incur a higher unit cost per square foot than larger additions.</li>
          <li><strong>Choose Quality Level:</strong> Basic utilizes builder-grade fixtures and vinyl flooring (0.80&times;); Standard provides mid-grade solid surface countertops and tile (1.00&times; baseline); Premium incorporates custom cabinetry and architectural windows (1.35&times;); Luxury reflects bespoke high-end finishes (1.80&times;).</li>
          <li><strong>Select US Region:</strong> Labor rates differ by more than 50% nationwide. Projects in the Northeast and Pacific Coast reflect substantial regional union and living cost premiums compared to the South and Midwest.</li>
        </ol>
        <div class="hac-info-callout">
          <strong>Pro-Tip for Older Homes:</strong> If your home was constructed prior to 1980, increase your contingency reserve to at least 15–20% to account for potential electrical panel upgrades (e.g., updating to 200 amps), lead/asbestos abatement, and foundation leveling.
        </div>
      </section>

      <!-- Cost by Addition Type Table -->
      <section class="hac-section" id="cost-by-type">
        <h2><?php echo $currentYear; ?> Home Addition Cost by Type</h2>
        <p>
          Addition type dictates mechanical requirements. The table below details standard baseline cost ranges for popular room extensions across the United States:
        </p>
        <div class="hac-table-wrap">
          <table class="hac-table">
            <thead>
              <tr>
                <th>Addition Type</th>
                <th>Typical Size</th>
                <th>Estimated Cost Range</th>
                <th>Avg. Cost / Sq Ft</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Basic Bedroom / Den</strong></td>
                <td>200 – 400 sq ft</td>
                <td>$22,000 – $60,000</td>
                <td>$100 – $150 / sqft</td>
              </tr>
              <tr>
                <td><strong>Primary Master Suite</strong></td>
                <td>400 – 600 sq ft</td>
                <td>$65,000 – $130,000</td>
                <td>$160 – $220 / sqft</td>
              </tr>
              <tr>
                <td><strong>Full Bathroom Addition</strong></td>
                <td>50 – 150 sq ft</td>
                <td>$22,000 – $75,000</td>
                <td>$180 – $300 / sqft</td>
              </tr>
              <tr>
                <td><strong>Kitchen Extension</strong></td>
                <td>150 – 400 sq ft</td>
                <td>$45,000 – $125,000</td>
                <td>$200 – $320 / sqft</td>
              </tr>
              <tr>
                <td><strong>Second Story Addition</strong></td>
                <td>800 – 1,500 sq ft</td>
                <td>$130,000 – $360,000</td>
                <td>$150 – $300 / sqft</td>
              </tr>
              <tr>
                <td><strong>Attached 2-Car Garage</strong></td>
                <td>400 – 600 sq ft</td>
                <td>$24,000 – $70,000</td>
                <td>$60 – $110 / sqft</td>
              </tr>
              <tr>
                <td><strong>Sunroom / 3-Season Room</strong></td>
                <td>150 – 350 sq ft</td>
                <td>$16,000 – $65,000</td>
                <td>$110 – $180 / sqft</td>
              </tr>
              <tr>
                <td><strong>Bump-Out Extension</strong></td>
                <td>50 – 150 sq ft</td>
                <td>$6,000 – $30,000</td>
                <td>$90 – $180 / sqft</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Cost Drivers Breakdown -->
      <section class="hac-section" id="cost-factors">
        <h2>What Drives Residential Addition Costs</h2>
        <p>
          Home additions encompass numerous distinct trades. Understanding the capital allocation helps homeowners negotiate effectively with general contractors:
        </p>

        <h3>1. Foundation &amp; Groundwork (10%–15%)</h3>
        <p>
          Poured concrete footings and continuous perimeter stem walls are required for standard frost-depth building compliance. Soil engineering tests ($500–$1,200) and site clearing can impact this initial phase. Bump-outs utilizing cantilevered floor joists bypass foundation excavation entirely.
        </p>

        <h3>2. Structural Framing &amp; Roofline (18%–25%)</h3>
        <p>
          Framing involves dimensional lumber, engineered LVL headers, exterior sheathing, and roof tie-ins. Tying a new addition's roofline into existing valleys represents significant labor. Second-story additions require structural engineer certification to verify existing first-floor wall studs can support load bearing.
        </p>

        <h3>3. Mechanical Systems: Plumbing, Electrical, HVAC (15%–30%)</h3>
        <p>
          Running branch circuits, water supply lines, and 3-inch DWV (drain-waste-vent) sewer stacks adds substantial licensed trade fees. If your existing furnace or heat pump cannot service additional cubic volume, mini-split ductless heat pumps ($3,500–$7,500) offer an efficient alternative to full HVAC upgrades.
        </p>

        <h3>4. Finishes, Drywall, &amp; Insulation (20%–30%)</h3>
        <p>
          Insulation (R-13 to R-21 walls, R-38 to R-49 ceiling) followed by drywall tape, mudding, and interior architectural trim. Upgrading from standard laminate to solid hardwood flooring or porcelain tile directly influences this cost category.
        </p>

        <div class="hac-warn-callout">
          <strong>Municipal Permitting Requirements:</strong> In many suburban US jurisdictions, architectural blueprints stamped by a licensed engineer ($1,500–$4,000) are legally required before permit issuance. Factor 4 to 8 weeks for zoning and plan review approvals.
        </div>
      </section>

      <!-- Regional Multipliers -->
      <section class="hac-section" id="regional">
        <h2>Home Addition Costs by US Region</h2>
        <p>
          While construction materials (lumber, concrete, copper, drywall) trade on national markets, labor rates vary dramatically based on local cost of living and prevailing union wage agreements:
        </p>

        <div class="hac-table-wrap">
          <table class="hac-table">
            <thead>
              <tr>
                <th>US Region</th>
                <th>Cost Multiplier</th>
                <th>Example: 400 sq ft Room</th>
                <th>Major Metro States</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Northeast</strong></td>
                <td>1.48&times;</td>
                <td>$68,000 – $88,000</td>
                <td>NY, NJ, CT, MA, PA</td>
              </tr>
              <tr>
                <td><strong>West Coast</strong></td>
                <td>1.42&times;</td>
                <td>$65,000 – $85,000</td>
                <td>CA, WA, OR</td>
              </tr>
              <tr>
                <td><strong>Mountain West</strong></td>
                <td>1.18&times;</td>
                <td>$54,000 – $70,000</td>
                <td>CO, AZ, UT, NV</td>
              </tr>
              <tr>
                <td><strong>Midwest (Baseline)</strong></td>
                <td>1.00&times;</td>
                <td>$46,000 – $58,000</td>
                <td>IL, OH, MI, IN, WI</td>
              </tr>
              <tr>
                <td><strong>South</strong></td>
                <td>0.90&times;</td>
                <td>$41,000 – $52,000</td>
                <td>TX, FL, GA, NC, TN</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- Build Up vs Build Out -->
      <section class="hac-section" id="build-up-out">
        <h2>Build Up vs. Build Out — Which Strategy Is Superior?</h2>
        <p>
          The decision between extending your ground floor footprint versus adding a second story depends largely on lot setbacks, zoning ratios, and structural engineering feasibility:
        </p>

        <div class="hac-table-wrap">
          <table class="hac-table">
            <thead>
              <tr>
                <th>Criteria</th>
                <th>Build Out (Ground Floor)</th>
                <th>Build Up (Second Story)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Square Foot Cost</strong></td>
                <td>$100 – $200 / sq ft (lower)</td>
                <td>$150 – $300 / sq ft (higher)</td>
              </tr>
              <tr>
                <td><strong>Foundation Work</strong></td>
                <td>Required (excavation &amp; footers)</td>
                <td>None (utilizes existing foundation)</td>
              </tr>
              <tr>
                <td><strong>Structural Reinforcement</strong></td>
                <td>Rarely required</td>
                <td>Frequently needed for main floor</td>
              </tr>
              <tr>
                <td><strong>Yard Space Impact</strong></td>
                <td>Reduces green space, hits setback lines</td>
                <td>Zero ground footprint loss</td>
              </tr>
              <tr>
                <td><strong>Living During Construction</strong></td>
                <td>Possible with containment walls</td>
                <td>Difficult (temporary roof removal)</td>
              </tr>
              <tr>
                <td><strong>Staircase Space Loss</strong></td>
                <td>None</td>
                <td>Consumes 80–120 sq ft of main floor</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- ROI & Resale Value -->
      <section class="hac-section" id="roi">
        <h2>Home Addition Return on Investment (ROI)</h2>
        <p>
          According to national remodeling benchmarks, home additions recoup an average of <strong>50% to 75%</strong> of their construction costs upon resale. Return on investment is highest when adding missing functional amenities (such as a second full bathroom or a primary suite) that align your home with neighborhood comparables:
        </p>
        <div class="hac-table-wrap">
          <table class="hac-table">
            <thead>
              <tr>
                <th>Addition Type</th>
                <th>Avg. Investment</th>
                <th>Estimated Resale Value Added</th>
                <th>Cost Recouped (ROI)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>Full Bathroom Addition</strong></td>
                <td>$55,000</td>
                <td>$34,000</td>
                <td>~62%</td>
              </tr>
              <tr>
                <td><strong>Primary Master Suite</strong></td>
                <td>$135,000</td>
                <td>$78,000</td>
                <td>~58%</td>
              </tr>
              <tr>
                <td><strong>Ground-Floor Family Room</strong></td>
                <td>$95,000</td>
                <td>$64,000</td>
                <td>~67%</td>
              </tr>
              <tr>
                <td><strong>Attached 2-Car Garage</strong></td>
                <td>$32,000</td>
                <td>$24,000</td>
                <td>~75%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <!-- FAQ Section -->
      <section class="hac-section" id="faq">
        <h2>Frequently Asked Questions</h2>
        <div class="hac-faq-list">

          <div class="hac-faq-card open">
            <button class="hac-faq-q" onclick="hacToggleFaq(this)">
              How much does a home addition cost in <?php echo $currentYear; ?>?
            </button>
            <div class="hac-faq-a">
              In <?php echo $currentYear; ?>, a standard ground-floor room addition costs between $100 and $200 per square foot, with total project costs ranging from $20,000 to $150,000+ depending on size and room type. The national average for a 400 sq ft standard room addition is approximately $46,000 to $55,000. Bathroom and kitchen additions average $175 to $300+ per square foot due to intensive plumbing and electrical rough-in.
            </div>
          </div>

          <div class="hac-faq-card">
            <button class="hac-faq-q" onclick="hacToggleFaq(this)">
              What is the cheapest type of home addition?
            </button>
            <div class="hac-faq-a">
              A basic ground-floor room addition (bedroom or living room) without plumbing is typically the least expensive at $80 to $130 per sq ft. A bump-out extension (pushing an exterior wall out 2 to 6 feet) can cost as little as $5,000 to $15,000 because it often utilizes cantilevered joists rather than full foundation excavation. Attached garages are also economical at $50 to $100 per sq ft.
            </div>
          </div>

          <div class="hac-faq-card">
            <button class="hac-faq-q" onclick="hacToggleFaq(this)">
              Do I need a building permit for a home addition?
            </button>
            <div class="hac-faq-a">
              Yes. Virtually every municipality across the United States requires plan review and building permits for residential additions. Permit fees typically range from $500 to $3,000 based on projected construction valuation. Unpermitted additions can void homeowner insurance, fail municipal sales inspections, and incur costly teardown orders.
            </div>
          </div>

          <div class="hac-faq-card">
            <button class="hac-faq-q" onclick="hacToggleFaq(this)">
              Does a home addition increase property value?
            </button>
            <div class="hac-faq-a">
              Yes. Adding legal livable square footage directly increases appraised home value. National remodeling data indicates additions recoup 50% to 77% of their project cost at resale, with secondary bathrooms and primary master suites delivering the highest ROI.
            </div>
          </div>

          <div class="hac-faq-card">
            <button class="hac-faq-q" onclick="hacToggleFaq(this)">
              How long does it take to construct a home addition?
            </button>
            <div class="hac-faq-a">
              A standard ground-floor addition (200 to 400 sq ft) takes approximately 3 to 5 months from excavation to final sign-off. Larger additions or second-story projects typically require 6 to 12 months. Pre-construction architectural drafting and municipal permit processing often require an additional 1 to 3 months.
            </div>
          </div>

          <div class="hac-faq-card">
            <button class="hac-faq-q" onclick="hacToggleFaq(this)">
              Is it cheaper to build out (ground level) or build up (second story)?
            </button>
            <div class="hac-faq-a">
              Building out is generally 15% to 25% cheaper per square foot ($100–$200/sqft vs $150–$300/sqft). Building up preserves yard space but requires structural engineering, foundation reinforcement, temporary roof tear-off, and staircase construction.
            </div>
          </div>

          <div class="hac-faq-card">
            <button class="hac-faq-q" onclick="hacToggleFaq(this)">
              What is the most expensive part of a home addition?
            </button>
            <div class="hac-faq-a">
              For dry rooms (bedrooms, dens), framing and foundation work represent 30% to 40% of the total budget. For bathrooms and kitchens, plumbing rough-in, electrical upgrades, and custom cabinetry dominate the budget. Finish quality is the single most elastic variable, where luxury materials can double overall costs.
            </div>
          </div>

          <div class="hac-faq-card">
            <button class="hac-faq-q" onclick="hacToggleFaq(this)">
              How do I finance a residential home addition?
            </button>
            <div class="hac-faq-a">
              Common financing mechanisms include: (1) Home Equity Loans with fixed monthly payments, (2) HELOCs (Home Equity Lines of Credit) with flexible draw periods, (3) Cash-out mortgage refinances, (4) Construction-to-permanent loans for large multi-story expansions, and (5) Unsecured personal renovation loans for projects under $40,000.
            </div>
          </div>

        </div>
      </section>

    </article>

    <!-- SUPPORTING RIGHT SIDEBAR -->
    <aside class="hac-sidebar" aria-label="Reference Sidebars">
      <!-- Benchmark Widget -->
      <div class="hac-side-widget">
        <div class="hac-side-head">📊 <?php echo $currentYear; ?> Addition Benchmarks</div>
        <div class="hac-side-rows">
          <div class="hac-side-row">
            <span class="hac-side-lbl">Basic Bedroom</span>
            <span class="hac-side-val">$115 / sqft</span>
          </div>
          <div class="hac-side-row">
            <span class="hac-side-lbl">Primary Suite</span>
            <span class="hac-side-val">$175 / sqft</span>
          </div>
          <div class="hac-side-row">
            <span class="hac-side-lbl">Full Bathroom</span>
            <span class="hac-side-val">$230 / sqft</span>
          </div>
          <div class="hac-side-row">
            <span class="hac-side-lbl">Kitchen Extension</span>
            <span class="hac-side-val">$260 / sqft</span>
          </div>
          <div class="hac-side-row">
            <span class="hac-side-lbl">Second Story</span>
            <span class="hac-side-val">$200 / sqft</span>
          </div>
          <div class="hac-side-row">
            <span class="hac-side-lbl">Attached Garage</span>
            <span class="hac-side-val">$70 / sqft</span>
          </div>
        </div>
      </div>

      <!-- Related Calculators Widget -->
      <div class="hac-side-widget">
        <div class="hac-side-head">🏗️ Construction Calculators</div>
        <ul class="hac-side-links">
          <li><a href="<?php echo $baseUrl; ?>/construction/home-addition-cost-calculator" class="active">📐 Home Addition Cost</a></li>
          <li><a href="<?php echo $baseUrl; ?>/construction/concrete-calculator.php">🧱 Concrete Slab Calculator</a></li>
          <li><a href="<?php echo $baseUrl; ?>/construction/cubic-yard-calculator.php">📦 Cubic Yard Calculator</a></li>
          <li><a href="<?php echo $baseUrl; ?>/construction/stair-calculator.php">🪜 Stair Rise &amp; Run</a></li>
          <li><a href="<?php echo $baseUrl; ?>/construction/asphalt-calculator.php">🛣️ Asphalt Calculator</a></li>
          <li><a href="<?php echo $baseUrl; ?>/real-estate/cap-rate-calculator">📈 Cap Rate Calculator</a></li>
        </ul>
      </div>
    </aside>

  </div>

  <!-- Editorial Disclosure -->
  <div style="margin-top:2.5rem;padding:16px 20px;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:10px;">
    <p style="font-size:0.84rem;color:#166534;margin:0;line-height:1.6;">
      <strong>Editorial Methodology:</strong> This Home Addition Cost Estimator is maintained by the AmericaCalculator.com architectural engineering team using <?php echo $currentYear; ?> construction cost indices, US Census Bureau construction surveys, and contractor bidding databases. Last updated: September <?php echo $currentYear; ?>. Always secure 3+ formal bids from licensed and insured general contractors before executing agreements.
    </p>
  </div>

</div>
</main>

<script>
// ==========================================================================
// HOME ADDITION COST CALCULATOR ENGINE
// ==========================================================================

const HAC_DATA = {
  // Baseline cost per sq ft (Standard Quality, Midwest Baseline)
  BASE: {
    basic_room:   115,
    master_suite: 175,
    bathroom:     230,
    kitchen:      260,
    second_story: 200,
    garage:        70,
    sunroom:      130,
    bumpout:      130
  },
  // Trade allocation percentages by room type
  DIST: {
    basic_room:   { foundation: 0.12, framing: 0.20, roofing: 0.10, electrical: 0.08, plumbing: 0.02, hvac: 0.07, drywall: 0.12, flooring: 0.12, windows: 0.08, finishing: 0.09 },
    master_suite: { foundation: 0.10, framing: 0.18, roofing: 0.09, electrical: 0.07, plumbing: 0.12, hvac: 0.07, drywall: 0.11, flooring: 0.10, windows: 0.08, finishing: 0.08 },
    bathroom:     { foundation: 0.08, framing: 0.12, roofing: 0.07, electrical: 0.07, plumbing: 0.28, hvac: 0.05, drywall: 0.09, flooring: 0.09, windows: 0.05, finishing: 0.10 },
    kitchen:      { foundation: 0.08, framing: 0.12, roofing: 0.07, electrical: 0.08, plumbing: 0.20, hvac: 0.06, drywall: 0.09, flooring: 0.08, windows: 0.07, finishing: 0.15 },
    second_story: { foundation: 0.05, framing: 0.25, roofing: 0.10, electrical: 0.07, plumbing: 0.08, hvac: 0.07, drywall: 0.12, flooring: 0.10, windows: 0.08, finishing: 0.08 },
    garage:       { foundation: 0.18, framing: 0.22, roofing: 0.14, electrical: 0.10, plumbing: 0.01, hvac: 0.03, drywall: 0.08, flooring: 0.09, windows: 0.08, finishing: 0.07 },
    sunroom:      { foundation: 0.10, framing: 0.18, roofing: 0.12, electrical: 0.08, plumbing: 0.01, hvac: 0.06, drywall: 0.08, flooring: 0.10, windows: 0.17, finishing: 0.10 },
    bumpout:      { foundation: 0.06, framing: 0.22, roofing: 0.11, electrical: 0.08, plumbing: 0.04, hvac: 0.07, drywall: 0.13, flooring: 0.13, windows: 0.09, finishing: 0.07 }
  },
  QUALITY: {
    basic: 0.80,
    standard: 1.00,
    premium: 1.35,
    luxury: 1.80
  },
  QUALITY_DESC: {
    basic: 'Builder-grade materials, minimal trim, stock cabinets, standard fiberglass fixtures.',
    standard: 'Mid-grade materials, semi-custom cabinets, standard fixtures, typical builder finishes.',
    premium: 'High-end materials, quartz/granite, upgraded fixtures, custom millwork and tile.',
    luxury: 'Fully custom architectural build, imported finishes, bespoke cabinetry, premium masonry.'
  },
  REGION: {
    midwest: 1.00,
    northeast: 1.48,
    westcoast: 1.42,
    mountain: 1.18,
    south: 0.90
  },
  UP_PREMIUM: 1.18
};

function hacFormatCurr(num) {
  if (isNaN(num) || !isFinite(num)) return '$0';
  return '$' + Math.round(num).toLocaleString('en-US');
}

// 1. Room Type Selection
function hacSelectType(typeKey, btn) {
  document.querySelectorAll('.hac-type-btn').forEach(b => b.classList.remove('active'));
  if (btn) btn.classList.add('active');
  document.getElementById('hac_type').value = typeKey;

  // Set typical recommended dimensions for this addition
  if (typeKey === 'bathroom') {
    hacSetPreset(100, 10, 10);
  } else if (typeKey === 'bumpout') {
    hacSetPreset(120, 6, 20);
  } else if (typeKey === 'sunroom') {
    hacSetPreset(250, 12, 20);
  } else if (typeKey === 'garage') {
    hacSetPreset(480, 20, 24);
  } else if (typeKey === 'second_story') {
    hacSetPreset(800, 20, 40);
  } else if (typeKey === 'master_suite') {
    hacSetPreset(400, 20, 20);
  } else if (typeKey === 'basic_room') {
    hacSetPreset(300, 15, 20);
  }

  hacCalculate();
}

// 2. Dimension Handlers
function hacUpdateFromDimensions() {
  const w = parseFloat(document.getElementById('hac_width').value) || 0;
  const l = parseFloat(document.getElementById('hac_length').value) || 0;
  const area = Math.round(w * l);
  if (area > 0) {
    document.getElementById('hac_sqft').value = area;
    document.getElementById('hac_slider').value = Math.min(2500, Math.max(50, area));
  }
  hacCalculate();
}

function hacUpdateFromSqft() {
  const sqft = parseFloat(document.getElementById('hac_sqft').value) || 0;
  if (sqft > 0) {
    document.getElementById('hac_slider').value = Math.min(2500, Math.max(50, sqft));
    // Estimate a square aspect ratio for width and length
    const side = Math.round(Math.sqrt(sqft));
    document.getElementById('hac_width').value = side;
    document.getElementById('hac_length').value = Math.round(sqft / side);
  }
  hacCalculate();
}

function hacUpdateFromSlider(val) {
  const sqft = parseFloat(val) || 400;
  document.getElementById('hac_sqft').value = sqft;
  const side = Math.round(Math.sqrt(sqft));
  document.getElementById('hac_width').value = side;
  document.getElementById('hac_length').value = Math.round(sqft / side);
  hacCalculate();
}

function hacSetPreset(sqft, w, l) {
  document.getElementById('hac_sqft').value = sqft;
  document.getElementById('hac_width').value = w;
  document.getElementById('hac_length').value = l;
  document.getElementById('hac_slider').value = Math.min(2500, Math.max(50, sqft));
  hacCalculate();
}

// 3. Quality Tier Selection
function hacSelectQuality(tierKey, card) {
  document.querySelectorAll('.hac-quality-card').forEach(c => c.classList.remove('active'));
  if (card) card.classList.add('active');
  document.getElementById('hac_quality').value = tierKey;
  document.getElementById('hac_quality_desc').textContent = HAC_DATA.QUALITY_DESC[tierKey] || '';
  hacCalculate();
}

// 4. Contingency Update
function hacUpdateContingency(val) {
  document.getElementById('hac_cont_val').textContent = val + '% ' + (val >= 15 ? 'Conservative Buffer' : 'Recommended');
  hacCalculate();
}

// 5. Main Calculation Function
function hacCalculate() {
  const typeKey   = document.getElementById('hac_type').value || 'basic_room';
  const sqft      = parseFloat(document.getElementById('hac_sqft').value) || 400;
  const quality   = document.getElementById('hac_quality').value || 'standard';
  const region    = document.getElementById('hac_region').value || 'midwest';
  const direction = document.getElementById('hac_direction').value || 'out';
  const contPct   = parseFloat(document.getElementById('hac_cont_slider').value) || 10;

  if (sqft <= 0) return;

  const baseRate   = HAC_DATA.BASE[typeKey] || 115;
  const qMult      = HAC_DATA.QUALITY[quality] || 1.00;
  const rMult      = HAC_DATA.REGION[region] || 1.00;
  const dMult      = (direction === 'up' && typeKey !== 'second_story') ? HAC_DATA.UP_PREMIUM : 1.00;

  const costPerSqft = baseRate * qMult * rMult * dMult;
  const subtotal    = costPerSqft * sqft;
  const permits     = Math.min(Math.max(subtotal * 0.025, 500), 4000);
  const contingency = subtotal * (contPct / 100);
  const totalCost   = subtotal + permits + contingency;

  const lowEstimate  = totalCost * 0.85;
  const highEstimate = totalCost * 1.15;

  // Primary outputs
  document.getElementById('hac_res_total').textContent = hacFormatCurr(totalCost);
  document.getElementById('hac_res_range').textContent =
    'Estimated Range: ' + hacFormatCurr(lowEstimate) + ' – ' + hacFormatCurr(highEstimate);
  document.getElementById('hac_res_sqft').innerHTML =
    hacFormatCurr(costPerSqft) + '<span style="font-size:0.8rem;color:#64748b;font-weight:600;"> / sqft</span>';
  document.getElementById('hac_res_permits').textContent = hacFormatCurr(permits);
  document.getElementById('hac_res_subtotal').textContent = hacFormatCurr(subtotal);
  document.getElementById('hac_res_contingency').textContent = hacFormatCurr(contingency);

  // Trade itemization
  const dist = HAC_DATA.DIST[typeKey] || HAC_DATA.DIST.basic_room;
  document.getElementById('t-foundation').textContent = hacFormatCurr(subtotal * dist.foundation);
  document.getElementById('t-framing').textContent    = hacFormatCurr(subtotal * dist.framing);
  document.getElementById('t-roofing').textContent    = hacFormatCurr(subtotal * dist.roofing);
  document.getElementById('t-electrical').textContent = hacFormatCurr(subtotal * dist.electrical);
  document.getElementById('t-plumbing').textContent   = hacFormatCurr(subtotal * dist.plumbing);
  document.getElementById('t-hvac').textContent       = hacFormatCurr(subtotal * dist.hvac);
  document.getElementById('t-drywall').textContent    = hacFormatCurr(subtotal * dist.drywall);
  document.getElementById('t-flooring').textContent   = hacFormatCurr(subtotal * dist.flooring);
  document.getElementById('t-windows').textContent    = hacFormatCurr(subtotal * dist.windows);
  document.getElementById('t-finishing').textContent  = hacFormatCurr(subtotal * dist.finishing);
  document.getElementById('t-permits').textContent    = hacFormatCurr(permits);
  document.getElementById('t-contingency').textContent= hacFormatCurr(contingency);
  document.getElementById('t-total').textContent      = hacFormatCurr(totalCost);

  // National Gauge
  let gaugePct = ((costPerSqft - 80) / (350 - 80)) * 100;
  gaugePct = Math.max(3, Math.min(97, gaugePct));
  document.getElementById('hac_gauge_fill').style.width = gaugePct + '%';

  let gaugeLabel = 'Mid-Range';
  let verdictText = '';
  if (costPerSqft < 110) {
    gaugeLabel = 'Budget Range';
    verdictText = 'Typical for unfinished garages and basic dry rooms with stock materials.';
  } else if (costPerSqft < 165) {
    gaugeLabel = 'Mid-Range';
    verdictText = 'Standard bedrooms, sunrooms, and bump-outs with mid-grade finishes in average-cost US markets.';
  } else if (costPerSqft < 225) {
    gaugeLabel = 'Above Average';
    verdictText = 'Primary master suites, large second stories, or premium finishes with custom trim.';
  } else if (costPerSqft < 290) {
    gaugeLabel = 'High Range';
    verdictText = 'Bathrooms, expanded chef kitchens, or additions in high-cost metro regions (Northeast/West Coast).';
  } else {
    gaugeLabel = 'Luxury / Complex';
    verdictText = 'Fully custom architectural expansion with premium imported materials and high-end mechanicals.';
  }
  document.getElementById('hac_gauge_pct').textContent = gaugeLabel;
  document.getElementById('hac_gauge_verdict').innerHTML = '<strong>' + gaugeLabel + ':</strong> ' + verdictText;
}

// 6. Reset to Defaults
function hacResetDefaults() {
  document.getElementById('hac_width').value = 20;
  document.getElementById('hac_length').value = 20;
  document.getElementById('hac_sqft').value = 400;
  document.getElementById('hac_slider').value = 400;
  document.getElementById('hac_region').value = 'midwest';
  document.getElementById('hac_direction').value = 'out';
  document.getElementById('hac_cont_slider').value = 10;
  document.getElementById('hac_cont_val').textContent = '10% Recommended';

  const defaultTypeBtn = document.querySelector('.hac-type-btn[data-type="basic_room"]');
  hacSelectType('basic_room', defaultTypeBtn);

  const defaultQualityCard = document.querySelector('.hac-quality-card[data-q="standard"]');
  hacSelectQuality('standard', defaultQualityCard);
}

// 7. FAQ Accordion Toggle
function hacToggleFaq(btn) {
  const card = btn.closest('.hac-faq-card');
  const wasOpen = card.classList.contains('open');
  document.querySelectorAll('.hac-faq-card').forEach(c => c.classList.remove('open'));
  if (!wasOpen) card.classList.add('open');
}

// Initialize on Load
document.addEventListener('DOMContentLoaded', function () {
  hacCalculate();
});
</script>

<?php require_once '../includes/footer.php'; ?>
