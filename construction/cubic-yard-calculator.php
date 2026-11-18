<?php
$currentYear = date('Y');

$pageTitle       = "Cubic Yard Calculator ($currentYear) — Mulch, Dirt, Gravel & Concrete";
$metaDescription = "Free $currentYear cubic yard calculator. Calculate cubic yards for mulch, topsoil, dirt, gravel, sand, and concrete. Converts feet and inches to cubic yards, cubic feet, tons, and bags with instant cost estimates.";
$metaKeywords    = 'cubic yard calculator, cubic yards calculator, yardage calculator, calculate cubic yards, yards of mulch calculator, yards of dirt calculator, yards of gravel calculator, how to calculate cubic yards, cubic yards to tons, cubic feet to cubic yards';

$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type' => 'WebApplication',
      '@id'   => 'https://americacalculator.com/construction/cubic-yard-calculator#app',
      'name'  => 'Cubic Yard Calculator',
      'url'   => 'https://americacalculator.com/construction/cubic-yard-calculator',
      'applicationCategory' => 'ConstructionApplication',
      'operatingSystem'     => 'All',
      'offers' => [
        '@type' => 'Offer',
        'price' => '0',
        'priceCurrency' => 'USD'
      ],
      'description' => 'Calculate cubic yards for landscaping, gardening, and construction materials including mulch, topsoil, gravel, sand, and concrete with bag counts, tonnage, and costs.'
    ],
    [
      '@type' => 'FAQPage',
      '@id'   => 'https://americacalculator.com/construction/cubic-yard-calculator#faq',
      'mainEntity' => [
        [
          '@type' => 'Question',
          'name'  => 'How do you calculate cubic yards?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'To calculate cubic yards for a rectangular area, multiply Length in feet by Width in feet by Depth in feet, then divide by 27. When depth is measured in inches, use the standard formula: Length (ft) × Width (ft) × [Depth (inches) / 12] / 27 = Cubic Yards.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'How many cubic feet are in a cubic yard?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'There are exactly 27 cubic feet in one cubic yard (3 ft × 3 ft × 3 ft = 27 ft³). To convert cubic feet to cubic yards, divide the total cubic feet by 27.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'How many bags of mulch or soil are in a cubic yard?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'For 2.0 cubic foot bags, it takes 13.5 bags (round up to 14 bags) to equal 1 cubic yard. For 1.5 cubic foot bags, it takes 18 bags. For 3.0 cubic foot bags, it takes exactly 9 bags per cubic yard.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'How many tons does one cubic yard weigh?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Weight depends entirely on material density and moisture content. One cubic yard of dry mulch weighs roughly 600–800 lbs (0.3–0.4 tons). Topsoil weighs roughly 2,000–2,200 lbs (1.0–1.1 tons). Gravel and crushed stone weigh 2,500–2,800 lbs (1.25–1.4 tons). Solid concrete weighs approximately 4,050 lbs (2.02 tons).'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'How deep should mulch, topsoil, and gravel be?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Standard recommended depths: Mulch in landscape beds should be 3 inches deep (2 inches for fine shredded bark). Topsoil for new lawn seeding or flower beds should be 4 to 6 inches deep. Driveway or walkway gravel should be 3 to 4 inches deep over a compacted base.'
          ]
        ],
        [
          '@type' => 'Question',
          'name'  => 'Is it cheaper to buy mulch or dirt in bags or bulk by the cubic yard?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Bulk purchasing is significantly cheaper for projects requiring 2 or more cubic yards (27+ bags). Bulk mulch averages $30–$45 per yard vs $65–$90 per yard in bagged equivalents. However, bulk delivery typically incurs a $40–$100 trucking drop fee.'
          ]
        ]
      ]
    ],
    [
      '@type' => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Construction Calculators', 'item' => 'https://americacalculator.com/construction/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Cubic Yard Calculator', 'item' => 'https://americacalculator.com/construction/cubic-yard-calculator']
      ]
    ]
  ]
];

require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>

