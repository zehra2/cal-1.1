<?php
$pageTitle       = 'How to Calculate Roof Square Footage: Formula, Pitch and Examples';
$metaDescription = 'Learn how to calculate roof square footage using roof length, width, sections, and pitch. Includes roof squares, pitch factors, examples, and safety tips.';
$metaKeywords    = 'how to calculate roof square footage, roof area calculator, roof pitch factor, roofing squares, roof measurement formula';
$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    ['@type' => 'Article',
     'headline' => 'How to Calculate Roof Square Footage: Formula, Pitch and Examples',
     'description' => 'Complete guide to calculating roof square footage including pitch factors, roofing squares, waste allowances, and examples for gable, hip, and flat roofs.',
     'url' => 'https://americacalculator.com/blog/how-to-calculate-roof-square-footage',
     'datePublished' => '2026-07-01',
     'dateModified'  => '2026-07-14',
     'author' => ['@type' => 'Person', 'name' => 'James Carter', 'jobTitle' => 'Construction & Home Improvement Specialist'],
     'publisher' => ['@type' => 'Organization', 'name' => 'AmericaCalculator.com', 'url' => 'https://americacalculator.com/'],
     'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => 'https://americacalculator.com/blog/how-to-calculate-roof-square-footage'],
    ],
    ['@type' => 'BreadcrumbList', 'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog',  'item' => 'https://americacalculator.com/blog/'],
      ['@type' => 'ListItem', 'position' => 3, 'name' => 'How to Calculate Roof Square Footage', 'item' => 'https://americacalculator.com/blog/how-to-calculate-roof-square-footage'],
    ]],
    ['@type' => 'FAQPage', 'mainEntity' => [
      ['@type' => 'Question', 'name' => 'How do I calculate roof square footage?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Calculate the horizontal area (length × width), then multiply by the roof pitch factor. Add the areas of all roof sections.']],
      ['@type' => 'Question', 'name' => 'What is the formula for a sloped roof?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Roof Area = Horizontal Area × Pitch Factor. For a 6/12 pitch the factor is approximately 1.118.']],
      ['@type' => 'Question', 'name' => 'How many square feet are in one roofing square?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'One roofing square equals 100 square feet of roof surface.']],
      ['@type' => 'Question', 'name' => 'How much waste should I add for roofing?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Simple gable roofs typically need 5–10% extra. Hip roofs and complex roofs need 10–15% or more. Always confirm with the manufacturer.']],
    ]],
  ],
];
require_once '../includes/header.php';
?>
<style>
*{box-sizing:border-box;}body{background:#f8fafc;}
.blog-wrap{max-width:1100px;margin:0 auto;padding:2rem 1.25rem 4rem;display:grid;grid-template-columns:1fr 280px;gap:2.5rem;align-items:start;}
.blog-bc{font-size:.79rem;color:#94a3b8;margin-bottom:.6rem;}.blog-bc a{color:#64748b;text-decoration:none;}.blog-bc a:hover{color:#1d4ed8;}
.blog-header{margin-bottom:1.75rem;}.blog-header h1{font-size:2rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.blog-meta{display:flex;align-items:center;flex-wrap:wrap;gap:10px;margin-bottom:.75rem;}.blog-meta span{font-size:.82rem;color:#64748b;}.blog-meta strong{color:#1e293b;}
.blog-badge{background:#dbeafe;color:#1e40af;font-size:.74rem;font-weight:700;padding:3px 11px;border-radius:20px;border:1px solid #bfdbfe;}
.blog-cat{background:#fce7f3;color:#9d174d;font-size:.74rem;font-weight:700;padding:3px 11px;border-radius:20px;border:1px solid #fbcfe8;}
.blog-header .intro{font-size:1.05rem;color:#475569;line-height:1.75;border-left:4px solid #1d4ed8;padding:.9rem 1rem .9rem 1.25rem;background:#f8fbff;border-radius:0 8px 8px 0;margin:0;}
.snippet-box{background:linear-gradient(135deg,#1d4ed8,#1e40af);border-radius:12px;padding:1.5rem;margin-bottom:1.75rem;color:#fff;}
.snippet-box .sq{font-size:.78rem;font-weight:700;text-transform:uppercase;letter-spacing:.07em;color:rgba(255,255,255,.7);margin-bottom:.5rem;}
.snippet-box .sa{font-size:1.02rem;font-weight:600;line-height:1.65;margin:0;}
.blog-section{background:#fff;border-radius:13px;border:1px solid #e2e8f0;padding:1.85rem;margin-bottom:1.5rem;box-shadow:0 2px 8px rgba(0,0,0,.04);}
.blog-section h2{font-size:1.35rem;color:#0f172a;margin:0 0 1rem;padding-bottom:.65rem;border-bottom:2px solid #eff6ff;}
.blog-section h3{font-size:1.02rem;color:#1e293b;margin:1.35rem 0 .55rem;font-weight:700;}
.blog-section p{color:#475569;line-height:1.77;font-size:.97rem;margin-bottom:.9rem;}.blog-section p:last-child{margin-bottom:0;}
.blog-section a{color:#1d4ed8;font-weight:600;text-decoration:none;}.blog-section a:hover{text-decoration:underline;}
.blog-section strong{color:#1e293b;}
.blog-section ul,.blog-section ol{color:#475569;padding-left:1.4rem;line-height:1.77;font-size:.97rem;margin-bottom:.9rem;}.blog-section li{margin-bottom:.45rem;}
.formula-box{background:#f0fdf4;border:2px solid #16a34a;border-radius:10px;padding:1.1rem 1.35rem;margin:1rem 0;font-family:monospace;font-size:1rem;color:#065f46;font-weight:700;}
.blog-table{width:100%;border-collapse:collapse;border-radius:9px;overflow:hidden;border:1px solid #e2e8f0;margin-bottom:1.1rem;}
.blog-table th{background:#1d4ed8;color:#fff;padding:9px 13px;font-size:.84rem;font-weight:600;text-align:left;}
.blog-table td{padding:9px 13px;border-bottom:1px solid #f1f5f9;font-size:.88rem;color:#334155;}
.blog-table tr:last-child td{border-bottom:none;}.blog-table tr:nth-child(even) td{background:#f8fafc;}
.blog-table .hl{color:#1d4ed8;font-weight:700;}.blog-table .g{color:#16a34a;font-weight:700;}
.blog-info{background:#eff6ff;border-left:4px solid #1d4ed8;border-radius:0 8px 8px 0;padding:.9rem 1.1rem;margin:1rem 0;font-size:.93rem;color:#1e3a8a;line-height:1.65;}
.blog-warn{background:#fffbeb;border-left:4px solid #f59e0b;border-radius:0 8px 8px 0;padding:.9rem 1.1rem;margin:1rem 0;font-size:.93rem;color:#92400e;line-height:1.65;}
.blog-danger{background:#fef2f2;border-left:4px solid #dc2626;border-radius:0 8px 8px 0;padding:.9rem 1.1rem;margin:1rem 0;font-size:.93rem;color:#7f1d1d;line-height:1.65;}
.blog-cta{background:linear-gradient(135deg,#1e293b,#0f172a);border-radius:13px;padding:1.75rem;margin-bottom:1.5rem;text-align:center;}
.blog-cta h3{color:#fff;font-size:1.15rem;font-weight:800;margin:0 0 .5rem;}.blog-cta p{color:#94a3b8;font-size:.9rem;margin:0 0 1rem;line-height:1.55;}
.blog-cta-btns{display:flex;flex-wrap:wrap;gap:.65rem;justify-content:center;}
.blog-cta-btns a{display:inline-block;background:#1d4ed8;color:#fff;padding:9px 20px;border-radius:7px;font-weight:700;font-size:.85rem;text-decoration:none;}
.blog-cta-btns a:hover{background:#1e40af;}.blog-cta-btns a.sec{background:#334155;}
.blog-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}.blog-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.blog-faq-q{font-size:.95rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;}
.blog-faq-q::after{content:'+';color:#1d4ed8;font-size:1.2rem;flex-shrink:0;}.blog-faq-item.open .blog-faq-q::after{content:'−';}
.blog-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}.blog-faq-item.open .blog-faq-a{display:block;}
.blog-sidebar{position:sticky;top:6rem;display:flex;flex-direction:column;gap:1.1rem;}
.blog-toc{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 8px rgba(0,0,0,.04);overflow:hidden;}
.blog-toc-head{background:#1d4ed8;color:#fff;padding:.9rem 1.25rem;font-size:.82rem;font-weight:700;text-transform:uppercase;letter-spacing:.06em;}
.blog-toc ul{list-style:none;padding:.5rem 0;margin:0;}
.blog-toc ul li a{display:block;padding:.5rem 1.25rem;font-size:.83rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .15s;line-height:1.4;}
.blog-toc ul li a:hover,.blog-toc ul li a.active{color:#1d4ed8;background:#eff6ff;border-left-color:#1d4ed8;}
.blog-related{background:#fff;border-radius:12px;border:1px solid #e2e8f0;overflow:hidden;}
.blog-related-head{padding:.8rem 1.25rem;background:#f8fafc;border-bottom:1px solid #f1f5f9;font-size:.75rem;font-weight:700;color:#1d4ed8;text-transform:uppercase;letter-spacing:.05em;}
.blog-related ul{list-style:none;padding:.4rem 0;margin:0;}
.blog-related ul li a{display:block;padding:.55rem 1.25rem;font-size:.83rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .15s;}
.blog-related ul li a:hover{color:#1d4ed8;background:#eff6ff;border-left-color:#1d4ed8;}
@media(max-width:900px){.blog-wrap{grid-template-columns:1fr;}.blog-sidebar{position:static;display:grid;grid-template-columns:1fr 1fr;}}
@media(max-width:580px){.blog-sidebar{grid-template-columns:1fr;}.blog-header h1{font-size:1.6rem;}}
</style>

<main id="main-content">
<div class="blog-wrap">
<article>
  <div class="blog-bc"><a href="/">Home</a> › <a href="/blog/">Blog</a> › How to Calculate Roof Square Footage</div>

  <div class="blog-header">
    <h1>How to Calculate Roof Square Footage: Formula, Pitch, and Examples</h1>
    <div class="blog-meta">
      <span>By <strong>James Carter</strong> | Construction &amp; Home Improvement Specialist</span>
      <span class="blog-badge">🕐 Last Updated: July 2026</span>
      <span class="blog-cat">🏠 Roofing</span>
    </div>
    <p class="intro">To calculate roof square footage, multiply the building's horizontal footprint by the <strong>roof pitch factor</strong>. For flat roofs, skip the pitch adjustment. For complex roofs, calculate every plane separately and sum them. This guide covers pitch factors, roofing squares, waste allowances, and full worked examples for US homes.</p>
  </div>

  <div class="snippet-box" id="quick-answer">
    <div class="sq">Quick Answer — Roof Square Footage</div>
    <p class="sa">Flat Roof: Length × Width. Sloped Roof: <strong>Horizontal Area × Pitch Factor</strong>. A 50×30 ft home with a 6/12 pitch = 1,500 × 1.118 = <strong>~1,677 sq ft</strong> of roof surface = <strong>~16.8 roofing squares</strong>. Add 10–15% for waste before ordering materials.</p>
  </div>

  <div class="blog-section" id="roofing-square">
    <h2>What Is a Roofing Square?</h2>
    <p>Roofing contractors measure materials in <strong>"squares."</strong> One roofing square equals <strong>100 square feet</strong> of roof surface.</p>
    <div class="formula-box">Roofing Squares = Total Roof Square Feet / 100</div>
    <p>A roof with 2,400 sq ft of surface area = <strong>24 roofing squares</strong> before waste. Always round up to the next complete bundle, roll, or box.</p>
  </div>

  <div class="blog-section" id="step1">
    <h2>Step 1: Calculate the Horizontal Roof Area</h2>
    <p>For a rectangular building, measure the footprint (length × width). For multiple sections, calculate each rectangle or triangle and sum them.</p>
    <div class="formula-box">50 ft × 30 ft = 1,500 sq ft horizontal area</div>
    <p>For triangular sections: <strong>Base × Height / 2</strong>. Always include <strong>roof overhangs</strong> — measuring only the interior floor area will underestimate the actual roof surface.</p>
  </div>

  <div class="blog-section" id="pitch">
    <h2>Step 2: Determine the Roof Pitch</h2>
    <p>Roof pitch describes how much the roof rises vertically over a 12-inch horizontal run. A <strong>6/12 pitch</strong> rises 6 inches for every 12 inches of horizontal distance.</p>
    <div class="blog-warn">⚠️ <strong>Safety first:</strong> Do not climb onto a steep, wet, or damaged roof to measure it. A qualified roofing professional can safely measure difficult-to-access roofs. Pitch can often be read from building plans or estimated from the attic safely.</div>
  </div>

  <div class="blog-section" id="pitch-factor">
    <h2>Step 3: Apply the Pitch Factor</h2>
    <p>A sloped roof has more surface area than its flat footprint. The pitch factor converts horizontal area to actual sloped surface area.</p>
    <div class="formula-box">Pitch Factor = √(12² + Rise²) A 12</div>
    <p>For a 6/12 pitch: √(144 + 36) A 12 = √180 / 12 ≈ <strong>1.118</strong></p>
    <table class="blog-table">
      <thead><tr><th>Roof Pitch</th><th>Pitch Factor</th><th>Area Increase Over Footprint</th></tr></thead>
      <tbody>
        <tr><td>3/12</td><td class="g">1.031</td><td>+3.1%</td></tr>
        <tr><td>4/12</td><td class="g">1.054</td><td>+5.4%</td></tr>
        <tr><td>6/12</td><td class="hl">1.118</td><td>+11.8%</td></tr>
        <tr><td>8/12</td><td class="hl">1.202</td><td>+20.2%</td></tr>
        <tr><td>10/12</td><td class="hl">1.302</td><td>+30.2%</td></tr>
        <tr><td>12/12</td><td class="hl">1.414</td><td>+41.4%</td></tr>
      </tbody>
    </table>
    <div class="blog-info">💡 The pitch factor accounts for surface area — it is <em>not</em> the same as a waste percentage. A 6/12 roof has 11.8% more surface than its footprint, but it doesn't automatically mean 11.8% material waste.</div>
  </div>

  <div class="blog-section" id="complete-example">
    <h2>Complete Roof Calculation Example</h2>
    <p>A home in Birmingham, Alabama: <strong>50 ft × 30 ft footprint</strong>, <strong>6/12 pitch</strong>.</p>
    <h3>1. Horizontal area</h3>
    <div class="formula-box">50 × 30 = 1,500 sq ft</div>
    <h3>2. Apply pitch factor (6/12 = 1.118)</h3>
    <div class="formula-box">1,500 × 1.118 = 1,677 sq ft sloped roof surface</div>
    <h3>3. Convert to roofing squares</h3>
    <div class="formula-box">1,677 / 100 = 16.77 → approximately 16.8 roofing squares</div>
    <h3>4. Add waste (10%)</h3>
    <div class="formula-box">1,677 × 1.10 = 1,845 sq ft to order</div>
  </div>

  <div class="blog-section" id="waste">
    <h2>Roofing Waste Allowances by Material and Roof Shape</h2>
    <p>Waste depends on both the material and the complexity of the roof. Use this table as a starting point — always confirm with the manufacturer before ordering.</p>
    <table class="blog-table">
      <thead><tr><th>Material / Roof Shape</th><th>Simple Roof</th><th>Complex Roof</th></tr></thead>
      <tbody>
        <tr><td>Asphalt shingles</td><td>5–10%</td><td>10–15%+</td></tr>
        <tr><td>Architectural shingles</td><td>7–12%</td><td>12–20%</td></tr>
        <tr><td>Metal roofing panels</td><td>3–8%</td><td>8–15%</td></tr>
        <tr><td>Clay / concrete tile</td><td>10–15%</td><td>15–20%</td></tr>
        <tr><td>Slate</td><td>10–20%</td><td>15–25%</td></tr>
        <tr><td>Underlayment</td><td>2–5%</td><td>5–10%</td></tr>
        <tr><td>Simple gable roof</td><td>~5–10%</td><td>—</td></tr>
        <tr><td>Hip roof</td><td>—</td><td>~10–15%</td></tr>
        <tr><td>Complex (valleys + dormers)</td><td>—</td><td>15–25%</td></tr>
      </tbody>
    </table>
    <p><strong>Order accessories separately:</strong> starter shingles, ridge-cap shingles, valley material, underlayment, drip edge, step flashing, pipe boots, and ice-and-water protection each need their own quantity estimate.</p>
  </div>

  <div class="blog-section" id="roof-type">
    <h2>Flat, Gable, and Hip Roofs</h2>
    <ul>
      <li><strong>Flat roof:</strong> Length × Width, plus parapets and overhangs if applicable.</li>
      <li><strong>Gable roof:</strong> Two sloped planes — use footprint × pitch factor. Lower waste (fewer angled cuts).</li>
      <li><strong>Hip roof:</strong> Four sloped planes — measure each carefully. Higher waste (more cuts at hips and ridges).</li>
      <li><strong>Mansard or complex roof:</strong> Measure each plane individually. Consider a professional estimate.</li>
    </ul>
    <table class="blog-table">
      <thead><tr><th>Roof Shape</th><th>Typical Waste</th><th>Why</th></tr></thead>
      <tbody>
        <tr><td>Simple gable</td><td class="g">5–10%</td><td>Two large planes, few angled cuts</td></tr>
        <tr><td>Standard hip</td><td class="hl">10–15%</td><td>Four planes, hip and edge cuts</td></tr>
        <tr><td>Cross-gable</td><td class="hl">10–15%</td><td>Multiple intersections</td></tr>
        <tr><td>Roof with valleys</td><td class="hl">15–20%</td><td>Shingles cut at changing angles</td></tr>
        <tr><td>Complex (dormers)</td><td class="hl">15–25%</td><td>Many small planes and penetrations</td></tr>
      </tbody>
    </table>
  </div>

  <div class="blog-cta">
    <h3>Estimate Your Roof and Construction Costs</h3>
    <p>Use our free construction calculators for concrete, slab, home addition costs, and more — built for US homeowners and contractors.</p>
    <div class="blog-cta-btn">
      <a href="/construction/concrete-calculator">🧱 Concrete Calculator</a>
      <a href="/construction/home-addition-cost-calculator" class="sec">🏠 Home Addition Cost</a>
      <a href="/blog/how-to-calculate-square-footage-of-a-building" class="sec">🏗️ Building Square Footage</a>
    </div>
  </div>

  <div class="blog-section" id="mistake">
    <h2>Common Roof Measurement Mistakes</h2>
    <ul>
      <li>Using the home's interior square footage as the roof area (ignores pitch and overhangs).</li>
      <li>Ignoring roof pitch entirely on sloped roofs.</li>
      <li>Measuring only one roof plane on a multi-plane roof.</li>
      <li>Forgetting overhangs, valleys, and dormers.</li>
      <li>Confusing roof square footage with roofing squares.</li>
      <li>Ordering material without a waste allowance.</li>
      <li>Climbing onto a steep, wet, or damaged roof without proper safety equipment.</li>
    </ul>
    <div class="blog-danger">🚨 <strong>Safety reminder:</strong> Roof work can be dangerous. Do not walk on a roof without appropriate training and safety equipment. For insurance claims, structural work, or contractor bids — confirm measurements with a qualified roofing professional.</div>
  </div>

  <div class="blog-section" id="faq">
    <h2>Frequently Asked Questions</h2>
    <?php $faqs = [
      ['How do I calculate roof square footage?', 'Calculate the horizontal area (length × width), apply the pitch factor, then add the areas of all roof sections. For a 50×30 ft home at 6/12 pitch: 1,500 × 1.118 = 1,677 sq ft.'],
      ['What is the formula for a sloped roof?', '<strong>Roof Area = Horizontal Area × Pitch Factor.</strong> The pitch factor for a 6/12 roof is approximately 1.118.'],
      ['How many square feet are in one roofing square?', 'One roofing square equals <strong>100 square feet</strong> of roof surface.'],
      ['Does roof pitch change square footage?', 'Yes. A steeper pitch means more actual surface area than the flat footprint. A 12/12 pitch has 41.4% more surface area than a flat roof with the same footprint.'],
      ['Do I need to add waste?', 'Yes. Roofing projects need extra for cuts, overlaps, valleys, ridges, and damaged pieces. Add 5–10% for simple gable roofs and 10–15%+ for complex hip roofs. Confirm with the product manufacturer.'],
      ['What materials need the most waste allowance?', 'Clay tile, concrete tile, and slate typically need the highest waste allowances (10–25%) due to breakage and trim requirements. Metal roofing on simple roofs can need as little as 3–8%.'],
    ]; foreach($faqs as $f): ?>
    <div class="blog-faq-item">
      <div class="blog-faq-q"><?php echo $f[0]; ?></div>
      <div class="blog-faq-a"><?php echo $f[1]; ?></div>
    </div>
    <?php endforeach; ?>
  </div>

  <div class="blog-section">
    <h2>Related Articles</h2>
    <ul>
      <li><a href="/blog/how-to-calculate-square-feet-of-a-room">How to Calculate Square Feet of a Room</a> — for individual interior spaces</li>
      <li><a href="/blog/how-to-calculate-square-footage-of-a-building">How to Calculate Square Footage of a Building</a> — for the horizontal roof footprint</li>
      <li><a href="/construction/concrete-calculator">Concrete Calculator</a> — estimate concrete for foundations</li>
      <li><a href="/construction/home-addition-cost-calculator">Home Addition Cost Calculator</a> — estimate renovation cost by sq ft</li>
    </ul>
    <p style="margin-top:1rem;font-size:.85rem;color:#94a3b8;"><strong>Disclaimer:</strong> Roof work can be dangerous. Do not walk on a roof without appropriate training and safety equipment. For purchasing materials, insurance claims, structural work, or contractor pricing, confirm measurements with a qualified roofing professional.</p>
  </div>

</article>

<aside class="blog-sidebar">
  <div class="blog-toc">
    <div class="blog-toc-head">📋 On This Page</div>
    <ul>
      <li><a href="#quick-answer">Quick Answer</a></li>
      <li><a href="#roofing-square">Roofing Squares</a></li>
      <li><a href="#step1">Step 1: Horizontal Area</a></li>
      <li><a href="#pitch">Step 2: Roof Pitch</a></li>
      <li><a href="#pitch-factor">Step 3: Pitch Factor Table</a></li>
      <li><a href="#complete-example">Full Example</a></li>
      <li><a href="#waste">Waste Allowances</a></li>
      <li><a href="#roof-type">Gable vs Hip Roofs</a></li>
      <li><a href="#mistake">Common Mistakes</a></li>
      <li><a href="#faq">FAQ</a></li>
    </ul>
  </div>
  <div class="blog-related">
    <div class="blog-related-head">🔗 Related Articles</div>
    <ul>
      <li><a href="/blog/how-to-calculate-square-feet-of-a-room">🏠 Room Square Footage</a></li>
      <li><a href="/blog/how-to-calculate-square-footage-of-a-building">🏗️ Building Square Footage</a></li>
      <li><a href="/blog/ohio-state-income-tax">📋 Ohio Income Tax Guide</a></li>
      <li><a href="/blog/how-to-calculate-cap-rate">🏘️ Cap Rate Guide</a></li>
    </ul>
  </div>
  <div class="blog-related">
    <div class="blog-related-head">🧱 Construction Tools</div>
    <ul>
      <li><a href="/construction/concrete-calculator">Concrete Calculator</a></li>
      <li><a href="/construction/concrete-slab-calculator">Concrete Slab</a></li>
      <li><a href="/construction/home-addition-cost-calculator">Home Addition Cost</a></li>
      <li><a href="/calculators/cubic-yard.php">Cubic Yard</a></li>
      <li><a href="/calculators/asphalt.php">Asphalt Calculator</a></li>
    </ul>
  </div>
</aside>
</div>
</main>
<script>
document.querySelectorAll('.blog-faq-q').forEach(function(q){
  q.addEventListener('click',function(){
    var item=this.closest('.blog-faq-item'),was=item.classList.contains('open');
    document.querySelectorAll('.blog-faq-item').forEach(function(x){x.classList.remove('open');});
    if(!was)item.classList.add('open');
  });
});
</script>
<?php require_once '../includes/footer.php'; ?>
