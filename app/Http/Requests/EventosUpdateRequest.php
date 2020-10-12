<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventosUpdateRequest extends FormRequest
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
            'name'  => 'required|min:3|max:255',
            'image' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo "Nome do Evento" é obrigatório!',
            'image.required' => 'O campo "Imagem do Evento" é obrigatório!'
        ];
    }
}
