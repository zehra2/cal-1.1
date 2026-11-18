<?php
// ─── SEO Meta ───────────────────────────────────────────────────────────────
$pageTitle       = 'Rafter Calculator 2026 | Calculate Rafter Length, Pitch & Lumber Needed';
$metaDescription = 'Free rafter calculator for 2026. Calculate exact rafter length, ridge board length, number of rafters, board feet, and material cost. Supports common, hip, valley, and jack rafters. Includes pitch chart.';
$metaKeywords    = 'rafter calculator, roof rafter calculator, rafter length calculator, roof pitch calculator, common rafter calculator, how to calculate rafter length, rafter size calculator, hip rafter calculator';

// ─── Structured Data (JSON-LD) ───────────────────────────────────────────────
$schemaData = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'               => 'WebApplication',
            'name'                => 'Rafter Calculator',
            'url'                 => 'https://americacalculator.com/construction/rafter-calculator',
            'description'         => 'Free rafter calculator that computes rafter length, ridge board length, number of rafters, board feet of lumber, and material cost estimate based on run, pitch, spacing, and overhang.',
            'applicationCategory' => 'ConstructionApplication',
            'operatingSystem'     => 'All',
            'offers'              => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD'],
        ],
        [
            '@type'     => 'HowTo',
            'name'      => 'How to Calculate Rafter Length',
            'totalTime' => 'PT2M',
            'step'      => [
                ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Measure the run', 'text' => 'The run is the horizontal distance from the wall plate to the center ridge. It is exactly half the total building width (span). For a 30-foot wide building, the run is 15 feet.'],
                ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Enter the roof pitch', 'text' => 'Pitch is expressed as rise over run — e.g., 6/12 means 6 inches of rise for every 12 inches of run. Common residential pitches are 4/12 to 8/12.'],
                ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Enter rafter spacing and overhang', 'text' => 'Standard rafter spacing is 16 or 24 inches on center. Overhang is how far the rafter extends past the wall plate (typically 12–24 inches).'],
                ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Enter building length and lumber size', 'text' => 'The building length determines how many rafters are needed per side. Select your lumber size (2×6, 2×8, 2×10, 2×12).'],
                ['@type' => 'HowToStep', 'position' => 5, 'name' => 'Click Calculate', 'text' => 'Get rafter length, ridge board length, number of rafters, board feet, and an estimated lumber cost.'],
            ],
        ],
        [
            '@type'      => 'FAQPage',
            'mainEntity' => [
                ['@type' => 'Question', 'name' => 'How do you calculate rafter length?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Rafter length is calculated using the Pythagorean theorem: Rafter Length = √(Rise² + Run²). The rise equals the run × pitch (rise per 12 inches ÷ 12). Add the overhang length to get the total rafter cut length from ridge to tail. Example: 15-foot run, 6/12 pitch — Rise = 15 × (6/12) = 7.5 ft. Rafter = √(15² + 7.5²) = √(225 + 56.25) = √281.25 = 16.77 ft.']],
                ['@type' => 'Question', 'name' => 'What is roof pitch and how do I measure it?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Roof pitch describes how steep a roof is — expressed as rise over a 12-inch run (e.g., 6/12 = 6 inches rise per 12 inches horizontal). To measure an existing roof pitch, place a 12-inch level horizontally on the roof surface, hold it level, and measure the vertical distance from the level\'s end to the roof surface. That measurement is your rise.']],
                ['@type' => 'Question', 'name' => 'What is the most common roof pitch in the US?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'The most common residential roof pitches in the United States are 4/12 and 6/12. A 4/12 pitch is considered a low-slope roof and is common in warmer, drier climates. A 6/12 pitch is the most popular across the country — balanced between water runoff efficiency and rafter lumber cost. Steeper pitches (8/12–12/12) are common in high-snow regions like New England, Colorado, and the Pacific Northwest.']],
                ['@type' => 'Question', 'name' => 'How many rafters do I need?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'For 16-inch on-center spacing: Number of rafters per side = (Building length in inches ÷ 16) + 1. For 24-inch spacing: (Building length in inches ÷ 24) + 1. Double the count for both sides of the roof. Add 2 for gable end rafters. Always round up and add 10% for waste and cuts.']],
                ['@type' => 'Question', 'name' => 'What size lumber should I use for rafters?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Rafter sizing depends on span, spacing, species, and load. Common guidelines for 16-inch spacing (Southern Yellow Pine): 2×6 up to 14-foot span, 2×8 up to 18-foot span, 2×10 up to 22-foot span, 2×12 up to 26-foot span. Always consult your local building code and a structural engineer for snow-load regions or unusual spans.']],
                ['@type' => 'Question', 'name' => 'What is a ridge board and how long should it be?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'The ridge board runs horizontally at the peak of the roof, connecting the tops of opposing rafters. Its length equals the building length minus twice the thickness of the gable end rafters. For most gable roofs, the ridge board is the same length as the building. It should be one size larger than the rafter lumber (e.g., if rafters are 2×8, use a 2×10 or 2×12 ridge board).']],
                ['@type' => 'Question', 'name' => 'What is the difference between common, hip, valley, and jack rafters?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Common rafters run perpendicular from the wall plate to the ridge board. Hip rafters run diagonally from a corner to the ridge on a hip roof. Valley rafters run diagonally in the interior angle where two roof sections meet. Jack rafters are shorter rafters that run from the wall plate to a hip or valley rafter. This calculator focuses on common rafter calculations for gable roofs.']],
                ['@type' => 'Question', 'name' => 'Do I need a building permit for roof repairs or replacement?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Most US jurisdictions require a permit for structural roof work — including rafter replacement, major repairs, or changes to roof framing. Re-roofing (replacing shingles only) may not require a permit in some areas. Always check with your local building department. Working without a required permit can result in fines, required demolition, and insurance complications.']],
                ['@type' => 'Question', 'name' => 'How accurate is this rafter calculator?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'This calculator uses the standard Pythagorean theorem for common rafter length calculation and industry-standard formulas for board feet and rafter count. It is accurate for gable roof common rafters. For hip roofs, valley roofs, or complex geometries, consult a licensed contractor or structural engineer.']],
            ],
        ],
    ],
    ['@type' => 'BreadcrumbList', 'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Construction', 'item' => 'https://americacalculator.com/construction/'],
      ['@type' => 'ListItem', 'position' => 3, 'name' => 'Rafter Calculator', 'item' => 'https://americacalculator.com/construction/rafter-calculator'],
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

