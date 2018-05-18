<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idPub
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
class Pub extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pub';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idPub';

    /**
     * @var array
     */
    protected $fillable = ['Nom', 'Descripcio', 'Valoracio', 'Horari-Obertura', 'Horari-Tancament', 'TipusGastronomic', 'Categoria'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function rutes()
    {
        return $this->belongsToMany('App\Rute', 'pub_ruta', 'idpub', 'idrutes');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function zones()
    {
        return $this->belongsToMany('App\Zone', 'pub_zones', 'IdPub', 'IdZones');
    }
}
