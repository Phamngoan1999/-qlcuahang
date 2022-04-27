<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class DichVu extends Model
{
    use HasFactory;

    public $table = 'tbl_dich_vu';

    protected $fillable = [
        'ten_dich_vu',
        'gia_dich_vu',
        'sCua_hang'
    ];

    public function phutung()
    {
        return $this->hasMany(PhuTung::class, 'sMa_dich_vu','id');
    }

    public function scopeWithCuaHang($query, $id)
    {
        return $query->where('sCua_hang', $id);
    }

    public function scopeWithDichVuCuaHang($query)
    {
        $inforCuaHang = CuaHang::where('so_dien_thoai',Auth::user()->email)->first();
        return $query->where('sCua_hang',$inforCuaHang->id);
    }

    public function scopeWithSearch($query,$data)
    {
        $inforCuaHang = CuaHang::where('so_dien_thoai',Auth::user()->email)->first();
        return $query->where('ten_dich_vu','like', '%'.$data['ten_dich_vu_search'].'%')
            ->orWhere('gia_dich_vu','like', '%'.$data['ten_dich_vu_search'].'%');
    }

    public function finddichVuChitietHoaDon($id)
    {
        return PhuTung::where('sMa_dich_vu',$id)->get();
    }
}
