@extends('layouts.app')
@section('content')
    <section class="content container-fluid">
        <div class="btns">
            <h2>Detalles del producto: {{ $producto->nombre}}</h2>
            <a href="{{ route('descargarProductos.pdf', ['id' => $producto->id]) }}" class="boton_reservar" download="Reporte">Descargar PDF</a>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __($producto->nombre) }}</span>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $producto->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripción:</strong>
                                    {{ $producto->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Precio:</strong>
                                    {{ $producto->precio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cantidad Stock:</strong>
                                    {{ $producto->cantidad_stock }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Marca:</strong>
                                    {{ $producto->marca }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <a href="{{ route('productos.index') }}" class="boton_reservar">Volver</a>
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