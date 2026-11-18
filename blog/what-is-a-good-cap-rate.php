<?php
$currentYear = date('Y');
$pageTitle       = "What Is a Good Cap Rate in $currentYear? (By City & Property Type) | AmericaCalculator";
$metaDescription = "What is a good cap rate for rental property in $currentYear? Benchmark cap rates by US city, property type, and risk level. National average, top markets, and free cap rate calculator.";
$metaKeywords    = "what is a good cap rate, good cap rate for rental property, cap rate by city 2026, what is a good capitalization rate, real estate cap rate benchmarks, average cap rate 2026";
$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    ['@type' => 'Article',
     'headline' => "What Is a Good Cap Rate in $currentYear? Complete Guide by City & Property Type",
     'description' => "Benchmark cap rates by US city, property type, and risk level for $currentYear. Includes national averages and top cash-flow markets.",
     'url' => "https://americacalculator.com/blog/what-is-a-good-cap-rate",
     'datePublished' => '2026-09-14',
     'dateModified'  => '2026-09-14',
     'author' => ['@type' => 'Person', 'name' => 'Sarah Mitchell', 'jobTitle' => 'Real Estate Investment Analyst'],
     'publisher' => ['@type' => 'Organization', 'name' => 'AmericaCalculator.com', 'url' => 'https://americacalculator.com/'],
     'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => "https://americacalculator.com/blog/what-is-a-good-cap-rate"],
    ],
    ['@type' => 'BreadcrumbList', 'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog', 'item' => 'https://americacalculator.com/blog/'],
      ['@type' => 'ListItem', 'position' => 3, 'name' => "What Is a Good Cap Rate $currentYear", 'item' => "https://americacalculator.com/blog/what-is-a-good-cap-rate"],
    ]],
    ['@type' => 'FAQPage', 'mainEntity' => [
      ['@type' => 'Question', 'name' => 'What is a good cap rate for a rental property?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => "In $currentYear, a good cap rate for residential rental property is generally 5%–10%. A 5%–7% cap rate is considered solid for stable primary markets. An 8%–10% cap rate is strong and typically found in high-cash-flow Midwest markets like Cleveland, Memphis, and Indianapolis. Cap rates below 4% are common in high-appreciation coastal cities like NYC and San Francisco where investors prioritize price growth over current income."]],
      ['@type' => 'Question', 'name' => 'What is the national average cap rate in 2026?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'The national average gross rental yield (which approximates cap rate) for US single-family rental properties in 2026 is approximately 6.71%. For multifamily apartments nationally, average cap rates are in the 5.5%–6.5% range. Commercial cap rates vary widely: industrial 5–7%, retail 6–8%, office 6–9%.']],
      ['@type' => 'Question', 'name' => 'Is a 7% cap rate good?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes — a 7% cap rate is considered good to very good for most US markets in 2026. It indicates a property generating solid income relative to its price. A 7% cap rate is above the national average and is achievable in Midwest and Sun Belt secondary markets. For context: at 7% cap rate with $14,000 NOI, property value = $200,000.']],
    ]],
  ],
];
require_once __DIR__ . '/../includes/header.php';
?>
<style>
*{box-sizing:border-box;}
body{background:#f8fafc;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,sans-serif;color:#1e293b;margin:0;}
a{color:#2563eb;} a:hover{text-decoration:underline;}
.blog-body{max-width:860px;margin:0 auto;padding:32px 20px 64px;}
.breadcrumb{font-size:.82rem;color:#94a3b8;margin-bottom:24px;}
.breadcrumb a{color:#2563eb;text-decoration:none;}
.blog-hero h1{font-size:1.9rem;font-weight:800;color:#0f172a;margin:0 0 12px;line-height:1.3;}
.blog-meta{font-size:.84rem;color:#64748b;margin-bottom:16px;display:flex;gap:16px;flex-wrap:wrap;}
.blog-intro{font-size:1.05rem;color:#334155;line-height:1.75;margin:0 0 28px;}
.blog-body h2{font-size:1.4rem;font-weight:700;color:#0f172a;margin:36px 0 14px;border-left:4px solid #059669;padding-left:14px;}
.blog-body h3{font-size:1.1rem;font-weight:700;color:#0f172a;margin:24px 0 10px;}
.blog-body p{line-height:1.78;color:#334155;margin:0 0 16px;}
.blog-body ul,.blog-body ol{padding-left:1.5rem;margin:0 0 16px;}
.blog-body li{line-height:1.75;color:#334155;margin-bottom:6px;}
.callout{background:#f0fdf4;border:1px solid #bbf7d0;border-radius:12px;padding:18px 22px;margin:24px 0;}
.callout p{margin:0;color:#166534;}
.cap-table{width:100%;border-collapse:collapse;margin:20px 0;font-size:.91rem;}
.cap-table th{background:#059669;color:#fff;padding:10px 14px;text-align:left;}
.cap-table td{padding:9px 14px;border-bottom:1px solid #e2e8f0;}
.cap-table tr:nth-child(even) td{background:#f8fafc;}
.badge-high{display:inline-block;background:#dcfce7;color:#166534;font-size:.75rem;font-weight:700;padding:2px 8px;border-radius:20px;}
.badge-med{display:inline-block;background:#fef9c3;color:#854d0e;font-size:.75rem;font-weight:700;padding:2px 8px;border-radius:20px;}
.badge-low{display:inline-block;background:#fee2e2;color:#991b1b;font-size:.75rem;font-weight:700;padding:2px 8px;border-radius:20px;}
.cta-box{background:linear-gradient(135deg,#059669,#10b981);border-radius:14px;padding:24px 28px;margin:32px 0;text-align:center;color:#fff;}
.cta-box h3{margin:0 0 8px;font-size:1.2rem;}
.cta-box p{margin:0 0 16px;opacity:.9;}
.cta-box a{display:inline-block;background:#fff;color:#059669;padding:12px 28px;border-radius:8px;font-weight:700;text-decoration:none;}
.faq-item{border-bottom:1px solid #e2e8f0;padding:14px 0;}
.faq-item:last-child{border-bottom:none;}
.faq-q{font-weight:700;color:#0f172a;margin-bottom:8px;cursor:pointer;display:flex;justify-content:space-between;align-items:center;}
.faq-q::after{content:'+';font-size:1.2rem;color:#059669;flex-shrink:0;}
.faq-item.open .faq-q::after{content:'-';}
.faq-a{color:#475569;line-height:1.7;display:none;}
.faq-item.open .faq-a{display:block;}
</style>
<main>
<div class="blog-body">
  <nav class="breadcrumb" aria-label="Breadcrumb"><a href="<?php echo $baseUrl; ?>/">Home</a> &rsaquo; <a href="<?php echo $baseUrl; ?>/blog/">Blog</a> &rsaquo; What Is a Good Cap Rate</nav>

  <div class="blog-hero">
    <h1>What Is a Good Cap Rate in <?php echo $currentYear; ?>? (By City &amp; Property Type)</h1>
    <div class="blog-meta">
      <span>By <strong>Sarah Mitchell</strong>, Real Estate Investment Analyst</span>
      <span>Updated: September <?php echo $currentYear; ?></span>
      <span>8 min read</span>
    </div>
    <p class="blog-intro">The "right" cap rate depends entirely on <em>where you buy</em> and <em>what you want</em>. A 4% cap rate is excellent in Manhattan. A 4% cap rate in Cleveland would be a disaster for a cash-flow investor. This guide shows you exactly what cap rates to expect in <?php echo $currentYear; ?> by US city, property type, and investment strategy.</p>
  </div>

  <div class="callout">
    <p><strong>Quick Answer:</strong> A good cap rate for US rental property in <?php echo $currentYear; ?> is generally <strong>5%–10%</strong>. The national average is ~6.71%. Anything above 8% is strong cash flow; below 4% is appreciation-play territory. Use our <a href="<?php echo $baseUrl; ?>/real-estate/cap-rate-calculator">cap rate calculator</a> to aAnalyze any property.</p>
  </div>

  <h2>Cap Rate Scale: What Each Range Means</h2>
  <table class="cap-table">
    <thead><tr><th>Cap Rate Range</th><th>Rating</th><th>Typical Market / Property</th></tr></thead>
    <tbody>
      <tr><td>Below 3%</td><td><span class="badge-low">Very Low</span></td><td>NYC luxury condos, SF prime, ultra-trophy assets</td></tr>
      <tr><td>3%–4.9%</td><td><span class="badge-low">Low</span></td><td>Coastal tier-1 cities — appreciation play</td></tr>
      <tr><td>5%–6.9%</td><td><span class="badge-med">Average</span></td><td>Balanced markets: Atlanta, Dallas, Denver</td></tr>
      <tr><td>7%–8.9%</td><td><span class="badge-high">Good</span></td><td>Strong cash-flow markets: Indianapolis, Columbus, Memphis</td></tr>
      <tr><td>9%–11%</td><td><span class="badge-high">Excellent</span></td><td>High-yield markets: Cleveland, Detroit, some Ohio cities</td></tr>
      <tr><td>Above 12%</td><td><span class="badge-med">Warning</span></td><td>Distressed areas — high risk, verify NOI carefully</td></tr>
    </tbody>
  </table>

  <h2><?php echo $currentYear; ?> Cap Rate Benchmarks by US City</h2>
  <table class="cap-table">
    <thead><tr><th>City</th><th>Avg Cap Rate (Residential)</th><th>Market Type</th></tr></thead>
    <tbody>
      <tr><td>Cleveland, OH</td><td>7%–11%</td><td>High cash flow</td></tr>
      <tr><td>Detroit, MI</td><td>7%–10%</td><td>High cash flow / value-add</td></tr>
      <tr><td>Memphis, TN</td><td>7%–10%</td><td>Strong landlord market</td></tr>
      <tr><td>Indianapolis, IN</td><td>6%–9%</td><td>Balanced cash flow</td></tr>
      <tr><td>Columbus, OH</td><td>6%–8%</td><td>Growing market</td></tr>
      <tr><td>Birmingham, AL</td><td>7%–9%</td><td>Emerging cash flow</td></tr>
      <tr><td>Kansas City, MO</td><td>6%–8%</td><td>Stable landlord market</td></tr>
      <tr><td>Dallas-Fort Worth, TX</td><td>5%–7%</td><td>Appreciation + cash flow</td></tr>
      <tr><td>Atlanta, GA</td><td>5%–7%</td><td>Appreciation + cash flow</td></tr>
      <tr><td>Charlotte, NC</td><td>5%–7%</td><td>Growing secondary market</td></tr>
      <tr><td>Phoenix, AZ</td><td>4%–6%</td><td>Appreciation-focused</td></tr>
      <tr><td>Austin, TX</td><td>4%–5.5%</td><td>Tech-driven appreciation</td></tr>
      <tr><td>Miami, FL</td><td>4%–6%</td><td>Tourism + appreciation</td></tr>
      <tr><td>Chicago, IL</td><td>5%–7%</td><td>Mixed — varies by neighborhood</td></tr>
      <tr><td>Los Angeles, CA</td><td>3%–5%</td><td>Long-term appreciation play</td></tr>
      <tr><td>Seattle, WA</td><td>3%–4.5%</td><td>Tech sector appreciation</td></tr>
      <tr><td>New York City, NY</td><td>3%–4.5%</td><td>Preservation of capital + appreciation</td></tr>
      <tr><td>San Francisco, CA</td><td>2.5%–4%</td><td>Pure appreciation play</td></tr>
    </tbody>
  </table>

  <h2>Good Cap Rate by Property Type</h2>
  <table class="cap-table">
    <thead><tr><th>Property Type</th><th>Good Cap Rate (<?php echo $currentYear; ?>)</th><th>Notes</th></tr></thead>
    <tbody>
      <tr><td>Single-Family Rental (SFR)</td><td>5%–9%</td><td>Widest range depending on market</td></tr>
      <tr><td>Small Multifamily (2–4 units)</td><td>6%–10%</td><td>Better cash flow than SFR generally</td></tr>
      <tr><td>Apartment Complex (5+ units)</td><td>5%–8%</td><td>Lower rates due to institutional demand</td></tr>
      <tr><td>Industrial / Warehouse</td><td>5%–7%</td><td>Compressed by e-commerce demand</td></tr>
      <tr><td>Retail Strip Mall</td><td>6%–8%</td><td>Higher risk reflects retail headwinds</td></tr>
      <tr><td>Office Building</td><td>6%–9%</td><td>Elevated post-COVID due to WFH</td></tr>
      <tr><td>Net Lease (NNN)</td><td>4%–6%</td><td>Low risk, passive income</td></tr>
      <tr><td>Self-Storage</td><td>5%–7%</td><td>Recession-resistant, low capex</td></tr>
      <tr><td>Mobile Home Parks</td><td>6%–9%</td><td>Affordable housing demand drives growth</td></tr>
    </tbody>
  </table>

  <div class="cta-box">
    <h3>Calculate the Cap Rate on Any Property</h3>
    <p>Enter the property price and NOI to instantly see your cap rate, gauge rating, and 2026 market context.</p>
    <a href="<?php echo $baseUrl; ?>/real-estate/cap-rate-calculator">Use the Free Cap Rate Calculator &rarr;</a>
  </div>

  <h2>Frequently Asked Questions</h2>
  <div class="faq-item open">
    <div class="faq-q">What is a good cap rate for a rental property?</div>
    <div class="faq-a">In <?php echo $currentYear; ?>, a good cap rate for residential rental property is 5%–10%. A 5%–7% cap rate is solid for stable primary markets. An 8%–10% cap rate is strong and typically found in Midwest cash-flow markets. Cap rates below 4% are common in high-appreciation coastal cities where investors bet on price growth over income.</div>
  </div>
  <div class="faq-item">
    <div class="faq-q">Is a 7% cap rate good?</div>
    <div class="faq-a">Yes — 7% is considered good to very good for most US markets in <?php echo $currentYear; ?>. It's above the national average (~6.71%) and is achievable in Midwest and Sun Belt secondary markets like Indianapolis, Columbus, and Memphis. At a 7% cap rate with $21,000 NOI, the implied property value is $300,000.</div>
  </div>
  <div class="faq-item">
    <div class="faq-q">What is the national average cap rate in <?php echo $currentYear; ?>?</div>
    <div class="faq-a">The national average gross rental yield for US single-family rentals in <?php echo $currentYear; ?> is approximately 6.71%. For multifamily apartments nationally, cap rates average 5.5%–6.5%. Commercial cap rates vary: industrial 5–7%, retail 6–8%, office 6–9%.</div>
  </div>
  <div class="faq-item">
    <div class="faq-q">Does a higher cap rate always mean a better investment?</div>
    <div class="faq-a">No. A high cap rate (above 12%) often signals high risk — distressed neighborhood, problem tenants, significant deferred maintenance, or high vacancy. Cap rate reflects risk as much as it reflects return. Always investigate <em>why</em> a cap rate is unusually high before buying. Verify the NOI with 12 months of actual income and expense documentation.</div>
  </div>
  <div class="faq-item">
    <div class="faq-q">How do I find the cap rate of a property for sale?</div>
    <div class="faq-a">Ask the seller or listing agent for the trailing 12-month (T12) income statement and rent roll. Calculate NOI = gross income minus operating expenses (no mortgage). Divide NOI by asking price. Verify all numbers independently — sellers sometimes inflate income or exclude expenses to make the property look more profitable.</div>
  </div>

  <!-- Related Calculators -->
  <h2 style="border-color:#059669;">Related Real Estate Calculators</h2>
  <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:14px;margin-bottom:32px;">
    <a href="<?php echo $baseUrl; ?>/real-estate/cap-rate-calculator" style="display:block;background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:14px;text-decoration:none;">
      <div style="font-size:1.3rem;margin-bottom:6px;">📊</div>
      <div style="font-weight:700;color:#0f172a;font-size:.88rem;">Cap Rate Calculator</div>
      <div style="color:#64748b;font-size:.79rem;margin-top:4px;">Calculate any property's cap rate</div>
    </a>
    <a href="<?php echo $baseUrl; ?>/real-estate/rental-yield-calculator" style="display:block;background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:14px;text-decoration:none;">
      <div style="font-size:1.3rem;margin-bottom:6px;">🏘️</div>
      <div style="font-weight:700;color:#0f172a;font-size:.88rem;">Rental Yield Calculator</div>
      <div style="color:#64748b;font-size:.79rem;margin-top:4px;">Gross and net yield</div>
    </a>
    <a href="<?php echo $baseUrl; ?>/real-estate/cash-flow-calculator" style="display:block;background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:14px;text-decoration:none;">
      <div style="font-size:1.3rem;margin-bottom:6px;">💵</div>
      <div style="font-weight:700;color:#0f172a;font-size:.88rem;">Cash Flow Calculator</div>
      <div style="color:#64748b;font-size:.79rem;margin-top:4px;">Monthly cash flow after mortgage</div>
    </a>
    <a href="<?php echo $baseUrl; ?>/real-estate/cash-on-cash-return-calculator" style="display:block;background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:14px;text-decoration:none;">
      <div style="font-size:1.3rem;margin-bottom:6px;">💹</div>
      <div style="font-weight:700;color:#0f172a;font-size:.88rem;">Cash-on-Cash Return</div>
      <div style="color:#64748b;font-size:.79rem;margin-top:4px;">Return on actual cash invested</div>
    </a>
  </div>

</div>
</main>
<script>
document.querySelectorAll('.faq-q').forEach(q => {
  q.addEventListener('click', function() {
    const item = this.closest('.faq-item');
    const was = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
    if (!was) item.classList.add('open');
  });
});
</script>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>