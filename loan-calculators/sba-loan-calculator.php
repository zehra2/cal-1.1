<?php
// ─── SEO Meta & Schema Configuration ──────────────────────────────────────────
$currentYear     = date('Y');
$pageTitle       = "SBA Loan Calculator ($currentYear) — SBA 7(a) & 504 Payment Estimator";
$metaDescription = "Calculate monthly payments for SBA 7(a) and 504 small business loans. Compare 2026 interest rates, guaranty fees, amortization schedules, and down payment terms.";
$metaKeywords    = 'sba loan calculator, sba 7a loan calculator, sba 504 loan calculator, small business loan payment calculator, sba loan amortization schedule, sba loan rates 2026, prime rate today, sba guaranty fee calculator';

$schemaData = [
  '@context' => 'https://schema.org',
  '@graph' => [
    [
      '@type' => 'WebApplication',
      '@id' => 'https://americacalculator.com/loan-calculators/sba-loan-calculator#app',
      'name' => 'SBA Loan Payment & Amortization Calculator',
      'url' => 'https://americacalculator.com/loan-calculators/sba-loan-calculator',
      'applicationCategory' => 'FinanceApplication',
      'operatingSystem' => 'All',
      'browserRequirements' => 'Requires JavaScript',
      'offers' => [
        '@type' => 'Offer',
        'price' => '0',
        'priceCurrency' => 'USD'
      ],
      'description' => "Free calculation engine for SBA 7(a) and SBA 504 loans. Calculates monthly debt service, WSJ Prime rate spreads, upfront SBA guaranty fees, and 10 to 25 year amortization schedules."
    ],
    [
      '@type' => 'HowTo',
      '@id' => 'https://americacalculator.com/loan-calculators/sba-loan-calculator#howto',
      'name' => 'How to Calculate SBA Loan Payments and Debt Service',
      'step' => [
        [
          '@type' => 'HowToStep',
          'position' => 1,
          'name' => 'Select SBA Program & Loan Purpose',
          'text' => 'Choose between SBA 7(a) for general working capital, equipment, or business acquisition, or SBA 504 for owner-occupied commercial real estate.'
        ],
        [
          '@type' => 'HowToStep',
          'position' => 2,
          'name' => 'Enter Loan Principal and Down Payment',
          'text' => 'Input your net borrowing amount or total project cost minus your required equity injection (typically 10% to 20%).'
        ],
        [
          '@type' => 'HowToStep',
          'position' => 3,
          'name' => 'Set Interest Rate and Amortization Term',
          'text' => 'Enter the interest rate (such as WSJ Prime + 2.75% for 7(a) loans) and select the term length (10 years for working capital/equipment, up to 25 years for real estate).'
        ],
        [
          '@type' => 'HowToStep',
          'position' => 4,
          'name' => 'Analyze Monthly Payment, Guaranty Fees & Schedule',
          'text' => 'Review your principal and interest (P&I) monthly payment, estimated upfront guaranty fees, total interest cost, and month-by-month amortization schedule.'
        ]
      ]
    ],
    [
      '@type' => 'FAQPage',
      '@id' => 'https://americacalculator.com/loan-calculators/sba-loan-calculator#faq',
      'mainEntity' => [
        [
          '@type' => 'Question',
          'name' => "What is the current interest rate on an SBA loan in $currentYear?",
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'SBA 7(a) variable rates are pegged to the Wall Street Journal Prime Rate plus a lender spread capped by the SBA. With the Prime Rate at 8.50%, most SBA 7(a) loans are priced between 10.75% and 11.25% APR (Prime + 2.25% to 2.75%). SBA 504 loans offer fixed rates tied to 10-year and 20-year U.S. Treasury debentures, typically ranging from 5.50% to 6.75%.'
          ]
        ],
        [
          '@type' => 'Question',
          'name' => 'SBA 7(a) vs SBA 504: Which loan program is cheaper?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'For purchasing owner-occupied commercial real estate or heavy equipment over $500,000, the SBA 504 program is generally cheaper because 40% of the project is locked into a low, long-term fixed interest rate through a Certified Development Company (CDC). SBA 7(a) loans are more flexible for working capital and inventory but typically carry higher, variable interest rates.'
          ]
        ],
        [
          '@type' => 'Question',
          'name' => 'How is an SBA loan payment calculated?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'SBA loan payments are calculated using standard banking amortization formulas: M = P[r(1+r)^n] / [(1+r)^n - 1], where P is loan principal, r is the monthly interest rate, and n is total months. If the upfront SBA guaranty fee is financed into the loan, it is added to the principal balance before computing payments.'
          ]
        ],
        [
          '@type' => 'Question',
          'name' => 'What credit score is required to qualify for an SBA loan?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'Most SBA preferred lenders require a minimum personal credit score of 650 to 680 for SBA 7(a) loans and 680+ for SBA 504 loans. For SBA 7(a) Small Loans under $500,000, lenders also prescreen using the FICO Small Business Scoring Service (SBSS), requiring a minimum score of 155.'
          ]
        ],
        [
          '@type' => 'Question',
          'name' => 'How much down payment or equity injection is required for an SBA loan?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'Most SBA loans require a minimum equity injection of 10%. However, business acquisitions, partner buyouts, startup ventures, or special-use commercial properties (like hotels, gas stations, or car washes) generally require 15% to 20% down.'
          ]
        ],
        [
          '@type' => 'Question',
          'name' => 'What are SBA loan guaranty fees and how much do they cost?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'The SBA charges an upfront guaranty fee based on the guaranteed portion of the loan. For loans up to $150,000, the fee is 0% to 2%. For loans $150,001 to $700,000, the fee is 3.00% of the guaranteed portion. For loans over $700,000 up to $5,000,000, the fee is 3.50% to 3.75%. Most borrowers choose to finance this fee into their loan balance.'
          ]
        ],
        [
          '@type' => 'Question',
          'name' => 'Do SBA loans have prepayment penalties?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'SBA 7(a) loans with terms under 15 years (such as 7 to 10 year working capital and equipment loans) have zero prepayment penalties. Loans with terms of 15 years or longer (real estate) follow the SBA 5-3-1 rule: a 5% fee in year 1, 3% in year 2, 1% in year 3, and no penalty after year 3.'
          ]
        ],
        [
          '@type' => 'Question',
          'name' => 'What Debt Service Coverage Ratio (DSCR) do SBA lenders look for?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text' => 'SBA lenders require a minimum Debt Service Coverage Ratio (DSCR) of 1.15x to 1.25x. This means your business net operating cash flow must be at least 115% to 125% of all annual debt obligations (principal + interest).'
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
          'name' => 'Loan Calculators',
          'item' => 'https://americacalculator.com/loan-calculators/'
        ],
        [
          '@type' => 'ListItem',
          'position' => 3,
          'name' => 'SBA Loan Calculator',
          'item' => 'https://americacalculator.com/loan-calculators/sba-loan-calculator'
        ]
      ]
    ]
  ]
];

