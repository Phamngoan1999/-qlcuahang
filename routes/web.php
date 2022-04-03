<?php

use App\Http\Controllers\Admin\BaoCaoThongKeController;
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
use App\Http\Controllers\Controller;
use App\Http\Controllers\CuaHang\DichVuController;
use App\Http\Controllers\HeThong\TrangChiTietControler;
use App\Http\Controllers\HeThong\TrangChuControler;
use App\Http\Controllers\HeThong\TrangHangXeController;
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

Route::get('/search', [TrangChuControler::class, 'search'])->name('trangchu.timkiem');

Route::get('/Trangchitiet/{id}', [TrangChiTietControler::class, 'index'])->name('trangchitiet');

Route::get('/Tranghangxe/{id}', [TrangHangXeController::class, 'index'])->name('tranghangxe');

Route::get('/Thongtincuahang', [TrangChiTietControler::class, 'index'])->name('thongtincuahang');


Route::get('/404', [Controller::class, 'load404'])->name('load404');

Route::middleware(['auth'])->group(function() {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::name('danhmuc.')->prefix('quanlydanhmuc')->group(function () {

        Route::get('/', [DanhMucController::class, 'index'])
            ->name('quanly')->middleware('role:admin');;

        Route::post('/create-hang-xe', [HangXeController::class, 'create'])
            ->name('create-hang-xe')->middleware('role:admin');;

        Route::delete('/delete-hang-xe/{id}', [HangXeController::class, 'delete'])
            ->name('delete-hang-xe')->middleware('role:admin');;

        Route::get('/show-hang-xe/{id}', [HangXeController::class, 'show'])
            ->name('show-hang-xe')->middleware('role:admin');;

        Route::patch('/edit-hang-xe/{id}', [HangXeController::class, 'edit'])
            ->name('edit-hang-xe')->middleware('role:admin');;

        Route::post('/loai-xe', [LoaiXeController::class, 'store'])
            ->name('create-loai-xe')->middleware('role:admin');;

        Route::delete('/delete-loai-xe/{id}', [LoaiXeController::class, 'delete'])
            ->name('delete-loai-xe')->middleware('role:admin');;

        Route::get('/show-loai-xe/{id}', [LoaiXeController::class, 'show'])
            ->name('show-loai-xe')->middleware('role:admin');;

        Route::patch('/edit-loai-xe/{id}', [LoaiXeController::class, 'edit'])
            ->name('edit-loai-xe')->middleware('role:admin');;

        Route::post('/create-dong-xe', [DongXeController::class, 'create'])
            ->name('create-dong-xe')->middleware('role:admin');;

        Route::delete('/delete-dong-xe/{id}', [DongXeController::class, 'delete'])
            ->name('delete-dong-xe')->middleware('role:admin');;

        Route::get('/show-dong-xe/{id}', [DongXeController::class, 'show'])
            ->name('show-dong-xe')->middleware('role:admin');;

        Route::patch('/update-dong-xe/{id}', [DongXeController::class, 'update'])
            ->name('update-dong-xe')->middleware('role:admin');;
    });

    Route::name('quanlykhachhang.')->prefix('quanlykhachhang')->group(function () {

        Route::get('/', [QuanLyKhachHang::class, 'index'])
            ->name('khachang')->middleware('role:admin');

        Route::get('/search', [QuanLyKhachHang::class, 'search'])
            ->name('search')->middleware('role:admin');

        Route::get('/themkhachang', [QuanLyKhachHang::class, 'create'])
            ->name('themkhachang')->middleware('role:admin');

        Route::post('/luukhachang', [KhachHangController::class, 'store'])
            ->name('luukhachang')->middleware('role:admin');

        Route::get('/showkhachang/{id}', [KhachHangController::class, 'show'])
            ->name('showkhachang')->middleware('role:admin');

        Route::patch('/updatekhachang/{id}', [KhachHangController::class, 'update'])
            ->name('updatekhachang')->middleware('role:admin');

        Route::get('/themxeban/{id}', [XeController::class, 'create'])
            ->name('themxeban')->middleware('role:admin');

        Route::post('/themxeban/{id}', [XeController::class, 'store'])
            ->name('themxeban')->middleware('role:admin');

        Route::delete('/xoakhachhang/{id}', [KhachHangController::class, 'delete'])
            ->name('xoakhachhang')->middleware('role:admin');

        Route::post('/luuGiaDichBan/{id}', [KhachHangController::class, 'luuGiaDichBan'])
            ->name('luuGiaDichBan')->middleware('role:admin');

        Route::post('/luuGiaDichBan_dacothongtinkhachhang/{id}', [KhachHangController::class, 'luuGiaDichBanKhachHang'])
            ->name('luuGiaDichBan_dacothongtinkhachhang')->middleware('role:admin');

        Route::post('/timkiem', [KhachHangController::class, 'search'])
            ->name('timkiem')->middleware('role:admin');

        Route::get('/search_lich_su_khach_hang', [KhachHangController::class, 'search_lich_su_khach_hang'])
            ->name('search_lich_su_khach_hang')->middleware('role:admin');

        Route::get('/search_lich_su_thong_tin_khach_hang', [KhachHangController::class, 'search_lich_su'])
            ->name('search_lich_su_thong_tin_khach_hang')->middleware('role:admin');
    });


    Route::name('quanlyxe.')->prefix('quanlyxe')->group(function () {

        Route::get('/', [QuanLyXe::class, 'index'])
            ->name('quanly')->middleware('role:admin');

        Route::get('/search', [QuanLyXe::class, 'search'])
            ->name('search')->middleware('role:admin');

        Route::get('/editthongtinxe/{id}', [XeController::class, 'show'])
            ->name('editthongtinxe')->middleware('role:admin');

        Route::get('/inthongtin/{id}', [XeController::class, 'ingiayto'])
            ->name('inthongtin')->middleware('role:admin');

        Route::get('/dangthongtinxe/{id}', [XeController::class, 'dangthongtinxe'])
            ->name('dangthongtinxe')->middleware('role:admin');;

        Route::patch('/dangthongtinxeweb/{id}', [XeController::class, 'dangthongtinxeweb'])
            ->name('dangthongtinxeweb')->middleware('role:admin');

        Route::patch('/updatetthongtinxeweb/{id}', [XeController::class, 'updatetthongtinxeweb'])
            ->name('updatetthongtinxeweb')->middleware('role:admin');

        Route::patch('/deletetthongtinxeweb/{id}', [XeController::class, 'deletetthongtinxeweb'])
            ->name('deletetthongtinxeweb')->middleware('role:admin');

        Route::patch('/updatethongtinxe/{id}', [XeController::class, 'update'])
            ->name('updatethongtinxe')->middleware('role:admin');

        Route::get('/khachhangmuaxe/{id}', [KhachHangController::class, 'muaxXe'])
            ->name('khachhangmuaxe')->middleware('role:admin');

        Route::delete('/xoathongtinxe/{id}', [XeController::class, 'xoathongtinxe'])
            ->name('xoathongtinxe')->middleware('role:admin');

        Route::delete('/xoaanh/{id}', [XeController::class, 'xoaanh'])
            ->name('xoaanh')->middleware('role:admin');

        Route::delete('/xoaanhweb/{id}', [XeController::class, 'xoaanhweb'])
            ->name('xoaanhweb')->middleware('role:admin');

        Route::get('/inthongtinbanxe/{id}', [XeController::class, 'inthongtinbanxe'])
            ->name('inthongtinbanxe')->middleware('role:admin');
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
            ->name('delete-phu-tung')
            ->middleware('role:admin');

        Route::post('/luuhoadon', [HoaDonController::class, 'store'])
            ->name('luuhoadon')->middleware('role:admin');

        Route::post('/updatehoadon/{id}', [HoaDonController::class, 'update'])
            ->name('updatehoadon')
            ->middleware('role:admin');

        Route::get('/showhoadon/{id}', [HoaDonController::class, 'show'])
            ->name('showhoadon');

        Route::get('/quanlycuahang', [\App\Http\Controllers\CuaHang\QuanlySuaChua::class, 'index'])
            ->name('quanlycuahang')
            ->middleware('role:cuahanglienket');

        Route::post('/updatenhandon/{id}', [\App\Http\Controllers\CuaHang\QuanlySuaChua::class, 'nhandon'])
            ->name('updatenhandon')
            ->middleware('role:cuahanglienket');

        Route::post('/huyhoadon/{id}', [\App\Http\Controllers\CuaHang\QuanlySuaChua::class, 'huyhoadon'])
            ->name('huyhoadon')
            ->middleware('role:cuahanglienket');

        Route::post('/lenhoadon/{id}', [\App\Http\Controllers\CuaHang\QuanlySuaChua::class, 'lenhoadon'])
            ->name('lenhoadon')
            ->middleware('role:cuahanglienket');

        Route::get('/inhoadon/{id}', [\App\Http\Controllers\CuaHang\QuanlySuaChua::class, 'inhoadon'])
            ->name('inhoadon');

        Route::get('/quanlydichvu', [\App\Http\Controllers\CuaHang\QuanlySuaChua::class, 'danhsachdichvu'])
            ->name('quanlydichvu')
            ->middleware('role:cuahanglienket');

        Route::post('/quanlydichvu', [\App\Http\Controllers\CuaHang\QuanlySuaChua::class, 'create'])
            ->name('them-dich-vu')
            ->middleware('role:cuahanglienket');

        Route::get('/showdichvu/{id}', [DichVuController::class, 'show'])
            ->name('show-dich-vu')
            ->middleware('role:cuahanglienket');

        Route::patch('/update-dich-vu/{id}', [DichVuController::class, 'update'])
            ->name('update-dich-vu')
            ->middleware('role:cuahanglienket');

        Route::delete('/delete-dich-vu/{id}', [DichVuController::class, 'delete'])
            ->name('delete-dich-vu')
            ->middleware('role:cuahanglienket');

        Route::get('/list-dich-vu', [DichVuController::class, 'getListDichVu'])
            ->name('list-dich-vu')
            ->middleware('role:admin');

        Route::get('/list-dich-vu-select', [DichVuController::class, 'getListDichVuSelect'])
            ->name('list-dich-vu-select')
            ->middleware('role:admin');

        Route::get('/them-dich-vu-select', [DichVuController::class, 'createDichVu'])
            ->name('them-dich-vu-select')
            ->middleware('role:admin');

        Route::post('/them-dich-vu-select', [DichVuController::class, 'deleteListSelect'])
            ->name('change-cua-hang')
            ->middleware('role:admin');

        Route::get('/list-dich-vu-update/{id}', [DichVuController::class, 'getListDichVuUpdate'])
            ->name('list-dich-vu-update')
            ->middleware('role:admin');

        Route::get('/list-dich-vu-select-update', [DichVuController::class, 'getListDichVuSelectUpdate'])
            ->name('list-dich-vu-select-update')
            ->middleware('role:admin');
    });

    Route::name('quanlytaikhoan.')->prefix('quanlytaikhoan')->group(function () {

        Route::get('/', [QuanlyTaiKhoan::class, 'index'])
            ->name('quanly')->middleware('role:admin');

        Route::post('/create', [CuaHangController::class, 'create'])
            ->name('create')->middleware('role:admin');

        Route::get('/show/{id}', [CuaHangController::class, 'show'])
            ->name('show')->middleware('role:admin');

        Route::patch('/update/{id}', [CuaHangController::class, 'update'])
            ->name('update')->middleware('role:admin');

        Route::delete('/delete/{id}', [CuaHangController::class, 'delete'])
            ->name('delete')->middleware('role:admin');

        Route::get('/thongtintaikhoan', [QuanlyTaiKhoan::class, 'show'])
            ->name('thongtintaikhoan');

        Route::patch('/thongtintaikhoan', [QuanlyTaiKhoan::class, 'update'])
            ->name('update-thong-tin')->middleware('permission:thong-tin-tai-khoan');
    });

    Route::name('quanlybinhluan.')->prefix('quanlybinhluan')->group(function () {

        Route::get('/', [QuanlyBinhLuan::class, 'index'])
            ->name('quanly')->middleware('role:admin');

        Route::get('/search', [BinhLuanController::class, 'search'])
            ->name('search')->middleware('role:admin');

        Route::get('/show/{id}', [BinhLuanController::class, 'show'])
            ->name('show')->middleware('role:admin');;

        Route::delete('/delete/{id}', [BinhLuanController::class, 'delete'])
            ->name('delete')->middleware('role:admin');;

        Route::patch('/update/{id}', [BinhLuanController::class, 'update'])
            ->name('update')->middleware('role:admin');;

        Route::post('/', [BinhLuanController::class, 'create'])
            ->name('create');

        Route::post('/luuphanhoi', [BinhLuanController::class, 'luuPhanHoi'])
            ->name('luuphanhoi');
    });

    Route::name('baocaothongke.')->prefix('baocaothongke')->group(function () {

        Route::get('/', [BaoCaoThongKeController::class, 'index'])
            ->name('quanly');

        Route::get('/search', [BaoCaoThongKeController::class, 'search'])
            ->name('search');

        Route::get('/baocaoxemua', [BaoCaoThongKeController::class, 'baocaoxemua'])
            ->name('baocaoxemua');

        Route::get('/baocaoxeban', [BaoCaoThongKeController::class, 'baocaoxeban'])
            ->name('baocaoxeban');

        Route::get('/timkiem', [BaoCaoThongKeController::class, 'timkiem'])
            ->name('timkiem');

        Route::get('/timkiem_xemua', [BaoCaoThongKeController::class, 'timkiem_xemua'])
            ->name('timkiem_xemua');

        Route::get('/timkiem_theobaocao', [BaoCaoThongKeController::class, 'timkiem_theobaocao'])
            ->name('timkiem_theobaocao');
    });
});
