<?php
$currentYear = date('Y');
$pageTitle       = "Concrete Slab Calculator ($currentYear) | Yards & Cost";
$metaDescription = "Free $currentYear concrete slab calculator. Get cubic yards, bags, cost estimate by US region, and rebar quantity for any size slab, pad, patio, driveway, or garage floor.";
$metaKeywords    = 'concrete slab calculator, concrete pad calculator, concrete slab cost calculator, concrete floor calculator, concrete driveway calculator, calculate concrete for a slab, material calculator for concrete slab, concrete sq footage calculator';
$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'=>'WebApplication',
      'name'=>'Concrete Slab Calculator','url'=>'https://americacalculator.com/construction/concrete-slab-calculator',
      'description'=>"Free $currentYear concrete slab calculator. Get cubic yards, bags, cost, and rebar estimates for any slab project.",
      'applicationCategory'=>'HomeAndGardenApplication','operatingSystem'=>'All',
      'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD'],
    ],
    ['@type'=>'FAQPage','mainEntity'=>[
      ['@type'=>'Question','name'=>'How many yards of concrete for a 20×20 slab?','acceptedAnswer'=>['@type'=>'Answer','text'=>'A 20×20 slab at 4 inches thick = 133.3 ft³ / 27 = 4.94 yd³ net. With 10% waste = 5.43 yd³ to order. At $160/yd³ (Midwest average), material cost is roughly $869.']],
      ['@type'=>'Question','name'=>'How thick should a concrete patio slab be?','acceptedAnswer'=>['@type'=>'Answer','text'=>'4 inches is the ACI-recommended minimum for residential exterior flatwork including patios. Increase to 5–6 inches if the patio will support a hot tub, heavy planters, or a pergola with anchor bolts. Thicker slabs also reduce cracking in freeze-thaw climates.']],
      ['@type'=>'Question','name'=>'How much does a concrete slab cost?','acceptedAnswer'=>['@type'=>'Answer','text'=>'A concrete slab costs $4–$8 per square foot installed in the Midwest and South, and $6–$12 per square foot in the Northeast and West Coast. A 10×10 patio slab typically costs $400–$1,200 total installed. Material alone is usually $1–$3 per sqft; labor and finishing account for the rest.']],
      ['@type'=>'Question','name'=>'Do I need rebar in a 4-inch concrete slab?','acceptedAnswer'=>['@type'=>'Answer','text'=>'For most residential patios and sidewalks, #3 rebar at 18-inch spacing or 6×6 wire mesh is recommended. For garage floors and driveways where vehicle loads apply, rebar is strongly recommended. Check your local building code — some municipalities require rebar for any slab over a certain size.']],
      ['@type'=>'Question','name'=>'How long does a concrete slab take to cure?','acceptedAnswer'=>['@type'=>'Answer','text'=>'A concrete slab is typically walkable after 24–48 hours and reaches 70% strength at 7 days. Full design strength is achieved at 28 days. Avoid parking vehicles on a new slab for at least 7 days (14 days in cold weather).']],
      ['@type'=>'Question','name'=>'What PSI concrete should I use for a driveway slab?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Use a minimum of 4,000 PSI concrete for residential driveways. In cold climates with freeze-thaw cycles, specify 4,500 PSI with air entrainment (4–7% air). Air-entrained concrete resists surface scaling caused by de-icing salts far better than standard mixes.']],
      ['@type'=>'Question','name'=>'How do I calculate concrete for an irregular-shaped slab?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Break the irregular shape into rectangles, triangles, or circles. Calculate each section separately, add the volumes together, then add 10–15% for waste. For complex L-shapes or curved patios, always add at least 15% waste to account for the additional waste when cutting or forming edges.']],
      ['@type'=>'Question','name'=>'What is the difference between concrete and cement?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Cement is one ingredient in concrete. Concrete = cement + sand + aggregate (gravel) + water. Portland cement acts as the binder that holds the mix together. You cannot pour a slab from cement alone — it must be mixed into concrete first.']],
      ['@type'=>'Question','name'=>'How much does a 20×20 concrete slab cost installed?','acceptedAnswer'=>['@type'=>'Answer','text'=>'A 20×20 concrete slab (400 sqft) at 4 inches thick costs $1,600–$3,200 installed in the Midwest and South, and $2,400–$4,800 in the Northeast and West Coast. The range depends on labor rates, site prep, rebar, and finishing requirements.']],
    ]],
    ['@type'=>'BreadcrumbList','itemListElement'=>[
      ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
      ['@type'=>'ListItem','position'=>2,'name'=>'Construction','item'=>'https://americacalculator.com/construction/'],
      ['@type'=>'ListItem','position'=>3,'name'=>'Concrete Calculator','item'=>'https://americacalculator.com/construction/concrete-calculator'],
      ['@type'=>'ListItem','position'=>4,'name'=>'Concrete Slab Calculator','item'=>'https://americacalculator.com/construction/concrete-slab-calculator'],
    ]],
  ],
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f5f7fa;}
.cs-wrap{max-width:1320px;margin:0 auto;padding:2rem 1.5rem 4rem;display:grid;grid-template-columns:220px 1fr 260px;gap:2rem;align-items:start;}
.cs-toc{position:sticky;top:6rem;background:#fff;border-radius:12px;border:1px solid #e8edf5;box-shadow:0 2px 12px rgba(0,0,0,.04);overflow:hidden;}
.cs-toc-head{background:linear-gradient(135deg,#64748b,#475569);color:#fff;padding:1rem 1.25rem;font-weight:700;font-size:.85rem;text-transform:uppercase;letter-spacing:.8px;}
.cs-toc-list{list-style:none;padding:.75rem 0;margin:0;}
.cs-toc-list li a{display:block;padding:.5rem 1.25rem;font-size:.84rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .18s;}
.cs-toc-list li a:hover,.cs-toc-list li a.cs-active{color:#475569;background:#f1f5f9;border-left-color:#64748b;}
.cs-toc-div{height:1px;background:#f1f5f9;margin:.5rem 0;}
.cs-toc-rlbl{padding:.5rem 1.25rem;font-size:.78rem;font-weight:700;color:#94a3b8;text-transform:uppercase;}
.cs-toc-rlist{list-style:none;padding:0;margin:0 0 .75rem;}
.cs-toc-rlist li a{display:block;padding:.4rem 1.25rem;font-size:.82rem;color:#64748b;text-decoration:none;}
.cs-toc-rlist li a:hover{color:#475569;}
.cs-main{min-width:0;}
.cs-hero{margin-bottom:2rem;}
.cs-hero h1{font-size:2.1rem;color:#0f172a;margin:0 0 .6rem;line-height:1.25;}
.cs-desc{font-size:1.05rem;color:#64748b;line-height:1.65;margin:0 0 .75rem;border-left:4px solid #94a3b8;padding-left:1rem;}
.cs-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}
.cs-bc a{color:#64748b;text-decoration:none;}
.cs-card{background:#fff;border-radius:14px;box-shadow:0 4px 24px rgba(0,0,0,.05);border:1px solid #eef2f7;margin-bottom:2.5rem;overflow:hidden;}
.cs-inner{display:grid;grid-template-columns:1fr 1fr;}
.cs-form{padding:2rem;border-right:1px solid #f0f4fa;}
.cs-res{padding:2rem;background:linear-gradient(160deg,#f8fafc,#f1f5f9);}
.cs-field{margin-bottom:1.2rem;}
.cs-field label{display:block;font-weight:600;font-size:.9rem;color:#1e293b;margin-bottom:.4rem;}
.cs-field input,.cs-field select{width:100%;padding:12px 15px;border:1.5px solid #d1dae8;border-radius:8px;font-size:1rem;color:#0f172a;outline:none;transition:border-color .2s,box-shadow .2s;box-sizing:border-box;background:#fff;}
.cs-field input:focus,.cs-field select:focus{border-color:#64748b;box-shadow:0 0 0 3px rgba(100,116,139,.12);}
.cs-field .cs-hint{font-size:.76rem;color:#94a3b8;margin-top:.3rem;}
.cs-row2{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.cs-btn{width:100%;background:linear-gradient(135deg,#1e3a8a,#2563eb);color:#fff;padding:14px;border:none;border-radius:9px;font-size:1rem;font-weight:700;cursor:pointer;margin-top:.75rem;transition:opacity .2s,transform .15s;box-shadow:0 4px 12px rgba(37,99,235,.2);}
.cs-btn:hover{opacity:.95;transform:translateY(-1px);}
.cs-primary{background:linear-gradient(135deg,#1e3a8a,#2563eb);border-radius:12px;padding:1.4rem 1rem;text-align:center;box-shadow:0 8px 20px rgba(37,99,235,.22);margin-bottom:.85rem;}
.cs-primary-val{display:block;font-size:2.5rem;font-weight:800;color:#fff;line-height:1;margin-bottom:.25rem;letter-spacing:-0.5px;}
.cs-primary-lbl{font-size:.88rem;color:rgba(255,255,255,.9);font-weight:500;}
.cs-boxes{display:grid;grid-template-columns:1fr 1fr;gap:.7rem;margin-bottom:.85rem;}
.cs-box{background:#fff;border:1.5px solid #e8edf5;border-radius:10px;padding:.85rem .75rem;text-align:center;}
.cs-box-val{display:block;font-size:1.15rem;font-weight:800;color:#0f172a;margin-bottom:.15rem;}
.cs-box-lbl{font-size:.72rem;color:#64748b;font-weight:600;line-height:1.3;}
.cs-bkd{background:#fff;border:1px solid #e2e8f0;border-radius:10px;padding:.9rem 1rem;margin-bottom:.75rem;}
.cs-bkd-title{font-size:.74rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:#64748b;margin-bottom:.5rem;}
.cs-bkd-row{display:flex;justify-content:space-between;font-size:.84rem;padding:.32rem 0;border-bottom:1px solid #f8fafc;}
.cs-bkd-row:last-child{border-bottom:none;font-weight:800;color:#1e3a8a;}
.cs-bkd-lbl{color:#64748b;}
.cs-bkd-val{font-weight:600;color:#1e293b;}
.cs-section{background:#fff;border-radius:14px;border:1px solid #eef2f7;box-shadow:0 2px 12px rgba(0,0,0,.03);padding:2.25rem;margin-bottom:2rem;scroll-margin-top:6rem;}
.cs-section h2{font-size:1.65rem;color:#0f172a;margin:0 0 1.25rem;padding-bottom:.75rem;border-bottom:2px solid #f0f4fa;}
.cs-section h3{font-size:1.18rem;color:#1e293b;margin:1.75rem 0 .7rem;}
.cs-section p{color:#475569;line-height:1.75;margin-bottom:1.25rem;}
.cs-section ul,.cs-section ol{color:#475569;line-height:1.75;padding-left:1.5rem;margin-bottom:1.25rem;}
.cs-section li{margin-bottom:.5rem;}
.cs-section strong{color:#1e293b;}
.cs-section a{color:#2563eb;font-weight:600;}
.cs-formula{background:#0f172a;color:#94a3b8;font-family:'Courier New',monospace;font-size:1rem;padding:1.1rem 1.4rem;border-radius:8px;margin:1.25rem 0;line-height:1.9;}
.cs-formula code{display:block;}
.cs-table{width:100%;border-collapse:collapse;border-radius:10px;overflow:hidden;border:1px solid #e8edf5;margin-bottom:1.5rem;}
.cs-table th{background:#334155;color:#fff;padding:13px 16px;text-align:left;font-size:.88rem;font-weight:600;}
.cs-table td{padding:11px 16px;border-bottom:1px solid #f1f5f9;font-size:.9rem;color:#334155;}
.cs-table tr:last-child td{border-bottom:none;}
.cs-table tr:nth-child(even) td{background:#f8fafc;}
.cs-info{background:#eff6ff;border-left:4px solid #2563eb;border-radius:0 8px 8px 0;padding:1rem 1.25rem;margin:1.25rem 0;font-size:.95rem;color:#1e3a8a;line-height:1.6;}
.cs-faq-item{border-bottom:1px solid #f0f4fa;padding-bottom:1.25rem;margin-bottom:1.25rem;}
.cs-faq-item:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0;}
.cs-faq-q{font-size:1.02rem;font-weight:700;color:#0f172a;margin-bottom:.6rem;cursor:pointer;display:flex;justify-content:space-between;align-items:flex-start;gap:1rem;}
.cs-faq-q::after{content:'+';font-size:1.3rem;color:#64748b;flex-shrink:0;}
.cs-faq-item.open .cs-faq-q::after{content:'−';}
.cs-faq-a{color:#475569;line-height:1.7;font-size:.97rem;display:none;}
.cs-faq-item.open .cs-faq-a{display:block;}
.cs-sidebar{position:sticky;top:6rem;display:flex;flex-direction:column;gap:1.25rem;}
.cs-widget{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 10px rgba(0,0,0,.04);overflow:hidden;}
.cs-widget-head{background:linear-gradient(135deg,#1e3a8a,#2563eb);color:#fff;padding:1rem 1.25rem;}
.cs-widget-title{font-size:1rem;font-weight:700;}
.cs-widget-sub{font-size:.8rem;color:rgba(255,255,255,.85);}
.cs-widget-rows{padding:.4rem 0;}
.cs-widget-row{display:flex;justify-content:space-between;align-items:center;padding:.6rem 1.25rem;border-bottom:1px solid #f8fafc;}
.cs-widget-row:last-child{border-bottom:none;}
.cs-wl{font-size:.82rem;font-weight:600;color:#334155;}
.cs-ws{font-size:.72rem;color:#94a3b8;}
.cs-wv{font-size:.95rem;font-weight:800;color:#1e3a8a;}
.cs-widget-foot{padding:.85rem 1.25rem;border-top:1px solid #f0f4fa;background:#f8fafc;}
.cs-widget-foot p{font-size:.75rem;color:#64748b;margin:0 0 .5rem;line-height:1.3;}
.cs-widget-foot a{font-size:.83rem;font-weight:700;color:#2563eb;text-decoration:none;}
.cs-quick-widget{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 10px rgba(0,0,0,.04);overflow:hidden;}
.cs-quick-head{padding:.85rem 1.15rem;background:#f8fafc;border-bottom:1px solid #edf2f7;font-size:.82rem;font-weight:700;color:#334155;text-transform:uppercase;letter-spacing:.5px;display:flex;align-items:center;gap:.5rem;}
.cs-quick-links{list-style:none;padding:.4rem 0;margin:0;}
.cs-quick-links li{margin:0;padding:0;}
.cs-quick-links li a{display:flex;align-items:center;gap:.6rem;padding:.65rem 1.15rem;font-size:.86rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .18s;font-weight:500;}
.cs-quick-links li a:hover{color:#1e293b;background:#f8fafc;border-left-color:#3b82f6;padding-left:1.35rem;}
.cs-quick-links li a.active{color:#1d4ed8;background:#eff6ff;border-left-color:#2563eb;font-weight:700;}
@media(max-width:1024px){.cs-wrap{grid-template-columns:1fr;}.cs-toc,.cs-sidebar{position:static;}.cs-sidebar{display:grid;grid-template-columns:1fr 1fr;}}
@media(max-width:768px){.cs-wrap{padding:1rem 1rem 3rem;}.cs-inner{grid-template-columns:1fr;}.cs-form{border-right:none;border-bottom:1px solid #f0f4fa;}.cs-sidebar{grid-template-columns:1fr;}.cs-row2{grid-template-columns:1fr;}}
</style>

<main id="main-content">
<div class="cs-wrap">
  <aside class="cs-toc">
    <div class="cs-toc-head">📋 On This Page</div>
    <ul class="cs-toc-list">
      <li><a href="#calculator" class="cs-active">Slab Calculator</a></li>
      <li><a href="#common-size">Common Slab Sizes</a></li>
      <li><a href="#cost">Cost by Region</a></li>
      <li><a href="#thicknes">Thickness Guide</a></li>
      <li><a href="#rebar">Rebar Guide</a></li>
      <li><a href="#faq">FAQ</a></li>
      <li><a href="#slab-prep">Site Preparation</a></li>
      <li><a href="#slab-mistake">Common Mistakes</a></li>
    </ul>
    <div class="cs-toc-div"></div>
    <div class="cs-toc-rlbl">More Concrete Tools</div>
    <ul class="cs-toc-rlist">
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-calculator">Main Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-bag-calculator">Bag Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-yardage-calculator">Yardage Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-footing-calculator">Footing Calculator</a></li>
    </ul>
  </aside>

  <div class="cs-main">
    <div class="cs-hero">
      <div class="cs-bc"><a href="<?php echo $baseUrl; ?>/index.php">Home</a> › <a href="<?php echo $baseUrl; ?>/construction/">Construction</a> › <a href="<?php echo $baseUrl; ?>/construction/concrete-calculator">Concrete Calculator</a> › Slab Calculator</div>
      <h1>Concrete Slab Calculator (<?php echo $currentYear; ?>) – Yards, Cost &amp; Rebar</h1>
      <p class="cs-desc">Calculate concrete for any slab, pad, patio, driveway, or garage floor. Get cubic yards, bag counts, <?php echo $currentYear; ?> cost by US region, and rebar quantity.</p>
    </div>

    <div class="cs-card" id="calculator">
      <div class="cs-inner">
        <div class="cs-form">
          <div class="cs-row2">
            <div class="cs-field"><label for="s_len">Length (ft)</label>
              <input type="number" id="s_len" value="20" min="0.1" step="0.1">
            </div>
            <div class="cs-field"><label for="s_wid">Width (ft)</label>
              <input type="number" id="s_wid" value="10" min="0.1" step="0.1">
            </div>
          </div>
          <div class="cs-row2">
            <div class="cs-field"><label for="s_thk">Thickness</label>
              <input type="number" id="s_thk" value="4" min="1" step="0.5">
            </div>
            <div class="cs-field"><label for="s_unit">Unit</label>
              <select id="s_unit"><option value="in" selected>Inches</option><option value="ft">Feet</option></select>
            </div>
          </div>
          <div class="cs-row2">
            <div class="cs-field"><label for="s_price">Price ($/yd³)</label>
              <input type="number" id="s_price" value="160" min="50" step="5">
              <div class="cs-hint">US avg $140–$225 in <?php echo $currentYear; ?></div>
            </div>
            <div class="cs-field"><label for="s_region">US Region</label>
              <select id="s_region">
                <option value="1.48">Northeast</option>
                <option value="1.42">West Coast</option>
                <option value="1.00" selected>Midwest</option>
                <option value="0.90">South</option>
                <option value="1.18">Mountain West</option>
              </select>
            </div>
          </div>
          <div class="cs-row2">
            <div class="cs-field"><label for="s_waste">Waste Factor (%)</label>
              <input type="number" id="s_waste" value="10" min="0" max="30" step="1">
            </div>
            <div class="cs-field"><label for="s_rebar">Rebar Spacing (in)</label>
              <select id="s_rebar">
                <option value="0">No rebar</option>
                <option value="12" selected>12-inch grid (#3)</option>
                <option value="18">18-inch grid (#3)</option>
                <option value="24">24-inch grid (#4)</option>
              </select>
            </div>
          </div>
          <button class="cs-btn" id="cs-btn">⚡ Calculate Slab</button>
        </div>

        <div class="cs-res">
          <h3 style="font-size:1.15rem;font-weight:700;color:#0f172a;margin:0 0 .25rem;">Slab Results</h3>
          <p style="font-size:.84rem;color:#64748b;margin:0 0 1.25rem;" id="cs-sub">Live calculation active</p>
          <div class="cs-primary">
            <span class="cs-primary-val" id="cs-yard">0.00 yd³</span>
            <span class="cs-primary-lbl">Cubic Yards (with waste)</span>
          </div>
          <div class="cs-boxes">
            <div class="cs-box"><span class="cs-box-val" id="cs-sqft">—</span><span class="cs-box-lbl">Square Feet</span></div>
            <div class="cs-box"><span class="cs-box-val" id="cs-cost">—</span><span class="cs-box-lbl">Est. Material Cost</span></div>
            <div class="cs-box"><span class="cs-box-val" id="cs-60">—</span><span class="cs-box-lbl">60 lb Bags Needed</span></div>
            <div class="cs-box"><span class="cs-box-val" id="cs-80">—</span><span class="cs-box-lbl">80 lb Bags Needed</span></div>
          </div>
          <div class="cs-bkd">
            <div class="cs-bkd-title">Full Breakdown</div>
            <div class="cs-bkd-row"><span class="cs-bkd-lbl">Net volume</span><span class="cs-bkd-val" id="bkd-net">—</span></div>
            <div class="cs-bkd-row"><span class="cs-bkd-lbl">Waste addition</span><span class="cs-bkd-val" id="bkd-waste">—</span></div>
            <div class="cs-bkd-row"><span class="cs-bkd-lbl">Rebar needed</span><span class="cs-bkd-val" id="bkd-rebar">—</span></div>
            <div class="cs-bkd-row"><span class="cs-bkd-lbl">Region adj. cost</span><span class="cs-bkd-val" id="bkd-rcost">—</span></div>
            <div class="cs-bkd-row"><span class="cs-bkd-lbl">→ Order this amount</span><span class="cs-bkd-val" id="bkd-order">—</span></div>
          </div>
          <p style="font-size:.74rem;color:#64748b;">*Material cost only. Labor adds $2–$5/sqft. Always get 3 contractor quotes.</p>
        </div>
      </div>
    </div>

    <section class="cs-section" id="common-size">
      <h2>Common Concrete Slab Sizes — Quick Reference</h2>
      <table class="cs-table">
        <thead><tr><th>Project</th><th>Common Size</th><th>Thickness</th><th>Cubic Yards</th><th>Est. 80 lb Bags</th></tr></thead>
        <tbody>
          <tr><td>Small patio</td><td>10×10 ft</td><td>4 in</td><td>1.23 yd³</td><td>56 bags</td></tr>
          <tr><td>Standard patio</td><td>12×16 ft</td><td>4 in</td><td>2.37 yd³</td><td>107 bags</td></tr>
          <tr><td>Large patio</td><td>20×20 ft</td><td>4 in</td><td>4.94 yd³</td><td>use ready-mix</td></tr>
          <tr><td>1-car garage</td><td>12×20 ft</td><td>4 in</td><td>2.96 yd³</td><td>use ready-mix</td></tr>
          <tr><td>2-car garage</td><td>20×20 ft</td><td>4 in</td><td>4.94 yd³</td><td>use ready-mix</td></tr>
          <tr><td>Residential driveway</td><td>10×20 ft</td><td>6 in</td><td>3.70 yd³</td><td>use ready-mix</td></tr>
          <tr><td>Sidewalk (50 ft)</td><td>50×4 ft</td><td>4 in</td><td>2.47 yd³</td><td>use ready-mix</td></tr>
        </tbody>
      </table>
      <p style="font-size:.82rem;color:#64748b;">All figures include 10% waste factor.</p>
    </section>

    <section class="cs-section" id="cost">
      <h2>Concrete Slab Cost by US Region (<?php echo $currentYear; ?>)</h2>
      <p>Total installed slab cost = concrete material + labor + finishing. Labor and finishing typically add $2–$5 per square foot on top of material cost.</p>
      <table class="cs-table">
        <thead><tr><th>Region</th><th>Material ($/yd³)</th><th>Total Installed ($/sqft)</th><th>10×10 Slab Total</th></tr></thead>
        <tbody>
          <tr><td>Northeast</td><td>$175–$225</td><td>$7–$12</td><td>$700–$1,200</td></tr>
          <tr><td>West Coast</td><td>$165–$215</td><td>$6–$11</td><td>$600–$1,100</td></tr>
          <tr><td>Mountain West</td><td>$150–$190</td><td>$5–$9</td><td>$500–$900</td></tr>
          <tr><td>Midwest</td><td>$140–$175</td><td>$4–$8</td><td>$400–$800</td></tr>
          <tr><td>South</td><td>$130–$165</td><td>$4–$7</td><td>$400–$700</td></tr>
        </tbody>
      </table>
    </section>

    <section class="cs-section" id="thicknes">
      <h2>Slab Thickness by Application</h2>
      <ul>
        <li><strong>Sidewalks &amp; walkways:</strong> 4 inches — ACI minimum for exterior flatwork</li>
        <li><strong>Patios &amp; pool decks:</strong> 4 inches — increase to 5 in if heavy furniture</li>
        <li><strong>Garage floors:</strong> 4–6 inches — 6 in recommended for trucks/heavy vehicles</li>
        <li><strong>Residential driveways:</strong> 4–6 inches — 6 in standard in cold climates</li>
        <li><strong>Commercial driveways:</strong> 6–8 inches — for delivery vehicles and forklifts</li>
      </ul>
    </section>

    <section class="cs-section" id="rebar">
      <h2>Rebar &amp; Wire Mesh Guide for Slabs</h2>
      <p>Rebar and wire mesh add tensile strength — concrete is strong in compression but weak in tension. For residential slabs, the choice is between rebar grids and fiber mesh additives:</p>
      <table class="cs-table">
        <thead><tr><th>Method</th><th>Application</th><th>Spacing</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>#3 Rebar grid</td><td>Patios, sidewalks, garage floors</td><td>12–18 in on center</td><td>Place at mid-depth (2 in up from bottom)</td></tr>
          <tr><td>#4 Rebar grid</td><td>Driveways, commercial slabs</td><td>12–24 in on center</td><td>Required where vehicle loads are expected</td></tr>
          <tr><td>6×6 Wire mesh</td><td>Patios, light-duty slabs</td><td>6-in grid</td><td>Less effective than rebar but easier to install</td></tr>
          <tr><td>Fiber mesh</td><td>All slabs</td><td>Mixed into concrete</td><td>Reduces plastic shrinkage cracks; doesn't replace structural rebar</td></tr>
        </tbody>
      </table>
    </section>

    <section class="cs-section" id="faq">
      <h2>Concrete Slab FAQ</h2>
      <div class="cs-faq-item open">
        <div class="cs-faq-q">How many yards of concrete for a 20×20 slab?</div>
        <div class="cs-faq-a">A 20×20 slab at 4 inches thick = 400 sqft × 0.333 ft = 133.3 ft³ / 27 = 4.94 yd³ net. With 10% waste = <strong>5.43 yd³</strong> to order. At $160/yd³ (Midwest average), material cost is ~$869. Use the calculator above for your exact thickness and region.</div>
      </div>
      <div class="cs-faq-item">
        <div class="cs-faq-q">How thick should a concrete patio slab be?</div>
        <div class="cs-faq-a">4 inches is the ACI-recommended minimum for residential exterior flatwork including patios. Increase to 5–6 inches if the patio will support a hot tub (which can weigh 3,000–5,000 lbs when full), heavy planters, or a pergola with anchor bolts. Thicker slabs also reduce cracking risk in freeze-thaw climates.</div>
      </div>
      <div class="cs-faq-item">
        <div class="cs-faq-q">How much does a concrete slab cost?</div>
        <div class="cs-faq-a">In <?php echo $currentYear; ?>, a concrete slab costs $4–$8 per square foot installed in the Midwest/South, and $6–$12 per square foot in the Northeast and West Coast. A 10×10 patio slab typically costs $400–$1,200 total installed. Material alone (concrete + rebar) is usually $1–$3/sqft; labor and finishing account for the rest.</div>
      </div>
      <div class="cs-faq-item">
        <div class="cs-faq-q">Do I need rebar in a 4-inch concrete slab?</div>
        <div class="cs-faq-a">For most residential patios and sidewalks, #3 rebar at 18-inch spacing or 6×6 wire mesh is recommended but not always code-required. For garage floors and driveways (where vehicle loads apply), rebar is strongly recommended. In freeze-thaw climates, rebar significantly reduces cracking from ground heave. Check your local building code — some municipalities require rebar for any slab over a certain size.</div>
      </div>
      <div class="cs-faq-item">
        <div class="cs-faq-q">How long does a concrete slab take to cure before use?</div>
        <div class="cs-faq-a">A concrete slab is typically <strong>walkable after 24–48 hours</strong> and reaches approximately 70% design strength at 7 days. Full design strength (100%) is achieved at 28 days. Avoid parking vehicles on a new garage floor or driveway for at least <strong>7 days</strong> (14 days in cold weather). Keep the surface moist — covered with plastic sheeting or burlap — for the first 3–7 days to prevent surface cracking from rapid drying.</div>
      </div>
      <div class="cs-faq-item">
        <div class="cs-faq-q">What PSI concrete should I use for a driveway slab?</div>
        <div class="cs-faq-a">Use a minimum of <strong>4,000 PSI</strong> concrete for residential driveways. In cold climates with significant freeze-thaw cycles, specify <strong>4,500 PSI with air entrainment</strong> (4–7% entrained air). Air-entrained concrete resists surface scaling caused by de-icing salts far better than standard mixes. For standard patios and walkways with no vehicle traffic, 3,500 PSI is typically sufficient.</div>
      </div>
      <div class="cs-faq-item">
        <div class="cs-faq-q">How do I calculate concrete for an L-shaped or irregular slab?</div>
        <div class="cs-faq-a">Break the shape into simpler rectangles. Calculate each rectangle separately, add all volumes together, then add 10–15% for waste. Example: An L-shaped patio that is 20×10 ft plus a 10×8 ft extension = (200 + 80) × (4 / 12) = 93.3 ft³ = 3.46 yd³ net. With 12% waste = <strong>3.87 yd³</strong> to order. For complex curves or round sections, add at least 15% waste.</div>
      </div>
      <div class="cs-faq-item">
        <div class="cs-faq-q">What is the difference between concrete and cement?</div>
        <div class="cs-faq-a">Cement is just one ingredient in concrete. <strong>Concrete = cement + sand + aggregate (gravel) + water</strong>. Portland cement acts as the binder — when mixed with water it forms a paste that coats the aggregate and hardens. You cannot pour a slab from cement alone. When people say "cement slab" or "cement driveway," they almost always mean concrete. The confusion is common but important to understand when ordering materials.</div>
      </div>
      <div class="cs-faq-item">
        <div class="cs-faq-q">How much does a 20×20 concrete slab cost installed?</div>
        <div class="cs-faq-a">A 20×20 slab (400 sqft) at 4 inches thick costs approximately <strong>$1,600–$3,200 installed</strong> in the Midwest and South, and <strong>$2,400–$4,800</strong> in the Northeast and West Coast. This range includes excavation, forming, concrete material, rebar, pour, finishing, and basic sealing. Site access, soil conditions, and decorative finishes (stamped, stained, or exposed aggregate) will push costs toward the higher end.</div>
      </div>
    </section>

    <section class="cs-section" id="slab-prep">
      <h2>How to Prepare a Site for a Concrete Slab</h2>
      <p>The quality of a concrete slab depends as much on what happens <em>before</em> the pour as during it. Poor sub-base preparation is the leading cause of cracked and settled slabs — no amount of good concrete can compensate for a weak base.</p>

      <h3>Step 1 — Excavate and Grade</h3>
      <p>Remove all topsoil, organic material, and vegetation from the slab area. Topsoil compresses and decomposes over time, causing settlement. Excavate to the required depth (typically 6–8 inches below finished slab grade to allow for sub-base plus slab thickness). Grade the area to drain water away from structures — minimum 1% slope (⅛ inch per foot) away from buildings.</p>

      <h3>Step 2 — Compact the Sub-Base</h3>
      <p>Place 4–6 inches of compacted crushed gravel (¾-inch clean gravel or road base) over the excavated area. Compact in 2-inch lifts using a plate compactor — never compact the full 4 inches in one pass. Proper compaction prevents differential settlement that cracks slabs. In cold climates, a well-drained gravel base also helps prevent frost heave by preventing water from accumulating under the slab.</p>

      <h3>Step 3 — Install Forms</h3>
      <p>Set 2×4 or 2×6 lumber forms along the perimeter of the slab. Use a level and stakes to ensure forms are perfectly flat — any variation will show in the finished surface. Brace forms every 2–3 feet to prevent blowout when concrete is placed. Oil the inside of forms lightly to allow removal without damage.</p>

      <h3>Step 4 — Place Vapor Barrier (if on grade)</h3>
      <p>For interior slabs (garage floors, basement floors, shop floors), place 6-mil polyethylene sheeting over the gravel base before pouring. This prevents ground moisture from wicking up through the slab, which causes efflorescence, paint failure, and moisture problems in finished spaces.</p>

      <h3>Step 5 — Set Rebar or Wire Mesh</h3>
      <p>Place rebar on chairs or dobies at the correct height — typically 1.5–2 inches from the bottom of the slab for a 4-inch slab. Rebar that rests on the ground provides no tensile benefit. Overlap rebar splices by at least 18 bar diameters (18 × 0.375 in = 6.75 inches for #3 rebar).</p>

      <h3>Step 6 — Order and Pour Concrete</h3>
      <p>Confirm your cubic yardage (use this calculator) with the ready-mix plant and schedule delivery. Have all tools staged: screed board, bull float, hand float, edger, jointing tool, and knee boards. Pour concrete starting from the far corner and work back toward the truck. Strike off with a screed, float, then finish as the bleed water disappears. Cut control joints at 1/4 the slab thickness every 8–12 feet to control where cracking occurs.</p>

      <h3>Slab Prep Cost Summary</h3>
      <table class="cs-table">
        <thead><tr><th>Prep Item</th><th>Typical Cost</th><th>DIY vs. Hire</th></tr></thead>
        <tbody>
          <tr><td>Excavation (10×10 ft)</td><td>$150–$400</td><td>DIY possible with shovel; hire for large areas</td></tr>
          <tr><td>Gravel sub-base (4 in)</td><td>$80–$200</td><td>DIY — order from a landscape supply yard</td></tr>
          <tr><td>2×6 form lumber</td><td>$40–$120</td><td>DIY</td></tr>
          <tr><td>Vapor barrier (6 mil)</td><td>$25–$60</td><td>DIY</td></tr>
          <tr><td>Rebar (#3, 12-inch grid)</td><td>$80–$200</td><td>DIY with rebar cutter/bender or bolt cutters</td></tr>
          <tr><td>Concrete finishing tools</td><td>$50–$150 (rental)</td><td>Rent bull float, edger, jointer</td></tr>
        </tbody>
      </table>
    </section>

    <section class="cs-section" id="slab-mistake">
      <h2>Common Concrete Slab Mistakes to Avoid</h2>
      <ul>
        <li><strong>Adding water to loosen the mix.</strong> This is the single most damaging mistake. Adding ½ gallon of water per yd³ reduces concrete strength by 200 PSI. Never add water after the truck leaves the plant.</li>
        <li><strong>Finishing too early.</strong> Working the surface while bleed water is still present traps water beneath the surface layer, causing scaling and delamination. Wait until bleed water disappears before floating.</li>
        <li><strong>Skipping control joints.</strong> Concrete always cracks — the question is where. Control joints (saw cuts or hand-tooled grooves) at ¼ slab depth every 8–12 feet direct cracks to a straight, inconspicuous line.</li>
        <li><strong>Pouring in direct sun or high wind.</strong> Both cause rapid surface drying before the bulk of the concrete sets, leading to plastic shrinkage cracks. Erect windbreaks and sun shades for large exterior pours in summer.</li>
        <li><strong>Not testing soil compaction.</strong> Soft spots under the slab will settle. Walk the area after compacting — if it feels soft or spongy anywhere, add more gravel and re-compact.</li>
        <li><strong>Ordering exactly the calculated amount.</strong> Always add 5–10% to your calculation. Running short during a pour is a serious problem — a cold joint (where fresh meets partially set concrete) is a permanent structural weakness.</li>
      </ul>
    </section>
  </div>

  <aside class="cs-sidebar">
    <div class="cs-widget">
      <div class="cs-widget-head">
        <div class="cs-widget-title">Slab Size Quick Guide</div>
        <div class="cs-widget-sub">Cubic yards at 4-inch thickness</div>
      </div>
      <div class="cs-widget-rows">
        <div class="cs-widget-row"><div><div class="cs-wl">10×10 ft patio</div><div class="cs-ws">With 10% waste</div></div><div><div class="cs-wv">1.36 yd³</div></div></div>
        <div class="cs-widget-row"><div><div class="cs-wl">12×16 ft patio</div><div class="cs-ws">With 10% waste</div></div><div><div class="cs-wv">2.61 yd³</div></div></div>
        <div class="cs-widget-row" style="background:#f8fafc;"><div><div class="cs-wl">20×20 ft garage</div><div class="cs-ws">With 10% waste</div></div><div><div class="cs-wv">5.43 yd³</div></div></div>
        <div class="cs-widget-row"><div><div class="cs-wl">10×20 ft driveway</div><div class="cs-ws">6-inch thick</div></div><div><div class="cs-wv">4.07 yd³</div></div></div>
      </div>
      <div class="cs-widget-foot">
        <p>Use ready-mix for any project over 1 yd³ — it's cheaper and ensures consistent quality.</p>
        <a href="<?php echo $baseUrl; ?>/construction/concrete-yardage-calculator">Yardage Calculator →</a>
      </div>
    </div>
    <div class="cs-quick-widget">
      <div class="cs-quick-head">🧱 Concrete Tools</div>
      <ul class="cs-quick-links">
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-calculator">🟦 Concrete Hub</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-slab-calculator" class="active">🟫 Slab Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-bag-calculator">🛍️ Bag Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-yardage-calculator">🚛 Yardage Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-footing-calculator">🏗️ Footing Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/home-addition-cost-calculator">🏠 Home Addition Cost</a></li>
      </ul>
    </div>
  </aside>
</div>
</main>
<script>
document.addEventListener('DOMContentLoaded', function(){
  const btn = document.getElementById('cs-btn');
  function calc(){
    const L=parseFloat(document.getElementById('s_len')?.value)||0;
    const W=parseFloat(document.getElementById('s_wid')?.value)||0;
    const T=parseFloat(document.getElementById('s_thk')?.value)||0;
    const unit=document.getElementById('s_unit')?.value || 'in';
    const price=parseFloat(document.getElementById('s_price')?.value)||160;
    const rMult=parseFloat(document.getElementById('s_region')?.value)||1;
    const waste=parseFloat(document.getElementById('s_waste')?.value)||10;
    const rebarSpacing=parseInt(document.getElementById('s_rebar')?.value)||0;
    if(L<=0||W<=0||T<=0) return;
    const tFt = unit==='in' ? T/12 : T;
    const cf = L*W*tFt;
    const cfW = cf*(1+waste/100);
    const cyNet = cf/27;
    const cyW = cfW/27;
    const adjCost = cyW * price * rMult;
    const sqft = L*W;
    const bags60=Math.ceil(cfW/0.45);
    const bags80=Math.ceil(cfW/0.60);
    
    let rebarFt = '—';
    if(rebarSpacing>0){
      const sp=rebarSpacing/12;
      const rows=Math.ceil(W/sp)+1;
      const cols=Math.ceil(L/sp)+1;
      const lf=rows*L + cols*W;
      rebarFt = Math.ceil(lf*1.10).toLocaleString() + ' lin ft';
    }
    const fmtC=v=>'$'+Math.round(v).toLocaleString('en-US');
    const fmtN=(v,d=2)=>Number(v).toFixed(d);

    const setTxt=(id,txt)=>{
      const el=document.getElementById(id);
      if(el) el.textContent=txt;
    };

    setTxt('cs-yard', fmtN(cyW,2)+' yd³');
    setTxt('cs-yards', fmtN(cyW,2)+' yd³');
    setTxt('cs-sqft', sqft.toLocaleString()+' sqft');
    setTxt('cs-cost', fmtC(adjCost));
    setTxt('cs-60', bags60.toLocaleString());
    setTxt('cs-80', bags80.toLocaleString());
    setTxt('bkd-net', fmtN(cyNet,2)+' yd³');
    setTxt('bkd-waste', fmtN(cyW-cyNet,2)+' yd³ ('+waste+'%)');
    setTxt('bkd-rebar', rebarFt);
    setTxt('bkd-rcost', fmtC(adjCost));
    setTxt('bkd-order', fmtN(cyW,2)+' yd³');
    setTxt('cs-sub', sqft+' sqft · '+T+(unit==='in'?'"':' ft')+' thick · '+waste+'% waste');
  }
  document.querySelectorAll('.cs-field input,.cs-field select').forEach(el=>{
    el.addEventListener('input',calc);
    el.addEventListener('change',calc);
    el.addEventListener('keyup',calc);
  });
  if(btn) btn.addEventListener('click',calc);
  calc();
  document.querySelectorAll('.cs-faq-q').forEach(q=>{
    q.addEventListener('click',function(){
      const i=this.closest('.cs-faq-item');
      if(!i) return;
      const w=i.classList.contains('open');
      document.querySelectorAll('.cs-faq-item').forEach(x=>x.classList.remove('open'));
      if(!w)i.classList.add('open');
    });
  });
});
</script>
<?php require_once '../includes/footer.php'; ?>
