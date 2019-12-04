<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idempresa = Auth::user()->encargadoEmpresa->empresa[0]->idempresa;
        $productos = Producto::all()->where('estado', '1')->where('fkidempresa', $idempresa);
        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('producto.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = Producto::create($request->all());
        return redirect()->route('producto.index');
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

    public function allProducts()
    {
        $result = Producto::all();
        return $result;
    }

    public function searchProduct($nombre)
    {
        $result = DB::table('producto')
            ->where('nombre', 'like', $nombre . '%')
            ->get();
        return $result;
    }
    public function searchCategory($nombre)
    {
        $result = DB::table('categoria')
            ->where('nombre', 'like', $nombre . '%')
            ->get();
        return $result;
    }
    public function searchSucursal($direccion)
    {
        $result = DB::table('sucursal')
            ->where('direccion', 'like', $direccion . '%')
            ->get();
        return $result;
    }
}
