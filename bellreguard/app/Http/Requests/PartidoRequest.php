<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartidoRequest extends FormRequest
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
            'equipo_id' => 'required|integer|exists:equipos,id',
            'equipo_visitante_id' => 'required|integer|exists:equipos_visitantes,id',
            'lugar' => 'required|string|max:255',
            'fecha' => 'required|date|after_or_equal:now',
        ];
    }

    public function messages(): array
    {
        return [
            'equipo_id.required' => 'Debes seleccionar un equipo local',
            'equipo_id.integer' => 'El valor del equipo local no es válido',
            'equipo_id.exists' => 'El equipo local seleccionado no existe',

            'equipo_visitante_id.required' => 'Debes seleccionar un equipo visitante',
            'equipo_visitante_id.integer' => 'El valor del equipo visitante no es válido',
            'equipo_visitante_id.exists' => 'El equipo visitante seleccionado no existe',

            'lugar.required' => 'Debes indicar el estadio o lugar del partido',
            'lugar.string' => 'El nombre del estadio no es válido',
            'lugar.max' => 'El nombre del estadio no puede superar los 255 caracteres',

            'fecha.required' => 'Debes seleccionar la fecha y hora del partido',
            'fecha.date' => 'La fecha no es válida',
            'fecha.after_or_equal' => 'La fecha del partido debe ser hoy o posterior',
        ];
    }
}
