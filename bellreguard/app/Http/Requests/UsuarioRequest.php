<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|min:2|max:50',
            'apellidos' => 'nullable|string|min:2|max:80',
            'correo' => 'required|email|max:100',
            'contrasena' => 'nullable|string|min:5',
            'nacionalidad' => 'nullable|string|max:50',
            'fecha_nacimiento' => 'nullable|date|before:today',
            'telefono' => 'nullable|string|regex:/^[0-9]{9,15}$/',
            'genero' => 'nullable|in:masculino,femenino,otro',
        ];
    }

    public function messages()
{
    return [
        'nombre.required' => 'El nombre es obligatorio.',
        'nombre.min' => 'El nombre debe tener al menos 2 caracteres.',
        'nombre.max' => 'El nombre no puede superar los 50 caracteres.',

        'apellidos.required' => 'Los apellidos son obligatorios.',
        'apellidos.min' => 'Los apellidos deben tener al menos 2 caracteres.',
        'apellidos.max' => 'Los apellidos no pueden superar los 80 caracteres.',

        'correo.required' => 'El correo electrónico es obligatorio.',
        'correo.email' => 'El correo electrónico no es válido.',
        'correo.unique' => 'Este correo ya está registrado.',

        'contrasena.min' => 'La contraseña debe tener al menos 5 caracteres.',

        'nacionalidad.max' => 'La nacionalidad no puede superar los 50 caracteres.',

        'fecha_nacimiento.date' => 'La fecha de nacimiento no es válida.',
        'fecha_nacimiento.before' => 'La fecha de nacimiento debe ser anterior a hoy.',

        'telefono.regex' => 'El teléfono debe contener solo números (9 a 15 dígitos).',

        'genero.in' => 'El género seleccionado no es válido.',
    ];
}

}
