<?php

namespace JoniDot\Comments\Tests;

use JoniDot\Comments\Http\Livewire\Comments;
use JoniDot\Comments\Models\Comment;
use JoniDot\Comments\Tests\Support\Models\TestModel;
use Livewire\Livewire;

class RemoveCommentTest extends TestCase
{
    /** @test  */
    public function can_remove_comment()
    {
        $testModel = new TestModel;

        $testModel->forceFill([
            'id' => 1,
        ]);
        
        $comment = Comment::factory()->create([
            'commentable_id' => $testModel->id,
            'commentable_type' => $testModel->getMorphClass(),
        ]);

        Livewire::test(Comments::class, [
            'model' => $testModel,
            'showUser' => false,
        ])
            ->call('removeComment', $comment->id);

        $this->assertNull(Comment::find($comment->id));
    }
}
