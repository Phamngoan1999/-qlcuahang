<?php

namespace App\Repositories;

use App\Models\HoaDon;
use App\Repositories\BaseRepository;

class HoaDonRepository extends BaseRepository
{
    public function model()
    {
        return HoaDon::class;
    }
}
