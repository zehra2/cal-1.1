<?php
$pageTitle = 'Palworld Breeding Calculator';
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$pals = [
    'Lamball' => 10, 'Cattiva' => 15, 'Chikipi' => 20, 'Lifmunk' => 25,
    'Foxparks' => 30, 'Fuack' => 35, 'Sparkit' => 40, 'Tanzee' => 45,
    'Rooby' => 50, 'Pengullet' => 55, 'Penking' => 60, 'Jolthog' => 65,
    'Gumoss' => 70, 'Vixy' => 75, 'Hoocrates' => 80, 'Teafant' => 85,
    'Depresso' => 90, 'Cremis' => 95, 'Daedream' => 100, 'Rushoar' => 105
];

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $parent1 = $_POST['parent1'];
    $parent2 = $_POST['parent2'];
    
    $power1 = $pals[$parent1];
    $power2 = $pals[$parent2];
    
    $offspring_power = ($power1 + $power2) / 2;
    
    $offspring = '';
    $closest_diff = 9999;
    foreach ($pals as $name => $power) {
        $diff = abs($power - $offspring_power);
        if ($diff < $closest_diff) {
            $closest_diff = $diff;
            $offspring = $name;
        }
    }
    
    $result = [
        'parent1' => $parent1,
        'parent2' => $parent2,
        'offspring' => $offspring,
        'offspring_power' => $pals[$offspring]
    ];
}
?>

<div class="calculator-page">
    <h1>Palworld Breeding Calculator</h1>
    <p class="description">Calculate potential offspring from breeding two Pals in Palworld.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="parent1">Parent 1:</label>
            <select id="parent1" name="parent1" required>
                <option value="">Select Parent 1</option>
                <?php foreach ($pals as $name => $power): ?>
                    <option value="<?php echo $name; ?>" <?php echo ($_POST['parent1'] ?? '') === $name ? 'selected' : ''; ?>>
                        <?php echo $name; ?> (Power: <?php echo $power; ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="form-group">
            <label for="parent2">Parent 2:</label>
            <select id="parent2" name="parent2" required>
                <option value="">Select Parent 2</option>
                <?php foreach ($pals as $name => $power): ?>
                    <option value="<?php echo $name; ?>" <?php echo ($_POST['parent2'] ?? '') === $name ? 'selected' : ''; ?>>
                        <?php echo $name; ?> (Power: <?php echo $power; ?>)
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <button type="submit" class="btn">Calculate Offspring</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Breeding Results</h2>
        <div class="result-item">
            <strong>Parent 1:</strong> <?php echo $result['parent1']; ?>
        </div>
        <div class="result-item">
            <strong>Parent 2:</strong> <?php echo $result['parent2']; ?>
        </div>
        <div class="result-item">
            <strong>Offspring:</strong> <?php echo $result['offspring']; ?>
        </div>
        <div class="result-item">
            <strong>Offspring Power:</strong> <?php echo $result['offspring_power']; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
