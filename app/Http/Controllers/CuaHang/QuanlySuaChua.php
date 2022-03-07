<?php

namespace App\Http\Controllers\CuaHang;

use App\Http\Controllers\Controller;
use App\Models\CuaHang;
use App\Services\CuaHangService;
use App\Services\HoaDonService;
use App\Services\XeService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
//        $danhsachXe =  $this->hoaDonService->selectXeTheoCuahang();
        $danhsach = $this->hoaDonService->getHoaDonToCuaHang();
        return view('cuahang.quanlysuachua',compact('danhsach'));
    }

    public function view($id)
    {
        $danhsachCuaHang = $this->cuaHangServive->all();
        $danhsachXe = $this->xeService->allXeChuaBan();
        $thongtinHoadon = $this->hoaDonService->find($id);
        return view('hoadon.index',compact('danhsachCuaHang','danhsachXe','thongtinHoadon','id'));
    }

    public function nhandon(Request $request,$id)
    {
        $this->hoaDonService->nhandon($request,$id);
        return $this->view($id);

    }

    public function huyhoadon(Request $request,$id)
    {
        $this->hoaDonService->huyhoadon($request,$id);
        return $this->view($id);
    }

    public function lenhoadon(Request $request,$id)
    {
        $this->hoaDonService->lenhoadon($request,$id);
        return $this->view($id);
    }
}
