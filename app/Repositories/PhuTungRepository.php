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

    public function findTheoHoaDon($idHoaDon)
    {
        return $this->model->findTheoHoaDon($idHoaDon);
    }
}
