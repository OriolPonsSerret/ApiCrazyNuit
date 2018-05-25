<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disco;

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
        $var3 = $discoteca->zones()->get(array('disco_zones.idzones'));

        return array($var1, $var2, $var3);
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
