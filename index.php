<?php
$currentYear     = date('Y');
$pageTitle       = "AmericaCalculator - Institutional-Grade Financial, Loan & Real Estate Calculators ($currentYear)";
$metaDescription = "AmericaCalculator.com provides 50+ free, mathematically rigorous calculators for mortgages, SBA loans, Ohio paycheck taxes, rental property ROI, construction, and applied math. 100% free, private client-side execution.";
$metaKeywords    = 'free online calculator, loan calculator, mortgage calculator, paycheck calculator, real estate calculator, construction calculator, math calculator, finance calculator, ohio paycheck calculator, cap rate calculator, rental yield calculator, sba loan calculator';

$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'           => 'WebSite',
      'name'            => 'AmericaCalculator.com',
      'url'             => 'https://americacalculator.com/',
      'description'     => "Free institutional-grade online calculators for finance, loans, real estate, payroll, construction, and applied math. Updated for $currentYear.",
      'potentialAction' => [
        '@type'       => 'SearchAction',
        'target'      => ['@type' => 'EntryPoint', 'urlTemplate' => 'https://americacalculator.com/-s={search_term_string}'],
        'query-input' => 'required name=search_term_string',
      ],
    ],
    [
      '@type'           => 'Organization',
      'name'            => 'AmericaCalculator.com',
      'url'             => 'https://americacalculator.com/',
      'logo'            => 'https://americacalculator.com/image/logo-america%20calculator.jpg',
      'sameAs'          => [
        'https://www.facebook.com/americacalculator',
        'https://twitter.com/americacalc',
        'https://www.linkedin.com/company/americacalculator'
      ],
    ],
    [
      '@type' => 'WebApplication',
      'name'  => 'AmericaCalculator Multi-Mode Financial Engine',
      'url'   => 'https://americacalculator.com/',
      'applicationCategory' => 'FinanceApplication',
      'operatingSystem' => 'All',
      'browserRequirements' => 'Requires JavaScript',
      'offers' => [
        '@type' => 'Offer',
        'price' => '0',
        'priceCurrency' => 'USD',
      ],
    ],
    [
      '@type' => 'FAQPage',
      'mainEntity' => [
        [
          '@type' => 'Question',
          'name'  => 'Are the calculators on AmericaCalculator.com completely free to use?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Yes. Every calculator on AmericaCalculator.com is 100% free with no account creation, no subscriptions, and no daily usage limits for both personal and commercial financial planning.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'How often are financial rates, tax brackets, and formulas updated?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Our engineering team audits tax brackets, standard deductions, FICA caps, and state unemployment thresholds annually and whenever legislative changes occur. This includes IRS Publication 15-T withholding tables, Ohio Department of Taxation statutory rates, RITA/CCA municipal adjustments, and Federal Reserve benchmark rate shifts.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'Is my personal or financial information stored or transmitted?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'No. All calculation logic executes locally inside your web browser using client-side JavaScript. AmericaCalculator.com never logs, stores, or transmits your salary, mortgage balance, loan figures, or commercial revenue to any external server or third-party tracking network.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'Can I print or save my calculation results?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Yes. You can use your browser print function (Ctrl+P or Cmd+P) on any calculator page. Our print stylesheets automatically remove navigation headers, sidebars, and ads to produce clean, professional one-page amortization tables, tax breakdowns, or material estimates suitable for PDF export or loan applications.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'How can I report a formula discrepancy or request a new tool?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'You can contact our editorial and engineering team directly via our Contact Page. Please submit the calculator name, specific input parameters, expected vs. calculated output, and relevant statutory citations (IRS publications, Fannie Mae guidelines, or state tax codes) so our analysts can review and update the engine promptly.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'Which loan calculator should I choose for my situation?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'For commercial borrowing or equipment purchases, use our SBA 7(a) or Commercial Business Loan Calculator. For home purchases, start with the Fixed-Rate Mortgage Calculator or DSCR Calculator. For vehicles, select the Auto Loan Calculator. For revolving debt consolidation, utilize the Personal Loan Calculator.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'How accurate are results compared to an actual lender quote?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Our loan and mortgage calculators use standard banking amortization formulas (M = P x [r(1+r)^n] / [(1+r)^n - 1]) that match Fannie Mae, Freddie Mac, and commercial banking schedules exactly. However, lender quotes also incorporate location-specific property taxes, homeowners insurance, private mortgage insurance (PMI), and escrow buffers. Use our tools for exact principal and interest (P&I) baselines, then add local tax/insurance estimates.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'Do AmericaCalculator tools work on mobile phones and tablets?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Yes. Every calculator on AmericaCalculator.com is built with a responsive, mobile-first design optimized for smartphones, tablets, and desktops. Touch controls, numeric keypads, and responsive amortization tables ensure seamless usability on any device without requiring app downloads.'
          ]
        ]
      ]
    ]
  ]
];
require_once 'includes/header.php';
?>

<style>
/* ==========================================================================
   EXECUTIVE INSTITUTIONAL DESIGN SYSTEM - AMERICACALCULATOR.COM
   ========================================================================== */

/* Base Layout & Reset */
*, *::before, *::after { box-sizing: border-box; }
body {
  background-color: #f8fafc;
  color: #1e293b;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Inter", Helvetica, Arial, sans-serif;
  line-height: 1.6;
  margin: 0;
}
.ac-page-wrap {
  max-width: 1280px;
  margin: 0 auto;
  padding: 32px 20px 64px;
  overflow-x: hidden;
}

/* Hero Section */
.ac-hero-grid {
  display: grid;
  grid-template-columns: 1.05fr 1.15fr;
  gap: 36px;
  align-items: start;
  margin-bottom: 48px;
}
.ac-hero-copy {
  padding-top: 8px;
}
.ac-pill-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: #eff6ff;
  border: 1px solid #bfdbfe;
  color: #1d4ed8;
  font-size: 0.82rem;
  font-weight: 700;
  padding: 6px 14px;
  border-radius: 9999px;
  margin-bottom: 16px;
  letter-spacing: 0.02em;
}
.ac-pill-badge svg {
  color: #2563eb;
}
.ac-hero-title {
  font-size: 2.35rem;
  font-weight: 850;
  color: #0f172a;
  line-height: 1.2;
  letter-spacing: -0.025em;
  margin: 0 0 16px;
}
.ac-hero-desc {
  font-size: 1.05rem;
  color: #475569;
  line-height: 1.68;
  margin: 0 0 24px;
}
.ac-trust-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 14px;
  margin-bottom: 28px;
}
.ac-trust-item {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  background: #ffffff;
  border: 1px solid #e2e8f0;
  padding: 12px 14px;
  border-radius: 10px;
  box-shadow: 0 1px 2px rgba(0,0,0,0.03);
}
.ac-trust-icon {
  width: 22px;
  height: 22px;
  color: #059669;
  flex-shrink: 0;
  margin-top: 2px;
}
.ac-trust-label {
  font-size: 0.85rem;
  font-weight: 700;
  color: #0f172a;
  display: block;
}
.ac-trust-sub {
  font-size: 0.76rem;
  color: #64748b;
  display: block;
  line-height: 1.35;
}

/* Instant Quick Finder Search */
.ac-finder-box {
  background: #ffffff;
  border: 1px solid #cbd5e1;
  border-radius: 12px;
  padding: 14px 18px;
  box-shadow: 0 2px 8px rgba(15, 23, 42, 0.04);
}
.ac-finder-title {
  font-size: 0.8rem;
  font-weight: 700;
  color: #64748b;
  text-transform: uppercase;
  letter-spacing: 0.06em;
  margin-bottom: 10px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.ac-finder-input-wrap {
  position: relative;
  display: flex;
  align-items: center;
}
.ac-finder-icon {
  position: absolute;
  left: 14px;
  width: 18px;
  height: 18px;
  color: #94a3b8;
  pointer-events: none;
}
.ac-finder-input {
  width: 100%;
  padding: 12px 14px 12px 42px;
  font-size: 0.95rem;
  border: 1px solid #cbd5e1;
  border-radius: 8px;
  color: #0f172a;
  background: #f8fafc;
  outline: none;
  transition: all 0.2s ease;
}
.ac-finder-input:focus {
  background: #ffffff;
  border-color: #2563eb;
  box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
}
.ac-finder-pills {
  display: flex;
  flex-wrap: wrap;
  gap: 6px;
  margin-top: 12px;
}
.ac-finder-pill {
  font-size: 0.78rem;
  font-weight: 600;
  color: #334155;
  background: #f1f5f9;
  border: 1px solid #e2e8f0;
  padding: 4px 10px;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.15s;
}
.ac-finder-pill:hover, .ac-finder-pill.active {
  background: #1e293b;
  color: #ffffff;
  border-color: #1e293b;
}

/* ==========================================================================
   COMAPREHENSIVE FINANCIAL SUITE WIDGET
   ========================================================================== */
.ac-suite-card {
  background: #ffffff;
  border: 1px solid #cbd5e1;
  border-radius: 16px;
  box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.08), 0 4px 12px -2px rgba(15, 23, 42, 0.04);
  overflow: hidden;
}
.ac-suite-tabs {
  display: flex;
  background: #0f172a;
  padding: 6px 8px 0;
  border-bottom: 1px solid #1e293b;
  overflow-x: auto;
}
.ac-suite-tab {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 18px;
  font-size: 0.88rem;
  font-weight: 700;
  color: #94a3b8;
  background: transparent;
  border: none;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
  cursor: pointer;
  white-space: nowrap;
  transition: all 0.15s ease;
}
.ac-suite-tab:hover {
  color: #f1f5f9;
}
.ac-suite-tab.active {
  color: #0f172a;
  background: #ffffff;
}
.ac-suite-body {
  padding: 24px;
}
.ac-pane {
  display: none;
}
.ac-pane.active {
  display: block;
}

/* Form Controls inside Suite */
.ac-grid-2 {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
  margin-bottom: 16px;
}
.ac-field-group {
  margin-bottom: 14px;
}
.ac-field-label {
  display: flex;
  justify-content: space-between;
  font-size: 0.82rem;
  font-weight: 700;
  color: #334155;
  margin-bottom: 6px;
}
.ac-field-help {
  font-weight: 500;
  color: #64748b;
}
.ac-input-affix {
  position: relative;
  display: flex;
  align-items: center;
}
.ac-affix-left {
  position: absolute;
  left: 12px;
  font-size: 0.95rem;
  font-weight: 700;
  color: #64748b;
  pointer-events: none;
}
.ac-affix-right {
  position: absolute;
  right: 12px;
  font-size: 0.95rem;
  font-weight: 600;
  color: #64748b;
  pointer-events: none;
}
.ac-input-control {
  width: 100%;
  padding: 9px 12px;
  font-size: 0.95rem;
  font-weight: 600;
  color: #0f172a;
  background: #f8fafc;
  border: 1px solid #cbd5e1;
  border-radius: 8px;
  outline: none;
  transition: border-color 0.15s ease;
}
.ac-input-control.has-left { padding-left: 28px; }
.ac-input-control.has-right { padding-right: 32px; }
.ac-input-control:focus {
  background: #ffffff;
  border-color: #2563eb;
  box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.12);
}
select.ac-input-control {
  cursor: pointer;
}

