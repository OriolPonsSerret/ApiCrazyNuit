<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RutesBars;

class RutesBarsController extends Controller
{
    public function store(Request $request)
    {
        $rutesBars=RutesBars::create($request->all());
        return response()->json($rutesBars, 201);
    }
     public function update(Request $request, RutesBars $rutesBars)
    {
        $rutesBars->update($request->all());
        return response()->json($rutesBars, 200);
    }

    public function delete(RutesBars $rutesBars)
    {
        $rutesBars->delete();
        return response()->json(null, 204);
	}
}
