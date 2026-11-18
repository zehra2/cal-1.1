import json
from pathlib import Path
from openpyxl import load_workbook

path = Path('/home/ubuntu/upload/https___americacalculator.com_-Performance-on-Search-2026-08-14.xlsx')
wb = load_workbook(path, read_only=True, data_only=True)
result = {'sheets': []}
for ws in wb.worksheets:
    rows = ws.iter_rows(values_only=True)
    sample = []
    for i, row in enumerate(rows):
        sample.append(list(row))
        if i >= 8:
            break
    result['sheets'].append({
        'title': ws.title,
        'max_row': ws.max_row,
        'max_column': ws.max_column,
        'sample_rows': sample,
    })
print(json.dumps(result, indent=2, default=str))
