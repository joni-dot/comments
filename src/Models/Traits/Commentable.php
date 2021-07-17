<?php

namespace JoniDot\Comments\Models\Traits;

use Illuminate\Support\Facades\Auth;
use JoniDot\Comments\Models\Comment;

trait Commentable
{
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function addComment(string $comment): void
    {
        $this->comments()->create([
            'user_id' => Auth::id(),
            'comment' => $comment,
        ]);
    }
}
