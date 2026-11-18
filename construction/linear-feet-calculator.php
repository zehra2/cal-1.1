<?php
// ─── SEO Meta ───────────────────────────────────────────────────────────────
$pageTitle       = 'Linear Feet Calculator 2026 | Convert Linear Feet to Square Feet & Board Feet';
$metaDescription = 'Free linear feet calculator for 2026. Add multiple segments, convert linear feet to square feet, board feet, and inches. Perfect for lumber, flooring, fencing, crown molding, and baseboards.';
$metaKeywords    = 'linear feet calculator, linear foot calculator, linear feet to square feet calculator, how to calculate linear feet, convert linear feet to square feet, board feet calculator, linear ft calculator';

// ─── Structured Data (JSON-LD) ───────────────────────────────────────────────
$schemaData = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'               => 'WebApplication',
            'name'                => 'Linear Feet Calculator',
            'url'                 => 'https://americacalculator.com/construction/linear-feet-calculator',
            'description'         => 'Free linear feet calculator with multi-segment adding, linear feet to square feet conversion, board feet calculation, and common use-case guides for lumber, flooring, fencing, molding, and more.',
            'applicationCategory' => 'ConstructionApplication',
            'operatingSystem'     => 'All',
            'offers'              => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD'],
        ],
        [
            '@type'     => 'HowTo',
            'name'      => 'How to Calculate Linear Feet',
            'totalTime' => 'PT1M',
            'step'      => [
                ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Enter the measurement in feet and inches', 'text' => 'Enter the length of each segment in feet and inches. For 10 feet 6 inches, enter 10 feet and 6 inches.'],
                ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Add multiple segments', 'text' => 'Click "Add Segment" to add additional lengths. The calculator totals all segments into a single linear footage.'],
                ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Enter width for square feet conversion', 'text' => 'To convert linear feet to square feet, enter the width of the material in inches (e.g., 3.5" for a 2x4 board, or 12" for standard flooring planks).'],
                ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Enter thickness for board feet (lumber only)', 'text' => 'For lumber board feet, also enter the thickness in inches. Board feet = (width × thickness × length) ÷ 144.'],
            ],
        ],
        [
            '@type'      => 'FAQPage',
            'mainEntity' => [
                ['@type' => 'Question', 'name' => 'What is a linear foot?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A linear foot (also written lineal foot or LF) is simply a measurement of length — one foot (12 inches) in a straight line. It does not account for width or height. Linear feet are used when ordering materials sold by length, such as lumber, fencing, crown molding, gutters, and trim.']],
                ['@type' => 'Question', 'name' => 'How do you convert linear feet to square feet?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Square Feet = Linear Feet × (Width in inches ÷ 12). For example, 100 linear feet of 6-inch-wide flooring planks = 100 × (6 ÷ 12) = 50 square feet. You need to know the width of the material to make the conversion.']],
                ['@type' => 'Question', 'name' => 'What is the difference between linear feet and board feet?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Linear feet measure length only (one dimension). Board feet measure volume — they account for length, width, AND thickness. The formula is: Board Feet = (Thickness in inches × Width in inches × Length in feet) ÷ 12. A standard 1x12 board, 1 foot long = exactly 1 board foot.']],
                ['@type' => 'Question', 'name' => 'How do I calculate linear feet for fencing?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Measure the perimeter of the area you want to fence by walking each side and measuring its length in feet. Add all sides together to get total linear feet. Add 10% for gates, corners, and waste. Example: 50 ft + 30 ft + 50 ft + 30 ft = 160 linear feet of fence needed.']],
                ['@type' => 'Question', 'name' => 'How do I calculate linear feet for baseboards or crown molding?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Measure the perimeter of the room by adding all wall lengths. Subtract the width of all doorways (typically 3 feet each). Add 10–15% for waste from corner cuts and miters. For example, a 12×14 room has perimeter 12+14+12+14=52 LF, minus one 3-ft door = 49 LF, plus 15% waste ≈ 57 linear feet to order.']],
                ['@type' => 'Question', 'name' => 'How do I calculate linear feet for flooring?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'For strip or plank flooring, divide your room\'s square footage by the plank width in feet. Example: 200 sq ft room, 4-inch-wide planks → 200 ÷ (4/12) = 600 linear feet. Add 10% waste for a total of 660 linear feet. Most flooring is sold by the box covering a specific square footage, so verify with your flooring supplier.']],
                ['@type' => 'Question', 'name' => 'How do I calculate linear feet for lumber?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Lumber is typically sold in standard lengths (8, 10, 12, 14, 16 feet). Calculate the total linear feet you need, then order the combination of lengths that minimizes waste. For example, if you need 240 linear feet of 2×4, you might order 20 pieces of 12-foot boards (20 × 12 = 240 LF).']],
                ['@type' => 'Question', 'name' => 'What is the difference between square feet and linear feet?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Square feet measure area (two dimensions: length × width). Linear feet measure length only (one dimension). A room might be 200 square feet, but you\'d need to calculate the linear feet of baseboard separately by measuring each wall\'s length.']],
                ['@type' => 'Question', 'name' => 'How accurate is this linear feet calculator?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'This calculator provides mathematically exact conversions based on your inputs. Always add 10–15% waste to your total order to account for cuts, mistakes, and future repairs — especially for flooring, molding, and tile work.']],
            ],
        ],
    ],
    ['@type' => 'BreadcrumbList', 'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Construction', 'item' => 'https://americacalculator.com/construction/'],
      ['@type' => 'ListItem', 'position' => 3, 'name' => 'Linear Feet Calculator', 'item' => 'https://americacalculator.com/construction/linear-feet-calculator'],
    ]],

];

