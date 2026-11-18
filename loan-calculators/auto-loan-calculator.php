<?php
$currentYear = date('Y');

// ─── SEO Meta & Schema Configuration ──────────────────────────────────────────
$pageTitle       = "Auto Loan Calculator ($currentYear) — Car Payment with Trade-In, Tax & Down Payment";
$metaDescription = "Free auto loan calculator ($currentYear). Calculate exact monthly car payments with trade-in equity, sales tax, down payment, and 20/4/10 affordability rules. Instant amortization schedule.";
$metaKeywords    = 'auto loan calculator, car payment calculator, car loan calculator 2026, trade in calculator, auto loan with tax and down payment, used car loan calculator, 20 4 10 rule calculator';

$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'               => 'WebApplication',
      '@id'                 => 'https://americacalculator.com/loan-calculators/auto-loan-calculator#app',
      'name'                => 'Auto Loan & Car Payment Calculator',
      'url'                 => 'https://americacalculator.com/loan-calculators/auto-loan-calculator',
      'description'         => 'Free auto loan calculator for 2026. Calculate monthly car payments with trade-in value, negative equity roll-in, down payment, state sales tax credit, and full amortization schedules.',
      'applicationCategory' => 'FinanceApplication',
      'operatingSystem'     => 'All',
      'browserRequirements' => 'Requires JavaScript',
      'offers'              => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD'],
    ],
    [
      '@type'     => 'HowTo',
      '@id'       => 'https://americacalculator.com/loan-calculators/auto-loan-calculator#howto',
      'name'      => 'How to Calculate Your Car Loan Payment',
      'totalTime' => 'PT2M',
      'step'      => [
        [
          '@type'    => 'HowToStep',
          'position' => 1,
          'name'     => 'Enter the Negotiated Vehicle Purchase Price',
          'text'     => 'Enter the agreed vehicle sale price before down payment or trade-in deductions. Exclude dealer add-ons or negotiate them off before calculating.',
        ],
        [
          '@type'    => 'HowToStep',
          'position' => 2,
          'name'     => 'Input Down Payment and Trade-In Details',
          'text'     => 'Enter upfront cash paid and trade-in vehicle value. If you owe money on your current vehicle loan, enter the balance owed to account for positive or negative trade-in equity.',
        ],
        [
          '@type'    => 'HowToStep',
          'position' => 3,
          'name'     => 'Configure State Sales Tax and Trade-In Credit Rule',
          'text'     => 'Input your state/local auto sales tax rate. Select whether your state provides a trade-in tax credit (43 states deduct trade value before tax) or taxes the full purchase price (CA, VA, HI, DC, MI).',
        ],
        [
          '@type'    => 'HowToStep',
          'position' => 4,
          'name'     => 'Set Interest Rate (APR) and Financing Term Length',
          'text'     => 'Select your loan term (36 to 84 months) and input your pre-approved annual percentage rate (APR) based on your credit tier.',
        ],
        [
          '@type'    => 'HowToStep',
          'position' => 5,
          'name'     => 'Check Affordability via the 20/4/10 Rule',
          'text'     => 'Optionally enter your gross monthly household income to verify whether your monthly payment and total transportation costs remain under the safe 10% income threshold.',
        ],
      ],
    ],
    [
      '@type'      => 'FAQPage',
      '@id'        => 'https://americacalculator.com/loan-calculators/auto-loan-calculator#faq',
      'mainEntity' => [
        [
          '@type'          => 'Question',
          'name'           => "What is the average auto loan interest rate in $currentYear?",
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'In 2026, average new car loan interest rates range from 5.25%–6.85% APR for super-prime borrowers (780+ FICO) and 6.75%–8.95% for prime borrowers (660–779). Used car loan interest rates run approximately 1.5% to 3.0% higher, averaging 7.50%–11.50% for prime credit and 14.00%–21.00%+ for subprime borrowers.'
          ],
        ],
        [
          '@type'          => 'Question',
          'name'           => 'How does a trade-in tax credit work on a car purchase?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'In 43 US states, trade-in value is deducted from the taxable vehicle purchase price before state and local sales tax is computed. For example, trading in an $8,000 car on a $38,000 purchase reduces your taxable base to $30,000, saving you $560 in sales tax at a 7% tax rate. However, California, Virginia, Hawaii, District of Columbia, and Michigan (capped) tax the full vehicle price regardless of trade-in value.'
          ],
        ],
        [
          '@type'          => 'Question',
          'name'           => 'What happens if I have negative equity on my trade-in?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'If you owe more on your existing car loan than the dealer offers for trade-in (negative equity or being "underwater"), the remaining unpaid balance is rolled into your new auto loan. This increases your total amount financed, raises monthly payments, and puts you at risk of being upside-down on your new vehicle immediately.'
          ],
        ],
        [
          '@type'          => 'Question',
          'name'           => 'What is the 20/4/10 rule for car buying?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'The 20/4/10 rule is a conservative personal finance standard: put down at least 20% in cash/trade equity, finance the vehicle for no longer than 4 years (48 months), and ensure total monthly vehicle operating costs (loan payment + insurance + fuel) do not exceed 10% of your gross monthly household income.'
          ],
        ],
        [
          '@type'          => 'Question',
          'name'           => 'Is a 72-month or 84-month auto loan ever a good idea?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Long 72-month and 84-month auto loans lower your monthly payment but drastically increase lifetime interest charges — often adding $2,500 to $6,000 in unnecessary interest. Furthermore, vehicles depreciate faster than the loan balance amortizes, leaving borrowers underwater for up to 4 to 5 years.'
          ],
        ],
        [
          '@type'          => 'Question',
          'name'           => 'Should I finance through a dealership or get pre-approved at a credit union?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Always secure a loan pre-approval from a local credit union or bank before negotiating at the dealership. Credit unions typically offer APRs 0.75%–1.50% lower than commercial banks. A pre-approval prevents dealers from marking up your interest rate ("dealer reserve markup") while giving you leverage to qualify for promotional manufacturer 0%–1.9% captive financing if available.'
          ],
        ],
        [
          '@type'          => 'Question',
          'name'           => 'How much should I put down on a new or used vehicle?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Financial advisors recommend a minimum down payment of 20% for new vehicles (to offset immediate 15%–20% first-year depreciation) and at least 10%–15% for pre-owned vehicles. A substantial down payment protects against negative equity, lowers borrowing costs, and helps qualify for tier-1 interest rate pricing.'
          ],
        ],
        [
          '@type'          => 'Question',
          'name'           => 'Can I pay off my auto loan early without penalty?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'The vast majority of standard consumer auto loans in the United States use simple interest amortization with no prepayment penalties. Making principal-only curtailments or switching to bi-weekly payments reduces your principal balance faster, shortening loan duration and saving hundreds to thousands in cumulative interest.'
          ],
        ],
      ],
    ],
    [
      '@type' => 'BreadcrumbList',
      '@id'   => 'https://americacalculator.com/loan-calculators/auto-loan-calculator#breadcrumb',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Loan Calculators', 'item' => 'https://americacalculator.com/loan-calculators/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Auto Loan Calculator', 'item' => 'https://americacalculator.com/loan-calculators/auto-loan-calculator'],
      ]
    ],
  ],
];

require_once '../includes/header.php';
?>

<style>
/* ============================================================
   EXECUTIVE AUTO LOAN CALCULATOR STYLES
   ============================================================ */
:root {
  --primary-navy: #0f172a;
  --secondary-slate: #1e293b;
  --accent-blue: #2563eb;
  --accent-blue-hover: #1d4ed8;
  --accent-emerald: #059669;
  --accent-amber: #d97706;
  --accent-rose: #dc2626;
  --surface-white: #ffffff;
  --surface-soft: #f8fafc;
  --surface-border: #e2e8f0;
  --text-dark: #0f172a;
  --text-muted: #475569;
  --text-light: #64748b;
  --shadow-sm: 0 1px 3px rgba(0,0,0,0.05);
  --shadow-md: 0 4px 16px rgba(15,23,42,0.08);
  --shadow-lg: 0 12px 32px rgba(15,23,42,0.12);
  --radius-sm: 8px;
  --radius-md: 12px;
  --radius-lg: 16px;
}

