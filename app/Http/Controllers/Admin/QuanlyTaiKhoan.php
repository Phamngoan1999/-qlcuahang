<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateTaikhoan;
use App\Services\CuaHangService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuanlyTaiKhoan extends Controller
{
    protected $userService;

    protected $cuaHangService;

    public function __construct(UserService $userService,CuaHangService $cuaHangService)
    {
        $this->userService = $userService;
        $this->cuaHangService = $cuaHangService;
    }

    public function index()
    {
        $listCuaHang = $this->cuaHangService->getAllCuaHang();
        $listUser = $this->userService->getUserRoleCustomer();
        return view('admin.quanlytaikhoan', compact('listUser','listCuaHang'));
    }

    public function show()
    {
        return view("user.thongtintaikhoan");
    }

    public function update(UpdateTaikhoan $request)
    {
        return $this->userService->update($request);
    }
}
