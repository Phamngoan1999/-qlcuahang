<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\KhachHangUpdateRequest;
use App\Http\Requests\ThemKhachHangRequest;
use App\Models\DongXe;
use App\Models\Xe;
use App\Services\KhachHangService;
use App\Services\XeService;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{

    protected $khachHangService;

    public function __construct(KhachHangService $khachHangService,XeService $xeService)
    {
        $this->khachHangService = $khachHangService;
        $this->xeService = $xeService;
    }

    public function show($id)
    {
        $date = getdate();
        $namhientai = $date['year'];
        $dongXe = DongXe::all();
        $inforKhachHang = $this->khachHangService->find($id);
        return view('khachhang.edit',compact('inforKhachHang','dongXe','namhientai'));
    }

    public function store(ThemKhachHangRequest $request)
    {
        return $this->khachHangService->store($request);
    }

    public function update(KhachHangUpdateRequest $request,$id)
    {
        $this->khachHangService->update($request,$id);
        return $this->khachHangService->find($id);
    }

    public function muaxXe($id)
    {
        $date = getdate();
        $namhientai = $date['year'];
        $dongXe = DongXe::all();
        $inforXe = Xe::getThongTinXe($id);
        return view('xe.update',compact('id','namhientai','dongXe','inforXe'));
    }
}
