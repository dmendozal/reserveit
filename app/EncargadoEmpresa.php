<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncargadoEmpresa extends Model
{
    protected $table = "encargado_empresa";
    public $timestamps = false;
    protected $fillable = [
        'idencargado_empresa',
        'nombre',
        'apellido',
        'ci',
        'email',
        'telefono',
        'validacion',
        'fecha_registro',
        'estado'
    ];
    protected $primaryKey = 'idencargado_empresa';
}
