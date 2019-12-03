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
        'fkidcategoria',
        'fkidempresa'
    ];
    protected $primaryKey = 'idproducto';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'fkidcategoria');
    }
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'fkidempresa');
    }
    
}
