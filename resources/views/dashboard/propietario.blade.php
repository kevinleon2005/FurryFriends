@extends('layouts.app')
<link href="{{ asset('css/dashboard/dashboardPropietario.css') }}" rel="stylesheet" />
@section('content')
<div class="dashboard-container">
        <!-- Barra de Navegación -->
        <nav class="sidebar">
            <h2>FurryFriends</h2>
            <ul>
              <h1>Bienvenido, Propietario</h1>
              <li><a href="{{ route('inicio') }}">Inicio</a></li>
              <li><a href="{{ route('mascotas.index') }}">Mis mascotas</a></li>
              <li><a href="#pets">Historial de servicios</a></li>
              <li><a href="#walks">Productos</a></li>
              <li><a href="#stats">Mi cuenta</a></li>
            </ul>
        </nav>
        <!-- Contenido Principal -->
        <main class="main-content">
            <header>
                <h1>Bienvenido FurryFriends</h1>
                <p>Gestión de paseos y cuidado de mascotas.</p>
            </header>

            <!-- Sección de Resumen -->
            <section id="overview" class="card-grid">
                <div class="card">
                    <h2>Estado de Servicios</h2>
                    <p><strong>Próximo paseo:</strong> Sábado 5 de diciembre, 10:00 AM</p>
                    <p><strong>Progreso actual:</strong> Paseador en camino</p>
                    <button class="map">Ver reservara en tiempo real</button>
                </div>
            </section>
            <section class="card">
                <h2>Resumen de Mi Mascota</h2>
                <img src="../IMG/mascotas/Dogo-Argentino.jpeg" alt="Mascota" class="pet-img">
                <br>
                <p><strong>Nombre:</strong> Coco</p>
                <p><strong>Especie:</strong> Perro(Canino)</p>
                <p><strong>Raza:</strong> Dogo Argentino</p>
                <p><strong>Edad:</strong> 1 año y medio</p>
                <p><strong>Último servicio:</strong> Paseo el 2 de diciembre</p>
            </section>
            <section class="card">
                <h2>Productos Recomendados</h2>
                <ul>
                  <li class="listas">Chaleco para perro <button class="reservas">Agregar al carrito</button></li>
                  <li class="listas">Juguete interactivo <button class="reservas">Agregar al carrito</button></li>
                  <li class="listas">Snack saludable <button class="reservas">Agregar al carrito</button></li>
                </ul>
            </section>

            <!-- Sección de Servicios -->
            <section class="card">
                <h2>Servicios Disponibles</h2>
                <ul>
                    <a href="">
                        <li class="listas">Paseos personalizados</li>
                    </a>
                    <a href="">
                        <li class="listas">Guardería</li>
                    </a>
                    <a href="">
                        <li class="listas">Atención personalizada</li>
                    </a>
                </ul>
            </section>
        </main>
</div>
@endsection
@section('footer')
<footer id="contacto">
  <p>&copy; 2024 FurryFriends. Todos los derechos reservados.</p>
  <p>¿Tienes preguntas?</p>
  <a href="hernandezkaleth647@gmail.com">Contáctanos</a> o llama al +57 3203700529

  <p>Dirección: Calle 74 A Sur #92-21, Ciudad de Bogotá</p>
</footer>
@endsection