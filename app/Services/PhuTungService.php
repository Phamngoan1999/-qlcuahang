<?php

namespace App\Services;

use App\Repositories\PhuTungRepository;

class PhuTungService
{
    private $phuTungRepository;

    public function __construct(PhuTungRepository $phuTungRepository)
    {
        $this->phuTungRepository = $phuTungRepository;
    }

    public function find($id)
    {
        return $this->phuTungRepository->find($id);
    }

    public function findTheoHoaDon($idHoadon)
    {
        return $this->phuTungRepository->findTheoHoaDon($idHoadon);
    }

    public function delete($id)
    {
        return $this->phuTungRepository->delete($id);
    }
}