.rafter-page-wrap {
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
.toc-sidebar-header { background: linear-gradient(135deg, #78350f 0%, #b45309 100%); color: #fff; padding: 1rem 1.25rem; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.8px; }
.toc-list { list-style: none; padding: 0.75rem 0; margin: 0; }
.toc-list li a { display: block; padding: 0.5rem 1.25rem; font-size: 0.85rem; color: #475569; text-decoration: none; border-left: 3px solid transparent; transition: all 0.2s; line-height: 1.4; }
.toc-list li a:hover, .toc-list li a.toc-active { color: #b45309; background: #fffbeb; border-left-color: #b45309; }
.toc-divider { height: 1px; background: #f1f5f9; margin: 0.5rem 0; }
.toc-related-label { padding: 0.5rem 1.25rem; font-size: 0.78rem; font-weight: 700; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; }
.toc-related-list { list-style: none; padding: 0; margin: 0 0 0.75rem; }
.toc-related-list li a { display: block; padding: 0.4rem 1.25rem; font-size: 0.82rem; color: #64748b; text-decoration: none; transition: color 0.15s; }
.toc-related-list li a:hover { color: #b45309; }

/* ============================================================
   MAIN
============================================================ */
.main-content { min-width: 0; }
.page-hero { margin-bottom: 2rem; }
.page-hero h1 { font-size: 2.1rem; color: #0f172a; margin: 0 0 0.6rem; line-height: 1.2; }
.page-hero .hero-desc { font-size: 1.05rem; color: #64748b; line-height: 1.65; margin: 0 0 0.75rem; border-left: 4px solid #fde68a; padding-left: 1rem; }
.page-hero .breadcrumb { font-size: 0.8rem; color: #94a3b8; margin-bottom: 0.75rem; }
.page-hero .breadcrumb a { color: #64748b; text-decoration: none; }
.page-hero .breadcrumb a:hover { color: #b45309; }

/* Calc Card */
.calc-card { background: #fff; border-radius: 14px; box-shadow: 0 4px 24px rgba(0,0,0,0.05); border: 1px solid #eef2f7; margin-bottom: 2.5rem; overflow: hidden; }
.calc-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 0; }
.calc-form-panel { padding: 2rem; border-right: 1px solid #f0f4fa; }
.calc-results-panel { padding: 2rem; background: linear-gradient(160deg, #fffbeb 0%, #fef3c7 100%); }

/* Form */
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
.form-field { margin-bottom: 1.25rem; }
.form-field label { display: block; font-weight: 600; font-size: 0.9rem; color: #1e293b; margin-bottom: 0.45rem; }
.form-field input, .form-field select { width: 100%; padding: 13px 15px; border: 1.5px solid #d1dae8; border-radius: 8px; font-size: 1rem; color: #0f172a; outline: none; transition: border-color 0.2s; box-sizing: border-box; background: #fff; }
.form-field input:focus, .form-field select:focus { border-color: #b45309; box-shadow: 0 0 0 3px rgba(180, 83, 9, 0.12); }
.form-field .field-hint { font-size: 0.78rem; color: #94a3b8; margin-top: 0.35rem; line-height: 1.4; }

.btn-calc { width: 100%; background: linear-gradient(135deg, #78350f 0%, #b45309 100%); color: #fff; padding: 15px; border: none; border-radius: 9px; font-size: 1rem; font-weight: 700; cursor: pointer; margin-top: 0.5rem; transition: opacity 0.2s, transform 0.15s; }
.btn-calc:hover { opacity: 0.93; transform: translateY(-1px); }

/* Results */
.results-heading { font-size: 1.15rem; font-weight: 700; color: #0f172a; margin: 0 0 0.25rem; }
.results-sub { font-size: 0.85rem; color: #64748b; margin: 0 0 1.25rem; }
.result-boxes { display: grid; grid-template-columns: 1fr 1fr; gap: 0.65rem; margin-bottom: 1rem; }
.res-box { background: #fff; border: 1.5px solid #e8edf5; border-radius: 10px; padding: 1rem 0.75rem; text-align: center; transition: box-shadow 0.2s; }
.res-box.primary { background: linear-gradient(135deg, #78350f, #b45309); border-color: transparent; box-shadow: 0 6px 18px rgba(180,83,9,0.25); grid-column: 1 / -1; }
.res-val { display: block; font-size: 1.35rem; font-weight: 800; color: #b45309; margin-bottom: 0.2rem; line-height: 1; }
.res-box.primary .res-val { color: #fff; font-size: 1.7rem; }
.res-lbl { font-size: 0.78rem; color: #64748b; font-weight: 600; line-height: 1.3; }
.res-box.primary .res-lbl { color: rgba(255,255,255,0.8); }
.res-box.primary .res-sub { font-size: 0.72rem; color: rgba(255,255,255,0.65); margin-top: 0.1rem; }

/* Roof SVG diagram */
.roof-diagram-wrap { background: #fff; border: 1px solid #fde68a; border-radius: 10px; padding: 1rem; margin-bottom: 1rem; text-align: center; }
.roof-diagram-title { font-size: 0.82rem; font-weight: 700; color: #92400e; margin-bottom: 0.5rem; }

/* Content */
.content-section { background: #fff; border-radius: 14px; border: 1px solid #eef2f7; box-shadow: 0 2px 12px rgba(0,0,0,0.03); padding: 2.25rem; margin-bottom: 2rem; scroll-margin-top: 6rem; }
.content-section h2 { font-size: 1.65rem; color: #0f172a; margin: 0 0 1.25rem; padding-bottom: 0.75rem; border-bottom: 2px solid #f0f4fa; }
.content-section h3 { font-size: 1.2rem; color: #1e293b; margin: 1.75rem 0 0.75rem; }
.content-section p { color: #475569; line-height: 1.75; margin-bottom: 1.25rem; font-size: 1rem; }
.content-section ul, .content-section ol { color: #475569; line-height: 1.75; padding-left: 1.5rem; margin-bottom: 1.25rem; }
.content-section li { margin-bottom: 0.5rem; }
.content-section strong { color: #1e293b; }

.formula-box { background: #0f172a; color: #e2e8f0; padding: 1.25rem 2rem; border-radius: 10px; font-family: 'Courier New', monospace; font-size: 1.05rem; text-align: center; margin: 1.25rem 0; letter-spacing: 0.5px; }
.formula-box span { color: #fbbf24; }

.data-table { width: 100%; border-collapse: collapse; border-radius: 10px; overflow: hidden; border: 1px solid #e8edf5; margin-bottom: 1.5rem; }
.data-table th { background: #78350f; color: #fff; padding: 13px 16px; text-align: left; font-size: 0.88rem; font-weight: 600; }
.data-table td { padding: 12px 16px; border-bottom: 1px solid #f1f5f9; font-size: 0.9rem; color: #334155; }
.data-table tr:last-child td { border-bottom: none; }
.data-table tr:nth-child(even) td { background: #f8fafc; }
.data-table .val { color: #b45309; font-weight: 700; }

.howto-list { list-style: none; padding: 0; margin: 1.25rem 0 0; counter-reset: howto-counter; }
.howto-list li { position: relative; padding-left: 3.5rem; margin-bottom: 1.75rem; counter-increment: howto-counter; }
.howto-list li::before { content: counter(howto-counter); position: absolute; left: 0; top: 0; width: 34px; height: 34px; background: linear-gradient(135deg, #78350f, #b45309); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 0.95rem; }
.howto-list li strong { color: #0f172a; display: block; margin-bottom: 0.25rem; }
.howto-list li span { color: #475569; line-height: 1.65; font-size: 0.97rem; }

.info-box { background: #fffbeb; border-left: 4px solid #b45309; border-radius: 0 8px 8px 0; padding: 1rem 1.25rem; margin: 1.25rem 0; font-size: 0.95rem; color: #78350f; line-height: 1.6; }

.faq-item { border-bottom: 1px solid #f0f4fa; padding-bottom: 1.25rem; margin-bottom: 1.25rem; }
.faq-item:last-child { border-bottom: none; margin-bottom: 0; padding-bottom: 0; }
.faq-q { font-size: 1.02rem; font-weight: 700; color: #0f172a; margin-bottom: 0.6rem; cursor: pointer; display: flex; justify-content: space-between; align-items: flex-start; gap: 1rem; }
.faq-q::after { content: '+'; font-size: 1.3rem; color: #b45309; flex-shrink: 0; }
.faq-item.open .faq-q::after { content: '−'; }
.faq-a { color: #475569; line-height: 1.7; font-size: 0.97rem; display: none; }
.faq-item.open .faq-a { display: block; }

/* Right sidebar */
.right-sidebar { position: sticky; top: 6rem; display: flex; flex-direction: column; gap: 1.25rem; }
.sidebar-widget { background: #fff; border-radius: 12px; border: 1px solid #e8edf5; box-shadow: 0 4px 18px rgba(0,0,0,0.05); overflow: hidden; }
.widget-header-amber { background: linear-gradient(135deg, #78350f, #b45309); color: #fff; padding: 1rem 1.25rem; }
.widget-header-amber .widget-title { font-size: 1rem; font-weight: 700; }
.widget-header-amber .widget-sub { font-size: 0.8rem; color: rgba(255,255,255,0.75); margin-top: 0.2rem; }
.widget-body { padding: 0.75rem 0; }
.widget-row { display: flex; justify-content: space-between; align-items: center; padding: 0.65rem 1.25rem; border-bottom: 1px solid #f8fafc; }
.widget-row:last-child { border-bottom: none; }
.widget-row:hover { background: #fffbeb; }
.widget-label { font-size: 0.82rem; font-weight: 600; color: #334155; }
.widget-sublabel { font-size: 0.72rem; color: #94a3b8; }
.widget-value { font-size: 0.9rem; font-weight: 800; color: #b45309; text-align: right; }
.quick-access-widget { background: #fff; border-radius: 12px; border: 1px solid #e8edf5; box-shadow: 0 2px 12px rgba(0,0,0,0.04); overflow: hidden; }
.widget-head { padding: 0.9rem 1.25rem; background: #f8fafc; border-bottom: 1px solid #f0f4fa; font-size: 0.83rem; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; }
.widget-links { list-style: none; padding: 0.5rem 0; margin: 0; }
.widget-links li a { display: flex; align-items: center; gap: 0.5rem; padding: 0.65rem 1.25rem; font-size: 0.85rem; color: #475569; text-decoration: none; border-left: 3px solid transparent; transition: all 0.15s; font-weight: 500; }
.widget-links li a:hover { color: #b45309; background: #fffbeb; border-left-color: #b45309; }

@media (max-width: 1200px) { .rafter-page-wrap { grid-template-columns: 200px 1fr 240px; } }
@media (max-width: 1024px) { .rafter-page-wrap { grid-template-columns: 1fr; } .toc-sidebar, .right-sidebar { position: static; } .right-sidebar { display: grid; grid-template-columns: 1fr 1fr; } }
@media (max-width: 768px) { .rafter-page-wrap { padding: 1rem 1rem 3rem; } .calc-inner { grid-template-columns: 1fr; } .calc-form-panel { border-right: none; border-bottom: 1px solid #f0f4fa; } .result-boxes { grid-template-columns: 1fr; } .right-sidebar { grid-template-columns: 1fr; } .page-hero h1 { font-size: 1.6rem; } .form-row { grid-template-columns: 1fr; } }
</style>

<main id="main-content">
<div class="rafter-page-wrap">

  <!-- LEFT TOC -->
  <aside class="toc-sidebar">
    <div class="toc-sidebar-header">🏗️ In This Article</div>
    <ul class="toc-list">
      <li><a href="#calculator" class="toc-active">Rafter Calculator</a></li>
      <li><a href="#how-to-use">How to Use</a></li>
      <li><a href="#rafter-formula">Rafter Length Formula</a></li>
      <li><a href="#roof-pitch-chart">Roof Pitch Chart</a></li>
      <li><a href="#rafter-count">How Many Rafters?</a></li>
      <li><a href="#lumber-sizing">Lumber Sizing Guide</a></li>
      <li><a href="#types-of-rafter">Types of Rafters</a></li>
      <li><a href="#worked-example">Worked Example</a></li>
      <li><a href="#faq">Frequently Asked Questions</a></li>
    </ul>
    <div class="toc-divider"></div>
    <div class="toc-related-label">Related Calculators</div>
    <ul class="toc-related-list">
      <li><a href="<?php echo $baseUrl; ?>/construction/linear-feet-calculator">Linear Feet Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/home-addition-cost-calculator">Home Addition Cost</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/concrete-calculator">Concrete Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/calculators/board-foot.php">Board Foot Calculator</a></li>
      <li><a href="<?php echo $baseUrl; ?>/real-estate/home-inspection-cost-calculator">Home Inspection Cost</a></li>
    </ul>
  </aside>

  <!-- MAIN CONTENT -->
  <div class="main-content">

    <div class="page-hero">
      <div class="breadcrumb">
        <a href="<?php echo $baseUrl; ?>/index.php">Home</a> º
        <a href="<?php echo $baseUrl; ?>/construction/">Construction</a> º
        Rafter Calculator
      </div>
      <h1>Rafter Calculator 2026 | Calculate Rafter Length, Pitch & Lumber Needed</h1>
      <div style="display:flex;align-items:center;flex-wrap:wrap;gap:10px;margin-bottom:.75rem;">
        <span style="font-size:.82rem;color:#64748b;">Reviewed by the <strong style="color:#1e293b;">AmericaCalculator.com editorial team</strong></span>
        <span style="background:#fef3c7;color:#92400e;font-size:.75rem;font-weight:700;padding:3px 10px;border-radius:20px;border:1px solid #fde68a;">🕐 Last Updated: August 2026</span>
      </div>
      <p class="hero-desc">
        Calculate the <strong>exact rafter length</strong>, ridge board length, number of rafters needed, board feet of lumber, and
        estimated material cost for any gable roof. Enter your run, pitch, spacing, and overhang — and get instant results.
        Based on the standard <strong>Pythagorean theorem formula</strong> used by professional framers across the US.
      </p>
    </div>

    <!-- CALCULATOR -->
    <div class="calc-card" id="calculator">
      <div class="calc-inner">
        <div class="calc-form-panel">
          <div class="form-row">
            <div class="form-field">
              <label for="run_ft">Run — Feet</label>
              <input type="number" id="run_ft" value="15" min="1" max="100" step="1" autocomplete="off">
            </div>
            <div class="form-field">
              <label for="run_in">Run — Inches</label>
              <input type="number" id="run_in" value="0" min="0" max="11" step="1" autocomplete="off">
            </div>
          </div>
          <div class="form-field">
            <div class="field-hint" style="margin-top:-0.5rem;margin-bottom:0.75rem;">Run = half the building width (span ÷ 2). For a 30-ft wide building, run = 15 ft.</div>
          </div>

          <div class="form-field">
            <label for="pitch">Roof Pitch (rise per 12" run)</label>
            <select id="pitch">
              <option value="2">2/12 — Nearly flat (2°)</option>
              <option value="3">3/12 — Low slope (14°)</option>
              <option value="4" selected>4/12 — Common low (18°)</option>
              <option value="5">5/12 — Moderate (23°)</option>
              <option value="6">6/12 — Most popular (27°)</option>
              <option value="7">7/12 — Steeper (30°)</option>
              <option value="8">8/12 — Steep (34°)</option>
              <option value="9">9/12 — Very steep (37°)</option>
              <option value="10">10/12 — High pitch (40°)</option>
              <option value="12">12/12 — 45° equal pitch</option>
            </select>
          </div>

          <div class="form-row">
            <div class="form-field">
              <label for="overhang_in">Overhang (inches)</label>
              <input type="number" id="overhang_in" value="12" min="0" max="48" step="1" autocomplete="off">
              <div class="field-hint">Eave overhang past wall plate</div>
            </div>
            <div class="form-field">
              <label for="spacing">Spacing (inches O.C.)</label>
              <select id="spacing">
                <option value="12">12"</option>
                <option value="16" selected>16" (standard)</option>
                <option value="24">24"</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-field">
              <label for="bldg_length_ft">Building Length (feet)</label>
              <input type="number" id="bldg_length_ft" value="40" min="1" max="300" step="1" autocomplete="off">
            </div>
            <div class="form-field">
              <label for="lumber_size">Lumber Size</label>
              <select id="lumber_size">
                <option value="2x6">2×6</option>
                <option value="2x8" selected>2×8</option>
                <option value="2x10">2×10</option>
                <option value="2x12">2×12</option>
              </select>
            </div>
          </div>

          <div class="form-field">
            <label for="lumber_price">Lumber Price ($/linear ft)</label>
            <input type="number" id="lumber_price" value="1.85" min="0.5" max="20" step="0.01" autocomplete="off">
            <div class="field-hint">2026 avg: 2×8 ~$1.85/lf | 2×10 ~$2.20/lf | 2×12 ~$2.75/lf</div>
          </div>

          <button type="button" class="btn-calc" id="rafter-calc-btn">🏗️ Calculate Rafters</button>
        </div>

        <div class="calc-results-panel">
          <h3 class="results-heading">Your Rafter Calculations</h3>
          <p class="results-sub" id="results-desc">15 ft run, 4/12 pitch, 16" spacing, 40 ft building</p>

          <!-- Roof SVG diagram -->
          <div class="roof-diagram-wrap">
            <div class="roof-diagram-title">Roof Cross-Section</div>
            <svg id="roof-svg" width="220" height="110" viewBox="0 0 220 110" fill="none" xmlns="http://www.w3.org/2000/svg">
              <!-- Base / wall plates -->
              <line x1="10" y1="95" x2="210" y2="95" stroke="#94a3b8" stroke-width="3"/>
              <!-- Left rafter -->
              <line id="svg-rafter-l" x1="10" y1="95" x2="110" y2="30" stroke="#b45309" stroke-width="2.5"/>
              <!-- Right rafter -->
              <line id="svg-rafter-r" x1="210" y1="95" x2="110" y2="30" stroke="#b45309" stroke-width="2.5"/>
              <!-- Ridge -->
              <circle cx="110" cy="30" r="4" fill="#b45309"/>
              <!-- Labels -->
              <text x="55" y="68" font-size="10" fill="#92400e" font-weight="600" id="svg-run-label">Run: 15ft</text>
              <text x="95" y="23" font-size="10" fill="#78350f" font-weight="700" id="svg-pitch-label">4/12</text>
              <text x="118" y="62" font-size="9" fill="#64748b" id="svg-rafter-label">Rafter</text>
              <!-- Dimensions -->
              <line x1="10" y1="103" x2="110" y2="103" stroke="#94a3b8" stroke-width="1" stroke-dasharray="3,2"/>
              <line x1="10" y1="100" x2="10" y2="106" stroke="#94a3b8" stroke-width="1"/>
              <line x1="110" y1="100" x2="110" y2="106" stroke="#94a3b8" stroke-width="1"/>
            </svg>
          </div>

          <div class="result-boxe">
            <div class="res-box primary">
              <span class="res-val" id="res_rafter_length">15.62 ft</span>
              <span class="res-lbl">Rafter Length (ridge to plate)</span>
              <span class="res-sub" id="res_rafter_with_oh">+ 12" overhang = 16.62 ft total cut</span>
            </div>
            <div class="res-box">
              <span class="res-val" id="res_ridge_length">40 ft</span>
              <span class="res-lbl">Ridge Board Length</span>
            </div>
            <div class="res-box">
              <span class="res-val" id="res_rafter_count">62</span>
              <span class="res-lbl">Total Rafters (both sides)</span>
            </div>
            <div class="res-box">
              <span class="res-val" id="res_board_feet">820</span>
              <span class="res-lbl">Board Feet of Lumber</span>
            </div>
            <div class="res-box">
              <span class="res-val" id="res_cost">$1,516</span>
              <span class="res-lbl">Est. Lumber Cost</span>
            </div>
            <div class="res-box">
              <span class="res-val" id="res_angle">18.4°</span>
              <span class="res-lbl">Rafter Angle (slope)</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- HOW TO USE -->
    <section class="content-section" id="how-to-use">
      <h2>How to Use the Rafter Calculator</h2>
      <ul class="howto-list">
        <li>
          <strong>Enter the Run (half the building width)</strong>
          <span>The "run" is the horizontal distance from the wall plate to the center ridge. It equals exactly half your total building width (span). For a 28-foot wide house, the run is 14 feet.</span>
        </li>
        <li>
          <strong>Select your roof pitch</strong>
          <span>Pitch is expressed as rise per 12-inch run. A 6/12 pitch rises 6 inches for every foot of horizontal run. Common residential pitches are 4/12 to 8/12. Select from the dropdown or use our pitch chart below.</span>
        </li>
        <li>
          <strong>Enter overhang, spacing, and building length</strong>
          <span>Overhang is how far the rafter extends past the wall plate (typical: 12–24 inches). Spacing is 16" or 24" on center. Building length determines how many rafters you need per side.</span>
        </li>
        <li>
          <strong>Select lumber size and enter price</strong>
          <span>Common rafter sizes are 2×6, 2×8, 2×10, and 2×12. Your local lumber yard can give you the current price per linear foot. The 2026 national average for 2×8 dimensional lumber is approximately $1.85/linear foot.</span>
        </li>
        <li>
          <strong>Click Calculate</strong>
          <span>Instantly get rafter length, total cut length (with overhang), ridge board length, rafter count, board feet, estimated cost, and rafter angle — everything you need to order materials and start framing.</span>
        </li>
      </ul>
    </section>

    <!-- RAFTER FORMULA -->
    <section class="content-section" id="rafter-formula">
      <h2>Rafter Length Formula — The Math Explained</h2>
      <p>
        Rafter length is calculated using the <strong>Pythagorean theorem</strong>. A rafter, the horizontal run, and the vertical rise
        form a right triangle — and you're solving for the hypotenuse (the rafter):
      </p>
      <div class="formula-box">
        Rise = Run × (Pitch ÷ 12)<br>
        <span>Rafter Length = √(Run² + Rise²)</span><br>
        Total Cut Length = Rafter Length + Overhang Length<br>
        Overhang Length = Overhang(in) ÷ 12 × √(1 + (Pitch/12)²)
      </div>
      <p>
        <strong>Example: 15-foot run, 6/12 pitch, 12-inch overhang</strong>
      </p>
      <ul>
        <li>Rise = 15 × (6 ÷ 12) = <strong>7.5 feet</strong></li>
        <li>Rafter length = √(15² + 7.5²) = √(225 + 56.25) = √281.25 = <strong>16.77 feet</strong></li>
        <li>Overhang run = 12 in = 1 ft | Overhang rise = 1 × 0.5 = 0.5 ft</li>
        <li>Overhang segment = √(1² + 0.5²) = <strong>1.12 feet</strong></li>
        <li>Total cut length = 16.77 + 1.12 = <strong>17.89 feet</strong></li>
      </ul>
      <div class="info-box">
        💡 <strong>Framing square shortcut:</strong> Professional framers use a framing square. For a 6/12 pitch, set the square's tongue at 6" and the blade at 12". The hypotenuse of each 12" step equals your rafter unit length (13.42" for 6/12).
      </div>
    </section>

    <!-- PITCH CHART -->
    <section class="content-section" id="roof-pitch-chart">
      <h2>Roof Pitch Chart & Common Uses</h2>
      <table class="data-table">
        <thead>
          <tr><th>Pitch</th><th>Angle</th><th>Multiplier*</th><th>Best For</th><th>Common Regions</th></tr>
        </thead>
        <tbody>
          <tr><td class="val">2/12</td><td>9.5°</td><td>1.014</td><td>Porch overhangs, sheds</td><td>Hot, dry climates (AZ, NV)</td></tr>
          <tr><td class="val">3/12</td><td>14.0°</td><td>1.031</td><td>Low-slope commercial</td><td>Southern US</td></tr>
          <tr><td class="val">4/12</td><td>18.4°</td><td>1.054</td><td>Ranch-style homes</td><td>Southeast, Southwest</td></tr>
          <tr><td class="val">6/12</td><td>26.6°</td><td>1.118</td><td>Most popular residential</td><td>Nationwide</td></tr>
          <tr><td class="val">8/12</td><td>33.7°</td><td>1.202</td><td>Traditional colonial homes</td><td>Northeast, Midwest</td></tr>
          <tr><td class="val">10/12</td><td>39.8°</td><td>1.302</td><td>Cape Cod, steep-slope areas</td><td>New England</td></tr>
          <tr><td class="val">12/12</td><td>45.0°</td><td>1.414</td><td>A-frames, steep snow-load roofs</td><td>Mountain regions (CO, WA, MT)</td></tr>
        </tbody>
      </table>
      <p style="font-size:0.85rem;color:#94a3b8;">*Multiplier: multiply the run by this factor to get the rafter length (before overhang). E.g., 6/12 pitch × 15 ft run × 1.118 = 16.77 ft rafter.</p>
    </section>

    <!-- RAFTER COUNT -->
    <section class="content-section" id="rafter-count">
      <h2>How Many Rafters Do I Need?</h2>
      <p>
        The number of rafters per side is determined by your building length and rafter spacing. Here's the formula:
      </p>
      <div class="formula-box">
        Rafters per side = ⌈(Building Length ÷ Spacing) + 1⌉ × 2 sides<br>
        <span>Add 10% for waste, cuts, and extras</span>
      </div>
      <table class="data-table">
        <thead>
          <tr><th>Building Length</th><th>16" Spacing (per side)</th><th>24" Spacing (per side)</th><th>Total @ 16" (both sides)</th></tr>
        </thead>
        <tbody>
          <tr><td>20 ft</td><td>16</td><td>11</td><td class="val">32</td></tr>
          <tr><td>30 ft</td><td>23</td><td>16</td><td class="val">46</td></tr>
          <tr><td>40 ft</td><td>31</td><td>21</td><td class="val">62</td></tr>
          <tr><td>50 ft</td><td>39</td><td>26</td><td class="val">78</td></tr>
          <tr><td>60 ft</td><td>46</td><td>31</td><td class="val">92</td></tr>
        </tbody>
      </table>
    </section>

    <!-- LUMBER SIZING -->
    <section class="content-section" id="lumber-sizing">
      <h2>Rafter Lumber Sizing Guide (2026)</h2>
      <p>Rafter size depends on span, spacing, wood species, and roof load. Use this quick reference:</p>
      <table class="data-table">
        <thead>
          <tr><th>Lumber Size</th><th>Max Span @ 16" Spacing</th><th>Max Span @ 24" Spacing</th><th>2026 Avg Price/LF</th></tr>
        </thead>
        <tbody>
          <tr><td class="val">2×6</td><td>up to 13–14 ft</td><td>up to 11–12 ft</td><td>~$1.10“$1.40</td></tr>
          <tr><td class="val">2×8</td><td>up to 17–18 ft</td><td>up to 14–15 ft</td><td>~$1.70“$2.00</td></tr>
          <tr><td class="val">2×10</td><td>up to 21–22 ft</td><td>up to 18–19 ft</td><td>~$2.10“$2.40</td></tr>
          <tr><td class="val">2×12</td><td>up to 25–26 ft</td><td>up to 22–23 ft</td><td>~$2.60“$3.00</td></tr>
        </tbody>
      </table>
      <div class="info-box">
        ⚠️ <strong>Always check local building codes.</strong> Rafter span tables in IRC (International Residential Code) are the legal standard. Snow load zones, wind zones, and local amendments can require larger lumber than these general guidelines.
      </div>
    </section>

    <!-- TYPES OF RAFTERS -->
    <section class="content-section" id="types-of-rafter">
      <h2>Types of Rafters</h2>
      <ul>
        <li><strong>Common Rafter:</strong> Runs perpendicular from wall plate to ridge board. Most standard rafter in gable roof construction. This calculator focuses on common rafters.</li>
        <li><strong>Hip Rafter:</strong> Runs diagonally from a corner of the building to the ridge, forming the hip on a hip roof. Hip rafters are longer than common rafters at the same pitch and require compound-angle cuts.</li>
        <li><strong>Valley Rafter:</strong> Forms the internal angle where two roof sections meet. Found in L-shaped houses or any intersecting roof planes.</li>
        <li><strong>Jack Rafter:</strong> A shorter rafter that runs from the wall plate to a hip or valley rafter rather than to the ridge board. Used to fill in the triangular sections of hip or valley roofs.</li>
        <li><strong>Collar Tie:</strong> Not technically a rafter — a horizontal member connecting opposing rafters to prevent spreading. Required by code at or near the ridge.</li>
      </ul>
    </section>

    <!-- WORKED EXAMPLE -->
    <section class="content-section" id="worked-example">
      <h2>Worked Example — 40-Foot Ranch Home, 6/12 Pitch</h2>
      <p>Let's work through a real project: a 40-foot wide, 60-foot long ranch home with a 6/12 pitch, 16-inch rafter spacing, and 18-inch overhang.</p>
      <table class="data-table">
        <thead>
          <tr><th>Calculation</th><th>Formula</th><th>Result</th></tr>
        </thead>
        <tbody>
          <tr><td><strong>Run</strong></td><td>40 ft ÷ 2</td><td class="val">20 ft</td></tr>
          <tr><td><strong>Rise</strong></td><td>20 × (6/12)</td><td class="val">10 ft</td></tr>
          <tr><td><strong>Rafter length</strong></td><td>√(20² + 10²) = √500</td><td class="val">22.36 ft</td></tr>
          <tr><td><strong>Overhang length</strong></td><td>1.5 ft × 1.118</td><td class="val">1.68 ft</td></tr>
          <tr><td><strong>Total cut length</strong></td><td>22.36 + 1.68</td><td class="val">24.04 ft</td></tr>
          <tr><td><strong>Rafters per side</strong></td><td>(60 ft × 12 ÷ 16) + 1</td><td class="val">46</td></tr>
          <tr><td><strong>Total rafters</strong></td><td>46 × 2 sides + 10% waste</td><td class="val">102</td></tr>
          <tr><td><strong>Linear feet of lumber</strong></td><td>102 × 24.04 ft</td><td class="val">2,452 lf</td></tr>
          <tr><td><strong>Estimated cost (2×10 @ $2.20/lf)</strong></td><td>2,452 × $2.20</td><td class="val">$5,394</td></tr>
        </tbody>
      </table>
    </section>

    <!-- FAQ -->
    <section class="content-section" id="faq">
      <h2>Frequently Asked Questions — Rafter Calculator</h2>
      <div class="faq-item open">
        <div class="faq-q">How do you calculate rafter length?</div>
        <div class="faq-a">Use the Pythagorean theorem: <strong>Rafter Length = √(Run² + Rise²)</strong>, where Rise = Run × (Pitch ÷ 12). Add the overhang length to get total cut length. Example: 15-ft run, 6/12 pitch → Rise = 7.5 ft → Rafter = √(225 + 56.25) = 16.77 ft.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">What is roof pitch and how do I measure it?</div>
        <div class="faq-a">Roof pitch is rise over run, expressed as X/12. Place a 12-inch level horizontally on the roof surface, hold it level, and measure the vertical distance from the level's end to the roof — that's your rise. A 6-inch rise = 6/12 pitch.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">What is the most common roof pitch in the US?</div>
        <div class="faq-a"><strong>6/12 pitch</strong> is the most popular across the country. 4/12 is common in warmer climates. Steeper pitches (8/12–12/12) are used in heavy-snow regions.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">How many rafters do I need?</div>
        <div class="faq-a">Per side: (Building length in inches ÷ spacing in inches) + 1, rounded up. Double it for both sides. Add 10% for waste. For a 40-ft building at 16" spacing: (480 ÷ 16) + 1 = 31 per side = 62 total × 1.1 = 68.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">What size lumber should I use for rafters?</div>
        <div class="faq-a">Quick reference: <strong>2×6</strong> up to 14-ft spans, <strong>2×8</strong> up to 18-ft spans, <strong>2×10</strong> up to 22-ft spans, <strong>2×12</strong> up to 26-ft spans (at 16" spacing, standard lumber grade). Always verify with IRC span tables for your specific load zone.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">What is a ridge board and how long should it be?</div>
        <div class="faq-a">The ridge board runs at the peak of the roof. Its length equals the building length (for a simple gable). It should be one size larger than the rafter lumber (e.g., 2×10 ridge for 2×8 rafters).</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">What is the difference between common, hip, valley, and jack rafters?</div>
        <div class="faq-a">Common rafters go straight from wall to ridge. Hip rafters run diagonally to a corner on hip roofs. Valley rafters sit in the inside angle where two roof sections meet. Jack rafters are short rafters that connect to a hip or valley rafter instead of the ridge.</div>
      </div>
      <div class="faq-item">
        <div class="faq-q">Do I need a building permit for roofing work?</div>
        <div class="faq-a">Yes, for any structural roofing work (rafter replacement, new framing, additions) in most US jurisdictions. Shingle-only replacement may not require a permit everywhere. Check with your local building department before starting work.</div>
      </div>
    </section>

  </div><!-- /main-content -->

  <!-- RIGHT SIDEBAR -->
  <aside class="right-sidebar">

    <div class="sidebar-widget">
      <div class="widget-header-amber">
        <div class="widget-title">📐 Pitch Multipliers</div>
        <div class="widget-sub">Rafter ÷ Run factor</div>
      </div>
      <div class="widget-body">
        <div class="widget-row"><div><div class="widget-label">4/12 Pitch</div><div class="widget-sublabel">18° slope</div></div><div class="widget-value">× 1.054</div></div>
        <div class="widget-row"><div><div class="widget-label">6/12 Pitch</div><div class="widget-sublabel">27° slope</div></div><div class="widget-value">× 1.118</div></div>
        <div class="widget-row"><div><div class="widget-label">8/12 Pitch</div><div class="widget-sublabel">34° slope</div></div><div class="widget-value">× 1.202</div></div>
        <div class="widget-row"><div><div class="widget-label">10/12 Pitch</div><div class="widget-sublabel">40° slope</div></div><div class="widget-value">× 1.302</div></div>
        <div class="widget-row"><div><div class="widget-label">12/12 Pitch</div><div class="widget-sublabel">45° slope</div></div><div class="widget-value">× 1.414</div></div>
      </div>
    </div>

    <div class="quick-access-widget">
      <div class="widget-head">🔗 Construction Calculators</div>
      <ul class="widget-link">
        <li><a href="<?php echo $baseUrl; ?>/construction/linear-feet-calculator">📏 Linear Feet Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/concrete-calculator">🧱 Concrete Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/home-addition-cost-calculator">🏠 Home Addition Cost</a></li>
        <li><a href="<?php echo $baseUrl; ?>/calculators/board-foot.php">🪵 Board Foot Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/real-estate/home-inspection-cost-calculator">🔍 Home Inspection Cost</a></li>
      </ul>
    </div>

  </aside>

</div><!-- /rafter-page-wrap -->
</main>

<script>
(function () {
  // Pitch multiplier lookup
  var PITCH_MULT = {2:1.014,3:1.031,4:1.054,5:1.083,6:1.118,7:1.158,8:1.202,9:1.250,10:1.302,12:1.414};
  // Board feet per linear foot per size
  var BF_FACTOR = {'2x6':1.0,'2x8':1.333,'2x10':1.667,'2x12':2.0};

  function fmtFt(v) {
    return v.toFixed(2) + ' ft';
  }
  function fmtInt(v) {
    return Math.round(v).toLocaleString('en-US');
  }
  function fmtDollar(v) {
    return '$' + Math.round(v).toLocaleString('en-US');
  }

  function calculate() {
    var runFt     = parseFloat(document.getElementById('run_ft').value)     || 0;
    var runIn     = parseFloat(document.getElementById('run_in').value)      || 0;
    var run       = runFt + runIn / 12;
    var pitch     = parseFloat(document.getElementById('pitch').value)       || 6;
    var overhangIn= parseFloat(document.getElementById('overhang_in').value) || 12;
    var spacing   = parseFloat(document.getElementById('spacing').value)     || 16;
    var bldgLen   = parseFloat(document.getElementById('bldg_length_ft').value) || 40;
    var lumberSize= document.getElementById('lumber_size').value;
    var pricePerLF= parseFloat(document.getElementById('lumber_price').value)|| 1.85;

    if (run <= 0) return;

    var mult       = PITCH_MULT[pitch] || 1.118;
    var rise       = run * (pitch / 12);
    var rafterLen  = Math.sqrt(run * run + rise * rise); // Pythagorean

    // Overhang segment along the rafter slope
    var ovFt        = overhangIn / 12;
    var ovRise      = ovFt * (pitch / 12);
    var ovRafter    = Math.sqrt(ovFt * ovFt + ovRise * ovRise);
    var totalCut    = rafterLen + ovRafter;

    // Rafter count (per side = ceil(length_in / spacing) + 1)
    var perSide    = Math.ceil((bldgLen * 12) / spacing) + 1;
    var totalCount = perSide * 2;
    var withWaste  = Math.ceil(totalCount * 1.10);

    // Ridge board = building length
    var ridgeLen = bldgLen;

    // Linear feet ordered (with waste, rounded up to next 2-ft increment)
    var totalLF     = withWaste * Math.ceil(totalCut / 2) * 2;
    var boardFeet   = totalLF * BF_FACTOR[lumberSize];
    var cost        = totalLF * pricePerLF;

    // Angle
    var angleRad = Math.atan(rise / run);
    var angleDeg = (angleRad * 180 / Math.PI).toFixed(1);

    document.getElementById('res_rafter_length').textContent = fmtFt(rafterLen);
    document.getElementById('res_rafter_with_oh').textContent = '+ ' + overhangIn + '" overhang = ' + fmtFt(totalCut) + ' total cut';
    document.getElementById('res_ridge_length').textContent  = fmtInt(ridgeLen) + ' ft';
    document.getElementById('res_rafter_count').textContent  = fmtInt(withWaste);
    document.getElementById('res_board_feet').textContent    = fmtInt(boardFeet) + ' bf';
    document.getElementById('res_cost').textContent          = fmtDollar(cost);
    document.getElementById('res_angle').textContent         = angleDeg + '°';
    document.getElementById('results-desc').textContent      = run.toFixed(1) + ' ft run, ' + pitch + '/12 pitch, ' + spacing + '" spacing, ' + bldgLen + ' ft bldg';

    // Update SVG diagram ridge height proportionally
    var maxPitch = 12; var minH = 45; var maxH = 85;
    var ridgeY = 95 - ((pitch / maxPitch) * (95 - 25));
    ridgeY = Math.max(15, Math.min(80, ridgeY));
    document.getElementById('svg-rafter-l').setAttribute('x2', '110');
    document.getElementById('svg-rafter-l').setAttribute('y2', ridgeY);
    document.getElementById('svg-rafter-r').setAttribute('x2', '110');
    document.getElementById('svg-rafter-r').setAttribute('y2', ridgeY);
    document.querySelector('#roof-svg circle').setAttribute('cy', ridgeY);
    document.getElementById('svg-pitch-label').setAttribute('y', ridgeY - 7);
    document.getElementById('svg-pitch-label').textContent = pitch + '/12';
    document.getElementById('svg-run-label').textContent = 'Run: ' + run.toFixed(0) + 'ft';
  }

  // Event listeners
  ['run_ft','run_in','overhang_in','bldg_length_ft','lumber_price'].forEach(function(id) {
    var el = document.getElementById(id);
    if (el) { el.addEventListener('input', calculate); }
  });
  ['pitch','spacing','lumber_size'].forEach(function(id) {
    var el = document.getElementById(id);
    if (el) { el.addEventListener('change', calculate); }
  });
  document.getElementById('rafter-calc-btn').addEventListener('click', calculate);

  // FAQ accordion
  document.querySelectorAll('.faq-q').forEach(function(q) {
    q.addEventListener('click', function() {
      var item = q.parentElement;
      var wasOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(function(o) { o.classList.remove('open'); });
      if (!wasOpen) item.classList.add('open');
    });
  });

  calculate(); // init
})();
</script>

<?php require_once '../includes/footer.php'; ?>
