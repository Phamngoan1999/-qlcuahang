<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HangXeRequest;
use App\Models\DongXe;
use App\Services\HangXeService;
use Illuminate\Http\Request;

class HangXeController extends Controller
{
    protected $hangXeService;

    public function __construct(HangXeService $hangXeService)
    {
        $this->hangXeService = $hangXeService;
    }

    public function index()
    {
        $hangXe = $this->hangXeService->all();
        return view('hangxe.table',compact('hangXe'));
    }

    public function create(HangXeRequest $request)
    {
        $this->hangXeService->create($request);
        return $this->index();
    }


    public function show($id)
    {
        $hangXe = $this->hangXeService->find($id);
        return view('hangxe.show',compact('hangXe'));
    }

    public function edit(HangXeRequest $request,$id)
    {
        $this->hangXeService->edit($request,$id);
        return $this->index();
    }

    public function delete($id)
    {
        $dongxe = DongXe::where('iMa_hang_xe',$id)->get();
        if(count($dongxe)>0)
        {
            return "khong-the-xoa";
        }
        $this->hangXeService->delete($id);
        return $this->index();
    }
}
