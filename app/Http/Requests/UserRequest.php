<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // O tu lógica de autorización
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
{
    $rules = [
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'fecha_nacimiento' => 'required|date',
        'tipo_documento' => 'required|string|max:50',
        'numero_documento' => 'required|string|max:20|unique:users,numero_documento,' . $this->route()->user->id, // Ignora el ID actual en la actualización
        'telefono' => 'nullable|string|max:20',
        'email' => 'required|email|max:255|unique:users,email,' . $this->route()->user->id, // Ignora el ID actual en la actualización
        'direccion' => 'nullable|string|max:255',
        'rol' => 'required|string|max:50',
    ];

    if ($this->isMethod('post')) { // Reglas solo para la creación
        $rules['password'] = ['required', 'confirmed', Password::min(8)];
    } elseif ($this->isMethod('put') || $this->isMethod('patch')) { // Reglas opcionales para la actualización
        $rules['password'] = ['nullable', 'confirmed', Password::min(8)];
    }

    return $rules;
}
}

