import os
import re
import json
import subprocess

LIVE_DIR = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com"
WORKSPACE_DIR = r"c:\Users\COMTECH 03122811806\Downloads\Beyond SEO  Your AI-Powered SEO Agency in One Skill"
BEYOND_DIR = os.path.join(WORKSPACE_DIR, "beyond-seo")
BUILT_DIR = os.path.join(BEYOND_DIR, "built-calculators")
BLUEPRINTS_DIR = os.path.join(BEYOND_DIR, "new-calculators")
BLOG_DIR = os.path.join(BEYOND_DIR, "blog-posts")
REWRITES_DIR = os.path.join(BEYOND_DIR, "rewrites")

def clean_clean(text):
    if not text:
        return ""
    
    # 1. Strip raw 4-byte astral emojis that trigger encoding corruption on Windows
    text = re.sub(r'[\U00010000-\U0010ffff]', '', text)

    # 2. Strip broken emoji prefixes and mojibake tokens without touching words
    bad_tokens = [
        'dYs ', 'dY"?', 'dY"S', 'dY"O', 'dY r', 'dYO?', 'dY>', 'dY\'',
        'â–¼', 'â€|', 'â€”', 'â€“', 'â†’', 'âœ“',
        '?\"', '?\'',
    ]
    for bt in bad_tokens:
        text = text.replace(bt, '')

    # 3. Clean leading weird characters in subtitle headings (e.g. "> 1. " -> ">1. ")
    text = re.sub(r'(class="section-subtitle"[^>]*>)[^a-zA-Z0-9<]*(\d+\.)', r'\1\2', text)

    # 4. Safe typographic entity conversions
    text = text.replace('—', '&mdash;')
    text = text.replace('–', '&ndash;')
    text = text.replace('→', '&rarr;')
    text = text.replace('✓', '&#10003;')

    # 5. Restore any corrupted words
    word_map = [
        ('÷nnual', 'Annual'), ('+nnual', 'Annual'), ('nnual', 'Annual'),
        ('Annual', 'Annual'), ('AAnnual', 'Annual'),
        ('÷PR', 'APR'), ('+PR', 'APR'), ('PR', 'APR'),
        ('APR', 'APR'), ('AAPR', 'APR'),
        ('÷mount', 'Amount'), ('+mount', 'Amount'), ('mount', 'Amount'),
        ('Amount', 'Amount'), ('AAmount', 'Amount'),
        ('÷verage', 'Average'), ('+verage', 'Average'), ('verage', 'Average'),
        ('Average', 'Average'), ('AAverage', 'Average'),
        ('÷ssessed', 'Assessed'), ('+ssessed', 'Assessed'), ('ssessed', 'Assessed'),
        ('Assessed', 'Assessed'), ('AAssessed', 'Assessed'),
        ('÷ffordability', 'Affordability'), ('+ffordability', 'Affordability'), ('ffordability', 'Affordability'),
        ('Affordability', 'Affordability'),
        ('÷ddition', 'Addition'), ('+ddition', 'Addition'), ('ddition', 'Addition'),
        ('Addition', 'Addition'),
        ('÷mortization', 'Amortization'), ('+mortization', 'Amortization'), ('mortization', 'Amortization'),
        ('Amortization', 'Amortization'),
        ('loanTermYearstyle', 'loanTermYears" style'),
        ('loanTermYear', 'loanTermYears'),
        ('id="loanTermYear"', 'id="loanTermYears"'),
        ('financedAmtDisplay', 'financedAmtDisplay'),
        ('downAmtDisplay', 'downAmtDisplay'),
    ]
    for b, g in word_map:
        text = text.replace(b, g)

    # Clean double dashes in CSS/HTML that got broken
    text = text.replace('form—panel', 'form-panel')
    text = text.replace('grid—2—col', 'grid-2-col')
    text = text.replace('border—radius', 'border-radius')
    text = text.replace('padding—left', 'padding-left')
    text = text.replace('margin—top', 'margin-top')
    text = text.replace('font—size', 'font-size')
    text = text.replace('font—weight', 'font-weight')
    text = text.replace('margin—bottom', 'margin-bottom')
    text = text.replace('results—panel', 'results-panel')
    text = text.replace('boat—hero', 'boat-hero')
    text = text.replace('breakdown—row', 'breakdown-row')
    text = text.replace('border—top', 'border-top')
    text = text.replace('text—align', 'text-align')
    text = text.replace('section—subtitle', 'section-subtitle')
    text = text.replace('input—group', 'input-group')
    text = text.replace('input—wrapper', 'input-wrapper')
    text = text.replace('input—prefix', 'input-prefix')
    text = text.replace('input—suffix', 'input-suffix')

    return text

