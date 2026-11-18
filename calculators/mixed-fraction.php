<?php
$pageTitle = 'Mixed Fraction Calculator';
$metaDescription = 'Add, subtract, multiply and divide mixed fractions and improper fractions. Free online mixed fraction calculator with step-by-step solutions.';
$metaKeywords = 'mixed fraction calculator, fraction calculator, add fractions, subtract fractions';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'Mixed Fraction Calculator',
    'description' => 'Calculate operations with mixed fractions',
    'applicationCategory' => 'MathApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

function gcd($a, $b) {
    $a = abs($a);
    $b = abs($b);
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $whole1 = floatval($_POST['whole1']);
    $num1 = floatval($_POST['numerator1']);
    $den1 = floatval($_POST['denominator1']);
    
    $whole2 = floatval($_POST['whole2']);
    $num2 = floatval($_POST['numerator2']);
    $den2 = floatval($_POST['denominator2']);
    
    $operation = $_POST['operation'];
    
    $frac1 = $whole1 * $den1 + $num1;
    $frac2 = $whole2 * $den2 + $num2;
    
    if ($operation == 'add') {
        $result_num = $frac1 * $den2 + $frac2 * $den1;
        $result_den = $den1 * $den2;
    } elseif ($operation == 'subtract') {
        $result_num = $frac1 * $den2 - $frac2 * $den1;
        $result_den = $den1 * $den2;
    } elseif ($operation == 'multiply') {
        $result_num = $frac1 * $frac2;
        $result_den = $den1 * $den2;
    } elseif ($operation == 'divide') {
        $result_num = $frac1 * $den2;
        $result_den = $den1 * $frac2;
    }
    
    $gcd = gcd($result_num, $result_den);
    $result_num = $result_num / $gcd;
    $result_den = $result_den / $gcd;
    
    $whole_result = floor(abs($result_num) / $result_den);
    $numerator_result = abs($result_num) % $result_den;
    if ($result_num < 0) $whole_result = -$whole_result;
    
    $result = [
        'whole' => $whole_result,
        'numerator' => $numerator_result,
        'denominator' => $result_den,
        'operation' => $operation
    ];
}
?>

<div class="calculator-page">
    <h1>Mixed Fraction Calculator</h1>
    <p class="description">Add, subtract, multiply, and divide mixed fractions.</p>
    
    <form method="POST" class="calculator-form">
        <div class="fraction-group">
            <label>First Fraction:</label>
            <div class="fraction-input">
                <input type="number" name="whole1" placeholder="Whole" value="<?php echo sanitize_output($_POST['whole1'] ?? '0'); ?>">
                <input type="number" name="numerator1" placeholder="Numerator" value="<?php echo sanitize_output($_POST['numerator1'] ?? '1'); ?>" required>
                <span>/</span>
                <input type="number" name="denominator1" placeholder="Denominator" value="<?php echo sanitize_output($_POST['denominator1'] ?? '2'); ?>" required>
            </div>
        </div>
        
        <div class="form-group">
            <label for="operation">Operation:</label>
            <select id="operation" name="operation">
                <option value="add" <?php echo ($_POST['operation'] ?? '') == 'add' ? 'selected' : ''; ?>>Add (+)</option>
                <option value="subtract" <?php echo ($_POST['operation'] ?? '') == 'subtract' ? 'selected' : ''; ?>>Subtract (-)</option>
                <option value="multiply" <?php echo ($_POST['operation'] ?? '') == 'multiply' ? 'selected' : ''; ?>>Multiply (×)</option>
                <option value="divide" <?php echo ($_POST['operation'] ?? '') == 'divide' ? 'selected' : ''; ?>>Divide (A)</option>
            </select>
        </div>
        
        <div class="fraction-group">
            <label>Second Fraction:</label>
            <div class="fraction-input">
                <input type="number" name="whole2" placeholder="Whole" value="<?php echo sanitize_output($_POST['whole2'] ?? '0'); ?>">
                <input type="number" name="numerator2" placeholder="Numerator" value="<?php echo sanitize_output($_POST['numerator2'] ?? '1'); ?>" required>
                <span>/</span>
                <input type="number" name="denominator2" placeholder="Denominator" value="<?php echo sanitize_output($_POST['denominator2'] ?? '2'); ?>" required>
            </div>
        </div>
        
        <button type="submit" class="btn">Calculate</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Result</h2>
        <div class="result-item highlight">
            <strong>Answer:</strong> <?php echo $result['whole']; ?> <?php echo $result['numerator']; ?>/<?php echo $result['denominator']; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
