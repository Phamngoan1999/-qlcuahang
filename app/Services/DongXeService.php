<?php

namespace App\Services;

use App\Repositories\DongXeRepository;

class DongXeService{

    private $dongXeRepository;

    public function __construct(DongXeRepository $dongXeRepository)
    {
        $this->dongXeRepository = $dongXeRepository;
    }

    public function all()
    {
        return $this->dongXeRepository->all();
    }

    public function find($id)
    {
        return $this->dongXeRepository->find($id);
    }

    public function create($request)
    {
        $dataCreate = array(
            'ten_dong_xe' => $request->ten_dong_xe,
            'iMa_loai_xe' => $request->iMa_loai_xe,
            'iMa_hang_xe' => $request->iMa_hang_xe
        );
        $dongxe = $this->dongXeRepository->create($dataCreate);
        return $dongxe;
    }

    public function update($request,$id)
    {
        $dataCreate = array(
            'ten_dong_xe' => $request->ten_dong_xe,
            'iMa_loai_xe' => $request->iMa_loai_xe,
            'iMa_hang_xe' => $request->iMa_hang_xe
        );
        $dongxe = $this->dongXeRepository->update($dataCreate,$id);
        return $dongxe;
    }

    public function delete($id)
    {
        return $this->dongXeRepository->delete($id);
    }
}
