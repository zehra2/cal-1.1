<?php
$currentYear = date('Y');
$pageTitle       = "Real Estate ROI Calculator ($currentYear) | Free Tool";
$metaDescription = "Real Estate ROI Calculator 2026 USA — calculate return on investment for rental property, fix-and-flip, and commercial real estate. Includes cap rate, cash-on-cash, and total ROI. Free, no signup.";
$metaKeywords    = 'real estate roi calculator, roi calculator real estate, how to calculate roi in real estate, real estate return on investment calculator, commercial real estate roi calculator, investment property roi calculator, how to calculate roi on rental property';
$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'HowTo','name'=>'How to Calculate Commercial Real Estate Investment ROI','step'=>[
    ['@type'=>'HowToStep','name'=>'Enter total equity invested','text'=>'Input acquisition down payment, closing costs, and initial capital improvements.'],
    ['@type'=>'HowToStep','name'=>'Input Net Operating Income (NOI)','text'=>'Enter annual gross rental revenue minus property operating expenses, taxes, and insurance.'],
    ['@type'=>'HowToStep','name'=>'Deduct annual mortgage debt service','text'=>'Subtract annual principal and interest payments to determine annual levered cash flow.'],
    ['@type'=>'HowToStep','name'=>'Estimate property terminal exit value','text'=>'Provide anticipated sales price at exit after hold period minus selling costs and loan payoff.'],
    ['@type'=>'HowToStep','name'=>'Calculate Total ROI and IRR','text'=>'Review cumulative cash-on-cash returns, total profit, and overall annualized Return on Investment.']
  ]],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Business','item'=>'https://americacalculator.com/business/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'ROI Calculator','item'=>'https://americacalculator.com/business/roi-calculator'],
    ['@type'=>'ListItem','position'=>4,'name'=>'Real Estate ROI Calculator','item'=>'https://americacalculator.com/business/real-estate-roi-calculator'],
  ]],
  ['@type'=>'SoftwareApplication','name'=>'Real Estate ROI Calculator','applicationCategory'=>'FinanceApplication','operatingSystem'=>'All','url'=>'https://americacalculator.com/business/real-estate-roi-calculator','offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'How do you calculate ROI in real estate?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Real estate ROI = (Annual Net Income / Total Cash Invested) × 100 for cash-on-cash return. For total ROI including appreciation: (Total Profit / Total Cash Invested) × 100. Total profit = cumulative cash flow + appreciation gain − selling costs.']],
    ['@type'=>'Question','name'=>'What is a good ROI for rental property?','acceptedAnswer'=>['@type'=>'Answer','text'=>'A good cash-on-cash ROI for rental property is 8–12% in the current US market. Cleveland, OH and Memphis, TN often yield 10–14%. Coastal markets like NYC and San Francisco often produce negative cash-on-cash ROI but may offer appreciation upside.']],
    ['@type'=>'Question','name'=>'What is the difference between cap rate and ROI in real estate?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Cap rate = NOI / Property Value (unlevered, ignores financing). ROI = Net Profit / Cash Invested (considers your actual cash outlay and mortgage). A property can have a 6% cap rate but a 12% cash-on-cash ROI if well leveraged.']],
    ['@type'=>'Question','name'=>'How do you calculate ROI on a fix and flip?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Fix and flip ROI = (Sale Price − Purchase Price − Rehab Costs − Holding Costs − Selling Costs) / Total Cash Invested × 100. Holding costs include mortgage interest, taxes, insurance, and utilities during the renovation period.']],
  ]],
]];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f5f7fa;}
.sec-wrap{max-width:1100px;margin:0 auto;padding:2rem 1.25rem 4rem;}
.sec-bc{font-size:.79rem;color:#94a3b8;margin-bottom:.75rem;}
.sec-bc a{color:#64748b;text-decoration:none;}
.sec-bc a:hover{color:#16a34a;}
.sec-hero h1{font-size:1.9rem;color:#0f172a;margin:0 0 .45rem;line-height:1.25;}
.sec-hero p{font-size:.96rem;color:#64748b;line-height:1.68;margin:0 0 1.5rem;border-left:3px solid #16a34a;padding-left:.9rem;}
.sec-layout{display:grid;grid-template-columns:1fr 340px;gap:2rem;align-items:start;margin-bottom:2rem;}
/* Calc card */
.sec-card{background:#fff;border-radius:13px;border:1px solid #e2e8f0;box-shadow:0 3px 14px rgba(0,0,0,.06);overflow:hidden;}
.sec-card-head{background:linear-gradient(135deg,#16a34a,#15803d);color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;display:flex;align-items:center;gap:.6rem;}
.sec-body{padding:1.5rem;}
.sf{margin-bottom:.9rem;}
.sf label{display:block;font-size:.84rem;font-weight:600;color:#1e293b;margin-bottom:.32rem;}
.sf input{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.92rem;color:#0f172a;outline:none;box-sizing:border-box;transition:border-color .2s;}
.sf input:focus{border-color:#16a34a;}
.sf .hint{font-size:.72rem;color:#94a3b8;margin-top:.22rem;}
.sf2{display:grid;grid-template-columns:1fr 1fr;gap:.8rem;}
.sec-btn{width:100%;background:linear-gradient(135deg,#16a34a,#15803d);color:#fff;padding:12px;border:none;border-radius:8px;font-size:.95rem;font-weight:700;cursor:pointer;margin-top:.5rem;transition:opacity .2s;}
.sec-btn:hover{opacity:.9;}
/* Results */
.sec-result{background:#f0fdf4;border:1.5px solid #bbf7d0;border-radius:10px;padding:1.2rem;margin-top:1.2rem;}
.sr-primary{background:linear-gradient(135deg,#16a34a,#15803d);border-radius:9px;padding:1.1rem;text-align:center;margin-bottom:.75rem;box-shadow:0 3px 12px rgba(22,163,74,.22);}
.sr-primary .pv{display:block;font-size:2.3rem;font-weight:900;color:#fff;line-height:1;}
.sr-primary .pl{font-size:.8rem;color:rgba(255,255,255,.85);}
.sr-grid{display:grid;grid-template-columns:1fr 1fr;gap:.55rem;margin-bottom:.75rem;}
.sr-box{background:#fff;border:1.5px solid #bbf7d0;border-radius:8px;padding:.7rem;text-align:center;}
.sr-box .bv{display:block;font-size:1rem;font-weight:800;color:#16a34a;}
.sr-box .bl{font-size:.68rem;color:#64748b;font-weight:600;}
.sr-lines{background:#fff;border:1px solid #bbf7d0;border-radius:8px;padding:.75rem 1rem;}
.sr-line{display:flex;justify-content:space-between;padding:.28rem 0;border-bottom:1px solid #f0fdf4;font-size:.83rem;}
.sr-line:last-child{border-bottom:none;font-weight:700;}
.sr-line .ll{color:#64748b;}.sr-line .lv{font-weight:600;color:#1e293b;}
.sr-line .lv.pos{color:#16a34a;}.sr-line .lv.neg{color:#dc2626;}
/* Sidebar */
.sec-sidebar{display:flex;flex-direction:column;gap:1.1rem;}
.sec-widget{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 8px rgba(0,0,0,.04);overflow:hidden;}
.sec-widget-head{background:linear-gradient(135deg,#16a34a,#15803d);color:#fff;padding:.85rem 1.2rem;font-size:.88rem;font-weight:700;}
.sec-widget-head small{display:block;font-size:.72rem;opacity:.8;margin-top:.1rem;}
.sec-widget-rows{padding:.3rem 0;}
.sec-widget-row{display:flex;justify-content:space-between;padding:.5rem 1.2rem;border-bottom:1px solid #f8fafc;}
.sec-widget-row:last-child{border-bottom:none;}
.swl{font-size:.81rem;font-weight:600;color:#334155;}.sws{font-size:.69rem;color:#94a3b8;}
.swv{font-size:.88rem;font-weight:800;color:#16a34a;white-space:nowrap;}
.sec-links{background:#fff;border-radius:12px;border:1px solid #e2e8f0;overflow:hidden;}
.sec-links-head{padding:.75rem 1.2rem;background:#f8fafc;border-bottom:1px solid #f1f5f9;font-size:.75rem;font-weight:700;color:#16a34a;text-transform:uppercase;letter-spacing:.05em;}
.sec-links ul{list-style:none;padding:.4rem 0;margin:0;}
.sec-links ul li a{display:block;padding:.55rem 1.2rem;font-size:.82rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .15s;}
.sec-links ul li a:hover,.sec-links ul li a.active{color:#16a34a;background:#f0fdf4;border-left-color:#16a34a;}
/* Content */
.sec-section{background:#fff;border-radius:13px;border:1px solid #e2e8f0;padding:1.75rem;margin-bottom:1.5rem;}
.sec-section h2{font-size:1.35rem;color:#0f172a;margin:0 0 .9rem;padding-bottom:.65rem;border-bottom:2px solid #f0fdf4;}
.sec-section h3{font-size:1rem;color:#1e293b;margin:1.25rem 0 .5rem;}
.sec-section p{color:#475569;line-height:1.73;font-size:.95rem;margin-bottom:.9rem;}
.sec-section p:last-child{margin-bottom:0;}
.sec-section a{color:#16a34a;font-weight:600;}
.sec-section strong{color:#1e293b;}
.sec-section ul{color:#475569;padding-left:1.35rem;line-height:1.73;font-size:.95rem;margin-bottom:.9rem;}
.sec-section li{margin-bottom:.4rem;}
.sec-table{width:100%;border-collapse:collapse;border-radius:9px;overflow:hidden;border:1px solid #e2e8f0;margin-bottom:1.1rem;}
.sec-table th{background:#16a34a;color:#fff;padding:9px 13px;font-size:.83rem;font-weight:600;text-align:left;}
.sec-table td{padding:8px 13px;border-bottom:1px solid #f1f5f9;font-size:.86rem;color:#334155;}
.sec-table tr:last-child td{border-bottom:none;}
.sec-table tr:nth-child(even) td{background:#f8fafc;}
.sec-faq-item{border-bottom:1px solid #f1f5f9;padding:.75rem 0;}
.sec-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.sec-faq-q{font-size:.93rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:.75rem;}
.sec-faq-q::after{content:'+';color:#16a34a;font-size:1.2rem;flex-shrink:0;}
.sec-faq-item.open .sec-faq-q::after{content:'−';}
.sec-faq-a{display:none;color:#475569;font-size:.89rem;line-height:1.66;padding-top:.45rem;}
.sec-faq-item.open .sec-faq-a{display:block;}
@media(max-width:900px){.sec-layout{grid-template-columns:1fr;}.sec-sidebar{display:grid;grid-template-columns:1fr 1fr;}}
@media(max-width:580px){.sf2{grid-template-columns:1fr;}.sec-sidebar{grid-template-columns:1fr;}.sec-hero h1{font-size:1.55rem;}}
</style>
<main id="main-content">
<div class="sec-wrap">
  <div class="sec-bc"><a href="/">Home</a> › <a href="/business/">Business</a> › <a href="/business/roi-calculator">ROI Calculator</a> › Real Estate ROI Calculator</div>
  <div class="sec-hero">
    <h1>Real Estate ROI Calculator 2026 USA — Rental Property &amp; Investment Return</h1>
    <p>Real Estate ROI Calculator 2026 USA: calculate cash-on-cash return, total ROI with appreciation, and cap rate for rental properties, fix-and-flip projects, and commercial real estate across Texas, Ohio, Florida, California, and all 50 states.</p>
  </div>
  <div class="sec-layout">
    <div>
      <div class="sec-card">
        <div class="sec-card-head">🏠 Real Estate ROI Calculator</div>
        <div class="sec-body">
          <div class="sf2">
            <div class="sf"><label>Purchase Price ($)</label><input type="number" id="r-price" value="220000" min="0" step="1000"></div>
            <div class="sf"><label>Down Payment ($)</label><input type="number" id="r-down" value="44000" min="0" step="1000"></div>
          </div>
          <div class="sf2">
            <div class="sf"><label>Closing Costs ($)</label><input type="number" id="r-closing" value="4500" min="0" step="500"></div>
            <div class="sf"><label>Repairs / Rehab ($)</label><input type="number" id="r-repairs" value="5000" min="0" step="500"></div>
          </div>
          <div class="sf2">
            <div class="sf"><label>Monthly Gross Rent ($)</label><input type="number" id="r-rent" value="1750" min="0" step="50"></div>
            <div class="sf"><label>Monthly All-In Expenses ($)</label><input type="number" id="r-exp" value="1100" min="0" step="50"><div class="hint">Mortgage+tax+ins+mgmt+maintenance</div></div>
          </div>
          <div class="sf2">
            <div class="sf"><label>Annual Appreciation (%)</label><input type="number" id="r-appr" value="3.5" min="0" max="20" step="0.5"></div>
            <div class="sf"><label>Hold Period (Years)</label><input type="number" id="r-yrs" value="5" min="1" max="30" step="1"></div>
          </div>
          <div class="sf2">
            <div class="sf"><label>Selling Costs (%)</label><input type="number" id="r-sell" value="6" min="0" max="12" step="0.5"><div class="hint">Agent commissions ~6%</div></div>
            <div class="sf"><label>Annual Depreciation Tax Benefit ($)</label><input type="number" id="r-depr" value="0" min="0" step="100"><div class="hint">Optional — consult your CPA</div></div>
          </div>
          <button class="sec-btn" onclick="calcRE()">⚡ Calculate Real Estate ROI</button>
          <div class="sec-result" id="re-result" style="display:none;">
            <div class="sr-primary"><span class="pv" id="re-roi">0%</span><span class="pl">Total ROI (<?php echo $currentYear;?> 5-Year)</span></div>
            <div class="sr-grid">
              <div class="sr-box"><span class="bv" id="re-coc">0%</span><span class="bl">Cash-on-Cash ROI</span></div>
              <div class="sr-box"><span class="bv" id="re-ann">0%</span><span class="bl">Annualized ROI</span></div>
              <div class="sr-box"><span class="bv" id="re-cf-mo">$0</span><span class="bl">Monthly Cash Flow</span></div>
              <div class="sr-box"><span class="bv" id="re-cap">0%</span><span class="bl">Cap Rate</span></div>
            </div>
            <div class="sr-lines">
              <div class="sr-line"><span class="ll">Total Cash Invested</span><span class="lv" id="rl-cash">—</span></div>
              <div class="sr-line"><span class="ll">Annual Cash Flow</span><span class="lv pos" id="rl-acf">—</span></div>
              <div class="sr-line"><span class="ll">Total Cash Flow (<?php echo $currentYear;?>)</span><span class="lv pos" id="rl-tcf">—</span></div>
              <div class="sr-line"><span class="ll">Appreciation Gain</span><span class="lv pos" id="rl-appr">—</span></div>
              <div class="sr-line"><span class="ll">Selling Costs</span><span class="lv neg" id="rl-sell">—</span></div>
              <div class="sr-line"><span class="ll">Net Total Profit</span><span class="lv pos" id="rl-net">—</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="sec-section" style="margin-top:1.5rem;">
        <h2>How Real Estate ROI Works in 2026</h2>
        <p>Real estate ROI has two components. <strong>Cash-on-cash return</strong> measures your annual cash flow against your cash invested — the down payment, closing costs, and repairs. <strong>Total ROI</strong> adds the appreciation gain at sale minus selling costs.</p>
        <p>At 2026 mortgage rates (~7%), cash-on-cash ROI is negative in most coastal markets. The best cash flow is found in Ohio (Cleveland 10–14% CoC), Michigan (Detroit 8–13%), Memphis TN (8–12%), and Indianapolis IN (7–10%).</p>
        <h3>Real Estate ROI Formula</h3>
        <div style="background:#0f172a;color:#6ee7b7;font-family:monospace;padding:.9rem 1.1rem;border-radius:8px;font-size:.88rem;line-height:1.8;margin:.75rem 0;">
          Cash-on-Cash ROI = (Annual Cash Flow / Cash Invested) × 100<br>
          Total ROI = ((Cash Flow + Appreciation − Selling Costs) / Cash Invested) × 100
        </div>
        <table class="sec-table">
          <thead><tr><th>US Market</th><th>Avg Gross Yield</th><th>Est. Cash-on-Cash</th><th>Best For</th></tr></thead>
          <tbody>
            <tr><td>Cleveland, OH</td><td>11–14%</td><td>8–12%</td><td>Max cash flow</td></tr>
            <tr><td>Memphis, TN</td><td>9–12%</td><td>6–10%</td><td>Portfolio building</td></tr>
            <tr><td>Indianapolis, IN</td><td>7–9%</td><td>5–9%</td><td>Stable cash flow</td></tr>
            <tr><td>Detroit, MI</td><td>10–15%</td><td>7–12%</td><td>High yield, higher risk</td></tr>
            <tr><td>Austin, TX</td><td>4–6%</td><td>0–2%</td><td>Appreciation bet</td></tr>
            <tr><td>San Francisco, CA</td><td>2.5–3.5%</td><td>Negative</td><td>Appreciation only</td></tr>
          </tbody>
        </table>
      </div>
      <div class="sec-section">
        <h2>The Four Wealth Drivers of Real Estate ROI</h2>
        <p>Unlike stocks or fixed-income bonds that only produce dividends or price appreciation, residential and commercial real estate returns are composed of four simultaneous engines:</p>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin:1rem 0;">
          <div style="background:#f8fafc;padding:1rem;border-radius:8px;border:1px solid #e2e8f0;">
            <strong style="color:#0f172a;display:block;margin-bottom:0.25rem;">1. Cash Flow</strong>
            <span style="font-size:0.88rem;color:#475569;line-height:1.5;display:block;">Net operating income remaining after mortgage principal, interest, taxes, insurance, and operating reserves have been paid.</span>
          </div>
          <div style="background:#f8fafc;padding:1rem;border-radius:8px;border:1px solid #e2e8f0;">
            <strong style="color:#0f172a;display:block;margin-bottom:0.25rem;">2. Principal Amortization</strong>
            <span style="font-size:0.88rem;color:#475569;line-height:1.5;display:block;">Every monthly rent payment pays down your mortgage debt balance, steadily converting lender debt into owner equity.</span>
          </div>
          <div style="background:#f8fafc;padding:1rem;border-radius:8px;border:1px solid #e2e8f0;">
            <strong style="color:#0f172a;display:block;margin-bottom:0.25rem;">3. Tax Shelters &amp; Depreciation</strong>
            <span style="font-size:0.88rem;color:#475569;line-height:1.5;display:block;">IRS Section 168 allows 27.5-year straight-line residential building depreciation, which legally offsets taxable rental income.</span>
          </div>
          <div style="background:#f8fafc;padding:1rem;border-radius:8px;border:1px solid #e2e8f0;">
            <strong style="color:#0f172a;display:block;margin-bottom:0.25rem;">4. Long-Term Appreciation</strong>
            <span style="font-size:0.88rem;color:#475569;line-height:1.5;display:block;">Historically tracking 3.5% to 5% annually, compounding on the entire asset value rather than just your cash down payment.</span>
          </div>
        </div>

        <h3>The Leverage Multiplier Effect</h3>
        <p>When purchasing a $300,000 property with 20% down ($60,000 equity), a 4% appreciation year generates $12,000 in gross asset gain. Relative to your $60,000 initial equity, that single year's appreciation alone equals a 20% return on invested capital before rental net income. However, leverage also amplifies downside risk during vacancy spells or declining market cycles.</p>

        <h3>Budgeting for CapEx vs Routine Maintenance</h3>
        <p>A fatal mistake in real estate ROI forecasting is confusing routine maintenance (plumbing unclogs, touch-up paint) with capital expenditures (CapEx). Big-ticket components have finite lifespans: roofs (20–25 years), HVAC condensers (12–15 years), and water heaters (8–10 years). Prudent real estate investors reserve 8% to 12% of gross monthly rental income strictly in a dedicated CapEx escrow account.</p>
      </div>

      <div class="sec-section">
        <h2>Frequently Asked Questions</h2>
        <?php $faqs=[
          ['How do you calculate ROI in real estate?','Real estate ROI = (Net Profit / Cash Invested) × 100. Net profit = cumulative cash flow + appreciation gain − selling costs. Cash invested = down payment + closing costs + upfront repairs.'],
          ['What is a good ROI for rental property?','8–12% cash-on-cash is considered good in the current market. Cleveland, Memphis, and Indianapolis regularly achieve this. Coastal markets often produce negative CoC ROI but may appreciate faster.'],
          ['What is the difference between cap rate and ROI?','Cap rate is NOI / Property Value — an unlevered metric that ignores financing. ROI measures actual cash return vs your cash invested. Same property, same cap rate, different ROI depending on how much you borrowed.'],
          ['How do you calculate fix and flip ROI?','Flip ROI = (Sale Price − Purchase − Rehab − Holding Costs − Selling Costs) / Total Cash Invested × 100. Target 15–30%+ ROI per flip to account for risk and time.'],
          ['How does tax depreciation affect real estate ROI?','Residential rental structures depreciate over 27.5 years (excluding land value). For example, a $275,000 building provides a $10,000 annual paper deduction. This paper loss shields rental cash distributions from federal income tax, dramatically increasing after-tax ROI compared to equivalent dividend yields.'],
          ['What is Internal Rate of Return (IRR) in real estate?','IRR is the annualized effective compound return rate that sets the Net Present Value (NPV) of all property cash flows (annual rents plus net sale proceeds at disposition) equal to zero. It is the gold-standard metric for comparing real estate performance against equities over a 5 to 10-year holding period.'],
        ]; foreach($faqs as $f):?>
        <div class="sec-faq-item"><div class="sec-faq-q"><?php echo $f[0];?></div><div class="sec-faq-a"><?php echo $f[1];?></div></div>
        <?php endforeach;?>
      </div>
    </div>
    <div class="sec-sidebar">
      <div class="sec-widget">
        <div class="sec-widget-head">🏠 2026 US Real Estate ROI<small>Cash-on-cash benchmarks</small></div>
        <div class="sec-widget-rows">
          <div class="sec-widget-row"><div><div class="swl">Cleveland, OH</div><div class="sws">Max cash flow market</div></div><div class="swv">8–12%</div></div>
          <div class="sec-widget-row"><div><div class="swl">Memphis, TN</div><div class="sws">Portfolio builder</div></div><div class="swv">6–10%</div></div>
          <div class="sec-widget-row"><div><div class="swl">Indianapolis, IN</div><div class="sws">Stable cash flow</div></div><div class="swv">5–9%</div></div>
          <div class="sec-widget-row"><div><div class="swl">Cincinnati, OH</div><div class="sws">High demand rental</div></div><div class="swv">6–10%</div></div>
          <div class="sec-widget-row"><div><div class="swl">Austin, TX</div><div class="sws">Appreciation market</div></div><div class="swv">0–2%</div></div>
          <div class="sec-widget-row"><div><div class="swl">NYC / LA / SF</div><div class="sws">Appreciation dominant</div></div><div class="swv">Negative</div></div>
        </div>
      </div>
      <div class="sec-links">
        <div class="sec-links-head">🔗 Related Tools</div>
        <ul>
          <li><a href="/business/roi-calculator">📊 Full ROI Calculator</a></li>
          <li><a href="/business/real-estate-roi-calculator" class="active">🏠 Real Estate ROI</a></li>
          <li><a href="/business/rental-property-roi-calculator">🏘️ Rental Property ROI</a></li>
          <li><a href="/real-estate/cap-rate-calculator">📊 Cap Rate Calculator</a></li>
          <li><a href="/real-estate/cash-on-cash-return-calculator">💵 Cash-on-Cash Return</a></li>
          <li><a href="/real-estate/rental-yield-calculator">🏠 Rental Yield</a></li>
          <li><a href="/real-estate/dscr-calculator">📋 DSCR Calculator</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</main>
<script>
function fmtC(v){return (v<0?'−':'')+'$'+Math.round(Math.abs(v)).toLocaleString();}
function fmtP(v){return (v<0?'−':'')+Math.abs(v).toFixed(2)+'%';}
function calcRE(){
  var price=parseFloat(document.getElementById('r-price').value)||0;
  var down=parseFloat(document.getElementById('r-down').value)||0;
  var closing=parseFloat(document.getElementById('r-closing').value)||0;
  var repairs=parseFloat(document.getElementById('r-repairs').value)||0;
  var rent=parseFloat(document.getElementById('r-rent').value)||0;
  var exp=parseFloat(document.getElementById('r-exp').value)||0;
  var appr=parseFloat(document.getElementById('r-appr').value)||0;
  var yrs=parseInt(document.getElementById('r-yrs').value)||1;
  var sellPct=(parseFloat(document.getElementById('r-sell').value)||6)/100;
  var cashIn=down+closing+repairs;
  var mooCF=rent-exp, annCF=mooCF*12, totalCF=annCF*yrs;
  var salePrice=price*Math.pow(1+appr/100,yrs);
  var apprGain=salePrice-price;
  var sellCost=salePrice*sellPct;
  var net=totalCF+apprGain-sellCost;
  var roi=cashIn>0?(net/cashIn)*100:0;
  var coc=cashIn>0?(annCF/cashIn)*100:0;
  var ann=yrs>0?(Math.pow(1+roi/100,1/yrs)-1)*100:roi;
  var noi=(rent-exp)*12; // simplified NOI
  var cap=price>0?(noi/price)*100:0;
  document.getElementById('re-roi').textContent=fmtP(roi);
  document.getElementById('re-coc').textContent=fmtP(coc);
  document.getElementById('re-ann').textContent=fmtP(ann);
  document.getElementById('re-cf-mo').textContent=fmtC(mooCF);
  document.getElementById('re-cap').textContent=fmtP(cap);
  document.getElementById('rl-cash').textContent=fmtC(cashIn);
  document.getElementById('rl-acf').textContent=fmtC(annCF);
  document.getElementById('rl-tcf').textContent=fmtC(totalCF);
  document.getElementById('rl-appr').textContent=fmtC(apprGain);
  document.getElementById('rl-sell').textContent='−'+fmtC(sellCost).replace('−','').replace('$','$');
  document.getElementById('rl-net').textContent=fmtC(net);
  document.getElementById('re-result').style.display='block';
}
document.querySelectorAll('#r-price,#r-down,#r-closing,#r-repairs,#r-rent,#r-exp,#r-appr,#r-yrs,#r-sell,#r-depr').forEach(function(el){el.addEventListener('input',calcRE);});
calcRE();
document.querySelectorAll('.sec-faq-q').forEach(function(q){q.addEventListener('click',function(){var i=this.closest('.sec-faq-item'),w=i.classList.contains('open');document.querySelectorAll('.sec-faq-item').forEach(function(x){x.classList.remove('open');});if(!w)i.classList.add('open');});});
</script>
<?php require_once '../includes/footer.php'; ?>
