<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumenVentas extends Model{
    //use SoftDeletes;

    public $table = 'pl_resumen_ventas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'mes',
        'rut',
        'sucursal',
        'codigoVendedor',
        'superFamilia',
        'familia',
        'codigo',
        'unidadPrimaria',
        'giro',
        'canal',
        'zona',
        'ruta',
        'rutaAutoventa',
        'neto',
        'cantidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'mes' => 'integer',
        'rut' => 'integer',
        'sucursal' => 'string',
        'codigoVendedor' => 'string',
        'superFamilia' => 'string',
        'familia' => 'string',
        'codigo' => 'integer',
        'unidadPrimaria' => 'string',
        'giro' => 'integer',
        'canal' => 'integer',
        'zona' => 'integer',
        'ruta' => 'string',
        'rutaAutoventa' => 'string',
        'neto' => 'integer',
        'cantidad' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
