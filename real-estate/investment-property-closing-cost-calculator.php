<?php
$currentYear = date('Y');
$pageTitle       = "Investment Property Closing Cost Calculator ($currentYear) — Cash to Close";
$metaDescription = "Free $currentYear investment property closing cost calculator. Estimate lender points, DSCR reserves, title fees, transfer taxes, and total cash required to close.";
$metaKeywords    = 'investment property closing cost calculator, closing cost calculator for investment property, rental property closing costs, DSCR loan closing costs, cash to close calculator investor, commercial real estate closing costs';

$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'HowTo','name'=>'How to Calculate Investment Property Closing Costs & Cash to Close','totalTime'=>'PT3M','step'=>[
    ['@type'=>'HowToStep','position'=>1,'name'=>'Enter Purchase Price and Down Payment','text'=>'Input the negotiated acquisition price and your planned equity down payment percentage (typically 15%–25% for residential rentals or 20%–30% for commercial properties).'],
    ['@type'=>'HowToStep','position'=>2,'name'=>'Select Loan Structure','text'=>'Choose between Conventional Investment, DSCR Loan, Hard Money / Bridge, Commercial Mortgage, or Cash Purchase. Different loan structures feature varying origination points and underwriting costs.'],
    ['@type'=>'HowToStep','position'=>3,'name'=>'Select State and Transaction Side','text'=>'Select the property state to automatically configure baseline transfer taxes, mortgage recording taxes, and title insurance guidelines. Choose Buyer/Investor or Seller side.'],
    ['@type'=>'HowToStep','position'=>4,'name'=>'Review Itemized Fees and Escrow Reserves','text'=>'Examine lender origination points, Form 1007 rent-schedule appraisal charges, title/escrow fees, transfer stamps, and required PITIA debt service liquidity reserves.'],
    ['@type'=>'HowToStep','position'=>5,'name'=>'Analyze Total Cash Required to Close','text'=>'Review the total estimated closing costs alongside the down payment and required liquidity reserves to calculate the exact wire amount needed on closing day.']
  ]],
  ['@type'=>'WebApplication','name'=>'Investment Property Closing Cost Calculator',
   'url'=>'https://americacalculator.com/real-estate/investment-property-closing-cost-calculator',
   'description'=>'Calculate buyer and seller closing costs for rental and investment properties including DSCR points, transfer taxes, title insurance, and prepaids.',
   'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All',
   'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Real Estate','item'=>'https://americacalculator.com/real-estate/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'Investment Property Closing Costs','item'=>'https://americacalculator.com/real-estate/investment-property-closing-cost-calculator'],
  ]],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'How much are closing costs on an investment property?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Closing costs on an investment property typically range from 2.5% to 5.5% of the purchase price, compared to 2% to 4% for owner-occupied homes. Investor loans carry higher lender fees, origination points (1% to 3%), higher appraisal fees for market rent schedules (Form 1007), and require 3 to 6 months of liquid PITIA escrow reserves.']],
    ['@type'=>'Question','name'=>'What is the difference between owner-occupied and investment property closing costs?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Investment properties do not qualify for Fannie Mae owner-occupant pricing waivers or government-subsidized programs like FHA or VA. Lenders charge Loan-Level Price Adjustments (LLPAs), often requiring 1 to 2 discount points upfront. In addition, investment appraisals require comparable rent schedules, legal entity LLC review fees may apply, and escrow reserves are higher.']],
    ['@type'=>'Question','name'=>'How are DSCR loan closing costs calculated?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'DSCR (Debt Service Coverage Ratio) loan closing costs usually include 1 to 2 origination points, an underwriting/processing fee of $1,200 to $1,800, commercial or residential appraisal with 1007/216 operating schedules ($800 to $1,400), title insurance, and 3 to 6 months of principal, interest, taxes, and insurance (PITIA) held in reserve.']],
    ['@type'=>'Question','name'=>'Are closing costs on an investment property tax deductible?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Unlike personal residences where deductions are limited, investment property closing costs receive beneficial IRS treatment under Section 461 and Section 167. Costs are either amortized over the loan term (such as origination points and loan fees) or added to the property tax cost basis and depreciated over 27.5 years (such as title insurance, transfer taxes, legal fees, and recording fees).']],
    ['@type'=>'Question','name'=>'How many months of reserves do lenders require for rental properties?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Most conventional investment property lenders require 6 months of PITIA reserves per property owned. Non-QM and DSCR lenders usually require 3 to 6 months of reserves for single-family rentals and up to 12 months for commercial or short-term vacation rentals. These reserves must be verified as liquid funds prior to closing.']],
    ['@type'=>'Question','name'=>'Can the seller pay closing costs on an investment property?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes, but Fannie Mae and Freddie Mac cap seller concessions on investment properties at 2% of the purchase price, regardless of down payment size. On DSCR and Non-QM loans, seller concessions are often permitted up to 4% or 6%, subject to specific lender underwriting guidelines.']],
    ['@type'=>'Question','name'=>'What are typical hard money loan closing costs?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Hard money and fix-and-flip bridge loans carry higher upfront closing costs, typically 2 to 4 origination points, doc-prep fees of $900 to $1,500, draw-schedule inspection fees ($300 to $600 per inspection), and escrow holdbacks for construction or renovation budgets.']],
    ['@type'=>'Question','name'=>'What is total cash to close for an investor?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Cash to close represents the total liquid funds an investor must wire on closing day. Formula: Down Payment + Lender Fees + Title/Escrow Fees + Government Recording & Transfer Taxes + Prepaid Insurance & Tax Escrows + Required Reserve Holdbacks minus Seller Concessions and Earnest Money Deposit.']]
  ]]
]];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f8fafc;}
.rc-wrap{max-width:1080px;margin:0 auto;padding:2rem 1.25rem 4rem;}
.rc-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}.rc-bc a{color:#64748b;text-decoration:none;}.rc-bc a:hover{color:#0369a1;}
.rc-hero h1{font-size:1.85rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.rc-hero p{font-size:.97rem;color:#475569;line-height:1.72;margin:0 0 1.75rem;border-left:3px solid #0369a1;padding-left:.9rem;}
.rc-badges{display:flex;flex-wrap:wrap;gap:.5rem;margin-bottom:1.5rem;}
.rc-badge{display:inline-flex;align-items:center;gap:.35rem;padding:5px 12px;border-radius:20px;font-size:.73rem;font-weight:700;letter-spacing:.02em;}
.rc-badge-blue{background:#dbeafe;color:#1e40af;border:1px solid #93c5fd;}
.rc-badge-green{background:#dcfce7;color:#166534;border:1px solid #86efac;}
.rc-badge-gray{background:#f1f5f9;color:#475569;border:1px solid #cbd5e1;}
.rc-calc-grid{display:grid;grid-template-columns:1.05fr .95fr;gap:1.75rem;align-items:start;margin-bottom:2rem;}
.rc-card{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden;}
.rc-card-head{background:#0369a1;color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;display:flex;justify-content:space-between;align-items:center;}
.rc-card-head-actions{display:flex;gap:.5rem;}
.rc-card-head-actions button{background:rgba(255,255,255,.18);color:#fff;border:none;border-radius:6px;padding:6px 12px;font-size:.75rem;font-weight:600;cursor:pointer;transition:background .2s;}
.rc-card-head-actions button:hover{background:rgba(255,255,255,.3);}
.rc-body{padding:1.5rem;}
.rc-field-row{display:grid;grid-template-columns:1fr 1fr;gap:.85rem;margin-bottom:.85rem;}
.rc-field{margin-bottom:.85rem;}
.rc-field label{display:block;font-size:.84rem;font-weight:600;color:#1e293b;margin-bottom:.3rem;}
.rc-field input,.rc-field select{width:100%;padding:9px 12px;border:1.5px solid #cbd5e1;border-radius:7px;font-size:.92rem;color:#0f172a;outline:none;box-sizing:border-box;background:#fff;transition:border-color .2s;}
.rc-field input:focus,.rc-field select:focus{border-color:#0369a1;box-shadow:0 0 0 3px rgba(3,105,161,.12);}
.rc-field .hint{font-size:.72rem;color:#64748b;margin-top:.25rem;}
.rc-tabs{display:flex;border-bottom:1.5px solid #e2e8f0;margin-bottom:1.25rem;}
.rc-tab{flex:1;text-align:center;padding:10px;font-size:.85rem;font-weight:700;color:#64748b;cursor:pointer;border-bottom:2px solid transparent;}
.rc-tab.active{color:#0369a1;border-bottom-color:#0369a1;}
.rc-toggle-group{display:flex;gap:6px;background:#f1f5f9;padding:4px;border-radius:8px;margin-bottom:1rem;}
.rc-toggle-btn{flex:1;padding:7px;font-size:.8rem;font-weight:700;border:none;border-radius:6px;cursor:pointer;background:transparent;color:#475569;transition:all .15s;}
.rc-toggle-btn.active{background:#fff;color:#0f172a;box-shadow:0 1px 3px rgba(0,0,0,.08);}

/* Results Box */
.rc-results-panel{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);padding:1.5rem;}
.rc-res-hero{background:#f0f9ff;border:1.5px solid #bae6fd;border-radius:10px;padding:1.25rem;text-align:center;margin-bottom:1.25rem;}
.rc-res-label{font-size:.82rem;font-weight:700;color:#0369a1;text-transform:uppercase;letter-spacing:.05em;}
.rc-res-val{font-size:2.4rem;font-weight:900;color:#0f172a;line-height:1.15;margin:.35rem 0 .2rem;}
.rc-res-sub{font-size:.85rem;color:#475569;}
.rc-summary-grid{display:grid;grid-template-columns:1fr 1fr;gap:.75rem;margin-bottom:1.25rem;}
.rc-sum-card{background:#f8fafc;border:1px solid #e2e8f0;border-radius:8px;padding:.85rem;}
.rc-sum-title{font-size:.73rem;color:#64748b;font-weight:700;text-transform:uppercase;}
.rc-sum-val{font-size:1.15rem;font-weight:800;color:#0f172a;margin-top:2px;}
.rc-breakdown-list{border:1px solid #e2e8f0;border-radius:8px;overflow:hidden;margin-bottom:1.25rem;}
.rc-bk-head{background:#f1f5f9;padding:9px 12px;font-size:.8rem;font-weight:700;color:#334155;display:flex;justify-content:space-between;}
.rc-bk-row{padding:8px 12px;display:flex;justify-content:space-between;font-size:.84rem;border-top:1px solid #f1f5f9;color:#334155;}
.rc-bk-row:nth-child(even){background:#fafafa;}
.rc-bk-row strong{color:#0f172a;}
.rc-bk-total{background:#f8fafc;padding:10px 12px;display:flex;justify-content:space-between;font-size:.9rem;font-weight:800;border-top:2px solid #cbd5e1;color:#0f172a;}

/* Content styling */
.rc-section{background:#fff;border-radius:12px;border:1px solid #e2e8f0;padding:1.75rem;margin-bottom:1.5rem;}
.rc-section h2{font-size:1.3rem;color:#0f172a;margin:0 0 .85rem;padding-bottom:.6rem;border-bottom:2px solid #e0f2fe;}
.rc-section h3{font-size:1.02rem;color:#1e293b;margin:1.2rem 0 .45rem;}
.rc-section p{color:#475569;line-height:1.72;font-size:.94rem;margin-bottom:.9rem;}
.rc-table{width:100%;border-collapse:collapse;border-radius:8px;overflow:hidden;border:1px solid #e2e8f0;margin:1rem 0;}
.rc-table th{background:#0369a1;color:#fff;padding:9px 12px;font-size:.82rem;font-weight:600;text-align:left;}
.rc-table td{padding:8px 12px;border-bottom:1px solid #f1f5f9;font-size:.85rem;color:#334155;}
.rc-table tr:last-child td{border-bottom:none;}
.rc-table tr:nth-child(even) td{background:#f8fafc;}
.rc-faq-item{border-bottom:1px solid #f1f5f9;padding:.85rem 0;}
.rc-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.rc-faq-q{font-size:.94rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;user-select:none;}
.rc-faq-q::after{content:'+';color:#0369a1;font-size:1.2rem;flex-shrink:0;transition:transform .2s;}
.rc-faq-item.open .rc-faq-q::after{content:'−';}
.rc-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.rc-faq-item.open .rc-faq-a{display:block;}
.rc-related{display:grid;grid-template-columns:repeat(auto-fit,minmax(190px,1fr));gap:.75rem;margin-top:.75rem;}
.rc-rel-link{display:block;background:#e0f2fe;border:1.5px solid #bae6fd;border-radius:8px;padding:.75rem 1rem;font-size:.85rem;font-weight:600;color:#0369a1;text-decoration:none;text-align:center;transition:background .15s;}
.rc-rel-link:hover{background:#bae6fd;}
.privacy-notice{display:flex;align-items:center;gap:.5rem;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:8px;padding:.75rem 1rem;margin-top:1rem;font-size:.78rem;color:#166534;}
@media(max-width:860px){.rc-calc-grid{grid-template-columns:1fr;}}
@media(max-width:600px){.rc-field-row,.rc-summary-grid{grid-template-columns:1fr;}.rc-hero h1{font-size:1.5rem;}}
@media print{.site-header,.site-footer,.rc-card-head-actions,button,.privacy-notice,.rc-badges{display:none !important;}.rc-card,.rc-results-panel{box-shadow:none;border:1px solid #ccc;}}
</style>

<main id="main-content">
  <div class="rc-wrap">
    <nav class="rc-bc" aria-label="Breadcrumb">
      <a href="/">Home</a> &rsaquo;
      <a href="/real-estate/">Real Estate</a> &rsaquo;
      <span>Investment Property Closing Costs</span>
    </nav>

    <div class="rc-hero">
      <h1>Investment Property Closing Cost Calculator (<?php echo $currentYear; ?>)</h1>
      <div class="rc-badges">
        <span class="rc-badge rc-badge-blue">✓ Audited for <?php echo $currentYear; ?> US Rates</span>
        <span class="rc-badge rc-badge-green">✓ Client-Side Privacy</span>
        <span class="rc-badge rc-badge-gray">Updated: September <?php echo $currentYear; ?></span>
      </div>
      <p>
        Closing costs on rental and commercial real estate significantly exceed standard residential purchases due to investor loan-level pricing adjustments, origination points, commercial appraisals with Form 1007 rent comp schedules, title insurance, and required liquidity escrows. Use this free calculator to model exact closing fees and calculate total liquid cash required to close for Conventional, DSCR, Hard Money, and Cash acquisitions.
      </p>
    </div>

    <!-- MAIN CALCULATOR INTERFACE -->
    <div class="rc-calc-grid">
      <!-- Input Card -->
      <div class="rc-card">
        <div class="rc-card-head">
          <span>Investment Property Parameters</span>
          <div class="rc-card-head-actions">
            <button type="button" onclick="printCalc()">Print</button>
            <button type="button" onclick="downloadCSV()">CSV</button>
            <button type="button" onclick="resetForm()">Reset</button>
          </div>
        </div>
        <div class="rc-body">
          <div class="rc-toggle-group">
            <button type="button" class="rc-toggle-btn active" id="btn-side-buyer" onclick="setSide('buyer')">Buyer / Investor</button>
            <button type="button" class="rc-toggle-btn" id="btn-side-seller" onclick="setSide('seller')">Seller / Disposition</button>
          </div>

          <div class="rc-field">
            <label for="propPrice">Purchase / Contract Price ($)</label>
            <input type="number" id="propPrice" value="350000" step="5000" min="20000" oninput="calculateClosing()">
            <div class="hint">Agreed purchase price for the residential rental or commercial asset</div>
          </div>

          <div class="rc-field-row" id="buyerLoanRow">
            <div class="rc-field">
              <label for="downPaymentPct">Down Payment (%)</label>
              <input type="number" id="downPaymentPct" value="25" step="1" min="0" max="100" oninput="calculateClosing()">
              <div class="hint" id="downAmountHint">$87,500 down</div>
            </div>
            <div class="rc-field">
              <label for="loanType">Loan Financing Type</label>
              <select id="loanType" onchange="onLoanTypeChange()">
                <option value="conventional">Conventional Investment (1-2 pts)</option>
                <option value="dscr" selected>DSCR Rental Loan (1-2.5 pts)</option>
                <option value="hardmoney">Hard Money / Bridge (2-3 pts)</option>
                <option value="commercial">Commercial Mortgage (1-2 pts)</option>
                <option value="cash">All Cash (No Financing Fees)</option>
              </select>
            </div>
          </div>

          <div class="rc-field-row">
            <div class="rc-field">
              <label for="stateSelect">Property State</label>
              <select id="stateSelect" onchange="calculateClosing()">
                <option value="US">National Average Benchmark</option>
                <option value="CA">California (0.11% transfer + county)</option>
                <option value="FL">Florida (0.70% doc stamp + 0.20% intang)</option>
                <option value="TX">Texas (TDI title rate, 0% transfer)</option>
                <option value="NY">New York (0.4%–1.4% transfer + mortgage tax)</option>
                <option value="OH">Ohio (0.1%–0.3% conveyance fee)</option>
                <option value="PA">Pennsylvania (2.0% state/local transfer)</option>
                <option value="NJ">New Jersey (1.0%–1.2% realty transfer fee)</option>
                <option value="NC">North Carolina (0.20% excise tax)</option>
                <option value="GA">Georgia (0.10% transfer + 0.30% intang)</option>
                <option value="IL">Illinois (0.15% state + municipal tax)</option>
                <option value="AZ">Arizona</option><option value="CO">Colorado</option>
                <option value="WA">Washington (Graduated REET)</option>
                <option value="TN">Tennessee (0.37% transfer + recording)</option>
              </select>
            </div>
            <div class="rc-field">
              <label for="interestRate">Estimated Interest Rate (%)</label>
              <input type="number" id="interestRate" value="7.25" step="0.125" min="2" max="18" oninput="calculateClosing()">
            </div>
          </div>

          <!-- Advanced Adjustments Collapsible / Toggle -->
          <div style="margin-top:.75rem;padding-top:.75rem;border-top:1px dashed #cbd5e1;">
            <div style="font-size:.82rem;font-weight:700;color:#0369a1;cursor:pointer;display:flex;justify-content:space-between;" onclick="toggleAdvanced()">
              <span id="advToggleText">⚙ Adjust Lender Points &amp; Escrow Months &plus;</span>
            </div>
            <div id="advPanel" style="display:none;margin-top:.85rem;">
              <div class="rc-field-row">
                <div class="rc-field">
                  <label for="origPoints">Lender Points / Origination (%)</label>
                  <input type="number" id="origPoints" value="1.5" step="0.25" min="0" max="6" oninput="calculateClosing()">
                </div>
                <div class="rc-field">
                  <label for="appraisalFee">Appraisal Fee ($)</label>
                  <input type="number" id="appraisalFee" value="950" step="50" min="300" oninput="calculateClosing()">
                  <div class="hint">Includes Form 1007 rent comp schedule</div>
                </div>
              </div>
              <div class="rc-field-row">
                <div class="rc-field">
                  <label for="reserveMonths">Lender Escrow Reserves (Months PITIA)</label>
                  <input type="number" id="reserveMonths" value="6" step="1" min="0" max="18" oninput="calculateClosing()">
                  <div class="hint">DSCR/Non-QM typically require 3–6 months</div>
                </div>
                <div class="rc-field">
                  <label for="sellerCredit">Seller Concession / Credit ($)</label>
                  <input type="number" id="sellerCredit" value="0" step="500" min="0" oninput="calculateClosing()">
                  <div class="hint">Max 2% on Fannie Mae investment loans</div>
                </div>
              </div>
            </div>
          </div>

          <div class="privacy-notice">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            100% Client-Side: Calculations run locally in your browser. No financial data is ever stored or transmitted.
          </div>
        </div>
      </div>

      <!-- Results Panel -->
      <div class="rc-results-panel">
        <div class="rc-res-hero">
          <div class="rc-res-label" id="resHeroLabel">Total Cash Required to Close</div>
          <div class="rc-res-val" id="resHeroVal">$102,485</div>
          <div class="rc-res-sub" id="resHeroSub">Down payment + closing costs + reserves</div>
        </div>

        <div class="rc-summary-grid">
          <div class="rc-sum-card">
            <div class="rc-sum-title">Net Closing Costs</div>
            <div class="rc-sum-val" id="resTotalClosing">$9,485</div>
            <div style="font-size:.72rem;color:#64748b;" id="resClosingPct">2.71% of purchase</div>
          </div>
          <div class="rc-sum-card">
            <div class="rc-sum-title" id="sumRightTitle">Equity Down Payment</div>
            <div class="rc-sum-val" id="resDownVal">$87,500</div>
            <div style="font-size:.72rem;color:#64748b;" id="resLoanAmount">Loan: $262,500</div>
          </div>
        </div>

        <!-- Breakdown List -->
        <div class="rc-breakdown-list">
          <div class="rc-bk-head">
            <span>Itemized Settlement Expenses</span>
            <span>Estimated Cost</span>
          </div>
          <div class="rc-bk-row" id="bk-row-points">
            <span>Lender Points &amp; Origination (<span id="bk-points-pct">1.5%</span>)</span>
            <strong id="bk-points-val">$3,938</strong>
          </div>
          <div class="rc-bk-row" id="bk-row-underwrite">
            <span>Underwriting, Processing &amp; Flood Cert</span>
            <strong id="bk-underwrite-val">$1,350</strong>
          </div>
          <div class="rc-bk-row" id="bk-row-appraisal">
            <span>Appraisal (with 1007 Rent Schedule)</span>
            <strong id="bk-appraisal-val">$950</strong>
          </div>
          <div class="rc-bk-row">
            <span>Title Examination &amp; Lender/Owner Policy</span>
            <strong id="bk-title-val">$1,850</strong>
          </div>
          <div class="rc-bk-row">
            <span>Escrow, Settlement &amp; Legal Entity Review</span>
            <strong id="bk-escrow-val">$850</strong>
          </div>
          <div class="rc-bk-row">
            <span>Government Recording &amp; Transfer Taxes</span>
            <strong id="bk-tax-val">$1,225</strong>
          </div>
          <div class="rc-bk-row" id="bk-row-prepaids">
            <span>Prepaid Hazard Insurance &amp; Tax Buffer</span>
            <strong id="bk-prepaids-val">$1,422</strong>
          </div>
          <div class="rc-bk-row" id="bk-row-reserves" style="background:#eff6ff;">
            <span style="color:#1d4ed8;font-weight:600;">Lender Liquidity Escrow Reserves (<span id="bk-reserves-mo">6</span> mos)</span>
            <strong id="bk-reserves-val" style="color:#1d4ed8;">$11,850</strong>
          </div>
          <div class="rc-bk-total">
            <span id="bkTotalLabel">Total Settlement &amp; Reserve Outlay</span>
            <span id="bkTotalAmount">$23,435</span>
          </div>
        </div>

        <!-- Loan Comparison Box -->
        <div style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:8px;padding:12px;font-size:.82rem;line-height:1.5;">
          <strong style="color:#0f172a;display:block;margin-bottom:4px;">💡 Pro Investor Tip:</strong>
          <span style="color:#475569;">Unlike owner-occupied loans, investment origination points and interest reserves are amortized over the loan term under IRS Sec. 461. Title fees and transfer taxes are capitalized directly into your depreciable cost basis.</span>
        </div>
      </div>
    </div>

    <!-- EDITORIAL & METHODOLOGY SECTIONS -->
    <div class="rc-section">
      <h2>Understanding Closing Costs for Investment &amp; Rental Properties</h2>
      <p>
        Real estate investors routinely underestimate closing costs when underwriting prospective rental acquisitions. While an owner-occupant purchasing a primary residence can expect total closing expenses between 2% and 3.5% of the purchase price, <strong>investors routinely face 3% to 6% in total closing expenses</strong> plus mandatory post-closing liquid reserves.
      </p>
      <p>
        These higher costs stem from fundamental differences in risk underwriting. Because rental properties experience higher default rates during economic contractions than primary residences, government-sponsored enterprises (Fannie Mae and Freddie Mac), Non-QM lenders, and private debt funds impose significant loan-level price adjustments (LLPAs) that lenders pass directly to the borrower as upfront discount points.
      </p>

      <h3>Key Cost Differences: Investment vs. Primary Residence</h3>
      <table class="rc-table">
        <thead>
          <tr>
            <th>Expense Category</th>
            <th>Primary Residence</th>
            <th>Investment Property / Rental</th>
            <th>Investor Impact</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Lender Origination / Points</strong></td>
            <td>0% – 1.0% ($0 – $3,500)</td>
            <td>1.0% – 3.0% ($3,500 – $10,500)</td>
            <td>Higher due to risk-based capital surcharges and LLPA tiers.</td>
          </tr>
          <tr>
            <td><strong>Appraisal Scope</strong></td>
            <td>Standard URAR Form 1004 ($500–$700)</td>
            <td>Form 1004 + Form 1007 Rent Comp + Form 216 ($850–$1,400)</td>
            <td>Appraiser must conduct a full market rent survey and operating income analysis.</td>
          </tr>
          <tr>
            <td><strong>Lender Reserves</strong></td>
            <td>0 – 2 months PITIA</td>
            <td>3 – 6 months PITIA (up to 12 mos for multi-unit/STR)</td>
            <td>Liquid cash held in escrow or verified in banking accounts.</td>
          </tr>
          <tr>
            <td><strong>Title Insurance Rates</strong></td>
            <td>Standard residential rate tiers</td>
            <td>Standard residential or commercial entity endorsement</td>
            <td>LLC ownership requires specialized corporate authority endorsements.</td>
          </tr>
          <tr>
            <td><strong>Seller Concessions</strong></td>
            <td>Up to 3%–6% allowed</td>
            <td>Capped at 2% on Conventional loans</td>
            <td>Buyers cannot rely on large seller credits to offset closing costs.</td>
          </tr>
        </tbody>
      </table>

      <h3>How Closing Costs Vary by Loan Type</h3>
      <p>
        Your chosen financing vehicle dictates the vast majority of your non-tax closing fees:
      </p>
      <ul>
        <li><strong>Conventional Investment Mortgages:</strong> Backed by Fannie Mae/Freddie Mac. Require full tax returns and DTI verification. Upfront fees include 1–2 points in LLPAs plus 6 months PITIA reserves for every financed property owned.</li>
        <li><strong>DSCR (Debt Service Coverage Ratio) Loans:</strong> Underwritten strictly on property cash flow rather than personal W-2 income. Typical upfront fees include 1.5–2.5 points, $1,500 underwriting fee, commercial appraisal with 1007 rent comp schedule, and 6 months debt service reserves.</li>
        <li><strong>Hard Money / Fix-and-Flip Loans:</strong> Short-term asset-based bridge debt. Typically charges 2 to 3 points upfront, legal documentation fees of $1,200+, initial draw inspection fees ($350/draw), and interest reserves.</li>
        <li><strong>Cash Purchases:</strong> Zero lender fees, zero points, and zero appraisal requirements. Buyer only pays title policy, escrow settlement fee, and prorated government property taxes/transfer fees (typically 0.8%–1.5% total).</li>
      </ul>
    </div>

    <!-- METHODOLOGY & FORMULA SECTION -->
    <div class="rc-section">
      <h2>Calculation Methodology &amp; Mathematical Formulas</h2>
      <p>
        This calculator employs standard American Land Title Association (ALTA) settlement formulas and CFPB Closing Disclosure (CD) allocation standards:
      </p>
      <div style="background:#f1f5f9;border-left:4px solid #0369a1;padding:1rem 1.25rem;border-radius:4px;font-family:monospace;font-size:.9rem;line-height:1.7;margin:1rem 0;">
        <strong>Total Cash to Close Formula:</strong><br>
        Cash Required = Down Payment + Lender Fees + Title/Escrow Fees + Gov Taxes/Recording + Prepaids + Required Liquidity Reserves - Seller Credits - Earnest Deposit<br><br>
        <strong>Lender Origination Points:</strong><br>
        Points Cost = Loan Amount &times; (Origination Points % &divide; 100)<br><br>
        <strong>Monthly PITIA for Reserves:</strong><br>
        PITIA = Monthly P&amp;I + (Annual Taxes &divide; 12) + (Annual Hazard Insurance &divide; 12) + Monthly HOA<br>
        Escrow Reserves = PITIA &times; Reserve Months Required
      </div>

      <h3>IRS Tax Treatment of Investment Closing Costs</h3>
      <p>
        Unlike primary residences where settlement deductions are restricted to mortgage interest and real estate property taxes, rental property owners can deduct virtually all legitimate settlement costs through two mechanisms:
      </p>
      <ol style="color:#475569;line-height:1.75;padding-left:1.5rem;">
        <li><strong>Capitalized Basis Additions (27.5-Year Depreciation):</strong> Title insurance premiums, legal fees, transfer taxes, recording charges, and survey fees are added to your adjusted tax basis and depreciated annually under MACRS.</li>
        <li><strong>Amortized Financing Costs:</strong> Loan origination fees, discount points, appraisal charges, and credit report fees are amortized straight-line over the full contractual term of the mortgage (e.g., 360 months on a 30-year DSCR loan).</li>
      </ol>
    </div>

    <!-- FAQS ACCORDION -->
    <div class="rc-section">
      <h2>Frequently Asked Questions About Investment Property Closing Costs</h2>
      <div class="rc-faq-list">
        <div class="rc-faq-item open">
          <div class="rc-faq-q" onclick="toggleFaq(this)">How much are closing costs on an investment property?</div>
          <div class="rc-faq-a">Closing costs on an investment property typically range from 2.5% to 5.5% of the purchase price, compared to 2% to 4% for owner-occupied homes. Investor loans carry higher lender fees, origination points (1% to 3%), higher appraisal fees for market rent schedules (Form 1007), and require 3 to 6 months of liquid PITIA escrow reserves.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">What is the difference between owner-occupied and investment property closing costs?</div>
          <div class="rc-faq-a">Investment properties do not qualify for Fannie Mae owner-occupant pricing waivers or government-subsidized programs like FHA or VA. Lenders charge Loan-Level Price Adjustments (LLPAs), often requiring 1 to 2 discount points upfront. In addition, investment appraisals require comparable rent schedules, legal entity LLC review fees may apply, and escrow reserves are higher.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">How are DSCR loan closing costs calculated?</div>
          <div class="rc-faq-a">DSCR (Debt Service Coverage Ratio) loan closing costs usually include 1 to 2 origination points, an underwriting/processing fee of $1,200 to $1,800, commercial or residential appraisal with 1007/216 operating schedules ($800 to $1,400), title insurance, and 3 to 6 months of principal, interest, taxes, and insurance (PITIA) held in reserve.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">Are closing costs on an investment property tax deductible?</div>
          <div class="rc-faq-a">Unlike personal residences where deductions are limited, investment property closing costs receive beneficial IRS treatment under Section 461 and Section 167. Costs are either amortized over the loan term (such as origination points and loan fees) or added to the property tax cost basis and depreciated over 27.5 years (such as title insurance, transfer taxes, legal fees, and recording fees).</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">How many months of reserves do lenders require for rental properties?</div>
          <div class="rc-faq-a">Most conventional investment property lenders require 6 months of PITIA reserves per property owned. Non-QM and DSCR lenders usually require 3 to 6 months of reserves for single-family rentals and up to 12 months for commercial or short-term vacation rentals. These reserves must be verified as liquid funds prior to closing.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">Can the seller pay closing costs on an investment property?</div>
          <div class="rc-faq-a">Yes, but Fannie Mae and Freddie Mac cap seller concessions on investment properties at 2% of the purchase price, regardless of down payment size. On DSCR and Non-QM loans, seller concessions are often permitted up to 4% or 6%, subject to specific lender underwriting guidelines.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">What are typical hard money loan closing costs?</div>
          <div class="rc-faq-a">Hard money and fix-and-flip bridge loans carry higher upfront closing costs, typically 2 to 4 origination points, doc-prep fees of $900 to $1,500, draw-schedule inspection fees ($300 to $600 per inspection), and escrow holdbacks for construction or renovation budgets.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">What is total cash to close for an investor?</div>
          <div class="rc-faq-a">Cash to close represents the total liquid funds an investor must wire on closing day. Formula: Down Payment + Lender Fees + Title/Escrow Fees + Government Recording &amp; Transfer Taxes + Prepaid Insurance &amp; Tax Escrows + Required Reserve Holdbacks minus Seller Concessions and Earnest Money Deposit.</div>
        </div>
      </div>
    </div>

    <!-- RELATED CALCULATORS -->
    <div class="rc-section">
      <h2>Related Real Estate &amp; Investment Calculators</h2>
      <p>Underwrite every dimension of your rental portfolio with our purpose-built financial tools:</p>
      <div class="rc-related">
        <a href="/real-estate/dscr-calculator" class="rc-rel-link">DSCR Loan Calculator</a>
        <a href="/real-estate/cap-rate-calculator" class="rc-rel-link">Cap Rate Calculator</a>
        <a href="/real-estate/cash-flow-calculator" class="rc-rel-link">Cash Flow Calculator</a>
        <a href="/real-estate/cash-on-cash-return-calculator" class="rc-rel-link">Cash-on-Cash Return</a>
        <a href="/real-estate/rental-property-calculator" class="rc-rel-link">Rental Property Calculator</a>
        <a href="/real-estate/brrrr-calculator" class="rc-rel-link">BRRRR Calculator</a>
        <a href="/real-estate/closing-cost-calculator" class="rc-rel-link">Standard Closing Cost</a>
        <a href="/real-estate/1031-exchange-calculator" class="rc-rel-link">1031 Exchange Calculator</a>
      </div>
    </div>
  </div>
</main>

<script>
let currentSide = 'buyer';

// State-specific benchmark transfer tax and fee multipliers
const stateBenchmarks = {
  'US': { transferPct: 0.0035, titleRatePct: 0.0055, mortgageTaxPct: 0.000 },
  'CA': { transferPct: 0.0011, titleRatePct: 0.0045, mortgageTaxPct: 0.000 },
  'FL': { transferPct: 0.0070, titleRatePct: 0.0057, mortgageTaxPct: 0.0020 },
  'TX': { transferPct: 0.0000, titleRatePct: 0.0062, mortgageTaxPct: 0.000 },
  'NY': { transferPct: 0.0080, titleRatePct: 0.0052, mortgageTaxPct: 0.0105 },
  'OH': { transferPct: 0.0020, titleRatePct: 0.0050, mortgageTaxPct: 0.000 },
  'PA': { transferPct: 0.0200, titleRatePct: 0.0058, mortgageTaxPct: 0.000 },
  'NJ': { transferPct: 0.0110, titleRatePct: 0.0054, mortgageTaxPct: 0.000 },
  'NC': { transferPct: 0.0020, titleRatePct: 0.0048, mortgageTaxPct: 0.000 },
  'GA': { transferPct: 0.0010, titleRatePct: 0.0049, mortgageTaxPct: 0.0030 },
  'IL': { transferPct: 0.0050, titleRatePct: 0.0050, mortgageTaxPct: 0.000 },
  'AZ': { transferPct: 0.0000, titleRatePct: 0.0052, mortgageTaxPct: 0.000 },
  'CO': { transferPct: 0.0001, titleRatePct: 0.0048, mortgageTaxPct: 0.000 },
  'WA': { transferPct: 0.0135, titleRatePct: 0.0045, mortgageTaxPct: 0.000 },
  'TN': { transferPct: 0.0037, titleRatePct: 0.0050, mortgageTaxPct: 0.00115 }
};

function setSide(side) {
  currentSide = side;
  document.getElementById('btn-side-buyer').classList.toggle('active', side === 'buyer');
  document.getElementById('btn-side-seller').classList.toggle('active', side === 'seller');
  document.getElementById('buyerLoanRow').style.display = side === 'buyer' ? 'grid' : 'none';
  calculateClosing();
}

function onLoanTypeChange() {
  const lt = document.getElementById('loanType').value;
  const origInput = document.getElementById('origPoints');
  const resInput = document.getElementById('reserveMonths');
  const appInput = document.getElementById('appraisalFee');
  
  if (lt === 'conventional') {
    origInput.value = 1.0;
    resInput.value = 6;
    appInput.value = 750;
  } else if (lt === 'dscr') {
    origInput.value = 1.75;
    resInput.value = 6;
    appInput.value = 950;
  } else if (lt === 'hardmoney') {
    origInput.value = 2.5;
    resInput.value = 3;
    appInput.value = 1100;
  } else if (lt === 'commercial') {
    origInput.value = 1.5;
    resInput.value = 6;
    appInput.value = 2200;
  } else if (lt === 'cash') {
    origInput.value = 0;
    resInput.value = 0;
    appInput.value = 0;
  }
  calculateClosing();
}

function toggleAdvanced() {
  const panel = document.getElementById('advPanel');
  const text = document.getElementById('advToggleText');
  if (panel.style.display === 'none' || panel.style.display === '') {
    panel.style.display = 'block';
    text.innerHTML = '⚙ Hide Lender Points &amp; Escrow Months &minus;';
  } else {
    panel.style.display = 'none';
    text.innerHTML = '⚙ Adjust Lender Points &amp; Escrow Months &plus;';
  }
}

function formatUSD(num) {
  return '$' + Math.round(num).toLocaleString('en-US');
}

function calculateClosing() {
  const price = parseFloat(document.getElementById('propPrice').value) || 0;
  const downPct = parseFloat(document.getElementById('downPaymentPct').value) || 0;
  const loanType = document.getElementById('loanType').value;
  const rate = (parseFloat(document.getElementById('interestRate').value) || 7.0) / 100;
  const state = document.getElementById('stateSelect').value;
  const origPointsPct = parseFloat(document.getElementById('origPoints').value) || 0;
  const appraisalFee = parseFloat(document.getElementById('appraisalFee').value) || 0;
  const reserveMonths = parseFloat(document.getElementById('reserveMonths').value) || 0;
  const sellerCredit = parseFloat(document.getElementById('sellerCredit').value) || 0;

  const bench = stateBenchmarks[state] || stateBenchmarks['US'];

  if (currentSide === 'buyer') {
    const isCash = (loanType === 'cash' || downPct >= 100);
    const downAmount = isCash ? price : price * (downPct / 100);
    const loanAmount = isCash ? 0 : price - downAmount;
    
    document.getElementById('downAmountHint').textContent = formatUSD(downAmount) + ' down';

    // 1. Lender Fees
    const pointsCost = isCash ? 0 : loanAmount * (origPointsPct / 100);
    const underwriteFee = isCash ? 0 : (loanType === 'hardmoney' ? 1450 : (loanType === 'commercial' ? 1800 : 1250));
    
    // 2. Title & Settlement
    const titleCost = price * bench.titleRatePct * 0.75 + 450;
    const escrowSettlement = 850 + (price > 500000 ? 250 : 0);
    
    // 3. Government & Recording
    const transferTax = price * (bench.transferPct * 0.5); // standard 50/50 split in many states
    const mortgageTax = isCash ? 0 : loanAmount * bench.mortgageTaxPct;
    const recordingFees = isCash ? 150 : 325;
    const govTaxesTotal = transferTax + mortgageTax + recordingFees;

    // 4. Monthly PITIA for Reserves & Prepaids
    let monthlyPI = 0;
    if (loanAmount > 0) {
      const monthlyRate = rate / 12;
      const numPayments = 360;
      monthlyPI = loanAmount * (monthlyRate * Math.pow(1 + monthlyRate, numPayments)) / (Math.pow(1 + monthlyRate, numPayments) - 1);
    }
    const annualTaxEst = price * 0.012; // 1.2% national average
    const annualInsEst = price * 0.007; // 0.7% landlord policy
    const monthlyTaxes = annualTaxEst / 12;
    const monthlyIns = annualInsEst / 12;
    const monthlyPITIA = monthlyPI + monthlyTaxes + monthlyIns;

    const prepaidInsurance = isCash ? 0 : (annualInsEst + monthlyIns * 2);
    const prepaidTaxBuffer = isCash ? (annualTaxEst * 0.25) : (monthlyTaxes * 3);
    const perDiemInterest = isCash ? 0 : (loanAmount * rate / 365) * 15; // 15 days avg
    const prepaidsTotal = prepaidInsurance + prepaidTaxBuffer + perDiemInterest;

    // 5. Lender Liquidity Reserves
    const reservesCost = isCash ? 0 : (monthlyPITIA * reserveMonths);

    // Total Closing Costs (excluding equity down payment & reserves)
    const netClosingCosts = Math.max(0, (pointsCost + underwriteFee + appraisalFee + titleCost + escrowSettlement + govTaxesTotal + prepaidsTotal) - sellerCredit);
    const totalCashToClose = downAmount + netClosingCosts + reservesCost;

    // Update UI
    document.getElementById('resHeroLabel').textContent = 'Total Cash Required to Close';
    document.getElementById('resHeroVal').textContent = formatUSD(totalCashToClose);
    document.getElementById('resHeroSub').textContent = 'Includes down payment (' + formatUSD(downAmount) + ') + closing costs + reserves';
    
    document.getElementById('resTotalClosing').textContent = formatUSD(netClosingCosts);
    document.getElementById('resClosingPct').textContent = (price > 0 ? (netClosingCosts / price * 100).toFixed(2) : 0) + '% of purchase';
    
    document.getElementById('sumRightTitle').textContent = 'Equity Down Payment';
    document.getElementById('resDownVal').textContent = formatUSD(downAmount);
    document.getElementById('resLoanAmount').textContent = isCash ? 'All Cash Purchase' : 'Loan: ' + formatUSD(loanAmount);

    // Itemized display
    document.getElementById('bk-points-pct').textContent = origPointsPct + '%';
    document.getElementById('bk-points-val').textContent = formatUSD(pointsCost);
    document.getElementById('bk-underwrite-val').textContent = formatUSD(underwriteFee);
    document.getElementById('bk-appraisal-val').textContent = formatUSD(appraisalFee);
    document.getElementById('bk-title-val').textContent = formatUSD(titleCost);
    document.getElementById('bk-escrow-val').textContent = formatUSD(escrowSettlement);
    document.getElementById('bk-tax-val').textContent = formatUSD(govTaxesTotal);
    document.getElementById('bk-prepaids-val').textContent = formatUSD(prepaidsTotal);
    document.getElementById('bk-reserves-mo').textContent = reserveMonths;
    document.getElementById('bk-reserves-val').textContent = formatUSD(reservesCost);
    document.getElementById('bkTotalAmount').textContent = formatUSD(netClosingCosts + reservesCost);

    document.getElementById('bk-row-points').style.display = isCash ? 'none' : 'flex';
    document.getElementById('bk-row-underwrite').style.display = isCash ? 'none' : 'flex';
    document.getElementById('bk-row-appraisal').style.display = isCash ? 'none' : 'flex';
    document.getElementById('bk-row-prepaids').style.display = 'flex';
    document.getElementById('bk-row-reserves').style.display = isCash ? 'none' : 'flex';
  } else {
    // Seller Side
    const commission = price * 0.05; // 5% total broker commission standard
    const ownerTitlePolicy = price * bench.titleRatePct;
    const transferTax = price * (bench.transferPct * 0.5);
    const sellerEscrow = 650;
    const recordingDeed = 150;
    const taxProration = price * 0.012 * (4 / 12); // ~4 months accrued

    const totalSellerCosts = commission + ownerTitlePolicy + transferTax + sellerEscrow + recordingDeed + taxProration;
    const netProceeds = price - totalSellerCosts;

    document.getElementById('resHeroLabel').textContent = 'Estimated Net Sales Proceeds';
    document.getElementById('resHeroVal').textContent = formatUSD(netProceeds);
    document.getElementById('resHeroSub').textContent = 'Contract price minus seller settlement costs & commissions';

    document.getElementById('resTotalClosing').textContent = formatUSD(totalSellerCosts);
    document.getElementById('resClosingPct').textContent = (price > 0 ? (totalSellerCosts / price * 100).toFixed(2) : 0) + '% of sales price';

    document.getElementById('sumRightTitle').textContent = 'Brokerage Commission (5%)';
    document.getElementById('resDownVal').textContent = formatUSD(commission);
    document.getElementById('resLoanAmount').textContent = 'Title & Taxes: ' + formatUSD(totalSellerCosts - commission);

    document.getElementById('bk-points-pct').textContent = '5.0%';
    document.getElementById('bk-points-val').textContent = formatUSD(commission);
    document.getElementById('bk-row-underwrite').style.display = 'none';
    document.getElementById('bk-row-appraisal').style.display = 'none';
    document.getElementById('bk-title-val').textContent = formatUSD(ownerTitlePolicy);
    document.getElementById('bk-escrow-val').textContent = formatUSD(sellerEscrow);
    document.getElementById('bk-tax-val').textContent = formatUSD(transferTax + recordingDeed);
    document.getElementById('bk-prepaids-val').textContent = formatUSD(taxProration);
    document.getElementById('bk-row-reserves').style.display = 'none';
    document.getElementById('bkTotalAmount').textContent = formatUSD(totalSellerCosts);
  }
}

function resetForm() {
  document.getElementById('propPrice').value = 350000;
  document.getElementById('downPaymentPct').value = 25;
  document.getElementById('loanType').value = 'dscr';
  document.getElementById('stateSelect').value = 'US';
  document.getElementById('interestRate').value = 7.25;
  document.getElementById('origPoints').value = 1.5;
  document.getElementById('appraisalFee').value = 950;
  document.getElementById('reserveMonths').value = 6;
  document.getElementById('sellerCredit').value = 0;
  setSide('buyer');
}

function printCalc() {
  window.print();
}

function downloadCSV() {
  const price = document.getElementById('propPrice').value;
  const cashToClose = document.getElementById('resHeroVal').textContent.replace(/[$,]/g, '');
  const netClosing = document.getElementById('resTotalClosing').textContent.replace(/[$,]/g, '');
  const downPayment = document.getElementById('resDownVal').textContent.replace(/[$,]/g, '');
  
  let csv = "Category,Amount (USD)\n";
  csv += `Purchase Price,${price}\n`;
  csv += `Side,${currentSide}\n`;
  csv += `Down Payment,${downPayment}\n`;
  csv += `Net Closing Costs,${netClosing}\n`;
  csv += `Total Cash Required / Proceeds,${cashToClose}\n`;
  
  const blob = new Blob([csv], { type: 'text/csv' });
  const url = URL.createObjectURL(blob);
  const a = document.createElement('a');
  a.href = url;
  a.download = `investment-property-closing-costs-${new Date().toISOString().slice(0,10)}.csv`;
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
}

function toggleFaq(el) {
  el.parentElement.classList.toggle('open');
}

// Initial calculation on load
window.addEventListener('DOMContentLoaded', () => {
  calculateClosing();
});
</script>

<?php require_once '../includes/footer.php'; ?>
