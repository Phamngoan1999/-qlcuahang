<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CuaHangService;
use App\Services\UserService;
use Illuminate\Support\Carbon;

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
}
