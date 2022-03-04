<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhuTung extends Model
{
    use HasFactory;

    public $table = 'tbl_chi_tiet_hoa_don';

    protected $fillable = [
        'ten_phu_tung',
        'don_gia',
        'iMa_hoa_don'
    ];
}
