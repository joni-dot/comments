<?php

namespace JoniDot\Comments;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use JoniDot\Comments\Commands\CommentsCommand;

class CommentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('comments')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_comments_table')
            ->hasCommand(CommentsCommand::class);
    }
}
