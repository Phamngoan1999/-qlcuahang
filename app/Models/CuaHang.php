<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuaHang extends Model
{
    use HasFactory;

    public $table = 'tbl_cua_hang_lien_ket';

    protected $fillable = [
        'ten_cua_hang',
        'so_dien_thoai',
        'dia_chi_cua_hang'
    ];

    public function hoadon()
    {
        return $this->hasMany(HoaDon::class, 'iMa_cua_hang','id');
    }
}
