<?php

namespace App\Http\Livewire\General;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Comments extends Component
{
    public $model;
    public $comment;

    public function mount(Model $model)
    {
        $this->model = $model;
        $this->comment = '';
    }

    /**
     * Render Comments component and show model related comments.
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.general.comments', [
            'comments' => $this->model->comments()->get(),
        ]);
    }

    /**
     * Validate comment and add comment for model.
     *
     * @return void
     */
    public function addComment()
    {
        $this->validate([
            'comment' => 'required|min:1',
        ]);

        $this->model->addComment($this->comment);

        $this->comment = '';
    }
}
