@extends ('layouts.app')
@section ('content')
    <div class="body_area">
    <!-- Sección de Inicio -->
    <section class="hero-banner">
        <div class="hero-content">
            <h1>Bienvedido a FurryFriends</h1>
            <p>¡Prepárate para solicitar servicios
                personalizados para tu mascota!</p>
            <a href="{{ route('servicios') }}" class="btn-primary">Solicitar servicios</a>
        </div>
    </section>
    <br>
    <!-- Sección de servicios -->
    <section id="servicios">
        <h2 class="Titulos_centrados">Servicios</h2>
        <div class="servicios-panel">
            <div class="servicio">
                <img src="{{ asset('images/IMG/Img_servicios/PaseoMascotas.jpg') }}" alt="Paseo de mascotas">
                <br>
                <br>
                <h3>Paseo de Mascotas</h3>
                <br>
                <p>Ofrecemos paseos diarios para que tu mascota se mantenga activa y feliz. Servicios personalizados según las necesidades de tu mascota.</p>
                <p>Precio: $15.000 COP/Paseo</p>
                <br>
                <a href="{{ route('servicios') }}">
                    <button class="boton_reservar">Reservar</button>
                </a>
            </div>
            <div class="servicio">
                <img src="{{ asset('images/IMG/Img_servicios/GuarderíaMascota.jpg') }}" alt="Guardería para mascotas">
                <br>
                <br>
                <h3>Guardería para Mascotas</h3>
                <p>Servicio de guardería donde tu mascota estará en buenas manos, con atención y cuidados todo el día.</p>
                <p>Precio: $50.000 COP/Día</p>
                <br>
                <a href="{{ route('servicios') }}">
                    <button class="boton_reservar">Reservar</button>
                </a>
            </div>
            <div class="servicio">
                <img src="{{ asset('images/IMG/Img_servicios/atencionPersonalizadaMascota.png') }}" alt="Cuidado y atención">
                <br>
                <br>
                <h3>Cuidado y Atención Personalizada</h3>
                <p>Servicio de cuidado individual, con alimentación y atención especial para tu mascota mientras estás fuera.</p>
                <p>Precio: $40.000 COP/Consulta</p>
                <br>
                <a href="{{ route('servicios') }}">
                    <button class="boton_reservar">Reservar</button>
                </a>
            </div>
        </div>
    </section>
    <!-- Sección de catálogo de productos -->
    <section id="catalogo">
        <h2 class="Titulos_centrados">Catálogo de Productos</h2>
        <div class="catalogo">
            <div class="producto">
                <img src="{{ asset('images/IMG/Img_productos/RopaMascota.jpg') }}" alt="Ropa para mascota">
                <h3>Ropa para mascota</h3>
                <p>Ropa de alta calidad para tu mascota.</p>
                <a href="{{ route('productos') }}">
                    <button class="boton_reservar">Ver más</button>
                </a>
            </div>
            <div class="producto">
                <img src="{{ asset('images/IMG/Img_productos/ComidaMascota.jpeg') }}" alt="Comida para mascota">
                <h3>Comida para mascota</h3>
                <p>Comida de alta calidad para tu mascota.</p>
                <a href="{{ route('productos') }}">
                    <button class="boton_reservar">Ver más</button>
                </a>
            </div>
            <div class="producto">
                <img src="{{ asset('images/IMG/Img_productos/AccsesoriosMascota.jpeg') }}" alt="Accesorios para mascota">
                <h3>Accesorios para mascota</h3>
                <p>Collares, arneses, jabones, shampoo, etc.</p>
                <a href="{{ route('productos') }}">
                    <button class="boton_reservar">Ver más</button>
                </a>
            </div>
            <div class="producto">
                <img src="{{ asset('images/IMG/Img_productos/JuguetesMascota.jpeg') }}" alt="Producto 3">
                <h3>Juguetes para mascota</h3>
                <p>Los mejores juguetes para que tu mascota se distraiga.</p>
                <a href="{{ route('productos') }}">
                    <button class="boton_reservar">Ver más</button>
                </a>
            </div>
        </div>
    </section>
    <!-- footer section -->
    <section>
    </section>
    <!-- footer section -->
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