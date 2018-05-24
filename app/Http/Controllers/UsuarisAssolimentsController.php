<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsuarisAssoliments

class UsuarisAssolimentsController extends Controller
{
     public function store(Request $request)
    {
        $usuarisAssoliments=UsuarisAssoliments::create($request->all());
        return response()->json($usuarisAssoliments, 201);
    }
     public function update(Request $request, UsuarisAssoliments $usuarisAssoliments)
    {
        $usuarisAssoliments->update($request->all());
        return response()->json($usuarisAssoliments, 200);
    }

    public function delete(UsuarisAssoliments $usuarisAssoliments)
    {
        $usuarisAssoliments->delete();
        return response()->json(null, 204);
	}
}
