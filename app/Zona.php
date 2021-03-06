<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idzones
 * @property string $zonpoblacio
 * @property string $zoncodi_postal
 * @property string $zonpais
 * @property BarRestaurant[] $barRestaurants
 * @property Discoteca[] $discotecas
 * @property Pub[] $pubs
 */
class Zona extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'zones';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idzones';

    /**
     * @var array
     */
    protected $fillable = ['zonpoblacio', 'zoncodiPostal', 'zonpais'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function barRestaurants()
    {
        return $this->belongsToMany('App\BarRestaurant', 'bar_zones', 'IdZones', 'IdBar_Restaurant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function discotecas()
    {
        return $this->belongsToMany('App\Disco', 'disco_zones', 'idzones', 'iddiscoteca');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pubs()
    {
        return $this->belongsToMany('App\Pub', 'pub_zones', 'IdZones', 'IdPub');
    }
}
