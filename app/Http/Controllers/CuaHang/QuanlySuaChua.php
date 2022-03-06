<?php

namespace App\Http\Controllers\CuaHang;

use App\Http\Controllers\Controller;
use App\Services\CuaHangService;
use App\Services\HoaDonService;
use App\Services\XeService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class QuanlySuaChua extends Controller
{

    public function __construct(CuaHangService $cuaHangServive,XeService $xeService,HoaDonService $hoaDonService)
    {
        $this->cuaHangServive = $cuaHangServive;
        $this->xeService = $xeService;
        $this->hoaDonService = $hoaDonService;
    }

    public function index()
    {
        $danhsach = $this->hoaDonService->getHoaDonToCuaHang();
        return view('cuahang.quanlysuachua',compact('danhsach'));
    }

    public function nhandon(Request $request,$id)
    {
        return $this->hoaDonService->nhandon($request,$id);
    }

    public function huyhoadon(Request $request,$id)
    {
        return $this->hoaDonService->huyhoadon($request,$id);
    }

    public function lenhoadon(Request $request,$id)
    {
        return $this->hoaDonService->lenhoadon($request,$id);
    }
}
