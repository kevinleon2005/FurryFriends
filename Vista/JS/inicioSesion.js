// Referencias a los elementos
const loginForm = document.getElementById('loginForm');
const emailInput = document.getElementById('email');
const passwordInput = document.getElementById('password');
const googleLoginBtn = document.getElementById('googleLogin');
const appleLoginBtn = document.getElementById('appleLogin');
const qrLoginBtn = document.getElementById('qrLogin');
const qrModal = document.getElementById('qrModal');
const closeQrModal = document.getElementById('closeQrModal');

// Lógica para el inicio de sesión con Google
googleLoginBtn.addEventListener('click', () => {
    alert('Inicia sesión con Google.');
    // Aquí iría la integración con la API de Google
});

// Lógica para el inicio de sesión con Apple
appleLoginBtn.addEventListener('click', () => {
    alert('Inicia sesión con Apple.');
    // Aquí iría la integración con la API de Apple
});

// Lógica para el inicio de sesión con código QR
qrLoginBtn.addEventListener('click', () => {
    qrModal.style.display = 'flex';
});

// Cerrar el modal de QR
closeQrModal.addEventListener('click', () => {
    qrModal.style.display = 'none';
});

// Lógica para el inicio de sesión tradicional
loginForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const email = emailInput.value;
    const password = passwordInput.value;

    if (email && password) {
        // Aquí va la lógica de validación y autenticación del formulario
        alert('Inicio de sesión exitoso con correo y contraseña.');
    } else {
        alert('Por favor, ingrese su correo y contraseña.');
    }
});
