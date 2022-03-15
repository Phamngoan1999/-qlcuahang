<?php

namespace App\Services;

use App\Models\Xe;
use App\Repositories\HoaDonRepository;
use App\Repositories\PhuTungRepository;
use App\Repositories\XeRepository;

class HoaDonService
{

    protected $hoaDonRepository;

    protected $phuTungRepository;

    protected $xeRepository;

    public function __construct(HoaDonRepository $hoaDonRepository,PhuTungRepository $phuTungRepository,XeRepository $xeRepository)
    {
        $this->hoaDonRepository = $hoaDonRepository;
        $this->phuTungRepository = $phuTungRepository;
        $this->xeRepository = $xeRepository;
    }

    public function all()
    {
        return $this->hoaDonRepository->getAllHoaDon();
    }

    public function search($request)
    {
        $dataSearch['cuahang'] = $request->cuahang;
        $dataSearch['xe'] = $request->xe;
        return $this->hoaDonRepository->search($dataSearch);
    }

    public function getHoaDonToCuaHang($request)
    {
        $dataSearch['idTrangThai'] = $request->trangthai;
        $dataSearch['idXe'] = $request->xe;
        return $this->hoaDonRepository->getHoaDonToCuaHang($dataSearch);
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
        Xe::find($request->iMa_xe)->update(['iMa_trang_thai'=>6]);
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
        $dataUpdate = array(
            'trang_thai' => 'huyhoadon'
        );
        $this->hoaDonRepository->update($dataUpdate,$id);
        $hoadon = $this->hoaDonRepository->find($id);
        // update trạng thái xe
        return $this->xeRepository->update(['iMa_trang_thai' => 5],$hoadon->iMa_xe);
    }

    public function lenhoadon($request,$id)
    {
        $tongtien = 0;
        foreach($request->dongia as $key => $iterm)
        {
            $gia = format_money_insert_db($iterm);
            $dataDongiaPhuTung = array(
                'don_gia' => $iterm
            );
            $tongtien = (double)$tongtien + (double)$gia;
            $this->phuTungRepository->update($dataDongiaPhuTung,$key);
        }
        $dataUpdateHoaDon = array(
            'tong_tien' => $tongtien,
            'ngay_lap' => now(),
            'trang_thai' => 'dahoanthanh'
        );
        $this->hoaDonRepository->update($dataUpdateHoaDon,$id);
        $hoadon = $this->hoaDonRepository->find($id);
        // update trạng thái xe
        return $this->xeRepository->update(['iMa_trang_thai' => 7],$hoadon->iMa_xe);
    }


    public function delete($id)
    {
        return $this->hoaDonRepository->delete($id);
    }

    public function tongtiensuachua($request)
    {
        $dataSearch = array(
            'fromDate' => $request->from_date,
            'toDate'    => $request->to_date
        );
        return $this->hoaDonRepository->tinhtongtiensuachua($dataSearch);
    }
}
