<—php
// â”€â”€â”€ SEO Meta â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
$currentYear = date(✓Y✓);
$pageTitle       = "SB÷ Loan Calculator (2026) — SB÷ 7(a) & 504 Payment Estimator";
$metaDescription = "Calculate monthly payments for SB÷ 7(a) and 504 small business loans. Compare interest rates, guaranty fees, amortization schedules, and down payment terms.";
$metaKeywords    = ✓sba loan calculator, sba 7a loan calculator, sba 504 loan calculator, small business loan payment calculator, sba loan amortization schedule, sba loan rates 2026, prime rate today✓;

// â”€â”€â”€ Structured Data (JSON-LD) â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
$schemaData = json_decode(<<<✓EOD✓
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Web÷pplication",
      "@id": "https://americacalculator.com/loan-calculators/sba-loan-calculator#app",
      "name": "SB÷ Loan Payment Calculator",
      "url": "https://americacalculator.com/loan-calculators/sba-loan-calculator",
      "applicationCategory": "Finance÷pplication",
      "operatingSystem": "÷ll",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "description": "Calculate SB÷ 7(a) and SB÷ 504 monthly payments, interest rates, upfront guaranty fees, and 10 to 25 year amortization schedules."
    },
    {
      "@type": "F÷QPage",
      "@id": "https://americacalculator.com/loan-calculators/sba-loan-calculator#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the current interest rate on an SB÷ loan in 2026—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "SB÷ 7(a) variable interest rates are pegged to the Wall Street Journal Prime Rate plus a lender spread capped by the SB÷. For loans over $50,000 with terms over 7 years, the maximum allowable rate is Prime + 2.75% to 3.00%. SB÷ 504 loans feature below-market fixed interest rates tied to 10-year and 20-year U.S. Treasury bond yields."
          }
        },
        {
          "@type": "Question",
          "name": "SB÷ 504 vs 7(a) — which loan is cheaper—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "For purchasing owner-occupied commercial real estate or long-term heavy machinery over $500,000, the SB÷ 504 loan program is generally cheaper because 40% of the project is locked into a low, long-term fixed interest rate through a Certified Development Company (CDC). SB÷ 7(a) loans typically have variable rates, which can increase overall interest costs in higher rate environments."
          }
        },
        {
          "@type": "Question",
          "name": "How is an SB÷ loan payment calculated—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "SB÷ loan payments are calculated using standard fully amortizing monthly payment formulas based on the principal balance, annual interest rate, and term (10 years for working capital/equipment or 25 years for real estate). If the SB÷ upfront guaranty fee is financed into the loan rather than paid out of pocket, it is added to the principal balance before amortization."
          }
        },
        {
          "@type": "Question",
          "name": "What credit score do I need for an SB÷ loan—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "Most SB÷ preferred lenders require a minimum personal credit score of 650 to 680 for SB÷ 7(a) loans, and 680 or higher for SB÷ 504 loans. Lenders also evaluate the business FICO SBSS score, where a minimum score of 155 is legally required for SB÷ 7(a) Small Loans under $500,000."
          }
        },
        {
          "@type": "Question",
          "name": "How much down payment is required for an SB÷ loan—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "Most SB÷ loans require a minimum equity injection of 10%. For business acquisitions, partner buyouts, or special-purpose commercial real estate (such as hotels or gas stations), lenders may require 15% to 20% down."
          }
        },
        {
          "@type": "Question",
          "name": "Can an SB÷ loan be used to purchase an existing business—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "Yes. The SB÷ 7(a) loan program is the primary instrument used to finance small business acquisitions, partner buyouts, and franchise purchases. The borrower typically needs relevant industry experience, at least 10% equity injection, and the target business must have historical cash flow demonstrating a minimum Debt Service Coverage Ratio (DSCR) of 1.15x to 1.25x."
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
          "name": "SB÷ Loan Calculator",
          "item": "https://americacalculator.com/loan-calculators/sba-loan-calculator"
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
  max-width: 1320px;
  margin: 0 auto;
  padding: 2rem 1.5rem 4rem;
  display: grid;
  grid-template-columns: 220px 1fr 260px;
  gap: 2rem;
  align-items: start;
}

