<?php

use Illuminate\Database\Seeder;

class ResumenVentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('PL_RESUMEN_VENTAS')->insert([
    		'mes'=>201701,
    		'rut'=>13732182,
    		'sucursal'=>'',
    		'codigoVendedor'=>'V29',
    		'superFamilia'=>'ALIFRUT',
    		'familia'=>'FOOD SERVICES (FRUTAS)',
    		'codigo'=>1168005,
    		'unidadPrimaria'=>'UN',
    		'giro'=>25,
    		'canal'=>3,
    		'zona'=>14,
    		'ruta'=>'V29',
    		'rutaAutoventa'=>'',
    		'neto'=>146400,
    		'cantidad'=>30,
    	]);

    	\DB::table('PL_RESUMEN_VENTAS')->insert([
    		'mes'=>201701,
    		'rut'=>13732182,
    		'sucursal'=>'',
    		'codigoVendedor'=>'V29',
    		'superFamilia'=>'ALIFRUT',
    		'familia'=>'FOOD SERVICES (FRUTAS)',
    		'codigo'=>1168020,
    		'unidadPrimaria'=>'UN',
    		'giro'=>25,
    		'canal'=>3,
    		'zona'=>14,
    		'ruta'=>'V29',
    		'rutaAutoventa'=>'',
    		'neto'=>71760,
    		'cantidad'=>20,
    	]);
    }
}
