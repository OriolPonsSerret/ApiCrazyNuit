<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BarRestaurant;

class BarRestaurantController extends Controller
{
    public function index()
    {
        return BarRestaurant::all();
    }
 
    public function show(BarRestaurant $barrestaurant)
    {
        return $barrestaurant;
    }

    public function store(Request $request)
    {
        $barrestaurant=Local::create($request->all());
        return response()->json($barrestaurant, 201);
    }

    public function update(Request $request, BarRestaurant $barrestaurant)
    {
        $barrestaurant->update($request->all());

        return response()->json($barrestaurant, 200);
    }

    public function delete(BarRestaurant $barrestaurant)
    {
        $barrestaurant->delete();

        return response()->json(null, 204);
    }
}
