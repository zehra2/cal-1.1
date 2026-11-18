

<?php
$pageTitle = 'Voltage Drop Calculator | Accurate Online Electrical Tool';
$metaDescription = 'Free Voltage Drop Calculator — instantly calculate voltage drop in wires based on current, length, and wire gauge (AWG). Supports AC/DC. Includes formulas, examples, and FAQ.';
$metaKeywords = 'voltage drop calculator, voltage drop formula, voltage drop across resistor, how to calculate voltage drop, voltage drop calculator 12v, voltage drop calculator mm2, voltage drop calculator 3 phase';
$pageUrl = 'https://americacalculator.com/calculators/voltage-drop.php';
$ogImage = 'https://americacalculator.com/images/voltage-drop-calculator-og.jpg';
$siteName = 'America calculator';
//$twitterHandle = '@YourTwitterHandle';



$schemaData = [
  "@context" => "https://schema.org",
  "@type" => "WebApplication",
  "name" => "Voltage Drop Calculator",
  "description" => "Instantly calculate voltage drop in AC or DC circuits based on wire length, size, and load current.",
  "applicationCategory" => "EducationalApplication",
  "operatingSystem" => "All",
  "url" => "https://yourdomain.com/tools/voltage-drop-calculator"
];

$faqSchema = [
  "@context" => "https://schema.org",
  "@type" => "FAQPage",
  "mainEntity" => [
    [
      "@type" => "Question",
      "name" => "What is the formula for voltage drop?",
      "acceptedAnswer" => [
        "@type" => "Answer",
        "text" => "The basic formula for voltage drop is V = I × R, where V is voltage drop, I is current in amps, and R is wire resistance in ohms."
      ]
    ],
    [
      "@type" => "Question",
      "name" => "Is 4% voltage drop acceptable?",
      "acceptedAnswer" => [
        "@type" => "Answer",
        "text" => "Ideally, voltage drop should not exceed 3%. Anything above 5% can cause performance loss or damage to sensitive equipment."
      ]
    ],
    [
      "@type" => "Question",
      "name" => "What is the voltage drop per 100 feet?",
      "acceptedAnswer" => [
        "@type" => "Answer",
        "text" => "It depends on wire gauge and current. For example, a 12 AWG copper wire carrying 15A loses about 0.048V per foot, or 4.8V per 100 feet."
      ]
    ],
    [
      "@type" => "Question",
      "name" => "What is Ohm’s law for voltage drop?",
      "acceptedAnswer" => [
        "@type" => "Answer",
        "text" => "Ohm’s law states that voltage drop equals current multiplied by resistance (V = I × R)."
      ]
    ]
  ]
];



require_once '../includes/header.php';
require_once '../includes/helpers.php';

$result = null;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $voltage = floatval($_POST['voltage'] ?? 0);
    $current = floatval($_POST['current'] ?? 0);
    $length = floatval($_POST['length'] ?? 0);
    $wire_gauge = intval($_POST['wire_gauge'] ?? 12);

    $resistance_per_1000ft = [
        14 => 2.525, 12 => 1.588, 10 => 0.999, 8 => 0.628, 6 => 0.395, 4 => 0.249, 2 => 0.156
    ];

    if ($err = validate_positive_number($voltage, 'Voltage')) $errors[] = $err;
    if ($err = validate_positive_number($current, 'Current')) $errors[] = $err;
    if ($err = validate_positive_number($length, 'Wire length')) $errors[] = $err;

    if (empty($errors)) {
        $resistance = ($resistance_per_1000ft[$wire_gauge] / 1000) * $length * 2;
        $voltage_drop = $current * $resistance;
        $voltage_drop_percent = ($voltage_drop / $voltage) * 100;
        $voltage_at_load = $voltage - $voltage_drop;

        $result = [
            'voltage_drop' => round($voltage_drop, 2),
            'voltage_drop_percent' => round($voltage_drop_percent, 2),
            'voltage_at_load' => round($voltage_at_load, 2),
            'wire_gauge' => $wire_gauge
        ];
    }
}
?>

