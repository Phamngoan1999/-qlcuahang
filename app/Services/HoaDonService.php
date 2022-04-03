<?php

namespace App\Services;

use App\Models\DichVu;
use App\Models\PhuTung;
use App\Models\Xe;
use App\Repositories\DichVuRepository;
use App\Repositories\HoaDonRepository;
use App\Repositories\PhuTungRepository;
use App\Repositories\XeRepository;

class HoaDonService
{

    protected $hoaDonRepository;

    protected $phuTungRepository;

    protected $xeRepository;

    protected $dichVuRepository;

    public function __construct(HoaDonRepository $hoaDonRepository,PhuTungRepository $phuTungRepository,XeRepository $xeRepository,DichVuRepository $dichVuRepository)
    {
        $this->hoaDonRepository = $hoaDonRepository;
        $this->phuTungRepository = $phuTungRepository;
        $this->xeRepository = $xeRepository;
        $this->dichVuRepository = $dichVuRepository;
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
        return $this->hoaDonRepository->find($id);
    }

    public function findHoadon($id)
    {
        return $this->hoaDonRepository->find($id);
    }

    public function selectXeTheoCuahang()
    {
        return $this->hoaDonRepository->selectXeTheoCuahang();
    }

    public function update($request,$id)
    {
        $hoadon = $this->hoaDonRepository->find(183);
        PhuTung::whereNotIn("id",$request->idPhuTung)->delete();
        foreach ($request->idPhuTung as $iterm)
        {
            $phutung = $this->phuTungRepository->find($iterm);
            $dataPhuTung = array(
                'iMa_hoa_don' => $id,
                'ten_phu_tung' => $phutung->dichvu->ten_dich_vu,
                'don_gia' =>  $phutung->dichvu->gia_dich_vu,
                'sMa_dich_vu' =>  $phutung->sMa_dich_vu
            );
            $this->phuTungRepository->update($dataPhuTung,$iterm);
        }
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
        foreach ($request->idPhuTung as $iterm)
        {
            if(!empty($iterm))
            {
                $dataPhuTung = array(
                    'iMa_hoa_don' => $hoadon->id
                );
                $this->phuTungRepository->update($dataPhuTung,$iterm);
            }
        }
        $this->phuTungRepository->deleteHoaDonNull();
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
        $hoadon = $this->hoaDonRepository->find($id);
        foreach ($hoadon->phutung as $index => $val)
        {
            $gia = format_money_insert_db($val->don_gia);
            $tongtien = (double)$tongtien + (double)$gia;
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
        $maXe = $this->hoaDonRepository->find($id)->iMa_xe;
        $this->hoaDonRepository->delete($id);
        return $this->xeRepository->update(['iMa_trang_thai' => 1],$maXe);
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
