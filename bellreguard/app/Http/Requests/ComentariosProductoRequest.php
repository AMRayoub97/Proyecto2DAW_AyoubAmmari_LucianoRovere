<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComentariosProductoRequest extends FormRequest
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
            'producto_id' => 'required|exists:productos,id',
            'contenido' => 'required|string|max:250',
            'puntuacion' => 'required|integer|in:0,1,2,3,4,5'
        ];
    }

    public function messages(){
        return [
            'producto_id.required' => 'debes introducir producto',
            'producto_id.exists' => 'prod no existe',
            'contenido.required' => 'debes introducir comentario',
            'contenido.string' => 'errr',
            'contenido.max' => 'errr',
            'puntuacion.required' => 'debes introducir puntuacion',
            'puntuacion.integer' => 'err formato',
            'puntuacion.in' => 'err',
        ];
    }
}
