<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
        $rules = [
             "name" => "required", "email" => "required"
        ];

        if(!empty($this->get('password'))){
            $rules['password'] = 'required';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            "name.required" => "O campo nome é obrigatório",
            "email.required" => "O campo Email é obrigatório",
            "password.required" => "O campo da senha é obrigatório"
        ];
    }
}
