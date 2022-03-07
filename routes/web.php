<?php

use App\Http\Controllers\Admin\BinhLuanController;
use App\Http\Controllers\Admin\CuaHangController;
use App\Http\Controllers\Admin\DanhMucController;
use App\Http\Controllers\Admin\DongXeController;
use App\Http\Controllers\Admin\HangXeController;
use App\Http\Controllers\Admin\HoaDonController;
use App\Http\Controllers\Admin\KhachHangController;
use App\Http\Controllers\Admin\LoaiXeController;
use App\Http\Controllers\Admin\PhuTungController;
use App\Http\Controllers\Admin\QuanlyBinhLuan;
use App\Http\Controllers\Admin\QuanLyKhachHang;
use App\Http\Controllers\Admin\QuanLySuaChua;
use App\Http\Controllers\Admin\QuanlyTaiKhoan;
use App\Http\Controllers\Admin\QuanLyXe;
use App\Http\Controllers\Admin\XeController;
use App\Http\Controllers\HeThong\TrangChiTietControler;
use App\Http\Controllers\HeThong\TrangChuControler;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();


Route::get('/Trangchu', [TrangChuControler::class, 'index'])->name('Trangchu');

Route::get('/Trangchitiet/{id}', [TrangChiTietControler::class, 'index'])->name('trangchitiet');

