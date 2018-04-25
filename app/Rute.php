<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idrutes
 * @property int $rutmida
 * @property string $rutlocals
 * @property string $rutdata
 * @property integer $rutvaloracio
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
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['rutmida', 'rutlocals', 'rutdata', 'rutvaloracio'];

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
