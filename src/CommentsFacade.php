<?php

namespace JoniDot\Comments;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JoniDot\Comments\Comments
 */
class CommentsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'comments';
    }
}
