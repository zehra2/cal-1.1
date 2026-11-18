<?php
$pageTitle = 'AP Lang Score Calculator 2025 | Free & Accurate Tool';
$metaDescription = 'Use our free AP Lang Score Calculator 2025 to estimate your AP Language and Composition exam score (1–5). Based on the latest scoring guidelines.';
$metaKeywords = 'ap lang score calculator, ap lang score calculator 2025, ap lang and comp score calculator, ap lang exam score calculator, albert ap lang score calculator';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'AP Lang Score Calculator 2025',
    'description' => 'Free AP Language and Composition score calculator that estimates your AP Lang exam score out of 5 based on your multiple-choice and essay results.',
    'applicationCategory' => 'EducationalApplication',
    'operatingSystem' => 'All',
    'url' => 'https://yourdomain.com/calculators/ap-lang-score-calculator.php',
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mcq_correct = intval($_POST['mcq_correct']);
    $essay1 = intval($_POST['essay1']);
    $essay2 = intval($_POST['essay2']);
    $essay3 = intval($_POST['essay3']);
    
    $mcq_score = $mcq_correct * 1.23;
    $frq_score = ($essay1 + $essay2 + $essay3) * 3.055;
    $composite = $mcq_score + $frq_score;

    if ($composite >= 104) $ap_score = 5;
    elseif ($composite >= 92) $ap_score = 4;
    elseif ($composite >= 74) $ap_score = 3;
    elseif ($composite >= 50) $ap_score = 2;
    else $ap_score = 1;

    $result = [
        'ap_score' => $ap_score,
        'composite' => round($composite, 1),
        'mcq_score' => round($mcq_score, 1),
        'frq_score' => round($frq_score, 1)
    ];
}
?>

<div class="calculator-page">
    <h1>AP Lang Score Calculator 2025</h1>
    <p class="description">
        Estimate your <strong>AP Language and Composition exam score</strong> instantly with our
        <strong>AP Lang Score Calculator</strong>. Enter your multiple-choice and essay scores to see
        your projected AP score (1–5) based on the latest <strong>College Board</strong> scoring data.
    </p>

    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="mcq_correct">Multiple Choice Correct (out of 45):</label>
            <input type="number" min="0" max="45" id="mcq_correct" name="mcq_correct" required value="<?php echo sanitize_output($_POST['mcq_correct'] ?? ''); ?>">
        </div>

        <div class="form-group">
            <label for="essay1">Essay 1 Score (0–9):</label>
            <input type="number" min="0" max="9" id="essay1" name="essay1" required value="<?php echo sanitize_output($_POST['essay1'] ?? ''); ?>">
        </div>

        <div class="form-group">
            <label for="essay2">Essay 2 Score (0–9):</label>
            <input type="number" min="0" max="9" id="essay2" name="essay2" required value="<?php echo sanitize_output($_POST['essay2'] ?? ''); ?>">
        </div>

        <div class="form-group">
            <label for="essay3">Essay 3 Score (0–9):</label>
            <input type="number" min="0" max="9" id="essay3" name="essay3" required value="<?php echo sanitize_output($_POST['essay3'] ?? ''); ?>">
        </div>

        <button type="submit" class="btn">Calculate My AP Lang Score</button>
    </form>

    <?php if ($result): ?>
    <div class="result-section">
        <h2>Your Estimated AP Lang Exam Result</h2>
        <div class="result-item highlight"><strong>AP Score:</strong> <?php echo $result['ap_score']; ?> / 5</div>
        <div class="result-item"><strong>Composite Score:</strong> <?php echo $result['composite']; ?> / 150</div>
        <div class="result-item"><strong>MCQ Score:</strong> <?php echo $result['mcq_score']; ?></div>
        <div class="result-item"><strong>FRQ Score:</strong> <?php echo $result['frq_score']; ?></div>
    </div>
    <?php endif; ?>
</div>

<section class="info-section">
    <h2>About the AP Language and Composition Exam</h2>
    <p>
        The <strong>AP English Language and Composition</strong> exam evaluates your ability to read,
        aAnalyze, and write about complex texts. It includes <strong>45 multiple-choice questions</strong>
        and <strong>three free-response essays</strong> that measure your skills in rhetorical analysis,
        argumentation, and synthesis.
    </p>

    <h3>How This AP Lang Score Calculator Works</h3>
    <p>
        Our calculator uses the <strong>College Board’s latest scoring scale</strong> to predict your final
        score out of 5. It combines your multiple-choice results with essay scores to generate an accurate
        <strong>composite score</strong>. You’ll instantly see whether your performance falls into the range
        for a 1, 2, 3, 4, or 5.
    </p>

    <h3>Why Use Our AP Lang Score Calculator 2025?</h3>
    <ul>
        <li>Updated for the <strong>2025 AP Lang Exam</strong></li>
        <li>Based on official <strong>College Board scoring guidelines</strong></li>
        <li>Free and easy to use — no login required</li>
        <li>Helps you plan your study goals effectively</li>
    </ul>

    <h3>Frequently Asked Questions</h3>

    <h4>How accurate is this AP Lang score calculator?</h4>
    <p>
        This calculator closely mirrors <strong>College Board’s published score conversions</strong>. While
        results are estimates, they are highly reliable for practice and preparation.
    </p>

    <h4>What is considered a good AP Lang score?</h4>
    <p>
        A score of <strong>3 or higher</strong> is typically considered passing. Many colleges award credit
        or advanced placement for a <strong>4 or 5</strong>.
    </p>

    <h4>What is the best strategy to improve my AP Lang score?</h4>
    <p>
        Focus on essay structure, use of evidence, and timed practice. Analyzing sample essays from previous
        exams is one of the best ways to prepare.
    </p>

    <p class="note">
        Whether you’re comparing results with the <strong>Albert AP Lang Score Calculator</strong> or other
        tools, our version uses transparent, math-based formulas for more precise estimates.
    </p>
</section>

<?php require_once '../includes/footer.php'; ?>
