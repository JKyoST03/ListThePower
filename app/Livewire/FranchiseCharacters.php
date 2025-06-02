<?php

namespace App\Livewire;

use App\Models\TypeOfVote;
use App\Models\Vote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class FranchiseCharacters extends Component
{
    public $character;
    public $franchiseIdentifier;
    public $showComments = false;
    public $showDetails = false;
    protected $listeners = [
        'closeComments' => 'closeComments',
        'closeDetails' => 'closeDetails',
    ];

    public function mount($character)
    {
        $this->character = $character;
        $this->franchiseIdentifier = TypeOfVote::where('where', '=', 'Franchises')->first()->id;
    }

    public function vote(){
        $userId = Auth::id();

        if (!$this->loginRedirect($userId)) {
            return redirect()->route('login');
        }
        
        $characterId = $this->character->id;
        $whereId = $this->franchiseIdentifier;
        $alreadyVoted = Vote::where('character_id', $characterId)
            ->where('user_id', $userId)
            ->where('where_id', $whereId)
            ->first();

        if($alreadyVoted){
            $alreadyVoted->delete();
        }
        else{
            Vote::create([
                'character_id' => $characterId,
                'user_id' => $userId,
                'where_id' => $whereId,
            ]);
        }
    }

    public function openComments(){
        $this->showComments = true;
    }

    public function closeComments(){
        $this->showComments = false;
    }

    public function openDetails(){
        $this->showDetails = true;
    }

    public function closeDetails(){
        $this->showDetails = false;
    }
    
    protected function loginRedirect($id){
        if(empty($id)){
            return false;
        }
        return true;
    }
    
    public function render()
    {
        $image = $this->character->image;
        $path = $this->character->franchise->raw;
        $votes = Vote::where('character_id', $this->character->id)
            ->where('where_id', $this->franchiseIdentifier)
            ->count();
        
        $imageUrl = Storage::disk('franchises')->url($path.'/'.$image);
        return view('livewire.franchise-characters', compact('image', 'imageUrl', 'votes'));
    }
}
    