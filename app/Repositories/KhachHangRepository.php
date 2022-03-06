<?php

namespace App\Repositories;

use App\Models\KhachHang;
use App\Repositories\BaseRepository;

class KhachHangRepository extends BaseRepository
{
    public function model()
    {
        return KhachHang::class;
    }

    public function getAllKhachHang()
    {
        return $this->model->paginate(10);
    }
}
