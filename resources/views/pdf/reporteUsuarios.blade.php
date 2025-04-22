<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de Usuarios</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            margin: 40px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .usuario {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ccc;
        }

        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Reporte de Usuarios Registrados</h1>
        <div class="usuario">
            <h2>Detalles del Usuario: {{ $usuario->nombre }}</h2>
                <h4 class="titulos">Información del Usuario, {{ $usuario->nombre }}</h4>
                <p><strong>Nombre:</strong> {{ $usuario->nombre . ' ' . $usuario->apellido }}</p>
                <p><strong>Fecha de Nacimiento:</strong> {{ $usuario->fecha_nacimiento }}</p>
                <p><strong>Teléfono:</strong> {{ $usuario->telefono }}</p>
                <p><strong>Correo Electrónico:</strong> {{ $usuario->email }}</p>
                <p><strong>Tipo de Documento:</strong> {{ $usuario->tipo_documento }}</p>
                <p><strong>Número de Documento:</strong> {{ $usuario->numero_documento }}</p>
                <p><strong>Rol:</strong> {{ $usuario->role }}</p>
                <p><strong>Dirección:</strong> {{ $usuario->direccion }}</p>
        </div>
</body>
</html>
