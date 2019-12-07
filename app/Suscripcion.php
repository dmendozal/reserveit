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
        'fkidproducto',
    ];
    protected $primaryKey = 'idsuscripcion';

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'fkidcliente');
    }
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'fkidcategoria');
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'fkidproducto');
    }
}
