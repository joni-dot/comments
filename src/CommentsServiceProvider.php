<?php

namespace JoniDot\Comments;

use JoniDot\Comments\Http\Livewire\Comments;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CommentsServiceProvider extends PackageServiceProvider
{
    /**
     * Configure a package related things.
     *
     * @param  \Spatie\LaravelPackageTools\Package
     * @return void
     */
    public function configurePackage(Package $package): void
    {
        $package
            ->name('comments')
            ->hasViews();
    }

    /**
     * Do specific things after package has been booted.
     *
     * @return void
     */
    public function packageBooted(): void
    {
        Livewire::component('comments::comments', Comments::class);

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
