<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idpub
 * @property int $idrutes
 * @property Pub $pub
 * @property Rute $rute
 */
class RutesPubs extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pub_ruta';

    /**
     * @var array
     */
    protected $fillable = ['idpub', 'idrutes'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pub()
    {
        return $this->belongsTo('App\Pub', 'idpub', 'idPub');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rute()
    {
        return $this->belongsTo('App\Rute', 'idrutes', 'idrutes');
    }
}
