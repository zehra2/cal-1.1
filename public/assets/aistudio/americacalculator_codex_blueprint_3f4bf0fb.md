# AmericaCalculator.com — Codex Implementation & Revenue Blueprint

## 1. Objective & Revenue Target ($200+/Month via Google AdSense)
This document provides the complete technical and SEO specification for **AmericaCalculator.com** so Codex can refactor existing pages, remove thin/duplicate content, and generate high-performing calculators targeting **$200+/month** in Google AdSense earnings.

### Traffic & RPM Math
* **Target Revenue:** `$200.00 / month`
* **US Home Construction & Materials Page RPM:** `~$8.00 – $13.00` per 1,000 pageviews (`15,500 – 25,000` monthly pageviews, or `~520 – 830` daily clicks).
* **US Niche Loans, Real Estate & State Tax Page RPM:** `~$12.00 – $22.00` per 1,000 pageviews (`9,100 – 16,700` monthly pageviews, or `~300 – 550` daily clicks).
* **Blended Benchmark (`~$10.00` RPM):** `~20,000` monthly pageviews (`~670` daily clicks).

### Positioning & Units Standard
* **Domain Theme:** US Property, Construction & State Tax/Finance Calculators.
* **Units:** Always default to **US Imperial units** (`ft`, `in`, `cubic yards`, `short tons`, `board feet`, `40/60/80 lb bags`) and **US Dollars (`$`)**.
* **Avoid Generic Head Terms:** Do not build generic tools competing head-to-head with national banking portals (`mortgage calculator`, `auto loan calculator`). Focus on specific materials, US construction rules, specialized loans, and state-level taxes/closing costs.

---

## 2. Repository Cleanup & Technical SEO Rules (Run First)
Before generating new calculator pages, apply these cleanup and consolidation rules across the site:

1. **Remove / `noindex` Off-Niche Pages:**
   * Remove `/math/` and all academic/math calculators.
   * Remove or `noindex` `/technology/bottleneck-calculator` (PC gaming hardware; low ad value and off-niche).
   * Remove or `noindex` `/business/ltv-cac-calculator` and `/business/automation-roi-calculator`.
2. **301-Redirect Duplicate Legacy `.php` URLs:**
   * `/calculators/asphalt.php` -> `/construction/asphalt-calculator`
   * `/calculators/stair.php` -> `/construction/stair-calculator`
   * `/calculators/cd-interest.php` -> `/loan-calculators/cd-interest-calculator`
   * `/calculators/freight-class.php` -> `/business/freight-class-calculator`
3. **Consolidate Duplicate Real Estate ROI URLs:**
   * `/business/real-estate-roi-calculator` -> 301 redirect to `/real-estate/roi-calculator`
   * `/business/rental-property-roi-calculator` -> 301 redirect to `/real-estate/rental-property-calculator`
4. **Clean `sitemap.xml`:**
   * Remove HTML comments and placeholder/future `<lastmod>` dates.
   * Keep only canonical, indexable URLs that contain rich educational text (`700+` words).

---

## 3. Mandatory AdSense-Safe Page Structure (7-Section Layout)
Every calculator page created or updated by Codex must follow this exact structure so search engines and AdSense reviewers see substantive, non-thin content alongside the tool:

1. **SEO Header (`<h1>` + Lead Paragraph):** Clear primary keyword in `<h1>` and a concise explanation of what the calculator estimates in US units/USD.
2. **Interactive Calculator Widget (Above the Fold):** Fast client-side inputs, instant calculation on input/change (plus a calculate/reset button), realistic default values pre-filled on load, and clear multi-metric output cards.
3. **Exact Formula & US Rules Section (`<h2>`):** Plain-text and LaTeX-formatted formulas (`$...$` / `$$...$$`), variable definitions, and standard waste/code assumptions.
4. **Static HTML Reference Table (`<h2>`):** Pre-calculated benchmark rows (common dimensions, bag sizes, states, or loan tiers) so long-tail queries match static HTML content.
5. **Two Worked Examples (`<h2>` + `<h3>`):** Two realistic numerical walkthroughs (e.g., residential vs. larger/commercial scenario) showing step-by-step math.
6. **FAQ Section + `FAQPage` JSON-LD Schema:** Four to five `<h3>` questions targeting real long-tail queries with direct, factual answers, mirrored in valid JSON-LD structured data.
7. **Cluster Internal Linking (`<nav>`):** Links to 4–6 related calculators inside the same category folder.

