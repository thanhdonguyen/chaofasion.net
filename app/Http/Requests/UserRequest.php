<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'txtUser' => 'required|unique:users,username',
            'txtPass' => 'required',
            'txtRePass' => 'required|same:txtPass',
            'txtEmail' => 'required|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/'
        ];
    }
    public function messages()
    {
        return [
            'txtUser.required' => 'Vui lòng nhập tên User',
            'txtUser.unique' => 'Tên User đã được sử dụng',
            'txtPass.required' => 'Vui lòng nhập passwords',
            'txtRePass.required' => 'Vui lòng nhập Repasswords',
            'txtRePass.same' => 'Password không trùng khớp',
            'txtEmail.required' => 'Vui lòng nhập Email',
            'txtEmail.regex' => 'Email không đúng'
        ];
    }
}
