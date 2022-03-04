<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblBinhLuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_binh_luan', function (Blueprint $table) {
            $table->id();
            $table->string('thoi_gian_binh_luan');
            $table->string('noi_dung');
            $table->unsignedBigInteger('iMa_khach_hang');
            $table->unsignedBigInteger('iMa_xe');

            // thay khách hàng bắng user
            $table->foreign('iMa_khach_hang')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('iMa_xe')->references('id')->on('tbl_xe')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_binh_luan');
    }
}
