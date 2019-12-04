<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SucursalProducto extends Model
{
    protected $table = "sucursal_producto";
    public $timestamps = false;
    protected $fillable = [
        'fkidsucursal',
        'fkidproducto'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'fkidproducto');
    }
    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class, 'fkidsucursal');
    }
}
