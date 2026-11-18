<?php
$pageTitle = 'Interest Only Loan Calculator';
$metaDescription = 'Calculate interest-only loan payments and total costs. Free interest-only mortgage calculator with amortization schedule.';
$metaKeywords = 'interest only loan calculator, interest only mortgage, loan payment calculator';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'Interest Only Loan Calculator',
    'description' => 'Calculate interest-only loan payments',
    'applicationCategory' => 'FinanceApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loan_amount = floatval($_POST['loan_amount']);
    $interest_rate = floatval($_POST['interest_rate']) / 100;
    $io_period = floatval($_POST['io_period']);
    $loan_term = floatval($_POST['loan_term']);
    
    $monthly_rate = $interest_rate / 12;
    $io_payment = $loan_amount * $monthly_rate;
    
    $amortization_months = ($loan_term - $io_period) * 12;
    if ($amortization_months > 0 && $monthly_rate > 0) {
        $principal_payment = $loan_amount * ($monthly_rate * pow(1 + $monthly_rate, $amortization_months)) / 
                             (pow(1 + $monthly_rate, $amortization_months) - 1);
    } else {
        $principal_payment = 0;
    }
    
    $total_io_payments = $io_payment * $io_period * 12;
    $total_principal_payments = $principal_payment * $amortization_months;
    $total_paid = $total_io_payments + $total_principal_payments;
    $total_interest = $total_paid - $loan_amount;
    
    $result = [
        'io_payment' => number_format($io_payment, 2),
        'principal_payment' => number_format($principal_payment, 2),
        'total_interest' => number_format($total_interest, 2),
        'total_paid' => number_format($total_paid, 2),
        'io_period' => $io_period
    ];
}
?>

<div class="calculator-page">
    <h1>Interest Only Loan Calculator</h1>
    <p class="description">Calculate payments for interest-only loans and mortgages.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="loan_amount">Loan Amount ($):</label>
            <input type="number" step="any" id="loan_amount" name="loan_amount" required value="<?php echo sanitize_output($_POST['loan_amount'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="interest_rate">Annual Interest Rate (%):</label>
            <input type="number" step="any" id="interest_rate" name="interest_rate" required value="<?php echo sanitize_output($_POST['interest_rate'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="io_period">Interest-Only Period (years):</label>
            <input type="number" step="any" id="io_period" name="io_period" required value="<?php echo sanitize_output($_POST['io_period'] ?? '5'); ?>">
        </div>
        
        <div class="form-group">
            <label for="loan_term">Total Loan Term (years):</label>
            <input type="number" step="any" id="loan_term" name="loan_term" required value="<?php echo sanitize_output($_POST['loan_term'] ?? '30'); ?>">
        </div>
        
        <button type="submit" class="btn">Calculate</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Interest-Only Loan Results</h2>
        <div class="result-item highlight">
            <strong>Interest-Only Payment:</strong> $<?php echo $result['io_payment']; ?>/month
        </div>
        <div class="result-item">
            <strong>Full Payment (after <?php echo $result['io_period']; ?> years):</strong> $<?php echo $result['principal_payment']; ?>/month
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
