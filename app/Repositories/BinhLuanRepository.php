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
        return $this->model->selectOrder()->paginate(10);
    }

    public function binhLuanTheoXe($idXe)
    {
        return $this->model->binhLuanTheoXe($idXe);
    }

    public function search($dataSearch)
    {
        return $this->model->withTrangThai($dataSearch['trang_thai_search'])
            ->withXe($dataSearch['ma_xe'])
            ->paginate(10);
    }
}
