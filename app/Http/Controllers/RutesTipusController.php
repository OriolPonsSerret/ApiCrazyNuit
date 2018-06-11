<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rute;

class RutesTipusController extends Controller
{
    public function index()
    {
    	$result = array();
    	$result = Rute::find('rutmida', '=', 4);

        return $result;
    }
}
