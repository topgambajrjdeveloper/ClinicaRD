<?php

namespace App\Http\Requests\Permission;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'        => 'required|unique:roles|max:255',
            'description' => 'required',
            'role_id'     => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required'          => 'El nombre es requerido',
            'name.unique'            => 'El nombre ya esta ocupado',
            'description.required'   => 'La descripcion es requerida',
            'role_id'                => 'El campo de rol es requerido',
            'role_id.numeric'        => 'El formato no es correcto',
        ];
    }
}
