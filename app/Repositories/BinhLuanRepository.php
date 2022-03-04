<?php

namespace App\Repositories;

use App\Models\BinhLuan;
use App\Repositories\BaseRepository;

class BinhLuanRepository extends BaseRepository
{
    public function model()
    {
        return BinhLuan::class;
    }

    public function getAll()
    {
        return $this->model->getAll();
    }

    public function binhLuanTheoXe($idXe)
    {
        return $this->model->binhLuanTheoXe($idXe);
    }
}
