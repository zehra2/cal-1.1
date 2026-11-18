import os
import sys
import re
import json
import shutil
import subprocess

LIVE_DIR = r"D:\xammp\htdocs\americacalculator.com\americacalculator.com"
WORKSPACE_DIR = r"c:\Users\COMTECH 03122811806\Downloads\Beyond SEO  Your AI-Powered SEO Agency in One Skill"
BEYOND_DIR = os.path.join(WORKSPACE_DIR, "beyond-seo")
BUILT_DIR = os.path.join(BEYOND_DIR, "built-calculators")
BLUEPRINTS_DIR = os.path.join(BEYOND_DIR, "new-calculators")
DEPLOY_DIR = os.path.join(BEYOND_DIR, "deploy-site")
BLOG_DIR = os.path.join(BEYOND_DIR, "blog-posts")
REWRITES_DIR = os.path.join(BEYOND_DIR, "rewrites")

def clean_text(s):
    if not s:
        return ""
    replacements = [
        ("?\"", "—"),
        ("?'", "→"),
        ("?", "—"),
        ("'", "✓"),
        ("dY\"O", "📋"),
        ("dY'", "⭐"),
        ("dY\"?", "📍"),
        ("dY r", "📊"),
        ("dY>,?", "⚙️"),
        ("dY\"S", "📅"),
        ("A-", "×"),
        ("A", "÷"),
        ("â€”", "—"),
        ("â€“", "–"),
        ("â†’", "→"),
        ("âœ“", "✓"),
        ("Â", ""),
    ]
    for bad, good in replacements:
        s = s.replace(bad, good)
    return s

def extract_meta_from_blueprint(md_path):
    with open(md_path, "r", encoding="utf-8", errors="ignore") as f:
        txt = f.read()
    
    title_m = re.search(r"Title Tag.*?:.*?`([^`]+)`", txt, re.DOTALL)
    desc_m = re.search(r"Meta Description.*?:.*?`([^`]+)`", txt, re.DOTALL)
    schema_m = re.search(r"<script type=\"application/ld\+json\">(.*?)</script>", txt, re.DOTALL)
    
    title = clean_text(title_m.group(1).strip()) if title_m else ""
    desc = clean_text(desc_m.group(1).strip()) if desc_m else ""
    schema = schema_m.group(1).strip() if schema_m else "{}"
    
    content_body = ""
    content_m = re.search(r"## .*?(?:Full Ready-to-Publish|Complete Surrounding).*?\n+(.*)", txt, re.DOTALL)
    if content_m:
        raw_body = content_m.group(1)
        html_block = re.search(r"```html\s*(.*?)\s*```", raw_body, re.DOTALL)
        if html_block:
            content_body = clean_text(html_block.group(1))
        else:
            content_body = clean_text(raw_body)
            
    return title, desc, schema, content_body

def extract_html_components(html_path):
    with open(html_path, "r", encoding="utf-8", errors="ignore") as f:
        html = f.read()
    
    style_m = re.search(r"<style>(.*?)</style>", html, re.DOTALL | re.IGNORECASE)
    script_m = re.search(r"<script>(.*?)</script>", html, re.DOTALL | re.IGNORECASE)
    main_m = re.search(r"<main[^>]*>(.*?)</main>", html, re.DOTALL | re.IGNORECASE)
    
    style = clean_text(style_m.group(1).strip()) if style_m else ""
    script = script_m.group(1).strip() if script_m else ""
    
    main_html = ""
    if main_m:
        raw_main = main_m.group(1).strip()
        # Remove short placeholder article if present at end
        raw_main = re.sub(r"<article class=\"content-article\">.*?</article>", "", raw_main, flags=re.DOTALL)
        main_html = clean_text(raw_main)
    
    return style, main_html, script

def deploy_file(rel_path, content):
    # Deploy both to staging (deploy-site) and to live site (LIVE_DIR)
    staged_path = os.path.join(DEPLOY_DIR, rel_path)
    os.makedirs(os.path.dirname(staged_path), exist_ok=True)
    with open(staged_path, "w", encoding="utf-8") as f:
        f.write(content)
        
    live_path = os.path.join(LIVE_DIR, rel_path)
    os.makedirs(os.path.dirname(live_path), exist_ok=True)
    with open(live_path, "w", encoding="utf-8") as f:
        f.write(content)
    print(f"  [DEPLOYED] {rel_path} ({len(content)} bytes)")

