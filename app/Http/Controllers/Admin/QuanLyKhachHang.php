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

    public function index(Request $request)
    {
//
//        $mang = explode(".",'217674062_278888420681021_3583001458844245238_n.jpg');
//        $mang[count($mang)-1];
//        $allowedfileExtension=['pdf','jpg','png','docx'];
//        return in_array($mang[count($mang)-1],$allowedfileExtension);
        $listKhachHang = $this->khachHangService->getAllKhachHang($request);
        return view("admin.quanlykhachhang",compact('listKhachHang'));
    }

    public function search(Request $request)
    {
        $listKhachHang = $this->khachHangService->getAllKhachHang($request);
        return view("khachhang.table",compact('listKhachHang'));
    }

    public function create()
    {
        $date = getdate();
        $namhientai = $date['year']-18;
        $dongXe = DongXe::all();
        return view("khachhang.create",compact('namhientai','dongXe'));
    }


    public function edit()
    {
        return view("khachhang.edit");
    }


}
