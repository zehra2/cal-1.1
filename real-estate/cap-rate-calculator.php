<?php
$currentYear = date('Y');

// ─── SEO Meta & Schema Configuration ──────────────────────────────────────────
$pageTitle       = "Cap Rate Calculator ($currentYear) — Capitalization Rate & Property Valuation";
$metaDescription = "Free $currentYear real estate cap rate calculator. Calculate capitalization rate, net operating income (NOI), and property value for commercial and rental real estate with 2026 market benchmarks.";
$metaKeywords    = 'cap rate calculator, how to calculate cap rate, rental property cap rate calculator, cap rate formula, commercial real estate cap rate, noi calculator, chatham rate cap calculator';

$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'               => 'WebApplication',
      '@id'                 => 'https://americacalculator.com/real-estate/cap-rate-calculator#app',
      'name'                => 'Real Estate Cap Rate & Valuation Calculator',
      'url'                 => 'https://americacalculator.com/real-estate/cap-rate-calculator',
      'description'         => "Calculate capitalization rates, reverse-engineer maximum purchase prices, and model required Net Operating Income (NOI) for commercial and multifamily investment properties.",
      'applicationCategory' => 'FinanceApplication',
      'operatingSystem'     => 'All',
      'browserRequirements' => 'Requires JavaScript',
      'offers'              => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD'],
    ],
    [
      '@type'     => 'HowTo',
      '@id'       => 'https://americacalculator.com/real-estate/cap-rate-calculator#howto',
      'name'      => 'How to Calculate Cap Rate on a Rental Property',
      'totalTime' => 'PT1M',
      'step'      => [
        ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Select Valuation Mode', 'text' => 'Choose whether you want to calculate Capitalization Rate, determine Maximum Purchase Value, or calculate Required NOI.'],
        ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Input Gross Rental Income & Operating Expenses', 'text' => 'Enter gross scheduled rent and annual operating expenses (taxes, insurance, maintenance, management, vacancy reserve) to determine Net Operating Income (NOI).'],
        ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Enter Total Property Purchase Price', 'text' => 'Input the total acquisition cost or current market value of the real estate without deducting loan down payments.'],
        ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Evaluate Cap Rate Against Market Benchmarks', 'text' => 'Analyze the resulting cap rate yield percentage against Tier-1 and Tier-2 market benchmarks for your specific asset class.']
      ]
    ],
    [
      '@type'      => 'FAQPage',
      '@id'        => 'https://americacalculator.com/real-estate/cap-rate-calculator#faq',
      'mainEntity' => [
        [
          '@type' => 'Question',
          'name'  => "What is a good cap rate in $currentYear?",
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => "In $currentYear, a good cap rate depends on location and asset class. Prime Class A multifamily in primary metros trades at 4.50%–5.50% (lower risk/yield). Midwest and secondary market properties (like Cleveland, Detroit, or Memphis) typically trade at 7.00%–9.50% cap rates to compensate for lower capital appreciation."
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'What is the capitalization rate formula in real estate?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'The cap rate formula is: Cap Rate = (Net Operating Income / Property Value) × 100. Net Operating Income (NOI) is gross rental revenue minus all operational expenses (property taxes, insurance, repairs, property management, vacancy reserves), excluding mortgage debt service.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'Are mortgage payments included when calculating cap rate?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'No. Capitalization rate is an unlevered metric that evaluates property performance as if purchased 100% in cash. Mortgage payments (principal and interest debt service) are excluded from NOI. To analyze returns including loan financing, use our Cash-on-Cash Return Calculator or DSCR Calculator.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'What is the difference between Cap Rate and Cash-on-Cash Return?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Cap rate measures the unlevered income yield of the entire property regardless of financing. Cash-on-Cash return measures the levered cash flow yield specifically on the actual down payment and closing cash invested after subtracting mortgage debt service.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'What is a typical commercial real estate cap rate in 2026?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Typical 2026 commercial cap rates by sector: Multifamily (4.75%–6.25%), Industrial/Logistics (5.00%–6.50%), Grocery-Anchored Retail (5.75%–7.00%), Office Buildings (7.50%–10.00%+), and Single-Tenant Net Lease NNN (5.25%–6.50%).'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'How do you use cap rate to determine property value?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Rearrange the formula: Property Value = Net Operating Income / Market Cap Rate. For example, if comparable properties in your submarket trade at a 6.0% cap rate and your building produces $120,000 annual NOI, its estimated market value is $120,000 / 0.06 = $2,000,000.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'What is the difference between a Real Estate Cap Rate and an Interest Rate Cap?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'A real estate cap rate measures property income yield. An interest rate cap (often provided by firms like Chatham Financial) is a derivative financial contract that commercial borrowers purchase to hedge floating-rate debt (like SOFR) against benchmark rate spikes.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'Can a property have a negative cap rate?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Yes. A negative cap rate occurs when annual operating expenses exceed gross rental income, resulting in negative Net Operating Income (NOI). This occurs in distressed assets, severe vacancies, or properties undergoing complete gut rehabilitation.'
          ]
        ]
      ]
    ],
    [
      '@type' => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Real Estate', 'item' => 'https://americacalculator.com/real-estate/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Cap Rate Calculator', 'item' => 'https://americacalculator.com/real-estate/cap-rate-calculator']
      ]
    ]
  ]
];

