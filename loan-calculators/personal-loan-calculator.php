<?php
// ─── SEO Meta ───────────────────────────────────────────────────────────────
$pageTitle       = 'Personal Loan Calculator (2026) “ Payment, Interest & Debt Consolidation';
$metaDescription = 'Calculate personal loan payments instantly. Free 2026 personal loan calculator with debt consolidation mode — see monthly savings vs. your current bills.';
$metaKeywords    = 'personal loan calculator, personal loan payment calculator 2026, debt consolidation calculator, personal loan interest calculator, origination fee calculator';

// ─── Calculation Logic ───────────────────────────────────────────────────────
$mode         = 'simple';
$result       = null;
$result_dc    = null;
$errors       = [];

// Defaults
$sv = [  // simple values
    'loan_amount'    => '',
    'apr'            => '',
    'loan_term_mo'   => '36',
    'origination_fee'=> '0',
];
$dv = [  // debt-consolidation values
    'dc_bal1' => '', 'dc_pmt1' => '',
    'dc_bal2' => '', 'dc_pmt2' => '',
    'dc_bal3' => '', 'dc_pmt3' => '',
    'dc_bal4' => '', 'dc_pmt4' => '',
    'dc_apr'  => '', 'dc_term' => '36', 'dc_fee'  => '0',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mode = isset($_POST['mode']) && $_POST['mode'] === 'consolidation' ? 'consolidation' : 'simple';

    foreach ($sv as $k => $_) { $sv[$k] = $_POST[$k] ?? $sv[$k]; }
    foreach ($dv as $k => $_) { $dv[$k] = $_POST[$k] ?? $dv[$k]; }

    // ── SIMPLE MODE ──────────────────────────────────────────────────────────
    if ($mode === 'simple') {
        $loan_amount    = floatval($sv['loan_amount']);
        $apr            = floatval($sv['apr']);
        $n              = intval($sv['loan_term_mo']);
        $orig_fee_pct   = floatval($sv['origination_fee']);

        if ($loan_amount <= 0)                         $errors[] = 'Loan amount must be greater than $0.';
        if ($apr < 0 || $apr > 100)                   $errors[] = 'APR must be between 0% and 100%.';
        if ($n <= 0 || $n > 84)                       $errors[] = 'Loan term must be between 1 and 84 months.';
        if ($orig_fee_pct < 0 || $orig_fee_pct > 12)  $errors[] = 'Origination fee must be between 0% and 12%.';

        if (empty($errors)) {
            $r = ($apr / 100) / 12;
            if ($r > 0) {
                $monthly = $loan_amount * ($r * pow(1 + $r, $n)) / (pow(1 + $r, $n) - 1);
            } else {
                $monthly = $loan_amount / $n;
            }

            $total_paid    = round($monthly * $n, 2);
            $total_interest= round($total_paid - $loan_amount, 2);
            $orig_fee_amt  = round($loan_amount * ($orig_fee_pct / 100), 2);
            $disbursed     = round($loan_amount - $orig_fee_amt, 2);

            // Effective APR when origination fee is deducted from disbursement
            // Solve: disbursed = monthly * [1 - (1+r_eff)^-n] / r_eff  using Newton approximation
            $eff_apr = $apr;
            if ($orig_fee_amt > 0 && $disbursed > 0) {
                $r_eff = $r;
                for ($i = 0; $i < 100; $i++) {
                    if ($r_eff <= 0) break;
                    $f  = $monthly * (1 - pow(1 + $r_eff, -$n)) / $r_eff - $disbursed;
                    $df = $monthly * (
                        (pow(1 + $r_eff, -$n) * $n / $r_eff) -
                        (1 - pow(1 + $r_eff, -$n)) / ($r_eff * $r_eff)
                    );
                    $r_new = $r_eff - $f / $df;
                    if (abs($r_new - $r_eff) < 1e-9) { $r_eff = $r_new; break; }
                    $r_eff = $r_new;
                }
                $eff_apr = round($r_eff * 12 * 100, 2);
            }

            // Interest-to-loan ratio %
            $interest_ratio = $loan_amount > 0 ? round(($total_interest / $loan_amount) * 100, 1) : 0;

            $result = [
                'loan_amount'    => number_format($loan_amount,     2),
                'monthly'        => number_format($monthly,         2),
                'total_interest' => number_format($total_interest,  2),
                'total_paid'     => number_format($total_paid,      2),
                'orig_fee_amt'   => number_format($orig_fee_amt,    2),
                'disbursed'      => number_format($disbursed,       2),
                'eff_apr'        => $eff_apr,
                'stated_apr'     => $apr,
                'has_fee'        => $orig_fee_pct > 0,
                'n'              => $n,
                'interest_ratio' => $interest_ratio,
            ];
        }
    }

    // ── DEBT CONSOLIDATION MODE ───────────────────────────────────────────────
    if ($mode === 'consolidation') {
        $debts = [];
        for ($i = 1; $i <= 4; $i++) {
            $bal = floatval($dv["dc_bal$i"]);
            $pmt = floatval($dv["dc_pmt$i"]);
            if ($bal > 0 && $pmt > 0) {
                $debts[] = ['balance' => $bal, 'payment' => $pmt];
            }
        }

        $dc_apr  = floatval($dv['dc_apr']);
        $dc_term = intval($dv['dc_term']);
        $dc_fee  = floatval($dv['dc_fee']);

        if (empty($debts))              $errors[] = 'Enter at least one existing debt (balance + payment).';
        if ($dc_apr < 0 || $dc_apr > 100) $errors[] = 'Consolidation APR must be between 0% and 100%.';
        if ($dc_term <= 0 || $dc_term > 84) $errors[] = 'Consolidation term must be 1–84 months.';
        if ($dc_fee < 0 || $dc_fee > 12)   $errors[] = 'Origination fee must be 0%–12%.';

        if (empty($errors)) {
            $current_monthly  = array_sum(array_column($debts, 'payment'));
            $total_balance    = array_sum(array_column($debts, 'balance'));

            // Consolidation loan = sum of balances
            $cons_amount  = $total_balance;
            $orig_fee_amt = round($cons_amount * ($dc_fee / 100), 2);
            $r   = ($dc_apr / 100) / 12;
            $n   = $dc_term;

            if ($r > 0) {
                $new_monthly = $cons_amount * ($r * pow(1 + $r, $n)) / (pow(1 + $r, $n) - 1);
            } else {
                $new_monthly = $cons_amount / $n;
            }

            $new_total_paid     = round($new_monthly * $n, 2);
            $new_total_interest = round($new_total_paid - $cons_amount, 2);
            $monthly_savings    = round($current_monthly - $new_monthly, 2);

            // Break-even (months to recoup origination fee through savings)
            $break_even = null;
            if ($orig_fee_amt > 0 && $monthly_savings > 0) {
                $break_even = (int)ceil($orig_fee_amt / $monthly_savings);
            }

            // Verdict
            if ($monthly_savings > 10) {
                $verdict = 'good';
            } elseif ($monthly_savings >= -10) {
                $verdict = 'neutral';
            } else {
                $verdict = 'worse';
            }

            $result_dc = [
                'debts'            => $debts,
                'debt_count'       => count($debts),
                'total_balance'    => number_format($total_balance,     2),
                'current_monthly'  => number_format($current_monthly,   2),
                'new_monthly'      => number_format($new_monthly,       2),
                'new_total_paid'   => number_format($new_total_paid,    2),
                'new_total_int'    => number_format($new_total_interest,2),
                'monthly_savings'  => number_format(abs($monthly_savings), 2),
                'monthly_savings_raw' => $monthly_savings,
                'orig_fee_amt'     => number_format($orig_fee_amt,      2),
                'break_even'       => $break_even,
                'verdict'          => $verdict,
                'dc_term'          => $n,
                'has_fee'          => $dc_fee > 0,
            ];
        }
    }
}

