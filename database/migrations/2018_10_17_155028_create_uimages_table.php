<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PL_UIMAGES', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index('fk_uimages_users1_idx');
            $table->binary('data', 16777215);
            $table->string('name');
            $table->string('type');
            $table->integer('size');
            $table->char('extension', 4);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('PL_UIMAGES');
    }
}
