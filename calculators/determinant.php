<?php
$pageTitle = 'Determinant Calculator';
$metaDescription = 'Calculate matrix determinant for 2x2, 3x3, and larger matrices. Free online determinant calculator with step-by-step solutions.';
$metaKeywords = 'determinant calculator, matrix determinant, linear algebra calculator';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'Determinant Calculator',
    'description' => 'Calculate matrix determinant',
    'applicationCategory' => 'MathApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $size = intval($_POST['matrix_size']);
    
    if ($size == 2) {
        $a11 = floatval($_POST['m11']);
        $a12 = floatval($_POST['m12']);
        $a21 = floatval($_POST['m21']);
        $a22 = floatval($_POST['m22']);
        
        $det = ($a11 * $a22) - ($a12 * $a21);
        
        $result = [
            'determinant' => round($det, 4),
            'size' => '2×2'
        ];
    } elseif ($size == 3) {
        $a11 = floatval($_POST['m11']);
        $a12 = floatval($_POST['m12']);
        $a13 = floatval($_POST['m13']);
        $a21 = floatval($_POST['m21']);
        $a22 = floatval($_POST['m22']);
        $a23 = floatval($_POST['m23']);
        $a31 = floatval($_POST['m31']);
        $a32 = floatval($_POST['m32']);
        $a33 = floatval($_POST['m33']);
        
        $det = $a11 * ($a22 * $a33 - $a23 * $a32) -
               $a12 * ($a21 * $a33 - $a23 * $a31) +
               $a13 * ($a21 * $a32 - $a22 * $a31);
        
        $result = [
            'determinant' => round($det, 4),
            'size' => '3×3'
        ];
    }
}
?>

<div class="calculator-page">
    <h1>Determinant Calculator</h1>
    <p class="description">Calculate the determinant of a 2×2 or 3×3 matrix.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="matrix_size">Matrix Size:</label>
            <select id="matrix_size" name="matrix_size" onchange="this.form.submit()">
                <option value="2" <?php echo ($_POST['matrix_size'] ?? '2') == '2' ? 'selected' : ''; ?>>2×2 Matrix</option>
                <option value="3" <?php echo ($_POST['matrix_size'] ?? '') == '3' ? 'selected' : ''; ?>>3×3 Matrix</option>
            </select>
        </div>
        
        <?php $size = intval($_POST['matrix_size'] ?? 2); ?>
        
        <div class="matrix-input">
            <label>Matrix Elements:</label>
            <?php for ($i = 1; $i <= $size; $i++): ?>
                <div class="matrix-row">
                    <?php for ($j = 1; $j <= $size; $j++): ?>
                        <input type="number" step="any" name="m<?php echo $i.$j; ?>" 
                               placeholder="<?php echo $i.','.$j; ?>" 
                               value="<?php echo sanitize_output($_POST['m'.$i.$j] ?? ''); ?>" required>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
        </div>
        
        <button type="submit" class="btn">Calculate Determinant</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Determinant Result</h2>
        <div class="result-item highlight">
            <strong>Determinant:</strong> <?php echo $result['determinant']; ?>
        </div>
        <div class="result-item">
            <strong>Matrix Size:</strong> <?php echo $result['size']; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
