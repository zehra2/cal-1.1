<?php
$pageTitle = 'Terminus Calculator';
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>

<!-- ✅ SEO Meta Tags -->
<title>Terminus Calculator - Black Ops 6 Zombies Code Generator | Free Online Tool</title>
<meta name="description" content="Free online Terminus Calculator for Call of Duty Black Ops 6 Zombies. Instantly calculate Easter Egg codes with X, Y, Z values. Step-by-step breakdown included.">
<meta name="keyword" content="terminus calculator, black ops 6 zombies, call of duty terminus, easter egg calculator, bo6 terminus code, zombies easter egg">
<meta name="author" content="Terminus Calculator">
<meta name="robot" content="index, follow">

<!-- ✅ Open Graph / Facebook -->
<meta property="og:title" content="Terminus Calculator - Black Ops 6 Zombies Code Generator | Free Online Tool">
<meta property="og:description" content="Instantly calculate Easter Egg codes for Call of Duty Black Ops 6 Zombies using X, Y, Z values. 100% accurate and free Terminus Calculator.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://americacalculator.com/calculators/terminus.php">
<meta property="og:image" content="https://americacalculator.com/images/terminus-calculator-og.jpg">
<meta property="og:locale" content="en_US">
<meta property="og:site_name" content="YourSiteName">

<!-- ✅ Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Terminus Calculator - Black Ops 6 Zombies Easter Egg Tool">
<meta name="twitter:description" content="Free Terminus Calculator to generate Easter Egg codes instantly for Call of Duty Black Ops 6 Zombies. Easy, accurate, and mobile-friendly.">
<meta name="twitter:image" content="https://americacalculator.com/images/terminus-calculator-og.jpg">
<meta name="twitter:creator" content="@YourTwitterHandle">

<?php
$result = null;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $x = intval($_POST['x'] ?? 0);
    $y = intval($_POST['y'] ?? 0);
    $z = intval($_POST['z'] ?? 0);
    
    if ($err = validate_number_range($x, 'X value', 0, 99)) $errors[] = $err;
    if ($err = validate_number_range($y, 'Y value', 0, 99)) $errors[] = $err;
    if ($err = validate_number_range($z, 'Z value', 0, 99)) $errors[] = $err;
    
    if (empty($errors)) {
        $formula1 = (2 * $x) + 11;
        $formula2 = (2 * $z) + $y - 5;
        $formula3 = ($y + $z) - $x;
        
        $code = sprintf('%02d%02d%02d', $formula1, $formula2, $formula3);
        
        $result = [
            'x' => $x,
            'y' => $y,
            'z' => $z,
            'code' => $code,
            'step1' => $formula1,
            'step2' => $formula2,
            'step3' => $formula3
        ];
    }
}
?>

<div class="calculator-page">
    <h1>Terminus Calculator</h1>
    <p class="description">Calculate the Terminus Easter Egg code for Call of Duty Black Ops 6 Zombies.</p>
    
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
            <label for="x">X Value:</label>
            <input type="number" id="x" name="x" required value="<?php echo sanitize_output($_POST['x'] ?? ''); ?>">
            <small>First symbol value (0-99)</small>
        </div>
        
        <div class="form-group">
            <label for="y">Y Value:</label>
            <input type="number" id="y" name="y" required value="<?php echo sanitize_output($_POST['y'] ?? ''); ?>">
            <small>Second symbol value (0-99)</small>
        </div>
        
        <div class="form-group">
            <label for="z">Z Value:</label>
            <input type="number" id="z" name="z" required value="<?php echo sanitize_output($_POST['z'] ?? ''); ?>">
            <small>Third symbol value (0-99)</small>
        </div>
        
        <button type="submit" class="btn">Calculate Code</button>
    </form>
    
    <?php if ($result): ?>
    <div class="result-section">
        <h2>Terminus Code Result</h2>
        <div class="result-item" style="font-size: 24px; font-weight: bold; color: #667eea;">
            <strong>Code:</strong> <?php echo $result['code']; ?>
        </div>
        <h3 style="margin-top: 20px;">Calculation Breakdown:</h3>
        <div class="result-item">
            <strong>First Digit (2X + 11):</strong> (2 × <?php echo $result['x']; ?>) + 11 = <?php echo $result['step1']; ?>
        </div>
        <div class="result-item">
            <strong>Second Digit (2Z + Y - 5):</strong> (2 × <?php echo $result['z']; ?>) + <?php echo $result['y']; ?> - 5 = <?php echo $result['step2']; ?>
        </div>
        <div class="result-item">
            <strong>Third Digit (Y + Z - X):</strong> <?php echo $result['y']; ?> + <?php echo $result['z']; ?> - <?php echo $result['x']; ?> = <?php echo $result['step3']; ?>
        </div>
    </div>
    <?php endif; ?>

    <!-- ... (About, Guide, and FAQ sections unchanged) ... -->
