<?php

namespace consejo_com\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menor
 */
class Menor extends Model
{
    protected $table = 'menor';

    public $timestamps = false;

    protected $fillable = [
        'p_nombre',
        's_nombre',
        'p_apellido',
        's_apellido',
        'f_nac',
        'pais_nac',
        'sexo',
        'cond_medica',
        'repmenor',
        'escolarizado',
        'relacion_rep'
    ];

    protected $guarded = [];

        
}