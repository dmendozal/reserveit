<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class Activo extends Model
{
    protected $table = "activo";
    public $timestamps = false;
    protected $fillable = ['idactivo', 'codigo', 'estado', 'fkidestado', 'fkidbien', 'fkidubicacion','qr'];
    protected $primaryKey = 'idactivo';

    public function state()
    {
        return $this->belongsTo(Estado::class, 'fkidestado');
    }
    public function bien()
    {
        return $this->belongsTo(Bien::class, 'fkidbien');
    }
    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class, 'fkidubicacion');
    }

    public static function generateQR($codigo,$aula,$piso){
        QrCode::size(800)
        ->format('png')
        ->generate('Codigo del activo :'.$codigo."\n".'Aula : '.$aula."\n".' Piso : '.$piso, public_path('assets/images/Qr'.$codigo.'.png'));
    }

}
