<?php
$currentYear = date('Y');
$pageTitle       = "Amazon FBA ROI Calculator ($currentYear) | Free Tool";
$metaDescription = "Amazon FBA ROI Calculator 2026 USA — calculate net profit, ACOS, true ROI on Amazon FBA products including fulfillment fees, referral fees, PPC spend, and storage. Free, no signup.";
$metaKeywords    = 'amazon roi calculator, amazon fba roi calculator, how to calculate roi amazon fba, amazon fba profit calculator, amazon seller roi, amazon product roi calculator, amazon fba return on investment';
$schemaData=['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'HowTo','name'=>'How to Calculate Amazon FBA Product ROI','step'=>[
    ['@type'=>'HowToStep','name'=>'Enter product unit landed cost','text'=>'Input manufacturing cost per unit plus international shipping, customs, and prep fees.'],
    ['@type'=>'HowToStep','name'=>'Set target Amazon selling price','text'=>'Enter the planned listing price on Amazon.com.'],
    ['@type'=>'HowToStep','name'=>'Add Amazon FBA and referral fees','text'=>'Input FBA fulfillment pick-and-pack fee, monthly storage fee, and category referral fee percentage.'],
    ['@type'=>'HowToStep','name'=>'Include advertising spend (ACOS)','text'=>'Enter estimated PPC advertising cost per unit sold.'],
    ['@type'=>'HowToStep','name'=>'Calculate net profit margin and ROI','text'=>'View net dollar profit per unit, profit margin percentage, and return on inventory capital.']
  ]],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Business','item'=>'https://americacalculator.com/business/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'ROI Calculator','item'=>'https://americacalculator.com/business/roi-calculator'],
    ['@type'=>'ListItem','position'=>4,'name'=>'Amazon FBA ROI Calculator','item'=>'https://americacalculator.com/business/amazon-roi-calculator'],
  ]],
  ['@type'=>'SoftwareApplication','name'=>'Amazon FBA ROI Calculator 2026','applicationCategory'=>'BusinessApplication','operatingSystem'=>'All','url'=>'https://americacalculator.com/business/amazon-roi-calculator','offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'How do you calculate ROI on Amazon FBA?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Amazon FBA ROI = ((Revenue − Total Costs) / Total Costs) × 100. Total costs must include: product cost (COGS), Amazon referral fee (8–15%), FBA fulfillment fee, monthly storage fee, PPC advertising spend, shipping to Amazon (inbound freight), and any prep/inspection fees.']],
    ['@type'=>'Question','name'=>'What is a good ROI for Amazon FBA?','acceptedAnswer'=>['@type'=>'Answer','text'=>'A good Amazon FBA ROI is 30–100%+ on your product investment (COGS). On total invested capital (including inventory, fees, and PPC), target 20–50%+ ROI. Below 20% ROI on Amazon FBA leaves little margin for returns, account suspension risk, and competition.']],
    ['@type'=>'Question','name'=>'What Amazon fees should I include in ROI calculation?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Include all of: referral fee (8–15% of sale price), FBA fulfillment fee ($3–$6+ per unit depending on size/weight), monthly storage fee ($0.87–$3.63/cubic foot), inbound shipping to Amazon warehouse, PPC advertising cost, and any prep fees. Omitting any of these inflates your calculated ROI significantly.']],
    ['@type'=>'Question','name'=>'What is ACOS in Amazon FBA?','acceptedAnswer'=>['@type'=>'Answer','text'=>'ACOS (Advertising Cost of Sales) = PPC Spend / PPC Revenue × 100. An ACOS of 25% means you spent $25 in ads for every $100 in ad-attributed sales. Your break-even ACOS = your gross margin percentage. If your margin is 35%, an ACOS above 35% means your ads are unprofitable.']],
  ]],
]];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f5f7fa;}
.sec-wrap{max-width:1100px;margin:0 auto;padding:2rem 1.25rem 4rem;}
.sec-bc{font-size:.79rem;color:#94a3b8;margin-bottom:.75rem;}.sec-bc a{color:#64748b;text-decoration:none;}
.sec-hero h1{font-size:1.9rem;color:#0f172a;margin:0 0 .45rem;line-height:1.25;}
.sec-hero p{font-size:.96rem;color:#64748b;line-height:1.68;margin:0 0 1.5rem;border-left:3px solid #f97316;padding-left:.9rem;}
.sec-layout{display:grid;grid-template-columns:1fr 310px;gap:2rem;align-items:start;margin-bottom:2rem;}
.sec-card{background:#fff;border-radius:13px;border:1px solid #e2e8f0;box-shadow:0 3px 14px rgba(0,0,0,.06);overflow:hidden;}
.sec-card-head{background:linear-gradient(135deg,#ea580c,#c2410c);color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;}
.sec-body{padding:1.5rem;}
.sf{margin-bottom:.9rem;}.sf label{display:block;font-size:.84rem;font-weight:600;color:#1e293b;margin-bottom:.32rem;}
.sf input{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.92rem;color:#0f172a;outline:none;box-sizing:border-box;transition:border-color .2s;}
.sf input:focus{border-color:#ea580c;}.sf .hint{font-size:.72rem;color:#94a3b8;margin-top:.22rem;}
.sf2{display:grid;grid-template-columns:1fr 1fr;gap:.8rem;}
.sf-lbl{font-size:.7rem;font-weight:800;text-transform:uppercase;letter-spacing:.06em;color:#94a3b8;margin:1.1rem 0 .6rem;padding-bottom:.3rem;border-bottom:1px solid #f1f5f9;}
.sf-lbl:first-child{margin-top:0;}
.sec-btn{width:100%;background:linear-gradient(135deg,#ea580c,#c2410c);color:#fff;padding:12px;border:none;border-radius:8px;font-size:.95rem;font-weight:700;cursor:pointer;margin-top:.5rem;}
.sec-btn:hover{opacity:.9;}
.sec-result{background:#fff7ed;border:1.5px solid #fed7aa;border-radius:10px;padding:1.2rem;margin-top:1.2rem;}
.sr-primary{background:linear-gradient(135deg,#ea580c,#c2410c);border-radius:9px;padding:1.1rem;text-align:center;margin-bottom:.75rem;box-shadow:0 3px 12px rgba(234,88,12,.22);}
.sr-primary .pv{display:block;font-size:2.3rem;font-weight:900;color:#fff;line-height:1;}
.sr-primary .pl{font-size:.8rem;color:rgba(255,255,255,.85);}
.sr-grid{display:grid;grid-template-columns:1fr 1fr;gap:.55rem;margin-bottom:.75rem;}
.sr-box{background:#fff;border:1.5px solid #fed7aa;border-radius:8px;padding:.7rem;text-align:center;}
.sr-box .bv{display:block;font-size:1rem;font-weight:800;color:#ea580c;}.sr-box .bl{font-size:.68rem;color:#64748b;font-weight:600;}
.sr-lines{background:#fff;border:1px solid #fed7aa;border-radius:8px;padding:.75rem 1rem;}
.sr-line{display:flex;justify-content:space-between;padding:.28rem 0;border-bottom:1px solid #fff7ed;font-size:.83rem;}
.sr-line:last-child{border-bottom:none;font-weight:700;}
.sr-line .ll{color:#64748b;}.sr-line .lv{font-weight:600;color:#1e293b;}
.sr-line .lv.pos{color:#16a34a;}.sr-line .lv.neg{color:#dc2626;}
.sec-sidebar{display:flex;flex-direction:column;gap:1.1rem;}
.sec-widget{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 8px rgba(0,0,0,.04);overflow:hidden;}
.sec-widget-head{background:linear-gradient(135deg,#ea580c,#c2410c);color:#fff;padding:.85rem 1.2rem;font-size:.88rem;font-weight:700;}
.sec-widget-head small{display:block;font-size:.72rem;opacity:.8;margin-top:.1rem;}
.sec-widget-rows{padding:.3rem 0;}
.sec-widget-row{display:flex;justify-content:space-between;padding:.5rem 1.2rem;border-bottom:1px solid #f8fafc;}
.sec-widget-row:last-child{border-bottom:none;}
.swl{font-size:.81rem;font-weight:600;color:#334155;}.sws{font-size:.69rem;color:#94a3b8;}.swv{font-size:.88rem;font-weight:800;color:#ea580c;white-space:nowrap;}
.sec-links{background:#fff;border-radius:12px;border:1px solid #e2e8f0;overflow:hidden;}
.sec-links-head{padding:.75rem 1.2rem;background:#f8fafc;border-bottom:1px solid #f1f5f9;font-size:.75rem;font-weight:700;color:#ea580c;text-transform:uppercase;letter-spacing:.05em;}
.sec-links ul{list-style:none;padding:.4rem 0;margin:0;}
.sec-links ul li a{display:block;padding:.55rem 1.2rem;font-size:.82rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .15s;}
.sec-links ul li a:hover,.sec-links ul li a.active{color:#ea580c;background:#fff7ed;border-left-color:#ea580c;}
.sec-section{background:#fff;border-radius:13px;border:1px solid #e2e8f0;padding:1.75rem;margin-bottom:1.5rem;}
.sec-section h2{font-size:1.35rem;color:#0f172a;margin:0 0 .9rem;padding-bottom:.65rem;border-bottom:2px solid #fff7ed;}
.sec-section h3{font-size:1rem;color:#1e293b;margin:1.25rem 0 .5rem;}
.sec-section p{color:#475569;line-height:1.73;font-size:.95rem;margin-bottom:.9rem;}
.sec-section p:last-child{margin-bottom:0;}.sec-section a{color:#ea580c;font-weight:600;}.sec-section strong{color:#1e293b;}
.sec-section ul{color:#475569;padding-left:1.35rem;line-height:1.73;font-size:.95rem;margin-bottom:.9rem;}
.sec-section li{margin-bottom:.4rem;}
.sec-table{width:100%;border-collapse:collapse;border-radius:9px;overflow:hidden;border:1px solid #e2e8f0;margin-bottom:1.1rem;}
.sec-table th{background:#ea580c;color:#fff;padding:9px 13px;font-size:.83rem;font-weight:600;text-align:left;}
.sec-table td{padding:8px 13px;border-bottom:1px solid #f1f5f9;font-size:.86rem;color:#334155;}
.sec-table tr:last-child td{border-bottom:none;}.sec-table tr:nth-child(even) td{background:#f8fafc;}
.sec-faq-item{border-bottom:1px solid #f1f5f9;padding:.75rem 0;}
.sec-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.sec-faq-q{font-size:.93rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:.75rem;}
.sec-faq-q::after{content:'+';color:#ea580c;font-size:1.2rem;flex-shrink:0;}
.sec-faq-item.open .sec-faq-q::after{content:'−';}
.sec-faq-a{display:none;color:#475569;font-size:.89rem;line-height:1.66;padding-top:.45rem;}
.sec-faq-item.open .sec-faq-a{display:block;}
@media(max-width:900px){.sec-layout{grid-template-columns:1fr;}.sec-sidebar{display:grid;grid-template-columns:1fr 1fr;}}
@media(max-width:580px){.sf2{grid-template-columns:1fr;}.sec-sidebar{grid-template-columns:1fr;}.sec-hero h1{font-size:1.55rem;}}
</style>
<main id="main-content">
<div class="sec-wrap">
  <div class="sec-bc"><a href="/">Home</a> › <a href="/business/">Business</a> › <a href="/business/roi-calculator">ROI Calculator</a> › Amazon FBA ROI Calculator</div>
  <div class="sec-hero">
    <h1>Amazon FBA ROI Calculator 2026 USA — True Product Return on Investment</h1>
    <p>Amazon FBA ROI Calculator 2026 USA: calculate true net profit, ROI, ACOS, and margin on any Amazon FBA product — including all fees (referral, fulfillment, storage), PPC advertising spend, and inbound shipping. Used by Amazon sellers across the USA.</p>
  </div>
  <div class="sec-layout">
    <div>
      <div class="sec-card">
        <div class="sec-card-head">📦 Amazon FBA ROI Calculator</div>
        <div class="sec-body">
          <div class="sf-lbl">Revenue</div>
          <div class="sf2">
            <div class="sf"><label>Sale Price ($)</label><input type="number" id="a-price" value="29.99" min="0" step="0.01"></div>
            <div class="sf"><label>Units Sold / Month</label><input type="number" id="a-units" value="150" min="1" step="1"></div>
          </div>
          <div class="sf-lbl">Product Costs</div>
          <div class="sf2">
            <div class="sf"><label>Product Cost / Unit ($)</label><input type="number" id="a-cogs" value="6.50" min="0" step="0.01"><div class="hint">Manufacturing / wholesale cost</div></div>
            <div class="sf"><label>Inbound Shipping / Unit ($)</label><input type="number" id="a-ship-in" value="0.85" min="0" step="0.01"></div>
          </div>
          <div class="sf-lbl">Amazon Fees</div>
          <div class="sf2">
            <div class="sf"><label>Referral Fee (%)</label><input type="number" id="a-ref" value="15" min="6" max="20" step="0.5"><div class="hint">Typically 8–15% by category</div></div>
            <div class="sf"><label>FBA Fulfillment Fee ($)</label><input type="number" id="a-fba" value="4.50" min="0" step="0.05"><div class="hint">Avg small standard: $3–$5</div></div>
          </div>
          <div class="sf2">
            <div class="sf"><label>Monthly Storage Fee ($)</label><input type="number" id="a-storage" value="0.35" min="0" step="0.01"><div class="hint">Per unit in FBA warehouse</div></div>
            <div class="sf"><label>Monthly PPC Spend ($)</label><input type="number" id="a-ppc" value="450" min="0" step="10"></div>
          </div>
          <div class="sf2">
            <div class="sf"><label>Return Rate (%)</label><input type="number" id="a-returns" value="3" min="0" max="30" step="0.5"></div>
            <div class="sf"><label>Prep / Misc Fees ($)</label><input type="number" id="a-prep" value="0.25" min="0" step="0.05"></div>
          </div>
          <button class="sec-btn" onclick="calcAMZ()">⚡ Calculate Amazon FBA ROI</button>
          <div class="sec-result" id="amz-result" style="display:none;">
            <div class="sr-primary"><span class="pv" id="a-roi">0%</span><span class="pl">Amazon FBA ROI (on total investment)</span></div>
            <div class="sr-grid">
              <div class="sr-box"><span class="bv" id="a-net-unit">$0</span><span class="bl">Net Profit / Unit</span></div>
              <div class="sr-box"><span class="bv" id="a-margin">0%</span><span class="bl">Net Margin</span></div>
              <div class="sr-box"><span class="bv" id="a-mo-profit">$0</span><span class="bl">Monthly Net Profit</span></div>
              <div class="sr-box"><span class="bv" id="a-acos">0%</span><span class="bl">ACOS (PPC / Rev)</span></div>
            </div>
            <div class="sr-lines">
              <div class="sr-line"><span class="ll">Monthly Revenue</span><span class="lv pos" id="al-rev">—</span></div>
              <div class="sr-line"><span class="ll">Product + Shipping Cost</span><span class="lv neg" id="al-cogs">—</span></div>
              <div class="sr-line"><span class="ll">Amazon Referral Fee</span><span class="lv neg" id="al-ref">—</span></div>
              <div class="sr-line"><span class="ll">FBA Fulfillment Fee</span><span class="lv neg" id="al-fba">—</span></div>
              <div class="sr-line"><span class="ll">Storage + Prep Fees</span><span class="lv neg" id="al-stor">—</span></div>
              <div class="sr-line"><span class="ll">PPC Advertising</span><span class="lv neg" id="al-ppc">—</span></div>
              <div class="sr-line"><span class="ll">Returns Cost</span><span class="lv neg" id="al-ret">—</span></div>
              <div class="sr-line"><span class="ll">Monthly Net Profit</span><span class="lv pos" id="al-net">—</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="sec-section" style="margin-top:1.5rem;">
        <h2>Amazon FBA Fee Structure 2026</h2>
        <p>The most common mistake Amazon sellers make is calculating ROI on product cost only. You must include <strong>all</strong> cost components to get an accurate picture.</p>
        <table class="sec-table">
          <thead><tr><th>Fee Type</th><th>Typical Cost</th><th>How It's Calculated</th><th>Tips to Minimize</th></tr></thead>
          <tbody>
            <tr><td><strong>Referral Fee</strong></td><td>8–15%</td><td>% of gross sales price</td><td>Choose category carefully (some are 8%)</td></tr>
            <tr><td><strong>FBA Fulfillment</strong></td><td>$3.22–$6.50+</td><td>Per unit by weight/size tier</td><td>Optimize packaging to stay in standard size</td></tr>
            <tr><td><strong>Monthly Storage</strong></td><td>$0.87–$3.63/cu ft</td><td>Higher in Q4 ($3.63/cu ft Oct–Dec)</td><td>Keep IPI score above 400; avoid excess inventory</td></tr>
            <tr><td><strong>PPC Spend</strong></td><td>15–30% of sales</td><td>Auction-based CPC</td><td>Focus on high-converting long-tail keywords</td></tr>
            <tr><td><strong>Returns Processing</strong></td><td>Free–$2+/unit</td><td>Higher in apparel/shoes</td><td>Accurate sizing, quality product descriptions</td></tr>
            <tr><td><strong>Inbound Shipping</strong></td><td>$0.50–$1.50/lb</td><td>LTL or small parcel to FCs</td><td>Use Amazon Partnered Carrier program</td></tr>
          </tbody>
        </table>
        <h3>How to Calculate Amazon FBA Margin &amp; Breakeven ACOS</h3>
        <p>Your <strong>gross margin</strong> before advertising determines your <strong>breakeven ACOS</strong>. If your net profit before PPC is $10 on a $30 product, your margin is 33.3%. This means your ACOS must stay below 33.3% to remain profitable on PPC sales. Any ACOS above 33.3% means you are losing money on sponsored ad clicks.</p>
      </div>

      <div class="sec-section">
        <h3>Understanding Amazon FBA Fee Structures &amp; Advertising ACoS</h3>
        <p>Achieving profitable return on investment on Amazon requires tracking four distinct expense layers: cost of goods sold (COGS), inbound freight shipping, Amazon FBA fulfillment fees (including referral fee of 8% to 15% and pick-and-pack fees), and sponsored advertising spend.</p>
        <p>Maintaining a healthy Advertising Cost of Sales (ACoS) below your product profit margin is vital for sustainable scaling. Successful private-label sellers target a minimum 30% gross profit margin prior to advertising to absorb Q4 storage surcharges and return processing costs.</p>
      </div>
      <div class="sec-section">
        <h2>True Landed Cost Breakdown &amp; Inventory Velocity Rules</h2>
        <p>A fatal calculation error for Amazon FBA merchants is budgeting solely for unit manufacturing cost while ignoring international logistics and Amazon's specialized fulfillment surcharges:</p>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin:1.25rem 0;">
          <div style="background:#f8fafc;padding:1.15rem;border-radius:8px;border-left:4px solid #2563eb;">
            <strong style="color:#0f172a;display:block;margin-bottom:0.35rem;">True Landed Cost Formula</strong>
            <span style="font-size:0.88rem;color:#475569;line-height:1.55;display:block;">Landed Unit Cost = Factory FOB Price + Ocean/Air Freight Forwarding + US Customs Duties (HTS Tariffs) + Port Drayage + Inbound Placement Fees. Inbound freight frequently adds 20% to 40% on top of raw factory quotes.</span>
          </div>
          <div style="background:#f8fafc;padding:1.15rem;border-radius:8px;border-left:4px solid #ef4444;">
            <strong style="color:#0f172a;display:block;margin-bottom:0.35rem;">Aged Inventory Surcharges</strong>
            <span style="font-size:0.88rem;color:#475569;line-height:1.55;display:block;">Units remaining in Amazon fulfillment centers longer than 181 days incur steep monthly aged inventory surcharges, escalating sharply past 271 and 365 days, rapidly vaporizing net profit margins.</span>
          </div>
        </div>

        <h3>The Low-Inventory-Level Fee &amp; Stockout Penalty</h3>
        <p>Amazon enforces strict inventory health metrics. If historical inventory levels drop below 28 days of relative sales velocity, Amazon levies a <strong>low-inventory-level fee</strong> on each shipped unit. Conversely, completely running out of stock suppresses your organic keyword search ranking (BSR), necessitating aggressive PPC advertising spend to regain previous ranking velocity. Top sellers target a consistent 45 to 60 days of inventory supply.</p>
      </div>

      <div class="sec-section">
        <h2>Frequently Asked Questions</h2>
        <?php $faqs=[
          ['How do you calculate ROI on Amazon FBA?','Amazon FBA ROI = ((Monthly Revenue − All Monthly Costs) / Monthly Investment) × 100. All costs include product, Amazon referral fee, FBA fulfillment, storage, PPC, inbound shipping, and returns processing. Investment = inventory cost + PPC spend + launch costs.'],
          ['What is a good ROI for Amazon FBA?','Target 30–100%+ ROI on your product investment. On total invested capital (COGS + fees + PPC), 20–50%+ is solid. Below 15% ROI is too thin given Amazon competition risk, account suspension possibility, and inventory holding costs.'],
          ['What fees does Amazon charge FBA sellers?','Main fees: referral fee (8–15%), FBA fulfillment fee ($3–$7/unit), monthly storage ($0.87–$3.63/cu ft), and advertising cost. Additional fees: inbound shipping, prep fees, return processing, and long-term storage penalties if inventory sits over 365 days.'],
          ['What is ACOS in Amazon advertising?','ACOS = PPC Ad Spend / Ad Revenue × 100. Lower is better. Break-even ACOS = your gross margin %. If your margin is 35%, ACOS above 35% means advertising is unprofitable. Most profitable sellers run 15–30% ACOS on established products.'],
          ['What is TACoS and why is it more important than ACoS?','Total ACoS (TACoS) = Total Ad Spend / Total Overall Revenue (organic + PPC sales). While ACoS measures direct ad efficiency, TACoS reveals how paid campaigns fuel brand-wide organic ranking. A healthy TACoS is 8% to 15% on mature private-label ASINs.'],
          ['How does Amazon FBA Inbound Placement fee affect unit economics?','Amazon charges an inbound placement service fee per unit when sellers choose single-destination fulfillment center shipping. To avoid or minimize this fee, sellers can distribute inventory across multiple regional fulfillment centers via Amazon-optimized split shipments.'],
        ]; foreach($faqs as $f):?>
        <div class="sec-faq-item"><div class="sec-faq-q"><?php echo $f[0];?></div><div class="sec-faq-a"><?php echo $f[1];?></div></div>
        <?php endforeach;?>
      </div>
    </div>
    <div class="sec-sidebar">
      <div class="sec-widget">
        <div class="sec-widget-head">📦 Amazon FBA Benchmarks<small>2026 USA sellers</small></div>
        <div class="sec-widget-rows">
          <div class="sec-widget-row"><div><div class="swl">Target ROI on COGS</div><div class="sws">Minimum viable</div></div><div class="swv">30%+</div></div>
          <div class="sec-widget-row"><div><div class="swl">Good Net Margin</div><div class="sws">After all fees</div></div><div class="swv">20–35%</div></div>
          <div class="sec-widget-row"><div><div class="swl">Target ACOS</div><div class="sws">Sponsored Products</div></div><div class="swv">15–30%</div></div>
          <div class="sec-widget-row"><div><div class="swl">Avg Referral Fee</div><div class="sws">Most categories</div></div><div class="swv">15%</div></div>
          <div class="sec-widget-row"><div><div class="swl">FBA Fee (small std)</div><div class="sws">Per unit</div></div><div class="swv">$3.22+</div></div>
          <div class="sec-widget-row"><div><div class="swl">Good Gross Margin</div><div class="sws">Before ads &amp; fees</div></div><div class="swv">50–70%</div></div>
        </div>
      </div>
      <div class="sec-links">
        <div class="sec-links-head">🔗 Related Tools</div>
        <ul>
          <li><a href="/business/roi-calculator">📊 Full ROI Calculator</a></li>
          <li><a href="/business/amazon-roi-calculator" class="active">📦 Amazon FBA ROI</a></li>
          <li><a href="/business/marketing-roi-calculator">📣 Marketing ROI</a></li>
          <li><a href="/business/profit-margin-calculator">📈 Profit Margin</a></li>
          <li><a href="/business/markup-calculator">🏷️ Markup Calculator</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</main>
<script>
function fmtC(v){return (v<0?'−':'')+'$'+Math.abs(v).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g,',');}
function fmtCI(v){return (v<0?'−':'')+'$'+Math.round(Math.abs(v)).toLocaleString();}
function fmtP(v){return (v<0?'−':'')+Math.abs(v).toFixed(1)+'%';}
function calcAMZ(){
  var price=parseFloat(document.getElementById('a-price').value)||0;
  var units=parseInt(document.getElementById('a-units').value)||0;
  var cogs=parseFloat(document.getElementById('a-cogs').value)||0;
  var shipIn=parseFloat(document.getElementById('a-ship-in').value)||0;
  var refPct=parseFloat(document.getElementById('a-ref').value)||15;
  var fba=parseFloat(document.getElementById('a-fba').value)||0;
  var storage=parseFloat(document.getElementById('a-storage').value)||0;
  var ppc=parseFloat(document.getElementById('a-ppc').value)||0;
  var retPct=parseFloat(document.getElementById('a-returns').value)||0;
  var prep=parseFloat(document.getElementById('a-prep').value)||0;
  var revenue=price*units;
  var refFee=price*(refPct/100)*units;
  var fbaFee=fba*units;
  var storFee=storage*units;
  var prepFee=prep*units;
  var cogTotal=(cogs+shipIn)*units;
  var retCost=price*(retPct/100)*units*(cogs/price+0.1);
  var totalCost=cogTotal+refFee+fbaFee+storFee+prepFee+ppc+retCost;
  var netProfit=revenue-totalCost;
  var netPerUnit=units>0?netProfit/units:0;
  var margin=revenue>0?(netProfit/revenue)*100:0;
  var roi=cogTotal>0?(netProfit/cogTotal)*100:0;
  var acos=revenue>0?(ppc/revenue)*100:0;
  document.getElementById('a-roi').textContent=fmtP(roi);
  document.getElementById('a-net-unit').textContent=fmtC(netPerUnit);
  document.getElementById('a-margin').textContent=fmtP(margin);
  document.getElementById('a-mo-profit').textContent=fmtCI(netProfit);
  document.getElementById('a-acos').textContent=fmtP(acos);
  document.getElementById('al-rev').textContent=fmtCI(revenue);
  document.getElementById('al-cogs').textContent='−'+fmtCI(cogTotal);
  document.getElementById('al-ref').textContent='−'+fmtCI(refFee);
  document.getElementById('al-fba').textContent='−'+fmtCI(fbaFee);
  document.getElementById('al-stor').textContent='−'+fmtCI(storFee+prepFee);
  document.getElementById('al-ppc').textContent='−'+fmtCI(ppc);
  document.getElementById('al-ret').textContent='−'+fmtCI(retCost);
  document.getElementById('al-net').textContent=fmtCI(netProfit);
  document.getElementById('al-net').className='lv '+(netProfit>=0?'pos':'neg');
  document.getElementById('amz-result').style.display='block';
}
document.querySelectorAll('#a-price,#a-units,#a-cogs,#a-ship-in,#a-ref,#a-fba,#a-storage,#a-ppc,#a-returns,#a-prep').forEach(function(el){el.addEventListener('input',calcAMZ);});
calcAMZ();
document.querySelectorAll('.sec-faq-q').forEach(function(q){q.addEventListener('click',function(){var i=this.closest('.sec-faq-item'),w=i.classList.contains('open');document.querySelectorAll('.sec-faq-item').forEach(function(x){x.classList.remove('open');});if(!w)i.classList.add('open');});});
</script>
<?php require_once '../includes/footer.php'; ?>

