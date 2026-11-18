import os
import time

base = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com"
files = [
    "real-estate/hoa-fee-calculator.php",
    "real-estate/property-tax-calculator.php",
    "real-estate/mortgage-refinance-calculator.php",
    "real-estate/rent-affordability-calculator.php",
    "loan-calculators/debt-to-income-calculator.php",
    "loan-calculators/heloc-calculator.php",
    "loan-calculators/boat-loan-calculator.php",
    "texas/paycheck-calculator.php",
    "texas/index.php",
    "blog/how-much-are-closing-costs-in-texas.php",
    "blog/how-much-are-closing-costs-in-california.php",
    "blog/how-much-are-closing-costs-in-florida.php",
    "blog/debt-to-income-ratio-explained.php",
    "blog/cost-to-add-second-story-to-house.php",
    "blog/rv-financing-101-guide.php",
    "blog/cap-rate-vs-cash-on-cash-return.php",
    "real-estate/closing-cost-calculator.php",
    "loan-calculators/sba-loan-calculator.php",
    "loan-calculators/rv-loan-calculator.php",
    "construction/home-addition-cost-calculator.php",
    ".htaccess",
    "sitemap.xml",
    "llms.txt",
    "includes/calculators_data.php"
]

print(f"{'File':<48} | {'Size':<10} | {'Last Modified':<20}")
print("-" * 84)
for f in files:
    full = os.path.join(base, f)
    if os.path.exists(full):
        sz = os.path.getsize(full)
        mtime = time.strftime("%Y-%m-%d %H:%M:%S", time.localtime(os.path.getmtime(full)))
        print(f"{f:<48} | {sz:<10} | {mtime:<20}")
    else:
        print(f"{f:<48} | {'MISSING':<10} | -")
