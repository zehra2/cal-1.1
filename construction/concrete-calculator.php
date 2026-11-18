<?php
$currentYear = date('Y');
$pageTitle       = "Concrete Calculator ($currentYear) | Yards & Cost";
$metaDescription = "Free $currentYear concrete calculator. Calculate cubic yards, cubic feet, bags (40/60/80 lb), and cost for slabs, footings, columns, sonotubes, and steps. Includes $currentYear ready-mix price benchmarks and 10% waste factor.";
$metaKeywords    = 'concrete calculator, concrete slab calculator, concrete bag calculator, concrete yard calculator, how to calculate concrete, concrete volume calculator, concrete cost calculator, quikrete concrete calculator, calculate concrete yards, concrete footing calculator';
$schemaData = [
  '@context'=>'https://schema.org',
  '@graph'=>[
    ['@type'=>'WebApplication','name'=>'Concrete Calculator','url'=>'https://americacalculator.com/construction/concrete-calculator',
     'description'=>"Free $currentYear concrete calculator for slabs, footings, columns, and sonotubes. Get cubic yards, bags, and cost estimates instantly.",
     'applicationCategory'=>'HomeAndGardenApplication','operatingSystem'=>'All',
     'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
    ['@type'=>'HowTo','name'=>'How to Calculate Concrete','totalTime'=>'PT3M','step'=>[
      ['@type'=>'HowToStep','position'=>1,'name'=>'Choose your shape','text'=>'Select Slab, Footing, Round Column, Sonotube, or Concrete Steps. Each shape uses a different volume formula.'],
      ['@type'=>'HowToStep','position'=>2,'name'=>'Enter dimensions','text'=>'Input length, width, and thickness for slabs. Diameter and height for round forms. Width, height, and run for steps.'],
      ['@type'=>'HowToStep','position'=>3,'name'=>'Add a waste factor','text'=>'Always add 5–10% for spills, uneven subgrade, and form bulging. The calculator includes a 10% waste factor by default.'],
      ['@type'=>'HowToStep','position'=>4,'name'=>'Read your results','text'=>'Get volume in cubic feet and cubic yards, bag counts for 40/60/80 lb bags, and a ready-mix cost estimate based on current US pricing.'],
    ]],
    ['@type'=>'FAQPage','mainEntity'=>[
      ['@type'=>'Question','name'=>'How many bags of concrete do I need for a 10x10 slab?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'A 10×10 slab at 4 inches thick = 1.23 cubic yards. You need approximately 74 bags of 60 lb concrete or 55 bags of 80 lb concrete, plus 10% waste. For slabs over 1 cubic yard, ordering ready-mix is more cost-effective than bags.']],
      ['@type'=>'Question','name'=>'How do I calculate yards of concrete?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Multiply length (ft) × width (ft) × thickness (ft) to get cubic feet, then divide by 27 to convert to cubic yards. Formula: Cubic Yards = (L × W × T) A 27. Always convert thickness to feet first — 4 inches = 0.333 ft.']],
      ['@type'=>'Question','name'=>'How much does a yard of concrete cost in 2026?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>"In $currentYear, ready-mix concrete costs \$150–\$200 per cubic yard depending on US region, concrete mix (PSI rating), and delivery distance. Minimum delivery charges apply — most suppliers charge for 1 full truck (8–10 yards) even for small orders. Short-load fees of \$15–\$20/yard apply for orders under the minimum."]],
      ['@type'=>'Question','name'=>'How many bags of Quikrete do I need?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'One 80 lb bag of Quikrete yields approximately 0.60 cubic feet. One 60 lb bag yields 0.45 cubic feet. Divide your total cubic footage by 0.60 (for 80 lb) or 0.45 (for 60 lb) to get bag count. Always round up and add 10% for waste.']],
      ['@type'=>'Question','name'=>'What thickness should a concrete slab be?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'Standard residential concrete slab thickness: 4 inches for patios, sidewalks, and garage floors. 6 inches for driveways and areas with vehicle traffic. 8–12 inches for structural foundations and heavy equipment pads. The ACI recommends a minimum of 4 inches for any exterior flatwork.']],
      ['@type'=>'Question','name'=>'How much concrete do I need for fence posts?',
       'acceptedAnswer'=>['@type'=>'Answer','text'=>'A standard 10-inch diameter × 24-inch deep post hole requires about 0.136 cubic feet or 0.005 cubic yards of concrete. One 50 lb bag covers approximately 1 post hole of this size. Use the Sonotube/Round Column mode in this calculator for post hole estimates.']],
    ]],
  ],
    ['@type' => 'BreadcrumbList', 'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Construction', 'item' => 'https://americacalculator.com/construction/'],
      ['@type' => 'ListItem', 'position' => 3, 'name' => 'Concrete Calculator', 'item' => 'https://americacalculator.com/construction/concrete-calculator'],
    ]],

];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f5f7fa;}
.cc-wrap{max-width:1320px;margin:0 auto;padding:2rem 1.5rem 4rem;display:grid;grid-template-columns:220px 1fr 260px;gap:2rem;align-items:start;}
.cc-toc{position:sticky;top:6rem;background:#fff;border-radius:12px;border:1px solid #e8edf5;box-shadow:0 2px 12px rgba(0,0,0,.04);overflow:hidden;}
.cc-toc-head{background:linear-gradient(135deg,#64748b 0%,#475569 100%);color:#fff;padding:1rem 1.25rem;font-weight:700;font-size:.85rem;text-transform:uppercase;letter-spacing:.8px;}
.cc-toc-list{list-style:none;padding:.75rem 0;margin:0;}
.cc-toc-list li a{display:block;padding:.5rem 1.25rem;font-size:.84rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .18s;line-height:1.4;}
.cc-toc-list li a:hover,.cc-toc-list li a.cc-active{color:#475569;background:#f1f5f9;border-left-color:#64748b;}
.cc-toc-div{height:1px;background:#f1f5f9;margin:.5rem 0;}
.cc-toc-rlbl{padding:.5rem 1.25rem;font-size:.78rem;font-weight:700;color:#94a3b8;text-transform:uppercase;letter-spacing:.5px;}
.cc-toc-rlist{list-style:none;padding:0;margin:0 0 .75rem;}
.cc-toc-rlist li a{display:block;padding:.4rem 1.25rem;font-size:.82rem;color:#64748b;text-decoration:none;transition:color .15s;}
.cc-toc-rlist li a:hover{color:#475569;}
.cc-main{min-width:0;}
.cc-hero{margin-bottom:2rem;}
.cc-hero h1{font-size:2.1rem;color:#0f172a;margin:0 0 .6rem;line-height:1.25;}
.cc-desc{font-size:1.05rem;color:#64748b;line-height:1.65;margin:0 0 .75rem;border-left:4px solid #94a3b8;padding-left:1rem;}
.cc-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}
.cc-bc a{color:#64748b;text-decoration:none;}
/* Sub-calculator cards */
.cc-sub-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:1rem;margin-bottom:2rem;}
.cc-sub-card{background:#fff;border-radius:12px;border:1.5px solid #e8edf5;padding:1.25rem 1.25rem 1rem;text-decoration:none;display:flex;flex-direction:column;gap:.3rem;transition:border-color .2s,box-shadow .2s,transform .15s;}
.cc-sub-card:hover{border-color:#64748b;box-shadow:0 4px 16px rgba(100,116,139,.15);transform:translateY(-2px);}
.cc-sub-card-icon{font-size:1.6rem;line-height:1;}
.cc-sub-card h3{font-size:1rem;color:#0f172a;margin:.2rem 0 0;}
.cc-sub-card p{font-size:.82rem;color:#64748b;line-height:1.5;margin:0;}
.cc-sub-card .cc-sub-kw{font-size:.72rem;color:#94a3b8;margin-top:.3rem;}
/* Calculator card */
.cc-card{background:#fff;border-radius:14px;box-shadow:0 4px 24px rgba(0,0,0,.05);border:1px solid #eef2f7;margin-bottom:2.5rem;overflow:hidden;}
.cc-tabs{display:flex;flex-wrap:wrap;border-bottom:1px solid #e2e8f0;background:#f8fafc;}
.cc-tab{flex:1;min-width:80px;text-align:center;padding:.75rem .4rem;font-size:.82rem;font-weight:600;color:#64748b;cursor:pointer;border-bottom:3px solid transparent;transition:all .2s;background:none;border-top:none;border-left:none;border-right:none;}
.cc-tab:hover{color:#475569;background:#f1f5f9;}
.cc-tab.active{color:#475569;border-bottom-color:#64748b;background:#fff;}
.cc-inner{display:grid;grid-template-columns:1fr 1fr;}
.cc-form-col{padding:2rem;border-right:1px solid #f0f4fa;}
.cc-res-col{padding:2rem;background:linear-gradient(160deg,#f8fafc 0%,#f1f5f9 100%);}
.cc-panel{display:none;}
.cc-panel.active{display:block;}
.cc-panel-desc{font-size:.85rem;color:#64748b;margin-bottom:1.5rem;line-height:1.5;}
.cc-field{margin-bottom:1.2rem;}
.cc-field label{display:block;font-weight:600;font-size:.9rem;color:#1e293b;margin-bottom:.4rem;}
.cc-field input,.cc-field select{width:100%;padding:12px 15px;border:1.5px solid #d1dae8;border-radius:8px;font-size:1rem;color:#0f172a;outline:none;transition:border-color .2s,box-shadow .2s;box-sizing:border-box;background:#fff;}
.cc-field input:focus,.cc-field select:focus{border-color:#64748b;box-shadow:0 0 0 3px rgba(100,116,139,.12);}
.cc-field .cc-hint{font-size:.76rem;color:#94a3b8;margin-top:.3rem;line-height:1.4;}
.cc-row2{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.cc-btn{width:100%;background:linear-gradient(135deg,#475569 0%,#334155 100%);color:#fff;padding:15px;border:none;border-radius:9px;font-size:1rem;font-weight:700;cursor:pointer;margin-top:.75rem;transition:opacity .2s,transform .15s;}
.cc-btn{width:100%;background:linear-gradient(135deg,#1e3a8a,#2563eb);color:#fff;padding:14px;border:none;border-radius:9px;font-size:1rem;font-weight:700;cursor:pointer;margin-top:.75rem;transition:opacity .2s,transform .15s;box-shadow:0 4px 12px rgba(37,99,235,.2);}
.cc-btn:hover{opacity:.95;transform:translateY(-1px);}
/* Results */
.cc-res-head{font-size:1.15rem;font-weight:700;color:#0f172a;margin:0 0 .25rem;}
.cc-res-sub{font-size:.84rem;color:#64748b;margin:0 0 1.25rem;}
.cc-primary{background:linear-gradient(135deg,#1e3a8a,#2563eb);border-radius:12px;padding:1.4rem 1rem;text-align:center;box-shadow:0 8px 20px rgba(37,99,235,.22);margin-bottom:.85rem;}
.cc-primary-val{display:block;font-size:2.5rem;font-weight:800;color:#fff;line-height:1;margin-bottom:.25rem;letter-spacing:-0.5px;}
.cc-primary-lbl{font-size:.88rem;color:rgba(255,255,255,.9);font-weight:500;}
.cc-boxes{display:grid;grid-template-columns:1fr 1fr;gap:.7rem;margin-bottom:.85rem;}
.cc-box{background:#fff;border:1.5px solid #e8edf5;border-radius:10px;padding:.85rem .75rem;text-align:center;}
.cc-box-val{display:block;font-size:1.15rem;font-weight:800;color:#0f172a;margin-bottom:.15rem;}
.cc-box-lbl{font-size:.72rem;color:#64748b;font-weight:600;line-height:1.3;}
/* Waste notice */
.cc-waste{background:#f0fdf4;border:1.5px solid #86efac;border-radius:10px;padding:.75rem 1rem;font-size:.84rem;color:#166534;margin-bottom:.75rem;}
/* Bag breakdown */
.cc-bags{background:#fff;border:1px solid #e2e8f0;border-radius:10px;padding:.9rem 1rem;margin-bottom:.75rem;}
.cc-bags-title{font-size:.74rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:#64748b;margin-bottom:.5rem;}
.cc-bags-row{display:flex;justify-content:space-between;align-items:center;padding:.32rem 0;border-bottom:1px solid #f8fafc;font-size:.84rem;}
.cc-bags-row:last-child{border-bottom:none;}
.cc-bags-lbl{color:#64748b;}
.cc-bags-val{font-weight:700;color:#1e293b;}
/* Content sections */
.cc-section{background:#fff;border-radius:14px;border:1px solid #eef2f7;box-shadow:0 2px 12px rgba(0,0,0,.03);padding:2.25rem;margin-bottom:2rem;scroll-margin-top:6rem;}
.cc-section h2{font-size:1.65rem;color:#0f172a;margin:0 0 1.25rem;padding-bottom:.75rem;border-bottom:2px solid #f0f4fa;}
.cc-section h3{font-size:1.18rem;color:#1e293b;margin:1.75rem 0 .7rem;}
.cc-section p{color:#475569;line-height:1.75;margin-bottom:1.25rem;font-size:1rem;}
.cc-section ul,.cc-section ol{color:#475569;line-height:1.75;padding-left:1.5rem;margin-bottom:1.25rem;}
.cc-section li{margin-bottom:.5rem;}
.cc-section strong{color:#1e293b;}
.cc-section a{color:#2563eb;font-weight:600;}
.cc-formula{background:#0f172a;color:#94a3b8;font-family:'Courier New',monospace;font-size:1rem;padding:1.1rem 1.4rem;border-radius:8px;margin:1.25rem 0;line-height:1.9;}
.cc-formula code{display:block;}
.cc-table{width:100%;border-collapse:collapse;border-radius:10px;overflow:hidden;border:1px solid #e8edf5;margin-bottom:1.5rem;}
.cc-table th{background:#334155;color:#fff;padding:13px 16px;text-align:left;font-size:.88rem;font-weight:600;}
.cc-table td{padding:11px 16px;border-bottom:1px solid #f1f5f9;font-size:.9rem;color:#334155;}
.cc-table tr:last-child td{border-bottom:none;}
.cc-table tr:nth-child(even) td{background:#f8fafc;}
.cc-info{background:#eff6ff;border-left:4px solid #2563eb;border-radius:0 8px 8px 0;padding:1rem 1.25rem;margin:1.25rem 0;font-size:.95rem;color:#1e3a8a;line-height:1.6;}
.cc-warn{background:#fffbeb;border-left:4px solid #d97706;border-radius:0 8px 8px 0;padding:1rem 1.25rem;margin:1.25rem 0;font-size:.95rem;color:#92400e;line-height:1.6;}
/* FAQ */
.cc-faq-item{border-bottom:1px solid #f0f4fa;padding-bottom:1.25rem;margin-bottom:1.25rem;}
.cc-faq-item:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0;}
.cc-faq-q{font-size:1.02rem;font-weight:700;color:#0f172a;margin-bottom:.6rem;cursor:pointer;display:flex;justify-content:space-between;align-items:flex-start;gap:1rem;}
.cc-faq-q::after{content:'+';font-size:1.3rem;color:#64748b;flex-shrink:0;}
.cc-faq-item.open .cc-faq-q::after{content:'−';}
.cc-faq-a{color:#475569;line-height:1.7;font-size:.97rem;display:none;}
.cc-faq-item.open .cc-faq-a{display:block;}
/* Sidebar */
.cc-sidebar{position:sticky;top:6rem;display:flex;flex-direction:column;gap:1.25rem;}
.cc-widget{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 10px rgba(0,0,0,.04);overflow:hidden;}
.cc-widget-head{background:linear-gradient(135deg,#1e3a8a,#2563eb);color:#fff;padding:1rem 1.25rem;}
.cc-widget-title{font-size:1rem;font-weight:700;}
.cc-widget-sub{font-size:.8rem;color:rgba(255,255,255,.85);}
.cc-widget-upd{font-size:.72rem;color:rgba(255,255,255,.65);margin-top:.35rem;}
.cc-widget-rows{padding:.4rem 0;}
.cc-widget-row{display:flex;justify-content:space-between;align-items:center;padding:.6rem 1.25rem;border-bottom:1px solid #f8fafc;transition:background .15s;}
.cc-widget-row:last-child{border-bottom:none;}
.cc-widget-row:hover{background:#f8fafc;}
.cc-wl{font-size:.82rem;font-weight:600;color:#334155;}
.cc-ws{font-size:.72rem;color:#94a3b8;}
.cc-wv{font-size:.95rem;font-weight:800;color:#1e3a8a;text-align:right;}
.cc-widget-foot{padding:.85rem 1.25rem;border-top:1px solid #f0f4fa;background:#f8fafc;}
.cc-widget-foot p{font-size:.75rem;color:#64748b;margin:0 0 .5rem;line-height:1.3;}
.cc-widget-foot a{font-size:.83rem;font-weight:700;color:#2563eb;text-decoration:none;display:flex;align-items:center;gap:.35rem;}
.cc-widget-foot a:hover{text-decoration:underline;}
.cc-quick-widget{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 10px rgba(0,0,0,.04);overflow:hidden;}
.cc-quick-head{padding:.85rem 1.15rem;background:#f8fafc;border-bottom:1px solid #edf2f7;font-size:.82rem;font-weight:700;color:#334155;text-transform:uppercase;letter-spacing:.5px;display:flex;align-items:center;gap:.5rem;}
.cc-quick-links{list-style:none;padding:.4rem 0;margin:0;}
.cc-quick-links li{margin:0;padding:0;}
.cc-quick-links li a{display:flex;align-items:center;gap:.6rem;padding:.65rem 1.15rem;font-size:.86rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .18s;font-weight:500;}
.cc-quick-links li a:hover{color:#1e293b;background:#f8fafc;border-left-color:#3b82f6;padding-left:1.35rem;}
.cc-quick-links li a.active{color:#1d4ed8;background:#eff6ff;border-left-color:#2563eb;font-weight:700;}
@media(max-width:1200px){.cc-wrap{grid-template-columns:200px 1fr 240px;}}
@media(max-width:1024px){.cc-wrap{grid-template-columns:1fr;}.cc-toc,.cc-sidebar{position:static;}.cc-sidebar{display:grid;grid-template-columns:1fr 1fr;}}
@media(max-width:768px){.cc-wrap{padding:1rem 1rem 3rem;}.cc-inner{grid-template-columns:1fr;}.cc-form-col{border-right:none;border-bottom:1px solid #f0f4fa;}.cc-sidebar{grid-template-columns:1fr;}.cc-row2{grid-template-columns:1fr;}.cc-sub-grid{grid-template-columns:1fr;}}
</style>

<main id="main-content">
<div class="cc-wrap">

  <!-- LEFT TOC -->
  <aside class="cc-toc">
    <div class="cc-toc-head">📋 In This Article</div>
    <ul class="cc-toc-list">
      <li><a href="#calculator" class="cc-active">Concrete Calculator</a></li>
      <li><a href="#sub-calculator">All Concrete Tools</a></li>
      <li><a href="#how-to-calculate">How to Calculate Concrete</a></li>
      <li><a href="#bags-vs-readymix">Bags vs. Ready-Mix</a></li>
      <li><a href="#cost"><?php echo $currentYear; ?> Cost Guide</a></li>
      <li><a href="#mix-ratio">Mix Ratios &amp; PSI Guide</a></li>
      <li><a href="#thicknes">Thickness by Project</a></li>
      <li><a href="#faq">FAQ</a></li>
    </ul>
    <div class="cc-toc-div"></div>
    <div class="cc-toc-rlbl">Concrete Sub-Calculators</div>
    <ul class="cc-toc-rlist">
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-slab-calculator">Slab Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-bag-calculator">Bag Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-yardage-calculator">Yardage Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-footing-calculator">Footing Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/calculators/cubic-yard.php">Cubic Yard Calculator</a></li>
    </ul>
  </aside>

  <!-- MAIN -->
  <div class="cc-main">
    <div class="cc-hero">
      <div class="cc-bc">
        <a href="<?php echo $baseUrl; ?>/index.php">Home</a> ›
        <a href="<?php echo $baseUrl; ?>/construction/">Construction</a> ›
        Concrete Calculator
      </div>
      <h1>Concrete Calculator (<?php echo $currentYear; ?>) – Cubic Yards, Bags &amp; Cost</h1>
      <p class="cc-desc">
        Calculate <strong>cubic yards</strong>, <strong>cubic feet</strong>, <strong>bag counts</strong>, and
        <strong>ready-mix cost</strong> for slabs, footings, columns, sonotubes, and steps —
        with a 10% waste factor built in. Updated for <?php echo $currentYear; ?> US pricing.
      </p>
    </div>

    <!-- SUB-CALCULATOR GRID -->
    <div id="sub-calculator" style="scroll-margin-top:6rem;">
      <h2 style="font-size:1.3rem;color:#0f172a;margin:0 0 1rem;font-weight:700;">Specialized Concrete Calculators</h2>
      <div class="cc-sub-grid">
        <a href="<?php echo $baseUrl; ?>/construction/concrete-slab-calculator" class="cc-sub-card">
          <div class="cc-sub-card-icon">🟫</div>
          <h3>Concrete Slab Calculator</h3>
          <p>Slabs, patios, driveways, garage floors. Cost by region + rebar estimator.</p>
          <div class="cc-sub-kw">concrete slab calculator · concrete pad calculator · slab cost</div>
        </a>
        <a href="<?php echo $baseUrl; ?>/construction/concrete-bag-calculator" class="cc-sub-card">
          <div class="cc-sub-card-icon">🛍️</div>
          <h3>Concrete Bag Calculator</h3>
          <p>40, 60, 80 &amp; 90 lb bags. Quikrete, Sakrete &amp; store-brand comparison.</p>
          <div class="cc-sub-kw">concrete bag calculator · quikrete calculator · bags of concrete</div>
        </a>
        <a href="<?php echo $baseUrl; ?>/construction/concrete-yardage-calculator" class="cc-sub-card">
          <div class="cc-sub-card-icon">🚛</div>
          <h3>Concrete Yardage Calculator</h3>
          <p>Cubic yards for ready-mix orders. Truck load sizing + short-load fees.</p>
          <div class="cc-sub-kw">concrete yardage calculator · cubic yards concrete · ready mix</div>
        </a>
        <a href="<?php echo $baseUrl; ?>/construction/concrete-footing-calculator" class="cc-sub-card">
          <div class="cc-sub-card-icon">🏗️</div>
          <h3>Concrete Footing Calculator</h3>
          <p>Strip footings, pad footings, round footings, and fence post holes.</p>
          <div class="cc-sub-kw">concrete footing calculator · fence post · foundation</div>
        </a>
      </div>
    </div>

    <!-- CALCULATOR CARD -->
    <div class="cc-card" id="calculator">
      <div class="cc-tabs">
        <button class="cc-tab active" data-panel="cc-slab">🟫 Slab / Pad</button>
        <button class="cc-tab" data-panel="cc-footing">🏗️ Footing / Wall</button>
        <button class="cc-tab" data-panel="cc-column">🔵 Column / Tube</button>
        <button class="cc-tab" data-panel="cc-step">🪜 Steps</button>
      </div>
      <div class="cc-inner">
        <div class="cc-form-col">

          <!-- SLAB -->
          <div id="cc-slab" class="cc-panel active">
            <p class="cc-panel-desc">For driveways, patios, garage floors, sidewalks, and any flat rectangular pour.</p>
            <div class="cc-row2">
              <div class="cc-field"><label for="sl_length">Length (ft)</label>
                <input type="number" id="sl_length" value="10" min="0.1" step="0.1">
                <div class="cc-hint">Horizontal measurement of the slab</div>
              </div>
              <div class="cc-field"><label for="sl_width">Width (ft)</label>
                <input type="number" id="sl_width" value="10" min="0.1" step="0.1">
              </div>
            </div>
            <div class="cc-row2">
              <div class="cc-field"><label for="sl_thick">Thickness</label>
                <input type="number" id="sl_thick" value="4" min="0.1" step="0.5">
              </div>
              <div class="cc-field"><label for="sl_unit">Thickness Unit</label>
                <select id="sl_unit">
                  <option value="in" selected>Inches</option>
                  <option value="ft">Feet</option>
                </select>
              </div>
            </div>
          </div>

          <!-- FOOTING / WALL -->
          <div id="cc-footing" class="cc-panel">
            <p class="cc-panel-desc">For continuous footings, foundation walls, and retaining walls.</p>
            <div class="cc-row2">
              <div class="cc-field"><label for="ft_length">Length (ft)</label>
                <input type="number" id="ft_length" value="20" min="0.1" step="0.1">
              </div>
              <div class="cc-field"><label for="ft_width">Width (ft)</label>
                <input type="number" id="ft_width" value="1.5" min="0.1" step="0.1">
                <div class="cc-hint">Typical footing width: 1.0–2.0 ft</div>
              </div>
            </div>
            <div class="cc-field"><label for="ft_depth">Depth (ft)</label>
              <input type="number" id="ft_depth" value="1" min="0.1" step="0.1">
              <div class="cc-hint">Typical footing depth: 1.0–2.0 ft</div>
            </div>
          </div>

          <!-- COLUMN / TUBE -->
          <div id="cc-column" class="cc-panel">
            <p class="cc-panel-desc">For round columns, sonotubes (concrete tube forms), and fence/deck post holes.</p>
            <div class="cc-row2">
              <div class="cc-field"><label for="col_dia">Diameter</label>
                <input type="number" id="col_dia" value="10" min="1" step="0.5">
              </div>
              <div class="cc-field"><label for="col_dia_unit">Diameter Unit</label>
                <select id="col_dia_unit">
                  <option value="in" selected>Inches</option>
                  <option value="ft">Feet</option>
                </select>
              </div>
            </div>
            <div class="cc-field"><label for="col_depth">Depth / Height (ft)</label>
              <input type="number" id="col_depth" value="2" min="0.1" step="0.1">
              <div class="cc-hint">Depth of post hole or height of column</div>
            </div>
            <div class="cc-field"><label for="col_qty">Number of Columns / Holes</label>
              <input type="number" id="col_qty" value="1" min="1" step="1">
            </div>
          </div>

          <!-- STEPS -->
          <div id="cc-step" class="cc-panel">
            <p class="cc-panel-desc">For front entry steps, porch steps, and exterior concrete stairs.</p>
            <div class="cc-row2">
              <div class="cc-field"><label for="st_width">Step Width (ft)</label>
                <input type="number" id="st_width" value="4" min="0.5" step="0.1">
                <div class="cc-hint">Width of the full staircase</div>
              </div>
              <div class="cc-field"><label for="st_rise">Riser Height (in)</label>
                <input type="number" id="st_rise" value="7" min="1" max="12" step="0.5">
                <div class="cc-hint">Typical rise: 6–8 inches</div>
              </div>
            </div>
            <div class="cc-row2">
              <div class="cc-field"><label for="st_run">Tread Depth (in)</label>
                <input type="number" id="st_run" value="12" min="6" step="0.5">
                <div class="cc-hint">Typical tread: 10–12 inches</div>
              </div>
              <div class="cc-field"><label for="st_count">Number of Steps</label>
                <input type="number" id="st_count" value="3" min="1" max="30" step="1">
              </div>
            </div>
          </div>

          <!-- Shared: concrete price + waste -->
          <div style="border-top:1px dashed #e2e8f0;margin-top:1.25rem;padding-top:1.25rem;">
            <div class="cc-row2">
              <div class="cc-field"><label for="cc_price">Ready-Mix Price ($/yd³)</label>
                <input type="number" id="cc_price" value="160" min="50" step="5">
                <div class="cc-hint">US avg $150–200/yd³ in <?php echo $currentYear; ?></div>
              </div>
              <div class="cc-field"><label for="cc_waste">Waste Factor (%)</label>
                <input type="number" id="cc_waste" value="10" min="0" max="30" step="1">
                <div class="cc-hint">Add 5–10% for spills &amp; uneven grade</div>
              </div>
            </div>
          </div>

          <button class="cc-btn" id="cc-calc-btn">⚡ Calculate Concrete</button>
        </div>

        <!-- RESULTS -->
        <div class="cc-res-col">
          <h3 class="cc-res-head">Results</h3>
          <p class="cc-res-sub" id="cc-res-sub">Live calculation active</p>

          <div class="cc-primary">
            <span class="cc-primary-val" id="cc-yard">1.23 yd³</span>
            <span class="cc-primary-lbl">Cubic Yards (incl. waste)</span>
          </div>

          <div class="cc-boxes">
            <div class="cc-box"><span class="cc-box-val" id="cc-cf">33.3 ft³</span><span class="cc-box-lbl">Cubic Feet</span></div>
            <div class="cc-box"><span class="cc-box-val" id="cc-cost">$197</span><span class="cc-box-lbl">Estimated Cost</span></div>
            <div class="cc-box"><span class="cc-box-val" id="cc-net-yard">1.11 yd³</span><span class="cc-box-lbl">Net (no waste)</span></div>
            <div class="cc-box"><span class="cc-box-val" id="cc-waste-amt">0.11 yd³</span><span class="cc-box-lbl">Waste Amount</span></div>
          </div>

          <div class="cc-waste" id="cc-waste-note">✅ Add 10% waste: order <strong id="cc-order">1.23 yd³</strong> or <strong id="cc-order-bag">—</strong></div>

          <div class="cc-bags">
            <div class="cc-bags-title">Bag Count Breakdown</div>
            <div class="cc-bags-row"><span class="cc-bags-lbl">40 lb bags (0.30 ft³ each)</span><span class="cc-bags-val" id="bags-40">—</span></div>
            <div class="cc-bags-row"><span class="cc-bags-lbl">50 lb bags (0.375 ft³ each)</span><span class="cc-bags-val" id="bags-50">—</span></div>
            <div class="cc-bags-row"><span class="cc-bags-lbl">60 lb bags (0.45 ft³ each)</span><span class="cc-bags-val" id="bags-60">—</span></div>
            <div class="cc-bags-row"><span class="cc-bags-lbl">80 lb bags (0.60 ft³ each)</span><span class="cc-bags-val" id="bags-80">—</span></div>
            <div class="cc-bags-row"><span class="cc-bags-lbl">90 lb bags (0.675 ft³ each)</span><span class="cc-bags-val" id="bags-90">—</span></div>
          </div>

          <p style="font-size:.74rem;color:#64748b;margin-top:.5rem;">*Bags recommended for &lt;1 yd³ projects. Use ready-mix for larger pours. Prices vary by supplier and region.</p>
        </div>
      </div>
    </div><!-- /cc-card -->

    <!-- HOW TO CALCULATE -->
    <section class="cc-section" id="how-to-calculate">
      <h2>How to Calculate Concrete — The Formula</h2>
      <p>Concrete volume is always calculated in cubic feet first, then converted to cubic yards (divide by 27) for ready-mix orders, or kept in cubic feet for bag calculations.</p>

      <h3>Slab Formula (Rectangular)</h3>
      <div class="cc-formula">
        <code>Cubic Feet = Length (ft) × Width (ft) × Thickness (ft)</code>
        <code>Cubic Yards = Cubic Feet / 27</code>
        <code>Example: 10 ft × 10 ft × (4 in / 12) = 10 × 10 × 0.333 = 33.3 ft³ = 1.23 yd³</code>
      </div>

      <h3>Round Column / Sonotube Formula</h3>
      <div class="cc-formula">
        <code>Cubic Feet = π × (Diameter / 2)² × Height</code>
        <code>Example: 10-inch diameter × 24-inch depth:</code>
        <code>= 3.1416 × (0.417 ft)² × 2 ft = 1.09 ft³ per hole</code>
      </div>

      <h3>Steps Formula</h3>
      <div class="cc-formula">
        <code>Each step volume = Width × Riser Height × Cumulative Depth</code>
        <code>Total = sum of all steps (pyramid method)</code>
        <code>3 steps at 4 ft wide, 7-in rise, 12-in tread ≈ 1.17 ft³</code>
      </div>

      <div class="cc-info">
        💡 <strong>Always add 5–10% waste.</strong> Real pours lose concrete to form bulging, surface irregularities, spills, and residue left in the mixer drum. For rough or uneven ground, use 10%. For smooth, well-formed slabs, 5% is acceptable. This calculator uses 10% by default — adjust in the waste factor field.
      </div>
    </section>

    <!-- BAGS VS READY-MIX -->
    <section class="cc-section" id="bags-vs-readymix">
      <h2>Bags vs. Ready-Mix — Which Should You Use?</h2>
      <p>The decision between bagged concrete and ready-mix depends almost entirely on project volume. The crossover point is roughly <strong>0.75–1.0 cubic yards</strong>.</p>

      <table class="cc-table">
        <thead><tr><th>Factor</th><th>Bagged Concrete</th><th>Ready-Mix (Truck)</th></tr></thead>
        <tbody>
          <tr><td><strong>Best project size</strong></td><td>Under 0.75 yd³ (20 ft³)</td><td>Over 1 yd³</td></tr>
          <tr><td><strong>Cost per yd³</strong></td><td>$200–$350 (80 lb bags)</td><td>$150–$200</td></tr>
          <tr><td><strong>Setup</strong></td><td>Mixer or by hand, any time</td><td>Must be ready when truck arrives</td></tr>
          <tr><td><strong>Minimum order</strong></td><td>As little as 1 bag</td><td>Usually 1 full truck (8–10 yd³)</td></tr>
          <tr><td><strong>Short-load fee</strong></td><td>None</td><td>$15–$25/yd³ under minimum</td></tr>
          <tr><td><strong>Labor</strong></td><td>High — mixing is physical</td><td>Low — truck mixes and pours</td></tr>
          <tr><td><strong>Quality consistency</strong></td><td>Variable — depends on mixing</td><td>Consistent — plant-batched</td></tr>
          <tr><td><strong>Recommended for</strong></td><td>Post holes, small pads, repairs</td><td>Driveways, slabs, foundations</td></tr>
        </tbody>
      </table>

      <div class="cc-warn">
        <strong>Ready-mix minimum orders:</strong> Most US concrete suppliers have a minimum delivery of 1 full truck (8–10 cubic yards). If you need less, you'll pay a short-load surcharge of $15–$25 per yard. For orders under 3 yards, sometimes a concrete contractor's leftover mix ("short load" from another job) can be purchased at reduced rates — ask local suppliers.
      </div>
    </section>

    <!-- COST GUIDE -->
    <section class="cc-section" id="cost">
      <h2><?php echo $currentYear; ?> Concrete Cost Guide</h2>
      <p>Concrete costs vary significantly by US region, PSI mix strength, and whether you're buying bags or ready-mix. Here are <?php echo $currentYear; ?> benchmarks:</p>

      <h3>Ready-Mix Cost by US Region</h3>
      <table class="cc-table">
        <thead><tr><th>US Region</th><th>Price per Cubic Yard</th><th>Key States</th></tr></thead>
        <tbody>
          <tr><td><strong>Northeast</strong></td><td>$175 – $225/yd³</td><td>NY, NJ, CT, MA, PA</td></tr>
          <tr><td><strong>West Coast</strong></td><td>$165 – $215/yd³</td><td>CA, WA, OR</td></tr>
          <tr><td><strong>Midwest</strong></td><td>$140 – $175/yd³</td><td>IL, OH, MI, MN, IN</td></tr>
          <tr><td><strong>South</strong></td><td>$130 – $165/yd³</td><td>TX, FL, GA, NC, TN</td></tr>
          <tr><td><strong>Mountain West</strong></td><td>$150 – $190/yd³</td><td>CO, AZ, NV, UT</td></tr>
        </tbody>
      </table>

      <h3>Bag Concrete Cost (<?php echo $currentYear; ?>)</h3>
      <table class="cc-table">
        <thead><tr><th>Bag Size</th><th>Yield (ft³)</th><th>Avg. Price</th><th>Cost per yd³</th></tr></thead>
        <tbody>
          <tr><td>40 lb bag</td><td>0.30 ft³</td><td>$5.50 – $7.00</td><td>~$280 – $350</td></tr>
          <tr><td>50 lb bag</td><td>0.375 ft³</td><td>$6.50 – $8.50</td><td>~$260 – $340</td></tr>
          <tr><td>60 lb bag</td><td>0.45 ft³</td><td>$7.00 – $9.50</td><td>~$230 – $310</td></tr>
          <tr><td>80 lb bag</td><td>0.60 ft³</td><td>$9.00 – $12.00</td><td>~$210 – $280</td></tr>
          <tr><td>90 lb bag</td><td>0.675 ft³</td><td>$10.00 – $13.50</td><td>~$200 – $270</td></tr>
        </tbody>
      </table>
      <p style="font-size:.82rem;color:#64748b;">Source: aggregated Home Depot, Lowe's, and regional supplier pricing, <?php echo $currentYear; ?>. Prices vary by location and fluctuate with cement commodity prices.</p>
    </section>

    <!-- MIX RATIOS -->
    <section class="cc-section" id="mix-ratio">
      <h2>Concrete Mix Ratios &amp; PSI Guide</h2>
      <p>Not all concrete is the same. The <strong>PSI (pounds per square inch)</strong> rating tells you the compressive strength — the higher the PSI, the stronger and more expensive the mix. Use the right PSI for your project type.</p>

      <table class="cc-table">
        <thead><tr><th>Application</th><th>Recommended PSI</th><th>Standard Mix Ratio</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>Sidewalks, patios</td><td>2,500 – 3,000 PSI</td><td>1:2:3</td><td>Standard residential flatwork</td></tr>
          <tr><td>Driveways</td><td>3,000 – 3,500 PSI</td><td>1:1.5:3</td><td>Needs to handle vehicle weight</td></tr>
          <tr><td>Garage floors</td><td>3,500 – 4,000 PSI</td><td>1:1.5:3</td><td>Consider fiber mesh reinforcement</td></tr>
          <tr><td>Foundations / footings</td><td>3,500 – 4,500 PSI</td><td>1:1:2</td><td>Check local code requirements</td></tr>
          <tr><td>Structural columns</td><td>4,000 – 5,000 PSI</td><td>1:1:2</td><td>Usually requires engineer spec</td></tr>
          <tr><td>Pool decks</td><td>4,000 PSI</td><td>1:1.5:3</td><td>Add air-entraining admixture</td></tr>
          <tr><td>Commercial / industrial</td><td>5,000+ PSI</td><td>Engineered mix</td><td>Requires structural engineering</td></tr>
        </tbody>
      </table>
      <p>Mix ratios are expressed as cement : sand : aggregate by volume. Higher cement ratios = higher PSI but also higher cost and more shrinkage cracking risk. For most residential work, a bagged mix labeled "General Purpose" or "3000 PSI" is appropriate.</p>
    </section>

    <!-- THICKNESS GUIDE -->
    <section class="cc-section" id="thicknes">
      <h2>Concrete Thickness by Project Type</h2>
      <p>Thickness is the most impactful variable in how much concrete you need. A 6-inch slab uses 50% more concrete than a 4-inch slab of the same area. Always verify local building code requirements — some jurisdictions have minimum thickness mandates.</p>

      <table class="cc-table">
        <thead><tr><th>Project</th><th>Recommended Thickness</th><th>Notes</th></tr></thead>
        <tbody>
          <tr><td>Sidewalks</td><td>4 inches</td><td>ACI minimum for exterior flatwork</td></tr>
          <tr><td>Patio / backyard slab</td><td>4 inches</td><td>Increase to 6 in for heavy outdoor furniture</td></tr>
          <tr><td>Residential driveway</td><td>4 – 6 inches</td><td>6 in recommended for SUVs and trucks</td></tr>
          <tr><td>Garage floor</td><td>4 – 6 inches</td><td>Thicken to 6 in around perimeter/edges</td></tr>
          <tr><td>Pool deck</td><td>4 – 5 inches</td><td>Non-slip finish required</td></tr>
          <tr><td>Commercial driveway</td><td>6 – 8 inches</td><td>For delivery trucks, 8 in minimum</td></tr>
          <tr><td>Residential foundation</td><td>8 – 12 inches</td><td>Verify with local building code</td></tr>
          <tr><td>Heavy equipment pad</td><td>8 – 12 inches</td><td>Requires structural engineering for >10 tons</td></tr>
        </tbody>
      </table>
    </section>

    <!-- FAQ -->
    <section class="cc-section" id="faq">
      <h2>Frequently Asked Questions</h2>

      <div class="cc-faq-item open">
        <div class="cc-faq-q">How many bags of concrete do I need for a 10×10 slab?</div>
        <div class="cc-faq-a">A 10×10 slab at 4 inches thick = 33.3 cubic feet = 1.23 cubic yards (plus 10% waste = 1.36 yd³). That requires approximately: <strong>111 × 40 lb bags</strong>, <strong>74 × 60 lb bags</strong>, or <strong>56 × 80 lb bags</strong>. For this volume, ordering ready-mix is significantly cheaper and easier than mixing 56–74 bags by hand. Use the <a href="<?php echo $baseUrl; ?>/construction/concrete-bag-calculator">Bag Calculator</a> for exact counts on any size project.</div>
      </div>

      <div class="cc-faq-item">
        <div class="cc-faq-q">How do I calculate yards of concrete?</div>
        <div class="cc-faq-a">Formula: <strong>Cubic Yards = (Length × Width × Thickness in feet) A 27</strong>. Convert thickness to feet first — divide inches by 12. Then multiply by 1.10 to add 10% waste. Example: 20 ft × 10 ft × 4 in: 20 × 10 × (4 / 12) = 66.67 ft³ / 27 = 2.47 yd³ × 1.10 = 2.72 yd³ to order.</div>
      </div>

      <div class="cc-faq-item">
        <div class="cc-faq-q">How much does a yard of concrete cost in <?php echo $currentYear; ?>?</div>
        <div class="cc-faq-a">In <?php echo $currentYear; ?>, ready-mix concrete costs $130–$225 per cubic yard depending on US region (Northeast is most expensive; South is least). Most suppliers charge a minimum delivery of 8–10 yards. Short-load fees of $15–$25/yd³ apply for smaller orders. Expect to pay a base delivery charge of $150–$300 regardless of volume. Total installed cost (concrete + labor + finishing) for a residential slab runs $4–$8 per square foot.</div>
      </div>

      <div class="cc-faq-item">
        <div class="cc-faq-q">What is the difference between cubic yards and cubic feet of concrete?</div>
        <div class="cc-faq-a">1 cubic yard = 27 cubic feet. Ready-mix suppliers price and measure in cubic yards. Bag calculators use cubic feet. To convert: divide cubic feet by 27 to get cubic yards. To convert the other way: multiply cubic yards by 27 to get cubic feet. The calculator above shows both automatically.</div>
      </div>

      <div class="cc-faq-item">
        <div class="cc-faq-q">How much concrete do I need for fence posts?</div>
        <div class="cc-faq-a">A standard 10-inch diameter × 24-inch deep post hole needs 0.545 ft³ of concrete. One 50 lb bag (0.375 ft³) isn't quite enough — use one 60 lb or 80 lb bag per hole. For a 6-foot privacy fence with posts every 8 feet (20 posts), you need approximately 11 ft³ or 0.4 cubic yards — about 18–20 bags of 60 lb concrete. Use the <a href="<?php echo $baseUrl; ?>/construction/concrete-footing-calculator">Footing Calculator</a> for exact post hole volumes.</div>
      </div>

      <div class="cc-faq-item">
        <div class="cc-faq-q">How long does concrete take to cure?</div>
        <div class="cc-faq-a">Concrete reaches initial set in 24–48 hours (safe to walk on). It reaches 70% strength at 7 days and full design strength (100%) at 28 days. For vehicle traffic on a driveway: wait 7 days minimum, 28 days recommended. Concrete continues gaining trace strength for years. Cold weather (below 50°F) significantly slows curing — cover with insulating blankets and avoid pouring when temps drop below 40°F.</div>
      </div>

      <div class="cc-faq-item">
        <div class="cc-faq-q">What is the standard concrete mix ratio for a driveway?</div>
        <div class="cc-faq-a">The standard residential driveway concrete mix is <strong>3,500 PSI</strong> with a 1:1.5:3 ratio (1 part cement : 1.5 parts sand : 3 parts aggregate) and a water-cement ratio of 0.45–0.50. Most bagged "driveway mix" products are pre-blended to this spec. For ready-mix, specify "3,500 PSI, 3/4-inch aggregate, 4-inch slump."</div>
      </div>
    </section>

  </div><!-- /cc-main -->

  <!-- RIGHT SIDEBAR -->
  <aside class="cc-sidebar">
    <div class="cc-widget">
      <div class="cc-widget-head">
        <div style="display:flex;align-items:center;gap:.5rem;margin-bottom:.25rem;">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          <span class="cc-widget-title"><?php echo $currentYear; ?> Price Benchmarks</span>
        </div>
        <div class="cc-widget-sub">Ready-mix concrete per cubic yard</div>
        <div class="cc-widget-upd">Updated: <?php echo date('M j, Y'); ?></div>
      </div>
      <div class="cc-widget-rows">
        <div class="cc-widget-row"><div><div class="cc-wl">Northeast (NY/NJ/CT)</div><div class="cc-ws">Ready-mix, standard PSI</div></div><div><div class="cc-wv">$175–$225</div></div></div>
        <div class="cc-widget-row"><div><div class="cc-wl">West Coast (CA/WA)</div><div class="cc-ws">Ready-mix, standard PSI</div></div><div><div class="cc-wv">$165–$215</div></div></div>
        <div class="cc-widget-row" style="background:#f8fafc;"><div><div class="cc-wl">Midwest (IL/OH/MI)</div><div class="cc-ws">Ready-mix, standard PSI</div></div><div><div class="cc-wv">$140–$175</div></div></div>
        <div class="cc-widget-row"><div><div class="cc-wl">South (TX/FL/GA)</div><div class="cc-ws">Ready-mix, standard PSI</div></div><div><div class="cc-wv">$130–$165</div></div></div>
        <div class="cc-widget-row"><div><div class="cc-wl">80 lb Bag (Home Depot)</div><div class="cc-ws">Quikrete / Sakrete</div></div><div><div class="cc-wv">$9–$12</div></div></div>
      </div>
      <div class="cc-widget-foot">
        <p>Prices fluctuate with cement commodity costs. Always get 3 local supplier quotes before ordering.</p>
        <a href="<?php echo $baseUrl; ?>/construction/concrete-slab-calculator">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
          Calculate slab cost →
        </a>
      </div>
    </div>

    <div class="cc-quick-widget">
      <div class="cc-quick-head">🧱 Concrete Tools</div>
      <ul class="cc-quick-links">
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-calculator" class="active">🟦 Concrete Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-slab-calculator">🟫 Slab Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-bag-calculator">🛍️ Bag Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-yardage-calculator">🚛 Yardage Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-footing-calculator">🏗️ Footing Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/calculators/cubic-yard.php">📦 Cubic Yard Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/home-addition-cost-calculator">🏠 Home Addition Cost</a></li>
      </ul>
    </div>
  </aside>

</div><!-- /cc-wrap -->

  <!-- Related Calculators -->
  <div style="max-width:1100px;margin:0 auto 32px;padding:0 20px;">
    <h2 style="font-size:1.15rem;color:#0f172a;margin:0 0 16px;">Related Construction Calculators</h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:14px;">
      <a href="<?php echo $baseUrl; ?>/construction/concrete-slab-calculator" style="display:block;background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:16px 18px;text-decoration:none;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 4px 16px rgba(0,0,0,.1)'" onmouseout="this.style.boxShadow='none'">
        <div style="font-size:1.4rem;margin-bottom:6px;">📐</div>
        <div style="font-weight:700;color:#0f172a;font-size:.95rem;">Concrete Slab Calculator</div>
        <div style="color:#64748b;font-size:.82rem;margin-top:4px;">Calculate slabs, driveways, patios</div>
      </a>
      <a href="<?php echo $baseUrl; ?>/construction/concrete-bag-calculator" style="display:block;background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:16px 18px;text-decoration:none;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 4px 16px rgba(0,0,0,.1)'" onmouseout="this.style.boxShadow='none'">
        <div style="font-size:1.4rem;margin-bottom:6px;">🛒</div>
        <div style="font-weight:700;color:#0f172a;font-size:.95rem;">Concrete Bag Calculator</div>
        <div style="color:#64748b;font-size:.82rem;margin-top:4px;">How many bags do you need?</div>
      </a>
      <a href="<?php echo $baseUrl; ?>/construction/home-addition-cost-calculator" style="display:block;background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:16px 18px;text-decoration:none;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 4px 16px rgba(0,0,0,.1)'" onmouseout="this.style.boxShadow='none'">
        <div style="font-size:1.4rem;margin-bottom:6px;">🏡</div>
        <div style="font-weight:700;color:#0f172a;font-size:.95rem;">Home Addition Cost Calculator</div>
        <div style="color:#64748b;font-size:.82rem;margin-top:4px;">Estimate room addition costs</div>
      </a>
      <a href="<?php echo $baseUrl; ?>/construction/rafter-calculator" style="display:block;background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:16px 18px;text-decoration:none;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 4px 16px rgba(0,0,0,.1)'" onmouseout="this.style.boxShadow='none'">
        <div style="font-size:1.4rem;margin-bottom:6px;">🔨</div>
        <div style="font-weight:700;color:#0f172a;font-size:.95rem;">Rafter Calculator</div>
        <div style="color:#64748b;font-size:.82rem;margin-top:4px;">Roof rafter length &amp; angles</div>
      </a>
    </div>
  </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const tabs    = document.querySelectorAll('.cc-tab');
  const panels  = document.querySelectorAll('.cc-panel');
  const calcBtn = document.getElementById('cc-calc-btn');
  let mode = 'cc-slab';

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      panels.forEach(p => p.classList.remove('active'));
      tab.classList.add('active');
      mode = tab.getAttribute('data-panel');
      document.getElementById(mode).classList.add('active');
      calculate();
    });
  });

  const fmtC = v => '$' + Math.round(v).toLocaleString('en-US');
  const fmtN = (v,d=2) => Number(v).toFixed(d);

  function calculate() {
    const price  = parseFloat(document.getElementById('cc_price').value)  || 160;
    const wastePct = parseFloat(document.getElementById('cc_waste').value) || 10;
    let cf = 0;

    if (mode === 'cc-slab') {
      const L = parseFloat(document.getElementById('sl_length').value) || 0;
      const W = parseFloat(document.getElementById('sl_width').value)  || 0;
      const T = parseFloat(document.getElementById('sl_thick').value)  || 0;
      const u = document.getElementById('sl_unit').value;
      const tFt = u === 'in' ? T / 12 : T;
      cf = L * W * tFt;
    } else if (mode === 'cc-footing') {
      const L = parseFloat(document.getElementById('ft_length').value) || 0;
      const W = parseFloat(document.getElementById('ft_width').value)  || 0;
      const D = parseFloat(document.getElementById('ft_depth').value)  || 0;
      cf = L * W * D;
    } else if (mode === 'cc-column') {
      const dia  = parseFloat(document.getElementById('col_dia').value)   || 0;
      const diaU = document.getElementById('col_dia_unit').value;
      const dep  = parseFloat(document.getElementById('col_depth').value) || 0;
      const qty  = parseInt(document.getElementById('col_qty').value)     || 1;
      const dFt  = diaU === 'in' ? dia / 12 : dia;
      const r    = dFt / 2;
      cf = Math.PI * r * r * dep * qty;
    } else { // steps
      const W  = parseFloat(document.getElementById('st_width').value) || 0;
      const ri = parseFloat(document.getElementById('st_rise').value)  || 7;
      const ru = parseFloat(document.getElementById('st_run').value)   || 12;
      const n  = parseInt(document.getElementById('st_count').value)   || 1;
      // pyramid: each step = width × (step_rise_ft) × (cumulative_run_so_far_ft)
      let total = 0;
      for (let i = 1; i <= n; i++) {
        total += W * (ri / 12) * (ru / 12 * i);
      }
      cf = total;
    }

    if (cf <= 0) return;

    const cfWaste  = cf * (1 + wastePct / 100);
    const cyNet    = cf / 27;
    const cyWaste  = cfWaste / 27;
    const wasteAmt = cyWaste - cyNet;
    const cost     = cyWaste * price;

    const setTxt = (id, txt) => {
      const el = document.getElementById(id);
      if (el) el.textContent = txt;
    };

    setTxt('cc-yard', fmtN(cyWaste, 2) + ' yd³');
    setTxt('cc-yards', fmtN(cyWaste, 2) + ' yd³');
    setTxt('cc-cf', fmtN(cfWaste, 1) + ' ft³');
    setTxt('cc-cost', fmtC(cost));
    setTxt('cc-net-yard', fmtN(cyNet, 2) + ' yd³');
    setTxt('cc-net-yards', fmtN(cyNet, 2) + ' yd³');
    setTxt('cc-waste-amt', fmtN(wasteAmt, 2) + ' yd³');
    setTxt('cc-order', fmtN(cyWaste, 2) + ' yd³');

    // bags
    const BAG = {'40':0.30,'50':0.375,'60':0.45,'80':0.60,'90':0.675};
    Object.keys(BAG).forEach(lb => {
      const cnt = Math.ceil(cfWaste / BAG[lb]);
      setTxt('bags-' + lb, cnt.toLocaleString() + ' bags');
    });
    setTxt('cc-order-bag', Math.ceil(cfWaste / 0.60).toLocaleString() + ' × 80 lb bags');
    setTxt('cc-order-bags', Math.ceil(cfWaste / 0.60).toLocaleString() + ' × 80 lb bags');

    setTxt('cc-res-sub', fmtN(cf, 2) + ' ft³ net · ' + fmtN(cyNet, 2) + ' yd³ + ' + wastePct + '% waste');
  }

  // auto-calc
  document.querySelectorAll('.cc-field input, .cc-field select').forEach(el => {
    el.addEventListener('input',  calculate);
    el.addEventListener('change', calculate);
    el.addEventListener('keyup', calculate);
  });
  calcBtn.addEventListener('click', calculate);
  calculate();

  // TOC
  const tocLinks = document.querySelectorAll('.cc-toc-list a');
  const sections = [];
  tocLinks.forEach(link => {
    const id = link.getAttribute('href').replace('#','');
    const sec = document.getElementById(id);
    if (sec) sections.push({ link, sec });
  });
  function updateTOC() {
    const y = window.scrollY + 130;
    let active = sections[0];
    sections.forEach(s => { if(s.sec && s.sec.getBoundingClientRect().top + window.scrollY <= y) active = s; });
    tocLinks.forEach(l => l.classList.remove('cc-active'));
    if (active) active.link.classList.add('cc-active');
  }
  window.addEventListener('scroll', updateTOC, {passive:true});
  updateTOC();

  // FAQ
  document.querySelectorAll('.cc-faq-q').forEach(q => {
    q.addEventListener('click', function () {
      const item = this.closest('.cc-faq-item');
      const wasOpen = item.classList.contains('open');
      document.querySelectorAll('.cc-faq-item').forEach(i => i.classList.remove('open'));
      if (!wasOpen) item.classList.add('open');
    });
  });
});
</script>

<?php require_once '../includes/footer.php'; ?>
