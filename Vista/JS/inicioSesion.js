// Esperar a que se cargue el DOM
document.addEventListener("DOMContentLoaded", () => {
    // Seleccionar el formulario
    const loginForm = document.querySelector(".login-form form");
    
    // Seleccionar campos del formulario
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");

    // Agregar un evento para validar el formulario antes de enviarlo
    loginForm.addEventListener("submit", (event) => {
        // Prevenir el envío del formulario si hay errores
        if (!validateForm()) {
            event.preventDefault();
        }
    });

    // Función de validación del formulario
    function validateForm() {
        let isValid = true;

        // Validar el campo de correo
        const emailValue = emailInput.value.trim();
        if (!validateEmail(emailValue)) {
            showError(emailInput, "Por favor, ingrese un correo electrónico válido.");
            isValid = false;
        } else {
            clearError(emailInput);
        }

        // Validar el campo de contraseña
        const passwordValue = passwordInput.value.trim();
        if (passwordValue.length < 6) {
            showError(passwordInput, "La contraseña debe tener al menos 6 caracteres.");
            isValid = false;
        } else {
            clearError(passwordInput);
        }

        return isValid;
    }

    // Función para validar el formato de correo electrónico
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Función para mostrar un error
    function showError(input, message) {
        const parent = input.parentElement;
        // Elimina mensajes de error previos
        clearError(input);
        // Crear un nuevo mensaje de error
        const error = document.createElement("small");
        error.textContent = message;
        error.style.color = "red";
        parent.appendChild(error);
    }

    // Función para eliminar mensajes de error
    function clearError(input) {
        const parent = input.parentElement;
        const existingError = parent.querySelector("small");
        if (existingError) {
            parent.removeChild(existingError);
        }
    }
});
