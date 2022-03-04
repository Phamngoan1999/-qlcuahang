<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckBinhLuan;
use App\Repositories\BinhLuanRepository;
use App\Services\BinhLuanService;
use Illuminate\Http\Request;

class BinhLuanController extends Controller
{

    protected $binhLuanService;

    public function __construct(BinhLuanService $binhLuanService)
    {
        $this->binhLuanService = $binhLuanService;
    }

    public function create(CheckBinhLuan $request)
    {
        return $this->binhLuanService->create($request);
    }

    public function show($id)
    {
        $binhluan = $this->binhLuanService->find($id);
        return view('binhluan.show', compact('binhluan'));
    }

    public function update(Request $request,$id)
    {
        return $this->binhLuanService->update($request,$id);
    }

    public function delete($id)
    {
        return $this->binhLuanService->delete($id);
    }

}
