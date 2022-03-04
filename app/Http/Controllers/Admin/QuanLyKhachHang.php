<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DongXe;
use App\Services\KhachHangService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QuanLyKhachHang extends Controller
{

    protected $khachHangService;

    public function __construct(KhachHangService $khachHangService)
    {
        $this->khachHangService = $khachHangService;
    }

    public function index()
    {
        $listKhachHang = $this->khachHangService->all();
        return view("admin.quanlykhachhang",compact('listKhachHang'));
    }

    public function create()
    {
        $date = getdate();
        $namhientai = $date['year'];
        $dongXe = DongXe::all();
        return view("khachhang.create",compact('namhientai','dongXe'));
    }


    public function edit()
    {
        return view("khachhang.edit");
    }

}
