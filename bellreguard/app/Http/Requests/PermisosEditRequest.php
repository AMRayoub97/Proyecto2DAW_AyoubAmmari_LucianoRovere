<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermisosEditRequest extends FormRequest
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
            'role' => 'required|in:admin,entrenador,otro',
        ];
    }

    // Mensajes personalizados
    public function messages(): array
    {
        return [
            'role.required' => 'El campo Role es obligatorio.',
            'role.in' => 'El Role seleccionado no es válido. Debe ser admin, entrenador o otro.',
        ];
    }
}
