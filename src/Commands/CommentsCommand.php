<?php

namespace JoniDot\Comments\Commands;

use Illuminate\Console\Command;

class CommentsCommand extends Command
{
    public $signature = 'comments';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
