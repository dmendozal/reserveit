<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntregaProducto extends Model
{
    protected $table = "entrega_producto";
    public $timestamps = false;
    protected $fillable = ['identrega_producto', 'comentario', 'valoracion', 'fecha', 'fkidreserva'];
    protected $primaryKey = 'identrega_producto';

    public function reserva()
    {
        return $this->belongsTo(Reserva::class, 'fkidreserva');
    }
}
