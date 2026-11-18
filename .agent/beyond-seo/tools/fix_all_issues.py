import os
import re
import json

LIVE_DIR = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com"

# ----------------------------------------------------
# 1. TEXT CLEANER FUNCTION (Strict, safe, no vowel destruction)
# ----------------------------------------------------
def clean_page_text(s):
    if not s:
        return ""
    
    # 1. First fix broken words where A got turned into ÷ or + or 
    word_fixes = [
        ("÷nnual", "Annual"),
        ("+nnual", "Annual"),
        ("nnual", "Annual"),
        ("Annual", "Annual"),
        ("÷PR", "APR"),
        ("+PR", "APR"),
        ("PR", "APR"),
        ("APR", "APR"),
        ("÷mount", "Amount"),
        ("+mount", "Amount"),
        ("mount", "Amount"),
        ("Amount", "Amount"),
        ("÷verage", "Average"),
        ("+verage", "Average"),
        ("verage", "Average"),
        ("Average", "Average"),
        ("÷ssessed", "Assessed"),
        ("+ssessed", "Assessed"),
        ("ssessed", "Assessed"),
        ("Assessed", "Assessed"),
        ("÷ffordability", "Affordability"),
        ("+ffordability", "Affordability"),
        ("ffordability", "Affordability"),
        ("Affordability", "Affordability"),
        ("÷ddition", "Addition"),
        ("+ddition", "Addition"),
        ("ddition", "Addition"),
        ("Addition", "Addition"),
        ("÷mortization", "Amortization"),
        ("+mortization", "Amortization"),
        ("mortization", "Amortization"),
        ("Amortization", "Amortization"),
    ]
    for bad, good in word_fixes:
        s = s.replace(bad, good)
        
    # 2. Clean specific mojibake patterns without touching regular letters
    mojibake = [
        ("dYs ", ""),
        ("dY\"?", ""),
        ("dY\"O", ""),
        ("dY\"S", ""),
        ("dY r", ""),
        ("dY>,?", ""),
        ("dY'", ""),
        ("dY'", ""),
        ("dYO?", ""),
        ("s\"", ""),
        ("-", "—"),
        ("?\"", "—"),
        ("?'", "→"),
        ("?~", "—"),
        ("?", "—"),
        ("â€”", "—"),
        ("â€“", "–"),
        ("â†’", "→"),
        ("âœ“", "✓"),
        ("â–¼", "▾"),
        ("â€|", "..."),
        ("", ""),
    ]
    for bad, good in mojibake:
        s = s.replace(bad, good)
        
    return s

