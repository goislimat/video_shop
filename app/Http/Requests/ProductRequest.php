<?php

namespace Shop\Http\Requests;

use Shop\Http\Requests\Request;

class ProductRequest extends Request
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
            'name' => 'required|min:6',
            'price' => 'required|regex:/^\d{0,4}(\.\d{2})?$/',
            'description' => 'required'
        ];
    }

    /**
     * Get the messages array.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.min' => 'O campo nome deve ter ao menos 6 caracteres',
            'price.required' => 'O campo preço é obrigatório',
            'price.regex' => 'O formato de preço deve ser 1234.56',
            'description.required' => 'O campo descrição é obrigatório'
        ];
    }
}
