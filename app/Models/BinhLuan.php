<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinhLuan extends Model
{
    use HasFactory;

    public $table = 'tbl_binh_luan';

    protected $fillable = [
        'thoi_gian_binh_luan',
        'noi_dung',
        'iMa_khach_hang',
        'iMa_xe',
        'binh_luan_tra_loi'
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'iMa_khach_hang');
    }

    public function xe()
    {
        return $this->belongsTo(Xe::class,'iMa_xe');
    }

    public function selectOrder()
    {
        return $this->orderBy('created_at', 'DESC');
    }
    public function getAll()
    {
        return BinhLuan::whereHas('users')->with(['users']);
    }

    public function binhLuanTheoXe($idXe)
    {
        return $this->whereHas('users')->with(['users'])
            ->where('iMa_xe',$idXe)->paginate(5);
    }

    public function scopeWithTrangThai($query, $trangthai)
    {
        return $trangthai ? ( $trangthai == 'tra-loi' ? $query->where('binh_luan_tra_loi', '!=' , null) : $query->where('binh_luan_tra_loi',null) ) : null;
    }

    public function scopeWithXe($query, $maxe)
    {
        return $maxe ? $query->where('iMa_xe', $maxe) : null;
    }
}