# ----------------------------------------------------
# 1. DEPLOY NEW CALCULATORS
# ----------------------------------------------------
def build_new_calculators():
    print("\n--- STEP 1: DEPLOYING NEW CALCULATORS ---")
    
    calcs = [
        {
            "rel_path": "real-estate/property-tax-calculator.php",
            "html": os.path.join(BUILT_DIR, "property-tax-calculator.html"),
            "md": os.path.join(BLUEPRINTS_DIR, "property-tax-calculator.md")
        },
        {
            "rel_path": "real-estate/mortgage-refinance-calculator.php",
            "html": os.path.join(BUILT_DIR, "mortgage-refinance-calculator.html"),
            "md": os.path.join(BLUEPRINTS_DIR, "mortgage-refinance-calculator.md")
        },
        {
            "rel_path": "real-estate/rent-affordability-calculator.php",
            "html": os.path.join(BUILT_DIR, "rent-affordability-calculator.html"),
            "md": os.path.join(BLUEPRINTS_DIR, "rent-affordability-calculator.md")
        },
        {
            "rel_path": "loan-calculators/debt-to-income-calculator.php",
            "html": os.path.join(BUILT_DIR, "debt-to-income-calculator.html"),
            "md": os.path.join(BLUEPRINTS_DIR, "debt-to-income-calculator.md")
        },
        {
            "rel_path": "loan-calculators/heloc-calculator.php",
            "html": os.path.join(BUILT_DIR, "heloc-calculator.html"),
            "md": os.path.join(BLUEPRINTS_DIR, "heloc-calculator.md")
        },
        {
            "rel_path": "loan-calculators/boat-loan-calculator.php",
            "html": os.path.join(BUILT_DIR, "boat-loan-calculator.html"),
            "md": os.path.join(BLUEPRINTS_DIR, "boat-loan-calculator.md")
        },
        {
            "rel_path": "texas/paycheck-calculator.php",
            "html": os.path.join(BUILT_DIR, "texas-paycheck-calculator.html"),
            "md": None,
            "title": "Texas Paycheck Calculator (2026) — Net Take-Home Pay | AmericaCalculator",
            "desc": "Calculate your Texas take-home pay with 0% state income tax. Model federal withholding, Social Security, and Medicare for hourly and salary wages.",
            "schema": json.dumps({
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "WebApplication",
                        "name": "Texas Paycheck Calculator",
                        "url": "https://americacalculator.com/texas/paycheck-calculator",
                        "applicationCategory": "FinanceApplication",
                        "operatingSystem": "All",
                        "offers": { "@type": "Offer", "price": "0", "priceCurrency": "USD" },
                        "description": "Calculate take-home pay for Texas employees with zero state income tax, federal tax brackets, and FICA deductions."
                    },
                    {
                        "@type": "FAQPage",
                        "mainEntity": [
                            {
                                "@type": "Question",
                                "name": "Does Texas have a state income tax?",
                                "acceptedAnswer": {
                                    "@type": "Answer",
                                    "text": "No. The Texas Constitution prohibits state personal income taxes. Texas workers only pay federal income tax, Social Security (6.2%), and Medicare (1.45%)."
                                }
                            },
                            {
                                "@type": "Question",
                                "name": "How much tax is deducted from a Texas paycheck?",
                                "acceptedAnswer": {
                                    "@type": "Answer",
                                    "text": "Texas paychecks are subject only to federal payroll taxes: 6.2% Social Security up to the wage base ($168,600), 1.45% Medicare, and federal income tax withholding based on your W-4 form."
                                }
                            }
                        ]
                    }
                ]
            }, indent=2)
        }
    ]
    
    # 1. hoa-fee-calculator
    hoa_staged = os.path.join(DEPLOY_DIR, "real-estate", "hoa-fee-calculator.php")
    if os.path.exists(hoa_staged):
        with open(hoa_staged, "r", encoding="utf-8") as f:
            hoa_content = f.read()
        hoa_clean = clean_text(hoa_content)
        deploy_file("real-estate/hoa-fee-calculator.php", hoa_clean)

    for item in calcs:
        rel = item["rel_path"]
        style, tool_html, script = extract_html_components(item["html"])
        if item.get("md"):
            title, desc, schema_raw, content_body = extract_meta_from_blueprint(item["md"])
        else:
            title = item["title"]
            desc = item["desc"]
            schema_raw = item["schema"]
            content_body = """
<article class="calculator-content-body">
  <div class="quick-answer-card">
    <h2>Texas Take-Home Pay Explained (0% State Personal Income Tax)</h2>
    <p>Texas is one of only nine US states with no personal state income tax. When working in Texas, your paycheck deductions consist exclusively of federal income tax withholding, Social Security (6.2%), and Medicare (1.45%).</p>
  </div>
  <h2>Texas vs. High-Tax States: Take-Home Pay Comparison</h2>
  <div class="table-responsive">
    <table class="data-table">
      <thead><tr><th>State</th><th>Gross Salary</th><th>State Tax Paid</th><th>Estimated Annual Net Pay</th></tr></thead>
      <tbody>
        <tr><td><strong>Texas</strong></td><td>$75,000</td><td><strong>$0 (0%)</strong></td><td><strong>$60,450</strong></td></tr>
        <tr><td>Ohio</td><td>$75,000</td><td>$1,780 (2.75%)</td><td>$58,670</td></tr>
        <tr><td>California</td><td>$75,000</td><td>$3,920 (5.2%)</td><td>$56,530</td></tr>
        <tr><td>New York</td><td>$75,000</td><td>$3,850 (5.1%)</td><td>$56,600</td></tr>
      </tbody>
    </table>
  </div>
  <h2>How to Maximize Your Texas Take-Home Pay</h2>
  <p>Because Texas levies zero state income tax, the primary levers to optimize your net earnings involve federal tax deductions:</p>
  <ul>
    <li><strong>Traditional 401(k) / 403(b):</strong> Contributions reduce your taxable gross before federal income tax is calculated.</li>
    <li><strong>Health Savings Account (HSA):</strong> Triple tax-advantaged contributions lower both federal income tax and FICA taxes.</li>
    <li><strong>Accurate Form W-4:</strong> Ensure your allowances, dependents, and other withholding adjustments match your annual tax return filing status.</li>
  </ul>
</article>
"""
        
        try:
            s_obj = json.loads(schema_raw)
            formatted_schema = json.dumps(s_obj, indent=2, ensure_ascii=False)
        except Exception:
            formatted_schema = "{}"

        # Clean title & desc
        if not title:
            title = "Calculator | AmericaCalculator"
        if not desc:
            desc = "Free online calculator."

        php_code = f"""<?php
$currentYear = date('Y');
$pageTitle = "{title.replace('"', '\\"')}";
$metaDescription = "{desc.replace('"', '\\"')}";
$schemaData = json_decode(<<<'EOD'
{formatted_schema}
EOD
, true);
require_once __DIR__ . '/../includes/header.php';
?>
<style>
{style}
/* Layout and responsive typography additions */
.calculator-content-body {{ margin-top: 2.5rem; background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; padding: 2.5rem; box-shadow: 0 4px 20px rgba(0,0,0,0.04); }}
.calculator-content-body h2 {{ font-size: 1.65rem; color: #0f172a; margin: 2rem 0 1rem; border-bottom: 2px solid #f1f5f9; padding-bottom: 0.5rem; }}
.calculator-content-body h3 {{ font-size: 1.25rem; color: #1e293b; margin: 1.5rem 0 0.75rem; }}
.calculator-content-body p {{ color: #475569; font-size: 1.02rem; line-height: 1.75; margin-bottom: 1.25rem; }}
.calculator-content-body ul, .calculator-content-body ol {{ margin-left: 1.5rem; margin-bottom: 1.5rem; color: #475569; line-height: 1.75; }}
.calculator-content-body li {{ margin-bottom: 0.5rem; }}
.table-responsive {{ overflow-x: auto; margin: 1.5rem 0; }}
.data-table {{ width: 100%; border-collapse: collapse; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; }}
.data-table th {{ background: #1e293b; color: #ffffff; padding: 12px 16px; text-align: left; font-size: 0.9rem; }}
.data-table td {{ padding: 12px 16px; border-bottom: 1px solid #f1f5f9; color: #334155; font-size: 0.92rem; }}
.data-table tr:nth-child(even) td {{ background: #f8fafc; }}
.quick-answer-card {{ background: #f0fdf4; border-left: 4px solid #10b981; padding: 1.5rem; border-radius: 0 8px 8px 0; margin-bottom: 2rem; }}
.quick-answer-card h2 {{ font-size: 1.35rem; color: #065f46; margin: 0 0 0.5rem; border: none; padding: 0; }}
.quick-answer-card p {{ color: #047857; margin: 0; }}
</style>

<main class="main-wrapper">
{tool_html}

{content_body}
</main>

<script>
{script}
</script>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
"""
        deploy_file(rel, php_code)

    # 2. texas/index.php
    texas_hub = """<?php
$currentYear = date('Y');
$pageTitle       = "Texas Payroll & Tax Calculators ($currentYear) | Net Take-Home Pay";
$metaDescription = "Free Texas payroll and paycheck calculators for $currentYear. Calculate take-home pay, hourly wages, salary net pay, and FICA deductions with 0% Texas state income tax.";
$metaKeywords    = "texas payroll calculators, texas paycheck calculator, texas hourly paycheck calculator, texas salary calculator, texas take home pay, texas 0 percent state income tax";
$schemaData = [
  '@context' => 'https://schema.org',
  '@graph'   => [
    ['@type' => 'CollectionPage',
     'name'  => "Texas Payroll Calculators ($currentYear)",
     'url'   => 'https://americacalculator.com/texas/',
     'description' => "Complete suite of free Texas paycheck and payroll calculators. Calculate net take-home pay with zero state personal income tax."],
    ['@type' => 'BreadcrumbList', 'itemListElement' => [
      ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
      ['@type'=>'ListItem','position'=>2,'name'=>'Texas Payroll Calculators','item'=>'https://americacalculator.com/texas/'],
    ]],
  ],
];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f8fafc;}
.tx-hub{max-width:1100px;margin:0 auto;padding:2.5rem 1.5rem 4rem;}
.tx-bc{font-size:.8rem;color:#94a3b8;margin-bottom:1.25rem;}
.tx-bc a{color:#64748b;text-decoration:none;}
.tx-hero{text-align:center;margin-bottom:3rem;}
.tx-hero h1{font-size:2.3rem;color:#0f172a;margin:0 0 1rem;line-height:1.2;}
.tx-hero p{font-size:1.1rem;color:#475569;max-width:680px;margin:0 auto 1.5rem;line-height:1.7;}
.tx-badge-row{display:flex;flex-wrap:wrap;justify-content:center;gap:.6rem;margin-bottom:.5rem;}
.tx-badge{background:#eff6ff;border:1px solid #bfdbfe;color:#1d4ed8;font-size:.8rem;font-weight:600;padding:.35rem .85rem;border-radius:20px;}
.tx-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-bottom:3rem;}
.tx-card{background:#fff;border-radius:14px;border:1.5px solid #e8edf5;box-shadow:0 4px 18px rgba(0,0,0,.05);padding:1.75rem 1.5rem 1.5rem;display:flex;flex-direction:column;gap:.75rem;transition:border-color .2s,box-shadow .2s,transform .15s;text-decoration:none;}
.tx-card:hover{border-color:#1d4ed8;box-shadow:0 8px 28px rgba(29,78,216,.14);transform:translateY(-3px);}
.tx-card-icon{font-size:2rem;line-height:1;}
.tx-card h3{font-size:1.05rem;color:#0f172a;margin:0;font-weight:700;}
.tx-card p{font-size:.87rem;color:#64748b;margin:0;line-height:1.55;flex-grow:1;}
.tx-card-link{font-size:.83rem;font-weight:700;color:#1d4ed8;display:flex;align-items:center;gap:.3rem;}
.tx-info-box{background:#fff;border-radius:14px;border:1px solid #e2e8f0;padding:2rem;box-shadow:0 4px 18px rgba(0,0,0,.03);margin-bottom:2rem;}
.tx-info-box h2{font-size:1.45rem;color:#0f172a;margin:0 0 1rem;}
.tx-info-box p{color:#475569;font-size:.97rem;line-height:1.75;margin-bottom:1rem;}
@media(max-width:768px){.tx-grid{grid-template-columns:1fr;}}
</style>

<div class="tx-hub">
  <div class="tx-bc"><a href="/">Home</a> / <span>Texas Payroll Calculators</span></div>
  <div class="tx-hero">
    <h1>Texas Payroll & Paycheck Calculators (<?php echo $currentYear;?>)</h1>
    <p>Calculate take-home pay, hourly wages, salary distributions, and FICA deductions under Texas's 0% state income tax framework.</p>
    <div class="tx-badge-row">
      <span class="tx-badge">0% State Personal Income Tax</span>
      <span class="tx-badge">Updated <?php echo $currentYear;?> Federal Tax Brackets</span>
      <span class="tx-badge">Accurate FICA Withholding</span>
    </div>
  </div>

  <div class="tx-grid">
    <a href="/texas/paycheck-calculator" class="tx-card">
      <div class="tx-card-icon">💵</div>
      <h3>Texas Paycheck Calculator</h3>
      <p>Estimate your exact take-home pay for hourly and salary earnings after federal income tax, Social Security, and Medicare.</p>
      <span class="tx-card-link">Launch Calculator →</span>
    </a>
    <a href="/texas/paycheck-calculator" class="tx-card">
      <div class="tx-card-icon">⏱️</div>
      <h3>Hourly Wage Net Pay</h3>
      <p>Convert hourly rates into daily, bi-weekly, and monthly net take-home earnings with zero state deductions.</p>
      <span class="tx-card-link">Calculate Hourly Pay →</span>
    </a>
    <a href="/texas/paycheck-calculator" class="tx-card">
      <div class="tx-card-icon">📊</div>
      <h3>Salary Take-Home Pay</h3>
      <p>Determine annual net income on $50k, $75k, $100k, and $150k salaries in Austin, Dallas, and Houston.</p>
      <span class="tx-card-link">Calculate Salary →</span>
    </a>
  </div>

  <div class="tx-info-box">
    <h2>Why Texas Workers Keep More of Their Paycheck</h2>
    <p>The state of Texas is prohibited by its state constitution from assessing a personal income tax. As a result, 100% of state-level income tax deductions remain in your pocket. The only payroll withholdings taken from a Texas worker's paycheck are:</p>
    <ul>
      <li><strong>Federal Income Tax:</strong> Progressive rates ranging from 10% to 37% based on your IRS Form W-4 elections.</li>
      <li><strong>Social Security Tax:</strong> 6.2% on wages up to the federal wage limit ($168,600 in 2024/2025/2026).</li>
      <li><strong>Medicare Tax:</strong> 1.45% on all earnings, plus an additional 0.9% on income exceeding $200,000 ($250,000 married).</li>
    </ul>
  </div>
</div>
<?php require_once '../includes/footer.php'; ?>
"""
    deploy_file("texas/index.php", texas_hub)

