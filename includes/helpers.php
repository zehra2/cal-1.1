<?php
function sanitize_output($value) {
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

function validate_positive_number($value, $field_name) {
    $num = floatval($value);
    if ($num <= 0) {
        return "Error: $field_name must be a positive number.";
    }
    return null;
}

function validate_number_range($value, $field_name, $min, $max) {
    $num = floatval($value);
    if ($num < $min || $num > $max) {
        return "Error: $field_name must be between $min and $max.";
    }
    return null;
}
?>
