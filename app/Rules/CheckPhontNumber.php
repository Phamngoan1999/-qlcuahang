<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckPhontNumber implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
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
        if($value == "0000000000")
            return false;
        if(substr($value,0,1) != "0")
            return false;
        if(strlen($value) == 10)
            return true;
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Số điện thoại phải 10 ký tự và hợp lệ';
    }
}
