import csv
import json
import time
from collections import Counter, deque
from urllib.parse import urljoin, urlparse

import requests
from bs4 import BeautifulSoup

BASE = "https://americacalculator.com"
SITEMAP = "/home/ubuntu/americacalculator_audit/sitemap.xml"
OUT_CSV = "/home/ubuntu/americacalculator_audit/crawl_pages.csv"
OUT_JSON = "/home/ubuntu/americacalculator_audit/crawl_summary.json"

session = requests.Session()
session.headers.update({"User-Agent": "Mozilla/5.0 (compatible; AmericaCalculatorSEOAudit/1.0)"})

with open(SITEMAP, "r", encoding="utf-8", errors="replace") as f:
    sitemap_soup = BeautifulSoup(f.read(), "xml")
urls = [loc.get_text(strip=True) for loc in sitemap_soup.find_all("loc")]
urls = list(dict.fromkeys(urls))

rows = []
link_graph = {u: [] for u in urls}
sitemap_set = set(urls)

for idx, url in enumerate(urls, start=1):
    row = {
        "url": url,
        "status": "",
        "content_type": "",
        "title": "",
        "meta_description": "",
        "canonical": "",
        "robots_meta": "",
        "h1_count": 0,
        "word_count": 0,
        "jsonld_types": "",
        "internal_links_to_sitemap": 0,
        "all_internal_links": 0,
        "error": "",
    }
    try:
        response = session.get(url, timeout=20, allow_redirects=True)
        row["status"] = response.status_code
        row["content_type"] = response.headers.get("content-type", "")
        soup = BeautifulSoup(response.text, "html.parser")
        title = soup.find("title")
        description = soup.find("meta", attrs={"name": lambda x: x and x.lower() == "description"})
        canonical = soup.find("link", attrs={"rel": lambda x: x and "canonical" in ([v.lower() for v in x] if isinstance(x, list) else [str(x).lower()])})
        robots = soup.find("meta", attrs={"name": lambda x: x and x.lower() == "robots"})
        h1s = soup.find_all("h1")
        visible_text = " ".join(soup.stripped_strings)
        jsonld_types = []
        for script in soup.find_all("script", attrs={"type": "application/ld+json"}):
            raw = script.string or script.get_text(" ", strip=True)
            try:
                data = json.loads(raw)
                items = data if isinstance(data, list) else [data]
                for item in items:
                    if isinstance(item, dict):
                        if "@graph" in item and isinstance(item["@graph"], list):
                            items = item["@graph"]
                        if isinstance(item, dict) and item.get("@type"):
                            t = item["@type"]
                            jsonld_types.extend(t if isinstance(t, list) else [t])
            except Exception:
                jsonld_types.append("INVALID_JSONLD")
        internal_links = set()
        for a in soup.find_all("a", href=True):
            href = a.get("href", "").strip()
            if not href or href.startswith(("#", "mailto:", "tel:", "javascript:")):
                continue
            absolute = urljoin(response.url, href).split("#", 1)[0]
            parsed = urlparse(absolute)
            if parsed.scheme in ("http", "https") and parsed.netloc.lower() == urlparse(BASE).netloc.lower():
                internal_links.add(absolute.rstrip("/") if absolute != BASE + "/" else BASE + "/")
        link_graph[url] = sorted(internal_links)
        row.update({
            "title": title.get_text(" ", strip=True) if title else "",
            "meta_description": description.get("content", "").strip() if description else "",
            "canonical": canonical.get("href", "").strip() if canonical else "",
            "robots_meta": robots.get("content", "").strip() if robots else "",
            "h1_count": len(h1s),
            "word_count": len(visible_text.split()),
            "jsonld_types": ";".join(sorted(set(jsonld_types))),
            "internal_links_to_sitemap": len(internal_links & sitemap_set),
            "all_internal_links": len(internal_links),
        })
    except Exception as exc:
        row["error"] = repr(exc)
    rows.append(row)
    time.sleep(0.20)

# Compute approximate link depth from homepage using only sitemap URLs and same-site links.
root = urls[0]
adj = {u: sorted(set(v) & sitemap_set) for u, v in link_graph.items()}
depth = {root: 0}
queue = deque([root])
while queue:
    current = queue.popleft()
    for nxt in adj.get(current, []):
        if nxt not in depth:
            depth[nxt] = depth[current] + 1
            queue.append(nxt)

for row in rows:
    row["approx_click_depth"] = depth.get(row["url"], "unreachable_from_homepage")

fieldnames = list(rows[0].keys())
with open(OUT_CSV, "w", newline="", encoding="utf-8") as f:
    writer = csv.DictWriter(f, fieldnames=fieldnames)
    writer.writeheader()
    writer.writerows(rows)

status_counts = Counter(str(r["status"]) for r in rows)
title_counts = Counter(r["title"] for r in rows if r["title"])
desc_counts = Counter(r["meta_description"] for r in rows if r["meta_description"])
summary = {
    "sitemap_url_count": len(urls),
    "status_counts": dict(status_counts),
    "errors": [r for r in rows if r["error"]],
    "missing_title": [r["url"] for r in rows if not r["title"]],
    "duplicate_titles": {k: v for k, v in title_counts.items() if v > 1},
    "missing_meta_description": [r["url"] for r in rows if not r["meta_description"]],
    "duplicate_meta_descriptions": {k: v for k, v in desc_counts.items() if v > 1},
    "missing_canonical": [r["url"] for r in rows if not r["canonical"]],
    "canonical_mismatch": [r["url"] for r in rows if r["canonical"] and r["canonical"].rstrip("/") != r["url"].rstrip("/")],
    "h1_not_one": [{"url": r["url"], "h1_count": r["h1_count"]} for r in rows if r["h1_count"] != 1],
    "invalid_jsonld": [r["url"] for r in rows if "INVALID_JSONLD" in r["jsonld_types"]],
    "unreachable_from_homepage": [r["url"] for r in rows if r["url"] not in depth],
    "depth_counts": dict(Counter(str(r["approx_click_depth"]) for r in rows)),
    "low_word_count_under_300": [{"url": r["url"], "word_count": r["word_count"]} for r in rows if isinstance(r["word_count"], int) and r["word_count"] < 300],
}
with open(OUT_JSON, "w", encoding="utf-8") as f:
    json.dump(summary, f, indent=2, ensure_ascii=False)

print(json.dumps(summary, indent=2, ensure_ascii=False))
