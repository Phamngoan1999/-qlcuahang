<?php

namespace App\Services;

use App\Models\CuaHang;
use App\Repositories\DichVuRepository;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class DichVuService
{

    private $dichVuRepository;

    public function __construct(DichVuRepository $dichVuRepository)
    {
        $this->dichVuRepository = $dichVuRepository;
    }

    public function all()
    {
        return $this->dichVuRepository->all();
    }

    public function listDichVuCuaHang()
    {
        return $this->dichVuRepository->listDichVuCuaHang();
    }

    public function create($request)
    {

        $dataCreate = array(
            'ten_dich_vu' => $request->ten_dich_vu,
            'gia_dich_vu' => $request->gia_dich_vu,
            'sCua_hang' => CuaHang::where("so_dien_thoai",Auth::user()->email)->first()->id
        );
        return $this->dichVuRepository->create($dataCreate);
    }

    public function show($id)
    {
        return $this->dichVuRepository->find($id);
    }

    public function update($request,$id)
    {
        $dataUpdate = array(
            'ten_dich_vu' => $request->ten_dich_vu,
            'gia_dich_vu' => $request->gia_dich_vu,
            'sCua_hang' => CuaHang::where("so_dien_thoai",Auth::user()->email)->first()->id
        );
        return $this->dichVuRepository->update($dataUpdate,$id);
    }

    public function delete($id)
    {
        return $this->dichVuRepository->delete($id);
    }

    public function getListDichVu($request)
    {
        $id = $request->iMa_cua_hang;
        return $this->dichVuRepository->getListDichVu($id);
    }
}
