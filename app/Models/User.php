<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $table = 'users'; // Nombre de la tabla en la base de datos
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_nacimiento',
        'telefono',
        'email',
        'tipo_documento',
        'numero_documento',
        'password',
        'role',
        'direccion',
        'foto_perfil',
        'experiencia',
        'numero_mascotas',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
        // Método para reordenar los IDs después de eliminar un registro
    //public static function reordenarIDs(){
        //$users = User::orderBy('id')->get();
        //$contador = 1;
