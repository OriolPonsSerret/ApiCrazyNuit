<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idbarrestaurant
 * @property int $idrutes
 * @property BarRestaurant $barRestaurant
 * @property Rute $rute
 */
class RutesBars extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'bar_ruta';

    /**
     * @var array
     */
    protected $fillable = ['idbarrestaurant', 'idrutes'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function barRestaurant()
    {
        return $this->belongsTo('App\BarRestaurant', 'idbarrestaurant', 'idBarRestaurant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rute()
    {
        return $this->belongsTo('App\Rute', 'idrutes', 'idrutes');
    }
}
