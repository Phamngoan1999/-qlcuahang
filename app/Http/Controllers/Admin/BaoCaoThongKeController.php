<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HoaDon;
use App\Models\Xe;
use App\Services\HoaDonService;
use App\Services\XeService;
use Illuminate\Http\Request;

class BaoCaoThongKeController extends Controller
{
    protected $xeService;

    protected $hoaDonService;

    public function __construct(XeService $xeService, HoaDonService $hoaDonService)
    {
        $this->xeService = $xeService;
        $this->hoaDonService = $hoaDonService;
    }

    public function index(Request $request)
    {
        //lấy năm hiện tại
        $date = getdate();
        $namhientai = $date['year'];
        $baocao = Xe::selectRaw('year(ngay_mua) as year, monthname(ngay_mua) month, sum(gia_mua) tonggiamua, sum(gia_ban) tonggiaban')
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->get();
        $baocaoSuaChua = HoaDon::selectRaw('year(ngay_lap) as year, monthname(ngay_lap) month, sum(tong_tien) tongsuachua')
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->get();
        $listMonth = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        foreach ($listMonth as $iterm) {
            $list[$iterm] = array(
                'tonggiamua' => 0,
                'tonggiaban' => 0,
                'tongsuachua' => 0
            );
        }

        foreach ($baocao as $iterm) {
            if ($iterm->year == (!empty($request->year_select) ? $request->year_select : $namhientai)) {
                $list[$iterm->month]['tonggiamua'] = $iterm->tonggiamua;
                $list[$iterm->month]['tonggiaban'] = $iterm->tonggiaban;
            }
        }

        $max = max(max($list)['tonggiamua'],max($list)['tonggiaban'],max($list)['tongsuachua']);

        foreach ($baocaoSuaChua as $iterm) {
            if ($iterm->year == (!empty($request->year_select) ? $request->year_select : $namhientai)) {
                $list[$iterm->month]['tongsuachua'] = $iterm->tongsuachua;
            }
        }
        return view('admin.bacocaothongke', compact('list','max','request'));
    }

    public function baocaoxemua(Request $request)
    {
        $resultXeMua = $this->xeService->searchForDateXeMua($request);
        return view('baocao.baocaoxemua', compact('resultXeMua'));
    }

    public function baocaoxeban(Request $request)
    {
        $resultXeBan = $this->xeService->searchForDateXeBan($request);
        return view('baocao.baocaoxeban', compact('resultXeBan'));
    }

    public function timkiem(Request $request)
    {
        $resultXeBan = $this->xeService->searchForDateXeBan($request);
        return view('baocao.view_load_tim_kiem', compact('resultXeBan'));
    }

    public function timkiem_xemua(Request $request)
    {
        $resultXeMua = $this->xeService->searchForDateXeMua($request);
        return view('baocao.view_load_tim_kiem_xe_mua', compact('resultXeMua'));
    }

    public function timkiem_theobaocao(Request $request)
    {
        $tongtienmua = $this->xeService->tinhtongtiensuachua($request);
        $tongtienSuaChua = $this->hoaDonService->tongtienSuaChua($request);
        return view('baocao.view_load_tim_kiem_report', compact('tongtienmua', 'tongtienSuaChua'));
    }
}
