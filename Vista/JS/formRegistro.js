function validateForm(){
    let isValid = true;
    // Limpie errores anteriores
    clearErrors();
    // Capture los valores del formulario
    document.addEventListener('DOMContentLoaded', function () {
        // Código de validación
    });
    
    // Referencias a los elementos
    const names = document.getElementById('name').value.trim();
    const lastname = document.getElementById('lastname').value.trim();
    const nacimiento = document.getElementById('date_Nac').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const countrySelect = document.getElementById('country');
    const citySelect = document.getElementById('city');
    const termsBtn = document.getElementById('termsBtn');
    const termsModal = document.getElementById('termsModal');
    const closeTermsModal = document.getElementById('closeTermsModal');
    
    // Validación de datos
    // Validar nombre
    if (names === ''){
        showError('name', 'El nombre es requerido.');
        isValid = false;
    } else if (names.length < 3) {
        showError('name', 'El nombre debe tener al menos 3 caracteres.');
        isValid = false;
    }
    // Validar apellido
    if (lastname === ''){
        showError('name', 'El apellido es requerido.');
        isValid = false;
    } else if (lastname.length < 4) {
        showError('name', 'El apellido debe tener al menos 4 caracteres.');
        isValid = false;
    }
    // Validar correo
    const emailPettern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+,[a-aZ-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
        showError('email', 'El correo electrónico no es válido.');
        isValid = false;
    }
    // Validar teléfono (Formato 123-456-7890)
    const phonePattern = /^\d{3}-\d{3}-\d{4}$/;
    if (!phonePattern.test(phone)) {
        showError('phone', 'El número de teléfono no es válido, debe tener un formato 123-456-7890');
        isValid = false;
    }
    // Validar fecha de inicio 
    if (startDate === ''){
        showError('startDate', 'La fecha de inicio es requerida.');
        isValid = false;
    // Si todo es verdadero que muestre el mensaje de éxito y permitir envío
    if (isValid){
        document.getElementById('successMessage').textContent = 'Formulario enviado con éxito';
        document.getElementById('successMessage').style.color = 'green';
    } else {
        document.getElementById('successMessage').textContent = 'Formulario no enviado, revise los errores';
    } return isValid;
    }
    
    
    // Lista de ciudades por país
    const citiesByCountry = {
        Argentina: ["Buenos Aires", "Córdoba", "Rosario"],
        Bolivia: ["La Paz", "Cochabamba", "Santa Cruz"],
        Brasil: ["Brasilia", "Río de Janeiro", "Sao Paulo"],
        Chile: ["Santiago", "Valparaíso", "Concepción"],
        Colombia: ["Bogotá", "Medellín", "Cali"],
        Ecuador: ["Quito", "Guayaquil", "Cuenca"],
        Paraguay: ["Asunción", "Encarnación", "Ciudad del Este"],
        Perú: ["Lima", "Cusco", "Arequipa"],
        Uruguay: ["Montevideo", "Punta del Este", "Salto"],
        Venezuela: ["Caracas", "Maracaibo", "Valencia"]
    };
    
    // Actualizar las ciudades cuando se seleccione un país
    countrySelect.addEventListener('change', () => {
        const selectedCountry = countrySelect.value;
    
        // Limpiar las opciones anteriores
        citySelect.innerHTML = '<option value="">Seleccione una ciudad</option>';
    
        if (selectedCountry && citiesByCountry[selectedCountry]) {
            // Agregar nuevas opciones
            citiesByCountry[selectedCountry].forEach(city => {
                const option = document.createElement('option');
                option.value = city;
                option.textContent = city;
                citySelect.appendChild(option);
            });
        }
    });
    
    // Mostrar el modal de términos y condiciones
    termsBtn.addEventListener('click', () => {
        termsModal.style.display = 'flex';
    });
    
    // Cerrar el modal de términos y condiciones
    closeTermsModal.addEventListener('click', () => {
        termsModal.style.display = 'none';
    });    
}

// Función para mostrar errores
function showError(filed, message){
const inputField = document.getElementById(filed);
const errorDiv = document.getElementById(filed);
inputField.classList.add('error')
errorDiv.textContent = message;
}
// Limpiar errores
function clearErrors(){
const inputField = document.querySelectorAll('.form-group input');
inputField.forEach(div => {
    div.textContent = '';
});

const errorDivs = document.querySelectorAll('form-group .error');
errorDivs.forEach(div => {
    div.textContent = '';
});
document.getElementById('successMessage').textContent = '';
}
