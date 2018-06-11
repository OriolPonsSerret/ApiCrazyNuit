<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;
use App\Rute;
use App\Assoliment;
use Validator;

class UsuariController extends Controller
{
    public function index()
    {
        return Usuari::all();
    }
 
    public function show(Usuari $usuari)
    {
        $var1 = $usuari;

        $var2 = $usuari->rutes()->get(array('usuaris_rutes.idrutes'));
        $ruta = array();
        foreach ($var2 as $ruta2){
            $arrayrutes = array_push( $ruta,  Rute::find($ruta2->idrutes));
        }

        $var3 = $usuari->assoliments()->get(array('usuaris_assoliments.idassoliments'));
        $assoliment = array();
        foreach ($var3 as $asso2){
            $arrayassoliment = array_push( $assoliment, Assoliment::find($asso2->idassoliments));
        }
        return array($var1, $ruta, $assoliment);
    }

    public function store(Request $request)
    {
        $usuari = Usuari::create($request->all());
        return response()->json($usuari, 201);
    }

    public function update(Request $request, Usuari $usuari)
    {
        $usuari->update($request->all());
        return response()->json($usuari, 200);
    }

    public function delete(Usuari $usuari)
    {
        $usuari->delete();

        return response()->json(null, 204);
    }
}
