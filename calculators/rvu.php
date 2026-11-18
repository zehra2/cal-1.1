<?php
$pageTitle = 'RVU Calculator';
$metaDescription = 'Calculate Relative Value Units (RVU) for medical billing and physician compensation. Free RVU calculator for healthcare providers.';
$metaKeywords = 'rvu calculator, relative value units, medical billing, physician compensation';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'RVU Calculator',
    'description' => 'Calculate Relative Value Units for medical billing',
    'applicationCategory' => 'HealthApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $work_rvu = floatval($_POST['work_rvu']);
    $practice_expense_rvu = floatval($_POST['practice_expense_rvu']);
    $malpractice_rvu = floatval($_POST['malpractice_rvu']);
    $conversion_factor = floatval($_POST['conversion_factor']);
    
    $total_rvu = $work_rvu + $practice_expense_rvu + $malpractice_rvu;
    $payment = $total_rvu * $conversion_factor;
    
    $result = [
        'total_rvu' => round($total_rvu, 2),
        'payment' => number_format($payment, 2),
        'work_rvu' => $work_rvu,
        'practice_expense_rvu' => $practice_expense_rvu,
        'malpractice_rvu' => $malpractice_rvu,
        'conversion_factor' => $conversion_factor
    ];
}
?>

<div class="calculator-page">
    <h1>RVU Calculator</h1>
    <p class="description">Calculate Relative Value Units for medical billing and physician compensation.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="work_rvu">Work RVU:</label>
            <input type="number" step="any" id="work_rvu" name="work_rvu" required value="<?php echo sanitize_output($_POST['work_rvu'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="practice_expense_rvu">Practice Expense RVU:</label>
            <input type="number" step="any" id="practice_expense_rvu" name="practice_expense_rvu" required value="<?php echo sanitize_output($_POST['practice_expense_rvu'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="malpractice_rvu">Malpractice RVU:</label>
            <input type="number" step="any" id="malpractice_rvu" name="malpractice_rvu" required value="<?php echo sanitize_output($_POST['malpractice_rvu'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="conversion_factor">Conversion Factor ($):</label>
            <input type="number" step="any" id="conversion_factor" name="conversion_factor" required value="<?php echo sanitize_output($_POST['conversion_factor'] ?? '36.09'); ?>">
            <small>CMS conversion factor (e.g., $36.09 for 2024)</small>
        </div>
        
        <button type="submit" class="btn">Calculate RVU</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>RVU Calculation Results</h2>
        <div class="result-item highlight">
            <strong>Total RVU:</strong> <?php echo $result['total_rvu']; ?>
        </div>
        <div class="result-item highlight">
            <strong>Estimated Payment:</strong> $<?php echo $result['payment']; ?>
        </div>
        <div class="result-item">
            <strong>Work RVU:</strong> <?php echo $result['work_rvu']; ?>
        </div>
        <div class="result-item">
            <strong>Practice Expense RVU:</strong> <?php echo $result['practice_expense_rvu']; ?>
        </div>
        <div class="result-item">
            <strong>Malpractice RVU:</strong> <?php echo $result['malpractice_rvu']; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
