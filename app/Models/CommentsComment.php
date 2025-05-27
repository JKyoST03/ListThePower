<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentsComment extends Model
{
    /** @use HasFactory<\Database\Factories\FranchiseCommentCommentsFactory> */
    use HasFactory;

        protected $fillable = [
        'content',
        'user_id',
        'comment_id',
        ];
}
