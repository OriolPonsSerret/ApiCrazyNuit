<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idDiscoteca
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
class Disco extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'discoteca';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idDiscoteca';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['Nom', 'Descripcio', 'Valoracio', 'Horari-Obertura', 'Horari-Tancament', 'TipusGastronomic', 'Categoria'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function rutes()
    {
        return $this->belongsToMany('App\Rute', 'disco_ruta', 'iddiscoteca', 'idrutes');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function zones()
    {
        return $this->belongsToMany('App\Zone', 'disco_zones', 'iddiscoteca', 'idzones');
    }
}