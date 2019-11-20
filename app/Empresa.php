<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = "empresa";
    public $timestamps=false;
    protected $fillable = ['idempresa','razon_social','email','direccion','telefono','estado'];
    protected $primaryKey = 'idempresa';

}
