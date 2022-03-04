<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HangXe extends Model
{
    use HasFactory;
    public $table = 'tbl_hang_xe';

    protected $fillable = [
        'ten_hang_xe'
    ];

}
