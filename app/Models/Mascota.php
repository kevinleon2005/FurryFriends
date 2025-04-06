<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    public static function boot(){
        parent::boot();
    
        static::creating(function ($mascota) {
            $ultimaMascota = Mascota::latest('id')->first();
            $numero = $ultimaMascota ? intval(substr($ultimaMascota->id, 3)) + 1 : 1;
            $mascota->id = 'MAS' . str_pad($numero, 6, '0', STR_PAD_LEFT);
        });
    
    static::deleted(function ($mascota) {
        self::reordenarIDs();
    });
    }
    // Método para reordenar los IDs después de eliminar un registro
    public static function reordenarIDs(){
        $mascotas = Mascota::orderBy('id')->get();
        $contador = 1;

        foreach ($mascotas as $mascota) {
            $nuevoID = 'PAS' . str_pad($contador, 6, '0', STR_PAD_LEFT);
            $mascota->id = $nuevoID;
            $mascota->saveQuietly(); // Evita activar eventos de actualización
            $contador++;
        }
    }
}
