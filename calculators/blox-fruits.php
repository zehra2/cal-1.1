<?php
$pageTitle = 'Blox Fruits Calculator';
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current_level = intval($_POST['current_level'] ?? 0);
    $target_level = intval($_POST['target_level'] ?? 0);
    
    if ($err = validate_number_range($current_level, 'Current level', 1, 2550)) $errors[] = $err;
    if ($err = validate_number_range($target_level, 'Target level', 1, 2550)) $errors[] = $err;
    
    if ($target_level <= $current_level) {
        $errors[] = 'Target level must be higher than current level.';
    }
    
    if (empty($errors)) {
        $exp_needed = 0;
        for ($i = $current_level; $i < $target_level; $i++) {
            if ($i < 10) {
                $exp_needed += 100 + ($i * 50);
            } elseif ($i < 100) {
                $exp_needed += 500 + ($i * 100);
            } elseif ($i < 1000) {
                $exp_needed += 1000 + ($i * 200);
            } else {
                $exp_needed += 5000 + ($i * 500);
            }
        }
        
        $hours_farming = round($exp_needed / 50000, 1);
        
        $result = [
            'current_level' => $current_level,
            'target_level' => $target_level,
            'exp_needed' => number_format($exp_needed),
            'hours_farming' => $hours_farming,
            'quests_needed' => ceil($exp_needed / 5000)
        ];
    }
}
?>

<div class="calculator-page">
    <h1>Blox Fruits Calculator</h1>
    <p class="description">Calculate XP needed and estimated time to level up in Blox Fruits (Roblox).</p>
    
    <?php if (!empty($errors)): ?>
    <div class="result-section" style="border-left-color: #e74c3c; background: #fee;">
        <h2>Validation Errors</h2>
        <?php foreach ($errors as $error): ?>
            <div style="color: #e74c3c; margin-bottom: 10px;"><?php echo sanitize_output($error); ?></div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="current_level">Current Level:</label>
            <input type="number" id="current_level" name="current_level" required value="<?php echo sanitize_output($_POST['current_level'] ?? ''); ?>">
            <small>Max level: 2550</small>
        </div>
        
        <div class="form-group">
            <label for="target_level">Target Level:</label>
            <input type="number" id="target_level" name="target_level" required value="<?php echo sanitize_output($_POST['target_level'] ?? ''); ?>">
        </div>
        
        <button type="submit" class="btn">Calculate XP</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Leveling Information</h2>
        <div class="result-item">
            <strong>Level Progress:</strong> <?php echo $result['current_level']; ?> → <?php echo $result['target_level']; ?>
        </div>
        <div class="result-item">
            <strong>XP Needed:</strong> <?php echo $result['exp_needed']; ?> XP
        </div>
        <div class="result-item">
            <strong>Estimated Farming Time:</strong> ~<?php echo $result['hours_farming']; ?> hours
        </div>
        <div class="result-item">
            <strong>Quests Needed:</strong> ~<?php echo $result['quests_needed']; ?> quests (at 5,000 XP/quest)
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
