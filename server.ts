import express, { Request, Response } from 'express';
import path from 'node:path';
import fs from 'node:fs';
import crypto from 'node:crypto';
import { fileURLToPath } from 'node:url';
import {
  adAboveHero,
  adMidContent1,
  adMidContent2,
  adAfterFAQ,
  adMobileAnchor,
  adForCurrentPage,
  trackAdImpression,
} from './src/adsense.ts';
import {
  calculateCd,
  calculateAsphalt,
  calculateFreightClass,
  calculateStairDefaults,
  calculatePersonalLoan,
} from './src/calculators-logic.ts';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
const ROOT = __dirname;
const VIEWS_DIR = path.join(ROOT, 'views');
const PAGES_DIR = path.join(VIEWS_DIR, 'pages');

interface PageMeta {
  pageTitle?: string;
  metaDescription?: string;
  metaKeywords?: string;
  pageUpdated?: string;
  ogImage?: string;
  ogImageWidth?: string;
  ogImageHeight?: string;
  schemaData?: unknown;
}

let pagesMeta: Record<string, PageMeta> = {};
try {
  const metaPath = path.join(ROOT, 'src', 'pages-meta.json');
  if (fs.existsSync(metaPath)) {
    pagesMeta = JSON.parse(fs.readFileSync(metaPath, 'utf-8'));
  }
} catch (err) {
  console.warn('Could not load src/pages-meta.json:', err);
}

// In-memory store for contact form submissions & CSRF tokens (AI Studio ephemeral runtime)
const contactSubmissions: Array<{
  name: string;
  email: string;
  subject: string;
  message: string;
  sentAt: string;
}> = [];
const csrfTokens = new Set<string>();

function createCsrfToken(): string {
  const token = crypto.randomBytes(16).toString('hex');
  csrfTokens.add(token);
  if (csrfTokens.size > 500) {
    const first = csrfTokens.values().next().value;
    if (first) csrfTokens.delete(first);
  }
  return token;
}

const app = express();
app.set('view engine', 'ejs');
app.set('views', VIEWS_DIR);

app.use(express.urlencoded({ extended: true }));
app.use(express.json());

// Security headers (ported from .htaccess)
app.use((_req, res, next) => {
  res.setHeader('X-Content-Type-Options', 'nosniff');
  res.setHeader('X-XSS-Protection', '1; mode=block');
  res.setHeader('Referrer-Policy', 'strict-origin-when-cross-origin');
  next();
});

// Static assets
app.use('/css', express.static(path.join(ROOT, 'css')));
app.use('/js', express.static(path.join(ROOT, 'js')));
app.use('/image', express.static(path.join(ROOT, 'image')));
app.use('/downloads/files', express.static(path.join(ROOT, 'downloads', 'files')));
app.use('/real-estate/rental-property-analysis-template.pdf', express.static(path.join(ROOT, 'real-estate', 'rental-property-analysis-template.pdf')));
app.use('/calculator', express.static(path.join(ROOT, 'calculator')));

for (const staticFile of ['ads.txt', 'robots.txt', 'sitemap.xml', 'llms.txt']) {
  app.get(`/${staticFile}`, (_req, res) => {
    const fullPath = path.join(ROOT, staticFile);
    if (fs.existsSync(fullPath)) {
      res.sendFile(fullPath);
    } else {
      res.status(404).send('Not Found');
    }
  });
}

