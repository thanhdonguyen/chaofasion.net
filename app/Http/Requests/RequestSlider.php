<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestSlider extends FormRequest
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
            "link" => "required",
            "fImages" => "required|image"
        ];
    }
    public function messages(){
        return [
            "link.required" => "Vui lòng nhập link",
            "fImages.required" => "Vui lòng chọn hình upload",
            "fImages.image" => "File hình phải có định dạng jpg,png,..."
        ];
    }
}
