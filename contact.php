<?php
/* ============================================================
   Load PHPMailer via Composer autoloader
   ============================================================ */
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception as MailerException;

/* ============================================================
   SMTP credentials
   ============================================================ */
define('SMTP_HOST',     'mail.americacalculator.com');
define('SMTP_PORT',     587);
define('SMTP_USER',     'info@americacalculator.com');
define('SMTP_PASS',     '2rG0h.N[uP-C.2AO');
define('SMTP_FROM',     'info@americacalculator.com');
define('SMTP_FROM_NAME','AmericaCalculator.com');
define('MAIL_TO',       'info@americacalculator.com');

/* ============================================================
   SEO / page meta
   ============================================================ */
$currentYear     = date('Y');
$pageTitle       = "Contact Us — AmericaCalculator.com";
$metaDescription = "Contact AmericaCalculator.com. Send questions, bug reports, or calculator suggestions. We respond within 1–2 business days.";
$schemaData = [
  '@context'   => 'https://schema.org',
  '@type'      => 'ContactPage',
  'name'       => 'Contact AmericaCalculator.com',
  'url'        => 'https://americacalculator.com/contact',
  'description'=> 'Contact page for AmericaCalculator.com.',
  'mainEntity' => [
    '@type'        => 'Organization',
    'name'         => 'AmericaCalculator.com',
    'url'          => 'https://americacalculator.com/',
    'email'        => 'info@americacalculator.com',
    'contactPoint' => [
      '@type'             => 'ContactPoint',
      'email'             => 'info@americacalculator.com',
      'contactType'       => 'customer support',
      'availableLanguage' => 'English',
    ],
  ],
];

/* ============================================================
   FORM PROCESSING
   ============================================================ */
$success      = false;
$errors       = [];
$mailerError  = '';
$form         = ['name' => '', 'email' => '', 'subject' => '', 'message' => ''];

