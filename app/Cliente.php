<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "cliente";
    public $timestamps = false;
    protected $fillable = [
        'idcliente',
        'nombre',
        'apellido',
        'sexo',
        'direccion',
        'telefono',
        'email',
        'username',
        'password',
        'token',
        'estado'
    ];
    protected $primaryKey = 'idcliente';

}
