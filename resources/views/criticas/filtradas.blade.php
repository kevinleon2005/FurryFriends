@extends('layouts.app')

@section('content')
    <h1>Críticas para el Servicio {{ $servicioId }}</h1>

    <form action="{{ route('criticas.servicio.filtrar', ['servicioId' => $servicioId]) }}" method="GET">
        <label for="calificacion_minima">Calificación Mínima:</label>
        <select id="calificacion_minima" name="calificacion_minima" required>
            <option value="1" {{ $calificacionMinima == 1 ? 'selected' : '' }}>1 estrella</option>
            <option value="2" {{ $calificacionMinima == 2 ? 'selected' : '' }}>2 estrellas</option>
            <option value="3" {{ $calificacionMinima == 3 ? 'selected' : '' }}>3 estrellas</option>
            <option value="4" {{ $calificacionMinima == 4 ? 'selected' : '' }}>4 estrellas</option>
            <option value="5" {{ $calificacionMinima == 5 ? 'selected' : '' }}>5 estrellas</option>
        </select>

        <label for="perPage">Críticas por página:</label>
        <select name="perPage" id="perPage">
            <option value="5" {{ $criticas->perPage() == 5 ? 'selected' : '' }}>5</option>
            <option value="10" {{ $criticas->perPage() == 10 ? 'selected' : '' }}>10</option>
            <option value="25" {{ $criticas->perPage() == 25 ? 'selected' : '' }}>25</option>
            <option value="50" {{ $criticas->perPage() == 50 ? 'selected' : '' }}>50</option>
            <option value="100" {{ $criticas->perPage() == 100 ? 'selected' : '' }}>100</option>
        </select>

        <button type="submit" class="btn btn-primary">Filtrar</button>
    </form>

    @if ($criticas->count() > 0)
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Propietario</th>
                        <th>Paseador</th>
                        <th>Comentario</th>
                        <th>Calificación</th>
                        <th>Fecha de Creación</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($criticas as $critica)
                        <tr>
                            <td>{{ $critica->nombre_propietario }}</td>
                            <td>{{ $critica->nombre_paseador }}</td>
                            <td>{{ $critica->comentario }}</td>
                            <td>{{ $critica->calificacion }} estrella(s)</td>
                            <td>{{ $critica->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $criticas->links() }}  {{-- Para la paginación --}}
    @else
        <p class="alert alert-info">No se encontraron críticas para este servicio con la calificación mínima especificada.</p>
    @endif
@endsection