<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idrutesl
 * @property string $rutpub
 * @property string $rutbar
 * @property string $rutdisco
 * @property string $rutpub2
 * @property string $rutbar2
 * @property string $rutdisco2
 * @property string $rutpub3
 * @property string $rutbar3
 * @property string $rutdisco3
 * @property string $rutdata
 * @property integer $rutvaloracio
 * @property string $rutnom
 * @property string $rutcreador
 * @property string $rutdescripcio
 * @property string $created_at
 * @property string $updated_at
 */
class RuteLL extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'rutesllargues';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idrutesl';

    /**
     * @var array
     */
    protected $fillable = ['rutpub', 'rutbar', 'rutdisco', 'rutpub2', 'rutbar2', 'rutdisco2', 'rutpub3', 'rutbar3', 'rutdisco3', 'rutdata', 'rutvaloracio', 'rutnom', 'rutcreador', 'rutdescripcio', 'created_at', 'updated_at'];

}
