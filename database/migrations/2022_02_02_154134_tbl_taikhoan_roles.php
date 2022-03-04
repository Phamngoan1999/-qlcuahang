<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblTaikhoanRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_taikhoan_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('iMa_tai_khoan');
            $table->unsignedBigInteger('iMa_role');

            $table->foreign('iMa_tai_khoan')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('iMa_role')->references('id')->on('tbl_roles')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_taikhoan_roles');
    }
}
