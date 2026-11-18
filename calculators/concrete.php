<?php
$pageTitle = 'Concrete Calculator';
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $length = floatval($_POST['length']);
    $width = floatval($_POST['width']);
    $depth = floatval($_POST['depth']);
    $unit = $_POST['unit'];
    
    if ($unit === 'inches') {
        $depth = $depth / 12;
    }
    
    $cubic_feet = $length * $width * $depth;
    $cubic_yards = $cubic_feet / 27;
    
    $bags_60lb = ceil($cubic_yards * 45);
    $bags_80lb = ceil($cubic_yards * 60);
    
    $result = [
        'cubic_feet' => round($cubic_feet, 2),
        'cubic_yards' => round($cubic_yards, 2),
        'bags_60lb' => $bags_60lb,
        'bags_80lb' => $bags_80lb,
        'cost_estimate' => round($cubic_yards * 120, 2)
    ];
}
?>

<div class="calculator-page">
    <h1>Concrete Calculator</h1>
    <p class="description">Calculate the amount of concrete needed for your project in cubic yards and bags.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="length">Length (feet):</label>
            <input type="number" step="any" id="length" name="length" required value="<?php echo sanitize_output($_POST['length'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="width">Width (feet):</label>
            <input type="number" step="any" id="width" name="width" required value="<?php echo sanitize_output($_POST['width'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="depth">Depth:</label>
            <input type="number" step="any" id="depth" name="depth" required value="<?php echo sanitize_output($_POST['depth'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="unit">Depth Unit:</label>
            <select id="unit" name="unit">
                <option value="feet" <?php echo ($_POST['unit'] ?? '') === 'feet' ? 'selected' : ''; ?>>Feet</option>
                <option value="inche" <?php echo ($_POST['unit'] ?? '') === 'inches' ? 'selected' : ''; ?>>Inches</option>
            </select>
        </div>
        
        <button type="submit" class="btn">Calculate Concrete</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Concrete Needed</h2>
        <div class="result-item">
            <strong>Volume (Cubic Feet):</strong> <?php echo $result['cubic_feet']; ?> ft³
        </div>
        <div class="result-item">
            <strong>Volume (Cubic Yards):</strong> <?php echo $result['cubic_yards']; ?> yd³
        </div>
        <div class="result-item">
            <strong>60lb Bags Needed:</strong> <?php echo $result['bags_60lb']; ?> bags
        </div>
        <div class="result-item">
            <strong>80lb Bags Needed:</strong> <?php echo $result['bags_80lb']; ?> bags
        </div>
        <div class="result-item">
            <strong>Estimated Cost:</strong> $<?php echo $result['cost_estimate']; ?> (approx. $120/yd³)
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
