<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamiento extends Model
{
    public static function boot(){
        parent::boot();
    
        static::creating(function ($agendamiento) {
            $ultimoAgendamiento = Agendamiento::latest('id')->first();
            $numero = $ultimoAgendamiento ? intval(substr($ultimoAgendamiento->id, 3)) + 1 : 1;
            $agendamiento->id = 'AGE' . str_pad($numero, 6, '0', STR_PAD_LEFT);
        });
    static::deleted(function ($agendamiento) {
        self::reordenarIDs();
    });
    }
}
