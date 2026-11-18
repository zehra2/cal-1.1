<?php
$currentYear     = date('Y');
$lastUpdated     = 'January 15, 2026';
$pageTitle       = "Privacy Policy — AmericaCalculator.com";
$metaDescription = "Privacy Policy for AmericaCalculator.com ($currentYear). Learn how we collect, use, and protect your information, including Google AdSense disclosures, cookie preferences, and user privacy rights.";
$schemaData = [
  '@context' => 'https://schema.org',
  '@type'    => 'WebPage',
  'name'     => 'Privacy Policy — AmericaCalculator.com',
  'url'      => 'https://americacalculator.com/privacy-policy',
  'description' => 'Privacy Policy for AmericaCalculator.com detailing data collection, Google AdSense, DoubleClick cookies, CCPA/CPRA, GDPR, and user rights.',
  'dateModified' => '2026-01-15',
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
.policy-body{background:#fff;border:1px solid #e2e8f0;border-radius:14px;padding:40px 40px;box-shadow:0 2px 10px rgba(0,0,0,.04);}
.policy-body h2{font-size:1.2rem;font-weight:800;color:#0f172a;margin:32px 0 12px;padding-top:24px;border-top:1px solid #f1f5f9;}
.policy-body h2:first-child{margin-top:0;padding-top:0;border-top:none;}
.policy-body h3{font-size:1rem;font-weight:700;color:#1e293b;margin:18px 0 8px;}
.policy-body p{color:#475569;line-height:1.78;font-size:.96rem;margin-bottom:12px;}
.policy-body p:last-child{margin-bottom:0;}
.policy-body ul{color:#475569;padding-left:1.4rem;line-height:1.78;font-size:.96rem;margin-bottom:12px;}
.policy-body ul li{margin-bottom:5px;}
.policy-body a{color:#2563eb;text-decoration:none;}
.policy-body a:hover{text-decoration:underline;}
.policy-body strong{color:#1e293b;}
.highlight-box{background:#eff6ff;border-left:4px solid #2563eb;border-radius:0 8px 8px 0;padding:14px 18px;margin:16px 0;font-size:.93rem;color:#1e3a8a;line-height:1.65;}
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
    <a href="/">Home</a> &rsaquo; Privacy Policy
  </div>

  <div class="policy-header">
    <h1>Privacy Policy</h1>
    <div class="meta">
      <strong>Last Updated:</strong> <?php echo $lastUpdated; ?> &nbsp;|&nbsp;
      <strong>Effective Date:</strong> January 1, 2026 &nbsp;|&nbsp;
      <strong>Website:</strong> <a href="https://americacalculator.com">americacalculator.com</a>
    </div>
  </div>

  <div class="policy-body">

    <div class="highlight-box">
      <strong>Plain English Privacy Commitment:</strong> When you use our financial, loan, or real estate calculators, your numbers are processed client-side inside your browser. We do not store, sell, or transmit your financial calculations or mortgage numbers to any server. We collect standard anonymous website analytics and use Google AdSense to serve non-intrusive advertisements.
    </div>

    <!-- Table of Contents -->
    <div class="toc">
      <h4>Table of Contents</h4>
      <ol>
        <li><a href="#information-we-collect">Information We Collect</a></li>
        <li><a href="#calculator-data">Calculator Inputs &amp; Financial Privacy</a></li>
        <li><a href="#how-we-use">How We Use Your Information</a></li>
        <li><a href="#google-adsense">Google AdSense &amp; DoubleClick DART Cookies</a></li>
        <li><a href="#google-analytic">Google Analytics</a></li>
        <li><a href="#cookie">Cookies &amp; Consent Management</a></li>
        <li><a href="#third-party-link">Third-Party Links</a></li>
        <li><a href="#data-security">Data Security</a></li>
        <li><a href="#childrens-privacy">Children's Privacy</a></li>
        <li><a href="#your-right">Your Rights &amp; Choices</a></li>
        <li><a href="#california">California Privacy Rights (CCPA / CPRA)</a></li>
        <li><a href="#eea-gdpr">EEA &amp; UK Privacy Rights (GDPR)</a></li>
        <li><a href="#change">Changes to This Policy</a></li>
        <li><a href="#contact-privacy">Contact Us</a></li>
      </ol>
    </div>

    <!-- 1 -->
    <h2 id="information-we-collect">1. Information We Collect</h2>
    <p>AmericaCalculator.com ("we," "our," or "u") provides free online calculators and downloadable spreadsheet models. We collect minimal information necessary to deliver, protect, and improve our services:</p>
    <ul>
      <li><strong>Information You Voluntarily Provide:</strong> When you submit our contact form, we receive your name, email address, message subject, and inquiry details. We use this information solely to answer your questions.</li>
      <li><strong>Log &amp; Device Data:</strong> Like most web publishers, our servers automatically log technical requests, including your IP address, browser type, operating system, referring URL, timestamp, and requested pages.</li>
      <li><strong>Analytics &amp; Usage Data:</strong> We collect aggregated statistics on page views, session duration, and tool usage to improve user experience.</li>
    </ul>

    <!-- 2 -->
    <h2 id="calculator-data">2. Calculator Inputs &amp; Financial Privacy</h2>
    <p><strong>We do not save or log the numbers you enter into our calculators.</strong></p>
    <p>All calculations (including mortgage amounts, interest rates, salary estimates, loan balances, concrete dimensions, and investment horizons) are computed locally using JavaScript within your device's web browser. Calculator inputs are not transmitted to our database, are never sold, and are discarded once you close or refresh your browser tab.</p>

    <!-- 3 -->
    <h2 id="how-we-use">3. How We Use Your Information</h2>
    <p>We use the limited information we collect to:</p>
    <ul>
      <li>Operate, optimize, and maintain our free calculators and downloadable templates</li>
      <li>Respond to user feedback and support inquiries</li>
      <li>AAnalyze aggregated traffic patterns to detect technical faults and improve site speed</li>
      <li>Prevent malicious traffic, DDoS attacks, and abusive behavior</li>
      <li>Serve relevant, contextual advertisements through Google AdSense to fund our free tools</li>
      <li>Comply with applicable legal, statutory, and regulatory obligations</li>
    </ul>

    <!-- 4 -->
    <h2 id="google-adsense">4. Google AdSense &amp; DoubleClick DART Cookies</h2>
    <p>We partner with <strong>Google AdSense</strong> to display advertisements across AmericaCalculator.com. Our verified publisher ID is: <strong>ca-pub-2047576600281805</strong>.</p>
    <p>Google is a third-party vendor that uses cookies (such as the DoubleClick DART cookie) to serve ads based on a user's prior visits to AmericaCalculator.com and other websites across the internet. These cookies enable Google and its advertising partners to serve personalized ads based on your web browsing history.</p>
    <p><strong>How to Opt Out:</strong></p>
    <ul>
      <li>You may opt out of personalized advertising by visiting <a href="https://adssettings.google.com" target="_blank" rel="noopener noreferrer">Google Ads Settings</a>.</li>
      <li>You may also opt out of third-party vendor cookies for personalized advertising by visiting <a href="https://www.aboutads.info/choice" target="_blank" rel="noopener noreferrer">AboutAds.info Choices</a> or the <a href="https://www.networkadvertising.org/choices/" target="_blank" rel="noopener noreferrer">Network Advertising Initiative (NAI)</a>.</li>
      <li>For comprehensive details on how Google processes data when you use partner sites, review <a href="https://policies.google.com/technologies/partner-site" target="_blank" rel="noopener noreferrer">How Google uses information from sites or apps that use our services</a>.</li>
    </ul>

    <!-- 5 -->
    <h2 id="google-analytic">5. Google Analytics</h2>
    <p>We utilize <strong>Google Analytics</strong> to evaluate website traffic and user engagement. Google Analytics uses first-party cookies to report on user interactions anonymously without identifying individual visitors.</p>
    <p>You can prevent Google Analytics from collecting your browsing data across all websites by downloading and installing the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener noreferrer">Google Analytics Opt-out Browser Add-on</a>.</p>

    <!-- 6 -->
    <h2 id="cookie">6. Cookies &amp; Consent Management</h2>
    <p>Cookies are small text files placed on your device. We categorize cookies as follows:</p>
    <ul>
      <li><strong>Essential Cookies:</strong> Strictly necessary for core site navigation, form security (CSRF protection), and saving your cookie banner preferences.</li>
      <li><strong>Analytics Cookies:</strong> Help us measure visitor counts and popular calculators to optimize performance.</li>
      <li><strong>Advertising Cookies:</strong> Set by Google AdSense to serve relevant advertising and measure ad performance.</li>
    </ul>
    <p>You can adjust your cookie settings at any time using our on-site cookie banner or through your browser preferences. To learn more about managing and deleting cookies, visit <a href="https://www.allaboutcookies.org" target="_blank" rel="noopener noreferrer">AllAboutCookies.org</a>.</p>

    <!-- 7 -->
    <h2 id="third-party-link">7. Third-Party Links</h2>
    <p>Our calculators and editorial articles may contain external links to government resources (e.g., IRS.gov, SBA.gov, Ohio.gov) or industry references. We are not responsible for the privacy practices, content, or terms of third-party websites. We encourage you to read the privacy policies of any external website you visit.</p>

    <!-- 8 -->
    <h2 id="data-security">8. Data Security</h2>
    <p>We implement industry-standard administrative, physical, and technical safeguards to protect data against unauthorized access, loss, or alteration. All communication between your web browser and our servers is secured with TLS/HTTPS 256-bit encryption.</p>

    <!-- 9 -->
    <h2 id="childrens-privacy">9. Children's Online Privacy Protection (COPPA)</h2>
    <p>Our website is directed to general audiences and is not intended for children under 13 years of age. We do not knowingly collect or solicit personal information from children under 13. If you believe a child has submitted personal details through our contact form, please email <a href="mailto:info@americacalculator.com">info@americacalculator.com</a> and we will promptly delete the data.</p>

    <!-- 10 -->
    <h2 id="your-right">10. Your Rights &amp; Choices</h2>
    <p>Depending on your jurisdiction, you possess specific legal rights regarding personal data, including the right to access, correct, or delete personal details you have submitted to us (such as contact inquiries). To exercise these rights, email <a href="mailto:info@americacalculator.com">info@americacalculator.com</a>.</p>

    <!-- 11 -->
    <h2 id="california">11. California Consumer Privacy (CCPA / CPRA) &amp; US State Laws</h2>
    <p>If you are a resident of California, Virginia, Colorado, Connecticut, or other states with comprehensive consumer privacy statutes, you have specific statutory rights:</p>
    <ul>
      <li><strong>Right to Know / Access:</strong> Request disclosure of the categories and specific pieces of personal information collected.</li>
      <li><strong>Right to Delete:</strong> Request deletion of your personal data, subject to legal exceptions.</li>
      <li><strong>Right to Correct:</strong> Request correction of inaccurate personal data.</li>
      <li><strong>Right to Opt Out of Sale or Sharing:</strong> We do not sell personal information for monetary compensation. To the extent that third-party advertising cookies constitute "sharing" under California law, you may opt out using our cookie banner or Google's ad settings.</li>
      <li><strong>Right to Non-Discrimination:</strong> You will never receive discriminatory treatment or reduced site access for exercising your privacy rights.</li>
    </ul>

    <!-- 12 -->
    <h2 id="eea-gdpr">12. European Economic Area (EEA) &amp; UK User Rights (GDPR)</h2>
    <p>If you reside in the European Economic Area or the United Kingdom, our legal basis for collecting and using data described in this policy depends on the specific context:</p>
    <ul>
      <li><strong>Legitimate Interests:</strong> Operating, securing, and improving our free website and serving non-personalized contextual ads.</li>
      <li><strong>Consent:</strong> Serving personalized advertisements and optional analytics cookies via our cookie consent banner.</li>
    </ul>
    <p>EEA and UK residents have the right to lodge a complaint with their national supervisory data protection authority.</p>

    <!-- 13 -->
    <h2 id="change">13. Changes to This Privacy Policy</h2>
    <p>We may update this Privacy Policy periodically to reflect technological changes, legal requirements, or improvements to our calculators. Any modifications will be posted on this page with an updated "Last Updated" date. Continued use of the website following changes constitutes acceptance of the revised policy.</p>

    <!-- 14 -->
    <h2 id="contact-privacy">14. Contact Us</h2>
    <p>If you have questions, privacy inquiries, or data requests, contact our compliance team:</p>
    <ul>
      <li><strong>Email:</strong> <a href="mailto:info@americacalculator.com">info@americacalculator.com</a></li>
      <li><strong>Contact Page:</strong> <a href="/contact">americacalculator.com/contact</a></li>
      <li><strong>Mailing Address:</strong> AmericaCalculator.com Compliance, Columbus, OH, USA</li>
    </ul>

  </div><!-- /.policy-body -->
</div>
</main>

<?php require_once 'includes/footer.php'; ?>
