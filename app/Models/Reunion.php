<?php

namespace consejo_com\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reunion
 */
class Reunion extends Model
{
    protected $table = 'reunion';

    protected $primaryKey = 'f_reunion';

	public $timestamps = false;

    protected $fillable = [
        'acta'
    ];

    protected $guarded = [];

        
}