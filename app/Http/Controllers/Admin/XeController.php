<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ThemXeRequest;
use App\Http\Requests\UpdateXeRequest;
use App\Http\Requests\UpdateXeWebRequest;
use App\Models\Anh;
use App\Models\DongXe;
use App\Models\Xe;
use App\Services\AnhService;
use App\Services\KhachHangService;
use App\Services\XeService;
use Illuminate\Http\Request;

class XeController extends Controller
{

    protected $khachHangService;

    protected $xeService;

    protected $anhService;

    public function __construct(KhachHangService $khachHangService,XeService $xeService,AnhService $anhService)
    {
        $this->khachHangService = $khachHangService;
        $this->xeService = $xeService;
        $this->anhService = $anhService;
    }

    public function create($id)
    {
        $date = getdate();
        $namhientai = $date['year'];
        $dongXe = DongXe::all();
        $inforKhachHang = $this->khachHangService->find($id);
        return view('xe.create',compact('inforKhachHang','namhientai','dongXe','id'));
    }

    public function show($id)
    {
        $date = getdate();
        $namhientai = $date['year'];
        $dongXe = DongXe::all();
        $thongTinXe = Xe::getThongTinKhachHangXe($id);
        $thongtinAnh = Anh::getAnhXe($id);
        return view('xe.edit',compact('thongTinXe','namhientai','dongXe','thongtinAnh'));
    }

    public function store(ThemXeRequest $request,$id)
    {
        return $this->xeService->store($request,$id);
    }

    public function dangthongtinxe($id)
    {
        $date = getdate();
        $namhientai = $date['year'];
        $dongXe = DongXe::all();
        $thongTinXe = Xe::getThongTinKhachHangXe($id);
        $thongtinAnh = Anh::getAnhXe($id);
        return view('xe.dangthongtin',compact('thongTinXe','namhientai','dongXe','thongtinAnh'));
    }

    public function dangthongtinxeweb(UpdateXeWebRequest $request,$id)
    {
        return $this->xeService->updatethongtin($request,$id);
    }

    public function update(UpdateXeRequest $request,$id)
    {
        return $this->xeService->update($request,$id);
    }

    public function xoaThongTinXe($id)
    {
        return $this->xeService->delete($id);
    }

    public function xoaanh($id)
    {
        $thongAnh = $this->anhService->find($id);
        $this->anhService->delete($id);
        $thongAnh = Anh::getAnhXeMaAnh($thongAnh);
        return view('xe.view_anh_xe',compact('thongAnh'));
    }
}
