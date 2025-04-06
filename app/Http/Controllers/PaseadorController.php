<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaseadorController extends Controller
{
    /**
     * Show the paseador dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Lógica específica del paseador
        return view('paseador.dashboard'); // Asegúrate de que esta vista exista
    }
}