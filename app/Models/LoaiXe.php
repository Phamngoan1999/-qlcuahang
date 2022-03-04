<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiXe extends Model
{
    use HasFactory;
    public $table = 'tbl_loai_xe';

    protected $fillable = [
        'ten_loai_xe'
    ];

}
