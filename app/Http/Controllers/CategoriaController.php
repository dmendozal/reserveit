<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Sucursal;
use App\Suscripcion;
use DB;
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function allCategorys()
    {
     $category=DB::Table('categoria')
     ->leftJoin('suscripcion','categoria.idcategoria','=','suscripcion.fkidcategoria')
     ->select('categoria.*','suscripcion.*')
     ->get();
     return $category;
    }
    public function allSucursal(){
        $sucursal=Sucursal::all()->where('estado','=',1);
        return $sucursal;
    }

    public function suscribirse(Request $request){
        if($request->idsuscripcion!=null){
               $suscripcion=Suscripcion::find($request->idsuscripcion);
               $suscripcion->delete();
               return "hola";
        }else{
            try{
                $fecha=date('y-m-d');
                $suscripcion=new Suscripcion();
                $suscripcion->fecha=$fecha;
                $suscripcion->fkidcliente=$request->idcliente;
                $suscripcion->fkidcategoria=$request->idcategoria;
                $suscripcion->save();
                return "carambola";
            }catch(Exception $e){
                return $e;
            }
        }
    }
}
