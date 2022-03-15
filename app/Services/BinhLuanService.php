<?php

namespace App\Services;

use App\Repositories\BinhLuanRepository;
use App\Repositories\CuaHangRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class BinhLuanService
{

    protected $binhLuanRepository;

    public function __construct(BinhLuanRepository $binhLuanRepository)
    {
        $this->binhLuanRepository = $binhLuanRepository;
    }

    public function getAll()
    {
        return $this->binhLuanRepository->getAll();
    }

    public function create($request)
    {
        $dataCreate = array(
            'thoi_gian_binh_luan' => now(),
            'noi_dung' => $request->comment,
            'iMa_khach_hang' => auth()->user()->id,
            'iMa_xe' => $request->sMaxe
        );
        return $this->binhLuanRepository->create($dataCreate);
    }

    public function luuPhanHoi($request)
    {
        $dataCreate = array(
            'thoi_gian_binh_luan' => now(),
            'noi_dung' => $request->noidung,
            'iMa_khach_hang' => auth()->user()->id
        );
        return $this->binhLuanRepository->create($dataCreate);
    }

    public function update($request,$id)
    {
        $dataUpdate = array(
            'binh_luan_tra_loi' => $request->binh_luan_tra_loi
        );
        return $this->binhLuanRepository->update($dataUpdate,$id);
    }

    public function binhLuanTheoXe($id)
    {
        return $this->binhLuanRepository->binhLuanTheoXe($id);
    }

    public function find($id)
    {
        return $this->binhLuanRepository->find($id);
    }

    public function delete($id)
    {
        return $this->binhLuanRepository->delete($id);
    }

    public function search($request)
    {
        $dataSearch = array(
            'trang_thai_search' => $request->trang_thai_search,
            'ma_xe' => $request->ma_xe
        );
        return $this->binhLuanRepository->search($dataSearch);
    }


}

