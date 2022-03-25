<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckListImage implements Rule
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
        $allowedfileExtension=['pdf','jpg','png','docx'];
        foreach($value as $file){
            $mang = explode(".",$file);
            if(in_array($mang[count($mang)-1],$allowedfileExtension))
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
        return 'Vui lòng chọn ảnh';
    }
}
