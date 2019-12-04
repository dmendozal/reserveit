<?php

namespace App\Http\Controllers;

use App\OfertaProducto;

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
        $idsucursal = Auth::user()->encargadoSucursal->sucursal[0]->idsucursal;
        $ofertaProducto = OfertaProducto::all()->where('estado', '1')->where('fkidsucursal', $idsucursal);
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
        $sucursalProducto = SucursalProducto::all()->where('fkidsucursal', $idsucursal);
        return view('ofertaproducto.create', compact('sucursalProducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        OfertaProducto::create([
            'cant_disp' => $request->cant_disp,
            'precio' => $request->precio,
            'hora_inicio' => $request->hora_inicio,
            'hora_fin' => $request->hora_fin,
            'fkidproducto' => $request->fkidproducto,
            'fkidsucursal' => $request->fkidsucursal,
            'fecha' => now(),
        ]);
        return redirect()->route('ofertaproducto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ofertaproducto = OfertaProducto::find($id);
        return view('ofertaproducto.edit', compact('ofertaproducto'));
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
        OfertaProducto::find($id)->update($request->all());
        return redirect()->route('ofertaproducto.index');
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
