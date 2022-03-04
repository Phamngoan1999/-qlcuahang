<?php

namespace App\Repositories;
use App\Models\PhuTung;
use App\Repositories\BaseRepository;

class PhuTungRepository extends BaseRepository
{
    public function model()
    {
        return PhuTung::class;
    }

}
