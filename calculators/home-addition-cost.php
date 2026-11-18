<?php
$pageTitle = 'Home Addition Cost Calculator';
$metaDescription = 'Estimate home addition and renovation costs. Free home addition cost calculator for homeowners.';
$metaKeywords = 'home addition cost calculator, home renovation calculator, addition cost estimator';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'Home Addition Cost Calculator',
    'description' => 'Estimate home addition costs',
    'applicationCategory' => 'HomeApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $square_feet = floatval($_POST['square_feet']);
    $addition_type = $_POST['addition_type'];
    $quality = $_POST['quality'];
    
    $base_costs = [
        'basic_room' => 100,
        'bathroom' => 200,
        'kitchen' => 250,
        'second_story' => 150,
        'garage' => 80,
        'sunroom' => 120
    ];
    
    $quality_multipliers = [
        'basic' => 0.8,
        'standard' => 1.0,
        'premium' => 1.3,
        'luxury' => 1.8
    ];
    
    $cost_per_sqft = $base_costs[$addition_type] * $quality_multipliers[$quality];
    $total_cost = $cost_per_sqft * $square_feet;
    
    $low_estimate = $total_cost * 0.85;
    $high_estimate = $total_cost * 1.15;
    
    $result = [
        'total_cost' => number_format($total_cost, 2),
        'low_estimate' => number_format($low_estimate, 2),
        'high_estimate' => number_format($high_estimate, 2),
        'cost_per_sqft' => number_format($cost_per_sqft, 2),
        'square_feet' => $square_feet
    ];
}
?>

<div class="calculator-page">
    <h1>Home Addition Cost Calculator</h1>
    <p class="description">Estimate the cost of adding space to your home.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="square_feet">Square Footage:</label>
            <input type="number" step="any" id="square_feet" name="square_feet" required value="<?php echo sanitize_output($_POST['square_feet'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="addition_type">Addition Type:</label>
            <select id="addition_type" name="addition_type">
                <option value="basic_room" <?php echo ($_POST['addition_type'] ?? 'basic_room') == 'basic_room' ? 'selected' : ''; ?>>Basic Room</option>
                <option value="bathroom" <?php echo ($_POST['addition_type'] ?? '') == 'bathroom' ? 'selected' : ''; ?>>Bathroom</option>
                <option value="kitchen" <?php echo ($_POST['addition_type'] ?? '') == 'kitchen' ? 'selected' : ''; ?>>Kitchen</option>
                <option value="second_story" <?php echo ($_POST['addition_type'] ?? '') == 'second_story' ? 'selected' : ''; ?>>Second Story</option>
                <option value="garage" <?php echo ($_POST['addition_type'] ?? '') == 'garage' ? 'selected' : ''; ?>>Garage</option>
                <option value="sunroom" <?php echo ($_POST['addition_type'] ?? '') == 'sunroom' ? 'selected' : ''; ?>>Sunroom</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="quality">Quality Level:</label>
            <select id="quality" name="quality">
                <option value="basic" <?php echo ($_POST['quality'] ?? '') == 'basic' ? 'selected' : ''; ?>>Basic</option>
                <option value="standard" <?php echo ($_POST['quality'] ?? 'standard') == 'standard' ? 'selected' : ''; ?>>Standard</option>
                <option value="premium" <?php echo ($_POST['quality'] ?? '') == 'premium' ? 'selected' : ''; ?>>Premium</option>
                <option value="luxury" <?php echo ($_POST['quality'] ?? '') == 'luxury' ? 'selected' : ''; ?>>Luxury</option>
            </select>
        </div>
        
        <button type="submit" class="btn">Calculate Cost</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Home Addition Cost Estimate</h2>
        <div class="result-item highlight">
            <strong>Estimated Cost:</strong> $<?php echo $result['total_cost']; ?>
        </div>
        <div class="result-item">
            <strong>Low Estimate:</strong> $<?php echo $result['low_estimate']; ?>
        </div>
        <div class="result-item">
            <strong>High Estimate:</strong> $<?php echo $result['high_estimate']; ?>
        </div>
        <div class="result-item">
            <strong>Cost per Sq Ft:</strong> $<?php echo $result['cost_per_sqft']; ?>
        </div>
        <div class="result-item">
            <strong>Square Footage:</strong> <?php echo $result['square_feet']; ?> sq ft
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
