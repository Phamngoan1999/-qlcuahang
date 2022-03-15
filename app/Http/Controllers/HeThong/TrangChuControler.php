<?php

namespace App\Http\Controllers\HeThong;

use App\Http\Controllers\Controller;
use App\Services\BinhLuanService;
use App\Services\XeService;
use Illuminate\Http\Request;

class TrangChuControler extends Controller
{
    protected $xeService;

    protected $binhLuanService;

    public function __construct(XeService $xeService,BinhLuanService $binhLuanService)
    {
        $this->xeService = $xeService;
        $this->binhLuanService = $binhLuanService;
    }

    public function index(Request $request)
    {
        $danhsachXeNew = $this->xeService->search($request);
        return view('hethong.Vtrangchu', compact('danhsachXeNew','request'));
    }

}
