<?php
$currentYear = date('Y');
$pageTitle       = "Pennsylvania Closing Cost Calculator ($currentYear) | PA & Philly Transfer Taxes";
$metaDescription = "Free Pennsylvania closing cost calculator $currentYear. Calculate PA Realty Transfer Tax (2% to 4.278% in Philadelphia), TIRBOP title insurance rates, and cash to close.";
$metaKeywords    = 'pennsylvania closing cost calculator, pa closing costs, philadelphia transfer tax, pa realty transfer tax, tirbop title insurance, pa buyer closing costs';
$schemaData = json_decode(<<<'EOD'
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "HowTo",
      "name": "How to Calculate Pennsylvania Real Estate Closing Costs",
      "step": [
        {
          "@type": "HowToStep",
          "name": "Enter home purchase price",
          "text": "Input the negotiated sale price for the Pennsylvania residential or commercial property."
        },
        {
          "@type": "HowToStep",
          "name": "Select municipality / county",
          "text": "Choose your municipality (Philadelphia at 4.278%, Pittsburgh at 3.0%, or Standard PA at 2.0%)."
        },
        {
          "@type": "HowToStep",
          "name": "Select transfer tax split",
          "text": "Choose whether transfer taxes are split 50/50 between buyer and seller (standard PA custom) or paid 100% by one party."
        },
        {
          "@type": "HowToStep",
          "name": "Enter loan and down payment terms",
          "text": "Input your mortgage financing amount and down payment to calculate TIRBOP title insurance and lender escrow."
        },
        {
          "@type": "HowToStep",
          "name": "Review itemized closing breakdown",
          "text": "See transfer taxes, title insurance, recording fees, appraisal, and total estimated cash to close."
        }
      ]
    },
    {
      "@type": "WebApplication",
      "@id": "https://americacalculator.com/real-estate/closing-cost-calculator-pennsylvania#app",
      "name": "Pennsylvania Closing Cost Calculator",
      "url": "https://americacalculator.com/real-estate/closing-cost-calculator-pennsylvania",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "All",
      "offer": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "description": "Calculate Pennsylvania (PA) and Philadelphia real estate closing costs, Realty Transfer Taxes, TIRBOP title insurance, and cash to close."
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
          "name": "Pennsylvania Closing Costs",
          "item": "https://americacalculator.com/real-estate/closing-cost-calculator-pennsylvania"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://americacalculator.com/real-estate/closing-cost-calculator-pennsylvania#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much are typical closing costs in Pennsylvania?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Buyer closing costs in Pennsylvania typically range from 3.5% to 5.5% of the purchase price when financing (2.0% to 3.5% for cash purchases). In Philadelphia, closing costs are higher (4.5% to 6.5%) due to the city's 4.278% combined transfer tax. Sellers in PA typically pay 6.0% to 8.5%, including their half of the transfer tax and standard real estate agent commissions."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Pennsylvania Realty Transfer Tax and who pays it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Pennsylvania levies a mandatory state transfer tax of 1.00% of the property value, and local municipalities/school districts levy an additional local transfer tax (typically 1.00% across most PA counties, totaling 2.00%). By longstanding Pennsylvania custom, the 2.00% transfer tax is split equally between the buyer (1.00%) and seller (1.00%), though payment responsibility can be renegotiated in the sales agreement."
          }
        },
        {
          "@type": "Question",
          "name": "What is the Philadelphia Realty Transfer Tax rate in 2026?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Philadelphia has the highest transfer tax in Pennsylvania at 4.278% total (composed of 1.00% PA State Transfer Tax plus 3.278% City of Philadelphia Transfer Tax). When split 50/50, the buyer pays 2.139% ($8,556 on a $400,000 home) and the seller pays 2.139% at settlement."
          }
        },
        {
          "@type": "Question",
          "name": "How is title insurance calculated in Pennsylvania (TIRBOP)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Title insurance premiums in Pennsylvania are strictly promulgated by the Pennsylvania Insurance Department through the Title Insurance Rating Bureau of Pennsylvania (TIRBOP). All title companies must charge the identical statutory all-inclusive rate: approximately $5.75 per $1,000 for the first $100,000, $4.50 per $1,000 from $100,001 to $500,000, and $3.50 per $1,000 from $500,001 to $1,000,000."
          }
        },
        {
          "@type": "Question",
          "name": "What is the PA Title Reissue Rate and how do you qualify?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If the seller purchased an owner title insurance policy within the past 10 years, Pennsylvania title regulations grant the buyer a 10% to 20% discount off the standard title premium (the TIRBOP Reissue Rate). To qualify, the buyer or settlement agent must provide a copy of the seller's prior title policy before closing."
          }
        },
        {
          "@type": "Question",
          "name": "Is a real estate attorney required for closing in Pennsylvania?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No. Pennsylvania is a title state rather than an attorney state. Closings are conducted by licensed title insurance agents and settlement officers. However, hiring an attorney is recommended for complex commercial transactions, land contracts, or non-standard title defect remediation."
          }
        },
        {
          "@type": "Question",
          "name": "How are property taxes prorated at closing in Pennsylvania?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Pennsylvania property taxes are levied on three distinct fiscal calendars: County & Municipal taxes (calendar year: Jan 1 – Dec 31) and School District taxes (fiscal year: July 1 – June 30). At settlement, taxes are prorated daily based on whichever taxing period has been prepaid by the seller, with the buyer reimbursing the seller for the unused portion."
          }
        },
        {
          "@type": "Question",
          "name": "How much are closing costs on a $350,000 Pennsylvania home?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "On a $350,000 home in standard PA with 20% down ($280,000 mortgage): Buyer transfer tax (1.0% = $3,500), TIRBOP Title Insurance (~$2,025), Lender Origination & Appraisal (~$2,450), County Recording Fees (~$275), and Escrow Prepaids (~$3,800). Total buyer closing costs: approximately $12,050 (3.44% of purchase price before down payment)."
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
.pa-wrap{max-width:1080px;margin:0 auto;padding:2rem 1.25rem 5rem;}
.pa-bc{font-size:.82rem;color:#94a3b8;margin-bottom:.75rem;}.pa-bc a{color:#64748b;text-decoration:none;}
.pa-hero h1{font-size:1.95rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.pa-hero p{font-size:.98rem;color:#64748b;line-height:1.65;margin:0 0 1.5rem;border-left:3px solid #2563eb;padding-left:.9rem;}
.pa-layout{display:grid;grid-template-columns:1.15fr 1fr;gap:1.75rem;margin-bottom:2rem;}
.pa-card{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden;}
.pa-card-head{background:#1d4ed8;color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;}
.pa-body{padding:1.5rem;}
.pa-field{margin-bottom:1rem;}
.pa-field label{display:block;font-size:.85rem;font-weight:600;color:#1e293b;margin-bottom:.35rem;}
.pa-field input,.pa-field select{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.94rem;color:#0f172a;outline:none;background:#fff;transition:border-color .2s;box-sizing:border-box;}
.pa-field input:focus,.pa-field select:focus{border-color:#1d4ed8;}
.pa-grid{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.pa-results{background:#0f172a;color:#fff;border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;justify-content:space-between;box-shadow:0 4px 15px rgba(15,23,42,.2);}
.pa-hero-box{background:rgba(29,78,216,.3);border:1px solid rgba(59,130,246,.4);border-radius:10px;padding:1.25rem;text-align:center;margin-bottom:1.25rem;}
.pa-hero-box .amt{font-size:2.2rem;font-weight:800;color:#93c5fd;}
.pa-row{display:flex;justify-content:space-between;padding:.5rem 0;border-bottom:1px solid rgba(255,255,255,.1);font-size:.9rem;}
.pa-row:last-child{border-bottom:none;}
.pa-row span:first-child{color:#cbd5e1;}
.pa-row span:last-child{font-weight:700;color:#ffffff;}
.pa-guide{background:#fff;border-radius:12px;border:1px solid #e2e8f0;padding:2.25rem;margin-top:2rem;box-shadow:0 2px 12px rgba(0,0,0,.04);}
.pa-guide h2{font-size:1.45rem;color:#0f172a;margin:2rem 0 .85rem;border-bottom:2px solid #f1f5f9;padding-bottom:.5rem;}
.pa-guide h3{font-size:1.15rem;color:#1e293b;margin:1.4rem 0 .5rem;}
.pa-guide p{font-size:1rem;color:#475569;line-height:1.75;margin-bottom:1.2rem;}
.pa-table{width:100%;border-collapse:collapse;margin:1.25rem 0 1.75rem;}
.pa-table th{background:#1e293b;color:#fff;text-align:left;padding:.85rem;font-size:.85rem;border-bottom:2px solid #0f172a;}
.pa-table td{padding:.85rem;border-bottom:1px solid #e2e8f0;font-size:.9rem;color:#334155;}
.pa-table tr:nth-child(even) td{background:#f8fafc;}
.pa-callout{background:#eff6ff;border-left:4px solid #1d4ed8;padding:1.25rem 1.5rem;border-radius:0 8px 8px 0;margin:1.5rem 0;}
.faq-box{background:#f8fafc;border:1px solid #e2e8f0;border-radius:8px;padding:1.1rem 1.3rem;margin-bottom:1rem;}
.faq-box h4{margin:0 0 .4rem;color:#0f172a;font-size:1.02rem;}
.faq-box p{margin:0;color:#475569;font-size:.92rem;line-height:1.6;}
@media(max-width:820px){.pa-layout{grid-template-columns:1fr;}}
</style>

<div class="pa-wrap">
  <div class="pa-bc"><a href="/">Home</a> / <a href="/real-estate/">Real Estate Calculators</a> / <a href="/real-estate/closing-cost-calculator">Closing Costs</a> / <span>Pennsylvania Closing Cost Calculator</span></div>
  
  <div class="pa-hero">
    <h1>Pennsylvania Closing Cost Calculator (<?php echo $currentYear; ?>)</h1>
    <p>Calculate Pennsylvania (PA) and Philadelphia real estate closing costs. Model PA State &amp; Municipal Realty Transfer Taxes (2.0% to 4.278%), TIRBOP promulgated title insurance rates, recording fees, and buyer cash to close.</p>
  </div>

  <div class="pa-layout">
    <div class="pa-card">
      <div class="pa-card-head">Property &amp; Municipality Settings</div>
      <div class="pa-body">
        <div class="pa-field">
          <label for="paPrice">Purchase Price ($)</label>
          <input type="number" id="paPrice" value="350000" step="5000">
        </div>
        
        <div class="pa-grid">
          <div class="pa-field">
            <label for="paLocation">Municipality / County</label>
            <select id="paLocation">
              <option value="standard" selected>Standard PA (2.0% Total Transfer Tax)</option>
              <option value="philly">Philadelphia (4.278% Total Transfer Tax)</option>
              <option value="pittsburgh">Pittsburgh / Allegheny (3.0% Total)</option>
              <option value="reading">Reading / Berks (3.0% Total)</option>
              <option value="upperdarby">Upper Darby / Delaware Co (3.0% Total)</option>
            </select>
          </div>
          <div class="pa-field">
            <label for="paSplit">Transfer Tax Split</label>
            <select id="paSplit">
              <option value="5050" selected>50/50 Split (Standard PA Custom)</option>
              <option value="buyer100">Buyer Pays 100%</option>
              <option value="seller100">Seller Pays 100%</option>
            </select>
          </div>
        </div>

        <div class="pa-grid">
          <div class="pa-field">
            <label for="paDownPct">Down Payment (%)</label>
            <input type="number" id="paDownPct" value="20" min="0" max="100" step="5">
          </div>
          <div class="pa-field">
            <label for="paReissue">Title Reissue Discount?</label>
            <select id="paReissue">
              <option value="no" selected>No (Full TIRBOP Rate)</option>
              <option value="yes">Yes (10% Prior Policy Discount)</option>
            </select>
          </div>
        </div>

        <div class="pa-grid">
          <div class="pa-field">
            <label for="paLoanType">Loan Type</label>
            <select id="paLoanType">
              <option value="conv" selected>Conventional Mortgage</option>
              <option value="fha">FHA Loan</option>
              <option value="va">VA Loan (No Origination Fee)</option>
              <option value="cash">All Cash (No Loan Fees)</option>
            </select>
          </div>
          <div class="pa-field">
            <label for="paRecording">County Recording &amp; Municipal Fees ($)</label>
            <input type="number" id="paRecording" value="325" step="25">
          </div>
        </div>
      </div>
    </div>

    <div class="pa-results">
      <div>
        <div class="pa-hero-box">
          <div style="font-size:.8rem;color:#93c5fd;text-transform:uppercase;font-weight:700;">Total Buyer Closing Costs</div>
          <div class="amt" id="resTotalCost">$12,050</div>
          <div style="font-size:.78rem;color:#bfdbfe;" id="resCostPct">3.44% of Purchase Price (excl. down payment)</div>
        </div>
        <div class="pa-row"><span>Buyer Realty Transfer Tax Share:</span><span id="resTransferTax" style="color:#93c5fd;">$3,500</span></div>
        <div class="pa-row"><span>TIRBOP Title Insurance Premium:</span><span id="resTitle">$2,025</span></div>
        <div class="pa-row"><span>Lender Origination &amp; Appraisal:</span><span id="resLender">$2,400</span></div>
        <div class="pa-row"><span>County Deed &amp; Mortgage Recording:</span><span id="resRecording">$325</span></div>
        <div class="pa-row"><span>Escrow Prepaids (Taxes &amp; Insurance):</span><span id="resEscrow">$3,800</span></div>
      </div>
      <div style="border-top:1px solid rgba(255,255,255,.15);padding-top:1rem;text-align:center;">
        <div style="font-size:.8rem;color:#cbd5e1;">Total Cash Required at Settlement:</div>
        <div style="font-size:1.45rem;font-weight:800;color:#38bdf8;" id="resCashToClose">$82,050</div>
      </div>
    </div>
  </div>

  <div class="pa-guide">
    <h2>Overview of Pennsylvania Real Estate Closing Costs (<?php echo $currentYear; ?>)</h2>
    <p>Real estate transactions in the Commonwealth of Pennsylvania feature one of the highest statutory transfer tax burdens in the nation. Across most Pennsylvania counties, the combined state and local <strong>Realty Transfer Tax equals 2.00%</strong> of the property's gross sales price. In home-rule municipalities such as <strong>Philadelphia (4.278%)</strong>, <strong>Pittsburgh (3.00%)</strong>, and <strong>Reading (3.00%)</strong>, local transfer taxes push transaction costs even higher.</p>
    <p>Fortunately, by longstanding Pennsylvania market custom and contract practice, <strong>transfer taxes are split 50/50 between the buyer and the seller</strong>. In a standard transaction, the buyer pays 1.00% and the seller pays 1.00% at the settlement table. Overall, buyers in Pennsylvania should budget <strong>3.5% to 5.5% of the purchase price</strong> in total closing costs when obtaining mortgage financing (excluding their down payment).</p>

    <div class="pa-callout">
      <h3 style="margin:0 0 .5rem;color:#1e3a8a;font-size:1.1rem;">🏛️ Pennsylvania TIRBOP Title Insurance Promulgation</h3>
      <p style="margin:0;color:#1d4ed8;font-size:.95rem;">Title insurance rates in Pennsylvania are strictly set by state law through the <strong>Title Insurance Rating Bureau of Pennsylvania (TIRBOP)</strong>. Unlike other states where title agencies compete on premium prices, all PA title insurers must charge the identical statutory rate schedule. Title companies compete exclusively on customer service, settlement accuracy, and closing turnaround times.</p>
    </div>

    <h2>Pennsylvania Realty Transfer Tax Rates by Municipality</h2>
    <p>The table below summarizes state, municipal, and school district transfer tax rates across key Pennsylvania regions and the resulting customary 50/50 cost split on a $350,000 home:</p>

    <table class="pa-table">
      <thead>
        <tr>
          <th>Municipality / County</th>
          <th>State Rate</th>
          <th>Local / School Rate</th>
          <th>Total Transfer Tax</th>
          <th>Buyer Share on $350k</th>
        </tr>
      </thead>
      <tbody>
        <tr><td><strong>Standard PA (Most Counties)</strong></td><td>1.00%</td><td>1.00%</td><td>2.000%</td><td>$3,500 (1.00%)</td></tr>
        <tr><td><strong>Philadelphia (City &amp; County)</strong></td><td>1.00%</td><td>3.278%</td><td>4.278%</td><td>$7,487 (2.139%)</td></tr>
        <tr><td><strong>Pittsburgh (Allegheny Co)</strong></td><td>1.00%</td><td>2.00%</td><td>3.000%</td><td>$5,250 (1.50%)</td></tr>
        <tr><td><strong>Reading (Berks Co)</strong></td><td>1.00%</td><td>2.00%</td><td>3.000%</td><td>$5,250 (1.50%)</td></tr>
        <tr><td><strong>Scranton (Lackawanna Co)</strong></td><td>1.00%</td><td>1.90%</td><td>2.900%</td><td>$5,075 (1.45%)</td></tr>
        <tr><td><strong>Upper Darby (Delaware Co)</strong></td><td>1.00%</td><td>2.00%</td><td>3.000%</td><td>$5,250 (1.50%)</td></tr>
        <tr><td><strong>Allentown (Lehigh Co)</strong></td><td>1.00%</td><td>1.00%</td><td>2.000%</td><td>$3,500 (1.00%)</td></tr>
      </tbody>
    </table>

    <h2>Pennsylvania TIRBOP Title Insurance Rate Schedule Explained</h2>
    <p>Under the statutory TIRBOP rate manual, the standard all-inclusive title insurance rate is calculated in tiered pricing brackets based on the purchase price:</p>
    <ul>
      <li><strong>Up to $100,000:</strong> $5.75 per $1,000 of coverage (e.g., $575 on the first $100k).</li>
      <li><strong>$100,001 to $500,000:</strong> $4.50 per $1,000 (e.g., $1,125 on the next $250k).</li>
      <li><strong>$500,001 to $1,000,000:</strong> $3.50 per $1,000 of coverage.</li>
      <li><strong>Over $1,000,000:</strong> $2.75 per $1,000 of coverage.</li>
      <li><strong>Reissue Discount Rate:</strong> If a prior title policy exists from the past 10 years, the buyer receives a <strong>10% statutory discount</strong> off the standard rate.</li>
    </ul>

    <h2>Property Tax Calendars &amp; Proration at PA Closings</h2>
    <p>Pennsylvania properties are taxed across three separate local jurisdictions with differing billing cycles:</p>
    <ul>
      <li><strong>County Taxes (Calendar Year):</strong> Due February–April (discount period), covering Jan 1 through Dec 31.</li>
      <li><strong>Municipal / Township Taxes (Calendar Year):</strong> Follows the same Jan 1 – Dec 31 calendar.</li>
      <li><strong>School District Taxes (Fiscal Year):</strong> Due July–August (discount period), covering July 1 through June 30 of the following year.</li>
      <li><strong>At Settlement:</strong> The title company calculates exact per-diem tax allocations. If the seller already paid the annual school tax in August and sells in October, the buyer reimburses the seller for the remaining 8 months of prepaid school taxes.</li>
    </ul>

    <h2>Frequently Asked Questions (FAQ)</h2>
    <div class="faq-box">
      <h4>How much are typical closing costs in Pennsylvania?</h4>
      <p>Buyer closing costs in Pennsylvania typically range from 3.5% to 5.5% of the purchase price when financing (2.0% to 3.5% for cash). In Philadelphia, closing costs are higher (4.5% to 6.5%) due to the city's 4.278% transfer tax.</p>
    </div>
    <div class="faq-box">
      <h4>What is the Pennsylvania Realty Transfer Tax and who pays it?</h4>
      <p>PA levies a 1.00% state transfer tax plus local municipal/school taxes (typically 1.00%, totaling 2.00%). By PA custom, this 2.00% transfer tax is split equally 50/50 between buyer (1.00%) and seller (1.00%).</p>
    </div>
    <div class="faq-box">
      <h4>What is the Philadelphia Realty Transfer Tax rate in 2026?</h4>
      <p>Philadelphia has the highest transfer tax in PA at 4.278% total (1.00% State + 3.278% City). When split 50/50, the buyer pays 2.139% ($8,556 on a $400,000 home) and the seller pays 2.139% at closing.</p>
    </div>
    <div class="faq-box">
      <h4>How is title insurance calculated in Pennsylvania (TIRBOP)?</h4>
      <p>Title insurance rates are strictly regulated by the Pennsylvania Insurance Department through TIRBOP. All PA title companies must charge the identical statutory rate: ~$5.75/$1k up to $100k, $4.50/$1k to $500k, and $3.50/$1k to $1M.</p>
    </div>
    <div class="faq-box">
      <h4>What is the PA Title Reissue Rate and how do you qualify?</h4>
      <p>If the seller purchased an owner title insurance policy within the past 10 years, the buyer qualifies for a 10% discount off the standard title premium by providing a copy of the seller's prior policy before closing.</p>
    </div>
    <div class="faq-box">
      <h4>Is a real estate attorney required for closing in Pennsylvania?</h4>
      <p>No, Pennsylvania is a title state where closings are conducted by licensed title insurance agents and settlement officers. Attorneys are optional for standard residential transactions.</p>
    </div>
    <div class="faq-box">
      <h4>How are property taxes prorated at closing in Pennsylvania?</h4>
      <p>County/municipal taxes follow a calendar year (Jan 1 – Dec 31) while school district taxes follow a fiscal year (July 1 – June 30). Taxes are prorated daily at closing, with the buyer reimbursing the seller for prepaid periods.</p>
    </div>
    <div class="faq-box">
      <h4>How much are closing costs on a $350,000 Pennsylvania home?</h4>
      <p>On a $350,000 home with 20% down ($280k mortgage): Buyer transfer tax ($3,500), Title insurance ($2,025), Lender origination & appraisal ($2,400), Recording fees ($325), and Escrow prepaids ($3,800). Total: ~$12,050 (3.44%).</p>
    </div>

    <h2>Explore Related State Closing Cost &amp; Financing Calculators</h2>
    <ul>
      <li><a href="/real-estate/closing-cost-calculator-new-york">New York Closing Cost Calculator</a> &mdash; Calculate NYC/NYS transfer taxes and Mansion Tax tiers.</li>
      <li><a href="/real-estate/closing-cost-calculator-ohio">Ohio Closing Cost Calculator</a> &mdash; Calculate 88-county conveyance fees and Ohio title costs.</li>
      <li><a href="/real-estate/closing-cost-calculator">National Closing Cost Calculator</a> &mdash; Estimate closing costs across all 50 states.</li>
      <li><a href="/real-estate/seller-closing-cost-calculator">Seller Closing Cost Calculator</a> &mdash; Calculate net seller proceeds after transfer taxes and commissions.</li>
    </ul>
  </div>
</div>

<script>
function calculatePaCosts() {
  var price = parseFloat(document.getElementById('paPrice').value) || 0;
  var loc = document.getElementById('paLocation').value;
  var split = document.getElementById('paSplit').value;
  var downPct = (parseFloat(document.getElementById('paDownPct').value) || 0) / 100;
  var reissue = document.getElementById('paReissue').value;
  var loanType = document.getElementById('paLoanType').value;
  var recording = parseFloat(document.getElementById('paRecording').value) || 325;

  var downPayment = price * downPct;
  var loanAmount = Math.max(0, price - downPayment);

  // 1. Transfer Tax Rates
  var totalRate = 0.020; // 2.0% standard
  if (loc === 'philly') totalRate = 0.04278;
  else if (loc === 'pittsburgh' || loc === 'reading' || loc === 'upperdarby') totalRate = 0.030;

  var totalTransfer = price * totalRate;
  var buyerTransfer = totalTransfer * 0.50;
  if (split === 'buyer100') buyerTransfer = totalTransfer;
  else if (split === 'seller100') buyerTransfer = 0;

  // 2. TIRBOP Title Insurance
  var titleBase = 0;
  if (price <= 100000) {
    titleBase = (price / 1000) * 5.75;
  } else if (price <= 500000) {
    titleBase = (100 * 5.75) + (((price - 100000) / 1000) * 4.50);
  } else if (price <= 1000000) {
    titleBase = (100 * 5.75) + (400 * 4.50) + (((price - 500000) / 1000) * 3.50);
  } else {
    titleBase = (100 * 5.75) + (400 * 4.50) + (500 * 3.50) + (((price - 1000000) / 1000) * 2.75);
  }
  if (reissue === 'yes') {
    titleBase = titleBase * 0.90; // 10% reissue discount
  }
  var titleFee = Math.max(650, titleBase + 350); // title premium + closing/search endorsement

  // 3. Lender Fees & Escrow
  var lenderFee = 0;
  var escrowPrepaids = 0;

  if (loanType === 'cash') {
    lenderFee = 0;
    escrowPrepaids = 450; // settlement closing fee
  } else if (loanType === 'va') {
    lenderFee = 650; // appraisal only (no lender origination charged)
    escrowPrepaids = 3500 + (loanAmount * 0.004);
  } else {
    lenderFee = 1800 + 650; // origination + appraisal/credit
    escrowPrepaids = 3600 + (loanAmount * 0.005);
  }

  var totalBuyerClosing = buyerTransfer + titleFee + lenderFee + recording + escrowPrepaids;
  var totalCashToClose = downPayment + totalBuyerClosing;
  var costPct = price > 0 ? (totalBuyerClosing / price) * 100 : 0;

  document.getElementById('resTotalCost').textContent = '$' + Math.round(totalBuyerClosing).toLocaleString();
  document.getElementById('resCostPct').textContent = costPct.toFixed(2) + '% of Purchase Price (excl. down payment)';
  document.getElementById('resTransferTax').textContent = '$' + Math.round(buyerTransfer).toLocaleString() + ' (' + (buyerTransfer > 0 ? ((buyerTransfer / price) * 100).toFixed(3) + '%' : '$0') + ')';
  document.getElementById('resTitle').textContent = '$' + Math.round(titleFee).toLocaleString();
  document.getElementById('resLender').textContent = '$' + Math.round(lenderFee).toLocaleString();
  document.getElementById('resRecording').textContent = '$' + Math.round(recording).toLocaleString();
  document.getElementById('resEscrow').textContent = '$' + Math.round(escrowPrepaids).toLocaleString();
  document.getElementById('resCashToClose').textContent = '$' + Math.round(totalCashToClose).toLocaleString();
}

document.querySelectorAll('#paPrice, #paLocation, #paSplit, #paDownPct, #paReissue, #paLoanType, #paRecording').forEach(function(el) {
  el.addEventListener('input', calculatePaCosts);
  el.addEventListener('change', calculatePaCosts);
});
calculatePaCosts();
</script>

<?php require_once '../includes/footer.php'; ?>
