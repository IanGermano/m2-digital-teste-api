<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class CidadeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:255',
            'id_grupo' => 'required|integer|between:1,99999|exists:grupo_cidades,id',
        ];
    }

    public function messages(){

        return [
            'required' => 'O campo :attribute é requerido.',
            'max' => 'O campo :attribute deve ter no máximo :max caracteres',
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