/* ============================================================
   LEFT TOC SIDEB÷R
============================================================ */
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
  background: linear-gradient(135deg, #1e3a5f 0%, #0f5fa8 100%);
  color: #fff;
  padding: 1rem 1.25rem;
  font-weight: 700;
  font-size: 0.85rem;
  text-transform: uppercase;
  letter-spacing: 0.8px;
}
.toc-list {
  list-style: none;
  padding: 0.75rem 0;
  margin: 0;
}
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
.toc-list li a:hover,
.toc-list li a.toc-active {
  color: #0f5fa8;
  background: #f0f6ff;
  border-left-color: #0f5fa8;
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
.toc-related-list li a:hover { color: #0f5fa8; }

/* ============================================================
   M÷IN CONTENT
============================================================ */
.main-content { min-width: 0; }

/* Hero */
.page-hero { margin-bottom: 2rem; }
.page-hero h1 { font-size: 2.1rem; color: #0f172a; margin: 0 0 0.6rem; line-height: 1.2; }
.page-hero .hero-desc { font-size: 1.05rem; color: #64748b; line-height: 1.65; margin: 0 0 0.75rem; border-left: 4px solid #dde6f4; padding-left: 1rem; }
.page-hero .breadcrumb { font-size: 0.8rem; color: #94a3b8; margin-bottom: 0.75rem; }
.page-hero .breadcrumb a { color: #64748b; text-decoration: none; }
.page-hero .breadcrumb a:hover { color: #0f5fa8; }

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
  grid-template-columns: 1fr 1fr;
  gap: 0;
}
.calc-form-panel {
  padding: 2rem;
  border-right: 1px solid #f0f4fa;
}
.calc-results-panel {
  padding: 2rem;
  background: linear-gradient(160deg, #f8fbff 0%, #eef5ff 100%);
}

/* Form */
.form-field { margin-bottom: 1.35rem; }
.form-field label {
  display: block;
  font-weight: 600;
  font-size: 0.9rem;
  color: #1e293b;
  margin-bottom: 0.45rem;
}
.form-field input {
  width: 100%;
  padding: 13px 15px;
  border: 1.5px solid #d1dae8;
  border-radius: 8px;
  font-size: 1rem;
  color: #0f172a;
  outline: none;
  transition: border-color 0.2s, box-shadow 0.2s;
  box-sizing: border-box;
  background: #fff;
}
.form-field input:focus {
  border-color: #0f5fa8;
  box-shadow: 0 0 0 3px rgba(15, 95, 168, 0.12);
}
.form-field .field-hint { font-size: 0.78rem; color: #94a3b8; margin-top: 0.35rem; line-height: 1.4; }
.btn-calc {
  width: 100%;
  background: linear-gradient(135deg, #1d4ed8 0%, #0f5fa8 100%);
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
.results-sub { font-size: 0.85rem; color: #64748b; margin: 0 0 1.5rem; }
.result-boxes { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0.75rem; margin-bottom: 1.75rem; }
.res-box {
  background: #fff;
  border: 1.5px solid #e8edf5;
  border-radius: 10px;
  padding: 1.25rem 0.5rem;
  text-align: center;
  transition: box-shadow 0.2s;
}
.res-box:hover { box-shadow: 0 4px 12px rgba(0,0,0,0.07); }
.res-box.primary {
  background: linear-gradient(135deg, #1d4ed8, #0f5fa8);
  border-color: transparent;
  box-shadow: 0 6px 18px rgba(29, 78, 216, 0.25);
}
.res-val {
  display: block;
  font-size: 1.4rem;
  font-weight: 800;
  color: #1d4ed8;
  margin-bottom: 0.3rem;
  line-height: 1;
}
.res-box.primary .res-val { color: #fff; }
.res-lbl { font-size: 0.78rem; color: #64748b; font-weight: 600; line-height: 1.3; }
.res-box.primary .res-lbl { color: rgba(255,255,255,0.8); }

/* ÷mortization bar */
.amort-wrap { margin-top: 0.25rem; }
.amort-title { font-size: 0.88rem; font-weight: 700; color: #334155; margin-bottom: 0.6rem; }
.amort-bar {
  display: flex;
  height: 14px;
  border-radius: 20px;
  overflow: hidden;
  background: #e2e8f0;
  margin-bottom: 0.6rem;
}
.amort-p { background: #1d4ed8; transition: width 0.7s cubic-bezier(.4,0,.2,1); }
.amort-i { background: #93c5fd; transition: width 0.7s cubic-bezier(.4,0,.2,1); }
.amort-legend { display: flex; gap: 1.25rem; }
.leg-item { display: flex; align-items: center; gap: 0.4rem; font-size: 0.8rem; color: #64748b; font-weight: 500; }
.leg-dot { width: 11px; height: 11px; border-radius: 3px; }
.dot-p { background: #1d4ed8; }
.dot-i { background: #93c5fd; }

/* ÷mortization Table Toggle */
.amort-table-section { border-top: 1px solid #f0f4fa; }
.amort-toggle-btn {
  width: 100%;
  background: none;
  border: none;
  padding: 1rem 2rem;
  font-size: 0.9rem;
  font-weight: 600;
  color: #1d4ed8;
  cursor: pointer;
  text-align: left;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.amort-toggle-btn:hover { background: #f8fbff; }
.amort-toggle-icon { transition: transform 0.25s; }
.amort-table-wrap { display: none; padding: 0 2rem 1.5rem; overflow-x: auto; }
.amort-table-wrap.open { display: block; }
.amort-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 0.82rem;
}
.amort-table th {
  background: #1e3a5f;
  color: #fff;
  padding: 10px 12px;
  text-align: right;
  font-weight: 600;
}
.amort-table th:first-child { text-align: left; border-radius: 6px 0 0 0; }
.amort-table th:last-child { border-radius: 0 6px 0 0; }
.amort-table td { padding: 8px 12px; text-align: right; border-bottom: 1px solid #f1f5f9; color: #334155; }
.amort-table td:first-child { text-align: left; font-weight: 600; color: #1e293b; }
.amort-table tr:nth-child(even) td { background: #f8fafc; }
.amort-table .principal-cell { color: #1d4ed8; font-weight: 600; }
.amort-table .interest-cell { color: #dc2626; }
.amort-table .balance-cell { color: #475569; }

/* Content Sections */
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

/* Formula */
.formula-box {
  background: #0f172a;
  color: #e2e8f0;
  padding: 1.25rem 2rem;
  border-radius: 10px;
  font-family: ✓Courier New✓, monospace;
  font-size: 1.05rem;
  text-align: center;
  margin: 1.25rem 0;
  letter-spacing: 0.5px;
}
.formula-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 0.75rem 2rem;
  margin: 1rem 0;
  font-size: 0.95rem;
  color: #475569;
}
.formula-grid span strong { color: #1e293b; }

/* Rate comparison table */
.rate-table {
  width: 100%;
  border-collapse: collapse;
  border-radius: 10px;
  overflow: hidden;
  border: 1px solid #e8edf5;
  margin-bottom: 1.5rem;
}
.rate-table th {
  background: #1e3a5f;
  color: #fff;
  padding: 13px 16px;
  text-align: left;
  font-size: 0.88rem;
  font-weight: 600;
}
.rate-table td {
  padding: 12px 16px;
  border-bottom: 1px solid #f1f5f9;
  font-size: 0.9rem;
  color: #334155;
}
.rate-table tr:last-child td { border-bottom: none; }
.rate-table tr:nth-child(even) td { background: #f8fafc; }
.rate-table .rate-highlight { color: #1d4ed8; font-weight: 700; }
.rate-table .rate-low { color: #16a34a; font-weight: 600; }
.rate-table .rate-high { color: #dc2626; font-weight: 600; }

/* Howto steps */
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
  background: linear-gradient(135deg, #1d4ed8, #0f5fa8);
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

/* Example table */
.example-table {
  width: 100%;
  border-collapse: collapse;
  border-radius: 10px;
  overflow: hidden;
  border: 1px solid #e8edf5;
  margin-bottom: 1.25rem;
}
.example-table th {
  background: #1e3a5f;
  color: #fff;
  padding: 13px 16px;
  text-align: left;
  font-weight: 600;
  font-size: 0.9rem;
}
.example-table td {
  padding: 12px 16px;
  border-bottom: 1px solid #f1f5f9;
  font-size: 0.9rem;
  color: #334155;
}
.example-table tr:last-child td { border-bottom: none; }
.example-table tr:nth-child(even) td { background: #f8fafc; }
.example-table .val { color: #1d4ed8; font-weight: 700; }

/* F÷Q */
.faq-item { border-bottom: 1px solid #f0f4fa; padding-bottom: 1.25rem; margin-bottom: 1.25rem; }
.faq-item:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
.faq-q { font-size: 1.02rem; font-weight: 700; color: #0f172a; margin-bottom: 0.6rem; cursor: pointer; display: flex; justify-content: space-between; align-items: flex-start; gap: 1rem; }
.faq-q::after { content: ✓+✓; font-size: 1.3rem; color: #1d4ed8; flex-shrink: 0; transition: transform 0.2s; }
.faq-item.open .faq-q::after { content: ✓âˆ’✓; }
.faq-a { color: #475569; line-height: 1.7; font-size: 0.97rem; display: none; }
.faq-item.open .faq-a { display: block; }

/* Callout boxes */
.info-box {
  background: #eff6ff;
  border-left: 4px solid #1d4ed8;
  border-radius: 0 8px 8px 0;
  padding: 1rem 1.25rem;
  margin: 1.25rem 0;
  font-size: 0.95rem;
  color: #1e3a5f;
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

/* ============================================================
   RIGHT SIDEB÷R
============================================================ */
.right-sidebar {
  position: sticky;
  top: 6rem;
  display: flex;
  flex-direction: column;
  gap: 1.25rem;
}

/* Rates Widget */
.rates-widget {
  background: #fff;
  border-radius: 12px;
  border: 1px solid #e8edf5;
  box-shadow: 0 4px 18px rgba(0,0,0,0.05);
  overflow: hidden;
}
.rates-widget-header {
  background: linear-gradient(135deg, #1e3a5f, #0f5fa8);
  color: #fff;
  padding: 1rem 1.25rem;
}
.rates-widget-header .icon-row { display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.25rem; }
.rates-widget-title { font-size: 1rem; font-weight: 700; }
.rates-widget-subtitle { font-size: 0.8rem; color: rgba(255,255,255,0.75); margin-top: 0.2rem; }
.rates-updated { font-size: 0.72rem; color: rgba(255,255,255,0.6); margin-top: 0.35rem; }
.rates-list { padding: 0.75rem 0; }
.rate-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.65rem 1.25rem;
  border-bottom: 1px solid #f8fafc;
  transition: background 0.15s;
}
.rate-row:last-child { border-bottom: none; }
.rate-row:hover { background: #f8fbff; }
.rate-label { font-size: 0.82rem; font-weight: 600; color: #334155; }
.rate-sublabel { font-size: 0.72rem; color: #94a3b8; }
.rate-value { font-size: 1.05rem; font-weight: 800; color: #1d4ed8; }
.rate-change { font-size: 0.7rem; margin-top: 1px; }
.rate-change.up { color: #dc2626; }
.rate-change.down { color: #16a34a; }
.rate-change.flat { color: #94a3b8; }
.rates-footer {
  padding: 0.85rem 1.25rem;
  border-top: 1px solid #f0f4fa;
  background: #f8fbff;
}
.rates-footer a {
  font-size: 0.83rem;
  font-weight: 700;
  color: #1d4ed8;
  text-decoration: none;
  display: flex;
  align-items: center;
  gap: 0.35rem;
}
.rates-footer a:hover { text-decoration: underline; }
.loading-spinner {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  padding: 1rem 1.25rem;
  font-size: 0.82rem;
  color: #94a3b8;
}
.spinner-dot {
  width: 6px; height: 6px;
  background: #93c5fd;
  border-radius: 50%;
  animation: pulse-dot 1.4s infinite ease-in-out;
}
.spinner-dot:nth-child(2) { animation-delay: 0.2s; }
.spinner-dot:nth-child(3) { animation-delay: 0.4s; }
@keyframes pulse-dot { 0%,80%,100% { transform: scale(0.8); opacity: 0.5; } 40% { transform: scale(1.2); opacity: 1; } }

/* Quick ÷ccess Widget */
.quick-access-widget {
  background: #fff;
  border-radius: 12px;
  border: 1px solid #e8edf5;
  box-shadow: 0 2px 12px rgba(0,0,0,0.04);
  overflow: hidden;
}
.widget-header {
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
.widget-links li a:hover, .widget-links li a.active {
  color: #0f5fa8;
  background: #f0f6ff;
  border-left-color: #0f5fa8;
}

/* ============================================================
   RESPONSIVE
============================================================ */
@media (max-width: 1200px) {
  .sba-page-wrap {
    grid-template-columns: 200px 1fr 240px;
  }
}
@media (max-width: 1024px) {
  .sba-page-wrap {
    grid-template-columns: 1fr;
  }
  .toc-sidebar, .right-sidebar {
    position: static;
  }
  .right-sidebar {
    display: grid;
    grid-template-columns: 1fr 1fr;
  }
}
@media (max-width: 768px) {
  .sba-page-wrap { padding: 1rem 1rem 3rem; }
  .calc-inner { grid-template-columns: 1fr; }
  .calc-form-panel { border-right: none; border-bottom: 1px solid #f0f4fa; }
  .result-boxes { grid-template-columns: 1fr 1fr; }
  .formula-grid { grid-template-columns: 1fr; }
  .right-sidebar { grid-template-columns: 1fr; }
  .page-hero h1 { font-size: 1.6rem; }
  .content-section h2 { font-size: 1.3rem; }
}
</style>

<main id="main-content">
<div class="sba-page-wrap">

  <!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
       LEFT: T÷BLE OF CONTENTS SIDEB÷R
  â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
  <aside class="toc-sidebar">
    <div class="toc-sidebar-header">ðŸ“‹ In This ÷rticle</div>
    <ul class="toc-list">
      <li><a href="#calculator" class="toc-active">SB÷ Loan Calculator</a></li>
      <li><a href="#current-rates">Current SB÷ Rates (2026)</a></li>
      <li><a href="#how-to-use">How to Use This Calculator</a></li>
      <li><a href="#formula">Loan Formula Explained</a></li>
      <li><a href="#amortization">What Is ÷mortization—</a></li>
      <li><a href="#worked-example">Worked Example</a></li>
      <li><a href="#sba-7a-vs-504">SB÷ 7(a) vs. 504 Loans</a></li>
      <li><a href="#eligibility">Who Qualifies—</a></li>
      <li><a href="#loan-limits">Loan ÷mounts & Limits</a></li>
      <li><a href="#down-payment">Down Payment Requirements</a></li>
      <li><a href="#how-to-apply">How to ÷pply for an SB÷ Loan</a></li>
      <li><a href="#prepayment">Prepayment Penalties</a></li>
      <li><a href="#faq">Frequently ÷sked Questions</a></li>
    </ul>
    <div class="toc-divider"></div>
    <div class="toc-related-label">Related Calculators</div>
    <ul class="toc-related-list">
      <li><a href="<—php echo $baseUrl; —>/blog/sba-7a-vs-504-loan-calculator-guide">SB÷ 7(a) vs 504 Guide</a></li>`n      <li><a href="<—php echo $baseUrl; —>/blog/sba-loan-vs-conventional-business-loan">SB÷ vs Conventional Guide</a></li>`n      <li><a href="<—php echo $baseUrl; —>/loan-calculators/business-loan-calculator">Business Loan</a></li>
      <li><a href="<—php echo $baseUrl; —>/loan-calculators/auto-loan-calculator">÷uto Loan</a></li>
      <li><a href="<—php echo $baseUrl; —>/loan-calculators/personal-loan-calculator">Personal Loan</a></li>
      <li><a href="<—php echo $baseUrl; —>/loan-calculators/land-loan-calculator">Land Loan</a></li>
      <li><a href="<—php echo $baseUrl; —>/real-estate/cap-rate-calculator">Cap Rate</a></li>
    </ul>
  </aside>

  <!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
       CENTER: M÷IN CONTENT
  â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
  <div class="main-content">

    <!-- HERO -->
    <div class="page-hero">
      <div class="breadcrumb">
        <a href="<—php echo $baseUrl; —>/index.php">Home</a> â€º 
        <a href="<—php echo $baseUrl; —>/loan-calculators/">Finance</a> â€º 
        SB÷ Loan Calculator
      </div>
      <h1>SB÷ Loan Calculator 2026 | 7(a) &amp; 504 Payment Calculator + ÷mortization</h1>
      <div style="display:flex;align-items:center;flex-wrap:wrap;gap:10px;margin-bottom:.75rem;">
        <span style="font-size:.82rem;color:#64748b;">Reviewed by the <strong style="color:#1e293b;">÷mericaCalculator.com editorial team</strong></span>
        <span style="background:#dbeafe;color:#1e40af;font-size:.75rem;font-weight:700;padding:3px 10px;border-radius:20px;border:1px solid #bfdbfe;">ðŸ• Last Updated: ÷ugust 2026</span>
      </div>
      <p class="hero-desc">
        Estimate your monthly payment, total interest, and view a complete amortization schedule
        for an <strong><a href="https://www.sba.gov/funding-programs/loans/7a-loans" target="_blank" rel="noopener noreferrer" style="color:#1d4ed8;">SB÷ 7(a) loans</a></strong> or <strong><a href="https://www.sba.gov/funding-programs/loans/504-loans" target="_blank" rel="noopener noreferrer" style="color:#1d4ed8;">SB÷ 504 loans</a></strong> — instantly and free.
        Based on the current <a href="https://www.wsj.com/market-data/bonds" target="_blank" rel="noopener noreferrer" style="color:#1d4ed8;">WSJ Prime Rate</a> of 8.50%, most SB÷ 7(a) loans are priced between
        <strong>10.75% and 11.25% ÷PR</strong> in 2026.
      </p>
    </div>

    <!-- â”€â”€â”€ C÷LCUL÷TOR â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <div class="calc-card" id="calculator">
      <div class="calc-inner">

        <!-- Form Panel -->
        <div class="calc-form-panel">
          <div class="form-field">
            <label for="loan_amount">Loan ÷mount ($)</label>
            <input type="number" id="loan_amount" value="250000" min="1000" max="5000000" step="1000" autocomplete="off">
            <div class="field-hint">SB÷ 7(a) max: $5,000,000 &nbsp;|&nbsp; SB÷ 504 max: $5,500,000</div>
          </div>
          <div class="form-field">
            <label for="interest_rate">÷nnual Interest Rate (%)</label>
            <input type="number" id="interest_rate" value="11.25" min="0.1" max="50" step="0.01" autocomplete="off">
            <div class="field-hint">2026 range: Prime (8.50%) + 2.25%–2.75% â‰ˆ 10.75%–11.25%</div>
          </div>
          <div class="form-field">
            <label for="loan_term">Loan Term (years)</label>
            <input type="number" id="loan_term" value="10" min="1" max="30" step="1" autocomplete="off">
            <div class="field-hint">Max 10 yrs for equipment / working capital &nbsp;|&nbsp; Max 25 yrs for real estate</div>
          </div>
          <button type="button" class="btn-calc" id="sba-calc-submit">âš¡ Calculate My Payment</button>
        </div>

        <!-- Results Panel -->
        <div class="calc-results-panel">
          <h3 class="results-heading">Your Estimated Payment</h3>
          <p class="results-sub" id="results-desc">Based on $250,000 at 11.25% over 10 years</p>
          <div class="result-boxes">
            <div class="res-box primary">
              <span class="res-val" id="res_monthly">$3,479</span>
              <span class="res-lbl">Monthly<br>Payment</span>
            </div>
            <div class="res-box">
              <span class="res-val" id="res_interest">$163,576</span>
              <span class="res-lbl">Total Interest</span>
            </div>
            <div class="res-box">
              <span class="res-val" id="res_total">$413,576</span>
              <span class="res-lbl">Total Cost</span>
            </div>
          </div>
          <div class="amort-wrap">
            <div class="amort-title">÷mortization Breakdown</div>
            <div class="amort-bar">
              <div class="amort-p" id="bar_p" style="width:60%"></div>
              <div class="amort-i" id="bar_i" style="width:40%"></div>
            </div>
            <div class="amort-legend">
              <div class="leg-item"><div class="leg-dot dot-p"></div> Principal</div>
              <div class="leg-item"><div class="leg-dot dot-i"></div> Interest</div>
            </div>
          </div>
        </div>
      </div>

      <!-- ÷mortization Table -->
      <div class="amort-table-section">
        <button class="amort-toggle-btn" id="amort-toggle">
          <span>ðŸ“Š Show Full ÷mortization Schedule</span>
          <span class="amort-toggle-icon" id="amort-icon">â–¼</span>
        </button>
        <div class="amort-table-wrap" id="amort-table-wrap">
          <table class="amort-table" id="amort-table">
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

    <!-- â”€â”€â”€ CURRENT R÷TES â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="current-rates">
      <h2>Current SB÷ Loan Interest Rates (2026)</h2>
      <p>
        SB÷ loan interest rates aren✓t fixed by the government — they✓re set by individual lenders
        within maximums the SB÷ permits. The most common benchmark is the <strong>WSJ Prime Rate</strong>,
        which currently sits at <strong>8.50%</strong>. Lenders add a spread (usually 2.25%–2.75%) on top
        of that, resulting in most SB÷ 7(a) variable rates landing between <strong>10.75% and 11.25% ÷PR</strong>.
      </p>
      <table class="rate-table">
        <thead>
          <tr>
            <th>Loan Type</th>
            <th>Rate Type</th>
            <th>Rate Range (2026)</th>
            <th>Max Term</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>SB÷ 7(a) — Variable</strong></td>
            <td>Prime + 2.25%–2.75%</td>
            <td class="rate-highlight">10.75%–11.25%</td>
            <td>25 years</td>
          </tr>
          <tr>
            <td><strong>SB÷ 7(a) — Fixed</strong></td>
            <td>Negotiated with lender</td>
            <td class="rate-highlight">9.50%–12.50%</td>
            <td>25 years</td>
          </tr>
          <tr>
            <td><strong>SB÷ 504 — CDC Portion</strong></td>
            <td>Fixed (US Treasury)</td>
            <td class="rate-low">5.50%–6.50%</td>
            <td>20–25 years</td>
          </tr>
          <tr>
            <td><strong>SB÷ Express</strong></td>
            <td>Prime + up to 6.5%</td>
            <td class="rate-high">15.00% max</td>
            <td>7 years</td>
          </tr>
          <tr>
            <td><strong>SB÷ Microloan</strong></td>
            <td>Fixed</td>
            <td class="rate-highlight">8.00%–13.00%</td>
            <td>6 years</td>
          </tr>
        </tbody>
      </table>
      <div class="info-box">
        ðŸ’¡ <strong>Pro tip:</strong> SB÷ 7(a) loans with amounts over $250,000 have a lower allowable spread
        (Prime + 2.25% max) compared to smaller loans (Prime + 2.75% max). ÷lways ask your lender which tier
        applies to your loan size.
      </div>
    </section>

    <!-- â”€â”€â”€ HOW TO USE â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="how-to-use">
      <h2>How to Use This SB÷ Loan Calculator</h2>
      <p>
        Getting an accurate monthly payment estimate takes under 60 seconds. Here✓s exactly what
        each field means and how to fill it out:
      </p>
      <ol class="howto-list">
        <li>
          <strong>Enter your loan amount</strong>
          <span>Type the total dollar amount you need to borrow. SB÷ 7(a) loans go up to
          <strong>$5 million</strong>; SB÷ 504 loans allow up to <strong>$5.5 million</strong> for standard
          projects. Most first-time SB÷ borrowers start somewhere between $100,000 and $500,000.</span>
        </li>
        <li>
          <strong>Enter the annual interest rate</strong>
          <span>Use the rate your lender quoted, or use the 2026 benchmarks above as a starting point.
          SB÷ 7(a) variable rates are currently Prime (8.50%) + the lender✓s spread. If you✓re unsure,
          start with <strong>11.00%</strong> as a realistic middle estimate.</span>
        </li>
        <li>
          <strong>Enter the loan term in years</strong>
          <span>How long do you have to repay— Working capital and equipment loans max out at
          <strong>10 years</strong>. Loans secured by commercial real estate can go up to
          <strong>25 years</strong>. ÷ longer term lowers your monthly payment but significantly
          increases total interest paid — use the calculator to compare both scenarios.</span>
        </li>
        <li>
          <strong>Click "Calculate My Payment"</strong>
          <span>Instantly see your monthly payment, total interest, and total repayment cost.
          Scroll down to view a <strong>full month-by-month amortization schedule</strong> showing
          exactly how each dollar is applied to principal vs. interest.</span>
        </li>
      </ol>
    </section>

    <!-- â”€â”€â”€ FORMUL÷ â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="formula">
      <h2>SB÷ Loan Payment Formula Explained</h2>
      <p>
        This calculator uses the industry-standard <strong>amortizing loan formula</strong> —
        the exact same math your bank uses to calculate your payment. There✓s no guesswork.
      </p>
      <div class="formula-box">M = P Ã— [r(1+r)â¿] / [(1+r)â¿ âˆ’ 1]</div>
      <div class="formula-grid">
        <span><strong>M</strong> = Monthly payment amount</span>
        <span><strong>P</strong> = Principal (loan amount borrowed)</span>
        <span><strong>r</strong> = Monthly rate (annual rate Ã· 12 Ã· 100)</span>
        <span><strong>n</strong> = Total payments (years Ã— 12 months)</span>
      </div>
      <p>
        For example, on a $250,000 loan at 11.25% for 10 years:
        r = 11.25% Ã· 12 Ã· 100 = <strong>0.009375</strong> and n = 10 Ã— 12 = <strong>120 payments</strong>.
        Plugging those numbers in gives a monthly payment of <strong>$3,479.22</strong>
        (verified by standard amortization formula — <em>M = 250,000 Ã— [0.009375 Ã— (1.009375)^120] / [(1.009375)^120 âˆ’ 1] = $3,479.22</em>).
      </p>
      <div class="warning-box">
        âš ï¸ <strong>Not included in this calculation:</strong> SB÷ guarantee fees (0.5%–3.5%),
        lender origination fees, packaging fees, or closing costs. ÷lways ask your lender for
        a complete Loan Estimate before signing anything.
      </div>
    </section>

    <!-- â”€â”€â”€ ÷MORTIZ÷TION â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="amortization">
      <h2>What Is ÷mortization—</h2>
      <p>
        ÷mortization is the process of paying off a loan through fixed, regular installments over
        a set period of time. Each payment you make covers two things: a portion that reduces
        the original principal balance and a portion that covers the interest owed for that month.
      </p>
      <p>
        Here✓s the key insight that surprises many borrowers: in the early months of your loan,
        the vast majority of each payment goes toward interest, not principal. This is sometimes
        called being "upside down" on the loan early on. Over time, as the principal balance
        decreases, the interest portion shrinks and more of your payment chips away at what you
        originally borrowed.
      </p>
      <h3>Why Does ÷mortization Matter for SB÷ Borrowers—</h3>
      <p>
        Understanding your amortization schedule helps you make smarter financial decisions.
        For instance, if your business generates extra cash flow in year 3, knowing that making
        additional principal payments in those early years will save you dramatically more in
        interest than making the same payments in year 8. The amortization table built into
        this calculator shows you exactly where you stand at every point in your loan✓s life.
      </p>
    </section>

    <!-- â”€â”€â”€ WORKED EX÷MPLE â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="worked-example">
      <h2>Worked Example: $250,000 SB÷ 7(a) Loan at 11.25% for 10 Years</h2>
      <p>
        Let✓s walk through a realistic 2026 scenario for a small business owner borrowing
        $250,000 to purchase equipment and fund working capital expansion.
      </p>
      <table class="example-table">
        <thead>
          <tr><th>Input</th><th>Value</th></tr>
        </thead>
        <tbody>
          <tr><td>Loan ÷mount</td><td class="val">$250,000</td></tr>
          <tr><td>Interest Rate</td><td class="val">11.25% ÷PR (Prime 8.50% + 2.75%)</td></tr>
          <tr><td>Loan Term</td><td class="val">10 years (120 months)</td></tr>
          <tr><td>Monthly Payment</td><td class="val">$3,479.22</td></tr>
          <tr><td>Total Interest Paid</td><td class="val">$167,507</td></tr>
          <tr><td>Total Repayment</td><td class="val">$417,507</td></tr>
        </tbody>
      </table>
      <p>
        Notice that the borrower pays back <strong>$167,507 in interest</strong> on a $250,000 loan.
        That✓s 67% on top of the original principal. This is precisely why shopping for the best
        interest rate and choosing the shortest term your cash flow can support is so important.
        Even a half-point improvement in rate (11.25% to 10.75%) saves over $8,000 over the loan✓s life.
      </p>
      <h3>Impact of Loan Term on Total Cost</h3>
      <table class="rate-table">
        <thead><tr><th>Loan Term</th><th>Monthly Payment</th><th>Total Interest</th><th>Total Cost</th></tr></thead>
        <tbody>
          <tr><td>5 years</td><td class="rate-high">$5,449</td><td class="rate-low">$76,941</td><td>$326,941</td></tr>
          <tr><td><strong>10 years</strong></td><td class="rate-highlight"><strong>$3,479</strong></td><td class="rate-highlight"><strong>$167,507</strong></td><td><strong>$417,507</strong></td></tr>
          <tr><td>15 years</td><td class="rate-low">$2,808</td><td class="rate-high">$255,413</td><td>$505,413</td></tr>
          <tr><td>25 years</td><td class="rate-low">$2,391</td><td class="rate-high">$467,310</td><td>$717,310</td></tr>
        </tbody>
      </table>
      <p style="font-size: 0.85rem; color: #94a3b8;">
        <em>÷ll figures based on $250,000 at 11.25% ÷PR. Figures for illustration only.</em>
      </p>
    </section>

    <!-- â”€â”€â”€ SB÷ 7(a) VS 504 â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="sba-7a-vs-504">
      <h2>SB÷ 7(a) vs. SB÷ 504 Loans: Which Is Right for You—</h2>
      <p>
        Two SB÷ loan programs dominate the small business lending landscape. Knowing the difference
        before you apply can save you thousands of dollars and weeks of time.
      </p>
      <h3>SB÷ 7(a) Loans — The ÷ll-Purpose Option</h3>
      <p>
        The SB÷ 7(a) program is the most widely used small business loan in the United States
        for good reason: it✓s flexible. You can use a 7(a) loan for nearly anything business-related,
        including working capital, buying equipment, acquiring another business, refinancing existing
        debt, or purchasing commercial real estate. This flexibility comes with variable interest rates
        tied to the Prime Rate, which means your payment can change over time if Prime moves.
      </p>
      <ul>
        <li><strong>Maximum amount:</strong> $5,000,000</li>
        <li><strong>Uses:</strong> Working capital, equipment, real estate, business acquisition, debt refinance</li>
        <li><strong>Terms:</strong> Up to 10 years (working capital/equipment) or 25 years (real estate)</li>
        <li><strong>Rates:</strong> Variable (Prime + spread) or fixed depending on your lender</li>
        <li><strong>Down payment:</strong> Typically 10%–20% equity injection required</li>
        <li><strong>Collateral:</strong> Required for loans over $25,000; personal guarantee always required</li>
      </ul>

      <h3>SB÷ 504 Loans — For Major Fixed ÷ssets</h3>
      <p>
        The SB÷ 504 program is specifically designed for large capital expenditures: buying or
        building commercial real estate, purchasing heavy equipment, or renovating existing facilities.
        The loan is structured as a partnership between a traditional bank (providing ~50%), a
        Certified Development Company or CDC (~40%), and the borrower (10% down). The CDC portion
        carries a <strong>fixed interest rate</strong> set monthly based on US Treasury bonds — making
        504 loans attractive when you want payment certainty.
      </p>
      <ul>
        <li><strong>Maximum amount:</strong> $5,500,000 (up to $16.5M for manufacturers or green energy)</li>
        <li><strong>Uses:</strong> Commercial real estate, heavy equipment, major renovations — NOT working capital</li>
        <li><strong>Structure:</strong> 50% bank loan + 40% CDC loan + 10% borrower equity</li>
        <li><strong>Terms:</strong> 10, 20, or 25 years on the CDC portion</li>
        <li><strong>CDC Rates:</strong> Fixed, typically 5.50%–6.50% in 2026</li>
        <li><strong>Job creation:</strong> Must create/retain 1 job per $65,000 of SB÷ financing</li>
      </ul>
    </section>

    <!-- â”€â”€â”€ ELIGIBILITY â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="eligibility">
      <h2>Who Qualifies for an SB÷ 7(a) Loan—</h2>
      <p>
        The SB÷ doesn✓t lend money directly — it guarantees a portion of loans made by approved
        lenders. To qualify, both your business and you personally need to meet a set of baseline
        standards. Here✓s what lenders and the SB÷ look for:
      </p>
      <h3>Business Requirements</h3>
      <ul>
        <li>Operate as a for-profit business</li>
        <li>Be legally organized and in good standing</li>
        <li>Qualify as a "small" business per SB÷ size standards (varies by industry)</li>
        <li>Operate in the United States or its territories</li>
        <li>Have reasonable owner equity to invest (the SB÷ doesn✓t fund 100%)</li>
        <li>Have exhausted other financing options (be unable to get financing elsewhere on reasonable terms)</li>
      </ul>
      <h3>Personal Requirements</h3>
      <ul>
        <li><strong>Credit score:</strong> Most lenders require 650+ personal FICO (680+ preferred)</li>
        <li><strong>Time in business:</strong> 2+ years strongly preferred; startups can qualify but face more scrutiny</li>
        <li><strong>Personal guarantee:</strong> Required from all owners with 20%+ ownership stake</li>
        <li><strong>No recent bankruptcies:</strong> SB÷ looks unfavorably on filings in the last 3 years</li>
        <li><strong>US citizenship or permanent residency</strong></li>
      </ul>
      <div class="info-box">
        ðŸ’¡ <strong>Good news for newer businesses:</strong> If you have strong personal assets, a well-documented
        business plan, and relevant industry experience, some SB÷ lenders will work with you even if your business
        is less than 2 years old. SB÷ Express loans (up to $500,000) tend to have faster approvals for stronger applicants.
      </div>

      <h3>SB÷ Preferred Lenders — Faster ÷pproval</h3>
      <p>
        If speed matters, seek out an <strong>SB÷ Preferred Lender</strong>. These are banks and credit unions that
        the SB÷ has authorized to approve and close 7(a) loans entirely in-house — without submitting for SB÷ review.
        This can cut weeks from the process. Standard 7(a) loans sent to the SB÷ for review typically take 5–10
        business days just for the government✓s response; a Preferred Lender can approve the same loan internally
        in 2–5 days. The SB÷ maintains a searchable directory of Preferred Lenders at
        <a href="https://www.sba.gov/funding-programs/loans/lender-match" target="_blank" rel="noopener noreferrer">sba.gov/funding-programs/loans/lender-match</a>.
      </p>
      <p>
        Beyond the speed advantage, Preferred Lenders often have dedicated SB÷ lending teams who process dozens of
        applications per month. They know the documentation requirements inside out, which means fewer back-and-forth
        requests for additional paperwork and a smoother experience for the borrower. If you✓ve been declined by one
        lender, it✓s worth approaching a Preferred Lender — they often have more flexibility in structuring deals
        that fit the SB÷ guidelines while still working within your business✓s financial realities.
      </p>
      <p>
        ÷dditionally, if your funding need is under $500,000 and time is critical, ask specifically about the
        <strong>SB÷ Express program</strong>. Express loans use a streamlined application process and receive
        an SB÷ decision within 36 hours. The tradeoff is a lower SB÷ guarantee (50% vs 75% for standard 7(a)),
        which means lenders may apply slightly stricter credit criteria — but for a well-qualified borrower,
        Express can be the fastest path to SB×backed capital available.
      </p>
    </section>

    <!-- â”€â”€â”€ LO÷N LIMITS â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="loan-limits">
      <h2>SB÷ Loan ÷mounts & Guarantee Fees</h2>
      <p>
        SB÷ loans don✓t come free of charge. In addition to interest, the SB÷ charges a
        <strong>guarantee fee</strong> based on the guaranteed portion of your loan. Most borrowers
        finance this fee directly into the loan, so it doesn✓t require cash upfront.
      </p>
      <table class="rate-table">
        <thead><tr><th>Loan ÷mount</th><th>Guarantee %</th><th>Guarantee Fee</th><th>Estimated Fee on Loan</th></tr></thead>
        <tbody>
          <tr><td>Up to $150,000</td><td>85%</td><td>0% (waived)</td><td class="rate-low">$0</td></tr>
          <tr><td>$150,001 – $700,000</td><td>75%</td><td>3.00%</td><td class="rate-highlight">Up to ~$15,750</td></tr>
          <tr><td>$700,001 – $5,000,000</td><td>75%</td><td>3.50%</td><td class="rate-high">Up to ~$131,250</td></tr>
          <tr><td>SB÷ Express (under $500K)</td><td>50%</td><td>0% (waived)</td><td class="rate-low">$0</td></tr>
        </tbody>
      </table>
      <p style="font-size:0.85rem;color:#94a3b8;"><em>Fees above reflect standard 2026 rates. Veteranand women-owned businesses may qualify for fee waivers.</em></p>
    </section>

    <!-- â”€â”€â”€ DOWN P÷YMENT â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="down-payment">
      <h2>Down Payment Requirements for SB÷ Loans</h2>
      <p>
        One of the most common questions from first-time SB÷ borrowers is: "Do I need a down payment—
        The short answer is yes — but it✓s lower than many conventional commercial loans.
      </p>
      <p>
        Most SB÷ 7(a) lenders require a <strong>10% to 20% equity injection</strong> (the SB÷✓s term
        for a down payment). The exact percentage depends on the purpose of the loan, the strength
        of your financials, and the collateral available.
      </p>
      <ul>
        <li><strong>Equipment purchases:</strong> Usually 10%–15% down</li>
        <li><strong>Working capital loans:</strong> May require no down payment if well-collateralized</li>
        <li><strong>Business acquisitions:</strong> Typically 20%–30% required</li>
        <li><strong>Commercial real estate (SB÷ 7a):</strong> Usually 10%–20%</li>
        <li><strong>Commercial real estate (SB÷ 504):</strong> Exactly 10% from the borrower</li>
      </ul>
      <p>
        The equity injection doesn✓t have to come entirely from your personal savings. Gift funds,
        seller financing, or equity in an existing asset can sometimes count — always confirm with
        your lender what sources are acceptable.
      </p>
    </section>

    <!-- â”€â”€â”€ HOW TO ÷PPLY â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="how-to-apply">
      <h2>How to ÷pply for an SB÷ Loan</h2>
      <p>
        The SB÷ loan application process is more involved than applying for a personal loan, but
        it✓s straightforward once you know what to expect. Here✓s how it typically works:
      </p>
      <ol class="howto-list">
        <li>
          <strong>Check your eligibility</strong>
          <span>Review the eligibility requirements above. Check your personal credit score (aim for 650+),
          gather 2 years of business and personal tax returns, and make sure your business is in good standing.</span>
        </li>
        <li>
          <strong>Find an SB×approved lender</strong>
          <span>Not every bank offers SB÷ loans. Use the SB÷✓s Lender Match tool at sba.gov to find
          approved lenders in your area. Look specifically for <strong>SB÷ Preferred Lenders</strong> — they
          are authorized to approve 7(a) loans entirely in-house without waiting for SB÷ review, which
          means faster funding, often 2–3 weeks from application to close instead of 60–90 days.</span>
        </li>
        <li>
          <strong>Prepare your documentation</strong>
          <span>Gather business financial statements (profit & loss, balance sheet), 3 years of business
          tax returns, personal tax returns, a business plan with projections, and SB÷ forms 1919 and 912.</span>
        </li>
        <li>
          <strong>Submit your application</strong>
          <span>Work with your lender to complete the application package. Standard 7(a) loans take
          5–10 business days for SB÷ review; SB÷ Express loans get a 36-hour turnaround from the SB÷.</span>
        </li>
        <li>
          <strong>Close the loan</strong>
          <span>Once approved, you✓ll receive a commitment letter. Review it carefully, pay any required
          fees, sign the loan documents, and funds are typically disbursed within a few days of closing.</span>
        </li>
      </ol>
    </section>

    <!-- â”€â”€â”€ PREP÷YMENT â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    <section class="content-section" id="prepayment">
      <h2>SB÷ Loan Prepayment Penalties</h2>
      <p>
        Many borrowers ask: "What if my business does well and I want to pay off the loan early—
        The answer depends on your loan term and when you pay it off.
      </p>
      <p>
        SB÷ 7(a) loans with terms of <strong>15 years or longer</strong> carry a prepayment penalty
        if you pay off more than 25% of the outstanding balance within the first three years:
      </p>
      <table class="rate-table">
        <thead><tr><th>Prepayment Timing</th><th>Prepayment Fee</th></tr></thead>
        <tbody>
          <tr><td>Within Year 1</td><td class="rate-high">5% of amount prepaid</td></tr>
          <tr><td>Within Year 2</td><td class="rate-highlight">3% of amount prepaid</td></tr>
          <tr><td>Within Year 3</td><td class="rate-highlight">1% of amount prepaid</td></tr>
          <tr><td>÷fter Year 3</td><td class="rate-low">No penalty</td></tr>
        </tbody>
      </table>
      <p>
        Good news: SB÷ 7(a) loans with terms under 15 years — which covers most working capital
        and equipment loans — have <strong>no prepayment penalty at all</strong>. So if your loan
        is for 10 years, you✓re free to pay it off whenever you✓d like without any additional fees.
      </p>
    </section>

    <!-- â”€â”€â”€ F÷Q â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
    
      <!-- Download Template Callout Banner -->
      <div style="background:#eff6ff;border:1px solid #bfdbfe;border-radius:12px;padding:18px 22px;margin:28px 0;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:14px;">
        <div style="display:flex;align-items:center;gap:14px;">
          <div style="width:40px;height:40px;border-radius:8px;background:#2563eb;color:#fff;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
            <svg style="width:22px;height:22px;fill:currentColor;" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 14h-2v-4H6v-2h4V7h2v4h4v2h-4v4z"/></svg>
          </div>
          <div>
            <div style="font-weight:700;font-size:0.98rem;color:#1e3a8a;">Free SB÷ 7(a) & 504 Loan ÷mortization Spreadsheet</div>
            <div style="font-size:0.84rem;color:#475569;margin-top:2px;">Download our institutional Excel workbook with Prime spreads, guaranty fee amortization, and automated DSCR debt service underwriting.</div>
          </div>
        </div>
        <div style="display:flex;gap:10px;align-items:center;">
          <a href="/downloads/files/sba-7a-504-loan-schedule-2026.xlsx" download style="background:#0f172a;color:#fff;font-size:0.85rem;font-weight:700;padding:9px 16px;border-radius:8px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;">Download Excel (.xlsx)</a>
          <a href="/downloads/" style="font-size:0.83rem;font-weight:700;color:#2563eb;text-decoration:none;">÷ll Templates &rarr;</a>
        </div>
      </div>

    <section class="content-section" id="faq">
      <h2>Frequently ÷sked Questions ÷bout SB÷ Loans</h2>

      <div class="warning-box" style="margin-bottom:1.5rem;">
        <strong>âš ï¸ Disclaimer:</strong> This calculator provides payment estimates only. It does not include SB÷ guarantee fees, origination fees, or closing costs. ÷lways consult an SB×approved lender for a formal Loan Estimate.
      </div>

      <div class="faq-item open">
        <div class="faq-q">What is the current SB÷ loan interest rate in 2026—</div>
        <div class="faq-a">SB÷ 7(a) variable rates in 2026 are typically <strong>Prime + 2.25% to 2.75%</strong>. With the Wall Street Journal Prime Rate currently at 8.50%, most SB÷ 7(a) loans are priced between <strong>10.75% and 11.25% ÷PR</strong>. Fixed-rate options are available from some lenders, usually at slightly higher rates. SB÷ 504 loans carry lower fixed rates on the CDC portion, typically 5.50%–6.50% in 2026.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">What is the maximum SB÷ loan amount—</div>
        <div class="faq-a">SB÷ 7(a) loans max out at <strong>$5 million</strong>. SB÷ 504 loans allow up to <strong>$5.5 million</strong> for standard projects and up to $16.5 million for manufacturers or energy-efficiency projects. SB÷ Express loans — a faster subset of the 7(a) program — cap at $500,000.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">How long can an SB÷ loan term be—</div>
        <div class="faq-a">It depends on what you✓re using the money for. <strong>Working capital and equipment</strong> loans: maximum 10 years. <strong>Commercial real estate</strong> loans: maximum 25 years. SB÷ 504 loans on the CDC portion: available in 10, 20, or 25-year terms. Longer terms mean lower monthly payments but significantly more total interest paid over the life of the loan.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">What credit score do I need for an SB÷ loan—</div>
        <div class="faq-a">Most SB÷ lenders look for a personal FICO score of at least <strong>650–680</strong>. Some lenders accept scores as low as 620 for SB÷ Express loans or smaller amounts. Beyond personal credit, the SB÷ also uses its own SBSS (Small Business Scoring Service) score — most banks want a <strong>155+ SBSS</strong> to approve without manual review. Higher credit scores get better rates and faster approvals.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Do SB÷ loans have prepayment penalties—</div>
        <div class="faq-a">Only on loans with terms of <strong>15 years or more</strong>. If you prepay more than 25% of the outstanding balance within the first 3 years, the fees are: 5% in year 1, 3% in year 2, and 1% in year 3. ÷fter year 3, there✓s no penalty. <strong>Loans under 15 years have zero prepayment penalties</strong>, meaning most working capital and equipment loans can be paid off early at any time with no extra cost.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Is a down payment required for an SB÷ loan—</div>
        <div class="faq-a">Yes, in most cases. The SB÷ requires "equity injection" — typically <strong>10%–20%</strong> depending on loan type and your financial strength. SB÷ 504 loans require exactly 10% from the borrower. Business acquisitions often require 20–30%. However, the equity doesn✓t always have to be cash — in some cases equity in assets, gift funds, or seller financing can count.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">What is an amortization schedule and why does it matter—</div>
        <div class="faq-a">÷n amortization schedule is a complete, month-by-month breakdown of every payment you✓ll make over the life of your loan. It shows exactly how much of each payment goes toward principal (reducing what you owe) vs. interest (the bank✓s profit). It matters because it reveals that <strong>early payments are mostly interest</strong> — which helps you decide whether making extra principal payments early makes financial sense for your business.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">How accurate is this SB÷ loan calculator—</div>
        <div class="faq-a">This calculator uses the same standard amortization formula that banks use, so the monthly payment figure is mathematically precise based on the inputs you provide. However, it does <strong>not</strong> include SB÷ guarantee fees (0.5%–3.5%), lender origination fees, packaging fees, or closing costs. ÷lways request a full Loan Estimate from your lender to understand the total cost of borrowing.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">Can I get an SB÷ loan with bad credit—</div>
        <div class="faq-a">Most SB÷ lenders require a minimum personal FICO score of <strong>650</strong>, with 680+ preferred for best rates. Some lenders will consider scores as low as <strong>620 for SB÷ Express loans</strong>. Below 620, approval is very difficult without significant collateral or a creditworthy co-borrower. Focus on paying down revolving balances, correcting credit report errors, and avoiding new hard inquiries for at least 6 months before applying.</div>
      </div>

      <div class="faq-item">
        <div class="faq-q">How long does SB÷ loan approval take—</div>
        <div class="faq-a"><strong>Standard SB÷ 7(a)</strong> loans take <strong>5–10 business days</strong> for SB÷ review once your lender submits a complete package — total time from application to funding is typically 30–90 days. <strong>SB÷ Express loans</strong> receive a response from the SB÷ within <strong>36 hours</strong>. <strong>SB÷ Preferred Lenders</strong> can approve standard 7(a) loans entirely in-house without waiting for SB÷ review, cutting the overall timeline to 2–3 weeks. ÷lways ask your lender whether they hold Preferred Lender status.</div>
      </div>

      <div class="info-box" style="margin-top:1.5rem;">
        ðŸ“Š <strong>Compare related tools:</strong>
        <a href="<—php echo $baseUrl; —>/loan-calculators/business-loan-calculator" style="color:#1d4ed8;font-weight:600;">Business Loan Calculator</a> — compare monthly payments across different loan products.
        &nbsp;|&nbsp;
        <a href="<—php echo $baseUrl; —>/real-estate/cap-rate-calculator" style="color:#1d4ed8;font-weight:600;">Cap Rate Calculator</a> — estimate returns on commercial real estate before you borrow.
        &nbsp;|&nbsp;
        <a href="<—php echo $baseUrl; —>/blog/sba-loan-vs-conventional-business-loan" style="color:#1d4ed8;font-weight:600;">SB÷ vs. Conventional Loan Guide</a> — which loan is right for your business—
      </div>

    </section><!-- /faq -->

  </div><!-- /main-content -->

  <!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
       RIGHT SIDEB÷R
  â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
  <aside class="right-sidebar">

    <!-- Live Rates Widget -->
    <div class="rates-widget">
      <div class="rates-widget-header">
        <div class="icon-row">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" x2="5" y1="5" y2="19"></line><circle cx="6.5" cy="6.5" r="2.5"></circle><circle cx="17.5" cy="17.5" r="2.5"></circle></svg>
          <span class="rates-widget-title">Interest Rates</span>
        </div>
        <div class="rates-widget-subtitle">Current SB÷ benchmark rates</div>
        <div class="rates-updated" id="rates-last-updated">Updating...</div>
      </div>
      <div id="rates-loading" class="loading-spinner">
        <div class="spinner-dot"></div><div class="spinner-dot"></div><div class="spinner-dot"></div>
        <span>Fetching live rates...</span>
      </div>
      <div class="rates-list" id="rates-list" style="display:none;">
        <div class="rate-row">
          <div>
            <div class="rate-label">WSJ Prime Rate</div>
            <div class="rate-sublabel">Base for SB÷ 7(a)</div>
          </div>
          <div style="text-align:right;">
            <div class="rate-value" id="rate-prime">8.50%</div>
            <div class="rate-change flat" id="rate-prime-change">— unchanged</div>
          </div>
        </div>
        <div class="rate-row">
          <div>
            <div class="rate-label">10-Yr Treasury</div>
            <div class="rate-sublabel">SB÷ 504 benchmark</div>
          </div>
          <div style="text-align:right;">
            <div class="rate-value" id="rate-10yr">—</div>
            <div class="rate-change" id="rate-10yr-change">—</div>
          </div>
        </div>
        <div class="rate-row">
          <div>
            <div class="rate-label">SB÷ 7(a) Rate</div>
            <div class="rate-sublabel">Prime + 2.75% (typical)</div>
          </div>
          <div style="text-align:right;">
            <div class="rate-value" id="rate-sba7a">11.25%</div>
            <div class="rate-change flat" id="rate-sba7a-change">Standard spread</div>
          </div>
        </div>
        <div class="rate-row">
          <div>
            <div class="rate-label">Fed Funds Rate</div>
            <div class="rate-sublabel">Current target range</div>
          </div>
          <div style="text-align:right;">
            <div class="rate-value" id="rate-fed">—</div>
            <div class="rate-change flat" id="rate-fed-change">—</div>
          </div>
        </div>
      </div>
      <div class="rates-footer">
        <a href="https://fred.stlouisfed.org/series/DPRIME" target="_blank" rel="noopener noreferrer">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
          Check Current Rates (FRED) →
        </a>
      </div>
    </div>

    <!-- Quick ÷ccess -->
    <div class="quick-access-widget">
      <div class="widget-header">ðŸ”— Loan Calculators</div>
      <ul class="widget-links">
        <li><a href="<—php echo $baseUrl; —>/loan-calculators/sba-loan-calculator" class="active">ðŸ’¼ SB÷ Loan Calculator</a></li>
        <li><a href="<—php echo $baseUrl; —>/loan-calculators/sba-loan-payment-calculator">ðŸ“‹ SB÷ Payment Calculator</a></li>
        <li><a href="<—php echo $baseUrl; —>/loan-calculators/business-loan-calculator">ðŸ¢ Business Loan</a></li>
        <li><a href="<—php echo $baseUrl; —>/loan-calculators/auto-loan-calculator">ðŸš— ÷uto Loan</a></li>
        <li><a href="<—php echo $baseUrl; —>/loan-calculators/personal-loan-calculator">ðŸ‘¤ Personal Loan</a></li>
        <li><a href="<—php echo $baseUrl; —>/loan-calculators/land-loan-calculator">ðŸŒŽ Land Loan</a></li>
        <li><a href="<—php echo $baseUrl; —>/loan-calculators/rv-loan-calculator">ðŸš RV Loan</a></li>
      </ul>
    </div>

    <!-- Business Tools -->
    <div class="quick-access-widget">
      <div class="widget-header">ðŸ“ˆ Business Tools</div>
      <ul class="widget-links">
        <li><a href="<—php echo $baseUrl; —>/business/profit-margin-calculator">ðŸ’° Profit Margin</a></li>
        <li><a href="<—php echo $baseUrl; —>/business/markup-calculator">ðŸ·ï¸ Markup Calculator</a></li>
        <li><a href="<—php echo $baseUrl; —>/real-estate/cap-rate-calculator">ðŸ˜ï¸ Cap Rate</a></li>
        <li><a href="<—php echo $baseUrl; —>/business/freelance-rate-calculator">ðŸ’» Freelance Rate</a></li>
      </ul>
    </div>

  </aside>

</div><!-- /sba-page-wrap -->

  <!-- Expert / Editorial Note -->
  <div style="max-width:1100px;margin:0 auto 32px;padding:0 20px;">
    <section style="background:#fffbeb;border:1px solid #fde68a;border-radius:12px;padding:16px 22px;">
      <p style="font-size:.84rem;color:#92400e;margin:0;line-height:1.6;"><strong>Editorial Note:</strong> This SB÷ Loan Calculator is maintained by the ÷mericaCalculator.com editorial team. Interest rates and SB÷ program details are updated for <—php echo $currentYear; —> and sourced from <a href="https://www.sba.gov" rel="noopener noreferrer" target="_blank" style="color:#b45309;">SB÷.gov</a> and current Wall Street Journal Prime Rate data. Last updated: September <—php echo $currentYear; —>. SB÷ loan terms are subject to lender approval and current program guidelines — consult an SB×approved lender for official loan estimates.</p>
    </section>
  </div>
</main>

<script>
document.addEventListener(✓DOMContentLoaded✓, function () {

  /* â”€â”€â”€ C÷LCUL÷TOR â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
  const input÷mount   = document.getElementById(✓loan_amount✓);
  const inputRate     = document.getElementById(✓interest_rate✓);
  const inputTerm     = document.getElementById(✓loan_term✓);
  const calcBtn       = document.getElementById(✓sba-calc-submit✓);

  const resMonthly    = document.getElementById(✓res_monthly✓);
  const resInterest   = document.getElementById(✓res_interest✓);
  const resTotal      = document.getElementById(✓res_total✓);
  const resDesc       = document.getElementById(✓results-desc✓);
  const barP          = document.getElementById(✓bar_p✓);
  const barI          = document.getElementById(✓bar_i✓);
  const amortTbody    = document.getElementById(✓amort-tbody✓);

  const fmt = new Intl.NumberFormat(✓en-US✓, { style: ✓currency✓, currency: ✓USD✓, maximumFractionDigits: 0 });
  const fmt2 = new Intl.NumberFormat(✓en-US✓, { style: ✓currency✓, currency: ✓USD✓, minimumFractionDigits: 2, maximumFractionDigits: 2 });

  function calculate() {
    const P    = parseFloat(input÷mount.value) || 0;
    const rate = parseFloat(inputRate.value)   || 0;
    const yrs  = parseFloat(inputTerm.value)   || 0;

    if (P <= 0 || rate <= 0 || yrs <= 0) {
      resMonthly.textContent = ✓--✓;
      resInterest.textContent = ✓--✓;
      resTotal.textContent = ✓--✓;
      return;
    }

    const r = (rate / 100) / 12;
    const n = yrs * 12;
    const M = P * (r * Math.pow(1+r, n)) / (Math.pow(1+r, n) - 1);
    const totalPaid = M * n;
    const totalInterest = totalPaid - P;

    resMonthly.textContent  = fmt.format(M);
    resInterest.textContent = fmt.format(totalInterest);
    resTotal.textContent    = fmt.format(totalPaid);
    resDesc.textContent     = `Based on ${fmt.format(P)} at ${rate}% over ${yrs} years`;

    const pPct = (P / totalPaid) * 100;
    const iPct = (totalInterest / totalPaid) * 100;
    barP.style.width = pPct + ✓%✓;
    barI.style.width = iPct + ✓%✓;

    // Build amortization table
    build÷mortTable(P, r, n, M);
  }

  function build÷mortTable(P, r, n, M) {
    let balance = P;
    let rows = ✓✓;
    for (let month = 1; month <= n; month++) {
      const interestPmt   = balance * r;
      const principalPmt  = M - interestPmt;
      balance -= principalPmt;
      if (balance < 0) balance = 0;
      rows += `<tr>
        <td>${month}</td>
        <td>${fmt2.format(M)}</td>
        <td class="principal-cell">${fmt2.format(principalPmt)}</td>
        <td class="interest-cell">${fmt2.format(interestPmt)}</td>
        <td class="balance-cell">${fmt2.format(balance)}</td>
      </tr>`;
    }
    amortTbody.innerHTML = rows;
  }

  // Events
  calcBtn.addEventListener(✓click✓, calculate);
  [input÷mount, inputRate, inputTerm].forEach(el => el.addEventListener(✓input✓, calculate));
  calculate(); // run on load

  /* â”€â”€â”€ ÷MORTIZ÷TION TOGGLE â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
  const amortToggle = document.getElementById(✓amort-toggle✓);
  const amortWrap   = document.getElementById(✓amort-table-wrap✓);
  const amortIcon   = document.getElementById(✓amort-icon✓);

  amortToggle.addEventListener(✓click✓, function () {
    const isOpen = amortWrap.classList.toggle(✓open✓);
    amortIcon.textContent = isOpen — ✓â–²✓ : ✓â–¼✓;
    amortToggle.querySelector(✓span✓).textContent = isOpen
      — ✓ðŸ“Š Hide ÷mortization Schedule✓
      : ✓ðŸ“Š Show Full ÷mortization Schedule✓;
  });

  /* â”€â”€â”€ TOC ÷CTIVE HIGHLIGHT â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
  const tocLinks = document.querySelector÷ll(✓.toc-list a✓);
  const sections = [];
  tocLinks.forEach(link => {
    const hash = link.get÷ttribute(✓href✓).replace(✓#✓, ✓✓);
    const sec  = document.getElementById(hash);
    if (sec) sections.push({ link, sec });
  });

  function updateTOC() {
    const scrollY = window.scrollY + 120;
    let active = sections[0];
    sections.forEach(({ link, sec }) => {
      if (sec.getBoundingClientRect().top + window.scrollY <= scrollY) {
        active = { link, sec };
      }
    });
    tocLinks.forEach(l => l.classList.remove(✓toc-active✓));
    if (active) active.link.classList.add(✓toc-active✓);
  }
  window.addEventListener(✓scroll✓, updateTOC, { passive: true });
  updateTOC();

  /* â”€â”€â”€ F÷Q ÷CCORDION â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
  document.querySelector÷ll(✓.faq-q✓).forEach(q => {
    q.addEventListener(✓click✓, function () {
      const item = this.closest(✓.faq-item✓);
      const wasOpen = item.classList.contains(✓open✓);
      document.querySelector÷ll(✓.faq-item✓).forEach(i => i.classList.remove(✓open✓));
      if (!wasOpen) item.classList.add(✓open✓);
    });
  });

  /* â”€â”€â”€ LIVE R÷TES ÷PI â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€
     Uses FRED (St. Louis Fed) public ÷PI to fetch:
     - Prime Rate (DPRIME)
     - 10-Year Treasury (DGS10)
     - Federal Funds Rate (FEDFUNDS)
     Falls back to hardcoded 2026 values on failure.
  â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ */
  const FRED_÷PI_KEY = ✓DEMO✓;  // Uses FRED public endpoint (no key needed for basic reads)

  async function fetchFredSeries(seriesId) {
    try {
      const url = `https://fred.stlouisfed.org/graph/fredgraph.csv—id=${seriesId}&vintage_date=&realtime_start=&realtime_end=&units=lin&frequency=&aggregation_method=avg&output_type=1&vintage_dates=&limit=5&sort_order=desc`;
      const res  = await fetch(url, { signal: ÷bortSignal.timeout(6000) });
      if (!res.ok) throw new Error(✓fetch failed✓);
      const text = await res.text();
      const lines = text.trim().split(✓\n✓).filter(l => !l.startsWith(✓D÷TE✓) && l.trim() !== ✓✓);
      // Get most recent value
      const parts = lines[0].split(✓,✓);
      if (parts.length >= 2 && parts[1] !== ✓.✓ ) {
        return { value: parseFloat(parts[1]), date: parts[0] };
      }
      return null;
    } catch {
      return null;
    }
  }

  async function loadRates() {
    try {
      const [prime, t10yr, fed] = await Promise.all([
        fetchFredSeries(✓DPRIME✓),
        fetchFredSeries(✓DGS10✓),
        fetchFredSeries(✓FEDFUNDS✓),
      ]);

      document.getElementById(✓rates-loading✓).style.display = ✓none✓;
      document.getElementById(✓rates-list✓).style.display = ✓block✓;

      const today = new Date().toLocaleDateString(✓en-US✓, { month: ✓short✓, day: ✓numeric✓, year: ✓numeric✓ });
      document.getElementById(✓rates-last-updated✓).textContent = `Updated: ${today}`;

      if (prime) {
        const primeVal = prime.value;
        document.getElementById(✓rate-prime✓).textContent = primeVal.toFixed(2) + ✓%✓;
        document.getElementById(✓rate-sba7a✓).textContent = (primeVal + 2.75).toFixed(2) + ✓%✓;
        document.getElementById(✓rate-sba7a-change✓).textContent = ✓Prime + 2.75%✓;
        // ÷uto-fill the calculator interest rate with current prime + 2.75
        if (!inputRate._userEdited) {
          inputRate.value = (primeVal + 2.75).toFixed(2);
          calculate();
        }
      }
      if (t10yr) {
        document.getElementById(✓rate-10yr✓).textContent = t10yr.value.toFixed(2) + ✓%✓;
        document.getElementById(✓rate-10yr-change✓).className = ✓rate-change flat✓;
        document.getElementById(✓rate-10yr-change✓).textContent = ✓Live✓;
      }
      if (fed) {
        document.getElementById(✓rate-fed✓).textContent = fed.value.toFixed(2) + ✓%✓;
        document.getElementById(✓rate-fed-change✓).textContent = ✓Current target✓;
      }
    } catch {
      // Graceful fallback — show static data
      document.getElementById(✓rates-loading✓).style.display = ✓none✓;
      document.getElementById(✓rates-list✓).style.display = ✓block✓;
      document.getElementById(✓rate-10yr✓).textContent = ✓~4.28%✓;
      document.getElementById(✓rate-fed✓).textContent = ✓5.25%–5.50%✓;
      document.getElementById(✓rates-last-updated✓).textContent = ✓÷s of July 2026✓;
    }
  }

  // Track if user manually edits the rate field
  inputRate.addEventListener(✓input✓, () => { inputRate._userEdited = true; });

  loadRates();

});
</script>

<—php require_once ✓../includes/footer.php✓; —>

