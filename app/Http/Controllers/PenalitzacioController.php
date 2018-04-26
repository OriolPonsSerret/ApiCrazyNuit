<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penalitzacion;

class PenalitzacioController extends Controller
{
    public function index()
    {
        return Penalitzacion::all();
    }
 
    public function show(Penalitzacion $penalitzacio)
    {
        return $penalitzacio;
    }

    public function store(Request $request)
    {
        $penalitzacio=Local::create($request->all());
        return response()->json($penalitzacio, 201);
    }

    public function update(Request $request, Penalitzacion $penalitzacio)
    {
        $penalitzacio->update($request->all());

        return response()->json($penalitzacio, 200);
    }

    public function delete(Penalitzacion $penalitzacio)
    {
        $penalitzacio->delete();

        return response()->json(null, 204);
    }
}