// CSRF via session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    /* ── honeypot ── */
    if (!empty($_POST['website'])) {
        $success = true; // silently discard spam bot
    } else {

        /* ── CSRF check ── */
        $token = $_POST['csrf_token'] ?? '';
        if (!hash_equals($_SESSION['csrf_token'], $token)) {
            $errors[] = 'Security check failed. Please refresh the page and try again.';
        }

        /* ── Sanitise ── */
        $form['name']    = trim(strip_tags($_POST['name']    ?? ''));
        $form['email']   = trim(strip_tags($_POST['email']   ?? ''));
        $form['subject'] = trim(strip_tags($_POST['subject'] ?? ''));
        $form['message'] = trim(strip_tags($_POST['message'] ?? ''));

        /* ── Validate ── */
        if (empty($errors)) {
            if (mb_strlen($form['name']) < 2)
                $errors[] = 'Please enter your full name (min 2 characters).';
            if (!filter_var($form['email'], FILTER_VALIDATE_EMAIL))
                $errors[] = 'Please enter a valid email address.';
            if (mb_strlen($form['subject']) < 3)
                $errors[] = 'Please select or enter a subject.';
            if (mb_strlen($form['message']) < 10)
                $errors[] = 'Please enter a message (min 10 characters).';
            if (mb_strlen($form['message']) > 5000)
                $errors[] = 'Message is too long (max 5,000 characters).';
        }

        /* ── Send via PHPMailer ── */
        if (empty($errors)) {
            $mail = new PHPMailer(true);
            try {
                /* Server settings */
                $mail->isSMTP();
                $mail->Host        = SMTP_HOST;
                $mail->Port        = SMTP_PORT;
                $mail->SMTPAuth    = true;
                $mail->Username    = SMTP_USER;
                $mail->Password    = SMTP_PASS;
                $mail->SMTPSecure  = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->CharSet     = 'UTF-8';

                /* From / To */
                $mail->setFrom(SMTP_FROM, SMTP_FROM_NAME);
                $mail->addAddress(MAIL_TO, 'AmericaCalculator Team');
                $mail->addReplyTo($form['email'], $form['name']);

                /* Content */
                $mail->Subject = '[AmericaCalculator] ' . $form['subject'];

                $bodyHTML  = '<html><body style="font-family:sans-serif;color:#334155;">';
                $bodyHTML .= '<h2 style="color:#1e293b;">New Contact Form Submission</h2>';
                $bodyHTML .= '<table cellpadding="8" style="width:100%;border-collapse:collapse;">';
                $bodyHTML .= '<tr><td style="background:#f8fafc;font-weight:700;width:120px;">Name</td><td>' . htmlspecialchars($form['name']) . '</td></tr>';
                $bodyHTML .= '<tr><td style="background:#f8fafc;font-weight:700;">Email</td><td><a href="mailto:' . htmlspecialchars($form['email']) . '">' . htmlspecialchars($form['email']) . '</a></td></tr>';
                $bodyHTML .= '<tr><td style="background:#f8fafc;font-weight:700;">Subject</td><td>' . htmlspecialchars($form['subject']) . '</td></tr>';
                $bodyHTML .= '<tr><td style="background:#f8fafc;font-weight:700;vertical-align:top;">Message</td><td style="white-space:pre-wrap;">' . nl2br(htmlspecialchars($form['message'])) . '</td></tr>';
                $bodyHTML .= '<tr><td style="background:#f8fafc;font-weight:700;">Sent</td><td>' . date('Y-m-d H:i:s T') . '</td></tr>';
                $bodyHTML .= '<tr><td style="background:#f8fafc;font-weight:700;">IP</td><td>' . htmlspecialchars($_SERVER['REMOTE_ADDR'] ?? '') . '</td></tr>';
                $bodyHTML .= '</table></body></html>';

                $bodyText  = "New Contact Form Submission — AmericaCalculator.com\n";
                $bodyText .= str_repeat('-', 50) . "\n";
                $bodyText .= "Name:    {$form['name']}\n";
                $bodyText .= "Email:   {$form['email']}\n";
                $bodyText .= "Subject: {$form['subject']}\n";
                $bodyText .= "Message:\n{$form['message']}\n";
                $bodyText .= str_repeat('-', 50) . "\n";
                $bodyText .= "Sent: " . date('Y-m-d H:i:s') . "\n";

                $mail->isHTML(true);
                $mail->Body    = $bodyHTML;
                $mail->AltBody = $bodyText;

                $mail->send();

                /* Success — regenerate CSRF, clear form */
                $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
                $success = true;
                $form    = ['name' => '', 'email' => '', 'subject' => '', 'message' => ''];

            } catch (MailerException $e) {
                $mailerError = $mail->ErrorInfo;
                $errors[] = 'Sorry, there was a problem sending your message. Please email us directly at <a href="mailto:info@americacalculator.com">info@americacalculator.com</a>.';
            }
        }
    }
}

/* Regenerate CSRF after any POST */
$csrfToken = $_SESSION['csrf_token'];

