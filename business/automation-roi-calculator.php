<?php
$currentYear = date('Y');
$pageTitle       = "Automation ROI Calculator ($currentYear) | Software & RPA";
$metaDescription = "Automation ROI Calculator 2026 USA — calculate ROI on RPA, AI tools, workflow software, and business process automation. Includes labor savings, error reduction, and payback period. Free.";
$metaKeywords    = 'automation roi calculator, rpa roi calculator, software roi calculator, business automation roi, workflow automation roi, it automation roi, ai roi calculator, how to calculate automation roi';
$schemaData=['@context'=>'https://schema.org','@graph'=>[
  ['@type'=>'HowTo','name'=>'How to Calculate Business Process Automation ROI','step'=>[
    ['@type'=>'HowToStep','name'=>'Enter manual labor hours per week','text'=>'Input the total staff hours currently spent on the manual repetitive workflow.'],
    ['@type'=>'HowToStep','name'=>'Input fully loaded employee hourly wage','text'=>'Enter employee hourly salary including benefits, taxes, and overhead.'],
    ['@type'=>'HowToStep','name'=>'Enter software and implementation cost','text'=>'Input software subscription fees, upfront development, setup, and integration costs.'],
    ['@type'=>'HowToStep','name'=>'Estimate automation efficiency gains','text'=>'Specify the percentage reduction in manual labor hours achieved by the automated system.'],
    ['@type'=>'HowToStep','name'=>'Calculate annual cost savings and payback period','text'=>'See net annual savings, total ROI percentage, and months required to break even on the investment.']
  ]],
  ['@type'=>'BreadcrumbList','itemListElement'=>[
    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>'https://americacalculator.com/'],
    ['@type'=>'ListItem','position'=>2,'name'=>'Business','item'=>'https://americacalculator.com/business/'],
    ['@type'=>'ListItem','position'=>3,'name'=>'ROI Calculator','item'=>'https://americacalculator.com/business/roi-calculator'],
    ['@type'=>'ListItem','position'=>4,'name'=>'Automation ROI Calculator','item'=>'https://americacalculator.com/business/automation-roi-calculator'],
  ]],
  ['@type'=>'SoftwareApplication','name'=>'Automation ROI Calculator 2026','applicationCategory'=>'BusinessApplication','operatingSystem'=>'All','url'=>'https://americacalculator.com/business/automation-roi-calculator','offers'=>['@type'=>'Offer','price'=>'0','priceCurrency'=>'USD']],
  ['@type'=>'FAQPage','mainEntity'=>[
    ['@type'=>'Question','name'=>'How do you calculate automation ROI?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Automation ROI = ((Annual Benefits − Annual Costs) / Total Implementation Cost) × 100. Annual benefits = labor hours saved × hourly rate + error reduction savings + throughput increase value. Implementation cost = software licenses + integration + training + ongoing maintenance.']],
    ['@type'=>'Question','name'=>'What is a good ROI for business automation?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Most RPA and business automation implementations deliver 100–400% ROI over 3 years. Typical payback period is 6–18 months. AI-powered automation can deliver even higher ROI for repetitive high-volume processes. A minimum 3:1 return (300% ROI) over 3 years is a common benchmark for automation approval.']],
    ['@type'=>'Question','name'=>'What costs should I include in automation ROI?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Include: software licensing (annual or one-time), implementation and integration fees, employee training time, change management, ongoing IT support, and any process redesign costs. Exclude sunk costs already spent. The most common mistake is underestimating integration complexity.']],
    ['@type'=>'Question','name'=>'How do you calculate RPA ROI?','acceptedAnswer'=>['@type'=>'Answer','text'=>'RPA ROI = ((FTE Savings + Error Reduction Savings + Throughput Increase) − Total RPA Cost) / Total RPA Cost × 100. FTE savings = hours automated per year × loaded hourly rate. Error reduction = average cost per error × errors eliminated annually. Most RPA projects achieve payback in 6–12 months.']],
  ]],
]];
require_once '../includes/header.php';
require_once '../includes/helpers.php';
?>
<style>
body{background:#f5f7fa;}
.sec-wrap{max-width:1100px;margin:0 auto;padding:2rem 1.25rem 4rem;}
.sec-bc{font-size:.79rem;color:#94a3b8;margin-bottom:.75rem;}.sec-bc a{color:#64748b;text-decoration:none;}
.sec-hero h1{font-size:1.9rem;color:#0f172a;margin:0 0 .45rem;line-height:1.25;}
.sec-hero p{font-size:.96rem;color:#64748b;line-height:1.68;margin:0 0 1.5rem;border-left:3px solid #7c3aed;padding-left:.9rem;}
.sec-layout{display:grid;grid-template-columns:1fr 310px;gap:2rem;align-items:start;margin-bottom:2rem;}
.sec-card{background:#fff;border-radius:13px;border:1px solid #e2e8f0;box-shadow:0 3px 14px rgba(0,0,0,.06);overflow:hidden;}
.sec-card-head{background:linear-gradient(135deg,#7c3aed,#6d28d9);color:#fff;padding:1rem 1.5rem;font-size:1rem;font-weight:700;}
.sec-body{padding:1.5rem;}
.sf{margin-bottom:.9rem;}.sf label{display:block;font-size:.84rem;font-weight:600;color:#1e293b;margin-bottom:.32rem;}
.sf input{width:100%;padding:10px 13px;border:1.5px solid #e2e8f0;border-radius:7px;font-size:.92rem;color:#0f172a;outline:none;box-sizing:border-box;transition:border-color .2s;}
.sf input:focus{border-color:#7c3aed;}.sf .hint{font-size:.72rem;color:#94a3b8;margin-top:.22rem;}
.sf2{display:grid;grid-template-columns:1fr 1fr;gap:.8rem;}
.sf-lbl{font-size:.7rem;font-weight:800;text-transform:uppercase;letter-spacing:.06em;color:#94a3b8;margin:1.1rem 0 .6rem;padding-bottom:.3rem;border-bottom:1px solid #f1f5f9;}
.sf-lbl:first-child{margin-top:0;}
.sec-btn{width:100%;background:linear-gradient(135deg,#7c3aed,#6d28d9);color:#fff;padding:12px;border:none;border-radius:8px;font-size:.95rem;font-weight:700;cursor:pointer;margin-top:.5rem;}
.sec-btn:hover{opacity:.9;}
.sec-result{background:#f5f3ff;border:1.5px solid #ddd6fe;border-radius:10px;padding:1.2rem;margin-top:1.2rem;}
.sr-primary{background:linear-gradient(135deg,#7c3aed,#6d28d9);border-radius:9px;padding:1.1rem;text-align:center;margin-bottom:.75rem;box-shadow:0 3px 12px rgba(124,58,237,.22);}
.sr-primary .pv{display:block;font-size:2.3rem;font-weight:900;color:#fff;line-height:1;}
.sr-primary .pl{font-size:.8rem;color:rgba(255,255,255,.85);}
.sr-grid{display:grid;grid-template-columns:1fr 1fr;gap:.55rem;margin-bottom:.75rem;}
.sr-box{background:#fff;border:1.5px solid #ddd6fe;border-radius:8px;padding:.7rem;text-align:center;}
.sr-box .bv{display:block;font-size:1rem;font-weight:800;color:#7c3aed;}.sr-box .bl{font-size:.68rem;color:#64748b;font-weight:600;}
.sr-lines{background:#fff;border:1px solid #ddd6fe;border-radius:8px;padding:.75rem 1rem;}
.sr-line{display:flex;justify-content:space-between;padding:.28rem 0;border-bottom:1px solid #f5f3ff;font-size:.83rem;}
.sr-line:last-child{border-bottom:none;font-weight:700;}
.sr-line .ll{color:#64748b;}.sr-line .lv{font-weight:600;color:#1e293b;}
.sr-line .lv.pos{color:#16a34a;}.sr-line .lv.neg{color:#dc2626;}
.sec-sidebar{display:flex;flex-direction:column;gap:1.1rem;}
.sec-widget{background:#fff;border-radius:12px;border:1px solid #e2e8f0;box-shadow:0 2px 8px rgba(0,0,0,.04);overflow:hidden;}
.sec-widget-head{background:linear-gradient(135deg,#7c3aed,#6d28d9);color:#fff;padding:.85rem 1.2rem;font-size:.88rem;font-weight:700;}
.sec-widget-head small{display:block;font-size:.72rem;opacity:.8;margin-top:.1rem;}
.sec-widget-rows{padding:.3rem 0;}
.sec-widget-row{display:flex;justify-content:space-between;padding:.5rem 1.2rem;border-bottom:1px solid #f8fafc;}
.sec-widget-row:last-child{border-bottom:none;}
.swl{font-size:.81rem;font-weight:600;color:#334155;}.sws{font-size:.69rem;color:#94a3b8;}.swv{font-size:.88rem;font-weight:800;color:#7c3aed;white-space:nowrap;}
.sec-links{background:#fff;border-radius:12px;border:1px solid #e2e8f0;overflow:hidden;}
.sec-links-head{padding:.75rem 1.2rem;background:#f8fafc;border-bottom:1px solid #f1f5f9;font-size:.75rem;font-weight:700;color:#7c3aed;text-transform:uppercase;letter-spacing:.05em;}
.sec-links ul{list-style:none;padding:.4rem 0;margin:0;}
.sec-links ul li a{display:block;padding:.55rem 1.2rem;font-size:.82rem;color:#475569;text-decoration:none;border-left:3px solid transparent;transition:all .15s;}
.sec-links ul li a:hover,.sec-links ul li a.active{color:#7c3aed;background:#f5f3ff;border-left-color:#7c3aed;}
.sec-section{background:#fff;border-radius:13px;border:1px solid #e2e8f0;padding:1.75rem;margin-bottom:1.5rem;}
.sec-section h2{font-size:1.35rem;color:#0f172a;margin:0 0 .9rem;padding-bottom:.65rem;border-bottom:2px solid #f5f3ff;}
.sec-section h3{font-size:1rem;color:#1e293b;margin:1.25rem 0 .5rem;}
.sec-section p{color:#475569;line-height:1.73;font-size:.95rem;margin-bottom:.9rem;}
.sec-section p:last-child{margin-bottom:0;}.sec-section a{color:#7c3aed;font-weight:600;}.sec-section strong{color:#1e293b;}
.sec-section ul{color:#475569;padding-left:1.35rem;line-height:1.73;font-size:.95rem;margin-bottom:.9rem;}
.sec-section li{margin-bottom:.4rem;}
.sec-table{width:100%;border-collapse:collapse;border-radius:9px;overflow:hidden;border:1px solid #e2e8f0;margin-bottom:1.1rem;}
.sec-table th{background:#7c3aed;color:#fff;padding:9px 13px;font-size:.83rem;font-weight:600;text-align:left;}
.sec-table td{padding:8px 13px;border-bottom:1px solid #f1f5f9;font-size:.86rem;color:#334155;}
.sec-table tr:last-child td{border-bottom:none;}.sec-table tr:nth-child(even) td{background:#f8fafc;}
.sec-faq-item{border-bottom:1px solid #f1f5f9;padding:.75rem 0;}
.sec-faq-item:last-child{border-bottom:none;padding-bottom:0;}
.sec-faq-q{font-size:.93rem;font-weight:700;color:#0f172a;cursor:pointer;display:flex;justify-content:space-between;gap:.75rem;}
.sec-faq-q::after{content:'+';color:#7c3aed;font-size:1.2rem;flex-shrink:0;}
.sec-faq-item.open .sec-faq-q::after{content:'−';}
.sec-faq-a{display:none;color:#475569;font-size:.89rem;line-height:1.66;padding-top:.45rem;}
.sec-faq-item.open .sec-faq-a{display:block;}
@media(max-width:900px){.sec-layout{grid-template-columns:1fr;}.sec-sidebar{display:grid;grid-template-columns:1fr 1fr;}}
@media(max-width:580px){.sf2{grid-template-columns:1fr;}.sec-sidebar{grid-template-columns:1fr;}.sec-hero h1{font-size:1.55rem;}}
</style>
<main id="main-content">
<div class="sec-wrap">
  <div class="sec-bc"><a href="/">Home</a> › <a href="/business/">Business</a> › <a href="/business/roi-calculator">ROI Calculator</a> › Automation ROI Calculator</div>
  <div class="sec-hero">
    <h1>Automation ROI Calculator 2026 USA — RPA, AI &amp; Software Return on Investment</h1>
    <p>Automation ROI Calculator 2026 USA: calculate the return on investment for RPA, AI tools, workflow automation, and business process software. Include labor savings, error reduction, and throughput gains to justify any automation investment.</p>
  </div>
  <div class="sec-layout">
    <div>
      <div class="sec-card">
        <div class="sec-card-head">🤖 Automation &amp; Software ROI Calculator</div>
        <div class="sec-body">
          <div class="sf-lbl">Implementation Costs</div>
          <div class="sf2">
            <div class="sf"><label>Software / License Cost ($)</label><input type="number" id="au-sw" value="25000" min="0" step="500"></div>
            <div class="sf"><label>Implementation &amp; Integration ($)</label><input type="number" id="au-impl" value="15000" min="0" step="500"></div>
          </div>
          <div class="sf2">
            <div class="sf"><label>Training Cost ($)</label><input type="number" id="au-train" value="3000" min="0" step="500"></div>
            <div class="sf"><label>Annual Maintenance ($)</label><input type="number" id="au-maint" value="4000" min="0" step="500"><div class="hint">Ongoing support &amp; updates/yr</div></div>
          </div>
          <div class="sf-lbl">Annual Benefits</div>
          <div class="sf2">
            <div class="sf"><label>Hours Saved per Year</label><input type="number" id="au-hrs" value="1200" min="0" step="50"></div>
            <div class="sf"><label>Average Hourly Labor Rate ($)</label><input type="number" id="au-rate" value="32" min="0" step="1"><div class="hint">Loaded rate incl. benefits</div></div>
          </div>
          <div class="sf2">
            <div class="sf"><label>Annual Error Reduction Savings ($)</label><input type="number" id="au-err" value="5000" min="0" step="500"></div>
            <div class="sf"><label>Annual Revenue Increase ($)</label><input type="number" id="au-rev" value="0" min="0" step="1000"><div class="hint">Throughput / faster processing</div></div>
          </div>
          <div class="sf"><label>Evaluation Period (Years)</label><input type="number" id="au-yrs" value="3" min="1" max="10" step="1"></div>
          <button class="sec-btn" onclick="calcAuto()">⚡ Calculate Automation ROI</button>
          <div class="sec-result" id="auto-result" style="display:none;">
            <div class="sr-primary"><span class="pv" id="au-roi">0%</span><span class="pl" id="au-roi-lbl">3-Year Automation ROI</span></div>
            <div class="sr-grid">
              <div class="sr-box"><span class="bv" id="au-payback">0 mo</span><span class="bl">Payback Period</span></div>
              <div class="sr-box"><span class="bv" id="au-ann">0%</span><span class="bl">Annualized ROI</span></div>
              <div class="sr-box"><span class="bv" id="au-labor">$0</span><span class="bl">Annual Labor Savings</span></div>
              <div class="sr-box"><span class="bv" id="au-npv">$0</span><span class="bl">Net Profit Over Period</span></div>
            </div>
            <div class="sr-lines">
              <div class="sr-line"><span class="ll">Total Implementation Cost</span><span class="lv" id="aul-impl">—</span></div>
              <div class="sr-line"><span class="ll">Annual Maintenance</span><span class="lv neg" id="aul-maint">—</span></div>
              <div class="sr-line"><span class="ll">Annual Labor Savings</span><span class="lv pos" id="aul-labor">—</span></div>
              <div class="sr-line"><span class="ll">Annual Error + Revenue Benefits</span><span class="lv pos" id="aul-other">—</span></div>
              <div class="sr-line"><span class="ll">Total Benefits Over Period</span><span class="lv pos" id="aul-total-ben">—</span></div>
              <div class="sr-line"><span class="ll">Net Profit</span><span class="lv pos" id="aul-net">—</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="sec-section" style="margin-top:1.5rem;">
        <h2>Automation ROI Benchmarks 2026</h2>
        <table class="sec-table">
          <thead><tr><th>Automation Type</th><th>Typical ROI</th><th>Payback Period</th><th>Best Use Cases</th></tr></thead>
          <tbody>
            <tr><td>RPA (Robotic Process Automation)</td><td>100–300%</td><td>6–18 months</td><td>Data entry, invoice processing, HR onboarding</td></tr>
            <tr><td>AI / Machine Learning Tools</td><td>150–500%</td><td>12–24 months</td><td>Customer service, fraud detection, forecasting</td></tr>
            <tr><td>CRM Automation</td><td>200–400%</td><td>6–12 months</td><td>Lead scoring, follow-up sequences, reporting</td></tr>
            <tr><td>Accounting / ERP Automation</td><td>100–250%</td><td>12–18 months</td><td>Accounts payable, payroll, financial close</td></tr>
            <tr><td>Marketing Automation</td><td>400%+</td><td>3–6 months</td><td>Email campaigns, lead nurturing, social scheduling</td></tr>
          </tbody>
        </table>
        <h3>How to Build an Automation ROI Business Case</h3>
        <p>A compelling business case for automation includes three categories of return: (1) <strong>direct labor savings</strong> — hours saved multiplied by loaded labor rate, (2) <strong>error reduction savings</strong> — fewer costly mistakes and rework hours, and (3) <strong>capacity expansion</strong> — handling more transaction volume without adding headcount. Together these three pillars reliably deliver 200%+ ROI across most business processes.</p>
      </div>

      <div class="sec-section">
        <h2>Enterprise Automation Evaluation Framework</h2>
        <p>Modern enterprise business architecture scores automation suitability across four dimensions before committing capital expenditure:</p>
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin:1rem 0;">
          <div style="background:#f8fafc;padding:1rem;border-radius:8px;border:1px solid #e2e8f0;">
            <strong style="color:#0f172a;display:block;margin-bottom:0.25rem;">1. Transaction Volume &amp; Repetitiveness</strong>
            <span style="font-size:0.88rem;color:#475569;line-height:1.5;display:block;">Processes requiring at least 500 annual hours of predictable, rule-based keystroke manipulation across stable software applications.</span>
          </div>
          <div style="background:#f8fafc;padding:1rem;border-radius:8px;border:1px solid #e2e8f0;">
            <strong style="color:#0f172a;display:block;margin-bottom:0.25rem;">2. Human Error Downstream Cost</strong>
            <span style="font-size:0.88rem;color:#475569;line-height:1.5;display:block;">Quantifying customer refund rates, regulatory penalty exposure, and internal accounting audit overhead caused by manual typos.</span>
          </div>
          <div style="background:#f8fafc;padding:1rem;border-radius:8px;border:1px solid #e2e8f0;">
            <strong style="color:#0f172a;display:block;margin-bottom:0.25rem;">3. Cycle Time &amp; Customer SLA</strong>
            <span style="font-size:0.88rem;color:#475569;line-height:1.5;display:block;">Compressing multi-day turnaround intervals (loan approvals, claims ingestion) into automated sub-minute processing pipelines.</span>
          </div>
          <div style="background:#f8fafc;padding:1rem;border-radius:8px;border:1px solid #e2e8f0;">
            <strong style="color:#0f172a;display:block;margin-bottom:0.25rem;">4. Employee Burnout &amp; Retention</strong>
            <span style="font-size:0.88rem;color:#475569;line-height:1.5;display:block;">Eliminating soul-crushing 'swivel-chair' data entry, redirecting skilled knowledge workers toward strategic client relationships.</span>
          </div>
        </div>

        <h3>Attended vs Unattended Automation Architecture</h3>
        <p>Choosing the correct bot orchestration mode impacts Year 1 licensing and server hosting overhead:</p>
        <ul style="color:#334155;line-height:1.7;margin-left:1.25rem;">
          <li><strong>Attended Bots:</strong> Run co-pilot style on employee workstations, triggered on-demand to assist call center or helpdesk representatives. Lower initial setup cost, but tied directly to employee desktop uptime.</li>
          <li><strong>Unattended Bots:</strong> Run 24/7/365 in dedicated cloud virtual machines, executing batch back-office queues without human intervention. Higher upfront orchestration infrastructure, but delivers 3× to 5× higher operational utilization.</li>
        </ul>
      </div>

      <div class="sec-section">
        <h2>Frequently Asked Questions</h2>
        <?php $faqs=[
          ['How do you calculate automation ROI?','Automation ROI = ((Annual Benefits − Annual Costs) / Total Implementation Cost) × 100. Annual benefits = labor hours saved × hourly rate + error reduction savings + throughput increase value. Implementation cost = software licenses + integration + training + ongoing maintenance.'],
          ['What is a good ROI for business automation?','100–300% over 3 years is standard. Marketing automation often hits 400%+. A payback period of 6–18 months is typical. Any automation project with payback under 12 months is an easy business case approval.'],
          ['What costs should I include in automation ROI?','Software licenses, implementation and integration fees, employee training time (loaded hourly rate × hours), change management, and ongoing annual maintenance and IT support costs.'],
          ['How do you calculate RPA ROI?','RPA ROI = (FTE Savings + Error Savings + Throughput Gains − Total RPA Cost) / Total RPA Cost × 100. FTE savings = hours automated annually × loaded hourly rate. Most RPA projects automate 500–2,000 hours per bot per year.'],
          ['What is the typical lifespan of an automation script before requiring maintenance?','RPA bots interacting with web DOM elements or third-party desktop UIs typically require 2 to 4 hours of maintenance per quarter to adapt to vendor software updates, API deprecations, or security patches. API-to-API webhooks and headless microservices have far longer stability spans.'],
          ['How do you calculate loaded employee labor rate for automation models?','Loaded labor rate = (Base Salary + Payroll Taxes + Health Benefits + Retirement Match + Office Overhead) / Annual Working Hours (typically 2,080 hours). In the United States, loaded labor rates are usually 1.28× to 1.45× nominal base hourly wages.'],
        ]; foreach($faqs as $f):?>
        <div class="sec-faq-item"><div class="sec-faq-q"><?php echo $f[0];?></div><div class="sec-faq-a"><?php echo $f[1];?></div></div>
        <?php endforeach;?>
      </div>
    </div>
    <div class="sec-sidebar">
      <div class="sec-widget">
        <div class="sec-widget-head">🤖 Automation ROI Benchmarks<small>2026 USA averages</small></div>
        <div class="sec-widget-rows">
          <div class="sec-widget-row"><div><div class="swl">RPA Projects</div><div class="sws">3-year avg ROI</div></div><div class="swv">100–300%</div></div>
          <div class="sec-widget-row"><div><div class="swl">AI/ML Tools</div><div class="sws">3-year avg ROI</div></div><div class="swv">150–500%</div></div>
          <div class="sec-widget-row"><div><div class="swl">Marketing Automation</div><div class="sws">Avg ROI</div></div><div class="swv">400%+</div></div>
          <div class="sec-widget-row"><div><div class="swl">Typical Payback</div><div class="sws">Most automation projects</div></div><div class="swv">6–18 mo</div></div>
          <div class="sec-widget-row"><div><div class="swl">RPA Hours Saved</div><div class="sws">Per bot per year</div></div><div class="swv">500–2K</div></div>
          <div class="sec-widget-row"><div><div class="swl">Min ROI Threshold</div><div class="sws">Typical business approval</div></div><div class="swv">3:1</div></div>
        </div>
      </div>
      <div class="sec-links">
        <div class="sec-links-head">🔗 Related Tools</div>
        <ul>
          <li><a href="/business/roi-calculator">📊 Full ROI Calculator</a></li>
          <li><a href="/business/automation-roi-calculator" class="active">🤖 Automation ROI</a></li>
          <li><a href="/business/project-roi-calculator">🔧 Project ROI</a></li>
          <li><a href="/business/marketing-roi-calculator">📣 Marketing ROI</a></li>
          <li><a href="/business/profit-margin-calculator">📈 Profit Margin</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</main>
<script>
function fmtC(v){return (v<0?'−':'')+'$'+Math.round(Math.abs(v)).toLocaleString();}
function fmtP(v){return Math.abs(v).toFixed(1)+'%';}
function calcAuto(){
  var sw=parseFloat(document.getElementById('au-sw').value)||0;
  var impl=parseFloat(document.getElementById('au-impl').value)||0;
  var train=parseFloat(document.getElementById('au-train').value)||0;
  var maint=parseFloat(document.getElementById('au-maint').value)||0;
  var hrs=parseFloat(document.getElementById('au-hrs').value)||0;
  var rate=parseFloat(document.getElementById('au-rate').value)||0;
  var err=parseFloat(document.getElementById('au-err').value)||0;
  var rev=parseFloat(document.getElementById('au-rev').value)||0;
  var yrs=parseInt(document.getElementById('au-yrs').value)||3;
  var implCost=sw+impl+train;
  var annMaint=maint;
  var annLabor=hrs*rate;
  var annOther=err+rev;
  var annBen=annLabor+annOther;
  var totalCost=implCost+(annMaint*yrs);
  var totalBen=annBen*yrs;
  var net=totalBen-totalCost;
  var roi=implCost>0?(net/implCost)*100:0;
  var ann=yrs>0?(Math.pow(1+roi/100,1/yrs)-1)*100:roi;
  var paybackMo=annBen>0?((implCost/annBen)*12):0;
  document.getElementById('au-roi').textContent=fmtP(roi);
  document.getElementById('au-roi-lbl').textContent=yrs+'-Year Automation ROI';
  document.getElementById('au-payback').textContent=paybackMo.toFixed(1)+' mo';
  document.getElementById('au-ann').textContent=fmtP(ann);
  document.getElementById('au-labor').textContent=fmtC(annLabor);
  document.getElementById('au-npv').textContent=fmtC(net);
  document.getElementById('aul-impl').textContent=fmtC(implCost);
  document.getElementById('aul-maint').textContent='−'+fmtC(annMaint*yrs);
  document.getElementById('aul-labor').textContent=fmtC(annLabor);
  document.getElementById('aul-other').textContent=fmtC(annOther);
  document.getElementById('aul-total-ben').textContent=fmtC(totalBen);
  document.getElementById('aul-net').textContent=fmtC(net);
  document.getElementById('auto-result').style.display='block';
}
document.querySelectorAll('#au-sw,#au-impl,#au-train,#au-maint,#au-hrs,#au-rate,#au-err,#au-rev,#au-yrs').forEach(function(el){el.addEventListener('input',calcAuto);});
calcAuto();
document.querySelectorAll('.sec-faq-q').forEach(function(q){q.addEventListener('click',function(){var i=this.closest('.sec-faq-item'),w=i.classList.contains('open');document.querySelectorAll('.sec-faq-item').forEach(function(x){x.classList.remove('open');});if(!w)i.classList.add('open');});});
</script>
<?php require_once '../includes/footer.php'; ?>

