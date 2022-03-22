<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckGia implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $kyTuDau = substr($value, 0, 1);
        if($kyTuDau == "0" || $kyTuDau == "V")
            return false;
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "Vui lòng nhập giá hợp lệ.";
    }
}
