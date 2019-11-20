<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Asignacion extends Model
{
    
    protected $table = "asignacion";
    public $timestamps = false;
    protected $fillable = ['fkidactivo', 'estado', 'fkiduser'];

    public function user()
    {
        return $this->belongsTo(User::class, 'fkiduser');
    }
    public function activo()
    {
        return $this->belongsTo(Activo::class, 'fkidactivo');
    }

    public static function allActivos($iduser){
        $allActivos=DB::Table('asignacion')
        ->join('users','users.id','=','asignacion.fkiduser')
        ->join('activo','activo.idactivo','=','asignacion.fkidactivo')
        ->join('bien','bien.idbien','=','activo.fkidbien')
        ->where('users.id','=',$iduser)
        ->select('activo.*','bien.nombre')
        ->get();
        return $allActivos;
    }

    public static function removeAll($iduser){
            DB::Table('asignacion')
            ->where('asignacion.fkiduser','=',$iduser)
            ->update(['estado'=>'0']);
    }


}
