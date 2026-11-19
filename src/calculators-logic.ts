export function fmt(n: number, decimals = 2): string {
  return n.toLocaleString('en-US', {
    minimumFractionDigits: decimals,
    maximumFractionDigits: decimals,
  });
}

export function pfmt(val: string | number): string {
  const num = typeof val === 'string' ? parseFloat(val.replace(/,/g, '')) : val;
  return '$' + fmt(Number.isFinite(num) ? num : 0, 2);
}

// ── CD Interest Calculator ──────────────────────────────────────────────────
export interface CdResult {
  principal: string;
  total_amount: string;
  total_interest: string;
  apy: number;
  years: number;
}

export function calculateCd(body: Record<string, string>): CdResult {
  const principal = parseFloat(body.principal || '10000') || 10000;
  const rate = (parseFloat(body.rate || '5.0') || 5.0) / 100;
  const years = parseFloat(body.years || '1') || 1;
  let freq = parseInt(body.compound_frequency || '365', 10);
  if (!Number.isFinite(freq) || freq <= 0) freq = 365;

  const amount = principal * Math.pow(1 + rate / freq, freq * years);
  const interest = amount - principal;
  const apy = (Math.pow(1 + rate / freq, freq) - 1) * 100;

  return {
    principal: fmt(principal, 2),
    total_amount: fmt(amount, 2),
    total_interest: fmt(interest, 2),
    apy: Math.round(apy * 1000) / 1000,
    years,
  };
}

// ── Asphalt Calculator ──────────────────────────────────────────────────────
export interface AsphaltResult {
  sq_ft: string;
  cubic_feet: string;
  cubic_yards: string;
  tons: string;
  tons_with_waste: string;
  cost: string;
}

export function calculateAsphalt(body: Record<string, string>): AsphaltResult | null {
  const length = parseFloat(body.length || '0');
  const width = parseFloat(body.width || '0');
  const depth = parseFloat(body.depth || '3');
  const pricePerTon = parseFloat(body.price_per_ton || '100');

  if (!(length > 0 && width > 0 && depth > 0)) return null;
  const depthFeet = depth / 12;
  const sqFt = length * width;
  const cubicFeet = sqFt * depthFeet;
  const cubicYards = cubicFeet / 27;
  const tonsNeeded = cubicYards * 2.025;
  const costEstimate = tonsNeeded * pricePerTon;

  return {
    sq_ft: fmt(sqFt, 1),
    cubic_feet: fmt(cubicFeet, 2),
    cubic_yards: fmt(cubicYards, 2),
    tons: fmt(tonsNeeded, 2),
    tons_with_waste: fmt(tonsNeeded * 1.05, 2),
    cost: fmt(costEstimate, 2),
  };
}

// ── Freight Class Calculator ────────────────────────────────────────────────
export interface FreightResult {
  freight_class: number;
  density: number;
  volume: number;
  weight: string;
}

export function calculateFreightClass(body: Record<string, string>): FreightResult | null {
  const weight = parseFloat(body.weight || '0');
  const length = parseFloat(body.length || '0');
  const width = parseFloat(body.width || '0');
  const height = parseFloat(body.height || '0');

  if (!(weight > 0 && length > 0 && width > 0 && height > 0)) return null;
  const volumeCf = (length * width * height) / 1728;
  const density = weight / volumeCf;

  let freightClass = 50;
  if (density < 1) freightClass = 500;
  else if (density < 2) freightClass = 400;
  else if (density < 4) freightClass = 300;
  else if (density < 6) freightClass = 250;
  else if (density < 8) freightClass = 200;
  else if (density < 10) freightClass = 175;
  else if (density < 12) freightClass = 125;
  else if (density < 15) freightClass = 100;
  else if (density < 22.5) freightClass = 85;
  else if (density < 30) freightClass = 70;
  else if (density < 35) freightClass = 65;
  else if (density < 50) freightClass = 55;

  return {
    freight_class: freightClass,
    density: Math.round(density * 100) / 100,
    volume: Math.round(volumeCf * 100) / 100,
    weight: fmt(weight, 1),
  };
}

