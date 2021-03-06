<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idBar-Restaurant
 * @property string $Nom
 * @property string $Descripcio
 * @property integer $Valoracio
 * @property string $Horari-Obertura
 * @property string $Horari-Tancament
 * @property string $TipusGastronomic
 * @property int $Categoria
 * @property Rute[] $rutes
 * @property Zone[] $zones
 */
class BarRestaurant extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'bar_restaurant';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idBarRestaurant';

    /**
     * @var array
     */
    protected $fillable = ['Nom', 'Descripcio', 'Valoracio', 'HorariObertura', 'HorariTancament', 'TipusGastronomic', 'Categoria'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function rutes()
    {
        return $this->belongsToMany('App\Rute', 'bar_ruta', 'idbarrestaurant', 'idrutes');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function zones()
    {
        return $this->belongsToMany('App\Zona', 'bar_zones', 'IdBarRestaurant', 'IdZones');
    }
}
