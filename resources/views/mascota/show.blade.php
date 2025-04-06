@extends('layouts.app')
@section('content')
<main style="min-height: 100vh;">
<div class="container mt-5">
<div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
    <div class="float-left">
        <span class="card-title">{{ __('Show') }} Mascota</span>
    </div>
    <div class="float-right">
        <a class="btn btn-primary btn-sm" href="{{ route('mascotas.index') }}"> {{ __('Volver') }}</a>
    </div>
</div>
<div class="card-body bg-white">
    
    <div class="form-group mb-2 mb20">
        <strong>Nombre:</strong>
        {{ $mascota->nombre }}
    </div>
    <div class="form-group mb-2 mb20">
        <strong>Edad:</strong>
        {{ $mascota->edad }}
    </div>
    <div class="form-group mb-2 mb20">
        <strong>Raza:</strong>
        {{ $mascota->raza }}
    </div>
    <div class="form-group mb-2 mb20">
        <strong>Sexo:</strong>
        {{ $mascota->sexo }}
    </div>
    <div class="form-group mb-2 mb20">
        <strong>Color:</strong>
        {{ $mascota->color }}
    </div>
    <div class="form-group mb-2 mb20">
        <strong>Información Médica:</strong>
        {{ $mascota->info_medica }}
    </div>
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