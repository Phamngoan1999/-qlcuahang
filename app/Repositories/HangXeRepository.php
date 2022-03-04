<?php

namespace App\Repositories;
use App\Models\HangXe;
use App\Repositories\BaseRepository;

class HangXeRepository extends BaseRepository
{
    public function model()
    {
        return HangXe::class;
    }
}
