<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class QuanLySuaChua extends Controller
{

    public function index()
    {
        return view('admin.quanlysuachua');
    }
}
