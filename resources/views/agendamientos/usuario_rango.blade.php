@extends('layouts.app') {{-- Asumiendo que tienes una plantilla app.blade.php --}}

@section('content')
    <h1>Servicios Agendados para el Usuario {{ $userId }}</h1>

    <form action="{{ route('agendamientos.usuario.rango', ['userId' => $userId]) }}" method="GET">
        <label for="fecha_inicio">Fecha Inicio:</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" value="{{ $fechaInicio }}" required>

        <label for="fecha_fin">Fecha Fin:</label>
        <input type="date" id="fecha_fin" name="fecha_fin" value="{{ $fechaFin }}" required>

        <label for="perPage">Elementos por página:</label>
        <select name="perPage" id="perPage">
            <option value="5" {{ $agendamientos->perPage() == 5 ? 'selected' : '' }}>5</option>
            <option value="10" {{ $agendamientos->perPage() == 10 ? 'selected' : '' }}>10</option>
            <option value="25" {{ $agendamientos->perPage() == 25 ? 'selected' : '' }}>25</option>
            <option value="50" {{ $agendamientos->perPage() == 50 ? 'selected' : '' }}>50</option>
            <option value="100" {{ $agendamientos->perPage() == 100 ? 'selected' : '' }}>100</option>
        </select>
        <button type="submit">Filtrar</button>
    </form>

    @if ($agendamientos->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Fecha y Hora</th>
                    <th>Servicio</th>
                    <th>Usuario</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($agendamientos as $agendamiento)
                    <tr>
                        <td>{{ $agendamiento->fecha_hora }}</td>
                        <td>{{ $agendamiento->nombre_servicio }}</td>
                        <td>{{ $agendamiento->nombre_usuario }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $agendamientos->links() }} {{-- Para la paginación --}}
    @else
        <p>No se encontraron servicios agendados para este usuario en el rango de fechas especificado.</p>
    @endif
@endsection