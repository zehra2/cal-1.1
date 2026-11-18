<?php
$pageTitle = 'Cumulative GPA Calculator';
$metaDescription = 'Calculate your cumulative GPA across multiple semesters. Free GPA calculator for college and high school students.';
$metaKeywords = 'gpa calculator, cumulative gpa, grade point average, college gpa calculator';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'Cumulative GPA Calculator',
    'description' => 'Calculate cumulative grade point average',
    'applicationCategory' => 'EducationalApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $total_credits = floatval($_POST['total_credits']);
    $total_points = floatval($_POST['total_points']);
    
    if ($total_credits > 0) {
        $gpa = $total_points / $total_credits;
        
        $result = [
            'gpa' => round($gpa, 2),
            'total_credits' => $total_credits,
            'total_points' => $total_points
        ];
    }
}
?>

<div class="calculator-page">
    <h1>Cumulative GPA Calculator</h1>
    <p class="description">Calculate your cumulative grade point average across all semesters.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="total_credit">Total Credit Hours:</label>
            <input type="number" step="any" id="total_credit" name="total_credit" required value="<?php echo sanitize_output($_POST['total_credits'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="total_point">Total Grade Points:</label>
            <input type="number" step="any" id="total_point" name="total_point" required value="<?php echo sanitize_output($_POST['total_points'] ?? ''); ?>">
            <small>Grade points = Credits × Grade Value (A=4.0, B=3.0, C=2.0, D=1.0)</small>
        </div>
        
        <button type="submit" class="btn">Calculate GPA</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Your Cumulative GPA</h2>
        <div class="result-item highlight">
            <strong>Cumulative GPA:</strong> <?php echo $result['gpa']; ?>
        </div>
        <div class="result-item">
            <strong>Total Credits:</strong> <?php echo $result['total_credits']; ?>
        </div>
        <div class="result-item">
            <strong>Total Grade Points:</strong> <?php echo $result['total_points']; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
