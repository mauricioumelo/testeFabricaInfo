<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentosFormRequest extends FormRequest
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
            'titulo'=>'required|min:5',
            'nome_arquivo'=>'required|min:5',
            'tipo'=>'required',
        ];
    }

    public function messages()
    {

        return [
            'required'=>'O campo :attribute é obrigatorio',
            'min'=>'O campo :attribute deve conter pelo menos 5 caracteres',
        ];

    }
}
