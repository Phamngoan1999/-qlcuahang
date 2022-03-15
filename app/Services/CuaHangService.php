<?php

namespace App\Services;

use App\Repositories\CuaHangRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class CuaHangService
{

    private $cuaHangRepository;

    protected $userService;

    public function __construct(CuaHangRepository $cuaHangRepository, UserRepository $userRepository)
    {
        $this->cuaHangRepository = $cuaHangRepository;
        $this->userRepository = $userRepository;
    }

    public function all()
    {
        return $this->cuaHangRepository->all();
    }

    public function getAllCuaHang()
    {
        return $this->cuaHangRepository->all();
    }

    public function create($request)
    {
        $dataCreateCuaHang = array(
            'ten_cua_hang' => $request->name,
            'so_dien_thoai' => $request->email,
            'dia_chi_cua_hang' => $request->diachi
        );
        $dataCreateTaiKhoan = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->matkhau)
        );
        $user = $this->userRepository->create($dataCreateTaiKhoan);
        $dataCreateTaiKhoan['role_ids'] = array(3);
        $user->attachRole($dataCreateTaiKhoan['role_ids']);
        return $this->cuaHangRepository->create($dataCreateCuaHang);
    }

    public function show($id)
    {
        return $this->cuaHangRepository->find($id);
    }

    public function update($request, $id)
    {
        $dataUpdateCuaHang = array(
            'ten_cua_hang' => $request->name,
//            'so_dien_thoai' => $request->email,
            'dia_chi_cua_hang' => $request->diachi
        );
        if (!empty($request->matkhau)) {
            $dataUpdateTaiKhoan = array(
                'name' => $request->name,
//                'email' => $request->email,
                'password' => Hash::make($request->matkhau)
            );
        } else {
            $dataUpdateTaiKhoan = array(
                'name' => $request->name,
//                'email' => $request->email
            );
        }
        $this->userRepository->update($dataUpdateTaiKhoan, $id);
        return $this->cuaHangRepository->update($dataUpdateCuaHang, $id);
    }

    public function delete($id)
    {
        return $this->cuaHangRepository->delete($id);
    }
}
