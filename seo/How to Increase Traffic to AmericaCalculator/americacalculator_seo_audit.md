# AmericaCalculator.com SEO Audit

**Audit date:** 14 August 2026  
**Primary objective:** Increase qualified organic traffic without sacrificing calculator accuracy or user trust.

**Evidence note.** This audit uses a live public-site review, the 72-URL XML sitemap, a controlled crawl of all sitemap URLs, representative raw-HTML metadata checks, public PageSpeed Insights availability, and official Google and Ohio source pages. No Google Search Console, GA4, backlink-index, keyword-history, or field Core Web Vitals export was supplied. As a result, this report can diagnose crawlability, page structure, content coverage, visible trust signals, and clear technical defects, but it cannot honestly state whether organic traffic is rising, which countries or devices lead, which keywords generate clicks, or whether the backlink profile is strong.

## 1. Executive Summary

**AmericaCalculator.com has a credible utility-site foundation, but technical reachability and factual consistency are currently bigger traffic constraints than adding more pages.** The public inventory is calculator-led, with 72 sitemap URLs across loans, real estate, Ohio payroll, business, construction, technology, and supporting articles; the crawl returned 71 HTTP 200 responses and one HTTP 404, with `/construction/` broken even though the homepage links to it [1][2][3]. Approximate internal-link analysis found 62 sitemap URLs at homepage depth one but left the blog hub, five important category hubs, and two language-specific legacy URLs unreachable. The site has generally strong page-level implementation—unique titles, one H1 per crawled page, canonicals on 71 URLs, responsive markup, Open Graph/Twitter tags, and JSON-LD—but six legacy pages reuse a generic meta description. The largest trust risk is that the Ohio tax guide and Ohio paycheck page present conflicting 2026 state-tax models, while the SBA page contains one incorrect worked-formula sentence [4][5][6]. Actual organic trend, branded versus non-branded mix, keyword concentration, country/device mix, and backlink quality are not available, so the last six months cannot be judged for growth, active link building, spam, or authority reaching commercial pages. Fix the 404 and hub links, reconcile tax content, improve snippets, then use Search Console data to expand the strongest clusters.

## 2. Organic Traffic Trend

### Verdict: traffic direction is not measurable from the public evidence

No six-month organic-click or organic-session series was provided, so this audit cannot claim that organic traffic has grown, stayed flat, or declined. The required six-month global traffic graph is intentionally omitted rather than fabricated. The next measurement should be a Search Console export with monthly clicks, impressions, CTR, and average position for the last 16 months, segmented by landing page, query, country, and device. That baseline will show whether growth is coming from non-branded discovery, a small number of utility pages, or branded navigation.

| Required evidence | Current status | Why it matters | Export needed |
|---|---|---|---|
| Global organic clicks/visits by month | Not provided | Establishes trend and seasonality | GSC monthly clicks/impressions plus GA4 organic sessions |
| Landing pages causing movement | Not provided | Identifies pages to improve or replicate | GSC pages export with clicks, impressions, CTR, position |
| Queries gaining or losing | Not provided | Separates demand from ranking and snippet problems | GSC queries export with date comparison |
| Algorithm-event overlap | Not assessed | Prevents unsupported update/penalty claims | Annotated GSC trend plus Google update dates |

### Top Organic Countries

Country and device performance were not provided. It is therefore not possible to name the leading market, its three top pages, or its desktop/mobile split. The public positioning is US-focused, and the strongest visible market clusters are Ohio payroll, US loan products, US real-estate analysis, and construction estimation [1][5][6]. The site should not expand into country-specific SEO until Search Console confirms where impressions already exist.

| Market question | Public-site signal | Required next evidence |
|---|---|---|
| Which market gets the most organic traffic? | Site copy emphasizes US users and Ohio-specific tools | GSC country report |
| Which pages win in that market? | Ohio paycheck, SBA loan, rental yield, and construction tools are visibly featured | GSC landing-page-by-country export |
| Is mobile or desktop stronger? | Responsive viewport is present on sampled pages | GSC device report and field CWV |

## 3. Page Type Analysis

### Verdict: the site is utility-page-led by inventory, not yet proven utility-page-led by traffic

