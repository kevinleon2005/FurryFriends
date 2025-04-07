@extends('layouts.app')
<link href="{{ asset('css/dashboard/dashboardPaseador.css') }}" rel="stylesheet" />
@section('content')
<div class="dashboard-container">
    <!-- Barra de Navegación -->
    <nav class="sidebar">
        <h2>FurryFriends Dashboard</h2>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Solicitudes de servicios</a></li>
          <li><a href="#">Servicios realizados</a></li>
      </ul>
    </nav>

    <!-- Contenido Principal -->
    <main class="main-content">
      <section>
        <header class="header">
          <div class="header-content">
            <!-- Foto de perfil primero -->
            <div class="user-info">
              <img src="../IMG/Paseadores/Juan.jpeg" alt="Perfil" class="profile-pic">
              <span class="notifications">🔔 3</span>
            </div>
          </div>
        </header>
      </section>

      <!-- Bienvenida -->
      <section class="welcome">
        <h1>¡Hola, {{ Auth::user()->nombre }}!</h1>
        <p>Aquí están tus tareas para hoy</p>
      </section>

      <!-- Cajón de paseos del día -->
      <section class="schedule">
        <h2>Paseos del Día</h2>
        <ul class="walk-list">
          <li class="walk-item">
            <h3>Rex (Golden Retriever)</h3>
            <p>Hora: 10:00 AM</p>
            <p>Duración: 1 hora</p>
            <button class="btn btn-primary">Iniciar Paseo</button>
          </li>
          <li class="walk-item">
            <h3>Luna (Bulldog Francés)</h3>
            <p>Hora: 12:00 PM</p>
            <p>Duración: 30 minutos</p>
            <button class="btn btn-primary">Iniciar Paseo</button>
          </li>
        </ul>
      </section>
      
      <section class="map">
        <h2>Mapa Interactivo</h2>
        <div class="map-container">[Mapa en tiempo real]</div>
      </section>
      
      <section class="finances">
        <h2>Información Financiera</h2>
        <p>Total ingresos hoy: $70.000 COP</p>
        <p>Propinas acumuladas: $5.000 COP</p>
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