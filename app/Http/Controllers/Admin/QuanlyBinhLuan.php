<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Xe;
use App\Services\BinhLuanService;
use App\Services\XeService;
use Illuminate\Http\Request;

class QuanlyBinhLuan extends Controller
{

    protected $binhLuanService;

    protected $xeService;

    public function __construct(BinhLuanService $binhLuanService,XeService $xeService)
    {
        $this->binhLuanService = $binhLuanService;
        $this->xeService = $xeService;
    }

    public function index()
    {
        $listXe = Xe::getThongTinToDongXeDangDangTrenWeb();
        $listBinhLuan = $this->binhLuanService->getAll();
        return view("admin.quanlybinhluan",compact('listBinhLuan','listXe'));
    }

}
