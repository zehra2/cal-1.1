import re

p = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com\includes\header.php"
with open(p, "r", encoding="utf-8", errors="ignore") as f:
    text = f.read()

# Fix <-php tags
text = text.replace('<-php', '<?php')
text = text.replace('echo $baseUrl; ->', 'echo $baseUrl; ?>')
text = text.replace('echo $baseUrl; - >', 'echo $baseUrl; ?>')

# Fix nav-active checks like:
# class="<-php echo ($currentPage==='contact')&rarr;nav-active':''; ->"
text = re.sub(
    r'<\?php\s*echo\s*\(\$currentPage===[\'"]([a-zA-Z0-9_-]+)[\'"]\)(?:&rarr;|->|[\?])\s*\'nav-active\'\s*:\s*\'\'\s*;\s*(?:->|\?>)',
    r"<?php echo ($currentPage==='\1')?'nav-active':''; ?>",
    text
)

# Fix any remaining broken php closing tags like "; ->"
text = re.sub(r';\s*->', '; ?>', text)

with open(p, "w", encoding="utf-8") as f:
    f.write(text)

print("Restored PHP tags in header.php!")
