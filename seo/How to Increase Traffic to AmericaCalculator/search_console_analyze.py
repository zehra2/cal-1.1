import csv
import json
from collections import Counter
from pathlib import Path

import matplotlib.pyplot as plt
from openpyxl import load_workbook

INPUT = Path('/home/ubuntu/upload/https___americacalculator.com_-Performance-on-Search-2026-08-14.xlsx')
OUT = Path('/home/ubuntu/search_console_analysis')
OUT.mkdir(exist_ok=True)

wb = load_workbook(INPUT, read_only=True, data_only=True)

def read_sheet(name):
    ws = wb[name]
    rows = list(ws.iter_rows(values_only=True))
    headers = [str(x).strip() if x is not None else '' for x in rows[0]]
    data = []
    for row in rows[1:]:
        record = {headers[i]: row[i] if i < len(row) else None for i in range(len(headers))}
        if any(v is not None for v in record.values()):
            data.append(record)
    return data

chart = read_sheet('Chart')
queries = read_sheet('Queries')
pages = read_sheet('Pages')
countries = read_sheet('Countries')
devices = read_sheet('Devices')
appearance = read_sheet('Search appearance')

# Normalize numeric fields.
def num(x):
    return float(x or 0)

for row in chart + queries + pages + countries + devices + appearance:
    for key in ('Clicks', 'Impressions', 'CTR', 'Position'):
        if key in row:
            row[key] = num(row[key])

# Aggregate observations from the chart sheet.
period = [r['Date'] for r in chart]
period_clicks = sum(r['Clicks'] for r in chart)
period_impressions = sum(r['Impressions'] for r in chart)
period_ctr = period_clicks / period_impressions if period_impressions else 0
weighted_position = sum(r['Position'] * r['Impressions'] for r in chart) / period_impressions if period_impressions else 0

# Utility ranking.
def sort_rows(rows, key, reverse=True):
    return sorted(rows, key=lambda r: (num(r.get(key)), num(r.get('Impressions'))), reverse=reverse)

top_query_clicks = sort_rows(queries, 'Clicks')[:25]
top_query_impressions = sort_rows(queries, 'Impressions')[:50]
zero_click_high_impressions_queries = sorted([r for r in queries if r['Clicks'] == 0], key=lambda r: r['Impressions'], reverse=True)[:50]
near_page_one_queries = sorted([r for r in queries if 10 <= r['Position'] < 20], key=lambda r: (r['Position'], -r['Impressions']))[:50]
top_page_clicks = sort_rows(pages, 'Clicks')[:25]
top_page_impressions = sort_rows(pages, 'Impressions')[:50]
zero_click_high_impressions_pages = sorted([r for r in pages if r['Clicks'] == 0], key=lambda r: r['Impressions'], reverse=True)[:50]
near_page_one_pages = sorted([r for r in pages if 10 <= r['Position'] < 20], key=lambda r: (r['Position'], -r['Impressions']))[:50]

# Country/device totals.
country_clicks = sum(r['Clicks'] for r in countries)
country_impressions = sum(r['Impressions'] for r in countries)
device_clicks = sum(r['Clicks'] for r in devices)
device_impressions = sum(r['Impressions'] for r in devices)

# Query intent/brand classification, deliberately simple and transparent.
brand_terms = ('america calculator', 'americacalculator', 'america calculator.com')
def is_brand(query):
    q = (query or '').lower()
    return any(term in q for term in brand_terms)

brand_clicks = sum(r['Clicks'] for r in queries if is_brand(r.get('Top queries')))
brand_impressions = sum(r['Impressions'] for r in queries if is_brand(r.get('Top queries')))
nonbrand_clicks = sum(r['Clicks'] for r in queries if not is_brand(r.get('Top queries')))
nonbrand_impressions = sum(r['Impressions'] for r in queries if not is_brand(r.get('Top queries')))

# Cluster classification for reporting, based on actual URL/query strings.
def cluster(text):
    s = (text or '').lower()
    if any(x in s for x in ('sba', 'loan', 'mortgage', 'closing cost', 'down payment', 'dscr', 'rent vs buy')):
        return 'Loans / real estate finance'
    if any(x in s for x in ('ohio', 'paycheck', 'payroll', 'overtime', 'bonus tax')):
        return 'Ohio payroll'
    if any(x in s for x in ('concrete', 'asphalt', 'stair', 'cubic yard', 'board foot', 'freight class')):
        return 'Construction / trade'
    if any(x in s for x in ('rental yield', 'cap rate', 'cash on cash', 'rental property')):
        return 'Real estate investing'
    if any(x in s for x in ('roi', 'markup', 'profit margin', 'freelance')):
        return 'Business / ROI'
    if any(x in s for x in ('matrix', 'determinant', 'rref', 'fraction', 'derivative')):
        return 'Math'
    return 'Other / unclassified'