// ── Stair Calculator Defaults ───────────────────────────────────────────────
export function calculateStairDefaults(body: Record<string, string> = {}) {
  const init_total_rise = parseFloat(body.total_rise || '108') || 108;
  const init_ideal_rise = parseFloat(body.ideal_rise || '7.5') || 7.5;
  const init_ideal_run = parseFloat(body.ideal_run || '10.5') || 10.5;
  const num_risers = Math.max(1, Math.round(init_total_rise / init_ideal_rise));
  const actual_rise = init_total_rise / num_risers;
  const num_treads = Math.max(0, num_risers - 1);
  const total_run = num_treads * init_ideal_run;
  const stringer_length = Math.sqrt(init_total_rise ** 2 + total_run ** 2);
  const angle = total_run > 0 ? (Math.atan2(init_total_rise, total_run) * 180) / Math.PI : 0;

  return {
    init_total_rise,
    init_ideal_rise,
    init_ideal_run,
    num_risers,
    actual_rise,
    num_treads,
    total_run,
    stringer_length,
    angle,
  };
}

// ── Personal Loan & Debt Consolidation Calculator ───────────────────────────
export function calculatePersonalLoan(body: Record<string, string> | null) {
  const sv: Record<string, string> = {
    loan_amount: '',
    apr: '',
    loan_term_mo: '36',
    origination_fee: '0',
  };
  const dv: Record<string, string> = {
    dc_bal1: '',
    dc_pmt1: '',
    dc_bal2: '',
    dc_pmt2: '',
    dc_bal3: '',
    dc_pmt3: '',
    dc_bal4: '',
    dc_pmt4: '',
    dc_apr: '',
    dc_term: '36',
    dc_fee: '0',
  };

  let mode: 'simple' | 'consolidation' = 'simple';
  let result: Record<string, any> | null = null;
  let result_dc: Record<string, any> | null = null;
  const errors: string[] = [];

  if (!body) {
    return { mode, sv, dv, result, result_dc, errors, pfmt };
  }

  mode = body.mode === 'consolidation' ? 'consolidation' : 'simple';
  for (const k of Object.keys(sv)) {
    if (body[k] !== undefined) sv[k] = String(body[k]);
  }
  for (const k of Object.keys(dv)) {
    if (body[k] !== undefined) dv[k] = String(body[k]);
  }

  if (mode === 'simple') {
    const loanAmount = parseFloat(sv.loan_amount) || 0;
    const apr = parseFloat(sv.apr) || 0;
    const n = parseInt(sv.loan_term_mo, 10) || 0;
    const origFeePct = parseFloat(sv.origination_fee) || 0;

    if (loanAmount <= 0) errors.push('Loan amount must be greater than $0.');
    if (apr < 0 || apr > 100) errors.push('APR must be between 0% and 100%.');
    if (n <= 0 || n > 84) errors.push('Loan term must be between 1 and 84 months.');
    if (origFeePct < 0 || origFeePct > 12) errors.push('Origination fee must be between 0% and 12%.');

    if (errors.length === 0) {
      const r = apr / 100 / 12;
      const monthly =
        r > 0
          ? (loanAmount * (r * Math.pow(1 + r, n))) / (Math.pow(1 + r, n) - 1)
          : loanAmount / n;
      const totalPaid = Math.round(monthly * n * 100) / 100;
      const totalInterest = Math.round((totalPaid - loanAmount) * 100) / 100;
      const origFeeAmt = Math.round(loanAmount * (origFeePct / 100) * 100) / 100;
      const disbursed = Math.round((loanAmount - origFeeAmt) * 100) / 100;

      let effApr = apr;
      if (origFeeAmt > 0 && disbursed > 0) {
        let rEff = r > 0 ? r : 0.005;
        for (let i = 0; i < 100; i++) {
          if (rEff <= 0) break;
          const f = (monthly * (1 - Math.pow(1 + rEff, -n))) / rEff - disbursed;
          const df =
            monthly *
            ((Math.pow(1 + rEff, -n) * n) / rEff -
              (1 - Math.pow(1 + rEff, -n)) / (rEff * rEff));
          if (df === 0) break;
          const rNew = rEff - f / df;
          if (Math.abs(rNew - rEff) < 1e-9) {
            rEff = rNew;
            break;
          }
          rEff = rNew;
        }
        effApr = Math.round(rEff * 12 * 100 * 100) / 100;
      }

      const interestRatio =
        loanAmount > 0 ? Math.round((totalInterest / loanAmount) * 1000) / 10 : 0;

      result = {
        loan_amount: loanAmount,
        monthly,
        total_interest: totalInterest,
        total_paid: totalPaid,
        orig_fee_amt: origFeeAmt,
        disbursed,
        eff_apr: effApr,
        stated_apr: apr,
        has_fee: origFeePct > 0,
        n,
        interest_ratio: interestRatio,
      };
    }
  } else {
    const debts: { balance: number; payment: number }[] = [];
    for (let i = 1; i <= 4; i++) {
      const bal = parseFloat(dv[`dc_bal${i}`]) || 0;
      const pmt = parseFloat(dv[`dc_pmt${i}`]) || 0;
      if (bal > 0 && pmt > 0) debts.push({ balance: bal, payment: pmt });
    }
    const dcApr = parseFloat(dv.dc_apr) || 0;
    const dcTerm = parseInt(dv.dc_term, 10) || 0;
    const dcFee = parseFloat(dv.dc_fee) || 0;

    if (debts.length === 0)
      errors.push('Enter at least one existing debt (balance + payment).');
    if (dcApr < 0 || dcApr > 100) errors.push('Consolidation APR must be between 0% and 100%.');
    if (dcTerm <= 0 || dcTerm > 84) errors.push('Consolidation term must be 1–84 months.');
    if (dcFee < 0 || dcFee > 12) errors.push('Origination fee must be 0%–12%.');

    if (errors.length === 0) {
      const currentMonthly = debts.reduce((s, d) => s + d.payment, 0);
      const totalBalance = debts.reduce((s, d) => s + d.balance, 0);
      const consAmount = totalBalance;
      const origFeeAmt = Math.round(consAmount * (dcFee / 100) * 100) / 100;
      const r = dcApr / 100 / 12;
      const n = dcTerm;
      const newMonthly =
        r > 0
          ? (consAmount * (r * Math.pow(1 + r, n))) / (Math.pow(1 + r, n) - 1)
          : consAmount / n;
      const newTotalPaid = Math.round(newMonthly * n * 100) / 100;
      const newTotalInterest = Math.round((newTotalPaid - consAmount) * 100) / 100;
      const monthlySavings = Math.round((currentMonthly - newMonthly) * 100) / 100;
      const breakEven =
        origFeeAmt > 0 && monthlySavings > 0
          ? Math.ceil(origFeeAmt / monthlySavings)
          : null;
      const verdict =
        monthlySavings > 10 ? 'good' : monthlySavings >= -10 ? 'neutral' : 'worse';

      result_dc = {
        debts,
        debt_count: debts.length,
        total_balance: totalBalance,
        current_monthly: currentMonthly,
        new_monthly: newMonthly,
        new_total_paid: newTotalPaid,
        new_total_int: newTotalInterest,
        monthly_savings: Math.abs(monthlySavings),
        monthly_savings_raw: monthlySavings,
        orig_fee_amt: origFeeAmt,
        break_even: breakEven,
        verdict,
        dc_term: n,
        has_fee: dcFee > 0,
      };
    }
  }

  return { mode, sv, dv, result, result_dc, errors, pfmt };
}
