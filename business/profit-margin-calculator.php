<?php
$currentYear = date('Y');

// ─── SEO Meta ────────────────────────────────────────────────────────────────
$pageTitle       = "Profit Margin Calculator ($currentYear) | Gross & Net";
$metaDescription = "Free $currentYear profit margin calculator. Instantly calculate gross margin, operating margin, and net margin. Includes industry benchmarks, reverse price-finder, and visual revenue breakdown.";
$metaKeywords    = 'profit margin calculator, gross margin calculator, net profit margin calculator, operating margin calculator, profit margin formula, how to calculate profit margin, price from margin calculator';

// ─── Structured Data ─────────────────────────────────────────────────────────
$schemaData = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'               => 'WebApplication',
            'name'                => 'Profit Margin Calculator',
            'url'                 => 'https://americacalculator.com/business/profit-margin-calculator',
            'description'         => "Free $currentYear profit margin calculator. Calculate gross, operating, and net profit margins instantly with visual revenue breakdown and industry benchmarks.",
            'applicationCategory' => 'BusinessApplication',
            'operatingSystem'     => 'All',
            'offers'              => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD'],
        ],
        [
            '@type'     => 'HowTo',
            'name'      => 'How to Calculate Profit Margin',
            'totalTime' => 'PT2M',
            'step'      => [
                ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Choose calculation mode', 'text' => 'Select Full Margin Analysis to calculate all three margins from your financials, or Price Finder to reverse-engineer the selling price needed to hit a target margin.'],
                ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Enter Revenue and COGS', 'text' => 'Revenue is your total sales income. COGS is only the direct cost of producing what you sold — materials, manufacturing, wholesale purchase price. Do not include rent, salaries, or overhead.'],
                ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Add Operating Expenses and Tax Rate', 'text' => 'Operating expenses include rent, salaries, utilities, and marketing. Add your effective tax rate to see true net margin after taxes.'],
                ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Compare to industry benchmarks', 'text' => 'Review the benchmark table to see how your margins compare to typical businesses in your sector. Context is everything — a 5% net margin is excellent in grocery but weak in software.'],
            ],
        ],
        [
            '@type'      => 'FAQPage',
            'mainEntity' => [
                ['@type' => 'Question', 'name' => "What is a good profit margin in $currentYear?", 'acceptedAnswer' => ['@type' => 'Answer', 'text' => "A good profit margin depends on industry. Net margins: grocery 1–3%; restaurants 3–9%; construction 2–6%; SaaS 10–25%; consulting 15–30%. Gross margins follow similar patterns but are always higher. Check the $currentYear benchmark table on this page for your specific sector."]],
                ['@type' => 'Question', 'name' => 'What is the difference between gross margin and net margin?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Gross margin only subtracts COGS from revenue. Net margin subtracts everything — COGS, operating expenses, interest, and taxes. Net margin is always lower and is the definitive measure of total business profitability.']],
                ['@type' => 'Question', 'name' => 'What is the difference between profit margin and markup?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Margin is profit as a percentage of the selling price. Markup is profit as a percentage of cost. A 50% markup equals a 33.3% margin. A 100% markup equals a 50% margin. Confusing these is a common pricing mistake.']],
                ['@type' => 'Question', 'name' => 'How do I calculate selling price from a desired profit margin?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Use the formula: Selling Price = Cost / (1 − Desired Margin %). Example: cost $60, target 40% margin → Price = $60 / 0.60 = $100. Use the Price Finder tab on this page to calculate this instantly.']],
                ['@type' => 'Question', 'name' => 'Why is my gross margin high but net margin low?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Operating expenses are consuming most of your gross profit. Common culprits: excessive rent, bloated headcount, high marketing spend, or heavy debt service. AAnalyze each operating expense line as a percentage of revenue and compare to industry norms.']],
                ['@type' => 'Question', 'name' => 'What should not be included in COGS?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'COGS includes only direct production costs: raw materials, manufacturing labor, wholesale purchase cost, direct shipping. COGS does NOT include rent, management salaries, marketing, software subscriptions, or admin overhead — those are operating expenses.']],
                ['@type' => 'Question', 'name' => 'What is operating margin and why does it matter?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Operating margin (EBIT margin) = Operating Profit / Revenue. It measures profitability from core operations before interest and taxes — making it the best metric for comparing businesses regardless of financing structure or tax situation.']],
                ['@type' => 'Question', 'name' => 'How can I improve my profit margin?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Two levers: raise revenue quality (higher prices, better-margin products, upsell mix shift) and reduce costs (negotiate COGS, automate operations, cut underperforming marketing). A 1% improvement in gross margin on $500,000 revenue equals $5,000 in additional profit with zero additional sales.']],
            ],
        ],
    ],
    ['@type' => 'BreadcrumbList', 'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Business', 'item' => 'https://americacalculator.com/business/'],
      ['@type' => 'ListItem', 'position' => 3, 'name' => 'Profit Margin Calculator', 'item' => 'https://americacalculator.com/business/profit-margin-calculator'],
    ]],

];

