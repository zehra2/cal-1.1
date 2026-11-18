<?php
$currentYear = date('Y');
$pageTitle       = "Seller Closing Cost Calculator ($currentYear) | Net Proceeds Estimator";
$metaDescription = "Free seller closing cost calculator $currentYear. Estimate your net proceeds after agent commissions, transfer taxes, title fees, and mortgage payoff. See what you'll walk away with.";
$metaKeywords    = 'seller closing cost calculator, cost to sell a house, net proceeds calculator, seller closing costs, real estate seller costs, home sale proceeds calculator';
$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'WebApplication',
   'name'=>'Seller Closing Cost Calculator',
   'url'=>'https://americacalculator.com/real-estate/seller-closing-cost-calculator',
   'description'=>'Calculate your home sale net proceeds after agent commissions, transfer taxes, title insurance, escrow fees, and mortgage payoff.',
   'applicationCategory'=>'FinanceApplication','operatingSystem'=>'All',
   'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Real Estate','item'=>'https://americacalculator.com/real-estate/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'Seller Closing Cost Calculator','item'=>'https://americacalculator.com/real-estate/seller-closing-cost-calculator'],
  ]],
  ['@type'=>'HowTo',
   'name'=>'How to Use the Seller Closing Cost Calculator',
   'description'=>'Estimate your home sale net proceeds in 5 steps.',
   'totalTime'=>'PT3M',
   'step'=>[
     ['@type'=>'HowToStep','position'=>1,'name'=>'Enter your sale price','text'=>'Enter the expected or listed sale price of your home. If you have not yet listed, use the current market value estimated by your real estate agent or a recent appraisal.'],
     ['@type'=>'HowToStep','position'=>2,'name'=>'Enter agent commission rates','text'=>'Enter the listing agent commission percentage and buyer agent commission percentage. Traditionally 5-6% total, though commissions are now fully negotiable following the 2024 NAR settlement.'],
     ['@type'=>'HowToStep','position'=>3,'name'=>'Enter your mortgage payoff balance','text'=>'Enter your current mortgage payoff amount. Call your lender for an exact 30-day payoff quote, which includes accrued interest.'],
     ['@type'=>'HowToStep','position'=>4,'name'=>'Select your state transfer tax','text'=>'Select your state to apply the appropriate transfer tax rate. Some states like Texas have zero transfer tax; others like California charge $1.10 per $1,000 at the county level.'],
     ['@type'=>'HowToStep','position'=>5,'name'=>'Review your net proceeds breakdown','text'=>'Click Calculate. Your itemized net proceeds statement shows sale price minus all seller costs equaling your estimated net cash at closing.'],
   ]],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'How much does it cost to sell a house?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Total seller closing costs typically range from 7% to 10% of the sale price when including agent commissions (5-6%), transfer taxes (0-2.5%), and title/escrow fees (0.5-1%). On a $400,000 home, expect $28,000-$40,000 in total seller costs.']],
    ['@type'=>'Question','name'=>'What seller closing costs are negotiable?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Agent commissions are fully negotiable and are the largest variable cost. Following the 2024 NAR settlement, sellers are no longer required to offer a buyer agent commission through the MLS. Title insurance and escrow fees are also negotiable. Transfer taxes and recording fees are set by law.']],
    ['@type'=>'Question','name'=>'Who pays closing costs — buyer or seller?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Both parties pay closing costs but different items. Sellers typically pay: agent commissions, transfer taxes (in most states), owner title insurance policy, and prorated property taxes. Buyers typically pay: lender fees, appraisal, home inspection, lender title insurance, and prepaid property taxes/insurance.']],
    ['@type'=>'Question','name'=>'How do I calculate my home sale net proceeds?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Net Proceeds = Sale Price - Agent Commissions - Transfer Taxes - Title/Escrow Fees - Mortgage Payoff - Seller Concessions - Other Costs. Example: $500,000 sale - $25,000 (5% commission) - $550 (TX title) - $400 (escrow) - $280,000 (mortgage payoff) = approximately $194,050 net proceeds.']],
    ['@type'=>'Question','name'=>'Do I pay capital gains tax on my home sale?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'The IRS Section 121 exclusion allows single filers to exclude up to $250,000 in home sale gains, and married couples filing jointly up to $500,000. To qualify, you must have owned and lived in the home as your primary residence for at least 2 of the last 5 years.']],
    ['@type'=>'Question','name'=>'What is a seller concession?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'A seller concession is when the seller agrees to pay a portion of the buyer closing costs. Concessions reduce your net proceeds. Conventional loan limits: 3% (under 10% down), 6% (10-25% down), 9% (over 25% down). FHA: 6%. VA: 4%.']],
    ['@type'=>'Question','name'=>'How does the 2024 NAR commission settlement affect sellers?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Since August 2024, sellers are no longer required to offer a buyer agent commission through the MLS. Buyers now negotiate their agent compensation separately via a buyer representation agreement. Many sellers still offer 2-3% to attract buyers.']],
    ['@type'=>'Question','name'=>'What is a transfer tax on a home sale?',
     'acceptedAnswer'=>['@type'=>'Answer','text'=>'Transfer tax is a state or county tax imposed when property ownership changes hands. Texas has zero transfer tax. California charges $1.10/$1,000 at the county level plus city surtaxes. New York state charges $4/$1,000. In most states the seller pays the transfer tax.']],
  ]],
]];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f8fafc;}
.sc-wrap{max-width:1100px;margin:0 auto;padding:2rem 1.25rem 5rem;}
.sc-bc{font-size:.8rem;color:#94a3b8;margin-bottom:.75rem;}.sc-bc a{color:#64748b;text-decoration:none;}
.sc-hero h1{font-size:1.85rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.sc-hero p{font-size:.97rem;color:#64748b;line-height:1.65;margin:0 0 .5rem;border-left:3px solid #7c3aed;padding-left:.9rem;}
.sc-meta{font-size:.78rem;color:#94a3b8;margin-bottom:1.75rem;}
.sc-layout{display:grid;grid-template-columns:1fr 1fr;gap:1.75rem;margin-bottom:1.75rem;}
.sc-card{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden;}
.sc-card-head{background:#5b21b6;color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;}
.sc-body{padding:1.5rem;}
.sc-field{margin-bottom:1rem;}
.sc-field label{display:block;font-size:.85rem;font-weight:600;color:#1e293b;margin-bottom:.35rem;}
.sc-field input,.sc-field select{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.94rem;color:#0f172a;outline:none;background:#fff;transition:border-color .2s;}
.sc-field input:focus,.sc-field select:focus{border-color:#7c3aed;}
.sc-field .hint{font-size:.73rem;color:#94a3b8;margin-top:.25rem;}
.sc-grid{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.sc-sec-lbl{font-size:.7rem;font-weight:800;text-transform:uppercase;letter-spacing:.07em;color:#94a3b8;margin:1.2rem 0 .7rem;padding-bottom:.3rem;border-bottom:1px solid #f1f5f9;}
.sc-btn{width:100%;background:#5b21b6;color:#fff;padding:13px;border:none;border-radius:8px;font-size:.97rem;font-weight:700;cursor:pointer;margin-top:.5rem;transition:background .2s;}
.sc-btn:hover{background:#7c3aed;}
.sc-result{background:#f5f3ff;border:1.5px solid #c4b5fd;border-radius:10px;padding:1.25rem 1.5rem;margin-top:1.25rem;}
.sc-result-primary{text-align:center;margin-bottom:1rem;}
.sc-result-primary .val{font-size:2.4rem;font-weight:800;color:#5b21b6;display:block;line-height:1;}
.sc-result-primary .lbl{font-size:.83rem;color:#64748b;}
.sc-stat-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:.65rem;margin-bottom:.85rem;}
.sc-stat{background:#fff;border-radius:8px;padding:.75rem;text-align:center;border:1px solid #c4b5fd;}
.sc-stat .sv{display:block;font-size:1rem;font-weight:800;color:#5b21b6;}
.sc-stat .sl{font-size:.69rem;color:#64748b;font-weight:600;line-height:1.3;}
.sc-line{display:flex;justify-content:space-between;padding:.3rem 0;border-bottom:1px solid #ede9fe;font-size:.86rem;}
.sc-line:last-child{border-bottom:none;font-weight:700;color:#5b21b6;font-size:1rem;}
.sc-line .ll{color:#64748b;}.sc-line .lv{font-weight:600;color:#1e293b;}
.sc-section{background:#fff;border-radius:12px;border:1px solid #e2e8f0;padding:1.75rem;margin-bottom:1.5rem;}
.sc-section h2{font-size:1.3rem;color:#0f172a;margin:0 0 .85rem;padding-bottom:.6rem;border-bottom:2px solid #f5f3ff;}
.sc-section h3{font-size:1.05rem;color:#0f172a;margin:1.25rem 0 .55rem;}
.sc-section p{color:#475569;line-height:1.72;font-size:.95rem;margin-bottom:.9rem;}
.sc-section a{color:#7c3aed;font-weight:600;text-decoration:none;}
.sc-section a:hover{text-decoration:underline;}
.sc-table{width:100%;border-collapse:collapse;border-radius:9px;overflow:hidden;border:1px solid #e2e8f0;margin-bottom:1rem;}
.sc-table th{background:#5b21b6;color:#fff;padding:9px 13px;font-size:.84rem;font-weight:600;text-align:left;}
.sc-table td{padding:9px 13px;border-bottom:1px solid #f1f5f9;font-size:.87rem;color:#334155;}
.sc-table tr:last-child td{border-bottom:none;}
.sc-table tr:nth-child(even) td{background:#f8fafc;}
.sc-table .hl{color:#059669;font-weight:700;}
.sc-table .r{color:#dc2626;font-weight:700;}
.sc-info{background:#f5f3ff;border-left:4px solid #7c3aed;border-radius:0 8px 8px 0;padding:.9rem 1.1rem;margin:1rem 0;font-size:.9rem;color:#4c1d95;line-height:1.65;}
.sc-faq-item{border-bottom:1px solid #f1f5f9;padding:.8rem 0;}
.sc-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.sc-faq-q{font-size:.95rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:1rem;}
.sc-faq-q::after{content:'+';color:#7c3aed;font-size:1.2rem;flex-shrink:0;}
.sc-faq-item.open .sc-faq-q::after{content:'-';}
.sc-faq-a{display:none;color:#475569;font-size:.9rem;line-height:1.68;padding-top:.5rem;}
.sc-faq-item.open .sc-faq-a{display:block;}
.sc-related{display:grid;grid-template-columns:repeat(auto-fill,minmax(175px,1fr));gap:.75rem;margin-top:.75rem;}
.sc-rel{display:block;background:#f5f3ff;border:1.5px solid #c4b5fd;border-radius:8px;padding:.75rem 1rem;font-size:.85rem;font-weight:600;color:#5b21b6;text-decoration:none;text-align:center;transition:background .15s;}
.sc-rel:hover{background:#ede9fe;}
@media(max-width:760px){.sc-layout{grid-template-columns:1fr;}.sc-grid,.sc-stat-grid{grid-template-columns:1fr;}.sc-hero h1{font-size:1.5rem;}}
</style>

<main id="main-content">
<div class="sc-wrap">
  <div class="sc-bc">
    <a href="/">Home</a> &rsaquo;
    <a href="/real-estate/">Real Estate</a> &rsaquo;
    Seller Closing Cost Calculator
  </div>

  <div class="sc-hero">
    <h1>Seller Closing Cost Calculator (<?php echo $currentYear;?>)</h1>
    <p>Estimate your home sale net proceeds &mdash; see exactly what you will walk away with after agent commissions, transfer taxes, title fees, and mortgage payoff.</p>
    <div class="sc-meta">&#9999; By AmericaCalculator Real Estate Team | Last verified: <?php echo date('F Y');?> | Sources: NAR, state revenue departments</div>
  </div>

  <!-- 2026 Callout Box -->
  <div style="background:linear-gradient(135deg,#3b0764 0%,#5b21b6 60%,#7c3aed 100%);border-radius:14px;padding:1.4rem 1.75rem;margin-bottom:1.25rem;border:1px solid #6d28d9;box-shadow:0 4px 24px rgba(109,40,217,.25);" id="seller-callout">
    <div style="display:flex;align-items:center;gap:.6rem;margin-bottom:.6rem;">
      <span style="background:#ef4444;color:#fff;font-size:.7rem;font-weight:800;padding:2px 9px;border-radius:20px;letter-spacing:.07em;">&#9679; <?php echo $currentYear; ?> GUIDE</span>
      <span style="color:rgba(255,255,255,.65);font-size:.78rem;">NAR Commission Settlement in Effect Since August 2024</span>
    </div>
    <div style="font-size:1.1rem;font-weight:800;color:#fff;margin-bottom:.4rem;">Seller costs typically run 7%&ndash;10% of sale price</div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:.75rem;margin-top:.75rem;">
      <div style="background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);border-radius:9px;padding:.75rem 1rem;">
        <div style="font-size:.7rem;font-weight:700;color:rgba(255,255,255,.65);text-transform:uppercase;margin-bottom:.3rem;">Agent Commissions</div>
        <div style="font-size:1.2rem;font-weight:800;color:#c4b5fd;">2.5%&ndash;6%</div>
        <div style="font-size:.72rem;color:rgba(255,255,255,.6);">Now fully negotiable</div>
      </div>
      <div style="background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);border-radius:9px;padding:.75rem 1rem;">
        <div style="font-size:.7rem;font-weight:700;color:rgba(255,255,255,.65);text-transform:uppercase;margin-bottom:.3rem;">Transfer Tax</div>
        <div style="font-size:1.2rem;font-weight:800;color:#c4b5fd;">$0&ndash;2.5%+</div>
        <div style="font-size:.72rem;color:rgba(255,255,255,.6);">Varies by state</div>
      </div>
      <div style="background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);border-radius:9px;padding:.75rem 1rem;">
        <div style="font-size:.7rem;font-weight:700;color:rgba(255,255,255,.65);text-transform:uppercase;margin-bottom:.3rem;">Title / Escrow</div>
        <div style="font-size:1.2rem;font-weight:800;color:#c4b5fd;">0.3%&ndash;1%</div>
        <div style="font-size:.72rem;color:rgba(255,255,255,.6);">Partly negotiable</div>
      </div>
      <div style="background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.2);border-radius:9px;padding:.75rem 1rem;">
        <div style="font-size:.7rem;font-weight:700;color:rgba(255,255,255,.65);text-transform:uppercase;margin-bottom:.3rem;">Net on $400k Home</div>
        <div style="font-size:1.2rem;font-weight:800;color:#a78bfa;">~$362k&ndash;$372k</div>
        <div style="font-size:.72rem;color:rgba(255,255,255,.6);">Before mortgage payoff</div>
      </div>
    </div>
  </div>
  <style>@media(max-width:640px){#seller-callout{padding:1rem 1.1rem;}}</style>

  <div class="sc-layout">
    <!-- Calculator Card -->
    <div class="sc-card">
      <div class="sc-card-head">&#127968; Seller Net Proceeds Calculator</div>
      <div class="sc-body">
        <div class="sc-sec-lbl">Sale Details</div>
        <div class="sc-grid">
          <div class="sc-field"><label>Expected Sale Price ($)</label><input type="number" id="sc-price" value="400000" min="0" step="5000"></div>
          <div class="sc-field"><label>State Transfer Tax</label>
            <select id="sc-state">
              <option value="0">No transfer tax (TX, AK, MT, WY)</option>
              <option value="0.001">$1/$1,000 (NV, WI, CO partial)</option>
              <option value="0.0011" selected>$1.10/$1,000 (CA county base, OR)</option>
              <option value="0.002">$2/$1,000 (VA, KY, MI)</option>
              <option value="0.003">$3/$1,000 (WA state)</option>
              <option value="0.004">$4/$1,000 (NY state)</option>
              <option value="0.007">$7/$1,000 (MD, DE)</option>
              <option value="0.02">2% of price (PA)</option>
              <option value="0.04">4% of price (DE buyer+seller)</option>
            </select>
            <div class="hint">Seller's portion only. City/county add-ons may apply.</div>
          </div>
        </div>
        <div class="sc-sec-lbl">Agent Commissions</div>
        <div class="sc-grid">
          <div class="sc-field"><label>Listing Agent Commission (%)</label><input type="number" id="sc-list-comm" value="2.5" min="0" max="10" step="0.25"><div class="hint">Typically 2.5%&ndash;3% post-NAR settlement</div></div>
          <div class="sc-field"><label>Buyer Agent Compensation (%)</label><input type="number" id="sc-buy-comm" value="2.5" min="0" max="10" step="0.25"><div class="hint">Optional; fully negotiable via buyer agreement</div></div>
        </div>
        <div class="sc-sec-lbl">Payoff &amp; Other Costs</div>
        <div class="sc-grid">
          <div class="sc-field"><label>Mortgage Payoff Balance ($)</label><input type="number" id="sc-payoff" value="250000" min="0" step="1000"><div class="hint">Get 30-day payoff from lender (includes accrued interest)</div></div>
          <div class="sc-field"><label>Seller Concessions ($)</label><input type="number" id="sc-concessions" value="0" min="0" step="500"><div class="hint">Credits offered to buyer for their closing costs</div></div>
        </div>
        <div class="sc-grid">
          <div class="sc-field"><label>Title / Escrow Fee ($)</label><input type="number" id="sc-title" value="1800" min="0" step="100"><div class="hint">Owner title policy + settlement/escrow fee</div></div>
          <div class="sc-field"><label>Repairs / Home Warranty ($)</label><input type="number" id="sc-repairs" value="0" min="0" step="100"></div>
        </div>
        <button class="sc-btn" onclick="calcSC()">&#128176; Calculate Net Proceeds</button>
        <div class="sc-result" id="sc-result" style="display:none;">
          <div class="sc-result-primary">
            <span class="val" id="sc-net">$0</span>
            <span class="lbl">Estimated Net Proceeds (Cash at Closing)</span>
          </div>
          <div style="text-align:center;font-size:.83rem;color:#64748b;margin-bottom:.85rem;" id="sc-pct-line"></div>
          <div class="sc-stat-grid">
            <div class="sc-stat"><span class="sv" id="sc-comm-total">$0</span><span class="sl">Total Commissions</span></div>
            <div class="sc-stat"><span class="sv" id="sc-tax-total">$0</span><span class="sl">Transfer Tax</span></div>
            <div class="sc-stat"><span class="sv" id="sc-other-total">$0</span><span class="sl">Other Seller Costs</span></div>
          </div>
          <div style="background:#fff;border:1px solid #c4b5fd;border-radius:8px;padding:.75rem 1rem;">
            <div class="sc-line"><span class="ll">Sale Price</span><span class="lv" id="sl-price" style="color:#059669;">&#8212;</span></div>
            <div class="sc-line"><span class="ll">Listing Agent Commission</span><span class="lv" id="sl-list" style="color:#dc2626;">&#8212;</span></div>
            <div class="sc-line"><span class="ll">Buyer Agent Compensation</span><span class="lv" id="sl-buy" style="color:#dc2626;">&#8212;</span></div>
            <div class="sc-line"><span class="ll">Transfer Tax</span><span class="lv" id="sl-tax" style="color:#dc2626;">&#8212;</span></div>
            <div class="sc-line"><span class="ll">Title / Escrow Fee</span><span class="lv" id="sl-title" style="color:#dc2626;">&#8212;</span></div>
            <div class="sc-line"><span class="ll">Seller Concessions</span><span class="lv" id="sl-conc" style="color:#dc2626;">&#8212;</span></div>
            <div class="sc-line"><span class="ll">Repairs / Warranty</span><span class="lv" id="sl-rep" style="color:#dc2626;">&#8212;</span></div>
            <div class="sc-line"><span class="ll">Mortgage Payoff</span><span class="lv" id="sl-payoff" style="color:#dc2626;">&#8212;</span></div>
            <div class="sc-line"><span class="ll" style="font-weight:700;color:#0f172a;">Net Proceeds</span><span class="lv" id="sl-net">&#8212;</span></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Info Panels -->
    <div>
      <div class="sc-section" style="margin-bottom:1.25rem;">
        <h2>State Transfer Tax Rates (<?php echo $currentYear;?>)</h2>
        <table class="sc-table">
          <thead><tr><th>State</th><th>Rate</th><th>On $400k</th><th>Paid By</th></tr></thead>
          <tbody>
            <tr><td><strong>Texas</strong></td><td class="hl">$0</td><td class="hl">$0</td><td>N/A</td></tr>
            <tr><td><strong>Florida</strong></td><td>$0.70/$100</td><td>$2,800</td><td>Seller (most)</td></tr>
            <tr><td><strong>California (county)</strong></td><td>$1.10/$1,000</td><td>$440</td><td>Seller</td></tr>
            <tr><td><strong>LA City extra</strong></td><td>+$4.50/$1,000</td><td>+$1,800</td><td>Seller</td></tr>
            <tr><td><strong>New York State</strong></td><td>$4/$1,000</td><td>$1,600</td><td>Seller</td></tr>
            <tr><td><strong>Maryland</strong></td><td>$7/$1,000</td><td>$2,800</td><td>Split</td></tr>
            <tr><td><strong>Pennsylvania</strong></td><td>2% of price</td><td>$8,000</td><td>Split 50/50</td></tr>
            <tr><td><strong>Delaware</strong></td><td>4% of price</td><td>$16,000</td><td>Split 50/50</td></tr>
          </tbody>
        </table>
        <p style="font-size:.82rem;color:#94a3b8;margin:0;">County, city, and local surtaxes may apply on top of state rate.</p>
      </div>
      <div class="sc-section">
        <h2>2024 NAR Settlement: What Changed</h2>
        <p>Since August 2024, sellers are <strong>no longer required</strong> to offer buyer agent compensation through the MLS. Key changes:</p>
        <ul style="color:#475569;padding-left:1.4rem;line-height:1.8;font-size:.95rem;">
          <li>Buyers must sign written representation agreement before touring</li>
          <li>Seller commissions are fully negotiable &mdash; no standard rate</li>
          <li>Many sellers still offer 2%&ndash;3% buyer comp to maximize buyer pool</li>
          <li>Flat-fee listing services have become more competitive</li>
        </ul>
        <div class="sc-info">&#128161; <strong>Strategy:</strong> Offering a competitive buyer agent commission (2%&ndash;3%) can expand your buyer pool significantly. In slower markets, this investment often returns more than it costs via higher offers and faster sales.</div>
      </div>
    </div>
  </div>

  <!-- Content: 7 Strategies -->
  <div class="sc-section">
    <h2>7 Proven Ways to Maximize Your Net Proceeds</h2>

    <h3>1. Negotiate Your Listing Commission</h3>
    <p>The listing agent commission is typically your largest negotiable cost. Post-NAR settlement, there is no standard rate. Interview 2&ndash;3 agents and ask each to justify their commission. A 1% reduction on a $400,000 home saves $4,000 at closing.</p>

    <h3>2. Price Strategically to Avoid Reductions</h3>
    <p>Homes requiring price reductions lose an average of 2%&ndash;4% more than properly priced homes. Work with your agent to analyze recent comparable sales and price within 2%&ndash;3% of fair market value. Every $10,000 in unnecessary price reductions costs you $300&ndash;$600 per day of carrying costs plus the reduced proceeds.</p>

    <h3>3. Make Only Strategic Pre-Sale Repairs</h3>
    <p>Focus on inspection-flagged items (roof, HVAC, plumbing) that buyers will use to renegotiate. Avoid major cosmetic renovations where you rarely recover the cost. A $20,000 kitchen remodel typically returns only 50%&ndash;70% ROI at resale.</p>

    <h3>4. Offer a Home Warranty Instead of Large Repair Credits</h3>
    <p>A 1-year home warranty ($400&ndash;$700) is far cheaper than a $3,000&ndash;$5,000 repair credit. It protects the buyer from post-closing surprises while capping your out-of-pocket liability.</p>

    <h3>5. Review Your Mortgage Payoff Carefully</h3>
    <p>Request a 30-day payoff quote from your lender, not just your current balance. Payoff includes accrued interest and sometimes prepayment fees. If you have a prepayment penalty clause, calculate whether it is cheaper to hold longer or pay the penalty.</p>

    <h3>6. Understand the Section 121 Capital Gains Exclusion</h3>
    <p>Single sellers can exclude up to $250,000 in capital gains; married couples up to $500,000 &mdash; provided you have lived in the home as a primary residence for 2 of the last 5 years. You can add qualifying improvement costs to your cost basis, reducing taxable gain. Consult a CPA before listing.</p>

    <h3>7. Close at Month-End to Minimize Buyer Carrying Costs</h3>
    <p>Closing at the end of the month minimizes prepaid interest owed by the buyer, improving their cash-to-close and incentivizing higher offers. Spring closings (March&ndash;June) historically produce 5%&ndash;8% more buyer traffic in most US markets.</p>
  </div>

  <!-- FAQ -->
  <div class="sc-section" id="faq">
    <h2>Frequently Asked Questions</h2>
    <div class="sc-faq-item"><div class="sc-faq-q" onclick="this.parentElement.classList.toggle('open')">How much does it cost to sell a house?</div><div class="sc-faq-a">Total seller closing costs typically range from 7% to 10% of the sale price when including agent commissions (5&ndash;6%), transfer taxes (0&ndash;2.5%), and title/escrow fees (0.5&ndash;1%). On a $400,000 home, expect $28,000&ndash;$40,000 in total seller costs before mortgage payoff.</div></div>
    <div class="sc-faq-item"><div class="sc-faq-q" onclick="this.parentElement.classList.toggle('open')">What seller closing costs are negotiable?</div><div class="sc-faq-a">Agent commissions are fully negotiable. Following the 2024 NAR settlement, sellers are no longer required to offer a buyer agent commission through the MLS. Title insurance and escrow fees are also negotiable. Transfer taxes and recording fees are set by state/county law.</div></div>
    <div class="sc-faq-item"><div class="sc-faq-q" onclick="this.parentElement.classList.toggle('open')">Do I pay capital gains tax on my home sale?</div><div class="sc-faq-a">The IRS Section 121 exclusion allows single filers to exclude up to $250,000 in home sale gains, and married couples up to $500,000, provided you owned and lived in the home as your primary residence for at least 2 of the last 5 years. Consult a tax professional for your specific situation.</div></div>
    <div class="sc-faq-item"><div class="sc-faq-q" onclick="this.parentElement.classList.toggle('open')">What is the 2024 NAR commission settlement?</div><div class="sc-faq-a">Since August 2024, sellers are no longer required to offer a buyer agent commission through the MLS. Buyers now negotiate agent compensation separately via a buyer representation agreement. Commission rates are now fully negotiable.</div></div>
    <div class="sc-faq-item"><div class="sc-faq-q" onclick="this.parentElement.classList.toggle('open')">How long does it take to receive net proceeds after closing?</div><div class="sc-faq-a">In most states, proceeds are wired to your bank account within 1&ndash;3 business days of closing. Some states require a dry closing where funds are held 24&ndash;72 hours after signing before disbursing.</div></div>
  </div>

  <!-- Related Calculators -->
  <div class="sc-section">
    <h2>Related Real Estate Calculators</h2>
    <div class="sc-related">
      <a href="/real-estate/closing-cost-calculator" class="sc-rel">&#129534; Buyer Closing Costs</a>
      <a href="/real-estate/mortgage-calculator" class="sc-rel">&#127968; Mortgage Calculator</a>
      <a href="/real-estate/closing-cost-calculator-california" class="sc-rel">&#127796; CA Closing Costs</a>
      <a href="/real-estate/closing-cost-calculator-texas" class="sc-rel">&#11088; TX Closing Costs</a>
      <a href="/real-estate/closing-cost-calculator-florida" class="sc-rel">&#9728; FL Closing Costs</a>
      <a href="/real-estate/closing-cost-calculator-ohio" class="sc-rel">&#127807; OH Closing Costs</a>
    </div>
  </div>
</div>
</main>

<script>
function fmt(n){return '$'+Math.round(n).toLocaleString();}
function calcSC(){
  var price    = parseFloat(document.getElementById('sc-price').value)||0;
  var taxRate  = parseFloat(document.getElementById('sc-state').value)||0;
  var listPct  = parseFloat(document.getElementById('sc-list-comm').value)||0;
  var buyPct   = parseFloat(document.getElementById('sc-buy-comm').value)||0;
  var payoff   = parseFloat(document.getElementById('sc-payoff').value)||0;
  var conc     = parseFloat(document.getElementById('sc-concessions').value)||0;
  var title    = parseFloat(document.getElementById('sc-title').value)||0;
  var repairs  = parseFloat(document.getElementById('sc-repairs').value)||0;

  var listComm  = price * listPct / 100;
  var buyComm   = price * buyPct  / 100;
  var transTax  = price * taxRate;
  var totalComm = listComm + buyComm;
  var otherCosts = title + conc + repairs + transTax;
  var net = price - totalComm - transTax - title - conc - repairs - payoff;

  document.getElementById('sc-comm-total').textContent = fmt(totalComm);
  document.getElementById('sc-tax-total').textContent  = fmt(transTax);
  document.getElementById('sc-other-total').textContent= fmt(otherCosts);
  document.getElementById('sc-net').textContent        = fmt(net);
  document.getElementById('sc-pct-line').innerHTML     = 'Net proceeds = <strong>'+(net/price*100).toFixed(1)+'%</strong> of sale price';

  document.getElementById('sl-price').textContent  = fmt(price);
  document.getElementById('sl-list').textContent   = '-'+fmt(listComm);
  document.getElementById('sl-buy').textContent    = '-'+fmt(buyComm);
  document.getElementById('sl-tax').textContent    = '-'+fmt(transTax);
  document.getElementById('sl-title').textContent  = '-'+fmt(title);
  document.getElementById('sl-conc').textContent   = conc>0 ? '-'+fmt(conc) : '$0';
  document.getElementById('sl-rep').textContent    = repairs>0 ? '-'+fmt(repairs) : '$0';
  document.getElementById('sl-payoff').textContent = '-'+fmt(payoff);
  document.getElementById('sl-net').textContent    = fmt(net);
  document.getElementById('sl-net').style.color    = net >= 0 ? '#059669' : '#dc2626';

  document.getElementById('sc-result').style.display = 'block';
}
</script>

<?php require_once '../includes/footer.php'; ?>
