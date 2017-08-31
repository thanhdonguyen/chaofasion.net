<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
            'email' => 'required',
            'password' => 'required|min:3|max:32'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Vui lòng nhập Email',
            'password.required' => 'Vui lòng nhập password',
            'password.min' => 'password phải nhiều hơn 3 ký tự',
            'password.max' => 'password không quá 32 ký tự'
        ];
    }
}
