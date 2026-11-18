<?php
$currentYear = date('Y');
$pageTitle       = "Rental Property ROI Calculator ($currentYear) | Free Tool";
$metaDescription = "Free Rental Property ROI Calculator 2026 USA — calculate cash-on-cash return, net yield, annual cash flow, and total ROI on any US rental property. Ohio, Texas, Florida & all 50 states.";
$metaKeywords    = 'rental property roi calculator, roi calculator rental property, how to calculate roi on rental property, roi on rental property calculator, how to calculate rental property roi, roi for rental property calculator, rent roi calculator, vacation rental roi calculator';
$schemaData=['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'HowTo','name'=>'How to Calculate Rental Property ROI and Wealth Growth','step'=>[
    ['@type'=>'HowToStep','name'=>'Enter total out-of-pocket investment','text'=>'Input cash down payment, lender points, title fees, and upfront renovation costs.'],
    ['@type'=>'HowToStep','name'=>'Enter annual cash flow after financing','text'=>'Provide net annual cash remaining after all operational expenses and mortgage payments.'],
    ['@type'=>'HowToStep','name'=>'Calculate mortgage principal paydown','text'=>'Account for loan amortization and equity build-up during the holding period.'],
    ['@type'=>'HowToStep','name'=>'Add property appreciation gains','text'=>'Compute total equity gained from real estate market appreciation over time.'],
    ['@type'=>'HowToStep','name'=>'Calculate Total ROI and Annualized Return','text'=>'View combined return on cash invested from cash flow, amortization, and appreciation.']
  ]],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Business','item'=>'https://americacalculator.com/business/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'ROI Calculator','item'=>'https://americacalculator.com/business/roi-calculator'],
    ['@type'=>'ListItem','position'=>4,'name'=>'Rental Property ROI Calculator','item'=>'https://americacalculator.com/business/rental-property-roi-calculator'],
  ]],
  ['@type'=>'SoftwareApplication','name'=>'Rental Property ROI Calculator','applicationCategory'=>'FinanceApplication','operatingSystem'=>'All','url'=>'https://americacalculator.com/business/rental-property-roi-calculator','offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'How do you calculate ROI on a rental property?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Rental Property ROI = (Annual Net Cash Flow / Total Cash Invested) × 100. Annual net cash flow = gross rent − vacancy loss − property tax − insurance − maintenance − management fees − mortgage P+I. Total cash invested = down payment + closing costs + upfront repairs.']],
    ['@type'=>'Question','name'=>'What is cash-on-cash return for rental property?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Cash-on-cash return = Annual pre-tax cash flow / Total cash invested × 100. It measures how much cash income you earn relative to the cash you put in. A 10% cash-on-cash return on a $50,000 cash investment means $5,000 annual cash flow.']],
    ['@type'=>'Question','name'=>'What is a good ROI on a rental property in 2026?','acceptedAnswer'=>['@type'=>'Answer','text'=>'8–12% cash-on-cash ROI is considered good in 2026. Top markets: Cleveland OH (9–14%), Memphis TN (7–12%), Cincinnati OH (8–12%), Indianapolis IN (6–10%). Coastal markets like NYC and LA often produce negative cash-on-cash ROI at current mortgage rates.']],
    ['@type'=>'Question','name'=>'How do I calculate ROI on a rental property with a mortgage?','acceptedAnswer'=>['@type'=>'Answer','text'=>'With a mortgage, use cash-on-cash return: Annual Cash Flow (after mortgage P+I payments) / Cash Invested (down payment + closing + repairs) × 100. This is lower than unlevered yield but reflects your actual return on the cash you personally invested.']],
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
.sec-hero p{font-size:.96rem;color:#64748b;line-height:1.68;margin:0 0 1.5rem;border-left:3px solid #0891b2;padding-left:.9rem;}
.sec-layout{display:grid;grid-template-columns:1fr 310px;gap:2rem;align-items:start;margin-bottom:2rem;}
.sec-card{background:#fff;border-radius:13px;border:1px solid #e2e8f0;box-shadow:0 3px 14px rgba(0,0,0,.06);overflow:hidden;}
.sec-card-head{background:linear-gradient(135deg,#0891b2,#0e7490);color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;}
.sec-body{padding:1.5rem;}
.sf{margin-bottom:.9rem;}.sf label{display:block;font-size:.84rem;font-weight:600;color:#1e293b;margin-bottom:.32rem;}
.sf input,.sf select{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.92rem;color:#0f172a;outline:none;box-sizing:border-box;transition:border-color .2s;background:#fff;}
.sf input:focus,.sf select:focus{border-color:#0891b2;}.sf .hint{font-size:.72rem;color:#94a3b8;margin-top:.22rem;}
.sf2{display:grid;grid-template-columns:1fr 1fr;gap:.8rem;}
.sf-lbl{font-size:.7rem;font-weight:800;text-transform:uppercase;letter-spacing:.06em;color:#94a3b8;margin:1.1rem 0 .6rem;padding-bottom:.3rem;border-bottom:1px solid #f1f5f9;}
.sf-lbl:first-child{margin-top:0;}
.sec-btn{width:100%;background:linear-gradient(135deg,#0891b2,#0e7490);color:#fff;padding:12px;border:none;border-radius:8px;font-size:.95rem;font-weight:700;cursor:pointer;margin-top:.5rem;}
.sec-btn:hover{opacity:.9;}
.sec-result{background:#ecfeff;border:1.5px solid #a5f3fc;border-radius:10px;padding:1.2rem;margin-top:1.2rem;}
.sr-primary{background:linear-gradient(135deg,#0891b2,#0e7490);border-radius:9px;padding:1.1rem;text-align:center;margin-bottom:.75rem;box-shadow:0 3px 12px rgba(8,145,178,.22);}
.sr-primary .pv{display:block;font-size:2.3rem;font-weight:900;color:#fff;line-height:1;}
.sr-primary .pl{font-size:.8rem;color:rgba(255,255,255,.85);}
.sr-grid{display:grid;grid-template-columns:1fr 1fr;gap:.55rem;margin-bottom:.75rem;}
.sr-box{background:#fff;border:1.5px solid #a5f3fc;border-radius:8px;padding:.7rem;text-align:center;}
.sr-box .bv{display:block;font-size:1rem;font-weight:800;color:#0891b2;}.sr-box .bl{font-size:.68rem;color:#64748b;font-weight:600;}
.sr-lines{background:#fff;border:1px solid #a5f3fc;border-radius:8px;padding:.75rem 1rem;}
.sr-line{display:flex;justify-content:space-between;padding:.28rem 0;border-bottom:1px solid #ecfeff;font-size:.83rem;}
.sr-line:last-child{border-bottom:none;font-weight:700;}
.sr-line .ll{color:#64748b;}.sr-line .lv{font-weight:600;color:#1e293b;}
.sr-line .lv.pos{color:#16a34a;}.sr-line .lv.neg{color:#dc2626;}
.sec-sidebar{display:flex;flex-direction:column;gap:1.1rem;}
.sec-widget{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 8px rgba(0,0,0,.04);overflow:hidden;}
.sec-widget-head{background:linear-gradient(135deg,#0891b2,#0e7490);color:#fff;padding:.85rem 1.2rem;font-size:.88rem;font-weight:700;}
.sec-widget-head small{display:block;font-size:.72rem;opacity:.8;margin-top:.1rem;}
.sec-widget-rows{padding:.3rem 0;}
.sec-widget-row{display:flex;justify-content:space-between;padding:.5rem 1.2rem;border-bottom:1px solid #f8fafc;}
.sec-widget-row:last-child{border-bottom:none;}
.swl{font-size:.81rem;font-weight:600;color:#334155;}.sws{font-size:.69rem;color:#94a3b8;}.swv{font-size:.88rem;font-weight:800;color:#0891b2;white-space:nowrap;}
.sec-links{background:#fff;border-radius:12px;border:1px solid #e2e8f0;overflow:hidden;}
.sec-links-head{padding:.75rem 1.2rem;background:#f8fafc;border-bottom:1px solid #f1f5f9;font-size:.75rem;font-weight:700;color:#0891b2;text-transform:uppercase;letter-spacing:.05em;}
.sec-links ul{list-style:none;padding:.4rem 0;margin:0;}
.sec-links ul li a{display:block;padding:.55rem 1.2rem;font-size:.82rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .15s;}
.sec-links ul li a:hover,.sec-links ul li a.active{color:#0891b2;background:#ecfeff;border-left-color:#0891b2;}
.sec-section{background:#fff;border-radius:13px;border:1px solid #e2e8f0;padding:1.75rem;margin-bottom:1.5rem;}
.sec-section h2{font-size:1.35rem;color:#0f172a;margin:0 0 .9rem;padding-bottom:.65rem;border-bottom:2px solid #ecfeff;}
.sec-section h3{font-size:1rem;color:#1e293b;margin:1.25rem 0 .5rem;}
.sec-section p{color:#475569;line-height:1.73;font-size:.95rem;margin-bottom:.9rem;}
.sec-section p:last-child{margin-bottom:0;}.sec-section a{color:#0891b2;font-weight:600;}.sec-section strong{color:#1e293b;}
.sec-section ul{color:#475569;padding-left:1.35rem;line-height:1.73;font-size:.95rem;margin-bottom:.9rem;}
.sec-section li{margin-bottom:.4rem;}
.sec-table{width:100%;border-collapse:collapse;border-radius:9px;overflow:hidden;border:1px solid #e2e8f0;margin-bottom:1.1rem;}
.sec-table th{background:#0891b2;color:#fff;padding:9px 13px;font-size:.83rem;font-weight:600;text-align:left;}
.sec-table td{padding:8px 13px;border-bottom:1px solid #f1f5f9;font-size:.86rem;color:#334155;}
.sec-table tr:last-child td{border-bottom:none;}.sec-table tr:nth-child(even) td{background:#f8fafc;}
.sec-faq-item{border-bottom:1px solid #f1f5f9;padding:.75rem 0;}
.sec-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.sec-faq-q{font-size:.93rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:.75rem;}
.sec-faq-q::after{content:'+';color:#0891b2;font-size:1.2rem;flex-shrink:0;}
.sec-faq-item.open .sec-faq-q::after{content:'−';}
.sec-faq-a{display:none;color:#475569;font-size:.89rem;line-height:1.66;padding-top:.45rem;}
.sec-faq-item.open .sec-faq-a{display:block;}
@media(max-width:900px){.sec-layout{grid-template-columns:1fr;}.sec-sidebar{display:grid;grid-template-columns:1fr 1fr;}}
@media(max-width:580px){.sf2{grid-template-columns:1fr;}.sec-sidebar{grid-template-columns:1fr;}.sec-hero h1{font-size:1.55rem;}}
</style>
<main id="main-content">
<div class="sec-wrap">
  <div class="sec-bc"><a href="/">Home</a> › <a href="/business/">Business</a> › <a href="/business/roi-calculator">ROI Calculator</a> › Rental Property ROI Calculator</div>
  <div class="sec-hero">
    <h1>Rental Property ROI Calculator 2026 USA — Cash-on-Cash Return &amp; Net Yield</h1>
    <p>Rental Property ROI Calculator 2026 USA: calculate cash-on-cash return, net yield, monthly cash flow, cap rate, and total ROI for any US rental property. Includes vacancy, management fees, maintenance, and mortgage. Ohio, Texas, Florida, Michigan, and all 50 states.</p>
  </div>
  <div class="sec-layout">
    <div>
      <div class="sec-card">
        <div class="sec-card-head">🏘️ Rental Property ROI Calculator</div>
        <div class="sec-body">
          <div class="sf-lbl">Purchase &amp; Financing</div>
          <div class="sf2">
            <div class="sf"><label>Purchase Price ($)</label><input type="number" id="rp-price" value="180000" min="0" step="1000"></div>
            <div class="sf"><label>Down Payment ($)</label><input type="number" id="rp-down" value="36000" min="0" step="1000"></div>
          </div>
          <div class="sf2">
            <div class="sf"><label>Closing Costs ($)</label><input type="number" id="rp-closing" value="3500" min="0" step="500"></div>
            <div class="sf"><label>Upfront Repairs ($)</label><input type="number" id="rp-repairs" value="5000" min="0" step="500"></div>
          </div>
          <div class="sf2">
            <div class="sf"><label>Mortgage Rate (%)</label><input type="number" id="rp-rate" value="7.0" min="0" max="20" step="0.05"></div>
            <div class="sf"><label>Loan Term (Years)</label>
              <select id="rp-term">
                <option value="30" selected>30 Years</option>
                <option value="20">20 Years</option>
                <option value="15">15 Years</option>
              </select>
            </div>
          </div>
          <div class="sf-lbl">Rental Income</div>
          <div class="sf2">
            <div class="sf"><label>Monthly Gross Rent ($)</label><input type="number" id="rp-rent" value="1500" min="0" step="50"></div>
            <div class="sf"><label>Vacancy Rate (%)</label><input type="number" id="rp-vac" value="5" min="0" max="30" step="1"></div>
          </div>
          <div class="sf-lbl">Annual Operating Expenses</div>
          <div class="sf2">
            <div class="sf"><label>Property Tax ($)</label><input type="number" id="rp-tax" value="2400" min="0" step="100"></div>
            <div class="sf"><label>Insurance ($)</label><input type="number" id="rp-ins" value="1000" min="0" step="100"></div>
          </div>
          <div class="sf2">
            <div class="sf"><label>Maintenance ($)</label><input type="number" id="rp-maint" value="1800" min="0" step="100"><div class="hint">~1% of value/yr</div></div>
            <div class="sf"><label>Management Fee (%)</label><input type="number" id="rp-mgmt" value="10" min="0" max="20" step="0.5"></div>
          </div>
          <div class="sf2">
            <div class="sf"><label>HOA / Other ($/yr)</label><input type="number" id="rp-hoa" value="0" min="0" step="100"></div>
            <div class="sf"><label>Annual Appreciation (%)</label><input type="number" id="rp-appr" value="3.0" min="0" max="15" step="0.5"></div>
          </div>
          <button class="sec-btn" onclick="calcRP()">⚡ Calculate Rental Property ROI</button>
          <div class="sec-result" id="rp-result" style="display:none;">
            <div class="sr-primary"><span class="pv" id="rp-coc">0.00%</span><span class="pl">Cash-on-Cash ROI (Annual)</span></div>
            <div class="sr-grid">
              <div class="sr-box"><span class="bv" id="rp-mo-cf">$0</span><span class="bl">Monthly Cash Flow</span></div>
              <div class="sr-box"><span class="bv" id="rp-cap">0%</span><span class="bl">Cap Rate</span></div>
              <div class="sr-box"><span class="bv" id="rp-yield">0%</span><span class="bl">Gross Yield</span></div>
              <div class="sr-box"><span class="bv" id="rp-pi">$0</span><span class="bl">Monthly P+I</span></div>
            </div>
            <div class="sr-lines">
              <div class="sr-line"><span class="ll">Total Cash Invested</span><span class="lv" id="rl-cash">—</span></div>
              <div class="sr-line"><span class="ll">Gross Annual Rent</span><span class="lv pos" id="rl-gross">—</span></div>
              <div class="sr-line"><span class="ll">Vacancy Loss</span><span class="lv neg" id="rl-vac">—</span></div>
              <div class="sr-line"><span class="ll">Annual Mortgage P+I</span><span class="lv neg" id="rl-mort">—</span></div>
              <div class="sr-line"><span class="ll">Annual Expenses</span><span class="lv neg" id="rl-exp">—</span></div>
              <div class="sr-line"><span class="ll">Annual Net Cash Flow</span><span class="lv" id="rl-net">—</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="sec-section" style="margin-top:1.5rem;">
        <h2>Rental Property ROI by US Market (2026)</h2>
        <p>Cash-on-cash ROI depends heavily on location. These estimates assume 20% down, 7.0% mortgage rate, standard expense ratios, and 5% vacancy.</p>
        <table class="sec-table">
          <thead><tr><th>Market</th><th>Median Price</th><th>Avg Monthly Rent</th><th>Gross Yield</th><th>Est. Cash-on-Cash ROI</th></tr></thead>
          <tbody>
            <tr><td><strong>Cleveland, OH</strong></td><td>~$95K</td><td>~$895/mo</td><td>11.3%</td><td style="color:#16a34a;font-weight:700;">9–14%</td></tr>
            <tr><td><strong>Cincinnati, OH</strong></td><td>~$240K</td><td>~$1,800/mo</td><td>9.0%</td><td style="color:#16a34a;font-weight:700;">6–10%</td></tr>
            <tr><td><strong>Memphis, TN</strong></td><td>~$175K</td><td>~$1,200/mo</td><td>8.2%</td><td style="color:#16a34a;font-weight:700;">5–9%</td></tr>
            <tr><td><strong>Detroit, MI</strong></td><td>~$80K</td><td>~$900/mo</td><td>13.5%</td><td style="color:#22c55e;font-weight:700;">8–13%</td></tr>
            <tr><td><strong>Indianapolis, IN</strong></td><td>~$275K</td><td>~$1,500/mo</td><td>6.5%</td><td style="color:#22c55e;font-weight:700;">4–8%</td></tr>
            <tr><td><strong>Houston, TX</strong></td><td>~$330K</td><td>~$1,800/mo</td><td>6.5%</td><td style="color:#eab308;font-weight:700;">2–5%</td></tr>
            <tr><td><strong>Austin, TX</strong></td><td>~$500K</td><td>~$2,100/mo</td><td>5.0%</td><td style="color:#f97316;font-weight:700;">0–2%</td></tr>
            <tr><td><strong>Miami, FL</strong></td><td>~$550K</td><td>~$2,400/mo</td><td>5.2%</td><td style="color:#f97316;font-weight:700;">0–2%</td></tr>
            <tr><td><strong>New York City, NY</strong></td><td>~$750K+</td><td>~$2,800/mo</td><td>4.5%</td><td style="color:#dc2626;font-weight:700;">Negative</td></tr>
          </tbody>
        </table>
        <h3>The 1% Rule for Rental Property</h3>
        <p>The 1% rule states monthly rent should equal at least 1% of purchase price. A $150,000 property needs $1,500/month rent. In 2026 at 7%+ mortgage rates, you generally need 1.1–1.3% monthly rent-to-price to produce positive cash-on-cash ROI. This is achievable in Ohio, Michigan, Tennessee, and Alabama markets — but nearly impossible in coastal cities.</p>
      </div>

      <div class="sec-section">
        <h2>Operating Expense Breakdown: The 50% Rule Explained</h2>
        <p>A standard benchmark utilized by commercial underwriters and private real estate investors is the <strong>50% Expense Rule</strong>. This rule states that approximately 50% of your gross rental income will be absorbed by non-mortgage operating expenses over the lifespan of the property.</p>

        <table class="sec-table">
          <thead><tr><th>Expense Category</th><th>Typical % of Gross Rent</th><th>What It Covers</th></tr></thead>
          <tbody>
            <tr><td><strong>Property Management</strong></td><td>8% – 10%</td><td>Tenant screening, rent collection, lease enforcement, eviction handling</td></tr>
            <tr><td><strong>Maintenance &amp; Repairs</strong></td><td>5% – 10%</td><td>Plumbing, electrical calls, turnover repainting, hardware replacements</td></tr>
            <tr><td><strong>CapEx Reserves</strong></td><td>5% – 10%</td><td>Long-term capital items: roof, HVAC replacement, water heaters, asphalt</td></tr>
            <tr><td><strong>Vacancy Allowance</strong></td><td>5% – 8%</td><td>Anticipated tenant churn, marketing intervals, turnover cleaning time</td></tr>
            <tr><td><strong>Property Taxes &amp; Insurance</strong></td><td>10% – 20%</td><td>County assessment ad valorem taxes, landlord hazard &amp; liability insurance</td></tr>
          </tbody>
        </table>

        <h3>Maximizing Rental ROI Through Tax Strategy</h3>
        <p>Rental property remains one of the most tax-advantaged asset classes in the United States under the Internal Revenue Code. Key tax provisions that dramatically increase your real after-tax yield include:</p>
        <ul style="color:#334155;line-height:1.7;margin-left:1.25rem;">
          <li><strong>Non-Cash Depreciation:</strong> Write off 3.636% of the building value each year for 27.5 years (IRS MACRS straight-line method).</li>
          <li><strong>Section 199A QBI Deduction:</strong> Eligible real estate enterprises can deduct up to 20% of qualified net business income on personal tax returns.</li>
          <li><strong>1031 Exchange Deferral:</strong> Roll 100% of capital gains and depreciation recapture into replacement properties tax-deferred indefinitely.</li>
        </ul>
      </div>

      <div class="sec-section">
        <h2>Frequently Asked Questions</h2>
        <?php $faqs=[
          ['How do you calculate ROI on a rental property?','Rental Property ROI = (Annual Net Cash Flow / Total Cash Invested) × 100. Annual net cash flow = gross rent − vacancy − mortgage P+I − taxes − insurance − maintenance − management fees. Total cash invested = down payment + closing costs + upfront repairs.'],
          ['What is cash-on-cash return for rental property?','Cash-on-cash return = Annual pre-tax cash flow / Total cash invested × 100. It measures how efficiently your invested cash generates income. A $50,000 cash investment producing $5,000/year in cash flow = 10% cash-on-cash return.'],
          ['What is a good ROI on rental property in 2026?','8–12% cash-on-cash ROI is strong. Cleveland and Detroit often achieve 9–14%. National markets average 4–7%. At 2026 mortgage rates (~7%), many coastal and high-cost markets produce negative cash flow — the property costs money every month.'],
          ['How do I calculate ROI with a mortgage?','With a mortgage, calculate cash-on-cash return: Annual Cash Flow (after all expenses including mortgage P+I) / Cash Invested (down + closing + repairs) × 100. The calculator above handles this automatically — just enter your mortgage rate and term.'],
          ['What is the difference between Gross Yield and Net Cash-on-Cash Return?','Gross yield is purely annual gross rent divided by purchase price (ignoring financing and operating expenses). Net cash-on-cash return calculates your actual dollar-in-pocket after paying mortgage interest, principal, property taxes, insurance, management, and repairs divided by your actual cash equity invested.'],
          ['Why do coastal properties often show low or negative cash-on-cash ROI?','High acquisition prices in markets like California and New York outpace prevailing rental rates. A $900,000 duplex renting for $4,000/month carries debt service, taxes, and insurance exceeding the rent at current interest rates, forcing investors to rely almost solely on future equity appreciation.'],
        ]; foreach($faqs as $f):?>
        <div class="sec-faq-item"><div class="sec-faq-q"><?php echo $f[0];?></div><div class="sec-faq-a"><?php echo $f[1];?></div></div>
        <?php endforeach;?>
      </div>
    </div>

    <div class="sec-sidebar">
      <div class="sec-widget">
        <div class="sec-widget-head">🏘️ Cash-on-Cash ROI 2026<small>US rental market benchmarks</small></div>
        <div class="sec-widget-rows">
          <div class="sec-widget-row"><div><div class="swl">Cleveland, OH</div><div class="sws">Max cash flow</div></div><div class="swv">9–14%</div></div>
          <div class="sec-widget-row"><div><div class="swl">Detroit, MI</div><div class="sws">High yield</div></div><div class="swv">8–13%</div></div>
          <div class="sec-widget-row"><div><div class="swl">Memphis, TN</div><div class="sws">Portfolio builder</div></div><div class="swv">5–9%</div></div>
          <div class="sec-widget-row"><div><div class="swl">Indianapolis, IN</div><div class="sws">Stable cash flow</div></div><div class="swv">4–8%</div></div>
          <div class="sec-widget-row"><div><div class="swl">Houston, TX</div><div class="sws">Growth market</div></div><div class="swv">2–5%</div></div>
          <div class="sec-widget-row"><div><div class="swl">NYC / SF / LA</div><div class="sws">Appreciation only</div></div><div class="swv">Negative</div></div>
        </div>
      </div>
      <div class="sec-links">
        <div class="sec-links-head">🔗 Related Tools</div>
        <ul>
          <li><a href="/business/roi-calculator">📊 Full ROI Calculator</a></li>
          <li><a href="/business/rental-property-roi-calculator" class="active">🏘️ Rental Property ROI</a></li>
          <li><a href="/business/real-estate-roi-calculator">🏠 Real Estate ROI</a></li>
          <li><a href="/real-estate/cap-rate-calculator">📊 Cap Rate Calculator</a></li>
          <li><a href="/real-estate/cash-on-cash-return-calculator">💵 Cash-on-Cash</a></li>
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
function calcPI(P,rate,term){var r=rate/100/12,n=term*12;return r>0?P*(r*Math.pow(1+r,n))/(Math.pow(1+r,n)-1):P/n;}
function calcRP(){
  var price   = parseFloat(document.getElementById('rp-price').value)||0;
  var down    = parseFloat(document.getElementById('rp-down').value)||0;
  var closing = parseFloat(document.getElementById('rp-closing').value)||0;
  var repairs = parseFloat(document.getElementById('rp-repairs').value)||0;
  var rate    = parseFloat(document.getElementById('rp-rate').value)||0;
  var term    = parseInt(document.getElementById('rp-term').value)||30;
  var rent    = parseFloat(document.getElementById('rp-rent').value)||0;
  var vac     = parseFloat(document.getElementById('rp-vac').value)||0;
  var tax     = parseFloat(document.getElementById('rp-tax').value)||0;
  var ins     = parseFloat(document.getElementById('rp-ins').value)||0;
  var maint   = parseFloat(document.getElementById('rp-maint').value)||0;
  var mgmt    = parseFloat(document.getElementById('rp-mgmt').value)||0;
  var hoa     = parseFloat(document.getElementById('rp-hoa').value)||0;
  var cashIn  = down+closing+repairs;
  var loan    = price-down;
  var pi      = calcPI(loan,rate,term);
  var grossRent = rent*12;
  var vacLoss   = grossRent*(vac/100);
  var egi       = grossRent-vacLoss;
  var mgmtFee   = egi*(mgmt/100);
  var annExp    = tax+ins+maint+mgmtFee+hoa;
  var annDebt   = pi*12;
  var noi       = egi-annExp;
  var annCF     = noi-annDebt;
  var moCF      = annCF/12;
  var coc       = cashIn>0?(annCF/cashIn)*100:0;
  var capRate   = price>0?(noi/price)*100:0;
  var grossYld  = price>0?(grossRent/price)*100:0;
  document.getElementById('rp-coc').textContent    = fmtP(coc);
  document.getElementById('rp-mo-cf').textContent  = fmtC(moCF);
  document.getElementById('rp-cap').textContent    = fmtP(capRate);
  document.getElementById('rp-yield').textContent  = fmtP(grossYld);
  document.getElementById('rp-pi').textContent     = fmtC(pi);
  document.getElementById('rl-cash').textContent   = fmtC(cashIn);
  document.getElementById('rl-gross').textContent  = fmtC(grossRent);
  document.getElementById('rl-vac').textContent    = '−'+fmtC(vacLoss);
  document.getElementById('rl-mort').textContent   = '−'+fmtC(annDebt);
  document.getElementById('rl-exp').textContent    = '−'+fmtC(annExp);
  document.getElementById('rl-net').textContent    = fmtC(annCF);
  document.getElementById('rl-net').className='lv '+(annCF>=0?'pos':'neg');
  document.getElementById('rp-result').style.display='block';
}
['rp-price','rp-down','rp-closing','rp-repairs','rp-rate','rp-term','rp-rent','rp-vac',
 'rp-tax','rp-ins','rp-maint','rp-mgmt','rp-hoa','rp-appr'].forEach(function(id){
  var el=document.getElementById(id);
  if(el){el.addEventListener('input',calcRP);el.addEventListener('change',calcRP);}
});
calcRP();
document.querySelectorAll('.sec-faq-q').forEach(function(q){
  q.addEventListener('click',function(){
    var i=this.closest('.sec-faq-item'),w=i.classList.contains('open');
    document.querySelectorAll('.sec-faq-item').forEach(function(x){x.classList.remove('open');});
    if(!w)i.classList.add('open');
  });
});
</script>
<?php require_once '../includes/footer.php'; ?>