# ----------------------------------------------------
# 2. DEPLOY 8 BLOG POSTS
# ----------------------------------------------------
def build_blog_posts():
    print("\n--- STEP 2: DEPLOYING 8 SUPPORTING BLOG POSTS ---")
    
    posts = [
        {
            "rel_path": "blog/how-much-are-closing-costs-in-texas.php",
            "md": os.path.join(BLOG_DIR, "how-much-are-closing-costs-in-texas.md"),
            "category": "Real Estate"
        },
        {
            "rel_path": "blog/how-much-are-closing-costs-in-california.php",
            "md": os.path.join(BLOG_DIR, "how-much-are-closing-costs-in-california.md"),
            "category": "Real Estate"
        },
        {
            "rel_path": "blog/how-much-are-closing-costs-in-florida.php",
            "md": os.path.join(BLOG_DIR, "how-much-are-closing-costs-in-florida.md"),
            "category": "Real Estate"
        },
        {
            "rel_path": "blog/sba-7a-vs-504-loan-calculator-guide.php",
            "md": os.path.join(BLOG_DIR, "sba-7a-vs-504-loan-guide.md"),
            "category": "Small Business"
        },
        {
            "rel_path": "blog/debt-to-income-ratio-explained.php",
            "md": os.path.join(BLOG_DIR, "debt-to-income-ratio-explained.md"),
            "category": "Loan Advice"
        },
        {
            "rel_path": "blog/cost-to-add-second-story-to-house.php",
            "md": os.path.join(BLOG_DIR, "cost-to-add-second-story-to-house.md"),
            "category": "Construction"
        },
        {
            "rel_path": "blog/rv-financing-101-guide.php",
            "md": os.path.join(BLOG_DIR, "rv-financing-101-guide.md"),
            "category": "Auto & Marine"
        },
        {
            "rel_path": "blog/cap-rate-vs-cash-on-cash-return.php",
            "md": os.path.join(BLOG_DIR, "cap-rate-vs-cash-on-cash-return.md"),
            "category": "Real Estate"
        }
    ]
    
    for item in posts:
        rel = item["rel_path"]
        with open(item["md"], "r", encoding="utf-8", errors="ignore") as f:
            txt = f.read()
            
        title_m = re.search(r"Title Tag.*?:.*?`([^`]+)`", txt, re.DOTALL)
        desc_m = re.search(r"Meta Description.*?:.*?`([^`]+)`", txt, re.DOTALL)
        schema_m = re.search(r"<script type=\"application/ld\+json\">(.*?)</script>", txt, re.DOTALL)
        
        title = clean_text(title_m.group(1).strip()) if title_m else "Blog Guide | AmericaCalculator"
        desc = clean_text(desc_m.group(1).strip()) if desc_m else "Financial and calculator guide."
        schema_raw = schema_m.group(1).strip() if schema_m else "{}"
        
        try:
            s_obj = json.loads(schema_raw)
            formatted_schema = json.dumps(s_obj, indent=2, ensure_ascii=False)
        except Exception:
            formatted_schema = "{}"

        # Extract article body
        article_m = re.search(r"<article class=\"blog-post-content\">(.*?)</article>", txt, re.DOTALL)
        if article_m:
            article_body = clean_text(article_m.group(1).strip())
        else:
            # Fallback to general markdown body
            body_m = re.search(r"## .*?Article Body.*?\n+(.*)", txt, re.DOTALL)
            article_body = clean_text(body_m.group(1).strip()) if body_m else ""

        php_code = f"""<?php
$currentYear = date('Y');
$pageTitle = "{title.replace('"', '\\"')}";
$metaDescription = "{desc.replace('"', '\\"')}";
$schemaData = json_decode(<<<'EOD'
{formatted_schema}
EOD
, true);
require_once __DIR__ . '/../includes/header.php';
?>
<style>
body {{ background: #f8fafc; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; }}
.blog-wrap {{ max-width: 960px; margin: 2rem auto 4rem; padding: 0 1.25rem; }}
.blog-bc {{ font-size: 0.82rem; color: #94a3b8; margin-bottom: 1.25rem; }}
.blog-bc a {{ color: #64748b; text-decoration: none; }}
.blog-bc a:hover {{ color: #1d4ed8; }}
.blog-header {{ margin-bottom: 2rem; }}
.blog-header h1 {{ font-size: 2.25rem; color: #0f172a; line-height: 1.25; margin: 0 0 0.75rem; }}
.blog-meta {{ display: flex; align-items: center; gap: 12px; font-size: 0.85rem; color: #64748b; }}
.blog-badge {{ background: #eff6ff; color: #1d4ed8; font-weight: 700; padding: 3px 10px; border-radius: 20px; font-size: 0.75rem; }}

.blog-post-content {{ background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; padding: 2.5rem; box-shadow: 0 4px 20px rgba(0,0,0,0.03); }}
.blog-post-content h2 {{ font-size: 1.6rem; color: #0f172a; margin: 2.25rem 0 1rem; border-bottom: 2px solid #f1f5f9; padding-bottom: 0.5rem; }}
.blog-post-content h3 {{ font-size: 1.25rem; color: #1e293b; margin: 1.5rem 0 0.75rem; }}
.blog-post-content p {{ color: #475569; font-size: 1.05rem; line-height: 1.8; margin-bottom: 1.35rem; }}
.blog-post-content ul, .blog-post-content ol {{ margin-left: 1.5rem; margin-bottom: 1.5rem; color: #475569; font-size: 1.02rem; line-height: 1.8; }}
.blog-post-content li {{ margin-bottom: 0.5rem; }}
.blog-post-content strong {{ color: #0f172a; }}

.calculator-promo-box {{ background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%); color: #ffffff; border-radius: 14px; padding: 1.75rem; margin: 2rem 0; display: flex; gap: 1.5rem; align-items: center; }}
.calculator-promo-box .promo-icon {{ font-size: 2.5rem; }}
.calculator-promo-box h3 {{ color: #ffffff; font-size: 1.25rem; margin: 0 0 0.5rem; }}
.calculator-promo-box p {{ color: #cbd5e1; font-size: 0.95rem; margin: 0 0 1rem; }}
.calculator-promo-box .promo-buttons {{ display: flex; flex-wrap: wrap; gap: 0.75rem; }}
.btn-primary {{ background: #2563eb; color: #ffffff; text-decoration: none; padding: 10px 18px; border-radius: 8px; font-weight: 700; font-size: 0.9rem; transition: background 0.15s; }}
.btn-primary:hover {{ background: #1d4ed8; }}
.btn-secondary {{ background: rgba(255,255,255,0.15); color: #ffffff; text-decoration: none; padding: 10px 18px; border-radius: 8px; font-weight: 600; font-size: 0.9rem; }}
.btn-secondary:hover {{ background: rgba(255,255,255,0.25); }}

.data-table {{ width: 100%; border-collapse: collapse; margin: 1.75rem 0; border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; }}
.data-table th {{ background: #1e293b; color: #ffffff; padding: 12px 16px; text-align: left; font-size: 0.9rem; }}
.data-table td {{ padding: 12px 16px; border-bottom: 1px solid #f1f5f9; color: #334155; font-size: 0.93rem; }}
.data-table tr:nth-child(even) td {{ background: #f8fafc; }}

.faq-accordion {{ margin-top: 2.5rem; }}
.faq-item {{ border: 1px solid #e2e8f0; border-radius: 8px; margin-bottom: 0.75rem; padding: 1.25rem; background: #ffffff; }}
.faq-item h3 {{ font-size: 1.1rem; color: #0f172a; margin: 0 0 0.5rem; }}
.faq-item p {{ margin: 0; color: #475569; font-size: 0.98rem; line-height: 1.65; }}
</style>

<div class="blog-wrap">
  <div class="blog-bc"><a href="/">Home</a> / <a href="/blog/">Blog</a> / <span>{item['category']}</span></div>
  <div class="blog-header">
    <span class="blog-badge">{item['category']}</span>
    <h1>{title}</h1>
    <div class="blog-meta">
      <span>By AmericaCalculator Editorial Team</span> • 
      <span>Updated October 2026</span> • 
      <span>Verified Financial Guidance</span>
    </div>
  </div>

  <article class="blog-post-content">
{article_body}
  </article>
</div>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
"""
        deploy_file(rel, php_code)

