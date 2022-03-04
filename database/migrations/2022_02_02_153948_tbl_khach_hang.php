<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblKhachHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_khach_hang', function (Blueprint $table) {
            $table->id();
            $table->string('ho_ten');
            $table->string('so_dien_thoai');
            $table->string('so_CMND');
            $table->string('nam_sinh');
            $table->string('noi_cu_tru');
            $table->string('cap_ngay');
            $table->string('noi_cap_CMND');
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
        Schema::dropIfExists('tbl_khach_hang');
    }
}
