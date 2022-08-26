<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class DescontoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'valor' => 'required|numeric|between:0.01,99999.99',
            'id_campanha' => 'required|integer|between:1,99999|exists:campanhas,id',
            'id_produto' => 'required|integer|between:1,99999|exists:produtos,id',
        ];
    }

    public function messages(){

        return [
            'required' => 'O campo :attribute é requerido.',
            'numeric' => 'O campo :attribute deve ser um número.',
            'between' => 'O campo :attribute deve ser entre :min e :max.',
            'integer' => 'O campo :attribute deve ser um número inteiro.',
            'exists' => 'O campo :attribute deve ser um id válido.',
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
