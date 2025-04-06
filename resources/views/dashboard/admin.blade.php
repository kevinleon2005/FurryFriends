@extends('layouts.app')
<link href="{{ asset('css/dashboard/dashboardAdmin.css') }}" rel="stylesheet" />
@section('content')
<div class="dashboard-container">
          <!-- Barra de Navegación -->
          <nav class="sidebar">
              <h2>FurryFriends Dashboard</h2>
              <ul>
                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                <li><a href="{{ route('user') }}">Usuarios</a></li>
                <li><a href="{{ route('producto') }}">Productos</a></li>
                <li><a href="#">Solicitudes</a></li>
                <li><a href="#">Usuarios</a></li>
                <li><a href="#">Reportes</a></li>
                <li><a href="#">Configuración</a></li>
                <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Cerrar sesión</button>
                </form>
                </li>  
            </ul>
          </nav>

          <!-- Contenido Principal -->
          <main class="main-content">
              <header>
                  <h1>Bienvenido al Dashboard, Administrador {{ Auth::user()->nombre }}</h1>
                  <p>Gestión de paseos y cuidado de mascotas.</p>
              </header>

              <!-- Imagne de administrador -->
              <section id="overview" class="card-grid">
                <div class="card">
                  <h1>Dashboard</h1>
                  <span>Administrador</span>
                  <div class="profile">
                      <img src="../IMG/Admins/Kevin.jpg" alt="Admin Profile" class="admin">
                  </div>
                </div>
              </section>
              <!-- Sección de Resumen -->
              <section id="overview" class="card-grid">
                <div class="card">
                    <h3>Mascotas Registradas</h3>
                    <p>12</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 75%;"></div>
                    </div>
                </div>
                <div class="card">
                    <h3>Servicios Activos</h3>
                    <p>3</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 75%;"></div>
                    </div>
                </div>
                <div class="card">
                    <h3>Paseos Programados</h3>
                    <p>5</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 75%;"></div>
                    </div>
                </div>
              </section>

              <!-- Sección de Servicios -->
              <section id="services">
                  <h2>Servicios Disponibles</h2>
                  <ul>
                      <li>Paseos personalizados</li>
                      <li>Guardería</li>
                      <li>Atención personalizada</li>
                  </ul>
              </section>

              <section class="kpis">
                <div class="kpi">
                    <h3>Solicitudes Pendientes</h3>
                    <p>15</p>
                </div>
                <div class="kpi">
                    <h3>Paseos en Curso</h3>
                    <p>8</p>
                </div>
                <div class="kpi">
                    <h3>Ingresos del Mes</h3>
                    <p>$20.000.000 COP</p>
                </div>
                <div class="kpi">
                    <h3>Clientes Activos</h3>
                    <p>120</p>
                </div>
            </section>

            <!-- Activity Section -->
            <section class="activity">
                <h2>Actividad Reciente</h2>
                <ul>
                    <li>Nuevo paseo solicitado para "Max".</li>
                    <li>Paseo en curso: "Bella" con cuidador María.</li>
                    <li>Reporte de incidente: Zona norte.</li>
                </ul>
            </section>

            <!-- Map Section -->
            <section class="map">
                <h2>Mapa Interactivo</h2>
                <p>Mapa en tiempo real aquí.</p>
            </section>

              <!-- Gráfico de Estadísticas -->
              <section id="stats">
                  <h2>Estadísticas</h2>
                  <canvas id="statsChart"></canvas>
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
