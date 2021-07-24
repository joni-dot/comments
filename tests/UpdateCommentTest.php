<?php

namespace JoniDot\Comments\Tests;

use JoniDot\Comments\Http\Livewire\Comments;
use JoniDot\Comments\Models\Comment;
use JoniDot\Comments\Tests\Support\Models\TestModel;
use Livewire\Livewire;

class UpdateCommentTest extends TestCase
{
    /** @test  */
    public function can_update_comment()
    {
        $testModel = new TestModel;

        $testModel->forceFill([
            'id' => 1,
        ]);
        
        $comment = Comment::factory()->create([
            'commentable_id' => $testModel->id,
            'commentable_type' => $testModel->getMorphClass(),
            'comment' => 'Old.',
        ]);

        Livewire::test(Comments::class, [
            'model' => $testModel,
            'showUser' => false,
        ])
            ->set('editableCommentId', $comment->id)
            ->set('editableComment', 'New.')
            ->call('updateComment', $comment->id);

        $this->assertSame(
            Comment::find($comment->id)->comment,
            'New.'
        );
    }
}
