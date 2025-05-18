<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopFranquiciaController extends Controller
{
    public function index(){
        return view('top-franquicia.main');
    }
}
