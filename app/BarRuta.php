<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idbar_restaurant
 * @property int $idrutes
 * @property BarRestaurant $barRestaurant
 * @property Rute $rute
 */
class BarRuta extends Model
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
    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function barRestaurant()
    {
        return $this->belongsTo('App\BarRestaurant', 'idbar_restaurant', 'idBar-Restaurant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rute()
    {
        return $this->belongsTo('App\Rute', 'idrutes', 'idrutes');
    }
}
