@extends('layouts.app')
@section('content')
<main style="min-height: 100vh;">
<div class="container mt-5">
    <h2>Información Básica de Mascotas</h2>
    <table class="table table-bordered" style="background-color: rgba(255, 255, 255, 0.8); border-collapse: collapse;">
    <thead>
            <tr>
                <th>Nombre</th>
                <th>Raza</th>
                <th>Sexo</th>
                <th>Propietario</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mascotas as $mascota)
            <tr>
                <td>{{ $mascota->nombre }}</td>
                <td>{{ $mascota->raza }}</td>
                <td>{{ $mascota->sexo }}</td>
                <td>{{ $mascota->user->nombre ?? 'No disponible' }}</td>
                <td>{{ $mascota->user->email ?? 'No disponible' }}</td>
                <td>{{ $mascota->user->telefono ?? 'No disponible' }}</td>
                <td>
                    <a href="{{ route('admin.mascotas.show', $mascota->id) }}" class="btn btn-sm btn-primary">Ver Información Completa</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('dashboardAdm') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
</main>
@endsection
@section('footer')
    <footer id="contacto">
        <p>&copy; 2024 FurryFriends. Todos los derechos reservados.</p>
        <p>¿Tienes preguntas?</p>
        <a href="hernandezkaleth647@gmail.com">Contáctanos</a> o llama al +57 3203700529
        <p>Dirección: Calle 74 A Sur #92-21, Ciudad de Bogotá</p>
    </footer>
@endsection