---

## 4. Phase 1 Priority Upgrades (Existing Search Console Pages)
Update these pages first because they already register impressions in Google Search Console:

* **`/business/solar-roi-calculator`** (`solar panel payback period calculator` — 837 impressions @ Pos 7.96):
  * Retitle `<title>` and `<h1>` to **Solar Panel Payback Period & ROI Calculator**.
  * Feature **Payback Period (Years)** prominently alongside **Net Cost ($)**, **25-Year Savings ($)**, and **ROI (%)**.
* **`/construction/concrete-bag-calculator`** (`how many 60lb bags of concrete in a cubic yard` — 133 impressions @ Pos 13.30):
  * Add a quick-reference table for **40lb, 60lb, and 80lb bags per cubic yard** (`90`, `60`, and `45` bags/yd^3) plus common slab dimensions (`10x10`, `12x12`, `20x20`).
* **`/ohio/hourly-paycheck-calculator` & `/ohio/overtime-calculator`** (Pos 7.7–11.1):
  * Include state income tax brackets and Ohio municipal/city tax rates (e.g., Columbus, Cleveland, Cincinnati).

---

## 5. Master Specification: Calculators 1–100

### Cluster A: Concrete, Masonry & Aggregates (`/construction/`)
1. **Concrete Bag Calculator** (`/construction/concrete-bag-calculator`) — Keyword: `concrete bag calculator`
   * Inputs: Length (`ft`), Width (`ft`), Depth (`in`), Bag Size (`40`, `60`, `80` lb), Waste (`%`).
   * Outputs: Cubic Feet, Cubic Yards, Bags Needed.
   * Formula: $\text{CuFt} = L \times W \times (D/12)$; $\text{80lb} = \text{CuFt}/0.60$, $\text{60lb} = \text{CuFt}/0.45$, $\text{40lb} = \text{CuFt}/0.30$.
2. **Concrete Slab Calculator** (`/construction/concrete-slab-calculator`) — Keyword: `concrete slab calculator`
   * Inputs: Length (`ft`), Width (`ft`), Thickness (`in`), Waste (`%`), Ready-Mix Cost (`$/yd^3`).
   * Outputs: Cubic Yards, 80lb Bag Equivalent, Estimated Material Cost.
   * Formula: $\text{Yds} = [L \times W \times (T/12)] / 27 \times (1 + \text{Waste\%})$.
3. **Sonotube / Concrete Column Calculator** (`/construction/sonotube-concrete-calculator`) — Keyword: `sonotube concrete calculator`
   * Inputs: Diameter (`in`), Depth (`ft`), Column Count.
   * Outputs: Cubic Feet, Cubic Yards, 60lb & 80lb Bags.
   * Formula: $\text{CuFt} = \pi \times ((D/2)/12)^2 \times \text{Depth} \times \text{Count}$.
4. **Concrete Block (CMU) Wall Calculator** (`/construction/concrete-block-calculator`) — Keyword: `concrete block calculator`
   * Inputs: Wall Length (`ft`), Wall Height (`ft`), Openings Area (`sq ft`).
   * Outputs: CMU Blocks (`8x8x16`), 80lb Mortar Bags, Core Fill Volume.
   * Formula: $\text{Blocks} = ((L \times H) - \text{Openings}) \times 1.125$; $\text{Mortar Bags} = (\text{Blocks}/100) \times 3.5$.
5. **Concrete Footing Calculator** (`/construction/concrete-footing-calculator`) — Keyword: `concrete footing calculator`
   * Inputs: Linear Feet (`ft`), Width (`in`), Depth (`in`), Waste (`%`).
   * Outputs: Cubic Yards, 80lb Bags.
   * Formula: $\text{Yds} = [\text{LinFt} \times (W/12) \times (D/12)] / 27 \times (1 + \text{Waste\%})$.
6. **Concrete Stairs Calculator** (`/construction/concrete-stairs-calculator`) — Keyword: `concrete stairs calculator`
   * Inputs: Width (`ft`), Rise (`in`), Run (`in`), Steps, Landing Depth (`ft`).
   * Outputs: Cubic Yards, 80lb Bags.
   * Formula: $\text{StepVol} = W \times (\text{Rise}/12) \times (\text{Run}/12) \times [\text{Steps}(\text{Steps}+1)/2]$.
