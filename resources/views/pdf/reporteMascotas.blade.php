<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte PDF</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 13px;
            margin: 20px;
        }
        h1, h2 {
            text-align: center;
        }
        table {
            width: 100%;
            margin-top: 15px;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #444;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
        .content {
            font-size: 12px;
        }
        .titulos {
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- <h1>Reporte de Usuarios y Mascotas</h1>

    <h2>Usuarios</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->rol ?? 'N/A' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Mascotas</h2>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Edad</th>
                <th>Propietario (ID)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mascotas as $mascota)
                <tr>
                    <td>{{ $mascota->nombre }}</td>
                    <td>{{ $mascota->especie }}</td>
                    <td>{{ $mascota->edad }}</td>
                    <td>{{ $mascota->user_id }}</td>
                </tr>
            @endforeach
        </tbody>
    </table> -->
    <h2>Detalles de la Mascota: {{ $mascota->nombre }}</h2>
    <div class="content">
        <br>
        <div class="card mb-4">
            <h4 class="titulos">Información de la mascota, {{ $mascota->nombre }}</h4>
            <div class="card-body">
                <p><strong>Nombre:</strong> {{ $mascota->nombre }}</p>
                <p><strong>Edad:</strong> {{ $mascota->edad }} años</p>
                <p><strong>Raza:</strong> {{ $mascota->raza }}</p>
                <p><strong>Sexo:</strong> {{ $mascota->sexo }}</p>
                <p><strong>Color:</strong> {{ $mascota->color }}</p>
                <p><strong>Información Médica:</strong> {{ $mascota->info_medica }}</p>
            </div>
        </div>
        <br>
        <div class="card">
            <h4 class="titulos">Información de su propietario<, {{ $mascota->user->nombre }}</h4>
            <div class="card-body">
                <p><strong>Nombre:</strong> {{ $mascota->user->nombre . ' ' . $mascota->user->apellido ?? 'No disponible' }}</p>
                <p><strong>Número de Documento:</strong> {{ $mascota->user->numero_documento ?? 'No disponible' }}</p>
                <p><strong>Email:</strong> {{ $mascota->user->email ?? 'No disponible' }}</p>
                <p><strong>Teléfono:</strong> {{ $mascota->user->telefono ?? 'No disponible' }}</p>
                <p><strong>Dirección:</strong> {{ $mascota->user->direccion ?? 'No disponible' }}</p>
            </div>
        </div>
    </div>
</body>
</html>