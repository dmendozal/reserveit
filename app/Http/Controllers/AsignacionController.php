<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asignacion;
use App\User;
use App\Activo;
use DB;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaciones = Asignacion::all()->where('estado', '=', '1');
        $usuarios = User::all();

        foreach ($usuarios as $key => $user) {
            if (!$asignaciones->contains('fkiduser', $user->id)) {
                $usuarios->forget($key);
            }
        }
        return view('asignacion.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activos = Activo::all()->where('estado', '1');
        $asignaciones = Asignacion::all();
        $usuarios = User::all();

        foreach ($usuarios as $key => $user) {
            if ($asignaciones->contains('fkiduser', $user->id)) {
                $usuarios->forget($key);
            }
        }
        foreach ($activos as $key => $activo) {
            if ($asignaciones->contains('fkidactivo', $activo->idactivo)) {
                $activos->forget($key);
            }
        }

        return view('asignacion.create', compact('activos', 'usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find($request->get('iduser'));
        $user->addAssignment()->sync($request->get('activos'));
        return redirect()->route('asignacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $activos = Asignacion::all()->where('fkiduser', '=', $id);
        return view('asignacion.show', compact('activos', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activos = Activo::all()->where('estado','=', '1');
        $asignaciones = Asignacion::all();
        $misactivos = Asignacion::allActivos($id);
        foreach ($activos as $key => $activo) {
            if ($asignaciones->contains('fkidactivo', $activo->idactivo)) {
                if ($misactivos->contains('codigo', $activo->codigo)) {
                    $activo['asignado'] = 1;
                } else {
                    $activos->forget($key);
                }
            } else {
                $activo['asignado'] = 0;
            }
        }

        $user = User::find($id);
        return view('asignacion.edit', compact('activos', 'user'));
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
        $user = User::find($id);
        $user->addAssignment()->sync($request->get('activos'));
        return redirect()->route('asignacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Asignacion::removeAll($id);
        return redirect()->route('asignacion.index');
    }
}
