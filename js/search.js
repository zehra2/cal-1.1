const calculators = [
    {id: 'map', name: 'Map Calculator', category: 'Other', description: 'Calculate distances and areas on maps'},
    {id: 'bottleneck', name: 'PC Bottleneck Calculator', category: 'Technology', description: 'Check CPU and GPU bottleneck percentage', url: '/technology/bottleneck-calculator'},
    {id: 'concrete', name: 'Concrete Calculator', category: 'Construction', description: 'Calculate concrete volume needed'},
    {id: 'palworld-breeding', name: 'Palworld Breeding Calculator', category: 'Gaming', description: 'Calculate Palworld breeding combinations'},
    {id: 'cubic-yard', name: 'Cubic Yard Calculator', category: 'Construction', description: 'Convert measurements to cubic yards'},
    {id: 'board-foot', name: 'Board Foot Calculator', category: 'Construction', description: 'Calculate board feet of lumber'},
    {id: 'cd-interest', name: 'CD Interest Calculator', category: 'Financial', description: 'Calculate Certificate of Deposit returns'},
    {id: 'rv-loan', name: 'RV Loan Calculator', category: 'Financial', description: 'Calculate RV loan payments and total cost'},
    {id: 'stair', name: 'Stair Calculator', category: 'Construction', description: 'Calculate stair dimensions and rise/run'},
    {id: 'freelance-rate', name: 'Freelance Rate Calculator', category: 'Business', description: 'Calculate freelance hourly rates', url: '/business/freelance-rate-calculator'},
    {id: 'voltage-drop', name: 'Voltage Drop Calculator', category: 'Technology', description: 'Calculate electrical voltage drop', url: '/technology/voltage-drop-calculator'},
    {id: 'asphalt', name: 'Asphalt Calculator', category: 'Construction', description: 'Calculate asphalt needed for paving'},
    {id: 'dave-ramsey-investment', name: 'Dave Ramsey Investment Calculator', category: 'Financial', description: 'Investment growth calculator'},
    {id: 'markup', name: 'Markup Calculator', category: 'Financial', description: 'Calculate markup and profit margins'},
    {id: 'overtime', name: 'Overtime Calculator', category: 'Business', description: 'Calculate overtime pay'},
    {id: 'calculator-bacalaureat', name: 'Calculator Bacalaureat', category: 'Academic', description: 'Calculate Baccalauréat grades'},
    {id: 'rref', name: 'RREF Calculator', category: 'Math', description: 'Reduced Row Echelon Form calculator'},
    {id: 'blox-fruits', name: 'Blox Fruits Calculator', category: 'Gaming', description: 'Blox Fruits stats calculator'},
    {id: 'terminus', name: 'Terminus Calculator', category: 'Gaming', description: 'Call of Duty Terminus calculator'},
    {id: 'calculadora-de-horas', name: 'Calculadora de Horas', category: 'Business', description: 'Calculate work hours (Spanish)'},
    {id: 'calculo-da-hora', name: 'Cálculo da Hora', category: 'Business', description: 'Calculate hourly rates (Portuguese)'}
];

const searchInput = document.getElementById('searchInput');
const searchResults = document.getElementById('searchResults');

let searchTimeout;

searchInput.addEventListener('input', function(e) {
    clearTimeout(searchTimeout);
    const query = e.target.value.trim().toLowerCase();
    
    if (query.length < 2) {
        searchResults.classList.remove('active');
        return;
    }
    
    searchTimeout = setTimeout(() => {
        const filtered = calculators.filter(calc => 
            calc.name.toLowerCase().includes(query) || 
            calc.description.toLowerCase().includes(query) ||
            calc.category.toLowerCase().includes(query)
        );
        
        displaySearchResults(filtered);
    }, 300);
});

function displaySearchResults(results) {
    if (results.length === 0) {
        searchResults.innerHTML = '<div style="padding: 20px; text-align: center; color: #666;">No calculators found</div>';
        searchResults.classList.add('active');
        return;
    }
    
    const html = results.slice(0, 8).map(calc => `
        <a href="${calc.url || '/calculators/' + calc.id + '.php'}" class="search-result-item">
            <span class="search-result-name">${calc.name}</span>
            <span class="search-result-desc">${calc.description}</span>
        </a>
    `).join('');
    
    searchResults.innerHTML = html;
    searchResults.classList.add('active');
}

document.addEventListener('click', function(e) {
    if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
        searchResults.classList.remove('active');
    }
});

searchInput.addEventListener('focus', function() {
    if (searchResults.innerHTML && searchInput.value.trim().length >= 2) {
        searchResults.classList.add('active');
    }
});
