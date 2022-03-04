<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anh extends Model
{
    use HasFactory;

    public $table = 'tbl_anh';

    protected $fillable = [
        'duong_dan',
        'iMa_xe',
        'iMa_loai_anh'
    ];

    public function xe()
    {
        return $this->belongsTo(Xe::class);
    }

    public function getAnhXe($id)
    {
        return Anh::where('iMa_xe', $id)
            ->get()->toArray();
    }

    public function getAnhWedXe($id)
    {
        return Anh::where('iMa_xe', $id)
            ->where('iMa_loai_anh', 2)
            ->get()->toArray();
    }

    public function getAnhXeMaAnh($infor)
    {
        return Anh::where('iMa_loai_anh', $infor['iMa_loai_anh'])
            ->where('iMa_xe', $infor['iMa_xe'])
            ->get()->toArray();
    }
}
