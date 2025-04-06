<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public static function boot(){
        parent::boot();
    
        static::creating(function ($categoria) {
            $ultimaCategoria = Categoria::latest('id')->first();
            $numero = $ultimaCategoria ? intval(substr($ultimaCategoria->id, 3)) + 1 : 1;
            $categoria->id = 'CAT' . str_pad($numero, 6, '0', STR_PAD_LEFT);
        });
    
    static::deleted(function ($categoria) {
        self::reordenarIDs();
    });
    }
}
