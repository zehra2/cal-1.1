<?php
$pageTitle = 'Freelance Rate Calculator';
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $desired_salary = floatval($_POST['desired_salary'] ?? 0);
    $billable_hours = floatval($_POST['billable_hours'] ?? 0);
    $expenses = floatval($_POST['expenses'] ?? 0);
    $profit_margin = floatval($_POST['profit_margin'] ?? 0) / 100;
    
    if ($err = validate_positive_number($desired_salary, 'Desired salary')) $errors[] = $err;
    if ($err = validate_positive_number($billable_hours, 'Billable hours')) $errors[] = $err;
    if ($err = validate_positive_number($expenses, 'Expenses')) $errors[] = $err;
    if ($err = validate_number_range($profit_margin * 100, 'Profit margin', 0, 100)) $errors[] = $err;
    
    if (empty($errors)) {
    
    $working_weeks = 48;
    $total_billable_hours = $billable_hours * $working_weeks;
    
    $total_costs = $desired_salary + $expenses;
    $revenue_needed = $total_costs / (1 - $profit_margin);
    
    $hourly_rate = $revenue_needed / $total_billable_hours;
    
    $daily_rate = $hourly_rate * 8;
    $monthly_revenue = ($hourly_rate * $billable_hours) * 4;
    
        $result = [
            'hourly_rate' => number_format($hourly_rate, 2),
            'daily_rate' => number_format($daily_rate, 2),
            'monthly_revenue' => number_format($monthly_revenue, 2),
            'annual_revenue' => number_format($revenue_needed, 2),
            'profit' => number_format($revenue_needed - $total_costs, 2)
        ];
    }
}
?>

<div class="calculator-page">
    <h1>Freelance Rate Calculator</h1>
    <p class="description">Calculate your ideal freelance hourly rate based on desired income, expenses, and profit goals.</p>
    
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
            <label for="desired_salary">Desired Annual Salary ($):</label>
            <input type="number" step="any" id="desired_salary" name="desired_salary" required value="<?php echo sanitize_output($_POST['desired_salary'] ?? ''); ?>">
            <small>What you want to take home annually</small>
        </div>
        
        <div class="form-group">
            <label for="billable_hour">Billable Hours per Week:</label>
            <input type="number" step="any" id="billable_hour" name="billable_hour" required value="<?php echo sanitize_output($_POST['billable_hours'] ?? ''); ?>">
            <small>Actual hours you can bill to clients (typically 20-35)</small>
        </div>
        
        <div class="form-group">
            <label for="expense">Annual Business Expenses ($):</label>
            <input type="number" step="any" id="expense" name="expense" required value="<?php echo sanitize_output($_POST['expenses'] ?? ''); ?>">
            <small>Software, hardware, insurance, taxes, etc.</small>
        </div>
        
        <div class="form-group">
            <label for="profit_margin">Desired Profit Margin (%):</label>
            <input type="number" step="any" id="profit_margin" name="profit_margin" required value="<?php echo sanitize_output($_POST['profit_margin'] ?? '20'); ?>">
            <small>Recommended: 15-30%</small>
        </div>
        
        <button type="submit" class="btn">Calculate Rate</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Your Freelance Rates</h2>
        <div class="result-item">
            <strong>Hourly Rate:</strong> $<?php echo $result['hourly_rate']; ?>/hour
        </div>
        <div class="result-item">
            <strong>Daily Rate (8 hours):</strong> $<?php echo $result['daily_rate']; ?>/day
        </div>
        <div class="result-item">
            <strong>Estimated Monthly Revenue:</strong> $<?php echo $result['monthly_revenue']; ?>
        </div>
        <div class="result-item">
            <strong>Annual Revenue Target:</strong> $<?php echo $result['annual_revenue']; ?>
        </div>
        <div class="result-item">
            <strong>Annual Profit:</strong> $<?php echo $result['profit']; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
