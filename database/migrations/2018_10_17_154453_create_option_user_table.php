<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('PL_OPTION_USER', function (Blueprint $table) {
            $table->integer('option_id')->index('fk_option_user_option1_idx')->unsigned();
            $table->integer('user_id')->index('fk_option_user_user1_idx')->unsigned();

            $table->foreign('option_id')->references('id')->on('PL_OPTIONS');
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
         Schema::dropIfExists('PL_OPTION_USER');
    }
}
