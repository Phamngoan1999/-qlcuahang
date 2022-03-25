<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ThemXeRequest;
use App\Http\Requests\UpdateXeRequest;
use App\Http\Requests\UpdateXeWebRequest;
use App\Http\Requests\XeWebRequest;
use App\Models\Anh;
use App\Models\DongXe;
use App\Models\HangXe;
use App\Models\KhachHang;
use App\Models\LoaiXe;
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
        $namhientai = $date['year']-18;
        $dongXe = DongXe::all();
        $inforKhachHang = $this->khachHangService->find($id);
        return view('xe.create',compact('inforKhachHang','namhientai','dongXe','id'));
    }

    public function show($id)
    {

        $date = getdate();
        $namhientai = $date['year']-18;
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
        $hangXe = HangXe::all();
        $loaiXe = LoaiXe::all();
        $thongTinXe = Xe::getThongTinKhachHangXe($id);
        $thongtinAnh = Anh::getAnhXe($id);
        return view('xe.dangthongtin',compact('thongTinXe','namhientai','dongXe','thongtinAnh','hangXe','loaiXe'));
    }

    public function view($id)
    {
        $date = getdate();
        $namhientai = $date['year'];
        $dongXe = DongXe::all();
        $hangXe = HangXe::all();
        $loaiXe = LoaiXe::all();
        $thongTinXe = Xe::getThongTinKhachHangXe($id);
        $thongtinAnh = Anh::getAnhXe($id);
        return view('xe.view_dang_thong_tin',compact('thongTinXe','namhientai','dongXe','thongtinAnh','hangXe','loaiXe'));
    }

    public function dangthongtinxeweb(XeWebRequest $request,$id)
    {
        $this->xeService->dangthongtinxeweb($request,$id);
        return $this->view($id);
    }

    //chuyển trạng thái
    public function deletetthongtinxeweb($id)
    {
        $this->xeService->deletethongtin($id);
        return $this->view($id);
    }

    public function updatetthongtinxeweb(UpdateXeWebRequest $request,$id)
    {
        $this->xeService->updatethongtin($request,$id);
        return $this->view($id);
    }

    public function update(UpdateXeRequest $request,$id)
    {
        $kiemtraSCMND = $this->xeService->find($id);
        if($kiemtraSCMND->khachhang->so_CMND == $request->so_CMND && $kiemtraSCMND->bien_so == $request->bien_so)
        {
            return $this->xeService->update($request,$id);
        }
        else
        {
            if($kiemtraSCMND->khachhang->so_CMND != $request->so_CMND && count($this->khachHangService->checkSCMND($request))> 0)
            {
                return "CMND-da-duoc-dang-ky";
            }
            if($kiemtraSCMND->bien_so != $request->bien_so)
            {
                $ListXeCUngBienSo = $this->xeService->checkBienSo($request);
                if(!empty($ListXeCUngBienSo))
                {
                    foreach($ListXeCUngBienSo as $item)
                    {
                        if($item['iMa_trang_thai'] != '3')
                        {
                            return "bien-so-khong-hop-le";
                        }
                    }
                }
            }
            return $this->xeService->update($request,$id);
        }
    }

    public function xoaThongTinXe(Request $request,$id)
    {
        $this->xeService->delete($id);
        $listXe = $this->xeService->searchQuanLyXe($request);
        return view("xe.table",compact('listXe'));
    }

    public function xoaanh($id)
    {
        $thongtinAnhXe  = $this->anhService->find($id);
        $thongAnh = Anh::getAnhXeMaAnh($thongtinAnhXe);
        if(count($thongAnh) == 1)
        {
            return "ko-the-xoa-anh";
        }
        $this->anhService->delete($id);
        $listImage = Anh::getAnhXeMaAnh($thongtinAnhXe);
        return view('xe.view_anh_xe',compact('listImage'));
    }

    public function xoaanhweb($id)
    {
        $thongtinAnhXe  = $this->anhService->find($id);
        $listImage = Anh::getAnhXeMaAnh($thongtinAnhXe);
        if(count($listImage) == 1)
        {
            return "ko-the-xoa-anh";
        }
        $this->anhService->delete($id);
        $listImage = Anh::getAnhXeMaAnh($thongtinAnhXe);
        return view('xe.view_anh_xe',compact('listImage'));
    }

    public function ingiayto($id)
    {
        $date = getdate();
        $namhientai = $date['year'];
        $dongXe = DongXe::all();
        $thongTinXe = Xe::find($id);
        return view('xe.giayban',compact('thongTinXe'));
    }

    public function inthongtinbanxe($id)
    {
        $date = getdate();
        $namhientai = $date['year'];
        $dongXe = DongXe::all();
        $thongTinXe = Xe::find($id);
        $thongtinKhachHang = KhachHang::find($thongTinXe->iMa_khach_hang_mua_xe);
        return view('xe.giaymuaxe',compact('thongTinXe','thongtinKhachHang'));
    }
}
