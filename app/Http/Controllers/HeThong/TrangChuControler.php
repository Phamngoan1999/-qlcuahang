<?php

namespace App\Http\Controllers\HeThong;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrangChuControler extends Controller
{
    public function index()
    {
        return view('hethong.Vtrangchu');
    }
}
