<?php

namespace App\Repositories;

use App\Models\HoaDon;
use App\Repositories\BaseRepository;
use http\Env\Request;

class HoaDonRepository extends BaseRepository
{
    public function model()
    {
        return HoaDon::class;
    }

    public function getAllHoaDon()
    {
        return $this->model->getAllHoaDon();
    }

    public function search()
    {
        return $this->model->paginate(10);
    }

    public function findToHoaDon($id)
    {
        return $this->model->findToHoaDon($id);
    }

    public function getHoaDonToCuaHang()
    {
        return $this->model->getHoaDonToCuaHang();
    }

    public function nhandon($id)
    {
        $dataUpdate = array(
            'trang_thai' => 'danhandon'
        );
        return $this->update($dataUpdate,$id);
    }

    public function huyhoadon($id)
    {
        $dataUpdate = array(
            'trang_thai' => 'huyhoadon'
        );
        return $this->update($dataUpdate,$id);
    }

    public function selectXeTheoCuahang()
    {
        return $this->model->selectXeTheoCuahang();
    }
}
