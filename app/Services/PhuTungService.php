<?php

namespace App\Services;

use App\Repositories\DichVuRepository;
use App\Repositories\PhuTungRepository;
use http\Env\Request;

class PhuTungService
{
    protected $phuTungRepository;

    protected $dichVuRepository;

    public function __construct(PhuTungRepository $phuTungRepository,DichVuRepository $dichVuRepository)
    {
        $this->phuTungRepository = $phuTungRepository;
        $this->dichVuRepository = $dichVuRepository;
    }

    public function listPhuTungNotFinal()
    {
        return $this->phuTungRepository->listPhuTungNotFinal();
    }

    public function create($id)
    {
        $dichvu = $this->dichVuRepository->find($id);
        $dataCreate = array(
            'ten_phu_tung' => $dichvu->ten_dich_vu,
            'don_gia' => $dichvu->gia_dich_vu,
            'sMa_dich_vu' => $dichvu->id
        );
        return $this->phuTungRepository->create($dataCreate);
    }

    public function find($id)
    {
        return $this->phuTungRepository->find($id);
    }

    public function findTheoHoaDon($idHoadon)
    {
        return $this->phuTungRepository->findTheoHoaDon($idHoadon);
    }

    public function listPhuTungNotFinalAndCuaHang($idCuaHang)
    {
        return $this->phuTungRepository->listPhuTungNotFinalAndCuaHang($idCuaHang);
    }

    public function listPhuTungNotFinalAndCuaHangUpdate($idCuaHang,$idHoadon)
    {
        return $this->phuTungRepository->listPhuTungNotFinalAndCuaHangUpdate($idCuaHang,$idHoadon);
    }

    public function delete($id,$hoadon)
    {
        $phutung = $this->phuTungRepository->findTheoHoaDonNull($id);
        if(!empty($phutung))
        {
            $phutung = $this->phuTungRepository->findTheoHoaDonDelete($id,$hoadon);
        }
        return $this->phuTungRepository->delete($phutung[0]->id);
    }

    public function deleteSelect()
    {
        $listXoa = $this->phuTungRepository->listPhuTungNotFinal();
        foreach ($listXoa as $iterm)
        {
            $this->phuTungRepository->delete($iterm->id);
        }
        return "ok";
    }

    public function listPhuTungNotFinalUpdate($id)
    {
        return $this->phuTungRepository->listPhuTungNotFinalUpdate($id);
    }

    public function deletePhutungNotFinal($id)
    {
        return $this->phuTungRepository->deletePhutungNotFinal($id);
    }

    public function deleteHoaDonNull()
    {
        return $this->phuTungRepository->deleteHoaDonNull();
    }
}
