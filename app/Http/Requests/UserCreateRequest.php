<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'name'  => 'required',
            'email' => 'required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo "Nome Completo" é obrigatório!',
            'email.required' => 'O campo "E-mail" é obrigatório!',
            'password.required' => 'O campo "Senha" é obrigatório!'
        ];
    }    
}
