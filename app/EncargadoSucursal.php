<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncargadoSucursal extends Model
{
    protected $table = "encargado_sucursal";
    public $timestamps = false;
    protected $fillable = [
        'idencargado_sucursal',
        'nombre',
        'apellido',
        'ci',
        'telefono',
        'validacion',
        'fecha_registro',
        'estado'
    ];
    protected $primaryKey = 'idencargado_empresa';
}
