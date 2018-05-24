<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idusuaris
 * @property int $idrutes
 * @property Rute $rute
 * @property Usuari $usuari
 */
class UsuarisRutes extends Model
{
    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rute()
    {
        return $this->belongsTo('App\Rute', 'idrutes', 'idrutes');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuari()
    {
        return $this->belongsTo('App\Usuari', 'idusuaris', 'idusuaris');
    }
}
