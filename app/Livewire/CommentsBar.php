<?php

namespace App\Livewire;

use Livewire\Component;

class CommentsBar extends Component
{

    public $character;
    
    public function mount($character)
    {
        $this->character = $character;
    }
    public function render()
    {
        return view('livewire.comments');
    }
}
