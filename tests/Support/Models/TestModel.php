<?php

namespace JoniDot\Comments\Tests\Support\Models;

use Illuminate\Database\Eloquent\Model;
use JoniDot\Comments\Models\Traits\Commentable;

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
