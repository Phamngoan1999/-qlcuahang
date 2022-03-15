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

    public function getAllKhachHang($dataSearch)
    {
        return $this->model->withName($dataSearch['name'])
            ->withSodienthoai($dataSearch['sodienthoai'])
            ->paginate(10);
    }

    public function searchCMND($request)
    {
        return $this->model->withSearchCMND($request->searchCMND)->first();
    }
}
