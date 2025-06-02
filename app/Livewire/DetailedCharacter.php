<?php

namespace App\Livewire;

use Livewire\Component;

class DetailedCharacter extends Component
{
    public $character;
    public $imageUrl;


    public function mount($character, $imageUrl)
    {
        $this->character = $character;
        $this->imageUrl = $imageUrl;
    }

    public function render()
    {
        $abilities = json_decode($this->character->habilities, true);
        $disadvantages = json_decode($this->character->disadvantages, true);
        return view('livewire.detailed-character', compact('abilities','disadvantages'));
    }
}
