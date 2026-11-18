<?php
$pageTitle = 'RV Loan Calculator';
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loan_amount = floatval($_POST['loan_amount']);
    $down_payment = floatval($_POST['down_payment']);
    $interest_rate = floatval($_POST['interest_rate']) / 100;
    $loan_term = intval($_POST['loan_term']);
    
    $amount_financed = $loan_amount - $down_payment;
    $monthly_rate = $interest_rate / 12;
    $num_payments = $loan_term * 12;
    
    if ($monthly_rate > 0) {
        $monthly_payment = $amount_financed * ($monthly_rate * pow(1 + $monthly_rate, $num_payments)) / 
                          (pow(1 + $monthly_rate, $num_payments) - 1);
    } else {
        $monthly_payment = $amount_financed / $num_payments;
    }
    
    $total_paid = $monthly_payment * $num_payments;
    $total_interest = $total_paid - $amount_financed;
    
    $result = [
        'monthly_payment' => number_format($monthly_payment, 2),
        'total_paid' => number_format($total_paid, 2),
        'total_interest' => number_format($total_interest, 2),
        'amount_financed' => number_format($amount_financed, 2),
        'down_payment' => number_format($down_payment, 2)
    ];
}
?>

<div class="calculator-page">
    <h1>RV Loan Calculator</h1>
    <p class="description">Calculate monthly payments and total cost for your RV loan.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="loan_amount">RV Price ($):</label>
            <input type="number" step="any" id="loan_amount" name="loan_amount" required value="<?php echo sanitize_output($_POST['loan_amount'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="down_payment">Down Payment ($):</label>
            <input type="number" step="any" id="down_payment" name="down_payment" required value="<?php echo sanitize_output($_POST['down_payment'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="interest_rate">Interest Rate (%):</label>
            <input type="number" step="any" id="interest_rate" name="interest_rate" required value="<?php echo sanitize_output($_POST['interest_rate'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="loan_term">Loan Term (years):</label>
            <select id="loan_term" name="loan_term">
                <option value="5" <?php echo ($_POST['loan_term'] ?? '') == '5' ? 'selected' : ''; ?>>5 years</option>
                <option value="10" <?php echo ($_POST['loan_term'] ?? '10') == '10' ? 'selected' : ''; ?>>10 years</option>
                <option value="15" <?php echo ($_POST['loan_term'] ?? '') == '15' ? 'selected' : ''; ?>>15 years</option>
                <option value="20" <?php echo ($_POST['loan_term'] ?? '') == '20' ? 'selected' : ''; ?>>20 years</option>
            </select>
        </div>
        
        <button type="submit" class="btn">Calculate Payment</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Loan Payment Results</h2>
        <div class="result-item">
            <strong>Down Payment:</strong> $<?php echo $result['down_payment']; ?>
        </div>
        <div class="result-item">
            <strong>Amount Financed:</strong> $<?php echo $result['amount_financed']; ?>
        </div>
        <div class="result-item">
            <strong>Monthly Payment:</strong> $<?php echo $result['monthly_payment']; ?>
        </div>
        <div class="result-item">
            <strong>Total Interest Paid:</strong> $<?php echo $result['total_interest']; ?>
        </div>
        <div class="result-item">
            <strong>Total Amount Paid:</strong> $<?php echo $result['total_paid']; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
