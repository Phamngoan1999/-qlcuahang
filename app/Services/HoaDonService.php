<?php

namespace App\Services;

use App\Repositories\HoaDonRepository;
use App\Repositories\PhuTungRepository;

class HoaDonService
{

    protected $hoaDonRepository;

    protected $phuTungRepository;

    public function __construct(HoaDonRepository $hoaDonRepository,PhuTungRepository $phuTungRepository)
    {
        $this->hoaDonRepository = $hoaDonRepository;
        $this->phuTungRepository = $phuTungRepository;
    }

    public function create($request)
    {
        $dataCreate = array(
            'iMa_cua_hang' => $request->iMa_cua_hang,
            'iMa_xe'=> $request->iMa_xe
        );
        $hoadon = $this->hoaDonRepository->create($dataCreate);
        foreach ($request->phutung as $iterm)
        {
            if(!empty($iterm))
            {
                $dataPhuTung = array(
                    'ten_phu_tung' => $iterm,
                    'iMa_hoa_don' => $hoadon->id
                );
                $this->phuTungRepository->create($dataPhuTung);
            }
        }
        return $hoadon;
    }
}