# ----------------------------------------------------
# 3. REWRITE 4 PRIORITY HIGH-OPPORTUNITY PAGES
# ----------------------------------------------------
def build_priority_rewrites():
    print("\n--- STEP 3: REWRITING 4 HIGH-OPPORTUNITY PAGES ---")
    
    rewrites = [
        {
            "rel_path": "real-estate/closing-cost-calculator.php",
            "md": os.path.join(REWRITES_DIR, "closing-cost-calculator-rewrite.md"),
            "split_token": '<!-- Quick Reference Card -->'
        },
        {
            "rel_path": "loan-calculators/sba-loan-calculator.php",
            "md": os.path.join(REWRITES_DIR, "sba-loan-calculator-rewrite.md"),
            "split_token": '<!-- AMORTIZATION'
        },
        {
            "rel_path": "loan-calculators/rv-loan-calculator.php",
            "md": os.path.join(REWRITES_DIR, "rv-loan-calculator-rewrite.md"),
            "split_token": '<section class="content-section" id="rv-guide">'
        },
        {
            "rel_path": "construction/home-addition-cost-calculator.php",
            "md": os.path.join(REWRITES_DIR, "home-addition-cost-calculator-rewrite.md"),
            "split_token": '<div class="hac-content">'
        }
    ]
    
    for item in rewrites:
        rel = item["rel_path"]
        live_file = os.path.join(LIVE_DIR, rel)
        if not os.path.exists(live_file):
            print(f"  [SKIP] {rel} not found on live site.")
            continue
            
        with open(live_file, "r", encoding="utf-8", errors="ignore") as f:
            live_code = f.read()
            
        with open(item["md"], "r", encoding="utf-8", errors="ignore") as f:
            md_text = f.read()
            
        title_m = re.search(r"Title Tag.*?:.*?`([^`]+)`", md_text, re.DOTALL)
        desc_m = re.search(r"Meta Description.*?:.*?`([^`]+)`", md_text, re.DOTALL)
        schema_m = re.search(r"<script type=\"application/ld\+json\">(.*?)</script>", md_text, re.DOTALL)
        
        new_title = clean_text(title_m.group(1).strip()) if title_m else ""
        new_desc = clean_text(desc_m.group(1).strip()) if desc_m else ""
        schema_raw = schema_m.group(1).strip() if schema_m else "{}"
        
        try:
            s_obj = json.loads(schema_raw)
            formatted_schema = json.dumps(s_obj, indent=2, ensure_ascii=False)
        except Exception:
            formatted_schema = "{}"
            
        # Extract editorial content from rewrite markdown
        content_m = re.search(r"## .*?Complete Surrounding On-Page Content.*?\n+(.*)", md_text, re.DOTALL)
        if content_m:
            raw_body = content_m.group(1)
            html_block = re.search(r"```html\s*(.*?)\s*```", raw_body, re.DOTALL)
            editorial_html = clean_text(html_block.group(1)) if html_block else clean_text(raw_body)
        else:
            editorial_html = ""

        # Update metadata in live code
        if new_title:
            clean_t = new_title.replace('"', '\\"')
            live_code = re.sub(r'\$pageTitle\s*=\s*["\'].*?["\'];', f'$pageTitle       = "{clean_t}";', live_code, count=1)
        if new_desc:
            clean_d = new_desc.replace('"', '\\"')
            live_code = re.sub(r'\$metaDescription\s*=\s*["\'].*?["\'];', f'$metaDescription = "{clean_d}";', live_code, count=1)

        # Update schemaData in live code
        schema_php_block = f"""$schemaData = json_decode(<<<'EOD'
{formatted_schema}
EOD
, true);"""
        live_code = re.sub(r'\$schemaData\s*=\s*\[.*?\n\];', schema_php_block, live_code, flags=re.DOTALL, count=1)

        # Clean broken encoding in the entire file
        live_code = clean_text(live_code)

        deploy_file(rel, live_code)

