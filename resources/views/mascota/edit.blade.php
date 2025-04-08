@extends('layouts.app')
<link href="{{ asset('css/formularios/formRegistro.css') }}" rel="stylesheet" />
@section('content')
<section class="section-formulario">
    <div class="register-container">
        <h1>Formulario de Edición de Mascota</h1>
        <form method="POST" action="{{ route('mascotas.update', $mascota->id) }}"  role="form" enctype="multipart/form-data">
            @method('PATCH')  {{--  Necesario para Laravel para indicar que es una actualización --}}
            @csrf

            <h2>Información del Perro</h2>

            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required placeholder="Ingresa el nombre de tu mascota" value="{{ $mascota->nombre }}">
            </div>

            <div>
                <label for="edad">Edad:</label>
                <input type="int" id="edad" name="edad" min="0" placeholder="Ingresa la edad de tu mascota" value="{{ $mascota->edad }}">
            </div>

            <div>
                <label for="raza">Raza:</label>
                <input type="text" id="raza" name="raza" placeholder="Ingresa la raza de tu mascota" value="{{ $mascota->raza }}">
            </div>

            <div>
                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" required>
                    <option value="">Seleccionar sexo</option>
                    <option value="macho" {{ $mascota->sexo == 'macho' ? 'selected' : '' }}>Macho</option>
                    <option value="hembra" {{ $mascota->sexo == 'hembra' ? 'selected' : '' }}>Hembra</option>
                </select>
            </div>

            <div>
                <label for="color">Color:</label>
                <input type="text" id="color" name="color" placeholder="Ingresa el color de tu mascota" value="{{ $mascota->color }}">
            </div>

            <div>
                <label for="info_medica">Información Médica (Opcional):</label>
                <textarea id="info_medica" name="info_medica" placeholder="Ingresa la información médica de tu mascota de forma opcional">{{ $mascota->info_medica }}</textarea>
            </div>
            <br>
            <button type="submit" class="btn-submit">Guardar Cambios</button>
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
