<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoticiasRequest extends FormRequest
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
            'titulo' => 'required|string|max:255',
            'contenido' => 'required|string',
            'todo_contenido' => 'required|string',
            'fecha' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'categoria' => 'required|string|max:25',
            'tutor_id' => 'required|integer|exists:usuarios,id',
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required' => 'El título es obligatorio',
            'titulo.max' => 'El título no puede tener más de 255 caracteres',
            'contenido.required' => 'El contenido es obligatorio',
            'todo_contenido.required' => 'El contenido es obligatorio',
            'fecha.required' => 'La fecha es obligatoria',
            'fecha.date' => 'La fecha no es válida',
            'foto.image' => 'El archivo debe ser una foto',
            'foto.mimes' => 'La foto debe ser jpeg, png, jpg o gif',
            'foto.max' => 'La foto no puede superar 2MB',
            'categoria.required' => 'La categoría es obligatoria',
            'categoria.max' => 'El categoria no puede tener más de 25 caracteres',
        ];
    }
}
