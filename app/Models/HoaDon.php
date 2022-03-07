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
            ->get();
    }

    public function findToHoaDon($id)
    {
        return $this->whereHas('phutung')->with(['phutung'])
        ->where('id',$id)->get();
    }

    public function getHoaDonToCuaHang()
    {
        $inforCuaHang = CuaHang::where('so_dien_thoai',Auth::user()->email)->get();
        return $this->where('iMa_cua_hang',$inforCuaHang[0]->id)
            ->whereHas('cuahang')->with(['cuahang'])
            ->whereHas('xe')->with(['xe'])
            ->paginate(10);
    }

    public function selectXeTheoCuahang()
    {
        $inforCuaHang = CuaHang::where('so_dien_thoai',Auth::user()->email)->first();
        return DB::table('tbl_hoa_don')->where('iMa_cua_hang',$inforCuaHang->id)->groupBy('iMa_xe')->get();
    }
}
