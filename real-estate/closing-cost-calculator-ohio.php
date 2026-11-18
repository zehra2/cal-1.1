<?php
$currentYear = date('Y');
$pageTitle       = "Ohio Closing Cost Calculator ($currentYear) | OH Buyer & Seller Fees";
$metaDescription = "Free Ohio closing cost calculator $currentYear. Estimate OH buyer closing costs: conveyance fee (0.1%), title insurance, recording fees, and print a free PDF checklist.";
$metaKeywords    = 'ohio closing cost calculator, OH closing costs, closing costs ohio, ohio conveyance fee, ohio title insurance, ohio home buying costs, ohio real estate closing';
$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'WebApplication',
   'name'=>'Ohio Closing Cost Calculator',
   'url'=>'https://americacalculator.com/real-estate/closing-cost-calculator-ohio',
   'description'=>'Estimate Ohio home buyer closing costs: conveyance fee, title insurance, recording fees, prepaid property tax, and total cash to close. Includes free printable PDF checklist.',
   'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All',
   'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Real Estate','item'=>'https://americacalculator.com/real-estate/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'Closing Cost Calculator','item'=>'https://americacalculator.com/real-estate/closing-cost-calculator'],
    ['@type'=>'ListItem','position'=>4,'name'=>'Ohio Closing Costs','item'=>'https://americacalculator.com/real-estate/closing-cost-calculator-ohio'],
  ]],
  ['@type'=>'HowTo','name'=>'How to Use the Ohio Closing Cost Calculator','step'=>[
    ['@type'=>'HowToStep','name'=>'Enter purchase price','text'=>'Type the total home purchase price. Ohio median home price is approximately $240,000.'],
    ['@type'=>'HowToStep','name'=>'Select county','text'=>'Choose your Ohio county. Most charge $0.10 per $100 conveyance fee; some charge additional local fees.'],
    ['@type'=>'HowToStep','name'=>'Choose loan type','text'=>'Select Conventional, FHA, VA, or Cash to apply loan-specific fees.'],
    ['@type'=>'HowToStep','name'=>'Review and print','text'=>'See your itemized Ohio closing cost breakdown and click Print to save a PDF checklist.'],
  ]],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'What are typical closing costs in Ohio?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Ohio buyer closing costs typically range from 2% to 4% of the purchase price excluding down payment. On a $250,000 home expect $5,000-$10,000. Ohio has one of the lowest closing cost burdens in the Midwest thanks to a low conveyance fee (0.1%) and no mandatory attorney requirement.']],
    ['@type'=>'Question','name'=>'What is the Ohio conveyance fee?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'The Ohio conveyance fee is charged by the county at $0.10 per $100 of the property sale price (0.1%). On a $300,000 home the fee is $300. It is customarily paid by the seller but is negotiable in the purchase contract.']],
    ['@type'=>'Question','name'=>'Does Ohio require an attorney at closing?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'No. Ohio does not require an attorney at real estate closings. Closings are handled by title companies and licensed escrow officers. An attorney is optional.']],
    ['@type'=>'Question','name'=>'Who pays closing costs in Ohio?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Buyers typically pay: origination fees, appraisal, lender title insurance, recording fees, and prepaid taxes/insurance. Sellers pay: agent commissions, conveyance fee, owner title insurance, and prorated property taxes. All are negotiable.']],
    ['@type'=>'Question','name'=>'How much are closing costs on a $300,000 Ohio home?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'On a $300,000 Ohio home with 20% down (loan $240,000): origination ($1,800), appraisal ($550), title ($900), recording ($180), inspection ($400), prepaid tax 2mo (~$800), insurance ($1,200). Total: approximately $5,830-$7,500 before down payment.']],
    ['@type'=>'Question','name'=>'What counties in Ohio have the highest property taxes?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Cuyahoga County (Cleveland) has the highest effective property tax rate in Ohio at approximately 2.2%. Summit County (Akron) is also high at 2.0%. Rural southeastern Ohio counties like Vinton and Morgan have the lowest rates around 0.9-1.0%.']],
    ['@type'=>'Question','name'=>'What is the OHFA down payment assistance program?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'The Ohio Housing Finance Agency (OHFA) Your Choice! program offers 2.5% or 5% of the purchase price in forgivable down payment/closing cost assistance for qualifying first-time buyers with a minimum 640 credit score. Visit ohiohome.org for current income limits by county.']],
    ['@type'=>'Question','name'=>'Is Ohio a good state for low closing costs?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. Ohio consistently ranks among the states with the lowest closing costs in dollar terms. The 0.1% conveyance fee (vs 2-4% in NY/DE), no attorney requirement, and competitive title market make Ohio much cheaper than northeastern states.']],
  ]],
]];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f8fafc;}
.cc-wrap{max-width:1060px;margin:0 auto;padding:2rem 1.25rem 5rem;}
.cc-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}.cc-bc a{color:#64748b;text-decoration:none;}
.cc-hero h1{font-size:1.85rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.cc-hero p{font-size:.97rem;color:#64748b;line-height:1.65;margin:0 0 .5rem;border-left:3px solid #7c3aed;padding-left:.9rem;}
.cc-meta{font-size:.78rem;color:#94a3b8;margin-bottom:1.75rem;}
.cc-layout{display:grid;grid-template-columns:1fr 1fr;gap:1.75rem;margin-bottom:1.75rem;}
.cc-card{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden;}
.cc-card-head{background:#6d28d9;color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;}
.cc-body{padding:1.5rem;}
.cc-field{margin-bottom:1rem;}
.cc-field label{display:block;font-size:.85rem;font-weight:600;color:#1e293b;margin-bottom:.35rem;}
.cc-field input,.cc-field select{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.94rem;color:#0f172a;outline:none;background:#fff;transition:border-color .2s;box-sizing:border-box;}
.cc-field input:focus,.cc-field select:focus{border-color:#7c3aed;}
.cc-field .hint{font-size:.73rem;color:#94a3b8;margin-top:.25rem;}
.cc-grid{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.cc-sec-lbl{font-size:.7rem;font-weight:800;text-transform:uppercase;letter-spacing:.07em;color:#94a3b8;margin:1.2rem 0 .7rem;padding-bottom:.3rem;border-bottom:1px solid #f1f5f9;}
.cc-btn{width:100%;background:#6d28d9;color:#fff;padding:13px;border:none;border-radius:8px;font-size:.97rem;font-weight:700;cursor:pointer;margin-top:.5rem;transition:background .2s;}
.cc-btn:hover{background:#7c3aed;}
.cc-result{background:#f5f3ff;border:1.5px solid #c4b5fd;border-radius:10px;padding:1.25rem 1.5rem;margin-top:1.25rem;}
.cc-result-primary{text-align:center;margin-bottom:1rem;}
.cc-result-primary .val{font-size:2.4rem;font-weight:800;color:#6d28d9;display:block;line-height:1;}
.cc-result-primary .lbl{font-size:.83rem;color:#64748b;}
.cc-stat-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:.65rem;margin-bottom:.85rem;}
.cc-stat{background:#fff;border-radius:8px;padding:.75rem;text-align:center;border:1px solid #c4b5fd;}
.cc-stat .sv{display:block;font-size:1rem;font-weight:800;color:#6d28d9;}
.cc-stat .sl{font-size:.69rem;color:#64748b;font-weight:600;line-height:1.3;}
.cc-pct{text-align:center;font-size:.83rem;color:#64748b;margin-bottom:.75rem;}
.cc-pct strong{color:#6d28d9;}
.cc-lines{background:#fff;border:1px solid #c4b5fd;border-radius:8px;padding:.75rem 1rem;}
.cc-line{display:flex;justify-content:space-between;padding:.3rem 0;border-bottom:1px solid #f5f3ff;font-size:.86rem;}
.cc-line:last-child{border-bottom:none;font-weight:700;color:#6d28d9;}
.cc-line .ll{color:#64748b;}.cc-line .lv{font-weight:600;color:#1e293b;}
.pdf-bar{display:flex;gap:.75rem;margin-top:1rem;flex-wrap:wrap;}
.pdf-btn{display:inline-flex;align-items:center;gap:.5rem;background:#fff;border:2px solid #6d28d9;color:#6d28d9;padding:9px 18px;border-radius:8px;font-size:.88rem;font-weight:700;cursor:pointer;transition:all .2s;}
.pdf-btn:hover{background:#6d28d9;color:#fff;}
.cc-section{background:#fff;border-radius:12px;border:1px solid #e2e8f0;padding:1.75rem;margin-bottom:1.5rem;}
.cc-section h2{font-size:1.3rem;color:#0f172a;margin:0 0 .85rem;padding-bottom:.6rem;border-bottom:2px solid #f5f3ff;}
.cc-section h3{font-size:1.05rem;color:#0f172a;margin:1.25rem 0 .55rem;}
.cc-section p{color:#475569;line-height:1.72;font-size:.95rem;margin-bottom:.9rem;}
.cc-section a{color:#7c3aed;font-weight:600;text-decoration:none;}
.cc-section a:hover{text-decoration:underline;}
.cc-table{width:100%;border-collapse:collapse;border-radius:9px;overflow:hidden;border:1px solid #e2e8f0;margin-bottom:1rem;}
.cc-table th{background:#6d28d9;color:#fff;padding:9px 13px;font-size:.84rem;font-weight:600;text-align:left;}
.cc-table td{padding:9px 13px;border-bottom:1px solid #f1f5f9;font-size:.87rem;color:#334155;}
.cc-table tr:last-child td{border-bottom:none;}
.cc-table tr:nth-child(even) td{background:#f8fafc;}
.cc-table .hl{color:#6d28d9;font-weight:700;}
.cc-table .r{color:#dc2626;font-weight:700;}
.cc-info{background:#f5f3ff;border-left:4px solid #7c3aed;border-radius:0 8px 8px 0;padding:.9rem 1.1rem;margin:1rem 0;font-size:.9rem;color:#4c1d95;line-height:1.65;}
.cc-warn{background:#fffbeb;border-left:4px solid #f59e0b;border-radius:0 8px 8px 0;padding:.9rem 1.1rem;margin:1rem 0;font-size:.9rem;color:#78350f;line-height:1.65;}
.cc-good{background:#f0fdf4;border-left:4px solid #16a34a;border-radius:0 8px 8px 0;padding:.9rem 1.1rem;margin:1rem 0;font-size:.9rem;color:#14532d;line-height:1.65;}
.cc-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}
.cc-faq-item:last-child{border-bottom:none;}
.cc-faq-q{font-size:.95rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;}
.cc-faq-q::after{content:'+';color:#7c3aed;font-size:1.2rem;flex-shrink:0;}
.cc-faq-item.open .cc-faq-q::after{content:'-';}
.cc-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.cc-faq-item.open .cc-faq-a{display:block;}
.cc-related{display:grid;grid-template-columns:repeat(auto-fill,minmax(175px,1fr));gap:.75rem;margin-top:.75rem;}
.cc-rel{display:block;background:#f5f3ff;border:1.5px solid #c4b5fd;border-radius:8px;padding:.75rem 1rem;font-size:.85rem;font-weight:600;color:#6d28d9;text-decoration:none;text-align:center;transition:background .15s;}
.cc-rel:hover{background:#ede9fe;}
.state-badge{display:inline-flex;align-items:center;gap:.5rem;background:#f5f3ff;border:1.5px solid #c4b5fd;border-radius:20px;padding:5px 14px;font-size:.82rem;font-weight:700;color:#6d28d9;margin-bottom:1rem;}
.checklist-section{background:#fff;border:2px dashed #c4b5fd;border-radius:12px;padding:1.75rem;margin-bottom:1.5rem;}
.checklist-section h2{font-size:1.2rem;color:#0f172a;margin:0 0 .5rem;}
.checklist-grid{display:grid;grid-template-columns:1fr 1fr;gap:.5rem;margin-bottom:1rem;}
.checklist-item{display:flex;align-items:flex-start;gap:.6rem;font-size:.87rem;color:#334155;line-height:1.5;padding:.2rem 0;}
.checklist-item::before{content:'\2610';font-size:1.1rem;flex-shrink:0;color:#6d28d9;}
@media(max-width:760px){.cc-layout,.cc-grid,.cc-stat-grid,.checklist-grid{grid-template-columns:1fr;}.cc-hero h1{font-size:1.5rem;}}
@media print{.cc-btn,.pdf-bar,nav,footer,header,.cc-bc,.state-badge{display:none!important;}.cc-wrap{padding:0!important;}body{background:#fff!important;}.checklist-section{border:1.5px solid #999!important;page-break-inside:avoid;}}
</style>

<main id="main-content">
<div class="cc-wrap">
  <div class="cc-bc"><a href="/">Home</a> &rsaquo; <a href="/real-estate/">Real Estate</a> &rsaquo; <a href="/real-estate/closing-cost-calculator">Closing Cost Calculator</a> &rsaquo; Ohio</div>
  <div class="state-badge">&#127963; Ohio-Specific Calculator</div>
  <div class="cc-hero">
    <h1>Ohio Closing Cost Calculator (<?php echo $currentYear;?>)</h1>
    <p>Estimate Ohio buyer closing costs with county conveyance fee, title insurance, lender fees &mdash; plus a <strong>free printable PDF checklist</strong>. Updated <?php echo $currentYear;?>.</p>
    <div class="cc-meta">&#9997;&#65039; By AmericaCalculator Finance Team | Updated September <?php echo $currentYear;?> | Sources: Ohio Rev. Code &sect;319.54, CFPB, Ohio Title Association</div>
  </div>

  <div class="cc-layout">
    <div class="cc-card">
      <div class="cc-card-head">&#127968; Ohio Closing Cost Calculator</div>
      <div class="cc-body">
        <div class="cc-sec-lbl">Purchase Details</div>
        <div class="cc-grid">
          <div class="cc-field"><label>Purchase Price ($)</label><input type="number" id="oh-price" value="250000" min="0" step="1000"></div>
          <div class="cc-field"><label>Down Payment (%)</label><input type="number" id="oh-down" value="20" min="0" max="100" step="1"><div class="hint">Min 3.5% FHA, 0% VA</div></div>
        </div>
        <div class="cc-grid">
          <div class="cc-field"><label>Ohio County</label>
            <select id="oh-county">
              <option value="0.10">Franklin (Columbus)</option>
              <option value="0.10">Cuyahoga (Cleveland)</option>
              <option value="0.10">Hamilton (Cincinnati)</option>
              <option value="0.10">Summit (Akron)</option>
              <option value="0.10">Montgomery (Dayton)</option>
              <option value="0.10">Lucas (Toledo)</option>
              <option value="0.10">Butler County</option>
              <option value="0.10">Stark (Canton)</option>
              <option value="0.10">Lorain County</option>
              <option value="0.10">Delaware County</option>
              <option value="0.10">Other Ohio County</option>
            </select>
          </div>
          <div class="cc-field"><label>Loan Type</label>
            <select id="oh-type">
              <option value="conventional">Conventional</option>
              <option value="fha">FHA Loan (+1.75% MIP)</option>
              <option value="va">VA Loan (+Funding Fee)</option>
              <option value="cash">All Cash</option>
            </select>
          </div>
        </div>
        <div class="cc-sec-lbl">Adjust Estimates</div>
        <div class="cc-grid">
          <div class="cc-field"><label>Origination Fee (%)</label><input type="number" id="oh-orig" value="0.75" min="0" max="5" step="0.05"><div class="hint">0.5&ndash;1% of loan</div></div>
          <div class="cc-field"><label>Appraisal Fee ($)</label><input type="number" id="oh-appr" value="550" min="0" step="50"></div>
        </div>
        <div class="cc-grid">
          <div class="cc-field"><label>Title Insurance ($)</label><input type="number" id="oh-title" value="900" min="0" step="50"><div class="hint">Lender's policy</div></div>
          <div class="cc-field"><label>Closing / Escrow Fee ($)</label><input type="number" id="oh-atty" value="400" min="0" step="50"></div>
        </div>
        <div class="cc-grid">
          <div class="cc-field"><label>Recording Fees ($)</label><input type="number" id="oh-rec" value="180" min="0" step="10"></div>
          <div class="cc-field"><label>Home Inspection ($)</label><input type="number" id="oh-insp" value="400" min="0" step="50"></div>
        </div>
        <div class="cc-sec-lbl">Prepaid Items</div>
        <div class="cc-grid">
          <div class="cc-field"><label>Annual Property Tax ($)</label><input type="number" id="oh-tax" value="3500" min="0" step="100"><div class="hint">Ohio avg ~1.5% &mdash; 2 months prepaid</div></div>
          <div class="cc-field"><label>Annual Homeowners Insurance ($)</label><input type="number" id="oh-hoi" value="1200" min="0" step="100"><div class="hint">First year paid at closing</div></div>
        </div>
        <button class="cc-btn" onclick="calcOH()">&#9889; Calculate Ohio Closing Costs</button>
        <div class="cc-result" id="oh-result" style="display:none;">
          <div class="cc-result-primary">
            <span class="val" id="oh-total">$0</span>
            <span class="lbl">Estimated Total Cash to Close (Ohio)</span>
          </div>
          <div class="cc-pct" id="oh-pct-line"></div>
          <div class="cc-stat-grid">
            <div class="cc-stat"><span class="sv" id="oh-dp-s">$0</span><span class="sl">Down Payment</span></div>
            <div class="cc-stat"><span class="sv" id="oh-fees-s">$0</span><span class="sl">Closing Costs</span></div>
            <div class="cc-stat"><span class="sv" id="oh-pre-s">$0</span><span class="sl">Prepaids</span></div>
          </div>
          <div class="cc-lines">
            <div class="cc-line"><span class="ll">Down Payment</span><span class="lv" id="oh-l-dp">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Loan Origination Fee</span><span class="lv" id="oh-l-orig">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Appraisal</span><span class="lv" id="oh-l-appr">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Title Insurance (lender)</span><span class="lv" id="oh-l-title">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Closing / Escrow Fee</span><span class="lv" id="oh-l-atty">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Recording Fees</span><span class="lv" id="oh-l-rec">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Home Inspection</span><span class="lv" id="oh-l-insp">&mdash;</span></div>
            <div class="cc-line" id="oh-extra-row" style="display:none;"><span class="ll" id="oh-extra-lbl">FHA MIP / VA Fee</span><span class="lv" id="oh-extra">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Prepaid Property Tax (2 mo)</span><span class="lv" id="oh-l-tax">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Prepaid Insurance (1 yr)</span><span class="lv" id="oh-l-hoi">&mdash;</span></div>
            <div class="cc-line"><span class="ll" style="font-weight:700;color:#0f172a;">Total Cash to Close</span><span class="lv" id="oh-l-tot">&mdash;</span></div>
          </div>
          <div class="pdf-bar">
            <button class="pdf-btn" onclick="window.print()">&#128424; Print / Save as PDF</button>
            <button class="pdf-btn" onclick="copyResults()">&#128203; Copy Results</button>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="cc-section" style="margin-bottom:1.25rem;">
        <h2>Ohio Closing Costs by Home Price (<?php echo $currentYear;?>)</h2>
        <table class="cc-table">
          <thead><tr><th>Home Price</th><th>Low (2%)</th><th>High (4%)</th></tr></thead>
          <tbody>
            <tr><td>$150,000</td><td>$3,000</td><td>$6,000</td></tr>
            <tr><td>$200,000</td><td>$4,000</td><td>$8,000</td></tr>
            <tr><td>$250,000</td><td>$5,000</td><td>$10,000</td></tr>
            <tr><td>$300,000</td><td>$6,000</td><td>$12,000</td></tr>
            <tr><td>$400,000</td><td>$8,000</td><td>$16,000</td></tr>
            <tr><td>$500,000</td><td>$10,000</td><td>$20,000</td></tr>
          </tbody>
        </table>
        <p style="font-size:.82rem;color:#94a3b8;margin:0;">Buyer costs only, excluding down payment.</p>
      </div>
      <div class="cc-section">
        <h2>Ohio vs. Other States</h2>
        <div class="cc-good">&#10003; <strong>Ohio has some of the lowest closing costs in the US</strong> &mdash; 0.1% conveyance fee, no attorney required, competitive title rates.</div>
        <table class="cc-table">
          <thead><tr><th>State</th><th>Transfer Tax</th><th>Attorney?</th><th>Avg Range</th></tr></thead>
          <tbody>
            <tr><td><strong>Ohio</strong></td><td class="hl">0.1%</td><td class="hl">No</td><td class="hl">2%&ndash;4%</td></tr>
            <tr><td>Texas</td><td class="hl">None</td><td class="hl">No</td><td>2%&ndash;3.5%</td></tr>
            <tr><td>Florida</td><td>0.7%</td><td class="hl">No</td><td>2%&ndash;4%</td></tr>
            <tr><td>California</td><td>0.11%+</td><td class="hl">No</td><td>1%&ndash;3%</td></tr>
            <tr><td>New York</td><td class="r">1%&ndash;3.9%+</td><td class="r">Yes</td><td class="r">3%&ndash;6%+</td></tr>
            <tr><td>Pennsylvania</td><td class="r">2% (split)</td><td class="r">Yes</td><td class="r">3%&ndash;5%</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="cc-section">
    <h2>Ohio Conveyance Fee: 0.1% &mdash; One of the Lowest Transfer Taxes in the US</h2>
    <p>The Ohio conveyance fee (Ohio Revised Code &sect;319.54) is charged by each county at <strong>$0.10 per $100 of the sale price</strong>. This equals just 0.1% &mdash; compare to Delaware (4%), Pennsylvania (2%), or New York (1%&ndash;3.9%).</p>
    <table class="cc-table">
      <thead><tr><th>Purchase Price</th><th>Conveyance Fee (0.1%)</th><th>Who Pays</th></tr></thead>
      <tbody>
        <tr><td>$150,000</td><td class="hl">$150</td><td>Seller (negotiable)</td></tr>
        <tr><td>$250,000</td><td class="hl">$250</td><td>Seller (negotiable)</td></tr>
        <tr><td>$350,000</td><td class="hl">$350</td><td>Seller (negotiable)</td></tr>
        <tr><td>$500,000</td><td class="hl">$500</td><td>Seller (negotiable)</td></tr>
        <tr><td>$750,000</td><td class="hl">$750</td><td>Seller (negotiable)</td></tr>
      </tbody>
    </table>
    <div class="cc-info">&#128161; The conveyance fee is customarily paid by the seller in Ohio but is legally negotiable. Confirm in your purchase agreement who is responsible. The fee is paid to the county auditor when the deed is recorded.</div>
  </div>

  <div class="cc-section">
    <h2>Ohio Property Taxes by County: Impact on Your Escrow at Closing</h2>
    <p>While Ohio has low closing costs, property taxes vary significantly by county and represent the largest variable in your prepaid escrow (2 months collected at closing).</p>
    <table class="cc-table">
      <thead><tr><th>County</th><th>Avg Tax Rate</th><th>Annual on $300K</th><th>2-Month Escrow</th></tr></thead>
      <tbody>
        <tr><td><strong>Cuyahoga (Cleveland)</strong></td><td class="r">2.20%</td><td class="r">$6,600</td><td class="r">$1,100</td></tr>
        <tr><td><strong>Summit (Akron)</strong></td><td class="r">2.00%</td><td class="r">$6,000</td><td class="r">$1,000</td></tr>
        <tr><td><strong>Montgomery (Dayton)</strong></td><td>1.80%</td><td>$5,400</td><td>$900</td></tr>
        <tr><td><strong>Hamilton (Cincinnati)</strong></td><td>1.65%</td><td>$4,950</td><td>$825</td></tr>
        <tr><td><strong>Franklin (Columbus)</strong></td><td>1.60%</td><td>$4,800</td><td>$800</td></tr>
        <tr><td><strong>Delaware County</strong></td><td class="hl">1.40%</td><td class="hl">$4,200</td><td class="hl">$700</td></tr>
        <tr><td><strong>Warren County</strong></td><td class="hl">1.30%</td><td class="hl">$3,900</td><td class="hl">$650</td></tr>
        <tr><td><strong>Knox / Holmes County</strong></td><td class="hl">1.10%</td><td class="hl">$3,300</td><td class="hl">$550</td></tr>
      </tbody>
    </table>
    <div class="cc-warn">&#9888;&#65039; Ohio's homestead exemption reduces assessed value for qualifying seniors (65+) and permanently disabled homeowners. Apply through your county auditor after closing.</div>
  </div>

  <div class="cc-section">
    <h2>Ohio First-Time Homebuyer Programs That Cut Closing Costs</h2>
    <p>The <strong>Ohio Housing Finance Agency (OHFA)</strong> offers several programs to reduce closing costs and down payment needs:</p>
    <table class="cc-table">
      <thead><tr><th>Program</th><th>What It Offers</th><th>Who Qualifies</th></tr></thead>
      <tbody>
        <tr><td><strong>Your Choice! DPA</strong></td><td>2.5% or 5% forgivable closing cost/down payment assistance</td><td>First-time buyers, 640+ credit, income limits by county</td></tr>
        <tr><td><strong>Ohio Heroes</strong></td><td>Below-market mortgage rates</td><td>Veterans, nurses, teachers, police, firefighters</td></tr>
        <tr><td><strong>Grants for Grads</strong></td><td>2.5% or 5% DPA for recent graduates</td><td>Graduated within 4 years, Ohio residence</td></tr>
        <tr><td><strong>Mortgage Tax Credit</strong></td><td>30&ndash;40% of mortgage interest as federal tax credit (max $2,000/yr)</td><td>First-time buyers, income &amp; price limits apply</td></tr>
      </tbody>
    </table>
    <div class="cc-info">&#128161; OHFA assistance is a 0% interest second mortgage forgiven at 20% per year. Visit <a href="https://www.ohiohome.org" target="_blank" rel="noopener">ohiohome.org</a> for current county-level limits.</div>
  </div>

  <div class="checklist-section" id="ohio-checklist">
    <h2>&#128203; Free Ohio Home Buyer Closing Checklist &mdash; Print or Save as PDF</h2>
    <p style="color:#64748b;font-size:.9rem;margin-bottom:1rem;">Use this before your Ohio closing day. Click <strong>Print / Save as PDF</strong> to save a copy.</p>
    <div class="checklist-grid">
      <div>
        <p style="font-weight:700;font-size:.85rem;color:#4c1d95;margin-bottom:.5rem;">&#128196; Documents to Bring</p>
        <div class="checklist-item">Government-issued photo ID (2 forms)</div>
        <div class="checklist-item">Cashier's check or wire transfer confirmation</div>
        <div class="checklist-item">Homeowners insurance binder / policy</div>
        <div class="checklist-item">Closing Disclosure (CD) &mdash; received 3 days before</div>
        <div class="checklist-item">Original Loan Estimate (LE) &mdash; compare to CD</div>
        <div class="checklist-item">Signed purchase contract</div>
        <div class="checklist-item">Home inspection report</div>
        <div class="checklist-item">Any seller concession documentation</div>
      </div>
      <div>
        <p style="font-weight:700;font-size:.85rem;color:#4c1d95;margin-bottom:.5rem;">&#10003; Ohio-Specific Checks</p>
        <div class="checklist-item">Confirm conveyance fee payer (buyer or seller)</div>
        <div class="checklist-item">Verify lender's AND owner's title insurance</div>
        <div class="checklist-item">Check prorated property tax calculation</div>
        <div class="checklist-item">Confirm county recording fees</div>
        <div class="checklist-item">HOA transfer fees reviewed (if applicable)</div>
        <div class="checklist-item">Compare CD to Loan Estimate &mdash; flag increases</div>
        <div class="checklist-item">Ask about OHFA assistance programs</div>
        <div class="checklist-item">Final walkthrough completed</div>
      </div>
    </div>
    <div style="margin-top:.75rem;">
      <button class="pdf-btn" onclick="window.print()" style="background:#6d28d9;color:#fff;border-color:#6d28d9;">&#128424; Print / Save Checklist as PDF</button>
    </div>
    <p style="font-size:.78rem;color:#94a3b8;margin-top:.75rem;margin-bottom:0;">To save as PDF: Print &rarr; Destination: "Save as PDF" &rarr; Save. Works in Chrome, Edge, Firefox &amp; Safari.</p>
  </div>

  <div class="cc-section">
    <h2>Frequently Asked Questions: Ohio Closing Costs</h2>
    <?php $faqs=[
      ['What are typical closing costs in Ohio for a buyer?',"Ohio buyer closing costs range from 2% to 4% of the purchase price, excluding down payment. On a \$250,000 home expect \$5,000&ndash;\$10,000. Ohio's low conveyance fee (0.1%), no attorney requirement, and competitive title rates keep costs well below most US states. The biggest cost driver is your prepaid property tax escrow, which varies by county."],
      ['Who pays the Ohio conveyance fee?','The Ohio conveyance fee (\$0.10 per \$100 of price, or 0.1%) is customarily paid by the seller. However, it is legally negotiable &mdash; always confirm who pays in your purchase contract. The fee is collected by the county auditor when the deed is recorded.'],
      ['Does Ohio have a real estate transfer tax?',"Ohio's conveyance fee is technically a transfer tax at 0.1% of the sale price &mdash; one of the lowest in the nation. Ohio does not have a statewide documentary stamp tax, mansion tax, or city-level transfer tax like NYC or Los Angeles."],
      ['What closing costs does a seller pay in Ohio?',"Ohio sellers typically pay: real estate agent commissions (5%&ndash;6%), the county conveyance fee (\$0.10/\$100), attorney fees if applicable, prorated property taxes, and agreed seller concessions. The seller may also pay for the owner's title insurance policy depending on the contract."],
      ['How do I qualify for OHFA down payment assistance?','OHFA Your Choice! requires a minimum 640 credit score, purchase of a primary Ohio residence, and household income within county limits. You must use an OHFA-approved lender. The assistance is forgiven at 20% per year over 5 years. Visit ohiohome.org for current limits.'],
      ['Which Ohio county has the best (lowest) closing costs?','Warren County and Delaware County have the lowest property tax rates (1.3&ndash;1.4%) which means lower prepaid escrow at closing. For total closing cost dollars, rural Ohio counties tend to be cheapest. Cuyahoga County (Cleveland) has the highest closing costs due to a 2.2% property tax rate.'],
      ['Can I get seller concessions in Ohio?','Yes. Seller concessions are negotiable in Ohio. Sellers can contribute toward buyer closing costs up to loan program limits: 9% for conventional (25%+ down), 6% for FHA, 4% for VA. In slower Midwestern Ohio markets, asking for 2&ndash;3% seller concessions is common and often granted.'],
    ];
    foreach($faqs as $f):?>
    <div class="cc-faq-item"><div class="cc-faq-q"><?php echo $f[0];?></div><div class="cc-faq-a"><?php echo $f[1];?></div></div>
    <?php endforeach;?>
  </div>

  <div class="cc-section">
    <h2>Related Real Estate Calculators</h2>
    <div class="cc-related">
      <a href="/real-estate/closing-cost-calculator" class="cc-rel">&#127968; National Closing Costs</a>
      <a href="/real-estate/closing-cost-calculator-california" class="cc-rel">&#127796; California Closing Costs</a>
      <a href="/real-estate/closing-cost-calculator-texas" class="cc-rel">&#11088; Texas Closing Costs</a>
      <a href="/real-estate/closing-cost-calculator-florida" class="cc-rel">&#9728;&#65039; Florida Closing Costs</a>
      <a href="/real-estate/mortgage-calculator" class="cc-rel">&#127970; Mortgage Calculator</a>
      <a href="/real-estate/down-payment-calculator" class="cc-rel">&#11015;&#65039; Down Payment Calculator</a>
      <a href="/real-estate/cap-rate-calculator" class="cc-rel">&#128202; Cap Rate Calculator</a>
      <a href="/loan-calculators/personal-loan-calculator" class="cc-rel">&#128179; Personal Loan Calculator</a>
      <a href="/real-estate/" class="cc-rel">&#127960;&#65039; All Real Estate Tools</a>
    </div>
  </div>
</div>

  <div style="max-width:1100px;margin:0 auto 32px;padding:0 20px;">
    <section style="background:#f5f3ff;border:1px solid #c4b5fd;border-radius:12px;padding:16px 22px;">
      <p style="font-size:.84rem;color:#4c1d95;margin:0;line-height:1.6;"><strong>Editorial Note:</strong> This Ohio Closing Cost Calculator is maintained by AmericaCalculator.com and updated with <?php echo $currentYear; ?> fee data. Conveyance fee rates per <a href="https://codes.ohio.gov/ohio-revised-code/section-319.54" rel="noopener noreferrer" target="_blank" style="color:#6d28d9;">Ohio Rev. Code &sect;319.54</a>. Property tax data from the Ohio Dept. of Taxation. OHFA program details from <a href="https://www.ohiohome.org" rel="noopener noreferrer" target="_blank" style="color:#6d28d9;">ohiohome.org</a>. Last updated September <?php echo $currentYear; ?>. Estimates only.</p>
    </section>
  </div>
</main>

<script>
function fmtC(v){return '$'+Math.round(Math.abs(v)).toLocaleString();}
function calcOH(){
  var price=parseFloat(document.getElementById('oh-price').value)||0;
  var downPct=parseFloat(document.getElementById('oh-down').value)||0;
  var type=document.getElementById('oh-type').value;
  var orig=parseFloat(document.getElementById('oh-orig').value)||0;
  var appr=parseFloat(document.getElementById('oh-appr').value)||0;
  var title=parseFloat(document.getElementById('oh-title').value)||0;
  var atty=parseFloat(document.getElementById('oh-atty').value)||0;
  var rec=parseFloat(document.getElementById('oh-rec').value)||0;
  var insp=parseFloat(document.getElementById('oh-insp').value)||0;
  var tax=parseFloat(document.getElementById('oh-tax').value)||0;
  var hoi=parseFloat(document.getElementById('oh-hoi').value)||0;
  var dp=price*(downPct/100);
  var loan=price-dp;
  var origFee=(type==='cash')?0:loan*(orig/100);
  if(type==='cash'){loan=0;}
  var taxPre=(tax/12)*2;
  var extra=0,extraLbl='';
  if(type==='fha'){extra=loan*0.0175;extraLbl='FHA Upfront MIP (1.75%)';}
  if(type==='va'){var vr=(downPct>=10)?0.0125:(downPct>=5?0.015:0.023);extra=loan*vr;extraLbl='VA Funding Fee';}
  var fees=origFee+appr+title+atty+rec+insp+extra;
  var pre=taxPre+hoi;
  var total=dp+fees+pre;
  var pct=price>0?((fees/price)*100).toFixed(1):0;
  document.getElementById('oh-total').textContent=fmtC(total);
  document.getElementById('oh-dp-s').textContent=fmtC(dp);
  document.getElementById('oh-fees-s').textContent=fmtC(fees);
  document.getElementById('oh-pre-s').textContent=fmtC(pre);
  document.getElementById('oh-pct-line').innerHTML='Closing costs = <strong>'+pct+'%<\/strong> of purchase price';
  document.getElementById('oh-l-dp').textContent=fmtC(dp);
  document.getElementById('oh-l-orig').textContent=fmtC(origFee);
  document.getElementById('oh-l-appr').textContent=fmtC(appr);
  document.getElementById('oh-l-title').textContent=fmtC(title);
  document.getElementById('oh-l-atty').textContent=fmtC(atty);
  document.getElementById('oh-l-rec').textContent=fmtC(rec);
  document.getElementById('oh-l-insp').textContent=fmtC(insp);
  document.getElementById('oh-l-tax').textContent=fmtC(taxPre);
  document.getElementById('oh-l-hoi').textContent=fmtC(hoi);
  document.getElementById('oh-l-tot').textContent=fmtC(total);
  var er=document.getElementById('oh-extra-row');
  if(extra>0){document.getElementById('oh-extra-lbl').textContent=extraLbl;document.getElementById('oh-extra').textContent=fmtC(extra);er.style.display='flex';}
  else{er.style.display='none';}
  document.getElementById('oh-result').style.display='block';
}
function copyResults(){
  var txt=document.getElementById('oh-result').innerText;
  if(navigator.clipboard){navigator.clipboard.writeText(txt).then(function(){alert('Results copied!');});}
  else{var t=document.createElement('textarea');t.value=txt;document.body.appendChild(t);t.select();document.execCommand('copy');document.body.removeChild(t);alert('Copied!');}
}
document.querySelectorAll('#oh-price,#oh-down,#oh-county,#oh-type,#oh-orig,#oh-appr,#oh-title,#oh-atty,#oh-rec,#oh-insp,#oh-tax,#oh-hoi').forEach(function(e){
  e.addEventListener('input',calcOH);e.addEventListener('change',calcOH);
});
document.querySelectorAll('.cc-faq-q').forEach(function(q){
  q.addEventListener('click',function(){
    var i=this.closest('.cc-faq-item'),w=i.classList.contains('open');
    document.querySelectorAll('.cc-faq-item').forEach(function(x){x.classList.remove('open');});
    if(!w)i.classList.add('open');
  });
});
calcOH();
</script>
<?php require_once '../includes/footer.php'; ?>
