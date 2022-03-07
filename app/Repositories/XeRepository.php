<?php

namespace App\Repositories;
use App\Models\Xe;
use App\Repositories\BaseRepository;

class XeRepository extends BaseRepository
{
    public function model()
    {
        return Xe::class;
    }

    public function all()
    {
        return $this->model->paginate(5);
    }

    public function allXeChuaBan()
    {
        return $this->model->allXeChuaBan();
    }

    public function selectXeTheoCuahang()
    {
        return $this->model->selectXeTheoCuahang();
    }
}
