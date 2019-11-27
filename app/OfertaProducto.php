<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfertaProducto extends Model
{
    protected $table = "oferta_producto";
    public $timestamps = false;
    protected $fillable = [
        'idoferta_producto',
        'cant_disp',
        'precio',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'estado',
        'fkidsucursal',
        'fkidproducto'
    ];
    protected $primaryKey = 'idoferta_producto';

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'fkidsucursal');
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'fkidproducto');
    }
}
