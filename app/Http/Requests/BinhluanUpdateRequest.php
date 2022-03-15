<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BinhluanUpdateRequest extends FormRequest
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
            'binh_luan_tra_loi' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'binh_luan_tra_loi.required' => 'Vui lòng nhập bình luận.'
        ];
    }
}
