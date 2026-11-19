import fs from 'node:fs';
import path from 'node:path';
import { fileURLToPath } from 'node:url';
import ejs from 'ejs';
import { PHASE1_META_UPDATES, buildSchemaGraph, getCalculatorSpec, type CalcSpec } from './calculator-specs.ts';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
const ROOT = path.resolve(__dirname, '..');
const VIEWS_PAGES_DIR = path.join(ROOT, 'views', 'pages');
const META_PATH = path.join(ROOT, 'src', 'pages-meta.json');
const SCHEDULE_PATH = path.join(ROOT, 'scripts', 'seo-30-day-schedule.json');
const STATE_PATH = path.join(ROOT, 'scripts', 'rollout-state.json');

interface ScheduleItem {
  slug: string;
  action: 'upgrade' | 'create';
  cluster: string;
  name: string;
  keyword: string;
  engine: string;
}

interface ScheduleDay {
  day: number;
  theme: string;
  items: ScheduleItem[];
}

interface RolloutState {
  lastCompletedDay: number;
  completedDays: number[];
  completedSlugs: string[];
  lastRunDate: string;
}

const NOINDEX_OR_EXCLUDED = new Set<string>([
  '404',
  'math/index',
  'technology/index',
  'technology/bottleneck-calculator',
  'business/ltv-cac-calculator',
  'business/automation-roi-calculator',
  'business/real-estate-roi-calculator',
  'business/rental-property-roi-calculator',
  'calculators/rref',
  'calculators/determinant',
  'calculators/inverse-matrix',
  'calculators/mixed-fraction',
  'calculators/partial-derivative',
  'calculators/differential-equation',
]);

const CATEGORY_LABELS: Record<string, { label: string; url: string }> = {
  construction: { label: 'Construction Calculators', url: 'https://americacalculator.com/construction/' },
  'loan-calculators': { label: 'Loan Calculators', url: 'https://americacalculator.com/loan-calculators/' },
  'real-estate': { label: 'Real Estate Calculators', url: 'https://americacalculator.com/real-estate/' },
  business: { label: 'Business & ROI Calculators', url: 'https://americacalculator.com/business/' },
  ohio: { label: 'Ohio Tax & Paycheck Hub', url: 'https://americacalculator.com/ohio/' },
  california: { label: 'California Paycheck Hub', url: 'https://americacalculator.com/california/' },
  texas: { label: 'Texas Paycheck Hub', url: 'https://americacalculator.com/texas/' },
  florida: { label: 'Florida Paycheck Hub', url: 'https://americacalculator.com/florida/' },
  'new-york': { label: 'New York Paycheck Hub', url: 'https://americacalculator.com/new-york/' },
  pennsylvania: { label: 'Pennsylvania Paycheck Hub', url: 'https://americacalculator.com/pennsylvania/' },
  technology: { label: 'Electrical Calculators', url: 'https://americacalculator.com/technology/voltage-drop-calculator' },
};

function todayIso(): string {
  return new Date().toISOString().slice(0, 10);
}

function escapeHtml(str: string): string {
  return str
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;');
}

function walkEjsPages(dir: string, prefix = ''): string[] {
  const out: string[] = [];
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    if (entry.isDirectory()) {
      out.push(...walkEjsPages(path.join(dir, entry.name), `${prefix}${entry.name}/`));
    } else if (entry.name.endsWith('.ejs')) {
      out.push(`${prefix}${entry.name.replace(/\.ejs$/, '')}`);
    }
  }
  return out;
}

function getRelatedLinks(slug: string, allSlugs: string[], meta: Record<string, { pageTitle?: string }>): Array<{ href: string; title: string; desc: string }> {
  const folder = slug.split('/')[0];
  const siblings = allSlugs
    .filter((s) => s.startsWith(`${folder}/`) && s !== slug && !s.endsWith('/index') && !NOINDEX_OR_EXCLUDED.has(s))
    .slice(0, 6);

  return siblings.map((s) => {
    const rawTitle = (meta[s]?.pageTitle || s.split('/').pop()!.replace(/-/g, ' '))
      .split('|')[0]
      .split('—')[0]
      .trim();
    const cleanTitle = rawTitle.replace(/\b\w/g, (c) => c.toUpperCase()).slice(0, 56);
    return {
      href: `/${s}`,
      title: cleanTitle,
      desc: `Estimate accurate US figures with our ${cleanTitle.toLowerCase()}.`,
    };
  });
}

