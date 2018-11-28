<?php

namespace App\Repositories;

use App\Models\Ventas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VentasRepository
 * @package App\Repositories
 * @version November 13, 2018, 5:19 am UTC
 *
 * @method Ventas findWithoutFail($id, $columns = ['*'])
 * @method Ventas find($id, $columns = ['*'])
 * @method Ventas first($columns = ['*'])
*/
class VentasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Ventas::class;
    }
}
