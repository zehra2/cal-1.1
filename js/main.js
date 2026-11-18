function appendToDisplay(value) {
    const display = document.getElementById('calcDisplay');
    if (display.value === '0') {
        display.value = value;
    } else {
        display.value += value;
    }
}

function clearDisplay() {
    document.getElementById('calcDisplay').value = '0';
}

function deleteLast() {
    const display = document.getElementById('calcDisplay');
    if (display.value.length === 1) {
        display.value = '0';
    } else {
        display.value = display.value.slice(0, -1);
    }
}

function calculate() {
    const display = document.getElementById('calcDisplay');
    try {
        display.value = eval(display.value.replace('×', '*').replace('A', '/'));
    } catch (error) {
        display.value = 'Error';
        setTimeout(() => {
            display.value = '0';
        }, 1500);
    }
}

document.addEventListener('DOMContentLoaded', function() {
    const dropdowns = document.querySelectorAll('.dropdown');
    
    dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        
        toggle.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                dropdown.classList.toggle('active');
            }
        });
    });
    
    const forms = document.querySelectorAll('.calculator-form');
    forms.forEach(form => {
        form.addEventListener('submit', function() {
            const submitBtn = form.querySelector('.btn');
            if (submitBtn) {
                submitBtn.textContent = 'Calculating...';
                submitBtn.disabled = true;
            }
        });
    });
    
    const shapeSelect = document.getElementById('shape');
    if (shapeSelect) {
        shapeSelect.addEventListener('change', function() {
            const widthGroup = document.getElementById('widthGroup');
            const widthInput = document.getElementById('width');
            
            if (this.value === 'circular') {
                widthGroup.style.display = 'none';
                widthInput.removeAttribute('required');
            } else {
                widthGroup.style.display = 'block';
                widthInput.setAttribute('required', 'required');
            }
        });
        
        if (shapeSelect.value === 'circular') {
            const widthGroup = document.getElementById('widthGroup');
            const widthInput = document.getElementById('width');
            if (widthGroup) widthGroup.style.display = 'none';
            if (widthInput) widthInput.removeAttribute('required');
        }
    }
});