// ─── Structured Data ─────────────────────────────────────────────────────────
$schemaData = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'               => 'WebApplication',
            'name'                => 'Personal Loan Calculator',
            'url'                 => 'https://americacalculator.com/loan-calculators/personal-loan-calculator',
            'description'         => 'Free personal loan calculator with debt consolidation mode. Calculate monthly payments, origination fee impact, and effective APR. See monthly savings from consolidating debts.',
            'applicationCategory' => 'FinanceApplication',
            'operatingSystem'     => 'All',
            'offers'              => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD'],
        ],
        [
            '@type'     => 'HowTo',
            'name'      => 'How to Use the Personal Loan Calculator',
            'totalTime' => 'PT2M',
            'step'      => [
                ['@type' => 'HowToStep', 'position' => 1, 'name' => 'Choose your calculator mode',
                 'text'  => 'Select "Simple Payment" to calculate a standard personal loan payment, or "Debt Consolidation" to compare your existing debts against a new consolidated loan.'],
                ['@type' => 'HowToStep', 'position' => 2, 'name' => 'Enter loan amount and APR',
                 'text'  => 'For Simple mode, enter the loan amount and the APR quoted by your lender. In 2026, personal loan APRs for borrowers with 700+ FICO range from 8% to 18%. For debt consolidation, enter each existing debt\'s balance and current monthly payment.'],
                ['@type' => 'HowToStep', 'position' => 3, 'name' => 'Set the loan term',
                 'text'  => 'Choose a repayment term. Personal loans typically range from 12 to 60 months. Shorter terms mean higher payments but significantly less total interest.'],
                ['@type' => 'HowToStep', 'position' => 4, 'name' => 'Add origination fee if applicable',
                 'text'  => 'If your lender charges an origination fee (1%–8% is typical for personal loans), enter it. The calculator will show your actual disbursed amount and the effective APR after the fee is factored in.'],
            ],
        ],
        [
            '@type'      => 'FAQPage',
            'mainEntity' => [
                ['@type' => 'Question', 'name' => 'What is the average personal loan interest rate in 2026?',
                 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'In 2026, personal loan APRs range widely based on credit score. Excellent credit (750+) typically qualifies for 8%–13% APR. Very good credit (700–749) sees 12%–18%. Good credit (660–699) sees 16%–24%. Fair credit (620–659) faces 22%–30%. Poor credit (below 620) often sees 28%–36%+. Online lenders like SoFi, LightStream, and Marcus typically offer the most competitive rates for qualified borrowers.']],
                ['@type' => 'Question', 'name' => 'What is a personal loan origination fee?',
                 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'An origination fee is a one-time charge deducted from your loan disbursement before you receive the funds. For example, a $10,000 loan with a 4% origination fee means you receive $9,600 but repay $10,000 plus interest. This raises your effective APR above the stated rate. Always compare APRs (not just rates) across lenders to account for origination fees.']],
                ['@type' => 'Question', 'name' => 'Does debt consolidation hurt your credit score?',
                 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Debt consolidation typically causes a temporary dip of 5–10 points from the hard credit inquiry. However, if consolidation reduces your credit utilization (by paying off revolving credit card balances), your score often recovers and improves within 3–6 months. Long-term, on-time payments on the new loan are the most significant credit benefit.']],
                ['@type' => 'Question', 'name' => 'Is it worth getting a personal loan to pay off credit cards?',
                 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Consolidating high-interest credit card debt (18%–29% APR) with a lower-rate personal loan (10%–20% APR) can save thousands in interest and provide a fixed payoff date. It works best when: (1) the personal loan rate is meaningfully lower than your card rates, (2) you can commit to not running up the cards again, and (3) the loan term is short enough to actually reduce total interest paid. Use the debt consolidation mode above to model your exact savings.']],
                ['@type' => 'Question', 'name' => 'How much can I borrow with a personal loan?',
                 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Personal loan amounts typically range from $1,000 to $100,000, depending on the lender and your creditworthiness. Most borrowers qualify for $5,000–$50,000. Online lenders like LightStream offer up to $100,000 for excellent-credit borrowers. Banks and credit unions typically cap at $25,000–$50,000 for unsecured personal loans.']],
                ['@type' => 'Question', 'name' => 'How fast can I get a personal loan?',
                 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Online personal loan lenders often fund within 1–3 business days of approval. Some, like Avant or Upgrade, offer same-day or next-business-day funding. Traditional bank personal loans take 3–7 business days. Credit union loans typically take 5–10 days. Pre-qualification with a soft credit pull is available at most online lenders without affecting your score.']],
                ['@type' => 'Question', 'name' => 'What credit score do I need for a personal loan?',
                 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Most mainstream personal loan lenders require a minimum credit score of 580–640. For the best rates, aim for 700+. Lenders like LightStream require 660+ and offer the lowest rates (7%–16% APR) for excellent profiles. Some lenders (Avant, OppFi) work with scores as low as 580–600, but rates run 25%–36%+ APR.']],
                ['@type' => 'Question', 'name' => 'What can I use a personal loan for?',
                 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Personal loans are highly flexible. Common uses include: debt consolidation (paying off credit cards or other high-rate debt), home improvement (additions, remodels without home equity), medical bills, emergency expenses, major purchases, wedding costs, and moving expenses. Personal loans generally cannot be used for college tuition, business investment, or purchasing real estate.']],
                ['@type' => 'Question', 'name' => 'Should I close my credit cards after consolidating them with a personal loan?',
                 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Usually no. Closing a card reduces your total available credit, which raises your credit utilization ratio and can lower your score — even though the balance is now $0. Most credit counselors recommend keeping old cards open (especially your oldest one, for credit history length) but not using them. If you\'re worried about running the balance back up, consider freezing the card, cutting it up physically, or asking the issuer to lower the limit — without closing the account.']],
                ['@type' => 'Question', 'name' => 'Personal loan vs. balance transfer credit card — which is better for debt consolidation?',
                 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'A 0% APR balance transfer card is usually cheaper if you can pay off the full balance within the promotional period (typically 12–21 months) and qualify for a transfer limit that covers your debt — most cards charge a 3%–5% transfer fee but no interest during the promo window. A personal loan makes more sense if your balance is too large to pay off before a promo period ends, if you don\'t have a card offer available, or if you want a fixed payment and payoff date rather than the risk of a card\'s rate jumping to 20%+ after the promo ends.']],
                ['@type' => 'Question', 'name' => 'Will a debt consolidation loan hurt my chances of getting a mortgage later?',
                 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Not inherently — mortgage lenders look at your debt-to-income ratio and payment history, not whether a loan is labeled "debt consolidation." In fact, replacing several revolving credit card balances with one fixed installment loan often improves your debt-to-income calculation and utilization ratio, which can help a mortgage application. What matters most is making all payments on time and not running the paid-off cards back up before you apply.']],
                ['@type' => 'Question', 'name' => 'How much do I actually need to save per month for debt consolidation to be worth it?',
                 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'There\'s no universal number, but if the monthly savings is small (under $20–30) or negative, the main benefit shifts from "saving money" to "having a fixed, predictable payoff date" — which can still be worth it if you\'re at risk of only making minimum payments on cards for years. If the loan actually costs more per month (as can happen with an origination fee or a short term), run the total-interest comparison, not just the monthly payment, before deciding.']],
                ['@type' => 'Question', 'name' => 'Can I get denied for a personal loan even with good credit?',
                 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. Credit score is only one factor — lenders also weigh your debt-to-income ratio, income stability, existing credit utilization, and recent hard inquiries. A borrower with a 720 score but a high debt-to-income ratio (from a large existing loan or several recent credit applications) can still be declined. If you\'re denied, the lender is required to send an adverse action notice listing the specific reasons, which is the fastest way to find out what to fix before reapplying.']],
            ],
        ],
    ],
    ['@type' => 'BreadcrumbList', 'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://americacalculator.com/'],
      ['@type' => 'ListItem', 'position' => 2, 'name' => 'Loan Calculators', 'item' => 'https://americacalculator.com/loan-calculators/'],
      ['@type' => 'ListItem', 'position' => 3, 'name' => 'Personal Loan Calculator', 'item' => 'https://americacalculator.com/loan-calculators/personal-loan-calculator'],
    ]],

];

