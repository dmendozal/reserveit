<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = "empresa";
    public $timestamps = false;
    protected $fillable = [
        'idempresa',
        'razon_social',
        'direccion',
        'telefono',
        'email',
        'mision',
        'vision',
        'slogan',
        'imagen',
        'sitio_web',
        'estado',
        'fkidhorario',
        'fkidencargado_empresa'
    ];
    protected $primaryKey = 'idempresa';

    public function horario()
    {
        return $this->belongsTo(Horario::class, 'fkidhorario');
    }
    public function encargadoEmpresa()
    {
        return $this->belongsTo(EncargadoEmpresa::class, 'fkidencargado_empresa');
    }
}
