<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PL_OPTIONS', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('padre')->unsigned()->nullable();
            $table->string('nombre');
            $table->string('ruta')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('icono_l')->default('fa-circle-o');
            $table->string('icono_r')->nullable()->default('fa-angle-left');
            $table->smallInteger('orden')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('padre')->references('id')->on('PL_OPTIONS');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PL_OPTIONS');
    }
}