/* Results Output Dashboard */
.ac-results-dash {
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  padding: 16px 18px;
  margin-top: 18px;
}
.ac-dash-main {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  border-bottom: 1px solid #e2e8f0;
  padding-bottom: 12px;
  margin-bottom: 12px;
}
.ac-dash-title {
  font-size: 0.78rem;
  font-weight: 700;
  color: #64748b;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  display: block;
}
.ac-dash-primary-val {
  font-size: 2.1rem;
  font-weight: 850;
  color: #0f172a;
  line-height: 1;
}
.ac-dash-metrics {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 12px;
  margin-bottom: 14px;
}
.ac-metric-cell {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 8px;
  padding: 10px 12px;
}
.ac-metric-label {
  font-size: 0.72rem;
  font-weight: 700;
  color: #64748b;
  display: block;
  margin-bottom: 2px;
}
.ac-metric-val {
  font-size: 1.05rem;
  font-weight: 800;
  color: #1e293b;
}

/* Visual Breakdown Bar */
.ac-bar-wrap {
  margin-bottom: 14px;
}
.ac-bar-track {
  height: 10px;
  background: #e2e8f0;
  border-radius: 9999px;
  overflow: hidden;
  display: flex;
}
.ac-bar-seg1 {
  background: #2563eb;
  transition: width 0.3s ease;
}
.ac-bar-seg2 {
  background: #f59e0b;
  transition: width 0.3s ease;
}
.ac-bar-legend {
  display: flex;
  justify-content: space-between;
  font-size: 0.74rem;
  font-weight: 600;
  color: #64748b;
  margin-top: 6px;
}
.ac-legend-dot {
  display: inline-block;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  margin-right: 4px;
}

/* Suite Action Footer */
.ac-dash-cta-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 8px;
}
.ac-dash-note {
  font-size: 0.78rem;
  color: #64748b;
  display: flex;
  align-items: center;
  gap: 6px;
}
.ac-dash-link {
  font-size: 0.85rem;
  font-weight: 700;
  color: #2563eb;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 4px;
  transition: color 0.15s ease;
}
.ac-dash-link:hover {
  color: #1d4ed8;
  text-decoration: underline;
}

/* ==========================================================================
   FEATURED HIGH-VALUE CALCULATORS SECTION
   ========================================================================== */
