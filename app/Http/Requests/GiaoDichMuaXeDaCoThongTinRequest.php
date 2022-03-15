<?php

namespace App\Http\Requests;

use App\Rules\CheckCMND;
use App\Rules\CheckPhontNumber;
use Illuminate\Foundation\Http\FormRequest;

class GiaoDichMuaXeDaCoThongTinRequest extends FormRequest
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
            'gia_ban'   => 'required',
            'ho_ten'    => 'required',
            'so_dien_thoai'   => ['required',new CheckPhontNumber()],
            'nam_sinh'   => 'required',
            'so_CMND'  => ['required',new CheckCMND()],
            'noi_cap_CMND'  => 'required',
            'noi_cu_tru'  => 'required',
            'cap_ngay'  => 'required',
            'files_anh_giay_to' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'gia_ban.required' => 'Vui lòng nhập giá bán',
            'ho_ten.required'    => 'Vui lòng nhập tên khách hàng',
            'so_dien_thoai.required' => 'Vui lòng nhập số điện thoại',
            'nam_sinh.required' => 'Vui lòng nhập năm sinh',
            'so_CMND.required' => 'Vui lòng nhập CMND',
            'noi_cap_CMND.required' => 'Vui lòng nhập nơi cấp',
            'noi_cu_tru.required' => 'Vui lòng nhập nơi cư trú',
            'cap_ngay.required' => 'Vui lòng nhập cấp ngày',
            'files_anh_giay_to.required' => 'Vui lòng nhập file ảnh'
        ];
    }
}
