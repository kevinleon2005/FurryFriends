<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
    
      <title>FurryFriends</title>
      <!-- slider stylesheet -->
      <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/index/bootstrap.css') }}" />
      <!-- fonts style -->
      <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="{{ asset('css/terminos/terminos.css') }}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{ asset('css/index/responsive.css') }}" rel="stylesheet" />
    </head>
  <body>
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{ route('inicio') }}">
              <img src="{{ asset('images/IMG/Img_logos/Logo.png') }}" alt="Logo de FurryFriends">
              <span class="spanFurry">
                FurryFriends
              </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">
                  <li class="nav-item {{ request()->routeIs('inicio') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ route('inicio') }}">Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item {{ request()->routeIs('nosotros') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
                  </li>
                  <li class="nav-item {{ request()->routeIs('productos') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ route('productos') }}">Servicios</a>
                  </li>
                  <li class="nav-item {{ request()->routeIs('productos') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ route('productos') }}">Productos</a>
                  </li>
                  <li class="nav-item {{ request()->routeIs('login') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                  </li>
                  <li class="nav-item {{ request()->routeIs('register') ? 'active' : '' }}">
                      <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                  </li>
              </ul>
            </div>
          </div>
        </nav>
      </header> 
          <!-- end header section -->
      <div class="terminos-container">
        <div class="terminos-contenido">
          <main class="container">
            <section class="intro">
              <h1 class="Titulos_centrados">Términos y condiciones</h1> 
              <br> 
              <p>Bienvenido a nuestra página, FurryFriends. Por favor, lee atentamente nuestros términos y condiciones antes de usar nuestros servicios.</p>
              <br>
            </section>
            <section class="section">
                <h2 class="h2_centrados">1. Introducción</h2>
                <p class="Párrafos">Al acceder y utilizar esta página web, aceptas cumplir con los siguientes términos y condiciones. Si no estás de acuerdo, debes abstenerte de utilizar nuestros servicios.</p>
            </section>
            <section class="section">
                <h2 class="h2_centrados">2. Uso de los servicios</h2>
                <p class="Párrafos">a. Los usuarios deben proporcionar información verdadera, precisa y actualizada de él y de su mascota al registrarse o interactuar con los servicios.</p>
                <p class="Párrafos">b. Queda prohibido el uso de la página para fines ilícitos, fraudulentos o que violen los derechos de terceros.</p>
            </section>
            <section class="section">
                <h2 class="h2_centrados">3. Registro de Usuario</h2>
                <p class="Párrafos">Para acceder a ciertas funcionalidades, debes registrarte proporcionando información veraz y actualizada, aceptar los términos y condiciones y cumplir con las políticas de privacidad.</p>
            </section>
            <section class="section">
                <h2 class="h2_centrados">4. Propiedad Intelectual</h2>
                <p class="Párrafos">Todos los contenidos, como textos, imágenes y código fuente, son propiedad exclusiva de la empresa y están protegidos por leyes de propiedad intelectual.</p>
            </section>
            <section class="section">
              <h2 class="h2_centrados">5. Privacidad</h2>
              <p class="Párrafos">La información personal proporcionada será tratada conforme a nuestra Política de Privacidad y nunca será compartida sin consentimiento, salvo requerimientos legales.</p>
            </section>
            <section class="section">
                <h2 class="h2_centrados">6. Reservas y cancelaciones</h2>
                <p class="Párrafos">a. Las reservas de paseos y cuidados deben realizarse con antelación y están sujetas a disponibilidad.</p>
                <p class="Párrafos">b. Las cancelaciones deben notificarse con al menos 24 horas de anticipación para evitar cargos adicionales.</p>
            </section>
            <section class="section">
              <h2 class="h2_centrados">7. Modificaciones</h2>
              <p class="Párrafos">Nos reservamos el derecho de actualizar estos términos en cualquier momento. Es responsabilidad del usuario revisar periódicamente los cambios.</p>
            </section>
            <section class="section">
              <h2 class="h2_centrados">8. Ley aplicable</h2>
              <p class="Párrafos">Estos términos se rigen por las leyes del país en el que opera el servicio. Cualquier disputa será resuelta por tribunales competentes.</p>
            </section>
            <section class="contact">
                <h2>Contacto</h2>
                <p>Si tienes alguna pregunta, contáctanos a través de:</p>
                <ul>
                    <li><strong>Correo:</strong> hernandezkaleth647gmail.com</li>
                    <li><strong>Teléfono:</strong> +57 320 370 0529</li>
                    <li><strong>Horario:</strong> Lunes a viernes, 9:00 a.m. - 6:00 p.m.</li>
                </ul>
            </section>
            <section class="container-boton">
              <a href="{{ route('register') }}">
                <button class="boton-volver">Volver</button>
              </a>
            </section>
          </main>
        </div>
      </div> 
    </div>
  </body>
  <footer id="contacto">
      <p>&copy; 2024 FurryFriends. Todos los derechos reservados.</p>
      <p>¿Tienes preguntas?</p>
      <a href="hernandezkaleth647@gmail.com">Contáctanos</a> o llama al +57 3203700529
    
      <p>Dirección: Calle 74 A Sur #92-21, Ciudad de Bogotá</p>
  </footer>
</html>