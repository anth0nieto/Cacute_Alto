<?php

namespace consejo_com\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Constancia
 */
class Constancia extends Model
{
    protected $table = 'constancias';

    public $timestamps = false;

    protected $fillable = [
        'f_const',
        'solicitante',
        'tipo'
    ];

    protected $guarded = [];

        
}