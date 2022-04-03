<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDichvu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_dich_vu', function (Blueprint $table) {
            $table->id();
            $table->string('ten_dich_vu');
            $table->string('gia_dich_vu');
            $table->unsignedBigInteger('sCua_hang');
            $table->foreign('sCua_hang')->references('id')->on('tbl_cua_hang_lien_ket')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_dich_vu');
    }
}
