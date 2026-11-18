<?php
$currentYear = date('Y');
$pageTitle       = "Rent vs Buy Calculator ($currentYear) — True 5, 10, 20 & 30-Year Comparison | AmericaCalculator";
$metaDescription = "Free $currentYear rent vs buy calculator. Compare the true financial cost of renting versus homeownership over 5, 10, 20, and 30 years with equity, opportunity cost, and appreciation.";
$metaKeywords    = 'rent vs buy calculator, is it better to rent or buy, rent or buy a house, cost of renting vs buying, rent vs buy break even calculator';

$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
  ['@type'=>'HowTo','name'=>'How to Calculate Rent vs Buy Financial Outcome','step'=>[
    ['@type'=>'HowToStep','name'=>'Enter target home purchase details','text'=>'Input home price, down payment, mortgage rate, property tax, maintenance, and buying closing costs.'],
    ['@type'=>'HowToStep','name'=>'Enter equivalent rental costs','text'=>'Input monthly rent for a comparable home, annual rent inflation rate, and renter insurance.'],
    ['@type'=>'HowToStep','name'=>'Set investment timeframe','text'=>'Select the number of years you plan to live in the home before selling or moving.'],
    ['@type'=>'HowToStep','name'=>'Include equity appreciation & opportunity cost','text'=>'Account for property appreciation, mortgage equity paydown, and investment returns on saved down payment.'],
    ['@type'=>'HowToStep','name'=>'Review net wealth comparison','text'=>'See the exact break-even year where buying becomes more financially advantageous than renting.']
  ]],
    [
      '@type'               => 'WebApplication',
      'name'                => 'Rent vs Buy Calculator',
      'url'                 => 'https://americacalculator.com/real-estate/rent-vs-buy-calculator',
      'description'         => 'Compare the multi-year financial outcome of renting versus homeownership including mortgage payments, home equity, property appreciation, and opportunity cost of invested capital.',
      'applicationCategory' => 'FinanceApplication',
      'operatingSystem'     => 'All',
      'offers'              => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD'],
    ],
    [
      '@type'            => 'BreadcrumbList',
      'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Real Estate', 'item' => 'https://americacalculator.com/real-estate/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Rent vs Buy Calculator', 'item' => 'https://americacalculator.com/real-estate/rent-vs-buy-calculator'],
      ],
    ],
    [
      '@type'      => 'FAQPage',
      'mainEntity' => [
        [
          '@type'          => 'Question',
          'name'           => 'Is it better to rent or buy in 2026?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'At 2026 mortgage interest rates, monthly homeownership costs exceed renting in the vast majority of US markets. However, home equity buildup and property appreciation favor buyers who remain in the home for 5 or more years. If you plan to relocate within 3 years, renting is almost always more economical once purchase and sale closing costs are included.'
          ]
        ],
        [
          '@type'          => 'Question',
          'name'           => 'How long do you need to stay in a home to make buying worth it?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'In most US real estate markets, the break-even point is typically 5 to 7 years. In lower-cost Midwest metros like Cleveland or Indianapolis, break-even occurs in 3 to 4 years. In high-cost coastal cities like New York or San Francisco, breaking even can require 8 to 12 years.'
          ]
        ],
        [
          '@type'          => 'Question',
          'name'           => 'What is the opportunity cost of buying a home?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Opportunity cost represents the investment return you forgo by locking your down payment and closing costs into home equity rather than investing in liquid assets like the S&P 500 index. A conservative 7% annual compound return on a $70,000 down payment generates over $67,000 in investment gains over 10 years.'
          ]
        ],
        [
          '@type'          => 'Question',
          'name'           => 'Does renting build any long-term wealth?',
          'acceptedAnswer' => [
            '@type' => 'Answer',
            'text'  => 'Renting itself produces no equity, but tenants can build substantial wealth if they faithfully invest their upfront down payment capital and any monthly savings (when renting is cheaper than total homeownership costs) into compounding market investments.'
          ]
        ],
      ]
    ],
  ]
];