// Common view locals helper
function buildLocals(req: Request, slugKey: string, extra: Record<string, unknown> = {}) {
  const now = new Date();
  const currentYear = String(now.getFullYear());
  const months = [
    'January', 'February', 'March', 'April', 'May', 'June',
    'July', 'August', 'September', 'October', 'November', 'December',
  ];
  const shortMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
  const currentMonthYear = `${months[now.getMonth()]} ${currentYear}`;
  const currentDateShort = `${shortMonths[now.getMonth()]} ${now.getDate()}, ${currentYear}`;
  const currentYearMonth = `${currentYear}-${String(now.getMonth() + 1).padStart(2, '0')}`;

  const rawPath = req.path || '/';
  let normPath = rawPath.replace(/\/+$/, '').toLowerCase();
  if (!normPath) normPath = '/';
  const canonicalUrl = `https://americacalculator.com${normPath}`;

  const meta = pagesMeta[slugKey] || {};
  const currentPage = path.basename(slugKey);

  return {
    baseUrl: '',
    reqPath: rawPath,
    currentPage,
    currentYear,
    currentMonthYear,
    currentDateShort,
    currentYearMonth,
    canonicalUrl,
    pageTitle: meta.pageTitle || 'AmericaCalculator.com - Free Online Calculators',
    metaDescription:
      meta.metaDescription ||
      'Free online calculators for finance, loans, real estate, construction, math, and more.',
    metaKeywords: meta.metaKeywords || 'calculator, online calculator, free calculator',
    pageUpdated: meta.pageUpdated || `${currentYear}-01-01`,
    ogImage: meta.ogImage || 'https://americacalculator.com/image/logo-america%20calculator.jpg',
    ogImageWidth: meta.ogImageWidth || '1200',
    ogImageHeight: meta.ogImageHeight || '630',
    schemaData: meta.schemaData || null,
    adAboveHero,
    adMidContent1,
    adMidContent2,
    adAfterFAQ,
    adMobileAnchor,
    adForCurrentPage: () => adForCurrentPage(rawPath),
    trackAdImpression,
    ...extra,
  };
}

// Off-niche or academic routes kept accessible but excluded from search index
const NOINDEX_SLUGS = new Set<string>([
  'math/index',
  'technology/index',
  'technology/bottleneck-calculator',
  'business/ltv-cac-calculator',
  'business/automation-roi-calculator',
  'calculators/rref',
  'calculators/determinant',
  'calculators/inverse-matrix',
  'calculators/mixed-fraction',
  'calculators/partial-derivative',
  'calculators/differential-equation',
  '404',
]);

function renderPage(req: Request, res: Response, slugKey: string, extra: Record<string, unknown> = {}) {
  const viewFile = path.join(PAGES_DIR, `${slugKey}.ejs`);
  if (!fs.existsSync(viewFile)) {
    return render404(req, res);
  }
  const isNoindex = NOINDEX_SLUGS.has(slugKey) || slugKey.startsWith('math/');
  if (isNoindex) {
    res.setHeader('X-Robots-Tag', 'noindex, nofollow');
  }
  return res.render(`pages/${slugKey}`, buildLocals(req, slugKey, { noindex: isNoindex, ...extra }));
}

function render404(req: Request, res: Response) {
  const view404 = path.join(PAGES_DIR, '404.ejs');
  if (fs.existsSync(view404)) {
    return res.status(404).render('pages/404', buildLocals(req, '404', {
      pageTitle: '404 Page Not Found — AmericaCalculator.com',
    }));
  }
  return res.status(404).send('404 - Page Not Found');
}

