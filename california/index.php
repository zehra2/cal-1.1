<?php
$pageTitle = 'California Paycheck & Tax Calculators (' . date('Y') . ')';
$metaDescription = 'Free California paycheck calculators for ' . date('Y') . '. Calculate take-home pay with CA state tax brackets, SDI, and federal withholding.';
$metaKeywords = 'California paycheck calculator, California tax calculator, CA paycheck calculator';
$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'California Calculators','item'=>'https://americacalculator.com/california/'],
  ]]
]];
require_once __DIR__ . '/../includes/header.php';
?>
<style>
body{background:#f8fafc;}.hub-wrap{max-width:800px;margin:2rem auto;padding:0 1.25rem 4rem;}
.hub-wrap h1{font-size:1.85rem;color:#0f172a;margin-bottom:.75rem;}
.hub-wrap p{color:#475569;line-height:1.72;margin-bottom:1.5rem;}
.hub-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1rem;}
.hub-card{background:#fff;border:1.5px solid #e2e8f0;border-radius:12px;padding:1.5rem;text-decoration:none;transition:border-color .2s,box-shadow .2s;}
.hub-card:hover{border-color:#1d4ed8;box-shadow:0 4px 16px rgba(29,78,216,.12);}
.hub-card h2{font-size:1.1rem;color:#1e293b;margin:0 0 .5rem;}
.hub-card p{font-size:.88rem;color:#64748b;margin:0;line-height:1.55;}
</style>
<main>
<div class="hub-wrap">
  <h1>California Paycheck &amp; Tax Calculators</h1>
  <p>Free online calculators for California employees. Calculate your take-home pay with accurate <?php echo date('Y'); ?> CA state income tax brackets, SDI, and federal withholding.</p>
  <div class="hub-grid">
    <a href="/california/paycheck-calculator" class="hub-card">
      <h2>☀️ California Paycheck Calculator</h2>
      <p>Calculate net take-home pay with CA state tax (1%–13.3%), SDI, federal brackets, and pre-tax deductions.</p>
    </a>
  </div>
</div>
</main>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