body { background-color: #f8fafc; color: var(--text-dark); font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif; }
.container { max-width: 1160px; margin: 0 auto; padding: 2rem 1.25rem 4rem; }

/* Breadcrumb */
.breadcrumb-nav { font-size: 0.88rem; color: var(--text-light); margin-bottom: 1.25rem; }
.breadcrumb-nav a { color: var(--accent-blue); text-decoration: none; font-weight: 500; }
.breadcrumb-nav a:hover { text-decoration: underline; }
.breadcrumb-nav span { margin: 0 0.4rem; }

/* Hero Section */
.hero-header { margin-bottom: 2.25rem; }
.hero-badge { display: inline-flex; align-items: center; gap: 6px; background: #eff6ff; color: #1e40af; border: 1px solid #bfdbfe; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; padding: 4px 12px; border-radius: 20px; margin-bottom: 0.75rem; }
.hero-header h1 { font-size: 2.4rem; font-weight: 850; color: var(--primary-navy); line-height: 1.2; letter-spacing: -0.025em; margin-bottom: 0.85rem; }
.hero-lead { font-size: 1.1rem; color: var(--text-muted); line-height: 1.65; max-width: 880px; border-left: 4px solid var(--accent-blue); padding-left: 1.25rem; }

/* Calculator Grid */
.calc-container { display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 2rem; margin-bottom: 3rem; align-items: start; }
@media (max-width: 960px) { .calc-container { grid-template-columns: 1fr; } }

.calc-panel { background: var(--surface-white); border: 1.5px solid var(--surface-border); border-radius: var(--radius-lg); box-shadow: var(--shadow-md); padding: 2rem; }
.panel-title { font-size: 1.25rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: space-between; border-bottom: 2px solid var(--surface-soft); padding-bottom: 0.85rem; }

/* Form Controls */
.form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; margin-bottom: 1.25rem; }
.form-grid.full-width { grid-template-columns: 1fr; }
@media (max-width: 600px) { .form-grid { grid-template-columns: 1fr; } }

.form-group { display: flex; flex-direction: column; gap: 0.4rem; }
.form-label { font-size: 0.88rem; font-weight: 700; color: var(--secondary-slate); display: flex; justify-content: space-between; align-items: center; }
.form-label span.hint { font-size: 0.75rem; font-weight: 500; color: var(--text-light); }

.input-prefix-wrap { position: relative; display: flex; align-items: center; }
.input-prefix { position: absolute; left: 14px; font-weight: 700; color: var(--text-light); font-size: 0.95rem; pointer-events: none; }
.input-suffix { position: absolute; right: 14px; font-weight: 700; color: var(--text-light); font-size: 0.95rem; pointer-events: none; }

.form-input { width: 100%; padding: 11px 14px 11px 28px; border: 1.5px solid var(--surface-border); border-radius: var(--radius-sm); font-size: 1rem; font-weight: 600; color: var(--text-dark); background: var(--surface-soft); outline: none; transition: all 0.2s ease; }
.form-input.no-prefix { padding-left: 14px; }
.form-input.has-suffix { padding-right: 32px; }
.form-input:focus { border-color: var(--accent-blue); background: var(--surface-white); box-shadow: 0 0 0 3px rgba(37,99,235,0.12); }

.form-select { width: 100%; padding: 11px 14px; border: 1.5px solid var(--surface-border); border-radius: var(--radius-sm); font-size: 0.95rem; font-weight: 600; color: var(--text-dark); background: var(--surface-soft); outline: none; cursor: pointer; transition: all 0.2s ease; }
.form-select:focus { border-color: var(--accent-blue); background: var(--surface-white); box-shadow: 0 0 0 3px rgba(37,99,235,0.12); }

/* Term Pill Buttons */
.term-pills { display: grid; grid-template-columns: repeat(5, 1fr); gap: 6px; margin-top: 4px; }
.term-pill-btn { padding: 9px 4px; font-size: 0.85rem; font-weight: 700; background: var(--surface-soft); border: 1.5px solid var(--surface-border); border-radius: var(--radius-sm); color: var(--secondary-slate); cursor: pointer; text-align: center; transition: all 0.15s ease; }
.term-pill-btn:hover { background: #e0e7ff; border-color: #c7d2fe; color: #1e40af; }
.term-pill-btn.active { background: var(--accent-blue); border-color: var(--accent-blue); color: #ffffff; box-shadow: 0 2px 8px rgba(37,99,235,0.3); }

/* Results Side Panel */
.results-panel { background: #ffffff; border: 1.5px solid var(--surface-border); border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); padding: 2rem; position: sticky; top: 1.5rem; }
.hero-payment-card { background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); border-radius: var(--radius-md); padding: 1.6rem; color: #ffffff; text-align: center; margin-bottom: 1.5rem; box-shadow: 0 8px 24px rgba(15,23,42,0.18); position: relative; overflow: hidden; }
.hero-payment-card::after { content: ""; position: absolute; top: -50%; right: -50%; width: 100%; height: 100%; background: radial-gradient(circle, rgba(255,255,255,0.08) 0%, transparent 70%); pointer-events: none; }
.hero-card-label { font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #93c5fd; }
.hero-card-val { font-size: 2.85rem; font-weight: 900; line-height: 1.1; margin: 0.4rem 0 0.2rem; color: #ffffff; }
.hero-card-sub { font-size: 0.82rem; color: #cbd5e1; }

.key-metrics-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0.85rem; margin-bottom: 1.5rem; }
.metric-box { background: var(--surface-soft); border: 1px solid var(--surface-border); border-radius: var(--radius-sm); padding: 0.9rem 1rem; }
.metric-box-label { font-size: 0.74rem; font-weight: 700; text-transform: uppercase; color: var(--text-light); letter-spacing: 0.04em; }
.metric-box-val { font-size: 1.22rem; font-weight: 800; color: var(--primary-navy); margin-top: 3px; }
.metric-box-val.interest { color: var(--accent-rose); }
.metric-box-val.emerald { color: var(--accent-emerald); }

/* Affordability Gauge Box */
.affordability-card { background: #f0fdf4; border: 1.5px solid #bbf7d0; border-radius: var(--radius-md); padding: 1.25rem; margin-bottom: 1.5rem; }
.affordability-card.caution { background: #fffbeb; border-color: #fde68a; }
.affordability-card.warning { background: #fef2f2; border-color: #fecaca; }
.afford-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem; }
.afford-title { font-size: 0.88rem; font-weight: 800; color: var(--primary-navy); display: flex; align-items: center; gap: 6px; }
.afford-badge { font-size: 0.76rem; font-weight: 800; padding: 3px 8px; border-radius: 6px; background: #15803d; color: #ffffff; }
.affordability-card.caution .afford-badge { background: #b45309; }
.affordability-card.warning .afford-badge { background: #b91c1c; }
.afford-bar-track { height: 8px; background: #e2e8f0; border-radius: 4px; overflow: hidden; margin: 0.6rem 0; position: relative; }
.afford-bar-fill { height: 100%; background: #16a34a; border-radius: 4px; transition: width 0.3s ease; }
.affordability-card.caution .afford-bar-fill { background: #d97706; }
.affordability-card.warning .afford-bar-fill { background: #dc2626; }
.afford-desc { font-size: 0.8rem; line-height: 1.45; color: var(--text-muted); margin: 0; }

/* Breakdown List */
.breakdown-list { border-top: 1px solid var(--surface-border); padding-top: 1rem; margin-bottom: 1.25rem; }
.breakdown-item { display: flex; justify-content: space-between; align-items: center; font-size: 0.86rem; padding: 0.45rem 0; border-bottom: 1px dashed #f1f5f9; }
.breakdown-item:last-child { border-bottom: none; font-weight: 800; font-size: 0.92rem; border-top: 1.5px solid var(--surface-border); margin-top: 4px; padding-top: 0.6rem; }
.breakdown-item .label { color: var(--text-muted); }
.breakdown-item .val { font-weight: 700; color: var(--primary-navy); }

/* Schedule Modal/Accordion */
.schedule-toggle-btn { width: 100%; padding: 12px; font-size: 0.92rem; font-weight: 700; color: var(--accent-blue); background: #eff6ff; border: 1.5px solid #bfdbfe; border-radius: var(--radius-sm); cursor: pointer; transition: all 0.2s ease; display: flex; align-items: center; justify-content: center; gap: 8px; }
.schedule-toggle-btn:hover { background: #dbeafe; }

/* Term Comparison Matrix */
.matrix-section { margin-top: 2rem; background: var(--surface-white); border: 1.5px solid var(--surface-border); border-radius: var(--radius-lg); padding: 2rem; box-shadow: var(--shadow-sm); }
.matrix-table { width: 100%; border-collapse: collapse; font-size: 0.92rem; text-align: left; }
.matrix-table th { background: var(--surface-soft); padding: 12px 14px; font-weight: 700; color: var(--secondary-slate); border-bottom: 2px solid var(--surface-border); }
.matrix-table td { padding: 12px 14px; border-bottom: 1px solid var(--surface-border); font-weight: 600; color: var(--text-dark); }
.matrix-table tr:last-child td { border-bottom: none; }
.matrix-table tr.highlight-row { background: #eff6ff; font-weight: 800; }
.matrix-table tr.highlight-row td { color: #1d4ed8; }

/* Editorial Content Sections */
.editorial-container { margin-top: 3.5rem; }
.content-card { background: var(--surface-white); border: 1.5px solid var(--surface-border); border-radius: var(--radius-lg); padding: 2.5rem; margin-bottom: 2.25rem; box-shadow: var(--shadow-sm); }
.content-card h2 { font-size: 1.65rem; font-weight: 850; color: var(--primary-navy); margin-bottom: 1.25rem; line-height: 1.3; border-bottom: 2px solid var(--surface-soft); padding-bottom: 0.75rem; letter-spacing: -0.015em; }
.content-card h3 { font-size: 1.22rem; font-weight: 750; color: var(--secondary-slate); margin: 1.75rem 0 0.85rem; }
.content-card p { font-size: 1.02rem; line-height: 1.75; color: #334155; margin-bottom: 1.25rem; }
.content-card p:last-child { margin-bottom: 0; }
.content-card ul, .content-card ol { font-size: 1.02rem; line-height: 1.75; color: #334155; margin: 0 0 1.25rem 1.5rem; }
.content-card li { margin-bottom: 0.5rem; }

/* Callout Box */
.info-callout { background: #f8fafc; border-left: 4px solid var(--accent-blue); padding: 1.25rem 1.5rem; border-radius: 0 var(--radius-sm) var(--radius-sm) 0; margin: 1.5rem 0; }
.info-callout.warning { border-left-color: var(--accent-rose); background: #fff1f2; }
.info-callout.tip { border-left-color: var(--accent-emerald); background: #f0fdf4; }
.info-callout-title { font-weight: 800; font-size: 0.98rem; color: var(--primary-navy); margin-bottom: 0.35rem; display: flex; align-items: center; gap: 6px; }
.info-callout p { font-size: 0.94rem; line-height: 1.65; margin: 0; color: #475569; }

/* Data Tables */
.data-table-wrap { overflow-x: auto; margin: 1.5rem 0; border: 1.5px solid var(--surface-border); border-radius: var(--radius-md); }
.data-table { width: 100%; border-collapse: collapse; font-size: 0.94rem; text-align: left; }
.data-table th { background: var(--surface-soft); padding: 12px 16px; font-weight: 750; color: var(--primary-navy); border-bottom: 2px solid var(--surface-border); }
.data-table td { padding: 12px 16px; border-bottom: 1px solid var(--surface-border); color: #334155; }
.data-table tr:nth-child(even) td { background: #fafcff; }
.data-table tr:last-child td { border-bottom: none; }

/* 20/4/10 Visual Rule Grid */
.rule-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.25rem; margin: 1.75rem 0; }
@media (max-width: 768px) { .rule-grid { grid-template-columns: 1fr; } }
.rule-box { background: var(--surface-soft); border: 1.5px solid var(--surface-border); border-radius: var(--radius-md); padding: 1.5rem; text-align: center; }
.rule-box-num { font-size: 2.5rem; font-weight: 900; color: var(--accent-blue); line-height: 1; margin-bottom: 0.35rem; }
.rule-box-title { font-size: 0.92rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.05em; color: var(--primary-navy); margin-bottom: 0.6rem; }
.rule-box-desc { font-size: 0.88rem; color: var(--text-muted); line-height: 1.55; margin: 0; }

/* Related Calculators Grid */
.related-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.25rem; margin-top: 1.5rem; }
.related-card { background: var(--surface-soft); border: 1.5px solid var(--surface-border); border-radius: var(--radius-md); padding: 1.4rem; text-decoration: none; color: inherit; transition: all 0.2s ease; display: flex; flex-direction: column; }
.related-card:hover { transform: translateY(-3px); border-color: var(--accent-blue); box-shadow: var(--shadow-md); background: #ffffff; }
.related-card-title { font-weight: 800; font-size: 1.05rem; color: var(--primary-navy); margin-bottom: 0.4rem; display: flex; align-items: center; gap: 8px; }
.related-card-desc { font-size: 0.88rem; color: var(--text-muted); line-height: 1.5; flex-grow: 1; }
.related-card-link { font-size: 0.82rem; font-weight: 700; color: var(--accent-blue); margin-top: 0.75rem; }

/* FAQs */
.faq-item { border-bottom: 1.5px solid var(--surface-border); padding: 1.35rem 0; }
.faq-item:last-child { border-bottom: none; }
.faq-q { font-size: 1.12rem; font-weight: 800; color: var(--primary-navy); margin-bottom: 0.6rem; }
.faq-a { font-size: 0.98rem; line-height: 1.7; color: var(--text-muted); margin: 0; }

/* Amortization Table Toggle Section */
#amortizationSchedule { display: none; margin-top: 1.5rem; }
.schedule-table-wrap { max-height: 400px; overflow-y: auto; border: 1.5px solid var(--surface-border); border-radius: var(--radius-md); }
</style>

<main id="main-content">
<div class="container">

  <!-- Breadcrumb -->
  <nav class="breadcrumb-nav" aria-label="Breadcrumb">
    <a href="/">Home</a>
    <span>&rsaquo;</span>
    <a href="/loan-calculators/">Loan Calculators</a>
    <span>&rsaquo;</span>
    <span>Auto Loan Calculator</span>
  </nav>

  <!-- Hero Header -->
  <header class="hero-header">
    <div class="hero-badge">&#x1F697; Updated for <?php echo $currentYear; ?> Loan Rates</div>
    <h1>Auto Loan Calculator (<?php echo $currentYear; ?>) — Car Payment with Trade-In, Tax &amp; Down Payment</h1>
    <p class="hero-lead">
      Calculate your exact monthly car payment with state sales tax credits, trade-in equity, down payment, and loan terms from 36 to 84 months. Evaluate the <strong>20/4/10 affordability rule</strong> and compare lifetime interest costs across credit tiers.
    </p>
  </header>

  <!-- Interactive Calculator Engine -->
  <div class="calc-container">

    <!-- Inputs Column -->
    <div class="calc-panel">
      <div class="panel-title">
        <span>Vehicle &amp; Financing Parameters</span>
        <button type="button" id="resetBtn" style="background:none;border:none;color:var(--accent-blue);font-size:0.82rem;font-weight:700;cursor:pointer;">Reset Defaults</button>
      </div>

      <!-- Vehicle Price -->
      <div class="form-grid full-width">
        <div class="form-group">
          <label class="form-label" for="vehiclePrice">
            Vehicle Purchase Price
            <span class="hint">Negotiated price before tax/trade</span>
          </label>
          <div class="input-prefix-wrap">
            <span class="input-prefix">$</span>
            <input type="number" id="vehiclePrice" class="form-input" value="38000" min="1000" max="500000" step="500">
          </div>
        </div>
      </div>

      <!-- Down Payment & Trade-In Value -->
      <div class="form-grid">
        <div class="form-group">
          <label class="form-label" for="downPayment">
            Down Payment (Cash)
            <span class="hint" id="downPctBadge">15.8% of price</span>
          </label>
          <div class="input-prefix-wrap">
            <span class="input-prefix">$</span>
            <input type="number" id="downPayment" class="form-input" value="6000" min="0" max="500000" step="250">
          </div>
        </div>

        <div class="form-group">
          <label class="form-label" for="tradeValue">
            Trade-In Vehicle Value
            <span class="hint">Appraisal offer</span>
          </label>
          <div class="input-prefix-wrap">
            <span class="input-prefix">$</span>
            <input type="number" id="tradeValue" class="form-input" value="5000" min="0" max="250000" step="250">
          </div>
        </div>
      </div>

      <!-- Amount Owed on Trade-In (Negative Equity Support) -->
      <div class="form-grid">
        <div class="form-group">
          <label class="form-label" for="tradeOwed">
            Amount Owed on Trade-In
            <span class="hint">Existing loan balance</span>
          </label>
          <div class="input-prefix-wrap">
            <span class="input-prefix">$</span>
            <input type="number" id="tradeOwed" class="form-input" value="0" min="0" max="250000" step="250">
          </div>
        </div>

        <div class="form-group">
          <label class="form-label" for="salesTaxRate">
            State &amp; Local Sales Tax
            <span class="hint">US avg 5%–8%</span>
          </label>
          <div class="input-prefix-wrap">
            <input type="number" id="salesTaxRate" class="form-input no-prefix has-suffix" value="6.5" min="0" max="20" step="0.1">
            <span class="input-suffix">%</span>
          </div>
        </div>
      </div>

      <!-- State Tax Credit Rule -->
      <div class="form-grid full-width">
        <div class="form-group">
          <label class="form-label" for="taxTreatment">
            State Trade-In Sales Tax Law
            <span class="hint">Affects taxable base</span>
          </label>
          <select id="taxTreatment" class="form-select">
            <option value="credit" selected>Trade-In Tax Credit: Deduct trade-in from price before tax (43 States)</option>
            <option value="full">No Tax Credit: Tax full price regardless of trade (CA, VA, HI, DC, MI)</option>
          </select>
        </div>
      </div>

      <!-- APR & Loan Term Selection -->
      <div class="form-grid">
        <div class="form-group">
          <label class="form-label" for="interestRate">
            Interest Rate (APR)
            <span class="hint">Annual rate</span>
          </label>
          <div class="input-prefix-wrap">
            <input type="number" id="interestRate" class="form-input no-prefix has-suffix" value="6.85" min="0" max="30" step="0.05">
            <span class="input-suffix">%</span>
          </div>
        </div>

        <div class="form-group">
          <label class="form-label">
            Loan Term (Months)
            <span class="hint" id="termYearsLabel">5.0 Years</span>
          </label>
          <div class="term-pills">
            <button type="button" class="term-pill-btn" data-term="36">36m</button>
            <button type="button" class="term-pill-btn" data-term="48">48m</button>
            <button type="button" class="term-pill-btn active" data-term="60">60m</button>
            <button type="button" class="term-pill-btn" data-term="72">72m</button>
            <button type="button" class="term-pill-btn" data-term="84">84m</button>
          </div>
          <input type="hidden" id="loanTerm" value="60">
        </div>
      </div>

      <!-- Optional Income Check -->
      <div class="form-grid full-width" style="margin-top:0.5rem; border-top:1px dashed var(--surface-border); padding-top:1rem;">
        <div class="form-group">
          <label class="form-label" for="monthlyIncome">
            Monthly Gross Income (Optional)
            <span class="hint">For 20/4/10 rule analysis</span>
          </label>
          <div class="input-prefix-wrap">
            <span class="input-prefix">$</span>
            <input type="number" id="monthlyIncome" class="form-input" value="6500" min="0" max="100000" step="250">
          </div>
        </div>
      </div>

    </div>

    <!-- Results Column -->
    <div class="results-panel">
      
      <!-- Primary Hero Payment Card -->
      <div class="hero-payment-card">
        <div class="hero-card-label">Estimated Monthly Payment</div>
        <div class="hero-card-val" id="resMonthlyPayment">$573.42</div>
        <div class="hero-card-sub" id="resTermSub">Based on 60-Month Term at 6.85% APR</div>
      </div>

      <!-- Key Metrics 2x2 Grid -->
      <div class="key-metrics-grid">
        <div class="metric-box">
          <div class="metric-box-label">Amount Financed</div>
          <div class="metric-box-val" id="resFinanced">$29,145</div>
        </div>
        <div class="metric-box">
          <div class="metric-box-label">Total Interest</div>
          <div class="metric-box-val interest" id="resTotalInterest">$5,260</div>
        </div>
        <div class="metric-box">
          <div class="metric-box-label">Total Sales Tax</div>
          <div class="metric-box-val" id="resSalesTax">$2,145</div>
        </div>
        <div class="metric-box">
          <div class="metric-box-label">Total Cost of Vehicle</div>
          <div class="metric-box-val" id="resTotalCost">$45,405</div>
        </div>
      </div>

      <!-- Affordability / 20-4-10 Indicator -->
      <div class="affordability-card" id="affordCard">
        <div class="afford-header">
          <span class="afford-title">&#x1F6E1;&#xFE0F; Affordability Assessment</span>
          <span class="afford-badge" id="affordBadge">8.8% of Income</span>
        </div>
        <div class="afford-bar-track">
          <div class="afford-bar-fill" id="affordBarFill" style="width: 44%;"></div>
        </div>
        <p class="afford-desc" id="affordText">
          Your car payment takes <strong>8.8%</strong> of your gross income, safely below the 10% ceiling recommended by the 20/4/10 rule.
        </p>
      </div>

      <!-- Detailed Financing Breakdown -->
      <div class="breakdown-list">
        <div class="breakdown-item">
          <span class="label">Vehicle Sale Price:</span>
          <span class="val" id="bdPrice">$38,000.00</span>
        </div>
        <div class="breakdown-item">
          <span class="label">+ Sales Tax (<span id="bdTaxPct">6.5%</span>):</span>
          <span class="val" id="bdTax">$2,145.00</span>
        </div>
        <div class="breakdown-item">
          <span class="label">&minus; Down Payment:</span>
          <span class="val" id="bdDown" style="color:var(--accent-emerald);">&minus;$6,000.00</span>
        </div>
        <div class="breakdown-item">
          <span class="label">&minus; Net Trade-In Equity:</span>
          <span class="val" id="bdTrade" style="color:var(--accent-emerald);">&minus;$5,000.00</span>
        </div>
        <div class="breakdown-item">
          <span class="label">= Net Principal Financed:</span>
          <span class="val" id="bdFinanced">$29,145.00</span>
        </div>
      </div>

      <!-- Amortization Schedule Toggle Button -->
      <button type="button" class="schedule-toggle-btn" id="toggleScheduleBtn">
        <span>&#x1F4C5;</span> View Full Amortization Schedule
      </button>

      <!-- Amortization Schedule Container (Hidden by default) -->
      <div id="amortizationSchedule">
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:0.75rem;">
          <strong style="font-size:0.9rem;color:var(--primary-navy);">Annual Amortization Table</strong>
          <span style="font-size:0.78rem;color:var(--text-light);" id="scheduleSummaryText">Year-by-Year</span>
        </div>
        <div class="schedule-table-wrap">
          <table class="data-table" id="scheduleTable">
            <thead>
              <tr>
                <th>Year</th>
                <th>Principal</th>
                <th>Interest</th>
                <th>Ending Balance</th>
              </tr>
            </thead>
            <tbody id="scheduleBody">
              <!-- Dynamically populated -->
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </div>

  <!-- Multi-Term Comparison Matrix -->
  <section class="matrix-section">
    <h2 style="font-size:1.35rem;font-weight:800;color:var(--primary-navy);margin-bottom:0.5rem;">Multi-Term Financing Comparison Matrix</h2>
    <p style="font-size:0.92rem;color:var(--text-muted);margin-bottom:1.25rem;">
      See how stretching your loan term from 36 to 84 months lowers your monthly payment while drastically escalating lifetime interest charges on your exact vehicle configuration.
    </p>
    <div class="data-table-wrap" style="margin:0;">
      <table class="matrix-table" id="matrixTable">
        <thead>
          <tr>
            <th>Loan Term</th>
            <th>Monthly Payment</th>
            <th>Total Interest Paid</th>
            <th>Total Financed Cost</th>
            <th>Difference vs. 48-Mo Term</th>
          </tr>
        </thead>
        <tbody id="matrixBody">
          <!-- Dynamically populated by JS -->
        </tbody>
      </table>
    </div>
  </section>

  <!-- Free Download Callout -->
  <div style="background:#eff6ff;border:1.5px solid #bfdbfe;border-radius:14px;padding:20px 24px;margin:2.5rem 0;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:16px;">
    <div style="display:flex;align-items:center;gap:14px;">
      <div style="width:42px;height:42px;border-radius:10px;background:#2563eb;color:#fff;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
        <svg style="width:24px;height:24px;fill:currentColor;" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 14h-2v-4H6v-2h4V7h2v4h4v2h-4v4z"/></svg>
      </div>
      <div>
        <div style="font-weight:800;font-size:1rem;color:#1e3a8a;">Free Auto Loan Multi-Term Comparison Spreadsheet (Excel / Google Sheets)</div>
        <div style="font-size:0.86rem;color:#475569;margin-top:2px;">Compare 36, 48, 60, 72, and 84-month amortization tables with trade-in equity and sales tax shields.</div>
      </div>
    </div>
    <div style="display:flex;gap:12px;align-items:center;">
      <a href="/downloads/files/auto-loan-comparison-financing-model-2026.xlsx" download style="background:#0f172a;color:#fff;font-size:0.86rem;font-weight:700;padding:10px 18px;border-radius:8px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;">Download Excel (.xlsx)</a>
      <a href="/downloads/" style="font-size:0.85rem;font-weight:700;color:#2563eb;text-decoration:none;">All Financial Templates &rarr;</a>
    </div>
  </div>

  <!-- Deep Editorial Content Sections -->
  <div class="editorial-container">

    <!-- Section 1: Mechanics of Auto Financing -->
    <article class="content-card">
      <h2>Understanding Auto Loan Mechanics &amp; Simple Interest Amortization</h2>
      <p>
        Financing a vehicle is one of the most significant recurring debt obligations for American households, trailing only mortgage payments in size. Unlike revolving credit cards that calculate interest daily on fluctuating balances, automotive financing in the United States almost universally operates under <strong>simple interest fixed-rate amortization</strong>.
      </p>
      <p>
        In a simple interest auto loan, your daily interest accrual is calculated using the following foundational formula:
      </p>
      <div class="info-callout">
        <div class="info-callout-title">&#x1F9EE; Daily Interest Accrual Formula</div>
        <p><strong>Daily Interest Charge = (Outstanding Principal Balance &times; Annual APR) &divide; 365</strong></p>
      </div>
      <p>
        Because your principal balance is highest during the early months of the loan, each monthly payment is <em>front-loaded with interest</em>. Out of your first monthly installment, a substantial portion pays the lender's interest fee, while only the remainder reduces your vehicle principal. As the balance amortizes over time, the interest component decreases and the principal reduction accelerates.
      </p>
      <p>
        Understanding this curve is critical: if you trade in or sell your vehicle after only 24 to 36 months of a 72-month or 84-month loan, you will have paid predominantly interest with very little principal equity built, creating an immediate negative equity trap.
      </p>
    </article>

    <!-- Section 2: 2026 Rate Benchmarks -->
    <article class="content-card">
      <h2>2026 Auto Loan Interest Rates by Credit Score &amp; Vehicle Type</h2>
      <p>
        Automotive interest rates fluctuate based on the Federal Reserve's federal funds rate, macroeconomic inflation benchmarks, and individual borrower creditworthiness. Lenders classify borrowers into five primary FICO credit tiers, each receiving distinct APR offerings:
      </p>

      <div class="data-table-wrap">
        <table class="data-table">
          <thead>
            <tr>
              <th>Credit Tier</th>
              <th>FICO Score Range</th>
              <th>Typical New Car APR</th>
              <th>Typical Used Car APR</th>
              <th>Estimated Monthly Pmt per $10k Financed (60 Mo)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Super-Prime</strong></td>
              <td>781 – 850</td>
              <td><strong>5.25% – 6.25%</strong></td>
              <td><strong>6.75% – 7.95%</strong></td>
              <td>$190 – $195 / mo</td>
            </tr>
            <tr>
              <td><strong>Prime</strong></td>
              <td>661 – 780</td>
              <td><strong>6.50% – 8.25%</strong></td>
              <td><strong>8.25% – 10.50%</strong></td>
              <td>$196 – $204 / mo</td>
            </tr>
            <tr>
              <td><strong>Non-Prime</strong></td>
              <td>601 – 660</td>
              <td><strong>9.50% – 12.75%</strong></td>
              <td><strong>12.00% – 15.50%</strong></td>
              <td>$210 – $226 / mo</td>
            </tr>
            <tr>
              <td><strong>Subprime</strong></td>
              <td>501 – 600</td>
              <td><strong>13.50% – 17.50%</strong></td>
              <td><strong>17.00% – 21.50%</strong></td>
              <td>$230 – $251 / mo</td>
            </tr>
            <tr>
              <td><strong>Deep Subprime</strong></td>
              <td>300 – 500</td>
              <td><strong>18.00% – 24.00%+</strong></td>
              <td><strong>22.00% – 29.00%+</strong></td>
              <td>$254 – $290+ / mo</td>
            </tr>
          </tbody>
        </table>
      </div>

      <h3>Lender Comparison: Credit Unions vs. National Commercial Banks vs. Dealership Captive Finance</h3>
      <p>
        Where you secure your financing is nearly as impactful as your credit score. Automotive financing originates across three major institutional categories:
      </p>
      <ul>
        <li>
          <strong>Credit Unions (Recommended):</strong> Member-owned, non-profit institutions that regularly offer APRs 0.75% to 1.50% below national commercial banks. They feature lower origination fees, flexible underwriting for used vehicles, and customer-first prepayment policies.
        </li>
        <li>
          <strong>Captive Dealership Financing (e.g., Ford Motor Credit, Toyota Financial):</strong> Manufacturer-owned lending arms that periodically offer subvented promotional rates (e.g., 0.0%, 1.9%, or 2.9% APR for 36–48 months) on select new models for Tier-1 credit buyers.
        </li>
        <li>
          <strong>Dealership Indirect Lending / Brokerage:</strong> Dealership Finance &amp; Insurance (F&amp;I) managers often submit your application to multiple banks. However, dealers are permitted to add a <strong>"dealer reserve" markup</strong> (typically 1.00% to 2.50% APR above the bank's buy-rate) as dealership profit unless you bring a competitive pre-approval letter.
        </li>
      </ul>
    </article>

    <!-- Section 3: State Sales Tax & Trade-In Credit Rules -->
    <article class="content-card">
      <h2>State-by-State Sales Tax &amp; Trade-In Tax Credit Rules</h2>
      <p>
        One of the most commonly misunderstood elements of vehicle purchase calculations is how trade-in vehicles interact with state and municipal sales tax. In the majority of the United States, trading in a vehicle creates a substantial <strong>sales tax shield</strong>:
      </p>

      <div class="info-callout tip">
        <div class="info-callout-title">&#x1F4B8; The Trade-In Tax Credit Mechanism</div>
        <p>
          In <strong>43 US states</strong>, state law allows you to subtract the value of your trade-in vehicle from the new vehicle's purchase price <em>before</em> computing sales tax.<br>
          <em>Formula:</em> Taxable Base = Vehicle Purchase Price &minus; Trade-In Allowance Value.<br>
          <strong>Example:</strong> Buying a $40,000 SUV with an $10,000 trade-in means you pay sales tax only on $30,000. At a 7% tax rate, you save <strong>$700 in cold cash</strong> compared to selling privately.
        </p>
      </div>

      <h3>States with No Trade-In Tax Credit (Full Price Taxed)</h3>
      <p>
        A minority of jurisdictions do not allow trade-in deductions or impose restrictive caps. In these states, you must pay full sales tax on the total purchase price regardless of trade equity:
      </p>
      <ul>
        <li><strong>California:</strong> Taxes the gross purchase price of the vehicle; zero credit granted for trade-ins.</li>
        <li><strong>Virginia:</strong> Imposes a 4.15% Motor Vehicle Sales and Use Tax (SUT) on the gross sales price without trade deduction.</li>
        <li><strong>Hawaii:</strong> Imposes 4.0%–4.5% General Excise Tax (GET) on gross vehicle transaction value.</li>
        <li><strong>District of Columbia:</strong> Sliding scale vehicle excise tax (up to 10.1%) calculated on gross fair market value.</li>
        <li><strong>Michigan:</strong> Provides a capped trade-in allowance credit (statutorily adjusted, approximately $10,000 max deduction), with remaining amounts taxed at full 6.0%.</li>
      </ul>

      <h3>Zero Vehicle Sales Tax States</h3>
      <p>
        Five states impose no statewide vehicle sales tax whatsoever: <strong>Alaska, Delaware, Montana, New Hampshire, and Oregon</strong> (though Oregon levies a nominal 0.5% Corporate Activity / Privilege Tax on dealers).
      </p>
    </article>

    <!-- Section 4: The 20/4/10 Rule for Car Affordability -->
    <article class="content-card">
      <h2>How Much Car Can You Afford? The 20/4/10 Rule Explained</h2>
      <p>
        To prevent automotive debt from derailing broader financial objectives such as homeownership, emergency savings, and retirement investing, financial advisors widely recommend the <strong>20/4/10 Rule of Car Affordability</strong>:
      </p>

      <div class="rule-grid">
        <div class="rule-box">
          <div class="rule-box-num">20%</div>
          <div class="rule-box-title">Down Payment</div>
          <p class="rule-box-desc">
            Put down at least 20% in cash or net trade-in equity. New vehicles lose 15%–20% of their value in the first 12 months. A 20% down payment ensures you never go underwater.
          </p>
        </div>
        <div class="rule-box">
          <div class="rule-box-num">4 Yrs</div>
          <div class="rule-box-title">Max Financing Term</div>
          <p class="rule-box-desc">
            Limit your loan duration to 48 months (4 years). If you need 72 or 84 months to make the monthly payment fit your budget, the vehicle is simply too expensive for your income.
          </p>
        </div>
        <div class="rule-box">
          <div class="rule-box-num">10%</div>
          <div class="rule-box-title">Gross Monthly Income</div>
          <p class="rule-box-desc">
            Keep your total monthly automotive expenditure (loan payment + comprehensive auto insurance + fuel) under 10% of your gross monthly household income.
          </p>
        </div>
      </div>

      <h3>Worked Affordability Example: $75,000 Household Income</h3>
      <p>
        Consider a household earning a gross salary of <strong>$75,000 per year</strong> ($6,250 per month):
      </p>
      <ul>
        <li><strong>10% Total Transportation Ceiling:</strong> $625.00 per month maximum.</li>
        <li><strong>Estimated Auto Insurance &amp; Fuel:</strong> ~$200.00 per month.</li>
        <li><strong>Maximum Safe Loan Payment:</strong> <strong>$425.00 per month</strong>.</li>
        <li>
          <strong>Target Vehicle Price (48 Months @ 6.5% APR with 20% Down):</strong> Approximately <strong>$22,500 – $24,000</strong>.
        </li>
      </ul>
      <p>
        Purchasing a $45,000 vehicle on this income with an 84-month loan would require over $650/month in loan payments alone, consuming over 15% of gross income and severely restricting financial flexibility.
      </p>
    </article>

    <!-- Section 5: Worked Scenarios -->
    <article class="content-card">
      <h2>Comprehensive Worked Examples: New vs. Used vs. Negative Equity</h2>

      <h3>Scenario A: Brand New $42,000 Crossover SUV (Prime Credit)</h3>
      <p>
        A buyer purchases a new $42,000 SUV in Ohio (5.75% sales tax). They put down $7,000 in cash and trade in an older sedan appraised at $6,000 with no balance owed:
      </p>
      <ul>
        <li><strong>Taxable Base:</strong> $42,000 &minus; $6,000 = $36,000.</li>
        <li><strong>Sales Tax (5.75%):</strong> $2,070.00.</li>
        <li><strong>Net Principal Financed:</strong> $42,000 + $2,070 &minus; $7,000 &minus; $6,000 = <strong>$31,070.00</strong>.</li>
        <li><strong>Loan Terms:</strong> 60 Months at 6.75% APR.</li>
        <li><strong>Monthly Payment:</strong> <strong>$611.75 / mo</strong>.</li>
        <li><strong>Total Interest Paid:</strong> $5,635.00. Total outlay: $49,705.00.</li>
      </ul>

      <h3>Scenario B: Certified Pre-Owned $24,000 Sedan (48-Month Term)</h3>
      <p>
        A buyer opts for a 3-year-old pre-owned vehicle at $24,000 with a 7.5% sales tax rate, putting down 20% ($4,800) cash and zero trade-in:
      </p>
      <ul>
        <li><strong>Sales Tax (7.50%):</strong> $1,800.00.</li>
        <li><strong>Net Principal Financed:</strong> $24,000 + $1,800 &minus; $4,800 = <strong>$21,000.00</strong>.</li>
        <li><strong>Loan Terms:</strong> 48 Months at 7.25% APR.</li>
        <li><strong>Monthly Payment:</strong> <strong>$505.34 / mo</strong>.</li>
        <li><strong>Total Interest Paid:</strong> $3,256.32. Total outlay: $29,056.32.</li>
      </ul>

      <h3>Scenario C: The Negative Equity "Underwater" Roll-In Trap</h3>
      <p>
        A buyer owes $14,000 on their current vehicle, but the dealer only appraises it at $10,000 (a <strong>$4,000 negative equity deficit</strong>). The buyer rolls this unpaid debt into a new $35,000 purchase at 6.5% sales tax:
      </p>
      <div class="info-callout warning">
        <div class="info-callout-title">&#x26A0;&#xFE0F; The Danger of Rolling Over Negative Equity</div>
        <p>
          New vehicle price: $35,000 + Tax: $2,275 + Negative Equity: $4,000 = <strong>$41,275 Financed</strong>.<br>
          The buyer is immediately financing <strong>118% Loan-to-Value (LTV)</strong> on a car that will be worth $28,000 within 12 months. Monthly payment jumps from $585 to $684 over 72 months, costing an extra $1,200 in pure interest on debt from a car they no longer own.
        </p>
      </div>
    </article>

    <!-- Section 6: Dealer F&I Pitfalls -->
    <article class="content-card">
      <h2>5 Dealership Finance &amp; Insurance (F&amp;I) Traps to Avoid</h2>
      <ol>
        <li>
          <strong>"Payment Packing" Focus:</strong> Dealership salespeople frequently ask, <em>"What monthly payment are you looking for?"</em> Once you disclose a payment target (e.g. $600/mo), they extend loan duration from 48 to 72 or 84 months and pack the difference with high-margin back-end products. <em>Rule: Always negotiate the vehicle's out-the-door price first.</em>
        </li>
        <li>
          <strong>Dealer Interest Rate Markup ("Dealer Reserve"):</strong> When a bank approves your financing at 5.50% APR, the dealership F&amp;I office has legal discretion in most states to present you with a contract at 7.50% APR, keeping the 2.00% spread as profit. <em>Rule: Bring a written pre-approval letter from your credit union to benchmark the rate.</em>
        </li>
        <li>
          <strong>Overpriced Extended Warranties &amp; Service Contracts:</strong> F&amp;I managers routinely charge $2,500 to $4,000 for third-party vehicle service contracts that cost the dealer $800 wholesale. If you want mechanical breakdown coverage, purchase it directly from your credit union or insurer for 60% less.
        </li>
        <li>
          <strong>GAP Insurance Markups:</strong> Guaranteed Asset Protection (GAP) covers the shortfall if your car is totaled while you owe more than its market value. Dealerships charge $895 to $1,200 financed into your loan. Your auto insurer (e.g. Progressive, GEICO, State Farm) typically provides GAP endorsement coverage for just $20 to $40 per year.
        </li>
        <li>
          <strong>Spot Delivery / "Yo-Yo" Financing Scams:</strong> The dealer lets you drive off the lot before loan financing is formally finalized. Days later, they call claiming your financing "fell through" and demand a higher interest rate or bigger down payment. <em>Rule: Never take delivery until you have a signed, approved contract from a named lender.</em>
        </li>
      </ol>
    </article>

    <!-- Section 7: Early Payoff & Refinancing -->
    <article class="content-card">
      <h2>How to Pay Off Your Auto Loan Early &amp; Save Thousands</h2>
      <p>
        Because auto loans use simple interest amortization without prepayment penalties, every extra dollar you direct toward the principal immediately reduces future daily interest accruals:
      </p>
      <ul>
        <li>
          <strong>Principal-Only Curtailments:</strong> When making extra payments online or via mail, explicitly designate the additional funds as <em>"Principal Only Reduction."</em> If unlabelled, some lenders hold extra payments in an escrow reserve to advance your next month's due date rather than reducing the balance.
        </li>
        <li>
          <strong>Bi-Weekly Payment Strategy:</strong> Divide your monthly payment in half and pay every two weeks (26 half-payments per year = 13 full monthly payments). This painless method pays off a 60-month loan in roughly 52 months, saving $600 to $1,500 in interest.
        </li>
        <li>
          <strong>Refinancing at Credit Unions:</strong> If your credit score has improved by 40+ points since purchasing the vehicle, or if prevailing interest rates have fallen, refinancing through a local credit union can drop your APR by 2% to 4%, lowering both monthly payments and total remaining interest.
        </li>
      </ul>
    </article>

    <!-- Section 8: Related Calculators -->
    <section class="content-card">
      <h2>Related Finance &amp; Loan Calculators</h2>
      <p>Explore our full suite of precision financial modeling calculators designed for American consumers and business owners:</p>
      <div class="related-grid">
        <a href="/loan-calculators/personal-loan-calculator" class="related-card">
          <span class="related-card-title">&#x1F464; Personal Loan Calculator</span>
          <span class="related-card-desc">Compare unsecured personal loans vs. dealer auto financing for vehicle or debt consolidation needs.</span>
          <span class="related-card-link">Calculate Personal Loan &rarr;</span>
        </a>
        <a href="/loan-calculators/rv-loan-calculator" class="related-card">
          <span class="related-card-title">&#x1F690; RV Loan Calculator</span>
          <span class="related-card-desc">Calculate monthly debt service and extended 10 to 20-year amortization for motorhomes and travel trailers.</span>
          <span class="related-card-link">Calculate RV Loan &rarr;</span>
        </a>
        <a href="/loan-calculators/business-loan-calculator" class="related-card">
          <span class="related-card-title">&#x1F4BC; Business Loan Calculator</span>
          <span class="related-card-desc">Compare commercial equipment and vehicle fleet financing options side-by-side.</span>
          <span class="related-card-link">Compare Business Loans &rarr;</span>
        </a>
        <a href="/loan-calculators/sba-loan-calculator" class="related-card">
          <span class="related-card-title">&#x1F3DB;&#xFE0F; SBA Loan Calculator</span>
          <span class="related-card-desc">Model SBA 7(a) and 504 commercial loans with guaranty fee tiers and 10 to 25-year schedules.</span>
          <span class="related-card-link">Calculate SBA Loan &rarr;</span>
        </a>
        <a href="/real-estate/cap-rate-calculator" class="related-card">
          <span class="related-card-title">&#x1F3E2; Cap Rate Calculator</span>
          <span class="related-card-desc">Evaluate commercial and residential real estate investment yields and capitalization rates.</span>
          <span class="related-card-link">Calculate Cap Rate &rarr;</span>
        </a>
        <a href="/loan-calculators/" class="related-card">
          <span class="related-card-title">&#x1F3E6; All Loan Calculators</span>
          <span class="related-card-desc">Browse our comprehensive directory of loan, mortgage, and personal debt modeling tools.</span>
          <span class="related-card-link">View All Calculators &rarr;</span>
        </a>
      </div>
    </section>

    <!-- Section 9: FAQs -->
    <section class="content-card" id="faq">
      <h2>Frequently Asked Questions About Auto Loans</h2>
      <div class="faq-list">

        <div class="faq-item">
          <div class="faq-q">What is the average auto loan interest rate in <?php echo $currentYear; ?>?</div>
          <div class="faq-a">
            In <?php echo $currentYear; ?>, average new car loan interest rates range from <strong>5.25% to 6.85% APR</strong> for super-prime borrowers (780+ FICO) and <strong>6.75% to 8.95%</strong> for prime borrowers (660–779). Used car loan interest rates run approximately 1.5% to 3.0% higher, averaging 7.50% to 11.50% for prime credit and 14.00% to 21.00%+ for subprime borrowers.
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">How does a trade-in tax credit work on a car purchase?</div>
          <div class="faq-a">
            In 43 US states, state tax codes allow you to deduct the value of your trade-in vehicle from the new vehicle's negotiated purchase price before sales tax is computed. For example, trading in an $8,000 vehicle on a $38,000 purchase reduces your taxable base to $30,000, saving you $560 in sales tax at a 7% tax rate. However, California, Virginia, Hawaii, District of Columbia, and Michigan (capped) tax the full vehicle price regardless of trade-in value.
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">What happens if I have negative equity on my trade-in?</div>
          <div class="faq-a">
            If you owe more on your existing car loan than the dealer offers for trade-in (negative equity or being "underwater"), the remaining unpaid balance is rolled into your new auto loan. This increases your total amount financed, raises monthly payments, and puts you at risk of being upside-down on your new vehicle immediately.
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">What is the 20/4/10 rule for car buying?</div>
          <div class="faq-a">
            The 20/4/10 rule is a conservative personal finance standard: put down at least <strong>20% in cash/trade equity</strong>, finance the vehicle for no longer than <strong>4 years (48 months)</strong>, and ensure total monthly vehicle operating costs (loan payment + insurance + fuel) do not exceed <strong>10% of your gross monthly household income</strong>.
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">Is a 72-month or 84-month auto loan ever a good idea?</div>
          <div class="faq-a">
            Long 72-month and 84-month auto loans lower your monthly payment but drastically increase lifetime interest charges — often adding $2,500 to $6,000 in unnecessary interest. Furthermore, vehicles depreciate faster than the loan balance amortizes, leaving borrowers underwater for up to 4 to 5 years.
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">Should I finance through a dealership or get pre-approved at a credit union?</div>
          <div class="faq-a">
            Always secure a loan pre-approval from a local credit union or bank before negotiating at the dealership. Credit unions typically offer APRs 0.75% to 1.50% lower than commercial banks. A pre-approval prevents dealers from marking up your interest rate ("dealer reserve markup") while giving you leverage to qualify for promotional manufacturer 0% to 1.9% captive financing if available.
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">How much should I put down on a new or used vehicle?</div>
          <div class="faq-a">
            Financial advisors recommend a minimum down payment of 20% for new vehicles (to offset immediate 15% to 20% first-year depreciation) and at least 10% to 15% for pre-owned vehicles. A substantial down payment protects against negative equity, lowers borrowing costs, and helps qualify for tier-1 interest rate pricing.
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-q">Can I pay off my auto loan early without penalty?</div>
          <div class="faq-a">
            The vast majority of standard consumer auto loans in the United States use simple interest amortization with no prepayment penalties. Making principal-only curtailments or switching to bi-weekly payments reduces your principal balance faster, shortening loan duration and saving hundreds to thousands in cumulative interest.
          </div>
        </div>

      </div>
    </section>

  </div>

</div>
</main>

<script>
// ─── Interactive Auto Loan Engine JavaScript ──────────────────────────────────
(function() {
  'use strict';

  // DOM Elements
  const elPrice        = document.getElementById('vehiclePrice');
  const elDown         = document.getElementById('downPayment');
  const elDownPctBadge = document.getElementById('downPctBadge');
  const elTradeVal     = document.getElementById('tradeValue');
  const elTradeOwed    = document.getElementById('tradeOwed');
  const elSalesTax     = document.getElementById('salesTaxRate');
  const elTaxTreatment = document.getElementById('taxTreatment');
  const elApr          = document.getElementById('interestRate');
  const elLoanTerm     = document.getElementById('loanTerm');
  const elTermYearsLbl = document.getElementById('termYearsLabel');
  const elIncome       = document.getElementById('monthlyIncome');
  const resetBtn       = document.getElementById('resetBtn');

  // Term pill buttons
  const termPills = document.querySelectorAll('.term-pill-btn');

  // Output Elements
  const resMonthly     = document.getElementById('resMonthlyPayment');
  const resTermSub     = document.getElementById('resTermSub');
  const resFinanced    = document.getElementById('resFinanced');
  const resTotalInt    = document.getElementById('resTotalInterest');
  const resSalesTax    = document.getElementById('resSalesTax');
  const resTotalCost   = document.getElementById('resTotalCost');

  // Affordability Elements
  const affordCard     = document.getElementById('affordCard');
  const affordBadge    = document.getElementById('affordBadge');
  const affordBarFill  = document.getElementById('affordBarFill');
  const affordText     = document.getElementById('affordText');

  // Breakdown Elements
  const bdPrice        = document.getElementById('bdPrice');
  const bdTaxPct       = document.getElementById('bdTaxPct');
  const bdTax          = document.getElementById('bdTax');
  const bdDown         = document.getElementById('bdDown');
  const bdTrade        = document.getElementById('bdTrade');
  const bdFinanced     = document.getElementById('bdFinanced');

  // Comparison Matrix & Schedule
  const matrixBody     = document.getElementById('matrixBody');
  const toggleSchedBtn = document.getElementById('toggleScheduleBtn');
  const schedContainer = document.getElementById('amortizationSchedule');
  const scheduleBody   = document.getElementById('scheduleBody');

  // Format Helper
  function fmtUSD(val) {
    return '$' + Math.round(val).toLocaleString('en-US');
  }
  function fmtUSDCents(val) {
    return '$' + Number(val).toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
  }

  // Core Payment Formula: P * [ r(1+r)^n ] / [ (1+r)^n - 1 ]
  function calcMonthlyPayment(principal, annualRate, months) {
    if (principal <= 0) return 0;
    if (annualRate <= 0) return principal / months;
    const r = (annualRate / 100) / 12;
    const n = months;
    return (principal * (r * Math.pow(1 + r, n))) / (Math.pow(1 + r, n) - 1);
  }

  function calculate() {
    const price    = Math.max(0, parseFloat(elPrice.value) || 0);
    const down     = Math.max(0, parseFloat(elDown.value) || 0);
    const tradeVal = Math.max(0, parseFloat(elTradeVal.value) || 0);
    const tradeOwe = Math.max(0, parseFloat(elTradeOwed.value) || 0);
    const taxRate  = Math.max(0, parseFloat(elSalesTax.value) || 0);
    const apr      = Math.max(0, parseFloat(elApr.value) || 0);
    const term     = parseInt(elLoanTerm.value, 10) || 60;
    const income   = Math.max(0, parseFloat(elIncome.value) || 0);
    const taxRule  = elTaxTreatment.value;

    // 1. Update Down Payment Percentage Badge
    if (price > 0) {
      const downPct = ((down / price) * 100).toFixed(1);
      elDownPctBadge.textContent = downPct + '% of price';
    } else {
      elDownPctBadge.textContent = '0%';
    }

    // 2. Compute Net Trade Equity (Can be positive or negative)
    const netTradeEquity = tradeVal - tradeOwe;

    // 3. Compute Sales Tax
    let taxableBase = price;
    if (taxRule === 'credit') {
      taxableBase = Math.max(0, price - tradeVal);
    }
    const salesTaxAmount = taxableBase * (taxRate / 100);

    // 4. Compute Amount Financed
    // Financed = Price + Sales Tax - Down Payment - Net Trade Equity
    const financed = Math.max(0, price + salesTaxAmount - down - netTradeEquity);

    // 5. Compute Monthly Payment & Total Interest
    const monthlyPmt    = calcMonthlyPayment(financed, apr, term);
    const totalPayments = monthlyPmt * term;
    const totalInterest = Math.max(0, totalPayments - financed);
    const totalCost     = down + (netTradeEquity > 0 ? tradeVal : tradeOwe) + totalPayments;

    // 6. Update Hero & Key Metric Cards
    resMonthly.textContent   = fmtUSDCents(monthlyPmt);
    resTermSub.textContent   = 'Based on ' + term + '-Month Term at ' + apr.toFixed(2) + '% APR';
    resFinanced.textContent  = fmtUSD(financed);
    resTotalInt.textContent  = fmtUSD(totalInterest);
    resSalesTax.textContent  = fmtUSD(salesTaxAmount);
    resTotalCost.textContent = fmtUSD(totalCost);

    // 7. Update Breakdown List
    bdPrice.textContent    = fmtUSDCents(price);
    bdTaxPct.textContent   = taxRate.toFixed(1) + '%';
    bdTax.textContent      = fmtUSDCents(salesTaxAmount);
    bdDown.textContent     = (down > 0 ? '−' : '') + fmtUSDCents(down);
    if (netTradeEquity >= 0) {
      bdTrade.textContent = (netTradeEquity > 0 ? '−' : '') + fmtUSDCents(netTradeEquity);
      bdTrade.style.color = 'var(--accent-emerald)';
    } else {
      bdTrade.textContent = '+' + fmtUSDCents(Math.abs(netTradeEquity)) + ' (Underwater Owed)';
      bdTrade.style.color = 'var(--accent-rose)';
    }
    bdFinanced.textContent = fmtUSDCents(financed);

    // 8. Affordability Assessment (20/4/10 Rule)
    if (income > 0) {
      const pmtRatio = (monthlyPmt / income) * 100;
      affordBadge.textContent = pmtRatio.toFixed(1) + '% of Income';
      const fillWidth = Math.min(Math.max(pmtRatio * 5, 5), 100);
      affordBarFill.style.width = fillWidth + '%';

      affordCard.className = 'affordability-card';
      if (pmtRatio <= 10.0) {
        affordText.innerHTML = 'Your car payment takes <strong>' + pmtRatio.toFixed(1) + '%</strong> of your gross monthly income, comfortably below the conservative 10% ceiling.';
      } else if (pmtRatio <= 15.0) {
        affordCard.classList.add('caution');
        affordText.innerHTML = 'Your car payment takes <strong>' + pmtRatio.toFixed(1) + '%</strong> of income. This exceeds the 10% guideline; consider a larger down payment or a less expensive trim.';
      } else {
        affordCard.classList.add('warning');
        affordText.innerHTML = 'Your car payment consumes <strong>' + pmtRatio.toFixed(1) + '%</strong> of your gross income. This poses significant risk of budget strain.';
      }
    } else {
      affordBadge.textContent = 'Enter Income Above';
      affordBarFill.style.width = '0%';
      affordText.innerHTML = 'Enter your gross monthly household income on the left to activate real-time 20/4/10 affordability assessment.';
    }

    // 9. Generate Multi-Term Comparison Matrix
    renderMatrix(financed, apr, term);

    // 10. Generate Amortization Table
    renderSchedule(financed, apr, term, monthlyPmt);
  }

  function renderMatrix(financed, apr, selectedTerm) {
    const terms = [36, 48, 60, 72, 84];
    const basePmt48 = calcMonthlyPayment(financed, apr, 48);
    const baseTotalCost48 = basePmt48 * 48;

    let html = '';
    terms.forEach(function(t) {
      const pmt = calcMonthlyPayment(financed, apr, t);
      const totalPmt = pmt * t;
      const totalInt = Math.max(0, totalPmt - financed);
      const isSelected = (t === selectedTerm);
      const deltaVs48 = totalPmt - baseTotalCost48;

      let deltaStr = '$0 (Baseline)';
      if (t < 48) {
        deltaStr = '<span style="color:var(--accent-emerald);">−' + fmtUSD(Math.abs(deltaVs48)) + ' Interest</span>';
      } else if (t > 48) {
        deltaStr = '<span style="color:var(--accent-rose);">+' + fmtUSD(deltaVs48) + ' Extra Cost</span>';
      }

      html += '<tr class="' + (isSelected ? 'highlight-row' : '') + '">';
      html += '<td>' + t + ' Months (' + (t / 12).toFixed(1) + ' Yrs)' + (isSelected ? ' &#x2714;' : '') + '</td>';
      html += '<td>' + fmtUSDCents(pmt) + ' / mo</td>';
      html += '<td style="color:var(--accent-rose);">' + fmtUSD(totalInt) + '</td>';
      html += '<td>' + fmtUSD(totalPmt) + '</td>';
      html += '<td>' + deltaStr + '</td>';
      html += '</tr>';
    });
    matrixBody.innerHTML = html;
  }

  function renderSchedule(principal, annualRate, totalMonths, monthlyPmt) {
    if (principal <= 0 || monthlyPmt <= 0) {
      scheduleBody.innerHTML = '<tr><td colspan="4" style="text-align:center;color:var(--text-light);">No loan balance to amortize.</td></tr>';
      return;
    }

    const monthlyRate = (annualRate / 100) / 12;
    let balance = principal;
    let html = '';
    let currentYear = 1;
    let yearPrincipal = 0;
    let yearInterest = 0;

    for (let m = 1; m <= totalMonths; m++) {
      const interestPmt = balance * monthlyRate;
      const principalPmt = Math.min(balance, monthlyPmt - interestPmt);
      balance = Math.max(0, balance - principalPmt);

      yearPrincipal += principalPmt;
      yearInterest  += interestPmt;

      if (m % 12 === 0 || m === totalMonths) {
        html += '<tr>';
        html += '<td><strong>Year ' + currentYear + '</strong> (Mo ' + (m <= 12 ? 1 : m - (m % 12 === 0 ? 11 : (m % 12) - 1)) + '–' + m + ')</td>';
        html += '<td>' + fmtUSD(yearPrincipal) + '</td>';
        html += '<td style="color:var(--accent-rose);">' + fmtUSD(yearInterest) + '</td>';
        html += '<td><strong>' + fmtUSD(balance) + '</strong></td>';
        html += '</tr>';

        currentYear++;
        yearPrincipal = 0;
        yearInterest = 0;
      }
    }
    scheduleBody.innerHTML = html;
  }

  // Event Listeners
  const inputs = [elPrice, elDown, elTradeVal, elTradeOwed, elSalesTax, elApr, elIncome, elTaxTreatment];
  inputs.forEach(function(inp) {
    inp.addEventListener('input', calculate);
    inp.addEventListener('change', calculate);
  });

  // Term pill button selection
  termPills.forEach(function(btn) {
    btn.addEventListener('click', function() {
      termPills.forEach(function(b) { b.classList.remove('active'); });
      btn.classList.add('active');
      const termVal = btn.getAttribute('data-term');
      elLoanTerm.value = termVal;
      elTermYearsLbl.textContent = (parseInt(termVal, 10) / 12).toFixed(1) + ' Years';
      calculate();
    });
  });

  // Reset defaults
  resetBtn.addEventListener('click', function() {
    elPrice.value        = '38000';
    elDown.value         = '6000';
    elTradeVal.value     = '5000';
    elTradeOwed.value    = '0';
    elSalesTax.value     = '6.5';
    elTaxTreatment.value = 'credit';
    elApr.value          = '6.85';
    elLoanTerm.value     = '60';
    elTermYearsLbl.textContent = '5.0 Years';
    elIncome.value       = '6500';

    termPills.forEach(function(b) {
      if (b.getAttribute('data-term') === '60') {
        b.classList.add('active');
      } else {
        b.classList.remove('active');
      }
    });

    calculate();
  });

  // Toggle Amortization Schedule
  toggleSchedBtn.addEventListener('click', function() {
    const isHidden = (schedContainer.style.display === 'none' || schedContainer.style.display === '');
    if (isHidden) {
      schedContainer.style.display = 'block';
      toggleSchedBtn.innerHTML = '<span>&#x25B2;</span> Hide Amortization Schedule';
    } else {
      schedContainer.style.display = 'none';
      toggleSchedBtn.innerHTML = '<span>&#x1F4C5;</span> View Full Amortization Schedule';
    }
  });

  // Initial Calculation
  calculate();
})();
</script>

<?php require_once '../includes/footer.php'; ?>