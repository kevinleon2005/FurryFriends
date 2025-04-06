<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Si necesitas acceder al usuario autenticado

class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Puedes agregar lógica específica del administrador aquí
        // Por ejemplo, recuperar datos para mostrar en el dashboard

        return view('admin.dashboard'); // Asegúrate de que esta vista exista
    }
}
