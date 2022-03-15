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
        return $this->model->withCuaHangId()
            ->getAllHoaDon();
    }

    public function search($dataSearch)
    {
        return $this->model->withNameId($dataSearch['cuahang'])
            ->withCuaHangId($dataSearch['xe'])
            ->paginate(10);
    }

    public function findToHoaDon($id)
    {
        return $this->model->findToHoaDon($id);
    }

    public function getHoaDonToCuaHang($dataSearch)
    {
        return $this->model->withTrangThai($dataSearch['idTrangThai'])
            ->withCuaHangId($dataSearch['idXe'])
            ->withHoaDonToCuaHang()
            ->paginate(10);
    }

    public function nhandon($id)
    {
        $dataUpdate = array(
            'trang_thai' => 'danhandon'
        );
        return $this->update($dataUpdate,$id);
    }

    public function selectXeTheoCuahang()
    {
        return $this->model->selectXeTheoCuahang();
    }

    public function tinhtongtiensuachua($request)
    {
        return $this->model->tinhtongtiensuachua($request['fromDate'],$request['toDate']);
    }
}
