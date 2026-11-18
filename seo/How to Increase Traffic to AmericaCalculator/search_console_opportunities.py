import csv
from pathlib import Path
from openpyxl import load_workbook

xlsx = Path('/home/ubuntu/upload/https___americacalculator.com_-Performance-on-Search-2026-08-14.xlsx')
out = Path('/home/ubuntu/search_console_analysis')
wb = load_workbook(xlsx, read_only=True, data_only=True)

def sheet(name):
    ws = wb[name]
    rows = list(ws.iter_rows(values_only=True))
    headers = [str(x).strip() if x is not None else '' for x in rows[0]]
    result=[]
    for row in rows[1:]:
        if not row or row[0] is None:
            continue
        r={headers[i]: row[i] if i < len(row) else None for i in range(len(headers))}
        for k in ('Clicks','Impressions','CTR','Position'):
            if k in r:
                r[k]=float(r[k] or 0)
        result.append(r)
    return result

queries=sheet('Queries')
pages=sheet('Pages')

# Pages/queries with enough impressions to interpret and average positions in the practical improvement bands.
query_opps=[r for r in queries if r['Impressions'] >= 5 and 20 <= r['Position'] < 50]
page_opps=[r for r in pages if r['Impressions'] >= 10 and 20 <= r['Position'] < 50]
query_opps.sort(key=lambda r:(-r['Impressions'],r['Position']))
page_opps.sort(key=lambda r:(-r['Impressions'],r['Position']))

# High-impression queries/pages currently ranking below 50: content/architecture work rather than snippet-only work.
query_low=[r for r in queries if r['Impressions'] >= 20 and r['Position'] >= 50]
page_low=[r for r in pages if r['Impressions'] >= 20 and r['Position'] >= 50]
query_low.sort(key=lambda r:-r['Impressions'])
page_low.sort(key=lambda r:-r['Impressions'])

# load crawl status for page URLs.
crawl={}
with open('/home/ubuntu/americacalculator_audit/crawl_pages.csv',encoding='utf-8') as f:
    for r in csv.DictReader(f):
        crawl[r['url'].rstrip('/')]=r

def status(url):
    r=crawl.get(url.rstrip('/'))
    if r:
        return r['status']
    return 'not in 72-URL crawl'

md=[]
md.append('# Search Console Opportunity Analysis\n')
md.append('## Practical page-one opportunities (positions 20–49, at least 10 impressions for pages / 5 for queries)\n')
md.append('| Type | URL/query | Clicks | Impressions | CTR | Position | Crawl status |')
md.append('|---|---|---:|---:|---:|---:|---|')
for r in page_opps[:30]:
    md.append(f"| Page | {r['Top pages']} | {int(r['Clicks'])} | {int(r['Impressions'])} | {r['CTR']:.2%} | {r['Position']:.2f} | {status(r['Top pages'])} |")
for r in query_opps[:30]:
    md.append(f"| Query | {r['Top queries']} | {int(r['Clicks'])} | {int(r['Impressions'])} | {r['CTR']:.2%} | {r['Position']:.2f} | — |")
md.append('\n## High-impression terms/pages below position 50\n')
md.append('| Type | URL/query | Clicks | Impressions | CTR | Position | Crawl status |')
md.append('|---|---|---:|---:|---:|---:|---|')
for r in page_low[:30]:
    md.append(f"| Page | {r['Top pages']} | {int(r['Clicks'])} | {int(r['Impressions'])} | {r['CTR']:.2%} | {r['Position']:.2f} | {status(r['Top pages'])} |")
for r in query_low[:30]:
    md.append(f"| Query | {r['Top queries']} | {int(r['Clicks'])} | {int(r['Impressions'])} | {r['CTR']:.2%} | {r['Position']:.2f} | — |")
md.append('\n## Data interpretation notes\n')
md.append('- The Chart sheet is the best source for the 7-day total: 5 clicks, 4,273 impressions, 0.12% CTR, and weighted average position about 68.5. Dimension tables do not fully reconcile: the query table totals 3 clicks/3,174 impressions, while the page table totals 5 clicks/4,417 impressions. Treat dimension tables as directional and use the Chart sheet for the headline total.')
md.append('- The highest visible demand is around closing-cost tools: the closing-cost page has 711 impressions at position 79.34, and several closing-cost queries together have substantial impressions but positions mostly 72–80. This indicates a ranking/relevance opportunity, not a title-only CTR problem.')
md.append('- The SBA page has 460 impressions at position 77.95 and the RV loan page 391 impressions at position 72.66. These are not page-one CTR opportunities yet; they require stronger topical relevance, internal links, and possibly clearer intent sections before snippet testing.')
md.append('- Search Console shows off-sitemap or redirected/off-brand URLs receiving impressions, including a page that redirects to the homepage and a legacy investment URL redirecting to the investment-growth calculator. Audit indexation and sitemap consistency before publishing more pages.')
md.append('- Country data is extremely small: Pakistan has 3 of 5 clicks, while the United States has 1 click from 3,717 impressions. Do not infer that Pakistan is the target market; use a longer date range and confirm the property/country filters.')
(out/'search_console_opportunity_report.md').write_text('\n'.join(md), encoding='utf-8')
print('\n'.join(md))
