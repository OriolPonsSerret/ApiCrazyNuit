<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idrutesc
 * @property string $rutpub
 * @property string $rutbar
 * @property string $rutdisco
 * @property string $rutdata
 * @property integer $rutvaloracio
 * @property string $rutnom
 * @property string $rutcreador
 * @property string $rutdescripcio
 * @property string $created_at
 * @property string $updated_at
 */
class RuteC extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'rutescurtes';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idrutesc';

    /**
     * @var array
     */
    protected $fillable = ['rutpub', 'rutbar', 'rutdisco', 'rutdata', 'rutvaloracio', 'rutnom', 'rutcreador', 'rutdescripcio', 'created_at', 'updated_at'];

}
