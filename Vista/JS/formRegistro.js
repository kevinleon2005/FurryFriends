document.getElementById("formulario").addEventListener("submit", function (event) {
    event.preventDefault(); // Evita el envío del formulario para validación

    // Obtener valores de los campos
    const name = document.getElementById("name").value.trim();
    const lastname = document.getElementById("lastname").value.trim();
    const dateNac = document.getElementById("date_Nac").value;
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const address = document.getElementById("address").value.trim();
    const city = document.getElementById("city").value.trim();
    const password = document.getElementById("password").value.trim();
    const confirmPassword = document.getElementById("confirm-password").value.trim();
    const termsAccepted = document.querySelector("input[name='terms']").checked;

    let isValid = true; // Flag para seguimiento de errores
    let errorMessage = ""; // Mensaje de error acumulado

    // Validar nombre
    if (name.length < 3) {
        isValid = false;
        errorMessage += "El nombre debe tener al menos 3 caracteres.\n";
    }

    // Validar apellido
    if (lastname.length < 4) {
        isValid = false;
        errorMessage += "El apellido debe tener al menos 4 caracteres.\n";
    }

    // Validar fecha de nacimiento
    if (!dateNac) {
        isValid = false;
        errorMessage += "Debe ingresar una fecha de nacimiento válida.\n";
    }

    // Validar email con expresión regular
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        isValid = false;
        errorMessage += "Debe ingresar un correo electrónico válido.\n";
    }

    // Validar número de teléfono
    const phoneRegex = /^\+?\d{7,15}$/; // Acepta números con + y de 7 a 15 dígitos
    if (!phoneRegex.test(phone)) {
        isValid = false;
        errorMessage += "Debe ingresar un número de teléfono válido (Ej: +57 300 1234567).\n";
    }

    // Validar dirección
    if (address.length < 5) {
        isValid = false;
        errorMessage += "La dirección debe tener al menos 5 caracteres.\n";
    }

    // Validar ciudad
    if (city.length < 2) {
        isValid = false;
        errorMessage += "La ciudad debe tener al menos 2 caracteres.\n";
    }

    // Validar contraseñas
    if (password.length < 6) {
        isValid = false;
        errorMessage += "La contraseña debe tener al menos 6 caracteres.\n";
    }
    if (password !== confirmPassword) {
        isValid = false;
        errorMessage += "Las contraseñas no coinciden.\n";
    }

    // Validar términos y condiciones
    if (!termsAccepted) {
        isValid = false;
        errorMessage += "Debe aceptar los términos y condiciones.\n";
    }

    // Mostrar resultado
    const successMessage = document.getElementById("successMessage");
    if (isValid) {
        successMessage.textContent = "¡Formulario enviado exitosamente!";
        successMessage.style.color = "green";
        this.reset(); // Reinicia el formulario
    } else {
        successMessage.textContent = errorMessage;
        successMessage.style.color = "red";
    }
});


