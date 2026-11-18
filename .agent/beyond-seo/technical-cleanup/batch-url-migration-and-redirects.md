# 🛠️ Part 4: Batch URL Migration & 301 Redirect Master Blueprint

**Objective:** Eliminate legacy `.php` scripts and disorganized paths under `/calculators/`, migrating all tools into cohesive, clean-path category silos (`/loan-calculators/`, `/real-estate/`, `/construction/`, `/business/`, `/math/`).  
**Execution Mode:** **Single Atomic Batch Deployment** (avoids prolonged mixed-URL states, redirect chains, and indexing confusion).

---

## 🗺️ 1. Master URL Mapping Table (Old Path → New Clean Path)

| Legacy URL | Target Clean URL | Category Silo | Canonical Intent |
| :--- | :--- | :--- | :--- |
| `/calculators/cd-interest.php` | `/loan-calculators/cd-interest-calculator` | Loans | CD yield & compounding interest |
| `/calculators/freight-class.php` | `/business/freight-class-calculator` | Business | Freight density & NMFC freight class |
| `/calculators/stair.php` | `/construction/stair-calculator` | Construction | Stair rise, run, stringer & step layout |
| `/calculators/asphalt.php` | `/construction/asphalt-calculator` | Construction | Asphalt tonnage, driveway area & depth |
| `/calculators/cubic-yard.php` | `/construction/cubic-yard-calculator` | Construction | Cubic yards for mulch, gravel, topsoil |
| `/calculators/overtime.php` | `/ohio/overtime-calculator` | Ohio / Payroll | Overtime pay (1.5x time-and-a-half) |
| `/calculators/rvu.php` | `/business/rvu-calculator` | Business / Medical | Relative Value Units for healthcare |
| `/calculators/investment-growth-calculator.php` | `/calculators/investment-growth-calculator` | Finance | Compound investment growth |
| `/calculators/differential-equation.php` | `/math/differential-equation-calculator` | Math | Calculus & differential equations |
| `/calculators/inverse-matrix.php` | `/math/matrix-calculator` | Math | Matrix inversion & linear algebra |
| `/calculators/determinant.php` | `/math/matrix-calculator` | Math | Matrix determinant calculation |
| `/calculators/rref.php` | `/math/matrix-calculator` | Math | Reduced row echelon form |
| `/calculators/partial-derivative.php` | `/math/derivative-calculator` | Math | Multivariable partial derivatives |
| `/calculators/mixed-fraction.php` | `/math/fraction-calculator` | Math | Mixed number fraction arithmetic |
| `/blog/retirement-savings-longevity-calculator` | `/calculators/retirement-savings-longevity-calculator` | Finance | Retirement asset longevity modeling |

---

## ⚡ 2. Batch Server Configuration Drops

Deploy these redirect rules in one single update.

### A. Apache `.htaccess` (Drop-in Block)
Place this block immediately following `RewriteEngine On` in your root `.htaccess` file:

```apache
# ====================================================================
# AMERICACALCULATOR.COM - BATCH URL CLEANUP & 301 REDIRECTS (2026)
# ====================================================================
RewriteEngine On

# 1. Loan Calculators Migration
RewriteRule ^calculators/cd-interest\.php$ /loan-calculators/cd-interest-calculator [R=301,L]

# 2. Business Calculators Migration
RewriteRule ^calculators/freight-class\.php$ /business/freight-class-calculator [R=301,L]
RewriteRule ^calculators/rvu\.php$ /business/rvu-calculator [R=301,L]

# 3. Construction Calculators Migration
RewriteRule ^calculators/stair\.php$ /construction/stair-calculator [R=301,L]
RewriteRule ^calculators/asphalt\.php$ /construction/asphalt-calculator [R=301,L]
RewriteRule ^calculators/cubic-yard\.php$ /construction/cubic-yard-calculator [R=301,L]

# 4. Ohio / Payroll Calculators Migration
RewriteRule ^calculators/overtime\.php$ /ohio/overtime-calculator [R=301,L]

# 5. Math Calculators Consolidation
RewriteRule ^calculators/differential-equation\.php$ /math/differential-equation-calculator [R=301,L]
RewriteRule ^calculators/inverse-matrix\.php$ /math/matrix-calculator [R=301,L]
RewriteRule ^calculators/determinant\.php$ /math/matrix-calculator [R=301,L]
RewriteRule ^calculators/rref\.php$ /math/matrix-calculator [R=301,L]
RewriteRule ^calculators/partial-derivative\.php$ /math/derivative-calculator [R=301,L]
RewriteRule ^calculators/mixed-fraction\.php$ /math/fraction-calculator [R=301,L]

# 6. Clean Extensionless Redundancy
RewriteRule ^calculators/investment-growth-calculator\.php$ /calculators/investment-growth-calculator [R=301,L]
RewriteRule ^blog/retirement-savings-longevity-calculator$ /calculators/retirement-savings-longevity-calculator [R=301,L]
```