def deploy_live(rel_path, content):
    full = os.path.join(LIVE_DIR, rel_path)
    os.makedirs(os.path.dirname(full), exist_ok=True)
    with open(full, "w", encoding="utf-8") as f:
        f.write(content)
    print(f"  [DEPLOYED LIVE] {rel_path} ({len(content)} bytes)")

# ----------------------------------------------------
# A. UPDATE INCLUDES/HEADER.PHP
# ----------------------------------------------------
def update_header():
    print("\n--- 1. UPDATING INCLUDES/HEADER.PHP ---")
    p = os.path.join(LIVE_DIR, "includes", "header.php")
    with open(p, "r", encoding="utf-8", errors="ignore") as f:
        code = f.read()

    # 1. Clean CSS carets to avoid any UTF-8 rendering errors (use CSS escape \25BE)
    code = re.sub(
        r"(\.hdr-nav\s*>\s*li\.mega-li\s*>\s*a::after,\s*\.hdr-nav\s*>\s*li\.has-sub\s*>\s*a::after\s*\{[^}]*?content:\s*')[^']+(';)",
        r"\g<1> \\25BE\g<2>",
        code
    )

    # 2. Scrollbar in mega-menu and drop-menu
    mega_style = """
.mega-menu {
  display: none;
  position: absolute;
  top: 100%; left: 0;
  width: max-content;
  max-width: 920px;
  max-height: calc(100vh - 75px);
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: #cbd5e1 #f8fafc;
  background: #fff;
  border: 1px solid #e2e8f0;
  border-top: 3px solid #3b82f6;
  border-radius: 0 0 10px 10px;
  box-shadow: 0 8px 28px rgba(0,0,0,.20);
  z-index: 9999;
  padding: 16px 0 14px;
}
.mega-menu::-webkit-scrollbar,
.drop-menu::-webkit-scrollbar {
  width: 6px;
}
.mega-menu::-webkit-scrollbar-thumb,
.drop-menu::-webkit-scrollbar-thumb {
  background-color: #cbd5e1;
  border-radius: 3px;
}
.mega-menu::-webkit-scrollbar-track,
.drop-menu::-webkit-scrollbar-track {
  background: #f8fafc;
}
"""
    code = re.sub(r"\.mega-menu\s*\{[^}]*?padding:\s*16px\s*0\s*14px;\s*\}", mega_style.strip(), code)

    drop_style = """
.drop-menu {
  display: none;
  position: absolute;
  top: 100%; left: 0;
  min-width: 250px;
  max-height: calc(100vh - 75px);
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: #cbd5e1 #f8fafc;
  background: #fff;
  border: 1px solid #e2e8f0;
  border-top: 3px solid #3b82f6;
  border-radius: 0 0 8px 8px;
  box-shadow: 0 8px 24px rgba(0,0,0,.18);
  z-index: 9999;
  padding: 4px 0;
  list-style: none;
}
"""
    code = re.sub(r"\.drop-menu\s*\{[^}]*?list-style:\s*none;\s*\}", drop_style.strip(), code)

    # 3. Clean search placeholder
    code = re.sub(r'placeholder="Search calculators[^"]*"', 'placeholder="Search calculators..."', code)

    # 4. Clean and comprehensive Finance mega menu
    finance_menu = """      <!-- -- FINANCE mega -- -->
      <li class="mega-li">
        <a href="<?php echo $baseUrl; ?>/loan-calculators/">Finance</a>
        <div class="mega-menu">
          <div class="mega-inner">

            <div class="mega-col">
              <a href="<?php echo $baseUrl; ?>/loan-calculators/" class="mega-col-heading">Loan Calculators</a>
              <ul>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/sba-loan-calculator">SBA 7(a) Loan</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/sba-loan-payment-calculator">SBA Payment</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/debt-to-income-calculator">Debt-to-Income (DTI)</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/heloc-calculator">HELOC Calculator</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/boat-loan-calculator">Boat &amp; Marine Loan</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/rv-loan-calculator">RV Loan</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/auto-loan-calculator">Auto Loan</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/personal-loan-calculator">Personal Loan</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/land-loan-calculator">Land Loan</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/interest-only-loan-calculator">Interest Only</a></li>
                <li><a href="<?php echo $baseUrl; ?>/loan-calculators/cd-interest-calculator">CD Interest</a></li>
              </ul>
            </div>

            <div class="mega-col">
              <a href="<?php echo $baseUrl; ?>/real-estate/" class="mega-col-heading">Real Estate</a>
              <ul>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/closing-cost-calculator">Closing Cost (2026)</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/hoa-fee-calculator">HOA Fee &amp; Buying Power</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/property-tax-calculator">Property Tax (By State)</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/mortgage-refinance-calculator">Mortgage Refinance</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/rent-affordability-calculator">Rent Affordability</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/mortgage-calculator">Mortgage (PITI)</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/cap-rate-calculator">Cap Rate</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/cash-on-cash-return-calculator">Cash-on-Cash</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/cash-flow-calculator">Cash Flow</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/home-inspection-cost-calculator">Home Inspection</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/down-payment-calculator">Down Payment</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/rent-vs-buy-calculator">Rent vs Buy</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/dscr-calculator">DSCR</a></li>
                <li><a href="<?php echo $baseUrl; ?>/real-estate/1031-exchange-calculator">1031 Exchange</a></li>
              </ul>
            </div>

            <div class="mega-col">
              <a href="<?php echo $baseUrl; ?>/business/" class="mega-col-heading">Business &amp; ROI</a>
              <ul>
                <li><a href="<?php echo $baseUrl; ?>/business/roi-calculator">ROI Calculator</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/real-estate-roi-calculator">Real Estate ROI</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/rental-property-roi-calculator">Rental Property ROI</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/marketing-roi-calculator">Marketing ROI</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/solar-roi-calculator">Solar ROI</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/markup-calculator">Markup</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/profit-margin-calculator">Profit Margin</a></li>
                <li><a href="<?php echo $baseUrl; ?>/business/freelance-rate-calculator">Freelance Rate</a></li>
              </ul>
            </div>

            <div class="mega-col">
              <a href="<?php echo $baseUrl; ?>/texas/" class="mega-col-heading">State Payroll</a>
              <ul>
                <li><a href="<?php echo $baseUrl; ?>/texas/paycheck-calculator"><strong>Texas Paycheck (0% Tax)</strong></a></li>
                <li><a href="<?php echo $baseUrl; ?>/texas/">Texas Payroll Hub</a></li>
                <li><a href="<?php echo $baseUrl; ?>/ohio/paycheck-calculator">Ohio Paycheck</a></li>
                <li><a href="<?php echo $baseUrl; ?>/ohio/hourly-paycheck-calculator">Ohio Hourly</a></li>
                <li><a href="<?php echo $baseUrl; ?>/ohio/salary-paycheck-calculator">Ohio Salary</a></li>
                <li><a href="<?php echo $baseUrl; ?>/ohio/overtime-calculator">Ohio Overtime</a></li>
                <li><a href="<?php echo $baseUrl; ?>/ohio/bonus-tax-calculator">Ohio Bonus Tax</a></li>
                <li><a href="<?php echo $baseUrl; ?>/ohio/payroll-tax-calculator">Ohio Payroll Tax</a></li>
              </ul>
            </div>

          </div>
        </div>
      </li>"""

    code = re.sub(
        r"<!-- -- FINANCE mega -- -->.*?</li>\s*<!-- -- CONSTRUCTION mega -- -->",
        finance_menu + "\n\n      <!-- -- CONSTRUCTION mega -- -->",
        code,
        flags=re.DOTALL
    )

    # 5. Clean Construction mega menu
    construction_menu = """      <!-- -- CONSTRUCTION mega -- -->
      <li class="mega-li">
        <a href="<?php echo $baseUrl; ?>/construction/">Construction</a>
        <div class="mega-menu">
          <div class="mega-inner">

            <div class="mega-col">
              <a href="<?php echo $baseUrl; ?>/construction/concrete-calculator" class="mega-col-heading">Concrete Tools</a>
              <ul>
                <li><a href="<?php echo $baseUrl; ?>/construction/concrete-calculator">Concrete Calculator</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/concrete-slab-calculator">Concrete Slab</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/concrete-bag-calculator">Concrete Bags</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/concrete-yardage-calculator">Concrete Yardage</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/concrete-footing-calculator">Concrete Footing</a></li>
              </ul>
            </div>

            <div class="mega-col">
              <a href="<?php echo $baseUrl; ?>/construction/" class="mega-col-heading">Framing &amp; Materials</a>
              <ul>
                <li><a href="<?php echo $baseUrl; ?>/construction/rafter-calculator">Rafter Calculator</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/linear-feet-calculator">Linear Feet</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/home-addition-cost-calculator">Home Addition Cost</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/cubic-yard-calculator">Cubic Yard</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/board-foot-calculator">Board Foot</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/stair-calculator">Stair Calculator</a></li>
                <li><a href="<?php echo $baseUrl; ?>/construction/asphalt-calculator">Asphalt Calculator</a></li>
              </ul>
            </div>

          </div>
        </div>
      </li>"""

    code = re.sub(
        r"<!-- -- CONSTRUCTION mega -- -->.*?</li>\s*<!-- -- MATH drop -- -->",
        construction_menu + "\n\n      <!-- -- MATH drop -- -->",
        code,
        flags=re.DOTALL
    )

    # 6. Clean Blog dropdown with all 8 new guides
    blog_menu = """      <!-- -- BLOG drop -- -->
      <li class="has-sub">
        <a href="<?php echo $baseUrl; ?>/blog/" class="<?php echo ($currentPage==='blog')?'nav-active':''; ?>">Blog</a>
        <ul class="drop-menu">
          <li><a href="<?php echo $baseUrl; ?>/blog/"><strong>All Guides &amp; Articles</strong></a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-much-are-closing-costs-in-texas">Texas Closing Costs Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-much-are-closing-costs-in-california">California Closing Costs Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-much-are-closing-costs-in-florida">Florida Closing Costs Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/sba-7a-vs-504-loan-calculator-guide">SBA 7(a) vs 504 Loan Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/debt-to-income-ratio-explained">Debt-to-Income (DTI) Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/cost-to-add-second-story-to-house">Second Story Addition Cost</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/rv-financing-101-guide">RV Financing 101 Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/cap-rate-vs-cash-on-cash-return">Cap Rate vs Cash-on-Cash</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-to-calculate-cap-rate">How to Calculate Cap Rate</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-to-calculate-closing-costs">How to Calculate Closing Costs</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-to-calculate-square-feet-of-a-room">Room Square Footage Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-to-calculate-roof-square-footage">Roof Square Footage</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-to-calculate-board-feet-lumber">Board Feet of Lumber</a></li>
        </ul>
      </li>"""

    code = re.sub(
        r"<!-- -- BLOG drop -- -->.*?</li>\s*<!-- -- FINANCE mega -- -->",
        blog_menu + "\n\n      <!-- -- FINANCE mega -- -->",
        code,
        flags=re.DOTALL
    )

    code = clean_clean(code)

    deploy_live("includes/header.php", code)

