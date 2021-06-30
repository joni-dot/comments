<?php

namespace JoniDot\Comments;

use JoniDot\Comments\Commands\CommentsCommand;
use JoniDot\Comments\Http\Livewire\Comments;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasCommand(CommentsCommand::class);
    }

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    public function packageBooted()
    {
        Livewire::component('comments::comments', Comments::class);
    }
}
