<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->hasRole('nguoidung'))
        {
            return redirect()->route('Trangchu');
        }

        if(auth()->user()->hasRole('admin'))
        {
            return redirect()->route('quanlytaikhoan.quanly');
        }

        if(auth()->user()->hasRole('cuahanglienket'))
        {
            return redirect()->route('quanlysuachua.quanlycuahang');
        }
        return view('home');
    }
}
