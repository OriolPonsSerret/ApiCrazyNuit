<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $pentipus
 * @property string $pendata_inici
 * @property string $pendata_final
 */
class Penalitzacion extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['penid','pentipus', 'pendatainici', 'pendatafinal'];

}
