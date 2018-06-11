<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pub;
use App\Rute;
use App\Zona;

class PubController extends Controller
{
    public function index()
    {
        return Pub::all();
    }
 
    public function show(Pub $pub)
    {
        $var1 = $pub;
        $var2 = $pub->rutes()->get(array('pub_ruta.idrutes'));
        $ruta = array();
        foreach ($var2 as $ruta2){
            $arrayrutes = array_push( $ruta,  Rute::find($ruta2->idrutes));
        }

        $var3 = $pub->zones()->get(array('pub_zones.idzones'));
        $zona = array();
        foreach ($var2 as $zona2){
            $arrayzones = array_push( $zona,  Zona::find($zona2->idzones));
        }

        return array($var1, $ruta, $zona);
    }

    public function store(Request $request)
    {
        $pub=Pub::create($request->all());
        return response()->json($pub, 201);
    }

    public function update(Request $request, Pub $pub)
    {
        $pub->update($request->all());

        return response()->json($pub, 200);
    }

    public function delete(Pub $pub)
    {
        $pub->delete();

        return response()->json(null, 204);
    }
}