cluster_rows = []
for name, rows, field in [('queries', queries, 'Top queries'), ('pages', pages, 'Top pages')]:
    agg = {}
    for r in rows:
        c = cluster(r.get(field))
        agg.setdefault(c, {'cluster': c, 'clicks': 0, 'impressions': 0, 'rows': 0})
        agg[c]['clicks'] += r['Clicks']
        agg[c]['impressions'] += r['Impressions']
        agg[c]['rows'] += 1
    for v in agg.values():
        v['source'] = name
        cluster_rows.append(v)

# Save CSVs for inspection/reuse.
def write_csv(filename, rows):
    if not rows:
        return
    keys = list(rows[0].keys())
    with open(OUT / filename, 'w', newline='', encoding='utf-8') as f:
        w = csv.DictWriter(f, fieldnames=keys)
        w.writeheader()
        w.writerows(rows)

write_csv('top_query_clicks.csv', top_query_clicks)
write_csv('top_query_impressions.csv', top_query_impressions)
write_csv('zero_click_high_impression_queries.csv', zero_click_high_impressions_queries)
write_csv('near_page_one_queries.csv', near_page_one_queries)
write_csv('top_page_clicks.csv', top_page_clicks)
write_csv('top_page_impressions.csv', top_page_impressions)
write_csv('zero_click_high_impression_pages.csv', zero_click_high_impressions_pages)
write_csv('near_page_one_pages.csv', near_page_one_pages)
write_csv('countries.csv', countries)
write_csv('devices.csv', devices)
write_csv('cluster_aggregates.csv', cluster_rows)

# Charts.
plt.style.use('seaborn-v0_8-whitegrid')
fig, ax = plt.subplots(figsize=(9, 4.8), dpi=160)
ax.plot(period, [r['Impressions'] for r in chart], marker='o', color='#1f5aa6', linewidth=2, label='Impressions')
ax2 = ax.twinx()
ax2.plot(period, [r['Clicks'] for r in chart], marker='o', color='#e07a28', linewidth=2, label='Clicks')
ax.set_title('AmericaCalculator.com — Search Console daily performance (last 7 days)')
ax.set_ylabel('Impressions')
ax2.set_ylabel('Clicks')
ax.tick_params(axis='x', rotation=30)
fig.tight_layout()
fig.savefig(OUT / 'daily_search_performance.png', bbox_inches='tight')
plt.close(fig)

# Top zero-click pages by impressions.
fig, ax = plt.subplots(figsize=(9, 5.5), dpi=160)
topz = zero_click_high_impressions_pages[:10][::-1]
labels = [r['Top pages'].replace('https://americacalculator.com', '')[:42] for r in topz]
vals = [r['Impressions'] for r in topz]
ax.barh(labels, vals, color='#1f5aa6')
ax.set_title('Top zero-click pages by impressions')
ax.set_xlabel('Impressions')
fig.tight_layout()
fig.savefig(OUT / 'zero_click_pages.png', bbox_inches='tight')
plt.close(fig)

# Report summary.
summary = {
    'date_range': {'start': str(period[0]), 'end': str(period[-1]), 'days': len(period)},
    'daily_totals_from_chart': {'clicks': period_clicks, 'impressions': period_impressions, 'ctr': period_ctr, 'weighted_position': weighted_position},
    'query_rows': len(queries),
    'page_rows': len(pages),
    'country_rows': len(countries),
    'device_rows': len(devices),
    'query_table_totals': {'clicks': sum(r['Clicks'] for r in queries), 'impressions': sum(r['Impressions'] for r in queries)},
    'page_table_totals': {'clicks': sum(r['Clicks'] for r in pages), 'impressions': sum(r['Impressions'] for r in pages)},
    'country_table_totals': {'clicks': country_clicks, 'impressions': country_impressions},
    'device_table_totals': {'clicks': device_clicks, 'impressions': device_impressions},
    'brand_classification': {'brand_clicks': brand_clicks, 'brand_impressions': brand_impressions, 'nonbrand_clicks': nonbrand_clicks, 'nonbrand_impressions': nonbrand_impressions},
    'top_queries_by_clicks': top_query_clicks[:10],
    'top_queries_by_impressions': top_query_impressions[:20],
    'zero_click_high_impression_queries': zero_click_high_impressions_queries[:20],
    'near_page_one_queries': near_page_one_queries[:20],
    'top_pages_by_clicks': top_page_clicks[:10],
    'top_pages_by_impressions': top_page_impressions[:20],
    'zero_click_high_impression_pages': zero_click_high_impressions_pages[:20],
    'near_page_one_pages': near_page_one_pages[:20],
    'countries_by_clicks': sort_rows(countries, 'Clicks')[:20],
    'devices': devices,
    'search_appearance': appearance,
}
with open(OUT / 'summary.json', 'w', encoding='utf-8') as f:
    json.dump(summary, f, indent=2, ensure_ascii=False, default=str)

print(json.dumps(summary, indent=2, ensure_ascii=False, default=str))
