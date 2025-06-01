<?php

namespace App\Http\Controllers\Tops;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Franchise;

class TopPersonalController extends Controller
{
    public function index(){
        $franchises = Franchise::all();
        $characters = Character::all();
        return view('top-personal.create', compact('franchises', 'characters'));
    }
}
