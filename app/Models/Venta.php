<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public static function boot(){
        parent::boot();
    
        static::creating(function ($venta) {
            $ultimaVenta = Venta::latest('id')->first();
            $numero = $ultimaVenta ? intval(substr($ultimaVenta->id, 3)) + 1 : 1;
            $venta->id = 'VEN' . str_pad($numero, 6, '0', STR_PAD_LEFT);
        });
    
    static::deleted(function ($venta) {
        self::reordenarIDs();
    });
    }
}