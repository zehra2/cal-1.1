<?php
$pageTitle = 'Racine Carrée Calculator';
$metaDescription = 'Calculer la racine carrée de n\'importe quel nombre. Calculatrice de racine carrée gratuite en ligne.';
$metaKeywords = 'racine carrée, calculatrice racine carrée, square root, math calculator';
$schemaData = [
    '@context' => 'https://schema.org',
    '@type' => 'WebApplication',
    'name' => 'Racine Carrée Calculator',
    'description' => 'Calculate square root (racine carrée)',
    'applicationCategory' => 'MathApplication'
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = floatval($_POST['number']);
    
    if ($number >= 0) {
        $square_root = sqrt($number);
        $result = [
            'square_root' => round($square_root, 6),
            'number' => $number,
            'squared' => round($square_root * $square_root, 6)
        ];
    } else {
        $result = ['error' => 'Cannot calculate square root of negative number.'];
    }
}
?>

<div class="calculator-page">
    <h1>Racine Carrée Calculator</h1>
    <p class="description">Calculer la racine carrée (Square Root Calculator).</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="number">Nombre (Number):</label>
            <input type="number" step="any" id="number" name="number" required value="<?php echo sanitize_output($_POST['number'] ?? ''); ?>">
        </div>
        
        <button type="submit" class="btn">Calculer</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Résultat</h2>
        <?php if (isset($result['error'])): ?>
            <div class="result-item error">
                <strong>Erreur:</strong> <?php echo $result['error']; ?>
            </div>
        <?php else: ?>
            <div class="result-item highlight">
                <strong>Racine Carrée:</strong> √<?php echo $result['number']; ?> = <?php echo $result['square_root']; ?>
            </div>
            <div class="result-item">
                <strong>Vérification:</strong> <?php echo $result['square_root']; ?>² = <?php echo $result['squared']; ?>
            </div>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
