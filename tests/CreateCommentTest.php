<?php

namespace JoniDot\Comments\Tests;

use JoniDot\Comments\Http\Livewire\Comments;
use JoniDot\Comments\Models\Comment;
use JoniDot\Comments\Tests\Support\Models\TestModel;
use Livewire\Livewire;

class CreateCommentTest extends TestCase
{
    /** @test  */
    public function can_create_comment()
    {
        $testModel = new TestModel;

        $testModel->forceFill([
            'id' => 1,
        ]);

        Livewire::test(Comments::class, ['model' => $testModel])
            ->set('comment', 'Test comment.')
            ->call('addComment');

        $this->assertTrue(Comment::whereComment('Test comment.')->exists());
    }
}
