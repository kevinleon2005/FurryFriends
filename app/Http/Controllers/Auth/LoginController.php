<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
    public function index(){
        return view('auth.login');
    }
    public function iniciarSesion(Request $request)
    {
    // Validación
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8',
    ]);

    // Autenticación
    if (Auth::attempt($request->only('email', 'password'))) {
        return redirect()->intended('/inicio/FurryFriendsPages.index');
    }

    return back()->withErrors(['email' => 'Correo electrónico o contraseña incorrectos']);
    }
    public function logout(Request $request)
    {
        Auth::logout(); // Cierra la sesión del usuario

        $request->session()->invalidate(); // Invalida la sesión
        $request->session()->regenerateToken(); // Regenera el token CSRF

        return redirect('/inicio/FurryFriendsPages.index'); // Redirige al login después de cerrar sesión
    }
}
