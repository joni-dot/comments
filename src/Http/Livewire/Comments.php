<?php

namespace JoniDot\Comments\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;
use Livewire\Component;

class Comments extends Component
{
    public $model;
    public $comment;
    public $editableCommentId;
    public $editableComment;

    /**
     * Mount component and set values like model.
     */
    public function mount(Model $model): void
    {
        $this->model = $model;
        $this->comment = '';
        $this->editableCommentId = null;
        $this->editableComment = '';
    }

    /**
     * Render Comments component and show model related comments.
     *
     * @return void
     */
    public function render(): View
    {
        return view('comments::livewire.comments', [
            'comments' => $this->model
                ->comments()
                ->with('user')
                ->get(),
        ]);
    }

    /**
     * Validate comment and add comment for model.
     *
     * @return void
     */
    public function addComment(): void
    {
        $this->validate([
            'comment' => 'required|min:1',
        ]);

        $this->model->addComment($this->comment);

        $this->comment = '';
    }

    /**
     * Remove comment from database.
     *
     * @param  int  $commentId
     * @return void
     */
    public function removeComment($commentId): void
    {
        if (! $this->model->authorizeRemoveComment($commentId)) {
            abort(403);
        }

        $this->model->removeComment($commentId);
    }

    /**
     * Activate comment edit field.
     *
     * @param  int  $commentId
     * @return void
     */
    public function editComment($commentId): void
    {
        $this->editableCommentId = $commentId;

        $this->editableComment = $this->model
            ->comments()
            ->whereId($commentId)
            ->first()
            ->comment;
    }

    /**
     * Update specific comment.
     *
     * @param  int  $commentId
     * @return void
     */
    public function updateComment($commentId): void
    {
        if (! $this->model->authorizeUpdateComment($commentId)) {
            abort(403);
        }

        $this->validate([
            'editableComment' => 'required|min:1',
        ]);

        $this->model->updateComment(
            $commentId,
            $this->editableComment
        );

        $this->editableCommentId = null;
        $this->editableComment = '';
    }
}
