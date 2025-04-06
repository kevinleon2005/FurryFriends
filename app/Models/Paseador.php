<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paseador extends Model
{
    public static function boot(){
        parent::boot();
    
        static::creating(function ($paseador) {
            $ultimoPaseador = Paseador::latest('id')->first();
            $numero = $ultimoPaseador ? intval(substr($ultimoPaseador->id, 3)) + 1 : 1;
            $paseador->id = 'PAS' . str_pad($numero, 6, '0', STR_PAD_LEFT);
        });
    
    static::deleted(function ($paseador) {
        self::reordenarIDs();
    });
    }
    // Método para reordenar los IDs después de eliminar un registro
    public static function reordenarIDs(){
        $paseadores = Paseador::orderBy('id')->get();
        $contador = 1;

        foreach ($paseadores as $paseador) {
            $nuevoID = 'PAS' . str_pad($contador, 6, '0', STR_PAD_LEFT);
            $paseador->id = $nuevoID;
            $paseador->saveQuietly(); // Evita activar eventos de actualización
            $contador++;
        }
    }
}
