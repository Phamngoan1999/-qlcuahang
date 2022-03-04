<?php

namespace App\Http\Controllers\HeThong;

use App\Http\Controllers\Controller;
use App\Models\Anh;
use App\Models\BinhLuan;
use App\Models\HangXe;
use App\Models\LoaiXe;
use App\Models\Xe;
use App\Services\BinhLuanService;
use App\Services\XeService;
use Illuminate\Http\Request;

class TrangChiTietControler extends Controller
{
    protected $xeService;

    protected $binhLuanService;

    public function __construct(XeService $xeService,BinhLuanService $binhLuanService)
    {
        $this->xeService = $xeService;
        $this->binhLuanService = $binhLuanService;
    }

    public function index($id)
    {
        $thongTinXe = Xe::getThongTinToTalXe($id);
        $thongtinAnh = Anh::getAnhWedXe($id);
        $hangXe = HangXe::all();
        $loaiXe = LoaiXe::all();
        $binhluan = $this->binhLuanService->binhLuanTheoXe($id);
        return view('hethong.Vtrangchitiet',compact('thongTinXe','thongtinAnh','hangXe','loaiXe','id','binhluan'));
    }
}
