<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JugadorRequest extends FormRequest
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
            'nombre'  => 'required|min:3',
            'nacionalidad'  => 'required|min:3',
            'genero'  => 'required|in:M,F',
            'edad' => 'required|integer|min:5|max:60',
            'altura' => 'required|numeric|min:100',
            'peso' => 'required|numeric|min:30',
            'experiencia' => 'required|integer|min:0',
            'puntuacion' => 'required|numeric|min:0|max:10',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres.',

            'nacionalidad.required' => 'La nacionalidad es obligatoria.',
            'nacionalidad.min' => 'La nacionalidad debe tener al menos 3 caracteres.',

            'genero.required' => 'El género es obligatorio.',

            'edad.required' => 'La edad es obligatoria.',
            'edad.integer' => 'La edad debe ser un número entero.',
            'edad.min' => 'La edad mínima permitida es 5 años.',
            'edad.max' => 'La edad máxima permitida es 60 años.',

            'altura.required' => 'La altura es obligatoria.',
            'altura.numeric' => 'La altura debe ser un número.',

            'peso.required' => 'El peso es obligatorio.',
            'peso.numeric' => 'El peso debe ser un número.',

            'experiencia.required' => 'La experiencia es obligatoria.',
            'experiencia.integer' => 'La experiencia debe ser un número entero.',

            'puntuacion.required' => 'La puntuación es obligatoria.',
            'puntuacion.numeric' => 'La puntuación debe ser un número.',
            'puntuacion.min' => 'La puntuación mínima es 0.',
            'puntuacion.max' => 'La puntuación máxima es 10.',

            'foto.image' => 'El archivo debe ser una imagen.',
            'foto.mimes' => 'La imagen debe ser jpeg, png, jpg, gif o webp.',
            'foto.max' => 'La imagen no puede superar los 2MB.',
        ];
    }
}