# ----------------------------------------------------
# 2. UPDATE HEADER.PHP
# ----------------------------------------------------
def fix_header():
    header_path = os.path.join(LIVE_DIR, "includes", "header.php")
    with open(header_path, "r", encoding="utf-8", errors="ignore") as f:
        code = f.read()
        
    # 1. Caret symbol in CSS: replace any content: '...' with content: ' \25BE'
    code = re.sub(
        r"(\.hdr-nav\s*>\s*li\.mega-li\s*>\s*a::after,\s*\.hdr-nav\s*>\s*li\.has-sub\s*>\s*a::after\s*\{[^}]*?content:\s*')[^']+(';)",
        r"\g<1> \\25BE\g<2>",
        code
    )
    
    # 2. Scrollbar in .mega-menu and .drop-menu
    # Add max-height and overflow-y to desktop menus
    mega_style_replacement = """
.mega-menu {
  display: none;
  position: absolute;
  top: 100%; left: 0;
  width: max-content;
  max-width: 900px;
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
    code = re.sub(r"\.mega-menu\s*\{[^}]*?padding:\s*16px\s*0\s*14px;\s*\}", mega_style_replacement.strip(), code)
    
    drop_style_replacement = """
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
    code = re.sub(r"\.drop-menu\s*\{[^}]*?list-style:\s*none;\s*\}", drop_style_replacement.strip(), code)

    # 3. Search placeholder
    code = re.sub(r'placeholder="Search calculators[^"]*"', 'placeholder="Search calculators..."', code)

    # 4. Clean category headings and add all new calculators to Finance mega menu
    finance_mega_new = """      <!-- -- FINANCE mega -- -->
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
                <li><a href="<?php echo $baseUrl; ?>/real-estate/closing-cost-calculator">Closing Cost</a></li>
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
              <a href="<?php echo $baseUrl; ?>/ohio/" class="mega-col-heading">State Payroll</a>
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
        finance_mega_new + "\n\n      <!-- -- CONSTRUCTION mega -- -->",
        code,
        flags=re.DOTALL
    )

    # 5. Clean construction mega headings & links
    construction_mega_new = """      <!-- -- CONSTRUCTION mega -- -->
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
        construction_mega_new + "\n\n      <!-- -- MATH drop -- -->",
        code,
        flags=re.DOTALL
    )

    # 6. Clean Blog dropdown and include the new blog posts!
    blog_drop_new = """      <!-- -- BLOG drop -- -->
      <li class="has-sub">
        <a href="<?php echo $baseUrl; ?>/blog/" class="<?php echo ($currentPage==='blog')?'nav-active':''; ?>">Blog</a>
        <ul class="drop-menu">
          <li><a href="<?php echo $baseUrl; ?>/blog/"><strong>All Guides &amp; Articles</strong></a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-much-are-closing-costs-in-texas">Texas Closing Costs Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-much-are-closing-costs-in-california">California Closing Costs Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/how-much-are-closing-costs-in-florida">Florida Closing Costs Guide</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/sba-7a-vs-504-loan-calculator-guide">SBA 7(a) vs 504 Loans</a></li>
          <li><a href="<?php echo $baseUrl; ?>/blog/debt-to-income-ratio-explained">Debt-to-Income Explained</a></li>
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
        blog_drop_new + "\n\n      <!-- -- FINANCE mega -- -->",
        code,
        flags=re.DOTALL
    )

    code = clean_page_text(code)

    with open(header_path, "w", encoding="utf-8") as f:
        f.write(code)
    print("  [SUCCESS] includes/header.php updated with clean carets, scrollbar, and all new links.")

# ----------------------------------------------------
# 3. UPDATE INDEX.PHP (Add new calculators and blog section)
# ----------------------------------------------------
def fix_index():
    index_path = os.path.join(LIVE_DIR, "index.php")
    with open(index_path, "r", encoding="utf-8", errors="ignore") as f:
        code = f.read()

    # Add DTI, HELOC, Boat Loan to Loan Calculators cluster in index.php
    loan_cluster_addition = """          <a href="/loan-calculators/debt-to-income-calculator" class="ac-cluster-link">
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
            loan_cluster_addition + '\n          <a href="/loan-calculators/interest-only-loan-calculator" class="ac-cluster-link">'
        )

    # Add HOA Fee, Property Tax, Mortgage Refinance, Rent Affordability to Real Estate cluster
    re_cluster_addition = """          <a href="/real-estate/closing-cost-calculator" class="ac-cluster-link">
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
            re_cluster_addition + '\n          <a href="/real-estate/mortgage-calculator" class="ac-cluster-link">'
        )

    # Add Texas to Ohio Payroll cluster
    texas_addition = """          <a href="/texas/paycheck-calculator" class="ac-cluster-link" style="border-left:3px solid #2563eb;padding-left:8px;">
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
            texas_addition + '\n          <a href="/ohio/paycheck-calculator" class="ac-cluster-link">'
        )

    # Add Latest Guides Section to index.php
    latest_guides_section = """
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
        # Insert right before FAQ section
        code = code.replace(
            '<section class="ac-faq-section"',
            latest_guides_section + '\n  <section class="ac-faq-section"'
        )

    code = clean_page_text(code)

    with open(index_path, "w", encoding="utf-8") as f:
        f.write(code)
    print("  [SUCCESS] index.php updated with new calculators and Latest Guides section.")

# ----------------------------------------------------
# 4. FIX ALL SPECIFIC CALCULATOR & BLOG FILES
# ----------------------------------------------------
def fix_all_files():
    files_to_clean = [
        "loan-calculators/boat-loan-calculator.php",
        "loan-calculators/debt-to-income-calculator.php",
        "loan-calculators/heloc-calculator.php",
        "real-estate/property-tax-calculator.php",
        "real-estate/mortgage-refinance-calculator.php",
        "real-estate/rent-affordability-calculator.php",
        "real-estate/hoa-fee-calculator.php",
        "texas/paycheck-calculator.php",
        "texas/index.php",
        "real-estate/closing-cost-calculator.php",
        "loan-calculators/sba-loan-calculator.php",
        "loan-calculators/rv-loan-calculator.php",
        "construction/home-addition-cost-calculator.php",
        "blog/how-much-are-closing-costs-in-texas.php",
        "blog/how-much-are-closing-costs-in-california.php",
        "blog/how-much-are-closing-costs-in-florida.php",
        "blog/sba-7a-vs-504-loan-calculator-guide.php",
        "blog/debt-to-income-ratio-explained.php",
        "blog/cost-to-add-second-story-to-house.php",
        "blog/rv-financing-101-guide.php",
        "blog/cap-rate-vs-cash-on-cash-return.php"
    ]

    for rel in files_to_clean:
        p = os.path.join(LIVE_DIR, rel)
        if not os.path.exists(p):
            continue
        with open(p, "r", encoding="utf-8", errors="ignore") as f:
            content = f.read()

        cleaned = clean_page_text(content)
        
        # Specific fix for boat loan labels and summary
        if "boat-loan-calculator.php" in rel:
            cleaned = cleaned.replace("Vessel Length (Feet — For Marine Survey Est.)", "Vessel Length (Feet — For Marine Survey Est.)")
            cleaned = cleaned.replace("1. Vessel Price & Down Payment", "1. Vessel Price & Down Payment")
            cleaned = cleaned.replace("2. Marine Financing Terms", "2. Marine Financing Terms")
            cleaned = re.sub(r'>\s*[^<]*?1\.\s*Vessel Price', '>1. Vessel Price', cleaned)
            cleaned = re.sub(r'>\s*[^<]*?2\.\s*Marine Financing', '>2. Marine Financing', cleaned)
            cleaned = cleaned.replace("Annual Interest Rate (APR)", "Annual Interest Rate (APR)")
            cleaned = cleaned.replace("Amount Financed (Principal)", "Amount Financed (Principal)")
            cleaned = cleaned.replace("Down Payment Amount", "Down Payment Amount")
            cleaned = cleaned.replace("Average APR", "Average APR")
            cleaned = cleaned.replace("Financing Amount", "Financing Amount")
            
        with open(p, "w", encoding="utf-8") as f:
            f.write(cleaned)
        print(f"  [CLEANED] {rel}")

if __name__ == "__main__":
    print("==========================================================")
    print(" FIXING HEADER, DROPDOWNS, INDEX, SPELLINGS & CHARACTERS ")
    print("==========================================================")
    fix_header()
    fix_index()
    fix_all_files()
    print("ALL FIXES APPLIED SUCCESSFULLY!")
