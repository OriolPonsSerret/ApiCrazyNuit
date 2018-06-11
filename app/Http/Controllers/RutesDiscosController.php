<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RutesDiscos;

class RutesDiscosController extends Controller
{
    public function store(Request $request)
    {
        $rutesDiscos=RutesDiscos::create($request->all());
        return response()->json($rutesDiscos, 201);
    }
     public function update(Request $request, RutesDiscos $rutesDiscos)
    {
        $rutesDiscos->update($request->all());
        return response()->json($rutesDiscos, 200);
    }

    public function delete(RutesDiscos $rutesDiscos)
    {
        $rutesDiscos->delete();
        return response()->json(null, 204);
	}
}
