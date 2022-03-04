<?php

namespace App\Repositories;

use App\Models\Anh;
use App\Repositories\BaseRepository;

class AnhRepository extends BaseRepository
{
    public function model()
    {
        return Anh::class;
    }
}
