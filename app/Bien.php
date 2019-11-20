<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    protected $table = "bien";
    public $timestamps = false;
    protected $fillable = ['idbien', 'nombre', 'descripcion', 'estado'];
    protected $primaryKey = 'idbien';
}
