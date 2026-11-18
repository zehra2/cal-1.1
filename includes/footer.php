<style>
/* -- Site Footer — shared across all pages -- */
.site-footer{background:#0f172a;color:#94a3b8;margin-top:0;}
.footer-inner{max-width:1280px;margin:0 auto;padding:32px 20px 24px;}
.footer-bottom{border-top:1px solid #1e293b;padding-top:20px;font-size:.82rem;color:#475569;}
.footer-bottom a{color:#64748b;text-decoration:none;}
.footer-bottom a:hover{color:#e2e8f0;}
</style>

  <footer class="site-footer">
    <div class="footer-inner">

      <!-- Company / Legal row -->
      <div style="margin-bottom:20px;display:flex;flex-wrap:wrap;gap:24px;align-items:flex-start;">
        <div>
          <div style="font-size:.72rem;font-weight:800;text-transform:uppercase;letter-spacing:.07em;color:#475569;margin-bottom:10px;">Company</div>
          <div style="display:flex;flex-wrap:wrap;gap:6px 20px;">
            <a href="/about"              style="font-size:.83rem;color:#64748b;text-decoration:none;">About Us</a>
            <a href="/contact"            style="font-size:.83rem;color:#64748b;text-decoration:none;">Contact Us</a>
            <a href="/downloads/"         style="font-size:.83rem;color:#64748b;text-decoration:none;">Free Excel Templates</a>
            <a href="/blog/"              style="font-size:.83rem;color:#64748b;text-decoration:none;">Blog</a>
            <a href="/privacy-policy"     style="font-size:.83rem;color:#64748b;text-decoration:none;">Privacy Policy</a>
            <a href="/terms-and-conditions" style="font-size:.83rem;color:#64748b;text-decoration:none;">Terms &amp; Conditions</a>
          </div>
        </div>
        <div style="margin-left:auto;text-align:right;">
          <div style="font-size:.72rem;font-weight:800;text-transform:uppercase;letter-spacing:.07em;color:#475569;margin-bottom:10px;">Contact</div>
          <a href="mailto:info@americacalculator.com" style="font-size:.83rem;color:#64748b;text-decoration:none;">info@americacalculator.com</a>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> <a href="/">AmericaCalculator.com</a> — Free online calculators for finance, loans, real estate, construction, math, and more.
        
        </p>
        <p style="margin-top:.4rem;font-size:.78rem;color:#475569;">Results are estimates only. Always consult a qualified professional for financial, legal, or medical decisions. AmericaCalculator.com does not provide tax, legal, or financial advice.</p>
      </div>

    </div><!-- /.footer-inner -->
  </footer>

  <script src="/js/search.js"></script>
  <script src="/js/main.js"></script>
  <!-- Cookie Consent Banner (Google AdSense & GDPR/CCPA Compliance) -->
  <div id="cookie-consent-banner" style="display:none;position:fixed;bottom:0;left:0;right:0;background:#0f172a;color:#f8fafc;padding:16px 24px;border-top:1px solid #334155;z-index:999999;box-shadow:0 -4px 20px rgba(0,0,0,.25);font-family:system-ui,-apple-system,sans-serif;">
    <div style="max-width:1160px;margin:0 auto;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;gap:16px;">
      <div style="flex:1;min-width:280px;font-size:.875rem;line-height:1.55;color:#cbd5e1;">
        We use cookies and similar tracking technologies to analyze site traffic, personalize content, and display advertisements through Google AdSense. By using AmericaCalculator.com, you agree to our use of cookies and data processing as described in our <a href="/privacy-policy" style="color:#60a5fa;text-decoration:underline;">Privacy Policy</a> and <a href="/terms-and-conditions" style="color:#60a5fa;text-decoration:underline;">Terms</a>.
      </div>
      <div style="display:flex;gap:10px;flex-shrink:0;">
        <button id="cookie-accept-btn" style="background:#2563eb;color:#fff;border:none;border-radius:8px;padding:9px 20px;font-weight:600;font-size:.85rem;cursor:pointer;transition:background .2s;">Accept All</button>
        <button id="cookie-decline-btn" style="background:#334155;color:#e2e8f0;border:1px solid #475569;border-radius:8px;padding:9px 16px;font-weight:600;font-size:.85rem;cursor:pointer;transition:background .2s;">Essential Only</button>
      </div>
    </div>
  </div>
  <script>
    (function(){
      try {
        if (!localStorage.getItem('ac_cookie_consent')) {
          var b = document.getElementById('cookie-consent-banner');
          if (b) b.style.display = 'block';
        }
      } catch(e) {}
      var acc = document.getElementById('cookie-accept-btn');
      var dec = document.getElementById('cookie-decline-btn');
      if (acc) {
        acc.addEventListener('click', function(){
          try { localStorage.setItem('ac_cookie_consent', 'accepted'); } catch(e) {}
          document.getElementById('cookie-consent-banner').style.display = 'none';
        });
      }
      if (dec) {
        dec.addEventListener('click', function(){
          try { localStorage.setItem('ac_cookie_consent', 'declined'); } catch(e) {}
          document.getElementById('cookie-consent-banner').style.display = 'none';
        });
      }
    })();
  </script>
</body>
</html>

