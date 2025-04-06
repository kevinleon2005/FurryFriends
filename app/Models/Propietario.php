<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Propietario extends Model
{

    use HasFactory;
    protected $primaryKey = 'id';  // Especifica que 'id' es la clave primaria
    public $incrementing = false;  // Indica que NO es autoincremental
    protected $keyType = 'string'; // Define que es de tipo string

    protected $fillable = [
        'nombres', 'apellidos', 'fechaNacimiento', 'tipoDocumento', 
        'numeroDocumento', 'telefono', 'correo', 'direccion', 
        'password', 'fechaCreacion'
    ];
    

    public static function boot(){
    parent::boot();

    static::creating(function ($propietario) {
        $ultimoPropietario = Propietario::latest('id')->first();
        $numero = $ultimoPropietario ? intval(substr($ultimoPropietario->id, 3)) + 1 : 1;
        $propietario->id = 'PRO' . str_pad($numero, 6, '0', STR_PAD_LEFT);
    });

    static::deleted(function ($propietario) {
        self::reordenarIDs();
    });
    }
    // Método para reordenar los IDs después de eliminar un registro
    public static function reordenarIDs(){
        $propietarios = Propietario::orderBy('id')->get();
        $contador = 1;

        foreach ($propietarios as $propietario) {
            $nuevoID = 'PRO' . str_pad($contador, 6, '0', STR_PAD_LEFT);
            $propietario->id = $nuevoID;
            $propietario->saveQuietly(); // Evita activar eventos de actualización
            $contador++;
        }
    }

}
