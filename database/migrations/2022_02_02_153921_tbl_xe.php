<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblXe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_xe', function (Blueprint $table) {
            $table->id();
            $table->string('so_loai');
            $table->string('mau_son');
            $table->string('dung_tich');
            $table->string('bien_so');
            $table->string('dang_ky_tai');
            $table->string('so_may');
            $table->string('so_khung');
            $table->string('bao_hiem_xe')->nullable();
            $table->string('ngay_mua');
            $table->string('ngay_ban')->nullable();
            $table->string('gia_mua');
            $table->string('gia_ban')->nullable();
            $table->string('gia_dang_web')->nullable();

            $table->unsignedBigInteger('iMa_trang_thai');
            $table->unsignedBigInteger('iMa_khach_hang_mua_xe')->nullable();
            $table->unsignedBigInteger('iMa_khach_hang_ban_xe');
            $table->unsignedBigInteger('iMa_dong_xe');
            $table->foreign('iMa_khach_hang_mua_xe')->references('id')->on('tbl_khach_hang')->onDelete('cascade');
            $table->foreign('iMa_khach_hang_ban_xe')->references('id')->on('tbl_khach_hang')->onDelete('cascade');
            $table->foreign('iMa_dong_xe')->references('id')->on('tbl_dong_xe')->onDelete('cascade');
            $table->foreign('iMa_trang_thai')->references('id')->on('tbl_trang_thai')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_xe');
    }
}
