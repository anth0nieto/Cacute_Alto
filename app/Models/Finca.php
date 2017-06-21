<?php

namespace consejo_com\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Finca
 */
class Finca extends Model
{
    protected $table = 'finca';
    protected $primaryKey = 'nombre';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'turno_riego'
    ];

    protected $guarded = [];

        
}