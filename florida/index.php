<?php
$pageTitle = 'Florida Paycheck & Tax Calculators (' . date('Y') . ')';
$metaDescription = 'Free Florida paycheck calculators for ' . date('Y') . '. Calculate take-home pay with 0% state income tax and federal withholding.';
$metaKeywords = 'Florida paycheck calculator, Florida tax calculator, FL paycheck calculator';
$schemaData = ['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Florida Calculators','item'=>'https://americacalculator.com/florida/'],
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
.hub-card:hover{border-color:#0d9488;box-shadow:0 4px 16px rgba(13,148,136,.12);}
.hub-card h2{font-size:1.1rem;color:#1e293b;margin:0 0 .5rem;}
.hub-card p{font-size:.88rem;color:#64748b;margin:0;line-height:1.55;}
</style>
<main>
<div class="hub-wrap">
  <h1>Florida Paycheck &amp; Tax Calculators</h1>
  <p>Free online calculators for Florida employees. Florida has zero state income tax — your only deductions are federal income tax, Social Security, and Medicare.</p>
  <div class="hub-grid">
    <a href="/florida/paycheck-calculator" class="hub-card">
      <h2>🌴 Florida Paycheck Calculator</h2>
      <p>Calculate net take-home pay with 0% FL state tax, federal brackets, and pre-tax deductions like 401(k).</p>
    </a>
  </div>
</div>
</main>
<?php require_once __DIR__ . '/../includes/footer.php'; ?>
