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

    public function scopeGetAll()
    {
        return $this->orderBy('created_at', 'DESC');
    }

    public function scopeWithName($query,$name)
    {
        return $name ? $query->where('ho_ten',  'like', '%'.$name.'%') : null;
    }

    public function scopeWithSodienthoai($query,$sodienthoai)
    {
        return $sodienthoai ? $query->where('so_dien_thoai', 'like', '%'.$sodienthoai.'%') : null;
    }

    public function scopeWithSearchCMND($query, $cmnd)
    {
        return $cmnd ? $query->where('so_CMND',$cmnd) : null;
    }

    public function checkSCMNDUpdate($cmnd)
    {

    }
}
