<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\LoaiXeRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function all()
    {
        return $this->userRepository->all();
    }

    public function update($request)
    {
        $dataUpdate = array(
            'name' => $request->ho_ten,
            'password' => Hash::make($request->mat_khau)
        );
        return $this->userRepository->update($dataUpdate,Auth::user()->id);
    }

    public function getUserRoleCustomer()
    {
        return User::getUserRoleCustomer();
    }
}
