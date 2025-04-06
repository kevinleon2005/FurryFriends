<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardAdmController;
use App\Http\Controllers\DashboardPasController;
use App\Http\Controllers\DashboardProController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\TerminosController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendamientoController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\PaseadorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\Auth\GoogleController;

Route::get('/', function () {return view('home.index');})->name('home');
Route::get('/inicio/FurryFriendsPages.index', [HomeController::class, 'index'])->name('inicio');
Route::get('/info/nosotros', [InfoController::class, 'nosotros'])->name('nosotros');
Route::get('/products/productos', [ProductsController::class, 'productos'])->name('productos');
Route::get('/services/servicios', [ServiciosController::class, 'servicios'])->name('servicios');
Route::get('/auth/iniciarSesion', [LoginController::class, 'index'])->name('login');
Route::post('/auth/iniciarSesion', [LoginController::class, 'index'])->name('login');
Route::get('/auth/register', [RegisterController::class, 'index'])->name('register');
Route::post('/auth/register', [UserController::class, 'store'])->name('register.store');
Route::get('/condiciones/terminos', [TerminosController::class, 'terminos'])->name('terminos');
Route::get('/dasboard/propietario', [DashboardProController::class, 'index'])->name('dashboardPro');
Route::get('/dasboard/admin', [DashboardAdmController::class, 'index'])->name('dashboardAdm');
Route::get('/dasboard/paseador', [DashboardPasController::class, 'index'])->name('dashboardPas');

Route::get('/auth/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/auth/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('users', UserController::class);

// Rutas para cruds
Route::resource('users', UserController::class);
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::resource('productos', ProductoController::class);
Route::get('/producto', [ProductoController::class, 'index'])->name('producto');

// Consultas
Route::get('/agendamientos/usuario/{userId}/rango', [AgendamientoController::class, 'serviciosPorUsuarioYRango'])->name('agendamientos.usuario.rango');
Route::get('/productos/filtrar', [ProductsController::class, 'filtrarProductos'])->name('productos.filtrar');

Route::resource('productos', ProductoController::class);

// Rutas inicio de sesión
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'iniciarSesion'])->name('inicioSesion');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Rutas para iniiciar sesión con google
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
// Route::get('/login/google', [SocialiteController::class, 'redirectToGoogle'])->name('login.google');
// Route::get('/login/google/callback', [SocialiteController::class, 'handleGoogleCallback']);
// Fin de rutasd de inicio de sesión