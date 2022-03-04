<?php

namespace App\Services;

use App\Models\Anh;
use App\Models\Xe;
use App\Repositories\KhachHangRepository;
use App\Traits\HandleImage;
use Intervention\Image\Facades\Image;

class KhachHangService{

    use HandleImage;

    protected $path = 'uploads/images/';

    protected $khachHangRepository;

    public function __construct(KhachHangRepository $khachHangRepository)
    {
        $this->khachHangRepository = $khachHangRepository;
    }

    public function all()
    {
        return $this->khachHangRepository->all();
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
            'gia_mua' => $request->gia_mua,
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
        $files_wed = $request->file('files_anh_dang_web');
        if(!empty($files_wed))
        {
            foreach ($files_wed as  $file)
            {
                $duongdan = $this->storeImage($file);
                $dataAnh = new Anh([
                    'duong_dan' => $duongdan,
                    'iMa_loai_anh' => 1
                ]);
                $xe->anh()->save($dataAnh);
            }
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
}
