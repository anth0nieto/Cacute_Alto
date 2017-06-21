<?php

namespace consejo_com\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cuotum
 */
class Cuota extends Model
{
    protected $table = 'cuota';
    protected $primaryKey = 'id';

    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'f_cuota',
        'n_finca',
        'monto',
        'ci_tesorero',
        'nombre_tesorero',
        'ci_contribuyente',
        'nombre_contribuyente',
        'mes_cancelado'
    ];

    protected $guarded = [];

        
}