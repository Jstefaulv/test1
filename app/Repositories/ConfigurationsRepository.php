<?php

namespace App\Repositories;

use App\Models\Configurations;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConfigurationsRepository
 * @package App\Repositories
 * @version November 13, 2018, 5:34 am UTC
 *
 * @method Configurations findWithoutFail($id, $columns = ['*'])
 * @method Configurations find($id, $columns = ['*'])
 * @method Configurations first($columns = ['*'])
*/
class ConfigurationsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'key',
        'value'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Configurations::class;
    }
}
