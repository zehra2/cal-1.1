<?php
$pageTitle = 'RREF Calculator';
require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rows = intval($_POST['rows'] ?? 2);
    $cols = intval($_POST['cols'] ?? 3);
    $matrix = [];
    
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $key = "cell_{$i}_{$j}";
            $matrix[$i][$j] = floatval($_POST[$key] ?? 0);
        }
    }
    
    $rref_matrix = $matrix;
    $lead = 0;
    
    for ($r = 0; $r < $rows; $r++) {
        if ($lead >= $cols) break;
        
        $i = $r;
        while ($rref_matrix[$i][$lead] == 0) {
            $i++;
            if ($i == $rows) {
                $i = $r;
                $lead++;
                if ($lead == $cols) break 2;
            }
        }
        
        $temp = $rref_matrix[$i];
        $rref_matrix[$i] = $rref_matrix[$r];
        $rref_matrix[$r] = $temp;
        
        $lv = $rref_matrix[$r][$lead];
        if ($lv != 0) {
            for ($j = 0; $j < $cols; $j++) {
                $rref_matrix[$r][$j] = $rref_matrix[$r][$j] / $lv;
            }
        }
        
        for ($i = 0; $i < $rows; $i++) {
            if ($i != $r) {
                $lv = $rref_matrix[$i][$lead];
                for ($j = 0; $j < $cols; $j++) {
                    $rref_matrix[$i][$j] -= $lv * $rref_matrix[$r][$j];
                }
            }
        }
        $lead++;
    }
    
    $result = [
        'original_matrix' => $matrix,
        'rref_matrix' => $rref_matrix,
        'rows' => $rows,
        'cols' => $cols
    ];
}
?>

<div class="calculator-page">
    <h1>RREF Calculator</h1>
    <p class="description">Calculate the Reduced Row Echelon Form of a matrix using Gaussian elimination.</p>
    
    <form method="POST" class="calculator-form">
        <div class="form-group">
            <label for="row">Number of Rows:</label>
            <select id="row" name="row" onchange="this.form.submit()">
                <option value="2" <?php echo ($_POST['rows'] ?? 2) == 2 ? 'selected' : ''; ?>>2</option>
                <option value="3" <?php echo ($_POST['rows'] ?? '') == 3 ? 'selected' : ''; ?>>3</option>
                <option value="4" <?php echo ($_POST['rows'] ?? '') == 4 ? 'selected' : ''; ?>>4</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="col">Number of Columns:</label>
            <select id="col" name="col" onchange="this.form.submit()">
                <option value="2" <?php echo ($_POST['cols'] ?? '') == 2 ? 'selected' : ''; ?>>2</option>
                <option value="3" <?php echo ($_POST['cols'] ?? 3) == 3 ? 'selected' : ''; ?>>3</option>
                <option value="4" <?php echo ($_POST['cols'] ?? '') == 4 ? 'selected' : ''; ?>>4</option>
            </select>
        </div>
        
        <h3>Enter Matrix Values:</h3>
        <div style="overflow-x: auto;">
            <?php 
            $rows = intval($_POST['rows'] ?? 2);
            $cols = intval($_POST['cols'] ?? 3);
            for ($i = 0; $i < $rows; $i++): 
            ?>
                <div style="display: flex; gap: 10px; margin-bottom: 10px;">
                    <?php for ($j = 0; $j < $cols; $j++): ?>
                        <input type="number" step="any" name="cell_<?php echo $i; ?>_<?php echo $j; ?>" 
                               style="width: 80px;" value="<?php echo sanitize_output($_POST["cell_{$i}_{$j}"] ?? '0'); ?>">
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
        </div>
        
        <button type="submit" class="btn">Calculate RREF</button>
    </form>
    
    <?php if ($result && isset($result['rref_matrix'])): ?>
    <div class="result-section">
        <h2>Reduced Row Echelon Form</h2>
        <div style="overflow-x: auto;">
            <table style="border-collapse: collapse; margin: 20px 0;">
                <?php foreach ($result['rref_matrix'] as $row): ?>
                    <tr>
                        <?php foreach ($row as $val): ?>
                            <td style="border: 1px solid #ddd; padding: 10px; text-align: center;">
                                <?php echo round($val, 4); ?>
                            </td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php require_once '../includes/footer.php'; ?>
