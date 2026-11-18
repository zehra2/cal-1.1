# AmericaCalculator.com SEO Audit

**Prepared by:** Manus AI  
**Audit date:** 14 August 2026  
**Objective:** Increase qualified organic traffic while protecting calculator accuracy, trust, and user experience.

> **Data note.** This report is based on the live public site, its robots.txt and XML sitemap, a controlled crawl of all 72 sitemap URLs, raw-HTML checks on representative pages, public PageSpeed availability, and official Google and Ohio reference material. Google Search Console, GA4, backlink-index, keyword-history, and field Core Web Vitals data were not supplied. Accordingly, the audit does not invent traffic, ranking, country, device, or backlink metrics; it identifies what can be verified publicly and specifies the data needed to measure the rest.

## 1. Executive Summary

**AmericaCalculator.com has a credible calculator-led foundation, but technical reachability and factual consistency are more urgent traffic constraints than publishing additional pages.** The public inventory contains 72 sitemap URLs across loans, real estate, Ohio payroll, business, construction, technology, and supporting articles; the crawl returned 71 HTTP 200 pages and one HTTP 404, with `/construction/` broken despite being linked from the homepage [1] [3]. Approximate internal-link analysis found 62 sitemap URLs one click from the homepage but left the blog hub, five core category hubs, and two legacy language URLs unreachable. The site’s page-level baseline is generally sound: every crawled URL has a title and one H1, sampled pages use canonical URLs, responsive markup, social tags, and relevant JSON-LD. However, six legacy pages reuse a generic description, the SBA page contains one incorrect calculation sentence, and the Ohio tax guide conflicts with the Ohio paycheck page on the 2026 tax model [4] [5] [6]. Actual traffic trend, branded/non-branded mix, keyword concentration, country/device performance, and backlink quality are unknown because source data was not available; the last six months therefore cannot be judged for active link building, spam, or authority reaching calculator pages. Fix the 404, reconnect hubs, reconcile tax content, and then use Search Console data to scale the clusters that already earn impressions.

## 2. Organic Traffic Trend

### Verdict: public evidence cannot establish whether organic traffic has grown, remained flat, or declined

No six-month organic-click, impression, or session series was provided. The required six-month traffic graph is intentionally omitted; creating one without data would be misleading. Export at least 16 months from Google Search Console so seasonal patterns and year-over-year changes can be separated from short-term movement. Google notes that meaningful SEO changes may take weeks or longer to show in Search, so use a stable baseline and annotate major site releases rather than judging activity by a few days of data [7].

| Required analysis | Evidence currently available | Why it matters | Data needed |
|---|---|---|---|
| Global organic trend | None | Confirms growth, decline, and seasonality | Monthly GSC clicks/impressions plus GA4 organic sessions |
| Landing pages causing change | None | Identifies pages to repair or replicate | GSC Pages report with date comparison |
| Queries gaining or losing | None | Distinguishes demand changes from ranking or CTR problems | GSC Queries report with date comparison |
| Country and device split | None | Shows where localisation and mobile UX matter | GSC Countries and Devices reports |

The public site is positioned around US users and contains several strong-intent themes: SBA finance, Ohio payroll, rental-property analysis, construction estimation, and business calculations [1]. That is a **topic inventory**, not traffic proof. The first measurement task should be to identify which existing pages already have high impressions but low CTR, ranking positions 4–20, or declining clicks; those will be the most defensible growth targets.

## 3. Page Type Analysis

### Verdict: the site is structured around utility pages, but traffic leadership by page type is unproven

The sitemap contains category hubs, calculator detail pages, supporting articles, and company/legal pages [3]. The most plausible non-branded discovery engine is the calculator detail page because it directly meets user intent such as “SBA loan calculator,” “Ohio paycheck calculator,” “rental yield calculator,” or “concrete calculator.” Public evidence does not reveal the traffic share of these pages, so the report does not claim that any page type currently wins globally.

| Page type | Sitemap inventory | Crawl/content signal | Growth reading |
|---|---:|---|---|
| Loan calculators | 9 | Highest major-cluster average text depth, about 2,353 words | Strong finance-intent opportunity; retain source control for dynamic rates and fees |
| Real-estate calculators | 13 | Broadest calculator cluster; about 1,507 words on average | Build comparison paths and stronger hub navigation |
| Business and ROI calculators | 12 | About 1,520 words on average | Expand only around validated small-business and pricing demand |
| Ohio payroll tools | 7 | About 1,259 words on average | Valuable local/data-led cluster once tax logic is reconciled |
| Construction | 7 sitemap URLs, 6 returning 200 | Detail pages are substantial, but the hub is a 404 | Highest-confidence recovery opportunity |
| Blog/supporting articles | 8 | About 1,794 words on average | Good informational-to-tool funnel; the blog hub must be reconnected |
| Legacy flat calculators | 10 | About 552 words on average | Lowest content and snippet specificity; needs consolidation or improvement |

