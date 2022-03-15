<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HoaDon extends Model
{
    use HasFactory;

    public $table = 'tbl_hoa_don';

    protected $fillable = [
        'tong_tien',
        'ngay_lap',
        'iMa_xe',
        'iMa_cua_hang',
        'trang_thai'
    ];

    public function phutung()
    {
        return $this->hasMany(PhuTung::class, 'iMa_hoa_don','id');
    }

    public function xe()
    {
        return $this->belongsTo(Xe::class,'iMa_xe');
    }

    public function cuahang()
    {
        return $this->belongsTo(CuaHang::class,'iMa_cua_hang');
    }

    public function getAllHoaDon()
    {
        return $this->whereHas('cuahang')->with(['cuahang'])
            ->whereHas('xe')->with(['xe'])
            ->paginate(10);
    }

    public function findToHoaDon($id)
    {
        return $this->whereHas('phutung')->with(['phutung'])
        ->where('id',$id)->get();
    }

    public function scopeWithHoaDonToCuaHang($query)
    {
        $inforCuaHang = CuaHang::where('so_dien_thoai',Auth::user()->email)->get();
        return $query->where('iMa_cua_hang',$inforCuaHang[0]->id)
            ->whereHas('xe')->with(['xe']);
    }

    public function selectXeTheoCuahang()
    {
        $inforCuaHang = CuaHang::where('so_dien_thoai',Auth::user()->email)->first();
        $ds = $this->where('iMa_cua_hang',$inforCuaHang->id)
            ->whereHas('xe')->with(['xe'])
            ->groupBy('iMa_xe')->distinct()->get();
        return $ds;
    }

    public function scopeWithNameId($query, $name)
    {
        return $name ? $query->where('iMa_cua_hang', $name) : null;
    }

    public function scopeWithCuaHangId($query, $id)
    {
        return $id ? $query->where('iMa_xe', $id): null;
    }

    public function scopeWithTrangThai($query, $sTrangThai)
    {
        return $sTrangThai ? $query->where('trang_thai', $sTrangThai): null;
    }

    public function tinhtongtiensuachua($fromData,$toDate)
    {
        $query = DB::table("tbl_hoa_don")
            ->select(DB::raw("SUM(tong_tien) as tong_tien_sua_chua"))
            ->where('trang_thai','dahoanthanh');
        if($fromData != null)
        {
            $query = $query->where('updated_at','>=',$fromData);
        }
        if($toDate != null)
        {
            $query = $query->where('updated_at','<=',$toDate);
        }
        $query = $query->get();
        return $query;
    }
}
