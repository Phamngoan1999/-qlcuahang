<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CuaHangService;
use App\Services\HoaDonService;
use App\Services\PhuTungService;
use App\Services\XeService;
use Illuminate\Http\Request;

class PhuTungController extends Controller
{
    protected $phuTungService;

    protected $cuaHangServive;

    protected $xeService;

    protected $hoaDonService;

    public function __construct(CuaHangService $cuaHangServive,XeService $xeService,HoaDonService $hoaDonService,PhuTungService $phuTungService)
    {
        $this->cuaHangServive = $cuaHangServive;
        $this->xeService = $xeService;
        $this->hoaDonService = $hoaDonService;
        $this->phuTungService = $phuTungService;
    }

    public function delete($id)
    {
        $phutung = $this->phuTungService->find($id);
        $allPhutungHoaDong = $this->phuTungService->findTheoHoaDon($phutung->iMa_hoa_don);
        if(count($allPhutungHoaDong) == 1)
        {
            return "Hay-xoa-hoa-don";
        }
        $this->phuTungService->delete($id);
        return $this->index($phutung->iMa_hoa_don);
    }

    public function index($id)
    {
        $danhsachCuaHang = $this->cuaHangServive->all();
        $danhsachXe = $this->xeService->allXeChuaBan();
        $thongtinHoadon = $this->hoaDonService->find($id);
        return view('hoadon.index',compact('danhsachCuaHang','danhsachXe','thongtinHoadon','id'));
    }
}
