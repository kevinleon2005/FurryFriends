@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="btns">
        <h2>Detalles de la Mascota: {{ $mascota->nombre }}</h2>
        <a href="{{ route('descargarMascotas.pdf') }}" class="boton_reservar" download="Reporte">Descargar PDF</a>
    </div>
    <br>
    <div class="card mb-4">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $mascota->nombre }}</p>
            <p><strong>Edad:</strong> {{ $mascota->edad }} años</p>
            <p><strong>Raza:</strong> {{ $mascota->raza }}</p>
            <p><strong>Sexo:</strong> {{ $mascota->sexo }}</p>
            <p><strong>Color:</strong> {{ $mascota->color }}</p>
            <p><strong>Información Médica:</strong> {{ $mascota->info_medica }}</p>
        </div>
    </div>

    <h4>Información del Propietario</h4>
    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $mascota->user->nombre . ' ' . $mascota->user->apellido ?? 'No disponible' }}</p>
            <p><strong>Número de Documento:</strong> {{ $mascota->user->numero_documento ?? 'No disponible' }}</p>
            <p><strong>Email:</strong> {{ $mascota->user->email ?? 'No disponible' }}</p>
            <p><strong>Teléfono:</strong> {{ $mascota->user->telefono ?? 'No disponible' }}</p>
            <p><strong>Dirección:</strong> {{ $mascota->user->direccion ?? 'No disponible' }}</p>
        </div>
    </div>
    <br>
    <div class="btns">
        <a href="{{ route('admin.mascotas.index') }}" class="boton_reservar">Volver</a>
    </div>
    
</div>
@endsection