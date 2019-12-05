<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;

use Illuminate\Http\Request;

use DB;
use App\Reserva;
use Exception;
use App\OfertaProducto;
use App\Suscripcion;
use App\SucursalProducto;
use Illuminate\Support\Facades\Auth;

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
        $result = DB::Table('oferta_producto')
            ->join('producto', 'producto.idproducto', '=', 'oferta_producto.fkidproducto')
            ->join('sucursal', 'sucursal.idsucursal', '=', 'oferta_producto.fkidsucursal')
            ->select('producto.nombre as name', 'producto.*', 'sucursal.*', 'oferta_producto.*')
            ->where('oferta_producto.cant_disp', '!=', 0)
            ->get();
        return $result;
    }

    public function productosSuscripcion()
    {
        $result = DB::Table('oferta_producto')
            ->join('producto', 'producto.idproducto', '=', 'oferta_producto.fkidproducto')
            ->join('sucursal', 'sucursal.idsucursal', '=', 'oferta_producto.fkidsucursal')
            ->leftJoin('suscripcion', 'producto.idproducto', '=', 'suscripcion.fkidproducto')
            ->where('oferta_producto.cant_disp', '!=', 0)
            ->select('producto.nombre as name', 'producto.*', 'sucursal.*', 'oferta_producto.*', 'suscripcion.*')
            ->get();

        return $result;
    }


    public function suscribirse(Request $request)
    {
        if ($request->idsuscripcion != null) {
            $suscripcion = Suscripcion::find($request->idsuscripcion);
            $suscripcion->delete();
        } else {
            try {
                $fecha = date('y-m-d');
                $suscripcion = new Suscripcion();
                $suscripcion->fecha = $fecha;
                $suscripcion->fkidcliente = $request->idcliente;
                $suscripcion->fkidproducto = $request->idproducto;
                $suscripcion->save();
            } catch (Exception $e) {
                return $e;
            }
        }
    }

    public function reservas(Request $request)
    {
        $fecha = date('y-m-d');
        $codigo = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);

        $reserva = DB::Table('reserva')->where('estado', '=', 1)->where('fkidcliente', '=', 1)->get();
        if (sizeof($reserva) != 0) {
            return 2;
        }
        try {
            $reserva = new Reserva();
            $reserva->cantidad = $request->cantidad;
            $reserva->mont_tot = $request->mont_tot;
            $reserva->fecha = $fecha;
            $reserva->est_reser = "En proceso";
            $reserva->cod_seg = $codigo;
            $reserva->fkidcliente = 1;
            $reserva->fkidoferta_producto = $request->idoferta_producto;
            $reserva->save();

            $oferta = OfertaProducto::find($request->idoferta_producto);
            $oferta->update(['cant_disp' => $oferta->cant_disp - $request->cantidad]);

            return 1;
        } catch (Exception $e) {
            return $e;
        }


        return $request->input('cantidad');

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
