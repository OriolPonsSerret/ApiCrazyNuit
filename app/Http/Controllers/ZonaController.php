<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zona;

class ZonaController extends Controller
{
    public function index()
    {
        return Zona::all();
    }
 
    public function show(Zona $zona)
    {
        return $zona;
    }

    public function store(Request $request)
    {
        $zona=Local::create($request->all());
        return response()->json($zona, 201);
    }

    public function update(Request $request, Zona $zona)
    {
        $zona->update($request->all());

        return response()->json($zona, 200);
    }

    public function delete(Zona $zona)
    {
        $zona->delete();

        return response()->json(null, 204);
    }
}