require_once '../includes/header.php';
require_once '../includes/helpers.php';

function pfmt($n) { return '$' . number_format((float)$n, 2); }
?>


<style>
/* ============================================================
   PERSONAL LOAN CALCULATOR — EXECUTIVE POLISHED UI
   ============================================================ */
body { background: #f8fafc; }
.container { max-width: 1100px; margin: 0 auto; padding: 2rem 1.5rem 4rem; }

/* Hero */
.calc-hero {
  margin-bottom: 2rem;
  border-bottom: none;
  padding-bottom: 0;
}
.calc-hero h1 {
  font-size: 2.2rem;
  font-weight: 850;
  color: #0f172a;
  line-height: 1.25;
  letter-spacing: -0.02em;
  margin-bottom: 0.75rem;
}
.calc-lead {
  font-size: 1.05rem;
  color: #475569;
  line-height: 1.7;
  max-width: 820px;
  border-left: 4px solid #2563eb;
  padding-left: 1.25rem;
}

/* Calculator Card */
.calculator-card {
  background: #ffffff;
  border: 1.5px solid #e2e8f0;
  border-radius: 16px;
  box-shadow: 0 4px 20px rgba(15, 23, 42, 0.05);
  padding: 2.5rem;
  margin-bottom: 2.5rem;
}

/* Tabs */
.plc-tabs {
  display: flex;
  gap: 10px;
  border-bottom: 2px solid #e2e8f0;
  margin-bottom: 2rem;
  padding-bottom: 0;
}
.plc-tab {
  padding: 12px 26px;
  font-size: 0.95rem;
  font-weight: 700;
  border-radius: 10px 10px 0 0;
  background: #f1f5f9;
  color: #64748b;
  border: 1px solid #e2e8f0;
  border-bottom: none;
  cursor: pointer;
  transition: all 0.2s ease;
  display: inline-flex;
  align-items: center;
  gap: 8px;
}
.plc-tab:hover {
  background: #e2e8f0;
  color: #0f172a;
}
.plc-tab.plc-tab--active {
  background: #1d4ed8;
  color: #ffffff;
  border-color: #1d4ed8;
  box-shadow: 0 -2px 8px rgba(29, 78, 216, 0.15);
}

/* Form Controls */
.calculator-form { display: grid; gap: 1.5rem; }
.form-row-2 {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1.5rem;
}
.form-group {
  display: flex;
  flex-direction: column;
  gap: 0.45rem;
}
.form-group label {
  font-weight: 700;
  font-size: 0.92rem;
  color: #0f172a;
}
.form-group input, .form-select {
  padding: 13px 16px;
  border: 1.5px solid #cbd5e1;
  border-radius: 10px;
  font-size: 1rem;
  color: #0f172a;
  background: #f8fafc;
  outline: none;
  transition: all 0.2s ease;
  width: 100%;
}
.form-group input:focus, .form-select:focus {
  background: #ffffff;
  border-color: #2563eb;
  box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
}
.form-group small {
  font-size: 0.8rem;
  color: #64748b;
  line-height: 1.4;
}

/* Submit Button */
.btn-primary {
  background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 100%);
  color: #fff;
  font-weight: 700;
  font-size: 1.05rem;
  padding: 14px 34px;
  border-radius: 10px;
  border: none;
  cursor: pointer;
  box-shadow: 0 4px 14px rgba(37, 99, 235, 0.3);
  transition: all 0.2s ease;
  width: fit-content;
}
.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4);
}

/* Results */
.result-section {
  margin-top: 2.5rem;
  border-top: 2px solid #e2e8f0;
  padding-top: 2rem;
}
.result-section h2 {
  font-size: 1.45rem;
  font-weight: 800;
  color: #0f172a;
  margin-bottom: 1.25rem;
}
.result-card.highlight {
  background: linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 100%);
  border-radius: 14px;
  padding: 2rem;
  color: #fff;
  text-align: center;
  box-shadow: 0 8px 24px rgba(29, 78, 216, 0.22);
  border: none;
  grid-column: 1 / -1;
}
.result-card.highlight .result-label {
  color: rgba(255, 255, 255, 0.85);
  font-size: 0.85rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.06em;
}
.result-card.highlight .result-value {
  color: #fff;
  font-size: 3rem;
  font-weight: 900;
  line-height: 1.1;
  margin: 0.4rem 0 0;
}
.results-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1rem;
  margin-bottom: 1.75rem;
}
.result-card {
  background: #ffffff;
  border: 1.5px solid #e2e8f0;
  border-radius: 12px;
  padding: 1.25rem 1.4rem;
  box-shadow: 0 2px 8px rgba(0,0,0,0.03);
}

