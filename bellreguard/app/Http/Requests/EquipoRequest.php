<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoRequest extends FormRequest
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
            'nombre' => 'required|string|max:255|unique:equipos,nombre',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'categoria' => 'required|in:Junior,Senior,Cadete,Infantil,Alevín,Benjamín,Juvenil,Prebenjamín',
            'genero' => 'required|in:M,F',
            'entrenador' => 'required|string|max:255',
        ];
    }

    /**
     * Mensajes de error personalizados
     */
    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre del equipo es obligatorio.',
            'nombre.unique' => 'Ya existe un equipo con ese nombre.',
            'foto.image' => 'La foto debe ser una imagen válida.',
            'foto.mimes' => 'La foto debe ser jpeg, png, jpg, gif o webp.',
            'foto.max' => 'La foto no puede superar 2 MB.',
            'categoria.in' => 'La categoría debe ser Junior, Senior, Amateur o Profesional.',
            'genero.in' => 'El género debe ser M o F.',
            'entrenador.required' => 'El nombre del entrenador es obligatorio.',
        ];
    }
}
