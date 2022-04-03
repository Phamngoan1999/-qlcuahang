<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateHoaDon;
use App\Http\Requests\UpdateHoaDon;
use App\Services\CuaHangService;
use App\Services\HoaDonService;
use App\Services\PhuTungService;
use App\Services\XeService;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{

    protected $cuaHangServive;

    protected $xeService;

    protected $hoaDonService;

    protected $phutungService;

    public function __construct(CuaHangService $cuaHangServive,XeService $xeService,HoaDonService $hoaDonService,PhuTungService $phutungService)
    {
        $this->cuaHangServive = $cuaHangServive;
        $this->xeService = $xeService;
        $this->phutungService = $phutungService;
        $this->hoaDonService = $hoaDonService;
    }

    public function index($id)
    {
        $danhsachCuaHang = $this->cuaHangServive->all();
        $danhsachXe = $this->xeService->allXeChuaBan();
        $thongtinHoadon = $this->hoaDonService->find($id);
        return view('hoadon.index',compact('danhsachCuaHang','danhsachXe','thongtinHoadon','id'));
    }

    public function create()
    {
        $danhsachCuaHang = $this->cuaHangServive->all();
        $danhsachXe = $this->xeService->allXeChuaBan();
        return view('hoadon.create',compact('danhsachCuaHang','danhsachXe'));
    }

    public function show($id)
    {
        $danhsachCuaHang = $this->cuaHangServive->all();
        $danhsachXe = $this->xeService->allXeChuaBan();
        $thongtinHoadon = $this->hoaDonService->find($id);
        return view('hoadon.show',compact('danhsachCuaHang','danhsachXe','thongtinHoadon','id'));
    }

    public function update(Request $request,$id)
    {
        return $this->hoaDonService->update($request,$id);
    }

    public function checkPhutung($phutung)
    {
        foreach ($phutung as $key => $text)
        {
            if($text === null)
            {
                return false;
            }
        }
        return true;
    }

    public function store(CreateHoaDon $request)
    {
        $hoaDon = $this->hoaDonService->create($request);
        return redirect()->route('quanlysuachua.showhoadon',$hoaDon->id)->with('message', 'Lưu thông tin thành công');
    }
}
