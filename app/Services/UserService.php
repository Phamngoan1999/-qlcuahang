<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\LoaiXeRepository;
use App\Repositories\UserRepository;

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

    public function getUserRoleCustomer()
    {
        return User::getUserRoleCustomer();
    }
}
