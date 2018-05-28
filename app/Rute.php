<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idrutes
 * @property int $rutmida
 * @property string $rutlocals
 * @property string $rutdata
 * @property integer $rutvaloracio
 * @property string $rutnom
 * @property int $rutcreador
 * @property string $rutdescripcio
 * @property BarRestaurant[] $barRestaurants
 * @property Discoteca[] $discotecas
 * @property Pub[] $pubs
 * @property Usuari[] $usuaris
 */
class Rute extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'rutes';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idrutes';

    /**
     * @var array
     */
    protected $fillable = ['rutmida', 'rutlocals', 'rutdata', 'rutvaloracio', 'rutnom', 'rutcreador', 'rutdescripcio'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function barRestaurants()
    {
        return $this->belongsToMany('App\BarRestaurant', 'bar_ruta', 'idrutes', 'idbarrestaurant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function discotecas()
    {
        return $this->belongsToMany('App\Disco', 'disco_ruta', 'idrutes', 'iddiscoteca');
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
