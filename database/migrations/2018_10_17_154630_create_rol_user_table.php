<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PL_ROL_USER', function (Blueprint $table) {
            $table->integer('rol_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('rol_id')->references('id')->on('PL_ROLS');
            $table->foreign('user_id')->references('id')->on('PL_USERS');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('PL_ROL_USER');
    }
}
