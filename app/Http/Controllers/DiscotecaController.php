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
        return $discoteca;
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