// ── 301 Redirects ported from .htaccess ─────────────────────────────────────
const REDIRECTS: Record<string, string> = {
  '/calculators/calculator-bacalaureat.php': '/',
  '/calculators/racine-carree.php': '/',
  '/calculators/blox-fruits.php': '/',
  '/calculators/palworld-breeding.php': '/',
  '/calculators/grow-a-garden.php': '/',
  '/calculators/terminus.php': '/',
  '/calculators/saturn-return.php': '/',
  '/calculators/rvu.php': '/',
  '/calculators/corrected-calcium.php': '/',
  '/calculators/ffmi.php': '/',
  '/calculators/asq.php': '/',
  '/calculators/random-country.php': '/',
  '/calculators/map.php': '/',
  '/calculators/calculadora-de-horas.php': '/',
  '/calculators/calculo-da-hora.php': '/',
  '/calculators/dental-implant-cost-calculator': '/',
  '/calculators/dental-implant-cost-calculator.php': '/',
  '/business/pain-and-suffering-calculator': '/',
  '/calculators/bottleneck.php': '/technology/bottleneck-calculator',
  '/calculators/voltage-drop.php': '/technology/voltage-drop-calculator',
  '/calculators/dave-ramsey-investment.php': '/calculators/investment-growth-calculator',
  '/calculators/retirement-saving': '/calculators/retirement-savings',
  '/calculators/ohio-paycheck.php': '/ohio/paycheck-calculator',
  '/calculators/overtime.php': '/ohio/overtime-calculator',
  '/calculators/sba-loan.php': '/loan-calculators/sba-loan-calculator',
  '/calculators/rv-loan.php': '/loan-calculators/rv-loan-calculator',
  '/calculators/land-loan.php': '/loan-calculators/land-loan-calculator',
  '/calculators/interest-only-loan.php': '/loan-calculators/interest-only-loan-calculator',
  '/calculators/cd-interest.php': '/loan-calculators/cd-interest-calculator',
  '/calculators/cap-rate.php': '/real-estate/cap-rate-calculator',
  '/calculators/markup.php': '/business/markup-calculator',
  '/calculators/freelance-rate.php': '/business/freelance-rate-calculator',
  '/calculators/freight-class.php': '/business/freight-class-calculator',
  '/business/freelance-rate': '/business/freelance-rate-calculator',
  '/business/freelance-rate.php': '/business/freelance-rate-calculator',
  '/calculators/concrete.php': '/construction/concrete-calculator',
  '/calculators/home-addition-cost.php': '/construction/home-addition-cost-calculator',
  '/calculators/cubic-yard.php': '/construction/cubic-yard-calculator',
  '/calculators/board-foot.php': '/construction/board-foot-calculator',
  '/construction/board-foot-calculator': '/blog/how-to-calculate-board-feet-lumber',
  '/calculators/stair.php': '/construction/stair-calculator',
  '/calculators/asphalt.php': '/construction/asphalt-calculator',
  '/disclaimer': '/terms-and-conditions',
  '/terms-and-condition': '/terms-and-conditions',
  '/business/real-estate-roi-calculator': '/real-estate/roi-calculator',
  '/business/rental-property-roi-calculator': '/real-estate/rental-property-calculator',
  '/loan-calculators/mortgage-calculator': '/real-estate/mortgage-calculator',
  '/real-estate/house-hacking-calculator': '/real-estate/rental-yield-calculator',
  '/real-estate/noi-calculator': '/real-estate/cap-rate-calculator',
  '/blog/how-to-calculate-closing-cost': '/blog/how-to-calculate-closing-costs',
  '/blog/nominal-vs-actual-lumber-dimension': '/blog/nominal-vs-actual-lumber-dimensions',
  '/blog/how-much-are-closing-costs-in-texa': '/blog/how-much-are-closing-costs-in-texas',
};

// Internal URL aliases (clean rewrite without redirect)
const ALIASES: Record<string, string> = {
  '/real-estate/how-much-house-can-i-afford': 'real-estate/home-affordability-calculator',
  '/real-estate/closing-cost-calculator-for-investment-property':
    'real-estate/investment-property-closing-cost-calculator',
  '/loan-calculators/mortgage-payoff-calculator-with-extra-payments':
    'loan-calculators/mortgage-payoff-calculator',
  '/loan-calculators/extra-mortgage-payment-calculator':
    'loan-calculators/mortgage-payoff-calculator',
};

app.use((req, res, next) => {
  const clean = req.path.length > 1 ? req.path.replace(/\/+$/, '') : req.path;
  const target = REDIRECTS[clean.toLowerCase()];
  if (target) {
    return res.redirect(301, target);
  }
  return next();
});

// ── Excel XML template download ─────────────────────────────────────────────
app.get('/downloads/roi-calculator-excel-template-2026-usa.xlsx', (_req, res) => {
  const xmlPath = path.join(ROOT, 'downloads', 'roi-calculator-excel-template-2026-usa.xml');
  if (!fs.existsSync(xmlPath)) {
    return res.status(404).send('Template not found');
  }
  res.setHeader('Content-Type', 'application/vnd.ms-excel');
  res.setHeader(
    'Content-Disposition',
    'attachment; filename="roi-calculator-excel-template-2026-usa.xls"'
  );
  res.setHeader('Cache-Control', 'max-age=0');
  return res.sendFile(xmlPath);
});

// ── Contact form (GET + POST, SMTP mocked in-memory) ────────────────────────
app.get(['/contact', '/contact/'], (req, res) => {
  const csrfToken = createCsrfToken();
  return renderPage(req, res, 'contact', {
    success: false,
    errors: [],
    mailerError: '',
    form: { name: '', email: '', subject: '', message: '' },
    csrfToken,
  });
});

