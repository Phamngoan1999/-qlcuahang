<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblChiTietHoaDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_chi_tiet_hoa_don', function (Blueprint $table) {
            $table->id();
            $table->string('ten_phu_tung');
            $table->string('don_gia');
            $table->unsignedBigInteger('iMa_hoa_don');
            $table->unsignedBigInteger('sMa_dich_vu');
            $table->foreign('iMa_hoa_don')->references('id')->on('tbl_hoa_don')->onDelete('cascade');
            $table->foreign('sMa_dich_vu')->references('id')->on(' tbl_dich_vu');
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
        Schema::dropIfExists('tbl_chi_tiet_hoa_don');
    }
}
