<?php

namespace consejo_com\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 */
class Persona extends Model
{
    protected $table = 'persona';

    public $timestamps = false;

    protected $fillable = [
        'p_nombre',
        's_nombre',
        'p_apellido',
        's_apellido',
        'f_nac',
        'pais_nac',
        'sexo',
        'cond_medica'
    ];

    protected $guarded = [];

        
}