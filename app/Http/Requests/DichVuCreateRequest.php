<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DichVuCreateRequest extends FormRequest
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
            'ten_dich_vu' => 'required',
            'gia_dich_vu' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'ten_dich_vu.required' => 'Vui lòng nhập tên dịch vụ',
            'gia_dich_vu.required' => 'Vui lòng nhập giá dịch vụ',
        ];
    }
}