.ac-section {
  margin-bottom: 56px;
}
.ac-sec-header {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  margin-bottom: 24px;
  border-bottom: 2px solid #e2e8f0;
  padding-bottom: 12px;
}
.ac-sec-title {
  font-size: 1.5rem;
  font-weight: 800;
  color: #0f172a;
  letter-spacing: -0.02em;
  margin: 0;
}
.ac-sec-subtitle {
  font-size: 0.92rem;
  color: #64748b;
  margin: 4px 0 0;
}
.ac-grid-4 {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 20px;
}
.ac-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  padding: 22px 20px;
  display: flex;
  flex-direction: column;
  transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
  text-decoration: none;
  color: inherit;
  box-shadow: 0 1px 3px rgba(0,0,0,0.02);
}
.ac-card:hover {
  transform: translateY(-3px);
  border-color: #cbd5e1;
  box-shadow: 0 10px 25px -4px rgba(15, 23, 42, 0.08), 0 4px 10px -2px rgba(15, 23, 42, 0.03);
}
.ac-card-top {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 14px;
}
.ac-card-badge {
  font-size: 0.72rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  padding: 4px 9px;
  border-radius: 6px;
  background: #f1f5f9;
  color: #475569;
}
.ac-badge-blue { background: #eff6ff; color: #1d4ed8; }
.ac-badge-green { background: #f0fdf4; color: #15803d; }
.ac-badge-amber { background: #fffbeb; color: #b45309; }
.ac-badge-purple { background: #faf5ff; color: #7e22ce; }

.ac-card-icon {
  width: 32px;
  height: 32px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f8fafc;
  border-radius: 8px;
  color: #2563eb;
}
.ac-card-icon svg {
  width: 20px;
  height: 20px;
}
.ac-card-h3 {
  font-size: 1.1rem;
  font-weight: 750;
  color: #0f172a;
  margin: 0 0 8px;
  line-height: 1.35;
}
.ac-card-p {
  font-size: 0.88rem;
  color: #64748b;
  line-height: 1.55;
  margin: 0 0 16px;
  flex-grow: 1;
}
.ac-card-footer {
  border-top: 1px solid #f1f5f9;
  padding-top: 12px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.ac-card-stat {
  font-size: 0.75rem;
  font-weight: 600;
  color: #059669;
}
.ac-card-arrow {
  font-size: 0.82rem;
  font-weight: 700;
  color: #2563eb;
  display: flex;
  align-items: center;
  gap: 4px;
}

/* ==========================================================================
   CATEGORY DIRECTORY (6 CORE CLUSTERS)
   ========================================================================== */
.ac-grid-3 {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}
.ac-cluster-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 14px;
  padding: 24px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.03);
  min-width: 0;
  overflow: hidden;
}
.ac-cluster-head {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 14px;
  border-bottom: 1px solid #f1f5f9;
  padding-bottom: 12px;
  gap: 8px;
}
.ac-cluster-title-wrap {
  display: flex;
  align-items: center;
  gap: 10px;
  min-width: 0;
}
.ac-cluster-icon {
  width: 36px;
  height: 36px;
  background: #eff6ff;
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #2563eb;
  flex-shrink: 0;
}
.ac-cluster-icon svg { width: 20px; height: 20px; }
.ac-cluster-title {
  font-size: 1.15rem;
  font-weight: 800;
  color: #0f172a;
  margin: 0;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.ac-cluster-viewall {
  font-size: 0.82rem;
  font-weight: 700;
  color: #2563eb;
  text-decoration: none;
  white-space: nowrap;
  flex-shrink: 0;
}
.ac-cluster-viewall:hover { text-decoration: underline; }
.ac-cluster-links {
  display: flex;
  flex-direction: column;
  gap: 8px;
  min-width: 0;
}
.ac-cluster-link {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 10px;
  padding: 8px 10px;
  border-radius: 6px;
  font-size: 0.88rem;
  font-weight: 600;
  color: #334155;
  text-decoration: none;
  transition: all 0.15s ease;
  min-width: 0;
}
.ac-cluster-link span {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  min-width: 0;
}
.ac-cluster-link:hover {
  background: #f8fafc;
  color: #1d4ed8;
  padding-left: 14px;
}
.ac-cluster-link svg {
  width: 14px;
  height: 14px;
  color: #cbd5e1;
  transition: color 0.15s ease;
  flex-shrink: 0;
}
.ac-cluster-link:hover svg {
  color: #2563eb;
}

/* ==========================================================================
   INSTITUTIONAL METHODOLOGY & TRUST SIGNALS
   ========================================================================== */
.ac-methodology-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 16px;
  padding: 36px;
  margin-bottom: 56px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.02);
}
.ac-meth-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 24px;
  margin-top: 24px;
}
.ac-meth-box {
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 10px;
  padding: 20px 18px;
  border-left: 4px solid #2563eb;
}
.ac-meth-box h4 {
  font-size: 0.98rem;
  font-weight: 750;
  color: #0f172a;
  margin: 0 0 8px;
}
.ac-meth-box p {
  font-size: 0.85rem;
  color: #475569;
  line-height: 1.6;
  margin: 0;
}

/* ==========================================================================
   FAQ ACCORDION
   ========================================================================== */
.ac-faq-list {
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.ac-faq-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 10px;
  overflow: hidden;
  transition: border-color 0.2s;
}
.ac-faq-card.open {
  border-color: #93c5fd;
}
.ac-faq-trigger {
  width: 100%;
  text-align: left;
  background: none;
  border: none;
  padding: 18px 22px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
  font-size: 1rem;
  font-weight: 700;
  color: #0f172a;
}
.ac-faq-trigger:hover {
  background: #f8fafc;
}
.ac-faq-chevron {
  width: 20px;
  height: 20px;
  color: #2563eb;
  transition: transform 0.2s ease;
  flex-shrink: 0;
}
.ac-faq-card.open .ac-faq-chevron {
  transform: rotate(180deg);
}
.ac-faq-answer {
  display: none;
  padding: 0 22px 18px;
  font-size: 0.92rem;
  color: #475569;
  line-height: 1.7;
}
.ac-faq-card.open .ac-faq-answer {
  display: block;
}

/* Responsive Adjustments */
@media (max-width: 1080px) {
  .ac-hero-grid { grid-template-columns: 1fr; }
  .ac-grid-4 { grid-template-columns: repeat(2, 1fr); }
  .ac-grid-3 { grid-template-columns: repeat(2, 1fr); }
  .ac-meth-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
  .ac-hero-title { font-size: 1.85rem; }
  .ac-trust-grid { grid-template-columns: 1fr; }
  .ac-grid-2 { grid-template-columns: 1fr; }
  .ac-grid-4 { grid-template-columns: 1fr; }
  .ac-grid-3 { grid-template-columns: 1fr; }
  .ac-meth-grid { grid-template-columns: 1fr; }
  .ac-dash-metrics { grid-template-columns: 1fr; }
  .ac-dash-main { flex-direction: column; align-items: flex-start; gap: 8px; }
  .ac-methodology-card { padding: 22px 16px; }
  .ac-suite-body { padding: 18px 14px; }
}
</style>

<main id="main-content">
<div class="ac-page-wrap">

  <!-- ========================================================================
       HERO ROW: INSTITUTIONAL INTRODUCTION & FINANCIAL ENGINE
       ======================================================================== -->
  <section class="ac-hero-grid" aria-labelledby="hero-heading">

    <!-- Left Column: Copy, Trust Badges, Quick Tool Finder -->
    <div class="ac-hero-copy">
      <div class="ac-pill-badge">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
        </svg>
        <span>Audited for 2026 US Statutory Rates</span>
      </div>

      <h1 id="hero-heading" class="ac-hero-title">
        Accurate Financial, Loan &amp; Real Estate Calculators
      </h1>

      <p class="ac-hero-desc">
        AmericaCalculator.com is a <strong>free institutional-grade calculation suite</strong> built for American homeowners, real estate investors, business owners, and payroll professionals. Every tool is engineered against real US statutory standards: IRS Publication 15-T withholding tables, Ohio Department of Taxation progressive brackets, SBA 7(a) and 504 loan program guidelines, and International Residential Code (IRC) specifications for construction math.
      </p>
      <p class="ac-hero-desc" style="margin-top:0;">
        Unlike generic online calculators that apply arbitrary rounding or outdated tax rates, our models are reviewed annually and updated whenever the IRS, Federal Reserve, or state tax authorities publish changes. All calculations run locally inside your browser &mdash; your salary, loan balance, or property value are <strong>never stored, transmitted, or monetized</strong>.
      </p>

      <!-- Trust Signals -->
      <div class="ac-trust-grid">
        <div class="ac-trust-item">
          <svg class="ac-trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
          </svg>
          <div>
            <span class="ac-trust-label">100% Client-Side Privacy</span>
            <span class="ac-trust-sub">No salaries or loan data ever leave your browser</span>
          </div>
        </div>

        <div class="ac-trust-item">
          <svg class="ac-trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
          </svg>
          <div>
            <span class="ac-trust-label">2026 Tax &amp; Bank Brackets</span>
            <span class="ac-trust-sub">IRS Pub 15-T &amp; Ohio Dept of Taxation compliant</span>
          </div>
        </div>
      </div>

      <!-- Quick Finder Search -->
      <div class="ac-finder-box">
        <div class="ac-finder-title">
          <span>Instant Tool Finder</span>
          <span>50+ Calculators</span>
        </div>
        <div class="ac-finder-input-wrap">
          <svg class="ac-finder-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
            <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
          </svg>
          <input type="text" id="acQuickSearch" class="ac-finder-input" placeholder="Search e.g. mortgage, sba loan, ohio paycheck, concrete..." autocomplete="off">
        </div>
        <div class="ac-finder-pills">
          <button class="ac-finder-pill active" onclick="acFilterCards('all', this)">All</button>
          <button class="ac-finder-pill" onclick="acFilterCards('loan', this)">Loans</button>
          <button class="ac-finder-pill" onclick="acFilterCards('real-estate', this)">Real Estate</button>
          <button class="ac-finder-pill" onclick="acFilterCards('tax', this)">Ohio Taxes</button>
          <button class="ac-finder-pill" onclick="acFilterCards('construction', this)">Construction</button>
          <button class="ac-finder-pill" onclick="acFilterCards('business', this)">Business ROI</button>
        </div>
      </div>
    </div>

    <!-- Right Column: Executive Multi-Mode Financial Engine -->
    <div class="ac-suite-card" aria-label="Interactive Financial Engine">

      <!-- Tabs Header -->
      <div class="ac-suite-tabs" role="tablist">
        <button class="ac-suite-tab active" id="tabBtn-loan" role="tab" aria-selected="true" aria-controls="pane-loan" onclick="acSwitchTab('loan')">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M3 10h18M5 10v11M19 10v11M9 10v11M15 10v11M12 2L2 7h20L12 2z"/></svg>
          Loan / Mortgage
        </button>
        <button class="ac-suite-tab" id="tabBtn-growth" role="tab" aria-selected="false" aria-controls="pane-growth" onclick="acSwitchTab('growth')">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
          Compound Growth
        </button>
        <button class="ac-suite-tab" id="tabBtn-paycheck" role="tab" aria-selected="false" aria-controls="pane-paycheck" onclick="acSwitchTab('paycheck')">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><line x1="12" y1="8" x2="12" y2="16"/><line x1="8" y1="12" x2="16" y2="12"/></svg>
          Paycheck Quick Est.
        </button>
      </div>

      <!-- Tab Body -->
      <div class="ac-suite-body">

        <!-- TAB 1: LOAN & MORTGAGE ENGINE -->
        <div class="ac-pane active" id="pane-loan">
          <div class="ac-grid-2">
            <div class="ac-field-group">
              <label class="ac-field-label" for="l-amount">Loan / Borrowed Amount</label>
              <div class="ac-input-affix">
                <span class="ac-affix-left">$</span>
                <input type="number" id="l-amount" class="ac-input-control has-left" value="350000" step="5000" min="1000" oninput="acCalcLoan()">
              </div>
            </div>
            <div class="ac-field-group">
              <label class="ac-field-label" for="l-rate">Interest Rate (APR)</label>
              <div class="ac-input-affix">
                <input type="number" id="l-rate" class="ac-input-control has-right" value="6.75" step="0.125" min="0.1" oninput="acCalcLoan()">
                <span class="ac-affix-right">%</span>
              </div>
            </div>
          </div>

          <div class="ac-grid-2">
            <div class="ac-field-group">
              <label class="ac-field-label" for="l-term">Loan Term</label>
              <select id="l-term" class="ac-input-control" onchange="acCalcLoan()">
                <option value="30" selected>30 Years (Fixed)</option>
                <option value="20">20 Years (Fixed)</option>
                <option value="15">15 Years (Fixed)</option>
                <option value="10">10 Years (Commercial / SBA)</option>
                <option value="5">5 Years (Auto / Personal)</option>
              </select>
            </div>
            <div class="ac-field-group">
              <label class="ac-field-label" for="l-extra">Extra Monthly Principal</label>
              <div class="ac-input-affix">
                <span class="ac-affix-left">$</span>
                <input type="number" id="l-extra" class="ac-input-control has-left" value="100" step="50" min="0" oninput="acCalcLoan()">
              </div>
            </div>
          </div>

          <!-- Output Dashboard -->
          <div class="ac-results-dash">
            <div class="ac-dash-main">
              <div>
                <span class="ac-dash-title">Estimated Monthly Payment</span>
                <span style="font-size:0.75rem;color:#64748b;">Principal &amp; Interest (P&amp;I)</span>
              </div>
              <div class="ac-dash-primary-val" id="l-res-monthly">$2,270</div>
            </div>

            <div class="ac-dash-metrics">
              <div class="ac-metric-cell">
                <span class="ac-metric-label">Total Principal</span>
                <span class="ac-metric-val" id="l-res-principal">$350,000</span>
              </div>
              <div class="ac-metric-cell">
                <span class="ac-metric-label">Total Interest</span>
                <span class="ac-metric-val" id="l-res-interest" style="color:#d97706;">$467,235</span>
              </div>
              <div class="ac-metric-cell">
                <span class="ac-metric-label">Interest Saved</span>
                <span class="ac-metric-val" id="l-res-saved" style="color:#059669;">$52,840</span>
              </div>
            </div>

            <div class="ac-bar-wrap">
              <div class="ac-bar-track">
                <div class="ac-bar-seg1" id="l-bar-p" style="width: 43%;"></div>
                <div class="ac-bar-seg2" id="l-bar-i" style="width: 57%;"></div>
              </div>
              <div class="ac-bar-legend">
                <span><span class="ac-legend-dot" style="background:#2563eb;"></span>Principal (<span id="l-pct-p">43%</span>)</span>
                <span><span class="ac-legend-dot" style="background:#f59e0b;"></span>Interest (<span id="l-pct-i">57%</span>)</span>
              </div>
            </div>

            <div class="ac-dash-cta-row">
              <span class="ac-dash-note" id="l-res-payoff">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg>
                Pays off 3.8 yrs early with extra payment
              </span>
              <a href="/real-estate/mortgage-calculator" class="ac-dash-link">
                Full Amortization Schedule &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- TAB 2: INVESTMENT & COMPOUND GROWTH ENGINE -->
        <div class="ac-pane" id="pane-growth">
          <div class="ac-grid-2">
            <div class="ac-field-group">
              <label class="ac-field-label" for="g-initial">Initial Investment</label>
              <div class="ac-input-affix">
                <span class="ac-affix-left">$</span>
                <input type="number" id="g-initial" class="ac-input-control has-left" value="10000" step="1000" min="0" oninput="acCalcGrowth()">
              </div>
            </div>
            <div class="ac-field-group">
              <label class="ac-field-label" for="g-monthly">Monthly Contribution</label>
              <div class="ac-input-affix">
                <span class="ac-affix-left">$</span>
                <input type="number" id="g-monthly" class="ac-input-control has-left" value="500" step="50" min="0" oninput="acCalcGrowth()">
              </div>
            </div>
          </div>

          <div class="ac-grid-2">
            <div class="ac-field-group">
              <label class="ac-field-label" for="g-rate">Estimated Return (Annual)</label>
              <div class="ac-input-affix">
                <input type="number" id="g-rate" class="ac-input-control has-right" value="8.5" step="0.5" min="0" oninput="acCalcGrowth()">
                <span class="ac-affix-right">%</span>
              </div>
            </div>
            <div class="ac-field-group">
              <label class="ac-field-label" for="g-years">Time Horizon</label>
              <select id="g-years" class="ac-input-control" onchange="acCalcGrowth()">
                <option value="5">5 Years</option>
                <option value="10">10 Years</option>
                <option value="20" selected>20 Years</option>
                <option value="30">30 Years</option>
              </select>
            </div>
          </div>

          <!-- Output Dashboard -->
          <div class="ac-results-dash">
            <div class="ac-dash-main">
              <div>
                <span class="ac-dash-title">Future Value Projection</span>
                <span style="font-size:0.75rem;color:#64748b;">Total Portfolio Value</span>
              </div>
              <div class="ac-dash-primary-val" id="g-res-total" style="color:#059669;">$364,520</div>
            </div>

            <div class="ac-dash-metrics">
              <div class="ac-metric-cell">
                <span class="ac-metric-label">Total Deposits</span>
                <span class="ac-metric-val" id="g-res-deposits">$130,000</span>
              </div>
              <div class="ac-metric-cell">
                <span class="ac-metric-label">Compound Interest</span>
                <span class="ac-metric-val" id="g-res-interest" style="color:#059669;">$234,520</span>
              </div>
              <div class="ac-metric-cell">
                <span class="ac-metric-label">Wealth Multiplier</span>
                <span class="ac-metric-val" id="g-res-mult">2.80&times;</span>
              </div>
            </div>

            <div class="ac-bar-wrap">
              <div class="ac-bar-track">
                <div class="ac-bar-seg1" id="g-bar-d" style="width: 36%;"></div>
                <div class="ac-bar-seg2" id="g-bar-i" style="width: 64%; background:#10b981;"></div>
              </div>
              <div class="ac-bar-legend">
                <span><span class="ac-legend-dot" style="background:#2563eb;"></span>Deposits (<span id="g-pct-d">36%</span>)</span>
                <span><span class="ac-legend-dot" style="background:#10b981;"></span>Gains (<span id="g-pct-i">64%</span>)</span>
              </div>
            </div>

            <div class="ac-dash-cta-row">
              <span class="ac-dash-note">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                Compounded monthly over the full investment horizon
              </span>
              <a href="/calculators/investment-growth-calculator.php" class="ac-dash-link">
                Detailed Growth Breakdown &rarr;
              </a>
            </div>
          </div>
        </div>

        <!-- TAB 3: PAYCHECK QUICK ESTIMATOR -->
        <div class="ac-pane" id="pane-paycheck">
          <div class="ac-grid-2">
            <div class="ac-field-group">
              <label class="ac-field-label" for="p-salary">Annual Gross Salary</label>
              <div class="ac-input-affix">
                <span class="ac-affix-left">$</span>
                <input type="number" id="p-salary" class="ac-input-control has-left" value="75000" step="2500" min="1000" oninput="acCalcPaycheck()">
              </div>
            </div>
            <div class="ac-field-group">
              <label class="ac-field-label" for="p-freq">Paycheck Frequency</label>
              <select id="p-freq" class="ac-input-control" onchange="acCalcPaycheck()">
                <option value="26" selected>Biweekly (Every 2 Weeks)</option>
                <option value="24">Semimonthly (Twice / Month)</option>
                <option value="12">Monthly (12 / Year)</option>
                <option value="52">Weekly (52 / Year)</option>
              </select>
            </div>
          </div>

          <div class="ac-grid-2">
            <div class="ac-field-group">
              <label class="ac-field-label" for="p-status">Filing Status</label>
              <select id="p-status" class="ac-input-control" onchange="acCalcPaycheck()">
                <option value="single" selected>Single Filer</option>
                <option value="married">Married Filing Jointly</option>
              </select>
            </div>
            <div class="ac-field-group">
              <label class="ac-field-label" for="p-jurisdiction">Tax Framework</label>
              <select id="p-jurisdiction" class="ac-input-control" onchange="acCalcPaycheck()">
                <option value="ohio" selected>State of Ohio (with Municipal)</option>
                <option value="standard">Standard US Benchmark</option>
              </select>
            </div>
          </div>

          <!-- Output Dashboard -->
          <div class="ac-results-dash">
            <div class="ac-dash-main">
              <div>
                <span class="ac-dash-title">Estimated Take-Home Pay</span>
                <span style="font-size:0.75rem;color:#64748b;" id="p-res-freq-label">Biweekly Net Check</span>
              </div>
              <div class="ac-dash-primary-val" id="p-res-net" style="color:#2563eb;">$2,195</div>
            </div>

            <div class="ac-dash-metrics">
              <div class="ac-metric-cell">
                <span class="ac-metric-label">Federal Tax</span>
                <span class="ac-metric-val" id="p-res-fed">$285</span>
              </div>
              <div class="ac-metric-cell">
                <span class="ac-metric-label">FICA (SS + Med)</span>
                <span class="ac-metric-val" id="p-res-fica">$221</span>
              </div>
              <div class="ac-metric-cell">
                <span class="ac-metric-label">State &amp; Local</span>
                <span class="ac-metric-val" id="p-res-state">$184</span>
              </div>
            </div>

            <div class="ac-bar-wrap">
              <div class="ac-bar-track">
                <div class="ac-bar-seg1" id="p-bar-net" style="width: 76%;"></div>
                <div class="ac-bar-seg2" id="p-bar-tax" style="width: 24%; background: #f59e0b;"></div>
              </div>
              <div class="ac-bar-legend">
                <span><span class="ac-legend-dot" style="background:#2563eb;"></span>Take-Home Pay (<span id="p-pct-net">76.1%</span>)</span>
                <span><span class="ac-legend-dot" style="background:#f59e0b;"></span>Taxes &amp; FICA (<span id="p-pct-tax">23.9%</span>)</span>
              </div>
            </div>

            <div class="ac-dash-cta-row">
              <span class="ac-dash-note">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                Effective Tax Rate: <strong id="p-res-rate" style="color:#0f172a;margin-left:4px;">23.9%</strong>
              </span>
              <a href="/ohio/paycheck-calculator" class="ac-dash-link">
                Full Ohio Paycheck Calculator &rarr;
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>

  <!-- ========================================================================
       WHO WE SERVE — USER PERSONAS
       ======================================================================== -->
  <section class="ac-section" aria-labelledby="sec-who-title" style="background:#ffffff;border:1px solid #e2e8f0;border-radius:16px;padding:28px;box-shadow:0 1px 3px rgba(0,0,0,0.03);margin-bottom:32px;">
    <h2 id="sec-who-title" class="ac-sec-title" style="margin-bottom:6px;">Trusted by Homebuyers, Investors, Business Owners &amp; Ohio Employees</h2>
    <p class="ac-sec-subtitle" style="margin-bottom:20px;">Every calculator is purpose-built for a real US financial decision — not a generic math exercise.</p>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(210px,1fr));gap:18px;">
      <div style="background:#eff6ff;border-radius:10px;padding:18px;border-left:4px solid #2563eb;">
        <strong style="color:#0f172a;display:block;margin-bottom:6px;">🏠 Homebuyers &amp; Homeowners</strong>
        <p style="font-size:0.88rem;color:#475569;line-height:1.6;margin:0;">Use our Mortgage, Down Payment, and Closing Cost calculators to understand exactly what you can afford and what you'll owe at the closing table before you make an offer.</p>
      </div>
      <div style="background:#f0fdf4;border-radius:10px;padding:18px;border-left:4px solid #16a34a;">
        <strong style="color:#0f172a;display:block;margin-bottom:6px;">📊 Real Estate Investors</strong>
        <p style="font-size:0.88rem;color:#475569;line-height:1.6;margin:0;">Rely on our DSCR Calculator, Cap Rate Calculator, and Cash-on-Cash Return tools to underwrite rental properties and confirm DSCR loan qualification before you submit an offer.</p>
      </div>
      <div style="background:#fff7ed;border-radius:10px;padding:18px;border-left:4px solid #ea580c;">
        <strong style="color:#0f172a;display:block;margin-bottom:6px;">💼 Small Business Owners</strong>
        <p style="font-size:0.88rem;color:#475569;line-height:1.6;margin:0;">Use our SBA Loan, Business ROI, and Profit Margin calculators to evaluate financing options, model payback periods, and project profitability before committing capital.</p>
      </div>
      <div style="background:#fdf4ff;border-radius:10px;padding:18px;border-left:4px solid #9333ea;">
        <strong style="color:#0f172a;display:block;margin-bottom:6px;">💵 Ohio Employees &amp; Employers</strong>
        <p style="font-size:0.88rem;color:#475569;line-height:1.6;margin:0;">Use our Paycheck, Overtime, and Payroll Tax calculators to verify net take-home pay, estimate quarterly withholding obligations, and model Ohio municipal tax across RITA/CCA districts.</p>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       FEATURED APRO TOOLS DIRECTORY
       ======================================================================== -->
  <section class="ac-section" aria-labelledby="sec-featured-title">
    <div class="ac-sec-header">
      <div>
        <h2 id="sec-featured-title" class="ac-sec-title">Featured Financial &amp; Analytical Calculators</h2>
        <p class="ac-sec-subtitle">Most frequently utilized institutional models across loans, real estate, and taxation.</p>
      </div>
    </div>

    <div class="ac-grid-4" id="acFeaturedGrid">

      <!-- SBA Loan -->
      <a href="/loan-calculators/sba-loan-calculator" class="ac-card" data-cat="loan">
        <div class="ac-card-top">
          <span class="ac-card-badge ac-badge-blue">SBA Commercial</span>
          <div class="ac-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
          </div>
        </div>
        <h3 class="ac-card-h3">SBA Loan Calculator</h3>
        <p class="ac-card-p">Calculate monthly debt service for SBA 7(a) &amp; 504 loan programs with guaranty fees and amortization schedules.</p>
        <div class="ac-card-footer">
          <span class="ac-card-stat">Prime + 2.75% Cap</span>
          <span class="ac-card-arrow">Calculate &rarr;</span>
        </div>
      </a>

      <!-- Ohio Paycheck -->
      <a href="/ohio/paycheck-calculator" class="ac-card" data-cat="tax">
        <div class="ac-card-top">
          <span class="ac-card-badge ac-badge-green">Payroll Tax</span>
          <div class="ac-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
          </div>
        </div>
        <h3 class="ac-card-h3">Ohio Paycheck Calculator</h3>
        <p class="ac-card-p">Models federal withholding, Ohio state marginal tax brackets, and local municipal RITA/CCA city taxes.</p>
        <div class="ac-card-footer">
          <span class="ac-card-stat">$26,050 0% Floor</span>
          <span class="ac-card-arrow">Calculate &rarr;</span>
        </div>
      </a>

      <!-- Rental Yield -->
      <a href="/real-estate/rental-yield-calculator" class="ac-card" data-cat="real-estate">
        <div class="ac-card-top">
          <span class="ac-card-badge ac-badge-amber">Real Estate</span>
          <div class="ac-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          </div>
        </div>
        <h3 class="ac-card-h3">Rental Yield Calculator</h3>
        <p class="ac-card-p">Gross and net rental yield analysis with 2026 market benchmarks across Cleveland (11.3%), Memphis, and Austin.</p>
        <div class="ac-card-footer">
          <span class="ac-card-stat">6.71% US Avg</span>
          <span class="ac-card-arrow">Calculate &rarr;</span>
        </div>
      </a>

      <!-- Cash-on-Cash Return -->
      <a href="/real-estate/cash-on-cash-return-calculator" class="ac-card" data-cat="real-estate">
        <div class="ac-card-top">
          <span class="ac-card-badge ac-badge-amber">Investment</span>
          <div class="ac-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
          </div>
        </div>
        <h3 class="ac-card-h3">Cash-on-Cash Return</h3>
        <p class="ac-card-p">Calculates leveraged pre-tax cash flow against cash invested, mortgage principal paydown, and CapEx reserves.</p>
        <div class="ac-card-footer">
          <span class="ac-card-stat">8% - 12% Target</span>
          <span class="ac-card-arrow">Calculate &rarr;</span>
        </div>
      </a>

      <!-- Cap Rate -->
      <a href="/real-estate/cap-rate-calculator" class="ac-card" data-cat="real-estate">
        <div class="ac-card-top">
          <span class="ac-card-badge ac-badge-amber">Commercial</span>
          <div class="ac-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"/><path d="M22 12A10 10 0 0 0 12 2v10z"/></svg>
          </div>
        </div>
        <h3 class="ac-card-h3">Cap Rate Calculator</h3>
        <p class="ac-card-p">Unlevered Net Operating Income (NOI) divided by property asset value. Essential for multifamily valuation.</p>
        <div class="ac-card-footer">
          <span class="ac-card-stat">NOI &divide; Value</span>
          <span class="ac-card-arrow">Calculate &rarr;</span>
        </div>
      </a>

      <!-- Concrete Calculator -->
      <a href="/construction/concrete-calculator" class="ac-card" data-cat="construction">
        <div class="ac-card-top">
          <span class="ac-card-badge ac-badge-purple">Engineering</span>
          <div class="ac-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>
          </div>
        </div>
        <h3 class="ac-card-h3">Concrete Yardage Calculator</h3>
        <p class="ac-card-p">Estimates cubic yards, 60lb/80lb premix bags, and structural waste buffer for slabs, footings, and curbs.</p>
        <div class="ac-card-footer">
          <span class="ac-card-stat">+10% Margin Built-in</span>
          <span class="ac-card-arrow">Calculate &rarr;</span>
        </div>
      </a>

      <!-- Auto Loan -->
      <a href="/loan-calculators/auto-loan-calculator" class="ac-card" data-cat="loan">
        <div class="ac-card-top">
          <span class="ac-card-badge ac-badge-blue">Consumer Loan</span>
          <div class="ac-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.5 2.8C2.1 11 2 11.5 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></svg>
          </div>
        </div>
        <h3 class="ac-card-h3">Auto Loan Calculator</h3>
        <p class="ac-card-p">Accurate monthly payment, vehicle sales tax, trade-in equity, and total borrowing interest over 36 to 84 months.</p>
        <div class="ac-card-footer">
          <span class="ac-card-stat">Trade-In Factored</span>
          <span class="ac-card-arrow">Calculate &rarr;</span>
        </div>
      </a>

      <!-- Marketing & Project ROI -->
      <a href="/business/roi-calculator" class="ac-card" data-cat="business">
        <div class="ac-card-top">
          <span class="ac-card-badge ac-badge-green">Corporate</span>
          <div class="ac-card-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </div>
        </div>
        <h3 class="ac-card-h3">Business ROI Calculator</h3>
        <p class="ac-card-p">Measures net returns, capital payback duration, and profit margins across IT software, advertising, and equipment.</p>
        <div class="ac-card-footer">
          <span class="ac-card-stat">Payback Analysis</span>
          <span class="ac-card-arrow">Calculate &rarr;</span>
        </div>
      </a>

    </div>
  </section>

  <!-- ========================================================================
       FREE DOWNLOADABLE EXCEL SAPREADSHEETS SHOWCASE
       ======================================================================== -->
  <section class="ac-section" aria-labelledby="sec-downloads-title" style="background:#ffffff;border:1px solid #e2e8f0;border-radius:16px;padding:32px 28px;box-shadow:0 1px 3px rgba(0,0,0,0.03);">
    <div class="ac-sec-header" style="border-bottom:none;padding-bottom:0;margin-bottom:20px;">
      <div>
        <span style="color:#059669;font-size:0.82rem;font-weight:750;text-transform:uppercase;letter-spacing:0.06em;display:flex;align-items:center;gap:6px;">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
          Direct File Downloads &bull; No Signup Required
        </span>
        <h2 id="sec-downloads-title" class="ac-sec-title" style="margin-top:4px;">Free Financial, Real Estate &amp; Tax Templates (Excel &amp; PDF 2026)</h2>
        <p class="ac-sec-subtitle">Need to analyze properties, debt amortization, payroll taxes, or capital ROI offline? Download our 7 institutional workbooks &amp; reference guides.</p>
      </div>
      <div>
        <a href="/downloads/" style="font-size:0.88rem;font-weight:750;color:#2563eb;text-decoration:none;display:inline-flex;align-items:center;gap:4px;">View All Templates &rarr;</a>
      </div>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:20px;">
      <!-- Download Card 1 -->
      <div style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;padding:20px;display:flex;flex-direction:column;">
        <div style="display:flex;justify-content:space-between;margin-bottom:10px;">
          <span style="font-size:0.72rem;font-weight:750;background:#ecfdf5;color:#065f46;padding:3px 8px;border-radius:4px;border:1px solid #a7f3d0;">.XLSX &bull; 26 KB</span>
          <span style="font-size:0.74rem;color:#64748b;font-weight:600;">Mortgages &amp; Loans</span>
        </div>
        <strong style="color:#0f172a;font-size:1.05rem;margin-bottom:8px;line-height:1.35;">30-Yr Amortization Schedule (with Extra Principal)</strong>
        <p style="font-size:0.85rem;color:#475569;line-height:1.55;margin:0 0 16px;flex-grow:1;">360-month payment schedule with automated <code>=PMT</code> and accelerated payoff savings calculation.</p>
        <div style="display:flex;flex-direction:column;gap:8px;">
          <a href="/downloads/files/loan-amortization-schedule-extra-payments-2026.xlsx" download style="background:#0f172a;color:#fff;font-size:0.85rem;font-weight:700;padding:10px;border-radius:8px;text-align:center;text-decoration:none;display:flex;align-items:center;justify-content:center;gap:6px;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            Download Excel Model
          </a>
          <a href="/real-estate/mortgage-calculator" style="font-size:0.78rem;font-weight:700;color:#2563eb;text-align:center;text-decoration:none;">Online Mortgage Tool &rarr;</a>
        </div>
      </div>

      <!-- Download Card 2 -->
      <div style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;padding:20px;display:flex;flex-direction:column;">
        <div style="display:flex;justify-content:space-between;margin-bottom:10px;">
          <span style="font-size:0.72rem;font-weight:750;background:#ecfdf5;color:#065f46;padding:3px 8px;border-radius:4px;border:1px solid #a7f3d0;">.XLSX &bull; 7 KB</span>
          <span style="font-size:0.74rem;color:#64748b;font-weight:600;">Real Estate</span>
        </div>
        <strong style="color:#0f172a;font-size:1.05rem;margin-bottom:8px;line-height:1.35;">Rental Property Cash Flow &amp; Underwriting Model</strong>
        <p style="font-size:0.85rem;color:#475569;line-height:1.55;margin:0 0 16px;flex-grow:1;">Calculates NOI, Cap Rate, leveraged Cash-on-Cash return, and DSCR with 50% rule operating expenses.</p>
        <div style="display:flex;flex-direction:column;gap:8px;">
          <a href="/downloads/files/rental-property-investment-cashflow-model-2026.xlsx" download style="background:#0f172a;color:#fff;font-size:0.85rem;font-weight:700;padding:10px;border-radius:8px;text-align:center;text-decoration:none;display:flex;align-items:center;justify-content:center;gap:6px;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            Download Excel Model
          </a>
          <a href="/real-estate/rental-property-calculator" style="font-size:0.78rem;font-weight:700;color:#2563eb;text-align:center;text-decoration:none;">Online Rental Tool &rarr;</a>
        </div>
      </div>

      <!-- Download Card 3 -->
      <div style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;padding:20px;display:flex;flex-direction:column;">
        <div style="display:flex;justify-content:space-between;margin-bottom:10px;">
          <span style="font-size:0.72rem;font-weight:750;background:#ecfdf5;color:#065f46;padding:3px 8px;border-radius:4px;border:1px solid #a7f3d0;">.XLSX &bull; 7 KB</span>
          <span style="font-size:0.74rem;color:#64748b;font-weight:600;">Corporate ROI</span>
        </div>
        <strong style="color:#0f172a;font-size:1.05rem;margin-bottom:8px;line-height:1.35;">Capital Project &amp; Business ROI Model (NPV &amp; IRR)</strong>
        <p style="font-size:0.85rem;color:#475569;line-height:1.55;margin:0 0 16px;flex-grow:1;">5-year discounted cash flow analysis with automated <code>=NPV</code>, <code>=IRR</code>, and monthly payback horizons.</p>
        <div style="display:flex;flex-direction:column;gap:8px;">
          <a href="/downloads/files/business-project-roi-capital-budgeting-model-2026.xlsx" download style="background:#0f172a;color:#fff;font-size:0.85rem;font-weight:700;padding:10px;border-radius:8px;text-align:center;text-decoration:none;display:flex;align-items:center;justify-content:center;gap:6px;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            Download Excel Model
          </a>
          <a href="/business/project-roi-calculator" style="font-size:0.78rem;font-weight:700;color:#2563eb;text-align:center;text-decoration:none;">Online Project ROI Tool &rarr;</a>
        </div>
      </div>

        <!-- Download Card 4 (PDF Cheat Sheet) -->
        <div style="background:#f8fafc;border:1.5px solid #2563eb;border-radius:12px;padding:20px;display:flex;flex-direction:column;">
          <div style="display:flex;justify-content:space-between;margin-bottom:10px;">
            <span style="font-size:0.72rem;font-weight:750;background:#eff6ff;color:#1d4ed8;padding:3px 8px;border-radius:4px;border:1px solid #bfdbfe;">.PDF &bull; Printable</span>
            <span style="font-size:0.74rem;color:#64748b;font-weight:600;">Executive Guide</span>
          </div>
          <strong style="color:#0f172a;font-size:1.05rem;margin-bottom:8px;line-height:1.35;">2026 Financial &amp; Loan Metrics Reference Sheet</strong>
          <p style="font-size:0.85rem;color:#475569;line-height:1.55;margin:0 0 16px;flex-grow:1;">Institutional 2-page printable guide for loan DSCR rules, Cap Rate math, and 2026 IRS tax brackets.</p>
          <div style="display:flex;flex-direction:column;gap:8px;">
            <a href="/downloads/files/2026-financial-loan-metrics-cheat-sheet.pdf" download style="background:#2563eb;color:#fff;font-size:0.85rem;font-weight:700;padding:10px;border-radius:8px;text-align:center;text-decoration:none;display:flex;align-items:center;justify-content:center;gap:6px;">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
              Download PDF Guide
            </a>
            <a href="/downloads/" style="font-size:0.78rem;font-weight:700;color:#2563eb;text-align:center;text-decoration:none;">Explore All 7 Templates &rarr;</a>
          </div>
        </div>
    </div>
  </section>

  <!-- ========================================================================
       COMPLETE CATEGORY DIRECTORY (6 CORE CLUSTERS)
       ======================================================================== -->
  <section class="ac-section" aria-labelledby="sec-directory-title">
    <div class="ac-sec-header">
      <div>
        <h2 id="sec-directory-title" class="ac-sec-title">Explore All Calculator Categories</h2>
        <p class="ac-sec-subtitle">Browse through our complete collection of 50+ specialized engineering and financial engines.</p>
      </div>
    </div>

    <div class="ac-grid-3">

      <!-- 1. Loans & Financing -->
      <div class="ac-cluster-card">
        <div class="ac-cluster-head">
          <div class="ac-cluster-title-wrap">
            <div class="ac-cluster-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
            </div>
            <h3 class="ac-cluster-title">Loan Calculators</h3>
          </div>
          <a href="/loan-calculators/" class="ac-cluster-viewall">View All (8) &rarr;</a>
        </div>
        <p style="font-size:0.83rem;color:#475569;line-height:1.6;margin:0 0 12px;">Every major US borrowing product, modeled with exact amortization math. The <strong>SBA Loan Calculator</strong> covers 7(a) and 504 programs with guaranty fees. The <strong>DTI Calculator</strong> measures your mortgage qualification headroom before you apply. Use the <strong>HELOC Calculator</strong> to compare draw period interest-only costs against a cash-out refinance.</p>
        <div class="ac-cluster-links">
          <a href="/loan-calculators/sba-loan-calculator" class="ac-cluster-link">
            <span>SBA 7(a) Loan Calculator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/loan-calculators/business-loan-calculator" class="ac-cluster-link">
            <span>Commercial Business Loan</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/loan-calculators/auto-loan-calculator" class="ac-cluster-link">
            <span>Auto &amp; Vehicle Loan</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/loan-calculators/personal-loan-calculator" class="ac-cluster-link">
            <span>Personal &amp; Consolidation Loan</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/loan-calculators/land-loan-calculator" class="ac-cluster-link">
            <span>Raw Land &amp; Lot Loan</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
                    <a href="/loan-calculators/debt-to-income-calculator" class="ac-cluster-link">
            <span>Debt-to-Income (DTI) Calculator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/loan-calculators/heloc-calculator" class="ac-cluster-link">
            <span>HELOC Payment Calculator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/loan-calculators/boat-loan-calculator" class="ac-cluster-link">
            <span>Boat &amp; Marine Loan Calculator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/loan-calculators/interest-only-loan-calculator" class="ac-cluster-link">
            <span>Interest-Only Loan Calculator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/loan-calculators/mortgage-payoff-calculator" class="ac-cluster-link">
            <span>Mortgage Payoff (Extra Payments)</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
        </div>
      </div>

      <!-- 2. Real Estate & Mortgage -->
      <div class="ac-cluster-card">
        <div class="ac-cluster-head">
          <div class="ac-cluster-title-wrap">
            <div class="ac-cluster-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>
            <h3 class="ac-cluster-title">Real Estate &amp; Mortgage</h3>
          </div>
          <a href="/real-estate/" class="ac-cluster-viewall">View All (11) &rarr;</a>
        </div>
        <p style="font-size:0.83rem;color:#475569;line-height:1.6;margin:0 0 12px;">An integrated suite for the full homebuying decision chain. Start with the <strong>Mortgage Calculator</strong> for PITI, then the <strong>Down Payment Calculator</strong> to map your savings timeline, and the <strong>Closing Cost Calculator</strong> for total cash-to-close. Investors use the <strong>DSCR</strong>, <strong>Cap Rate</strong>, and <strong>Cash-on-Cash Return</strong> tools to underwrite rental deals.</p>
        <div class="ac-cluster-links">
          <a href="/real-estate/home-affordability-calculator" class="ac-cluster-link">
            <span>Home Affordability (How Much House)</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/investment-property-closing-cost-calculator" class="ac-cluster-link">
            <span>Investment Property Closing Costs</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/closing-cost-calculator" class="ac-cluster-link">
            <span>Closing Cost Calculator (Buyer/Seller)</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/hoa-fee-calculator" class="ac-cluster-link">
            <span>HOA Fee &amp; Buying Power Impact</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/property-tax-calculator" class="ac-cluster-link">
            <span>Property Tax Calculator by State</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/mortgage-refinance-calculator" class="ac-cluster-link">
            <span>Mortgage Refinance Break-Even</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/rent-affordability-calculator" class="ac-cluster-link">
            <span>Rent AAffordability Calculator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/mortgage-calculator" class="ac-cluster-link">
            <span>Fixed-Rate Mortgage (PITI)</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/cap-rate-calculator" class="ac-cluster-link">
            <span>Cap Rate (Capitalization Rate)</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/rental-yield-calculator" class="ac-cluster-link">
            <span>Rental Yield Calculator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/cash-on-cash-return-calculator" class="ac-cluster-link">
            <span>Cash-on-Cash Return</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/dscr-calculator" class="ac-cluster-link">
            <span>DSCR Debt Coverage Ratio</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/1031-exchange-calculator" class="ac-cluster-link">
            <span>Section 1031 Exchange Deferral</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
        </div>
      </div>

      <!-- 3. Ohio Payroll & Taxes -->
      <div class="ac-cluster-card">
        <div class="ac-cluster-head">
          <div class="ac-cluster-title-wrap">
            <div class="ac-cluster-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
            </div>
            <h3 class="ac-cluster-title">Ohio Payroll &amp; Taxes</h3>
          </div>
          <a href="/ohio/" class="ac-cluster-viewall">View All (6) &rarr;</a>
        </div>
        <p style="font-size:0.83rem;color:#475569;line-height:1.6;margin:0 0 12px;">Ohio's layered tax structure &mdash; federal brackets, Ohio progressive rates with a \,050 zero-bracket floor, and local municipal taxes for Columbus, Cleveland, Cincinnati, Akron, Toledo, and Dayton &mdash; makes net pay math genuinely complex. Our tools handle all three layers simultaneously. Updated for 2026 IRS Publication 15-T tables.</p>
        <div class="ac-cluster-links">
                    <a href="/texas/paycheck-calculator" class="ac-cluster-link" style="border-left:3px solid #2563eb;padding-left:8px;">
            <span>Texas Paycheck (0% State Tax)</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/texas/" class="ac-cluster-link" style="border-left:3px solid #2563eb;padding-left:8px;">
            <span>Texas Payroll Calculators Hub</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/ohio/paycheck-calculator" class="ac-cluster-link">
            <span>Full Ohio Paycheck Calculator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/ohio/salary-paycheck-calculator" class="ac-cluster-link">
            <span>Annual Salary to Net Pay</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/ohio/hourly-paycheck-calculator" class="ac-cluster-link">
            <span>Hourly Paycheck &amp; Hours</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/ohio/bonus-tax-calculator" class="ac-cluster-link">
            <span>Supplemental Bonus Tax</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/ohio/overtime-calculator" class="ac-cluster-link">
            <span>FLSA 1.5x Overtime Calculator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/ohio/payroll-tax-calculator" class="ac-cluster-link">
            <span>Employer Payroll &amp; BWC Cost</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
        </div>
      </div>

      <!-- 4. Construction & Building -->
      <div class="ac-cluster-card">
        <div class="ac-cluster-head">
          <div class="ac-cluster-title-wrap">
            <div class="ac-cluster-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 20h20"/><path d="M5 20V8l7-5 7 5v12"/><rect x="9" y="12" width="6" height="8"/></svg>
            </div>
            <h3 class="ac-cluster-title">Construction Tools</h3>
          </div>
          <a href="/construction/" class="ac-cluster-viewall">View All (8) &rarr;</a>
        </div>
        <p style="font-size:0.83rem;color:#475569;line-height:1.6;margin:0 0 12px;">Built for contractors, project managers, and serious DIYers working under ACI and IRC code standards. The <strong>Concrete Calculator</strong> outputs cubic yards and bag counts with a 10% structural waste buffer. The <strong>Stair Calculator</strong> enforces IRC R311.7 rise/run limits (7&frac34;&rdquo; rise, 10&rdquo; tread). The <strong>Rafter Calculator</strong> outputs rafter length at any roof pitch.</p>
        <div class="ac-cluster-links">
          <a href="/construction/cubic-yard-calculator" class="ac-cluster-link" style="border-left:3px solid #2563eb;padding-left:8px;">
            <span style="font-weight:700;color:#0f172a;">Cubic Yard (Mulch, Dirt, Gravel)</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/construction/home-addition-cost-calculator" class="ac-cluster-link" style="border-left:3px solid #b45309;padding-left:8px;">
            <span style="font-weight:700;color:#0f172a;">Home Addition Cost (2026)</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/construction/concrete-calculator" class="ac-cluster-link">
            <span>Concrete Volume &amp; Slabs</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/construction/concrete-bag-calculator" class="ac-cluster-link">
            <span>Concrete Bag Count (60/80 lb)</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/construction/concrete-footing-calculator" class="ac-cluster-link">
            <span>Cylinder &amp; Column Footings</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/construction/rafter-calculator" class="ac-cluster-link">
            <span>Roof Rafter Pitch &amp; Length</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/construction/stair-calculator" class="ac-cluster-link">
            <span>IRC Code Stair Stringer Calculator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/construction/asphalt-calculator" class="ac-cluster-link">
            <span>Driveway Asphalt Tonnage</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
        </div>
      </div>

      <!-- 5. Business & Commercial ROI -->
      <div class="ac-cluster-card">
        <div class="ac-cluster-head">
          <div class="ac-cluster-title-wrap">
            <div class="ac-cluster-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><polyline points="17 11 19 13 23 9"/></svg>
            </div>
            <h3 class="ac-cluster-title">Business &amp; ROI</h3>
          </div>
          <a href="/business/" class="ac-cluster-viewall">View All (9) &rarr;</a>
        </div>
        <p style="font-size:0.83rem;color:#475569;line-height:1.6;margin:0 0 12px;">Every capital allocation decision benefits from clear ROI math before money moves. The <strong>Business ROI Calculator</strong> models net returns and payback periods for IT, equipment, and ad spend. The <strong>Profit Margin Calculator</strong> separates gross and net margin to find where revenue leaks. Amazon FBA sellers use our <strong>Landed Cost Calculator</strong> to see true per-SKU profitability.</p>
        <div class="ac-cluster-links">
          <a href="/business/profit-margin-calculator" class="ac-cluster-link">
            <span>Gross &amp; Net Profit Margin</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/business/markup-calculator" class="ac-cluster-link">
            <span>Markup vs Margin Calculator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/business/project-roi-calculator" class="ac-cluster-link">
            <span>IT &amp; Capital Project NPV/IRR</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/business/marketing-roi-calculator" class="ac-cluster-link">
            <span>Marketing LTV:CAC &amp; Ad Spend</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/business/amazon-roi-calculator" class="ac-cluster-link">
            <span>Amazon FBA Landed Cost &amp; ROI</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/business/solar-roi-calculator" class="ac-cluster-link">
            <span>Solar 30% ITC &amp; Payback Period</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
        </div>
      </div>

      <!-- 6. Math & Technology -->
      <div class="ac-cluster-card">
        <div class="ac-cluster-head">
          <div class="ac-cluster-title-wrap">
            <div class="ac-cluster-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
            </div>
            <h3 class="ac-cluster-title">Math &amp; Technology</h3>
          </div>
          <a href="/math/" class="ac-cluster-viewall">View All (8) &rarr;</a>
        </div>
        <div class="ac-cluster-links">
          <a href="/technology/voltage-drop-calculator" class="ac-cluster-link">
            <span>NEC Copper/Alum Voltage Drop</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/calculators/cd-interest.php" class="ac-cluster-link">
            <span>CD Interest &amp; APY Compounding</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/calculators/freight-class.php" class="ac-cluster-link">
            <span>NMFC Freight Density Class</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/math/" class="ac-cluster-link">
            <span>Matrix RREF &amp; Determinant Solvers</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/calculators/investment-growth-calculator.php" class="ac-cluster-link">
            <span>Compound Growth &amp; Future Value</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/technology/" class="ac-cluster-link">
            <span>PC Hardware Bottleneck Estimator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- ========================================================================
       HOW TO CHOOSE THE RIGHT CALCULATOR (DECISION GUIDE)
       ======================================================================== -->
  <section class="ac-section" aria-labelledby="sec-guide-title" style="background:#ffffff;border:1px solid #e2e8f0;border-radius:16px;padding:28px;box-shadow:0 1px 3px rgba(0,0,0,0.03);margin-bottom:32px;">
    <div class="ac-sec-header" style="margin-bottom:18px;">
      <div>
        <span style="color:#2563eb;font-size:0.82rem;font-weight:750;text-transform:uppercase;letter-spacing:0.06em;">Decision Guide</span>
        <h2 id="sec-guide-title" class="ac-sec-title" style="margin:4px 0 8px;">How to Find the Right Calculator for Your Situation</h2>
        <p class="ac-sec-subtitle">Step-by-step tool workflows mapped to your specific personal or commercial financial milestone.</p>
      </div>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:16px;">
      <div style="padding:16px;background:#f8fafc;border-radius:12px;border:1px solid #e2e8f0;">
        <h3 style="font-size:0.95rem;color:#0f172a;font-weight:700;margin:0 0 8px;display:flex;align-items:center;gap:6px;">
          <span>🏠</span> Buying a Home or Refinancing
        </h3>
        <p style="font-size:0.85rem;color:#475569;line-height:1.5;margin:0 0 10px;">Model your monthly payment, determine cash-to-close requirements, and confirm borrowing power before speaking with a loan officer:</p>
        <div style="display:flex;flex-wrap:wrap;gap:6px;font-size:0.8rem;">
          <a href="/real-estate/mortgage-calculator" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">1. Mortgage (PITI) &rarr;</a>
          <a href="/real-estate/down-payment-calculator" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">2. Down Payment &rarr;</a>
          <a href="/real-estate/closing-cost-calculator" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">3. Closing Costs &rarr;</a>
          <a href="/real-estate/mortgage-refinance-calculator" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">4. Refinance Break-Even &rarr;</a>
        </div>
      </div>

      <div style="padding:16px;background:#f8fafc;border-radius:12px;border:1px solid #e2e8f0;">
        <h3 style="font-size:0.95rem;color:#0f172a;font-weight:700;margin:0 0 8px;display:flex;align-items:center;gap:6px;">
          <span>🏢</span> Real Estate &amp; Rental Investing
        </h3>
        <p style="font-size:0.85rem;color:#475569;line-height:1.5;margin:0 0 10px;">Underwrite prospective deals, verify lender debt coverage benchmarks, and measure cash yield before making an offer:</p>
        <div style="display:flex;flex-wrap:wrap;gap:6px;font-size:0.8rem;">
          <a href="/real-estate/dscr-calculator" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">1. DSCR Debt Coverage &rarr;</a>
          <a href="/real-estate/cap-rate-calculator" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">2. Capitalization Rate &rarr;</a>
          <a href="/real-estate/cash-on-cash-return-calculator" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">3. Cash-on-Cash &rarr;</a>
          <a href="/real-estate/rental-yield-calculator" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">4. Rental Yield &rarr;</a>
        </div>
      </div>

      <div style="padding:16px;background:#f8fafc;border-radius:12px;border:1px solid #e2e8f0;">
        <h3 style="font-size:0.95rem;color:#0f172a;font-weight:700;margin:0 0 8px;display:flex;align-items:center;gap:6px;">
          <span>💼</span> Small Business Financing &amp; Growth
        </h3>
        <p style="font-size:0.85rem;color:#475569;line-height:1.5;margin:0 0 10px;">Structure commercial borrowing, calculate payback horizons, and optimize pricing margins for long-term solvency:</p>
        <div style="display:flex;flex-wrap:wrap;gap:6px;font-size:0.8rem;">
          <a href="/loan-calculators/sba-loan-calculator" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">1. SBA 7(a) Loan &rarr;</a>
          <a href="/loan-calculators/business-loan-calculator" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">2. Commercial Loan &rarr;</a>
          <a href="/business/profit-margin-calculator" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">3. Profit Margin &rarr;</a>
          <a href="/business/project-roi-calculator" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">4. Project NPV/IRR &rarr;</a>
        </div>
      </div>

      <div style="padding:16px;background:#f8fafc;border-radius:12px;border:1px solid #e2e8f0;">
        <h3 style="font-size:0.95rem;color:#0f172a;font-weight:700;margin:0 0 8px;display:flex;align-items:center;gap:6px;">
          <span>📋</span> Payroll, Tax &amp; Personal Planning
        </h3>
        <p style="font-size:0.85rem;color:#475569;line-height:1.5;margin:0 0 10px;">Verify statutory payroll withholdings, calculate overtime pay, and project compound wealth growth over time:</p>
        <div style="display:flex;flex-wrap:wrap;gap:6px;font-size:0.8rem;">
          <a href="/ohio/paycheck-calculator" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">1. Ohio Paycheck &rarr;</a>
          <a href="/ohio/overtime-calculator" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">2. FLSA Overtime &rarr;</a>
          <a href="/calculators/investment-growth-calculator.php" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">3. Compound Growth &rarr;</a>
          <a href="/calculators/cd-interest.php" style="color:#2563eb;font-weight:600;text-decoration:none;background:#eff6ff;padding:4px 8px;border-radius:6px;">4. CD APY Interest &rarr;</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       METHODOLOGY & INSTITUTIONAL STANDARDS (E-E-A-T)
       ======================================================================== -->
  <section class="ac-methodology-card" aria-labelledby="sec-meth-title">
    <div style="max-width:800px;">
      <span style="color:#2563eb;font-size:0.82rem;font-weight:750;text-transform:uppercase;letter-spacing:0.06em;">Mathematical &amp; Regulatory Integrity</span>
      <h2 id="sec-meth-title" style="font-size:1.6rem;color:#0f172a;font-weight:850;margin:6px 0 12px;letter-spacing:-0.02em;">
        How AmericaCalculator Engineers Industry-Standard Formulas
      </h2>
      <p style="color:#475569;font-size:0.95rem;line-height:1.7;margin:0;">
        Unlike generic web widgets with arbitrary rounding, our calculation models are engineered by financial analysts and software engineers to adhere directly to statutory guidelines, banking amortization protocols, and peer-reviewed mathematical methodologies.
      </p>
    </div>

    <div class="ac-meth-grid">
      <div class="ac-meth-box">
        <h4>1. Standard Banking Amortization</h4>
        <p>Our mortgage, SBA, auto, and personal loan engines calculate interest using precise monthly compounding equations:  = P \frac{r(1+r)^n}{(1+r)^n - 1}$, with exact day-count conventions and principal amortization waterfalls that match Fannie Mae, Freddie Mac, and institutional bank schedules to the exact penny.</p>
      </div>

      <div class="ac-meth-box" style="border-left-color:#10b981;">
        <h4>2. IRS Tax Code Compliance</h4>
        <p>Payroll and tax tools incorporate current federal standard deductions (,000 single / ,000 MFJ for 2026), FICA wage base thresholds (,600+), and Ohio Department of Taxation statutory brackets featuring the current ,050 zero-bracket floor along with RITA/CCA municipal tax rates.</p>
      </div>

      <div class="ac-meth-box" style="border-left-color:#f59e0b;">
        <h4>3. Building Codes &amp; ASTM Standards</h4>
        <p>Construction calculators incorporate American Concrete Institute (ACI 318) mix volume standards, International Residential Code (IRC R311.7) stair rise/run maximums (7&frac34;&rdquo; rise, 10&rdquo; tread), ASTM A615 rebar specifications, and industry-standard 10% structural waste safety factors.</p>
      </div>

      <div class="ac-meth-box" style="border-left-color:#8b5cf6;">
        <h4>4. 100% Client-Side Privacy</h4>
        <p>Your inputs execute locally in your web browser using pure client-side JavaScript. No salaries, debt obligations, home purchase values, or commercial revenues are ever recorded, tracked, sent to third-party tracking pixels, or transmitted to any backend database.</p>
      </div>
    </div>
  </section>

  <!-- ========================================================================
       FREQUENTLY ASKED QUESTIONS (ACCORDION)
       ======================================================================== -->
  <section class="ac-section" aria-labelledby="sec-faq-title">
    <div class="ac-sec-header">
      <div>
        <h2 id="sec-faq-title" class="ac-sec-title">Frequently Asked Questions</h2>
        <p class="ac-sec-subtitle">Common questions regarding tool accuracy, methodology, and data security.</p>
      </div>
    </div>

    <div class="ac-faq-list">
      <div class="ac-faq-card open">
        <button class="ac-faq-trigger" onclick="acToggleFaq(this)">
          <span>Are the calculators on AmericaCalculator.com completely free to use?</span>
          <svg class="ac-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="ac-faq-answer">
          Yes. Every calculation tool across our entire directory is 100% free for personal, educational, and commercial financial decision-making. We require no user accounts, no email signups, no subscriptions, and enforce no daily calculation limits. Our tools are built to give consumers and professionals transparent access to institutional-quality financial mathematics without paywalls or hidden fees.
        </div>
      </div>

      <div class="ac-faq-card">
        <button class="ac-faq-trigger" onclick="acToggleFaq(this)">
          <span>How often are financial rates, tax brackets, and formulas updated?</span>
          <svg class="ac-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="ac-faq-answer">
          Our engineering team audits tax brackets, standard deductions, FICA caps, and state unemployment thresholds at the beginning of each calendar year and whenever mid-year legislative updates occur. This includes IRS Publication 15-T withholding tables, Ohio Department of Taxation statutory adjustments, RITA/CCA municipal rate changes, and Federal Reserve benchmark interest rate announcements.
        </div>
      </div>

      <div class="ac-faq-card">
        <button class="ac-faq-trigger" onclick="acToggleFaq(this)">
          <span>Is my personal or financial information private and secure?</span>
          <svg class="ac-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="ac-faq-answer">
          Absolutely. All calculation logic runs strictly inside your web browser via client-side JavaScript. We do not transmit, log, or store your salary, loan amounts, mortgage balances, credit scores, or property figures on any server or third-party database. Because calculations happen locally on your device, your sensitive financial information never leaves your personal machine.
        </div>
      </div>

      <div class="ac-faq-card">
        <button class="ac-faq-trigger" onclick="acToggleFaq(this)">
          <span>Can I print or save my calculation results for loan or tax records?</span>
          <svg class="ac-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="ac-faq-answer">
          Yes. You can use your browser's print command (Ctrl+P on Windows or Cmd+P on Mac) on any calculator page. Our custom print stylesheets automatically strip out navigation menus, footers, search bars, and ads to produce clean, professional one-page amortization summaries, tax breakdowns, and material estimates suitable for PDF export or loan applications.
        </div>
      </div>

      <div class="ac-faq-card">
        <button class="ac-faq-trigger" onclick="acToggleFaq(this)">
          <span>How can I report a formula discrepancy or request a new calculator?</span>
          <svg class="ac-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="ac-faq-answer">
          You can reach our editorial and engineering team directly through our <a href="/contact" style="color:#2563eb;font-weight:600;">Contact Page</a>. Please select "Accuracy Issue" or "Feature Request" and provide details regarding your input numbers, observed output, and official statutory citations (such as IRS revenue procedures, Fannie Mae guides, or municipal tax ordinances) so we can review and update the tool promptly.
        </div>
      </div>

      <div class="ac-faq-card">
        <button class="ac-faq-trigger" onclick="acToggleFaq(this)">
          <span>Which loan calculator should I choose for my situation?</span>
          <svg class="ac-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="ac-faq-answer">
          For commercial equipment, working capital, or business real estate, choose our <a href="/loan-calculators/sba-loan-calculator" style="color:#2563eb;font-weight:600;">SBA Loan Calculator</a> or <a href="/loan-calculators/business-loan-calculator" style="color:#2563eb;font-weight:600;">Commercial Business Loan Calculator</a>. For residential home buying, use the <a href="/real-estate/mortgage-calculator" style="color:#2563eb;font-weight:600;">Mortgage Calculator</a> or <a href="/real-estate/dscr-calculator" style="color:#2563eb;font-weight:600;">DSCR Calculator</a> for rental properties. For vehicles or debt consolidation, select the Auto Loan or Personal Loan tools respectively.
        </div>
      </div>

      <div class="ac-faq-card">
        <button class="ac-faq-trigger" onclick="acToggleFaq(this)">
          <span>How accurate are results compared to an actual lender quote?</span>
          <svg class="ac-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="ac-faq-answer">
          Our loan models calculate principal and interest (P&amp;I) using standard institutional banking amortization formulas that match Fannie Mae, Freddie Mac, and commercial lender schedules to the penny. However, official lender quotes also bundle location-specific property taxes, private mortgage insurance (PMI), homeowners insurance, and lender origination fees into your total PITI monthly payment. Use our tools for baseline payment math, and add local escrow estimates for your final budget.
        </div>
      </div>

      <div class="ac-faq-card">
        <button class="ac-faq-trigger" onclick="acToggleFaq(this)">
          <span>Do AmericaCalculator tools work on mobile phones and tablets?</span>
          <svg class="ac-faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="ac-faq-answer">
          Yes. Every calculator on AmericaCalculator.com is built with a responsive, mobile-first design optimized for touchscreens on smartphones and tablets. Input fields trigger native numeric keypads, graphs resize dynamically, and calculation logic runs instantaneously without requiring app installations or active internet connectivity after the initial page load.
        </div>
      </div>
    </div>
  </section>

