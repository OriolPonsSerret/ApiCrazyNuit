<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idrutes
 * @property int $rutmida
 * @property string $rutpubs
 * @property string $rutbars
 * @property string $rutdiscos
 * @property string $rutdata
 * @property integer $rutvaloracio
 * @property string $rutnom
 * @property int $rutcreador
 * @property string $rutdescripcio
 * @property string $created_at
 * @property string $updated_at
 * @property BarRestaurant[] $barRestaurants
 * @property Discoteca[] $discotecas
 * @property Pub[] $pubs
 * @property UsuarisRute[] $usuarisRutes
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
     * @var array
     */
    protected $fillable = ['rutmida', 'rutpubs', 'rutbars', 'rutdiscos', 'rutdata', 'rutvaloracio', 'rutnom', 'rutcreador', 'rutdescripcio', 'created_at', 'updated_at'];

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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarisRutes()
    {
        return $this->hasMany('App\UsuarisRute', 'idrutes', 'idrutes');
    }
}
