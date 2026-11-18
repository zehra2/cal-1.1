<?php
$pageTitle = 'FFMI Calculator';
$metaDescription = 'Calculate Fat-Free Mass Index (FFMI) for bodybuilding and fitness tracking. Free FFMI calculator with normalized scores.';
$metaKeywords = 'ffmi calculator, fat free mass index, bodybuilding calculator, lean muscle mass';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'FFMI Calculator',
    'description' => 'Calculate Fat-Free Mass Index',
    'applicationCategory' => 'HealthApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $weight = floatval($_POST['weight']);
    $height = floatval($_POST['height']);
    $body_fat = floatval($_POST['body_fat']);
    
    $lean_mass = $weight * (1 - $body_fat / 100);
    $height_m = $height / 100;
    
    $ffmi = $lean_mass / ($height_m * $height_m);
    $normalized_ffmi = $ffmi + 6.1 * (1.8 - $height_m);
    
    if ($ffmi < 17) {
        $category = 'Below Average';
    } elseif ($ffmi < 19) {
        $category = 'Average';
    } elseif ($ffmi < 21) {
        $category = 'Above Average';
    } elseif ($ffmi < 23) {
        $category = 'Excellent';
    } elseif ($ffmi < 25) {
        $category = 'Superior';
    } else {
        $category = 'Elite/Suspect';
    }
    
    $result = [
        'ffmi' => round($ffmi, 1),
        'normalized_ffmi' => round($normalized_ffmi, 1),
        'lean_mass' => round($lean_mass, 1),
        'category' => $category
    ];
}
?>

<div class="calculator-page">
    <h1>FFMI Calculator</h1>
    <p class="description">Calculate your Fat-Free Mass Index for bodybuilding and fitness tracking.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="weight">Body Weight (kg):</label>
            <input type="number" step="any" id="weight" name="weight" required value="<?php echo sanitize_output($_POST['weight'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="height">Height (cm):</label>
            <input type="number" step="any" id="height" name="height" required value="<?php echo sanitize_output($_POST['height'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="body_fat">Body Fat Percentage (%):</label>
            <input type="number" step="any" id="body_fat" name="body_fat" required value="<?php echo sanitize_output($_POST['body_fat'] ?? ''); ?>">
        </div>
        
        <button type="submit" class="btn">Calculate FFMI</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>FFMI Results</h2>
        <div class="result-item highlight">
            <strong>FFMI:</strong> <?php echo $result['ffmi']; ?>
        </div>
        <div class="result-item">
            <strong>Normalized FFMI:</strong> <?php echo $result['normalized_ffmi']; ?>
        </div>
        <div class="result-item">
            <strong>Lean Mass:</strong> <?php echo $result['lean_mass']; ?> kg
        </div>
        <div class="result-item highlight">
            <strong>Category:</strong> <?php echo $result['category']; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
