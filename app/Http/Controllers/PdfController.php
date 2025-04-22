<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;
use App\Models\User;
use App\Models\Producto;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generarPDFMascotas()
    {
        // Obtener todos los usuarios y mascotas
        $usuarios = User::all();
        $mascotas = Mascota::all();

        // Cargar la vista del PDF y pasarle los datos
        $pdf = Pdf::loadView('pdf.reporteMascotas', compact('usuarios', 'mascotas'));

        // Descargar el PDF
        return $pdf->download('Reporte Mascota.pdf');
    }
    public function generarPDFUsuarios($id)
    {
        $usuario = User::findOrFail($id);
        $pdf = Pdf::loadView('pdf.reporteUsuarios', compact('usuario'));
        return $pdf->download('Reporte Usuario ' . $usuario->nombre . '.pdf');
    }
    public function generarPDFProductos($id)
    {
        $producto = Producto::findOrFail($id);
        $pdf = Pdf::loadView('pdf.reporteProductos', compact('producto'));
        return $pdf->download('Reporte Producto ' . $producto->nombre . '.pdf');
    }
}