app.post(['/contact', '/contact/'], (req, res) => {
  const body = req.body || {};
  const errors: string[] = [];
  let success = false;
  const form = {
    name: String(body.name || '').trim(),
    email: String(body.email || '').trim(),
    subject: String(body.subject || '').trim(),
    message: String(body.message || '').trim(),
  };

  if (body.website) {
    success = true;
  } else {
    const token = String(body.csrf_token || '');
    if (!token || !csrfTokens.has(token)) {
      errors.push('Security check failed. Please refresh the page and try again.');
    }
    if (errors.length === 0) {
      if (form.name.length < 2) errors.push('Please enter your full name (min 2 characters).');
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(form.email))
        errors.push('Please enter a valid email address.');
      if (form.subject.length < 3) errors.push('Please select or enter a subject.');
      if (form.message.length < 10) errors.push('Please enter a message (min 10 characters).');
      if (form.message.length > 5000) errors.push('Message is too long (max 5,000 characters).');
    }

    if (errors.length === 0) {
      contactSubmissions.push({ ...form, sentAt: new Date().toISOString() });
      csrfTokens.delete(token);
      success = true;
      form.name = '';
      form.subject = '';
      form.message = '';
    }
  }

  return renderPage(req, res, 'contact', {
    success,
    errors,
    mailerError: '',
    form,
    csrfToken: createCsrfToken(),
  });
});

// ── Dynamic Server-Side POST Calculators ────────────────────────────────────
app.all(
  ['/loan-calculators/personal-loan-calculator', '/loan-calculators/personal-loan-calculator/'],
  (req, res) => {
    const data = calculatePersonalLoan(req.method === 'POST' ? req.body : null);
    return renderPage(req, res, 'loan-calculators/personal-loan-calculator', data);
  }
);

app.all(
  ['/loan-calculators/cd-interest-calculator', '/loan-calculators/cd-interest-calculator/'],
  (req, res) => {
    const post = req.method === 'POST' ? req.body : {};
    const result = req.method === 'POST' ? calculateCd(post) : null;
    return renderPage(req, res, 'loan-calculators/cd-interest-calculator', { post, result });
  }
);

app.all(
  ['/construction/asphalt-calculator', '/construction/asphalt-calculator/'],
  (req, res) => {
    const post = req.method === 'POST' ? req.body : {};
    const result = req.method === 'POST' ? calculateAsphalt(post) : null;
    return renderPage(req, res, 'construction/asphalt-calculator', { post, result });
  }
);

app.all(
  ['/construction/stair-calculator', '/construction/stair-calculator/'],
  (req, res) => {
    const post = req.method === 'POST' ? req.body : {};
    const stairData = calculateStairDefaults(post);
    return renderPage(req, res, 'construction/stair-calculator', stairData);
  }
);

app.all(
  ['/business/freight-class-calculator', '/business/freight-class-calculator/'],
  (req, res) => {
    const post = req.method === 'POST' ? req.body : {};
    const result = req.method === 'POST' ? calculateFreightClass(post) : null;
    return renderPage(req, res, 'business/freight-class-calculator', { post, result });
  }
);

// ── Homepage & General Clean URL Routing ────────────────────────────────────
app.get('/', (req, res) => {
  return renderPage(req, res, 'index');
});

app.get('*', (req, res) => {
  let clean = req.path.replace(/^\/+|\/+$/g, '');
  if (!clean) {
    return renderPage(req, res, 'index');
  }

  // Check alias map first
  const aliasKey = `/${clean.toLowerCase()}`;
  if (ALIASES[aliasKey]) {
    return renderPage(req, res, ALIASES[aliasKey]);
  }

  // Strip optional .php suffix
  clean = clean.replace(/\.php$/i, '');

  // Prevent path traversal
  const normalized = path.posix.normalize(clean);
  if (normalized.startsWith('..') || normalized.includes('..')) {
    return render404(req, res);
  }

  // Try exact page view first (e.g., views/pages/about.ejs or views/pages/loan-calculators/sba-loan-calculator.ejs)
  const exactFile = path.join(PAGES_DIR, `${normalized}.ejs`);
  if (fs.existsSync(exactFile)) {
    return renderPage(req, res, normalized);
  }

  // Try cluster index view (e.g., views/pages/loan-calculators/index.ejs)
  const indexFile = path.join(PAGES_DIR, normalized, 'index.ejs');
  if (fs.existsSync(indexFile)) {
    return renderPage(req, res, `${normalized}/index`);
  }

  return render404(req, res);
});

const PORT = Number(process.env.PORT) || 3000;
const HOST = '0.0.0.0';

app.listen(PORT, HOST, () => {
  console.log(`AmericaCalculator Node.js server listening on http://${HOST}:${PORT}`);
});
