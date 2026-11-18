<?php
$pageTitle = 'ASQ Calculator';
$metaDescription = 'Calculate Ages and Stages Questionnaire (ASQ) scores for child development screening. Free ASQ calculator for parents and healthcare providers.';
$metaKeywords = 'asq calculator, ages and stages questionnaire, child development, developmental screening';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'ASQ Calculator',
    'description' => 'Calculate Ages and Stages Questionnaire scores',
    'applicationCategory' => 'HealthApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $total_score = intval($_POST['total_score']);
    $child_age = intval($_POST['child_age']);
    $domain = $_POST['domain'];
    
    $cutoff_scores = [
        'communication' => 25,
        'gross_motor' => 25,
        'fine_motor' => 25,
        'problem_solving' => 25,
        'personal_social' => 25
    ];
    
    $cutoff = $cutoff_scores[$domain] ?? 25;
    
    if ($total_score >= $cutoff + 10) {
        $status = 'On Schedule';
        $recommendation = 'Child appears to be developing on schedule in this area.';
    } elseif ($total_score >= $cutoff) {
        $status = 'Monitor';
        $recommendation = 'Consider monitoring and rescreening in this area.';
    } else {
        $status = 'Refer';
        $recommendation = 'Consider referral for further assessment.';
    }
    
    $result = [
        'score' => $total_score,
        'status' => $status,
        'recommendation' => $recommendation,
        'domain' => ucwords(str_replace('_', ' ', $domain)),
        'cutoff' => $cutoff
    ];
}
?>

<div class="calculator-page">
    <h1>ASQ Calculator</h1>
    <p class="description">Calculate Ages and Stages Questionnaire scores for child development screening.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="child_age">Child's Age (months):</label>
            <input type="number" min="2" max="66" id="child_age" name="child_age" required value="<?php echo sanitize_output($_POST['child_age'] ?? ''); ?>">
        </div>
        
        <div class="form-group">
            <label for="domain">Developmental Domain:</label>
            <select id="domain" name="domain">
                <option value="communication" <?php echo ($_POST['domain'] ?? '') == 'communication' ? 'selected' : ''; ?>>Communication</option>
                <option value="gross_motor" <?php echo ($_POST['domain'] ?? '') == 'gross_motor' ? 'selected' : ''; ?>>Gross Motor</option>
                <option value="fine_motor" <?php echo ($_POST['domain'] ?? '') == 'fine_motor' ? 'selected' : ''; ?>>Fine Motor</option>
                <option value="problem_solving" <?php echo ($_POST['domain'] ?? '') == 'problem_solving' ? 'selected' : ''; ?>>Problem Solving</option>
                <option value="personal_social" <?php echo ($_POST['domain'] ?? '') == 'personal_social' ? 'selected' : ''; ?>>Personal-Social</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="total_score">Total Domain Score (0-60):</label>
            <input type="number" min="0" max="60" id="total_score" name="total_score" required value="<?php echo sanitize_output($_POST['total_score'] ?? ''); ?>">
        </div>
        
        <button type="submit" class="btn">Calculate ASQ Score</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>ASQ Results</h2>
        <div class="result-item">
            <strong>Domain:</strong> <?php echo $result['domain']; ?>
        </div>
        <div class="result-item">
            <strong>Total Score:</strong> <?php echo $result['score']; ?>
        </div>
        <div class="result-item highlight">
            <strong>Status:</strong> <?php echo $result['status']; ?>
        </div>
        <div class="result-item">
            <strong>Recommendation:</strong> <?php echo $result['recommendation']; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
