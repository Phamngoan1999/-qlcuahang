<?php

namespace App\Services;

use App\Repositories\AnhRepository;

class AnhService
{

    protected $anhRepository;

    public function __construct(AnhRepository $anhRepository)
    {
        $this->anhRepository = $anhRepository;
    }

    public function delete($id)
    {
        return $this->anhRepository->delete($id);
    }

    public function find($id)
    {
        return $this->anhRepository->find($id);
    }
}
