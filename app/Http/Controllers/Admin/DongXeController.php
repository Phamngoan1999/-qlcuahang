<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DongXeRequest;
use App\Services\DongXeService;
use App\Services\HangXeService;
use App\Services\LoaiXeService;

class DongXeController extends Controller
{

    protected $hangXeService;

    protected $loaiXeService;

    protected $dongXeService;

    public function __construct(HangXeService $hangXeService,LoaiXeService $loaiXeService,DongXeService $dongXeService)
    {
        $this->dongXeService = $dongXeService;
        $this->hangXeService = $hangXeService;
        $this->loaiXeService = $loaiXeService;
    }

    public function index()
    {
        $dongXe = $this->dongXeService->all();
        return view('dongxe.table',compact('dongXe'));
    }

    public function create(DongXeRequest $request)
    {
        $this->dongXeService->create($request);
        return $this->index();
    }

    public function show($id)
    {
        $dongXe = $this->dongXeService->find($id);
        $hangXeAll = $this->hangXeService->all();
        $loaiXeAll = $this->loaiXeService->all();
        return view('dongxe.show',compact('dongXe','hangXeAll','loaiXeAll'));
    }

    public function delete($id)
    {
        $this->dongXeService->delete($id);
        return $this->index();
    }

    public function update(DongXeRequest $request,$id)
    {
        $this->dongXeService->update($request,$id);
        return $this->index();
    }
}
