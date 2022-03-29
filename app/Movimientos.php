<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimientos extends Model
{
    public $timestamps=false;
    protected $table='movimientos';
    protected $primaryKey='mov_id';

    protected $fillable=[
    	'mov_fecha','mov_cantidad','usu_id','cat_id','tip_id',
    ];


}

