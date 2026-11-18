<?php
$pageTitle = 'Grow a Garden Calculator';
$metaDescription = 'Calculate garden spacing, plant quantities, and plot dimensions. Free garden planning calculator for home gardeners.';
$metaKeywords = 'garden calculator, plant spacing calculator, garden planning, vegetable garden';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'Grow a Garden Calculator',
    'description' => 'Calculate garden spacing and plant quantities',
    'applicationCategory' => 'LifestyleApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $garden_length = floatval($_POST['garden_length']);
    $garden_width = floatval($_POST['garden_width']);
    $plant_spacing = floatval($_POST['plant_spacing']);
    $row_spacing = floatval($_POST['row_spacing']);
    
    $plants_per_row = floor($garden_length / $plant_spacing);
    $number_of_rows = floor($garden_width / $row_spacing);
    $total_plants = $plants_per_row * $number_of_rows;
    $garden_area = $garden_length * $garden_width;
    
    $result = [
        'total_plants' => $total_plants,
        'plants_per_row' => $plants_per_row,
        'number_of_rows' => $number_of_rows,
        'garden_area' => round($garden_area, 2)
    ];
}
?>

<div class="calculator-page">
    <h1>Grow a Garden Calculator</h1>
    <p class="description">Calculate how many plants you can grow in your garden space.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="garden_length">Garden Length (feet):</label>
            <input type="number" step="any" id="garden_length" name="garden_length" required value="<?php echo sanitize_output($_POST['garden_length'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="garden_width">Garden Width (feet):</label>
            <input type="number" step="any" id="garden_width" name="garden_width" required value="<?php echo sanitize_output($_POST['garden_width'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="plant_spacing">Plant Spacing (inches):</label>
            <input type="number" step="any" id="plant_spacing" name="plant_spacing" required value="<?php echo sanitize_output($_POST['plant_spacing'] ?? '12'); ?>">
            <small>Distance between plants in the same row</small>
        </div>
        
        <div class="form-group">
            <label for="row_spacing">Row Spacing (inches):</label>
            <input type="number" step="any" id="row_spacing" name="row_spacing" required value="<?php echo sanitize_output($_POST['row_spacing'] ?? '24'); ?>">
            <small>Distance between rows</small>
        </div>
        
        <button type="submit" class="btn">Calculate</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Garden Planning Results</h2>
        <div class="result-item highlight">
            <strong>Total Plants:</strong> <?php echo $result['total_plants']; ?>
        </div>
        <div class="result-item">
            <strong>Plants per Row:</strong> <?php echo $result['plants_per_row']; ?>
        </div>
        <div class="result-item">
            <strong>Number of Rows:</strong> <?php echo $result['number_of_rows']; ?>
        </div>
        <div class="result-item">
            <strong>Garden Area:</strong> <?php echo $result['garden_area']; ?> sq ft
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
