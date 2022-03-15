<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Xe;
use App\Services\HoaDonService;
use App\Services\XeService;
use Illuminate\Http\Request;

class BaoCaoThongKeController extends Controller
{
    protected $xeService;

    protected $hoaDonService;

    public function __construct(XeService $xeService,HoaDonService $hoaDonService)
    {
        $this->xeService = $xeService;
        $this->hoaDonService = $hoaDonService;
    }

    public function index(Request $request)
    {
        $tongtienmua = $this->xeService->tinhtongtiensuachua($request);
        $tongtienSuaChua = $this->hoaDonService->tongtienSuaChua($request);
        return view('admin.bacocaothongke',compact('tongtienmua','tongtienSuaChua'));
    }

    public function baocaoxemua(Request $request)
    {
        $resultXeMua = $this->xeService->searchForDateXeMua($request);
        return view('baocao.baocaoxemua',compact('resultXeMua'));
    }

    public function baocaoxeban(Request $request)
    {
        $resultXeBan = $this->xeService->searchForDateXeBan($request);
        return view('baocao.baocaoxeban',compact('resultXeBan'));
    }

    public function timkiem(Request $request)
    {
        $resultXeBan = $this->xeService->searchForDateXeBan($request);
        return view('baocao.view_load_tim_kiem',compact('resultXeBan'));
    }

    public function timkiem_xemua(Request $request)
    {
        $resultXeMua = $this->xeService->searchForDateXeMua($request);
        return view('baocao.view_load_tim_kiem_xe_mua',compact('resultXeMua'));
    }

    public function timkiem_theobaocao(Request $request)
    {
        $tongtienmua = $this->xeService->tinhtongtiensuachua($request);
        $tongtienSuaChua = $this->hoaDonService->tongtienSuaChua($request);
        return view('baocao.view_load_tim_kiem_report',compact('tongtienmua','tongtienSuaChua'));
    }
}
