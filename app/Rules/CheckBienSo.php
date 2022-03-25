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
        $dsHopLe = array('11','12','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','40','34','35','36','37','38','43','47','48','49','41','50','51','52','53','54','55','56',
            '57','58','59','39','60','61','62','63','64','65','66','67','68','69','70','71','72','73','74','75','76','77','78','79','80','81','82','83','84','85','86','88','89','90','92','93','94','95','97','98','99'
        );
        if(!in_array(substr($value,0,2), $dsHopLe))
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
