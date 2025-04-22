<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/index/bootstrap.css') }}" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/index/styles.css') }}" rel="stylesheet" />
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
                    FURRYFRIENDS
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
    <li class="nav-item {{ request()->routeIs('servicios') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('servicios') }}">Servicios</a>
    </li>
    <li class="nav-item {{ request()->routeIs('productos') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('productos') }}">Productos</a>
    </li>
    @guest
        <li class="nav-item {{ request()->routeIs('login') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
        </li>
        <li class="nav-item {{ request()->routeIs('register') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
        </li>
    @else
        <li class="nav-item dropdown-static"> <a class="nav-link" href="#">
                {{ Auth::user()->nombre }} {{ Auth::user()->apellido }} ▼
            </a>
            <ul class="submenu dropdown-static-menu"> 
                @if (Auth::user()->role === 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboardAdm') }}">Panel de Administración</a>
                    </li>
                @elseif (Auth::user()->role === 'propietario')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboardPro') }}">Mi Dashboard</a>
                        <a class="nav-link" href="{{ route('mascotas.create') }}">Registrar mi Mascota</a>
                        <a class="nav-link" href="{{ route('mascotas.create') }}">Mi Perfil</a>
                    </li>
                @elseif (Auth::user()->role === 'paseador')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboardPas') }}">Mi Dashboard</a>
                    </li>
                @else
                    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                    </li>
                @endif
                <li class="nav-item">
                    <!-- <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href=""></a>
                        <button type="submit" class="dropdown-item-static">Cerrar Sesión</button>
                    </form> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Cerrar Sesión</a>
                    </li>
                </li>
            </ul>
        </li>
    @endguest
</ul>
                </div>
            </div>
        </nav>
    </header>


        <main class="py-4">
            @yield('content')
        </main>
        
    </div>
    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
@yield('footer')