require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
/* ── Page base ── */
body { background: #f5f7fa; }

.pm-page-wrap {
  max-width: 1320px; margin: 0 auto; padding: 2rem 1.5rem 4rem;
  display: grid; grid-template-columns: 220px 1fr 260px; gap: 2rem; align-items: start;
}

/* ── Left TOC ── */
.toc-sidebar {
  position: sticky; top: 6rem; background: #fff; border-radius: 12px;
  border: 1px solid #e8edf5; box-shadow: 0 2px 12px rgba(0,0,0,0.04); overflow: hidden;
}
.toc-sidebar-header {
  background: linear-gradient(135deg, #7c3aed 0%, #5b21b6 100%);
  color: #fff; padding: 1rem 1.25rem; font-weight: 700; font-size: 0.85rem;
  text-transform: uppercase; letter-spacing: 0.8px;
}
.toc-list { list-style: none; padding: 0.75rem 0; margin: 0; }
.toc-list li a {
  display: block; padding: 0.5rem 1.25rem; font-size: 0.84rem; color: #475569;
  text-decoration: none; border-left: 3px solid transparent; transition: all 0.18s; line-height: 1.4;
}
.toc-list li a:hover, .toc-list li a.toc-active { color: #7c3aed; background: #f5f3ff; border-left-color: #7c3aed; }
.toc-divider { height: 1px; background: #f1f5f9; margin: 0.5rem 0; }
.toc-related-label { padding: 0.5rem 1.25rem; font-size: 0.78rem; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; }
.toc-related-list { list-style: none; padding: 0; margin: 0 0 0.75rem; }
.toc-related-list li a { display: block; padding: 0.4rem 1.25rem; font-size: 0.82rem; color: #64748b; text-decoration: none; transition: color 0.15s; }
.toc-related-list li a:hover { color: #7c3aed; }

/* ── Main content ── */
.pm-main { min-width: 0; }

.pm-hero { margin-bottom: 2rem; }
.pm-hero h1 { font-size: 2.1rem; color: #0f172a; margin: 0 0 0.6rem; line-height: 1.25; }
.pm-hero .hero-desc { font-size: 1.05rem; color: #64748b; line-height: 1.65; margin: 0 0 0.75rem; border-left: 4px solid #a78bfa; padding-left: 1rem; }
.pm-hero .breadcrumb { font-size: 0.8rem; color: #94a3b8; margin-bottom: 0.75rem; }
.pm-hero .breadcrumb a { color: #64748b; text-decoration: none; }
.pm-hero .breadcrumb a:hover { color: #7c3aed; }

/* ── Calculator card ── */
.pm-calc-card {
  background: #fff; border-radius: 14px; box-shadow: 0 4px 24px rgba(0,0,0,0.05);
  border: 1px solid #eef2f7; margin-bottom: 2.5rem; overflow: hidden;
}
.pm-tabs { display: flex; border-bottom: 1px solid #e2e8f0; background: #f8fafc; }
.pm-tab {
  flex: 1; text-align: center; padding: 1rem 0.5rem; font-size: 0.9rem; font-weight: 600;
  color: #64748b; cursor: pointer; border-bottom: 3px solid transparent; transition: all 0.2s;
  background: none; border-top: none; border-left: none; border-right: none;
}
.pm-tab:hover { color: #7c3aed; background: #f5f3ff; }
.pm-tab.active { color: #7c3aed; border-bottom-color: #7c3aed; background: #fff; }

.pm-calc-inner { display: grid; grid-template-columns: 1fr 1fr; }
.pm-form-panel { padding: 2rem; border-right: 1px solid #f0f4fa; }
.pm-results-panel { padding: 2rem; background: linear-gradient(160deg, #f8fafc 0%, #f5f3ff 100%); }

.pm-tab-panel { display: none; }
.pm-tab-panel.active { display: block; }
.pm-panel-desc { font-size: 0.85rem; color: #64748b; margin-bottom: 1.5rem; line-height: 1.5; }

.pm-field { margin-bottom: 1.3rem; }
.pm-field label { display: block; font-weight: 600; font-size: 0.9rem; color: #1e293b; margin-bottom: 0.45rem; }
.pm-field input {
  width: 100%; padding: 13px 15px; border: 1.5px solid #d1dae8; border-radius: 8px;
  font-size: 1rem; color: #0f172a; outline: none; transition: border-color 0.2s, box-shadow 0.2s;
  box-sizing: border-box; background: #fff;
}
.pm-field input:focus { border-color: #7c3aed; box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.12); }
.pm-field .field-hint { font-size: 0.78rem; color: #94a3b8; margin-top: 0.35rem; line-height: 1.4; }
.pm-field .optional-badge { font-size: 0.7rem; font-weight: 400; color: #94a3b8; margin-left: 0.3rem; }
.pm-form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }

.pm-btn-calc {
  width: 100%; background: linear-gradient(135deg, #7c3aed 0%, #5b21b6 100%);
  color: #fff; padding: 15px; border: none; border-radius: 9px; font-size: 1rem;
  font-weight: 700; cursor: pointer; margin-top: 0.5rem; transition: opacity 0.2s, transform 0.15s;
}
.pm-btn-calc:hover { opacity: 0.92; transform: translateY(-1px); }

/* Results */
.pm-results-heading { font-size: 1.15rem; font-weight: 700; color: #0f172a; margin: 0 0 0.25rem; }
.pm-results-sub { font-size: 0.84rem; color: #64748b; margin: 0 0 1.25rem; }

/* Tier cards */
.pm-tier-cards { display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.25rem; }
.pm-tier {
  border-radius: 10px; padding: 1rem 1.1rem; border-left: 4px solid transparent;
}
.pm-tier--gross { background: #f0fdf4; border-left-color: #1abc9c; }
.pm-tier--op    { background: #fffbeb; border-left-color: #f59e0b; }
.pm-tier--net   { background: #eff6ff; border-left-color: #3b82f6; }
.pm-tier-header { display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 0.4rem; }
.pm-tier-label  { font-weight: 800; font-size: 0.85rem; color: #1e293b; }
.pm-tier-formula { font-size: 0.72rem; color: #94a3b8; }
.pm-tier-body   { display: flex; align-items: baseline; gap: 0.75rem; }
.pm-tier-amount { font-size: 1.5rem; font-weight: 900; color: #0f172a; line-height: 1; }
.pm-tier-amount.neg { color: #dc2626; }
.pm-tier-pct    { font-size: 0.95rem; font-weight: 700; color: #64748b; }
.pm-tier-note   { font-size: 0.75rem; color: #64748b; margin-top: 0.35rem; }

/* Primary result box (Price Finder) */
.pm-primary-box {
  background: linear-gradient(135deg, #7c3aed, #5b21b6);
  border-radius: 10px; padding: 1.35rem 1rem; text-align: center;
  box-shadow: 0 6px 18px rgba(124,58,237,0.22); margin-bottom: 0.75rem;
}
.pm-primary-val { display: block; font-size: 2.2rem; font-weight: 800; color: #fff; line-height: 1; margin-bottom: 0.2rem; }
.pm-primary-lbl { font-size: 0.88rem; color: rgba(255,255,255,0.8); }
.pm-sub-boxes { display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; }
.pm-sub-box { background: #fff; border: 1.5px solid #e8edf5; border-radius: 10px; padding: 0.9rem 0.75rem; text-align: center; }
.pm-sub-val { display: block; font-size: 1.2rem; font-weight: 800; color: #7c3aed; margin-bottom: 0.15rem; }
.pm-sub-lbl { font-size: 0.75rem; color: #64748b; font-weight: 600; }

/* Revenue ladder */
.pm-ladder { margin-top: 1rem; background: #fff; padding: 0.9rem; border-radius: 10px; border: 1px solid #e2e8f0; }
.pm-ladder-title { font-size: 0.72rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; color: #94a3b8; margin-bottom: 0.5rem; }
.pm-ladder-bar { display: flex; height: 2rem; border-radius: 6px; overflow: hidden; margin-bottom: 0.4rem; }
.pml-seg { display: flex; align-items: center; justify-content: center; font-size: 0.62rem; font-weight: 700; color: rgba(255,255,255,0.9); white-space: nowrap; overflow: hidden; transition: width 0.4s; }
.pml-cogs { background: #e74c3c; } .pml-opex { background: #f59e0b; }
.pml-tax  { background: #8b5cf6; } .pml-net  { background: #1abc9c; }
.pml-rest { background: #e2e8f0; }
.pm-ladder-legend { display: flex; align-items: center; gap: 0.75rem; flex-wrap: wrap; font-size: 0.72rem; color: #64748b; }
.pml-dot { display: inline-block; width: 9px; height: 9px; border-radius: 2px; margin-right: 0.2rem; vertical-align: middle; }
.pml-dot-cogs{background:#e74c3c;} .pml-dot-opex{background:#f59e0b;}
.pml-dot-tax{background:#8b5cf6;} .pml-dot-net{background:#1abc9c;}

/* Content sections */
.pm-section {
  background: #fff; border-radius: 14px; border: 1px solid #eef2f7;
  box-shadow: 0 2px 12px rgba(0,0,0,0.03); padding: 2.25rem;
  margin-bottom: 2rem; scroll-margin-top: 6rem;
}
.pm-section h2 { font-size: 1.65rem; color: #0f172a; margin: 0 0 1.25rem; padding-bottom: 0.75rem; border-bottom: 2px solid #f0f4fa; }
.pm-section h3 { font-size: 1.18rem; color: #1e293b; margin: 1.75rem 0 0.7rem; }
.pm-section p  { color: #475569; line-height: 1.75; margin-bottom: 1.25rem; font-size: 1rem; }
.pm-section ul, .pm-section ol { color: #475569; line-height: 1.75; padding-left: 1.5rem; margin-bottom: 1.25rem; }
.pm-section li { margin-bottom: 0.5rem; }
.pm-section strong { color: #1e293b; }

.pm-formula-box { background: #1a2a3a; color: #a78bfa; font-family: 'Courier New', monospace; font-size: 1rem; padding: 1.1rem 1.4rem; border-radius: 8px; margin: 1.25rem 0; line-height: 1.9; }
.pm-formula-box code { display: block; }

/* Benchmark table */
.pm-table { width: 100%; border-collapse: collapse; border-radius: 10px; overflow: hidden; border: 1px solid #e8edf5; margin-bottom: 1.5rem; }
.pm-table th { background: #7c3aed; color: #fff; padding: 13px 16px; text-align: left; font-size: 0.88rem; font-weight: 600; }
.pm-table td { padding: 11px 16px; border-bottom: 1px solid #f1f5f9; font-size: 0.9rem; color: #334155; }
.pm-table tr:last-child td { border-bottom: none; }
.pm-table tr:nth-child(even) td { background: #f8fafc; }

/* Info/warning boxes */
.pm-info-box  { background: #f5f3ff; border-left: 4px solid #7c3aed; border-radius: 0 8px 8px 0; padding: 1rem 1.25rem; margin: 1.25rem 0; font-size: 0.95rem; color: #5b21b6; line-height: 1.6; }
.pm-warn-box  { background: #fffbeb; border-left: 4px solid #d97706; border-radius: 0 8px 8px 0; padding: 1rem 1.25rem; margin: 1.25rem 0; font-size: 0.95rem; color: #92400e; line-height: 1.6; }

/* FAQ accordion */
.pm-faq-item { border-bottom: 1px solid #f0f4fa; padding-bottom: 1.25rem; margin-bottom: 1.25rem; }
.pm-faq-item:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
.pm-faq-q { font-size: 1.02rem; font-weight: 700; color: #0f172a; margin-bottom: 0.6rem; cursor: pointer; display: flex; justify-content: space-between; align-items: flex-start; gap: 1rem; }
.pm-faq-q::after { content: '+'; font-size: 1.3rem; color: #7c3aed; flex-shrink: 0; }
.pm-faq-item.open .pm-faq-q::after { content: '−'; }
.pm-faq-a { color: #475569; line-height: 1.7; font-size: 0.97rem; display: none; }
.pm-faq-item.open .pm-faq-a { display: block; }

/* Sensitivity table (price finder) */
.pm-sensitivity { margin-top: 1rem; }
.pm-sensitivity-title { font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; color: #94a3b8; margin-bottom: 0.5rem; }

/* ── Right sidebar ── */
.pm-right-sidebar { position: sticky; top: 6rem; display: flex; flex-direction: column; gap: 1.25rem; }

.pm-widget { background: #fff; border-radius: 12px; border: 1px solid #e8edf5; box-shadow: 0 4px 18px rgba(0,0,0,0.05); overflow: hidden; }
.pm-widget-header { background: linear-gradient(135deg, #7c3aed, #5b21b6); color: #fff; padding: 1rem 1.25rem; }
.pm-widget-title { font-size: 1rem; font-weight: 700; }
.pm-widget-subtitle { font-size: 0.8rem; color: rgba(255,255,255,0.75); }
.pm-widget-updated { font-size: 0.72rem; color: rgba(255,255,255,0.6); margin-top: 0.35rem; }

.pm-stat-list { padding: 0.5rem 0; }
.pm-stat-row { display: flex; justify-content: space-between; align-items: center; padding: 0.65rem 1.25rem; border-bottom: 1px solid #f8fafc; transition: background 0.15s; }
.pm-stat-row:last-child { border-bottom: none; }
.pm-stat-row:hover { background: #f5f3ff; }
.pm-stat-label  { font-size: 0.82rem; font-weight: 600; color: #334155; }
.pm-stat-sub    { font-size: 0.72rem; color: #94a3b8; }
.pm-stat-value  { font-size: 1.05rem; font-weight: 800; color: #7c3aed; }
.pm-stat-change { font-size: 0.7rem; color: #94a3b8; text-align: right; }

.pm-widget-footer { padding: 0.85rem 1.25rem; border-top: 1px solid #f0f4fa; background: #f8fafc; }
.pm-widget-footer p  { font-size: 0.75rem; color: #64748b; margin: 0 0 0.5rem; line-height: 1.3; }
.pm-widget-footer a  { font-size: 0.83rem; font-weight: 700; color: #7c3aed; text-decoration: none; display: flex; align-items: center; gap: 0.35rem; }
.pm-widget-footer a:hover { text-decoration: underline; }

.pm-loading { display: flex; align-items: center; gap: 0.5rem; padding: 1rem 1.25rem; font-size: 0.82rem; color: #94a3b8; }
.pm-spinner-dot { width: 6px; height: 6px; background: #a78bfa; border-radius: 50%; animation: pm-pulse 1.4s infinite ease-in-out; }
.pm-spinner-dot:nth-child(2){animation-delay:.2s;} .pm-spinner-dot:nth-child(3){animation-delay:.4s;}
@keyframes pm-pulse { 0%,80%,100%{transform:scale(.6);opacity:.4} 40%{transform:scale(1);opacity:1} }

.pm-quick-widget { background: #fff; border-radius: 12px; border: 1px solid #e8edf5; box-shadow: 0 2px 12px rgba(0,0,0,0.04); overflow: hidden; }
.pm-quick-header { padding: 0.9rem 1.25rem; background: #f8fafc; border-bottom: 1px solid #f0f4fa; font-size: 0.83rem; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; }
.pm-quick-links  { list-style: none; padding: 0.5rem 0; margin: 0; }
.pm-quick-links li a { display: flex; align-items: center; gap: 0.5rem; padding: 0.65rem 1.25rem; font-size: 0.85rem; color: #475569; text-decoration: none; border-left: 3px solid transparent; transition: all 0.15s; font-weight: 500; }
.pm-quick-links li a:hover, .pm-quick-links li a.active { color: #7c3aed; background: #f5f3ff; border-left-color: #7c3aed; }

/* ── Responsive ── */
@media (max-width:1200px){ .pm-page-wrap{ grid-template-columns:200px 1fr 240px; } }
@media (max-width:1024px){
  .pm-page-wrap{ grid-template-columns:1fr; }
  .toc-sidebar, .pm-right-sidebar{ position:static; }
  .pm-right-sidebar{ display:grid; grid-template-columns:1fr 1fr; }
}
@media (max-width:768px){
  .pm-page-wrap{ padding:1rem 1rem 3rem; }
  .pm-calc-inner{ grid-template-columns:1fr; }
  .pm-form-panel{ border-right:none; border-bottom:1px solid #f0f4fa; }
  .pm-right-sidebar{ grid-template-columns:1fr; }
  .pm-tabs{ flex-direction:column; }
  .pm-tab{ border-left:3px solid transparent; border-bottom:none; text-align:left; padding:0.75rem 1.25rem; }
  .pm-tab.active{ border-left-color:#7c3aed; }
  .pm-form-row{ grid-template-columns:1fr; }
}
</style>

<main id="main-content">
<div class="pm-page-wrap">

  <!-- ══════════════════════════════════════
       LEFT: TABLE OF CONTENTS SIDEBAR
  ══════════════════════════════════════ -->
  <aside class="toc-sidebar">
    <div class="toc-sidebar-header">📋 In This Article</div>
    <ul class="toc-list">
      <li><a href="#calculator" class="toc-active">Profit Margin Calculator</a></li>
      <li><a href="#how-to-use">How to Use</a></li>
      <li><a href="#three-margin">Gross vs. Operating vs. Net</a></li>
      <li><a href="#margin-vs-markup">Margin vs. Markup</a></li>
      <li><a href="#benchmark"><?php echo $currentYear; ?> Industry Benchmarks</a></li>
      <li><a href="#improve">How to Improve Margins</a></li>
      <li><a href="#faq">FAQ</a></li>
    </ul>
    <div class="toc-divider"></div>
    <div class="toc-related-label">Related Calculators</div>
    <ul class="toc-related-list">
      <li><a href="<?php echo $baseUrl; ?>/business/markup-calculator">Markup Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/business/freelance-rate-calculator">Freelance Rate</a></li>
      <li><a href="<?php echo $baseUrl; ?>/loan-calculators/business-loan-calculator">Business Loan</a></li>
      <li><a href="<?php echo $baseUrl; ?>/real-estate/cap-rate-calculator">Cap Rate Calculator</a></li>
    </ul>
  </aside>

  <!-- ══════════════════════════════════════
       CENTER: MAIN CONTENT
  ══════════════════════════════════════ -->
  <div class="pm-main">

    <!-- HERO -->
    <div class="pm-hero">
      <div class="breadcrumb">
        <a href="<?php echo $baseUrl; ?>/index.php">Home</a> ›
        <a href="<?php echo $baseUrl; ?>/business/">Business</a> ›
        Profit Margin Calculator
      </div>
      <h1>Profit Margin Calculator (<?php echo $currentYear; ?>)</h1>
      <p class="hero-desc">
        Calculate <strong>gross margin</strong>, <strong>operating margin</strong>, and <strong>net margin</strong>
        from a single set of inputs — or flip to <strong>Price Finder</strong> mode to reverse-engineer the exact
        selling price you need to hit a target margin. Includes <?php echo $currentYear; ?> industry benchmarks.
      </p>
    </div>

    <!-- ── CALCULATOR ── -->
    <div class="pm-calc-card" id="calculator">
      <div class="pm-tabs">
        <button class="pm-tab active" data-target="pm-panel-analysis">📊 Full Margin Analysis</button>
        <button class="pm-tab" data-target="pm-panel-price">🎯 Price Finder</button>
      </div>

      <div class="pm-calc-inner">
        <!-- FORM -->
        <div class="pm-form-panel">

          <!-- Panel 1: Full Analysis -->
          <div id="pm-panel-analysis" class="pm-tab-panel active">
            <p class="pm-panel-desc">Enter revenue and COGS to instantly see gross margin. Add operating expenses and a tax rate to unlock all three margin tiers.</p>
            <div class="pm-form-row">
              <div class="pm-field">
                <label for="pm_revenue">Total Revenue ($)</label>
                <input type="number" id="pm_revenue" value="250000" min="1" step="100" placeholder="e.g. 250000">
                <div class="field-hint">Total sales income before any deductions</div>
              </div>
              <div class="pm-field">
                <label for="pm_cogs">Cost of Goods Sold — COGS ($)</label>
                <input type="number" id="pm_cogs" value="125000" min="0" step="100" placeholder="e.g. 125000">
                <div class="field-hint">Direct cost to produce — not overhead</div>
              </div>
            </div>

            <div class="pm-form-row">
              <div class="pm-field">
                <label for="pm_opex">Operating Expenses ($) <span class="pm-field .optional-badge">(optional)</span></label>
                <input type="number" id="pm_opex" min="0" step="100" placeholder="e.g. 60000">
                <div class="field-hint">Rent, salaries, marketing, admin</div>
              </div>
              <div class="pm-field">
                <label for="pm_tax">Effective Tax Rate (%) <span class="pm-field .optional-badge">(optional)</span></label>
                <input type="number" id="pm_tax" min="0" max="99" step="0.1" placeholder="e.g. 21">
                <div class="field-hint">US C-corp ~21% · Pass-through ~15–37%</div>
              </div>
            </div>
          </div>

          <!-- Panel 2: Price Finder -->
          <div id="pm-panel-price" class="pm-tab-panel">
            <p class="pm-panel-desc">Know your cost? Enter it along with the gross margin you need — we'll calculate the exact selling price and show equivalent markup.</p>
            <div class="pm-form-row">
              <div class="pm-field">
                <label for="pm_cost">Cost per Unit ($)</label>
                <input type="number" id="pm_cost" value="60" min="0.01" step="0.01" placeholder="e.g. 60.00">
                <div class="field-hint">What it costs you to produce or purchase one unit</div>
              </div>
              <div class="pm-field">
                <label for="pm_target">Target Gross Margin (%)</label>
                <input type="number" id="pm_target" value="40" min="1" max="99" step="0.1" placeholder="e.g. 40">
                <div class="field-hint">The margin % you need on the selling price</div>
              </div>
            </div>
          </div>

          <button type="button" class="pm-btn-calc" id="pm-btn-calc">⚡ Calculate</button>
        </div>

        <!-- RESULTS -->
        <div class="pm-results-panel">
          <h3 class="pm-results-heading">Results</h3>
          <p class="pm-results-sub" id="pm-res-sub">Based on your inputs</p>

          <!-- Analysis results -->
          <div id="pm-res-analysis">
            <div class="pm-tier-cards">
              <div class="pm-tier pm-tier--gross" id="pm-tier-gross">
                <div class="pm-tier-header">
                  <span class="pm-tier-label">Gross Profit</span>
                  <span class="pm-tier-formula">Revenue − COGS</span>
                </div>
                <div class="pm-tier-body">
                  <div class="pm-tier-amount" id="pm-gross-amt">$125,000</div>
                  <div class="pm-tier-pct" id="pm-gross-pct">50.00% margin</div>
                </div>
                <div class="pm-tier-note" id="pm-gross-note">✅ Strong gross margin for most business types.</div>
              </div>

              <div class="pm-tier pm-tier--op" id="pm-tier-op" style="display:none;">
                <div class="pm-tier-header">
                  <span class="pm-tier-label">Operating Profit (EBIT)</span>
                  <span class="pm-tier-formula">Gross Profit − OpEx</span>
                </div>
                <div class="pm-tier-body">
                  <div class="pm-tier-amount" id="pm-op-amt">--</div>
                  <div class="pm-tier-pct" id="pm-op-pct"></div>
                </div>
                <div class="pm-tier-note" id="pm-op-note"></div>
              </div>

              <div class="pm-tier pm-tier--net" id="pm-tier-net" style="display:none;">
                <div class="pm-tier-header">
                  <span class="pm-tier-label">Net Profit (After Tax)</span>
                  <span class="pm-tier-formula">Operating Profit − Tax</span>
                </div>
                <div class="pm-tier-body">
                  <div class="pm-tier-amount" id="pm-net-amt">--</div>
                  <div class="pm-tier-pct" id="pm-net-pct"></div>
                </div>
                <div class="pm-tier-note" id="pm-net-note"></div>
              </div>
            </div>

            <!-- Revenue ladder -->
            <div class="pm-ladder" id="pm-ladder">
              <div class="pm-ladder-title">Where Every Dollar Goes</div>
              <div class="pm-ladder-bar" id="pm-ladder-bar">
                <div class="pml-seg pml-cogs" id="pml-cogs" style="width:50%">COGS 50%</div>
                <div class="pml-seg pml-net"  id="pml-net"  style="width:50%">Profit 50%</div>
              </div>
              <div class="pm-ladder-legend">
                <span><span class="pml-dot pml-dot-cogs"></span> COGS</span>
                <span id="pml-legend-opex" style="display:none"><span class="pml-dot pml-dot-opex"></span> OpEx</span>
                <span id="pml-legend-tax"  style="display:none"><span class="pml-dot pml-dot-tax"></span> Tax</span>
                <span><span class="pml-dot pml-dot-net"></span> Profit</span>
              </div>
            </div>
          </div>

          <!-- Price finder results -->
          <div id="pm-res-price" style="display:none;">
            <div class="pm-primary-box">
              <span class="pm-primary-val" id="pm-price-val">$100.00</span>
              <span class="pm-primary-lbl">Required Selling Price</span>
            </div>
            <div class="pm-sub-boxes">
              <div class="pm-sub-box">
                <span class="pm-sub-val" id="pm-profit-val">$40.00</span>
                <span class="pm-sub-lbl">Gross Profit / Unit</span>
              </div>
              <div class="pm-sub-box">
                <span class="pm-sub-val" id="pm-markup-val">66.67%</span>
                <span class="pm-sub-lbl">Equivalent Markup</span>
              </div>
            </div>

            <div class="pm-sensitivity" id="pm-sensitivity">
              <div class="pm-sensitivity-title">Price Sensitivity</div>
              <table class="pm-table" style="font-size:0.84rem;">
                <thead><tr><th>Target Margin</th><th>Selling Price</th><th>Markup</th></tr></thead>
                <tbody id="pm-sensitivity-body"></tbody>
              </table>
            </div>
          </div>

          <p style="margin-top:0.75rem; font-size:0.75rem; color:#64748b;">
            *Margin = Profit / Revenue. Does not include interest or non-operating income unless added to OpEx.
          </p>
        </div>
      </div>
    </div><!-- /pm-calc-card -->


    <!-- ── HOW TO USE ── -->
    <section class="pm-section" id="how-to-use">
      <h2>How to Use This Profit Margin Calculator</h2>
      <p>
        There are two modes. <strong>Full Margin Analysis</strong> works top-down from your income statement.
        <strong>Price Finder</strong> works bottom-up from your unit cost.
      </p>
      <ol style="padding-left:1.5rem; color:#475569; line-height:1.8;">
        <li>
          <strong>Full Margin Analysis:</strong> Enter your total revenue and COGS. Gross margin appears immediately.
          Optionally add operating expenses to unlock operating margin, and a tax rate to see true net margin.
          The revenue ladder bar visualizes exactly where each dollar goes.
        </li>
        <li>
          <strong>Price Finder:</strong> Enter your per-unit cost and the gross margin percentage you need.
          The calculator outputs the exact selling price — and the equivalent markup — so you never confuse the two again.
          The sensitivity table shows how prices shift at ±5% and ±10% margin targets.
        </li>
        <li>
          <strong>Compare to industry benchmarks</strong> in the table below.
          A 5% net margin is excellent for grocery and weak for software.
          Context determines whether your margins are a strength or a red flag.
        </li>
      </ol>
      <div class="pm-info-box">
        💡 <strong>Quick tip:</strong> COGS only includes costs that directly touch the product — materials, manufacturing labor, wholesale purchase cost, direct freight.
        Rent, salaries of non-production staff, and marketing belong in <em>Operating Expenses</em>, not COGS.
        Misclassifying them artificially inflates your gross margin.
      </div>
    </section>

    <!-- ── THREE MARGINS EXPLAINED ── -->
    <section class="pm-section" id="three-margin">
      <h2>Gross vs. Operating vs. Net Margin — What's the Difference?</h2>
      <p>
        Each margin measures profitability at a different stage of the income statement.
        Together, they tell the complete story of a business's financial health.
      </p>

      <h3>1. Gross Profit Margin</h3>
      <div class="pm-formula-box">
        <code>Gross Profit  = Revenue − Cost of Goods Sold (COGS)</code>
        <code>Gross Margin% = Gross Profit / Revenue × 100</code>
      </div>
      <p>
        Gross margin measures how efficiently you produce or source what you sell.
        A high gross margin means strong pricing power and/or low production costs — leaving more dollars
        to cover overhead and generate profit. It is the first and most important profitability signal.
        <strong>COGS must only include direct costs</strong> — the moment you add overhead to COGS,
        this metric loses its analytical value.
      </p>

      <h3>2. Operating Profit Margin (EBIT Margin)</h3>
      <div class="pm-formula-box">
        <code>Operating Profit (EBIT) = Gross Profit − Operating Expenses</code>
        <code>Operating Margin%       = Operating Profit / Revenue × 100</code>
      </div>
      <p>
        Operating margin captures the profitability of your <em>core business</em> before interest payments
        and taxes. Because it excludes financing costs and tax jurisdiction effects, it is the preferred metric
        for comparing operational efficiency across different companies — even in different countries.
        Declining operating margins often signal rising overhead costs before they seriously damage the bottom line.
      </p>

      <h3>3. Net Profit Margin (The Bottom Line)</h3>
      <div class="pm-formula-box">
        <code>Net Profit  = Operating Profit − Interest − Taxes</code>
        <code>Net Margin% = Net Profit / Revenue × 100</code>
      </div>
      <p>
        Net margin is the definitive measure of total business profitability — the percentage of every
        dollar of revenue that becomes actual take-home profit after <em>every</em> obligation is paid.
        This calculator approximates it as Operating Profit × (1 − Tax Rate), which is accurate for
        businesses without significant interest expense or non-operating income.
      </p>

      <div class="pm-warn-box">
        <strong>Common mistake:</strong> Many business owners look only at gross margin and feel comfortable.
        But a company with a 60% gross margin and 55% operating expenses has only a 5% operating margin —
        meaning expenses are completely consuming the gross profit advantage. Always calculate all three.
      </div>
    </section>

    <!-- ── MARGIN VS MARKUP ── -->
    <section class="pm-section" id="margin-vs-markup">
      <h2>Profit Margin vs. Markup — A Critical Pricing Difference</h2>
      <p>
        The most expensive pricing mistake in small business: confusing <strong>margin</strong>
        and <strong>markup</strong>. They use the same profit dollars but measure against
        different denominators — and that gap costs businesses thousands of dollars every year.
      </p>
      <div class="pm-formula-box">
        <code>Margin  = Profit / Selling Price  (% of what the customer pays)</code>
        <code>Markup  = Profit / Cost           (% of what you paid)</code>
      </div>

      <table class="pm-table" style="margin-top:1rem;">
        <thead><tr><th>Cost</th><th>Selling Price</th><th>Profit</th><th>Margin %</th><th>Markup %</th></tr></thead>
        <tbody>
          <tr><td>$60</td> <td>$100</td><td>$40</td><td><strong>40.00%</strong></td><td><strong>66.67%</strong></td></tr>
          <tr><td>$50</td> <td>$100</td><td>$50</td><td><strong>50.00%</strong></td><td><strong>100.00%</strong></td></tr>
          <tr><td>$75</td> <td>$100</td><td>$25</td><td><strong>25.00%</strong></td><td><strong>33.33%</strong></td></tr>
          <tr><td>$33.33</td><td>$100</td><td>$66.67</td><td><strong>66.67%</strong></td><td><strong>200.00%</strong></td></tr>
        </tbody>
      </table>

      <p>
        Notice that <strong>margin is always lower than markup</strong> for the same profit —
        because margin divides by the larger number (price) and markup divides by the smaller number (cost).
        If a supplier tells you they offer a "40% margin" but means a 40% <em>markup</em>,
        your actual margin is only 28.57%. Use the
        <a href="<?php echo $baseUrl; ?>/business/markup-calculator" style="color:#7c3aed;">Markup Calculator</a>
        to convert between the two instantly.
      </p>

      <h3>The "50% Margin" Trap</h3>
      <p>
        To achieve a true <strong>50% profit margin</strong>, you need a <strong>100% markup</strong>
        (also called keystone pricing). If you buy an item for $50 and mark it up 50%, you sell it for $75.
        Your profit is $25 — but $25 on a $75 sale is only a <strong>33.3% margin</strong>, not 50%.
        To get 50% margin you must sell it for $100, which requires doubling the cost (100% markup).
      </p>
    </section>

    <!-- ── INDUSTRY BENCHMARKS ── -->
    <section class="pm-section" id="benchmark">
      <h2><?php echo $currentYear; ?> Profit Margin Benchmarks by Industry</h2>
      <p>
        A profit margin number is meaningless without context. Here is what investors, lenders, and
        acquirers expect to see across major US industries in <?php echo $currentYear; ?>.
        Use this to benchmark your business and identify where you stand.
      </p>

      <table class="pm-table">
        <thead>
          <tr>
            <th>Industry</th>
            <th>Gross Margin (Typical)</th>
            <th>Operating Margin</th>
            <th>Net Margin</th>
          </tr>
        </thead>
        <tbody>
          <tr><td><strong>SaaS / Software</strong></td>          <td>65% – 85%</td>  <td>15% – 30%</td>  <td>10% – 25%</td></tr>
          <tr><td><strong>Consulting / Professional Services</strong></td><td>60% – 80%</td><td>15% – 30%</td><td>10% – 25%</td></tr>
          <tr><td><strong>Healthcare Services</strong></td>      <td>40% – 60%</td>  <td>8% – 18%</td>   <td>5% – 12%</td></tr>
          <tr><td><strong>E-Commerce / Retail</strong></td>       <td>30% – 50%</td>  <td>5% – 15%</td>   <td>2% – 8%</td></tr>
          <tr><td><strong>Manufacturing</strong></td>             <td>25% – 40%</td>  <td>8% – 15%</td>   <td>5% – 10%</td></tr>
          <tr><td><strong>Real Estate (Brokerage)</strong></td>   <td>70% – 85%</td>  <td>15% – 30%</td>  <td>10% – 20%</td></tr>
          <tr><td><strong>Restaurants / Food Service</strong></td><td>60% – 75%</td>  <td>5% – 15%</td>   <td>3% – 9%</td></tr>
          <tr><td><strong>Grocery / Supermarkets</strong></td>    <td>22% – 30%</td>  <td>2% – 5%</td>    <td>1% – 3%</td></tr>
          <tr><td><strong>Construction</strong></td>              <td>15% – 25%</td>  <td>4% – 10%</td>   <td>2% – 6%</td></tr>
          <tr><td><strong>Trucking / Freight</strong></td>        <td>15% – 25%</td>  <td>5% – 12%</td>   <td>3% – 7%</td></tr>
          <tr><td><strong>Advertising / Marketing Agencies</strong></td><td>50%–70%</td><td>10%–20%</td>  <td>6%–15%</td></tr>
          <tr><td><strong>Financial Services</strong></td>        <td>80% – 90%</td>  <td>25% – 40%</td>  <td>15% – 30%</td></tr>
        </tbody>
      </table>
      <p style="font-size:0.82rem;color:#64748b;margin-top:0.5rem;">
        * Restaurant gross margins appear high because COGS = food &amp; beverage cost only.
        Labor and rent are operating expenses in the food service model.
        Source: aggregated US industry financials, <?php echo $currentYear; ?>.
      </p>

      <div class="pm-info-box">
        💡 <strong>Rule of thumb for lenders:</strong> SBA and commercial lenders typically want to see
        a net profit margin high enough that your DSCR (Debt Service Coverage Ratio) stays above 1.25.
        That means net income must be at least 125% of your annual loan payments.
        Use the <a href="<?php echo $baseUrl; ?>/loan-calculators/business-loan-calculator" style="color:#5b21b6;">Business Loan Calculator</a>
        to check if your margins can support a specific loan amount.
      </div>
    </section>

    <!-- ── HOW TO IMPROVE ── -->
    <section class="pm-section" id="improve">
      <h2>How to Improve Your Profit Margin</h2>
      <p>
        There are exactly two levers: <strong>grow revenue quality</strong> and <strong>reduce costs</strong>.
        Most businesses focus on growing revenue first — but improving margins often has a faster,
        higher-impact return on effort.
      </p>

      <h3>Improve Gross Margin (Attack COGS)</h3>
      <ul>
        <li><strong>Raise prices.</strong> A 5% price increase on existing customers with no change in volume is instant gross margin improvement. Many businesses undercharge by more than this.</li>
        <li><strong>Negotiate supplier terms.</strong> Volume commitments, faster payment terms (2/10 net 30), or switching to alternative suppliers can cut material costs 5–15%.</li>
        <li><strong>Shift product mix.</strong> Drop or reprice low-margin SKUs. Push sales teams toward your highest-margin products or service packages.</li>
        <li><strong>Reduce waste and shrinkage.</strong> In manufacturing, food service, and retail, waste directly erodes gross margin. A 2% shrinkage rate is a 2% gross margin tax.</li>
      </ul>

      <h3>Improve Operating Margin (Control OpEx)</h3>
      <ul>
        <li><strong>Audit every recurring expense.</strong> List every monthly subscription, SaaS tool, and vendor contract. Anything not directly generating revenue is a candidate for elimination or renegotiation.</li>
        <li><strong>Automate repetitive tasks.</strong> Labor is typically the largest operating expense. Automating invoicing, follow-ups, scheduling, and reporting can reduce headcount needs without cutting output.</li>
        <li><strong>Cut underperforming marketing channels.</strong> Marketing spend is opex. Calculate cost per acquisition (CPA) by channel. Kill anything with a CPA that doesn't pencil at your margin level.</li>
        <li><strong>Leverage remote work.</strong> Office lease elimination or reduction is one of the largest operating expense cuts available to service businesses.</li>
      </ul>

      <h3>The Math of Small Improvements</h3>
      <p>
        On <strong>$500,000 in revenue</strong>: a 1% improvement in gross margin = <strong>$5,000 in additional profit</strong>
        with zero additional sales. A 2% improvement = $10,000. These numbers scale linearly — and they compound
        year over year. Small, consistent margin improvements outperform large, unpredictable revenue jumps
        for building sustainable business value.
      </p>
    </section>

    <!-- ── FAQ ── -->
    <section class="pm-section" id="faq">
      <h2>Frequently Asked Questions About Profit Margins</h2>

      <div class="pm-faq-item open">
        <div class="pm-faq-q">What is a good profit margin for a small business in <?php echo $currentYear; ?>?</div>
        <div class="pm-faq-a">It entirely depends on your industry. For small businesses: net margins of 10%+ are strong in most service businesses; 5–8% is solid for retail and e-commerce; 15–25%+ is expected for SaaS and consulting. The benchmark table above has detailed ranges by sector. The most useful comparison is against your own prior periods and direct competitors — not a generic "good margin" number.</div>
      </div>

      <div class="pm-faq-item">
        <div class="pm-faq-q">What is the difference between gross margin and net margin?</div>
        <div class="pm-faq-a">Gross margin only subtracts the direct cost of producing your product (COGS): <strong>Gross Margin = (Revenue − COGS) / Revenue</strong>. Net margin subtracts every expense — COGS, operating costs, interest, and taxes: <strong>Net Margin = Net Income / Revenue</strong>. Net margin is always lower and is the definitive measure of total profitability. You can have a 70% gross margin and a 2% net margin if operating expenses are consuming nearly all of the gross profit.</div>
      </div>

      <div class="pm-faq-item">
        <div class="pm-faq-q">What is the difference between profit margin and markup?</div>
        <div class="pm-faq-a">Margin is profit as a percentage of <em>selling price</em>. Markup is profit as a percentage of <em>cost</em>. A 50% markup = 33.3% margin. A 100% markup = 50% margin. This confusion is one of the most common pricing errors in small business. Use the Price Finder mode above or our <a href="<?php echo $baseUrl; ?>/business/markup-calculator" style="color:#7c3aed;">Markup Calculator</a> to convert between the two instantly.</div>
      </div>

      <div class="pm-faq-item">
        <div class="pm-faq-q">What should NOT be included in COGS?</div>
        <div class="pm-faq-a">COGS includes only the direct costs of producing your product: raw materials, manufacturing labor, wholesale purchase cost, and direct shipping. COGS does NOT include rent, management or admin salaries, marketing spend, software subscriptions, insurance, or office overhead. Those are operating expenses. Misclassifying them as COGS artificially inflates your gross margin and misleads you about your actual pricing health.</div>
      </div>

      <div class="pm-faq-item">
        <div class="pm-faq-q">How do I calculate selling price from a desired profit margin?</div>
        <div class="pm-faq-a">Use: <strong>Selling Price = Cost / (1 − Target Margin %)</strong>. Example: cost is $60, target margin is 40%. Price = $60 / (1 − 0.40) = $60 / 0.60 = <strong>$100</strong>. Your profit of $40 is exactly 40% of the $100 selling price. Use the Price Finder tab above to calculate this instantly with a sensitivity table.</div>
      </div>

      <div class="pm-faq-item">
        <div class="pm-faq-q">Why is my gross margin high but net margin low?</div>
        <div class="pm-faq-a">Operating expenses are consuming most of your gross profit. The most common culprits: excessive rent (above 8–10% of revenue for most businesses), bloated headcount, high marketing spend with poor ROI, or heavy debt service. Calculate each operating expense as a percentage of revenue and compare it to the industry benchmarks in the table above to find where your model leaks.</div>
      </div>

      <div class="pm-faq-item">
        <div class="pm-faq-q">What is operating margin and why does it matter?</div>
        <div class="pm-faq-a">Operating margin (EBIT margin) = Operating Profit / Revenue. It measures profitability from core operations before interest and taxes — making it the best metric for comparing businesses regardless of their financing structure or tax situation. It's the number that investors and acquirers use to assess management quality and operational efficiency. A steadily improving operating margin signals a business that is scaling efficiently.</div>
      </div>

      <div class="pm-faq-item">
        <div class="pm-faq-q">Does a higher profit margin always mean a better business?</div>
        <div class="pm-faq-a">Not necessarily. Some excellent businesses run intentionally thin margins at high volume (Amazon, Costco, Walmart). The better question is whether your margin is sustainable and generates enough absolute profit dollars to service debt, reinvest in growth, and reward owners. A 3% net margin on $50M in revenue ($1.5M profit) is a very different situation than a 3% net margin on $300K in revenue ($9,000 profit).</div>
      </div>

    </section>

  </div><!-- /pm-main -->


  <!-- ══════════════════════════════════════
       RIGHT SIDEBAR
  ══════════════════════════════════════ -->
  <aside class="pm-right-sidebar">

    <!-- Industry Snapshot Widget -->
    <div class="pm-widget">
      <div class="pm-widget-header">
        <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:0.25rem;">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-3 3"/></svg>
          <span class="pm-widget-title">S&amp;P 500 Net Margins</span>
        </div>
        <div class="pm-widget-subtitle">Benchmark vs. Public Markets</div>
        <div class="pm-widget-updated" id="pm-rates-updated">Fetching live data…</div>
      </div>

      <div id="pm-rates-loading" class="pm-loading">
        <div class="pm-spinner-dot"></div>
        <div class="pm-spinner-dot"></div>
        <div class="pm-spinner-dot"></div>
        <span>Connecting…</span>
      </div>

      <div class="pm-stat-list" id="pm-stat-list" style="display:none;">
        <div class="pm-stat-row">
          <div>
            <div class="pm-stat-label">Information Technology</div>
            <div class="pm-stat-sub">Avg. S&amp;P 500 sector net margin</div>
          </div>
          <div style="text-align:right;">
            <div class="pm-stat-value">~24%</div>
            <div class="pm-stat-change">Sector leader</div>
          </div>
        </div>
        <div class="pm-stat-row">
          <div>
            <div class="pm-stat-label">Financials</div>
            <div class="pm-stat-sub">Banks &amp; insurance</div>
          </div>
          <div style="text-align:right;">
            <div class="pm-stat-value">~19%</div>
            <div class="pm-stat-change">Varies widely</div>
          </div>
        </div>
        <div class="pm-stat-row">
          <div>
            <div class="pm-stat-label">Healthcare</div>
            <div class="pm-stat-sub">Pharma, devices, services</div>
          </div>
          <div style="text-align:right;">
            <div class="pm-stat-value">~12%</div>
            <div class="pm-stat-change">Services lower</div>
          </div>
        </div>
        <div class="pm-stat-row" style="background:#f5f3ff;">
          <div>
            <div class="pm-stat-label">S&amp;P 500 Overall Median</div>
            <div class="pm-stat-sub">All sectors blended</div>
          </div>
          <div style="text-align:right;">
            <div class="pm-stat-value" id="pm-sp-median">~11%</div>
            <div class="pm-stat-change">Net margin</div>
          </div>
        </div>
        <div class="pm-stat-row">
          <div>
            <div class="pm-stat-label">Consumer Discretionary</div>
            <div class="pm-stat-sub">Retail &amp; e-commerce</div>
          </div>
          <div style="text-align:right;">
            <div class="pm-stat-value">~6%</div>
            <div class="pm-stat-change">High competition</div>
          </div>
        </div>
      </div>

      <div class="pm-widget-footer">
        <p>Small businesses typically run 2–5% lower net margins than public companies in the same sector due to scale disadvantages and higher relative overhead costs.</p>
        <a href="https://pages.stern.nyu.edu/~adamodar/New_Home_Page/datafile/margin.html" target="_blank" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
          Damodaran Margin Data →
        </a>
      </div>
    </div>

    <!-- Quick Calculators -->
    <div class="pm-quick-widget">
      <div class="pm-quick-header">💼 Business Tools</div>
      <ul class="pm-quick-links">
        <li><a href="<?php echo $baseUrl; ?>/business/profit-margin-calculator" class="active">💹 Profit Margin Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/business/markup-calculator">🏷️ Markup Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/business/freelance-rate-calculator">💻 Freelance Rate</a></li>
        <li><a href="<?php echo $baseUrl; ?>/loan-calculators/business-loan-calculator">🏦 Business Loan</a></li>
        <li><a href="<?php echo $baseUrl; ?>/loan-calculators/sba-loan-calculator">📋 SBA Loan</a></li>
        <li><a href="<?php echo $baseUrl; ?>/real-estate/cap-rate-calculator">🏢 Cap Rate</a></li>
      </ul>
    </div>

  </aside>

</div><!-- /pm-page-wrap -->
</main>


<script>
document.addEventListener('DOMContentLoaded', function () {

  /* ── ELEMENTS ── */
  const tabs    = document.querySelectorAll('.pm-tab');
  const panels  = document.querySelectorAll('.pm-tab-panel');
  const calcBtn = document.getElementById('pm-btn-calc');

  // Analysis inputs
  const inRev  = document.getElementById('pm_revenue');
  const inCogs = document.getElementById('pm_cogs');
  const inOpex = document.getElementById('pm_opex');
  const inTax  = document.getElementById('pm_tax');

  // Price finder inputs
  const inCost   = document.getElementById('pm_cost');
  const inTarget = document.getElementById('pm_target');

  // Result panes
  const resAnalysis = document.getElementById('pm-res-analysis');
  const resPrice    = document.getElementById('pm-res-price');
  const resSub      = document.getElementById('pm-res-sub');

  // Analysis result elements
  const tierOp  = document.getElementById('pm-tier-op');
  const tierNet = document.getElementById('pm-tier-net');

  let currentMode = 'pm-panel-analysis';

  const fmtC = v => '$' + Number(v).toLocaleString('en-US', {minimumFractionDigits:2, maximumFractionDigits:2});
  const fmtP = v => Number(v).toFixed(2) + '%';

  /* ── TAB SWITCHING ── */
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      panels.forEach(p => p.classList.remove('active'));
      tab.classList.add('active');
      currentMode = tab.getAttribute('data-target');
      document.getElementById(currentMode).classList.add('active');
      calculate();
    });
  });

  /* ── CALCULATE ── */
  function calculate() {
    if (currentMode === 'pm-panel-analysis') {
      calcAnalysis();
    } else {
      calcPriceFinder();
    }
  }

  function calcAnalysis() {
    resPrice.style.display    = 'none';
    resAnalysis.style.display = 'block';

    const rev  = parseFloat(inRev.value)  || 0;
    const cogs = parseFloat(inCogs.value) || 0;
    const opex = inOpex.value.trim() !== '' ? parseFloat(inOpex.value) : null;
    const tax  = inTax.value.trim()  !== '' ? parseFloat(inTax.value)  : null;

    if (rev <= 0 || cogs < 0 || cogs > rev) {
      resSub.textContent = 'Enter valid Revenue and COGS to see results.';
      return;
    }

    const grossProfit  = rev - cogs;
    const grossMargin  = (grossProfit / rev) * 100;
    const cogsPct      = (cogs / rev) * 100;

    document.getElementById('pm-gross-amt').textContent = fmtC(grossProfit);
    document.getElementById('pm-gross-pct').textContent = fmtP(grossMargin) + ' margin';

    const gl = grossMargin >= 50 ? '✅ Strong gross margin for most business types.'
             : grossMargin >= 30 ? '🟡 Moderate — review COGS efficiency.'
             : '⚠️ Thin gross margin — pricing or COGS review needed.';
    document.getElementById('pm-gross-note').textContent = gl;

    let opProfit = null, opMargin = null, opexPct = null;
    if (opex !== null && opex >= 0) {
      opProfit = grossProfit - opex;
      opMargin = (opProfit / rev) * 100;
      opexPct  = (opex / rev) * 100;
      tierOp.style.display = 'block';
      document.getElementById('pm-op-amt').textContent = fmtC(opProfit);
      document.getElementById('pm-op-amt').className   = 'pm-tier-amount' + (opProfit < 0 ? ' neg' : '');
      document.getElementById('pm-op-pct').textContent = fmtP(opMargin) + ' margin';
      document.getElementById('pm-op-note').textContent = 'OpEx consumes ' + fmtP(opexPct) + ' of revenue.';
    } else {
      tierOp.style.display = 'none';
    }

    let netProfit = null, netMargin = null, taxAmt = null, taxPct = null;
    const baseForNet = opProfit !== null ? opProfit : grossProfit;
    if (tax !== null && tax >= 0 && tax < 100) {
      taxAmt    = baseForNet * (tax / 100);
      netProfit = baseForNet - taxAmt;
      netMargin = (netProfit / rev) * 100;
      taxPct    = (taxAmt / rev) * 100;
      tierNet.style.display = 'block';
      document.getElementById('pm-net-amt').textContent = fmtC(netProfit);
      document.getElementById('pm-net-amt').className   = 'pm-tier-amount' + (netProfit < 0 ? ' neg' : '');
      document.getElementById('pm-net-pct').textContent = fmtP(netMargin) + ' margin';
      document.getElementById('pm-net-note').textContent = 'Tax at ' + tax + '% = ' + fmtC(taxAmt) + ' (' + fmtP(taxPct) + ' of revenue).';
    } else {
      tierNet.style.display = 'none';
    }

    // Revenue ladder
    const barOpex = opexPct  || 0;
    const barTax  = taxPct   || 0;
    const barNet  = netMargin !== null ? netMargin : (opMargin !== null ? opMargin : grossMargin);
    const barRest = Math.max(0, 100 - cogsPct - barOpex - barTax - barNet);

    const bar = document.getElementById('pm-ladder-bar');
    bar.innerHTML = '';
    const segs = [
      { cls:'pml-cogs', w:cogsPct, label:'COGS' },
      { cls:'pml-opex', w:barOpex, label:'OpEx' },
      { cls:'pml-tax',  w:barTax,  label:'Tax'  },
      { cls:'pml-net',  w:barNet,  label:'Profit'},
      { cls:'pml-rest', w:barRest, label:''      },
    ];
    segs.forEach(s => {
      if (s.w <= 0) return;
      const d = document.createElement('div');
      d.className = 'pml-seg ' + s.cls;
      d.style.width = s.w + '%';
      if (s.w > 8 && s.label) d.textContent = s.label + ' ' + s.w.toFixed(1) + '%';
      bar.appendChild(d);
    });

    document.getElementById('pml-legend-opex').style.display = barOpex > 0 ? '' : 'none';
    document.getElementById('pml-legend-tax').style.display  = barTax  > 0 ? '' : 'none';

    resSub.textContent = 'Based on $' + Number(rev).toLocaleString() + ' revenue';
  }

  function calcPriceFinder() {
    resAnalysis.style.display = 'none';
    resPrice.style.display    = 'block';

    const cost   = parseFloat(inCost.value)   || 0;
    const target = parseFloat(inTarget.value) || 0;

    if (cost <= 0 || target <= 0 || target >= 100) {
      resSub.textContent = 'Enter a valid cost and target margin (1–99%).';
      return;
    }

    const price  = cost / (1 - target / 100);
    const profit = price - cost;
    const markup = (profit / cost) * 100;

    document.getElementById('pm-price-val').textContent  = fmtC(price);
    document.getElementById('pm-profit-val').textContent = fmtC(profit);
    document.getElementById('pm-markup-val').textContent = fmtP(markup);
    resSub.textContent = 'To achieve ' + target + '% margin on $' + fmtC(cost) + ' cost';

    // Sensitivity table
    const tbody = document.getElementById('pm-sensitivity-body');
    tbody.innerHTML = '';
    [-10, -5, 0, 5, 10].forEach(delta => {
      const t = target + delta;
      if (t <= 0 || t >= 100) return;
      const p = cost / (1 - t / 100);
      const m = ((p - cost) / cost) * 100;
      const tr = document.createElement('tr');
      if (delta === 0) tr.style.cssText = 'font-weight:800;background:#f5f3ff;';
      tr.innerHTML = '<td>' + t.toFixed(1) + '%' + (delta === 0 ? ' ← your target' : '') + '</td>'
                   + '<td>' + fmtC(p) + '</td>'
                   + '<td>' + fmtP(m) + '</td>';
      tbody.appendChild(tr);
    });
  }

  calcBtn.addEventListener('click', calculate);
  [inRev, inCogs, inOpex, inTax, inCost, inTarget].forEach(el => {
    if (el) el.addEventListener('input', calculate);
  });
  calculate(); // init on load

  /* ── TOC ACTIVE SCROLL ── */
  const tocLinks = document.querySelectorAll('.toc-list a');
  const sections = [];
  tocLinks.forEach(link => {
    const id = link.getAttribute('href').replace('#', '');
    const sec = document.getElementById(id);
    if (sec) sections.push({ link, sec });
  });
  function updateTOC() {
    const y = window.scrollY + 130;
    let active = sections[0];
    sections.forEach(s => { if (s.sec && s.sec.getBoundingClientRect().top + window.scrollY <= y) active = s; });
    tocLinks.forEach(l => l.classList.remove('toc-active'));
    if (active) active.link.classList.add('toc-active');
  }
  window.addEventListener('scroll', updateTOC, { passive: true });
  updateTOC();

  /* ── FAQ ACCORDION ── */
  document.querySelectorAll('.pm-faq-q').forEach(q => {
    q.addEventListener('click', function () {
      const item = this.closest('.pm-faq-item');
      const wasOpen = item.classList.contains('open');
      document.querySelectorAll('.pm-faq-item').forEach(i => i.classList.remove('open'));
      if (!wasOpen) item.classList.add('open');
    });
  });

  /* ── SIDEBAR WIDGET: show static data with current date ── */
  (function loadSidebarWidget() {
    document.getElementById('pm-rates-loading').style.display = 'none';
    document.getElementById('pm-stat-list').style.display     = 'block';
    const today = new Date().toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
    document.getElementById('pm-rates-updated').textContent = 'Updated: ' + today;
  })();

});
</script>

<?php require_once '../includes/footer.php'; ?>
