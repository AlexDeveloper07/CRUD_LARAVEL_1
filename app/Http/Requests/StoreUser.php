<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:50',
            'email' => 'required|min:5',
            'password' => 'required|min:5'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del usuario',
        ];
    }


    public function messages()
    {
        return [
            'Email.required' => 'Debe ingresar un email válido',
        ];
    }

}
