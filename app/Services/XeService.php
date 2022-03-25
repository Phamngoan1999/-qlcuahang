<?php

namespace App\Services;

use App\Models\Anh;
use App\Models\Xe;
use App\Repositories\KhachHangRepository;
use App\Repositories\XeRepository;
use App\Traits\HandleImage;

class XeService
{
    use HandleImage;

    protected $xeRepository;

    protected $khachHangRepository;

    public function __construct(XeRepository $xeRepository,KhachHangRepository $khachHangRepository)
    {
        $this->xeRepository = $xeRepository;
        $this->khachHangRepository = $khachHangRepository;
    }

    public function searchForDateXeMua($request)
    {
        $dataSearch = array(
            'fromDate' => $request->from_date,
            'toDate'    => $request->to_date
        );
        return $this->xeRepository->searchTongTienXeMua($dataSearch);
    }

    public function searchForDateXeBan($request)
    {
        $dataSearch = array(
            'fromDate' => $request->from_date,
            'toDate'    => $request->to_date
        );
        return $this->xeRepository->searchTongTienXeBan($dataSearch);
    }

    public function all()
    {
        return $this->xeRepository->getAll();
    }

    public function allXeChuaBan()
    {
        return $this->xeRepository->allXeChuaBan();
    }

    public function find($id)
    {
        return $this->xeRepository->find($id);
    }

    public function delete($id)
    {
        return $this->xeRepository->delete($id);
    }

    public function search($request)
    {
        $dataSearch = array(
            'iMa_hang_xe' => $request->hang_xe,
            'iMa_loai_xe' => $request->loai_xe,
            'khoang_gia' => $request->khoang_gia
        );
        return $this->xeRepository->search($dataSearch);
    }

    public function store($request,$id)
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
        $this->khachHangRepository->update($dataKhachHang,$id);
        $khachhang = $this->khachHangRepository->find($id);
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
        $dataXe = array(
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
            'iMa_dong_xe' => $request->iMa_dong_xe
        );
        $this->xeRepository->update($dataXe,$id);
        $xe = $this->xeRepository->find($id);

        //update thông tin khách hàng
        $this->khachHangRepository->update($dataKhachHang,$xe->iMa_khach_hang_ban_xe);
        $files = $request->file('files_anh_giay_to');
        if(!empty($files)) {
            foreach ($files as $key => $file) {
                $duongdan = $this->storeImage($file);
                $dataAnh = new Anh([
                    'duong_dan' => $duongdan,
                    'iMa_loai_anh' => 2
                ]);
                $xe->anh()->save($dataAnh);
            }
        }
        return $xe;
    }

    public function dangthongtinxeweb($request,$id)
    {
        $dataXe = array(
            'dung_tich' => $request->dung_tich,
            'iMa_trang_thai' => 2,
            'iMa_dong_xe' => $request->iMa_dong_xe,
            'gia_dang_web' => $request->gia_dang_web,
            'so_km_da_di' => $request->so_km_di,
            'nam_dang_ky' => $request->nam_dang_ky,
            'khoang_gia' => $request->khoang_gia,
            'ghi_chu' => $request->ghi_chu
        );
        $this->xeRepository->update($dataXe,$id);
        $xe = $this->xeRepository->find($id);
        //ảnh avata
        $files_avata = $request->file('files_avata_xe');
        if(!empty($files_avata))
        {
            $duongdan = $this->storeImage($files_avata);
            $dataAnh_avata = new Anh([
                'duong_dan' => $duongdan,
                'iMa_loai_anh' => 4
            ]);
            $xe->anh()->save($dataAnh_avata);
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

    public function updatethongtin($request,$id)
    {
        $dataXe = array(
            'dung_tich' => $request->dung_tich,
            'iMa_trang_thai' => 2,
            'iMa_dong_xe' => $request->iMa_dong_xe,
            'gia_dang_web' => $request->gia_dang_web,
            'so_km_da_di' => $request->so_km_di,
            'nam_dang_ky' => $request->nam_dang_ky,
            'khoang_gia' => $request->khoang_gia,
            'ghi_chu' => $request->ghi_chu
        );
        $this->xeRepository->update($dataXe,$id);
        $xe = $this->xeRepository->find($id);
        //ảnh avata
        $files_avata = $request->file('files_avata_xe');
        if(!empty($files_avata))
        {
            $anhXoa = Anh::where('iMa_xe',$xe->id)->where('iMa_loai_anh',4)->first();
            $this->deleteImage($anhXoa->duong_dan);
            $anhXoa->delete();

            $duongdan = $this->storeImage($files_avata);
            $dataAnh_avata = new Anh([
                'duong_dan' => $duongdan,
                'iMa_loai_anh' => 4
            ]);
            $xe->anh()->save($dataAnh_avata);
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

    public function selectXeTheoCuahang($request)
    {
        return $this->xeRepository->selectXeTheoCuahang($request);
    }

    public function getXeNew()
    {
        return $this->xeRepository->getXeNew();
    }

    public function getXeLienQuanKhachHang($id)
    {
        return $this->xeRepository->getXeLienQuanKhachHang($id);
    }

    public function deletethongtin($id)
    {
        $dataXe = array(
            'iMa_trang_thai' => 4,
        );
        return $this->xeRepository->update($dataXe,$id);
    }

    public function searchQuanLyXe($request)
    {
        $dataSearch = array(
            'bien_so_search' => $request->bien_so_search,
            'khach_hang_search' => $request->khach_hang_search,
            'trang_thai_search' => $request->trang_thai_search
        );
        return $this->xeRepository->searchQuanLyXe($dataSearch);
    }

    public function searchHangXe($id)
    {
        return $this->xeRepository->searchHangXe($id);
    }

    public function baocaoxeban($request)
    {
        $dataSearch = array(
            'fromDate' => $request->from_date,
            'toDate'    => $request->to_date
        );
        return $this->xeRepository->searchTongTienXeBan($dataSearch);
    }

    public function tinhtongtiensuachua($request)
    {
        $dataSearch = array(
            'fromDate' => $request->from_date,
            'toDate'    => $request->to_date
        );
        return $this->xeRepository->tinhtongtiensuachua($dataSearch);
    }

    public function search_lich_su($request)
    {
        $dataSearch = array(
            'thongtin' => $request->thongtin,
        );
        return $this->xeRepository->search_lich_su_ban_xe($dataSearch);
    }

    public function search_lich_su_mua_xe($request)
    {
        $dataSearch = array(
            'thongtin' => $request->thongtin,
        );
        return $this->xeRepository->search_lich_su_mua_xe($dataSearch);
    }

    public function checkBienSo($request)
    {
        return Xe::where('bien_so',$request->bien_so)->get()->toArray();
    }
}
