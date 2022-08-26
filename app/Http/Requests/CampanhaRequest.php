<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class CampanhaRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nome' => 'required|max:255',
        ];
    }

    public function messages(){

        return [
            'required' => 'O campo :attribute é requerido.',
            'max' => 'O campo :attribute deve ter no máximo :max caracteres',
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