7. **Rebar Grid & Weight Calculator** (`/construction/rebar-calculator`) — Keyword: `rebar calculator`
   * Inputs: Length (`ft`), Width (`ft`), Grid Spacing (`in`), Bar Size (`#3`, `#4`, `#5`).
   * Outputs: Total Linear Feet, 20ft Rebar Sticks, Total Weight (`lbs`).
   * Formula: $\text{Rows}_L = \lceil W/\text{Spacing}\rceil + 1$; $\text{Rows}_W = \lceil L/\text{Spacing}\rceil + 1$; $\text{TotalFt} = (\text{Rows}_L \times L) + (\text{Rows}_W \times W)$.
8. **Gravel & Crushed Stone Calculator** (`/construction/gravel-calculator`) — Keyword: `gravel calculator`
   * Inputs: Length (`ft`), Width (`ft`), Depth (`in`), Aggregate Density (`lbs/yd^3`, default `2800`).
   * Outputs: Cubic Yards, Short Tons, Dump Truck Loads (`10-ton`).
   * Formula: $\text{Yds} = [L \times W \times (D/12)] / 27$; $\text{Tons} = (\text{Yds} \times \text{Density}) / 2000$.
9. **Asphalt Paving Tonnage Calculator** (`/construction/asphalt-calculator`) — Keyword: `asphalt calculator`
   * Inputs: Length (`ft`), Width (`ft`), Compacted Thickness (`in`), Price (`$/ton`).
   * Outputs: Compacted Tons (with `10%` compaction allowance), Estimated Cost.
   * Formula: $\text{Tons} = ([L \times W \times (T/12) \times 145] / 2000) \times 1.10$.
10. **Mortar Bag Calculator** (`/construction/mortar-calculator`) — Keyword: `mortar bag calculator`
    * Inputs: Unit Type (`Brick` or `CMU Block`), Unit Count.
    * Outputs: `80lb` Mortar Bags Needed.
    * Formula: $\text{Bags} = (\text{Bricks}/1000)\times 7$ or $(\text{Blocks}/100)\times 3.5$.

### Cluster B: Lumber, Framing & Carpentry (`/construction/`)
11. **Board Foot Calculator** (`/construction/board-foot-calculator`) — Keyword: `board foot calculator`
    * Formula: $\text{BF} = [\text{Thickness(in)} \times \text{Width(in)} \times \text{Length(ft)}] / 12 \times \text{Qty}$.
12. **Wall Stud Calculator** (`/construction/wall-stud-calculator`) — Keyword: `wall stud calculator`
    * Formula: $\text{Studs} = [\text{WallLen(ft)} \times 12 / \text{Spacing(in)}] + 1 + (3 \times \text{Corners}) + (2 \times \text{Openings})$.
13. **Roof Rafter Calculator** (`/construction/rafter-calculator`) — Keyword: `rafter length calculator`
    * Formula: $\text{Run} = (\text{Span}/2) + \text{Overhang}$; $\text{RafterLen} = \text{Run} \times \sqrt{12^2 + \text{Pitch}^2}/12$.
14. **Stair Stringer Calculator** (`/construction/stair-calculator`) — Keyword: `stair stringer calculator`
    * Formula: $\text{Steps} = \text{Round}(\text{TotalRise}/7.5)$; $\text{RunTotal} = (\text{Steps}-1)\times \text{Tread}$; $\text{Stringer} = \sqrt{\text{TotalRise}^2 + \text{RunTotal}^2}$.
15. **Floor Joist Calculator** (`/construction/floor-joist-calculator`) — Keyword: `floor joist calculator`
    * Formula: $\text{Joists} = [\text{RoomLen(ft)} \times 12 / \text{Spacing(in)}] + 1$; $\text{Hangers} = \text{Joists} \times 2$.
16. **Deck Board Calculator** (`/construction/deck-board-calculator`) — Keyword: `deck board calculator`
    * Formula: $\text{LinFt} = (\text{DeckSqFt} / [(\text{BoardWidth} + \text{Gap})/12]) \times (1 + \text{Waste\%})$.