# ----------------------------------------------------
# B. UPDATE INDEX.PHP
# ----------------------------------------------------
def update_index():
    print("\n--- 2. UPDATING INDEX.PHP ---")
    p = os.path.join(LIVE_DIR, "index.php")
    with open(p, "r", encoding="utf-8", errors="ignore") as f:
        code = f.read()

    # 1. Add DTI, HELOC, Boat Loan to Loan Calculators cluster
    loan_additions = """          <a href="/loan-calculators/debt-to-income-calculator" class="ac-cluster-link">
            <span>Debt-to-Income (DTI) Calculator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/loan-calculators/heloc-calculator" class="ac-cluster-link">
            <span>HELOC Payment Calculator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/loan-calculators/boat-loan-calculator" class="ac-cluster-link">
            <span>Boat &amp; Marine Loan Calculator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>"""

    if "debt-to-income-calculator" not in code:
        code = code.replace(
            '<a href="/loan-calculators/interest-only-loan-calculator" class="ac-cluster-link">',
            loan_additions + '\n          <a href="/loan-calculators/interest-only-loan-calculator" class="ac-cluster-link">'
        )

    # 2. Add HOA Fee, Property Tax, Mortgage Refinance, Rent Affordability to Real Estate cluster
    re_additions = """          <a href="/real-estate/closing-cost-calculator" class="ac-cluster-link">
            <span>Closing Cost Calculator (Buyer/Seller)</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/hoa-fee-calculator" class="ac-cluster-link">
            <span>HOA Fee &amp; Buying Power Impact</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/property-tax-calculator" class="ac-cluster-link">
            <span>Property Tax Calculator by State</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/mortgage-refinance-calculator" class="ac-cluster-link">
            <span>Mortgage Refinance Break-Even</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/real-estate/rent-affordability-calculator" class="ac-cluster-link">
            <span>Rent Affordability Calculator</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>"""

    if "hoa-fee-calculator" not in code:
        code = code.replace(
            '<a href="/real-estate/mortgage-calculator" class="ac-cluster-link">',
            re_additions + '\n          <a href="/real-estate/mortgage-calculator" class="ac-cluster-link">'
        )

    # 3. Add Texas to Ohio Payroll cluster
    tx_additions = """          <a href="/texas/paycheck-calculator" class="ac-cluster-link" style="border-left:3px solid #2563eb;padding-left:8px;">
            <span>Texas Paycheck (0% State Tax)</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>
          <a href="/texas/" class="ac-cluster-link" style="border-left:3px solid #2563eb;padding-left:8px;">
            <span>Texas Payroll Calculators Hub</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"/></svg>
          </a>"""

    if "texas/paycheck-calculator" not in code:
        code = code.replace(
            '<a href="/ohio/paycheck-calculator" class="ac-cluster-link">',
            tx_additions + '\n          <a href="/ohio/paycheck-calculator" class="ac-cluster-link">'
        )

    # 4. Add Latest Guides Section to index.php
    latest_guides = """
  <!-- ========================================================================
       LATEST FINANCIAL & REAL ESTATE GUIDES (BLOG)
       ======================================================================== -->
  <section class="ac-section" style="margin-top:2.5rem;">
    <div class="ac-sec-header">
      <div>
        <h2 class="ac-sec-title">Latest Financial &amp; Real Estate Guides</h2>
        <p class="ac-sec-subtitle">Comprehensive research, rate analysis, and step-by-step cost breakdowns from our editorial desk.</p>
      </div>
      <a href="/blog/" class="ac-cluster-viewall">View All Blog Guides &rarr;</a>
    </div>

    <div class="ac-grid-3">
      <div class="ac-card" style="padding:1.5rem;background:#fff;border-radius:12px;border:1px solid #e2e8f0;display:flex;flex-direction:column;justify-content:space-between;">
        <div>
          <span style="font-size:0.75rem;font-weight:700;color:#2563eb;text-transform:uppercase;">Real Estate</span>
          <h3 style="font-size:1.15rem;color:#0f172a;margin:0.5rem 0;line-height:1.35;"><a href="/blog/how-much-are-closing-costs-in-texas" style="color:inherit;text-decoration:none;">Closing Costs in Texas: Buyer &amp; Seller Guide</a></h3>
          <p style="font-size:0.88rem;color:#64748b;line-height:1.6;">Average buyer fees (2% to 3.5%), seller fees (6% to 8%), TDI title insurance, and zero transfer tax rules.</p>
        </div>
        <a href="/blog/how-much-are-closing-costs-in-texas" style="color:#2563eb;font-weight:700;font-size:0.85rem;text-decoration:none;margin-top:1rem;">Read Full Guide &rarr;</a>
      </div>

      <div class="ac-card" style="padding:1.5rem;background:#fff;border-radius:12px;border:1px solid #e2e8f0;display:flex;flex-direction:column;justify-content:space-between;">
        <div>
          <span style="font-size:0.75rem;font-weight:700;color:#2563eb;text-transform:uppercase;">Small Business</span>
          <h3 style="font-size:1.15rem;color:#0f172a;margin:0.5rem 0;line-height:1.35;"><a href="/blog/sba-7a-vs-504-loan-calculator-guide" style="color:inherit;text-decoration:none;">SBA 7(a) vs 504 Loan: Which Should You Choose?</a></h3>
          <p style="font-size:0.88rem;color:#64748b;line-height:1.6;">Key differences in loan amounts, interest rates, working capital flexibility, and 10 to 25-year terms.</p>
        </div>
        <a href="/blog/sba-7a-vs-504-loan-calculator-guide" style="color:#2563eb;font-weight:700;font-size:0.85rem;text-decoration:none;margin-top:1rem;">Read Full Guide &rarr;</a>
      </div>

      <div class="ac-card" style="padding:1.5rem;background:#fff;border-radius:12px;border:1px solid #e2e8f0;display:flex;flex-direction:column;justify-content:space-between;">
        <div>
          <span style="font-size:0.75rem;font-weight:700;color:#2563eb;text-transform:uppercase;">Mortgage &amp; Lending</span>
          <h3 style="font-size:1.15rem;color:#0f172a;margin:0.5rem 0;line-height:1.35;"><a href="/blog/debt-to-income-ratio-explained" style="color:inherit;text-decoration:none;">Debt-to-Income Ratio Explained (Why Lenders Care)</a></h3>
          <p style="font-size:0.88rem;color:#64748b;line-height:1.6;">How front-end and back-end DTI limits dictate mortgage approval from Fannie Mae (45% max) to FHA (56.9% max).</p>
        </div>
        <a href="/blog/debt-to-income-ratio-explained" style="color:#2563eb;font-weight:700;font-size:0.85rem;text-decoration:none;margin-top:1rem;">Read Full Guide &rarr;</a>
      </div>
    </div>
  </section>
"""

    if "Latest Financial &amp; Real Estate Guides" not in code:
        code = code.replace(
            '<section class="ac-faq-section"',
            latest_guides + '\n  <section class="ac-faq-section"'
        )

    code = clean_clean(code)
    deploy_live("index.php", code)

