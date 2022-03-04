<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CuaHangRequest;
use App\Http\Requests\CuaHangUpdateRequest;
use App\Services\CuaHangService;

class CuaHangController extends Controller
{
    protected $cuaHangService;

    public function __construct(CuaHangService $cuaHangService)
    {
        $this->cuaHangService = $cuaHangService;
    }

    public function index()
    {
        $listCuaHang = $this->cuaHangService->getAllCuaHang();
        return view('cuahang.table',compact('listCuaHang'));
    }

    public function create(CuaHangRequest $request)
    {
        $this->cuaHangService->create($request);
        return $this->index();
    }

    public function show($id)
    {
        $cuahang = $this->cuaHangService->show($id);
        return view('cuahang.show',compact('cuahang'));
    }

    public function update(CuaHangUpdateRequest $request,$id)
    {
        $this->cuaHangService->update($request,$id);
        return $this->index();
    }

    public function delete($id)
    {
        $this->cuaHangService->delete($id);
        return $this->index();
    }
}