The sitemap contains calculator detail pages, category hubs, eight blog URLs, and company/legal pages. The page types most likely to create non-branded discovery are the calculator tools because they directly satisfy “calculator,” “estimate,” “payment,” “take-home pay,” “yield,” and “cost” intents. However, the evidence does not include traffic percentages, so it would be incorrect to say that calculators capture the largest share of global organic traffic. The immediate page-type opportunity is to make category hubs reachable and useful enough to pass authority to the detail pages.

| Page type | Sitemap inventory | Crawl/content signal | Strategic reading |
|---|---:|---|---|
| Loan calculators | 9 | Highest average body length among major clusters at about 2,353 words | Strong candidate for commercial-intent discovery; preserve depth and source current rate claims |
| Real-estate calculators | 13 | About 1,507 words on average | Broadest utility cluster; strengthen hub navigation and comparison content |
| Business calculators | 12 | About 1,520 words on average | Good expansion surface for ROI, pricing, and small-business intent |
| Ohio payroll | 7 | About 1,259 words on average | Strong local/data-driven cluster, but accuracy consistency must be fixed first |
| Construction | 7 listed, 6 returning 200 | About 1,670 words among 200 pages; hub itself is 404 | Clear technical blocker and an opportunity for project-specific guides |
| Blog/supporting articles | 8 | About 1,794 words on average | Useful informational-to-tool funnel; blog hub is unreachable in the crawl graph |
| Legacy flat calculators | 10 | About 552 words on average | Weakest content/snippet layer; several generic descriptions need rewriting |

## 4. Branded vs Non-Branded Search Terms

### Branded versus non-branded traffic cannot be calculated from public data

No query export was provided, so the audit cannot responsibly state whether branded search dominates or whether non-branded discovery is carrying growth. The visible site strategy is designed for non-branded queries—such as “SBA loan calculator,” “Ohio paycheck calculator,” “rental yield calculator,” and “concrete calculator”—but visible targeting is not evidence of clicks or rankings. Segment GSC queries into branded terms containing the domain/brand name and non-branded terms describing the calculator intent; report clicks, impressions, CTR, and position separately.

The practical goal is to grow non-branded discovery without weakening the brand. The highest-value test is whether each calculator receives impressions for the exact problem it solves and whether the title/description earns clicks against established calculator competitors. If impressions are present but CTR is low, revise the snippet. If impressions are low and the page is indexable, expand the intent-matched explanation and internal links. If rankings are high but clicks are low, test a clearer result promise and current-year wording.

## 5. Keyword Portfolio

### Verdict: the portfolio appears broad by topic, but concentration and resilience are unmeasured

The sitemap covers multiple calculator intents, but there is no keyword-click history or ranking export. It is therefore not possible to name the top ten organic keywords, calculate branded/non-branded click share, or judge whether traffic depends on a handful of terms. Use GSC query data to create a top-ten table and a concentration measure such as the share of clicks generated by the top 10 queries. This should be reviewed separately for loans, Ohio payroll, real estate, construction, business, and legacy calculators.

| Portfolio question | Current answer | Action once GSC data is available |
|---|---|---|
| Top 10 queries | Not provided | Export query clicks/impressions/CTR/position and list the ten highest-click terms |
| Brand mix | Not provided | Classify queries as branded or non-branded and chart click share |
| Concentration risk | Not provided | Calculate top-3 and top-10 click share by cluster |
| Coverage gap | Public inventory shows many tools but few supporting articles | Map impressions with no dedicated page and build only validated topic expansions |

The likely safest growth path is **cluster depth before topic sprawl**. Expand proven demand around Ohio payroll, SBA/business lending, rental-property analysis, and concrete/construction rather than adding unrelated calculators. Google’s people-first guidance emphasizes original value, complete explanations, clear expertise, source transparency, and factual accuracy—not a target word count or mass-produced pages [9].

## 6. SEO Content Analysis

### Verdict: the strongest content pattern is calculator plus explanatory guide, but legacy pages and disconnected hubs dilute it

The SBA page demonstrates the best reusable pattern: a functional calculator, a clear search-intent title, formula explanation, worked example, limitations, related tools, FAQs, authorship, update date, and an authoritative external source link [4]. The Ohio tax article similarly creates an informational-to-tool funnel with a quick answer, tables, sources, author credentials, update date, FAQs, and calculator links [6]. These patterns should be applied selectively to pages with confirmed impressions, not copied mechanically across every URL.

