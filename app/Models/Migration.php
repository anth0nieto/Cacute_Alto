<?php

namespace consejo_com\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Migration
 */
class Migration extends Model
{
    protected $table = 'migrations';

    public $timestamps = false;

    protected $fillable = [
        'migration',
        'batch'
    ];

    protected $guarded = [];

        
}