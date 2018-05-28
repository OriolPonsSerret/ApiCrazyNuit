<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;
use Validator;

class UsuariController extends Controller
{
    public function index()
    {
        return Usuari::all();
    }
 
    public function show(Usuari $usuari)
    {
        //$usuari = $request->session()->get('key');
        $var1 = $usuari;
        $var2 = $usuari->rutes()->get(array('usuaris_rutes.idrutes'));
        $var3 = $usuari->assoliments()->get(array('usuaris_assoliments.idassoliments'));
        
        return array($var1, $var2, $var3);
    }

    public function store(Request $request)
    {
        $usuari=Usuari::create($request->all());
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
