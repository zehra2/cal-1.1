p = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com\llms.txt"
with open(p, "r", encoding="utf-8", errors="ignore") as f:
    lines = f.readlines()

lines[0] = "# AmericaCalculator.com - LLMs & AI Crawler Discovery Manifest (llms.txt)\n"
with open(p, "w", encoding="utf-8") as f:
    f.writelines(lines)
print("Line 1 set perfectly!")
