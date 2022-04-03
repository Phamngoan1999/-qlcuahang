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

    public function listPhuTungNotFinal()
    {
        return $this->model->listPhuTungNotFinal();
    }

    public function listPhuTungNotFinalAndCuaHang($idCuaHang)
    {
        return $this->model->listPhuTungNotFinalAndCuaHang($idCuaHang);
    }

    public function deleteHoaDonNull()
    {
        return $this->model->deleteHoaDonNull();
    }

    public function listPhuTungNotFinalUpdate($idHoadon)
    {
        return $this->model->listPhuTungNotFinalUpdate($idHoadon);
    }

    public function findTheoHoaDonNull($id)
    {
        return $this->model->findTheoHoaDonNull($id);
    }

    public function deletePhutungNotFinal($idHoadon)
    {
        return $this->model->deletePhutungNotFinal($idHoadon);
    }

    public function findTheoHoaDonDelete($id, $hoadon)
    {
        return $this->model->findTheoHoaDonDelete($id, $hoadon);
    }
}