</div>
</main>

<script>
// ==========================================================================
// INSTITUTIONAL MULTI-MODE FINANCIAL SUITE JAVASCRIPT
// ==========================================================================

function acFormatCurr(num) {
  if (isNaN(num) || !isFinite(num)) return '$0';
  return '$' + Math.round(num).toLocaleString('en-US');
}

// 1. Tab Switching Logic
function acSwitchTab(tabId) {
  document.querySelectorAll('.ac-suite-tab').forEach(function(btn) {
    btn.classList.remove('active');
    btn.setAttribute('aria-selected', 'false');
  });
  document.querySelectorAll('.ac-pane').forEach(function(pane) {
    pane.classList.remove('active');
  });

  var btn = document.getElementById('tabBtn-' + tabId);
  var pane = document.getElementById('pane-' + tabId);
  if (btn && pane) {
    btn.classList.add('active');
    btn.setAttribute('aria-selected', 'true');
    pane.classList.add('active');
  }

  // Recalculate upon switching
  if (tabId === 'loan') acCalcLoan();
  else if (tabId === 'growth') acCalcGrowth();
  else if (tabId === 'paycheck') acCalcPaycheck();
}

// 2. Tab 1: Loan & Mortgage Engine
function acCalcLoan() {
  var principal = parseFloat(document.getElementById('l-amount').value) || 0;
  var rate = (parseFloat(document.getElementById('l-rate').value) || 0) / 100 / 12;
  var years = parseInt(document.getElementById('l-term').value, 10) || 30;
  var extra = parseFloat(document.getElementById('l-extra').value) || 0;
  var totalMonths = years * 12;

  var monthlyBase = 0;
  if (rate > 0 && totalMonths > 0) {
    monthlyBase = principal * (rate * Math.pow(1 + rate, totalMonths)) / (Math.pow(1 + rate, totalMonths) - 1);
  } else if (totalMonths > 0) {
    monthlyBase = principal / totalMonths;
  }

  // Simulation with and without extra payment
  var balance = principal;
  var actualMonths = 0;
  var totalInterestPaid = 0;
  var standardTotalInterest = (monthlyBase * totalMonths) - principal;

  while (balance > 0 && actualMonths < totalMonths) {
    actualMonths++;
    var interestPayment = balance * rate;
    var principalPayment = (monthlyBase - interestPayment) + extra;
    if (principalPayment > balance) {
      principalPayment = balance;
    }
    totalInterestPaid += interestPayment;
    balance -= principalPayment;
  }

  var interestSaved = Math.max(0, standardTotalInterest - totalInterestPaid);
  var totalCost = principal + totalInterestPaid;
  var pPct = totalCost > 0 ? Math.round((principal / totalCost) * 100) : 50;
  var iPct = 100 - pPct;

  document.getElementById('l-res-monthly').textContent = acFormatCurr(monthlyBase + extra);
  document.getElementById('l-res-principal').textContent = acFormatCurr(principal);
  document.getElementById('l-res-interest').textContent = acFormatCurr(totalInterestPaid);
  document.getElementById('l-res-saved').textContent = acFormatCurr(interestSaved);

  document.getElementById('l-bar-p').style.width = pPct + '%';
  document.getElementById('l-bar-i').style.width = iPct + '%';
  document.getElementById('l-pct-p').textContent = pPct + '%';
  document.getElementById('l-pct-i').textContent = iPct + '%';

  var yearsSaved = Math.max(0, ((totalMonths - actualMonths) / 12)).toFixed(1);
  var payoffNote = document.getElementById('l-res-payoff');
  if (extra > 0 && yearsSaved > 0) {
    payoffNote.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg> Pays off ' + yearsSaved + ' yrs early ($' + Math.round(interestSaved).toLocaleString() + ' saved)';
  } else {
    payoffNote.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg> Standard ' + years + '-year fixed term';
  }
}

