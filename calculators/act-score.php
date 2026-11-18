<?php
$pageTitle = 'ACT Score Calculator';
$metaDescription = 'Calculate your ACT composite score and section scores. Free ACT score calculator for college admission planning.';
$metaKeywords = 'act score calculator, act composite score, college admission, act test';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'ACT Score Calculator',
    'description' => 'Calculate ACT composite and section scores',
    'applicationCategory' => 'EducationalApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $english = intval($_POST['english']);
    $math = intval($_POST['math']);
    $reading = intval($_POST['reading']);
    $science = intval($_POST['science']);
    
    $composite = round(($english + $math + $reading + $science) / 4, 1);
    
    $result = [
        'composite' => $composite,
        'english' => $english,
        'math' => $math,
        'reading' => $reading,
        'science' => $science
    ];
}
?>

<div class="calculator-page">
    <h1>ACT Score Calculator</h1>
    <p class="description">Calculate your ACT composite score from section scores.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="english">English Score (1-36):</label>
            <input type="number" min="1" max="36" id="english" name="english" required value="<?php echo sanitize_output($_POST['english'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="math">Math Score (1-36):</label>
            <input type="number" min="1" max="36" id="math" name="math" required value="<?php echo sanitize_output($_POST['math'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="reading">Reading Score (1-36):</label>
            <input type="number" min="1" max="36" id="reading" name="reading" required value="<?php echo sanitize_output($_POST['reading'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="science">Science Score (1-36):</label>
            <input type="number" min="1" max="36" id="science" name="science" required value="<?php echo sanitize_output($_POST['science'] ?? ''); ?>">
        </div>
        
        <button type="submit" class="btn">Calculate Composite</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Your ACT Scores</h2>
        <div class="result-item highlight">
            <strong>Composite Score:</strong> <?php echo $result['composite']; ?>
        </div>
        <div class="result-item">
            <strong>English:</strong> <?php echo $result['english']; ?>
        </div>
        <div class="result-item">
            <strong>Math:</strong> <?php echo $result['math']; ?>
        </div>
        <div class="result-item">
            <strong>Reading:</strong> <?php echo $result['reading']; ?>
        </div>
        <div class="result-item">
            <strong>Science:</strong> <?php echo $result['science']; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
