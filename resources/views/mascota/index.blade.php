@extends('layouts.app')
@section('content')
<main style="min-height: 100vh;">
<div class="container mt-5">
    <h2>Información Básica de Mascotas</h2>
    <table class="table table-bordered" style="background-color: rgba(255, 255, 255, 0.8); border-collapse: collapse;">
        <div class="float-right">
            <a href="{{ route('mascotas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                {{ __('Registrar Nueva Mascota') }}
            </a>
        </div>
        <br>
        <thead class="thead">
            <tr>
                <th>Nombre</th>
                <th>Raza</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Color</th>
                <th>Información Médica</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->nombre }}</td>
                    <td>{{ $mascota->raza }}</td>
                    <td>{{ $mascota->sexo }}</td>
                    <td>{{ $mascota->edad }}</td>
                    <td>{{ $mascota->color }}</td>
                    <td>{{ $mascota->info_medica }}</td>
                    <td>
                        <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST">
                            <a class="btn btn-sm btn-primary " href="{{ route('mascotas.show', $mascota->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                            <a class="btn btn-sm btn-success" href="{{ route('mascotas.edit', $mascota->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar esta mascota?')"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                        </form>
                    </td> 
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('dashboardPro') }}" class="btn btn-secondary mt-3">Volver</a>
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