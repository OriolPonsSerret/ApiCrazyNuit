<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsuarisRutes;

class UsuarisRutesController extends Controller
{
     public function store(Request $request)
    {
        $usuarisRutes=UsuarisRutes::create($request->all());
        return response()->json($usuarisRutes, 201);
    }
     public function update(Request $request, UsuarisRutes $usuarisRutes)
    {
        $usuarisRutes->update($request->all());
        return response()->json($usuarisRutes, 200);
    }

    public function delete(UsuarisRutes $usuarisRutes)
    {
        $usuarisRutes->delete();
        return response()->json(null, 204);
	}
}
