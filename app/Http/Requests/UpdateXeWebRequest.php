<?php

namespace App\Http\Requests;

use App\Rules\CheckCMND;
use App\Rules\CheckPhontNumber;
use Illuminate\Foundation\Http\FormRequest;

class UpdateXeWebRequest extends FormRequest
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
            'so_loai'    => 'required',
            'mau_son'    => 'required',
            'dung_tich'    => 'required',
            'bien_so'    => 'required',
            'dang_ky_tai'    => 'required',
            'so_may'    => 'required',
            'so_khung'    => 'required',
            'iMa_dong_xe'    => 'required',
            'gia_dang_web'    => 'required',
            'nam_dang_ky'    => 'required',
            'so_km_di'    => 'required',
        ];
    }

    public function messages()
    {
        return [
            'so_loai.required'       => 'Vui lòng nhập số loại',
            'mau_son.required'       => 'Vui lòng nhập màu sơn',
            'dung_tich.required'       => 'Vui lòng nhập dung tích',
            'bien_so.required'       => 'Vui lòng nhập biển số',
            'dang_ky_tai.required'       => 'Vui lòng nhập đăng ký',
            'so_may.required'    => 'Vui lòng nhập số máy',
            'so_khung.required'    => 'Vui lòng nhập số khung',
            'iMa_dong_xe.required'    => 'Vui lòng chọn dòng xe',
            'files_anh_dang_web.required'    => 'Vui lòng nhập files ảnh',
            'gia_dang_web.required'    => 'Vui lòng nhập giá đăng web',
            'nam_dang_ky.required'    => 'Vui lòng nhập năm đăng ký',
            'so_km_di.required'    => 'Vui lòng nhập số km đã đi',
        ];
    }
}
