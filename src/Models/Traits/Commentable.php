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

    /**
     * Check that user can remove the comment.
     *
     * @param  int  $commentId
     * @return bool
     *
     */
    public function authorizeRemoveComment(int $commentId): bool
    {
        return true;
    }

    /**
     * Remove the model related comment.
     *
     * @param  int  $commentId
     * @return void
     *
     */
    public function removeComment(int $commentId): void
    {
        $this->comments()
            ->whereId($commentId)
            ->delete();
    }
}