/* Debt Consolidation Comparison */
.dc-compare {
  display: grid;
  grid-template-columns: 1fr auto 1fr;
  gap: 1.25rem;
  align-items: center;
  margin-bottom: 1.75rem;
}
.dc-side {
  border-radius: 14px;
  padding: 1.5rem;
  text-align: center;
}
.dc-side--before {
  background: #fef2f2;
  border: 2px solid #fca5a5;
}
.dc-side--after {
  background: #f0fdf4;
  border: 2px solid #86efac;
}
.dc-side-label {
  font-size: 0.78rem;
  font-weight: 800;
  text-transform: uppercase;
  letter-spacing: 0.07em;
  color: #64748b;
  margin-bottom: 0.5rem;
}
.dc-side-amount {
  font-size: 2.3rem;
  font-weight: 900;
  color: #0f172a;
  line-height: 1.1;
}
.dc-arrow {
  font-size: 2rem;
  color: #10b981;
  font-weight: 900;
}

/* Content Sections */
.content-section {
  background: #ffffff;
  border: 1.5px solid #e2e8f0;
  border-radius: 16px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.03);
  padding: 2.25rem;
  margin-bottom: 2rem;
}
.content-section h2 {
  font-size: 1.5rem;
  font-weight: 800;
  color: #0f172a;
  margin-bottom: 1.25rem;
  border-bottom: 2px solid #f1f5f9;
  padding-bottom: 0.75rem;
}

@media (max-width: 768px) {
  .form-row-2 { grid-template-columns: 1fr; }
  .results-grid { grid-template-columns: 1fr; }
  .dc-compare { grid-template-columns: 1fr; }
  .calculator-card { padding: 1.5rem; }
  .content-section { padding: 1.5rem; }
  .result-card.highlight .result-value { font-size: 2.4rem; }
}
</style>

