<?php
$currentYear = date('Y');
$pageTitle       = "New Jersey Closing Cost Calculator ($currentYear) | NJ Realty Transfer Fee & Mansion Tax";
$metaDescription = "Free New Jersey closing cost calculator $currentYear. Calculate NJ Realty Transfer Fee (RTF) rate tiers, 1% NJ Mansion Tax on $1M+ homes, title rates, and cash to close.";
$metaKeywords    = 'new jersey closing cost calculator, nj closing costs, nj realty transfer fee, rtf calculator nj, nj mansion tax, new jersey buyer closing costs, seller closing costs nj';
$schemaData = json_decode(<<<'EOD'
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "HowTo",
      "name": "How to Calculate New Jersey Real Estate Closing Costs",
      "step": [
        {
          "@type": "HowToStep",
          "name": "Enter property sales price",
          "text": "Input the negotiated sale price for the New Jersey residential property."
        },
        {
          "@type": "HowToStep",
          "name": "Select transaction role (Buyer or Seller)",
          "text": "Specify whether you are calculating Buyer closing costs or Seller net deductions."
        },
        {
          "@type": "HowToStep",
          "name": "Configure property type & special exemptions",
          "text": "Select Standard Residential, Senior / Disabled Citizen, or New Construction to determine eligible Realty Transfer Fee rates."
        },
        {
          "@type": "HowToStep",
          "name": "Input mortgage financing and down payment",
          "text": "Enter loan amount and down payment to calculate NJ title insurance premiums, attorney fees, and escrow prepaids."
        },
        {
          "@type": "HowToStep",
          "name": "Review itemized closing statement",
          "text": "Analyze the Realty Transfer Fee, NJ Mansion Tax, title charges, recording fees, attorney fees, and total cash to close."
        }
      ]
    },
    {
      "@type": "WebApplication",
      "@id": "https://americacalculator.com/real-estate/closing-cost-calculator-new-jersey#app",
      "name": "New Jersey Closing Cost Calculator",
      "url": "https://americacalculator.com/real-estate/closing-cost-calculator-new-jersey",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "All",
      "offer": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "description": "Calculate New Jersey (NJ) real estate closing costs, Realty Transfer Fee (RTF) sliding scale, NJ Mansion Tax, and settlement fees."
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://americacalculator.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Real Estate Calculators",
          "item": "https://americacalculator.com/real-estate/"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Closing Cost Calculator",
          "item": "https://americacalculator.com/real-estate/closing-cost-calculator"
        },
        {
          "@type": "ListItem",
          "position": 4,
          "name": "New Jersey Closing Costs",
          "item": "https://americacalculator.com/real-estate/closing-cost-calculator-new-jersey"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://americacalculator.com/real-estate/closing-cost-calculator-new-jersey#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much are typical closing costs in New Jersey?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Buyer closing costs in New Jersey typically range from 2.5% to 4.5% of the purchase price when financing (1.5% to 2.5% for all-cash purchases). If the home price exceeds $1,000,000, buyers must also pay the 1.00% New Jersey Mansion Tax. Seller closing costs in NJ typically range from 7.0% to 9.5%, driven by real estate broker commissions (4%-6%) and the statutory New Jersey Realty Transfer Fee (RTF)."
          }
        },
        {
          "@type": "Question",
          "name": "What is the New Jersey Realty Transfer Fee (RTF) and who pays it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The New Jersey Realty Transfer Fee (RTF) is a statutory transfer tax imposed on the recording of deeds for the sale of real property. By New Jersey law, the standard RTF is paid entirely by the seller at settlement. The rate follows a progressive sliding scale ranging from $2.00 to $6.05 per $500 of consideration for properties exceeding $350,000."
          }
        },
        {
          "@type": "Question",
          "name": "What is the New Jersey Mansion Tax and who pays it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The New Jersey Mansion Tax (officially the 1% Gross Consideration Fee) is a 1.00% tax imposed on all residential property purchases where the sales price exceeds $1,000,000. Unlike the standard Realty Transfer Fee, the 1% Mansion Tax is paid by the buyer at closing. On a $1,200,000 home, the buyer owes a flat $12,000 Mansion Tax."
          }
        },
        {
          "@type": "Question",
          "name": "Is a real estate attorney required for closing in New Jersey?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "While not strictly required by state statute, hiring a licensed real estate attorney is universal standard practice in New Jersey (especially in North and Central Jersey). New Jersey purchase contracts include a mandatory 3-Day Attorney Review Period during which either party's attorney can disapprove or modify contract terms. Legal fees typically range from $1,200 to $2,500."
          }
        },
        {
          "@type": "Question",
          "name": "What is the NJ Non-Resident Exit Tax on home sales?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The New Jersey Exit Tax is an estimated gross income tax withholding required when a non-resident seller (or resident moving out of NJ) sells New Jersey real estate. The closing agent must withhold either 8.97% of the net capital gain or a minimum of 2.00% of the total gross sales consideration, whichever is higher, remitted directly to the NJ Division of Taxation."
          }
        },
        {
          "@type": "Question",
          "name": "How is title insurance calculated in New Jersey?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "New Jersey title insurance rates are filed and approved by the NJ Department of Banking and Insurance through the New Jersey Land Title Insurance Rating Bureau (NJLTIRB). Rates average approximately $5.25 to $5.75 per $1,000 of purchase price up to $100,000, and $4.00 to $4.50 per $1,000 for amounts between $100,001 and $500,000."
          }
        },
        {
          "@type": "Question",
          "name": "Are there Realty Transfer Fee discounts for seniors in New Jersey?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. New Jersey provides a partial RTF exemption for senior citizens aged 62 or older, blind individuals, and permanently disabled homeowners selling their primary residence, reducing the transfer fee by approximately 40% to 60% compared to the standard rate schedule."
          }
        },
        {
          "@type": "Question",
          "name": "How much are closing costs on a $500,000 New Jersey home?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "On a $500,000 NJ home with 20% down ($400,000 mortgage): Buyer closing costs total approximately $14,200 - $16,500 (2.8% - 3.3%). This includes Title Insurance (~$2,650), Attorney Fee ($1,800), Lender Origination & Appraisal (~$2,600), Survey ($750), Recording ($250), and Escrow Prepaids (~$7,000 for taxes/insurance)."
          }
        }
      ]
    }
  ]
}
EOD
, true);
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f8fafc;}
.nj-wrap{max-width:1080px;margin:0 auto;padding:2rem 1.25rem 5rem;}
.nj-bc{font-size:.82rem;color:#94a3b8;margin-bottom:.75rem;}.nj-bc a{color:#64748b;text-decoration:none;}
.nj-hero h1{font-size:1.95rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.nj-hero p{font-size:.98rem;color:#64748b;line-height:1.65;margin:0 0 1.5rem;border-left:3px solid #0891b2;padding-left:.9rem;}
.nj-layout{display:grid;grid-template-columns:1.15fr 1fr;gap:1.75rem;margin-bottom:2rem;}
.nj-card{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden;}
.nj-card-head{background:#0e7490;color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;}
.nj-body{padding:1.5rem;}
.nj-field{margin-bottom:1rem;}
.nj-field label{display:block;font-size:.85rem;font-weight:600;color:#1e293b;margin-bottom:.35rem;}
.nj-field input,.nj-field select{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.94rem;color:#0f172a;outline:none;background:#fff;transition:border-color .2s;box-sizing:border-box;}
.nj-field input:focus,.nj-field select:focus{border-color:#0891b2;}
.nj-grid{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.nj-results{background:#0f172a;color:#fff;border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;justify-content:space-between;box-shadow:0 4px 15px rgba(15,23,42,.2);}
.nj-hero-box{background:rgba(14,116,144,.3);border:1px solid rgba(6,182,212,.4);border-radius:10px;padding:1.25rem;text-align:center;margin-bottom:1.25rem;}
.nj-hero-box .amt{font-size:2.2rem;font-weight:800;color:#67e8f9;}
.nj-row{display:flex;justify-content:space-between;padding:.5rem 0;border-bottom:1px solid rgba(255,255,255,.1);font-size:.9rem;}
.nj-row:last-child{border-bottom:none;}
.nj-row span:first-child{color:#cbd5e1;}
.nj-row span:last-child{font-weight:700;color:#ffffff;}
.nj-guide{background:#fff;border-radius:12px;border:1px solid #e2e8f0;padding:2.25rem;margin-top:2rem;box-shadow:0 2px 12px rgba(0,0,0,.04);}
.nj-guide h2{font-size:1.45rem;color:#0f172a;margin:2rem 0 .85rem;border-bottom:2px solid #f1f5f9;padding-bottom:.5rem;}
.nj-guide h3{font-size:1.15rem;color:#1e293b;margin:1.4rem 0 .5rem;}
.nj-guide p{font-size:1rem;color:#475569;line-height:1.75;margin-bottom:1.2rem;}
.nj-table{width:100%;border-collapse:collapse;margin:1.25rem 0 1.75rem;}
.nj-table th{background:#1e293b;color:#fff;text-align:left;padding:.85rem;font-size:.85rem;border-bottom:2px solid #0f172a;}
.nj-table td{padding:.85rem;border-bottom:1px solid #e2e8f0;font-size:.9rem;color:#334155;}
.nj-table tr:nth-child(even) td{background:#f8fafc;}
.nj-callout{background:#ecfeff;border-left:4px solid #0891b2;padding:1.25rem 1.5rem;border-radius:0 8px 8px 0;margin:1.5rem 0;}
.faq-box{background:#f8fafc;border:1px solid #e2e8f0;border-radius:8px;padding:1.1rem 1.3rem;margin-bottom:1rem;}
.faq-box h4{margin:0 0 .4rem;color:#0f172a;font-size:1.02rem;}
.faq-box p{margin:0;color:#475569;font-size:.92rem;line-height:1.6;}
@media(max-width:820px){.nj-layout{grid-template-columns:1fr;}}
</style>

<div class="nj-wrap">
  <div class="nj-bc"><a href="/">Home</a> / <a href="/real-estate/">Real Estate Calculators</a> / <a href="/real-estate/closing-cost-calculator">Closing Costs</a> / <span>New Jersey Closing Cost Calculator</span></div>
  
  <div class="nj-hero">
    <h1>New Jersey Closing Cost Calculator (<?php echo $currentYear; ?>)</h1>
    <p>Calculate New Jersey (NJ) real estate closing costs. Model the statutory NJ Realty Transfer Fee (RTF) sliding scale, 1.00% NJ Mansion Tax ($1M+ purchases), title insurance, attorney fees, and buyer cash to close.</p>
  </div>

  <div class="nj-layout">
    <div class="nj-card">
      <div class="nj-card-head">Transaction &amp; Property Settings</div>
      <div class="nj-body">
        <div class="nj-field">
          <label for="njPrice">Purchase Price ($)</label>
          <input type="number" id="njPrice" value="500000" step="10000">
        </div>
        
        <div class="nj-grid">
          <div class="nj-field">
            <label for="njRole">Calculating Costs For:</label>
            <select id="njRole">
              <option value="buyer" selected>Buyer Closing Costs</option>
              <option value="seller">Seller Closing Costs</option>
            </select>
          </div>
          <div class="nj-field">
            <label for="njExemptType">Seller RTF Exemption Status</label>
            <select id="njExemptType">
              <option value="standard" selected>Standard Residential (No Exemption)</option>
              <option value="senior">Senior Citizen (62+) / Disabled</option>
              <option value="newconstruction">New Construction</option>
            </select>
          </div>
        </div>

        <div class="nj-grid">
          <div class="nj-field">
            <label for="njDownPct">Down Payment (%)</label>
            <input type="number" id="njDownPct" value="20" min="0" max="100" step="5">
          </div>
          <div class="nj-field">
            <label for="njAttorney">Attorney Fee ($)</label>
            <input type="number" id="njAttorney" value="1800" step="100">
          </div>
        </div>

        <div class="nj-grid">
          <div class="nj-field">
            <label for="njSurvey">Property Boundary Survey ($)</label>
            <input type="number" id="njSurvey" value="750" step="50">
          </div>
          <div class="nj-field">
            <label for="njAgentComm">Seller Realtor Commission (%)</label>
            <input type="number" id="njAgentComm" value="5.0" step="0.5">
          </div>
        </div>
      </div>
    </div>

    <div class="nj-results">
      <div>
        <div class="nj-hero-box">
          <div style="font-size:.8rem;color:#67e8f9;text-transform:uppercase;font-weight:700;" id="resRoleLabel">Total Buyer Closing Costs</div>
          <div class="amt" id="resTotalCost">$15,450</div>
          <div style="font-size:.78rem;color:#cffafe;" id="resCostPct">3.09% of Purchase Price (excl. down payment)</div>
        </div>
        <div class="nj-row"><span>NJ Realty Transfer Fee (RTF):</span><span id="resRtf" style="color:#67e8f9;">$0 (Paid by Seller)</span></div>
        <div class="nj-row"><span>NJ Mansion Tax (1.00% on $1M+):</span><span id="resMansion" style="color:#fbbf24;">$0</span></div>
        <div class="nj-row"><span>NJ Title Insurance &amp; Endorsements:</span><span id="resTitle">$2,650</span></div>
        <div class="nj-row"><span>Attorney &amp; Review Fee:</span><span id="resAttorney">$1,800</span></div>
        <div class="nj-row"><span>Survey, Recording &amp; Municipal Searches:</span><span id="resSurvey">$1,200</span></div>
        <div class="nj-row"><span>Lender Fees &amp; Escrow Prepaids:</span><span id="resLender">$9,800</span></div>
      </div>
      <div style="border-top:1px solid rgba(255,255,255,.15);padding-top:1rem;text-align:center;">
        <div style="font-size:.8rem;color:#cbd5e1;" id="resBottomLabel">Total Cash Required at Closing (Down + Costs):</div>
        <div style="font-size:1.45rem;font-weight:800;color:#38bdf8;" id="resBottomAmt">$115,450</div>
      </div>
    </div>
  </div>

  <div class="nj-guide">
    <h2>Overview of Real Estate Closing Costs in New Jersey (<?php echo $currentYear; ?>)</h2>
    <p>New Jersey real estate transactions involve specific legal traditions, statutory deed transfer fees, and escrow requirements. In New Jersey, closing costs are divided into two distinct categories: <strong>Buyer settlement expenses</strong> (lender origination, title insurance, attorney review, and property tax escrow) and <strong>Seller deductions</strong> (broker commissions and the state-mandated <strong>Realty Transfer Fee</strong>).</p>
    <p>For home buyers securing mortgage financing, closing costs typically total <strong>2.5% to 4.5% of the purchase price</strong> (excluding the cash down payment). In higher-end markets where home prices exceed $1,000,000 (such as Bergen, Morris, Essex, and Monmouth counties), buyers are also responsible for the statutory <strong>1.00% New Jersey Mansion Tax</strong>.</p>

    <div class="nj-callout">
      <h3 style="margin:0 0 .5rem;color:#0e7490;font-size:1.1rem;">⚖️ The Mandatory 3-Day Attorney Review Period</h3>
      <p style="margin:0;color:#155e75;font-size:.95rem;">Under the landmark New Jersey Supreme Court ruling (<em>State Bar Ass'n v. New Jersey Ass'n of Realtor Boards</em>), every standard residential sales contract prepared by a realtor is subject to a <strong>3-Business-Day Attorney Review Period</strong>. During this window, either party's attorney can modify, negotiate contract contingencies, or cancel the deal without penalty.</p>
    </div>

    <h2>New Jersey Realty Transfer Fee (RTF) Sliding Scale Tiers</h2>
    <p>The New Jersey Realty Transfer Fee is charged on every deed recorded in the state and is paid by the seller. The rate is calculated on a progressive tiered structure based on total consideration:</p>

    <table class="nj-table">
      <thead>
        <tr>
          <th>Purchase Price Tier</th>
          <th>Standard RTF (Per $500)</th>
          <th>Senior / Disabled (Per $500)</th>
          <th>Cumulative Tax on $500k Home</th>
        </tr>
      </thead>
      <tbody>
        <tr><td><strong>First $150,000</strong></td><td>$2.00 / $500</td><td>$0.50 / $500</td><td>$600</td></tr>
        <tr><td><strong>$150,001 to $200,000</strong></td><td>$3.35 / $500</td><td>$1.25 / $500</td><td>$335</td></tr>
        <tr><td><strong>$200,001 to $350,000</strong></td><td>$3.90 / $500</td><td>$1.40 / $500</td><td>$1,170</td></tr>
        <tr><td><strong>$350,001 to $550,000</strong></td><td>$5.30 / $500</td><td>$1.40 / $500</td><td>$1,590 (on $150k)</td></tr>
        <tr><td><strong>$550,001 to $850,000</strong></td><td>$5.85 / $500</td><td>$1.40 / $500</td><td>$5.85 / $500 tier</td></tr>
        <tr><td><strong>$850,001 to $1,000,000</strong></td><td>$6.05 / $500</td><td>$1.40 / $500</td><td>$6.05 / $500 tier</td></tr>
        <tr><td><strong>Over $1,000,000 (Mansion Tier)</strong></td><td>$6.05 / $500 + 1% Buyer Fee</td><td>$1.40 / $500</td><td>Seller pays RTF + Buyer pays 1%</td></tr>
      </tbody>
    </table>

    <h2>Itemized Buyer vs. Seller Closing Cost Allocation in New Jersey</h2>
    <table class="nj-table">
      <thead>
        <tr>
          <th>Closing Cost Item</th>
          <th>Buyer Paid</th>
          <th>Seller Paid</th>
          <th>Typical Cost Range</th>
        </tr>
      </thead>
      <tbody>
        <tr><td><strong>Realty Transfer Fee (RTF)</strong></td><td>No</td><td>Yes</td><td>$3,695 on $500k; $8,600 on $1M</td></tr>
        <tr><td><strong>NJ Mansion Tax (1.00% on $1M+)</strong></td><td>Yes</td><td>No</td><td>1.00% flat on total price over $1M</td></tr>
        <tr><td><strong>Real Estate Attorney Fee</strong></td><td>Yes ($1,400 - $2,500)</td><td>Yes ($1,200 - $2,000)</td><td>Independent representation for both</td></tr>
        <tr><td><strong>Title Insurance (NJLTIRB)</strong></td><td>Yes</td><td>No</td><td>Promulgated rate (~$2,650 on $500k)</td></tr>
        <tr><td><strong>Boundary Survey &amp; Flood Cert</strong></td><td>Yes</td><td>No</td><td>$650 - $950</td></tr>
        <tr><td><strong>Broker Commission</strong></td><td>No</td><td>Yes</td><td>4.5% to 6.0% of sales price</td></tr>
        <tr><td><strong>Property Tax Escrow Prepaids</strong></td><td>Yes</td><td>No</td><td>3 to 6 months property tax reserves</td></tr>
      </tbody>
    </table>

    <h2>The 3-Day Attorney Review Process: Why NJ Closings Are Unique</h2>
    <p>In New Jersey, standard residential real estate purchase contracts prepared by real estate agents include a mandatory <strong>Three-Day Attorney Review clause</strong>:</p>
    <ul>
      <li><strong>Initial Contract Execution:</strong> Once both buyer and seller sign the contract, the three-day business clock begins (excluding weekends and legal holidays).</li>
      <li><strong>Attorney Disapproval or Amendment:</strong> Either party's attorney can disapprove the contract or deliver an Attorney Review Addendum modifying terms, inspection windows, closing dates, or seller concessions.</li>
      <li><strong>Contract Finalization:</strong> The deal is not legally binding until both attorneys reach an agreement and sign off on all rider provisions.</li>
    </ul>

    <h2>Property Tax Prorations &amp; Escrow Holdbacks at NJ Closings</h2>
    <p>Because New Jersey has the highest effective property tax rates in the nation (averaging <strong>2.49%</strong> statewide), tax prorations represent the largest single cash line item at settlement:</p>
    <ul>
      <li><strong>Municipal Tax Quarter Alignment:</strong> NJ property taxes are due quarterly on February 1, May 1, August 1, and November 1. If the seller has prepaid taxes beyond the closing date, the buyer reimburses the seller day-for-day at closing.</li>
      <li><strong>Lender Escrow Reserves:</strong> Mortgage lenders typically require 3 to 5 months of property tax reserves deposited into escrow upfront, which can equal $3,500 to $8,000 in upfront buyer closing capital.</li>
    </ul>

    <h2>Frequently Asked Questions (FAQ)</h2>
    <div class="faq-box">
      <h4>How much are typical closing costs in New Jersey?</h4>
      <p>Buyer closing costs in NJ range from 2.5% to 4.5% when financing. Buyers purchasing over $1,000,000 also pay the 1.00% NJ Mansion Tax. Seller closing costs total 7% to 9.5%, including broker commissions and the state Realty Transfer Fee.</p>
    </div>
    <div class="faq-box">
      <h4>What is the New Jersey Realty Transfer Fee (RTF) and who pays it?</h4>
      <p>The NJ Realty Transfer Fee is a progressive state deed tax paid entirely by the seller. On a $500,000 home, the seller owes approximately $3,695 in RTF fees.</p>
    </div>
    <div class="faq-box">
      <h4>What is the New Jersey Mansion Tax and who pays it?</h4>
      <p>The NJ Mansion Tax is a 1.00% fee imposed on residential purchases exceeding $1,000,000, paid entirely by the buyer at closing (e.g., $12,000 on a $1.2M home).</p>
    </div>
    <div class="faq-box">
      <h4>Is a real estate attorney required for closing in New Jersey?</h4>
      <p>While not legally mandatory by statute, hiring an attorney is standard practice due to the mandatory 3-Day Attorney Review Period. Attorney fees range from $1,200 to $2,500.</p>
    </div>
    <div class="faq-box">
      <h4>What is the NJ Non-Resident Exit Tax on home sales?</h4>
      <p>The Exit Tax is an estimated gross income tax withholding required when a non-resident sells NJ real estate, requiring the title company to withhold 8.97% of net capital gain or 2% of gross consideration.</p>
    </div>
    <div class="faq-box">
      <h4>How is title insurance calculated in New Jersey?</h4>
      <p>Title insurance rates are filed with the NJ Department of Banking and Insurance through NJLTIRB. Rates average ~$5.25-$5.75/$1k up to $100k, and $4.00-$4.50/$1k between $100k and $500k.</p>
    </div>
    <div class="faq-box">
      <h4>Are there Realty Transfer Fee discounts for seniors in New Jersey?</h4>
      <p>Yes. Seniors aged 62+, blind individuals, and disabled homeowners receive a partial exemption that reduces RTF transfer fees by roughly 40% to 60%.</p>
    </div>
    <div class="faq-box">
      <h4>How much are closing costs on a $500,000 New Jersey home?</h4>
      <p>On a $500,000 home with 20% down ($400k loan): Buyer costs total ~$15,450 (3.09%), including Title Insurance ($2,650), Attorney ($1,800), Lender fees ($2,600), Survey/Recording ($1,200), and Escrow prepaids ($7,200).</p>
    </div>

    <h2>Explore Related State Closing Cost &amp; Mortgage Tools</h2>
    <ul>
      <li><a href="/real-estate/closing-cost-calculator-new-york">New York Closing Cost Calculator</a> &mdash; Calculate NYC transfer taxes, Mansion Tax, and Mortgage Recording Tax.</li>
      <li><a href="/real-estate/closing-cost-calculator-pennsylvania">Pennsylvania Closing Cost Calculator</a> &mdash; Calculate PA 2% transfer tax and Philadelphia 4.278% rates.</li>
      <li><a href="/real-estate/property-tax-calculator">Property Tax Calculator</a> &mdash; Model New Jersey's 2.49% average property tax burden.</li>
      <li><a href="/real-estate/seller-closing-cost-calculator">Seller Closing Cost Calculator</a> &mdash; Estimate net seller proceeds after RTF and commissions.</li>
    </ul>
  </div>
</div>

<script>
function calculateNjCosts() {
  var price = parseFloat(document.getElementById('njPrice').value) || 0;
  var role = document.getElementById('njRole').value;
  var exempt = document.getElementById('njExemptType').value;
  var downPct = (parseFloat(document.getElementById('njDownPct').value) || 0) / 100;
  var attorney = parseFloat(document.getElementById('njAttorney').value) || 1800;
  var survey = parseFloat(document.getElementById('njSurvey').value) || 750;
  var commPct = (parseFloat(document.getElementById('njAgentComm').value) || 5.0) / 100;

  var downPayment = price * downPct;
  var loanAmount = Math.max(0, price - downPayment);

  // 1. NJ Mansion Tax (1.0% on $1M+ paid by Buyer)
  var mansionTax = 0;
  if (price > 1000000) {
    mansionTax = price * 0.010;
  }

  // 2. NJ Realty Transfer Fee (RTF) paid by Seller
  var rtf = 0;
  if (exempt === 'senior') {
    if (price <= 150000) rtf = (price / 500) * 0.50;
    else if (price <= 350000) rtf = (150000 / 500 * 0.50) + ((price - 150000) / 500 * 1.40);
    else rtf = (150000 / 500 * 0.50) + (200000 / 500 * 1.40) + ((price - 350000) / 500 * 1.40);
  } else {
    if (price <= 150000) {
      rtf = (price / 500) * 2.00;
    } else if (price <= 200000) {
      rtf = (150000 / 500 * 2.00) + ((price - 150000) / 500 * 3.35);
    } else if (price <= 350000) {
      rtf = (150000 / 500 * 2.00) + (50000 / 500 * 3.35) + ((price - 200000) / 500 * 3.90);
    } else if (price <= 550000) {
      rtf = (150000 / 500 * 2.00) + (50000 / 500 * 3.35) + (150000 / 500 * 3.90) + ((price - 350000) / 500 * 5.30);
    } else if (price <= 850000) {
      rtf = (150000 / 500 * 2.00) + (50000 / 500 * 3.35) + (150000 / 500 * 3.90) + (200000 / 500 * 5.30) + ((price - 550000) / 500 * 5.85);
    } else {
      rtf = (150000 / 500 * 2.00) + (50000 / 500 * 3.35) + (150000 / 500 * 3.90) + (200000 / 500 * 5.30) + (300000 / 500 * 5.85) + ((price - 850000) / 500 * 6.05);
    }
  }

  // 3. Title Insurance (NJLTIRB promulgated rates ~0.50% avg)
  var titleFee = Math.max(750, (price * 0.0052) + 150);

  // 4. Lender Origination & Escrow Prepaids
  var lenderOrig = loanAmount > 0 ? 1800 + 650 : 0;
  var escrowPrepaids = loanAmount > 0 ? (price * 0.0249 / 12 * 4) + 1500 : 600;

  var totalCost = 0;
  var bottomAmt = 0;

  if (role === 'buyer') {
    totalCost = mansionTax + titleFee + attorney + survey + 450 + lenderOrig + escrowPrepaids;
    bottomAmt = downPayment + totalCost;
    document.getElementById('resRoleLabel').textContent = 'Total Buyer Closing Costs';
    document.getElementById('resRtf').textContent = '$0 (Paid by Seller)';
    document.getElementById('resMansion').textContent = '$' + Math.round(mansionTax).toLocaleString();
    document.getElementById('resBottomLabel').textContent = 'Total Cash Required at Closing (Down + Costs):';
  } else {
    var brokerComm = price * commPct;
    totalCost = rtf + brokerComm + attorney + 650;
    bottomAmt = price - totalCost;
    document.getElementById('resRoleLabel').textContent = 'Total Seller Deductions & Costs';
    document.getElementById('resRtf').textContent = '$' + Math.round(rtf).toLocaleString();
    document.getElementById('resMansion').textContent = '$0 (Paid by Buyer)';
    document.getElementById('resBottomLabel').textContent = 'Estimated Net Proceeds to Seller (Before Loan Payoff):';
  }

  var costPct = price > 0 ? (totalCost / price) * 100 : 0;

  document.getElementById('resTotalCost').textContent = '$' + Math.round(totalCost).toLocaleString();
  document.getElementById('resCostPct').textContent = costPct.toFixed(2) + '% of Purchase Price';
  document.getElementById('resTitle').textContent = '$' + Math.round(titleFee).toLocaleString();
  document.getElementById('resAttorney').textContent = '$' + Math.round(attorney).toLocaleString();
  document.getElementById('resSurvey').textContent = '$' + Math.round(survey + 450).toLocaleString();
  document.getElementById('resLender').textContent = '$' + Math.round(lenderOrig + escrowPrepaids).toLocaleString();
  document.getElementById('resBottomAmt').textContent = '$' + Math.round(bottomAmt).toLocaleString();
}

document.querySelectorAll('#njPrice, #njRole, #njExemptType, #njDownPct, #njAttorney, #njSurvey, #njAgentComm').forEach(function(el) {
  el.addEventListener('input', calculateNjCosts);
  el.addEventListener('change', calculateNjCosts);
});
calculateNjCosts();
</script>

<?php require_once '../includes/footer.php'; ?>
