# 🚀 Beyond SEO — How to Audit Your Website

## What Is Beyond SEO?

**Beyond SEO** is an AI agent skill (v1.0.3) that turns an AI assistant into a senior SEO strategist. It audits websites technically, analyzes content, researches competitors, plans keywords, checks local SEO, evaluates backlinks, and produces client-ready reports + 30/60/90-day growth plans.

It works as a **folder-based skill** — you load it into an AI agent environment and instruct the agent to follow it.

---

## Step 1: Install the Skill into Your AI Agent

The skill lives at:
```
beyond-seo/SKILL.md  ← master instruction file
```

### Option A — Claude Projects (Recommended for beginners)
1. Open **Claude.ai → Projects**.
2. Upload the entire `beyond-seo/` folder.
3. Add this system prompt to your Project:

```
You have access to the Beyond SEO skill folder. Read SKILL.md first. 
Follow its no-fluff SEO, AEO/GEO, backlink, local SEO, competitor research, 
and reporting rules. Before any audit, use capability-detection.md and 
audit-modes.md to choose the correct operating mode based on available tools, 
APIs, files, and exports. Never invent rankings, traffic, backlinks, or search 
volume. Label estimates clearly.
```

### Option B — Antigravity IDE (This environment)
Since you're already in Antigravity IDE, you can use the skill directly with me (Antigravity). The skill files are already readable at:
```
c:\Users\COMTECH 03122811806\Downloads\Beyond SEO  Your AI-Powered SEO Agency in One Skill\beyond-seo\
```

### Option C — Cursor / Codex / OpenClaw
1. Add the `beyond-seo/` folder to your project repo.
2. Instruct the agent to read `beyond-seo/SKILL.md` first.
3. Proceed with audit tasks.

---

## Step 2: Choose Your Audit Mode

The skill uses 5 modes based on what data/tools you have:

| Mode | When to Use | What You Get |
|------|-------------|--------------|
| **Mode 1: Full Intelligence** | Apify + GSC/GA4 + exports + competitors | Complete audit + 30/60/90-day plan |
| **Mode 2: Apify Intelligence** | Just Apify API token | Strong crawl/SERP/competitor analysis |
| **Mode 3: Native Scraping** | Browser/search access only (no APIs) | Visible site audit + strategy |
| **Mode 4: File Analysis** | Uploaded exports (GSC, Ahrefs CSV, etc.) | Analysis from your reports |
| **Mode 5: Advisory** | No tools or data at all | Checklist + strategic framework |

**Decision Tree:**
```
Do you have an Apify API token?
├── YES → Mode 2 (or Mode 1 if you also have GSC/GA4 exports)
└── NO
    ├── Do you have browser/search access? → Mode 3
    ├── Do you have uploaded CSV/PDF reports? → Mode 4
    └── Nothing at all → Mode 5
```

---

## Step 3: What to Provide for the Audit

For the **strongest audit**, share these inputs:

| Input | Priority | Where to Get It |
|-------|----------|----------------|
| **Website URL** | Required | Your website |
| **Target city/country** | Required for local | Your business location |
| **Main goal** | Required | E.g., "500 leads/month" |
| **Competitor URLs** | Highly recommended | Google your main keywords |
| **Apify API token** | Highly recommended | apify.com → Settings → API |
| **GSC Export** | Optional | Google Search Console → Export |
| **GA4 Export** | Optional | Google Analytics → Reports → Export |
| **Ahrefs/Semrush CSV** | Optional | Your SEO tool exports |
| **Screaming Frog crawl** | Optional | Screaming Frog → Export |

> **Note:** The skill is **Apify-first** — you only need `APIFY_API_TOKEN` by default. All other APIs are optional and fetched via Apify actors when available.

---

## Step 4: The Audit Prompt to Use

### Minimal Prompt (with just a URL)
```
Audit https://yourwebsite.com for SEO. I want to increase organic traffic.
My target location is [City, Country].
```

### Strong Prompt (with more context)
```
Audit https://yourwebsite.com

Target location: Karachi, Pakistan
Business type: [e.g., Digital Agency, E-commerce, Clinic]
Main services: [e.g., SEO, Web Design, AI Automation]
Main goal: [e.g., 500 qualified leads/month]
Competitors: competitor1.com, competitor2.com
Available data: [Apify token / GSC export / none]

Run a full SEO + AEO audit and give me a 90-day growth plan.
```

---

## Step 5: What the Audit Covers (20 Areas)

The full audit sequence:

