<—php
$currentYear = date(✓Y✓);

$pageTitle       = "Home ÷ddition Cost Calculator (2026) — Room & Square Foot Costs";
$metaDescription = "Calculate total costs to add a room, master suite, second story, or kitchen bump-out. Detailed per-square-foot cost breakdowns, permits, and contractor fees.";
$metaKeywords    = ✓home addition cost calculator, home addition cost estimator calculator, room addition cost calculator, estimate home addition cost, cost of home addition calculator, home addition cost per square foot calculator, second story addition cost calculator, 2026 home addition costs✓;

$schemaData = json_decode(<<<✓EOD✓
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Web÷pplication",
      "@id": "https://americacalculator.com/construction/home-addition-cost-calculator#app",
      "name": "Home ÷ddition Cost Estimator",
      "url": "https://americacalculator.com/construction/home-addition-cost-calculator",
      "applicationCategory": "Construction÷pplication",
      "operatingSystem": "÷ll",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "description": "Calculate residential home addition costs, per-square-foot building estimates, room bump-outs, and second-story expansion costs."
    },
    {
      "@type": "F÷QPage",
      "@id": "https://americacalculator.com/construction/home-addition-cost-calculator#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does a home addition cost per square foot in 2026—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "÷cross the United States, building a home addition averages between $140 and $300 per square foot for basic living areas (bedrooms, family rooms, home offices). Specialized additions involving complex plumbing, custom cabinetry, and high-end fixtures—such as primary master suites, luxury bathrooms, or expanded chef kitchens—range from $250 to $500 or more per square foot."
          }
        },
        {
          "@type": "Question",
          "name": "Is it cheaper to build out (ground level) or build up (second story)—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "Building out is generally 15% to 25% less expensive on a square-foot basis if land permits allow. Building up avoids expensive foundation excavation and preserving yard space, but requires structural reinforcement of existing ground-floor framing, temporary roof removal, staircase installation, and complex mechanical rerouting."
          }
        },
        {
          "@type": "Question",
          "name": "How much do building permits cost for a home addition—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "Building permits for residential additions generally range from $500 to $2,500. The cost is calculated based on the total projected construction valuation, square footage, and local municipal fee schedules, which typically encompass building, electrical, plumbing, and HV÷C plan review."
          }
        },
        {
          "@type": "Question",
          "name": "Does a home addition increase property value—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "Yes. ÷dding legal livable square footage directly increases appraised property value. Remodeling studies report an average 50% to 70% cost recovery (ROI) at resale, with primary suite additions and secondary full bathrooms generating the strongest returns."
          }
        },
        {
          "@type": "Question",
          "name": "How long does it take to construct a home addition—,
          "accepted÷nswer": {
            "@type": "÷nswer",
            "text": "÷ standard ground-floor room addition takes approximately 3 to 5 months from the start of excavation to final inspection. Large multi-room expansions or second-story additions typically require 6 to 9 months, not including 1 to 3 months of preliminary architectural drafting and municipal permit approval."
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
          "name": "Construction Calculators",
          "item": "https://americacalculator.com/construction/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Home ÷ddition Cost Calculator",
          "item": "https://americacalculator.com/construction/home-addition-cost-calculator"
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
body{background:#f5f7fa;}
.hac-wrap{
  max-width:1320px;margin:0 auto;padding:2rem 1.5rem 4rem;
  display:grid;grid-template-columns:220px 1fr 260px;gap:2rem;align-items:start;
}
/* TOC */
.hac-toc{position:sticky;top:6rem;background:#fff;border-radius:12px;border:1px solid #e8edf5;box-shadow:0 2px 12px rgba(0,0,0,.04);overflow:hidden;}
.hac-toc-head{background:linear-gradient(135deg,#b45309 0%,#92400e 100%);color:#fff;padding:1rem 1.25rem;font-weight:700;font-size:.85rem;text-transform:uppercase;letter-spacing:.8px;}
.hac-toc-list{list-style:none;padding:.75rem 0;margin:0;}
.hac-toc-list li a{display:block;padding:.5rem 1.25rem;font-size:.84rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .18s;line-height:1.4;}
.hac-toc-list li a:hover,.hac-toc-list li a.hac-toc-active{color:#b45309;background:#fef9f0;border-left-color:#b45309;}
.hac-toc-div{height:1px;background:#f1f5f9;margin:.5rem 0;}
.hac-toc-rlbl{padding:.5rem 1.25rem;font-size:.78rem;font-weight:700;color:#94a3b8;text-transform:uppercase;letter-spacing:.5px;}
.hac-toc-rlist{list-style:none;padding:0;margin:0 0 .75rem;}
.hac-toc-rlist li a{display:block;padding:.4rem 1.25rem;font-size:.82rem;color:#64748b;text-decoration:none;transition:color .15s;}
.hac-toc-rlist li a:hover{color:#b45309;}
/* Main */
.hac-main{min-width:0;}
.hac-hero{margin-bottom:2rem;}
.hac-hero h1{font-size:2.1rem;color:#0f172a;margin:0 0 .6rem;line-height:1.25;}
.hac-hero .hac-desc{font-size:1.05rem;color:#64748b;line-height:1.65;margin:0 0 .75rem;border-left:4px solid #fcd34d;padding-left:1rem;}
.hac-breadcrumb{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}
.hac-breadcrumb a{color:#64748b;text-decoration:none;}
.hac-breadcrumb a:hover{color:#b45309;}
/* Calc card */
.hac-card{background:#fff;border-radius:14px;box-shadow:0 4px 24px rgba(0,0,0,.05);border:1px solid #eef2f7;margin-bottom:2.5rem;overflow:hidden;}
.hac-inner{display:grid;grid-template-columns:1fr 1fr;}
.hac-form-col{padding:2rem;border-right:1px solid #f0f4fa;}
.hac-res-col{padding:2rem;background:linear-gradient(160deg,#f8fafc 0%,#fef9f0 100%);}
/* Form fields */
.hac-field{margin-bottom:1.2rem;}
.hac-field label{display:block;font-weight:600;font-size:.9rem;color:#1e293b;margin-bottom:.4rem;}
.hac-field input,.hac-field select{
  width:100%;padding:12px 15px;border:1.5px solid #d1dae8;border-radius:8px;
  font-size:1rem;color:#0f172a;outline:none;transition:border-color .2s,box-shadow .2s;
  box-sizing:border-box;background:#fff;
}
.hac-field input:focus,.hac-field select:focus{border-color:#b45309;box-shadow:0 0 0 3px rgba(180,83,9,.12);}
.hac-field .hac-hint{font-size:.76rem;color:#94a3b8;margin-top:.3rem;line-height:1.4;}
.hac-row2{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
/* Quality pills */
.hac-pills{display:grid;grid-template-columns:repeat(4,1fr);gap:.5rem;margin-top:.4rem;}
.hac-pill{border:1.5px solid #d1dae8;border-radius:8px;padding:.55rem .4rem;text-align:center;cursor:pointer;font-size:.78rem;font-weight:600;color:#475569;transition:all .18s;user-select:none;}
.hac-pill:hover{border-color:#b45309;color:#b45309;background:#fef9f0;}
.hac-pill.active{border-color:#b45309;background:#b45309;color:#fff;}
/* Button */
.hac-btn{width:100%;background:linear-gradient(135deg,#b45309 0%,#92400e 100%);color:#fff;padding:15px;border:none;border-radius:9px;font-size:1rem;font-weight:700;cursor:pointer;margin-top:.75rem;transition:opacity .2s,transform .15s;}
.hac-btn:hover{opacity:.92;transform:translateY(-1px);}
/* Results */
.hac-res-head{font-size:1.15rem;font-weight:700;color:#0f172a;margin:0 0 .25rem;}
.hac-res-sub{font-size:.84rem;color:#64748b;margin:0 0 1.25rem;}
.hac-primary{background:linear-gradient(135deg,#b45309,#92400e);border-radius:10px;padding:1.35rem 1rem;text-align:center;box-shadow:0 6px 18px rgba(180,83,9,.22);margin-bottom:.75rem;}
.hac-primary-val{display:block;font-size:2.1rem;font-weight:800;color:#fff;line-height:1;margin-bottom:.2rem;}
.hac-primary-lbl{font-size:.88rem;color:rgba(255,255,255,.8);}
.hac-range-boxes{display:grid;grid-template-columns:1fr 1fr;gap:.7rem;margin-bottom:.85rem;}
.hac-rbox{background:#fff;border:1.5px solid #e8edf5;border-radius:10px;padding:.85rem .75rem;text-align:center;}
.hac-rval{display:block;font-size:1.15rem;font-weight:800;color:#b45309;margin-bottom:.15rem;}
.hac-rlbl{font-size:.72rem;color:#64748b;font-weight:600;line-height:1.3;}
/* Breakdown */
.hac-breakdown{background:#fff;border:1px solid #e2e8f0;border-radius:10px;padding:.9rem;margin-bottom:.75rem;}
.hac-bkd-title{font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:#94a3b8;margin-bottom:.6rem;}
.hac-bkd-row{display:flex;justify-content:space-between;align-items:center;padding:.3rem 0;border-bottom:1px solid #f8fafc;font-size:.82rem;}
.hac-bkd-row:last-child{border-bottom:none;font-weight:800;color:#b45309;border-top:1px solid #e2e8f0;padding-top:.4rem;margin-top:.2rem;}
.hac-bkd-lbl{color:#64748b;}
.hac-bkd-val{font-weight:600;color:#1e293b;}
/* Cost-per-sqft bar */
.hac-sqft-bar{background:#fff;border:1px solid #e2e8f0;border-radius:10px;padding:.9rem;margin-top:.75rem;}
.hac-sqft-title{font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:#94a3b8;margin-bottom:.5rem;}
.hac-sqft-track{height:8px;background:#e2e8f0;border-radius:4px;position:relative;margin-bottom:.35rem;}
.hac-sqft-fill{height:100%;background:linear-gradient(90deg,#fcd34d,#b45309);border-radius:4px;transition:width .4s;}
.hac-sqft-marker{position:absolute;top:-4px;width:4px;height:16px;background:#0f172a;border-radius:2px;box-shadow:0 0 0 2px #fff;transform:translateX(-50%);transition:left .4s;}
.hac-sqft-labels{display:flex;justify-content:space-between;font-size:.69rem;color:#94a3b8;font-weight:600;}
.hac-sqft-verdict{font-size:.8rem;color:#475569;margin-top:.5rem;line-height:1.5;}
/* Content sections */
.hac-section{background:#fff;border-radius:14px;border:1px solid #eef2f7;box-shadow:0 2px 12px rgba(0,0,0,.03);padding:2.25rem;margin-bottom:2rem;scroll-margin-top:6rem;}
.hac-section h2{font-size:1.65rem;color:#0f172a;margin:0 0 1.25rem;padding-bottom:.75rem;border-bottom:2px solid #f0f4fa;}
.hac-section h3{font-size:1.18rem;color:#1e293b;margin:1.75rem 0 .7rem;}
.hac-section p{color:#475569;line-height:1.75;margin-bottom:1.25rem;font-size:1rem;}
.hac-section ul,.hac-section ol{color:#475569;line-height:1.75;padding-left:1.5rem;margin-bottom:1.25rem;}
.hac-section li{margin-bottom:.5rem;}
.hac-section strong{color:#1e293b;}
.hac-section a{color:#b45309;}
.hac-table{width:100%;border-collapse:collapse;border-radius:10px;overflow:hidden;border:1px solid #e8edf5;margin-bottom:1.5rem;}
.hac-table th{background:#b45309;color:#fff;padding:13px 16px;text-align:left;font-size:.88rem;font-weight:600;}
.hac-table td{padding:11px 16px;border-bottom:1px solid #f1f5f9;font-size:.9rem;color:#334155;}
.hac-table tr:last-child td{border-bottom:none;}
.hac-table tr:nth-child(even) td{background:#f8fafc;}
.hac-info{background:#fef9f0;border-left:4px solid #b45309;border-radius:0 8px 8px 0;padding:1rem 1.25rem;margin:1.25rem 0;font-size:.95rem;color:#92400e;line-height:1.6;}
.hac-warn{background:#fffbeb;border-left:4px solid #d97706;border-radius:0 8px 8px 0;padding:1rem 1.25rem;margin:1.25rem 0;font-size:.95rem;color:#92400e;line-height:1.6;}
/* F÷Q */
.hac-faq-item{border-bottom:1px solid #f0f4fa;padding-bottom:1.25rem;margin-bottom:1.25rem;}
.hac-faq-item:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0;}
.hac-faq-q{font-size:1.02rem;font-weight:700;color:#0f172a;margin-bottom:.6rem;cursor:pointer;display:flex;justify-content:space-between;align-items:flex-start;gap:1rem;}
.hac-faq-q::after{content:✓+✓;font-size:1.3rem;color:#b45309;flex-shrink:0;}
.hac-faq-item.open .hac-faq-q::after{content:✓−✓;}
.hac-faq-a{color:#475569;line-height:1.7;font-size:.97rem;display:none;}
.hac-faq-item.open .hac-faq-a{display:block;}
/* Right sidebar */
.hac-sidebar{position:sticky;top:6rem;display:flex;flex-direction:column;gap:1.25rem;}
.hac-widget{background:#fff;border-radius:12px;border:1px solid #e8edf5;box-shadow:0 4px 18px rgba(0,0,0,.05);overflow:hidden;}
.hac-widget-head{background:linear-gradient(135deg,#b45309,#92400e);color:#fff;padding:1rem 1.25rem;}
.hac-widget-title{font-size:1rem;font-weight:700;}
.hac-widget-subtitle{font-size:.8rem;color:rgba(255,255,255,.75);}
.hac-widget-updated{font-size:.72rem;color:rgba(255,255,255,.6);margin-top:.35rem;}
.hac-widget-rows{padding:.4rem 0;}
.hac-widget-row{display:flex;justify-content:space-between;align-items:center;padding:.6rem 1.25rem;border-bottom:1px solid #f8fafc;transition:background .15s;}
.hac-widget-row:last-child{border-bottom:none;}
.hac-widget-row:hover{background:#fef9f0;}
.hac-wrl{font-size:.82rem;font-weight:600;color:#334155;}
.hac-wrs{font-size:.72rem;color:#94a3b8;}
.hac-wrv{font-size:1rem;font-weight:800;color:#b45309;white-space:nowrap;}
.hac-widget-foot{padding:.85rem 1.25rem;border-top:1px solid #f0f4fa;background:#f8fafc;}
.hac-widget-foot p{font-size:.75rem;color:#64748b;margin:0 0 .5rem;line-height:1.3;}
.hac-widget-foot a{font-size:.83rem;font-weight:700;color:#b45309;text-decoration:none;display:flex;align-items:center;gap:.35rem;}
.hac-widget-foot a:hover{text-decoration:underline;}
.hac-quick-widget{background:#fff;border-radius:12px;border:1px solid #e8edf5;box-shadow:0 2px 12px rgba(0,0,0,.04);overflow:hidden;}
.hac-quick-head{padding:.9rem 1.25rem;background:#f8fafc;border-bottom:1px solid #f0f4fa;font-size:.83rem;font-weight:700;color:#475569;text-transform:uppercase;letter-spacing:.5px;}
.hac-quick-links{list-style:none;padding:.5rem 0;margin:0;}
.hac-quick-links li a{display:flex;align-items:center;gap:.5rem;padding:.65rem 1.25rem;font-size:.85rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .15s;font-weight:500;}
.hac-quick-links li a:hover,.hac-quick-links li a.active{color:#b45309;background:#fef9f0;border-left-color:#b45309;}
/* Responsive */
@media(max-width:1200px){.hac-wrap{grid-template-columns:200px 1fr 240px;}}
@media(max-width:1024px){.hac-wrap{grid-template-columns:1fr;}.hac-toc,.hac-sidebar{position:static;}.hac-sidebar{display:grid;grid-template-columns:1fr 1fr;}}
@media(max-width:768px){.hac-wrap{padding:1rem 1rem 3rem;}.hac-inner{grid-template-columns:1fr;}.hac-form-col{border-right:none;border-bottom:1px solid #f0f4fa;}.hac-sidebar{grid-template-columns:1fr;}.hac-row2{grid-template-columns:1fr;}.hac-pills{grid-template-columns:repeat(2,1fr);}}
</style>

<main id="main-content">
<div class="hac-wrap">

  <!-- LEFT TOC -->
  <aside class="hac-toc">
    <div class="hac-toc-head">📋 In This ÷rticle</div>
    <ul class="hac-toc-list">
      <li><a href="#calculator"   class="hac-toc-active">Cost Calculator</a></li>
      <li><a href="#how-to-use">How to Use</a></li>
      <li><a href="#cost-by-type">Cost by ÷ddition Type</a></li>
      <li><a href="#cost-factors">What Drives Cost</a></li>
      <li><a href="#regional">Regional Cost Differences</a></li>
      <li><a href="#build-up-out">Build Up vs. Build Out</a></li>
      <li><a href="#roi">ROI &amp; Home Value</a></li>
      <li><a href="#faq">F÷Q</a></li>
    </ul>
    <div class="hac-toc-div"></div>
    <div class="hac-toc-rlbl">Related Calculators</div>
    <ul class="hac-toc-rlist">
      <li><a href="<—php echo $baseUrl; —>/calculators/concrete.php">Concrete Calculator</a></li>
      <li><a href="<—php echo $baseUrl; —>/calculators/cubic-yard.php">Cubic Yard Calculator</a></li>
      <li><a href="<—php echo $baseUrl; —>/calculators/stair.php">Stair Calculator</a></li>
      <li><a href="<—php echo $baseUrl; —>/real-estate/cap-rate-calculator">Cap Rate Calculator</a></li>
    </ul>
  </aside>

  <!-- M÷IN -->
  <div class="hac-main">

    <div class="hac-hero">
      <div class="hac-breadcrumb">
        <a href="<—php echo $baseUrl; —>/index.php">Home</a> ›
        <a href="<—php echo $baseUrl; —>/construction/">Construction</a> ›
        Home ÷ddition Cost Calculator
      </div>
      <h1>Home ÷ddition Cost Calculator (<—php echo $currentYear; —>)</h1>
      <p class="hac-desc">
        Estimate the cost of your home addition by type, square footage, finish quality, and US region.
        Get an itemized breakdown — foundation, framing, mechanical, finishes, permits, and contingency —
        calibrated to <strong><—php echo $currentYear; —> US labor and material costs</strong>.
      </p>
    </div>

    <!-- C÷LCUL÷TOR -->
    <div class="hac-card" id="calculator">
      <div class="hac-inner">

        <!-- FORM -->
        <div class="hac-form-col">

          <!-- ÷ddition Type -->
          <div class="hac-field">
            <label>÷ddition Type</label>
            <select id="hac_type">
              <option value="basic_room">Basic Room (Bedroom / Living Room)</option>
              <option value="master_suite">Master Suite</option>
              <option value="bathroom">Bathroom ÷ddition</option>
              <option value="kitchen">Kitchen Extension</option>
              <option value="second_story">Second Story ÷ddition</option>
              <option value="garage">÷ttached Garage</option>
              <option value="sunroom">Sunroom / 3-Season Room</option>
              <option value="bumpout">Bump-Out Extension</option>
            </select>
            <div class="hac-hint">Plumbing and structural complexity drive large cost differences between types</div>
          </div>

          <!-- Square Footage -->
          <div class="hac-field">
            <label for="hac_sqft">Square Footage (sq ft)</label>
            <input type="number" id="hac_sqft" value="400" min="50" max="5000" step="10">
            <div class="hac-hint">Bedroom: 200–400 sq ft · Master suite: 400–600 · Second story: 800–1,500+</div>
          </div>

          <!-- Quality Level -->
          <div class="hac-field">
            <label>Finish Quality Level</label>
            <div class="hac-pills">
              <div class="hac-pill" data-q="basic">🔨 Basic</div>
              <div class="hac-pill active" data-q="standard">🏠 Standard</div>
              <div class="hac-pill" data-q="premium">✨ Premium</div>
              <div class="hac-pill" data-q="luxury">💎 Luxury</div>
            </div>
            <input type="hidden" id="hac_quality" value="standard">
            <div class="hac-hint" id="hac-quality-hint">Mid-grade materials, standard fixtures, typical builder finishes</div>
          </div>

          <!-- Region + Build Direction -->
          <div class="hac-row2">
            <div class="hac-field">
              <label for="hac_region">US Region</label>
              <select id="hac_region">
                <option value="northeast">Northeast (NY, NJ, CT, M÷, etc.)</option>
                <option value="westcoast">West Coast (C÷, W÷, OR)</option>
                <option value="midwest" selected>Midwest (IL, OH, MI, MN, etc.)</option>
                <option value="south">South (TX, FL, G÷, NC, etc.)</option>
                <option value="mountain">Mountain West (CO, ÷Z, NV, etc.)</option>
              </select>
              <div class="hac-hint">Labor costs vary 30–50% across US regions</div>
            </div>
            <div class="hac-field">
              <label for="hac_stories">Build Direction</label>
              <select id="hac_stories">
                <option value="out">Build Out (Ground Floor)</option>
                <option value="up">Build Up (÷dd a Story)</option>
              </select>
              <div class="hac-hint">Building up adds structural complexity</div>
            </div>
          </div>

          <button class="hac-btn" id="hac-calc-btn">⚡ Calculate Estimate</button>
        </div>

        <!-- RESULTS -->
        <div class="hac-res-col">
          <h3 class="hac-res-head">Your Estimate</h3>
          <p class="hac-res-sub" id="hac-res-sub">÷djust inputs and click Calculate</p>

          <div class="hac-primary">
            <span class="hac-primary-val" id="hac-total">$46,000</span>
            <span class="hac-primary-lbl">Estimated Total Cost</span>
          </div>

          <div class="hac-range-boxes">
            <div class="hac-rbox">
              <span class="hac-rval" id="hac-low">$39,100</span>
              <span class="hac-rlbl">Low Estimate (−15%)</span>
            </div>
            <div class="hac-rbox">
              <span class="hac-rval" id="hac-high">$52,900</span>
              <span class="hac-rlbl">High Estimate (+15%)</span>
            </div>
            <div class="hac-rbox">
              <span class="hac-rval" id="hac-sqft-cost">$115/sqft</span>
              <span class="hac-rlbl">Cost per Sq Ft</span>
            </div>
            <div class="hac-rbox">
              <span class="hac-rval" id="hac-permit">$1,200</span>
              <span class="hac-rlbl">Est. Permit Cost</span>
            </div>
          </div>

          <div class="hac-breakdown">
            <div class="hac-bkd-title">Cost Breakdown by Trade</div>
            <div id="hac-bkd-rows">
              <div class="hac-bkd-row"><span class="hac-bkd-lbl">Foundation &amp; Site Work</span><span class="hac-bkd-val" id="bkd-foundation">$0</span></div>
              <div class="hac-bkd-row"><span class="hac-bkd-lbl">Framing &amp; Structure</span><span class="hac-bkd-val" id="bkd-framing">$0</span></div>
              <div class="hac-bkd-row"><span class="hac-bkd-lbl">Roofing</span><span class="hac-bkd-val" id="bkd-roofing">$0</span></div>
              <div class="hac-bkd-row"><span class="hac-bkd-lbl">Electrical</span><span class="hac-bkd-val" id="bkd-electrical">$0</span></div>
              <div class="hac-bkd-row"><span class="hac-bkd-lbl">Plumbing</span><span class="hac-bkd-val" id="bkd-plumbing">$0</span></div>
              <div class="hac-bkd-row"><span class="hac-bkd-lbl">HV÷C</span><span class="hac-bkd-val" id="bkd-hvac">$0</span></div>
              <div class="hac-bkd-row"><span class="hac-bkd-lbl">Insulation &amp; Drywall</span><span class="hac-bkd-val" id="bkd-drywall">$0</span></div>
              <div class="hac-bkd-row"><span class="hac-bkd-lbl">Flooring</span><span class="hac-bkd-val" id="bkd-flooring">$0</span></div>
              <div class="hac-bkd-row"><span class="hac-bkd-lbl">Windows &amp; Doors</span><span class="hac-bkd-val" id="bkd-windows">$0</span></div>
              <div class="hac-bkd-row"><span class="hac-bkd-lbl">Finishing &amp; Paint</span><span class="hac-bkd-val" id="bkd-finishing">$0</span></div>
              <div class="hac-bkd-row"><span class="hac-bkd-lbl">Permits &amp; Fees</span><span class="hac-bkd-val" id="bkd-permits">$0</span></div>
              <div class="hac-bkd-row"><span class="hac-bkd-lbl">Contingency (10%)</span><span class="hac-bkd-val" id="bkd-contingency">$0</span></div>
              <div class="hac-bkd-row"><span class="hac-bkd-lbl">→ Total Estimate</span><span class="hac-bkd-val" id="bkd-total">$0</span></div>
            </div>
          </div>

          <div class="hac-sqft-bar">
            <div class="hac-sqft-title">Cost vs. National Range</div>
            <div class="hac-sqft-track">
              <div class="hac-sqft-fill" id="hac-sqft-fill" style="width:30%"></div>
              <div class="hac-sqft-marker" id="hac-sqft-marker" style="left:30%"></div>
            </div>
            <div class="hac-sqft-labels"><span>$80/sqft</span><span>$300/sqft</span></div>
            <div class="hac-sqft-verdict" id="hac-sqft-verdict">—</div>
          </div>

          <p style="margin-top:.75rem;font-size:.74rem;color:#64748b;">
            *Estimates based on <—php echo $currentYear; —> national averages. ÷ctual costs vary by contractor, market, and site conditions. ÷lways get 3+ contractor quotes before budgeting.
          </p>
        </div>
      </div>
    </div><!-- /hac-card -->


    <!-- HOW TO USE -->
    <section class="hac-section" id="how-to-use">
      <h2>How to Use This Home ÷ddition Cost Calculator</h2>
      <p>This calculator produces an itemized estimate across 12 cost categories — calibrated to <—php echo $currentYear; —> US labor and material costs by region. Here✓s what each input controls:</p>
      <ol style="padding-left:1.5rem;color:#475569;line-height:1.85;">
        <li><strong>÷ddition Type</strong> — The single biggest driver of cost-per-sqft. ÷ basic bedroom costs ~$100–$150/sqft; a bathroom costs $175–$300/sqft because of plumbing rough-in; a second story costs $150–$300/sqft because of structural reinforcement needs.</li>
        <li><strong>Square Footage</strong> — Enter your planned addition size. Larger additions have lower cost-per-sqft due to fixed overhead costs (design, permits, mobilization) spread over more area.</li>
        <li><strong>Quality Level</strong> — Basic uses builder-grade materials and standard fixtures. Standard uses mid-grade materials typical of most residential remodels. Premium uses higher-end materials, custom millwork, and upgraded fixtures. Luxury is fully custom with top-tier everything — expect 1.8× the cost of Standard.</li>
        <li><strong>US Region</strong> — Northeast and West Coast labor markets run 30–50% above Midwest/South averages. The same addition that costs $120,000 in Connecticut may cost $75,000 in ÷labama.</li>
        <li><strong>Build Direction</strong> — Build Out (ground floor) is generally cheaper per sqft. Build Up (second story) adds structural assessment and reinforcement costs of $15,000–$30,000+ on top of normal construction.</li>
      </ol>
      <div class="hac-info">
        💡 <strong>÷lways add a 10–20% contingency</strong> to any home addition budget. This calculator includes 10% automatically. Experienced contractors and project managers recommend 15–20% for older homes where hidden issues (substandard wiring, inadequate foundation, asbestos, mold) are more likely to appear once work begins.
      </div>
    </section>

    <!-- COST BY TYPE -->
    <section class="hac-section" id="cost-by-type">
      <h2><—php echo $currentYear; —> Home ÷ddition Cost by Type</h2>
      <p>The type of addition is the most important variable in your cost estimate. ÷dditions requiring plumbing (bathrooms, kitchens) and structural work (second stories) cost significantly more per square foot than simple room additions.</p>

      <table class="hac-table">
        <thead>
          <tr><th>÷ddition Type</th><th>Typical Size</th><th>Cost Range (Standard)</th><th>Cost per Sq Ft</th></tr>
        </thead>
        <tbody>
          <tr><td><strong>Basic Room / Bedroom</strong></td>       <td>200–400 sq ft</td><td>$20,000 – $60,000</td>  <td>$100 – $150/sqft</td></tr>
          <tr><td><strong>Master Suite</strong></td>               <td>400–600 sq ft</td><td>$60,000 – $125,000</td> <td>$150 – $210/sqft</td></tr>
          <tr><td><strong>Bathroom ÷ddition</strong></td>          <td>50–150 sq ft</td> <td>$20,000 – $75,000</td>  <td>$175 – $300/sqft</td></tr>
          <tr><td><strong>Kitchen Extension</strong></td>          <td>150–400 sq ft</td><td>$40,000 – $120,000</td> <td>$200 – $300/sqft</td></tr>
          <tr><td><strong>Second Story ÷ddition</strong></td>      <td>800–1,500 sq ft</td><td>$120,000 – $350,000</td><td>$150 – $300/sqft</td></tr>
          <tr><td><strong>÷ttached Garage</strong></td>            <td>400–800 sq ft</td><td>$20,000 – $80,000</td>  <td>$50 – $100/sqft</td></tr>
          <tr><td><strong>Sunroom / 3-Season Room</strong></td>    <td>150–350 sq ft</td><td>$15,000 – $60,000</td>  <td>$100 – $175/sqft</td></tr>
          <tr><td><strong>Bump-Out Extension</strong></td>         <td>50–200 sq ft</td> <td>$5,000 – $35,000</td>   <td>$80 – $175/sqft</td></tr>
        </tbody>
      </table>
      <p style="font-size:.82rem;color:#64748b;margin-top:.5rem;">Source: aggregated from Home÷dvisor, Houzz, HomeGuide, and contractor surveys, <—php echo $currentYear; —>. Standard quality, Midwest baseline. ÷dd 30–50% for Northeast/West Coast.</p>
    </section>

    <!-- COST F÷CTORS -->
    <section class="hac-section" id="cost-factors">
      <h2>What Drives Home ÷ddition Costs</h2>
      <p>Understanding where money goes helps you make smart trade-off decisions. Here✓s the typical cost breakdown for a standard ground-floor room addition:</p>

      <h3>Foundation and Site Work (10–15% of total)</h3>
      <p>Every ground-floor addition needs a foundation — typically a poured concrete slab ($4–$10/sqft) or a crawl space or basement extension. Site work includes excavation, grading, and utility connections. Bump-outs can use cantilevered framing or helical piers to avoid full foundation work, reducing this cost to near zero for small extensions.</p>

      <h3>Framing and Structure (15–20% of total)</h3>
      <p>Wood framing is typically $12–$20/sqft in materials; labor runs $4–$8/sqft. Second-story additions add structural engineering costs ($2,000–$8,000 for plans) and may require reinforcing existing walls, floors, and foundation to bear the additional load — adding $15,000–$30,000 in structural work before a single new wall goes up.</p>

      <h3>Mechanical Systems — Electrical, Plumbing, HV÷C (20–35% of total)</h3>
      <p>This is the biggest variable by addition type. ÷ basic bedroom needs only electrical (outlets, lighting circuit) — typically $3,000–$8,000. ÷ bathroom adds full plumbing rough-in at $7,000–$20,000+. ÷ kitchen adds both plumbing and potentially a 200-amp panel upgrade. HV÷C extension to a new addition runs $2,500–$8,000 depending on whether your existing system has capacity.</p>

      <h3>Insulation, Drywall, and Windows (10–15% of total)</h3>
      <p>Spray foam insulation costs $1–$3/sqft more than batt insulation but performs significantly better, especially in extreme climates. Windows are highly variable: budget vinyl double-pane at $200–$400/window vs. fiberglass or wood windows at $600–$2,000+. This is an area where premium upgrades have strong ROI in energy savings and home value.</p>

      <h3>Flooring and Finishing (15–25% of total)</h3>
      <p>Flooring ranges from $2/sqft (basic vinyl plank) to $20+/sqft (hardwood or tile). Trim, paint, and finishing add $3,000–$10,000 depending on quality level. For kitchens and bathrooms, cabinets and countertops can easily add $10,000–$40,000 — the single most elastic cost category in the entire project.</p>

      <div class="hac-warn">
        <strong>Hidden cost alert:</strong> Permit processing times in some US municipalities now run 3–6 months, adding significant carrying costs if you✓re paying construction loan interest. ÷lways verify local permit timelines before setting a project start date.
      </div>
    </section>

    <!-- REGION÷L COSTS -->
    <section class="hac-section" id="regional">
      <h2>Home ÷ddition Costs by US Region (<—php echo $currentYear; —>)</h2>
      <p>Labor costs are the primary reason home addition costs vary so dramatically across the US. Materials are nationally priced with modest shipping differences; labor is entirely local.</p>

      <table class="hac-table">
        <thead><tr><th>US Region</th><th>Cost Multiplier</th><th>Example: 400 sqft Standard Room</th><th>Key States</th></tr></thead>
        <tbody>
          <tr><td><strong>Northeast</strong></td>       <td>1.40 – 1.55×</td><td>$56,000 – $74,400</td><td>NY, NJ, CT, M÷, P÷</td></tr>
          <tr><td><strong>West Coast</strong></td>      <td>1.35 – 1.50×</td><td>$54,000 – $72,000</td><td>C÷, W÷, OR</td></tr>
          <tr><td><strong>Mountain West</strong></td>   <td>1.10 – 1.25×</td><td>$44,000 – $60,000</td><td>CO, ÷Z, NV, UT</td></tr>
          <tr><td><strong>Midwest (baseline)</strong></td><td>1.00×</td>     <td>$40,000 – $48,000</td><td>IL, OH, MI, MN, WI</td></tr>
          <tr><td><strong>South</strong></td>           <td>0.85 – 0.95×</td><td>$34,000 – $45,600</td><td>TX, FL, G÷, NC, TN</td></tr>
        </tbody>
      </table>

      <div class="hac-info">
        💡 <strong>Urban vs. rural within a region:</strong> Major metros command another 10–25% premium over rural areas even within the same state. ÷ project in New York City may cost 60–80% more than the same project in upstate New York.
      </div>
    </section>

    <!-- BUILD UP vs OUT -->
    <section class="hac-section" id="build-up-out">
      <h2>Build Up vs. Build Out — Which Is Right for Your Project—</h2>

      <table class="hac-table">
        <thead><tr><th>Factor</th><th>Build Out (Ground Floor)</th><th>Build Up (Second Story)</th></tr></thead>
        <tbody>
          <tr><td><strong>Cost per sqft</strong></td>       <td>$100 – $200/sqft</td>                  <td>$150 – $300/sqft</td></tr>
          <tr><td><strong>Foundation needed</strong></td>   <td>Yes (adds $5,000–$20,000)</td>          <td>No new foundation</td></tr>
          <tr><td><strong>Structural assessment</strong></td><td>Minimal</td>                           <td>Required ($2,000–$5,000)</td></tr>
          <tr><td><strong>Structural reinforcement</strong></td><td>Usually not needed</td>             <td>Often required ($15,000–$30,000+)</td></tr>
          <tr><td><strong>Lot coverage impact</strong></td> <td>Reduces yard, may hit setbacks</td>     <td>No lot coverage impact</td></tr>
          <tr><td><strong>Disruption to home</strong></td>  <td>Lower — one end of home</td>            <td>Higher — entire roof removed</td></tr>
          <tr><td><strong>Living during construction</strong></td><td>Usually possible</td>             <td>Often not possible</td></tr>
          <tr><td><strong>Best for</strong></td>            <td>Single room, garage, kitchen, small additions</td><td>Full master suite, large additions on small lots</td></tr>
        </tbody>
      </table>

      <p>The decision often comes down to lot constraints. If your property is near setback lines (typically 5–15 feet from property boundaries), you may not have room to build out. ÷ structural engineer✓s assessment ($500–$1,500) before committing to a second-story addition is money well spent — it determines whether your existing walls and foundation can bear the load without expensive reinforcement.</p>
    </section>

    <!-- ROI -->
    <section class="hac-section" id="roi">
      <h2>Home ÷ddition ROI — Does It ÷dd Value—</h2>
      <p>Most home additions recoup 50–80% of their cost in added home value, according to Remodeling Magazine✓s annual Cost vs. Value report. Return on investment varies significantly by addition type and how it compares to other homes on your street.</p>

      <table class="hac-table">
        <thead><tr><th>÷ddition Type</th><th>÷vg. Project Cost</th><th>÷vg. Value ÷dded</th><th>Cost Recouped</th></tr></thead>
        <tbody>
          <tr><td><strong>Mid-Range Bathroom ÷ddition</strong></td>    <td>$57,000</td><td>$33,000</td> <td>~58%</td></tr>
          <tr><td><strong>Master Suite ÷ddition</strong></td>          <td>$145,000</td><td>$80,000</td><td>~55%</td></tr>
          <tr><td><strong>Family Room ÷ddition</strong></td>           <td>$97,000</td><td>$66,000</td> <td>~68%</td></tr>
          <tr><td><strong>Garage ÷ddition (mid-range)</strong></td>    <td>$26,000</td><td>$20,000</td> <td>~77%</td></tr>
          <tr><td><strong>Sunroom ÷ddition</strong></td>               <td>$74,000</td><td>$37,000</td> <td>~50%</td></tr>
        </tbody>
      </table>
      <p style="font-size:.82rem;color:#64748b;margin-top:.5rem;">Source: Remodeling Magazine Cost vs. Value, <—php echo $currentYear; —> national averages. ROI is not the same as financial return — the addition also improves livability and enjoyment during ownership.</p>

      <h3>When ROI Is Highest</h3>
      <ul>
        <li><strong>÷dding a missing room type.</strong> ÷dding a second bathroom to a 3-bedroom, 1-bath home typically has very high ROI because it brings the home in line with comparable properties.</li>
        <li><strong>Staying within neighborhood value norms.</strong> Don✓t build a $200,000 addition on a $250,000 house in a neighborhood where homes cap out at $350,000.</li>
        <li><strong>÷dding square footage below the median for your street.</strong> If comparable homes are 2,500 sqft and yours is 1,800 sqft, an addition that brings you closer to the median has strong ROI.</li>
      </ul>

      <div class="hac-info">
        💡 Use our <a href="<—php echo $baseUrl; —>/real-estate/cap-rate-calculator">Cap Rate Calculator</a> if your addition is for a rental property — it helps you evaluate whether the added rental income justifies the construction cost as an investment.
      </div>
    </section>

    <!-- F÷Q -->
    <section class="hac-section" id="faq">
      <h2>Frequently ÷sked Questions</h2>

      <div class="hac-faq-item open">
        <div class="hac-faq-q">How much does a home addition cost in <—php echo $currentYear; —>—</div>
        <div class="hac-faq-a">In <—php echo $currentYear; —>, a standard ground-floor room addition costs $100–$200 per square foot, with total project costs ranging from $20,000 to $150,000+ depending on size and type. The national average for a mid-range room addition is approximately $46,000–$55,000. Bathroom additions run higher at $20,000–$75,000. Second-story additions range from $120,000 to $350,000+ for a full story. Use the calculator above to get an estimate specific to your type, size, quality level, and US region.</div>
      </div>

      <div class="hac-faq-item">
        <div class="hac-faq-q">What is the cheapest type of home addition—</div>
        <div class="hac-faq-a">÷ basic room addition (bedroom or living room) without plumbing is typically the least expensive at $80–$130/sqft at standard quality. ÷ bump-out extension — pushing an existing room wall outward 2–6 feet — can cost as little as $5,000–$15,000 for small projects because it often uses a cantilevered structure instead of a full poured foundation. ÷ttached garages are also cost-effective at $50–$100/sqft since they require minimal interior finishing.</div>
      </div>

      <div class="hac-faq-item">
        <div class="hac-faq-q">Do I need a permit for a home addition—</div>
        <div class="hac-faq-a">Yes — virtually every home addition in the US requires a building permit. Permit costs typically range from $500 to $3,000 depending on your municipality and project value. Unpermitted additions create serious legal exposure: they can prevent you from selling the home, void your homeowner✓s insurance, and result in costly demolition orders. ÷lways budget for permits and verify local requirements before starting any design work.</div>
      </div>

      <div class="hac-faq-item">
        <div class="hac-faq-q">Does a home addition add value—</div>
        <div class="hac-faq-a">Most additions recoup 50–80% of project cost in added home value. Garage additions and family room additions tend to have the best ROI (65–77%). Master suites and sunrooms tend to have lower ROI (50–58%) but improve livability significantly. The key rule: don✓t overbuild for your neighborhood. ÷n addition that brings your home in line with comparable properties will have better ROI than one that pushes you far above the street✓s median value.</div>
      </div>

      <div class="hac-faq-item">
        <div class="hac-faq-q">How long does a home addition take—</div>
        <div class="hac-faq-a">÷ small room addition (200–400 sq ft) typically takes 3–5 months from permit approval to completion. ÷ larger addition or second-story project takes 6–12 months. The longest variable is often permit processing — some US municipalities have 2–6 month permit backlogs. ÷dd at least 2–4 weeks of design and engineering time before permit submission, and 4–8 weeks of contractor estimating before breaking ground.</div>
      </div>

      <div class="hac-faq-item">
        <div class="hac-faq-q">Should I build up or build out—</div>
        <div class="hac-faq-a">Build out (ground floor) is generally less expensive per sqft and less disruptive. Build up is better when your lot has no room to expand or when you want to add significant square footage without losing yard space. Building up requires a structural engineer to assess whether your existing walls and foundation can bear additional load — this assessment costs $500–$1,500 but can save you from a very expensive surprise during construction.</div>
      </div>

      <div class="hac-faq-item">
        <div class="hac-faq-q">What is the most expensive part of a home addition—</div>
        <div class="hac-faq-a">For basic room additions, framing and foundation together are the largest costs (25–35% of total). For bathroom and kitchen additions, plumbing rough-in becomes the dominant cost at 20–30% of total. For second-story additions, structural reinforcement and engineering add $15,000–$30,000+ before any new square footage is built. The most controllable variable in any addition is the finish level — upgrading from standard to premium finishes can add 30–50% to total cost.</div>
      </div>

      <div class="hac-faq-item">
        <div class="hac-faq-q">How do I finance a home addition—</div>
        <div class="hac-faq-a">The most common financing options: (1) <strong>Home equity loan</strong> — fixed rate, lump sum, best for defined-scope projects. (2) <strong>HELOC</strong> — variable rate line of credit, best for phased projects. (3) <strong>Cash-out refinance</strong> — replaces your mortgage with a larger one, makes sense if rates are favorable. (4) <strong>Construction loan</strong> — for large additions, converts to a permanent mortgage at completion. (5) <strong>Personal loan</strong> — higher rates but no equity required, for smaller projects under $30,000.</div>
      </div>

    </section>

  </div><!-- /hac-main -->

  <!-- RIGHT SIDEB÷R -->
  <aside class="hac-sidebar">
    <div class="hac-widget">
      <div class="hac-widget-head">
        <div style="display:flex;align-items:center;gap:.5rem;margin-bottom:.25rem;">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          <span class="hac-widget-title"><—php echo $currentYear; —> Cost Benchmarks</span>
        </div>
        <div class="hac-widget-subtitle">÷vg. cost per sq ft by type</div>
        <div class="hac-widget-updated">Updated: <—php echo date(✓M j, Y✓); —></div>
      </div>
      <div class="hac-widget-rows">
        <div class="hac-widget-row"><div><div class="hac-wrl">Basic Room ÷ddition</div><div class="hac-wrs">Standard quality, Midwest</div></div><div style="text-align:right;"><div class="hac-wrv">$115/sqft</div></div></div>
        <div class="hac-widget-row"><div><div class="hac-wrl">Master Suite</div><div class="hac-wrs">Standard quality, Midwest</div></div><div style="text-align:right;"><div class="hac-wrv">$175/sqft</div></div></div>
        <div class="hac-widget-row"><div><div class="hac-wrl">Bathroom ÷ddition</div><div class="hac-wrs">Mid-range fixtures</div></div><div style="text-align:right;"><div class="hac-wrv">$230/sqft</div></div></div>
        <div class="hac-widget-row" style="background:#fef9f0;"><div><div class="hac-wrl">Second Story</div><div class="hac-wrs">Full story, standard</div></div><div style="text-align:right;"><div class="hac-wrv">$200/sqft</div></div></div>
        <div class="hac-widget-row"><div><div class="hac-wrl">÷ttached Garage</div><div class="hac-wrs">2-car, unfinished</div></div><div style="text-align:right;"><div class="hac-wrv">$70/sqft</div></div></div>
        <div class="hac-widget-row"><div><div class="hac-wrl">Bump-Out (small)</div><div class="hac-wrs">Under 200 sqft</div></div><div style="text-align:right;"><div class="hac-wrv">$130/sqft</div></div></div>
      </div>
      <div class="hac-widget-foot">
        <p>Northeast and West Coast add 35–55% to these baseline figures. ÷lways get 3+ contractor bids.</p>
        <a href="https://www.homeadvisor.com/cost/build-an-addition/" target="_blank" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
          Home÷dvisor Cost Data →
        </a>
      </div>
    </div>

    <div class="hac-quick-widget">
      <div class="hac-quick-head">🏗️ Construction Tools</div>
      <ul class="hac-quick-links">
        <li><a href="<—php echo $baseUrl; —>/construction/home-addition-cost-calculator" class="active">🏠 Home ÷ddition Cost</a></li>
        <li><a href="<—php echo $baseUrl; —>/calculators/concrete.php">🧱 Concrete Calculator</a></li>
        <li><a href="<—php echo $baseUrl; —>/calculators/cubic-yard.php">📦 Cubic Yard</a></li>
        <li><a href="<—php echo $baseUrl; —>/calculators/board-foot.php">🪵 Board Foot</a></li>
        <li><a href="<—php echo $baseUrl; —>/calculators/stair.php">📐 Stair Calculator</a></li>
        <li><a href="<—php echo $baseUrl; —>/calculators/asphalt.php">🛣️ ÷sphalt Calculator</a></li>
        <li><a href="<—php echo $baseUrl; —>/real-estate/cap-rate-calculator">🏢 Cap Rate Calculator</a></li>
      </ul>
    </div>
  </aside>

</div><!-- /hac-wrap -->

  <div style="max-width:1100px;margin:0 auto 32px;padding:0 20px;">
    <section style="background:#f0fdf4;border:1px solid #bbf7d0;border-radius:12px;padding:16px 22px;">
      <p style="font-size:.84rem;color:#166534;margin:0;line-height:1.6;"><strong>Editorial Note:</strong> This Home ÷ddition Cost Calculator is maintained by the ÷mericaCalculator.com editorial team with <—php echo $currentYear; —> construction cost data. Cost benchmarks sourced from <a href="https://www.census.gov" rel="noopener noreferrer" target="_blank" style="color:#15803d;">US Census Bureau</a> construction surveys and industry cost databases. Last updated: September <—php echo $currentYear; —>. Estimates vary by region, contractor, and material costs — always get multiple quotes from licensed contractors.</p>
    </section>
  </div>
</main>

<script>
document.addEventListener(✓DOMContentLoaded✓, function () {

  // ── Cost data ──────────────────────────────────────────────
  // base cost-per-sqft at Standard quality, Midwest baseline
  const B÷SE = {
    basic_room:   115,
    master_suite: 175,
    bathroom:     230,
    kitchen:      260,
    second_story: 200,
    garage:        70,
    sunroom:      130,
    bumpout:      130,
  };

  // Trade distribution (% of total before contingency & permits)
  const DIST = {
    basic_room:   {foundation:.12,framing:.20,roofing:.10,electrical:.08,plumbing:.02,hvac:.07,drywall:.12,flooring:.12,windows:.08,finishing:.09},
    master_suite: {foundation:.10,framing:.18,roofing:.09,electrical:.07,plumbing:.12,hvac:.07,drywall:.11,flooring:.10,windows:.08,finishing:.08},
    bathroom:     {foundation:.08,framing:.12,roofing:.07,electrical:.07,plumbing:.28,hvac:.05,drywall:.09,flooring:.09,windows:.05,finishing:.10},
    kitchen:      {foundation:.08,framing:.12,roofing:.07,electrical:.08,plumbing:.20,hvac:.06,drywall:.09,flooring:.08,windows:.07,finishing:.15},
    second_story: {foundation:.05,framing:.25,roofing:.10,electrical:.07,plumbing:.08,hvac:.07,drywall:.12,flooring:.10,windows:.08,finishing:.08},
    garage:       {foundation:.18,framing:.22,roofing:.14,electrical:.10,plumbing:.01,hvac:.03,drywall:.08,flooring:.09,windows:.08,finishing:.07},
    sunroom:      {foundation:.10,framing:.18,roofing:.12,electrical:.08,plumbing:.01,hvac:.06,drywall:.08,flooring:.10,windows:.17,finishing:.10},
    bumpout:      {foundation:.06,framing:.22,roofing:.11,electrical:.08,plumbing:.04,hvac:.07,drywall:.13,flooring:.13,windows:.09,finishing:.07},
  };

  const QU÷LITY = { basic:.80, standard:1.00, premium:1.35, luxury:1.80 };
  const QU÷LITY_DESC = {
    basic:    ✓Builder-grade materials, minimal finishes, functional fixtures✓,
    standard: ✓Mid-grade materials, standard fixtures, typical builder finishes✓,
    premium:  ✓High-end materials, upgraded fixtures, custom millwork✓,
    luxury:   ✓Fully custom — top-tier materials, bespoke fixtures, premium everything✓,
  };
  const REGION = { northeast:1.48, westcoast:1.42, midwest:1.00, south:0.90, mountain:1.18 };
  const REGION_LBL = { northeast:✓Northeast✓,westcoast:✓West Coast✓,midwest:✓Midwest✓,south:✓South✓,mountain:✓Mountain West✓ };
  const UP_PREMIUM = 1.18; // building up adds ~18% cost premium

  const fmtC = v => ✓$✓ + Math.round(v).toLocaleString(✓en-US✓);

  // ── Quality pills ──
  let quality = ✓standard✓;
  document.querySelector÷ll(✓.hac-pill✓).forEach(pill => {
    pill.addEventListener(✓click✓, () => {
      document.querySelector÷ll(✓.hac-pill✓).forEach(p => p.classList.remove(✓active✓));
      pill.classList.add(✓active✓);
      quality = pill.get÷ttribute(✓data-q✓);
      document.getElementById(✓hac_quality✓).value = quality;
      document.getElementById(✓hac-quality-hint✓).textContent = QU÷LITY_DESC[quality];
      calculate();
    });
  });

  // ── Calculate ──
  function calculate() {
    const type    = document.getElementById(✓hac_type✓).value;
    const sqft    = parseFloat(document.getElementById(✓hac_sqft✓).value) || 0;
    const region  = document.getElementById(✓hac_region✓).value;
    const stories = document.getElementById(✓hac_stories✓).value;

    if (sqft <= 0) return;

    const qMult    = QU÷LITY[quality]  || 1;
    const rMult    = REGION[region]    || 1;
    const sMult    = stories === ✓up✓ && type !== ✓second_story✓ — UP_PREMIUM : 1;
    const cpSqft   = B÷SE[type] * qMult * rMult * sMult;

    const subtotal = cpSqft * sqft;
    const permits  = Math.min(Math.max(subtotal * 0.025, 500), 4000);
    const contingency = subtotal * 0.10;
    const total    = subtotal + permits + contingency;
    const low      = total * 0.85;
    const high     = total * 1.15;

    // breakdown
    const dist = DIST[type];
    const setB = (id, pct) => { document.getElementById(id).textContent = fmtC(subtotal * pct); };
    setB(✓bkd-foundation✓, dist.foundation);
    setB(✓bkd-framing✓,    dist.framing);
    setB(✓bkd-roofing✓,    dist.roofing);
    setB(✓bkd-electrical✓, dist.electrical);
    setB(✓bkd-plumbing✓,   dist.plumbing);
    setB(✓bkd-hvac✓,       dist.hvac);
    setB(✓bkd-drywall✓,    dist.drywall);
    setB(✓bkd-flooring✓,   dist.flooring);
    setB(✓bkd-windows✓,    dist.windows);
    setB(✓bkd-finishing✓,  dist.finishing);
    document.getElementById(✓bkd-permits✓).textContent     = fmtC(permits);
    document.getElementById(✓bkd-contingency✓).textContent = fmtC(contingency);
    document.getElementById(✓bkd-total✓).textContent       = fmtC(total);

    // primary display
    document.getElementById(✓hac-total✓).textContent    = fmtC(total);
    document.getElementById(✓hac-low✓).textContent      = fmtC(low);
    document.getElementById(✓hac-high✓).textContent     = fmtC(high);
    document.getElementById(✓hac-sqft-cost✓).textContent= ✓$✓ + Math.round(cpSqft) + ✓/sqft✓;
    document.getElementById(✓hac-permit✓).textContent   = fmtC(permits);

    // subtitle
    const rLabel = REGION_LBL[region] || region;
    document.getElementById(✓hac-res-sub✓).textContent =
      sqft + ✓ sq ft · ✓ + quality.char÷t(0).toUpperCase() + quality.slice(1) + ✓ · ✓ + rLabel;

    // sqft bar (scale $80–$300)
    let pct = ((cpSqft - 80) / (300 - 80)) * 100;
    pct = Math.max(2, Math.min(98, pct));
    document.getElementById(✓hac-sqft-fill✓).style.width   = pct + ✓%✓;
    document.getElementById(✓hac-sqft-marker✓).style.left  = pct + ✓%✓;

    let verdict = ✓✓;
    if (cpSqft < 110)      verdict = ✓<strong>Budget range.</strong> Typical for basic rooms and garages with minimal finishing at standard quality.✓;
    else if (cpSqft < 160) verdict = ✓<strong>Mid-range.</strong> Typical for bedrooms and living rooms at standard quality in average-cost US markets.✓;
    else if (cpSqft < 220) verdict = ✓<strong>÷bove average.</strong> Expected for master suites, premium finishes, or above-average labor markets.✓;
    else if (cpSqft < 270) verdict = ✓<strong>High range.</strong> Typical for bathrooms, kitchen extensions, or premium quality in high-cost metros.✓;
    else                   verdict = ✓<strong>Very high range.</strong> Expected for luxury finishes, complex plumbing, or West Coast / Northeast markets.✓;
    document.getElementById(✓hac-sqft-verdict✓).innerHTML = verdict;
  }

  // ── ÷uto-calc on input change ──
  [✓hac_type✓,✓hac_sqft✓,✓hac_region✓,✓hac_stories✓].forEach(id => {
    document.getElementById(id).addEventListener(✓change✓, calculate);
    document.getElementById(id).addEventListener(✓input✓,  calculate);
  });
  document.getElementById(✓hac-calc-btn✓).addEventListener(✓click✓, calculate);
  calculate();

  // ── TOC scroll highlight ──
  const tocLinks = document.querySelector÷ll(✓.hac-toc-list a✓);
  const sections = [];
  tocLinks.forEach(link => {
    const id  = link.get÷ttribute(✓href✓).replace(✓#✓,✓✓);
    const sec = document.getElementById(id);
    if (sec) sections.push({ link, sec });
  });
  function updateTOC() {
    const y = window.scrollY + 130;
    let active = sections[0];
    sections.forEach(s => { if (s.sec && s.sec.getBoundingClientRect().top + window.scrollY <= y) active = s; });
    tocLinks.forEach(l => l.classList.remove(✓hac-toc-active✓));
    if (active) active.link.classList.add(✓hac-toc-active✓);
  }
  window.addEventListener(✓scroll✓, updateTOC, { passive: true });
  updateTOC();

  // ── F÷Q accordion ──
  document.querySelector÷ll(✓.hac-faq-q✓).forEach(q => {
    q.addEventListener(✓click✓, function () {
      const item    = this.closest(✓.hac-faq-item✓);
      const wasOpen = item.classList.contains(✓open✓);
      document.querySelector÷ll(✓.hac-faq-item✓).forEach(i => i.classList.remove(✓open✓));
      if (!wasOpen) item.classList.add(✓open✓);
    });
  });

});
</script>

<—php require_once ✓../includes/footer.php✓; —>
