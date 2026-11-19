export interface CalcInputDef {
  id: string;
  label: string;
  defaultVal: number;
  min: number;
  max: number;
  step: number;
  hint?: string;
}

export interface CalcMetricDef {
  id: string;
  label: string;
  unit?: string;
}

export interface CalcSpec {
  h1: string;
  lead: string;
  formulaBlock: string;
  assumptions: string[];
  inputs: CalcInputDef[];
  primaryLabel: string;
  metrics: CalcMetricDef[];
  jsBody: string; // receives `v` map of input ids -> numbers, returns { primary, primarySub, metrics: Record<string,string> }
  tableTitle: string;
  tableHeaders: string[];
  tableRows: string[][];
  examples: Array<{ title: string; intro: string; steps: string[] }>;
  faqs: Array<{ q: string; a: string }>;
}

export function buildSchemaGraph(opts: {
  url: string;
  name: string;
  description: string;
  categoryLabel: string;
  categoryUrl: string;
  faqs: Array<{ q: string; a: string }>;
}) {
  return {
    '@context': 'https://schema.org',
    '@graph': [
      {
        '@type': 'WebApplication',
        name: opts.name,
        url: opts.url,
        description: opts.description,
        applicationCategory: 'FinanceApplication',
        operatingSystem: 'Any',
        browserRequirements: 'Requires JavaScript',
        offers: {
          '@type': 'Offer',
          price: '0',
          priceCurrency: 'USD',
        },
        publisher: {
          '@type': 'Organization',
          name: 'AmericaCalculator.com',
          url: 'https://americacalculator.com',
        },
      },
      {
        '@type': 'BreadcrumbList',
        itemListElement: [
          { '@type': 'ListItem', position: 1, name: 'Home', item: 'https://americacalculator.com/' },
          { '@type': 'ListItem', position: 2, name: opts.categoryLabel, item: opts.categoryUrl },
          { '@type': 'ListItem', position: 3, name: opts.name, item: opts.url },
        ],
      },
      {
        '@type': 'FAQPage',
        mainEntity: opts.faqs.map((f) => ({
          '@type': 'Question',
          name: f.q,
          acceptedAnswer: {
            '@type': 'Answer',
            text: f.a,
          },
        })),
      },
    ],
  };
}

export const PHASE1_META_UPDATES: Record<
  string,
  {
    pageTitle: string;
    metaDescription: string;
    metaKeywords: string;
    pageUpdated: string;
    schemaData: unknown;
  }
> = {
  'business/solar-roi-calculator': {
    pageTitle: 'Solar Panel Payback Period & ROI Calculator (2026 US Guide) | AmericaCalculator',
    metaDescription:
      'Calculate your 2026 US solar panel payback period, net installed cost, Year-1 savings, and 25-year ROI. Updated for Section 25D expiry, commercial 48E credits, net metering, and utility inflation.',
    metaKeywords:
      'solar panel payback period calculator, solar roi calculator 2026, solar break even calculator, residential solar payback period usa, solar savings calculator',
    pageUpdated: '2026-11-18',
    schemaData: buildSchemaGraph({
      url: 'https://americacalculator.com/business/solar-roi-calculator',
      name: 'Solar Panel Payback Period & ROI Calculator (2026)',
      description:
        'US solar panel payback period and 25-year ROI calculator accounting for installed cost per watt, local utility rates, net metering offset, panel degradation, and 2026 tax credit rules.',
      categoryLabel: 'Business & Energy Calculators',
      categoryUrl: 'https://americacalculator.com/business/',
      faqs: [
        {
          q: 'Is the 30% federal residential solar tax credit still available in 2026?',
          a: 'No. The homeowner-direct 30% Residential Clean Energy Credit under IRC Section 25D expired for residential solar and battery installations placed in service after December 31, 2025. Commercial installations and third-party-owned (TPO) solar leases/PPAs may still utilize the commercial Section 48E tax credit.',
        },
        {
          q: 'What is a realistic solar panel payback period in the US in 2026?',
          a: 'For a cash-purchased residential system in 2026, realistic payback ranges from 7 to 10 years in high-rate states (California, Massachusetts, Connecticut, New York) and 11 to 16 years in moderate-rate Midwest and Southern states ($0.14–$0.17/kWh).',
        },
        {
          q: 'How much does net metering affect my solar ROI?',
          a: 'Under full 1:1 retail net metering, exported electricity offsets grid power dollar-for-dollar. Under reduced export or net billing tariffs (such as California NEM 3.0 without storage), payback can lengthen by 3 to 6 years.',
        },
        {
          q: 'Should I replace my roof before installing solar panels?',
          a: 'Yes, if your asphalt shingle roof has fewer than 10 to 12 years of remaining life. Removing and reinstalling a solar array mid-life for a roof replacement typically costs $3,000 to $6,500.',
        },
        {
          q: 'Why do low-interest solar loans often have a worse ROI than cash?',
          a: 'Many low-APR 25-year solar loans embed 18% to 30% dealer origination fees directly into the financed principal. Always request the cash quote and compare it against zero-fee financing.',
        },
      ],
    }),
  },
  'construction/concrete-bag-calculator': {
    pageTitle: 'Concrete Bag Calculator (2026) — 40lb, 60lb & 80lb Bags per Yard | AmericaCalculator',
    metaDescription:
      'Calculate how many 40 lb, 60 lb, or 80 lb bags of concrete you need for slabs, footings, and Sonotube post holes. Includes 60lb bags per cubic yard (60), waste factor, pallets, and cost.',
    metaKeywords:
      'concrete bag calculator, how many 60lb bags of concrete in a cubic yard, 80lb concrete bags per yard, 40lb concrete bag calculator, concrete slab bag estimator',
    pageUpdated: '2026-11-18',
    schemaData: buildSchemaGraph({
      url: 'https://americacalculator.com/construction/concrete-bag-calculator',
      name: 'Concrete Bag Calculator — 40lb, 60lb & 80lb Bags',
      description:
        'US Imperial concrete bag estimator calculating 40 lb, 60 lb, and 80 lb concrete bags, cubic yards, waste factor, pallet count, mixing water, and ready-mix truck crossover.',
      categoryLabel: 'Construction Calculators',
      categoryUrl: 'https://americacalculator.com/construction/',
      faqs: [
        {
          q: 'How many 60 lb bags of concrete are in a cubic yard?',
          a: 'It takes exactly 60 bags of 60 lb concrete to make 1 cubic yard (27 cu ft divided by 0.45 cu ft per bag). Contractors typically buy 66 bags per yard to allow for 10% subgrade waste.',
        },
        {
          q: 'How many 80 lb and 40 lb bags of concrete make a cubic yard?',
          a: 'One cubic yard equals 45 bags of 80 lb concrete (0.60 cu ft each) or 90 bags of 40 lb concrete (0.30 cu ft each) before waste.',
        },
        {
          q: 'Should I buy 60 lb or 80 lb concrete bags?',
          a: '80 lb bags cost 5% to 10% less per cubic foot and require 25% fewer rips, making them standard for crews. For solo DIYers lifting into a wheelbarrow or drum mixer, 60 lb bags reduce fatigue.',
        },
        {
          q: 'When is it cheaper to order a ready-mix concrete truck instead of bags?',
          a: 'The crossover point is typically 1.5 to 2.0 cubic yards (about 68 to 90 eighty-pound bags). Above 2 yards, ready-mix delivery is usually faster, stronger, and cost-competitive.',
        },
        {
          q: 'How many bags of concrete come on a full pallet?',
          a: 'Standard US home-center pallets hold 42 bags of 80 lb concrete (3,360 lbs), 56 bags of 60 lb concrete (3,360 lbs), or 80 bags of 40 lb concrete (3,200 lbs).',
        },
      ],
    }),
  },
  'ohio/hourly-paycheck-calculator': {
    pageTitle: 'Ohio Hourly Paycheck Calculator (2026 HB 96 2.75% Flat Tax) | AmericaCalculator',
    metaDescription:
      'Calculate your 2026 Ohio hourly take-home pay after Federal taxes, FICA, Ohio HB 96 flat 2.75% state tax over $26,050, Columbus/Cleveland/Cincinnati municipal tax, and 401(k).',
    metaKeywords:
      'ohio hourly paycheck calculator, ohio paycheck calculator 2026, ohio 2.75 flat tax calculator, columbus paycheck calculator, cleveland hourly take home pay',
    pageUpdated: '2026-11-18',
    schemaData: buildSchemaGraph({
      url: 'https://americacalculator.com/ohio/hourly-paycheck-calculator',
      name: 'Ohio Hourly Paycheck Calculator (2026)',
      description:
        '2026 Ohio hourly take-home pay calculator incorporating Ohio HB 96 flat 2.75% state income tax over $26,050, Federal brackets, FICA, Ohio municipal tax, and school district tax.',
      categoryLabel: 'Ohio Tax & Paycheck Hub',
      categoryUrl: 'https://americacalculator.com/ohio/',
      faqs: [
        {
          q: 'What is the Ohio state income tax rate in 2026?',
          a: 'Under Ohio HB 96, tax year 2026 uses a two-tier flat structure: 0% on Ohio taxable income up to $26,050, and a flat 2.75% on all taxable income above $26,050.',
        },
        {
          q: 'What are the 2026 municipal income tax rates in major Ohio cities?',
          a: 'Major Ohio city income tax rates are 2.5% in Columbus, Cleveland, Akron, Toledo, and Dayton; 1.8% in Cincinnati; and 2.75% in Youngstown. Unincorporated townships levy 0%.',
        },
        {
          q: 'Why is Ohio city tax still deducted on my 401(k) contribution?',
          a: 'Under Ohio Revised Code Chapter 718, employee 401(k) deferrals reduce Federal and Ohio state income tax but remain taxable wages for Ohio municipal income tax.',
        },
        {
          q: 'What is the Ohio School District Income Tax (SDIT)?',
          a: 'Roughly one-third of Ohio school districts levy a voter-approved local income tax (0.5% to 2.0%) based on where you live rather than where you work.',
        },
        {
          q: 'How much will I take home on $25 an hour in Ohio?',
          a: 'At $25/hr for 40 hours per week ($52,000/yr), a Single worker in a 2.5% Ohio city takes home roughly $1,615 bi-weekly (~$41,990/yr), or ~$1,665 bi-weekly in a 0% township.',
        },
      ],
    }),
  },
  'ohio/overtime-calculator': {
    pageTitle: 'Ohio Overtime Pay Calculator (2026 Gross & Net Take-Home) | AmericaCalculator',
    metaDescription:
      'Calculate Ohio 1.5x overtime and 2.0x double-time gross and net take-home pay for 2026. Includes Federal brackets, FICA, Ohio HB 96 2.75% flat tax, and Columbus/Cleveland/Cincinnati city tax.',
    metaKeywords:
      'overtime calculator ohio, ohio overtime pay calculator 2026, ohio time and a half calculator, ohio overtime tax calculator, cleveland overtime take home pay',
    pageUpdated: '2026-11-18',
    schemaData: buildSchemaGraph({
      url: 'https://americacalculator.com/ohio/overtime-calculator',
      name: 'Ohio Overtime Pay Calculator (2026)',
      description:
        'Calculate Ohio regular, 1.5x overtime, and 2.0x double-time gross and net paycheck totals using 2026 Federal brackets, FICA, Ohio HB 96 flat 2.75% state tax, and Ohio city tax rates.',
      categoryLabel: 'Ohio Tax & Paycheck Hub',
      categoryUrl: 'https://americacalculator.com/ohio/',
      faqs: [
        {
          q: 'Does Ohio require overtime pay after 8 hours in a single day?',
          a: 'No. Under Ohio Revised Code §4111.03 and federal FLSA law, non-exempt workers earn 1.5x overtime only after 40 hours actually worked in a workweek.',
        },
        {
          q: 'Can working overtime actually make my paycheck smaller?',
          a: 'No. US federal income tax brackets are marginal and Ohio uses a flat 2.75% rate above $26,050 in 2026, so working overtime always increases your net take-home pay.',
        },
        {
          q: 'Are Ohio municipal city taxes withheld on overtime pay?',
          a: 'Yes. Overtime and double-time wages are fully subject to Ohio municipal income taxes such as 2.5% in Columbus, Cleveland, Akron, Toledo, and Dayton or 1.8% in Cincinnati.',
        },
        {
          q: 'Does PTO or holiday pay count toward the 40-hour overtime threshold in Ohio?',
          a: 'No. Only hours actually worked count toward the statutory 40-hour overtime threshold unless an employer handbook or union contract provides otherwise.',
        },
        {
          q: 'Is double-time pay required on Sundays or holidays in Ohio?',
          a: 'No. Neither Ohio law nor the FLSA mandates double-time (2.0x) pay on weekends or holidays; it is strictly an employer policy or union benefit.',
        },
      ],
    }),
  },
};

