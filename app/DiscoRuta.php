<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $iddiscoteca
 * @property int $idrutes
 * @property Discoteca $discoteca
 * @property Rute $rute
 */
class DiscoRuta extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'disco_ruta';

    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function discoteca()
    {
        return $this->belongsTo('App\Disco', 'iddiscoteca', 'idDiscoteca');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rute()
    {
        return $this->belongsTo('App\Rute', 'idrutes', 'idrutes');
    }
}
