<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name' => "required|min:3|max:20|regex:/^[\pL\s\-]+$/u",
            'last_name' => "required|min:5|max:20|regex:/^[\pL\s\-]+$/u",
            'email' => "required|email|unique:users,email",
            'password' => "required|min:8|confirmed|max:20|alpha_num"
        ];
    }

    public function messages()
    {
        return parent::messages();
    }


}
