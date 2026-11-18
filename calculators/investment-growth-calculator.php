<?php
$currentYear = date('Y');
$pageTitle       = "Investment Growth Calculator ($currentYear) | Compound";
$metaDescription = "Free investment growth calculator for $currentYear. Calculate future value of any investment with compound interest, monthly contributions, and annual return rate. See your money grow over time.";
$metaKeywords    = 'investment growth calculator, compound interest calculator, future value calculator, investment calculator, retirement savings calculator, monthly contribution calculator';
$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    ['@type' => 'WebApplication',
     'name'  => 'Investment Growth Calculator',
     'url'   => 'https://americacalculator.com/calculators/investment-growth-calculator',
     'description' => 'Calculate future value of investments with compound interest and monthly contributions.',
     'applicationCategory' => 'FinanceApplication', 'operatingSystem' => 'All',
     'offers' => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD']],
    ['@type' => 'BreadcrumbList', 'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => 'https://americacalculator.com/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Investment Growth Calculator', 'item' => 'https://americacalculator.com/calculators/investment-growth-calculator'],
    ]],
    ['@type' => 'FAQPage', 'mainEntity' => [
      ['@type' => 'Question', 'name' => 'What is compound interest?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Compound interest means you earn interest on both your original principal and on previously accumulated interest. Over time, this creates exponential growth. A $10,000 investment at 10% annually becomes $25,937 after 10 years — not $20,000 — because each year\'s interest earns its own interest.']],
      ['@type' => 'Question', 'name' => 'What annual return should I use?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'The US stock market (S&P 500) has averaged approximately 10% annually before inflation over the long term. After inflation, the real return is closer to 7%. For conservative planning, many financial advisors recommend using 6–8% for diversified long-term portfolios. For bonds or stable value funds, use 3–5%.']],
      ['@type' => 'Question', 'name' => 'How much should I save per month?',
       'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A common guideline is to save 15% of gross income for retirement. For a $60,000/yr salary, that is $750/month. Starting early matters enormously — $500/month invested from age 25 at 8% grows to approximately $1.74 million by age 65, compared to $875,000 starting at age 35.']],
    ]],
  ],
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f8fafc;}*{box-sizing:border-box;}
.igc-wrap{max-width:900px;margin:0 auto;padding:2rem 1.25rem 4rem;}
.igc-bc{font-size:.79rem;color:#94a3b8;margin-bottom:.6rem;}
.igc-bc a{color:#64748b;text-decoration:none;}
.igc-hero h1{font-size:1.85rem;color:#0f172a;margin:0 0 .4rem;line-height:1.25;}
.igc-byline{display:flex;align-items:center;flex-wrap:wrap;gap:10px;margin-bottom:.75rem;}
.igc-byline span{font-size:.82rem;color:#64748b;}
.igc-byline strong{color:#1e293b;}
.igc-badge{background:#dbeafe;color:#1e40af;font-size:.74rem;font-weight:700;padding:3px 11px;border-radius:20px;border:1px solid #bfdbfe;}
.igc-hero p{font-size:.97rem;color:#64748b;line-height:1.7;margin:0;border-left:3px solid #1d4ed8;padding-left:.9rem;}
.igc-card{background:#fff;border-radius:13px;border:1px solid #e2e8f0;box-shadow:0 3px 14px rgba(0,0,0,.06);overflow:hidden;margin-top:1.75rem;}
.igc-card-head{background:linear-gradient(135deg,#1d4ed8,#1e40af);color:#fff;padding:1.1rem 1.5rem;font-size:1rem;font-weight:700;}
.igc-body{display:grid;grid-template-columns:1fr 1fr;gap:0;}
.igc-form{padding:1.5rem;border-right:1px solid #f1f5f9;}
.igc-res{padding:1.5rem;background:linear-gradient(160deg,#eff6ff,#dbeafe 100%);}
.sf{margin-bottom:.95rem;}
.sf label{display:block;font-size:.84rem;font-weight:600;color:#1e293b;margin-bottom:.35rem;}
.sf input{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.93rem;color:#0f172a;outline:none;background:#fff;transition:border-color .2s;}
.sf input:focus{border-color:#1d4ed8;}
.sf .hint{font-size:.72rem;color:#94a3b8;margin-top:.22rem;}
.igc-btn{width:100%;background:linear-gradient(135deg,#1d4ed8,#1e40af);color:#fff;padding:13px;border:none;border-radius:8px;font-size:.96rem;font-weight:700;cursor:pointer;margin-top:.5rem;transition:opacity .2s;}
.igc-btn:hover{opacity:.91;}
/* Results */
.igc-primary{background:linear-gradient(135deg,#1d4ed8,#1e40af);border-radius:9px;padding:1.25rem;text-align:center;margin-bottom:.85rem;box-shadow:0 4px 14px rgba(29,78,216,.22);}
.igc-primary .pv{display:block;font-size:2.2rem;font-weight:900;color:#fff;line-height:1;margin-bottom:.2rem;}
.igc-primary .pl{font-size:.8rem;color:rgba(255,255,255,.85);}
.igc-boxes{display:grid;grid-template-columns:1fr 1fr;gap:.55rem;margin-bottom:.85rem;}
.igc-box{background:#fff;border:1.5px solid #bfdbfe;border-radius:8px;padding:.75rem;text-align:center;}
.igc-box .bv{display:block;font-size:1rem;font-weight:800;color:#1d4ed8;}
.igc-box .bl{font-size:.68rem;color:#64748b;font-weight:600;}
.igc-lines{background:#fff;border:1px solid #bfdbfe;border-radius:8px;padding:.75rem 1rem;}
.igc-line{display:flex;justify-content:space-between;padding:.3rem 0;border-bottom:1px solid #eff6ff;font-size:.84rem;}
.igc-line:last-child{border-bottom:none;font-weight:700;padding-top:.45rem;}
.igc-line .ll{color:#64748b;}.igc-line .lv{font-weight:600;color:#1e293b;}
.igc-line .pos{color:#16a34a;}
/* Growth bar */
.igc-bar-wrap{margin-top:.85rem;}
.igc-bar-lbl{font-size:.72rem;font-weight:700;color:#64748b;margin-bottom:.4rem;text-transform:uppercase;letter-spacing:.05em;}
.igc-bar-track{height:12px;background:#e2e8f0;border-radius:6px;overflow:hidden;display:flex;}
.igc-bar-principal{background:#bfdbfe;transition:width .4s ease;}
.igc-bar-interest{background:#1d4ed8;transition:width .4s ease;}
.igc-bar-legend{display:flex;gap:1rem;margin-top:.35rem;}
.igc-bar-legend span{font-size:.72rem;color:#64748b;display:flex;align-items:center;gap:.35rem;}
.igc-bar-legend span::before{content:'';width:10px;height:10px;border-radius:2px;flex-shrink:0;}
.l-principal::before{background:#bfdbfe;}
.l-interest::before{background:#1d4ed8;}
/* Content sections */
.igc-section{background:#fff;border-radius:13px;border:1px solid #e2e8f0;padding:1.85rem;margin-top:1.6rem;}
.igc-section h2{font-size:1.35rem;color:#0f172a;margin:0 0 .9rem;padding-bottom:.65rem;border-bottom:2px solid #eff6ff;}
.igc-section h3{font-size:1rem;color:#1e293b;margin:1.25rem 0 .5rem;font-weight:700;}
.igc-section p{color:#475569;line-height:1.75;font-size:.96rem;margin-bottom:.9rem;}
.igc-section p:last-child{margin-bottom:0;}
.igc-section a{color:#1d4ed8;font-weight:600;text-decoration:none;}
.igc-section strong{color:#1e293b;}
.igc-section ul{color:#475569;padding-left:1.4rem;line-height:1.75;font-size:.96rem;margin-bottom:.9rem;}
.igc-section li{margin-bottom:.4rem;}
.igc-table{width:100%;border-collapse:collapse;border-radius:9px;overflow:hidden;border:1px solid #e2e8f0;margin-bottom:1.1rem;}
.igc-table th{background:#1d4ed8;color:#fff;padding:9px 13px;font-size:.83rem;font-weight:600;text-align:left;}
.igc-table td{padding:9px 13px;border-bottom:1px solid #f1f5f9;font-size:.87rem;color:#334155;}
.igc-table tr:last-child td{border-bottom:none;}
.igc-table tr:nth-child(even) td{background:#f8fafc;}
.igc-info{background:#eff6ff;border-left:4px solid #1d4ed8;border-radius:0 8px 8px 0;padding:.85rem 1.1rem;margin:1rem 0;font-size:.92rem;color:#1e3a8a;line-height:1.6;}
.igc-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}
.igc-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.igc-faq-q{font-size:.94rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;}
.igc-faq-q::after{content:'+';color:#1d4ed8;font-size:1.2rem;flex-shrink:0;}
.igc-faq-item.open .igc-faq-q::after{content:'−';}
.igc-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.igc-faq-item.open .igc-faq-a{display:block;}
@media(max-width:700px){.igc-body{grid-template-columns:1fr;}.igc-form{border-right:none;border-bottom:1px solid #f1f5f9;}.igc-hero h1{font-size:1.5rem;}}
</style>

<main id="main-content">
<div class="igc-wrap">

  <div class="igc-bc"><a href="/">Home</a> › Investment Growth Calculator</div>

  <div class="igc-hero">
    <h1>Investment Growth Calculator (<?php echo $currentYear; ?>) — Compound Interest &amp; Future Value</h1>
    <div class="igc-byline">
      <span>Reviewed by the <strong>AmericaCalculator.com editorial team</strong></span>
      <span class="igc-badge">🕐 Last Updated: August 2026</span>
    </div>
    <p>Calculate how any investment grows over time using <strong>compound interest</strong>. Enter your initial investment, monthly contributions, expected annual return, and time horizon to see your projected future value. Based on standard compound interest formulas used by the <a href="https://www.sec.gov/investor/tools/mcc.htm" target="_blank" rel="noopener noreferrer" style="color:#1d4ed8;">SEC's investor education resources</a>.</p>
  </div>

  <div class="igc-card">
    <div class="igc-card-head">📈 Investment Growth Calculator</div>
    <div class="igc-body">
      <div class="igc-form">
        <div class="sf">
          <label for="ig-initial">Initial Investment ($)</label>
          <input type="number" id="ig-initial" value="10000" min="0" step="100">
        </div>
        <div class="sf">
          <label for="ig-monthly">Monthly Contribution ($)</label>
          <input type="number" id="ig-monthly" value="500" min="0" step="25">
          <div class="hint">Amount added every month</div>
        </div>
        <div class="sf">
          <label for="ig-rate">Annual Return Rate (%)</label>
          <input type="number" id="ig-rate" value="10" min="0" max="50" step="0.5">
          <div class="hint">S&amp;P 500 historical avg ~10% · Conservative: 6–7%</div>
        </div>
        <div class="sf">
          <label for="ig-year">Investment Period (Years)</label>
          <input type="number" id="ig-year" value="30" min="1" max="50" step="1">
        </div>
        <button class="igc-btn" id="ig-calc-btn">⚡ Calculate Growth</button>
      </div>

      <div class="igc-re">
        <div class="igc-primary">
          <span class="pv" id="ig-fv">$0</span>
          <span class="pl">Future Value</span>
        </div>
        <div class="igc-boxe">
          <div class="igc-box"><span class="bv" id="ig-total-contrib">$0</span><span class="bl">Total Contributed</span></div>
          <div class="igc-box"><span class="bv po" id="ig-total-growth">$0</span><span class="bl">Interest Earned</span></div>
          <div class="igc-box"><span class="bv" id="ig-return-pct">0×</span><span class="bl">Return Multiple</span></div>
          <div class="igc-box"><span class="bv" id="ig-monthly-interest">$0</span><span class="bl">Avg Monthly Growth</span></div>
        </div>
        <div class="igc-line">
          <div class="igc-line"><span class="ll">Initial Investment</span><span class="lv" id="igl-initial">—</span></div>
          <div class="igc-line"><span class="ll">Monthly Contributions Total</span><span class="lv" id="igl-contrib">—</span></div>
          <div class="igc-line"><span class="ll">Total Money Invested</span><span class="lv" id="igl-invested">—</span></div>
          <div class="igc-line"><span class="ll">Compound Interest Earned</span><span class="lv po" id="igl-interest">—</span></div>
          <div class="igc-line"><span class="ll">Future Value</span><span class="lv po" id="igl-fv">—</span></div>
        </div>
        <div class="igc-bar-wrap">
          <div class="igc-bar-lbl">Contributions vs Growth</div>
          <div class="igc-bar-track">
            <div class="igc-bar-principal" id="ig-bar-p" style="width:50%"></div>
            <div class="igc-bar-interest" id="ig-bar-i" style="width:50%"></div>
          </div>
          <div class="igc-bar-legend">
            <span class="l-principal">Contributed</span>
            <span class="l-interest">Growth</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CONTENT -->
  <div class="igc-section">
    <h2>How Compound Interest Works</h2>
    <p>Compound interest is the mechanism behind long-term wealth building. Unlike simple interest — which only earns returns on your original principal — compound interest earns returns on your principal <em>and</em> on the accumulated interest from previous periods. Over decades, this creates exponential rather than linear growth.</p>
    <p>The standard compound interest formula used by this calculator is:</p>
    <div style="background:#0f172a;color:#6ee7b7;font-family:monospace;padding:1rem 1.25rem;border-radius:8px;font-size:.9rem;line-height:1.9;margin:1rem 0;">
      FV = P × (1 + r)^n + PMT × [((1 + r)^n − 1) / r]<br>
      <span style="color:#94a3b8;">Where: P = initial amount, r = monthly rate, n = months, PMT = monthly contribution</span>
    </div>

    <h3>Power of Starting Early</h3>
    <p>Time is the most powerful variable in compound interest. Consider this comparison at 10% annual return:</p>
    <table class="igc-table">
      <thead><tr><th>Start Age</th><th>Monthly Contribution</th><th>Years Invested</th><th>Total Contributed</th><th>Value at Age 65</th></tr></thead>
      <tbody>
        <tr><td>Age 25</td><td>$500/mo</td><td>40 years</td><td>$240,000</td><td style="color:#16a34a;font-weight:700;">$3,162,000</td></tr>
        <tr><td>Age 35</td><td>$500/mo</td><td>30 years</td><td>$180,000</td><td style="color:#eab308;font-weight:700;">$1,131,000</td></tr>
        <tr><td>Age 45</td><td>$500/mo</td><td>20 years</td><td>$120,000</td><td style="color:#f97316;font-weight:700;">$382,000</td></tr>
        <tr><td>Age 55</td><td>$500/mo</td><td>10 years</td><td>$60,000</td><td style="color:#dc2626;font-weight:700;">$102,000</td></tr>
      </tbody>
    </table>
    <p>Starting at 25 vs 35 costs only $60,000 more in contributions but produces nearly <strong>3× more wealth</strong> at retirement. The extra decade of compounding makes all the difference.</p>

    <h3>What Annual Return Rate Should I Use?</h3>
    <ul>
      <li><strong>10%</strong> — US stock market (S&amp;P 500) historical average before inflation</li>
      <li><strong>7%</strong> — After inflation (real return) for diversified stock portfolio</li>
      <li><strong>6–8%</strong> — Conservative long-term planning rate used by most financial advisors</li>
      <li><strong>4–5%</strong> — Balanced portfolio (mix of stocks and bonds)</li>
      <li><strong>3–4%</strong> — Bond-heavy or stable value portfolio</li>
    </ul>
    <div class="igc-info">💡 <strong>Disclaimer:</strong> Past market returns do not guarantee future performance. This calculator provides educational estimates only. Consult a licensed financial advisor before making investment decisions. See the <a href="https://www.sec.gov/investor/tools/mcc.htm" target="_blank" rel="noopener noreferrer">SEC investor education resources</a> for guidance on realistic return assumptions.</div>
  </div>

  <div class="igc-section">
    <h2>Nominal vs. Real Returns: Factoring in Inflation Drag</h2>
    <p>When modeling portfolio growth over 10, 20, or 30 years, it is critical to distinguish between <strong>nominal return</strong> (the raw dollar balance shown on brokerage statements) and <strong>real return</strong> (purchasing power adjusted for inflation):</p>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin:1.25rem 0;">
      <div style="background:#f8fafc;padding:1.15rem;border-radius:8px;border-left:4px solid #2563eb;">
        <strong style="color:#0f172a;display:block;margin-bottom:0.35rem;">The Fisher Equation</strong>
        <span style="font-size:0.88rem;color:#475569;line-height:1.55;display:block;">Mathematically, Real Return approximately equals Nominal Rate minus Inflation Rate. If your index fund generates 9.5% annually and inflation averages 2.5%, your real growth in purchasing power is approximately 7.0%.</span>
      </div>
      <div style="background:#f8fafc;padding:1.15rem;border-radius:8px;border-left:4px solid #10b981;">
        <strong style="color:#0f172a;display:block;margin-bottom:0.35rem;">Future Purchasing Power</strong>
        <span style="font-size:0.88rem;color:#475569;line-height:1.55;display:block;">At a 2.75% long-term inflation rate, general consumer prices double every 26 years. A nominal portfolio balance of $1,000,000 in 30 years will purchase goods and services equivalent to roughly $440,000 today.</span>
      </div>
    </div>

    <h3>Tax-Advantaged Shelters vs. Taxable Brokerage Drag</h3>
    <p>In a standard taxable brokerage account, annual dividend payments and rebalancing capital gains trigger annual tax liabilities. Over 30 years, this "tax drag" can erode 20% to 35% of your final wealth accumulation. Maximizing tax-sheltered accounts—such as a <strong>Roth IRA</strong> (tax-free growth and tax-free retirement withdrawals), <strong>Traditional 401(k)</strong> (tax-deductible upfront contributions), or <strong>Health Savings Account (HSA)</strong> (triple tax-advantaged)—allows 100% of your investment earnings to continuously compound without interruption.</p>
  </div>

  <div class="igc-section">
    <h2>Frequently Asked Questions</h2>
    <?php $faqs = [
      ['What is compound interest?', 'Compound interest means you earn returns on your original principal plus all previously earned interest. Over long periods, this creates exponential growth. A $10,000 investment at 10% annually becomes $25,937 after 10 years — not $20,000 — because each year\'s gains earn their own returns the following year.'],
      ['What annual return rate should I use?', 'The US stock market has historically averaged ~10% annually before inflation. After inflation, the real return is closer to 7%. Most financial planners use 6–8% for diversified long-term projections. Use 4–5% for balanced portfolios and 3–4% for conservative bond-heavy approaches.'],
      ['How much should I contribute per month?', 'A common guideline is to save 15% of gross income. For a $60,000/year salary, that is $750/month. If you are starting late, increase contributions to compensate for lost compounding time. Even small increases — $50–$100/month more — produce significant results over 20–30 year periods.'],
      ['What is the Rule of 72 in compound investing?', 'The Rule of 72 is a quick mental shortcut to estimate how many years it takes for your investment to double at a given annual interest rate. Divide 72 by the annual return percentage: at an 8% return, your money doubles approximately every 9 years (72 / 8 = 9). At 10%, it doubles every 7.2 years.'],
      ['Does compounding frequency (monthly vs annually) make a large difference?', 'Compounding more frequently yields slightly higher returns due to faster interest reinvestment. However, between monthly and daily compounding on standard retail investments, the difference is negligible (a fraction of a percent). The total savings rate, time duration, and asset allocation return rate have far greater impact.'],
      ['What is the Rule of 72 in compound investing?', 'The Rule of 72 is a quick mental shortcut to estimate how many years it takes for your investment to double at a given annual interest rate. Divide 72 by the annual return percentage: at an 8% return, your money doubles approximately every 9 years ($72 / 8 = 9$). At 10%, it doubles every 7.2 years.'],
      ['Does compounding frequency (monthly vs annually) make a large difference?', 'Compounding more frequently yields slightly higher returns due to faster interest reinvestment. However, between monthly and daily compounding on standard retail investments, the difference is negligible (a fraction of a percent). The total savings rate, time duration, and asset allocation return rate have far greater impact.'],
    ]; foreach($faqs as $f): ?>
    <div class="igc-faq-item">
      <div class="igc-faq-q"><?php echo $f[0]; ?></div>
      <div class="igc-faq-a"><?php echo $f[1]; ?></div>
    </div>
    <?php endforeach; ?>
  </div>

</div>
</main>

<script>
(function(){
  var $ = function(id){ return document.getElementById(id); };
  var fmtC = function(v){ return '$'+Math.round(Math.abs(v)).toLocaleString('en-US'); };
  var fmtD = function(v){ return (v<0?'−':'')+'$'+Math.abs(v).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g,','); };

  function calc(){
    var P   = parseFloat($('ig-initial').value) || 0;
    var pmt = parseFloat($('ig-monthly').value) || 0;
    var r   = (parseFloat($('ig-rate').value)   || 0) / 100 / 12;
    var n   = (parseFloat($('ig-years').value)  || 0) * 12;

    var fv, totalContrib;
    if(r === 0){
      fv = P + pmt * n;
    } else {
      fv = P * Math.pow(1+r, n) + pmt * ((Math.pow(1+r,n)-1)/r);
    }
    totalContrib = P + pmt * n;
    var growth = fv - totalContrib;
    var mult   = totalContrib > 0 ? (fv/totalContrib) : 0;
    var avgMo  = n > 0 ? growth/n : 0;

    $('ig-fv').textContent           = fmtC(fv);
    $('ig-total-contrib').textContent= fmtC(totalContrib);
    $('ig-total-growth').textContent = fmtC(growth);
    $('ig-return-pct').textContent   = mult.toFixed(2)+'×';
    $('ig-monthly-interest').textContent = fmtC(avgMo);
    $('igl-initial').textContent     = fmtC(P);
    $('igl-contrib').textContent     = fmtC(pmt*n);
    $('igl-invested').textContent    = fmtC(totalContrib);
    $('igl-interest').textContent    = fmtC(growth);
    $('igl-fv').textContent          = fmtC(fv);

    var pPct = fv>0?(totalContrib/fv)*100:50;
    var iPct = 100-pPct;
    $('ig-bar-p').style.width = pPct+'%';
    $('ig-bar-i').style.width = iPct+'%';
  }

  $('ig-calc-btn').addEventListener('click', calc);
  ['ig-initial','ig-monthly','ig-rate','ig-years'].forEach(function(id){
    $(id).addEventListener('input', calc);
  });
  calc();

  document.querySelectorAll('.igc-faq-q').forEach(function(q){
    q.addEventListener('click', function(){
      var item=this.closest('.igc-faq-item'),was=item.classList.contains('open');
      document.querySelectorAll('.igc-faq-item').forEach(function(x){x.classList.remove('open');});
      if(!was) item.classList.add('open');
    });
  });
})();
</script>

<section style="max-width:820px;margin:2rem auto 0;background:#fff;border-radius:13px;border:1px solid #e2e8f0;padding:1.75rem;box-shadow:0 2px 8px rgba(0,0,0,.04);">
  <h2 style="font-size:1.2rem;color:#0f172a;margin:0 0 1rem;padding-bottom:.6rem;border-bottom:2px solid #eff6ff;">Related Financial Calculators</h2>
  <ul style="list-style:none;padding:0;margin:0;display:grid;gap:.65rem;">
    <li><a href="<?php echo $baseUrl; ?>/calculators/retirement-saving" style="display:flex;align-items:center;gap:.65rem;padding:.7rem 1rem;background:#f8fafc;border-radius:8px;text-decoration:none;color:#1e293b;font-size:.93rem;font-weight:500;border:1px solid #e2e8f0;transition:background .15s;" onmouseover="this.style.background='#eff6ff'" onmouseout="this.style.background='#f8fafc'"><span>🧮</span><span><strong>Retirement Savings Calculator</strong> — See how long your nest egg lasts with location-specific projections</span></a></li>
    <li><a href="<?php echo $baseUrl; ?>/calculators/cd-interest.php" style="display:flex;align-items:center;gap:.65rem;padding:.7rem 1rem;background:#f8fafc;border-radius:8px;text-decoration:none;color:#1e293b;font-size:.93rem;font-weight:500;border:1px solid #e2e8f0;transition:background .15s;" onmouseover="this.style.background='#eff6ff'" onmouseout="this.style.background='#f8fafc'"><span>💰</span><span><strong>CD Interest Calculator</strong> — Calculate returns on certificates of deposit before retirement</span></a></li>
    <li><a href="<?php echo $baseUrl; ?>/business/roi-calculator" style="display:flex;align-items:center;gap:.65rem;padding:.7rem 1rem;background:#f8fafc;border-radius:8px;text-decoration:none;color:#1e293b;font-size:.93rem;font-weight:500;border:1px solid #e2e8f0;transition:background .15s;" onmouseover="this.style.background='#eff6ff'" onmouseout="this.style.background='#f8fafc'"><span>📈</span><span><strong>ROI Calculator</strong> — Calculate return on investment for portfolio assets and real estate</span></a></li>
    <li><a href="<?php echo $baseUrl; ?>/blog/retirement-savings-longevity-calculator" style="display:flex;align-items:center;gap:.65rem;padding:.7rem 1rem;background:#f8fafc;border-radius:8px;text-decoration:none;color:#1e293b;font-size:.93rem;font-weight:500;border:1px solid #e2e8f0;transition:background .15s;" onmouseover="this.style.background='#eff6ff'" onmouseout="this.style.background='#f8fafc'"><span>📖</span><span><strong>Retirement Savings Guide</strong> — Full <?php echo date('Y'); ?> guide: 4% rule, withdrawal strategies, Social Security timing</span></a></li>
  </ul>
</section>
<?php require_once '../includes/footer.php'; ?>
