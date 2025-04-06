<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <!-- Vincular el archivo CSS externo -->
    <link rel="stylesheet" href="{{ asset('css/errors/404.css') }}">
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <p>¡Oops!</p>
        <p>Lo sentimos, no pudimos encontrar la página que estás buscando...</p>
        <p>
            Deberias volver a la <a href="{{ route('inicio') }}">página principal</a>.
        </p>
        <div class="dog-logo">
            <img src="{{ asset('images/IMG/iconos/Errores.png') }}" alt="Perrito triste">
        </div>
    </div>
</body>
</html>