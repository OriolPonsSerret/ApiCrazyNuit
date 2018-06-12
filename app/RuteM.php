<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idrutesm
 * @property string $rutpub
 * @property string $rutpub2
 * @property string $rutdisco
 * @property string $rutdisco2
 * @property string $rutbar
 * @property string $rutbar2
 * @property string $rutdata
 * @property integer $rutvaloracio
 * @property string $rutnom
 * @property string $rutcreador
 * @property string $rutdescripcio
 * @property string $created_at
 * @property string $updated_at
 */
class RuteM extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'rutesmitja';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idrutesm';

    /**
     * @var array
     */
    protected $fillable = ['rutpub', 'rutpub2', 'rutdisco', 'rutdisco2', 'rutbar', 'rutbar2', 'rutdata', 'rutvaloracio', 'rutnom', 'rutcreador', 'rutdescripcio', 'created_at', 'updated_at'];

}
