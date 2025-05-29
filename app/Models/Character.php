<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    /** @use HasFactory<\Database\Factories\CharacterFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'habilities',
        'disadvantages',
        'description',
        'image',
        'franchise_id',
    ];

    public function franchise()
    {
        return $this->belongsTo(Franchise::class);
    }

        public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function userVotes()
    {
        return $this->belongsToMany(User::class, 'votes', 'character_id', 'user_id')->withPivot('character_id');
    }
}