The useful strategic distinction is not “blog versus calculator.” It is **information-to-action**: an article should answer the user’s broader question and then lead to the relevant calculator, while the calculator should explain inputs, assumptions, limitations, worked examples, and next choices. The SBA calculator and Ohio tax guide already illustrate this structure [4] [6].

## 4. Branded vs Non-Branded Search Terms

### Verdict: brand dependence cannot be measured without query data

No Search Console query export was supplied, so the site cannot yet be described as branded- or non-branded-led. The visible pages target non-branded problem queries, but target wording does not prove ranking or clicks. Classify queries containing “America Calculator,” domain variations, and close brand variants as branded; treat direct calculator and topic queries as non-branded. Then compare clicks, impressions, CTR, and average position by class.

| Question | Current answer | Decision after GSC export |
|---|---|---|
| Does branded search dominate? | Unknown | Compare branded and non-branded click share |
| Which non-branded tools attract discovery? | Unknown | Identify top non-branded landing pages and queries |
| Is CTR weak despite impressions? | Unknown | Rewrite title/description only where impressions exist |
| Is visibility weak despite useful content? | Unknown | Improve intent match, internal links, and topical support |

A healthy growth program should increase non-branded discovery while preserving brand trust. The priority is not a generic “more keywords” target; it is to make each calculator page the clearest and most reliable answer for the specific calculation it performs.

## 5. Keyword Portfolio

### Verdict: topical breadth exists, but concentration risk and keyword coverage are unknown

AmericaCalculator’s sitemap spans at least six meaningful utility clusters, so the site is not dependent on a single topical category by design [3]. Whether it is dependent on a handful of search queries cannot be known without click data. Build the first keyword portfolio from GSC, not from estimated keyword-volume tools alone.

| Portfolio metric | Current status | Recommended calculation |
|---|---|---|
| Top 10 search queries | Not provided | List by clicks and compare with impressions/CTR/position |
| Top-query concentration | Not provided | Calculate the click share from the top 3 and top 10 queries |
| Branded/non-branded mix | Not provided | Classify queries and chart click share |
| Cluster coverage | Public inventory only | Map high-impression queries to a page, a gap, or a cannibalisation case |

Until the data is available, prioritize **depth before sprawl**. Develop the existing Ohio payroll, SBA/business lending, real-estate analysis, and construction clusters rather than adding unrelated calculators. Google’s guidance favors helpful, reliable, original content with clear expertise and factual accuracy; it does not prescribe a word count or reward publishing pages solely because a topic appears to have search demand [9].

## 6. SEO Content Analysis

### Verdict: the site’s best pages combine an interactive tool with an explanatory, sourced guide; the weaker legacy layer reduces consistency

The SBA calculator has a strong reusable pattern: a functional tool, descriptive title, formula explanation, worked example, limitations, related tools, FAQs, visible author/update details, and external source links [4]. The Ohio tax guide similarly presents a direct answer, tables, examples, source names, author credentials, date, FAQs, and clear links into the calculator suite [6]. Use that pattern selectively for pages already showing impressions or clear product value. Do not mechanically lengthen every legacy page.

| Landing Page Cluster | Number of Pages | Clicks | Keywords Ranked | Traffic Share % |
|---|---:|---:|---:|---:|
| Loan calculators | 9 | Not provided | Not provided | Not provided |
| Real-estate calculators | 13 | Not provided | Not provided | Not provided |
| Business and ROI | 12 | Not provided | Not provided | Not provided |
| Ohio payroll | 7 | Not provided | Not provided | Not provided |
| Construction | 7 listed; hub broken | Not provided | Not provided | Not provided |
| Blog/supporting articles | 8 | Not provided | Not provided | Not provided |
| Legacy flat calculators | 10 | Not provided | Not provided | Not provided |

### Content opportunities by established cluster

**Ohio payroll.** Reconcile tax logic first, then build helpful decision content around annual tax versus paycheck withholding, hourly pay, overtime, bonuses, municipal tax, school-district tax, and major-city scenarios. Each guide should lead directly to the calculator state that answers the reader’s problem.

**SBA and business lending.** Develop original decision-support around 7(a) versus 504, guarantee fees, term length, equipment financing, business acquisition, and rate scenarios. Current rates, fees, limits, and source pages require a documented review process rather than a simple date change [4].

