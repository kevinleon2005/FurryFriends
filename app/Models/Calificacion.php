<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    public static function boot(){
        parent::boot();
    
        static::creating(function ($calificacion) {
            $ultimaCalificacion = Calificacion::latest('id')->first();
            $numero = $ultimaCalificacion ? intval(substr($ultimaCalificacion->id, 3)) + 1 : 1;
            $calificacion->id = 'CAL' . str_pad($numero, 6, '0', STR_PAD_LEFT);
        });
    
    static::deleted(function ($calificacion) {
        self::reordenarIDs();
    });
    }
}
