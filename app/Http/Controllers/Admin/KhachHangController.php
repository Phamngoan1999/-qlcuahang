<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GiaDichMuaXeRequest;
use App\Http\Requests\GiaoDichMuaXeDaCoThongTinRequest;
use App\Http\Requests\KhachHangUpdateRequest;
use App\Http\Requests\SearchCMND;
use App\Http\Requests\ThemKhachHangRequest;
use App\Models\DongXe;
use App\Models\KhachHang;
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
        $date = getdate();
        $namhientai = $date['year'];
        $dongXe = DongXe::all();
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
        $inforKhachHang = KhachHang::find($inforXe[0]['iMa_khach_hang_mua_xe']);
        return view('xe.update',compact('id','namhientai','dongXe','inforXe','inforKhachHang'));
    }

    public function view_giao_dich($id)
    {
        $date = getdate();
        $namhientai = $date['year'];
        $dongXe = DongXe::all();
        $inforXe = Xe::getThongTinXe($id);
        $inforKhachHang = KhachHang::find($inforXe[0]['iMa_khach_hang_mua_xe']);
        return view('xe.view_update_giao_dich',compact('id','namhientai','dongXe','inforXe','inforKhachHang'));
    }

    public function view_thong_tin_khach_hang($inforKhachHang,$request)
    {
        $date = getdate();
        $namhientai = $date['year'];
        $idXe = $request->ma_xe;
        return view('xe.view_thong_tin_khach_hang',compact('inforKhachHang','namhientai','idXe'));
    }

    public function delete(Request $request,$id)
    {
        $thongtin = $this->xeService->getXeLienQuanKhachHang($id);
        if(count($thongtin) == 0)
        {
            $this->khachHangService->delete($id);
            $listKhachHang = $this->khachHangService->getAllKhachHang($request);
            return view("khachhang.table",compact('listKhachHang'));
        }
       return "xoa-thong-tin-lien-qua-khach-hang";
    }

    public function luuGiaDichBan(GiaDichMuaXeRequest $request,$id)
    {
        $this->khachHangService->luuGiaDichBan($request,$id);
        return $this->view_giao_dich($id);
    }

    public function luuGiaDichBanKhachHang(GiaoDichMuaXeDaCoThongTinRequest $request,$id)
    {
        $this->khachHangService->luuGiaDichBan($request,$id);
        return $this->view_giao_dich($id);
    }

    public function search(SearchCMND $request)
    {
        $khachhang = $this->khachHangService->searchCMND($request);
        return $this->view_thong_tin_khach_hang($khachhang,$request);
    }

    public function search_lich_su_khach_hang(Request $request)
    {
        return view('khachhang.search_lich_su_khach_hang');
    }

    public function search_lich_su(Request $request)
    {
        $danhsachBanXe = $this->xeService->search_lich_su($request);
        $danhsachMuaXe = $this->xeService->search_lich_su_mua_xe($request);
        return view('khachhang.table_tiem_kiem',compact('danhsachBanXe','danhsachMuaXe'));
    }
}
