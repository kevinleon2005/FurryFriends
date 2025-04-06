<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    public static function boot(){
        parent::boot();
    
        static::creating(function ($inventario) {
            $ultimoInventario = Inventario::latest('id')->first();
            $numero = $ultimoInventario ? intval(substr($ultimoInventario->id, 3)) + 1 : 1;
            $inventario->id = 'INV' . str_pad($numero, 6, '0', STR_PAD_LEFT);
        });
    
    static::deleted(function ($inventario) {
        self::reordenarIDs();
    });
    }
}