### B. Nginx Configuration (Drop-in `server { }` Block)
```nginx
# ====================================================================
# AMERICACALCULATOR.COM - NGINX 301 ATOMIC MIGRATION
# ====================================================================

# Loan Calculators
location = /calculators/cd-interest.php { return 301 /loan-calculators/cd-interest-calculator; }

# Business Calculators
location = /calculators/freight-class.php { return 301 /business/freight-class-calculator; }
location = /calculators/rvu.php { return 301 /business/rvu-calculator; }

# Construction Calculators
location = /calculators/stair.php { return 301 /construction/stair-calculator; }
location = /calculators/asphalt.php { return 301 /construction/asphalt-calculator; }
location = /calculators/cubic-yard.php { return 301 /construction/cubic-yard-calculator; }

# Ohio / Payroll Calculators
location = /calculators/overtime.php { return 301 /ohio/overtime-calculator; }

# Math Calculators
location = /calculators/differential-equation.php { return 301 /math/differential-equation-calculator; }
location = /calculators/inverse-matrix.php { return 301 /math/matrix-calculator; }
location = /calculators/determinant.php { return 301 /math/matrix-calculator; }
location = /calculators/rref.php { return 301 /math/matrix-calculator; }
location = /calculators/partial-derivative.php { return 301 /math/derivative-calculator; }
location = /calculators/mixed-fraction.php { return 301 /math/fraction-calculator; }

# Finance & Misc
location = /calculators/investment-growth-calculator.php { return 301 /calculators/investment-growth-calculator; }
location = /blog/retirement-savings-longevity-calculator { return 301 /calculators/retirement-savings-longevity-calculator; }
```

### C. Cloudflare Bulk Redirects (CSV Export Format)
If AmericaCalculator uses Cloudflare as its DNS/CDN proxy, you can upload this directly into **Rules → Bulk Redirects**:

```csv
Source URL,Target URL,Status Code,Preserve Query String,Subpath Matching
https://americacalculator.com/calculators/cd-interest.php,https://americacalculator.com/loan-calculators/cd-interest-calculator,301,true,false
https://americacalculator.com/calculators/freight-class.php,https://americacalculator.com/business/freight-class-calculator,301,true,false
https://americacalculator.com/calculators/rvu.php,https://americacalculator.com/business/rvu-calculator,301,true,false
https://americacalculator.com/calculators/stair.php,https://americacalculator.com/construction/stair-calculator,301,true,false
https://americacalculator.com/calculators/asphalt.php,https://americacalculator.com/construction/asphalt-calculator,301,true,false
https://americacalculator.com/calculators/cubic-yard.php,https://americacalculator.com/construction/cubic-yard-calculator,301,true,false
https://americacalculator.com/calculators/overtime.php,https://americacalculator.com/ohio/overtime-calculator,301,true,false
https://americacalculator.com/calculators/differential-equation.php,https://americacalculator.com/math/differential-equation-calculator,301,true,false
https://americacalculator.com/calculators/inverse-matrix.php,https://americacalculator.com/math/matrix-calculator,301,true,false
https://americacalculator.com/calculators/determinant.php,https://americacalculator.com/math/matrix-calculator,301,true,false
https://americacalculator.com/calculators/rref.php,https://americacalculator.com/math/matrix-calculator,301,true,false
https://americacalculator.com/calculators/partial-derivative.php,https://americacalculator.com/math/derivative-calculator,301,true,false
https://americacalculator.com/calculators/mixed-fraction.php,https://americacalculator.com/math/fraction-calculator,301,true,false
https://americacalculator.com/calculators/investment-growth-calculator.php,https://americacalculator.com/calculators/investment-growth-calculator,301,true,false
```

---

## 🤖 3. Robots.txt Cleanup

Currently, `robots.txt` contains disallow directives for specific legacy `.php` endpoints:
```txt
# PREVIOUS (PROBLEMATIC):
Disallow: /calculators/differential-equation.php
Disallow: /calculators/inverse-matrix.php
```
**Why this must be removed:** If a page is blocked via `robots.txt`, Googlebot **cannot crawl the 301 redirect**. It will not transfer PageRank or internal equity to the new clean URL.

**Updated Clean `robots.txt`:**
```txt
User-agent: *
Allow: /

Sitemap: https://americacalculator.com/sitemap.xml
```

---

## 📋 4. Post-Migration Verification Checklist
- [ ] Test HTTP status codes using curl: `curl -I https://americacalculator.com/calculators/cd-interest.php` (must return `HTTP/1.1 301 Moved Permanently`).
- [ ] Confirm target destination loads with `HTTP/1.1 200 OK`.
- [ ] Ensure canonical tag on destination URL points self-referentially to the clean URL.
- [ ] Update all internal navigation and footer links referencing the old `.php` URLs.
- [ ] Resubmit `sitemap.xml` in Google Search Console.
