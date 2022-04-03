<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
