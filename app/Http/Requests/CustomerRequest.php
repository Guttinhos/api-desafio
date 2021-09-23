<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
             "user_id" => "required",
             "name" => "required",
             "cpf" => "required",
             "rg" => "required",
             "birth_date" => "required",
             "phones" => "required",
             "birth_state" => "required"
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "O campo nome é obrigatório"
        ];
    }
}
