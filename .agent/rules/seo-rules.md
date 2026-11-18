# SEO Rules — Always Apply

## URL Structure
Pattern: `/{cluster}/{calculator-name}`

Examples:
- `/loan-calculators/sba-loan-calculator`
- `/loan-calculators/sba-loan-payment-calculator`
- `/loan-calculators/business-loan-calculator`
- `/loan-calculators/land-loan-calculator`
- `/loan-calculators/rv-loan-calculator`
- `/loan-calculators/auto-loan-calculator`
- `/loan-calculators/personal-loan-calculator`
- `/real-estate/cap-rate-calculator`
- `/business/markup-calculator`
- `/business/profit-margin-calculator`
- `/business/freelance-rate-calculator`

Rules:
- Lowercase, hyphenated, no stop-word stuffing
- No dates or version numbers in the URL itself (put the year in title/meta,
  not the slug)
- Never change a live URL without a 301 redirect plan

## Title Formula
`"{Calculator Name} ({Year}) – {Benefit/Feature Phrase} | America Calculator"`

Example:
`"SBA Loan Calculator (2026) – Calculate Payments, Rates & Fees Instantly | America Calculator"`

Rules:
- Keep total length under ~60 characters where possible (before the brand
  suffix) to avoid truncation
- Front-load the primary keyword
- Update the year annually across the whole cluster in one pass

## Meta Description
- 150–160 characters
- Benefit-focused, includes the target keyword + current year
- Ends with a soft call-to-action ("Try it free", "Get instant estimates")

## Content Requirements (every calculator page, 1000+ words)
1. Intro — what the calculator does and who it's for
2. How-to guide — step-by-step using the tool
3. Formula explanation — the actual math, in plain English
4. Worked example(s) using realistic current-year rates
5. Pros / cons or eligibility requirements (where relevant, e.g. SBA loans)
6. Related calculators section (3+ internal links, same cluster)
7. FAQ section — 8+ questions, written to match real search queries
8. Link to 1 relevant pillar/guide page

## Structured Data (JSON-LD, required on every calculator page)
- `WebApplication` schema for the calculator tool itself
- `FAQPage` schema matching the on-page FAQ content exactly
- `HowTo` schema matching the on-page how-to steps exactly

Do not fabricate ratings, review counts, or author credentials in schema —
only mark up what's actually visible on the page.

## Internal Linking
- Every page links to 3+ related calculators in its cluster
- Every page links to at least 1 relevant guide/pillar page
- Use descriptive anchor text (not "click here") that matches the target
  page's primary keyword

## Technical / Core Web Vitals
- Server-render (SSR) calculator shell content; hydrate interactivity
  client-side
- Compress and lazy-load any non-critical images
- All images need descriptive `alt` text (include the calculator name where
  natural)
- Proper heading hierarchy: one `H1` per page, logical `H2`/`H3` nesting —
  never skip levels
- Update `sitemap.xml` whenever a new calculator page ships or a URL changes
