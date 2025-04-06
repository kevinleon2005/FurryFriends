<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Lógica para obtener los datos del dashboard (si es necesario)
        // ...

        return view('dashboard.propietario'); // Retorna la vista del dashboard
    }
}