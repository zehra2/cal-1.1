import os
import glob
import re

calc_dir = r"beyond-seo/built-calculators"
for filepath in glob.glob(os.path.join(calc_dir, "*.html")):
    if "index.html" in filepath:
        continue
    with open(filepath, "r", encoding="utf-8", errors="ignore") as f:
        html = f.read()
    
    style_m = re.search(r"<style>(.*?)</style>", html, re.DOTALL | re.IGNORECASE)
    main_m = re.search(r"<main[^>]*>(.*?)</main>", html, re.DOTALL | re.IGNORECASE)
    script_m = re.search(r"<script>(.*?)</script>", html, re.DOTALL | re.IGNORECASE)
    
    print("FILE:", os.path.basename(filepath))
    print("  Style length:", len(style_m.group(1)) if style_m else 0)
    print("  Main length:", len(main_m.group(1)) if main_m else 0)
    print("  Script length:", len(script_m.group(1)) if script_m else 0)
