import re

p = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com\includes\header.php"
with open(p, "r", encoding="utf-8", errors="ignore") as f:
    text = f.read()

# Fix broken ternary operator: )&rarr; or )-> or )-- or )?
text = re.sub(r'\(\$currentPage===[\'"]([a-zA-Z0-9_-]+)[\'"]\)(?:&rarr;|->|--|\?)\s*\'nav-active\'', r"($currentPage==='\1')?'nav-active'", text)
text = text.replace("strpos($_SERVER['REQUEST_URI'] -- ''", "strpos($_SERVER['REQUEST_URI'] ?? ''")
text = text.replace("strpos($_SERVER['REQUEST_URI'] - ''", "strpos($_SERVER['REQUEST_URI'] ?? ''")
text = text.replace("'/downloads') !== false)&rarr;nav-active", "'/downloads') !== false)?'nav-active'")
text = text.replace("'/downloads') !== false)->nav-active", "'/downloads') !== false)?'nav-active'")
text = text.replace("'/downloads') !== false)--nav-active", "'/downloads') !== false)?'nav-active'")
text = text.replace("'/downloads') !== false)-nav-active", "'/downloads') !== false)?'nav-active'")

# Clean and complete blog dropdown menu
blog_dropdown_clean = """      <li class="has-sub">
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

text = re.sub(r'<li class="has-sub">\s*<a href="<\?php echo \$baseUrl; \?>\/blog\/".*?<\/ul>\s*<\/li>', blog_dropdown_clean, text, flags=re.DOTALL)

with open(p, "w", encoding="utf-8") as f:
    f.write(text)

print("Cleaned navigation in header.php successfully!")
