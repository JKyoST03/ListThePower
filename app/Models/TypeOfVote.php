<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfVote extends Model
{
    /** @use HasFactory<\Database\Factories\TypeOfVoteFactory> */
    use HasFactory;

    protected $fillable = [
        'where',
    ];
}