**Real estate.** Connect cap rate, rental yield, cash-on-cash return, DSCR, closing costs, down payment, and rent-versus-buy through comparison pages and shared worked scenarios. This will clarify when users should choose one calculator over another.

**Construction.** Restore the hub before building new content. Then create project paths that connect concrete slab, bags, yardage, footing, asphalt, stair, and home-addition tools. Construction users often arrive with a project goal rather than a calculator name, so project navigation can create qualified internal discovery.

### Locale and language handling

No locale traffic export was provided, and `hreflang` was not detected on four representative pages. The sitemap contains two legacy Spanish-looking time-calculator URLs, but the traffic, intended countries, translation quality, and canonical treatment are unknown [3]. Either establish a deliberate multilingual structure with translated metadata and reciprocal `hreflang`, or consolidate/redirect/noindex these URLs if they are not a maintained product line. Leaving them as isolated legacy pages creates unclear indexation and topical signals.

## 7. Site Architecture

### Verdict: the tool-level structure is promising, but broken and disconnected hubs reduce topical consolidation

The crawl found 62 sitemap URLs at approximate homepage depth one and one page at depth two. Eight sitemap URLs were unreachable through the observed homepage-to-sitemap internal-link graph: the blog hub, the loan, real-estate, Ohio, business, and construction hubs, plus two legacy language URLs. Most importantly, `/construction/` returned a 404 while remaining in the sitemap and homepage navigation [1] [3]. This is an avoidable user and crawler dead end.

**Hierarchy and click depth.** Directly linking many calculator pages from the homepage is useful, but it does not replace functional category hubs. Restore each hub, link it from the homepage, and use the hub to organize its tools, relevant guides, and common next steps. Maintain descriptive directories such as `/loan-calculators/` and `/real-estate/`; Google notes that logical organisation, descriptive URLs, internal links, and breadcrumbs help users and search engines understand relationships among pages [7].

**Orphan and disconnected pages.** Treat the eight unreachable URLs as an audit list, not as a reason to add indiscriminate footer links. Reconnect the blog and category hubs through primary navigation and contextual in-content links. Decide whether the two language-specific legacy URLs deserve a maintained language architecture; if not, remove them from the sitemap and handle them consistently.

**Crawl budget and indexation logic.** At 72 URLs, crawl budget is not the bottleneck. Sitemap accuracy and intended indexation are. The robots file disallows several off-brand or Tier 2 URLs while comments refer to noindex intent [2]. A robots block alone does not communicate the same outcome as a visible `noindex` directive or a clean redirect/404 strategy. Verify removal logic in Search Console, retain only useful canonical 200 URLs in the sitemap, and do not submit a 404 hub.

**Navigation and breadcrumbs.** Sampled SBA, Ohio, and article pages expose global navigation, context links, related calculators, and breadcrumb-like trails [4] [5] [6]. Standardize that pattern across category hubs and any legacy page that remains indexable. Every category label in navigation must lead to a valid, useful category page.

## 8. Backlink Analysis

### Headline: backlink quality, velocity, anchors, and commercial-page authority cannot be diagnosed from public-site evidence alone

No backlink export or referring-domain index was available. The audit therefore cannot say whether the backlink profile is strong, weak, spammy, recently active, or able to pass authority to category and calculator pages.

### Domain Quality

Obtain a consistent export from Ahrefs, Semrush, Majestic, or a comparable provider with referring domain, first-seen date, target URL, follow/nofollow state, country, topical context, anchor text, and quality metric. Review low-quality or irrelevant domains manually; a third-party authority score is a screening signal, not a final quality judgment.

### Anchor Text Analysis

The branded versus non-branded anchor split is unknown. Evaluate whether brand, URL, descriptive, and exact-match anchors appear natural for the site’s editorial profile. Do not infer PR activity or SEO outreach from anchor text without supporting evidence.

### Distribution of Backlinks

Separate links to the homepage, category hubs, articles, and individual calculators. Homepage-heavy links may indicate general awareness, while authoritative links to distinctive guides and tools can help distribute relevance toward commercial calculator pages. The present target-page distribution is not known.

### Verdict

Backlink acquisition is not the first evidenced constraint. Repair the broken construction hub, reconnect category hubs, reconcile financial/tax content, and improve snippets before outreach. After those fixes, earn links by publishing genuinely useful annual rate references, original calculation explainers, embeddable tables, and tools that professionals can cite. Avoid bulk links and manufactured exact-match anchor campaigns.

## 9. Technical SEO

### Verdict: core metadata is implemented well, but sitemap integrity, legacy consistency, and source governance need immediate attention

