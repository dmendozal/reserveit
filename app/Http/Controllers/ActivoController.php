<?php

namespace App\Http\Controllers;

use App\Activo;
use App\Bien;
use App\Estado;
use App\Http\Requests\StoreActivoRequest;
use App\Ubicacion;
use Illuminate\Http\Request;

class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activos = Activo::all()->where('estado', '1');
        return view('activo.index', compact('activos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::all()->where('estado', '1');
        $ubicaciones = Ubicacion::all()->where('estado', '1');
        $bienes = Bien::all()->where('estado', '1');
        return view('activo.create', compact('estados', 'ubicaciones', 'bienes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $request->merge(['qr' =>'assets/images/Qr'.$request->input('codigo').'.png']);
        $Activo=Activo::create($request->all());
        Activo::generateQR($request->input('codigo'),$Activo->ubicacion->aula,$Activo->ubicacion->piso);
        return redirect()->route('activo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function show(Activo $activo)
    {
        return view('activo.show', compact('activo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function edit(Activo $activo)
    {
        dd($activo);
        $estados = Estado::all()->where('estado', '1');
        $ubicaciones = Ubicacion::all()->where('estado', '1');
        $bienes = Bien::all()->where('estado', '1');
        return view('activo.edit', compact('estados', 'ubicaciones', 'bienes', 'activo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activo $activo)
    {
        $activo->update($request->all());
        return redirect()->route('activo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activo $activo)
    {
        $activo->update(['estado' => '0']);
        return redirect()->route('activo.index');
    }
}
