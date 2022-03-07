<?php

namespace App\Services;

use App\Repositories\HoaDonRepository;
use App\Repositories\PhuTungRepository;

class HoaDonService
{

    protected $hoaDonRepository;

    protected $phuTungRepository;

    public function __construct(HoaDonRepository $hoaDonRepository,PhuTungRepository $phuTungRepository)
    {
        $this->hoaDonRepository = $hoaDonRepository;
        $this->phuTungRepository = $phuTungRepository;
    }

    public function all()
    {
        return $this->hoaDonRepository->getAllHoaDon();
    }

    public function search()
    {
        return $this->hoaDonRepository->search();
    }

    public function getHoaDonToCuaHang()
    {
        return $this->hoaDonRepository->getHoaDonToCuaHang();
    }

    public function find($id)
    {
        return $this->hoaDonRepository->findToHoaDon($id);
    }

    public function selectXeTheoCuahang()
    {
        return $this->hoaDonRepository->selectXeTheoCuahang();
    }

    public function update($request,$id)
    {
        $dataUpdate = array(
            'iMa_cua_hang' => $request->iMa_cua_hang,
            'trang_thai' => 'chonhan'
        );
        $this->hoaDonRepository->update($dataUpdate,$id);
        if(isset($request->phutung))
        {
            foreach ($request->phutung as $iterm)
            {
                if(!empty($iterm))
                {
                    $dataPhuTung = array(
                        'ten_phu_tung' => $iterm,
                        'iMa_hoa_don' => $id
                    );
                    $this->phuTungRepository->create($dataPhuTung);
                }
            }
        }
        $hoadon = $this->hoaDonRepository->find($id);
        return $hoadon;
    }

    public function create($request)
    {
        $dataCreate = array(
            'iMa_cua_hang' => $request->iMa_cua_hang,
            'iMa_xe' => $request->iMa_xe,
            'trang_thai' => 'chonhan'
        );
        $hoadon = $this->hoaDonRepository->create($dataCreate);
        foreach ($request->phutung as $iterm)
        {
            if(!empty($iterm))
            {
                $dataPhuTung = array(
                    'ten_phu_tung' => $iterm,
                    'iMa_hoa_don' => $hoadon->id
                );
                $this->phuTungRepository->create($dataPhuTung);
            }
        }
        return $hoadon;
    }

    public function nhandon($request,$id)
    {
        return $this->hoaDonRepository->nhandon($id);
    }

    public function huyhoadon($request,$id)
    {
        return $this->hoaDonRepository->huyhoadon($id);
    }

    public function lenhoadon($request,$id)
    {
        $tongtien = 0;
        foreach($request->dongia as $key => $iterm)
        {
            $dataDongiaPhuTung = array(
                'don_gia' => $iterm
            );
            $tongtien = (double)$tongtien + (double)$iterm;
            $this->phuTungRepository->update($dataDongiaPhuTung,$key);
        }
        $dataUpdateHoaDon = array(
            'tong_tien' => $tongtien,
            'ngay_lap' => now(),
            'trang_thai' => 'dahoanthanh'
        );
        return $this->hoaDonRepository->update($dataUpdateHoaDon,$id);
    }

    public function delete($id)
    {
        return $this->hoaDonRepository->delete($id);
    }
}
