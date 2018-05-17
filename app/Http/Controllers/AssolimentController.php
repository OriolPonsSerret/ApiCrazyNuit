<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assoliment;

class AssolimentController extends Controller
{
    public function index()
    {
        return Assoliment::all();
    }
 
    public function show(Assoliment $assoliment)
    {
        return $assoliment;
    }

    public function store(Request $request)
    {
        $assoliment=Assoliment::create($request->all());
        return response()->json($assoliment, 201);
    }

    public function update(Request $request, Assoliment $assoliment)
    {
        $assoliment->update($request->all());

        return response()->json($assoliment, 200);
    }

    public function delete(Assoliment $assoliment)
    {
        $assoliment->delete();

        return response()->json(null, 204);
    }
}
