<?php
$currentYear     = date('Y');
$pageTitle       = "Construction & Finance Guides ($currentYear) | AmericaCalculator";
$metaDescription = "Free step-by-step guides on calculating board feet, square footage, roof area, Ohio income tax, cap rate, and more. Written by US construction and finance professionals, updated $currentYear.";
$metaKeywords    = 'construction calculator guides, how to calculate board feet, square footage formula, roof square footage, Ohio income tax, cap rate guide, lumber dimensions, americacalculator blog';
$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'           => 'Blog',
      '@id'             => 'https://americacalculator.com/blog/',
      'name'            => 'AmericaCalculator.com Blog',
      'description'     => 'Free guides on construction measurements, US finance, real estate investing, Ohio taxes, and lumber calculations — written by US professionals.',
      'url'             => 'https://americacalculator.com/blog/',
      'publisher'       => ['@type' => 'Organization', 'name' => 'AmericaCalculator.com', 'url' => 'https://americacalculator.com/'],
      'blogPost'        => [
        ['@type' => 'BlogPosting', 'headline' => 'How to Calculate ROI (2026): Formulas, Real Estate, Marketing & Excel Guide', 'url' => 'https://americacalculator.com/blog/how-to-calculate-roi', 'datePublished' => '2026-10-06'],
        ['@type' => 'BlogPosting', 'headline' => 'How Much House Can I Afford with a $100k Salary in 2026?', 'url' => 'https://americacalculator.com/blog/how-much-house-can-i-afford-with-100k-salary', 'datePublished' => '2026-10-02'],
        ['@type' => 'BlogPosting', 'headline' => 'How Much House Can I Afford with an $80k Salary in 2026?', 'url' => 'https://americacalculator.com/blog/how-much-house-can-i-afford-with-80k-salary', 'datePublished' => '2026-10-02'],
        ['@type' => 'BlogPosting', 'headline' => 'How Much Down Payment Do I Need for a $300,000 House in 2026?', 'url' => 'https://americacalculator.com/blog/how-much-down-payment-for-300k-house', 'datePublished' => '2026-10-02'],
        ['@type' => 'BlogPosting', 'headline' => 'How Much Are Closing Costs on a $300,000 House in 2026?', 'url' => 'https://americacalculator.com/blog/how-much-are-closing-costs-on-a-300k-house', 'datePublished' => '2026-10-02'],
        ['@type' => 'BlogPosting', 'headline' => 'How to Calculate Cap Rate on a Rental Property (2026 Guide)', 'url' => 'https://americacalculator.com/blog/how-to-calculate-cap-rate-on-rental-property', 'datePublished' => '2026-10-02'],
        ['@type' => 'BlogPosting', 'headline' => 'What Is a Good Cash on Cash Return for Rental Properties in 2026?', 'url' => 'https://americacalculator.com/blog/what-is-a-good-cash-on-cash-return', 'datePublished' => '2026-10-02'],
        ['@type' => 'BlogPosting', 'headline' => 'How to Calculate Closing Costs (2026) — Complete US State-by-State Guide', 'url' => 'https://americacalculator.com/blog/how-to-calculate-closing-costs', 'datePublished' => '2026-09-14'],
        ['@type' => 'BlogPosting', 'headline' => 'What Is a Good Cap Rate in 2026? (By City & Property Type)', 'url' => 'https://americacalculator.com/blog/what-is-a-good-cap-rate', 'datePublished' => '2026-09-14'],
        ['@type' => 'BlogPosting', 'headline' => 'SBA 7(a) vs 504 Loan: Which Is Right for Your Business? (2026 Guide)', 'url' => 'https://americacalculator.com/blog/sba-7a-vs-504-loan-calculator-guide', 'datePublished' => '2026-09-14'],
        ['@type' => 'BlogPosting', 'headline' => 'Ohio Closing Costs: Complete 2026 Guide for Buyers & Sellers', 'url' => 'https://americacalculator.com/blog/ohio-closing-costs-guide', 'datePublished' => '2026-09-01'],
        ['@type' => 'BlogPosting', 'headline' => 'Ohio Property Tax by County (2026): Rates, Bills & Calculator', 'url' => 'https://americacalculator.com/blog/ohio-property-tax-by-county', 'datePublished' => '2026-09-01'],
        ['@type' => 'BlogPosting', 'headline' => 'SBA Loan vs. Conventional Business Loan (2026): Which Is Better?', 'url' => 'https://americacalculator.com/blog/sba-loan-vs-conventional-business-loan', 'datePublished' => '2026-09-01'],
        ['@type' => 'BlogPosting', 'headline' => 'Just Got a Job in Ohio? Calculate Your Exact Take-Home Pay (2026)', 'url' => 'https://americacalculator.com/blog/ohio-paycheck-calculator-new-job-take-home-pay', 'datePublished' => '2026-08-15'],
        ['@type' => 'BlogPosting', 'headline' => 'How Long Will My Retirement Savings Last? The Complete 2026 Guide + Calculator', 'url' => 'https://americacalculator.com/blog/retirement-savings-longevity-calculator', 'datePublished' => '2026-08-15'],
        ['@type' => 'BlogPosting', 'headline' => 'Nominal vs Actual Lumber Dimensions: Board Foot Differences Explained', 'url' => 'https://americacalculator.com/blog/nominal-vs-actual-lumber-dimensions', 'datePublished' => '2026-07-14'],
        ['@type' => 'BlogPosting', 'headline' => 'How to Calculate Board Feet of Lumber', 'url' => 'https://americacalculator.com/blog/how-to-calculate-board-feet-lumber', 'datePublished' => '2026-07-14'],
        ['@type' => 'BlogPosting', 'headline' => 'How to Calculate Roof Square Footage', 'url' => 'https://americacalculator.com/blog/how-to-calculate-roof-square-footage', 'datePublished' => '2026-07-01'],
        ['@type' => 'BlogPosting', 'headline' => 'How to Calculate Square Footage of a Building', 'url' => 'https://americacalculator.com/blog/how-to-calculate-square-footage-of-a-building', 'datePublished' => '2026-07-01'],
        ['@type' => 'BlogPosting', 'headline' => 'How to Calculate Square Feet of a Room, House, or Building (2026 Guide)', 'url' => 'https://americacalculator.com/blog/how-to-calculate-square-feet-of-a-room', 'datePublished' => '2026-07-01', 'dateModified' => '2026-08-15'],
        ['@type' => 'BlogPosting', 'headline' => 'Ohio State Income Tax Guide 2026', 'url' => 'https://americacalculator.com/blog/ohio-state-income-tax', 'datePublished' => '2026-07-01'],
        ['@type' => 'BlogPosting', 'headline' => 'How to Calculate Cap Rate', 'url' => 'https://americacalculator.com/blog/how-to-calculate-cap-rate', 'datePublished' => '2026-07-01'],
      ],
    ],
    [
      '@type'           => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => 'https://americacalculator.com/blog/'],
      ],
    ],
  ],
];
require_once '../includes/header.php';
?>
<style>
*{box-sizing:border-box;}body{background:#f8fafc;}
.blog-index-wrap{max-width:980px;margin:0 auto;padding:2.5rem 1.25rem 4rem;}
.blog-index-bc{font-size:.79rem;color:#94a3b8;margin-bottom:1rem;}
.blog-index-bc a{color:#64748b;text-decoration:none;}.blog-index-bc a:hover{color:#1d4ed8;}

/* ── Hero ── */
.blog-index-hero{background:linear-gradient(135deg,#1e293b,#0f172a);border-radius:16px;padding:2.5rem 2rem;margin-bottom:2rem;position:relative;overflow:hidden;}
.blog-index-hero::before{content:'';position:absolute;top:-40px;right:-40px;width:200px;height:200px;background:radial-gradient(circle,rgba(59,130,246,.18),transparent 70%);border-radius:50%;}
.blog-index-hero h1{font-size:1.85rem;color:#f1f5f9;margin:0 0 .65rem;line-height:1.25;position:relative;z-index:1;}
.blog-index-hero p{font-size:.97rem;color:#94a3b8;line-height:1.68;margin:0 0 1.25rem;max-width:600px;position:relative;z-index:1;}
.blog-hero-stats{display:flex;flex-wrap:wrap;gap:1.5rem;position:relative;z-index:1;}
.blog-hero-stat{text-align:left;}
.blog-hero-stat .num{font-size:1.5rem;font-weight:800;color:#7dd3fc;}
.blog-hero-stat .lbl{font-size:.75rem;color:#64748b;text-transform:uppercase;letter-spacing:.05em;}

/* ── Category filter ── */
.blog-cats{display:flex;flex-wrap:wrap;gap:.5rem;margin-bottom:1.75rem;}
.blog-cat-pill{padding:6px 16px;border-radius:20px;font-size:.8rem;font-weight:700;cursor:pointer;border:1.5px solid #e2e8f0;background:#fff;color:#64748b;transition:all .15s;text-decoration:none;}
.blog-cat-pill:hover,.blog-cat-pill.active{background:#1d4ed8;color:#fff;border-color:#1d4ed8;}

/* ── Grid ── */
.blog-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(285px,1fr));gap:1.35rem;}
.blog-card{background:#fff;border:1px solid #e2e8f0;border-radius:13px;padding:1.5rem;box-shadow:0 2px 8px rgba(0,0,0,.04);transition:box-shadow .2s,transform .15s;display:flex;flex-direction:column;}
.blog-card:hover{box-shadow:0 8px 24px rgba(0,0,0,.1);transform:translateY(-3px);}
.blog-card a{text-decoration:none;color:inherit;display:flex;flex-direction:column;height:100%;}
.blog-card .cat-tag{display:inline-block;font-size:.71rem;font-weight:700;text-transform:uppercase;letter-spacing:.06em;color:#1d4ed8;background:#eff6ff;border-radius:20px;padding:3px 11px;margin-bottom:.65rem;width:fit-content;}
.blog-card h2{font-size:1.02rem;font-weight:700;color:#0f172a;margin:0 0 .55rem;line-height:1.4;}
.blog-card p{font-size:.86rem;color:#64748b;line-height:1.62;margin:0 0 auto;padding-bottom:1rem;}
.blog-card .meta{font-size:.75rem;color:#94a3b8;padding-top:.75rem;border-top:1px solid #f1f5f9;}
.blog-card .read-more{display:inline-flex;align-items:center;gap:5px;margin-top:.75rem;font-size:.84rem;font-weight:700;color:#1d4ed8;}
.blog-card .read-more::after{content:'→';transition:transform .15s;}
.blog-card:hover .read-more::after{transform:translateX(3px);}

/* ── Featured card (first item) ── */
.blog-card.featured{grid-column:span 2;flex-direction:row;gap:1.5rem;align-items:center;}
.blog-card.featured .blog-card-text{flex:1;}
.blog-card.featured h2{font-size:1.2rem;}

@media(max-width:700px){.blog-card.featured{grid-column:span 1;flex-direction:column;}}
@media(max-width:580px){.blog-grid{grid-template-columns:1fr;}}
</style>
<main id="main-content">
<div class="blog-index-wrap">

  <div class="blog-index-bc"><a href="/">Home</a> º Blog</div>

  <!-- Hero -->
  <div class="blog-index-hero">
    <h1>AmericaCalculator.com — Free How-To Guides</h1>
    <p>Step-by-step guides on construction measurements, US finance, real estate investing, Ohio payroll taxes, and lumber calculations — written by professionals, updated for <?php echo $currentYear; ?>.</p>
    <div class="blog-hero-stat">
      <div class="blog-hero-stat"><div class="num">21</div><div class="lbl">Guides Published</div></div>
      <div class="blog-hero-stat"><div class="num">1</div><div class="lbl">Free Calculator</div></div>
      <div class="blog-hero-stat"><div class="num">4</div><div class="lbl">Topics Covered</div></div>
      <div class="blog-hero-stat"><div class="num">Free</div><div class="lbl">Always &amp; Forever</div></div>
    </div>
  </div>

  <!-- Category filter pills -->
  <div class="blog-cat">
    <a href="#" class="blog-cat-pill active" data-cat="all">All Articles</a>
    <a href="#" class="blog-cat-pill" data-cat="construction">🏗️ Construction</a>
    <a href="#" class="blog-cat-pill" data-cat="lumber">🪵 Lumber</a>
    <a href="#" class="blog-cat-pill" data-cat="finance">💰 Finance</a>
    <a href="#" class="blog-cat-pill" data-cat="retirement">📊 Retirement</a>
    <a href="#" class="blog-cat-pill" data-cat="realestate">🏘️ Real Estate</a>
    <a href="#" class="blog-cat-pill" data-cat="tool">🧮 Calculators</a>
  </div>

  <!-- Articles grid -->
  <div class="blog-grid">

    <div class="blog-card" data-cat="finance">
      <a href="/blog/how-to-calculate-roi">
        <div class="cat-tag">📈 Business &amp; ROI — New Guide</div>
        <h2>How to Calculate ROI (<?php echo $currentYear; ?>): Formulas, Real Estate, Marketing &amp; Excel Guide</h2>
        <p>Master simple and annualized ROI formulas with worked real-world examples: rental property cash flows, ROAS vs marketing ROI, Amazon FBA unit economics, solar payback, and Excel formulas.</p>
        <div class="meta">AmericaCalculator.com • October <?php echo $currentYear; ?> • 12 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <div class="blog-card" data-cat="realestate">
      <a href="/blog/how-much-house-can-i-afford-with-100k-salary">
        <div class="cat-tag">🏠 Real Estate — New Guide</div>
        <h2>How Much House Can I Afford with a $100k Salary in <?php echo $currentYear; ?>?</h2>
        <p>Complete buying power breakdown for a $100,000 income: DTI calculations, realistic price ranges ($320k–$420k), down payments, and debt impacts.</p>
        <div class="meta">AmericaCalculator.com • October <?php echo $currentYear; ?> • 9 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <div class="blog-card" data-cat="realestate">
      <a href="/blog/how-much-house-can-i-afford-with-80k-salary">
        <div class="cat-tag">🏠 Real Estate — New Guide</div>
        <h2>How Much House Can I Afford with an $80k Salary in <?php echo $currentYear; ?>?</h2>
        <p>Realistic home price ranges ($250k–$330k) on an $80,000 salary. Front-end 28% and back-end 36% rules with FHA and conventional payment examples.</p>
        <div class="meta">AmericaCalculator.com • October <?php echo $currentYear; ?> • 8 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <div class="blog-card" data-cat="realestate">
      <a href="/blog/how-much-down-payment-for-300k-house">
        <div class="cat-tag">💰 Down Payment — New Guide</div>
        <h2>How Much Down Payment Do I Need for a $300,000 House in <?php echo $currentYear; ?>?</h2>
        <p>Compare Conventional (3%–20%), FHA (3.5%), VA (0%), and USDA (0%) down payments on a $300k home, plus total liquid cash needed at closing.</p>
        <div class="meta">AmericaCalculator.com • October <?php echo $currentYear; ?> • 8 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <div class="blog-card" data-cat="realestate">
      <a href="/blog/how-much-are-closing-costs-on-a-300k-house">
        <div class="cat-tag">🧾 Closing Costs — New Guide</div>
        <h2>How Much Are Closing Costs on a $300,000 House in <?php echo $currentYear; ?>?</h2>
        <p>Average buyer closing costs ($6,000 to $15,000) on a $300k home. Itemized fee checklists, state transfer tax differences, and 5 ways to save.</p>
        <div class="meta">AmericaCalculator.com • October <?php echo $currentYear; ?> • 10 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <div class="blog-card" data-cat="realestate">
      <a href="/blog/how-to-calculate-cap-rate-on-rental-property">
        <div class="cat-tag">📊 Investing — New Guide</div>
        <h2>How to Calculate Cap Rate on a Rental Property (<?php echo $currentYear; ?> Guide)</h2>
        <p>Exact formula for capitalization rate, step-by-step Net Operating Income (NOI) calculation, worked examples, and US city benchmark cap rates.</p>
        <div class="meta">AmericaCalculator.com • October <?php echo $currentYear; ?> • 9 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <div class="blog-card" data-cat="realestate">
      <a href="/blog/what-is-a-good-cash-on-cash-return">
        <div class="cat-tag">💵 Investor ROI — New Guide</div>
        <h2>What Is a Good Cash on Cash Return for Rental Properties in <?php echo $currentYear; ?>?</h2>
        <p>Why 8% to 12% is the target benchmark for real estate cash flow. How mortgage leverage impacts cash-on-cash returns with worked investment examples.</p>
        <div class="meta">AmericaCalculator.com • October <?php echo $currentYear; ?> • 9 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <!-- Featured: newest article -->
    <div class="blog-card" data-cat="realestate">
      <a href="/blog/how-to-calculate-closing-cost">
        <div class="cat-tag">Real Estate — New Guide</div>
        <h2>How to Calculate Closing Costs (<?php echo $currentYear; ?>): Complete US State-by-State Guide</h2>
        <p>Full breakdown of lender fees, title insurance, escrow, and transfer taxes across all 50 states. Worked example for a $350K purchase with buyer vs. seller fee checklists.</p>
        <div class="meta">AmericaCalculator.com • September <?php echo $currentYear; ?> • 12 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <div class="blog-card" data-cat="realestate">
      <a href="/blog/what-is-a-good-cap-rate">
        <div class="cat-tag">Real Estate — New Guide</div>
        <h2>What Is a Good Cap Rate in <?php echo $currentYear; ?>? (By City &amp; Property Type)</h2>
        <p>Comprehensive benchmarks for multifamily, commercial, and single-family rentals across Tier 1, 2, and 3 US metros. Learn how interest rates impact acceptable cap rates.</p>
        <div class="meta">AmericaCalculator.com • September <?php echo $currentYear; ?> • 11 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <div class="blog-card" data-cat="finance">
      <a href="/blog/sba-7a-vs-504-loan-calculator-guide">
        <div class="cat-tag">Business Finance — New Guide</div>
        <h2>SBA 7(a) vs 504 Loan: Which Is Right for Your Business? (<?php echo $currentYear; ?> Guide)</h2>
        <p>Side-by-side comparison of loan limits, terms, interest rates, down payments, and CDC structure. Step-by-step calculator instructions and real approval checklists.</p>
        <div class="meta">AmericaCalculator.com • September <?php echo $currentYear; ?> • 13 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>
    <!-- Featured: newest article -->
    <div class="blog-card featured" data-cat="retirement">
      <a href="/blog/retirement-savings-longevity-calculator">
        <div class="blog-card-text">
          <div class="cat-tag">📊 Retirement — New</div>
          <h2>How Long Will My Retirement Savings Last? The Complete <?php echo $currentYear; ?> Guide + Calculator</h2>
          <p>Calculate exactly how long your retirement savings will last. Includes updated 4% rule for <?php echo $currentYear; ?>, withdrawal strategies, Social Security planning, and real examples with $1M portfolios.</p>
          <div class="meta">AmericaCalculator.com · August <?php echo $currentYear; ?> · 15 min read</div>
          <span class="read-more">Read Guide</span>
        </div>
      </a>
    </div>

    <div class="blog-card" data-cat="lumber">
      <a href="/blog/nominal-vs-actual-lumber-dimension">
        <div class="cat-tag">🪵 Lumber</div>
        <h2>Nominal vs Actual Lumber Dimensions: Board Foot Differences Explained</h2>
        <p>Why a 2×4 isn't actually 2×4. Full 16-size comparison chart, how the 30–34% size gap affects your invoice, when to use each measurement method, and hardwood exceptions.</p>
        <div class="meta">AmericaCalculator.com · July <?php echo $currentYear; ?> · 8 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <div class="blog-card" data-cat="construction">
      <a href="/blog/how-to-calculate-roof-square-footage">
        <div class="cat-tag">🏗️ Construction</div>
        <h2>How to Calculate Roof Square Footage: Formula, Pitch and Examples</h2>
        <p>Pitch factor table (3/12–12/12), roofing squares conversion, waste allowances for asphalt, tile, and metal, plus a full example for a Birmingham home.</p>
        <div class="meta">AmericaCalculator.com · July 2026 · 9 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <div class="blog-card" data-cat="construction">
      <a href="/blog/how-to-calculate-square-footage-of-a-building">
        <div class="cat-tag">🏗️ Construction</div>
        <h2>How to Easily Calculate Square Footage of a Building</h2>
        <p>Step-by-step method for rectangular and irregular buildings, multi-story homes, garages, and commercial spaces — with US city examples.</p>
        <div class="meta">AmericaCalculator.com · July 2026 · 7 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <div class="blog-card" data-cat="construction">
      <a href="/blog/how-to-calculate-square-feet-of-a-room">
        <div class="cat-tag">🏗️ Construction</div>
        <h2>How to Calculate Square Feet of a Room, House, or Building (<?php echo $currentYear; ?> Guide)</h2>
        <p>Step-by-step formulas for any room, L-shaped spaces, circular areas, whole-house totals, ANSI standards, flooring/paint/roofing buffers, and 7 common mistakes — with a full conversion table.</p>
        <div class="meta">AmericaCalculator.com · August <?php echo $currentYear; ?> · 12 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <div class="blog-card" data-cat="realestate">
      <a href="/blog/how-to-calculate-cap-rate">
        <div class="cat-tag">🏘️ Real Estate</div>
        <h2>How to Calculate Cap Rate: Formula, Examples &amp; <?php echo $currentYear; ?> Benchmarks</h2>
        <p>Step-by-step cap rate formula with worked examples for Memphis and Cleveland, <?php echo $currentYear; ?> benchmarks by city, and 5 mistakes that destroy returns.</p>
        <div class="meta">AmericaCalculator.com · August 2026 · 12 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <div class="blog-card" data-cat="finance">
      <a href="/blog/ohio-state-income-tax">
        <div class="cat-tag">💰 Ohio Taxes</div>
        <h2>Ohio State Income Tax Guide <?php echo $currentYear; ?>: Brackets, Rates &amp; Local Tax</h2>
        <p>Ohio's progressive tax brackets, municipal rates for Columbus, Cleveland &amp; Cincinnati, filing status impact, and how to reduce your total Ohio tax burden.</p>
        <div class="meta">AmericaCalculator.com · August 2026 · 10 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <!-- New: Ohio closing costs guide -->
    <div class="blog-card" data-cat="realestate">
      <a href="/blog/ohio-closing-costs-guide">
        <div class="cat-tag">🏘️ Ohio Real Estate — New</div>
        <h2>Ohio Closing Costs: Complete <?php echo $currentYear; ?> Guide for Buyers &amp; Sellers</h2>
        <p>Every fee explained, county-by-county conveyance rates, regional title-insurance customs, $300K real scenario, and 12 FAQ answers. Ohio buyers average $11,192 — 30% below the national average.</p>
        <div class="meta">AmericaCalculator.com · September <?php echo $currentYear; ?> · 12 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <!-- New: Ohio property tax guide -->
    <div class="blog-card" data-cat="realestate">
      <a href="/blog/ohio-property-tax-by-county">
        <div class="cat-tag">🏘️ Ohio Real Estate — New</div>
        <h2>Ohio Property Tax by County (<?php echo $currentYear; ?>): Rates, Bills &amp; Calculator</h2>
        <p>How Ohio's 35% assessment rule works, 33-county rate table, embedded tax estimator, pre-offer buyer checklist, and what drives bill differences within the same county.</p>
        <div class="meta">AmericaCalculator.com · September <?php echo $currentYear; ?> · 15 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <!-- New: SBA vs Conventional guide -->
    <div class="blog-card" data-cat="finance">
      <a href="/blog/sba-loan-vs-conventional-business-loan">
        <div class="cat-tag">🏦 Business Finance — New</div>
        <h2>SBA Loan vs. Conventional Business Loan (<?php echo $currentYear; ?>): Which Is Better?</h2>
        <p>Real <?php echo $currentYear; ?> rates, approval data, 4 scenarios where SBA wins, 3 where conventional wins, side-by-side comparison table, and a 60-second decision framework.</p>
        <div class="meta">AmericaCalculator.com · September <?php echo $currentYear; ?> · 14 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <!-- New: Ohio take-home pay guide -->
    <div class="blog-card" data-cat="finance">
      <a href="/blog/ohio-paycheck-calculator-new-job-take-home-pay">
        <div class="cat-tag">💰 Ohio Payroll — New</div>
        <h2>Just Got a Job in Ohio? Calculate Your Exact Take-Home Pay (<?php echo $currentYear; ?>)</h2>
        <p>All 4 tax layers explained: federal, Ohio state, city municipal, and FICA. Salary-to-take-home table for $35K“$120K, city-by-city comparison, W-4 &amp; IT-4 guide, and bonus tax calculator link.</p>
        <div class="meta">AmericaCalculator.com · August <?php echo $currentYear; ?> · 12 min read</div>
        <span class="read-more">Read Guide</span>
      </a>
    </div>

    <!-- Calculator card -->
    <div class="blog-card" data-cat="tool">
      <a href="/calculators/retirement-saving">
        <div class="cat-tag">🧮 Free Calculator</div>
        <h2>Retirement Savings Calculator — How Long Will My Money Last?</h2>
        <p>Enter your nest egg, pick your location (Michigan, Texas, Florida, and 17 more), add Social Security, and get a year-by-year projection of how long your savings last.</p>
        <div class="meta">AmericaCalculator.com · <?php echo $currentYear; ?> · Free Tool</div>
        <span class="read-more">Use Calculator</span>
      </a>
    </div>

  </div><!-- /blog-grid -->

</div>
</main>

<script>
// Category filter
document.querySelectorAll('.blog-cat-pill').forEach(function(pill){
  pill.addEventListener('click', function(e){
    e.preventDefault();
    document.querySelectorAll('.blog-cat-pill').forEach(function(p){ p.classList.remove('active'); });
    pill.classList.add('active');
    var cat = pill.getAttribute('data-cat');
    document.querySelectorAll('.blog-card').forEach(function(card){
      if(cat === 'all' || card.getAttribute('data-cat') === cat){
        card.style.display = '';
      } else {
        card.style.display = 'none';
      }
    });
    // fix featured span when filtering
    var featured = document.querySelector('.blog-card.featured');
    if(featured && featured.style.display !== 'none'){
      featured.style.gridColumn = window.innerWidth > 700 ? 'span 2' : '';
    }
  });
});
</script>
<?php require_once '../includes/footer.php'; ?>

