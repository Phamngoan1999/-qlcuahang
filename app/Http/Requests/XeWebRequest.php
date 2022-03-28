<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class XeWebRequest extends FormRequest
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
            'dung_tich'    => 'required',
            'iMa_dong_xe'    => 'required',
            'gia_dang_web'    => 'required',
            'nam_dang_ky'    => 'required',
            'so_km_di'    => 'required',
        ];
    }

    public function messages()
    {
        return [
            'dung_tich.required'       => 'Vui lòng nhập dung tích',
            'iMa_dong_xe.required'    => 'Vui lòng chọn dòng xe',
            'gia_dang_web.required'    => 'Vui lòng nhập giá đăng web',
            'nam_dang_ky.required'    => 'Vui lòng nhập năm đăng ký',
            'so_km_di.required'    => 'Vui lòng nhập số km đã đi',
        ];
    }
}