| Landing Page Cluster | Number of Pages | Clicks | Keywords Ranked | Traffic Share % |
|---|---:|---:|---:|---:|
| Loan calculators | 9 | Not provided | Not provided | Not provided |
| Real-estate calculators | 13 | Not provided | Not provided | Not provided |
| Business and ROI | 12 | Not provided | Not provided | Not provided |
| Ohio payroll | 7 | Not provided | Not provided | Not provided |
| Construction | 7 listed; 1 hub 404 | Not provided | Not provided | Not provided |
| Blog and supporting articles | 8 | Not provided | Not provided | Not provided |
| Legacy flat calculators | 10 | Not provided | Not provided | Not provided |

### Recommended cluster development

For **Ohio payroll**, build or refine pages around annual versus paycheck withholding, hourly pay, overtime, bonuses, municipal tax, school-district tax, and major-city scenarios. Link each guide to the exact calculator input mode it supports. For **loans**, develop decision-support pages around SBA 7(a) versus 504, guarantee fees, term length, business acquisition, equipment, and lender-rate scenarios. For **real estate**, connect cap rate, rental yield, cash-on-cash return, DSCR, closing costs, down payment, and rent-versus-buy through comparison and worked-example pages. For **construction**, repair the hub first, then connect concrete slab, bags, yardage, footings, asphalt, stairs, and home-addition cost through project-specific explanations.

### Multilingual and locale-page analysis

No locale traffic data was provided, and no `hreflang` tags were detected on the four representative pages. The sitemap contains two language-specific-looking legacy URLs—`calculadora-de-horas.php` and `calculo-da-hora.php`—but their language targeting, canonical strategy, and traffic are unknown. Either consolidate them into a deliberate language architecture with translated metadata and reciprocal `hreflang`, or redirect/noindex them if they are not part of the product strategy. Do not leave ambiguous legacy URLs competing with the US English calculator taxonomy.

## 7. Site Architecture

### Verdict: the architecture is understandable at the tool level but is hurting scalable growth because key hubs are missing or unreachable

The crawl found 62 sitemap URLs at approximate homepage depth one, which is a shallow pattern for a 72-URL site. However, the blog hub and five core category hubs were unreachable through the observed sitemap-only internal-link graph, and `/construction/` returned 404 even though the homepage links to it. This weakens topical consolidation and makes the site’s category structure less useful to users and crawlers. Link every valid hub from the homepage, add hub-to-detail links, and make breadcrumbs consistent across every calculator and article [7].

**Click depth and hierarchy.** The tool pages are often directly reachable, but direct links alone do not replace category hubs. Keep descriptive directory URLs such as `/loan-calculators/` and `/real-estate/`, restore the missing hub pages, and use breadcrumb links from hub to detail and detail back to hub. Re-crawl after the fix and confirm that every sitemap URL is reachable through a valid internal path.

**Orphan and disconnected pages.** The crawl identified eight sitemap URLs unreachable from the homepage-only graph: `/blog/`, five category hubs, and two language-specific legacy URLs. The remedy is not to add more footer links indiscriminately; it is to create a clear primary taxonomy, link the hubs from the homepage, and link relevant guides contextually from calculator pages.

**Crawl budget and indexation logic.** At 72 URLs, crawl budget is not the limiting factor. The more important issue is that the sitemap contains a 404 and robots.txt disallows several paths described in comments as noindex candidates. Validate intended removals in Search Console and use the correct combination of 404/410, `noindex`, canonical, and redirects rather than relying on a robots block alone. Keep only indexable, useful URLs in the sitemap.

**Navigation and breadcrumbs.** Sampled pages expose a global navigation, contextual related-calculator links, and breadcrumb-like trails. The structure is strongest on the SBA, Ohio, and article pages. Extend the same pattern to every category hub and legacy calculator that remains indexable, and avoid sending users to a generic category label that returns 404.

## 8. Backlink Analysis

### Headline: backlink strength and authority distribution cannot be established from the supplied evidence