# ----------------------------------------------------
# C. CLEAN AND REBUILD ALL NEW CALCULATORS FROM SOURCE
# ----------------------------------------------------
def rebuild_new_calculators():
    print("\n--- 3. REBUILDING NEW CALCULATORS CLEANLY ---")
    
    calcs = [
        {
            "rel": "loan-calculators/boat-loan-calculator.php",
            "html": os.path.join(BUILT_DIR, "boat-loan-calculator.html"),
            "md": os.path.join(BLUEPRINTS_DIR, "boat-loan-calculator.md")
        },
        {
            "rel": "loan-calculators/debt-to-income-calculator.php",
            "html": os.path.join(BUILT_DIR, "debt-to-income-calculator.html"),
            "md": os.path.join(BLUEPRINTS_DIR, "debt-to-income-calculator.md")
        },
        {
            "rel": "loan-calculators/heloc-calculator.php",
            "html": os.path.join(BUILT_DIR, "heloc-calculator.html"),
            "md": os.path.join(BLUEPRINTS_DIR, "heloc-calculator.md")
        },
        {
            "rel": "real-estate/property-tax-calculator.php",
            "html": os.path.join(BUILT_DIR, "property-tax-calculator.html"),
            "md": os.path.join(BLUEPRINTS_DIR, "property-tax-calculator.md")
        },
        {
            "rel": "real-estate/mortgage-refinance-calculator.php",
            "html": os.path.join(BUILT_DIR, "mortgage-refinance-calculator.html"),
            "md": os.path.join(BLUEPRINTS_DIR, "mortgage-refinance-calculator.md")
        },
        {
            "rel": "real-estate/rent-affordability-calculator.php",
            "html": os.path.join(BUILT_DIR, "rent-affordability-calculator.html"),
            "md": os.path.join(BLUEPRINTS_DIR, "rent-affordability-calculator.md")
        },
        {
            "rel": "texas/paycheck-calculator.php",
            "html": os.path.join(BUILT_DIR, "texas-paycheck-calculator.html"),
            "md": None,
            "title": "Texas Paycheck Calculator (2026) — Net Take-Home Pay | AmericaCalculator",
            "desc": "Calculate your Texas take-home pay with 0% state income tax. Free hourly and salaried calculator factoring in federal withholding, Social Security, and Medicare."
        }
    ]

    for item in calcs:
        rel = item["rel"]
        with open(item["html"], "r", encoding="utf-8", errors="ignore") as f:
            html_raw = f.read()

        style_m = re.search(r"<style>(.*?)</style>", html_raw, re.DOTALL | re.IGNORECASE)
        script_m = re.search(r"<script>(.*?)</script>", html_raw, re.DOTALL | re.IGNORECASE)
        main_m = re.search(r"<main[^>]*>(.*?)</main>", html_raw, re.DOTALL | re.IGNORECASE)

        style = clean_clean(style_m.group(1).strip()) if style_m else ""
        script = script_m.group(1).strip() if script_m else ""

        tool_html = ""
        if main_m:
            raw_m = main_m.group(1).strip()
            raw_m = re.sub(r"<article class=\"content-article\">.*?</article>", "", raw_m, flags=re.DOTALL)
            tool_html = clean_clean(raw_m)

        if item.get("md"):
            with open(item["md"], "r", encoding="utf-8", errors="ignore") as f:
                md_txt = f.read()
            title_m = re.search(r"Title Tag.*?:.*?`([^`]+)`", md_txt, re.DOTALL)
            desc_m = re.search(r"Meta Description.*?:.*?`([^`]+)`", md_txt, re.DOTALL)
            schema_m = re.search(r"<script type=\"application/ld\+json\">(.*?)</script>", md_txt, re.DOTALL)
            
            title = title_m.group(1).strip() if title_m else "Calculator | AmericaCalculator"
            desc = desc_m.group(1).strip() if desc_m else "Free financial calculator."
            schema_raw = schema_m.group(1).strip() if schema_m else "{}"
            
            content_m = re.search(r"## .*?(?:Full Ready-to-Publish|Complete Surrounding).*?\n+(.*)", md_txt, re.DOTALL)
            if content_m:
                raw_c = content_m.group(1)
                hb = re.search(r"```html\s*(.*?)\s*```", raw_c, re.DOTALL)
                content_body = clean_clean(hb.group(1)) if hb else clean_clean(raw_c)
            else:
                content_body = ""
        else:
            title = item["title"]
            desc = item["desc"]
            schema_raw = json.dumps({
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "WebApplication",
                        "name": "Texas Paycheck Calculator",
                        "url": "https://americacalculator.com/texas/paycheck-calculator",
                        "applicationCategory": "FinanceApplication",
                        "operatingSystem": "All",
                        "offers": { "@type": "Offer", "price": "0", "priceCurrency": "USD" },
                        "description": "Calculate take-home pay for Texas employees with 0% state income tax, federal tax brackets, and FICA."
                    }
                ]
            })
            content_body = """
<article class="calculator-content-body">
  <div class="quick-answer-card">
    <h2>Texas Take-Home Pay Explained (0% State Personal Income Tax)</h2>
    <p>Texas is one of only nine US states with no personal state income tax. When working in Texas, your paycheck deductions consist exclusively of federal income tax withholding, Social Security (6.2%), and Medicare (1.45%).</p>
  </div>
  <h2>Texas vs. High-Tax States: Take-Home Pay Comparison</h2>
  <div class="table-responsive">
    <table class="data-table">
      <thead><tr><th>State</th><th>Gross Salary</th><th>State Tax Paid</th><th>Estimated Annual Net Pay</th></tr></thead>
      <tbody>
        <tr><td><strong>Texas</strong></td><td>$75,000</td><td><strong>$0 (0%)</strong></td><td><strong>$60,450</strong></td></tr>
        <tr><td>Ohio</td><td>$75,000</td><td>$1,780 (2.75%)</td><td>$58,670</td></tr>
        <tr><td>California</td><td>$75,000</td><td>$3,920 (5.2%)</td><td>$56,530</td></tr>
        <tr><td>New York</td><td>$75,000</td><td>$3,850 (5.1%)</td><td>$56,600</td></tr>
      </tbody>
    </table>
  </div>
  <h2>How to Maximize Your Texas Take-Home Pay</h2>
  <p>Because Texas levies zero state income tax, the primary levers to optimize your net earnings involve federal tax deductions:</p>
  <ul>
    <li><strong>Traditional 401(k) / 403(b):</strong> Contributions reduce your taxable gross before federal income tax is calculated.</li>
    <li><strong>Health Savings Account (HSA):</strong> Triple tax-advantaged contributions lower both federal income tax and FICA taxes.</li>
    <li><strong>Accurate Form W-4:</strong> Ensure your allowances, dependents, and other withholding adjustments match your annual tax return filing status.</li>
  </ul>
</article>
"""

        try:
            s_data = json.loads(schema_raw)
            formatted_schema = json.dumps(s_data, indent=2, ensure_ascii=False)
        except Exception:
            formatted_schema = "{}"

        title = clean_clean(title)
        desc = clean_clean(desc)

        clean_php = f"""<?php
$currentYear = date('Y');
$pageTitle = "{title.replace('"', '\\"')}";
$metaDescription = "{desc.replace('"', '\\"')}";
$schemaData = json_decode(<<<'EOD'
{formatted_schema}
EOD
, true);
require_once __DIR__ . '/../includes/header.php';
?>
<style>
{style}
.calculator-content-body {{ margin-top: 2.5rem; background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; padding: 2.5rem; box-shadow: 0 4px 20px rgba(0,0,0,0.04); }}
.calculator-content-body h2 {{ font-size: 1.65rem; color: #0f172a; margin: 2rem 0 1rem; border-bottom: 2px solid #f1f5f9; padding-bottom: 0.5rem; }}
.calculator-content-body h3 {{ font-size: 1.25rem; color: #1e293b; margin: 1.5rem 0 0.75rem; }}
.calculator-content-body p {{ color: #475569; font-size: 1.02rem; line-height: 1.75; margin-bottom: 1.25rem; }}
.calculator-content-body ul, .calculator-content-body ol {{ margin-left: 1.5rem; margin-bottom: 1.5rem; color: #475569; line-height: 1.75; }}
.calculator-content-body li {{ margin-bottom: 0.5rem; }}
.table-responsive {{ overflow-x: auto; margin: 1.5rem 0; }}
.data-table {{ width: 100%; border-collapse: collapse; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; }}
.data-table th {{ background: #1e293b; color: #ffffff; padding: 12px 16px; text-align: left; font-size: 0.9rem; }}
.data-table td {{ padding: 12px 16px; border-bottom: 1px solid #f1f5f9; color: #334155; font-size: 0.92rem; }}
.data-table tr:nth-child(even) td {{ background: #f8fafc; }}
.quick-answer-card {{ background: #f0fdf4; border-left: 4px solid #10b981; padding: 1.5rem; border-radius: 0 8px 8px 0; margin-bottom: 2rem; }}
.quick-answer-card h2 {{ font-size: 1.35rem; color: #065f46; margin: 0 0 0.5rem; border: none; padding: 0; }}
.quick-answer-card p {{ color: #047857; margin: 0; }}
</style>

<main class="main-wrapper">
{tool_html}

{content_body}
</main>

<script>
{script}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
"""
        clean_php = clean_clean(clean_php)
        deploy_live(rel, clean_php)

