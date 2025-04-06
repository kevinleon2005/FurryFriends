<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public static function boot(){
        parent::boot();
    
        static::creating(function ($proveedor) {
            $ultimoProveedor = Proveedor::latest('id')->first();
            $numero = $ultimoProveedor ? intval(substr($ultimoProveedor->id, 3)) + 1 : 1;
            $proveedor->id = 'PROV' . str_pad($numero, 6, '0', STR_PAD_LEFT);
        });
    
    static::deleted(function ($proveedor) {
        self::reordenarIDs();
    });
    }
}