function renderCalculatorEjs(item: ScheduleItem, spec: CalcSpec, related: Array<{ href: string; title: string; desc: string }>): string {
  const folder = item.slug.split('/')[0];
  const cat = CATEGORY_LABELS[folder] || { label: 'Calculators', url: 'https://americacalculator.com/' };
  const catPath = cat.url.replace('https://americacalculator.com', '');
  const depth = item.slug.split('/').length;
  const partialPrefix = '../'.repeat(depth) + 'partials/';

  const inputRowsHtml = spec.inputs
    .map(
      (inp) => `        <div class="ac-field">
          <label for="in-${inp.id}">${escapeHtml(inp.label)}</label>
          <input type="number" id="in-${inp.id}" value="${inp.defaultVal}" min="${inp.min}" max="${inp.max}" step="${inp.step}">
          ${inp.hint ? `<div class="ac-hint">${escapeHtml(inp.hint)}</div>` : ''}
        </div>`
    )
    .join('\n');

  const metricsHtml = spec.metrics
    .map(
      (m) => `          <div class="ac-kpi-box">
            <div class="lbl">${escapeHtml(m.label)}</div>
            <div class="val" id="out-${m.id}">—</div>
          </div>`
    )
    .join('\n');

  const tableHeadHtml = spec.tableHeaders.map((h) => `<th>${escapeHtml(h)}</th>`).join('');
  const tableRowsHtml = spec.tableRows
    .map((row) => `          <tr>${row.map((c, idx) => `<td>${idx === 0 ? `<strong>${escapeHtml(c)}</strong>` : escapeHtml(c)}</td>`).join('')}</tr>`)
    .join('\n');

  const examplesHtml = spec.examples
    .map(
      (ex) => `      <article class="ac-ex-card">
        <h3>${escapeHtml(ex.title)}</h3>
        <p>${escapeHtml(ex.intro)}</p>
        <ul>
${ex.steps.map((st) => `          <li>${escapeHtml(st)}</li>`).join('\n')}
        </ul>
      </article>`
    )
    .join('\n');

  const faqsHtml = spec.faqs
    .map(
      (f, i) => `      <div class="ac-faq-item">
        <h3>${i + 1}. ${escapeHtml(f.q)}</h3>
        <p>${escapeHtml(f.a)}</p>
      </div>`
    )
    .join('\n');

  const relatedHtml = related
    .map(
      (r) => `      <a class="ac-rel-link" href="${r.href}">
        <strong>${escapeHtml(r.title)}</strong>
        <span>${escapeHtml(r.desc)}</span>
      </a>`
    )
    .join('\n');

  const defaultsJson = JSON.stringify(
    Object.fromEntries(spec.inputs.map((i) => [i.id, i.defaultVal]))
  );

  return `<%- include('${partialPrefix}header') %>
<style>
  body { background: #f5f7fa; }
  .ac-shell { max-width: 1180px; margin: 0 auto; padding: 1.75rem 1.25rem 4rem; }
  .ac-breadcrumb { font-size: 0.84rem; color: #64748b; margin-bottom: 0.85rem; }
  .ac-breadcrumb a { color: #2563eb; text-decoration: none; font-weight: 500; }
  .ac-breadcrumb a:hover { text-decoration: underline; }
  .ac-hero { margin-bottom: 1.75rem; }
  .ac-hero h1 { font-size: clamp(1.7rem, 3vw, 2.25rem); color: #0f172a; margin: 0 0 0.65rem; line-height: 1.2; font-weight: 800; }
  .ac-lead { font-size: 1.03rem; color: #334155; line-height: 1.65; max-width: 860px; margin: 0; }
  .ac-calc-card { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; box-shadow: 0 4px 20px rgba(15, 23, 42, 0.05); overflow: hidden; margin-bottom: 2rem; }
  .ac-calc-grid { display: grid; grid-template-columns: 1fr 1fr; }
  .ac-inputs { padding: 1.75rem; border-right: 1px solid #e2e8f0; }
  .ac-outputs { padding: 1.75rem; background: #f8fafc; display: flex; flex-direction: column; gap: 1rem; }
  .ac-field { margin-bottom: 1rem; }
  .ac-field label { display: block; font-size: 0.86rem; font-weight: 700; color: #1e293b; margin-bottom: 0.35rem; }
  .ac-field input { width: 100%; padding: 0.68rem 0.82rem; border: 1.5px solid #cbd5e1; border-radius: 8px; font-size: 0.96rem; color: #0f172a; background: #fff; }
  .ac-field input:focus { outline: none; border-color: #2563eb; box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.14); }
  .ac-hint { font-size: 0.77rem; color: #64748b; margin-top: 0.25rem; }
  .ac-btn-row { display: flex; gap: 0.75rem; margin-top: 0.5rem; }
  .ac-btn-primary { flex: 1; background: #1d4ed8; color: #fff; border: none; border-radius: 8px; padding: 0.78rem 1rem; font-size: 0.95rem; font-weight: 700; cursor: pointer; }
  .ac-btn-primary:hover { background: #1e40af; }
  .ac-btn-reset { background: #e2e8f0; color: #1e293b; border: none; border-radius: 8px; padding: 0.78rem 1.15rem; font-size: 0.92rem; font-weight: 700; cursor: pointer; }
  .ac-primary-kpi { background: linear-gradient(135deg, #0f172a, #1e3a8a); color: #fff; border-radius: 12px; padding: 1.25rem 1.35rem; }
  .ac-kpi-label { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.06em; color: #bfdbfe; font-weight: 700; }
  .ac-kpi-value { font-size: 2.2rem; font-weight: 800; margin: 0.25rem 0; line-height: 1.1; }
  .ac-kpi-sub { font-size: 0.88rem; color: #dbeafe; }
  .ac-kpi-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem; }
  .ac-kpi-box { background: #fff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 0.95rem 1rem; }
  .ac-kpi-box .lbl { font-size: 0.76rem; font-weight: 700; color: #64748b; text-transform: uppercase; }
  .ac-kpi-box .val { font-size: 1.28rem; font-weight: 800; color: #0f172a; margin-top: 0.2rem; }
  .ac-section { background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 1.85rem; margin-bottom: 1.65rem; }
  .ac-section h2 { font-size: 1.45rem; color: #0f172a; margin: 0 0 0.95rem; padding-bottom: 0.6rem; border-bottom: 2px solid #f1f5f9; font-weight: 800; }
  .ac-section h3 { font-size: 1.1rem; color: #0f172a; margin: 1.2rem 0 0.45rem; font-weight: 700; }
  .ac-section p, .ac-section li { color: #334155; line-height: 1.7; font-size: 0.97rem; }
  .ac-formula { background: #f8fafc; border: 1px solid #cbd5e1; border-left: 4px solid #2563eb; border-radius: 8px; padding: 1rem 1.2rem; font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace; font-size: 0.9rem; color: #0f172a; overflow-x: auto; margin: 1rem 0; line-height: 1.7; white-space: pre; }
  .ac-table-wrap { overflow-x: auto; margin-top: 0.75rem; }
  .ac-table { width: 100%; border-collapse: collapse; font-size: 0.9rem; }
  .ac-table th { background: #1e293b; color: #fff; text-align: left; padding: 0.72rem 0.85rem; font-weight: 700; white-space: nowrap; }
  .ac-table td { padding: 0.68rem 0.85rem; border-bottom: 1px solid #e2e8f0; color: #1e293b; }
  .ac-table tr:nth-child(even) td { background: #f8fafc; }
  .ac-ex-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.15rem; margin-top: 0.85rem; }
  .ac-ex-card { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 1.2rem; }
  .ac-ex-card h3 { margin-top: 0; color: #1e3a8a; font-size: 1.04rem; }
  .ac-faq-list { display: grid; gap: 0.95rem; }
  .ac-faq-item { border: 1px solid #e2e8f0; border-radius: 10px; padding: 1.1rem 1.25rem; background: #f8fafc; }
  .ac-faq-item h3 { margin: 0 0 0.45rem; font-size: 1.02rem; color: #0f172a; }
  .ac-faq-item p { margin: 0; font-size: 0.94rem; color: #334155; }
  .ac-related-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0.85rem; }
  .ac-rel-link { display: block; padding: 0.95rem 1.05rem; border: 1px solid #cbd5e1; border-radius: 10px; text-decoration: none; background: #f8fafc; }
  .ac-rel-link:hover { border-color: #2563eb; background: #eff6ff; }
  .ac-rel-link strong { display: block; color: #0f172a; font-size: 0.95rem; margin-bottom: 0.22rem; }
  .ac-rel-link span { display: block; color: #475569; font-size: 0.82rem; line-height: 1.4; }
  .ac-disclaimer { font-size: 0.82rem; color: #64748b; margin-top: 0.85rem; line-height: 1.55; }
  @media (max-width: 900px) {
    .ac-calc-grid, .ac-ex-grid, .ac-related-grid { grid-template-columns: 1fr; }
    .ac-inputs { border-right: none; border-bottom: 1px solid #e2e8f0; }
  }
  @media (max-width: 560px) { .ac-kpi-grid { grid-template-columns: 1fr; } }
</style>

<main class="ac-shell">
  <nav class="ac-breadcrumb" aria-label="Breadcrumb">
    <a href="/">Home</a> &rsaquo; <a href="${catPath}">${escapeHtml(cat.label)}</a> &rsaquo; <span>${escapeHtml(item.name)}</span>
  </nav>

  <header class="ac-hero">
    <h1>${escapeHtml(spec.h1)}</h1>
    <p class="ac-lead">${escapeHtml(spec.lead)}</p>
  </header>

  <%- adAboveHero() %>

  <section class="ac-calc-card" aria-label="${escapeHtml(item.name)}">
    <div class="ac-calc-grid">
      <div class="ac-inputs">
${inputRowsHtml}
        <div class="ac-btn-row">
          <button type="button" id="ac-calc-btn" class="ac-btn-primary">Calculate</button>
          <button type="button" id="ac-reset-btn" class="ac-btn-reset">Reset Defaults</button>
        </div>
      </div>

      <div class="ac-outputs" aria-live="polite">
        <div class="ac-primary-kpi">
          <div class="ac-kpi-label">${escapeHtml(spec.primaryLabel)}</div>
          <div class="ac-kpi-value" id="out-primary">—</div>
          <div class="ac-kpi-sub" id="out-primary-sub">Calculating live US estimate...</div>
        </div>
        <div class="ac-kpi-grid">
${metricsHtml}
        </div>
      </div>
    </div>
  </section>

  <%- adMidContent1() %>

  <section class="ac-section">
    <h2>How It's Calculated — Formulas &amp; US Assumptions</h2>
    <div class="ac-formula">${escapeHtml(spec.formulaBlock)}</div>
    <ul>
${spec.assumptions.map((a) => `      <li>${escapeHtml(a)}</li>`).join('\n')}
    </ul>
  </section>

  <section class="ac-section">
    <h2>${escapeHtml(spec.tableTitle)}</h2>
    <div class="ac-table-wrap">
      <table class="ac-table">
        <thead>
          <tr>${tableHeadHtml}</tr>
        </thead>
        <tbody>
${tableRowsHtml}
        </tbody>
      </table>
    </div>
  </section>

  <%- adMidContent2() %>

  <section class="ac-section">
    <h2>Two Worked US Examples</h2>
    <div class="ac-ex-grid">
${examplesHtml}
    </div>
  </section>

  <section class="ac-section">
    <h2>Frequently Asked Questions</h2>
    <div class="ac-faq-list">
${faqsHtml}
    </div>
    <p class="ac-disclaimer">
      Disclaimer: Estimates are provided for planning and educational budgeting in US Imperial units and USD—not formal contractor bids, engineering certifications, or tax/lending advice. Verify final quantities and local code rules with a qualified US professional.
    </p>
  </section>

  <%- adAfterFAQ() %>

  <section class="ac-section">
    <h2>Related ${escapeHtml(cat.label)}</h2>
    <nav class="ac-related-grid" aria-label="Related Calculators">
${relatedHtml}
    </nav>
  </section>
</main>

<script>
(function () {
  var DEFAULTS = ${defaultsJson};
  function readInputs() {
    var v = {};
    Object.keys(DEFAULTS).forEach(function (k) {
      var el = document.getElementById('in-' + k);
      v[k] = Math.max(0, parseFloat(el && el.value) || 0);
    });
    return v;
  }
  function compute(v) {
${spec.jsBody}
  }
  function update() {
    var res = compute(readInputs());
    document.getElementById('out-primary').textContent = res.primary;
    document.getElementById('out-primary-sub').textContent = res.primarySub || '';
    Object.keys(res.metrics || {}).forEach(function (k) {
      var el = document.getElementById('out-' + k);
      if (el) el.textContent = res.metrics[k];
    });
  }
  Object.keys(DEFAULTS).forEach(function (k) {
    var el = document.getElementById('in-' + k);
    if (el) {
      el.addEventListener('input', update);
      el.addEventListener('change', update);
    }
  });
  document.getElementById('ac-calc-btn').addEventListener('click', update);
  document.getElementById('ac-reset-btn').addEventListener('click', function () {
    Object.keys(DEFAULTS).forEach(function (k) {
      var el = document.getElementById('in-' + k);
      if (el) el.value = DEFAULTS[k];
    });
    update();
  });
  update();
})();
</script>

<%- include('${partialPrefix}footer') %>
`;
}

