<?php
$currentYear = date('Y');
$pageTitle       = "PC Bottleneck Calculator ($currentYear) — CPU & GPU Compatibility Check | AmericaCalculator";
$metaDescription = "Free $currentYear PC bottleneck calculator. Select your CPU and GPU to instantly check bottleneck percentage, FPS estimates, and upgrade recommendations. Updated with $currentYear hardware. No signup.";
$metaKeywords    = 'bottleneck calculator, pc bottleneck calculator, cpu gpu bottleneck calculator, bottleneck calculator 2026, gpu bottleneck calculator, cpu bottleneck calculator, bottleneck calculator free, will it bottleneck, pc bottleneck checker';

$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'               => 'WebApplication',
      'name'                => 'PC Bottleneck Calculator',
      'url'                 => 'https://americacalculator.com/technology/bottleneck-calculator',
      'description'         => "Free $currentYear PC bottleneck calculator. Check CPU and GPU compatibility, bottleneck percentage, and get upgrade recommendations.",
      'applicationCategory' => 'UtilitiesApplication',
      'operatingSystem'     => 'All',
      'offers'              => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD'],
    ],
    [
      '@type'     => 'HowTo',
      'name'      => 'How to Check PC Bottleneck',
      'totalTime' => 'PT1M',
      'step'      => [
        ['@type'=>'HowToStep','position'=>1,'name'=>'Select your CPU','text'=>'Choose your processor from the dropdown. The list includes all major Intel Core and AMD Ryzen CPUs from the last 5 generations.'],
        ['@type'=>'HowToStep','position'=>2,'name'=>'Select your GPU','text'=>'Choose your graphics card. The list covers NVIDIA GeForce RTX/GTX and AMD Radeon RX series cards.'],
        ['@type'=>'HowToStep','position'=>3,'name'=>'Choose resolution and use case','text'=>'Select your monitor resolution (1080p, 1440p, 4K) and use case (gaming, workstation, streaming). Higher resolutions shift load to the GPU; CPU-heavy workloads shift it the other way.'],
        ['@type'=>'HowToStep','position'=>4,'name'=>'Read your results','text'=>'The calculator shows bottleneck percentage, which component is limiting performance, estimated FPS tier, and specific upgrade recommendations for your budget.'],
      ],
    ],
    [
      '@type'      => 'FAQPage',
      'mainEntity' => [
        ['@type'=>'Question','name'=>'What is a PC bottleneck?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'A PC bottleneck occurs when one component — typically the CPU or GPU — is significantly slower than the other, causing the faster component to sit idle waiting for the slower one. In gaming, a CPU bottleneck means your processor cannot feed frames to the GPU fast enough; a GPU bottleneck means the graphics card cannot render frames as fast as the CPU can prepare them.']],
        ['@type'=>'Question','name'=>'What percentage bottleneck is acceptable?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'A bottleneck under 10% is considered well-balanced and acceptable for virtually all use cases. 10–20% is mild and generally not worth upgrading over. 20–40% is noticeable in demanding titles at your target resolution. Above 40% represents a serious imbalance that will significantly cap performance — an upgrade is recommended.']],
        ['@type'=>'Question','name'=>'Is a GPU bottleneck bad?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>"A GPU bottleneck at your target resolution is actually normal and desirable in gaming — it means your GPU is working at full capacity and your CPU is not being wasted. The goal is for your GPU to be 95–99% utilized. A CPU bottleneck is more problematic because it creates stuttering and frame pacing issues regardless of your GPU's power."]],
        ['@type'=>'Question','name'=>'How do I check my actual bottleneck while gaming?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Download MSI Afterburner with RivaTuner Statistics Server. Enable the GPU Usage and CPU Usage overlays. While gaming: if GPU usage is 95–99% and CPU usage is under 80%, you are GPU-bound (normal). If CPU usage is 95–100% and GPU usage drops below 80%, you have a CPU bottleneck. This real-world method is more accurate than any online calculator.']],
        ['@type'=>'Question','name'=>'Does RAM affect bottleneck?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes — insufficient RAM (under 16GB for modern gaming) can create a RAM bottleneck that mimics a CPU bottleneck. Slow RAM speed also matters: AMD Ryzen CPUs are particularly sensitive to RAM speed because the CPU cores communicate through the Infinity Fabric, which runs at half the RAM speed. 3200MHz CL16 is the minimum recommended for Ryzen; 3600MHz CL18 or faster is ideal.']],
        ['@type'=>'Question','name'=>'What causes a CPU bottleneck in gaming?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'CPU bottlenecks in gaming are caused by: (1) pairing a high-end GPU like RTX 4080/4090 with an older or budget CPU, (2) playing CPU-intensive games like Escape from Tarkov, Microsoft Flight Simulator, or city builders, (3) running at low resolutions like 1080p where the GPU finishes frames so fast the CPU cannot keep up, (4) outdated single-core performance in older Intel Core i5/i7 or AMD FX chips.']],
        ['@type'=>'Question','name'=>'Is 20% bottleneck bad?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'A 20% bottleneck is in the mild-to-moderate range. For most games and everyday use, you will not notice it in a meaningful way. If you are chasing maximum competitive FPS (e.g., 240Hz+ gaming) or doing CPU-intensive productivity work, a 20% CPU bottleneck is worth addressing. For casual gaming at 60–144Hz, 20% is generally not worth the cost of an upgrade.']],
        ['@type'=>'Question','name'=>'What resolution reduces CPU bottleneck?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'Higher resolutions shift workload from CPU to GPU, reducing CPU bottleneck. At 1080p, the GPU finishes frames quickly and the CPU becomes the limit. At 1440p, the GPU takes longer per frame, relieving CPU pressure. At 4K, the GPU is almost always the limiting factor regardless of CPU. If you have a CPU bottleneck at 1080p, upgrading to a 1440p or 4K monitor can effectively resolve it without changing hardware.']],
        ['@type'=>'Question','name'=>'Which CPUs pair well with RTX 4070?',
         'acceptedAnswer'=>['@type'=>'Answer','text'=>'The RTX 4070 pairs well with Intel Core i5-13600K, i7-13700K, i5-14600K, and AMD Ryzen 5 7600X, Ryzen 7 7700X. Pairing it with anything below an Intel i5-10600K or Ryzen 5 5600X at 1080p will create a noticeable CPU bottleneck. At 1440p (the RTX 4070 sweet spot), almost any modern mid-range CPU from the last 4 years will be a balanced pairing.']],
      ],
    ],
    [
      '@type' => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Technology', 'item' => 'https://americacalculator.com/technology/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'PC Bottleneck Calculator', 'item' => 'https://americacalculator.com/technology/bottleneck-calculator'],
      ]
    ],
  ],
];

require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f5f7fa;}
.bn-wrap{max-width:1320px;margin:0 auto;padding:2rem 1.5rem 4rem;display:grid;grid-template-columns:220px 1fr 260px;gap:2rem;align-items:start;}
/* TOC */
.bn-toc{position:sticky;top:6rem;background:#fff;border-radius:12px;border:1px solid #e8edf5;box-shadow:0 2px 12px rgba(0,0,0,.04);overflow:hidden;}
.bn-toc-head{background:linear-gradient(135deg,#10b981,#059669);color:#fff;padding:1rem 1.25rem;font-weight:700;font-size:.85rem;text-transform:uppercase;letter-spacing:.8px;}
.bn-toc-list{list-style:none;padding:.75rem 0;margin:0;}
.bn-toc-list li a{display:block;padding:.5rem 1.25rem;font-size:.84rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .18s;line-height:1.4;}
.bn-toc-list li a:hover,.bn-toc-list li a.bn-active{color:#059669;background:#f0fdf4;border-left-color:#10b981;}
.bn-toc-div{height:1px;background:#f1f5f9;margin:.5rem 0;}
.bn-toc-rlbl{padding:.5rem 1.25rem;font-size:.78rem;font-weight:700;color:#94a3b8;text-transform:uppercase;letter-spacing:.5px;}
.bn-toc-rlist{list-style:none;padding:0;margin:0 0 .75rem;}
.bn-toc-rlist li a{display:block;padding:.4rem 1.25rem;font-size:.82rem;color:#64748b;text-decoration:none;transition:color .15s;}
.bn-toc-rlist li a:hover{color:#059669;}
/* Main */
.bn-main{min-width:0;}
.bn-hero{margin-bottom:2rem;}
.bn-hero h1{font-size:2.1rem;color:#0f172a;margin:0 0 .6rem;line-height:1.25;}
.bn-desc{font-size:1.05rem;color:#64748b;line-height:1.65;margin:0 0 .75rem;border-left:4px solid #6ee7b7;padding-left:1rem;}
.bn-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}
.bn-bc a{color:#64748b;text-decoration:none;}
.bn-bc a:hover{color:#059669;}
/* Calculator card */
.bn-card{background:#fff;border-radius:14px;box-shadow:0 4px 24px rgba(0,0,0,.05);border:1px solid #eef2f7;margin-bottom:2.5rem;overflow:hidden;}
.bn-inner{display:grid;grid-template-columns:1fr 1fr;}
.bn-form-col{padding:2rem;border-right:1px solid #f0f4fa;}
.bn-res-col{padding:2rem;background:linear-gradient(160deg,#f8fafc 0%,#f0fdf4 100%);}
/* Fields */
.bn-field{margin-bottom:1.3rem;}
.bn-field label{display:block;font-weight:600;font-size:.9rem;color:#1e293b;margin-bottom:.45rem;}
.bn-field select,.bn-field input{width:100%;padding:12px 15px;border:1.5px solid #d1dae8;border-radius:8px;font-size:.92rem;color:#0f172a;outline:none;transition:border-color .2s,box-shadow .2s;box-sizing:border-box;background:#fff;}
.bn-field select:focus,.bn-field input:focus{border-color:#10b981;box-shadow:0 0 0 3px rgba(16,185,129,.12);}
.bn-field .bn-hint{font-size:.76rem;color:#94a3b8;margin-top:.3rem;line-height:1.4;}
.bn-row2{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
/* Mode pills */
.bn-modes{display:grid;grid-template-columns:repeat(3,1fr);gap:.5rem;margin:.4rem 0 1.3rem;}
.bn-mode{border:1.5px solid #d1dae8;border-radius:8px;padding:.6rem .4rem;text-align:center;cursor:pointer;font-size:.78rem;font-weight:600;color:#475569;transition:all .18s;user-select:none;line-height:1.3;}
.bn-mode:hover{border-color:#10b981;color:#059669;background:#f0fdf4;}
.bn-mode.active{border-color:#10b981;background:#10b981;color:#fff;}
/* Button */
.bn-btn{width:100%;background:linear-gradient(135deg,#10b981,#059669);color:#fff;padding:15px;border:none;border-radius:9px;font-size:1rem;font-weight:700;cursor:pointer;margin-top:.5rem;transition:opacity .2s,transform .15s;}
.bn-btn:hover{opacity:.92;transform:translateY(-1px);}
/* Results */
.bn-res-head{font-size:1.15rem;font-weight:700;color:#0f172a;margin:0 0 .25rem;}
.bn-res-sub{font-size:.84rem;color:#64748b;margin:0 0 1.25rem;}
/* Verdict badge */
.bn-verdict{border-radius:10px;padding:1.1rem 1.25rem;margin-bottom:.85rem;text-align:center;}
.bn-verdict.balanced{background:linear-gradient(135deg,#10b981,#059669);box-shadow:0 6px 18px rgba(16,185,129,.25);}
.bn-verdict.mild    {background:linear-gradient(135deg,#f59e0b,#d97706);box-shadow:0 6px 18px rgba(245,158,11,.25);}
.bn-verdict.moderate{background:linear-gradient(135deg,#f97316,#ea580c);box-shadow:0 6px 18px rgba(249,115,22,.25);}
.bn-verdict.severe  {background:linear-gradient(135deg,#ef4444,#dc2626);box-shadow:0 6px 18px rgba(239,68,68,.25);}
.bn-verdict-pct{display:block;font-size:3rem;font-weight:900;color:#fff;line-height:1;margin-bottom:.2rem;}
.bn-verdict-lbl{font-size:.95rem;color:rgba(255,255,255,.9);font-weight:600;}
.bn-verdict-where{display:block;font-size:.82rem;color:rgba(255,255,255,.8);margin-top:.25rem;}
/* Gauge bar */
.bn-gauge-wrap{margin-bottom:.85rem;}
.bn-gauge-label{font-size:.75rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:#94a3b8;margin-bottom:.35rem;}
.bn-gauge-track{height:10px;background:#e2e8f0;border-radius:5px;overflow:hidden;position:relative;}
.bn-gauge-fill{height:100%;border-radius:5px;transition:width .5s cubic-bezier(.4,0,.2,1);}
.bn-gauge-ticks{display:flex;justify-content:space-between;font-size:.67rem;color:#94a3b8;margin-top:.2rem;}
/* Boxes */
.bn-boxes{display:grid;grid-template-columns:1fr 1fr;gap:.7rem;margin-bottom:.85rem;}
.bn-box{background:#fff;border:1.5px solid #e8edf5;border-radius:10px;padding:.85rem .75rem;text-align:center;}
.bn-box-val{display:block;font-size:1.15rem;font-weight:800;color:#059669;margin-bottom:.15rem;}
.bn-box-lbl{font-size:.72rem;color:#64748b;font-weight:600;line-height:1.3;}
/* Upgrade recommendation */
.bn-upgrade{border-radius:10px;padding:1rem 1.1rem;margin-bottom:.75rem;border:1.5px solid #e2e8f0;background:#fff;}
.bn-upgrade-title{font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:#94a3b8;margin-bottom:.5rem;}
.bn-upgrade-text{font-size:.88rem;color:#334155;line-height:1.55;}
.bn-upgrade-text strong{color:#0f172a;}
/* Util bar */
.bn-util{background:#fff;border:1px solid #e2e8f0;border-radius:10px;padding:.9rem 1rem;margin-bottom:.75rem;}
.bn-util-title{font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.05em;color:#94a3b8;margin-bottom:.5rem;}
.bn-util-row{display:flex;justify-content:space-between;align-items:center;margin-bottom:.4rem;}
.bn-util-lbl{font-size:.82rem;color:#64748b;font-weight:600;}
.bn-util-bar-wrap{flex:1;margin:0 .75rem;height:7px;background:#e2e8f0;border-radius:4px;overflow:hidden;}
.bn-util-bar-fill{height:100%;border-radius:4px;transition:width .4s;}
.bn-util-pct{font-size:.82rem;font-weight:800;color:#0f172a;min-width:2.5rem;text-align:right;}
/* Empty state */
.bn-empty{text-align:center;padding:2rem 1rem;color:#94a3b8;}
.bn-empty-icon{font-size:3rem;margin-bottom:.5rem;}
.bn-empty-text{font-size:.9rem;line-height:1.6;}
/* Content sections */
.bn-section{background:#fff;border-radius:14px;border:1px solid #eef2f7;box-shadow:0 2px 12px rgba(0,0,0,.03);padding:2.25rem;margin-bottom:2rem;scroll-margin-top:6rem;}
.bn-section h2{font-size:1.65rem;color:#0f172a;margin:0 0 1.25rem;padding-bottom:.75rem;border-bottom:2px solid #f0f4fa;}
.bn-section h3{font-size:1.18rem;color:#1e293b;margin:1.75rem 0 .7rem;}
.bn-section p{color:#475569;line-height:1.75;margin-bottom:1.25rem;font-size:1rem;}
.bn-section ul,.bn-section ol{color:#475569;line-height:1.75;padding-left:1.5rem;margin-bottom:1.25rem;}
.bn-section li{margin-bottom:.5rem;}
.bn-section strong{color:#1e293b;}
.bn-section a{color:#059669;}
.bn-table{width:100%;border-collapse:collapse;border-radius:10px;overflow:hidden;border:1px solid #e8edf5;margin-bottom:1.5rem;}
.bn-table th{background:#10b981;color:#fff;padding:13px 16px;text-align:left;font-size:.88rem;font-weight:600;}
.bn-table td{padding:11px 16px;border-bottom:1px solid #f1f5f9;font-size:.9rem;color:#334155;}
.bn-table tr:last-child td{border-bottom:none;}
.bn-table tr:nth-child(even) td{background:#f8fafc;}
.bn-info{background:#f0fdf4;border-left:4px solid #10b981;border-radius:0 8px 8px 0;padding:1rem 1.25rem;margin:1.25rem 0;font-size:.95rem;color:#065f46;line-height:1.6;}
.bn-warn{background:#fffbeb;border-left:4px solid #d97706;border-radius:0 8px 8px 0;padding:1rem 1.25rem;margin:1.25rem 0;font-size:.95rem;color:#92400e;line-height:1.6;}
/* FAQ */
.bn-faq-item{border-bottom:1px solid #f0f4fa;padding-bottom:1.25rem;margin-bottom:1.25rem;}
.bn-faq-item:last-child{border-bottom:none;margin-bottom:0;padding-bottom:0;}
.bn-faq-q{font-size:1.02rem;font-weight:700;color:#0f172a;margin-bottom:.6rem;cursor:pointer;display:flex;justify-content:space-between;align-items:flex-start;gap:1rem;}
.bn-faq-q::after{content:'+';font-size:1.3rem;color:#10b981;flex-shrink:0;}
.bn-faq-item.open .bn-faq-q::after{content:'−';}
.bn-faq-a{color:#475569;line-height:1.7;font-size:.97rem;display:none;}
.bn-faq-item.open .bn-faq-a{display:block;}
/* Sidebar */
.bn-sidebar{position:sticky;top:6rem;display:flex;flex-direction:column;gap:1.25rem;}
.bn-widget{background:#fff;border-radius:12px;border:1px solid #e8edf5;box-shadow:0 4px 18px rgba(0,0,0,.05);overflow:hidden;}
.bn-widget-head{background:linear-gradient(135deg,#10b981,#059669);color:#fff;padding:1rem 1.25rem;}
.bn-widget-title{font-size:1rem;font-weight:700;}
.bn-widget-sub{font-size:.8rem;color:rgba(255,255,255,.75);}
.bn-widget-upd{font-size:.72rem;color:rgba(255,255,255,.6);margin-top:.35rem;}
.bn-widget-rows{padding:.4rem 0;}
.bn-widget-row{display:flex;justify-content:space-between;align-items:center;padding:.6rem 1.25rem;border-bottom:1px solid #f8fafc;transition:background .15s;}
.bn-widget-row:last-child{border-bottom:none;}
.bn-widget-row:hover{background:#f0fdf4;}
.bn-wl{font-size:.82rem;font-weight:600;color:#334155;}
.bn-ws{font-size:.72rem;color:#94a3b8;}
.bn-wv{font-size:.85rem;font-weight:800;color:#059669;text-align:right;white-space:nowrap;}
.bn-widget-foot{padding:.85rem 1.25rem;border-top:1px solid #f0f4fa;background:#f8fafc;}
.bn-widget-foot p{font-size:.75rem;color:#64748b;margin:0 0 .5rem;line-height:1.3;}
.bn-widget-foot a{font-size:.83rem;font-weight:700;color:#059669;text-decoration:none;display:flex;align-items:center;gap:.35rem;}
.bn-widget-foot a:hover{text-decoration:underline;}
.bn-quick-widget{background:#fff;border-radius:12px;border:1px solid #e8edf5;box-shadow:0 2px 12px rgba(0,0,0,.04);overflow:hidden;}
.bn-quick-head{padding:.9rem 1.25rem;background:#f8fafc;border-bottom:1px solid #f0f4fa;font-size:.83rem;font-weight:700;color:#475569;text-transform:uppercase;letter-spacing:.5px;}
.bn-quick-links{list-style:none;padding:.5rem 0;margin:0;}
.bn-quick-links li a{display:flex;align-items:center;gap:.5rem;padding:.65rem 1.25rem;font-size:.85rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .15s;font-weight:500;}
.bn-quick-links li a:hover,.bn-quick-links li a.active{color:#059669;background:#f0fdf4;border-left-color:#10b981;}
/* Responsive */
@media(max-width:1200px){.bn-wrap{grid-template-columns:200px 1fr 240px;}}
@media(max-width:1024px){.bn-wrap{grid-template-columns:1fr;}.bn-toc,.bn-sidebar{position:static;}.bn-sidebar{display:grid;grid-template-columns:1fr 1fr;}}
@media(max-width:768px){.bn-wrap{padding:1rem 1rem 3rem;}.bn-inner{grid-template-columns:1fr;}.bn-form-col{border-right:none;border-bottom:1px solid #f0f4fa;}.bn-sidebar{grid-template-columns:1fr;}.bn-row2{grid-template-columns:1fr;}.bn-modes{grid-template-columns:repeat(3,1fr);}.bn-boxes{grid-template-columns:1fr 1fr;}}
</style>

<main id="main-content">
<div class="bn-wrap">

  <!-- LEFT TOC -->
  <aside class="bn-toc">
    <div class="bn-toc-head">📋 In This Article</div>
    <ul class="bn-toc-list">
      <li><a href="#calculator"   class="bn-active">Bottleneck Calculator</a></li>
      <li><a href="#how-to-use">How to Use</a></li>
      <li><a href="#what-i">What Is a Bottleneck?</a></li>
      <li><a href="#acceptable">Acceptable Bottleneck %</a></li>
      <li><a href="#cpu-vs-gpu">CPU vs. GPU Bottleneck</a></li>
      <li><a href="#by-resolution">Bottleneck by Resolution</a></li>
      <li><a href="#pairing">Best CPU-GPU Pairings</a></li>
      <li><a href="#fix">How to Fix Bottlenecks</a></li>
      <li><a href="#faq">FAQ</a></li>
    </ul>
    <div class="bn-toc-div"></div>
    <div class="bn-toc-rlbl">Related Tools</div>
    <ul class="bn-toc-rlist">
      <li><a href="<?php echo $baseUrl; ?>/technology/voltage-drop-calculator">Voltage Drop Calc</a></li>
      <li><a href="<?php echo $baseUrl; ?>/construction/home-addition-cost-calculator">Home Addition Cost</a></li>
      <li><a href="<?php echo $baseUrl; ?>/business/profit-margin-calculator">Profit Margin Calc</a></li>
    </ul>
  </aside>

  <!-- MAIN -->
  <div class="bn-main">

    <div class="bn-hero">
      <div class="bn-bc">
        <a href="<?php echo $baseUrl; ?>/index.php">Home</a> ›
        <a href="<?php echo $baseUrl; ?>/technology/">Technology</a> ›
        PC Bottleneck Calculator
      </div>
      <h1>PC Bottleneck Calculator (<?php echo $currentYear; ?>) – CPU &amp; GPU Check</h1>
      <p class="bn-desc">
        Select your <strong>CPU and GPU</strong> to instantly check bottleneck percentage,
        performance balance, FPS tier estimates, and upgrade recommendations —
        updated for <?php echo $currentYear; ?> hardware including RTX 50-series and AMD Ryzen 9000.
      </p>
    </div>

    <!-- CALCULATOR -->
    <div class="bn-card" id="calculator">
      <div class="bn-inner">

        <!-- FORM -->
        <div class="bn-form-col">
          <div class="bn-field">
            <label for="bn_cpu">Your CPU</label>
            <select id="bn_cpu">
              <optgroup label="── Intel Core 14th Gen ──">
                <option value="i9-14900K|65000">Core i9-14900K</option>
                <option value="i7-14700K|55000">Core i7-14700K</option>
                <option value="i5-14600K|42000">Core i5-14600K</option>
                <option value="i5-14400F|33000">Core i5-14400F</option>
                <option value="i3-14100F|22000">Core i3-14100F</option>
              </optgroup>
              <optgroup label="── Intel Core 13th Gen ──">
                <option value="i9-13900K|63000">Core i9-13900K</option>
                <option value="i7-13700K|52000">Core i7-13700K</option>
                <option value="i5-13600K|40000" selected>Core i5-13600K</option>
                <option value="i5-13400F|31000">Core i5-13400F</option>
                <option value="i3-13100F|20500">Core i3-13100F</option>
              </optgroup>
              <optgroup label="── Intel Core 12th Gen ──">
                <option value="i9-12900K|56000">Core i9-12900K</option>
                <option value="i7-12700K|46000">Core i7-12700K</option>
                <option value="i5-12600K|35000">Core i5-12600K</option>
                <option value="i5-12400F|27000">Core i5-12400F</option>
                <option value="i3-12100F|18000">Core i3-12100F</option>
              </optgroup>
              <optgroup label="── Intel Core 10th/11th Gen ──">
                <option value="i9-10900K|42000">Core i9-10900K</option>
                <option value="i7-11700K|38000">Core i7-11700K</option>
                <option value="i5-10600K|26000">Core i5-10600K</option>
                <option value="i5-11400F|24000">Core i5-11400F</option>
              </optgroup>
              <optgroup label="── AMD Ryzen 9000 Series ──">
                <option value="R9-9950X|72000">Ryzen 9 9950X</option>
                <option value="R9-9900X|62000">Ryzen 9 9900X</option>
                <option value="R7-9700X|50000">Ryzen 7 9700X</option>
                <option value="R5-9600X|38000">Ryzen 5 9600X</option>
              </optgroup>
              <optgroup label="── AMD Ryzen 7000 Series ──">
                <option value="R9-7950X|68000">Ryzen 9 7950X</option>
                <option value="R9-7900X|58000">Ryzen 9 7900X</option>
                <option value="R7-7700X|48000">Ryzen 7 7700X</option>
                <option value="R5-7600X|37000">Ryzen 5 7600X</option>
                <option value="R5-7600|34000">Ryzen 5 7600</option>
              </optgroup>
              <optgroup label="── AMD Ryzen 5000 Series ──">
                <option value="R9-5950X|52000">Ryzen 9 5950X</option>
                <option value="R9-5900X|44000">Ryzen 9 5900X</option>
                <option value="R7-5800X3D|45000">Ryzen 7 5800X3D</option>
                <option value="R7-5800X|38000">Ryzen 7 5800X</option>
                <option value="R5-5600X|30000">Ryzen 5 5600X</option>
                <option value="R5-5600|28000">Ryzen 5 5600</option>
                <option value="R5-5500|22000">Ryzen 5 5500</option>
              </optgroup>
              <optgroup label="── AMD Ryzen 3000 Series ──">
                <option value="R9-3900X|36000">Ryzen 9 3900X</option>
                <option value="R7-3700X|30000">Ryzen 7 3700X</option>
                <option value="R5-3600X|24000">Ryzen 5 3600X</option>
                <option value="R5-3600|22000">Ryzen 5 3600</option>
              </optgroup>
              <optgroup label="── Older / Budget ──">
                <option value="i7-9700K|25000">Core i7-9700K</option>
                <option value="i5-9600K|20000">Core i5-9600K</option>
                <option value="i7-8700K|24000">Core i7-8700K</option>
                <option value="R5-2600|17000">Ryzen 5 2600</option>
                <option value="R7-2700X|22000">Ryzen 7 2700X</option>
              </optgroup>
            </select>
            <div class="bn-hint">Select the closest match to your processor model</div>
          </div>

          <div class="bn-field">
            <label for="bn_gpu">Your GPU</label>
            <select id="bn_gpu">
              <optgroup label="── NVIDIA RTX 50 Series ──">
                <option value="RTX5090|120000">RTX 5090</option>
                <option value="RTX5080|95000">RTX 5080</option>
                <option value="RTX5070Ti|75000">RTX 5070 Ti</option>
                <option value="RTX5070|62000">RTX 5070</option>
                <option value="RTX5060Ti|48000">RTX 5060 Ti</option>
              </optgroup>
              <optgroup label="── NVIDIA RTX 40 Series ──">
                <option value="RTX4090|100000">RTX 4090</option>
                <option value="RTX4080S|82000">RTX 4080 Super</option>
                <option value="RTX4080|78000">RTX 4080</option>
                <option value="RTX4070TiS|68000">RTX 4070 Ti Super</option>
                <option value="RTX4070Ti|62000">RTX 4070 Ti</option>
                <option value="RTX4070S|55000">RTX 4070 Super</option>
                <option value="RTX4070|48000" selected>RTX 4070</option>
                <option value="RTX4060Ti|38000">RTX 4060 Ti</option>
                <option value="RTX4060|30000">RTX 4060</option>
              </optgroup>
              <optgroup label="── NVIDIA RTX 30 Series ──">
                <option value="RTX3090Ti|85000">RTX 3090 Ti</option>
                <option value="RTX3090|78000">RTX 3090</option>
                <option value="RTX3080Ti|72000">RTX 3080 Ti</option>
                <option value="RTX3080|65000">RTX 3080</option>
                <option value="RTX3070Ti|55000">RTX 3070 Ti</option>
                <option value="RTX3070|50000">RTX 3070</option>
                <option value="RTX3060Ti|43000">RTX 3060 Ti</option>
                <option value="RTX3060|34000">RTX 3060</option>
              </optgroup>
              <optgroup label="── NVIDIA GTX 16 / 10 Series ──">
                <option value="GTX1660S|22000">GTX 1660 Super</option>
                <option value="GTX1660Ti|21000">GTX 1660 Ti</option>
                <option value="GTX1060-6|13000">GTX 1060 6GB</option>
                <option value="GTX1070|18000">GTX 1070</option>
                <option value="GTX1080|24000">GTX 1080</option>
                <option value="GTX1080Ti|32000">GTX 1080 Ti</option>
              </optgroup>
              <optgroup label="── AMD RX 7000 Series ──">
                <option value="RX7900XTX|90000">RX 7900 XTX</option>
                <option value="RX7900XT|80000">RX 7900 XT</option>
                <option value="RX7800XT|55000">RX 7800 XT</option>
                <option value="RX7700XT|45000">RX 7700 XT</option>
                <option value="RX7600|30000">RX 7600</option>
              </optgroup>
              <optgroup label="── AMD RX 6000 Series ──">
                <option value="RX6950XT|75000">RX 6950 XT</option>
                <option value="RX6800XT|65000">RX 6800 XT</option>
                <option value="RX6800|58000">RX 6800</option>
                <option value="RX6700XT|46000">RX 6700 XT</option>
                <option value="RX6600XT|35000">RX 6600 XT</option>
                <option value="RX6600|30000">RX 6600</option>
              </optgroup>
            </select>
            <div class="bn-hint">Select the closest match to your graphics card</div>
          </div>

          <div class="bn-row2">
            <div class="bn-field">
              <label for="bn_re">Monitor Resolution</label>
              <select id="bn_re">
                <option value="1080|1.0">1080p (1920×1080)</option>
                <option value="1440|1.35" selected>1440p (2560×1440)</option>
                <option value="4K|2.0">4K (3840×2160)</option>
                <option value="1080-360|0.75">1080p / 360Hz</option>
              </select>
              <div class="bn-hint">Higher res shifts load to GPU</div>
            </div>
            <div class="bn-field">
              <label for="bn_ram">System RAM</label>
              <select id="bn_ram">
                <option value="8">8 GB</option>
                <option value="16" selected>16 GB</option>
                <option value="32">32 GB</option>
                <option value="64">64 GB</option>
              </select>
            </div>
          </div>

          <div class="bn-field">
            <label>Use Case</label>
            <div class="bn-mode">
              <div class="bn-mode active" data-mode="gaming">🎮 Gaming</div>
              <div class="bn-mode" data-mode="workstation">💻 Workstation</div>
              <div class="bn-mode" data-mode="streaming">📡 Streaming</div>
            </div>
          </div>

          <button class="bn-btn" id="bn-calc-btn">⚡ Check Bottleneck</button>
        </div>

        <!-- RESULTS -->
        <div class="bn-res-col">
          <h3 class="bn-res-head">Results</h3>
          <p class="bn-res-sub" id="bn-res-sub">Select your components and click Check Bottleneck</p>

          <div id="bn-empty-state">
            <div class="bn-empty">
              <div class="bn-empty-icon">🖥️</div>
              <div class="bn-empty-text">Select your CPU and GPU above, then click<br><strong>Check Bottleneck</strong> to see your results.</div>
            </div>
          </div>

          <div id="bn-result" style="display:none;">
            <!-- Verdict -->
            <div class="bn-verdict" id="bn-verdict">
              <span class="bn-verdict-pct" id="bn-pct">0%</span>
              <span class="bn-verdict-lbl" id="bn-verdict-lbl">Balanced</span>
              <span class="bn-verdict-where" id="bn-verdict-where"></span>
            </div>

            <!-- Gauge -->
            <div class="bn-gauge-wrap">
              <div class="bn-gauge-label">Bottleneck Severity</div>
              <div class="bn-gauge-track">
                <div class="bn-gauge-fill" id="bn-gauge-fill" style="width:0%"></div>
              </div>
              <div class="bn-gauge-tick">
                <span>0%</span><span>10%</span><span>20%</span><span>35%</span><span>50%+</span>
              </div>
            </div>

            <!-- Stat boxes -->
            <div class="bn-boxe">
              <div class="bn-box"><span class="bn-box-val" id="bn-cpu-score">—</span><span class="bn-box-lbl">CPU Score</span></div>
              <div class="bn-box"><span class="bn-box-val" id="bn-gpu-score">—</span><span class="bn-box-lbl">GPU Score</span></div>
              <div class="bn-box"><span class="bn-box-val" id="bn-fps-tier">—</span><span class="bn-box-lbl">FPS Tier (Est.)</span></div>
              <div class="bn-box"><span class="bn-box-val" id="bn-balance">—</span><span class="bn-box-lbl">Balance Rating</span></div>
            </div>

            <!-- Utilisation bars -->
            <div class="bn-util">
              <div class="bn-util-title">Estimated Component Utilisation</div>
              <div class="bn-util-row">
                <span class="bn-util-lbl">CPU</span>
                <div class="bn-util-bar-wrap"><div class="bn-util-bar-fill" id="bn-cpu-bar" style="width:0%;background:#3b82f6;"></div></div>
                <span class="bn-util-pct" id="bn-cpu-pct">—</span>
              </div>
              <div class="bn-util-row">
                <span class="bn-util-lbl">GPU</span>
                <div class="bn-util-bar-wrap"><div class="bn-util-bar-fill" id="bn-gpu-bar" style="width:0%;background:#10b981;"></div></div>
                <span class="bn-util-pct" id="bn-gpu-pct">—</span>
              </div>
              <div class="bn-util-row" id="bn-ram-row">
                <span class="bn-util-lbl">RAM</span>
                <div class="bn-util-bar-wrap"><div class="bn-util-bar-fill" id="bn-ram-bar" style="width:0%;background:#f59e0b;"></div></div>
                <span class="bn-util-pct" id="bn-ram-pct">—</span>
              </div>
            </div>

            <!-- Upgrade recommendation -->
            <div class="bn-upgrade">
              <div class="bn-upgrade-title">💡 Recommendation</div>
              <div class="bn-upgrade-text" id="bn-rec">—</div>
            </div>
          </div>

          <p style="margin-top:.5rem;font-size:.74rem;color:#64748b;">
            *Estimates based on aggregated benchmark data. Real-world results vary by game, settings, and driver version. Use MSI Afterburner for live monitoring.
          </p>
        </div>
      </div>
    </div><!-- /bn-card -->

    <!-- HOW TO USE -->
    <section class="bn-section" id="how-to-use">
      <h2>How to Use the Bottleneck Calculator</h2>
      <p>This calculator uses aggregated benchmark scores (similar to PassMark CPU Mark and GPU benchmark composites) to compare your CPU and GPU's processing throughput, adjusting for your monitor resolution and use case.</p>
      <ol style="padding-left:1.5rem;color:#475569;line-height:1.85;">
        <li><strong>Select your CPU</strong> from the dropdown. If your exact model isn't listed, choose the closest equivalent by generation and tier (e.g., an i5-12500 is closest to the i5-12400F).</li>
        <li><strong>Select your GPU.</strong> Again, pick the closest match. A slight difference in the same tier (e.g., RX 6650 XT vs. RX 6600 XT) won't meaningfully change the result.</li>
        <li><strong>Choose your monitor resolution.</strong> This is the most underrated input — resolution has a massive effect on which component becomes the bottleneck. At 4K, almost every CPU is fine; at 1080p 360Hz, almost every GPU becomes the limit.</li>
        <li><strong>Select your RAM amount</strong> and <strong>use case.</strong> Workstation and streaming tasks are more CPU-intensive; gaming at high resolutions is more GPU-intensive.</li>
        <li><strong>Click Check Bottleneck</strong> and read the verdict, utilisation bars, and upgrade recommendation.</li>
      </ol>
      <div class="bn-info">💡 <strong>Important:</strong> No online calculator — including this one — can replace real-world monitoring. After checking here, download <strong>MSI Afterburner</strong> and monitor your CPU and GPU usage percentages while gaming. 95–99% GPU usage with under 80% CPU = normal GPU-bound operation. Reverse = CPU bottleneck.</div>
    </section>

    <!-- WHAT IS A BOTTLENECK -->
    <section class="bn-section" id="what-i">
      <h2>What Is a PC Bottleneck?</h2>
      <p>A bottleneck occurs when one component in your PC pipeline is significantly slower than the others, causing the faster parts to sit idle waiting for it to finish. In gaming, the two primary bottlenecks are the <strong>CPU</strong> and <strong>GPU</strong> — with RAM being a secondary factor.</p>
      <h3>How the CPU-GPU Pipeline Works</h3>
      <p>In a simplified gaming pipeline: your CPU handles game logic, physics, AI, and draws calls — essentially preparing each frame for the GPU to render. The GPU then renders that frame and pushes it to your display. If your CPU cannot prepare frames fast enough, the GPU sits idle waiting (CPU bottleneck). If the GPU cannot render frames fast enough, the CPU sits idle waiting (GPU bottleneck).</p>
      <p>A <strong>CPU bottleneck</strong> typically manifests as: low GPU utilization in GPU-Z/MSI Afterburner (below 80%), stuttering and frame pacing issues, and FPS that won't increase even when you lower graphics settings. A <strong>GPU bottleneck</strong> manifests as: GPU utilization at 99%, FPS improvement when you lower graphics settings or resolution, and smooth frame pacing.</p>
      <div class="bn-info">💡 <strong>GPU bottleneck is actually desirable.</strong> When your GPU is the limit, you are getting full value from your graphics card. The goal is for your GPU to be 95–99% utilized at your target resolution and settings.</div>
    </section>

    <!-- ACCEPTABLE % -->
    <section class="bn-section" id="acceptable">
      <h2>What Bottleneck Percentage Is Acceptable?</h2>
      <table class="bn-table">
        <thead><tr><th>Bottleneck %</th><th>Severity</th><th>Real-World Impact</th><th>Action</th></tr></thead>
        <tbody>
          <tr><td><strong>0–9%</strong></td>   <td>✅ Balanced</td>        <td>No meaningful performance loss. Ideal pairing.</td>                         <td>No action needed</td></tr>
          <tr><td><strong>10–19%</strong></td> <td>🟡 Mild</td>            <td>Slight headroom loss. Noticeable only in competitive FPS at high Hz.</td>   <td>Monitor — upgrade only if competitive gaming</td></tr>
          <tr><td><strong>20–34%</strong></td> <td>🟠 Moderate</td>        <td>Visible in demanding games. CPU stutters or GPU starved noticeably.</td>    <td>Plan upgrade within 1–2 generations</td></tr>
          <tr><td><strong>35–49%</strong></td> <td>🔴 Severe</td>          <td>Significant performance cap. Upgrade strongly recommended.</td>              <td>Upgrade soon — you're losing major performance</td></tr>
          <tr><td><strong>50%+</strong></td>   <td>🔴 Critical</td>        <td>One component is severely holding back the other. Major performance waste.</td><td>Upgrade immediately for best ROI</td></tr>
        </tbody>
      </table>
      <div class="bn-warn"><strong>Context matters:</strong> A 15% CPU bottleneck is irrelevant for someone gaming at 60fps/4K. It's very relevant for someone chasing 240fps at 1080p for competitive play. Always factor in your actual goals, not just the percentage.</div>
    </section>

    <!-- CPU vs GPU -->
    <section class="bn-section" id="cpu-vs-gpu">
      <h2>CPU Bottleneck vs. GPU Bottleneck — Key Differences</h2>
      <h3>Signs of a CPU Bottleneck</h3>
      <ul>
        <li>GPU utilization drops below 80% in GPU monitoring software</li>
        <li>FPS doesn't improve when you lower graphics settings</li>
        <li>Stuttering and frame time spikes even at lower graphics quality</li>
        <li>CPU cores running at 90–100% while GPU sits at 60–70%</li>
        <li>More pronounced in CPU-intensive games: open-world titles, city builders, RTS games, Escape from Tarkov, MSFS 2024</li>
      </ul>
      <h3>Signs of a GPU Bottleneck</h3>
      <ul>
        <li>GPU utilization at 95–99% (this is <em>normal and desirable</em>)</li>
        <li>FPS improves when you lower resolution or graphics settings</li>
        <li>Smooth frame pacing — no micro-stutters</li>
        <li>CPU usage stays under 70–80%</li>
        <li>Most common at 1440p and 4K with high-end GPUs</li>
      </ul>
      <h3>RAM Bottleneck</h3>
      <p>Often overlooked, RAM can create a bottleneck that mimics CPU performance issues. Signs: stuttering when loading new areas, long level load times, FPS drops during combat with many AI. Fix: upgrade to 16GB minimum for modern gaming, 32GB for streaming/editing. For AMD Ryzen, fast RAM (3600MHz CL18) significantly improves performance due to the Infinity Fabric link.</p>
    </section>

    <!-- BY RESOLUTION -->
    <section class="bn-section" id="by-resolution">
      <h2>How Resolution Changes Your Bottleneck</h2>
      <p>Resolution is the single most important factor that determines whether your CPU or GPU is the bottleneck — and it's the easiest to change without buying new hardware.</p>
      <table class="bn-table">
        <thead><tr><th>Resolution</th><th>GPU Load</th><th>CPU Sensitivity</th><th>Best For</th></tr></thead>
        <tbody>
          <tr><td><strong>1080p / 360Hz</strong></td><td>Very Low per frame</td><td>Extremely High — CPU is almost always the limit</td><td>Competitive FPS (CS2, Valorant, Apex)</td></tr>
          <tr><td><strong>1080p / 144–165Hz</strong></td><td>Low-Medium</td><td>High — mid-range CPU needed</td><td>Competitive + casual gaming</td></tr>
          <tr><td><strong>1440p / 144–165Hz</strong></td><td>Medium-High</td><td>Moderate — most modern CPUs are fine</td><td>Best all-around for RTX 4070/4070 Ti class</td></tr>
          <tr><td><strong>4K / 60–120Hz</strong></td><td>Very High</td><td>Low — almost any modern CPU works</td><td>Cinematic, open-world, and visual fidelity gaming</td></tr>
          <tr><td><strong>4K / 144Hz</strong></td><td>Extreme</td><td>Very Low — only RTX 4080/4090 class relevant</td><td>High-end flagship builds</td></tr>
        </tbody>
      </table>
      <div class="bn-info">💡 <strong>Resolution trick:</strong> If you have a CPU bottleneck at 1080p, switching to a 1440p monitor can effectively eliminate it without buying a new CPU — the GPU now takes significantly longer per frame, giving your CPU time to catch up.</div>
    </section>

    <!-- PAIRINGS -->
    <section class="bn-section" id="pairing">
      <h2><?php echo $currentYear; ?> Best CPU-GPU Pairings (Balanced Builds)</h2>
      <table class="bn-table">
        <thead><tr><th>GPU</th><th>Best CPU Pairing</th><th>Target Resolution</th><th>Bottleneck Est.</th></tr></thead>
        <tbody>
          <tr><td><strong>RTX 5090 / 4090</strong></td><td>i9-14900K / R9 7950X</td><td>4K 120Hz</td><td>&lt;5% balanced</td></tr>
          <tr><td><strong>RTX 5080 / 4080 Super</strong></td><td>i7-14700K / R9 7900X</td><td>4K 60–120Hz</td><td>&lt;5% balanced</td></tr>
          <tr><td><strong>RTX 5070 Ti / 4070 Ti Super</strong></td><td>i7-13700K / R7 7700X</td><td>1440p–4K</td><td>&lt;8% balanced</td></tr>
          <tr><td><strong>RTX 5070 / 4070 Super</strong></td><td>i5-14600K / R5 7600X</td><td>1440p</td><td>&lt;8% balanced</td></tr>
          <tr><td><strong>RTX 4070</strong></td><td>i5-13600K / R5 7600</td><td>1440p</td><td>&lt;10% balanced</td></tr>
          <tr><td><strong>RTX 4060 Ti</strong></td><td>i5-12400F / R5 5600X</td><td>1080p–1440p</td><td>&lt;10% balanced</td></tr>
          <tr><td><strong>RTX 3060 / RX 6600</strong></td><td>i5-12400F / R5 5600</td><td>1080p</td><td>&lt;12% balanced</td></tr>
          <tr><td><strong>GTX 1660 Super</strong></td><td>i5-10600K / R5 3600</td><td>1080p</td><td>&lt;12% balanced</td></tr>
        </tbody>
      </table>
    </section>

    <!-- HOW TO FIX -->
    <section class="bn-section" id="fix">
      <h2>How to Fix a Bottleneck (Without Always Buying New Hardware)</h2>
      <h3>Fix a CPU Bottleneck</h3>
      <ul>
        <li><strong>Increase your monitor resolution</strong> to 1440p or 4K — shifts load to GPU, relieves CPU pressure. Free fix.</li>
        <li><strong>Enable DLSS / FSR / XeSS.</strong> AI upscaling reduces GPU load, letting it run at higher internal resolution with less work, which also reduces the relative CPU imbalance.</li>
        <li><strong>Reduce game simulation quality</strong> settings (NPC density, physics quality, draw distance) — these are CPU-intensive settings that differ from visual quality settings.</li>
        <li><strong>Overclock your CPU</strong> if your chip and board support it. Even a 10–15% OC can push a mild bottleneck into balanced territory.</li>
        <li><strong>Upgrade CPU</strong> — choose a processor within 1–2 tiers of your GPU's paired recommendation.</li>
      </ul>
      <h3>Fix a GPU Bottleneck</h3>
      <ul>
        <li><strong>Lower your resolution or graphics settings</strong> — GPU bottlenecks at your target settings mean you need more GPU power.</li>
        <li><strong>Enable DLSS/FSR</strong> — upscaling renders at a lower internal resolution, significantly reducing GPU load. DLSS Quality at 4K renders at ~1440p internally.</li>
        <li><strong>Upgrade GPU</strong> — the only true long-term fix for being GPU-limited at your target resolution and settings.</li>
      </ul>
      <h3>Fix a RAM Bottleneck</h3>
      <ul>
        <li><strong>Upgrade to 16GB minimum</strong> for modern gaming (32GB for streaming/recording simultaneously).</li>
        <li><strong>Enable XMP/EXPO in BIOS</strong> — most RAM kits ship running at 2133MHz by default; enabling XMP unlocks advertised speeds (e.g., 3200–6000MHz). This is a free performance gain on RAM you already own.</li>
        <li><strong>Use dual-channel RAM</strong> — two 8GB sticks outperform one 16GB stick in all scenarios due to dual-channel bandwidth.</li>
      </ul>
    </section>

    <!-- FAQ -->
    <section class="bn-section" id="faq">
      <h2>Frequently Asked Questions</h2>

      <div class="bn-faq-item open">
        <div class="bn-faq-q">What is a PC bottleneck?</div>
        <div class="bn-faq-a">A PC bottleneck occurs when one component is significantly slower than the others, causing faster parts to sit idle. In gaming, a CPU bottleneck means your processor can't prepare frames fast enough for the GPU; a GPU bottleneck means the GPU can't render frames as fast as the CPU prepares them. A GPU bottleneck at your target resolution is normal and desirable — it means your GPU is fully utilized.</div>
      </div>
      <div class="bn-faq-item">
        <div class="bn-faq-q">What percentage bottleneck is acceptable?</div>
        <div class="bn-faq-a">Under 10% is well-balanced and ideal. 10–20% is mild — you likely won't notice it in most games. 20–35% is moderate and worth planning an upgrade. Above 35% is severe — one component is meaningfully capping the other and an upgrade is recommended for best performance per dollar.</div>
      </div>
      <div class="bn-faq-item">
        <div class="bn-faq-q">Is 20% bottleneck bad?</div>
        <div class="bn-faq-a">It depends on your use case. At 60Hz casual gaming, a 20% CPU bottleneck is barely noticeable. At 240Hz competitive FPS, it matters. A 20% GPU bottleneck at 4K simply means your GPU is being asked to do a lot — lowering settings or enabling DLSS resolves it without any hardware purchase.</div>
      </div>
      <div class="bn-faq-item">
        <div class="bn-faq-q">How do I check my real bottleneck while gaming?</div>
        <div class="bn-faq-a">Download MSI Afterburner with RivaTuner Statistics Server. Enable CPU and GPU usage overlays. While gaming: GPU at 95–99% + CPU under 80% = normal GPU-bound (good). CPU at 95–100% + GPU under 80% = CPU bottleneck. This real-world method is always more accurate than any online calculator, which can only use benchmark scores as a proxy.</div>
      </div>
      <div class="bn-faq-item">
        <div class="bn-faq-q">Does RAM affect bottleneck?</div>
        <div class="bn-faq-a">Yes. Under 16GB creates a RAM bottleneck in modern games. Slow RAM (2133MHz vs 3600MHz) can cost 5–15% performance on AMD Ryzen systems. Enable XMP/EXPO in BIOS to run RAM at its rated speed — this is free performance. Use dual-channel (two sticks) rather than a single stick for double the memory bandwidth.</div>
      </div>
      <div class="bn-faq-item">
        <div class="bn-faq-q">What resolution reduces CPU bottleneck?</div>
        <div class="bn-faq-a">Higher resolution = less CPU bottleneck. At 4K, the GPU takes significantly longer per frame, giving the CPU time to keep up regardless of its speed. If you have a CPU bottleneck at 1080p, upgrading to a 1440p or 4K monitor can effectively eliminate it without any CPU upgrade.</div>
      </div>
      <div class="bn-faq-item">
        <div class="bn-faq-q">Which CPUs pair well with RTX 4070?</div>
        <div class="bn-faq-a">At 1440p (the RTX 4070's sweet spot): Intel Core i5-13600K, i5-14600K, AMD Ryzen 5 7600X, Ryzen 7 7700X all provide a balanced pairing with under 10% bottleneck. At 1080p, you need a stronger CPU — at least an i7-13700K or R7 7700X — to avoid CPU bottlenecking at high frame rates.</div>
      </div>
      <div class="bn-faq-item">
        <div class="bn-faq-q">Is RTX 4090 bottlenecked by any CPU?</div>
        <div class="bn-faq-a">At 4K, the RTX 4090 is GPU-bound in virtually every scenario — the GPU is so powerful that even an i9-14900K or R9 7950X will show minimal CPU bottleneck. At 1080p or 1440p pushing very high frame rates, even top-tier CPUs can show a mild 10–15% CPU bottleneck with an RTX 4090. This is expected and acceptable given the extreme GPU performance.</div>
      </div>
    </section>

  </div><!-- /bn-main -->

  <!-- RIGHT SIDEBAR -->
  <aside class="bn-sidebar">
    <div class="bn-widget">
      <div class="bn-widget-head">
        <div style="display:flex;align-items:center;gap:.5rem;margin-bottom:.25rem;">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
          <span class="bn-widget-title"><?php echo $currentYear; ?> GPU Benchmark Tiers</span>
        </div>
        <div class="bn-widget-sub">Relative gaming performance</div>
        <div class="bn-widget-upd">Updated: <?php echo date('M j, Y'); ?></div>
      </div>
      <div class="bn-widget-row">
        <div class="bn-widget-row"><div><div class="bn-wl">RTX 5090 / 4090</div><div class="bn-w">Flagship 4K tier</div></div><div><div class="bn-wv">S Tier</div></div></div>
        <div class="bn-widget-row"><div><div class="bn-wl">RTX 5080 / 4080 Super</div><div class="bn-w">High-end 4K</div></div><div><div class="bn-wv">A+ Tier</div></div></div>
        <div class="bn-widget-row"><div><div class="bn-wl">RTX 5070 Ti / 4070 Ti Super</div><div class="bn-w">4K / 1440p ultra</div></div><div><div class="bn-wv">A Tier</div></div></div>
        <div class="bn-widget-row" style="background:#f0fdf4;"><div><div class="bn-wl">RTX 5070 / 4070 Super</div><div class="bn-w">1440p sweet spot</div></div><div><div class="bn-wv">A- Tier</div></div></div>
        <div class="bn-widget-row"><div><div class="bn-wl">RTX 4070 / RX 7800 XT</div><div class="bn-w">1440p excellent</div></div><div><div class="bn-wv">B+ Tier</div></div></div>
        <div class="bn-widget-row"><div><div class="bn-wl">RTX 4060 Ti / RX 7700 XT</div><div class="bn-w">1080p–1440p</div></div><div><div class="bn-wv">B Tier</div></div></div>
        <div class="bn-widget-row"><div><div class="bn-wl">RTX 4060 / RX 7600</div><div class="bn-w">1080p solid</div></div><div><div class="bn-wv">C+ Tier</div></div></div>
      </div>
      <div class="bn-widget-foot">
        <p>Tiers based on aggregated 1080p + 1440p gaming benchmarks, <?php echo $currentYear; ?>.</p>
        <a href="https://www.passmark.com/products/performancetest/" target="_blank" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
          PassMark Benchmarks →
        </a>
      </div>
    </div>

    <div class="bn-quick-widget">
      <div class="bn-quick-head">⚡ Technology Tools</div>
      <ul class="bn-quick-link">
        <li><a href="<?php echo $baseUrl; ?>/technology/bottleneck-calculator" class="active">💻 Bottleneck Calculator</a></li>
        <li><a href="<?php echo $baseUrl; ?>/technology/voltage-drop-calculator">⚡ Voltage Drop Calc</a></li>
        <li><a href="<?php echo $baseUrl; ?>/construction/home-addition-cost-calculator">🏠 Home Addition Cost</a></li>
        <li><a href="<?php echo $baseUrl; ?>/business/freelance-rate-calculator">💻 Freelance Rate</a></li>
        <li><a href="<?php echo $baseUrl; ?>/business/profit-margin-calculator">💹 Profit Margin</a></li>
      </ul>
    </div>
  </aside>

</div><!-- /bn-wrap -->

  <!-- Expert / Editorial Note -->
  <div style="max-width:1100px;margin:0 auto 32px;padding:0 20px;">
    <section style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:12px;padding:16px 22px;">
      <p style="font-size:.84rem;color:#64748b;margin:0;line-height:1.6;"><strong>Editorial Note:</strong> This PC Bottleneck Calculator is maintained by the AmericaCalculator.com editorial team and updated with <?php echo $currentYear; ?> CPU and GPU benchmark data. Performance scores referenced from publicly available hardware benchmarks including PassMark, UserBenchmark, and manufacturer specs. Last updated: September <?php echo $currentYear; ?>. Bottleneck percentages are estimates — real-world performance varies by game engine, driver version, RAM speed, and system configuration.</p>
    </section>
  </div>
  <!-- Related Calculators -->
  <div style="max-width:1100px;margin:0 auto 32px;padding:0 20px;">
    <h2 style="font-size:1.15rem;color:#0f172a;margin:0 0 16px;">Related Calculators &amp; Tools</h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:14px;">
      <a href="<?php echo $baseUrl; ?>/technology/voltage-drop-calculator" style="display:block;background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:16px 18px;text-decoration:none;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 4px 16px rgba(0,0,0,.1)'" onmouseout="this.style.boxShadow='none'">
        <div style="font-size:1.4rem;margin-bottom:6px;">⚡</div>
        <div style="font-weight:700;color:#0f172a;font-size:.95rem;">Voltage Drop Calculator</div>
        <div style="color:#64748b;font-size:.82rem;margin-top:4px;">Wire gauge, NEC 3% limits &amp; electrical sizing</div>
      </a>
      <a href="<?php echo $baseUrl; ?>/technology/" style="display:block;background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:16px 18px;text-decoration:none;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 4px 16px rgba(0,0,0,.1)'" onmouseout="this.style.boxShadow='none'">
        <div style="font-size:1.4rem;margin-bottom:6px;">💻</div>
        <div style="font-weight:700;color:#0f172a;font-size:.95rem;">All Technology Calculators</div>
        <div style="color:#64748b;font-size:.82rem;margin-top:4px;">Browse tech, hardware &amp; electrical tools</div>
      </a>
      <a href="<?php echo $baseUrl; ?>/business/roi-calculator" style="display:block;background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:16px 18px;text-decoration:none;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 4px 16px rgba(0,0,0,.1)'" onmouseout="this.style.boxShadow='none'">
        <div style="font-size:1.4rem;margin-bottom:6px;">📈</div>
        <div style="font-weight:700;color:#0f172a;font-size:.95rem;">Business ROI Calculator</div>
        <div style="color:#64748b;font-size:.82rem;margin-top:4px;">Calculate ROI on hardware &amp; equipment</div>
      </a>
      <a href="<?php echo $baseUrl; ?>/math/" style="display:block;background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:16px 18px;text-decoration:none;transition:box-shadow .2s;" onmouseover="this.style.boxShadow='0 4px 16px rgba(0,0,0,.1)'" onmouseout="this.style.boxShadow='none'">
        <div style="font-size:1.4rem;margin-bottom:6px;">📐</div>
        <div style="font-weight:700;color:#0f172a;font-size:.95rem;">Math &amp; Science Calculators</div>
        <div style="color:#64748b;font-size:.82rem;margin-top:4px;">Explore our suite of math calculation tools</div>
      </a>
    </div>
  </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {

  // ── Mode pills ──
  let useCase = 'gaming';
  document.querySelectorAll('.bn-mode').forEach(m => {
    m.addEventListener('click', () => {
      document.querySelectorAll('.bn-mode').forEach(x => x.classList.remove('active'));
      m.classList.add('active');
      useCase = m.getAttribute('data-mode');
    });
  });

  // ── Main calculate ──
  function calculate() {
    const cpuRaw  = document.getElementById('bn_cpu').value;
    const gpuRaw  = document.getElementById('bn_gpu').value;
    const resRaw  = document.getElementById('bn_res').value;
    const ram     = parseInt(document.getElementById('bn_ram').value) || 16;

    const cpuParts = cpuRaw.split('|');
    const gpuParts = gpuRaw.split('|');
    const resParts = resRaw.split('|');

    const cpuName  = cpuParts[0];
    const cpuScore = parseInt(cpuParts[1]) || 30000;
    const gpuName  = gpuParts[0];
    const gpuScore = parseInt(gpuParts[1]) || 48000;
    const resLabel = resParts[0];
    const resGpuMult = parseFloat(resParts[1]) || 1.35; // GPU load multiplier at this res

    // ── Use-case adjustments ──
    // Gaming: GPU-heavy; Workstation: CPU-heavy; Streaming: balanced but CPU+
    let cpuAdj = 1.0, gpuAdj = 1.0;
    if (useCase === 'gaming') {
      cpuAdj = 1.0;
      gpuAdj = resGpuMult; // higher res = more GPU load
    } else if (useCase === 'workstation') {
      cpuAdj = 1.40; // workstation is very CPU-intensive
      gpuAdj = 0.85;
    } else { // streaming
      cpuAdj = 1.20; // encoding adds CPU load
      gpuAdj = resGpuMult * 0.95;
    }

    const effectiveCPU = cpuScore / cpuAdj;
    const effectiveGPU = gpuScore / gpuAdj;

    // ── Bottleneck % calculation ──
    // Positive = CPU is the bottleneck (GPU waiting), Negative = GPU bottleneck (normal)
    const ratio = effectiveCPU / effectiveGPU;
    let bottleneckPct, bottlenecker, gpuUtil, cpuUtil;

    if (ratio >= 1.0) {
      // CPU is relatively stronger or balanced → could be GPU bottleneck
      bottleneckPct = Math.round(Math.min(((1 / ratio) - 1) * -100, 0) * -1);
      // Actually: GPU bottleneck = how much GPU is the limit
      // If ratio > 1.1, GPU is bottleneck
      if (ratio > 1.10) {
        bottlenecker  = 'gpu';
        bottleneckPct = Math.round(((ratio - 1) / ratio) * 100);
        gpuUtil       = 99;
        cpuUtil       = Math.round(100 / ratio);
      } else {
        bottlenecker  = 'balanced';
        bottleneckPct = Math.round(Math.abs(ratio - 1) * 100);
        gpuUtil       = Math.round(95 - bottleneckPct * 0.5);
        cpuUtil       = Math.round(92 - bottleneckPct * 0.3);
      }
    } else {
      // CPU is weaker → CPU bottleneck
      bottlenecker  = 'cpu';
      bottleneckPct = Math.round(((1 / ratio) - 1) * 100);
      cpuUtil       = 99;
      gpuUtil       = Math.round(100 * ratio);
    }

    bottleneckPct = Math.min(bottleneckPct, 65);

    // ── Verdict class ──
    let vcls = 'balanced', vLbl = '', vWhere = '';
    if (bottleneckPct < 10) {
      vcls   = 'balanced';
      vLbl   = bottlenecker === 'gpu' ? '✅ GPU-Bound (Normal & Ideal)' : '✅ Well Balanced';
      vWhere = bottlenecker === 'gpu' ? 'GPU is fully utilized — this is the desired state' : 'CPU and GPU are well matched for your resolution';
    } else if (bottleneckPct < 20) {
      vcls   = 'mild';
      vLbl   = bottlenecker === 'cpu' ? '🟡 Mild CPU Bottleneck' : '🟡 Mild GPU Bottleneck';
      vWhere = bottlenecker === 'cpu' ? 'CPU is slightly limiting GPU output' : 'GPU load slightly exceeds CPU feed rate';
    } else if (bottleneckPct < 35) {
      vcls   = 'moderate';
      vLbl   = bottlenecker === 'cpu' ? '🟠 Moderate CPU Bottleneck' : '🟠 Moderate GPU Bottleneck';
      vWhere = bottlenecker === 'cpu' ? 'CPU is noticeably holding back your GPU' : 'GPU is a clear limiting factor at this resolution';
    } else {
      vcls   = 'severe';
      vLbl   = bottlenecker === 'cpu' ? '🔴 Severe CPU Bottleneck' : '🔴 Severe GPU Bottleneck';
      vWhere = bottlenecker === 'cpu' ? 'CPU is severely limiting performance — upgrade recommended' : 'GPU is a major constraint — upgrade or lower resolution';
    }

    // ── FPS tier estimate (rough, gaming at chosen resolution) ──
    const minScore  = Math.min(effectiveCPU, effectiveGPU);
    let fpsTier;
    if      (minScore > 70000) fpsTier = '4K 120+ fps';
    else if (minScore > 50000) fpsTier = '4K 60 / 1440p 144fps';
    else if (minScore > 35000) fpsTier = '1440p 100fps / 1080p 165fps';
    else if (minScore > 22000) fpsTier = '1080p 60–100fps';
    else                        fpsTier = '1080p 30–60fps';

    // ── RAM check ──
    let ramUtil = 65;
    if (ram < 8)  ramUtil = 95;
    else if (ram < 16) ramUtil = 82;
    else if (ram >= 32) ramUtil = 45;

    // ── Upgrade recommendation ──
    let rec = '';
    if (bottlenecker === 'cpu' && bottleneckPct >= 20) {
      rec = `<strong>Upgrade your CPU.</strong> Your ${cpuName} is limiting your ${gpuName} by ~${bottleneckPct}% at ${resLabel}. At this use case (${useCase}), a stronger processor will unlock your GPU's full potential. Consider: one or two tiers up in the same platform (e.g., ${cpuScore < 35000 ? 'Ryzen 5 7600X or Core i5-13600K' : cpuScore < 50000 ? 'Ryzen 7 7700X or Core i7-13700K' : 'Ryzen 9 7900X or Core i9-14900K'}).`;
    } else if (bottlenecker === 'gpu' && bottleneckPct >= 20) {
      rec = `<strong>Upgrade your GPU</strong> to get more performance at ${resLabel}. Your ${gpuName} is the limit — the ${cpuName} has headroom to feed a faster GPU. Alternatively, <strong>lower your resolution or enable DLSS/FSR</strong> for an immediate free improvement.`;
    } else if (bottleneckPct < 10) {
      rec = `<strong>Great pairing!</strong> Your ${cpuName} and ${gpuName} are well balanced at ${resLabel} for ${useCase}. No upgrade needed from a bottleneck perspective. Focus on RAM speed (enable XMP/EXPO in BIOS) and driver updates for marginal gains.`;
    } else {
      rec = `<strong>Mild imbalance</strong> (~${bottleneckPct}%) — not worth upgrading for this reason alone. ${bottlenecker === 'cpu' ? 'Increase resolution to ' + (resLabel === '1080' ? '1440p' : '4K') + ' to reduce CPU pressure for free.' : 'Enable DLSS/FSR to reduce GPU load without a hardware purchase.'}`;
    }

    if (ram < 16) {
      rec += `<br><br>⚠️ <strong>RAM Warning:</strong> ${ram}GB is below the 16GB minimum recommended for modern gaming. This may cause stuttering and loading hitches independent of your CPU/GPU balance.`;
    }

    // ── Update DOM ──
    document.getElementById('bn-empty-state').style.display = 'none';
    document.getElementById('bn-results').style.display     = 'block';

    // Verdict
    const vEl = document.getElementById('bn-verdict');
    vEl.className = 'bn-verdict ' + vcls;
    document.getElementById('bn-pct').textContent          = bottleneckPct + '%';
    document.getElementById('bn-verdict-lbl').textContent  = vLbl;
    document.getElementById('bn-verdict-where').textContent= vWhere;

    // Gauge
    const gaugeW = Math.min(bottleneckPct * 2, 100);
    const gFill  = document.getElementById('bn-gauge-fill');
    gFill.style.width = gaugeW + '%';
    gFill.style.background = vcls === 'balanced' ? '#10b981'
                           : vcls === 'mild'     ? '#f59e0b'
                           : vcls === 'moderate' ? '#f97316' : '#ef4444';

    // Boxes
    document.getElementById('bn-cpu-score').textContent = cpuScore.toLocaleString();
    document.getElementById('bn-gpu-score').textContent = gpuScore.toLocaleString();
    document.getElementById('bn-fps-tier').textContent  = fpsTier;
    document.getElementById('bn-balance').textContent   = bottleneckPct < 10 ? '⭐⭐⭐⭐⭐'
                                                        : bottleneckPct < 20 ? '⭐⭐⭐⭐'
                                                        : bottleneckPct < 35 ? '⭐⭐⭐'
                                                        : bottleneckPct < 50 ? '⭐⭐' : '⭐';

    // Util bars
    cpuUtil = Math.max(Math.min(cpuUtil, 100), 10);
    gpuUtil = Math.max(Math.min(gpuUtil, 100), 10);
    document.getElementById('bn-cpu-bar').style.width = cpuUtil + '%';
    document.getElementById('bn-gpu-bar').style.width = gpuUtil + '%';
    document.getElementById('bn-ram-bar').style.width = ramUtil + '%';
    document.getElementById('bn-cpu-pct').textContent = cpuUtil + '%';
    document.getElementById('bn-gpu-pct').textContent = gpuUtil + '%';
    document.getElementById('bn-ram-pct').textContent = ramUtil + '%';

    // Recommendation
    document.getElementById('bn-rec').innerHTML = rec;

    // Sub-text
    document.getElementById('bn-res-sub').textContent =
      cpuName + ' + ' + gpuName + ' · ' + resLabel + 'p · ' + useCase;
  }

  // ── Trigger on button + auto on change ──
  document.getElementById('bn-calc-btn').addEventListener('click', calculate);
  ['bn_cpu','bn_gpu','bn_res','bn_ram'].forEach(id => {
    document.getElementById(id).addEventListener('change', calculate);
  });
  // Auto-calculate on load with defaults
  calculate();

  // ── TOC scroll highlight ──
  const tocLinks = document.querySelectorAll('.bn-toc-list a');
  const sections = [];
  tocLinks.forEach(link => {
    const id = link.getAttribute('href').replace('#', '');
    const sec = document.getElementById(id);
    if (sec) sections.push({ link, sec });
  });
  function updateTOC() {
    const y = window.scrollY + 130;
    let active = sections[0];
    sections.forEach(s => { if (s.sec && s.sec.getBoundingClientRect().top + window.scrollY <= y) active = s; });
    tocLinks.forEach(l => l.classList.remove('bn-active'));
    if (active) active.link.classList.add('bn-active');
  }
  window.addEventListener('scroll', updateTOC, { passive: true });
  updateTOC();

  // ── FAQ accordion ──
  document.querySelectorAll('.bn-faq-q').forEach(q => {
    q.addEventListener('click', function () {
      const item    = this.closest('.bn-faq-item');
      const wasOpen = item.classList.contains('open');
      document.querySelectorAll('.bn-faq-item').forEach(i => i.classList.remove('open'));
      if (!wasOpen) item.classList.add('open');
    });
  });

});
</script>

<?php require_once '../includes/footer.php'; ?>

