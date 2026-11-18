<?php
$currentYear = date('Y');
$pageTitle       = "Rental Cash Flow Calculator ($currentYear) | NOI & ROI";
$metaDescription = "Free rental property cash flow calculator $currentYear. Calculate monthly cash flow, NOI, cap rate & cash-on-cash return. Includes mortgage, taxes, insurance, vacancy & maintenance.";
$metaKeywords    = 'rental property cash flow calculator, real estate cash flow calculator, monthly cash flow rental property, rental income calculator, investment property cash flow, NOI calculator, cap rate calculator, cash on cash return calculator, 1% rule calculator, 50% rule real estate';

// Enhanced Schema Data
$schemaData = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebApplication',
            'name' => 'Rental Property Cash Flow Calculator',
            'url' => 'https://americacalculator.com/real-estate/cash-flow-calculator',
            'description' => 'Calculate monthly and annual net cash flow, NOI, cap rate, and cash-on-cash return for any rental property after all expenses and mortgage payments.',
            'applicationCategory' => 'FinanceApplication',
            'operatingSystem' => 'All',
            'offers' => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD'],
            'featureList' => 'Monthly cash flow, Annual cash flow, NOI calculator, Cap rate calculator, Cash-on-cash return, Mortgage P+I calculator, Vacancy rate calculator, Property management fee calculator, 1% rule checker, 50% rule estimator',
            'screenshot' => 'https://americacalculator.com/images/cash-flow-calculator-screenshot.jpg'
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Real Estate', 'item' => 'https://americacalculator.com/real-estate/'],
                ['@type' => 'ListItem', 'position' => 3, 'name' => 'Cash Flow Calculator', 'item' => 'https://americacalculator.com/real-estate/cash-flow-calculator'],
            ]
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'What is a good monthly cash flow for a rental property?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Most investors target at least $100–$200 positive cash flow per month per unit as a minimum. Properties producing $300–$500+/month are considered strong cash flow deals. Negative cash flow means the property costs money every month and requires appreciation to profit.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How do you calculate rental property cash flow?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Cash Flow = Gross Rent − Vacancy Loss − Operating Expenses − Mortgage Payment (P+I). Operating expenses include property tax, insurance, maintenance, management fees, and HOA. Use a rental property cash flow calculator to automate this calculation and see monthly and annual breakdowns.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What expenses should I include in a cash flow analysis?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Include: mortgage P+I, property taxes, insurance, maintenance (1% of property value per year), property management (8–12% of rent), vacancy reserve (5–10%), HOA fees, utilities (if landlord-paid), and a CapEx reserve for major repairs like roofs and HVAC.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What is the 1% rule for rental property?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'The 1% rule says monthly rent should be at least 1% of the purchase price. A $200,000 property needs $2,000/month rent to pass. It is a quick screening tool — always run a full cash flow analysis before buying.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What is the 50% rule in real estate investing?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'The 50% rule estimates that operating expenses (excluding mortgage) equal about 50% of gross rental income. If a property rents for $2,000/month, expect roughly $1,000 in non-mortgage expenses. This is a quick screening tool, not a replacement for detailed analysis.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What is cash-on-cash return on a rental property?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Cash-on-cash return measures the annual cash flow divided by the total cash invested (down payment + closing costs + repairs). A $10,000 annual cash flow on a $50,000 investment equals 20% cash-on-cash return. Most investors target 8-12% or higher.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What is a cap rate in real estate?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Cap rate (capitalization rate) = Net Operating Income / Property Purchase Price. A $20,000 NOI on a $250,000 property = 8% cap rate. Higher cap rates indicate better cash flow relative to price. Cap rates vary by market — 4-6% is common in hot markets, 8-12% in cash flow markets.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Should I include property management fees if I self-manage?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes. Property management is a labor expense whether you do it or hire it out. Include 8-12% in your analysis. If you self-manage and the property still cash flows with management fees included, you have a true passive income property when you eventually hand it off.'
                    ]
                ]
            ]
        ],
        [
            '@type' => 'HowTo',
            'name' => 'How to Calculate Rental Property Cash Flow',
            'description' => 'Step-by-step guide to calculating rental property cash flow using a calculator.',
            'totalTime' => 'PT5M',
            'supply' => ['Rental property financial data', 'Calculator'],
            'tool' => ['Rental Property Cash Flow Calculator'],
            'step' => [
                [
                    '@type' => 'HowToStep',
                    'position' => 1,
                    'name' => 'Enter Property Purchase Price',
                    'text' => 'Input the total purchase price of the rental property. This is used to calculate cap rate and cash-on-cash return.',
                    'url' => 'https://americacalculator.com/real-estate/cash-flow-calculator#step1'
                ],
                [
                    '@type' => 'HowToStep',
                    'position' => 2,
                    'name' => 'Enter Down Payment and Loan Terms',
                    'text' => 'Input your down payment percentage, mortgage interest rate, and loan term. The calculator will auto-compute your monthly P+I payment.',
                    'url' => 'https://americacalculator.com/real-estate/cash-flow-calculator#step2'
                ],
                [
                    '@type' => 'HowToStep',
                    'position' => 3,
                    'name' => 'Enter Rental Income and Vacancy Rate',
                    'text' => 'Input the monthly rent you expect to collect and your estimated vacancy rate (typically 5-10%).',
                    'url' => 'https://americacalculator.com/real-estate/cash-flow-calculator#step3'
                ],
                [
                    '@type' => 'HowToStep',
                    'position' => 4,
                    'name' => 'Enter All Operating Expenses',
                    'text' => 'Add property taxes, insurance, maintenance, property management fees, HOA, and other monthly expenses.',
                    'url' => 'https://americacalculator.com/real-estate/cash-flow-calculator#step4'
                ],
                [
                    '@type' => 'HowToStep',
                    'position' => 5,
                    'name' => 'Review Your Results',
                    'text' => 'The calculator displays monthly cash flow, annual cash flow, NOI, cap rate, and cash-on-cash return. Use these metrics to evaluate the investment.',
                    'url' => 'https://americacalculator.com/real-estate/cash-flow-calculator#step5'
                ]
            ]
        ]
    ]
];