17. **Deck Baluster Calculator** (`/construction/deck-baluster-calculator`) — Keyword: `deck baluster calculator`
    * Formula: $\text{Balusters} = \lceil(\text{RailLen} - 4) / (\text{BalusterW} + 4)\rceil$ (IRC 4-inch max gap rule).
18. **Plywood & OSB Sheathing Calculator** (`/construction/plywood-sheathing-calculator`) — Keyword: `plywood calculator`
    * Formula: $\text{Sheets} = \lceil(\text{SqFt} \times \text{PitchFactor}) / \text{SheetSqFt} \times (1 + \text{Waste\%})\rceil$.
19. **Fence Material Calculator** (`/construction/fence-calculator`) — Keyword: `fence material calculator`
    * Formula: $\text{Posts} = \lceil\text{Len}/\text{PostSpacing}\rceil + 1$; $\text{Rails} = (\text{Posts}-1)\times \text{RailCount}$; $\text{Pickets} = (\text{Len}\times 12)/(\text{PicketW}+\text{Gap})$.
20. **Pole Barn Material & Cost Calculator** (`/construction/pole-barn-calculator`) — Keyword: `pole barn cost calculator`
    * Formula: $\text{Posts} = (2(L+W)/\text{Spacing}) + 4$; $\text{Trusses} = (L/\text{Spacing}) + 1$.

### Cluster C: Roofing, Siding & Exterior (`/construction/`)
21. **Roofing Shingle Bundle Calculator** (`/construction/roof-shingle-calculator`) — Keyword: `roofing shingle bundle calculator`
    * Formula: $\text{Squares} = (\text{Footprint} \times \text{PitchFactor})/100$; $\text{Bundles} = \lceil\text{Squares} \times 3 \times (1 + \text{Waste\%})\rceil$.
22. **Roof Pitch Calculator** (`/construction/roof-pitch-calculator`) — Keyword: `roof pitch calculator`
    * Formula: $\text{Pitch} = (\text{Rise}/\text{Run})\times 12$; $\text{Degrees} = \arctan(\text{Rise}/\text{Run}) \times (180/\pi)$.
23. **Metal Roofing Calculator** (`/construction/metal-roofing-calculator`) — Keyword: `metal roofing calculator`
    * Formula: $\text{Panels} = \lceil(\text{RoofLen}\times 12) / \text{PanelWidth(in)}\rceil \times 2$; $\text{Screws} = (\text{SqFt}/100)\times 80$.
24. **Vinyl Siding Calculator** (`/construction/vinyl-siding-calculator`) — Keyword: `vinyl siding calculator`
    * Formula: $\text{Squares} = [\text{WallSqFt} + 0.5(\text{GableW}\times H) - \text{Openings}] \times (1 + \text{Waste\%}) / 100$.
25. **Hardie Plank Siding Calculator** (`/construction/hardie-plank-calculator`) — Keyword: `hardie plank calculator`
    * Formula: $\text{Planks} = \lceil(\text{NetWallSqFt} / (\text{PlankLen} \times (\text{ExposureIn}/12))) \times (1 + \text{Waste\%})\rceil$.
26. **Gutter Size & Downspout Calculator** (`/construction/gutter-calculator`) — Keyword: `gutter size calculator`
    * Formula: $\text{EffectiveSqFt} = \text{Footprint} \times \text{PitchFactor} \times \text{RainfallFactor}$; 1 standard `2x3"` downspout per `600 sq ft`.
27. **Attic Ventilation (NFA) Calculator** (`/construction/attic-ventilation-calculator`) — Keyword: `attic ventilation calculator`
    * Formula: $\text{TotalNFA(sq in)} = (\text{AtticSqFt} / \text{Ratio}) \times 144$ (`150` or `300`), split `50%` intake / `50%` exhaust.
28. **French Drain Calculator** (`/construction/french-drain-calculator`) — Keyword: `french drain calculator`
    * Formula: $\text{GravelYds} = ([L \times (W/12) \times (D/12)] - [\pi(r_{\text{ft}})^2 L]) / 27$.

