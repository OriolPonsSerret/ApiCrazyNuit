<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idusuaris
 * @property int $idassoliments
 * @property Assoliment $assoliment
 * @property Usuari $usuari
 */
class UsuariAssoliments extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'usuaris_assoliments';

    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assoliment()
    {
        return $this->belongsTo('App\Assoliment', 'idassoliments', 'idassoliments');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuari()
    {
        return $this->belongsTo('App\Usuari', 'idusuaris', 'idusuaris');
    }
}
