@extends ('layouts.app')
<link href="{{ asset('css/formularios/inicioSesion.css') }}" rel="stylesheet" />
@section('content')
    <section class="container-login">
    <div class="login-container">
        <div class="login-form">
            <h1>Iniciar Sesión</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <label for="email">{{ __('Correo electrónico') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Ingresa tu correo electrónico"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="password">{{ __('Contraseña') }}</label>
                        <div class="password-container">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Ingresa tu contraseña"
                                name="password" required autocomplete="current-password">
                            <span class="toggle-password" id="togglePassword">👁️</span>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div>
                    <div>
                        <div class="">
                            <label class="" for="remember">
                                {{ __('Recordar mis datos') }}
                            </label>
                            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        </div>
                    </div>
                </div>
                <!-- Botón de Inicio de Sesión -->
                <br>
                <div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Iniciar Sesión') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
                
            <!-- Separador -->
            <!-- <div class="separator">
                <span>o</span>
            </div>
            <br> -->
            <!-- Botones de Inicio con Google, Apple y Código QR -->
            <!-- <div class="social-login">
                <a href="{{ route('login.google') }}">
                    <button class="btn-google">
                        <img src="{{ asset('images/IMG/iconos/Google.svg') }}" alt="Google">
                        Iniciar con Google
                    </button>
                </a>
                <button class="btn-apple">
                    <img src="{{ asset('images/IMG/iconos/Apple.svg') }}" alt="Apple">
                    Iniciar con Apple
                </button>
                <button class="btn-qr">
                    <img src="{{ asset('images/IMG/iconos/codeQR.svg') }}" alt="Código QR">
                    Iniciar con Código QR
                </button>
            </div> -->
        </div>
    </div>
    <!-- Modal para el código QR -->
    <div id="qrModal" class="modal" style="display: none;">
        <div class="modal-content">
            <h3>Escanea el Código QR para Iniciar Sesión</h3>
            <div id="qrCode" class="qr-code">
                <!-- Aquí iría el código QR generado dinámicamente -->
                <img src="qr-placeholder.png" alt="Código QR">
            </div>
            <button id="closeQrModal">Cerrar</button>
        </div>
    </div>
    </div>
    </section>
    <script>
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.textContent = type === 'password' ? 'Ø' : '☉'; // Cambiar el icono
        });
    </script>
@endsection
@section('footer')
<footer id="contacto">
      <p>&copy; 2024 FurryFriends. Todos los derechos reservados.</p>
      <p>¿Tienes preguntas?</p>
      <a href="hernandezkaleth647@gmail.com">Contáctanos</a> o llama al +57 3203700529

      <p>Dirección: Calle 74 A Sur #92-21, Ciudad de Bogotá</p>
</footer>
@endsection