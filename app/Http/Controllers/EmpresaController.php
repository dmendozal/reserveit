<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\EncargadoEmpresa;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all()->where('estado', '1');
        return view('empresa.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $encargadoEmpresa = EncargadoEmpresa::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'ci' => $request->ci,
            'email'  => $request->email,
            'telefono' => $request->telefono,
            'validacion' => 0,
            'fecha_registro' => now(),
        ]);
        User::create([
            'name' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'fkidencargado_empresa' => $encargadoEmpresa->idencargado_empresa,
        ]);
        Empresa::create([
            'razon_social' => $request->razon_social,
            'direccion' => $request->direccion,
            'telefono' => $request->telefono,
            'email' => $request->email_empresa,
            'mision' => $request->mision,
            'vision' => $request->vision,
            'slogan' => $request->slogan,
            'imagen' => 'imagen',
            'sitio_web' => $request->sitio_web,
            'fkidencargado_empresa' => $encargadoEmpresa->idencargado_empresa,
        ]);
        return redirect()->route('empresa.index');
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
