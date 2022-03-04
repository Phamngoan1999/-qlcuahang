<?php

namespace App\Repositories;
use App\Models\LoaiXe;
use App\Repositories\BaseRepository;

class LoaiXeRepository extends BaseRepository
{
    public function model()
    {
        return LoaiXe::class;
    }
}
