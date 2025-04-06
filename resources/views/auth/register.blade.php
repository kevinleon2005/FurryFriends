@extends ('layouts.app')
<link href="{{ asset('css/formularios/formRegistro.css') }}" rel="stylesheet" />
@section('content')
<section class="section-formulario">
        <div class="register-container">
            <h1>Formulario de Registro</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.store') }}" method="POST">
            @csrf
            <!-- Información personal -->
            <section>
                <h2>Información Personal</h2>
                
                <label for="nombre">Nombre(s):</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu(s) nombre(s)" required>

                <label for="apellido">Apellido(s):</label>
                <input type="text" id="apellido" name="apellido" placeholder="Ingresa tus apellidos" required >

                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

                <label for="tipoDocumento">Tipo de Documento:</label>
                <select id="tipoDocumento" name="tipo_documento" required>
                    <option value="CC">Cédula de Ciudadanía</option>
                    <option value="TI">Tarjeta de Identidad</option>
                    <option value="CE">Cédula de Extranjería</option>
                    <option value="PAS">Pasaporte</option>
                </select>

                <label for="numero_documento">Número de Documento:</label>
                <input type="int" id="numero_documento" name="numero_documento" required placeholder="Ingresa tu número de documento">
            </section>

            <!-- Contacto -->
            <section>
                <h2>Información de Contacto</h2>

                <label for="telefono">Número de Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" placeholder="Ej: +57 300 1234567" required>

                <label for="email">Correo Electrónico:</label>
                <input id="email" type="email" name="email" placeholder="ejemplo@dominio.com">
                
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" placeholder="Ingrese tu dirección" required>
            </section>

            <!-- Datos adicionales -->
            <section>
                <h2>Datos Adicionales</h2>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Crea una contraseña segura" required>

                <label for="password_confirmation">Confirmar Contraseña:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repite la contraseña" required>
            </section>

            <!-- Asignar role -->
            <section>
                <label for="role">Rol de Usuario:</label>
                    <select id="role" name="role" required>
                        <option value="admin">Administrador</option>
                        <option value="paseador">Paseador</option>
                        <option value="propietario">Propietario</option>
                    </select>
            </section>

        <!-- Términos y condiciones -->
        <section>
            <label>
                <input type="checkbox" name="terms" required>
                Acepto los <a href="{{ route('terminos') }}" id="terms-link">Términos y condiciones</a>.
            </label>
        </section>

        <!-- Botón de registro -->
        <button type="submit" class="btn-submit">Registrarse</button>
    </form>
        </div>
    </section>
@endsection
@section('footer')
<footer id="contacto">
      <p>&copy; 2024 FurryFriends. Todos los derechos reservados.</p>
      <p>¿Tienes preguntas?</p>
      <a href="hernandezkaleth647@gmail.com">Contáctanos</a> o llama al +57 3203700529

      <p>Dirección: Calle 74 A Sur #92-21, Ciudad de Bogotá</p>
  </footer>
@endsection