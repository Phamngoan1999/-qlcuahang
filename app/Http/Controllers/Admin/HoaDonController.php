<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CuaHangService;
use App\Services\HoaDonService;
use App\Services\XeService;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{

    protected $cuaHangServive;

    protected $xeService;

    protected $hoaDonService;

    public function __construct(CuaHangService $cuaHangServive,XeService $xeService,HoaDonService $hoaDonService)
    {
        $this->cuaHangServive = $cuaHangServive;
        $this->xeService = $xeService;
        $this->hoaDonService = $hoaDonService;
    }

    public function create()
    {
        $danhsachCuaHang = $this->cuaHangServive->all();
        $danhsachXe = $this->xeService->allXeChuaBan();
        return view('hoadon.create',compact('danhsachCuaHang','danhsachXe'));
    }

    public function store(Request $request)
    {
        return $this->hoaDonService->create($request);
        return view('hoadon.create',compact('danhsachCuaHang','danhsachXe'));
    }
}
