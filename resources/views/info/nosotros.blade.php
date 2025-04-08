@extends('layouts.app')
<link href="{{ asset('css/nosotros/nosotros.css') }}" rel="stylesheet" />
@section('content')
<main>
        <section class="about-section">
            <h2>Sobre Nosotros</h2>
            <p>Somos una empresa apasionada por el bienestar animal, dedicada a brindar servicios de calidad para el cuidado y paseo de mascotas. Nuestro objetivo es garantizar que cada mascota reciba la atención, el ejercicio y el cariño que merece.</p>
        </section>

        <section class="mission-vision">
            <div class="mission">
                <h3>Nuestra Misión</h3>
                <p>Proveer servicios integrales de paseo y cuidado de mascotas, fomentando la felicidad, salud y seguridad de cada peludo amigo, mientras fortalecemos el vínculo entre las mascotas y sus dueños.</p>
            </div>
            <div class="vision">
                <h3>Nuestra Visión</h3>
                <p>Convertirnos en la empresa líder en cuidado de mascotas, reconocida por nuestra innovación, compromiso y amor por los animales, promoviendo una cultura de responsabilidad y respeto hacia ellos.</p>
            </div>
            <div class = "slogan">
              <h2>Eslogan</h2>
              <p><em>"Transformamos cada paseo en una aventura y cada cuidado en una experiencia de amor"</em></p>
            </div>
        </section>
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