import re

def to_safe_ascii_html(text):
    if not text:
        return ""
    
    # 1. Clean mojibake / broken UTF-8 sequences
    text = text.replace('dYs ', '')
    text = text.replace('dY"?', '')
    text = text.replace('dY"S', '')
    text = text.replace('dY"O', '')
    text = text.replace('dY r', '')
    text = text.replace('dYO?', '')
    text = text.replace('dY>', '')
    text = text.replace('dY\'', '')
    text = re.sub(r'dY[^\s<"]+\s*', '', text)
    text = re.sub(r'[\x80-\xff]*s"\s*', '', text)
    
    # 2. Convert standard special typography to safe HTML entities
    text = text.replace('—', '&mdash;')
    text = text.replace('–', '&ndash;')
    text = text.replace('→', '&rarr;')
    text = text.replace('✓', '&#10003;')
    text = text.replace('▾', '&#9662;')
    text = text.replace('▼', '&#9660;')
    text = text.replace('?', '&mdash;')
    text = text.replace('?"', '&mdash;')
    text = text.replace('?\'', '&rarr;')
    text = text.replace('â€”', '&mdash;')
    text = text.replace('â€“', '&ndash;')
    text = text.replace('â†’', '&rarr;')
    text = text.replace('â–¼', '&#9662;')
    text = text.replace('â€|', '...')
    text = text.replace('', '')

    # 3. Strip any remaining 4-byte astral emojis that break Windows/XAMPP encodings
    text = re.sub(r'[\U00010000-\U0010ffff]', '', text)

    # 4. Clean leading weird characters in subtitle headings (e.g., ">? 1. " -> ">1. ")
    text = re.sub(r'(class="section-subtitle"[^>]*>)[^a-zA-Z0-9<]*(\d+\.)', r'\1\2', text)

    # 5. Restore correct words in case any broken prefix remains
    restorations = [
        ("Annual", "Annual"),
        ("AAnnual", "Annual"),
        ("APR", "APR"),
        ("AAPR", "APR"),
        ("Amount", "Amount"),
        ("AAmount", "Amount"),
        ("Average", "Average"),
        ("AAverage", "Average"),
        ("Assessed", "Assessed"),
        ("Affordability", "Affordability"),
        ("Addition", "Addition"),
        ("Amortization", "Amortization"),
    ]
    for bad, good in restorations:
        text = text.replace(bad, good)

    return text

with open(r'beyond-seo/built-calculators/boat-loan-calculator.html', 'r', encoding='utf-8', errors='ignore') as f:
    raw = f.read()

res = to_safe_ascii_html(raw)
lines = res.splitlines()
for i in range(130, 185):
    if i < len(lines):
        print(f"{i+1}: {lines[i]}")
