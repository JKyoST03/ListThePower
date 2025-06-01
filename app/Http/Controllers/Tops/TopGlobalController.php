<?php

namespace App\Http\Controllers\Tops;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Character;

class TopGlobalController extends Controller
{
    public function index(){
        $characters = Character::all()
            ->sortByDesc(function ($character) {
                return $character->userVotes->count();
            });
        return view('top-global.main', compact('characters'));
    }
}
