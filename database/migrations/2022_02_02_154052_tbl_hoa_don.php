<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblHoaDon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_hoa_don', function (Blueprint $table) {
            $table->id();
            $table->string('tong_tien');
            $table->string('ngay_lap');
            $table->unsignedBigInteger('iMa_xe');
            $table->unsignedBigInteger('iMa_cua_hang');
            $table->foreign('iMa_xe')->references('id')->on('tbl_xe')->onDelete('cascade');
            $table->foreign('iMa_cua_hang')->references('id')->on('tbl_cua_hang_lien_ket')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_hoa_don');
    }
}
