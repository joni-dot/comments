<?php

namespace JoniDot\Comments\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use JoniDot\Comments\CommentsServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'JoniDot\\Comments\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );

        config([
            'app.key' => 'klsdnmeikljdslfmnsdflkjfdkljkdfl',
        ]);
    }

    protected function getPackageProviders($app)
    {
        return [
            CommentsServiceProvider::class,
            LivewireServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        include_once __DIR__.'/../database/migrations/2021_04_21_000001_create_comments_table.php';
        
        (new \CreateCommentsTable())->up();
    }
}
