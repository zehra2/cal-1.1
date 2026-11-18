p = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com\includes\header.php"
with open(p, "r", encoding="utf-8", errors="ignore") as f:
    text = f.read()

text = text.replace(r"str_replace('\\\\'", r"str_replace('\\'")
text = text.replace(r"=== '\\\\'", r"=== '\\'")

with open(p, "w", encoding="utf-8") as f:
    f.write(text)

print("Fixed backslash escaping in header.php!")
