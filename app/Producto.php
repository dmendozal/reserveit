<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "producto";
    public $timestamps = false;
    protected $fillable = [
        'idproducto',
        'nombre',
        'descripcion',
        'imagen',
        'estado',
        'fkidcategoria'
    ];
    protected $primaryKey = 'idproducto';
    
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'fkidcategoria');
    }
}
