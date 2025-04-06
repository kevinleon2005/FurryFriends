<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>505 - Internal Server Error</title>
    <!-- Vincular el archivo CSS externo -->
    <link rel="stylesheet" href="{{ asset('css/errors/404.css') }}">
</head>
<body>
    <div class="container">
        <h1>505</h1>
        <p>¡Vaya! Ha ocurrido un error interno en el servidor.</p>
        <p>Estamos trabajando para resolver el problema. Por favor inténtalo nuevamente.</p>    
        <p>Si necesitas asistencia, <a href="hernandezkaleth647@gmail.com">contáctate con nosotros</a>.</p>
        <p>
            Volver a la
            <a href="{{ route('inicio') }}">página principal</a>.
        </p> 
        <div class="dog-logo">
            <img src="{{ asset('images/IMG/iconos/Errores.png') }}" alt="Perrito triste">
        </div>
    </div>
</body>
</html>