export function getCalculatorSpec(item: {
  slug: string;
  name: string;
  keyword: string;
  cluster: string;
  engine: string;
}): CalcSpec {
  const { name, keyword, engine } = item;

  // Domain-tailored calculation engines for every scheduled calculator across Days 2-30
  if (engine === 'sonotube') {
    return {
      h1: `${name} — Pier & Cylinder Volume (US Imperial)`,
      lead: `Estimate exact cubic feet, cubic yards, and 60 lb or 80 lb concrete bags for round Sonotube forms, deck piers, and fence post footings. Uses standard US ASTM C387 bag yields and a 10% contractor overage option.`,
      formulaBlock: `Radius (ft)       = (Diameter in inches ÷ 2) ÷ 12\nVolume / Tube     = π × Radius² × Depth (ft)\nTotal Cu Ft       = Volume / Tube × Column Count × (1 + Waste% ÷ 100)\nCubic Yards       = Total Cu Ft ÷ 27\n80 lb Bags        = ceil(Total Cu Ft ÷ 0.60)  |  60 lb Bags = ceil(Total Cu Ft ÷ 0.45)`,
      assumptions: [
        'Standard US cardboard concrete tube forms come in 8", 10", 12", 14", 16", and 18" inside diameters.',
        'Set deck footings below local frost depth (typically 36"–48" in Northern US states, 18"–24" in Southern states).',
        'Add 10% waste to cover flared bell bottoms, uneven auger holes, and mixer loss.',
      ],
      inputs: [
        { id: 'dia', label: 'Tube Diameter (inches)', defaultVal: 12, min: 4, max: 48, step: 2, hint: 'Common sizes: 8", 10", 12", 16"' },
        { id: 'depth', label: 'Column Depth (feet)', defaultVal: 3.5, min: 0.5, max: 20, step: 0.5, hint: '3.5 ft = 42 inches frost depth' },
        { id: 'qty', label: 'Number of Columns / Piers', defaultVal: 8, min: 1, max: 200, step: 1 },
        { id: 'waste', label: 'Waste Allowance (%)', defaultVal: 10, min: 0, max: 25, step: 5 },
      ],
      primaryLabel: '80 lb Concrete Bags Needed',
      metrics: [
        { id: 'bags60', label: '60 lb Bags Needed' },
        { id: 'cuyd', label: 'Total Cubic Yards' },
        { id: 'cuft', label: 'Total Cubic Feet' },
        { id: 'cost', label: 'Est. 80 lb Bag Cost ($6.47/ea)' },
      ],
      jsBody: `
        var r = (v.dia / 2) / 12;
        var cuft = Math.PI * r * r * v.depth * v.qty * (1 + v.waste / 100);
        var cuyd = cuft / 27;
        var b80 = Math.ceil(cuft / 0.60);
        var b60 = Math.ceil(cuft / 0.45);
        return {
          primary: b80.toLocaleString('en-US') + ' Bags (80 lb)',
          primarySub: 'For ' + v.qty + ' piers (' + v.dia + '" dia × ' + v.depth + ' ft) incl. ' + v.waste + '% waste',
          metrics: {
            bags60: b60.toLocaleString('en-US') + ' bags',
            cuyd: cuyd.toFixed(2) + ' cu yd',
            cuft: cuft.toFixed(2) + ' cu ft',
            cost: '$' + Math.round(b80 * 6.47).toLocaleString('en-US')
          }
        };
      `,
      tableTitle: 'Sonotube Concrete Bags per Single 4-Foot Pier (US Reference)',
      tableHeaders: ['Tube Diameter', 'Area (sq ft)', 'Vol per 4 ft Pier (cu ft)', '60 lb Bags / Pier', '80 lb Bags / Pier', '8 Piers (80 lb +10%)'],
      tableRows: [
        ['6 in', '0.20', '0.79 cu ft', '2 bags', '2 bags', '12 bags'],
        ['8 in', '0.35', '1.40 cu ft', '4 bags', '3 bags', '21 bags'],
        ['10 in', '0.55', '2.18 cu ft', '5 bags', '4 bags', '32 bags'],
        ['12 in', '0.79', '3.14 cu ft', '7 bags', '6 bags', '47 bags'],
        ['14 in', '1.07', '4.28 cu ft', '10 bags', '8 bags', '63 bags'],
        ['16 in', '1.40', '5.59 cu ft', '13 bags', '10 bags', '82 bags'],
        ['18 in', '1.77', '7.07 cu ft', '16 bags', '12 bags', '104 bags'],
        ['24 in', '3.14', '12.57 cu ft', '28 bags', '21 bags', '185 bags'],
      ],
      examples: [
        {
          title: 'Example 1: 8 Deck Piers (12" Sonotubes × 3.5 ft Deep)',
          intro: 'Standard residential deck footing pour with 10% overage.',
          steps: [
            'Radius = 6 in = 0.50 ft; Area = 3.1416 × 0.25 = 0.785 sq ft',
            'Volume per pier = 0.785 × 3.5 ft = 2.75 cu ft; 8 piers = 22.0 cu ft',
            'With 10% waste = 24.2 cu ft (0.90 cu yd) → 41 bags of 80 lb concrete (~$265)',
          ],
        },
        {
          title: 'Example 2: 12 Pole Barn / Porch Piers (16" Tubes × 4 ft Deep)',
          intro: 'Heavier structural load requiring 16-inch cylinders.',
          steps: [
            'Radius = 8 in = 0.667 ft; Volume per pier = 5.59 cu ft',
            '12 piers × 5.59 × 1.10 waste = 73.7 cu ft (2.73 cu yd)',
            'At 2.73 cu yd (123 eighty-pound bags), ordering a ready-mix truck beats bagging.',
          ],
        },
      ],
      faqs: [
        { q: 'How many 80 lb bags of concrete fill a 12-inch by 4-foot Sonotube?', a: 'A single 12-inch × 4-foot Sonotube holds 3.14 cubic feet, requiring 6 bags of 80 lb concrete (or 7 bags of 60 lb concrete) before waste.' },
        { q: 'How many 60 lb bags fit in an 8-inch by 4-foot Sonotube?', a: 'An 8-inch × 4-foot tube holds 1.40 cubic feet, which takes 4 bags of 60 lb concrete (0.45 cu ft each).' },
        { q: 'Should I pour a wider bell footing at the bottom of a Sonotube?', a: 'Most US building departments require a 16"–20" footing pad or plastic bell base (e.g., Bigfoot) beneath 10"–12" Sonotubes to distribute deck tributary loads.' },
        { q: 'Do you leave Sonotubes in the ground after concrete cures?', a: 'Yes, below-grade cardboard forms stay buried, while the exposed upper 6–12 inches above grade are peeled off after 24–48 hours for a clean finish.' },
        { q: 'How much rebar goes inside a residential Sonotube pier?', a: 'Typical IRC residential piers use two to three vertical #4 rebar sticks tied with #3 hoops, stopping 3 inches short of the soil bottom and top surface.' },
      ],
    };
  }

  if (engine === 'gravel' || engine === 'topsoil' || engine === 'mulch' || engine === 'excavation') {
    const isMulch = engine === 'mulch';
    const isTopsoil = engine === 'topsoil';
    const isExcav = engine === 'excavation';
    const density = isMulch ? 800 : isTopsoil ? 2200 : isExcav ? 2700 : 2800;
    const priceYd = isMulch ? 42 : isTopsoil ? 48 : isExcav ? 35 : 58;
    const unitName = isMulch ? 'Mulch' : isTopsoil ? 'Topsoil' : isExcav ? 'Loose Spoil Dirt' : 'Crushed Gravel';
    return {
      h1: `${name} — Cubic Yards & Short Tons (US Imperial)`,
      lead: `Estimate exact cubic yards, US short tons, dump truck loads, and bulk material cost for ${unitName.toLowerCase()} projects using real US aggregate and soil density constants.`,
      formulaBlock: `Volume (cu ft)    = Length (ft) × Width (ft) × (Depth in inches ÷ 12)\nCubic Yards       = (Volume ÷ 27) × (1 + Compaction/Swell% ÷ 100)\nShort Tons (US)   = (Cubic Yards × ${density} lbs/yd³) ÷ 2,000\n10-Ton Truck Loads= ceil(Short Tons ÷ 10)`,
      assumptions: [
        `Default bulk weight is ${density.toLocaleString('en-US')} lbs per cubic yard (${(density / 2000).toFixed(2)} US short tons/yd³).`,
        'Crushed stone (#57, ABC road base) compacts 10%–15% under a plate compactor; order extra depth accordingly.',
        'Standard US single-axle dump trucks haul ~5–7 tons; tandem-axle dump trucks haul ~12–15 short tons.',
      ],
      inputs: [
        { id: 'len', label: 'Area Length (feet)', defaultVal: 40, min: 1, max: 2000, step: 1 },
        { id: 'wid', label: 'Area Width (feet)', defaultVal: 12, min: 1, max: 2000, step: 1 },
        { id: 'depth', label: 'Depth / Thickness (inches)', defaultVal: isMulch ? 3 : 4, min: 1, max: 120, step: 0.5 },
        { id: 'factor', label: isExcav ? 'Soil Swell Factor (%)' : 'Compaction / Waste (%)', defaultVal: isExcav ? 20 : 10, min: 0, max: 40, step: 5 },
      ],
      primaryLabel: `${unitName} Cubic Yards Needed`,
      metrics: [
        { id: 'tons', label: 'Weight (US Short Tons)' },
        { id: 'bags', label: isMulch ? '2 Cu Ft Bags Equivalent' : '10-Ton Dump Loads' },
        { id: 'sqft', label: 'Total Coverage Area' },
        { id: 'cost', label: `Est. Bulk Cost ($${priceYd}/yd³)` },
      ],
      jsBody: `
        var sqft = v.len * v.wid;
        var cuft = sqft * (v.depth / 12) * (1 + v.factor / 100);
        var yds = cuft / 27;
        var tons = (yds * ${density}) / 2000;
        var bagsOrLoads = ${isMulch ? 'Math.ceil(cuft / 2) + " bags (2 cu ft)"' : 'Math.max(1, Math.ceil(tons / 10)) + " load(s)"'};
        return {
          primary: yds.toFixed(2) + ' cu yd',
          primarySub: tons.toFixed(2) + ' US short tons (incl. ' + v.factor + '% allowance)',
          metrics: {
            tons: tons.toFixed(2) + ' tons',
            bags: bagsOrLoads,
            sqft: Math.round(sqft).toLocaleString('en-US') + ' sq ft',
            cost: '$' + Math.round(yds * ${priceYd}).toLocaleString('en-US')
          }
        };
      `,
      tableTitle: `Common US ${unitName} Project Volumes (Cubic Yards & Short Tons)`,
      tableHeaders: ['Area (sq ft)', 'Depth', 'Cubic Yards (Exact)', 'With 10% Allowance', 'Short Tons (US)', 'Est. Bulk Cost'],
      tableRows: [100, 200, 300, 500, 750, 1000, 1500, 2000].map((sq) => {
        const d = isMulch ? 3 : 4;
        const yd = (sq * (d / 12)) / 27;
        const yd10 = yd * 1.1;
        const t = (yd10 * density) / 2000;
        return [
          `${sq.toLocaleString('en-US')} sq ft`,
          `${d} in`,
          `${yd.toFixed(2)} yd³`,
          `${yd10.toFixed(2)} yd³`,
          `${t.toFixed(2)} tons`,
          `$${Math.round(yd10 * priceYd).toLocaleString('en-US')}`,
        ];
      }),
      examples: [
        {
          title: `Example 1: 12×40 ft Residential Driveway / Bed (${isMulch ? '3"' : '4"'} Deep)`,
          intro: `Standard 480 sq ft residential project with 10% compaction/waste allowance.`,
          steps: [
            `Area = 12 ft × 40 ft = 480 sq ft; Depth = ${isMulch ? '3' : '4'} in (${(isMulch ? 3 / 12 : 4 / 12).toFixed(2)} ft)`,
            `Raw Volume = ${(480 * (isMulch ? 3 : 4) / 12 / 27).toFixed(2)} cu yd; +10% = ${(480 * (isMulch ? 3 : 4) / 12 / 27 * 1.1).toFixed(2)} cu yd`,
            `Total Weight ≈ ${((480 * (isMulch ? 3 : 4) / 12 / 27 * 1.1 * density) / 2000).toFixed(2)} short tons`,
          ],
        },
        {
          title: `Example 2: 2,000 sq ft Commercial Pad / Yard (${isMulch ? '3"' : '6"'} Deep)`,
          intro: `Larger site requiring tandem dump truck scheduling.`,
          steps: [
            `Raw Volume = ${(2000 * (isMulch ? 3 : 6) / 12 / 27).toFixed(2)} cu yd`,
            `With 10% allowance = ${(2000 * (isMulch ? 3 : 6) / 12 / 27 * 1.1).toFixed(2)} cu yd`,
            `Weight ≈ ${((2000 * (isMulch ? 3 : 6) / 12 / 27 * 1.1 * density) / 2000).toFixed(1)} US short tons`,
          ],
        },
      ],
      faqs: [
        { q: `How much does a cubic yard of ${unitName.toLowerCase()} weigh?`, a: `Typical ${unitName.toLowerCase()} weighs roughly ${density.toLocaleString('en-US')} lbs (${(density / 2000).toFixed(2)} US short tons) per cubic yard, varying slightly with moisture and gradation.` },
        { q: `How many square feet does 1 cubic yard cover at 4 inches deep?`, a: `One cubic yard (27 cu ft) covers 81 square feet at 4 inches deep, 108 square feet at 3 inches deep, or 162 square feet at 2 inches deep.` },
        { q: `Should I buy ${unitName.toLowerCase()} by the bag or in bulk?`, a: `Above 2 to 3 cubic yards, bulk delivery from a local landscape supply or quarry is usually 40%–60% cheaper than retail bags.` },
        { q: `Why should I add a compaction or swell allowance?`, a: `Loose gravel and soil settle 10%–15% once watered or plate-compacted, whereas excavated bank dirt swells 15%–25% when dug into dump trucks.` },
        { q: `How much fits in a standard pickup truck bed?`, a: `A half-ton US pickup safely carries roughly 0.5 to 0.75 cubic yards of stone/soil (1,500–2,000 lb payload limit) or up to 2 cubic yards of dry hardwood mulch.` },
      ],
    };
  }

  if (engine === 'loan_amort' || engine === 'hard_money' || engine === 'sba_504' || engine === 'sba_guaranty' || engine === 'cd_interest' || engine === 'mca') {
    const isCd = engine === 'cd_interest';
    const isMca = engine === 'mca';
    const isSba504 = engine === 'sba_504';
    const isHardMoney = engine === 'hard_money';
    if (isCd) {
      return {
        h1: `${name} — APY & After-Tax Yield (2026 USD)`,
        lead: `Calculate exact US Certificate of Deposit (CD) maturity value, compound interest earned, APY, and after-tax net return across monthly, daily, or quarterly compounding.`,
        formulaBlock: `Maturity Value A  = P × (1 + r ÷ n)^(n × t)\nEffective APY     = (1 + r ÷ n)^n − 1\nAfter-Tax Profit  = (A − P) × (1 − Marginal Tax Rate)`,
        assumptions: [
          'US bank CD interest is taxed as ordinary income (reported on Form 1099-INT) in the year credited.',
          'Early withdrawal penalties typically equal 3–12 months of simple interest depending on CD term.',
          'FDIC and NCUA deposit insurance covers up to $250,000 per depositor, per insured bank, per ownership category.',
        ],
        inputs: [
          { id: 'principal', label: 'Initial CD Deposit ($)', defaultVal: 25000, min: 500, max: 5000000, step: 500 },
          { id: 'apr', label: 'Annual Interest Rate — APR (%)', defaultVal: 4.35, min: 0.1, max: 12, step: 0.05 },
          { id: 'months', label: 'CD Term (Months)', defaultVal: 12, min: 1, max: 120, step: 1 },
          { id: 'tax', label: 'Combined Tax Bracket (%)', defaultVal: 24, min: 0, max: 50, step: 1 },
        ],
        primaryLabel: 'CD Value at Maturity',
        metrics: [
          { id: 'interest', label: 'Total Gross Interest' },
          { id: 'apy', label: 'Effective APY (Daily Comp.)' },
          { id: 'aftertax', label: 'After-Tax Net Interest' },
          { id: 'afterval', label: 'After-Tax Ending Balance' },
        ],
        jsBody: `
          var t = v.months / 12;
          var r = v.apr / 100;
          var n = 365;
          var amt = v.principal * Math.pow(1 + r / n, n * t);
          var interest = amt - v.principal;
          var apy = (Math.pow(1 + r / n, n) - 1) * 100;
          var netInt = interest * (1 - v.tax / 100);
          return {
            primary: '$' + Math.round(amt).toLocaleString('en-US'),
            primarySub: 'Earned $' + interest.toFixed(2) + ' gross over ' + v.months + ' months',
            metrics: {
              interest: '$' + interest.toFixed(2),
              apy: apy.toFixed(2) + '%',
              aftertax: '$' + netInt.toFixed(2),
              afterval: '$' + Math.round(v.principal + netInt).toLocaleString('en-US')
            }
          };
        `,
        tableTitle: '2026 US CD Maturity Reference Table (4.35% APR, Daily Compounding)',
        tableHeaders: ['Deposit Amount', '6-Month Interest', '12-Month Interest', '24-Month Interest', '36-Month Interest', '60-Month Interest'],
        tableRows: [5000, 10000, 25000, 50000, 75000, 100000, 150000, 250000].map((p) => {
          const calc = (m: number) => '$' + Math.round(p * (Math.pow(1 + 0.0435 / 365, 365 * (m / 12)) - 1)).toLocaleString('en-US');
          return [`$${p.toLocaleString('en-US')}`, calc(6), calc(12), calc(24), calc(36), calc(60)];
        }),
        examples: [
          { title: 'Example 1: $25,000 12-Month CD at 4.35% APR', intro: 'Daily compounding for a saver in the 24% combined federal/state bracket.', steps: ['APY = (1 + 0.0435/365)^365 − 1 = 4.45%', 'Gross interest = $1,111.50; Ending balance = $26,111.50', 'After 24% tax ($266.76), net interest = $844.74'] },
          { title: 'Example 2: $100,000 36-Month CD Ladder Anchor at 4.10% APR', intro: 'Locking in multi-year yield with full FDIC coverage.', steps: ['3-Year compound growth = $100,000 × 1.1309 = $113,088', 'Total gross interest = $13,088 (~$4,363/yr avg)', 'Compare against US Treasury bills if your state levies high income tax (Treasuries are state-tax exempt).'] },
        ],
        faqs: [
          { q: 'What is the difference between CD APR and APY?', a: 'APR is the nominal annual interest rate without compounding, while APY includes the effect of daily or monthly compounding over one year.' },
          { q: 'Are CD earnings taxed every year or only at maturity?', a: 'For multi-year CDs, banks issue Form 1099-INT annually for interest credited each calendar year, even if you cannot withdraw it without penalty until maturity.' },
          { q: 'Are CDs safer than high-yield savings accounts?', a: 'Both carry identical $250,000 FDIC/NCUA insurance; CDs lock in your rate for the full term while HYSA rates can drop anytime the Federal Reserve cuts rates.' },
          { q: 'What is a typical CD early withdrawal penalty?', a: 'Most US banks charge 90 days of interest on CDs under 1 year and 180 to 365 days of interest on 2- to 5-year CDs.' },
          { q: 'When are US Treasury bills better than a bank CD?', a: 'In high-tax states like California, New York, or New Jersey, T-bills are exempt from state and local income tax, often boosting after-tax yield above a comparable CD.' },
        ],
      };
    }

    if (isMca) {
      return {
        h1: `${name} (2026 Factor Rate to APR)`,
        lead: `Convert a Merchant Cash Advance (MCA) factor rate and holdback term into total payback cost, daily/weekly payment, and true annualized APR so business owners can compare against SBA or bank loans.`,
        formulaBlock: `Total Payback ($) = Advance Amount × Factor Rate\nTotal Cost ($)    = Total Payback − Advance Amount + Origination Fee\nDaily Payment ($) = Total Payback ÷ Business Days in Term (21/month)\nEffective APR     ≈ ((Total Cost ÷ Advance Amount) ÷ (Term Months ÷ 12)) × 1.85`,
        assumptions: [
          'MCA factor rates (typically 1.15 to 1.48) are NOT interest rates; they apply to the entire principal regardless of rapid daily amortization.',
          'Because principal is repaid every business day, the true effective APR is roughly 1.8×–2.0× the simple annualized fee rate.',
          'Most MCAs offer little or no prepayment interest savings unless an explicit early-payoff addendum is negotiated.',
        ],
        inputs: [
          { id: 'adv', label: 'Advance Amount ($)', defaultVal: 50000, min: 5000, max: 1000000, step: 1000 },
          { id: 'factor', label: 'MCA Factor Rate (e.g., 1.32)', defaultVal: 1.32, min: 1.05, max: 1.75, step: 0.01 },
          { id: 'months', label: 'Repayment Term (Months)', defaultVal: 9, min: 2, max: 24, step: 1 },
          { id: 'fee', label: 'Origination / Admin Fee ($)', defaultVal: 1500, min: 0, max: 25000, step: 100 },
        ],
        primaryLabel: 'Estimated Effective Annual APR',
        metrics: [
          { id: 'payback', label: 'Total Payback Amount' },
          { id: 'cost', label: 'Total Financing Cost' },
          { id: 'daily', label: 'Est. Business-Day Debit' },
          { id: 'weekly', label: 'Est. Weekly Debit' },
        ],
        jsBody: `
          var payback = v.adv * v.factor;
          var cost = (payback - v.adv) + v.fee;
          var bizDays = v.months * 21;
          var daily = payback / bizDays;
          var weekly = daily * 5;
          var simpleAnn = (cost / v.adv) / (v.months / 12);
          var effApr = simpleAnn * 1.88 * 100;
          return {
            primary: effApr.toFixed(1) + '% APR',
            primarySub: 'Factor ' + v.factor.toFixed(2) + ' over ' + v.months + ' months costs $' + Math.round(cost).toLocaleString('en-US'),
            metrics: {
              payback: '$' + Math.round(payback).toLocaleString('en-US'),
              cost: '$' + Math.round(cost).toLocaleString('en-US'),
              daily: '$' + daily.toFixed(2) + ' / day',
              weekly: '$' + weekly.toFixed(2) + ' / wk'
            }
          };
        `,
        tableTitle: 'MCA Factor Rate to True Effective APR Conversion Table ($50,000 Advance)',
        tableHeaders: ['Factor Rate', 'Term', 'Total Payback', 'Financing Cost', 'Est. Daily Debit', 'Approx. Effective APR'],
        tableRows: [
          ['1.15', '6 Months', '$57,500', '$7,500', '$456/day', '~56% APR'],
          ['1.20', '6 Months', '$60,000', '$10,000', '$476/day', '~75% APR'],
          ['1.25', '9 Months', '$62,500', '$12,500', '$331/day', '~63% APR'],
          ['1.30', '9 Months', '$65,000', '$15,000', '$344/day', '~75% APR'],
          ['1.35', '9 Months', '$67,500', '$17,500', '$357/day', '~88% APR'],
          ['1.35', '12 Months', '$67,500', '$17,500', '$268/day', '~66% APR'],
          ['1.40', '12 Months', '$70,000', '$20,000', '$278/day', '~75% APR'],
          ['1.45', '12 Months', '$72,500', '$22,500', '$288/day', '~85% APR'],
        ],
        examples: [
          { title: 'Example 1: $50,000 Restaurant MCA at 1.32 Factor (9 Months)', intro: 'With $1,500 origination fee deducted from funding.', steps: ['Total payback = $50,000 × 1.32 = $66,000; Total cost = $17,500', 'Daily ACH debit across ~189 business days = $349.21/day', 'Effective annualized APR ≈ 87.7% — compare against an SBA 7(a) loan (~10.5%–13% APR).'] },
          { title: 'Example 2: $100,000 Seasonal Inventory MCA at 1.22 Factor (6 Months)', intro: 'Short-term bridge paid off over 126 business days.', steps: ['Total payback = $122,000 ($22,000 fee cost)', 'Daily ACH debit ≈ $968/business day (~$4,841/wk)', 'Only viable if gross profit margin on inventory exceeds 35%–45%.'] },
        ],
        faqs: [
          { q: 'Why is an MCA APR so much higher than the factor rate?', a: 'A 1.30 factor rate looks like 30%, but because you repay principal every business day over 6 to 12 months, your average outstanding balance is roughly half the advance—nearly doubling the true APR.' },
          { q: 'Are Merchant Cash Advances regulated like bank loans?', a: 'MCAs are structured as purchases of future receivables rather than traditional loans, though states like California and New York now require commercial APR disclosures.' },
          { q: 'Do I save money by paying off an MCA early?', a: 'Usually not—most MCA agreements require the full factor payback regardless of early payoff unless a written early-payoff discount schedule is included.' },
          { q: 'What is MCA stacking and why is it dangerous?', a: 'Stacking means taking a second or third MCA while still repaying the first, creating multiple daily ACH debits that frequently trigger cash-flow insolvency.' },
          { q: 'What are cheaper alternatives to an MCA in 2026?', a: 'SBA 7(a) working capital loans, bank lines of credit, equipment financing, and invoice factoring typically cost 9% to 24% APR instead of 55% to 120% APR.' },
        ],
      };
    }

    // Standard US Loan / SBA 504 / Hard Money / Specialty Loan Amortization
    const defaultAmt = isSba504 ? 1000000 : isHardMoney ? 250000 : 120000;
    const defaultDown = isSba504 ? 10 : isHardMoney ? 20 : 15;
    const defaultApr = isSba504 ? 6.75 : isHardMoney ? 11.5 : 8.25;
    const defaultYrs = isHardMoney ? 1 : isSba504 ? 20 : 15;
    return {
      h1: `${name} (2026 US Payment & Interest Estimator)`,
      lead: `Estimate monthly payments, total interest cost, down payment cash required, and full payoff schedule in USD for ${keyword} scenarios under 2026 US lending guidelines.`,
      formulaBlock: `Loan Principal P  = Purchase Price × (1 − Down Payment% ÷ 100)\nMonthly Rate r    = (APR ÷ 100) ÷ 12   |   Months n = Years × 12\nMonthly Payment M = P × [r(1 + r)^n] ÷ [(1 + r)^n − 1]\nTotal Interest    = (M × n) − P`,
      assumptions: [
        'Rates vary by credit score (FICO), loan-to-value (LTV), collateral age, and lender origination fees.',
        isSba504
          ? 'SBA 504 financing uses a 50% first-lien bank loan, 40% CDC debenture (up to 25 years), and 10% borrower equity.'
          : isHardMoney
          ? 'Hard money rehab loans are typically 6–18 month interest-only notes charging 2–3 origination points upfront.'
          : 'Excludes property taxes, hazard insurance, slip/storage fees, or dealer doc fees unless budgeted separately.',
        'Prepaying even 1 extra monthly principal payment per year can cut 2–3 years off long-term amortization.',
      ],
      inputs: [
        { id: 'price', label: 'Asset / Project Price ($)', defaultVal: defaultAmt, min: 5000, max: 25000000, step: 1000 },
        { id: 'down', label: 'Down Payment (%)', defaultVal: defaultDown, min: 0, max: 80, step: 1 },
        { id: 'apr', label: 'Interest Rate — APR (%)', defaultVal: defaultApr, min: 1, max: 25, step: 0.125 },
        { id: 'years', label: 'Loan Term (Years)', defaultVal: defaultYrs, min: 1, max: 30, step: 1 },
      ],
      primaryLabel: isHardMoney ? 'Monthly Interest-Only Payment' : 'Estimated Monthly Payment (P&I)',
      metrics: [
        { id: 'principal', label: 'Financed Loan Amount' },
        { id: 'downcash', label: 'Down Payment Cash' },
        { id: 'interest', label: 'Total Interest Paid' },
        { id: 'total', label: 'Total Loan Payments' },
      ],
      jsBody: `
        var downCash = v.price * (v.down / 100);
        var P = Math.max(0, v.price - downCash);
        var r = (v.apr / 100) / 12;
        var n = Math.max(1, Math.round(v.years * 12));
        var M = ${isHardMoney ? 'P * r' : 'r > 0 ? P * (r * Math.pow(1 + r, n)) / (Math.pow(1 + r, n) - 1) : P / n'};
        var totalPay = ${isHardMoney ? '(M * n) + P' : 'M * n'};
        var totalInt = Math.max(0, totalPay - P);
        return {
          primary: '$' + M.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) + ' / mo',
          primarySub: 'On $' + Math.round(P).toLocaleString('en-US') + ' financed at ' + v.apr.toFixed(2) + '% for ' + v.years + ' yrs',
          metrics: {
            principal: '$' + Math.round(P).toLocaleString('en-US'),
            downcash: '$' + Math.round(downCash).toLocaleString('en-US'),
            interest: '$' + Math.round(totalInt).toLocaleString('en-US'),
            total: '$' + Math.round(totalPay).toLocaleString('en-US')
          }
        };
      `,
      tableTitle: `2026 ${name} Payment Tiers (${defaultApr}% APR, ${defaultDown}% Down)`,
      tableHeaders: ['Purchase Price', 'Down Payment', 'Loan Amount', 'Monthly Payment', 'Total Interest', 'Total Cost'],
      tableRows: [0.5, 0.75, 1, 1.25, 1.5, 2, 2.5, 3].map((mult) => {
        const pr = Math.round(defaultAmt * mult);
        const dn = pr * (defaultDown / 100);
        const P = pr - dn;
        const r = defaultApr / 100 / 12;
        const n = defaultYrs * 12;
        const M = isHardMoney ? P * r : (P * (r * Math.pow(1 + r, n))) / (Math.pow(1 + r, n) - 1);
        const totInt = isHardMoney ? M * n : M * n - P;
        return [
          `$${pr.toLocaleString('en-US')}`,
          `$${Math.round(dn).toLocaleString('en-US')}`,
          `$${Math.round(P).toLocaleString('en-US')}`,
          `$${Math.round(M).toLocaleString('en-US')}/mo`,
          `$${Math.round(totInt).toLocaleString('en-US')}`,
          `$${Math.round(P + totInt).toLocaleString('en-US')}`,
        ];
      }),
      examples: [
        {
          title: `Example 1: Standard $${defaultAmt.toLocaleString('en-US')} Purchase (${defaultDown}% Down)`,
          intro: `Financing at ${defaultApr}% APR over ${defaultYrs} years.`,
          steps: [
            `Down payment = $${Math.round(defaultAmt * (defaultDown / 100)).toLocaleString('en-US')}; Loan Principal = $${Math.round(defaultAmt * (1 - defaultDown / 100)).toLocaleString('en-US')}`,
            `Apply standard US monthly amortization formula at ${(defaultApr / 12).toFixed(3)}% per month`,
            `Review total interest versus putting an extra 5% down to improve underwriting terms.`,
          ],
        },
        {
          title: `Example 2: Larger $${(defaultAmt * 2).toLocaleString('en-US')} Deal with 20% Down`,
          intro: `Higher equity contribution to reduce monthly debt service and strengthen DSCR.`,
          steps: [
            `20% down payment = $${Math.round(defaultAmt * 0.4).toLocaleString('en-US')}; Loan Principal = $${Math.round(defaultAmt * 1.6).toLocaleString('en-US')}`,
            `Lower LTV typically qualifies for 0.25%–0.50% lower APR from US lenders`,
            `Always reserve 3–6 months of debt service plus closing costs in liquid reserves.`,
          ],
        },
      ],
      faqs: [
        { q: `What credit score do US lenders require for ${keyword.replace(/ calculator$/, '')}s?`, a: `Most mainstream banks and credit unions look for a 680+ FICO score for best pricing, while specialty or asset-based lenders may approve 620–660 with a larger down payment.` },
        { q: `How much down payment is typically required?`, a: `Typical down payments range from 10% to 25% depending on asset type, collateral age, and borrower experience.` },
        { q: `Does this estimate include closing costs, taxes, or insurance?`, a: `The core payment reflects principal and interest (P&I). Budget separately for origination fees (1%–3%), sales/transfer tax, title/filing fees, and required insurance.` },
        { q: `How can I lower total interest paid?`, a: `Shortening the amortization term, putting an extra 5%–10% down, or making extra principal-only payments early in the schedule yields the largest interest savings.` },
        { q: `Are there prepayment penalties on US specialty or commercial loans?`, a: `Consumer loans rarely carry prepayment penalties, whereas SBA 7(a) 15+ year real estate loans, SBA 504 debentures, and commercial notes often carry step-down prepayment fees in years 1–5.` },
      ],
    };
  }

  if (engine === 'closing_cost') {
    return {
      h1: `${name} (2026 Buyer & Seller Estimate)`,
      lead: `Estimate 2026 buyer and seller real estate closing costs in USD—including loan origination, title insurance, escrow/attorney fees, transfer taxes, and prepaid property tax/insurance escrows.`,
      formulaBlock: `Loan Amount       = Home Price × (1 − Down Payment% ÷ 100)\nLender & Title    = (Loan Amount × Lender Fee%) + Title & Escrow Fees\nTransfer / Tax    = Home Price × State/Local Transfer Tax%\nTotal Cash to Close = Down Payment + Total Closing Costs`,
      assumptions: [
        'US buyer closing costs typically average 2.0% to 5.0% of the purchase price depending on state transfer taxes and lender points.',
        'Sellers separately pay brokerage commissions (negotiable) plus state/county transfer taxes where customary.',
        'Prepaid items (homeowners insurance, daily mortgage interest, and property tax escrow reserves) are separate from one-time settlement fees.',
      ],
      inputs: [
        { id: 'price', label: 'Home Purchase Price ($)', defaultVal: 425000, min: 50000, max: 10000000, step: 5000 },
        { id: 'down', label: 'Down Payment (%)', defaultVal: 10, min: 0, max: 100, step: 1 },
        { id: 'lender', label: 'Lender & Origination Fees (%)', defaultVal: 1.0, min: 0, max: 4, step: 0.25 },
        { id: 'tax', label: 'State/Local Transfer & Recording (%)', defaultVal: 0.75, min: 0, max: 4, step: 0.05 },
      ],
      primaryLabel: 'Estimated Buyer Closing Costs',
      metrics: [
        { id: 'pct', label: 'Closing Costs (% of Price)' },
        { id: 'cash', label: 'Total Cash to Close' },
        { id: 'title', label: 'Title, Appraisal & Settlement' },
        { id: 'prepaid', label: 'Est. Tax & Insurance Escrows' },
      ],
      jsBody: `
        var downCash = v.price * (v.down / 100);
        var loan = Math.max(0, v.price - downCash);
        var lenderFee = loan * (v.lender / 100);
        var transfer = v.price * (v.tax / 100);
        var titleEscrow = 1250 + (v.price * 0.0045);
        var prepaids = 950 + (v.price * 0.005);
        var closing = lenderFee + transfer + titleEscrow + prepaids;
        var pct = v.price > 0 ? (closing / v.price) * 100 : 0;
        return {
          primary: '$' + Math.round(closing).toLocaleString('en-US'),
          primarySub: pct.toFixed(2) + '% of purchase price (excluding down payment)',
          metrics: {
            pct: pct.toFixed(2) + '%',
            cash: '$' + Math.round(downCash + closing).toLocaleString('en-US'),
            title: '$' + Math.round(titleEscrow).toLocaleString('en-US'),
            prepaid: '$' + Math.round(prepaids).toLocaleString('en-US')
          }
        };
      `,
      tableTitle: `2026 ${name} Tiers (10% Down, Standard Title & Prepaids)`,
      tableHeaders: ['Home Price', 'Loan Amount', 'Est. Closing Costs', '% of Price', '10% Down Payment', 'Total Cash to Close'],
      tableRows: [250000, 325000, 400000, 500000, 650000, 800000, 1000000, 1500000].map((pr) => {
        const dn = pr * 0.1;
        const ln = pr - dn;
        const cc = ln * 0.01 + pr * 0.0075 + (1250 + pr * 0.0045) + (950 + pr * 0.005);
        return [
          `$${pr.toLocaleString('en-US')}`,
          `$${ln.toLocaleString('en-US')}`,
          `$${Math.round(cc).toLocaleString('en-US')}`,
          `${((cc / pr) * 100).toFixed(2)}%`,
          `$${dn.toLocaleString('en-US')}`,
          `$${Math.round(dn + cc).toLocaleString('en-US')}`,
        ];
      }),
      examples: [
        { title: 'Example 1: $425,000 Primary Residence (10% Down)', intro: 'Conventional loan with 1.0% lender fees and 0.75% transfer/recording fees.', steps: ['Loan Amount = $382,500; Lender origination/underwriting ≈ $3,825', 'Title/settlement (~$3,163) + Transfer/recording ($3,188) + Prepaids (~$3,075)', 'Estimated buyer closing costs ≈ $13,250 (~3.12%); Total cash to close ≈ $55,750.'] },
        { title: 'Example 2: $750,000 Move-Up Home (20% Down)', intro: 'Avoiding PMI with 20% down while budgeting for title and escrows.', steps: ['Down payment = $150,000; Loan Amount = $600,000', 'Total closing costs ≈ $21,375 (~2.85% of price)', 'Compare Section A lender fees across 3 Loan Estimates (LE) to save $1,500–$3,000.'] },
      ],
      faqs: [
        { q: 'How much are buyer closing costs on average?', a: 'Most US homebuyers pay between 2% and 5% of the home purchase price in closing costs, depending on state transfer taxes, mortgage type, and prepaid tax escrows.' },
        { q: 'Can the seller pay my closing costs?', a: 'Yes—seller concessions can cover up to 3%–6% of the purchase price on conventional/FHA loans (and up to 4% on VA loans) subject to loan-to-value caps.' },
        { q: 'Which closing costs are easiest to shop for?', a: 'Under TRID Loan Estimate rules, borrowers can shop Section A lender origination charges and Section C title/settlement services to reduce upfront cash needed.' },
        { q: 'Are closing costs included in my down payment?', a: 'No. Closing costs are paid in addition to your down payment (minus your earnest money deposit already held in escrow).' },
        { q: 'When do I receive exact final closing figures?', a: 'Federal law requires your lender to deliver an official Closing Disclosure (CD) at least 3 business days before settlement.' },
      ],
    };
  }

  if (engine === 'cap_rate' || engine === 'coc_return' || engine === 'dscr' || engine === 'brrrr' || engine === 'exchange_1031' || engine === 'price_to_rent' || engine === 'home_inspection' || engine === 'house_flip' || engine === 'grm' || engine === 'airbnb' || engine === 'amazon_roi' || engine === 'markup' || engine === 'rate_cap' || engine === 'freight_class') {
    const isFlip = engine === 'house_flip';
    const isMarkup = engine === 'markup';
    const isDscr = engine === 'dscr';
    return {
      h1: `${name} (2026 US Investor & Business Tool)`,
      lead: `Run fast, institutional-grade ${keyword} math in US dollars with realistic operating expense ratios, financing sensitivity, and side-by-side benchmark tiers.`,
      formulaBlock: isFlip
        ? `70% Rule MAO ($)  = (After-Repair Value × 0.70) − Estimated Rehab Cost\nProjected Profit  = ARV − Purchase Price − Rehab − Holding & Selling Costs (~10% ARV)`
        : isMarkup
        ? `Sale Price ($)    = Unit Cost × (1 + Markup% ÷ 100)\nGross Profit ($)  = Sale Price − Unit Cost\nGross Margin (%)  = (Gross Profit ÷ Sale Price) × 100`
        : isDscr
        ? `DSCR Ratio        = Monthly Gross Rent ÷ Monthly PITIA (Principal + Interest + Tax + Ins + HOA)\nTarget Minimum    = 1.20× – 1.25× for standard US DSCR investment loans`
        : `Annual NOI ($)    = (Monthly Gross Income × 12) × (1 − Operating Expense Ratio%)\nCore Metric       = (Annual NOI ÷ Total Purchase / Investment Value) × 100`,
      assumptions: [
        'Always stress-test vacancy (5%–10%), maintenance reserves (8%–10%), and local property taxes before signing a purchase contract.',
        'Do not confuse retail markup (percentage of cost) with gross margin (percentage of selling price).',
        'Verify lender DSCR thresholds, closing fees, and CPA tax rules on depreciation or 1031 exchange timelines.',
      ],
      inputs: isMarkup
        ? [
            { id: 'a', label: 'Wholesale / Landed Unit Cost ($)', defaultVal: 40, min: 0.5, max: 100000, step: 1 },
            { id: 'b', label: 'Target Markup (%)', defaultVal: 60, min: 1, max: 500, step: 5 },
            { id: 'c', label: 'Monthly Unit Volume', defaultVal: 250, min: 1, max: 1000000, step: 10 },
            { id: 'd', label: 'Fulfillment / Fees per Unit ($)', defaultVal: 4, min: 0, max: 5000, step: 0.5 },
          ]
        : [
            { id: 'a', label: isFlip ? 'After-Repair Value — ARV ($)' : 'Property / Investment Value ($)', defaultVal: 350000, min: 10000, max: 50000000, step: 5000 },
            { id: 'b', label: isFlip ? 'Estimated Rehab Budget ($)' : 'Monthly Gross Revenue / Rent ($)', defaultVal: isFlip ? 55000 : 2900, min: 100, max: 1000000, step: 100 },
            { id: 'c', label: isFlip ? 'Holding & Selling Costs (% ARV)' : 'Operating Expense Ratio (%)', defaultVal: isFlip ? 10 : 35, min: 0, max: 85, step: 1 },
            { id: 'd', label: isFlip ? 'Target Purchase Price ($)' : 'Monthly Debt Service / PITIA ($)', defaultVal: isFlip ? 185000 : 1950, min: 0, max: 5000000, step: 50 },
          ],
      primaryLabel: isFlip ? 'Maximum Allowable Offer (70% Rule)' : isMarkup ? 'Recommended Retail Price' : isDscr ? 'Debt Service Coverage Ratio (DSCR)' : 'Estimated Annual Return / Cap Rate',
      metrics: [
        { id: 'm1', label: isFlip ? 'Projected Net Flip Profit' : isMarkup ? 'Gross Margin (%)' : 'Annual NOI / Net Operating Income' },
        { id: 'm2', label: isFlip ? 'All-In Project Basis' : isMarkup ? 'Net Profit per Unit' : 'Monthly Cash Flow' },
        { id: 'm3', label: isFlip ? 'Return on Cash Basis' : isMarkup ? 'Monthly Gross Revenue' : 'Gross Rent Multiplier (GRM)' },
        { id: 'm4', label: isFlip ? '70% Rule Margin Cushion' : isMarkup ? 'Monthly Net Profit' : 'Annual Cash Flow' },
      ],
      jsBody: isMarkup
        ? `
          var price = v.a * (1 + v.b / 100);
          var gross = price - v.a;
          var netUnit = gross - v.d;
          var margin = price > 0 ? (gross / price) * 100 : 0;
          return {
            primary: '$' + price.toFixed(2),
            primarySub: v.b + '% markup equals ' + margin.toFixed(1) + '% gross margin',
            metrics: {
              m1: margin.toFixed(1) + '%',
              m2: '$' + netUnit.toFixed(2) + ' / unit',
              m3: '$' + Math.round(price * v.c).toLocaleString('en-US'),
              m4: '$' + Math.round(netUnit * v.c).toLocaleString('en-US')
            }
          };
        `
        : isFlip
        ? `
          var mao = (v.a * 0.70) - v.b;
          var sellHold = v.a * (v.c / 100);
          var basis = v.d + v.b + sellHold;
          var profit = v.a - basis;
          var roi = basis > 0 ? (profit / basis) * 100 : 0;
          return {
            primary: '$' + Math.round(mao).toLocaleString('en-US'),
            primarySub: '70% of $' + Math.round(v.a).toLocaleString('en-US') + ' ARV minus $' + Math.round(v.b).toLocaleString('en-US') + ' rehab',
            metrics: {
              m1: '$' + Math.round(profit).toLocaleString('en-US'),
              m2: '$' + Math.round(basis).toLocaleString('en-US'),
              m3: roi.toFixed(1) + '%',
              m4: '$' + Math.round(mao - v.d).toLocaleString('en-US')
            }
          };
        `
        : `
          var annRev = v.b * 12;
          var noi = annRev * (1 - v.c / 100);
          var cap = v.a > 0 ? (noi / v.a) * 100 : 0;
          var dscr = v.d > 0 ? v.b / v.d : 0;
          var annCf = noi - (v.d * 12);
          var grm = annRev > 0 ? v.a / annRev : 0;
          return {
            primary: ${isDscr ? 'dscr.toFixed(2) + "× DSCR"' : 'cap.toFixed(2) + "% Cap Rate"'},
            primarySub: ${isDscr ? '(dscr >= 1.25 ? "Strong lender approval range (≥1.25×)" : "Below standard 1.25× lender target")' : '"Annual NOI: $" + Math.round(noi).toLocaleString("en-US")'},
            metrics: {
              m1: '$' + Math.round(noi).toLocaleString('en-US') + ' / yr',
              m2: '$' + Math.round(annCf / 12).toLocaleString('en-US') + ' / mo',
              m3: grm.toFixed(1) + '× GRM',
              m4: '$' + Math.round(annCf).toLocaleString('en-US') + ' / yr'
            }
          };
        `,
      tableTitle: `2026 US ${name} Quick-Reference Benchmarks`,
      tableHeaders: ['Scenario / Deal Tier', 'Base Value', 'Revenue / Metric', 'Expense / Cost Factor', 'Target Benchmark', 'Investor Takeaway'],
      tableRows: [
        ['Entry Residential', '$200,000', '$1,850/mo', '35% OpEx', '7.2% Cap / 1.25×', 'Cash-flow Midwest market'],
        ['Mid-Tier Duplex', '$320,000', '$2,900/mo', '35% OpEx', '7.1% Cap / 1.30×', 'Balanced equity + yield'],
        ['Suburban Single-Family', '$425,000', '$3,100/mo', '32% OpEx', '6.0% Cap / 1.15×', 'Appreciation-tilted deal'],
        ['Small 4-Plex', '$600,000', '$5,400/mo', '38% OpEx', '6.7% Cap / 1.28×', 'Resilient multi-unit income'],
        ['Value-Add Rehab', '$350,000 ARV', '$55k Rehab', '10% Hold/Sell', '$190k MAO', 'Meets 70% flip rule'],
        ['Short-Term Rental', '$450,000', '62% Occ.', '42% OpEx', '8.4% Gross Yield', 'Seasonality reserve needed'],
        ['Retail Keystone', '$40 Cost', '100% Markup', '50% Margin', '$80 Retail', 'Standard apparel/goods'],
        ['Commercial NNN', '$1,250,000', '$8,200/mo', '12% Landlord', '6.9% Cap Rate', 'Lower management overhead'],
      ],
      examples: [
        { title: 'Example 1: Standard Residential / Small Business Deal', intro: 'Evaluating cash flow and margin discipline before committing capital.', steps: ['Start with verified market comps rather than pro-forma seller projections', 'Deduct realistic 35% operating expenses (taxes, insurance, repairs, CapEx, vacancy)', 'Confirm positive cash flow margin even if interest rates or costs rise 10%.'] },
        { title: 'Example 2: Scaled Multi-Unit or Higher-Volume Case', intro: 'Stress-testing leverage and downside protection on a larger investment.', steps: ['Compare leverage return against an all-cash purchase basis', 'Verify lender coverage ratios (≥1.25× DSCR) and closing reserve requirements', 'Model exit cap rate or resale costs conservatively.'] },
      ],
      faqs: [
        { q: `What is considered a good result for ${keyword.replace(/ calculator$/, '')} in 2026?`, a: `Target benchmarks vary by US metro—Midwest cash-flow markets often target 7%–9% cap rates and ≥1.25× DSCR, whereas coastal growth markets trade at 4.5%–6% cap rates.` },
        { q: 'Which expenses do investors most commonly underestimate?', a: 'Property tax reassessment after sale, landlord hazard insurance spikes, capital expenditures (roof/HVAC), and turnover vacancy between tenants.' },
        { q: 'Does debt financing change Cap Rate or GRM?', a: 'No. Cap Rate and Gross Rent Multiplier measure unlevered property performance independent of your mortgage, whereas Cash-on-Cash Return and DSCR include debt service.' },
        { q: 'How should I validate rental income or ARV assumptions?', a: 'Pull at least 3 closed 90-day comparables within 0.5 miles of the property and verify active rental listings rather than relying solely on automated estimates.' },
        { q: 'Are these calculations formal financial or tax advice?', a: 'No. Use these figures for deal screening and verify final underwriting with your lender, CPA, and licensed real estate attorney.' },
      ],
    };
  }

  // Default US Construction & Trade Estimator Engine (Concrete Slabs, Framing, Roofing, Siding, Drywall, Flooring, Paint, HVAC, Electrical, Home Additions)
  return {
    h1: `${name} (2026 US Imperial Estimator)`,
    lead: `Estimate exact US Imperial material quantities, waste allowance, and 2026 retail material cost for ${keyword} jobs. Built for American contractors and DIY builders with live instant updates.`,
    formulaBlock: `Net Area (sq ft)  = Length (ft) × Width (ft)\nAdjusted Area     = Net Area × (1 + Waste% ÷ 100)\nMaterial Units    = ceil(Adjusted Area ÷ Coverage per Unit)\nEst. Material Cost= Material Units × Unit Price ($ USD)`,
    assumptions: [
      'All measurements default to US Imperial units (feet, inches, square feet, board feet, cubic yards) and US Dollars ($).',
      'Standard trade waste allowance is 10% for straight rectangular layouts and 15% for diagonal cuts, gables, or complex footprints.',
      'Material cost estimates exclude local sales tax, delivery/boom fees, permits, and licensed contractor labor.',
    ],
    inputs: [
      { id: 'len', label: 'Length (feet)', defaultVal: 24, min: 1, max: 2000, step: 0.5 },
      { id: 'wid', label: 'Width / Height (feet)', defaultVal: 16, min: 1, max: 2000, step: 0.5 },
      { id: 'waste', label: 'Trade Waste Allowance (%)', defaultVal: 10, min: 0, max: 30, step: 5 },
      { id: 'unitCost', label: 'Material Cost per Sq Ft / Unit ($)', defaultVal: 4.5, min: 0.25, max: 500, step: 0.25 },
    ],
    primaryLabel: 'Total Adjusted Area / Units Needed',
    metrics: [
      { id: 'raw', label: 'Net Geometric Area' },
      { id: 'sheets', label: 'Std. 4×8 Sheet / 32 sq ft Equiv.' },
      { id: 'squares', label: 'Roofing / Siding Squares (100 sq ft)' },
      { id: 'cost', label: 'Estimated Material Cost ($)' },
    ],
    jsBody: `
      var raw = v.len * v.wid;
      var adj = raw * (1 + v.waste / 100);
      var sheets = Math.ceil(adj / 32);
      var squares = adj / 100;
      var cost = adj * v.unitCost;
      return {
        primary: Math.ceil(adj).toLocaleString('en-US') + ' sq ft',
        primarySub: 'Net ' + Math.round(raw).toLocaleString('en-US') + ' sq ft + ' + v.waste + '% trade waste',
        metrics: {
          raw: Math.round(raw).toLocaleString('en-US') + ' sq ft',
          sheets: sheets.toLocaleString('en-US') + ' units',
          squares: squares.toFixed(2) + ' squares',
          cost: '$' + Math.round(cost).toLocaleString('en-US')
        }
      };
    `,
    tableTitle: `US Jobsite Quick-Reference Table — ${name} (10% Waste Included)`,
    tableHeaders: ['Dimensions (ft)', 'Net Area (sq ft)', 'With 10% Waste', '4×8 Units (32 sq ft)', 'Squares (100 sq ft)', 'Est. Material ($4.50/sf)'],
    tableRows: [
      ['10 × 10 ft', '100 sq ft', '110 sq ft', '4 units', '1.10 sq', '$495'],
      ['10 × 12 ft', '120 sq ft', '132 sq ft', '5 units', '1.32 sq', '$594'],
      ['12 × 16 ft', '192 sq ft', '212 sq ft', '7 units', '2.12 sq', '$954'],
      ['16 × 20 ft', '320 sq ft', '352 sq ft', '11 units', '3.52 sq', '$1,584'],
      ['20 × 20 ft', '400 sq ft', '440 sq ft', '14 units', '4.40 sq', '$1,980'],
      ['20 × 24 ft', '480 sq ft', '528 sq ft', '17 units', '5.28 sq', '$2,376'],
      ['24 × 30 ft', '720 sq ft', '792 sq ft', '25 units', '7.92 sq', '$3,564'],
      ['30 × 40 ft', '1,200 sq ft', '1,320 sq ft', '42 units', '13.20 sq', '$5,940'],
    ],
    examples: [
      {
        title: `Example 1: Standard 16×24 ft Residential Project`,
        intro: `Calculating net footprint plus a 10% contractor cut-and-waste buffer.`,
        steps: [
          'Net Area = 16 ft × 24 ft = 384 sq ft',
          'Add 10% waste = 384 × 1.10 = 422.4 sq ft (round up to 423 sq ft)',
          'At $4.50/sq ft materials, budget ~$1,904 before fasteners, delivery, and local sales tax.',
        ],
      },
      {
        title: `Example 2: Larger 30×40 ft Shop / Commercial Layout`,
        intro: `Ordering full bundles or pallets with 15% waste for openings and off-cuts.`,
        steps: [
          'Net Area = 30 ft × 40 ft = 1,200 sq ft',
          'With 15% waste = 1,380 sq ft (~44 standard 4×8 sheets or 13.8 squares)',
          'Request contractor bulk pricing from a local supply house—orders over $2,500 frequently qualify for 8%–12% pro discounts.',
        ],
      },
    ],
    faqs: [
      { q: `How much waste factor should I add when using a ${keyword}?`, a: `Add 10% for straightforward rectangular rooms or roofs, and 15% when working around hips, valleys, bay windows, or diagonal layouts.` },
      { q: 'Are these measurements in US Imperial units?', a: 'Yes. All inputs and tables use US Imperial standards (feet, inches, square feet, cubic yards, and USD) matching Home Depot, Lowe\'s, and US lumberyard stock.' },
      { q: 'Does the estimated cost include contractor installation labor?', a: 'No. The cost output estimates raw materials only. Depending on your US region, turnkey licensed labor typically adds 1.2× to 2.5× the material cost.' },
      { q: 'Should I round material orders up to the next full box, bundle, or sheet?', a: 'Always round up to the nearest full retail package and keep 1–2 extra units from the same dye/production lot for future repairs.' },
      { q: 'Do I need a local building permit for structural or exterior work?', a: 'Most US municipalities require permits and inspections for structural framing, roofing tear-offs, footings, electrical circuits, and home additions. Confirm with your local building department.' },
    ],
  };
}
