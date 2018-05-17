<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idcomentaris
 * @property string $comtext
 * @property boolean $comvaloracio
 */
class Comentari extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idcomentaris';

    /**
     * @var array
     */
    protected $fillable = ['comtext', 'comvaloracio'];

}
