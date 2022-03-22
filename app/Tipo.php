<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
 
    public $timestamps=false;
    protected $table='Tipo';
    protected $primaryKey='tip_id';
    protected $fillable=['tip_nombre' ];
    
}