1. **Capability Detection** — What tools/data are available?
2. **Audit Mode Selection** — Which mode to use?
3. **Business Goal Understanding** — What does success look like?
4. **Site Discovery** — Homepage, sitemap, robots.txt, pages
5. **Crawlability & Indexability** — Can Google find and index your pages?
6. **Page Inventory** — URL, status, title, H1, schema, issues per page
7. **Technical SEO** — HTTPS, redirects, broken links, JS rendering, speed
8. **On-Page SEO** — Titles, meta, headings, keyword matching
9. **Content Quality & E-E-A-T** — Depth, trust, proof, freshness
10. **Schema & Structured Data** — Organization, LocalBusiness, FAQ, etc.
11. **Internal Linking** — Link equity flow between pages
12. **Keyword & Intent Gap** — Missing keywords/pages vs. competitors
13. **Competitor Gap** — What competitors have that you don't
14. **Local SEO** — Google Business Profile, map pack, citations
15. **Backlink & Authority Gap** — DR, referring domains, link quality
16. **AEO/GEO Readiness** — Can AI assistants cite your site?
17. **Conversion SEO** — CTA, forms, trust proof, speed, friction
18. **Measurement & Tracking** — GSC, GA4, call tracking, events
19. **Issue Prioritization** — Ranked by impact, effort, confidence
20. **30/60/90-Day Plan** — Actionable execution roadmap

---

## Step 6: Understanding the Audit Output

Every issue the skill reports connects to a real business outcome:

| SEO Finding | Business Outcome |
|-------------|-----------------|
| Pages not indexed | ❌ Google can't rank them |
| Missing title/H1 | ❌ Lower click-through rate |
| Thin content | ❌ Poor rankings, no trust |
| No schema | ❌ Misses rich results & AI citations |
| Weak backlinks | ❌ Lower authority vs. competitors |
| No GBP optimization | ❌ Missing local/map pack traffic |
| Slow page speed | ❌ Higher bounce rate, lower rankings |
| No conversion CTA | ❌ Traffic doesn't turn into leads |

### SEO Health Score (out of 100)
```
Technical SEO:          /20
On-page SEO:            /15
Content / E-E-A-T:      /20
Keyword architecture:   /15
Authority / Backlinks:  /10
Local SEO:              /10
AEO / GEO readiness:    /5
Conversion / Tracking:  /5
```

---

## Step 7: Getting Apify (Recommended)

1. Sign up at **[apify.com](https://apify.com)** (free tier available).
2. Go to **Settings → Integrations → API Tokens**.
3. Copy your `APIFY_API_TOKEN`.
4. Provide it when the skill asks for it.

With Apify, the skill can:
- Crawl your full website
- Scrape Google SERP results
- Analyze competitor pages
- Check Google Maps/local results
- Pull PageSpeed/Lighthouse data
- Estimate backlink authority

---

## Step 8: Run the Audit Right Now (with Me!)

You're already in **Antigravity IDE** and I have access to the full Beyond SEO skill files. Here's how to start an audit immediately:

**Just tell me:**

```
I want to audit [your-website-url]
Target: [city, country]
Business: [type of business]
Goal: [what you want to achieve]
I have: [Apify token / GSC export / nothing]
```

I will:
1. Select the correct audit mode
2. Check your site's structure, pages, technical issues
3. Identify keyword and competitor gaps
4. Give you a prioritized action plan
5. Build a 30/60/90-day SEO roadmap

---

## Quick Reference: Key Files in the Skill

| File | Purpose |
|------|---------|
| [`SKILL.md`](file:///c:/Users/COMTECH%2003122811806/Downloads/Beyond%20SEO%20%20Your%20AI-Powered%20SEO%20Agency%20in%20One%20Skill/beyond-seo/SKILL.md) | Master instructions for the agent |
| [`audit-modes.md`](file:///c:/Users/COMTECH%2003122811806/Downloads/Beyond%20SEO%20%20Your%20AI-Powered%20SEO%20Agency%20in%20One%20Skill/beyond-seo/audit-modes.md) | The 5 audit modes + decision tree |
| [`audit/full-site-audit.md`](file:///c:/Users/COMTECH%2003122811806/Downloads/Beyond%20SEO%20%20Your%20AI-Powered%20SEO%20Agency%20in%20One%20Skill/beyond-seo/audit/full-site-audit.md) | 20-step full audit workflow |
| [`onboarding.md`](file:///c:/Users/COMTECH%2003122811806/Downloads/Beyond%20SEO%20%20Your%20AI-Powered%20SEO%20Agency%20in%20One%20Skill/beyond-seo/onboarding.md) | First-interaction guide |
| [`setup.md`](file:///c:/Users/COMTECH%2003122811806/Downloads/Beyond%20SEO%20%20Your%20AI-Powered%20SEO%20Agency%20in%20One%20Skill/beyond-seo/setup.md) | Installation for all environments |
| [`capability-detection.md`](file:///c:/Users/COMTECH%2003122811806/Downloads/Beyond%20SEO%20%20Your%20AI-Powered%20SEO%20Agency%20in%20One%20Skill/beyond-seo/capability-detection.md) | Tool/API detection logic |

---

> **Remember:** Beyond SEO never invents data. If a ranking, backlink count, or traffic number is not verified, it will say so clearly and label it as an estimate.
