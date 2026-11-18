<?php
$currentYear = date('Y');
$pageTitle = "LTV:CAC Calculator ({$currentYear}) – SaaS & E-Commerce Unit Economics";
$metaDescription = "Free LTV:CAC calculator for {$currentYear}. Calculate Customer Lifetime Value (LTV), Customer Acquisition Cost (CAC), LTV:CAC ratio benchmarks, and payback period in months.";
$metaKeywords = "ltv cac calculator, customer lifetime value calculator, customer acquisition cost calculator, saas unit economics calculator, ltv to cac ratio, cac payback period {$currentYear}";

$schemaData = json_decode(<<<'EOD'
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://americacalculator.com/business/ltv-cac-calculator",
      "url": "https://americacalculator.com/business/ltv-cac-calculator",
      "name": "LTV:CAC Calculator (2026) – SaaS & E-Commerce Unit Economics",
      "description": "Calculate Customer Lifetime Value (LTV), Customer Acquisition Cost (CAC), LTV:CAC ratio, CAC payback months, and customer retention value.",
      "inLanguage": "en-US",
      "breadcrumb": {
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
            "name": "Business",
            "item": "https://americacalculator.com/business/"
          },
          {
            "@type": "ListItem",
            "position": 3,
            "name": "LTV:CAC Calculator",
            "item": "https://americacalculator.com/business/ltv-cac-calculator"
          }
        ]
      }
    },
    {
      "@type": "WebApplication",
      "name": "LTV:CAC Calculator",
      "applicationCategory": "FinanceApplication",
      "operatingSystem": "All",
      "url": "https://americacalculator.com/business/ltv-cac-calculator",
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
      },
      "featureList": [
        "Customer Lifetime Value (LTV) formula modeling",
        "Blended and Paid Customer Acquisition Cost (CAC)",
        "LTV:CAC Ratio health score grading (3:1 Gold Standard)",
        "CAC Payback Period calculation (in months)",
        "Churn Rate & Gross Margin sensitivity analysis",
        "SaaS, E-Commerce, and Subscription business models"
      ]
    },
    {
      "@type": "HowTo",
      "name": "How to Calculate LTV, CAC, and LTV:CAC Ratio",
      "description": "Step-by-step instructions for analyzing SaaS and subscription unit economics.",
      "step": [
        {
          "@type": "HowToStep",
          "name": "Input Customer Revenue & Margin",
          "text": "Enter Average Revenue Per User (ARPU) and your company gross margin percentage."
        },
        {
          "@type": "HowToStep",
          "name": "Specify Churn Rate",
          "text": "Input monthly or annual customer churn rate to determine average customer lifespan."
        },
        {
          "@type": "HowToStep",
          "name": "Calculate Customer Acquisition Cost (CAC)",
          "text": "Enter total marketing and sales expenditure divided by new customers acquired in the period."
        },
        {
          "@type": "HowToStep",
          "name": "Evaluate LTV:CAC Health Ratio",
          "text": "Compare your LTV:CAC ratio against the 3.0x venture capital industry benchmark."
        },
        {
          "@type": "HowToStep",
          "name": "Analyze CAC Payback Period",
          "text": "Determine the exact number of months needed to break even on acquisition spend."
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is a good LTV:CAC ratio for SaaS and subscription businesses?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A 3:1 (3.0x) LTV:CAC ratio is widely considered the gold standard benchmark for venture-backed and bootstrapped SaaS companies. An LTV:CAC below 1.0x means you are losing money on every customer. A ratio between 1.0x and 2.5x is unsustainable, 3.0x to 4.5x indicates healthy scaling, and 5.0x+ often indicates you are underinvesting in marketing."
          }
        },
        {
          "@type": "Question",
          "name": "What is the formula for Customer Lifetime Value (LTV)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The standard formula for Customer Lifetime Value is: LTV = (Average Monthly Revenue Per User * Gross Margin %) / Monthly Churn Rate. For example, with $100/mo ARPU, 80% gross margin, and 2% monthly churn, LTV = ($100 * 0.80) / 0.02 = $4,000."
          }
        },
        {
          "@type": "Question",
          "name": "What is the formula for Customer Acquisition Cost (CAC)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Customer Acquisition Cost is calculated as: CAC = Total Sales and Marketing Expenses (ad spend, salaries, software, commissions) / Total New Customers Acquired in the measured period."
          }
        },
        {
          "@type": "Question",
          "name": "What is CAC Payback Period and why is it critical?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "CAC Payback Period measures the number of months required for a customer to generate enough gross profit to fully repay their acquisition cost: CAC Payback = CAC / (Monthly ARPU * Gross Margin %). Top-quartile SaaS companies achieve a payback period under 12 months."
          }
        },
        {
          "@type": "Question",
          "name": "How does churn rate affect customer lifetime value?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Customer lifespan is inversely proportional to churn rate (Lifespan = 1 / Churn Rate). Reducing monthly churn from 5% (20 months lifespan) to 2% (50 months lifespan) increases your Customer Lifetime Value by 150% without spending a single dollar more on marketing."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Blended CAC and Paid CAC?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Paid CAC divides total paid advertising spend strictly by paid channel conversions. Blended CAC divides all sales and marketing costs (including organic, referral, direct, and paid) by total company new customer additions."
          }
        },
        {
          "@type": "Question",
          "name": "How does Gross Margin impact the LTV calculation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "LTV must always be calculated using gross profit, not top-line revenue. An e-commerce brand with 40% margins requires much lower CAC than a software company with 85% gross margins to achieve the same net profitability."
          }
        },
        {
          "@type": "Question",
          "name": "How do you improve your LTV:CAC ratio?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can improve your LTV:CAC ratio by: (1) reducing customer churn through better onboarding, (2) expanding revenue through annual upsells and add-ons, (3) optimizing paid ad targeting to lower cost per lead, and (4) increasing retail pricing to boost gross margins."
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

<main id="main-content" class="container">
  <div class="calculator-header">
    <h1>LTV:CAC Calculator (<?php echo $currentYear; ?>)</h1>
    <p class="lead-description">
      Measure your company's core unit economics. Calculate <strong>Customer Lifetime Value (LTV)</strong>, <strong>Customer Acquisition Cost (CAC)</strong>, <strong>LTV:CAC Ratio</strong>, and <strong>CAC Payback Period</strong> in months.
    </p>
  </div>

  <div class="calculator-layout">
    <!-- LEFT INPUT PANEL -->
    <div class="calculator-panel">
      <h2 class="panel-title">Unit Economics Inputs</h2>

      <h3 style="font-size:0.95rem;color:#60a5fa;margin:0 0 10px;text-transform:uppercase;letter-spacing:0.5px;">Customer Value &amp; Retention (LTV)</h3>

      <div class="form-group">
        <label for="ltvArpu">Average Monthly Revenue Per User / Customer ($):</label>
        <input type="number" id="ltvArpu" class="form-control" value="125" min="1" step="5">
        <span class="field-hint">Monthly subscription price or average monthly spend.</span>
      </div>

      <div class="form-group">
        <label for="ltvGrossMargin">Gross Margin (%):</label>
        <input type="number" id="ltvGrossMargin" class="form-control" value="80" min="5" max="100" step="5">
        <span class="field-hint">SaaS: 75%&ndash;85% | E-Commerce: 35%&ndash;55% | Services: 50%&ndash;65%.</span>
      </div>

      <div class="form-group">
        <label for="ltvChurnRate">Monthly Customer Churn Rate (%):</label>
        <input type="number" id="ltvChurnRate" class="form-control" value="2.5" min="0.1" max="50.0" step="0.1">
        <span class="field-hint">Percentage of customers who cancel each month.</span>
      </div>

      <h3 style="font-size:0.95rem;color:#34d399;margin:20px 0 10px;text-transform:uppercase;letter-spacing:0.5px;">Acquisition Costs (CAC)</h3>

      <div class="form-group">
        <label for="cacTotalSpend">Total Monthly Sales &amp; Marketing Spend ($):</label>
        <input type="number" id="cacTotalSpend" class="form-control" value="35000" min="0" step="1000">
        <span class="field-hint">Ad spend, marketing salaries, tools, agency fees.</span>
      </div>

      <div class="form-group">
        <label for="cacNewCustomers">New Customers Acquired in Month:</label>
        <input type="number" id="cacNewCustomers" class="form-control" value="50" min="1" step="5">
      </div>
    </div>

    <!-- RIGHT RESULTS PANEL -->
    <div class="calculator-panel results-panel">
      <h2 class="panel-title">Unit Economics Scorecard</h2>

      <div class="highlight-metric">
        <div class="metric-label">LTV:CAC Health Ratio</div>
        <div class="metric-value primary-value" id="resLtvCacRatio">0.0x</div>
        <div class="metric-sub" id="resLtvCacStatus">Health Grade: Optimal</div>
      </div>

      <div class="results-grid">
        <div class="result-card">
          <div class="result-title">Customer Lifetime Value (LTV)</div>
          <div class="result-number" id="resLtvVal">$0</div>
          <div class="result-desc" id="resAvgLifespan">Avg Lifespan: 0 Months</div>
        </div>

        <div class="result-card">
          <div class="result-title">Customer Acquisition Cost (CAC)</div>
          <div class="result-number" id="resCacVal">$0</div>
          <div class="result-desc">Per Acquired Customer</div>
        </div>

        <div class="result-card" id="cardPayback">
          <div class="result-title">CAC Payback Period</div>
          <div class="result-number" id="resPaybackMonths">0.0 Mo</div>
          <div class="result-desc">Time to recover acquisition spend</div>
        </div>

        <div class="result-card success-card">
          <div class="result-title">Net Lifetime Profit / User</div>
          <div class="result-number text-success" id="resNetLtvProfit">$0</div>
          <div class="result-desc">LTV minus CAC</div>
        </div>
      </div>

      <div class="summary-breakdown">
        <h3>Unit Economics Financial Summary</h3>
        <table class="summary-table">
          <tr><td>Monthly ARPU:</td><td id="resSumArpu">$0 / mo</td></tr>
          <tr><td>Monthly Gross Profit Per User:</td><td id="resSumGrossProfit">$0 / mo</td></tr>
          <tr><td>Average Customer Lifespan:</td><td id="resSumLifespan">0.0 Months</td></tr>
          <tr><td><strong>Customer Lifetime Value (LTV):</strong></td><td><strong id="resSumLtv">$0</strong></td></tr>
          <tr><td><strong>Customer Acquisition Cost (CAC):</strong></td><td><strong id="resSumCac">$0</strong></td></tr>
          <tr class="highlight-row"><td><strong id="resSumRatioLabel">LTV:CAC Ratio:</strong></td><td><strong id="resSumRatioVal">0.00x</strong></td></tr>
          <tr><td>CAC Payback Period:</td><td id="resSumPayback">0.0 Months</td></tr>
          <tr><td>Total Monthly Acquisition Spend:</td><td id="resSumSpend">$0</td></tr>
          <tr><td>New Monthly Customers:</td><td id="resSumNewUsers">0</td></tr>
          <tr class="highlight-row"><td><strong>Net Customer Value Created:</strong></td><td class="text-success"><strong id="resSumValueCreated">$0 / mo</strong></td></tr>
        </table>
      </div>
    </div>
  </div>

  <!-- CONTENT & GUIDES -->
  <div class="calculator-content-body">
    <div class="quick-answer-card">
      <h2>Why LTV:CAC is the #1 Metric for Venture Capital and Sustainable Growth</h2>
      <p>
        The <strong>LTV:CAC Ratio</strong> compares the gross profit generated by a customer over their entire relationship (<strong>Customer Lifetime Value</strong>) against the total capital spent to acquire them (<strong>Customer Acquisition Cost</strong>). Investors and CFOs use this metric to determine whether a business has product-market fit, scalable unit economics, and capital efficiency.
      </p>
    </div>

    <h2>LTV:CAC Health Benchmark Table</h2>
    <div class="table-responsive">
      <table class="data-table">
        <thead>
          <tr>
            <th>LTV:CAC Ratio</th>
            <th>Health Status</th>
            <th>Financial Diagnosis</th>
            <th>Recommended Executive Action</th>
          </tr>
        </thead>
        <tbody>
          <tr style="background:rgba(239,68,68,0.08);">
            <td><strong>&lt; 1.0x</strong></td>
            <td><strong class="text-danger">Critical / Losing Money</strong></td>
            <td>You lose cash on every customer acquired; unsustainable cash bleed.</td>
            <td>Halt paid acquisition immediately; fix churn and onboarding.</td>
          </tr>
          <tr style="background:rgba(245,158,11,0.08);">
            <td><strong>1.0x &ndash; 2.5x</strong></td>
            <td><strong class="text-warning">Underperforming</strong></td>
            <td>Marginally covers overhead; long payback periods strain working capital.</td>
            <td>Improve customer retention and increase retail pricing.</td>
          </tr>
          <tr style="background:rgba(16,185,129,0.08);">
            <td><strong>3.0x &ndash; 4.5x</strong></td>
            <td><strong class="text-success">Optimal Gold Standard</strong></td>
            <td>Ideal capital efficiency; strong cash generation with scalable growth.</td>
            <td>Accelerate marketing spend; expand into adjacent acquisition channels.</td>
          </tr>
          <tr style="background:rgba(99,102,241,0.08);">
            <td><strong>5.0x+</strong></td>
            <td><strong class="text-info">Underinvesting in Growth</strong></td>
            <td>Super-profitable, but leaving market share on the table for competitors.</td>
            <td>Aggressively scale ad budgets and sales headcount.</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h2>The Core Formulas Explained</h2>
    <div class="formula-box">
      <code>LTV = (Monthly ARPU &times; Gross Margin %) / Monthly Churn Rate</code>
    </div>
    <div class="formula-box" style="margin-top:10px;">
      <code>CAC = Total Sales &amp; Marketing Expenses / New Customers Acquired</code>
    </div>
    <div class="formula-box" style="margin-top:10px;">
      <code>CAC Payback Period (Months) = CAC / (Monthly ARPU &times; Gross Margin %)</code>
    </div>

    <h2>CAC Payback Period: The Cash Flow Velocity Metric</h2>
    <p>
      While LTV tells you how much money a customer makes over several years, <strong>CAC Payback Period</strong> dictates how much working capital you need to survive. If your CAC is $1,200 and a customer generates $100/month in gross profit, your payback period is <strong>12 months</strong>:
    </p>
    <ul>
      <li><strong>&lt; 12 Months Payback:</strong> Outstanding SaaS benchmark; allows fast reinvestment of cash into new customer acquisition.</li>
      <li><strong>12 to 18 Months Payback:</strong> Standard for enterprise B2B sales teams with long contracting cycles.</li>
      <li><strong>&gt; 24 Months Payback:</strong> High cash risk; requires extensive venture capital runway to avoid insolvency.</li>
    </ul>

        <h2>Net Revenue Retention (NRR) &amp; Expansion Revenue in LTV Modeling</h2>
    <p>Advanced venture capital analysts adjust basic LTV models for <strong>Net Revenue Retention (NRR)</strong>. If existing customers expand their usage (upgrading tiers, adding seats, buying add-on modules), your expansion revenue can outpace logo churn:</p>
    <ul>
      <li><strong>Negative Net Churn (NRR &gt; 100%):</strong> When expansion revenue exceeds lost revenue from canceled accounts, your cohort revenue grows over time even without new sales, resulting in <em>exponential lifetime customer value</em>.</li>
      <li><strong>Expansion LTV Formula:</strong> <code>Adjusted LTV = (ARPU &times; Gross Margin %) / (Monthly Churn % &minus; Monthly Expansion Rate %)</code>.</li>
    </ul>

    <h2>Cohort Analysis &amp; Channel-Specific LTV:CAC Segmentation</h2>
    <p>Calculating a single company-wide blended LTV:CAC can obscure critical channel realities. High-growth organizations calculate separate LTV:CAC ratios for each acquisition channel:</p>
    <ul>
      <li><strong>Organic Search / SEO:</strong> Typically low CAC ($50–$200) producing ultra-high LTV:CAC ratios of 6.0x to 10.0x+.</li>
      <li><strong>Paid Search / Google Ads:</strong> Moderate CAC with high purchasing intent; target 3.0x to 4.5x LTV:CAC.</li>
      <li><strong>Outbound Enterprise Sales:</strong> High CAC ($5,000–$25,000+) requiring ACVs (Annual Contract Values) of $30k+ to maintain healthy 3.5x+ ratios.</li>
    </ul>

    <h2>Customer Onboarding &amp; Time-to-Value (TTV): The Hidden LTV Multiplier</h2>
    <p>The majority of SaaS churn occurs during the first 30 to 90 days. Shortening <strong>Time-to-Value (TTV)</strong> through guided in-app onboarding, automated customer milestone emails, and dedicated customer success managers (CSMs) provides the highest possible return on equity: every 1% reduction in early customer churn compounds into double-digit gains in lifetime customer equity.</p>

    <h2>Frequently Asked Questions (FAQ)</h2>
    <div class="faq-item">
      <h4>What is a good LTV:CAC ratio for SaaS and subscription businesses?</h4>
      <p>A 3:1 (3.0x) LTV:CAC ratio is widely considered the gold standard benchmark for venture-backed and bootstrapped SaaS companies. An LTV:CAC below 1.0x means you are losing money on every customer. A ratio between 1.0x and 2.5x is unsustainable, 3.0x to 4.5x indicates healthy scaling, and 5.0x+ often indicates you are underinvesting in marketing.</p>
    </div>
    <div class="faq-item">
      <h4>What is the formula for Customer Lifetime Value (LTV)?</h4>
      <p>The standard formula for Customer Lifetime Value is: LTV = (Average Monthly Revenue Per User * Gross Margin %) / Monthly Churn Rate. For example, with $100/mo ARPU, 80% gross margin, and 2% monthly churn, LTV = ($100 * 0.80) / 0.02 = $4,000.</p>
    </div>
    <div class="faq-item">
      <h4>What is the formula for Customer Acquisition Cost (CAC)?</h4>
      <p>Customer Acquisition Cost is calculated as: CAC = Total Sales and Marketing Expenses (ad spend, salaries, software, commissions) / Total New Customers Acquired in the measured period.</p>
    </div>
    <div class="faq-item">
      <h4>What is CAC Payback Period and why is it critical?</h4>
      <p>CAC Payback Period measures the number of months required for a customer to generate enough gross profit to fully repay their acquisition cost: CAC Payback = CAC / (Monthly ARPU * Gross Margin %). Top-quartile SaaS companies achieve a payback period under 12 months.</p>
    </div>
    <div class="faq-item">
      <h4>How does churn rate affect customer lifetime value?</h4>
      <p>Customer lifespan is inversely proportional to churn rate (Lifespan = 1 / Churn Rate). Reducing monthly churn from 5% (20 months lifespan) to 2% (50 months lifespan) increases your Customer Lifetime Value by 150% without spending a single dollar more on marketing.</p>
    </div>
    <div class="faq-item">
      <h4>What is the difference between Blended CAC and Paid CAC?</h4>
      <p>Paid CAC divides total paid advertising spend strictly by paid channel conversions. Blended CAC divides all sales and marketing costs (including organic, referral, direct, and paid) by total company new customer additions.</p>
    </div>
    <div class="faq-item">
      <h4>How does Gross Margin impact the LTV calculation?</h4>
      <p>LTV must always be calculated using gross profit, not top-line revenue. An e-commerce brand with 40% margins requires much lower CAC than a software company with 85% gross margins to achieve the same net profitability.</p>
    </div>
    <div class="faq-item">
      <h4>How do you improve your LTV:CAC ratio?</h4>
      <p>You can improve your LTV:CAC ratio by: (1) reducing customer churn through better onboarding, (2) expanding revenue through annual upsells and add-ons, (3) optimizing paid ad targeting to lower cost per lead, and (4) increasing retail pricing to boost gross margins.</p>
    </div>

    <h2>Explore Related Business &amp; Marketing Calculators</h2>
    <ul>
      <li><a href="/business/marketing-roi-calculator">Marketing ROI Calculator</a> &mdash; Calculate ROAS, CPA, and campaign return on investment.</li>
      <li><a href="/business/break-even-calculator">Break-Even Calculator</a> &mdash; Determine unit break-even points and contribution margin ratios.</li>
      <li><a href="/business/profit-margin-calculator">Profit Margin Calculator</a> &mdash; Calculate gross, operating, and net margins.</li>
      <li><a href="/business/business-valuation-calculator">Business Valuation Calculator</a> &mdash; Model company valuation based on ARR, SDE, and EBITDA multiples.</li>
    </ul>
  </div>
</main>

<script>
function calculateLtvCac() {
  var arpu = parseFloat(document.getElementById('ltvArpu').value) || 0;
  var grossMarginPct = (parseFloat(document.getElementById('ltvGrossMargin').value) || 80) / 100;
  var churnPct = (parseFloat(document.getElementById('ltvChurnRate').value) || 2.5) / 100;
  var totalSpend = parseFloat(document.getElementById('cacTotalSpend').value) || 0;
  var newCustomers = parseFloat(document.getElementById('cacNewCustomers').value) || 1;

  var monthlyGrossProfit = arpu * grossMarginPct;
  var lifespanMonths = churnPct > 0 ? (1 / churnPct) : 0;
  var ltv = monthlyGrossProfit * lifespanMonths;

  var cac = newCustomers > 0 ? (totalSpend / newCustomers) : 0;
  var ratio = cac > 0 ? (ltv / cac) : 0;
  var paybackMonths = monthlyGrossProfit > 0 ? (cac / monthlyGrossProfit) : 0;
  var netLtvProfit = ltv - cac;
  var totalValueCreated = (ltv * newCustomers) - totalSpend;

  // Update UI
  document.getElementById('resLtvCacRatio').textContent = ratio.toFixed(2) + 'x';
  
  var statusEl = document.getElementById('resLtvCacStatus');
  if (ratio < 1.0) {
    statusEl.textContent = 'Health Grade: Critical (Losing Money)';
    document.getElementById('resLtvCacRatio').style.color = '#fca5a5';
  } else if (ratio < 2.5) {
    statusEl.textContent = 'Health Grade: Fair (Low Margin Buffer)';
    document.getElementById('resLtvCacRatio').style.color = '#fde047';
  } else if (ratio <= 4.5) {
    statusEl.textContent = 'Health Grade: Optimal Gold Standard (3:1 to 4:1)';
    document.getElementById('resLtvCacRatio').style.color = '#34d399';
  } else {
    statusEl.textContent = 'Health Grade: Super Profitable (Opportunity to scale ad spend)';
    document.getElementById('resLtvCacRatio').style.color = '#60a5fa';
  }

  document.getElementById('resLtvVal').textContent = '$' + Math.round(ltv).toLocaleString();
  document.getElementById('resAvgLifespan').textContent = 'Avg Lifespan: ' + lifespanMonths.toFixed(1) + ' Months';
  document.getElementById('resCacVal').textContent = '$' + Math.round(cac).toLocaleString();
  document.getElementById('resPaybackMonths').textContent = paybackMonths.toFixed(1) + ' Mo';
  
  if (netLtvProfit >= 0) {
    document.getElementById('resNetLtvProfit').textContent = '+$' + Math.round(netLtvProfit).toLocaleString();
    document.getElementById('resNetLtvProfit').style.color = '#34d399';
  } else {
    document.getElementById('resNetLtvProfit').textContent = '-$' + Math.round(Math.abs(netLtvProfit)).toLocaleString();
    document.getElementById('resNetLtvProfit').style.color = '#fca5a5';
  }

  document.getElementById('resSumArpu').textContent = '$' + arpu.toFixed(2) + ' / mo';
  document.getElementById('resSumGrossProfit').textContent = '$' + monthlyGrossProfit.toFixed(2) + ' / mo (' + (grossMarginPct * 100).toFixed(0) + '%)';
  document.getElementById('resSumLifespan').textContent = lifespanMonths.toFixed(1) + ' Months';
  document.getElementById('resSumLtv').textContent = '$' + Math.round(ltv).toLocaleString();
  document.getElementById('resSumCac').textContent = '$' + Math.round(cac).toLocaleString();
  document.getElementById('resSumRatioVal').textContent = ratio.toFixed(2) + 'x';
  document.getElementById('resSumPayback').textContent = paybackMonths.toFixed(1) + ' Months';
  document.getElementById('resSumSpend').textContent = '$' + Math.round(totalSpend).toLocaleString();
  document.getElementById('resSumNewUsers').textContent = newCustomers.toLocaleString();
  document.getElementById('resSumValueCreated').textContent = '+$' + Math.round(totalValueCreated).toLocaleString() + ' / mo';
}

document.querySelectorAll('#ltvArpu, #ltvGrossMargin, #ltvChurnRate, #cacTotalSpend, #cacNewCustomers').forEach(function(el) {
  el.addEventListener('input', calculateLtvCac);
  el.addEventListener('change', calculateLtvCac);
});

calculateLtvCac();
</script>

<?php require_once '../includes/footer.php'; ?>
