<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HangXeRequest extends FormRequest
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
            'hangxe' => 'required|max:50'
        ];
    }
    public function messages()
    {
        return [
            'hangxe.required' => "Vui lòng nhập tên hãng xe",
            'hangxe.max' => "Tên hãng xe không hợp lệ",
        ];
    }
}
