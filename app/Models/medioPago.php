<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class medioPago extends Model
{
    public static function boot(){
        parent::boot();
    
        static::creating(function ($medioPago) {
            $ultimoMedioPago = medioPago::latest('id')->first();
            $numero = $ultimoMedioPago ? intval(substr($ultimoMedioPago->id, 3)) + 1 : 1;
            $medioPago->id = 'MED' . str_pad($numero, 6, '0', STR_PAD_LEFT);
        });
    
    static::deleted(function ($medioPago) {
        self::reordenarIDs();
    });
    }
}
