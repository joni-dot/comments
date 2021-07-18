<?php

namespace JoniDot\Comments\Models\Traits;

use Illuminate\Support\Facades\Auth;
use JoniDot\Comments\Models\Comment;

trait Commentable
{
    /**
     * Get all of the model's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * Add comment for the model.
     * 
     * @param  string  $comment
     * @return void
     * 
     */
    public function addComment(string $comment): void
    {
        $this->comments()->create([
            'user_id' => Auth::id(),
            'comment' => $comment,
        ]);
    }
}
