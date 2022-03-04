<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblAnh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_anh', function (Blueprint $table) {
            $table->id();
            $table->string('duong_dan');
            $table->unsignedBigInteger('iMa_xe');
            $table->unsignedBigInteger('iMa_loai_anh');
            $table->foreign('iMa_xe')->references('id')->on('tbl_xe')->onDelete('cascade');
            $table->foreign('iMa_loai_anh')->references('id')->on('tbl_loai_anh')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_anh');
    }
}
