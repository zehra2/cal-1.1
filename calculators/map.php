<?php
$pageTitle = 'Map Calculator';
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lat1 = floatval($_POST['lat1']);
    $lon1 = floatval($_POST['lon1']);
    $lat2 = floatval($_POST['lat2']);
    $lon2 = floatval($_POST['lon2']);
    
    $earthRadius = 6371;
    
    $dLat = deg2rad($lat2 - $lat1);
    $dLon = deg2rad($lon2 - $lon1);
    
    $a = sin($dLat/2) * sin($dLat/2) +
         cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
         sin($dLon/2) * sin($dLon/2);
    
    $c = 2 * atan2(sqrt($a), sqrt(1-$a));
    $distance = $earthRadius * $c;
    
    $result = [
        'distance_km' => round($distance, 2),
        'distance_miles' => round($distance * 0.621371, 2),
        'distance_nm' => round($distance * 0.539957, 2)
    ];
}
?>

<div class="calculator-page">
    <h1>Map Distance Calculator</h1>
    <p class="description">Calculate the distance between two points on a map using their coordinates (latitude and longitude).</p>
    
    <form method="POST" class="calculator-form">
        <h3>Point 1 Coordinates</h3>
        <div class="form-group">
            <label for="lat1">Latitude 1:</label>
            <input type="number" step="any" id="lat1" name="lat1" required value="<?php echo sanitize_output($_POST['lat1'] ?? ''); ?>">
            <small>Enter latitude (-90 to 90)</small>
        </div>
        
        <div class="form-group">
            <label for="lon1">Longitude 1:</label>
            <input type="number" step="any" id="lon1" name="lon1" required value="<?php echo sanitize_output($_POST['lon1'] ?? ''); ?>">
            <small>Enter longitude (-180 to 180)</small>
        </div>
        
        <h3>Point 2 Coordinates</h3>
        <div class="form-group">
            <label for="lat2">Latitude 2:</label>
            <input type="number" step="any" id="lat2" name="lat2" required value="<?php echo sanitize_output($_POST['lat2'] ?? ''); ?>">
            <small>Enter latitude (-90 to 90)</small>
        </div>
        
        <div class="form-group">
            <label for="lon2">Longitude 2:</label>
            <input type="number" step="any" id="lon2" name="lon2" required value="<?php echo sanitize_output($_POST['lon2'] ?? ''); ?>">
            <small>Enter longitude (-180 to 180)</small>
        </div>
        
        <button type="submit" class="btn">Calculate Distance</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Distance Results</h2>
        <div class="result-item">
            <strong>Distance in Kilometers:</strong> <?php echo $result['distance_km']; ?> km
        </div>
        <div class="result-item">
            <strong>Distance in Miles:</strong> <?php echo $result['distance_miles']; ?> miles
        </div>
        <div class="result-item">
            <strong>Distance in Nautical Miles:</strong> <?php echo $result['distance_nm']; ?> nm
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
