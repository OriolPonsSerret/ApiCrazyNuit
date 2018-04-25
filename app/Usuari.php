<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idusuaris
 * @property string $nom
 * @property string $DataNaixement
 * @property string $correu_electronic
 * @property string $telefon
 * @property string $data_alta
 * @property string $data_baixa
 * @property string $rol
 * @property Assoliment[] $assoliments
 * @property Rute[] $rutes
 */
class Usuari extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idusuaris';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['nom', 'DataNaixement', 'correu_electronic', 'telefon', 'data_alta', 'data_baixa', 'rol'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function assoliments()
    {
        return $this->belongsToMany('App\Assoliment', 'usuaris_assoliments', 'idusuaris', 'idassoliments');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function rutes()
    {
        return $this->belongsToMany('App\Rute', 'usuaris_rutes', 'idusuaris', 'idrutes');
    }
}