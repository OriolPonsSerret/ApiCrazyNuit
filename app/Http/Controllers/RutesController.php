<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rute;

class RutesController extends Controller
{
    public function index()
    {
        return Rute::all();
    }
 
    public function show(Rute $rute)
    {

        $var1 = $rute;
        $var2 = $rute->barRestaurants()->get(array('bar_ruta.idbar_restaurant'));
        $var3 = $rute->discotecas()->get(array('disco_ruta.iddiscoteca'));
        $var4 = $rute->pubs()->get(array('pub_ruta.idpub'));
        $var5 = $rute->usuaris()->get(array('usuaris_rutes.idusuaris'));

        return array($var1, $var2, $var3, $var4, $var5);
    }

    public function store(Request $request)
    {
        $rute=Rute::create($request->all());
        //crear a la taula Usuaris_Rutes
        //app('App\Http\Controllers\UsuarisRutesController')->store($request->all());

        return response()->json($rute, 201);
    }

    public function update(Request $request, Rute $rute)
    {
        $rute->update($request->all());
        //upgrade a la taula Usuaris_Rutes
        
        return response()->json($rute, 200);
    }

    public function delete(Rute $rute)
    {
        $rute->delete();
        //delete a la taula Usuaris_Rutes
        
        return response()->json(null, 204);
    }
}
