<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detallePago extends Model
{
    public static function boot(){
        parent::boot();
    
        static::creating(function ($detalle) {
            $ultimoDetalle = detallePago::latest('id')->first();
            $numero = $ultimoDetalle ? intval(substr($ultimoDetalle->id, 3)) + 1 : 1;
            $detalle->id = 'DET' . str_pad($numero, 6, '0', STR_PAD_LEFT);
        });
    
    static::deleted(function ($detalle) {
        self::reordenarIDs();
    });
    }
}