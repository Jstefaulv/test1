<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

/**
 * @property int $id
 * @property int $padre
 * @property string $nombre
 * @property string $ruta
 * @property string $descripcion
 * @property string $icono_l
 * @property string $icono_r
 * @property integer $orden
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property PlOption $plOption
 * @property PlUser[] $plUsers
 */
class Option extends Model
{
      use SoftDeletes;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pl_options';

    /**
     * @var array
     */
    protected $fillable = ['padre', 'nombre', 'ruta', 'descripcion', 'icono_l', 'icono_r', 'orden', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     
    public function plOption()
    {
        return $this->belongsTo('App\Option', 'padre');
    }
    /**
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function plUsers()
    {
       return $this->belongsToMany('App\User');
    }
}
