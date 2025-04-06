<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public static function boot(){
    parent::boot();

    static::creating(function ($admin) {
        $ultimoAdmin = Admin::latest('id')->first();
        $numero = $ultimoAdmin ? intval(substr($ultimoAdmin->id, 3)) + 1 : 1;
        $admin->id = 'ADM' . str_pad($numero, 6, '0', STR_PAD_LEFT);
    });
    }
    public static function reordenarIDs(){
        $admins = Admin::orderBy('id')->get();
        $contador = 1;

        foreach ($admins as $admin) {
            $nuevoID = 'ADM' . str_pad($contador, 6, '0', STR_PAD_LEFT);
            $admin->id = $nuevoID;
            $admin->saveQuietly(); // Evita activar eventos de actualización
            $contador++;
        }
    }
}
