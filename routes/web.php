<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardAdmController;
use App\Http\Controllers\DashboardPasController;
use App\Http\Controllers\DashboardProController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\TerminosController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendamientoController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\PaseadorController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\MascotasController;
use App\Http\Controllers\PdfController;

Route::get('/', function () {return view('home.index');})->name('home');
Route::get('/inicio/FurryFriendsPages.index', [HomeController::class, 'index'])->name('inicio');
Route::get('/info/nosotros', [InfoController::class, 'nosotros'])->name('nosotros');
Route::get('/products/productos', [ProductoController::class, 'productos'])->name('productos');
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
Route::get('/producto', [ProductoController::class, 'index'])->name('productos.index');

// Consultas
Route::get('/agendamientos/usuario/{userId}/rango', [AgendamientoController::class, 'serviciosPorUsuarioYRango'])->name('agendamientos.usuario.rango');
Route::get('/productos/filtrar', [ProductoController::class, 'filtrarProductos'])->name('productos.filtrar');


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

// Rutas para el regsitro de mascotas 
Route::resource('mascotas', MascotaController::class);
// Rutas de admin para mascotas
Route::get('/admin/mascotas', [MascotaController::class, 'adminIndex'])->name('admin.mascotas.index');
Route::get('/admin/mascotas/{id}', [MascotaController::class, 'adminShow'])->name('admin.mascotas.show');
// Rutas de propietario para mascotas
//Fin rutas para el registro de mascotas

//Rutas para las crud de mascotas en admin
// Ruta para generar pdf
Route::get('/reporteMascotas/pdf', [PdfController::class, 'generarPDFMascotas'])->name('descargarMascotas.pdf');
Route::get('/descargar-usuario-pdf/{id}', [PdfController::class, 'generarPDFUsuarios'])->name('descargarUsuarios.pdf');
Route::get('/descargar-producto-pdf/{id}', [PdfController::class, 'generarPDFProductos'])->name('descargarProductos.pdf');
// Fin de ruta para generar pdf
