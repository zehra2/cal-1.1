<?php
$pageTitle = 'Land Loan Calculator';
$metaDescription = 'Calculate land loan payments, total interest, and amortization schedule. Free land loan calculator for raw land purchases.';
$metaKeywords = 'land loan calculator, land financing, raw land loan, property loan calculator';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'Land Loan Calculator',
    'description' => 'Calculate land loan payments and total interest',
    'applicationCategory' => 'FinanceApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $land_price = floatval($_POST['land_price']);
    $down_payment = floatval($_POST['down_payment']);
    $interest_rate = floatval($_POST['interest_rate']) / 100 / 12;
    $loan_term = floatval($_POST['loan_term']) * 12;
    
    $loan_amount = $land_price - $down_payment;
    
    if ($interest_rate > 0) {
        $monthly_payment = $loan_amount * ($interest_rate * pow(1 + $interest_rate, $loan_term)) / 
                          (pow(1 + $interest_rate, $loan_term) - 1);
    } else {
        $monthly_payment = $loan_amount / $loan_term;
    }
    
    $total_paid = $monthly_payment * $loan_term;
    $total_interest = $total_paid - $loan_amount;
    
    $result = [
        'monthly_payment' => number_format($monthly_payment, 2),
        'loan_amount' => number_format($loan_amount, 2),
        'total_interest' => number_format($total_interest, 2),
        'total_paid' => number_format($total_paid, 2),
        'down_payment' => number_format($down_payment, 2)
    ];
}
?>

<div class="calculator-page">
    <h1>Land Loan Calculator</h1>
    <p class="description">Calculate monthly payments and total interest for land loans.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="land_price">Land Price ($):</label>
            <input type="number" step="any" id="land_price" name="land_price" required value="<?php echo sanitize_output($_POST['land_price'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="down_payment">Down Payment ($):</label>
            <input type="number" step="any" id="down_payment" name="down_payment" required value="<?php echo sanitize_output($_POST['down_payment'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="interest_rate">Annual Interest Rate (%):</label>
            <input type="number" step="any" id="interest_rate" name="interest_rate" required value="<?php echo sanitize_output($_POST['interest_rate'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="loan_term">Loan Term (years):</label>
            <input type="number" step="any" id="loan_term" name="loan_term" required value="<?php echo sanitize_output($_POST['loan_term'] ?? ''); ?>">
        </div>
        
        <button type="submit" class="btn">Calculate Payment</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Land Loan Results</h2>
        <div class="result-item highlight">
            <strong>Monthly Payment:</strong> $<?php echo $result['monthly_payment']; ?>
        </div>
        <div class="result-item">
            <strong>Loan Amount:</strong> $<?php echo $result['loan_amount']; ?>
        </div>
        <div class="result-item">
            <strong>Down Payment:</strong> $<?php echo $result['down_payment']; ?>
        </div>
        <div class="result-item">
            <strong>Total Interest:</strong> $<?php echo $result['total_interest']; ?>
        </div>
        <div class="result-item">
            <strong>Total Amount Paid:</strong> $<?php echo $result['total_paid']; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