<div class="container">
<div class="calculator-page">
  <h1>Voltage Drop Calculator</h1>
  <p class="intro">
    Use our <strong>Voltage Drop Calculator</strong> to determine voltage loss in your electrical circuit based on wire gauge (AWG), load current, and one-way distance.
    Ideal for electricians, engineers, solar installers, and DIY projects.
  </p>

  <?php if (!empty($errors)): ?>
  <div class="result-section" style="border-left-color:#e74c3c;background:#fee;">
    <h2>Validation Errors</h2>
    <?php foreach ($errors as $error): ?>
      <div style="color:#e74c3c;margin-bottom:10px;"><?php echo sanitize_output($error); ?></div>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>

  <form method="POST" class="calculator-form">
    <div class="form-group">
      <label for="voltage">Source Voltage (V):</label>
      <input type="number" step="any" id="voltage" name="voltage" required value="<?php echo sanitize_output($_POST['voltage'] ?? ''); ?>">
      <small>Example: 120V, 240V, or 12V DC</small>
    </div>

    <div class="form-group">
      <label for="current">Current (Amps):</label>
      <input type="number" step="any" id="current" name="current" required value="<?php echo sanitize_output($_POST['current'] ?? ''); ?>">
    </div>

    <div class="form-group">
      <label for="length">One-Way Wire Length (feet):</label>
      <input type="number" step="any" id="length" name="length" required value="<?php echo sanitize_output($_POST['length'] ?? ''); ?>">
    </div>

    <div class="form-group">
      <label for="wire_gauge">Wire Gauge (AWG):</label>
      <select id="wire_gauge" name="wire_gauge">
        <?php foreach ([14,12,10,8,6,4,2] as $awg): ?>
          <option value="<?php echo $awg; ?>" <?php echo ($_POST['wire_gauge'] ?? '12') == $awg ? 'selected' : ''; ?>><?php echo $awg; ?> AWG</option>
        <?php endforeach; ?>
      </select>
    </div>

    <button type="submit" class="btn">Calculate Voltage Drop</button>
  </form>

  <?php if ($result): ?>
  <div class="result-section">
    <h2>Voltage Drop Results</h2>
    <div class="result-item"><strong>Wire Gauge:</strong> <?php echo $result['wire_gauge']; ?> AWG</div>
    <div class="result-item"><strong>Voltage Drop:</strong> <?php echo $result['voltage_drop']; ?> V</div>
    <div class="result-item"><strong>Voltage Drop Percentage:</strong> <?php echo $result['voltage_drop_percent']; ?>%</div>
    <div class="result-item"><strong>Voltage at Load:</strong> <?php echo $result['voltage_at_load']; ?> V</div>
    <?php if ($result['voltage_drop_percent'] > 3): ?>
      <div class="result-item warning"><strong>Warning:</strong> Voltage drop exceeds 3%. Use a thicker wire.</div>
    <?php endif; ?>
  </div>
  <?php endif; ?>
</div>

<!-- ✅ Informational + FAQ Section -->
<div class="info-section">
  <div>
    <h2>How to Calculate Voltage Drop</h2>
    <p>Voltage drop occurs when current flows through a conductor and some energy is lost as heat. Keeping this drop under 3% ensures proper performance of electrical systems.</p>

    <div class="formula-box">V<sub>drop</sub> = I × R</div>

    <h3>Example</h3>
    <p>For a 120V circuit carrying 15A through 12 AWG wire over 50 ft:</p>
    <ul>
      <li>Resistance = (1.588 / 1000) × 50 × 2 = 0.1588 Ω</li>
      <li>Vdrop = 15 × 0.1588 = 2.38 V</li>
      <li>Voltage drop = 1.98%</li>
    </ul>

    <h3>Acceptable Voltage Drop Limits</h3>
    <table class="score-table">
      <thead><tr><th>Type</th><th>Max Drop (%)</th></tr></thead>
      <tbody>
        <tr><td>Lighting Circuit</td><td>3%</td></tr>
        <tr><td>Main Feeder</td><td>2%</td></tr>
        <tr><td>Total Combined</td><td>5%</td></tr>
      </tbody>
    </table>
  </div>

  <div>
    <h2>FAQs about Voltage Drop</h2>
    <h3>What is the formula for voltage drop?</h3>
    <p>The formula is <strong>V = I × R</strong>.</p>

    <h3>Is 4% voltage drop acceptable?</h3>
    <p>For most systems, voltage drop should be ≤3%. Anything above 5% is excessive.</p>

    <h3>What is the voltage drop per 100 feet?</h3>
    <p>It depends on the wire gauge and current load — 12 AWG carrying 15A loses about 4.8V per 100 feet.</p>

    <h3>What is Ohm’s law for voltage drop?</h3>
    <p>Ohm’s law defines voltage drop as <strong>V = I × R</strong>.</p>
  </div>
</div>
</div>

<!-- ✅ Inline modern CSS -->
<style>
<?php echo file_get_contents(__DIR__ . '/../css/style.css'); ?>
</style>

<!-- ✅ Structured Data for SEO -->
<script type="application/ld+json">
<?php echo json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<script type="application/ld+json">
<?php echo json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<?php require_once '../includes/footer.php'; ?>
