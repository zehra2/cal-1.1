<?php
$pageTitle = 'Cap Rate Calculator';
$metaDescription = 'Calculate capitalization rate for real estate investments. Free cap rate calculator for property investors.';
$metaKeywords = 'cap rate calculator, capitalization rate, real estate investment, property analysis';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'Cap Rate Calculator',
    'description' => 'Calculate capitalization rate for real estate',
    'applicationCategory' => 'FinanceApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $noi = floatval($_POST['noi']);
    $property_value = floatval($_POST['property_value']);
    
    if ($property_value > 0) {
        $cap_rate = ($noi / $property_value) * 100;
        
        $result = [
            'cap_rate' => round($cap_rate, 2),
            'noi' => number_format($noi, 2),
            'property_value' => number_format($property_value, 2)
        ];
    }
}
?>

<div class="calculator-page">
    <h1>Cap Rate Calculator</h1>
    <p class="description">Calculate the capitalization rate for real estate investment properties.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="noi">Net Operating Income (NOI) ($):</label>
            <input type="number" step="any" id="noi" name="noi" required value="<?php echo sanitize_output($_POST['noi'] ?? ''); ?>">
            <small>Annual rental income minus operating expenses</small>
        </div>
        
        <div class="form-group">
            <label for="property_value">Property Value ($):</label>
            <input type="number" step="any" id="property_value" name="property_value" required value="<?php echo sanitize_output($_POST['property_value'] ?? ''); ?>">
        </div>
        
        <button type="submit" class="btn">Calculate Cap Rate</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Cap Rate Results</h2>
        <div class="result-item highlight">
            <strong>Capitalization Rate:</strong> <?php echo $result['cap_rate']; ?>%
        </div>
        <div class="result-item">
            <strong>Net Operating Income:</strong> $<?php echo $result['noi']; ?>
        </div>
        <div class="result-item">
            <strong>Property Value:</strong> $<?php echo $result['property_value']; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
