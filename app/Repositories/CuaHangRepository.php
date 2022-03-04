<?php

namespace App\Repositories;

use App\Models\CuaHang;
use App\Repositories\BaseRepository;

class CuaHangRepository extends BaseRepository
{
    public function model()
    {
        return CuaHang::class;
    }
}
