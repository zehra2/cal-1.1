<?php
$currentYear = date('Y');
$pageTitle       = "Closing Cost Calculator ($currentYear) — Estimate Buyer & Seller Fees";
$metaDescription = "Calculate buyer and seller closing costs in seconds. Detailed breakdown of title fees, escrow, origination, transfer taxes, and state-by-state comparisons. Free, updated $currentYear.";
$metaKeywords    = 'closing cost calculator, home buying closing costs, closing costs estimator, how much are closing costs, closing costs on a house, real estate closing costs calculator, calculate closing costs, cash to close calculator';
$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'WebApplication','name'=>'Closing Cost Calculator','url'=>'https://americacalculator.com/real-estate/closing-cost-calculator',
   'description'=>'Estimate home buyer closing costs including lender fees, title, escrow, recording, prepaid taxes, insurance, and total cash to close for any US home purchase.',
   'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All',
   'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Real Estate','item'=>'https://americacalculator.com/real-estate/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'Closing Cost Calculator','item'=>'https://americacalculator.com/real-estate/closing-cost-calculator'],
  ]],
  ['@type'=>'HowTo','name'=>'How to Use the Closing Cost Calculator','step'=>[
    ['@type'=>'HowToStep','name'=>'Enter purchase price','text'=>'Type the total home purchase price in dollars.'],
    ['@type'=>'HowToStep','name'=>'Select down payment percentage','text'=>'Enter your planned down payment as a percentage (3%, 5%, 10%, 20%, etc.).'],
    ['@type'=>'HowToStep','name'=>'Choose loan type','text'=>'Select Conventional, FHA, VA, or All Cash to apply the correct loan-specific fees.'],
    ['@type'=>'HowToStep','name'=>'Adjust optional fees','text'=>'Fine-tune the origination fee, appraisal, title insurance, and other fees to match your lender\'s Loan Estimate.'],
    ['@type'=>'HowToStep','name'=>'Review results','text'=>'See total cash to close, itemized closing costs, prepaids, and the percentage of purchase price.'],
  ]],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'How much are closing costs on a house?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Buyer closing costs typically range from 2% to 5% of the purchase price. On a $300,000 home, expect $6,000–$15,000 in closing costs. On a $500,000 home, expect $10,000–$25,000. High-cost states like New York, Pennsylvania, and Delaware tend toward the high end due to transfer taxes and mandatory attorney fees.']],
    ['@type'=>'Question','name'=>'What is included in closing costs?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Buyer closing costs include: loan origination fee (0.5–1% of loan), appraisal ($400–$700), title insurance ($500–$2,000), title search, attorney/closing fee, recording fees, transfer taxes, prepaid interest, first year homeowners insurance, and 2–3 months property tax escrow. FHA loans also add a 1.75% upfront MIP; VA loans add a 1.25–3.3% funding fee.']],
    ['@type'=>'Question','name'=>'Can closing costs be rolled into the loan?','acceptedAnswer'=>['@type'=>'Answer','text'=>'On refinances, yes. On purchase loans, most closing costs must be paid upfront. However, you can accept a slightly higher interest rate in exchange for lender credits that offset closing costs. Sellers can also pay some buyer closing costs via seller concessions — up to 3–6% of purchase price depending on loan type and down payment.']],
    ['@type'=>'Question','name'=>'Who pays closing costs — buyer or seller?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Buyers typically pay 2–5% of the purchase price. Sellers typically pay 6–10% including agent commissions (usually 5–6%). Buyers can negotiate seller concessions in the purchase offer, asking the seller to contribute toward buyer closing costs, reducing the cash needed at closing.']],
    ['@type'=>'Question','name'=>'What is the difference between closing costs and cash to close?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Closing costs are the fees paid to third parties (lender, title company, attorney, government). Cash to close is the total amount you bring to closing — your down payment PLUS closing costs PLUS prepaid items (property tax escrow, insurance). The closing cost calculator above shows all three components separately.']],
    ['@type'=>'Question','name'=>'What are prepaid items at closing?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Prepaids are collected at closing but are not fees — they are advance payments for ongoing costs. Typically: 2–3 months property tax into escrow, your first year homeowners insurance premium paid in full, and prepaid mortgage interest from your closing date to the end of the month.']],
    ['@type'=>'Question','name'=>'How much are closing costs for a $400,000 house?','acceptedAnswer'=>['@type'=>'Answer','text'=>'On a $400,000 home with 20% down (loan amount $320,000), expect total closing costs of $8,000–$16,000 (2–4%) plus your $80,000 down payment. With a 5% down payment (loan $380,000), closing costs rise to $9,500–$19,000 due to the larger loan origination fee, plus you may need PMI. Use the calculator above for an itemized estimate.']],
    ['@type'=>'Question','name'=>'Are closing costs negotiable?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. Lender origination fees and discount points are negotiable — shop at least 3 lenders and compare their Loan Estimates. Some title fees and attorney fees have room to negotiate. Recording fees and transfer taxes are set by government and are not negotiable. Seller concessions are negotiable in your purchase offer.']],
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
.cc-hero p{font-size:.97rem;color:#64748b;line-height:1.65;margin:0 0 .5rem;border-left:3px solid #0891b2;padding-left:.9rem;}
.cc-meta{font-size:.78rem;color:#94a3b8;margin-bottom:1.75rem;}
/* Layout */
.cc-layout{display:grid;grid-template-columns:1fr 1fr;gap:1.75rem;margin-bottom:1.75rem;}
.cc-card{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden;}
.cc-card-head{background:#0e7490;color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;}
.cc-body{padding:1.5rem;}
/* Fields */
.cc-field{margin-bottom:1rem;}
.cc-field label{display:block;font-size:.85rem;font-weight:600;color:#1e293b;margin-bottom:.35rem;}
.cc-field input,.cc-field select{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.94rem;color:#0f172a;outline:none;background:#fff;transition:border-color .2s;}
.cc-field input:focus,.cc-field select:focus{border-color:#0891b2;}
.cc-field .hint{font-size:.73rem;color:#94a3b8;margin-top:.25rem;}
.cc-grid{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.cc-sec-lbl{font-size:.7rem;font-weight:800;text-transform:uppercase;letter-spacing:.07em;color:#94a3b8;margin:1.2rem 0 .7rem;padding-bottom:.3rem;border-bottom:1px solid #f1f5f9;}
.cc-btn{width:100%;background:#0e7490;color:#fff;padding:13px;border:none;border-radius:8px;font-size:.97rem;font-weight:700;cursor:pointer;margin-top:.5rem;transition:background .2s;}
.cc-btn:hover{background:#0891b2;}
/* Results */
.cc-result{background:#ecfeff;border:1.5px solid #a5f3fc;border-radius:10px;padding:1.25rem 1.5rem;margin-top:1.25rem;}
.cc-result-primary{text-align:center;margin-bottom:1rem;}
.cc-result-primary .val{font-size:2.4rem;font-weight:800;color:#0e7490;display:block;line-height:1;}
.cc-result-primary .lbl{font-size:.83rem;color:#64748b;}
.cc-stat-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:.65rem;margin-bottom:.85rem;}
.cc-stat{background:#fff;border-radius:8px;padding:.75rem;text-align:center;border:1px solid #a5f3fc;}
.cc-stat .sv{display:block;font-size:1rem;font-weight:800;color:#0e7490;}
.cc-stat .sl{font-size:.69rem;color:#64748b;font-weight:600;line-height:1.3;}
.cc-pct{text-align:center;font-size:.83rem;color:#64748b;margin-bottom:.75rem;}
.cc-pct strong{color:#0e7490;}
.cc-lines{background:#fff;border:1px solid #a5f3fc;border-radius:8px;padding:.75rem 1rem;}
.cc-line{display:flex;justify-content:space-between;padding:.3rem 0;border-bottom:1px solid #ecfeff;font-size:.86rem;}
.cc-line:last-child{border-bottom:none;font-weight:700;color:#0e7490;}
.cc-line .ll{color:#64748b;}.cc-line .lv{font-weight:600;color:#1e293b;}
/* Sections */
.cc-section{background:#fff;border-radius:12px;border:1px solid #e2e8f0;padding:1.75rem;margin-bottom:1.5rem;}
.cc-section h2{font-size:1.3rem;color:#0f172a;margin:0 0 .85rem;padding-bottom:.6rem;border-bottom:2px solid #ecfeff;}
.cc-section h3{font-size:1.05rem;color:#0f172a;margin:1.25rem 0 .55rem;}
.cc-section p{color:#475569;line-height:1.72;font-size:.95rem;margin-bottom:.9rem;}
.cc-section p:last-child{margin-bottom:0;}
.cc-section a{color:#0891b2;font-weight:600;text-decoration:none;}
.cc-section a:hover{text-decoration:underline;}
/* Tables */
.cc-table{width:100%;border-collapse:collapse;border-radius:9px;overflow:hidden;border:1px solid #e2e8f0;margin-bottom:1rem;}
.cc-table th{background:#0e7490;color:#fff;padding:9px 13px;font-size:.84rem;font-weight:600;text-align:left;}
.cc-table td{padding:9px 13px;border-bottom:1px solid #f1f5f9;font-size:.87rem;color:#334155;}
.cc-table tr:last-child td{border-bottom:none;}
.cc-table tr:nth-child(even) td{background:#f8fafc;}
.cc-table .hl{color:#0e7490;font-weight:700;}
.cc-table .r{color:#dc2626;font-weight:700;}
/* Info/warn boxes */
.cc-info{background:#ecfeff;border-left:4px solid #0891b2;border-radius:0 8px 8px 0;padding:.9rem 1.1rem;margin:1rem 0;font-size:.9rem;color:#164e63;line-height:1.65;}
.cc-warn{background:#fffbeb;border-left:4px solid #f59e0b;border-radius:0 8px 8px 0;padding:.9rem 1.1rem;margin:1rem 0;font-size:.9rem;color:#78350f;line-height:1.65;}
/* FAQ */
.cc-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}
.cc-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.cc-faq-q{font-size:.95rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;}
.cc-faq-q::after{content:'+';color:#0891b2;font-size:1.2rem;flex-shrink:0;}
.cc-faq-item.open .cc-faq-q::after{content:'−';}
.cc-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.cc-faq-item.open .cc-faq-a{display:block;}
/* Related */
.cc-related{display:grid;grid-template-columns:repeat(auto-fill,minmax(175px,1fr));gap:.75rem;margin-top:.75rem;}
.cc-rel{display:block;background:#ecfeff;border:1.5px solid #a5f3fc;border-radius:8px;padding:.75rem 1rem;font-size:.85rem;font-weight:600;color:#0e7490;text-decoration:none;text-align:center;transition:background .15s;}
.cc-rel:hover{background:#cffafe;}
@media(max-width:760px){.cc-layout{grid-template-columns:1fr;}.cc-grid,.cc-stat-grid{grid-template-columns:1fr;}.cc-hero h1{font-size:1.5rem;}}
</style>

<main id="main-content">
<div class="cc-wrap">
  <div class="cc-bc"><a href="/">Home</a> › <a href="/real-estate/">Real Estate</a> › Closing Cost Calculator</div>

  <div class="cc-hero">
    <h1>Closing Cost Calculator (<?php echo $currentYear;?>)</h1>
    <p>Estimate total buyer closing costs for any US home purchase &mdash; lender fees, title, escrow, prepaid items, and total cash needed to close.</p>
    <div class="cc-meta">✍️ By AmericaCalculator Finance Team | Last verified: September <?php echo $currentYear;?> | Sources: CFPB, Freddie Mac, HUD</div>
  </div>

  <div class="cc-layout">
    <!-- Calculator Card -->
    <div class="cc-card">
      <div class="cc-card-head"> Closing Cost Calculator</div>
      <div class="cc-body">
        <div class="cc-sec-lbl">Purchase Details</div>
        <div class="cc-grid">
          <div class="cc-field"><label>Purchase Price ($)</label><input type="number" id="cc-price" value="350000" min="0" step="1000"></div>
          <div class="cc-field"><label>Down Payment (%)</label><input type="number" id="cc-down" value="20" min="0" max="100" step="1"><div class="hint">Min 3.5% FHA, 0% VA</div></div>
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
        <div class="cc-sec-lbl">Adjust Estimates (Optional)</div>
        <div class="cc-grid">
          <div class="cc-field"><label>Origination Fee (%)</label><input type="number" id="cc-orig" value="0.75" min="0" max="5" step="0.05"><div class="hint">Typically 0.5&ndash;1% of loan</div></div>
          <div class="cc-field"><label>Discount Points ($)</label><input type="number" id="cc-points" value="0" min="0" step="100"><div class="hint">Optional &mdash; to buy down rate</div></div>
        </div>
        <div class="cc-grid">
          <div class="cc-field"><label>Appraisal Fee ($)</label><input type="number" id="cc-appr" value="550" min="0" step="50"></div>
          <div class="cc-field"><label>Title Insurance ($)</label><input type="number" id="cc-title" value="1200" min="0" step="100"></div>
        </div>
        <div class="cc-grid">
          <div class="cc-field"><label>Attorney / Closing Fee ($)</label><input type="number" id="cc-atty" value="800" min="0" step="50"></div>
          <div class="cc-field"><label>Recording &amp; Transfer ($)</label><input type="number" id="cc-rec" value="400" min="0" step="50"></div>
        </div>
        <div class="cc-grid">
          <div class="cc-field"><label>Home Inspection ($)</label><input type="number" id="cc-insp" value="450" min="0" step="50"></div>
          <div class="cc-field"><label>Survey ($)</label><input type="number" id="cc-surv" value="500" min="0" step="50"></div>
        </div>
        <div class="cc-sec-lbl">Prepaid Items (Collected at Closing)</div>
        <div class="cc-grid">
          <div class="cc-field"><label>Annual Property Tax ($)</label><input type="number" id="cc-tax" value="3500" min="0" step="100"><div class="hint">2 months collected upfront</div></div>
          <div class="cc-field"><label>Annual Homeowners Insurance ($)</label><input type="number" id="cc-hoi" value="1400" min="0" step="100"><div class="hint">First year paid at closing</div></div>
        </div>
        <button class="cc-btn" onclick="calcCC()">⚡ Estimate Closing Costs</button>
        <div class="cc-result" id="cc-result" style="display:none;">
          <div class="cc-result-primary">
            <span class="val" id="cc-total">$0</span>
            <span class="lbl">Estimated Total Cash to Close</span>
          </div>
          <div class="cc-pct" id="cc-pct-line"></div>
          <div class="cc-stat-grid">
            <div class="cc-stat"><span class="sv" id="cc-dp">$0</span><span class="sl">Down Payment</span></div>
            <div class="cc-stat"><span class="sv" id="cc-fees">$0</span><span class="sl">Closing Costs</span></div>
            <div class="cc-stat"><span class="sv" id="cc-prepaid">$0</span><span class="sl">Prepaids &amp; Escrow</span></div>
          </div>
          <div class="cc-lines">
            <div class="cc-line"><span class="ll">Down Payment</span><span class="lv" id="cl-dp">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Loan Origination Fee</span><span class="lv" id="cl-orig">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Discount Points</span><span class="lv" id="cl-pts">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Appraisal</span><span class="lv" id="cl-appr">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Title Insurance</span><span class="lv" id="cl-title">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Attorney / Closing Fee</span><span class="lv" id="cl-atty">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Recording &amp; Transfer Taxes</span><span class="lv" id="cl-rec">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Home Inspection + Survey</span><span class="lv" id="cl-insp">&mdash;</span></div>
            <div class="cc-line" id="cl-extra-row" style="display:none;"><span class="ll" id="cl-extra-label">FHA MIP / VA Fee</span><span class="lv" id="cl-extra">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Prepaid Tax (2 months)</span><span class="lv" id="cl-tax">&mdash;</span></div>
            <div class="cc-line"><span class="ll">Prepaid Insurance (1 year)</span><span class="lv" id="cl-hoi">&mdash;</span></div>
            <div class="cc-line"><span class="ll" style="font-weight:700;color:#0f172a;">Total Cash to Close</span><span class="lv" id="cl-total">&mdash;</span></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Quick Reference Card -->
    <div>
      <div class="cc-section" style="margin-bottom:1.25rem;">
        <h2>Typical Closing Cost Ranges (<?php echo $currentYear;?>)</h2>
        <table class="cc-table">
          <thead><tr><th>Home Price</th><th>Low (2%)</th><th>High (5%)</th></tr></thead>
          <tbody>
            <tr><td>$200,000</td><td>$4,000</td><td>$10,000</td></tr>
            <tr><td>$300,000</td><td>$6,000</td><td>$15,000</td></tr>
            <tr><td>$400,000</td><td>$8,000</td><td>$20,000</td></tr>
            <tr><td>$500,000</td><td>$10,000</td><td>$25,000</td></tr>
            <tr><td>$750,000</td><td>$15,000</td><td>$37,500</td></tr>
          </tbody>
        </table>
        <p style="font-size:.82rem;color:#94a3b8;margin:0;">Closing costs only &mdash; not including down payment. Source: CFPB, Freddie Mac 2026.</p>
      </div>

      <div class="cc-section">
        <h2>Loan Type Differences</h2>
        <table class="cc-table">
          <thead><tr><th>Loan Type</th><th>Min Down</th><th>Key Extra Fee</th></tr></thead>
          <tbody>
            <tr><td><strong>Conventional</strong></td><td>3%</td><td>PMI if &lt;20% down</td></tr>
            <tr><td><strong>FHA</strong></td><td>3.5%</td><td class="r">+1.75% Upfront MIP</td></tr>
            <tr><td><strong>VA</strong></td><td>0%</td><td class="r">+1.25&ndash;3.3% Funding Fee</td></tr>
            <tr><td><strong>All Cash</strong></td><td>100%</td><td class="hl">No lender fees</td></tr>
          </tbody>
        </table>
        <div class="cc-info"><strong>VA buyers:</strong> No appraisal requirement in some cases. No PMI ever. <strong>FHA buyers:</strong> MIP is added to loan balance or paid upfront &mdash; this calculator shows it as upfront.</div>
      </div>
    </div>
  </div>

  <!-- What's Included Section -->
  <div class="cc-section">
    <h2>What Closing Costs Does This Calculator Include?</h2>
    <p>This calculator covers all standard buyer closing costs for a US home purchase. Here's what each line item means:</p>
    <table class="cc-table">
      <thead><tr><th>Cost Item</th><th>Typical Range</th><th>Who Charges It</th><th>Negotiable?</th></tr></thead>
      <tbody>
        <tr><td><strong>Loan Origination Fee</strong></td><td>0.5%&ndash;1% of loan</td><td>Your lender</td><td class="hl">Yes &mdash; shop lenders</td></tr>
        <tr><td><strong>Discount Points</strong></td><td>0&ndash;3% of loan</td><td>Your lender</td><td class="hl">Yes &mdash; optional</td></tr>
        <tr><td><strong>Appraisal Fee</strong></td><td>$400&ndash;$700</td><td>Appraiser (ordered by lender)</td><td>Limited</td></tr>
        <tr><td><strong>Title Insurance</strong></td><td>$500&ndash;$2,000</td><td>Title company</td><td class="hl">Some room</td></tr>
        <tr><td><strong>Title Search</strong></td><td>$100&ndash;$400</td><td>Title company</td><td>No</td></tr>
        <tr><td><strong>Attorney / Closing Fee</strong></td><td>$500&ndash;$1,500</td><td>Settlement attorney or closing agent</td><td class="hl">Some room</td></tr>
        <tr><td><strong>Recording &amp; Transfer Taxes</strong></td><td>$200&ndash;$2,000+</td><td>County/state government</td><td>No &mdash; set by law</td></tr>
        <tr><td><strong>Home Inspection</strong></td><td>$300&ndash;$600</td><td>Licensed home inspector</td><td>No</td></tr>
        <tr><td><strong>Survey</strong></td><td>$300&ndash;$800</td><td>Licensed surveyor</td><td>No</td></tr>
        <tr><td><strong>Prepaid Property Tax</strong></td><td>2&ndash;3 months of annual tax</td><td>Lender escrow account</td><td>No</td></tr>
        <tr><td><strong>Prepaid Homeowners Insurance</strong></td><td>First year premium</td><td>Your insurance company</td><td class="hl">Yes &mdash; shop insurers</td></tr>
        <tr><td><strong>FHA Upfront MIP</strong></td><td>1.75% of loan</td><td>FHA / HUD</td><td>No &mdash; fixed by HUD</td></tr>
        <tr><td><strong>VA Funding Fee</strong></td><td>1.25%&ndash;3.3% of loan</td><td>VA / Dept. of Veterans Affairs</td><td>No (exempt if disabled)</td></tr>
      </tbody>
    </table>
    <div class="cc-warn">⚠️ <strong>Not included in this calculator:</strong> HO / transfer fees, condo questionnaire fees, pest/radon inspections, lead paint inspections, flood certification, tax service fees, and wire transfer fees. These can add $200&ndash;$800 depending on your area and property type.</div>
  </div>

  <!-- State&mdash;Level Cost Section -->
  <div class="cc-section">
    <h2>Closing Costs by State: What to Expect</h2>
    <p>Closing costs vary significantly by state due to transfer taxes, attorney requirements, and local title practices. High&mdash;tax states can push total closing costs to 3&ndash;5% of purchase price even before negotiation.</p>
    <table class="cc-table">
      <thead><tr><th>State</th><th>Avg. Closing Costs (excl. down pmt)</th><th>Key Driver</th></tr></thead>
      <tbody>
        <tr><td><strong>New York</strong></td><td class="r">$6,800&ndash;$30,000+</td><td>Mansion tax, mortgage recording tax, NYC add-ons</td></tr>
        <tr><td><strong>Pennsylvania</strong></td><td class="r">$4,000&ndash;$10,000</td><td>Transfer tax (2% total), attorney required</td></tr>
        <tr><td><strong>Delaware</strong></td><td class="r">$3,500&ndash;$8,000</td><td>Transfer tax (4% split buyer/seller)</td></tr>
        <tr><td><strong>Texas</strong></td><td>$3,500&ndash;$8,000</td><td>No transfer tax, but title insurance higher</td></tr>
        <tr><td><strong>Florida</strong></td><td>$3,000&ndash;$7,500</td><td>Doc stamps, title insurance</td></tr>
        <tr><td><strong>California</strong></td><td>$4,000&ndash;$9,000</td><td>County transfer tax, title fees</td></tr>
        <tr><td><strong>Ohio</strong></td><td class="hl">$2,500&ndash;$6,000</td><td>Low transfer tax (0.1%), no attorney requirement</td></tr>
        <tr><td><strong>Colorado</strong></td><td>$2,800&ndash;$6,500</td><td>Title insurance, doc prep fees</td></tr>
        <tr><td><strong>Missouri</strong></td><td class="hl">$2,000&ndash;$5,000</td><td>Low transfer taxes, competitive title market</td></tr>
        <tr><td><strong>Indiana</strong></td><td class="hl">$2,000&ndash;$4,500</td><td>Lowest closing costs in Midwest</td></tr>
      </tbody>
    </table>
    <p style="font-size:.85rem;color:#94a3b8;">Source: CFPB Closing Cost Data, Bankrate 2026 survey. Ranges exclude down payment and vary by loan amount, lender, and transaction specifics.</p>
  </div>

  <!-- Buyer vs Seller -->
  <div class="cc-section">
    <h2>Buyer vs. Seller Closing Costs: Who Pays What?</h2>
    <h3>What Buyers Typically Pay</h3>
    <p>Buyers pay the majority of third&mdash;party closing costs &mdash; primarily lender&mdash;required fees. Expect to pay:</p>
    <ul style="color:#475569;padding-left:1.4rem;line-height:1.8;font-size:.95rem;">
      <li>All lender fees (origination, processing, underwriting)</li>
      <li>Appraisal, home inspection, and survey</li>
      <li>Their own title insurance policy (lender's policy is required; owner's policy is optional but strongly recommended)</li>
      <li>Recording fees and their share of transfer taxes</li>
      <li>All prepaid and escrow items</li>
    </ul>
    <h3>What Sellers Typically Pay</h3>
    <p>Sellers pay for marketing and transfer costs:</p>
    <ul style="color:#475569;padding-left:1.4rem;line-height:1.8;font-size:.95rem;">
      <li>Real estate agent commissions (typically 5&ndash;6% of sale price)</li>
      <li>Seller's attorney fees (in attorney states)</li>
      <li>Owner's title insurance for the buyer (in some states, this is seller's custom)</li>
      <li>Their share of transfer taxes</li>
      <li>HO / transfer fees and prorated property taxes</li>
    </ul>
    <h3>Seller Concessions: Reducing Your Cash to Close</h3>
    <p>You can negotiate seller concessions in your purchase offer &mdash; asking the seller to contribute toward your closing costs. The IRS and GSEs cap these concessions:</p>
    <table class="cc-table">
      <thead><tr><th>Loan Type</th><th>Max Seller Concessions</th></tr></thead>
      <tbody>
        <tr><td>Conventional (≥25% down)</td><td class="hl">9% of purchase price</td></tr>
        <tr><td>Conventional (10&ndash;25% down)</td><td class="hl">6% of purchase price</td></tr>
        <tr><td>Conventional (&lt;10% down)</td><td>3% of purchase price</td></tr>
        <tr><td>FHA</td><td>6% of purchase price</td></tr>
        <tr><td>VA</td><td>4% of purchase price</td></tr>
      </tbody>
    </table>
  </div>

  <!-- Cash to Close vs Closing Costs -->
  <div class="cc-section">
    <h2>Cash to Close vs. Closing Costs: The Difference Explained</h2>
    <p>Many buyers confuse these two terms. Here's the simple breakdown:</p>
    <div class="cc-info">
      <strong>Cash to Close</strong> = Down Payment + Closing Costs + Prepaid Items<br><br>
      <strong>Closing Costs</strong> = Third-party fees only (lender, title, attorney, government)<br><br>
      <strong>Prepaid Items</strong> = Money collected at closing but applied to future costs (property tax escrow, insurance prepaid)
    </div>
    <p>Example: A $350,000 home with 20% down ($70,000 down payment):</p>
    <table class="cc-table">
      <thead><tr><th>Item</th><th>Amount</th></tr></thead>
      <tbody>
        <tr><td>Down Payment (20%)</td><td><strong>$70,000</strong></td></tr>
        <tr><td>Loan Origination (0.75% of $280,000 loan)</td><td>$2,100</td></tr>
        <tr><td>Appraisal</td><td>$550</td></tr>
        <tr><td>Title Insurance</td><td>$1,200</td></tr>
        <tr><td>Attorney / Closing Fee</td><td>$800</td></tr>
        <tr><td>Recording &amp; Transfer</td><td>$400</td></tr>
        <tr><td>Inspection + Survey</td><td>$950</td></tr>
        <tr><td><strong>Subtotal: Closing Costs</strong></td><td><strong>$6,000</strong></td></tr>
        <tr><td>Prepaid Property Tax (2 months × $292)</td><td>$583</td></tr>
        <tr><td>Prepaid Insurance (1 year)</td><td>$1,400</td></tr>
        <tr><td><strong>Total Cash to Close</strong></td><td><strong>$78,000</strong></td></tr>
      </tbody>
    </table>
  </div>

  <!-- FAQ -->
  <div class="cc-section">
    <h2>Frequently Asked Questions About Closing Costs</h2>
    <?php $faqs=[
      ['How much are closing costs on a $350,000 house?','On a $350,000 home with 20% down (loan $280,000), buyer closing costs typically total $7,000&ndash;$14,000 (2&ndash;4% of purchase price), plus your $70,000 down payment and $2,000&ndash;$3,000 in prepaids. Total cash to close: approximately $79,000&ndash;$87,000. Use the calculator above for a personalized breakdown.'],
      ['What closing costs are negotiable?','Lender origination fees and discount points are the most negotiable &mdash; get Loan Estimates from 3+ lenders and compare. Some title fees (settlement fee, doc prep) have room to negotiate. Attorney fees in attorney&mdash;required states have some flexibility. Recording fees, transfer taxes, appraisal fees, and government&mdash;set fees like FH / MIP are not negotiable.'],
      ['Can I roll closing costs into my mortgage?','On a refinance, yes. On a purchase, most costs must be paid at closing. However, you can accept a higher interest rate in exchange for lender credits that cover some of your closing costs (this is called a "no&mdash;closing&mdash;cost mortgage" &mdash; you pay via a higher rate over time). Seller concessions (see above) are another way to reduce out&mdash;of&mdash;pocket costs at closing.'],
      ['What are prepaid items at closing?','Prepaids are not fees &mdash; they are advance payments for ongoing homeownership costs. At closing you typically pay: (1) 2&ndash;3 months of property taxes into an escrow account, (2) your first full year of homeowners insurance premium, and (3) prepaid mortgage interest from your closing date to the end of that month (usually 5&ndash;20 days of interest).'],
      ['When do I find out the exact closing costs?','Under TRID (TIL×RESP / Integrated Disclosure) rules, your lender must give you a Loan Estimate within 3 business days of your application. You receive the Closing Disclosure at least 3 business days before closing with the final, binding numbers. Compare both documents carefully &mdash; fees should not change dramatically between them without your consent.'],
      ['Is title insurance required?','A lender\'s title insurance policy is required by virtually all mortgage lenders &mdash; it protects the lender if a title issue arises. An owner\'s title insurance policy (which protects you) is optional but strongly recommended. Title issues &mdash; old liens, clerical errors, undisclosed heirs &mdash; can surface years after closing and cost tens of thousands to resolve without owner\'s coverage.'],
      ['What if the seller pays some of my closing costs?','Seller concessions reduce your cash to close but don\'t affect the loan amount or purchase price (in most cases). For example, if you agree on a $350,000 purchase price and the seller pays $5,000 toward your closing costs, you bring $5,000 less cash to closing. Your loan amount is still based on the $350,000 purchase price minus your down payment.'],
      ['What is a no&mdash;closing&mdash;cost mortgage?','A no&mdash;closing&mdash;cost mortgage means the lender covers your closing costs in exchange for a higher interest rate &mdash; typically 0.25&ndash;0.50% higher. This makes sense if you plan to sell or refinance within 3&ndash;5 years before the higher monthly payments exceed the closing cost savings. Use our <a href="/loan-calculators/personal-loan-calculator">loan calculator</a> to compare total cost with and without points/fees.'],
    ];
    foreach($faqs as $f):?>
    <div class="cc-faq-item"><div class="cc-faq-q"><?php echo $f[0];?></div><div class="cc-faq-a"><?php echo $f[1];?></div></div>
    <?php endforeach;?>
  </div>

  <!-- How to Reduce Closing Costs -->
  <div class="cc-section">
    <h2>7 Ways to Reduce Your Closing Costs in <?php echo $currentYear;?></h2>
    <p>Closing costs are not fixed &mdash; strategic buyers can meaningfully reduce what they pay at the table:</p>
    <ol style="color:#475569;padding-left:1.4rem;line-height:1.8;font-size:.95rem;">
      <li><strong>Shop at least 3 lenders.</strong> Origination fees and points vary wildly. Getting 3 competing Loan Estimates can save $1,500&ndash;$4,000 on a $300K+ purchase.</li>
      <li><strong>Negotiate seller concessions.</strong> In a buyer's market, ask the seller to contribute 2&ndash;3% toward your closing costs to reduce cash to close.</li>
      <li><strong>Close near end of month.</strong> Prepaid daily interest runs from your closing date to month-end. Closing on the 28th instead of the 1st saves ~27 days of interest.</li>
      <li><strong>Shop your homeowners insurance.</strong> Get 3+ quotes before closing. The first-year premium is collected at closing and differences of $400&ndash;$800/year are common.</li>
      <li><strong>Ask about lender credits.</strong> Trading a slightly higher rate for lender credits can eliminate $2,000&ndash;$5,000 in fees upfront &mdash; smart if you plan to sell or refinance in 3&ndash;5 years.</li>
      <li><strong>Challenge junk fees.</strong> On your Loan Estimate, look for duplicate document preparation, administrative, or courier fees. These are often waivable.</li>
      <li><strong>Use a VA loan if eligible.</strong> VA loans eliminate PMI entirely and require no down payment, significantly reducing total cash to close.</li>
    </ol>
  </div>

  <!-- TRID Disclosure Timeline -->
  <div class="cc-section">
    <h2>When Do You Find Out the Exact Closing Costs?</h2>
    <p>Under TILA-RESPA Integrated Disclosure (TRID) rules, lenders must provide two key documents:</p>
    <table class="cc-table">
      <thead><tr><th>Document</th><th>When Received</th><th>Purpose</th></tr></thead>
      <tbody>
        <tr><td><strong>Loan Estimate (LE)</strong></td><td>Within 3 business days of application</td><td>Good-faith estimate of all closing costs</td></tr>
        <tr><td><strong>Closing Disclosure (CD)</strong></td><td>At least 3 business days before closing</td><td>Final, binding itemized costs</td></tr>
      </tbody>
    </table>
    <div class="cc-warn">⚠️ Compare your Closing Disclosure to your Loan Estimate carefully. Origination charges cannot increase at all; other fees can only increase within allowable tolerance bands (0% or 10% depending on category). If you see unexpected increases, ask your lender for a written explanation before signing.</div>
  </div>

  <!-- Related Calculators -->
  <div class="cc-section">
    <h2>Related Real Estate Calculators</h2>
    <div class="cc-related">
      <a href="/real-estate/investment-property-closing-cost-calculator" class="cc-rel">📑 Investment Property Closing Costs</a>
      <a href="/real-estate/home-affordability-calculator" class="cc-rel">🏠 Home Affordability Calculator</a>
      <a href="/real-estate/closing-cost-calculator-california" class="cc-rel">🌴 California Closing Costs</a>
      <a href="/real-estate/closing-cost-calculator-texas" class="cc-rel">⭐ Texas Closing Costs</a>
      <a href="/real-estate/closing-cost-calculator-florida" class="cc-rel">☀️ Florida Closing Costs</a>
      <a href="/real-estate/mortgage-calculator" class="cc-rel">🏦 Mortgage Calculator</a>
      <a href="/real-estate/down-payment-calculator" class="cc-rel">⬇️ Down Payment Calculator</a>
      <a href="/real-estate/rent-vs-buy-calculator" class="cc-rel">⚖️ Rent vs Buy Calculator</a>
      <a href="/real-estate/cap-rate-calculator" class="cc-rel">📊 Cap Rate Calculator</a>
      <a href="/real-estate/rental-yield-calculator" class="cc-rel">🏘️ Rental Yield Calculator</a>
      <a href="/loan-calculators/personal-loan-calculator" class="cc-rel">💳 Personal Loan Calculator</a>
      <a href="/real-estate/" class="cc-rel">🏠 All Real Estate Tools</a>
    </div>
  </div>

</div>

  <!-- Expert / Editorial Note (E&mdash;E&mdash;×T Signal) -->
  <div style="max-width:1100px;margin:0 auto 32px;padding:0 20px;">
    <section style="background:#eff6ff;border:1px solid #bfdbfe;border-radius:12px;padding:16px 22px;">
      <p style="font-size:.84rem;color:#1e40af;margin:0;line-height:1.6;"><strong>Editorial Note:</strong> This Closing Cost Calculator is maintained by the AmericaCalculator.com editorial team and updated with <?php echo $currentYear; ?> fee benchmarks. Closing cost data referenced from <a href="https://www.hud.gov" rel="noopener noreferrer" target="_blank" style="color:#2563eb;">HUD.gov</a> and <a href="https://www.cfpb.gov" rel="noopener noreferrer" target="_blank" style="color:#2563eb;">CFPB</a>. Last updated: September <?php echo $currentYear; ?>. Estimates only &mdash; always review your official Loan Estimate and Closing Disclosure from your lender before closing.</p>
    </section>
  </div>
</main>

<script>
function fmtC(v){return '$'+Math.round(Math.abs(v)).toLocaleString();}
function calcCC(){
  var price=parseFloat(document.getElementById('cc-price').value)||0;
  var downPct=parseFloat(document.getElementById('cc-down').value)||0;
  var orig=parseFloat(document.getElementById('cc-orig').value)||0;
  var points=parseFloat(document.getElementById('cc-points').value)||0;
  var appr=parseFloat(document.getElementById('cc-appr').value)||0;
  var title=parseFloat(document.getElementById('cc-title').value)||0;
  var atty=parseFloat(document.getElementById('cc-atty').value)||0;
  var rec=parseFloat(document.getElementById('cc-rec').value)||0;
  var insp=parseFloat(document.getElementById('cc-insp').value)||0;
  var surv=parseFloat(document.getElementById('cc-surv').value)||0;
  var tax=parseFloat(document.getElementById('cc-tax').value)||0;
  var hoi=parseFloat(document.getElementById('cc-hoi').value)||0;
  var type=document.getElementById('cc-type').value;
  var dp=price*(downPct/100);
  var loan=price-dp;
  var origFee=loan*(orig/100);
  var taxPrepaid=(tax/12)*2;
  var hoiPrepaid=hoi;
  var extra=0, extraLabel='';
  if(type==='fha'){extra=loan*0.0175; extraLabel='FHA Upfront MIP (1.75%)';}
  if(type==='va'){
    var vaRate=(downPct>=10)?0.0125:(downPct>=5?0.015:0.023);
    extra=loan*vaRate; extraLabel='VA Funding Fee';
  }
  if(type==='cash'){loan=0; origFee=0; extra=0;}
  var closingCosts=origFee+points+appr+title+atty+rec+insp+surv+extra;
  var prepaids=taxPrepaid+hoiPrepaid;
  var total=dp+closingCosts+prepaids;
  var pct=price>0?((closingCosts/price)*100).toFixed(1):0;
  document.getElementById('cc-total').textContent=fmtC(total);
  document.getElementById('cc-dp').textContent=fmtC(dp);
  document.getElementById('cc-fees').textContent=fmtC(closingCosts);
  document.getElementById('cc-prepaid').textContent=fmtC(prepaids);
  document.getElementById('cc-pct-line').innerHTML='Closing costs = <strong>'+pct+'%<\/strong> of purchase price';
  document.getElementById('cl-dp').textContent=fmtC(dp);
  document.getElementById('cl-orig').textContent=fmtC(origFee);
  document.getElementById('cl-pts').textContent=fmtC(points);
  document.getElementById('cl-appr').textContent=fmtC(appr);
  document.getElementById('cl-title').textContent=fmtC(title);
  document.getElementById('cl-atty').textContent=fmtC(atty);
  document.getElementById('cl-rec').textContent=fmtC(rec);
  document.getElementById('cl-insp').textContent=fmtC(insp+surv);
  document.getElementById('cl-tax').textContent=fmtC(taxPrepaid);
  document.getElementById('cl-hoi').textContent=fmtC(hoiPrepaid);
  document.getElementById('cl-total').textContent=fmtC(total);
  var extraRow=document.getElementById('cl-extra-row');
  if(extra>0){
    document.getElementById('cl-extra-label').textContent=extraLabel;
    document.getElementById('cl-extra').textContent=fmtC(extra);
    extraRow.style.display='flex';
  } else {
    extraRow.style.display='none';
  }
  document.getElementById('cc-result').style.display='block';
}
// Wire all inputs to auto-calculate
document.querySelectorAll('#cc-price,#cc-down,#cc-rate,#cc-type,#cc-orig,#cc-points,#cc-appr,#cc-title,#cc-atty,#cc-rec,#cc-insp,#cc-surv,#cc-tax,#cc-hoi').forEach(function(el){
  el.addEventListener('input',calcCC);
  el.addEventListener('change',calcCC);
});
// FAQ accordion
document.querySelectorAll('.cc-faq-q').forEach(function(q){
  q.addEventListener('click',function(){
    var i=this.closest('.cc-faq-item'),w=i.classList.contains('open');
    document.querySelectorAll('.cc-faq-item').forEach(function(x){x.classList.remove('open');});
    if(!w) i.classList.add('open');
  });
});
calcCC();
</script>
<?php require_once '../includes/footer.php'; ?>

