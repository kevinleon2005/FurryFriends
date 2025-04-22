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
    <h1>Reporte de Productos Inventariados</h1>
        <div class="productos">
            <h2>Detalles del Producto: {{ $producto->nombre }}</h2>
                <h4 class="titulos">Información del producto, {{ $producto->nombre }}</h4>
                <p><strong>Nombre:</strong> {{ $producto->nombre}}</p>
                <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
                <p><strong>Precio:</strong> {{ $producto->precio }} COP</p>
                <p><strong>Cantidad Stock:</strong> {{ $producto->cantidad_stock }}</p>
                <p><strong>Marca:</strong> {{ $producto->marca }}</p>
        </div>
</body>
</html>