@extends('layouts.app')
@section('content')
    <section class="content container-fluid">
        <div class="btns">
            <h2>Detalles del Usuario: {{ $user->nombre . ' ' . $user->apellido }}</h2>
            <a href="{{ route('descargarUsuarios.pdf', ['id' => $user->id]) }}" class="boton_reservar" download="Reporte">Descargar PDF</a>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Información del Usuario') }}</span>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $user->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellido:</strong>
                                    {{ $user->apellido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Nacimiento:</strong>
                                    {{ $user->fecha_nacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $user->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $user->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Documento:</strong>
                                    {{ $user->tipo_documento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Numero Documento:</strong>
                                    {{ $user->numero_documento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Rol:</strong>
                                    {{ $user->role }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $user->direccion }}
                                </div>
                                <!-- <div class="form-group mb-2 mb20">
                                    <strong>Foto Perfil:</strong>
                                    {{ $user->foto_perfil }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Experiencia:</strong>
                                    {{ $user->experiencia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Numero Mascotas:</strong>
                                    {{ $user->numero_mascotas }}
                                </div> -->
                    </div>
                </div>
            </div>
        </div>
        <br>
        <a href="{{ route('users.index') }}" class="boton_reservar">Volver</a>
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
