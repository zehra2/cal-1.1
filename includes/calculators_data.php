<?php
// All implemented calculators data and metadata
$calculators = [
    // Financial Calculators
    ['id' => 'cd-interest', 'name' => 'CD Interest Calculator', 'category' => 'Financial', 'description' => 'Calculate Certificate of Deposit returns'],
    ['id' => 'rv-loan', 'name' => 'RV Loan Calculator', 'category' => 'Financial', 'description' => 'Calculate RV loan payments and total cost'],
    ['id' => 'dave-ramsey-investment', 'name' => 'Dave Ramsey Retirement Calculator', 'category' => 'Financial', 'description' => 'Plan your retirement with Dave Ramsey principles'],
    ['id' => 'markup', 'name' => 'Markup Calculator', 'category' => 'Financial', 'description' => 'Calculate markup and profit margins'],
    ['id' => 'land-loan', 'name' => 'Land Loan Calculator', 'category' => 'Financial', 'description' => 'Calculate land loan payments and total interest'],
    ['id' => 'interest-only-loan', 'name' => 'Interest Only Loan Calculator', 'category' => 'Financial', 'description' => 'Calculate interest-only mortgage, HELOC, and construction loan payments', 'url' => '/loan-calculators/interest-only-loan-calculator'],
    ['id' => 'sba-loan', 'name' => 'SBA Loan Calculator', 'category' => 'Financial', 'description' => 'Calculate Small Business Administration loan terms'],
    ['id' => 'cap-rate', 'name' => 'Cap Rate Calculator', 'category' => 'Financial', 'description' => 'Calculate capitalization rate for real estate'],
    ['id' => 'home-inspection-cost', 'name' => 'Home Inspection Cost Calculator', 'category' => 'Real Estate', 'description' => 'Calculate home inspection costs by sq ft, age, and add-ons', 'url' => '/real-estate/home-inspection-cost-calculator'],
    
    // Construction Calculators
    ['id' => 'rafter', 'name' => 'Rafter Calculator', 'category' => 'Construction', 'description' => 'Calculate rafter length, roof pitch, lumber needed, and board feet', 'url' => '/construction/rafter-calculator'],
    ['id' => 'linear-feet', 'name' => 'Linear Feet Calculator', 'category' => 'Construction', 'description' => 'Calculate linear feet, convert to square feet and board feet with waste', 'url' => '/construction/linear-feet-calculator'],
    ['id' => 'concrete', 'name' => 'Concrete Calculator', 'category' => 'Construction', 'description' => 'Calculate concrete cubic yards, bags, and cost for slabs, footings, and columns', 'url' => '/construction/concrete-calculator'],
    ['id' => 'concrete-slab', 'name' => 'Concrete Slab Calculator', 'category' => 'Construction', 'description' => 'Calculate concrete for slabs, patios, driveways, and garage floors', 'url' => '/construction/concrete-slab-calculator'],
    ['id' => 'concrete-bag', 'name' => 'Concrete Bag Calculator', 'category' => 'Construction', 'description' => 'How many bags of concrete do you need? Quikrete, Sakrete, 40/60/80 lb', 'url' => '/construction/concrete-bag-calculator'],
    ['id' => 'concrete-yardage', 'name' => 'Concrete Yardage Calculator', 'category' => 'Construction', 'description' => 'Calculate cubic yards of concrete for ready-mix orders', 'url' => '/construction/concrete-yardage-calculator'],
    ['id' => 'concrete-footing', 'name' => 'Concrete Footing Calculator', 'category' => 'Construction', 'description' => 'Calculate concrete for footings, post holes, and foundations', 'url' => '/construction/concrete-footing-calculator'],
    ['id' => 'cubic-yard', 'name' => 'Cubic Yard Calculator', 'category' => 'Construction', 'description' => 'Convert measurements to cubic yards'],
    ['id' => 'board-foot', 'name' => 'Board Foot Calculator', 'category' => 'Construction', 'description' => 'Calculate board feet of lumber'],
    ['id' => 'stair', 'name' => 'Stair Calculator', 'category' => 'Construction', 'description' => 'Calculate stair dimensions and rise/run'],
    ['id' => 'asphalt', 'name' => 'Asphalt Calculator', 'category' => 'Construction', 'description' => 'Calculate asphalt needed for paving'],
    ['id' => 'home-addition-cost', 'name' => 'Home Addition Cost Calculator', 'category' => 'Construction', 'description' => 'Estimate home addition and renovation costs'],
    
    // Technology Calculators
    ['id' => 'voltage-drop', 'name' => 'Voltage Drop Calculator', 'category' => 'Technology', 'description' => 'Calculate voltage drop for AC and DC circuits', 'url' => '/technology/voltage-drop-calculator'],
    
    // Business Calculators
    ['id' => 'freelance-rate', 'name' => 'Freelance Rate Calculator', 'category' => 'Business', 'description' => 'Calculate freelance hourly rates', 'url' => '/business/freelance-rate-calculator'],
    ['id' => 'ohio-paycheck', 'name' => 'Ohio Paycheck Calculator', 'category' => 'Business', 'description' => 'Calculate Ohio paycheck and tax deductions'],
    ['id' => 'freight-class', 'name' => 'Freight Class Calculator', 'category' => 'Business', 'description' => 'Determine freight shipping class'],
    
    // Academic Calculators
    ['id' => 'calculator-bacalaureat', 'name' => 'Calculator Bacalaureat', 'category' => 'Academic', 'description' => 'Calculate Baccalauréat grades'],
    ['id' => 'cumulative-gpa', 'name' => 'Cumulative GPA Calculator', 'category' => 'Academic', 'description' => 'Calculate cumulative grade point average'],
    ['id' => 'act-score', 'name' => 'ACT Score Calculator', 'category' => 'Academic', 'description' => 'Calculate ACT composite and section scores'],
    ['id' => 'ap-lang-score', 'name' => 'AP Lang Score Calculator', 'category' => 'Academic', 'description' => 'Calculate AP Language and Composition scores'],
    
    // Math Calculators
    ['id' => 'rref', 'name' => 'RREF Calculator', 'category' => 'Math', 'description' => 'Reduced Row Echelon Form calculator'],
    ['id' => 'determinant', 'name' => 'Determinant Calculator', 'category' => 'Math', 'description' => 'Calculate matrix determinant'],
    ['id' => 'inverse-matrix', 'name' => 'Inverse Matrix Calculator', 'category' => 'Math', 'description' => 'Calculate inverse of a matrix'],
    ['id' => 'mixed-fraction', 'name' => 'Mixed Fraction Calculator', 'category' => 'Math', 'description' => 'Add, subtract, multiply and divide mixed fractions'],
    ['id' => 'partial-derivative', 'name' => 'Partial Derivative Calculator', 'category' => 'Math', 'description' => 'Calculate partial derivatives of multivariable functions'],
    ['id' => 'differential-equation', 'name' => 'Differential Equation Calculator', 'category' => 'Math', 'description' => 'Solve differential equations step by step'],

    
    // Gaming Calculators
    ['id' => 'palworld-breeding', 'name' => 'Palworld Breeding Calculator', 'category' => 'Gaming', 'description' => 'Calculate Palworld breeding combinations'],
    ['id' => 'blox-fruits', 'name' => 'Blox Fruits Calculator', 'category' => 'Gaming', 'description' => 'Blox Fruits stats calculator'],
    ['id' => 'terminus', 'name' => 'Terminus Calculator', 'category' => 'Gaming', 'description' => 'Call of Duty Terminus calculator'],
    
    // Health & Fitness Calculators
    ['id' => 'ffmi', 'name' => 'FFMI Calculator', 'category' => 'Health', 'description' => 'Calculate Fat-Free Mass Index for bodybuilding'],
    ['id' => 'corrected-calcium', 'name' => 'Corrected Calcium Calculator', 'category' => 'Health', 'description' => 'Calculate corrected calcium levels'],
    ['id' => 'rvu', 'name' => 'RVU Calculator', 'category' => 'Health', 'description' => 'Calculate Relative Value Units for medical billing'],
    ['id' => 'asq', 'name' => 'ASQ Calculator', 'category' => 'Health', 'description' => 'Ages and Stages Questionnaire scoring'],
    
    // Other Calculators
    ['id' => 'map', 'name' => 'Map Calculator', 'category' => 'Other', 'description' => 'Calculate distances and areas on maps'],
    ['id' => 'grow-a-garden', 'name' => 'Grow a Garden Calculator', 'category' => 'Other', 'description' => 'Calculate garden spacing and plant quantities'],
    ['id' => 'saturn-return', 'name' => 'Saturn Return Calculator', 'category' => 'Other', 'description' => 'Calculate your Saturn return astrological period'],
    ['id' => 'random-country', 'name' => 'Random Country Generator', 'category' => 'Other', 'description' => 'Generate random countries for fun and learning'],    ['id' => 'hoa-fee', 'name' => 'HOA Fee Calculator', 'category' => 'Real Estate', 'description' => 'Calculate HOA impact on purchasing power and monthly fees', 'url' => '/real-estate/hoa-fee-calculator'],
    ['id' => 'property-tax', 'name' => 'Property Tax Calculator', 'category' => 'Real Estate', 'description' => 'Calculate property taxes by state and county millage rates', 'url' => '/real-estate/property-tax-calculator'],
    ['id' => 'mortgage-refinance', 'name' => 'Mortgage Refinance Break-Even Calculator', 'category' => 'Real Estate', 'description' => 'Calculate refinance break-even point and interest savings', 'url' => '/real-estate/mortgage-refinance-calculator'],
    ['id' => 'rent-affordability', 'name' => 'Rent Affordability Calculator', 'category' => 'Real Estate', 'description' => 'Calculate maximum affordable rent using 30% and 40x rules', 'url' => '/real-estate/rent-affordability-calculator'],
    ['id' => 'debt-to-income', 'name' => 'Debt-to-Income (DTI) Calculator', 'category' => 'Financial', 'description' => 'Calculate front-end and back-end DTI for mortgage approvals', 'url' => '/loan-calculators/debt-to-income-calculator'],
    ['id' => 'heloc', 'name' => 'HELOC Calculator', 'category' => 'Financial', 'description' => 'Calculate HELOC draw and repayment payment shock', 'url' => '/loan-calculators/heloc-calculator'],
    ['id' => 'boat-loan', 'name' => 'Boat Loan Calculator', 'category' => 'Financial', 'description' => 'Calculate boat and marine financing monthly payments', 'url' => '/loan-calculators/boat-loan-calculator'],
    ['id' => 'texas-paycheck', 'name' => 'Texas Paycheck Calculator', 'category' => 'Business', 'description' => 'Calculate Texas net take-home pay with 0% state income tax', 'url' => '/texas/paycheck-calculator'],

];

// Group calculators by category
function getCalculatorsByCategory() {
    global $calculators;
    $grouped = [];
    foreach ($calculators as $calc) {
        $grouped[$calc['category']][] = $calc;
    }
    return $grouped;
}

// Get calculator by ID
function getCalculatorById($id) {
    global $calculators;
    foreach ($calculators as $calc) {
        if ($calc['id'] === $id) {
            return $calc;
        }
    }
    return null;
}
?>
