<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapsController extends Controller
{
    public function getMapView()
    {
        return view('mapas.map');
    }
}
