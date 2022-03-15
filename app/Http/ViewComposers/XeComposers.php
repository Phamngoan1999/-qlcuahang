<?php

namespace App\Http\ViewComposers;

use App\Services\HangXeService;
use App\Services\LoaiXeService;
use Illuminate\View\View;

class XeComposers
{
    public $hangXeService;

    public $loaiXeService;

    public function __construct(HangXeService $hangXeService,LoaiXeService $loaiXeService)
    {
        $this->hangXeService = $hangXeService;
        $this->loaiXeService = $loaiXeService;
    }
    public function compose(View $view)
    {
        $view->with('hangxe', $this->hangXeService->all());
        $view->with('loaixe', $this->loaiXeService->all());
    }
}
