<?php

namespace App\Http\Controllers\HeThong;

use App\Http\Controllers\Controller;
use App\Services\XeService;
use Illuminate\Http\Request;

class TrangHangXeController extends Controller
{
    protected $xeService;

    public function __construct(XeService $xeService)
    {
        $this->xeService = $xeService;
    }

    public function index($id)
    {
        $danhsachXeNew = $this->xeService->searchHangXe($id);
        return view('hethong/Vtranghangxe',compact('danhsachXeNew','id'));
    }
}
