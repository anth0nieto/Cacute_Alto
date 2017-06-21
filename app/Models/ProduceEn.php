<?php

namespace consejo_com\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProduceEn
 */
class ProduceEn extends Model
{
    protected $table = 'produce_en';

    protected $primaryKey = 'codigoprod';

	public $timestamps = false;

    protected $fillable = [
        'nombrefinca'
    ];

    protected $guarded = [];

        
}