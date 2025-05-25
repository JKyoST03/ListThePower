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

        public function indexFranchise(Request $request){
            $franchise = Franchise::where('id', '=', $request->route('id'))->first();
            $characters = Character::where('franchise_id', '=', $request->route('id'))->paginate('6');
        return view('top-franquicia.franchise', compact('franchise', 'characters'));
    }
}
