# Technical SEO Implementation Blueprint: AmericaCalculator.com

This document provides drop-in server configurations, navigation template patches, and redirect maps to resolve all critical and high-priority technical SEO issues discovered in the audit.

---

## 1. Permanent 301 Redirect Rules (Legacy `.php` Cleanup)

Google currently indexes old PHP endpoints (`/calculators/*.php`), creating duplicate content signals and crawl budget waste. Deploy these redirect rules to permanently preserve and consolidate link equity.

### Option A: Apache `.htaccess` Configuration
Add the following block near the top of your root `.htaccess` file, immediately after `RewriteEngine On`:

```apache
# --- AmericaCalculator 301 Redirects: Legacy .php Cleanup ---
RewriteEngine On

RewriteRule ^calculators/differential-equation\.php$ /math/differential-equation-calculator [R=301,L]
RewriteRule ^calculators/inverse-matrix\.php$ /math/matrix-calculator [R=301,L]
RewriteRule ^calculators/determinant\.php$ /math/matrix-calculator [R=301,L]
RewriteRule ^calculators/rref\.php$ /math/matrix-calculator [R=301,L]
RewriteRule ^calculators/partial-derivative\.php$ /math/derivative-calculator [R=301,L]
RewriteRule ^calculators/mixed-fraction\.php$ /math/fraction-calculator [R=301,L]
RewriteRule ^calculators/investment-growth-calculator\.php$ /calculators/investment-growth-calculator [R=301,L]
RewriteRule ^calculators/freight-class\.php$ /business/freight-class-calculator [R=301,L]
RewriteRule ^calculators/cd-interest\.php$ /loan-calculators/cd-interest-calculator [R=301,L]
RewriteRule ^calculators/asphalt\.php$ /construction/asphalt-calculator [R=301,L]
RewriteRule ^calculators/cubic-yard\.php$ /construction/cubic-yard-calculator [R=301,L]
RewriteRule ^calculators/overtime\.php$ /ohio/overtime-calculator [R=301,L]
RewriteRule ^calculators/rvu\.php$ /business/rvu-calculator [R=301,L]
```

### Option B: Nginx Server Block Configuration
If running on Nginx, paste this inside your `server { ... }` block:

```nginx
# --- AmericaCalculator 301 Redirects: Legacy .php Cleanup ---
location = /calculators/differential-equation.php { return 301 /math/differential-equation-calculator; }
location = /calculators/inverse-matrix.php { return 301 /math/matrix-calculator; }
location = /calculators/determinant.php { return 301 /math/matrix-calculator; }
location = /calculators/rref.php { return 301 /math/matrix-calculator; }
location = /calculators/partial-derivative.php { return 301 /math/derivative-calculator; }
location = /calculators/mixed-fraction.php { return 301 /math/fraction-calculator; }
location = /calculators/investment-growth-calculator.php { return 301 /calculators/investment-growth-calculator; }
location = /calculators/freight-class.php { return 301 /business/freight-class-calculator; }
location = /calculators/cd-interest.php { return 301 /loan-calculators/cd-interest-calculator; }
location = /calculators/asphalt.php { return 301 /construction/asphalt-calculator; }
location = /calculators/cubic-yard.php { return 301 /construction/cubic-yard-calculator; }
location = /calculators/overtime.php { return 301 /ohio/overtime-calculator; }
location = /calculators/rvu.php { return 301 /business/rvu-calculator; }
```

---

## 2. Navigation Header Fix (Resolving Dead `/#` Links)

### Problem
In the global header/nav component, the `Math` and `Technology` categories are currently coded as:
```html
<!-- CURRENT (BROKEN - DEAD ANCHOR) -->
<li><a href="/#">Math</a></li>
<li><a href="/#">Technology</a></li>
```
This strands users and prevents search crawlers from discovering all tools grouped under those categories.

### Solution
Patch your navigation template (e.g. `header.php`, `navbar.html`, or React/Vue layout component) as follows:

```html
<!-- UPDATED (RESOLVED - ACCESSIBLE HUBS) -->
<li><a href="/math/">Math</a></li>
<li><a href="/technology/">Technology</a></li>
```

Ensure category index pages exist at `/math/index.html` (or route `/math`) and `/technology/index.html` (or route `/technology`), listing all calculators in those respective silos.

---

## 3. Robots.txt Alignment

Ensure `robots.txt` does not disallow URLs that you have redirected. Disallowing a URL prevents Googlebot from following the 301 redirect and transferring pagerank.

### Correct `robots.txt`:
```txt
User-agent: *
Allow: /

# Sitemap
Sitemap: https://americacalculator.com/sitemap.xml
```

---

## 4. XML Sitemap `<lastmod>` Updates

Update `sitemap.xml` with recent `<lastmod>` timestamps for the 4 rewritten priority pages. This alerts Googlebot that content has meaningfully changed and triggers an accelerated re-crawl.

```xml
<url>
  <loc>https://americacalculator.com/real-estate/closing-cost-calculator</loc>
  <lastmod>2026-10-01</lastmod>
  <changefreq>weekly</changefreq>
  <priority>1.0</priority>
</url>
<url>
  <loc>https://americacalculator.com/loan-calculators/sba-loan-calculator</loc>
  <lastmod>2026-10-01</lastmod>
  <changefreq>weekly</changefreq>
  <priority>0.9</priority>
</url>
<url>
  <loc>https://americacalculator.com/loan-calculators/rv-loan-calculator</loc>
  <lastmod>2026-10-01</lastmod>
  <changefreq>weekly</changefreq>
  <priority>0.9</priority>
</url>
<url>
  <loc>https://americacalculator.com/construction/home-addition-cost-calculator</loc>
  <lastmod>2026-10-01</lastmod>
  <changefreq>weekly</changefreq>
  <priority>0.9</priority>
</url>
```
