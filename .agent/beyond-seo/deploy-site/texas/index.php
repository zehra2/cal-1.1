<?php
$currentYear = date('Y');
$pageTitle       = "Texas Payroll & Tax Calculators ($currentYear) | Net Take-Home Pay";
$metaDescription = "Free Texas payroll and paycheck calculators for $currentYear. Calculate take-home pay, hourly wages, salary net pay, and FICA deductions with 0% Texas state income tax.";
$metaKeywords    = "texas payroll calculators, texas paycheck calculator, texas hourly paycheck calculator, texas salary calculator, texas take home pay, texas 0 percent state income tax";
$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    ['@type' => 'CollectionPage',
     'name'  => "Texas Payroll Calculators ($currentYear)",
     'url'   => 'https://americacalculator.com/texas/',
     'description' => "Complete suite of free Texas paycheck and payroll calculators. Calculate net take-home pay with zero state personal income tax."],
    ['@type' => 'BreadcrumbList', 'itemListElement' => [
      ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
      ['@type'=>'ListItem','position'=>2,'name'=>'Texas Payroll Calculators','item'=>'https://americacalculator.com/texas/'],
    ]],
  ],
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f8fafc;}
.tx-hub{max-width:1100px;margin:0 auto;padding:2.5rem 1.5rem 4rem;}
.tx-bc{font-size:.8rem;color:#94a3b8;margin-bottom:1.25rem;}
.tx-bc a{color:#64748b;text-decoration:none;}
.tx-hero{text-align:center;margin-bottom:3rem;}
.tx-hero h1{font-size:2.3rem;color:#0f172a;margin:0 0 1rem;line-height:1.2;}
.tx-hero p{font-size:1.1rem;color:#475569;max-width:680px;margin:0 auto 1.5rem;line-height:1.7;}
.tx-badge-row{display:flex;flex-wrap:wrap;justify-content:center;gap:.6rem;margin-bottom:.5rem;}
.tx-badge{background:#eff6ff;border:1px solid #bfdbfe;color:#1d4ed8;font-size:.8rem;font-weight:600;padding:.35rem .85rem;border-radius:20px;}
.tx-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-bottom:3rem;}
.tx-card{background:#fff;border-radius:14px;border:1.5px solid #e8edf5;box-shadow:0 4px 18px rgba(0,0,0,.05);padding:1.75rem 1.5rem 1.5rem;display:flex;flex-direction:column;gap:.75rem;transition:border-color .2s,box-shadow .2s,transform .15s;text-decoration:none;}
.tx-card:hover{border-color:#1d4ed8;box-shadow:0 8px 28px rgba(29,78,216,.14);transform:translateY(-3px);}
.tx-card-icon{font-size:2rem;line-height:1;}
.tx-card h3{font-size:1.05rem;color:#0f172a;margin:0;font-weight:700;}
.tx-card p{font-size:.87rem;color:#64748b;margin:0;line-height:1.55;flex-grow:1;}
.tx-card-link{font-size:.83rem;font-weight:700;color:#1d4ed8;display:flex;align-items:center;gap:.3rem;}
.tx-info-box{background:#fff;border-radius:14px;border:1px solid #e2e8f0;padding:2rem;box-shadow:0 4px 18px rgba(0,0,0,.03);margin-bottom:2rem;}
.tx-info-box h2{font-size:1.45rem;color:#0f172a;margin:0 0 1rem;}
.tx-info-box p{color:#475569;font-size:.97rem;line-height:1.75;margin-bottom:1rem;}
@media(max-width:768px){.tx-grid{grid-template-columns:1fr;}}
</style>

<div class="tx-hub">
  <div class="tx-bc"><a href="/">Home</a> / <span>Texas Payroll Calculators</span></div>
  <div class="tx-hero">
    <h1>Texas Payroll & Paycheck Calculators (<?php echo $currentYear;?>)</h1>
    <p>Calculate take-home pay, hourly wages, salary distributions, and FICA deductions under Texas's 0% state income tax framework.</p>
    <div class="tx-badge-row">
      <span class="tx-badge">0% State Personal Income Tax</span>
      <span class="tx-badge">Updated <?php echo $currentYear;?> Federal Tax Brackets</span>
      <span class="tx-badge">Accurate FICA Withholding</span>
    </div>
  </div>

  <div class="tx-grid">
    <a href="/texas/paycheck-calculator" class="tx-card">
      <div class="tx-card-icon">💵</div>
      <h3>Texas Paycheck Calculator</h3>
      <p>Estimate your exact take-home pay for hourly and salary earnings after federal income tax, Social Security, and Medicare.</p>
      <span class="tx-card-link">Launch Calculator →</span>
    </a>
    <a href="/texas/paycheck-calculator" class="tx-card">
      <div class="tx-card-icon">⏱️</div>
      <h3>Hourly Wage Net Pay</h3>
      <p>Convert hourly rates into daily, bi-weekly, and monthly net take-home earnings with zero state deductions.</p>
      <span class="tx-card-link">Calculate Hourly Pay →</span>
    </a>
    <a href="/texas/paycheck-calculator" class="tx-card">
      <div class="tx-card-icon">📊</div>
      <h3>Salary Take-Home Pay</h3>
      <p>Determine annual net income on $50k, $75k, $100k, and $150k salaries in Austin, Dallas, and Houston.</p>
      <span class="tx-card-link">Calculate Salary →</span>
    </a>
  </div>

  <div class="tx-info-box">
    <h2>Why Texas Workers Keep More of Their Paycheck</h2>
    <p>The state of Texas is prohibited by its state constitution from assessing a personal income tax. As a result, 100% of state-level income tax deductions remain in your pocket. The only payroll withholdings taken from a Texas worker's paycheck are:</p>
    <ul>
      <li><strong>Federal Income Tax:</strong> Progressive rates ranging from 10% to 37% based on your IRS Form W-4 elections.</li>
      <li><strong>Social Security Tax:</strong> 6.2% on wages up to the federal wage limit ($168,600 in 2024/2025/2026).</li>
      <li><strong>Medicare Tax:</strong> 1.45% on all earnings, plus an additional 0.9% on income exceeding $200,000 ($250,000 married).</li>
    </ul>
  </div>
</div>
<?php require_once '../includes/footer.php'; ?>
