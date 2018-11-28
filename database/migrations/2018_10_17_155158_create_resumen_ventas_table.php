<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumenVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PL_RESUMEN_VENTAS', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mes');
            $table->integer('rut');
            $table->string('sucursal');
            $table->string('codigoVendedor');
            $table->string('superFamilia');
            $table->string('familia');
            $table->integer('codigo');
            $table->string('unidadPrimaria');
            $table->integer('giro');
            $table->integer('canal');
            $table->integer('zona');
            $table->string('ruta');
            $table->string('rutaAutoventa');
            $table->integer('neto');
            $table->double('cantidad');
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
        Schema::dropIfExists('PL_RESUMEN_VENTAS');
    }
}
