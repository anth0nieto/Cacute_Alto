<?php

namespace consejo_com\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vivienda
 */
class Vivienda extends Model
{
    protected $table = 'vivienda';

    public $timestamps = false;

    protected $fillable = [
        'direccion',
        'propia'
    ];

    protected $guarded = [];

        
}