function generateSitemapXml(allSlugs: string[], meta: Record<string, { pageUpdated?: string }>): string {
  const defaultDate = todayIso();
  const urls: Array<{ loc: string; lastmod: string; changefreq: string; priority: string }> = [];

  for (const slug of allSlugs) {
    if (NOINDEX_OR_EXCLUDED.has(slug) || slug.startsWith('math/')) continue;

    let urlPath = '/';
    let priority = '0.8';
    let changefreq = 'monthly';

    if (slug === 'index') {
      urlPath = '/';
      priority = '1.0';
      changefreq = 'weekly';
    } else if (slug.endsWith('/index')) {
      urlPath = `/${slug.replace(/\/index$/, '/')}`;
      priority = '0.85';
      changefreq = 'weekly';
    } else if (['about', 'contact', 'privacy-policy', 'terms-and-conditions'].includes(slug)) {
      urlPath = `/${slug}`;
      priority = '0.3';
      changefreq = 'yearly';
    } else if (slug.startsWith('blog/')) {
      urlPath = `/${slug}`;
      priority = '0.7';
      changefreq = 'monthly';
    } else {
      urlPath = `/${slug}`;
      priority = '0.9';
      changefreq = 'monthly';
    }

    let lastmod = meta[slug]?.pageUpdated || defaultDate;
    if (!/^\d{4}-\d{2}-\d{2}$/.test(lastmod) || lastmod > defaultDate) {
      lastmod = defaultDate;
    }

    urls.push({
      loc: `https://americacalculator.com${urlPath}`,
      lastmod,
      changefreq,
      priority,
    });
  }

  urls.sort((a, b) => {
    if (a.loc === 'https://americacalculator.com/') return -1;
    if (b.loc === 'https://americacalculator.com/') return 1;
    return a.loc.localeCompare(b.loc);
  });

  const body = urls
    .map(
      (u) => `  <url>
    <loc>${u.loc}</loc>
    <lastmod>${u.lastmod}</lastmod>
    <changefreq>${u.changefreq}</changefreq>
    <priority>${u.priority}</priority>
  </url>`
    )
    .join('\n');

  return `<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
${body}
</urlset>
`;
}

