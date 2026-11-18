<?php
$currentYear = date('Y');
$pageTitle       = "Concrete Bag Calculator ($currentYear) | Quikrete";
$metaDescription = "Free $currentYear concrete bag calculator. How many bags of concrete do you need? Enter cubic feet or slab dimensions for exact 40, 50, 60, 80, and 90 lb bag counts. Compares Quikrete, Sakrete, and store brands.";
$metaKeywords    = 'concrete bag calculator, bags of concrete calculator, quikrete concrete calculator, sakrete concrete calculator, how many bags of concrete, bag concrete calculator, 80 lb bag concrete calculator, concrete bags calculator';
$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    ['@type'=>'WebApplication','name'=>'Concrete Bag Calculator','url'=>'https://americacalculator.com/construction/concrete-bag-calculator','description'=>"Calculate exactly how many bags of concrete you need for any project.",'applicationCategory'=>'HomeAndGardenApplication','operatingSystem'=>'All','offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
    ['@type'=>'FAQPage','mainEntity'=>[
      ['@type'=>'Question','name'=>'How many 80 lb bags of Quikrete do I need for a 10×10 slab?','acceptedAnswer'=>['@type'=>'Answer','text'=>'A 10×10 slab at 4 inches thick = 33.3 ft³ + 10% waste = 36.7 ft³. At 0.60 ft³ per 80 lb bag: 62 bags. At current prices (~$10/bag), that\'s ~$620 in bags alone.']],
      ['@type'=>'Question','name'=>'How many bags of concrete for a fence post?','acceptedAnswer'=>['@type'=>'Answer','text'=>'A standard 10-inch diameter × 24-inch deep fence post hole = 1.09 ft³. Use two 80 lb bags per hole (1.20 ft³). For 4×4 posts with a 6-inch hole, one 50 lb bag per post is sufficient.']],
      ['@type'=>'Question','name'=>'How many bags of concrete in a cubic yard?','acceptedAnswer'=>['@type'=>'Answer','text'=>'1 cubic yard = 27 cubic feet. Bags needed per cubic yard: 90 × 40 lb bags, 72 × 50 lb bags, 60 × 60 lb bags, 45 × 80 lb bags, or 40 × 90 lb bags. Add 10% for waste.']],
      ['@type'=>'Question','name'=>'Is Quikrete the same as regular concrete?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Quikrete contains Portland cement, sand, and aggregate — the same ingredients as ready-mix. Quikrete 5000 achieves 5,000 PSI, stronger than most standard residential ready-mix orders (3,000–3,500 PSI).']],
      ['@type'=>'Question','name'=>'How many bags of concrete do I need for a 12×12 slab?','acceptedAnswer'=>['@type'=>'Answer','text'=>'A 12×12 slab at 4 inches thick = 48 ft³ net. With 10% waste = 52.8 ft³. Using 80 lb bags (0.60 ft³): 88 bags. Using 60 lb bags (0.45 ft³): 118 bags. Consider ready-mix for this volume — a 1.95 yd³ order may be cheaper.']],
      ['@type'=>'Question','name'=>'How much water do I add to a bag of concrete?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Quikrete 80 lb bags require about 3 quarts (0.75 gallons) of water. Add water gradually and mix until the concrete reaches a uniform, workable consistency without being soupy. Excess water weakens the final strength.']],
      ['@type'=>'Question','name'=>'How long does it take for bagged concrete to dry?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Bagged concrete reaches initial set in 2–4 hours and can bear light loads after 24 hours. Full curing takes 28 days. In cold weather (below 50°F), curing slows significantly — use curing blankets and avoid pours below 40°F.']],
      ['@type'=>'Question','name'=>'Should I use 60 lb or 80 lb bags of concrete?','acceptedAnswer'=>['@type'=>'Answer','text'=>'80 lb bags offer the best value per cubic foot ($10–$12 vs $8–$9 for 60 lb), but are heavier to lift. 60 lb bags are easier for solo workers or older adults. For most DIY projects, 80 lb bags are the practical choice when you have help.']],
    ]],
    ['@type'=>'BreadcrumbList','itemListElement'=>[
      ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
      ['@type'=>'ListItem','position'=>2,'name'=>'Construction','item'=>'https://americacalculator.com/construction/'],
      ['@type'=>'ListItem','position'=>3,'name'=>'Concrete Calculator','item'=>'https://americacalculator.com/construction/concrete-calculator'],
      ['@type'=>'ListItem','position'=>4,'name'=>'Concrete Bag Calculator','item'=>'https://americacalculator.com/construction/concrete-bag-calculator'],
    ]],
  ],
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f5f7fa;}
.cb-wrap{max-width:1320px;margin:0 auto;padding:2rem 1.5rem 4rem;display:grid;grid-template-columns:220px 1fr 260px;gap:2rem;align-items:start;}
.cb-toc{position:sticky;top:6rem;background:#fff;border-radius:12px;border:1px solid #e8edf5;box-shadow:0 2px 12px rgba(0,0,0,.04);overflow:hidden;}
.cb-toc-head{background:linear-gradient(135deg,#64748b,#475569);color:#fff;padding:1rem 1.25rem;font-weight:700;font-size:.85rem;text-transform:uppercase;letter-spacing:.8px;}
.cb-toc-list{list-style:none;padding:.75rem 0;margin:0;}
.cb-toc-list li a{display:block;padding:.5rem 1.25rem;font-size:.84rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .18s;}
.cb-toc-list li a:hover,.cb-toc-list li a.cb-active{color:#475569;background:#f1f5f9;border-left-color:#64748b;}
.cb-toc-div{height:1px;background:#f1f5f9;margin:.5rem 0;}
.cb-toc-rlbl{padding:.5rem 1.25rem;font-size:.78rem;font-weight:700;color:#94a3b8;text-transform:uppercase;}
.cb-toc-rlist{list-style:none;padding:0;margin:0 0 .75rem;}
.cb-toc-rlist li a{display:block;padding:.4rem 1.25rem;font-size:.82rem;color:#64748b;text-decoration:none;}
.cb-toc-rlist li a:hover{color:#475569;}
.cb-main{min-width:0;}
.cb-hero{margin-bottom:2rem;}
.cb-hero h1{font-size:2.1rem;color:#0f172a;margin:0 0 .6rem;line-height:1.25;}
.cb-desc{font-size:1.05rem;color:#64748b;line-height:1.65;margin:0 0 .75rem;border-left:4px solid #94a3b8;padding-left:1rem;}
.cb-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}
.cb-bc a{color:#64748b;text-decoration:none;}
.cb-card{background:#fff;border-radius:14px;box-shadow:0 4px 24px rgba(0,0,0,.05);border:1px solid #eef2f7;margin-bottom:2.5rem;overflow:hidden;}
.cb-tabs{display:flex;border-bottom:1px solid #e2e8f0;background:#f8fafc;}
.cb-tab{flex:1;text-align:center;padding:.9rem .5rem;font-size:.9rem;font-weight:600;color:#64748b;cursor:pointer;border-bottom:3px solid transparent;transition:all .2s;background:none;border-top:none;border-left:none;border-right:none;}
.cb-tab:hover{color:#1e3a8a;background:#f1f5f9;}
.cb-tab.active{color:#2563eb;border-bottom-color:#2563eb;background:#fff;font-weight:700;}
.cb-inner{display:grid;grid-template-columns:1fr 1fr;}
.cb-form{padding:2rem;border-right:1px solid #f0f4fa;}
.cb-res{padding:2rem;background:linear-gradient(160deg,#f8fafc,#f1f5f9);}
.cb-panel{display:none;}
.cb-panel.active{display:block;}
.cb-field{margin-bottom:1.2rem;}
.cb-field label{display:block;font-weight:600;font-size:.9rem;color:#1e293b;margin-bottom:.4rem;}
.cb-field input,.cb-field select{width:100%;padding:12px 15px;border:1.5px solid #d1dae8;border-radius:8px;font-size:1rem;color:#0f172a;outline:none;transition:border-color .2s;box-sizing:border-box;background:#fff;}
.cb-field input:focus,.cb-field select:focus{border-color:#2563eb;box-shadow:0 0 0 3px rgba(37,99,235,.15);}
.cb-field .cb-hint{font-size:.76rem;color:#94a3b8;margin-top:.3rem;}
.cb-row2{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.cb-btn{width:100%;background:linear-gradient(135deg,#1e3a8a,#2563eb);color:#fff;padding:14px;border:none;border-radius:9px;font-size:1rem;font-weight:700;cursor:pointer;margin-top:.75rem;transition:opacity .2s,transform .15s;box-shadow:0 4px 12px rgba(37,99,235,.2);}
.cb-btn:hover{opacity:.95;transform:translateY(-1px);}
.cb-res-head{font-size:1.15rem;font-weight:700;color:#0f172a;margin:0 0 .25rem;}
.cb-res-sub{font-size:.84rem;color:#64748b;margin:0 0 1.25rem;}
.cb-bag-grid{display:grid;grid-template-columns:1fr 1fr;gap:.75rem;margin-bottom:1rem;}
.cb-bag-card{background:#fff;border:1.5px solid #e8edf5;border-radius:10px;padding:1rem .75rem;text-align:center;}
.cb-bag-card.best{border-color:#2563eb;background:#eff6ff;}
.cb-bag-count{display:block;font-size:1.8rem;font-weight:900;color:#1e3a8a;line-height:1;margin-bottom:.15rem;}
.cb-bag-lbl{font-size:.75rem;color:#64748b;font-weight:600;}
.cb-bag-badge{display:inline-block;font-size:.65rem;font-weight:700;background:#2563eb;color:#fff;padding:.18rem .55rem;border-radius:10px;margin-bottom:.3rem;}
.cb-brand-table{width:100%;border-collapse:collapse;border-radius:10px;overflow:hidden;border:1px solid #e8edf5;margin-top:1rem;}
.cb-brand-table th{background:#334155;color:#fff;padding:10px 14px;text-align:left;font-size:.85rem;font-weight:600;}
.cb-brand-table td{padding:9px 14px;border-bottom:1px solid #f1f5f9;font-size:.85rem;color:#334155;}
.cb-brand-table tr:last-child td{border-bottom:none;}
.cb-brand-table tr:nth-child(even) td{background:#f8fafc;}
.cb-section{background:#fff;border-radius:14px;border:1px solid #eef2f7;box-shadow:0 2px 12px rgba(0,0,0,.03);padding:2.25rem;margin-bottom:2rem;scroll-margin-top:6rem;}
.cb-section h2{font-size:1.65rem;color:#0f172a;margin:0 0 1.25rem;padding-bottom:.75rem;border-bottom:2px solid #f0f4fa;}
.cb-section h3{font-size:1.18rem;color:#1e293b;margin:1.75rem 0 .7rem;}
.cb-section p{color:#475569;line-height:1.75;margin-bottom:1.25rem;}
.cb-section ul{color:#475569;line-height:1.75;padding-left:1.5rem;margin-bottom:1.25rem;}
.cb-section li{margin-bottom:.5rem;}
.cb-section strong{color:#1e293b;}
.cb-section a{color:#2563eb;font-weight:600;}
.cb-table{width:100%;border-collapse:collapse;border-radius:10px;overflow:hidden;border:1px solid #e8edf5;margin-bottom:1.5rem;}
.cb-table th{background:#334155;color:#fff;padding:13px 16px;text-align:left;font-size:.88rem;font-weight:600;}
.cb-table td{padding:11px 16px;border-bottom:1px solid #f1f5f9;font-size:.9rem;color:#334155;}
.cb-table tr:last-child td{border-bottom:none;}
.cb-table tr:nth-child(even) td{background:#f8fafc;}
.cb-info{background:#eff6ff;border-left:4px solid #2563eb;border-radius:0 8px 8px 0;padding:1rem 1.25rem;margin:1.25rem 0;font-size:.95rem;color:#1e3a8a;line-height:1.6;}
.cb-faq-item{border-bottom:1px solid #f0f4fa;padding-bottom:1.25rem;margin-bottom:1.25rem;}
.cb-faq-item:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0;}
.cb-faq-q{font-size:1.02rem;font-weight:700;color:#0f172a;margin-bottom:.6rem;cursor:pointer;display:flex;justify-content:space-between;align-items:flex-start;gap:1rem;}
.cb-faq-q::after{content:'+';font-size:1.3rem;color:#64748b;flex-shrink:0;}
.cb-faq-item.open .cb-faq-q::after{content:'−';}
.cb-faq-a{color:#475569;line-height:1.7;font-size:.97rem;display:none;}
.cb-faq-item.open .cb-faq-a{display:block;}
.cb-sidebar{position:sticky;top:6rem;display:flex;flex-direction:column;gap:1.25rem;}
.cb-widget{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 10px rgba(0,0,0,.04);overflow:hidden;}
.cb-widget-head{background:linear-gradient(135deg,#1e3a8a,#2563eb);color:#fff;padding:1rem 1.25rem;}
.cb-widget-title{font-size:1rem;font-weight:700;}
.cb-widget-sub{font-size:.8rem;color:rgba(255,255,255,.85);}
.cb-widget-rows{padding:.4rem 0;}
.cb-widget-row{display:flex;justify-content:space-between;align-items:center;padding:.6rem 1.25rem;border-bottom:1px solid #f8fafc;}
.cb-widget-row:last-child{border-bottom:none;}
.cb-wl{font-size:.82rem;font-weight:600;color:#334155;}
.cb-ws{font-size:.72rem;color:#94a3b8;}
.cb-wv{font-size:.95rem;font-weight:800;color:#1e3a8a;}
.cb-widget-foot{padding:.85rem 1.25rem;border-top:1px solid #f0f4fa;background:#f8fafc;}
.cb-widget-foot p{font-size:.75rem;color:#64748b;margin:0 0 .5rem;line-height:1.3;}
.cb-widget-foot a{font-size:.83rem;font-weight:700;color:#2563eb;text-decoration:none;}
.cb-quick-widget{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 10px rgba(0,0,0,.04);overflow:hidden;}
.cb-quick-head{padding:.85rem 1.15rem;background:#f8fafc;border-bottom:1px solid #edf2f7;font-size:.82rem;font-weight:700;color:#334155;text-transform:uppercase;letter-spacing:.5px;display:flex;align-items:center;gap:.5rem;}
.cb-quick-links{list-style:none;padding:.4rem 0;margin:0;}
.cb-quick-links li{margin:0;padding:0;}
.cb-quick-links li a{display:flex;align-items:center;gap:.6rem;padding:.65rem 1.15rem;font-size:.86rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .18s;font-weight:500;}
.cb-quick-links li a:hover{color:#1e293b;background:#f8fafc;border-left-color:#3b82f6;padding-left:1.35rem;}
.cb-quick-links li a.active{color:#1d4ed8;background:#eff6ff;border-left-color:#2563eb;font-weight:700;}
@media(max-width:1024px){.cb-wrap{grid-template-columns:1fr;}.cb-toc,.cb-sidebar{position:static;}.cb-sidebar{display:grid;grid-template-columns:1fr 1fr;}}
@media(max-width:768px){.cb-wrap{padding:1rem 1rem 3rem;}.cb-inner{grid-template-columns:1fr;}.cb-form{border-right:none;border-bottom:1px solid #f0f4fa;}.cb-sidebar{grid-template-columns:1fr;}.cb-row2{grid-template-columns:1fr;}.cb-bag-grid{grid-template-columns:1fr 1fr;}}
</style>

<main id="main-content">
<div class="cb-wrap">
  <aside class="cb-toc">
    <div class="cb-toc-head">📋 On This Page</div>
    <ul class="cb-toc-list">
      <li><a href="#calculator" class="cb-active">Bag Calculator</a></li>
      <li><a href="#yield-table">Bag Yield Table</a></li>
      <li><a href="#brand-compare">Brand Comparison</a></li>
      <li><a href="#bags-vs-readymix">Bags vs. Ready-Mix</a></li>
      <li><a href="#faq">FAQ</a></li>
    </ul>
    <div class="cb-toc-div"></div>
    <div class="cb-toc-rlbl">More Concrete Tools</div>
    <ul class="cb-toc-rlist">
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-calculator">Main Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-slab-calculator">Slab Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-yardage-calculator">Yardage Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-footing-calculator">Footing Calculator</a></li>
    </ul>
  </aside>

  <div class="cb-main">
    <div class="cb-hero">
      <div class="cb-bc"><a href="<?php echo $baseUrl; ?>/index.php">Home</a> › <a href="<?php echo $baseUrl; ?>/construction/">Construction</a> › <a href="<?php echo $baseUrl; ?>/construction/concrete-calculator">Concrete Calculator</a> › Bag Calculator</div>
      <h1>Concrete Bag Calculator (<?php echo $currentYear; ?>) – Quikrete, Sakrete &amp; All Sizes</h1>
      <p class="cb-desc">Find exactly how many bags of concrete you need — 40, 50, 60, 80, and 90 lb — for slabs, post holes, or any custom volume. Includes Quikrete, Sakrete, and store-brand comparisons.</p>
    </div>

    <div class="cb-card" id="calculator">
      <div class="cb-tabs">
        <button class="cb-tab active" data-panel="cb-slab">📐 By Slab Size</button>
        <button class="cb-tab" data-panel="cb-vol">📦 By Volume</button>
        <button class="cb-tab" data-panel="cb-post">🪵 Post Holes</button>
      </div>
      <div class="cb-inner">
        <div class="cb-form">
          <!-- By Slab -->
          <div id="cb-slab" class="cb-panel active">
            <div class="cb-row2">
              <div class="cb-field"><label for="bs_l">Length (ft)</label><input type="number" id="bs_l" value="10" min="0.1" step="0.1"></div>
              <div class="cb-field"><label for="bs_w">Width (ft)</label><input type="number" id="bs_w" value="10" min="0.1" step="0.1"></div>
            </div>
            <div class="cb-row2">
              <div class="cb-field"><label for="bs_t">Thickness</label><input type="number" id="bs_t" value="4" min="1" step="0.5"></div>
              <div class="cb-field"><label for="bs_u">Unit</label><select id="bs_u"><option value="in" selected>Inches</option><option value="ft">Feet</option></select></div>
            </div>
          </div>
          <!-- By Volume -->
          <div id="cb-vol" class="cb-panel">
            <div class="cb-row2">
              <div class="cb-field"><label for="bv_val">Volume</label><input type="number" id="bv_val" value="30" min="0.1" step="0.1"></div>
              <div class="cb-field"><label for="bv_u">Unit</label>
                <select id="bv_u">
                  <option value="cf" selected>Cubic Feet</option>
                  <option value="cy">Cubic Yards</option>
                </select>
              </div>
            </div>
          </div>
          <!-- Post Holes -->
          <div id="cb-post" class="cb-panel">
            <div class="cb-row2">
              <div class="cb-field"><label for="bp_d">Hole Diameter (in)</label><input type="number" id="bp_d" value="10" min="2" step="1"></div>
              <div class="cb-field"><label for="bp_h">Hole Depth (in)</label><input type="number" id="bp_h" value="24" min="4" step="1"></div>
            </div>
            <div class="cb-field"><label for="bp_q">Number of Holes</label><input type="number" id="bp_q" value="4" min="1" step="1"></div>
          </div>

          <div style="border-top:1px dashed #e2e8f0;margin-top:1.25rem;padding-top:1.25rem;">
            <div class="cb-field"><label for="cb_waste">Waste Factor (%)</label>
              <input type="number" id="cb_waste" value="10" min="0" max="30" step="1">
              <div class="cb-hint">Always add 5–10% — concrete is unforgiving if you run short mid-pour</div>
            </div>
          </div>
          <button class="cb-btn" id="cb-btn">⚡ Calculate Bags</button>
        </div>

        <div class="cb-res">
          <h3 class="cb-res-head">Bags Needed</h3>
          <p class="cb-res-sub" id="cb-sub">Live calculation active</p>
          <div class="cb-bag-grid">
            <div class="cb-bag-card">
              <span class="cb-bag-count" id="b40">—</span>
              <span class="cb-bag-lbl">40 lb bags<br>(0.30 ft³ each)</span>
            </div>
            <div class="cb-bag-card">
              <span class="cb-bag-count" id="b50">—</span>
              <span class="cb-bag-lbl">50 lb bags<br>(0.375 ft³ each)</span>
            </div>
            <div class="cb-bag-card best">
              <div class="cb-bag-badge">Most Common</div>
              <span class="cb-bag-count" id="b60">—</span>
              <span class="cb-bag-lbl">60 lb bags<br>(0.45 ft³ each)</span>
            </div>
            <div class="cb-bag-card best">
              <div class="cb-bag-badge">Best Value</div>
              <span class="cb-bag-count" id="b80">—</span>
              <span class="cb-bag-lbl">80 lb bags<br>(0.60 ft³ each)</span>
            </div>
            <div class="cb-bag-card" style="grid-column:span 2;">
              <span class="cb-bag-count" id="b90">—</span>
              <span class="cb-bag-lbl">90 lb bags (0.675 ft³ each) — professional/contractor packs</span>
            </div>
          </div>

          <table class="cb-brand-table">
            <thead><tr><th>Brand</th><th>Bag Size</th><th>Bags Needed</th><th>Est. Cost</th></tr></thead>
            <tbody>
              <tr><td>Quikrete 5000</td><td>80 lb</td><td id="br-q80">—</td><td id="br-q80c">—</td></tr>
              <tr><td>Quikrete General</td><td>60 lb</td><td id="br-q60">—</td><td id="br-q60c">—</td></tr>
              <tr><td>Sakrete 5000+</td><td>80 lb</td><td id="br-s80">—</td><td id="br-s80c">—</td></tr>
              <tr><td>Store Brand</td><td>60 lb</td><td id="br-g60">—</td><td id="br-g60c">—</td></tr>
            </tbody>
          </table>
          <p style="font-size:.74rem;color:#64748b;">*Prices based on <?php echo $currentYear; ?> Home Depot/Lowe's averages. Varies by region.</p>
        </div>
      </div>
    </div>

    <section class="cb-section" id="yield-table">
      <h2>Concrete Bag Yield Reference Table</h2>
      <p>Each bag size yields a different volume. Use this table to quickly estimate bag counts without a calculator:</p>
      <table class="cb-table">
        <thead><tr><th>Bag Size</th><th>Yield (ft³)</th><th>Bags per yd³</th><th>Approx. Price</th><th>Best For</th></tr></thead>
        <tbody>
          <tr><td><strong>40 lb</strong></td><td>0.30 ft³</td><td>90 bags</td><td>$5.50–$7.00</td><td>Small repairs, post holes</td></tr>
          <tr><td><strong>50 lb</strong></td><td>0.375 ft³</td><td>72 bags</td><td>$6.50–$8.50</td><td>Post holes, steps, repairs</td></tr>
          <tr><td><strong>60 lb</strong></td><td>0.45 ft³</td><td>60 bags</td><td>$7.00–$9.50</td><td>Small slabs, patios under 0.5 yd³</td></tr>
          <tr><td><strong>80 lb</strong></td><td>0.60 ft³</td><td>45 bags</td><td>$9.00–$12.00</td><td>Best value — slabs up to 1 yd³</td></tr>
          <tr><td><strong>90 lb</strong></td><td>0.675 ft³</td><td>40 bags</td><td>$10.00–$13.50</td><td>Contractor use — fewer trips to mixer</td></tr>
        </tbody>
      </table>
      <div class="cb-info">
        💡 <strong>Rule of thumb:</strong> One 80 lb bag covers about 0.022 cubic yards. Divide your cubic yard volume by 0.022 to get the number of 80 lb bags needed (before waste factor).
      </div>
    </section>

    <section class="cb-section" id="brand-compare">
      <h2>Quikrete vs. Sakrete vs. Store Brand — <?php echo $currentYear; ?></h2>
      <table class="cb-table">
        <thead><tr><th>Brand</th><th>Popular Product</th><th>PSI</th><th>Set Time</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td><strong>Quikrete</strong></td><td>5000 Concrete Mix</td><td>5,000 PSI</td><td>24–72 hrs</td><td>Most widely available in US. High strength — great for structural work.</td></tr>
          <tr><td><strong>Quikrete</strong></td><td>Fast-Setting Concrete</td><td>4,000 PSI</td><td>20–40 min</td><td>Pour dry into hole, add water on top. Ideal for fence posts — no mixing required.</td></tr>
          <tr><td><strong>Sakrete</strong></td><td>5000+ Concrete Mix</td><td>5,000 PSI</td><td>24–72 hrs</td><td>Similar to Quikrete 5000. Available at Home Depot and Lowe's.</td></tr>
          <tr><td><strong>Sakrete</strong></td><td>Maximizer</td><td>4,000 PSI</td><td>24–48 hrs</td><td>Larger yield per bag — approximately 20% more volume than standard 80 lb bags.</td></tr>
          <tr><td><strong>Store Brand</strong></td><td>Generic Concrete Mix</td><td>3,000–4,000 PSI</td><td>24–72 hrs</td><td>Usually 10–20% cheaper. Fine for non-structural work. Check the PSI label.</td></tr>
        </tbody>
      </table>
    </section>

    <section class="cb-section" id="bags-vs-readymix">
      <h2>When to Use Bags vs. Ready-Mix</h2>
      <p>For most projects under 0.75 cubic yards (about 20 cubic feet), bags are practical. Above that, ready-mix is cheaper and produces more consistent results.</p>
      <ul>
        <li><strong>Use bags when:</strong> project is under 0.75 yd³, no truck access, working at your own pace, or for fence posts and repairs.</li>
        <li><strong>Use ready-mix when:</strong> project exceeds 1 yd³, you need consistent high-strength mix, or labor cost of mixing bags would exceed delivery fee.</li>
        <li><strong>Cost comparison:</strong> 80 lb bags cost ~$210–$280/yd³. Ready-mix costs $140–$225/yd³. For a 3 yd³ slab, bags cost ~$650–$840 vs. ready-mix at ~$420–$675 — plus you save hours of mixing labor.</li>
      </ul>
    </section>

    <section class="cb-section" id="mixing-tip">
      <h2>Mixing Bagged Concrete: Step-by-Step</h2>
      <p>Getting the water-to-concrete ratio right is the most important step in working with bagged concrete. Too much water produces a weak, cracked slab; too little makes the mix hard to work and can cause honeycombing.</p>
      <h3>What You Need</h3>
      <ul>
        <li>Wheelbarrow or plastic mortar tub (for small batches) — or a rented electric mixer (for 6+ bags)</li>
        <li>Garden hoe or mixing paddle on a drill</li>
        <li>Measuring container (a 1-gallon jug works well)</li>
        <li>Safety glasses and gloves — Portland cement is caustic</li>
      </ul>
      <h3>Mixing Procedure</h3>
      <ol>
        <li>Add about 2/3 of the required water to the mixing container first.</li>
        <li>Pour in the dry concrete mix while mixing continuously.</li>
        <li>Add remaining water gradually until you reach a thick, oatmeal-like consistency.</li>
        <li>Mix for 3–5 minutes until uniform — no dry pockets, no standing water.</li>
        <li>Use within 30–45 minutes. Do not add more water after this window.</li>
      </ol>
      <div class="cb-info">💡 <strong>Renting a mixer pays off fast:</strong> A drum mixer rents for $40–$80/day and can handle 3 bags at a time. For any project over 20 bags, a mixer saves 2–3 hours of labor and produces more consistent results than hand-mixing in a wheelbarrow.</div>

      <h3>Common Mistakes to Avoid</h3>
      <ul>
        <li><strong>Adding too much water</strong> — weakens the concrete by up to 30%. Stick to the label's recommended ratio.</li>
        <li><strong>Mixing too small a batch</strong> — the last batch in a project often dries at a different rate, creating a visible color or texture seam.</li>
        <li><strong>Pouring in cold weather</strong> — concrete below 50°F cures far slower. Below 40°F, it may not cure properly at all without additives or heating.</li>
        <li><strong>Skipping the waste factor</strong> — always order 5–10% extra. Running out mid-pour on a structural project is expensive to fix.</li>
        <li><strong>Not curing properly</strong> — cover fresh concrete with plastic sheeting or burlap for 3–7 days to retain moisture during curing. Dry concrete cracks.</li>
      </ul>

      <h3>Worked Example: How Many Bags for a 12×16 Patio?</h3>
      <p>Let's walk through a complete calculation for a 12×16 ft patio slab at 4-inch thickness:</p>
      <ul>
        <li>Volume (net): 12 × 16 × (4 / 12) = 12 × 16 × 0.333 = <strong>63.9 ft³</strong></li>
        <li>Add 10% waste: 63.9 × 1.10 = <strong>70.3 ft³</strong></li>
        <li>Convert to cubic yards: 70.3 / 27 = <strong>2.6 yd³</strong></li>
        <li>80 lb bags needed: 70.3 / 0.60 = <strong>118 bags</strong></li>
        <li>Estimated bag cost: 118 × $10.50 = <strong>~$1,239</strong></li>
        <li>Ready-mix comparison: 2.6 yd³ × $160 + $100 short-load fee = <strong>~$516</strong></li>
      </ul>
      <p>For this size project, ready-mix concrete costs roughly half the price of bags and eliminates 3–4 hours of mixing labor. Bags are only competitive for projects under 0.75 yd³.</p>
    </section>

    <section class="cb-section" id="faq">
      <h2>Concrete Bag FAQ</h2>
      <div class="cb-faq-item open">
        <div class="cb-faq-q">How many 80 lb bags of Quikrete do I need for a 10×10 slab?</div>
        <div class="cb-faq-a">A 10×10 slab at 4 inches thick = 33.3 ft³ + 10% waste = 36.7 ft³. At 0.60 ft³ per 80 lb bag: <strong>62 bags</strong>. At current prices (~$10/bag), that's ~$620 in bags alone. A ready-mix truck delivery of 1.36 yd³ would cost ~$220–$300 for material — plus a short-load fee. For a project this size, bags vs. ready-mix is close; ready-mix wins on labor.</div>
      </div>
      <div class="cb-faq-item">
        <div class="cb-faq-q">How many bags of concrete for a fence post?</div>
        <div class="cb-faq-a">A standard 10-inch diameter × 24-inch deep fence post hole = 1.09 ft³. One 80 lb bag (0.60 ft³) is not quite enough — use <strong>two 80 lb bags</strong> per hole, or one 60 lb + one 40 lb bag. For 4×4 posts, a 6-inch diameter hole with one 50 lb bag per post is sufficient. Quikrete Fast-Setting Concrete is the easiest option — pour dry mix around the post and add water directly into the hole, no mixing required.</div>
      </div>
      <div class="cb-faq-item">
        <div class="cb-faq-q">How many bags of concrete in a yard?</div>
        <div class="cb-faq-a">1 cubic yard = 27 cubic feet. Bags needed per cubic yard: <strong>90 × 40 lb bags</strong>, <strong>72 × 50 lb bags</strong>, <strong>60 × 60 lb bags</strong>, <strong>45 × 80 lb bags</strong>, or <strong>40 × 90 lb bags</strong>. Add 10% for waste, so multiply each number by 1.10 for your actual order quantity.</div>
      </div>
      <div class="cb-faq-item">
        <div class="cb-faq-q">Is Quikrete the same as regular concrete?</div>
        <div class="cb-faq-a">Quikrete is a pre-mixed bagged concrete that contains Portland cement, sand, and aggregate — the same basic ingredients as ready-mix concrete. The difference is that bagged products are batched in a factory and dried; you add water on site. Quikrete 5000 achieves 5,000 PSI — actually stronger than most standard ready-mix residential orders (3,000–3,500 PSI). The trade-off is cost and mixing labor at scale.</div>
      </div>
      <div class="cb-faq-item">
        <div class="cb-faq-q">How many bags of concrete for a 12×12 slab?</div>
        <div class="cb-faq-a">A 12×12 slab at 4 inches thick = 48 ft³ net. With 10% waste = 52.8 ft³. Using 80 lb bags (0.60 ft³ each): <strong>88 bags</strong>. Using 60 lb bags (0.45 ft³ each): <strong>118 bags</strong>. At 1.95 yd³ total, this is a borderline case — request a short-load ready-mix quote to compare. If the short-load fee pushes ready-mix above $900, bags may still win.</div>
      </div>
      <div class="cb-faq-item">
        <div class="cb-faq-q">How much water do I add to a bag of concrete?</div>
        <div class="cb-faq-a">An 80 lb bag of Quikrete typically requires about <strong>3 quarts (0.75 gallons)</strong> of clean water. Add water slowly while mixing — don't dump it all at once. The goal is a stiff, workable mix that holds its shape when squeezed but isn't dry or crumbly. Over-watering is the most common DIY mistake and can reduce final strength by 20–30%.</div>
      </div>
      <div class="cb-faq-item">
        <div class="cb-faq-q">How long does bagged concrete take to dry?</div>
        <div class="cb-faq-a">Bagged concrete reaches initial set in 2–4 hours and is typically walkable after 24 hours. It reaches about 70% design strength at 7 days and full design strength (100%) at 28 days. In cold weather (below 50°F), curing slows significantly — use insulated curing blankets and never pour below 40°F without cold-weather additives. Keep newly poured concrete moist for at least 3–7 days to prevent surface cracking.</div>
      </div>
      <div class="cb-faq-item">
        <div class="cb-faq-q">Should I use 60 lb or 80 lb bags of concrete?</div>
        <div class="cb-faq-a">For most DIY projects, <strong>80 lb bags offer better value</strong> — roughly $10–$12 per bag at ~$0.017/cubic inch vs. $8–$9 for 60 lb bags at ~$0.020/cubic inch. However, 80 lb bags are harder to lift and maneuver, especially in a mixer. If you're working alone or have mobility limitations, 60 lb bags are more manageable. For projects over 1 yd³, consider ready-mix regardless of bag size to save mixing labor.</div>
      </div>
    </section>
  </div>

  <aside class="cb-sidebar">
    <div class="cb-widget">
      <div class="cb-widget-head">
        <div class="cb-widget-title">Bags per Cubic Yard</div>
        <div class="cb-widget-sub">Quick reference (no waste)</div>
      </div>
      <div class="cb-widget-rows">
        <div class="cb-widget-row"><div><div class="cb-wl">40 lb bags</div><div class="cb-ws">0.30 ft³ each</div></div><div><div class="cb-wv">90 bags</div></div></div>
        <div class="cb-widget-row"><div><div class="cb-wl">60 lb bags</div><div class="cb-ws">0.45 ft³ each</div></div><div><div class="cb-wv">60 bags</div></div></div>
        <div class="cb-widget-row" style="background:#f8fafc;"><div><div class="cb-wl">80 lb bags</div><div class="cb-ws">0.60 ft³ each</div></div><div><div class="cb-wv">45 bags</div></div></div>
        <div class="cb-widget-row"><div><div class="cb-wl">90 lb bags</div><div class="cb-ws">0.675 ft³ each</div></div><div><div class="cb-wv">40 bags</div></div></div>
      </div>
      <div class="cb-widget-foot">
        <p>Add 10% waste to all quantities. For projects over 1 yd³, order ready-mix instead.</p>
        <a href="<?php echo $baseUrl; ?>/construction/concrete-yardage-calculator">Yardage Calculator →</a>
      </div>
    </div>
    <div class="cb-quick-widget">
      <div class="cb-quick-head">🧱 Concrete Tools</div>
      <ul class="cb-quick-links">
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-calculator">🟦 Concrete Hub</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-slab-calculator">🟫 Slab Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-bag-calculator" class="active">🛍️ Bag Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-yardage-calculator">🚛 Yardage Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-footing-calculator">🏗️ Footing Calculator</a></li>
      </ul>
    </div>
  </aside>
</div>
</main>
<script>
document.addEventListener('DOMContentLoaded', function(){
  const tabs=document.querySelectorAll('button.cb-tab');
  const panels=document.querySelectorAll('.cb-panel');
  const btn=document.getElementById('cb-btn');
  let mode='cb-slab';
  
  tabs.forEach(t=>t.addEventListener('click',()=>{
    tabs.forEach(x=>x.classList.remove('active'));
    panels.forEach(p=>p.classList.remove('active'));
    t.classList.add('active');
    mode=t.getAttribute('data-panel');
    const target=document.getElementById(mode);
    if(target) target.classList.add('active');
    calc();
  }));

  function calc(){
    const waste=parseFloat(document.getElementById('cb_waste')?.value)||10;
    let cf=0;
    if(mode==='cb-slab'){
      const L=parseFloat(document.getElementById('bs_l')?.value)||0;
      const W=parseFloat(document.getElementById('bs_w')?.value)||0;
      const T=parseFloat(document.getElementById('bs_t')?.value)||0;
      const u=document.getElementById('bs_u')?.value || 'in';
      cf=L*W*(u==='in'?T/12:T);
    } else if(mode==='cb-vol'){
      const v=parseFloat(document.getElementById('bv_val')?.value)||0;
      const u=document.getElementById('bv_u')?.value || 'cf';
      cf=u==='cy'?v*27:v;
    } else {
      const d=parseFloat(document.getElementById('bp_d')?.value)||0;
      const h=parseFloat(document.getElementById('bp_h')?.value)||0;
      const q=parseInt(document.getElementById('bp_q')?.value)||1;
      const r=(d/12)/2;
      cf=Math.PI*r*r*(h/12)*q;
    }
    if(cf<=0) return;
    const cfW=cf*(1+waste/100);
    const YIELD={'40':0.30,'50':0.375,'60':0.45,'80':0.60,'90':0.675};
    
    const setTxt=(id,txt)=>{
      const el=document.getElementById(id);
      if(el) el.textContent=txt;
    };

    Object.keys(YIELD).forEach(lb=>{
      const n=Math.ceil(cfW/YIELD[lb]);
      setTxt('b'+lb, n.toLocaleString());
    });
    // brand table
    const q80=Math.ceil(cfW/0.60); setTxt('br-q80', q80); setTxt('br-q80c', '$'+Math.round(q80*10.50).toLocaleString());
    const q60=Math.ceil(cfW/0.45); setTxt('br-q60', q60); setTxt('br-q60c', '$'+Math.round(q60*8.50).toLocaleString());
    const s80=Math.ceil(cfW/0.60); setTxt('br-s80', s80); setTxt('br-s80c', '$'+Math.round(s80*10.25).toLocaleString());
    const g60=Math.ceil(cfW/0.45); setTxt('br-g60', g60); setTxt('br-g60c', '$'+Math.round(g60*7.25).toLocaleString());
    setTxt('cb-sub', cfW.toFixed(1)+' ft³ needed (incl. '+waste+'% waste)');
  }

  document.querySelectorAll('.cb-field input,.cb-field select').forEach(el=>{
    el.addEventListener('input',calc);
    el.addEventListener('change',calc);
    el.addEventListener('keyup',calc);
  });
  if(btn) btn.addEventListener('click',calc);
  calc();
  document.querySelectorAll('.cb-faq-q').forEach(q=>{
    q.addEventListener('click',function(){
      const i=this.closest('.cb-faq-item');
      if(!i) return;
      const w=i.classList.contains('open');
      document.querySelectorAll('.cb-faq-item').forEach(x=>x.classList.remove('open'));
      if(!w)i.classList.add('open');
    });
  });
});
</script>
<?php require_once '../includes/footer.php'; ?>
