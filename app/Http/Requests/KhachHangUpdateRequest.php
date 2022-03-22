<?php

namespace App\Http\Requests;

use App\Rules\CheckCMND;
use App\Rules\CheckDate;
use App\Rules\CheckPhontNumber;
use Illuminate\Foundation\Http\FormRequest;

class KhachHangUpdateRequest extends FormRequest
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
            'ho_ten' => 'required|max:50',
            'so_dien_thoai' => ['required',new CheckPhontNumber()],
            'nam_sinh' => 'required',
            'so_CMND' => ['required',new CheckCMND()],
            'noi_cap_CMND' => 'required',
            'noi_cu_tru' => 'required',
            'cap_ngay' => ['required',new CheckDate()]
        ];
    }

    public function messages()
    {
        return [
            'ho_ten.max' => 'Họ tên không hợp lệ',
            'ho_ten.required' => 'Vui lòng nhập họ tên',
            'so_dien_thoai.required' => 'Vui lòng nhập số điện thoại',
            'nam_sinh.required' => 'Vui lòng nhập năm sinh',
            'so_CMND.required' => 'Vui lòng nhập CMND',
            'noi_cap_CMND.required' => 'Vui lòng nhập nơi cấp CMND',
            'noi_cu_tru.required' => 'Vui lòng nhập nơi cứ trú',
            'cap_ngay.required' => 'Vui lòng nhập ngày cấp CMND',
        ];
    }
}
