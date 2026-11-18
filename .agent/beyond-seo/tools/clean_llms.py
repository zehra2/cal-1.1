import os

p = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com\llms.txt"
with open(p, "rb") as f:
    b = f.read()

# Replace any non-ascii or corrupted characters with clean unicode or ascii
s = b.decode("utf-8", errors="ignore")
s = s.replace("# dYO? AmericaCalculator.com ?\"", "# AmericaCalculator.com —")
s = s.replace("?\"", "—")
s = s.replace("?'", "→")
s = s.replace("dYO?", "")
s = s.replace("dY\"O", "")
s = s.replace("dY'", "")
s = s.replace("dY\"?", "")
s = s.replace("dY r", "")

with open(p, "w", encoding="utf-8") as f:
    f.write(s)

print("Cleaned llms.txt byte-level!")
