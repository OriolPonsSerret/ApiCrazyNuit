<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuari;
use Validator;

class UsuariController extends Controller
{
    public $successStatus = 200;

    public function index()
    {
        return Usuari::all();
    }
 
    public function show(Usuari $usuari)
    {
        //$usuari = $request->session()->get('key');
        $var1 = $usuari;
        $var2 = $usuari->rutes()->get(array('usuaris_rutes.idrutes'));
        $var3 = $usuari->assoliments()->get(array('usuaris_assoliments.idassoliments'));
        
        return array($var1, $var2, $var3);
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

    public function login(){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }

    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);

        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = Usuari::create($input); 
        $success['token'] =  $user->createToken('MyApp')-> accessToken; 
        $success['name'] =  $user->name;
        return response()->json(['success'=>$success], $this-> successStatus); 
    }
}
