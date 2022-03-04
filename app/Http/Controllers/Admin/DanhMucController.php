<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\DongXeService;
use App\Services\HangXeService;
use App\Services\LoaiXeService;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    protected $hangXeService;

    protected $loaiXeService;

    protected $dongXeService;

    public function __construct(HangXeService $hangXeService,LoaiXeService $loaiXeService,DongXeService $dongXeService)
    {
        $this->hangXeService = $hangXeService;
        $this->loaiXeService = $loaiXeService;
        $this->dongXeService = $dongXeService;
    }

    public function index()
    {
        $hangXe = $this->hangXeService->all();
        $loaiXe = $this->loaiXeService->all();
        $dongXe = $this->dongXeService->all();
        return view('admin.quanlydanhmuc',compact('hangXe','loaiXe','dongXe'));
    }
}
