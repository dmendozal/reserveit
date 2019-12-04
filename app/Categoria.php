<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categoria";
    public $timestamps = false;
    protected $fillable = ['idcategoria', 'nombre', 'descripcion', 'imagen', 'estado'];
    protected $primaryKey = 'idcategoria';


    /*  public function programa()
    {
        return $this->belongsTo(Programa::class,'fkidprograma');
    } */
}
