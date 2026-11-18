# AmericaCalculator SEO Audit Evidence

## Evidence checkpoint 1 — homepage and robots.txt

**Audit date:** 2026-08-14 (user timezone GMT+5)

### Homepage: https://americacalculator.com/

- Page title: `Free Online Calculators (2026) — Finance, Loans, Real Estate & More — AmericaCalculator.com`
- Homepage H1 extracted: `Free Online Calculators for Finance, Loans, Real Estate & More`
- Positioning: 50+ free calculators for US users; finance, loans, real estate, Ohio payroll, construction, business, math, and technology.
- Featured tools: SBA Loan, Ohio Paycheck, Rental Yield, Cash-on-Cash Return, Auto Loan, Personal Loan, Cap Rate, Ohio Bonus Tax.
- Categories visibly linked: Loan Calculators, Real Estate, Ohio Payroll, Construction, Business, Math, Technology.
- Homepage copy claims use of 2026 IRS tax brackets, Ohio Department of Taxation withholding tables, current FICA rates, amortization formulas, and US city benchmarks.
- Homepage FAQ questions include free access, loan calculator choice, local city taxes, good rental yield in 2026, cash-on-cash versus rental yield, accuracy, and account requirements.
- Homepage footer links include calculators, articles, company pages, privacy policy, terms, and contact email.

### robots.txt: https://americacalculator.com/robots.txt

- `User-agent: *` and `Allow: /`.
- Sitemap declared: `https://americacalculator.com/sitemap.xml`.
- Multiple off-brand/deleted calculator paths are disallowed.
- Several math/score calculator paths are labeled in comments as Tier 2 noindexed but only disallowed in robots.txt, which should be verified against each page's actual meta robots and sitemap inclusion.
- `/vendor/`, a downloadable ROI template, and `/UPLOAD_CHECKLIST.txt` are disallowed.
- Googlebot, Googlebot-Image, and AdsBot-Google are explicitly allowed.
- The robots file contains mojibake in comment separators, suggesting an encoding/serving-quality issue, though the directives themselves are readable.

## Missing first-party datasets

No Google Search Console, GA4, crawler export, backlink index, or PageSpeed/Core Web Vitals data was provided. Public-site findings can be assessed now; traffic trend, country/device split, branded versus non-branded mix, backlink quality, and field CWV require first-party or third-party exports for a complete diagnosis.

## Working hypotheses to test, not conclusions

1. The site has clear calculator category hubs and many utility pages, which may support non-branded discovery if pages are indexable and internally linked.
2. The robots comments and disallowed math paths need verification against actual indexation and sitemap behavior.
3. Finance, payroll, and real-estate calculators involve high-trust/YMYL-adjacent topics, so transparent methodology, source dates, author/editorial review, and supporting explanatory content are likely important growth levers; this must be checked on representative pages.
4. The homepage may be trying to rank for a broad set of calculator categories; representative category and tool pages will show whether intent targeting is sufficiently specific.

## Sources

