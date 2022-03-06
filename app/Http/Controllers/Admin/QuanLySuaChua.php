<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CuaHangService;
use App\Services\HoaDonService;
use App\Services\XeService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class QuanLySuaChua extends Controller
{

    public function __construct(CuaHangService $cuaHangServive,XeService $xeService,HoaDonService $hoaDonService)
    {
        $this->cuaHangServive = $cuaHangServive;
        $this->xeService = $xeService;
        $this->hoaDonService = $hoaDonService;
    }

    public function index()
    {
        $danhsach = $this->hoaDonService->all();
        return view('admin.quanlysuachua',compact('danhsach'));
    }
}
