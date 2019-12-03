<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    protected $table = "suscripcion";
    public $timestamps = false;
    protected $fillable = [
        'idsuscripcion',
        'fecha',
        'estado',
        'fkidcliente',
        'fkidcategoria',
        'fkidempresa',
    ];
    protected $primaryKey = 'idsuscripcion';

    public function encargadoEmpresa()
    {
        return $this->belongsTo(EncargadoEmpresa::class, 'fkidencargado_empresa');
    }
    public function encargadoSucursal()
    {
        return $this->belongsTo(EncargadoSucursal::class, 'fkidencargado_sucursal');
    }
}
