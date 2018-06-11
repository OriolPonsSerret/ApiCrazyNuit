<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rute;
use App\Usuari;
use App\UsuarisRutes;
use App\BarRestaurant;
use App\Disco;
use App\Pub;

class RutesController extends Controller
{
    public function index()
    {
        return Rute::all();
    }
 
    public function show(Rute $rute)
    {

        $var1 = $rute;
        $var2 = $rute->barRestaurants()->get(array('bar_ruta.idBarRestaurant'));
        $barRestaurant = array();
        foreach ($var2 as $barRestaurant2){
            $arraybar = array_push( $barRestaurant, BarRestaurant::find($barRestaurant2->idBarRestaurant));
        }

        $var3 = $rute->discotecas()->get(array('disco_ruta.idDiscoteca'));
        $disco = array();
        foreach ($var3 as $disco2){
            $arraydisco = array_push( $disco, Disco::find($disco2->idDiscoteca));
        }

        $var4 = $rute->pubs()->get(array('pub_ruta.idpub'));
        $pub = array();
        foreach ($var3 as $pub2){
            $arraypub = array_push( $pub, Pub::find($pub2->idpub));
        }

        $var5 = $rute->usuaris()->get(array('usuaris_rutes.idusuaris'));
        $usuari = array();
        foreach ($var3 as $usuari2){
            $arrayusuaris = array_push( $usuari, Usuari::find($usuari2->idusuaris));
        }

        return array($var1,$barRestaurant,$disco,$pub,$usuari);
    }

    public function store(Request $request)
    {
        $rute = Rute::create($request->all());
        //crear a la taula Usuaris_Rutes
        //$arrayrutes = array();
        //array_push($arrayrutes, $rute->rutcreador);
        //array_push($arrayrutes, $rute->idrutes);
        //$RU=UsuarisRutes::create($arrayrutes);
        //return response()->json($RU, $rute, 201);
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
        //$RU=UsuarisRutes::delete($rute);
        return response()->json(null, 204);
    }
}
