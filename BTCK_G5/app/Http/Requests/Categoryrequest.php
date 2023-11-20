<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Response;

class Categoryrequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_name' => 'required',
            'category_desc' => 'required',
            'category_status' => 'required'
        ];
       
    }
    protected function failedValidation(Validator $validator)
    {
        $response = new Response(['errors'=>$validator->errors()], Response::HTTP_UNPROCESSABLE_ENTITY);
        throw(new ValidationException($validator,$response));
    }
}