// 3. Tab 2: Compound Investment Engine
function acCalcGrowth() {
  var initial = parseFloat(document.getElementById('g-initial').value) || 0;
  var monthly = parseFloat(document.getElementById('g-monthly').value) || 0;
  var annualRate = (parseFloat(document.getElementById('g-rate').value) || 0) / 100;
  var years = parseInt(document.getElementById('g-years').value, 10) || 20;
  var r = annualRate / 12;
  var n = years * 12;

  var futureValue = 0;
  if (r > 0) {
    futureValue = initial * Math.pow(1 + r, n) + monthly * ((Math.pow(1 + r, n) - 1) / r);
  } else {
    futureValue = initial + (monthly * n);
  }

  var totalDeposits = initial + (monthly * n);
  var interestEarned = Math.max(0, futureValue - totalDeposits);
  var multiplier = totalDeposits > 0 ? (futureValue / totalDeposits).toFixed(2) : '1.00';

  var depPct = futureValue > 0 ? Math.round((totalDeposits / futureValue) * 100) : 50;
  var intPct = 100 - depPct;

  document.getElementById('g-res-total').textContent = acFormatCurr(futureValue);
  document.getElementById('g-res-deposits').textContent = acFormatCurr(totalDeposits);
  document.getElementById('g-res-interest').textContent = acFormatCurr(interestEarned);
  document.getElementById('g-res-mult').textContent = multiplier + '\u00D7';

  document.getElementById('g-bar-d').style.width = depPct + '%';
  document.getElementById('g-bar-i').style.width = intPct + '%';
  document.getElementById('g-pct-d').textContent = depPct + '%';
  document.getElementById('g-pct-i').textContent = intPct + '%';
}

