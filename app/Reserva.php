<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = "reserva";
    public $timestamps = false;
    protected $fillable = [
        'idreserva',
        'cantidad',
        'mont_tot',
        'fecha',
        'est_reser',
        'cod_seg',
        'estado',
        'fkidcliente',
        'fkidoferta_producto'
    ];
    protected $primaryKey = 'idreserva';

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'fkidcliente');
    }
    public function ofertaProducto()
    {
        return $this->belongsTo(OfertaProducto::class, 'fkidoferta_producto');
    }
}
