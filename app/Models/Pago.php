<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    public static function boot(){
        parent::boot();
    
        static::creating(function ($pago) {
            $ultimoPago = Pago::latest('id')->first();
            $numero = $ultimoPago ? intval(substr($ultimoPago->id, 3)) + 1 : 1;
            $pago->id = 'PAG' . str_pad($numero, 6, '0', STR_PAD_LEFT);
        });
    
    static::deleted(function ($pago) {
        self::reordenarIDs();
    });
    }
}