require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f8fafc;}
.rc-wrap{max-width:960px;margin:0 auto;padding:2rem 1.25rem 4rem;}
.rc-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}.rc-bc a{color:#64748b;text-decoration:none;}
.rc-hero h1{font-size:1.85rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.rc-hero p{font-size:.97rem;color:#64748b;line-height:1.65;margin:0 0 1.75rem;border-left:3px solid #7c3aed;padding-left:.9rem;}
.rc-card{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden;margin-bottom:1.75rem;}
.rc-card-head{background:#6d28d9;color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;}
.rc-body{padding:1.5rem;}
.rc-grid{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;}
.rc-col-title{font-size:.92rem;font-weight:700;color:#0f172a;margin-bottom:.85rem;padding-bottom:.4rem;border-bottom:2px solid #ede9fe;display:flex;align-items:center;gap:.4rem;}
.rc-field{margin-bottom:.9rem;}
.rc-field label{display:block;font-size:.82rem;font-weight:600;color:#1e293b;margin-bottom:.3rem;}
.rc-field input,.rc-field select{width:100%;padding:9px 12px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.92rem;color:#0f172a;outline:none;box-sizing:border-box;background:#fff;transition:border-color .2s;}
.rc-field input:focus{border-color:#7c3aed;}
.rc-field .hint{font-size:.72rem;color:#94a3b8;margin-top:.2rem;}
.rc-btn{width:100%;background:#6d28d9;color:#fff;padding:13px;border:none;border-radius:8px;font-size:.97rem;font-weight:700;cursor:pointer;margin-top:.5rem;}
.rc-btn:hover{background:#5b21b6;}
.rv-tabs{display:flex;gap:.5rem;margin-bottom:1rem;}
.rv-tab{flex:1;padding:9px;background:#f1f5f9;border:1px solid #cbd5e1;border-radius:6px;font-weight:700;font-size:.85rem;color:#475569;cursor:pointer;}
.rv-tab.active{background:#6d28d9;color:#fff;border-color:#6d28d9;}
.rv-result{background:#f8fafc;border:1.5px solid #e2e8f0;border-radius:10px;padding:1.5rem;}
.rv-winner{text-align:center;margin-bottom:1.25rem;}
.rv-winner-badge{display:inline-block;padding:7px 20px;border-radius:20px;font-weight:800;font-size:1.05rem;}
.rv-winner-badge.buy{background:#ecfdf5;color:#065f46;border:2px solid #a7f3d0;}
.rv-winner-badge.rent{background:#f5f3ff;color:#5b21b6;border:2px solid #ddd6fe;}
.rv-winner-badge.tie{background:#f1f5f9;color:#334155;border:2px solid #cbd5e1;}
.rv-winner-sub{font-size:.86rem;color:#64748b;margin-top:.4rem;}
.rv-compare-grid{display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1rem;}
.rv-col{background:#fff;border:1px solid #e2e8f0;border-radius:8px;padding:1rem;}
.rv-col h4{margin:0 0 .75rem;font-size:.92rem;font-weight:700;}
.rv-col h4.buy{color:#1d4ed8;}.rv-col h4.rent{color:#7c3aed;}
.rv-line{display:flex;justify-content:space-between;padding:.35rem 0;border-bottom:1px solid #f1f5f9;font-size:.83rem;}
.rv-line:last-child{border-bottom:none;font-weight:700;font-size:.92rem;margin-top:.4rem;padding-top:.4rem;border-top:2px solid #e2e8f0;}
.rc-section{background:#fff;border-radius:12px;border:1px solid #e2e8f0;padding:1.75rem;margin-bottom:1.5rem;}
.rc-section h2{font-size:1.3rem;color:#0f172a;margin:0 0 .85rem;padding-bottom:.6rem;border-bottom:2px solid #f5f3ff;}
.rc-section h3{font-size:1.05rem;color:#1e293b;margin:1.2rem 0 .5rem;}
.rc-section p{color:#475569;line-height:1.72;font-size:.95rem;margin-bottom:.9rem;}
.rc-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}
.rc-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.rc-faq-q{font-size:.94rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;}
.rc-faq-q::after{content:'+';color:#7c3aed;font-size:1.2rem;flex-shrink:0;}
.rc-faq-item.open .rc-faq-q::after{content:'−';}
.rc-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.rc-faq-item.open .rc-faq-a{display:block;}
.rc-related{display:grid;grid-template-columns:repeat(auto-fit,minmax(175px,1fr));gap:.75rem;margin-top:.75rem;}
.rc-rel-link{display:block;background:#f5f3ff;border:1.5px solid #ddd6fe;border-radius:8px;padding:.75rem 1rem;font-size:.85rem;font-weight:600;color:#6d28d9;text-decoration:none;text-align:center;}
.rc-rel-link:hover{background:#ede9fe;}
@media(max-width:640px){.rc-grid,.rv-compare-grid{grid-template-columns:1fr;}}
</style>

<main id="main-content">
<div class="rc-wrap">
  <div class="rc-bc"><a href="/">Home</a> &rsaquo; <a href="/real-estate/">Real Estate</a> &rsaquo; Rent vs Buy Calculator</div>
  <div class="rc-hero">
    <h1>Rent vs. Buy Calculator (<?php echo $currentYear;?>)</h1>
    <p>Compare the true multi-year cost of renting versus homeownership. Includes principal amortization, home appreciation, property taxes, maintenance, and the opportunity cost of investing your down payment.</p>
  </div>

  <div class="rc-card">
    <div class="rc-card-head">🏠 Rent vs Buy Comparison Tool</div>
    <div class="rc-body">
      <div class="rc-grid">
        <!-- BUYING SIDE -->
        <div>
          <div class="rc-col-title">🏡 Buying Assumptions</div>
          <div class="rc-field"><label>Home Purchase Price ($)</label><input type="number" id="rvb-price" value="350000" step="5000"></div>
          <div class="rc-field"><label>Down Payment (%)</label><input type="number" id="rvb-down" value="20" min="0" max="100" step="1"></div>
          <div class="rc-field"><label>Mortgage Interest Rate (%)</label><input type="number" id="rvb-rate" value="7.0" min="0.1" max="20" step="0.05"></div>
          <div class="rc-field"><label>Loan Term</label><select id="rvb-term"><option value="30">30 Years</option><option value="15">15 Years</option></select></div>
          <div class="rc-field"><label>Annual Property Tax ($)</label><input type="number" id="rvb-tax" value="3500" step="100"></div>
          <div class="rc-field"><label>Annual Homeowners Insurance ($)</label><input type="number" id="rvb-in" value="1200" step="100"></div>
          <div class="rc-field"><label>Annual Maintenance ($)</label><input type="number" id="rvb-maint" value="3500" step="100"><div class="hint">Recommended: 1% of home value/yr</div></div>
          <div class="rc-field"><label>Annual Property Appreciation (%)</label><input type="number" id="rvb-appr" value="3.5" min="0" max="15" step="0.5"></div>
          <div class="rc-field"><label>Selling Costs (%)</label><input type="number" id="rvb-sell" value="6" min="0" max="15" step="0.5"><div class="hint">Realtor commissions &amp; transfer tax</div></div>
          <div class="rc-field"><label>Closing Costs ($)</label><input type="number" id="rvb-closing" value="10000" step="500"><div class="hint">Buyer loan fees &amp; title insurance</div></div>
        </div>

        <!-- RENTING SIDE -->
        <div>
          <div class="rc-col-title">🏢 Renting Assumptions</div>
          <div class="rc-field"><label>Monthly Rent ($)</label><input type="number" id="rvb-rent" value="1800" step="50"></div>
          <div class="rc-field"><label>Annual Rent Increase (%)</label><input type="number" id="rvb-rent-inc" value="3.0" min="0" max="15" step="0.5"></div>
          <div class="rc-field"><label>Renter's Insurance ($/yr)</label><input type="number" id="rvb-rin" value="200" step="50"></div>
          <div class="rc-field"><label style="margin-top:.75rem;display:block;font-size:.83rem;font-weight:700;color:#7c3aed;border-top:1px solid #f1f5f9;padding-top:.75rem;">📈 Investment Assumptions</label></div>
          <div class="rc-field"><label>Investment Return on Down Payment (%)</label><input type="number" id="rvb-invest" value="7.0" min="0" max="20" step="0.5"><div class="hint">Expected return if down payment was invested in stocks</div></div>
          <div class="rc-field"><label>Investment Return on Monthly Savings (%)</label><input type="number" id="rvb-savings-ret" value="7.0" min="0" max="20" step="0.5"><div class="hint">Expected return if rent savings were invested</div></div>
        </div>
      </div>
      <button class="rc-btn" onclick="calcRVB()">⚡ Compare Rent vs Buy</button>

      <div id="rvb-result" style="display:none;">
        <div class="rv-tab" style="margin-top:1.25rem;">
          <button class="rv-tab active" onclick="showYear(5,this)">5 Years</button>
          <button class="rv-tab" onclick="showYear(10,this)">10 Years</button>
          <button class="rv-tab" onclick="showYear(20,this)">20 Years</button>
          <button class="rv-tab" onclick="showYear(30,this)">30 Years</button>
        </div>
        <div class="rv-result" id="rvb-panel">
          <div class="rv-winner">
            <div class="rv-winner-badge" id="rvb-badge">-</div><br>
            <div class="rv-winner-sub" id="rvb-sub"></div>
          </div>
          <div class="rv-compare-grid">
            <div class="rv-col buy-col">
              <h4 class="buy">🏡 Buying Outcome</h4>
              <div class="rv-line"><span class="ll">Mortgage Payments</span><span class="lv" id="b-mort">-</span></div>
              <div class="rv-line"><span class="ll">Property Tax</span><span class="lv" id="b-tax">-</span></div>
              <div class="rv-line"><span class="ll">Insurance</span><span class="lv" id="b-in">-</span></div>
              <div class="rv-line"><span class="ll">Maintenance</span><span class="lv" id="b-maint">-</span></div>
              <div class="rv-line"><span class="ll">Closing Costs</span><span class="lv" id="b-closing">-</span></div>
              <div class="rv-line"><span class="ll">Selling Costs</span><span class="lv" id="b-sell">-</span></div>
              <div class="rv-line"><span class="ll" style="color:#059669;">Equity Gained</span><span class="lv" style="color:#059669;" id="b-equity">-</span></div>
              <div class="rv-line"><span class="ll" style="color:#059669;">Appreciation Gain</span><span class="lv" style="color:#059669;" id="b-appr">-</span></div>
              <div class="rv-line"><span class="ll">Net Cost of Buying</span><span class="lv" id="b-net">-</span></div>
            </div>
            <div class="rv-col rent-col">
              <h4 class="rent">🏢 Renting Outcome</h4>
              <div class="rv-line"><span class="ll">Total Rent Paid</span><span class="lv" id="r-rent">-</span></div>
              <div class="rv-line"><span class="ll">Renter's Insurance</span><span class="lv" id="r-in">-</span></div>
              <div class="rv-line"><span class="ll">Down Payment Invested</span><span class="lv" id="r-dp-inv">-</span></div>
              <div class="rv-line"><span class="ll" style="color:#059669;">Down Pmt Investment Gain</span><span class="lv" style="color:#059669;" id="r-dp-gain">-</span></div>
              <div class="rv-line"><span class="ll" style="color:#059669;">Monthly Savings Invested</span><span class="lv" style="color:#059669;" id="r-saving">-</span></div>
              <div class="rv-line"><span class="ll">Net Cost of Renting</span><span class="lv" id="r-net">-</span></div>
            </div>
          </div>
          <p style="font-size:.75rem;color:#94a3b8;text-align:center;margin:0;">*Estimates only. Does not include state-specific itemized tax deductions or HOA assessments. Results vary by market.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="rc-section">
    <h2>Rent vs. Buy: The Complete Financial Decision Framework in <?php echo $currentYear;?></h2>
    <p>Deciding whether to rent or purchase a home is one of the most consequential personal finance decisions you will ever make. While cultural tradition often treats homeownership as a mandatory milestone, elevated mortgage interest rates in <?php echo $currentYear;?> have altered the mathematics of housing affordability across the United States.</p>

    <table style="width:100%;border-collapse:collapse;margin:1.25rem 0;font-size:.9rem;">
      <thead>
        <tr style="background:#f5f3ff;color:#6d28d9;">
          <th style="padding:10px 12px;border:1px solid #ddd6fe;text-align:left;">Decision Factor</th>
          <th style="padding:10px 12px;border:1px solid #ddd6fe;text-align:left;">Renting Advantages</th>
          <th style="padding:10px 12px;border:1px solid #ddd6fe;text-align:left;">Homeownership Advantages</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="padding:10px 12px;border:1px solid #ddd6fe;"><strong>Transaction Friction</strong></td>
          <td style="padding:10px 12px;border:1px solid #ddd6fe;">Minimal. Security deposit is refundable; 30-day notice to move.</td>
          <td style="padding:10px 12px;border:1px solid #ddd6fe;">Heavy. Buying costs 2%&ndash;5% upfront; selling costs 6%&ndash;8% in realtor commissions.</td>
        </tr>
        <tr>
          <td style="padding:10px 12px;border:1px solid #ddd6fe;"><strong>Capital Requirements</strong></td>
          <td style="padding:10px 12px;border:1px solid #ddd6fe;">Low upfront cash required. Capital can compound in stock index funds.</td>
          <td style="padding:10px 12px;border:1px solid #ddd6fe;">Requires substantial down payment, closing costs, and emergency reserves.</td>
        </tr>
        <tr>
          <td style="padding:10px 12px;border:1px solid #ddd6fe;"><strong>Maintenance &amp; Repairs</strong></td>
          <td style="padding:10px 12px;border:1px solid #ddd6fe;">$0 unexpected liability. Landlord pays for roof, HVAC, plumbing failures.</td>
          <td style="padding:10px 12px;border:1px solid #ddd6fe;">Full financial liability. Budget 1% to 2% of home value annually for upkeep.</td>
        </tr>
        <tr>
          <td style="padding:10px 12px;border:1px solid #ddd6fe;"><strong>Long-Term Wealth</strong></td>
          <td style="padding:10px 12px;border:1px solid #ddd6fe;">Builds wealth only if you diligently invest the monthly savings difference.</td>
          <td style="padding:10px 12px;border:1px solid #ddd6fe;">Automatic forced savings through monthly mortgage principal amortization.</td>
        </tr>
        <tr>
          <td style="padding:10px 12px;border:1px solid #ddd6fe;"><strong>Inflation Protection</strong></td>
          <td style="padding:10px 12px;border:1px solid #ddd6fe;">Rents generally rise 3% to 5% annually with inflation.</td>
          <td style="padding:10px 12px;border:1px solid #ddd6fe;">30-year fixed principal &amp; interest payments remain locked forever.</td>
        </tr>
      </tbody>
    </table>

    <h3>The 5-Year Rule of Homeownership</h3>
    <p>Because purchasing a home involves substantial closing costs (lender origination, appraisal, title search, transfer taxes) and selling requires 5% to 6% in real estate agent commissions plus transfer taxes, buying a home is almost always financially disastrous if you move within 1 to 3 years. As a general rule of thumb, you need to stay in the home for a <strong>minimum of 5 to 7 years</strong> for price appreciation and loan amortization to outpace transaction fees.</p>

    <h3>The Price-to-Rent Ratio (P/R Ratio)</h3>
    <p>Economists use the Price-to-Rent ratio to gauge whether local housing markets favor buyers or tenants:</p>
    <div style="background:#f1f5f9;padding:1rem 1.5rem;border-left:4px solid #7c3aed;font-family:monospace;font-size:1.05rem;margin:1rem 0;color:#0f172a;">
      Price-to-Rent Ratio = Median Home Purchase Price &divide; Median Annual Rent
    </div>
    <ul>
      <li><strong>1 to 15 (Favors Buying):</strong> Typical in affordable Midwest markets like Cleveland, Detroit, and Indianapolis. Buying is significantly cheaper than renting.</li>
      <li><strong>16 to 20 (Balanced Zone):</strong> Typical in moderate metros like Dallas, Atlanta, and Charlotte. Decision depends on personal timeline.</li>
      <li><strong>21+ (Favors Renting):</strong> Common in high-cost coastal metros like San Francisco, Seattle, Los Angeles, and New York. Renting and investing the surplus capital often generates higher net worth.</li>
    </ul>
  </div>

  <div class="rc-section">
    <h2>Frequently Asked Questions</h2>
    <?php $faqs=[
      ['Is it better to rent or buy in 2026?','At 2026 rates (~7%), monthly buying costs exceed renting in most markets. However, equity buildup and appreciation favor buyers who stay 5+ years. If you plan to move within 3 years, renting is almost always cheaper after accounting for closing and selling costs.'],
      ['How long do you need to stay to make buying worth it?','Typically 5-7 years in most US markets. High-cost coastal cities (NYC, SF) can take 10+ years. Affordable Midwest markets (Indianapolis, Columbus) can break even in 3-4 years. Use the year tabs above to find your specific break-even point.'],
      ['What is opportunity cost in this calculator?','Opportunity cost is the investment return you forgo by putting money into a down payment instead of investing it. This calculator assumes your down payment - and any monthly savings from renting - could earn a market return (default 7%/yr). This "lost" return is a real cost of buying.'],
      ['Does renting build any wealth?','Renting itself builds no equity. However, if you invest the difference between renting and buying (down payment + monthly savings), you can build significant wealth. The rent vs buy decision is not simply about housing costs - it is about total financial outcome.'],
    ];
    foreach($faqs as $f):?><div class="rc-faq-item"><div class="rc-faq-q"><?php echo $f[0];?></div><div class="rc-faq-a"><?php echo $f[1];?></div></div><?php endforeach;?>
  </div>

  <div class="rc-section">
    <h2>Related Real Estate Calculators</h2>
    <div class="rc-related">
      <a href="/real-estate/mortgage-calculator" class="rc-rel-link">🏡 Mortgage Calculator</a>
      <a href="/real-estate/down-payment-calculator" class="rc-rel-link">💵 Down Payment Calculator</a>
      <a href="/real-estate/closing-cost-calculator" class="rc-rel-link">📑 Closing Cost Calculator</a>
      <a href="/real-estate/cash-flow-calculator" class="rc-rel-link">📈 Cash Flow Calculator</a>
      <a href="/real-estate/roi-calculator" class="rc-rel-link">📊 ROI Calculator</a>
      <a href="/real-estate/" class="rc-rel-link">🏢 All Real Estate Tools</a>
    </div>
  </div>
</div>
</main>

<script>
(function(){
  var _data = {};
  var $ = function(id){return document.getElementById(id);};
  var fmtC = function(v){return (v<0?'-':'')+'$'+Math.round(Math.abs(v)).toLocaleString();};

  function calcPI(P,rate,term){var r=rate/100/12,n=term*12;return r>0?P*(r*Math.pow(1+r,n))/(Math.pow(1+r,n)-1):P/n;}

  function runYear(yrs, price, down, rate, term, tax, ins, maint, appr, sellPct, closing,
                   rent, rentInc, rins, investRet, savingsRet){
    var dp = price*(down/100), loan = price-dp;
    var moPI = calcPI(loan,rate,term);

    // BUYING
    var totalMort = moPI*12*yrs;
    var totalTax  = 0, totalIns = 0, totalMaint = 0;
    for(var y=0;y<yrs;y++){
      totalTax   += tax;
      totalIns   += ins;
      totalMaint += maint;
    }
    // principal paydown
    var r=rate/100/12, n=term*12, bal=loan;
    for(var m=0;m<yrs*12;m++){var iP=bal*r; bal-=(moPI-iP); if(bal<0)bal=0;}
    var equityGained = loan - bal;
    var salePrice    = price*Math.pow(1+appr/100,yrs);
    var apprGain     = salePrice - price;
    var sellCost     = salePrice*(sellPct/100);
    var buyNet = totalMort + totalTax + totalIns + totalMaint + closing + sellCost - equityGained - apprGain;

    // RENTING
    var totalRent = 0, mo = rent;
    for(var y2=0;y2<yrs;y2++){ totalRent += mo*12; mo *= (1+rentInc/100); }
    var totalRins = rins*yrs;
    // Down payment invested
    var dpFV  = dp*Math.pow(1+investRet/100,yrs);
    var dpGain = dpFV - dp;
    // Monthly savings (if buying costs more than renting per month)
    var buyMoCost = moPI + tax/12 + ins/12 + maint/12;
    var rentMoCost = rent + rins/12;
    var moSavings = Math.max(0, buyMoCost - rentMoCost);
    // FV of monthly savings invested
    var rm = investRet/100/12;
    var savingsFV = moSavings>0 && rm>0 ? moSavings*(Math.pow(1+rm,yrs*12)-1)/rm : moSavings*yrs*12;
    var rentNet = totalRent + totalRins - dpGain - savingsFV;

    return {
      buyNet:buyNet, rentNet:rentNet,
      totalMort:totalMort, totalTax:totalTax, totalIns:totalIns, totalMaint:totalMaint,
      closing:closing, sellCost:sellCost, equityGained:equityGained, apprGain:apprGain,
      totalRent:totalRent, totalRins:totalRins, dp:dp, dpGain:dpGain, savingsFV:savingsFV
    };
  }

  window.calcRVB = function(){
    var price     = parseFloat($('rvb-price').value)||0;
    var down      = parseFloat($('rvb-down').value)||20;
    var rate      = parseFloat($('rvb-rate').value)||7;
    var term      = parseInt($('rvb-term').value)||30;
    var tax       = parseFloat($('rvb-tax').value)||0;
    var ins       = parseFloat($('rvb-ins').value)||0;
    var maint     = parseFloat($('rvb-maint').value)||0;
    var appr      = parseFloat($('rvb-appr').value)||3.5;
    var sellPct   = parseFloat($('rvb-sell').value)||6;
    var closing   = parseFloat($('rvb-closing').value)||10000;
    var rent      = parseFloat($('rvb-rent').value)||0;
    var rentInc   = parseFloat($('rvb-rent-inc').value)||3;
    var rins      = parseFloat($('rvb-rins').value)||0;
    var investRet = parseFloat($('rvb-invest').value)||7;
    var savingsRet= parseFloat($('rvb-savings-ret').value)||7;

    _data = {};
    [5,10,20,30].forEach(function(y){
      _data[y] = runYear(y,price,down,rate,Math.min(term,30),tax,ins,maint,appr,sellPct,closing,rent,rentInc,rins,investRet,savingsRet);
    });

    $('rvb-result').style.display='block';
    showYear(5, document.querySelector('.rv-tab'));
  };

  window.showYear = function(yrs, btn){
    document.querySelectorAll('.rv-tab').forEach(function(t){t.classList.remove('active');});
    btn.classList.add('active');
    var d = _data[yrs]; if(!d) return;

    var winner = d.buyNet < d.rentNet ? 'buy' : d.rentNet < d.buyNet ? 'rent' : 'tie';
    var diff   = Math.abs(d.buyNet - d.rentNet);
    var badge  = $('rvb-badge');
    badge.textContent = winner==='buy' ? '🏡 Buying Wins' : winner==='rent' ? '🏢 Renting Wins' : '⚖️ About Equal';
    badge.className   = 'rv-winner-badge '+(winner==='tie'?'tie':winner);
    $('rvb-sub').textContent = winner==='tie' ? 'Over '+yrs+' years, the costs are roughly equal'
      : 'Over '+yrs+' years, '+(winner==='buy'?'buying':'renting')+' saves approximately $'+Math.round(diff).toLocaleString();

    $('b-mort').textContent    = fmtC(d.totalMort);
    $('b-tax').textContent     = fmtC(d.totalTax);
    $('b-ins').textContent     = fmtC(d.totalIns);
    $('b-maint').textContent   = fmtC(d.totalMaint);
    $('b-closing').textContent = fmtC(d.closing);
    $('b-sell').textContent    = fmtC(d.sellCost);
    $('b-equity').textContent  = '-'+fmtC(d.equityGained).replace('-','').replace('$','$');
    $('b-appr').textContent    = '-'+fmtC(d.apprGain).replace('-','').replace('$','$');
    $('b-net').textContent     = fmtC(d.buyNet);

    $('r-rent').textContent    = fmtC(d.totalRent);
    $('r-ins').textContent     = fmtC(d.totalRins);
    $('r-dp-inv').textContent  = fmtC(d.dp);
    $('r-dp-gain').textContent = '-'+fmtC(d.dpGain).replace('-','').replace('$','$');
    $('r-savings').textContent = '-'+fmtC(d.savingsFV).replace('-','').replace('$','$');
    $('r-net').textContent     = fmtC(d.rentNet);
  };

  ['rvb-price','rvb-down','rvb-rate','rvb-term','rvb-tax','rvb-ins','rvb-maint','rvb-appr',
   'rvb-sell','rvb-closing','rvb-rent','rvb-rent-inc','rvb-rins','rvb-invest','rvb-savings-ret']
    .forEach(function(id){$(id).addEventListener('input', window.calcRVB);});

  document.querySelectorAll('.rc-faq-q').forEach(function(q){
    q.addEventListener('click',function(){
      var i=this.closest('.rc-faq-item'),w=i.classList.contains('open');
      document.querySelectorAll('.rc-faq-item').forEach(function(x){x.classList.remove('open');});
      if(!w) i.classList.add('open');
    });
  });

  window.calcRVB();
})();
</script>

<?php require_once '../includes/footer.php'; ?>