- [AmericaCalculator homepage](https://americacalculator.com/)
- [AmericaCalculator robots.txt](https://americacalculator.com/robots.txt)
- [AmericaCalculator sitemap](https://americacalculator.com/sitemap.xml)

## Audit limitations

The public audit must not claim actual traffic growth/decline, top countries, device split, backlink strength, or Core Web Vitals without the corresponding datasets. Those sections should state the limitation and specify the export needed.

## Notes

This file is a running evidence log. Add subsequent verified observations below.


## Evidence checkpoint 2 — sitemap and representative finance page

### Sitemap: https://americacalculator.com/sitemap.xml

- Public sitemap contains 72 `<loc>` URLs.
- Approximate first-level distribution from the live XML: 8 blog URLs, 12 business URLs, 10 `calculators` URLs, 7 construction URLs, 9 loan-calculator URLs, 7 Ohio URLs, 13 real-estate URLs, 1 technology URL, plus home/company/legal URLs.
- Sitemap includes the homepage, company/legal pages, a blog hub and seven articles, category hubs, and calculator detail pages.
- Disallowed math paths tested (`differential-equation.php`, `partial-derivative.php`, `inverse-matrix.php`, `rref.php`, `determinant.php`, `cumulative-gpa.php`) are not present in the sitemap.
- The sitemap uses `changefreq` and `priority`, but no `<lastmod>` values were observed in the live XML; freshness cannot be communicated through last-modified dates.
- URL inventory shows mixed URL conventions: clean directory/slugs for core categories, but legacy `.php` paths remain for some calculator pages, including `cd-interest.php`, `overtime.php`, and language-specific pages. This increases the need for canonical/redirect consistency checks.
- The sitemap declares a technology section with one visible URL, while the homepage shows a Technology category; category depth is uneven across topic areas.

### Representative page: SBA Loan Calculator

- URL: `https://americacalculator.com/loan-calculators/sba-loan-calculator`
- Title: `SBA Loan Calculator 2026 | 7(a) & 504 Payment Calculator + Amortization — AmericaCalculator.com`
- Visible page structure includes breadcrumb, a long article-style explanation, calculator form, formula, worked example, rate table, eligibility information, related tools, FAQs, and a full footer taxonomy.
- Authorship and freshness signals are visible: `Written by James Carter | Financial Analyst` and `Last Updated: August 2026`.
- The page links to SBA.gov's Lender Match and FRED rates, and states limitations such as excluding guarantee fees, origination fees, packaging fees, and closing costs.
- The page has strong internal links to adjacent loan and real-estate tools, including Business Loan, Auto Loan, Personal Loan, Land Loan, Cap Rate, Rental Yield, and Cash-on-Cash Return.
- Potential factual-quality issue: the prose at the formula example says `$250,000 at 11.25% for 10 years ... gives a monthly payment of exactly $3,446`, while the calculator result and worked example show `$3,479.22`. Independent formula verification gives `$3,479.2236697`, so the `$3,446` sentence appears incorrect and should be corrected or removed.
- The page makes several time-sensitive financial/SBA claims (rates, fees, eligibility, approval times, credit thresholds) and should maintain citation links plus a clearly visible source/update trail to protect trust and search quality.

### Calculation verification

Using the standard amortization formula for principal $250,000, annual rate 11.25%, and 120 monthly payments, the verified payment is approximately $3,479.22. The page's displayed result and worked-example amount agree with this figure; the separate `$3,446` statement does not.


## Evidence checkpoint 3 — Ohio payroll and supporting article

### Ohio Paycheck Calculator

- URL: `https://americacalculator.com/ohio/paycheck-calculator`
- Title: `Ohio Paycheck Calculator (2026) – Accurate Take-Home Pay Estimator — AmericaCalculator.com`
- The page targets a clear state-plus-local payroll intent and supports salary/hourly modes, multiple pay frequencies, five filing statuses, 2025/2026 tax years, several Ohio municipalities, bonuses, commissions, overtime-related content, and pre-/post-tax deductions.
- Visible explanation shows a tax waterfall from gross wages through pre-tax deductions, federal brackets, Ohio state tax, municipal tax, FICA, bonus tax, and post-tax deductions.
- Trust/freshness signals include references to IRS 2026 brackets, Ohio Department of Taxation tables, an estimate-only disclaimer, and links to related Ohio tools. A visible author/date line was not captured on this page, unlike the SBA page and blog article.
- The page supports a strong Ohio topic cluster through links to hourly, salary, overtime, bonus, payroll-tax, and all-Ohio tools.
- Main growth opportunity: expand city-level coverage and explanatory content around Ohio municipal taxes and search variants, while ensuring each rate and tax-year claim is source-linked and reviewed.

### Ohio State Income Tax Guide

- URL: `https://americacalculator.com/blog/ohio-state-income-tax`
- Title: `Ohio State Income Tax Guide 2026: Brackets, Rates & Local Tax — AmericaCalculator.com`
- The article has a strong informational structure: quick answer, tax brackets, local municipal tax, federal interaction, filing requirements, worked calculations, credits/deductions, FAQs, sources, and direct links to Ohio calculators.
- Visible editorial signals include `By Sarah Mitchell, CPP | Payroll Specialist & Tax Researcher` and `Last Updated: August 2026`.
- Sources named or linked include Ohio Department of Taxation, IRS.gov, Tax Foundation, and RITA. This is a good model for supporting financial/YMYL-adjacent content.
- The article creates a useful content-to-tool funnel: informational search intent is answered first, then users are sent to Ohio Paycheck, Hourly Paycheck, Bonus Tax, Employer Payroll Tax, and the full Ohio suite.
- Content risk requiring factual review: the article says Ohio moved to a flat 2.75% structure in 2026 under House Bill 96, while the live Ohio paycheck page shows a multi-band table with rates of 0%, 2.765%, 3.226%, 3.688%, and 3.990%. These statements conflict and could undermine trust, create inconsistent calculator outputs, and damage search-quality signals. Reconcile the tax model and article before expanding traffic acquisition.
- The article also contains time-sensitive claims about federal SALT rules and local tax treatment; those need dated source citations and annual review.


## Evidence checkpoint 4 — technical metadata and page experience

### Raw HTML metadata scan

Representative pages checked: homepage, SBA Loan Calculator, Ohio Paycheck Calculator, and Ohio State Income Tax Guide.

- All four pages expose a title, meta description, canonical URL, responsive viewport, and exactly one visible H1 in the raw HTML.
- All four pages expose one JSON-LD block. Detected types include `WebSite`, `SearchAction`, `Organization`, and `FAQPage` on the homepage; `WebApplication`, `Offer`, `HowTo`, and `FAQPage` on the SBA page; `WebApplication`, `Offer`, `BreadcrumbList`, and `HowTo` on the Ohio calculator; and `Article`, `Person`, `Organization`, `ImageObject`, `WebPage`, `BreadcrumbList`, and `FAQPage` on the Ohio tax article.
- Open Graph tags (6 detected per representative page) and Twitter card tags (5 detected per page) are present.
- No `hreflang` tags were detected on the four representative pages. This is not a problem if the site is intentionally English-only, but the sitemap contains language-specific legacy calculator URLs, so language/duplicate handling should be reviewed.
- No HTML `meta name="robots"` tag was detected on the representative pages. That is acceptable when pages are intended to be indexable, but disallowed/noindex behavior should be confirmed for the Tier 2 paths mentioned in robots.txt.
- The homepage meta description mentions `health` calculators although the visible homepage taxonomy and sitemap evidence do not show a health category. Align the description with the actual site inventory or add/verify the relevant content.

### PageSpeed Insights

A public mobile PageSpeed Insights run was initiated for `https://americacalculator.com/` on 2026-08-14. The page reported `No Data` for field data and remained at `loading` for lab diagnostics in the captured session, while also displaying `Enter a valid URL`. No reliable performance score or Core Web Vitals values were therefore recorded. The final report should not claim a CWV pass/fail; the site owner should run PageSpeed Insights or Search Console's Core Web Vitals report directly and provide the results.


## Evidence checkpoint 5 — official search guidance

### Google Search Central sources

- Google's [SEO Starter Guide](https://developers.google.com/search/docs/fundamentals/seo-starter-guide) states that SEO helps search engines understand content and helps users find and evaluate pages. It recommends making content crawlable/indexable, using sitemaps when useful, ensuring Google can access the same resources as users, organizing related pages logically, using descriptive URLs, and using descriptive titles, meta descriptions, anchor text, and breadcrumbs. It also notes that changes may take from hours to months to affect search results and should be evaluated over weeks.
- Google's [Introduction to structured data](https://developers.google.com/search/docs/appearance/structured-data/intro-structured-data) explains that structured data helps Google understand page content and may make pages eligible for richer search appearances, but it does not guarantee a rich result. Markup must follow Google's guidelines and match visible page content.

These sources support recommendations to validate crawl/index behavior, maintain descriptive topic clusters and internal links, keep titles/descriptions aligned to visible content, and validate JSON-LD rather than assuming its presence alone creates rankings.


## Evidence checkpoint 6 — people-first content and Core Web Vitals guidance

- Google's [Creating helpful, reliable, people-first content](https://developers.google.com/search/docs/fundamentals/creating-helpful-content) recommends original, substantial, accurate content with clear expertise, sourcing, authorship, and a good page experience. It specifically prompts site owners to check for factual errors, sloppy production, excessive mass production, and content made primarily to attract search traffic. This is especially relevant because AmericaCalculator publishes time-sensitive finance and tax explanations.
- Google's [Core Web Vitals guidance](https://developers.google.com/search/docs/appearance/core-web-vitals) defines the current targets as LCP within 2.5 seconds, INP below 200 ms, and CLS below 0.1, and directs owners to the Search Console Core Web Vitals report and other measurement tools. These are targets for validation, not values measured in this audit.


## Evidence checkpoint 7 — 72-URL crawl and architecture

A direct crawl of the 72 URLs in the live sitemap was completed using a controlled requests/HTML parser run.

- 71 URLs returned HTTP 200 and 1 URL returned HTTP 404. The broken URL is `https://americacalculator.com/construction/`.
- The homepage contains an internal link to `/construction/`, so this is not merely a stale sitemap entry; it is a live internal navigation failure that blocks the construction category hub.
- Every crawled URL had a title, and every page had exactly one H1. No duplicate titles, canonical mismatches, or invalid JSON-LD were detected in the crawl.
- One page, `/construction/`, lacked both a meta description and a canonical because it returned a 404 template.
- Six legacy/low-text calculator pages share the generic meta description `Free online calculators for finance, loans, real estate, construction, math, health, and more.` This reduces snippet specificity and does not match each page's actual intent.
- Approximate sitemap-only click-depth analysis found 62 pages at depth 1 from the homepage, 1 page at depth 2, and 8 URLs unreachable from the homepage's internal-link graph. The unreachable set consists of the blog hub, five main category hubs (`loan-calculators/`, `real-estate/`, `ohio/`, `business/`, `construction/`), and two language-specific legacy calculator URLs. This approximation is based on sitemap URLs and same-domain links, not a full external crawler, but it is sufficient to flag hub-linking weaknesses.
- The sitemap is therefore not enough by itself: several important hubs are listed but not reachable through the observed homepage-to-sitemap link graph. Category hubs should be linked from the homepage and from contextual navigation, and every sitemap URL should be checked for an indexable 200 response.


## Evidence checkpoint 8 — official Ohio source verification

- The [Ohio Department of Taxation annual tax-rates page](https://tax.ohio.gov/individual/file-now/annual-tax-rates) was accessible in extracted text but the browser session displayed a captcha. The page currently lists tables through taxable year 2025 and shows the prior multi-bracket structure; it does not expose a 2026 table in the captured section.
- The [Ohio Department of Taxation employer-withholding page](https://tax.ohio.gov/business/employer-withholding) states `New Withholding Tables Effective August 1, 2026` and links to 2026 withholding-table PDFs. This confirms that the calculator should cite the dated 2026 withholding tables directly and distinguish withholding calculations from annual tax-return rates.
- The live AmericaCalculator pages still conflict: the Ohio tax guide presents a 0%/2.75% two-tier 2026 state-tax model, while the Ohio paycheck page displays older-looking multi-band rates (0%, 2.765%, 3.226%, 3.688%, 3.990%). The audit finding is therefore a verified **internal consistency and source-traceability problem**, not a definitive judgment on the correct tax law. The recommended fix is to reconcile both pages and the calculator logic against the current Ohio 2026 official tables, label the tax year and effective date, and link to the exact source PDF/page.


## Evidence checkpoint 9 — 7-day Google Search Console export

### Export scope

- Workbook: `https___americacalculator.com_-Performance-on-Search-2026-08-14.xlsx`
- Search type: Web
- Date filter: Last 7 days
- Daily chart dates: 2026-08-06 through 2026-08-12
- Available sheets: Chart, Queries, Pages, Countries, Devices, Search appearance, Filters.

### Headline performance from the Chart sheet

- Total clicks: 5
- Total impressions: 4,273
- Aggregate CTR: 0.117%, approximately 0.12%
- Impression-weighted average position: approximately 68.50
- Daily impressions ranged from 435 to 840. Clicks occurred on 2026-08-09 (2), 2026-08-10 (2), and 2026-08-11 (1); the other four days recorded zero clicks.
- There is no prior-period comparison in the workbook, so 7-day growth or decline cannot be established.

### Dimension-table caveat

- The Queries sheet contains 1,000 query rows but totals 3 clicks and 3,174 impressions, so it is not a complete total of all Search Console activity.
- The Pages sheet contains 81 page rows and totals 5 clicks and 4,417 impressions, which does not reconcile exactly with the daily Chart total of 4,273 impressions.
- The Countries and Devices sheets reconcile to the Chart total of 5 clicks and 4,273 impressions.
- Use the Chart sheet for headline totals; use Queries and Pages for directional opportunity analysis. The mismatch is likely due to Search Console dimension sampling/row limits or export aggregation behavior and should be stated rather than hidden.

### Query evidence

- Top click queries: `america calculator` (1 click, 12 impressions, position 4.58), `payroll calculator ohio` (1 click, 4 impressions, position 51.00), and `bacalaureat calculator` (1 click, 2 impressions, position 9.00).
- The leading non-branded impression opportunities are `closing cost calculator` (108 impressions, position 80.32), `closing cost calculator estimator` (99, position 80.02), `calculate closing costs` (76, position 72.61), `sba 504 loan calculator` (69, position 78.17), and `estimate closing costs` (32, position 72.84); all recorded zero clicks.
- Other visible non-branded opportunities include `home addition cost calculator` (29 impressions, position 44.41), `cap rate calculator` (31, position 68.16), `sba loan payment calculator` (23, position 73.78), `interest only loan calculator` (23, position 82.22), `lot loan calculator` (22, position 53.36), `sba loan calculator` (22, position 74.68), `land loan calculator` (20, position 58.15), and `down payment calculator` (20, position 70.25).
- A simple brand classification of the query table produced 1 branded click/12 branded impressions for `america calculator` and 2 non-branded clicks/3,162 non-branded impressions. Because the query table is capped/incomplete, this should be treated as directional, not a complete brand split.
- Only one query met the selected near-page-one band of positions 10–20 with at least four impressions: `calculator america` at position 10.5 and 4 impressions. This indicates very few immediate page-one wins in the seven-day sample.

### Page evidence

- Top pages by clicks: `/loan-calculators/land-loan-calculator` (1 click, 214 impressions, position 62.48), homepage (1, 149, position 38.42), `/calculators/freight-class.php` (1, 42, position 77.10), `/ohio/paycheck-calculator` (1, 27, position 47.59), and `/calculators/calculator-bacalaureat.php` (1, 16, position 27.12).
- Largest zero-click pages by impressions: `/real-estate/closing-cost-calculator` (711 impressions, position 79.34), `/loan-calculators/sba-loan-calculator` (460, position 77.95), `/loan-calculators/rv-loan-calculator` (391, position 72.66), `/construction/home-addition-cost-calculator` (388, position 61.47), and `/loan-calculators/interest-only-loan-calculator` (348, position 82.78).
- Additional zero-click pages with useful visibility include `/blog/how-to-calculate-square-feet-of-a-room` (175 impressions, position 70.55), `/real-estate/cap-rate-calculator` (144, position 66.94), `/blog/ohio-state-income-tax` (92, position 68.61), `/technology/bottleneck-calculator` (75, position 45.57), `/loan-calculators/sba-loan-payment-calculator` (75, position 58.96), `/business/markup-calculator` (70, position 67.23), `/real-estate/rental-yield-calculator` (39, position 51.26), `/business/amazon-roi-calculator` (37, position 35.24), and `/business/freelance-rate-calculator` (25, position 40.36).
- Practical positions 20–49 with at least 10 page impressions include the homepage (149 impressions, position 38.42), `/technology/bottleneck-calculator` (75, position 45.57), `/calculators/terminus.php` (60, position 40.27), `/calculators/dave-ramsey-investment.php` (49, position 32.71), `/business/amazon-roi-calculator` (37, position 35.24), `/ohio/paycheck-calculator` (27, position 47.59), `/business/freelance-rate-calculator` (25, position 40.36), `/construction/concrete-bag-calculator` (18, position 46.39), `/ohio/hourly-paycheck-calculator` (14, position 47.50), `/construction/concrete-calculator` (13, position 41.38), `/business/profit-margin-calculator` (11, position 21.18), and `/ohio/salary-paycheck-calculator` (10, position 47.70).

### Country and device evidence

- United States: 1 click, 3,717 impressions, 0.03% CTR, average position 70.79.
- Pakistan: 3 clicks, 20 impressions, 15.00% CTR, average position 49.05.
- India: 1 click, 66 impressions, 1.52% CTR, average position 56.38.
- Devices: Desktop 4 clicks / 3,413 impressions / 0.12% CTR / position 68.94; Mobile 1 click / 860 impressions / 0.12% CTR / position 66.70.
- The sample is too small to infer that Pakistan is the target market or to make a stable device-performance conclusion. The US has the overwhelmingly largest impression volume but very weak visibility/CTR in this period.

### Search appearance

- Product snippets: 8 impressions, 0 clicks, 0% CTR, average position 61.88. No meaningful rich-result performance can be inferred from eight impressions.

### Interpretation

- The dominant problem is visibility/ranking, not merely title CTR: the largest impression pages rank mostly between positions 61 and 83, so rewriting snippets alone will not produce substantial traffic.
- The strongest demand signal is the closing-cost cluster, followed by SBA/loan and home-addition-cost topics. Prioritize those pages for intent expansion, internal links, examples, source coverage, and ranking improvement.
- Treat off-sitemap and legacy URLs as an indexation-control issue. Search Console shows impressions for `/calculators/terminus.php`, `/calculators/dave-ramsey-investment.php`, `/calculators/ap-lang-score.php`, `/calculators/blox-fruits.php`, and other paths outside the 72-URL sitemap. Some redirect: `calculator-bacalaureat.php` redirects to the homepage and `dave-ramsey-investment.php` redirects to `/calculators/investment-growth-calculator`; `terminus.php` also resolves to the homepage. Review whether these URLs should be removed from search through proper redirects/noindex/410 handling and keep the sitemap aligned.


## Evidence checkpoint 10 — page-level review of leading Search Console opportunities

### Closing Cost Calculator

- URL: `https://americacalculator.com/real-estate/closing-cost-calculator`
- Search Console: 711 impressions, 0 clicks, average position 79.34 over the seven-day export.
- Title: `Closing Cost Calculator (2026) – Estimate Home Buying & Refinance Costs — AmericaCalculator.com`.
- The page does match the core intent with a visible buyer closing-cost calculator and fields for purchase price, down payment, rate, loan type, origination fee, points, appraisal, title, attorney/closing, recording/transfer, inspection, survey, property tax, and home insurance.
- The extracted explanatory body is comparatively thin: a short two-paragraph breakdown and four FAQ questions without visible expanded answers in the capture. No visible state-level cost assumptions, seller-versus-buyer coverage, source citations, author/date, or detailed methodology were captured.
- The Search Console query cluster shows at least 401 visible impressions across closing-cost variations in the seven-day query table, but those queries rank mainly in positions 72–80. This is a relevance/authority issue, not a snippet-only issue.
- Recommended page-level expansion: transparent calculation methodology; source-dated state/local cost and tax assumptions; buyer vs seller/realtor/lender responsibility; cash-to-close vs closing-cost distinction; FHA/VA/conventional scenarios; state or city guidance only where evidence is current; fully answered FAQs; links to mortgage, down payment, loan estimate, refinance, and real-estate hub pages.

### Home Addition Cost Calculator

- URL: `https://americacalculator.com/construction/home-addition-cost-calculator`
- Search Console: 388 impressions, 0 clicks, average position 61.47. Query variants `home addition cost` and `home addition cost calculator` total 60 visible impressions at average positions 61.97 and 44.41 respectively; additional variants bring the visible cluster to at least 79 query impressions.
- Title: `Home Addition Cost Calculator (2026) – Estimate by Type, Size & Region — AmericaCalculator.com`.
- The page offers useful calculator inputs for addition type, square footage, finish quality, region, and build direction, and returns an itemized trade-level estimate. It also states that estimates are based on 2026 national averages and links to HomeAdvisor Cost Data.
- The page is substantially more content-rich and intent-aligned than the closing-cost page. It includes regional/cost-type topics, FAQs, benchmark card, estimate ranges, and related construction tools. The main opportunity is to add traceable source citations for cost inputs, update methodology, concrete local-market examples, and stronger links from a restored construction hub and supporting project guides.
