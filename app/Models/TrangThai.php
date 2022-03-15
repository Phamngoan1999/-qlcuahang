<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrangThai extends Model
{
    use HasFactory;

    public $table = 'tbl_trang_thai';

    protected $fillable = [
        'ten_trang_thai'
    ];

}
