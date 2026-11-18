<?php
$pageTitle = 'Saturn Return Calculator';
$metaDescription = 'Calculate your Saturn return dates in astrology. Free Saturn return calculator based on your birth date.';
$metaKeywords = 'saturn return calculator, astrology calculator, saturn return dates';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'Saturn Return Calculator',
    'description' => 'Calculate Saturn return astrological period',
    'applicationCategory' => 'LifestyleApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $birth_date = $_POST['birth_date'];
    $birth_timestamp = strtotime($birth_date);
    
    $saturn_cycle_days = 29.5 * 365.25;
    
    $first_return = $birth_timestamp + ($saturn_cycle_days * 86400);
    $second_return = $birth_timestamp + (2 * $saturn_cycle_days * 86400);
    $third_return = $birth_timestamp + (3 * $saturn_cycle_days * 86400);
    
    $result = [
        'birth_date' => date('F d, Y', $birth_timestamp),
        'first_return' => date('F d, Y', $first_return),
        'second_return' => date('F d, Y', $second_return),
        'third_return' => date('F d, Y', $third_return),
        'first_age' => round(29.5, 1),
        'second_age' => round(59, 1),
        'third_age' => round(88.5, 1)
    ];
}
?>

<div class="calculator-page">
    <h1>Saturn Return Calculator</h1>
    <p class="description">Calculate when you'll experience your Saturn return astrological periods.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="birth_date">Birth Date:</label>
            <input type="date" id="birth_date" name="birth_date" required value="<?php echo sanitize_output($_POST['birth_date'] ?? ''); ?>">
        </div>
        
        <button type="submit" class="btn">Calculate Saturn Return</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Your Saturn Return Dates</h2>
        <div class="result-item">
            <strong>Birth Date:</strong> <?php echo $result['birth_date']; ?>
        </div>
        <div class="result-item highlight">
            <strong>First Saturn Return (Age ~<?php echo $result['first_age']; ?>):</strong> <?php echo $result['first_return']; ?>
        </div>
        <div class="result-item highlight">
            <strong>Second Saturn Return (Age ~<?php echo $result['second_age']; ?>):</strong> <?php echo $result['second_return']; ?>
        </div>
        <div class="result-item highlight">
            <strong>Third Saturn Return (Age ~<?php echo $result['third_age']; ?>):</strong> <?php echo $result['third_return']; ?>
        </div>
        <div class="info-section">
            <p>Saturn return is an astrological period that occurs approximately every 29.5 years when Saturn returns to the same position in the zodiac as it was at your birth.</p>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
