<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarRestaurant;
use App\Rute;
use App\Zona;


class BarRestaurantController extends Controller
{
    public function index()
    {
        return BarRestaurant::all();
    }
 
    public function show(BarRestaurant $barrestaurant)
    {
        $var1 = $barrestaurant;
        $var2 = $barrestaurant->rutes()->get(array('bar_ruta.idrutes'));
        $ruta = array();
        foreach ($var2 as $ruta2){
            $arrayrutes = array_push($ruta,Rute::find($ruta2->idrutes));
        }

        $var3 = $barrestaurant->zones()->get(array('bar_zones.idzones'));
        $zona = array();
        foreach ($var2 as $zona2){
            $arrayzones = array_push($zona,Zona::find($zona2->idzones));
        }

        return array($var1, $ruta, $zona);
    }

    public function store(Request $request)
    {
        $barrestaurant=BarRestaurant::create($request->all());
        return response()->json($barrestaurant, 201);
    }

    public function update(Request $request, BarRestaurant $barrestaurant)
    {
        $barrestaurant->update($request->all());

        return response()->json($barrestaurant, 200);
    }

    public function delete(BarRestaurant $barrestaurant)
    {
        $barrestaurant->delete();

        return response()->json(null, 204);
    }
}
