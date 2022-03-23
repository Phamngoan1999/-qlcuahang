<?php

namespace App\Http\Requests;

use App\Rules\CheckPhontNumber;
use Illuminate\Foundation\Http\FormRequest;

class CuaHangRequest extends FormRequest
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
            'name'          => 'required|max:50',
            'email'         => ['required','unique:users',new CheckPhontNumber()],
            'diachi'        => 'required',
            'matkhau'       => 'required|min:8|max:32'
        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'Vui lòng nhập tên cửa hàng không quá 50 ký tự',
            'name.required' => 'Vui lòng nhập tên cửa hàng',
            'email.unique' => 'Số điện thoai đã được đăng ký.',
            'email.required' => 'Vui lòng nhập số điện thoại',
            'diachi.required' => 'Vui lòng nhập địa chỉ',
            'matkhau.required' => 'Vui lòng nhập mật khẩu',
            'matkhau.min'       => 'Mật khẩu phải trên 8 ký tự và dưới 32 ký tự',
            'matkhau.max'       => 'Mật khẩu phải trên 8 ký tự và dưới 32 ký tự'
        ];
    }
}
