<?php
$pageTitle = 'SBA Loan Calculator';
$metaDescription = 'Calculate Small Business Administration loan payments and total costs. Free SBA 7(a) and 504 loan calculator.';
$metaKeywords = 'sba loan calculator, small business loan, sba 7a loan, business financing';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'SBA Loan Calculator',
    'description' => 'Calculate SBA loan payments',
    'applicationCategory' => 'FinanceApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loan_amount = floatval($_POST['loan_amount']);
    $interest_rate = floatval($_POST['interest_rate']) / 100 / 12;
    $loan_term = floatval($_POST['loan_term']) * 12;
    
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
        'total_interest' => number_format($total_interest, 2),
        'total_paid' => number_format($total_paid, 2),
        'loan_amount' => number_format($loan_amount, 2)
    ];
}
?>

<div class="calculator-page">
    <h1>SBA Loan Calculator</h1>
    <p class="description">Calculate monthly payments for Small Business Administration (SBA) loans.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="loan_amount">Loan Amount ($):</label>
            <input type="number" step="any" id="loan_amount" name="loan_amount" required value="<?php echo sanitize_output($_POST['loan_amount'] ?? ''); ?>">
            <small>SBA 7(a) loans up to $5 million</small>
        </div>
        
        <div class="form-group">
            <label for="interest_rate">Annual Interest Rate (%):</label>
            <input type="number" step="any" id="interest_rate" name="interest_rate" required value="<?php echo sanitize_output($_POST['interest_rate'] ?? ''); ?>">
            <small>Typically Prime + 2.25% to 2.75%</small>
        </div>
        
        <div class="form-group">
            <label for="loan_term">Loan Term (years):</label>
            <input type="number" step="any" id="loan_term" name="loan_term" required value="<?php echo sanitize_output($_POST['loan_term'] ?? '10'); ?>">
            <small>Up to 10 years for working capital, 25 years for real estate</small>
        </div>
        
        <button type="submit" class="btn">Calculate Payment</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>SBA Loan Results</h2>
        <div class="result-item highlight">
            <strong>Monthly Payment:</strong> $<?php echo $result['monthly_payment']; ?>
        </div>
        <div class="result-item">
            <strong>Loan Amount:</strong> $<?php echo $result['loan_amount']; ?>
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
