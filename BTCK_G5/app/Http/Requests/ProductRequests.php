<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
class ProductRequests extends FormRequest
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
             'category_id'=>'required',
            'branch_id'=>'required',
            'product_content'=>'required',
            'product_desc'=>'required',
            'product_name'=>'required',
            'product_price'=>'required',
            'product_status'=>'required',
        ];
    }
     protected function failedValidation(Validator $validator)
    {
        $response = new Response(['errors'=>$validator->errors()],Response::HTTP_UNPROCESSABLE_ENTITY);
        throw (new ValidationException($validator,$response));
    }
}