<main id="main-content">
<div class="container">

  <!-- ═══════════════════════════════════════════════
       HERO
  ═══════════════════════════════════════════════ -->
  <section class="calc-hero">
    <h1>Personal Loan Calculator (2026) “ Payment, Interest &amp; Debt Consolidation</h1>
    <p class="calc-lead">
      Two calculators in one: estimate monthly payments for a new personal loan,
      or enter your existing debts to see how consolidation cuts your monthly bill.
      Includes <strong>origination fee impact</strong> and
      <strong>effective APR</strong> — the numbers lenders don't always show you.
    </p>
  </section>

  <!-- ═══════════════════════════════════════════════
       CALCULATOR
  ═══════════════════════════════════════════════ -->
  <section class="calculator-card" aria-label="Personal Loan Calculator">

    <!-- Mode toggle tabs -->
    <div class="plc-tabs" role="tablist">
      <button class="plc-tab <?php echo $mode === 'simple' ? 'plc-tab--active' : ''; ?>"
              id="tab-simple" role="tab" aria-selected="<?php echo $mode === 'simple' ? 'true' : 'false'; ?>"
              aria-controls="panel-simple" type="button" onclick="switchMode('simple')">
        &#x1F4B5; Simple Payment
      </button>
      <button class="plc-tab <?php echo $mode === 'consolidation' ? 'plc-tab--active' : ''; ?>"
              id="tab-dc" role="tab" aria-selected="<?php echo $mode === 'consolidation' ? 'true' : 'false'; ?>"
              aria-controls="panel-dc" type="button" onclick="switchMode('consolidation')">
        &#x1F504; Debt Consolidation
      </button>
    </div>

    <?php if (!empty($errors)): ?>
    <div class="calc-error" role="alert">
      <ul><?php foreach ($errors as $e): ?><li><?php echo htmlspecialchars($e); ?></li><?php endforeach; ?></ul>
    </div>
    <?php endif; ?>

    <form method="POST" class="calculator-form" id="plc-form" novalidate>
      <input type="hidden" name="mode" id="mode-input" value="<?php echo htmlspecialchars($mode); ?>">

      <!-- ──────────────────────────────────────────
           PANEL 1: SIMPLE PAYMENT
      ─────────────────────────────────────────── -->
      <div id="panel-simple" class="plc-panel <?php echo $mode === 'consolidation' ? 'plc-panel--hidden' : ''; ?>"
           role="tabpanel" aria-labelledby="tab-simple">

        <div class="form-row-2">
          <div class="form-group">
            <label for="loan_amount">Loan Amount ($)</label>
            <input type="number" id="loan_amount" name="loan_amount"
                   min="500" max="100000" step="500" placeholder="e.g. 15000"
                   value="<?php echo htmlspecialchars($sv['loan_amount']); ?>">
            <small>Typically $1,000–$100,000 for personal loans</small>
          </div>
          <div class="form-group">
            <label for="apr">Annual APR (%)</label>
            <input type="number" id="apr" name="apr"
                   min="0" max="100" step="0.01" placeholder="e.g. 14.99"
                   value="<?php echo htmlspecialchars($sv['apr']); ?>">
            <small>700+ credit 2026: ~8%–18%</small>
          </div>
        </div>

        <div class="form-row-2">
          <div class="form-group">
            <label for="loan_term_mo">Loan Term (months)</label>
            <select id="loan_term_mo" name="loan_term_mo" class="form-select">
              <?php foreach ([12,18,24,36,48,60,72,84] as $t):
                $sel = ($sv['loan_term_mo'] == $t) ? 'selected' : '';
                echo "<option value=\"$t\" $sel>$t months (" . round($t/12, 1) . " yrs)</option>";
              endforeach; ?>
            </select>
            <small>Shorter = more savings; 36–60 months most common</small>
          </div>
          <div class="form-group">
            <label for="origination_fee">
              Origination Fee (%)
              <em class="optional-tag">optional</em>
            </label>
            <input type="number" id="origination_fee" name="origination_fee"
                   min="0" max="12" step="0.1" placeholder="e.g. 3"
                   value="<?php echo htmlspecialchars($sv['origination_fee']); ?>">
            <small>Deducted from disbursement &middot; Raises effective APR</small>
          </div>
        </div>

      </div><!-- /#panel-simple -->

      <!-- ──────────────────────────────────────────
           PANEL 2: DEBT CONSOLIDATION
      ─────────────────────────────────────────── -->
      <div id="panel-dc" class="plc-panel <?php echo $mode === 'simple' ? 'plc-panel--hidden' : ''; ?>"
           role="tabpanel" aria-labelledby="tab-dc">

        <p class="panel-intro">
          Enter your existing debts and the consolidation loan terms.
          We'll show you exactly how much you save (or don't) per month.
        </p>

        <!-- Existing debts table -->
        <div class="debt-table-wrap">
          <table class="debt-input-table">
            <thead>
              <tr>
                <th>#</th>
                <th>Debt (optional label)</th>
                <th>Current Balance ($)</th>
                <th>Monthly Payment ($)</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $debt_labels = ['Credit Card 1', 'Credit Card 2', 'Medical Bill', 'Other Debt'];
              for ($i = 1; $i <= 4; $i++):
              ?>
              <tr>
                <td class="debt-num"><?php echo $i; ?></td>
                <td><span class="debt-placeholder"><?php echo $debt_labels[$i-1]; ?></span></td>
                <td>
                  <input type="number" name="dc_bal<?php echo $i; ?>"
                         min="0" step="100" placeholder="e.g. 5000"
                         value="<?php echo htmlspecialchars($dv["dc_bal$i"]); ?>">
                </td>
                <td>
                  <input type="number" name="dc_pmt<?php echo $i; ?>"
                         min="0" step="10" placeholder="e.g. 150"
                         value="<?php echo htmlspecialchars($dv["dc_pmt$i"]); ?>">
                </td>
              </tr>
              <?php endfor; ?>
            </tbody>
          </table>
        </div>

        <!-- Consolidation loan inputs -->
        <div class="dc-loan-box">
          <div class="dc-loan-title">New Consolidation Loan Terms</div>
          <div class="form-row-2">
            <div class="form-group">
              <label for="dc_apr">Consolidation APR (%)</label>
              <input type="number" id="dc_apr" name="dc_apr"
                     min="0" max="100" step="0.01" placeholder="e.g. 12.99"
                     value="<?php echo htmlspecialchars($dv['dc_apr']); ?>">
              <small>Get pre-qualified to see your real rate</small>
            </div>
            <div class="form-group">
              <label for="dc_term">Repayment Term (months)</label>
              <select id="dc_term" name="dc_term" class="form-select">
                <?php foreach ([12,18,24,36,48,60] as $t):
                  $sel = ($dv['dc_term'] == $t) ? 'selected' : '';
                  echo "<option value=\"$t\" $sel>$t months (" . round($t/12,1) . " yrs)</option>";
                endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group" style="max-width:300px">
            <label for="dc_fee">
              Origination Fee (%)
              <em class="optional-tag">optional</em>
            </label>
            <input type="number" id="dc_fee" name="dc_fee"
                   min="0" max="12" step="0.1" placeholder="e.g. 3"
                   value="<?php echo htmlspecialchars($dv['dc_fee']); ?>">
            <small>Typical: 1%–8% — used to calculate break-even</small>
          </div>
        </div>

      </div><!-- /#panel-dc -->

      <button type="submit" class="btn btn-primary" id="plc-submit">
        <?php echo $mode === 'consolidation' ? 'Compare Debt Options' : 'Calculate Payment'; ?>
      </button>
    </form>

    <!-- ═══ SIMPLE RESULTS ═══════════════════════ -->
    <?php if ($result && $mode === 'simple'): ?>
    <div class="result-section" id="plc-result" aria-live="polite">

      <h2>Your Personal Loan Payment</h2>
      <div class="results-grid results-grid--wide">
        <div class="result-card highlight">
          <span class="result-label">Monthly Payment</span>
          <span class="result-value"><?php echo pfmt($result['monthly']); ?></span>
        </div>
        <?php if ($result['has_fee']): ?>
        <div class="result-card highlight-alt">
          <span class="result-label">Amount Disbursed</span>
          <span class="result-value"><?php echo pfmt($result['disbursed']); ?></span>
        </div>
        <?php endif; ?>
        <div class="result-card">
          <span class="result-label">Loan Amount (repaid)</span>
          <span class="result-value"><?php echo pfmt($result['loan_amount']); ?></span>
        </div>
        <div class="result-card">
          <span class="result-label">Total Interest</span>
          <span class="result-value" style="color:#991b1b"><?php echo pfmt($result['total_interest']); ?></span>
        </div>
        <div class="result-card">
          <span class="result-label">Total Paid</span>
          <span class="result-value"><?php echo pfmt($result['total_paid']); ?></span>
        </div>
        <?php if ($result['has_fee']): ?>
        <div class="result-card">
          <span class="result-label">Effective APR (with fee)</span>
          <span class="result-value"><?php echo $result['eff_apr']; ?>%</span>
        </div>
        <?php endif; ?>
      </div>

      <!-- Origination fee callout -->
      <?php if ($result['has_fee']): ?>
      <div class="savings-callout" style="margin-top:1rem; background:#fff7ed; border-color:#fed7aa; color:#9a3412;">
        <span class="savings-icon">&#x26A0;&#xFE0F;</span>
        <div>
          The origination fee of <?php echo pfmt($result['orig_fee_amt']); ?> is deducted upfront — you receive <strong><?php echo pfmt($result['disbursed']); ?></strong> but repay
          <strong><?php echo pfmt($result['loan_amount']); ?></strong> plus interest.
          Your <strong>effective APR is <?php echo $result['eff_apr']; ?>%</strong>
          vs. the stated <?php echo $result['stated_apr']; ?>%.
        </div>
      </div>
      <?php endif; ?>

      <!-- Interest ratio bar -->
      <div class="split-bar-wrap" style="margin-top:1.25rem">
        <p style="font-size:0.8rem;color:#6b7280;margin-bottom:0.4rem">
          Interest cost = <strong><?php echo $result['interest_ratio']; ?>%</strong> of loan amount
        </p>
        <div class="split-bar">
          <div class="split-bar__principal" style="width:<?php echo max(10, 100 - $result['interest_ratio']); ?>%">
            Principal
          </div>
          <div class="split-bar__interest" style="width:<?php echo min(90, $result['interest_ratio']); ?>%">
            Interest
          </div>
        </div>
      </div>

      <p class="result-note">
        <?php if ($result['has_fee']): ?>
        Effective APR calculated by solving for the true monthly rate on the disbursed amount.
        <?php endif; ?>
        Does not include any late fees or penalty charges.
      </p>
    </div>
    <?php endif; ?>

    <!-- ═══ DEBT CONSOLIDATION RESULTS ═══════════ -->
    <?php if ($result_dc && $mode === 'consolidation'): ?>
    <div class="result-section" id="dc-result" aria-live="polite">

      <h2>Debt Consolidation Comparison</h2>

      <!-- Big comparison: before vs after -->
      <div class="dc-compare">

        <div class="dc-side dc-side--before">
          <div class="dc-side-label">Before — <?php echo $result_dc['debt_count']; ?> Separate Debts</div>
          <div class="dc-side-amount"><?php echo pfmt($result_dc['current_monthly']); ?></div>
          <div class="dc-side-sub">/month combined</div>
          <div class="dc-side-detail">Total balance: <?php echo pfmt($result_dc['total_balance']); ?></div>
        </div>

        <div class="dc-arrow" aria-hidden="true">→</div>

        <div class="dc-side dc-side--after">
          <div class="dc-side-label">After — 1 Consolidated Loan</div>
          <div class="dc-side-amount"><?php echo pfmt($result_dc['new_monthly']); ?></div>
          <div class="dc-side-sub">/month</div>
          <div class="dc-side-detail"><?php echo $result_dc['dc_term']; ?> months &middot; <?php echo pfmt($result_dc['new_total_paid']); ?> total paid</div>
        </div>

      </div><!-- /.dc-compare -->

      <!-- Savings / verdict callout -->
      <?php if ($result_dc['verdict'] === 'good'): ?>
      <div class="savings-callout">
        <span class="savings-icon">&#x1F4B0;</span>
        <div>
          <strong>You save <?php echo pfmt($result_dc['monthly_savings']); ?>/month</strong>
          by consolidating.
          <?php if ($result_dc['break_even']): ?>
            Origination fee of <?php echo pfmt($result_dc['orig_fee_amt']); ?>
            recovered in <strong><?php echo $result_dc['break_even']; ?> months</strong>.
          <?php endif; ?>
          Total interest on consolidated loan:
          <strong><?php echo pfmt($result_dc['new_total_int']); ?></strong>.
        </div>
      </div>
      <?php elseif ($result_dc['verdict'] === 'neutral'): ?>
      <div class="savings-callout" style="background:#fff7ed;border-color:#fed7aa;color:#9a3412">
        <span class="savings-icon">&#x2696;&#xFE0F;</span>
        <div>
          <strong>Roughly break-even</strong> — the payment difference is minimal.
          Consider consolidation mainly for the simplicity of one payment, not cash flow savings.
          Total interest on new loan: <strong><?php echo pfmt($result_dc['new_total_int']); ?></strong>.
        </div>
      </div>
      <?php else: ?>
      <div class="savings-callout" style="background:#fff5f5;border-color:#fc8181;color:#c53030">
        <span class="savings-icon">🔴</span>
        <div>
          <strong>Consolidation increases your monthly payment by
          <?php echo pfmt($result_dc['monthly_savings']); ?></strong>.
          This typically happens when the new loan has a shorter term or higher rate.
          Try a longer repayment term or a lower APR.
        </div>
      </div>
      <?php endif; ?>

      <!-- Summary table -->
      <div class="example-table-wrap" style="margin-top:1.25rem">
        <table class="example-table">
          <thead>
            <tr><th>Metric</th><th>Current Debts</th><th>After Consolidation</th></tr>
          </thead>
          <tbody>
            <tr>
              <td>Number of Payments</td>
              <td><?php echo $result_dc['debt_count']; ?> bills/month</td>
              <td>1 payment/month</td>
            </tr>
            <tr>
              <td>Monthly Amount</td>
              <td><?php echo pfmt($result_dc['current_monthly']); ?></td>
              <td><?php echo pfmt($result_dc['new_monthly']); ?></td>
            </tr>
            <tr>
              <td>Total Balance / Loan</td>
              <td><?php echo pfmt($result_dc['total_balance']); ?></td>
              <td><?php echo pfmt($result_dc['total_balance']); ?></td>
            </tr>
            <tr>
              <td>Origination Fee</td>
              <td>”</td>
              <td><?php echo $result_dc['has_fee'] ? pfmt($result_dc['orig_fee_amt']) : '”'; ?></td>
            </tr>
            <tr>
              <td>Monthly Savings</td>
              <td colspan="2" style="text-align:center;font-weight:700;
                  color:<?php echo $result_dc['verdict'] === 'good' ? '#065f46' : ($result_dc['verdict'] === 'neutral' ? '#92400e' : '#991b1b'); ?>">
                <?php
                if ($result_dc['monthly_savings_raw'] > 0) echo pfmt($result_dc['monthly_savings']) . '/month saved';
                elseif ($result_dc['monthly_savings_raw'] < 0) echo pfmt($result_dc['monthly_savings']) . '/month more';
                else echo 'No change';
                ?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <p class="result-note">Total interest on existing debts varies by their individual rates, which were not entered. The consolidation interest shown is for the new loan only.</p>
    </div>
    <?php endif; ?>

  </section>

  <!-- ═══════════════════════════════════════════════
       HOW TO USE
  ═══════════════════════════════════════════════ -->
  <section class="content-section" id="how-to">
    <h2>How to Use This Personal Loan Calculator</h2>
    <ol class="howto-step">
      <li>
        <strong>Choose Simple Payment or Debt Consolidation mode.</strong>
        Use Simple Payment to model a single new loan. Use Debt Consolidation
        if you have multiple existing debts (credit cards, medical bills, etc.)
        and want to see whether combining them into one loan saves money.
      </li>
      <li>
        <strong>Enter your loan amount and APR.</strong>
        Use the rate from your pre-qualification or lender quote. In 2026,
        personal loan APRs for borrowers with a 700+ FICO score run
        approximately <strong>8%–18%</strong>. Pre-qualify with at least
        2–3 lenders to compare — most use a soft pull that doesn't affect
        your credit score.
      </li>
      <li>
        <strong>Select a loan term.</strong>
        Personal loans range from 12 to 84 months. A 24-month term costs
        far less in total interest than a 60-month term, but the monthly
        payment is substantially higher. Use the calculator to find the
        term that balances your cash flow needs against total cost.
      </li>
      <li>
        <strong>Add origination fee if your lender charges one.</strong>
        Origination fees of 1%–8% are common on personal loans. They are
        deducted from your disbursement — you receive less than you borrowed
        but repay the full loan amount. The calculator shows your actual
        disbursed amount and the <em>effective APR</em> after the fee,
        which is the number that matters for comparing lenders.
      </li>
    </ol>
  </section>

  <!-- ═══════════════════════════════════════════════
       RATE GUIDE
  ═══════════════════════════════════════════════ -->
  <section class="content-section" id="rate">
    <h2>Personal Loan Rates by Credit Score (2026)</h2>
    <div class="example-table-wrap">
      <table class="example-table">
        <thead>
          <tr><th>Credit Score</th><th>Rating</th><th>Typical APR Range</th><th>Top Lenders</th></tr>
        </thead>
        <tbody>
          <tr><td>750+</td>    <td>Excellent</td> <td><strong>8%–13%</strong></td>  <td>LightStream, SoFi, Marcus</td></tr>
          <tr><td>700–749</td> <td>Very Good</td>  <td>12%–18%</td>                 <td>SoFi, Discover, Upgrade</td></tr>
          <tr><td>660–699</td> <td>Good</td>       <td>16%–24%</td>                 <td>Avant, Upgrade, Best Egg</td></tr>
          <tr><td>620–659</td> <td>Fair</td>       <td>22%–30%</td>                 <td>Avant, OppFi, OneMain</td></tr>
          <tr><td>Below 620</td><td>Poor</td>      <td>28%–36%+</td>                <td>OneMain, OppFi, local CU</td></tr>
        </tbody>
      </table>
    </div>
    <p style="margin-top:0.75rem; font-size:0.88rem; color:#6b7280">
      Rates are approximate 2026 ranges. Your actual rate depends on income, debt-to-income ratio,
      loan amount, and term. <strong>Always pre-qualify with at least 2–3 lenders</strong> — rates
      vary significantly even for the same credit profile.
    </p>
  </section>

  <!-- ═══════════════════════════════════════════════
       ORIGINATION FEE EXPLAINER
  ═══════════════════════════════════════════════ -->
  <section class="content-section" id="origination-fee">
    <h2>What Is an Origination Fee — and Does It Matter?</h2>
    <p>
      An <strong>origination fee</strong> is a one-time processing charge
      deducted from your loan before you receive the funds. If you borrow
      $15,000 with a 4% origination fee, you receive <strong>$14,400</strong> — but you repay $15,000 plus interest.
    </p>
    <div class="formula-box">
      <code>Disbursed = Loan Amount &times; (1 &minus; Origination Fee %)</code><br>
      <code>Effective APR &gt; Stated APR (because you pay interest on money you never received)</code>
    </div>
    <p>
      On a $15,000 loan at 14.99% APR over 36 months with a 4% fee:
    </p>
    <ul>
      <li>Stated APR: <strong>14.99%</strong></li>
      <li>Origination fee: $600 → you receive $14,400</li>
      <li>Monthly payment: $519.91 (same regardless of fee)</li>
      <li>Effective APR: <strong>~17.9%</strong></li>
    </ul>
    <p>
      This is why comparing <em>APR</em> (which lenders must disclose under
      the Truth in Lending Act) — not just the interest rate — is critical.
      Lenders that charge no origination fee (LightStream, SoFi, Marcus) are
      often cheaper even if their stated rate is slightly higher.
    </p>
  </section>

  <!-- ═══════════════════════════════════════════════
       WHEN DEBT CONSOLIDATION MAKES SENSE
  ═══════════════════════════════════════════════ -->
  <section class="content-section" id="consolidation">
    <h2>When Does Debt Consolidation Make Sense?</h2>
    <p>
      Debt consolidation — using a personal loan to pay off multiple
      high-interest debts — works well in three situations:
    </p>
    <ol class="hub-checklist">
      <li>
        <strong>Your new loan rate is meaningfully lower than your existing rates.</strong>
        Consolidating a 24% credit card into a 14% personal loan saves real money.
        Consolidating a 12% card into a 13% personal loan (after origination fee)
        does not — run the numbers first.
      </li>
      <li>
        <strong>You commit to not running up the old accounts again.</strong>
        The most common debt consolidation mistake: people pay off their cards
        with a personal loan, then charge the cards back up, leaving themselves
        with both the loan <em>and</em> new card debt. Close the cards or freeze
        them if self-discipline is a concern.
      </li>
      <li>
        <strong>The new term doesn't extend your payoff too far.</strong>
        Consolidating 3 credit cards into a 60-month personal loan at a lower rate
        might lower your monthly payment but increase total interest paid if you
        were close to paying off the cards anyway. Use the Debt Consolidation mode
        above to model your exact break-even point.
      </li>
    </ol>
  </section>

  <!-- ═══════════════════════════════════════════════
       WORKED EXAMPLE
  ═══════════════════════════════════════════════ -->
  <section class="content-section" id="example">
    <h2>Worked Example: $15,000 Debt Consolidation</h2>
    <p>
      A borrower has three debts and gets pre-approved for a personal loan:
    </p>
    <div class="example-table-wrap">
      <table class="example-table">
        <thead><tr><th>Existing Debt</th><th>Balance</th><th>Monthly Payment</th></tr></thead>
        <tbody>
          <tr><td>Credit Card 1</td> <td>$7,500</td><td>$225</td></tr>
          <tr><td>Credit Card 2</td> <td>$4,200</td><td>$126</td></tr>
          <tr><td>Medical Bill</td>  <td>$3,300</td><td>$100</td></tr>
          <tr><td><strong>Total</strong></td><td><strong>$15,000</strong></td><td><strong>$451/month</strong></td></tr>
        </tbody>
      </table>
    </div>
    <div class="example-table-wrap" style="margin-top:0.75rem">
      <table class="example-table">
        <thead><tr><th>Consolidation Loan</th><th>Value</th></tr></thead>
        <tbody>
          <tr><td>Loan Amount</td>       <td>$15,000</td></tr>
          <tr><td>APR</td>               <td>14.99%</td></tr>
          <tr><td>Term</td>              <td>36 months</td></tr>
          <tr><td>Origination Fee</td>   <td>3% = $450</td></tr>
          <tr><td>Monthly Payment</td>   <td><strong>$519.91</strong></td></tr>
          <tr><td>Monthly Savings</td>   <td style="color:#991b1b"><strong>&minus;$68.91/month</strong> (payment goes up)</td></tr>
          <tr><td>Total Interest (new)</strong></td><td>$3,716.63</td></tr>
          <tr><td>Break-even on fee</td> <td>N/A (payment is higher)</td></tr>
        </tbody>
      </table>
    </div>
    <p>
      In this case, consolidation at 14.99% into 36 months
      <strong>increases</strong> the monthly payment because the original
      combined minimum payments were stretched across longer credit card terms.
      The benefit here is a <strong>fixed payoff date</strong> (36 months)
      vs. potentially 8+ years of minimum payments on the cards. Total interest
      on the new loan ($3,716.63) is likely far less than the true total interest
      on the cards if only minimums were paid.
    </p>
  </section>

  <!-- ═══════════════════════════════════════════════
       RELATED CALCULATORS
  ═══════════════════════════════════════════════ -->
  <section class="content-section related-calc" id="related">
    <h2>Related Loan Calculators</h2>
    <div class="related-grid">
      <a href="/loan-calculators/auto-loan-calculator" class="related-card">
        <span class="related-icon">&#x1F697;</span>
        <span class="related-name">Auto Loan Calculator</span>
        <span class="related-desc">Compare using a personal loan vs. secured auto financing for your car purchase.</span>
      </a>
      <a href="/loan-calculators/sba-loan-calculator" class="related-card">
        <span class="related-icon">🏢</span>
        <span class="related-name">SBA Loan Calculator</span>
        <span class="related-desc">Need a business loan? SBA rates are typically lower than personal loan rates.</span>
      </a>
      <a href="/loan-calculators/business-loan-calculator" class="related-card">
        <span class="related-icon">&#x1F4BC;</span>
        <span class="related-name">Business Loan Calculator</span>
        <span class="related-desc">Compare SBA vs. conventional business financing for work-related expenses.</span>
      </a>
      <a href="/loan-calculators/" class="related-card">
        <span class="related-icon">🏦</span>
        <span class="related-name">All Loan Calculators</span>
        <span class="related-desc">Browse every loan calculator — RV, land, SBA, auto, and more.</span>
      </a>
      <a href="/loan-calculators/land-loan-calculator" class="related-card">
        <span class="related-icon">&#x1F30E;</span>
        <span class="related-name">Land Loan Calculator</span>
        <span class="related-desc">Some buyers use personal loans to bridge or supplement land purchases — compare payments here.</span>
      </a>
      <a href="/loan-calculators/interest-only-loan-calculator" class="related-card">
        <span class="related-icon">&#x1F4C9;</span>
        <span class="related-name">Interest Only Loan Calculator</span>
        <span class="related-desc">Explore interest-only payment structures as an alternative to fully amortizing personal loans.</span>
      </a>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════
       FAQ
  ═══════════════════════════════════════════════ -->
  <section class="content-section faq-section" id="faq">
    <h2>Frequently Asked Questions About Personal Loans</h2>
    <div class="faq-list">

      <div class="faq-item">
        <h3>What is the average personal loan interest rate in 2026?</h3>
        <p>Personal loan APRs range widely by credit. Excellent credit (750+): <strong>8%–13%</strong>. Very good credit (700–749): 12%–18%. Good credit (660–699): 16%–24%. Fair credit (620–659): 22%–30%. Poor credit (below 620): 28%–36%+. Always compare the APR — not just the rate — to account for origination fees.</p>
      </div>

      <div class="faq-item">
        <h3>What is a personal loan origination fee?</h3>
        <p>A one-time charge deducted from your loan before disbursement. A $10,000 loan with 4% origination: you receive <strong>$9,600</strong> but repay $10,000 plus interest. This raises your effective APR above the stated rate. Use this calculator's origination fee field to see the true cost.</p>
      </div>

      <div class="faq-item">
        <h3>Does debt consolidation hurt your credit score?</h3>
        <p>It causes a temporary dip of 5–10 points from the hard inquiry. However, paying off revolving credit card balances reduces your credit utilization, which often <strong>improves your score within 3–6 months</strong>. Long-term, on-time payments on the consolidation loan are the biggest credit benefit.</p>
      </div>

      <div class="faq-item">
        <h3>Is it worth getting a personal loan to pay off credit cards?</h3>
        <p>Consolidating 18%–29% credit card debt with a lower-rate personal loan (10%–20%) can save thousands. It works best when: (1) the rate is meaningfully lower, (2) you won't run the cards back up, and (3) the term is short enough to reduce total interest. Use the Debt Consolidation mode above to model your exact savings.</p>
      </div>

      <div class="faq-item">
        <h3>How much can I borrow with a personal loan?</h3>
        <p>Typical range: <strong>$1,000–$100,000</strong>. Most borrowers qualify for $5,000–$50,000. Online lenders like LightStream offer up to $100,000 for excellent-credit profiles. Banks and credit unions typically cap at $25,000–$50,000 for unsecured loans.</p>
      </div>

      <div class="faq-item">
        <h3>How fast can I get a personal loan?</h3>
        <p>Online lenders often fund within <strong>1–3 business days</strong>. Some (Avant, Upgrade) offer same-day or next-day funding. Traditional bank personal loans: 3–7 days. Credit unions: 5–10 days. Pre-qualification with a soft credit pull is available at most online lenders without affecting your score.</p>
      </div>

      <div class="faq-item">
        <h3>What credit score do I need for a personal loan?</h3>
        <p>Most mainstream lenders require <strong>580–640 minimum</strong>. For best rates, aim for 700+. LightStream requires 660+ and offers the lowest rates. Some lenders (Avant, OppFi) work with scores as low as 580–600 at 25%–36%+ APR.</p>
      </div>

      <div class="faq-item">
        <h3>What can I use a personal loan for?</h3>
        <p>Personal loans are flexible: <strong>debt consolidation</strong>, home improvement (without tapping home equity), medical bills, emergency expenses, major purchases, wedding costs, and moving. They generally cannot be used for college tuition, real estate purchases, or business investment.</p>
      </div>

      <div class="faq-item">
        <h3>Should I close my credit cards after consolidating them with a personal loan?</h3>
        <p>Usually no. Closing a card <strong>reduces your total available credit</strong>, which raises your utilization ratio and can lower your score — even with a $0 balance. Most credit counselors recommend keeping old cards open (especially your oldest one) but not using them. If self-control is the concern, freeze the card or ask the issuer to lower the limit instead of closing it.</p>
      </div>

      <div class="faq-item">
        <h3>Personal loan vs. balance transfer credit card — which is better?</h3>
        <p>A <strong>0% APR balance transfer card</strong> is usually cheaper if you can pay off the full balance within the promo period (typically 12–21 months) and qualify for a limit that covers your debt — most charge a 3%–5% transfer fee but no interest during the promo. A <strong>personal loan</strong> makes more sense if your balance is too large to clear before the promo ends, you don't have a transfer offer available, or you want a fixed payment and payoff date instead of risking a rate jump to 20%+ after the promo expires.</p>
      </div>

      <div class="faq-item">
        <h3>Will a debt consolidation loan hurt my chances of getting a mortgage later?</h3>
        <p>Not inherently. Mortgage lenders look at your <strong>debt-to-income ratio</strong> and payment history, not whether a loan is labeled "debt consolidation." Replacing several revolving card balances with one fixed installment loan often <strong>improves</strong> your DTI and utilization ratio. What matters most is on-time payments and not running the paid-off cards back up before you apply.</p>
      </div>

      <div class="faq-item">
        <h3>How much do I actually need to save per month for consolidation to be worth it?</h3>
        <p>There's no universal number, but if monthly savings are under <strong>$20–30</strong> (or negative), the benefit shifts from "saving money" to "having a fixed payoff date" — still worthwhile if you're at risk of years of minimum payments. If the loan costs more per month (common with an origination fee or short term), compare <strong>total interest</strong>, not just the monthly payment, before deciding.</p>
      </div>

      <div class="faq-item">
        <h3>Can I get denied for a personal loan even with good credit?</h3>
        <p>Yes. Credit score is only one factor — lenders also weigh your <strong>debt-to-income ratio</strong>, income stability, credit utilization, and recent hard inquiries. A 720-score borrower with a high DTI or several recent applications can still be declined. If denied, lenders must send an adverse action notice listing the specific reasons — the fastest way to know what to fix before reapplying.</p>
      </div>

    </div>
  </section>

