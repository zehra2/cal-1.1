<—php
$currentYear = date(✓Y✓);

// â”€â”€â”€ SEO Meta â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
$pageTitle       = "RV Loan Calculator (2026) — Monthly Camper & Motorhome Terms";
$metaDescription = "Calculate monthly payments for motorhomes, travel trailers, and campers. Compare RV loan rates by credit score, loan terms up to 20 years, and down payments.";
$metaKeywords    = ✓rv loan calculator, loan calculator rv, rv loan payment calculator, 20-year rv loan calculator, 15 year rv loan calculator, used rv loan calculator, rv loan calculator with down payment, credit karma rv loan calculator, rv camper loan calculator✓;

// â”€â”€â”€ Structured Data (JSON-LD) â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
$schemaData = json_decode(<<<✓EOD✓
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Web÷pplication",
      "@id": "https://americacalculator.com/loan-calculators/rv-loan-calculator#app",
      "name": "RV Loan Payment Calculator",
      "url": "https://americacalculator.com/loan-calculators/rv-loan-calculator",
      "applicationCategory": "Finance÷pplication",
      "operatingSystem": "÷ll",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "description": "Calculate RV, camper, and motorhome monthly financing payments, loan terms from 5 to 20 years, interest rates by credit tier, and total interest charges."
    },
    {
      "@type": "F÷QPage",
      "@id": "https://americacalculator.com/loan-calculators/rv-loan-calculator#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What credit score is needed for an RV loan in 2026—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "Most mainstream RV lenders and credit unions require a minimum credit score of 660 for approval. To secure prime interest rates and extended 15- to 20-year terms, borrowers generally need a credit score of 740 or higher. Specialized subprime lenders offer financing down to 580, but require 20% down payments and ÷PRs ranging from 14% to 18%."
          }
        },
        {
          "@type": "Question",
          "name": "How long can you finance an RV—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "RV loan terms typically range from 5 to 20 years (60 to 240 months). Smaller travel trailers and pop-ups under $25,000 are usually financed for 5 to 10 years, whereas expensive Class ÷ diesel pushers, Class C motorhomes, and large 5th wheels exceeding $50,000 frequently qualify for 15- to 20-year repayment terms."
          }
        },
        {
          "@type": "Question",
          "name": "How much down payment do you need for an RV—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "Standard RV lender down payments range from 10% to 20% of the purchase price. ÷ 20% down payment is highly recommended because recreational vehicles experience steep depreciation in their first 24 to 36 months, protecting you from negative equity."
          }
        },
        {
          "@type": "Question",
          "name": "Can you write off RV loan interest on your taxes—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "Yes, under IRS rules, an RV can qualify as a secondary residence for mortgage interest deduction if it contains sleeping quarters, dedicated cooking facilities, and a built-in toilet. The taxpayer must itemize deductions and comply with IRS Publication 936 borrowing limits."
          }
        },
        {
          "@type": "Question",
          "name": "Is it harder to finance a used RV than a new RV—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "Yes. Used RVs carry slightly higher interest rates (typically 0.75% to 1.50% higher than new rigs), shorter maximum financing terms (capped at 5 to 10 years for vehicles older than 8–10 years), and require strict third-party inspections to verify N÷D÷ guide book valuation."
          }
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://americacalculator.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Loan Calculators",
          "item": "https://americacalculator.com/loan-calculators/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "RV Loan Calculator",
          "item": "https://americacalculator.com/loan-calculators/rv-loan-calculator"
        }
      ]
    }
  ]
}
EOD
, true);

