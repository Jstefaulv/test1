<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property int $id
 * @property string $username
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property PlOption[] $plOptions
 * @property PlRol[] $plRols
 * @property PlUimage[] $plUimages
 */
class User extends Authenticatable
{
    use Notifiable;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pl_users';

    /**
     * @var array
     */
    protected $fillable = ['username', 'name', 'email', 'password', 'remember_token', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function opciones()
    {
        return $this->belongsToMany('App\Option', 'pl_option_user', 'user_id', 'option_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function plRols()
    {
        return $this->belongsToMany('App\Rol', 'pl_rol_user', 'user_id', 'rol_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plUimages()
    {
        return $this->hasMany('App\Uimage', 'user_id');
    }
}