</div><!-- /.container -->
</main>

<!-- ═══ Tab switching JS ═══════════════════════════════════════════════════ -->
<script>
function switchMode(mode) {
    var modeInput  = document.getElementById('mode-input');
    var panelSimple= document.getElementById('panel-simple');
    var panelDc    = document.getElementById('panel-dc');
    var tabSimple  = document.getElementById('tab-simple');
    var tabDc      = document.getElementById('tab-dc');
    var submitBtn  = document.getElementById('plc-submit');

    modeInput.value = mode;

    if (mode === 'simple') {
        panelSimple.classList.remove('plc-panel--hidden');
        panelDc.classList.add('plc-panel--hidden');
        tabSimple.classList.add('plc-tab--active');
        tabDc.classList.remove('plc-tab--active');
        tabSimple.setAttribute('aria-selected', 'true');
        tabDc.setAttribute('aria-selected', 'false');
        submitBtn.textContent = 'Calculate Payment';
    } else {
        panelDc.classList.remove('plc-panel--hidden');
        panelSimple.classList.add('plc-panel--hidden');
        tabDc.classList.add('plc-tab--active');
        tabSimple.classList.remove('plc-tab--active');
        tabDc.setAttribute('aria-selected', 'true');
        tabSimple.setAttribute('aria-selected', 'false');
        submitBtn.textContent = 'Compare Debt Options';
    }
}
</script>

<?php require_once '../includes/footer.php'; ?>