### Cluster D: Drywall, Insulation, Flooring & Interior (`/construction/`)
29. **Drywall Calculator** (`/construction/drywall-calculator`) — Keyword: `drywall calculator`
    * Formula: $\text{Sheets} = \lceil\text{TotalSqFt} / \text{SheetSqFt} \times (1 + \text{Waste\%})\rceil$; $\text{Mud(gal)} = \text{SqFt}\times 0.053$; $\text{Tape(ft)} = \text{SqFt}\times 0.37$.
30. **Drop Ceiling Calculator** (`/construction/drop-ceiling-calculator`) — Keyword: `drop ceiling calculator`
    * Formula: $\text{Tiles} = \lceil(L\times W)/\text{TileArea} \times (1 + \text{Waste\%})\rceil$; $\text{MainRunners} = \text{Rows every 4ft}$.
31. **Spray Foam Insulation Calculator** (`/construction/spray-foam-insulation-calculator`) — Keyword: `spray foam insulation calculator`
    * Formula: $\text{BoardFeet} = \text{SqFt} \times (\text{TargetR} / \text{RPerInch})$ (Closed cell $\approx R\text{-}6.5\text{/in}$, Open cell $\approx R\text{-}3.7\text{/in}$).
32. **Insulation Calculator** (`/construction/insulation-calculator`) — Keyword: `insulation calculator`
    * Formula: $\text{Units} = \lceil\text{AreaSqFt} / \text{CoverageAtTargetR}\rceil$.
33. **Flooring Calculator** (`/construction/flooring-calculator`) — Keyword: `flooring calculator`
    * Formula: $\text{Boxes} = \lceil(L \times W \times (1 + \text{Waste\%})) / \text{BoxSqFt}\rceil$.
34. **Tile & Grout Calculator** (`/construction/tile-calculator`) — Keyword: `tile and grout calculator`
    * Formula: $\text{Tiles} = \lceil\text{Area} / ((L_{\text{in}}\times W_{\text{in}})/144) \times (1 + \text{Waste\%})\rceil$; $\text{50lb Thinset} = \lceil\text{Area}/50\rceil$.
35. **Paint Calculator** (`/construction/paint-calculator`) — Keyword: `paint calculator`
    * Formula: $\text{Gallons} = \lceil([\text{WallSqFt} - 21(\text{Doors}) - 15(\text{Windows})] \times \text{Coats}) / 350\rceil$.
36. **Epoxy Floor Coating Calculator** (`/construction/epoxy-floor-calculator`) — Keyword: `epoxy floor calculator`
    * Formula: $\text{Gallons} = (\text{SqFt} \times \text{Mils}) / (1604 \times \text{Solids\%})$.
37. **Baseboard & Trim Calculator** (`/construction/baseboard-trim-calculator`) — Keyword: `baseboard calculator`
    * Formula: $\text{LinFt} = [2(L+W) - 3(\text{Doors})] \times (1 + \text{Waste\%})$.

### Cluster E: Landscaping, Earthwork & Home Systems (`/construction/` & `/business/`)
38. **Mulch Calculator** (`/construction/mulch-calculator`) — Keyword: `mulch calculator`
    * Formula: $\text{CuYds} = [L \times W \times (D/12)]/27$; $\text{2 CuFt Bags} = \lceil\text{CuFt}/2\rceil$.
39. **Topsoil Calculator** (`/construction/topsoil-calculator`) — Keyword: `topsoil calculator`
    * Formula: $\text{Tons} = ([L \times W \times (D/12)]/27 \times (1 + \text{Swell\%})) \times 1.1$.
40. **Paver Calculator** (`/construction/paver-calculator`) — Keyword: `paver calculator`
    * Formula: $\text{Pavers} = \lceil\text{SqFt} \times (144 / (L_{\text{in}}\times W_{\text{in}})) \times (1 + \text{Waste\%})\rceil$.
41. **Retaining Wall Block Calculator** (`/construction/retaining-wall-calculator`) — Keyword: `retaining wall block calculator`
    * Formula: $\text{Courses} = \lceil H_{\text{in}} / \text{BlockH}_{\text{in}}\rceil + 1$.
42. **Sod Calculator** (`/construction/sod-calculator`) — Keyword: `sod calculator`
    * Formula: $\text{Rolls} = \lceil(\text{Area}\times (1 + \text{Waste\%}))/\text{RollSqFt}\rceil$; $\text{Pallets} = \text{SqFt}/450$.
