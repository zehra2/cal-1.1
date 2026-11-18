p = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com\includes\header.php"
with open(p, "rb") as f:
    raw = f.read()

raw = raw.replace(b"str_replace('\\',", b"str_replace('\\\\',")
raw = raw.replace(b"$baseUrl === '\\'", b"$baseUrl === '\\\\'")

with open(p, "wb") as f:
    f.write(raw)

print("Replaced backslash bytes in header.php!")
