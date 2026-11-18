p = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com\index.php"
with open(p, "r", encoding="utf-8", errors="ignore") as f:
    text = f.read()

text = text.replace('&mdash;', '-')
text = text.replace('&ndash;', '-')
text = text.replace('—', '-')
text = text.replace('–', '-')

# Clean any broken tags or double hyphens that should be clean
text = text.replace('<!-- -- ', '<!-- ')
text = text.replace(' -- -->', ' -->')
text = text.replace('<!----', '<!--')
text = text.replace('---->', '-->')

with open(p, "w", encoding="utf-8") as f:
    f.write(text)

print("Restored clean hyphens in index.php!")
