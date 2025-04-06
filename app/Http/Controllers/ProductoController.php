<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ProductoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class ProductoController extends Controller
{
    public function productos()
        {
            return view('products.productos'); // Crea la vista products/productos.blade.php
        }
        public function filtrarProductos(Request $request)
{
    $validator = Validator::make($request->all(), [
        'precio_minimo' => 'required|numeric|min:0',
        'precio_maximo' => 'required|numeric|gt:precio_minimo',
        'marca' => 'nullable|string|max:255',
        'perPage' => 'integer|min:1|max:100',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $precioMinimo = $request->input('precio_minimo');
    $precioMaximo = $request->input('precio_maximo');
    $marca = $request->input('marca');
    $perPage = $request->input('perPage', 10);

    $productos = Producto::where('precio', '>=', $precioMinimo)
        ->where('precio', '<=', $precioMaximo)
        ->when($marca, function ($query) use ($marca) {
            return $query->where('marca', $marca);
        })
        ->paginate($perPage);

    return view('productos.filtrados', compact('productos', 'precioMinimo', 'precioMaximo', 'marca'));
}
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $productos = Producto::paginate();

        return view('producto.index', compact('productos'))
            ->with('i', ($request->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $producto = new Producto();

        return view('producto.create', compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductoRequest $request): RedirectResponse
    {
        Producto::create($request->validated());

        return Redirect::route('productos.index')
            ->with('success', 'Producto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $producto = Producto::find($id);

        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $producto = Producto::find($id);

        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductoRequest $request, Producto $producto): RedirectResponse
    {
        $producto->update($request->validated());

        return Redirect::route('productos.index')
            ->with('success', 'Producto updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Producto::find($id)->delete();

        return Redirect::route('productos.index')
            ->with('success', 'Producto deleted successfully');
    }
}