require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
/* ============================================================
   PAGE BASE
============================================================ */
body { background: #f5f7fa; }

.lf-page-wrap {
  max-width: 1320px;
  margin: 0 auto;
  padding: 2rem 1.5rem 4rem;
  display: grid;
  grid-template-columns: 220px 1fr 260px;
  gap: 2rem;
  align-items: start;
}

/* ============================================================
   SIDEBAR
============================================================ */
.toc-sidebar { position: sticky; top: 6rem; background: #fff; border-radius: 12px; border: 1px solid #e8edf5; box-shadow: 0 2px 12px rgba(0,0,0,0.04); overflow: hidden; }
.toc-sidebar-header { background: linear-gradient(135deg, #1e3a5f 0%, #2563eb 100%); color: #fff; padding: 1rem 1.25rem; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.8px; }
.toc-list { list-style: none; padding: 0.75rem 0; margin: 0; }
.toc-list li a { display: block; padding: 0.5rem 1.25rem; font-size: 0.85rem; color: #475569; text-decoration: none; border-left: 3px solid transparent; transition: all 0.2s; line-height: 1.4; }
.toc-list li a:hover, .toc-list li a.toc-active { color: #2563eb; background: #eff6ff; border-left-color: #2563eb; }
.toc-divider { height: 1px; background: #f1f5f9; margin: 0.5rem 0; }
.toc-related-label { padding: 0.5rem 1.25rem; font-size: 0.78rem; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; }
.toc-related-list { list-style: none; padding: 0; margin: 0 0 0.75rem; }
.toc-related-list li a { display: block; padding: 0.4rem 1.25rem; font-size: 0.82rem; color: #64748b; text-decoration: none; transition: color 0.15s; }
.toc-related-list li a:hover { color: #2563eb; }

/* ============================================================
   MAIN
============================================================ */
.main-content { min-width: 0; }
.page-hero { margin-bottom: 2rem; }
.page-hero h1 { font-size: 2.1rem; color: #0f172a; margin: 0 0 0.6rem; line-height: 1.2; }
.page-hero .hero-desc { font-size: 1.05rem; color: #64748b; line-height: 1.65; margin: 0 0 0.75rem; border-left: 4px solid #bfdbfe; padding-left: 1rem; }
.page-hero .breadcrumb { font-size: 0.8rem; color: #94a3b8; margin-bottom: 0.75rem; }
.page-hero .breadcrumb a { color: #64748b; text-decoration: none; }
.page-hero .breadcrumb a:hover { color: #2563eb; }

/* Calc Card */
.calc-card { background: #fff; border-radius: 14px; box-shadow: 0 4px 24px rgba(0,0,0,0.05); border: 1px solid #eef2f7; margin-bottom: 2.5rem; overflow: hidden; }
.calc-inner { display: grid; grid-template-columns: 1.1fr 1fr; gap: 0; }
.calc-form-panel { padding: 2rem; border-right: 1px solid #f0f4fa; }
.calc-results-panel { padding: 2rem; background: linear-gradient(160deg, #eff6ff 0%, #dbeafe 100%); }

/* Segments */
.segments-list { margin-bottom: 1rem; }
.segment-row {
  display: grid;
  grid-template-columns: 1fr 0.7fr 32px;
  gap: 0.5rem;
  align-items: center;
  margin-bottom: 0.6rem;
}
.seg-label { font-size: 0.78rem; color: #94a3b8; margin-bottom: 0.2rem; }
.seg-inputs { display: flex; gap: 0.4rem; align-items: center; }
.seg-inputs input { padding: 10px 10px; border: 1.5px solid #d1dae8; border-radius: 7px; font-size: 0.9rem; color: #0f172a; outline: none; background: #fff; box-sizing: border-box; }
.seg-inputs input:focus { border-color: #2563eb; box-shadow: 0 0 0 3px rgba(37,99,235,0.1); }
.seg-ft { width: 70px; }
.seg-in { width: 55px; }
.seg-unit { font-size: 0.78rem; color: #94a3b8; flex-shrink: 0; }
.seg-del {
  background: #fee2e2; border: none; border-radius: 6px; color: #b91c1c;
  width: 30px; height: 30px; font-size: 1.1rem; cursor: pointer; line-height: 1;
  display: flex; align-items: center; justify-content: center; transition: background 0.15s;
}
.seg-del:hover { background: #fecaca; }

.btn-add-seg {
  width: 100%; padding: 10px; border: 2px dashed #cbd5e1; background: #f8fafc;
  color: #64748b; font-size: 0.88rem; font-weight: 600; border-radius: 8px;
  cursor: pointer; transition: all 0.15s; margin-bottom: 1.25rem;
}
.btn-add-seg:hover { border-color: #2563eb; color: #2563eb; background: #eff6ff; }

/* Conversions */
.conv-section { border-top: 1px solid #f0f4fa; padding-top: 1.25rem; margin-top: 0.25rem; }
.conv-title { font-size: 0.85rem; font-weight: 700; color: #475569; margin-bottom: 0.75rem; }
.form-row-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; }
.form-field { margin-bottom: 0.75rem; }
.form-field label { display: block; font-weight: 600; font-size: 0.88rem; color: #1e293b; margin-bottom: 0.35rem; }
.form-field input { width: 100%; padding: 11px 13px; border: 1.5px solid #d1dae8; border-radius: 7px; font-size: 0.95rem; color: #0f172a; outline: none; transition: border-color 0.2s; box-sizing: border-box; background: #fff; }
.form-field input:focus { border-color: #2563eb; box-shadow: 0 0 0 3px rgba(37,99,235,0.1); }
.form-field .field-hint { font-size: 0.75rem; color: #94a3b8; margin-top: 0.25rem; }

.waste-row { display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; }
.waste-row label { font-weight: 600; font-size: 0.88rem; color: #1e293b; flex-shrink: 0; }
.waste-row input[type="range"] { flex: 1; accent-color: #2563eb; }
.waste-val { font-size: 0.9rem; font-weight: 700; color: #2563eb; min-width: 42px; }

.btn-calc { width: 100%; background: linear-gradient(135deg, #1e3a5f 0%, #2563eb 100%); color: #fff; padding: 14px; border: none; border-radius: 9px; font-size: 1rem; font-weight: 700; cursor: pointer; transition: opacity 0.2s, transform 0.15s; }
.btn-calc:hover { opacity: 0.92; transform: translateY(-1px); }

/* Results */
.results-heading { font-size: 1.15rem; font-weight: 700; color: #0f172a; margin: 0 0 0.25rem; }
.results-sub { font-size: 0.85rem; color: #64748b; margin: 0 0 1.25rem; }
.result-boxes { display: grid; grid-template-columns: 1fr; gap: 0.65rem; margin-bottom: 1rem; }
.res-box { background: #fff; border: 1.5px solid #e8edf5; border-radius: 10px; padding: 1rem; transition: box-shadow 0.2s; display: flex; justify-content: space-between; align-items: center; }
.res-box:hover { box-shadow: 0 4px 12px rgba(0,0,0,0.07); }
.res-box.primary { background: linear-gradient(135deg, #1e3a5f, #2563eb); border-color: transparent; box-shadow: 0 6px 18px rgba(37,99,235,0.25); flex-direction: column; align-items: flex-start; }
.res-val { font-size: 1.5rem; font-weight: 800; color: #2563eb; line-height: 1; }
.res-box.primary .res-val { color: #fff; font-size: 2rem; }
.res-lbl { font-size: 0.82rem; color: #64748b; font-weight: 600; }
.res-box.primary .res-lbl { color: rgba(255,255,255,0.75); margin-top: 0.25rem; }

/* Conversion quick table */
.quick-conv-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0.5rem; margin-top: 0.75rem; }
.qc-item { background: rgba(255,255,255,0.15); border-radius: 8px; padding: 0.5rem 0.75rem; }
.qc-val { font-size: 1rem; font-weight: 800; color: #fff; }
.qc-lbl { font-size: 0.73rem; color: rgba(255,255,255,0.7); }

/* Content */
.content-section { background: #fff; border-radius: 14px; border: 1px solid #eef2f7; box-shadow: 0 2px 12px rgba(0,0,0,0.03); padding: 2.25rem; margin-bottom: 2rem; scroll-margin-top: 6rem; }
.content-section h2 { font-size: 1.65rem; color: #0f172a; margin: 0 0 1.25rem; padding-bottom: 0.75rem; border-bottom: 2px solid #f0f4fa; }
.content-section h3 { font-size: 1.2rem; color: #1e293b; margin: 1.75rem 0 0.75rem; }
.content-section p { color: #475569; line-height: 1.75; margin-bottom: 1.25rem; font-size: 1rem; }
.content-section ul, .content-section ol { color: #475569; line-height: 1.75; padding-left: 1.5rem; margin-bottom: 1.25rem; }
.content-section li { margin-bottom: 0.5rem; }
.content-section strong { color: #1e293b; }

.formula-box { background: #0f172a; color: #e2e8f0; padding: 1.25rem 2rem; border-radius: 10px; font-family: 'Courier New', monospace; font-size: 1rem; text-align: center; margin: 1.25rem 0; letter-spacing: 0.5px; }
.formula-box span { color: #93c5fd; }

.data-table { width: 100%; border-collapse: collapse; border-radius: 10px; overflow: hidden; border: 1px solid #e8edf5; margin-bottom: 1.5rem; }
.data-table th { background: #1e3a5f; color: #fff; padding: 13px 16px; text-align: left; font-size: 0.88rem; font-weight: 600; }
.data-table td { padding: 12px 16px; border-bottom: 1px solid #f1f5f9; font-size: 0.9rem; color: #334155; }
.data-table tr:last-child td { border-bottom: none; }
.data-table tr:nth-child(even) td { background: #f8fafc; }
.data-table .val { color: #2563eb; font-weight: 700; }

.info-box { background: #eff6ff; border-left: 4px solid #2563eb; border-radius: 0 8px 8px 0; padding: 1rem 1.25rem; margin: 1.25rem 0; font-size: 0.95rem; color: #1e3a5f; line-height: 1.6; }

.faq-item { border-bottom: 1px solid #f0f4fa; padding-bottom: 1.25rem; margin-bottom: 1.25rem; }
.faq-item:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
.faq-q { font-size: 1.02rem; font-weight: 700; color: #0f172a; margin-bottom: 0.6rem; cursor: pointer; display: flex; justify-content: space-between; align-items: flex-start; gap: 1rem; }
.faq-q::after { content: '+'; font-size: 1.3rem; color: #2563eb; flex-shrink: 0; }
.faq-item.open .faq-q::after { content: '−'; }
.faq-a { color: #475569; line-height: 1.7; font-size: 0.97rem; display: none; }
.faq-item.open .faq-a { display: block; }

/* Right Sidebar */
.right-sidebar { position: sticky; top: 6rem; display: flex; flex-direction: column; gap: 1.25rem; }
.sidebar-widget { background: #fff; border-radius: 12px; border: 1px solid #e8edf5; box-shadow: 0 4px 18px rgba(0,0,0,0.05); overflow: hidden; }
.widget-header-blue { background: linear-gradient(135deg, #1e3a5f, #2563eb); color: #fff; padding: 1rem 1.25rem; }
.widget-header-blue .widget-title { font-size: 1rem; font-weight: 700; }
.widget-header-blue .widget-sub { font-size: 0.8rem; color: rgba(255,255,255,0.75); margin-top: 0.2rem; }
.widget-body { padding: 0.75rem 0; }
.widget-row { display: flex; justify-content: space-between; align-items: center; padding: 0.65rem 1.25rem; border-bottom: 1px solid #f8fafc; }
.widget-row:last-child { border-bottom: none; }
.widget-row:hover { background: #eff6ff; }
.widget-label { font-size: 0.82rem; font-weight: 600; color: #334155; }
.widget-sublabel { font-size: 0.72rem; color: #94a3b8; }
.widget-value { font-size: 0.85rem; font-weight: 700; color: #2563eb; text-align: right; font-family: monospace; }
.quick-access-widget { background: #fff; border-radius: 12px; border: 1px solid #e8edf5; box-shadow: 0 2px 12px rgba(0,0,0,0.04); overflow: hidden; }
.widget-head { padding: 0.9rem 1.25rem; background: #f8fafc; border-bottom: 1px solid #f0f4fa; font-size: 0.83rem; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; }
.widget-links { list-style: none; padding: 0.5rem 0; margin: 0; }
.widget-links li a { display: flex; align-items: center; gap: 0.5rem; padding: 0.65rem 1.25rem; font-size: 0.85rem; color: #475569; text-decoration: none; border-left: 3px solid transparent; transition: all 0.15s; font-weight: 500; }
.widget-links li a:hover { color: #2563eb; background: #eff6ff; border-left-color: #2563eb; }

@media (max-width: 1200px) { .lf-page-wrap { grid-template-columns: 200px 1fr 240px; } }
@media (max-width: 1024px) { .lf-page-wrap { grid-template-columns: 1fr; } .toc-sidebar, .right-sidebar { position: static; } .right-sidebar { display: grid; grid-template-columns: 1fr 1fr; } }
@media (max-width: 768px) { .lf-page-wrap { padding: 1rem 1rem 3rem; } .calc-inner { grid-template-columns: 1fr; } .calc-form-panel { border-right: none; border-bottom: 1px solid #f0f4fa; } .right-sidebar { grid-template-columns: 1fr; } .page-hero h1 { font-size: 1.6rem; } .quick-conv-grid { grid-template-columns: 1fr; } }
</style>

<main id="main-content">
<div class="lf-page-wrap">

  <!-- LEFT TOC -->
  <aside class="toc-sidebar">
    <div class="toc-sidebar-header">📏 In This Article</div>
    <ul class="toc-list">
      <li><a href="#calculator" class="toc-active">Linear Feet Calculator</a></li>
      <li><a href="#what-is-linear-foot">What Is a Linear Foot?</a></li>
      <li><a href="#lf-to-sqft">Linear Feet → Square Feet</a></li>
      <li><a href="#lf-to-bf">Linear Feet → Board Feet</a></li>
      <li><a href="#use-case">Use Cases by Project</a></li>
      <li><a href="#conversion-chart">Conversion Chart</a></li>
      <li><a href="#lumber-guide">Lumber Quick Guide</a></li>
      <li><a href="#faq">Frequently Asked Questions</a></li>
    </ul>
    <div class="toc-divider"></div>
    <div class="toc-related-label">Related Calculators</div>
    <ul class="toc-related-list">
      <li><a href="<?php echo $baseUrl; ?>/construction/rafter-calculator">Rafter Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/calculators/board-foot.php">Board Foot Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-calculator">Concrete Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/calculators/cubic-yard.php">Cubic Yard Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/home-addition-cost-calculator">Home Addition Cost</a></li>
    </ul>
  </aside>

  <!-- MAIN CONTENT -->
  <div class="main-content">

    <div class="page-hero">
      <div class="breadcrumb">
        <a href="<?php echo $baseUrl; ?>/index.php">Home</a> º
        <a href="<?php echo $baseUrl; ?>/construction/">Construction</a> º
        Linear Feet Calculator
      </div>
      <h1>Linear Feet Calculator 2026 | Convert Linear Feet to Square Feet & Board Feet</h1>
      <div style="display:flex;align-items:center;flex-wrap:wrap;gap:10px;margin-bottom:.75rem;">
        <span style="font-size:.82rem;color:#64748b;">Reviewed by the <strong style="color:#1e293b;">AmericaCalculator.com editorial team</strong></span>
        <span style="background:#dbeafe;color:#1e40af;font-size:.75rem;font-weight:700;padding:3px 10px;border-radius:20px;border:1px solid #bfdbfe;">🕐 Last Updated: August 2026</span>
      </div>
      <p class="hero-desc">
        Calculate <strong>linear feet</strong> for lumber, flooring, fencing, crown molding, gutters, and baseboards.
        Add multiple segments, convert to <strong>square feet</strong> (with width), compute <strong>board feet</strong> (with thickness),
        and add a waste percentage — all in one free tool.
      </p>
    </div>

    <!-- CALCULATOR -->
    <div class="calc-card" id="calculator">
      <div class="calc-inner">
        <div class="calc-form-panel">
          <p style="font-size:0.88rem;color:#64748b;margin-bottom:1rem;">Add one or more segments to calculate total linear footage:</p>

          <div class="segments-list" id="segments-list">
            <!-- Segments injected by JS -->
          </div>

          <button type="button" class="btn-add-seg" id="add-seg-btn">+ Add Another Segment</button>

          <div class="conv-section">
            <div class="conv-title">📐 Optional Conversions</div>
            <div class="form-row-2">
              <div class="form-field">
                <label for="width_in">Width (inches)</label>
                <input type="number" id="width_in" value="3.5" min="0" step="0.125" autocomplete="off">
                <div class="field-hint">For sq ft conversion (e.g., 3.5" for 2×4, 12" for flooring)</div>
              </div>
              <div class="form-field">
                <label for="thickness_in">Thickness (inches)</label>
                <input type="number" id="thickness_in" value="1.5" min="0" step="0.125" autocomplete="off">
                <div class="field-hint">For board feet (lumber only)</div>
              </div>
            </div>
            <div class="waste-row">
              <label for="waste_pct">Waste %</label>
              <input type="range" id="waste_pct" min="0" max="25" value="10" step="5">
              <span class="waste-val" id="waste-display">10%</span>
            </div>
          </div>

          <button type="button" class="btn-calc" id="lf-calc-btn">📏 Calculate Linear Feet</button>
        </div>

        <div class="calc-results-panel">
          <h3 class="results-heading">Your Linear Footage Results</h3>
          <p class="results-sub" id="results-desc">Based on your segments</p>
          <div class="result-boxe">
            <div class="res-box primary">
              <span class="res-val" id="res_lf">0.00 LF</span>
              <span class="res-lbl">Total Linear Feet (with waste)</span>
              <div class="quick-conv-grid">
                <div class="qc-item"><div class="qc-val" id="res_inche">0"</div><div class="qc-lbl">Total Inches</div></div>
                <div class="qc-item"><div class="qc-val" id="res_meter">0 m</div><div class="qc-lbl">Total Meters</div></div>
                <div class="qc-item"><div class="qc-val" id="res_sqft">”</div><div class="qc-lbl">Square Feet</div></div>
                <div class="qc-item"><div class="qc-val" id="res_bf">”</div><div class="qc-lbl">Board Feet</div></div>
              </div>
            </div>
            <div class="res-box">
              <div>
                <div class="res-lbl">Raw Linear Feet (no waste)</div>
              </div>
              <span class="res-val" id="res_lf_raw" style="font-size:1.15rem;">0.00</span>
            </div>
            <div class="res-box">
              <div>
                <div class="res-lbl">Waste Added</div>
              </div>
              <span class="res-val" id="res_waste_added" style="font-size:1.15rem;">0.00</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- WHAT IS LF -->
    <section class="content-section" id="what-is-linear-foot">
      <h2>What Is a Linear Foot?</h2>
      <p>
        A <strong>linear foot</strong> (also called a lineal foot, abbreviated LF or lf) is simply a measurement of <em>length</em> — one foot (12 inches) in a straight line. Unlike square feet (which measure area — length × width) or cubic feet
        (volume — length × width × height), a linear foot is a single dimension.
      </p>
      <p>
        Linear feet are used when you're ordering materials that are sold by the running length, regardless of width or depth. Common examples:
      </p>
      <ul>
        <li><strong>Lumber:</strong> 2×4s, 2×6s, fence rails, and dimensional lumber are all sold by the linear foot or by standard lengths (8, 10, 12 ft).</li>
        <li><strong>Flooring:</strong> Hardwood strip flooring and engineered wood planks are often priced per linear foot.</li>
        <li><strong>Fencing:</strong> "I need 200 linear feet of fence" means a 200-foot perimeter, regardless of post height.</li>
        <li><strong>Molding & Trim:</strong> Baseboards, crown molding, chair rail, and casing are all measured and sold in linear feet.</li>
        <li><strong>Gutters & Downspouts:</strong> Priced per linear foot of gutter run.</li>
        <li><strong>Countertops:</strong> Some countertops (especially laminate) are priced per linear foot at a standard 25" depth.</li>
      </ul>
    </section>

    <!-- LF TO SQFT -->
    <section class="content-section" id="lf-to-sqft">
      <h2>How to Convert Linear Feet to Square Feet</h2>
      <p>
        To convert linear feet to square feet, you need to know the <strong>width</strong> of the material:
      </p>
      <div class="formula-box">
        Square Feet = Linear Feet × <span>(Width in inches ÷ 12)</span>
      </div>
      <table class="data-table">
        <thead>
          <tr><th>Material</th><th>Width</th><th>100 LF → Sq Ft</th><th>Notes</th></tr>
        </thead>
        <tbody>
          <tr><td>2×4 lumber</td><td>3.5"</td><td class="val">29.2 sq ft</td><td>Actual width 3.5", nominal 4"</td></tr>
          <tr><td>2×6 lumber</td><td>5.5"</td><td class="val">45.8 sq ft</td><td>Actual width 5.5"</td></tr>
          <tr><td>2×12 lumber</td><td>11.25"</td><td class="val">93.8 sq ft</td><td>Common for shelving</td></tr>
          <tr><td>3" strip flooring</td><td>3"</td><td class="val">25.0 sq ft</td><td>Standard hardwood width</td></tr>
          <tr><td>5" plank flooring</td><td>5"</td><td class="val">41.7 sq ft</td><td>Wide plank</td></tr>
          <tr><td>6" fence boards</td><td>5.5"</td><td class="val">45.8 sq ft</td><td>Dog-ear fence picket</td></tr>
          <tr><td>Laminate countertop</td><td>25"</td><td class="val">208.3 sq ft</td><td>Standard depth with backsplash</td></tr>
        </tbody>
      </table>
    </section>

    <!-- LF TO BF -->
    <section class="content-section" id="lf-to-bf">
      <h2>Linear Feet to Board Feet — Lumber Calculation</h2>
      <p>
        <strong>Board feet</strong> measure the volume of lumber — accounting for length, width, and thickness. This is how rough-sawn lumber
        is sold at sawmills and hardwood dealers:
      </p>
      <div class="formula-box">
        Board Feet = <span>(Thicknes" × Width" × Length ft)</span> ÷ 12
      </div>
      <p>
        One board foot = a piece of wood 1 inch thick, 12 inches wide, and 12 inches long (= 1 ft³/12).
      </p>
      <table class="data-table">
        <thead>
          <tr><th>Lumber Size</th><th>BF per Linear Foot</th><th>100 LF = BF</th></tr>
        </thead>
        <tbody>
          <tr><td>1×4 (actual 0.75" × 3.5")</td><td class="val">0.219 BF/LF</td><td>21.9 BF</td></tr>
          <tr><td>1×6 (actual 0.75" × 5.5")</td><td class="val">0.344 BF/LF</td><td>34.4 BF</td></tr>
          <tr><td>2×4 (actual 1.5" × 3.5")</td><td class="val">0.438 BF/LF</td><td>43.8 BF</td></tr>
          <tr><td>2×6 (actual 1.5" × 5.5")</td><td class="val">0.688 BF/LF</td><td>68.8 BF</td></tr>
          <tr><td>2×8 (actual 1.5" × 7.25")</td><td class="val">0.906 BF/LF</td><td>90.6 BF</td></tr>
          <tr><td>2×10 (actual 1.5" × 9.25")</td><td class="val">1.156 BF/LF</td><td>115.6 BF</td></tr>
          <tr><td>2×12 (actual 1.5" × 11.25")</td><td class="val">1.406 BF/LF</td><td>140.6 BF</td></tr>
          <tr><td>4×4 (actual 3.5" × 3.5")</td><td class="val">1.021 BF/LF</td><td>102.1 BF</td></tr>
        </tbody>
      </table>
      <div class="info-box">
        💡 <strong>Note:</strong> Board feet use actual (dressed) dimensions, not nominal. A "2×4" is actually 1.5" × 3.5" after milling. Hardwood lumber dealers often use nominal/rough dimensions for pricing, so always clarify with your supplier.
      </div>
    </section>

    <!-- USE CASES -->
    <section class="content-section" id="use-case">
      <h2>How to Calculate Linear Feet by Project Type</h2>

      <h3>🪵 Lumber</h3>
      <p>Measure each board's required length and sum them. Lumber comes in standard lengths (8, 10, 12, 14, 16 ft) — round each piece up to the nearest available length. Add 10% for cuts and waste. Order the combination of lengths that minimizes leftover.</p>

      <h3>🏠 Baseboards & Crown Molding</h3>
      <p>Measure each wall's length. Subtract door widths (typically 3 ft per door, or measure actual opening). Sum all walls. Add 15% for miter cuts, corner waste, and length matching. Example: 12×15 ft room = (12+15+12+15) − 3 ft door = 51 LF × 1.15 = <strong>59 LF to order</strong>.</p>

      <h3>🏡 Fencing</h3>
      <p>Walk the perimeter and measure each side. Add all sides. Subtract gate openings. Add 5–10% for posts and corner adjustments. Example: 50+40+50+40 ft yard = 180 LF − 10 ft gates = 170 LF + 10% = <strong>187 LF</strong>.</p>

      <h3>🛖 Hardwood Flooring</h3>
      <p>Calculate room square footage. Divide by plank width (in feet) to get linear footage. Add 10–15% waste. Most flooring is sold by the box — confirm coverage per box with your retailer.</p>

      <h3>🌧️ Gutters</h3>
      <p>Measure the eave length along each side of the roof that needs a gutter. Sum all sections. Each downspout needs 10 LF extra (approximate for vertical drop). Add 5% for overlap at seams.</p>

      <h3>🪟 Window/Door Casing</h3>
      <p>Each standard door opening uses about 17 LF of casing (2 sides + top). A standard window uses 10–14 LF. Count your openings and multiply accordingly, then add 15% for miter waste.</p>
    </section>

    <!-- CONVERSION CHART -->
    <section class="content-section" id="conversion-chart">
      <h2>Linear Feet Conversion Quick Reference Chart</h2>
      <table class="data-table">
        <thead>
          <tr><th>Linear Feet</th><th>Inches</th><th>Meters</th><th>Yards</th><th>Centimeters</th></tr>
        </thead>
        <tbody>
          <tr><td>1 LF</td><td class="val">12"</td><td>0.305 m</td><td>0.333 yd</td><td>30.5 cm</td></tr>
          <tr><td>5 LF</td><td class="val">60"</td><td>1.524 m</td><td>1.667 yd</td><td>152.4 cm</td></tr>
          <tr><td>10 LF</td><td class="val">120"</td><td>3.048 m</td><td>3.333 yd</td><td>304.8 cm</td></tr>
          <tr><td>25 LF</td><td class="val">300"</td><td>7.620 m</td><td>8.333 yd</td><td>762.0 cm</td></tr>
          <tr><td>50 LF</td><td class="val">600"</td><td>15.24 m</td><td>16.67 yd</td><td>1524 cm</td></tr>
          <tr><td>100 LF</td><td class="val">1,200"</td><td>30.48 m</td><td>33.33 yd</td><td>3048 cm</td></tr>
          <tr><td>200 LF</td><td class="val">2,400"</td><td>60.96 m</td><td>66.67 yd</td><td>6096 cm</td></tr>
          <tr><td>500 LF</td><td class="val">6,000"</td><td>152.4 m</td><td>166.7 yd</td><td>15,240 cm</td></tr>
        </tbody>
      </table>
    </section>

    <!-- FAQ -->
    <section class="content-section" id="faq">
      <h2>Frequently Asked Questions — Linear Feet</h2>
      <div class="faq-item open">
        <div class="faq-q">What is a linear foot?</div>
        <div class="faq-a">A linear foot is simply a measurement of length — <strong>one foot (12 inches) in a straight line</strong>. It is a single dimension with no regard for width or height. Linear feet are used when ordering materials sold by length: lumber, fencing, molding, gutters, and countertops.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">How do you convert linear feet to square feet?</div>
        <div class="faq-a"><strong>Square Feet = Linear Feet × (Width in inches ÷ 12)</strong>. You need to know the width. Example: 100 LF of 6-inch-wide flooring = 100 × (6 ÷ 12) = 50 square feet.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">What is the difference between linear feet and board feet?</div>
        <div class="faq-a">Linear feet measure length only. Board feet measure volume: <strong>BF = (Thicknes" × Width" × Length ft) ÷ 12</strong>. A 2×6, 10 feet long = (1.5 × 5.5 × 10) ÷ 12 = 6.875 board feet.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">How do I calculate linear feet for fencing?</div>
        <div class="faq-a">Measure the perimeter: add all sides. Subtract gate openings. Add 5–10% for posts and waste. Example: 50+40+50+40 = 180 LF − 10 ft gates = 170 LF + 10% = <strong>187 LF to order</strong>.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">How do I calculate linear feet for baseboards or crown molding?</div>
        <div class="faq-a">Add all wall lengths. Subtract doorway widths. Add 15% for miter cuts and waste. For a 12×15 ft room with one door: (12+15+12+15) − 3 = 51 LF × 1.15 = <strong>59 LF to order</strong>.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">How do I calculate linear feet for flooring?</div>
        <div class="faq-a">Divide room square footage by plank width in feet. Example: 200 sq ft room, 4" planks → 200 ÷ (4÷12) = 600 LF. Add 10–15% waste = 660–690 LF. Most flooring is sold by the box — verify coverage per box.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">What is the difference between square feet and linear feet?</div>
        <div class="faq-a">Square feet measure <strong>area</strong> (length × width). Linear feet measure <strong>length only</strong>. A 200 sq ft room might need 52 linear feet of baseboard — two completely different measurements for different materials.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">How accurate is this linear feet calculator?</div>
        <div class="faq-a">The calculations are mathematically exact. Always order <strong>10–15% more</strong> than your calculated total to account for cuts, mistakes, and matching — especially for flooring, molding, and patterned materials.</div>
      </div>
    </section>

  </div><!-- /main-content -->

  <!-- RIGHT SIDEBAR -->
  <aside class="right-sidebar">

    <div class="sidebar-widget">
      <div class="widget-header-blue">
        <div class="widget-title">📏 Common Conversions</div>
        <div class="widget-sub">Per linear foot values</div>
      </div>
      <div class="widget-body">
        <div class="widget-row"><div><div class="widget-label">1 Linear Foot</div><div class="widget-sublabel">In inches</div></div><div class="widget-value">12 inches</div></div>
        <div class="widget-row"><div><div class="widget-label">1 Linear Foot</div><div class="widget-sublabel">In meters</div></div><div class="widget-value">0.3048 m</div></div>
        <div class="widget-row"><div><div class="widget-label">2×4, 1 LF</div><div class="widget-sublabel">Board feet</div></div><div class="widget-value">0.44 BF</div></div>
        <div class="widget-row"><div><div class="widget-label">2×6, 1 LF</div><div class="widget-sublabel">Board feet</div></div><div class="widget-value">0.69 BF</div></div>
        <div class="widget-row"><div><div class="widget-label">2×8, 1 LF</div><div class="widget-sublabel">Board feet</div></div><div class="widget-value">0.91 BF</div></div>
        <div class="widget-row"><div><div class="widget-label">2×12, 1 LF</div><div class="widget-sublabel">Board feet</div></div><div class="widget-value">1.41 BF</div></div>
      </div>
    </div>

    <div class="quick-access-widget">
      <div class="widget-head">🔗 Construction Tools</div>
      <ul class="widget-link">
        <li><a href="<?php echo $baseUrl; ?>/construction/rafter-calculator">🏗️ Rafter Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/calculators/board-foot.php">🪵 Board Foot Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-calculator">🧱 Concrete Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/calculators/cubic-yard.php">📦 Cubic Yard Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/real-estate/home-inspection-cost-calculator">🔍 Home Inspection Cost</a></li>
      </ul>
    </div>

  </aside>

</div><!-- /lf-page-wrap -->
</main>

<script>
(function () {
  var segCount = 0;
  var segList  = document.getElementById('segments-list');

  function addSegment(ftVal, inVal) {
    segCount++;
    var row = document.createElement('div');
    row.className = 'segment-row';
    row.innerHTML =
      '<div class="seg-input">' +
        '<input type="number" class="seg-ft" placeholder="ft" value="' + (ftVal || 10) + '" min="0" step="1">' +
        '<span class="seg-unit">ft</span>' +
        '<input type="number" class="seg-in" placeholder="in" value="' + (inVal || 0) + '" min="0" max="11" step="1">' +
        '<span class="seg-unit">in</span>' +
      '</div>' +
      '<button class="seg-del" title="Remove">&times;</button>';
    row.querySelector('.seg-del').addEventListener('click', function () {
      row.remove();
      calculate();
    });
    row.querySelectorAll('input').forEach(function (el) {
      el.addEventListener('input', calculate);
    });
    segList.appendChild(row);
    calculate();
  }

  document.getElementById('add-seg-btn').addEventListener('click', function () {
    addSegment(0, 0);
  });

  document.getElementById('waste_pct').addEventListener('input', function () {
    document.getElementById('waste-display').textContent = this.value + '%';
    calculate();
  });

  ['width_in','thickness_in'].forEach(function (id) {
    document.getElementById(id).addEventListener('input', calculate);
  });

  document.getElementById('lf-calc-btn').addEventListener('click', calculate);

  function fmtLF(v) { return v.toFixed(2) + ' LF'; }
  function fmtIn(v) { return Math.round(v) + '"'; }
  function fmtM(v)  { return v.toFixed(2) + ' m'; }
  function fmtBF(v) { return v.toFixed(1) + ' BF'; }
  function fmtSF(v) { return v.toFixed(1) + ' SF'; }

  function calculate() {
    var rows = segList.querySelectorAll('.segment-row');
    var totalLFRaw = 0;
    rows.forEach(function (row) {
      var ft = parseFloat(row.querySelector('.seg-ft').value) || 0;
      var inches = parseFloat(row.querySelector('.seg-in').value) || 0;
      totalLFRaw += ft + (inches / 12);
    });

    var waste    = parseFloat(document.getElementById('waste_pct').value) || 0;
    var widthIn  = parseFloat(document.getElementById('width_in').value)  || 0;
    var thickIn  = parseFloat(document.getElementById('thickness_in').value) || 0;

    var wasteAdded = totalLFRaw * (waste / 100);
    var totalLF    = totalLFRaw + wasteAdded;

    var totalIn    = totalLF * 12;
    var totalM     = totalLF * 0.3048;

    var sqFt = widthIn > 0 ? totalLF * (widthIn / 12) : null;
    var bfVal = (widthIn > 0 && thickIn > 0) ? (thickIn * widthIn * totalLF) / 12 : null;

    document.getElementById('res_lf').textContent          = fmtLF(totalLF);
    document.getElementById('res_lf_raw').textContent      = fmtLF(totalLFRaw);
    document.getElementById('res_waste_added').textContent = fmtLF(wasteAdded);
    document.getElementById('res_inches').textContent      = fmtIn(totalIn);
    document.getElementById('res_meters').textContent      = fmtM(totalM);
    document.getElementById('res_sqft').textContent        = sqFt !== null ? fmtSF(sqFt) : '”';
    document.getElementById('res_bf').textContent          = bfVal !== null ? fmtBF(bfVal) : '”';

    var segCount = rows.length;
    document.getElementById('results-desc').textContent =
      segCount + ' segment' + (segCount !== 1 ? 's' : '') +
      ', ' + waste + '% waste' +
      (widthIn > 0 ? ', ' + widthIn + '" wide' : '');
  }

  // FAQ accordion
  document.querySelectorAll('.faq-q').forEach(function (q) {
    q.addEventListener('click', function () {
      var item = q.parentElement;
      var wasOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(function (o) { o.classList.remove('open'); });
      if (!wasOpen) item.classList.add('open');
    });
  });

  // Init with 3 example segments
  addSegment(12, 0);
  addSegment(8, 6);
  addSegment(14, 0);
})();
</script>

<?php require_once '../includes/footer.php'; ?>
