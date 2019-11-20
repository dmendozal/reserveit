<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table = "ubicacion";
    public $timestamps = false;
    protected $fillable = ['idubicacion', 'aula', 'piso', 'estado'];
    protected $primaryKey = 'idubicacion';
}
