<?php
$currentYear = date('Y');
$pageTitle       = "Mortgage Calculator ($currentYear) — PITI Monthly Payment & Amortization | AmericaCalculator";
$metaDescription = "Free mortgage calculator $currentYear. Calculate monthly payment, total interest, and full amortization schedule for any US home loan. Supports 15, 20, and 30-year terms.";
$metaKeywords    = 'mortgage calculator, mortgage payment calculator, home loan calculator, monthly mortgage payment, mortgage amortization calculator, 30 year mortgage calculator, 15 year mortgage calculator';
$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'HowTo','name'=>'How to Calculate Monthly Mortgage Payments (PITI)','step'=>[
    ['@type'=>'HowToStep','name'=>'Enter home purchase price','text'=>'Input the purchase price of the property you intend to finance.'],
    ['@type'=>'HowToStep','name'=>'Specify down payment amount','text'=>'Enter your down payment dollar amount or percentage of purchase price.'],
    ['@type'=>'HowToStep','name'=>'Select loan term and interest rate','text'=>'Choose 15-year or 30-year fixed term and enter the quoted mortgage interest rate.'],
    ['@type'=>'HowToStep','name'=>'Include property taxes and insurance','text'=>'Add local annual real estate property taxes, homeowner insurance, and PMI/HOA if applicable.'],
    ['@type'=>'HowToStep','name'=>'Generate full payment schedule','text'=>'View principal & interest breakdown, total monthly payment, and complete amortization schedule.']
  ]],
  ['@type'=>'WebApplication','name'=>'Mortgage Calculator','url'=>'https://americacalculator.com/real-estate/mortgage-calculator',
   'description'=>"Calculate monthly mortgage payment, total interest, and amortization schedule for any US home loan.",
   'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All','offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Real Estate','item'=>'https://americacalculator.com/real-estate/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'Mortgage Calculator','item'=>'https://americacalculator.com/real-estate/mortgage-calculator'],
  ]],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'How do I calculate a mortgage payment?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Monthly payment = P × [r(1+r)^n] / [(1+r)^n − 1], where P = principal, r = monthly interest rate, n = number of payments. A $300,000 loan at 7% for 30 years produces a $1,996/month P+I payment.']],
    ['@type'=>'Question','name'=>'What is a good mortgage rate in '.$currentYear.'?','acceptedAnswer'=>['@type'=>'Answer','text'=>'In '.$currentYear.', 30-year fixed rates are generally in the 6.5%–7.5% range depending on credit score and lender. 15-year rates are typically 0.5–0.75% lower than 30-year rates.']],
    ['@type'=>'Question','name'=>'Does the monthly payment include taxes and insurance?','acceptedAnswer'=>['@type'=>'Answer','text'=>'This calculator shows principal and interest (P+I) only. Your full PITI payment includes property taxes, homeowners insurance, and PMI if your down payment is under 20%.']],
    ['@type'=>'Question','name'=>'How much house can I afford?','acceptedAnswer'=>['@type'=>'Answer','text'=>'A common guideline is to keep total housing costs (PITI) under 28% of gross monthly income. At $80,000/year income ($6,667/month), the target is under $1,867/month for housing.']],
    ['@type'=>'Question','name'=>'What credit score do I need to buy a house in '.$currentYear.'?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Conventional loans require a minimum 620 FICO score. FHA loans allow 580 with 3.5% down. Moving from a 680 to 760 FICO score can save $50,000+ in interest over 30 years.']],
    ['@type'=>'Question','name'=>'What is PMI and when can I cancel it?','acceptedAnswer'=>['@type'=>'Answer','text'=>'PMI is required on conventional loans with under 20% down. Under the Homeowners Protection Act, PMI must be automatically cancelled when your LTV reaches 78% of the original purchase price. You can request cancellation at 80% LTV.']],
    ['@type'=>'Question','name'=>'What is the difference between a fixed-rate and adjustable-rate mortgage?','acceptedAnswer'=>['@type'=>'Answer','text'=>'A fixed-rate mortgage locks your rate for the full term. An ARM starts lower but adjusts annually after the initial fixed period (typically 5, 7, or 10 years). ARMs suit buyers who plan to sell or refinance before the fixed period ends.']],
    ['@type'=>'Question','name'=>'How can I pay off my mortgage faster?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Five strategies: (1) Make one extra principal payment per year — shaves 4-5 years off a 30-year mortgage. (2) Round up monthly payments. (3) Switch to bi-weekly payments. (4) Apply tax refunds and bonuses to principal. (5) Refinance to a 15-year term when rates allow.']],
  ]],
]];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f8fafc;}
.rc-wrap{max-width:960px;margin:0 auto;padding:2rem 1.25rem 4rem;}
.rc-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}
.rc-bc a{color:#64748b;text-decoration:none;}
.rc-bc a:hover{color:#2563eb;}
.rc-hero h1{font-size:1.85rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.rc-hero p{font-size:.97rem;color:#64748b;line-height:1.65;margin:0 0 1.75rem;border-left:3px solid #2563eb;padding-left:.9rem;}
.rc-card{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden;margin-bottom:1.75rem;}
.rc-card-head{background:#1e40af;color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;}
.rc-body{padding:1.5rem;}
.rc-grid{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.rc-grid3{display:grid;grid-template-columns:1fr 1fr 1fr;gap:1rem;}
.rc-field{margin-bottom:1rem;}
.rc-field label{display:block;font-size:.85rem;font-weight:600;color:#1e293b;margin-bottom:.35rem;}
.rc-field input,.rc-field select{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.94rem;color:#0f172a;outline:none;box-sizing:border-box;background:#fff;transition:border-color .2s;}
.rc-field input:focus,.rc-field select:focus{border-color:#2563eb;}
.rc-field .hint{font-size:.73rem;color:#94a3b8;margin-top:.25rem;}
.rc-btn{width:100%;background:#1e40af;color:#fff;padding:13px;border:none;border-radius:8px;font-size:.97rem;font-weight:700;cursor:pointer;margin-top:.5rem;transition:background .2s;}
.rc-btn:hover{background:#1d4ed8;}
/* Results */
.rc-result{background:#eff6ff;border:1.5px solid #bfdbfe;border-radius:10px;padding:1.25rem 1.5rem;margin-top:1.25rem;}
.rc-result-primary{text-align:center;margin-bottom:1rem;}
.rc-result-primary .val{font-size:2.4rem;font-weight:800;color:#1e40af;display:block;line-height:1;}
.rc-result-primary .lbl{font-size:.83rem;color:#64748b;}
.rc-result-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:.65rem;}
.rc-stat{background:#fff;border-radius:8px;padding:.75rem;text-align:center;border:1px solid #dbeafe;}
.rc-stat .sv{display:block;font-size:1.05rem;font-weight:800;color:#1e40af;}
.rc-stat .sl{font-size:.7rem;color:#64748b;font-weight:600;}
/* Amortization table */
.rc-amort{margin-top:1.25rem;overflow-x:auto;}
.rc-amort table{width:100%;border-collapse:collapse;font-size:.82rem;}
.rc-amort th{background:#1e40af;color:#fff;padding:7px 10px;text-align:right;font-weight:600;}
.rc-amort th:first-child{text-align:left;}
.rc-amort td{padding:6px 10px;border-bottom:1px solid #f1f5f9;text-align:right;color:#334155;}
.rc-amort td:first-child{text-align:left;font-weight:600;}
.rc-amort tr:nth-child(even) td{background:#f8fafc;}
/* Content */
.rc-section{background:#fff;border-radius:12px;border:1px solid #e2e8f0;padding:1.75rem;margin-bottom:1.5rem;}
.rc-section h2{font-size:1.3rem;color:#0f172a;margin:0 0 .85rem;padding-bottom:.6rem;border-bottom:2px solid #eff6ff;}
.rc-section h3{font-size:1rem;color:#1e293b;margin:1.25rem 0 .5rem;}
.rc-section p{color:#475569;line-height:1.72;font-size:.95rem;margin-bottom:.9rem;}
.rc-section p:last-child{margin-bottom:0;}
.rc-section a{color:#1e40af;font-weight:600;}
.rc-section ul{color:#475569;padding-left:1.4rem;line-height:1.7;font-size:.95rem;margin-bottom:.9rem;}
.rc-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}
.rc-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.rc-faq-q{font-size:.94rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;}
.rc-faq-q::after{content:'+';color:#2563eb;font-size:1.2rem;flex-shrink:0;}
.rc-faq-item.open .rc-faq-q::after{content:'−';}
.rc-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.rc-faq-item.open .rc-faq-a{display:block;}
.rc-related{display:grid;grid-template-columns:repeat(auto-fit,minmax(175px,1fr));gap:.75rem;margin-top:.75rem;}
.rc-rel-link{display:block;background:#eff6ff;border:1.5px solid #bfdbfe;border-radius:8px;padding:.75rem 1rem;font-size:.85rem;font-weight:600;color:#1e40af;text-decoration:none;text-align:center;}
.rc-rel-link:hover{background:#dbeafe;}
@media(max-width:640px){.rc-grid,.rc-grid3,.rc-result-grid{grid-template-columns:1fr;}.rc-hero h1{font-size:1.5rem;}}
</style>
<main id="main-content">
<div class="rc-wrap">
  <div class="rc-bc"><a href="/">Home</a> › <a href="/real-estate/">Real Estate</a> › Mortgage Calculator</div>
  <div class="rc-hero">
    <h1>Mortgage Calculator (<?php echo $currentYear; ?>)</h1>
    <p>Calculate your monthly principal &amp; interest payment, total interest paid, and full amortization schedule for any US home loan.</p>
  </div>

  <div class="rc-card">
    <div class="rc-card-head">🏠 Mortgage Calculator</div>
    <div class="rc-body">
      <div class="rc-grid">
        <div class="rc-field"><label>Home Price ($)</label><input type="number" id="m-price" value="350000" min="0" step="1000"></div>
        <div class="rc-field"><label>Down Payment ($)</label><input type="number" id="m-down" value="70000" min="0" step="1000"></div>
      </div>
      <div class="rc-grid3">
        <div class="rc-field"><label>Interest Rate (%)</label><input type="number" id="m-rate" value="7.00" min="0.1" max="25" step="0.05"></div>
        <div class="rc-field"><label>Loan Term</label>
          <select id="m-term">
            <option value="30">30 Years</option>
            <option value="20">20 Years</option>
            <option value="15">15 Years</option>
            <option value="10">10 Years</option>
          </select>
        </div>
        <div class="rc-field"><label>Start Month</label>
          <select id="m-start">
            <?php $months=['January','February','March','April','May','June','July','August','September','October','November','December'];
            $cur=date('n')-1;
            foreach($months as $i=>$m) echo "<option value='".($i+1)."'".($i==$cur?' selected':'').">$m ".date('Y')."</option>"; ?>
          </select>
        </div>
      </div>
      <div class="rc-grid">
        <div class="rc-field"><label>Annual Property Tax ($)</label><input type="number" id="m-tax" value="3500" min="0" step="100"><div class="hint">Optional — for full PITI estimate</div></div>
        <div class="rc-field"><label>Annual Insurance ($)</label><input type="number" id="m-in" value="1200" min="0" step="100"><div class="hint">Homeowners insurance/yr</div></div>
      </div>
      <button class="rc-btn" onclick="calcMortgage()">⚡ Calculate Mortgage Payment</button>

      <div class="rc-result" id="m-result" style="display:none;">
        <div class="rc-result-primary">
          <span class="val" id="m-piti">$0</span>
          <span class="lbl">Estimated Monthly Payment (PITI)</span>
        </div>
        <div class="rc-result-grid">
          <div class="rc-stat"><span class="sv" id="m-pi">$0</span><span class="sl">Principal &amp; Interest</span></div>
          <div class="rc-stat"><span class="sv" id="m-total-int">$0</span><span class="sl">Total Interest</span></div>
          <div class="rc-stat"><span class="sv" id="m-total-cost">$0</span><span class="sl">Total Loan Cost</span></div>
          <div class="rc-stat"><span class="sv" id="m-loan-amt">$0</span><span class="sl">Loan Amount</span></div>
          <div class="rc-stat"><span class="sv" id="m-tax-mo">$0</span><span class="sl">Monthly Tax</span></div>
          <div class="rc-stat"><span class="sv" id="m-ins-mo">$0</span><span class="sl">Monthly Insurance</span></div>
        </div>
        <div class="rc-amort">
          <p style="font-size:.82rem;color:#475569;margin:.75rem 0 .4rem;font-weight:600;">Year-by-Year Amortization</p>
          <table><thead><tr><th>Year</th><th>Principal</th><th>Interest</th><th>Balance</th></tr></thead>
          <tbody id="m-amort-body"></tbody></table>
        </div>
      </div>
    </div>
  </div>

    <div class="rc-section">
    <h2>Understanding Your Total Monthly Mortgage Payment (PITI)</h2>
    <p>When you take out a home loan, your monthly housing payment is rarely just principal and interest. In the United States, lenders bundle multiple expenses into a single monthly escrow payment commonly known by the acronym <strong>PITI: Principal, Interest, Taxes, and Insurance</strong>.</p>

    <table style="width:100%;border-collapse:collapse;margin:1.25rem 0;font-size:.9rem;">
      <thead>
        <tr style="background:#f1f5f9;color:#0f172a;">
          <th style="padding:10px 12px;border:1px solid #e2e8f0;text-align:left;">PITI Component</th>
          <th style="padding:10px 12px;border:1px solid #e2e8f0;text-align:left;">Where the Money Goes</th>
          <th style="padding:10px 12px;border:1px solid #e2e8f0;text-align:left;">Typical Monthly Cost</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="padding:10px 12px;border:1px solid #e2e8f0;"><strong>Principal</strong></td>
          <td style="padding:10px 12px;border:1px solid #e2e8f0;">Directly repays the borrowed loan balance, building home equity.</td>
          <td style="padding:10px 12px;border:1px solid #e2e8f0;">Starts lower, increases each month as balance drops.</td>
        </tr>
        <tr>
          <td style="padding:10px 12px;border:1px solid #e2e8f0;"><strong>Interest</strong></td>
          <td style="padding:10px 12px;border:1px solid #e2e8f0;">The fee paid to the lender for borrowing the principal.</td>
          <td style="padding:10px 12px;border:1px solid #e2e8f0;">Starts highest, decreases steadily over the loan term.</td>
        </tr>
        <tr>
          <td style="padding:10px 12px;border:1px solid #e2e8f0;"><strong>Property Taxes</strong></td>
          <td style="padding:10px 12px;border:1px solid #e2e8f0;">County/city tax held in escrow to fund public schools, roads, and emergency services.</td>
          <td style="padding:10px 12px;border:1px solid #e2e8f0;">$150 &ndash; $600/month (varies from 0.3% in HI to 2.2% in NJ).</td>
        </tr>
        <tr>
          <td style="padding:10px 12px;border:1px solid #e2e8f0;"><strong>Homeowners Insurance</strong></td>
          <td style="padding:10px 12px;border:1px solid #e2e8f0;">Protects against fire, storms, liability, and hazard damages.</td>
          <td style="padding:10px 12px;border:1px solid #e2e8f0;">$80 &ndash; $250/month (higher in coastal/storm-prone states).</td>
        </tr>
        <tr>
          <td style="padding:10px 12px;border:1px solid #e2e8f0;"><strong>PMI / MIP (if applicable)</strong></td>
          <td style="padding:10px 12px;border:1px solid #e2e8f0;">Required on conventional loans with under 20% down or FHA loans.</td>
          <td style="padding:10px 12px;border:1px solid #e2e8f0;">$100 &ndash; $300/month (until 20% home equity is attained).</td>
        </tr>
      </tbody>
    </table>

    <h3>15-Year Fixed vs. 30-Year Fixed Mortgage Comparison</h3>
    <p>Choosing between a 15-year and a 30-year fixed loan is one of the most critical decisions for any homebuyer. On a $300,000 mortgage at current <?php echo $currentYear;?> market rates:</p>
    <ul>
      <li><strong>30-Year Fixed (at 6.85%):</strong> Monthly Principal &amp; Interest is approximately <strong>$1,966</strong>. Total lifetime interest paid is <strong>$407,760</strong>. Total loan payout equals $707,760.</li>
      <li><strong>15-Year Fixed (at 6.15%):</strong> Monthly Principal &amp; Interest is approximately <strong>$2,558</strong> ($592 higher per month). Total lifetime interest paid is <strong>$160,440</strong>. Total loan payout equals $460,440.</li>
      <li><strong>The Net Difference:</strong> The 15-year mortgage saves you <strong>$247,320 in pure interest</strong> and cuts 15 full years off your debt obligations.</li>
    </ul>

    <h3>How Lenders Qualify You: The 28/36 Debt-to-Income (DTI) Rule</h3>
    <p>To determine the maximum mortgage you can afford, mortgage underwriters evaluate your Debt-to-Income (DTI) ratio using two standard benchmarks:</p>
    <p><strong>1. Front-End DTI (Housing Ratio):</strong> Your total monthly housing expenses (PITI + HOA fees) should generally not exceed <strong>28%</strong> of your gross pre-tax monthly income.</p>
    <p><strong>2. Back-End DTI (Total Debt Ratio):</strong> Your total monthly debt obligations (PITI plus auto loans, student loans, minimum credit card payments, and child support) should not exceed <strong>36%</strong> of your gross monthly income (or up to 43% to 50% for select FHA and Fannie Mae automated approvals).</p>
  </div>

  <div class="rc-section">
    <h2>PMI: What It Is, What It Costs, and When It Drops</h2>
    <p>Private Mortgage Insurance (PMI) is one of the most misunderstood costs in US homebuying. It protects the <em>lender</em> (not you) against default risk when you put down less than 20% of the purchase price. It adds real cost to your monthly payment — typically <strong>0.5% to 1.5% of the loan amount per year</strong>, or $100 to $375 per month on a $300,000 loan.</p>
    <p>The good news: PMI is not permanent on conventional loans. The <strong>Homeowners Protection Act (HPA)</strong> gives you two automatic rights:</p>
    <ul>
      <li><strong>Automatic cancellation</strong> at 78% LTV — your lender must cancel PMI when your loan balance drops to 78% of the <em>original</em> purchase price, based on scheduled amortization.</li>
      <li><strong>Requested cancellation at 80% LTV</strong> — once you reach 80% LTV (either via payments, extra payments, or home appreciation), you can formally request PMI removal. The lender may require a new appraisal to confirm current value.</li>
    </ul>
    <p>FHA loans work differently: if your down payment was under 10%, Mortgage Insurance Premium (MIP) stays for the entire loan life — the only escape is refinancing into a conventional loan once you have 20% equity.</p>
    <p><strong>Strategy tip:</strong> In markets where home values have risen sharply since purchase, it often makes sense to order a new appraisal proactively. If the appraisal confirms you now have 20%+ equity based on current market value (not original purchase price), many lenders will remove PMI immediately, saving hundreds per month.</p>
  </div>

  <div class="rc-section">
    <h2>Fixed-Rate vs. Adjustable-Rate Mortgage (ARM) — Comparison</h2>
    <p>After locking in a fixed rate, your principal and interest payment never changes. An ARM starts lower but can increase significantly after the initial fixed period. Here is how the two loan types compare on a $350,000 loan in <?php echo $currentYear; ?>:</p>
    <table style="width:100%;border-collapse:collapse;margin:1.25rem 0;font-size:.9rem;">
      <thead>
        <tr style="background:#1e40af;color:#fff;">
          <th style="padding:10px 12px;border:1px solid #bfdbfe;text-align:left;">Feature</th>
          <th style="padding:10px 12px;border:1px solid #bfdbfe;text-align:left;">30-Year Fixed</th>
          <th style="padding:10px 12px;border:1px solid #bfdbfe;text-align:left;">7/1 ARM</th>
          <th style="padding:10px 12px;border:1px solid #bfdbfe;text-align:left;">15-Year Fixed</th>
        </tr>
      </thead>
      <tbody>
        <tr><td style="padding:9px 12px;border:1px solid #e2e8f0;"><strong>Starting Rate</strong></td><td style="padding:9px 12px;border:1px solid #e2e8f0;">~7.00%</td><td style="padding:9px 12px;border:1px solid #e2e8f0;">~6.25% (fixed 7 yrs)</td><td style="padding:9px 12px;border:1px solid #e2e8f0;">~6.35%</td></tr>
        <tr style="background:#f8fafc;"><td style="padding:9px 12px;border:1px solid #e2e8f0;"><strong>Starting P+I Payment</strong></td><td style="padding:9px 12px;border:1px solid #e2e8f0;">~$2,329/mo</td><td style="padding:9px 12px;border:1px solid #e2e8f0;">~$2,155/mo</td><td style="padding:9px 12px;border:1px solid #e2e8f0;">~$3,021/mo</td></tr>
        <tr><td style="padding:9px 12px;border:1px solid #e2e8f0;"><strong>Rate Stability</strong></td><td style="padding:9px 12px;border:1px solid #e2e8f0;">Fixed for 30 years</td><td style="padding:9px 12px;border:1px solid #e2e8f0;">Fixed 7 yrs, then annual adjustments</td><td style="padding:9px 12px;border:1px solid #e2e8f0;">Fixed for 15 years</td></tr>
        <tr style="background:#f8fafc;"><td style="padding:9px 12px;border:1px solid #e2e8f0;"><strong>Total Interest (full term)</strong></td><td style="padding:9px 12px;border:1px solid #e2e8f0;">~$488,000</td><td style="padding:9px 12px;border:1px solid #e2e8f0;">Unpredictable after Year 7</td><td style="padding:9px 12px;border:1px solid #e2e8f0;">~$194,000</td></tr>
        <tr><td style="padding:9px 12px;border:1px solid #e2e8f0;"><strong>Best For</strong></td><td style="padding:9px 12px;border:1px solid #e2e8f0;">Long-term homeowners, rate certainty</td><td style="padding:9px 12px;border:1px solid #e2e8f0;">Those planning to sell/refinance within 7 years</td><td style="padding:9px 12px;border:1px solid #e2e8f0;">Accelerated payoff, lower total interest</td></tr>
      </tbody>
    </table>
    <p>An ARM makes strategic sense only if you have a clear exit plan before the fixed period ends. If you plan to stay in the home long-term, the rate certainty of a fixed mortgage is almost always worth the slightly higher initial rate.</p>
  </div>

  <div class="rc-section">
    <h2>5 Ways to Pay Off Your Mortgage Faster</h2>
    <p>Every dollar of extra principal you pay reduces your remaining balance — and because future interest accrues on that balance, early extra payments have a multiplier effect on interest saved. Here are five proven strategies:</p>
    <ul>
      <li><strong>Make one extra principal-only payment per year.</strong> Applied directly to principal (not into your escrow account), a single annual extra payment on a 30-year mortgage shaves 4–5 years off the payoff date and saves tens of thousands in interest.</li>
      <li><strong>Round up your monthly payment.</strong> If your payment is $1,863, rounding up to $2,000 sends an extra $137 to principal each month — adding up to $1,644 per year in accelerated paydown.</li>
      <li><strong>Switch to bi-weekly payments.</strong> By splitting your monthly payment in half and paying every two weeks, you make 26 half-payments instead of 24 (12 months × 2). This equates to one full extra payment per year on autopilot.</li>
      <li><strong>Apply all windfalls to principal.</strong> Tax refunds (average US refund: ~$3,100), bonuses, or inheritances applied to principal in lump sums dramatically accelerate payoff timelines.</li>
      <li><strong>Refinance to a shorter term.</strong> If rates drop 1%+ below your current rate, refinancing from a 30-year to a 15-year term restructures your loan to build equity twice as fast, though the monthly payment increases.</li>
    </ul>
  </div>

  <div class="rc-section">
    <h2>Worked Example: $425,000 Home Purchase in <?php echo $currentYear; ?></h2>
    <p>Let's walk through a complete PITI calculation for a realistic US homebuyer scenario.</p>
    <p><strong>Scenario:</strong> A couple in suburban Dallas, TX purchases a $425,000 home. They put 10% down ($42,500) and take a 30-year fixed mortgage at 7.00% interest. Annual property tax is $6,800 (1.6% effective rate). Annual homeowners insurance is $2,400. PMI applies at 0.85% of the loan amount annually.</p>
    <ul>
      <li><strong>Loan Amount:</strong> $425,000 − $42,500 = <strong>$382,500</strong></li>
      <li><strong>Monthly Rate (r):</strong> 7.00% ÷ 12 = <strong>0.5833%</strong></li>
      <li><strong>P+I Payment:</strong> $382,500 × [0.005833 × (1.005833)^360] ÷ [(1.005833)^360 − 1] = <strong>$2,545/month</strong></li>
      <li><strong>Monthly Property Tax:</strong> $6,800 ÷ 12 = <strong>$567/month</strong></li>
      <li><strong>Monthly Insurance:</strong> $2,400 ÷ 12 = <strong>$200/month</strong></li>
      <li><strong>Monthly PMI:</strong> ($382,500 × 0.0085) ÷ 12 = <strong>$271/month</strong></li>
      <li><strong>Total PITI:</strong> $2,545 + $567 + $200 + $271 = <strong>$3,583/month</strong></li>
    </ul>
    <p>To qualify under the 28% front-end DTI rule, this couple would need a gross monthly income of at least <strong>$12,796/month ($153,552/year)</strong>. PMI can be cancelled once the loan balance drops to $340,000 (80% of $425,000 purchase price) — approximately at month 94 (Year 8) on a standard amortization schedule.</p>
  </div>

  <div class="rc-section">
    <h2>3 Tips to Get a Lower Mortgage Rate</h2>
    <ul>
      <li><strong>Improve your credit score before applying.</strong> Moving from a 680 to a 740 FICO score can reduce your 30-year mortgage rate by 0.375–0.625%, which on a $350,000 loan saves over $56,000 in lifetime interest. Pay down revolving balances to under 30% utilization 3–6 months before applying.</li>
      <li><strong>Shop at least 3–5 lenders.</strong> Freddie Mac research found that borrowers who obtain 5 mortgage quotes save an average of $3,000 over the life of the loan versus those who accept the first offer. Rate shopping within a 45-day window counts as only a single credit inquiry.</li>
      <li><strong>Consider buying mortgage points.</strong> One discount point costs 1% of the loan amount (e.g., $3,500 on a $350,000 loan) and typically reduces your rate by 0.25%. Calculate your break-even date (cost ÷ monthly savings) — if you plan to stay longer than that, buying points makes financial sense.</li>
    </ul>
  </div>

  <div class="rc-section">
    <div style="background:#eff6ff;border:1px solid #bfdbfe;border-radius:12px;padding:18px 22px;margin:24px 0;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:14px;">
      <div style="display:flex;align-items:center;gap:14px;">
        <div style="width:42px;height:42px;background:#2563eb;color:#fff;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
        </div>
        <div>
          <strong style="color:#0f172a;font-size:1rem;display:block;">Download the Free 30-Year Amortization Schedule (Excel .xlsx)</strong>
          <span style="font-size:0.85rem;color:#475569;">Includes full 360-month waterfall schedule, extra monthly payment modeling, and total interest saved.</span>
        </div>
      </div>
      <div style="display:flex;gap:10px;align-items:center;">
        <a href="/downloads/files/loan-amortization-schedule-extra-payments-2026.xlsx" download style="background:#0f172a;color:#fff;font-size:0.85rem;font-weight:700;padding:9px 16px;border-radius:8px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;">Download Excel (.xlsx)</a>
        <a href="/downloads/" style="font-size:0.83rem;font-weight:700;color:#2563eb;text-decoration:none;">All Templates &rarr;</a>
      </div>
    </div>

    <h2>Frequently Asked Questions</h2>
    <p>Monthly principal and interest (P&amp;I) uses standard amortization: <strong>M = P × [r(1+r)^n] / [(1+r)^n − 1]</strong> where P is the loan amount, r is the monthly interest rate, and n is the total number of payments.</p>
    <p>Your full PITI payment also includes monthly property tax (annual / 12), homeowners insurance (annual / 12), and PMI if your down payment is under 20% of the purchase price.</p>
    <h3>2026 Average Mortgage Rates (30-Year Fixed)</h3>
    <ul>
      <li>Excellent credit (760+): 6.5%–7.0%</li>
      <li>Good credit (700–759): 6.75%–7.25%</li>
      <li>Fair credit (640–699): 7.25%–8.0%</li>
      <li>15-year fixed typically runs 0.5%–0.75% below 30-year</li>
    </ul>
  </div>

  <div class="rc-section">
    <div style="background:#eff6ff;border:1px solid #bfdbfe;border-radius:12px;padding:18px 22px;margin:24px 0;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:14px;">
      <div style="display:flex;align-items:center;gap:14px;">
        <div style="width:42px;height:42px;background:#2563eb;color:#fff;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
        </div>
        <div>
          <strong style="color:#0f172a;font-size:1rem;display:block;">Download the Free 30-Year Amortization Schedule (Excel .xlsx)</strong>
          <span style="font-size:0.85rem;color:#475569;">Includes full 360-month waterfall schedule, extra monthly payment modeling, and total interest saved.</span>
        </div>
      </div>
      <div style="display:flex;gap:10px;align-items:center;">
        <a href="/downloads/files/loan-amortization-schedule-extra-payments-2026.xlsx" download style="background:#0f172a;color:#fff;font-size:0.85rem;font-weight:700;padding:9px 16px;border-radius:8px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;">Download Excel (.xlsx)</a>
        <a href="/downloads/" style="font-size:0.83rem;font-weight:700;color:#2563eb;text-decoration:none;">All Templates &rarr;</a>
      </div>
    </div>

    <h2>Frequently Asked Questions</h2>
    <?php $faqs=[
      ['How do I calculate a mortgage payment?','Monthly payment = P × [r(1+r)^n] / [(1+r)^n − 1]. A $280,000 loan at 7% for 30 years = $1,863/month P+I. Enter your numbers above for an instant result.'],
      ['What is included in a mortgage payment?','P+I (principal and interest) is the base payment. Most lenders also collect monthly escrow for property taxes and homeowners insurance, making the full payment PITI. If your down payment is under 20%, PMI is also added.'],
      ['Is a 15-year or 30-year mortgage better?','A 15-year mortgage saves tens of thousands in interest but has a higher monthly payment. A 30-year mortgage has a lower payment but you pay far more interest over time. Use the term dropdown above to compare both scenarios instantly.'],
      ['What credit score do I need for a mortgage?','Most conventional loans require a minimum 620 FICO score. FHA loans allow scores as low as 580 with 3.5% down. Better scores qualify for lower rates, which significantly reduces total interest paid over the loan term.'],
      ['What is PMI and can I remove it?','Private Mortgage Insurance (PMI) is required on conventional loans with under 20% down. Under the Homeowners Protection Act, PMI is automatically cancelled when your loan-to-value ratio reaches 78% of the original purchase price. You can request cancellation earlier at 80% LTV.'],
      ['What is a good down payment for a house?','A 20% down payment eliminates PMI and gives you immediate equity cushion, but is not required. FHA loans allow 3.5% down, conventional loans allow 3–5% down for first-time buyers. USDA and VA loans allow 0% down for eligible borrowers.'],
      ['Can I lock in a mortgage rate?','Yes. Most lenders offer rate locks for 30, 45, or 60 days at the time of application approval. A rate lock protects you if rates rise before your closing date. Some lenders offer float-down options that let you capture a lower rate if market rates fall during the lock period.'],
      ['How does refinancing work?','Refinancing replaces your existing mortgage with a new loan, typically to lower your rate, change your term, or cash out equity. The break-even point is calculated as closing costs divided by monthly savings. If you plan to stay in the home beyond that point, refinancing usually makes financial sense.'],
    ];
    foreach($faqs as $f): ?>
    <div class="rc-faq-item"><div class="rc-faq-q"><?php echo $f[0];?></div><div class="rc-faq-a"><?php echo $f[1];?></div></div>
    <?php endforeach;?>
  </div>

  <div class="rc-section">
    <h2>Related Real Estate Calculators</h2>
    <div class="rc-related">
      <a href="/real-estate/down-payment-calculator" class="rc-rel-link">⬇️ Down Payment Calculator</a>
      <a href="/real-estate/closing-cost-calculator" class="rc-rel-link">🧾 Closing Cost Calculator</a>
      <a href="/real-estate/rent-vs-buy-calculator" class="rc-rel-link">🆚 Rent vs Buy Calculator</a>
      <a href="/real-estate/cash-flow-calculator" class="rc-rel-link">💵 Cash Flow Calculator</a>
      <a href="/real-estate/dscr-calculator" class="rc-rel-link">📊 DSCR Calculator</a>
      <a href="/real-estate/mortgage-refinance-calculator" class="rc-rel-link">🔄 Refinance Calculator</a>
      <a href="/loan-calculators/debt-to-income-calculator" class="rc-rel-link">📉 DTI Calculator</a>
      <a href="/real-estate/property-tax-calculator" class="rc-rel-link">🏛️ Property Tax Calculator</a>
      <a href="/real-estate/" class="rc-rel-link">🏘️ All Real Estate Tools</a>
    </div>
  </div>
</div>
</main>
<script>
function fmtC(v){return '$'+Math.round(Math.abs(v)).toLocaleString('en-US');}
function fmtD(v){return '$'+Math.abs(v).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g,',');}
function calcMortgage(){
  var price=parseFloat(document.getElementById('m-price').value)||0;
  var down=parseFloat(document.getElementById('m-down').value)||0;
  var rate=parseFloat(document.getElementById('m-rate').value)||0;
  var term=parseInt(document.getElementById('m-term').value)||30;
  var tax=parseFloat(document.getElementById('m-tax').value)||0;
  var ins=parseFloat(document.getElementById('m-ins').value)||0;
  var P=price-down; if(P<=0)return;
  var r=rate/100/12, n=term*12;
  var pi=r===0?P/n:P*(r*Math.pow(1+r,n))/(Math.pow(1+r,n)-1);
  var taxMo=tax/12, insMo=ins/12;
  var piti=pi+taxMo+insMo;
  var totalInt=pi*n-P;
  document.getElementById('m-piti').textContent=fmtD(piti);
  document.getElementById('m-pi').textContent=fmtD(pi);
  document.getElementById('m-total-int').textContent=fmtC(totalInt);
  document.getElementById('m-total-cost').textContent=fmtC(pi*n);
  document.getElementById('m-loan-amt').textContent=fmtC(P);
  document.getElementById('m-tax-mo').textContent=fmtD(taxMo);
  document.getElementById('m-ins-mo').textContent=fmtD(insMo);
  // Amortization by year
  var bal=P, tbody='';
  for(var y=1;y<=term;y++){
    var yPrin=0,yInt=0;
    for(var m=0;m<12;m++){var iP=bal*r,pP=pi-iP;yInt+=iP;yPrin+=pP;bal-=pP;}
    if(bal<0)bal=0;
    tbody+='<tr><td>'+y+'</td><td>'+fmtC(yPrin)+'</td><td>'+fmtC(yInt)+'</td><td>'+fmtC(Math.max(0,bal))+'</td></tr>';
  }
  document.getElementById('m-amort-body').innerHTML=tbody;
  document.getElementById('m-result').style.display='block';
}
document.querySelectorAll('#m-price,#m-down,#m-rate,#m-term,#m-tax,#m-ins').forEach(function(el){el.addEventListener('input',calcMortgage);});
calcMortgage();
document.querySelectorAll('.rc-faq-q').forEach(function(q){q.addEventListener('click',function(){var i=this.closest('.rc-faq-item'),w=i.classList.contains('open');document.querySelectorAll('.rc-faq-item').forEach(function(x){x.classList.remove('open');});if(!w)i.classList.add('open');});});
</script>
<?php require_once '../includes/footer.php'; ?>

