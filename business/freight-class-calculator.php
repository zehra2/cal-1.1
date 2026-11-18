<?php
$currentYear = date('Y');
$pageTitle = "Freight Class Calculator ($currentYear) — NMFC Density & LTL Shipping Classes | AmericaCalculator";
$metaDescription = "Free $currentYear freight class calculator. Determine your exact NMFC freight class (Class 50 to 500) and shipment density (lbs/cu ft) for LTL trucking shipments to prevent carrier reclassification fees.";
$metaKeywords = 'freight class calculator, shipping calculator, ltl freight class, freight density calculator, nmfc class calculator, ltl shipping class, freight density formula';

$schemaData = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebApplication',
            'name' => 'Freight Class Calculator',
            'url' => 'https://americacalculator.com/calculators/freight-class.php',
            'description' => "Calculate NMFC freight class, pallet cubic footage, and shipment density for Less-Than-Truckload (LTL) shipping.",
            'applicationCategory' => 'BusinessApplication',
            'operatingSystem' => 'All',
            'offers' => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD'],
        ],
        [
            '@type' => 'HowTo',
            'name' => 'How to Calculate Freight Density and NMFC Class',
            'step' => [
                ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Weigh the Complete Pallet', 'text' => 'Weigh the shipment including the wooden pallet, packaging, and shrink wrap in pounds.'],
                ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Measure Greatest Dimensions', 'text' => 'Measure the length, width, and height in inches from the floor to the highest point of the pallet, accounting for any overhang or bulge.'],
                ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Calculate Volume in Cubic Feet', 'text' => 'Multiply Length &times; Width &times; Height and divide by 1,728 (the number of cubic inches in a cubic foot).'],
                ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Divide Weight by Volume', 'text' => 'Divide total weight in pounds by cubic feet to determine pounds per cubic foot (PCF), then cross-reference with the standard NMFC density matrix.'],
            ],
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'What is freight class and why does it matter?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Freight class is a standardized pricing classification established by the National Motor Freight Traffic Association (NMFTA). It assigns one of 18 classes (ranging from 50 to 500) to LTL shipments based primarily on density, stowability, handling ease, and liability. Higher freight classes incur higher shipping rates per hundred pounds.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What happens if I write the wrong freight class on the Bill of Lading?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'If a carrier inspects your pallet using automated dimensioners (cubing systems) and discovers an incorrect class, they will reclassify the shipment. You will be billed for the rate difference plus a carrier re-weigh and re-class penalty fee, typically between $25 and $150.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Should pallet weight and dimensions include the wooden pallet itself?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes. Carriers measure and weigh the entire liftable unit as tendered on the trailer. A standard 48x40 wooden GMA pallet adds 30 to 45 pounds and approximately 5 to 6 inches of height, which must be factored into your calculation.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What are the 4 transportation characteristics that determine freight class?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'The NMFTA evaluates commodities on: (1) Density (weight per cubic foot), (2) Stowability (ability to stack or nest with other freight), (3) Handling (fragility, hazardous cargo, or odd dimensions requiring special care), and (4) Liability (value per pound, susceptibility to theft or damage).'
                    ]
                ],
            ]
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Business', 'item' => 'https://americacalculator.com/business/'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'Freight Class Calculator', 'item' => 'https://americacalculator.com/calculators/freight-class.php'],
            ]
        ]
    ]
];

require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $weight = floatval($_POST['weight'] ?? 0);
    $length = floatval($_POST['length'] ?? 0);
    $width  = floatval($_POST['width'] ?? 0);
    $height = floatval($_POST['height'] ?? 0);
    
    if ($weight > 0 && $length > 0 && $width > 0 && $height > 0) {
        $volume_cf = ($length * $width * $height) / 1728;
        $density = $weight / $volume_cf;
        
        if ($density < 1)         $class = 500;
        elseif ($density < 2)    $class = 400;
        elseif ($density < 4)    $class = 300;
        elseif ($density < 6)    $class = 250;
        elseif ($density < 8)    $class = 200;
        elseif ($density < 10)   $class = 175;
        elseif ($density < 12)   $class = 125;
        elseif ($density < 15)   $class = 100;
        elseif ($density < 22.5) $class = 85;
        elseif ($density < 30)   $class = 70;
        elseif ($density < 35)   $class = 65;
        elseif ($density < 50)   $class = 55;
        else                     $class = 50;
        
        $result = [
            'freight_class' => $class,
            'density' => round($density, 2),
            'volume' => round($volume_cf, 2),
            'weight' => number_format($weight, 1)
        ];
    }
}
?>

