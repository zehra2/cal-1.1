<?php
/**
 * /includes/adsense.php
 * ONE file to manage ALL ads across AmericaCalculator.com
 * 
 * Your AdSense Publisher ID: ca-pub-2047576600281805
 * 
 * HOW TO USE IN ANY CALCULATOR:
 *   1. Add this at the top: require_once '../includes/adsense.php';
 *   2. Drop ad functions anywhere: echo adAboveHero(); echo adMidContent();
 *   3. Done. Manage all ads from this ONE file forever.
 */

// =============================================================================
// CONFIG — Edit these values once, applies site-wide
// =============================================================================

$adsensePublisher = 'ca-pub-2047576600281805';

// Set to false to HIDE all ads instantly (useful for testing, policy reviews, etc.)
$adsEnabled = true;

// Your Ad Unit Slot IDs from Google AdSense dashboard
// Replace these placeholder names with your actual slot IDs from AdSense
$adSlots = [
    'hero_leaderboard'  => '6715403966',   // Top of page, 728x90 or responsive
    'mid_content_1'     => '3163885774',      // After intro, 300x250/336x280
    'mid_content_2'     => '7206358557',      // After main content, 300x250/336x280
    'after_faq'         => '5893276886',          // After FAQ section, 300x250/336x280
    'mobile_anchor'     => '6664147080',      // Sticky mobile banner, 320x50
];

// =============================================================================
// CORE FUNCTION — Builds any ad unit
// =============================================================================

function buildAdUnit($slotKey, $format = 'auto', $sizeStyle = 'banner') {
    global $adsEnabled, $adsensePublisher, $adSlots;

    // Master kill switch — turn off all ads instantly
    if (!$adsEnabled) {
        return '<!-- Ads disabled -->';
    }

    $slotId = $adSlots[$slotKey] ?? '';

    // If slot ID is still the placeholder, show a warning (visible only to you)
    if (strpos($slotId, 'SLOT_ID') !== false || empty($slotId)) {
        return '<!-- ⚠️ AD SETUP NEEDED: Replace ' . $slotKey . ' placeholder in /includes/adsense.php -->';
    }

    // Size-specific styles
    $styles = [
        'banner'  => 'display:block;text-align:center;margin:1.5rem 0;min-height:90px;',
        'rect'    => 'display:block;text-align:center;margin:1.5rem 0;min-height:250px;',
        'square'  => 'display:block;text-align:center;margin:1.5rem 0;min-height:280px;',
        'mobile'  => 'display:inline-block;width:320px;height:50px;',
    ];

    $style = $styles[$sizeStyle] ?? $styles['banner'];

    return '
    <div class="ad-container" style="' . $style . '">
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="' . $adsensePublisher . '"
             data-ad-slot="' . $slotId . '"
             data-ad-format="' . $format . '"
             data-full-width-responsive="true"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>';
}

// =============================================================================
// PRE-BUILT AD POSITIONS — Just echo these in your calculators
// =============================================================================

/** 
 * Ad #1: Above the hero section (highest viewability, highest CPC)
 * Best placement: Right after breadcrumb, before H1
 */
function adAboveHero() {
    return buildAdUnit('hero_leaderboard', 'auto', 'banner');
}

/** 
 * Ad #2: First mid-content ad (after intro/above calculator)
 * Best placement: After first content paragraph, before calculator card
 */
function adMidContent1() {
    return buildAdUnit('mid_content_1', 'auto', 'rect');
}

/** 
 * Ad #3: Second mid-content ad (after calculator, before deep content)
 * Best placement: After calculator results, before FAQ
 */
function adMidContent2() {
    return buildAdUnit('mid_content_2', 'auto', 'rect');
}

/** 
 * Ad #4: After FAQ section (users who read FAQs are high-intent)
 * Best placement: After last FAQ answer, before related calculators
 */
function adAfterFAQ() {
    return buildAdUnit('after_faq', 'auto', 'rect');
}

/** 
 * Ad #5: Sticky anchor ad for mobile (only shows on phones)
 * Best placement: At very bottom of page, fixed to viewport bottom
 */
function adMobileAnchor() {
    global $adsEnabled, $adsensePublisher, $adSlots;

    if (!$adsEnabled) return '<!-- Ads disabled -->';

    $slotId = $adSlots['mobile_anchor'] ?? '';
    if (strpos($slotId, 'SLOT_ID') !== false || empty($slotId)) {
        return '<!-- ⚠️ AD SETUP NEEDED: Replace mobile_anchor placeholder -->';
    }

    return '
    <div id="mobile-anchor-ad" style="position:fixed;bottom:0;left:0;right:0;text-align:center;background:#fff;border-top:1px solid #e2e8f0;padding:4px;z-index:9999;display:none;">
        <ins class="adsbygoogle"
             style="display:inline-block;width:320px;height:50px"
             data-ad-client="' . $adsensePublisher . '"
             data-ad-slot="' . $slotId . '"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
    <script>
    (function() {
        if (window.innerWidth < 640) {
            document.getElementById("mobile-anchor-ad").style.display = "block";
            document.body.style.paddingBottom = "60px";
        }
    })();
    </script>';
}

// =============================================================================
// BONUS: Smart ad injection based on page category
// =============================================================================

/** 
 * Auto-detect calculator category from URL and serve relevant ads
 * Usage: echo adForCurrentPage();
 */
function adForCurrentPage() {
    $uri = $_SERVER['REQUEST_URI'] ?? '';

    if (strpos($uri, '/real-estate/') !== false) {
        return adMidContent1(); // Real estate = high CPC, show big ad
    }
    if (strpos($uri, '/finance/') !== false) {
        return adMidContent1(); // Finance = also high CPC
    }
    if (strpos($uri, '/health/') !== false) {
        return adMidContent2(); // Health = medium CPC
    }

    return adMidContent1(); // Default
}

// =============================================================================
// BONUS: Ad performance tracker (optional, for your own analytics)
// =============================================================================

/** 
 * Track which ad positions get the most clicks
 * Add this to your Google Analytics or keep a simple log
 */
function trackAdImpression($slotName) {
    // Example: log to your database or analytics
    // file_put_contents('/var/log/ad_impressions.log', date('Y-m-d H:i:s') . ' | ' . $slotName . "\n", FILE_APPEND);
    return ''; // Returns empty string so it doesn't break your layout
}
?>