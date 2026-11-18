p = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com\includes\footer.php"
with open(p, "r", encoding="utf-8", errors="ignore") as f:
    text = f.read()

# Add new loan calculators
if "debt-to-income-calculator" not in text:
    new_loans = """            <li><a href="/loan-calculators/sba-loan-calculator">SBA Loan Calculator</a></li>
            <li><a href="/loan-calculators/debt-to-income-calculator">Debt-to-Income (DTI)</a></li>
            <li><a href="/loan-calculators/heloc-calculator">HELOC Calculator</a></li>
            <li><a href="/loan-calculators/boat-loan-calculator">Boat Loan Calculator</a></li>"""
    text = text.replace('            <li><a href="/loan-calculators/sba-loan-calculator">SBA Loan Calculator</a></li>', new_loans)

# Add new real estate calculators
if "hoa-fee-calculator" not in text:
    new_re = """            <li><a href="/real-estate/closing-cost-calculator">Closing Cost Calculator</a></li>
            <li><a href="/real-estate/hoa-fee-calculator">HOA Fee &amp; Buying Power</a></li>
            <li><a href="/real-estate/property-tax-calculator">Property Tax (By State)</a></li>
            <li><a href="/real-estate/mortgage-refinance-calculator">Mortgage Refinance</a></li>
            <li><a href="/real-estate/rent-affordability-calculator">Rent Affordability</a></li>
            <li><a href="/real-estate/cap-rate-calculator">Cap Rate Calculator</a></li>"""
    text = text.replace('            <li><a href="/real-estate/cap-rate-calculator">Cap Rate Calculator</a></li>', new_re)

# Add Texas Payroll
if "texas/paycheck-calculator" not in text:
    new_payroll = """          <h3 style="margin-top:1.25rem;">State Payroll</h3>
          <ul>
            <li><a href="/texas/paycheck-calculator"><strong>Texas Paycheck (0% Tax)</strong></a></li>
            <li><a href="/texas/">Texas Payroll Hub</a></li>
            <li><a href="/ohio/">All Ohio Tools</a></li>"""
    text = text.replace("""          <h3 style="margin-top:1.25rem;">Ohio Payroll</h3>\n          <ul>\n            <li><a href="/ohio/">All Ohio Tools</a></li>""", new_payroll)

# Update construction legacy URLs
text = text.replace('/calculators/stair.php', '/construction/stair-calculator')
text = text.replace('/calculators/asphalt.php', '/construction/asphalt-calculator')

with open(p, "w", encoding="utf-8") as f:
    f.write(text)

print("Updated footer.php with new calculators and clean URLs!")
