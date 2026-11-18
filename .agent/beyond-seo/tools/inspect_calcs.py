import os
import glob
import re

calc_dir = r"beyond-seo/built-calculators"
for filepath in glob.glob(os.path.join(calc_dir, "*.html")):
    if "index.html" in filepath:
        continue
    with open(filepath, "r", encoding="utf-8", errors="ignore") as f:
        html = f.read()
    title_m = re.search(r"<title>(.*?)</title>", html, re.DOTALL | re.IGNORECASE)
    desc_m = re.search(r'<meta\s+name=["\']description["\']\s+content=["\'](.*?)["\']', html, re.DOTALL | re.IGNORECASE)
    print("FILE:", os.path.basename(filepath))
    print("  Title:", title_m.group(1).strip() if title_m else "N/A")
    print("  Desc:", desc_m.group(1).strip() if desc_m else "N/A")
