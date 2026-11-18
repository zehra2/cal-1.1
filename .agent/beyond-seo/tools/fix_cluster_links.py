p = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com\index.php"
with open(p, "r", encoding="utf-8", errors="ignore") as f:
    text = f.read()

text = text.replace('class="ac-cluster-link>', 'class="ac-cluster-links">')
text = text.replace('class="ac-cluster-links>', 'class="ac-cluster-links">')

with open(p, "w", encoding="utf-8") as f:
    f.write(text)

print("Fixed ac-cluster-links in index.php!")
