<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idrutes
 * @property int $rutcreador
 * @property int $rutmida
 * @property string $rutlocals
 * @property string $rutdata
 * @property integer $rutvaloracio
 * @property string $rutnom
 * @property string $rutdescripcio
 * @property Usuari $usuari
 * @property BarRestaurant[] $barRestaurants
 * @property Discoteca[] $discotecas
 * @property Pub[] $pubs
 * @property Usuari[] $usuaris
 */
class Rute extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idrutes';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public  $incrementing = true;

    /**
     * @var array
     */
    protected $fillable = ['rutcreador', 'rutmida', 'rutlocals', 'rutdata', 'rutvaloracio', 'rutnom', 'rutdescripcio'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuari()
    {
        return $this->belongsTo('App\Usuari', 'rutcreador', 'idusuaris');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function barRestaurants()
    {
        return $this->belongsToMany('App\BarRestaurant', 'bar_ruta', 'idrutes', 'idbar_restaurant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function discotecas()
    {
        return $this->belongsToMany('App\Discoteca', 'disco_ruta', 'idrutes', 'iddiscoteca');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pubs()
    {
        return $this->belongsToMany('App\Pub', 'pub_ruta', 'idrutes', 'idpub');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function usuaris()
    {
        return $this->belongsToMany('App\Usuari', 'usuaris_rutes', 'idrutes', 'idusuaris');
    }
}
