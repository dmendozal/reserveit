<?php

namespace App\Http\Controllers;

use App\EntregaProducto;
use App\OfertaProducto;
use App\Reserva;
use Illuminate\Http\Request;
use DB;
use Exception;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::all()->where('estado', '1');
        return view('reserva.index', compact('reservas'));
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
    public function show(Reserva $reserva)
    {
        return view('mapas.map',compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reserva = Reserva::find($id);
        return view('reserva.edit', compact('reserva'));
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
        $reserva = Reserva::find($id);
        $reserva->update($request->all());
        EntregaProducto::create([
            'fecha' => now(),
            'fkidreserva' => $reserva->idreserva,
        ]);
        return redirect()->route('reserva.index');
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

    public function reservas(Request $request)
    {
        $fecha = date('y-m-d');
        $codigo = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);

        $reserva = DB::Table('reserva')->where('estado', '=', '1')->where('fkidcliente', '=', 1)->get();
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
    }

    public function todayreservation($id)
    {
        //$result = Reserva::orderBy('fecha', 'DESC')->where('estado', '1')->where('fkidcliente', 1)->first();
        $result = DB::Table('reserva')
            ->join('oferta_producto', 'oferta_producto.idoferta_producto', '=', 'reserva.fkidoferta_producto')
            ->join('producto', 'producto.idproducto', '=', 'oferta_producto.fkidproducto')
            ->join('sucursal', 'sucursal.idsucursal', '=', 'oferta_producto.fkidsucursal')
            ->orderBy('reserva.fecha', 'DESC')
            ->where('reserva.estado', '=', '1')
            ->where('est_reser','=','En proceso')
            ->where('reserva.fkidcliente', '=', $id)
            ->get();
        return $result;
    }

    public function allreservation($id)
    {
        $result = DB::Table('reserva')
            ->join('oferta_producto', 'oferta_producto.idoferta_producto', '=', 'reserva.fkidoferta_producto')
            ->join('producto', 'producto.idproducto', '=', 'oferta_producto.fkidproducto')
            ->leftJoin('entrega_producto', 'entrega_producto.fkidreserva', '=', 'reserva.idreserva')
            ->orderBy('reserva.fecha', 'DESC')
            ->where('reserva.est_reser', '=', 'Terminado')
            ->where('reserva.fkidcliente', '=', $id)
            ->get();

        return $result;
    }
}
