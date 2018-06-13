<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RuteM;
use App\Usuari;
use App\UsuarisRutes;
use App\BarRestaurant;
use App\Disco;
use App\Pub;

class RutesMController extends Controller
{
    public function index()
    {
        return RuteM::all();
    }
 
    public function show(RuteM $ruteM)
    {

        $var1 = $ruteM;
        $var2 = $ruteM->barRestaurants()->get(array('bar_ruta.idBarRestaurant'));
        $barRestaurant = array();
        foreach ($var2 as $barRestaurant2){
            $arraybar = array_push( $barRestaurant, BarRestaurant::find($barRestaurant2->idBarRestaurant));
        }

        $var3 = $ruteM->discotecas()->get(array('disco_ruta.idDiscoteca'));
        $disco = array();
        foreach ($var3 as $disco2){
            $arraydisco = array_push( $disco, Disco::find($disco2->idDiscoteca));
        }

        $var4 = $ruteM->pubs()->get(array('pub_ruta.idpub'));
        $pub = array();
        foreach ($var3 as $pub2){
            $arraypub = array_push( $pub, Pub::find($pub2->idpub));
        }

        $var5 = $ruteM->usuaris()->get(array('usuaris_rutes.idusuaris'));
        $usuari = array();
        foreach ($var3 as $usuari2){
            $arrayusuaris = array_push( $usuari, Usuari::find($usuari2->idusuaris));
        }

        return array($var1,$barRestaurant,$disco,$pub,$usuari);
    }

    public function store(Request $request)
    {
        $ruteM = RuteM::create($request->all());
        //crear a la taula Usuaris_Rutes
        //$arrayrutes = array();
        //array_push($arrayrutes, $ruteM->rutcreador);
        //array_push($arrayrutes, $ruteM->idrutes);
        //$RU=UsuarisRutes::create($arrayrutes);
        //return response()->json($RU, $ruteM, 201);
        return response()->json($ruteM, 201);
    }

    public function update(Request $request, RuteM $ruteM)
    {
        $ruteM->update($request->all());
        //upgrade a la taula Usuaris_Rutes
        return response()->json($ruteM, 200);
    }

    public function delete(RuteM $ruteM)
    {
        $ruteM->delete();
        //delete a la taula Usuaris_Rutes
        //$RU=UsuarisRutes::delete($ruteM);
        return response()->json(null, 204);
    }
}
