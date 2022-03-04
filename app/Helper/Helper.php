<?php
if(!function_exists('format_binh_luan'))
{
    function format_binh_luan($str)
    {
        if(strlen($str) > 50)
        {
            return substr($str, 0, 50) . '...';
        }
        return $str;
    }
}
