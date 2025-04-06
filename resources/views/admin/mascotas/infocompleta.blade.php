@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h2>Detalles de la Mascota: {{ $mascota->nombre }}</h2>

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
            <p><strong>Nombre:</strong> {{ $mascota->user->nombre ?? 'No disponible' }}</p>
            <p><strong>Email:</strong> {{ $mascota->user->email ?? 'No disponible' }}</p>
            <p><strong>Teléfono:</strong> {{ $mascota->user->telefono ?? 'No disponible' }}</p>
        </div>
    </div>

    <a href="{{ route('admin.mascotas.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection