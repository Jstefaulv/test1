<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $data
 * @property string $name
 * @property string $type
 * @property int $size
 * @property string $extension
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property PlUser $plUser
 */
class Uimage extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pl_uimages';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'data', 'name', 'type', 'size', 'extension', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plUser()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