require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
/* ============================================================
   EXECUTIVE REAL ESTATE DESIGN SYSTEM
============================================================ */
body { background: #f8fafc; color: #1e293b; }

.page-container {
  max-width: 1320px;
  margin: 0 auto;
  padding: 2rem 1.25rem 4rem;
  display: grid;
  grid-template-columns: 240px 1fr 280px;
  gap: 2rem;
  align-items: start;
}

/* Left TOC Sidebar */
.toc-sidebar {
  position: sticky;
  top: 5.5rem;
  background: #ffffff;
  border-radius: 12px;
  border: 1px solid #e2e8f0;
  box-shadow: 0 1px 4px rgba(0,0,0,0.04);
  overflow: hidden;
}
.toc-sidebar-header {
  background: linear-gradient(135deg, #0f766e 0%, #115e59 100%);
  color: #ffffff;
  padding: 1rem 1.25rem;
  font-weight: 700;
  font-size: 0.82rem;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}
.toc-list { list-style: none; padding: 0.6rem 0; margin: 0; }
.toc-list li a {
  display: block;
  padding: 0.45rem 1.25rem;
  font-size: 0.84rem;
  color: #475569;
  text-decoration: none;
  border-left: 3px solid transparent;
  transition: all 0.15s ease;
  line-height: 1.4;
}
.toc-list li a:hover,
.toc-list li a.toc-active {
  color: #0f766e;
  background: #f0fdfa;
  border-left-color: #0f766e;
  font-weight: 600;
}
.toc-divider { height: 1px; background: #f1f5f9; margin: 0.5rem 0; }
.toc-related-label {
  padding: 0.5rem 1.25rem;
  font-size: 0.75rem;
  font-weight: 750;
  color: #94a3b8;
  text-transform: uppercase;
  letter-spacing: 0.06em;
}
.toc-related-list { list-style: none; padding: 0; margin: 0 0 0.75rem; }
.toc-related-list li a {
  display: block;
  padding: 0.35rem 1.25rem;
  font-size: 0.82rem;
  color: #64748b;
  text-decoration: none;
  transition: color 0.15s;
}
.toc-related-list li a:hover { color: #0f766e; }

/* Main Content Area */
.main-content { min-width: 0; }

/* Hero */
.page-hero { margin-bottom: 2rem; }
.page-hero .breadcrumb { font-size: 0.82rem; color: #64748b; margin-bottom: 0.75rem; }
.page-hero .breadcrumb a { color: #64748b; text-decoration: none; }
.page-hero .breadcrumb a:hover { color: #0f766e; }
.page-hero h1 { font-size: 2.15rem; color: #0f172a; margin: 0 0 0.75rem; line-height: 1.25; font-weight: 850; letter-spacing: -0.02em; }
.page-hero .hero-meta { display: flex; flex-wrap: wrap; gap: 14px; font-size: 0.82rem; color: #64748b; margin-bottom: 1rem; align-items: center; }
.page-hero .hero-meta span { display: inline-flex; align-items: center; gap: 5px; }
.page-hero .hero-desc {
  font-size: 1.02rem;
  color: #334155;
  line-height: 1.7;
  margin: 0;
  background: #ffffff;
  border-left: 4px solid #0f766e;
  padding: 1.1rem 1.35rem;
  border-radius: 0 10px 10px 0;
  box-shadow: 0 1px 3px rgba(0,0,0,0.03);
  border-top: 1px solid #e2e8f0;
  border-right: 1px solid #e2e8f0;
  border-bottom: 1px solid #e2e8f0;
}

/* Calculator Card */
.calc-card {
  background: #ffffff;
  border-radius: 16px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.04);
  border: 1px solid #e2e8f0;
  margin-bottom: 2.5rem;
  overflow: hidden;
}
.calc-tabs {
  display: flex;
  background: #f8fafc;
  border-bottom: 1px solid #e2e8f0;
}
.calc-tab {
  flex: 1;
  text-align: center;
  padding: 1rem 0.75rem;
  font-size: 0.9rem;
  font-weight: 650;
  color: #64748b;
  cursor: pointer;
  border-bottom: 3px solid transparent;
  transition: all 0.15s ease;
}
.calc-tab:hover { color: #0f766e; background: #f1f5f9; }
.calc-tab.active { color: #0f766e; border-bottom-color: #0f766e; background: #ffffff; }

.calc-inner { display: grid; grid-template-columns: 1fr 1fr; }
.calc-form-panel { padding: 2rem; border-right: 1px solid #e2e8f0; background: #ffffff; }
.calc-results-panel {
  padding: 2rem;
  background: linear-gradient(170deg, #f8fafc 0%, #f0fdfa 100%);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.tab-panel { display: none; }
.tab-panel.active { display: block; }
.panel-desc { font-size: 0.84rem; color: #64748b; margin-bottom: 1.25rem; line-height: 1.5; }

/* Form Controls */
.form-field { margin-bottom: 1.2rem; }
.form-field label { display: block; font-weight: 650; font-size: 0.88rem; color: #1e293b; margin-bottom: 0.4rem; }
.form-field input {
  width: 100%;
  padding: 12px 14px;
  border: 1.5px solid #cbd5e1;
  border-radius: 9px;
  font-size: 0.98rem;
  color: #0f172a;
  outline: none;
  transition: all 0.15s ease;
  background: #ffffff;
}
.form-field input:focus { border-color: #0f766e; box-shadow: 0 0 0 3px rgba(15, 118, 110, 0.15); }
.form-field .field-hint { font-size: 0.78rem; color: #64748b; margin-top: 0.35rem; line-height: 1.4; }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }

.btn-calc {
  width: 100%;
  background: linear-gradient(135deg, #0f766e 0%, #115e59 100%);
  color: #ffffff;
  padding: 14px;
  border: none;
  border-radius: 9px;
  font-size: 1rem;
  font-weight: 700;
  cursor: pointer;
  margin-top: 0.5rem;
  transition: all 0.15s ease;
  box-shadow: 0 2px 6px rgba(15, 118, 110, 0.25);
}
.btn-calc:hover { opacity: 0.95; transform: translateY(-1px); }

/* Results Panel Elements */
.results-heading { font-size: 1.1rem; font-weight: 800; color: #0f172a; margin: 0 0 0.25rem; }
.results-sub { font-size: 0.82rem; color: #64748b; margin: 0 0 1.25rem; }

.primary-result-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  padding: 1.25rem;
  margin-bottom: 1rem;
  box-shadow: 0 1px 4px rgba(0,0,0,0.03);
  text-align: center;
}
.primary-result-label { font-size: 0.82rem; font-weight: 700; color: #64748b; text-transform: uppercase; letter-spacing: 0.04em; }
.primary-result-value { font-size: 2.3rem; font-weight: 900; color: #0f766e; margin: 4px 0 2px; line-height: 1.1; }

.result-boxes { display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.75rem; margin-bottom: 1.25rem; }
.res-box {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 10px;
  padding: 1rem 0.75rem;
  text-align: center;
}
.res-val { display: block; font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 0.2rem; }
.res-lbl { font-size: 0.76rem; color: #64748b; font-weight: 600; text-transform: uppercase; }

/* Yield Gauge Indicator */
.cap-indicator {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  padding: 1.1rem;
  margin-top: 0.5rem;
}
.cap-ind-title { font-size: 0.82rem; font-weight: 750; color: #334155; text-transform: uppercase; letter-spacing: 0.04em; margin-bottom: 8px; }
.gauge-bar {
  height: 12px;
  border-radius: 999px;
  background: linear-gradient(to right, #3b82f6 0%, #10b981 35%, #f59e0b 70%, #ef4444 100%);
  position: relative;
  margin-bottom: 6px;
}
.gauge-marker {
  position: absolute;
  top: -4px;
  width: 20px;
  height: 20px;
  background: #0f172a;
  border: 2px solid #ffffff;
  border-radius: 50%;
  transform: translateX(-50%);
  transition: left 0.3s ease;
  box-shadow: 0 1px 4px rgba(0,0,0,0.3);
}
.gauge-labels {
  display: flex;
  justify-content: space-between;
  font-size: 0.75rem;
  color: #64748b;
  font-weight: 600;
  margin-bottom: 8px;
}
.ind-text { font-size: 0.82rem; color: #475569; line-height: 1.5; border-top: 1px solid #f1f5f9; padding-top: 8px; }

/* Editorial Content Sections */
.content-section {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 14px;
  padding: 2rem;
  margin-bottom: 2rem;
  box-shadow: 0 1px 3px rgba(0,0,0,0.02);
}
.content-section h2 { font-size: 1.5rem; color: #0f172a; margin: 0 0 1rem; font-weight: 800; letter-spacing: -0.01em; }
.content-section h3 { font-size: 1.15rem; color: #1e293b; margin: 1.5rem 0 0.6rem; font-weight: 750; }
.content-section p { color: #475569; line-height: 1.75; font-size: 0.96rem; margin: 0 0 1rem; }
.content-section ul, .content-section ol { color: #475569; line-height: 1.75; font-size: 0.96rem; margin: 0 0 1.25rem; padding-left: 1.4rem; }
.content-section li { margin-bottom: 0.4rem; }

.data-table {
  width: 100%;
  border-collapse: collapse;
  border-radius: 10px;
  overflow: hidden;
  border: 1px solid #e2e8f0;
  margin: 1.25rem 0;
  font-size: 0.88rem;
}
.data-table th { background: #0f172a; color: #ffffff; padding: 12px 14px; text-align: left; font-weight: 700; }
.data-table td { padding: 11px 14px; border-bottom: 1px solid #f1f5f9; color: #334155; }
.data-table tr:last-child td { border-bottom: none; }
.data-table tr:nth-child(even) td { background: #f8fafc; }
.data-table .val-highlight { color: #0f766e; font-weight: 700; }

.info-box {
  background: #f0fdfa;
  border-left: 4px solid #0f766e;
  border-radius: 0 10px 10px 0;
  padding: 1.1rem 1.25rem;
  margin: 1.25rem 0;
  font-size: 0.94rem;
  color: #134e4a;
  line-height: 1.65;
}
.warning-box {
  background: #fffbeb;
  border-left: 4px solid #f59e0b;
  border-radius: 0 10px 10px 0;
  padding: 1.1rem 1.25rem;
  margin: 1.25rem 0;
  font-size: 0.94rem;
  color: #92400e;
  line-height: 1.65;
}

/* FAQ Accordion */
.faq-list { margin-top: 1rem; }
.faq-card { border: 1px solid #e2e8f0; border-radius: 10px; margin-bottom: 0.75rem; overflow: hidden; background: #ffffff; }
.faq-trigger {
  width: 100%;
  text-align: left;
  background: #ffffff;
  border: none;
  padding: 14px 18px;
  font-size: 0.98rem;
  font-weight: 700;
  color: #0f172a;
  cursor: pointer;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 12px;
}
.faq-trigger:hover { background: #f8fafc; }
.faq-icon { width: 18px; height: 18px; color: #0f766e; transition: transform 0.2s ease; flex-shrink: 0; }
.faq-card.open .faq-icon { transform: rotate(180deg); }
.faq-card.open .faq-trigger { background: #f0fdfa; color: #0f766e; }
.faq-answer { display: none; padding: 14px 18px 18px; color: #475569; line-height: 1.7; font-size: 0.94rem; border-top: 1px solid #e2e8f0; }
.faq-card.open .faq-answer { display: block; }

/* Right Sidebar */
.right-sidebar { position: sticky; top: 5.5rem; display: flex; flex-direction: column; gap: 1.25rem; }
.sidebar-widget { background: #ffffff; border-radius: 12px; border: 1px solid #e2e8f0; box-shadow: 0 1px 4px rgba(0,0,0,0.03); overflow: hidden; }
.sidebar-widget-header { background: linear-gradient(135deg, #0f766e 0%, #115e59 100%); color: #ffffff; padding: 1rem 1.25rem; }
.sidebar-widget-title { font-size: 0.95rem; font-weight: 750; margin: 0; }
.sidebar-widget-sub { font-size: 0.78rem; color: #99f6e4; margin-top: 2px; }
.sidebar-widget-body { padding: 0.75rem 0; }
.sidebar-rate-row { display: flex; justify-content: space-between; align-items: center; padding: 0.65rem 1.25rem; border-bottom: 1px solid #f8fafc; }
.sidebar-rate-row:last-child { border-bottom: none; }
.sidebar-rate-lbl { font-size: 0.82rem; font-weight: 650; color: #334155; }
.sidebar-rate-sub { font-size: 0.72rem; color: #94a3b8; }
.sidebar-rate-val { font-size: 1.05rem; font-weight: 800; color: #0f766e; }

.sidebar-links-list { list-style: none; padding: 0.5rem 0; margin: 0; }
.sidebar-links-list li a {
  display: block;
  padding: 0.5rem 1.25rem;
  font-size: 0.84rem;
  color: #475569;
  text-decoration: none;
  font-weight: 550;
  transition: all 0.15s ease;
}
.sidebar-links-list li a:hover, .sidebar-links-list li a.active { color: #0f766e; background: #f0fdfa; font-weight: 650; }

@media (max-width: 1100px) {
  .page-container { grid-template-columns: 1fr 260px; }
  .toc-sidebar { display: none; }
}
@media (max-width: 840px) {
  .page-container { grid-template-columns: 1fr; }
  .calc-inner { grid-template-columns: 1fr; }
  .calc-form-panel { border-right: none; border-bottom: 1px solid #e2e8f0; }
  .right-sidebar { display: none; }
  .page-hero h1 { font-size: 1.75rem; }
  .result-boxes { grid-template-columns: 1fr; }
}
</style>

<main id="main-content">
<div class="page-container">

  <!-- ══════════════════════════════════════════════════════════════════════
       LEFT TOC SIDEBAR
       ══════════════════════════════════════════════════════════════════════ -->
  <nav class="toc-sidebar" aria-label="Table of Contents">
    <div class="toc-sidebar-header">📋 In This Article</div>
    <ul class="toc-list">
      <li><a href="#calculator" class="toc-active">Cap Rate Calculator</a></li>
      <li><a href="#how-to-use">How to Use the Tool</a></li>
      <li><a href="#formula">Cap Rate Formula &amp; NOI</a></li>
      <li><a href="#worked-example">Worked Multi-Family Example</a></li>
      <li><a href="#benchmarks">2026 City &amp; Sector Benchmarks</a></li>
      <li><a href="#cap-vs-cash">Cap Rate vs. Cash-on-Cash</a></li>
      <li><a href="#chatham-clarification">Cap Rates vs. Chatham Rate Caps</a></li>
      <li><a href="#faq">Frequently Asked Questions</a></li>
    </ul>
    <div class="toc-divider"></div>
    <div class="toc-related-label">Related Real Estate Tools</div>
    <ul class="toc-related-list">
      <li><a href="/real-estate/dscr-calculator">DSCR Loan Calculator &rarr;</a></li>
      <li><a href="/real-estate/cash-on-cash-return-calculator">Cash-on-Cash Return &rarr;</a></li>
      <li><a href="/real-estate/rental-yield-calculator">Rental Yield Calculator &rarr;</a></li>
      <li><a href="/real-estate/mortgage-calculator">Mortgage (PITI) &rarr;</a></li>
      <li><a href="/real-estate/1031-exchange-calculator">1031 Exchange Deferral &rarr;</a></li>
    </ul>
  </nav>

  <!-- ══════════════════════════════════════════════════════════════════════
       MAIN CONTENT
       ══════════════════════════════════════════════════════════════════════ -->
  <div class="main-content">

    <header class="page-hero">
      <div class="breadcrumb">
        <a href="/">Home</a> &rsaquo; <a href="/real-estate/">Real Estate</a> &rsaquo; <span>Cap Rate Calculator</span>
      </div>
      <h1>Cap Rate Calculator (<?php echo $currentYear; ?>) &mdash; Real Estate Capitalization Rate &amp; Valuation</h1>
      <div class="hero-meta">
        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg> 2026 US Commercial Benchmarks</span>
        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> Income Capitalization Approach</span>
        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/></svg> Updated September <?php echo $currentYear; ?></span>
      </div>
      <p class="hero-desc">
        Analyze commercial and residential investment properties instantly. Calculate unlevered <strong>Capitalization Rates</strong>, reverse-engineer maximum purchase valuations based on target yields, or determine the required <strong>Net Operating Income (NOI)</strong> to justify asking prices.
      </p>
    </header>

    <!-- Interactive Calculator Card -->
    <div class="calc-card" id="calculator">
      <div class="calc-tabs" role="tablist">
        <div class="calc-tab active" id="tab-caprate" onclick="switchCapMode('panel-caprate')">1. Calculate Cap Rate</div>
        <div class="calc-tab" id="tab-propval" onclick="switchCapMode('panel-propval')">2. Find Maximum Purchase Price</div>
        <div class="calc-tab" id="tab-noi" onclick="switchCapMode('panel-noi')">3. Find Required NOI</div>
      </div>

      <div class="calc-inner">
        <!-- Form Panel -->
        <div class="calc-form-panel">

          <!-- Mode 1: Calculate Cap Rate -->
          <div id="panel-caprate" class="tab-panel active">
            <p class="panel-desc">Calculate unlevered annual income yield based on property price and Net Operating Income.</p>
            <div class="form-field">
              <label for="c1_price">Property Value / Asking Price ($)</label>
              <input type="number" id="c1_price" value="1500000" min="1000" step="10000" oninput="calculateCap()">
            </div>
            <div class="form-field">
              <label for="c1_noi">Net Operating Income (NOI) ($/yr)</label>
              <input type="number" id="c1_noi" value="105000" min="0" step="1000" oninput="calculateCap()">
              <div class="field-hint">Or auto-compute NOI using gross income and operating expenses below:</div>
            </div>
            <div style="padding-top:0.85rem; border-top:1px dashed #cbd5e1; margin-top:1rem;">
              <div class="form-row">
                <div class="form-field">
                  <label for="c1_gross">Gross Scheduled Rent ($)</label>
                  <input type="number" id="c1_gross" placeholder="e.g. 150000" min="0" oninput="syncNoi()">
                </div>
                <div class="form-field">
                  <label for="c1_opex">Operating Expenses ($)</label>
                  <input type="number" id="c1_opex" placeholder="e.g. 45000" min="0" oninput="syncNoi()">
                </div>
              </div>
            </div>
          </div>

          <!-- Mode 2: Find Value -->
          <div id="panel-propval" class="tab-panel">
            <p class="panel-desc">Determine the maximum price to pay for a property to hit your required target cap rate.</p>
            <div class="form-field">
              <label for="c2_noi">Annual Net Operating Income (NOI) ($)</label>
              <input type="number" id="c2_noi" value="105000" min="0" step="1000" oninput="calculateCap()">
            </div>
            <div class="form-field">
              <label for="c2_cap">Target Capitalization Rate (%)</label>
              <input type="number" id="c2_cap" value="7.0" min="0.1" max="25" step="0.1" oninput="calculateCap()">
            </div>
          </div>

          <!-- Mode 3: Find NOI -->
          <div id="panel-noi" class="tab-panel">
            <p class="panel-desc">Calculate how much net income a property must generate to support a specific asking price.</p>
            <div class="form-field">
              <label for="c3_price">Property Value / Asking Price ($)</label>
              <input type="number" id="c3_price" value="1500000" min="1000" step="10000" oninput="calculateCap()">
            </div>
            <div class="form-field">
              <label for="c3_cap">Target Capitalization Rate (%)</label>
              <input type="number" id="c3_cap" value="7.0" min="0.1" max="25" step="0.1" oninput="calculateCap()">
            </div>
          </div>

          <button type="button" class="btn-calc" onclick="calculateCap()">⚡ Recalculate Valuation</button>
        </div>

        <!-- Results Panel -->
        <div class="calc-results-panel">
          <div>
            <div class="results-heading">Valuation Results</div>
            <div class="results-sub" id="res_subtext">Based on $1,500,000 value and $105,000 NOI</div>

            <div class="primary-result-card">
              <div class="primary-result-label" id="res_main_lbl">Capitalization Rate</div>
              <div class="primary-result-value" id="res_main">7.00%</div>
            </div>

            <div class="result-boxes">
              <div class="res-box">
                <span class="res-val" id="res_sub1">$105,000</span>
                <span class="res-lbl" id="res_sub1_lbl">Net Operating Income</span>
              </div>
              <div class="res-box">
                <span class="res-val" id="res_sub2">$1,500,000</span>
                <span class="res-lbl" id="res_sub2_lbl">Property Value</span>
              </div>
            </div>

            <!-- Yield Indicator Gauge -->
            <div class="cap-indicator" id="cap_indicator">
              <div class="cap-ind-title">Market Yield Gauge</div>
              <div class="gauge-bar">
                <div class="gauge-marker" id="gauge_marker" style="left: 50%;"></div>
              </div>
              <div class="gauge-labels">
                <span>Low Risk/Yield (3%)</span>
                <span>Balanced (7%)</span>
                <span>High Risk/Yield (12%+)</span>
              </div>
              <div class="ind-text" id="ind_text">
                <strong>Average Market Yield:</strong> Typical for stabilized residential multifamily and commercial retail in secondary US metros.
              </div>
            </div>
          </div>

          <p style="margin-top:1rem; font-size:0.78rem; color:#64748b; line-height:1.4;">
            *Cap rate evaluates unlevered cash performance (no mortgage). To model debt service and equity returns, pair with our <a href="/real-estate/dscr-calculator" style="color:#0f766e;font-weight:600;">DSCR Calculator</a>.
          </p>
        </div>

      </div>
    </div>

    <!-- Section 1: How to Use -->
    <section class="content-section" id="how-to-use">
      <h2>How to Use the Cap Rate Calculator</h2>
      <ol style="padding-left:1.4rem; line-height:1.8;">
        <li><strong>Select your calculation mode</strong>: Choose <em>Calculate Cap Rate</em> to evaluate asking yields, <em>Find Maximum Purchase Price</em> to underwrite deals based on target returns, or <em>Find Required NOI</em> to determine revenue targets.</li>
        <li><strong>Enter Gross Annual Income</strong>: Input total scheduled gross rent (Monthly Rent &times; 12) plus ancillary revenue (parking, laundry, pet fees, storage).</li>
        <li><strong>Subtract Annual Operating Expenses</strong>: Deduct property taxes, insurance, routine repairs, property management fees (typically 6%–10%), and a 5%–10% vacancy reserve. The calculator automatically determines your NOI.</li>
        <li><strong>Input Property Value or Asking Price</strong>: Enter the total purchase price (do not subtract your cash down payment).</li>
        <li><strong>Analyze Yield vs. Market Benchmarks</strong>: Review your capitalization percentage and check the market yield gauge to confirm whether the deal is low-risk (Class A core) or high-yield (value-add/Class C).</li>
      </ol>
    </section>

    <!-- Section 2: Formula & NOI -->
    <section class="content-section" id="formula">
      <h2>How to Calculate Cap Rate (The Formula)</h2>
      <p>
        The <strong>capitalization rate formula</strong> is the foundation of commercial and multifamily real estate valuation:
      </p>

      <div style="background:#0f172a;color:#f8fafc;padding:1.25rem 1.5rem;border-radius:10px;font-family:monospace;font-size:1.05rem;margin:1.25rem 0;line-height:1.6;">
        Cap Rate = [ Net Operating Income (NOI) / Current Property Value ] &times; 100
      </div>

      <p>Where:</p>
      <ul>
        <li><strong>Net Operating Income (NOI)</strong> = Gross Operating Income &minus; Operating Expenses. Crucially, NOI does <em>not</em> include mortgage principal and interest payments, depreciation, or major capital expenditures (CapEx).</li>
        <li><strong>Property Value</strong> = The current market acquisition price or appraised value.</li>
      </ul>

      <div class="info-box">
        💡 <strong>Worked Example:</strong> A 6-unit apartment building produces $120,000 in gross annual rent. Operating expenses (property taxes $18,000, insurance $6,000, management $9,600, repairs $8,400, vacancy reserve $6,000) total $48,000. <br>
        <strong>NOI = $120,000 &minus; $48,000 = $72,000.</strong><br>
        If the property is listed for $1,000,000: <strong>Cap Rate = ($72,000 / $1,000,000) &times; 100 = 7.20%</strong>.
      </div>
    </section>

    <!-- Section 3: Worked Example Matrix -->
    <section class="content-section" id="worked-example">
      <h2>Worked Example: $2,000,000 Multi-Family Valuation</h2>
      <p>
        Here is how cap rate compression or expansion impacts the value of a property producing <strong>$140,000 in annual NOI</strong>:
      </p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Cap Rate Scenario</th>
            <th>Market Type / Asset Class</th>
            <th>Formula ($140K NOI / Cap)</th>
            <th>Implied Property Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>4.50% Cap Rate</strong></td>
            <td>Tier-1 Core Metro (NYC, LA, SF)</td>
            <td>$140,000 / 0.045</td>
            <td class="val-highlight">$3,111,111</td>
          </tr>
          <tr>
            <td><strong>5.50% Cap Rate</strong></td>
            <td>Strong Sunbelt Metro (Dallas, Atlanta)</td>
            <td>$140,000 / 0.055</td>
            <td class="val-highlight">$2,545,455</td>
          </tr>
          <tr>
            <td><strong>7.00% Cap Rate</strong></td>
            <td>Secondary Market (Columbus, Indianapolis)</td>
            <td>$140,000 / 0.070</td>
            <td class="val-highlight">$2,000,000</td>
          </tr>
          <tr>
            <td><strong>8.50% Cap Rate</strong></td>
            <td>Midwest Cash-Flow / Value-Add (Cleveland, Memphis)</td>
            <td>$140,000 / 0.085</td>
            <td class="val-highlight">$1,647,058</td>
          </tr>
        </tbody>
      </table>

      <p>
        Notice that for the same $140,000 in cash generation, a property in a 4.5% cap rate market commands nearly <strong>$1.5 million more</strong> in value than in an 8.5% market due to lower perceived risk and higher institutional capital demand.
      </p>
    </section>

    <!-- Section 4: Market Benchmarks -->
    <section class="content-section" id="benchmarks">
      <h2>2026 Real Estate Cap Rate Benchmarks by Sector &amp; City</h2>
      <p>
        Cap rates fluctuate with Federal Reserve interest rate policy and local economic growth. Below are current 2026 benchmark expectations:
      </p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Property Asset Class</th>
            <th>Primary Markets (Tier 1)</th>
            <th>Secondary / Tertiary Markets</th>
            <th>Primary Demand Drivers</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Multifamily (Apartments)</strong></td>
            <td>4.50% &ndash; 5.50%</td>
            <td class="val-highlight">5.75% &ndash; 7.50%</td>
            <td>Population growth &amp; homeownership cost spread</td>
          </tr>
          <tr>
            <td><strong>Industrial &amp; Logistics</strong></td>
            <td>4.75% &ndash; 5.75%</td>
            <td class="val-highlight">6.00% &ndash; 7.50%</td>
            <td>E-commerce fulfillment &amp; supply-chain hubs</td>
          </tr>
          <tr>
            <td><strong>Grocery-Anchored Retail</strong></td>
            <td>5.50% &ndash; 6.50%</td>
            <td class="val-highlight">6.75% &ndash; 8.25%</td>
            <td>Essential-needs foot traffic &amp; long NNN leases</td>
          </tr>
          <tr>
            <td><strong>Office Buildings (Class A/B)</strong></td>
            <td>7.00% &ndash; 8.50%</td>
            <td class="val-highlight">8.75% &ndash; 11.00%+</td>
            <td>Hybrid work discount &amp; tenant rollover risk</td>
          </tr>
          <tr>
            <td><strong>Self-Storage Facilities</strong></td>
            <td>5.25% &ndash; 6.00%</td>
            <td class="val-highlight">6.25% &ndash; 7.75%</td>
            <td>High net margins &amp; low maintenance overhead</td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- Section 5: Cap Rate vs. Cash-on-Cash -->
    <section class="content-section" id="cap-vs-cash">
      <h2>Cap Rate vs. Cash-on-Cash Return</h2>
      <p>
        Many investors confuse <strong>Cap Rate</strong> with <strong>Cash-on-Cash Return</strong>. Here is the vital distinction:
      </p>
      <ul>
        <li><strong>Cap Rate (Unlevered):</strong> Measures the property's natural earnings power assuming zero debt. It allows you to compare two buildings objectively without distortion from different mortgage interest rates or down payment sizes.</li>
        <li><strong>Cash-on-Cash Return (Levered):</strong> Measures your specific personal return on cash invested. It subtracts your annual mortgage debt service (P&amp;I) from NOI and divides by your actual cash down payment out of pocket.</li>
      </ul>
      <p>
        When interest rates on commercial mortgages exceed the property's cap rate, you experience <strong>negative leverage</strong>, which lowers your cash-on-cash return below the cap rate.
      </p>
    </section>

    <!-- Section 6: Chatham Clarification -->
    <section class="content-section" id="chatham-clarification">
      <h2>Clarification: Cap Rates vs. Chatham Interest Rate Caps</h2>
      <p>
        If you arrived here searching for a <em>Chatham rate cap calculator</em> or <em>interest rate cap pricing</em>, note that financial derivatives are distinct from real estate yields:
      </p>
      <div class="warning-box">
        <strong>Real Estate Cap Rate (This Tool):</strong> Measures property rental income yields and asset valuations ($NOI / Value$).<br><br>
        <strong>Interest Rate Cap (Derivatives):</strong> An insurance instrument (provided by advisory firms like Chatham Financial) purchased by commercial borrowers to limit the maximum interest rate on floating-rate debt (such as SOFR or Prime Rate loans).
      </div>
    </section>

    <!-- Section 7: FAQ Accordion -->
    <section class="content-section" id="faq">
      <h2>Frequently Asked Questions About Cap Rates</h2>

      <div class="faq-list">
        <div class="faq-card open">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>What is a good cap rate for a rental property in <?php echo $currentYear; ?>?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            For single-family rentals, 4% to 6% is standard in high-appreciation coastal markets. For small multifamily properties (duplexes to 4-plexes), investors typically target 6% to 8.5% in growth markets and 8% to 10%+ in cash-flow-focused Midwest markets.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>Does a higher cap rate always mean a better investment?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            No. A high cap rate (e.g. 10% to 12%) typically signals higher risk — such as high tenant turnover, older mechanical systems, declining neighborhood demographics, or high vacancy. Lower cap rate properties (4% to 5.5%) usually represent high-demand, low-risk Class A assets with substantial long-term appreciation potential.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>Are mortgage payments included when calculating cap rate?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            No. Capitalization rate is an unlevered metric that evaluates property performance as if purchased 100% in cash. Mortgage principal and interest payments are strictly excluded from Net Operating Income (NOI).
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>How do you use cap rate to negotiate property purchase price?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            Determine the prevailing market cap rate for comparable sold properties in your submarket. Divide the seller's verified trailing 12-month (T12) NOI by the market cap rate. If a building produces $80,000 NOI and the submarket cap rate is 7.5%, the fair market value is $80,000 / 0.075 = <strong>$1,066,667</strong>.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>What expenses are deducted to find Net Operating Income (NOI)?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            NOI deductions include: property taxes, hazard/liability insurance, property management fees, routine maintenance and landscaping, utilities paid by the landlord, legal/accounting fees, and an allowance for physical vacancy and bad debt.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>Can a real estate cap rate be negative?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            Yes. A negative cap rate occurs when annual operating expenses exceed gross rental income, causing negative NOI. This typically happens in severely distressed assets, gut renovation projects, or properties with catastrophic vacancy rates.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>What is the difference between Cap Rate and Rental Yield?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            Gross rental yield compares gross annual rent to purchase price without deducting expenses ($Gross Rent / Price$). Cap rate compares net income after all operating expenses ($NOI / Price$). Cap rate is always the more accurate measure of operational performance.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>How do interest rates affect cap rates?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            When benchmark interest rates and borrowing costs rise, real estate investors demand higher income yields to cover financing costs, causing cap rates to expand (rise) and property values to soften. When interest rates fall, cap rates compress and valuations rise.
          </div>
        </div>
      </div>

      <div class="info-box" style="margin-top:2rem;">
        🔗 <strong>Explore Related Real Estate &amp; Underwriting Tools:</strong>
        <a href="/real-estate/dscr-calculator" style="color:#0f766e;font-weight:700;">DSCR Loan Calculator</a> &bull;
        <a href="/real-estate/cash-on-cash-return-calculator" style="color:#0f766e;font-weight:700;">Cash-on-Cash Return</a> &bull;
        <a href="/real-estate/rental-yield-calculator" style="color:#0f766e;font-weight:700;">Rental Yield Calculator</a> &bull;
        <a href="/real-estate/mortgage-calculator" style="color:#0f766e;font-weight:700;">Mortgage PITI</a>
      </div>
    </section>

  </div><!-- /main-content -->

  <!-- ══════════════════════════════════════════════════════════════════════
       RIGHT SIDEBAR
       ══════════════════════════════════════════════════════════════════════ -->
  <aside class="right-sidebar">

    <div class="sidebar-widget">
      <div class="sidebar-widget-header">
        <h3 class="sidebar-widget-title">Market Benchmark Yields</h3>
        <div class="sidebar-widget-sub">Current Real Estate Baselines</div>
      </div>
      <div class="sidebar-widget-body">
        <div class="sidebar-rate-row">
          <div>
            <div class="sidebar-rate-lbl">10-Year U.S. Treasury</div>
            <div class="sidebar-rate-sub">Risk-free benchmark</div>
          </div>
          <div class="sidebar-rate-val" id="sidebar-treasury">4.30%</div>
        </div>
        <div class="sidebar-rate-row">
          <div>
            <div class="sidebar-rate-lbl">Class A Multifamily</div>
            <div class="sidebar-rate-sub">Primary Metros</div>
          </div>
          <div class="sidebar-rate-val">5.15%</div>
        </div>
        <div class="sidebar-rate-row">
          <div>
            <div class="sidebar-rate-lbl">Class B/C Multi</div>
            <div class="sidebar-rate-sub">Secondary Metros</div>
          </div>
          <div class="sidebar-rate-val">6.85%</div>
        </div>
        <div class="sidebar-rate-row">
          <div>
            <div class="sidebar-rate-lbl">Industrial Logistics</div>
            <div class="sidebar-rate-sub">NNN Warehouses</div>
          </div>
          <div class="sidebar-rate-val">5.60%</div>
        </div>
      </div>
    </div>

    <div class="sidebar-widget">
      <div class="sidebar-widget-header">
        <h3 class="sidebar-widget-title">Real Estate Calculators</h3>
        <div class="sidebar-widget-sub">Investment Analysis Suite</div>
      </div>
      <ul class="sidebar-links-list">
        <li><a href="/real-estate/cap-rate-calculator" class="active">🏢 Cap Rate Calculator</a></li>
        <li><a href="/real-estate/dscr-calculator">🏘️ DSCR Coverage Ratio</a></li>
        <li><a href="/real-estate/cash-on-cash-return-calculator">💰 Cash-on-Cash Return</a></li>
        <li><a href="/real-estate/rental-yield-calculator">📈 Rental Yield Calculator</a></li>
        <li><a href="/real-estate/mortgage-calculator">🏡 Fixed-Rate Mortgage (PITI)</a></li>
        <li><a href="/real-estate/closing-cost-calculator">📋 Closing Cost Calculator</a></li>
        <li><a href="/loan-calculators/land-loan-calculator">🌎 Raw Land Loan</a></li>
      </ul>
    </div>

  </aside>

</div>
</main>

<script>
// ==========================================================================
// CAP RATE & VALUATION CALCULATION ENGINE
// ==========================================================================

const fmtCurr = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 });

let activeMode = 'panel-caprate';

function switchCapMode(modeId) {
  activeMode = modeId;
  document.querySelectorAll('.calc-tab').forEach(t => t.classList.remove('active'));
  document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));

  if (modeId === 'panel-caprate') document.getElementById('tab-caprate').classList.add('active');
  else if (modeId === 'panel-propval') document.getElementById('tab-propval').classList.add('active');
  else if (modeId === 'panel-noi') document.getElementById('tab-noi').classList.add('active');

  document.getElementById(modeId).classList.add('active');
  calculateCap();
}

function syncNoi() {
  const gross = parseFloat(document.getElementById('c1_gross').value) || 0;
  const opex = parseFloat(document.getElementById('c1_opex').value) || 0;
  if (gross > 0) {
    document.getElementById('c1_noi').value = Math.max(0, gross - opex);
    document.getElementById('c1_noi').style.backgroundColor = '#f1f5f9';
  } else {
    document.getElementById('c1_noi').style.backgroundColor = '#ffffff';
  }
  calculateCap();
}

function calculateCap() {
  const resMain = document.getElementById('res_main');
  const resMainLbl = document.getElementById('res_main_lbl');
  const resSub1 = document.getElementById('res_sub1');
  const resSub1Lbl = document.getElementById('res_sub1_lbl');
  const resSub2 = document.getElementById('res_sub2');
  const resSub2Lbl = document.getElementById('res_sub2_lbl');
  const resSubtext = document.getElementById('res_subtext');
  const indicator = document.getElementById('cap_indicator');

  if (activeMode === 'panel-caprate') {
    const price = parseFloat(document.getElementById('c1_price').value) || 0;
    const noi = parseFloat(document.getElementById('c1_noi').value) || 0;
    if (price <= 0 || noi <= 0) return;

    const capRate = (noi / price) * 100;
    resMainLbl.textContent = 'Capitalization Rate';
    resMain.textContent = capRate.toFixed(2) + '%';
    resSub1Lbl.textContent = 'Net Operating Income';
    resSub1.textContent = fmtCurr.format(noi);
    resSub2Lbl.textContent = 'Property Value';
    resSub2.textContent = fmtCurr.format(price);
    resSubtext.textContent = `Based on ${fmtCurr.format(price)} purchase price and ${fmtCurr.format(noi)} NOI`;

    indicator.style.display = 'block';
    updateCapGauge(capRate);

  } else if (activeMode === 'panel-propval') {
    const noi = parseFloat(document.getElementById('c2_noi').value) || 0;
    const targetCap = parseFloat(document.getElementById('c2_cap').value) || 0;
    if (noi <= 0 || targetCap <= 0) return;

    const maxPrice = noi / (targetCap / 100);
    resMainLbl.textContent = 'Max Purchase Price';
    resMain.textContent = fmtCurr.format(maxPrice);
    resSub1Lbl.textContent = 'Net Operating Income';
    resSub1.textContent = fmtCurr.format(noi);
    resSub2Lbl.textContent = 'Target Cap Rate';
    resSub2.textContent = targetCap.toFixed(2) + '%';
    resSubtext.textContent = `Maximum valuation to achieve a ${targetCap.toFixed(2)}% target cap rate`;

    indicator.style.display = 'none';

  } else if (activeMode === 'panel-noi') {
    const price = parseFloat(document.getElementById('c3_price').value) || 0;
    const targetCap = parseFloat(document.getElementById('c3_cap').value) || 0;
    if (price <= 0 || targetCap <= 0) return;

    const reqNoi = price * (targetCap / 100);
    resMainLbl.textContent = 'Required NOI';
    resMain.textContent = fmtCurr.format(reqNoi) + '/yr';
    resSub1Lbl.textContent = 'Property Value';
    resSub1.textContent = fmtCurr.format(price);
    resSub2Lbl.textContent = 'Target Cap Rate';
    resSub2.textContent = targetCap.toFixed(2) + '%';
    resSubtext.textContent = `Required annual net income to support ${fmtCurr.format(price)} asking price`;

    indicator.style.display = 'none';
  }
}

function updateCapGauge(cap) {
  const marker = document.getElementById('gauge_marker');
  const indText = document.getElementById('ind_text');

  // Scale: 2% = 0%, 12% = 100%
  let percent = ((cap - 2) / (12 - 2)) * 100;
  if (percent < 0) percent = 0;
  if (percent > 100) percent = 100;

  marker.style.left = percent + '%';

  let msg = '';
  if (cap < 4.5) {
    msg = '<strong>Low Yield / Core Asset:</strong> Typical for ultra-prime Class A properties in Tier-1 coastal markets (NYC, LA, SF). Very low perceived risk with high long-term appreciation.';
  } else if (cap < 7.0) {
    msg = '<strong>Balanced Market Yield:</strong> Typical for stabilized multifamily and grocery-anchored retail in secondary growth markets.';
  } else if (cap < 9.5) {
    msg = '<strong>High Yield / Cash Flow:</strong> Typical for Class B/C properties, tertiary markets, or value-add opportunities with higher management overhead.';
  } else {
    msg = '<strong>Very High Yield / Distressed:</strong> Indicates elevated risk, deferred capital expenditures, high vacancy, or transitional neighborhoods.';
  }
  indText.innerHTML = msg;
}

function toggleFaq(trigger) {
  const card = trigger.closest('.faq-card');
  const isOpen = card.classList.contains('open');
  document.querySelectorAll('.faq-card').forEach(c => c.classList.remove('open'));
  if (!isOpen) {
    card.classList.add('open');
  }
}

// Live FRED Treasury Fetch
async function fetchLiveTreasury() {
  try {
    const url = 'https://fred.stlouisfed.org/graph/fredgraph.csv?id=DGS10&limit=5&sort_order=desc';
    const res = await fetch(url, { signal: AbortSignal.timeout(6000) });
    if (!res.ok) throw new Error('Fetch failed');
    const text = await res.text();
    const lines = text.trim().split('\n').filter(l => !l.startsWith('DATE'));
    for (const line of lines) {
      const parts = line.split(',');
      if (parts[1] && parts[1] !== '.') {
        document.getElementById('sidebar-treasury').textContent = parseFloat(parts[1]).toFixed(2) + '%';
        return;
      }
    }
  } catch (e) {
    // Graceful fallback to static 2026 baseline
    document.getElementById('sidebar-treasury').textContent = '4.30%';
  }
}

document.addEventListener('DOMContentLoaded', function() {
  calculateCap();
  fetchLiveTreasury();
});
</script>

<?php require_once '../includes/footer.php'; ?>