// 4. Tab 3: Take-Home Paycheck Engine
function acCalcPaycheck() {
  var salary = parseFloat(document.getElementById('p-salary').value) || 0;
  var freq = parseInt(document.getElementById('p-freq').value, 10) || 26;
  var status = document.getElementById('p-status').value;
  var isOhio = document.getElementById('p-jurisdiction').value === 'ohio';

  var grossCheck = salary / freq;

  // Approximate 2026 Federal Withholding
  var stdDeduction = (status === 'married') ? 30000 : 15000;
  var taxableFed = Math.max(0, salary - stdDeduction);
  var annualFed = 0;
  if (taxableFed <= 11600) {
    annualFed = taxableFed * 0.10;
  } else if (taxableFed <= 47150) {
    annualFed = 1160 + (taxableFed - 11600) * 0.12;
  } else if (taxableFed <= 100525) {
    annualFed = 5426 + (taxableFed - 47150) * 0.22;
  } else {
    annualFed = 17168 + (taxableFed - 100525) * 0.24;
  }

  // FICA (6.2% SS up to $168,600 + 1.45% Medicare)
  var annualFica = Math.min(salary, 168600) * 0.062 + (salary * 0.0145);

  // State & Local (Ohio progressive + 2.0% average local vs 4.5% standard)
  var annualState = 0;
  if (isOhio) {
    var ohioTaxable = Math.max(0, salary - 26050);
    var ohioState = ohioTaxable * 0.0275;
    var ohioCity = salary * 0.02; // Average local municipal
    annualState = ohioState + ohioCity;
  } else {
    annualState = Math.max(0, salary - 10000) * 0.045;
  }

  var checkFed = annualFed / freq;
  var checkFica = annualFica / freq;
  var checkState = annualState / freq;
  var totalDeductions = checkFed + checkFica + checkState;
  var netCheck = Math.max(0, grossCheck - totalDeductions);
  var effectiveRate = salary > 0 ? (((annualFed + annualFica + annualState) / salary) * 100).toFixed(1) : 0;

  var freqLabel = (freq === 26) ? 'Biweekly Net Check' : (freq === 24) ? 'Semimonthly Net Check' : (freq === 12) ? 'Monthly Net Check' : 'Weekly Net Check';
  document.getElementById('p-res-freq-label').textContent = freqLabel;
  document.getElementById('p-res-net').textContent = acFormatCurr(netCheck);
  document.getElementById('p-res-fed').textContent = acFormatCurr(checkFed);
  document.getElementById('p-res-fica').textContent = acFormatCurr(checkFica);
  document.getElementById('p-res-state').textContent = acFormatCurr(checkState);
  document.getElementById('p-res-rate').textContent = effectiveRate + '%';

  // Breakdown bar
  var netPct = grossCheck > 0 ? Math.max(0, Math.min(100, Math.round((netCheck / grossCheck) * 100))) : 0;
  var taxPct = Math.max(0, 100 - netPct);

  var barNet = document.getElementById('p-bar-net');
  var barTax = document.getElementById('p-bar-tax');
  var pctNet = document.getElementById('p-pct-net');
  var pctTax = document.getElementById('p-pct-tax');
  if (barNet && barTax && pctNet && pctTax) {
    barNet.style.width = netPct + '%';
    barTax.style.width = taxPct + '%';
    pctNet.textContent = (grossCheck > 0 ? (100 - parseFloat(effectiveRate)).toFixed(1) : 0) + '%';
    pctTax.textContent = effectiveRate + '%';
  }
}

