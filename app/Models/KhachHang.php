<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;

    public $table = 'tbl_khach_hang';

    protected $fillable = [
        'ho_ten',
        'so_dien_thoai',
        'so_CMND',
        'nam_sinh',
        'noi_cu_tru',
        'cap_ngay',
        'noi_cap_CMND'
    ];

    public function xe()
    {
        return $this->hasMany(Xe::class, 'iMa_khach_hang_ban_xe','id');
    }

    public function attachXe(array $xe)
    {
        return $this->xe()->attach($xe);
    }
}
