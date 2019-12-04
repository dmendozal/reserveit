<?php

namespace App\Http\Controllers;

use App\OfertaProducto;
use App\Producto;
use App\Sucursal;
use App\SucursalProducto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfertaProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$idsucursal = Auth::user()->encargadoSucursal->sucursal->idsucursal;
        $ofertaProducto = OfertaProducto::all()->where('estado', '1');
        return view('ofertaproducto.index', compact('ofertaProducto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idsucursal = Auth::user()->encargadoSucursal->sucursal[0]->idsucursal;
        $productos = SucursalProducto::all()->where('fkidsucursal', $idsucursal);
        return view('ofertaproducto.create', compact('productos'));
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
}
