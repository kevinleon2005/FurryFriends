<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Asegúrate de que esta vista exista
    }

    public function index(){
        return view('auth.register'); // Asegúrate de que esta vista exista
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'fecha_nacimiento' => ['required', 'date'],
            'telefono' => ['required', 'numeric'],
            //'tipo_documento' => ['required', 'string', 'in' => ['CC', 'TI', 'CE', 'PAS']],
            'numero_documento' => ['required', 'integer', 'unique:users,numero_documento'],
            'direccion' => ['required', 'string', 'max:255'], // <-- Aquí faltaba una coma
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:6', 'max:12', 'confirmed'],
            'role' => ['required', 'string', 'in:admin,paseador,propietario'],
            'terms' => ['accepted'],
        ]);

        $request->merge(['password' => Hash::make($request->password)]);

        User::create($request->except(['password_confirmation', 'terms']));

        return redirect()->route('inicio')->with('success', 'Registro exitoso.');
    }
}