<style>
body { background: #f8fafc; color: #1e293b; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
.cy-page-wrap { max-width: 1240px; margin: 0 auto; padding: 2rem 1.25rem 4rem; }
.cy-breadcrumbs { font-size: 0.85rem; color: #64748b; margin-bottom: 1.25rem; }
.cy-breadcrumbs a { color: #2563eb; text-decoration: none; }
.cy-breadcrumbs a:hover { text-decoration: underline; }

.cy-header { margin-bottom: 2rem; }
.cy-header h1 { font-size: 2.25rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem; }
.cy-header p { font-size: 1.05rem; color: #475569; max-width: 820px; line-height: 1.6; }

/* Grid */
.cy-calc-grid { display: grid; grid-template-columns: 1.15fr 0.85fr; gap: 2rem; margin-bottom: 3rem; }
@media (max-width: 900px) { .cy-calc-grid { grid-template-columns: 1fr; } }

.cy-panel { background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.06); padding: 2rem; }
.cy-panel-title { font-size: 1.25rem; font-weight: 700; color: #0f172a; margin-bottom: 1.25rem; display: flex; align-items: center; justify-content: space-between; }

/* Shape Tabs */
.cy-shape-tabs { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0.5rem; background: #f1f5f9; padding: 0.35rem; border-radius: 10px; margin-bottom: 1.5rem; }
.cy-tab-btn { background: none; border: none; padding: 0.65rem 0.5rem; font-size: 0.85rem; font-weight: 700; color: #64748b; border-radius: 8px; cursor: pointer; transition: all 0.2s; text-align: center; }
.cy-tab-btn.active { background: #ffffff; color: #0f172a; box-shadow: 0 2px 6px rgba(0,0,0,0.08); }

/* Form Controls */
.cy-form-group { margin-bottom: 1.25rem; }
.cy-label { display: block; font-size: 0.85rem; font-weight: 700; color: #334155; margin-bottom: 0.4rem; text-transform: uppercase; letter-spacing: 0.03em; }
.cy-input-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
.cy-input-wrap { position: relative; display: flex; align-items: center; }
.cy-input-wrap input, .cy-input-wrap select { width: 100%; padding: 0.75rem 1rem; border: 1.5px solid #cbd5e1; border-radius: 8px; font-size: 1rem; font-weight: 600; color: #0f172a; background: #ffffff; transition: border-color 0.2s; }
.cy-input-wrap input:focus, .cy-input-wrap select:focus { outline: none; border-color: #2563eb; box-shadow: 0 0 0 3px rgba(37,99,235,0.12); }
.cy-input-suffix { position: absolute; right: 0.85rem; font-size: 0.85rem; font-weight: 600; color: #94a3b8; pointer-events: none; }

/* Material Selector */
.cy-material-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.5rem; margin-top: 0.5rem; }
.cy-mat-card { border: 1.5px solid #e2e8f0; border-radius: 8px; padding: 0.75rem 0.85rem; cursor: pointer; transition: all 0.15s; background: #f8fafc; }
.cy-mat-card.selected { border-color: #2563eb; background: #eff6ff; }
.cy-mat-name { font-weight: 700; font-size: 0.88rem; color: #0f172a; }
.cy-mat-sub { font-size: 0.75rem; color: #64748b; margin-top: 2px; }

/* Results Panel */
.cy-results-card { background: linear-gradient(145deg, #0f172a 0%, #1e293b 100%); color: #ffffff; border-radius: 16px; padding: 2rem; box-shadow: 0 10px 25px -5px rgba(15,23,42,0.25); }
.cy-hero-stat { background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12); border-radius: 12px; padding: 1.5rem; text-align: center; margin-bottom: 1.5rem; }
.cy-hero-lbl { font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #94a3b8; }
.cy-hero-val { font-size: 3rem; font-weight: 800; color: #38bdf8; margin: 0.25rem 0; line-height: 1; }
.cy-hero-note { font-size: 0.85rem; color: #cbd5e1; }

.cy-res-table { width: 100%; border-collapse: collapse; margin-bottom: 1.5rem; }
.cy-res-table td { padding: 0.65rem 0; border-bottom: 1px solid rgba(255,255,255,0.08); font-size: 0.92rem; }
.cy-res-table td:first-child { color: #94a3b8; }
.cy-res-table td:last-child { text-align: right; font-weight: 700; color: #ffffff; }

.cy-bags-highlight { background: rgba(56,189,248,0.1); border: 1px solid rgba(56,189,248,0.25); border-radius: 10px; padding: 1rem; margin-bottom: 1.5rem; }
.cy-bags-title { font-size: 0.78rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; color: #38bdf8; margin-bottom: 0.4rem; }
.cy-bags-count { font-size: 1.4rem; font-weight: 800; color: #ffffff; }
.cy-bags-detail { font-size: 0.82rem; color: #cbd5e1; margin-top: 2px; }

/* Content Section */
.cy-content-body { background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; padding: 2.5rem; box-shadow: 0 4px 20px -2px rgba(0,0,0,0.04); }
.cy-content-body h2 { font-size: 1.65rem; font-weight: 800; color: #0f172a; margin: 2rem 0 1rem; border-bottom: 2px solid #f1f5f9; padding-bottom: 0.5rem; }
.cy-content-body h3 { font-size: 1.25rem; font-weight: 700; color: #1e293b; margin: 1.5rem 0 0.75rem; }
.cy-content-body p { color: #475569; font-size: 1rem; line-height: 1.75; margin-bottom: 1.25rem; }
.cy-content-body ul, .cy-content-body ol { margin: 0 0 1.5rem 1.5rem; color: #475569; line-height: 1.75; }
.cy-content-body li { margin-bottom: 0.5rem; }
.cy-table { width: 100%; border-collapse: collapse; margin: 1.5rem 0; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; }
.cy-table th { background: #1e293b; color: #ffffff; padding: 12px 16px; font-size: 0.88rem; text-align: left; }
.cy-table td { padding: 12px 16px; border-bottom: 1px solid #f1f5f9; font-size: 0.92rem; color: #334155; }
.cy-table tr:nth-child(even) td { background: #f8fafc; }
.cy-formula-card { background: #f0fdf4; border-left: 4px solid #10b981; padding: 1.25rem 1.5rem; border-radius: 0 8px 8px 0; margin: 1.5rem 0; }
.cy-formula-card code { font-family: ui-monospace, SFMono-Regular, monospace; font-size: 1.05rem; font-weight: 700; color: #065f46; }

/* FAQ Accordion */
.cy-faq-item { border-bottom: 1px solid #e2e8f0; padding: 1.25rem 0; }
.cy-faq-item:last-child { border-bottom: none; }
.cy-faq-q { font-weight: 700; font-size: 1.05rem; color: #0f172a; cursor: pointer; display: flex; justify-content: space-between; align-items: center; }
.cy-faq-q::after { content: "+"; font-size: 1.3rem; color: #2563eb; }
.cy-faq-item.active .cy-faq-q::after { content: "−"; }
.cy-faq-a { font-size: 0.95rem; color: #475569; line-height: 1.65; margin-top: 0.75rem; display: none; }
.cy-faq-item.active .cy-faq-a { display: block; }
</style>

<main class="cy-page-wrap">
  <nav class="cy-breadcrumbs">
    <a href="/">Home</a> &rsaquo;
    <a href="/construction/">Construction Calculators</a> &rsaquo;
    <span>Cubic Yard Calculator</span>
  </nav>

  <header class="cy-header">
    <h1>Cubic Yard Calculator</h1>
    <p>Calculate total cubic yards for mulch, topsoil, fill dirt, crushed gravel, sand, or concrete. Converts length, width, and depth measurements into cubic yards, cubic feet, tonnage, and required bag quantities.</p>
  </header>

  <div class="cy-calc-grid">
    <!-- Calculator Panel -->
    <div class="cy-panel">
      <div class="cy-panel-title">
        <span>1. Project Dimensions</span>
      </div>

      <!-- Shape Tabs -->
      <div class="cy-shape-tabs">
        <button type="button" class="cy-tab-btn active" onclick="cySetShape('rect')">Rectangle / Area</button>
        <button type="button" class="cy-tab-btn" onclick="cySetShape('circle')">Circle / Round</button>
        <button type="button" class="cy-tab-btn" onclick="cySetShape('tri')">Triangle / Berm</button>
      </div>

      <!-- Form Inputs: Rectangle -->
      <div id="cy-shape-rect">
        <div class="cy-input-row">
          <div class="cy-form-group">
            <label class="cy-label" for="cy-length">Length</label>
            <div class="cy-input-wrap">
              <input type="number" id="cy-length" value="20" min="0.1" step="0.5" oninput="cyRecalc()">
              <span class="cy-input-suffix">ft</span>
            </div>
          </div>
          <div class="cy-form-group">
            <label class="cy-label" for="cy-width">Width</label>
            <div class="cy-input-wrap">
              <input type="number" id="cy-width" value="10" min="0.1" step="0.5" oninput="cyRecalc()">
              <span class="cy-input-suffix">ft</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Form Inputs: Circle -->
      <div id="cy-shape-circle" style="display:none;">
        <div class="cy-form-group">
          <label class="cy-label" for="cy-diameter">Diameter (Across Center)</label>
          <div class="cy-input-wrap">
            <input type="number" id="cy-diameter" value="16" min="0.1" step="0.5" oninput="cyRecalc()">
            <span class="cy-input-suffix">ft</span>
          </div>
        </div>
      </div>

      <!-- Form Inputs: Triangle -->
      <div id="cy-shape-tri" style="display:none;">
        <div class="cy-input-row">
          <div class="cy-form-group">
            <label class="cy-label" for="cy-base">Base Length</label>
            <div class="cy-input-wrap">
              <input type="number" id="cy-base" value="24" min="0.1" step="0.5" oninput="cyRecalc()">
              <span class="cy-input-suffix">ft</span>
            </div>
          </div>
          <div class="cy-form-group">
            <label class="cy-label" for="cy-height">Height / Perpendicular</label>
            <div class="cy-input-wrap">
              <input type="number" id="cy-height" value="12" min="0.1" step="0.5" oninput="cyRecalc()">
              <span class="cy-input-suffix">ft</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Depth Input -->
      <div class="cy-input-row">
        <div class="cy-form-group">
          <label class="cy-label" for="cy-depth">Target Depth</label>
          <div class="cy-input-wrap">
            <input type="number" id="cy-depth" value="3" min="0.25" step="0.25" oninput="cyRecalc()">
            <span class="cy-input-suffix">inches</span>
          </div>
        </div>
        <div class="cy-form-group">
          <label class="cy-label" for="cy-waste">Waste / Compaction Factor</label>
          <div class="cy-input-wrap">
            <select id="cy-waste" onchange="cyRecalc()">
              <option value="0">0% (Exact)</option>
              <option value="5">5% (Light Allowance)</option>
              <option value="10" selected>10% (Recommended)</option>
              <option value="15">15% (Uneven Base / Trench)</option>
              <option value="20">20% (Heavy Compaction)</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Material Type -->
      <div class="cy-form-group" style="margin-top: 1.5rem;">
        <label class="cy-label">2. Select Material Type</label>
        <div class="cy-material-grid">
          <div class="cy-mat-card selected" onclick="cySelectMaterial(this, 'mulch', 700, 35, '2.0 cu ft', 2)">
            <div class="cy-mat-name">Bark Mulch / Wood Chips</div>
            <div class="cy-mat-sub">~700 lbs/yd³ &bull; ~$35/yd</div>
          </div>
          <div class="cy-mat-card" onclick="cySelectMaterial(this, 'topsoil', 2100, 42, '40 lb bag', 0.75)">
            <div class="cy-mat-name">Topsoil / Garden Soil</div>
            <div class="cy-mat-sub">~2,100 lbs/yd³ &bull; ~$42/yd</div>
          </div>
          <div class="cy-mat-card" onclick="cySelectMaterial(this, 'gravel', 2700, 55, '50 lb bag', 0.5)">
            <div class="cy-mat-name">Gravel &amp; Crushed Stone</div>
            <div class="cy-mat-sub">~2,700 lbs/yd³ &bull; ~$55/yd</div>
          </div>
          <div class="cy-mat-card" onclick="cySelectMaterial(this, 'sand', 2600, 45, '50 lb bag', 0.5)">
            <div class="cy-mat-name">Construction Sand</div>
            <div class="cy-mat-sub">~2,600 lbs/yd³ &bull; ~$45/yd</div>
          </div>
          <div class="cy-mat-card" onclick="cySelectMaterial(this, 'concrete', 4050, 155, '80 lb bag', 0.6)">
            <div class="cy-mat-name">Ready-Mix Concrete</div>
            <div class="cy-mat-sub">~4,050 lbs/yd³ &bull; ~$155/yd</div>
          </div>
          <div class="cy-mat-card" onclick="cySelectMaterial(this, 'compost', 1100, 38, '1.5 cu ft', 1.5)">
            <div class="cy-mat-name">Organic Compost</div>
            <div class="cy-mat-sub">~1,100 lbs/yd³ &bull; ~$38/yd</div>
          </div>
        </div>
      </div>

      <!-- Cost Estimate Input -->
      <div class="cy-form-group" style="margin-top:1.25rem;">
        <label class="cy-label" for="cy-unit-cost">Cost Per Cubic Yard (Optional)</label>
        <div class="cy-input-wrap">
          <input type="number" id="cy-unit-cost" value="35" min="0" step="1" oninput="cyRecalc()">
          <span class="cy-input-suffix">$/yd³</span>
        </div>
      </div>
    </div>

    <!-- Results Panel -->
    <div class="cy-results-card">
      <div class="cy-hero-stat">
        <div class="cy-hero-lbl">Recommended Order (w/ Waste)</div>
        <div class="cy-hero-val" id="cy-res-order-yards">2.04</div>
        <div class="cy-hero-note">Cubic Yards to Order</div>
      </div>

      <div class="cy-bags-highlight" id="cy-bags-box">
        <div class="cy-bags-title">Bagged Equivalent Required</div>
        <div class="cy-bags-count" id="cy-res-bags">28 Bags</div>
        <div class="cy-bags-detail" id="cy-res-bag-desc">Based on 2.0 cu. ft. retail bags</div>
      </div>

      <table class="cy-res-table">
        <tr>
          <td>Exact Net Volume:</td>
          <td id="cy-res-net-yards">1.85 yd³</td>
        </tr>
        <tr>
          <td>Total Cubic Feet:</td>
          <td id="cy-res-cuft">55.0 ft³</td>
        </tr>
        <tr>
          <td>Total Square Footage:</td>
          <td id="cy-res-sqft">200 sq ft</td>
        </tr>
        <tr>
          <td>Estimated Total Weight:</td>
          <td id="cy-res-tons">0.71 Tons (1,428 lbs)</td>
        </tr>
        <tr>
          <td>Estimated Material Cost:</td>
          <td id="cy-res-cost" style="color:#38bdf8; font-size:1.15rem;">$71.40</td>
        </tr>
      </table>

      <div style="background: rgba(255,255,255,0.05); border-radius:8px; padding:0.85rem; font-size:0.8rem; color:#94a3b8; line-height:1.5;">
        <strong style="color:#ffffff;">Ordering Tip:</strong> Most bulk quarries and mulch suppliers deliver in full or half-yard increments. For orders under 2 cubic yards, bagged material from a home center is usually cheaper once bulk delivery fees ($50–$100) are factored in.
      </div>
    </div>
  </div>

  <!-- Editorial & Educational Content -->
  <article class="cy-content-body">
    <h2>How to Calculate Cubic Yards</h2>
    <p>A <strong>cubic yard (yd³)</strong> is a three-dimensional imperial unit of volume equal to 27 cubic feet (a cube 3 feet wide, 3 feet long, and 3 feet deep). Bulk materials such as mulch, landscaping soil, road base, pea gravel, and ready-mix concrete are universally sold and delivered by the cubic yard.</p>

    <div class="cy-formula-card">
      <code>Cubic Yards = Length (ft) &times; Width (ft) &times; [Depth (in) / 12] / 27</code>
    </div>

    <p>To calculate cubic yards manually, follow these four simple steps:</p>
    <ol>
      <li><strong>Measure the Length and Width in feet:</strong> For example, a landscape bed measuring 30 feet long by 9 feet wide has a surface area of <code>30 &times; 9 = 270 sq ft</code>.</li>
      <li><strong>Convert Depth to feet:</strong> Because depth is usually specified in inches, divide your target depth by 12. A 3-inch depth becomes <code>3 / 12 = 0.25 feet</code>.</li>
      <li><strong>Calculate Cubic Feet:</strong> Multiply area by depth in feet: <code>270 sq ft &times; 0.25 ft = 67.5 cubic feet</code>.</li>
      <li><strong>Divide by 27:</strong> Divide total cubic feet by 27 to get cubic yards: <code>67.5 / 27 = 2.5 cubic yards</code>.</li>
    </ol>

    <h2>Recommended Material Depths</h2>
    <p>Using the correct depth ensures adequate coverage, weed suppression, and structural durability without over-spending on excess bulk material:</p>

    <div style="overflow-x:auto;">
      <table class="cy-table">
        <thead>
          <tr>
            <th>Application</th>
            <th>Recommended Depth</th>
            <th>1 Cubic Yard Covers</th>
            <th>Recommended Material</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Garden &amp; Flower Bed Mulch</strong></td>
            <td>2 to 3 inches</td>
            <td>108 to 162 sq ft</td>
            <td>Shredded hardwood, cedar bark, or pine straw</td>
          </tr>
          <tr>
            <td><strong>New Lawn Seeding / Sod Prep</strong></td>
            <td>4 to 6 inches</td>
            <td>54 to 81 sq ft</td>
            <td>Screened topsoil blended with organic compost</td>
          </tr>
          <tr>
            <td><strong>Raised Vegetable Garden Beds</strong></td>
            <td>8 to 12 inches</td>
            <td>27 to 40 sq ft</td>
            <td>50% topsoil, 30% compost, 20% coarse sand/vermiculite</td>
          </tr>
          <tr>
            <td><strong>Gravel Walkway or Patio Base</strong></td>
            <td>2 to 3 inches</td>
            <td>108 to 162 sq ft</td>
            <td>Pea gravel, decomposed granite, or river rock</td>
          </tr>
          <tr>
            <td><strong>Residential Concrete Patio Slab</strong></td>
            <td>4 inches</td>
            <td>81 sq ft</td>
            <td>3,500–4,000 PSI ready-mix concrete with rebar/mesh</td>
          </tr>
          <tr>
            <td><strong>Driveway Subbase / Heavy Parking</strong></td>
            <td>6 to 8 inches</td>
            <td>40 to 54 sq ft</td>
            <td>#57 or crusher run crushed limestone / concrete base</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h2>Material Weight &amp; Density Reference</h2>
    <p>Bulk delivery and pickup trucks have strict axle weight limits. Knowing the weight of your cubic yards prevents overloading pickup trucks and trailers:</p>

    <div style="overflow-x:auto;">
      <table class="cy-table">
        <thead>
          <tr>
            <th>Material</th>
            <th>Weight per Cubic Yard</th>
            <th>Weight in Tons</th>
            <th>Pickup Truck Capacity (Half-Ton)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Dry Mulch / Wood Chips</td>
            <td>500 &ndash; 700 lbs</td>
            <td>0.25 &ndash; 0.35 tons</td>
            <td>Up to 2.5 yards (volume limited)</td>
          </tr>
          <tr>
            <td>Wet Mulch / Heavy Bark</td>
            <td>800 &ndash; 1,000 lbs</td>
            <td>0.40 &ndash; 0.50 tons</td>
            <td>Up to 2.0 yards</td>
          </tr>
          <tr>
            <td>Dry Screened Topsoil</td>
            <td>2,000 &ndash; 2,200 lbs</td>
            <td>1.00 &ndash; 1.10 tons</td>
            <td>1.0 yard maximum</td>
          </tr>
          <tr>
            <td>Wet Fill Dirt / Clay</td>
            <td>2,400 &ndash; 2,700 lbs</td>
            <td>1.20 &ndash; 1.35 tons</td>
            <td>0.75 yard maximum</td>
          </tr>
          <tr>
            <td>Crushed Gravel / Pea Stone</td>
            <td>2,600 &ndash; 2,800 lbs</td>
            <td>1.30 &ndash; 1.40 tons</td>
            <td>0.5 &ndash; 0.75 yard maximum</td>
          </tr>
          <tr>
            <td>Wet Sand</td>
            <td>2,700 &ndash; 3,000 lbs</td>
            <td>1.35 &ndash; 1.50 tons</td>
            <td>0.5 yard maximum</td>
          </tr>
          <tr>
            <td>Ready-Mix Concrete (Wet)</td>
            <td>4,050 lbs</td>
            <td>2.02 tons</td>
            <td>Order via commercial concrete mixer truck</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h2>How Many Bags Equal One Cubic Yard?</h2>
    <p>Retail home centers sell pre-bagged landscaping and building supplies. Use this quick conversion cheat sheet to decide whether bags or bulk delivery makes financial sense:</p>
    <ul>
      <li><strong>2.0 Cubic Foot Bags (Standard Mulch):</strong> <code>27 / 2 = 13.5 bags</code> (Order 14 bags per yard)</li>
      <li><strong>3.0 Cubic Foot Bags (Large Commercial Mulch):</strong> <code>27 / 3 = 9.0 bags</code> (Order 9 bags per yard)</li>
      <li><strong>1.5 Cubic Foot Bags (Standard Topsoil / Potting Mix):</strong> <code>27 / 1.5 = 18.0 bags</code> (Order 18 bags per yard)</li>
      <li><strong>1.0 Cubic Foot Bags (Manure / Fertilizer):</strong> <code>27 / 1 = 27 bags</code> per cubic yard</li>
      <li><strong>80 lb Concrete Bags:</strong> <code>27 / 0.60 = 45 bags</code> per cubic yard</li>
      <li><strong>60 lb Concrete Bags:</strong> <code>27 / 0.45 = 60 bags</code> per cubic yard</li>
    </ul>

    <h2>Frequently Asked Questions</h2>
    <div class="cy-faq-item active">
      <div class="cy-faq-q" onclick="cyToggleFaq(this)">How do I calculate cubic yards for a circle or round bed?</div>
      <div class="cy-faq-a">To calculate volume for a circular area (such as a round flower bed or pool surround), measure the radius (half of the total diameter) in feet. The formula is: <code>&pi; &times; Radius&sup2; &times; (Depth in inches / 12) / 27 = Cubic Yards</code>. Our interactive calculator above includes a dedicated "Circle / Round" tab that calculates this automatically.</div>
    </div>

    <div class="cy-faq-item">
      <div class="cy-faq-q" onclick="cyToggleFaq(this)">Why should I add 10% waste to my bulk order?</div>
      <div class="cy-faq-a">Bulk materials compact during placement, tamping, and initial rainfall. Soil and gravel also settle into low spots or uneven subgrade subsurfaces. Ordering an extra 10% ensures you do not run short mid-job, which would otherwise require paying a second delivery fee.</div>
    </div>

    <div class="cy-faq-item">
      <div class="cy-faq-q" onclick="cyToggleFaq(this)">How much can a standard pickup truck carry?</div>
      <div class="cy-faq-a">A standard half-ton pickup truck (such as a Ford F-150, Silverado 1500, or Ram 1500) has a payload capacity between 1,500 and 2,000 lbs. While the physical bed can hold 2 to 2.5 cubic yards of light, dry mulch, it can only safely carry <strong>1 cubic yard of dry topsoil</strong> or <strong>0.5 to 0.75 cubic yards of heavy gravel</strong> without exceeding rear axle and suspension ratings.</div>
    </div>

    <div class="cy-faq-item">
      <div class="cy-faq-q" onclick="cyToggleFaq(this)">What is the difference between a square yard and a cubic yard?</div>
      <div class="cy-faq-a">A square yard is a 2-dimensional measure of surface area (3 ft &times; 3 ft = 9 sq ft). A cubic yard is a 3-dimensional measure of volume (3 ft &times; 3 ft &times; 3 ft = 27 cu ft). You cannot convert square yards to cubic yards without knowing the depth or thickness of the material.</div>
    </div>
  </article>
</main>

<script>
var currentShape = 'rect';
var selectedMaterial = {
  key: 'mulch',
  density: 700,
  defaultPrice: 35,
  bagType: '2.0 cu ft bag',
  bagVolCuFt: 2.0
};

function cySetShape(shape) {
  currentShape = shape;
  document.querySelectorAll('.cy-tab-btn').forEach(function(btn, idx) {
    btn.classList.toggle('active', (shape === 'rect' && idx === 0) || (shape === 'circle' && idx === 1) || (shape === 'tri' && idx === 2));
  });

  document.getElementById('cy-shape-rect').style.display = (shape === 'rect') ? 'block' : 'none';
  document.getElementById('cy-shape-circle').style.display = (shape === 'circle') ? 'block' : 'none';
  document.getElementById('cy-shape-tri').style.display = (shape === 'tri') ? 'block' : 'none';

  cyRecalc();
}

function cySelectMaterial(card, key, density, price, bagType, bagVol) {
  document.querySelectorAll('.cy-mat-card').forEach(function(c) { c.classList.remove('selected'); });
  card.classList.add('selected');

  selectedMaterial = {
    key: key,
    density: density,
    defaultPrice: price,
    bagType: bagType,
    bagVolCuFt: bagVol
  };

  var costInput = document.getElementById('cy-unit-cost');
  if (costInput) {
    costInput.value = price;
  }

  cyRecalc();
}

function cyRecalc() {
  var depthInches = parseFloat(document.getElementById('cy-depth').value) || 0;
  var wastePct = parseFloat(document.getElementById('cy-waste').value) || 0;
  var unitCost = parseFloat(document.getElementById('cy-unit-cost').value) || 0;

  var sqft = 0;

  if (currentShape === 'rect') {
    var l = parseFloat(document.getElementById('cy-length').value) || 0;
    var w = parseFloat(document.getElementById('cy-width').value) || 0;
    sqft = l * w;
  } else if (currentShape === 'circle') {
    var d = parseFloat(document.getElementById('cy-diameter').value) || 0;
    var r = d / 2;
    sqft = Math.PI * r * r;
  } else if (currentShape === 'tri') {
    var b = parseFloat(document.getElementById('cy-base').value) || 0;
    var h = parseFloat(document.getElementById('cy-height').value) || 0;
    sqft = 0.5 * b * h;
  }

  var cuft = sqft * (depthInches / 12);
  var netYards = cuft / 27;
  var orderYards = netYards * (1 + (wastePct / 100));

  var orderCuft = orderYards * 27;
  var totalLbs = orderYards * selectedMaterial.density;
  var totalTons = totalLbs / 2000;
  var totalCost = orderYards * unitCost;

  // Bag count calculation
  var bagsNeeded = 0;
  if (selectedMaterial.bagVolCuFt > 0) {
    bagsNeeded = Math.ceil(orderCuft / selectedMaterial.bagVolCuFt);
  }

  // Update DOM
  document.getElementById('cy-res-order-yards').textContent = orderYards.toFixed(2);
  document.getElementById('cy-res-net-yards').textContent = netYards.toFixed(2) + ' yd³';
  document.getElementById('cy-res-cuft').textContent = orderCuft.toFixed(1) + ' ft³';
  document.getElementById('cy-res-sqft').textContent = Math.round(sqft) + ' sq ft';

  var weightStr = totalTons >= 1 ? (totalTons.toFixed(2) + ' Tons (' + Math.round(totalLbs).toLocaleString() + ' lbs)') : (Math.round(totalLbs).toLocaleString() + ' lbs (' + totalTons.toFixed(2) + ' Tons)');
  document.getElementById('cy-res-tons').textContent = weightStr;

  document.getElementById('cy-res-cost').textContent = '$' + totalCost.toFixed(2);
  document.getElementById('cy-res-bags').textContent = bagsNeeded + ' Bags';
  document.getElementById('cy-res-bag-desc').textContent = 'Based on ' + selectedMaterial.bagType + ' retail bags';
}

function cyToggleFaq(trigger) {
  var item = trigger.closest('.cy-faq-item');
  item.classList.toggle('active');
}

// Initial calculation on load
document.addEventListener('DOMContentLoaded', function() {
  cyRecalc();
});
</script>

<?php require_once '../includes/footer.php'; ?>
