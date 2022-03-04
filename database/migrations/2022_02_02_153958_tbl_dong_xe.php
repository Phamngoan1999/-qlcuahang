<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblDongXe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_dong_xe', function (Blueprint $table) {
            $table->id();
            $table->string('ten_dong_xe');
            $table->unsignedBigInteger('iMa_loai_xe');
            $table->unsignedBigInteger('iMa_hang_xe');
            $table->foreign('iMa_loai_xe')->references('id')->on('tbl_loai_xe')->onDelete('cascade');
            $table->foreign('iMa_hang_xe')->references('id')->on('tbl_hang_xe')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_dong_xe');
    }
}
