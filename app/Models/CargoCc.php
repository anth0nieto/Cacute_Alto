<?php

namespace consejo_com\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CargoCc
 */
class CargoCc extends Model
{
    protected $table = 'cargo_cc';

    protected $primaryKey = 'idadulto';

	public $timestamps = false;

    protected $fillable = [
        'cargo',
        'f_inic',
        'f_fin'
    ];

    protected $guarded = [];

        
}