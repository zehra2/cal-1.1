p = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com\real-estate\rent-affordability-calculator.php"
with open(p, "r", encoding="utf-8", errors="ignore") as f:
    lines = f.readlines()

lines[2] = '$pageTitle = "Rent Affordability Calculator (2026) — How Much Rent Can I Afford? | AmericaCalculator";\n'

with open(p, "w", encoding="utf-8") as f:
    f.writelines(lines)

print("Cleaned line 3 in rent-affordability-calculator.php!")
