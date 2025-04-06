<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropietarioController extends Controller
{
    /**
     * Show the propietario dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Lógica específica del propietario
        return view('propietario.dashboard'); // Asegúrate de que esta vista exista
    }
}