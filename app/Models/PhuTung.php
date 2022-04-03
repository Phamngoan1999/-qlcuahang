<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhuTung extends Model
{
    use HasFactory;

    public $table = 'tbl_chi_tiet_hoa_don';

    protected $fillable = [
        'ten_phu_tung',
        'don_gia',
        'iMa_hoa_don',
        'sMa_dich_vu'
    ];

    public function hoadon()
    {
        return $this->belongsTo(HoaDon::class, 'iMa_hoa_don');
    }

    public function dichvu()
    {
        return $this->belongsTo(DichVu::class, 'sMa_dich_vu');
    }

    public function findTheoHoaDon($id)
    {
        return $this->where('iMa_hoa_don', $id)->get();
    }

    public function listPhuTungNotFinal()
    {
        return $this->where("iMa_hoa_don", NULL)->get();
    }

    public function scopeListPhuTungNotFinalAndCuaHang($query, $idCuahang)
    {
        return $this->with('dichvu')
                    ->where('iMa_hoa_don',NULL)
                    ->whereHas('dichvu', function ($query) use ($idCuahang) {
                        $query->where('sCua_hang', $idCuahang);
                    })->get();
    }

    public function deleteHoaDonNull()
    {
        return $this->where('iMa_hoa_don',NULL)->delete();
    }

    public function listPhuTungNotFinalUpdate($idHoadon)
    {
        return $this->where("iMa_hoa_don", NULL)
            ->orWhere("iMa_hoa_don", $idHoadon)->get();
    }

    public function findTheoHoaDonNull($id)
    {
        return $this->where("iMa_hoa_don", NULL)
            ->where('sMa_dich_vu',$id)->get();
    }

    public function deletePhutungNotFinal($idHoadon)
    {
        return $this->where("iMa_hoa_don", $idHoadon)->delete();
    }

    public function findTheoHoaDonDelete($idDichVu, $idHoadon)
    {
        return $this->where("iMa_hoa_don", $idHoadon)
            ->where('sMa_dich_vu',$idDichVu)->get();
    }
}
