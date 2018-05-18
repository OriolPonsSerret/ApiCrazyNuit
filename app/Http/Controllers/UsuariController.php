<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;

class UsuariController extends Controller
{
    public function index()
    {
        return Usuari::all();
    }
 
    public function show(Usuari $usuari)//, $id)
    {
        //$value = $request->session()->get('key');
        /*$usuari = DB::table('usuaris')
            ->join('rutes', 'usuaris.idusuaris', '=', 'rutes.rutcreador')       
            ->select('rutes.rutnom')
            ->get();*/
       
        return $usuari;
    }

    public function store(Request $request)
    {
        $usuari=Usuari::create($request->all());
        return response()->json($usuari, 201);
    }

    public function update(Request $request, Usuari $usuari)
    {
        $usuari->update($request->all());

        return response()->json($usuari, 200);
    }

    public function delete(Usuari $usuari)
    {
        $usuari->delete();

        return response()->json(null, 204);
    }
}