function generateLlmsTxt(allSlugs: string[], meta: Record<string, { pageTitle?: string }>): string {
  const liveSet = new Set(allSlugs.filter((s) => !NOINDEX_OR_EXCLUDED.has(s) && !s.startsWith('math/')));

  const sections: Array<{ heading: string; prefix: string; limit: number }> = [
    { heading: 'Construction & Materials Calculators (US Imperial)', prefix: 'construction/', limit: 16 },
    { heading: 'Loan & SBA Financing Calculators (USD)', prefix: 'loan-calculators/', limit: 14 },
    { heading: 'Real Estate & Closing Cost Calculators (US States)', prefix: 'real-estate/', limit: 16 },
    { heading: 'Business, Solar & Freight ROI Calculators', prefix: 'business/', limit: 10 },
    { heading: 'Ohio & US State Paycheck Tax Calculators', prefix: 'ohio/', limit: 6 },
  ];

  const lines: string[] = [
    '# AmericaCalculator.com',
    '',
    '> Free US-focused calculators for construction estimating (Imperial units), SBA & specialty loans, real estate investing, state closing costs, and state paycheck taxes (USD).',
    '',
    `- Website: https://americacalculator.com/`,
    `- Sitemap: https://americacalculator.com/sitemap.xml`,
    `- Last Updated: ${todayIso()}`,
    '',
  ];

  const MAX_BYTES = 9200;

  for (const sec of sections) {
    lines.push(`## ${sec.heading}`);
    const matches = Array.from(liveSet)
      .filter((s) => s.startsWith(sec.prefix) && !s.endsWith('/index'))
      .sort()
      .slice(0, sec.limit);

    for (const slug of matches) {
      const title = (meta[slug]?.pageTitle || slug.split('/').pop()!.replace(/-/g, ' '))
        .split('|')[0]
        .split('—')[0]
        .trim()
        .slice(0, 58);
      const entry = `- [${title}](https://americacalculator.com/${slug})`;
      if (Buffer.byteLength([...lines, entry].join('\n'), 'utf8') < MAX_BYTES) {
        lines.push(entry);
      }
    }
    lines.push('');
  }

  const extraStates = [
    'california/paycheck-calculator',
    'texas/paycheck-calculator',
    'florida/paycheck-calculator',
    'new-york/paycheck-calculator',
    'pennsylvania/paycheck-calculator',
    'technology/voltage-drop-calculator',
  ];
  lines.push('## Additional State Payroll & Electrical Tools');
  for (const slug of extraStates) {
    if (liveSet.has(slug)) {
      const title = (meta[slug]?.pageTitle || slug).split('|')[0].split('—')[0].trim().slice(0, 58);
      const entry = `- [${title}](https://americacalculator.com/${slug})`;
      if (Buffer.byteLength([...lines, entry].join('\n'), 'utf8') < 9800) {
        lines.push(entry);
      }
    }
  }
  lines.push('');

  return lines.join('\n');
}

