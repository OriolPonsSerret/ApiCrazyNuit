<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pub;

class PubController extends Controller
{
    public function index()
    {
        return Pub::all();
    }
 
    public function show(Pub $pub)
    {
        return $pub;
    }

    public function store(Request $request)
    {
        $pub=Pub::create($request->all());
        return response()->json($pub, 201);
    }

    public function update(Request $request, Pub $pub)
    {
        $pub->update($request->all());

        return response()->json($pub, 200);
    }

    public function delete(Pub $pub)
    {
        $pub->delete();

        return response()->json(null, 204);
    }
}