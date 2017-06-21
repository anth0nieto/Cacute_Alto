<?php

namespace consejo_com\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Adulto
 */
class Adulto extends Model
{
    protected $table = 'adulto';

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
        'telefono',
        'ocupacion',
        'alfabetizado'
    ];

    protected $guarded = [];

        
}