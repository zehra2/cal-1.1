p = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com\real-estate\rent-affordability-calculator.php"
with open(p, "r", encoding="utf-8", errors="ignore") as f:
    text = f.read()

import re
text = re.sub(r'\$pageTitle\s*=.*?;', '$pageTitle = "Rent Affordability Calculator (2026) — How Much Rent Can I Afford? | AmericaCalculator";', text, count=1)
text = text.replace('AAAffordability', 'Affordability')
text = text.replace('AAffordability', 'Affordability')
text = text.replace('aAffordability', 'affordability')
text = text.replace('rent-aAffordability-calculator', 'rent-affordability-calculator')

with open(p, "w", encoding="utf-8") as f:
    f.write(text)

print("Fixed rent-affordability-calculator.php!")