43. **Excavation Calculator** (`/construction/excavation-calculator`) — Keyword: `excavation calculator`
    * Formula: $\text{LooseYds} = [(L\times W\times D)/27] \times (1 + \text{Swell\%})$.
44. **Voltage Drop Calculator** (`/technology/voltage-drop-calculator`) — Keyword: `voltage drop calculator`
    * Formula: $V_{\text{drop}} = (2 \times K \times I \times L) / \text{CM}$ ($K=12.9$ Copper, $21.2$ Aluminum).
45. **Conduit Fill Calculator** (`/construction/conduit-fill-calculator`) — Keyword: `conduit fill calculator`
    * Formula: $\text{Fill\%} = (\sum \text{WireArea} / \text{ConduitArea}) \times 100$ (NEC `40%` max for `3+` conductors).
46. **Mini-Split BTU Calculator** (`/construction/mini-split-btu-calculator`) — Keyword: `mini split btu calculator`
    * Formula: $\text{BTU} = \text{SqFt} \times 25 \times (H/8) \times \text{ClimateFactor} \times \text{InsulationFactor}$.
47. **Solar Panel Payback Period Calculator** (`/business/solar-roi-calculator`) — Keyword: `solar panel payback period calculator`
    * Formula: $\text{PaybackYears} = (\text{GrossCost} - \text{Incentives}) / \text{AnnualElectricSavings}$.
48. **Water Heater Size Calculator** (`/construction/water-heater-size-calculator`) — Keyword: `water heater size calculator`
    * Formula: $\text{FHR} = (\text{PeakShowers}\times 20) + (\text{Dishwasher}\times 6) + (\text{Laundry}\times 15)$.
49. **Home Addition Cost Calculator** (`/construction/home-addition-cost-calculator`) — Keyword: `home addition cost calculator`
    * Formula: $\text{Cost} = (W \times L) \times \text{BaseCostPerSqFt} \times \text{RoomMultiplier} \times \text{RegionMultiplier}$.
50. **Second Story Addition Cost Calculator** (`/construction/second-story-addition-calculator`) — Keyword: `second story addition cost calculator`
    * Formula: $\text{Cost} = (\text{SqFt} \times \text{RatePerSqFt}) + \text{RoofWork} + \text{Stairs} + \text{StructuralAdjustments}$.

### Cluster F: Niche Asset Loans & SBA Financing (`/loan-calculators/`)
Standard monthly payment formula:
$$M = P \times \frac{r(1+r)^n}{(1+r)^n - 1}, \quad r = \frac{\text{APR}}{12}, \quad n = \text{Years} \times 12$$
51. **RV Loan Calculator** (`/loan-calculators/rv-loan-calculator`) — Keyword: `rv loan calculator` ($P$ includes tax, down payment, and trade-in equity).
52. **Travel Trailer Loan Calculator** (`/loan-calculators/travel-trailer-loan-calculator`) — Keyword: `travel trailer loan calculator` (adds storage & insurance to monthly cost).
53. **Motorhome Loan Calculator** (`/loan-calculators/motorhome-loan-calculator`) — Keyword: `motorhome loan calculator` (includes 5-year depreciation comparison).
54. **Land Loan Calculator** (`/loan-calculators/land-loan-calculator`) — Keyword: `land loan calculator` (supports balloon payoff balance).
55. **Manufactured Home Loan Calculator** (`/loan-calculators/manufactured-home-loan-calculator`) — Keyword: `manufactured home loan calculator` (includes lot rent & taxes).
56. **Barndominium Loan Calculator** (`/loan-calculators/barndominium-loan-calculator`) — Keyword: `barndominium loan calculator` (construction draw interest + permanent loan).
57. **Farm Loan Calculator** (`/loan-calculators/farm-loan-calculator`) — Keyword: `farm loan calculator` (monthly/semi-annual/annual frequency + cost per acre).
58. **Construction Loan Calculator** (`/loan-calculators/construction-loan-calculator`) — Keyword: `construction loan calculator` (draw schedule interest reserve).
59. **Boat Loan Calculator** (`/loan-calculators/boat-loan-calculator`) — Keyword: `boat loan calculator` (adds slip, winterization, and insurance).
60. **Semi-Truck Loan Calculator** (`/loan-calculators/semi-truck-loan-calculator`) — Keyword: `semi truck loan calculator` (payment cost per mile).
61. **Interest-Only HELOC Calculator** (`/loan-calculators/interest-only-heloc-calculator`) — Keyword: `interest only heloc calculator` (draw period IO vs repayment P&I).
62. **CD Interest Calculator** (`/loan-calculators/cd-interest-calculator`) — Keyword: `cd interest calculator` ($A = P(1+r/n)^{nt}$ + APY + after-tax yield).
63. **SBA 7(a) Loan Calculator** (`/loan-calculators/sba-loan-calculator`) — Keyword: `sba 7a loan calculator` (`10-yr` working capital / `25-yr` real estate + SBA guaranteed portion).
64. **SBA 504 Loan Calculator** (`/loan-calculators/sba-504-loan-calculator`) — Keyword: `sba 504 loan calculator` (`50%` bank + `40%` CDC + `10%` down blended payment).
65. **SBA Guaranty Fee Calculator** (`/loan-calculators/sba-guaranty-fee-calculator`) — Keyword: `sba guaranty fee calculator` (fee % on guaranteed portion).
66. **Commercial Loan Calculator** (`/loan-calculators/commercial-loan-calculator`) — Keyword: `commercial loan calculator` (amortization + balloon payoff).
67. **Equipment Loan Calculator** (`/loan-calculators/equipment-loan-calculator`) — Keyword: `equipment loan calculator` (includes Section 179 tax savings estimate).
68. **Hard Money Loan Calculator** (`/loan-calculators/hard-money-loan-calculator`) — Keyword: `hard money loan calculator` (IO payment + origination points + holding cost).
69. **Seller Financing Calculator** (`/loan-calculators/seller-financing-calculator`) — Keyword: `seller financing calculator` (note amortization + balloon).
70. **Merchant Cash Advance (MCA) Calculator** (`/loan-calculators/mca-calculator`) — Keyword: `merchant cash advance calculator` (factor payback + effective annualized APR).

