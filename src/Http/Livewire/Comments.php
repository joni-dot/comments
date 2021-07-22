<?php

namespace JoniDot\Comments\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;
use Livewire\Component;

class Comments extends Component
{
    public $model;
    public $comment;

    /**
     * Mount component and set values like model.
     */
    public function mount(Model $model): void
    {
        $this->model = $model;
        $this->comment = '';
    }

    /**
     * Render Comments component and show model related comments.
     *
     * @return void
     */
    public function render(): View
    {
        return view('comments::livewire.comments', [
            'comments' => $this->model->comments()->get(),
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
}