function maybeRemoveBoardFootRedirect(slug: string) {
  if (slug !== 'construction/board-foot-calculator') return;
  const serverPath = path.join(ROOT, 'server.ts');
  if (!fs.existsSync(serverPath)) return;
  const src = fs.readFileSync(serverPath, 'utf8');
  const lineToRemove = `  '/construction/board-foot-calculator': '/blog/how-to-calculate-board-feet-lumber',\n`;
  if (src.includes(lineToRemove)) {
    fs.writeFileSync(serverPath, src.replace(lineToRemove, ''), 'utf8');
    console.log('Removed legacy /construction/board-foot-calculator blog redirect from server.ts.');
  }
}

function main() {
  const args = process.argv.slice(2);
  const syncOnly = args.includes('--sync-only');
  const dayArg = args.find((a) => a.startsWith('--day='));

  const meta: Record<string, any> = fs.existsSync(META_PATH)
    ? JSON.parse(fs.readFileSync(META_PATH, 'utf8'))
    : {};

  // Always ensure Phase 1 upgraded metadata + JSON-LD schemas are applied
  for (const [slug, m] of Object.entries(PHASE1_META_UPDATES)) {
    meta[slug] = { ...(meta[slug] || {}), ...m };
  }

  const schedule: { totalDays: number; days: ScheduleDay[] } = JSON.parse(
    fs.readFileSync(SCHEDULE_PATH, 'utf8')
  );
  const state: RolloutState = JSON.parse(fs.readFileSync(STATE_PATH, 'utf8'));

  if (!syncOnly) {
    const targetDayNum = dayArg ? parseInt(dayArg.split('=')[1], 10) : state.lastCompletedDay + 1;
    if (Number.isNaN(targetDayNum) || targetDayNum < 1) {
      throw new Error(`Invalid day number: ${dayArg}`);
    }
    if (targetDayNum > schedule.totalDays) {
      console.log(`30-day SEO rollout already complete (${state.lastCompletedDay}/${schedule.totalDays} days finished).`);
      return;
    }

    const dayPlan = schedule.days.find((d) => d.day === targetDayNum);
    if (!dayPlan) {
      throw new Error(`No schedule found for Day ${targetDayNum}`);
    }

    console.log(`Executing Day ${dayPlan.day}/30: ${dayPlan.theme}`);
    const existingSlugs = walkEjsPages(VIEWS_PAGES_DIR);
    const allKnownSlugs = Array.from(new Set([...existingSlugs, ...dayPlan.items.map((i) => i.slug)]));
    const runDate = todayIso();

    for (const item of dayPlan.items) {
      if (item.engine === 'manual_day1') {
        console.log(`  [Day 1 verified] ${item.slug}`);
        continue;
      }

      const spec = getCalculatorSpec(item);
      const related = getRelatedLinks(item.slug, allKnownSlugs, meta);
      const ejsSource = renderCalculatorEjs(item, spec, related);

      // Verify EJS syntax compiles cleanly before writing
      ejs.compile(ejsSource, { filename: path.join(VIEWS_PAGES_DIR, `${item.slug}.ejs`) });

      const outFile = path.join(VIEWS_PAGES_DIR, `${item.slug}.ejs`);
      fs.mkdirSync(path.dirname(outFile), { recursive: true });
      fs.writeFileSync(outFile, ejsSource, 'utf8');

      maybeRemoveBoardFootRedirect(item.slug);

      const folder = item.slug.split('/')[0];
      const cat = CATEGORY_LABELS[folder] || { label: 'Calculators', url: 'https://americacalculator.com/' };
      const url = `https://americacalculator.com/${item.slug}`;
      const pageTitle = `${item.name} (2026 US Guide) | AmericaCalculator`;
      const metaDescription = spec.lead.slice(0, 158);

      meta[item.slug] = {
        pageTitle,
        metaDescription,
        metaKeywords: `${item.keyword}, ${item.name.toLowerCase()}, ${item.keyword} 2026, us imperial calculator`,
        pageUpdated: runDate,
        schemaData: buildSchemaGraph({
          url,
          name: item.name,
          description: metaDescription,
          categoryLabel: cat.label,
          categoryUrl: cat.url,
          faqs: spec.faqs,
        }),
      };

      if (!state.completedSlugs.includes(item.slug)) {
        state.completedSlugs.push(item.slug);
      }
      console.log(`  [${item.action.toUpperCase()}] /${item.slug} (${item.name})`);
    }

    if (!state.completedDays.includes(dayPlan.day)) {
      state.completedDays.push(dayPlan.day);
      state.completedDays.sort((a, b) => a - b);
    }
    state.lastCompletedDay = Math.max(state.lastCompletedDay, dayPlan.day);
    state.lastRunDate = runDate;
    fs.writeFileSync(STATE_PATH, JSON.stringify(state, null, 2) + '\n', 'utf8');
  }

  fs.writeFileSync(META_PATH, JSON.stringify(meta, null, 2) + '\n', 'utf8');

  const finalSlugs = walkEjsPages(VIEWS_PAGES_DIR);
  const sitemapXml = generateSitemapXml(finalSlugs, meta);
  fs.writeFileSync(path.join(ROOT, 'sitemap.xml'), sitemapXml, 'utf8');

  const llmsTxt = generateLlmsTxt(finalSlugs, meta);
  fs.writeFileSync(path.join(ROOT, 'llms.txt'), llmsTxt, 'utf8');

  // Verify every EJS template across the entire site compiles cleanly
  let compiled = 0;
  for (const slug of finalSlugs) {
    const filePath = path.join(VIEWS_PAGES_DIR, `${slug}.ejs`);
    ejs.compile(fs.readFileSync(filePath, 'utf8'), { filename: filePath });
    compiled++;
  }

  console.log(
    `Sync complete: ${compiled} EJS templates verified, sitemap.xml (${sitemapXml.split('<url>').length - 1} canonical URLs), llms.txt (${Buffer.byteLength(llmsTxt, 'utf8')} bytes).`
  );
}

main();
