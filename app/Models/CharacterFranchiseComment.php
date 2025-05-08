<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterFranchiseComment extends Model
{
    /** @use HasFactory<\Database\Factories\CharacterFranchiseCommentFactory> */
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'character_id',
        'where_id',
    ];
}