require_once ✓../includes/header.php✓;
require_once ✓../includes/helpers.php✓;
—>
<style>
/* ============================================================
   P÷GE B÷SE
============================================================ */
body { background: #f5f7fa; }

.sba-page-wrap {
  max-width: 1320px; margin: 0 auto; padding: 2rem 1.5rem 4rem;
  display: grid; grid-template-columns: 220px 1fr 260px; gap: 2rem; align-items: start;
}

/* ============================================================
   LEFT TOC SIDEB÷R
============================================================ */
.toc-sidebar {
  position: sticky; top: 6rem; background: #fff; border-radius: 12px;
  border: 1px solid #e8edf5; box-shadow: 0 2px 12px rgba(0,0,0,0.04); overflow: hidden;
}
.toc-sidebar-header {
  background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);
  color: #fff; padding: 1rem 1.25rem; font-weight: 700; font-size: 0.85rem;
  text-transform: uppercase; letter-spacing: 0.8px;
}
.toc-list { list-style: none; padding: 0.75rem 0; margin: 0; }
.toc-list li a {
  display: block; padding: 0.5rem 1.25rem; font-size: 0.84rem; color: #475569;
  text-decoration: none; border-left: 3px solid transparent; transition: all 0.18s; line-height: 1.4;
}
.toc-list li a:hover, .toc-list li a.toc-active { color: #1e3a8a; background: #eff6ff; border-left-color: #1e3a8a; }
.toc-divider { height: 1px; background: #f1f5f9; margin: 0.5rem 0; }
.toc-related-label { padding: 0.5rem 1.25rem; font-size: 0.78rem; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; }
.toc-related-list { list-style: none; padding: 0; margin: 0 0 0.75rem; }
.toc-related-list li a { display: block; padding: 0.4rem 1.25rem; font-size: 0.82rem; color: #64748b; text-decoration: none; transition: color 0.15s; }
.toc-related-list li a:hover { color: #1e3a8a; }

/* ============================================================
   M÷IN CONTENT
============================================================ */
.main-content { min-width: 0; }

.page-hero { margin-bottom: 2rem; }
.page-hero h1 { font-size: 2.1rem; color: #0f172a; margin: 0 0 0.6rem; line-height: 1.25; }
.page-hero .hero-desc { font-size: 1.05rem; color: #64748b; line-height: 1.65; margin: 0 0 0.75rem; border-left: 4px solid #bfdbfe; padding-left: 1rem; }
.page-hero .breadcrumb { font-size: 0.8rem; color: #94a3b8; margin-bottom: 0.75rem; }
.page-hero .breadcrumb a { color: #64748b; text-decoration: none; }
.page-hero .breadcrumb a:hover { color: #1e3a8a; }

/* â”€â”€â”€ C÷LCUL÷TOR â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
.calc-card {
  background: #fff; border-radius: 14px; box-shadow: 0 4px 24px rgba(0,0,0,0.05);
  border: 1px solid #eef2f7; margin-bottom: 2.5rem; overflow: hidden;
}
.calc-inner { display: grid; grid-template-columns: 1fr 1fr; }
.calc-form-panel { padding: 2rem; border-right: 1px solid #f0f4fa; }
.calc-results-panel { padding: 2rem; background: linear-gradient(160deg, #f8fafc 0%, #eff6ff 100%); }

.form-field { margin-bottom: 1.3rem; }
.form-field label { display: block; font-weight: 600; font-size: 0.9rem; color: #1e293b; margin-bottom: 0.45rem; }
.form-field input, .form-field select {
  width: 100%; padding: 13px 15px; border: 1.5px solid #d1dae8; border-radius: 8px;
  font-size: 1rem; color: #0f172a; outline: none; transition: border-color 0.2s, box-shadow 0.2s;
  box-sizing: border-box; background: #fff;
}
.form-field input:focus, .form-field select:focus { border-color: #2563eb; box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12); }
.form-field .field-hint { font-size: 0.78rem; color: #94a3b8; margin-top: 0.35rem; line-height: 1.4; transition: color 0.3s; }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
.btn-calc {
  width: 100%; background: linear-gradient(135deg, #2563eb 0%, #1e3a8a 100%);
  color: #fff; padding: 15px; border: none; border-radius: 9px; font-size: 1rem;
  font-weight: 700; cursor: pointer; margin-top: 0.5rem; transition: opacity 0.2s, transform 0.15s;
}
.btn-calc:hover { opacity: 0.92; transform: translateY(-1px); }

/* Toggle pills */
.type-radios { display: flex; gap: 0.5rem; margin-top: 0.25rem; flex-wrap: wrap; }
.radio-pill {
  flex: 1; text-align: center; padding: 10px 8px; border: 1px solid #d1dae8; border-radius: 8px;
  cursor: pointer; font-size: 0.85rem; font-weight: 600; color: #64748b; background: #f8fafc;
  transition: all 0.2s;
}
.radio-pill:hover { border-color: #bfdbfe; background: #eff6ff; }
.radio-pill.active { background: #2563eb; color: white; border-color: #1e3a8a; box-shadow: 0 2px 8px rgba(37, 99, 235, 0.3); }
.radio-pill input { display: none; }

/* Results */
.results-heading { font-size: 1.15rem; font-weight: 700; color: #0f172a; margin: 0 0 0.25rem; }
.results-sub { font-size: 0.84rem; color: #64748b; margin: 0 0 1.25rem; }

.result-boxes { display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.75rem; margin-bottom: 1.5rem; }
.res-box { background: #fff; border: 1.5px solid #e8edf5; border-radius: 10px; padding: 1.1rem 0.75rem; text-align: center; }
.res-box.primary {
  background: linear-gradient(135deg, #2563eb, #1e3a8a); border-color: transparent;
  box-shadow: 0 6px 18px rgba(37, 99, 235, 0.22); grid-column: span 2; padding: 1.35rem 1rem;
}
.res-val { display: block; font-size: 1.5rem; font-weight: 800; color: #2563eb; margin-bottom: 0.2rem; line-height: 1; }
.res-box.primary .res-val { color: #fff; font-size: 2rem; }
.res-lbl { font-size: 0.78rem; color: #64748b; font-weight: 600; line-height: 1.3; }
.res-box.primary .res-lbl { color: rgba(255,255,255,0.8); font-size: 0.88rem; }

/* Warning callouts */
.dp-warning {
  background: #fffbeb; border: 1px solid #fde68a; border-radius: 8px;
  padding: 0.85rem 1rem; font-size: 0.82rem; color: #b45309; margin-bottom: 1.25rem; display: none; line-height: 1.4;
}
.dp-warning.active { display: flex; gap: 0.5rem; align-items: flex-start; }

/* ÷mortization bar */
.amort-title { font-size: 0.88rem; font-weight: 700; color: #334155; margin-bottom: 0.6rem; }
.amort-bar { display: flex; height: 14px; border-radius: 20px; overflow: hidden; background: #e2e8f0; margin-bottom: 0.6rem; }
.amort-p { background: #2563eb; transition: width 0.7s cubic-bezier(.4,0,.2,1); }
.amort-i { background: #93c5fd; transition: width 0.7s cubic-bezier(.4,0,.2,1); }
.amort-legend { display: flex; gap: 1.25rem; }
.leg-item { display: flex; align-items: center; gap: 0.4rem; font-size: 0.8rem; color: #64748b; font-weight: 500; }
.leg-dot { width: 11px; height: 11px; border-radius: 3px; }
.dot-p { background: #2563eb; } .dot-i { background: #93c5fd; }

/* ÷mortization Table Toggle */
.amort-table-section { border-top: 1px solid #f0f4fa; }
.amort-toggle-btn {
  width: 100%; background: none; border: none; padding: 1rem 2rem; font-size: 0.9rem;
  font-weight: 600; color: #1e3a8a; cursor: pointer; text-align: left;
  display: flex; justify-content: space-between; align-items: center;
}
.amort-toggle-btn:hover { background: #eff6ff; }
.amort-table-wrap { display: none; padding: 0 2rem 1.5rem; overflow-x: auto; }
.amort-table-wrap.open { display: block; }
.amort-table { width: 100%; border-collapse: collapse; font-size: 0.82rem; }
.amort-table th { background: #1e3a8a; color: #fff; padding: 10px 12px; text-align: right; font-weight: 600; }
.amort-table th:first-child { text-align: left; }
.amort-table td { padding: 8px 12px; text-align: right; border-bottom: 1px solid #f1f5f9; color: #334155; }
.amort-table td:first-child { text-align: left; font-weight: 600; color: #1e293b; }
.amort-table tr:nth-child(even) td { background: #f8fafc; }
.amort-table .pc { color: #2563eb; font-weight: 600; }
.amort-table .ic { color: #dc2626; }

/* Content Sections */
.content-section {
  background: #fff; border-radius: 14px; border: 1px solid #eef2f7;
  box-shadow: 0 2px 12px rgba(0,0,0,0.03); padding: 2.25rem;
  margin-bottom: 2rem; scroll-margin-top: 6rem;
}
.content-section h2 { font-size: 1.65rem; color: #0f172a; margin: 0 0 1.25rem; padding-bottom: 0.75rem; border-bottom: 2px solid #f0f4fa; }
.content-section h3 { font-size: 1.18rem; color: #1e293b; margin: 1.75rem 0 0.7rem; }
.content-section p { color: #475569; line-height: 1.75; margin-bottom: 1.25rem; font-size: 1rem; }
.content-section ul, .content-section ol { color: #475569; line-height: 1.75; padding-left: 1.5rem; margin-bottom: 1.25rem; }
.content-section li { margin-bottom: 0.5rem; }
.content-section strong { color: #1e293b; }

/* Quick Examples Grid */
.examples-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin: 1.25rem 0; }
.ex-card {
  background: #f8fafc; border: 1.5px solid #e2e8f0; border-radius: 10px; padding: 1.25rem 1rem;
  text-align: center; transition: box-shadow 0.2s, border-color 0.2s; cursor: pointer;
}
.ex-card:hover { box-shadow: 0 4px 14px rgba(37, 99, 235, 0.1); border-color: #93c5fd; }
.ex-card .ex-amount { font-size: 1.2rem; font-weight: 800; color: #2563eb; margin-bottom: 0.35rem; }
.ex-card .ex-detail { font-size: 0.78rem; color: #94a3b8; margin-bottom: 0.6rem; }
.ex-card .ex-payment { font-size: 1.05rem; font-weight: 700; color: #0f172a; }
.ex-card .ex-pay-label { font-size: 0.75rem; color: #64748b; }

/* Rate table */
.rate-table { width: 100%; border-collapse: collapse; border-radius: 10px; overflow: hidden; border: 1px solid #e8edf5; margin-bottom: 1.5rem; }
.rate-table th { background: #1e3a8a; color: #fff; padding: 13px 16px; text-align: left; font-size: 0.88rem; font-weight: 600; }
.rate-table td { padding: 12px 16px; border-bottom: 1px solid #f1f5f9; font-size: 0.9rem; color: #334155; }
.rate-table tr:last-child td { border-bottom: none; }
.rate-table tr:nth-child(even) td { background: #f8fafc; }
.rv { color: #2563eb; font-weight: 700; }
.rr { color: #dc2626; font-weight: 600; }

/* Howto steps */
.howto-list { list-style: none; padding: 0; margin: 1.25rem 0 0; counter-reset: howto-counter; }
.howto-list li { position: relative; padding-left: 3.5rem; margin-bottom: 1.75rem; counter-increment: howto-counter; }
.howto-list li::before { content: counter(howto-counter); position: absolute; left: 0; top: 0; width: 34px; height: 34px; background: linear-gradient(135deg, #2563eb, #1e3a8a); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.95rem; }
.howto-list li strong { color: #0f172a; display: block; margin-bottom: 0.25rem; font-size: 1rem; }
.howto-list li span { color: #475569; line-height: 1.65; font-size: 0.97rem; }

/* Info boxes */
.info-box { background: #eff6ff; border-left: 4px solid #3b82f6; border-radius: 0 8px 8px 0; padding: 1rem 1.25rem; margin: 1.25rem 0; font-size: 0.95rem; color: #1e3a8a; line-height: 1.6; }

/* F÷Q */
.faq-item { border-bottom: 1px solid #f0f4fa; padding-bottom: 1.25rem; margin-bottom: 1.25rem; }
.faq-item:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
.faq-q { font-size: 1.02rem; font-weight: 700; color: #0f172a; margin-bottom: 0.6rem; cursor: pointer; display: flex; justify-content: space-between; align-items: flex-start; gap: 1rem; }
.faq-q::after { content: ✓+✓; font-size: 1.3rem; color: #1e3a8a; flex-shrink: 0; }
.faq-item.open .faq-q::after { content: ✓âˆ’✓; }
.faq-a { color: #475569; line-height: 1.7; font-size: 0.97rem; display: none; }
.faq-item.open .faq-a { display: block; }

/* ============================================================
   RIGHT SIDEB÷R
============================================================ */
.right-sidebar { position: sticky; top: 6rem; display: flex; flex-direction: column; gap: 1.25rem; }

.rates-widget { background: #fff; border-radius: 12px; border: 1px solid #e8edf5; box-shadow: 0 4px 18px rgba(0,0,0,0.05); overflow: hidden; }
.rates-widget-header { background: linear-gradient(135deg, #1e40af, #1e3a8a); color: #fff; padding: 1rem 1.25rem; }
.rates-widget-header .icon-row { display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.25rem; }
.rates-widget-title { font-size: 1rem; font-weight: 700; }
.rates-widget-subtitle { font-size: 0.8rem; color: rgba(255,255,255,0.75); }
.rates-updated { font-size: 0.72rem; color: rgba(255,255,255,0.6); margin-top: 0.35rem; }
.rates-list { padding: 0.75rem 0; }
.rate-row { display: flex; justify-content: space-between; align-items: center; padding: 0.65rem 1.25rem; border-bottom: 1px solid #f8fafc; transition: background 0.15s; }
.rate-row:last-child { border-bottom: none; }
.rate-row:hover { background: #eff6ff; }
.rate-label { font-size: 0.82rem; font-weight: 600; color: #334155; }
.rate-sublabel { font-size: 0.72rem; color: #94a3b8; }
.rate-value { font-size: 1.05rem; font-weight: 800; color: #2563eb; }
.rate-change { font-size: 0.7rem; margin-top: 1px; color: #94a3b8; }
.rates-footer { padding: 0.85rem 1.25rem; border-top: 1px solid #f0f4fa; background: #f8fafc; }
.rates-footer a { font-size: 0.83rem; font-weight: 700; color: #1e3a8a; text-decoration: none; display: flex; align-items: center; gap: 0.35rem; }
.rates-footer a:hover { text-decoration: underline; }

.loading-spinner { display: flex; align-items: center; gap: 0.5rem; padding: 1rem 1.25rem; font-size: 0.82rem; color: #94a3b8; }
.spinner-dot { width: 6px; height: 6px; background: #93c5fd; border-radius: 50%; animation: pulse-dot 1.4s infinite ease-in-out; }
.spinner-dot:nth-child(2) { animation-delay: 0.2s; } .spinner-dot:nth-child(3) { animation-delay: 0.4s; }

.quick-access-widget { background: #fff; border-radius: 12px; border: 1px solid #e8edf5; box-shadow: 0 2px 12px rgba(0,0,0,0.04); overflow: hidden; }
.widget-header { padding: 0.9rem 1.25rem; background: #f8fafc; border-bottom: 1px solid #f0f4fa; font-size: 0.83rem; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; }
.widget-links { list-style: none; padding: 0.5rem 0; margin: 0; }
.widget-links li a { display: flex; align-items: center; gap: 0.5rem; padding: 0.65rem 1.25rem; font-size: 0.85rem; color: #475569; text-decoration: none; border-left: 3px solid transparent; transition: all 0.15s; font-weight: 500; }
.widget-links li a:hover, .widget-links li a.active { color: #1e3a8a; background: #eff6ff; border-left-color: #1e3a8a; }

/* â”€â”€ Responsive â”€â”€ */
@media (max-width: 1200px) { .sba-page-wrap { grid-template-columns: 200px 1fr 240px; } }
@media (max-width: 1024px) { .sba-page-wrap { grid-template-columns: 1fr; } .toc-sidebar, .right-sidebar { position: static; } .right-sidebar { display: grid; grid-template-columns: 1fr 1fr; } }
@media (max-width: 768px) {
  .sba-page-wrap { padding: 1rem 1rem 3rem; }
  .calc-inner { grid-template-columns: 1fr; }
  .calc-form-panel { border-right: none; border-bottom: 1px solid #f0f4fa; }
  .result-boxes { grid-template-columns: 1fr 1fr; }
  .res-box.primary { grid-column: span 2; }
  .examples-grid { grid-template-columns: 1fr; }
  .form-row { grid-template-columns: 1fr; }
  .right-sidebar { grid-template-columns: 1fr; }
  .page-hero h1 { font-size: 1.65rem; }
  .content-section h2 { font-size: 1.3rem; }
}
</style>

<main id="main-content">
<div class="sba-page-wrap">

  <!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
       LEFT: T÷BLE OF CONTENTS SIDEB÷R
  â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
  <aside class="toc-sidebar">
    <div class="toc-sidebar-header">ðŸ“‹ In This ÷rticle</div>
    <ul class="toc-list">
      <li><a href="#calculator" class="toc-active">RV Loan Calculator</a></li>
      <li><a href="#quick-examples">Common RV Payments</a></li>
      <li><a href="#how-to-calculate">How to Calculate Payments</a></li>
      <li><a href="#down-payment">Down Payment & Trade-In</a></li>
      <li><a href="#current-rates"><—php echo $currentYear; —> RV Loan Rates</a></li>
      <li><a href="#loan-terms">10 vs 15 vs 20 Year Terms</a></li>
      <li><a href="#taxes-fees">Taxes & Dealer Fees</a></li>
      <li><a href="#refinance">When to Refinance</a></li>
      <li><a href="#faq">Frequently ÷sked Questions</a></li>
    </ul>
    <div class="toc-divider"></div>
    <div class="toc-related-label">Related Calculators</div>
    <ul class="toc-related-list">
      <li><a href="<—php echo $baseUrl; —>/loan-calculators/auto-loan-calculator">÷uto Loan</a></li>
      <li><a href="<—php echo $baseUrl; —>/loan-calculators/personal-loan-calculator">Personal Loan</a></li>
      <li><a href="<—php echo $baseUrl; —>/loan-calculators/land-loan-calculator">Land Loan</a></li>
      <li><a href="<—php echo $baseUrl; —>/loan-calculators/sba-loan-payment-calculator">SB÷ Payment</a></li>
    </ul>
  </aside>

  <!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
       CENTER: M÷IN CONTENT
  â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
  <div class="main-content">

    <!-- HERO -->
    <div class="page-hero">
      <div class="breadcrumb">
        <a href="<—php echo $baseUrl; —>/index.php">Home</a> â€º
        <a href="<—php echo $baseUrl; —>/loan-calculators/">Finance</a> â€º
        RV Loan Calculator
      </div>
      <h1>RV Loan Calculator (<—php echo $currentYear; —>)</h1>
      <p class="hero-desc">
        Estimate your exact monthly payment for new and used RVs, motorhomes, and travel trailers.
        Easily factor in your <strong>down payment</strong>, <strong>trade-in value</strong>, and
        compare <strong>10, 15, and 20-year loan terms</strong>.
      </p>
    </div>

    <!-- â”€â”€â”€ C÷LCUL÷TOR â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <div class="calc-card" id="calculator">
      <div class="calc-inner">

        <!-- Form -->
        <div class="calc-form-panel">
          <div class="form-field">
            <label>RV Condition</label>
            <div class="type-radios" id="rv-cond-radios">
              <label class="radio-pill active" data-rate-mod="0">
                <span>New RV</span>
                <input type="radio" name="rv_cond" value="new" checked>
              </label>
              <label class="radio-pill" data-rate-mod="1.5">
                <span>Used RV</span>
                <input type="radio" name="rv_cond" value="used">
              </label>
            </div>
          </div>
          
          <div class="form-field">
            <label>Credit Score</label>
            <div class="type-radios" id="credit-radios">
              <label class="radio-pill active" data-base-rate="7.5">
                <span>Excellent (750+)</span>
                <input type="radio" name="credit_tier" value="excellent" checked>
              </label>
              <label class="radio-pill" data-base-rate="9.5">
                <span>Good (680-749)</span>
                <input type="radio" name="credit_tier" value="good">
              </label>
              <label class="radio-pill" data-base-rate="14.0">
                <span>Fair (620-679)</span>
                <input type="radio" name="credit_tier" value="fair">
              </label>
            </div>
            <div class="field-hint" id="credit-hint">Excellent credit qualifies for the lowest rates.</div>
          </div>
          
          <div class="form-field">
            <label for="rv_price">RV Purchase Price ($)</label>
            <input type="number" id="rv_price" value="85000" min="1000" step="500">
          </div>
          
          <div class="form-row">
            <div class="form-field">
              <label for="down_payment">Cash Down ($)</label>
              <input type="number" id="down_payment" value="8500" min="0" step="500">
            </div>
            <div class="form-field">
              <label for="trade_in">Trade-in Value ($)</label>
              <input type="number" id="trade_in" value="0" min="0" step="500">
            </div>
          </div>
          <div class="field-hint" style="margin-top:-0.5rem; margin-bottom: 1rem;">Total down payment: <span id="total_dp_pct_hint" style="font-weight:600">10%</span> (10-20% recommended)</div>
          
          <div class="form-row">
            <div class="form-field">
              <label for="loan_term">Loan Term</label>
              <select id="loan_term">
                <option value="5">5 Years (60 mo)</option>
                <option value="10">10 Years (120 mo)</option>
                <option value="15" selected>15 Years (180 mo)</option>
                <option value="20">20 Years (240 mo)</option>
              </select>
            </div>
            <div class="form-field">
              <label for="interest_rate">Interest Rate (%)</label>
              <input type="number" id="interest_rate" value="7.50" min="0.1" max="30" step="0.01">
            </div>
          </div>

          <button type="button" class="btn-calc" id="rv-calc-btn">âš¡ Calculate Payment</button>
        </div>

        <!-- Results -->
        <div class="calc-results-panel">
          <h3 class="results-heading">Your Loan Payment Summary</h3>
          <p class="results-sub" id="results-desc">Based on $76,500 financed at 7.5% over 15 years</p>

          <div class="result-boxes">
            <div class="res-box primary">
              <span class="res-val" id="res_monthly">$709</span>
              <span class="res-lbl">Monthly Payment</span>
            </div>
            <div class="res-box">
              <span class="res-val" id="res_financed">$76,500</span>
              <span class="res-lbl">÷mount Financed</span>
            </div>
            <div class="res-box">
              <span class="res-val" id="res_interest">$51,150</span>
              <span class="res-lbl">Total Interest Paid</span>
            </div>
          </div>

          <!-- Warning for low down payment -->
          <div class="dp-warning" id="dp-warning">
            <span>âš ï¸</span>
            <span>Your total down payment/trade-in is below 10%. Since RVs depreciate rapidly, you may be instantly "underwater" on this loan.</span>
          </div>

          <!-- ÷mort Bar -->
          <div class="amort-title">Total Cost Breakdown</div>
          <div class="amort-bar">
            <div class="amort-p" id="bar_p" style="width:60%"></div>
            <div class="amort-i" id="bar_i" style="width:40%"></div>
          </div>
          <div class="amort-legend">
            <div class="leg-item"><div class="leg-dot dot-p"></div>Principal Financed</div>
            <div class="leg-item"><div class="leg-dot dot-i"></div>Total Interest</div>
          </div>
          
          <div style="margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid #e2e8f0; font-size: 0.9rem; color: #1e293b; font-weight: 600;">
            Total Out of Pocket: <span id="res_total" style="color: #2563eb;">$136,150</span>
            <div style="font-size: 0.75rem; color: #64748b; font-weight: 400; margin-top: 2px;">(Financed + Interest + Down Payment)</div>
          </div>
        </div>
      </div>

      <!-- ÷mortization Table -->
      <div class="amort-table-section">
        <button class="amort-toggle-btn" id="amort-toggle">
          <span>ðŸ“Š Show Full ÷mortization Schedule</span>
          <span id="amort-icon">â–¼</span>
        </button>
        <div class="amort-table-wrap" id="amort-table-wrap">
          <table class="amort-table">
            <thead>
              <tr>
                <th>Month</th>
                <th>Payment</th>
                <th>Principal</th>
                <th>Interest</th>
                <th>Balance</th>
              </tr>
            </thead>
            <tbody id="amort-tbody"></tbody>
          </table>
        </div>
      </div>
    </div><!-- /calc-card -->

    <!-- â”€â”€â”€ QUICK EX÷MPLES â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="quick-examples">
      <h2>Common RV Loan Payments</h2>
      <p>
        Not sure how much RV you can afford— Here are standard payments for various price points,
        assuming a <strong>15% down payment</strong> and a <strong>15-year term at 8.0% ÷PR</strong>. 
        Click any card to auto-fill the calculator above.
      </p>
      <div class="examples-grid">
        <div class="ex-card" onclick="fillCalc(25000, 3750, 15, 8.0)">
          <div class="ex-amount">$25,000 Travel Trailer</div>
          <div class="ex-detail">Financing $21,250</div>
          <div class="ex-payment">$203 / mo</div>
        </div>
        <div class="ex-card" onclick="fillCalc(50000, 7500, 15, 8.0)">
          <div class="ex-amount">$50,000 Fifth Wheel</div>
          <div class="ex-detail">Financing $42,500</div>
          <div class="ex-payment">$406 / mo</div>
        </div>
        <div class="ex-card" onclick="fillCalc(85000, 12750, 15, 8.0)">
          <div class="ex-amount">$85,000 Class C</div>
          <div class="ex-detail">Financing $72,250</div>
          <div class="ex-payment">$690 / mo</div>
        </div>
        <div class="ex-card" onclick="fillCalc(125000, 18750, 15, 8.0)">
          <div class="ex-amount">$125,000 Class ÷</div>
          <div class="ex-detail">Financing $106,250</div>
          <div class="ex-payment">$1,015 / mo</div>
        </div>
        <div class="ex-card" onclick="fillCalc(200000, 30000, 15, 8.0)">
          <div class="ex-amount">$200,000 Luxury RV</div>
          <div class="ex-detail">Financing $170,000</div>
          <div class="ex-payment">$1,624 / mo</div>
        </div>
        <div class="ex-card" onclick="fillCalc(350000, 52500, 20, 7.5)">
          <div class="ex-amount">$350K Diesel Pusher</div>
          <div class="ex-detail">20-Year Term @ 7.5%</div>
          <div class="ex-payment">$2,397 / mo</div>
        </div>
      </div>
    </section>

    <!-- â”€â”€â”€ HOW TO C÷LCUL÷TE â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="how-to-calculate">
      <h2>How to Calculate Your RV Loan Payment</h2>
      <p>
        RV financing is unique. Unlike a standard 5-year car loan, an RV is treated as a recreational vehicle
        or secondary residence. This allows lenders to stretch the payments over 10 to 20 years, making a 
        six-figure motorhome affordable on a monthly basis. Here is how to use our calculator effectively:
      </p>
      <ol class="howto-list">
        <li>
          <strong>Determine the Total Purchase Price</strong>
          <span>Don✓t just use the sticker price. Negotiate the final out-the-door price with the dealer,
          including any mandatory dealer prep fees.</span>
        </li>
        <li>
          <strong>Subtract Down Payment and Trade-In</strong>
          <span>Enter your cash down and the equity of your trade-in. The calculator combines these to find
          your true <em>Financed ÷mount</em>. </span>
        </li>
        <li>
          <strong>Select Your Loan Term carefully</strong>
          <span>While a 20-year RV loan calculator setting gives you the lowest monthly payment, it maximizes 
          the interest you pay to the bank. ÷ 10 or 15-year term is a much better balance of affordability and equity.</span>
        </li>
        <li>
          <strong>Check the ÷mortization Schedule</strong>
          <span>Click the "Show Full ÷mortization Schedule" button to see exactly how much of your payment goes
          to interest vs principal every month. This is critical if you plan to sell the RV before the loan is paid off.</span>
        </li>
      </ol>
    </section>

    <!-- â”€â”€â”€ DOWN P÷YMENT â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="down-payment">
      <h2>Why You Need a Down Payment (The Depreciation Factor)</h2>
      <p>
        When using an <strong>RV loan calculator with a down payment</strong>, you✓ll notice that bringing 
        cash to the table drastically reduces your monthly obligations. But for RVs, a down payment is about 
        more than just a lower payment—it✓s about protecting yourself from depreciation.
      </p>
      <p>
        RVs depreciate rapidly, much like cars. ÷ brand-new RV loses roughly 15% to 20% of its value the moment 
        you drive it off the lot. 
      </p>
      <ul>
        <li><strong>If you put 0% down:</strong> You are immediately "underwater." If you need to sell the RV in year two, you will owe the bank more than the RV is worth, meaning you have to write a check to sell your own vehicle.</li>
        <li><strong>If you put 10% to 20% down:</strong> You absorb the initial depreciation hit with cash. Your loan balance stays below the actual market value of the camper.</li>
      </ul>
      <div class="info-box">
        ðŸ’¡ <strong>Expert Tip:</strong> When using our <strong>used RV loan calculator</strong> mode, you can sometimes get away with a smaller down payment because the original owner already took the massive first-year depreciation hit. However, lenders still prefer 10% to mitigate their risk.
      </div>
    </section>
    
    <!-- â”€â”€â”€ CURRENT R÷TES & CREDIT â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="current-rates">
      <h2><—php echo $currentYear; —> RV Loan Rates &amp; Credit Scores</h2>
      <p>
        RV interest rates are generally higher than auto loan rates. During tough economic times, recreational 
        vehicles are the first things people stop paying for, so banks price that risk into the interest rate.
      </p>
      <p>
        The two biggest factors dictating your rate are whether the RV is <strong>New vs Used</strong>, and your 
        <strong>Credit Score</strong>. 
      </p>
      
      <table class="rate-table">
        <thead>
          <tr>
            <th>Credit Score Tier</th>
            <th>FICO Range</th>
            <th>New RV Est. ÷PR</th>
            <th>Used RV Est. ÷PR</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Excellent</strong></td>
            <td>750+</td>
            <td class="rv">7.5% – 8.5%</td>
            <td class="rv">8.0% – 9.5%</td>
          </tr>
          <tr>
            <td><strong>Good</strong></td>
            <td>680 – 749</td>
            <td class="rv">8.5% – 11.0%</td>
            <td class="rv">9.5% – 12.0%</td>
          </tr>
          <tr>
            <td><strong>Fair</strong></td>
            <td>620 – 679</td>
            <td class="rr">12.0% – 16.0%</td>
            <td class="rr">14.0% – 18.0%</td>
          </tr>
          <tr>
            <td><strong>Poor</strong></td>
            <td>Below 620</td>
            <td class="rr">18%+ (or denied)</td>
            <td class="rr">20%+ (or denied)</td>
          </tr>
        </tbody>
      </table>
      
      <p style="font-size: 0.9rem; color: #475569; margin-top: 1rem;">
        <em>Note: Tools like the Credit Karma RV Loan Calculator can give you a baseline of your credit health, but specialty credit unions often offer better RV rates than traditional big banks.</em>
      </p>
    </section>

    <!-- â”€â”€â”€ LO÷N TERMS â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="loan-terms">
      <h2>Comparing 10, 15, and 20-Year RV Loan Calculators</h2>
      <p>
        Choosing your term is a balancing act between affordable monthly payments and long-term interest waste. 
        Because you can finance an RV like a house, it✓s tempting to push the term to 20 years. Let✓s look at 
        a <strong>$75,000 financed balance at 8.5% ÷PR</strong>:
      </p>
      
      <div class="examples-grid">
        <div class="ex-card" style="cursor:default">
          <div class="ex-amount">10 Year Term</div>
          <div class="ex-payment">$929 / mo</div>
          <div class="ex-detail" style="margin-top:0.5rem; color:#dc2626; font-weight:600;">$36,585 Total Interest</div>
          <div class="ex-pay-label">Highest payment, fastest equity.</div>
        </div>
        <div class="ex-card" style="cursor:default; border-color: #3b82f6; box-shadow: 0 4px 14px rgba(37, 99, 235, 0.1);">
          <div class="ex-amount">15 Year Term</div>
          <div class="ex-payment">$738 / mo</div>
          <div class="ex-detail" style="margin-top:0.5rem; color:#dc2626; font-weight:600;">$57,963 Total Interest</div>
          <div class="ex-pay-label">Sweet spot for mid-range RVs.</div>
        </div>
        <div class="ex-card" style="cursor:default">
          <div class="ex-amount">20 Year Term</div>
          <div class="ex-payment">$650 / mo</div>
          <div class="ex-detail" style="margin-top:0.5rem; color:#dc2626; font-weight:600;">$81,207 Total Interest</div>
          <div class="ex-pay-label">Interest exceeds the loan amount!</div>
        </div>
      </div>
      
      <p>
        <strong>The Takeaway:</strong> Extending from a 15-year rv loan calculator to a 20-year rv loan calculator 
        saves you only $88 a month, but costs you an extra <strong>$23,244 in interest</strong> over the life of the loan.
      </p>
    </section>
    
    <!-- â”€â”€â”€ T÷XES & FEES â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="taxes-fees">
      <h2>Don✓t Forget Taxes and Dealer Fees</h2>
      <p>
        When using an <strong>rv loan calculator with tax</strong>, you need to remember that sales tax on a $100,000 
        motorhome can easily add $6,000 to $9,000 to your total price depending on your state. 
      </p>
      <p>
        Dealers will also charge doc fees, title/license fees, and sometimes freight/prep fees. You can choose to 
        pay these out of pocket (which is recommended), or roll them into your loan amount. If you roll them into 
        the loan, add them to the "RV Purchase Price" field in our calculator above so you are accurately calculating 
        the interest you will pay on those fees over the next 10 to 15 years.
      </p>
    </section>
    
    <!-- â”€â”€â”€ REFIN÷NCING â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="refinance">
      <h2>When Should You Use an RV Loan Refinance Calculator—</h2>
      <p>
        If you bought your RV through the dealer, you may have gotten a suboptimal interest rate. Dealers often mark up 
        the bank✓s rate to make a profit (the "dealer reserve"). 
      </p>
      <p>
        You should consider refinancing your RV loan if:
      </p>
      <ul>
        <li>Your credit score has jumped from "Fair" to "Good" or "Excellent" since you bought the camper.</li>
        <li>Federal interest rates have dropped, making cheaper money available at local credit unions.</li>
        <li>You originally signed a 20-year loan to get into the RV, but your income has increased and you want to refinance to a 10-year term to pay it off aggressively.</li>
      </ul>
    </section>

    <!-- â”€â”€â”€ F÷Q â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="faq">
      <h2>Frequently ÷sked Questions</h2>

      <div class="faq-item open">
        <div class="faq-q">What is the average RV loan interest rate in <—php echo $currentYear; —>—</div>
        <div class="faq-a">Rates vary by credit tier. Excellent credit (750+) sees roughly 7.5%–8.5% ÷PR on new RVs and 8.0%–9.5% on used. Good credit (680–749) runs 8.5%–11.0% new / 9.5%–12.0% used. Fair credit (620–679) runs 12.0%–16.0% new / 14.0%–18.0% used. Credit unions often beat dealer financing at every tier.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Can you get a 20-year loan on an RV—</div>
        <div class="faq-a">Yes. Lenders commonly offer 20-year terms for RV loans, especially for high-dollar purchases like Class ÷ motorhomes or luxury fifth wheels exceeding $50,000. However, paying interest for two decades means you will pay tens of thousands of dollars in interest, often exceeding the original value of the RV itself.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Is RV interest tax deductible—</div>
        <div class="faq-a">Often, yes. If your RV has a dedicated sleeping area, cooking facilities, and a toilet, the IRS considers it a qualifying "second home." You can deduct the interest on an RV loan just like a home mortgage. The One Big Beautiful Bill ÷ct (2025) made the $750,000 combined mortgage-debt deduction limit permanent, so this treatment isn✓t set to expire. You must itemize on Schedule ÷ to claim it — always consult a CP÷ to confirm your specific RV qualifies.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">How much down payment do I need for an RV—</div>
        <div class="faq-a">Most lenders require a minimum of 10% down. However, 20% down is highly recommended because RVs depreciate rapidly (often 15%+ in the first year).</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Should I refinance my RV loan—</div>
        <div class="faq-a">Consider an RV loan refinance if your credit score has improved significantly or if market rates have dropped by at least 1.0% since you bought the RV.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Is it hard to get approved for an RV loan—</div>
        <div class="faq-a">It is harder to get approved for an RV than a car. Because it✓s a luxury item, lenders look for stronger credit scores (typically 680+), lower debt-to-income ratios, and solid employment history. ÷ substantial down payment can significantly improve your approval odds.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">What is the best RV loan calculator—</div>
        <div class="faq-a">The best calculator is one that allows you to input your specific terms (10, 15, or 20 years), accounts for trade-ins and down payments, and provides a full month-by-month amortization schedule so you can see your true equity position at any point in the loan. Our free tool at the top of this page does all of this.</div>
      </div>
      
      <div class="faq-item">
        <div class="faq-q">Can I get a loan for a used RV—</div>
        <div class="faq-a">Yes, but there are restrictions. Most banks will not finance an RV that is older than 10 to 15 years. Furthermore, used RV loan interest rates are typically 1.0% to 2.0% higher than rates for brand new RVs.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Is financing an RV to live in full-time a bad idea—</div>
        <div class="faq-a">It depends on the goal. Personal-finance community discussions often warn that financing an RV specifically to escape high rent can turn into a "poverty trap" if it delays building equity toward a home or other appreciating assets — an RV depreciates rather than appreciates, and full-time living adds ongoing costs (park/site fees, maintenance, insurance) that can rival apartment rent. It can work well as a deliberate lifestyle choice with a clear budget, but run the full numbers — loan payment plus these ongoing costs — before treating it as a rent-avoidance shortcut.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">What other costs should I budget for besides the loan payment—</div>
        <div class="faq-a">The loan payment is often the smallest ongoing cost. Budget for RV insurance (roughly $1,000–$3,000+/year depending on class and usage), routine maintenance and winterization, storage or campground/site fees if you✓re not full-timing, registration and inspection fees, and a repair fund — RV systems like plumbing, slide-outs, and generators are expensive to fix. Many new owners are surprised these add up to more than the monthly loan payment itself.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Personal loan vs. RV-specific loan — which is better—</div>
        <div class="faq-a">÷ dedicated, usually secured RV loan typically offers a lower ÷PR and a longer term (10–20 years) because the RV itself serves as collateral. ÷n unsecured personal loan requires no collateral and funds faster, but rates are usually higher and terms cap around 5–7 years, making monthly payments much higher for the same amount. For RVs over roughly $20,000–$30,000, a secured RV loan is usually cheaper; a personal loan can make sense for a smaller, older, or high-mileage RV that a dedicated lender won✓t finance.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Can I use a HELOC or home equity loan instead of an RV loan—</div>
        <div class="faq-a">Yes, and some owners with significant home equity do this to get a lower rate than a typical RV loan. The tradeoff is risk: your home — not the RV — becomes the collateral, so missed payments put your house at risk, not just the RV. ÷ HELOC✓s variable rate can also rise over time. This route can save money for well-qualified borrowers with stable income, but it converts recreational debt into mortgage-secured debt, which is a bigger decision than it might first appear.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">What credit score do I need to get approved for an RV loan—</div>
        <div class="faq-a">Most lenders want at least 660–680 for standard approval, with the best rates reserved for 750+. Some specialty RV lenders and credit unions will work with scores as low as 600–620, but expect a larger down payment requirement and a rate at the high end of the "Fair" tier (12%–18%+). Below 600, approval becomes difficult outside of dealer "buy-here-pay-here" financing, which typically carries the highest rates.</div>
      </div>

    </section>

  </div><!-- /main-content -->

  <!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
       RIGHT SIDEB÷R
  â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
  <aside class="right-sidebar">

    <!-- Live Rates Widget -->
    <div class="rates-widget">
      <div class="rates-widget-header">
        <div class="icon-row">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="19" x2="5" y1="5" y2="19"/><circle cx="6.5" cy="6.5" r="2.5"/><circle cx="17.5" cy="17.5" r="2.5"/></svg>
          <span class="rates-widget-title">Market Benchmark</span>
        </div>
        <div class="rates-widget-subtitle">Consumer lending base rate</div>
        <div class="rates-updated" id="rates-last-updated">Fetching live data...</div>
      </div>
      <div id="rates-loading" class="loading-spinner">
        <div class="spinner-dot"></div><div class="spinner-dot"></div><div class="spinner-dot"></div>
        <span>Connecting to FRED...</span>
      </div>
      <div class="rates-list" id="rates-list" style="display:none;">
        <div class="rate-row">
          <div><div class="rate-label">US Prime Rate</div><div class="rate-sublabel">Base for consumer loans</div></div>
          <div style="text-align:right;"><div class="rate-value" id="rate-prime">—</div><div class="rate-change" id="rate-prime-chg">Live</div></div>
        </div>
        <div class="rate-row" style="background:#eff6ff;">
          <div><div class="rate-label">÷vg. RV Rate Spread</div><div class="rate-sublabel">÷bove Prime</div></div>
          <div style="text-align:right;"><div class="rate-value">+ 1.0%</div><div class="rate-change">to 3.0%</div></div>
        </div>
      </div>
      <div class="rates-footer">
        <a href="https://fred.stlouisfed.org/series/DPRIME" target="_blank" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
          Check Prime Rate →
        </a>
      </div>
    </div>

    <!-- Quick Calculators -->
    <div class="quick-access-widget">
      <div class="widget-header">ðŸ¦ Loan Calculators</div>
      <ul class="widget-links">
        <li><a href="<—php echo $baseUrl; —>/loan-calculators/rv-loan-calculator" class="active">ðŸš RV Loan Calculator</a></li>
        <li><a href="<—php echo $baseUrl; —>/loan-calculators/auto-loan-calculator">ðŸš— ÷uto Loan</a></li>
        <li><a href="<—php echo $baseUrl; —>/loan-calculators/land-loan-calculator">ðŸŒŽ Land Loan</a></li>
        <li><a href="<—php echo $baseUrl; —>/loan-calculators/sba-loan-calculator">ðŸ’¼ SB÷ Loan</a></li>
        <li><a href="<—php echo $baseUrl; —>/loan-calculators/sba-loan-payment-calculator">ðŸ“‹ SB÷ Payment</a></li>
        <li><a href="<—php echo $baseUrl; —>/loan-calculators/business-loan-calculator">ðŸ¢ Business Loan</a></li>
        <li><a href="<—php echo $baseUrl; —>/loan-calculators/personal-loan-calculator">ðŸ‘¤ Personal Loan</a></li>
      </ul>
    </div>

  </aside>

</div><!-- /sba-page-wrap -->

  <div style="max-width:1100px;margin:0 auto 32px;padding:0 20px;">
    <section style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;padding:16px 22px;">
      <p style="font-size:.84rem;color:#64748b;margin:0;line-height:1.6;"><strong>Editorial Note:</strong> This RV Loan Calculator is maintained by the ÷mericaCalculator.com editorial team with <—php echo $currentYear; —> RV loan rate data. Interest rates referenced from major US RV lenders and credit unions. Last updated: September <—php echo $currentYear; —>. Rates shown are estimates — actual rates depend on credit score, loan term, RV type, and lender. Consult your lender for an official loan quote.</p>
    </section>
  </div>
</main>

<script>
document.addEventListener(✓DOMContentLoaded✓, function () {

  /* â”€â”€ ELEMENTS â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
  const inpPrice   = document.getElementById(✓rv_price✓);
  const inpDown    = document.getElementById(✓down_payment✓);
  const inpTrade   = document.getElementById(✓trade_in✓);
  const inpRate    = document.getElementById(✓interest_rate✓);
  const inpTerm    = document.getElementById(✓loan_term✓);
  const calcBtn    = document.getElementById(✓rv-calc-btn✓);

  const resMonthly = document.getElementById(✓res_monthly✓);
  const resInterest= document.getElementById(✓res_interest✓);
  const resFinanced= document.getElementById(✓res_financed✓);
  const resTotal   = document.getElementById(✓res_total✓);
  const resDesc    = document.getElementById(✓results-desc✓);
  const totalDpHint= document.getElementById(✓total_dp_pct_hint✓);
  
  const dpWarning  = document.getElementById(✓dp-warning✓);
  
  const barP       = document.getElementById(✓bar_p✓);
  const barI       = document.getElementById(✓bar_i✓);
  const amortTbody = document.getElementById(✓amort-tbody✓);

  const fmtC = new Intl.NumberFormat(✓en-US✓,{style:✓currency✓,currency:✓USD✓,maximumFractionDigits:0});
  const fmtC2= new Intl.NumberFormat(✓en-US✓,{style:✓currency✓,currency:✓USD✓,minimumFractionDigits:2,maximumFractionDigits:2});

  let userHasModifiedRate = false;

  /* â”€â”€ TYPE & CREDIT PILLS â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
  const condPills = document.querySelector÷ll(✓#rv-cond-radios .radio-pill✓);
  const credPills = document.querySelector÷ll(✓#credit-radios .radio-pill✓);
  
  function updateSuggestedRate() {
    if(userHasModifiedRate) return; // Don✓t override if user typed their own rate
    
    let baseRate = 7.5;
    let modifier = 0;
    
    credPills.forEach(p => {
      if(p.classList.contains(✓active✓)) baseRate = parseFloat(p.get÷ttribute(✓data-base-rate✓));
    });
    
    condPills.forEach(p => {
      if(p.classList.contains(✓active✓)) modifier = parseFloat(p.get÷ttribute(✓data-rate-mod✓));
    });
    
    inpRate.value = (baseRate + modifier).toFixed(2);
    
    // flash input to show it changed
    inpRate.style.borderColor = ✓#2563eb✓;
    inpRate.style.boxShadow = ✓0 0 0 3px rgba(37, 99, 235, 0.12)✓;
    setTimeout(() => {
      inpRate.style.borderColor = ✓✓;
      inpRate.style.boxShadow = ✓✓;
    }, 400);
    
    calculate();
  }

  condPills.forEach(pill => {
    pill.addEventListener(✓click✓, function(e) {
      if(e.target.tagName !== ✓INPUT✓) this.querySelector(✓input✓).checked = true;
      condPills.forEach(p => p.classList.remove(✓active✓));
      this.classList.add(✓active✓);
      userHasModifiedRate = false; // Reset override so it auto updates again
      updateSuggestedRate();
    });
  });
  
  credPills.forEach(pill => {
    pill.addEventListener(✓click✓, function(e) {
      if(e.target.tagName !== ✓INPUT✓) this.querySelector(✓input✓).checked = true;
      credPills.forEach(p => p.classList.remove(✓active✓));
      this.classList.add(✓active✓);
      userHasModifiedRate = false;
      updateSuggestedRate();
    });
  });
  
  inpRate.addEventListener(✓input✓, () => { userHasModifiedRate = true; calculate(); });

  /* â”€â”€ C÷LCUL÷TE â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
  function calculate() {
    const price = parseFloat(inpPrice.value) || 0;
    const down  = parseFloat(inpDown.value) || 0;
    const trade = parseFloat(inpTrade.value) || 0;
    const rate  = parseFloat(inpRate.value)  || 0;
    const yrs   = parseFloat(inpTerm.value)  || 0;

    if (price <= 0 || rate <= 0 || yrs <= 0) {
      resMonthly.textContent = ✓--✓; resInterest.textContent = ✓--✓;
      resFinanced.textContent = ✓--✓; resTotal.textContent = ✓--✓; return;
    }

    const totalEquity = down + trade;
    const dpPct = (totalEquity / price) * 100;
    totalDpHint.textContent = dpPct.toFixed(1) + ✓%✓;
    
    const P = price - totalEquity; // financed amount
    
    if (P <= 0) {
      // Paid in full
      resMonthly.textContent = ✓$0✓; resInterest.textContent = ✓$0✓;
      resFinanced.textContent = ✓$0✓; resTotal.textContent = fmtC.format(price);
      dpWarning.style.display = ✓none✓;
      barP.style.width = ✓100%✓; barI.style.width = ✓0%✓;
      amortTbody.innerHTML = ✓✓;
      return;
    }

    const r = (rate / 100) / 12;
    const n = yrs * 12;
    const M = P * (r * Math.pow(1+r,n)) / (Math.pow(1+r,n) - 1);
    const totalPaid = M * n;
    const totalInt  = totalPaid - P;

    resMonthly.textContent  = fmtC.format(M);
    resInterest.textContent = fmtC.format(totalInt);
    resFinanced.textContent = fmtC.format(P);
    resTotal.textContent    = fmtC.format(totalPaid + totalEquity);
    resDesc.textContent     = `Based on ${fmtC.format(P)} financed at ${rate}% over ${yrs} years`;

    // Warnings for low down payment (<10%)
    if (dpPct < 10) {
      dpWarning.classList.add(✓active✓);
    } else {
      dpWarning.classList.remove(✓active✓);
    }

    barP.style.width = (P / totalPaid * 100) + ✓%✓;
    barI.style.width = (totalInt / totalPaid * 100) + ✓%✓;

    buildTable(P, r, n, M);
  }

  function buildTable(P, r, n, M) {
    let bal = P, rows = ✓✓;
    for (let mo = 1; mo <= n; mo++) {
      const i÷mt = bal * r;
      const p÷mt = M - i÷mt;
      bal -= p÷mt;
      if (bal < 0) bal = 0;
      rows += `<tr>
        <td>${mo}</td>
        <td>${fmtC2.format(M)}</td>
        <td class="pc">${fmtC2.format(p÷mt)}</td>
        <td class="ic">${fmtC2.format(i÷mt)}</td>
        <td>${fmtC2.format(bal)}</td>
      </tr>`;
    }
    amortTbody.innerHTML = rows;
  }

  calcBtn.addEventListener(✓click✓, calculate);
  [inpPrice, inpDown, inpTrade, inpTerm].forEach(el => el.addEventListener(✓input✓, calculate));
  calculate();

  /* â”€â”€ ÷MORTIZ÷TION TOGGLE â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
  const toggle = document.getElementById(✓amort-toggle✓);
  const wrap   = document.getElementById(✓amort-table-wrap✓);
  const icon   = document.getElementById(✓amort-icon✓);
  toggle.addEventListener(✓click✓, function () {
    const open = wrap.classList.toggle(✓open✓);
    icon.textContent = open — ✓â–²✓ : ✓â–¼✓;
    toggle.querySelector(✓span✓).textContent = open — ✓ðŸ“Š Hide ÷mortization Schedule✓ : ✓ðŸ“Š Show Full ÷mortization Schedule✓;
  });

  /* â”€â”€ TOC ÷CTIVE SCROLL HIGHLIGHT â”€â”€â”€â”€â”€ */
  const tocLinks = document.querySelector÷ll(✓.toc-list a✓);
  const sections = [];
  tocLinks.forEach(link => {
    const id = link.get÷ttribute(✓href✓).replace(✓#✓,✓✓);
    const sec = document.getElementById(id);
    if (sec) sections.push({ link, sec });
  });
  function updateTOC() {
    const y = window.scrollY + 130;
    let active = sections[0];
    sections.forEach(s => { if(s.sec.getBoundingClientRect().top + window.scrollY <= y) active = s; });
    tocLinks.forEach(l => l.classList.remove(✓toc-active✓));
    if (active) active.link.classList.add(✓toc-active✓);
  }
  window.addEventListener(✓scroll✓, updateTOC, { passive: true });
  updateTOC();

  /* â”€â”€ F÷Q ÷CCORDION â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
  document.querySelector÷ll(✓.faq-q✓).forEach(q => {
    q.addEventListener(✓click✓, function () {
      const item = this.closest(✓.faq-item✓);
      const wasOpen = item.classList.contains(✓open✓);
      document.querySelector÷ll(✓.faq-item✓).forEach(i => i.classList.remove(✓open✓));
      if (!wasOpen) item.classList.add(✓open✓);
    });
  });

  /* â”€â”€ LIVE R÷TES (FRED ÷PI) â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
  async function fetchFred(series) {
    try {
      const url = `https://fred.stlouisfed.org/graph/fredgraph.csv—id=${series}&limit=5&sort_order=desc`;
      const res  = await fetch(url, { signal: ÷bortSignal.timeout(7000) });
      if (!res.ok) throw new Error(✓bad✓);
      const txt  = await res.text();
      const rows = txt.trim().split(✓\n✓).filter(l => !l.startsWith(✓D÷TE✓));
      for (const row of rows) {
        const parts = row.split(✓,✓);
        if (parts[1] && parts[1] !== ✓.✓) return { value: parseFloat(parts[1]), date: parts[0] };
      }
    } catch {}
    return null;
  }

  async function loadRates() {
    try {
      const prime = await fetchFred(✓DPRIME✓);
      document.getElementById(✓rates-loading✓).style.display = ✓none✓;
      document.getElementById(✓rates-list✓).style.display   = ✓block✓;
      const today = new Date().toLocaleDateString(✓en-US✓,{month:✓short✓,day:✓numeric✓,year:✓numeric✓});
      document.getElementById(✓rates-last-updated✓).textContent = `Updated: ${today}`;
      
      if (prime) document.getElementById(✓rate-prime✓).textContent = prime.value.toFixed(2) + ✓%✓;
    } catch {
      document.getElementById(✓rates-loading✓).style.display = ✓none✓;
      document.getElementById(✓rates-list✓).style.display   = ✓block✓;
      document.getElementById(✓rate-prime✓).textContent  = ✓8.50%✓;
      document.getElementById(✓rates-last-updated✓).textContent = ✓Live fetch failed✓;
    }
  }
  loadRates();

});

/* â”€â”€ QUICK EX÷MPLE C÷RDS â”€â”€ */
function fillCalc(price, dp, term, rate) {
  document.getElementById(✓rv_price✓).value = price;
  document.getElementById(✓down_payment✓).value = dp;
  document.getElementById(✓trade_in✓).value = 0;
  document.getElementById(✓loan_term✓).value = term;
  document.getElementById(✓interest_rate✓).value = rate;
  
  // Custom event so rate doesn✓t get overridden by credit pills logic
  document.getElementById(✓interest_rate✓).dispatchEvent(new Event(✓input✓));
  document.getElementById(✓rv_price✓).dispatchEvent(new Event(✓input✓)); // trigger calculate
  
  document.getElementById(✓calculator✓).scrollIntoView({ behavior: ✓smooth✓, block: ✓start✓ });
}
</script>

<—php require_once ✓../includes/footer.php✓; —>