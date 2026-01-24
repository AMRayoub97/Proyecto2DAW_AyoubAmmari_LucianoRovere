<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventoRequest extends FormRequest
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
            'fecha' => 'required|date',
            'lugar' => 'required|string|max:255',
            'tipo' => 'required|in:partido,entrenamiento,otro',
            'estado' => 'required|in:proximamente,en_vivo,finalizado',
        ];
    }

    /**
     * Mensajes de validación personalizados.
     */
    public function messages(): array
    {
        return [
            'titulo.required' => 'El título es obligatorio.',
            'titulo.string' => 'El título debe ser un texto válido.',
            'titulo.max' => 'El título no puede tener más de 255 caracteres.',

            'fecha.required' => 'La fecha es obligatoria.',
            'fecha.date' => 'La fecha debe ser un formato válido.',

            'lugar.required' => 'El lugar es obligatorio.',
            'lugar.string' => 'El lugar debe ser un texto válido.',
            'lugar.max' => 'El lugar no puede tener más de 255 caracteres.',

            'tipo.required' => 'El tipo de evento es obligatorio.',
            'tipo.in' => 'El tipo de evento debe ser: partido, entrenamiento u otro.',

            'estado.required' => 'El estado del evento es obligatorio.',
            'estado.in' => 'El estado debe ser: proximamente, en_vivo o finalizado.',
        ];
    }
}
