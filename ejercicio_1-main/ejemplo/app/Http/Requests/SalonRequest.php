<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalonRequest extends FormRequest
{
    /**
     * Autorizar la petición
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Reglas de validación
     */
    public function rules(): array
    {
        $isUpdate = $this->isMethod('PUT') || $this->isMethod('PATCH');

        return [
            'name' => $isUpdate
                ? 'sometimes|required|string|max:255'
                : 'required|string|max:255',

            'capacidad' => $isUpdate
                ? 'sometimes|required|integer|min:1'
                : 'required|integer|min:1',

            'description' => $isUpdate
                ? 'sometimes|required|string|max:500'
                : 'required|string|max:500',

            'ubicacion' => $isUpdate
                ? 'sometimes|required|string|max:255'
                : 'required|string|max:255',
        ];
    }

    /**
     * Mensajes personalizados
     */
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del salón es obligatorio.',
            'name.string' => 'El nombre del salón debe ser texto.',
            'name.max' => 'El nombre del salón no puede tener más de :max caracteres.',

            'capacidad.required' => 'La capacidad es obligatoria.',
            'capacidad.integer' => 'La capacidad debe ser un número entero.',
            'capacidad.min' => 'La capacidad debe ser mínimo :min.',

            'description.required' => 'La descripción es obligatoria.',
            'description.string' => 'La descripción debe ser texto.',
            'description.max' => 'La descripción no puede tener más de :max caracteres.',

            'ubicacion.required' => 'La ubicación es obligatoria.',
            'ubicacion.string' => 'La ubicación debe ser texto.',
            'ubicacion.max' => 'La ubicación no puede tener más de :max caracteres.',
        ];
    }

    /**
     * Atributos personalizados
     */

}
