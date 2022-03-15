<?php

namespace App\Repositories;
use App\Models\Xe;
use App\Repositories\BaseRepository;

class XeRepository extends BaseRepository
{
    public function model()
    {
        return Xe::class;
    }

    public function getAll()
    {
        return $this->model->getAllTheoTrangThai()->paginate(10);
    }

    public function allXeChuaBan()
    {
        return $this->model->allXeChuaBan();
    }

    public function selectXeTheoCuahang()
    {
        return $this->model->selectXeTheoCuahang();
    }

    public function getXeNew()
    {
        return $this->model->getXeNew();
    }

    public function getXeLienQuanKhachHang($id)
    {
        return $this->model->getXeLienQuanKhachHang($id);
    }

    public function search($dataSearch)
    {
        return $this->model->searchLoaiXe($dataSearch['iMa_loai_xe'])
            ->withHangXe($dataSearch['iMa_hang_xe'])
            ->searchKhoangGia($dataSearch['khoang_gia'])
            ->searchTrangThai()
            ->limit(16)
            ->paginate(8);
    }

    public function searchTongTienXeMua($dataSearch)
    {
        return $this->model->searchXeChuaBan()
            ->searchFromDateXeMua($dataSearch['fromDate'])
            ->searchToDateXeMua($dataSearch['toDate'])
            ->paginate(10);
    }

    public function searchTongTienXeBan($dataSearch)
    {
        return $this->model->searchXeBan()
            ->searchFromDateXeBan($dataSearch['fromDate'])
            ->searchToDateXeBan($dataSearch['toDate'])
            ->paginate(10);
    }


    public function searchQuanLyXe($dataSearch)
    {
        return $this->model->searchBienSo($dataSearch['bien_so_search'])
            ->searchTrangThaiQuanLy($dataSearch['trang_thai_search'])
            ->searchKhachHangQuanLy($dataSearch['khach_hang_search'])
            ->paginate(10);
    }

    public function searchHangXe($id)
    {
        return $this->model->withHangXe($id)
            ->searchTrangThai()
            ->paginate(8);
    }

    public function tinhtongtiensuachua($request)
    {
        return $this->model->tinhtongtiensuachua($request['fromDate'],$request['toDate']);
    }
}
