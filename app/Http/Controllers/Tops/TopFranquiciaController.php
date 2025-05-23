<?php

namespace App\Http\Controllers\Tops;

use App\Models\Character;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Franchise;

class TopFranquiciaController extends Controller
{
    public function index(){
        $franchises = Franchise::all();
        return view('top-franquicia.main', compact('franchises'));
    }

        public function indexFranchise(){
        $franchises = Franchise::all();
        return view('top-franquicia.franchise', compact('franchises'));
    }
}
