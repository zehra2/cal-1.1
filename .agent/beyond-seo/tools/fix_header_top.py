p = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com\includes\header.php"
with open(p, "r", encoding="utf-8", errors="ignore") as f:
    text = f.read()

# Replace the broken head section up to <link rel="stylesheet"
correct_head = """<?php
require_once __DIR__ . '/calculators_data.php';
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$docRoot = str_replace('\\\\', '/', $_SERVER['DOCUMENT_ROOT']);
$dirRoot = str_replace('\\\\', '/', dirname(__DIR__));
$baseUrl = str_replace($docRoot, '', $dirRoot);
if ($baseUrl === '/' || $baseUrl === '\\\\') $baseUrl = '';

// -- Normalized canonical URL ----------------------------------------------
// Always https://americacalculator.com, lowercase path, no query string,
// no trailing slash (except root).
$_raw_path  = strtok($_SERVER['REQUEST_URI'], '?'); // strip query string
$_norm_path = strtolower(rtrim($_raw_path, '/'));   // lowercase + strip trailing /
if ($_norm_path === '') $_norm_path = '/';           // keep root slash
$_canonical = 'https://americacalculator.com' . htmlspecialchars($_norm_path, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'AmericaCalculator.com - Free Online Calculators'; ?></title>
<meta name="description" content="<?php echo isset($metaDescription) ? htmlspecialchars($metaDescription) : 'Free online calculators for finance, loans, real estate, construction, math, health, and more.'; ?>">
<meta name="keywords" content="<?php echo isset($metaKeywords) ? htmlspecialchars($metaKeywords) : 'calculator, online calculator, free calculator'; ?>">
<link rel="canonical" href="<?php echo $_canonical; ?>">
<link rel="alternate" hreflang="en-us" href="<?php echo $_canonical; ?>">
<link rel="icon" type="image/jpeg" href="<?php echo $baseUrl; ?>/image/logo-americacalculator-favicon.jpg">
<link rel="apple-touch-icon" href="<?php echo $baseUrl; ?>/image/logo-americacalculator-favicon.jpg">
<meta property="og:type" content="website">
<meta property="og:site_name" content="AmericaCalculator.com">
<meta property="og:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Free Online Calculators'; ?>">
<meta property="og:description" content="<?php echo isset($metaDescription) ? htmlspecialchars($metaDescription) : 'Free online calculators.'; ?>">
<meta property="og:url" content="<?php echo $_canonical; ?>">
<meta property="og:image" content="https://americacalculator.com/image/logo-america%20calculator.jpg">
<meta name="twitter:card" content="summary_large_image">"""

import re
text = re.sub(r'<\?php.*?<link rel="stylesheet"', correct_head + '\n<link rel="stylesheet"', text, flags=re.DOTALL, count=1)

with open(p, "w", encoding="utf-8") as f:
    f.write(text)

print("Fixed top of header.php!")
