<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = "sucursal";
    public $timestamps = false;
    protected $fillable = [
        'idsucursal',
        'nombre',
        'direccion',
        'telefono',
        'latitud',
        'longitud',
        'estado',
        'fkidencargado_empresa',
        'fkidencargado_sucursal'
    ];
    protected $primaryKey = 'idproducto';

    public function encargadoEmpresa()
    {
        return $this->belongsTo(EncargadoEmpresa::class, 'fkidencargado_empresa');
    }
    public function encargadoSucursal()
    {
        return $this->belongsTo(EncargadoSucursal::class, 'fkidencargado_sucursal');
    }
}
