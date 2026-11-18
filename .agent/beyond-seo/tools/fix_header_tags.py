p = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com\includes\header.php"
with open(p, "r", encoding="utf-8", errors="ignore") as f:
    text = f.read()

text = text.replace('style.cs>', 'style.css">')
text = text.replace('anonymou>', 'anonymous">')
text = text.replace('js-client=', 'js?client=')
text = text.replace('js-id=', 'js?id=')
text = text.replace('JSON_APRETTY_APRINT', 'JSON_PRETTY_PRINT')
text = text.replace('<?php if (isset($schemaData)): ->', '<?php if (isset($schemaData)): ?>')
text = text.replace('<?php endif; ->', '<?php endif; ?>')

with open(p, "w", encoding="utf-8") as f:
    f.write(text)

print("Cleaned tags in header.php!")
