<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xe extends Model
{
    use HasFactory;

    public $table = 'tbl_xe';

    protected $fillable = [
        'so_loai',
        'mau_son',
        'dung_tich',
        'bien_so',
        'dang_ky_tai',
        'so_may',
        'so_khung',
        'bao_hiem_xe',
        'ngay_mua',
        'ngay_ban',
        'gia_mua',
        'gia_ban',
        'gia_dang_web',
        'iMa_trang_thai',
        'iMa_khach_hang_ban_xe',
        'iMa_khach_hang_mua_xe',
        'iMa_dong_xe',
        'nam_dang_ky',
        'so_km_da_di',
        'ghi_chu'
    ];

    public function khachhang()
    {
        return $this->belongsTo(KhachHang::class,'iMa_khach_hang_ban_xe','id');
    }

    public function dongxe()
    {
        return $this->belongsTo(DongXe::class,'iMa_dong_xe','id');
    }

    public function trangthai()
    {
        return $this->belongsTo(TrangThai::class);
    }

    public function anh()
    {
        return $this->hasMany(Anh::class, 'iMa_xe','id');
    }

    public function hoadon()
    {
        return $this->hasMany(HoaDon::class, 'iMa_xe','id');
    }

    public function getThongTinXe($id)
    {
        $query = Xe::whereHas('khachhang')->with(['khachhang'])
                    ->whereHas('anh')->with(['anh'])
                    ->where('id', $id)->get()->toArray();
        return $query;
    }

    public function getThongTinKhachHangXe($id)
    {
        $query = Xe::whereHas('khachhang')->with(['khachhang'])
            ->where('id', $id)->get()->toArray();
        return $query;
    }

    public function getThongTinToTalXe($id)
    {
        $query = Xe::whereHas('dongxe')->with(['dongxe'])
            ->where('id', $id)->get()->toArray();
        return $query;
    }

    public function allXeChuaBan()
    {
        return $this->whereHas('dongxe')->with(['dongxe'])
                    ->where('iMa_khach_hang_mua_xe',null)->get();
    }
}
