<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $key
 * @property string $value
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Configuration extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pl_configurations';

    /**
     * @var array
     */
    protected $fillable = ['key', 'value', 'created_at', 'updated_at', 'deleted_at'];

}