// 5. Interactive Tool Filtering
function acFilterCards(category, btn) {
  document.querySelectorAll('.ac-finder-pill').forEach(function(p) { p.classList.remove('active'); });
  if (btn) btn.classList.add('active');

  var cards = document.querySelectorAll('#acFeaturedGrid .ac-card');
  cards.forEach(function(c) {
    if (category === 'all' || c.getAttribute('data-cat') === category) {
      c.style.display = 'flex';
    } else {
      c.style.display = 'none';
    }
  });
}

// Quick Search Live Filter
document.getElementById('acQuickSearch').addEventListener('input', function(e) {
  var term = e.target.value.toLowerCase().trim();
  var cards = document.querySelectorAll('#acFeaturedGrid .ac-card');
  cards.forEach(function(c) {
    var txt = c.textContent.toLowerCase();
    if (!term || txt.indexOf(term) !== -1) {
      c.style.display = 'flex';
    } else {
      c.style.display = 'none';
    }
  });
});

// FAQ Accordion Toggle
function acToggleFaq(trigger) {
  var card = trigger.closest('.ac-faq-card');
  var isOpen = card.classList.contains('open');
  document.querySelectorAll('.ac-faq-card').forEach(function(c) { c.classList.remove('open'); });
  if (!isOpen) {
    card.classList.add('open');
  }
}

// Initialize Calculators on Load
document.addEventListener('DOMContentLoaded', function() {
  acCalcLoan();
  acCalcGrowth();
  acCalcPaycheck();
});
</script>

<?php require_once 'includes/footer.php'; ?>
