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

    public function getAll()
    {
        return BinhLuan::whereHas('users')->with(['users'])->get();
    }

    public function binhLuanTheoXe($idXe)
    {
        return $this->whereHas('users')->with(['users'])
            ->where('iMa_xe',$idXe)->paginate(5);
    }
}
