<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DongXe extends Model
{
    use HasFactory;

    public $table = 'tbl_dong_xe';

    protected $fillable = [
        'ten_dong_xe',
        'iMa_loai_xe',
        'iMa_hang_xe'
    ];

    public function hangxe()
    {
        return $this->hasMany(HangXe::class, 'id','iMa_hang_xe');
    }

    public function loaixe()
    {
        return $this->hasMany(LoaiXe::class, 'id','iMa_loai_xe');
    }
}
