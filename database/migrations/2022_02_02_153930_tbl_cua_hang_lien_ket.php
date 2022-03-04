<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCuaHangLienKet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cua_hang_lien_ket', function (Blueprint $table) {
            $table->id();
            $table->string('ten_cua_hang');
            $table->string('so_dien_thoai');
            $table->string('dia_chi_cua_hang');
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
        Schema::dropIfExists('tbl_cua_hang_lien_ket');
    }
}
