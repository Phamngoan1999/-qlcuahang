<?php

namespace App\Services;

use App\Models\Anh;
use App\Models\KhachHang;
use App\Models\Xe;
use App\Repositories\KhachHangRepository;
use App\Repositories\XeRepository;
use App\Traits\HandleImage;
use Intervention\Image\Facades\Image;

class KhachHangService{

    use HandleImage;

    protected $path = 'uploads/images/';

    protected $khachHangRepository;

    protected $xeRepository;

    public function __construct(KhachHangRepository $khachHangRepository,XeRepository $xeRepository)
    {
        $this->khachHangRepository = $khachHangRepository;
        $this->xeRepository = $xeRepository;
    }

    public function all()
    {
        return $this->khachHangRepository->all();
    }

    public function getAllKhachHang($request)
    {
        $dataSearch['name'] = $request->name;
        $dataSearch['sodienthoai'] = $request->sodienthoai;
        return $this->khachHangRepository->getAllKhachHang($dataSearch);
    }

    public function find($id)
    {
        return $this->khachHangRepository->find($id);
    }

    public function store($request)
    {
        $dataKhachHang = array(
            'ho_ten' => $request->ho_ten,
            'so_dien_thoai' => $request->so_dien_thoai,
            'so_CMND' => $request->so_CMND,
            'nam_sinh' => $request->nam_sinh,
            'noi_cu_tru' => $request->noi_cu_tru,
            'cap_ngay' => $request->cap_ngay,
            'noi_cap_CMND' => $request->noi_cap_CMND
        );
        $dataXe = new Xe([
            'so_loai' => $request->so_loai,
            'mau_son' => $request->mau_son,
            'dung_tich' => $request->dung_tich,
            'bien_so' => $request->bien_so,
            'dang_ky_tai' => $request->dang_ky_tai,
            'so_may' => $request->so_may,
            'so_khung' => $request->so_khung,
            'bao_hiem_xe' => !empty($request->bao_hiem_xe)?"checked":null,
            'ngay_mua' => now(),
            'gia_mua' => format_money_insert_db($request->gia_mua),
            'iMa_trang_thai' => 1,
            'iMa_dong_xe' => $request->iMa_dong_xe
        ]);
        $khachhang = $this->khachHangRepository->create($dataKhachHang);
        $xe = $khachhang->xe()->save($dataXe);
        $files = $request->file('files_anh_giay_to');
        foreach ($files as $key => $file)
        {
            $duongdan = $this->storeImage($file);
            $dataAnh = new Anh([
                'duong_dan' => $duongdan,
                'iMa_loai_anh' => 2
            ]);
            $xe->anh()->save($dataAnh);
        }
        return $xe;
    }

    public function update($request,$id)
    {
        $dataKhachHang = array(
            'ho_ten' => $request->ho_ten,
            'so_dien_thoai' => $request->so_dien_thoai,
            'so_CMND' => $request->so_CMND,
            'nam_sinh' => $request->nam_sinh,
            'noi_cu_tru' => $request->noi_cu_tru,
            'cap_ngay' => $request->cap_ngay,
            'noi_cap_CMND' => $request->noi_cap_CMND
        );
        return $this->khachHangRepository->update($dataKhachHang,$id);
    }

    public function delete($id)
    {
        return $this->khachHangRepository->delete($id);
    }

    public function luuGiaDichBan($request,$idXe)
    {
        $tien = 0;
        $xe = $this->xeRepository->find($idXe);
        $tien = $tien + $xe->gia_mua;
        if (!empty($xe->hoadon))
        {
            foreach ($xe->hoadon as $iterm)
            {
                $tien += $iterm->tong_tien;
            }
        }
        if ((double)format_money_insert_db($request->gia_ban) < (double)$tien) return "gia-ban-khong-hop-le";
        $dataXe =  array(
            'updated_at' => now(),
            'gia_ban' => format_money_insert_db($request->gia_ban),
            'ngay_ban' => now(),
            'iMa_trang_thai' => 3,
            'iMa_khach_hang_mua_xe' => $request->ma_khach_hang
        );
        if(empty($request->ma_khach_hang)){
            $dataKhachHang = array(
                'ho_ten' => $request->ho_ten,
                'so_dien_thoai' => $request->so_dien_thoai,
                'so_CMND' => $request->so_CMND,
                'nam_sinh' => $request->nam_sinh,
                'noi_cu_tru' => $request->noi_cu_tru,
                'cap_ngay' => $request->cap_ngay,
                'noi_cap_CMND' => $request->noi_cap_CMND
            );
            $khachhang = $this->khachHangRepository->create($dataKhachHang);
            $dataXe['iMa_khach_hang_mua_xe'] = $khachhang->id;
        }
        $this->xeRepository->update($dataXe,$idXe);
        $xe = $this->xeRepository->find($idXe);
        $files = $request->file('files_anh_giay_to');
        foreach ($files as $key => $file)
        {
            $duongdan = $this->storeImage($file);
            $dataAnh = new Anh([
                'duong_dan' => $duongdan,
                'iMa_loai_anh' => 3
            ]);
            $xe->anh()->save($dataAnh);
        }
        return $xe;
    }

    public function searchCMND($request)
    {
        return $this->khachHangRepository->searchCMND($request);
    }

    public function checkSCMND($request)
    {
        return KhachHang::where('so_CMND',$request->so_CMND)->get();
    }
}
