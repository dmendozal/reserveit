<?php

namespace App\Http\Controllers;

use App\EncargadoSucursal;
use App\Producto;
use App\Sucursal;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursales = Sucursal::all()->where('estado', '1');
        return view('sucursal.index', compact('sucursales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sucursal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $encargadoSucursal = EncargadoSucursal::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'ci' => $request->ci,
            'email'  => $request->email,
            'telefono' => $request->telefono,
            'validacion' => 0,
            'fecha_registro' => now(),
        ]);
        $user = User::create([
            'name' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fkidencargado_sucursal' => $encargadoSucursal->idencargado_sucursal,
        ]);
        $user->assignRole('Encargado de Sucursal');
        Sucursal::create([
            'nombre' => $request->nombre_sucursal,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono_sucursal,
            'fkidencargado_sucursal' => $encargadoSucursal->idencargado_sucursal,
            'fkidencargado_empresa' => Auth::user()->encargadoEmpresa->idencargado_empresa,
        ]);
        return redirect()->route('sucursal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sucursal = Sucursal::find($id);
        $productos = Producto::all()->where('estado', '1')->where('fkidempresa', $sucursal->encargadoEmpresa->empresa[0]->idempresa)->pluck('nombre', 'idproducto');
        return view('sucursal.show', compact('productos', 'sucursal'));
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
