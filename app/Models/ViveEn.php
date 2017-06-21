<?php

namespace consejo_com\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ViveEn
 */
class ViveEn extends Model
{
    protected $table = 'vive_en';

    protected $primaryKey = 'idpersona';

	public $timestamps = false;

    protected $fillable = [
        'codigovivienda'
    ];

    protected $guarded = [];

        
}