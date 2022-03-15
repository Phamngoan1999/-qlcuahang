<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Xe;
use App\Services\XeService;
use Illuminate\Http\Request;

class QuanLyXe extends Controller
{
    protected $xeService;

    public function __construct(XeService $xeService)
    {
        $this->xeService = $xeService;
    }

    public function index(Request $request)
    {
        $listXe = $this->xeService->all();
        return view("admin.quanlyxe",compact('listXe'));
    }

    public function search(Request $request)
    {
        $listXe = $this->xeService->searchQuanLyXe($request);
        return view("xe.table",compact('listXe'));
    }

    public function edit($id)
    {
        $thongtinxe = $this->xeService->find($id);
        return view("xe.edit",compact('id','thongtinxe'));
    }

    public function update()
    {
        return view("xe.update");
    }
}
