<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrechasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brecha', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('descripcion');
            $table->string('superfamilia');
            $table->string('familia');
            $table->string('UM');
            $table->double('cantidad');
            $table->integer('valor');
            $table->integer('fecha');
            $table->string('tipo');
            $table->string('Sucursal');
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
        Schema::dropIfExists('brecha');
    }
}
