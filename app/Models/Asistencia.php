<?php

namespace consejo_com\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asistencium
 */
class Asistencia extends Model
{
    protected $table = 'asistencia';

    public $timestamps = false;

    protected $fillable = [
        'reunion_asist',
        'asistente'
    ];

    protected $guarded = [];

        
}