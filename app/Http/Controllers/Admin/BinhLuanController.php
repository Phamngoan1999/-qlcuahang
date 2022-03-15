<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BinhluanUpdateRequest;
use App\Http\Requests\CheckBinhLuan;
use App\Http\Requests\PhanHoiRequest;
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
        $this->binhLuanService->create($request);
        return redirect()->route('trangchitiet',$request->sMaxe)->with('message', 'Bình luận đã được ghi trên website');
    }

    public function show($id)
    {
        $binhluan = $this->binhLuanService->find($id);
        return view('binhluan.show', compact('binhluan'));
    }

    public function update(BinhluanUpdateRequest $request,$id)
    {
        return $this->binhLuanService->update($request,$id);
    }

    public function delete($id)
    {
        $this->binhLuanService->delete($id);
        $listBinhLuan = $this->binhLuanService->getAll();
        return $this->view($listBinhLuan);
    }

    public function view($listBinhLuan)
    {
        return view("binhluan.table",compact('listBinhLuan'));
    }

    public function search(Request $request)
    {
        $listBinhLuan = $this->binhLuanService->search($request);
        return $this->view($listBinhLuan);
    }

    public function luuPhanHoi(PhanHoiRequest $request)
    {
        $this->binhLuanService->luuPhanHoi($request);
        return redirect()->route('Trangchu')->with('message', 'Phản hồi đã được lưu trên website');
    }
}
