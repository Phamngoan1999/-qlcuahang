<?php

namespace App\Http\Requests;

use App\Rules\CheckBienSo;
use App\Rules\CheckCMND;
use App\Rules\CheckDate;
use App\Rules\CheckGia;
use App\Rules\CheckListImage;
use App\Rules\CheckPhontNumber;
use App\Rules\CheckSoKhung;
use App\Rules\CheckSoMay;
use Illuminate\Foundation\Http\FormRequest;

class ThemKhachHangRequest extends FormRequest
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
            'so_CMND' => ['required','unique:tbl_khach_hang',new CheckCMND()],
            'so_dien_thoai' => ['required',new CheckPhontNumber()],
            'nam_sinh'      => 'required',
            'noi_cap_CMND'  => 'required',
            'noi_cu_tru'    => 'required',
            'cap_ngay'    => ['required',new CheckDate()],
            'so_loai'    => 'required',
            'mau_son'    => 'required',
            'dung_tich'    => 'required',
            'bien_so'    => ['required',new CheckBienSo()],
            'dang_ky_tai'    => 'required',
            'so_may'    => ['required',new CheckSoMay()],
            'so_khung'    => 'required|min:9|max:17',
            'iMa_dong_xe'    => 'required',
            'gia_mua'    => ['required',new CheckGia()],
            'files_anh_giay_to'    => 'required'
        ];
    }

    public function messages()
    {
        return [
            'ho_ten.required' => 'Vui lòng nhập tên khách hàng',
            'ho_ten.max' => 'Họ tên không hợp lệ',
            'so_CMND.unique' => 'Số CMND đã được đăng ký',
            'so_CMND.required' => 'Vui lòng nhập số CMND',
            'so_dien_thoai.required' => 'Vui lòng nhập số điện thoại.',
            'nam_sinh.required' => 'Vui lòng nhập năm sinh',
            'noi_cap_CMND.required' => 'Vui lòng nhập nơi cấp CMND',
            'noi_cu_tru.required' => 'Vui lòng nhập nơi cư trú',
            'cap_ngay.required'       => 'Vui lòng nhập cấp ngày',
            'so_loai.required'       => 'Vui lòng nhập số loại',
            'mau_son.required'       => 'Vui lòng nhập màu sơn',
            'dung_tich.required'       => 'Vui lòng nhập dung tích',
            'bien_so.required'       => 'Vui lòng nhập biển số',
            'dang_ky_tai.required'       => 'Vui lòng nhập đăng ký',
            'so_may.required'    => 'Vui lòng nhập số máy',
            'so_khung.required'    => 'Vui lòng nhập số khung',
            'iMa_dong_xe.required'    => 'Vui lòng chọn dòng xe',
            'gia_mua.required'    => 'Vui lòng nhập giá mua',
            'files_anh_giay_to.required'    => 'Vui lòng nhập files ảnh',
            'so_CMND.min'   => "Số CMND không đúng định dạng",
            'so_CMND.max'   => "Số CMND không đúng định dạng",
        ];
    }
}
