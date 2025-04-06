<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    /**
     * Redirige al usuario a la página de inicio de sesión de Google.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtiene la información del usuario de Google y lo autentica en la aplicación.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login')->withErrors(['error' => 'Error al autenticar con Google.']);
        }

        // Verificar si el usuario ya existe en la base de datos por su correo electrónico
        $user = User::where('email', $googleUser->email)->first();

        if ($user) {
            // Si el usuario existe, lo autenticamos
            Auth::login($user);
        } else {
            // Si el usuario no existe, lo creamos
            $newUser = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'password' => bcrypt(str()->random(16)),
                // **Asignar el rol de propietario aquí si es necesario**
                'role' => 'propietario', // O la lógica para determinar el rol
            ]);

            Auth::login($newUser);
        }

        // **Redirigir al dashboard del propietario**
        return redirect()->route('propietario.dashboard');
    }
}