The 72-URL crawl returned 71 HTTP 200 pages and one HTTP 404. Every URL had a title and exactly one H1; no duplicate titles, canonical mismatches, or invalid JSON-LD were detected. The sampled pages include responsive viewport markup, canonical tags, Open Graph/Twitter metadata, and structured data. Google states that structured data helps it understand content and can make pages eligible for richer displays, but eligibility does not guarantee a rich result [8].

| Technical issue | Verified evidence | SEO and business impact | Fix |
|---|---|---|---|
| Broken construction hub | `/construction/` is a 404; it is linked from homepage and listed in sitemap | User dead end and broken topic hub | Restore a 200 category page or 301 to the correct replacement; update sitemap and links |
| Disconnected hubs | Blog and five core category hubs unreachable in observed graph | Weaker topical pathways and authority flow | Link valid hubs from homepage and relevant calculators; add consistent breadcrumbs |
| Reused generic descriptions | Six legacy pages use the same generic description | Weak search-snippet specificity and lower click relevance | Write page-specific descriptions matching exact tool intent |
| Legacy URL fragmentation | Clean directory URLs coexist with `.php` and unclear language URLs | Potential duplication/maintenance risk | Choose canonical URL policy; redirect or consolidate non-strategic legacy pages |
| Sitemap maintenance | Sitemap includes a 404 and no visible `lastmod` values | Signals poor inventory hygiene | Include only canonical 200 URLs; add accurate `lastmod` only after real content changes |
| Homepage snippet mismatch | Homepage description mentions health calculators not shown in visible taxonomy | Misaligned promise in search results | Remove “health” or verify the actual health category/content |
| robots.txt encoding | Comments show mojibake separators | Maintenance and professionalism issue, while directives remain readable | Serve a clean UTF-8 text file and simplify comments |

**Factual accuracy is a technical SEO priority for this site.** The SBA page says a $250,000, 11.25%, 10-year example produces “exactly $3,446,” while the page’s calculator and worked example show approximately $3,479.22; a standard amortisation check also produces approximately $3,479.22 [4]. The Ohio tax guide and Ohio paycheck page display conflicting 2026 state-tax models [5] [6]. Create a single source-of-truth data layer for rate tables, effective dates, calculation functions, citations, and QA tests. Generate all worked examples from the same function as the live calculator and show a source/last-verified date beside time-sensitive outputs.

## 10. Core Web Vitals and Page Experience

### Verdict: this audit has no reliable measured Core Web Vitals result

A public mobile PageSpeed Insights attempt returned “No Data” for field data and did not complete a reliable lab-score capture in the session. This is neither a pass nor a failure. Use the Search Console Core Web Vitals report and PageSpeed Insights for the homepage plus the highest-impression calculator templates. Google identifies LCP, INP, and CLS as the central user-experience metrics and recommends targets of LCP within 2.5 seconds, INP below 200 ms, and CLS below 0.1 [10].

Test calculator pages in their actual mobile state, including input changes, output redraws, rate widgets, amortisation tables, charts, FAQ accordions, and advertising. Reserve layout space for dynamic panels and ads, defer only non-critical scripts, optimize images/icons, and ensure the calculator remains usable before all secondary content loads. Measure before and after each optimisation; do not strip useful explanatory content solely to improve a lab score.

## 11. Final Prioritization

| Priority | Action | Why it comes first | Success check |
|---:|---|---|---|
| 1 | Restore `/construction/` and remove every 404 from navigation/sitemap | It is an observed user and crawler dead end | 200 response, valid canonical, hub linked from homepage, sitemap clean |
| 2 | Reconnect blog and category hubs | Fixes observed architecture gaps before expansion | Re-crawl shows every strategic sitemap URL reachable internally |
| 3 | Reconcile Ohio 2026 logic and sources | Contradictory tax presentation threatens trust and calculator usefulness | Guide, calculator, source PDFs, and sample outputs agree |
| 4 | Correct SBA worked example and add calculation QA | A visible factual error is immediately correctable | Example derives automatically from tested calculator logic |
| 5 | Rewrite six generic meta descriptions; decide legacy URL policy | Improves snippet relevance and removes maintenance ambiguity | Unique intent-aligned snippets; canonical sitemap set only |
| 6 | Deepen the four most coherent clusters | Builds topical authority around existing product value | More contextual links, comparisons, sources, and useful guides—not generic page volume |
| 7 | Establish a Search Console measurement routine | Turns public audit into measured traffic growth | Monthly pages/queries/countries/devices dashboard; brand split and CTR opportunities tracked |
| 8 | Measure Core Web Vitals on templates | Page experience requires real measurements | Field/lab CWV baselines and resolved template bottlenecks |
| 9 | Conduct backlink audit before outreach | Prevents blind link acquisition | Referring-domain, anchor, velocity, and target-page analysis completed |

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