Route::middleware(['auth'])->group(function() {


    Route::get('/', [HomeController::class, 'index'])->name('home');


    Route::name('danhmuc.')->prefix('quanlydanhmuc')->group(function () {

        Route::get('/', [DanhMucController::class, 'index'])
            ->name('quanly');

        Route::post('/create-hang-xe', [HangXeController::class, 'create'])
            ->name('create-hang-xe');

        Route::delete('/delete-hang-xe/{id}', [HangXeController::class, 'delete'])
            ->name('delete-hang-xe');

        Route::get('/show-hang-xe/{id}', [HangXeController::class, 'show'])
            ->name('show-hang-xe');

        Route::patch('/edit-hang-xe/{id}', [HangXeController::class, 'edit'])
            ->name('edit-hang-xe');

        Route::post('/loai-xe', [LoaiXeController::class, 'store'])
            ->name('create-loai-xe');

        Route::delete('/delete-loai-xe/{id}', [LoaiXeController::class, 'delete'])
            ->name('delete-loai-xe');

        Route::get('/show-loai-xe/{id}', [LoaiXeController::class, 'show'])
            ->name('show-loai-xe');

        Route::patch('/edit-loai-xe/{id}', [LoaiXeController::class, 'edit'])
            ->name('edit-loai-xe');

        Route::post('/create-dong-xe', [DongXeController::class, 'create'])
            ->name('create-dong-xe');

        Route::delete('/delete-dong-xe/{id}', [DongXeController::class, 'delete'])
            ->name('delete-dong-xe');

        Route::get('/show-dong-xe/{id}', [DongXeController::class, 'show'])
            ->name('show-dong-xe');

        Route::patch('/update-dong-xe/{id}', [DongXeController::class, 'update'])
            ->name('update-dong-xe');
    });

    Route::name('quanlykhachhang.')->prefix('quanlykhachhang')->group(function () {

        Route::get('/', [QuanLyKhachHang::class, 'index'])
            ->name('khachang');

        Route::get('/themkhachang', [QuanLyKhachHang::class, 'create'])
            ->name('themkhachang');

        Route::post('/luukhachang', [KhachHangController::class, 'store'])
            ->name('luukhachang');

        Route::get('/showkhachang/{id}', [KhachHangController::class, 'show'])
            ->name('showkhachang');

        Route::patch('/updatekhachang/{id}', [KhachHangController::class, 'update'])
            ->name('updatekhachang');

        Route::get('/themxeban/{id}', [XeController::class, 'create'])
            ->name('themxeban');

        Route::post('/themxeban/{id}', [XeController::class, 'store'])
            ->name('themxeban');
    });


    Route::name('quanlyxe.')->prefix('quanlyxe')->group(function () {

        Route::get('/', [QuanLyXe::class, 'index'])
            ->name('quanly');

        Route::get('/search', [QuanLyXe::class, 'search'])
            ->name('search');

        Route::get('/editthongtinxe/{id}', [XeController::class, 'show'])
            ->name('editthongtinxe');

        Route::get('/dangthongtinxe/{id}', [XeController::class, 'dangthongtinxe'])
            ->name('dangthongtinxe');

        Route::patch('/dangthongtinxeweb/{id}', [XeController::class, 'dangthongtinxeweb'])
            ->name('dangthongtinxeweb');

        Route::patch('/updatethongtinxe/{id}', [XeController::class, 'update'])
            ->name('updatethongtinxe');

        Route::get('/khachhangmuaxe/{id}', [KhachHangController::class, 'muaxXe'])
            ->name('khachhangmuaxe');

        Route::delete('/xoathongtinxe/{id}', [XeController::class, 'xoathongtinxe'])
            ->name('xoathongtinxe');

        Route::delete('/xoaanh/{id}', [XeController::class, 'xoaanh'])
            ->name('xoaanh');
    });


    Route::name('quanlysuachua.')->prefix('quanlysuachua')->group(function () {

        Route::get('/', [QuanLySuaChua::class, 'index'])
            ->name('quanly')
            ->middleware('role:admin');

        Route::get('/themhoadon', [HoaDonController::class, 'create'])
            ->name('themhoadon')
            ->middleware('role:admin');

        Route::delete('/xoahoadon/{id}', [QuanLySuaChua::class, 'xoahoadon'])
            ->name('xoahoadon')
            ->middleware('role:admin');

        Route::delete('/deletephutung/{id}', [PhuTungController::class, 'delete'])
            ->name('delete-phu-tung');

        Route::post('/luuhoadon', [HoaDonController::class, 'store'])
            ->name('luuhoadon')->middleware('role:admin');

        Route::patch('/updatehoadon/{id}', [HoaDonController::class, 'update'])
            ->name('updatehoadon');

        Route::get('/showhoadon/{id}', [HoaDonController::class, 'show'])
            ->name('showhoadon');

        Route::get('/quanlycuahang', [\App\Http\Controllers\CuaHang\QuanlySuaChua::class, 'index'])
            ->name('quanlycuahang')
            ->middleware('role:cuahanglienket');

        Route::post('/updatenhandon/{id}', [\App\Http\Controllers\CuaHang\QuanlySuaChua::class, 'nhandon'])
            ->name('updatenhandon');

        Route::post('/huyhoadon/{id}', [\App\Http\Controllers\CuaHang\QuanlySuaChua::class, 'huyhoadon'])
            ->name('huyhoadon');

        Route::post('/lenhoadon/{id}', [\App\Http\Controllers\CuaHang\QuanlySuaChua::class, 'lenhoadon'])
            ->name('lenhoadon');
    });

    Route::name('quanlytaikhoan.')->prefix('quanlytaikhoan')->group(function () {

        Route::get('/', [QuanlyTaiKhoan::class, 'index'])
            ->name('quanly');

        Route::post('/create', [CuaHangController::class, 'create'])
            ->name('create');

        Route::get('/show/{id}', [CuaHangController::class, 'show'])
            ->name('show');

        Route::patch('/update/{id}', [CuaHangController::class, 'update'])
            ->name('update');

        Route::delete('/delete/{id}', [CuaHangController::class, 'delete'])
            ->name('delete');

        Route::get('/thongtintaikhoan', [QuanlyTaiKhoan::class, 'show'])
            ->name('thongtintaikhoan');

        Route::patch('/thongtintaikhoan', [QuanlyTaiKhoan::class, 'update'])
            ->name('update-thong-tin');
    });

    Route::name('quanlybinhluan.')->prefix('quanlybinhluan')->group(function () {

        Route::get('/', [QuanlyBinhLuan::class, 'index'])
            ->name('quanly');

        Route::get('/show/{id}', [BinhLuanController::class, 'show'])
            ->name('show');

        Route::delete('/delete/{id}', [BinhLuanController::class, 'delete'])
            ->name('delete');

        Route::patch('/update/{id}', [BinhLuanController::class, 'update'])
            ->name('update');

        Route::post('/', [BinhLuanController::class, 'create'])
            ->name('create');
    });
});