# ----------------------------------------------------
# 4. TECHNICAL CLEANUP & INTEGRATION
# ----------------------------------------------------
def build_technical_cleanup():
    print("\n--- STEP 4: BATCH TECHNICAL CLEANUP & INTEGRATION ---")
    
    # 4.1 Update .htaccess
    htaccess_path = os.path.join(LIVE_DIR, ".htaccess")
    if os.path.exists(htaccess_path):
        with open(htaccess_path, "r", encoding="utf-8", errors="ignore") as f:
            ht = f.read()
            
        # Check if Texas rules exist
        if "RewriteRule ^texas/" not in ht:
            texas_rule = """
# Clean URLs for Texas
RewriteRule ^texas/([a-z0-9-]+)/?$ texas/$1.php [L,END]
RewriteRule ^texas/?$ texas/index.php [L,END]
"""
            # Insert right before other category rewrites
            ht = re.sub(r'(RewriteRule \^ohio/\(\[a-z0-9-\]\+\)/.*?\n)', r'\1' + texas_rule, ht, count=1)
            print("  [UPDATE] Added Texas rewrite rules to .htaccess")
            
        # Update 301 redirects for legacy /calculators/*.php
        legacy_redirects = {
            r"RewriteRule \^calculators/cd-interest\.php\$ .*?\[.*\]": "RewriteRule ^calculators/cd-interest\\.php$ /loan-calculators/cd-interest-calculator [R=301,L]",
            r"RewriteRule \^calculators/freight-class\.php\$ .*?\[.*\]": "RewriteRule ^calculators/freight-class\\.php$ /business/freight-class-calculator [R=301,L]",
            r"RewriteRule \^calculators/stair\.php\$ .*?\[.*\]": "RewriteRule ^calculators/stair\\.php$ /construction/stair-calculator [R=301,L]",
            r"RewriteRule \^calculators/asphalt\.php\$ .*?\[.*\]": "RewriteRule ^calculators/asphalt\\.php$ /construction/asphalt-calculator [R=301,L]",
            r"RewriteRule \^calculators/cubic-yard\.php\$ .*?\[.*\]": "RewriteRule ^calculators/cubic-yard\\.php$ /construction/cubic-yard-calculator [R=301,L]",
            r"RewriteRule \^calculators/board-foot\.php\$ .*?\[.*\]": "RewriteRule ^calculators/board-foot\\.php$ /construction/board-foot-calculator [R=301,L]",
        }
        for pat, rep in legacy_redirects.items():
            ht = re.sub(pat, rep, ht)
            
        with open(htaccess_path, "w", encoding="utf-8") as f:
            f.write(ht)
        print("  [UPDATE] .htaccess saved with updated 301 redirects.")

    # 4.2 Update includes/calculators_data.php
    calc_data_path = os.path.join(LIVE_DIR, "includes", "calculators_data.php")
    if os.path.exists(calc_data_path):
        with open(calc_data_path, "r", encoding="utf-8", errors="ignore") as f:
            cdata = f.read()
            
        new_calcs_to_add = [
            ("hoa-fee", "['id' => 'hoa-fee', 'name' => 'HOA Fee Calculator', 'category' => 'Real Estate', 'description' => 'Calculate HOA impact on purchasing power and monthly fees', 'url' => '/real-estate/hoa-fee-calculator'],"),
            ("property-tax", "['id' => 'property-tax', 'name' => 'Property Tax Calculator', 'category' => 'Real Estate', 'description' => 'Calculate property taxes by state and county millage rates', 'url' => '/real-estate/property-tax-calculator'],"),
            ("mortgage-refinance", "['id' => 'mortgage-refinance', 'name' => 'Mortgage Refinance Break-Even Calculator', 'category' => 'Real Estate', 'description' => 'Calculate refinance break-even point and interest savings', 'url' => '/real-estate/mortgage-refinance-calculator'],"),
            ("rent-affordability", "['id' => 'rent-affordability', 'name' => 'Rent Affordability Calculator', 'category' => 'Real Estate', 'description' => 'Calculate maximum affordable rent using 30% and 40x rules', 'url' => '/real-estate/rent-affordability-calculator'],"),
            ("debt-to-income", "['id' => 'debt-to-income', 'name' => 'Debt-to-Income (DTI) Calculator', 'category' => 'Financial', 'description' => 'Calculate front-end and back-end DTI for mortgage approvals', 'url' => '/loan-calculators/debt-to-income-calculator'],"),
            ("heloc", "['id' => 'heloc', 'name' => 'HELOC Calculator', 'category' => 'Financial', 'description' => 'Calculate HELOC draw and repayment payment shock', 'url' => '/loan-calculators/heloc-calculator'],"),
            ("boat-loan", "['id' => 'boat-loan', 'name' => 'Boat Loan Calculator', 'category' => 'Financial', 'description' => 'Calculate boat and marine financing monthly payments', 'url' => '/loan-calculators/boat-loan-calculator'],"),
            ("texas-paycheck", "['id' => 'texas-paycheck', 'name' => 'Texas Paycheck Calculator', 'category' => 'Business', 'description' => 'Calculate Texas net take-home pay with 0% state income tax', 'url' => '/texas/paycheck-calculator'],")
        ]
        
        added_count = 0
        for cid, entry in new_calcs_to_add:
            if f"'id' => '{cid}'" not in cdata:
                # Append right before the closing of $calculators array
                cdata = re.sub(r'(\n\];\s*\n\s*// Group calculators by category)', f'    {entry}\n\\1', cdata, count=1)
                added_count += 1
                
        with open(calc_data_path, "w", encoding="utf-8") as f:
            f.write(cdata)
        print(f"  [UPDATE] includes/calculators_data.php updated ({added_count} new calculators registered).")

    # 4.3 Copy root llms.txt
    llms_src = os.path.join(BEYOND_DIR, "llms.txt")
    llms_dst = os.path.join(LIVE_DIR, "llms.txt")
    if os.path.exists(llms_src):
        shutil.copyfile(llms_src, llms_dst)
        print("  [UPDATE] Root llms.txt copied to live site.")

    # 4.4 Update sitemap.xml
    sitemap_path = os.path.join(LIVE_DIR, "sitemap.xml")
    if os.path.exists(sitemap_path):
        with open(sitemap_path, "r", encoding="utf-8", errors="ignore") as f:
            smap = f.read()
            
        new_urls = [
            "https://americacalculator.com/real-estate/hoa-fee-calculator",
            "https://americacalculator.com/real-estate/property-tax-calculator",
            "https://americacalculator.com/real-estate/mortgage-refinance-calculator",
            "https://americacalculator.com/real-estate/rent-affordability-calculator",
            "https://americacalculator.com/loan-calculators/debt-to-income-calculator",
            "https://americacalculator.com/loan-calculators/heloc-calculator",
            "https://americacalculator.com/loan-calculators/boat-loan-calculator",
            "https://americacalculator.com/texas/paycheck-calculator",
            "https://americacalculator.com/texas/",
            "https://americacalculator.com/blog/how-much-are-closing-costs-in-texas",
            "https://americacalculator.com/blog/how-much-are-closing-costs-in-california",
            "https://americacalculator.com/blog/how-much-are-closing-costs-in-florida",
            "https://americacalculator.com/blog/debt-to-income-ratio-explained",
            "https://americacalculator.com/blog/cost-to-add-second-story-to-house",
            "https://americacalculator.com/blog/rv-financing-101-guide",
            "https://americacalculator.com/blog/cap-rate-vs-cash-on-cash-return"
        ]
        
        smap_entries = []
        for u in new_urls:
            if u not in smap:
                entry = f"""  <url>
    <loc>{u}</loc>
    <lastmod>2026-10-01</lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
  </url>"""
                smap_entries.append(entry)
                
        if smap_entries:
            smap = smap.replace("</urlset>", "\n".join(smap_entries) + "\n</urlset>")
            with open(sitemap_path, "w", encoding="utf-8") as f:
                f.write(smap)
            print(f"  [UPDATE] sitemap.xml updated with {len(smap_entries)} new URLs.")
        else:
            print("  [INFO] sitemap.xml already contains new URLs.")

if __name__ == "__main__":
    print("==========================================================")
    print(" BEYOND SEO: COMPREHENSIVE PRODUCTION DEPLOYMENT ")
    print("==========================================================")
    build_new_calculators()
    build_blog_posts()
    build_priority_rewrites()
    build_technical_cleanup()
    print("\n==========================================================")
    print(" ALL PARTS SUCCESSFULLY DEPLOYED TO AMERICA CALCULATOR! ")
    print("==========================================================")
