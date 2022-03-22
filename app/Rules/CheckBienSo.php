<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckBienSo implements Rule
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
        if(substr($value,0,1) == "-")
            return false;
        $special = array("@","!","&","(","$","*","@","!","$","<",">");
        for ($i = 0; $i < strlen($value); $i++){
            if(in_array($value[$i], $special))
            {
                return false;
            }
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "Biển số không hợp lệ";
    }
}
