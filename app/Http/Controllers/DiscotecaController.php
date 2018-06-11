<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disco;
use App\Rute;
use App\Zona;

class DiscotecaController extends Controller
{
    public function index()
    {
        return Disco::all();
    }
 
    public function show(Disco $discoteca)
    {
        $var1 = $discoteca;
        $var2 = $discoteca->rutes()->get(array('disco_ruta.idrutes'));
        $ruta = array();
        foreach ($var2 as $ruta2){
            $arrayrutes = array_push( $ruta,  Rute::find($ruta2->idrutes));
        }

        $var3 = $discoteca->zones()->get(array('disco_zones.idzones'));
        $zona = array();
        foreach ($var2 as $zona2){
            $arrayzones = array_push( $zona,  Zona::find($zona2->idzones));
        }

        return array($var1, $ruta, $zona);
    }

    public function store(Request $request)
    {
        $discoteca=Disco::create($request->all());
        return response()->json($discoteca, 201);
    }

    public function update(Request $request, Disco $discoteca)
    {
        $discoteca->update($request->all());

        return response()->json($discoteca, 200);
    }

    public function delete(Disco $discoteca)
    {
        $discoteca->delete();

        return response()->json(null, 204);
    }
}
