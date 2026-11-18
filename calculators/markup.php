<?php
$pageTitle = 'Markup Calculator';
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cost = floatval($_POST['cost'] ?? 0);
    $markup_percent = floatval($_POST['markup_percent'] ?? 0);
    
    if ($err = validate_positive_number($cost, 'Cost')) $errors[] = $err;
    if ($err = validate_positive_number($markup_percent, 'Markup percentage')) $errors[] = $err;
    
    if (empty($errors)) {
        $markup_amount = $cost * ($markup_percent / 100);
        $selling_price = $cost + $markup_amount;
        $profit_margin = ($markup_amount / $selling_price) * 100;
        $revenue = $selling_price;
        
        $result = [
            'cost' => number_format($cost, 2),
            'markup_amount' => number_format($markup_amount, 2),
            'selling_price' => number_format($selling_price, 2),
            'profit_margin' => round($profit_margin, 2),
            'markup_percent' => $markup_percent
        ];
    }
}
?>

<div class="calculator-page">
    <h1>Markup Calculator</h1>
    <p class="description">Calculate selling price, markup amount, and profit margin based on cost and desired markup percentage.</p>
    
    <?php if (!empty($errors)): ?>
    <div class="result-section" style="border-left-color: #e74c3c; background: #fee;">
        <h2>Validation Errors</h2>
        <?php foreach ($errors as $error): ?>
            <div style="color: #e74c3c; margin-bottom: 10px;"><?php echo sanitize_output($error); ?></div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="cost">Cost ($):</label>
            <input type="number" step="any" id="cost" name="cost" required value="<?php echo sanitize_output($_POST['cost'] ?? ''); ?>">
            <small>Your cost or wholesale price</small>
        </div>
        
        <div class="form-group">
            <label for="markup_percent">Markup Percentage (%):</label>
            <input type="number" step="any" id="markup_percent" name="markup_percent" required value="<?php echo sanitize_output($_POST['markup_percent'] ?? ''); ?>">
            <small>Typical retail markup: 50-100%</small>
        </div>
        
        <button type="submit" class="btn">Calculate Markup</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Pricing Results</h2>
        <div class="result-item">
            <strong>Cost:</strong> $<?php echo $result['cost']; ?>
        </div>
        <div class="result-item">
            <strong>Markup (<?php echo $result['markup_percent']; ?>%):</strong> $<?php echo $result['markup_amount']; ?>
        </div>
        <div class="result-item">
            <strong>Selling Price:</strong> $<?php echo $result['selling_price']; ?>
        </div>
        <div class="result-item">
            <strong>Profit Margin:</strong> <?php echo $result['profit_margin']; ?>%
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
