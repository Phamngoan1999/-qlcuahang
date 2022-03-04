<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\BinhLuanService;
use Illuminate\Http\Request;

class QuanlyBinhLuan extends Controller
{

    protected $binhLuanService;

    public function __construct(BinhLuanService $binhLuanService)
    {
        $this->binhLuanService = $binhLuanService;
    }

    public function index()
    {
        $listBinhLuan = $this->binhLuanService->getAll();
        return view("admin.quanlybinhluan",compact('listBinhLuan'));
    }
}
