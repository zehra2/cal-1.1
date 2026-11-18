<?php
$pageTitle = 'Inverse Matrix Calculator';
$metaDescription = 'Calculate the inverse of a 2x2 matrix online. Free inverse matrix calculator with step-by-step solutions.';
$metaKeywords = 'inverse matrix calculator, matrix inverse, linear algebra, 2x2 matrix inverse';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'Inverse Matrix Calculator',
    'description' => 'Calculate inverse of a matrix',
    'applicationCategory' => 'MathApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = floatval($_POST['m11']);
    $b = floatval($_POST['m12']);
    $c = floatval($_POST['m21']);
    $d = floatval($_POST['m22']);
    
    $det = ($a * $d) - ($b * $c);
    
    if ($det != 0) {
        $inv_a = $d / $det;
        $inv_b = -$b / $det;
        $inv_c = -$c / $det;
        $inv_d = $a / $det;
        
        $result = [
            'inv11' => round($inv_a, 4),
            'inv12' => round($inv_b, 4),
            'inv21' => round($inv_c, 4),
            'inv22' => round($inv_d, 4),
            'determinant' => round($det, 4)
        ];
    } else {
        $result = ['error' => 'Matrix is singular (determinant = 0), inverse does not exist.'];
    }
}
?>

<div class="calculator-page">
    <h1>Inverse Matrix Calculator</h1>
    <p class="description">Calculate the inverse of a 2×2 matrix.</p>
    
    <form method="POST" class="calculator-form">
        <div class="matrix-input">
            <label>Matrix Elements (2×2):</label>
            <div class="matrix-row">
                <input type="number" step="any" name="m11" placeholder="1,1" value="<?php echo sanitize_output($_POST['m11'] ?? ''); ?>" required>
                <input type="number" step="any" name="m12" placeholder="1,2" value="<?php echo sanitize_output($_POST['m12'] ?? ''); ?>" required>
            </div>
            <div class="matrix-row">
                <input type="number" step="any" name="m21" placeholder="2,1" value="<?php echo sanitize_output($_POST['m21'] ?? ''); ?>" required>
                <input type="number" step="any" name="m22" placeholder="2,2" value="<?php echo sanitize_output($_POST['m22'] ?? ''); ?>" required>
            </div>
        </div>
        
        <button type="submit" class="btn">Calculate Inverse</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Inverse Matrix Result</h2>
        <?php if (isset($result['error'])): ?>
            <div class="result-item error">
                <strong>Error:</strong> <?php echo $result['error']; ?>
            </div>
        <?php else: ?>
            <div class="result-item">
                <strong>Determinant:</strong> <?php echo $result['determinant']; ?>
            </div>
            <div class="result-item">
                <strong>Inverse Matrix:</strong>
                <div class="matrix-display">
                    <div>[<?php echo $result['inv11']; ?>, <?php echo $result['inv12']; ?>]</div>
                    <div>[<?php echo $result['inv21']; ?>, <?php echo $result['inv22']; ?>]</div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
