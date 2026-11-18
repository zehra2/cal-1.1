<?php
$currentYear = date('Y');
$pageTitle       = "Texas Closing Cost Calculator ($currentYear) | TX Buyer Cost";
$metaDescription = "Free Texas closing cost calculator $currentYear. No state transfer tax in TX. Estimate title insurance, escrow, survey, recording fees, and total cash to close for any Texas home purchase.";
$metaKeywords    = 'texas closing cost calculator, TX closing costs, closing costs texas, texas title insurance, texas home buying costs, no transfer tax texas';
$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'WebApplication',
   'name'=>'Texas Closing Cost Calculator',
   'url'=>'https://americacalculator.com/real-estate/closing-cost-calculator-texas',
   'description'=>'Estimate Texas home buyer closing costs. Texas has no state transfer tax. Key costs include promulgated title insurance rates, survey, escrow, and lender fees.',
   'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All',
   'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Real Estate','item'=>'https://americacalculator.com/real-estate/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'Closing Cost Calculator','item'=>'https://americacalculator.com/real-estate/closing-cost-calculator'],
    ['@type'=>'ListItem','position'=>4,'name'=>'Texas Closing Costs','item'=>'https://americacalculator.com/real-estate/closing-cost-calculator-texas'],
  ]],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'Does Texas have a transfer tax on real estate?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'No. Texas is one of the few US states with no real estate transfer tax or documentary stamp tax. This makes Texas closing costs significantly lower than states like California, Florida, or New York where transfer taxes can add thousands of dollars.']],
    ['@type'=>'Question','name'=>'What are typical closing costs in Texas?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Texas buyer closing costs typically range from 2% to 3.5% of the purchase price, excluding down payment. On a $350,000 home expect $7,000–$12,250. The largest cost items are title insurance (promulgated state rate), lender origination fees, and survey (required by most Texas lenders).']],
    ['@type'=>'Question','name'=>'Who pays title insurance in Texas?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'In Texas, the seller customarily pays for the owner title insurance policy. The buyer pays for the lender title insurance policy (required by the lender). Texas title insurance rates are set by the Texas Department of Insurance (TDI) — all title companies charge the same rate by law, so you cannot negotiate on price, only on service.']],
    ['@type'=>'Question','name'=>'Is a survey required in Texas?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Most Texas lenders require a current survey as a condition of title insurance. If a recent survey (typically within 5 years) exists and the seller can provide it, you may be able to avoid the cost. A new survey in Texas typically costs $400–$700 for a residential property.']],
    ['@type'=>'Question','name'=>'Does Texas require an attorney at closing?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'No. Texas does not require an attorney at closing. Closings are handled by title companies that employ licensed escrow officers. An attorney is optional — buyers can choose to hire one for contract review or complex transactions, but it is not legally required.']],
    ['@type'=>'Question','name'=>'What are Texas title insurance rates?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Texas title insurance rates are promulgated (set by state law) by the Texas Department of Insurance. The basic rate for an owner policy on a $300,000 property is approximately $1,832. On a $500,000 property it is approximately $2,750. Rates scale with purchase price and are the same at every title company in Texas.']],
    ['@type'=>'Question','name'=>'What taxes do Texas homebuyers pay at closing?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Texas has no state income tax and no real estate transfer tax. The main tax item at closing is the prepaid property tax escrow — Texas has high property tax rates averaging 1.7%–2.5% of appraised value, among the highest in the US. On a $350,000 home expect annual property taxes of $5,950–$8,750, with 2–3 months prepaid at closing.']],
    ['@type'=>'Question','name'=>'Can I get a seller concession in Texas?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. Seller concessions are common in Texas, especially in slower markets. Sellers can contribute toward buyer closing costs up to the limits set by the loan type: 3%–9% for conventional (based on down payment), 6% for FHA, 4% for VA. This is negotiated in the purchase contract.']],
  ]],
  ['@type'=>'HowTo',
   'name'=>'How to Use the Texas Closing Cost Calculator',
   'description'=>'Estimate your total cash to close on a Texas home purchase in 4 steps.',
   'totalTime'=>'PT3M',
   'step'=>[
     ['@type'=>'HowToStep','position'=>1,'name'=>'Enter purchase price and down payment',
      'text'=>'Type your Texas home purchase price and down payment percentage. The Texas median home price is around $295,000 statewide, with Austin metro closer to $475,000 and DFW around $350,000.'],
     ['@type'=>'HowToStep','position'=>2,'name'=>'Enter your county property tax rate',
      'text'=>'Texas has no state income tax, but property taxes are among the highest in the US, averaging 1.7%–2.5% of appraised value. Enter your county rate — Harris (Houston) 2.13%, Travis (Austin) 1.97%, Collin (Plano/Frisco) 1.72%.'],
     ['@type'=>'HowToStep','position'=>3,'name'=>'Select loan type',
      'text'=>'Texas has no real estate transfer tax — a major advantage. Select Conventional, FHA, VA, or All Cash. Note: Texas does require a survey in most lender transactions ($400–$700 for residential).'],
     ['@type'=>'HowToStep','position'=>4,'name'=>'Review your itemized closing cost estimate',
      'text'=>'Click Estimate. Your results will show TDI-promulgated title insurance, survey, origination fee, appraisal, recording fees ($100–$250), and prepaid property tax. Remember: the seller customarily pays the owner title policy in Texas.'],
     ['@type'=>'HowToStep','position'=>5,'name'=>'Compare against your Loan Estimate',
      'text'=>'Print or copy your estimate. Compare line-by-line against the official Loan Estimate your lender provides within 3 business days. In Texas, the title company handles the closing — not an attorney.'],
   ]]
]];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f8fafc;}
.cc-wrap{max-width:1060px;margin:0 auto;padding:2rem 1.25rem 5rem;}
.cc-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}.cc-bc a{color:#64748b;text-decoration:none;}
.cc-hero h1{font-size:1.85rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.cc-hero p{font-size:.97rem;color:#64748b;line-height:1.65;margin:0 0 .5rem;border-left:3px solid #16a34a;padding-left:.9rem;}
.cc-meta{font-size:.78rem;color:#94a3b8;margin-bottom:1.75rem;}
.cc-layout{display:grid;grid-template-columns:1fr 1fr;gap:1.75rem;margin-bottom:1.75rem;}
.cc-card{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden;}
.cc-card-head{background:#15803d;color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;}
.cc-body{padding:1.5rem;}
.cc-field{margin-bottom:1rem;}
.cc-field label{display:block;font-size:.85rem;font-weight:600;color:#1e293b;margin-bottom:.35rem;}
.cc-field input,.cc-field select{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.94rem;color:#0f172a;outline:none;background:#fff;transition:border-color .2s;}
.cc-field input:focus,.cc-field select:focus{border-color:#16a34a;}
.cc-field .hint{font-size:.73rem;color:#94a3b8;margin-top:.25rem;}
.cc-grid{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.cc-sec-lbl{font-size:.7rem;font-weight:800;text-transform:uppercase;letter-spacing:.07em;color:#94a3b8;margin:1.2rem 0 .7rem;padding-bottom:.3rem;border-bottom:1px solid #f1f5f9;}
.cc-btn{width:100%;background:#15803d;color:#fff;padding:13px;border:none;border-radius:8px;font-size:.97rem;font-weight:700;cursor:pointer;margin-top:.5rem;}
.cc-btn:hover{background:#16a34a;}
.cc-result{background:#f0fdf4;border:1.5px solid #86efac;border-radius:10px;padding:1.25rem 1.5rem;margin-top:1.25rem;}
.cc-result-primary{text-align:center;margin-bottom:1rem;}
.cc-result-primary .val{font-size:2.4rem;font-weight:800;color:#15803d;display:block;line-height:1;}
.cc-result-primary .lbl{font-size:.83rem;color:#64748b;}
.cc-stat-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:.65rem;margin-bottom:.85rem;}
.cc-stat{background:#fff;border-radius:8px;padding:.75rem;text-align:center;border:1px solid #86efac;}
.cc-stat .sv{display:block;font-size:1rem;font-weight:800;color:#15803d;}
.cc-stat .sl{font-size:.69rem;color:#64748b;font-weight:600;line-height:1.3;}
.cc-pct{text-align:center;font-size:.83rem;color:#64748b;margin-bottom:.75rem;}
.cc-pct strong{color:#15803d;}
.cc-lines{background:#fff;border:1px solid #86efac;border-radius:8px;padding:.75rem 1rem;}
.cc-line{display:flex;justify-content:space-between;padding:.3rem 0;border-bottom:1px solid #f0fdf4;font-size:.86rem;}
.cc-line:last-child{border-bottom:none;font-weight:700;color:#15803d;}
.cc-line .ll{color:#64748b;}.cc-line .lv{font-weight:600;color:#1e293b;}
.cc-section{background:#fff;border-radius:12px;border:1px solid #e2e8f0;padding:1.75rem;margin-bottom:1.5rem;}
.cc-section h2{font-size:1.3rem;color:#0f172a;margin:0 0 .85rem;padding-bottom:.6rem;border-bottom:2px solid #dcfce7;}
.cc-section h3{font-size:1.05rem;color:#0f172a;margin:1.25rem 0 .55rem;}
.cc-section p{color:#475569;line-height:1.72;font-size:.95rem;margin-bottom:.9rem;}
.cc-section p:last-child{margin-bottom:0;}
.cc-section a{color:#15803d;font-weight:600;text-decoration:none;}
.cc-section a:hover{text-decoration:underline;}
.cc-table{width:100%;border-collapse:collapse;border-radius:9px;overflow:hidden;border:1px solid #e2e8f0;margin-bottom:1rem;}
.cc-table th{background:#15803d;color:#fff;padding:9px 13px;font-size:.84rem;font-weight:600;text-align:left;}
.cc-table td{padding:9px 13px;border-bottom:1px solid #f1f5f9;font-size:.87rem;color:#334155;}
.cc-table tr:last-child td{border-bottom:none;}
.cc-table tr:nth-child(even) td{background:#f8fafc;}
.cc-table .hl{color:#15803d;font-weight:700;}
.cc-table .r{color:#dc2626;font-weight:700;}
.cc-info{background:#f0fdf4;border-left:4px solid #16a34a;border-radius:0 8px 8px 0;padding:.9rem 1.1rem;margin:1rem 0;font-size:.9rem;color:#14532d;line-height:1.65;}
.cc-warn{background:#fffbeb;border-left:4px solid #f59e0b;border-radius:0 8px 8px 0;padding:.9rem 1.1rem;margin:1rem 0;font-size:.9rem;color:#78350f;line-height:1.65;}
.cc-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}
.cc-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.cc-faq-q{font-size:.95rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;}
.cc-faq-q::after{content:'+';color:#16a34a;font-size:1.2rem;flex-shrink:0;}
.cc-faq-item.open .cc-faq-q::after{content:'−';}
.cc-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.cc-faq-item.open .cc-faq-a{display:block;}
.cc-related{display:grid;grid-template-columns:repeat(auto-fill,minmax(175px,1fr));gap:.75rem;margin-top:.75rem;}
.cc-rel{display:block;background:#f0fdf4;border:1.5px solid #86efac;border-radius:8px;padding:.75rem 1rem;font-size:.85rem;font-weight:600;color:#15803d;text-decoration:none;text-align:center;transition:background .15s;}
.cc-rel:hover{background:#dcfce7;}
@media(max-width:760px){.cc-layout{grid-template-columns:1fr;}.cc-grid,.cc-stat-grid{grid-template-columns:1fr;}.cc-hero h1{font-size:1.5rem;}}

.pdf-bar{display:flex;gap:.75rem;margin-top:1rem;flex-wrap:wrap;}
.pdf-btn{display:inline-flex;align-items:center;gap:.5rem;background:#fff;border:2px solid currentColor;padding:9px 18px;border-radius:8px;font-size:.88rem;font-weight:700;cursor:pointer;transition:all .2s;}
.pdf-btn:hover{opacity:.85;}
@media print{.cc-btn,.pdf-bar,nav,footer,header,.cc-bc{display:none!important;}.cc-wrap{padding:0!important;}body{background:#fff!important;}}
</style>

<main id="main-content">
<div class="cc-wrap">
  <div class="cc-bc">
    <a href="/">Home</a> ›
    <a href="/real-estate/">Real Estate</a> ›
    <a href="/real-estate/closing-cost-calculator">Closing Cost Calculator</a> ›
    Texas
  </div>

  <div class="cc-hero">
    <h1>Texas Closing Cost Calculator (<?php echo $currentYear;?>)</h1>
    <p>Texas has <strong>no state transfer tax</strong> — one of the biggest closing-cost advantages in the US. Estimate your total buyer closing costs including promulgated title insurance, survey, lender fees, and Texas property tax prepaids.</p>
    <div class="cc-meta">✍️ By AmericaCalculator Real Estate Team | Last verified: July <?php echo $currentYear;?> | Sources: Texas Department of Insurance, TREC, Texas Comptroller</div>
  </div>


  <!-- ─── 2026 TEXAS CLOSING COST CALLOUT ─────────────────────────────── -->
  <div style="background:linear-gradient(135deg,#14532d 0%,#15803d 60%,#16a34a 100%);border-radius:14px;padding:1.4rem 1.75rem;margin-bottom:1.25rem;border:1px solid #166534;box-shadow:0 4px 24px rgba(21,128,61,.2);" id="tx-cost-box">
    <div style="display:flex;align-items:center;gap:.6rem;margin-bottom:.75rem;">
      <span style="background:#fbbf24;color:#78350f;font-size:.7rem;font-weight:800;padding:2px 9px;border-radius:20px;letter-spacing:.07em;">&#9733; NO TRANSFER TAX</span>
      <span style="color:rgba(255,255,255,.75);font-size:.78rem;">Texas Closing Cost Key Facts &mdash; <?php echo $currentYear; ?></span>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:.85rem;">
      <div style="background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.25);border-radius:9px;padding:.85rem 1rem;">
        <div style="font-size:.7rem;font-weight:700;color:rgba(255,255,255,.65);text-transform:uppercase;letter-spacing:.06em;margin-bottom:.35rem;">State Transfer Tax</div>
        <div style="font-size:1.5rem;font-weight:900;color:#bbf7d0;">$0</div>
        <div style="font-size:.74rem;color:rgba(255,255,255,.65);margin-top:.25rem;">TX is one of few states with zero transfer tax</div>
      </div>
      <div style="background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.25);border-radius:9px;padding:.85rem 1rem;">
        <div style="font-size:.7rem;font-weight:700;color:rgba(255,255,255,.65);text-transform:uppercase;letter-spacing:.06em;margin-bottom:.35rem;">TDI Title Insurance (Owner, $350k)</div>
        <div style="font-size:1.3rem;font-weight:800;color:#fff;">~$1,832</div>
        <div style="font-size:.74rem;color:rgba(255,255,255,.65);margin-top:.25rem;">Seller pays owner policy by custom; promulgated rate</div>
      </div>
      <div style="background:rgba(255,165,0,.15);border:1px solid rgba(255,165,0,.3);border-radius:9px;padding:.85rem 1rem;">
        <div style="font-size:.7rem;font-weight:700;color:rgba(255,255,255,.65);text-transform:uppercase;letter-spacing:.06em;margin-bottom:.35rem;">Property Tax (avg statewide)</div>
        <div style="font-size:1.3rem;font-weight:800;color:#fde68a;">1.7%&ndash;2.5%</div>
        <div style="font-size:.74rem;color:rgba(255,255,255,.65);margin-top:.25rem;">Among highest in US; prepay 2&ndash;3 months at closing</div>
      </div>
      <div style="background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.25);border-radius:9px;padding:.85rem 1rem;">
        <div style="font-size:.7rem;font-weight:700;color:rgba(255,255,255,.65);text-transform:uppercase;letter-spacing:.06em;margin-bottom:.35rem;">Survey Requirement</div>
        <div style="font-size:1.3rem;font-weight:800;color:#fff;">$400&ndash;$700</div>
        <div style="font-size:.74rem;color:rgba(255,255,255,.65);margin-top:.25rem;">Required by most TX lenders unless recent survey exists</div>
      </div>
    </div>
  </div>
  <style>@media(max-width:640px){#tx-cost-box{padding:1rem 1.1rem;}}</style>

  <div class="cc-layout">
    <div class="cc-card">
      <div class="cc-card-head">🧾 Texas Closing Cost Calculator</div>
      <div class="cc-body">
        <div class="cc-sec-lbl">Purchase Details</div>
        <div class="cc-grid">
          <div class="cc-field"><label>Purchase Price ($)</label><input type="number" id="cc-price" value="350000" min="0" step="5000"></div>
          <div class="cc-field"><label>Down Payment (%)</label><input type="number" id="cc-down" value="20" min="0" max="100" step="1"></div>
        </div>
        <div class="cc-grid">
          <div class="cc-field"><label>Interest Rate (%)</label><input type="number" id="cc-rate" value="7.0" min="0" max="20" step="0.05"></div>
          <div class="cc-field"><label>Loan Type</label>
            <select id="cc-type">
              <option value="conventional">Conventional</option>
              <option value="fha">FHA Loan (+1.75% MIP)</option>
              <option value="va">VA Loan (+Funding Fee)</option>
              <option value="cash">All Cash</option>
            </select>
          </div>
        </div>
        <div class="cc-sec-lbl">Texas-Specific Fees</div>
        <div class="cc-grid">
          <div class="cc-field"><label>Origination Fee (%)</label><input type="number" id="cc-orig" value="0.75" min="0" max="5" step="0.05"></div>
          <div class="cc-field"><label>Appraisal Fee ($)</label><input type="number" id="cc-appr" value="550" min="0" step="50"></div>
        </div>
        <div class="cc-grid">
          <div class="cc-field"><label>Title Insurance — Lender Policy ($)</label><input type="number" id="cc-title" value="950" min="0" step="50"><div class="hint">TDI promulgated rate; owner policy paid by seller</div></div>
          <div class="cc-field"><label>Survey ($)</label><input type="number" id="cc-surv" value="550" min="0" step="50"><div class="hint">Required by most TX lenders</div></div>
        </div>
        <div class="cc-grid">
          <div class="cc-field"><label>Escrow / Closing Fee ($)</label><input type="number" id="cc-escrow" value="500" min="0" step="50"></div>
          <div class="cc-field"><label>Recording Fee ($)</label><input type="number" id="cc-rec" value="150" min="0" step="25"><div class="hint">Typically $100–$250 in TX counties</div></div>
        </div>
        <div class="cc-sec-lbl">Prepaid Items — Texas Property Tax</div>
        <div class="cc-grid">
          <div class="cc-field"><label>Annual Property Tax ($)</label><input type="number" id="cc-tax" value="7000" min="0" step="100"><div class="hint">TX avg 1.7%–2.5% of value; no homestead cap until year 2</div></div>
          <div class="cc-field"><label>Annual Homeowners Insurance ($)</label><input type="number" id="cc-hoi" value="2200" min="0" step="100"><div class="hint">TX among highest HO insurance rates nationally</div></div>
        </div>
        <button class="cc-btn" onclick="calcCC()">⚡ Estimate Texas Closing Costs</button>
        <div class="cc-result" id="cc-result" style="display:none;">
          <div class="cc-result-primary">
            <span class="val" id="cc-total">$0</span>
            <span class="lbl">Estimated Total Cash to Close</span>
          </div>
          <div class="cc-pct" id="cc-pct-line"></div>
          <div class="cc-stat-grid">
            <div class="cc-stat"><span class="sv" id="cc-dp">$0</span><span class="sl">Down Payment</span></div>
            <div class="cc-stat"><span class="sv" id="cc-fee">$0</span><span class="sl">Closing Costs</span></div>
            <div class="cc-stat"><span class="sv" id="cc-prepaid">$0</span><span class="sl">Prepaids &amp; Escrow</span></div>
          </div>
          <div class="cc-line">
            <div class="cc-line"><span class="ll">Down Payment</span><span class="lv" id="cl-dp">—</span></div>
            <div class="cc-line"><span class="ll">Loan Origination Fee</span><span class="lv" id="cl-orig">—</span></div>
            <div class="cc-line"><span class="ll">Appraisal</span><span class="lv" id="cl-appr">—</span></div>
            <div class="cc-line"><span class="ll">Title Insurance (lender's policy)</span><span class="lv" id="cl-title">—</span></div>
            <div class="cc-line"><span class="ll">Survey</span><span class="lv" id="cl-surv">—</span></div>
            <div class="cc-line"><span class="ll">Escrow / Closing Fee</span><span class="lv" id="cl-escrow">—</span></div>
            <div class="cc-line"><span class="ll">Recording Fee</span><span class="lv" id="cl-rec">—</span></div>
            <div class="cc-line"><span class="ll">State Transfer Tax</span><span class="lv" style="color:#15803d;">$0 — TX has no transfer tax</span></div>
            <div class="cc-line" id="cl-extra-row" style="display:none;"><span class="ll" id="cl-extra-label">FHA MIP / VA Fee</span><span class="lv" id="cl-extra">—</span></div>
            <div class="cc-line"><span class="ll">Prepaid Property Tax (2 months)</span><span class="lv" id="cl-tax">—</span></div>
            <div class="cc-line"><span class="ll">Prepaid Homeowners Insurance (1 yr)</span><span class="lv" id="cl-hoi">—</span></div>
            <div class="cc-line"><span class="ll" style="font-weight:700;color:#0f172a;">Total Cash to Close</span><span class="lv" id="cl-total">—</span></div>
          </div>
          <div class="pdf-bar">
            <button class="pdf-btn" style="color:inherit;" onclick="window.print()">&#128424; Print / Save as PDF</button>
            <button class="pdf-btn" style="color:inherit;" onclick="copyResults()">&#128203; Copy Results</button>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="cc-section" style="margin-bottom:1.25rem;">
        <h2>Texas Title Insurance Rates (TDI, <?php echo $currentYear;?>)</h2>
        <p>Texas title insurance rates are <strong>set by the state</strong> (Texas Department of Insurance). Every title company charges the same rate — you cannot negotiate the premium, only the service quality.</p>
        <table class="cc-table">
          <thead><tr><th>Purchase Price</th><th>Owner Policy (seller pays)</th><th>Lender Policy (buyer pays)</th></tr></thead>
          <tbody>
            <tr><td>$200,000</td><td class="hl">~$1,322</td><td>~$732</td></tr>
            <tr><td>$300,000</td><td class="hl">~$1,680</td><td>~$950</td></tr>
            <tr><td>$400,000</td><td class="hl">~$2,032</td><td>~$1,155</td></tr>
            <tr><td>$500,000</td><td class="hl">~$2,395</td><td>~$1,360</td></tr>
            <tr><td>$750,000</td><td class="hl">~$3,270</td><td>~$1,880</td></tr>
          </tbody>
        </table>
        <p style="font-size:.82rem;color:#94a3b8;margin:0;">Simultaneous issue discount applies when both policies are purchased together. Source: TDI Basic Rate Chart.</p>
      </div>
      <div class="cc-section">
        <h2>Texas Property Tax by Major County</h2>
        <table class="cc-table">
          <thead><tr><th>County</th><th>Effective Tax Rate</th><th>Annual Tax on $350k Home</th></tr></thead>
          <tbody>
            <tr><td>Harris (Houston)</td><td class="r">2.13%</td><td class="r">$7,455</td></tr>
            <tr><td>Dallas</td><td class="r">2.18%</td><td class="r">$7,630</td></tr>
            <tr><td>Tarrant (Fort Worth)</td><td class="r">2.26%</td><td class="r">$7,910</td></tr>
            <tr><td>Travis (Austin)</td><td>1.97%</td><td>$6,895</td></tr>
            <tr><td>Bexar (San Antonio)</td><td>2.09%</td><td>$7,315</td></tr>
            <tr><td>Collin (Plano/Frisco)</td><td>1.72%</td><td class="hl">$6,020</td></tr>
            <tr><td>Denton</td><td>1.88%</td><td>$6,580</td></tr>
            <tr><td>El Paso</td><td>2.44%</td><td class="r">$8,540</td></tr>
          </tbody>
        </table>
        <div class="cc-warn">⚠️ <strong>Homestead Exemption:</strong> Texas homeowners who occupy their primary residence can apply for a homestead exemption reducing the taxable value by $100,000 for school district taxes (HB 3 2023). Apply with your county appraisal district in the year after purchase.</div>
      </div>
    </div>
  </div>

  <div class="cc-section">
    <h2>Texas Closing Cost Rules — What Makes Texas Different</h2>

    <h3>No State Transfer Tax — A Major Buyer Advantage</h3>
    <p>Texas does not impose a real estate transfer tax, deed tax, or documentary stamp tax at the state or county level. This saves buyers and sellers thousands of dollars compared to states like Florida ($0.70/$100 doc stamps), California ($1.10–$25/$1,000), or New York (up to $1.25/$500 + mansion tax). On a $500,000 Texas purchase, the transfer tax savings vs. Florida alone exceed <strong>$3,500</strong>.</p>

    <h3>Texas Title Insurance — Promulgated Rates</h3>
    <p>The Texas Department of Insurance (TDI) sets all title insurance rates under the Texas Title Insurance Act. Unlike most states where title companies compete on price, in Texas <strong>every company charges the same base rate</strong>. The rate structure uses a declining scale per $1,000 of value:</p>
    <table class="cc-table">
      <thead><tr><th>Value Range</th><th>Rate per $1,000</th></tr></thead>
      <tbody>
        <tr><td>$0 – $100,000</td><td>$5.75 per $1,000 (min $100)</td></tr>
        <tr><td>$100,001 – $1,000,000</td><td>$5.00 per $1,000</td></tr>
        <tr><td>$1,000,001 – $5,000,000</td><td>$4.00 per $1,000</td></tr>
        <tr><td>Over $5,000,000</td><td>$3.50 per $1,000</td></tr>
      </tbody>
    </table>
    <p>A <strong>simultaneous issue discount</strong> applies when the lender and owner policies are issued together — the second policy (usually the lender's) is charged at a discounted rate of $100 plus 15% of the basic premium.</p>

    <h3>Survey Requirement</h3>
    <p>Texas lenders almost universally require a current survey of the property as a condition of issuing the lender's title policy. A survey confirms property boundaries, easements, encroachments, and improvements. If the seller has a survey dated within approximately 5–10 years with no changes to the property, the title company may accept it with a T-47 Residential Real Property Affidavit from the seller. Otherwise, a new survey is ordered at the buyer's expense — typically <strong>$400–$750</strong> for a standard residential lot.</p>

    <h3>Texas Property Taxes — High Rates, No Income Tax Trade-Off</h3>
    <p>Texas has no state income tax, but compensates with high property tax rates — among the highest in the nation. The statewide average effective rate is approximately <strong>1.7% – 2.5%</strong> of appraised value. Because Texas is a non-disclosure state (sale prices are not public), county appraisal districts (CADs) use mass appraisal models to set assessed values, which can differ from the actual purchase price in the first year.</p>
    <div class="cc-info">💡 <strong>Protest your appraisal:</strong> Texas homeowners can protest their property appraisal annually with their county CAD. Filing a protest — especially in the first year after purchase — is common and often results in a reduced taxable value. The deadline is typically May 15 or 30 days after receiving your notice of appraised value.</div>

    <h3>Homeowners Insurance — Texas Rates Among Highest Nationally</h3>
    <p>Texas homeowners insurance is significantly more expensive than the national average due to hurricane/tropical storm risk on the Gulf Coast, hailstorm exposure across the state, and tornado risk in North Texas. Average annual premiums by market:</p>
    <table class="cc-table">
      <thead><tr><th>City / Region</th><th>Average Annual HO Premium</th><th>Key Risk Factor</th></tr></thead>
      <tbody>
        <tr><td>Houston / Harris County</td><td class="r">$2,200 – $4,000</td><td>Hurricane, flood, hail</td></tr>
        <tr><td>Dallas / Fort Worth</td><td class="r">$2,000 – $3,500</td><td>Hail, tornado, severe storm</td></tr>
        <tr><td>Austin / Travis County</td><td>$1,600 – $2,800</td><td>Hail, wildfire (western suburbs)</td></tr>
        <tr><td>San Antonio / Bexar</td><td>$1,500 – $2,500</td><td>Hail, severe storm</td></tr>
        <tr><td>Corpus Christi / Coastal</td><td class="r">$3,000 – $6,000+</td><td>Hurricane, windstorm</td></tr>
      </tbody>
    </table>
    <div class="cc-warn">⚠️ <strong>TWIA Windstorm Insurance:</strong> Properties in Texas coastal counties (the "1st tier") often cannot obtain wind coverage from standard carriers — they must purchase windstorm coverage through the Texas Windstorm Insurance Association (TWIA) separately from their HO policy. Budget $1,500–$5,000+ additional annually for TWIA coverage.</div>

    <h3>Worked Example: $350,000 Home, Dallas County, Conventional 20% Down</h3>
    <table class="cc-table">
      <thead><tr><th>Item</th><th>Amount</th><th>Notes</th></tr></thead>
      <tbody>
        <tr><td>Down Payment (20%)</td><td><strong>$70,000</strong></td><td></td></tr>
        <tr><td>Loan Origination (0.75% of $280k)</td><td>$2,100</td><td>Lender fee</td></tr>
        <tr><td>Appraisal</td><td>$550</td><td></td></tr>
        <tr><td>Title Insurance — Lender Policy</td><td>$950</td><td>TDI rate, simultaneous issue</td></tr>
        <tr><td>Title Insurance — Owner Policy</td><td>$0</td><td>Seller pays by TX custom</td></tr>
        <tr><td>Survey</td><td>$550</td><td>Required by lender</td></tr>
        <tr><td>Escrow / Closing Fee</td><td>$500</td><td></td></tr>
        <tr><td>Recording Fee</td><td>$150</td><td>Dallas County</td></tr>
        <tr><td>State Transfer Tax</td><td><strong>$0</strong></td><td>Texas has no transfer tax</td></tr>
        <tr><td>Prepaid Property Tax (2 mo, 2.18%)</td><td>$1,272</td><td>Based on $7,630/yr Dallas</td></tr>
        <tr><td>Prepaid HO Insurance (1 year)</td><td>$2,200</td><td>Dallas estimate</td></tr>
        <tr><td><strong>Estimated Total Cash to Close</strong></td><td><strong>~$78,272</strong></td><td></td></tr>
      </tbody>
    </table>
  </div>

  <div class="cc-section">
    <h2>Frequently Asked Questions — Texas Closing Costs</h2>
    <?php $faqs=[
      ['Does Texas have a transfer tax on real estate?','No. Texas is one of a handful of US states with no real estate transfer tax, deed tax, or documentary stamp tax at any level. This saves buyers thousands compared to states like Florida ($3,500 on a $500k sale) or California.'],
      ['What are typical closing costs in Texas?','Texas buyer closing costs typically range from 2% to 3.5% of the purchase price excluding down payment. The main items are lender origination fees, TDI-regulated title insurance (lender policy), survey ($400–$750), escrow fee, and recording fee.'],
      ['Who pays title insurance in Texas?','By Texas custom, the seller pays for the owner title insurance policy and the buyer pays for the lender title insurance policy. Texas title rates are set by the TDI — all companies charge the same rate.'],
      ['Why is Texas property tax so high?','Texas has no state income tax and relies heavily on property taxes to fund schools and local government. Effective rates of 1.7%–2.5% are among the highest in the US. The homestead exemption (currently $100,000 off school district value) helps primary residents reduce the bill starting in year two after purchase.'],
      ['Is a survey required at closing in Texas?','Most Texas lenders require a current survey. If the seller has a recent survey (typically within 5–10 years) with no property changes, it may be accepted with a T-47 affidavit. Otherwise, the buyer pays $400–$750 for a new survey.'],
      ['How do I lower my Texas property tax bill?','File a homestead exemption with your county appraisal district (CAD) in the year after purchase — this exempts $100,000 of school district value. File a value protest with your CAD before May 15 each year. Consider hiring a property tax consultant, who typically works on contingency.'],
      ['What is TWIA and do I need it?','TWIA (Texas Windstorm Insurance Association) provides windstorm and hail coverage for properties in Texas coastal counties that cannot obtain it from standard carriers. If buying in Galveston, Brazoria, Cameron, Nueces, or other 1st-tier coastal counties, budget $1,500–$5,000+ annually for TWIA in addition to your standard HO policy.'],
      ['Can the seller pay my closing costs in Texas?','Yes. Seller concessions are common in Texas. The seller can contribute toward buyer closing costs up to the limit set by your loan type: 3%–9% for conventional (depends on down payment), 6% for FHA, 4% for VA. This is negotiated in the Texas One to Four Family Residential Contract.'],
    ]; foreach($faqs as $f):?>
    <div class="cc-faq-item"><div class="cc-faq-q"><?php echo $f[0];?></div><div class="cc-faq-a"><?php echo $f[1];?></div></div>
    <?php endforeach;?>
  </div>

  <div class="cc-section">
    <h2>Related Calculators</h2>
    <div class="cc-related">
      <a href="/real-estate/closing-cost-calculator" class="cc-rel">🇺🇸 National Closing Costs</a>
      <a href="/real-estate/closing-cost-calculator-california" class="cc-rel">🌅 California Closing Costs</a>
      <a href="/real-estate/closing-cost-calculator-florida" class="cc-rel">🌴 Florida Closing Costs</a>
      <a href="/real-estate/mortgage-calculator" class="cc-rel">🏠 Mortgage Calculator</a>
      <a href="/real-estate/down-payment-calculator" class="cc-rel">⬇️ Down Payment Calculator</a>
      <a href="/real-estate/cap-rate-calculator" class="cc-rel">📊 Cap Rate Calculator</a>
      <a href="/real-estate/rent-vs-buy-calculator" class="cc-rel">🆚 Rent vs Buy Calculator</a>
      <a href="/real-estate/" class="cc-rel">🏘️ All Real Estate Tools</a>
    </div>
  </div>
</div>
</main>

<script>
function fmtC(v){return '$'+Math.round(Math.abs(v)).toLocaleString();}
function calcCC(){
  var price  =parseFloat(document.getElementById('cc-price').value)||0;
  var downPct=parseFloat(document.getElementById('cc-down').value)||0;
  var orig   =parseFloat(document.getElementById('cc-orig').value)||0;
  var appr   =parseFloat(document.getElementById('cc-appr').value)||0;
  var title  =parseFloat(document.getElementById('cc-title').value)||0;
  var surv   =parseFloat(document.getElementById('cc-surv').value)||0;
  var escrow =parseFloat(document.getElementById('cc-escrow').value)||0;
  var rec    =parseFloat(document.getElementById('cc-rec').value)||0;
  var tax    =parseFloat(document.getElementById('cc-tax').value)||0;
  var hoi    =parseFloat(document.getElementById('cc-hoi').value)||0;
  var loanType=document.getElementById('cc-type').value;
  var dp=price*(downPct/100), loan=price-dp;
  var origFee=loan*(orig/100);
  var extra=0,extraLabel='';
  if(loanType==='fha'){extra=loan*0.0175;extraLabel='FHA Upfront MIP (1.75%)';}
  if(loanType==='va'){var r=downPct>=10?0.0125:downPct>=5?0.015:0.023;extra=loan*r;extraLabel='VA Funding Fee';}
  var taxPre=(tax/12)*2, hoiPre=hoi;
  var cc=origFee+appr+title+surv+escrow+rec+extra;
  var pre=taxPre+hoiPre;
  var total=dp+cc+pre;
  var pct=price>0?((cc/price)*100).toFixed(1):0;
  document.getElementById('cc-total').textContent=fmtC(total);
  document.getElementById('cc-dp').textContent=fmtC(dp);
  document.getElementById('cc-fees').textContent=fmtC(cc);
  document.getElementById('cc-prepaid').textContent=fmtC(pre);
  document.getElementById('cc-pct-line').innerHTML='Closing costs = <strong>'+pct+'%</strong> of purchase price';
  document.getElementById('cl-dp').textContent=fmtC(dp);
  document.getElementById('cl-orig').textContent=fmtC(origFee);
  document.getElementById('cl-appr').textContent=fmtC(appr);
  document.getElementById('cl-title').textContent=fmtC(title);
  document.getElementById('cl-surv').textContent=fmtC(surv);
  document.getElementById('cl-escrow').textContent=fmtC(escrow);
  document.getElementById('cl-rec').textContent=fmtC(rec);
  document.getElementById('cl-tax').textContent=fmtC(taxPre);
  document.getElementById('cl-hoi').textContent=fmtC(hoiPre);
  document.getElementById('cl-total').textContent=fmtC(total);
  var er=document.getElementById('cl-extra-row');
  if(extra>0){document.getElementById('cl-extra-label').textContent=extraLabel;document.getElementById('cl-extra').textContent=fmtC(extra);er.style.display='flex';}
  else{er.style.display='none';}
  document.getElementById('cc-result').style.display='block';
}
document.querySelectorAll('#cc-price,#cc-down,#cc-rate,#cc-type,#cc-orig,#cc-appr,#cc-title,#cc-surv,#cc-escrow,#cc-rec,#cc-tax,#cc-hoi').forEach(function(el){
  el.addEventListener('input',calcCC);el.addEventListener('change',calcCC);
});
document.querySelectorAll('.cc-faq-q').forEach(function(q){
  q.addEventListener('click',function(){
    var i=this.closest('.cc-faq-item'),w=i.classList.contains('open');
    document.querySelectorAll('.cc-faq-item').forEach(function(x){x.classList.remove('open');});
    if(!w)i.classList.add('open');
  });
});
calcCC();
</script>
<?php require_once '../includes/footer.php'; ?>
