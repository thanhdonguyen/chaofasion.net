<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckOutRequest extends FormRequest
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
            'txtHoten' => 'required',
            'txtEmail' => 'regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/',
            'txtPhone' => 'required',
            'txtAddress' => 'required',
            'txtCity' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'txtHoten.required' => 'Vui lòng nhập họ tên',
            'txtEmail.regex' => 'Email không đúng',
            'txtPhone.required' => 'Vui lòng nhập số điện thoại',
            'txtAddress.required' => 'Vui lòng nhập địa chỉ',
            'txtCity.required' => 'Vui lòng nhập tỉnh/thành phố'
        ];
    }
}
