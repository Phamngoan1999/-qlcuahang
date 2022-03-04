<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrangThai extends Model
{
    use HasFactory;

    public $table = 'tbl_xe';

    protected $fillable = [
        'ten_trang_thai'
    ];

    public function xe()
    {
        return $this->hasMany(Xe::class, 'iMa_trang_thai','id');
    }
}
