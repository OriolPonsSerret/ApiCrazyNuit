<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RuteLL;
use App\Usuari;
use App\UsuarisRutes;
use App\BarRestaurant;
use App\Disco;
use App\Pub;

class RutesLLController extends Controller
{
    public function index()
    {
        return RuteLL::all();
    }
 
    public function show(RuteLL $ruteLL)
    {

        $var1 = $ruteLL;
        $var2 = $ruteLL->barRestaurants()->get(array('bar_ruta.idBarRestaurant'));
        $barRestaurant = array();
        foreach ($var2 as $barRestaurant2){
            $arraybar = array_push( $barRestaurant, BarRestaurant::find($barRestaurant2->idBarRestaurant));
        }

        $var3 = $ruteLL->discotecas()->get(array('disco_ruta.idDiscoteca'));
        $disco = array();
        foreach ($var3 as $disco2){
            $arraydisco = array_push( $disco, Disco::find($disco2->idDiscoteca));
        }

        $var4 = $ruteLL->pubs()->get(array('pub_ruta.idpub'));
        $pub = array();
        foreach ($var3 as $pub2){
            $arraypub = array_push( $pub, Pub::find($pub2->idpub));
        }

        $var5 = $ruteLL->usuaris()->get(array('usuaris_rutes.idusuaris'));
        $usuari = array();
        foreach ($var3 as $usuari2){
            $arrayusuaris = array_push( $usuari, Usuari::find($usuari2->idusuaris));
        }

        return array($var1,$barRestaurant,$disco,$pub,$usuari);
    }

    public function store(Request $request)
    {
        $ruteLL = RuteLL::create($request->all());
        //crear a la taula Usuaris_Rutes
        //$arrayrutes = array();
        //array_push($arrayrutes, $ruteLL->rutcreador);
        //array_push($arrayrutes, $ruteLL->idrutes);
        //$RU=UsuarisRutes::create($arrayrutes);
        //return response()->json($RU, $ruteLL, 201);
        return response()->json($ruteLL, 201);
    }

    public function update(Request $request, RuteLL $ruteLL)
    {
        $ruteLL->update($request->all());
        //upgrade a la taula Usuaris_Rutes
        return response()->json($ruteLL, 200);
    }

    public function delete(RuteLL $ruteLL)
    {
        $ruteLL->delete();
        //delete a la taula Usuaris_Rutes
        //$RU=UsuarisRutes::delete($ruteLL);
        return response()->json(null, 204);
    }
}
