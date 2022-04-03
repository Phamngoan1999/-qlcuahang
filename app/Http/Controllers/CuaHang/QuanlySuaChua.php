<?php

namespace App\Http\Controllers\CuaHang;

use App\Http\Controllers\Controller;
use App\Http\Requests\DichVuCreateRequest;
use App\Models\CuaHang;
use App\Services\CuaHangService;
use App\Services\DichVuService;
use App\Services\HoaDonService;
use App\Services\XeService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuanlySuaChua extends Controller
{

    public function __construct(CuaHangService $cuaHangServive,XeService $xeService,
                                HoaDonService $hoaDonService,DichVuService $dichVuService)
    {
        $this->cuaHangServive = $cuaHangServive;
        $this->xeService = $xeService;
        $this->hoaDonService = $hoaDonService;
        $this->dichVuService = $dichVuService;
    }

    public function index(Request $request)
    {
        $danhsachXe = $this->hoaDonService->selectXeTheoCuahang();
        $danhsach = $this->hoaDonService->getHoaDonToCuaHang($request);
        return view('cuahang.quanlysuachua',compact('danhsach','danhsachXe','request'));
    }

    public function create(DichVuCreateRequest $request)
    {
        return $this->dichVuService->create($request);
    }

    public function danhsachdichvu()
    {
        $ListService = $this->dichVuService->all();
        return view('cuahang.danhsachdichvu', compact('ListService'));
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
        return redirect()->route('quanlysuachua.showhoadon',$id)->with('message', 'Cửa hàng đã nhận đơn thành công');
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


    public function checkDongia($dongia)
    {
        foreach ($dongia as $key => $text)
        {
            if($text === null)
            {
                return false;
            }
        }
        return true;
    }

    public function inhoadon($id)
    {
        $thongtinHoadon = $this->hoaDonService->findHoadon($id);
        return view('hoadon.inhoadon',compact('thongtinHoadon'));
    }
}
