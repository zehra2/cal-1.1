import os

live_dir = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com"

css_properties = [
    'justify-content', 'align-items', 'flex-direction', 'flex-shrink', 'flex-grow',
    'flex-start', 'flex-end', 'space-between', 'space-around', 'font-size', 'font-weight',
    'line-height', 'border-radius', 'border-bottom', 'border-top', 'border-left', 'border-right',
    'box-shadow', 'box-sizing', 'background-color', 'background-image', 'margin-bottom',
    'margin-top', 'margin-left', 'margin-right', 'padding-bottom', 'padding-top',
    'padding-left', 'padding-right', 'max-width', 'min-width', 'max-height', 'min-height',
    'text-decoration', 'text-transform', 'text-align', 'white-space', 'overflow-y',
    'overflow-x', 'user-select', 'pointer-events', 'letter-spacing', 'scrollbar-width',
    'scrollbar-color'
]

def fix_css_hyphens(content):
    for prop in css_properties:
        # Check variations like justify&mdash;content, justify—content, justify&ndash;content, justify–content
        parts = prop.split('-')
        if len(parts) == 2:
            p1, p2 = parts
            for sep in ['&mdash;', '&ndash;', '—', '–', '?']:
                bad = f"{p1}{sep}{p2}"
                content = content.replace(bad, prop)
        elif len(parts) == 3:
            p1, p2, p3 = parts
            for sep in ['&mdash;', '&ndash;', '—', '–', '?']:
                bad1 = f"{p1}{sep}{p2}{sep}{p3}"
                bad2 = f"{p1}-{p2}{sep}{p3}"
                bad3 = f"{p1}{sep}{p2}-{p3}"
                content = content.replace(bad1, prop).replace(bad2, prop).replace(bad3, prop)
    return content

count = 0
for root, dirs, files in os.walk(live_dir):
    for f in files:
        if f.endswith(('.php', '.css')):
            p = os.path.join(root, f)
            with open(p, 'r', encoding='utf-8', errors='ignore') as fp:
                c = fp.read()
            new_c = fix_css_hyphens(c)
            if new_c != c:
                with open(p, 'w', encoding='utf-8') as fp:
                    fp.write(new_c)
                count += 1
                print('Fixed CSS in:', f)

print(f"Done! Fixed CSS hyphens in {count} files.")
