<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class ProdutoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:255',
            'valor' => 'required|numeric|between:0.01,99999.99',
        ];
    }

    public function messages(){

        return [
            'required' => 'O campo :attribute é requerido.',
            'max' => 'O campo :attribute deve ter no máximo :max caracteres',
            'numeric' => 'O campo :attribute deve ser um número.',
            'between' => 'O campo :attribute deve ser entre :min e :max.',
        ]; 

    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->

        json([
         'status'    => 400,
         'success'   => false,
         'message'   => 'errors de validação',
         'data'      => $validator->errors()
        ], 400)

        );
    }
}
