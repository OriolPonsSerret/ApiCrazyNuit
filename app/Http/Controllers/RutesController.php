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
        return $rute;
    }

    public function store(Request $request)
    {
        $rute=Rute::create($request->all());
        //crear a la taula Usuaris_Rutes
        app('App\Http\Controllers\UsuarisRutesController')->store($request->all());

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