# ----------------------------------------------------
# D. CLEAN AND REBUILD ALL 8 BLOG POSTS
# ----------------------------------------------------
def clean_blog_posts():
    print("\n--- 4. CLEANING ALL 8 BLOG POSTS ---")
    blog_files = [
        "blog/how-much-are-closing-costs-in-texas.php",
        "blog/how-much-are-closing-costs-in-california.php",
        "blog/how-much-are-closing-costs-in-florida.php",
        "blog/sba-7a-vs-504-loan-calculator-guide.php",
        "blog/debt-to-income-ratio-explained.php",
        "blog/cost-to-add-second-story-to-house.php",
        "blog/rv-financing-101-guide.php",
        "blog/cap-rate-vs-cash-on-cash-return.php"
    ]
    for b in blog_files:
        full = os.path.join(LIVE_DIR, b)
        if os.path.exists(full):
            with open(full, "r", encoding="utf-8", errors="ignore") as f:
                c = f.read()
            c = clean_clean(c)
            deploy_live(b, c)

# ----------------------------------------------------
# E. CLEAN 4 PRIORITY REWRITES
# ----------------------------------------------------
def clean_rewrites():
    print("\n--- 5. CLEANING 4 PRIORITY REWRITES ---")
    rewrites = [
        "real-estate/closing-cost-calculator.php",
        "loan-calculators/sba-loan-calculator.php",
        "loan-calculators/rv-loan-calculator.php",
        "construction/home-addition-cost-calculator.php"
    ]
    for r in rewrites:
        full = os.path.join(LIVE_DIR, r)
        if os.path.exists(full):
            with open(full, "r", encoding="utf-8", errors="ignore") as f:
                c = f.read()
            c = clean_clean(c)
            deploy_live(r, c)

if __name__ == "__main__":
    print("==========================================================")
    print(" EXECUTING MASTER CLEANUP & DEPLOYMENT ")
    print("==========================================================")
    update_header()
    update_index()
    rebuild_new_calculators()
    clean_blog_posts()
    clean_rewrites()
    print("ALL FILES CLEANED & DEPLOYED!")
