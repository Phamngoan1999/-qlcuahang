<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblRoleQuyen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_role_quyen', function (Blueprint $table) {
            $table->unsignedBigInteger('iMa_role');
            $table->unsignedBigInteger('iMa_quyen');

            $table->foreign('iMa_role')->references('id')->on('tbl_roles')->onDelete('cascade');
            $table->foreign('iMa_quyen')->references('id')->on('tbl_quyen')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_role_quyen');
    }
}
