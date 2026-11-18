<?php
$currentYear = date('Y');
$pageTitle       = "How Much House Can I Afford Calculator ($currentYear) — Income & DTI";
$metaDescription = "Free $currentYear home affordability calculator. Calculate maximum home purchase price, maximum mortgage loan amount, and monthly payment based on income and debts.";
$metaKeywords    = 'how much house can I afford calculator, home affordability calculator, how much house can I afford with salary, mortgage affordability calculator, maximum home price calculator 2026';

$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'HowTo','name'=>'How to Calculate How Much House You Can Afford','totalTime'=>'PT3M','step'=>[
    ['@type'=>'HowToStep','position'=>1,'name'=>'Input Gross Household Income','text'=>'Enter your total annual pre-tax income from salary, wages, business earnings, and other recurring verifiable sources.'],
    ['@type'=>'HowToStep','position'=>2,'name'=>'Enter Monthly Debt Obligations','text'=>'Input total monthly payments for auto loans, student loans, minimum credit card payments, and personal obligations.'],
    ['@type'=>'HowToStep','position'=>3,'name'=>'Set Down Payment and Financing Terms','text'=>'Enter your available liquid down payment, expected mortgage interest rate, and preferred loan term (30, 20, or 15 years).'],
    ['@type'=>'HowToStep','position'=>4,'name'=>'Choose Underwriting DTI Standard','text'=>'Select between Conservative (28/36 rule), Moderate (Standard Conventional 36/43%), or Aggressive (FHA 45/50%) debt-to-income limits.'],
    ['@type'=>'HowToStep','position'=>5,'name'=>'Review Maximum Home Price & Payment Breakdown','text'=>'The calculator computes your maximum home purchase price, loan amount, and exact monthly PITI payment including taxes, insurance, and PMI.']
  ]],
  ['@type'=>'WebApplication','name'=>'How Much House Can I Afford Calculator',
   'url'=>'https://americacalculator.com/real-estate/home-affordability-calculator',
   'description'=>'Calculate maximum home affordability based on gross income, monthly debt obligations, down payment, and DTI limits.',
   'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All',
   'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Real Estate','item'=>'https://americacalculator.com/real-estate/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'Home Affordability Calculator','item'=>'https://americacalculator.com/real-estate/home-affordability-calculator'],
  ]],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'How much house can I afford on a $100,000 salary?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'With a $100,000 annual income ($8,333/month), $500/month in non-housing debts, a 10% down payment, and a 6.75% interest rate, you can typically afford a home priced between $360,000 (conservative 28% front-end) and $435,000 (conventional 43% back-end). Total monthly payment would range between $2,330 and $3,080 including taxes and insurance.']],
    ['@type'=>'Question','name'=>'What is the 28/36 rule in mortgage underwriting?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'The 28/36 rule is the classic financial planning benchmark for housing affordability. It states that your housing expenses (mortgage principal, interest, taxes, insurance, and HOA dues) should not exceed 28% of your gross monthly income (front-end ratio), and total debt payments (housing plus auto loans, student loans, and credit cards) should not exceed 36% of gross income (back-end ratio).']],
    ['@type'=>'Question','name'=>'How do existing monthly debts affect how much house I can afford?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Every dollar of recurring monthly debt directly reduces your available borrowing capacity. Because lenders cap your back-end DTI, every $100 in monthly car or student loan payments reduces your maximum supportable mortgage loan by approximately $14,000 to $16,000 at current 2026 interest rates.']],
    ['@type'=>'Question','name'=>'How much does interest rate affect home affordability?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'As a general rule, a 1.0% increase in mortgage interest rate reduces your home buying purchasing power by approximately 9% to 11%. On a $400,000 loan, an interest rate jump from 6.0% to 7.0% increases the monthly P&I payment by about $260/month, requiring an additional $9,000 in gross annual income to qualify for the same house.']],
    ['@type'=>'Question','name'=>'What is Private Mortgage Insurance (PMI) and when is it required?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'PMI is required on conventional loans when your down payment is less than 20% of the purchase price. PMI typically costs between 0.3% and 1.2% of the original loan balance annually ($75 to $250/month on a $300,000 loan) depending on credit score. Once your home equity reaches 20%, you can request PMI cancellation under the federal Homeowners Protection Act.']],
    ['@type'=>'Question','name'=>'What is the difference between front-end and back-end DTI?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Front-end DTI (housing ratio) compares only your prospective monthly housing costs (PITIA) against gross monthly income. Back-end DTI (total debt ratio) includes housing costs PLUS all existing monthly credit obligations (car payments, student loans, credit card minimums, alimony). Lenders evaluate both, and your borrowing capacity is capped by whichever limit is reached first.']],
    ['@type'=>'Question','name'=>'Can I buy a house with a DTI higher than 43%?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. While 43% is the standard Qualified Mortgage (QM) benchmark for Fannie Mae and Freddie Mac, automated underwriting systems (Desktop Underwriter) allow conventional DTI ratios up to 45% or 50% with compensating factors (e.g., 740+ credit score, 6+ months cash reserves). FHA loans routinely allow back-end DTIs up to 46.9% to 50% with strong credit and cash assets.']],
    ['@type'=>'Question','name'=>'How much cash should I keep after buying a home?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Financial advisors strongly recommend maintaining 3 to 6 months of living expenses (mortgage payment plus basic living costs) in an emergency fund after closing. Do not drain 100% of your savings for the down payment and closing costs, as unexpected home maintenance, moving expenses, and appliance replacements frequently occur during the first year of homeownership.']]
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

