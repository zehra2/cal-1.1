<?php
$currentYear = date('Y');
$pageTitle       = "Concrete Yardage Calculator ($currentYear) | Yard";
$metaDescription = "Free $currentYear concrete yardage calculator. Get cubic yards for slabs, footings, walls, and columns. Shows truck load sizes, short-load fees, and ready-mix costs by US region.";
$metaKeywords    = 'concrete yardage calculator, concrete yard calculator, concrete yards calculator, yards of concrete calculator, calculate concrete yards, cubic yard calculator concrete, concrete cubic yard calculator, ready mix concrete calculator, how to calculate yards of concrete';
$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    ['@type'=>'WebApplication','name'=>'Concrete Yardage Calculator','url'=>'https://americacalculator.com/construction/concrete-yardage-calculator','description'=>"Calculate cubic yards of concrete for any project with truck load sizing and cost estimates.",'applicationCategory'=>'HomeAndGardenApplication','operatingSystem'=>'All','offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
    ['@type'=>'FAQPage','mainEntity'=>[
      ['@type'=>'Question','name'=>'How many yards of concrete for a 20×20 slab at 4 inches?','acceptedAnswer'=>['@type'=>'Answer','text'=>'20 × 20 × (4 / 12) = 133.3 ft³ / 27 = 4.94 yd³ net. With 10% waste = 5.43 yd³. This is under the typical 8 yd³ truck minimum, so expect a short-load fee of roughly $60–$135 above the base material cost.']],
      ['@type'=>'Question','name'=>'How many yards of concrete per 80 lb bag?','acceptedAnswer'=>['@type'=>'Answer','text'=>'One 80 lb bag yields 0.60 ft³ = 0.0222 cubic yards. To find bags needed: divide your cubic yards by 0.0222, or multiply cubic yards by 45 to get the 80 lb bag count before adding a waste factor.']],
      ['@type'=>'Question','name'=>'What is the minimum ready-mix concrete order?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Most US ready-mix suppliers charge for a minimum of 8–10 cubic yards per truck. If you need less, you pay a short-load surcharge of $15–$25 per yard for the difference. For orders under 3 yards, bags are usually more cost-effective once the short-load fee is factored in.']],
      ['@type'=>'Question','name'=>'How do I convert cubic feet to cubic yards of concrete?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Divide cubic feet by 27. There are 27 cubic feet in one cubic yard. Example: a 10×12 slab at 4 inches thick = 10 × 12 × 0.333 = 40 ft³ / 27 = 1.48 yd³. Always add 5–10% for waste before ordering.']],
      ['@type'=>'Question','name'=>'How long does a ready-mix concrete truck take to unload?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Most ready-mix contracts allow 60–90 minutes from the time the truck arrives on site. After that, overtime charges apply — typically $1–$3 per minute. Have your entire crew, tools, and forms completely ready before the truck arrives.']],
      ['@type'=>'Question','name'=>'How much does a yard of concrete cost in 2026?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Ready-mix concrete costs $130–$165/yd³ in the South, $140–$175/yd³ in the Midwest, $150–$190/yd³ in the Mountain West, $165–$215/yd³ on the West Coast, and $175–$225/yd³ in the Northeast. Delivery fees add $100–$300 per load depending on distance.']],
      ['@type'=>'Question','name'=>'What does a short-load fee mean for concrete?','acceptedAnswer'=>['@type'=>'Answer','text'=>'A short-load fee is a surcharge charged when your order is below the ready-mix supplier\'s minimum load — typically 8–10 yd³. The fee compensates the supplier for dispatching a full-size truck with a partial load. It usually runs $15–$25 per cubic yard of the shortfall.']],
      ['@type'=>'Question','name'=>'Can I order concrete by the half yard?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Most ready-mix plants will batch in 0.25 yd³ increments, but will charge you for their minimum (usually 8–10 yd³) regardless. A few suppliers offer "short load" service at higher per-yard prices for small orders. Alternatively, trailer-mounted mini-mix services in some areas deliver as little as 1 yd³ at a premium.']],
    ]],
    ['@type'=>'BreadcrumbList','itemListElement'=>[
      ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
      ['@type'=>'ListItem','position'=>2,'name'=>'Construction','item'=>'https://americacalculator.com/construction/'],
      ['@type'=>'ListItem','position'=>3,'name'=>'Concrete Calculator','item'=>'https://americacalculator.com/construction/concrete-calculator'],
      ['@type'=>'ListItem','position'=>4,'name'=>'Concrete Yardage Calculator','item'=>'https://americacalculator.com/construction/concrete-yardage-calculator'],
    ]],
  ],
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f5f7fa;}
.cy-wrap{max-width:1320px;margin:0 auto;padding:2rem 1.5rem 4rem;display:grid;grid-template-columns:220px 1fr 260px;gap:2rem;align-items:start;}
.cy-toc{position:sticky;top:6rem;background:#fff;border-radius:12px;border:1px solid #e8edf5;box-shadow:0 2px 12px rgba(0,0,0,.04);overflow:hidden;}
.cy-toc-head{background:linear-gradient(135deg,#64748b,#475569);color:#fff;padding:1rem 1.25rem;font-weight:700;font-size:.85rem;text-transform:uppercase;letter-spacing:.8px;}
.cy-toc-list{list-style:none;padding:.75rem 0;margin:0;}
.cy-toc-list li a{display:block;padding:.5rem 1.25rem;font-size:.84rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .18s;}
.cy-toc-list li a:hover,.cy-toc-list li a.cy-active{color:#475569;background:#f1f5f9;border-left-color:#64748b;}
.cy-toc-div{height:1px;background:#f1f5f9;margin:.5rem 0;}
.cy-toc-rlbl{padding:.5rem 1.25rem;font-size:.78rem;font-weight:700;color:#94a3b8;text-transform:uppercase;}
.cy-toc-rlist{list-style:none;padding:0;margin:0 0 .75rem;}
.cy-toc-rlist li a{display:block;padding:.4rem 1.25rem;font-size:.82rem;color:#64748b;text-decoration:none;}
.cy-toc-rlist li a:hover{color:#475569;}
.cy-main{min-width:0;}
.cy-hero{margin-bottom:2rem;}
.cy-hero h1{font-size:2.1rem;color:#0f172a;margin:0 0 .6rem;line-height:1.25;}
.cy-desc{font-size:1.05rem;color:#64748b;line-height:1.65;margin:0 0 .75rem;border-left:4px solid #94a3b8;padding-left:1rem;}
.cy-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}
.cy-bc a{color:#64748b;text-decoration:none;}
.cy-card{background:#fff;border-radius:14px;box-shadow:0 4px 24px rgba(0,0,0,.05);border:1px solid #eef2f7;margin-bottom:2.5rem;overflow:hidden;}
.cy-inner{display:grid;grid-template-columns:1fr 1fr;}
.cy-form{padding:2rem;border-right:1px solid #f0f4fa;}
.cy-res{padding:2rem;background:linear-gradient(160deg,#f8fafc,#f1f5f9);}
.cy-field{margin-bottom:1.2rem;}
.cy-field label{display:block;font-weight:600;font-size:.9rem;color:#1e293b;margin-bottom:.4rem;}
.cy-field input,.cy-field select{width:100%;padding:12px 15px;border:1.5px solid #d1dae8;border-radius:8px;font-size:1rem;color:#0f172a;outline:none;transition:border-color .2s;box-sizing:border-box;background:#fff;}
.cy-field input:focus,.cy-field select:focus{border-color:#64748b;box-shadow:0 0 0 3px rgba(100,116,139,.12);}
.cy-field .cy-hint{font-size:.76rem;color:#94a3b8;margin-top:.3rem;}
.cy-row2{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.cy-btn{width:100%;background:linear-gradient(135deg,#1e3a8a,#2563eb);color:#fff;padding:14px;border:none;border-radius:9px;font-size:1rem;font-weight:700;cursor:pointer;margin-top:.75rem;transition:opacity .2s,transform .15s;box-shadow:0 4px 12px rgba(37,99,235,.2);}
.cy-btn:hover{opacity:.95;transform:translateY(-1px);}
.cy-primary{background:linear-gradient(135deg,#1e3a8a,#2563eb);border-radius:12px;padding:1.4rem 1rem;text-align:center;box-shadow:0 8px 20px rgba(37,99,235,.22);margin-bottom:.85rem;}
.cy-primary-val{display:block;font-size:2.5rem;font-weight:800;color:#fff;line-height:1;margin-bottom:.25rem;letter-spacing:-0.5px;}
.cy-primary-lbl{font-size:.88rem;color:rgba(255,255,255,.9);font-weight:500;}
.cy-boxes{display:grid;grid-template-columns:1fr 1fr;gap:.7rem;margin-bottom:.85rem;}
.cy-box{background:#fff;border:1.5px solid #e8edf5;border-radius:10px;padding:.85rem .75rem;text-align:center;}
.cy-box-val{display:block;font-size:1.15rem;font-weight:800;color:#0f172a;margin-bottom:.15rem;}
.cy-box-lbl{font-size:.72rem;color:#64748b;font-weight:600;line-height:1.3;}
.cy-truck{background:#fff;border:1px solid #e2e8f0;border-radius:10px;padding:.9rem 1rem;margin-bottom:.75rem;}
.cy-truck-title{font-size:.74rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:#64748b;margin-bottom:.5rem;}
.cy-truck-row{display:flex;justify-content:space-between;font-size:.84rem;padding:.32rem 0;border-bottom:1px solid #f1f5f9;}
.cy-truck-row:last-child{border-bottom:none;}
.cy-truck-lbl{color:#64748b;}
.cy-truck-val{font-weight:700;color:#1e293b;}
.cy-section{background:#fff;border-radius:14px;border:1px solid #eef2f7;box-shadow:0 2px 12px rgba(0,0,0,.03);padding:2.25rem;margin-bottom:2rem;scroll-margin-top:6rem;}
.cy-section h2{font-size:1.65rem;color:#0f172a;margin:0 0 1.25rem;padding-bottom:.75rem;border-bottom:2px solid #f0f4fa;}
.cy-section h3{font-size:1.18rem;color:#1e293b;margin:1.75rem 0 .7rem;}
.cy-section p{color:#475569;line-height:1.75;margin-bottom:1.25rem;}
.cy-section ul{color:#475569;line-height:1.75;padding-left:1.5rem;margin-bottom:1.25rem;}
.cy-section li{margin-bottom:.5rem;}
.cy-section strong{color:#1e293b;}
.cy-section a{color:#2563eb;font-weight:600;}
.cy-formula{background:#0f172a;color:#94a3b8;font-family:'Courier New',monospace;font-size:1rem;padding:1.1rem 1.4rem;border-radius:8px;margin:1.25rem 0;line-height:1.9;}
.cy-formula code{display:block;}
.cy-table{width:100%;border-collapse:collapse;border-radius:10px;overflow:hidden;border:1px solid #e8edf5;margin-bottom:1.5rem;}
.cy-table th{background:#334155;color:#fff;padding:13px 16px;text-align:left;font-size:.88rem;font-weight:600;}
.cy-table td{padding:11px 16px;border-bottom:1px solid #f1f5f9;font-size:.9rem;color:#334155;}
.cy-table tr:last-child td{border-bottom:none;}
.cy-table tr:nth-child(even) td{background:#f8fafc;}
.cy-info{background:#eff6ff;border-left:4px solid #2563eb;border-radius:0 8px 8px 0;padding:1rem 1.25rem;margin:1.25rem 0;font-size:.95rem;color:#1e3a8a;line-height:1.6;}
.cy-warn{background:#fffbeb;border-left:4px solid #d97706;border-radius:0 8px 8px 0;padding:1rem 1.25rem;margin:1.25rem 0;font-size:.95rem;color:#92400e;line-height:1.6;}
.cy-faq-item{border-bottom:1px solid #f0f4fa;padding-bottom:1.25rem;margin-bottom:1.25rem;}
.cy-faq-item:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0;}
.cy-faq-q{font-size:1.02rem;font-weight:700;color:#0f172a;margin-bottom:.6rem;cursor:pointer;display:flex;justify-content:space-between;align-items:flex-start;gap:1rem;}
.cy-faq-q::after{content:'+';font-size:1.3rem;color:#64748b;flex-shrink:0;}
.cy-faq-item.open .cy-faq-q::after{content:'−';}
.cy-faq-a{color:#475569;line-height:1.7;font-size:.97rem;display:none;}
.cy-faq-item.open .cy-faq-a{display:block;}
.cy-sidebar{position:sticky;top:6rem;display:flex;flex-direction:column;gap:1.25rem;}
.cy-widget{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 10px rgba(0,0,0,.04);overflow:hidden;}
.cy-widget-head{background:linear-gradient(135deg,#1e3a8a,#2563eb);color:#fff;padding:1rem 1.25rem;}
.cy-widget-title{font-size:1rem;font-weight:700;}
.cy-widget-sub{font-size:.8rem;color:rgba(255,255,255,.85);}
.cy-widget-rows{padding:.4rem 0;}
.cy-widget-row{display:flex;justify-content:space-between;align-items:center;padding:.6rem 1.25rem;border-bottom:1px solid #f8fafc;}
.cy-widget-row:last-child{border-bottom:none;}
.cy-wl{font-size:.82rem;font-weight:600;color:#334155;}
.cy-ws{font-size:.72rem;color:#94a3b8;}
.cy-wv{font-size:.95rem;font-weight:800;color:#1e3a8a;}
.cy-widget-foot{padding:.85rem 1.25rem;border-top:1px solid #f0f4fa;background:#f8fafc;}
.cy-widget-foot p{font-size:.75rem;color:#64748b;margin:0 0 .5rem;line-height:1.3;}
.cy-widget-foot a{font-size:.83rem;font-weight:700;color:#2563eb;text-decoration:none;}
.cy-quick-widget{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 10px rgba(0,0,0,.04);overflow:hidden;}
.cy-quick-head{padding:.85rem 1.15rem;background:#f8fafc;border-bottom:1px solid #edf2f7;font-size:.82rem;font-weight:700;color:#334155;text-transform:uppercase;letter-spacing:.5px;display:flex;align-items:center;gap:.5rem;}
.cy-quick-links{list-style:none;padding:.4rem 0;margin:0;}
.cy-quick-links li{margin:0;padding:0;}
.cy-quick-links li a{display:flex;align-items:center;gap:.6rem;padding:.65rem 1.15rem;font-size:.86rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .18s;font-weight:500;}
.cy-quick-links li a:hover{color:#1e293b;background:#f8fafc;border-left-color:#3b82f6;padding-left:1.35rem;}
.cy-quick-links li a.active{color:#1d4ed8;background:#eff6ff;border-left-color:#2563eb;font-weight:700;}
@media(max-width:1024px){.cy-wrap{grid-template-columns:1fr;}.cy-toc,.cy-sidebar{position:static;}.cy-sidebar{display:grid;grid-template-columns:1fr 1fr;}}
@media(max-width:768px){.cy-wrap{padding:1rem 1rem 3rem;}.cy-inner{grid-template-columns:1fr;}.cy-form{border-right:none;border-bottom:1px solid #f0f4fa;}.cy-sidebar{grid-template-columns:1fr;}.cy-row2{grid-template-columns:1fr;}}
</style>

<main id="main-content">
<div class="cy-wrap">
  <aside class="cy-toc">
    <div class="cy-toc-head">📋 On This Page</div>
    <ul class="cy-toc-list">
      <li><a href="#calculator" class="cy-active">Yardage Calculator</a></li>
      <li><a href="#formula">The Formula</a></li>
      <li><a href="#truck-load">Truck Load Guide</a></li>
      <li><a href="#cost"><?php echo $currentYear; ?> Cost Guide</a></li>
      <li><a href="#faq">FAQ</a></li>
      <li><a href="#yardage-worked-example">Worked Examples</a></li>
      <li><a href="#ordering-tip">Ordering Checklist</a></li>
    </ul>
    <div class="cy-toc-div"></div>
    <div class="cy-toc-rlbl">More Concrete Tools</div>
    <ul class="cy-toc-rlist">
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-calculator">Main Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-slab-calculator">Slab Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-bag-calculator">Bag Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-footing-calculator">Footing Calculator</a></li>
    </ul>
  </aside>

  <div class="cy-main">
    <div class="cy-hero">
      <div class="cy-bc"><a href="<?php echo $baseUrl; ?>/index.php">Home</a> › <a href="<?php echo $baseUrl; ?>/construction/">Construction</a> › <a href="<?php echo $baseUrl; ?>/construction/concrete-calculator">Concrete Calculator</a> › Yardage Calculator</div>
      <h1>Concrete Yardage Calculator (<?php echo $currentYear; ?>) – Cubic Yards &amp; Truck Sizing</h1>
      <p class="cy-desc">Calculate cubic yards for slabs, footings, columns, and walls. Includes ready-mix truck load sizing, short-load fee estimate, and <?php echo $currentYear; ?> cost by US region.</p>
    </div>

    <div class="cy-card" id="calculator">
      <div class="cy-inner">
        <div class="cy-form">
          <div class="cy-field"><label for="cy_shape">Shape</label>
            <select id="cy_shape">
              <option value="rect" selected>Rectangular Slab / Pad / Wall</option>
              <option value="round">Round Column / Sonotube</option>
              <option value="footing">Continuous Footing</option>
            </select>
          </div>
          <div id="cy-rect">
            <div class="cy-row2">
              <div class="cy-field"><label for="cy_l">Length (ft)</label><input type="number" id="cy_l" value="20" min="0.1" step="0.1"></div>
              <div class="cy-field"><label for="cy_w">Width (ft)</label><input type="number" id="cy_w" value="10" min="0.1" step="0.1"></div>
            </div>
            <div class="cy-row2">
              <div class="cy-field"><label for="cy_t">Thickness/Depth</label><input type="number" id="cy_t" value="4" min="0.1" step="0.5"></div>
              <div class="cy-field"><label for="cy_tu">Unit</label><select id="cy_tu"><option value="in" selected>Inches</option><option value="ft">Feet</option></select></div>
            </div>
          </div>
          <div id="cy-round" style="display:none;">
            <div class="cy-row2">
              <div class="cy-field"><label for="cy_rd">Diameter</label><input type="number" id="cy_rd" value="12" min="1" step="1"></div>
              <div class="cy-field"><label for="cy_rdu">Unit</label><select id="cy_rdu"><option value="in" selected>Inches</option><option value="ft">Feet</option></select></div>
            </div>
            <div class="cy-row2">
              <div class="cy-field"><label for="cy_rh">Height (ft)</label><input type="number" id="cy_rh" value="3" min="0.1" step="0.1"></div>
              <div class="cy-field"><label for="cy_rq">Qty</label><input type="number" id="cy_rq" value="1" min="1" step="1"></div>
            </div>
          </div>
          <div id="cy-footing" style="display:none;">
            <div class="cy-row2">
              <div class="cy-field"><label for="cy_fl">Length (ft)</label><input type="number" id="cy_fl" value="40" min="0.1" step="0.1"></div>
              <div class="cy-field"><label for="cy_fw">Width (ft)</label><input type="number" id="cy_fw" value="1.5" min="0.1" step="0.1"></div>
            </div>
            <div class="cy-field"><label for="cy_fd">Depth (ft)</label><input type="number" id="cy_fd" value="1" min="0.1" step="0.1"></div>
          </div>

          <div style="border-top:1px dashed #e2e8f0;margin-top:1.25rem;padding-top:1.25rem;">
            <div class="cy-row2">
              <div class="cy-field"><label for="cy_price">Price ($/yd³)</label><input type="number" id="cy_price" value="160" min="50" step="5"><div class="cy-hint">$140–$225 in <?php echo $currentYear; ?></div></div>
              <div class="cy-field"><label for="cy_waste">Waste (%)</label><input type="number" id="cy_waste" value="10" min="0" max="30" step="1"></div>
            </div>
          </div>
          <button class="cy-btn" id="cy-btn">⚡ Calculate Yardage</button>
        </div>

        <div class="cy-res">
          <h3 style="font-size:1.15rem;font-weight:700;color:#0f172a;margin:0 0 .25rem;">Yardage Results</h3>
          <p style="font-size:.84rem;color:#64748b;margin:0 0 1.25rem;" id="cy-sub">Live calculation active</p>
          <div class="cy-primary">
            <span class="cy-primary-val" id="cy-yard">0.00 yd³</span>
            <span class="cy-primary-lbl">Cubic Yards to Order</span>
          </div>
          <div class="cy-boxes">
            <div class="cy-box"><span class="cy-box-val" id="cy-cf">—</span><span class="cy-box-lbl">Cubic Feet</span></div>
            <div class="cy-box"><span class="cy-box-val" id="cy-cost">—</span><span class="cy-box-lbl">Est. Material Cost</span></div>
            <div class="cy-box"><span class="cy-box-val" id="cy-net">—</span><span class="cy-box-lbl">Net (no waste)</span></div>
            <div class="cy-box"><span class="cy-box-val" id="cy-bags80">—</span><span class="cy-box-lbl">80 lb Bags Alt.</span></div>
          </div>
          <div class="cy-truck">
            <div class="cy-truck-title">Ready-Mix Truck Guide</div>
            <div class="cy-truck-row"><span class="cy-truck-lbl">Full truck minimum</span><span class="cy-truck-val">8–10 yd³</span></div>
            <div class="cy-truck-row"><span class="cy-truck-lbl">Short-load fee</span><span class="cy-truck-val">$15–$25/yd³ under min</span></div>
            <div class="cy-truck-row"><span class="cy-truck-lbl">Your order vs. min</span><span class="cy-truck-val" id="cy-truck-compare">—</span></div>
            <div class="cy-truck-row"><span class="cy-truck-lbl">Est. short-load fee</span><span class="cy-truck-val" id="cy-short-fee">—</span></div>
            <div class="cy-truck-row"><span class="cy-truck-lbl">Est. total incl. delivery</span><span class="cy-truck-val" id="cy-total">—</span></div>
          </div>
          <p style="font-size:.74rem;color:#64748b;">*Delivery fee and short-load vary by supplier. Always confirm with your local ready-mix plant.</p>
        </div>
      </div>
    </div>

    <section class="cy-section" id="formula">
      <h2>How to Calculate Cubic Yards of Concrete</h2>
      <div class="cy-formula">
        <code>Cubic Feet  = Length × Width × Thickness (all in feet)</code>
        <code>Cubic Yards = Cubic Feet / 27</code>
        <code>With waste  = Cubic Yards × (1 + Waste%/100)</code>
      </div>
      <p><strong>Key conversions:</strong> Always convert thickness to feet before calculating. 4 inches = 0.333 ft · 6 inches = 0.5 ft · 8 inches = 0.667 ft · 12 inches = 1.0 ft.</p>
      <div class="cy-info">💡 <strong>Round columns / post holes:</strong> Volume = π × r² × height. A 12-inch diameter × 3-ft deep column = 3.1416 × (0.5)² × 3 = 2.36 ft³ = 0.087 yd³.</div>
    </section>

    <section class="cy-section" id="truck-load">
      <h2>Ready-Mix Truck Load Guide</h2>
      <table class="cy-table">
        <thead><tr><th>Order Size</th><th>Truck Type</th><th>Short-Load Fee</th><th>Best Strategy</th></tr></thead>
        <tbody>
          <tr><td>Under 1 yd³</td><td>N/A — use bags</td><td>N/A</td><td>Use 80 lb bags; ready-mix not cost-effective</td></tr>
          <tr><td>1–3 yd³</td><td>Short load / mini mix</td><td>$15–$25/yd³ under 8 yd³</td><td>Ask for leftover from nearby pour; use bags if gap &lt;$100</td></tr>
          <tr><td>3–7 yd³</td><td>Standard truck (partial)</td><td>$15–$25/yd³ short-load</td><td>Order ready-mix; factor short-load fee into budget</td></tr>
          <tr><td>8–10 yd³</td><td>Standard truck (full)</td><td>None — at minimum</td><td>Most economical per-yard price</td></tr>
          <tr><td>10+ yd³</td><td>Multiple trucks</td><td>None</td><td>Schedule back-to-back pours; don't let first truck set</td></tr>
        </tbody>
      </table>
      <div class="cy-warn"><strong>Timing is critical with ready-mix:</strong> You have 90 minutes from batching to place and finish concrete before it starts setting. For large pours, have your entire crew and all tools staged before the truck arrives. Never add extra water to "loosen" concrete — it weakens the mix.</div>
    </section>

    <section class="cy-section" id="cost">
      <h2><?php echo $currentYear; ?> Ready-Mix Concrete Cost Guide</h2>
      <table class="cy-table">
        <thead><tr><th>Region</th><th>$/yd³ (3,000 PSI)</th><th>$/yd³ (4,000 PSI)</th><th>Delivery Fee</th></tr></thead>
        <tbody>
          <tr><td>Northeast</td><td>$175–$225</td><td>$195–$250</td><td>$150–$300</td></tr>
          <tr><td>West Coast</td><td>$165–$215</td><td>$185–$240</td><td>$150–$275</td></tr>
          <tr><td>Mountain West</td><td>$150–$190</td><td>$170–$215</td><td>$125–$250</td></tr>
          <tr><td>Midwest</td><td>$140–$175</td><td>$155–$195</td><td>$100–$225</td></tr>
          <tr><td>South</td><td>$130–$165</td><td>$145–$185</td><td>$100–$200</td></tr>
        </tbody>
      </table>
    </section>

    <section class="cy-section" id="faq">
      <h2>Yardage FAQ</h2>
      <div class="cy-faq-item open">
        <div class="cy-faq-q">How many yards of concrete for a 20×20 slab at 4 inches?</div>
        <div class="cy-faq-a">20 × 20 × (4/12) = 133.3 ft³ / 27 = 4.94 yd³ net. With 10% waste = <strong>5.43 yd³</strong>. This is under the typical 8 yd³ truck minimum, so expect a short-load fee of roughly $60–$135 above the base material cost.</div>
      </div>
      <div class="cy-faq-item">
        <div class="cy-faq-q">How many yards of concrete per 80 lb bag?</div>
        <div class="cy-faq-a">One 80 lb bag yields 0.60 ft³ = 0.0222 cubic yards. To find bags needed: divide your cubic yards by 0.0222. Or: multiply cubic yards by 45 to get 80 lb bag count (before waste factor).</div>
      </div>
      <div class="cy-faq-item">
        <div class="cy-faq-q">What is the minimum ready-mix concrete order?</div>
        <div class="cy-faq-a">Most US ready-mix suppliers have a minimum charge equivalent to a full truck — typically 8–10 cubic yards. If you need less, you pay a short-load surcharge of $15–$25 per yard for the difference. For orders under 3 yards, bags are usually more cost-effective once the short-load fee is factored in.</div>
      </div>
      <div class="cy-faq-item">
        <div class="cy-faq-q">How do I convert cubic feet to cubic yards of concrete?</div>
        <div class="cy-faq-a">Divide cubic feet by 27. There are 27 cubic feet in one cubic yard (3 ft × 3 ft × 3 ft = 27 ft³). Example: a 10×12 slab at 4 inches thick = 10 × 12 × 0.333 ft = 40 ft³ / 27 = <strong>1.48 yd³</strong>. Always add 5–10% for waste before placing your order.</div>
      </div>
      <div class="cy-faq-item">
        <div class="cy-faq-q">How long does a ready-mix truck take to unload?</div>
        <div class="cy-faq-a">Most ready-mix contracts allow <strong>60–90 minutes</strong> from when the truck arrives on site before overtime charges kick in. After that, expect $1–$3 per minute in wait time fees. Have your entire crew staged, tools ready, and forms completely set before the truck arrives — there is no way to pause a pour once concrete starts flowing.</div>
      </div>
      <div class="cy-faq-item">
        <div class="cy-faq-q">How much does a yard of concrete cost in <?php echo $currentYear; ?>?</div>
        <div class="cy-faq-a">Ready-mix concrete costs vary by region in <?php echo $currentYear; ?>: <strong>South $130–$165/yd³</strong>, <strong>Midwest $140–$175/yd³</strong>, <strong>Mountain West $150–$190/yd³</strong>, <strong>West Coast $165–$215/yd³</strong>, <strong>Northeast $175–$225/yd³</strong>. Delivery fees add $100–$300 per load depending on distance to the plant. High-strength mixes (4,000+ PSI) or specialty mixes (air-entrained, fiber, accelerated) cost $10–$30/yd³ more.</div>
      </div>
      <div class="cy-faq-item">
        <div class="cy-faq-q">What does a short-load fee mean for concrete?</div>
        <div class="cy-faq-a">A short-load fee is a surcharge when your order is below the ready-mix supplier's minimum — typically 8–10 yd³. The fee compensates the supplier for dispatching a full-size truck with a partial load. It usually runs <strong>$15–$25 per cubic yard</strong> of the shortfall. For example, ordering 5 yd³ when the minimum is 8 yd³ = a 3 yd³ shortfall × $20 = $60 short-load fee on top of your material cost. This calculator shows the estimated short-load fee in the results panel.</div>
      </div>
      <div class="cy-faq-item">
        <div class="cy-faq-q">Can I order concrete by the half yard?</div>
        <div class="cy-faq-a">Most ready-mix plants batch in 0.25 yd³ increments but charge the full truck minimum regardless. A few suppliers in larger markets offer "short load" service at a higher per-yard price for orders under 3 yd³. Trailer-mounted mini-mix services (available in some metro areas) can deliver as little as 1 yd³ at a premium — useful for tight-access sites or small repairs. Call your local ready-mix plant to ask about their minimum and any short-pour options.</div>
      </div>
    </section>

    <section class="cy-section" id="yardage-worked-example">
      <h2>Worked Examples: Concrete Yardage Calculations</h2>

      <h3>Example 1 — Rectangular Slab (Patio)</h3>
      <p>A 16×20 ft patio, 4 inches thick:</p>
      <ul>
        <li>Volume: 16 × 20 × (4 / 12) = 16 × 20 × 0.333 = <strong>106.7 ft³</strong></li>
        <li>Convert to yards: 106.7 / 27 = <strong>3.95 yd³</strong> net</li>
        <li>Add 10% waste: 3.95 × 1.10 = <strong>4.34 yd³ — order 4.5 yd³</strong></li>
        <li>Short-load gap: 8.0 − 4.5 = 3.5 yd³ short → fee ~$70</li>
        <li>Total material + short-load: 4.5 × $160 + $70 = <strong>~$790</strong></li>
      </ul>

      <h3>Example 2 — Round Column (Sonotube)</h3>
      <p>Four 12-inch diameter × 4-foot deep deck pier tubes:</p>
      <ul>
        <li>Volume per tube: π × (0.5 ft)² × 4 ft = 3.1416 × 0.25 × 4 = <strong>3.14 ft³</strong></li>
        <li>Total for 4 tubes: 3.14 × 4 = <strong>12.57 ft³</strong></li>
        <li>Convert to yards: 12.57 / 27 = <strong>0.47 yd³</strong> net</li>
        <li>Add 10% waste: <strong>0.51 yd³</strong></li>
        <li>80 lb bags needed: ⌈13.8 / 0.60⌉ = <strong>23 bags</strong></li>
      </ul>
      <p>At this volume, bags are far more practical than ready-mix. Even with a short-load fee, the minimum truck charge would be $1,300+. Bags cost roughly $240.</p>

      <h3>Example 3 — Continuous Footing</h3>
      <p>A 60-linear-foot garage footing, 18 inches wide × 10 inches deep:</p>
      <ul>
        <li>Width: 18 / 12 = 1.5 ft · Depth: 10 / 12 = 0.833 ft</li>
        <li>Volume: 60 × 1.5 × 0.833 = <strong>75 ft³ = 2.78 yd³</strong> net</li>
        <li>Add 10% waste: <strong>3.06 yd³ — order 3.25 yd³</strong></li>
        <li>Short-load gap: 8 − 3.25 = 4.75 yd³ short → fee ~$95</li>
        <li>Total: 3.25 × $160 + $95 = <strong>~$615</strong></li>
      </ul>
      <p>Check whether a local mini-mix service is available — for under 4 yd³, some areas offer trailer-mixed concrete at $200–$240/yd³ with no short-load fee, which would be competitive here.</p>

      <h3>Example 4 — Large Driveway Pour</h3>
      <p>A 12×40 ft driveway at 6 inches thick:</p>
      <ul>
        <li>Volume: 12 × 40 × (6 / 12) = 12 × 40 × 0.5 = <strong>240 ft³ = 8.89 yd³</strong> net</li>
        <li>Add 8% waste: 8.89 × 1.08 = <strong>9.6 yd³ — order 10 yd³</strong></li>
        <li>At 10 yd³, this is a <em>full truck load</em> — no short-load fee</li>
        <li>Material cost: 10 × $160 = <strong>$1,600</strong> + $150 delivery = <strong>~$1,750</strong></li>
      </ul>
      <p>Always specify <strong>4,000 PSI air-entrained</strong> concrete for driveways in freeze-thaw climates. The air entrainment (4–7% air voids) prevents surface scaling from de-icing salts and adds roughly $10–$15/yd³.</p>
    </section>

    <section class="cy-section" id="ordering-tip">
      <h2>How to Order Ready-Mix Concrete: A Checklist</h2>
      <p>Ordering concrete is not as simple as calling and saying "I need 5 yards." Ready-mix plants need specific information to batch the right mix. Use this checklist before calling:</p>
      <table class="cy-table">
        <thead><tr><th>Item to Specify</th><th>Typical Residential Choice</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td><strong>Volume (yd³)</strong></td><td>Your calculated amount + waste</td><td>Round up to nearest 0.25 yd³</td></tr>
          <tr><td><strong>PSI / Strength</strong></td><td>3,500–4,000 PSI</td><td>4,000+ for driveways; 3,500 for patios</td></tr>
          <tr><td><strong>Slump</strong></td><td>4–5 inches</td><td>Higher slump = more workable but weaker. Never exceed 6 inches</td></tr>
          <tr><td><strong>Air entrainment</strong></td><td>Yes (4–7%) in freeze-thaw climates</td><td>Required for driveways exposed to de-icing salts</td></tr>
          <tr><td><strong>Aggregate size</strong></td><td>¾-inch maximum</td><td>Smaller (⅜ in) for thin slabs under 3 inches</td></tr>
          <tr><td><strong>Fiber reinforcement</strong></td><td>Optional</td><td>Reduces plastic shrinkage cracks; adds ~$8/yd³</td></tr>
          <tr><td><strong>Delivery time</strong></td><td>As early as possible</td><td>Morning pours give more working time before afternoon heat</td></tr>
          <tr><td><strong>Truck access</strong></td><td>Confirm clearances</td><td>Chute reach is typically 16–18 ft from the truck; longer pumps available</td></tr>
        </tbody>
      </table>
      <div class="cy-info">💡 <strong>Pro tip — ask for the delivery ticket:</strong> Every ready-mix truck carries a batch ticket showing the actual mix design, water content, and batch time. Keep it. If the slab ever cracks or fails, the ticket is essential documentation for any warranty claim.</div>
    </section>
  </div>

  <aside class="cy-sidebar">
    <div class="cy-widget">
      <div class="cy-widget-head">
        <div class="cy-widget-title">Cubic Yards Quick Ref</div>
        <div class="cy-widget-sub">Common slab sizes at 4 inches</div>
      </div>
      <div class="cy-widget-rows">
        <div class="cy-widget-row"><div><div class="cy-wl">10×10 patio</div><div class="cy-ws">+10% waste</div></div><div><div class="cy-wv">1.36 yd³</div></div></div>
        <div class="cy-widget-row"><div><div class="cy-wl">12×16 patio</div><div class="cy-ws">+10% waste</div></div><div><div class="cy-wv">2.61 yd³</div></div></div>
        <div class="cy-widget-row" style="background:#f8fafc;"><div><div class="cy-wl">20×20 slab</div><div class="cy-ws">+10% waste</div></div><div><div class="cy-wv">5.43 yd³</div></div></div>
        <div class="cy-widget-row"><div><div class="cy-wl">20×30 driveway</div><div class="cy-ws">6 in, +10%</div></div><div><div class="cy-wv">12.22 yd³</div></div></div>
      </div>
      <div class="cy-widget-foot">
        <p>Always round up to the nearest 0.25 yd³ when ordering from a ready-mix plant.</p>
        <a href="<?php echo $baseUrl; ?>/construction/concrete-bag-calculator">Need bags instead? →</a>
      </div>
    </div>
    <div class="cy-quick-widget">
      <div class="cy-quick-head">🧱 Concrete Tools</div>
      <ul class="cy-quick-links">
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-calculator">🟦 Concrete Hub</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-slab-calculator">🟫 Slab Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-bag-calculator">🛍️ Bag Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-yardage-calculator" class="active">🚛 Yardage Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-footing-calculator">🏗️ Footing Calculator</a></li>
      </ul>
    </div>
  </aside>
</div>
</main>
<script>
document.addEventListener('DOMContentLoaded',function(){
  const shapeEl=document.getElementById('cy_shape');
  const sections=['cy-rect','cy-round','cy-footing'];
  const map={'rect':'cy-rect','round':'cy-round','footing':'cy-footing'};
  
  if (shapeEl) {
    shapeEl.addEventListener('change',function(){
      sections.forEach(s=>{
        const el=document.getElementById(s);
        if(el) el.style.display='none';
      });
      const target=document.getElementById(map[this.value]);
      if(target) target.style.display='';
      calc();
    });
  }

  function calc(){
    if(!shapeEl) return;
    const shape=shapeEl.value;
    const waste=parseFloat(document.getElementById('cy_waste')?.value)||10;
    const price=parseFloat(document.getElementById('cy_price')?.value)||160;
    let cf=0;
    if(shape==='rect'){
      const L=parseFloat(document.getElementById('cy_l')?.value)||0;
      const W=parseFloat(document.getElementById('cy_w')?.value)||0;
      const T=parseFloat(document.getElementById('cy_t')?.value)||0;
      const u=document.getElementById('cy_tu')?.value || 'in';
      cf=L*W*(u==='in'?T/12:T);
    } else if(shape==='round'){
      const d=parseFloat(document.getElementById('cy_rd')?.value)||0;
      const u=document.getElementById('cy_rdu')?.value || 'in';
      const h=parseFloat(document.getElementById('cy_rh')?.value)||0;
      const q=parseInt(document.getElementById('cy_rq')?.value)||1;
      const r=(u==='in'?d/12:d)/2;
      cf=Math.PI*r*r*h*q;
    } else {
      const L=parseFloat(document.getElementById('cy_fl')?.value)||0;
      const W=parseFloat(document.getElementById('cy_fw')?.value)||0;
      const D=parseFloat(document.getElementById('cy_fd')?.value)||0;
      cf=L*W*D;
    }
    if(cf<=0) return;
    const cfW=cf*(1+waste/100);
    const cyNet=cf/27;
    const cyW=cfW/27;
    const cost=cyW*price;
    const bags80=Math.ceil(cfW/0.60);
    const minTruck=8;
    const shortLoad=Math.max(0,minTruck-cyW);
    const shortFee=shortLoad*20;
    const delivFee=200;
    const total=cost+shortFee+delivFee;
    const fmtC=v=>'$'+Math.round(v).toLocaleString('en-US');
    const fmtN=(v,d=2)=>Number(v).toFixed(d);

    const setTxt=(id,txt)=>{
      const el=document.getElementById(id);
      if(el) el.textContent=txt;
    };

    setTxt('cy-yard', fmtN(cyW,2)+' yd³');
    setTxt('cy-yards', fmtN(cyW,2)+' yd³');
    setTxt('cy-cf', fmtN(cfW,1)+' ft³');
    setTxt('cy-cost', fmtC(cost));
    setTxt('cy-net', fmtN(cyNet,2)+' yd³');
    setTxt('cy-bags80', bags80.toLocaleString()+' bags');
    setTxt('cy-truck-compare', cyW>=minTruck?'At or above minimum':'~'+fmtN(shortLoad,1)+' yd³ under min');
    setTxt('cy-short-fee', shortLoad>0?fmtC(shortFee)+' est.':'$0 — full load');
    setTxt('cy-total', fmtC(total)+' est.');
    setTxt('cy-sub', fmtN(cyNet,2)+' yd³ net + '+waste+'% waste = '+fmtN(cyW,2)+' yd³');
  }

  document.querySelectorAll('.cy-field input,.cy-field select').forEach(el=>{
    el.addEventListener('input',calc);
    el.addEventListener('change',calc);
    el.addEventListener('keyup',calc);
  });
  const btn = document.getElementById('cy-btn');
  if(btn) btn.addEventListener('click',calc);
  calc();
  document.querySelectorAll('.cy-faq-q').forEach(q=>{
    q.addEventListener('click',function(){
      const i=this.closest('.cy-faq-item');
      if(!i) return;
      const w=i.classList.contains('open');
      document.querySelectorAll('.cy-faq-item').forEach(x=>x.classList.remove('open'));
      if(!w)i.classList.add('open');
    });
  });
});
</script>
<?php require_once '../includes/footer.php'; ?>
