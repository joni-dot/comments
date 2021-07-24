<?php

namespace JoniDot\Comments\Database\Factories;

use JoniDot\Comments\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => null,
            'commentable_id' => 1,
            'commentable_type' => 'type',
            'comment' => $this->faker->sentences(2, true),
        ];
    }
}
