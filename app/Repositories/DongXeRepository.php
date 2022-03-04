<?php

namespace App\Repositories;

use App\Models\DongXe;
use App\Repositories\BaseRepository;

class DongXeRepository extends BaseRepository
{
    public function model()
    {
        return DongXe::class;
    }
}