### Cluster G: Business & Real Estate Investor Math (`/business/` & `/real-estate/`)
71. **Freight Density & Class Calculator** (`/business/freight-class-calculator`) — Keyword: `freight density calculator` ($\text{Density} = \text{Weight} / \text{CuFt}$).
72. **Amazon ROI Calculator** (`/business/amazon-roi-calculator`) — Keyword: `amazon roi calculator` ($\text{ROI\%} = \text{NetProfit} / \text{LandedCost} \times 100$).
73. **Retail Markup Calculator** (`/business/markup-calculator`) — Keyword: `retail markup calculator` (Markup % vs Gross Margin %).
74. **Interest Rate Cap Calculator** (`/business/interest-rate-cap-calculator`) — Keyword: `rate cap calculator` (capped interest payment vs uncapped floating rate).
75. **Cap Rate Calculator** (`/real-estate/cap-rate-calculator`) — Keyword: `cap rate calculator` ($\text{CapRate} = \text{NOI} / \text{Price}$ + reverse valuation).
76. **Cash-on-Cash Return Calculator** (`/real-estate/cash-on-cash-return-calculator`) — Keyword: `cash on cash return calculator` ($\text{CoC\%} = \text{AnnualPreTaxCashFlow} / \text{TotalCashInvested} \times 100$).
77. **DSCR Calculator** (`/real-estate/dscr-calculator`) — Keyword: `dscr calculator` ($\text{DSCR} = \text{MonthlyGrossRent} / \text{MonthlyPITIA}$).
78. **BRRRR Calculator** (`/real-estate/brrrr-calculator`) — Keyword: `brrrr calculator` (cash left in deal after refinance).
79. **1031 Exchange Calculator** (`/real-estate/1031-exchange-calculator`) — Keyword: `1031 exchange calculator` (cash/mortgage boot & tax deferral estimate).
80. **Price-to-Rent Ratio Calculator** (`/real-estate/price-to-rent-ratio-calculator`) — Keyword: `price to rent ratio calculator` ($\text{Price} / (\text{MonthlyRent} \times 12)$).
81. **Home Inspection Cost Calculator** (`/real-estate/home-inspection-cost-calculator`) — Keyword: `home inspection cost calculator` (base fee + sq ft + age + add-on inspections).
82. **House Flipping 70% Rule Calculator** (`/real-estate/house-flipping-calculator`) — Keyword: `house flipping calculator` ($\text{MAO} = (\text{ARV} \times 0.70) - \text{Rehab}$).
83. **Gross Rent Multiplier Calculator** (`/real-estate/gross-rent-multiplier-calculator`) — Keyword: `gross rent multiplier calculator` ($\text{GRM} = \text{Price} / \text{AnnualGrossRent}$).
84. **Short-Term Rental (Airbnb) Calculator** (`/real-estate/airbnb-calculator`) — Keyword: `airbnb calculator` (occupancy revenue minus platform, management, and holding costs).