No backlink export or referring-domain index was provided. The audit therefore cannot say whether the profile is strong, weak, or spammy, whether the last six months show active link building, or whether authority reaches commercial calculator pages.

### Domain Quality

Referring-domain quality, topical relevance, country relevance, and link velocity are unknown. Obtain a referring-domain export from Ahrefs, Semrush, Majestic, or another consistent source, including first-seen date, target URL, follow/nofollow, domain quality metric, and anchor text. Review suspicious domains manually; do not equate a high numerical authority score with a useful or trusted link.

### Anchor Text Analysis

The branded versus non-branded anchor split is not available. A healthy profile would normally be evaluated for natural brand/URL anchors, descriptive references, and an absence of manipulative exact-match concentration. The current evidence cannot determine whether links are PR-driven, naturally earned, or built through SEO outreach.

### Distribution of Backlinks

Homepage links, category-hub links, article links, and feature-calculator links should be separated. Homepage-heavy coverage may indicate general awareness, while links to authoritative guides and distinctive tools can distribute relevance into commercial calculator pages. Current target-page distribution is unknown.

### Verdict

Backlink acquisition is not the first evidenced blocker. Repairing the broken construction hub, reconnecting category hubs, fixing factual inconsistencies, and improving snippet specificity are higher-confidence actions. After those fixes, pursue earned links through original calculators, data-led annual tax/rate updates, embeddable reference tables, partnerships with small-business and real-estate publishers, and citations from official or professional sources. Do not buy bulk links or manufacture exact-match anchors.

## 9. Technical SEO

### Verdict: basic metadata implementation is strong, but sitemap integrity, legacy consistency, and content-source maintenance need attention

The 72-URL crawl returned 71 HTTP 200 pages and one HTTP 404. All crawled pages had a title and exactly one H1; no duplicate titles, canonical mismatches, or invalid JSON-LD were found. The four representative pages had responsive viewport markup, canonical tags, Open Graph/Twitter tags, and JSON-LD. Google’s guidance confirms that sitemaps, descriptive URLs, internal links, titles, meta descriptions, and breadcrumbs help search engines crawl and understand content, while structured data can improve eligibility for richer appearances but does not guarantee them [7][8].

| Technical issue | Evidence | Impact | Recommended fix |
|---|---|---|---|
| Construction hub 404 | `/construction/` returns 404 and is linked from homepage | Lost category path, poor UX, wasted sitemap entry | Restore the hub with a 200 page or 301 it to the correct replacement; update sitemap and validate links |
| Disconnected hubs | Blog and five category hubs unreachable in approximate graph | Weak topical consolidation and navigation | Add homepage/category links, hub breadcrumbs, and contextual hub links |
| Generic descriptions | Six legacy pages share one generic meta description | Lower snippet relevance and click potential | Write intent-specific descriptions and review titles/content on each legacy page |
| Missing metadata on 404 | Construction page has no canonical or description because it is an error page | Confirms sitemap/navigation defect | Fix status first; do not optimize the error template |
| Encoding quality | robots.txt comments display mojibake separators | Professional/maintenance signal; directives remain readable | Serve robots.txt as clean UTF-8 and simplify comments |
| Legacy URL conventions | Clean directory paths coexist with `.php` and language-specific legacy URLs | Duplicate/fragmented taxonomy risk | Decide canonical URL set, redirect duplicates, and keep sitemap URLs consistent |
| Sitemap freshness | Live sitemap uses priority/changefreq but no visible `lastmod` values | Less explicit freshness communication | Add accurate `lastmod` only when content materially changes; never fake freshness |
| Homepage description mismatch | Meta description mentions health calculators while visible taxonomy does not | Misaligned search snippet and site promise | Remove “health” or verify/add the relevant content |

**Accuracy and source control are technical SEO issues for this site.** The SBA page contains a formula explanation that says the example payment is `$3,446`, while the displayed result and independent amortization calculation are about `$3,479.22` [4]. The Ohio tax guide and Ohio paycheck page also expose different 2026 state-tax models [5][6]. Create one source-of-truth data layer for tax years, rates, effective dates, rate tables, and calculation logic; display the source and “last verified” date next to the affected result.

## 10. Core Web Vitals and Page Experience

### Verdict: no reliable Core Web Vitals result was available in this audit

