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
        'fkidencargado_empresa'
    ];
    protected $primaryKey = 'idempresa';


    public function encargadoEmpresa()
    {
        return $this->belongsTo(EncargadoEmpresa::class, 'fkidencargado_empresa');
    }
}
