<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendamientoServido;
use App\Models\Servicio;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AgendamientoController extends Controller
{
    public function serviciosPorUsuarioYRango(Request $request, $userId)
    {
        // Validación de los datos de entrada
        $validator = Validator::make(['user_id' => $userId] + $request->all(), [
            'user_id' => 'required|exists:users,id|integer',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'perPage' => 'integer|min:1|max:100', // Opcional: Para paginación
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput(); // O manejar el error como prefieras
        }

        // Obtención de los datos de la petición
        $fechaInicio = $request->input('fecha_inicio');
        $fechaFin = $request->input('fecha_fin');
        $perPage = $request->input('perPage', 10); // Valor por defecto de 10 elementos por página

        // Consulta a la base de datos
        $agendamientos = AgendamientoServido::join('servicios', 'agendamiento_servidos.servicio_id', '=', 'servicios.id')
            ->join('users', 'agendamiento_servidos.user_id', '=', 'users.id')
            ->where('agendamiento_servidos.user_id', $userId)
            ->whereBetween('agendamiento_servidos.fecha_hora', [$fechaInicio, $fechaFin])
            ->select('agendamiento_servidos.fecha_hora', 'servicios.nombre_servicio', 'users.nombre as nombre_usuario')
            ->paginate($perPage);

        // Retorno de la vista con los resultados
        return view('agendamientos.usuario_rango', compact('agendamientos', 'userId', 'fechaInicio', 'fechaFin'));
    }
}