<style>
.fc-wrap{max-width:1100px;margin:0 auto;padding:2rem 1.25rem 3.5rem;font-family:system-ui,-apple-system,sans-serif;}
.fc-bc{font-size:.82rem;color:#64748b;margin-bottom:1.25rem;}
.fc-bc a{color:#2563eb;text-decoration:none;}
.fc-hero{background:linear-gradient(135deg,#064e3b 0%,#0f172a 100%);color:#fff;border-radius:16px;padding:2.5rem 2rem;margin-bottom:2rem;}
.fc-hero h1{font-size:2rem;font-weight:800;margin:0 0 .75rem;}
.fc-hero p{font-size:1rem;color:#a7f3d0;line-height:1.6;margin:0;max-width:720px;}
.fc-grid{display:grid;grid-template-columns:1fr 1fr;gap:2rem;margin-bottom:2.5rem;}
.fc-card{background:#fff;border:1px solid #e2e8f0;border-radius:14px;padding:2rem;box-shadow:0 4px 16px rgba(0,0,0,.04);}
.fc-card h2{font-size:1.25rem;color:#0f172a;margin:0 0 1.25rem;font-weight:700;}
.fc-form-group{margin-bottom:1.25rem;}
.fc-form-group label{display:block;font-size:.875rem;font-weight:600;color:#334155;margin-bottom:.4rem;}
.fc-form-group input{width:100%;padding:10px 14px;border:1px solid #cbd5e1;border-radius:8px;font-size:1rem;color:#0f172a;}
.fc-btn{display:inline-block;width:100%;padding:12px;background:#059669;color:#fff;font-weight:700;font-size:1rem;border:none;border-radius:8px;cursor:pointer;transition:background .15s;}
.fc-btn:hover{background:#047857;}
.fc-res-box{background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;gap:1rem;}
.fc-stat-highlight{background:#ecfdf5;border:1px solid #a7f3d0;border-radius:10px;padding:1.25rem;text-align:center;}
.fc-stat-val{font-size:2.2rem;font-weight:800;color:#059669;}
.fc-stat-lbl{font-size:.825rem;text-transform:uppercase;letter-spacing:.05em;color:#065f46;font-weight:600;}
.fc-res-row{display:flex;justify-content:space-between;padding:.6rem 0;border-bottom:1px solid #e2e8f0;font-size:.95rem;}
.fc-content-section{background:#fff;border:1px solid #e2e8f0;border-radius:14px;padding:2rem;margin-bottom:2rem;line-height:1.75;color:#334155;}
.fc-content-section h2{font-size:1.4rem;color:#0f172a;margin:0 0 1rem;font-weight:800;border-bottom:2px solid #ecfdf5;padding-bottom:.5rem;}
.fc-content-section h3{font-size:1.15rem;color:#1e293b;margin:1.5rem 0 .75rem;font-weight:700;}
.fc-table{width:100%;border-collapse:collapse;margin:1.25rem 0;font-size:.92rem;}
.fc-table th,.fc-table td{padding:10px 14px;border:1px solid #e2e8f0;text-align:left;}
.fc-table th{background:#f1f5f9;color:#0f172a;font-weight:700;}
.fc-faq-item{margin-bottom:1rem;border:1px solid #e2e8f0;border-radius:10px;overflow:hidden;}
.fc-faq-q{background:#f8fafc;padding:1rem 1.25rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;align-items:center;}
.fc-faq-a{padding:1.25rem;color:#475569;line-height:1.7;background:#fff;}
@media(max-width:768px){.fc-grid{grid-template-columns:1fr;}}
</style>

<main id="main-content">
<div class="fc-wrap">
  <div class="fc-bc"><a href="/">Home</a> &rsaquo; <a href="/business/">Business</a> &rsaquo; Freight Class Calculator</div>

  <div class="fc-hero">
    <h1>LTL Freight Class &amp; Density Calculator</h1>
    <p>Determine your exact National Motor Freight Classification (NMFC) shipping class and pallet density in pounds per cubic foot (PCF) to secure accurate Less-Than-Truckload carrier rates.</p>
  </div>

  <div class="fc-grid">
    <div class="fc-card">
      <h2>Shipment Dimensions &amp; Weight</h2>
      <form method="POST">
        <div class="fc-form-group">
          <label for="weight">Total Gross Weight (lbs):</label>
          <input type="number" step="any" id="weight" name="weight" required value="<?php echo htmlspecialchars($_POST['weight'] ?? '850'); ?>">
          <small style="color:#64748b;font-size:.8rem;">Include weight of cargo, pallet, and packaging.</small>
        </div>
        <div class="fc-form-group">
          <label for="length">Length (inches):</label>
          <input type="number" step="any" id="length" name="length" required value="<?php echo htmlspecialchars($_POST['length'] ?? '48'); ?>">
        </div>
        <div class="fc-form-group">
          <label for="width">Width (inches):</label>
          <input type="number" step="any" id="width" name="width" required value="<?php echo htmlspecialchars($_POST['width'] ?? '40'); ?>">
        </div>
        <div class="fc-form-group">
          <label for="height">Height (inches):</label>
          <input type="number" step="any" id="height" name="height" required value="<?php echo htmlspecialchars($_POST['height'] ?? '52'); ?>">
          <small style="color:#64748b;font-size:.8rem;">Measure from floor to highest point of the pallet.</small>
        </div>
        <button type="submit" class="fc-btn">Calculate Freight Class</button>
      </form>
    </div>

    <div class="fc-card">
      <h2>NMFC Classification Summary</h2>
      <?php if ($result): ?>
      <div class="fc-res-box">
        <div class="fc-stat-highlight">
          <div class="fc-stat-val">Class <?php echo $result['freight_class']; ?></div>
          <div class="fc-stat-lbl">Estimated NMFC Freight Class</div>
        </div>
        <div class="fc-res-row">
          <span>Shipment Density:</span>
          <strong style="color:#059669;"><?php echo $result['density']; ?> lbs / cu ft</strong>
        </div>
        <div class="fc-res-row">
          <span>Total Pallet Volume:</span>
          <strong><?php echo $result['volume']; ?> cu ft</strong>
        </div>
        <div class="fc-res-row">
          <span>Total Scaled Weight:</span>
          <strong><?php echo $result['weight']; ?> lbs</strong>
        </div>
      </div>
      <?php else: ?>
      <div class="fc-res-box" style="text-align:center;padding:3rem 1.5rem;color:#64748b;">
        <p style="margin:0 0 1rem;font-size:1.1rem;font-weight:600;color:#0f172a;">Instant Pallet Classification</p>
        <p style="margin:0;font-size:.92rem;">Enter your total pallet weight and extreme outer dimensions to determine your NMFC class code and density calculation.</p>
      </div>
      <?php endif; ?>
    </div>
  </div>

  <div class="fc-content-section">
    <h2>Understanding NMFC Freight Classes in <?php echo $currentYear; ?></h2>
    <p>Less-Than-Truckload (LTL) carriers in the United States classify freight into 18 distinct numbered categories ranging from <strong>Class 50 (densest and least expensive to ship)</strong> to <strong>Class 500 (lightest, most voluminous, and most expensive)</strong>. Because space in a semi-trailer is limited by both weight (80,000 lbs gross vehicle weight) and volume (roughly 3,000 to 3,500 cubic feet), carriers price shipments largely by density.</p>

    <h3>The 18 Standard NMFC Freight Classes &amp; Density Table</h3>
    <table class="fc-table">
      <thead>
        <tr>
          <th>Freight Class</th>
          <th>Density Range (lbs/cu ft)</th>
          <th>Typical Commodity Examples</th>
        </tr>
      </thead>
      <tbody>
        <tr><td><strong>Class 50</strong></td><td>Over 50 lbs/cu ft</td><td>Steel bolts, heavy nuts, lead, cast iron fittings</td></tr>
        <tr><td><strong>Class 55</strong></td><td>35 &ndash; 50 lbs/cu ft</td><td>Bricks, cement bags, hardwood flooring, building stone</td></tr>
        <tr><td><strong>Class 60</strong></td><td>30 &ndash; 35 lbs/cu ft</td><td>Car parts, engines on skids, glass sheets, chemicals</td></tr>
        <tr><td><strong>Class 65</strong></td><td>22.5 &ndash; 30 lbs/cu ft</td><td>Bottled beverages, ceramic tile, books, printer paper</td></tr>
        <tr><td><strong>Class 70</strong></td><td>15 &ndash; 22.5 lbs/cu ft</td><td>Car accessories, food items, electrical components</td></tr>
        <tr><td><strong>Class 77.5</strong></td><td>13.5 &ndash; 15 lbs/cu ft</td><td>Tires, bathroom fixtures, packaged machinery</td></tr>
        <tr><td><strong>Class 85</strong></td><td>12 &ndash; 13.5 lbs/cu ft</td><td>Heavy transmissions, cast iron cookware, cased goods</td></tr>
        <tr><td><strong>Class 92.5</strong></td><td>10.5 &ndash; 12 lbs/cu ft</td><td>Computers, packaged monitors, refrigerators</td></tr>
        <tr><td><strong>Class 100</strong></td><td>9 &ndash; 10.5 lbs/cu ft</td><td>Boat covers, wine cases, canvas goods, car hoods</td></tr>
        <tr><td><strong>Class 110</strong></td><td>8 &ndash; 9 lbs/cu ft</td><td>Framed canvas art, cabinet components</td></tr>
        <tr><td><strong>Class 125</strong></td><td>7 &ndash; 8 lbs/cu ft</td><td>Small appliances, exhaust pipes, vending equipment</td></tr>
        <tr><td><strong>Class 150</strong></td><td>6 &ndash; 7 lbs/cu ft</td><td>Assembled wooden furniture, sheet metal ducts</td></tr>
        <tr><td><strong>Class 175</strong></td><td>5 &ndash; 6 lbs/cu ft</td><td>Clothing in boxes, padded chairs, mattresses</td></tr>
        <tr><td><strong>Class 200</strong></td><td>4 &ndash; 5 lbs/cu ft</td><td>Televisions, aircraft parts, aluminum ladders</td></tr>
        <tr><td><strong>Class 250</strong></td><td>3 &ndash; 4 lbs/cu ft</td><td>Bamboo furniture, display cases, model kits</td></tr>
        <tr><td><strong>Class 300</strong></td><td>2 &ndash; 3 lbs/cu ft</td><td>Wood cabinets, model airplanes, light fixtures</td></tr>
        <tr><td><strong>Class 400</strong></td><td>1 &ndash; 2 lbs/cu ft</td><td>Deer antlers, light plastic items, kayak shells</td></tr>
        <tr><td><strong>Class 500</strong></td><td>Less than 1 lb/cu ft</td><td>Ping pong balls, gold leaf, low-density foam, feathers</td></tr>
      </tbody>
    </table>

    <h3>The Freight Density Formula Explained</h3>
    <p>Calculating freight density involves two simple mathematical steps:</p>
    <div style="background:#f1f5f9;padding:1rem 1.5rem;border-left:4px solid #059669;font-family:monospace;font-size:1.05rem;margin:1rem 0;color:#0f172a;">
      Cubic Feet = [ Length(in) &times; Width(in) &times; Height(in) ] &divide; 1,728<br>
      Density (PCF) = Total Gross Weight(lbs) &divide; Cubic Feet
    </div>
    <p>For example, a 48&Prime; &times; 40&Prime; pallet standing 48 inches tall with a total scale weight of 600 lbs has a volume of 53.33 cubic feet and a density of 11.25 lbs/cu ft, which falls cleanly into <strong>Class 92.5</strong>.</p>
  </div>

  <div class="fc-content-section">
    <h2>Frequently Asked Questions About LTL Shipping</h2>
    <div class="fc-faq-item">
      <div class="fc-faq-q">What is the difference between NMFC code and freight class?</div>
      <div class="fc-faq-a">An NMFC code is a specific 6-digit identifier assigned to a specific commodity (e.g., 100240 for electric motors), whereas a freight class is a broader rating category (50 through 500). Some commodities have a fixed class regardless of density, while density-based commodities have their class determined by weight per cubic foot.</div>
    </div>
    <div class="fc-faq-item">
      <div class="fc-faq-q">How can I reduce my LTL freight class and shipping cost?</div>
      <div class="fc-faq-a">To lower your freight class, increase your pallet density. Disassemble bulky items when possible, eliminate empty head space in cartons, stack cartons tightly, and use lower-profile pallets. Higher density results in a lower numerical class and cheaper rates per hundredweight (cwt).</div>
    </div>
    <div class="fc-faq-item">
      <div class="fc-faq-q">How do carriers verify dimensions and weight?</div>
      <div class="fc-faq-a">Modern freight cross-dock terminals utilize overhead infrared laser dimensioners and integrated floor scales. As forklift drivers pass through the terminal, the equipment automatically photographs, measures, and weighs the pallet within 2 seconds, generating an automated inspection record.</div>
    </div>
  </div>

  <!-- Related Tools -->
  <div style="background:#fff;border:1px solid #e2e8f0;border-radius:14px;padding:2rem;box-shadow:0 2px 8px rgba(0,0,0,.04);">
    <h2 style="font-size:1.25rem;color:#0f172a;margin:0 0 1.25rem;">Related Business &amp; Operations Calculators</h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(250px,1fr));gap:14px;">
      <a href="/business/roi-calculator" style="display:block;background:#f8fafc;border:1px solid #e2e8f0;border-radius:10px;padding:16px;text-decoration:none;color:inherit;transition:all .15s;" onmouseover="this.style.borderColor='#059669'" onmouseout="this.style.borderColor='#e2e8f0'">
        <div style="font-size:1.3rem;margin-bottom:6px;">📊</div>
        <div style="font-weight:700;color:#0f172a;font-size:.95rem;">Business ROI Calculator</div>
        <div style="color:#64748b;font-size:.82rem;margin-top:4px;">AAnalyze return on logistics investments</div>
      </a>
      <a href="/business/profit-margin-calculator" style="display:block;background:#f8fafc;border:1px solid #e2e8f0;border-radius:10px;padding:16px;text-decoration:none;color:inherit;transition:all .15s;" onmouseover="this.style.borderColor='#059669'" onmouseout="this.style.borderColor='#e2e8f0'">
        <div style="font-size:1.3rem;margin-bottom:6px;">💰</div>
        <div style="font-weight:700;color:#0f172a;font-size:.95rem;">Profit Margin Calculator</div>
        <div style="color:#64748b;font-size:.82rem;margin-top:4px;">Calculate gross and net margins after freight costs</div>
      </a>
      <a href="/business/markup-calculator" style="display:block;background:#f8fafc;border:1px solid #e2e8f0;border-radius:10px;padding:16px;text-decoration:none;color:inherit;transition:all .15s;" onmouseover="this.style.borderColor='#059669'" onmouseout="this.style.borderColor='#e2e8f0'">
        <div style="font-size:1.3rem;margin-bottom:6px;">🏷️</div>
        <div style="font-weight:700;color:#0f172a;font-size:.95rem;">Markup Calculator</div>
        <div style="color:#64748b;font-size:.82rem;margin-top:4px;">Set wholesale and retail prices with freight factored in</div>
      </a>
    </div>
  </div>

</div>
</main>

<script>
document.querySelectorAll('.fc-faq-q').forEach(function(q){
  q.addEventListener('click', function(){
    var a = this.nextElementSibling;
    if(a.style.display === 'none' || a.style.display === ''){
      a.style.display = 'block';
    } else {
      a.style.display = 'none';
    }
  });
});
</script>

<?php require_once '../includes/footer.php'; ?>
