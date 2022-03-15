<?php

namespace App\Services;

use App\Repositories\AnhRepository;
use App\Traits\HandleImage;

class AnhService
{
    use HandleImage;
    protected $anhRepository;

    public function __construct(AnhRepository $anhRepository)
    {
        $this->anhRepository = $anhRepository;
    }

    public function delete($id)
    {
        $anh = $this->anhRepository->find($id);
        $this->deleteImage($anh->duong_dan);
        return $this->anhRepository->delete($id);
    }

    public function find($id)
    {
        return $this->anhRepository->find($id);
    }
}
