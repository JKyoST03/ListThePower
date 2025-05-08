<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfComment extends Model
{
    /** @use HasFactory<\Database\Factories\TypeOfCommentFactory> */
    use HasFactory;

    protected $fillable = [
        'where',
    ];
}
