<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentari;

class ComentariController extends Controller
{
    public function index()
    {
        return Comentari::all();
    }
 
    public function show(Comentari $comentari)
    {
        return $comentari;
    }

    public function store(Request $request)
    {
        $comentari=Local::create($request->all());
        return response()->json($comentari, 201);
    }

    public function update(Request $request, Comentari $comentari)
    {
        $comentari->update($request->all());

        return response()->json($comentari, 200);
    }

    public function delete(Comentari $comentari)
    {
        $comentari->delete();

        return response()->json(null, 204);
    }
}
