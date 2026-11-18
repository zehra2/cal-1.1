import re

def sanitize_clean(text):
    if not text:
        return ""
    
    # Only remove broken emoji artifacts, leave all hyphens, quotes, and letters intact
    # 1. Strip the exact broken emoji prefixes
    text = re.sub(r'dY[s"rO\?]+\s*', '', text)
    text = re.sub(r'dY[^\s<"]+\s*', '', text)
    text = re.sub(r'[\x80-\xff]*s"\s*', '', text)
    text = text.replace('s"', '')
    text = text.replace('dYs ', '')
    text = text.replace('dY"?', '')
    text = text.replace('dY"S', '')
    text = text.replace('dY"O', '')
    text = text.replace('dY r', '')
    text = text.replace('dYO?', '')
    text = text.replace('dY\'>', '')
    text = text.replace('dY\'', '')
    
    # 2. Fix em-dash / arrow mojibake
    text = text.replace('?"', '—')
    text = text.replace('?\'', '→')
    text = text.replace('?\'', '→')
    text = text.replace('?\"', '—')
    text = text.replace('â€”', '—')
    text = text.replace('â€“', '–')
    text = text.replace('â†’', '→')
    text = text.replace('â–¼', '▾')
    text = text.replace('â€|', '...')
    text = text.replace('', '')

    return text

with open(r'beyond-seo/built-calculators/boat-loan-calculator.html', 'r', encoding='utf-8', errors='ignore') as f:
    raw = f.read()

res = sanitize_clean(raw)
lines = res.splitlines()
for i in range(130, 185):
    if i < len(lines):
        print(f"{i+1}: {lines[i]}")
