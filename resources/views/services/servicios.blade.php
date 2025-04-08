@extends('layouts.app')
<link href="{{ asset('css/servicios/servicios.css') }}" rel="stylesheet" />
<style>
     /* cambio de color a blanco */
    #servicios h2,
    #servicios .service h3,
    #servicios .service p,
    #contacto h2,
    #contacto p,
    #contacto label {
        color: white;
    }

   
</style>

@section('content')
<main>
        <section id="servicios">
            <h2>Servicios Disponibles</h2>
            <div class="service-list">
                <div class="service">
                    <h3>Paseo para mascota</h3>
                    <p>Ofrecemos paseos para tu mascota, ayudando y facilitando el encuentro de un paseador para brindarle el mejor servicio a tu mascota</p>
                </div>
                <div class="service">
                    <h3>Guardería para Mascotas</h3>
                    <p>Un lugar seguro y cómodo donde tu mascota podrá jugar y descansar mientras tú estás fuera.</p>
                </div>
                <div class="service">
                    <h3>Entrenamiento Canino</h3>
                    <p>Clases de entrenamiento personalizadas para mejorar el comportamiento de tu perro.</p>
                </div>
            </div>
        </section>

  <!-- map section -->

  <section class="map_section">
    <div id="map" class="h-100 w-100 ">
    </div>
  </section>


  <!-- end map section -->
        <section id="contacto">
            <h2>Contacto</h2>
            <p>Para más información, no dudes en ponerte en contacto con nosotros.</p>
            <form>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" required></textarea>

                <button type="submit" class="enviar">Enviar</button>
            </form>
        </section>
    </main>
@endsection
@section('footer')
<footer>
      <p>&copy; 2024 FurryFriends. Todos los derechos reservados.</p>
      <p>¿Tienes preguntas?</p>
      <a href="hernandezkaleth647@gmail.com">Contáctanos</a> o llama al +57 3203700529
      <p>Dirección: Calle 74 A Sur #92-21, Ciudad de Bogotá</p>
</footer>
@endsection