<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idassoliments
 * @property string $assonom
 * @property string $assodescripcio
 * @property string $assoimatge
 * @property Usuari[] $usuaris
 */
class Assoliment extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idassoliments';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['assonom', 'assodescripcio', 'assoimatge'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function usuaris()
    {
        return $this->belongsToMany('App\Usuari', 'usuaris_assoliments', 'idassoliments', 'idusuaris');
    }
}
