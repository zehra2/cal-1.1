p = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com\includes\header.php"
with open(p, "r", encoding="utf-8", errors="ignore") as f:
    text = f.read()

text = text.replace('id="searchResult class="search-result role="listbox">', 'id="searchResults" class="search-results" role="listbox">')
text = text.replace("($currentPage==='index')&rarr;nav-active':'';", "($currentPage==='index')?'nav-active':'';")
text = text.replace("($currentPage==='about')&rarr;nav-active':'';", "($currentPage==='about')?'nav-active':'';")
text = text.replace("($currentPage==='contact')&rarr;nav-active':'';", "($currentPage==='contact')?'nav-active':'';")
text = text.replace("false)?'nav-active'':'';", "false)?'nav-active':'';")
text = text.replace("false)?'nav-active':'';", "false)?'nav-active':'';")

with open(p, "w", encoding="utf-8") as f:
    f.write(text)

print("Cleaned lines 450-480 in header.php!")