require_once 'includes/header.php';
?>
<style>
body{background:#f8fafc;}
.pg-wrap{max-width:900px;margin:0 auto;padding:48px 20px 64px;}
.pg-bc{font-size:.8rem;color:#94a3b8;margin-bottom:1.5rem;}
.pg-bc a{color:#64748b;text-decoration:none;}
.pg-bc a:hover{color:#2563eb;}
/* Page header */
.contact-header{margin-bottom:36px;}
.contact-header h1{font-size:2rem;font-weight:900;color:#0f172a;margin:0 0 10px;line-height:1.2;}
.contact-header p{font-size:1rem;color:#64748b;line-height:1.7;margin:0;}
/* 2-col layout */
.contact-layout{display:grid;grid-template-columns:1fr 290px;gap:28px;align-items:start;}
/* Form card */
.form-card{background:#fff;border:1px solid #e2e8f0;border-radius:14px;padding:32px;box-shadow:0 2px 10px rgba(0,0,0,.05);}
.form-card h2{font-size:1.15rem;font-weight:800;color:#0f172a;margin:0 0 24px;}
.form-group{margin-bottom:18px;}
.form-group label{display:block;font-size:.85rem;font-weight:600;color:#1e293b;margin-bottom:6px;}
.form-group label .req{color:#ef4444;margin-left:2px;}
.form-group input,
.form-group select,
.form-group textarea{
  width:100%;padding:11px 14px;
  border:1.5px solid #e2e8f0;border-radius:8px;
  font-size:.92rem;color:#0f172a;outline:none;
  background:#fff;transition:border-color .2s,box-shadow .2s;
  font-family:inherit;box-sizing:border-box;
}
.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{border-color:#2563eb;box-shadow:0 0 0 3px rgba(37,99,235,.1);}
.form-group textarea{resize:vertical;min-height:130px;line-height:1.6;}
.form-group .hint{font-size:.74rem;color:#94a3b8;margin-top:5px;}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:14px;}
.hp-field{display:none!important;}
.submit-btn{
  width:100%;
  background:linear-gradient(135deg,#2563eb,#1d4ed8);
  color:#fff;padding:13px;border:none;border-radius:9px;
  font-size:1rem;font-weight:700;cursor:pointer;
  transition:opacity .2s,transform .15s;margin-top:6px;
}
.submit-btn:hover{opacity:.92;transform:translateY(-1px);}
.submit-btn:disabled{opacity:.6;cursor:not-allowed;transform:none;}
/* Alerts */
.alert{border-radius:10px;padding:14px 18px;margin-bottom:20px;font-size:.93rem;line-height:1.6;}
.alert-success{background:#f0fdf4;border:1.5px solid #86efac;color:#166534;}
.alert-error{background:#fef2f2;border:1.5px solid #fca5a5;color:#991b1b;}
.alert ul{padding-left:1.25rem;margin:6px 0 0;}
.alert ul li{margin-bottom:3px;}
.alert a{color:#1d4ed8;}
/* Char counter */
.char-wrap{display:flex;justify-content:flex-end;}
.char-count{font-size:.72rem;color:#94a3b8;margin-top:4px;}
.char-count.warn{color:#f59e0b;}
.char-count.over{color:#ef4444;}
/* Sidebar */
.contact-info{display:flex;flex-direction:column;gap:16px;}
.info-card{background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:20px;box-shadow:0 2px 8px rgba(0,0,0,.04);}
.info-card h3{font-size:.75rem;font-weight:800;text-transform:uppercase;letter-spacing:.07em;color:#94a3b8;margin:0 0 14px;}
.info-item{display:flex;align-items:flex-start;gap:10px;margin-bottom:12px;}
.info-item:last-child{margin-bottom:0;}
.info-item .ii{font-size:1.1rem;flex-shrink:0;line-height:1.4;}
.info-item .it{font-size:.86rem;color:#475569;line-height:1.5;}
.info-item .it strong{display:block;color:#0f172a;font-weight:700;margin-bottom:1px;}
.info-item .it a{color:#2563eb;text-decoration:none;}
.info-item .it a:hover{text-decoration:underline;}
.response-badge{background:#f0fdf4;border:1px solid #bbf7d0;border-radius:8px;padding:14px;text-align:center;}
.response-badge .rv{font-size:1.4rem;font-weight:900;color:#059669;display:block;line-height:1;}
.response-badge .rl{font-size:.75rem;color:#64748b;font-weight:600;margin-top:4px;display:block;}
/* Responsive */
@media(max-width:768px){
  .contact-layout{grid-template-columns:1fr;}
  .form-row{grid-template-columns:1fr;}
  .pg-wrap{padding:28px 14px 48px;}
  .form-card{padding:22px 16px;}
  .contact-header h1{font-size:1.6rem;}
}
</style>

<main id="main-content">
<div class="pg-wrap">

  <div class="pg-bc">
    <a href="/">Home</a> › Contact Us
  </div>

  <div class="contact-header">
    <h1>Contact AmericaCalculator.com</h1>
    <p>Found a bug? Have a calculator idea? Just want to say hello? Fill in the form below — we read every message and respond within 1–2 business days.</p>
  </div>

  <div class="contact-layout">

    <!-- ── FORM ── -->
    <div class="form-card">
      <h2>📩 Send Us a Message</h2>

      <?php if ($success): ?>
      <div class="alert alert-succes">
        <strong>✅ Message sent successfully!</strong><br>
        Thanks for reaching out. We'll reply to <strong><?php echo htmlspecialchars($form['email'] ?: 'your email'); ?></strong> within 1–2 business days.
      </div>
      <?php endif; ?>

      <?php if (!empty($errors)): ?>
      <div class="alert alert-error">
        <strong>Please fix the following:</strong>
        <ul>
          <?php foreach ($errors as $e): ?>
            <li><?php echo $e; /* already sanitised or static string */ ?></li>
          <?php endforeach; ?>
        </ul>
        <?php if ($mailerError): ?>
          <p style="font-size:.82rem;margin-top:8px;opacity:.75;">Technical detail: <?php echo htmlspecialchars($mailerError); ?></p>
        <?php endif; ?>
      </div>
      <?php endif; ?>

      <?php if (!$success): ?>
      <form method="POST" action="/contact" novalidate id="contactForm">
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken); ?>">

        <!-- Honeypot anti-spam -->
        <div class="hp-field" aria-hidden="true">
          <input type="text" name="website" tabindex="-1" autocomplete="off">
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="name">Full Name <span class="req">*</span></label>
            <input type="text" id="name" name="name"
              value="<?php echo htmlspecialchars($form['name']); ?>"
              placeholder="Jane Smith"
              maxlength="100" required autocomplete="name">
          </div>
          <div class="form-group">
            <label for="email">Email Address <span class="req">*</span></label>
            <input type="email" id="email" name="email"
              value="<?php echo htmlspecialchars($form['email']); ?>"
              placeholder="you@example.com"
              maxlength="150" required autocomplete="email">
          </div>
        </div>

        <div class="form-group">
          <label for="subject">Subject <span class="req">*</span></label>
          <select id="subject" name="subject" required>
            <option value="" disabled <?php echo empty($form['subject']) ? 'selected' : ''; ?>>Select a topic…</option>
            <option value="Calculator Question"        <?php echo $form['subject']==='Calculator Question'        ? 'selected':'' ?>>Calculator Question</option>
            <option value="Bug Report"                 <?php echo $form['subject']==='Bug Report'                 ? 'selected':'' ?>>Bug Report</option>
            <option value="Feature / New Calculator"   <?php echo $form['subject']==='Feature / New Calculator'   ? 'selected':'' ?>>Feature Request — Suggest a Calculator</option>
            <option value="Accuracy Issue"             <?php echo $form['subject']==='Accuracy Issue'             ? 'selected':'' ?>>Accuracy Issue</option>
            <option value="Advertising & Partnership"  <?php echo $form['subject']==='Advertising & Partnership'  ? 'selected':'' ?>>Advertising &amp; Partnership</option>
            <option value="General Feedback"           <?php echo $form['subject']==='General Feedback'           ? 'selected':'' ?>>General Feedback</option>
            <option value="Other"                      <?php echo $form['subject']==='Other'                      ? 'selected':'' ?>>Other</option>
          </select>
        </div>

        <div class="form-group">
          <label for="message">Message <span class="req">*</span></label>
          <textarea id="message" name="message"
            placeholder="Describe your question or suggestion in detail — which calculator, what result you expected, what you got, etc."
            maxlength="5000" required><?php echo htmlspecialchars($form['message']); ?></textarea>
          <div class="char-wrap">
            <span class="char-count" id="charCount">0 / 5000</span>
          </div>
          <div class="hint">The more detail you provide, the faster we can help.</div>
        </div>

        <button type="submit" class="submit-btn" id="submitBtn">Send Message →</button>
      </form>
      <?php endif; ?>
    </div>

    <!-- ── SIDEBAR ── -->
    <div class="contact-info">

      <div class="info-card">
        <h3>Contact Details</h3>
        <div class="info-item">
          <span class="ii">📧</span>
          <div class="it">
            <strong>Email</strong>
            <a href="mailto:info@americacalculator.com">info@americacalculator.com</a>
          </div>
        </div>
        <div class="info-item">
          <span class="ii">🌐</span>
          <div class="it">
            <strong>Website</strong>
            americacalculator.com
          </div>
        </div>
        <div class="info-item">
          <span class="ii">📍</span>
          <div class="it">
            <strong>Location</strong>
            United States
          </div>
        </div>
      </div>

      <div class="info-card">
        <h3>Response Time</h3>
        <div class="response-badge">
          <span class="rv">1–2 Days</span>
          <span class="rl">Typical email response</span>
        </div>
        <p style="font-size:.82rem;color:#64748b;margin:12px 0 0;line-height:1.55;">Bug reports get highest priority. We do <strong style="color:#0f172a;">not</strong> accept unsolicited link-building or guest post requests.</p>
      </div>

      <div class="info-card">
        <h3>Quick Links</h3>
        <div class="info-item"><span class="ii">📖</span><div class="it"><a href="/about">About AmericaCalculator.com</a></div></div>
        <div class="info-item"><span class="ii">🔒</span><div class="it"><a href="/privacy-policy">Privacy Policy</a></div></div>
        <div class="info-item"><span class="ii">📋</span><div class="it"><a href="/terms-and-condition">Terms &amp; Conditions</a></div></div>
        <div class="info-item"><span class="ii">🏠</span><div class="it"><a href="/">All Calculators</a></div></div>
      </div>

    </div>
  </div>

  <!-- Contact & Editorial Guidelines Section -->
  <div style="margin-top:2.5rem;background:#fff;border:1px solid #e2e8f0;border-radius:12px;padding:2rem;box-shadow:0 1px 3px rgba(0,0,0,0.05);">
    <h2 style="font-size:1.4rem;color:#0f172a;margin-top:0;margin-bottom:1rem;font-weight:700;">Calculator Verification &amp; Editorial Support Policy</h2>
    <p style="color:#334155;line-height:1.7;margin-bottom:1.25rem;">
      At <strong>AmericaCalculator.com</strong>, our mission is to deliver free, mathematically rigorous, and up-to-date calculation tools for American homeowners, real estate investors, contractors, small business owners, and employees. Because our tools inform critical financial, tax, and construction decisions, we maintain strict editorial and mathematical quality standards across every tool in our library.
    </p>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:1.5rem;margin-bottom:2rem;">
      <div style="background:#f8fafc;padding:1.25rem;border-radius:8px;border-left:4px solid #2563eb;">
        <h3 style="font-size:1.05rem;color:#1e293b;margin-top:0;margin-bottom:0.5rem;font-weight:600;">📐 Reporting a Calculation Discrepancy</h3>
        <p style="color:#475569;font-size:0.92rem;line-height:1.6;margin:0;">
          If you believe a formula or output does not match current local statutory guidelines (such as an Ohio municipal tax rate change or an IRC building code revision), please select <em>"Accuracy Issue"</em> above. Include the input values you entered, the calculated output produced, and a link or citation to the relevant official source (such as the IRS, state department of taxation, or municipal code).
        </p>
      </div>

      <div style="background:#f8fafc;padding:1.25rem;border-radius:8px;border-left:4px solid #10b981;">
        <h3 style="font-size:1.05rem;color:#1e293b;margin-top:0;margin-bottom:0.5rem;font-weight:600;">💡 Suggesting New Calculators</h3>
        <p style="color:#475569;font-size:0.92rem;line-height:1.6;margin:0;">
          We expand our tool catalog based on real user workflows. If you need a specialized tool—such as an industry-specific ROI model, specialized freight density estimation, or local county tax lookup—select <em>"Feature / New Calculator"</em>. Describe your preferred inputs, default assumptions, and desired summary outputs.
        </p>
      </div>

      <div style="background:#f8fafc;padding:1.25rem;border-radius:8px;border-left:4px solid #8b5cf6;">
        <h3 style="font-size:1.05rem;color:#1e293b;margin-top:0;margin-bottom:0.5rem;font-weight:600;">🔐 Privacy &amp; Data Security Assurance</h3>
        <p style="color:#475569;font-size:0.92rem;line-height:1.6;margin:0;">
          Your financial privacy is sacred. All calculation formulas on AmericaCalculator.com execute entirely within your web browser using client-side JavaScript. We never transmit, log, store, or sell the salary, mortgage balances, loan amounts, or property details you enter into our tools.
        </p>
      </div>
    </div>

    <h2 style="font-size:1.3rem;color:#0f172a;margin-top:1.5rem;margin-bottom:1rem;font-weight:700;">Frequently Asked Questions</h2>
    <div style="display:flex;flex-direction:column;gap:1rem;">
      <div style="border-bottom:1px solid #e2e8f0;padding-bottom:0.75rem;">
        <strong style="color:#1e293b;font-size:1rem;display:block;margin-bottom:0.35rem;">Are the tools on AmericaCalculator.com 100% free to use?</strong>
        <p style="color:#475569;font-size:0.92rem;line-height:1.6;margin:0;">
          Yes. All calculators, tables, formulas, and educational guides are completely free for personal and commercial planning. There are no paywalls, subscriptions, account registrations, or hidden fees required to access full functionality.
        </p>
      </div>

      <div style="border-bottom:1px solid #e2e8f0;padding-bottom:0.75rem;">
        <strong style="color:#1e293b;font-size:1rem;display:block;margin-bottom:0.35rem;">How often are tax brackets and statutory rates updated?</strong>
        <p style="color:#475569;font-size:0.92rem;line-height:1.6;margin:0;">
          Our calculation engines are audited and refreshed at the beginning of each calendar year and whenever mid-year legislative updates take effect. This includes updates to federal income tax standard deductions, FICA wage base caps, Ohio municipal tax reciprocal credits, and state unemployment thresholds.
        </p>
      </div>

      <div style="border-bottom:1px solid #e2e8f0;padding-bottom:0.75rem;">
        <strong style="color:#1e293b;font-size:1rem;display:block;margin-bottom:0.35rem;">Can I embed or link to AmericaCalculator tools from my site or educational curriculum?</strong>
        <p style="color:#475569;font-size:0.92rem;line-height:1.6;margin:0;">
          You are welcome to link directly to any of our calculators or blog resources. If you are an educator, real estate broker, or financial advisor who would like an official embed widget or co-branded calculator tool, please submit an inquiry selecting <em>"Advertising &amp; Partnership"</em>.
        </p>
      </div>

      <div>
        <strong style="color:#1e293b;font-size:1rem;display:block;margin-bottom:0.35rem;">What is the typical response turnaround for technical inquiries?</strong>
        <p style="color:#475569;font-size:0.92rem;line-height:1.6;margin:0;">
          Our technical review team reviews submissions Monday through Friday during standard US business hours. Valid bug reports and mathematical verification questions receive an initial response within 24 to 48 business hours.
        </p>
      </div>
    </div>
  </div>

</div>
</main>

<script>
(function () {
  var ta    = document.getElementById('message');
  var count = document.getElementById('charCount');
  var btn   = document.getElementById('submitBtn');

  function updateCount() {
    if (!ta || !count) return;
    var n = ta.value.length;
    count.textContent = n + ' / 5000';
    count.className = 'char-count' + (n > 4500 ? ' over' : n > 4000 ? ' warn' : '');
  }

  ta && ta.addEventListener('input', updateCount);
  updateCount();

  /* Disable submit on double-click */
  var form = document.getElementById('contactForm');
  form && form.addEventListener('submit', function () {
    if (btn) {
      btn.disabled = true;
      btn.textContent = 'Sending…';
    }
  });
})();
</script>

<?php require_once 'includes/footer.php'; ?>