require_once '../includes/header.php';
require_once '../includes/helpers.php';
require_once '../includes/adsense.php';
?>
<style>
body{background:#f8fafc;}
.rc-wrap{max-width:960px;margin:0 auto;padding:2rem 1.25rem 4rem;}
.rc-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}.rc-bc a{color:#64748b;text-decoration:none;}
.rc-hero h1{font-size:1.85rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.rc-hero p{font-size:.97rem;color:#64748b;line-height:1.65;margin:0 0 1.75rem;border-left:3px solid #059669;padding-left:.9rem;}
.rc-card{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden;margin-bottom:1.75rem;}
.rc-card-head{background:#065f46;color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;}
.rc-body{padding:1.5rem;}
.rc-grid{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.rc-field{margin-bottom:1rem;}
.rc-field label{display:block;font-size:.85rem;font-weight:600;color:#1e293b;margin-bottom:.35rem;}
.rc-field input,.rc-field select{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.94rem;color:#0f172a;outline:none;box-sizing:border-box;background:#fff;transition:border-color .2s;}
.rc-field input:focus{border-color:#059669;}
.rc-field .hint{font-size:.73rem;color:#94a3b8;margin-top:.25rem;}
.rc-btn{width:100%;background:#065f46;color:#fff;padding:13px;border:none;border-radius:8px;font-size:.97rem;font-weight:700;cursor:pointer;margin-top:.5rem;}
.rc-btn:hover{background:#047857;}
.rc-result{background:#f0fdf4;border:1.5px solid #bbf7d0;border-radius:10px;padding:1.25rem 1.5rem;margin-top:1.25rem;}
.rc-result-primary{text-align:center;margin-bottom:1rem;}
.rc-result-primary .val{font-size:2.4rem;font-weight:800;display:block;line-height:1;}
.rc-result-primary .lbl{font-size:.83rem;color:#64748b;}
.rc-stat-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:.65rem;}
.rc-stat{background:#fff;border-radius:8px;padding:.75rem;text-align:center;border:1px solid #d1fae5;}
.rc-stat .sv{display:block;font-size:1.05rem;font-weight:800;}
.rc-stat .sl{font-size:.7rem;color:#64748b;font-weight:600;}
.pos{color:#059669;}.neg{color:#dc2626;}
.rc-lines{margin-top:1rem;background:#fff;border-radius:8px;border:1px solid #d1fae5;padding:.75rem 1rem;}
.rc-line{display:flex;justify-content:space-between;padding:.3rem 0;border-bottom:1px solid #f0fdf4;font-size:.86rem;}
.rc-line:last-child{border-bottom:none;font-weight:700;}
.rc-line .ll{color:#64748b;}.rc-line .lv{font-weight:600;color:#1e293b;}
.rc-section{background:#fff;border-radius:12px;border:1px solid #e2e8f0;padding:1.75rem;margin-bottom:1.5rem;}
.rc-section h2{font-size:1.3rem;color:#0f172a;margin:0 0 .85rem;padding-bottom:.6rem;border-bottom:2px solid #f0fdf4;}
.rc-section h3{font-size:1.05rem;color:#0f172a;margin:1.2rem 0 .6rem;}
.rc-section p{color:#475569;line-height:1.72;font-size:.95rem;margin-bottom:.9rem;}
.rc-section p:last-child{margin-bottom:0;}
.rc-section a{color:#059669;font-weight:600;}
.rc-section table{width:100%;border-collapse:collapse;margin:1rem 0;font-size:.9rem;}
.rc-section table th{background:#065f46;color:#fff;padding:10px;text-align:left;font-weight:600;}
.rc-section table td{padding:10px;border-bottom:1px solid #e2e8f0;}
.rc-section table tr:nth-child(even){background:#f8fafc;}
.rc-section ul,.rc-section ol{margin:.75rem 0 .75rem 1.5rem;color:#475569;line-height:1.72;font-size:.95rem;}
.rc-section li{margin-bottom:.4rem;}
.rc-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}
.rc-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.rc-faq-q{font-size:.94rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;}
.rc-faq-q::after{content:'+';color:#059669;font-size:1.2rem;flex-shrink:0;}
.rc-faq-item.open .rc-faq-q::after{content:'−';}
.rc-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.rc-faq-item.open .rc-faq-a{display:block;}
.rc-related{display:grid;grid-template-columns:repeat(auto-fit,minmax(175px,1fr));gap:.75rem;margin-top:.75rem;}
.rc-rel-link{display:block;background:#f0fdf4;border:1.5px solid #bbf7d0;border-radius:8px;padding:.75rem 1rem;font-size:.85rem;font-weight:600;color:#065f46;text-decoration:none;text-align:center;}
.rc-rel-link:hover{background:#dcfce7;}
@media(max-width:640px){.rc-grid,.rc-stat-grid{grid-template-columns:1fr;}.rc-hero h1{font-size:1.5rem;}.rc-stat-grid{grid-template-columns:1fr 1fr;}}
</style>
<main id="main-content">
<div class="rc-wrap">
  <div class="rc-bc"><a href="/">Home</a> › <a href="/real-estate/">Real Estate</a> › Cash Flow Calculator</div>

  <!-- AD #1: Above Hero -->
  

  <div class="rc-hero">
    <h1>Rental Property Cash Flow Calculator (<?php echo $currentYear;?>)</h1>
    <p>Calculate monthly and annual net cash flow, NOI, cap rate, and cash-on-cash return for any rental property. Includes built-in mortgage calculator, vacancy, taxes, insurance, maintenance, and property management fees.</p>
  </div>

  <!-- AD #2: Before Calculator -->
  <?php echo adMidContent1(); ?>

  <div class="rc-card">
    <div class="rc-card-head">💵 Rental Property Cash Flow Calculator</div>
    <div class="rc-body">
      <!-- Property & Financing Section -->
      <div class="rc-grid">
        <div class="rc-field"><label>Purchase Price ($)</label><input type="number" id="cf-price" value="200000" min="0" step="1000"></div>
        <div class="rc-field"><label>Down Payment (%)</label><input type="number" id="cf-down" value="20" min="0" max="100" step="5"><div class="hint">Typical: 20-25% for investment</div></div>
      </div>
      <div class="rc-grid">
        <div class="rc-field"><label>Interest Rate (%)</label><input type="number" id="cf-rate" value="7.0" min="0" max="20" step="0.125"><div class="hint">Current avg: 6.5-7.5%</div></div>
        <div class="rc-field"><label>Loan Term (Years)</label>
          <select id="cf-term">
            <option value="15">15 Years</option>
            <option value="20">20 Years</option>
            <option value="25">25 Years</option>
            <option value="30" selected>30 Years</option>
          </select>
        </div>
      </div>
      <div class="rc-grid">
        <div class="rc-field"><label>Closing Costs ($)</label><input type="number" id="cf-closing" value="4000" min="0" step="500"><div class="hint">Typical: 2-5% of price</div></div>
        <div class="rc-field"><label>Repair Costs ($)</label><input type="number" id="cf-repair" value="0" min="0" step="500"><div class="hint">Initial rehab/repairs</div></div>
      </div>

      <!-- Income Section -->
      <div class="rc-grid">
        <div class="rc-field"><label>Monthly Rent ($)</label><input type="number" id="cf-rent" value="1800" min="0" step="50"></div>
        <div class="rc-field"><label>Other Monthly Income ($)</label><input type="number" id="cf-other-income" value="0" min="0" step="25"><div class="hint">Laundry, parking, storage, etc.</div></div>
      </div>
      <div class="rc-grid">
        <div class="rc-field"><label>Vacancy Rate (%)</label><input type="number" id="cf-vac" value="5" min="0" max="50" step="0.5"><div class="hint">Typical: 5–10%</div></div>
        <div class="rc-field"><label>Management Fee (%)</label><input type="number" id="cf-mgmt" value="10" min="0" max="20" step="0.5"><div class="hint">0 if self-managing</div></div>
      </div>

      <!-- Expenses Section -->
      <div class="rc-grid">
        <div class="rc-field"><label>Annual Property Tax ($)</label><input type="number" id="cf-tax" value="2400" min="0" step="100"></div>
        <div class="rc-field"><label>Annual Insurance ($)</label><input type="number" id="cf-in" value="1200" min="0" step="100"></div>
      </div>
      <div class="rc-grid">
        <div class="rc-field"><label>Annual Maintenance ($)</label><input type="number" id="cf-maint" value="2000" min="0" step="100"><div class="hint">Rule of thumb: 1% of value</div></div>
        <div class="rc-field"><label>Annual CapEx Reserve ($)</label><input type="number" id="cf-capex" value="1500" min="0" step="100"><div class="hint">Roofs, HVAC, appliances</div></div>
      </div>
      <div class="rc-grid">
        <div class="rc-field"><label>HOA / Other Monthly ($)</label><input type="number" id="cf-hoa" value="0" min="0" step="25"></div>
        <div class="rc-field"><label>Utilities (Landlord Paid) ($/mo)</label><input type="number" id="cf-utilitie" value="0" min="0" step="25"><div class="hint">0 if tenant pays all</div></div>
      </div>

      <button class="rc-btn" onclick="calcCF()">⚡ Calculate Cash Flow</button>

      <div class="rc-result" id="cf-result" style="display:none;">
        <div class="rc-result-primary">
          <span class="val" id="cf-monthly">$0</span>
          <span class="lbl">Monthly Net Cash Flow</span>
        </div>
        <div class="rc-stat-grid">
          <div class="rc-stat"><span class="sv" id="cf-annual">$0</span><span class="sl">Annual Cash Flow</span></div>
          <div class="rc-stat"><span class="sv" id="cf-noi">$0</span><span class="sl">Monthly NOI</span></div>
          <div class="rc-stat"><span class="sv" id="cf-caprate">0%</span><span class="sl">Cap Rate</span></div>
          <div class="rc-stat"><span class="sv" id="cf-coc">0%</span><span class="sl">Cash-on-Cash Return</span></div>
          <div class="rc-stat"><span class="sv" id="cf-egi">$0</span><span class="sl">Effective Gross Income/mo</span></div>
          <div class="rc-stat"><span class="sv" id="cf-expense">$0</span><span class="sl">Total Expenses/mo</span></div>
        </div>
        <div class="rc-line">
          <div class="rc-line"><span class="ll">Gross Monthly Rent</span><span class="lv" id="cl-rent">—</span></div>
          <div class="rc-line"><span class="ll">Other Income</span><span class="lv" id="cl-other">—</span></div>
          <div class="rc-line"><span class="ll">Vacancy Loss</span><span class="lv neg" id="cl-vac">—</span></div>
          <div class="rc-line"><span class="ll">Effective Gross Income</span><span class="lv" id="cl-egi">—</span></div>
          <div class="rc-line" style="border-top:2px solid #e2e8f0;margin-top:.3rem;padding-top:.5rem;"><span class="ll"><strong>Operating Expenses</strong></span><span class="lv">—</span></div>
          <div class="rc-line"><span class="ll">Property Tax</span><span class="lv neg" id="cl-tax">—</span></div>
          <div class="rc-line"><span class="ll">Insurance</span><span class="lv neg" id="cl-in">—</span></div>
          <div class="rc-line"><span class="ll">Maintenance</span><span class="lv neg" id="cl-maint">—</span></div>
          <div class="rc-line"><span class="ll">CapEx Reserve</span><span class="lv neg" id="cl-capex">—</span></div>
          <div class="rc-line"><span class="ll">Management Fee</span><span class="lv neg" id="cl-mgmt">—</span></div>
          <div class="rc-line"><span class="ll">HOA / Other</span><span class="lv neg" id="cl-hoa">—</span></div>
          <div class="rc-line"><span class="ll">Utilities</span><span class="lv neg" id="cl-utilitie">—</span></div>
          <div class="rc-line"><span class="ll">Total Operating Expenses</span><span class="lv neg" id="cl-totalexp">—</span></div>
          <div class="rc-line" style="border-top:2px solid #e2e8f0;margin-top:.3rem;padding-top:.5rem;"><span class="ll"><strong>Net Operating Income (NOI)</strong></span><span class="lv" id="cl-noi">—</span></div>
          <div class="rc-line"><span class="ll">Mortgage P+I</span><span class="lv neg" id="cl-mort">—</span></div>
          <div class="rc-line" style="border-top:2px solid #065f46;margin-top:.3rem;padding-top:.5rem;"><span class="ll"><strong>Net Monthly Cash Flow</strong></span><span class="lv" id="cl-net">—</span></div>
          <div class="rc-line"><span class="ll">Cash Invested</span><span class="lv" id="cl-invested">—</span></div>
          <div class="rc-line"><span class="ll">1% Rule Check</span><span class="lv" id="cl-1pct">—</span></div>
          <div class="rc-line"><span class="ll">50% Rule Check</span><span class="lv" id="cl-50pct">—</span></div>
        </div>
      </div>
    </div>
  </div>

  <!-- AD #3: After Calculator -->
  <?php echo adMidContent2(); ?>

  <div class="rc-section">
    <h2>What Is Rental Property Cash Flow?</h2>
    <p>Cash flow is the money left over each month after collecting rent and paying every expense including the mortgage. Positive cash flow means the property is profitable immediately. Negative cash flow (an "alligator property") means you pay out of pocket every month and need appreciation to profit.</p>
    <p>The formula: <strong>Cash Flow = Effective Gross Income − Operating Expenses − Debt Service</strong>. Effective Gross Income is gross rent plus other income minus vacancy allowance. Operating expenses cover tax, insurance, maintenance, management, CapEx reserve, HOA, and utilities. Debt service is your monthly principal and interest payment.</p>
    <p>Smart investors never buy based on appreciation alone. Cash flow is the only metric that pays your bills while you wait for the property to appreciate. Use this calculator to aAnalyze any rental property before you make an offer.</p>
  </div>

  <div class="rc-section">
    <h2>How to Calculate Rental Property Cash Flow: The Complete Formula</h2>
    <p>Calculating rental property cash flow is straightforward once you know the formula. Here is the step-by-step breakdown that professional investors use:</p>
    <ol>
      <li><strong>Start with gross monthly rent.</strong> If you charge $2,000/month, that is your starting point.</li>
      <li><strong>Add other income.</strong> Laundry ($50), parking ($25), storage ($30) = $105 extra.</li>
      <li><strong>Subtract vacancy loss.</strong> At a 5% vacancy rate on $2,105, you lose $105.25/month. Your <strong>Effective Gross Income (EGI)</strong> is $1,999.75.</li>
      <li><strong>Subtract all operating expenses</strong> converted to monthly: property taxes ($200), insurance ($100), maintenance ($167), CapEx reserve ($125), management fee ($200 at 10%), HOA ($50), utilities ($0). Total operating expenses = $842.</li>
      <li><strong>Calculate Net Operating Income (NOI).</strong> NOI = $1,999.75 − $842 = <strong>$1,157.75/month</strong> or <strong>$13,893/year</strong>.</li>
      <li><strong>Subtract mortgage payment (P+I).</strong> If your principal and interest is $850, your <strong>net monthly cash flow</strong> = $1,157.75 − $850 = <strong>$307.75/month</strong> or <strong>$3,693/year</strong>.</li>
    </ol>
    <p>This $307.75/month is your true profit — the money that goes into your pocket after every bill is paid. It also represents a <strong>cash-on-cash return</strong> based on your total cash invested (down payment + closing costs + repairs).</p>
  </div>

  <div class="rc-section">
    <h2>What Is a Good Cash Flow for a Rental Property?</h2>
    <p>Not all positive cash flow is created equal. Here is how investors grade cash flow deals:</p>
    <table>
      <tr>
        <th>Monthly Cash Flow</th>
        <th>Grade</th>
        <th>Investor Take</th>
      </tr>
      <tr>
        <td>Negative ($0 or below)</td>
        <td style="color:#dc2626;"><strong>F — Alligator Property</strong></td>
        <td>You pay out of pocket every month. Only viable if massive appreciation is guaranteed.</td>
      </tr>
      <tr>
        <td>$1 – $99</td>
        <td style="color:#ea580c;"><strong>D — Thin Margin</strong></td>
        <td>One repair wipes out a year of profit. Too risky for most investors.</td>
      </tr>
      <tr>
        <td>$100 – $200</td>
        <td style="color:#ca8a04;"><strong>C — Minimum Viable</strong></td>
        <td>Acceptable for beginners or high-appreciation markets. Tight but workable.</td>
      </tr>
      <tr>
        <td>$200 – $300</td>
        <td style="color:#059669;"><strong>B — Solid Deal</strong></td>
        <td>Good buffer for unexpected expenses. Most experienced investors are happy here.</td>
      </tr>
      <tr>
        <td>$300 – $500</td>
        <td style="color:#059669;"><strong>A — Strong Cash Flow</strong></td>
        <td>Excellent margin. You can handle vacancies and repairs without stress.</td>
      </tr>
      <tr>
        <td>$500+</td>
        <td style="color:#065f46;"><strong>A+ — Home Run</strong></td>
        <td>Rare in hot markets but achievable in cash flow cities. Scalable wealth builder.</td>
      </tr>
    </table>
    <p>Remember: cash flow is relative to your investment. A $300/month cash flow on a $50,000 investment (7.2% cash-on-cash) is better than $500/month on a $200,000 investment (3% cash-on-cash).</p>
  </div>

  <div class="rc-section">
    <h2>Real Estate Investment Rules: Quick Screening Tools</h2>
    <p>Before running detailed numbers, use these rules to quickly screen properties:</p>
    <table>
      <tr>
        <th>Rule</th>
        <th>Formula</th>
        <th>Example ($200K Property)</th>
        <th>When to Use</th>
      </tr>
      <tr>
        <td><strong>1% Rule</strong></td>
        <td>Monthly Rent ≥ 1% of Purchase Price</td>
        <td>Need $2,000+/month rent</td>
        <td>Quick 30-second screen. Fails = probably skip.</td>
      </tr>
      <tr>
        <td><strong>2% Rule</strong></td>
        <td>Monthly Rent ≥ 2% of Purchase Price</td>
        <td>Need $4,000+/month rent</td>
        <td>Rare in 2026. Found in C-class Midwest markets.</td>
      </tr>
      <tr>
        <td><strong>50% Rule</strong></td>
        <td>Operating Expenses ≈ 50% of Gross Rent</td>
        <td>~$1,000/month expenses (excl. mortgage)</td>
        <td>Quick mental math before detailed analysis.</td>
      </tr>
      <tr>
        <td><strong>70% Rule</strong></td>
        <td>Max Offer = 70% of ARV − Repairs</td>
        <td>$280K ARV − $20K repairs = $176K max</td>
        <td>For fix-and-flip investors, not buy-and-hold.</td>
      </tr>
    </table>
    <p>These rules are <strong>screening tools, not investment decisions</strong>. Always run a full cash flow analysis using the calculator above before making an offer. The 1% rule is nearly impossible in coastal markets in 2026 but achievable in Midwest and Southern markets.</p>
  </div>

  <div class="rc-section">
    <h2>Understanding Your Results</h2>
    <h3>Monthly Net Cash Flow</h3>
    <p>This is your bottom-line profit — what goes into your bank account every month after all expenses and mortgage payments. If this number is negative, the property is an "alligator" that eats your cash every month.</p>
    <h3>Net Operating Income (NOI)</h3>
    <p>NOI = Gross Income − Operating Expenses (excluding mortgage). It measures the property's profitability before financing. NOI is used to calculate cap rate and property value. A higher NOI means a more valuable property.</p>
    <h3>Capitalization Rate (Cap Rate)</h3>
    <p>Cap Rate = NOI / Purchase Price. A $20,000 annual NOI on a $250,000 property = 8% cap rate. Higher cap rates mean better cash flow relative to price. In 2026, expect 4-6% in hot markets (Austin, Nashville) and 8-12% in cash flow markets (Cleveland, Memphis, Indianapolis).</p>
    <h3>Cash-on-Cash Return</h3>
    <p>Cash-on-Cash = Annual Cash Flow / Total Cash Invested. If you put $50,000 down plus $5,000 closing costs and earn $6,600/year in cash flow, your return is 12%. Most investors target 8-12% minimum. This is the true measure of your cash ROI.</p>
  </div>

  <div class="rc-section">
    <h2>How to Increase Rental Property Cash Flow</h2>
    <p>Small improvements to your property and management can dramatically increase cash flow:</p>
    <ul>
      <li><strong>Raise rents strategically.</strong> Research comparable rents annually. A $50/month increase = $600/year more cash flow.</li>
      <li><strong>Reduce vacancy.</strong> Screen tenants thoroughly, respond to maintenance fast, and build relationships. One month of vacancy can erase a year of small cash flow.</li>
      <li><strong>Refinance to lower payments.</strong> If rates drop 1%, refinancing a $160K loan saves ~$100/month. Use our <a href="/real-estate/mortgage-calculator">mortgage calculator</a> to model this.</li>
      <li><strong>Self-manage vs. hire out.</strong> At 10% management fee on $1,800 rent = $180/month. If you have time, self-managing adds $2,160/year to cash flow.</li>
      <li><strong>Add income streams.</strong> Coin laundry ($50/mo), parking ($25/mo), pet fees ($25/mo), storage ($30/mo) = $1,560/year extra.</li>
      <li><strong>House hack.</strong> Live in one unit, rent the others. Your tenants pay your mortgage. Use our <a href="/real-estate/house-hacking-calculator">house hacking calculator</a>.</li>
      <li><strong>Appeal property taxes.</strong> Many counties over-assess. A successful appeal saving $500/year = $42/month more cash flow.</li>
    </ul>
  </div>

  <div class="rc-section">
    <h2>Best Cash Flow Markets in <?php echo $currentYear;?></h2>
    <p>Real estate is local. These markets consistently produce strong cash flow based on price-to-rent ratios:</p>
    <table>
      <tr>
        <th>Market</th>
        <th>Avg. Home Price</th>
        <th>Avg. Rent</th>
        <th>Est. Cap Rate</th>
        <th>Why It Works</th>
      </tr>
      <tr>
        <td>Cleveland, OH</td>
        <td>$125,000</td>
        <td>$1,200</td>
        <td>8-10%</td>
        <td>Low prices, steady rental demand</td>
      </tr>
      <tr>
        <td>Memphis, TN</td>
        <td>$140,000</td>
        <td>$1,350</td>
        <td>8-9%</td>
        <td>Strong job growth, landlord-friendly</td>
      </tr>
      <tr>
        <td>Indianapolis, IN</td>
        <td>$155,000</td>
        <td>$1,400</td>
        <td>7-9%</td>
        <td>Diverse economy, stable rents</td>
      </tr>
      <tr>
        <td>Kansas City, MO</td>
        <td>$160,000</td>
        <td>$1,450</td>
        <td>7-8%</td>
        <td>Affordable, growing tech sector</td>
      </tr>
      <tr>
        <td>Birmingham, AL</td>
        <td>$130,000</td>
        <td>$1,250</td>
        <td>8-10%</td>
        <td>Low taxes, medical hub</td>
      </tr>
      <tr>
        <td>Pittsburgh, PA</td>
        <td>$145,000</td>
        <td>$1,300</td>
        <td>7-9%</td>
        <td>Stable demand, universities</td>
      </tr>
    </table>
    <p>These are estimates based on market averages. Always run your own numbers with this calculator before investing. Markets change — verify current data with local agents.</p>
  </div>

  <div class="rc-section">
    <h2>Frequently Asked Questions</h2>
    <?php $faqs=[
      ['What is a good monthly cash flow for a rental property?','Most investors target $100–$200/month minimum per unit. $300–$500+/month is strong. Any positive number beats negative cash flow, but below $100/month leaves little buffer for unexpected expenses.'],
      ['How do I calculate rental property cash flow?','Cash Flow = Gross Rent − Vacancy − Mortgage P+I − Property Tax − Insurance − Maintenance − CapEx Reserve − Management Fees − HOA − Utilities. Use the calculator above to see a full monthly breakdown.'],
      ['What is the 50% rule?','The 50% rule estimates that operating expenses (excluding mortgage) equal about 50% of gross rent. It is a quick screening tool. A property renting for $1,500/month has roughly $750 in expenses before debt service.'],
      ['What is the 1% rule?','Monthly rent should be at least 1% of the purchase price. A $200,000 property needs $2,000/month rent. At todays rates, achieving 1% usually requires secondary markets like Cleveland, Memphis, or Indianapolis.'],
      ['What is cash-on-cash return?','Cash-on-cash return = Annual Cash Flow / Total Cash Invested. If you put $40,000 down plus $5,000 closing costs and earn $4,800/year in cash flow, your return is 10.7%. Most investors target 8-12% minimum.'],
      ['What is cap rate?','Cap rate = Net Operating Income / Purchase Price. A $20,000 NOI on a $250,000 property = 8% cap rate. Higher is better for cash flow. Cap rates vary by market — 4-6% in hot markets, 8-12% in cash flow markets.'],
      ['Should I include property management fees if I self-manage?','Yes. Property management is a labor expense whether you do it or hire it out. Include 8-12% in your analysis. If the property cash flows with management fees included, you have a true passive income property when you hand it off.'],
      ['What is NOI in real estate?','NOI (Net Operating Income) = Gross Income − Operating Expenses (excluding mortgage). It measures the property\'s profitability before financing costs. NOI is used to calculate cap rate and property value.'],
      ['What is a CapEx reserve?','CapEx (Capital Expenditure) reserves save for big-ticket items: roof ($8,000), HVAC ($5,000), water heater ($1,200), appliances ($2,000). Budget $100-200/month so you are not scrambling when the roof leaks.'],
      ['Can I use this calculator for house hacking?','Yes. Enter the total property price and rent, then subtract the portion you occupy. Or use our dedicated <a href="/real-estate/house-hacking-calculator">house hacking calculator</a> for multi-unit analysis.'],
    ];
    foreach($faqs as $f):?><div class="rc-faq-item"><div class="rc-faq-q"><?php echo $f[0];?></div><div class="rc-faq-a"><?php echo $f[1];?></div></div><?php endforeach;?>
  </div>

  <!-- AD #4: After FAQ -->
  <?php echo adAfterFAQ(); ?>

  <div class="rc-section">
    <h2>Related Real Estate Calculators</h2>
    <p>AAnalyze every angle of your investment with our complete real estate calculator suite:</p>
    <div class="rc-related">
      <a href="/real-estate/mortgage-calculator" class="rc-rel-link">🏠 Mortgage Calculator</a>
      <a href="/real-estate/cap-rate-calculator" class="rc-rel-link">📊 Cap Rate Calculator</a>
      <a href="/real-estate/cash-on-cash-return-calculator" class="rc-rel-link">💵 Cash-on-Cash Return</a>
      <a href="/real-estate/noi-calculator" class="rc-rel-link">📈 NOI Calculator</a>
      <a href="/real-estate/roi-calculator" class="rc-rel-link">📈 ROI Calculator</a>
      <a href="/real-estate/rental-property-calculator" class="rc-rel-link">🏘️ Rental Property Calculator</a>
      <a href="/real-estate/house-hacking-calculator" class="rc-rel-link">🏠 House Hacking Calculator</a>
      <a href="/real-estate/" class="rc-rel-link">🏘️ All Real Estate Tools</a>
    </div>
  </div>

  <div class="rc-section">
    <h2>Download Your Cash Flow Analysis</h2>
    <p>Want to save your analysis or share it with a partner, lender, or agent? Print this page or screenshot your results. For a professional cash flow worksheet, check out our <a href="https://americacalculator.com/real-estate/rental-property-analysis-template.pdf">free rental property analysis template</a> (PDF download).</p>
  </div>
</div>
</main>

<!-- AD #5: Mobile Sticky Anchor -->
<?php echo adMobileAnchor(); ?>

<script>
function fmtD(v){var s=Math.abs(v).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g,',');return (v<0?'−':'')+'$'+s;}
function fmtC(v){return (v<0?'−':'')+'$'+Math.round(Math.abs(v)).toLocaleString();}
function fmtP(v){return v.toFixed(2)+'%';}

function calcMortgage(principal, rate, years){
  var r=rate/100/12;
  var n=years*12;
  if(r===0)return principal/n;
  return principal*(r*Math.pow(1+r,n))/(Math.pow(1+r,n)-1);
}

function calcCF(){
  // Property & Financing
  var price=parseFloat(document.getElementById('cf-price').value)||0;
  var downPct=parseFloat(document.getElementById('cf-down').value)||0;
  var rate=parseFloat(document.getElementById('cf-rate').value)||0;
  var term=parseInt(document.getElementById('cf-term').value)||30;
  var closing=parseFloat(document.getElementById('cf-closing').value)||0;
  var repairs=parseFloat(document.getElementById('cf-repairs').value)||0;

  // Income
  var rent=parseFloat(document.getElementById('cf-rent').value)||0;
  var otherIncome=parseFloat(document.getElementById('cf-other-income').value)||0;
  var vac=parseFloat(document.getElementById('cf-vac').value)||0;
  var mgmt=parseFloat(document.getElementById('cf-mgmt').value)||0;

  // Expenses
  var tax=(parseFloat(document.getElementById('cf-tax').value)||0)/12;
  var ins=(parseFloat(document.getElementById('cf-ins').value)||0)/12;
  var maint=(parseFloat(document.getElementById('cf-maint').value)||0)/12;
  var capex=(parseFloat(document.getElementById('cf-capex').value)||0)/12;
  var hoa=parseFloat(document.getElementById('cf-hoa').value)||0;
  var utilities=parseFloat(document.getElementById('cf-utilities').value)||0;

  // Calculations
  var downAmount=price*(downPct/100);
  var loanAmount=price-downAmount;
  var mort=calcMortgage(loanAmount, rate, term);
  var cashInvested=downAmount+closing+repairs;

  var totalIncome=rent+otherIncome;
  var vacLoss=totalIncome*(vac/100);
  var egi=totalIncome-vacLoss;

  var mgmtFee=egi*(mgmt/100);
  var totalOpExp=tax+ins+maint+capex+mgmtFee+hoa+utilities;
  var noi=egi-totalOpExp;
  var totalExp=totalOpExp+mort;
  var net=egi-totalExp;

  var annualCashFlow=net*12;
  var capRate=(noi*12)/price*100;
  var cocReturn=cashInvested>0?(annualCashFlow/cashInvested)*100:0;

  // 1% Rule
  var onePctRent=price*0.01;
  var onePctPass=rent>=onePctRent;

  // 50% Rule
  var fiftyPctExp=totalIncome*0.5;
  var fiftyPctOp=mort+totalOpExp;
  var fiftyPctDiff=fiftyPctOp-fiftyPctExp;

  // Update Primary Results
  document.getElementById('cf-monthly').textContent=fmtD(net);
  document.getElementById('cf-monthly').style.color=net>=0?'#059669':'#dc2626';
  document.getElementById('cf-annual').textContent=fmtC(annualCashFlow);
  document.getElementById('cf-annual').style.color=annualCashFlow>=0?'#059669':'#dc2626';
  document.getElementById('cf-noi').textContent=fmtD(noi);
  document.getElementById('cf-caprate').textContent=fmtP(capRate);
  document.getElementById('cf-caprate').style.color=capRate>=6?'#059669':(capRate>=4?'#ca8a04':'#dc2626');
  document.getElementById('cf-coc').textContent=fmtP(cocReturn);
  document.getElementById('cf-coc').style.color=cocReturn>=8?'#059669':(cocReturn>=5?'#ca8a04':'#dc2626');
  document.getElementById('cf-egi').textContent=fmtD(egi);
  document.getElementById('cf-expenses').textContent=fmtD(totalExp);

  // Update Breakdown Lines
  document.getElementById('cl-rent').textContent='$'+rent.toFixed(2);
  document.getElementById('cl-other').textContent='$'+otherIncome.toFixed(2);
  document.getElementById('cl-vac').textContent='−$'+vacLoss.toFixed(2);
  document.getElementById('cl-egi').textContent=fmtD(egi);
  document.getElementById('cl-tax').textContent='−$'+tax.toFixed(2);
  document.getElementById('cl-ins').textContent='−$'+ins.toFixed(2);
  document.getElementById('cl-maint').textContent='−$'+maint.toFixed(2);
  document.getElementById('cl-capex').textContent='−$'+capex.toFixed(2);
  document.getElementById('cl-mgmt').textContent='−$'+mgmtFee.toFixed(2);
  document.getElementById('cl-hoa').textContent='−$'+hoa.toFixed(2);
  document.getElementById('cl-utilities').textContent='−$'+utilities.toFixed(2);
  document.getElementById('cl-totalexp').textContent='−$'+totalOpExp.toFixed(2);
  document.getElementById('cl-noi').textContent=fmtD(noi);
  document.getElementById('cl-mort').textContent='−$'+mort.toFixed(2);
  document.getElementById('cl-net').textContent=fmtD(net);
  document.getElementById('cl-net').style.color=net>=0?'#059669':'#dc2626';
  document.getElementById('cl-invested').textContent=fmtC(cashInvested);
  document.getElementById('cl-1pct').innerHTML=onePctPass?'<span style="color:#059669;">✓ PASS ($'+onePctRent.toFixed(0)+'/mo needed)</span>':'<span style="color:#dc2626;">✗ FAIL (need $'+onePctRent.toFixed(0)+'/mo)</span>';
  document.getElementById('cl-50pct').innerHTML=fiftyPctDiff<=0?'<span style="color:#059669;">✓ PASS (within 50%)</span>':'<span style="color:#dc2626;">✗ FAIL ($'+fiftyPctDiff.toFixed(0)+'/mo over)</span>';

  document.getElementById('cf-result').style.display='block';
}

// Auto-calculate on input change
document.querySelectorAll('#cf-price,#cf-down,#cf-rate,#cf-term,#cf-closing,#cf-repairs,#cf-rent,#cf-other-income,#cf-vac,#cf-mort,#cf-tax,#cf-ins,#cf-maint,#cf-capex,#cf-mgmt,#cf-hoa,#cf-utilities').forEach(function(el){el.addEventListener('input',calcCF);});
document.getElementById('cf-term').addEventListener('change',calcCF);

// FAQ Toggle
document.querySelectorAll('.rc-faq-q').forEach(function(q){q.addEventListener('click',function(){var i=this.closest('.rc-faq-item'),w=i.classList.contains('open');document.querySelectorAll('.rc-faq-item').forEach(function(x){x.classList.remove('open');});if(!w)i.classList.add('open');});});

// Initial calculation
calcCF();
</script>
<?php require_once '../includes/footer.php'; ?>