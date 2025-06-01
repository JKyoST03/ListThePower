<?php

namespace App\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentsBar extends Component
{

    public $character;
    public $showComments;
    public $newComment;
    public $franchiseIdentifier;
    
    public function mount($character, $showComments, $franchiseIdentifier)
    {
        $this->character = $character;
        $this->showComments = $showComments;
        $this->franchiseIdentifier = $franchiseIdentifier;
    }

    public function closeComments()
    {
        if ($this->showComments === false) {
            $this->dispatch('closeComments');
        }
    }

    public function postComment(){
        $comment = new Comment;

        $comment->content = $this->newComment;
        $comment->user_id = Auth::id();
        $comment->character_id = $this->character->id;
        $comment->where_id = $this->franchiseIdentifier;

        $comment->save();

        $this->newComment = null;
    }
    
    public function render()
    {
        $characterComments = $this->character->comments()->where("where_id", $this->franchiseIdentifier)->get();
        return view('livewire.comments-bar', compact('characterComments'));
    }
}