/* Results Box */
.rc-results-panel{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);padding:1.5rem;}
.rc-res-hero{background:#f0f9ff;border:1.5px solid #bae6fd;border-radius:10px;padding:1.25rem;text-align:center;margin-bottom:1.25rem;}
.rc-res-label{font-size:.82rem;font-weight:700;color:#0369a1;text-transform:uppercase;letter-spacing:.05em;}
.rc-res-val{font-size:2.4rem;font-weight:900;color:#0f172a;line-height:1.15;margin:.35rem 0 .2rem;}
.rc-res-sub{font-size:.86rem;color:#475569;}

.rc-summary-grid{display:grid;grid-template-columns:1fr 1fr;gap:.75rem;margin-bottom:1.25rem;}
.rc-sum-card{background:#f8fafc;border:1px solid #e2e8f0;border-radius:8px;padding:.85rem;}
.rc-sum-title{font-size:.73rem;color:#64748b;font-weight:700;text-transform:uppercase;}
.rc-sum-val{font-size:1.15rem;font-weight:800;color:#0f172a;margin-top:2px;}

/* Monthly payment breakdown card */
.piti-box{background:#f8fafc;border:1px solid #e2e8f0;border-radius:8px;padding:14px;margin-bottom:1.25rem;}
.piti-row{display:flex;justify-content:space-between;font-size:.84rem;color:#475569;margin-bottom:5px;}
.piti-row strong{color:#0f172a;}
.piti-row.total{border-top:1.5px solid #cbd5e1;padding-top:6px;margin-top:6px;font-weight:800;font-size:.9rem;color:#0f172a;}

/* DTI Gauges */
.dti-gauge-wrap{background:#fff;border:1px solid #e2e8f0;border-radius:8px;padding:12px;margin-bottom:1.25rem;}
.dti-gauge-row{display:flex;justify-content:space-between;font-size:.8rem;font-weight:700;color:#334155;margin-bottom:4px;}
.dti-track{height:12px;background:#e2e8f0;border-radius:6px;overflow:hidden;margin-bottom:10px;}
.dti-fill{height:100%;border-radius:6px;transition:width .4s ease;}

/* Editorial styles */
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
      <span>Home Affordability Calculator</span>
    </nav>

    <div class="rc-hero">
      <h1>How Much House Can I Afford Calculator (<?php echo $currentYear; ?>)</h1>
      <div class="rc-badges">
        <span class="rc-badge rc-badge-blue">✓ Audited for <?php echo $currentYear; ?> US Rates</span>
        <span class="rc-badge rc-badge-green">✓ Client-Side Privacy</span>
        <span class="rc-badge rc-badge-gray">Updated: September <?php echo $currentYear; ?></span>
      </div>
      <p>
        Determining your true home purchasing power requires balancing gross household income against existing monthly debt obligations, available down payment capital, and lender debt-to-income (DTI) ceilings. Use this institutional calculator to discover your maximum supportable purchase price across Conservative (28/36 rule), Conventional (36/43%), and Aggressive (FHA 50%) underwriting standards.
      </p>
    </div>

    <!-- MAIN CALCULATOR GRID -->
    <div class="rc-calc-grid">
      <!-- Input Card -->
      <div class="rc-card">
        <div class="rc-card-head">
          <span>Income, Debts &amp; Financing</span>
          <div class="rc-card-head-actions">
            <button type="button" onclick="printCalc()">Print</button>
            <button type="button" onclick="downloadCSV()">CSV</button>
            <button type="button" onclick="resetForm()">Reset</button>
          </div>
        </div>
        <div class="rc-body">
          <div class="rc-field-row">
            <div class="rc-field">
              <label for="annualIncome">Annual Gross Income ($)</label>
              <input type="number" id="annualIncome" value="115000" step="5000" min="20000" oninput="calculateAffordability()">
              <div class="hint" id="monthlyIncomeHint">$9,583 / month</div>
            </div>
            <div class="rc-field">
              <label for="monthlyDebts">Monthly Debts ($)</label>
              <input type="number" id="monthlyDebts" value="650" step="50" min="0" oninput="calculateAffordability()">
              <div class="hint">Car loans, student loans, credit cards</div>
            </div>
          </div>

          <div class="rc-field-row">
            <div class="rc-field">
              <label for="downPayment">Down Payment Available ($)</label>
              <input type="number" id="downPayment" value="50000" step="2500" min="1000" oninput="calculateAffordability()">
              <div class="hint">Available cash for down payment</div>
            </div>
            <div class="rc-field">
              <label for="dtiStandard">DTI Underwriting Mode</label>
              <select id="dtiStandard" onchange="calculateAffordability()">
                <option value="conservative">Conservative (28% Front / 36% Back)</option>
                <option value="conventional" selected>Conventional QM (36% Front / 43% Back)</option>
                <option value="aggressive">Aggressive / FHA (45% Front / 50% Back)</option>
              </select>
            </div>
          </div>

          <div class="rc-field-row">
            <div class="rc-field">
              <label for="interestRate">Mortgage Interest Rate (%)</label>
              <input type="number" id="interestRate" value="6.75" step="0.125" min="2.0" max="15.0" oninput="calculateAffordability()">
            </div>
            <div class="rc-field">
              <label for="loanTermYears">Loan Term</label>
              <select id="loanTermYears" onchange="calculateAffordability()">
                <option value="30" selected>30-Year Fixed Mortgage</option>
                <option value="20">20-Year Fixed Mortgage</option>
                <option value="15">15-Year Fixed Mortgage</option>
              </select>
            </div>
          </div>

          <!-- Taxes & Insurance Adjustments -->
          <div style="margin-top:.75rem;padding-top:.75rem;border-top:1px dashed #cbd5e1;">
            <div style="font-size:.82rem;font-weight:700;color:#0369a1;cursor:pointer;display:flex;justify-content:space-between;" onclick="toggleAdvanced()">
              <span id="advToggleText">⚙ Adjust Taxes, Insurance &amp; HOA Dues &plus;</span>
            </div>
            <div id="advPanel" style="display:none;margin-top:.85rem;">
              <div class="rc-field-row">
                <div class="rc-field">
                  <label for="propertyTaxPct">Property Tax Rate (%)</label>
                  <input type="number" id="propertyTaxPct" value="1.20" step="0.05" min="0.2" max="4.0" oninput="calculateAffordability()">
                  <div class="hint">US national avg: 1.15%–1.25%</div>
                </div>
                <div class="rc-field">
                  <label for="homeInsuranceAnnual">Annual Homeowners Ins ($)</label>
                  <input type="number" id="homeInsuranceAnnual" value="1500" step="100" min="300" oninput="calculateAffordability()">
                </div>
              </div>
              <div class="rc-field-row">
                <div class="rc-field">
                  <label for="monthlyHOA">Monthly HOA / Condo Dues ($)</label>
                  <input type="number" id="monthlyHOA" value="0" step="25" min="0" oninput="calculateAffordability()">
                </div>
                <div class="rc-field">
                  <label for="pmiRatePct">Annual PMI Rate (%)</label>
                  <input type="number" id="pmiRatePct" value="0.75" step="0.05" min="0.2" max="2.0" oninput="calculateAffordability()">
                  <div class="hint">Applies if down payment is &lt; 20%</div>
                </div>
              </div>
            </div>
          </div>

          <div class="privacy-notice">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
            100% Client-Side Privacy: Your financial calculations run locally in your web browser. No income or debt data is stored.
          </div>
        </div>
      </div>

      <!-- Results Panel -->
      <div class="rc-results-panel">
        <div class="rc-res-hero">
          <div class="rc-res-label">Maximum Affordable Home Price</div>
          <div class="rc-res-val" id="resMaxPrice">$465,000</div>
          <div class="rc-res-sub" id="resDownSummary">With $50,000 down payment (10.8% equity)</div>
        </div>

        <div class="rc-summary-grid">
          <div class="rc-sum-card">
            <div class="rc-sum-title">Maximum Loan Amount</div>
            <div class="rc-sum-val" id="resMaxLoan">$415,000</div>
            <div style="font-size:.72rem;color:#64748b;" id="resLoanSub">30-Year Fixed at 6.75%</div>
          </div>
          <div class="rc-sum-card">
            <div class="rc-sum-title">Total Monthly Housing (PITI)</div>
            <div class="rc-sum-val" id="resMonthlyPITI">$3,471</div>
            <div style="font-size:.72rem;color:#059669;font-weight:700;" id="resDtiUsed">36.2% Front-End DTI</div>
          </div>
        </div>

        <!-- Monthly Payment Breakdown -->
        <div class="piti-box">
          <div style="font-size:.8rem;font-weight:700;color:#0f172a;margin-bottom:8px;">Estimated Monthly Payment Breakdown (PITI)</div>
          <div class="piti-row">
            <span>Principal &amp; Interest (P&amp;I)</span>
            <strong id="bkPI">$2,692</strong>
          </div>
          <div class="piti-row">
            <span>Property Taxes (Escrow)</span>
            <strong id="bkTaxes">$465</strong>
          </div>
          <div class="piti-row">
            <span>Homeowners Insurance</span>
            <strong id="bkInsurance">$125</strong>
          </div>
          <div class="piti-row" id="bkPmiRow">
            <span>Private Mortgage Insurance (PMI)</span>
            <strong id="bkPMI">$189</strong>
          </div>
          <div class="piti-row" id="bkHoaRow" style="display:none;">
            <span>HOA / Condo Dues</span>
            <strong id="bkHOA">$0</strong>
          </div>
          <div class="piti-row total">
            <span>Total Monthly Payment (PITI)</span>
            <span id="bkTotalPITI" style="color:#0369a1;">$3,471</span>
          </div>
        </div>

        <!-- DTI Gauges -->
        <div class="dti-gauge-wrap">
          <div class="dti-gauge-row">
            <span>Front-End DTI (Housing Only)</span>
            <span id="gaugeFrontLabel" style="color:#1d4ed8;">36.2% / 36% Cap</span>
          </div>
          <div class="dti-track">
            <div class="dti-fill" id="gaugeFrontFill" style="width: 100%; background:#2563eb;"></div>
          </div>

          <div class="dti-gauge-row">
            <span>Back-End DTI (Housing + Existing Debts)</span>
            <span id="gaugeBackLabel" style="color:#059669;">43.0% / 43% Cap</span>
          </div>
          <div class="dti-track">
            <div class="dti-fill" id="gaugeBackFill" style="width: 100%; background:#059669;"></div>
          </div>
        </div>

        <!-- Quick 3-Tier Comparison Matrix -->
        <div style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:8px;padding:12px;font-size:.8rem;">
          <strong style="color:#0f172a;display:block;margin-bottom:6px;">Three Purchasing Scenarios:</strong>
          <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:6px;text-align:center;">
            <div style="background:#fff;border:1px solid #e2e8f0;border-radius:6px;padding:8px;">
              <div style="font-size:.7rem;color:#64748b;font-weight:700;">CONSERVATIVE</div>
              <strong style="color:#0f172a;" id="scenConsPrice">$385,000</strong>
              <div style="font-size:.7rem;color:#475569;" id="scenConsPmt">$2,683/mo</div>
            </div>
            <div style="background:#eff6ff;border:1.5px solid #93c5fd;border-radius:6px;padding:8px;">
              <div style="font-size:.7rem;color:#1e40af;font-weight:700;">CONVENTIONAL</div>
              <strong style="color:#1e40af;" id="scenConvPrice">$465,000</strong>
              <div style="font-size:.7rem;color:#1e40af;" id="scenConvPmt">$3,471/mo</div>
            </div>
            <div style="background:#fff;border:1px solid #e2e8f0;border-radius:6px;padding:8px;">
              <div style="font-size:.7rem;color:#64748b;font-weight:700;">AGGRESSIVE</div>
              <strong style="color:#0f172a;" id="scenAggrPrice">$545,000</strong>
              <div style="font-size:.7rem;color:#475569;" id="scenAggrPmt">$4,142/mo</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- SALARY BENCHMARK REFERENCE TABLE -->
    <div class="rc-section">
      <h2>How Much House Can You Afford by Salary? (2026 Benchmarks)</h2>
      <p>
        The table below models typical home affordability across common household income brackets in the United States, assuming <strong>10% down payment</strong>, a <strong>6.75% 30-year fixed mortgage</strong>, and standard debt-to-income underwriting.
      </p>
      <table class="rc-table">
        <thead>
          <tr>
            <th>Annual Gross Salary</th>
            <th>Monthly Gross Income</th>
            <th>Conservative Price (28%)</th>
            <th>Conventional Price (43%)</th>
            <th>Estimated Monthly PITI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>$60,000 / year</strong></td>
            <td>$5,000 / mo</td>
            <td>$205,000</td>
            <td>$245,000</td>
            <td>$1,850 – $2,150</td>
          </tr>
          <tr>
            <td><strong>$80,000 / year</strong></td>
            <td>$6,667 / mo</td>
            <td>$275,000</td>
            <td>$335,000</td>
            <td>$2,450 – $2,870</td>
          </tr>
          <tr>
            <td><strong>$100,000 / year</strong></td>
            <td>$8,333 / mo</td>
            <td>$355,000</td>
            <td>$425,000</td>
            <td>$3,080 – $3,580</td>
          </tr>
          <tr>
            <td><strong>$125,000 / year</strong></td>
            <td>$10,417 / mo</td>
            <td>$450,000</td>
            <td>$540,000</td>
            <td>$3,850 – $4,480</td>
          </tr>
          <tr>
            <td><strong>$150,000 / year</strong></td>
            <td>$12,500 / mo</td>
            <td>$545,000</td>
            <td>$655,000</td>
            <td>$4,650 – $5,380</td>
          </tr>
          <tr>
            <td><strong>$200,000 / year</strong></td>
            <td>$16,667 / mo</td>
            <td>$735,000</td>
            <td>$880,000</td>
            <td>$6,200 – $7,170</td>
          </tr>
        </tbody>
      </table>
      <p style="font-size:.85rem;color:#64748b;">
        *Note: Exact borrowing power varies by credit score, down payment size, property tax millage rates, and monthly non-housing debt obligations.
      </p>
    </div>

    <!-- UNDERWRITING & DTI EXPLANATION SECTION -->
    <div class="rc-section">
      <h2>Understanding Mortgage Underwriting: Front-End vs. Back-End DTI</h2>
      <p>
        Mortgage underwriters do not simply look at your salary; they analyze your financial picture through two interconnected ratios: the <strong>Front-End Debt-to-Income Ratio</strong> and the <strong>Back-End Debt-to-Income Ratio</strong>.
      </p>
      
      <h3>1. Front-End DTI (Housing Ratio)</h3>
      <p>
        The front-end ratio measures what percentage of your gross monthly income goes purely toward keeping a roof over your head. This includes:
      </p>
      <ul>
        <li><strong>Principal &amp; Interest (P&amp;I):</strong> The core monthly repayment to your mortgage lender.</li>
        <li><strong>Property Taxes:</strong> Monthly escrow for city, county, and school district taxes.</li>
        <li><strong>Homeowners Hazard Insurance:</strong> Monthly hazard and flood coverage escrow.</li>
        <li><strong>Private Mortgage Insurance (PMI):</strong> Required if your down payment is below 20%.</li>
        <li><strong>HOA or Condo Dues:</strong> Mandatory homeowner association fees.</li>
      </ul>
      <p>
        <code>Front-End DTI = (Total Monthly Housing Costs &divide; Gross Monthly Income) &times; 100</code>
      </p>

      <h3>2. Back-End DTI (Total Debt Ratio)</h3>
      <p>
        The back-end ratio incorporates your total monthly financial commitments. Underwriters sum your proposed monthly housing payment with all minimum monthly recurring debt obligations:
      </p>
      <ul>
        <li>Automobile loan or lease payments</li>
        <li>Student loan monthly minimum installments</li>
        <li>Credit card minimum monthly payments</li>
        <li>Personal loans, child support, or court-ordered maintenance</li>
      </ul>
      <p>
        <code>Back-End DTI = [(Total Monthly Housing + Recurring Debts) &divide; Gross Monthly Income] &times; 100</code>
      </p>
      <p>
        Your maximum borrowing limit is determined by <strong>whichever ratio reaches its ceiling first</strong>. If you have significant student debt or automobile loans, your back-end DTI will cap your purchase price before your front-end limit is reached.
      </p>
    </div>

    <!-- FAQS ACCORDION -->
    <div class="rc-section">
      <h2>Frequently Asked Questions About Home Affordability</h2>
      <div class="rc-faq-list">
        <div class="rc-faq-item open">
          <div class="rc-faq-q" onclick="toggleFaq(this)">How much house can I afford on a $100,000 salary?</div>
          <div class="rc-faq-a">With a $100,000 annual income ($8,333/month), $500/month in non-housing debts, a 10% down payment, and a 6.75% interest rate, you can typically afford a home priced between $360,000 (conservative 28% front-end) and $435,000 (conventional 43% back-end). Total monthly payment would range between $2,330 and $3,080 including taxes and insurance.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">What is the 28/36 rule in mortgage underwriting?</div>
          <div class="rc-faq-a">The 28/36 rule is the classic financial planning benchmark for housing affordability. It states that your housing expenses (mortgage principal, interest, taxes, insurance, and HOA dues) should not exceed 28% of your gross monthly income (front-end ratio), and total debt payments (housing plus auto loans, student loans, and credit cards) should not exceed 36% of gross income (back-end ratio).</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">How do existing monthly debts affect how much house I can afford?</div>
          <div class="rc-faq-a">Every dollar of recurring monthly debt directly reduces your available borrowing capacity. Because lenders cap your back-end DTI, every $100 in monthly car or student loan payments reduces your maximum supportable mortgage loan by approximately $14,000 to $16,000 at current 2026 interest rates.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">How much does interest rate affect home affordability?</div>
          <div class="rc-faq-a">As a general rule, a 1.0% increase in mortgage interest rate reduces your home buying purchasing power by approximately 9% to 11%. On a $400,000 loan, an interest rate jump from 6.0% to 7.0% increases the monthly P&I payment by about $260/month, requiring an additional $9,000 in gross annual income to qualify for the same house.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">What is Private Mortgage Insurance (PMI) and when is it required?</div>
          <div class="rc-faq-a">PMI is required on conventional loans when your down payment is less than 20% of the purchase price. PMI typically costs between 0.3% and 1.2% of the original loan balance annually ($75 to $250/month on a $300,000 loan) depending on credit score. Once your home equity reaches 20%, you can request PMI cancellation under the federal Homeowners Protection Act.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">What is the difference between front-end and back-end DTI?</div>
          <div class="rc-faq-a">Front-end DTI (housing ratio) compares only your prospective monthly housing costs (PITIA) against gross monthly income. Back-end DTI (total debt ratio) includes housing costs PLUS all existing monthly credit obligations (car payments, student loans, credit card minimums, alimony). Lenders evaluate both, and your borrowing capacity is capped by whichever limit is reached first.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">Can I buy a house with a DTI higher than 43%?</div>
          <div class="rc-faq-a">Yes. While 43% is the standard Qualified Mortgage (QM) benchmark for Fannie Mae and Freddie Mac, automated underwriting systems (Desktop Underwriter) allow conventional DTI ratios up to 45% or 50% with compensating factors (e.g., 740+ credit score, 6+ months cash reserves). FHA loans routinely allow back-end DTIs up to 46.9% to 50% with strong credit and cash assets.</div>
        </div>
        <div class="rc-faq-item">
          <div class="rc-faq-q" onclick="toggleFaq(this)">How much cash should I keep after buying a home?</div>
          <div class="rc-faq-a">Financial advisors strongly recommend maintaining 3 to 6 months of living expenses (mortgage payment plus basic living costs) in an emergency fund after closing. Do not drain 100% of your savings for the down payment and closing costs, as unexpected home maintenance, moving expenses, and appliance replacements frequently occur during the first year of homeownership.</div>
        </div>
      </div>
    </div>

    <!-- RELATED CALCULATORS -->
    <div class="rc-section">
      <h2>Related Real Estate &amp; Mortgage Calculators</h2>
      <p>Analyze your complete homebuying process with our connected tools:</p>
      <div class="rc-related">
        <a href="/real-estate/mortgage-calculator" class="rc-rel-link">Mortgage PITI Calculator</a>
        <a href="/real-estate/down-payment-calculator" class="rc-rel-link">Down Payment Calculator</a>
        <a href="/real-estate/closing-cost-calculator" class="rc-rel-link">Closing Cost Calculator</a>
        <a href="/loan-calculators/debt-to-income-calculator" class="rc-rel-link">DTI Calculator</a>
        <a href="/real-estate/hoa-fee-calculator" class="rc-rel-link">HOA Buying Power Impact</a>
        <a href="/real-estate/rent-vs-buy-calculator" class="rc-rel-link">Rent vs. Buy Calculator</a>
        <a href="/real-estate/property-tax-calculator" class="rc-rel-link">Property Tax by State</a>
        <a href="/loan-calculators/mortgage-payoff-calculator" class="rc-rel-link">Mortgage Payoff Calculator</a>
      </div>
    </div>
  </div>
</main>

<script>
function formatUSD(num) {
  return '$' + Math.round(num).toLocaleString('en-US');
}

function toggleAdvanced() {
  const panel = document.getElementById('advPanel');
  const text = document.getElementById('advToggleText');
  if (panel.style.display === 'none' || panel.style.display === '') {
    panel.style.display = 'block';
    text.innerHTML = '⚙ Hide Taxes, Insurance &amp; HOA Dues &minus;';
  } else {
    panel.style.display = 'none';
    text.innerHTML = '⚙ Adjust Taxes, Insurance &amp; HOA Dues &plus;';
  }
}

// Compute maximum home price given an allowable monthly housing budget
function solveMaxPrice(maxAllowableHousing, downPayment, rate, termYears, propTaxRate, annualIns, monthlyHOA, pmiRatePct) {
  const r = (rate / 100) / 12;
  const n = termYears * 12;
  const monthlyIns = annualIns / 12;

  // Monthly available for (P&I + Taxes + PMI) = maxAllowableHousing - monthlyIns - monthlyHOA
  const targetAvailable = maxAllowableHousing - monthlyIns - monthlyHOA;
  if (targetAvailable <= 0) return { price: downPayment, loan: 0, pi: 0, taxes: 0, pmi: 0, totalPiti: maxAllowableHousing };

  // Loan factor: monthly payment per $1 of loan
  const pmtFactor = (r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1);

  // Binary search to find price where PI + Taxes + PMI = targetAvailable
  let low = downPayment;
  let high = downPayment + (targetAvailable / pmtFactor) * 1.5;
  let bestPrice = low;

  for (let i = 0; i < 40; i++) {
    const midPrice = (low + high) / 2;
    const loan = Math.max(0, midPrice - downPayment);
    const pi = loan * pmtFactor;
    const taxes = (midPrice * (propTaxRate / 100)) / 12;
    const isPmi = (downPayment / midPrice) < 0.20 && loan > 0;
    const pmi = isPmi ? (loan * (pmiRatePct / 100)) / 12 : 0;
    const cost = pi + taxes + pmi;

    if (cost <= targetAvailable) {
      bestPrice = midPrice;
      low = midPrice;
    } else {
      high = midPrice;
    }
  }

  const finalLoan = Math.max(0, bestPrice - downPayment);
  const finalPi = finalLoan * pmtFactor;
  const finalTaxes = (bestPrice * (propTaxRate / 100)) / 12;
  const finalIsPmi = (downPayment / bestPrice) < 0.20 && finalLoan > 0;
  const finalPmi = finalIsPmi ? (finalLoan * (pmiRatePct / 100)) / 12 : 0;
  const finalTotalPiti = finalPi + finalTaxes + finalPmi + monthlyIns + monthlyHOA;

  return {
    price: bestPrice,
    loan: finalLoan,
    pi: finalPi,
    taxes: finalTaxes,
    pmi: finalPmi,
    insurance: monthlyIns,
    hoa: monthlyHOA,
    totalPiti: finalTotalPiti
  };
}

function calculateAffordability() {
  const annualIncome = parseFloat(document.getElementById('annualIncome').value) || 0;
  const monthlyDebts = parseFloat(document.getElementById('monthlyDebts').value) || 0;
  const downPayment = parseFloat(document.getElementById('downPayment').value) || 0;
  const dtiMode = document.getElementById('dtiStandard').value;
  const rate = parseFloat(document.getElementById('interestRate').value) || 6.75;
  const termYears = parseInt(document.getElementById('loanTermYears').value) || 30;

  const propTaxRate = parseFloat(document.getElementById('propertyTaxPct').value) || 1.20;
  const annualIns = parseFloat(document.getElementById('homeInsuranceAnnual').value) || 1500;
  const monthlyHOA = parseFloat(document.getElementById('monthlyHOA').value) || 0;
  const pmiRatePct = parseFloat(document.getElementById('pmiRatePct').value) || 0.75;

  const monthlyIncome = annualIncome / 12;
  document.getElementById('monthlyIncomeHint').textContent = formatUSD(monthlyIncome) + ' / month';

  // DTI Caps
  let frontCap = 0.36;
  let backCap = 0.43;
  if (dtiMode === 'conservative') {
    frontCap = 0.28;
    backCap = 0.36;
  } else if (dtiMode === 'conventional') {
    frontCap = 0.36;
    backCap = 0.43;
  } else if (dtiMode === 'aggressive') {
    frontCap = 0.45;
    backCap = 0.50;
  }

  // Max housing budget allowed by front-end vs back-end
  const maxHousingFront = monthlyIncome * frontCap;
  const maxHousingBack = Math.max(0, (monthlyIncome * backCap) - monthlyDebts);
  const activeHousingBudget = Math.min(maxHousingFront, maxHousingBack);

  const res = solveMaxPrice(activeHousingBudget, downPayment, rate, termYears, propTaxRate, annualIns, monthlyHOA, pmiRatePct);

  // Compute 3 comparison scenarios
  const consBudget = Math.min(monthlyIncome * 0.28, Math.max(0, monthlyIncome * 0.36 - monthlyDebts));
  const convBudget = Math.min(monthlyIncome * 0.36, Math.max(0, monthlyIncome * 0.43 - monthlyDebts));
  const aggrBudget = Math.min(monthlyIncome * 0.45, Math.max(0, monthlyIncome * 0.50 - monthlyDebts));

  const resCons = solveMaxPrice(consBudget, downPayment, rate, termYears, propTaxRate, annualIns, monthlyHOA, pmiRatePct);
  const resConv = solveMaxPrice(convBudget, downPayment, rate, termYears, propTaxRate, annualIns, monthlyHOA, pmiRatePct);
  const resAggr = solveMaxPrice(aggrBudget, downPayment, rate, termYears, propTaxRate, annualIns, monthlyHOA, pmiRatePct);

  // Update UI Elements
  document.getElementById('resMaxPrice').textContent = formatUSD(res.price);
  const equityPct = res.price > 0 ? ((downPayment / res.price) * 100).toFixed(1) : 0;
  document.getElementById('resDownSummary').textContent = `With ${formatUSD(downPayment)} down payment (${equityPct}% equity)`;

  document.getElementById('resMaxLoan').textContent = formatUSD(res.loan);
  document.getElementById('resLoanSub').textContent = `${termYears}-Year Fixed at ${rate}%`;

  document.getElementById('resMonthlyPITI').textContent = formatUSD(res.totalPiti);
  const actualFrontDti = monthlyIncome > 0 ? ((res.totalPiti / monthlyIncome) * 100).toFixed(1) : 0;
  const actualBackDti = monthlyIncome > 0 ? (((res.totalPiti + monthlyDebts) / monthlyIncome) * 100).toFixed(1) : 0;
  document.getElementById('resDtiUsed').textContent = `${actualFrontDti}% Front / ${actualBackDti}% Back DTI`;

  // Itemized breakdown
  document.getElementById('bkPI').textContent = formatUSD(res.pi);
  document.getElementById('bkTaxes').textContent = formatUSD(res.taxes);
  document.getElementById('bkInsurance').textContent = formatUSD(res.insurance);
  document.getElementById('bkPMI').textContent = formatUSD(res.pmi);
  document.getElementById('bkHOA').textContent = formatUSD(res.hoa);
  document.getElementById('bkTotalPITI').textContent = formatUSD(res.totalPiti);

  document.getElementById('bkPmiRow').style.display = res.pmi > 0 ? 'flex' : 'none';
  document.getElementById('bkHoaRow').style.display = monthlyHOA > 0 ? 'flex' : 'none';

  // Gauges
  document.getElementById('gaugeFrontLabel').textContent = `${actualFrontDti}% (Max ${(frontCap*100).toFixed(0)}%)`;
  document.getElementById('gaugeFrontFill').style.width = Math.min(100, (actualFrontDti / (frontCap*100)) * 100) + '%';

  document.getElementById('gaugeBackLabel').textContent = `${actualBackDti}% (Max ${(backCap*100).toFixed(0)}%)`;
  document.getElementById('gaugeBackFill').style.width = Math.min(100, (actualBackDti / (backCap*100)) * 100) + '%';

  // Scenario Matrix
  document.getElementById('scenConsPrice').textContent = formatUSD(resCons.price);
  document.getElementById('scenConsPmt').textContent = `${formatUSD(resCons.totalPiti)}/mo`;
  document.getElementById('scenConvPrice').textContent = formatUSD(resConv.price);
  document.getElementById('scenConvPmt').textContent = `${formatUSD(resConv.totalPiti)}/mo`;
  document.getElementById('scenAggrPrice').textContent = formatUSD(resAggr.price);
  document.getElementById('scenAggrPmt').textContent = `${formatUSD(resAggr.totalPiti)}/mo`;
}

function resetForm() {
  document.getElementById('annualIncome').value = 115000;
  document.getElementById('monthlyDebts').value = 650;
  document.getElementById('downPayment').value = 50000;
  document.getElementById('dtiStandard').value = 'conventional';
  document.getElementById('interestRate').value = 6.75;
  document.getElementById('loanTermYears').value = 30;
  document.getElementById('propertyTaxPct').value = 1.20;
  document.getElementById('homeInsuranceAnnual').value = 1500;
  document.getElementById('monthlyHOA').value = 0;
  document.getElementById('pmiRatePct').value = 0.75;
  calculateAffordability();
}

function printCalc() {
  window.print();
}

function downloadCSV() {
  const income = document.getElementById('annualIncome').value;
  const debts = document.getElementById('monthlyDebts').value;
  const down = document.getElementById('downPayment').value;
  const maxPrice = document.getElementById('resMaxPrice').textContent.replace(/[$,]/g, '');
  const maxLoan = document.getElementById('resMaxLoan').textContent.replace(/[$,]/g, '');
  const piti = document.getElementById('resMonthlyPITI').textContent.replace(/[$,]/g, '');

  let csv = "Metric,Value\n";
  csv += `Annual Gross Income,${income}\n`;
  csv += `Monthly Debt Obligations,${debts}\n`;
  csv += `Down Payment,${down}\n`;
  csv += `Maximum Home Price,${maxPrice}\n`;
  csv += `Maximum Loan Amount,${maxLoan}\n`;
  csv += `Monthly PITI Payment,${piti}\n`;

  const blob = new Blob([csv], { type: 'text/csv' });
  const url = URL.createObjectURL(blob);
  const a = document.createElement('a');
  a.href = url;
  a.download = `home-affordability-report-${new Date().toISOString().slice(0,10)}.csv`;
  document.body.appendChild(a);
  a.click();
  document.body.removeChild(a);
}

function toggleFaq(el) {
  el.parentElement.classList.toggle('open');
}

window.addEventListener('DOMContentLoaded', () => {
  calculateAffordability();
});
</script>

<?php require_once '../includes/footer.php'; ?>
