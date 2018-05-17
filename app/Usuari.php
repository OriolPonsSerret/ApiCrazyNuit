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
 * @property string $password
 * @property string $descripcio
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
     * @var array
     */
    protected $fillable = ['nom', 'DataNaixement', 'correu_electronic', 'telefon', 'data_alta', 'data_baixa', 'password', 'descripcio'];//, 'api_token'];

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

    public function rutesusuari()
    {
        return $this->hasMany('App\Rute');
    }

    /*public function generateToken()
    {
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }*/

}
