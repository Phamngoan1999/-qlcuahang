<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        'khoang_gia',
        'ghi_chu'
    ];

    public function khachhang()
    {
        return $this->belongsTo(KhachHang::class,'iMa_khach_hang_ban_xe','id');
    }

    public function khachhangmuaxe()
    {
        return $this->belongsTo(KhachHang::class,'iMa_khach_hang_mua_xe','id');
    }

    public function dongxe()
    {
        return $this->belongsTo(DongXe::class,'iMa_dong_xe','id');
    }

    public function trangthai()
    {
        return $this->belongsTo(TrangThai::class,'iMa_trang_thai','id');
    }

    public function anh()
    {
        return $this->hasMany(Anh::class, 'iMa_xe','id');
    }

    public function hoadon()
    {
        return $this->hasMany(HoaDon::class, 'iMa_xe','id');
    }

    public function getAllTheoTrangThai()
    {
        return Xe::whereHas('trangthai')->with(['trangthai']);
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
            ->whereHas('dongxe')->with(['dongxe'])
            ->where('id', $id)->get()->toArray();
        return $query;
    }

    public function getThongTinToTalXe($id)
    {
        $query = Xe::whereHas('dongxe')->with(['dongxe'])
            ->where('id', $id)->get()->toArray();
        return $query;
    }

    public function getThongTinToDongXeDangDangTrenWeb()
    {
        $query = Xe::whereHas('dongxe')->with(['dongxe'])->get()->toArray();
        return $query;
    }

    public function allXeChuaBan()
    {
        return $this->whereHas('dongxe')->with(['dongxe'])
            ->whereIn('iMa_trang_thai',array(1,4,5))->get();
    }

    public function getXeNew()
    {
        return $this->where("iMa_trang_thai",2)->orderBy('created_at', 'desc')->take(8)->get();
    }

    public function getXeLienQuanKhachHang($id)
    {
        return $this->where('iMa_khach_hang_ban_xe',$id)
            ->orWhere('iMa_khach_hang_mua_xe',$id)
            ->get();
    }

    public function scopeSearchKhachHangQuanLy($query,$khachhang)
    {
        return $khachhang ? $query->WhereHas('khachhang', function ($query) use ($khachhang) {
            $query->where('ho_ten', $khachhang)
                ->orWhere('so_dien_thoai',$khachhang)
                ->orWhere('so_CMND',$khachhang);
        }): null;
    }

    public function scopeSearchLoaiXe($query,$loaiXe)
    {
        return $loaiXe ? $query->WhereHas('dongxe', function ($query) use ($loaiXe) {
            $query->where('iMa_loai_xe', $loaiXe);
        }): null;
    }


    public function scopeSearchHangXe($query,$loaiXe)
    {
        return $loaiXe ? $query->WhereHas('dongxe', function ($query) use ($loaiXe) {
            $query->where('iMa_hang_xe', $loaiXe);
        }): null;
    }

    public function scopeWithHangXe($query,$hangXe)
    {
        return $hangXe ? $query->WhereHas('dongxe', function ($query) use ($hangXe) {
            $query->where('iMa_hang_xe', $hangXe);
        }): null;
    }

    public function scopeSearchKhoangGia($query,$khoangGia)
    {
        return $khoangGia ? $query->where('khoang_gia',$khoangGia): null;
    }

    public function scopeSearchTrangThai($query)
    {
        return  $query->where('iMa_trang_thai',2);
    }

    public function scopeSearchFromDateXeMua($query, $fromDate)
    {
        return $fromDate ? $query->where('created_at','>=',$fromDate): null;
    }

    public function scopeSearchToDateXeMua($query, $toDate)
    {
        return $toDate ? $query->where('created_at','<=',$toDate): null;
    }

    public function scopeSearchXeBan($query)
    {
        return $query->where('iMa_khach_hang_mua_xe','!=',null);
    }

    public function scopeSearchFromDateXeBan($query, $fromDate)
    {
        return $fromDate ? $query->where('updated_at','>=',$fromDate): null;
    }

    public function scopeSearchToDateXeBan($query, $toDate)
    {
        return $toDate ? $query->where('updated_at','<=',$toDate): null;
    }

    public function scopeSearchBienSo($query, $bienso)
    {
        return $bienso ? $query->where('bien_so','like', '%'.$bienso.'%'): null;
    }

    public function scopeSearchTrangThaiQuanLy($query, $trangthai)
    {
        return $trangthai ? $query->where('iMa_trang_thai',$trangthai): null;
    }

    public function scopeSearchXeChuaBan($query)
    {
        return $query->where('iMa_trang_thai','!=',3);
    }

    public function tinhtongtiensuachua($fromData,$toDate)
    {
        $query = DB::table("tbl_xe")
            ->select(DB::raw("count(gia_mua) as slXeMua,count(gia_ban) as slXeBan,SUM(gia_mua) as sumtienmua, SUM(gia_ban) as sumtienban"));
        if($fromData != null)
        {
            $query = $query->where('created_at','>=',$fromData);
        }
        if($toDate != null)
        {
            $query = $query->where('created_at','<=',$toDate);
        }
        $query = $query->get();
        return $query;
    }

    public function scopeSearchLichSuBanXe($query, $thongtin)
    {
        return $thongtin ? $query->WhereHas('khachhang', function ($query) use ($thongtin) {
                    $query->where('ho_ten', $thongtin)
                    ->orWhere('so_dien_thoai',$thongtin)
                    ->orWhere('so_CMND',$thongtin);
              }):null;
    }

    public function scopeSearchLichSuMuaXe($query, $thongtin)
    {
        return $query->WhereHas('khachhangmuaxe', function ($query) use ($thongtin) {
                    $query->where('ho_ten', 'like', '%'.$thongtin.'%')
                        ->orWhere('so_dien_thoai', 'like', '%'.$thongtin.'%')
                        ->orWhere('so_CMND', 'like', '%'.$thongtin.'%');
                });
    }
}
