<?php

namespace JoniDot\Comments\Tests\Support\Models;

use JoniDot\Comments\Models\Traits\Commentable;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    use Commentable;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}
