// Referencias a los elementos
const countrySelect = document.getElementById('country');
const citySelect = document.getElementById('city');
const termsBtn = document.getElementById('termsBtn');
const termsModal = document.getElementById('termsModal');
const closeTermsModal = document.getElementById('closeTermsModal');

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
