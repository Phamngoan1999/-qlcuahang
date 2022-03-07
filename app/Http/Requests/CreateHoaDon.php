<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateHoaDon extends FormRequest
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
            'iMa_cua_hang' => 'required',
            'iMa_xe'    => 'required',
            'phutung'   => 'required'
        ];
    }
    public function messages()
    {
        return [
            'iMa_cua_hang.required'       => 'Vui lòng chọn cửa hàng',
            'iMa_xe.required'       => 'Vui lòng chọn xe sửa chữa',
            'phutung.required'      =>  'Vui lòng thêm phụ tùng sửa chữa',
        ];
    }
}
