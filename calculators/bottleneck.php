<?php
$pageTitle = 'PC Bottleneck Calculator';
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cpu_score = intval($_POST['cpu_score']);
    $gpu_score = intval($_POST['gpu_score']);
    $ram = intval($_POST['ram']);
    
    $performance_ratio = ($cpu_score / $gpu_score) * 100;
    
    if ($performance_ratio > 120) {
        $bottleneck = 'GPU';
        $percentage = round((($performance_ratio - 100) / $performance_ratio) * 100, 1);
        $recommendation = 'Your GPU is the bottleneck. Consider upgrading to a more powerful graphics card.';
    } elseif ($performance_ratio < 80) {
        $bottleneck = 'CPU';
        $percentage = round(((100 - $performance_ratio) / 100) * 100, 1);
        $recommendation = 'Your CPU is the bottleneck. Consider upgrading to a faster processor.';
    } else {
        $bottleneck = 'Balanced';
        $percentage = 0;
        $recommendation = 'Your system is well balanced. No significant bottleneck detected.';
    }
    
    if ($ram < 8) {
        $ram_warning = 'Warning: Your RAM is below recommended levels for modern gaming.';
    } else {
        $ram_warning = '';
    }
    
    $result = [
        'bottleneck' => $bottleneck,
        'percentage' => $percentage,
        'recommendation' => $recommendation,
        'ram_warning' => $ram_warning
    ];
}
?>

<div class="calculator-page">
    <h1>PC Bottleneck Calculator</h1>
    <p class="description">Identify potential bottlenecks in your PC build by comparing CPU and GPU performance.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="cpu_score">CPU Benchmark Score:</label>
            <input type="number" id="cpu_score" name="cpu_score" required value="<?php echo sanitize_output($_POST['cpu_score'] ?? ''); ?>">
            <small>Enter your CPU benchmark score (e.g., PassMark or similar)</small>
        </div>
        
        <div class="form-group">
            <label for="gpu_score">GPU Benchmark Score:</label>
            <input type="number" id="gpu_score" name="gpu_score" required value="<?php echo sanitize_output($_POST['gpu_score'] ?? ''); ?>">
            <small>Enter your GPU benchmark score (e.g., 3DMark or similar)</small>
        </div>
        
        <div class="form-group">
            <label for="ram">RAM (GB):</label>
            <input type="number" id="ram" name="ram" required value="<?php echo sanitize_output($_POST['ram'] ?? ''); ?>">
            <small>Enter your total system RAM in gigabytes</small>
        </div>
        
        <button type="submit" class="btn">Calculate Bottleneck</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Bottleneck Analysis</h2>
        <div class="result-item">
            <strong>Bottleneck Component:</strong> <?php echo $result['bottleneck']; ?>
        </div>
        <?php if ($result['percentage'] > 0): ?>
        <div class="result-item">
            <strong>Bottleneck Percentage:</strong> <?php echo $result['percentage']; ?>%
        </div>
        <?php endif; ?>
        <div class="result-item">
            <strong>Recommendation:</strong> <?php echo $result['recommendation']; ?>
        </div>
        <?php if ($result['ram_warning']): ?>
        <div class="result-item" style="color: #e74c3c;">
            <strong><?php echo $result['ram_warning']; ?></strong>
        </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
