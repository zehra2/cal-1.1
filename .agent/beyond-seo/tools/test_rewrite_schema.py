import os
import glob
import re
import json

for f in glob.glob(r"beyond-seo/rewrites/*.md"):
    if "technical" in f:
        continue
    with open(f, "r", encoding="utf-8", errors="ignore") as fp:
        txt = fp.read()
    
    schema_m = re.search(r"<script type=\"application/ld\+json\">(.*?)</script>", txt, re.DOTALL)
    if schema_m:
        schema_raw = schema_m.group(1).strip()
        try:
            data = json.loads(schema_raw)
            print("SUCCESS REWRITE:", os.path.basename(f), "items:", len(data.get("@graph", [])))
        except Exception as e:
            print("ERROR REWRITE in", os.path.basename(f), ":", e)
    else:
        print("NO SCHEMA REWRITE in", os.path.basename(f))
