<?php
require_once __DIR__ . '/calculators_data.php';
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$docRoot = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
$dirRoot = str_replace('\\', '/', dirname(__DIR__));
$baseUrl = str_replace($docRoot, '', $dirRoot);
if ($baseUrl === '/' || $baseUrl === '\\') $baseUrl = '';

// -- Normalized canonical URL ----------------------------------------------
// Always https://americacalculator.com, lowercase path, no query string,
// no trailing slash (except root).
$_raw_path  = strtok($_SERVER['REQUEST_URI'] ?? '/', '?'); // strip query string
$_norm_path = strtolower(rtrim($_raw_path, '/'));   // lowercase + strip trailing /
if ($_norm_path === '') $_norm_path = '/';           // keep root slash
$_canonical = 'https://americacalculator.com' . htmlspecialchars($_norm_path, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'AmericaCalculator.com - Free Online Calculators'; ?></title>
<meta name="description" content="<?php echo isset($metaDescription) ? htmlspecialchars($metaDescription) : 'Free online calculators for finance, loans, real estate, construction, math, health, and more.'; ?>">
<meta name="keyword" content="<?php echo isset($metaKeywords) ? htmlspecialchars($metaKeywords) : 'calculator, online calculator, free calculator'; ?>">
<meta name="p:domain_verify" content="8e89733ab0a31881f170e253ae882f39"/>


<link rel="canonical" href="<?php echo $_canonical; ?>">
<link rel="alternate" hreflang="en-us" href="<?php echo $_canonical; ?>">
<link rel="icon" type="image/jpeg" href="<?php echo $baseUrl; ?>/image/logo-americacalculator-favicon.jpg">
<link rel="apple-touch-icon" href="<?php echo $baseUrl; ?>/image/logo-americacalculator-favicon.jpg">
<meta property="og:type" content="website">
<meta property="og:site_name" content="AmericaCalculator.com">
<meta property="og:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Free Online Calculators'; ?>">
<meta property="og:description" content="<?php echo isset($metaDescription) ? htmlspecialchars($metaDescription) : 'Free online calculators.'; ?>">
<meta property="og:url" content="<?php echo $_canonical; ?>">
<meta property="og:image" content="https://americacalculator.com/image/logo-america%20calculator.jpg">
<meta name="twitter:card" content="summary_large_image">
<link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style.css">
<!-- Google AdSense -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2047576600281805" crossorigin="anonymous"></script>
<?php if (isset($schemaData)): ?>
<script type="application/ld+json"><?php echo json_encode($schemaData, JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE); ?></script>

<!-- Google tag (gtag.js) -->

<script async src="https://www.googletagmanager.com/gtag/js?id=G-R78TH0XW19"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-R78TH0XW19');
</script>
<?php endif; ?>
<style>
/* ============================================================
   BASE RESET
   ============================================================ */
*, *::before, *::after { box-sizing: border-box; }

/* ============================================================
   HEADER - sticky dark bar
   ============================================================ */
.site-header {
  background: #1e293b;
  position: sticky;
  top: 0;
  z-index: 1000;
  box-shadow: 0 2px 8px rgba(0,0,0,.35);
}

/* Single flex row: Logo | Hamburger (mobile) | Nav | Search */
.hdr-row {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 16px;
  height: 56px;
  display: flex;
  align-items: center;
  gap: 0;
}

/* -- Logo -- */
.hdr-logo {
  flex-shrink: 0;
  margin-right: auto; /* push everything else right */
}
.hdr-logo a {
  display: flex; align-items: center;
  text-decoration: none; gap: 9px;
}
.hdr-logo-img { height: 48px; width: auto; display: block; max-width: 220px; }

/* -- Nav list (desktop: centred in remaining space) -- */
.hdr-nav {
  display: flex;
  align-items: stretch;
  list-style: none;
  margin: 0; padding: 0;
  height: 100%;
  flex: 1;
  justify-content: center;
}
.hdr-nav > li {
  display: flex;
  align-items: center;
  position: relative; /* anchor for dropdowns */
}
.hdr-nav > li > a {
  display: flex; align-items: center;
  padding: 0 12px;
  height: 100%;
  font-size: .83rem; font-weight: 500;
  color: #94a3b8;
  text-decoration: none;
  white-space: nowrap;
  transition: color .15s, background .15s;
  user-select: none;
}
.hdr-nav > li > a:hover,
.hdr-nav > li > a.nav-active { color: #fff; background: rgba(255,255,255,.08); }

/* carets */
.hdr-nav > li.mega-li > a::after,
.hdr-nav > li.has-sub > a::after {
  content: ' \25BE';
  font-size: .55rem;
  margin-left: 4px;
  opacity: .6;
  display: inline-block;
  transition: transform .2s;
}
.hdr-nav > li.open > a::after { transform: rotate(180deg); }

/* -- Search (rightmost) -- */
.hdr-search {
  flex-shrink: 0;
  width: 210px;
  position: relative;
  margin-left: 12px;
}
.hdr-search input {
  width: 100%;
  padding: 7px 12px 7px 32px;
  background: #0f172a;
  border: 1.5px solid #334155;
  border-radius: 6px;
  font-size: .82rem;
  color: #e2e8f0;
  outline: none;
  transition: border-color .2s;
}
.hdr-search input::placeholder { color: #475569; }
.hdr-search input:focus { border-color: #3b82f6; background: #1e293b; }
.hdr-search-icon {
  position: absolute; left: 9px; top: 50%;
  transform: translateY(-50%);
  color: #64748b; pointer-events: none;
}
.search-results {
  position: absolute; top: calc(100% + 6px); left: 0; right: 0;
  background: #fff; border: 1px solid #e2e8f0; border-radius: 8px;
  box-shadow: 0 8px 24px rgba(0,0,0,.15);
  display: none; z-index: 9999; max-height: 340px; overflow-y: auto;
}
.search-results.active { display: block; }
.search-result-item {
  display: block; padding: 9px 15px;
  font-size: .85rem; color: #334155;
  text-decoration: none; border-bottom: 1px solid #f1f5f9;
}
.search-result-item:last-child { border-bottom: none; }
.search-result-item:hover { background: #eff6ff; color: #2563eb; }

/* -- Hamburger - hidden on desktop -- */
.nav-toggle {
  display: none;
  flex-direction: column;
  justify-content: center;
  gap: 5px;
  background: none; border: none;
  padding: 10px 8px;
  cursor: pointer;
  flex-shrink: 0;
  margin-left: 8px;
}
.nav-toggle span {
  display: block; width: 22px; height: 2px;
  background: #94a3b8;
  border-radius: 2px;
  transition: all .25s;
}
/* animated X when open */
.nav-toggle.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.nav-toggle.open span:nth-child(2) { opacity: 0; }
.nav-toggle.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

/* ============================================================
   SMALL DROPDOWN  (Math / Health / Gaming / Technology)
   ============================================================ */
.drop-menu {
  display: none;
  position: absolute;
  top: 100%; left: 0;
  min-width: 250px;
  max-height: calc(100vh - 75px);
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: #cbd5e1 #f8fafc;
  background: #fff;
  border: 1px solid #e2e8f0;
  border-top: 3px solid #3b82f6;
  border-radius: 0 0 8px 8px;
  box-shadow: 0 8px 24px rgba(0,0,0,.18);
  z-index: 9999;
  padding: 4px 0;
  list-style: none;
}
.hdr-nav > li.has-sub:hover > .drop-menu { display: block; }
.drop-menu li { list-style: none; }
.drop-menu li a {
  display: block; padding: 9px 16px;
  font-size: .83rem; color: #334155;
  text-decoration: none; white-space: nowrap;
  transition: background .12s, color .12s;
}
.drop-menu li + li a { border-top: 1px solid #f8fafc; }
.drop-menu li a:hover { background: #eff6ff; color: #2563eb; }

/* ============================================================
   MEGA MENU  (Finance / Construction)
   ============================================================ */
.mega-menu {
  display: none;
  position: absolute;
  top: 100%; left: 0;
  width: max-content;
  max-width: 900px;
  max-height: calc(100vh - 75px);
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: #cbd5e1 #f8fafc;
  background: #fff;
  border: 1px solid #e2e8f0;
  border-top: 3px solid #3b82f6;
  border-radius: 0 0 10px 10px;
  box-shadow: 0 8px 28px rgba(0,0,0,.20);
  z-index: 9999;
  padding: 16px 0 14px;
}
.mega-menu::-webkit-scrollbar,
.drop-menu::-webkit-scrollbar {
  width: 6px;
}
.mega-menu::-webkit-scrollbar-thumb,
.drop-menu::-webkit-scrollbar-thumb {
  background-color: #cbd5e1;
  border-radius: 3px;
}
.mega-menu::-webkit-scrollbar-track,
.drop-menu::-webkit-scrollbar-track {
  background: #f8fafc;
}
.hdr-nav > li.mega-li:hover > .mega-menu { display: block; }
/* flip to right-align when near right edge */
.hdr-nav > li.mega-li.flip > .mega-menu { left: auto; right: 0; }

.mega-inner {
  display: flex;
  align-items: flex-start;
  padding: 0 6px;
}
.mega-col {
  flex: 0 0 auto;
  min-width: 128px; max-width: 185px;
  padding: 0 14px;
  border-right: 1px solid #f1f5f9;
}
.mega-col:first-child { padding-left: 10px; }
.mega-col:last-child  { border-right: none; padding-right: 10px; }
.mega-col-heading {
  display: block;
  font-size: .67rem; font-weight: 800;
  text-transform: uppercase; letter-spacing: .06em;
  color: #2563eb;
  margin-bottom: 8px; padding-bottom: 5px;
  border-bottom: 2px solid #dbeafe;
  text-decoration: none; white-space: nowrap;
}
a.mega-col-heading:hover { color: #1d4ed8; }
span.mega-col-heading { cursor: default; }
.mega-col ul { list-style: none; padding: 0; margin: 0; }
.mega-col ul li { list-style: none; }
.mega-col ul li a {
  display: block; padding: 4px 0;
  font-size: .80rem; color: #475569;
  text-decoration: none; white-space: nowrap;
  transition: color .1s, padding-left .1s;
}
.mega-col ul li a:hover { color: #2563eb; padding-left: 3px; }

/* ============================================================
   TABLET  (961px - 1200px)  slightly tighter nav
   ============================================================ */
@media (max-width: 1200px) {
  .hdr-nav > li > a { padding: 0 9px; font-size: .80rem; }
  .hdr-search { width: 180px; }
}

/* ============================================================
   MOBILE  â‰¤ 960px  - full hamburger menu
   ============================================================ */
@media (max-width: 960px) {

  /* show hamburger, hide search on small screens */
  .nav-toggle { display: flex; }
  .hdr-search { display: none; }

  /* nav list collapses to a drawer below the header */
  .hdr-nav {
    display: none;
    position: absolute;
    top: 56px; /* header height */
    left: 0; right: 0;
    background: #1e293b;
    flex-direction: column;
    align-items: stretch;
    justify-content: flex-start;
    height: auto;
    max-height: calc(100vh - 56px);
    overflow-y: auto;
    border-top: 2px solid #3b82f6;
    box-shadow: 0 8px 24px rgba(0,0,0,.4);
    z-index: 999;
    flex: none;
  }
  .hdr-nav.open { display: flex; }

  /* every li stacks vertically */
  .hdr-nav > li {
    flex-direction: column;
    align-items: stretch;
    position: relative;
    border-bottom: 1px solid #334155;
  }
  .hdr-nav > li:last-child { border-bottom: none; }

  .hdr-nav > li > a {
    height: auto;
    padding: 14px 20px;
    color: #cbd5e1;
    justify-content: space-between;
    font-size: .9rem;
  }
  .hdr-nav > li > a:hover { color: #fff; background: rgba(255,255,255,.06); }

  /* accordion: sub-menus shown via .open class, not :hover */
  .drop-menu,
  .mega-menu {
    position: static !important;
    display: none;
    box-shadow: none !important;
    border: none !important;
    border-top: 1px solid #334155 !important;
    background: #0f172a;
    padding: 4px 0 8px;
    width: 100% !important;
    max-width: none !important;
    border-radius: 0 !important;
  }
  .hdr-nav > li.open > .drop-menu,
  .hdr-nav > li.open > .mega-menu { display: block; }

  /* kill CSS :hover on mobile - accordion only */
  .hdr-nav > li.has-sub:hover > .drop-menu { display: none; }
  .hdr-nav > li.mega-li:hover > .mega-menu { display: none; }
  /* but keep open class working */
  .hdr-nav > li.has-sub.open > .drop-menu,
  .hdr-nav > li.mega-li.open > .mega-menu { display: block; }

  /* mega inner stacks */
  .mega-inner { flex-direction: column; padding: 0; }
  .mega-col {
    border-right: none;
    border-bottom: 1px solid #1e293b;
    padding: 10px 16px 10px 28px;
    min-width: 0; max-width: none;
  }
  .mega-col:last-child { border-bottom: none; }
  .mega-col:first-child, .mega-col:last-child { padding-left: 28px; }
  .mega-col-heading {
    color: #60a5fa;
    border-bottom-color: #1e293b;
    font-size: .72rem;
    margin-bottom: 6px;
  }
  span.mega-col-heading { margin-top: 8px; }
  .mega-col ul li a {
    color: #94a3b8;
    padding: 6px 0;
    font-size: .85rem;
  }
  .mega-col ul li a:hover { color: #e2e8f0; padding-left: 0; }

  .drop-menu li a {
    color: #94a3b8;
    padding: 11px 28px;
    font-size: .88rem;
  }
  .drop-menu li + li a { border-top: 1px solid #1e293b; }
  .drop-menu li a:hover { background: none; color: #e2e8f0; }
}

/* ============================================================
   SMALL PHONE  â‰¤ 480px
   ============================================================ */
@media (max-width: 480px) {
  .hdr-logo-text { display: none; } /* icon only, saves space */
  .hdr-row { padding: 0 12px; }
}
</style>
</head>
<body>

<!-- ============================================================
     HEADER: Logo | Search | Nav  - all one row
     ============================================================ -->
<header class="site-header">
  <div class="hdr-row">

    <!-- Logo -->
    <div class="hdr-logo">
      <a href="<?php echo $baseUrl; ?>/">
        <img
          src="<?php echo $baseUrl; ?>/image/logo-america calculator.jpg"
          alt="America Calculator - Fast, Reliable, Accurate"
          class="hdr-logo-img"
          width="220"
          height="48"
          loading="eager"
        >
      </a>
    </div>

    <!-- Search -->
    <div class="hdr-search">
      <svg class="hdr-search-icon" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
        <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
      </svg>
      <input type="text" id="searchInput" placeholder="Search calculators..." autocomplete="off" aria-label="Search">
      <div id="searchResult" class="search-result" role="listbox"></div>
    </div>

    <!-- Hamburger (mobile only) - BEFORE the nav list -->
    <button class="nav-toggle" id="navToggle" aria-label="Open menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>

    <!-- Nav -->
    <ul class="hdr-nav" id="navMenu">

      <li>
        <a href="<?php echo $baseUrl; ?>/" class="<?php echo ($currentPage==='index')?'nav-active':''; ?>">Home</a>
      </li>

      <li>
        <a href="<?php echo $baseUrl; ?>/about" class="<?php echo ($currentPage==='about')?'nav-active':''; ?>">About</a>
      </li>

      <li>
        <a href="<?php echo $baseUrl; ?>/contact" class="<?php echo ($currentPage==='contact')?'nav-active':''; ?>">Contact</a>
      </li>

      <li>
        <a href="<?php echo $baseUrl; ?>/downloads/" class="<?php echo ($currentPage==='downloads' || strpos($_SERVER['REQUEST_URI'] ?? '', '/downloads') !== false)?'nav-active':''; ?>">Free Templates</a>
      </li>

            <li class="has-sub">
        <a href="<?php echo $baseUrl; ?>/blog/" class="<?php echo ($currentPage==='blog')?'nav-active':''; ?>">Blog</a>
        <ul class="drop-menu">
          <li><a href="<?php echo $baseUrl; ?>/blog/"><strong>All Guides &amp; Articles</strong></a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-much-are-closing-costs-in-texas">Texas Closing Costs Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-much-are-closing-costs-in-california">California Closing Costs Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-much-are-closing-costs-in-florida">Florida Closing Costs Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/ohio-closing-costs-guide">Ohio Closing Costs Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/sba-7a-vs-504-loan-calculator-guide">SBA 7(a) vs 504 Loan Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/debt-to-income-ratio-explained">Debt-to-Income (DTI) Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/cost-to-add-second-story-to-house">Second Story Addition Cost</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/rv-financing-101-guide">RV Financing 101 Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/cap-rate-vs-cash-on-cash-return">Cap Rate vs Cash-on-Cash</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-to-calculate-cap-rate">How to Calculate Cap Rate</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-to-calculate-closing-costs">How to Calculate Closing Costs</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-to-calculate-square-feet-of-a-room">Room Square Footage Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-to-calculate-roof-square-footage">Roof Square Footage</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-to-calculate-board-feet-lumber">Board Feet of Lumber</a></li>
        </ul>
      </li>

            <!-- -- FINANCE mega -- -->
      <li class="mega-li">
        <a href="<?php echo $baseUrl; ?>/loan-calculators/">Finance</a>
        <div class="mega-menu">
          <div class="mega-inner">

            <div class="mega-col">
              <a href="<?php echo $baseUrl; ?>/loan-calculators/" class="mega-col-heading">Loan Calculators</a>
              <ul>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/usda-loan-calculator"><strong>USDA Loan (0% Down Rural)</strong></a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/va-loan-calculator">VA Loan (0% Down)</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/fha-loan-calculator">FHA Loan (3.5% Down)</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/jumbo-loan-calculator">Jumbo Loan ($766k+)</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/sba-loan-calculator">SBA 7(a) Loan</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/sba-loan-payment-calculator">SBA Payment</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/debt-to-income-calculator">Debt-to-Income (DTI)</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/heloc-calculator">HELOC Calculator</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/boat-loan-calculator">Boat &amp; Marine Loan</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/rv-loan-calculator">RV Loan</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/auto-loan-calculator">Auto Loan</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/personal-loan-calculator">Personal Loan</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/land-loan-calculator">Land Loan</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/commercial-loan-calculator">Commercial Loan</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/hard-money-loan-calculator">Hard Money Loan</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/equipment-loan-calculator">Equipment Financing</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/cd-interest-calculator">CD Interest</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/mortgage-payoff-calculator"><strong>Mortgage Payoff (Extra Payments)</strong></a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/amortization-calculator">Amortization Schedule</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/refinance-break-even-calculator">Refinance Break-Even</a></li>
              </ul>
            </div>

            <div class="mega-col">
              <a href="<?php echo $baseUrl; ?>/real-estate/" class="mega-col-heading">Real Estate</a>
              <ul>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/home-affordability-calculator"><strong>Home Affordability (How Much House)</strong></a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/investment-property-closing-cost-calculator"><strong>Investment Property Closing Costs</strong></a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/brrrr-calculator"><strong>BRRRR Calculator</strong></a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/closing-cost-calculator">Closing Cost</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/closing-cost-calculator-georgia"><strong>Georgia Closing Costs</strong></a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/closing-cost-calculator-north-carolina"><strong>NC Closing Costs</strong></a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/closing-cost-calculator-illinois">Illinois Closing Costs</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/closing-cost-calculator-new-york">New York Closing Costs</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/closing-cost-calculator-pennsylvania">Pennsylvania Closing Costs</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/closing-cost-calculator-new-jersey">New Jersey Closing Costs</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/hoa-fee-calculator">HOA Fee &amp; Buying Power</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/property-tax-calculator">Property Tax (By State)</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/mortgage-refinance-calculator">Mortgage Refinance</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/rent-affordability-calculator">Rent Affordability</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/mortgage-calculator">Mortgage (PITI)</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/cap-rate-calculator">Cap Rate</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/cash-on-cash-return-calculator">Cash-on-Cash</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/cash-flow-calculator">Cash Flow</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/home-inspection-cost-calculator">Home Inspection</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/down-payment-calculator">Down Payment</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/rent-vs-buy-calculator">Rent vs Buy</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/dscr-calculator">DSCR</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/1031-exchange-calculator">1031 Exchange</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/seller-closing-cost-calculator">Seller Closing Costs</a></li>
              </ul>
            </div>

            <div class="mega-col">
              <a href="<?php echo $baseUrl; ?>/business/" class="mega-col-heading">Business &amp; ROI</a>
              <ul>
                <li><a href="<?php echo $baseUrl; ?>/business/ltv-cac-calculator"><strong>LTV:CAC Calculator</strong></a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/break-even-calculator">Break-Even Analysis</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/business-valuation-calculator">Business Valuation</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/roi-calculator">ROI Calculator</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/real-estate-roi-calculator">Real Estate ROI</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/rental-property-roi-calculator">Rental Property ROI</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/marketing-roi-calculator">Marketing ROI</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/solar-roi-calculator">Solar ROI</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/markup-calculator">Markup</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/profit-margin-calculator">Profit Margin</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/freelance-rate-calculator">Freelance Rate</a></li>
              </ul>
            </div>

            <div class="mega-col">
              <a href="<?php echo $baseUrl; ?>/ohio/" class="mega-col-heading">State Payroll</a>
              <ul>
                <li><a href="<?php echo $baseUrl; ?>/texas/paycheck-calculator"><strong>Texas Paycheck (0% Tax)</strong></a></li>
                <li><a href="<?php echo $baseUrl; ?>/california/paycheck-calculator"><strong>California Paycheck</strong></a></li>
                <li><a href="<?php echo $baseUrl; ?>/florida/paycheck-calculator"><strong>Florida Paycheck (0% Tax)</strong></a></li>
                <li><a href="<?php echo $baseUrl; ?>/new-york/paycheck-calculator"><strong>New York Paycheck</strong></a></li>
                <li><a href="<?php echo $baseUrl; ?>/pennsylvania/paycheck-calculator">Pennsylvania Paycheck</a></li>
                <li><a href="<?php echo $baseUrl; ?>/texas/">Texas Payroll Hub</a></li>
                <li><a href="<?php echo $baseUrl; ?>/ohio/paycheck-calculator">Ohio Paycheck</a></li>
                <li><a href="<?php echo $baseUrl; ?>/ohio/hourly-paycheck-calculator">Ohio Hourly</a></li>
                <li><a href="<?php echo $baseUrl; ?>/ohio/salary-paycheck-calculator">Ohio Salary</a></li>
                <li><a href="<?php echo $baseUrl; ?>/ohio/overtime-calculator">Ohio Overtime</a></li>
                <li><a href="<?php echo $baseUrl; ?>/ohio/bonus-tax-calculator">Ohio Bonus Tax</a></li>
                <li><a href="<?php echo $baseUrl; ?>/ohio/payroll-tax-calculator">Ohio Payroll Tax</a></li>
              </ul>
            </div>

          </div>
        </div>
      </li>

      <!-- -- CONSTRUCTION mega -- -->
      <li class="mega-li">
        <a href="<?php echo $baseUrl; ?>/construction/">Construction</a>
        <div class="mega-menu">
          <div class="mega-inner">

            <div class="mega-col">
              <a href="<?php echo $baseUrl; ?>/construction/concrete-calculator" class="mega-col-heading">Concrete</a>
              <ul>
                <li><a href="<?php echo $baseUrl; ?>/construction/concrete-calculator">Concrete Calculator</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/concrete-slab-calculator">Concrete Slab</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/concrete-bag-calculator">Concrete Bags</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/concrete-yardage-calculator">Concrete Yardage</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/concrete-footing-calculator">Concrete Footing</a></li>
              </ul>
            </div>

            <div class="mega-col">
              <a href="<?php echo $baseUrl; ?>/construction/" class="mega-col-heading">Framing &amp; Structural</a>
              <ul>
                <li><a href="<?php echo $baseUrl; ?>/construction/rafter-calculator">Rafter Calculator</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/linear-feet-calculator">Linear Feet</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/home-addition-cost-calculator">Home Addition Cost</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/cubic-yard-calculator">Cubic Yard</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/board-foot-calculator">Board Foot</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/stair-calculator">Stair Calculator</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/asphalt-calculator">Asphalt</a></li>
              </ul>
            </div>

          </div>
        </div>
      </li>

      <!-- -- MATH small dropdown -- -->
      <li class="has-sub">
        <a href="<?php echo $baseUrl; ?>/math/">Math</a>
        <ul class="drop-menu">
          <li><a href="<?php echo $baseUrl; ?>/calculators/rref.php">RREF Calculator</a></li>
          <li><a href="<?php echo $baseUrl; ?>/calculators/determinant.php">Determinant</a></li>
          <li><a href="<?php echo $baseUrl; ?>/calculators/inverse-matrix.php">Inverse Matrix</a></li>
          <li><a href="<?php echo $baseUrl; ?>/calculators/mixed-fraction.php">Mixed Fraction</a></li>
          <li><a href="<?php echo $baseUrl; ?>/calculators/partial-derivative.php">Partial Derivative</a></li>
          <li><a href="<?php echo $baseUrl; ?>/calculators/differential-equation.php">Differential Eq.</a></li>
        </ul>
      </li>

      <!-- Health and Gaming removed - off-brand content -->

      <!-- -- TECHNOLOGY small dropdown -- -->
      <li class="has-sub">
        <a href="<?php echo $baseUrl; ?>/technology/">Technology</a>
        <ul class="drop-menu">
          <li><a href="<?php echo $baseUrl; ?>/technology/bottleneck-calculator">PC Bottleneck Calculator</a></li>
          <li><a href="<?php echo $baseUrl; ?>/technology/voltage-drop-calculator">Voltage Drop</a></li>
        </ul>
      </li>

    </ul><!-- /hdr-nav -->

  </div><!-- /hdr-row -->
</header>

<script>
(function () {
  var toggle = document.getElementById('navToggle');
  var nav    = document.getElementById('navMenu');

  /* -- flip mega panels near right edge (desktop only) -- */
  function checkFlip() {
    if (window.innerWidth <= 960 || !nav) return;
    nav.querySelectorAll('.mega-li').forEach(function (li) {
      li.classList.remove('flip');
      var r = li.getBoundingClientRect();
      if (r.left + 820 > window.innerWidth - 10) li.classList.add('flip');
    });
  }
  checkFlip();
  window.addEventListener('resize', checkFlip, { passive: true });

  /* -- hamburger -- */
  if (toggle && nav) {
    toggle.addEventListener('click', function (e) {
      e.stopPropagation();
      var open = nav.classList.toggle('open');
      toggle.classList.toggle('open', open);
      toggle.setAttribute('aria-expanded', String(open));
    });
  }

  /* -- mobile accordion -- */
  if (nav) {
    nav.querySelectorAll('.mega-li > a, .has-sub > a').forEach(function (a) {
      a.addEventListener('click', function (e) {
        if (window.innerWidth > 960) return;
        e.preventDefault();
        e.stopPropagation();
        var li  = a.parentElement;
        var was = li.classList.contains('open');
        /* close all siblings */
        nav.querySelectorAll('.mega-li, .has-sub').forEach(function (x) {
          x.classList.remove('open');
        });
        if (!was) li.classList.add('open');
      });
    });
  }

  /* -- close everything on outside click -- */
  document.addEventListener('click', function (e) {
    if (!nav || !toggle) return;
    if (!nav.contains(e.target) && !toggle.contains(e.target)) {
      nav.classList.remove('open');
      toggle.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false');
      nav.querySelectorAll('.mega-li, .has-sub').forEach(function (x) {
        x.classList.remove('open');
      });
    }
  });

  /* -- close on ESC -- */
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      nav && nav.classList.remove('open');
      toggle && toggle.classList.remove('open');
      toggle && toggle.setAttribute('aria-expanded', 'false');
      nav && nav.querySelectorAll('.mega-li, .has-sub').forEach(function (x) {
        x.classList.remove('open');
      });
    }
  });
})();
</script>
