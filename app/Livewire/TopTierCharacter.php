<?php

namespace App\Livewire;

use App\Models\Character;
use Livewire\Component;

class TopTierCharacter extends Component
{
    public $franchise;

    public function mount($franchise){
        $this->franchise = $franchise;
    }

    public function render()
    {
            $franchiseCharacters = Character::where('franchise_id', $this->franchise->id)
                ->withCount('userVotes')
                ->orderByDesc('user_votes_count')
                ->take(10)
                ->get();
        
        return view('livewire.top-tier-character', compact('franchiseCharacters'));
    }
}
