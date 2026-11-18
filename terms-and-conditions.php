<?php
$currentYear = date('Y');
$lastUpdated = 'July 1, 2025';
$pageTitle       = "Terms and Conditions — AmericaCalculator.com";
$metaDescription = "Terms and Conditions for AmericaCalculator.com. By using our free online calculators you agree to these terms covering accuracy, disclaimers, intellectual property, and acceptable use.";
$schemaData = [
  '@context' => 'https://schema.org',
  '@type'    => 'WebPage',
  'name'     => 'Terms and Conditions — AmericaCalculator.com',
  'url'      => 'https://americacalculator.com/terms-and-conditions',
  'description' => 'Terms and Conditions for AmericaCalculator.com.',
  'dateModified' => '2025-07-01',
  'publisher' => ['@type'=>'Organization','name'=>'AmericaCalculator.com','url'=>'https://americacalculator.com/'],
];
require_once 'includes/header.php';
?>
<style>
body{background:#f8fafc;}
.pg-wrap{max-width:820px;margin:0 auto;padding:48px 20px 64px;}
.pg-bc{font-size:.8rem;color:#94a3b8;margin-bottom:1.5rem;}
.pg-bc a{color:#64748b;text-decoration:none;}
.pg-bc a:hover{color:#2563eb;}
.policy-header{margin-bottom:36px;}
.policy-header h1{font-size:2rem;font-weight:900;color:#0f172a;margin:0 0 10px;}
.policy-header .meta{font-size:.85rem;color:#64748b;}
.policy-header .meta strong{color:#475569;}
.policy-body{background:#fff;border:1px solid #e2e8f0;border-radius:14px;padding:40px;box-shadow:0 2px 10px rgba(0,0,0,.04);}
.policy-body h2{font-size:1.2rem;font-weight:800;color:#0f172a;margin:32px 0 12px;padding-top:24px;border-top:1px solid #f1f5f9;}
.policy-body h2:first-child{margin-top:0;padding-top:0;border-top:none;}
.policy-body h3{font-size:1rem;font-weight:700;color:#1e293b;margin:16px 0 8px;}
.policy-body p{color:#475569;line-height:1.78;font-size:.96rem;margin-bottom:12px;}
.policy-body p:last-child{margin-bottom:0;}
.policy-body ul{color:#475569;padding-left:1.4rem;line-height:1.78;font-size:.96rem;margin-bottom:12px;}
.policy-body ul li{margin-bottom:5px;}
.policy-body a{color:#2563eb;text-decoration:none;}
.policy-body a:hover{text-decoration:underline;}
.policy-body strong{color:#1e293b;}
.highlight-box{background:#fffbeb;border-left:4px solid #f59e0b;border-radius:0 8px 8px 0;padding:14px 18px;margin:16px 0;font-size:.93rem;color:#92400e;line-height:1.65;}
.highlight-box.blue{background:#eff6ff;border-left-color:#2563eb;color:#1e3a8a;}
.toc{background:#f8fafc;border:1px solid #e2e8f0;border-radius:10px;padding:18px 22px;margin-bottom:32px;}
.toc h4{font-size:.8rem;font-weight:800;text-transform:uppercase;letter-spacing:.06em;color:#94a3b8;margin:0 0 10px;}
.toc ol{padding-left:1.3rem;margin:0;color:#475569;font-size:.88rem;line-height:1.9;}
.toc ol li a{color:#2563eb;text-decoration:none;}
.toc ol li a:hover{text-decoration:underline;}
@media(max-width:768px){.policy-body{padding:24px 18px;}.pg-wrap{padding:28px 14px 48px;}.policy-header h1{font-size:1.6rem;}}
</style>

<main id="main-content">
<div class="pg-wrap">

  <div class="pg-bc">
    <a href="/">Home</a> › Terms and Conditions
  </div>

  <div class="policy-header">
    <h1>Terms and Conditions</h1>
    <div class="meta">
      <strong>Last Updated:</strong> <?php echo $lastUpdated; ?> &nbsp;|&nbsp;
      <strong>Effective Date:</strong> January 1, 2025 &nbsp;|&nbsp;
      <strong>Website:</strong> <a href="https://americacalculator.com">americacalculator.com</a>
    </div>
  </div>

  <div class="policy-body">

    <div class="toc">
      <h4>Table of Contents</h4>
      <ol>
        <li><a href="#acceptance">Acceptance of Terms</a></li>
        <li><a href="#description">Description of Service</a></li>
        <li><a href="#disclaimer">Disclaimer — Accuracy &amp; Not Professional Advice</a></li>
        <li><a href="#no-guarantee">No Guarantee of Results</a></li>
        <li><a href="#intellectual-property">Intellectual Property</a></li>
        <li><a href="#acceptable-use">Acceptable Use</a></li>
        <li><a href="#third-party">Third-Party Services &amp; Advertising</a></li>
        <li><a href="#limitation">Limitation of Liability</a></li>
        <li><a href="#indemnification">Indemnification</a></li>
        <li><a href="#availability">Service Availability</a></li>
        <li><a href="#governing-law">Governing Law</a></li>
        <li><a href="#changes-term">Changes to These Terms</a></li>
        <li><a href="#contact-term">Contact Us</a></li>
      </ol>
    </div>

    <div class="highlight-box">
      <strong>Important:</strong> By accessing or using AmericaCalculator.com, you agree to be bound by these Terms and Conditions. If you do not agree with any part of these terms, you may not use our website.
    </div>

    <!-- 1 -->
    <h2 id="acceptance">1. Acceptance of Terms</h2>
    <p>Welcome to AmericaCalculator.com ("Site," "Service," "we," "us," or "our"). These Terms and Conditions ("Term") govern your access to and use of our website, including all calculators, content, and features made available at <a href="https://americacalculator.com">https://americacalculator.com</a>.</p>
    <p>By accessing or using our Service, you confirm that you are at least 13 years of age, have read and understood these Terms, and agree to be legally bound by them. If you are using the Service on behalf of an organization, you represent and warrant that you have the authority to bind that organization to these Terms.</p>

    <!-- 2 -->
    <h2 id="description">2. Description of Service</h2>
    <p>AmericaCalculator.com provides free, browser-based calculation tools for informational and educational purposes. Our calculators cover a range of topics including, but not limited to:</p>
    <ul>
      <li>Loan and mortgage payment calculations (SBA, auto, personal, land, RV)</li>
      <li>Real estate investment analysis (cap rate, rental yield, cash-on-cash return, DSCR)</li>
      <li>Ohio payroll and tax withholding estimation</li>
      <li>Construction material volume and cost estimation</li>
      <li>Business financial calculations (markup, profit margin, freelance rate)</li>
      <li>Mathematical and academic tools</li>
    </ul>
    <p>All calculations are performed locally within your web browser. No calculation inputs are transmitted to or stored on our servers.</p>

    <!-- 3 -->
    <h2 id="disclaimer">3. Disclaimer — Accuracy &amp; Not Professional Advice</h2>
    <div class="highlight-box">
      <strong>The results produced by AmericaCalculator.com are estimates for informational purposes only. They do not constitute financial, tax, legal, medical, real estate, or any other form of professional advice.</strong>
    </div>
    <p>While we strive to keep our calculators accurate and up-to-date with current US tax laws, IRS brackets, and market data, we make no representations or warranties of any kind, express or implied, regarding:</p>
    <ul>
      <li>The accuracy, completeness, or timeliness of any calculation result</li>
      <li>The suitability of any result for a specific financial decision</li>
      <li>The compliance of any result with current federal, state, or local laws</li>
    </ul>
    <p><strong>Tax and financial laws change frequently.</strong> Always verify important calculations with a qualified professional — a licensed accountant, financial advisor, attorney, mortgage broker, or other relevant expert — before making any financial, legal, or business decision based on results from our tools.</p>
    <p>AmericaCalculator.com expressly disclaims all liability for any errors, inaccuracies, or omissions in calculator results, and for any action taken or not taken in reliance on those results.</p>

    <!-- 4 -->
    <h2 id="no-guarantee">4. No Guarantee of Results</h2>
    <p>Our calculators use standard formulas, publicly available tax tables, and general assumptions. Your actual results may differ significantly based on factors including but not limited to:</p>
    <ul>
      <li>Your specific lender's terms, fees, and underwriting criteria</li>
      <li>Your actual W-4 withholding elections and employer payroll settings</li>
      <li>Changes in tax law after the date of our last update</li>
      <li>Local municipality tax rules not captured in our tools</li>
      <li>Property-specific market conditions, inspection findings, or transaction costs</li>
      <li>Individual credit scores, debt-to-income ratios, and financial circumstances</li>
    </ul>
    <p>We provide estimates — not guarantees. The difference between an estimate and an actual result can be significant. Treat our tools as a starting point for research, not a final answer.</p>

    <!-- 5 -->
    <h2 id="intellectual-property">5. Intellectual Property</h2>
    <p>All content on AmericaCalculator.com — including but not limited to calculator code, text, graphics, logos, icons, design elements, and the compilation of content — is the property of AmericaCalculator.com and is protected by applicable US and international copyright, trademark, and intellectual property laws.</p>
    <h3>What You May Do</h3>
    <ul>
      <li>Use our calculators for personal or business research</li>
      <li>Share links to our calculator pages</li>
      <li>Reference or cite our content with proper attribution to AmericaCalculator.com</li>
    </ul>
    <h3>What You May Not Do</h3>
    <ul>
      <li>Copy, reproduce, or republish our calculator code or substantial content without written permission</li>
      <li>Create derivative works based on our calculators without written permission</li>
      <li>Use our trademarks, logos, or brand elements without prior written consent</li>
      <li>Scrape or systematically extract data from our website using automated tools</li>
      <li>Frame or embed our calculators on third-party websites without authorization</li>
    </ul>
    <p>To request permission for commercial use or content licensing, contact us at <a href="mailto:info@americacalculator.com">info@americacalculator.com</a>.</p>

    <!-- 6 -->
    <h2 id="acceptable-use">6. Acceptable Use</h2>
    <p>By using AmericaCalculator.com, you agree not to:</p>
    <ul>
      <li>Use the Service for any unlawful purpose or in violation of any applicable laws</li>
      <li>Attempt to gain unauthorized access to any portion of the website or its infrastructure</li>
      <li>Transmit any harmful, offensive, defamatory, or otherwise objectionable content</li>
      <li>Interfere with or disrupt the integrity or performance of the website</li>
      <li>Use automated bots, scrapers, or crawlers to access the website beyond normal browsing</li>
      <li>Misrepresent calculator results as official tax advice, legal advice, or lender commitments</li>
      <li>Engage in any activity that could damage our reputation or harm other users</li>
    </ul>
    <p>We reserve the right to terminate or restrict access to the Service for any user who violates these terms at our sole discretion.</p>

    <!-- 7 -->
    <h2 id="third-party">7. Third-Party Services &amp; Advertising</h2>
    <p>Our website uses the following third-party services:</p>
    <ul>
      <li><strong>Google AdSense</strong> (publisher ID: ca-pub-2047576600281805) — to display advertisements. Google may use cookies to personalize ads based on your browsing history.</li>
      <li><strong>Google Analytics</strong> — to collect anonymous website usage statistics.</li>
    </ul>
    <p>These third-party services have their own terms of service and privacy policies, which govern their data collection and use. We encourage you to review their policies. We are not responsible for the content, privacy practices, or terms of any third-party services.</p>
    <p>Our website may contain links to third-party websites. These links are provided for convenience only. We have no control over third-party websites and are not responsible for their content or practices.</p>
    <p><strong>Advertisements displayed on our website are provided by Google AdSense and do not constitute our endorsement of any advertised product or service.</strong></p>

    <!-- 8 -->
    <h2 id="limitation">8. Limitation of Liability</h2>
    <p>To the fullest extent permitted by applicable law, AmericaCalculator.com, its owners, operators, employees, and affiliates shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising from:</p>
    <ul>
      <li>Your use of or inability to use the Service</li>
      <li>Any financial decision made in reliance on calculator results</li>
      <li>Errors, inaccuracies, or omissions in any calculator output</li>
      <li>Unauthorized access to or alteration of your data</li>
      <li>Any interruption or cessation of the Service</li>
    </ul>
    <p>In no event shall our total liability to you exceed the amount you paid to access the Service, which — given that AmericaCalculator.com is free — shall be zero dollars ($0.00).</p>
    <p>Some jurisdictions do not allow the exclusion of certain warranties or limitation of liability. In such jurisdictions, our liability is limited to the greatest extent permitted by law.</p>

    <!-- 9 -->
    <h2 id="indemnification">9. Indemnification</h2>
    <p>You agree to indemnify, defend, and hold harmless AmericaCalculator.com and its owners, operators, employees, and affiliates from and against any claims, liabilities, damages, losses, and expenses (including reasonable attorneys' fees) arising out of or in connection with:</p>
    <ul>
      <li>Your use of the Service in violation of these Terms</li>
      <li>Your violation of any applicable law or regulation</li>
      <li>Your infringement of any third-party intellectual property rights</li>
      <li>Any misrepresentation of calculator results to a third party</li>
    </ul>

    <!-- 10 -->
    <h2 id="availability">10. Service Availability</h2>
    <p>We strive to keep AmericaCalculator.com available at all times, but we do not guarantee uninterrupted or error-free access. We reserve the right to:</p>
    <ul>
      <li>Modify, suspend, or discontinue the Service (or any part of it) at any time without notice</li>
      <li>Update, correct, or remove calculator content at any time</li>
      <li>Restrict access to some or all of the Service at our discretion</li>
    </ul>
    <p>We will not be liable to you or any third party for any modification, suspension, or discontinuation of the Service.</p>

    <!-- 11 -->
    <h2 id="governing-law">11. Governing Law</h2>
    <p>These Terms and Conditions shall be governed by and construed in accordance with the laws of the <strong>United States of America</strong>, without regard to its conflict of law provisions.</p>
    <p>Any disputes arising from or relating to these Terms or your use of the Service shall be resolved through binding arbitration or in the courts of the United States, as applicable. You agree to submit to the personal jurisdiction of such courts.</p>

    <!-- 12 -->
    <h2 id="changes-term">12. Changes to These Terms</h2>
    <p>We reserve the right to update or modify these Terms and Conditions at any time. When we make changes, we will update the "Last Updated" date at the top of this page. If we make material changes, we may provide additional notice.</p>
    <p>Your continued use of the Service after any changes constitutes your acceptance of the revised Terms. If you do not agree to the revised Terms, you must stop using the Service.</p>
    <p>We encourage you to review these Terms periodically to stay informed about your rights and obligations.</p>

    <!-- 13 -->
    <h2 id="contact-term">13. Contact Us</h2>
    <p>If you have any questions about these Terms and Conditions, please contact us:</p>
    <ul>
      <li><strong>Email:</strong> <a href="mailto:info@americacalculator.com">info@americacalculator.com</a></li>
      <li><strong>Contact Form:</strong> <a href="/contact">americacalculator.com/contact</a></li>
      <li><strong>Website:</strong> <a href="https://americacalculator.com">https://americacalculator.com</a></li>
    </ul>
    <p style="margin-top:24px;font-size:.88rem;color:#94a3b8;">These Terms and Conditions were last updated on <?php echo $lastUpdated; ?> and are effective as of January 1, 2025.</p>

  </div><!-- /policy-body -->
</div>
</main>

<?php require_once 'includes/footer.php'; ?>
