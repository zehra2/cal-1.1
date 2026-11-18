<?php
$pageTitle = 'Random Country Generator';
$metaDescription = 'Generate random countries for games, learning, and fun. Free random country generator tool.';
$metaKeywords = 'random country generator, random country picker, country generator';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'Random Country Generator',
    'description' => 'Generate random countries',
    'applicationCategory' => 'UtilityApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$countries = [
    'United States', 'Canada', 'Mexico', 'Brazil', 'Argentina', 'Chile', 'Peru', 'Colombia',
    'United Kingdom', 'France', 'Germany', 'Italy', 'Spain', 'Portugal', 'Netherlands', 'Belgium',
    'Sweden', 'Norway', 'Denmark', 'Finland', 'Poland', 'Russia', 'Ukraine', 'Greece',
    'China', 'Japan', 'South Korea', 'India', 'Thailand', 'Vietnam', 'Philippines', 'Indonesia',
    'Australia', 'New Zealand', 'Egypt', 'South Africa', 'Nigeria', 'Kenya', 'Morocco', 'Ghana',
    'Saudi Arabia', 'United Arab Emirates', 'Turkey', 'Israel', 'Iran', 'Iraq', 'Pakistan',
    'Switzerland', 'Austria', 'Czech Republic', 'Hungary', 'Romania', 'Ireland', 'Iceland'
];

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $count = min(intval($_POST['count'] ?? 1), 10);
    $selected_countries = [];
    
    $shuffled = $countries;
    shuffle($shuffled);
    
    for ($i = 0; $i < $count; $i++) {
        $selected_countries[] = $shuffled[$i];
    }
    
    $result = [
        'countries' => $selected_countries,
        'count' => $count
    ];
}
?>

<div class="calculator-page">
    <h1>Random Country Generator</h1>
    <p class="description">Generate random countries for games, learning, and exploration.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="count">Number of Countries (1-10):</label>
            <input type="number" min="1" max="10" id="count" name="count" required value="<?php echo sanitize_output($_POST['count'] ?? '1'); ?>">
        </div>
        
        <button type="submit" class="btn">Generate Countries</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Random Countries</h2>
        <?php foreach ($result['countries'] as $index => $country): ?>
            <div class="result-item highlight">
                <strong>Country <?php echo $index + 1; ?>:</strong> <?php echo $country; ?>
            </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
