<?php
$currentYear = date('Y');
$pageTitle       = "HOA Fee & Buying Power Impact Calculator ($currentYear) | AmericaCalculator";
$metaDescription = "Calculate how monthly HOA and condo fees reduce your mortgage purchasing power. Model 10-year fee inflation, compare state averages, and calculate all-in housing costs.";
$metaKeywords    = 'hoa fee calculator, condo fee buying power, how much does hoa affect mortgage, homeowners association calculator, hoa purchasing power, hoa inflation calculator, hoa reserve fund';
$schemaData = [
  '@context'=>'https://schema.org',
  '@graph'=>[
    [
      '@type'=>'HowTo',
      'name'=>'How to Calculate Total Cost of HOA Dues Over Time',
      'step'=>[
        ['@type'=>'HowToStep','name'=>'Enter monthly HOA fee','text'=>'Input current monthly homeowner association or condominium maintenance dues.'],
        ['@type'=>'HowToStep','name'=>'Set mortgage interest rate and term','text'=>'Provide your mortgage interest rate and loan term (15 or 30 years) to evaluate borrowing power loss.'],
        ['@type'=>'HowToStep','name'=>'Set expected annual fee increase','text'=>'Provide expected annual inflation rate for HOA dues (typically 3% to 5% annually).'],
        ['@type'=>'HowToStep','name'=>'Input target home price','text'=>'Enter your total property purchase price to see equivalent mortgage loan capacity.'],
        ['@type'=>'HowToStep','name'=>'Review total ownership expense','text'=>'See the cumulative cost of HOA fees and their impact on your property investment cash flow over 5 and 10 years.']
      ]
    ],
    [
      '@type'=>'WebApplication',
      'name'=>'HOA Fee & Buying Power Impact Calculator',
      'url'=>'https://americacalculator.com/real-estate/hoa-fee-calculator',
      'description'=>'Calculate how monthly condo and HOA fees reduce mortgage purchasing power and model 10-year fee inflation.',
      'applicationCategory'=>'FinanceApplication',
      'operatingSystem'=>'All',
      'offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']
    ],
    [
      '@type'=>'BreadcrumbList',
      'itemListElement'=>[
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
        ['@type'=>'ListItem','position'=>2,'name'=>'Real Estate Calculators','item'=>'https://americacalculator.com/real-estate/'],
        ['@type'=>'ListItem','position'=>3,'name'=>'HOA Fee Calculator','item'=>'https://americacalculator.com/real-estate/hoa-fee-calculator']
      ]
    ],
    [
      '@type'=>'FAQPage',
      'mainEntity'=>[
        [
          '@type'=>'Question',
          'name'=>'How much does a $300 monthly HOA fee reduce my home buying power?',
          'acceptedAnswer'=>['@type'=>'Answer','text'=>'At an average 30-year fixed mortgage interest rate of 6.50%, every $100 per month in HOA fees reduces your maximum mortgage borrowing capacity by roughly $15,800. Therefore, a $300 monthly HOA fee reduces your purchasing power by approximately $47,400. At 7.00% interest, that same $300/mo fee reduces borrowing power by roughly $45,100.']
        ],
        [
          '@type'=>'Question',
          'name'=>'Do mortgage lenders include HOA fees in your DTI calculation?',
          'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. Mortgage underwriters consider mandatory HOA or condo association dues as a primary recurring housing liability. The monthly fee is added directly into both your front-end (housing ratio) and back-end (total debt ratio) debt-to-income calculations, directly restricting the maximum loan amount you can qualify for.']
        ],
        [
          '@type'=>'Question',
          'name'=>'What happens if an HOA issues a special assessment?',
          'acceptedAnswer'=>['@type'=>'Answer','text'=>'A special assessment is an unexpected, mandatory lump-sum charge or temporary monthly surcharge levied on all property owners when the HOA reserve fund is insufficient to cover major capital repairs (such as a roof replacement, structural remediation, elevator overhaul, or repaving). Special assessments can range from a few hundred dollars to over $50,000 per unit in aging buildings.']
        ],
        [
          '@type'=>'Question',
          'name'=>'What is a healthy HOA reserve fund percentage?',
          'acceptedAnswer'=>['@type'=>'Answer','text'=>'A healthy HOA or condo association maintains a reserve fund funded at 70% or higher relative to its reserve study recommendations. A reserve fund between 30% and 69% is considered fair but carries moderate special assessment risk. A reserve fund under 30% is considered critical/poor, and conventional lenders (Fannie Mae/Freddie Mac) may refuse to finance buyers in that building.']
        ],
        [
          '@type'=>'Question',
          'name'=>'What is the difference between an HOA fee and a condo fee?',
          'acceptedAnswer'=>['@type'=>'Answer','text'=>'HOA fees generally apply to single-family home developments, townhomes, and planned unit developments (PUDs) where you own the structure and land; dues primarily cover neighborhood amenities, security, and common grounds. Condo fees apply to multi-unit condominium buildings where dues cover exterior structural maintenance (roof, exterior walls, foundations, elevators), building master insurance, and common utilities.']
        ],
        [
          '@type'=>'Question',
          'name'=>'How fast do HOA fees increase over time?',
          'acceptedAnswer'=>['@type'=>'Answer','text'=>'Historically, HOA and condo dues escalate at an average rate of 3% to 6% annually across the United States. In states facing extreme property insurance inflation (such as Florida, California, and Texas), condo associations have increased dues by 15% to 40% annually in recent years to cover rising master property insurance premiums and state-mandated milestone reserve requirements.']
        ],
        [
          '@type'=>'Question',
          'name'=>'Can an HOA foreclose on your home for unpaid dues?',
          'acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes. In almost all 50 states, an HOA or condo association has the legal statutory right to place a lien against your property for delinquent dues, late fees, and legal charges. In many states, the HOA lien holds super-priority status and the association can initiate non-judicial or judicial foreclosure, even if your mortgage is current.']
        ],
        [
          '@type'=>'Question',
          'name'=>'Are HOA fees tax-deductible on a primary residence?',
          'acceptedAnswer'=>['@type'=>'Answer','text'=>'For a primary personal residence, HOA and condo dues are not tax-deductible on your federal tax return. However, if the property is a rental investment or if you qualify for a dedicated home office deduction, HOA fees are 100% tax-deductible as an ordinary operating expense.']
        ]
      ]
    ]
  ]
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f8fafc;}
.hoa-wrap{max-width:1080px;margin:0 auto;padding:2rem 1.25rem 5rem;}
.hoa-bc{font-size:.82rem;color:#94a3b8;margin-bottom:.75rem;}.hoa-bc a{color:#64748b;text-decoration:none;}
.hoa-hero h1{font-size:1.95rem;color:#0f172a;margin:0 0 .5rem;line-height:1.25;}
.hoa-hero p{font-size:.98rem;color:#64748b;line-height:1.65;margin:0 0 1.5rem;border-left:3px solid #059669;padding-left:.9rem;}
.hoa-layout{display:grid;grid-template-columns:1.1fr 1fr;gap:1.75rem;margin-bottom:2rem;}
.hoa-card{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 12px rgba(0,0,0,.05);overflow:hidden;}
.hoa-card-head{background:#059669;color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;}
.hoa-body{padding:1.5rem;}
.hoa-field{margin-bottom:1rem;}
.hoa-field label{display:block;font-size:.85rem;font-weight:600;color:#1e293b;margin-bottom:.35rem;}
.hoa-field input,.hoa-field select{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.94rem;color:#0f172a;outline:none;background:#fff;transition:border-color .2s;box-sizing:border-box;}
.hoa-field input:focus,.hoa-field select:focus{border-color:#059669;}
.hoa-grid{display:grid;grid-template-columns:1fr 1fr;gap:1rem;}
.hoa-results{background:#064e3b;color:#fff;border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;justify-content:space-between;box-shadow:0 4px 15px rgba(6,78,59,.15);}
.hoa-shock{background:rgba(239,68,68,.2);border:1px solid rgba(239,68,68,.4);border-radius:10px;padding:1.25rem;text-align:center;margin-bottom:1.25rem;}
.hoa-shock .amt{font-size:2.2rem;font-weight:800;color:#fecaca;}
.hoa-row{display:flex;justify-content:space-between;padding:.55rem 0;border-bottom:1px solid rgba(255,255,255,.1);font-size:.92rem;}
.hoa-row:last-child{border-bottom:none;}
.hoa-row span:first-child{color:#cbd5e1;}
.hoa-row span:last-child{font-weight:700;color:#34d399;}
.hoa-guide{background:#fff;border-radius:12px;border:1px solid #e2e8f0;padding:2.25rem;margin-top:2rem;box-shadow:0 2px 12px rgba(0,0,0,.04);}
.hoa-guide h2{font-size:1.45rem;color:#0f172a;margin:2rem 0 .85rem;border-bottom:2px solid #f1f5f9;padding-bottom:.5rem;}
.hoa-guide h3{font-size:1.15rem;color:#1e293b;margin:1.4rem 0 .5rem;}
.hoa-guide p{font-size:1rem;color:#475569;line-height:1.75;margin-bottom:1.2rem;}
.hoa-table{width:100%;border-collapse:collapse;margin:1.25rem 0 1.75rem;}
.hoa-table th{background:#1e293b;color:#fff;text-align:left;padding:.85rem;font-size:.85rem;border-bottom:2px solid #0f172a;}
.hoa-table td{padding:.85rem;border-bottom:1px solid #e2e8f0;font-size:.9rem;color:#334155;}
.hoa-table tr:nth-child(even) td{background:#f8fafc;}
.hoa-callout{background:#ecfdf5;border-left:4px solid #10b981;padding:1.25rem 1.5rem;border-radius:0 8px 8px 0;margin:1.5rem 0;}
.faq-box{background:#f8fafc;border:1px solid #e2e8f0;border-radius:8px;padding:1.1rem 1.3rem;margin-bottom:1rem;}
.faq-box h4{margin:0 0 .4rem;color:#0f172a;font-size:1.02rem;}
.faq-box p{margin:0;color:#475569;font-size:.92rem;line-height:1.6;}
@media(max-width:820px){.hoa-layout{grid-template-columns:1fr;}}
</style>

<div class="hoa-wrap">
  <div class="hoa-bc"><a href="/">Home</a> / <a href="/real-estate/">Real Estate Calculators</a> / <span>HOA Fee Calculator</span></div>
  
  <div class="hoa-hero">
    <h1>HOA Fee &amp; Buying Power Impact Calculator (<?php echo $currentYear; ?>)</h1>
    <p>Discover how monthly condo or Homeowners Association (HOA) dues reduce your mortgage borrowing capacity. Model 10-year fee inflation, compare state averages, and calculate your true all-in monthly housing cost.</p>
  </div>

  <div class="hoa-layout">
    <div class="hoa-card">
      <div class="hoa-card-head">Association Dues &amp; Mortgage Settings</div>
      <div class="hoa-body">
        <div class="hoa-field">
          <label for="hoa-dues">Monthly HOA / Condo Fee ($)</label>
          <input type="number" id="hoa-dues" value="350" min="0" step="25">
        </div>
        <div class="hoa-grid">
          <div class="hoa-field">
            <label for="hoa-rate">Mortgage Interest Rate (%)</label>
            <input type="number" id="hoa-rate" value="6.50" step="0.125">
          </div>
          <div class="hoa-field">
            <label for="hoa-term">Loan Term</label>
            <select id="hoa-term">
              <option value="30" selected>30 Years</option>
              <option value="15">15 Years</option>
            </select>
          </div>
        </div>
        <div class="hoa-grid">
          <div class="hoa-field">
            <label for="hoa-price">Target Purchase Price ($)</label>
            <input type="number" id="hoa-price" value="425000" step="5000">
          </div>
          <div class="hoa-field">
            <label for="hoa-inf">Est. Annual HOA Escalation (%)</label>
            <input type="number" id="hoa-inf" value="4.0" step="0.5">
          </div>
        </div>
      </div>
    </div>

    <div class="hoa-results">
      <div>
        <h3 style="font-size:1.1rem;margin:0 0 1rem;color:#a7f3d0;">Borrowing Power Impact Analysis</h3>
        <div class="hoa-shock">
          <div style="font-size:.8rem;color:#fca5a5;text-transform:uppercase;font-weight:700;">Lost Mortgage Purchasing Power</div>
          <div class="amt" id="hoa-lost">-$55,300</div>
          <div style="font-size:.78rem;color:#fca5a5;">Equivalent reduction in home price affordability</div>
        </div>
        <div class="hoa-row"><span>Equivalent Max Loan:</span><span id="hoa-equiv">$369,700</span></div>
        <div class="hoa-row"><span>Projected Monthly Dues (Yr 5):</span><span id="hoa-5y">$426 / mo</span></div>
        <div class="hoa-row"><span>Projected Monthly Dues (Yr 10):</span><span id="hoa-10y">$518 / mo</span></div>
        <div class="hoa-row"><span>10-Yr Cumulative HOA Outflow:</span><span id="hoa-cum" style="color:#fbbf24;">$50,425</span></div>
      </div>
      <div style="border-top:1px solid rgba(255,255,255,.15);padding-top:1rem;text-align:center;">
        <div style="font-size:.8rem;color:#cbd5e1;">Current Monthly Association Outflow:</div>
        <div style="font-size:1.45rem;font-weight:800;color:#38bdf8;" id="hoa-outflow">$350 / mo</div>
      </div>
    </div>
  </div>

  <div class="hoa-guide">
    <h2>How HOA Fees Diminish Your Mortgage Affordability</h2>
    <p>Every dollar committed toward mandatory <strong>Homeowners Association (HOA) or Condominium dues</strong> is a dollar that cannot be allocated toward mortgage principal and interest. When you apply for a residential home loan, mortgage underwriters do not distinguish between debt service paid to a bank and mandatory dues paid to a property association.</p>
    <p>Because HOA dues are a permanent recurring liability attached to the property deed, lenders add the monthly assessment directly into both your <strong>Front-End Debt-to-Income (DTI) ratio</strong> (housing expenses divided by gross monthly income) and your <strong>Back-End DTI ratio</strong> (total debts divided by gross monthly income). Under prevailing 30-year fixed interest rates (6.5% to 7.0%), <strong>every $100 per month in HOA dues reduces your maximum mortgage borrowing capacity by $15,000 to $16,000</strong>.</p>

    <div class="hoa-callout">
      <h3 style="margin:0 0 .5rem;color:#065f46;font-size:1.1rem;">💡 The Present Value Formula of Association Fees</h3>
      <p style="margin:0;color:#047857;font-size:.95rem;">To calculate the exact mortgage equivalent of an HOA fee, underwriters use the Present Value (PV) of an annuity formula: <code>PV = Dues &times; [1 - (1 + r)^(-n)] / r</code>, where <em>r</em> is the monthly interest rate and <em>n</em> is the loan term in months. A $400/month fee on a 30-year loan at 6.75% has a capitalized mortgage present value of <strong>$61,650</strong>.</p>
    </div>

    <h2>HOA Fee vs. Lost Purchasing Power Benchmark Matrix</h2>
    <p>The table below models how different monthly HOA dues erode your home buying power across three prevailing mortgage rate environments:</p>
    
    <table class="hoa-table">
      <thead>
        <tr>
          <th>Monthly HOA / Condo Fee</th>
          <th>Lost Power @ 5.50% Rate</th>
          <th>Lost Power @ 6.50% Rate</th>
          <th>Lost Power @ 7.50% Rate</th>
          <th>10-Year Outflow (4% Inflation)</th>
        </tr>
      </thead>
      <tbody>
        <tr><td><strong>$100 / mo</strong></td><td>-$17,614</td><td>-$15,821</td><td>-$14,302</td><td>$14,407</td></tr>
        <tr><td><strong>$200 / mo</strong></td><td>-$35,228</td><td>-$31,642</td><td>-$28,604</td><td>$28,814</td></tr>
        <tr><td><strong>$300 / mo</strong></td><td>-$52,842</td><td>-$47,463</td><td>-$42,906</td><td>$43,222</td></tr>
        <tr><td><strong>$400 / mo</strong></td><td>-$70,457</td><td>-$63,284</td><td>-$57,208</td><td>$57,629</td></tr>
        <tr><td><strong>$500 / mo</strong></td><td>-$88,071</td><td>-$79,105</td><td>-$71,510</td><td>$72,036</td></tr>
        <tr><td><strong>$750 / mo</strong></td><td>-$132,106</td><td>-$118,658</td><td>-$107,265</td><td>$108,054</td></tr>
        <tr><td><strong>$1,000 / mo</strong></td><td>-$176,141</td><td>-$158,211</td><td>-$143,020</td><td>$144,073</td></tr>
      </tbody>
    </table>

    <h2>Average Monthly HOA Fees by State (<?php echo $currentYear; ?> Benchmarks)</h2>
    <p>Association dues vary substantially across the country depending on state building safety regulations, coastal master property insurance costs, amenities (elevators, swimming pools, gated security), and property age.</p>

    <table class="hoa-table">
      <thead>
        <tr>
          <th>State / Region</th>
          <th>Avg. Monthly HOA Fee</th>
          <th>Avg. Condo Fee</th>
          <th>Primary Cost Drivers</th>
        </tr>
      </thead>
      <tbody>
        <tr><td><strong>Florida</strong></td><td>$380 - $550</td><td>$650 - $1,200+</td><td>SB 4-D Milestone inspections, SIRS structural reserves, hurricane master insurance.</td></tr>
        <tr><td><strong>Hawaii</strong></td><td>$450 - $650</td><td>$750 - $1,400+</td><td>High island construction costs, salt-air corrosion, master insurance premiums.</td></tr>
        <tr><td><strong>California</strong></td><td>$350 - $520</td><td>$500 - $950+</td><td>Earthquake master policies, Balcony Bill (SB 326/SB 721) structural inspections.</td></tr>
        <tr><td><strong>New York (NYC)</strong></td><td>$400 - $700</td><td>$800 - $2,200+</td><td>Local Law 11 facade inspections, union building staffing (doormen), fuel/heating.</td></tr>
        <tr><td><strong>Texas</strong></td><td>$180 - $350</td><td>$350 - $650</td><td>Subdivision community pools, master planned community grounds, security gates.</td></tr>
        <tr><td><strong>Ohio / Midwest</strong></td><td>$150 - $280</td><td>$250 - $480</td><td>Snow removal, landscaping, roof replacement reserve allocations.</td></tr>
        <tr><td><strong>North Carolina</strong></td><td>$175 - $320</td><td>$320 - $580</td><td>Community clubhouse maintenance, pool operations, private road paving.</td></tr>
      </tbody>
    </table>

    <h2>HOA Reserve Funds &amp; Special Assessment Warning Signs</h2>
    <p>A low monthly HOA fee is not always a sign of a well-run community; in fact, artificially low dues are often a dangerous warning sign that the board is underfunding its <strong>capital reserve fund</strong>. When roofs, parking lots, or plumbing systems fail, an underfunded association has only one option: issue a mandatory <strong>Special Assessment</strong>.</p>
    
    <h3>Key Indicators of a Distressed HOA:</h3>
    <ul>
      <li><strong>Reserve Fund Below 50% Funded:</strong> Review the community's latest professional Reserve Study. If the Percent Funded metric is below 50% (or worse, below 30%), special assessments or steep fee hikes are virtually guaranteed.</li>
      <li><strong>Deferred Maintenance:</strong> Peeling exterior paint, cracked pavement, rusted stairwells, and aging roofs indicate that the board is postponing critical repairs to avoid raising dues.</li>
      <li><strong>High Delinquency Rate:</strong> If more than 15% of property owners in the building are delinquent on their monthly dues, the association cash flow will suffer, and conventional lenders (Fannie Mae/Freddie Mac) may blacklist the complex from mortgage financing.</li>
      <li><strong>Pending Structural Litigation:</strong> Active lawsuits between the HOA and developers over construction defects can freeze mortgage lending and prevent unit owners from selling or refinancing.</li>
    </ul>

    <h2>Frequently Asked Questions (FAQ)</h2>
    <div class="faq-box">
      <h4>How much does a $300 monthly HOA fee reduce my home buying power?</h4>
      <p>At an average 30-year fixed mortgage interest rate of 6.50%, every $100 per month in HOA fees reduces your maximum mortgage borrowing capacity by roughly $15,800. Therefore, a $300 monthly HOA fee reduces your purchasing power by approximately $47,400.</p>
    </div>
    <div class="faq-box">
      <h4>Do mortgage lenders include HOA fees in your DTI calculation?</h4>
      <p>Yes. Mortgage underwriters consider mandatory HOA or condo association dues as a primary recurring housing liability. The monthly fee is added directly into both your front-end and back-end debt-to-income ratios, directly restricting the maximum loan amount you can qualify for.</p>
    </div>
    <div class="faq-box">
      <h4>What happens if an HOA issues a special assessment?</h4>
      <p>A special assessment is an unexpected, mandatory charge levied on all property owners when the reserve fund is insufficient to cover major capital repairs (such as a roof replacement or elevator overhaul). Special assessments can range from a few hundred dollars to over $50,000 per unit.</p>
    </div>
    <div class="faq-box">
      <h4>What is a healthy HOA reserve fund percentage?</h4>
      <p>A healthy HOA maintains a reserve fund funded at 70% or higher relative to its reserve study recommendations. A reserve fund between 30% and 69% carries moderate risk, while under 30% is critical and may cause conventional lenders to deny buyer mortgages.</p>
    </div>
    <div class="faq-box">
      <h4>What is the difference between an HOA fee and a condo fee?</h4>
      <p>HOA fees typically apply to single-family homes and townhomes for neighborhood amenities and landscaping. Condo fees apply to condominium buildings where dues cover exterior structural maintenance (roof, elevators, building envelope), master property insurance, and common utilities.</p>
    </div>
    <div class="faq-box">
      <h4>How fast do HOA fees increase over time?</h4>
      <p>Historically, HOA dues escalate at an average rate of 3% to 6% annually. In coastal states facing severe property insurance inflation (such as Florida and California), condo dues have increased by 15% to 40% annually in recent years.</p>
    </div>
    <div class="faq-box">
      <h4>Can an HOA foreclose on your home for unpaid dues?</h4>
      <p>Yes. In almost all 50 states, an HOA has the statutory right to place a lien against your property for delinquent dues and initiate foreclosure, even if your primary mortgage payments are completely up to date.</p>
    </div>
    <div class="faq-box">
      <h4>Are HOA fees tax-deductible on a primary residence?</h4>
      <p>No, HOA fees on a primary residence are personal expenses and not tax-deductible. However, if the property is used as a rental investment or for an eligible home office, the dues are 100% tax-deductible as an operating expense.</p>
    </div>

    <h2>Explore Related Real Estate &amp; Financing Calculators</h2>
    <p>Continue modeling your complete real estate financing strategy with our specialized tools:</p>
    <ul>
      <li><a href="/real-estate/closing-cost-calculator">Closing Cost Calculator</a> &mdash; Estimate lender fees, title insurance, and escrow reserves across all 50 states.</li>
      <li><a href="/loan-calculators/debt-to-income-calculator">Debt-to-Income (DTI) Calculator</a> &mdash; Calculate front-end and back-end ratios with HOA dues included.</li>
      <li><a href="/real-estate/mortgage-calculator">Mortgage Payment Calculator</a> &mdash; Full 30-year and 15-year principal, interest, tax, and insurance amortization.</li>
      <li><a href="/real-estate/rent-affordability-calculator">Rent Affordability Calculator</a> &mdash; Evaluate maximum rent using the 30% rule and 40x gross salary rule.</li>
      <li><a href="/real-estate/cap-rate-calculator">Cap Rate Calculator</a> &mdash; Analyze capitalization rate and net operating income for investment properties.</li>
    </ul>
  </div>
</div>

<script>
function calcHOA() {
  var hoa = parseFloat(document.getElementById('hoa-dues').value) || 0;
  var rate = (parseFloat(document.getElementById('hoa-rate').value) || 6.5) / 100 / 12;
  var n = (parseFloat(document.getElementById('hoa-term').value) || 30) * 12;
  var price = parseFloat(document.getElementById('hoa-price').value) || 425000;
  var inf = (parseFloat(document.getElementById('hoa-inf').value) || 4) / 100;

  var pv = 0;
  if (rate > 0) {
    pv = hoa * ((1 - Math.pow(1 + rate, -n)) / rate);
  } else {
    pv = hoa * n;
  }

  document.getElementById('hoa-lost').textContent = '-$' + Math.round(pv).toLocaleString();
  document.getElementById('hoa-equiv').textContent = '$' + Math.max(0, Math.round(price - pv)).toLocaleString();
  document.getElementById('hoa-outflow').textContent = '$' + Math.round(hoa).toLocaleString() + ' / mo';

  var d5 = hoa * Math.pow(1 + inf, 5);
  var d10 = hoa * Math.pow(1 + inf, 10);
  document.getElementById('hoa-5y').textContent = '$' + Math.round(d5).toLocaleString() + ' / mo';
  document.getElementById('hoa-10y').textContent = '$' + Math.round(d10).toLocaleString() + ' / mo';

  var cum = 0;
  for (var y = 0; y < 10; y++) {
    cum += (hoa * Math.pow(1 + inf, y)) * 12;
  }
  document.getElementById('hoa-cum').textContent = '$' + Math.round(cum).toLocaleString();
}
document.querySelectorAll('#hoa-dues, #hoa-rate, #hoa-term, #hoa-price, #hoa-inf').forEach(function(el){
  el.addEventListener('input', calcHOA);
  el.addEventListener('change', calcHOA);
});
calcHOA();
</script>

<?php require_once '../includes/footer.php'; ?>
