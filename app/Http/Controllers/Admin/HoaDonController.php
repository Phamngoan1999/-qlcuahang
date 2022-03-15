<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateHoaDon;
use App\Http\Requests\UpdateHoaDon;
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

    public function update(UpdateHoaDon $request,$id)
    {
        if(isset($request->phutung))
        {
            if($this->checkPhutung($request->phutung))
            {
                return $this->hoaDonService->update($request,$id);
            }else{
                return "nhap-thieu";
            }
        }else{
            $this->hoaDonService->update($request,$id);
            return $this->index($id);
        }
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
        if($this->checkPhutung($request->phutung))
        {
            return $this->hoaDonService->create($request);
        }else{
            return "nhap-thieu";
        }
    }
}
