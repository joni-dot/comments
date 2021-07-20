<?php

namespace JoniDot\Comments;

use Illuminate\Support\Facades\Blade;
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
        Blade::component('comments::components._container', 'comments::container');
        Blade::component('comments::components._comments', 'comments::comments');
        Blade::component('comments::components._comment', 'comments::comment');
        Blade::component('comments::components._form', 'comments::form');
        Blade::component('comments::components._form-comment', 'comments::form-comment');
        Blade::component('comments::components._form-validation-error', 'comments::form-validation-error');
        Blade::component('comments::components._form-button', 'comments::form-button');

        Livewire::component('comments::comments', Comments::class);

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
