<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RuteC;
use App\Usuari;
use App\UsuarisRutes;
use App\BarRestaurant;
use App\Disco;
use App\Pub;

class RutesCController extends Controller
{
    public function index()
    {
        return RuteC::all();
    }
 
    public function show(RuteC $ruteC)
    {

        $var1 = $ruteC;
        $var2 = $ruteC->barRestaurants()->get(array('bar_ruta.idBarRestaurant'));
        $barRestaurant = array();
        foreach ($var2 as $barRestaurant2){
            $arraybar = array_push( $barRestaurant, BarRestaurant::find($barRestaurant2->idBarRestaurant));
        }

        $var3 = $ruteC->discotecas()->get(array('disco_ruta.idDiscoteca'));
        $disco = array();
        foreach ($var3 as $disco2){
            $arraydisco = array_push( $disco, Disco::find($disco2->idDiscoteca));
        }

        $var4 = $ruteC->pubs()->get(array('pub_ruta.idpub'));
        $pub = array();
        foreach ($var3 as $pub2){
            $arraypub = array_push( $pub, Pub::find($pub2->idpub));
        }

        $var5 = $ruteC->usuaris()->get(array('usuaris_rutes.idusuaris'));
        $usuari = array();
        foreach ($var3 as $usuari2){
            $arrayusuaris = array_push( $usuari, Usuari::find($usuari2->idusuaris));
        }

        return array($var1,$barRestaurant,$disco,$pub,$usuari);
    }

    public function store(Request $request)
    {
        $ruteC = RuteC::create($request->all());
        //crear a la taula Usuaris_Rutes
        //$arrayrutes = array();
        //array_push($arrayrutes, $ruteC->rutcreador);
        //array_push($arrayrutes, $ruteC->idrutes);
        //$RU=UsuarisRutes::create($arrayrutes);
        //return response()->json($RU, $ruteC, 201);
        return response()->json($ruteC, 201);
    }

    public function update(Request $request, RuteC $ruteC)
    {
        $ruteC->update($request->all());
        //upgrade a la taula Usuaris_Rutes
        return response()->json($ruteC, 200);
    }

    public function delete(RuteC $ruteC)
    {
        $ruteC->delete();
        //delete a la taula Usuaris_Rutes
        //$RU=UsuarisRutes::delete($ruteC);
        return response()->json(null, 204);
    }
}
