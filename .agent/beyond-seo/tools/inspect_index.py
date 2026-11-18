import re

p = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com\index.php"
with open(p, "r", encoding="utf-8", errors="ignore") as f:
    text = f.read()

headings = re.findall(r"<h[23][^>]*>(.*?)</h[23]>", text, re.IGNORECASE)
for h in headings[:30]:
    print("H:", h.strip())
