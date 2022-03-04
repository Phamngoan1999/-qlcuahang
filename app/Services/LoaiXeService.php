<?php

namespace App\Services;

use App\Repositories\LoaiXeRepository;

class LoaiXeService
{
    private $loaiXeRepository;

    public function __construct(LoaiXeRepository $loaiXeRepository)
    {
        $this->loaiXeRepository = $loaiXeRepository;
    }

    public function all()
    {
        return $this->loaiXeRepository->all();
    }

    public function create($request)
    {
        $dataCreate = array(
            'ten_loai_xe' => $request->loaixe
        );
        $hangxe = $this->loaiXeRepository->create($dataCreate);
        return $hangxe;
    }

    public function find($id)
    {
        return $this->loaiXeRepository->find($id);
    }

    public function update($request,$id)
    {
        $dataCreate = array(
            'ten_loai_xe' => $request->loaixeUpdate
        );
        return $this->loaiXeRepository->update($dataCreate,$id);
    }

    public function delete($id)
    {
        return $this->loaiXeRepository->delete($id);
    }
}
