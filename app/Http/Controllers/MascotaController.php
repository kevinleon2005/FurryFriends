<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\MascotaRequest; // Asegúrate de que este Request exista y esté validando correctamente
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MascotaController extends Controller
{
    public function index(Request $request): View
    {
        $mascotas = Mascota::paginate(10); // Añadí paginación para mejorar el rendimiento
        //dd($mascotas);
        return view('mascota.index', compact('mascotas'))
            ->with('i', ($request->input('page', 1) - 1) * $mascotas->perPage());
    }

    public function create(): View
    {
        // Corregido: Ahora devuelve la vista correcta para crear mascotas
        return view('mascota.create'); // Asegúrate de que 'mascota.create' exista
    }

    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'edad' => 'nullable|integer|min:0',
            'raza' => 'nullable|string|max:255',
            'sexo' => 'required|string|in:macho,hembra',
            'color' => 'nullable|string|max:255',
            'info_medica' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $userId = Auth::id();

        Mascota::create([
            'user_id' => $userId,
            'nombre' => $request->input('nombre'),
            'edad' => $request->input('edad'),
            'raza' => $request->input('raza'),
            'sexo' => $request->input('sexo'),
            'color' => $request->input('color'),
            'info_medica' => $request->input('info_medica'),
        ]);

        return redirect()->route('mascotas.index')->with('success', 'Mascota agregada exitosamente.'); // Corregido: Redirige al index de mascotas
    }

    public function show($id): View
    {
        $mascota = Mascota::findOrFail($id);
        return view('mascota.show', compact('mascota'));
    }

    public function edit($id): View
    {
        $mascota = Mascota::findOrFail($id);
        return view('mascota.edit', compact('mascota'));
    }

    public function update(MascotaRequest $request, Mascota $mascota): RedirectResponse
    {
        $mascota->update($request->validated());

        return redirect()->route('mascotas.index') // Corregido: Redirige al index
            ->with('success', 'Mascota actualizada exitosamente.');
    }

    public function destroy($id): RedirectResponse
    {
        Mascota::findOrFail($id)->delete();

        return redirect()->route('mascotas.index') // Corregido: Redirige al index
            ->with('success', 'Mascota eliminada exitosamente.');
    }

    // Vista para admin con todas las mascotas
    public function adminIndex(): View
    {
        $mascotas = Mascota::with('user')->get();
        return view('admin.mascotas.infobasic', compact('mascotas'));
    }

    // Vista para admin con información detallada
    public function adminShow($id): View
    {
        $mascota = Mascota::with('user')->findOrFail($id);
        return view('admin.mascotas.infocompleta', compact('mascota'));
    }
}