A public mobile PageSpeed Insights run returned field-data `No Data` and did not produce a reliable lab score in the captured session. This is not a pass or fail. The site owner should use Search Console’s Core Web Vitals report and run PageSpeed Insights for the homepage and the highest-impression calculator templates. Google identifies LCP, INP, and CLS as the key metrics and recommends targets of LCP within 2.5 seconds, INP below 200 milliseconds, and CLS below 0.1 [10].

Calculator pages should be tested in their real mobile state, including the initial calculator render, rate widgets, charts, amortization tables, FAQ accordions, and any ad scripts. Measure the page before and after changes; do not remove useful explanatory content solely to chase a lab score. Prioritize stable reserved space for dynamic panels, efficient loading of JavaScript required for the calculator, compressed images/icons, and avoidance of layout shifts caused by late-loading advertising or rate widgets.

## 11. Final Prioritization

The following order is based on **observed evidence and business impact**, not on unverified traffic assumptions.

1. **Restore `/construction/` and repair all sitemap/status defects.** The page is a 404, is linked from the homepage, and is listed in the sitemap. Fixing it is the clearest immediate recovery action.
2. **Reconnect the blog and five core category hubs.** Link valid hubs from the homepage and from relevant tools, add breadcrumbs, and re-crawl until no important sitemap URL is unreachable.
3. **Reconcile the Ohio 2026 tax model before publishing more tax content.** Compare the calculator, guide, and official 2026 withholding PDFs; label annual-return versus paycheck withholding logic, add exact source links, and re-test example outputs.
4. **Correct the SBA formula sentence and institute a calculation QA process.** Every worked example should be generated from the same calculation function used by the interactive result, with automated tests for representative inputs.
5. **Rewrite the six generic legacy meta descriptions and decide the legacy URL policy.** Keep only pages with distinct US search intent; otherwise consolidate, redirect, or noindex them consistently and remove non-target URLs from the sitemap.
6. **Strengthen the four proven-looking topic clusters before adding unrelated tools.** Prioritize Ohio payroll, SBA/business loans, real estate analysis, and construction; connect calculators to original explanatory guides and comparison pages.
7. **Use Search Console to turn the audit into a measured growth program.** Export 16 months of queries, pages, countries, devices, clicks, impressions, CTR, and positions; separate brand from non-brand and calculate top-query concentration. This is required to identify actual winners and losses.
8. **Measure page experience on representative templates.** Obtain field CWV and lab diagnostics for mobile and desktop, then optimize the calculator render, dynamic widgets, and layout stability based on measured bottlenecks.
9. **Audit backlinks before investing in link acquisition.** Obtain referring-domain, anchor-text, target-page, and first-seen-date exports. Only after quality is understood should the site pursue earned links to distinctive data, guides, and tools.

## 12. References

[1]: [AmericaCalculator homepage](https://americacalculator.com/)  
[2]: [AmericaCalculator robots.txt](https://americacalculator.com/robots.txt)  
[3]: [AmericaCalculator XML sitemap](https://americacalculator.com/sitemap.xml)  
[4]: [SBA Loan Calculator](https://americacalculator.com/loan-calculators/sba-loan-calculator)  
[5]: [Ohio Paycheck Calculator](https://americacalculator.com/ohio/paycheck-calculator)  
[6]: [Ohio State Income Tax Guide for 2026](https://americacalculator.com/blog/ohio-state-income-tax)  
[7]: [Google Search Central: SEO Starter Guide](https://developers.google.com/search/docs/fundamentals/seo-starter-guide)  
[8]: [Google Search Central: Introduction to structured data](https://developers.google.com/search/docs/appearance/structured-data/intro-structured-data)  
[9]: [Google Search Central: Creating helpful, reliable, people-first content](https://developers.google.com/search/docs/fundamentals/creating-helpful-content)  
[10]: [Google Search Central: Understanding Core Web Vitals and Google search results](https://developers.google.com/search/docs/appearance/core-web-vitals)  
[11]: [Ohio Department of Taxation: Annual Tax Rates](https://tax.ohio.gov/individual/file-now/annual-tax-rates)  
[12]: [Ohio Department of Taxation: Employer Withholding](https://tax.ohio.gov/business/employer-withholding)
