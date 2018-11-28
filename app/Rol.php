<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property PlUser[] $plUsers
 */
class Rol extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pl_rols';

    /**
     * @var array
     */
    protected $fillable = ['descripcion', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function plUsers()
    {
        return $this->belongsToMany('App\User', 'pl_rol_user', 'rol_id', 'user_id');
    }
}
