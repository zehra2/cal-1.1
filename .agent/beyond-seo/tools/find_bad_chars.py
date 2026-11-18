import os
import glob
import re

live_dir = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com"
bad_patterns = ["÷", "â", "Ã", "", "?\"", "?'", "dY", "+nnual", "+mount", "+PR"]

found = {}
for root, dirs, files in os.walk(live_dir):
    if "vendor" in root or ".git" in root or "vendor" in dirs:
        continue
    for f in files:
        if f.endswith((".php", ".html", ".js", ".css", ".txt", ".xml")):
            fp = os.path.join(root, f)
            rel = os.path.relpath(fp, live_dir)
            try:
                with open(fp, "r", encoding="utf-8", errors="ignore") as fp_in:
                    content = fp_in.read()
                matches = []
                for p in bad_patterns:
                    c = content.count(p)
                    if c > 0:
                        matches.append(f"{p}: {c}")
                if matches:
                    found[rel] = matches
            except Exception as e:
                pass

print(f"Total files with suspicious or corrupted patterns: {len(found)}")
for k, v in list(found.items())[:35]:
    print(f"{k:<50} -> {', '.join(v)}")