### Cluster H: State Closing Cost & Paycheck Tax Hubs (`/real-estate/` & `/[state]/`)
85. **Closing Cost Calculator** (`/real-estate/closing-cost-calculator`) — Keyword: `closing cost calculator` (Buyer/Seller toggle + 50-state transfer tax table).
86. **FHA Closing Cost Calculator** (`/real-estate/fha-closing-cost-calculator`) — Keyword: `fha closing cost calculator` (`1.75%` UFMIP + annual MIP + seller concessions).
87. **California Closing Cost Calculator** (`/real-estate/closing-cost-calculator-california`) — Keyword: `closing cost calculator california` (county transfer tax + local/mansion taxes).
88. **Texas Closing Cost Calculator** (`/real-estate/closing-cost-calculator-texas`) — Keyword: `closing cost calculator texas` (title insurance rate tiers + `$0` state transfer tax note).
89. **Florida Closing Cost Calculator** (`/real-estate/closing-cost-calculator-florida`) — Keyword: `florida closing cost calculator` (deed doc stamps, mortgage doc stamps, intangible tax).
90. **New York Closing Cost Calculator** (`/real-estate/closing-cost-calculator-new-york`) — Keyword: `closing cost calculator new york` (NY transfer tax, mansion tax, NYC mortgage recording tax).
91. **Pennsylvania Closing Cost Calculator** (`/real-estate/closing-cost-calculator-pennsylvania`) — Keyword: `closing cost calculator pa` (state + municipal realty transfer tax split).
92. **Ohio Closing Cost Calculator** (`/real-estate/closing-cost-calculator-ohio`) — Keyword: `ohio closing cost calculator` (county conveyance fee rates).
93. **Washington State Closing Cost Calculator** (`/real-estate/closing-cost-calculator-washington`) — Keyword: `closing costs washington state calculator` (graduated state REET + local REET).
94. **Maryland Closing Cost Calculator** (`/real-estate/closing-cost-calculator-maryland`) — Keyword: `closing cost calculator maryland` (state/county transfer & recordation taxes + first-time buyer rules).
95. **West Virginia Closing Cost Calculator** (`/real-estate/closing-cost-calculator-west-virginia`) — Keyword: `closing cost calculator west virginia` (state/county excise tax).
96. **Ohio Paycheck Calculator** (`/ohio/paycheck-calculator`) — Keyword: `ohio paycheck calculator` (federal, FICA, OH state brackets, municipal city tax, school district tax).
97. **Ohio Overtime Calculator** (`/ohio/overtime-calculator`) — Keyword: `overtime calculator ohio` (regular + `1.5x` OT + `2.0x` DT net pay).
98. **Ohio Bonus Tax Calculator** (`/ohio/bonus-tax-calculator`) — Keyword: `bonus tax calculator ohio` (supplemental federal/state withholding + FICA + municipal tax).
99. **California Paycheck Calculator** (`/california/paycheck-calculator`) — Keyword: `california paycheck calculator` (CA daily overtime + CA SDI withholding).
100. **Texas Paycheck Calculator** (`/texas/paycheck-calculator`) — Keyword: `texas paycheck calculator` (federal + FICA with `$0` state income tax).

---

## 6. Codex Prompt Template for Batch Generation
Use this prompt when running Codex on individual files or batches:

> "Read `codex-blueprint-americacalculator.md`. Implement `[TARGET_FILE_PATH]` for `[CALCULATOR_NAME]` targeting `[PRIMARY_KEYWORD]`. Follow the 7-section layout with US Imperial units/USD, pre-filled realistic defaults, instant JavaScript calculation without page reload, an HTML reference table, two worked examples, five FAQs with JSON-LD `FAQPage` schema, and cluster internal links."