<!-- About Section -->
    <section id="about" class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white/95 backdrop-blur-md rounded-2xl shadow-xl p-8">
                <h3 class="text-3xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-info-circle mr-2 text-purple-600"></i>
                    What is a Terminus Calculator?
                </h3>
                <div class="prose prose-lg text-gray-700 space-y-4">
                    <p>
                        The <strong>Terminus Calculator</strong> is an essential tool for Call of Duty: Black Ops 6 Zombies players working on the Terminus Easter Egg. This complex puzzle requires players to find three symbol values (X, Y, Z) throughout the map and use them to generate a 6-digit code that unlocks crucial Easter Egg steps.
                    </p>
                    <p>
                        Our calculator eliminates the guesswork and complex math, providing you with instant, accurate results. Simply input your discovered symbol values, and we'll generate the correct code using the official Terminus Easter Egg formula.
                    </p>
                </div>
                
                <div class="grid md:grid-cols-3 gap-6 mt-8">
                    <div class="text-center p-4 bg-purple-50 rounded-lg">
                        <i class="fas fa-clock text-3xl text-purple-600 mb-3"></i>
                        <h4 class="font-semibold text-gray-800 mb-2">Save Time</h4>
                        <p class="text-sm text-gray-600">Get instant results without manual calculations</p>
                    </div>
                    <div class="text-center p-4 bg-purple-50 rounded-lg">
                        <i class="fas fa-bullseye text-3xl text-purple-600 mb-3"></i>
                        <h4 class="font-semibold text-gray-800 mb-2">100% Accurate</h4>
                        <p class="text-sm text-gray-600">Uses the exact formula from the game</p>
                    </div>
                    <div class="text-center p-4 bg-purple-50 rounded-lg">
                        <i class="fas fa-book-open text-3xl text-purple-600 mb-3"></i>
                        <h4 class="font-semibold text-gray-800 mb-2">Learn & Understand</h4>
                        <p class="text-sm text-gray-600">See step-by-step breakdown of calculations</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Guide Section -->
    <section id="guide" class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white/95 backdrop-blur-md rounded-2xl shadow-xl p-8">
                <h3 class="text-3xl font-bold text-gray-800 mb-6">
                    <i class="fas fa-map-signs mr-2 text-purple-600"></i>
                    How to Use the Terminus Calculator
                </h3>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-purple-600 text-white rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-2">Find Symbol Values</h4>
                            <p class="text-gray-600">Explore the Terminus map to locate the three symbol plaques. Each displays a value between 0-99 for X, Y, and Z.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-purple-600 text-white rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-2">Enter Values</h4>
                            <p class="text-gray-600">Input your discovered X, Y, and Z values into the calculator form above. Make sure each value is between 0-99.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-purple-600 text-white rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-2">Calculate Code</h4>
                            <p class="text-gray-600">Click "Calculate Terminus Code" to generate your 6-digit Easter Egg code instantly.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 w-10 h-10 bg-purple-600 text-white rounded-full flex items-center justify-center font-bold">4</div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-2">Use in Game</h4>
                            <p class="text-gray-600">Enter the generated code at the designated terminal in Terminus to progress the Easter Egg.</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 p-4 bg-yellow-50 border-l-4 border-yellow-400 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-lightbulb text-yellow-600 mr-3"></i>
                        <div>
                            <h5 class="font-semibold text-gray-800">Pro Tip:</h5>
                            <p class="text-gray-600">Take screenshots of the symbol locations for reference. The values reset each game, so you'll need to find them every time!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white/95 backdrop-blur-md rounded-2xl shadow-xl p-8">
                <h3 class="text-3xl font-bold text-gray-800 mb-6 text-center">
                    <i class="fas fa-question-circle mr-2 text-purple-600"></i>
                    Frequently Asked Questions
                </h3>
                
                <div class="space-y-4">
                    <div class="faq-item border-b pb-4">
                        <button class="faq-question w-full text-left flex justify-between items-center py-2" onclick="toggleFAQ(this)">
                            <span class="font-semibold text-gray-800">What is the Terminus Easter Egg in Black Ops 6?</span>
                            <i class="fas fa-chevron-down text-purple-600 transition-transform"></i>
                        </button>
                        <div class="faq-answer hidden mt-3 text-gray-600">
                            The Terminus Easter Egg is a complex puzzle in Call of Duty: Black Ops 6 Zombies that requires players to solve various challenges, including finding symbol values and calculating codes to progress through the main quest.
                        </div>
                    </div>
                    
                    <div class="faq-item border-b pb-4">
                        <button class="faq-question w-full text-left flex justify-between items-center py-2" onclick="toggleFAQ(this)">
                            <span class="font-semibold text-gray-800">Where can I find the X, Y, Z symbols in Terminus?</span>
                            <i class="fas fa-chevron-down text-purple-600 transition-transform"></i>
                        </button>
                        <div class="faq-answer hidden mt-3 text-gray-600">
                            The three symbol plaques are hidden throughout the Terminus map. They're typically found on walls, near important landmarks, or in hard-to-reach areas. Each game randomizes their locations and values, so exploration is key.
                        </div>
                    </div>
                    
                    <div class="faq-item border-b pb-4">
                        <button class="faq-question w-full text-left flex justify-between items-center py-2" onclick="toggleFAQ(this)">
                            <span class="font-semibold text-gray-800">Is this calculator accurate and up-to-date?</span>
                            <i class="fas fa-chevron-down text-purple-600 transition-transform"></i>
                        </button>
                        <div class="faq-answer hidden mt-3 text-gray-600">
                            Yes! Our calculator uses the exact mathematical formula from the game: First digit = (2×X) + 11, Second digit = (2×Z) + Y - 5, Third digit = Y + Z - X. We update it regularly to ensure accuracy with any game patches.
                        </div>
                    </div>
                    
                    <div class="faq-item border-b pb-4">
                        <button class="faq-question w-full text-left flex justify-between items-center py-2" onclick="toggleFAQ(this)">
                            <span class="font-semibold text-gray-800">Can I use this calculator on mobile devices?</span>
                            <i class="fas fa-chevron-down text-purple-600 transition-transform"></i>
                        </button>
                        <div class="faq-answer hidden mt-3 text-gray-600">
                            Absolutely! Our Terminus Calculator is fully responsive and works perfectly on smartphones, tablets, and desktop computers. You can easily switch between your game and calculator on the same device.
                        </div>
                    </div>
                    
                    <div class="faq-item border-b pb-4">
                        <button class="faq-question w-full text-left flex justify-between items-center py-2" onclick="toggleFAQ(this)">
                            <span class="font-semibold text-gray-800">Is this calculator free to use?</span>
                            <i class="fas fa-chevron-down text-purple-600 transition-transform"></i>
                        </button>
                        <div class="faq-answer hidden mt-3 text-gray-600">
                            Yes, the Terminus Calculator is completely free to use with no hidden costs, registrations, or limitations. We believe in providing free tools to help the gaming community.
                        </div>
                    </div>
                    
                    <div class="faq-item pb-4">
                        <button class="faq-question w-full text-left flex justify-between items-center py-2" onclick="toggleFAQ(this)">
                            <span class="font-semibold text-gray-800">What if my code doesn't work in the game?</span>
                            <i class="fas fa-chevron-down text-purple-600 transition-transform"></i>
                        </button>
                        <div class="faq-answer hidden mt-3 text-gray-600">
                            Double-check that you've entered the correct X, Y, Z values from your current game. Remember, these values change each match. If you're certain about the values, make sure you're entering the code at the correct terminal in the right sequence.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- ✅ FAQ Schema (JSON-LD for SEO) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is the Terminus Easter Egg in Black Ops 6?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Terminus Easter Egg is a complex puzzle in Call of Duty: Black Ops 6 Zombies that requires players to find symbol values (X, Y, Z) and calculate codes to progress the quest."
      }
    },
    {
      "@type": "Question",
      "name": "Where can I find the X, Y, Z symbols in Terminus?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The X, Y, Z symbols are hidden across the Terminus map — usually on walls or near landmarks. Their locations and values change each match."
      }
    },
    {
      "@type": "Question",
      "name": "Is this calculator accurate?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. The calculator uses the official game formula: (2×X)+11, (2×Z)+Y−5, and (Y+Z)−X to ensure accurate results."
      }
    },
    {
      "@type": "Question",
      "name": "Can I use the Terminus Calculator on mobile?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, it's fully mobile-friendly and works perfectly on smartphones, tablets, and desktops."
      }
    },
    {
      "@type": "Question",
      "name": "Is this calculator free?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, the Terminus Calculator is completely free with no registration or limits."
      }
    }
  ]
}
</script>

<?php require_once '../includes/footer.php'; ?>
