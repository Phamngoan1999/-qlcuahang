<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoaiXeReRequest;
use App\Models\DongXe;
use App\Services\LoaiXeService;
use Illuminate\Http\Request;

class LoaiXeController extends Controller
{
    protected $loaiXeService;

    public function __construct(LoaiXeService $loaiXeService)
    {
        $this->loaiXeService = $loaiXeService;
    }

    public function index()
    {
        $loaiXe = $this->loaiXeService->all();
        return view('loaixe.table',compact('loaiXe'));
    }

    public function store(LoaiXeReRequest $request)
    {
        $this->loaiXeService->create($request);
        return $this->index();
    }

    public function show($id)
    {
        $loaiXe = $this->loaiXeService->find($id);
        return view('loaixe.show',compact('loaiXe'));
    }

    public function edit(Request $request,$id)
    {
        $this->loaiXeService->update($request, $id);
        return $this->index();
    }

    public function delete($id)
    {
        $dongxe = DongXe::where('iMa_loai_xe',$id)->get();
        if(count($dongxe)>0)
        {
            return "khong-the-xoa";
        }
        $this->loaiXeService->delete($id);
        return $this->index();
    }
}
