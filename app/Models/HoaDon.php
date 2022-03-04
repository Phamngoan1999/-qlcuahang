<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;

    public $table = 'tbl_hoa_don';

    protected $fillable = [
        'tong_tien',
        'ngay_lap',
        'iMa_xe',
        'iMa_cua_hang'
    ];
}
