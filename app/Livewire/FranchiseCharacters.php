<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class FranchiseCharacters extends Component
{
    public $character;

    public function mount($character)
    {
        $this->character = $character;
    }

    public function render()
    {
        $image = $this->character->image;
        $path = $this->character->franchise->raw;
        
        $imageUrl = Storage::disk('franchises')->url($path.'/'.$image);
        return view('livewire.franchise-characters', compact('image', 'imageUrl'));
    }
}
    