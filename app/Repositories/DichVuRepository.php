<?php

namespace App\Repositories;

use App\Models\DichVu;
use App\Repositories\BaseRepository;

class DichVuRepository extends BaseRepository
{
    public function model()
    {
        return DichVu::class;
    }

    public function getListDichVu($id)
    {
        return $this->model->withCuaHang($id)->paginate(10);
    }

    public function listDichVuCuaHang()
    {
        return $this->model->withDichVuCuaHang()->paginate(10);
    }

    public function search($dataSearch)
    {
        return $this->model->withSearch($dataSearch)
            ->withDichVuCuaHang()->paginate(10);
    }

    public function finddichVuChitietHoaDon($id)
    {
        return $this->model->finddichVuChitietHoaDon($id);
    }
}
