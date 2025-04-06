<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ordenCompra extends Model
{
    public static function boot(){
        parent::boot();
    
        static::creating(function ($ordenCompra) {
            $ultimaOrdenCompra = ordenCompra::latest('id')->first();
            $numero = $ultimaOrdenCompra ? intval(substr($ultimaOrdenCompra->id, 3)) + 1 : 1;
            $ordenCompra->id = 'ORD' . str_pad($numero, 6, '0', STR_PAD_LEFT);
        });
    
    static::deleted(function ($ordenCompra) {
        self::reordenarIDs();
    });
    }
}
