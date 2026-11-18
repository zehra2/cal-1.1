<?php
$pageTitle = 'Corrected Calcium Calculator';
$metaDescription = 'Calculate corrected calcium levels based on albumin. Free corrected calcium calculator for healthcare professionals.';
$metaKeywords = 'corrected calcium calculator, calcium levels, albumin, medical calculator';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'Corrected Calcium Calculator',
    'description' => 'Calculate corrected calcium levels',
    'applicationCategory' => 'HealthApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $total_calcium = floatval($_POST['total_calcium']);
    $albumin = floatval($_POST['albumin']);
    
    $corrected_calcium = $total_calcium + 0.8 * (4.0 - $albumin);
    
    if ($corrected_calcium < 8.5) {
        $status = 'Low (Hypocalcemia)';
    } elseif ($corrected_calcium > 10.5) {
        $status = 'High (Hypercalcemia)';
    } else {
        $status = 'Normal';
    }
    
    $result = [
        'corrected_calcium' => round($corrected_calcium, 2),
        'total_calcium' => $total_calcium,
        'albumin' => $albumin,
        'status' => $status
    ];
}
?>

<div class="calculator-page">
    <h1>Corrected Calcium Calculator</h1>
    <p class="description">Calculate corrected calcium levels based on albumin concentration.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="total_calcium">Total Calcium (mg/dL):</label>
            <input type="number" step="any" id="total_calcium" name="total_calcium" required value="<?php echo sanitize_output($_POST['total_calcium'] ?? ''); ?>">
            <small>Normal range: 8.5-10.5 mg/dL</small>
        </div>
        
        <div class="form-group">
            <label for="albumin">Albumin (g/dL):</label>
            <input type="number" step="any" id="albumin" name="albumin" required value="<?php echo sanitize_output($_POST['albumin'] ?? ''); ?>">
            <small>Normal range: 3.4-5.4 g/dL</small>
        </div>
        
        <button type="submit" class="btn">Calculate</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Corrected Calcium Results</h2>
        <div class="result-item highlight">
            <strong>Corrected Calcium:</strong> <?php echo $result['corrected_calcium']; ?> mg/dL
        </div>
        <div class="result-item">
            <strong>Status:</strong> <?php echo $result['status']; ?>
        </div>
        <div class="result-item">
            <strong>Total Calcium:</strong> <?php echo $result['total_calcium']; ?> mg/dL
        </div>
        <div class="result-item">
            <strong>Albumin:</strong> <?php echo $result['albumin']; ?> g/dL
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
