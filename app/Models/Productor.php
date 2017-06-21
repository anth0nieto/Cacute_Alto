<?php

namespace consejo_com\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Productor
 */
class Productor extends Model
{
    protected $table = 'productor';

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
        'alfabetizado',
        'codigo',
        'hectareas',
        'tenencia'
    ];

    protected $guarded = [];

        
}