import csv
from collections import defaultdict
from urllib.parse import urlparse

path = "/home/ubuntu/americacalculator_audit/crawl_pages.csv"
rows = []
with open(path, encoding="utf-8", newline="") as f:
    rows = list(csv.DictReader(f))

def section(url):
    parts = [p for p in urlparse(url).path.split("/") if p]
    return parts[0] if parts else "home"

groups = defaultdict(list)
for row in rows:
    try:
        row["word_count_num"] = int(row["word_count"])
    except Exception:
        row["word_count_num"] = 0
    groups[section(row["url"])].append(row)

print("SECTION_SUMMARY")
for key in sorted(groups):
    rs = groups[key]
    ok = [r for r in rs if r["status"] == "200"]
    avg_words = sum(r["word_count_num"] for r in ok) / len(ok) if ok else 0
    print(f"{key}\turls={len(rs)}\t200={len(ok)}\tavg_words={avg_words:.0f}\tmin_words={min((r['word_count_num'] for r in ok), default=0)}\tmax_words={max((r['word_count_num'] for r in ok), default=0)}")

print("\nLOW_WORD_200")
for r in sorted([r for r in rows if r["status"] == "200" and r["word_count_num"] < 600], key=lambda x: x["word_count_num"]):
    print(f"{r['word_count_num']}\t{r['url']}\t{r['title']}")

print("\nUNREACHABLE")
for r in rows:
    if r["approx_click_depth"] == "unreachable_from_homepage":
        print(r["url"])

print("\nMETA_DESCRIPTION_REUSE")
meta = defaultdict(list)
for r in rows:
    if r["meta_description"]:
        meta[r["meta_description"]].append(r["url"])
for desc, urls in sorted(meta.items(), key=lambda x: (-len(x[1]), x[0])):
    if len(urls) > 1:
        print(f"count={len(urls)}\t{desc}")
        for u in urls:
            print(f"  {u}")
