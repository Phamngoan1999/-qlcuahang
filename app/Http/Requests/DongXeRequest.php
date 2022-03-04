<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DongXeRequest extends FormRequest
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
            'ten_dong_xe'   => 'required',
            'iMa_hang_xe'   => 'required',
            'iMa_loai_xe'   => 'required'
        ];
    }

    public function messages()
    {
        return [
            'ten_dong_xe.required' => 'Vui lòng nhập tên dòng xe',
            'iMa_hang_xe.required' => 'Vui lòng chọn hãng xe',
            'iMa_loai_xe.required' => 'Vui lòng chọn loại xe'
        ];
    }
}
