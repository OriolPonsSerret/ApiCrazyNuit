<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RutesPubs;

class RutesPubsController extends Controller
{
    public function store(Request $request)
    {
        $rutesPubs=RutesPubs::create($request->all());
        return response()->json($rutesPubs, 201);
    }
     public function update(Request $request, RutesPubs $rutesPubs)
    {
        $rutesPubs->update($request->all());
        return response()->json($rutesPubs, 200);
    }

    public function delete(RutesPubs $rutesPubs)
    {
        $rutesPubs->delete();
        return response()->json(null, 204);
	}
}
