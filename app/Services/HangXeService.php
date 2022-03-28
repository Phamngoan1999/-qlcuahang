<?php

namespace App\Services;

use App\Repositories\HangXeRepository;
use http\Env\Request;

class HangXeService{

    private $hangXeRepository;

    public function __construct(HangXeRepository $hangXeRepository)
    {
        $this->hangXeRepository = $hangXeRepository;
    }

    public function all()
    {
        return $this->hangXeRepository->all();
    }

    public function create($request)
    {
        $dataCreate = array(
            'ten_hang_xe' => $request->hangxe
        );
        $hangxe = $this->hangXeRepository->create($dataCreate);
        return $hangxe;
    }

    public function find($id)
    {
        return $this->hangXeRepository->find($id);
    }

    public function edit($request,$id)
    {
        $dataUpdate = array(
            'ten_hang_xe' => $request->hangxe
        );
        return $this->hangXeRepository->update($dataUpdate,$id);
    }

    public function delete($id)
    {
        return $this->hangXeRepository->delete($id);
    }
}
