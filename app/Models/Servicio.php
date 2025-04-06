<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public static function boot(){
        parent::boot();
    
        static::creating(function ($servicio) {
            $ultimoServicio = Servicio::latest('id')->first();
            $numero = $ultimoServicio ? intval(substr($ultimoServicio->id, 3)) + 1 : 1;
            $servicio->id = 'SER' . str_pad($numero, 6, '0', STR_PAD_LEFT);
        });
    
    static::deleted(function ($servicio) {
        self::reordenarIDs();
    });
    }
}