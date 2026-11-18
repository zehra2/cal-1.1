<?php
$pageTitle = 'Calculator Bacalaureat';
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $written_grade = floatval($_POST['written_grade'] ?? 0);
    $oral_grade = floatval($_POST['oral_grade'] ?? 0);
    $continuous_assessment = floatval($_POST['continuous_assessment'] ?? 0);
    
    if ($err = validate_number_range($written_grade, 'Written exam grade', 0, 20)) $errors[] = $err;
    if ($err = validate_number_range($oral_grade, 'Oral exam grade', 0, 20)) $errors[] = $err;
    if ($err = validate_number_range($continuous_assessment, 'Continuous assessment', 0, 20)) $errors[] = $err;
    
    if (empty($errors)) {
        $final_grade = ($written_grade * 0.6) + ($oral_grade * 0.2) + ($continuous_assessment * 0.2);
        
        if ($final_grade >= 16) {
            $mention = 'Très Bien (Excellent)';
        } elseif ($final_grade >= 14) {
            $mention = 'Bien (Good)';
        } elseif ($final_grade >= 12) {
            $mention = 'Assez Bien (Satisfactory)';
        } elseif ($final_grade >= 10) {
            $mention = 'Passable (Pass)';
        } else {
            $mention = 'Ajournement (Fail)';
        }
        
        $result = [
            'final_grade' => round($final_grade, 2),
            'mention' => $mention,
            'passed' => $final_grade >= 10
        ];
    }
}
?>

<div class="calculator-page">
    <h1>Calculator Bacalaureat</h1>
    <p class="description">Calculate your French Baccalauréat final grade and mention based on exam scores.</p>
    
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
            <label for="written_grade">Written Exam Grade (0-20):</label>
            <input type="number" step="any" id="written_grade" name="written_grade" required value="<?php echo sanitize_output($_POST['written_grade'] ?? ''); ?>">
            <small>60% of final grade</small>
        </div>
        
        <div class="form-group">
            <label for="oral_grade">Oral Exam Grade (0-20):</label>
            <input type="number" step="any" id="oral_grade" name="oral_grade" required value="<?php echo sanitize_output($_POST['oral_grade'] ?? ''); ?>">
            <small>20% of final grade</small>
        </div>
        
        <div class="form-group">
            <label for="continuous_assessment">Continuous Assessment (0-20):</label>
            <input type="number" step="any" id="continuous_assessment" name="continuous_assessment" required value="<?php echo sanitize_output($_POST['continuous_assessment'] ?? ''); ?>">
            <small>20% of final grade</small>
        </div>
        
        <button type="submit" class="btn">Calculate Grade</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Baccalauréat Results</h2>
        <div class="result-item">
            <strong>Final Grade:</strong> <?php echo $result['final_grade']; ?> / 20
        </div>
        <div class="result-item">
            <strong>Mention:</strong> <?php echo $result['mention']; ?>
        </div>
        <div class="result-item" style="<?php echo $result['passed'] ? 'color: #27ae60;' : 'color: #e74c3c;'; ?>">
            <strong>Result:</strong> <?php echo $result['passed'] ? 'PASSED ✓' : 'FAILED ✗'; ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
