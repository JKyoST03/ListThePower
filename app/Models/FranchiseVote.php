<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FranchiseVote extends Model
{
    /** @use HasFactory<\Database\Factories\FranchiseVoteFactory> */
    use HasFactory;

    protected $fillable = [
        'character_id',
        'user_id',
        'where_id',
    ];
}
