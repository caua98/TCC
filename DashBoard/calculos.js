function calculateIMC() {
    const weight = parseFloat(document.getElementById('weight').value);
    const height = parseFloat(document.getElementById('height').value);
    
    if (weight && height) {
        const imc = weight / (height * height);
        const valueElement = document.getElementById('value');
        const descriptionElement = document.getElementById('description');

        valueElement.textContent = imc.toFixed(2);

        if (imc < 18.5) {
            descriptionElement.textContent = 'Abaixo do peso';
        } else if (imc < 24.9) {
            descriptionElement.textContent = 'Peso normal';
        } else if (imc < 29.9) {
            descriptionElement.textContent = 'Sobrepeso';
        } else {
            descriptionElement.textContent = 'Obesidade';
        }

        document.getElementById('infos').classList.remove('hidden');
    } else {
        alert('Por favor, insira valores válidos.');
    }
}

function calculateTMB() {
    const gender = document.getElementById('gender').value;
    const age = parseFloat(document.getElementById('age').value);
    const weight = parseFloat(document.getElementById('weight2').value);
    const height = parseFloat(document.getElementById('height2').value);
    const activityLevel = parseFloat(document.getElementById('activity_level').value);
    
    if (age && weight && height && activityLevel) {
        let tmb;
        
        if (gender === 'male') {
            tmb = 88.36 + (13.4 * weight) + (4.8 * height * 100) - (5.7 * age);
        } else {
            tmb = 447.6 + (9.2 * weight) + (3.1 * height * 100) - (4.3 * age);
        }

        const totalTMB = tmb * activityLevel;

        document.getElementById('value2').textContent = totalTMB.toFixed(2);
        document.getElementById('infos2').classList.remove('hidden');
    } else {
        alert('Por favor, preencha todos os campos corretamente.');
    }
}