require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
/* ============================================================
   EXECUTIVE INSTITUTIONAL PAGE LAYOUT & STYLES
============================================================ */
body { background: #f8fafc; color: #1e293b; }

.sba-page-wrap {
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
  background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
  color: #ffffff;
  padding: 1rem 1.25rem;
  font-weight: 700;
  font-size: 0.82rem;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}
.toc-list {
  list-style: none;
  padding: 0.6rem 0;
  margin: 0;
}
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
  color: #2563eb;
  background: #eff6ff;
  border-left-color: #2563eb;
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
.toc-related-list li a:hover { color: #2563eb; }

/* Main Content Area */
.main-content { min-width: 0; }

/* Hero */
.page-hero { margin-bottom: 2rem; }
.page-hero .breadcrumb { font-size: 0.82rem; color: #64748b; margin-bottom: 0.75rem; }
.page-hero .breadcrumb a { color: #64748b; text-decoration: none; }
.page-hero .breadcrumb a:hover { color: #2563eb; }
.page-hero h1 { font-size: 2.15rem; color: #0f172a; margin: 0 0 0.75rem; line-height: 1.25; font-weight: 850; letter-spacing: -0.02em; }
.page-hero .hero-meta { display: flex; flex-wrap: wrap; gap: 14px; font-size: 0.82rem; color: #64748b; margin-bottom: 1rem; align-items: center; }
.page-hero .hero-meta span { display: inline-flex; align-items: center; gap: 5px; }
.page-hero .hero-desc {
  font-size: 1.02rem;
  color: #334155;
  line-height: 1.7;
  margin: 0;
  background: #ffffff;
  border-left: 4px solid #2563eb;
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
.calc-inner {
  display: grid;
  grid-template-columns: 1fr 1fr;
}
.calc-form-panel {
  padding: 2rem;
  border-right: 1px solid #e2e8f0;
  background: #ffffff;
}
.calc-results-panel {
  padding: 2rem;
  background: linear-gradient(170deg, #f8fafc 0%, #f1f5f9 100%);
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

/* Form Controls */
.form-field { margin-bottom: 1.25rem; }
.form-field label {
  display: flex;
  justify-content: space-between;
  font-weight: 650;
  font-size: 0.88rem;
  color: #1e293b;
  margin-bottom: 0.4rem;
}
.form-field label span.hint-badge { font-weight: normal; font-size: 0.78rem; color: #64748b; }
.input-with-affix {
  position: relative;
  display: flex;
  align-items: center;
}
.input-affix-left {
  position: absolute;
  left: 14px;
  font-weight: 600;
  color: #64748b;
  font-size: 0.95rem;
  pointer-events: none;
}
.input-affix-right {
  position: absolute;
  right: 14px;
  font-weight: 600;
  color: #64748b;
  font-size: 0.95rem;
  pointer-events: none;
}
.form-field input, .form-field select {
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
.form-field input.has-left { padding-left: 28px; }
.form-field input.has-right { padding-right: 32px; }
.form-field input:focus, .form-field select:focus {
  border-color: #2563eb;
  box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
}
.form-field .field-hint { font-size: 0.78rem; color: #64748b; margin-top: 0.35rem; line-height: 1.4; }

/* Program Selector Tabs */
.program-tabs {
  display: flex;
  background: #e2e8f0;
  border-radius: 9px;
  padding: 4px;
  margin-bottom: 1.35rem;
  gap: 4px;
}
.program-tab {
  flex: 1;
  padding: 9px 12px;
  border: none;
  background: transparent;
  border-radius: 7px;
  font-size: 0.86rem;
  font-weight: 650;
  color: #475569;
  cursor: pointer;
  transition: all 0.15s ease;
  text-align: center;
}
.program-tab.active {
  background: #ffffff;
  color: #0f172a;
  box-shadow: 0 1px 3px rgba(0,0,0,0.08);
}

.btn-calc {
  width: 100%;
  background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
  color: #ffffff;
  padding: 14px;
  border: none;
  border-radius: 9px;
  font-size: 1rem;
  font-weight: 700;
  cursor: pointer;
  margin-top: 0.5rem;
  transition: all 0.15s ease;
  box-shadow: 0 2px 6px rgba(37, 99, 235, 0.25);
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
.primary-result-value { font-size: 2.2rem; font-weight: 900; color: #2563eb; margin: 4px 0 2px; line-height: 1.1; }
.primary-result-note { font-size: 0.78rem; color: #64748b; }

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

/* Visual Split Bar */
.bar-wrap { margin-bottom: 1.25rem; }
.bar-track {
  height: 10px;
  background: #e2e8f0;
  border-radius: 999px;
  overflow: hidden;
  display: flex;
}
.bar-p { background: #2563eb; height: 100%; transition: width 0.3s; }
.bar-i { background: #f59e0b; height: 100%; transition: width 0.3s; }
.bar-legend {
  display: flex;
  justify-content: space-between;
  font-size: 0.78rem;
  color: #475569;
  margin-top: 6px;
  font-weight: 600;
}
.legend-dot { display: inline-block; width: 8px; height: 8px; border-radius: 50%; margin-right: 5px; }

/* Amortization Table Accordion */
.amort-toggle-wrap { margin-top: 0.5rem; }
.btn-amort-toggle {
  width: 100%;
  background: #ffffff;
  border: 1.5px solid #cbd5e1;
  padding: 10px 14px;
  border-radius: 8px;
  font-size: 0.88rem;
  font-weight: 700;
  color: #1e293b;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: space-between;
  transition: all 0.15s ease;
}
.btn-amort-toggle:hover { border-color: #2563eb; color: #2563eb; }
.amort-table-wrap {
  display: none;
  margin-top: 1rem;
  max-height: 380px;
  overflow-y: auto;
  border: 1px solid #e2e8f0;
  border-radius: 10px;
  background: #ffffff;
}
.amort-table-wrap.open { display: block; }
.amort-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 0.82rem;
  text-align: right;
}
.amort-table th {
  background: #0f172a;
  color: #ffffff;
  padding: 9px 12px;
  font-weight: 650;
  position: sticky;
  top: 0;
}
.amort-table td {
  padding: 8px 12px;
  border-bottom: 1px solid #f1f5f9;
  color: #334155;
}
.amort-table tr:nth-child(even) td { background: #f8fafc; }
.amort-table td:first-child, .amort-table th:first-child { text-align: center; }

/* Editorial Content Sections */
.content-section {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: 14px;
  padding: 2rem;
  margin-bottom: 2rem;
  box-shadow: 0 1px 3px rgba(0,0,0,0.02);
}
.content-section h2 {
  font-size: 1.5rem;
  color: #0f172a;
  margin: 0 0 1rem;
  font-weight: 800;
  letter-spacing: -0.01em;
}
.content-section h3 {
  font-size: 1.15rem;
  color: #1e293b;
  margin: 1.5rem 0 0.6rem;
  font-weight: 750;
}
.content-section p {
  color: #475569;
  line-height: 1.75;
  font-size: 0.96rem;
  margin: 0 0 1rem;
}
.content-section p:last-child { margin-bottom: 0; }
.content-section ul, .content-section ol {
  color: #475569;
  line-height: 1.75;
  font-size: 0.96rem;
  margin: 0 0 1.25rem;
  padding-left: 1.4rem;
}
.content-section li { margin-bottom: 0.4rem; }

/* Clean Data Tables */
.data-table {
  width: 100%;
  border-collapse: collapse;
  border-radius: 10px;
  overflow: hidden;
  border: 1px solid #e2e8f0;
  margin: 1.25rem 0;
  font-size: 0.88rem;
}
.data-table th {
  background: #0f172a;
  color: #ffffff;
  padding: 12px 14px;
  text-align: left;
  font-weight: 700;
}
.data-table td {
  padding: 11px 14px;
  border-bottom: 1px solid #f1f5f9;
  color: #334155;
}
.data-table tr:last-child td { border-bottom: none; }
.data-table tr:nth-child(even) td { background: #f8fafc; }
.data-table .val-highlight { color: #2563eb; font-weight: 700; }
.data-table .val-green { color: #16a34a; font-weight: 700; }

/* Callout Boxes */
.info-box {
  background: #eff6ff;
  border-left: 4px solid #2563eb;
  border-radius: 0 10px 10px 0;
  padding: 1.1rem 1.25rem;
  margin: 1.25rem 0;
  font-size: 0.94rem;
  color: #1e3a8a;
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

/* Step-by-Step List */
.step-list {
  list-style: none;
  padding: 0;
  margin: 1.25rem 0;
  counter-reset: step-counter;
}
.step-list li {
  position: relative;
  padding-left: 3.2rem;
  margin-bottom: 1.5rem;
  counter-increment: step-counter;
}
.step-list li::before {
  content: counter(step-counter);
  position: absolute;
  left: 0; top: 0;
  width: 34px; height: 34px;
  background: #2563eb;
  color: #ffffff;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 750;
  font-size: 0.92rem;
}
.step-list li strong { color: #0f172a; display: block; margin-bottom: 0.25rem; font-size: 1rem; }
.step-list li p { color: #475569; margin: 0; }

/* FAQ Accordion */
.faq-list { margin-top: 1rem; }
.faq-card {
  border: 1px solid #e2e8f0;
  border-radius: 10px;
  margin-bottom: 0.75rem;
  overflow: hidden;
  background: #ffffff;
}
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
  transition: background 0.15s ease;
}
.faq-trigger:hover { background: #f8fafc; }
.faq-icon {
  width: 18px;
  height: 18px;
  color: #2563eb;
  transition: transform 0.2s ease;
  flex-shrink: 0;
}
.faq-card.open .faq-icon { transform: rotate(180deg); }
.faq-card.open .faq-trigger { background: #eff6ff; color: #1e3a8a; }
.faq-answer {
  display: none;
  padding: 14px 18px 18px;
  color: #475569;
  line-height: 1.7;
  font-size: 0.94rem;
  border-top: 1px solid #e2e8f0;
}
.faq-card.open .faq-answer { display: block; }

/* Right Sidebar */
.right-sidebar {
  position: sticky;
  top: 5.5rem;
  display: flex;
  flex-direction: column;
  gap: 1.25rem;
}
.sidebar-widget {
  background: #ffffff;
  border-radius: 12px;
  border: 1px solid #e2e8f0;
  box-shadow: 0 1px 4px rgba(0,0,0,0.03);
  overflow: hidden;
}
.sidebar-widget-header {
  background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
  color: #ffffff;
  padding: 1rem 1.25rem;
}
.sidebar-widget-title { font-size: 0.95rem; font-weight: 750; margin: 0; }
.sidebar-widget-sub { font-size: 0.78rem; color: #94a3b8; margin-top: 2px; }
.sidebar-widget-body { padding: 0.75rem 0; }
.sidebar-rate-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.65rem 1.25rem;
  border-bottom: 1px solid #f8fafc;
}
.sidebar-rate-row:last-child { border-bottom: none; }
.sidebar-rate-lbl { font-size: 0.82rem; font-weight: 650; color: #334155; }
.sidebar-rate-sub { font-size: 0.72rem; color: #94a3b8; }
.sidebar-rate-val { font-size: 1.05rem; font-weight: 800; color: #2563eb; }

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
.sidebar-links-list li a:hover, .sidebar-links-list li a.active {
  color: #2563eb;
  background: #eff6ff;
  font-weight: 650;
}

/* Responsive Breakpoints */
@media (max-width: 1100px) {
  .sba-page-wrap { grid-template-columns: 1fr 260px; }
  .toc-sidebar { display: none; }
}
@media (max-width: 840px) {
  .sba-page-wrap { grid-template-columns: 1fr; }
  .calc-inner { grid-template-columns: 1fr; }
  .calc-form-panel { border-right: none; border-bottom: 1px solid #e2e8f0; }
  .right-sidebar { display: none; }
  .page-hero h1 { font-size: 1.75rem; }
  .result-boxes { grid-template-columns: 1fr; }
}
</style>

<main id="main-content">
<div class="sba-page-wrap">

  <!-- ══════════════════════════════════════════════════════════════════════
       LEFT TOC SIDEBAR
       ══════════════════════════════════════════════════════════════════════ -->
  <nav class="toc-sidebar" aria-label="Page Table of Contents">
    <div class="toc-sidebar-header">Table of Contents</div>
    <ul class="toc-list">
      <li><a href="#calculator-engine" class="toc-active">SBA Calculator</a></li>
      <li><a href="#rates-benchmark">2026 SBA Benchmark Rates</a></li>
      <li><a href="#how-to-use">How to Calculate Payments</a></li>
      <li><a href="#formula-explained">Amortization Formula</a></li>
      <li><a href="#worked-example">Worked $250K Example</a></li>
      <li><a href="#program-comparison">SBA 7(a) vs. SBA 504</a></li>
      <li><a href="#underwriting-criteria">Underwriting &amp; DSCR</a></li>
      <li><a href="#guaranty-fees">SBA Guaranty Fees</a></li>
      <li><a href="#down-payment">Down Payment Terms</a></li>
      <li><a href="#application-steps">How to Apply &amp; Fast-Track</a></li>
      <li><a href="#prepayment-rules">5-3-1 Prepayment Rules</a></li>
      <li><a href="#faq">Frequently Asked Questions</a></li>
    </ul>
    <div class="toc-divider"></div>
    <div class="toc-related-label">Related Loan Calculators</div>
    <ul class="toc-related-list">
      <li><a href="/loan-calculators/sba-loan-payment-calculator">SBA Payment Calculator &rarr;</a></li>
      <li><a href="/loan-calculators/business-loan-calculator">Commercial Business Loan &rarr;</a></li>
      <li><a href="/loan-calculators/equipment-loan-calculator">Equipment Financing &rarr;</a></li>
      <li><a href="/loan-calculators/debt-to-income-calculator">Debt-to-Income (DTI) &rarr;</a></li>
      <li><a href="/real-estate/dscr-calculator">DSCR Coverage Ratio &rarr;</a></li>
    </ul>
  </nav>

  <!-- ══════════════════════════════════════════════════════════════════════
       MAIN EDITORIAL & CALCULATOR CONTENT
       ══════════════════════════════════════════════════════════════════════ -->
  <div class="main-content">

    <!-- Page Hero -->
    <header class="page-hero">
      <div class="breadcrumb">
        <a href="/">Home</a> &rsaquo; <a href="/loan-calculators/">Loan Calculators</a> &rsaquo; <span>SBA Loan Calculator</span>
      </div>
      <h1>SBA Loan Calculator (<?php echo $currentYear; ?>) &mdash; SBA 7(a) &amp; 504 Payment Estimator</h1>
      <div class="hero-meta">
        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 14 14"/></svg> Audited for <?php echo $currentYear; ?> WSJ Prime Rate (8.50%)</span>
        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> SOP 50 10 7.1 Compliant</span>
        <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/></svg> Updated September <?php echo $currentYear; ?></span>
      </div>
      <p class="hero-desc">
        Calculate your exact monthly principal and interest debt service, upfront SBA guaranty fees, and total interest obligations for <strong>SBA 7(a)</strong> and <strong>SBA 504</strong> small business loans. Based on today's Wall Street Journal Prime Rate of <strong>8.50%</strong>, standard 7(a) variable loans are priced between <strong>10.75% and 11.25% APR</strong>, while 504 CDC fixed debentures range from <strong>5.50% to 6.75%</strong>.
      </p>
    </header>

    <!-- Interactive Calculator Engine Card -->
    <div class="calc-card" id="calculator-engine">
      <div class="calc-inner">

        <!-- Form Panel -->
        <div class="calc-form-panel">
          <div class="program-tabs" role="tablist">
            <button class="program-tab active" id="tab-7a" onclick="switchProgram('7a')">SBA 7(a) General</button>
            <button class="program-tab" id="tab-504" onclick="switchProgram('504')">SBA 504 Real Estate</button>
          </div>

          <div class="form-field">
            <label for="loan_amount">
              <span>Loan / Project Amount ($)</span>
              <span class="hint-badge" id="amount-badge">Max: $5,000,000</span>
            </label>
            <div class="input-with-affix">
              <span class="input-affix-left">$</span>
              <input type="number" id="loan_amount" class="has-left" value="350000" step="10000" min="5000" max="5500000">
            </div>
            <div class="field-hint">Net borrowing amount needed for capital, equipment, or acquisition.</div>
          </div>

          <div class="form-field">
            <label for="interest_rate">
              <span>Annual Interest Rate (%)</span>
              <span class="hint-badge" id="rate-badge">Prime + 2.75% = 11.25%</span>
            </label>
            <div class="input-with-affix">
              <input type="number" id="interest_rate" class="has-right" value="11.25" step="0.125" min="1" max="25">
              <span class="input-affix-right">%</span>
            </div>
            <div class="field-hint">Benchmark: Prime (8.50%) + allowable lender spread (2.25%&ndash;2.75%).</div>
          </div>

          <div class="form-field">
            <label for="loan_term">
              <span>Repayment Term</span>
              <span class="hint-badge" id="term-badge">Standard: 10 Years</span>
            </label>
            <select id="loan_term">
              <option value="25">25 Years (300 Months) — Commercial Real Estate</option>
              <option value="15">15 Years (180 Months) — Facilities &amp; Large Real Estate</option>
              <option value="10" selected>10 Years (120 Months) — Equipment &amp; Working Capital</option>
              <option value="7">7 Years (84 Months) — Working Capital &amp; Inventory</option>
              <option value="5">5 Years (60 Months) — Short-Term Equipment</option>
            </select>
          </div>

          <div class="form-field">
            <label for="finance_fee">
              <span>Upfront SBA Guaranty Fee</span>
            </label>
            <select id="finance_fee">
              <option value="finance" selected>Roll Fee into Loan Principal (Financed)</option>
              <option value="cash">Pay Guaranty Fee Cash at Closing</option>
              <option value="waive">Fee Waived (Under $150K / Veteran Benefit)</option>
            </select>
          </div>

          <button type="button" class="btn-calc" id="btn-recalculate" onclick="calculateSBA()">Recalculate Debt Service</button>
        </div>

        <!-- Results Panel -->
        <div class="calc-results-panel">
          <div>
            <div class="results-heading">Estimated Debt Service</div>
            <div class="results-sub" id="results-sub-label">Based on $350,000 at 11.25% over 10 years</div>

            <div class="primary-result-card">
              <div class="primary-result-label">Monthly Payment (P&amp;I)</div>
              <div class="primary-result-value" id="res-monthly">$5,001</div>
              <div class="primary-result-note" id="res-guaranty-note">Includes ~$9,450 financed SBA guaranty fee</div>
            </div>

            <div class="result-boxes">
              <div class="res-box">
                <span class="res-val" id="res-principal">$359,450</span>
                <span class="res-lbl">Total Financed</span>
              </div>
              <div class="res-box">
                <span class="res-val" id="res-interest" style="color:#d97706;">$240,670</span>
                <span class="res-lbl">Total Interest</span>
              </div>
              <div class="res-box">
                <span class="res-val" id="res-total">$600,120</span>
                <span class="res-lbl">Total Repayment</span>
              </div>
              <div class="res-box">
                <span class="res-val" id="res-dscr-need" style="color:#2563eb;">$6,251/mo</span>
                <span class="res-lbl">1.25x DSCR Target</span>
              </div>
            </div>

            <div class="bar-wrap">
              <div class="bar-track">
                <div class="bar-p" id="bar-p" style="width: 60%;"></div>
                <div class="bar-i" id="bar-i" style="width: 40%;"></div>
              </div>
              <div class="bar-legend">
                <span><span class="legend-dot" style="background:#2563eb;"></span>Principal: <strong id="pct-p">60%</strong></span>
                <span><span class="legend-dot" style="background:#f59e0b;"></span>Interest: <strong id="pct-i">40%</strong></span>
              </div>
            </div>
          </div>

          <div class="amort-toggle-wrap">
            <button type="button" class="btn-amort-toggle" id="amort-toggle" onclick="toggleAmortization()">
              <span id="amort-toggle-text">📊 View Full Month-by-Month Amortization Schedule</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="amort-table-wrap" id="amort-table-wrap">
              <table class="amort-table">
                <thead>
                  <tr>
                    <th>Mo.</th>
                    <th>Payment</th>
                    <th>Principal</th>
                    <th>Interest</th>
                    <th>Remaining Balance</th>
                  </tr>
                </thead>
                <tbody id="amort-tbody">
                  <!-- Dynamically populated via JS -->
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Section 1: Benchmark Rates -->
    <section class="content-section" id="rates-benchmark">
      <h2>Current SBA Loan Interest Rates (<?php echo $currentYear; ?>)</h2>
      <p>
        The Small Business Administration does not lend money directly to small business owners; rather, it provides a federal credit guarantee (typically 50% to 85%) to participating commercial banks, credit unions, and non-bank lenders. In exchange for the government guaranty, the SBA caps the maximum interest rates lenders can charge.
      </p>
      <p>
        Most <strong>SBA 7(a) variable loans</strong> are pegged directly to the <strong>Wall Street Journal Prime Rate</strong> (currently <strong>8.50%</strong>), plus a negotiated lender spread. <strong>SBA 504 loans</strong> feature fixed debenture pricing pegged directly to long-term U.S. Treasury yields.
      </p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Loan Program</th>
            <th>Rate Type</th>
            <th>Current Rate Benchmark (<?php echo $currentYear; ?>)</th>
            <th>Maximum Allowable Term</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>SBA 7(a) &mdash; Variable</strong></td>
            <td>Floating (WSJ Prime)</td>
            <td class="val-highlight">Prime + 2.25% to 2.75% (10.75% &ndash; 11.25%)</td>
            <td>25 Years (Real Estate) / 10 Yrs (Capital)</td>
          </tr>
          <tr>
            <td><strong>SBA 7(a) &mdash; Fixed</strong></td>
            <td>Fixed for Life</td>
            <td>9.50% &ndash; 12.25%</td>
            <td>25 Years</td>
          </tr>
          <tr>
            <td><strong>SBA 504 &mdash; CDC Debenture</strong></td>
            <td>Fixed (10-Yr / 20-Yr Treasury)</td>
            <td class="val-green">5.50% &ndash; 6.75% Fixed</td>
            <td>20 &ndash; 25 Years</td>
          </tr>
          <tr>
            <td><strong>SBA Express (Up to $500K)</strong></td>
            <td>Floating (WSJ Prime)</td>
            <td>Prime + up to 6.50% (13.50% &ndash; 15.00%)</td>
            <td>7 &ndash; 10 Years</td>
          </tr>
          <tr>
            <td><strong>SBA Microloan (Up to $50K)</strong></td>
            <td>Fixed</td>
            <td>8.00% &ndash; 13.00%</td>
            <td>6 Years</td>
          </tr>
        </tbody>
      </table>

      <div class="info-box">
        💡 <strong>Tiered Rate Spreads:</strong> Under SBA SOP 50 10 7.1, larger loans receive lower allowable maximum spreads. Loans over $250,000 are capped at Prime + 2.25% for terms under 7 years and Prime + 2.75% for terms 7+ years. Loans under $50,000 allow spreads up to Prime + 4.75%.
      </div>
    </section>

    <!-- Section 2: How to Calculate -->
    <section class="content-section" id="how-to-use">
      <h2>How to Calculate SBA Loan Payments</h2>
      <p>
        Determining your exact business debt service obligations requires evaluating three components: your net loan principal, the prevailing annual interest rate, and the loan amortization horizon. Follow these four steps:
      </p>

      <ol class="step-list">
        <li>
          <strong>Determine Total Project Cost and Required Equity Injection</strong>
          <p>Calculate your total capital requirement (e.g. $400,000 for equipment purchase). Deduct your required 10% to 20% borrower equity injection ($40,000 to $80,000) to arrive at the net borrowing amount ($320,000 to $360,000).</p>
        </li>
        <li>
          <strong>Identify the Applicable SBA Program Term</strong>
          <p>Working capital, software, and inventory loans carry a statutory maximum term of 7 to 10 years. Equipment loans can match the useful life of the machinery (up to 10–15 years). Commercial real estate purchases qualify for up to 25-year fully amortizing terms.</p>
        </li>
        <li>
          <strong>Incorporate the Upfront SBA Guaranty Fee</strong>
          <p>Determine whether you will pay the SBA guaranty fee in cash out of pocket at closing or roll it directly into your loan principal. Financing the fee increases your monthly payment slightly but conserves working capital.</p>
        </li>
        <li>
          <strong>Evaluate Cash Flow Against Required DSCR Coverage</strong>
          <p>Divide your business's monthly Net Operating Income (NOI) or EBITDA by your estimated monthly debt service. Ensure your Debt Service Coverage Ratio meets or exceeds the lender's 1.15x to 1.25x minimum requirement.</p>
        </li>
      </ol>
    </section>

    <!-- Section 3: Formula -->
    <section class="content-section" id="formula-explained">
      <h2>SBA Loan Payment Formula Explained</h2>
      <p>
        SBA 7(a) and 504 loans use the standard banking fully amortizing payment formula. There is no balloon payment at the end of the term; every payment reduces the principal balance until it reaches exactly zero:
      </p>

      <div style="background:#0f172a;color:#f8fafc;padding:1.25rem 1.5rem;border-radius:10px;font-family:monospace;font-size:1.05rem;margin:1.25rem 0;line-height:1.6;">
        M = P &times; [ r(1 + r)<sup>n</sup> ] / [ (1 + r)<sup>n</sup> &minus; 1 ]
      </div>

      <p>Where:</p>
      <ul>
        <li><strong>M</strong> = Total monthly principal and interest payment</li>
        <li><strong>P</strong> = Total loan principal balance (including any financed SBA guaranty fee)</li>
        <li><strong>r</strong> = Periodic monthly interest rate (Annual Nominal Rate &divide; 12 &divide; 100)</li>
        <li><strong>n</strong> = Total number of monthly repayment periods (Years &times; 12)</li>
      </ul>

      <p>
        Because interest compounds monthly on the remaining balance, the proportion of your payment allocated to interest is highest in the first year and gradually decreases over the loan term as principal is repaid.
      </p>
    </section>

    <!-- Section 4: Worked Example -->
    <section class="content-section" id="worked-example">
      <h2>Worked Example: $250,000 SBA 7(a) Loan at 11.25% for 10 Years</h2>
      <p>
        Consider a commercial manufacturing firm borrowing <strong>$250,000</strong> to acquire industrial tooling and fund working capital expansion under the SBA 7(a) program.
      </p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Input Parameter</th>
            <th>Formula Variable</th>
            <th>Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Base Borrowing Amount</td>
            <td>Base P</td>
            <td>$250,000.00</td>
          </tr>
          <tr>
            <td>SBA Guaranty Fee (3.00% on 75% guarantee, financed)</td>
            <td>Fee Addition</td>
            <td>+$5,625.00</td>
          </tr>
          <tr>
            <td><strong>Total Financed Loan Principal</strong></td>
            <td><strong>P</strong></td>
            <td class="val-highlight"><strong>$255,625.00</strong></td>
          </tr>
          <tr>
            <td>Annual Interest Rate (Prime 8.50% + 2.75%)</td>
            <td>Rate</td>
            <td>11.25% APR</td>
          </tr>
          <tr>
            <td>Monthly Periodic Rate (11.25% &divide; 12)</td>
            <td>r</td>
            <td>0.009375</td>
          </tr>
          <tr>
            <td>Repayment Horizon (10 Years &times; 12)</td>
            <td>n</td>
            <td>120 Months</td>
          </tr>
          <tr>
            <td><strong>Monthly Debt Service (P&amp;I)</strong></td>
            <td><strong>M</strong></td>
            <td class="val-highlight"><strong>$3,557.48 / month</strong></td>
          </tr>
          <tr>
            <td>Total Cumulative Interest Paid</td>
            <td>Total Interest</td>
            <td>$171,272.60</td>
          </tr>
          <tr>
            <td>Total Cost of Loan</td>
            <td>Total Outflow</td>
            <td>$426,897.60</td>
          </tr>
        </tbody>
      </table>

      <h3>Term Length Comparison on a $250,000 Loan</h3>
      <p>
        Selecting a longer amortization term lowers your monthly cash flow requirement but substantially increases overall interest paid:
      </p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Loan Term</th>
            <th>Monthly Payment</th>
            <th>Total Interest Paid</th>
            <th>Total Repayment</th>
            <th>Primary Eligible Use</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>5 Years (60 Mo.)</strong></td>
            <td>$5,573 / mo</td>
            <td>$78,740</td>
            <td>$334,365</td>
            <td>Short-Term Vehicles &amp; Technology</td>
          </tr>
          <tr>
            <td><strong>7 Years (84 Mo.)</strong></td>
            <td>$4,375 / mo</td>
            <td>$111,875</td>
            <td>$367,500</td>
            <td>Working Capital &amp; Inventory</td>
          </tr>
          <tr>
            <td><strong>10 Years (120 Mo.)</strong></td>
            <td>$3,557 / mo</td>
            <td>$171,273</td>
            <td>$426,898</td>
            <td>General Machinery &amp; Acquisitions</td>
          </tr>
          <tr>
            <td><strong>25 Years (300 Mo.)</strong></td>
            <td>$2,534 / mo</td>
            <td>$504,575</td>
            <td>$760,200</td>
            <td>Owner-Occupied Real Estate</td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- Section 5: SBA 7(a) vs. 504 -->
    <section class="content-section" id="program-comparison">
      <h2>SBA 7(a) vs. SBA 504 Loans: Which Is Right for You?</h2>
      <p>
        The two flagship borrowing programs cater to distinctly different business objectives. Understanding the structural differences allows you to secure the most favorable cost of capital:
      </p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Feature</th>
            <th>SBA 7(a) Loan Program</th>
            <th>SBA 504 Loan Program</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Primary Purpose</strong></td>
            <td>Working capital, inventory, equipment, business buyouts, debt refinance</td>
            <td>Owner-occupied real estate, construction, heavy long-life machinery</td>
          </tr>
          <tr>
            <td><strong>Maximum Borrowing Limit</strong></td>
            <td>$5,000,000</td>
            <td>$5,500,000 ($16.5M for green energy / manufacturing)</td>
          </tr>
          <tr>
            <td><strong>Loan Structure</strong></td>
            <td>Single loan from commercial bank (up to 85% SBA guaranteed)</td>
            <td>50% Bank 1st lien + 40% CDC 2nd debenture + 10% Borrower Equity</td>
          </tr>
          <tr>
            <td><strong>Interest Rate Structure</strong></td>
            <td>Primarily Variable (WSJ Prime + 2.25%&ndash;2.75%)</td>
            <td>Fixed long-term rate on CDC debenture (5.50%&ndash;6.75%)</td>
          </tr>
          <tr>
            <td><strong>Maximum Term Length</strong></td>
            <td>10 Years (Working Capital) / 25 Years (Real Estate)</td>
            <td>10 Years (Equipment) / 20 or 25 Years (Real Estate)</td>
          </tr>
          <tr>
            <td><strong>Borrower Down Payment</strong></td>
            <td>10% &ndash; 20% Equity Injection</td>
            <td>10% Standard (15% for startups or special-use buildings)</td>
          </tr>
          <tr>
            <td><strong>Job Creation Mandate</strong></td>
            <td>None required</td>
            <td>Must create or retain 1 job per $90,000 financed</td>
          </tr>
        </tbody>
      </table>

      <p>
        If your financing objective is to purchase a commercial building, explore our companion <a href="/real-estate/dscr-calculator" style="color:#2563eb;font-weight:600;">DSCR Calculator</a> and <a href="/real-estate/cap-rate-calculator" style="color:#2563eb;font-weight:600;">Cap Rate Calculator</a> to evaluate real estate performance.
      </p>
    </section>

    <!-- Section 6: Underwriting & Qualifications -->
    <section class="content-section" id="underwriting-criteria">
      <h2>Underwriting Standards &amp; DSCR Requirements</h2>
      <p>
        To secure approval from an SBA Preferred Lender, your business must demonstrate historical and projected debt service capacity alongside strong personal credit metrics:
      </p>

      <h3>1. Debt Service Coverage Ratio (DSCR &ge; 1.15x &ndash; 1.25x)</h3>
      <p>
        The core qualification benchmark for any commercial loan is the <strong>Debt Service Coverage Ratio</strong>. Lenders divide your annual Net Operating Income (or EBITDA) by total proposed annual principal and interest payments:
      </p>
      <div style="background:#f8fafc;border:1px solid #e2e8f0;padding:12px 16px;border-radius:8px;font-family:monospace;margin-bottom:12px;">
        DSCR = Annual Net Operating Income (NOI) / Total Annual Debt Service
      </div>
      <p>
        An annual debt service of $60,000 requires at least $75,000 in annual net cash flow to achieve a 1.25x DSCR buffer.
      </p>

      <h3>2. FICO SBSS Score (&ge; 155)</h3>
      <p>
        For SBA 7(a) Small Loans ($500,000 or less), lenders run the <strong>FICO Small Business Scoring Service (SBSS)</strong> model. The SBA statutory minimum score is 155, though most tier-one lenders prefer a score of 165 or higher for automatic pre-approval.
      </p>

      <h3>3. Personal FICO &amp; Guarantees</h3>
      <ul>
        <li><strong>Personal Credit Score:</strong> Minimum 650 personal FICO (680+ strongly preferred for prime rate pricing).</li>
        <li><strong>Unlimited Personal Guarantee:</strong> Every individual owning 20% or more of the business must provide an unconditional personal guarantee.</li>
        <li><strong>Time in Business:</strong> 2+ years of operating history with positive tax returns (startups can qualify under SBA Express with strong collateral).</li>
      </ul>
    </section>

    <!-- Section 7: Guaranty Fees -->
    <section class="content-section" id="guaranty-fees">
      <h2>SBA Guaranty Fees (2026 Statutory Tiers)</h2>
      <p>
        The SBA assesses an upfront guaranty fee on the guaranteed portion of 7(a) loans to offset program costs to taxpayers. The fee scale under current SOP 50 10 7.1 guidelines is:
      </p>

      <table class="data-table">
        <thead>
          <tr>
            <th>Gross Loan Amount</th>
            <th>SBA Guarantee %</th>
            <th>Upfront Guaranty Fee Rate</th>
            <th>Estimated Fee Range</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>$1 to $150,000</strong></td>
            <td>85%</td>
            <td class="val-green">0.00% (Fee Waived)</td>
            <td>$0</td>
          </tr>
          <tr>
            <td><strong>$150,001 to $700,000</strong></td>
            <td>75%</td>
            <td class="val-highlight">3.00% of Guaranteed Portion</td>
            <td>$3,375 &ndash; $15,750</td>
          </tr>
          <tr>
            <td><strong>$700,001 to $5,000,000</strong></td>
            <td>75%</td>
            <td class="val-highlight">3.50% on first $1M + 3.75% on remainder</td>
            <td>$26,250 &ndash; $138,750</td>
          </tr>
          <tr>
            <td><strong>SBA Express (Up to $500K)</strong></td>
            <td>50%</td>
            <td class="val-green">0.00% (Standard Waived)</td>
            <td>$0</td>
          </tr>
        </tbody>
      </table>

      <div class="info-box">
        💼 <strong>Financing Your Fee:</strong> Over 90% of borrowers choose to roll the guaranty fee into the loan principal. For example, on a $500,000 loan with an $11,250 fee, the total amount financed becomes $511,250, increasing the monthly payment by approximately $155/month on a 10-year term while keeping $11,250 in cash in your operating account.
      </div>
    </section>

    <!-- Section 8: Down Payment Requirements -->
    <section class="content-section" id="down-payment">
      <h2>Down Payment &amp; Equity Injection Requirements</h2>
      <p>
        SBA loans require a borrower equity injection to ensure owner commitment and risk alignment:
      </p>
      <ul>
        <li><strong>Machinery &amp; Equipment Loans:</strong> 10% down payment required in cash or unencumbered trade equity.</li>
        <li><strong>Owner-Occupied Real Estate (504 Program):</strong> Exactly 10% standard; 15% for startups under 2 years old or special-purpose properties (hotels, car washes, self-storage).</li>
        <li><strong>Business Acquisitions / Partner Buyouts:</strong> 10% to 20% equity injection required. Up to half of the down payment can be structured via a seller-financed note on full standby for 24 months.</li>
        <li><strong>Working Capital Lines / Term Loans:</strong> Often 0% down required if existing business assets provide sufficient collateral coverage.</li>
      </ul>
    </section>

    <!-- Section 9: Application Process -->
    <section class="content-section" id="application-steps">
      <h2>How to Apply &amp; Fast-Track SBA Approval</h2>
      <p>
        Standard SBA applications can take 60 to 90 days if submitted through general retail banks. Follow these proven strategies to expedite funding to 2&ndash;4 weeks:
      </p>

      <ol class="step-list">
        <li>
          <strong>Work Exclusively with an SBA Preferred Lender (PLP)</strong>
          <p>Preferred Lenders hold delegated authority from the SBA to make credit and approval decisions in-house without submitting packages for government review. This cuts 2 to 4 weeks off the underwriting timeline.</p>
        </li>
        <li>
          <strong>Prepare Complete Financial Documentation Upfront</strong>
          <p>Assemble 3 years of business federal tax returns, 3 years of personal tax returns for all 20%+ owners, year-to-date profit and loss statements, balance sheets, debt schedules, and SBA Form 1919 (Borrower Information Form).</p>
        </li>
        <li>
          <strong>Leverage SBA Express for Funding Under $500,000</strong>
          <p>If your capital requirement is under $500,000 and speed is critical, the SBA Express loan program provides an official SBA turnaround decision within 36 hours of lender submission.</p>
        </li>
      </ol>
    </section>

    <!-- Section 10: Prepayment Penalties -->
    <section class="content-section" id="prepayment-rules">
      <h2>SBA Prepayment Penalty Rules (The 5-3-1 Rule)</h2>
      <p>
        One of the major benefits of SBA financing is consumer protection regarding loan payoffs:
      </p>
      <ul>
        <li><strong>Loans with terms under 15 years:</strong> Zero prepayment penalty. You can pay off working capital, inventory, or equipment loans in full at any time without fees.</li>
        <li><strong>Loans with terms of 15 years or longer (Real Estate):</strong> Subject to the statutory <strong>5-3-1 prepayment penalty</strong> during the first 36 months if you prepay more than 25% of the outstanding balance:
          <ul>
            <li><strong>Year 1 (Months 1&ndash;12):</strong> 5% fee on the prepaid amount</li>
            <li><strong>Year 2 (Months 13&ndash;24):</strong> 3% fee on the prepaid amount</li>
            <li><strong>Year 3 (Months 25&ndash;36):</strong> 1% fee on the prepaid amount</li>
            <li><strong>Year 4 and beyond:</strong> 0% fee (No penalty)</li>
          </ul>
        </li>
      </ul>
    </section>

    <!-- Section 11: FAQ Accordion -->
    <section class="content-section" id="faq">
      <h2>Frequently Asked Questions About SBA Loans</h2>
      <p>Common questions regarding SBA 7(a) and 504 underwriting, interest rate benchmarks, and payment calculations.</p>

      <div class="faq-list">
        <div class="faq-card open">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>What is the current SBA loan interest rate in <?php echo $currentYear; ?>?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            SBA 7(a) variable rates are pegged to the Wall Street Journal Prime Rate (currently 8.50%) plus an allowable lender spread (2.25% to 2.75%), resulting in typical APRs of <strong>10.75% to 11.25%</strong>. Fixed-rate 7(a) loans range from 9.50% to 12.25%. SBA 504 loans feature below-market fixed CDC debenture rates tied to long-term U.S. Treasuries, currently ranging between <strong>5.50% and 6.75%</strong>.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>SBA 7(a) vs. SBA 504: Which loan program is cheaper?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            For purchasing owner-occupied commercial real estate or long-term heavy machinery over $500,000, the <strong>SBA 504 program</strong> is almost always cheaper because 40% of the project is locked into a low, long-term fixed interest rate through a Certified Development Company (CDC). SBA 7(a) loans are more versatile for working capital and inventory but typically carry higher variable rates.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>How is an SBA monthly loan payment calculated?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            SBA loan payments are calculated using standard banking amortization: M = P[r(1+r)^n] / [(1+r)^n - 1], where P is loan principal, r is the monthly interest rate, and n is total months. If the upfront SBA guaranty fee is financed into the loan, it is added to the principal balance before computing payments.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>What credit score do I need for an SBA loan?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            Most SBA preferred lenders require a minimum personal credit score of <strong>650 to 680</strong> for SBA 7(a) loans, and 680 or higher for SBA 504 loans. Lenders also evaluate the business FICO SBSS score, where a minimum score of 155 is legally required for SBA 7(a) Small Loans under $500,000.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>How much down payment is required for an SBA loan?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            Most SBA loans require a minimum equity injection of <strong>10%</strong>. For business acquisitions, partner buyouts, or special-purpose commercial real estate (such as hotels, gas stations, or car washes), lenders typically require 15% to 20% down.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>What are SBA guaranty fees and how are they paid?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            The SBA charges an upfront guaranty fee to offset program costs. Fees are 0% for loans under $150,000, 3.00% of the guaranteed portion for loans between $150,001 and $700,000, and 3.50% to 3.75% for loans over $700,000. Over 90% of borrowers choose to roll this fee directly into their loan balance rather than paying cash at closing.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>Do SBA loans have prepayment penalties?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            SBA 7(a) loans with terms under 15 years (working capital and equipment) have <strong>zero prepayment penalties</strong>. Loans with terms of 15 years or longer follow the 5-3-1 rule: a 5% penalty in year 1, 3% in year 2, 1% in year 3, and no penalty from year 4 onwards.
          </div>
        </div>

        <div class="faq-card">
          <button type="button" class="faq-trigger" onclick="toggleFaq(this)">
            <span>What Debt Service Coverage Ratio (DSCR) do SBA lenders require?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-answer">
            SBA lenders require a minimum Debt Service Coverage Ratio (DSCR) of <strong>1.15x to 1.25x</strong>. This means your business Net Operating Income (NOI) or EBITDA must exceed your annual principal and interest debt payments by at least 15% to 25% to provide an operational safety cushion.
          </div>
        </div>
      </div>

      <div class="info-box" style="margin-top:2rem;">
        🔗 <strong>Explore Related Commercial &amp; Financing Tools:</strong>
        <a href="/loan-calculators/sba-loan-payment-calculator" style="color:#2563eb;font-weight:700;">SBA Loan Payment Calculator</a> &bull;
        <a href="/loan-calculators/business-loan-calculator" style="color:#2563eb;font-weight:700;">Commercial Business Loan</a> &bull;
        <a href="/loan-calculators/equipment-loan-calculator" style="color:#2563eb;font-weight:700;">Equipment Financing</a> &bull;
        <a href="/real-estate/dscr-calculator" style="color:#2563eb;font-weight:700;">DSCR Calculator</a> &bull;
        <a href="/business/profit-margin-calculator" style="color:#2563eb;font-weight:700;">Profit Margin Calculator</a>
      </div>
    </section>

  </div><!-- /main-content -->

  <!-- ══════════════════════════════════════════════════════════════════════
       RIGHT SIDEBAR (BENCHMARKS & CLUSTER LINKS)
       ══════════════════════════════════════════════════════════════════════ -->
  <aside class="right-sidebar">

    <!-- Benchmark Rates Widget -->
    <div class="sidebar-widget">
      <div class="sidebar-widget-header">
        <h3 class="sidebar-widget-title">Current Benchmark Rates</h3>
        <div class="sidebar-widget-sub">Updated for <?php echo $currentYear; ?> Lending</div>
      </div>
      <div class="sidebar-widget-body">
        <div class="sidebar-rate-row">
          <div>
            <div class="sidebar-rate-lbl">WSJ Prime Rate</div>
            <div class="sidebar-rate-sub">Base for SBA 7(a)</div>
          </div>
          <div class="sidebar-rate-val">8.50%</div>
        </div>
        <div class="sidebar-rate-row">
          <div>
            <div class="sidebar-rate-lbl">SBA 7(a) Variable</div>
            <div class="sidebar-rate-sub">Prime + 2.75%</div>
          </div>
          <div class="sidebar-rate-val">11.25%</div>
        </div>
        <div class="sidebar-rate-row">
          <div>
            <div class="sidebar-rate-lbl">SBA 504 Fixed CDC</div>
            <div class="sidebar-rate-sub">20-Yr Debenture</div>
          </div>
          <div class="sidebar-rate-val" style="color:#16a34a;">5.95%</div>
        </div>
        <div class="sidebar-rate-row">
          <div>
            <div class="sidebar-rate-lbl">10-Yr U.S. Treasury</div>
            <div class="sidebar-rate-sub">Yield Benchmark</div>
          </div>
          <div class="sidebar-rate-val">4.30%</div>
        </div>
      </div>
    </div>

    <!-- Cluster Loan Calculators -->
    <div class="sidebar-widget">
      <div class="sidebar-widget-header">
        <h3 class="sidebar-widget-title">Loan Calculators</h3>
        <div class="sidebar-widget-sub">Institutional Amortization Models</div>
      </div>
      <ul class="sidebar-links-list">
        <li><a href="/loan-calculators/sba-loan-calculator" class="active">💼 SBA 7(a) &amp; 504 Calculator</a></li>
        <li><a href="/loan-calculators/sba-loan-payment-calculator">📋 SBA Payment Calculator</a></li>
        <li><a href="/loan-calculators/business-loan-calculator">🏢 Commercial Business Loan</a></li>
        <li><a href="/loan-calculators/equipment-loan-calculator">🚜 Equipment Loan Calculator</a></li>
        <li><a href="/loan-calculators/debt-to-income-calculator">📊 Debt-to-Income (DTI)</a></li>
        <li><a href="/loan-calculators/auto-loan-calculator">🚗 Auto &amp; Vehicle Loan</a></li>
        <li><a href="/loan-calculators/personal-loan-calculator">👤 Personal Loan Calculator</a></li>
      </ul>
    </div>

    <!-- Related Business Tools -->
    <div class="sidebar-widget">
      <div class="sidebar-widget-header">
        <h3 class="sidebar-widget-title">Business &amp; Real Estate</h3>
        <div class="sidebar-widget-sub">Profitability &amp; Debt Coverage</div>
      </div>
      <ul class="sidebar-links-list">
        <li><a href="/real-estate/dscr-calculator">🏘️ DSCR Coverage Ratio</a></li>
        <li><a href="/real-estate/cap-rate-calculator">📈 Capitalization Rate (Cap)</a></li>
        <li><a href="/business/profit-margin-calculator">💰 Gross &amp; Net Profit Margin</a></li>
        <li><a href="/business/markup-calculator">🏷️ Markup vs. Margin</a></li>
        <li><a href="/business/project-roi-calculator">📊 Project ROI &amp; NPV/IRR</a></li>
      </ul>
    </div>

  </aside>

</div>
</main>

<script>
// ==========================================================================
// INSTITUTIONAL SBA LOAN CALCULATION ENGINE JAVASCRIPT
// ==========================================================================

const fmtCurr = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', maximumFractionDigits: 0 });
const fmtCurrDec = new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD', minimumFractionDigits: 2, maximumFractionDigits: 2 });

let currentProgram = '7a';

function switchProgram(program) {
  currentProgram = program;
  const tab7a = document.getElementById('tab-7a');
  const tab504 = document.getElementById('tab-504');
  const rateInput = document.getElementById('interest_rate');
  const termSelect = document.getElementById('loan_term');
  const amountBadge = document.getElementById('amount-badge');
  const rateBadge = document.getElementById('rate-badge');

  if (program === '7a') {
    tab7a.classList.add('active');
    tab504.classList.remove('active');
    amountBadge.textContent = 'Max: $5,000,000';
    rateBadge.textContent = 'Prime + 2.75% = 11.25%';
    rateInput.value = '11.25';
    termSelect.value = '10';
  } else {
    tab504.classList.add('active');
    tab7a.classList.remove('active');
    amountBadge.textContent = 'Max: $5,500,000';
    rateBadge.textContent = 'CDC Fixed Peg = 5.95%';
    rateInput.value = '5.95';
    termSelect.value = '25';
  }
  calculateSBA();
}

function calculateSBA() {
  const baseAmount = parseFloat(document.getElementById('loan_amount').value) || 0;
  const annualRate = parseFloat(document.getElementById('interest_rate').value) || 0;
  const years = parseInt(document.getElementById('loan_term').value, 10) || 10;
  const feeOption = document.getElementById('finance_fee').value;

  if (baseAmount <= 0 || annualRate <= 0 || years <= 0) return;

  // SBA Guaranty Fee Computation
  let guarantyFee = 0;
  if (feeOption !== 'waive') {
    if (baseAmount <= 150000) {
      guarantyFee = 0;
    } else if (baseAmount <= 700000) {
      guarantyFee = (baseAmount * 0.75) * 0.03; // 3.00% on 75% guaranteed
    } else {
      const gPortion = baseAmount * 0.75;
      guarantyFee = (750000 * 0.035) + Math.max(0, (gPortion - 750000) * 0.0375);
    }
  }

  let financedPrincipal = baseAmount;
  if (feeOption === 'finance') {
    financedPrincipal = baseAmount + guarantyFee;
  }

  const r = (annualRate / 100) / 12;
  const n = years * 12;
  let monthlyPmt = 0;

  if (r > 0 && n > 0) {
    monthlyPmt = financedPrincipal * (r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);
  } else if (n > 0) {
    monthlyPmt = financedPrincipal / n;
  }

  const totalRepayment = monthlyPmt * n;
  const totalInterest = Math.max(0, totalRepayment - financedPrincipal);
  const dscrTarget = monthlyPmt * 1.25;

  // DOM Updates
  document.getElementById('res-monthly').textContent = fmtCurr.format(monthlyPmt);
  document.getElementById('res-principal').textContent = fmtCurr.format(financedPrincipal);
  document.getElementById('res-interest').textContent = fmtCurr.format(totalInterest);
  document.getElementById('res-total').textContent = fmtCurr.format(totalRepayment);
  document.getElementById('res-dscr-need').textContent = fmtCurr.format(dscrTarget) + '/mo';

  const feeNote = document.getElementById('res-guaranty-note');
  if (feeOption === 'finance' && guarantyFee > 0) {
    feeNote.textContent = `Includes ${fmtCurr.format(guarantyFee)} financed SBA guaranty fee`;
  } else if (feeOption === 'cash' && guarantyFee > 0) {
    feeNote.textContent = `${fmtCurr.format(guarantyFee)} guaranty fee due cash at closing`;
  } else {
    feeNote.textContent = 'Guaranty fee waived or not applicable';
  }

  document.getElementById('results-sub-label').textContent = `Based on ${fmtCurr.format(baseAmount)} at ${annualRate}% over ${years} years`;

  // Visual Bar Percentage
  const pPct = totalRepayment > 0 ? Math.round((financedPrincipal / totalRepayment) * 100) : 50;
  const iPct = 100 - pPct;
  document.getElementById('bar-p').style.width = pPct + '%';
  document.getElementById('bar-i').style.width = iPct + '%';
  document.getElementById('pct-p').textContent = pPct + '%';
  document.getElementById('pct-i').textContent = iPct + '%';

  // Build Amortization Schedule
  buildAmortizationTable(financedPrincipal, r, n, monthlyPmt);
}

function buildAmortizationTable(principal, r, n, monthlyPmt) {
  let balance = principal;
  let rows = '';
  const maxRows = Math.min(n, 360);

  for (let month = 1; month <= maxRows; month++) {
    const interestPmt = balance * r;
    let principalPmt = monthlyPmt - interestPmt;
    if (principalPmt > balance || month === n) {
      principalPmt = balance;
    }
    balance -= principalPmt;
    if (balance < 0) balance = 0;

    rows += `<tr>
      <td>${month}</td>
      <td>${fmtCurrDec.format(monthlyPmt)}</td>
      <td style="color:#2563eb;font-weight:600;">${fmtCurrDec.format(principalPmt)}</td>
      <td style="color:#d97706;">${fmtCurrDec.format(interestPmt)}</td>
      <td style="font-weight:600;">${fmtCurrDec.format(balance)}</td>
    </tr>`;
  }
  document.getElementById('amort-tbody').innerHTML = rows;
}

function toggleAmortization() {
  const wrap = document.getElementById('amort-table-wrap');
  const txt = document.getElementById('amort-toggle-text');
  const isOpen = wrap.classList.toggle('open');
  if (isOpen) {
    txt.textContent = '📊 Hide Amortization Schedule';
  } else {
    txt.textContent = '📊 View Full Month-by-Month Amortization Schedule';
  }
}

function toggleFaq(trigger) {
  const card = trigger.closest('.faq-card');
  const isOpen = card.classList.contains('open');
  document.querySelectorAll('.faq-card').forEach(c => c.classList.remove('open'));
  if (!isOpen) {
    card.classList.add('open');
  }
}

// TOC Scroll Spy
document.addEventListener('DOMContentLoaded', function () {
  const tocLinks = document.querySelectorAll('.toc-list a');
  const sections = [];

  tocLinks.forEach(link => {
    const hash = link.getAttribute('href').replace('#', '');
    const sec = document.getElementById(hash);
    if (sec) sections.push({ link, sec });
  });

  function updateTocSpy() {
    const scrollY = window.scrollY + 140;
    let active = sections[0];
    sections.forEach(({ link, sec }) => {
      if (sec.getBoundingClientRect().top + window.scrollY <= scrollY) {
        active = { link, sec };
      }
    });
    tocLinks.forEach(l => l.classList.remove('toc-active'));
    if (active) active.link.classList.add('toc-active');
  }

  window.addEventListener('scroll', updateTocSpy, { passive: true });
  updateTocSpy();

  // Attach live input listeners
  ['loan_amount', 'interest_rate', 'loan_term', 'finance_fee'].forEach(id => {
    const el = document.getElementById(id);
    if (el) {
      el.addEventListener('input', calculateSBA);
      el.addEventListener('change', calculateSBA);
    }
  });

  calculateSBA();
});
</script>

<?php require_once '../includes/footer.php'; ?>
