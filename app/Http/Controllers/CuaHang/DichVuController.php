<?php

namespace App\Http\Controllers\CuaHang;

use App\Http\Controllers\Controller;
use App\Http\Requests\DichVuCreateRequest;
use App\Services\DichVuService;
use App\Services\PhuTungService;
use Illuminate\Http\Request;

class DichVuController extends Controller
{

    protected $dichVuService;

    protected $phuTungService;

    public function __construct(DichVuService $dichVuService,PhuTungService $phuTungService)
    {
        $this->dichVuService = $dichVuService;
        $this->phuTungService = $phuTungService;
    }

    public function create(DichVuCreateRequest $request)
    {
        $this->dichVuService->create($request);
        return redirect()->route('quanlysuachua.quanlydichvu')->with('message', 'Lưu thông tin thành công');
    }

    public function searchDichVu(Request $request)
    {
        $listService = $this->dichVuService->search($request);
        return view('cuahang.list_dich_vu_theo_cua_hang',compact('listService'));
    }

    public function show($id)
    {
        $dichvu = $this->dichVuService->show($id);
        return view('dichvu.show', compact('dichvu'));
    }

    public function update(DichVuCreateRequest $request,$id)
    {
        $this->dichVuService->update($request,$id);
        return redirect()->route('quanlysuachua.quanlydichvu')->with('message', 'Update thông tin thành công');
    }

    public function getListDichVu(Request $request)
    {
        $list = $this->dichVuService->getListDichVu($request);
        $listSelectNotFinal = $this->phuTungService->listPhuTungNotFinal();
        return view('dichvu.list_dich_vu',compact('list','listSelectNotFinal','request'));
    }

    public function createDichVu(Request $request)
    {
        if($request['trangthai'] == "add")
        {
            return $this->phuTungService->create($request['idCheck']);
        }else{
            return $this->phuTungService->delete($request['idCheck'],$request['hoa_don']);
        }
    }

    public function delete($id)
    {
        if(count($this->dichVuService->finddichVuChitietHoaDon($id)) > 0)
        {
            return redirect()->route('quanlysuachua.quanlydichvu')->with('message-error', 'Không thể xóa thông tin');
        }
        $this->dichVuService->delete($id);
        return redirect()->route('quanlysuachua.quanlydichvu')->with('message', 'Xóa thông tin thành công');
    }

    public function getListDichVuSelect(Request $request)
    {
        $dich_vu = $this->phuTungService->listPhuTungNotFinalAndCuaHang($request->idCuaHangSelect);
        return view('dichvu.list_phu_tung',compact('dich_vu'));
    }

    public function deleteListSelect()
    {
        return $this->phuTungService->deleteSelect();
    }

    public function getListDichVuUpdate(Request $request,$id)
    {
        $list = $this->dichVuService->getListDichVu($request);
        $listSelectNotFinal = $this->phuTungService->listPhuTungNotFinalUpdate($id);
        return view('dichvu.list_dich_vu',compact('list','listSelectNotFinal','request'));
    }

    public function getListDichVuSelectUpdate(Request $request)
    {
        $dich_vu = $this->phuTungService->listPhuTungNotFinalAndCuaHangUpdate($request->idCuaHangSelect,$request->idHoaDonSelect);
        return view('dichvu.list_phu_tung',compact('dich_vu'));
    }
}
