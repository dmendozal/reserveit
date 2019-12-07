<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all()->where('estado', '1');
        return view('cliente.index', compact('clientes'));
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
    public function setToken(Request $request)
    {
        $idcliente = $request->get('idcliente');
        $token = $request->get('token');
        return Cliente::find($idcliente)->update(['token' => $token]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $cliente = new Cliente($request->all());
            $cliente->sexo = ($request->sexo) ? '1' : '0';
            $cliente['password'] = Hash::make($cliente['password']);
            $cliente->save();
            return 1;
        } catch (\Throwable $th) {
            return $th;
        }
    }
    public function validateLoginu(Request $request)
    {
        $cliente = Cliente::where('username', $request->username)->first();
        if ((bool) $cliente) {
            if (Hash::check($request->password, $cliente->password)) {
                return $cliente;
            } else {
                return 1;
            }
        } else {
            return 0;
        }
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
